$(document).ready(function () {
    $("#button-tat").click(function () {
        $("#js-image").attr("src", "./light/pic_bulboff.gif");
        // console.log("# button-bat.attr")
    });
     $("#button-bat").click(function () {
         $("#js-image").attr("src", "./light/pic_bulbon.gif");
         // console.log("# button-bat.attr")
     });
});