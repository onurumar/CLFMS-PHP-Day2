<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>1st exercise</title>
</head>
<body>
    <?php

    // --> Exercise 1 <--

    $greeting = "<h1>Paul <strong>Albrecht</strong></h1>";
    echo $greeting; 


    // --> Exercise 2 <--

    $d=date("D");
    if ($d=="Mon" )
    echo "<h1>Happy <strong>Monday!</strong></h1>";
    else
    echo "<h1>Have a nice day!</h1>" ;


    // --> Exercise 3 <--

    $e=date("D");
    if ($e=="Mon" )
    echo "<h1>Today is <strong>Monday!</strong></h1>";
    elseif ($e=="Tue" )
    echo "<h1>Today is <strong>Tuesday!</strong></h1>";
    elseif ($e=="Wen" )
    echo "<h1>Today is <strong>Wednesday!</strong></h1>";
    elseif ($e=="Thu" )
    echo "<h1>Today is <strong>Thursday!</strong></h1>";
    elseif ($e=="Fri" )
    echo "<h1>Today is <strong>Friday!</strong></h1>";
    elseif ($e=="Sat" )
    echo "<h1>Today is <strong>Saturday!</strong></h1>";
    elseif ($e=="Sun" )
    echo "<h1>Today is <strong>Sunday!</strong></h1>";

    echo "<hr>";


    // --> Exercise 4 <--

    //for loop
    for( $i=1; $i<=50; $i++)
    {
        echo "<h3>Paul Albrecht <strong>$i for loop</strong></h3> – ";
    };
    echo "<hr>";

    //while loop
    $a = 1;
    while( $a <= 50)
    {
        echo "<h3>Paul Albrecht <strong>$a while loop</strong></h3> – ";
        $a++;
    };

    echo "<hr>";

    //do while loop
    $b = 0;
    do {
        $b++;
        echo "<h3>Paul Albrecht <strong>$b do while loop</strong></h3> – ";
        } 
    while( $b < 50 );
     echo "<h3>This loop ends after <strong>$b loops</strong></h3>";

    echo "<hr>";



    // --> Exercise 5 <--

    $numbers = array( 1 , 2, 3, 4, 5, 6, 7, 8, 9, 10);
    foreach( $numbers as $value )
    {
    echo "<h2>$value</h2> ";
    }


    // --> Exercise 6 <--

    $figures = array(
        "Trevor" => "crazy",
        "Michael" => "devil",
        "Franklin" => "chaotic",
        "Lester" => "slow",
        "Lamar" => "deadly",
        "Tracey" => "really dumb",
        "Jimmy" => "not the brightest"
    );
    echo "<h4>Trevor is <strong>". $figures['Trevor']. "</strong></h4>";
    echo "<h4>Michael is <strong>". $figures['Michael']. "</strong></h4>";
    echo "<h4>Franklin is <strong>". $figures['Franklin']. "</strong></h4>";
    echo "<h4>Lester is <strong>". $figures['Lester']. "</strong></h4>";
    echo "<h4>Lamar is <strong>". $figures['Lamar']. "</strong></h4>";
    echo "<h4>Tracey is <strong>". $figures['Tracey']. "</strong></h4>";
    echo "<h4>Jimmy is <strong>". $figures['Jimmy']. "</strong></h4>";

echo "<hr>";

    $figures = array(
        "con" => array(
            "Trevor" => "crazy",
            "Michael" => "devil",
            "Franklin" => "chaotic",
            "Lester" => "slow",
            "Lamar" => "deadly",
            "Tracey" => "really dumb",
            "Jimmy" => "not the brightest"
        ),
        "pro" => array(
            "Trevor" => "willing to take risks",
            "Michael" => "succesfully",
            "Franklin" => "focused",
            "Lester" => "smart",
            "Lamar" => "efficient",
            "Tracey" => "Michaels daugther",
            "Jimmy" => "... nope really dumb"
        )
    );


    echo "<h4>Trevor is <strong>". $figures['con']['Trevor']. "</strong> but <strong>"  .$figures['pro']['Trevor']. "</strong></h4>";
    echo "<h4>Michael is <strong>". $figures['con']['Michael']. "</strong> but <strong>" . $figures['pro']['Michael']. "</strong></h4>";
    echo "<h4>Franklin is <strong>". $figures['con']['Franklin']. "</strong> but <strong>" . $figures['pro']['Franklin']. "</strong></h4>";
    echo "<h4>Lester is <strong>". $figures['con']['Lester']. "</strong> but <strong>" . $figures['pro']['Lester']. "</strong></h4>";
    echo "<h4>Lamar is <strong>". $figures['con']['Lamar']. "</strong> but <strong>" . $figures['pro']['Lamar']. "</strong></h4>";
    echo "<h4>Tracey is <strong>". $figures['con']['Tracey']. "</strong> but <strong>" . $figures['pro']['Tracey']. "</strong></h4>";
    echo "<h4>Jimmy is <strong>". $figures['con']['Jimmy']. "</strong> but <strong>" . $figures['pro']['Jimmy']. "</strong></h4>";


    ?>
</body>
</html>