<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>


<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-4 sidebar1">
                <div class="logo">
                    <img src="img/test.png" class="img-responsive center-block" alt="Logo" style="height: 64px; width: 64px;">
                </div>
                <br>
                <div id="overflowHidden" class="left-navigation">
                    <div class="list">
                        <h5><strong>ABOUT ME</strong></h5>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="school.php">School</a></li>
                        <li><a href="hobbies.php">Hobbies</a></li>
                        <li><a href="https://nl.linkedin.com/" target="_blank">LinkedIN</a></li>
                        <li><a href="https://github.com/Woutervanderwaal"  target="_blank">Github</a></li>
                        <li><a href="https://www.instagram.com/woutervdw.078/?hl=nl"  target="_blank">Instagram</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </div>

                    <br>

                    <ul class="list">
                        <h5><strong>LANGUAGES</strong></h5>
                        <h5 id="toolsHeader"><strong>/ TOOLS</strong></h5>
                        <li><a href="htmlCssJs.php">Html/Css/Js</a></li>
                        <li><a href="php.php">PHP</a></li>
                        <li><a href="cpp.php">C++</a></li>
                        <li><a href="cs.php">C#</a></li>
                        <li><a href="python.php">Python</a></li>
                        <li><a href="blender.php">Blender</a></li>
                        <li><a href="unity.php">Unity</a></li>
                        <li><a href="unreal.php">Unreal</a></li>
                    </ul>

                    <p style="color: white;" id="copyRightInformation">© Wouter v d Waal</p>

                    <span id="time" style="color: white;" ><?php echo date("l jS \of F Y") . "<br>"; ?></span>
                </div>
            </div>
            <div class="col-md-10 col-sm-8 main-content">
