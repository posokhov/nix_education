<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	<title>NIX_Education</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<header>
		<nav class="mainmenu">
		    <ul>
		    	 <li><a href="../index.html">На главную</a></li>
		        <li><a href="lesson_one.php">УРОК 1</a></li>
		        <li><a href="lesson_two.php">УРОК 2</a></li>
		        <li><a href="lesson_three.php">УРОК 3</a></li>
		        <li><a href="https://github.com/posokhov/nix_education.git">Github</a></li>
		    </ul>
		</nav>
	</header>
	<main>
	     <div>
			<center>
    			<h1><span> Hello </span>, NIX Education!</h1>
    		</center>
    	</div>
    	<div >
    		<center>
				<?php

					if(!empty($_POST['text'])){
						$text = $_POST['text'];

						function strReverse($str){
							$strReverse = '';

							for($i = mb_strlen($str); $i >= 0; $i--){
									$strReverse .= mb_substr($str, $i, 1);
							}
							return $strReverse;
						}
						echo '<h1>' . strReverse($text) . '</h1>';
					}
				
				?>
			</center>
		</div>
	</main>

	<footer>
		
	</footer>
</body>
</html>