$(document).ready(function ()
{
    $("#hien").click(function () {
        $("#con").toggleClass('d-none') ;      
    });  
});

function Hien()
{
    var x = document.getElementById("SHOW");
    if (x.style.display === "none")
    {
        x.style.display === "block";
    }
    else
    {
        x.style.display === "none";
        }
    
    document.getElementById("SHOW").style.backgroundColor= "red";
    console.log("SHOW");
   
}
function sh()
{
    var y =  document.getElementById("SHOWE");
     document.getElementById("SHOWE").style.backgroundColor = "blue";
}

function mn() {
    var G = document.getElementById("MN");
    G.classList.toggle("fas fa-bars fa-2x");
}