<?php
	namespace App\Libs;
	use Image;
	class Imag {
		public function url( $puth=null, $direction=null, $name=null){
			set_time_limit(10000);
				if ($puth != null){
					$dir=public_path().$direction;
					if (!file_exists($dir)){
						mkdir($dir, 0777, true);
					}
					if (!$name){
						$f_name=date('y_m_d_h_i_s').'.jpg';
					} else {
						$f_name=$name;
					}
					$sm_name='s_'.$f_name;
					$img=Image::make($puth);
					$img->resize(900, null, function($c){
						$c->aspectRatio();
					});
					$img->save($dir.$f_name);
					$img->resize(200, null, function($c){
						$c->aspectRatio();
					});
					$img->save($dir.$sm_name);
					return $f_name;
				}
				else{
					return false;
				}
		
		}
	}
