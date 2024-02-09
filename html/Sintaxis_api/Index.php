<?php

require 'ModeloPeliculas.php';

header('Content-Type: application/json');

echo  ModeloPeliculas::getAllPeliculas();



?>