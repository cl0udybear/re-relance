
document.getElementById('forma').addEventListener('submit', function(event) {
  event.preventDefault();
 
  var name = document.getElementById('name').value;
  var phone = document.getElementById('phone').value;
 
 
  alert('Сообщение отправлено!');
  this.reset();
});
