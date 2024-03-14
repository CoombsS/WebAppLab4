<!DOCTYPE html>
<html>
	<head> 
		<title>JBU Online store w/ CSS, javascript, and PHP </title>
		
		<link rel="stylesheet" href="css/mystyles.css" />
		<script type="text/javascript" src="js/javaScriptStore.js"></script>
		
		<style>
			ul{
				font-family: Arial;
				list-style-type:none;
				background-color:#84eab3;
				font-color:#ffffff;
				height:46px;
				overflow:hidden;
			}

			li{
				float:left;
			}

			li a, .drp{
				  display: inline-block;
				  color:black;
				  text-align: center;
				  padding: 14px 110px;
				  text-decoration:none;  
			}

			li .menu-item{
				display:inline-block;
				font-color:#ffffff;
			}

			.menu-content{
				display:none;
				position:absolute;
				background-color:#f8f8f8;
				z-index:1;
				font-color:#ffffff;	
			}

			.menu-content a:hover{
			  font-family: Arial;
			  background-color:#003767;
			  font-color:#ffffff;
			  color: white;
			  text-decoration: none;
			  display: block;
			 
			}
			
			.menu-item:hover .menu-content{
				display:block;
			}

			.menu-item:hover{
				display:block;
				color: white;
				background-color: #003767;	
			}

			h1{
				color:#003767;
				font-family:perpetua;
			}
			.cartAdd-div {
            background-color: #FFC0CB;
        }
			.cartImg{
				position: absolute;
				top: 0px;
				right: 30px;
			}
			.mycart
			{
			background-color:#c5c5c5;
			position: absolute;
			height:	300px;
			width: 150px;
			right: 900px;
			}
			
		</style>
		
<script>

var cartItems = [];
var itemToAdd = "";
function popupfunction(x)
{
	document.getElementById('popup'+x).style.display='block';
	document.getElementById('fade'+x).style.display='block';
}

function popupclose(x)
{
	document.getElementById('popup'+x).style.display='none';
	document.getElementById('fade'+x).style.display='none';
}

function cartAdd(n){
	document.getElementById("item").innerHTML += n;


}

function displayCart(){
	document.getElementById('displayMyCart').style.display='block';
}


