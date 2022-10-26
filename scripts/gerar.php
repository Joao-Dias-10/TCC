<?php
    if (isset($_GET['busca'])) {
        $pessoa = $_GET['busca'];
        $sql = " SELECT * FROM usuarios WHERE  nome LIKE '%" . $pessoa . "%' ";
    }else{
        $sql = "SELECT * FROM usuarios";
    }

    ?>