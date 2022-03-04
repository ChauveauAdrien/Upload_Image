<?php

include_once($_SERVER['DOCUMENT_ROOT']."\partie2\my_config.php");

function return_to_gallery(array $users) {
    if (is_logged($users)) {
        require_once('../views/gallery.php');
    }else {
        return_to_login();
    }
}

return_to_gallery($users);



$dos = '../assets/img/img-gallery';
$dir =  opendir($dos);
while($file = readdir($dir)){
$allow_ext = array('jpg','png');
$ext = strtolower(substr($file, -3));
if (in_array($ext, $allow_ext)){
?>
  <div class = 'grid'>
  <a href="../assets/img/img-gallery/<?php echo $file; ?>" data-lightbox="image-1" data-title="My caption"><img class="example-image" src="../assets/img/img-gallery/<?php echo $file; ?>"/></a>
  </div>
<?php
}
}
?>



