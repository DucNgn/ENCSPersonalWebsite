function refresh(){
    mytime=setTimeout('timer()', 1);
}

function timer(){
    var x = new Date();
    document.getElementById('time').innerHTML="<strong>"+x+"</strong>";
    refresh();
 }