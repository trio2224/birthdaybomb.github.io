<!DOCTYPE html>
<html> 
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=yes,maximum-scale=5,width=device-width, initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="c.css">
</head>
<style>
  
  ::-webkit-scrollbar{
  width: 10px;
    }
    ::-webkit-scrollbar-track{
  border: 7px solid #232943
  box-shadow: inset 0 0 2.5px 2px rgba(0,0,0,0.5);
    }
    ::-webkit-scrollbar-thumb{
  background: linear-gradient(
    45deg,
    #06dee1,
    #79ff6c);
  border-radius: 3px;
    }
  
</style>
<body>
 

  <img src="1211.gif" style="position: absolute; width: 500px; height: 200px; top: 20px; left:420px; ">
  <img src="12.gif" style="width: 300px; height: 300px; margin-left: 0px;">

   <div class="swiper-container">
    
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="25.jpeg" style="height: 250px; width: 300px; background-size: 10% 10%"></div>
      <div class="swiper-slide"><img src="28.jpeg" style="height: 250px; width: 300px; background-size: 10% 10%"></div>
      <div class="swiper-slide"><img src="27.jpeg" style="height: 250px; width: 300px; background-size: 10% 10%"></div>
      <div class="swiper-slide"><img src="26.jpeg" style="height: 250px; width: 300px; background-size: 10% 10%"></div>
      <div class="swiper-slide"><img src="8.jpeg" style="height: 250px; width: 300px; background-size: 10% 10%"></div>
      <div class="swiper-slide"><img src="31.jpeg" style="height: 250px; width: 300px; background-size: 10% 10%"></div>
      <div class="swiper-slide"><img src="30.jpeg" style="height: 250px; width: 300px; background-size: 10% 10%"></div>
      <div class="swiper-slide"><img src="6.jpeg" style="height: 250px; width: 300px; background-size: 10% 10%"></div>
      <div class="swiper-slide"><img src="13.jpeg" style="height: 250px; width: 300px; background-size: 10% 10%"></div>
      <div class="swiper-slide"><img src="20.jpeg" style="height: 250px; width: 300px; background-size: 10% 10%"></div>
      <div class="swiper-slide"><img src="3.jpeg" style="height: 250px; width: 300px; background-size:  10% 10%;"></div>
      <div class="swiper-slide"><img src="29.jpeg" style="height: 250px; width: 300px; background-position: top;"></div>
      <div class="swiper-slide"><img src="1.jpeg" style="height: 250px; width: 300px; background-position: top;"></div>
      </div>
  </div>
   <img src="12.gif" style=";width: 300px; height: 300px; margin-right : 20px ; -webkit-transform: scaleX(-1);
  transform: scaleX(-1);">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 20,
        stretch: 0,
        depth: 500,
        modifier: 1,
        slideShadows: true,
      },
      loop: true,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
    });
  </script>
<div  style="
    position: absolute;
    top: 700px;
    left: 30px;
    display: block;
    color: lightblue;
    font-family: fantasy;
    font-size: 30px;
    float: left;
    padding-left: 35px">

<form action="" method="post">
  <label>Name:<br><input type="text" name="name" required="" autocomplete= off style="width: 400px; height: 30px ; border-style: solid; border-color: black; border-width: 2px;background-color: lightblue;"><br></label>
  <label>Message : <br><textarea cols="35" rows="5" name="mes"style="width: 400px; height: 100px;border-style: solid; border-color: black; border-width: 2px;background-color: lightblue;"></textarea></label><br>
  <input type="submit" value="Post" name="post" style="font-size: 20px;background-color: lightblue; width: 200px;height: 40px;"><br>
</form> 
</div>
</body>

<div style="position: absolute;left: 600px;top: 310px; height: 200px;width: 600px;overflow-x: hidden;overflow-y: scroll;background-color:pink;font-size: 30px;font-family: cursive; padding: 30px;display: block;margin-left: auto;margin-right: auto;margin-top: 400px;">
<?php

 ini_set('display_errors',0); 

$name = $_POST["name"];
$text = $_POST["mes"];
$post = $_POST["post"];
$read = fopen("com.txt", "r+t");
  echo "All comments:";

  while(!feof($read))
  {
    echo fread($read, 1024);
  }

  fclose($read);

if($name != null)
{
if($post)
{
  #WRITE DOWM COMMENTS#

  $write = fopen("com.txt", "a+");
  fwrite($write, "<br><u><b> $name</b></u>:<t>$text<br><n>");
  fclose($write);
}
}

// else
// {

//   #DISPLAY COMMENTS#
      
//   $read = fopen("com.txt", "r+t");
//   echo "All comments:";

//   while(!feof($read))
//   {
//     echo fread($read, 1024);
//   }

//   fclose($read);
// }

?>
</div>  
</html>