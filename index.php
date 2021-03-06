<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>IronMusic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/4cd7baf8bb.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js"></script>
        <link rel="stylesheet" href="public/css/app.css">
    </head>
    <body>

    <header>
        <div class="container-head">
            <div class="head">
                <div class="head-sx">
                    <img src="img/hero.png" alt="">
                </div>
                <div class="head-dx">
                    <select class="music-type-ajax" name="">
                        <option value="">Scegli un genere</option>
                        <option value="pop">Pop</option>
                        <option value="rock">Rock</option>
                        <option value="jazz">Jazz</option>
                        <option value="metal">Metal</option>
                    </select>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- ++++++++   Parte con metodo ajax e php +++++++++ -->
        <div class="container-ajax">
            <div class="cards">

            </div>

        </div>

        <!-- ++++++++   Parte con metodo senza utilizzo di Ajax e Server.php +++++++++ -->
            <?php
               include 'data.php';
            ?>
           <div class="container-php">
                <div class="cards-php">
                    <?php $playlist_php = $playlist['php']; ?>
                    <?php foreach ($playlist_php as $key => $value) { ?>
                       <div class="card-php" data-php=" <?php echo $value['value']; ?>">
                            <img src=" <?php echo $value['poster']; ?> ">
                            <p> &#9835;</p>
                            <h2> <?php echo $value['title']; ?> </h2>
                            <p> <?php echo $value['author']; ?> </p>
                            <small> <?php echo $value['year']; ?> </small>
                        </div>
                   <?php } ?>
                </div>
            </div>

           <!-- Alternativa con ciclo for e non foreach
              <?php $playlist_php = $playlist['php']; ?>
                 <?php for ($i=0; $i < count($playlist_php) ; $i++) { ?>
                     <?php $album = $playlist_php[$i]; ?>
                        <div class="card">
                          <img src=" <?php echo $album['poster']; ?> ">
                          <h2> <?php echo $album['title']; ?> </h2>
                          <p> <?php echo $album['author']; ?> </p>
                        <small> <?php echo $album['year']; ?> </small>
                    </div>
                <?php } ?> -->

    </main>

    <footer>
        <div class="container-foot">
            <div class="foot">
                <img class="image-footer" src="img/hero.png" alt="">
            </div>
        </div>
    </footer>

        <script id="template-playlist" type="text/x-handlebars-template">
            <div class="card" data-music='{{value}}'>
                <img src="{{img}}">
                <p> &#9835; </p>
                <h2> {{titolo}} </h2>
                <p> {{autore}} </p>
                <small> {{anno}} </small>
            </div>
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="src/js/app.js" charset="utf-8"></script>
    </body>
</html>
