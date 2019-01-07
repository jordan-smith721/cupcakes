<?php
/**
 * Created by PhpStorm.
 * User: Jsmit
 * Date: 1/7/2019
 * Time: 3:25 PM
 */

$isValid = true;

//validate name
if(!empty($_POST['name']))
{
    $name = $_POST['name'];
}
else
{
    echo "<p>Please enter a name</p>";
    $isValid = false;
}

//create valid flavors
$validFlavors = array();
foreach ($flavors as $key => $value)
{
    $validFlavors[] = $value;

}

//validate that one box is checked
if(isset($_POST['flavors']))
{
    $chosenFlavors = $_POST['flavors'];
    foreach ($chosenFlavors as $chosenFlavor)
    {
        if(!in_array($chosenFlavor, $validFlavors))
        {
            echo "<p>Invalid Flavor</p>";
            $isValid = false;
        }
    }
}
else
{
    echo '<p>Please select at least one flavor</p>';
    $isValid = false;
}

//display order form if all is valid
if($isValid)
{
    $totalPrice = 0;

    echo "<h2>Thank you $name for your order!</h2>
                <ul>Order Summary:";

    //loop through flavors and add price for each cupcake
    foreach ($chosenFlavors as $flavor)
    {
        echo"<li>$flavor</li>";
        $totalPrice += 3.50;
    }

    echo"</ul><p>Order Total: $$totalPrice</p>";
}