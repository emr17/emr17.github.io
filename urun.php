
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

    <div class="container">
    	<hr>
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
                    <h4 class="text-center">Ürünler</h4>
				<hr>
				<table class="table" >
					<tr>
						<th>PRODUCT ID</th>
						<th>CATEGORY ID</th>
						<th>BRAND ID</th>
						<th>PRODUCT NAME</th>
						<th>PRICE</th>
						<th>GRAM</th>

						<th>CARATS</th>
                        <th width="300">İŞLEMLER</th>


						
						

					</tr>
                    <?php 
                    $verial=$conn->prepare("SELECT * from PRODUCT");

                    $verial->execute();

                    while($veriler=$verial->fetch(PDO::FETCH_ASSOC)){ ?>

                        <tr>
                            <td><?php echo $veriler['productId'] ?></td>
                            <td><?php echo $veriler['categoryId'] ?></td>
                            <td><?php echo $veriler['brandId'] ?></td>
                            <td><?php echo $veriler['productName'] ?></td>
                            <td><?php echo $veriler['price'] ?></td>
                            <td><?php echo $veriler['gram'] ?></td>
                            <td><?php echo $veriler['carats'] ?></td>
                           <td> <a href="islem.php?us=<?php echo $veriler['productId']?>&urunsil=ok"><button class="btn btn-danger">Sil</button></a>



                        

                            
                         
                            
                        </tr>

                    <?php } ?>


                   


				</table>

			</div>
				

				

             	

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4" >
						<h4 class="text-center">Ürün Ekle	</h4><hr>

				 <form action="islem.php" method="POST">
				 	<input type="hidden" value="NULL" name="customerId">
					<input type="hidden" value='Insert' name="StatementType">
						<label for="categoryId">CATEGORY ID:  </label>
						<input type="text" name="categoryId"  value="" ><br><br>
						<label for="brandId">BRAND ID:  </label>
						<input type="text" name="brandId"  value="" ><br><br>
						<label for="productName">PRODUCT NAME: </label>
						<input type="text" name="productName" value="" ><br><br>
						<label for="price">PRICE:  </label>
						<input type="text" name="price"  value="" ><br><br>
						<label for="gram">GRAM: </label>
						<input type="text" name="gram" value="" ><br><br>
						<label for="carats">CARATS:  </label>
						<input type="text" name="carats"  value="" ><br><br>
						
						
						<button class="btn btn-success "    type="submit" name="uruninsert">Tamamla </button><br>

					</form>
					<hr>
						

				</div>
            
        </div>
    </div>
    
</body>
</html>