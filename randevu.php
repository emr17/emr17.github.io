
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
                    <h4 class="text-center">Randevular</h4>
				<hr>
				<table class="table" >
					<tr>
						<th>APPOINTMENT ID</th>
						<th>CUSTOMER ID</th>
						<th>STAFF ID</th>
						<th>DATE TIME</th>

						
						

					</tr>
                    <?php 
                    $verial=$conn->prepare("SELECT * from APPOINTMENT");

                    $verial->execute();

                    while($veriler=$verial->fetch(PDO::FETCH_ASSOC)){ ?>

                        <tr>
                            <td><?php echo $veriler['appointmentId'] ?></td>
                            <td><?php echo $veriler['customerId'] ?></td>
                            <td><?php echo $veriler['staffId'] ?></td>
                            <td><?php echo $veriler['dateTime'] ?></td>

                        

                            
                         
                            
                        </tr>

                    <?php } ?>


                   


				</table>

			</div>
				

				

             	

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4" >
						<h4 class="text-center">Randevu Ekle	</h4><hr>

				 <form action="islem.php" method="POST">
						<label for="customerId">CUSTOMER ID: </label>
						<input type="text" name="customerId" value="" ><br><br>
						<label for="staffId">STAFF ID:  </label>
						<input type="text" name="staffId"  value="" ><br><br>
						<label for="dateTime">DATE TIME:  </label>
						<input type="text" name="dateTime"  value="" ><br><br>
						
						
						
						<button class="btn btn-success "    type="submit" name="randevuinsert">Tamamla </button><br>

					</form>
				</div>
            
        </div>
    </div>
    
</body>
</html>