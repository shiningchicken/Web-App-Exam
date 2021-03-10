<!DOCTYPE html>
<html>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <div id="formFooter">
		<h2>Practical Exam 2</h2>
		<h3>1. Difference between two dates</h3><br>
			<form method="post" action="index.php">
				<span>Date 1:</span>
				<input type="date" name="date1" id="dt1" value="" />
				<span>Date 2:</span>
				<input type="date" name="date2" value="" />
				<input type="submit" name="submit" value="Submit" />
			</form>
			</br>
			<?php
			//checks if both dates are not empty	
			if(isset($_POST['date1']) && isset($_POST['date2'])) {
				$inputDate1 = $_POST['date1'];
				$inputDate2 = $_POST['date2'];
				//call & pass the input dates to datesub function 
				$Remaining = datesub($inputDate1 , $inputDate2);	
					echo 'Output: ' . $Remaining;		
			}
			else{
				echo '';
			}
			//function that accepts the input dates to identify the difference and specify the format for output
			function datesub($inputDate1 , $inputDate2 , $format = '%y Year(s) %m Month(s) %d Day(s)' )
			{
				$input1 = date_create($inputDate1);
				$input2 = date_create($inputDate2);
				$interval = date_diff($input1, $input2);
			  
				return $interval->format($format);
			   
			}
			?>
    </div>

  </div>
</div>
</body>
</html>
<style>
	html {
  background-color: #4f4f4f;
}
body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}
a {
  color: Black;
  display:inline-block;
  font-weight: 600;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 60%;
  padding: 20px;
}

#formContent {
  background: #fff;
  padding: 30px;
  width: 100%;
  max-width: 700px;
  position: relative;
  padding: 0px;
  text-align: center;
  border-radius: 15px 15px 15px 15px;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 30px;
  text-align: center;
  border-radius: 10px 10px 10px 10px;
}


</style>