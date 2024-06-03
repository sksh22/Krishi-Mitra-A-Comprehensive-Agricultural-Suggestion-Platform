<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishi Mitra</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url("https://www.shutterstock.com/image-photo/indian-rural-farmer-using-laptop-260nw-1409543969.jpg");
            background-color: #f4f4f4;
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 80%;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-container h1 {
            margin-top: 0;
            color: #007bff;
            font-size: 36px;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-container input[type="submit"] {
            padding: 12px 24px;
            font-size: 18px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            margin: 10px 0;
            width: 80%;
            max-width: 300px;
            outline: none;
        }

        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
<div class="form-container">
    <h1>Welcome to Krishi Mitra!!!</h1>
    <form name="form1" action="example.php" method="post">
        <input type="submit" name="submit1" value="Add Your Suggestion">
    </form>
    <form name="form2" action="suggestion.php" method="post">
        <input type="submit" name="submit2" value="Search for Suggestions">
    </form>
</div>
</body>
</html>