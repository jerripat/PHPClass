

<title>Loan Enquiry</title>

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <title>Loan Enquiry</title>
 </head>

 <body>
     <main>
        <?php
            $name = isset($_POST['fullname']);
            $email = isset($_POST['emailaddress']);
            $employment = isset($_POST['employment']);
            $age =isset($_POST['age']);
            
            echo "<p>Thank you, <b>$name</b>, for tour enquery</p>
            <p>We will reply to you at your email address: <strong>$email</strong>.</p>";
            // echo("<p>You are $employment $age years old</p>");       
        ?>
        
       </main>
    </body>

