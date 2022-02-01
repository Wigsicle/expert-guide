
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="card.css">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script> 
    $(function(){
        $("#footer").load("footer.html");
         $("#nav").load("nav.html");
    });
    </script> 
</head>
<body>
<div id="nav"></div>
   <div class="container">
<div id="cardBody">
    <div class="card" id="RA">
     <div class="card-image"></div>
     <div class="card-text">
        <h2>Richard Peters</h2>
        <span class="admNo">P1946981</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem dicta, iste a qui veniam perferendis nisi possimus ipsum, saepe at amet tempore quo rerum quas provident itaque maiores dolorum consectetur.</p>
     </div>
    </div>
    <div class="card" id="RH">
     <div class="card-image"></div>
     <div class="card-text">
        <h2>Rui Heng</h2>
        <span class="admNo"></span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem dicta, iste a qui veniam perferendis nisi possimus ipsum, saepe at amet tempore quo rerum quas provident itaque maiores dolorum consectetur.</p>
     </div>
    </div>
    <div class="card" id="AI">
     <div class="card-image"></div>
     <div class="card-text">
        <h2>Abdul Israshahid</h2>
        <span class="admNo">P2043780</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem dicta, iste a qui veniam perferendis nisi possimus ipsum, saepe at amet tempore quo rerum quas provident itaque maiores dolorum consectetur.</p>
     </div>
    </div>
    <div class="card" id="RP">
     <div class="card-image"></div>
     <div class="card-text">
        <h2>Richard Prabowo</h2>
        <span class="admNo">P2035590</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem dicta, iste a qui veniam perferendis nisi possimus ipsum, saepe at amet tempore quo rerum quas provident itaque maiores dolorum consectetur.</p>
     </div>
    </div>
    </div>

    </div>
    </section>

    <div id="footer"></div>
</body>
</html>


