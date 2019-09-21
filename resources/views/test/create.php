<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>
    <h1>Create Page</h1>
    <a href="<?php echo url('test/index'); ?>">List Of Page</a>
    <hr>
    <form action="<?php echo url('test/store') ?>" method="post">

        <?php echo csrf_field(); ?>

        <input name="title" type="text" placeholder="Title">
        <br>
        <br>
        <input name="email" type="email" placeholder="Email Address">
        <br>
        <br>
        <textarea name="details" placeholder="Details" rows="5"></textarea>
        <br>
        <br>
        <button>Save</button>
    </form>
    <br>
</body>
</html>
