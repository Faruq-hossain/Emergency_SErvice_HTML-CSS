<!DOCTYPE html>
<html>
	<head>

		<title>Emergency</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		
	</head>
	<style>
		body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;

}
.container{
	position: relative;
	width: 1200px;
	margin: 100px auto;
	
}
.container .box{
	position: relative;
	width: calc(400px - 30px);
	height: calc(300px - 30px);
	background: #000;
	float: left;
	margin: 15px;
	box-sizing: border-box;
	overflow: hidden;
	border-radius: 10px;

}
.container .box .icon{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #f00;
	transition: 0.5s;
	z-index: 1;
}
.container .box:hover .icon{
	top: 20px;
	left: calc(50% - 40px);
	width: 80px;
	height: 80px;
	border-radius: 50px;
}
.container .box .icon .fas{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	font-size: 60px;
	transition: 0.5s;
	color: #fff;

}
.container .box:hover .icon .fas{
	font-size: 50px;
}

.container .box .content{
	position: absolute;
	top: 100%;
	height: calc(100% - 100px);
	text-align: center;
	padding: 20px;
	box-sizing: border-box;
	transition: 0.5s;
	opacity: 0;
}
.container .box:hover .content{
	top: 100px;
	opacity: 1;

}

.container .box .content h3{
	margin: 0 0 10px;
	padding: 0;
	color: #fff;
	font-size: 24px;
}
.container .box .content p{
	margin: :0;
	padding: 0;
	color: #fff
}

.container .box h6{
	position: absolute;
	top: 0;
	left: 0;
	width: 2000%;
	height: 2000%;
    transition: 0.5s;
    z-index: 1;
    color: #000;
}
.container .box:hover h6{
	top: 55px;
	left: calc(50% - 25%);
	width: 100px;
	height: 100px;
	border-radius: 50px;
}

/*.container .box .icon{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #f00;
	transition: 0.5s;
	z-index: 1;
}
.container .box:hover .icon{
	top: 20px;
	left: calc(50% - 40px);
	width: 80px;
	height: 80px;
	border-radius: 50px;
}*/

.container .box:nth-child(1) .icon{
	background: #319635;

}
.container .box:nth-child(1){
	background: #4caf50;
}
.container .box:nth-child(2) .icon{
	background: #66ff66;

}
.container .box:nth-child(2){
	background: #00ffcc;
}
.container .box:nth-child(3) .icon{
	background: #ff0000;

}
.container .box:nth-child(3){
	background: #cc3300;
}
.container .box:nth-child(4) .icon{
	background: #EF1FA1;

}
.container .box:nth-child(4){
	background: #33ccff;
}
.container .box:nth-child(5) .icon{
	background: #FF0000;

}
.container .box:nth-child(5){
	background: #E80002;
}
.container .box:nth-child(6) .icon{
	background: #ff6699;

}
.container .box:nth-child(6){
	background: #ff99cc;
}	


</style>
	<body>
		<div class="container">
		<h3 style='text-align:center;text-color:#fff;'>Emergency Service</h3>
			<div class="box">

				<div class="icon"><h6>Hospital</h6><i class="fas fa-hospital"></i></div>
				<div class="content">
					<h3>Nearest Hospital</h3>
					<p>lorem3hi i am faruq hossain i am trying to complete my full work complete</p>
					<a href="" class="btn btn-success">Find Hospital <i class="fa fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="box">
				<div class="icon"><h6>Police Station</h6><i class="fas fa-police-station"></i></div>
				<div class="content">
					<h3>Police Station</h3>
					<p>lorem3hi i am faruq hossain i am trying to complete </p>
					<!-- <a href="" class="btn btn-success">Read More <i class="fa fa-long-arrow-right"></i></a> -->
				</div>
			</div>
			<div class="box">
				<div class="icon"><h6>Blood</h6><i class="fas fa-burn"></i></div>
				<div class="content">
					<h3>Find Blood</h3>
					<p>lorem3hi i am faruq hossain i am trying to complete </p>
					<!-- <a href="" class="btn btn-success">Read More <i class="fa fa-long-arrow-right"></i></a> -->
				</div>
			</div>
			<div class="box">
				<div class="icon"><h6>Ambulance</h6><i class="fas fa-ambulance"></i></div>
				<div class="content">
					<h3> Emergency Ambulance</h3>
					<p>lorem3hi i am faruq hossain i am trying to complete </p>
					<!-- <a href="" class="btn btn-success">Read More <i class="fa fa-long-arrow-right"></i></a> -->
				</div>
			</div>
			<div class="box">
				<div class="icon"><h6>Fire Service</h6><i class="fas fa-fire"></i></div>
				<div class="content">
					<h3>Fire Service</h3>
					<p>lorem3hi i am faruq hossain i am trying to complete </p>
					<!-- <a href="" class="btn btn-success">Read More <i class="fa fa-long-arrow-right"></i></a> -->
				</div>
			</div>
			<div class="box">
				<div class="icon"><h6>First Aid</h6><i class="fas fa-first-aid"></i></div>
				<div class="content">
					<h3>First Aid</h3>
					<p>lorem3hi i am faruq hossain i am trying to complete </p>
					<!-- <a href="" class="btn btn-success">Read More <i class="fa fa-long-arrow-right"></i></a> -->
				</div>
			</div>


		</div>
<script src="http://kit.fontawesome.com/a076d05399.js"></script>
	</body>
	
</html>