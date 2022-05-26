$.getJSON('data/itzy.json', function (data) {
  let member = data.itzy;
  $.each(member, function(i, data) {
    $('#daftar-member').append('<div class="col-md-4"><div class="card mb-3"><img class="card-img-top" src="img/'+ data.Gambar +'"><div class="card-body"><h5 class="card-title">'+ data.Nama +'</h5><p class="card-text"> Posisi : '+ data.Posisi +'</p> <p class="card-text">Negara : '+ data.Negara +'</p> <a href="#" class="btn btn-primary">Go</a></div></div></div>')
  });
});