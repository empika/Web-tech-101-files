$(document).ready(function(){
  
  $("#answer-load").click(function(){
    $.get('index-database-data.php', function(data){
      $('#answer-ul').append(data);
    });
    $(this).remove();
    return false;
  });
  
})