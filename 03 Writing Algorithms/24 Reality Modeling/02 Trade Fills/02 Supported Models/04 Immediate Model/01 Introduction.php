<p>The <code>ImmediateFillModel</code> is the default fill model if you trade non-Equity assets with the <a href="/docs/v2/writing-algorithms/reality-modeling/brokerages/supported-models/quantconnect-paper-trading">DefaultBrokerageModel</a>. This fill model fills trades completely and immediately. <br></p>

<div class="section-example-container">
<pre class="csharp">security.SetFillModel(new ImmediateFillModel());</pre>
<pre class="python">security.SetFillModel(ImmediateFillModel())</pre>
</div>

<?php echo file_get_contents(DOCS_RESOURCES."/reality-modeling/trade-fills/immediate-fill-model-fill-logic.html"); ?>

<p>To view the implementation of this model, see the <a rel="nofollow" target="_blank" href="https://github.com/QuantConnect/Lean/blob/master/Common/Orders/Fills/ImmediateFillModel.cs">LEAN GitHub repository</a>.</p>
