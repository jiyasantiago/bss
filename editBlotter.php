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
                <a href="officials.php">Brgy. Officials</a>
                <a href="residents.php">Residents Info</a>
                <a href="" class="active">Blotter Records</a>
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
                $id = $_GET['bID'];
                ?>
                <h1>Edit Blotter #<?php echo $id ?></h1>
            </div>

            <div class="list">
                <div class="list1">
                    <div class="row">
                        <a href="blotter.php">Back</a>
                    </div>
                    <div class="wrapper">
                        <form action="" method="post">
                            <div class="left">
                                <label for="bComp">Complainant</label>
                                <input type="text" id="bComp" name="bComp" placeholder="Enter Complainant's Name" required>

                                <label for="bPers">Person to Complain</label>
                                <input type="text" id="bPers" name="bPers" placeholder="Enter Accused Person's Name" required>

                                <label for="bAction">Action Made</label>
                                <input type="text" id="bAction" name="bAction" placeholder="Enter Action Made" required>

                                <label for="bStatus">Status</label>
                                <select name="bStatus" id="bStatus" required>
                                    <option value="" disabled selected hidden>Select Status</option>
                                    <option value="Solved">Solved</option>
                                    <option value="Unsolved">Unsolved</option>
                                </select>
                            </div>
                            <div class="right">
                                <label for="bLoc">Location</label>
                                <input type="text" id="bLoc" name="bLoc" placeholder="Enter Location" required>

                                <label for="bReason">Reason</label>
                                <input type="text" id="bReason" name="bReason" placeholder="Enter Reason" required>

                                <label for="bAssist">Attended By</label>
                                <input type="text" id="bAssist" name="bAssist" placeholder="Enter Assistant" required>

                            </div>
                            <div class="submit">
                                <input type="submit" value="Save" name="save">
                            </div>
                        </form>

                        <?php

                        if (isset($_POST['save'])) {

                            include("config.php");

                            $bComp = $_POST['bComp'];
                            $bLoc = $_POST['bLoc'];
                            $bPers = $_POST['bPers'];
                            $bReason = $_POST['bReason'];
                            $bAction = $_POST['bAction'];
                            $bAssist = $_POST['bAssist'];
                            $bStatus = $_POST['bStatus'];

                            $query = "UPDATE tblResidents SET bComp= '$bComp',bLoc= '$bLoc',bPers= '$bPers,
                            bReason= '$bReason',bAction= '$bAction',bAssist= '$bAssist',bStatus= '$bStatus',
                            WHERE bID = '$id'";

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