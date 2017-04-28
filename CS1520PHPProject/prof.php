<head>
  <link rel="stylesheet" type="text/css" href="css/prof.css">
</head>
<body>
  <a href="MainPage.php"><img src="images/Home.png"></img></a>
  <h1>Professional</h1>
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
    On this page, I will discuss my professional endeavors in the many facets I have explored, including
    embedded systems, applications software development, web development, and various areas of research.
  </p>

  <h3> Log </h3>
  <ul>
    <li>2/25/2017: Started building the HTML/CSS for the Professional Page.</li>
  </ul>
  <footer>&copy; 2017 Yasaswi Duvvuru</footer>
</body>
