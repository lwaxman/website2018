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
                <h2 class="projectTitle">cityscape illustrated</h2>
                <p>As an exercise for myself in making generative art that doesn't look so much like <a href="https://www.google.com/search?q=generative+art&espv=2&biw=1259&bih=1323&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiF2eSf2PjKAhUC2D4KHVMTDZMQ_AUIBigB">generative art</a>, I wrote a script that draws cityscapes in my personal hand illustration style. It can viewed live <a href="city/index.html">here</a> (not mobile friendly).</p>
                <div class="img-group">
                    <img class="big" src="images/cityscape.jpg">
                </div>
            </div>
        </section>
        <menu>
            <?php include '../menuProject.php'; ?>
            <a href="tealights.php" class="nav">
                <svg class="label" id="previous" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:none;}</style></defs><title>point</title><g id="SVG"><g id="hand"><path class="cls-1" d="M31.83,10.69a24.08,24.08,0,0,0,.85,5.55H31.3a4.13,4.13,0,0,0-4.18,4.08s0,.07,0,.1a19.24,19.24,0,0,0,1.31,5.68H26.76a4.17,4.17,0,0,0-4.35,4q0,.18,0,.37a18.34,18.34,0,0,0,1,5.31h-14q-3.39,0-4.11.57t-.8,2.93V40.4q0,3.3,1.28,4.36t8.92,1.06H45.44q-5.26,5.68-6.88,7.88-4.39,6-1.33,11,1.51,2.49,3.49,1.29a28.84,28.84,0,0,0,5.34-4.8q3.36-3.6,5.59-5.88l13.08-13.2,2.77-.24V16.24L60,7.65a3.72,3.72,0,0,0-2.8-1.27h-21a4.2,4.2,0,0,0-4.37,4Q31.83,10.55,31.83,10.69Z"/><line class="cls-2" x1="38.91" y1="16.34" x2="32.68" y2="16.24"/></g></g></svg>
            </a>
            <a href="coasttocoast.php" class="nav">
                <svg class="label" id="next" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:none;}</style></defs><title>point</title><g id="SVG"><g id="hand"><path class="cls-1" d="M40.17,61.31a24.08,24.08,0,0,0-.85-5.55H40.7a4.13,4.13,0,0,0,4.18-4.08s0-.07,0-.1a19.24,19.24,0,0,0-1.31-5.68h1.67a4.17,4.17,0,0,0,4.35-4q0-.18,0-.37a18.34,18.34,0,0,0-1-5.31h14q3.39,0,4.11-.57t.8-2.93V31.6q0-3.3-1.28-4.36T57.3,26.18H26.56q5.26-5.68,6.88-7.88,4.39-6,1.33-11Q33.26,4.81,31.28,6a28.84,28.84,0,0,0-5.34,4.8q-3.36,3.6-5.59,5.88L7.27,29.89l-2.77.24V55.76L12,64.35a3.72,3.72,0,0,0,2.8,1.27h21a4.2,4.2,0,0,0,4.37-4Q40.17,61.45,40.17,61.31Z"/><line class="cls-2" x1="42.07" y1="36.24" x2="48.64" y2="36.24"/><line class="cls-2" x1="37.55" y1="45.9" x2="43.57" y2="45.9"/><line class="cls-2" x1="33.09" y1="55.66" x2="39.32" y2="55.76"/></g></g></svg>
            </a>
        </menu>
        <script src="../js/automatab.js"></script>
    </body>
</html>