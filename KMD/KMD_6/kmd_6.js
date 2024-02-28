
function b_click(){
    var a=document.querySelector("#baland");
    var b=document.querySelector("#sol");
    var m=document.querySelector("#mard");
    var z=document.querySelector("#zan");
    var n=document.querySelector("#natija");
    var a1=Number(a.value);
    var b1=Number(b.value);
    if(mard.checked==true){
        n1 =(3 * a1 - 450 + b1) * 0.25 + 45;
        n.value=n1;
        z.checked=false;
        m.checked=false;
    } if(zan.checked==true){
        n1 =(3 * a1 - 450 + b1) * 0.225 + 40.4;
        n.value=n1;
        m.checked=false;
        z.checked=false;
    }
 }
