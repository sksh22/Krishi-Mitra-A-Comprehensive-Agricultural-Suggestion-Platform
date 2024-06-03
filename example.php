<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("https://media.istockphoto.com/id/491267876/photo/cauliflower-plantation.jpg?s=612x612&w=0&k=20&c=yik3O4bFOUYvpgTw5BhpRsYPsC4KR0yXXMgRWg6Bqws=");
            background-color: #f4f4f4;
            background-size:100%;
            background-position:center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        .button-container {
            text-align: center;
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
<form action="example.php" method="post">
    <label for="Name">Name:</label>
    <input type="text" name="txtName" id="txtName" required>
    <br>
    <label for="pincode">Pincode:</label>
    <input type="text" name="txtPincode" id="txtPincode" required>
    <br>
    <label for="Area">Area:</label>
    <input type="text" name="txtArea" id="txtArea">
    <br>
    <label for="Season">Season:</label>
    <input type="text" name="txtSeason" id="txtseason">
    <br>
    <label for="crop">Crop:</label>
    <input type="text" name="txtCrop" id="txtCrop">
    <br>
    <label for="suggestion">Suggestion:</label>
    <textarea name="txtSuggestion" id="txtSuggestion"></textarea>
    <br>
    <div class="button-container">
        <input type="submit" name="action" value="Save">
        <input type="submit" name="action" value="Update">
        <input type="submit" name="action" value="Delete">
    </div>
</form>
</body>
</html>

<?php
session_start();

if(isset($_POST['action']))
{
    $action = $_POST['action'];

    // database connection code
    $con = mysqli_connect('localhost', 'root', '', 'sakshi');

    if($action == "Save")
    {
        $txtName = $_POST['txtName'];
        $txtPincode = $_POST['txtPincode'];
        $txtArea = $_POST['txtArea'];
        $txtSeason = $_POST['txtSeason'];
        $txtCrop = $_POST['txtCrop'];
        $txtSuggestion = $_POST['txtSuggestion'];
        $sql = "INSERT INTO table (uname, pincode, area, season, crop, suggestion) VALUES ('$txtName', '$txtPincode', '$txtArea', '$txtSeason', '$txtCrop', '$txtSuggestion')";
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "<script>alert('Record Inserted');</script>";
        }
        else
        {
            echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
        }
    }
    elseif($action == "Update")
    {
        $txtName = $_POST['txtName'];
        $txtPincode = $_POST['txtPincode'];
        $txtArea = $_POST['txtArea'];
        $txtSeason = $_POST['txtSeason'];
        $txtCrop = $_POST['txtCrop'];
        $txtSuggestion = $_POST['txtSuggestion'];
        $sql = "UPDATE table SET pincode='$txtPincode', area='$txtArea', season='$txtSeason', crop='$txtCrop', suggestion='$txtSuggestion' WHERE uname='$txtName'";

        if(mysqli_query($con, $sql))
        {
            echo "<script>alert('Record updated successfully');</script>";
        }
        else
        {
            echo "<script>alert('Error updating record: " . mysqli_error($con) . "');</script>";
        }
    }
    elseif($action == "Delete")
    {
        $txtName = $_POST['txtName'];
        $sql = "DELETE FROM table WHERE uname='$txtName'";
        if(mysqli_query($con, $sql))
        {
            echo "<script>alert('Record deleted successfully');</script>";
        }
        else
        {
            echo "<script>alert('Error deleting record: " . mysqli_error($con) . "');</script>";
        }
    }
    else
    {
        echo "<script>alert('Invalid action');</script>";
    }
}
?>