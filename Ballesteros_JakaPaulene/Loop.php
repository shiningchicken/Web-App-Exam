<!DOCTYPE html>
<html>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <div id="formFooter">
			<h2>Loop</h2>
			<h3>A.Create a PHP function using WHILE loop that will sum all even numbers from 1-10</h3>

			<?php
			$num = 0;
			$total = 0;
				// to limit the iteration to specific number
				while($num <= 10){
					//checks if the number is even
					if($num % 2 == 0){
					 $total = $total + $num;
					}
				 $num++;
				}
				
			echo "The sum of all numbers from 1-10 is <b>$total</b>";
			?>

			<h3>B.Create a PHP function using DO WHILE loop that will display all odd numbers from 1-10</h3>

			<?php
			$num1 = 0;
			$sum1 = "";
				do {
					//checks if the number is odd
					if($num1 % 2 != 0){
					 //concatenates the odd number for display
					 $sum1 = $sum1 . $num1;
					}
					$num1++;
					
				}while($num1 <= 10);
					echo "$sum1";
			?>

			<h3>C.Create a PHP function using FOR loop that will display 10 number in fibonacci sequence.</h3>

			<?php

				function Fibo($num2)
				{
					$fibo1 = 0;
					$fibo2 = 1;
					$fibo3 = 0;
					for($x = 1; $x <= $num2; $x++){
						echo "$fibo1 ";
						//passing the values of previous loop *and adding variables every iteration
						$fibo3 = $fibo1 + $fibo2;
						$fibo1 = $fibo2;
						$fibo2 = $fibo3;
					}
				}
				Fibo(10);
					
				
				
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