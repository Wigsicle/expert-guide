<!DOCTYPE html>
<html>
    <head>
        <title>mini-Project</title>
        <meta charset="UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="elements.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script> 
        $(function(){
            $("#footer").load("footer.html");
            $("#nav").load("nav.html");
        });
        </script>
        <style>

            .pros-solar{
            height: 150vh;
            display: flex;
            background-color: white;
            }
            
            .pros-title-solar{
                width: 50%;
                height:50vh;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 40px;
            }
            
            .pros-pages-solar{
                width: 50%;
            }
            
            .pros-pages-solar div{
                padding-top: 50px;
                padding-right: 30px;
                padding-left: 30px;
                height: 50vh;
                justify-content: space-around;
                align-items: center;
            }

            .pros-pages-solar div> h2{
                text-align: center;
                margin-bottom: 20px;
            }
            
            .pros-pages-solar div> p{
                width: 80%;
                font-size: 18px;
                line-height: 30px;
            }

            .pros-pages-solar div:nth-child(1){
                background-color: #ffcb00;
            }

            .pros-pages-solar div:nth-child(2){
                background-color: #ffa900;
            }

            .pros-pages-solar div:nth-child(3){
                background-color: #ff7100;
            }
        </style>
    </head>
    <body>
        <div id="nav"></div>
        <section class="banner">
        <img src="https://wallpaperaccess.com/full/1743472.jpg">
        <div class="mid" data-0-top = "opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
            <h2>Solar</h2> 
            <a class="infobtn" href="#intro"><span>Find out more</span></a>
        </div>
        </section>
        <div class="about" id="intro">
            <h3 data-center-center="opacity:1;left:0;" data-0-bottom="opacity=0;left:500px;" data-0-top = "opacity:0;">What is it?</h3>
            <p data-center-center="opacity:1;right:0;" data-0-bottom="opacity=0;right:300px;" data-0-top = "opacity:0;">This is a test for the solar thingy. Owell 5 days more to go! Lets hope this project goes well. Ngl this design thing is hard fml. Owell I hope it at least look somewhat decent right?
            yeaaaa, anyways here is a picture. Lmao I go sleep. Here is some copy pasted message tm. ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui offica deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <section class="pros-solar">
            <div class="pros-title-solar">
                <h2>Pros</h2>
            </div>
            <div class="pros-pages-solar">
                <div>
                    <h2>Cheap AF</h2>
                    <p>It's free yo!!!</p>
                </div>
                <div>
                    <h2>It's alot</h2>
                    <p>KMS</p>
                </div>
                <div>
                    <h2>It do be scrolling</h2>
                    <p>Amogus</p>
                </div>
            </div>
        </section>
        <section class="cons">
                <h2 class="consTitle" data-center-center="opacity:1;top:0;" data-0-bottom="opacity:0; top:500px;">Cons</h2>
                <div class="conscontainer">
                    <div class="containerBx" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0; left:-400px;">
                        <div>Cons 1</div>
                    </div>
                    <div class="containerBx" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0; bottom:400px;">
                        <div>Cons 2</div>
                    </div>
                    <div class="containerBx" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0; right:-400px;" >
                        <div>Cons 3</div>
                    </div>
                </div>
        </section>
        <div class="videocontainer">
            <div>
                <p style="font-size: 40px"><b>Explore more!</b></p><br>
            <iframe width="620" height="415" src="https://www.youtube.com/embed/Qh9KBwqGxTI"></iframe>
            </div>
        </div>
  <div class="container">
  <h2 id="title" align="center">Leave a comment</a</h2>
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
    <br />
    <div id="display_comment"></div>
  </div>
        <div id="footer"></div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
        <script>
            function splitScroll(){
            const controller = new ScrollMagic.Controller();
    
            new ScrollMagic.Scene({
                duration: '100%',
                triggerElement: '.pros-title-solar',
                triggerHook: 0
                })
            .setPin('.pros-title-solar')
            .addTo(controller);
            }

            splitScroll();
        </script>
        <script type="text/javascript" src="skrollr.js"></script>
        <script type="text/javascript">
            var s = skrollr.init();
        </script>
        <script>
    $(document).ready(function(){
 
    $('#comment_form').on('submit', function(event){
        event.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
        url:"add_comment.php",
        method:"POST",
        data:form_data,
        dataType:"JSON",
    success:function(data)
    {
    if(data.error != '')
        {
            $('#comment_form')[0].reset();
            $('#comment_message').html(data.error);
            $('#comment_id').val('0');
            load_comment();
        }
    }
    })
    });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>
    </body>
</html>

