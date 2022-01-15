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
if (isset($_GET[' id ']) && is_numeric($_GET[' id '])){
    
$sql = "SELECT * 
             FROM cms_article
             WHERE id = " . $_GET['id'];
            
$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
}
else {
    
    $article = mysqli_fetch_assoc($results);
}
}else {
    
    $article = null;
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <title>My Blog</title>
     <meta charset="utf-8">
 </head>
 <body>
 
    <header>
            <h1>My Blog</h1>    
    </header>
   <main>
        <?php if ($article === null): ?>
           <p>No articles found.</p>
        <?php else: ?>
                
                <article>
                    <h2><<?= $article['title']; ?></h2>
                    <p><?= $article['content']; ?></p>
               </article>
        <?php endif; ?>
        </main>
    </body>
 </html>