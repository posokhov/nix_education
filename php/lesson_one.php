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
		        <li><a href="lesson_two.php">УРОК 2</a></li>
		        <li><a href="lesson_three.php">УРОК 3</a></li>
		        <li><a href="https://github.com/posokhov/nix_education.git">Github</a></li>
		    </ul>
		</nav>
	</header>
	<main class="site-main">
		<center>
        	<h1><span>Hello</span>, NIX Education!</h1>
    	  
    				<?php
                        echo "<table border=\"1\">";
                        echo '<tr>';
    					for($i=1; $i<6; $i++){
    					   echo '<td>';
    						for($j=1; $j<11; $j++){
    						  echo $i . '*' .$j . '=' . $i*$j . '<br>'; 
    					}
    				    echo '</td>';
    				    }
        				echo '</tr>';
        				echo '<tr>';
    				    for($i=6; $i<11; $i++){
    					   echo '<td>';
    					   for($j=1; $j<11; $j++){
    						  echo $i . '*' .$j . '=' . $i*$j . '<br>'; 
    					   }
    					   echo '</td>';
    				    }
    				    echo '</tr>';
                        echo '</table>';
    				?>
    	 
        </center>
	</main>
	<footer>
		
	</footer>
</body>
</html>