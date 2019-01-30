<?php
require 'app/youtube.php';
require 'app/youtubers.php';
//echo '<pre>'.print_r(Youtube::getVideos('UCqLDDXfOK8HsyZLUbUEtMgg', 4), true).' </pre>';

$selectedCode = array_key_exists('youtuber', $_GET) ? $_GET['youtuber'] : 'jdmp';
$selectedYoutuber = $youtubers[$selectedCode];
?><!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="assets/css/style.css?<?= time() ?>">

		<title>kokoro team - <?= $selectedYoutuber['name'] ?></title>
	</head>

	<body class="youtuber-<?= $selectedCode ?>">
		<header style="background-image:url(<?= $selectedYoutuber['background'] ?>);">
			<div class="container">
				<div class="en-tete">
					<img src="assets/images/logo-kokoroteam.png" alt="Logo" class="Img-logo" />
					<img src="assets/images/<?= $selectedCode?>/<?= $selectedYoutuber['logo'] ?> " alt="logo <?= $selectedYoutuber['name'] ?>" id="name">
				</div>
				<nav>
					<ul class="links-container">
						<?php foreach ($selectedYoutuber['links'] as $link): ?>
							<li>
								<a href="<?= $link['link'] ?>" 
									target="_blank">
									<span class="title"><?= $link['title'] ?></span>
									<img src="assets/images/<?= $link['img'] ?>" alt="<?= $link['title'] ?>">
									
								</a>
							</li>
						<?php endforeach ?>
					</ul>
				</nav>
			</div>
		</header>
	
		<section class="videos">
			<div class="container">

				<div class="videocontainer">
					<iframe id="youtube" src="https://www.youtube.com/embed/<?= $selectedYoutuber['youtube']->items[0]->id->videoId ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen ></iframe>
				</div>
				<aside>
					<ul class="video">	
						<?php for ($youtube=0; $youtube<4; $youtube++): ?>
							<li>
								<a href="https://www.youtube.com/embed/<?=$selectedYoutuber['youtube']->items[$youtube]->id->videoId ?>">
									<img src="<?= $selectedYoutuber['youtube']->items[$youtube]->snippet->thumbnails->medium->url ?>">
								</a>
							</li>
						<?php endfor; ?>
					</ul>
				</aside>
			</div>
		</section>

		<footer>
			<div style="background-image:url(<?= $selectedYoutuber['background'] ?>);">
				<div id="contenu" class="container">
					<img src="assets/images/other-youtubers.png" class="other-youtubers">
					<ul class="perso"> 
						<?php foreach ($youtubers as $code => $youtuber): ?>
							<?php if ($code != $selectedCode): ?>
								<li>
									<a href="?youtuber=<?= $code ?>">
										<div class="grid">
						                    <figure class="effect-lexi">
						                       <img src="<?= $youtuber['picture']?>" alt="<?= $youtuber['name']?>">
						                        <figcaption>
						                            <p><?= $youtuber['name']?></p>
						                        </figcaption>            
						                    </figure>
						                </div>
									</a>
								</li>
							<?php endif ?>
						<?php endforeach ?> 
					</ul>
				</div>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

		<script type="text/javascript" src="assets/js/monscript.js"></script>


	</body>
</html>