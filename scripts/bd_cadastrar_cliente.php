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
include("conexao.php");
session_start();
//Todos os codigos comentado pode só tirar depois eh nozes, mas deixa comentado pra realizar testes rapidos

// Recebe dados do forms
$nome           = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$nascimento     = mysqli_real_escape_string($conexao, trim($_POST['nascimento']));
$celular        = mysqli_real_escape_string($conexao, trim($_POST['celular']));
$estado         = mysqli_real_escape_string($conexao, trim($_POST['estado']));
$cidade         = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$bairro         = mysqli_real_escape_string($conexao, trim($_POST['bairro']));
$cargo          = mysqli_real_escape_string($conexao, trim($_POST['cargo']));
$email          = mysqli_real_escape_string($conexao, trim($_POST['email']));
$cep            = mysqli_real_escape_string($conexao, trim($_POST['cep']));
$cpf            = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$rua            = mysqli_real_escape_string($conexao, trim($_POST['rua']));
$sangue         = mysqli_real_escape_string($conexao, trim($_POST['sangue']));
$descricao         = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
$treino         = mysqli_real_escape_string($conexao, trim($_POST['treino']));


// Funções
// function verificarCampo($campos)
// {
//     foreach ($campos as $campo) {
//         if (empty($campo)) {
//             return true;
//         }
//     }

//     return false;
// }


// function validarCPF($cpf)
// {

//     // Extrai somente os números
//     $cpf = preg_replace('/[^0-9]/', "", $cpf);


//     // Verifica se foi informado onze dígitos e se foi informada uma sequência de dígitos repetidos. Ex: 111.111.111-11
//     if (strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)) {
//         return false;
//     }


//     // Faz o calculo para validar o CPF
//     $number_quantity_to_loop = [9, 10];

//     foreach ($number_quantity_to_loop as $item) {

//         $sum = 0;
//         $number_to_multiplicate = $item + 1;

//         for ($index = 0; $index < $item; $index++) {

//             $sum += $cpf[$index] * ($number_to_multiplicate--);
//         }

//         $result = (($sum * 10) % 11);

//         if ($cpf[$item] != $result) {
//             return false;
//         }
//     }

//     return true;
// }


//Verifica se todos os campos foram preenchidos
// $campos = array($nome, $email, $celular, $nascimento, $cep, $estado, $cidade, $bairro, $cpf, $rua, $sangue, $cargo);
// if (verificarCampo($campos)) {
//     $_SESSION['preencha_campo'] = true;
//     header('Location: /cadastro_pessoa.php');
//     exit;
// }


//Validar email
// if (!filter_var($email, FILTER_VALIDATE_EMAIL) or !preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)) {
//     $_SESSION['email_invalido'] = true;
//     header('Location: /cadastro_pessoa.php');
//     exit;
// }


//Validar nome
// if (!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ' ]{3,}$/", $nome)) {
//     $_SESSION['nome_invalido'] = true;
//     header('Location: /cadastro_pessoa.php');
//     exit;
// }


//Validar CEP
// if (!preg_match('/^\d{5}-\d{3}$/', $cep)) {
//     $_SESSION['cep_invalido'] = true;
//     header('Location: /cadastro_pessoa.php');
//     exit;
// }


//Validar celular
// if (!preg_match('/^\([1-9]{2}\)\s9\d{4}-\d{4}$/', $celular)) {
//     $_SESSION['celular_invalido'] = true;
//     header('Location: /cadastro_pessoa.php');
//     exit;
// }


//Validar DDD
// $ddds = [11, 12, 13, 14, 15, 16, 17, 18, 19, 21, 22, 24, 27, 28, 31, 32, 33, 34, 35, 37, 38, 41, 42, 43, 44, 45, 46, 47, 48, 49, 51, 53, 54, 55, 61, 62, 64, 65, 66, 67, 68, 69, 71, 73, 74, 75, 77, 79, 81, 86, 87, 89, 91, 92, 93, 94, 95, 96, 97, 98, 99];

