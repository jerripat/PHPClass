<?php 
require 'includes/database.php';


$conn =getDB();
if (isset($_GET['id']) && is_numeric($_GET['id'])){
    
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
<?php require 'includes/header.php'; ?>


        
        <meta charset="utf-8">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <style>
                <?php include 'CSS/styles'; ?>
            </style>
            <title>My Blog</title>
    </head>
    <body>
        <main>
        <?php if ($article === null): ?>
           <p>No articles found.</p>
            <?php else: ?>
                    <article>
                        <h2><?= htmlspecialchars($article['title']); ?></h2>
                        <p><?= htmlspecialchars($article['content']); ?></p>
                    </article>
            <?php endif; ?>
        </main>
    </body>      
 </html>