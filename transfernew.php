<?php
    require_once('db_connect.php'); //connect to database
    $name = $_GET['name'];
    $query = "select * from users where name='" . $name . "'";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);
    
    $query = "select name from users where name<>'" . $row['name'] . "'";
    $result = mysqli_query($link,$query);
    if(isset($_POST['transfer'])) {
        if($_POST['credits_tr'] > $row['credit']) {
            echo "Credits transferred cannot be more than " . $row['credit'] . "<br>";
        }
        else {
            $query = "update users set credit=credit-" . $_POST['credits_tr'] . " where name='" . $row['name'] . "'";
            mysqli_query($link,$query);
            $query = "update users set credit=credit+" . $_POST['credits_tr'] . " where name='" . $_POST['to_user'] . "'";
            mysqli_query($link,$query);
            $query = "insert into transfers values('" . $row['name'] . "','" . $_POST['to_user'] . "'," . $_POST['credits_tr'] . ")";
            mysqli_query($link,$query);
            header("Location: indexnew.php");
        }
    }
?>

<html>
<head>
<title>Transfer Credits</title>
<style>
.Back
{
	background-image:url('apple.jpg');
	background-size:100% 100%;
	width:100%;
	height:100%;
	
}

.backbutton
{

	width:99%;
	height:90px;
	
}
.backbutton a
{     
     position:absolute;
	 text-decoration:none;
	 font-family:'Montserrat',sans-serif;
	 font-weight:bold; 
	 margin-left:30px;
	 margin-top:35px;
}	
 
.user
{   
    color:white;
    font-weight:bold; 
	font-family:'Montserrat',sans-serif;
	text-align:center;
	background-color:black;
	margin-top:6%;
	font-size:25px;
	width:320px;
	margin-left:38%;
}
.box
{
	background:rgba(256,256,256,0.3);
	position:absolute;
	top:30%;
	left:38%;
	width:320px;
	height:420px;

}
.box h2
{
font-family:'Montserrat',sans-serif;
text-align:center;
margin-top:30px;
margin-bottom:70px;
font-size:30px;

 }
 
.box input
{
width:90%;
margin-bottom:20px;
font-family:'Open Sans',sans-serif;
}	
.box select
{

font-family:'Open Sans',sans-serif;
text-align:center;	
border:none;
border-bottom:2px solid white;
background:transparent;
outline:none;
height:40px;
width:90%;
margin-left:15px;
}	
 
.box input[type="number"]
{
	
border:none;
border-bottom:2px solid white;
background:transparent;
outline:none;
height:40px;
width:90%;
margin-left:15px;
}

.box p
{
	margin-bottom:-15px;
	margin-top:10px;
	margin-left:15px;
	font-family:'Montserrat',sans-serif;
	font-size:17px;
	font-weight:bold;
	color:white;
}	
#b1
{
	background-color:black;
    color:white;
	font-weight:bold;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    text-align: center;
    border-radius:12px;
    margin-left:15px;
	}
#b1:hover
{
color:black;	
background-color:white;
}

</style>
</head>

    <body>
	<div class="Back">
        <div class="backbutton">
        <a style="color:white;" href="indexnew.php">&lt; BACK</a>
        <br><br>
        <div class="user"> 
		Hello <?php echo $row['name'] ?>,
        <br/>
        Your credits are: <?php echo $row['credit'] ?>
        <br>
        </div>
        <form action="#" method="post">
            <div class="box">
               
			   <h2>TRANSFER DETAILS</h2>
               <p>CREDITS</p><br/> <input type="number" name="credits_tr" min =0 value=1 required>
                
                <p>TRANSFER TO:</p>
				<br/>
				<select name="to_user" required>
                    <option value =""></option>

                <?php
                        while($tname = mysqli_fetch_array($result)) {
                            echo "<option value='" . $tname['name'] . "'>" . $tname['name'] . "</option>";
                        }
                ?>

                </select>
                <br/><br/><br/>
				<input id="b1" type="submit" name="transfer" value="Transfer">
              
        </form>
		</div>
		</div>
    </body>
</html>