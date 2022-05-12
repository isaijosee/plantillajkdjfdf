<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Iniciar sesion</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Usuario:</label>
      <input type="text" class="form-control" id="email" placeholder="Ingrese su usuario" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Contraseña:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Ingrese contraseña" name="pswd">
    </div>

    <button type="submit" class="btn btn-primary">Ingresar</button>
    <br><br>
    <a href="nuevousuario.php">Nuevo usuario</a>
  </form>
</div>

</body>
</html>