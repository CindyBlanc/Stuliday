<?php
require 'includes/header.php';
$title = 'Post - Stuliday';

?>

<div class="container" style="margin-top: 10vh;">
    <div class="columns is-centered">

        <div class="column is-four-fifths">
            <h3 class="title is-4 is-spaced has-text-centered">Add adverts</h3>
            <form action="process.php" method="POST">
                <div class="field">
                    <label for="InputName" class="label">Title :</label>
                    <div class="control">
                        <input class="input is-primary" type="text" name="ad_name" required>
                    </div>
                </div>

                <div class="field">
                    <label for="InputPrice" class="label">Price :</label>
                    <div class="control">
                        <input class="input is-primary" type="number" name="ad_price" required>
                    </div>
                </div>

                <div class="field">
                    <label for="InputDescription" class="label">Description :</label>
                    <div class="control">
                        <textarea class="textarea is-primary" id="InputDescription" name="ad_description"
                            required></textarea>
                    </div>
                </div>

                <div class="field">
                    <label for="InputAddress" class="label">Adress :</label>
                    <div class="control">
                        <input class="input is-primary" type="text" placeholder="Adress" name="ad_address" required>
                    </div>
                </div>
                <div class="field">
                    <label for="InputCity" class="label">City :</label>
                    <div class="control">
                        <input class="input is-primary" type="text" placeholder="City" name="ad_city" required>
                    </div>
                </div>

                <div class="field">
                    <div class="file has-name is-right is-primary">
                        <label class="file-label">
                            <input class="file-input" type="file" name="ad_images">
                            <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label">
                                    Choose a file…
                                </span>
                            </span>
                            <span class="file-name">
                                Screen Shot 2017-07-29 at 15.54.25.png
                            </span>
                        </label>
                    </div>
                </div>



                <div class="field is-grouped ">
                    <div class="control">
                        <button class="button is-primary" name="ad_submit">Post</button>
                    </div>
                    <div class="control">
                        <button class="button is-primary is-outlined" href="profil.php">Cancel</button>
                    </div>
                </div>
        </div>
    </div>
</div>


<?php
require 'includes/footer.php';

// if (!empty($images')) {​​​​​​​
//     if ($images['size'] <= 1000000) {​​​​​​​
//         $valid_ext = ['jpg', 'jpeg', 'gif', 'png'];
//         $check_ext = strtolower(substr(strrchr($images['name'], '.'), 1));
//         if (in_array($check_ext, $valid_ext)) {​​​​​​​
//             $dbname = uniqid().'_'.$images['name'];
//             $upload_dir = 'assets/uploads/ad_images';
//             $upload_name = $upload_dir.$dbname;
//             $move_result = move_uploaded_file($images['tmp_name'], $upload_name);
//             $img = $dbname;
//             echo '<div class="alert alert-success mt-2" role="alert" > You have Succesfully Upload your Image !</div>';
//         }​​​​​​​ else {​​​​​​​
//             $img = '';
//             echo '<div class="alert alert-success mt-2" role="alert" > Upload Image Fail, please check the extension / size !</div>';
//         }​​​​​​​
//     }​​​​​​​
// }​​​​​​​
// $sth->bindValue(':images', $img, PDO::PARAM_STR);
