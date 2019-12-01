<?php  
    if(isset($_POST['Select']))
    {
        session_start();
        $_SESSION["budget"] = $_POST["budget"];
        header("Location: question3.php");
    }
?>

<!DOCTYPE html> 
<html> 
<head>

    <Title> Question 2</Title>
    <link rel="stylesheet" type="text/css" href="style.css">
        
</head>

<body class="home">
    
    <div class="container">
        
        <img class="EtW-bubble" alt="#ExploreTheWorldQ" title="#ExploreTheWorldQ" src="images/speechbubble.png">
        
        <div class="centered">

            <h1 class="question">
                What kind of budget do you have?
            </h1>

            <div class="dropdown">
                <button class="dropdown-hover">SELECT A BUDGET</button>
                
                <div class="dropdown-menu">

	            <form id="choice" method="POST">
                        <br>
		        <input type="radio" name="budget" value="Lower Budget" checked> Lower Budget<br><br>
                        <input type="radio" name="budget" value="Higher Budget"> Higher Budget<br><br>
                        <input type="submit" name="Select" value="Select"> <br><br>
		    </form>  

                </div>
            </div>
        </div>

    </div>
   
    <div class="backbtn">
        <button class="btn" id="back" onclick="location.href='question1.php'">Back</button>
    </div>


</body>

</html>
