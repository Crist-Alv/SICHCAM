$(document).ready(function () {
  //Para AgregarDModal
  $.ajax({
    type: 'POST',
    url: '../docs/includes/getDepto.php'
  })
    .done(function (dotos) {
      $('#departx').html(dotos)
    })
    .fail(function () {
      alert('Hubo un errror al cargar las dotos')
    })


  $('#departx').on('change', function () {
    var idm = $('#departx').val()
    $.ajax({
      type: 'POST',
      url: '../docs/includes/getMuni.php',
      data: { 'idm': idm }
    })
      .done(function (dotos) {
        $('#mun').html(dotos)
      })
      .fail(function () {
        alert('Hubo un errror al cargar los datos del los departamentos')
      })
  })
})

$(document).ready(function () {
  //Para EditarDModal
  $.ajax({
    type: 'POST',
    url: '../docs/includes/getDepto.php'
  })
    .done(function (dotosm) {
      $('#eddepto').html(dotosm)
    })
    .fail(function () {
      alert('Hubo un errror al cargar las dotos')
    })


  $('#eddepto').on('change', function () {
    var idm = $('#eddepto').val()
    $.ajax({
      type: 'POST',
      url: '../docs/includes/getMuni.php',
      data: { 'idm': idm }
    })
      .done(function (dotosm) {
        $('#edmun').html(dotosm)
      })
      .fail(function () {
        alert('Hubo un error al cargar los datos del los municipios')
      })
  })
})