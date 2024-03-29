<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap" rel="stylesheet" />
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <title>moek's projects</title>
</head>
<body>

<?= 
    require('components/header.php');
?>

<?= 
    $project1_title = 'HTML CSS Website';
?>

<section id="projects" class="projects-section">
    <h2 class="projects-section-header">These are some of my projects</h2>

    <div class="projects-grid">
        <!-- first item -->
        <a href="static-projects/interior-studio.php" target="_blank" class="project project-tile">
            <img class="project-image" src="img/interior-studio-homepage.png" alt="tribute page">
            <p class="project-title">
                <span class="code">&lt;</span>
                <?= $project1_title ?>
                <span class="code"> &#47;&gt;</span>
            </p>
        </a>

        <!-- first item -->
        <a href="https://codepen.io/moek/full/PoZvLvr" target="_blank" class="project project-tile">
            <img class="project-image" src="https://raw.githubusercontent.com/freeCodeCamp/cdn/master/build/testable-projects-fcc/images/tribute.jpg" alt="tribute page">
            <p class="project-title">
                <span class="code">&lt;</span>
                HTML CSS Tribute Page
                <span class="code"> &#47;&gt;</span>
            </p>
        </a>

        <!-- another item -->
        <a href="https://codepen.io/moekdev/full/eYJqbpz" target="_blank" class="project project-title">
            <img class="project-image" src="img/landing.png" alt="landing page">
            <p class="project-title">
                <span class="code">&lt;</span>
                HTML CSS Landing Page
                <span class="code">&#47;&gt;</span>
            </p>
        </a>

        <!-- another item -->
        <a href="https://codepen.io/moekdev/full/ExKjKmm" target="_blank" class="project project-title">
            <img class="project-image" src="img/documentation.png" alt="documentation JS page">
            <p class="project-title">
                <span class="code">&lt;</span>
                HTML CSS Documentation Page
                <span class="code">&#47;&gt;</span>
            </p>
        </a>

        <!-- another item -->
        <a href="#" target="_blank" class="project project-title">
            <img class="project-image" src="img/student.png" alt="student website">
            <p class="project-title">
                <span class="code">&lt;</span>
                HTML CSS Student Website
                <span class="code">&#47;&gt;</span>
            </p>
        </a>

        <!-- another item -->
        <a href="#" target="_blank" class="project project-title">
            <img class="project-image" src="img/my2.jpg" alt="movies and tv-shows website">
            <p class="project-title">
                <span class="code">&lt;</span>
                HTML CSS Movies & TV Shows Website
                <span class="code">&#47;&gt;</span>
            </p>
        </a>

        <!-- another item -->
        <a href="#" target="_blank" class="project project-title">
            <img class="project-image" src="img/shop.jpg" alt="clothes website">
            <div class="caption" onclick="view('img/shop.jpg')">
            <p class="project-title">
                <span class="code">&lt;</span>
                HTML CSS Clothes & Sneakers Website
                <span class="code">&#47;&gt;</span>
            </p>
        </div>
        </a>

         <!-- another item -->
        <a href="#" target="_blank" class="project project-title">
            <img class="project-image" src="img/estetdent.png" alt="dental clinic website">
            <p class="project-title">
                <span class="code">&lt;</span>
                HTML CSS JS PHP Dental Clinic Website
                <span class="code">&#47;&gt;</span>
            </p>
        </a>
    </div>

</section>

<!-- start contact section -->

<section id="contact" class="contact-section">
    <div class="contact contact-section-header">
      <h2>Let's work together..</h2>
      <p>How do you take me?</p>
    </div>
    
    <div class="contact-links">
      <!-- twitter -->
      <a href="https://www.twitter.com/themackmyers" target="_blank" class="btn contact-details"> <i class="fab fa-twitter-square"></i> Twitter</a>
  
      <!-- facebook -->
      <a href="https://www.facebook.com/devmoek" target="_blank" class="btn contact-details"> <i class="fab fa-facebook-square"></i> Facebook</a>
  
      <!-- github -->
      <a id="profile-link" href="https://github.com/devmoek" target="_blank" class="btn contact-details"><i class="fab fa-github-square"></i> GitHub</a>
  
      <!-- email -->
      <a href="mailto:moekdeveloper@gmail.com" class="btn contact-details" target="_blank"><i class="fas fa-at"></i> Send a email</a>
  
      <!-- linkedin -->
      <a href="https://www.linkedin.com/in/devmoek/" class="btn contact-details" target="_blank"><i class="fab fa-linkedin-in"></i> Linkedin</a>
  
      <!-- youtube -->
      <a href="https://www.youtube.com/channel/UCJODJujAcKjr58gl_ltPmyg" class="btn contact-details" target="_blank"><i class="fab fa-youtube"></i> YouTube</a>
  
      <!-- youtube -->
        <a href="https://moek.substack.com" class="btn contact-details" target="_blank"><i class="fas fa-blog"></i> Blog</a>
        
      <!-- youtube -->
      <a href="https://moek.website" class="btn contact-details" target="_blank"><i class="fas fa-link"></i> Russian Website</a>
      
    </div>
  </section>
  
  <!-- end contact section -->

<footer>

    &copy; Created by
    <a href="https://www.linkedin.com/in/moekmyers/" target="_blank">moek</a>
</footer>
</body>
</html>