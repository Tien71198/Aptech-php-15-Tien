function myjs()
{
    document.getElementById("ex").innerHTML = "my name is Tien";
    document.getElementById('ex').style.color = 'blue';
    console.log(document.getElementById('ex').style.color);
}
function doianh()
{
    var ten = document.getElementById("Image");
    
    ten.src = "https://i.ytimg.com/vi/O-h3t_dkwtI/maxresdefault.jpg";
}
function BatTat()
{
    var a = document.getElementById("IMG");
    console.log(a.src);
    if (a.src === 'http://127.0.0.1:5500/html/2018-10-03/light/pic_bulboff.gif')
    { a.src = './light/pic_bulbon.gif';}
    else
    { a.src = './light/pic_bulboff.gif';}
}
function Change()
{
    var name = document.getElementById("im");
  //  name.src = "http://sohanews.sohacdn.com/2016/photo-2-1470638688308.jpg";
    console.log(name.src);
    if (name.src === 'http://sohanews.sohacdn.com/2016/photo-2-1470638688308.jpg')
    {
        name.src = 'http://vuonhoa.vn/userfiles/images/cam%20chuong%20lun%2003.jpg';
    }
    else 
    {
        name.src = 'http://sohanews.sohacdn.com/2016/photo-2-1470638688308.jpg';
    }
}