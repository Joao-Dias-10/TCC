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
    session_start();
    include('conexao.php');

    // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
    if (!empty($_POST) and (empty($_POST['cpf']) or empty($_POST['nascimento']))) {
        header('Location: login.php');
        exit();
    }

    $cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
    $nascimento = mysqli_real_escape_string($conexao, $_POST['nascimento']);


    // Consulta se a conta existe
    $query_usuarios  = mysqli_query($conexao, "SELECT * from usuarios where cpf = '$cpf' and nascimento = '$nascimento'");
    if (mysqli_num_rows($query_usuarios) == 1) {
        $row_usuarios  = mysqli_fetch_assoc($query_usuarios);

        // Verifica se o usuário foi desativado
        if ($row_usuarios['ativo'] == 0) {
            $_SESSION['usuario_desativado'] = true;
            header('Location: ../login.php');
            exit();
        } else {
            $_SESSION['cargo'] = $row_usuarios['cargo'];
            $_SESSION['cpf'] = $row_usuarios['cpf'];
            //Verifica quem esta logado
            if ($row_usuarios['cargo'] == "admin") {
                header("location: ../admin/grafico.php");
            } elseif ($row_usuarios['cargo'] == "personal") {
                header("location: ../admin/grafico.php");
            } else {
                //esse aqui o pai lembra
                header('Location: ../client/treino.php');
            }
        }
    } else {
    ?>

        <script language='javascript'>
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Semha errada!'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = "../login.php";
                }else{
                    window.location.href = "../login.php";
                }
            })
        </script>
    <?php } ?>

</body>

</html>