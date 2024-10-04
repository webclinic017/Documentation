<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'Beta';
$helperName = 'B';
$helperArguments = 'Symbol.Create("QQQ", SecurityType.Equity, Market.USA), symbol, 20';
$properties = array("current","previous","window","item");
$otherProperties = array("warm_up_period","is_ready","name","samples");
$updateParameterType = 'a <code>TradeBar</code>, or <code>QuoteBar</code>';
$constructorArguments = '"", 20, Symbol.Create("QQQ", SecurityType.Equity, Market.USA), Symbol.Create("SPY", SecurityType.Equity, Market.USA)';
$updateParameterValue = 'bar';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'beta';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>