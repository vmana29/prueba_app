$("#formregistrarest").on("submit", function(event) {
  event.preventDefault();

  // Capturar los datos del formulario
  var txtdni = $('#dni').val();

  //Iterar sobre los datos del formulario
  $.ajax({
    url: '/leer',
      // Especifica la URL a la que deseas enviar la solicitud AJAX
    data: {
      dni:txtdni   // Especifica los datos que deseas enviar al servidor
    },  
    dataType: 'json',  
    success: function(response) {
        // La función success se ejecutará si la solicitud es exitosa
        var datos = response.success[0][0];

        $('#telefonofijo').val(datos.TELEFONO_FIJO);
        $('#telefonoper').val(datos.TELEFONO_PERSONAL);
        $('#correoper').val(datos.CORREO_PERSONAL);
        $('#correoinsti').val(datos.CORREO_INSTITUCIONAL);

        $('#staticBackdrop').modal('show');
    },
    error: function(xhr, status, error) {
        // La función error se ejecutará si hay algún error durante la solicitud AJAX
        console.error('Error en la solicitud AJAX:', error);
    }
});
});


$("#formactualizar").on("submit", function(event) {
  event.preventDefault();

  // Capturar los datos del formulario
  var telefijo = $('#telefonofijo').val();
  var teleper = $('#telefonoper').val();
  var correper = $('#correoper').val();
  var correoinsti = $('#correoinsti').val();
  var txtdni = $('#dni').val();

  //Iterar sobre los datos del formulario
  $.ajax({
    url: '/actualizar',
      // Especifica la URL a la que deseas enviar la solicitud AJAX
    data: {
      dni:txtdni,
      telfijo:telefijo,   // Especifica los datos que deseas enviar al servidor
      telper:teleper,
      correoper:correper,
      correoinsti:correoinsti,
    },  
    dataType: 'json',  
    success: function(response) {
        // La función success se ejecutará si la solicitud es exitosa
        console.log(response);
    },
    error: function(xhr, status, error) {
        // La función error se ejecutará si hay algún error durante la solicitud AJAX
        console.error('Error en la solicitud AJAX:', error);
    }
});
});
