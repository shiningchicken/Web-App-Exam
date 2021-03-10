<!DOCTYPE html>
<html>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <div id="formFooter">
		<h2>Practical Exam 2</h2>
		<h3>1. Reverse Input</h3>
			<form method="post" action="index.php">
			<input type="text" name="rev" value="" />
			<input type="submit" name="submit" value="Submit" />
			</form>
			</br>
			<?php
				//checks if input is not empty
				if(isset($_POST['rev'])) {
					$input = $_POST['rev'];
					//call and pass the input word to reverseWord function
					reversedWord($input);
				}
				function reversedWord($input){
					//reverse the word by using strrev function
					$Reversed = strrev($input);	
						echo 'Output: ' . $Reversed;
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