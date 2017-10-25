<?php
class CompleteRange{
    public function build($cadena){
        $cant=count($cadena);
       
            $resul=$cadena[$cant-1]-($cadena[0]-1);
			$list_number = array();
		if($resul==$cant){
			
		}else{
		 	for($x=$cadena[0]; $x<=$cadena[$cant-1]; $x++){
            	array_push($list_number, $x);
       		}
        }
		return $list_number;
    }
}
$cadena=[55, 58, 60];
$CompleteRange = new CompleteRange();
echo $CompleteRange->build($cadena);
print_r($CompleteRange->build($cadena));
?>