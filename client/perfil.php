<?php include "../TCC\Estrutura\Head.php"; ?>
<?php include "../TCC\Estrutura\Navbar_client.php"; ?>
<div id="espaco">
</div>

<div class="container">

    <?php include "../scripts/config.php";
    $sql = "SELECT * FROM usuarios where cpf ='222.222.222-22'";
    $query = $mysqli->query($sql);
    while ($dados = $query->fetch_array()) { ?>

        <div class="box">
            <div class="image">
                <img src="../scripts/uploads/<?php echo $dados['imagem']; ?>">
            </div>
            <div class="name_job"><?php echo $dados['nome']; ?></div>
            <div class="rating">
                <!-- <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i>
      <i class="far fa-star"></i> -->
            </div>
            <p>
                <?php if ($dados['treino'] == 1) {
                    echo "Treino padrão";
                } else {
                    echo  "Treino personalizado";
                } ?>
            </p>
            <div class="btns">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Meus Dados
                </button>



                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Informações</h5>

                            </div>
                            <div class="modal-body">
                                <!-- TABLE DO MODAL AQ=---------------------------- -->

                                <div class="container-fluid">
                                    <div class="row">

                                        <section class="content">
                                            <!-- COLOCAR TABELA DO TREINO RESPECTIVO DO ALUNO AQUI -->
                                            <table id="example" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center">exemplo1</th>
                                                        <th style="text-align: center">exemplo2</th>
                                                        <th style="text-align: center">exemplo3</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                      
                                                <td style="text-align: center">dados1</td> 
                                                <td style="text-align: center">dado1</td> 
                                                <td style="text-align: center">dado1</td> 
                                                       
                                                </tbody>
                                            </table>

                                        </section>
                                    </div>
                                </div>
                                <!-- 
        ----------------------------------------- -->

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    <?php } ?>


    </section>
</div>
</div>

<?php include "../TCC\Estrutura\Footer.php"; ?>