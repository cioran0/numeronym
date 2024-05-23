<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style> 
        body {background-color: black; color:yellow; font-family:"Poetsen One"; text-align:center;} 
        p {text-align:left;}
    </style>
</head>
<body>
 <h2>
    <?php
        echo nl2br ("🖩 Numeronym Generator \n 
        A numeronym is an abbreviation using numbers for the middle of the word");
    ?>
 </h2>

<h3>Enter a word to shorten</h3>
<form action="" method="post">
    <input type="text" name="OGname" id="OGname"/>
    
    <button type="submit" name="ok">OK</button>
</form>
<br>
<h3>
    <?php 
        echo nl2br ("The word entered is: \n");
        echo htmlspecialchars($_POST['OGname']); 
    ?>
</h3> 

    <h3>
        <?php 
        if(isset ($_POST['ok']) && strlen($_POST['OGname']) > 0 ){
            echo nl2br ("Numeronym is: \n");
            echo ( 
                substr($_POST['OGname'],0,1). 
                (strlen($_POST['OGname']) - 2 ). 
                substr($_POST['OGname'],-1)
            );
        }
        if(isset ($_POST['ok']) && strlen($_POST['OGname']) <= 0 )
            echo("Please enter a word");

        ?>
    </h3>
<br>
<hr>
<div>
    <p>
    <?php
        echo nl2br (
        "Some common numeronyms \n 
        a16z = Andreesen Horowitz \n
        k8s = Kubernetes \n
        a11y = accessibility \n
        d11n = documentation \n
        i18n - internationalization \n
        o11y = observability \n
        t9n = translation \n
        l10n = localization \n
        i14y = interoperasbility \n
        c14n = canonicalization \n
        n11n = normalization \n
        "
        );
    ?>
    </p>
</div>
</body>
</html>
