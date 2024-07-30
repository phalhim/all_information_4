<?php
    if(!isset($_SESSION['user'])) {
        header('Location: /signin');
        die();
    }
    $user = $_SESSION['user'];
?>
<?php if (isset($_SESSION['success'])): ?>
<div class="alert alert-success alert-dismissible fade show" id="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?= $_SESSION['success'] ?>
  </div>
<?php 
unset($_SESSION['success']);
endif;
?>
<?php if (isset($_SESSION['error'])): ?>
<div class="alert alert-danger alert-dismissible fade show" id="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?= $_SESSION['error'] ?>
  </div>
<?php 
unset($_SESSION['error']);
endif;
?>
<h1><img width="50px" height="50px" class="rounded-circle" src="assets/profiles/<?= $user['image'] ?>"> Admin Panel</h1>
<div class="d-flex justify-content-between">
<a href="/signout" class="btn btn-danger btn-sm">Sign Out</a> 
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Add User +</button>
</div>
<hr>
<table class="table table-bordered" id="user_data">
    <thead class="bg-primary text-white">
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $users = getAllUsers();
        foreach ($users as $user):
    ?>
        <tr>
            <td><img width="30px" height="30px" class="rounded-circle" src="assets/profiles/<?= $user['image'] ?>" alt=""></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['role'] ?></td>
            <td>
                <a href="">Edit</a> /
                <a href="">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
