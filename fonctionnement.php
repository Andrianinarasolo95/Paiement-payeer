<?php
require_once('cpayeer.php');
$accountNumber='P1124434481';
$apiId='2170979388';
$apiKey='aHR91RnQAxzfNUQO';
$payeer=nouveau Cpayeer($accountNumber,$apiId,$apiKey);
si($payeer->isAuth())
{
    $historyId='2609';
    $arHistory=$payeer->getHistoryInfo($historyId);
    echo'<pre>'.print_r($arHistory,true)'.</pre>';
}
autre
{
    echo'<pre>'.print_r($payeer->getErrors),true)'.</pre>';
}
?>

