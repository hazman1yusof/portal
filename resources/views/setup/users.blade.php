<!DOCTYPE html>
<html>
<head>
  <script src="https://unpkg.com/ag-grid-community/dist/ag-grid-community.min.noStyle.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-grid.css">
  <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-theme-balham.css">
</head>
<body>

  <button onclick="getSelectedRows()">Get Selected Rows</button>
  <div id="myGrid" style="height: 600px;width:500px;" class="ag-theme-balham"></div>

  <script type="text/javascript" charset="utf-8">
    // specify the columns
    var columnDefs = [
      {headerName: "Make", field: "make", checkboxSelection: true},
      {headerName: "Model", field: "model"},
      {headerName: "Price", field: "price"}
    ];
    
    // specify the data
    var rowData = [
      {make: "Toyota", model: "Celica", price: 35000},
      {make: "Ford", model: "Mondeo", price: 32000},
      {make: "Porsche", model: "Boxter", price: 72000}
    ];
    
    // let the grid know which columns and what data to use
    var gridOptions = {
      columnDefs: columnDefs,
  	  enableSorting: true,
      enableFilter: true,
      rowSelection: 'multiple'
    };

  // lookup the container we want the Grid to use
  var eGridDiv = document.querySelector('#myGrid');

  // create the grid passing in the div to use together with the columns & data we want to use
  new agGrid.Grid(eGridDiv, gridOptions);

  fetch('https://api.myjson.com/bins/15psn9').then(function(response) {
    return response.json();
  }).then(function(data) {
    gridOptions.api.setRowData(data);
  });

  function getSelectedRows() {
    var selectedNodes = gridOptions.api.getSelectedNodes()  
    var selectedData = selectedNodes.map( function(node) { return node.data })
    var selectedDataStringPresentation = selectedData.map( function(node) { return node.make + ' ' + node.model }).join(', ')
    alert('Selected nodes: ' + selectedDataStringPresentation);
  }



  </script>
</body>
</html>
