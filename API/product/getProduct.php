<?php
    require __DIR__ . '/../../MODELS/product.php';

    $parts = explode("/", $_SERVER["REQUEST_URI"]);

    $product = new Product();

    $result = $product->getProduct($id);

    echo json_encode($result);