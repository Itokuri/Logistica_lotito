<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="iniciarsesion.css">
    <title>Iniciar sesión en Logística Lolito</title>
</head>
<body>

    <form action="loguear.php" method="POST">
      <center>
        <div class="form">     
          <h2>Ingrese los datos de su cuenta</h2>
          <input type="text" id="correo"name="usuario" placeholder="Ingrese su nombre de usuario"><br></br>
          <input type="password" id="contrasenia"name="contrasenia" placeholder="Ingrese su contraseña"><br></br>
          <button type="submit" name="button">Ingresar</button>
        </div>
      </center>
    </form>
    
</body>
</html>