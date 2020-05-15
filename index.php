<?php
?>

<html>
<head>
	<meta charset="UTF-8">
</head>
<body>

<?php
	$wer = rand(1,2); // losowanie wersji pytań
	 echo "Wersja "; echo $wer;
?>
<center><font size='5'>Quiz Ali w PHP</font></center><br>
<?php

if ($wer == 1){
	
	echo "
<form action='podsum.php?id=1' method='post' id='quizForm' id='1'>
    	

        <h3>1. Jakie państwo, jako jedyne w Europie, nie ma dostępu do morza oraz jego sąsiedzi nie mają dostępu do morza?</h3>
        
        <input type='radio' name='odp1' id='odp1' value='A'>
        <label for='odp1A'>Czechy</label> <br>

        <input type='radio' name='odp1' id='odp1' value='B'>
        <label for='odp1B'>Liechtenstein</label> <br>

        <input type='radio' name='odp1' id='odp1' value='C'>
        <label for='odp1C'>Kosowo</label> <br><br>
        
     
        <h3>2. Ile lat trwała wojna stuletnia?</h3>
         
        <input type='radio' name='odp2' id='odp2' value='A'>
        <label for='odp2A'>100 </label> <br>
        
        <input type='radio' name='odp2' id='odp2' value='B'>
        <label for='odp2B'>116</label> <br>

        <input type='radio' name='odp2' id='odp2' value='C'>
        <label for='odp2C'>99</label> <br><br>
        

        <h3>3. Jaki ludzki organ nie zmienia swojej wielkości w ciągu życia człowieka?</h3>
        
        <input type='radio' name='odp3' id='odp3' value='A'>
        <label for='odp3A'>oko </label> <br>
        
        <input type='radio' name='odp3' id='odp3' value='B'>
        <label for='odp3B'>serce</label> <br>
        
        <input type='radio' name='odp3' id='odp3' value='C'>
        <label for='odp3C'>mózg</label> <br><br>


        <h3>4. W jakim kraju została stworzona Statua Wolności?</h3>
         
        <input type='radio' name='odp4' id='odp4' value='A'>
        <label for='odp4A'>w Macedonii </label> <br>
        
        <input type='radio' name='odp4' id='odp4' value='B'>
        <label for='odp4B'>we Francji</label> <br>

        <input type='radio' name='odp4' id='odp4' value='C'>
        <label for='odp4C'>w Stanach Zjednoczonych</label> <br><br>


        <h3>5. Nazwa której planety w Układzie Słonecznym nie pochodzi od imienia boga?</h3>
         
        <input type='radio' name='odp5' id='odp5' value='A'>
        <label for='odp5A'>Saturna </label> <br>
        
        <input type='radio' name='odp5' id='odp5' value='B'>
        <label for='odp5B'>Jowisza</label> <br>

        <input type='radio' name='odp5' id='odp5' value='C'>
        <label for='odp5C'>Ziemi</label> <br><br><br>


     <input type='submit' value='Zakończ quiz'>
    
</form> ";

}

if ($wer == 2){
	
	echo "
<form action='podsum.php?id=2' method='post' id='quizForm' id='2'>


        <h3>1. Stolica Ruminii to</h3>
        
        <input type='radio' name='odp1' id='odp1' value='A'>
        <label for='odp1A'>Kuala Lumpur</label> <br>

        <input type='radio' name='odp1' id='odp1' value='B'>
        <label for='odp1B'>Budapeszt</label> <br>
        
        <input type='radio' name='odp1' id='odp1' value='C'>
        <label for='odp1C'>Bukareszt </label> <br><br>


        <h3>2. Ile jest stref czasowych w Chinach?</h3>

        <input type='radio' name='odp2' id='odp2' value='A'>
        <label for='odp2A'>1</label> <br>

        <input type='radio' name='odp2' id='odp2' value='B'>
        <label for='odp2B'>2</label> <br>

        <input type='radio' name='odp2' id='odp2' value='C'>
        <label for='odp2C'>3</label> <br><br>
       

        <h3>3. Jaki jest największy kraj w Afryce</h3>
        
        <input type='radio' name='odp3' id='odp3' value='A'>
        <label for='odp3A'>Algieria</label> <br>
        
        <input type='radio' name='odp3' id='odp3' value='B'>
        <label for='odp3B'>Kongo</label> <br>
        
        <input type='radio' name='odp3' id='odp3' value='C'>
        <label for='odp3C'>Nigeria</label> <br><br>


        <h3>4. Ile burz występuje co sekundę na świecie?</h3>
        
        <input type='radio' name='odp4' id='odp4' value='A'>
        <label for='odp4A'>1800</label> <br>

        <input type='radio' name='odp4' id='odp4' value='B'>
        <label for='odp4B'>300</label> <br>
        
        <input type='radio' name='odp4' id='odp4' value='C'>
        <label for='odp4C'>Ponad 5000</label> <br><br>


        <h3>5. W którym roku wybuchła I wojna światowa?</h3>
        
        <input type='radio' name='odp5' id='odp5' value='A'>
        <label for='odp5A'>1410</label> <br>

        <input type='radio' name='odp5' id='odp5' value='B'>
        <label for='odp5B'>1914</label> <br>
        
        <input type='radio' name='odp5' id='odp5' value='C'>
        <label for='odp5C'>1939</label> <br><br><br>

     <input type='submit' value='Zakończ quiz'>
    
</form> ";
}
?>

</body>
</html>