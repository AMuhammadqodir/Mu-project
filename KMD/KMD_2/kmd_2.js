function n_click(){
    var n=document.querySelector("#a");
    var n1=document.querySelector("#natija_1");
    var a1 = Number(n.value);
    na= a1 * 1000000;
    n1.value=na;
}

function n1_click(){
    var n=document.querySelector("#a");
    var n1=document.querySelector("#natija_2");
    var a1 = Number(n.value);
    na= a1 * 10000000;
    n1.value=na;
}

function n2_click(){
    var n=document.querySelector("#a");
    var n1=document.querySelector("#natija_3");
    var a1 = Number(n.value);
    na= a1 * 1000;
    n1.value=na;
}

function c_click(){
    
    var s=document.querySelector('#a');
    s1= "";
    s.value=s1;
    var c=document.querySelector('#natija_1');
    c1= "";
    c.value=c1;
    var b=document.querySelector('#natija_2');
    b1= "";
    b.value=b1;
    var l=document.querySelector('#natija_3');
    l1= "";
    l.value=l1;
}