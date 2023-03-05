<?php
/*
Template Name: Homepage
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
                    <li><a href="#philosophy">Philosophie</a></li>
                    <?php
                        wp_nav_menu(array(
                        'theme_location' => 'main-menu', // the name of the menu you created
                        'menu_class' => 'main-menu', // the class for the menu <ul> element
                        ));
                    ?>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <img id="hero" src="<?php echo get_template_directory_uri(); ?>/images/background.png" alt="Ben Bäckt">
        <h2>The 3 Ammendments of Baking</h2>
        <section id="philosophy">
            <div class="text">
                <h3>Bread</h3>
                <p>Begonnen hat alles vor 6000 Jahren, im heutigen Ägypten wurde das aller erste Brot gebacken.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/bread.png" alt="Bread">
            <img src="<?php echo get_template_directory_uri(); ?>/images/baker.png" alt="Baker">
            <div class="text">
                <h3>Baking</h3>
                <p>Ohne unsere Bäckermeister wären wir nicht wo wir heute sind, darum sind uns Mitarbeiter genauso wichtig wie unsere Kunden, das schmeckt man auch raus.</p>
            </div>


            <div class="text">
                <h3>Ben</h3>
                <p>Nicht vor 6000 Jahren aber vor 16 Jahren hat Ben seinen Traum realisiert seine eigene Bäckerei, und mit genauso viel Begeisterung wird er uns die nächsten 6000 Jahre bebacken.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/ben.png" alt="Ben">
        </section>
        <h2>Learn from the bæst</h2>
        <section id="workshops">
            <div class="column">
                <p>Egal ob Profi oder Anfänger, Ben nimmt sich für euch Zeit und macht euch in kürzester Zeit zum Bäckermeister.</p>
                <button>Book now</button>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/jobs.png" alt="">
        </section>
        <h2>Work alongside Ben</h2>
        <section id="jobs">
            <img src="<?php echo get_template_directory_uri(); ?>/images/jobs2.png" alt="">
            <div class="column">
                <p>Dann werde Teil von Ben Bäckt, und mach dein Hobby zum Beruf. Täglich neue Herausforderungen, gratis Backwaren für daheim und viele weitere Boni warten auf dich. </p>
                <button>Apply</button>
            </div>
            <div id="box"></div>
        </section>
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
</html>