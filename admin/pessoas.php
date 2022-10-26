<?php include "../TCC/Estrutura/Head.php"; ?>
<?php include "../TCC/Estrutura/Navbar.php"; ?>
<div id="espaco">


</div>
<div class="container-fluid">
    <div class="row">

        <section class="content">
            <div class="accordion" id="accordionExample">
                <center>
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="headingOne">
                            <button id="colapse" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                            <img src="../TCC\assets\img\perfil.png" alt="" height="30"> 
                                <font color="#000000"> ACOMPANHAMENTO</font>

                            </button>
                        </h2>

                        <div  style="overflow-x: scroll;" id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table" id="table">
                                <thead>
                                        <tr>
                                            <th style="text-align: center">ANO</th>
                                            <th style="text-align: center">MES</th>
                                            <th style="text-align: center">DATA</th>
                                            <th style="text-align: center">GRUPO</th>
                                            <th style="text-align: center">NOME</th>
                                            <th style="text-align: center">EDITAR</th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">ANO</th>
                                            <th style="text-align: center">MES</th>
                                            <th style="text-align: center">DATA</th>
                                            <th style="text-align: center">GRUPO</th>
                                            <th style="text-align: center">NOME</th>
                                            <th style="text-align: center">EDITAR</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php

include "../scripts\config.php";
$sql = "SELECT * FROM treinos";
$query = $mysqli->query($sql);
while ($dados = $query->fetch_array()) {
                                        ?>


                                            <tr>

                                                <td style="text-align: center">
                                                    <?php echo $dados['ANO']; ?>
                                                </td>

                                                <td style="text-align: center">
                                                    <?php echo $dados['MES']; ?>
                                                </td>

                                                <td style="text-align: center">
                                                    <?php echo $dados['data']; ?>
                                                </td>
                                                <td style="text-align: center">
                                                    <?php echo $dados['operacao']; ?>
                                                </td>
                                                <td style="text-align: center">
                                                    <?php echo $dados['nome']; ?>
                                                </td>
                                                <td style="text-align: center">
                                                    <center>
                                                    <a id='mis' href=''> <button type='button' class='btn btn-secondary'><i class='fas fa-file-download'></i></button> </a> <a id='mis' href=''> <button type='button' class='btn btn-danger'><i class='fa-solid fa-trash-can'></i></button> </a>
                                                    </center>
                                                </td>









                                            </tr>
                                        <?php } ?>
                                    </tbody>
 
                                  

                                </table>
                            </div>
                        </div>
                    </div>


            </div>

        </section>
    </div>
</div>
<?php include "../TCC/Estrutura/Footer.php"; ?>