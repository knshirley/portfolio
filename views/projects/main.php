<script>
    $(function(){
        $('.accordion').accordion({
            heightStyle: "content"
        });
    });
</script>

<h2>Web Projects</h2>

<div class="accordion">

    <h3>Chao Stats</h3>
    <div>
        <p>( <a href="http://chaostats.com" target="_blank">demo</a> | <a href="https://github.com/ktinsley/chao" target="_blank">source</a> )</p>
        <div class="project-images">
            <a href="<?php echo SITE_ROOT;?>/includes/img/projects/chaostats-1.jpg" rel="lightbox[chao]" title="">
                <img src="<?php echo SITE_ROOT;?>/includes/img/projects/thumbs/chaostats-1.jpg">
            </a>
            <a href="<?php echo SITE_ROOT;?>/includes/img/projects/chaostats-2.jpg" rel="lightbox[chao]" title="">
                <img src="<?php echo SITE_ROOT;?>/includes/img/projects/thumbs/chaostats-2.jpg">
            </a>
            <a href="<?php echo SITE_ROOT;?>/includes/img/projects/chaostats-3.jpg" rel="lightbox[chao]" title="">
                <img src="<?php echo SITE_ROOT;?>/includes/img/projects/thumbs/chaostats-3.jpg">
            </a>
        </div>

        <p>I recently started to play Sonic Adventure 2 Battle again because it became available in the XBOX Live Arcade and this inspired me to completely redo Chao Stats with the custom PHP MVC framework I have been developing. I also took this opportunity to buy the web domain for it and make it's own fully fledged website.</p>
        <p>My plans for the site are to eventually add a user system so other people can use it, and to add variations for each of the Sonic Adventure games (Sonic Adventure, Sonic Adventure DX, and Sonic Adventure 2).</P>
    </div>

    <h3>Portfolio Website</h3>
    <div>
        <p> ( <a href="https://github.com/ktinsley/portfolio" target="_blank">source</a> ) </p>

        <p> This is referring to the website you are currently on. I've been meaning to try HTML5 boilerplate and so this website is my first attempt at integrating it into my web design/development.</p>
        <p> For the front-end, the website uses: jQuery, jQuery UI, LightBox 2 as well as HTML5 and CSS3 techniques. The back-end uses the custom PHP MVC framework that I have worked on the past few months.</p>
    </div>

    <h3>Hespeler Model Aviators</h3>
    <div>
        <p>( <a href="http://hespelermodelaviators.com" target="_blank">demo</a> )</p>
        <div class="project-images">
            <a href="<?php echo SITE_ROOT;?>/includes/img/projects/hma-1.jpg" rel="lightbox[hma]" title="">
                <img src="<?php echo SITE_ROOT;?>/includes/img/projects/thumbs/hma-1.jpg">
            </a>
            <a href="<?php echo SITE_ROOT;?>/includes/img/projects/hma-2.jpg" rel="lightbox[hma]" title="">
                <img src="<?php echo SITE_ROOT;?>/includes/img/projects/thumbs/hma-2.jpg">
            </a>
            <a href="<?php echo SITE_ROOT;?>/includes/img/projects/hma-3.jpg" rel="lightbox[hma]" title="">
                <img src="<?php echo SITE_ROOT;?>/includes/img/projects/thumbs/hma-3.jpg">
            </a>
        </div>

        <p>This is a small website I created and maintain for the RC airplane/helicopter club that my father is a part of.</p>
        <p>The navigation is entirely CSS3 and the web gallery was created using PHP and the javascript plugin <a href="http://lokeshdhakar.com/projects/lightbox2/" target="_blank">LightBox2</a>.</p>

        <p><aside>(Source omitted since it is a private website).</aside></p>
    </div>

    <h3>Sky's Content</h3>
    <div>
        <p>( <a href="http://skyscontent.com" target="_blank">demo</a> | <a href="https://github.com/ktinsley/skyscontent.com" target="_blank">source</a> )</p>
        <div class="project-images">
            <a href="<?php echo SITE_ROOT;?>/includes/img/projects/sc.jpg" rel="lightbox[sc]" title="Sky's Content main page">
                <img src="<?php echo SITE_ROOT;?>/includes/img/projects/thumbs/sc.jpg">
            </a>
        </div>

        <p>This is the oldest of the projects listed on this page. Sky's Content is a story I started writing in high school and continued for about 5 or so years. As of right now I'm not currently working on it, but I do intend on finishing up at some point. The website was created mainly so I could try HTML5, CSS3 and jQuery out for the first time.</p>

        <p>The website also has a full administration panel with screen shots posted below: </p>

        <div class="project-images">
            <a href="<?php echo SITE_ROOT;?>/includes/img/projects/sc-admin-1.jpg" rel="lightbox[sc-admin]" title="">
                <img src="<?php echo SITE_ROOT;?>/includes/img/projects/thumbs/sc-admin-1.jpg">
            </a>
            <a href="<?php echo SITE_ROOT;?>/includes/img/projects/sc-admin-2.jpg" rel="lightbox[sc-admin]" title="">
                <img src="<?php echo SITE_ROOT;?>/includes/img/projects/thumbs/sc-admin-2.jpg">
            </a>
            <a href="<?php echo SITE_ROOT;?>/includes/img/projects/sc-admin-3.jpg" rel="lightbox[sc-admin]" title="">
                <img src="<?php echo SITE_ROOT;?>/includes/img/projects/thumbs/sc-admin-3.jpg">
            </a>
        </div>
        <br/>
    </div>

