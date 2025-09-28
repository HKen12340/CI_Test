<?php
namespace App\Http\Service;

class PHPService{
     public function IdCheck(int $user_id,int $msg_id){
        return $user_id === $msg_id;
    }
}

?>
