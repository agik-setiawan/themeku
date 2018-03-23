<?php
namespace app\models;
use app\helpers\Assets;
use app\Config;
/**
* 
*/
class Footer extends Config
{

/**
* logo file
*/
public function all_one($param){
return $this->db()->query("select val from themeku where nama='$param'")->fetch()['val'];
}	

}
?>