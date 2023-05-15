<!DOCTYPE html>
<html >
<head>
    <title>Resgistro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
        <h1> ¡Formulario De Registro!</h1>
        <input type="text" name="documento" placeholder="Documento Completo">
        <input type="text" name="nombre" placeholder="Nombre completo">
        <input type="text" name="telefono" placeholder="telefono">
        <input type="date" name="fecha" placeholder="fecha de nacimiento">
        <input type="email" name="correo" placeholder="email">
        <input type="submit" name="Registrar" >
    </form>
    <?php 
    include("registro.php");
    ?>
</body>
</html>
