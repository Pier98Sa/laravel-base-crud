window.btnDelete= btnDelete;

//funzione dalla quale ricavo l'id e poi lo passo nell'action del form dell'index
function btnDelete(id){
  let comicId = id;
  console.log(comicId);

  document.getElementById("myForm").action = "comic/" + comicId;
}