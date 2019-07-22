<script src="https://www.desmos.com/api/v1.1/calculator.js?apiKey=dcb31709b452b1cf9dc26972add0fda6"></script>

<html>
<body>
	<div id="calculator" style="width: 100%; height: 100%;"></div>
	</body>
</html>
<script src="jquery1.js"></script>
<script>
jQuery.get('equation/dipesh.txt', function(data) {
  
  var elt = document.getElementById('calculator');
  var calculator = Desmos.GraphingCalculator(elt);
  calculator.setExpression({id:'graph1', latex:data}); 
   
});


  
</script>