<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasReference = false;
$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'Theta';
$helperName = 'T';
$helperArguments = 'option_symbol, option_mirror_symbol';
$properties = array("ImpliedVolatility","RiskFreeRate","DividendYield","Price","OppositePrice","UnderlyingPrice");
$otherProperties = array();
$updateParameterType = 'time/number pair or an <code>IndicatorDataPoint</code>';
$constructorArguments = 'option_symbol, interest_rate_model, dividend_yield_model, option_mirror_symbol';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'theta';
$isOptionIndicator = true;
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>