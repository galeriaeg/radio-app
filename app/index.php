<!doctype html>
<html lang="pt-br">

<head>
  <title>Radio</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./assets/css/base.css" />
  <link rel="stylesheet" href="./assets/css/components.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
</head>

<body>
  <a id="topo"></a>

  <div id="container" class="container">
    <header class="box-topo"><?php require_once "./components/topo/topo.php"; ?></header>
    <div class="box-slide-desk"><?php require_once "./components/slide/slide-desk.php"; ?></div>
    <div class="box-slide-mob"><?php require_once "./components/slide/slide-mob.php"; ?></div>
    <main class="box-main"><?php require_once "components/main/main.php"; ?></main>
    <section class="box-contato"><?php require_once "./components/contact/contact.php"; ?></section>
    <footer class="box-footer"><?php require_once "./components/footer/footer.php" ?></footer>
  </div>

  <a href="#topo" class="btn-subir">&#8593; Subir</a>
  <script src="./assets/js/cards.js"></script>
</body>

</html>