<?php 


require_once 'bagla.php';
ob_start();
session_start();


if (isset($_POST['stokupdate'])) {
	
	$productId=$_POST['productId'];

	$kaydet=$conn->prepare("UPDATE STOCK set
		stock=:stock


		where productId={$_POST['productId']}
		");

	$insert=$kaydet->execute(array(

		'stock' =>$_POST['stock']

	));

	

	if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:stok.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:stok.php?durum=no");
		exit;
	}}
	if ($_GET['musterisil']=="ok") {
	

	$query = "EXECUTE dbo.sp_Customerinsertupdatedelete :customerID, :fName, :lName, :email, :address, :phoneNumber, :StatementType";
		$stpro = $conn->prepare($query);

		// call the stored procedure
		$returnvalue = $stpro->execute(array(
											':customerID'=>$_GET['custom'],
		                                    ':fName'=> NULL,
		                                    ':lName'=> NULL,
		                                    ':email'=> NULL,
		                                    ':address'=> NULL,
		                                    ':phoneNumber'=> NULL,
		                                    ':StatementType'=>'Delete'      
		             ));	
		if($returnvalue){

				// eski sayfaya geri dönme
		Header("Location: musteri.php?durum=ok");
		exit;
				//alt klasörse aas// üst klasörse ../

	}
	else{
		Header("Location: musteri.php?durum=no")	;
		// mysql_error();
		exit;
	}
	
				//alt klasörse aas// üst klasörse ../
}
if ($_GET['urunsil']=="ok") {
	

	$query = "EXECUTE sp_Productinsertupdatedelete :productId, :categoryId, :brandId, :productName, :price, :gram, :carats, :StatementType";
		$stpro = $conn->prepare($query);

		// call the stored procedure
		$returnvalue = $stpro->execute(array(
											':productId'=> $_GET['us'],
		                                    ':categoryId'=> $_POST['categoryId'],
		                                    ':brandId'=> $_POST['brandId'],
		                                    ':productName'=> $_POST['productName'],
		                                    ':price'=> $_POST['price'],
		                                    ':gram'=> $_POST['gram'],
											':carats'=> $_POST['carats'],
		                                    ':StatementType'=> 'Delete'    
		             ));	
		if($returnvalue){

				// eski sayfaya geri dönme
		Header("Location: urun.php?durum=ok");
		exit;
				//alt klasörse aas// üst klasörse ../

	}
	else{
		Header("Location: urun.php?durum=no")	;
		// mysql_error();
		exit;
	}
				//alt klasörse aas// üst klasörse ../
}
if ($_GET['markasil']=="ok") {
	$query = "EXECUTE sp_Brandinsertupdatedelete :brandId, :brandName, :StatementType";
		$stpro = $conn->prepare($query);

		// call the stored procedure
		$returnvalue = $stpro->execute(array(
											':brandId'=> $_GET['ms'],
		                                    ':brandName'=> $_POST['brandName'],
		                                    ':StatementType'=> 'Delete'      
		             ));	
		if($returnvalue){

				// eski sayfaya geri dönme
		Header("Location: marka.php?durum=ok");
		exit;
				//alt klasörse aas// üst klasörse ../

	}
	else{
		Header("Location: marka.php?durum=no")	;
		// mysql_error();
		exit;
	}}
	if ($_GET['calisansil']=="ok") {

$query = "EXECUTE sp_Staffinsertupdatedelete :staffId, :staffName, :staffSurname, :StatementType";
		$stpro = $conn->prepare($query);

		// call the stored procedure
		$returnvalue = $stpro->execute(array(
											':staffId'=> $_GET['cs'],
		                                    ':staffName'=> $_POST['staffName'],
		                                    ':staffSurname'=> $_POST['staffSurname'],
		                                    ':StatementType'=> 'Delete' 
		             ));	
		if($returnvalue){

				// eski sayfaya geri dönme
		Header("Location: calisan.php?durum=ok");
		exit;
				//alt klasörse aas// üst klasörse ../

	}
	else{
		Header("Location: calisan.php?durum=no")	;
		// mysql_error();
		exit;
	}}

	if(isset($_POST['saticiinsert'])){

		$query = "EXECUTE sp_Supplierinsertupdatedelete :supplierId, :brandId, :supplierName, :supplierSurname, :email, :phoneNumber, :StatementType";
		$stpro = $conn->prepare($query);

		// call the stored procedure
		$returnvalue = $stpro->execute(array(
											':supplierId'=> NULL,
		                                    ':brandId'=> $_POST['brandId'],
		                                    ':supplierName'=> $_POST['supplierName'],
		                                    ':supplierSurname'=> $_POST['supplierSurname'],
		                                    ':email'=> $_POST['email'],
		                                    ':phoneNumber'=> $_POST['phoneNumber'],
		                                    ':StatementType'=> "Insert"      
		             ));	
		if($returnvalue){

				// eski sayfaya geri dönme
		Header("Location: satici.php?durum=ok");
		exit;
				//alt klasörse aas// üst klasörse ../

	}
	else{
		Header("Location: satici.php?durum=no")	;
		// mysql_error();
		exit;
	}
				//alt klasörse aas// üst klasörse ../
}



