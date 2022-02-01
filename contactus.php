<?php include 'ratingsql.php'; ?>
<?php include 'form.php'; ?>
<!DOCTYPE html>

<html>
<head>
	<title>Contact us</title>

	<link rel="stylesheet" type="text/css" href="contactusstyle.css">
    <!-- <link rel="stylesheet" type="text/css" href="csadhomepage.css"> -->

	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

<style>

@import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap');
body
{
    min-height: 100vh;
    overflow-x: hidden;
    background: linear-gradient(#2b1055,#7597de);
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
.error
{
  color: #FF0000;
}

</style>
<script src="https://kit.fontawesome.com/d6a36940dc.js" crossorigin="anonymous"></script> <!--For rating system -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script> 
    $(function(){
      $("#footer").load("footer.html");
      $("#rating").load("ratingSystem.php");
      $("#nav").load("nav.html");
    });
    </script> 


</head>

<body>
<div id="nav"></div>


	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<h2>Contact Us</h2>
				

				
				<input type="text" name="txtName" class="field" placeholder="Your Name" value="<?php echo $txtName;?>" />
				<span class="error"> <?php echo $nameErr;?></span>
				

			
				<input type="text" name="txtEmail" class="field" placeholder="Your Email" value="<?php echo $txtEmail;?>" />
				<span class="error"> <?php echo $emailErr;?></span>
			

			
                <input type="text" name="txtPhone" class="field" placeholder="Your Phone Number" value="<?php echo $txtPhone;?>" />
                <span class="error"> <?php echo $phoneErr;?></span>
           

			
                <textarea  name="txtMsg" class="field" placeholder="Your Message" style="width: 100%; height: 150px;"><?php echo $txtMsg;?></textarea>
                <span class="error"> <?php echo $msgErr;?></span>
			

				
                <input type="submit" name="btnSubmit" class="btn" value="Send Message" onclick="verify()" />
            <div id="rating"></div>
			</form>

			</div>
		</div>
	</div>
    <div id="footer"></div>
</body>
</html>