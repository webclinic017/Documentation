<p>The benefit of the <code>Symbol</code> class is that it always maps to the same security, regardless of their trading ticker. When a company changes their trading ticker, LEAN sends a <code>SymbolChangedEvent</code> to the <code>OnData</code> method. <code>SymbolChangedEvent</code> objects have the following properties:</p>

<div data-tree="QuantConnect.Data.Market.SymbolChangedEvent"></div>

<div class="section-example-container">
        <pre class="csharp">if (data.SymbolChangedEvents.ContainsKey(_symbol))
{
    var symbolChangedEvent = data.SymbolChangedEvents[_symbol];
}</pre>
        <pre class="python">if self.symbol in data.SymbolChangedEvents:
    symbolChangedEvent = data.SymbolChangedEvents[self.symbol]</pre>
</div>

<p>If you have an open order for a security when they change their ticker, LEAN cancels your orders. To maintain your position, in the <code>OnOrderEvent</code> method, get the quantity and <code>Symbol</code> of the liquidation order and submit a new order.</p> 

<div class="section-example-container">
        <pre class="csharp">// Example ^^</pre>
        <pre class="python">## Example ^^</pre>
    </div>

<p>LEAN stores the data for ticker changes in map files. To view some example map files, see the <a rel='nofollow' target='_blank' href='https://github.com/QuantConnect/Lean/tree/master/Data/equity/usa/map_files'>LEAN GitHub repository</a>.</p>
