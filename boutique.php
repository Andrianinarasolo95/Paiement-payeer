<?php
require_once('cpayeer.php');
$accountNumber=";
$apiId=";
$apikey='******';
$payeer=nouveau Cpayeer($accountNumber,$apiId,$apikey);
Si($payeer->isAuth())
{
				$arShopHistory=$payeer->getShopOrderInfo(tableau('shopId'=>'Identifiant de la boutique','orderId'=>'Identifiant de la commmande de la boutique',)));
				echo'<pre>'.print_r($arShopHistory,true)'.</pre>';
}
autre
{
				echo'<pre>'.print_r($payeer->getErrors(),true)'.</pre>';
}
?>