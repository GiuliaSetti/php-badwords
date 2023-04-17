<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">

    <title>Word</title>
</head>
<body class="debug">

        <?php
            //var testo
            $text = $_POST['text'];
            //vat testo censurato 
            $censored = $_POST['word'];
            //var che sostituisce al testo la parola censurata con tre ***
            $censoredPart = str_ireplace($censored, '***',$text);

        ?>

        <div class="centered">
            
            <!-- testo normale -->
            <div class="text top">

                <h2>TESTO:</h2>
                
                <!-- testo in pagina  -->
                <div> <?php echo $text ?> </div>
                
                <!-- testo con word count del testo -->
                <div class="result">Il testo conta <b><?php echo str_word_count($text) ?></b> parole.</div>
                
            </div>
            
            <!-- parte censurata -->
            <div class="text bottom">

                <h4>Il seguente testo è stato censurato.</h4>
                <!-- mostra il testo con la censura -->
                <div> <?php echo $censoredPart ?> </div>
    
                <!-- testo censurato con tot parole -->
                <div class="result">Una volta censurato, il testo conta <b><?php echo str_word_count($censoredPart) ?></b> parole.</div>

            </div>

        </div>



</body>
</html>