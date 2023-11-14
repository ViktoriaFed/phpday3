<?php
    require_once './connecting_db.php';
    $sql = "SELECT * FROM dishes";
    $result = mysqli_query($conn, $sql);
    $cards = "";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $cards .= "
        <div class='p-2 text-center fs-5'>
                <div class='card p-2'>
                <img src='$row[picture]' class='card-img-top' style='height: 15rem; object-fit: cover;'>
                <div class='card-body'>
                <h5 class='card-title fs-4'>$row[name]</h5>
                <p class='card-text'>$$row[price]</p>
                <a href='details.php?id={$row['dish_id']}' class='btn fs-5' name='submit' method='GET'>Details</a>
                </div>
                </div>
        </div>";
    }
} else {
    $cards = "No data found";
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Challenge</title>
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
    <div class="container fs-5">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-xs-1 pt-5 pb-5">
                <?= $cards ?>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>