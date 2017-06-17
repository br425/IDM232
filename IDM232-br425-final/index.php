 
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


<!-- Database Connection -->

  <?php
  $dbServer = "localhost";
  $dbUser = "benrodia_root";
  $dbPass = "NO.1through10";
  $dbName = "benrodia_database1";

  $connection = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

  if (mysqli_connect_errno()) {
    die ('Database connection failed: ' .
        mysqli_connect_error() .
        ' )' . mysqli_connect_errno() . ')'
    );
  }


// Access Portfolio Table

  $query = 'SELECT * ';
  $query .= 'FROM portfolio ';
  $query .= 'ORDER BY id ASC';


  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("failed to connect.");
  }
?>
</head> 


<body id="index">

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


    <h2 id="sec-inspiration" class="text-center">My Skills</h2>
    <p>
I always feel silly trying to list my assets with phrases like “Team Worker” or “Problem Solver.” They all boil down to buzzwords for me. NOTE: If you are an employer who holds great stock in hiring a “Good Communicator,” then consider me, please; I talk real good. I’m just saying… what does it mean to anyone? I want my work to speak for me. My case studies will show my thought process, and each picture is worth about 1,000 words a-piece, so take a look.
That said, here are the design programs and software I am experienced with:
</p>
<ul class="skills">
  <li>HTML5</li>
  <li>CSS3</li>
  <li>JavaScript</li>
  <li>PHP/MySqli</li>
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
       <img src="thumbnail/gorillaz-tn.PNG" alt="filler image">
       <h3>Gorillaz Poster</h3>
       <figcaption>
       <p>Interactive, scalable Gorillaz tour page using SVGs and animations.
       </p>
       </figcaption>
       </figure>
    </a>                


</section>
   
<section class="gallery-section digital">
    <h3 class="gal-title" id="sec-digital">Art</h3>
    
    <?php 

// Set up PHP arrays
    $figArray = array();
    $titleArray = array();
    $picArray = array();
    $descArray = array();

// Populate Thumbnails from table

    while ($row = mysqli_fetch_assoc($result)) { ?>

        <div class="figure-box" id="fig-<?php echo $row['id']; ?>">
            <figure>
                <img src="thumbnail/<?php echo $row['thumbnail']; ?>" alt="<?php echo $row['name']; ?>">
                <h3><?php echo $row['name']; ?></h3>
            </figure>
        </div>

    <?php 

//Populate arrays with table data
    array_push($figArray, "fig-".$row['id']);
    array_push($titleArray, "title-".$row['id']);
    array_push($picArray, "pic-".$row['id']);
    array_push($descArray, "desc-".$row['id']);
    } ?>

 

</section>

</section>

<section class="text-section" id="contact">  
    <h2 id="sec-commission" class="text-right">Commissions</h2>
<p>I do commissions of whatever you want!</p> 
<p>If there is anything remotely similar to what you saw in my gallery that you like, I'm sure I'll top it given the incentive of money and challenge. I am by no means a specialist, and I'm trying to widen my artistic palette, so I'll take requests of anything from drawings and fine art, to photoshops, vector designs, videos, and of course web pages. If you or a friend could use any of those things (and you know you could) try me first!
</p>
<p>Again, I'm looking for any kind of work to expand both my experience and portfolio, so anything goes and price is very negotiable. Get me while I'm cheap!</p>

<h2 id="sec-contact">Contact</h2>

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


<!-- Access table again -->

<?php  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("failed to connect.");
  }
?>

<div class="lb-bg">
    <div class="lb">

<!-- Populate lightbox elements from table -->
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="hover-fade">
        <h2 class="art-title" id="title-<?php echo $row['id']; ?>"><?php echo $row['name']; ?></h2>
        <p class="desc" id="desc-<?php echo $row['id']; ?>"><?php echo $row['desc']; ?></p>
        </div>
        <img class="blow-up" id="pic-<?php echo $row['id']; ?>" src="graphics/<?php echo $row['fullPic']; ?>" alt="<?php echo $row['name']; ?>">
        
        <?php } ?>

    </div>
<div class="x-out">X</div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="scripts.js"></script>

<script type="text/javascript">

// Convert PHP arrays to JS
    var figArray = <? echo json_encode($figArray); ?>;
    var titleArray = <? echo json_encode($titleArray); ?>;
    var picArray = <? echo json_encode($picArray); ?>;
    var descArray = <? echo json_encode($descArray); ?>;

// testing
    console.log(figArray);
    console.log(titleArray);
    console.log(picArray);
    console.log(descArray);


var fig;
var figId;
var figPos;
var pic;
var title;
var desc;


// Set up event listeners for thumbnail clicks

$("div[id^='fig-']").click(function() {
  figId = $(this).attr('id'); // find id of this
  figPos = figArray.indexOf(figId); //find position of the id in array
  
// Find position of all other info in their arrays and put in form of id selector
      pic = "#" + picArray[figPos];
      title = "#" + titleArray[figPos];
      desc = "#" + descArray[figPos];

// Actual executed function 
      console.log('image ' + figPos +' clicked');
      $(pic).addClass('show-blow-up');
      $(title).addClass('show-title');
      $(desc).addClass('show-desc');
})
</script>

</body>
</html>