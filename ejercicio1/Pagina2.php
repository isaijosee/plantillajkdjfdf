<html>

<head>
  <title>Captura de datos del form</title>
</head>

<body>

  <?php
  echo "El nombre ingresado es:";
  echo $_REQUEST['nombre'];
  ?>
  <br>
  <?php
  echo "El apellido ingresado es:";
  echo $_REQUEST['apellido'];
  ?>
  <br>
  <?php
  echo "El direccion ingresado es:";
  echo $_REQUEST['direccion'];
  ?>
  <br>
  <?php
  echo "El ciudad ingresado es:";
  echo $_REQUEST['ciudad'];
  ?>
  <br>
  <?php
  echo "El departamento ingresado es:";
  echo $_REQUEST['departamento'];
  ?>
  <br>

</body>

</html>