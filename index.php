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
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "bsis";

            if (isset($_POST['sub'])) {

                $conn = new mysqli($host, $user, $password, $db);

                $uname = $_POST['uname'];
                $pswd = $_POST['pswd'];

                $sql = "SELECT * FROM tblLogs WHERE logUser='$uname' AND logPswd='$pswd'";
                $result = mysqli_query($conn, $sql);
                $numRows = mysqli_num_rows($result);

                if ($numRows == 1) {
                    $logged_in_user = mysqli_fetch_assoc($result);

                    if ($logged_in_user['logType'] == 'Chairman') {
                        header('location: chairman.html');
                    } else if ($logged_in_user['logType'] == 'Secretary') {
                        header('location: officials.php');
                    } else if ($logged_in_user['logType'] == 'Resident') {
                        header('location: ');
                    }
                } else {
                    echo "<br><p><font color=red>Incorrect username/password</font color></p>";
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