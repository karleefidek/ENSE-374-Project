<?php  
    if(isset($_POST['Select']))
    {
        session_start();
        $_SESSION["travelAct"] = $_POST["travelAct"];
        header("Location: destination.php");
    }
?>

<!DOCTYPE html> 
<html> 
<head>

    <Title> Question 3</Title>
    <link rel="stylesheet" type="text/css" href="style.css">
        
</head>

<body class="home">

    <div class="container">
        
        <img class="EtW-bubble" alt="#ExploreTheWorldQ" title="#ExploreTheWorldQ" src="images/speechbubble.png">
        
        <div class="centered">

            <h1 class="question">
                What type of travel activities
                <br>
                would you like to do?
            </h1>

            <div class="dropdown">
                <button class="dropdown-hover">SELECT AN ACTIVTY TYPE</button>
                
                <div class="dropdown-menu">

	            <form id="choice" method="POST">
                        <br>
                        <input type="radio" name="travelAct" value="Sight-Seeing" checked> Sight-Seeing (ie. visiting famous monuments)<br><br>
                        <input type="radio" name="travelAct" value="Relaxing"> Relaxing (ie. lounging on the beach)<br><br>
                        <input type="radio" name="travelAct" value="Events"> Events (ie. festivals, going out, etc.)<br><br>
                        <input type="submit" name="Select" value="Select"> <br><br>
    	            </form>  

                </div>
            </div>
        </div>

    </div>
   
    <div class="backbtn">
        <button class="btn" id="back" onclick="location.href='question2.php'">Back</button>
    </div>

</body>

</html>
