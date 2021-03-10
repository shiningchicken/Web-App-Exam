<!DOCTYPE html>
<html>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <div id="formFooter">
		<h2>Array</h2>
		<h3>A.Display the value that have the most number of occurence; in case of tie arrange it in alphabetical order.</h3>

			<?php
			$arr = array('Marvin','Marco','Marvin','Marco','Marco','Marvin','Christian');
			//sorts array by item count
			$values = array_count_values($arr);
				foreach($values as $name => $key){
					echo "$name ";
				}
			?>
		
		<h3>B.Sort the array in ascending, if the value is an odd nymber round it up to the nearest tens.</h3>

			<?php
			$numArr = [9863,7127,2020,80,131,55,100];
			sort($numArr);
				foreach($numArr as $number){
					//Checks if the number is odd or not
					if ($number % 2 != 0){
						//if the number is odd, it will be rounded of by using round function to its nearest tens
						$number = round($number / 10) * 10;
					}	
					echo "$number ";
				}

			?>

			<h3>C.Display the the item that is not repetitive.</h1>

			<?php
			$arr1 = array('red','blue','black','red','blue','blue','red','gold');
			//sorts array by item count
			$values1 = array_count_values($arr1);
					foreach($values1 as $name1 => $key1){
						//checks if item only occured once
						if($key1 == 1){
							echo "$name1 ";
						}     
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