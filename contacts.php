<?php
include 'includes/connect.php';

$db = new dbObj();
$connString = $db->getConnstring();

$sql_query = "SELECT * FROM contacts";
$resultset = mysqli_query($connString, $sql_query) or die("database error:" . mysqli_error($conn));
$contacts = array();

while ($rows = mysqli_fetch_assoc($resultset)) {
    $contacts[] = $rows;
}
if (isset($_POST["ExportType"])) {

    switch ($_POST["ExportType"]) {
        case "export-to-excel" :
            // Submission from
            $filename = $_POST["ExportType"] . ".xls";
            header("Content-Type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=\"$filename\"");
            ExportFile($contacts);
            //$_POST["ExportType"] = '';
            exit();
        default :
            die("Unknown action : " . $_POST["action"]);
            break;
    }
}

function ExportFile($records)
{
    $heading = false;
    if (!empty($records))
        foreach ($records as $row) {
            if (!$heading) {
                // display field/column names as a first row
                echo implode("\t", array_keys($row)) . "\n";
                $heading = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    exit;
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
    <title>Contacts | BRAND NAME</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet/less" type="text/css" href="css/styles.less"/>
</head>
<body>

<?php include 'includes/header.php' ?>

<main class="container">
    <section class="row">
        <div class="col-12 text-center pt-5 pb-3">
            <h1>Contacts</h1>
        </div>
        <article class="col-12">
            <div class="table-responsive shadow p-4 bg-white">
                <table class="table table-striped table-hover border border-1 mb-0">
                    <thead class="table-dark border border-1 border-black">
                    <tr>
                        <th scope="col" width="5%">#</th>
                        <th scope="col" width="10%">Nombre</th>
                        <th scope="col" width="10%">Apellido</th>
                        <th scope="col" width="17%">Email</th>
                        <th scope="col" width="50%">Consulta</th>
                        <th scope="col" width="8%">Fecha</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($contacts as $row): ?>
                        <tr>
                            <td width="5%"><?= $row ['id'] ?></td>
                            <td width="10%"><?= $row ['name'] ?></td>
                            <td width="10%"><?= $row ['last_name'] ?></td>
                            <td width="15%"><?= $row ['email'] ?></td>
                            <td width="45%"><?= $row ['message'] ?></td>
                            <?php $myDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $row ['date']); ?>
                            <td width="15%"><?= $myDateTime->format('d/m/y'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </article>
    </section>
</main>

<?php include 'includes/footer.php' ?>

<!-- GENERAL -->
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/cdn.jsdelivr.net_npm_less"></script>
<script src="js/all.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>