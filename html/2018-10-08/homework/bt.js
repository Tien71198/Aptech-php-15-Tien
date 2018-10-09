
var table = '<table id = "table" style="width:100%"></table>';
$("#div").append(table);

var thead = '<thead id = "thead"></thead>';
$(thead).appendTo("#table");

var tr = '<tr id = "tr"></tr>';
$(tr).appendTo("#thead");

var th = '<th id = "th">ID</th>';
$(th).appendTo("#tr");
var th = '<th id ="th1">Name</th>';
$(th).appendTo("#tr");
var th = '<th id ="th2">Email</th>';
$(th).appendTo("#tr");
var th = '<th id ="th3">Password</th>';
$(th).appendTo("#tr");
var th = '<th id ="th4">Created_at</th>';
$(th).appendTo("#tr");
var th = '<th id ="th5">updated_at</th>';
$(th).appendTo("#tr");

var tbody = '<tbody id = "tbody"></tbody>';
$(tbody).appendTo("#table");

var tr = '<tr id ="tr1"></tr>'
$(tr).appendTo("#tbody");

var th = '<th id = "th6">1</th>';
$(th).appendTo("#tr1");
var td = '<td id = "td">Pink Kuhn</td>';
$(td).appendTo("#tr1");
var td = '<td Email = "td1">johnston.katelin@example.org</td>';
$(td).appendTo("#tr1");
var td = '<td id= "td2">*=Oo-liH</td>';
$(td).appendTo("#tr1");
var td = '<td id = "td3">2018-09-12 12:40:06</td>';
$(td).appendTo("#tr1");
var td = '<td Email = "td4">2018-09-12 12:40:06</td>';
$(td).appendTo("#tr1");