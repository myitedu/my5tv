//alert("Salom O'zbekiston!");
//document.write("Salom O'zbekiston!");
//let yosh = prompt("Sizning yoshingiz nechada?");
//let tugilgan_yil = 2020 - yosh;
//document.write("Siz "+tugilgan_yil+" da tugilgansiz.");
/*
let surash = confirm("Siz shu oynacha berkitishini yoki tark etishni hohlaysizmi?");
if (surash){ //Agar OK ni bossangiz
    alert("Hop raxmat, kuningiz yaxshi o'tsin. yana bizning sahifamizga tashrif byuring!");
}else{//Agar Cancel tugmasini bossngiz
    alert("Ha, yaxshi, agar bizning yordam kerak bolsa, bizdan so'ravering!");
}
 */
//let poytaht = prompt("O'zbekistonning poytaht qaysi shahar?");
//document.getElementById("my5").innerHTML = "Demak, sizningcha O'zbekiston pytahti: "+poytaht;
let text = '';
let i;
let qatorlar_soni = 0;
let nechta = prompt("Nechta sharikcha yasashimizni hohlaysiz?");
for (i = 0; i < nechta; i ++){
    qatorlar_soni ++;
    if (i%2 !== 0){
        text += "<div class='box juft_sonlar'> " + qatorlar_soni + " </div>";
    }else{
        text += "<div class='box'> " + qatorlar_soni + " </div>";
    }

}
document.getElementById("my5").innerHTML = text;
