<!Doctype html>
<html lang="fr">
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection">
  <!--<link type ="text/css" rel="stylesheet" href="css/style.css"> -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercice 2</title>
</head>

<body class="container">
  <div class=" center card-panel purple lighten-2">
    <h1 class="white-text center-align">Selection de la table de multiplication</h1>
  </div>
     <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="card-panel  ">
        <select name="tableSelect">
<?php       for($i = 1; $i <= 10; $i++){ ?>
                <option <?php if(isset($_POST['submitSelect']) && $_POST['tableSelect'] == $i){ echo 'selected="selected"'; } ?> value="<?php echo $i ?>">Table <?php echo $i ?></option>
<?php       } ?>
        </select>
        <input  class="btn waves-effect waves-light margT15 purple darken-1" type="submit" name="submitSelect" value="Envoyer">
    </form>
</div>
<?php

    if(isset($_POST['submitSelect'])){ //Si le formulaire a été soumis
        //Affichage de la table correspondante
        $table = intval($_POST['tableSelect']);
        echo '<div class="container">';
        echo '<table class="striped centered col l8  card-panel purple lighten-4">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>'.'Opérations'.'</th>';
        echo '</tr>';
        echo '</thead>';


        for ( $j = 1 ; $j <= 10; $j++){
            echo '<tr>';
            echo '<td>'.$table.' x ' .$j. ' = '.$table * $j.'</td>';
            echo '</tr>';

        }
        echo '</table>';
        echo '</div>';
    } ?>


    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
