@extends('layouts.admin')

@section('content')
    @adminPageHeader(['title' => 'Dashboard', 'icon' => 'mdi-home'])
    @endadminPageHeader

    @include('partials/admin/dashboard/_stat_panels')

    @include('partials/admin/dashboard/_sales_stat')

    @include('partials/admin/dashboard/_recent_tickets')

    @include('partials/admin/dashboard/_recent_updates')

    @include('partials/admin/dashboard/_project_status')
@endsection