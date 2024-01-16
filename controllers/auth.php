<?php
session_start();
include '../db/db_conn.php';


if(isset($_POST['curp']) ){
    $curp = $_POST['curp'];

    if(empty($curp)) {
        header("Location: login.php?error=CURP is required");
        exit();
    } 
    
    else {
        $stmt = $conn->prepare("SELECT * FROM galardonados WHERE curp=?");
        $stmt->execute([$curp]);
        if($stmt->rowCount() === 1){
            $user = $stmt->fetch();

            $user_curp = $user['curp'];
            $user_name = $user['name'];
            $user_last_name = $user['last_name'];
            $user_prize = $user['prize'];
            $user_date_asistence = $user['date_asistence'];
            $user_place = $user['place'];
            $user_is_asisting = $user['is_asisting'];
            $user_company = $user['company'];
            
            if($curp === $user_curp) {
                $_SESSION['user_curp'] = $user_curp;
                $_SESSION['user_name'] = $user_name;
                $_SESSION['user_last_name'] = $user_last_name;
                $_SESSION['user_prize'] = $user_prize;
                $_SESSION['user_date_asistence'] = $user_date_asistence;
                $_SESSION['user_place'] = $user_place;
                $_SESSION['user_is_asisting'] = $user_is_asisting;
                $_SESSION['user_company'] = $user_company;

                if(is_null($user_is_asisting)) {
                    
                    if(is_null($user_company)) {
                        header("Location: ../views/askCompany.php");
                    }   
                    
                    else {
                        header("Location: askCompany.php?error=idk man");
                    }
                    header("Location: ../views/confirmAsistance.php");
                } 
                
                else {
                    header("Location: ../views/result.php");
                }
            } 
            
            else {
                header("Location: login.php?error=Invalid CURP");
                exit();
            }

        }   else {
            header("Location: login.php?error=CURP not found");
            exit();
        }
    }
}   

else {
    header("Location: login.php?error=CURP is required");
    exit();
}