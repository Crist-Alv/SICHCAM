$(document).ready(function () {
    //Para Agregar la zona al combobox de Horario
    $.ajax({
      type: 'POST',
      url: '../docs/include/getZonah.php'
    })
      .done(function (dotos) {
        $('#zonah').html(dotos)
      })
      .fail(function () {
        alert('Hubo un error al cargar las dotos')
      })

      //Para Agregar el Agente al combobox de Horario
    $.ajax({
        type: 'POST',
        url: '../docs/include/getAgenteh.php'
      })
        .done(function (dotos) {
          $('#agenteh').html(dotos)
        })
        .fail(function () {
          alert('Hubo un error al cargar las dotos')
        })

        //Para Agregar el Arma al combobox de Horario
    $.ajax({
        type: 'POST',
        url: '../docs/include/getArmah.php'
      })
        .done(function (dotos) {
          $('#armah').html(dotos)
        })
        .fail(function () {
          alert('Hubo un error al cargar las dotos')
        })

        //Cargar los combobox del editar
        //Para Agregar la zona al combobox de Horario
    $.ajax({
      type: 'POST',
      url: '../docs/include/getZonah.php'
    })
      .done(function (dotos) {
        $('#edzonah').html(dotos)
      })
      .fail(function () {
        alert('Hubo un error al cargar las dotos')
      })

      //Para Agregar el Agente al combobox de Horario
    $.ajax({
        type: 'POST',
        url: '../docs/include/getAgenteh.php'
      })
        .done(function (dotos) {
          $('#edagenteh').html(dotos)
        })
        .fail(function () {
          alert('Hubo un error al cargar las dotos')
        })

        //Para Agregar el Arma al combobox de Horario
    $.ajax({
        type: 'POST',
        url: '../docs/include/getArmah.php'
      })
        .done(function (dotos) {
          $('#edarmah').html(dotos)
        })
        .fail(function () {
          alert('Hubo un error al cargar las dotos')
        })
  })