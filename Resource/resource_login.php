<html lang="ca">
    <head>
        <title>LogIn - MT Games</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
           <?php require __DIR__ . '/../controller/menu_superior.php'; ?>
        </header>
        <div class="container">
            <?php require __DIR__ . '/../controller/login.php'; ?>
        </div>
        <div style="clear: both;"></div>
        <footer>
            <?php require __DIR__ . '/../view/footer.php'; ?>
        </footer>
    </body>
</html>