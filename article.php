<?php require 'includes/database.php'; ?>


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

<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Article</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <style>
                <?php include 'CSS/styles'; ?>
            </style>
    </head>

    <style>
      body {
            background: #cccbc6;
            text-align: center;
        }
        article{
            color:white;
        }
        .square {
            background: #3254a8;
            width: 25rem;
            aspect-ratio: 2/1;
            border: solid black;
            box-shadow: 15px 15px 10px rgba(60, 56, 140, 1);
            display: block;
            margin-top: 3rem;
            margin-left: 10rem;
        }
    </style>
<body>
    <div class="square">
        <?php if ($article === null): ?>
           <p>No articles found.</p>
        <?php else: ?>
                <article>
                    <h2><<?= $article['title']; ?></h2>
                    <p><?= $article['content']; ?></p>
                </article>
        <?php endif; ?>
    </div>
</body>
 <?php require 'includes/footer.php'; ?>      
 </html>