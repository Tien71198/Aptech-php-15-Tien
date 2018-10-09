var table = '<table id = "js-table" ></table>';
$('#js-div-table').append(table);

var thead = '<thead id = "IDth" class="table bg-danger"></thead>';
$(thead).appendTo('#js-table');

var tr = '<tr id = "IDtr"></tr>';
$(tr).appendTo("#IDth");

var th = '<th id= "IDth">STT</th>'
$(th).appendTo("#IDtr");
var th = '<th id = "IDth1">Ten</th>'
$(th).appendTo("#IDtr");
var th = '<th id = "IDth2" >Tuoi</th>'
$(th).appendTo("#IDtr");

var tbody = '<tbody id ="IDbd"></tbody>'
$(tbody).appendTo('#js-table');

var tr = '<tr id = "tr"></tr>'
$(tr).appendTo("#IDbd");

var th = '<th id = "IDth">1</th>'
$(th).appendTo("#tr");
var td = '<td id= "td">A</td>'
$(td).appendTo("#tr");
var td = '<td id = "td1">20</td>';
$(td).appendTo("#tr");

var tr = '<tr id = "TR"></tr>'
$(tr).appendTo("#IDbd");

var th = '<th id = "th">2</th>'
$(th).appendTo("#TR");
var td = '<td id ="Itd">B</td>'
$(td).appendTo("#TR");
var td = '<td id ="Itd">21</td>'
$(td).appendTo("#TR");