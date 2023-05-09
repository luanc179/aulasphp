<?php
$qtd = 100;
$musica = "<p>1 elefante incomoda muita gente.<BR>\n";

for($i = 2; $i <= $qtd; $i++){

    if($i % 2 ==0){
        $musica .="$i elefantes";
        for ($j=0; $j < $i-1; $j++) { 
            $musica .=" incomodam, ";
        }
        $musica .=" incomoda muito mais! <BR>\n";
    }else{
    $musica .= "$i elefantes incomodam muita gente. <br>\n";
    }
}

$musica .="<BR><BR>";

for ($i=$qtd; $i >= 2 ; $i--) { 

    if ($i % 2 == 1){
        $musica .= "$i elefantes ";
        for ($j=0; $j < $i-1  ; $j++) { 
            $musica .= "incomodam, ";
        }
        $musica .= "incomodam muito menos! <br>\n";
    }else{
        $musica .= "$i elefantes incomodam muita gente. <br> \n"; 
    }
}

$musica .="1 elefante incomoda muito menos!</p>\n";

echo $musica;



?>

