<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Profiling</title>
    <link rel="stylesheet" href="sections.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <style>
        /* Main Body Section */
        .main-body {
            width: 80%;
            padding: 1rem;
        }

        .add button {
            background: #0052a2;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .list {
            width: 90%;
            align-items: center;
            justify-content: space-between;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /*Table*/

        table {
            display: block;
            overflow-y: scroll;
            width: 100%;
            height: 530px;
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
            table-layout: fixed;
            padding: 1rem 0rem 2rem 1rem;
            text-align: center;
            justify-content: center;
        }

        td {
            padding: 1rem 1.3rem;
            text-align: center;
            justify-content: center;
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
                <a href="residents.php">Residents Info</a>
                <a href="blotter.php" class="active">Blotter Records</a>
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
            <div class="list">
                <div class="list1">
                    <div class="row">
                        <h4>Blotter Records</h4>
                        <div class="add">
                            <a href="addBlotter.php"><button>Add Blotter</button></a>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Complainant</th>
                                <th>Location</th>
                                <th>Person to Complain</th>
                                <th>Reason</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('config.php');
                            $sql = "SELECT * FROM tblBlotter";
                            $result = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $data['bID']; ?></td>
                                    <td><?php echo $data['bDate']; ?></td>
                                    <td><?php echo $data['bComp']; ?></td>
                                    <td><?php echo $data['bLoc']; ?></td>
                                    <td><?php echo $data['bPers']; ?></td>
                                    <td><?php echo $data['bReason']; ?></td>
                                    <td>
                                        <div class="add">
                                            <a href="viewBlotter.php?bID=<?php echo $data['bID']; ?>">
                                                <button><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="editBlotter.php?bID=<?php echo $data['bID']; ?>">
                                                <button><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <a href="deleteBlotter.php?bID=<?php echo $data['bID']; ?>">
                                                <button><i class="fa fa-trash"></i></button>
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