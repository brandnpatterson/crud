var $close = document.querySelector('.close');
var $alert = document.querySelector('.alert');

if ($close) {
  $close.addEventListener('click', function() {
    $alert.style.display = 'none';
  });
}
