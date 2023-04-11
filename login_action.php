<?php
// maglumat bazasynyň birikmesini goşuň
include("connect.php");
$tbl_name = "user_levels"; // Tablisanyň ady 

$username = $_POST['username']; // formdan iberilen ulanyjy ady
$password = $_POST['password']; // formdan iberilen parol


// setirleri arassala
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

//Query
$sql = "SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result = mysqli_query($conn, $sql);
//mysqli_num_row tablisanyň hataryny hasaplaýar
if (mysqli_num_rows($result) > 0) {
	$rows = mysqli_fetch_assoc($result);


	// Dürli ulanyjy derejesi bolan göni sahypalar
	if ($rows['userlevel'] == '1') {
		header('location: user1.html'); //User1 
		session_register("username");
		session_register("password");

	} else
		if ($rows['userlevel'] == '2') {
			header('location: user2.html'); //User2 
			session_register("username");
			session_register("password");

		} else
			if ($rows['userlevel'] == '3') {
				header('location: user3.html'); //user 3 
				session_register("username");
				session_register("password");

			} else
				if ($rows['userlevel'] == '4') {
					header('location: user4.html'); // user4 
					session_register("username");
					session_register("password");

				}
} else {
	// Error login
	echo "<script>alert('Giriş gadaganlandy!');
						window.location='index.php';
						</script>";
}

?>