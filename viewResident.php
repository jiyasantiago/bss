<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Profiling</title>
    <link rel="stylesheet" href="form.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <style>
        table {
            display: block;
            overflow-y: scroll;
            width: 100%;
            height: 540px;
            font-size: 15px;
            color: #000;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            padding: 1rem;
            border-collapse: collapse;
            margin: 25px 0;

        }

        table,
        th {
            padding: 1rem 0rem 1rem 1rem;
            justify-content: center;
        }

        td {
            padding: 1rem 10rem 1rem 7rem;
            justify-content: center;
        }

        tr {
            border-bottom: 1px solid #dddddd;
        }

        th {
            background-color: #009879;
            color: #ffffff;
            text-align: center;
        }

        tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
    </style>
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
            <div class="list">
                <div class="list1">
                    <div class="row">
                        <a href="residents.php">Back</a>

                    </div>

                    <table>
                        <?php
                        if (isset($_GET['rID'])) {
                            $id = $_GET['rID'];
                            include("config.php");
                            $sql = "SELECT * FROM tblResidents WHERE rID = $id";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                        }
                        ?>
                        <thead>
                            <th>
                                <h4>Header</h4>
                            </th>
                            <th>
                                <h4> Details</h4>
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>ID</strong></td>
                                <td><?php echo $row["rID"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>First Name</strong></td>
                                <td><?php echo $row["rFirst"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Middle Name</strong></td>
                                <td><?php echo $row["rMid"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Last Name</strong></td>
                                <td><?php echo $row["rLast"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Alias</strong></td>
                                <td><?php echo $row["rAlias"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Date of Birth</strong></td>
                                <td><?php echo $row["rBday"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Place of Birth</strong></td>
                                <td><?php echo $row["rBplace"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Age</strong></td>
                                <td><?php echo $row["rAge"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Civil Status</strong></td>
                                <td><?php echo $row["rCivil"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Gender</strong></td>
                                <td><?php echo $row["rGender"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Household Number</strong></td>
                                <td><?php echo $row["rHouse"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Purok</strong></td>
                                <td><?php echo $row["rPurok"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Voters Status</strong></td>
                                <td><?php echo $row["rVoter"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Precint Number</strong></td>
                                <td><?php echo $row["rPrecint"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Philhealth Number</strong></td>
                                <td><?php echo $row["rPhilhealth"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Email Address</strong></td>
                                <td><?php echo $row["rEmail"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Contact Number</strong></td>
                                <td><?php echo $row["rContact"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Occupation</strong></td>
                                <td><?php echo $row["rOccup"] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Citizenship</strong></td>
                                <td><?php echo $row["rCitizen"] ?></td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>