<?php
   if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    if ($user['role'] === "admin") {
      header("Location: /admin");
    } else {
      header('Location: /normal');
    }
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

<div class="card">
  <div class="card-body">
    <form action="controllers/users/signin_check.controller.php" method="post">
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
      </div>
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
    <a href="/signup">Create Account</a>
  </div>
</div>