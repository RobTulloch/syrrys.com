<!DOCTYPE html>
<html>
	<head>
		<?php include_once("analyticstracking.php"); ?>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta charset="utf-8">
		<title>Syrrys.com</title>
		<style>
			h1 {
				color: rgb(0, 0, 0);
			}
			body {
				margin: 40px;
				background-color: rgb(255, 255, 255);
			}
			.wrapper {
				display: grid;
				grid-template-columns: 1fr 1fr;
				grid-gap: 10px;
				background-color: #fff;
				color: #444;
			}
			.text {
				background-color: #999;
				grid-column-start: 1;
				grid-column-end: 3;
				color: #fff;
				border-radius: 5px;
				padding: 20px;
				font-size: 100%;
			}
			.box {
				background-color: #999;
				columns: 1fr;
				color: #fff;
				border-radius: 5px;
				padding: 20px;
				font-size: 100%;
			}

		</style>
	</head>
	<body>
	<div class="wrapper">
		<div class="text title">
			<h1>Syrrys.com the Personal Website of Rob Tulloch</h1>
		</div>

		<div class="text intro">
			<p><del>I'm (still) in the middle of reorganizing, excuse the mess.</del>
			That's become slightly redundant.
			<p>Welcome to an index of a few of my projects. Hopefully you can find what you're looking for or at least something.
		</div>

		<div class="text resume">
			My resume is available at <a rel="me" href="http://robtulloch.com">RobTulloch.com</a> <!-- Please hire me -->
		</div>

		<div class="box plan">
			<h2> My .Plan file </h2>
			<object data=".plan.html"
				type='application/html'>
			<!--	iframe html (fall back case) -->
				<iframe src=".plan.html"
						style="border: none;">
			<!-- embed html (last chance) -->
						<embed src=".plan.html" type='application/html'></embed>
				</iframe>
			</object>
		</div>

		<div class="box list">
			<h2>My Other Sites</h2>
			<ul>
			<li><a href="http://alice.syrrys.com/INDEX.php">Alice (circa 1997)</a></li>
			<li><a href="http://test.syrrys.com/">Testing?</a></li>
			<li><a href="http://intelligentdecline.com/">Intelligent Decline blog</a>
			<li><a href="http://blog.syrrys.com" rel="me">My Wordpress Blog (This could use some attention)</a>
			<li><a href="http://exceptionallyclassy.com/">Exceptionally Classy (Denim &amp; Fragrance Sales)</a>
			<li><a href="http://integral-designs.net/">Integral Designs - Smart Home Automation and consulting &amp; Family Online Security Planning/Auditing</a>

			</ul>
		</div>
	</div>

		<foot>
			<a href="http://gmpg.org/xfn">  <img src="xfn-btn.gif" alt="XFN Friendly" /> </a>
			<br>This page has been hand coded by me, based on various examples and tutorials
			along with my cutting edge (1992-1997) personal experience. <br><small>I have dispensed
			with the <code>blink</code> tags that used to be de riguer. You're welcome.</small>

		</foot>
	</body>
	<footer>This site uses cookies for Google Analytics tracking.</footer>
</html>
