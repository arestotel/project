(function(){
  var button = document.getElementById('load');
  if(button){
    button.onclick = function(e){
      var xhr = new XMLHttpRequest(); 
      xhr.open('POST', '/panel', true); //��� ���� ������ ������
      xhr.onreadystatechange = function(){ //����
      if (xhr.readyState != 4) 
        return;
      }
      location.reload();
      return false;
    };
  }
})();