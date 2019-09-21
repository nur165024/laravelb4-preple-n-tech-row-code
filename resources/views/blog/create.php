<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Create</title>
</head>
<body>
    <h1>Blog Create</h1>
    <a href="#">List Of Page</a>
    <hr>
    <form action="<?php echo url('blog/store') ?>" method="post">

        <?php echo csrf_field() ?>

        <input name="name" type="text" placeholder="Name">
        <br>
        <br>
        <textarea name="details" placeholder="Details" rows="5"></textarea>
        <br>
        <br>
        <button>Save</button>
    </form>

</body>
</html>
