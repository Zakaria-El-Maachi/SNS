import $ from 'jquery';

$(document).ready(function() {
    let hidden = ['Company', 'Address', 'Description', 'Image'];
  
    let radio = $('[name=account_type]');
  
    radio.each(function() {
      $(this).on('click', function() {
  
        if ($('[name=account_type]:checked').val() == 'Craftsman') {
          hidden.forEach(function(item) {
            $('#' + item).removeClass('hidden');
          });
        } else {
          hidden.forEach(function(item) {
            $('#' + item).addClass('hidden');
          });
        }
      });
    });
  });
  