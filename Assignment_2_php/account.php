<?php 
ob_start(); 
include 'navbar.php'; 

$errors = [];

if (isset($_SESSION['email'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_profile'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $email    = trim($_POST['email']);
        $phone    = trim($_POST['phone']);
        $fb       = trim($_POST['facebook']);
        $twitter  = trim($_POST['twitter']);
        $insta    = trim($_POST['instagram']);
        
        if(empty($username)) { $errors[] = "Username is required."; }
        if(empty($password)) { $errors[] = "Password is required."; }
        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = "A valid Email is required."; }
        if(empty($phone)) { $errors[] = "Phone number is required."; }
        if(!filter_var($fb, FILTER_VALIDATE_URL)) { $errors[] = "A valid Facebook URL is required."; }
        if(!filter_var($twitter, FILTER_VALIDATE_URL)) { $errors[] = "A valid Twitter URL is required."; }
        if(!filter_var($insta, FILTER_VALIDATE_URL)) { $errors[] = "A valid Instagram URL is required."; }
        
        if (empty($errors)) {
            $_SESSION['username']  = $username;
            $_SESSION['password']  = $password; 
            $_SESSION['email']     = $email;
            $_SESSION['phone']     = $phone;
            $_SESSION['facebook']  = $fb;
            $_SESSION['twitter']   = $twitter;
            $_SESSION['instagram'] = $insta;
            
            
            header("Location: index.php");
            exit();
        }
    }
} 
else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        $email    = trim($_POST['email']);
        $password = trim($_POST['password']);
        
        
        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = "Please enter a valid email address."; }
        if(empty($password)) { $errors[] = "Password field cannot be empty."; }
        
        
        if (empty($errors)) {
            
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            
            
            header("Location: all_products.php");
            exit();
        }
    }
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            
            
            <?php if(!empty($errors)): ?>
                <div class="alert alert-danger shadow-sm">
                    <ul class="mb-0">
                        <?php foreach($errors as $error): ?>
                            <li><?= htmlspecialchars($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['email'])): ?>
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">Complete Your Profile</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="account.php">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" name="username" class="form-control" value="<?= htmlspecialchars($_SESSION['username'] ?? '') ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control" value="<?= htmlspecialchars($_SESSION['password'] ?? '') ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($_SESSION['email'] ?? '') ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($_SESSION['phone'] ?? '') ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Facebook URL</label>
                                <div class="col-sm-9">
                                    <input type="url" name="facebook" class="form-control" value="<?= htmlspecialchars($_SESSION['facebook'] ?? '') ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Twitter URL</label>
                                <div class="col-sm-9">
                                    <input type="url" name="twitter" class="form-control" value="<?= htmlspecialchars($_SESSION['twitter'] ?? '') ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Instagram URL</label>
                                <div class="col-sm-9">
                                    <input type="url" name="instagram" class="form-control" value="<?= htmlspecialchars($_SESSION['instagram'] ?? '') ?>">
                                </div>
                            </div>
                            <button type="submit" name="update_profile" class="btn btn-primary btn-block">Save to Session</button>
                        </form>
                    </div>
                </div>

            <?php else: ?>
                
                <div class="card shadow">
                    <div class="card-header bg-dark text-white text-center">
                        <h4 class="mb-0">Login</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="account.php">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password">
                            </div>
                            <button type="submit" name="login" class="btn btn-dark btn-block mt-4">Login</button>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
            
        </div>
    </div>
</div>

<?php ob_end_flush(); ?>
</body>
</html>
