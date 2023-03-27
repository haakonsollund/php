<?php

$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($con, "haakon.mysql.database.azure.com", "haakon2006", "G3Volt06", "gitarer", 3306, MYSQLI_CLIENT_SSL);






?>
