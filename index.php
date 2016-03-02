<?php
	function rekenen($get1, $get2, $somtype){
		if ($somtype == "plus"){
			return ($get1+$get2);
		}elseif ($somtype == "min"){
			return ($get1-$get2);
		}elseif ($somtype == "keer"){
			return ($som1*$som2);
		}elseif ($somtype == "delen"){
			return ($som1/$som2);
		}else{
			return null;
		}
	}
	$rekentool = rekenen(4,7,"delen");
	if ($rekentool != null){
			echo $rekentool;
		}
	}
?>