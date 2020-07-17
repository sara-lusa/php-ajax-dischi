var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function() {
  $.ajax(
    {
      url: 'http://localhost:8888/php-ajax-dischi/api.php',
      method: 'GET',
      success: function(dataResponse) {

        printSelectOptions(dataResponse);
        printCds(dataResponse);
      },
      error: function() {
        alert('Attenzione, il server non risponde!');
      }
    }
  );

  $('.select-author').change(function() {
    var valOption = $(this).val();

    $.ajax(
      {
        url: 'http://localhost:8888/php-ajax-dischi/api.php',
        method: 'GET',
        data: {
          autore: valOption,
        },
        success: function(dataResponse) {
          console.log(dataResponse);

          // printSelectOptions(dataResponse);
          // printCds(dataResponse);
        },
        error: function() {
          alert('Attenzione, non riesco a trovare il nome!');
        }
      }
    );

  });


});

// FUNCTIONS
function printCds(arrayCds) {
  var source = $('#album-template').html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < arrayCds.length; i++) {
    var html = template(arrayCds[i]);

    $('.container-albums').append(html);
  }
};

function printSelectOptions(arrayCds) {
  var source = $('#select-template').html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < arrayCds.length; i++) {
    var context = {
      author: arrayCds[i].author
    };
    var html = template(context);

    $('.select-author').append(html);
  }
}
