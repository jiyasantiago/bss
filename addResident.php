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
                <a href="residents.php"  class="active">Residents Info</a>
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
                        <a href="residents.php">Back</a>
                    </div>
                    <div class="wrapper">
                        <form action="" method="post">
                            <div class="left">
                                <label for="rFirst">First Name</label>
                                <input type="text" id="rFirst" name="rFirst" placeholder="Enter First Name" required>

                                <label for="rLast">Last Name</label>
                                <input type="text" id="rLast" name="rLast" placeholder="Enter Last Name" required>

                                <label for="rBday">Date of Birth</label>
                                <input type="date" id="rBday" name="rBday" required>

                                <label for="rAge">Age</label>
                                <input type="text" id="rAge" name="rAge" placeholder="Enter Age" required>

                                <label for="rGender">Gender</label>
                                <select name="rGender" id="rGender" required>
                                    <option value="" disabled selected hidden>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                    <option value="Rather Not Say">Rather Not Say</option>
                                </select>

                                <label for="rPurok">Purok</label>
                                <input type="number" id="rPurok" name="rPurok" placeholder="Enter Purok / Zone Number" required>

                                <label for="rPrecint">Precint Number</label>
                                <input type="text" id="rPrecint" name="rPrecint" placeholder="Enter Precint Number" required>

                                <label for="rEmail">Email Address</label>
                                <input type="email" id="rEmail" name="rEmail" placeholder="juandelacruz@gmail.com" required>

                                <label for="rOccup">Occupation</label>
                                <input type="text" id="rOccup" name="rOccup" placeholder="Enter Occupation" required>

                                <label for="logUser">Create Username</label>
                                <input type="text" id="logUser" name="logUser" placeholder="Enter Username" required>

                            </div>
                            <div class="right">
                                <label for="rMid">Middle Name</label>
                                <input type="text" id="rMid" name="rMid" placeholder="Enter Middle Name" required>

                                <label for="rAlias">Alias</label>
                                <input type="text" id="rAlias" name="rAlias" placeholder="Enter Alias / Nickname" required>

                                <label for="rBplace">Place of Birth</label>
                                <input type="text" id="rBplace" name="rBplace" placeholder="Enter Place of Birth" required>

                                <label for="rCivil">Civil Status</label>
                                <select name="rCivil" id="rCivil" required>
                                    <option value="" disabled selected hidden>Select Civil Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Widowed">Widowed</option>
                                </select>

                                <label for="rHouse">Household Number</label>
                                <input type="number" id="rHouse" name="rHouse" placeholder="Enter Household Number" required>

                                <label for="rVoter">Voters Status</label>
                                <select name="rVoter" id="rVoter" required>
                                    <option value="" disabled selected hidden>Select Voters Status</option>
                                    <option value="Registered">Registered</option>
                                    <option value="Not Registered">Not Registered</option>
                                </select>

                                <label for="rPhilhealth">Philhealth Number</label>
                                <input type="text" id="rPhilhealth" name="rPhilhealth" placeholder="Enter Philhealth Number" required>

                                <label for="rContact">Contact Number</label>
                                <input type="number" id="rContact" name="rContact" placeholder="Enter Contact Number" required>

                                <label for="rCitizen">Citizenship</label>
                                <input type="text" id="rCitizen" name="rCitizen" placeholder="Enter Citizenship" required>

                                <label for="logPswd"> Create Password</label>
                                <input type="password" id="logPswd" name="logPswd" placeholder="Enter Password" required>

                            </div>
                            <div class="submit">
                                <input type="submit" value="Save" name="save">
                            </div>
                        </form>

                        <?php
                        if (isset($_POST['save'])) {

                            include('config.php');

                            $rFirst = $_POST['rFirst'];
                            $rMid = $_POST['rMid'];
                            $rLast = $_POST['rLast'];
                            $rAlias = $_POST['rAlias'];
                            $rBday = $_POST['rBday'];
                            $rBplace = $_POST['rBplace'];
                            $rAge = $_POST['rAge'];
                            $rCivil = $_POST['rCivil'];
                            $rGender = $_POST['rGender'];
                            $rHouse = $_POST['rHouse'];
                            $rPurok = $_POST['rPurok'];
                            $rVoter = $_POST['rVoter'];
                            $rPrecint = $_POST['rPrecint'];
                            $rPhilhealth = $_POST['rPhilhealth'];
                            $rEmail = $_POST['rEmail'];
                            $rContact = $_POST['rContact'];
                            $rOccup = $_POST['rOccup'];
                            $rCitizen = $_POST['rCitizen'];

                            $logName = ($rFirst . " " . $rMid . " " . $rLast);
                            $logUser = $_POST['logUser'];
                            $logPswd = $_POST['logPswd'];

                            $INSERT = "INSERT INTO tblResidents (rFirst, rMid, rLast, rAlias, rBday, rBplace, rAge, 
                            rCivil, rGender, rHouse, rPurok, rVoter, rPrecint, rPhilhealth, rEmail, rContact, rOccup, rCitizen)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                            $stmt = $conn->prepare($INSERT);
                            $stmt->bind_param(
                                "ssssssssssssssssss",
                                $rFirst,
                                $rMid,
                                $rLast,
                                $rAlias,
                                $rBday,
                                $rBplace,
                                $rAge,
                                $rCivil,
                                $rGender,
                                $rHouse,
                                $rPurok,
                                $rVoter,
                                $rPrecint,
                                $rPhilhealth,
                                $rEmail,
                                $rContact,
                                $rOccup,
                                $rCitizen
                            );
                            $stmt->execute();

                            $INSERT2 = "INSERT INTO tblLogs (logName, logUser, logPswd) VALUES (?, ?, ?)";
                            $stmt2 = $conn->prepare($INSERT2);
                            $stmt2->bind_param("sss", $logName, $logUser, $logPswd);
                            $stmt2->execute();
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