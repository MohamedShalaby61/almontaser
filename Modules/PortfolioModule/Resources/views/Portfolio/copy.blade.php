
@foreach ($activeLang as $lang)
<script>
    /** Copy written */
    $(document).ready(function () {

        // Title & Meta title.
        // Description & Meta description.
        $("#title{{$lang->id}}").on("input", function () {
            $("#countTitleLettrs{{$lang->id}}").val(this.value);
            $("#countDescLettrs{{$lang->id}}").val(this.value);
        });

        // Tags.
        $("#tags{{$lang->id}}").on("input", function () {
            $("#metatags{{$lang->id}}").val(this.value);
        });

    });
</script>
@endforeach
