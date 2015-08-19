(function(){
  var button = document.getElementById('load');
  if(button){
    button.onclick = function(e){
      var xhr = new XMLHttpRequest(); 
      xhr.open('POST', '/panel', true); //вот сюда делаем запрос
      xhr.onreadystatechange = function(){ //ждем
      if (xhr.readyState != 4) 
        return;
      }
      location.reload();
      return false;
    };
  }
})();