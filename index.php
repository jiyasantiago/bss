<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Barangay Sampaloc Information System (BSIS)</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <div class="pic">
            <img src="bLogo.png">
        </div>
        <h1>User Login</h1>
        <p>Welcome back you've <br> been missed!</p>
        <br>
        <form action="" method="POST">
            <div class="log">
                <input type="text" id="uname" name="uname" placeholder="Enter username">
                <input type="password" id="pswd" name="pswd" placeholder="Password">
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>

            </p>
            <?php

            if (isset($_POST['sub'])) {

                include('config.php');

                $uname = $_POST['uname'];
                $pswd = $_POST['pswd'];

                $sql = "SELECT * FROM tblAccess WHERE aUname='$uname' AND aPswd='$pswd'";
                $result1 = mysqli_query($conn, $sql);
                $numRows1 = mysqli_num_rows($result1);

                $sql = "SELECT * FROM tblUsers WHERE uName='$uname' AND uPswd='$pswd'";
                $result2 = mysqli_query($conn, $sql);
                $numRows2 = mysqli_num_rows($result2);


                if ($numRows1 > 0) {
                    $user1 = mysqli_fetch_assoc($result1);

                    if ($user1['aType'] == 'Chairman') {
                        $_SESSION['loggedin'] = TRUE;
                        $_SESSION['role'] = "Chairman";
                        $_SESSION['userid'] = $numRows1['aID'];
                        $_SESSION['username'] = $numRows1['aUname'];

                        header('location: chairman.html');
                    } else if ($user1['aType'] == 'Secretary') {
                        $_SESSION['loggedin'] = TRUE;
                        $_SESSION['role'] = "Secretary";
                        $_SESSION['userid'] = $numRows1['aID'];
                        $_SESSION['username'] = $numRows1['aUname'];

                        header('location: residents.php');
                    } else if ($user1['aType'] == 'Kagawad') {
                        $_SESSION['loggedin'] = TRUE;
                        $_SESSION['role'] = "Kagawad";
                        $_SESSION['userid'] = $numRows1['aID'];
                        $_SESSION['username'] = $numRows1['aUname'];

                        header('location: residents.php');
                    } elseif ($numRows2 > 0) {
                        $user2 = mysqli_fetch_assoc($result2);

                        if (($user2['uName'] = $uname) and ($user2['uPswd'] = $pswd)) {
                            $_SESSION['loggedin'] = TRUE;
                            $_SESSION['role'] = "Resident";
                            $_SESSION['userid'] = $numRows2['uID'];
                            $_SESSION['username'] = $numRows2['uName'];

                            header('location: applyC.php');
                        }
                    } else {
                        echo "<br><p><font color=red>Incorrect username/password</font color></p>";
                    }
                }
            }
            ?>
            <br>
            <div class="submit">
                <input type="submit" value="Sign In" name="sub">
            </div>
        </form>
        <div class="footer">
            <h4>Ito ay atin, Mahalin natin</h4>
        </div>
        <div class=" footer">
            <a href="https://web.facebook.com/profile.php?id=100064518436649">The New Barangay Sampaloc</a>
        </div>
    </div>
</body>

</html>