<style> 
.centered {text-align: center; }
</style>

<p>LEAN supports several machine learning libraries. You can import these packages and use them in your algorithms.</p>

<table class="table qc-table">
    <thead>
        <tr>
            <th width="20%">Name</th>
            <th width="15%">Version</th>
            <th width="15%">Language</th>
            <th>Import Statement</th>
            <th width="5%">Example</th>
        </tr>
    </thead>
<tbody>

<?
class MachineLearningLibraryForWritingAlgorithm {
    public $name;
    public $version;
    public $importStatement;
    public $documentationLink;
    public $exampleLink;
    public $language;

    public function __construct($name, $version, $language, $importStatement, $documentationLink, $exampleLink)
    {
        $this->name = $name;
        $this->version = $version;
        $this->language = $language;
        $this->importStatement = $importStatement;
        $this->documentationLink = $documentationLink;
        $this->exampleLink = $exampleLink;
    }
}

$libraries = array(
    new MachineLearningLibraryForWritingAlgorithm("mlfinlab", "1.6.0", "Python", "import mlfinlab", "https://github.com/hudson-and-thames/mlfinlab", ""),
    new MachineLearningLibraryForWritingAlgorithm("Accord", "3.6.0", "C#", "using Accord.MachineLearning;", "http://accord-framework.net/", "https://github.com/QuantConnect/Lean/blob/master/Algorithm.CSharp/AccordVectorMachinesAlgorithm.cs")
);

foreach ($libraries as $library) {
    echo "<tr>
              <td><a target='_BLANK' href='{$library->documentationLink}'>{$library->name}</a></td>
              <td>{$library->version}</td>
              <td>{$library->language}</td>
              <td><code>{$library->importStatement}</code></td>
              <td class='centered'><a href='{$library->exampleLink}'><i class='fa fa-external-link'></i></a></td>
          </tr>
    ";
}?>        
    </tbody>
</table>