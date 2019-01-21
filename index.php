<?php
require 'app/youtube.php';
//echo '<pre>'.print_r(Youtube::getVideos('UCqLDDXfOK8HsyZLUbUEtMgg', 4), true).' </pre>';



$youtubers = [
	'jdmp' => [
		'name'=>'Jerome-jdmp',
		'background' => 'assets/images/jdmp/jdmp-background.jpg',
		'logo'=>'jdmp-logo.png',
		'picture'=>'assets/images/jdmp/jdmp-img.png',
		'links'=>[
			['title'=>'Twitter','img'=>'jdmp/joie.png','link' => 'https://twitter.com/Jerome_JDMP'],
			['title'=>'Instagram','img'=>'jdmp/wink.png', 'link' => 'https://www.instagram.com/jeromejdmp/?hl=fr'],
			['title'=>'facebook','img'=>'jdmp/determination.png', 'link' => 'https://www.facebook.com/jeromeetcompagnies'],
			['title'=>'discord','img'=>'jdmp/neutre.png', 'link' => 'https://discord.gg/thJw4JR'],
			['title'=>'Tipee','img'=>'jdmp/triste.png', 'link' => 'https://fr.tipeee.com/become-a-creator'],
			['title'=>'contact','img'=>'jdmp/prof.png', 'link' => ''],
		],
		'youtube'=>Youtube::getVideos('UCqLDDXfOK8HsyZLUbUEtMgg', 4)

	],
	'flaak' => [
		'name'=>'Flaak',
		'background' => 'assets/images/flaak/flaak-background.jpg',
		'logo'=>'flaak-logo.png',
		'picture'=>'assets/images/flaak/flaak-img.png',
		'links'=>[
			['title'=>'Twitter','img'=>'flaak/img-twit.png', 'link' => 'https://twitter.com/ExiFlaak'],
			['title'=>'Instagram','img'=>'flaak/img-insta.png', 'link' => 'https://www.instagram.com/flaaklalicorne/?hl=fr'],
			['title'=>'facebook','img'=>'flaak/img-fb.png', 'link' => 'https://www.facebook.com/flaaktv/'],
			['title'=>'Twitch','img'=>'flaak/img-twitch.png', 'link' => 'https://www.twitch.tv/flaaklalicorne'],
			['title'=>'discord','img'=>'flaak/img-dis.png', 'link' => 'https://discord.gg/thJw4JR'],
			['title'=>'Tipee','img'=>'flaak/img-tip.png', 'link' => 'https://fr.tipeee.com/become-a-creator'],
			['title'=>'contact','img'=>'flaak/img-contact.png', 'link' => 'pouet.fr'],
		],
		'youtube'=>Youtube::getVideos('UCsq4eA6qdNgq5zfkVJkZgPQ', 4)
	],
	'ultimate-manga' => [
		'name'=>'Ultimate manga',
		'background' => 'assets/images/ultimate-manga/ul-manga-background.jpg',
		'logo'=>'ul-manga-logo.png',
		'picture'=>'assets/images/ultimate-manga/ul-manga-img.png',
		'links'=>[
			['title'=>'Twitter','img'=>'ultimate-manga/img-twit.png', 'link' => 'https://twitter.com/Ultimate_Manga'],
			['title'=>'Instagram','img'=>'ultimate-manga/img-insta.png', 'link' => 'https://www.instagram.com/ultimatemanga07/'],
			['title'=>'facebook','img'=>'ultimate-manga/img-fb.png', 'link' => 'https://www.facebook.com/Ultimate.Manga/'],
			['title'=>'discord','img'=>'ultimate-manga/img-dis.png', 'link' => 'https://discord.gg/thJw4JR'],
			['title'=>'Tipee','img'=>'ultimate-manga/img-tip.png', 'link' => 'https://fr.tipeee.com/become-a-creator'],
			['title'=>'contact','img'=>'ultimate-manga/img-contact.png', 'link' => 'Ultimatemanga07@gmail.com'],
		],
		'youtube'=>Youtube::getVideos('UC9cNHtHVMO8dbG4UGxqu8RA', 4)
	],
	'aurayonmangas' => [
		'name'=>'Au rayon manga',
		'background' => 'assets/images/aurayonmangas/aurayonmangas-background.jpg',
		'logo'=>'aurayonmangas-logo.png',
		'picture'=>'assets/images/aurayonmangas/aurayonmangas-img.png',
		'links'=>[
			['title'=>'Twitter','img'=>'aurayonmangas/img-twit.png', 'link' => 'https://twitter.com/au_rayon'],
			['title'=>'Instagram','img'=>'aurayonmangas/img-insta.png', 'link' => 'https://www.instagram.com/aurayonmangas/'],
			['title'=>'facebook','img'=>'aurayonmangas/img-fb.png', 'link' => 'https://www.facebook.com/AuRayonMangas/'],
			['title'=>'discord','img'=>'jdmp/neutre.png', 'link' => 'https://discord.gg/thJw4JR'],
			['title'=>'Tipee','img'=>'aurayonmangas/img-tip.png', 'link' => 'pouet.fr'],
			['title'=>'contact','img'=>'aurayonmangas/img-contact.png', 'link' => 'pouet.fr'],
		],
		'youtube'=>Youtube::getVideos('UCobPg9SUVdJvU505WPPT3eg', 4)
	],
	'anto-sama' => [
		'name'=>'Anto-sama',
		'background' => 'assets/images/anto-sama/antosama-background.jpg',
		'logo'=>'antosama-logo.png',
		'picture'=>'assets/images/anto-sama/antosama-img.png',
		'links'=>[
			['title'=>'Twitter','img'=>'anto-sama/img-twit.png', 'link' => 'https://twitter.com/antosamapro'],
			['title'=>'Instagram','img'=>'anto-sama/img-insta.png', 'link' => 'https://www.instagram.com/anto_sama_ytb/'],
			['title'=>'facebook','img'=>'anto-sama/img-fb.png', 'link' => 'https://www.facebook.com/antosaiyajin'],
			['title'=>'discord','img'=>'jdmp/neutre.png', 'link' => 'https://discord.gg/thJw4JR'],
			['title'=>'Tipee','img'=>'anto-sama/img-tip.png', 'link' => 'pouet.fr'],
			['title'=>'contact','img'=>'anto-sama/img-contact.png', 'link' => 'Anto.sama.pro@gmail.com'],
		],
		'youtube'=>Youtube::getVideos('UCcC5OL4ilmnFeWmug5FyoWw', 4)
	],
	'psyko-sensei' => [
		'name'=>'Psyko-sensei',
		'background' => 'assets/images/psyko-sensei/psyko-background.jpg',
		'logo'=>'psyko-logo.png',
		'picture'=>'assets/images/psyko-sensei/psyko-img.png',
		'links'=>[
			['title'=>'Twitter','img'=>'psyko-sensei/img-twit.png', 'link' => 'pouet.fr'],
			['title'=>'Instagram','img'=>'psyko-sensei/img-insta.png', 'link' => 'pouet.fr'],
			['title'=>'facebook','img'=>'psyko-sensei/img-fb.png', 'link' => 'pouet.fr'],
			['title'=>'discord','img'=>'jdmp/neutre.png', 'link' => 'https://discord.gg/thJw4JR'],
			['title'=>'Tipee','img'=>'psyko-sensei/img-tip.png', 'link' => 'pouet.fr'],
			['title'=>'contact','img'=>'psyko-sensei/img-contact.png', 'link' => 'psykosensei.pro@gmail.com'],
		],
		'youtube'=>Youtube::getVideos('UCxvQLLrLChsAJPbRRgaoe6g', 4)
	],
];
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
		<header>
			<div style="background-image:url(<?= $selectedYoutuber['background'] ?>);">
				<div class="en-tete">
					<img src="assets/images/logo-kokoroteam.png" alt="Logo" class="Img-logo" />
					<img src="assets/images/<?= $selectedCode?>/<?= $selectedYoutuber['logo'] ?> " alt="logo <?= $selectedYoutuber['name'] ?>">
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

				<div class= "videocontainer">
					<iframe id="youtube" src="https://www.youtube.com/embed/<?= $selectedYoutuber['youtube']->items[0]->id->videoId ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen ></iframe>
				</div>

			</div>

			<aside>
				

				<ul class="video">	
					<?php for ($youtube=0; $youtube<4; $youtube++): ?>
						<a href="https://www.youtube.com/embed/<?=$selectedYoutuber['youtube']->items[$youtube]->id->videoId ?>">
							<img src="<?= $selectedYoutuber['youtube']->items[$youtube]->snippet->thumbnails->high->url ?>">
						</a>
					<?php endfor; ?>
				</ul>
			</aside>
		</section>

		<footer>
			<div style="background-image:url(<?= $selectedYoutuber['background'] ?>);">
				<div id="contenu">
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

		<script type="text/javascript" src="monscript.js"></script>


	</body>
</html>