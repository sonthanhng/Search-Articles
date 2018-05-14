$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$( document ).ready(function() {
  $('#search-bar').on('input',function(e){
    var value = $('#search-bar').val();
    $.ajax({
      url: "articles/find/" + value.toString(),
      method: 'GET',
      processData: false,
      contentType: false,
      cache: false,
      success: function(data) {
        $('#total-result').html(data.length);
        $('tbody').html('');
        for(var i = 0; i < data.length; i++) {
          $('tbody').append('<tr><td>'+ data[i].title + '</td></tr>');
        }
      },
      error: function(data) {
        $('#total-result').html('0');
        $('tbody').html('<tr><td class="no-result">NO RESULT</td></tr>');
      }
    });
  });
});
