
<script src="{{asset('assets/admin/plugins/sweetalert/sweetalert.min.js')}}"></script>

@if (session('success'))
    <script>
        swal("{{__('commonmodule::swal.good')}}", "{{__('commonmodule::swal.saved')}}", "success", { button: "{{__('commonmodule::swal.btn')}}", });
    </script>
@endif

@if (session('updated'))
    <script>
        swal("{{__('commonmodule::swal.good')}}", "{{__('commonmodule::swal.edited')}}", "success", { button: "{{__('commonmodule::swal.btn')}}", });
    </script>
@endif
