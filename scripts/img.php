<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>

<body>


    <?php


    $usuarios_cpf = $_POST['cpf'];
    $tipoTreino = $_POST['tipoTreino'];
    $categoriaTreino = $_POST['Categoria'];
    $nomeTreino =  $_POST['Treino'];
    $repeticao = $_POST['repeticao'];
    $descricao = $_POST['Descricao'];
    $Serie = $_POST['Serie'];


    if (isset($_POST['Treino'])) {

        function grupo($nomeTreino)
        {
            include "config.php";
            $sql = "SELECT nomeTreino FROM treinos WHERE nomeTreino ='$nomeTreino' ";
            $query = $mysqli->query($sql);
            $total = mysqli_num_rows($query);

            return $total;
        }

        if (grupo($nomeTreino) == 0) {
            //echo "NÃO tem no banco";
            //formulario foi enviado
            $arquivo = $_FILES['imagem'];

            $arquivoNovo = explode(".", $arquivo['name']);

            if ($arquivoNovo[sizeof($arquivoNovo) - 1] == 'xlsb' and $arquivoNovo[sizeof($arquivoNovo) - 1] == 'xlsx' and $arquivoNovo[sizeof($arquivoNovo) - 1] == 'xlsm') {

    ?>
                <script language='javascript'>
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Você tentou enviar um arquivo !'
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location.href = "../table.php";
                        }
                    })
                </script>

            <?php
                die("");
            } else {

                //condição de erro
                move_uploaded_file($arquivo['tmp_name'], 'uploads/' . $arquivo['name']);
                include "config.php";
                $variavel = "s";


                $imagem = $arquivo['name'];

                $sql = "INSERT INTO treinos(usuarios_cpf,tipoTreino,categoriaTreino,nomeTreino,imagem,serie,repeticao,descricao,data) VALUES('$usuarios_cpf','$tipoTreino','$categoriaTreino','$nomeTreino','$imagem','$Serie','$repeticao','$descricao',NOW())";
                $query = mysqli_query($mysqli, $sql);
            ?>
                <script language='javascript'>
                    Swal.fire({
                        icon: 'success',
                        title: 'INSERIDO'
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location.href = "../table.php";
                        }
                    })
                </script>

            <?php }
        } else {
            $arquivo = $_FILES['imagem'];

            $arquivoNovo = explode(".", $arquivo['name']);

            if ($arquivoNovo[sizeof($arquivoNovo) - 1] == 'xlsb' and $arquivoNovo[sizeof($arquivoNovo) - 1] == 'xlsx' and $arquivoNovo[sizeof($arquivoNovo) - 1] == 'xlsm') {

            ?>
                <script language='javascript'>
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Você tentou enviar um arquivo inapropriado!'
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location.href = "../table.php";
                        }
                    })
                </script>

            <?php
                die("");
            } else {
                //condição de erro
                //condição de erro
                move_uploaded_file($arquivo['tmp_name'], 'uploads/' . $arquivo['name']);
                include "config.php";
                $variavel = "s";


                $imagem = $arquivo['name'];

                $sql = "UPDATE treinos SET usuarios_cpf ='$usuarios_cpf', tipoTreino ='$tipoTreino',categoriaTreino ='$categoriaTreino',nomeTreino ='$nomeTreino',imagem ='$imagem', serie ='$Serie', repeticao ='$repeticao', descricao ='$descricao',data = NOW() WHERE nomeTreino IN ('$nomeTreino')";
                $query = mysqli_query($mysqli, $sql);
            ?>
                <script language='javascript'>
                    Swal.fire({
                        icon: 'success',
                        title: 'ATUALIZADO NO SISTEMA'
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location.href = "../table.php";
                        }
                    })
                </script>

        <?php }
        }
    } else {
        ?>

        <script language='javascript'>
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Tamanho do arquivo excede o permitido pelo sistema!'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = "../table.php";
                }
            })
        </script>


    <?php } ?>

</body>

</html>
<?php
