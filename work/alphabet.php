<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laurie Waxman</title>
        <link rel="stylesheet" href="../css/main.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.min.js"></script>s
    </head>
    <body>
        <canvas id="canvas"></canvas>
        <section id="project">
            <div id="projectcontent">
                <h2 class="projectTitle">ALPHABET ITERATIONS</h2>
                <p>A multipart typographic experiment inspired by anonymous interactions on the internet.</p>
                <p>In its first iteration, I ran a roughed up version of <a href="https://en.wikipedia.org/wiki/Conway%27s_Game_of_Life">Conway’s Game of Life</a> over some letters to see its effects on typography. I tried several versions of the algorithm before landing on this one, which I thought was pretty darn sweet. Next, I put it to use.</p>
                <div class="img-group">
                    <img class="big lazy" data-src="images/alphabet2.jpg" alt="alphabet iteration poster">  
                    <img class="big lazy" data-src="images/alphabet1.gif" alt="alphabet iteration animated">
                </div>
                <p>The internet's anonymous hive-mind mentality can often get out of control. In December 2013, Justine Sacco&mdash;senior director of corporate communications at IAC&mdash;made a rather daft mistake. Just before boarding a plane, she posted a tweet. Sam Biddle, an employee at Gawker, happened on the Sacco’s tweet and shared it.</p>
                <blockquote>“And now, a funny Holiday joke from IAC's PR Boss: 'Going to Africa. Hope I don’t get AIDS. Just kidding. I’m white!'</br>— Justine Sacco (@JustinSacco) December 20, 2013”</blockquote>
                <p>With Biddle’s following, the tweet spread like wildfire, and Sacco was suddenly subject to hate-mail, threats and other forms of cyber-bullying. Within hours, thousands of people had seen and shared her tweet, but while all this was happening, Justine Sacco sat comfortably on a plane destined for South Africa and her own downfall.</p>
                <p>Using this case as an example, I applied my typographical distortion to the replies to Sam Biddles repost, in escalating iterations to emulate the procession of the event. The whole book was generated in Processing, and is bound in French-fold, with the original undistorted replies hidden in the interiors.</p>
                <div class="img-group">
                    <img class="big lazy" data-src="images/alphamata1.jpg" alt="Justine Sacco book">
                    <img class="big lazy" data-src="images/alphamata2.jpg" alt="Justine Sacco book">
                    <img class="big lazy" data-src="images/alphamata3.jpg" alt="Justine Sacco book">
                    <img class="big lazy" data-src="images/alphamata4.jpg" alt="Justine Sacco book">
                    <img class="big lazy" data-src="images/alphamata5.jpg" alt="Justine Sacco book">
                    <img class="big lazy" data-src="images/alphamata6.jpg" alt="Justine Sacco book">
                    <img class="big lazy" data-src="images/alphamata7.jpg" alt="Justine Sacco book">
                    <img class="big lazy" data-src="images/alphamata8.jpg" alt="Justine Sacco book">
                </div>
                <p>While I enjoyed making the book, I thought the distortion could be better connected the the words it was affecting. With this in mind, I built an interactive web experiment using <a href="http://www.alchemyapi.com/api/sentiment-analysis">sentiment analysis</a> to distort comments left by users.</p> 
                <div class="img-group">
                    <img class="big lazy" data-src="images/alphabet_interactive.png" alt="interactive version">
                </div>
            </div>
          </section>
        <menu>
           <?php include '../menuProject.php'; ?>
           <a href="misc.php" class="nav">
                <svg class="label" id="previous" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:none;}</style></defs><title>point</title><g id="SVG"><g id="hand"><path class="cls-1" d="M31.83,10.69a24.08,24.08,0,0,0,.85,5.55H31.3a4.13,4.13,0,0,0-4.18,4.08s0,.07,0,.1a19.24,19.24,0,0,0,1.31,5.68H26.76a4.17,4.17,0,0,0-4.35,4q0,.18,0,.37a18.34,18.34,0,0,0,1,5.31h-14q-3.39,0-4.11.57t-.8,2.93V40.4q0,3.3,1.28,4.36t8.92,1.06H45.44q-5.26,5.68-6.88,7.88-4.39,6-1.33,11,1.51,2.49,3.49,1.29a28.84,28.84,0,0,0,5.34-4.8q3.36-3.6,5.59-5.88l13.08-13.2,2.77-.24V16.24L60,7.65a3.72,3.72,0,0,0-2.8-1.27h-21a4.2,4.2,0,0,0-4.37,4Q31.83,10.55,31.83,10.69Z"/><line class="cls-2" x1="38.91" y1="16.34" x2="32.68" y2="16.24"/></g></g></svg>
            </a>
            <a href="patronexperience.php" class="nav">
                <svg class="label" id="next" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:none;}</style></defs><title>point</title><g id="SVG"><g id="hand"><path class="cls-1" d="M40.17,61.31a24.08,24.08,0,0,0-.85-5.55H40.7a4.13,4.13,0,0,0,4.18-4.08s0-.07,0-.1a19.24,19.24,0,0,0-1.31-5.68h1.67a4.17,4.17,0,0,0,4.35-4q0-.18,0-.37a18.34,18.34,0,0,0-1-5.31h14q3.39,0,4.11-.57t.8-2.93V31.6q0-3.3-1.28-4.36T57.3,26.18H26.56q5.26-5.68,6.88-7.88,4.39-6,1.33-11Q33.26,4.81,31.28,6a28.84,28.84,0,0,0-5.34,4.8q-3.36,3.6-5.59,5.88L7.27,29.89l-2.77.24V55.76L12,64.35a3.72,3.72,0,0,0,2.8,1.27h21a4.2,4.2,0,0,0,4.37-4Q40.17,61.45,40.17,61.31Z"/><line class="cls-2" x1="42.07" y1="36.24" x2="48.64" y2="36.24"/><line class="cls-2" x1="37.55" y1="45.9" x2="43.57" y2="45.9"/><line class="cls-2" x1="33.09" y1="55.66" x2="39.32" y2="55.76"/></g></g></svg>
            </a>
        </menu>
        <script src="../js/automatab.js"></script>
        <script src="../js/page.js"></script>
    </body>
</html>