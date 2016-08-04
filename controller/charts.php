<script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">
    google.load('visualization', '1.0', {packages: ['charteditor']});
  </script>

<script type="text/javascript">
    google.setOnLoadCallback(loadEditor);
    var chartEditor = null;

    function loadEditor() {
      alert("ok");
      // Create the chart to edit.
      var wrapper = new google.visualization.ChartWrapper({
         'chartType':'LineChart',
         'dataSourceUrl':'http://spreadsheets.google.com/tq?key=pCQbetd-CptGXxxQIG7VFIQ&pub=1',
         'query':'SELECT A,D WHERE D > 100 ORDER BY D',
         'options': {'title':'Population Density (people/km^2)', 'legend':'none'}
      });

      chartEditor = new google.visualization.ChartEditor();
      google.visualization.events.addListener(chartEditor, 'ok', redrawChart);
      chartEditor.openDialog(wrapper, {});
    }

    // On "OK" save the chart to a <div> on the page.
    function redrawChart(){
      chartEditor.getChartWrapper().draw(document.getElementById('vis_div'));
    }

  </script>