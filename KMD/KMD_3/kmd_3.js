function res_click(){
    var klm=document.querySelector("#km");
    var mm=document.querySelector("#mm");
    var sm=document.querySelector("#sm");
    var m=document.querySelector("#m");
    var km = Number(klm.value);
    mlm= km * 1000000;
    mm.value=mlm;
    snm= km * 100000;
    sm.value=snm;
    mtr= km * 1000;
    m.value=mtr;
}

