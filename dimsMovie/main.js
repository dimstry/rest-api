function CariMovie() {
  $('#movie-list').html('');
  $.ajax({
    url: 'http://www.omdbapi.com/',
    type: 'get',
    dataType: 'json',
    data: {
      'apikey': 'c9bc65ca',
      's': $('#search-input').val()
    },
    success: function(result) {
      if (result.Response == "True") {
        let movie = result.Search;

        $.each(movie, function(i, data) {
          $('#movie-list').append(`
            <div class="col-md-4 col-sm-12">
            <div class="card mb-3">
            <img class="card-img-top" src="`+ data.Poster +`" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">`+ data.Title +`</h5>
            <h6 class="card-subtitle mb-2 text-muted">`+ data.Year +`</h6>
            <a href="#" class="card-link detail" data-toggle="modal" data-target="#exampleModal" data-id="`+data.imdbID +`">Detail</a>
            </div>
            </div>
            </div>
            `)
        });
        $('#search-input').val('');
      } else {
        $('#movie-list').html(
          `
          <div class="col">
          <h1 class="text-center">Movie not found</h1>
          </div>
          `)
      }
      $('#search-input').val('');
    }
  });
}


$('#search-button').on('click', function() {
  CariMovie();
});


$('#search-input').on('keyup', function(e) {
  if (e.keycode === 13) {
    CariMovie();
  }
});


$('#movie-list').on('click', '.detail', function() {
  $.ajax({
    url: 'http://www.omdbapi.com/',
    type: 'get',
    dataType: 'json',
    data: {
      'apikey': 'c9bc65ca',
      'i': $(this).data('id')
    },
    success: function(result) {
      if (result.Response == "True") {
        $('.modal-body').html(`
          <div class="container-fluid">
          <div class="row">
          <div class="col-md-4">
          <img src="`+result.Poster+`" class="img-fluid">
          </div>
          <div class="col-md-8">
          <ul class="list-group">
          <li class="list-group-item"><h3>`+result.Title+`</h3></li>
          <li class="list-group-item">Release : `+result.Released+`</li>
          <li class="list-group-item">Genre : `+result.Genre+`</li>
          <li class="list-group-item">Director : `+result.Director+`</li>
          <li class="list-group-item"> Actors : `+result.Actors+`</li>
          </ul>
          </div>
          </div>
          </div>
          `);
      }
    }
  });
});