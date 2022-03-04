<?php

$users = [
        [
            'username'=> 'adrien',
            'password'=> '261cfcf3eebda733c213088c8d4f323e6a3c9187',
            'nbrImg'=> 0,
            'quota'=> 0,
        ],
        [
            'username'=> 'brice',
            'password'=> '22e7773d72bf084ed44ee01568bf3678c6cbf336',
            'nbrImg'=> 0,
            'quota'=> 0,
        ]
    ];


$formats = [
    "jpg" => "image/jpg",
    "jpeg" => "image/jpeg",
    "gif" => "image/gif",
    "png" => "image/png"
];


$max_file_size = 10 * 1024 * 1024; // 10 Mo max





    function is_logged(array $users){
        session_start();
        if (isset($_SESSION['id'])){
            $user_id = $_SESSION['id'];
            if(isset($users[$user_id])){
                return true ;
            }
        }
        return false; 
    }
    
    function return_to_login(){
        header('Location: http://part1.test/partie2');
    
    }
?>