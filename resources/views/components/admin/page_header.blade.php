<div class="page-header">
    <h3 class="page-title text-primary">{{ $title }}</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ $route ?? route('admin.'.strtolower($title).'.index') }}"
                class="a-primary font-weight-bold">
                    {{ $item ?? $title }}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ $subtitle ?? $title }}
            </li>
        </ol>
    </nav>
</div>