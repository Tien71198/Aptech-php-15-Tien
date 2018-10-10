var users = [{
        "id": 8
    },
    {
        'name': 'Pink Kuhn'
    },
    {
        "email": "johnston.katelin@example.org"
    },
    {
        "password": "*=Oo-liH"
    },
    {
        "created_at": "2018-09-12 12:40:06"
    },
    {
        "updated_at": "2018-09-12 12:40:06"
    }
]
$.each(users, function () {
    $.each(this, function (name, value) {
        console.log(name + ": " + value);
    });
});

var numbers = [1, 2, 3, 4, 5, 6];
$.each(numbers, function (index, value) {
    console.log(index + ':' + value);
});