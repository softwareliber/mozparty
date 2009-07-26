<?php
$wikiname = "Firefox 3.5 (Shiretoko) Release Party";
$wikitagline = "Vino la lansarea celui mai popular navigator liber!";
$location = "București, 18 iulie, Politehnică, ora 16";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title><?php echo $wikiname." / ".$title ?></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="http://www.spreadfirefox.com/files/favicon.ico" type="image/x-icon" />
	
</head>
<body>
	<div id="continut">
		<div id="gat">
			<a href="http://www.mozilla.ro" title="Un proiect Mozilla România"><img src="http://www.mozilla.com/img/tignish/template/mozilla-logo.png" alt="Un proiect Mozilla România" /></a>
			<ul>
				<li><a href="/2009/cluj" title="În Cluj-Napoca">&larr; Cluj-Napoca</a></li>
				<li><a href="/2009/bucuresti" title="În București">În București</a></li>
				<li><a href="/2009/bucuresti/prezentare" title="Prezentare">Prezentare</a></li>
				<!--li><a href="" title="Poze">Poze</a></li-->
			</ul>
		</div>
		<div id="cap">
		<h1><a href="/" title="<?php echo $wiktagline ?>"><?php echo $wikiname ?><br /><?php echo $location ?></a></h1>
			<h3><?php echo $wikitagline ?></h3>
			<div id="descarca">
				<ul class="home-download os_linux ">
					<li class="os_linux">
						<a class="download-link download-firefox" href="http://www.mozilla.com/en-US/firefox/all.html#ro">
						<span> <strong>Descarcă Firefox - Gratis</strong>
							<em>Versiunea 3.5 pentru orice platformă</em>
							<em class="download-lang">Versiunea în Română (9.4<abbr title="megaocteți">MO</abbr>)</em>
						</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="corp">
			<?php echo $html ?>
			<p style="text-align: right; font-size: 9px; color: #999;">
				Ultima modificare în: <?php echo date("d M, Y",$modified); ?>, <?php echo date("H:i:s",$modified); ?>.
			</p>
		</div>
	</div>
	<div id="fund">
		<div id="coada">
			<p>
				Un proiect <a href="http://mozilla.ro/">Mozilla România</a>.
			</p>
			<p>
				Elementele grafice din pagină sunt preluate de pe <a href="http://www.mozilla.com/en-US/firefox/firefox.html">pagina oficială Mozilla</a> și se supun altor termeni și licențe. Pentru detalii vizitați <a href="http://www.mozilla.com/en-US/about/legal.html">pagina Mozilla dedicată drepturilor de utilizarea</a>.
			</p>
		</div>
	</div>
</body>
</html>
