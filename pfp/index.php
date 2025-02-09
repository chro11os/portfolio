<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
<?php 
    echo "My first PHP script!";
    $txt = "PHP";
    echo "I Love $txt";
?>

    <div class="container">
        <nav class="navbar">
            <div class="logo">Portfolio</div>
            <ul class="nav-links">
                <li><a href="/index.html">Home</a></li>
                <li><a href="/about/index.html">About</a></li>
                <li><a href="/projects/index.html">Projects</a></li>
                <li><a href="/contact/index.html">Contact</a></li>
            </ul>
        </nav>
        <div class="grid-container">
            <div class="grid-left">
                <h1>Hi! My name is Neil.</h1>
                <div class="paragraph-container">
                    <p>19-year-old Web Developer from the Philippines,</p>
                    <p>taking a Bachelor's degree in Computer Science. Currently 3rd year and graduating.</p>
                </div>
                <br>
                <div class="paragraph-container-2">
                    <h3>Technologies Used</h3>
                    <div class="carousel">
                        <div class="carousel-container">
                            <img src="/img/imgCarousel/angular.png" alt="Angular">
                            <img src="/img/imgCarousel/java.png" alt="Java">
                            <img src="/img/imgCarousel/cpp.png" alt="C++">
                            <img src="/img/imgCarousel/springboot.png" alt="Spring Boot">
                            <img src="/img/imgCarousel/python.png" alt="Python">
                        </div>
                    </div>
                </div>
                <br>
                <div class="paragraph-container-2">
                    <h3>Experience</h3>
                    <div class="tree-node">
                        <button class="tree-toggle">▶ Mapua University</button>
                        <div class="tree-content">
                            <p>Computer Science Student</p>
                            <p>Participated in local hackathons</p>
                            <p>Developed backend features for e-commerce</p>
                        </div>
                    </div>
                    <div class="tree-node">
                        <button class="tree-toggle">▶ Google Developers Student Club</button>
                        <div class="tree-content">
                            <p>Worked on open-source projects</p>
                            <p>Organized community workshops</p>
                        </div>
                    </div>
                    <div class="tree-node">
                        <button class="tree-toggle">▶ Personal Projects</button>
                        <div class="tree-content">
                            <p>Built a portfolio website</p>
                            <p>Developed a terminal tree-like structure</p>
                            <p>Created a React Native app for location tracking</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-right">
                <h1>HOME</h1>
                <img src="/img/pfpIMG.jpg">
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
