<?php session_start(); ?>
<html>

<head>
	<div id="header">
		<h1>Басков Константин P3232 Вариант: 2890 <h1>
		</div>
	<meta charset="utf-8">
    <title>Лаба Веб 1</title>
	<link rel="stylesheet" href="style.css">
	<script>
	var Y,X,Z
	</script>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr height = "10"></tr>
<tr>
<td width="50%">
<ul>
<li>
<canvas id="graph" width="400" height="400"></canvas>
<script>
setInterval("Draw()", 20);

function Draw() {
	
	
   var canvas = document.getElementById('graph');
   var ctx = canvas.getContext('2d');
	
	ctx.clearRect(0, 0, canvas.width, canvas.height);
   
	let y = document.getElementById("Y").value;
	let x = document.getElementById("X").value;
	let r = document.getElementById("R1").value;
	
	ctx.beginPath();
	ctx.moveTo(50, 200);
	ctx.lineTo(350, 200);
    ctx.moveTo(200,50);
	ctx.lineTo(200, 350); 
    ctx.strokeStyle = '#000000'; 
	ctx.lineWidth = 5;
	ctx.stroke();
	
	if (x<=5 && y<=5 && r<=5 && x>=-3 && y>=-2 && r>=1){
    
    ctx.beginPath();
	ctx.moveTo(200, 200);
	ctx.lineTo(200+r*10, 200); 
	ctx.lineTo(200+r*10, 200+r*20); 
	ctx.lineTo(200, 200+r*20); 
	ctx.closePath();
    ctx.strokeStyle = '#000000';
	ctx.fillStyle = '#cc6333'; 
	ctx.fill();
	ctx.stroke();
    
    ctx.beginPath();
	ctx.arc(200, 200, r*20, Math.PI/2, Math.PI);
	ctx.strokeStyle = '#000000';
    ctx.fillStyle = '#cc6333'; 
	ctx.fill()
	ctx.stroke();
    
    ctx.beginPath();
	ctx.moveTo(200, 200);
	ctx.lineTo(200, 200+r*20); 
	ctx.lineTo(200-r*20, 200); 
	ctx.lineTo(200, 200);
	ctx.closePath();
	ctx.strokeStyle = '#cc6333';
	ctx.fillStyle = '#cc6333'; 
	ctx.fill();
	ctx.stroke();
    
    ctx.beginPath();
	ctx.moveTo(200, 200);
	ctx.lineTo(200, 200-r*20); 
	ctx.lineTo(200-r*20, 200);
	ctx.lineTo(200, 200); 
	ctx.closePath();
    ctx.strokeStyle = '#000000';
	ctx.fillStyle = '#cc6333'; 
	ctx.fill();
	ctx.stroke();
	
	ctx.beginPath();
	ctx.moveTo(50, 200);
	ctx.lineTo(350, 200);
    ctx.moveTo(200,50);
	ctx.lineTo(200, 350); 
    ctx.strokeStyle = '#000000'; 
	ctx.lineWidth = 5;
	ctx.stroke();
	
	ctx.beginPath();
	ctx.arc(200+x*20, 200-y*20, 10, 0, 2*Math.PI);
    ctx.fillStyle = '#ff0000';
	ctx.strokeStyle = '#000000';	
	ctx.fill();
	ctx.stroke();
	
	
	}
}
</script></li>
</ul>
</td>
<td width="50%"><form name="Locations" method="post" >
  <p><b>Значение X:</b><br>
   <input type="text" name="X" id="X" onchange="CheckX()" onclick="X.value=''" value = "Введите число от -3 до 5">
    <img id = "XCross" src="Cross.jpg" height =  "20px" width = "20px" disabled>
  </p>
  <p><b>Значение Y:</b><Br>
   <input type="hidden" id="Y" name="Y" value="9000" > 
	<button type="button" class="button" onclick = "Y.value='-2';">-2</button> 
	<button type="button" class="button" onclick = "Y.value='-1';"  >-1</button>
	<button type="button" class="button" onclick = "Y.value='0';"  >0</button>
	<button type="button" class="button" onclick = "Y.value='1';" >1</button> 
	<button type="button" class="button" onclick = "Y.value='2';"  >2</button>
	<button type="button" class="button" onclick = "Y.value='3';"  >3</button> 
	<button type="button" class="button" onclick = "Y.value='4';" >4</button> 
	<button type="button" class="button" onclick = "Y.value='5';" >5</button> 
   <img id = "YCross" src="Cross.jpg" height =  "20px" width = "20px" disabled>
  </p>
  <p><b>Значение R:</b><Br>
  <input type="hidden" id="R1" name="R1" value="9000" >
   <input type="radio" name="R" onchange="R1.value='1'" value="1"> 1
   <input type="radio" name="R" onchange="R1.value='2'" value="2"> 2
   <input type="radio" name="R" onchange="R1.value='3'" value="3"> 3
   <input type="radio" name="R" onchange="R1.value='4'" value="4"> 4
   <input type="radio" name="R" onchange="R1.value='5'" value="5"> 5
   <img id = "RCross" src="Cross.jpg" height =  "20px" width = "20px" disabled>
  </p>
  <p>
   <input type="submit" onmouseover = "CheckY(),CheckX(), CheckR" onclick = "Draw()" id="Submit" name="Submit" value="Отправить" > 
  </p>
  <p><b></b><br>
  </form>
  <script>
  function CheckX() {
	 let x = document.getElementById("X").value;
	 let CheckPassed = 0;
	 for (let i=-3; i<=5; i++){
		 if (x==i){
			CheckPassed = 1;
		 }
	 }
	 if (CheckPassed) {
		 document.getElementById("Submit").disabled = false
		 document.getElementById("XCross").style.display='block'
	 }
	 else {
		 document.getElementById("Submit").disabled = true
		 document.getElementById("XCross").style.display='none'
	 }
  }
  function CheckY() {
	 let y = document.getElementById("Y").value;
	 let CheckPassed = 0;
	 for (let i=-2; i<=5; i++){
		 if (y==i){
			CheckPassed = 1;
		 }
	 }
	 if (CheckPassed) {
		 document.getElementById("Submit").disabled = false
		 document.getElementById("YCross").style.display='block'
	 }
	 else {
		 document.getElementById("YCross").style.display='none'
		 document.getElementById("Submit").disabled = true
	 }
  }
  function CheckR() {
	 let r = document.getElementById("R1").value;
	 let CheckPassed = 0;
	 for (let i=1; i<=5; i++){
		 if (r==i){
			CheckPassed = 1;
		 }
	 }
	 if (CheckPassed) {
		 document.getElementById("Submit").disabled = false
		 document.getElementById("RCross").style.display='block'
	 }
	 else {
		 
		 document.getElementById("Submit").disabled = true
		 document.getElementById("RCross").style.display='none'
	 }
  }
  </script>
  </td>
