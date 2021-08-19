<?php
$weather = '';
    if(isset($_GET['city'])) {
        $urlContent = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q='.$_GET['city'].'&appid=9de5bde4b9ad5c9889be21cca0c7f9f0');

        $forcastArray = json_decode($urlContent, true);
        print_r($forcastArray);

        $weather = $forcastArray['weather'][0]['description'];
        echo $weather;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/weather.css" />
    <title>Weather-API</title>
</head>
<body>
    <main class="main">
        <h1>Weather in the city</h1>
        <form class="form">
            <div>
                <input type="text" name="city">
            </div>
            
            <div>
                <button>submit</button>
            </div>
            
        </form>
        <?php
            if ($weather) {
        ?>
        <div class="alert">
            <?php  
                echo $weather;
            ?>     
        </div>
        <?php  
            }
        ?>
    </main>
</body>
</html>