<!DOCTYPE html>
<html>
<head>
    <title>La Restaurant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
    <style>
		body{
			margin: 0;
			padding: 0;
			background-repeat: 
			position: fixed;
			background-image: url(BG.jpeg);
			background-size: cover;
		}
		.layer{
			width: 900px;
			background-color: #f2f2f2;
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
			padding: 10px;
		}
		.layer2{
			margin-left: 15px;
		}
		img{
			margin-left: 180px;
		}
    </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo e(url('home')); ?>">La Restaurant</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	      <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item">
	            <a class="nav-link ml-3 btn" href="<?php echo e(url('makanan')); ?>">Makanan <span class="sr-only">(current)</span></a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link ml-3 btn" href="<?php echo e(url('minuman')); ?>">Minuman</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link ml-3 btn" href="<?php echo e(url('desert')); ?>">Desert</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link ml-3 btn" href="<?php echo e(url('apettizer')); ?>">Apettizer</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link ml-3 btn" target="_blank" href="http://siswateladan.site/izam/">About me</a>
	          </li>
	        </ul>
	      </div>
  	</nav>
	<div class="layer">
		<div class="layer2">
			<h1 class="text-center">Selamat Datang Di La Restaurant</h1>
			<img class="" src="konsep.jpg" width="500px">
			<p class="text-center">A Mysterious Person</p>
			<p class="text-center">izamsusilo@gmail.com</p>
		</div>
	</div>
</body>
</html><?php /**PATH C:\xampp2\htdocs\aplikasi_restoran\resources\views/home.blade.php ENDPATH**/ ?>