<?php

function confirm_query($result){
    if (!$result) {
    echo "Tentando executar a consulta: " . $result . "\n";
    die("Mas falhou!");
  }
}

?>