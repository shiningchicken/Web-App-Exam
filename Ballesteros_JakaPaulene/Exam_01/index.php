<!DOCTYPE html>
<html>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <div id="formFooter">
		<h2>Practical Exam 2</h2>
		<h3>1.Palindrome.</h3>
			<form method="post" action="index.php">
			<input type="text" name="number" value="" />
			<input type="submit" name="submit" value="Submit" />
			</form>
			</br>
			<?php
			//checks if the input is not null
			if(isset($_POST['number'])) {
				$value1 = $_POST['number'];
				//reverse the input word using strrev
				$palindrome = strrev($value1);
					//checks if the reversed word is equal to the previous word
					if($palindrome == $value1) {
						echo $value1 .' It is a palindrome!';
					}
					else{
						echo $value1 . ' Not a palindrome!';
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