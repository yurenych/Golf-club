

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Golf-club</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

    <link rel="stylesheet" type="text/css" href="/public/src/lib/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/public/src/lib/fatNav/jquery.fatNav.min.css">
    <link rel="stylesheet" type="text/css" href="/public/src/lib/slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/public/src/lib/slick/slick/slick-theme.css"/>

    <script type="text/javascript" src="/public/src/lib/jquery/index.js" ></script>
    <script type="text/javascript" src="/public/src/lib/fatNav/jquery.fatNav.min.js" ></script>
    <script type="text/javascript" src="/public/src/js/main.js"></script>
    <script type="text/javascript" src="/public/src/lib/slick/slick/slick.min.js"></script>

    <link rel="stylesheet" href="/public/src/css/styles.css"/>
    <link rel="stylesheet" href="/public/src/css/galeria.css"/>

</head>

<body class="galeria">

    <?php include 'views/inc/header-menu.php' ?>
    <!-- end inc header menu -->

    <!-- inc navigation menu -->
    <?php include 'views/inc/navigation.php' ?>
    <!-- end inc navigation menu -->

    <form action="/login" method="POST">
        <input type="hidden" name="_token" value="<?= CSRF_TOKEN ?: '' ?>">
        <input type="text" name="login" placeholder="Login" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit">
    </form>

    <!-- inc footer -->
    <?php include 'views/inc/footer.php' ?>
    <!-- inc footer -->

</body>
</html>
