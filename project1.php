<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="project.css">
</head>
<body style="background-color: 	#B0C4DE">
<div id="wrapper">
 
<div class="satu">
	<div class="dua">
		<div class="tiga">
			<p class= "judul">Ramalan Wisuda</p>
		</div>
		<div class="empat">
			
<form class="tab" action="" method="post"> 

  <p class="name"> 
  		<label for="name">Nama<p> </label> 
        <input type="text" name="nama" id="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/> 
        
    </p> 
   
    <p class="email"> 
    	<label for="email">E-mail<p> </label> 
        <input type="text" name="email" id="email"  value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>" /> 
        
    </p> 
   
    <p class="jurusan"> 
    	<label for="jurusan">Jurusan<p></label>
        <input type="text" name="jurusan" id="jurusan"  value="<?=isset($_POST['jurusan']) ? $_POST['jurusan'] : ''?>" /> 
         
    </p> 
    <p class="semester"> 
    	<label for="semester">Semester<p></label>
        <input type="text" name="semester" id="semester"  value="<?=isset($_POST['semester']) ? $_POST['semester'] : ''?>" /> 
         
    </p> 
 
   
    <p class="submit"> 
        <input type="submit" name = "submit" value="submit" /> 
    </p> 
   
		</form>

		<?php
		$lulus = rand(1,6) ;
		?>
		<div class="hasil">
			<p class="judul2">Biodata Pasien</p>

				<?php
				if (isset($_POST['submit'])) {
				$hsl = $_POST['semester']+$lulus*2;
				echo 'Nama Anda  : ' . $_POST['nama'] . '<br/>';
				echo 'Email Anda : ' . $_POST['email'].'<br>';
				echo 'Jurusan    : ' . $_POST['jurusan'].'<br>';
				echo 'Semester   : ' . $_POST['semester'].'<br>';

				echo "<h1> RAMALAN: </h1>";
				if (isset($hsl)) {
				if($hsl<=14 &&$hsl>=8){
					echo "anda akan lulus sekitar <h2><b>" .$lulus ." tahun lagi</b></h2>";
				}elseif($hsl<8){
					$lulus=+4;
					echo "anda akan lulus sekitar ". $lulus ." tahun lagi";

				}
				else{
				echo "<h3> Maaf Sepertinya Anda akan <h2>DO</2> </h3>";
					}
				}

				}?>
			</div>
			</div>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>