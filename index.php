
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

    <title>Document</title>
</head>
<body class="debug">

    <div class="centered">
        <h1>Bad Words PHP</h1>

        <!-- form -->
        <form action="word.php" method="POST">

            <!-- per il paragrafo -->
            <div class="label top">
                <label for="text">Inserisci qui un testo:</label>
            </div>

            <textarea name="text" id="text" cols="30" rows="5" placeholder="Inserisci qui" required></textarea>
            <!-- /per il paragrafo -->




            <!-- per la parola da censurare -->
            <div class="label bottom">
                <label for="word">Inserisci la parola da censurare:</label>
            </div>

            <input name="word" id="word" placeholder="Inserisci la parola" required></input>
            <button type="submit">Submit</button>
            <!-- /per la parola da censurare -->

        </form>

    </div>
    
</body>
</html>
