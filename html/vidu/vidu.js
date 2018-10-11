 
var table = '<table id = "table" style="width:100%"></table>';
$("#div_ctn").append(table);

 var tbody = '<tbody id="tbody"></tbody>';
$('#thead').after(tbody);
 
var thead = '<thead id = "thead"></thead>';
$(thead).appendTo("#table");
$(document).ready(function () {
    $("bt").click(function () {
        $.get('./data', function (response) {
           for (i = 0; i < response.users.length; i++) {
               var trBD = '<tr id = trBD' + response.users[i].id + '></tr>';
               $(trBD).appendTo("#tbody");

               var tdBody = ' <td>' + response.users[i].id + '</td>' + '<td>' + response.users[i].name + '</td>' + '<td>' + response.users[i].email + '</td>' + '<td>' +
                   response.users[i].password + '</td>' + '<td>' + response.users[i].created_at + '</td>' + '<td>' + response.users[i].updated_at + '</td>';
               $('#trBD' + i).append(tdBody);

           }
        });
    });
});