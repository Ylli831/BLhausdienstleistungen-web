
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BL Hausdienstleistungen - About Us</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="background-color: #F5F5DC;">
    <?php include('../components/header.php'); ?>
<div class="space" style="margin: 200px;">
    <h1>Contact Us</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>
        <br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>

        <button type="submit">Send Message</button>
    </form>
</div>