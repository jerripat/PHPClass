<?php 
require 'includes/database.php';
$errors =[];
$title ='';
$content = '';
$published_at = '';

if ($_SERVER["REQUEST_METHOD"]  == "POST") {
    
            $title = $_POST['title'];
            
            if ($_POST['title'] == ''){
                $errors[] = "Title is required";
            }
            if ($_POST['content'] == ''){
                $errors[] = 'Content is required';
            }
            if (empty($errors)){
                $conn =getDB();
                $sql = "INSERT INTO cms_article (title, content, published_at)  VALUES (?, ?, ?)";
                $stmt = mysqli_prepare($conn, $sql);
    
             if ($stmt === false) {
                    echo mysqli_error($conn);
       }    else {
                    if ($published_at != ' '){
                        $published_at = null;
                    }else{
                        $date_time = date_create_from_format('Y-m-d H:i:s', $published_at);
                    }
            mysqli_stmt_bind_param($stmt, "sss", $title, $content, $published_at);
    
                if (mysqli_stmt_execute($stmt)) {
                
                    $id = mysqli_insert_id($conn);
                    echo "Inserted record with ID: $id";
                
                } else {
                    echo mysqli_stmt_error($stmt);
                }
            }
        }
   }

?>

 <?php require 'includes/header.php'; ?>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
             <style>
                <?php include 'CSS/styles.css'; ?>
                .ulCls{
                     align-items:left;
                     align-text:left;
                     margin-left: 0;
                     width: 12rem;
                    }
            </style>
            <div id="moveTitle">
            <h2>New Article</h2>
            </div>
            <div class="container ulCls">
             <?php if (!empty($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                            <li> <?= $error ?></li>
                    <?php endforeach ?>
                </ul>
             <?php endif ?>    
              </div>   
             <form method="post" class="square container">
                <div class="mx-auto" style="width: 400px;">
                    <div class="mb-3">
                            <label for="textBox" class="form-label" id="coloration">Title</label>
                            <input type="text" autofocus class="form-control" id="textBox" name="title" placeholder="Article Title" value="<?=htmlspecialchars($title); ?> ">
                    </div>
                    <div class="mb-3">
                        <textarea name="content" rows="4" cols="40" id="textBox2" placeholder="Article Content"><?=htmlspecialchars($content); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="textBox3" class="form-label" id="coloration2">Publication Date and Time</label>
                        <input type="datetime-local" name="published_at" id="textBox3" placeholder="" >
                    </div>
                    <div class="btn">
                        <button type="submit" class="btn btn-success button1 button1:hover">Submit</button>
                   </div>
                </div>
            </form>
            <?php require "includes/footer.php" ?>
  
