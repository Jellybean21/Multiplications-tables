
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Exercice 1</title>


</head>

<body>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="card-panel  ">
      <input id="subbton"  class="btn waves-effect waves-light margT15 purple darken-1" type="submit" name="submitSelect" value="Envoyer">
    </form>


<?php

$i = rand(1, 10);

if(isset($_POST['submitSelect'])){
   'Table de multiplication de ' .$i.'<br>' ;




    for ( $j = 1 ; $j <= 10; $j++)
    {
        echo $i.' x ' .$j. ' = '.$i*$j. '<br>';
    }
}



?>


<br>
<br>
<br>



<script type="text/javascript" src="scriptA1.js"></script>


</body>
</html>
