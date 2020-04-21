
<?php
/*

Creo il mio array di oggetti che mi servirà per compilare il mio index; ne creo uno con 2 array dentro, per completare l'index con php e ajax insieme

*/

   $playlist = [
       'ajax' => [
       [
           'poster' => 'https://www.nuovecanzoni.com/wp-content/uploads/2019/06/Jova-Beach-Party-copertina-album-jovanotti.jpg',
           'title' => 'Jova Beach Party',
           'author' => 'Jovanotti',
           'year' => '2019',
           'value' => 'pop'
       ],
       [
           'poster' => 'https://i.pinimg.com/564x/0e/cd/66/0ecd66de74d28ece0176caea85ef3532.jpg',
           'title' => 'Demon Days',
           'author' => 'Gorillaz',
           'year' => '2005',
           'value' => 'jazz'
       ],
       [
           'poster' => 'https://i.pinimg.com/564x/45/8e/f9/458ef9656646b0c3322abf350f68f67a.jpg',
           'title' => 'Direct Hits',
           'author' => 'The Killers',
           'year' => '2013',
           'value' => 'pop'
       ],
       [
           'poster' => 'https://i.pinimg.com/564x/47/a2/5b/47a25bffbb1b676e3d3f690da2d79768.jpg',
           'title' => 'Up In The Air',
           'author' => '30 Seconds to Mars',
           'year' => '2013',
           'value' => 'rock'
       ],
       [
           'poster' => 'https://i.pinimg.com/564x/5c/95/4a/5c954a5228db3c2645fc64219e9c41d1.jpg',
           'title' => 'Love, Lust, Faith and Dreams',
           'author' => '30 Seconds to Mars',
           'year' => '2013',
           'value' => 'pop'
       ],
       [
           'poster' => 'https://i.pinimg.com/564x/45/25/17/4525179ea5a52c58be55154c934d5bd2.jpg',
           'title' => 'Californication',
           'author' => 'Red Hot Chili Peppers',
           'year' => '1999',
           'value' => 'metal'
       ],
       [
           'poster' => 'https://i.pinimg.com/236x/01/c1/c5/01c1c5286c3d07545a90ab78907f437c.jpg',
           'title' => 'By the Way',
           'author' => 'Red Hot Chili Peppers',
           'year' => '2001',
           'value' => 'pop'
       ],
       [
           'poster' => 'https://img.discogs.com/h4xDjKb48-XAsRotrqHy29Ls4Sw=/fit-in/600x588/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6010687-1483451906-5345.jpeg.jpg',
           'title' => 'Awesome Mix vol 1',
           'author' => 'Guardians of Galaxy',
           'year' => '2017',
           'value' => 'rock'
       ],
       [
           'poster' => 'https://upload.wikimedia.org/wikipedia/en/3/38/Queen_-_Greatest_Hits_2.png',
           'title' => 'Queen',
           'author' => 'Queen',
           'year' => '2019',
           'value' => 'pop'
       ],
       [
           'poster' => 'https://alessandrogirola.files.wordpress.com/2013/02/blood-on-the-dance-floor_michael-jackson.jpg',
           'title' => 'Blood of the Dance Floor',
           'author' => 'Michael Jackson',
           'year' => '2019',
           'value' => 'rock'
       ]
   ],
       'php' => [
       [
            'poster' => 'https://www.nuovecanzoni.com/wp-content/uploads/2019/06/Jova-Beach-Party-copertina-album-jovanotti.jpg',
            'title' => 'Jova Beach Party',
            'author' => 'Jovanotti',
            'year' => '2019',
            'value' => 'metal'
        ],
        [
            'poster' => 'https://i.pinimg.com/564x/0e/cd/66/0ecd66de74d28ece0176caea85ef3532.jpg',
            'title' => 'Demon Days',
            'author' => 'Gorillaz',
            'year' => '2005',
            'value' => 'jazz'
        ],
        [
            'poster' => 'https://img.discogs.com/h4xDjKb48-XAsRotrqHy29Ls4Sw=/fit-in/600x588/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6010687-1483451906-5345.jpeg.jpg',
            'title' => 'Awesome Mix vol 1',
            'author' => 'Guardians of Galaxy',
            'year' => '2017',
            'value' => 'rock'
        ]
    ],
];


 ?>
