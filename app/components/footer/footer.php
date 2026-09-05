<?php
$path = "../painel/";
include $path . "config/conexao.php";

$sql = "SELECT nome,logo FROM t_emissora";
$res = mysqli_query($conexao, $sql);
$total = mysqli_num_rows($res);
while ($row = mysqli_fetch_array($res)) {
  $nome = $row['nome'];
  $logo = $row['logo'];
}
?>
<img src="assets/imgs/logo-app.png" class="logo-footer" alt="logo-footer" />
<h6 class="txt-footer">
  Copyright © 2025 - <?php echo $nome; ?><br />
  Todos os direitos reservados
</h6>