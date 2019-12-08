function sizing(){
  var obj=document.getElementById("titre");
  obj.style.fontSize='28px';
}
function bgchange(){
  var obj=document.body;
  obj.style.backgroundColor="#ccc";
}
function countp(){
  var t=document.getElementsByTagName("p");
            alert("Il y a "+t.length+" balises P dans ce document");
}
function bgchangeyellow(){
  var t=document.getElementsByTagName("p");
  for (i=0 ; i<t.length ; i++)
            {
              t[i].style.backgroundColor="yellow";
            }
}
function pairbgchangeyellow(){
  var t=document.getElementsByTagName("p");
  for (i=0 ; i<t.length ; i++)
            {
              if ((i%2)!=0){
              t[i].style.backgroundColor="red";
              }
            }
}
function impairhide(){
  var t=document.getElementsByTagName("p");
  for (i=0 ; i<t.length ; i++)
            {
              if ((i%2)==0){
                if(t[i].style.display=="none")    
                  t[i].style.display="block";
                else
                  t[i].style.display="none";
              }
            }
}
function adda(){
  var a=document.createElement("a");
  a.id="jQuery_link"
  a.href="https://jquery.com/"
  a.title="Découvrer le site de JQuery ! "
  a.innerHTML=" La référence de jQuery sur le web "
  document.body.appendChild(a);
}
function GoFind(){
  var t=document.getElementsByTagName("p");
  for (i=0 ; i<t.length ; i++)
            {
              var tmp = t[i];
              tmp.innerHTML=tmp.innerHTML.replace(/augue/g,"<span class='selection'>augue</span>");
              
            }
}