</tr>
</table>
<table width="100%">
	<tr id="List"><td width="10%">X</td>
	<td width="10%">Y</td>
	<td width="10%">R</td>
	<td width="20%">Результат</td>
	<td width="25%">Время</td>
	<td width="25%">Скорость</td></tr>
	<?php
	
		$start = microtime(true);
		$rows = 20; // количество строк, tr
		$cols = 6; // количество столбцов, td
		$R = $_POST['R'];
		$Y = $_POST['Y'];
		$X = $_POST['X'];
		
		
		$Included = False;
		if ($X>0){
			if ($Y>0) {
			}
			else {
				if ($X<$R/2) {
					if ($Y>-$R) {
						$Included = True;
					}
				}
			}
		} else {
			if (Y>0) {
				if ($X>-$R/2) {
					if ($Y<$R/2){
						$Included = True;
					}
				}
			}
				else {
					if ($X*$X+$Y*$Y<$R*$R) {
						$Included = True;
					}
				}
			}
			if ($Included){
				$Text_Results = "Попадание";
			}else{
				$Text_Results = "Промах";
			}
			
			
			
			$finish = microtime(true);
			$ScriptTime = $finish - $start;
			
			if (isset($_SESSION['arr'])){
				
				array_push ($_SESSION[arr], number_format ($ScriptTime, 6));
				array_push ($_SESSION[arr], date('h-i-s'));
				array_push ($_SESSION[arr], $Text_Results);
				array_push ($_SESSION[arr], $_POST['R']);
				array_push ($_SESSION[arr], $_POST['Y']);
				array_push ($_SESSION[arr], $_POST['X']);
			
			}
			else {
				$_SESSION[arr] = array();
				array_push ($_SESSION[arr], "---");
				array_push ($_SESSION[arr], "---");
				array_push ($_SESSION[arr], "---");
				array_push ($_SESSION[arr], "---");
				array_push ($_SESSION[arr], "---");
				array_push ($_SESSION[arr], "---");
			}
			for ($i = count($_SESSION[arr])+1; $i>0; $i-=1 ){
					if (($i+1)%6 == 0 ) { 
						echo '<tr>';
					}
					
					echo '<td>';
					echo $_SESSION[arr][$i];
					echo '</td>';
				
				
				if (($i)%6 == 0){ 
					echo '<tr>';
					}
				}
			
			
			
			
?>
</table>
</body>
</html>