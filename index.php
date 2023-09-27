<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>Sistema de Gestion - BRAND NAME</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet/less" type="text/css" href="css/styles.less" />
</head>
<body>

<main class="container">
    <section class="row vh-100 align-items-center justify-content-center" id="form">
        <article class="col-12 col-md-6 p-5 login">
            <img src="img/logo-128.png" alt="LOGO" title="LOGO" class="img-fluid d-block mx-auto">

            <form method="POST" class="row flex-column justify-content-center align-items-center">
                <article class="form my-4">
                    <input type="text" id="username" name="username" class="form__input" autocomplete="off" placeholder=" ">
                    <label for="username" class="form__label">Usuario</label>
                </article>
                <article class="form mb-4">
                    <input type="password" id="password" name="password" class="form__input" autocomplete="off" placeholder=" ">
                    <label for="password" class="form__label">Contraseña</label>
                </article>
                <button type="submit" class="btn btn-send">Ingresar</button>
            </form>
        </article>
    </section>
</main>

<!-- GENERAL -->
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/cdn.jsdelivr.net_npm_less"></script>
<script src="js/all.min.js"></script>
</body>
</html>
