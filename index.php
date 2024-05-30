<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Description on Ishraque Ahmed">
    <meta name="keyword" content="web, development, Ishraque">
    <meta name="author" content="Ishraque Ahmed">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="http://localhost/ishraq/images/Ish.jpeg" type="image/x-icon">
    <title>Ishraque</title>
</head>

<body>

    <?php
    // Navbar
    require 'partials/_navbar.php';
    echo '<br><br>';

    // Carousel
    require 'partials/_carousel.php';
    ?>

    <!-- Container -->
    <div class="container-fluid">

        <?php
        // About
        require 'partials/_about.php';
        echo '<hr>';

        // Achievements
        require 'partials/_achievements.php';
        ?>


        <div class="row justify-content-evenly bg-dark text-light bg-gradient pt-3 pb-3" id="contact">
            <?php
            // Contact
            require 'partials/_contact.php';

            // Address
            require 'partials/_address.php';

            ?>
        </div>
    </div>

    <!-- Footer -->
    <?php
    require 'partials/_footer.php';
    ?>
</body>




<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>