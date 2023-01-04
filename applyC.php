<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Clearance Application</title>
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
                <span>Apply for:</span>
                <a href="applyC.php" class="active">Clearances</a>
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
                <h1>Request for Clearance</h1>
            </div>

            <div class="list">
                <div class="list1">
                    <div class="row">
                    </div>
                    <div class="wrapper">
                        <form action="" method="post">
                            <div class="left">
                                <label for="cRFirst">First Name</label>
                                <input type="text" id="cRFirst" name="cRFirst" placeholder="Enter First Name" required>

                                <label for="bPers">Purpose</label>
                                <input type="text" id="bPers" name="bPers" placeholder="State your purpose" required>
                            </div>

                            <div class="right">
                                <label for="cRLast">Last Name</label>
                                <input type="text" id="cRLast" name="cRLast" placeholder="Enter Last Name" required>
                            </div>

                            <div class="submit">
                                <input type="submit" value="Apply" name="save">
                            </div>
                        </form>

                        <?php

                        if (isset($_POST['save'])) {

                            include('config.php');

                            $cRFirst = $_POST['cRFirst'];
                            $cRLast = $_POST['cRLast'];
                            $cPurpose = $_POST['cPurpose'];

                            $INSERT = "INSERT INTO tblClearance (cRFirst, cRLast, cPurpose) VALUES (?, ?, ?)";
                            $stmt = $conn->prepare($INSERT);
                            $stmt->bind_param("sss", $cRFirst, $cRLast, $cPurpose);
                            $stmt->execute();
                            echo "<br><p><font color=green>Successfully Registered</font color></p>";
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