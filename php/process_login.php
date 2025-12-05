<?php
// This file is saved as process_login.php

// Check if the form was submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Check if the required fields are set
    // These names must match the 'name' attributes in the index.php form
    if (isset($_POST['login_email']) && isset($_POST['login_password'])) {
        
        // 1. Capture and sanitize the data
        $email = htmlspecialchars($_POST['login_email']);
        $password = htmlspecialchars($_POST['login_password']);
        
        // Optional: Capture the program selected
        $program = isset($_POST['program']) ? htmlspecialchars($_POST['program']) : 'Not Selected';
        
        // 2. Output the captured data in an HTML page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Results</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="css/style.css"> 
    <style>
        .result-container {
            padding: 50px;
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        .result-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .result-table th, .result-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .result-table th {
            background-color: #f8f8f8;
        }
        .password-warning {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h2>✅ Submission Successful!</h2>
        <p>Your PHP script running on **XAMPP** successfully received the following form data:</p>
        
        <table class="result-table">
            <tr>
                <th>Field</th>
                <th>Value Received</th>
            </tr>
            <tr>
                <td>Email (login_email):</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Password (login_password):</td>
                <td class="password-warning"><?php echo $password; ?></td>
            </tr>
             <tr>
                <td>Program of Interest:</td>
                <td><?php echo $program; ?></td>
            </tr>
        </table>
        
        <blockquote>
            ⚠️ **SECURITY WARNING:** Displaying passwords like this is **EXTREMELY UNSAFE** and is only for local demonstration purposes. In a real application, passwords must be securely hashed immediately.
        </blockquote>
        <a href="index.php" class="cta-primary" style="display: inline-block; margin-top: 20px;">Go Back to Home Page</a>
    </div>
</body>
</html>

<?php
    } else {
        // Fallback for missing fields
        echo "Error: Required fields (Email/Password) were not sent. Please go back and try again.";
    }
} else {
    // Redirect if the user tries to access this file directly
    header('Location: index.php');
    exit();
}
?>