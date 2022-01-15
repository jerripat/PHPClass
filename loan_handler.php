

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
          
             if(isset($_POST['fullname'])) {
                 if(!empty($_POST['fullname'])){
                     $name = stripslashes($_POST['fullname']);
                 }else {
                     $name = NULL;
                     echo'<p><font color="red">Please enter your name</font></p>';
                 }
                $name = $_POST['fullname'];
            }else {
                echo("<p>You forgot to select your name</p>");
                $name = NULL;
            }
            if(isset($_POST['emailaddress'])){
                  if(!empty($_POST['emailaddress'])){
                     $email = stripslashes($_POST['emailaddress']);
                 }else {
                     $email = NULL;
                     echo'<p><font color="red">Please enter your email</font></p>';
                 }
                $email = $_POST['emailaddress'];
            } else {
                $email = NULL;
            }
            if(isset($_POST['employment'])) {
                  if(!empty($_POST['employment'])){
                     $employment = stripslashes($_POST['employment']);
                 }else {
                     $employment = NULL;
                     echo'<p><font color="red">Please enter your Employer</font></p>';
                 }
                $employment = $_POST['employment'];
            }else {
                echo("<p>You forgot to select your employment state</p>");
                $employment = NULL;
            }
            if(isset($_POST['age'])){
                  if(!empty($_POST['age'])){
                     $age = stripslashes($_POST['age']);
                 }else {
                     $age = NULL;
                     echo'<p><font color="red">Please enter your age</font></p>';
                 }
                $age =$_POST['age'];
            }else {
                $age = NULL;
            }
            echo "<p>Thank you, <b>$name</b>, for tour enquery</p>
            <p>We will reply to you at your email address: <strong>$email</strong>.</p>";
            echo("<p>You are $employment $age years old</p>");       
        ?>
        
       </main>
    </body>

