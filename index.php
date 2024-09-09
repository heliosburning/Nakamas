<?php
  // Datos de conexión
  $host = "b8ihynb9x0naoa4fbfmz-postgresql.services.clever-cloud.com";
  $database = "b8ihynb9x0naoa4fbfmz";
  $user = "u6ibxgixjae0dmywjcxe";
  $password = "P9rnvsnZT4yfdKCMifwbUbdmiIsTaJ";
  $port = "50013";

  // Conectar a PostgreSQL
  $connection = pg_connect("host=$host dbname=$database user=$user password=$password port=$port");

  // Verificar conexión
  if (!$connection) {
    echo "Error: No se pudo conectar a PostgreSQL.\n";
  } else {
    echo "Conexión exitosa a PostgreSQL.\n";
  }
echo "Sombreros de paja";

  // Cerrar conexión
  pg_close($connection);
?>
