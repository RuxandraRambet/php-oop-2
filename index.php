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
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- TODO - FIX STYLE -->

    <div class="container">
        <h1 class="text-center my-5">Prodotti per animali</h1>
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-3">
                    <div class="card d-flex align-items-center pt-5 mb-4">
                        <img class="img-product" src="<?php echo $product->image ?>" alt="<?php echo $product->title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->title; ?></h5>
                            <h6 class="card-subtitle my-2">Prezzo: <?php echo $product->price; ?></h6>
                            <h6 class="card-text">Categoria: <?php echo $product->category->get_name(); ?> <?php echo $product->category->get_icon(); ?></h6>
                            <h6>Tipo: <?php echo $product->type; ?></h6>
                            <h6 class="card-text"><?php echo isset($product->size) ? "Misure: " . $product->size : ""; ?></h6>
                            <h6 class="card-text"><?php echo isset($product->color) ?  "Colore: " . $product->color : ""; ?></h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>



</body>

</html>