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
   <link ref="stylesheet" href="CSS/styles.css" >
   <style>
  body{
             background-color: #9695a1;
             text-align: center;
         }
        .square {
            background: #3254a8;
            width: 25rem;
            aspect-ratio: 2/1;
            border: solid black;
            box-shadow:15px 15px 10px rgba(60,56,140,1);
            display:block;
            margin-top:5rem;
            margin-left: 10rem;
        }
        div.form
         {
             display: block;
             text-align: center;
         }
         form
         {
             display: inline-block;
             margin-top:2rem;
             margin-right: auto;
             text-align: left;
}
     main {
         padding-top: 10px;
         margin: 20px;
      }      
       </style>
   <title>Forms</title>
 </head>

 <body>
    <main>
 
    <div class="square" class="center">
     <form method="post">
            <input username="search">
            <input name="password" type="password">
            
            <button>Send</button>
    </form>
    </div> 
      </main>
    </body>
   
 </html>
