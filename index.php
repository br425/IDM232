<?php include 'db-connection.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
     <title>Ben Rodia's site</title>
  <link rel="stylesheet" href="master.css">
  <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oxygen:400" rel="stylesheet">
</head> 

<body>
<h2 class="benrodia-big">benrodia</h2>

<div id="bg-wrapper"><img src="graphics/atmospheric-design.png" alt="BG image"></div>

<section id="home-intro">

<header>
  <a class="benrodia" href="#index"><h2>benrodia</h2></a>
  <a class="nav" href="#about"><h2 class="text">ABOUT</h2></a>
  <a class="nav" href="#gallery"><h2 class="text">PORTFOLIO</h2></a>
  <a class="nav" href="#contact"><h2 class="text">CONTACT</h2></a>
</header>

<h1 id="welcome">UI/UX STUDENT and <br> FRONT END DESIGNER</h1>

<div id="m-nav">
  <a class="nav" href="#about"><h2 class="text">ABOUT</h2></a>
  <a class="nav" href="#gallery"><h2 class="text">PORTFOLIO</h2></a>
  <a class="nav" href="#contact"><h2 class="text">CONTACT</h2></a>
</div>

</section>

<section class="text-section" id="about">
    <h2 id="sec-about">Some About Me</h2>
<p>My name’s Ben, and I’m a digital design student at Drexel University. I grew up in Levittown PA as a homeschool kid with my brother before moving out to West Philly to go to school. In some form or another I've always been a designer and an artist, even when my designs were Legos and my art was anime fan drawings. I did a lot of fine art in middle and high school, as you'll see in the folio, and for a time I thought straight up art could be my passion… then I got a bit more cynical and decided to pursue a field with plenty of room to grow into. Front end design hit all the notes I was looking for, and now it’s all sort of coming together. </p>
<p>I had never touched computers outside of casual consumption basically until I got to Drexel. I hadn’t opened a text editor before Fall 2016, and I hadn’t opened an image editor before Fall 2015. Why point out my lack of experience? Because I'm learning quickly. Right now, my priorities are evolving my skill base, getting tons of experience, and creating content. I'm at the stage now where every project I finish is my best one yet, and everything you're seeing now already feels out-of-date.
</p>

<!-- <img src="graphics/portrait-l.jpg" alt="My Face"> -->

    <h2 id="sec-inspiration" class="text-center">My Skills</h2>
    <p>
I always feel silly trying to list my assets with phrases like “Team Worker” or “Problem Solver.” They all boil down to buzzwords for me. NOTE: If you are an employer who holds great stock in hiring a “Good Communicator,” then consider me, please; I talk real good. I’m just saying… what does it mean to anyone? I want my work to speak for me. My case studies will show my thought process, and each picture is worth about 1,000 words a-piece, so take a look.
That said, here are the design programs and software I am experienced with:
</p>
<ul class="skills">
  <li>HTML</li>
  <li>CSS</li>
  <li>JavaScript</li>
  <li>PHP</li>
  <li>Adobe Suite</li>
  <li>Maya</li>
  <li>AVID</li>
</ul>

</section>  
 


<section id="gallery">

<h2 id="portfolio-title">PORTFOLIO</h2>

<section class="gallery-section webpages">

    <h3 class="gal-title" id="sec-webpages">Web Designs</h3>
    <p class="disclaimer">Disclaimer: I don't own any of these brands. I'm not profitting from anyone else's intellectual properties.</p>

    <a class="figure-box" href="wkor/zodiac.html" target="_blank">   
       <figure>
       <img src="thumbnail/wkor-tn.JPG" alt="filler image">
       <h3>Morty Zodiac</h3>
       <figcaption>
       <p>An interactive form where you discover which Rick the lost Morty will go with.</p>
       </figcaption>
       </figure>       
    </a>

    <a class="figure-box" href="cracked/index.html" target="_blank">   
       <figure>
       <img src="thumbnail/cracked-tn.JPG" alt="filler image">
       <h3>Cracked Redesign</h3>
       <figcaption>
       <p>Redesign of America's only humor site since 1958. It needed some revitalizing.</p>
       </figcaption>
       </figure>
    </a>

    <a class="figure-box" href="https://invis.io/2Z9EZ6P5A#/206879907_DS-Home" target="_blank">   
       <figure>
       <img src="thumbnail/savage-tn.JPG" alt="filler image">
       <h3>Savage Redesign</h3>
       <figcaption>
       <p>First attempt at a UI redesign. Really a testament to failing fast to learn fast.</p>
       </figcaption>
       </figure>
    </a>

    <a class="figure-box" href="idm240/index.html" target="_blank">   
       <figure>
       <img src="thumbnail/gorillaz-tn.JPG" alt="filler image">
       <h3>Gorillaz Poster</h3>
       <figcaption>
       <p>Interactive, scalable Gorillaz tour page using SVGs and animations (in mid production).
       </p>
       </figcaption>
       </figure>
    </a>                


