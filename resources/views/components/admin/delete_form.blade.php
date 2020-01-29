<form action="{{ $route }}" method="POST">

    @csrf

    @method('DELETE')

    <button class="btn btn-inverse-dark">
        <i class="mdi mdi-delete"></i>
    </button>
</form>