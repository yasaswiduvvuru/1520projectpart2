<head>
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  <a href="MainPage.php"><img src="images/Home.png"></img></a>
  <h1>Obligatory Home Page</h1>
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
    My name is Yasaswi Duvvuru. This main page serves as a brief introduction to my website as well as a log of updates for
    the whole site. The categories the site has been divided into are self-explanatory. Further
    forays into the nature of my involvement with the issues will be detailed on each of the home
    pagees.
  </p>
  <h3> Log </h3>
  <ul>
    <li>2/25/2017: Started building the HTML for the Home Page.</li>
    <li>2/27/2017: Started working on the CSS for the Home Page.</li>
  </ul>
  <form action="ContactFormHandler.php" method="post" onsubmit="MyFunction()">
        <table>
            <tr>
                <td>
                    Your Name:
                </td>
                <td>
                    <input type="text" id="Name" name="Name" />
                </td>
            </tr>
            <tr>
                <td>
                    Your Email:
                </td>
                <td>
                    <input type="text" id="Email" name="Email" />
                </td>
            </tr>
            <tr>
                <td>
                    Least Favorite Color:
                </td>
                <td>
                    <select id="LeastFavoriteColor" name="LeastFavoriteColor">
                        <option value="">- Choose -</option>
                        <option value="Blue">Blue</option>
                        <option value="Green">Green</option>
                        <option value="Orange">Orange</option>
                        <option value="Red">Red</option>
                        <option value="Yellow">Yellow</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" id="submit" value="Contact Me!" />
                    <input type="reset" id="reset" value="Start Over!" />
                </td>
            </tr>
        </table>
		<script>
		function myFunction() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
		</script>
    </form>
  <footer>&copy; 2017 Yasaswi Duvvuru</footer>
</body>
