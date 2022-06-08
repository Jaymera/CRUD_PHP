<?php

	$link = mysqli_connect("localhost", "root", "", "album_store");

	if (!$link) {
	    echo "Erro ao conectar no banco de dados<br>";
	    // echo "Descrição do erro: " . mysql_connect_error() . PHP_EOL;
	    exit;
	}

?>