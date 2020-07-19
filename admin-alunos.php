<?php
session_start();
if ($_SESSION['usuarioNome'] == '') {
    header("Location: admin-error.php");
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Agência Grudigital">
    <title>Library Reservation</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container">
    <div class="py-5 text-center logotipo">
        <img class="d-block mx-auto mb-4" src="img/logo.png" alt="">
        <div class="textos-topo">
            <hr class="mb-4">
            <h2>Library Reservation</h2>
            <p class="lead">Please, submit your booking request filling out the form below:</p>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Management Panel - Welcome <?php echo "$_SESSION[usuarioNome]" ?> - <a
                        href="functions/sair.php">Logout</a></h4>
            <hr class="mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <a href="admin.php">Today´s reservation</a>
                    </div>
                    <div class="col-sm">
                        <a href="admin-historico.php">Reservation history</a>
                    </div>
                    <div class="col-sm">
                        <a href="admin-alunos.php">Students</a>
                    </div>
                    <div class="col-sm">
                        <a href="admin-administradores.php">Administrators</a>
                    </div>
                </div>
            </div>

            <div class="container bloco-botoes">
                <div class="row">
                    <div class="col">
                        <a href="functions/exportar_alunos.php"><button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Export data
                            </button></a>
                    </div>
                    <div class="col"><a href="admin-alunos-adicionar.php">
                            <button class="btn btn-secondary btn-lg btn-block" name="submit" type="submit">Add</button>
                        </a></div>
                </div>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Conduct Manual</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>

                <?php
                require("functions/conn.php");


                $sql = "select * FROM usuarios";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<th scope='row'>$row[id]</th>";
                    echo "<td>$row[nome]</td>";
                    echo "<td>$row[sobrenome]</td>";
                    if ($row['aceite'] == '1') {
                        echo "<td><a href='functions/mudarstatusaluno.php?id=$row[id]'><button type='button' class='btn btn-success'>Signed</button></a></td>";
                    } else {
                        echo "<td><a href='functions/mudarstatusaluno2.php?id=$row[id]'><button type='button' class='btn btn-danger'>Didn´t Sign</button></a></td>";
                    }
                    echo "<td><a href='functions/alunos-excluir.php?id=$row[id]'><button class='btn btn-danger btn-lg btn-block botao-excluir' >X</button></a></td>";
                    echo "</tr>";

                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
    <section class="rodape-reservas">
        <p class="texto-rodape">&copy; 2020 Kunsthistorische Institut in Florenz</p>
    </section>o
    
</div>
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/form-validation.js"></script>
</body>

