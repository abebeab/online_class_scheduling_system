<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Scheduling System</title>
    <link rel="stylesheet" href="path_to_bootstrap.css"> <!-- Add Bootstrap or other relevant CSS here -->
    <style>
        /* CSS to make the logo circular */
        .logo-circle {
            border-radius: 50%; /* Makes the image circular */
            width: 115px; /* Adjust size if needed */
            height: 90px; /* Ensure it's a square for the circle effect */
            object-fit: cover; /* Ensures the image fits nicely within the circle */
        }

        /* Additional custom styles */
        .navbar-inner {
            background-color: #333; /* Dark background for the navbar */
            color: white;
        }

        .chmsc_nav {
            margin-top: 10px;
        }

        .time_top {
            font-size: 14px;
        }

        .btn-warning {
            margin-top: 10px;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .container .brand h1 {
            margin: 0;
        }

        .navbar .container .brand .chmsc_nav {
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <!-- Logo Section -->
            <a class="branded">
                <img src="img/hlogo.jpg" class="logo-circle">
            </a>
            <!-- Title Section -->
            <a class="brand">
                <h1>Academic Scheduling System</h1>
                <div class="chmsc_nav">
                    <font size="5" style="Bookman Old Style" color="white">
                        Highland College Injibara Campus
                    </font>
                </div>
            </a>
            <!-- Date and User Info Section -->
            <div class="time_top">
                <font color="orange">
                    <?php
                        $Today = date('Y-m-d');  // Using correct format for date
                        $new = date('l, F d, Y', strtotime($Today)); // Formatted date
                        echo $new;
                    ?>
                </font>
                <br>
                <?php
                    $logout_query = mysqli_query($conn, "SELECT * FROM users WHERE User_id=$id_session");
                    $row = mysqli_fetch_array($logout_query);
                    $type = $row['User_Type'];
                ?>
                <p>
                    <font color="white">
                        Welcome: <b><?php echo $type; ?></b><br>
                        <?php echo $row['College']; ?>
                    </font>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Add Bootstrap JS and jQuery if needed -->
<script src="path_to_jquery.js"></script>
<script src="path_to_bootstrap.js"></script>

</body>
</html>
