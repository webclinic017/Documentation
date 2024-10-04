<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'Stochastic';
$helperName = 'STO';
$helperArguments = 'symbol, 20, 10, 20';
$properties = array("fast_stoch","stoch_k","stoch_d","current","previous","window","item");
$otherProperties = array("is_ready","warm_up_period","name","samples");
$updateParameterType = 'a <code>TradeBar</code>, or <code>QuoteBar</code>';
$constructorArguments = '20, 10, 20';
$updateParameterValue = 'bar';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'stochastic';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>