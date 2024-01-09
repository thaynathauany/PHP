<?php

$nome = 'campo" /> <script>alert("teste");</script>'; //addslashes adiciona barra invertida para escapar as strings

?>
<input type="text" name="<?php echo addslashes($nome); ?>" /> 