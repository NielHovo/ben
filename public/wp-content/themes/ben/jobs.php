<?php
/*
Template Name: Jobs
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ben Bäckt</title>
    <link rel='stylesheet' href='style.css'>
</head>
<?php wp_head();?>
<body>
<?php wp_body_open();?>
    <header>
        <div class="nav">  
            <a href="/">
                <h1>Ben bäckt</h1>
            </a>
            <nav id="mainnav">
                <ul>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div id="jobpage">
        <h1>Jobs available for Application:</h1>
            <div id = "jobgrid">
                <div class = "jobboard">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/job1.png" alt="Ben Bäckt">
                    
                    <h2>Macaron-Master</h2>
                    <p>Interested in making Makarons? Apply for the position of our star-cook</p>
                    <a href="">Apply</a>
                </div>
                <div class = "jobboard">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/job2.png" alt="Ben Bäckt">
                    <h2>Seasoned Baker</h2>
                    <p>Interested in making Bread? Apply for the position of our star-baker</p>
                    <a href="">Apply</a>                      
                </div>
                <div class = "jobboard">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/job3.png" alt="Ben Bäckt">
                    <h2>Cake Conditor</h2>
                    <p>Interested in making Cake? Apply for the position of our star-cake-maker</p>
                    <a href="">Apply</a>
                </div>
                <div class = "jobboard">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/job4.png" alt="Ben Bäckt">
                    <h2>Salesperson</h2>
                    <p>Interested in being underpayed? Apply for the position of our star-salesperson</p>
                    <a href="">Apply</a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="left">
            <h4>Thank you for your interest in Bakery!</h4>
            <p>© 2004 – 2023 Ben Bäckmann</p>
            <a href="#">Imprint & Privacy</a>
        </div>
    </footer>
    <script src='./main.js'></script>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
             MainNav.init();
        });
    </script>
</body>
<?php wp_footer();?>
<?php get_footer(); ?>
</html>