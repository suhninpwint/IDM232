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
    <?php
    $result = mysqli_query($conn, "SELECT * FROM test1");


    if (!$result) {
    die('Database query failed.');
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Fine Arts & Graphic Design</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
    <style type="text/css">
        <link rel="stylesheet" href="css/normalize.css"> <script src="js/index.js"> </script> @font-face {
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
    <script src="js/main.js">
    </script>
</head>

<body>
  <?php while ($row = mysqli_fetch_assoc($result)) { ?>

    <figure>
      <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
      <figcaption><?php echo $row['title']; ?></figcaption>
      <p><?php echo $row['material']; ?></p>
    </figure>

    <!-- <li>
      <?php echo $row['title']; ?>
    </li> -->

  <?php } ?>

  <?php
    // Step 4: Release Returned Data
    mysqli_free_result($result);
  ?>

  <!--
  We could setup a new query here and build soemthing else if needed.
  We've freed the previous result, so we're able to build something
  else if needed.
  -->

  <?php
    // Step 5: Close Database Connection
    mysqli_close($connection);
  ?>
               
</body>
</html>