<?php 
require 'includes/database.php';
$errors =[];
$title = ' ';
$content = ' ';
$published_at = ' ';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$title =$_POST['title'];
$content = $_POST['content'];
$published_at = $_POST['published_at'];

if ($title == ' '){
$errors[] = "Title is required";
}
if ($content == ' '){
$errors[] = 'Content is required';
}

if ($published_at != '') {

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
$conn =getDB();

$sql = "INSERT INTO cms_article (title, content, published_at) VALUES (?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {

echo mysqli_error($conn);
}else{

if ($published_at == ' '){
$published_at = null;
}
mysqli_stmt_bind_param($stmt, "sss", $title, $content, $published_at);

if (mysqli_stmt_execute($stmt)) {

$id = mysqli_insert_id($conn);

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
$protocal = 'https';
}else {
$protocal= 'http';
}
header("Location: $protocal://" . $_SERVER['HTTP_HOST'] . "/article.php?id=$id");
exit;

} else {

echo mysqli_stmt_error($stmt);
}
}
}
}
?>

<?php require 'includes/header.php'; ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
<?php include 'CSS/styles.css'?>
</style>

<div id="moveTitle">
    <h2>New Article</h2>
</div>

<div class="container ulCls">
    <?php if (!empty($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
        <li> <?= $error ?></li>
        <?php endforeach ?>
    </ul>
    <?php endif; ?>
</div>


<form method="post">

    <div>
        <label for="title" id="title">Title</label>
        <input type="text" id="title" name="title" placeholder="Article Title" value="<?=htmlspecialchars($title); ?> ">
    </div>
    </div>
    <div>
        <label for="content">Content<label>
                <textarea name="content" rows="4" cols="40" id="content"
                    placeholder="Article Content"><?=htmlspecialchars($content); ?></textarea>
    </div>
    <div>
        <label for="published_at">Publication Date and Time</label>
        <input type="datetime-local" name="published_at" id="published_at"><?= htmlspecialchars($published_at); ?>
    </div>
    <div class="btn">
        <button type="submit" class="btn btn-success button1 button1:hover">Submit</button>
    </div>
</form>
<?php require "includes/footer.php"; ?>