<?php 

   <?php if (! empty($errors)) : ?>
    <ul>
        <?php foreach ($errors as $error) : ?>
        <li> <?= $error ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    
<form method="post">

    <div>
        <label for="title" id="title">Title</label>
        <input type="text" id="title" name="title" placeholder="Article Title" value="<?=  htmlspecialchars($title); ?> ">
    </div>
    
    <div>
        <label for="content">Content<label>
                <textarea name="content" rows="4" cols="40" id="content"
                    placeholder="Article Content"><?= htmlspecialchars($content); ?></textarea>
    </div>
    <div>
        <label for="published_at">Publication Date and Time</label>
        <input type="datetime-local" name="published_at" id="published_at"  value="<?= htmlspecialchars($published_at); ?>
    </div>
    <div class="btn">
        <button type="submit" class="btn btn-success button1 button1:hover">Save</button>
    </div>
</form>
<?php require "includes/footer.php"; ?>