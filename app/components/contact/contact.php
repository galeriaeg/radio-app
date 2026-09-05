<?php
$path = "../painel/";
include $path . "config/conexao.php";

$sql = "SELECT id,titulo,descricao FROM t_conteudo WHERE sessao='contato'";
$res = mysqli_query($conexao, $sql);
$total = mysqli_num_rows($res);
while ($row = mysqli_fetch_array($res)) {
  $id = $row['id'];
  $titulo = $row['titulo'];
  $descricao = $row['descricao'];
}
?>

<div class="col-12">
  <a id="contato"></a>
  <div class="col-12 dsc-contato">
    <h2><?php echo $titulo; ?></h2>
    <p>
    <h5 style="margin-top:10px">
      <?php echo $descricao; ?>
    </h5>
    </p>
  </div>

  <section class="box-form">

    <div class="col-6 ">
      <input type="text" id="nome" name="nome" placeholder="Nome" />
      <input type="text" name="email" placeholder="Email" />
      <input
        type="text"
        id="uf"
        list="lista-ufs"
        maxlength="2"
        class="input-4"
        name="uf"
        placeholder="Estado" />
      <datalist id="lista-ufs">
        <option value="AC"></option>
        <option value="AL"></option>
        <option value="AP"></option>
        <option value="AM"></option>
        <option value="BA"></option>
        <option value="CE"></option>
        <option value="DF"></option>
        <option value="ES"></option>
        <option value="GO"></option>
        <option value="MA"></option>
        <option value="MT"></option>
        <option value="MS"></option>
        <option value="MG"></option>
        <option value="PA"></option>
        <option value="PB"></option>
        <option value="PR"></option>
        <option value="PE"></option>
        <option value="PI"></option>
        <option value="RJ"></option>
        <option value="RN"></option>
        <option value="RS"></option>
        <option value="RO"></option>
        <option value="RR"></option>
        <option value="SC"></option>
        <option value="SP"></option>
        <option value="SE"></option>
        <option value="TO"></option>
      </datalist>


      <input
        type="text"
        class="input-6"
        name="cidade"
        placeholder="Cidade" />
    </div>
    <div class="col-6">
      <textarea name="mensagem" placeholder="Comentário"></textarea>
      <input type="submit" class="boton" onclick="enviarMensagem()" value="Enviar" />
    </div>

  </section>

</div>


<section id="alerta" style="display:none" class="alert">
  <span class="icon-alert">&#10006;</span> Por favor, preencha todos os campos obrigatórios.
</section>

<script>
  document.querySelector('input[name="uf"]').addEventListener('input', function(e) {
    this.value = this.value.toUpperCase();
    this.value = this.value.replace(/[0-9]/g, '');
  });
</script>
<script src="./components/contact/contact.js"></script>