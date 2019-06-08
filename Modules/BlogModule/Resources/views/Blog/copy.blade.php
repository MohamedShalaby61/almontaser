
@foreach ($activeLang as $lang)
<script>
    // Copy written
    $(document).ready(function () {
        // Title & Meta title.
        $("#title{{$lang->id}}").on("input", function () {
            $("#countTitleLettrs{{$lang->id}}").val(this.value);
        });

        // Description & Meta description.
        $("#shortDesc{{$lang->id}}").on("input", function () {
            $("#countDescLettrs{{$lang->id}}").val(this.value);
        });

        // Tags.
        $("#tags{{$lang->id}}").on("input", function () {
            $("#metatags{{$lang->id}}").val(this.value);
        });

    });
</script>
@endforeach
