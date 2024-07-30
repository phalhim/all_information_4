<h1>Welcome Page</h1>
<?php if(!isset($_SESSION['user'])): ?>
<a href="/signin">Sign In</a> /
<a href="/signup">Create Account</a>
<?php else: ?>
<a href="/signout">Sign Out</a> 
<?php endif; ?>