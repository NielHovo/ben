<?php
?>
<!--
    TODO: – Add title
    – Add keywords & description
    - Run https://realfavicongenerator.net/ for favicons, tile & touchicons
    – Run https://realfavicongenerator.net/social for og image & info
    - Edit privacy info
    - Create E-mail-address datenschutz@
    – Host fonts locally with https://google-webfonts-helper.herokuapp.com/fonts
-->

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
                    <li><a href="#workshops">Philosophie</a></li>
                    <li><a href="#about">Workshops</a></li>
                    <li><a href="#news">Jobs</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <h1 id="hero">Ben Bäckt</h1>
        <h2>The 3 Ammendments of Baking</h2>
        <section id="philosophy">
            <div class="text">
                <h3>love</h3>
                <p>Test1dsfdsfasfsdfdfdsafsd fdsfbdsijfbdsjfbsdfbd sbfisbsibsdibzsd bibidfnvodbgijfyu gdffhysngin</p>
            </div>
            <img src="" alt="">

            <div class="text">
                <h3>bread</h3>
                <p>Testadfasdfsadfs adfsadfsadfsdfsfsdfsddfsad fsdd fdsfasfsddfasdfasfdsad</p>
            </div>
            <img src="" alt="">

            <div class="text">
                <h3>everywhere</h3>
                <p>Tesfadsfasdfasdfasdfsadt</p>
            </div>
            <img src="" alt="">
        </section>
        <h2>Learn from the baest</h2>
        <section id="workshops">
            <div class="column">
                <p>Lorem dsnsfjasnfingjorem dsnsfja asdsadsad saf sdf sdfsdfdsfdsfsadf sdfsdf sdf sdfsfsdf snfingjndjsdfjnsofnsjfndjfnisdnforem dsnsfja asdsadsad saf sdf sdfsdfdsfdsfsadf sdfsdf sdf sdfsfsdf snfingjndjsdfjnsofnsjfndjfnisdnforem dsnsfja asdsadsad saf sdf sdfsdfdsfdsfsadf sdfsdf sdf sdfsfsdf snfingjndjsdfjnsofnsjfndjfnisdnfndjsdfjnsofnsjfndjfnisdnf</p>
                <button>Book now</button>
            </div>
            <img src="" alt="">
        </section>
        <h2>Work alongside Ben</h2>
        <section id="jobs">
            <img src="" alt="">
            <div class="column">
                <p>Lorem dsnsfja asdsadsad saf sdf sdfsdfdsfdsfsadf sdfsdf sdf sdfsfsdf snfingjndjsdfjnsofnsjfndjfnisdnf</p>
                <button>Apply</button>
            </div>
            <div id="box"></div>
        </section>
    </main>

    <footer>
        <div class="left">
            <h4>Thank you for your interest in Bakery!</h4>
            <p>© 2004 – 2023 Ben Bäckmann</p>
        </div>
        <a class="right" href="#">Imprint & Privacy</a>
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