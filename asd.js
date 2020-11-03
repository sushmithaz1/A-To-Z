function targetJS(){
    var b=document.getElementById('Proname').value;
    var c=document.getElementById('ProPrice').value;
    var d=document.getElementById('ProDesc').value;

    alert(b,c,d);
    

    document.getElementById('Proname').click=(function(){
    document.getElementById('DetName').innerHTML=b;
    document.getElementById('Proname').innerHTML='sdf';
    document.getElementById('Price').innerHTML=c;
    document.getElementById('Desc').innerHTML=d;
    window.location.href="peoDet.php";
    });
}