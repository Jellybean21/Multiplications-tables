<!Doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Exercice 2</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      
<?php       for($i = 1; $i <= 10; $i++){ ?>
             <input type="checkbox" name="tableSelect[]" <?php if(isset($_POST['submitSelect']) && $_POST['tableSelect'] == $i){ echo 'selected="selected"'; } 
             ?> value="<?php echo $i ?>">
            <label >Table <?php echo $i ?></label>
<?php       } ?>
      
        <input type="submit" name="submitSelect" value="Envoyer">
    </form>

<?php

    if(isset($_POST['submitSelect'])){ //Si la checkbox a été cochée
        //Affichage de la table correspondante
        $checks= $_POST['tableSelect'];

        $table = intval($_POST['tableSelect']);
        foreach($checks as $check ){

        
        for ( $j = 1 ; $j <= 10; $j++){
            echo $check.' x ' .$j. ' = '.$check * $j. '<br>';
        }
    }
    } ?>