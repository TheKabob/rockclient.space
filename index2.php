<?php
require("index.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>RockClient Homepage</title>
    <link rel="stylesheet" type="text/css" href="Bilder/style.css">
	<link rel="icon" href="titlebild.png" type="image/x-icon">
  </head>
  <body>
    <header>
      <a href="#" class="logo">Rockclient</a>
        <ul>
          <li><a href="#" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="#">Profil</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
    </header>
	<section>
		<img src="Bilder/stars.png" id="stars">
		<img src="Bilder/moon.png" id="moon">
		<img src="Bilder/mountains_behind.png" id="mountains_behind">
		<h2 id="text">Rockclient</h2>
		<a href="#" id="btn">Explore</a>
		<img src="Bilder/mountains_front.png" id="mountains_front">
	</section>
	<div class="sec" id="sec">
<div style="text-align:center;" id="divvv">
	<h2>Aktuelle News</h2>
	<p id="about">RockClient 1.0.2c Release</p>
</div>
		<br><br><br><br><br>
<div style="text-align:center;">
#42005e
</div>
	</div>
    <script>
      let stars = document.getElementById('stars');
      let moon = document.getElementById('moon');
      let mountains_behind = document.getElementById('mountains_behind');
      let mountains_front = document.getElementById('mountains_front');
      let text = document.getElementById('text');
      let btn = document.getElementById('btn');
      let header = document.querySelector('header');
      
      window.addEventListener('scroll', function(){
	let value = window.scrollY;
	stars.style.left = value * 0.25 + 'px';
	moon.style.top = value * 1.05 + 'px';
	mountains_behind.style.top = value * 0.5 + 'px';
	mountains_front.style.top = value * 0 + 'px';
	text.style.marginRight = value * 4 + 'px';
	text.style.marginTop = value * 1.5 + 'px';
	btn.style.marginTop = value * 1.5 + 'px';
	header.style.top = value * 1.0 + 'px';
	})
    </script>
  </body>
</html>


