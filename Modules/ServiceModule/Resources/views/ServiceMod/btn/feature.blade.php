@if($feature == 1)
    <form action="#" method="post">
        <input type="hidden" class="token" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" class="id" name="_id" value="{{ $id }}">
            <button type="button" value="{{$feature}}" class="btn btn-success FeatBtn">@lang('servicemodule::service.yes')</button>
    </form>
    @else
    <form action="#" method="post">
        <input type="hidden" class="token" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" class="id" name="_id" value="{{ $id }}">
            <button type="button" value="{{$feature}}" class="btn btn-danger FeatBtn">@lang('servicemodule::service.no')</button>
    </form>
@endif
