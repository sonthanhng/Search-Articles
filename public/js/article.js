function ShowResult(data) {
  var html = [];
  $('#total-result').html(data.length);
  $('tbody').html('');
  for(var i = 0; i < data.length; i++) {
    html.push('<tr><td>'+ data[i] + '</td></tr>');
  }
  document.getElementById('search-result').innerHTML = html.join('');
}

$( document ).ready(function() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('#search-bar').on('input',function(e){
    var value = $('#search-bar').val();
    $.ajax({
      url: "articles/find/" + value.toString(),
      method: 'GET',
      processData: false,
      contentType: false,
      cache: false,
      success: function(data) {
        console.time('ShowResult');
        ShowResult(data);
        console.timeEnd('ShowResult');
      },
      error: function(data) {
        // console.log(data);
        $('#total-result').html('0');
        $('tbody').html('<tr><td class="no-result">NO RESULT</td></tr>');
      }
    });
  });
});
