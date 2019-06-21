<html>
<head>

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>

.BGIMG
{
	background-image:url('apple.jpg');
	background-size:100% 100%;
	width:99%;
	height:98%;
	position:absolute;
}

.text
{   
    color:white;
	width:100%;
	margin-top:200px;
	text-transform:uppercase;
	text-align:center;
}
.text h4
{
	font-family:'Open Sans',sans-serif;
	letter-spacing:2;
}

.text h1
{
	
	font-size:70px;
	font-family:'Montserrat',sans-serif;
	font-weight:bold;
	letter-spacing:2;
	margin:16px 0px;
}
.text h3
{
	
	font-family:'Open Sans',sans-serif;
	font-size:15px;
	letter-spacing:2;
}
#button
{
color:white;	
background-color:black;
border:none;
font-family:'Montserrat',sans-serif;
font-weight:bold;
font-size:16px;
border:3px solid white;
width:10%;
height:10%;
margin-top:25px;
transition-duration: 0.2s;
}
#button:hover 
{
  background-color:white;
  color:black;
}
.contact
{
	margin-left:31%;
	width:60%;
	margin-top:65px;
	position:absolute;
}
.contact ul
{
	display:flex;
	position:absolute;
	top:90%;
	left:50;
	transform:translate(-50%,-50);
}
.contact ul li a i{margin-top:10px;}
.contact ul li
{
	list-style:none;	
}
.contact ul li a
{
	text-align:center;
	width:60px;
	height:60px;
	line-height:45px;
	background-color:transparent;
	font-size:37px;
	margin:0 20px;
	display:block;
	border-radius:50%;
	position:relative;
	overflow:hidden;
    border:2px solid white;
	}
.contact ul li a .fa
{	
	position:relative;
	color:white;
	transition:.5s;
}	
.contact ul li a .fa:hover
{
	transform: rotateY(360deg);
}
.contact ul li:nth-child(1) a:hover
{
	background:#3b5999;
	transition:.8s;
}
.contact ul li:nth-child(2) a:hover
{
	background:#e4405f;
	transition:.8s;
}
.contact ul li:nth-child(3) a:hover
{
	background:#55acee;
	transition:.8s;
}

</style>

</head>
<body>
<div class="BGIMG">
      
   <div class="text">
      <h4>An Easy· Safe· Convenient· Smarter Way to Pay</h4>
      <h1>CREDIT MANAGEMENT</h1>
      <h3>T h e . S p a r k . F o u n d a t i o n </h3>	 
    <a href="indexnew.php"><button id="button">VIEW USERS</button></a> 
	  	  
    </div>
	
 <div class="contact">
     <ul>
	  <li><a><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
	  <li><a><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
	  <li><a><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	 </ul>   
</div>
	 
 </div>
</body>
</html>
