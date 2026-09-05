  <a id="programacao"></a>
  <div class="col-12" style="display: flex;justify-content: flex-start;">
    <h2 style="width: 180px;">Programação</h2>

    <div style="width:300px;display:flex;align-items:center;justify-content:space-between;font-size:14px;color:#999">
      <div>DOM</div>
      <div>SEG</div>
      <div>TER</div>
      <div>QUA</div>
      <div>QUI</div>
      <div>SEX</div>
      <div>SAB</div>
    </div>

    <!-- select>
      <option value="">Domingo</option>
      <option value="">Segunda</option>
      <option value="">Terça</option>
      <option value="">Quarta</option>
      <option value="">Quinta</option>
      <option value="">Sexta</option>
      <option value="">Sábado</option>
    </select-->
  </div>

  <div class="container-cards">
    <div class="cards" id="cards-container">

      <?php
      $path = "../painel/";
      include $path . "config/conexao.php";
      $sql = "SELECT * FROM t_programacao ";
      $res = mysqli_query($conexao, $sql);
      $total = mysqli_num_rows($res);
      while ($row = mysqli_fetch_array($res)) {
        $dia = $row['dia'];
        $nomePrograma = $row['nomePrograma'];
        $horaInicio = $row['horaInicio'];
        $horaIFim = $row['horaFim'];
        $nomeApresentador = $row['nomeApresentador'];
        $fotoApresentador = $row['fotoApresentador'];

        $fotoApresentador = "assets/imgs/" . $fotoApresentador;

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