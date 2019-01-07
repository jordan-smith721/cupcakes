<!--Jordan Smith
    1/7/2019
    jsmith.greenriverdev.com/328/cupcakes/
    An order form for cupcakes-->
<?php
/**
 * Created by PhpStorm.
 * User: Jsmit
 * Date: 1/7/2019
 * Time: 9:44 AM
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

$name = "";
$flavors = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon", "carrot" => "Carrot Walnut",
    "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet", "lemon" => "Lemon Drop",
    "tiramsu" => "Tiramisu");


if (!empty($_POST))
{
    require('cupcake-validation.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake Fundraiser</title>
</head>
<body>
<h1>Cupcake Order Form</h1>

<form id="cupcake-form" method="POST" action="">
    <label>Name:</label>
    <input type="text" id="name" name="name" value='<?php echo"$name"?>'>
    <br>

    <?php
    //print checkboxes for all cupcake types
    foreach($flavors as $key => $value)
    {
        echo "<input type='checkbox' name='flavors[]' value='$value' id='$key'";
        if(isset($_POST['flavors']) AND (in_array($value, $_POST['flavors']))) echo "checked";
        echo">$value<br>";
    }

    ?>
    <input type="submit" id="submit">
</form>
</body>
</html>
