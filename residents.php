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
            table-layout: fixed;
            padding: 1rem 1.5rem;
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
            <div class="account">
                <a href="logout.php"><img src="logout2.png" alt=""></a>
            </div>
            <br>
            <div><h5>&nbsp  Logout</h5></div>
            
        </div>
    </header>
    <div class="container">
        <nav>
            <div class="side_navbar">
                <span>Main Menu</span>
                <a href="officials.php">Brgy. Officials</a>
                <a href="residents.php" class="active">Residents Info</a>
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
            <div class="list">
                <div class="list1">
                    <div class="row">
                        <h4>Profiling Records</h4>
                        <div class="search_box">
                            <form action="" method="post">
                                <input type="text" id="search" name="valueToSearch" placeholder="Search" autocomplete="off">
                                <button type="submit" name="search">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="add">
                            <a href="addResident.php"><button>Add Resident</button></a>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Alias</th>
                                <th>Birthday</th>
                                <th>Age</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            function filterTable($sql)
                            {
                                $conn = new mysqli("localhost", "root", "", "bsis");
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $filter_Result = $conn->query($sql) or die($conn->error);
                                return $filter_Result;
                            }
                            if (isset($_POST['search'])) {
                                $valueToSearch = $_POST['valueToSearch'];

                                $sql = "SELECT * FROM tblResidents WHERE CONCAT('rID', 'rFirst', 'rMid', 
                                'rLast', 'rAlias', 'rBday', 'rBplace', 'rAge', 'rCivil', 'rGender', 'rHouse',
                                'rPurok', 'rVoter', 'rPrecint', 'rPhilhealth', 'rEmail', 'rContact', 'rOccup',
                                'rCitizen') LIKE ('%" . $valueToSearch . "%')";
                                $search_result = filterTable($sql);
                            } else {
                                $sql = "SELECT * FROM tblResidents";
                                $search_result = filterTable($sql);
                            }

                            while ($row = $search_result->fetch_assoc()) : ?>
                                <tr>
                                    <td><?php echo $row['rID']; ?></td>
                                    <td><?php echo $row['rFirst']; ?></td>
                                    <td><?php echo $row['rMid']; ?></td>
                                    <td><?php echo $row['rLast']; ?></td>
                                    <td><?php echo $row['rAlias']; ?></td>
                                    <td><?php echo $row['rBday']; ?></td>
                                    <td><?php echo $row['rAge']; ?></td>
                                    <td>
                                        <div class="add">
                                            <a href="viewResident.php?rID=<?php echo $row['rID']; ?>">
                                                <button><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="editResident.php?rID=<?php echo $row['rID']; ?>">
                                                <button><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <a href="deleteResident.php?rID=<?php echo $row['rID']; ?>">
                                                <button><i class="fa fa-trash"></i></button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>