
<?php

session_start();
$servernamedb = "localhost";
$usernamedb = "root";
$passworddb = "";
$databasedb = "cedcab";

$pickup = $_POST['pick'];
$destination = $_POST['dest'];
$Cab = $_POST['cab'];
$weight = $_POST['weight'];
if ($_POST['weight'] == "") {
    $weight = 0;
}
$temp = 0;
$distance;
$fare = 0;
$fun = 0;
$fun2 = 0;

$arr1 = array(
    "charbargh" => 0,
    "Indira Nagar" => 10,
    "BBD" => 30,
    "Barabanki" => 60,
    "Faizabad" => 100,
    "Basti" => 150,
    "Gorakhpur" => 210,

);

foreach ($arr1 as $key => $val) {
    if ($key == $pickup) {
        $fun = $val;
    } else if ($key == $destination) {
        $fun2 = $val;
    }
}
echo "
<form action='cabdata.php' method='POST'>";
echo "<span> From:</span> <input type='text' value='$pickup' name='from'  style='border:none'  readonly />";
echo "<br>";

echo "<span>To:</span> <input type='text' value=' $destination' name='to'style='border:none'  readonly />";
echo "<br>";
echo "<span>Weight:</span> <input type='text' value=' $weight' name='weigh'style='border:none'  readonly />";
echo "<br>";
$temp = abs($fun - $fun2);

echo "<span>distance:</span><input type='text' value= '$temp' name='temp'style='border:none'  readonly />";
echo "<br>";

class book
{

