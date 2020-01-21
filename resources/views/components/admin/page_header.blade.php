<div class="page-header">
    <h3 class="page-title">{{ $title }}</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ $item ?? $title }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $subtitle ?? $title }}</li>
        </ol>
    </nav>
</div>