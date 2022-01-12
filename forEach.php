<?php


$articles = [    [
        'title' => 'First Post',
        'content' => 'This is the first of many posts',    ], 
        [
        'title' => 'Another Post',
        'content' => 'Yet another facinating  post'    ],
        [
        "title" => "Read this!",
        "content" => "You must read this now!",
        ]
];
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>My Website</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="" />
    </head>

    <body>
        <header>
            <h1>My Articles</h1>
        </header>
        <main>
            <div>
                <label> Latest articles </label>
                <ul>
                    <?php foreach ($articles as $article): ?>
                        <li>
                            <article>
                                <h2><?= $article['title']; ?></h2>    
                                <p> <?= $article['content']; ?></p>
                            </article>
                    </li>
                    <?php  endforeach; ?>
                    </ul>
           </div>
           
        </main>
    </body>
 </html>