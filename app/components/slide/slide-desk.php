<?php
$path = "../painel/";
$pathFile = $path . "files/";
$btnBack = "components/slide/img/bt-back.png";
$btnGo = "components/slide/img/bt-go.png";
include $path . "config/conexao.php";
?>

<!-- SLIDE DESKTOP -->
<div class="slider-container">

	<?php
	$slides = [];
	$sql = "SELECT id,img_desk,link,target,status FROM t_slide WHERE status=1";
	$res = mysqli_query($conexao, $sql);
	$total = mysqli_num_rows($res);
	while ($row = mysqli_fetch_assoc($res)) {
		$slides[] = $row;
	}
	if (count($slides) > 0) {
		foreach ($slides as $i => $slide) {
			$sd = $pathFile . $slide['img_desk'];
			$link = $slide['link'];
			$target = $slide['target'];

			// Só adiciona 'active' no primeiro registro (índice 0)
			$classeActive = ($i === 0) ? 'active' : '';

			echo "<img src='$sd' 
            class='slide $classeActive' 
						alt='Slide' 
						onclick=\"window.open('$link', '$target')\" 
						style='cursor:pointer;' />";
		}
	}
	?>

	<nav class="overlay-barra">
		<button class="nav-btn">
			<img src="<?php echo $btnBack; ?>" class="btn-back" onclick="mudarSlide(-1)" alt="Anterior" />
		</button>
		<button class="nav-btn" onclick="mudarSlide(1)">
			<img src="<?php echo $btnGo; ?>" class="btn-go" alt="Próximo" />
		</button>
	</nav>

</div>

<script src="./components/slide/slide.js"></script>