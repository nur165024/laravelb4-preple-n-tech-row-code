<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
</head>
<body>
    <h1>Edit Page</h1>
    <a href="<?php echo url('blog') ?>">List Of Blog</a>
    <hr>
    <form action="<?php echo url('blog/update', $blog->id) ?>" method="post">

        <?php echo csrf_field() ?>
        <input type="hidden" name="_method" value="put">
        <input name="name" value="<?php echo $blog->name ?>" type="text" placeholder="Name">
        <br>
        <br>
        <textarea name="details" placeholder="Details" rows="5"><?php echo $blog->details ?></textarea>
        <br>
        <br>
        <button>Update</button>
    </form>
</body>
</html>
