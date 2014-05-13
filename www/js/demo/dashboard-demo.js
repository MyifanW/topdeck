$(document).ready(function(){
  loadCompanies();
});


function loadCompanies()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("companies").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","loadCompanies.php",true);
xmlhttp.send();
}


function loadTableData(str) {   
//modify table data
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("tableData").innerHTML=xmlhttp.responseText;
	  loadChartData(str);
    }
  }
  xmlhttp.open("GET","loadTableData.php?q="+str,true);
  xmlhttp.send();
  
  $("#chartHead").html("<i class=\"fa fa-bar-chart-o fa-fw\" ></i> " + str + " Chart");
  $("#tableHead").html(str + " Data");

}
function loadChartData(str)
{
//modify chart data
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp2=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp2.onreadystatechange=function() {
    if (xmlhttp2.readyState==4 && xmlhttp2.status==200) {
		var x = jQuery.parseJSON( xmlhttp2.responseText);
		_chart.setData(x);
    }
  }
  xmlhttp2.open("GET","loadChartData.php?q="+str,true);
  xmlhttp2.send();
}

    var _chart = new Morris.Area({
        element: 'morris-area-chart',
        data: [{"date":"2010-01-11","open":"30.88","close":"30.82","high":"31.05","low":"30.67","adj":"30.13"},{"date":"2006-01-20","open":"34.85","close":"34.25","high":"35.00","low":"34.00","adj":"31.55"},{"date":"2002-01-31","open":"29.30","close":"30.35","high":"30.38","low":"29.16","adj":"27.96"}],
        xkey: 'date',
        ykeys: ['open', 'close', 'high', 'low', 'adj'],
        labels: ['Open', 'Close', 'High', 'Low', 'Adjusted'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

