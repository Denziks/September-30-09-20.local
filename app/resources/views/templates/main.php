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
            <h1><a class="siteName" href="?action=index"><?php echo SITE_NAME ?></a></h1>
        </header>
        <nav>
            <a class="navigation" href="?action=index"><div class="container">Home</div></a>
            <a class="navigation" href="?action=aboutUs"><div class="container">About Us</div></a>
            <a class="navigation" href="?action=contacts"><div class="container">Contacts</div></a>
        </nav>
        <main>
            <?php include_once 'app/resources/views/pages/' .$page .'.php'?>
        </main>
    </body>
</html>