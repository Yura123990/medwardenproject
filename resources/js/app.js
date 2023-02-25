require('./bootstrap');

require('alpinejs');

window.onload = function () {
  var block = document.getElementById("message_history");
  block.scrollTop = block.scrollHeight;
}