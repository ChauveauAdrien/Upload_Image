<?php 

// 1ere etape de verification


// function verify_post() {

//     return isset($_POST['login']) && isset($_POST['id']) && isset($_POST['password']);


// }

// function redirect($result){
//     if ($result == -1) {
//         header('Location: http://part1.test/partie2/index.php?erreur=-1');
//     }else {
//         header('Location: http://part1.test/partie2/index.php?erreur=-2');
//     }
// }

// function redirectDashboard() {
//     header('Location: http://part1.test/partie2/views/dashboard.php');
    
// }

// function verify_account () {
//     $users = [
//         [
//             'username'=> 'adrien',
//             'password'=> '261cfcf3eebda733c213088c8d4f323e6a3c9187',
//             'formula'=> '',
//             'quota'=> '',
//         ],
//         [
//             'username'=> 'brice',
//             'password'=> '22e7773d72bf084ed44ee01568bf3678c6cbf336',
//             'formula'=> '',
//             'quota'=> '',
//         ]
//     ];
//     $clientId = $_POST['id'];
//     $clientPassword = hash('ripemd160', $_POST['password']);
//     $k ='cdcd';
//     $g ='c';
//     foreach ($users as $key => $value) {
//         return hash_equals($users[$key]['password'], $clientPassword) && $clientId == $users[$key]['username'];
//     }
// }


// function create_session($clientId, $quota, $formula) {
//     session_start();
//     $_SESSION['id']= $clientId;
//     $_SESSION['quota']= $quota;
//     $_SESSION['formula']= $formula;
// }

// function verify() {
//     $result = -1;
//     if (isset($_POST['login']) && empty($_POST['id']) && empty($_POST['username'])) {
//         $result = -1;
//     }else {
//         if (verify_account()) {
//             $result = 1;
//             create_session($clientId, $k, $g);
//             redirectDashboard();
//         }else {
//             $result = -2;
//         }
//     }
//     if ($result < 0) {
//         $erreurAnim = "";
//         redirect($result);
//     }

// }
// verify();





// fontion verifier identité 


include_once($_SERVER['DOCUMENT_ROOT']."\partie2\my_config.php");


function is_known(array $users) {
$is_credentials_correct = false;
$username = '';
$userId = -1;
$quota = 0;
if (verify_if_isset_and_not_empty()) {
    $username = $_POST['username'];
    $userpassword = $_POST['password'];
    $userId = index_of_username($username, $users);
    if ($userId != -1) {
        if (check_user_password($userpassword, $users[$userId]['password'])) {
            $is_credentials_correct = true;
            $quota = $users[$userId]['quota'];
        }
    }
}if ($is_credentials_correct) {
    create_session($username, $userId, $quota);
    redirect_to_dashboard();
} else {
    back_to_login();
}

}


// fontion qui verifie si les champs sont remplis

function verify_if_isset_and_not_empty() {
    return isset($_POST['login']) && isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password']);
}
// fonction retour au login
function back_to_login() {
    $wrong = 'wrong';
    header('Location: http://part1.test/partie2?erreur=-1');
}


// fonction qui retrouve l'index de l'utilisateur

function index_of_username(string $username, array $users){
    $result= -1;
    for ($i = 0 ; $i < sizeof($users) ; $i++){
        if($users[$i]['username'] == $username){
            $result= $i;
            break;
        }
    }
    return $result;
}

// check le mot de passe

function check_user_password($userpassword, $known_password) {
    $client_password = hash('ripemd160', $userpassword);
    return hash_equals($known_password, $client_password);
}


// creation de la session

function create_session($username, $userId, $quota) {
    session_start();
    $_SESSION['username']= $username;
    $_SESSION['quota']= $quota;
    $_SESSION['id']= $userId;
    
}


// redirection vers le dashboard

function redirect_to_dashboard() {
    header('Location: http://part1.test/partie2/controllers\dashboard-controller.php');
}

is_known($users);













echo array_search('adrien', $users);


























































?>