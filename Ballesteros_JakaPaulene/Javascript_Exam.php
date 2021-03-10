<!DOCTYPE html>
<html>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <div id="formFooter">
			<h2>Javascript</h2>
			<h4>A. Fix the sentence (Capitalizethe first word only and add spaces per word)</h4>
			<h4>TheQuickBrownFoxJumpsOverTheLazyDog</h4>
			<?php
			    echo "Output:";
				echo "<h4 id='word'></h4><br>";
			?>
			<script type="text/Javascript">
				
				var sentence = "TheQuickBrownFoxJumpsOverTheLazyDog";
				var slicedSentence = '';
				
				for(var x = 0; x < sentence.length; x++){
					//Checks if current letter in a position is in uppercase
					if(sentence.charAt(x) == sentence.charAt(x).toUpperCase()){
						//Sliced the sentence in to words by adding space
						slicedSentence += ' ' + sentence.charAt(x);		
					}
					else{
						slicedSentence += sentence.charAt(x);
					}	
				}
				document.getElementById("word").innerHTML = slicedSentence;
			</script>

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