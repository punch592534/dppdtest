<?php
$access_token = 'OfqcVKb0LfOKSnEydwkseRv4MwzT+LFBbIWXU0cdJ7TxKA+d6l+8vn0FbuCBsij2KE8sSxsR/fIJPhzvtuEDxkHeOg6pblk9j5gg8jtqaS/m3jReidXXE89GzGHQbCpPmmbXuu+TLsqdhO95jUVWGAdB04t89/1O/w1cDnyilFU=
';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);
echo $result;
?>