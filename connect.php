<?php

$connectdb = new mysqli('localhost', 'root', '', 'orkut');

    if (!$connectdb) {
        die ("Não foi possível conectar: ".mysqli_error()."<br");
    }

?>