<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	
 
<form action="" method="POST">
		 
		<input type="text" name="bintang"  placeholder ="Input Angka">
        <br>
        <br>
		<input type="submit" name="enter"  value="Generate Segitiga">
        
        <input type="submit" name="enter"  value="Generate Ganjil">
        
        <input type="submit" name="enter"  value="Generate Prima">



	</form>
 
	<?php 
 
		if (isset($_POST["enter"])) {
			$nil = $_POST["bintang"];

            $data  = array_map('intval', str_split($nil));

 
            // $data = array(1,3,4,5,0,0,0);
            $jml= count($data)-1;
			for ($i=0; $i<= $jml; $i++) { 
				for($b = 0; $b <= $i; $b++){
                    if ($b == 0)
                    {
                      echo "$data[$i]0";  
                    }else{
                        echo "0";
                    }
                    
					
				}
				echo"<br>";
			}
		}
?>


</body>
</html>