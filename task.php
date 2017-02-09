<?php
/**
 * Created by PhpStorm.
 * User: Dev-1
 * Date: 9.2.2017 г.
 * Time: 10:57 ч.
 */
$guessed = false;
$numberOfTries = 0;
if ($numberOfTries === 0){
    $randomNumber = rand(0,100);//$_POST["randomNumber"];
}
$number = isset($_POST['number']) ? $_POST['number'] : false;
if ($number !== false && is_numeric($number)){
    $btn = $_POST['btn'];
    $numberOfTries = $_POST['numberOfTries'] + 1;
    $randomNumber = $_POST['randomNumber'];
}
if ($number === $randomNumber) {
 $guessed = true;
}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guess who's back!</title>
</head>
<body>
    <fieldset>
        <legend>Dr. DRE</legend>
        <form action="?" method="post">
            <audio src="Dr. Dre - Still D.R.E. ft. Snoop Dogg.mp3" controls  <?php if ($guessed) echo "autoplay";?>></audio>
            <br><br>
            <label for="number">Guess the number: </label>
            <input type="text" id="number" name="number">
            <input type="hidden" name="randomNumber" value="<?= $randomNumber; ?>" >
            <input type="hidden" name="numberOfTries" value="<?= $numberOfTries; ?>">
            <input type="submit" value="Guess!" name="btn">
            <br><br>
        </form>

        <?php
        if ($numberOfTries > 0){
            if ($number < $randomNumber) {
                echo "<b style='color: red;'>Go up!</b>";
            } else if($number > $randomNumber){
                echo "<b style='color: red;'>Go down!</b>";
            } else {
                echo "Number of tries: $numberOfTries<br><br><b style='color: green;'>Smoke weed everyday!</b>";
            }
        }
        ?>
    </fieldset>
</body>
</html>