if(isset($_POST['sp_musteri'])){

		$query = "EXECUTE sp_Customerinsertupdatedelete :customerID, :fName, :lName, :email, :address, :phoneNumber, :StatementType";
		$stpro = $conn->prepare($query);

		// call the stored procedure
		$returnvalue = $stpro->execute(array(
											':customerID'=> $_POST['customerID'],
		                                    ':fName'=> $_POST['fName'],
		                                    ':lName'=> $_POST['lName'],
		                                    ':email'=> $_POST['email'],
		                                    ':address'=> $_POST['address'],
		                                    ':phoneNumber'=> $_POST['phoneNumber'],
		                                    ':StatementType'=> $_POST['StatementType']      
		             ));	
		if($returnvalue){

				// eski sayfaya geri dönme
		Header("Location: musteri.php?durum=ok");
		exit;
				//alt klasörse aas// üst klasörse ../

	}
	else{
		Header("Location: musteri.php?durum=no")	;
		// mysql_error();
		exit;
	}}

	if(isset($_POST['sp_calisan'])){

		$query = "EXECUTE sp_Staffinsertupdatedelete :staffId, :staffName, :staffSurname, :StatementType";
		$stpro = $conn->prepare($query);

		// call the stored procedure
		$returnvalue = $stpro->execute(array(
											':staffId'=> $_POST['staffId'],
		                                    ':staffName'=> $_POST['staffName'],
		                                    ':staffSurname'=> $_POST['staffSurname'],
		                                    ':StatementType'=> $_POST['StatementType']   
		             ));	
		if($returnvalue){

				// eski sayfaya geri dönme
		Header("Location: calisan.php?durum=ok");
		exit;
				//alt klasörse aas// üst klasörse ../

	}
	else{
		Header("Location: calisan.php?durum=no")	;
		// mysql_error();
		exit;
	}}


	if(isset($_POST['randevuinsert'])){

		$query = "EXECUTE sp_Appointmentinsertupdatedelete :appointmentId, :customerId, :staffId, :dateTime, :StatementType";
		$stpro = $conn->prepare($query);

		// call the stored procedure
		$returnvalue = $stpro->execute(array(
											':appointmentId'=> NULL,
		                                    ':customerId'=> $_POST['customerId'],
		                                    ':staffId'=> $_POST['staffId'],
		                                    ':dateTime'=> $_POST['dateTime'],
		                                    ':StatementType'=> "Insert"      
		             ));	
		if($returnvalue){

				// eski sayfaya geri dönme
		Header("Location: randevu.php?durum=ok");
		exit;
				//alt klasörse aas// üst klasörse ../

	}
	else{
		Header("Location: randevu.php?durum=no")	;
		// mysql_error();
		exit;
	}}

	if(isset($_POST['kategoriinsert'])){

		$query = "EXECUTE sp_Categoryinsertupdatedelete :categoryId, :categoryName, :madeOf, :StatementType";
		$stpro = $conn->prepare($query);

		// call the stored procedure
		$returnvalue = $stpro->execute(array(
											':categoryId'=> NULL,
		                                    ':categoryName'=> $_POST['categoryName'],
		                                    ':madeOf'=> $_POST['madeOf'],
		                                    ':StatementType'=> "Insert"      
		             ));	
		if($returnvalue){

				// eski sayfaya geri dönme
		Header("Location: kategori.php?durum=ok");
		exit;
				//alt klasörse aas// üst klasörse ../

	}
	else{
		Header("Location: kategori.php?durum=no")	;
		// mysql_error();
		exit;
	}}

	if(isset($_POST['markainsert'])){

		$query = "EXECUTE sp_Brandinsertupdatedelete :brandId, :brandName, :StatementType";
		$stpro = $conn->prepare($query);

		// call the stored procedure
		$returnvalue = $stpro->execute(array(
											':brandId'=> NULL,
		                                    ':brandName'=> $_POST['brandName'],
		                                    ':StatementType'=> "Insert"      
		             ));	
		if($returnvalue){

				// eski sayfaya geri dönme
		Header("Location: marka.php?durum=ok");
		exit;
				//alt klasörse aas// üst klasörse ../

	}
	else{
		Header("Location: marka.php?durum=no")	;
		// mysql_error();
		exit;
	}}
	if(isset($_POST['saticiinsert'])){

		$query = "EXECUTE sp_Supplierinsertupdatedelete :supplierId, :brandId, :lName, :email, :address, :phoneNumber, :availableStock, :StatementType";
		$stpro = $conn->prepare($query);

		// call the stored procedure
		$returnvalue = $stpro->execute(array(
											':supplierId'=> NULL,
		                                    ':brandId'=> $_POST['brandId'],
		                                    ':supplierName'=> $_POST['supplierName'],
		                                    ':supplierSurname'=> $_POST['supplierSurname'],
		                                    ':email'=> $_POST['email'],
		                                    ':phoneNumber'=> $_POST['phoneNumber'],
											':availableStock'=> $_POST['availableStock'],
		                                    ':StatementType'=> "Insert"      
		             ));	
		if($returnvalue){

				// eski sayfaya geri dönme
		Header("Location: satici.php?durum=ok");
		exit;
				//alt klasörse aas// üst klasörse ../

	}
	else{
		Header("Location: satici.php?durum=no")	;
		// mysql_error();
		exit;
	}}
	if(isset($_POST['sp_urun'])){

		$query = "EXECUTE sp_Productinsertupdatedelete :productId, :categoryId, :brandId, :productName, :price, :gram, :carats, :StatementType";
		$stpro = $conn->prepare($query);

		// call the stored procedure
		$returnvalue = $stpro->execute(array(
											':productId'=> $_POST['productId'],
		                                    ':categoryId'=> $_POST['categoryId'],
		                                    ':brandId'=> $_POST['brandId'],
		                                    ':productName'=> $_POST['productName'],
		                                    ':price'=> $_POST['price'],
		                                    ':gram'=> $_POST['gram'],
											':carats'=> $_POST['carats'],
		                                    ':StatementType'=> $_POST['StatementType']     
		             ));	
		if($returnvalue){

				// eski sayfaya geri dönme
		Header("Location: urun.php?durum=ok");
		exit;
				//alt klasörse aas// üst klasörse ../

	}
	else{
		Header("Location: urun.php?durum=no")	;
		// mysql_error();
		exit;
	}}


?>