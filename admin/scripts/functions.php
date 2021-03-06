<?php  

    function redirect_to($location){
        if($location != NULL){
            header('Location: ' .$location);
            exit;
        }
    }

	function generatePass($length = 8) {

		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&?';
		$charactersLength = strlen($characters);
		$randomPassword = '';
		for ($i = 0; $i < $length; $i++) {
			$randomPassword .= $characters[rand(0, $charactersLength - 1)];
		}
    return $randomPassword;
    
    }

    function greeting(){

        date_default_timezone_set('America/Toronto');
        $now = date('G');
    
        if($now > 6 && $now < 12){
          return "<h3>Good Morning</h3>";
        }elseif($now > 12 && $now < 18){
          return "<h3>Good Afternoon</h3>";
        }elseif($now > 18 && $now < 22){
          return "<h3>Good Night</h3>";
        }else{
          return "<h3>Good Night</h3>";
        }   
    
    }

?>