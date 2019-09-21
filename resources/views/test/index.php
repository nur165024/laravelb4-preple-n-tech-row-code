<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Of Page</title>
</head>
<body>
    <h1>List Of Page</h1>
    <a href="<?php echo url('test/create') ?>">Create Page</a>
    <hr>
    <table border>
        <tr>
            <th>SL</th>
            <th>Title</th>
            <th>Email Address</th>
            <th>Details</th>
            <th>Action</th>
        </tr>

        <?php foreach ($tests as $test) { ?>
            <tr>
                <td><?php echo $test->id ?></td>
                <td><?php echo $test->title ?></td>
                <td><?php echo $test->email ?></td>
                <td><?php echo $test->details ?></td>
                <td>
                    <a href="<?php echo url('test/edit', $test->id) ?>">Edit</a>
                </td>
            </tr>
        <?php } ?>

    </table>
</body>
</html>
