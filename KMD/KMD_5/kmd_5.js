
function hisob_click(){
    var p=document.querySelector("#jam");
    var m=document.querySelector("#tarh");
    var z=document.querySelector("#zarb");
    var t=document.querySelector("#taqsim");
    var a=document.querySelector("#a");
    var b=document.querySelector("#b");
    var n=document.querySelector("#natija");
    var a1 = Number(a.value);
    var b1 = Number(b.value);
    if(p.checked == true){
        n1 = a1 + b1;
        n.value=n1;
        m.checked=false;
        z.checked=false;
        t.checked=false;
        p.checked=false;
    } if(m.checked == true){
        n1 = a1 - b1;
        n.value=n1;
        p.checked=false;
        z.checked=false;
        t.checked=false;
        m.checked=false;
    } if(z.checked == true){
        n1 = a1 * b1;
        n.value=n1; 
        p.checked=false;
        m.checked=false;
        t.checked=false;
        z.checked=false;
    } if(t.checked == true){
        n1 = a1 / b1;
        n.value=n1;
        p.checked=false;
        m.checked=false;
        z.checked=false;
        t.checked=false;
    }
}