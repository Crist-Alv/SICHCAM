$(document).ready(function() {
  // Global Settings

  // Testing Jquery
  console.log('jquery is working!');
//prueba edit table
 var logAllEvents = false;
var car="";

            //Para editar la tabla
            var simpleEditor = new SimpleTableCellEditor("tabledit");
            simpleEditor.SetEditableClass("editMe", { validation: $.isNumeric });

            $('#tabledit').on("cell:edited", function (event) {
                console.log(`'${event.oldValue}' changed to '${event.newValue}'`);
if (logAllEvents) {

                $('table').on("cell:onEditEnter", function (event) {
                    console.log('onEditEnter event');

                });

                $('table').on("cell:onEditEntered", function (event) {
                    console.log('onEditEntered event');
                });

                $('table').on("cell:onEditExit", function (event) {
                    console.log('onEditExit event');
                });

                $('table').on("cell:onEditExited", function (event) {
                    console.log('onEditExited event');
                });
            }
  /*$("#tabledit tbody tr").change(function(event){
    car =$(this).find("td:first-child").text();
    console.log(car);
        })*/
    });

    //Limpiar los campos donde se filtra los datos del alumno
   $("#btnLimpiar").click(function(event){
    $('#getStud').trigger('reset');
   });

//envia los datos para guardarlos en la db
   $("#btnNota").click(function(event){
    var notas=[];
    document.querySelectorAll('#tabledit tbody tr').forEach(function(e){
      let fila={
        carnet: e.querySelector('#carnet').innerText,
        nota1: e.querySelector('#nota1').innerText,
        nota2: e.querySelector('#nota2').innerText,
        nota3: e.querySelector('#nota3').innerText,
        nota4: e.querySelector('#nota4').innerText
      };
      notas.push(fila);
    })
    var nots={"notas":notas};
    $.ajax({
        type: "POST",
        url:'insertarNotas.php',
        data:{'json':JSON.stringify(nots)},       
        success: function(response){
          obtenerAlumnos();// refresh the table
        }
      });
 });
  //$('#getStud').hide();

  //para obtener los datos de la tabla
  $('#getStud').submit(e => {
    e.preventDefault();
    obtenerAlumnos();
    
  });

  //obtiene todos los alumnos segun el correspondiente filtro
 function obtenerAlumnos(){
  const postData = {
      materia: $('#materia').val(),
      ciclo: $('#ciclo').val(),
      anio: $('#anio').val(),
      grado:$('#grado').val(),
      seccion:$('#seccion').val()
    };
    url= 'obtenerAlu.php';
    $.post(url, postData, (response) => {
       const alumnos = JSON.parse(response);
          let template = '';
        alumnos.forEach(alumno => {
             if (alumno.nota4==null && alumno.nota3==null && alumno.nota2==null && alumno.nota1==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe"></td>
                  <td id="nota2" class="editMe"></td>
                  <td id="nota3" class="editMe"></td>
                  <td id="nota4" class="editMe"></td>
                  <td ></td>
                  </tr>
                ` 
              }else if (alumno.nota4==null && alumno.nota3==null && alumno.nota2==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe">${alumno.nota1}</td>
                  <td id="nota2" class="editMe"></td>
                  <td id="nota3" class="editMe"></td>
                  <td id="nota4" class="editMe"></td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else if (alumno.nota4==null && alumno.nota1==null && alumno.nota3==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe"></td>
                  <td id="nota2" class="editMe">${alumno.nota2}</td>
                  <td id="nota3" class="editMe"></td>
                  <td id="nota4" class="editMe"></td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else if (alumno.nota1==null && alumno.nota2==null && alumno.nota3==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe"></td>
                  <td id="nota2" class="editMe"></td>
                  <td id="nota3" class="editMe"></td>
                  <td id="nota4" class="editMe">${alumno.nota4}</td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else if (alumno.nota3==null && alumno.nota4==null && alumno.nota1==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe"></td>
                  <td id="nota2" class="editMe">${alumno.nota2}</td>
                  <td id="nota3" class="editMe"></td>
                  <td id="nota4" class="editMe"></td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else if (alumno.nota2==null && alumno.nota1==null && alumno.nota4==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe"></td>
                  <td id="nota2" class="editMe"></td>
                  <td id="nota3" class="editMe">${alumno.nota3}</td>
                  <td id="nota4" class="editMe"></td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else if (alumno.nota4==null && alumno.nota3==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe">${alumno.nota1}</td>
                  <td id="nota2" class="editMe">${alumno.nota2}</td>
                  <td id="nota3" class="editMe"></td>
                  <td id="nota4" class="editMe"></td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else if (alumno.nota4==null && alumno.nota1==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe"></td>
                  <td id="nota2" class="editMe">${alumno.nota2}</td>
                  <td id="nota3" class="editMe">${alumno.nota3}</td>
                  <td id="nota4" class="editMe"></td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else if (alumno.nota2==null && alumno.nota4==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe">${alumno.nota1}</td>
                  <td id="nota2" class="editMe"></td>
                  <td id="nota3" class="editMe">${alumno.nota3}</td>
                  <td id="nota4" class="editMe"></td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else if (alumno.nota1==null && alumno.nota3==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe"></td>
                  <td id="nota2" class="editMe">${alumno.nota2}</td>
                  <td id="nota3" class="editMe"></td>
                  <td id="nota4" class="editMe">${alumno.nota4}</td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else if (alumno.nota3==null && alumno.nota2==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe">${alumno.nota1}</td>
                  <td id="nota2" class="editMe"></td>
                  <td id="nota3" class="editMe"></td>
                  <td id="nota4" class="editMe">${alumno.nota4}</td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else if (alumno.nota1==null && alumno.nota2==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe"></td>
                  <td id="nota2" class="editMe"></td>
                  <td id="nota3" class="editMe">${alumno.nota3}</td>
                  <td id="nota4" class="editMe">${alumno.nota4}</td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else if (alumno.nota4==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe">${alumno.nota1}</td>
                  <td id="nota2" class="editMe">${alumno.nota2}</td>
                  <td id="nota3" class="editMe">${alumno.nota3}</td>
                  <td id="nota4" class="editMe"></td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else if (alumno.nota1==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe"></td>
                  <td id="nota2" class="editMe">${alumno.nota2}</td>
                  <td id="nota3" class="editMe">${alumno.nota3}</td>
                  <td id="nota4" class="editMe">${alumno.nota4}</td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else if (alumno.nota3==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe">${alumno.nota1}</td>
                  <td id="nota2" class="editMe">${alumno.nota2}</td>
                  <td id="nota3" class="editMe"></td>
                  <td id="nota4" class="editMe">${alumno.nota4}</td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else if (alumno.nota2==null) {
             template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe">${alumno.nota1}</td>
                  <td id="nota2" class="editMe"></td>
                  <td id="nota3" class="editMe">${alumno.nota3}</td>
                  <td id="nota4" class="editMe">${alumno.nota4}</td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }else{
                template += `
                  <tr alumnoId="${alumno.carnet}">
                  <td id="carnet" class="carnetAl">${alumno.carnet}</td>
                  <td>
                    ${alumno.apellidoa} 
                  </td>
                  <td>${alumno.nombrea}</td>
                  <td id="nota1" class="editMe">${alumno.nota1}</td>
                  <td id="nota2" class="editMe">${alumno.nota2}</td>
                  <td id="nota3" class="editMe">${alumno.nota3}</td>
                  <td id="nota4" class="editMe">${alumno.nota4}</td>
                  <td >${alumno.promedio}</td>
                  </tr>
                ` 
              }
        });
        $('#tituloA').html("  Listado de Alumnos de"+"  "+$('#grado').val()+" Grado  Seccion  "+$('#seccion').val());
         $('#alumnos').html(template);
      //$('#getStud').trigger('reset');
     // getAlumnos();
    });
 }
});
