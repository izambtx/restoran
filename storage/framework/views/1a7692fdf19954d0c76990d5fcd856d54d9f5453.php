<!DOCTYPE html>
<html>
<title>La Restaurant</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('bg.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    La Restaurant
  </div>
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">WELCOME</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <a class="w3-large w3-center" href="<?php echo e(url('home')); ?>">ENTER</a>
  </div>
</div>

</body>
</html>
<?php /**PATH C:\xampp2\htdocs\aplikasi_restoran\resources\views/welcome.blade.php ENDPATH**/ ?>