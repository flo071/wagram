<!DOCTYPE html>
<head>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="material.css">
	<script defer src="material.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<link href="icons.css" rel="stylesheet">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="content-type" content="text/html"; charset="UTF-8">
	<title>PBA</title>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
		mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<div class="mdl-layout-spacer"><center><h1>Pfarrbriefarchiv</h1></center></div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
					mdl-textfield--floating-label mdl-textfield--align-right">
					<label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
					</label>
					<div class="mdl-textfield__expandable-holder">
						<input class="mdl-textfield__input" type="text" name="sample" id="fixed-header-drawer-exp">
					</div>
				</div>
			</div>
		</header>
		<div class="mdl-layout__drawer">
            <a class="mdl-layout-title" href="index.html">Unsere Pfarre</a>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="team.html">Pfarrteam</a>
                <a class="mdl-navigation__link" href="gruppen.html">Gruppen</a>
                <a class="mdl-navigation__link" href="liturgie.html">Liturgie</a>
                <a class="mdl-navigation__link" href="bilder.html">Bilder der Pfarre</a>
                <a class="mdl-navigation__link" href="links.html">Verweise</a>
                <a class="mdl-navigation__link" href="pba.php">Pfarrbriefarchiv</a>
                <a class="mdl-navigation__link" href="impressum.html">Impressum</a>
            </nav>
        </div>
		<main class="mdl-layout__content">
			<div class="page-content">
				<center>
				<?php
					if ($handle = opendir('./pb/alt')) {
    					while (false !== ($entry = readdir($handle))) {
        					if ($entry != "." && $entry != "..") {
            					echo "<a href='$entry' target='_blank'>
                					<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect' style='width: 200px; height: 100px; margin-right: 5px; margin-left: 5px; margin-top: 5px; margin-bottom: 5px;'>
             							$entry
             						</button>
            					</a><br>";
        					}
    					}
    					closedir($handle);
					}
				?>
				</center>
			</div>
		</main>
	</div>
</body>
<center>

</center>
</body>