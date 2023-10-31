<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cédula Ecuatoriana</title>

    <link rel="stylesheet" href= "" >
    
</head>

<body>
    <h1>BIENVENIDA</h1>
    <form action="<?php echo base_url() . 'pepito' ?>" method="GET">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">

        <label for="cedula">Cedula</label>
        <input type="text" name="cedula" onkeyup="return validarCedulaReal(event)" onkeypress="return controlLetras(event)" maxlength="10" id="cedula">

        <input type="submit" onclick="validarCedulaEcuatoriana(cedula)" value="enviar">
    </form>
</body>

<footer>
    <!-- llamar js en php con echo php base url-->
    <script src="<?php echo base_url(); ?>../assets/js/funciones.js"></script>

    <script src></script>
</footer>

</html>