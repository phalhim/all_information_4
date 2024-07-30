<?php
    if(!isset($_SESSION['user'])) {
        header('Location: /signin');
        die();
    }
?>
<?php if (isset($_SESSION['success'])): ?>
<div class="alert alert-success alert-dismissible fade show" id="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?= $_SESSION['success'] ?>
  </div>
<?php 
unset($_SESSION['success']);
endif;
$user = $_SESSION['user'];
?>
<h1>Here is the place for normal user</h1>
<a href="/signout">Sign Out</a> 
<div class="card" style="width:400px">
    <img class="card-img-top" src="assets/profiles/<?= $user['image']?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?=$user['name'] ?></h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>