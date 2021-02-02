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
		        <li><a href="lesson_three.php">УРОК 3</a></li>
		        <li><a href="https://github.com/posokhov">Github</a></li>
		    </ul>
		</nav>
	</header>
	<main>
		<center>
    	   <h1><span>Hello</span>, NIX Education!</h1>
        	<div>
        		<table border="1">
        			<tr>
        			     <?php
                               function setColor($number){
                                   $arrColor = [0=>'purple',
                                                 1=>'pink', 
                                                 2=>'blue',
                                                 3=>'red',
                                                 4=>'yellow',
                                                 5=>'green',
                                                 6=>'blue', 
                                                 7=>'red', 
                                                 8=>'blue', 
                                                 9=>'green'];
                                    $arrNumber = str_split($number);
                                    $a = '';
                                     foreach($arrNumber as $item){
                                         $a .= '<span style="color:' . $arrColor[$item] .';">' . $item .'</span>';
                                        }   
                                        return $a;                        
                                }
                                for($i = 1; $i <6; $i++){
                                    echo '<td>';
                                    for($j = 1; $j < 11; $j++){
                                         $sum = $i * $j;
                                    echo setColor($i) . '*' . setColor($j) . '=' . setColor($sum) . 
                                     '<br>';
                                }
                                echo '</td>';
                                } 
                                echo '</tr>';
                                echo'<tr>';
                                for($i = 6; $i <=10; $i++){
                                    echo '<td>';
                                    for($j = 1; $j <=10; $j++){
                                        $sum = $i * $j;
                                        echo setColor($i) . '*' . setColor($j) . '=' . setColor($sum) . '<br>';    
                                    }
                                echo '</td>';
                                } 
                        ?>
    			</tr>	
    		</table>
    	</div>
        </center>
    </main>

	<footer>
		
	</footer>

</body>
</html>