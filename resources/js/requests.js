import $ from 'jquery';

function makeRequest(self) {
    var xhr = new XMLHttpRequest();
    var id = self.parent().attr('id');
    var action = self.attr('data-action');
    xhr.open('PATCH', '/craftsman/request', true);

    xhr.setRequestHeader('X-HTTP-Method-Override', 'PATCH');

    xhr.onload = function() {
        if (xhr.status === 200) {
            // location.reload();
            console.log('Error:', xhr.responseText);
        } else {
            console.log('Error:', xhr.responseText);
        }
    };

    var data = {
        'request': id,
        'action': action
    };

    var jsonData = JSON.stringify(data);

    xhr.send(jsonData);
}

$(document).ready(function() {
    var accept = $('.accept');
    var decline = $('.decline');

    accept.each(function() {
        $(this).on('click', function() {
            makeRequest($(this));
        });
    });
    decline.each(function() {
        $(this).on('click', function() {
            makeRequest($(this));
        });
    });
});
