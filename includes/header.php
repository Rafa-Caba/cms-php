<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous">
        <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
        <link rel="stylesheet" href="/css/styles.css">
        <title>My List</title>
    </head>
    <body>
    <div class="container">
        <header>
            <h1>My Blog</h1>
        </header>

        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                
                <?php if (Auth::isLoggedIn()) : ?>

                    <li class="nav-item"><a class="nav-link" href="/admin/">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="/logout.php">Log out</a></li>
                
                <?php else : ?>

                    <li class="nav-item"><a class="nav-link" href="/login.php">Log in</a></li>

                <?php endif; ?>

                <li class="nav-item"><a class="nav-link" href="/contact.php">Contact</a></li>
            </ul>
        </nav>

        <main>