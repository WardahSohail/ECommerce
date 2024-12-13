<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - ZENiN Collection</title>
    <style>
        body {
            background-image: url('b1.jpg'); /* Replace 'background.jpg' with your image path */
            background-size: cover;
            background-attachment: fixed;
            margin: 0;
            font-family: Arial, sans-serif;
            color: black;
        }

        header {
            background-color: rgba(0, 0, 0, 0.6);
            width: 100%;
            padding: 20px 0;
        }

        h1, h2 {
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: rgba(51, 51, 51, 0.8);
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #f1c40f; /* Change hover color */
        }

        h1.main-title {
            text-align: center;
            color: black;
        }

        .contact-form, .feedback-list {
            background-color: #f9f9f9;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .contact-form:hover, .feedback-list:hover {
            transform: translateY(-5px);
            background-color: black;
            color: white;
        }

        footer {
            background-color: rgba(51, 51, 51, 0.8);
            color: lightgrey;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
            display: flex;
            justify-content: space-between; /* Ensures equal spacing between divs */
            align-items: center; /* Centers items vertically */
            flex-wrap: wrap; /* Allows wrapping on smaller screens */
        }

        footer h3 {
            margin: 10px 0;
        }

        footer a {
            color: lightgrey;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: black; /* Change hover color */
        }

        footer img {
            width: 10%;
            transition: transform 0.3s;
        }

        footer img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <header style="background-color:black;width="50%;">
        <h1 style="text-align:center;color:grey;font-family:agency FB;"><b>ZENiN Collection</b></h1>
        <h2 style="text-align: center;color:lightgrey;font-family:agency FB;">STEPPIN' TO ELEGANCE</h2>
    </header>

    <nav>
        <a href="home.html">Home</a>
        <a href="#">Shop</a>
        <a href="About Us.html">About</a>
        <a href="Contact Us.html">Contact</a>
    </nav>

   
        <!-- Display Feedback -->
        <div class="feedback-list">
            <h2>Feedback from Our Customers</h2>
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root"; // Replace with your database username
            $password = ""; // Replace with your database password
            $dbname = "website";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch feedback
            $sql = "SELECT name, feedback FROM feedback ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<p><strong>" . htmlspecialchars($row["name"]) . ":</strong> " . htmlspecialchars($row["feedback"]) . "</p>";
                }
            } else {
                echo "<p>No feedback available.</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>

    <footer>
        <div style="text-align: center;">
            <h3 style="font-family:Bodoni MT Black">Follow Us On</h3>
            <a href="https://www.facebook.com"><img src="f.jpg" alt="Facebook"></a>
            <a href="https://www.twitter.com"><img src="ii.JPG" alt="Twitter"></a>
            <a href="https://www.youtube.com"><img src="y.JPG" alt="YouTube"></a>
            <a href="https://www.instagram.com"><img src="i.JPG" alt="Instagram"></a>
            <a href="https://www.whatsapp.com"><img src="w.JPG" alt="Whatsapp"></a>
        </div>
        <div style="width:50%;text-align:center">
            <h3 style="font-family:Bodoni MT Black">CUSTOMER CARE</h3>
            <a href="privacypolicy.html">Privacy Policy</a><br>
            <a href="ordercancellationpolicy.html">Order Cancellation Policy</a><br>
            <a href="exchangepolicy.html">Exchange Policy</a><br>
        </div>
        <div style="width:50%;text-align:center">
            <h3 style="font-family:Bodoni MT Black">INFORMATION</h3>
            <a href="career.html">Career</a><br>
            <a href="About Us.html">About Us</a><br>
        </div>
    </footer>
</body>
</html>
