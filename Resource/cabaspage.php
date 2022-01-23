<html lang = "ca">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
        <title>MT Games</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    </head>
    <body>
        <header>
            <?php require __DIR__ . '/../controller/menu_superior.php'; ?>
        </header>
        <div class="container" style="">
            <?php
            $pagCabas=true;
            require __DIR__ . '/../controller/cabaspage.php'; ?>
        </div>
        <div style="clear: both;"></div>
        <footer>
            <?php require __DIR__ . '/../view/footer.php'; ?>
        </footer>
    </body>
</html>


