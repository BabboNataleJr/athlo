<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!-- <link rel="stylesheet" href="/assets/css/ghibli_style.css"> -->
     <link rel="stylesheet" href="/assets/css/reset.css"></link>
     <link rel="stylesheet" href="/assets/css/generic_style.css"></link>
     <link rel="stylesheet" href="/assets/css/menu_style.css"></link>
     <link rel="stylesheet" href="/assets/css/exercise_card_style.css"></link>
     <link rel="stylesheet" href="/assets/css/homepage_style.css">
</head>
<body>
    <header>
        <div class="menu-head-wrapper">
            <div class="title-logo-wrapper">
                <h1>Athlo</h1>
            </div>
            <div class="menu-wrapper">
                <nav>
                    <ul class="athlo-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/exercises/list">Exercises</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <?php echo $output; ?>
    </main>

    <footer>
        <p>&copy; 2024 Athlo. All rights reserved.</p>
    </footer>
</body>
</html>