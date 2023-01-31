<?php

// Чи авторизований користувач
function isLogin() {

    // змінні для сесії та кукі
    $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null;  // true/false
    $is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null;  // true/false

    if($is_session || $is_cookie) {
        return true;
    } else {
        return false;
    }
}

// отримання поточного авторизованного користувача
function getCurrentUser() {

    global $conn;

    $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null;  // true/false
    $is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null;  // true/false

    if($is_session || $is_cookie) {

        $userID = $is_session ? $_SESSION["user_id"] : $_COOKIE["user_id"];
        $sql = "SELECT * FROM users WHERE id=" . $userID;
        $result = mysqli_query($conn, $sql);

        return $result->fetch_assoc();
    } else {
        return null;
    }
}

// функція отримання id авторизованого користувача
function getUserId() {
    $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null;  // true/false
    $is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null;  // true/false

    if($is_session || $is_cookie) {
        return $is_session ? $_SESSION["user_id"] : $_COOKIE["user_id"];
    } else {
        return 0;
    }
}


// функція отримання рядка з рандомними символами
function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
		    $randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	} 

?>
