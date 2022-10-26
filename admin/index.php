<?php include "../TCC/Estrutura/Head.php"; ?>
<?php include "../TCC/Estrutura/Navbar.php"; ?>

<div class="container">

  <?php include "../scripts\config.php";
  include "../scripts\gerar.php";
  $query = $mysqli->query($sql);
  while ($dados = $query->fetch_array()) { ?>

    <div class="box">
      <div class="image">
        <img src="../scripts\uploads\<?php echo $dados['imagem']; ?>">
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
          TREINO
        </button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdro">
          DADOS
        </button>


        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>

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
                                            <th style="text-align: center">EXIBIR</th>
                                            <th style="text-align: center">EXERCÍCIO</th>
                                            <th style="text-align: center">EDITAR</th>
                                    
                                        </tr>
                                    </thead>
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


        <!-- Modal -->
        <div class="modal fade" id="staticBackdro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>

              </div>
              <div class="modal-body">
                <!-- TABLE DO MODAL AQ=---------------------------- -->

                <div class="container-fluid">
                  <div class="row">

                    <section class="content">
                      PESSOA
                      <!-- COLOCAR TABELA DO TREINO RESPECTIVO DO ALUNO AQUI -->

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


</div>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.12.1/jquery.mask.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
  /* Formatting function for row details - modify as you need */
  function format(d) {
    // `d` is the original data object for the row
    return (
      '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
      '<tr>' +
      '<td>SÉRIES:</td>' +
      '<td>' +
      d.extn +
      '</td>' +
      '</tr>' +
      '<tr>' +
      '<td></td>' +
      '<td>' +
      d.img +
      '</td>' +
      '</tr>' +
      '</table>'
    );
  }

  $(document).ready(function() {
    var table = $('#example').DataTable({
      ajax: 'gerarTreinoAjaxAdm.php',
      columns: [{
          className: 'dt-control',
          orderable: false,
          data: null,
          defaultContent: '',
        },
        {
          data: 'name'
        },
        {
          data: 'editar'
        },


      ],
      order: [
        [1, 'asc']
      ],
      "filter": false,
      "paging": false,
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json"
      }

    });

    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.dt-control', function() {
      var tr = $(this).closest('tr');
      var row = table.row(tr);

      if (row.child.isShown()) {
        // This row is already open - close it
        row.child.hide();
        tr.removeClass('shown');
      } else {
        // Open this row
        row.child(format(row.data())).show();
        tr.addClass('shown');
      }
    });
  });
</script>


</body>

</html>