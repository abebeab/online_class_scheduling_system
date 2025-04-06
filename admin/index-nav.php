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
            width: 90px; /* Adjust size if needed */
            height: 70px; /* Ensure it's a square for the circle effect */
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
    </style>
</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <!-- Logo Section -->
            <a class="branded">
                <img src="img/hlogo.jpg" width="100" height="90" class="logo-circle">
            </a>
            <!-- Title Section -->
            <a class="brand">
                <h1><center>Academic Scheduling System</center></h1>
                <div class="chmsc_nav">
                    <font size="5" color="white"><center>Highland College Injibara Campus</center></font>
                </div>
            </a>
            <!-- Date and Back to Home Section -->
            <div class="time_top">    
                <font color="orange">
                    <?php
                        $Today = date('Y-m-d');  // Using correct format for date
                        $new = date('l, F d, Y', strtotime($Today)); // Formatted date
                        echo $new;
                    ?>
                </font>
                <br>
                <a href="../index.php" class="btn btn-warning">
                    <i class="icon-arrow-left icon-large"></i>&nbsp;Back to Home
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Add Bootstrap JS and jQuery if needed -->
<script src="path_to_jquery.js"></script>
<script src="path_to_bootstrap.js"></script>

</body>
</html>
