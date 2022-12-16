<?php
    function ulketespit($ip){
        $kaynak = @file_get_contents("http://www.webyield.net/ip/index.php?ip=$ip");
        $bir = '<strong>Country Code</strong>:</td><td width=”60%” align=”left”>';
        $iki = '</td>';
        @preg_match("$bir(*)$iki", $kaynak, $baslik);
        return $baslik;
    }

    $ziyaretciipadresi = $_SERVER["REMOTE_ADDR"];
    $ziyaretcisonuc = ulketespit($ziyaretciipadresi);
    if ($ziyaretcisonuc == "TR"){
        $dil = "TR";
    }else{
        $dil = "EN";
    }
    
    echo $dil;

?>