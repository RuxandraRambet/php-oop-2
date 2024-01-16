<?php
require_once __DIR__ . '/Database/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Pet Shop</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <!-- TODO - FIX STYLE -->

    <div class="container">
        <h1 class="text-center my-5">Prodotti per animali</h1>
        <div class="row">
            <?php foreach ($products as $product) : ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $product->image ?>" alt="<?php echo $product->title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->title; ?></h5>
                            <h6 class="card-subtitle my-2"><?php echo " Prezzo: " . $product->price; ?></h6>
                            <h6 class="card-text"><?php echo " Categoria: " . $product->category->getProductCategory(); ?></h6>
                            <h6 class="card-text"><?php echo isset($product->size) ? "Misure: " . $product->size : ""; ?></h6>
                            <h6 class="card-text"><?php echo isset($product->color) ?  "Colore: " . $product->color : ""; ?></h6>
                        </div>
                    </div>

            <?php endforeach; ?>
        </div>
    </div>



</body>

</html>