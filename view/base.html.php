<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>
    <header>
        <div>
            <a href="/?c=home"><h1 id="homeTittle">Forum</h1></a>
        </div>

        <div id="header_link_container">
            <div>
                <a href="/?c=user&a=contact">Contact</a>
            </div>

            <div>
                <a href="/?c=user&a=login">Login</a><span>/</span><a href="/?c=user&a=register">Inscription</a>
            </div>
        </div>

    </header>
    <main><?= $html ?></main>


    <script src="/build/js/app-bundle.js"></script>
</body>

</html>
