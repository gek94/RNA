<?php 
	function fbias(){
         $b = array();
         $b[0] = [-0.42188,-0.66320,-0.54221,-1.03254,-0.38927];
         $b[1] = [-0.57898,-0.24061,-0.30298,-0.42683,-0.56949];
         $b[2] = [-0.61142,-0.53294,-0.41319,-0.52195,-0.70478];
         $b[3] = [-0.50133,-0.58694,-0.49739,-0.48415,-0.54477];
         $b[4] = [-0.56333,-0.48427,-0.31297,-0.56803,-0.66070];
         $b[5] = [-0.61301,-0.35763,-0.20944,-0.42592,-0.60984];
         $b[6] = [-0.45660,-0.59283,-0.58254,-0.52801,-0.40699];  
         return $b;
    }

    function fno1(){
    	$no1 = array();
    	$no1[0] = [-0.16130,-1.04523,-1.89984,0.43331,-0.17738];
    	$no1[1] = [0.91330,-1.32159,-0.55946,0.42886,-3.24291];
    	$no1[2] = [2.52883,3.04182,0.68591,0.99142,-1.28010];
    	$no1[3] = [1.82966,-0.70591,-2.74401,-2.16957,-0.12165];
    	$no1[4] = [4.30031,-0.45962,-1.79530,0.67897,3.27728];
    	$no1[5] = [5.25119,-3.74452,-1.48574,-2.31875,5.49686];
    	$no1[6] = [-1.67166,-2.00946,0.11723,4.22937,-1.70948];
    	return $no1;
    }

    function fno2(){
    	$no2 = array();
    	$no2[0] = [-0.10743,3.74440,0.36454,0.62772,-0.14550];
    	$no2[1] = [6.50470,-3.92332,-2.31296,-5.04772,4.44416];
    	$no2[2] = [4.27656,1.50044,-2.04105,4.62224,3.65245];
    	$no2[3] = [-2.51607,0.35436,0.93225,-3.34547,5.24327];
    	$no2[4] = [-1.42720,0.43830,-2.63811,-1.40914,-0.30332];
    	$no2[5] = [-0.83817,0.48651,-1.52658,-0.02437,-0.97446];
    	$no2[6] = [-0.34766,0.53087,-0.63271,-3.03033,-0.63291];
    	return($no2);
    }

    function fno3(){
    	$no3 = array();
    	$no3[0] = [3.25713,	0.44108,	0.78308,	-1.11693,	3.30513];
    	$no3[1] = [0.17921,	0.68003,	1.94117,	0.52172,	-2.58787];
    	$no3[2] = [-3.13651,	2.68397,	5.08087,	1.07000,	-2.37574];
    	$no3[3] = [-3.18221,	-3.77361,	-4.04260,	-1.64029,	0.09947];
    	$no3[4] = [-4.72734,	-1.69700,	3.68542,	0.11767,	-3.01097];
    	$no3[5] = [-1.76698,	2.25328,	2.17908,	-0.70884,	-1.70705];
    	$no3[6] = [2.13684,	0.48711,	0.55306,	1.43897,	2.03359];
    	return $no3;
    }

    function fno4(){
    	$no4 = array();
    	$no4[0] = [-0.50165,	-1.72092,	-1.31760,	0.26699,	-0.24111,];
    	$no4[1] = [-2.50284,	0.74959,	1.81269,	0.23086,	1.31258,];
    	$no4[2] = [-0.05249,	0.09668,	-2.77033,	4.64587,	-1.17934,];
    	$no4[3] = [5.33214,	-2.01359,	3.87549,	-5.42137,	2.74015,];
    	$no4[4] = [2.37580,	7.51848,	-0.43114,	1.69943,	-0.22569,];
    	$no4[5] = [-2.29248,	0.71091,	0.28066,	2.51345,	-2.21461,];
    	$no4[6] = [-1.94629,	-1.39284,	-3.83008,	-2.86424,	-1.86724,];
    	return $no4;
    }

    function fpesosCapSalida(){
        $fwcap = array();
        $fwcap[0] = [2.21370, 2.89286, -9.44548,    9.75145];
        $fwcap[1] = [-10.17950,   -11.32800,   6.99048, 1.52376];
        $fwcap[2] = [-9.44717,    4.48234, 7.30979, -10.64320];
        $fwcap[3] = [4.32129, -9.06168,    6.01839, -12.60420];
        $fwcap[4] = [1.41727, -9.86107,    -1.22922,    12.95307];
        $fwcap[5] = [7.28712, 8.15833, 7.50747, -2.45607];
        $fwcap[6] = [5.49279, -10.40790,   -10.47600,   -2.69107];
        $fwcap[7] = [-8.95340,    2.73263, 1.41979, 10.65771];
        $fwcap[8] = [6.75168, 7.03488, -9.74851,    -11.70350];
        $fwcap[9] = [-11.27840,   6.89108, -9.77485,    -1.37522];

        return $fwcap;
    }
    function fbiasSalida(){
        $b = [-9.80067,-2.30366,-6.30995,-5.17719,-8.99845,-18.46660,0.43095,-9.97839,-7.92905,-1.09130];
        return $b;
    }
    function fsalidaFinal($w,$s){
        $r = array();
        for ($i=0; $i < 10; $i++) { 
            for ($j=0; $j < 4 ; $j++) { 
                $r[$i][$j] = $w[$i][$j]*$s[$j];
            }
        }
        //sumatoria de filas
        $sum =[0,0,0,0,0,0,0,0,0,0];
        for ($i=0; $i < 10; $i++) { 
            for ($j=0; $j < 4; $j++) { 
                $sum[$i] = $sum[$i] + $r[$i][$j];
            }
        }

        $b = fbiasSalida();
        $res = array();
        for ($i=0; $i < 10; $i++) { 
            $res[$i] = round((1/(1+exp(-($sum[$i]+$b[$i])))),0);
        }

        return $res;

    }
    // $bias ---> dada por joone!
    function fsalidaN(array $a, array $b, $bias){
    	$c = array();
    	for ($i=0; $i < 7; $i++) { 
			for ($j=0; $j < 5; $j++) { 
				$c[$i][$j] = $a[$i][$j] * $b[$i][$j];
			}
		}
		$d =[0,0,0,0,0,0,0];
		for ($i=0; $i < 7; $i++) { 
			for ($j=0; $j < 5; $j++) { 
				$d[$i] = $d[$i] + $c[$i][$j];
			}
		}
		//sumatoria del vector $d
		$sum = array_sum($d);
		
		//resultado
		$res = round(1/(1+exp(-($sum+$bias))),5);
		return $res;
    }

    function fsigmoide(array $data,array $b){
		$sigmoide = array();
		for ($i=0; $i < 7; $i++) { 
			for ($j=0; $j < 5; $j++) { 
				$sigmoide[$i][$j] = round(1/(1+exp(-($data[$i][$j]+$b[$i][$j]))),5);
			}
		}
		return $sigmoide;
    }

    function arrayCopy( array $array){
		$result = array();
		foreach ($array as $key => $val) {
			if(is_array($var)){
				$result[$key] = arrayCopy($val);
			}else if(is_object($val)){
				$result[$key] = clone $val;
			}else{
				$result[$key] = $val;
			}
		}
		return $result;
	}

	function arrayShow( array $array){
		for ($i=0; $i < 7; $i++) { 
			for ($j=0; $j < 5; $j++) { 
				echo $array[$i][$j]." ";
			}
		}
	}

	function vectorShow(array $array){
		for ($i=0; $i < 7; $i++) { 
			echo $array[$i];
		}
	}


 ?>