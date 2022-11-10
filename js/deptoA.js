$(document).ready(function () {
    //Para AgregarAModal
    $.ajax({
      type: 'POST',
      url: '../docs/includes/getDepto.php'
    })
      .done(function (dotos) {
        $('#deptonacx').html(dotos)
      })
      .fail(function () {
        alert('Hubo un error al cargar las dotos')
      })
  
    $('#deptonacx').on('change', function () {
      var idm = $('#deptonacx').val()
      $.ajax({
        type: 'POST',
        url: '../docs/includes/getMuni.php',
        data: { 'idm': idm }
      })
        .done(function (dotos) {
          $('#munnacx').html(dotos)
        })
        .fail(function () {
          alert('Hubo un errror al cargar los datos del los departamentos')
        })
    })

    //Padre
    $.ajax({
      type: 'POST',
      url: '../docs/includes/getDepto.php'
    })
      .done(function (dotos) {
        $('#deptonacpx').html(dotos)
      })
      .fail(function () {
        alert('Hubo un error al cargar las dotos')
      })
      //Madre
      $.ajax({
        type: 'POST',
        url: '../docs/includes/getDepto.php'
      })
        .done(function (dotos) {
          $('#deptonacmx').html(dotos)
        })
        .fail(function () {
          alert('Hubo un error al cargar las dotos')
        })
  })