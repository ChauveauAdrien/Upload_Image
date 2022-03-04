<?php


include_once($_SERVER['DOCUMENT_ROOT']."\partie2\my_config.php");



function return_to_dashboard(array $users) {
    if (is_logged($users)) {
        require_once('../views/dashboard.php');
    }else {
        return_to_login();
    }
}

return_to_dashboard($users);


/**
 * function qui vérifie s'il y a un fichier de renseigné
 */

 function is_upload_working() {
     return isset($_FILES['photo']) && $_FILES['photo']['error'] != 1;
 }
 function get_tmp_file() {
     return $_FILES['photo']['tmp_name'];
 }
 function get_file_name() {
     return $_FILES['photo']['name'];
 }
 function get_file_size() {
     return $_FILES['photo']['size'];
 }
 function get_file_type() {
     return $_FILES['photo']['type'];
 }
 function create_final_file_name(string $filename) {
     $tmpName = explode(".", $filename);
     return $tmpName[0].uniqid().'.'.$tmpName[1];
 }
 function get_destination() {
     return '../img/img-gallery/';
 }


 function is_file_an_image(string $type, array $formats) {
    if(in_array($type, $formats)) {
        return true;
    }else {
        return false;
    }
 }
 
 function is_file_size_correct($size, $max_file_size) {
     if($size <= $max_file_size){
        return true;
     }else {
         return false;
     }
 }


//  fonction pour calculer le quota
// function quota_replace(array $users) {
//     $replacements = array('quota' => get_file_size());
//     $quota_replace = array_replace($users[$_SESSION['id']], $replacements);
//     $new_quota = $_SESSION['quota']+$quota_replace['quota'];
//     echo $new_quota;
// }

function upload_on_submit (array $users, array $formats, int $max_file_size) {
    if (is_upload_working()) {
        $tmp = get_tmp_file();
        $filename = get_file_name();
        $size = get_file_size();
        $type = get_file_type(); 
        $finalName = create_final_file_name($filename);
        $destination = get_destination();
        if (is_file_an_image($type, $formats)) {
            if (is_file_size_correct($size, $max_file_size)) {
                if (move_uploaded_file($tmp, $destination . $finalName)) {
                    echo 'téléchargement réussi';
                    // quota_replace($users);
                }
            }else {
                echo "- Image trop lourde";
            }
        }else {
            echo "- format de fichier incorrect";
        }
    }else {
        echo "aucun fichier de sélectionné";
    }
}


upload_on_submit ($users, $formats, $max_file_size);

echo is_upload_working();

?>