<html>
<head>
	<meta charset="utf-8">
	<title>Exchance Money</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php
		if(isset($_POST['Transfer'])){
			$form =$_POST['from'];
			$to =$_POST['to'];
			$money = $_POST['moneys'];
			$transMon;
				if ($form == "thbf"){
					if ($to=="thbt") {
						$transMon=$money*1;
						$nameMo = 'THB';
					}
					if ($to=="audt") {
						$transMon=$money*0.05;
						$nameMo = 'AUD';
					}
					if ($to=="sgdt") {
						$transMon=$money*0.04;
						$nameMo = 'SGD';
					}
					if ($to=="usdt") {
						$transMon=$money*0.03;
						$nameMo = 'USD';
					}
				}
				if ($form == "audf"){
					if ($to=="thbt") {
						$transMon=$money*27;
						$nameMo = 'THB';
					}
					if ($to=="audt") {
						$transMon=$money*1;
						$nameMo = 'AUD';
					}
					if ($to=="sgdt") {
						$transMon=$money*1.09;
						$nameMo = 'SGD';
					}
					if ($to=="usdt") {
						$transMon=$money*0.77;
						$nameMo = 'USD';
					}
				}
				if ($form == "sgdf"){
					if ($to=="thbt") {
						$transMon=$money*24.75;
						$nameMo = 'THB';
					}
					if ($to=="audt") {
						$transMon=$money*0.90;
						$nameMo = 'AUD';
					}
					if ($to=="sgdt") {
						$transMon=$money*1;
						$nameMo = 'SGD';
					}
					if ($to=="usdt") {
						$transMon=$money*0.71;
						$nameMo = 'USD';
					}
				}
				if ($form == "usdf"){
					if ($to=="thbt") {
						$transMon=$money*35.00;
						$nameMo = 'THA';
					}
					if ($to=="audt") {
						$transMon=$money*1.30;
						$nameMo = 'AUD';
					}
					if ($to=="sgdt") {
						$transMon=$money*1.42;
						$nameMo = 'SGD';
					}
					if ($to=="usdt") {
						$transMon=$money*1;
						$nameMo = 'USD';
					}
				}
		}
	?>
</head>
<body>
	<div class="wrap"> 
		<div id="head">CALCULATOR MONEY</div>
		<form action="exchance2.php" method="post">
			<input type="number" name="moneys" placeholder="Input money" class="input-text">
			<div id="text">Form</div>
			<select name="from">
				<option value="thbf">THB</option>
				<option value="audf">AUD</option>
				<option value="sgdf">SGD</option>
				<option value="usdf">USD</option>
			</select>
			<div id="text" class="mar">To</div>
			<select name="to">
				<option value="thbt">THB</option>
				<option value="audt">AUD</option>
				<option value="sgdt">SGD</option>
				<option value="usdt">USD</option>
			</select>

			<input type="submit" name="Transfer" value="Cal Transfer" id="btn" >
		</form>
		<div id="textans"><?php echo $transMon." "; ?><?php echo $nameMo; ?></div>

	</div>
</body>
</html>