<?php  
    if(isset($_POST['Select']))
    {
        session_start();
        $_SESSION["season"] = $_POST["season"];
        header("Location: question2.php");
    }
?>

<!DOCTYPE html> 
<html> 
<head>

    <Title> Question 1</Title>
    <link rel="stylesheet" type="text/css" href="style.css">
        
</head>

<body class="home">
    
    <div class="container">
        
        <img class="EtW-bubble" alt="#ExploreTheWorldQ" title="#ExploreTheWorldQ" src="images/speechbubble.png">
        
        <div class="centered">

            <h1 class="question">
                Which season would you like to travel in?
            </h1>

            <div class="dropdown">
                <button class="dropdown-hover">SELECT A SEASON</button>
                
                <div class="dropdown-menu">

	            <form id="choice" method="POST">
                        <br>
		        <input type="radio" name="season" value="Summer" checked> Summer<br><br>
                        <input type="radio" name="season" value="Autumn"> Autumn<br><br>
                        <input type="radio" name="season" value="Winter"> Winter <br><br>
                        <input type="radio" name="season" value="Spring"> Spring <br><br>
                        <input type="submit" name="Select" value="Select"> <br><br>
		    </form>  

                </div>
            </div>
        </div>

    </div>

</body>

</html>
