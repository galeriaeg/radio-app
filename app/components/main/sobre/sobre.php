		<?php
    $path = "../painel/";
    include $path . "config/conexao.php";

    $sql = "SELECT id,titulo,descricao FROM t_conteudo WHERE sessao='sobre'";
    $res = mysqli_query($conexao, $sql);
    $total = mysqli_num_rows($res);
    while ($row = mysqli_fetch_array($res)) {
      $id = $row['id'];
      $titulo = $row['titulo'];
      $descricao = $row['descricao'];
    }
    ?>
		<a id="sobre"></a>
		<h2><?php echo $titulo; ?></h2>
		<p>
		<h5 style="margin-top:10px">
		  <?php echo $descricao; ?>
		</h5>
		</p>