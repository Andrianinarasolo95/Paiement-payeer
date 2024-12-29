<?php
require_once('cpayeer.php');
$accountNumber="P1124434481";
$apiId="2170979388";
$apiKey="aHR91RnQAxzfNUQO";
$payeer=nouveau Cpayeer($acccountNumber,$apiId,$apiKey);
Si($payeer->isAuth())
{
				$arPs=$payeer->getPaySystems();
				echo'<pre>'.print_r($arPs,true).'</pre>';
}
autre
{
				echo'<pre>'.print_r($payeer->getErrors(),true)'.</pre>';
}
?>