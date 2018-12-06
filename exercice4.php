<?php
$user_choice_error ="";
$user_choice_winner="";
$user_choice ="";


function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<!Doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Exercice 2</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <select name="tableSelect"class="browser-default">
<?php       for($i = 1; $i <= 10; $i++){ ?>
                <option <?php if(isset($_POST['submitSelect']) && $_POST['tableSelect'] == $i){ echo 'selected="selected"'; } ?> value="<?php echo $i ?>">Table <?php echo $i ?></option>
<?php       } ?>
        </select>
        <input type="submit" name="submitSelect" value="Envoyer">
    </form>

<?php
    if(isset($_POST['submitSelect']) || isset($_POST['submitNumber'])){
        if(isset($_POST['submitSelect'])){
        $table = $_POST['tableSelect'] ;
        $rand  = rand(1, 10);
      }elseif (isset($_POST['submitNumber'])) {
        $table = $_POST['table'];
        $rand = $_POST['rand'];
        $calcul = $table * $rand;

      }

       echo $table.' X '.$rand;








    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="POST">
      <label>Entrez votre réponse</label>
      <input type="number" name="user_choice">
      <input type="submit" name="submitNumber" value="Play">
      <input type="hidden" name="table" value="<?php echo $table ?>">
      <input type="hidden" name="rand" value="<?php echo $rand ?>">
    </form>



    <?php
    if(isset($_POST['submitNumber'])){
    if(empty($_POST["user_choice"])){
      $user_choice_error = "Veuillez rentrer un nombre";
    }else{
      $user_choice = test_input($_POST["user_choice"]);
    }

    if($_POST["user_choice"] == $calcul){
      $user_choice_winner = "Bravo vous avez trouver!";
    }else{
      $user_choice_error = "Perdu! Veuillez reselectionner une table!";
    }
    ?>
    <p><?php echo $user_choice_winner; echo $user_choice_error ?></p>
    <?php
  }
}

     ?>
</body>
</html>
