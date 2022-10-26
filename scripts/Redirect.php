<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <?php
    session_start();
    $Usuario = $_POST['cpf'];
    $Senha = $_POST['nascimento'];

    function logar($Usuario, $Senha)
    {
        include "config.php";
        $sql = "SELECT * FROM usuarios WHERE cpf='$Usuario' and nascimento='$Senha' and cargo='admin'";
        $query = $mysqli->query($sql);
        $total = mysqli_num_rows($query);

        return $total;
    }
    if(logar($Usuario, $Senha) == 1){

        header("location: ../admin/grafico.php");

    }else{
        header("location: ../client/treino.php");
    }


        ?>
        <script language='javascript'>
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Você não posssui cadastro!'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = "../Login.php";
                }
            })
        </script>


    <?php



    ?>


</body>

</html>