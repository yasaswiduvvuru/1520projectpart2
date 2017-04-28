<head>
  <link rel="stylesheet" type="text/css" href="css/cag.css">
</head>
<body>
  <a href="MainPage.php"><img src="images/Home.png"></img></a>
  <h1>Cards, Games, and Card Games</h1>
<nav>
	<?php
	$topBarLinks = array();
	$topBarLinks["cag"] = array(
	  "href" => "cag.php",
	  "id" => "cag",
	  "fill" => 'cardsAndGames         '
	);
	$topBarLinks["phth"] = array(
	  "href" => "phth.php",
	  "id" => "pt",
	  "fill" => "Philosotheology     "
	);
	$topBarLinks["prof"] = array(
	  "href" => "prof.php",
	  "id" => "prof",
	  "fill" => "Professional"
	);
    foreach ($topBarLinks as $val){
	  echo '<a href="' . $val["href"] . '" id="' . $val["id"] . '">' . $val["fill"] . '</a>';
	} ?>
	</nav>
  <p>
    On this page, I will be discussing card games with a traditional 52-54 card playing deck. Also discussion
    will consist of Trading Card Games such as Yu-Gi-Oh and various videogames on different platforms.
  </p>

  <h3> Log </h3>
  <ul>
    <li>03/01/2017: Started building the HTML/CSS for the Cards and Games Page.</li>
  </ul>
  <footer>&copy; 2017 Yasaswi Duvvuru</footer>
</body>
