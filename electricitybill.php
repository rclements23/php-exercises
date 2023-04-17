
<?php
$result_str = $result = '';
if (isset($_POST['unitSubmit'])) {
    $units = $_POST['unitNo'];
    if (!empty($units)) {
        $result = calculateBill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}
/**
 * To calculate electricity bill as per unit cost
 */
function calculateBill($units) {
    $firstFifty = 3.50;
    $secondFifty = 4.00;
    $thirdFifty = 5.20;
    $fourthFofty = 6.50;

    if($units <= 50) {
        $bill = $units * $firstFifty;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $firstFifty;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $secondFifty);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * $firstFifty) + (100 * $secondFifty);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $thirdFifty);
    }
    else {
        $temp = (50 * $firstFifty) + (100 * $secondFifty) + (100 * $thirdFifty);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $fourthFofty);
    }
    return number_format((float)$bill, 2, '.', '');
};

echo "<h1>Calculate Electricity Bill in Php</h1>";

echo "<form method='post'>";

echo "<input type='number' name='unitNo' id='units' placeholder='Please enter no. of Units' />";
echo "<input type='submit' name='unitSubmit' id='unitSubmit' value='Submit' />";
echo "</form>";

echo "<br />" . $result_str; 

?>


