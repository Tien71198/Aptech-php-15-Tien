// $(document).ready(function () {
//     $('#bt').click(function () {
//         $('#div1').load('data.json');
//     });
// });


$(document).ready(function () {
    $("#bt").click(function () {

        $.get('./data.json', function (response) {

            var table = '<table id = "table" style="width:100%"></table>';
            $("#div1").append(table);

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

            var tbody = '<tbody id="tbody"></tbody>';
            $('#thead').after(tbody);

            for (i = 0; i < response.users.length; i++)
                {
                var trBD = '<tr id = trBD' + response.users[i].id + '></tr>';
                $(trBD).appendTo("#tbody");

                 var tdBody = ' <td>' + response.users[i].id + '</td>' + '<td>' + response.users[i].name + '</td>' + '<td>' + response.users[i].email + '</td>' + '<td>' +
                     response.users[i].password + '</td>' + '<td>' + response.users[i].created_at + '</td>' + '<td>' + response.users[i].updated_at + '</td>';
                 $('#trBD' + i).append(tdBody);
                    
            }
            for (i = 0; i < response.users.length; i++) {
                var trBody = '<tr id="trBD' + response.users[i].id + '"></tr>';
                $(trBody).appendTo('#tbody');

                var tdBody = ' <td>' + response.users[i].id + '</td>' + '<td>' + response.users[i].name + '</td>' + '<td>' + response.users[i].email + '</td>' +
                    '<td>' + response.users[i].password + '</td>' + '<td>' + response.users[i].created_at + '</td>' + '<td>' + response.users[i].updated_at + '</td>';
                $('#trBD' + i).append(tdBody);
            }
        });
    });
});