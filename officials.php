<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Sampaloc Information System (BSIS)</title>
    <link rel="stylesheet" href="sections.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        /* Main Body Section */
        .main-body {
            width: 80%;
            padding: 1rem;
        }

        .promo_card {
            width: 90%;
            color: #fff;
            margin-top: 10px;
            border-radius: 8px;
            padding: 0.5rem 1rem 1rem 3rem;
            background: #0052a2;
        }

        .add button {
            display: inline;
            background: #0052a2;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .promo_card h1,
        .promo_card span,
        button {
            margin: 10px;
        }

        .list {
            width: 70%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 1rem 0;
        }

        /*Table*/

        table {
            width: 10%;
            font-size: 15px;
            color: #000;
            background: #fff;
            padding: 1rem;
            text-align: center;
            border-radius: 10px;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        table,
        th {
            padding: 1rem 3rem;
            justify-content: center;
        }

        td {
            padding: 1rem 1rem;
            justify-content: left;
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
                <a href="officials.php" class="active">Brgy. Officials</a>
                <a href="residents.php">Residents Info</a>
                <a href="blotter.php">Blotter Records</a>
                <a href="clearance.php">Clearances</a>
                <a href="permit.php">Permits</a>
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
                <h1>Barangay Officials</h1>
            </div>

            <div class="list">
                <div class="list1">
                    <div class="row">

                        <h4>2018-2023</h4>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Position</th>
                                <th>Name</th>
                                <th>Contact Number</th>
                                <th>Address</th>
                                <th>Start of Term</th>
                                <th>End of Term</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('config.php');
                            $sql = "SELECT * FROM tblOfficials";
                            $result = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $data['oPosi']; ?></td>
                                    <td><?php echo $data['oName']; ?></td>
                                    <td><?php echo $data['oCont']; ?></td>
                                    <td><?php echo $data['oAdd']; ?></td>
                                    <td><?php echo $data['oTermS']; ?></td>
                                    <td><?php echo $data['oTermE']; ?></td>
                                    <td>
                                        <div class="add">
                                            <a href="editOfficials.php?oPosi=<?php echo $data['oPosi']; ?>">
                                                <button><i class="fas fa-pen"></i></button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>