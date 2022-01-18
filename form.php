<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

}


?>
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
        
        <title>Forms</title>
    </head>

            <body>
                <main class="square">
                <form method="post">
                        <select name="marque" class="button1">
                            <option value="SanFran">San Francisco</option>
                            <option value="NYork">New York</option>
                            <option value="Sea">Seattle</option>
                        </select>

                    <div class="mx-auto" style="width: 400px;">
                                <div class="mb-3">
                                    <fieldset>
                                        <legend>Log-In</legend >
                                                <label for="textBox" class="form-label" id="coloration">Username</label>
                                                <input type="text" autofocus required class="form-control" id="textBox" name="Username" placeholder="Username" min="1" max="10" title="less then 10 characters expected">
                                    </fieldset>
                                </div>
                                    <fieldset>
                                        <div class="mb-3">
                                                    <label for="textBox2" class="form-label" id="coloration2">Password</label>
                                                    <input type="password" class="form-control" id="textBox2" name="password" placeholder="Password">
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