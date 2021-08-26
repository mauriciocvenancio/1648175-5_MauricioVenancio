<?php
error_reporting(0);
include "function/redirecionamento.php";
$pag = $_REQUEST['pag'];
?>

<html class="no-js" lang="en"> 

<?php print(Head()); ?>
<body data-spy="scroll" data-target="#navmenu" data-offset="70">

<?php print(Topo()); ?>

<?php Redirecionamento($pag); ?>


<?php print(Rodape()); ?>


<?php print(Js()); ?>

 </body>
</html>