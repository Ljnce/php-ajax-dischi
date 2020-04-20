<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Music</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/4cd7baf8bb.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js"></script>
        <link rel="stylesheet" href="public/css/style.css">
    </head>
    <body>

    <!-- Test con metodo senza utilizzo di Ajax e Server.php -->
        <?php
            include 'data.php';
        ?>

    <!-- Con ciclo foreach -->
        <!-- <?php foreach ($playlist as $key => $album) { ?>
            <div class="card">
                <img src=" <?php echo $album['poster']; ?> ">
                <h2> <?php echo $album['title']; ?> </h2>
                <p> <?php echo $album['author']; ?> </p>
                <small> <?php echo $album['year']; ?> </small>
            </div>
        <?php } ?> -->

    <!-- Con ciclo for -->
        <?php for ($i=0; $i < count($playlist) ; $i++) { ?>
            <?php $album = $playlist[$i]; ?>
            <div class="card">
                <img src=" <?php echo $album['poster']; ?> ">
                <h2> <?php echo $album['title']; ?> </h2>
                <p> <?php echo $album['author']; ?> </p>
                <small> <?php echo $album['year']; ?> </small>
            </div>

        <?php } ?>


        <script id="template" type="text/x-handlebars-template">
            <img src="{{img}}">
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="public/js/app.js" charset="utf-8"></script>
    </body>
</html>
