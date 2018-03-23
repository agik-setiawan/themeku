<?php
//sample filter
add_filter('coba','coba_coba',10,3);

function coba_coba($data,$data2){
var_dump($data2);
}

?>