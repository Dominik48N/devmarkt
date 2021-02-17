<?php
include_once('pdo.php');

?>

<!DOCTYPE HTML>

<html lang="de">

<head>

    <title>Erfolg</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<div class="form">

    <div id="s">

<h3 id="success" style="opacity: 0;left: 100%;">&#9989;</h3>
    <h3 id="text" class="success" style="opacity: 0;left: 90%;">Anfrage erfolgreich gestellt.(5s)</h3>

    </div>

</div>

</body>

<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

<script>

    $(window).ready(function() {

        $("#success").animate({left: '25px',width: '25%',height:'150px',opacity:"1"},500);
        $("#text").animate({left: '30px',opacity:"1",'margin-right':'40%','margin-top':'11%'},500);

        var i = 4;

        setInterval(function() {


                $("#text").html("Anfrage erfolgreich gestellt. (" + i + "s)");
                i--;

            if(i == 0) {

                window.location = "<?php echo $base_url; ?>";

            }

        },1000);

    });

</script>

</html>