<?
$brokerageDetails = "
<li>Enter <a href='https://www.quantconnect.com/docs/v2/cloud-platform/live-trading/brokerages/trading-technologies#14-Create-TT-Users'>your Trading Technologies credentials</a>.</li>
<div class='cli section-example-container'>
<pre>$ lean cloud live \"My Project\" --push --open
User name: john
Session password: ****************
Account name: jane</pre></div>


<li>Enter the <a href='https://www.quantconnect.com/docs/v2/cloud-platform/live-trading/brokerages/trading-technologies#14-Create-TT-Users'>REST configuration</a>.</li>
<div class='cli section-example-container'>
<pre>$ lean cloud live \"My Project\" --push --open
REST app key: my-rest-app-key
REST app secret: ******************
REST environment: my-environment</pre></div>


<li>Enter the <a href='https://www.quantconnect.com/docs/v2/cloud-platform/live-trading/brokerages/trading-technologies#14-Create-TT-Users'>order routing configuration</a>.</li>
<div class='cli section-example-container'>
<pre>$ lean cloud live \"My Project\" --push --open
Order routing sender comp id: </pre></div>
<p>Our TT integration routes orders via the TT FIX 4.4 Connection. <a rel='nofollow' target='_blank' href='https://www.tradingtechnologies.com/contact/'>Contact your TT representative</a> to set the exchange where you would like your orders sent. Your account details are not saved on QuantConnect.</p>
";
$brokerageName="Trading Technologies";
$dataProviderName=$brokerageName;
$isSupported=true;
$supportsCashHoldings=true;
$supportsPositionHoldings=false;
include(DOCS_RESOURCES."/brokerages/cli-deployment/deploy-cloud-algorithms.php");
?>
