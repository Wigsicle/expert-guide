<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
        <section>
            <img src="bg.jpg" id="bg">
            <img src="moon.png" id="moon">
            <img src="mountain.png" id="mountain">
            <img src="road.png" id="road">
            <h2 id="text">Use Clean Energy</h2>
        </section>
        <script type="text/javascript">
            var bg = document.getElementById("bg");
            var moon = document.getElementById("moon");
            var mountain = document.getElementById("mountain");
            var road = document.getElementById("road");
            var text = document.getElementById("text");
            
            window.addEventListener('scroll', function(){
                var value = window.scrollY;
                
                bg.style.top = value * 0.5 + 'px';
                moon.style.left = -value * 0.5 + 'px';
                mountain.style.top = -value * 0.15 + 'px';
                road.style.top = value * 0.15 +'px';
                text.style.top = value * 1 + 'px';
            })
        </script>    
        
        
        <section>
            <div class="text2">
            <p>Welcome to the website where its our purpose and motto to promote the usage of clean energy. Here you will learn the benefits acquired from the usage of clean energy as well understand how each source of categorised clean energy are produced, in a deeper degree.</p>
            </div>
        </section>
        
        
        <div class="cardBody">
            <div class="container">
                <div class="box">
                    <span></span>
                    <div class="content">
                    <h2>Why use clean energy?</h2>
                    <p>It generates energy that produces no greenhouse gas emissions from fossil fuels and reduces some types of air pollution.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
                <div class="box">
                    <span></span>
                    <div class="content">
                    <h2>Long-term benefits of using clean energy</h2>
                    <p>Diversifying energy supply and reducing dependence on imported fuels.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            
                <div class="box">
                    <span></span>
                    <div class="content">
                    <h2>Economic impact of using clean energy</h2>
                    <p>Creating economic development and jobs in manufacturing, installation, and more</p>
                    <a href="#">Read More</a>
                </div>
              </div>
            </div>
        </div>
        <section>
            <div class="text3">
                <p>If you wish to understand more, below is a video that helps enhance your knowledge on how the production and usage of clean energy is one of the key solutions to solving climate issues.</p>
            </div>
        </section>
            <div class="videocontainer">
            <div>
                <p style="font-size: 40px"><b>Explore more!</b></p><br>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/wbR-5mHI6bo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <iframe src="https://ourworldindata.org/grapher/renewable-share-energy?time=2019" loading="lazy" style="width: 100%; height: 600px; border: 0px none;"></iframe>
            <div id="footer"></div>
    </body>
</html>
