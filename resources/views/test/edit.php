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
<a href="<?php echo url('test'); ?>">List Of Page</a>
<hr>
<form action="<?php echo url('test/update', $test->id) ?>" method="post">

    <?php echo csrf_field(); ?>
    <input type="hidden" name="_method" value="put">
    <input name="title" type="text" value="<?php echo $test->title ?>" placeholder="Title">
    <br>
    <br>
    <input name="email" type="email" value="<?php echo $test->email ?>" placeholder="Email Address">
    <br>
    <br>
    <textarea name="details" placeholder="Details" rows="5"><?php echo $test->details ?></textarea>
    <br>
    <br>
    <button>Update</button>
</form>
<br>
</body>
</html>
