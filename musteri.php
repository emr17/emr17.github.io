
<?php
 
require_once 'bagla.php';  
ob_start();
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kuyumcu</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container"><hr>
        <h2 class="text-center">TALAT KUYUMCULUK</h2>

        <nav class="nav justify-content-center">
            <a href="index.php" class="nav-link">Anasayfa</a>
            <a href="stok.php" class="nav-link">Stok</a>
            <a href="marka.php" class="nav-link">Markalar</a>
            <a href="kategori.php" class="nav-link">Kategoriler</a>
            <a href="randevu.php" class="nav-link">Randevular</a>
            <a href="calisan.php" class="nav-link">Çalışanlar</a>
            <a href="musteri.php" class="nav-link">Müşteriler</a>
            <a href="urun.php" class="nav-link">Ürünler</a>
            <a href="satici.php" class="nav-link">Satıcılar</a>



          </nav> 
          <hr>

        <div class="row">
        
            <div class="col-md-7">
                <div class="row">
                    <h4 class="text-center">Müşteriler</h4>
				<hr>
				<table class="table" >
					<tr>
						<th>CUSTOMER ID</th>
						<th>FIRST NAME</th>
						<th>LAST NAME</th>
						<th>EMAİL</th>
						<th>ADRESS</th>
						<!-- <th>PHONE NUMBER</th> -->
						<th width="300">İŞLEMLER</th>


						
						

					</tr>
                    <?php 
                    $verial=$conn->prepare("SELECT * from CUSTOMER");

                    $verial->execute();

                    while($veriler=$verial->fetch(PDO::FETCH_ASSOC)){ ?>

                        <tr>
                            <td><?php echo $veriler['customerId'] ?></td>
                            <td><?php echo $veriler['fName'] ?></td>
                            <td><?php echo $veriler['lName'] ?></td>
                            <td><?php echo $veriler['email'] ?></td>
                            <td><?php echo $veriler['address'] ?></td>
                            <!-- <td><?php echo $veriler['phoneNumber'] ?></td> -->
                           <td> <a href="islem.php?custom=<?php echo $veriler['customerId']?>&musterisil=ok"><button class="btn btn-danger">Sil</button></a>


                        

                            
                         
                            
                        </tr>

                    <?php } ?>


                   


				</table>

			</div>
				

				

             	

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4" >
            	
						<h4 class="text-center">Müşteri Ekle	</h4><hr>

				<form action="islem.php" method="POST" >
					<input type="hidden" value="NULL" name="customerId">
					<input type="hidden" value='Insert' name="StatementType">


					<label for="fName">FULL NAME: </label>
					<input type="text" name="fName" ><br><br>
					<label for="fName">LAST NAME: </label>
					<input type="text" name="lName" ><br><br>
					
					<label for="email">EMAİL:  </label>
					<input type="text" name="email" ><br><br>
					

					
					<label for="address" style="margin-right:  20px">    ADDRESS    </label>
					<input type="text" name="address" >               <br><br>
					
					<label for="phoneNumber">TELEFON NUMARASI: </label>
					<input type="text" name="phoneNumber" ><br><br>
					<button class="btn btn-success"    type="submit" name="sp_musteri">Tamamla</button>

				</form>
				


				</div>
            
        </div>
    </div>
    
</body>
</html>