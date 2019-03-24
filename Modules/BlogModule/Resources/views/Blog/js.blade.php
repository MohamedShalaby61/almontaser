@foreach ($activeLang as $lang)
<script>
  $(document).ready(function () {
    $('#countTitleLettrs{{$lang->id}}').keyup(function() {
      // append them to a span
      $('#titleSpan{{$lang->id}}').text('{{trans("blog::category.chars")}} ' + this.value.length).css('color', 'green');
    })
    
    $('#countDescLettrs{{$lang->id}}').keyup(function() {
      // append them to a span
      $('#descSpan{{$lang->id}}').text('{{trans("blog::category.chars")}} ' + this.value.length).css('color', 'green');
    })
  });

</script>
@endforeach