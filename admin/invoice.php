<?
error_reporting(0);
session_start();
if(!isset( $_SESSION['admin'])){
  header('location:../index.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ola Cab</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="invoice.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<style>
  
    .sessiondecorate {
        margin-right: 20px;
        font-weight: bold;
        font-size: 20px;
    }

    .content {
        max-width: 70%;
    }
</style>

<body>

    <?php


    include "header.php";
    if (isset($_GET['dummy'])) {
        $x = $_GET['dummy'];

        $servernamedb = "localhost";
        $usernamedb = "root";
        $passworddb = "";
        $databasedb = "cedcab";
        $con = mysqli_connect($servernamedb, $usernamedb, $passworddb, $databasedb);
        $query = "select * from tbl_ride where Ride_id='$x'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
    }




    ?>



    <table class="body-wrap">
        <tbody>
            <tr>
                <td></td>
                <td>
                    <div class="content py-5">
                        <table class="main " width="100%" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td class="content-wrap aligncenter">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <td>
                                                    <table class="invoice">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>PICKUP LOCATION</td>
                                                                                <td class="alignright"><?php echo $row['From_loc']; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>DROP LOCATION</td>
                                                                                <td class="alignright"><?php echo $row['To_loc']; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>CAB TYPE</td>
                                                                                <td class="alignright"><?php echo $row['CAB_type']; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>DISTANCE</td>
                                                                                <td class="alignright"><?php echo $row['Total_distance'] . '  KM'; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>LUGGAGE</td>
                                                                                <td class="alignright"><?php echo $row['Luggage'] . '  KG'; ?></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>RIDE STATUS</td>
                                                                                <td class="alignright">


                                                                                    <?php if ($row['status'] == 0) {
                                                                                        echo "Cancelled";
                                                                                    } else if ($row['status'] == 2) {
                                                                                        echo "Completed";
                                                                                    }
                                                                                    ?>
                                                                                </td>



                                                                            </tr>
                                                                            <tr class="total">
                                                                                <td class="alignright" width="80%">TOTAL FARE</td>
                                                                                <td class="alignright"><?php echo $row['total_fare'] ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                </tr>

                            </tbody>
                        </table>
                </td>
            </tr>
        </tbody>
    </table>
    </td>
    <td></td>
    </tr>
    </tbody>
    </table>
    <div class="text-center"><button onclick=window.print() class="btn btn-primary"> Print Invoice</button></div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script src="../project.js"></script>
</body>

</html>