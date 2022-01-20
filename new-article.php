<?php 

require 'includes/database.php';
$errors = [];
$title = ' ';
$content = ' ';
$published_at = ' ';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
        $conn = getID();
         $sql = "INSERT INTO cms_article (title, content, published_at) VALUES (?, ?, ?)";
            $errors[] = "Title is required";
           
            $stmt = mysqli_prepare($conn, $sql);
          
            if ($stmt === false) {
                
                echo mysqli_error($conn);
            }    
            else
            {
                mysqli_stmt_bind_param($stmt, "sss", $_POST[' title '], $_POST[' content '], $POST['published_at ']);
                
                if  (mysqli_stmt_execute($stmt)){
                    
                    $id = mysqli_insert_id($conn);
                    echo "Inserted record with ID: $id";
            }   
            else 
            {
                echo mysqli_stmt_error($stmt);
           }    
        }
   }

?>

<?php require 'includes/header.php'; ?>
<h2> New Article</h2>

<form method="post">

    <div>
        <label for="title" id="title">Title</label>
        <input type="text" id="title" name="title" placeholder="Title">
    </div>
    
    <div>
        <label for="content">Content<label>
                <textarea name="content" rows="4" cols="40" id="content"
                    placeholder="Article Content"></textarea>
    </div>
    <div>
        <label for="published_at">Publication Date and Time</label>
        <input type="text" name="published_at" id="published_at" id="published_at" >
       
    </div>
    <div class="btn">
        <button type="submit" class="btn btn-success button1 button1:hover">Submit</button>
    </div>
</form>
<?php require "includes/footer.php"; ?>