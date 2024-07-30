<?php require("views/template/header.php");
?>
<div class="container">
    <div class="card mt-2">
        <h1>Category</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque ab rerum cupiditate cum natus deleniti vel quidem placeat voluptas aliquam, veritatis accusantium impedit fuga, exercitationem quibusdam vero ipsa consectetur eum!</p>
    </div>

    <form action="/categories/create" method="post" class="mt-5">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Enter a new category" aria-label="Recipient's username" aria-describedby="button-addon2" name="category">
            <button class="btn btn-primary" type="submit" id="button-addon2">Add now</button>
        </div>
        <p class="text-danger"><?= isset($error)? $error: ''?></p>
    </form>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>CategoryName</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $cat) : ?>
                <tr>
                    <td><?= $cat['cat_id'] ?></td>
                    <td><?= $cat['catName'] ?></td>
                    <td><a href="/views/categoryView/editCategory.view.php?id=<?= $cat['cat_id'] ?>" class="btn btn-success">Edit </a></td>
                    <td><a href="/categories/delete?id=<?= $cat['cat_id'] ?>" class="btn btn-danger">Delete </a></td>
                </tr>
            <?php endforeach; ?>
            <tr>
        </tbody>
    </table>
</div>

<?php require("views/template/footer.php");
