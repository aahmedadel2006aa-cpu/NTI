<?php include 'navbar.php'; ?>
<?php
$products = [
    'Laptop HP' => [
        'price' => '15000',
        'img' => 'https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=500',
        'desc' => 'High quality laptop for business.'
    ],
    'iPhone 12' => [
        'price' => '20000',
        'img' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500',
        'desc' => 'Fast and reliable mobile phone.'
    ],
    'Samsung Smart TV' => [
        'price' => '8000',
        'img' => 'https://images.unsplash.com/photo-1593305841991-05c297ba4575?w=500',
        'desc' => 'Watch your favorite movies in 4K.'
    ],
    'Gaming Mouse' => [
        'price' => '620',
        'img' => 'https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=500',
        'desc' => 'ay 7aga' 
    ],
    'Sony Headphones' => [
        'price' => '1200',
        'img' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500',
        'desc' => 'Great Noise cancelling feature.'
    ],
    'Mechanical Keyboard' => [
        'price' => '850',
        'img' => 'https://images.unsplash.com/photo-1595225476474-87563907a212?w=500',
        'desc' => 'RGB colors and smooth typing.'
    ]
];
?>

<div class="container mt-5">
    <h2 class="text-center mb-5 font-weight-bold">All Products</h2>
    <div class="row">
        
        <?php foreach($products as $product => $values): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?= htmlspecialchars($values['img']) ?>" class="card-img-top" alt="<?= htmlspecialchars($product) ?>" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary"><?= htmlspecialchars($product) ?></h5>
                        <p class="card-text text-muted"><?= htmlspecialchars($values['desc']) ?></p>
                        <h6 class="text-success mt-auto font-weight-bold">Price: <?= htmlspecialchars($values['price']) ?> EGP</h6>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
