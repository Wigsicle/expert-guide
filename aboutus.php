<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <link rel="stylesheet" type="text/css" href="aboutusstyle.css">
        <!-- <link rel="stylesheet" type="text/css" href="Changes.css"> MODIFIED --> 


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0
        ,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display
        y=swap" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script> 
    $(function(){
        $("#footer").load("footer.html");
         $("#nav").load("nav.html");
    });
    </script> 

<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap');

body
{
    min-height: 100vh;
    overflow-x: hidden;
    /* background: linear-gradient(#2b1055,#7597de); */
}
 section
{
    position: relative;
    width: 100%;
    height: 100vh;
    padding: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
} 
#text
{
    position: absolute;
    right: -350px;
    color: #fff;
    white-space: nowrap;
    font-size: 7.5vw;
    z-index: 9;
}
    </style>



</head>
<body>

<div id="nav"></div>

        <div class="container">


    <section class="about">
        <div class="main">
            <img id="aboutimg" src="logo.png" style="height: auto; width:420px;">
            <div class="about-text">
                <h1>About Us</h1>
                <h5>Our<span> Mission</span></h5>
                <p>GETCLIMATED is a company focused on informing individuals in the importance of green energy in our present day. In hope of halting the effects of climate change.</p>
                <button type="button" onclick='window.location.href="profile.php"'  >Our Profile</button>

</div>
</div>
</div>
</section>
<div id="footer"></div>

</body>
</html>