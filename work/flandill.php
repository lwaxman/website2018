<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laurie Waxman</title>
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        <canvas id="canvas"></canvas>
        <section id="project">
            <div id="projectcontent">
               <h2 class="projectTitle">FLANDILL</h2>
                <p>A digital ecosystem set on the fictional planet of Flandill.</p>
                <p>Once a beautiful and peaceful place, humans have since discovered the planet, depleting its resources and polluting its air. The creatures that live there, "deebs," are an endangered species. If during your visit to the site you kill one of these deebs, that deeb is dead, forever&mdash;R.I.P. Phil. All of our actions have effects, however insignificant they may seem, so just by visiting Flandill&mdash;whether or not you pick the flowers or scare the deebs&mdash;you add pollutants to Flandill's ecosystem. As these pollutants add up, the health of the planet deteriorates, visibly. If the <a href="p://www.theguardian.com/environment/planet-oz/2016/may/20/carbon-dioxides-400ppm-milestone-shows-humans-are-re-writing-the-planets-history">atmospheric pollution breaches 400ppm</a>, Flandill will be forever transformed, and the deebs face extinction. Every day the planet goes without a visit, its air clears slightly.</p>
                <div class="img-group">
                    <video class="big" controls="controls" autoplay="true" loop="true" name="Flandill Good Health" src="images/deebs_happy.mov"></video>
                </div>
                <p>Somewhat ironically, by visiting the site, there are real environmental effects on Earth. The web, in my opinion, is one of the least talked about environmental concerns of our age. It takes ridiculous amounts of energy to power, and it's getting exponentially bigger every year. To counteract this real life consqeuence, Flandill (and my personal site that you're currently on) are served by a <a href="https://asmallorange.com/">sustainable web host</a>. The data stored to generate Flandill also overwrites itself on each visit, rather than creating a new file, in order to manage server storage, and it isn't dependant on any Javascript libraries.</p> 
                <p>Data is read and stored to the server through XML HTTP requests, as JSON. To create the animation, I wrote a small JS library that runs in a canvas, similiar to P5, with only the functions I required, in the felt-tip marker aesthetic I desired; all curves and lines jitter slightly to emulate frame-by-frame hand drawn animation.</p>
                <div class="img-group">
                    <img class="big" src="images/flandill_ok.jpg">
                    <img class="big" src="images/flandill_dead.jpg">
                </div>
                <p>If you made it all the way down here, I'll add this... my one qualm with Flandill is the level of interactivity; it feels like there should be more to do, but there isn't. Flandill is what it is now, but it's inspired a new project in a similar vein, that would generate a video animation, rather than interactive. It would allow me to render more than one scene, and at a fixed frame size, but still be a new animation any time the page was loaded. I haven't quite fleshed out what it's to be, but I'm excited. Keep an eye out on my <a href="http://blog.lauriewaxman.com/">blog</a>.</p> 
            </div>
        </section>
        <menu>
            <?php include '../menuProject.php'; ?>
            <a href="newnewyork.php" class="nav">
                <svg class="label" id="previous" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:none;}</style></defs><title>point</title><g id="SVG"><g id="hand"><path class="cls-1" d="M31.83,10.69a24.08,24.08,0,0,0,.85,5.55H31.3a4.13,4.13,0,0,0-4.18,4.08s0,.07,0,.1a19.24,19.24,0,0,0,1.31,5.68H26.76a4.17,4.17,0,0,0-4.35,4q0,.18,0,.37a18.34,18.34,0,0,0,1,5.31h-14q-3.39,0-4.11.57t-.8,2.93V40.4q0,3.3,1.28,4.36t8.92,1.06H45.44q-5.26,5.68-6.88,7.88-4.39,6-1.33,11,1.51,2.49,3.49,1.29a28.84,28.84,0,0,0,5.34-4.8q3.36-3.6,5.59-5.88l13.08-13.2,2.77-.24V16.24L60,7.65a3.72,3.72,0,0,0-2.8-1.27h-21a4.2,4.2,0,0,0-4.37,4Q31.83,10.55,31.83,10.69Z"/><line class="cls-2" x1="38.91" y1="16.34" x2="32.68" y2="16.24"/></g></g></svg>
            </a>
            <a href="airquality.php" class="nav">
                <svg class="label" id="next" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:none;}</style></defs><title>point</title><g id="SVG"><g id="hand"><path class="cls-1" d="M40.17,61.31a24.08,24.08,0,0,0-.85-5.55H40.7a4.13,4.13,0,0,0,4.18-4.08s0-.07,0-.1a19.24,19.24,0,0,0-1.31-5.68h1.67a4.17,4.17,0,0,0,4.35-4q0-.18,0-.37a18.34,18.34,0,0,0-1-5.31h14q3.39,0,4.11-.57t.8-2.93V31.6q0-3.3-1.28-4.36T57.3,26.18H26.56q5.26-5.68,6.88-7.88,4.39-6,1.33-11Q33.26,4.81,31.28,6a28.84,28.84,0,0,0-5.34,4.8q-3.36,3.6-5.59,5.88L7.27,29.89l-2.77.24V55.76L12,64.35a3.72,3.72,0,0,0,2.8,1.27h21a4.2,4.2,0,0,0,4.37-4Q40.17,61.45,40.17,61.31Z"/><line class="cls-2" x1="42.07" y1="36.24" x2="48.64" y2="36.24"/><line class="cls-2" x1="37.55" y1="45.9" x2="43.57" y2="45.9"/><line class="cls-2" x1="33.09" y1="55.66" x2="39.32" y2="55.76"/></g></g></svg>
            </a>
        </menu>
        <script src="../js/automatab.js"></script>
    </body>
</html>