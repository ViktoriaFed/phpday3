<?php
    require_once './connecting_db.php';

    $details = '';

    if (isset ($_GET['id'])) {
        $id = $_GET['id'];
        $mysql = "SELECT * FROM dishes WHERE dish_id = $id";
        $result = mysqli_query($conn, $mysql);
    };

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $details = "
            <div class='card' style = 'width: 25rem;'>
                <img src='$row[picture]' class='card-img-top' style='height: 15rem; object-fit:cover;'>
                <div class='card-body'>
                    <h5 class='card-title fs-4'>$row[name]</h5>
                    <p class='card-text fst-italic fs-5'>$row[description]</p>
                    <p class='card-text fs-5'>$$row[price]</p>
                    <a href='#' class='btn fs-5'>Add to cart</a>
                </div>
            </div>";
    } else {
        $details = "Dish not found";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Details</title>
    <style>
        body {
            background-color: #bbccbb;
        }
        .btn {
            background-color: #88db88;
        }
    </style>
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100 fs-5">
        <div class="text-center">
            <?= $details ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>