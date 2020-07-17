var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function() {
  $.ajax(
    {
      url: 'http://localhost:8888/php-ajax-dischi/api.php',
      method: 'GET',
      success: function(dataResponse) {

        printCds(dataResponse);
      },
      error: function() {
        alert('Attenzione, il server non risponde!');
      }
    }
  );

});

// FUNCTIONS
function printCds(arrayCds) {
  var source = $('#album-template').html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < arrayCds.length; i++) {
    var html = template(arrayCds[i]);

    $('main .container').append(html);
  }
};
