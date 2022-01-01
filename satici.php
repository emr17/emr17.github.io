
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
                    <h4 class="text-center">Satıcılar</h4>
				<hr>
				<table class="table" >
					<tr>
						<th>SUPPLIER ID</th>
						<th>BRAND ID</th>
						<th>SUPPLIER NAME</th>
						<th>SUPPLIER SURNAME</th>
						<th>EMAIL</th>
						<th>PHONE NUMBER</th>



						
						

					</tr>
                    <?php 
                    $verial=$conn->prepare("SELECT * from SUPPLIER");

                    $verial->execute();

                    while($veriler=$verial->fetch(PDO::FETCH_ASSOC)){ ?>

                        <tr>
                            <td><?php echo $veriler['supplierId'] ?></td>
                            <td><?php echo $veriler['brandId'] ?></td>
                            <td><?php echo $veriler['supplierName'] ?></td>
                            <td><?php echo $veriler['supplierSurname'] ?></td>
                            <td><?php echo $veriler['email'] ?></td>
                            <td><?php echo $veriler['phoneNumber'] ?></td>

                        

                            
                         
                            
                        </tr>

                    <?php } ?>


                   


				</table>

			</div>
				

				

             	

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4" >
						<h4 class="text-center">Satıcı Ekle	</h4><hr>

				 <form action="islem.php" method="POST">
						<label for="brandId">BRAND ID: </label>
						<input type="text" name="brandId" value="" ><br><br>
						<label for="supplierName">SUPPLIER NAME:  </label>
						<input type="text" name="supplierName"  value="" ><br><br>
                        <label for="supplierSurname">SUPPLIER SURNAME:  </label>
                        <input type="text" name="supplierSurname" value="" ><br><br>
                        <label for="email">EMAİL:  </label>
                        <input type="text" name="email"  value="" ><br><br>
                         <label for="phoneNumber">PHONE NUMBER:  </label>
                        <input type="text" name="phoneNumber" value="" ><br><br>
                     

						
						
						<button class="btn btn-success "    type="submit" name="saticiinsert">Tamamla </button><br>

					</form>
				</div>
            
        </div>
    </div>
    
</body>
</html>