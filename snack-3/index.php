<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>snack-3</title>
         <link rel="stylesheet" href="style.css">
     </head>
     <body>
        <div class="card-container">

            <?php
                foreach ($posts as $post_key => $post_value) {
                    ?>
                     <h1><?php echo $post_key; ?></h1>
                    <?php
                    foreach ($post_value as $value) {
            ?>

            <div class="card-body">
                 <h1><?php echo $value['title']; ?></h1>
                 <p><?php echo $value['author']; ?></p>
                 <p><?php echo $value['text']; ?></p>
            </div>

            <?php
                    }
                }
            ?>

        </div>
     </body>
 </html>
