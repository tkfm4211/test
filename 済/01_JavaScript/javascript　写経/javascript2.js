for(var a=1;a<=10;a++){
    if(a%2==0){
        document.write(a);
        document.write("<br>");
    }
}

for(var b=1;b<=3;b++){
    for(var c=1;c<=9;c++){
        document.write(b*c);
        document.write(" ")}
        document.write("→"+b+"の段<br>");
}

for(var star1=1;star1<=5;star1++){
    for(var star2=1;star2<=5;star2++){
        document.write("★");
    }
    document.write("<br>");
}

var d=1;
while(d<=5){
    document.write(d);
    d++;
    document.write("<br>")
}
var n=30;
while(n>=1){
if(n%3==0){
    document.write(n+"<br>");
}else{
    document.write("00");
}
    n--;
}