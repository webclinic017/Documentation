<p>
The <code>Schedule</code> setting defines the selection schedule of the universe. 
Most universes run on a daily schedule.
To change the selection schedule, call the <code class="csharp">UniverseSettings.Schedule.On</code><code class="python">universe_settings.schedule.on</code> method with an <code>IDateRule</code> object before you create the Universe Selection model.
</p>

<div class="section-example-container">
    <pre class="csharp">// Trigger selections at the begining of each month.
UniverseSettings.Schedule.On(DateRules.MonthStart());
AddUniverseSelection(new ETFConstituentsUniverseSelectionModel("QQQ"));</pre>
    <pre class="python"># Trigger selections at the begining of each month. 
self.universe_settings.schedule.on(self.date_rules.month_start())
self.add_universe_selection(ETFConstituentsUniverseSelectionModel("QQQ"))</pre>
</div>

<? include(DOCS_RESOURCES."/scheduled-events/date-rules.html"); ?>

<p>In live trading, scheduled universes run at roughly 8 AM Eastern Time to ensure there is enough time for the data to process.</p>