</div>

<br/>

<h2>Non-Web Projects</h2>

<div class="accordion">
    <h3>XLib Game</h3>
    <div>
        <br/>
         <div class="project-images">
            <a href="<?php echo SITE_ROOT;?>/includes/img/projects/xlib.png" rel="lightbox" title="">
                <img src="<?php echo SITE_ROOT;?>/includes/img/projects/thumbs/xlib.png">
            </a>
        </div>

        <p>A side scrolling videogame written in C++ using Xlib and the X11 Pixmap library. The player controls a helicopter that moves independently of the side scrolling, and shoots bombs at missile launchers/missiles for points. The games graphics were all designed by myself using Photoshop and the helicopter is actually based off one of my father's RC helicopters.</p>
        <p><aside>(Source is omitted since this project was completed just this term)</aside></p>
    </div>

    <h3>BIBSearch</h3>
    <div>
        <p>( <a href="https://bitbucket.org/ktinsley/bibsearch" target="_blank">source</a> )</p>
        <p>Completed in a group of 2, BIBSearch is essentially a catalog of publications: books, articles, journals, proceedings, etc. It contains 3 main programs written in C++, all of which use embedded SQL to retrieve, add, modify and delete data. Personally I worked on and completed both bibcontent and bibauthor, as well as structuring of the C++ classes and writing the SQL queries.</p>
    </div>

    <h3>FunkySneakers</h3>
    <div>
        <p>( <a href="https://bitbucket.org/ktinsley/funky" target="_blank">source</a> )</p>
        <p>A C++ program that determines based off a social network graph and celebrity demand (how much money they want for advertising), the maximum possible advertising given a fixed budget. The program takes in two files - a social network formatted as an adjacency list, and a list of celibrities and how much money they 'demand' for advertising. It first uses a graph algorithm to determine a celebrities 'Advertising value' based off how many people they are connected to in the social network. Then using that advertising value and the celebrity demand, using a dynamic programming algorithm the program determines which celebrities will provide the optimal advertising given a fixed budget.
    </div>
    
    <h3>Straights</h3>
    <div>
        <p>( <a href="https://bitbucket.org/ktinsley/straights/" target="__blank">source</a> )</p>
        <p>A fully object oriented C++ program that emulates the card game Straights using the command-line. The game contains two playable versions (Regular and Alternative), and can be played with 0-4 computer players. This game was done in a group of 2.</p>
    </div>
</div>
