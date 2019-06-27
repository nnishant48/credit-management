<?php
    require_once('db_connect.php'); //connect to database
    $query = "select * from users";
    $result = mysqli_query($link,$query);
?>
<html>
 <head>
 <style>
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</style>

 </head>
</html>
<html>  
	<head>
     <title>Credit Management</title>

<style>

.text
{ 
	background-color:rgba(255,255,255,0.1);
	position:absolute;
	width:99%;
	height:90px;
}	 
.text h1
{  
	color:white;
	text-align:center;
	font-size:60px;
	font-family:'Montserrat',sans-serif;
	letter-spacing:3;
    margin-top:15px;
}	
.homebutton
{ 
   
	width:10%;
	height:90px;
	margin-top:-122px;
	margin-left:25px;
	position:absolute;
	font-family:'Montserrat',sans-serif;
	font-size:15px;
	font-weight:bold;
	line-height:90px;
	
} 
.homebutton a{
text-decoration:none;	
}	

.Back
{
	background-image:url('apple.jpg');
	background-size:100% 100%;
	width:100%;
	height:100%;
	
}	 
.container
{
	background-color:rgba(256,256,256,0.3);
	position:absolute;
	top:30%;
	left:10%;
	width:80%;
	height:51%;
}

.container th
{
	font-family:'Montserrat',sans-serif;
	font-size:17px;
	font-weight:bold;
	text-align:center;
	color:black;
	background-color:white;
}

.container td
{
	color:black;
	font-family:'Montserrat',sans-serif;
    text-align:center;
}

#button
{
	color:white;	
	background-color:black;
	border:none;
	font-family:'Montserrat',sans-serif;
	font-weight:bold;
	font-size:14px;
	width:35%;
	height:10%;
	transition-duration: 0.2s;
}

#button:hover 
{
  background-color:white;
  color:black;
}

	
</style>
</head>

   <body>
	<div class="Back">

	<div class="text"><h1>USER DETAILS</h1>
	<div class="homebutton">
       <a style="color:white;" href="home.php">HOME</a>		 
    </div>
	</div>
	
	<div class="container">
 

        <table width="100%" border="0px" cellspacing="0px" cellpadding="6px">
			
				<tr>
                    <th>S No.</th>
    				<th>Name</th>
    				<th>Email</th>
    				<th>Credits</th>
					<th>Action</th>
					<th></th>
				</tr>
			

            <!--fetch and display data from MySQL-->
            <?php
                $i=1;
                while($row = mysqli_fetch_array($result)) 
				{
					?>
                    <tr>
					<td><?php echo $i; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["credit"];?></td>
                    <td><a href="transfernew.php?name=<?php echo $row['name'];?>"><button  id="button">Select</button></a><td>
				    </tr>
                      <?php                   
				   ++$i;
                }
            ?>

        </table>
		</div>
     
		</div>
    </body>
</html>