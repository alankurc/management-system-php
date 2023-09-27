<?php
include 'includes/connect.php';

$db = new dbObj();
$connString = $db->getConnstring();

$sql_query = "SELECT * FROM users";
$resultset = mysqli_query($connString, $sql_query) or die("database error:" . mysqli_error($conn));
$users = array();

while ($rows = mysqli_fetch_assoc($resultset)) {
    $users[] = $rows;
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>Users | BRAND NAME</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet/less" type="text/css" href="css/styles.less"/>
</head>
<body>
<?php include 'includes/header.php'?>

<section class="container">
    <div class="row">
        <div class="col-12 text-center pt-5 pb-3">
            <h1>Users</h1>
        </div>
        <div class="col-12">
            <div class="table-responsive shadow p-4 bg-white">
                <table class="table table-striped table-hover border border-1 align-middle mb-0">
                    <thead class="table-dark border border-1 border-black">
                    <tr>
                        <th width="10%" scope="col" class="font-weight-bold">Nombre</th>
                        <th width="10%" scope="col" class="font-weight-bold">Apellido</th>
                        <th width="15%" scope="col" class="font-weight-bold">Email</th>
                        <th width="10%" scope="col" class="font-weight-bold">Username</th>
                        <th width="10%" scope="col" class="font-weight-bold">Permiso</th>
                        <th width="45%" scope="col" class="font-weight-bold text-center" colspan="2">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $row): ?>
                        <tr>
                            <td width="10%"><?= $row['name']; ?></td>
                            <td width="10%"><?= $row['last_name']; ?></td>
                            <td width="15%"><?= $row['email']; ?></td>
                            <td width="10%"><?= $row['username']; ?></td>
                            <td width="10%"><?= ($row['role'] === 1 ? 'Lector' : 'Administrador') ?></td>
                            <td width="45%">
                                <article class="d-flex align-items-center justify-content-evenly">
                                    <form method="POST" action="change-role.php" class="d-flex justify-content-start">
                                        <input type="hidden" name="id" id="id" value="<?= $row['id']; ?>">
                                        <input type="hidden" name="role" id="role" value="<?php echo ($row['role'] === 1 ? 1 : 2) ?>">
                                        <button type="submit" class="btn btn-outline-success">
                                            Convertir en <?php echo ($row['role'] === 1 ? 'Administrador' : 'Lector') ?>
                                        </button>
                                    </form>
                                    <a href="change-password.php?id=<?= $row['id']; ?>" class="btn btn-outline-secondary">Cambiar contraseña</a>
                                    <a href="deleter-user.php?id=<?= $row['id']; ?>" class="btn btn-outline-danger">Eliminar</a>
                                </article>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'?>

<!-- GENERAL -->
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/cdn.jsdelivr.net_npm_less"></script>
<script src="js/all.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
