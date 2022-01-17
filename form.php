<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
var_dump($_POST);
}
 
?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link ref="stylesheet" href="CSS/styles.css">
        <style>
        html {
            font-size: 100%;
        }

        body {
            background-color: #9695a1;
            text-align: center;
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

        form {
            display: block;
            height: 18rem;
            width: auto;
            margin-top: 2rem;
        }

        .button1 {
            box-shadow: 0 10px 16px 0 rgba(3, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .button1:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        #textBox {
            width: 15rem;
            height: auto;
            margin-left: 5rem;
            text-align:center;
        }

        #textBox2 {
            width: 15rem;
            height: auto;
            margin-left: 5rem;
            text-align:center;
        }

        #coloration {
            color: #e0e640;
        }

        #coloration2 {
            color: #e0e640;
        }

        select {
            padding: 2px;
            margin-top: 1px0;
        }
        legend{
            color: yellow;
        }
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
                    </div>
                 </fieldset>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

</html>