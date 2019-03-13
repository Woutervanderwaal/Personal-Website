<!DOCTYPE html>
<html>



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
                    <img src="test.png" class="img-responsive center-block" alt="Logo">
                </div>
                <br>
                <div class="left-navigation">
                    <ul class="list">
                        <h5><strong>ABOUT ME</strong></h5>
                        <li>Home</li>
                        <li>School</li>
                        <li>Hobbies</li>
                        <li>LinkedIN</li>
                        <li>Github</li>
                        <li>Instagram</li>
                        <li>Contact</li>
                    </ul>

                    <br>

                    <ul class="list">
                        <h5><strong>LANGUAGES/TOOLS</strong></h5>
                        <li>Html/Css/Js</li>
                        <li>C++</li>
                        <li>C#</li>
                        <li>Python</li>
                        <li>Blender</li>
                        <li>Unity</li>
                    </ul>

                    <p id="copyRightInformation">© Wouter v d Waal</p>
                </div>
            </div>
            <div class="col-md-10 col-sm-8 main-content">
            <!--Main content code to be written here --> 
            
            
        </div>
    </div>
</body>
<style>
html, body
{
    margin: 0;
    padding: 0;
}

.sidebar1 {
    background: #F17153;
    /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#F17153, #F58D63, #f1ab53);
    /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#F17153, #F58D63, #f1ab53);
    /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#F17153, #F58D63, #f1ab53);
    /* For Firefox 3.6 to 15 */
    background: linear-gradient(#F17153, #F58D63, #f1ab53);
    /* Standard syntax */
    padding: 0px;
    min-height: 100%;
}
.logo {
    max-height: 130px;
}
.logo>img {
    position: relative;
    top: 10px;
    padding: 3px;
    border: 3px solid white;
    border-radius: 100%;
}
.list {
    color: #fff;
    list-style: none;
    padding-left: 0px;
}
.list::first-line {
    color: rgba(255, 255, 255, 0.5);
}
.list> li, h5 {
    padding: 5px 0px 5px 40px;
    user-select: none;
}
.list>li:hover {
    background-color: rgba(255, 255, 255, 0.2);
    border-left: 5px solid white;
    color: white;
    font-weight: bolder;
    padding-left: 35px;
}.main-content{
text-align:center;
}
#copyRightInformation
{
    position: relative;
    left: 39px;
    top: 20px;
}
</style>

</html>