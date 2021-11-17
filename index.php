<?php
    include "model/weather.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--CSS-->
    <link rel="stylesheet" href="css/weather.css">


    <title>WeatherAPIs</title>


</head>
<body>
        <div class="container ">
            <h1>What's the weather?</h1>

            <form>
                <label for="city">Enter the name of a city.</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Eg. London, Paris..." value="<?php  if(array_key_exists("city", $_GET)){
                    echo $_GET['city']; }?>">
                <button class="btn btn-warning" type="submit">Search</button>
            </form>
            
            <div id="weather">
                <?php
                    if($weather){
                        echo "<p class='alert alert-info'>".$weather."</p>";
                    } else if ($error) {
                        echo "<p class='alert alert-danger'>".$error."</p>";
                    }
                ?>
            </div>
        </div>
    
    
</body>
</html>