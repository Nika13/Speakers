<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Room;

class RoomComposer
{
	public function compose(View $view){
		$arr_rooms=[];
		$id=1;
		if (isset($_COOKIE["rooms"])){
			$cookies=explode(',',$_COOKIE["rooms"]);
			foreach ($cookies as $one){
				$id_room = (int)$one;
				if ($id_room>0) $arr_rooms[]=Room::find($id_room);
			}
		}
		else $arr_rooms[]=Room::find(1);
		if( (isset($_SERVER['REQUEST_URI']))){
			$url = $_SERVER['REQUEST_URI'];
			$arr_url = explode('/',$url);
			if ( $arr_url[1]=='room' ){
				$id = $arr_url[2];
			}
		}
		$thoose=Room::find($id);
		$view->with('arr_rooms',$arr_rooms)->with('thoose',$thoose);
	}
}
