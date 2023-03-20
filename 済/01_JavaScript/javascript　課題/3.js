function menseki(hankei){
    return(hankei**2*3.14+"<br>");
}

document.write(menseki(5));
document.write(menseki(7));
document.write(menseki(10));

document.write("<br>");

function goukei(oninzuu,kninzuu,o=500,k=200){
    return(oninzuu*o+kninzuu*k);
}

document.write("Aグループの合計金額は"+goukei(2,4)+"円です。<br>");
document.write("Bグループの合計金額は"+goukei(1,5)+"円です。<br>");
document.write("Cグループの合計金額は"+goukei(3,7,600,300)+"円です。<br>");