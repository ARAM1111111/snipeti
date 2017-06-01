<?php 

// function getConnect(){
// 		$host = "Localhost";
// 		$dbname = 'test';
// 		$user = "root";
// 		$password = '';
// 		$db = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
// 		return $db;
// }

// $db = getConnect();

// function select($db,$query){
// 	$res = $db->query($query);
// 	$res->execute();
// 	$result =$res->fetchAll(PDO::FETCH_ASSOC);
// 	return $result;
// }

// $db = getConnect();
// $res = select($db,"SELECT email,pass FROM login"); 

// ========================= INSERT ==========================

	// $db = Db::getConnect();
	// 	$sql = "INSERT INTO user(name,email,password) VALUES (:name,:email,:password) ";
	// 	$res = $db->prepare($sql);
	// 	$res->bindParam(":name",$name,PDO::PARAM_STR);
	// 	$res->bindParam(":email",$email,PDO::PARAM_STR);
	// 	$res->bindParam(":password",$password,PDO::PARAM_STR);
	// 	return $res->execute();

// ===========================================================

// ========================= UPDATE ==========================

		// $db = Db::getConnect();
		// $sql = "UPDATE user SET name= :name,password = :pass WHERE id = :id";
		// $res = $db->prepare($sql);
		// $res->bindParam(":name",$name,PDO::PARAM_STR);
		// $res->bindParam(":pass",$password,PDO::PARAM_STR);
		// $res->bindParam(":id",$userId,PDO::PARAM_INT);
		// return $res->execute();

// ===========================================================

// ======================= SELECT ONE =============================

		// $db = Db::getConnect();
		// $sql = "SELECT * FROM user WHERE email= :email AND password= :password";
		// $res = $db->prepare($sql);
		// $res->bindParam(":email",$email,PDO::PARAM_STR);
		// $res->bindParam(":password",$password,PDO::PARAM_STR);
		// $res->execute();
		// $user = $res->fetch();
		// if($user){
		// 	return $user['id'];
		// }
		// return false;

// ================================================================




		// foreach ($info as $key => $value) {
		// 	echo "<pre>";
		// 	print_r($info);
		// }



// ================ MYSQLI ===========================================

// $link = mysqli_connect('localhost', 'root', '', 'web');
//$result= mysqli_query($link, $sql);

// // Ассоциативный массив
// $row = mysqli_fetch_assoc($result);
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

// // Получаем первичный ключ новой записи
// $id = mysqli_insert_id($link);

// // Сколько записей изменено?
// $count = mysqli_affected_rows($link);

// // Сколько записей вернулось?
// $row_count = mysqli_num_rows($result);

// $all = mysqli_fetch_all($res,MYSQLI_ASSOC);

// =====================================================================

// ============================ AJAX =======================================

// $.ajax({
// 				url:"xn4_proc.php",
// 				method:"POST",
// 				data:{"ID_comp":ID_comp,"plane":plane"},
// 				success:function(d){
// 					location.reload();
// 					// console.log(d);
// 				}
// 			})
// 		});	


// =========================================================================
?>