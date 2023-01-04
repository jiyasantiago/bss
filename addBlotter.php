<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Profiling</title>
    <link rel="stylesheet" href="form.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="bLogo.png" alt="">
            <a>Barangay Sampaloc</a>
        </div>

        <div class="header-icons">
            <div class="account">
                <a href="logout.php"><img src="logout2.png" alt=""></a>
            </div>
            <br>
            <div>
                <h5>&nbsp Logout</h5>
            </div>
        </div>
    </header>
    <div class="container">
        <nav>
            <div class="side_navbar">
                <span>Main Menu</span>
                <a href="officials.php">Brgy. Officials</a>
                <a href="residents.php" class="active">Residents Info</a>
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
                <h1>Registration</h1>
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

                            include('config.php');

                            $bComp = $_POST['bComp'];
                            $bLoc = $_POST['bLoc'];
                            $bPers = $_POST['bPers'];
                            $bReason = $_POST['bReason'];
                            $bAction = $_POST['bAction'];
                            $bAssist = $_POST['bAssist'];
                            $bStatus = $_POST['bStatus'];

                            $INSERT = "INSERT INTO tblBlotter (bComp, bLoc, bPers, bReason, bAction, bAssist, bStatus)
                            VALUES (?, ?, ?, ?, ?, ?, ?)";
                            $stmt = $conn->prepare($INSERT);
                            $stmt->bind_param(
                                "sssssss",
                                $bComp,
                                $bLoc,
                                $bPers,
                                $bReason,
                                $bAction,
                                $bAssist,
                                $bStatus,
                            );
                            $stmt->execute();
                            echo "<br><p><font color=green>Saved Successfully</font color></p>";
                            $stmt->close();
                            $conn->close();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>