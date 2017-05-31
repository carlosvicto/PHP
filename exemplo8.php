
<html>
<head><title>exemplo4.3</title>
<meta charset="utf-8">
</head>
     <body>
        <h1> ************Estrutura Condicional (Switch) ***********</h1>
        <?php
               
               $dia=getdate();
               switch($dia['wday']){
               case 5:
               echo "finalmente sexta"; break;
               case 6:
               echo "super sabado"; break;
               case 0:
               echo "domingo sonoleto"; break;
               default:
               echo "Estou esperendo pelo fim de semana";
               }
                ?>
          </body>
</html>