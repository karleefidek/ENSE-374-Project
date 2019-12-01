<?php
	$db = new mysqli("localhost", "kdf131", "Kf2366&", "kdf131");
	if ($db->connect_error) {
		die ("Connection failed: " . $db->connect_error);
	}
	
	session_start();
	$season = $_SESSION["season"];
	$budget = $_SESSION["budget"];
	$travelAct = $_SESSION["travelAct"];
	$q = "SELECT name, details, country, activity1, activity2, activity3, activity4, image, link, likes, dislikes 
             FROM Locations WHERE season = '$season' AND budget = '$budget' AND travel_activity 
             = '$travelAct';";
	$result = $db->query($q);
        $row = $result->fetch_assoc();

	if (isset($_POST["Yes"]))
       	{
		$likes = $row["likes"] + 1;
        	$q2 = "UPDATE Locations SET likes = $likes WHERE  season = '$season' AND budget = '$budget' AND travel_activity 
                      = '$travelAct';";
		$db->query($q2);
		header("Location: destination.php");
	}

	if (isset($_POST["No"]))
       	{
		$dislikes = $row["dislikes"] + 1;
        	$q3 = "UPDATE Locations SET dislikes = $dislikes WHERE  season = '$season' AND budget = '$budget' AND travel_activity 
                      = '$travelAct';";
		$db->query($q3);
 		header("Location: destination.php");
	}
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
                <td>
                    <img class="locations" src="<? echo $row["image"];?>" alt="picture">
                </td>

		<td></td><td></td>

                <td valign="top">
                    <table>
                        <tr>
                            <td colspan="2"> 
                                <h2>
				   <a href="<? echo $row["link"];?>"> <?=$row["name"]?> </a>
                                </h2>
                            </td>
                        </tr>

                        <tr>
                            <td>Details:</td>
                            <td><?=$row["details"]?></td>
                        </tr> 
         
                        <tr>
                            <td><br>Country:</td>
                            <td><br><?=$row["country"]?></td>
                        </tr>

                        <tr>
                            <td><br>Activities:</td>
                            <td>
                                <br>
				1. <?=$row["activity1"]?><br><br>
                                2. <?=$row["activity2"]?><br><br>
                                3. <?=$row["activity3"]?><br><br>
                                4. <?=$row["activity4"]?><br><br>
                            </td>
                        </tr>

			<tr>
                            <td>Do you like this recommendation?</td>
                            <td>
                                <form id="choice" method="POST">
		   		    <input class="yesNo" type="submit" name="Yes" value="Yes">
                    		    <input class="yesNo" type="submit" name="No" value="No">
				</form>
				&nbsp <?=$row["likes"]?> likes &nbsp&nbsp&nbsp<?=$row["dislikes"]?> dislikes
				<?php $db->close(); ?>
                            </td>
                        </tr>
                    </table>
                </td> 
            </tr>
        </table>

    </section>

    <br><br><br><br>
    <div class="backbtn">
        <button class="btn" id="back" onclick="location.href='question3.php'">Back</button>
        <button class="btn" id="restart" onclick="location.href='index.html'">Restart</button>
    </div>

</body>

</html>
