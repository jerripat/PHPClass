<?php 

require 'includes/database.php';
$errors = [];
$title = ' ';
$content = ' ';
$published_at = ' ';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    If (!empty($_POST['title'])) {
        $title= $_POST['title'];
    }
    if  (! empty($_POST[' content '])){
        $content = $_POST[' content '];
    }
    if  (! empty($_POST[' published_at'])){
        $published_at = $_POST[' published_at'];
    }
    
    
    // $title = isset($_POST[' title ']);
    // $content = isset($_POST[ ' content ']);
    // $published_at =isset($_POST[ 'published_at ']);
    if ($title == '') {
        $errors[] = 'Title is required';
    }
    if ($content == '') {
        $errors[] = 'Content is required';
    }
    
    if ($published_at != ' ') {
        $date_time = date_create_from_format('Y-m-d H:i:s', $published_at);
        
        if ($date_time === false) {
            
            $errors[] = 'Invalid date and time';
            
        } else {
            
            $date_errors = date_get_last_errors();
            
            if ($date_errors['warning_count'] > 0) {
                $errors[] = 'Invalid date and time';
            }
        }
    }
    if (empty($errors)){
        
        $conn = getDB();
        
        $sql = "INSERT INTO cms_article (title, content, published_at) VALUES (?, ?, ?)";
        
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt === false) {
            
            echo mysqli_error($conn);
        }    
        else
        {
            if ($published_at == ' '){
                $published_at = null;
            }
            
            mysqli_stmt_bind_param($stmt, "sss", $title, $content, $published_at);
            
            if  (mysqli_stmt_execute($stmt)){
                
                $id = mysqli_insert_id($conn);
                
                if (isset($_SERVER[' HTTPS '] )  && $_SERVER[' HTTPS '] != ' off ' ){
                    $protocol = 'https';
                }else {
                    $protocol = 'http' ;
                }
                
                header("Location: $protocol://" . $_SERVER[' HTTP_HOST ']  . "/article.php?id=$id");
                exit;
            } else {
                echo mysqli_stmt_error($stmt);
            }   
        }
    }       
}  
?>
<?php require 'includes/header.php'; ?>
<h2>New Article</h2>
<?php if (! empty($errors)) : ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
            <?php endforeach; ?>   
        </ul> 
        <?php endif; ?>
        
        <!doctype html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
           
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <style>
          <?php include 'CSS/styles.css'; ?>
        </style>
    

</head>
    <body>
         <main>
                <form method="post" class="div1">
                    <div class="square ">
                            <div class="div1">
                                <label for="title" id="title">Title</label>
                                <input id="textBox" name="title" placeholder="Article Title"  />
                                                 
                                <label for="content">Content</label>
                                        <textarea name="content" rows="4" cols="40" id="content" placeholder="Article Content>></textarea>
                            </div>
                            <div>
                                <label for="published_at">Publication Date and Time</label>
                                <input type="datetime-local" name="published_at" id="published_at" />
                            </div>   
                        </form>  
                </div>     
                        <div>
                            <button class="btn btn-primary" type="submit">Button</button>
                        </div>
                
            </main>
        </body>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"                  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
         
     </html>