</section>
    
<section class="gallery-section digital">
    <h3 class="gal-title" id="sec-digital">Digital Art</h3>
    
    <?php
      while ($row = mysqli_fetch_assoc($result)) {
  
         echo '<div class="project" id="' . $row['class'] . '">';
             echo '<figure>';
               echo '<img src="' . $row['thumbnail'] . '" alt="' . $row['name'] . '">';
               echo '<h3>'. $row['name'] . '</h3>';
             echo '</figure>';
         echo '</div>';    
      }
    ?>

 

<!--  <div class="figure-box fig-08">     
      <figure>
      <img src="thumbnail/samus-hue-val-sat-design-tn.jpg" alt="Metroid Gradient Design">
      <h3>Styled Metroid Gradient</h3>
      </figure>
</div>

 <div class="figure-box fig-09">
      <figure>
      <img src="thumbnail/transform-frames-design-tn.PNG" alt="High Contrast Panorama">
      <h3>High Contrast Panorama</h3>
      </figure>
</div>

 <div class="figure-box fig-10">
      <figure>
      <img src="thumbnail/char-designs-tn.png" alt="Character Concept Art">
      <h3>Character Concept Art</h3>
      </figure>
</div>  

 <div class="figure-box fig-11">
      <figure>
      <img src="thumbnail/atmospheric-landscape-tn.JPG" alt="Atmospheric Landscape">
      <h3>Atmospheric Landscape</h3>
      </figure>
</div>  

 <div class="figure-box fig-12">
      <figure>
      <img src="thumbnail/shroomsday-tn.JPG" alt="Shroomsday">
      <h3>Shroomsday Poster</h3>
      </figure>
</div> 

 <div class="figure-box fig-14">
      <figure>
      <img src="thumbnail/rodbe-tn.JPG" alt="Rodbe Movie Poster">
      <h3>Rodbe Movie Poster</h3>
      </figure>
</div>

</section>

<section class="gallery-section fine-art">
    <h3 class="gal-title" id="sec-fineart">Fine Art</h3>
 

 <div class="figure-box fig-01">     
      <figure>
      <img src="thumbnail/degas-tn.jpg" alt="Charcoal Degas 'Waiting' Picture">
      <h3>Charcoal Degas 'Waiting'</h3>
      </figure>
</div>

 <div class="figure-box fig-02">
      <figure>
      <img src="thumbnail/lotus-tn.jpg" alt="Pastel White Lotus Picture">
      <h3>Pastel White Lotus</h3>
      </figure>
</div>

 <div class="figure-box fig-03">
      <figure>
      <img src="thumbnail/main-tn.jpg" alt="Main Building Perspective Sketch">
      <h3>Main Building Sketch</h3>
      </figure>
</div>  

 <div class="figure-box fig-04">
      <figure>
      <img src="thumbnail/portrait-tn.jpg" alt="Charcoal Self Portrait 2015 Picture">
      <h3>Charcoal Self Portrait</h3>
      </figure>
</div>

 <div class="figure-box fig-05">
      <figure>
      <img src="thumbnail/form-tn.jpg" alt="White Charcoal Form Picture">
      <h3>White Charcoal Form</h3>
      </figure>
</div>      

 <div class="figure-box fig-06">
      <figure>
      <img src="thumbnail/char-faces-tn.jpg" alt="White Charcoal Profiles Picture">
      <h3>White Charcoal Profiles</h3>
      </figure>
</div>

 <div class="figure-box fig-07">
      <figure>
      <img src="thumbnail/bear-tn.jpg" alt="Charcoal Bear Picture">
      <h3>Charcoal Bear</h3>
      </figure>
