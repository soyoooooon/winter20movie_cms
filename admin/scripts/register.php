<?php

function createUser($fname, $username, $password, $email) {
    $pdo = Database::getInstance()->getConnection();

    // TODO: build the proper sql query with the information above
    // excute it to create a user in tbl_user

    $create_user_query = 'INSERT INTO `tbl_user` (`user_fname`, `user_name`, `user_pass`, `user_email`) VALUES (:fname, :username, :password, :email)';
    $user_set = $pdo->prepare($create_user_query);

    $user_set_result = $user_set->execute(
        array(
            ':fname'=>$fname,
            ':username'=>$username,
            ':password'=>$password,
            ':email'=>$email
        )
    
    );

if($user_set_result) {
    redirect_to('index.php');
}else{
    return 'bai';

}



}