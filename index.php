<?php
    // CLASSE DA MEDIA
    require_once 'inc/classes.php';

?>

<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Calcular Média</title>
        <!-- JS -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/mascara.js"></script>
    </head>
<body>

    <div class="row">
    <div class="centro container forma_redonda">
    <h4 class="center titulo"><strong>CALCULAR MÉDIA BRAZCUBAS EDUCAÇÃO</strong></h4>
    <br><br>
    <form action="inc/validador.php" name="formulario_notas">
    
    <?php

        for ($i=1; $i <= 4; $i++) { 
        echo '
                <div class="input-field col s6 m3">
                    <input placeholder="informe a nota" id="a'.$i.'" type="text" name="a'.$i.'" class="nota validate" required>
                    <label for="a'.$i.'"> Atividade da Unidade '.$i.'</label>
                </div>';
        }
            
    ?>

        <div class="input-field col s6 m6">
            <input placeholder="informe a primeira nota" id="v1" name="v1" type="text" max="10" class="nota validate" required>
            <label for="v1"> Atividade de Verificação</label>
        </div>

        <div class="input-field col s6 m6">
            <input placeholder="informe a nota" id="p1" type="text" name="p1" class="nota validate" required>
            <label for="p1"> Prova Presencial</label>
            <br><br>
        </div>
    <button class="btn grey col s12" type="submit" onclick="return validar()" >Calcular</button>
    
    <br>
    </form>
    </div>


 <!-- Modal Structure -->
 <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Brazcubas Educação</h4>
      <?php echo $tela;?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
    </div>
  </div>
</div>



<script language="javascript" type="text/javascript">
    $(document).ready(function(){
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
        $('#modal1').modal('open');
    });

    function validar() {
        var a1 = formulario_notas.a1.value;
        var a2 = formulario_notas.a2.value;
        var a3 = formulario_notas.a3.value;
        var a4 = formulario_notas.a4.value;
        var v1 = formulario_notas.v1.value;
        var p1 = formulario_notas.p1.value;

        if (a1 > 10 || a2 > 10 || a3 > 10 || a4 > 10 || v1 > 10 || p1 > 10) {

            Materialize.toast('<b>A nota máxima é 10!<b>', 3000, 'red center rounded')

        }

        if (a1 == "" || a2 == ""  || a3 == ""  || a4 == ""  || v1 == ""  || p1 == "" ){

            Materialize.toast('<b>Campo vazio!</b>', 3000, 'red center rounded') 

        }

    }
    </script>

    
</body>
</html>