function Enviar() {
  var combo = document.getElementById("Operacion");
  var selected = combo.options[combo.selectedIndex].text;
  var n1 = parseInt(document.getElementById("Numero_Uno").value);
  var n2 = parseInt(document.getElementById("Numero_Dos").value);
  var result=0;
  if(selected=="Suma"){
    result=n1+n2;
  }
  if(selected=="Resta"){
    result=n1-n2;
  }if(selected=="Multiplicación"){
    result=n1*n2;
  }if(selected=="División"){
    result=n1/n2;
  }
  document.getElementById("resultado").innerHTML=result;

}
