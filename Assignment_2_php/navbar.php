<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body { padding-bottom: 50px; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">MyStore</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
        
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="all_products.php">all products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="account.php">account</a>
            </li>
            
            <?php if(isset($_SESSION['email'])): ?>
            <li class="nav-item">
                <a class="nav-link text-danger" href="logout.php">logout</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
