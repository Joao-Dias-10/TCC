    <?php include "../TCC/Estrutura/Head.php"; ?>
    <?php include "../TCC/Estrutura/Navbar.php"; ?>
    <div id="espaco">


    </div>
    <div class="container-fluid">
        <div class="caixa">
            <div class="caixa2">
                <form action="../scripts\lancado.php" method="post" enctype="multipart/form-data">

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="Treino" class="form-label">Treino</label>
                            <input class="form-control" id="Treino" name="Treino" required />

                        </div>
                        <div class="col-md-4">
                            <label for="Serie" class="form-label">Série</label>
                            <input class="form-control" id="Serie" name="Serie" required />

                        </div>
                        <div class="col-md-4">
                            <label for="repeticao" class="form-label">Repetição</label>
                            <input class="form-control" id="repeticao" name="repeticao" required />

                        </div>
                    </div>

                    <div class="row g-3">

                        <div class="col-md-4">
                            <label for="tipoTreino" class="form-label">Tipo Treino</label>
                            <input class="form-control" id="tipoTreino" name="tipoTreino" required />
                        </div>
                        <div class="col-md-4">
                            <label for="Categoria" class="form-label">Categoria</label>
                            <input class="form-control" id="Categoria" name="Categoria" required />

                        </div>
                        <div class="col-md-4">
                            <label for="Descricao" class="form-label">Descrição</label>
                            <input class="form-control" id="Descricao" name="Descricao" required />
                        </div>
                    </div>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label for="cpf" class="form-label">Aluno</label>
                            <input class="form-control" id="cpf" name="cpf" required />
                        </div>

                        <div class="col-md-6">
                            <label for="imagem" class="form-label required ">ARQUIVO MÍDIA</label>
                            <input type="file" class="form-control" name="imagem" id="imagem" required />

                        </div>

                    </div>

                    <div id="espaco" class="d-grid gap-2 col-6 mx-auto">

                        <button id="submit" type="submit" class="btn"><b>ATUALIZAR</b></button>

                    </div>
                    <label></label>

                </form>
            </div>
        </div>
    </div>


    <?php include "../TCC/Estrutura/Footer.php"; ?>