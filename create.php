<?php
// create.php
include 'db_conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
    
    // Validate form fields
    $errors = [];
    
    // Name validation
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    
    // Email validation
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    
    // Mobile validation
    if (empty($mobile)) {
        $errors[] = "Mobile number is required.";
    } elseif (!preg_match('/^[0-9]{10}$/', $mobile)) {
        $errors[] = "Mobile number must be 10 digits.";
    }
    
    // Message validation
    if (empty($message)) {
        $errors[] = "Message is required.";
    }
    
    // File validation (PDF upload)
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        $allowedTypes = ['application/pdf'];
        $fileType = $_FILES['resume']['type'];
        if (!in_array($fileType, $allowedTypes)) {
            $errors[] = "Only PDF files are allowed for resume.";
        } else {
            $fileName = time() . '-' . $_FILES['resume']['name'];
            $uploadDir = 'uploads/';
            if (!move_uploaded_file($_FILES['resume']['tmp_name'], $uploadDir . $fileName)) {
                $errors[] = "Failed to upload resume.";
            }
        }
    } else {
        $errors[] = "Resume file is required.";
    }

    // If no errors, insert data into the database
    if (empty($errors)) {
        $sql = "INSERT INTO users (name, email, mobile, message, resume) VALUES ('$name', '$email', '$mobile', '$message', '$fileName')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<div class='success'>New record created successfully.</div>";
        } else {
            echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo "<div class='error'>$error</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-top: 30px;
        }

        .form-container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            font-size: 16px;
            margin-bottom: 8px;
            color: #333;
            display: block;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
        }

        .form-container textarea {
            resize: vertical;
            height: 100px;
        }

        .form-container button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        /* Error and Success messages */
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .success {
            color: green;
            font-size: 14px;
            margin-bottom: 15px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .form-container {
                width: 80%;
            }
        }

        @media (max-width: 480px) {
            .form-container {
                width: 100%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<h2>Create User</h2>

<div class="form-container">
    <form action="create.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="mobile">Mobile:</label>
        <input type="text" name="mobile" required><br>

        <label for="message">Message:</label>
        <textarea name="message" required></textarea><br>

        <label for="resume">Upload Resume (PDF only):</label>
        <input type="file" name="resume" required><br>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
