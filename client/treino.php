<?php include "../TCC\Estrutura\Head.php"; ?>
<?php include "../TCC\Estrutura\Navbar_client.php";?>
<div id="espaco">


</div>
<div class="container-fluid">
    <div class="row">
        <section class="content">
            <?php include "../scripts/config.php";
            $sql = "SELECT * FROM treinos where usuarios_cpf = '222.222.222-22'";
            $query = $mysqli->query($sql);
            while ($dados = $query->fetch_array()) { ?>
                <div class="accordion-item" style="overflow-x: scroll;">
                    <h2 class="accordion-header" id="<?php echo 'heading' . $dados['id']; ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo '#collapse' . $dados['id'];; ?>" aria-expanded="false" aria-controls="<?php echo '#collapse' . $dados['id'];; ?>">
                            <img src="../TCC\assets\img\lista.png" alt="" height="30"> <?php echo $dados['nomeTreino']; ?>
                        </button>
                    </h2>
                    <div id="<?php echo 'collapse' . $dados['id']; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo 'heading' . $dados['id'];; ?>" data-bs-parent="#accordionExample">
                        <center>
                            <div class="accordion-body">
                                <img height='150' src='../scripts/uploads/<?php echo $dados['imagem']; ?>'>
                            </div>
                        </center>
                    </div>
                </div>
    </div>
    <div id="espaco">
    </div>
<?php } ?>

</section>
</div>
</div>

<?php include "../TCC\Estrutura\Footer.php"; ?>