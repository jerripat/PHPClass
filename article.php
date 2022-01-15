<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "jerripat";
$db_pass = "Dadio1005";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {

    echo mysqli_connect_error();
    exit;
}

$sql = "SELECT * 
             FROM cms_article
             WHERE id = "  . $_GET[ 'id '];




$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
}
else {
    $article = mysqli_fetch_all($results);

    var_dump($article);
}
?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" acontent="width=device-width, initial-scale=1.0">
    
     <title>My Blog</title>
 </head>
    <header>
            <h1>My Blog</h1>    
    </header>
    <body>
        <main>
            <?php if (empty($articles)): ?>
                <p>No articles found.</p>
            <?php
else:
?>
                    <ul>
                        <?php foreach ($articles as $article): ?>
                            <li>
                             <article>
                                    <h2><a href="article.php">< ?= $article[ ' tid ']; ?>"><?= $article[ 'title']; ?>"</a></h2>    
                                    <p><?= $article[' content ']; ?></p>
                            </article>
                        </li>    
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
        </main>
    </body>
 </html>