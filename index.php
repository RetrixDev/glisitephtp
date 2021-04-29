<?php
$str = file_get_contents('https://pwn.sh/tools/streamapi.py?url=twitch.tv/music2096');
// $link = "audio_only";
$hls = "";
$json = json_decode($str, true);
foreach ($json as $key => $value) {
    if (!is_array($value)) {
    } 
    else {
        foreach ($value as $key => $val) {
            if (!is_array($val)){
                if ($key==("720p")){
                    
                    $hls = $val;
                    // print $hls;
                    // break;
                }
            }
        }
    }
}
header('Location:'.$hls);
exit;
?>
