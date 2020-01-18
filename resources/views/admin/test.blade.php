@include('partials.datatables._dom'),
buttons: [
    @include('partials.datatables._default_buttons'),
    {
        text: '<i class="fa fa-trash-o text-white"></i>',
        className: 'delete-checked',
        attr:  {
            id: 'delete'+records
        },
    }
],