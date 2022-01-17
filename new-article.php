<?php require "includes/header.php" ?>



<!doctype html>
<head>
    <title>New Article</title>
    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css" />
    <style>
        form{
            margin-top:3rem;
            margin-left:2rem;
        }
        label{
            color:rgb(212, 203, 68);
        }
        #div1{
            margin-top: 1rem;
            
        }
        </style
    </head>
    <form method="post">
    <h2>New Article</h2>
 <div class="square">
    <div id="div1">
        <label for="title">Title</label>
        <input name="title" id="title" placeholder="Article Title"> 
    </div>  
    
    <div>
            <label for="content">Content</label>
            <textarea name="content" rows="4" cols="40" id="content" placeholder="Article Content"></textarea>  
    </div>
    
    <div>
            <label for="published_at" >Publication Date and Time</label>
            <input type="datetime-local" name="published_at" id="published_at" >
    </div>
    <div>
        <button type="submit" class="btn btn-success button1 button1:hover">Submit</button>
    </div>
</div>  

</form>

<?php require 'includes/footer.php'; ?>