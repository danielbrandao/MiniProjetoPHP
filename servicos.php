<?php

$sql = mysqli_query($conexao, "SELECT * FROM admin where id=7");

$dados = mysqli_fetch_array($sql);

?>

<h2><?=$dados['titulo'];?></h2>
<h5><?=$dados['subtitulo'];?></h5>
<p><?=$dados['texto'];?></p>