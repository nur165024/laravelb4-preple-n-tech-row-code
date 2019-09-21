<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog List</title>
</head>
<body>
    <h1>Blog List</h1>
    <a href="<?php echo url('blog/create') ?>">Create Blog</a>
    <hr>
    <table border>
        <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Details</th>
            <th>Action</th>
        </tr>

        <?php foreach ($blogs as $blog) { ?>
            <tr>
                <td><?php echo $blog->id ?></td>
                <td><?php echo $blog->name ?></td>
                <td><?php echo $blog->details ?></td>
                <td>
                    <a href="<?php echo url('blog/edit', $blog->id) ?>">Edit</a>

                    <form style="display: inline-block" action="<?php echo url('blog/delete', $blog->id) ?>" method="post">

                        <?php echo csrf_field() ?>

                        <input type="hidden" name="_method" value="delete">
                        <button onclick="confirm('you are sure')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>

    </table>
</body>
</html>

