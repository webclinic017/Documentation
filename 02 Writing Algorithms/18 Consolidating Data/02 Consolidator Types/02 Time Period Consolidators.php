<p>Time period consolidators aggregate data based on a period of time. The consolidator time period must be greater than or equal to the resolution of the security subscription. For instance, you can aggregate minute bars into 10-minute bars, but you can't aggregate hour bars into 10-minute bars. To set the time period for the consolidator, you can use either a <code class='python'>timedelta</code><code class='csharp'>TimeSpan</code>, <code>Resolution</code>, or <code>CalendarInfo</code> object.</p>


<h4>Resolution Periods</h4>

<?php echo file_get_contents(DOCS_RESOURCES."//enumerations/resolution.html"); ?>

<p>If you do hourly consolidation, the consolidator ends at the top of the hour, not every hour after the market open. For US Equities, that's 10 AM Eastern Standard Time (EST), not 10:30 AM.</p>

<h4>CalendarInfo Periods</h4>


<h4>Custom Time Periods</h4>
<div>-timedelta (python); TimeSpan (C#) <br></div><div><div>&nbsp;&nbsp;&nbsp; - The time starts from the beginning of the day, not the 
beginning of the market open or the first data point. If you do 
timedelta(minutes=7), the 7-minute counter starts at midnight.</div>&nbsp;&nbsp;&nbsp;
 - It's relative to the data time zone, not the algorithm time zone. 
(Daily consolidation on Crypto is received at midnight UTC).</div>
-If you need something more specific than the preceding time periods, create your own custom time period to set the start and end time of the consolidated bars.

<br>
## TODO: Add example of Custom Consolidator period for weekly bars in Forex

<div class="section-example-container">
<pre class="python">def CustomPeriod(self, dt):
    period = timedelta(7)
    dt = dt.replace(hour=17, minute=0, second=0, microsecond=0)
    delta = 1+dt.weekday()
    if delta &gt; 6:
        delta = 0
    start = dt-timedelta(delta)
    return CalendarInfo(start, period)</pre>
</div>

^ Add C# Example
<br><br>


Another example: https://www.quantconnect.com/terminal/processCache/?request=embedded_backtest_cbb86a544cd77a7e1fd72d7581719041.html

<h4>Creating Time Period Consolidators</h4>

<p>
Follow these steps to manually create a consolidator:</p><p>1) Create a consolidator object (TradeBarConsolidator, QuoteBarConsolidator, TickConsolidator, or TickQuoteConsolidator)</p><p>2) Define the consolidation event handler</p><p>3) Add the event handler to the consolidator</p>

<div class="section-example-container">
<pre class="python">def Initialize(self):
    self.consolidator = TradeBarConsolidator(timedelta(minutes=30))
    self.consolidator.DataConsolidated += self.consolidation_handler
    
def consolidation_handler(self, sender, consolidated_bar):
    # Bar period is now 30 min from the consolidator above.
    self.Debug(str(consolidated_bar.EndTime - consolidated_bar.Time) + " " + consolidated_bar.ToString())</pre>
<pre class="csharp">public override void Initialize()
{ 
    _consolidator = new TradeBarConsolidator(TimeSpan.FromMinutes(30));
    _consolidator.DataConsolidated += ConsolidationHandler;
}

private void ConsolidationHandler(object sender, TradeBar consolidatedBar) {
    // Bar period is 30 min from the consolidator above.
    Debug((consolidatedBar.EndTime - consolidatedBar.Time).ToString() + " " + consolidatedBar.ToString());
}</pre>
</div>

<p>if you consolidate minute-resolution crypto data, you receive the consolidated bar at midnight UTC. If you consolidated minute-resolution Equity data, you receive the consolidated bar at 9:31AM the next day because 4:00pm (closing time) isn't the end of the day.</p>

<h4>Shortcut Method</h4>
<p>The <code class="csharp">Consolidate</code><code class="python">self.Consolidate</code> method is a helper method to create time period consolidators for algorithms with static universes. With just one line of code, you can create data in any time period with a timedelta/TimeSpan, Resolution, or Calendar object. To create a consolidator with the shortcut method, call <code class="csharp">Consolidate</code><code class="python">self.Consolidate</code> with a <code>Symbol</code>, time period, and event handler. If you don't pass the method a <code>Symbol</code>, it looks up the <code>Symbol</code> internally.</p>
<div class="section-example-container">
<pre class="csharp">// Consolidate 1min SPY -&gt; 45min Bars
Consolidate("SPY", TimeSpan.FromMinutes(45), FortyFiveMinuteBarHandler)

// Consolidate 1min SPY -&gt; 1-Hour Bars
Consolidate("SPY", Resolution.Hour, HourBarHandler)

// Consolidate 1min SPY -&gt; 1-Week Bars
Consolidate("SPY", Calendar.Weekly, WeekBarHandler)
</pre>
<pre class="python"># Consolidate 1min SPY -&gt; 45min Bars
self.Consolidate("SPY", timedelta(minutes=45), self.FortyFiveMinuteBarHandler)

# Consolidate 1min SPY -&gt; 1-Hour Bars
self.Consolidate("SPY", Resolution.Hour, self.HourBarHandler)

# Consolidate 1min SPY -&gt; 1-Week Bars
self.Consolidate("SPY", Calendar.Weekly, self.WeekBarHandler)
</pre>
</div>

<p>The <code class="csharp">Consolidate</code><code class="python">self.Consolidate</code> method usually produces TradeBars by default, but it produces QuoteBars for Forex since Forex data doesn't have TradeBars. If your data subscription provides both trades and quotes, you can pass a <code>TickType</code> to the <code class="csharp">Consolidate</code><code class="python">self.Consolidate</code> method to specify the data format you want to consolidate.</p>

<div class="section-example-container">
<pre class="csharp">var symbol = AddEquity("SPY", Resolution.Minute).Symbol;
Consolidate(symbol, Resolution.Hour, TickType.Quote, ConsolidationHandler);</pre>
<pre class="python">symbol = self.AddEquity("SPY", Resolution.Minute).Symbol
self.Consolidate(symbol, Resolution.Hour, TickType.Quote, self.ConsolidationHandler)</pre>
</div>

<p>The <code class="csharp">Consolidate</code><code class="python">self.Consolidate</code> method creates a consolidator for the time period you provide and passes the consolidated bars to the function event handler. The event handler function accepts one argument, the consolidated TradeBar or QuoteBar.<br></p>

<div class="section-example-container">
<pre class="csharp">// Example event handler from Consolidate helper.
void ConsolidationHandler(TradeBar consolidatedBar) {
    Log($"{consolidatedBar.EndTime:o} 45 minute consolidated.");
}
</pre>
<pre class="python"># Example event handler from Consolidate helper.
def ConsolidationHandler(self, consolidated_bar):
      self.Log(f"{consolidated_bar.EndTime}: {consolidated_bar.Close}")
</pre>
</div>

<p>If you create a consolidator with the shortcut method, you can't remove the consolidator.
</p>
