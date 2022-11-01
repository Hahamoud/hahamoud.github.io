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
                <p>
                    Raphaël Lévy is a Professional Magic Player from Toulouse, France. He was inducted into the Magic Pro Tour Hall of Fame in November 2006. He has 6 PT Top 8's and 6 GP wins to his name and led the French team to victory in the 2013 World Magic Cup.
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