</div>

 <div class="figure-box fig-13">
      <figure>
      <img src="thumbnail/turtle-tn.jpg" alt="Pastel Turtle Mosaic">
      <h3>Pastel Turtle Mosaic</h3>
      </figure>
</div>


 -->
</section>

</section>

<section class="text-section" id="contact">  
    <h2 id="sec-commission" class="text-right">Commissions</h2>
<p>I do commissions of whatever you want!</p> 
<p>If there is anything remotely similar to what you saw in my gallery that you like, I'm sure I'll top it given the incentive of money and challenge. I am by no means a specialist, and I'm trying to widen my artistic palette, so I'll take requests of anything from drawings and fine art, to photoshops, vector designs, videos, and of course web pages. If you or a friend could use any of those things (and you know you could) try me first!
</p>
<p>Again, I'm looking for any kind of work to expand both my experience and portfolio, so anything goes and price is very negotiable. Get me while I'm cheap!</p>

<h2 id="sec-contact">Contact</h2>
<!-- <p>You can reach me at my school email.</p> -->

<div id="extensions">

<a class="fb" href="https://www.facebook.com/ben.rodia" target="_blank">
<p>Facebook</p>
</a>

<div class="email">
<div>e-Mail</div>
<div>br425@drexel.edu</div>
</div>

<a class="git" href="https://github.com/br425" target="_blank">
<p>Github</p>
</a>

</div>

</section>


<footer class="text-right">
  <h2>Copyright Ben Rodia 2017</h2>
</footer>




<div class="lb-bg">

  <h2 class="art-title" id="title-01">Charcoal "Waiting" by Degas</h2>
  <h2 class="art-title" id="title-02">Pastel White Lotus</h2>
  <h2 class="art-title" id="title-03">Main Building Sketch</h2>
  <h2 class="art-title" id="title-04">Charcoal Self Portrait</h2>
  <h2 class="art-title" id="title-05">White Charcoal Forms</h2>
  <h2 class="art-title" id="title-06">White Charcoal Faces</h2>
  <h2 class="art-title" id="title-07">Charcoal Bear</h2>
  <h2 class="art-title" id="title-13">Pastel Turtle Mosaic</h2>
  <h2 class="art-title" id="title-14">Rodbe Movie Poster</h2>

  <h2 class="art-title" id="title-08">Styled Metroid Gradient</h2>
  <h2 class="art-title" id="title-09">High Contrast Panorama</h2>
  <h2 class="art-title" id="title-10">Character Concept Art</h2>
  <h2 class="art-title" id="title-11">Atmospheric Landscape</h2>
  <h2 class="art-title" id="title-12">Shroomsday</h2>

  <div class="lb">
  <img class="blow-up" id="pic-01" src="graphics/degas.jpg" alt="Charcoal Degas 'Waiting' Picture">
  <img class="blow-up" id="pic-02" src="graphics/lotus.jpg" alt="Pastel White Lotus Picture">
  <img class="blow-up" id="pic-03" src="graphics/main.jpg" alt="Main Building Perspective Sketch">
  <img class="blow-up" id="pic-04" src="graphics/portrait.jpg" alt="Charcoal Self Portrait 2015 Picture">
  <img class="blow-up" id="pic-05" src="graphics/form.jpg" alt="White Charcoal Form Picture">
  <img class="blow-up" id="pic-06" src="graphics/char-faces.jpg" alt="White Charcoal Profiles Picture">
  <img class="blow-up" id="pic-07" src="graphics/bear.jpg" alt="Charcoal Bear Picture">
  <img class="blow-up" id="pic-13" src="graphics/turtle.jpg" alt="Pastel Turtle Mosaic">

  <img class="blow-up" id="pic-08" src="graphics/samus-hue-val-sat-design.jpg" alt="Styled Metroid Gradient">
  <img class="blow-up" id="pic-09" src="graphics/transform-frames-design.png" alt="High Contrast Panorama">
  <img class="blow-up" id="pic-10" src="graphics/char-designs.JPG" alt="Character Concept Art">
  <img class="blow-up" id="pic-11" src="graphics/atmospheric-design.png" alt="Atmospheric Landscape">
  <img class="blow-up" id="pic-12" src="graphics/shroomsday.jpg" alt="Shroomsday">
  <img class="blow-up" id="pic-14" src="graphics/rodbe.jpg" alt="Rodbe Movie Poster">
  </div>
          
  <div class="x-out">X</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="scripts.js"></script>


</body>
</html>