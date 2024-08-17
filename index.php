<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BetterGoogle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/img/search.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container center-div">
        <h1 class="site-title font" id="titleh1">Better Google</h1>
        <br>

        <?php

            if (isset($_POST["submit"])) {
                $search = $_POST["search"];
                $search = preg_replace('/\s+/', '+', $search);
                $url = "https://www.google.com/search?q=" . $search;
                header("Location: $url");
            }

        ?>

        <form action="" method="post" class="">
            <input type="text" name="search" id="search" placeholder="Search" class="fancy-input">
            <button type="submit" class="invisible" name="submit"></button>
        </form>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>