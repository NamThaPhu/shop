<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./icon/shop.ico" type="image/x-icon">
    <title>Danh mục | Nghị Quân Shop</title>
</head>

<body>
    <div class="app">
        <?php require "header.php"; ?>
        <div class="body">
            <div class="area" id = "products-list">
                    <?php
                    // if (isset($_GET["id"])) {
                    //     $products = new Product([]);
                    //     echo '<div class="area-title">' . (new Category([]))->select($_GET["id"])->__get("name") . '</div>';
                    //     echo '<div class="area-list">';
                    //     foreach ($products->get_by_category("block", $_GET["id"]) as $product) {
                    //         $str = '
                    //         <a class="product" href="product.php?id=' . $product->__get("id") . '">
                    //         <div class="product-image product-margin">
                    //             <img src="https://cdn.tgdd.vn/Products/Images/42/261888/realme-c35-GREEN-thumb-600x600.jpg" alt="">
                    //         </div>
                    //         <div class="product-name product-margin">
                    //             ' . $product->__get("name") . '
                    //         </div>
                    //         <div class="product-price product-margin">
                    //             ' . $product->__get("price") . '
                    //         </div>
                    //         </a>
                    //         ';
                    //         echo $str;
                    //     }
                    //     echo '</div>';
                    // }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>