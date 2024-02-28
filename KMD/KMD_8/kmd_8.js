var a = document.querySelector("#A");
var b = document.querySelector("#B");
var c = document.querySelector("#C");
var summa = document.querySelector("#summa");
var kalon = document.querySelector("#kalon");
var xurd = document.querySelector("#xurd");
var s = document.querySelector("#S");
var k = document.querySelector("#K");
var x = document.querySelector("#X");
a1 = Number(a.value);
b1 = Number(b.value);
c1 = Number(c.value);
if (kalon.checked == true) {
    
} if (xurd.checked == true) {
    
}

function s_click(){
    s1 = a1 + b1 + c1;
    s.value = s1;
}
function k_click(){
    if (a1 > b1 > c1) {
        k.value = a1;
    } if (a1 < c1 > c1){
        k.value = b1;
    } if (a1 < b1< c1) {
        k.value = c1;
    }
    
}
function x_click() {
    if (a1 > b1 > c1) {
        x.value = c1;
    } if (a1 < b1 > c1){
        x.value = a1;
    } if (a1 > b1 < c1) {
        x.value = b1;
    }
    
}
function b_click(){
    close();
}