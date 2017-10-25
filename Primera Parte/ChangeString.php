<?php
class ChangeString{
	public function build($cadena){
		$abc = ["a", "b", "c", "d","e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r",
"s", "t", "u", "v", "w", "x", "y", "z",];
		$pila = array();
		for($i=0;$i<strlen($cadena);$i++)
		{
			if(ctype_alpha($cadena[$i])) {
				
				for($x=0; $x<count($abc); $x++){
					if($abc[$x]==$cadena[$i]){
						array_push($pila, $abc[$x+1]);
					}
					if($cadena[$i]=="z"){
						array_push($pila, "a");
						break;
					}
				}	
            }
            if(ctype_upper($cadena[$i])){
                for($x=0; $x<count($abc); $x++){
					if($abc[$x]==strtolower($cadena[$i])){
						array_push($pila, strtoupper($abc[$x+1]));	
					}
					if($cadena[$i]=="Z"){
						array_push($pila, "A");
						break;
					}
				}	

            }
			if(!ctype_alpha($cadena[$i])) {
				array_push($pila, $cadena[$i]);
    		}	
		}
		$cadena = implode("", $pila);
		return $cadena;
	}
}
$ChangeString = new ChangeString();
echo $ChangeString->build("**Casa 52Z");
?>