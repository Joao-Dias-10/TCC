{
  "data": [
                                                              
<?php
include "../scripts\config.php";
$sql = "SELECT * FROM treinos";
$query = $mysqli->query($sql);
while ($dados = $query->fetch_array()) {
?>
   {

      "name": "<?php echo "<div  style='text-align: center' class='form-check form-switch'>".$dados['nomeTreino']."</div>";?>",
      "img": "<?php echo "<img height='220' src='scripts/uploads/".$dados['imagem']."'>"?>",
      "editar": "<?php echo "<img height='30' src='scripts/uploads/delete.png'> <img height='27' src='scripts/uploads/editar.png'>"?>",
      "extn": "<?php echo $dados['serie'];?>"
    },
    
    
<?php }?>
{
  "name": "<?php echo "<div  style='text-align: center' class='form-check form-switch'> ALONGAMENTO </div>";?>",
      "position": "<?php echo "<div  style='text-align: center' class='form-check form-switch'> <input class='form-check-input' type='checkbox' id='flexSwitchCheckDefault'> <label class='form-check-label' for='flexSwitchCheckDefault'></label> </div>";?>",
      "img": "<img height='220' src='scripts/uploads/alongamento.gif'>",
      "editar": "<img height='30' src='scripts/uploads/delete.png'> <img height='27' src='scripts/uploads/editar.png'>",
      "extn": "LIVRE"
    }
  ]
}

