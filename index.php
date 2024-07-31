<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>My Blog</h1>
            <?php include 'NavBar.php'; ?>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="blog-post">
                <h2>Blog Post Title 1</h2>
                <p class="date">July 31, 2024</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                <a href="#" class="read-more">Read More</a>
            </div>

            <div class="blog-post">
                <h2>Blog Post Title 2</h2>
                <p class="date">July 30, 2024</p>
                <p>Cras suscipit, quam vitae scelerisque sollicitudin, erat libero condimentum urna, quis tincidunt orci quam eget sapien.</p>
                <a href="#" class="read-more">Read More</a>
            </div>

            <div class="blog-post">
                <h2>Blog Post Title 3</h2>
                <p class="date">July 29, 2024</p>
                <p>Proin aliquam libero ac velit condimentum, at rhoncus urna consequat. Sed malesuada fringilla turpis.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 My Blog. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
