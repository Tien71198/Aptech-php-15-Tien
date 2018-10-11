//   http: //101.0.86.110:6699/api/v1/posts?page=2
$(document).ready(function () {
    $("#post-bt").click(function () {
        $.get('./data.json', function (response) {
            var row = '<div id="row" class="row" ></div>';
            $("#div-ctn").append(row);
            var col = '<div id="col" class = "col-6"></div>';
            $(col).appendTo("#row");
            var card_deck = '<div id="card_deck" class="card-deck"></div>';
            $(card_deck).appendTo("#col");
            $("#card_deck").append("<img id='im' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5Wk0YPUYhyxO5UHle1IFToQ_P0JZ2xG2YLd1rsBoFcXovl4NJ' width=80%;height=50%;>");


            var card_bd = '<div id="card_bd"></div>';
            $(card_bd).appendTo("#col");
            var title = '<title id="title"><title>';
            $(title).appendTo("#card_bd");

            var div_bt = '<div id= "div_bt" class="d-flex justify-content-center"></div>';
            $(div_bt).appendTo("#card_bd");
            
            var bt = '<button id="bt">click me</button>';
            $(bt).appendTo("#div_bt");
            /*
            var div_ct = '<div id="div_ct"></div>';
            $(div_ct).appendTo("#bt"); */

            for (i = 0; i < response.users.legnth; i++) {

                var click = '<div id="d_click">' + 'id: ' + response.users[i].id + ' Name: ' +
                    response.users[1].name + ' Email: ' + response.users[i].email +
                    ' Password: ' + response.users[i].password + ' Created_at: ' + response.users[i].created_at +
                    ' Updated_at: ' + response.users[i].updated_at + '</div>';
                $(click).appendTo("#div_bt");
                //  document.response.users[1].id;
            }
        });
    });
});