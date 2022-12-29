<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Edit Officials</title>
    <link rel="stylesheet" href="form.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="bLogo.png" alt="">
            <a>Barangay Sampaloc</a>
        </div>

        <div class="header-icons">
            <i class="fas fa-bell"></i>
            <div class="account">
                <img src="user.png" alt="">
            </div>
        </div>
    </header>
    <div class="container">
        <nav>
            <div class="side_navbar">
                <span>Main Menu</span>
                <a href="officials.php" class="active">Brgy. Officials</a>
                <a href="residents.php">Residents Info</a>
                <a href="">Blotter Records</a>
                <a href="l">Clearances</a>
                <a href="">Permits</a>
                <span></span>

                <div class="links">
                    <span>Quick Link</span>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                </div>
            </div>
        </nav>

        <div class="main-body">
            <div class="promo_card">
                <?php
                if (isset($_GET['oPosi'])) {
                    $posi = $_GET['oPosi'];
                }
                ?>
                <h1><?php echo $posi; ?></h1>
            </div>

            <div class="list">
                <div class="list1">
                    <div class="row">
                        <a href="officials.php">Back</a>
                    </div>
                    <div class="wrapper">
                        <form action="" method="post">

                            <div class="left">

                                <label for="oName">Name</label>
                                <input type="text" id="oName" name="oName" placeholder="Enter Official's Name" required>

                                <label for="">Address</label>
                                <input type="text" id="oAdd" name="oAdd" placeholder="Enter Address" required>

                                <label for="oTermE">End of Term</label>
                                <input type="date" id="oTermE" name="oTermE" required>

                            </div>
                            <div class="right">
                                <label for="oCont">Contact Number</label>
                                <input type="number" id="oCont" name="oCont" placeholder="Enter Contact Number" required>

                                <label for="oTermS">Start of Term</label>
                                <input type="date" id="oTermS" name="oTermS" required>

                            </div>
                            <div class="submit">
                                <input type="submit" value="Save" name="save">
                            </div>
                        </form>

                        <?php
                        if (isset($_POST['save'])) {
                            include("config.php");
                            $oName = $_POST['oName'];
                            $oCont = $_POST['oCont'];
                            $oAdd = $_POST['oAdd'];
                            $oTermS = $_POST['oTermS'];
                            $oTermE = $_POST['oTermE'];

                            // mysql query to Update data
                            $query = "UPDATE tblOfficials SET oName= '$oName', oCont= '$oCont' ,
                                oAdd= '$oAdd' , oTermS= '$oTermS' , oTermE= '$oTermE' WHERE oPosi = '$posi'";

                            $result = mysqli_query($conn, $query);

                            if ($result) {
                                echo "<br><p><font color=green>Data Updated</font color></p>";
                            } else {
                                echo "<br><p><font color=green>Data Not Updated</font color></p>";
                            }
                            mysqli_close($conn);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>