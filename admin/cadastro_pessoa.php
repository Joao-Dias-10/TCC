<?php include "..\TCC\Estrutura\Head.php"; ?>
<?php include "..\TCC\Estrutura\Navbar.php"; ?>
<?php include "..\scripts\config.php"; ?>
<div id="espaco">


</div>
<div class="container-fluid">
    <div class="caixa">
        <div class="caixa2">
            <form action="..\scripts\bd_cadastrar_cliente.php" method="post" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="validationDefault01" class="form-label">Cargo</label>
                        <select class="form-control" id="cargo" name="cargo" required>
                            <option value="admin">ADIMINISTRADOR</option>
                            <option value="personal">PERSONAL</option>
                            <option value="aluno">ALUNO</option>

                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="repeticao" class="form-label">CPF</label>
                        <input class="form-control" id="cpf" name="cpf" required />
                    </div>

                    <div class="col-md-3">
                        <label for="Serie" class="form-label">Nome</label>
                        <input class="form-control" id="nome" name="nome" required />

                    </div>

                    <div class="col-md-3">
                        <label for="Serie" class="form-label">Nascimento</label>
                        <input type="date" class="form-control" id="nascimento" name="nascimento" required />

                    </div>

                </div>

                <div class="row g-3">

                <div class="col-md-2">
                        <label for="validationDefault01" class="form-label">Tipo de sangue</label>
                        <select class="form-control" id="cargo" name="sangue" required>
                            <option value="a+">A+</option>
                            <option value="b+">B+</option>
                            <option value="ab+">AB+</option>
                            <option value="ao+">O+</option>
                            <option value="a-">A-</option>
                            <option value="b-">B-</option>
                            <option value="ab-">AB-</option>
                            <option value="o-">O-</option>
                            <option value="nao_sei">Não sei</option>
                            

                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="Categoria" class="form-label">E-mail</label>
                        <input class="form-control" id="email" name="email" required />

                    </div>
                    <div class="col-md-2">
                        <label for="Descricao" class="form-label">Celular</label>
                        <input class="form-control" id="phone_with_ddd" name="celular" required />
                    </div>
                    <div class="col-md-2">
                        <label for="validationDefault01" class="form-label">TTIPO DO TREINO</label>
                        <select class="form-control" id="cargo" name="treino" required>
                            <option value="1">Padrão</option>
                            <option value="2">Personalizado</option>
                        </select>    
                    </div>
                    <div class="col-md-4">
                        <label for="Descricao" class="form-label">Deascrição</label>
                        <input class="form-control" id="phone_with_ddd" name="descricao" required />
                    </div>

                    
                </div>

                <div class="row g-3">

                    <div class="col-md-2">
                        <label for="cpf" class="form-label">CEP</label>
                        <input class="form-control" onblur="pesquisacep(this.value);" id="cep" name="cep" required />
                        <a href="#" onclick="javascript:abrirEmPopup('https://buscacepinter.correios.com.br/app/localidade_logradouro/index.php', 1025, 550);">Não sei meu CEP</a>
                    </div>

                    <div class="col-md-2">
                        <label for="cpf" class="form-label">Estado</label>
                        <input class="form-control" id="uf" name="estado" readonly required />
                    </div>

                    <div class="col-md-2">
                        <label for="cpf" class="form-label">Cidade</label>
                        <input class="form-control" id="cidade" name="cidade" readonly required />
                    </div>

                    
                    <div class="col-md-2">
                        <label for="cpf" class="form-label">Bairro</label>
                        <input class="form-control" id="bairro" name="bairro" readonly required />
                    </div>

                    <div class="col-md-4">
                        <label for="cpf" class="form-label">Rua</label>
                        <input class="form-control" id="rua" name="rua" readonly required />
                    </div>

                </div>
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="imagem" class="form-label required ">ARQUIVO MÍDIA</label>
                        <input type="file" class="form-control" name="imagem" id="imagem" required />

                    </div>
                </div>

                <div id="espaco" class="d-grid gap-2 col-6 mx-auto">
                    <button id="submit" type="submit" class="btn"><b>CADASTRAR</b></button>
                </div>
                <label></label>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="../TCC/assets/js/via_vep.js"></script>
<script src="../TCC/assets/js/mask.js"></script>
<script src="../TCC/assets/js/abrirEmPopup.js"></script>

<?php include "../TCC/Estrutura/Footer.php"; ?>