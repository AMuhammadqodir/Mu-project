function o_click(){
    var n=document.querySelector("#gram");
    var funt=document.querySelector("#funt");
    var pud=document.querySelector("#pud");
    var unsiya=document.querySelector("#unsiya");
    var drahma=document.querySelector("#drahma");
    var gran = document.querySelector("#gran");
    var n1=document.querySelector("#vnav");

    var g = Number(n.value);

    if(funt.checked==true){
        n2= ( 1 / 454) * g;
        n1.value=n2;
        pud.checked=false;
        unsiya.checked=false;
        drahma.checked=false;
        gran.checked=false;
        funt.checked=false;
    }  if(pud.checked==true){
        n2= ( 1 / 16380) * g;
        n1.value=n2;
        funt.checked=false;
        unsiya.checked=false;
        drahma.checked=false;
        gran.checked=false;
        pud.checked=false;
    }  if(unsiya.checked==true){
        n2= ( 1 / 28.35) * g;
        n1.value=n2;
        funt.checked=false;
        pud.checked=false;
        drahma.checked=false;
        gran.checked=false;
        unsiya.checked=false;
    } if(drahma.checked==true){
        n2= ( 1 / 1.772) * g;
        n1.value=n2;
        funt.checked=false;
        pud.checked=false;
        unsiya.checked=false;
        gran.checked=false;
        drahma.checked=false;
    } if(gran.checked==true){
        n2= ( 1 / 0.0648) * g;
        n1.value=n2;
        funt.checked=false;
        pud.checked=false;
        unsiya.checked=false;
        drahma.checked=false;
        gran.checked=false;
    }
}

function c_click(){
   var g=document.querySelector("#gram");
   g1 = "";
   g.value = g1;
    var n = document.querySelector("#vnav");
    n1 = "";
    n.value = n1;
}