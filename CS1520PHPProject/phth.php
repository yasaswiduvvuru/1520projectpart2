<head>
  <link rel="stylesheet" type="text/css" href="css/phth.css">
</head>
<body>
  <a href="MainPage.php"><img src="images/Home.png"></img></a>
  <h1>Philosophy and Theology</h1>
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
    On this page, I will be discussing Philosophy primarily of the Scholastics but also from antiquity and modernity.
    I will integrate the discussion of Philosophy with Theology.
  </p>

  <h3> Log </h3>
  <ul>
    <li>2/25/2017: Started building the HTML/CSS for the Philosotheology Page.</li>
  </ul>
  <footer>&copy; 2017 Yasaswi Duvvuru</footer>
</body>
