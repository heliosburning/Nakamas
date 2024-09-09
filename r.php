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

  // Consulta SQL
  $query = 'SELECT * FROM tabla_ejemplo'; // Asegúrate de cambiar 'tabla_ejemplo' por el nombre real de tu tabla
  $result = pg_query($connection, $query);

  // Mostrar resultados
  if ($result) {
    while ($row = pg_fetch_assoc($result)) {
      echo "ID: " . $row['id'] . ", Nombre: " . $row['nombre'] . "\n"; // Cambia 'id' y 'nombre' por los nombres de las columnas de tu tabla
    }
  } else {
    echo "Error en la consulta: " . pg_last_error($connection);
  }

  // Cerrar conexión
  pg_close($connection);
?>