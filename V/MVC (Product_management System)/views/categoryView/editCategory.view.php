<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php
    require '../../database/database.php';
    $id = $_GET['id'] ? $_GET['id'] : null;
    $statement = $db->prepare("SELECT * FROM category WHERE cat_id=:id");
    $statement->execute(
        [':id' => $id]
    );
    $cate = $statement->fetch();
    // var_dump($cate)
    ?>

    <div class="card-body">
        <form action="/categories/edit" method="post">
            <input type="hidden" value="<?= $cate['cat_id'] ?>" name="id">
            <div class="form-group mt-2">
                <input type="text" class="form-control" name="category" value="<?= $cate['catName'] ?>">
            </div>
            <div class="form-group mt-2">
                <button class="btn btn-block btn-primary">Edit Category</button>
            </div>
        </form>
    </div>


</body>

</html>