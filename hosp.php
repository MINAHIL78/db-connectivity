<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Hospital Management System</title>
</head>
<body>
    <header>
        <h1>Hospital Management System</h1>
        <nav>
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=doctors">Doctors</a></li>
                <li><a href="index.php?page=appointments">Appointments</a></li>
            </ul>
        </nav>
    </header>

    <main id="main-content">
        <?php
            // Load content based on the 'page' parameter
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            include($page . '.php');
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Hospital Management System</p>
    </footer>
    <h2>Welcome to our Hospital</h2>
<p>This is the homepage of our hospital management system.</p>

</body>
</html>
