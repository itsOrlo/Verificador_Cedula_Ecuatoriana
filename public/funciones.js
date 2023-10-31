function validador(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8) return true;
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}


/* var input = document.getElementById('cedula');
    var tecla = e.key;
    if (!isNaN(tecla)) {
      // Obtén el valor actual del campo de entrada
      var valor = input.value;
      // Comprueba si la longitud es igual a 10
      if (valor.length === 10) {
        // Muestra un alert cuando se ingresa el último dígito
        alert('Se ha ingresado el último dígito.');
      }
    }*/
// Path: assets/js/funciones.js