    public function farecalculate($Cab, $weight, $pickup, $destination)
    {
        global $fareamount, $temp, $fare, $pickup, $destination;

        if ($Cab == "CedMicro") {
            echo "<span>CabType</span><input type='text' value= '$Cab' name='cab'  style='border:none' readonly />";
            echo "<br>";

            $fareamount = 50;

            if ($temp <= 10) {

                $fareamount += (13.50 * $temp);
                echo "<span>farewithout luggage:</span> <input type='text' value= '$fareamount' name='inp1' style='border:none'  readonly/>";
                echo "<br>";
                $fare = $fareamount;
            } else if ($temp > 10 && $temp <= 60) {
                $temp = $temp - 10;
                $fareamount += ((12.00 * $temp) + 10 * 13.5);
                echo "<span> farewithout luggage:</span> <input type='text' value= '$fareamount' name='inp1' style='border:none' readonly />";
                echo "<br>";
                $fare = $fareamount;
            } else if ($temp > 60 && $temp <= 160) {

                $temp = $temp - 60;
                $fareamount += ((13.5 * 10) + (12.00 * 50) + (10.20 * $temp));
                echo "<span> farewithout luggage:</span> <input type='text' value= '$fareamount' name='inp1'  style='border:none'  readonly/>";
                echo "<br>";
                $fare = $fareamount;
            } else if ($temp > 160) {
                echo "<span>CabType</span><input type='text' value= '$Cab' name='cab' style='border:none;' readonly />";
                echo "CabTye:" . $Cab . "<br>";
                $temp = $temp - 160;
                $fareamount += ((13.5 * 10) + (12.00 * 50) + (10.20 * 100) + ($temp * 8.50));
                echo "<span>farewithout luggage:</span> <input  type='text' value= '$fareamount' name='inp1' style='border:none'   readonly/>";
                echo "<br>";

                $fare = $fareamount;
            }
        } else if ($Cab == "CedMini") {
            echo "<span>CabType</span><input type='text' value= '$Cab' name='cab'style='border:none;' readonly />";
            echo "<br>";
            $fareamount = 150;
            echo "<span> farewithout luggage:</span> <input type='text' value= '$fareamount' name='inp1' style='border:none'  readonly/>";
            echo "<br>";
            if ($temp <= 10) {

                $fareamount += (14.50 * $temp);
                echo "<span>farewithout luggage:</span> <input type='text' value= '$fareamount'name='inp1' style='border:none' readonly />";
                echo "<br>";

                $fare = $fareamount;
            } else if ($temp > 10 && $temp <= 60) {
                $temp = $temp - 10;
                $fareamount += ((13.00 * $temp) + 10 * 14.50);
                echo "<span> farewithout luggage:</span> <input type='text' value= '$fareamount' name='inp1' style='border:none' readonly />";
                echo "<br>";
                $fare = $fareamount;
            } else if ($temp >= 60 && $temp <= 160) {
                $temp = $temp - 60;
                $fareamount += ((14.5 * 10) + (13.00 * 50) + (11.20 * $temp));
                echo "<span> farewithout luggage:</span> <input type='text' value= '$fareamount' name='inp1' style='border:none' readonly />";
                echo "<br>";
                $fare = $fareamount;
            } else if ($temp > 160) {
                $temp = $temp - 160;
                $fareamount += ((14.5 * 10) + (13.00 * 50) + (11.20 * 100) + ($temp * 9.50));
                echo "<span> farewithout luggage:</span>' farewithout luggage:' <input type='text' value= '$fareamount' style='border:none'  name='inp1'readonly />";
                echo "<br>";

                $fare = $fareamount;
            }
        } else if ($Cab == "CedRoyal") {
            echo "<span>CabType</span><input type='text' value= '$Cab' name='cab' style='border:none' readonly />";
            echo "<br>";
            $fareamount = 200;
            echo "Fixed Fare:" . $fareamount . "<br>";
            if ($temp <= 10) {

                $fareamount += (15.50 * $temp);
                echo "<span> farewithout luggage:</span><input type='text' value= '$fareamount' name='inp1'  style='border:none' readonly/>";
                echo "<br>";
                $fare = $fareamount;
            } else if ($temp > 10 && $temp <= 60) {
                $temp = $temp - 10;
                $fareamount += ((14.00 * $temp) + 10 * 15.50);
                echo "<span> farewithout luggage:</span> <input type='text' value= '$fareamount' name='inp1'style='border:none'  readonly />";
                echo "<br>";

                $fare = $fareamount;
            } else if ($temp > 60 && $temp <= 160) {
                $temp = $temp - 60;
                $fareamount += ((15.5 * 10) + (14.00 * 50) + (12.20 * $temp));
                echo "<span> farewithout luggage:</span><input type='text' value='$fareamount' name='inp1'  style='border:none' readonly/>";
                echo "<br>";

                $fare = $fareamount;
            } else if ($temp > 160) {
                $temp = $temp - 160;
                $fareamount += ((15.5 * 10) + (14.00 * 50) + (12.20 * 100) + ($temp * 10.50));
                echo "<span> farewithout luggage:</span> <input type='text' value= '$fareamount' name='inp1' style='border:none' readonly />";
                echo "<br>";

                $fare = $fareamount;
            }
        } else if ($Cab == "CedSUV") {
            echo "<span>CabType</span><input type='text' value= '$Cab' name='temp' style='border:none' readonly />";
            echo "<br>";
            $fareamount = 250;
            echo "<span> farewithout luggage:</span>: <input type='text' value='$fareamount' name='inp1' style='border:none' readonly />";
            echo "<br>";
            if ($temp <= 10) {

                $fareamount += (16.50 * $temp);
                echo "<span> farewithout luggage:</span> <input type='text' value='$fareamount' name='inp1' style='border:none'  readonly/>";
                echo "<br>";

                $fare = $fareamount;
            } else if ($temp > 10 && $temp <= 60) {
                $temp = $temp - 10;
                $fareamount += ((15.00 * $temp) + 10 * 16.50);
                echo "<span> farewithout luggage:</span> <input type='text' value= '$fareamount' name='inp1'  style='border:none' readonly />";
                echo "<br>";

                $fare = $fareamount;
            } else if ($temp > 60 && $temp <= 160) {
                $temp = $temp - 60;
                $fareamount += ((16.5 * 10) + (15.00 * 50) + (13.20 * $temp));
                echo "<span> farewithout luggage:</span> <input type='text' value= '$fareamount' name='inp1' style='border:none'  readonly />";
                echo "<br>";
                $fare = $fareamount;
            } else if ($temp > 160) {
                $temp = $temp - 160;
                $fareamount += ((16.5 * 10) + (15.00 * 50) + (13.20 * 100) + ($temp * 11.50));
                echo "<span> farewithout luggage:</span> <input type='text' value= '$fareamount' name='inp1' style='border:none'  style='border:none'readonly />";
                echo "<br>";

                $fare = $fareamount;
            }
        }
        if ($Cab == "CedMicro") {
            $weight = 0;
            $fare = $fareamount;

            echo "<span> farewithout luggage:</span> <input type='text' value= '$fare' name='inp' style='border:none' readonly />";
            echo "<br>";
        }
        if ($Cab == "CedRoyal" || $Cab == "CedMini") {
            if (0 < $weight && $weight <= 10) {
                echo $fare;

                $fare += 50;
                echo "<span> final Fare:</span> <input type='text' value= '$fare' name='inp' style='border:none' readonly />";
                echo "<br>";
            }
            if (10 < $weight && $weight <= 20) {
                $fare += 100;
                echo "final fare : " . $fare . "<br>";
            }
            if ($weight > 20) {
                $fare += 200;
                echo "<span> final Fare:</span> <input type='text' value= '$fare' name='inp' style='border:none' readonly />";
                echo "<br>";
            }
        } else {

            if (0 < $weight && $weight <= 10) {
                echo $fare;
                $fare += 2 * 50;
                echo "<span> final Fare:</span> <input type='text' value='$fare' name='inp' style='border:none' readonly />";
                echo "<br>";
            }
            if (10 < $weight && $weight <= 20) {
                echo $fare;
                $fare += 2 * 100;
                echo "<span> final Fare:</span> <input type='text' value= '$fare' name='inp' style='border:none'readonly />";
                echo "<br>";
            }
            if ($weight > 20) {
                echo $fare;
                $fare += 2 * 200;
                echo "<span> final Fare:</span> <input type='text' value= '$fare' name='inp'  style='border:none'  readonly />";
                echo "<br>";
            }
        }
    }
}

$name = new book;
$name->farecalculate($Cab, $weight, $pickup, $destination);

echo "
<div class='modal-footer'>
<button type='button'class=' btn-danger' data-dismiss='modal'>Cancel</button>
<button type='submit' class='btn btn-success' >Book Now</button>
      </div></form>"

?>