// $ddd =  $celular[1] . $celular[2];
// if (!in_array($ddd, $ddds)) {
//     $_SESSION['ddd_invalido'] = true;
//     header('Location: /cadastro_pessoa.php');
//     exit;
// }


//Validar CPF
// if (!validarCPF($cpf)) {
//     $_SESSION['cpf_invalido'] = true;
//     header('Location: /cadastro_pessoa.php');
//     exit;
// }


//Validar estado
// if (!preg_match("/^[A-Z]*$/", $estado) or strlen($estado) != 2) {
//     $_SESSION['estado_invalido'] = true;
//     header('Location: /cadastro_pessoa.php');
//     exit;
// }


//Validar cidade
// if (!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ' ]{3,}$/", $cidade)) {
//     $_SESSION['cidade_invalido'] = true;
//     header('Location: /cadastro_pessoa.php');
//     exit;
// }


//Validar bairro
// if (!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ' ]{3,}$/", $bairro)) {
//     $_SESSION['bairro_invalido'] = true;
//     header('Location: /cadastro_pessoa.php');
//     exit;
// }


//Validar rua
// if (!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ' ]{3,}$/", $rua)) {
//     $_SESSION['rua_invalido'] = true;
//     header('Location: /cadastro_pessoa.php');
//     exit;
// }


//Verifica se já existe email cadastrado
// $query_usuarios = mysqli_query($conexao, "SELECT count(*) as total from usuarios where email = '$email'");
// $row_usuarios = mysqli_fetch_assoc($query_usuarios);
// if ($row_usuarios['total'] == 1) {
//     $_SESSION['email_existe'] = true;
//     header('Location: /cadastro_pessoa.php');
//     exit;
// }


//Verifica se já existe CPF cadastrado
// $cpf = preg_replace('/[^0-9]/', "", $cpf);

// $query_usuarios = mysqli_query($conexao, "SELECT count(*) as total from usuarios where cpf = '$cpf'");
// $row_usuarios = mysqli_fetch_assoc($query_usuarios);
// if ($row_usuarios['total'] == 1) {
//     $_SESSION['cpf_existe'] = true;
//     header('Location: /cadastro_pessoa.php');
//     exit;
// }


$arquivo = $_FILES['imagem'];

$arquivoNovo = explode(".", $arquivo['name']);

if ($arquivoNovo[sizeof($arquivoNovo) - 1] == 'xlsb' and $arquivoNovo[sizeof($arquivoNovo) - 1] == 'xlsx' and $arquivoNovo[sizeof($arquivoNovo) - 1] == 'xlsm') {

?>
    <script language='javascript'>
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Você tentou enviar um arquivo invalido !'
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location.href = "../admin/cadastro_pessoa.php";
            }
        })
    </script>

    <?php
    die("");
} else {
// src="'uploads/' . $arquivo['imagem']"

    //condição de erro
    move_uploaded_file($arquivo['tmp_name'], 'uploads/' . $arquivo['name']);

    $imagem = $arquivo['name'];
    //Cadastra novo usuario

    //Extrai apenas os números
    $cep = preg_replace('/[^0-9]/', "", $cep);
    $celular = preg_replace('/[^0-9]/', "", $celular);
    if (mysqli_query($conexao, "INSERT INTO usuarios VALUES ('$cpf', '$nome', '$nascimento', '$cargo', 'teste', '$sangue', '$celular', '$email', '$cep', '$estado, $cidade, $bairro, $rua', '$treino', '$descricao', '1', NOW(),'$imagem')") === TRUE) {
        $_SESSION['cliente_cadastrado'] = true;
    ?>
        <script language='javascript'>
            Swal.fire({
                icon: 'success',
                title: 'INSERIDO'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = "../admin/cadastro_pessoa.php";
                }
            })
        </script>

<?php
    }

    mysqli_close($conexao);
}
?>
</body>

</html>