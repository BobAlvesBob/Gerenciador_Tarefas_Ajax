<?php

function confirm_query($result){
  // Check if there was a query error
  if (!$result) {
    echo "Tentando executar a consulta: " . $result . "\n";
    die("Mas falhou!");
  }
}

?>