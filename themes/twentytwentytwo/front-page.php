<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta content="no" name="msapplication-tap-highlight">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Description du site" />
    <!--empeche la traduction automatique-->
    <meta name="google" value="notranslate">
    <title>Site de Raph !</title>
    <link rel="stylesheet" href="static/style.min.css">
    <link rel="shortcut icon" href="./static/images/icons/alogo-1.svg">
    <link rel="manifest" href="./static/manifest.json">
    <!-- <link rel="apple-touch-icon" href="./static/images/icons/alogo-1.svg"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <script src="https://apis.google.com/js/platform.js"></script>
</head>

<body>
    <nav class="raph-navbar" role="navigation" aria-label="navigation" id="raph-navbar">
        <raph-navbar__tools>
            <!--                 <menu-opener>
                    <button class="menu-opener__icon" type="button" style="margin: 0; min-width: 0;">
                        <img src="static/images/icons/ic_menu_black_24dp_1x.png" alt="menu">
                        <span style="color: #202020; font-size: 10px; line-height: 1; font-weight: 600;">menu</span>
                    </button>
                </menu-opener> -->

            <raph-navbar__title>
                <object data="static/images/icons/alogo-1.svg" type="image/svg+xml">logo</object>
                <span>Raph's</span>
            </raph-navbar__title>
            <raph-navbar_links>
                <raph-navbar_links__link selected>HOME</raph-navbar_links__link>
                <raph-navbar_links__link>ABOUT ME</raph-navbar_links__link>
                <raph-navbar_links__link>COACHING</raph-navbar_links__link>
                <raph-navbar_links__link><a href="./tavern.html">THE TAVERNE</a></raph-navbar_links__link>
                <raph-navbar_links__link>TWITCH</raph-navbar_links__link>
                <raph-navbar_links__link>CONTACT</raph-navbar_links__link>
                <raph-navbar_links__link>ARTICLES</raph-navbar_links__link>
            </raph-navbar_links>
        </raph-navbar__tools>
    </nav>
    <raph-wrapper>
        <raph-wrapper__content id="content">

            <content-pre>Welcome</content-pre>

            <raph-presentation>
                <img src="./static/images/photos/the_raph.jpg" alt="some photo">
                <p>Lorem ipsum dolor sit amet, ne quod novum mei. Sea omnium invenire mediocrem at, in lobortis conclusionemque nam. Ne deleniti appetere reprimique pro, inani labitur disputationi te sed. At vix sale omnesque, id pro labitur reformidans
                    accommodare, cum labores honestatis eu. Nec quem lucilius in, eam praesent reformidans no. Sed laudem aliquam ne.</p>

                <p>
                    Facete delenit argumentum cum at. Pro rebum nostrum contentiones ad. Mel exerci tritani maiorum at, mea te audire phaedrum, mel et nibh aliquam. Malis causae equidem vel eu. Noster melius vis ea, duis alterum oporteat ea sea. Per cu vide munere fierent.
                </p>

                <p>
                    Ad sea dolor accusata consequuntur. Sit facete convenire reprehendunt et. Usu cu nonumy dissentiet, mei choro omnes fuisset ad. Te qui docendi accusam efficiantur, doming noster prodesset eam ei. In vel posse movet, ut convenire referrentur eum, ceteros
                    singulis intellegam eu sit.
                </p>

                <p>
                    Sit saepe quaestio reprimique id, duo no congue nominati, cum id nobis facilisi. No est laoreet dissentias, idque consectetuer eam id. Clita possim assueverit cu his, solum virtute recteque et cum. Vel cu luptatum signiferumque, mel eu brute nostro senserit.
                    Blandit euripidis consequat ex mei, atqui torquatos id cum, meliore luptatum ut usu. Cu zril perpetua gubergren pri. Accusamus rationibus instructior ei pro, eu nullam principes qui, reque justo omnes et quo.
                </p>

                <p>
                    Sint unum eam id. At sit fastidii theophrastus, mutat senserit repudiare et has. Atqui appareat repudiare ad nam, et ius alii incorrupte. Alii nullam libris his ei, meis aeterno at eum. Ne aeque tincidunt duo. In audire malorum mel, tamquam efficiantur
                    has te.
                </p>
            </raph-presentation>
            <content-medias>
                <twitch>
                    <twitch-video-container style="padding-bottom: 56.25%; position: relative;">
                        <iframe width="100%" height="100%" title="twitch player" src="https://player.twitch.tv/?channel=raphaellevy&parent=www.raphlevy.com" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture; fullscreen" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                            <small>Twitch embedding powered by <a href="https://embed.tube">embed.tube</a></small>
                        </iframe>
                    </twitch-video-container>
                </twitch>
            </content-medias>
            <div id="divFeed"></div>
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 4, // Number of recent posts thumbnails to display
                'post_status' => 'publish' // Show only the published posts
            ));
            foreach ($recent_posts as $post_item) {
                setup_postdata($post_item);
                ?>

                <raph-presentation>
                    <a href="<?php echo get_permalink($post_item['ID']) ?>">
                        <?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>
                        <h1><?php echo get_the_title($post_item['ID']); ?></h1>
                        <p><?php echo get_the_excerpt($post_item['ID']); ?></p>
                    </a>
                </raph-presentation>
            <?php 
                wp_reset_postdata();
            } ?>

        </raph-wrapper__content>
        <nav class="raph-socials" aria-label="socials buttons">
            <raph-socials__tools>

                <a class="raph-socials__icon" href="https://twitter.com/raphlevymtg">
                    <object data="static/images/icons/icons8-facebook-50.svg" type="image/svg+xml"></object>
                </a>
                <a class="raph-socials__icon" href="https://twitter.com/raphlevymtg">
                    <object data="static/images/icons/icons8-instagram-50.svg" type="image/svg+xml"></object>
                </a>
                <a class="raph-socials__icon" href="https://twitter.com/raphlevymtg">
                    <object data="static/images/icons/icons8-tiktok-50.svg" type="image/svg+xml"></object>
                </a>
                <a class="raph-socials__icon" href="https://twitter.com/raphlevymtg">
                    <object data="static/images/icons/icons8-twitter-50.svg" type="image/svg+xml"></object>
                </a>
                <a class="raph-socials__icon" href="https://www.youtube.com/channel/UCelnNVqwjQpi7ttIREZ2A6A">
                    <object data="static/images/icons/icons8-youtube-50.svg" type="image/svg+xml"></object>
                </a>
                <a class="raph-socials__icon" href="https://twitter.com/raphlevymtg">
                    <object data="static/images/icons/icons8-discord.svg" type="image/svg+xml"></object>
                </a>
            </raph-socials__tools>
        </nav>
    </raph-wrapper>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<!-- <script type="text/javascript" src="FeedEk.min.js"></script> -->
<script type="module" src="static/index.js "></script>


</html>