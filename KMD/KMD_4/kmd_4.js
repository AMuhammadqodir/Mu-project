function btn_Clic(){

    var l=(a.value / 100) * c.value;
    var n = l * b.value;
    document.getElementById("d").value= n
    return n
   
}

function btn_Mover(){

    var button=document.querySelector("#nav");
    button.style.backgroundColor="white";
    button.style.color="black";
}

function btn_Mout(){

    var button=document.querySelector("#nav");
    button.style.backgroundColor="rgb(4, 4, 32)";
    button.style.color="white";
}



function clearScreen()
{
    document.getElementById("a").value = "";
    document.getElementById("b").value = "";
    document.getElementById("c").value = "";
    document.getElementById("d").value = "";
}


