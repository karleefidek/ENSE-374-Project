<?php
	$db = new mysqli("localhost", "username", "password", "database");
	if ($db->connect_error) {
		die ("Connection failed: " . $db->connect_error);
	}
	
	session_start();
	$season = $_SESSION["season"];
	$budget = $_SESSION["budget"];
	$travelAct = $_SESSION["travelAct"];
	
	$q = "SELECT name, details, country, image FROM Locations WHERE season = '$season' 
 	     AND budget = '$budget' AND travel_activity = '$travelAct';";
	$result = $db->query($q);
        $row = $result->fetch_assoc();
?>

<!DOCTYPE html> 
<html> 
<head>

    <Title> Destination </Title>
    <link rel="stylesheet" type="text/css" href="style.css">
        
</head>

<body class="home">
    <h2>
        OUR CHOSEN DESTINATION FOR YOU
    </h2>

    <section>  
        <table>
	    <tr>										
	        <td >
                    <img class="locations" src="<? echo $row["image"];?>" alt="picture">
                </td>
		
                <td valign="top">
		    <table>
		        <tr>
			    <td colspan="2"> 
                                <h2>
				    <?=$row["name"]?>
                                </h2>
                            </td>
                        </tr>

                        <tr>
                            <td>Details:</td>
                            <td><?=$row["details"]?></td>
                        </tr> 
         
                        <tr>
                            <td>Country:</td>
                            <td><?=$row["country"]?></td>
			    <?php $db->close(); ?>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
	<br>
	<br>
    </section>
 	
    <div class=startbtn>
        <button class="btn" id="restart" onclick="location.href='index.html'">Restart</button>
    </div>
</body>

</html>
