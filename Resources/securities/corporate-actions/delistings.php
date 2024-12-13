<p>
    When a company is delisting from an exchange, LEAN sends a <code>Delisting</code> object to the <code class="csharp">OnData</code><code class="python">on_data</code> method. 
    You receive <code>Delisting</code> objects when a delisting is in the near future and when it occurs. 
    To know if the delisting occurs in the near future or now, check the <code>Type</code> property.
</p>

<p>To get the <code>Delisting</code> objects, index the <code class="csharp">Delistings</code><code class="python">delistings</code> object with the security <code  class="csharp">Symbol</code><code class="python">symbol</code>. The <code class="csharp">Delistings</code><code class="python">delistings</code> objects may not contain data for your <code  class="csharp">Symbol</code><code class="python">symbol</code>. To avoid issues, check if the <code class="csharp">Delistings</code><code class="python">delistings</code> object contains data for your security before you index it with the security <code  class="csharp">Symbol</code><code class="python">symbol</code>.</p>

<div class='section-example-container'>
    <pre class='csharp'>public override void OnData(Slice slice)
{
    if (slice.Delistings.ContainsKey(_symbol))
    {
        var delisting = slice.Delistings[_symbol];
    }
}

public override void OnDelistings(Delistings delistings)
{
    if (delistings.ContainsKey(_symbol))
    {
        var delisting = delistings[_symbol];
    }
}
</pre>
    <pre class='python'>def on_data(self, slice: Slice) -> None:
    delisting = slice.delistings.get(self._symbol)
    if delisting:
        pass

def on_delistings(self, delistings: Delistings) -> None:
    delisting = delistings.get(self._symbol)
    if delisting:
        pass</pre>
</div>


<p>You can also iterate through the <code class="csharp">Delistings</code><code class="python">delistings</code> dictionary. The keys of the dictionary are the <code>Symbol</code> objects and the values are the <code>Delisting</code> objects.</p>
<div class='section-example-container'>
    <pre class='csharp'>public override void OnData(Slice slice)
{
    foreach (var kvp in slice.Delistings)
    {
        var symbol = kvp.Key;
        var delisting = kvp.Value;
    }
}

public override void OnDelistings(Delistings delistings)
{
    foreach (var kvp in delistings)
    {
        var symbol = kvp.Key;
        var delisting = kvp.Value;
    }
}</pre>
    <pre class='python'>def on_data(self, slice: Slice) -> None:
    for symbol, delisting in slice.Delistings.items():
        pass

def on_delistings(self, delistings: Delistings) -> None:
    for symbol, delisting in delistings.items():
        pass</pre>
</div>


<p>The delist warning occurs on the final trading day of the stock to give you time to gracefully exit out of positions before LEAN automatically liquidates them.</p>

<div class="section-example-container">
        <pre class="csharp">if (delisting.Type == DelistingType.Warning)
{
    // Liquidate with MarketOnOpenOrder on delisting warning
    var quantity = Portfolio[symbol].Quantity;
    if (quantity != 0)
    {
        MarketOnOpenOrder(symbol, -quantity);
    }
}</pre>
        <pre class="python">if delisting.type == DelistingType.WARNING:
    # Liquidate with MarketOnOpenOrder on delisting warning
    quantity = self.portfolio[symbol].quantity
    if quantity != 0:
        self.market_on_open_order(symbol, -quantity)</pre>
</div>

<p>The <code class="csharp">OnSecuritiesChanged</code><code class="python">on_securities_changed</code> event notifies the algorithm when delisted assets are removed from the universe.</p>

<? echo file_get_contents(DOCS_RESOURCES."/securities/securities_total.html"); ?>

<p>For a full example, see the <a rel='nofollow' target='_blank' href='https://github.com/QuantConnect/Lean/blob/master/Algorithm.CSharp/DelistingEventsAlgorithm.cs' class='csharp'>DelistingEventsAlgorithm</a><a rel='nofollow' target='_blank' href='https://github.com/QuantConnect/Lean/blob/master/Algorithm.Python/DelistingEventsAlgorithm.py' class='python'>DelistingEventsAlgorithm</a> in the LEAN GitHub repository.</p>

<p><code>Delisting</code> objects have the following properties:</p>
<div data-tree="QuantConnect.Data.Market.Delisting"></div>