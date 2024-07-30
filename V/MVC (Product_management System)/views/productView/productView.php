
<?php require("views/template/header.php"); ?>
<?php require("./database/database.php");
    $statement=$db->prepare("SELECT * FROM category");
    $statement->execute();
    $users=$statement->fetchAll();
    // var_dump($users);
 ?>
<div class="container">
    <div class="card mt-2">
        <h1>Product</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque ab rerum cupiditate cum natus deleniti vel quidem placeat voluptas aliquam, veritatis accusantium impedit fuga, exercitationem quibusdam vero ipsa consectetur eum!</p>
    </div>
    <form action="/products/create" method="post" class="mt-5">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Enter a new product" aria-label="Recipient's username" aria-describedby="button-addon2" name="product">
            <button class="btn btn-primary" type="submit" id="button-addon2">Add now</button>
        </div>
        <div class="form-group mt-2">
                <select name="category">
                    <?php foreach($users as $user): ?>
                    <option value="<?php echo$user['cat_id']?>"><?php echo $user['catName'] ?></option>
                    <?php endforeach;?>
                </select>
            </div>
    </form>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>ProductName</th>
            <th>CategoryID</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?= $product['pro_id'] ?></td>
                    <td><?= $product['proName'] ?></td>
                    <td><?= $product['catName'] ?></td>
                    <td><a href="/views/ProductView/editProduct.view.php?id=<?= $product['pro_id']?> " class="btn btn-success">Edit</a></td>
                    <td><a href="/products/delete?id=<?= $product['pro_id']?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
            <tr>
        </tbody>
    </table>
</div>
<?php require("views/template/footer.php");