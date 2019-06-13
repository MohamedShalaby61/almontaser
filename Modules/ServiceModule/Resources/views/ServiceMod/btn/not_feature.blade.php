@if($feature == 0)
    <form action="#" method="post">
        <input type="hidden" class="token" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" class="id" name="_id" value="{{ $id }}">
        @if ($feature == 1)
            <button value="{{$feature}}" class="btn btn-success FeatBtn">@lang('servicemodule::service.yes')</button>
        @else
            <button value="{{$feature}}" class="btn btn-danger FeatBtn">@lang('servicemodule::service.no')</button>
        @endif
    </form>
    <script>
        $('.FeatBtn').on('click',function (e) {
            var id = $('.id').attr('value');
            var token = $('.token').attr('value');
            var feature = $(this).attr('value');
            e.preventDefault();
            $.ajax({
                type:'post',
                url:'{{ route('change_feature') }}',
                data:{id:id,_token:token,feature:feature},
                success:function (data) {
                    swal("{{__('commonmodule::swal.good')}}", "{{__('commonmodule::swal.edited')}}", "success", { button: "{{__('commonmodule::swal.btn')}}", });
                    alert('good');
                },
            });
        });
    </script>
@endif
