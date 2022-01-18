<?php
require 'includes/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $conn =getDB();

    $sql = "INSERT INTO article (title, content, published_at)
            VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {

        echo mysqli_error($conn);

    } else {

        mysqli_stmt_bind_param($stmt, "sss", $_POST['title'], $_POST['content'], $_POST['published_at']);

        if (mysqli_stmt_execute($stmt)) {

            $id = mysqli_insert_id($conn);
            echo "Inserted record with ID: $id";

        } else {

            echo mysqli_stmt_error($stmt);

        }
    }
}

?>
<?php require 'includes/header.php'; ?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            <?php include 'CSS/styles.css'; ?>
        </style>
       
        <title>New Article</title>
    </head>

    <body>
        <main class="square">

                <div class="mx-auto" style="width: 400px;">
                <div class="mb-3">
                        <fieldset>
                            <legend>Title</legend >
                                    <label for="textBox" class="form-label" id="coloration">Title</label>
                                    <input type="text" autofocus required class="form-control" id="textBox" name="title" placeholder="Title">
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="mb-3">
                                <label for="textBox2" class="form-label" id="coloration2">Content</label>
                                <textarea name="content" rows="4" cols="40" id="textBox2" placeholder="Article content"></textarea>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="mb-3">
                                <label for="textBox3" class="form-label" id="coloration2">Publication Date and Time</label>
                                <input type="datetime-local" name="published_at" id="textBox3">
                            </div>
                        </fieldset>
                    
                        <div>
                        <button type="submit" class="btn btn-success button1 button1:hover">Submit</button>
                    </div>
                </div>
            </form>
        </main>
    </body>
</html>

