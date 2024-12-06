<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="logoo.png" alt="Flower Shop Logo" class="logo-img" width="125">
                <span>FlowerShop</span>
            </div>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Toko</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Beautiful Flowers for Every Occasion</h1>
        <p>Find the perfect bouquet for your loved ones.</p>
        <a href="#" class="btn">Shop Now</a>
    </section>

    <section class="products">
        <h2>Koleksi Kami</h2>
        <div class="product-list">
            <?php
                // Array produk
                $products = [
                    [
                        "image" => "bunga5.jpg",
                        "name" => "Per Tangkai",
                        "price" => 25.00
                    ],
                    [
                        "image" => "bunga3.jpg",
                        "name" => "Satu Set Bunga",
                        "price" => 30.00
                    ],
                    [
                        "image" => "bunga1.webp",
                        "name" => "Mini",
                        "price" => 35.00
                    ],
                    [
                        "image" => "bunga2.jpg",
                        "name" => "Medium",
                        "price" => 35.00
                    ],
                    [
                        "image" => "bunga1.webp",
                        "name" => "Premium",
                        "price" => 35.00
                    ]
                ];

                // Loop untuk menampilkan produk
                foreach ($products as $product) {
                    echo "
                    <div class='product'>
                        <img src='{$product['image']}' alt='{$product['name']}'>
                        <h3>{$product['name']}</h3>
                        <p>\${$product['price']}</p>
                    </div>";
                }
            ?>
        </div>
    </section>
    
    <footer>
        <p>&copy; 2024 FlowerShop. All Rights Reserved.</p>
    </footer>
</body>
</html>
