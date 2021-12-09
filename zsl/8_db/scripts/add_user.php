<?php
    if(!empty($_POST)){
        foreach ($_POST as $key => $value) {
            // echo "$key: $value<br>";
            if (empty($value)){
                // echo "$key<br>";
                header("location: ../8_4_select_db_table_delete_insert.php?error=Wypełnij wszystkie pola");
                exit();
            }
        }
        // echo "ok";
        require_once "./connect.php";
        // $sql = "INSERT INTO `users` (`id`, `cityid`, `name`, `surname`, `birthday`, `create_date`) VALUES (NULL, '2', 'a', 'd', '2021-12-09', CURRENT_TIMESTAMP);";
        $sql = "INSERT INTO `users` (`id`, `cityid`, `name`, `surname`, `birthday`, `create_date`)
        VALUES (NULL, '$_POST[cityid]', '$_POST[name]', '$_POST[surname]', '$_POST[birthday]', current_timestamp());";
        $connect -> query($sql);
        // echo $connect -> affected_rows;
        if ($connect -> affected_rows == 1){
            header("location: ../8_4_select_db_table_delete_insert.php?error=Prawidłowo dodano użytkownika");
        }else{
            header("location: ../8_4_select_db_table_delete_insert.php?error=Nie dodano użytkownika");
        }
        $connect -> close();
    }
    // header("location: ../8_4_select_db_table_delete_insert.php");
?>