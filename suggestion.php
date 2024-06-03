<!DOCTYPE html>
<html>
<head>
    <title>Search Data by Pincode</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("https://as1.ftcdn.net/v2/jpg/06/47/42/32/1000_F_647423299_QhTRcQnNvs3Ky9EXC5IMYkImAIijRXmC.jpg");
            background-color: #f4f4f4;
            background-size:110%;
            background-position:center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .results {
            margin-top: 20px;
        }

        .results h2 {
            color: #007bff;
            margin-bottom: 10px;
        }

        .results ul {
            list-style: none;
            padding: 0;
        }

        .results li {
            margin-bottom: 5px;
        }

        .no-results {
            color: #ff6347;
        }

        .home-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .home-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="main.php" class="home-button">&#8962; Home</a>
    <div class="container">
        <form action="suggestion.php" method="post">
            <label for="pincode">Enter Pincode:</label>
            <input type="text" name="txtPincode" id="txtPincode" required>
            <input type="submit" name="action" value="Search">
        </form>

        <?php
        session_start();

        // Check if the form is submitted
        if(isset($_POST['action']) && $_POST['action'] == "Search") {
            // Get the entered pincode
            $pincode = $_POST['txtPincode'];

            // Database connection code
            $con = mysqli_connect('localhost', 'root', '', 'sakshi');

            // Query to retrieve data based on the entered pincode
            $sql = "SELECT * FROM table WHERE pincode='$pincode'";
            $result = mysqli_query($con, $sql);

            // Display the results if any
            if(mysqli_num_rows($result) > 0) {
                echo "<div class='results'>";
                echo "<h2>Data associated with Pincode $pincode:</h2>";
                echo "<ul>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<li><strong>Name:</strong> " . $row['uname'] . "</li>";
                    echo "<li><strong>Pincode:</strong> " . $row['pincode'] . "</li>";
                    echo "<li><strong>Area:</strong> " . $row['area'] . "</li>";
                    echo "<li><strong>Season:</strong> " . $row['season'] . "</li>";
                    echo "<li><strong>Crop:</strong> " . $row['crop'] . "</li>";
                    echo "<li><strong>Suggestion:</strong> " . $row['suggestion'] . "</li>";
                    echo "<br>";
                }
                echo "</ul>";
                echo "</div>";
            } else {
                echo "<p class='no-results'>No data found for Pincode $pincode</p>";
            }

            // Close the database connection
            mysqli_close($con);
        }
        ?>
    </div>
</body>
</html>