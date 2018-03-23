<?php
namespace app\models;
use app\helpers\Assets;
use app\Config;
/**
* 
*/
class General extends Config
{

/**
* logo file
*/
public function logoWeb(){

		$theme_url=get_template_directory_uri();
		$exists_icon=$this->db()->query("select val from themeku where nama='logo_web'")->fetch();
		if($exists_icon['val']==''){
			$icon=Assets::img($theme_url,'kreasisoft.png');	
		}else{
			$icon=$exists_icon['val'];
		}
		return $icon;
	}
	
public function all_one($param){
return $this->db()->query("select val from themeku where nama='$param'")->fetch()['val'];
}	

}
?>