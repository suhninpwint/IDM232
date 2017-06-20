<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="inital-scale=1.0, user-scalable=no, width=device-width,maximum-scale=1.0" />
    <title> Fine Arts & Graphic Design</title>
    <link rel="stylesheet" href="final.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="hamburger.css">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
    <style type="text/css">
        @font-face {
            font-family: "Blowbrush";
            src: url("fonts/blowbrush/blowbrush.ttf");
        }
        
        <style type="text2/css">@font-face {
            font-family: "Adam", sans-serif;
            src: url("fonts/adm-cg-pro/ADAM.CG PRO.ttf");
        }
        
        <style type="text3/css">@font-face {
            font-family: "Avenirnext", sans-serif;
            src: url("fonts/avenir-next/avenir-next-regular.ttf");
        }
        
        <style type="text4/css">@font-face {
            font-family: "Avenirroman", sans-serif;
            src: url("fonts/avenir-roman/Avenir-Roman-webfont.ttf");
        }
    </style>
</head>

<body>
 <?php
    $servername = "localhost";
    $username = "suhninpw_idm232";
    $password = "@O?21@noSO85";
    $dbname = "suhninpw_idm232";

    /*  Create connection */ 
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    /* Check connection */ 
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>
   
  <div class="wrapper">

        <!--Mobile Navigation (hamburger) -->

        <nav>
            <div id="menuToggle">
                <input type="checkbox"> <span></span> <span></span> <span></span>
                <ul id="menu">
                    <li><a href="index.html"> Projects</a></li>
                    <li><a href="#ui/uxdesign">UI/UX Design</a> </li>
                    <li><a href="#photography"> Photography </a></li>
                    <li><a href="#resume">Resume</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>


        <!-- Mobile Menu (Su )-->

        <div id="mainmenu2">
            <ul>
                 <li class="name2"> Su </li>
            </ul>
        </div>
 <div id="mainmenu">
            <ul>
                <li><a href="index.html">Projects</a></li>
                <li><a href="#news">About Me</a></li>
                <li class="Name"> Su </li>
                <!--<div class="Name"> Su</div>-->
                <li style="float: left"><a href="#contact">Contact</a></li>
                <li style="float: lefft"><a class="active" href="#about">Resume</a></li>
            </ul>
        </div>
   <div id="leftcolumn">
            <div id="maintitle"> FINE ARTS
                <br> &
                <br> GRAPHIC DESIGN
                <br> </div>
        </div>
        
    <?php
    $result = mysqli_query($conn, "SELECT * FROM test1");
 <div class="wrapper">

    if (!$result) {
    die('Database query failed.');
    }
      while ($row = mysqli_fetch_assoc($result)) { 
          if($row['courseVisible']==1){
              ?> 
                  
          <div id="pic1_mobile">
                  <img src="<?php echo $row['image'];?>" allt="">
              </div>
              <div id="slogan1_mobile">
                  <span><?php echo $row['title']; ?> </span>
              </div>
              <div id="name1_mobile">
                  <?php echo $row['material'];?>
              </div>
              <?php
          }
?>
  <!-- Footer -->
    <!-- Icons and Copyright -->
    <footer>
        <div id="test">
            <a href="https://www.behance.net/suhninpwint" class="social-icon"> <img src="icons/behance.png " alt="behance " /> </a>
            <a href="http://github.com/suhninpwint" class="social-icon2"> <img src="icons/github.png " alt="git " /> </a>
            <a href="mailto:suhnin.2012@gmail.com" class="social-icon3"> <img src="icons/emailaddress.png " alt="emailadd " /></a>
            <a href="https://www.linkedin.com/in/su-hnin-pwint-84827b109" class="social-icon4"><img src="icons/linkedin.png " alt="ln" /></a>
        </div>
        <p>&copy; Su Hnin Pwint 2017</p>
    </footer>
    
    </div>
</body>

</html>




