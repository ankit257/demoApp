<?php
class RoomController extends \BaseController{
public static function v4() 
{
    sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
    // 32 bits for "time_low"
    mt_rand(0, 0xffff), mt_rand(0, 0xffff),

    // 16 bits for "time_mid"
    mt_rand(0, 0xffff),

    // 16 bits for "time_hi_and_version",
    // four most significant bits holds version number 4
    mt_rand(0, 0x0fff) | 0x4000,

    // 16 bits, 8 bits for "clk_seq_hi_res",
    // 8 bits for "clk_seq_low",
    // two most significant bits holds zero and one for variant DCE1.1
    mt_rand(0, 0x3fff) | 0x8000,

    // 48 bits for "node"
    mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
    return sprintf('%04x',
    	mt_rand(0, 0xffff)
    );
}	

public function start(){
	$room = $this->v4();
	echo $room;
	$redis = Redis::connection();

	//look for active room id if id is present go for new random number;
	// ele start the game room and 
}
public function join($room){
	//get no of players in the room 
	// if =1;
	// $status = 'wait', else $status = 'play'
	// if room is full throw err
}


}
?>