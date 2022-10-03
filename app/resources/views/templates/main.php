<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo SITE_NAME;?></title>
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1><?php echo SITE_NAME ?></h1>
        </header>
        <nav>
            <ul>
                <li>Home</li>
                <li>About Us</li>
                <li>Contacts</li>
            </ul>
        </nav>
        <?php include_once '/app/resources/views/pages/' .$page .'.php'?>
    </body>
</html>