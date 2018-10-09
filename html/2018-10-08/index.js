$(document).ready(function () {
    $("#btn1").click(function () {
        $("p").append("<b> apeend text</b>")
    });
    $("#btn2").click(function () {
        $("ol").append("<li>append list items</li>")
    });
});