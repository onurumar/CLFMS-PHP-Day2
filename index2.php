<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>2nd exercise</title>
</head>
<body class="exercise2">
<h4>CONVERT <br><strong>°F</strong> IN <strong>°C</strong></h4>
    <div>
        <form method="post">
            <input type="number" name="convert" id="convert"></input>
            <button type="button" id="calculate" href="">calculate</button>
        </form>

    </div>

    <?php

        $e=15;
        
        if ($e<=5 )
        echo "<h4>very cold</h4>";
        elseif ($e<=10 )
        echo "<h4>Cold</h4>";
        elseif ($e<=15 )
        echo "<h4>Pleasant</h4>";
        elseif ($e<=20 )
        echo "<h4>Warm</h4>";
        elseif ($e>21 )
        echo "<h4>hot</h4>";
        
    ?>
</body>
</html>