</script>
	</head>


	<body bgcolor="#FFFFFF">
		<br><br><br>
	
	<h1 align="center"> JBU Online Store </h1>
	
	
	<ul>
		<li class="menu-item"><a href="#" class="drp">Components </a>
			<div class="menu-content">
				<a  href="add_book.php">Add Component</a><br>
				<a  href="remove_book.php">Remove Component</a><br>
				<a href="display_books.php">Display all Components</a><br>
			</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Microcontrollers </a>
		<div class="menu-content">
			<a  href="add_book.php">Add Microcontroller</a><br>
			<a  href="remove_book.php">Remove Microcontroller</a><br>
			<a href="display_books.php">Display all Microcontrollers</a><br>
		</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Users </a>	
		<div class="menu-content">
			<a href="add_user.php">Add User</a><br>
			<a href="remove_user.php">Remove User</a><br>
			<a href="display_users.php">Display all Users</a><br>
		</div>
		</li>
	</ul>
	
	
	<div class ="cartImg">
		<img src = "cartImg.jpg" width = 40% onclick="displayCart()"/>
	</div>	
		
	<div class = "mycart" id="displayMyCart" style = "display:none;">
		<label id = "item"></label>
	</div>
	
	
	
	<p align="center"> Welcome to JBU's Online store<p>
	
	<table align = "center">
		<tr>
			<td> 
				<a href = "javascript:void(0)" onclick = "popupfunction('1')" class = li>
				<img src = "arduinoUno.jpg" width=30%/><br>Arduino Uno</a>
					<button onclick = "cartAdd('arduinoUno')"> Add to Cart </button>

			</td>
	<div id="popup1" class="white_content">
		<p align=center><br><br>
			<img src="arduinoUno.jpg" width=30% /><br>Ardunio Uno<br><br>Price:$40<br>Rating: 5<br>
			<a href = "javascript:void(0)" onclick = "popupclose('1')" class=linktext>close window</a>
		</p>
	</div>

	
		<div id="fade1" class="black_content"></div>
	
			<td> 
				<a href = "javascript:void(0)" onclick = "popupfunction('2')" class = li>
				<img src = "raspberryPi.jpg" width=100%/><br>Raspberry Pi</a>
			</td>
	<div id="popup2" class="white_content">
		<p align=center><br><br>
			<img src="raspberryPi.jpg" width=30% /><br>Raspberry Pi<br><br>Price:$20<br>Rating: 4<br>
			<a href = "javascript:void(0)" onclick = "popupclose('2')" class=linktext>close window</a>
		</p>
	</div>
	<div id="fade2" class="black_content"></div>

			<td> 
				<a href = "javascript:void(0)" onclick = "popupfunction('3')" class = li>
				<img src = "msp430.jpg" width=80%/><br>MSP 430</a>
			</td>
	<div id="popup3" class="white_content">
		<p align=center><br><br>
			<img src="msp430.jpg" width=30% /><br>MSP 430<br><br>Price:$15<br>Rating: 2<br>
			<a href = "javascript:void(0)" onclick = "popupclose('3')" class=linktext>close window</a>
		</p>
	</div>
		<div id="fade3" class="black_content"></div>

 <tr>
			<td> 
				<a href = "javascript:void(0)" onclick = "popupfunction('4')" class = li>
				<img src = "esp32.jpg" width=30%/><br>ESP 32</a>
			</td>
	<div id="popup4" class="white_content">
		<p align=center><br><br>
			<img src="esp32.jpg" width=30% /><br>ESP 32<br><br>Price:$20<br>Rating: 5<br>
			<a href = "javascript:void(0)" onclick = "popupclose('4')" class=linktext>close window</a>
		</p>
	</div>
		<div id="fade4" class="black_content"></div>

	
			<td> 
				<a href = "javascript:void(0)" onclick = "popupfunction('5')" class = li>
				<img src = "pico.jpg" width=80%/><br>Raspberry Pico</a>
			</td>
	<div id="popup5" class="white_content">
		<p align=center><br><br>
			<img src="pico.jpg" width=30% /><br>Raspberry Pico<br><br>Price:$10<br>Rating: 2<br>
			<a href = "javascript:void(0)" onclick = "popupclose('5')" class=linktext>close window</a>
		</p>
	</div>
		<div id="fade5" class="black_content"></div>

	
			<td> 
				<a href = "javascript:void(0)" onclick = "popupfunction('6')" class = li>
				<img src = "nano.jpg" width=80%/><br>Arduino Nano</a>
			</td>
	<div id="popup6" class="white_content">
		<p align=center><br><br>
			<img src="nano.jpg" width=30% /><br>Ardunio Nano<br><br>Price:$13<br>Rating: 3<br>
			<a href = "javascript:void(0)" onclick = "popupclose('6')" class=linktext>close window</a>
		</p>
	</div>
		<div id="fade6" class="black_content"></div>

	
	

	
		


	</table>
	
	
	 <?php
		$count=1;

		include ("demo_db_connection.php");
	
		$sql_product="SELECT * FROM products_tab";
		$result_product=$connect->query($sql_product);
		?>
		
		<table align="center" width=80% border=1>
		<tr>
		<?php
		
		while($row_product = $result_product->fetch_assoc())
		{
		?>
			
				<td> 
					<img src='<?php echo $row_product["product_image"]; ?>' width="20%" /><br>
					<?php echo $row_product["product_name"]; ?><br>
					<?php echo $row_product["price"]; ?><br>
					<input value="Add to Cart" onClick="javascript:addToCart()" />
				</td>
			
		
		
		
		<?php 
		
		if ($count>=3)
		{	echo "</tr><tr>";
			$count=1;
		}
		else
		{
			$count++;
		}
		
		}
	?>
	</table>

	
	
		</center>
	</body>
</html>