<?php

    $title = 'Processing - Stuliday';
    require 'includes/header.php';

    if ('POST' != $_SERVER['REQUEST_METHOD']) {
        echo "<div class='alert alert-danger'> La page à laquelle vous tentez d'accéder n'existe pas </div>";
    } elseif (isset($_POST['ad_submit'])) {
        if (!empty($_POST['ad_name']) && !empty($_POST['ad_description']) && !empty($_POST['ad_price']) && !empty($_POST['ad_address']) && !empty($_POST['ad_city']) && !empty($_POST['author'])) {
            $title = strip_tags($_POST['ad_name']);
            $content = strip_tags($_POST['ad_description']);
            $price = intval(strip_tags($_POST['ad_price']));
            $address = strip_tags($_POST['ad_address']);
            $city = strip_tags($_POST['ad_city']);
            $author = $_SESSION['id'];

            ajoutProduits($title, $content, $address, $city, $price, $author);
        }
    }
    require 'includes/footer.php';
