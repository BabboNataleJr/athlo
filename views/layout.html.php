<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <h1>Athlo</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/exercises">Exercises</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php echo $output; ?>
    </main>

    <footer>
        <p>&copy; 2024 Athlo. All rights reserved.</p>
    </footer>
</body>
</html>