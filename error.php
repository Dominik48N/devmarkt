<!DOCTYPE HTML>

<html lang="de">

<head>

    <title>Konzept Coming Soon</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<div class="form">

    <div id="s">

<h3 id="success" style="opacity: 0;left: 100%;">&#10060;</h3>
    <h3 id="text" class="success" style="opacity: 0;left: 90%;">Da ist was schiefgelaufen....</h3>

      <?php

      if(isset($_GET['error'])) {

          ?>

          <br>
          <br>
          <br>
          <br>

      <p class="success" style="display: block">Bitte melde folgenden Fehler an Till#6638: <strong><code style="font-family: 'monospace';"><?php echo testInput($_GET['error']); ?></code></strong></p>



      <?php

        }

        ?>

    </div>

</div>

</body>

<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

<script>

    $(window).ready(function() {

        $("#success").animate({left: '25px', width: '25%', height: '150px', opacity: "1"}, 500);
        $("#text").animate({left: '30px', opacity: "1", 'margin-right': '40%', 'margin-top': '11%'}, 500);

    });

</script>

</html>

<?php

function testInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

?>