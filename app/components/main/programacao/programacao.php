<?php

//$hoje = "";
$dom = $seg = $ter = $qua = $qui = $sex = $sab = "";


echo @$hoje = $_GET['d'];

// Configura o fuso horário (opcional, mas recomendado)
date_default_timezone_set('America/Sao_Paulo');

// Array com os dias da semana traduzidos
$diasDaSemana = [
  'Sunday'    => 'dom',
  'Monday'    => 'seg',
  'Tuesday'   => 'ter',
  'Wednesday' => 'qua',
  'Thursday'  => 'qui',
  'Friday'    => 'sex',
  'Saturday'  => 'sab'
];

// Pega o nome do dia atual em inglês (ex: "Monday")
$diaIngles = date('l');

// Guarda o dia da semana traduzido na variável
$diaAtual = $diasDaSemana[$diaIngles];

// Exemplo de uso:
//echo "Hoje é: " . $diaAtual;


if ($diaAtual == 'dom') {
  $dom = "diaAtivo";
  $hoje = "Domingo";
} else if ($diaAtual == 'seg') {
  $seg = "diaAtivo";
  $hoje = "Segunda";
} else if ($diaAtual == 'ter') {
  $ter = "diaAtivo";
  $hoje = "Terça";
} else if ($diaAtual == 'qua') {
  $qua = "diaAtivo";
  $hoje = "Quarta";
} else if ($diaAtual == 'qui') {
  $qui = "diaAtivo";
  $hoje = "Quinta";
} else if ($diaAtual == 'sex') {
  $sex = "diaAtivo";
  $hoje = "Sexta";
} else if ($diaAtual == 'sab') {
  $sab = "diaAtivo";
  $hoje = "Sábado";
}

?>

<a id="programacao"></a>
<div class="col-12" style="display: flex;justify-content: flex-start;">
  <h2 style="width: 180px;">Programação</h2>

  <div class="box-calendario">
    <a href="#d=Domingo" class="<?php echo $dom; ?>">DOM</a>
    <a class="<?php echo $seg; ?>">SEG</a>
    <a class="<?php echo $ter; ?>">TER</a>
    <a class="<?php echo $qua; ?>">QUA</a>
    <a class="<?php echo $qui; ?>">QUI</a>
    <a class="<?php echo $sex; ?>">SEX</a>
    <a class="<?php echo $sab; ?>">SAB</a>
  </div>
</div>

<div class="container-cards">
  <div class="cards" id="cards-container">

    <?php
    $path = "../painel/";
    include $path . "config/conexao.php";
    $sql = "SELECT * FROM t_programacao WHERE dia='$hoje' ";
    $res = mysqli_query($conexao, $sql);
    $total = mysqli_num_rows($res);
    while ($row = mysqli_fetch_array($res)) {
      $dia = $row['dia'];
      $nomePrograma = $row['nomePrograma'];
      $horaInicio = $row['horaInicio'];
      $horaIFim = $row['horaFim'];
      $nomeApresentador = $row['nomeApresentador'];
      $fotoApresentador = $row['fotoApresentador'];

      if (empty($fotoApresentador)) {
        $fotoApresentador = "assets/imgs/icon-radio.jpg";
      } else {
        $fotoApresentador = "assets/imgs/" . $fotoApresentador;
      }

      echo "<div class='card'>
        <div class='circle-foto' style='background-image: url(" . $fotoApresentador . ")'></div>
        <span>
          <h6>
            <span class='tag'>$dia | $horaInicio - $horaIFim</span><br />
            <strong>$nomePrograma</strong><br />
            <span class='legeda'>$nomeApresentador</span>
          </h6>
        </span>
      </div>";
    }
    ?>


    <!-- div class="card">
        <div class="circle-foto" style="background-image: url('./assets/imgs/p-luiz.png');"></div>
        <span>
          <h6>
            <span class="tag">Domingo | 07:00 - 09:00</span><br />
            <strong>07:00 - 09:00</strong><br />
            <span class="legeda">Moreira Brito</span>
          </h6>
        </span>
      </div>

      <div class="card">
        <div class="circle-foto" style="background-image: url('./assets/imgs/p-joao.png');"></div>
        <span>
          <h6>
            <span class="tag">Sábado | 09:10 - 12:00</span><br />
            <strong>Nome Do programa</strong><br />
            <span>João Paulo Campos</span>
          </h6>
        </span>
      </div>

      <div class="card">
        <div class="circle-foto" style="background-image: url('./assets/imgs/p-mary.png');"></div>
        <span>
          <h6>
            <span class="tag">Sábado</span><br />
            <strong>12:10 - 14:10</strong><br />
            Meire de Freitas
          </h6>
        </span>
      </div>


      <div class="card">
        <div class="circle-foto" style="background-image: url('./assets/imgs/p-carlos.png');"></div>
        <span>
          <h6>
            <span class="tag">Sábado</span><br />
            <strong>14:30 - 16:00</strong><br />
            Prof. Fernando Sá
          </h6>
        </span>
      </div>

      <div class="card">
        <div class="circle-foto" style="background-image: url('./assets/imgs/p-tom.png');"></div>
        <span>
          <h6>
            <span class="tag">Sábado</span><br />
            <strong>14:30 - 16:00</strong><br />
            Tom Veiga
          </h6>
        </span>
      </div-->


  </div>
  <button class="btn-nav" id="btn-left">&#10094;</button>
  <button class="btn-nav" id="btn-right">&#10095;</button>

</div>
<script src="./components/main/programacao/programacao.js"></script>