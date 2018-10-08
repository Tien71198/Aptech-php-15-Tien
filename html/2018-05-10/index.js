$(document).ready(function () {
    $("#hien").click(function () {
        $("#khoi").show();
    }); 
    $("#an").click(function () {
        $("#khoi").hide();
    });
});

$(document).ready(function ()
{
    $("#exam").click(function () {
        $("#vd").show();
        console.log("#exam");
    });
    $("#exan").click(function () {
        $("#vd").hide(); 
    });
}
);


$(document).ready(function () {
    $("#btt").click(function () {
        $("#vd1").show(); 
    });
    $("#bn").click(function () {
        $("#vd1").hide(); 
    });
});