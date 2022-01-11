 <?php
//$hour = readline('Enter hour');
$hour = 22;
?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <title>My Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>

    <body>
        <header>
        <h1>Lorem Ipsum</h1>
</header>
<main>
        <?php if  ($hour < 12): ?>
                Good Morning
            <?php elseif ($hour < 18): ?>
               Good Afternoon
           <?php elseif ($hour < 22): ?>
                Good Evening
           <?php else : ?>
               Good Night
          <?php endif; ?>
        <!-- <p>Hello, <?php echo $name  ?>!</p> -->
           </main>
    </body>
            <footer>
             </footer>
</html>