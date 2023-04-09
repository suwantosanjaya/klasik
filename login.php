<?php
    include_once "koneksi.php";
    //var_dump($_POST);
    if(isset($_POST["submit"])){
        $data = [$_POST["username"], $_POST["password"]];
        $sql = "SELECT * FROM pengguna WHERE uname=? AND pwd=md5(?);";
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $rowCount = $stmt->rowCount();
        //var_dump($result);        
        $conn = null;
        if($rowCount > 0){
            //echo "Anda berhasil login";
            session_start();
            $_SESSION["login"]["sesiUsername"] = $result[0]["uname"];
            $_SESSION["login"]["sesiFullname"] = $result[0]["fname"];
            $_SESSION["login"]["sesiEmail"] = $result[0]["email"];
            $_SESSION["login"]["sesiAkses"] = $result[0]["akses"];
            //print_r($_SESSION);
            //unset($_SESSION["sesiUsername"]);
            header("location:home.php");
            exit();
        }else{
            echo "Username atau Password salah!";
        }
    }
?>