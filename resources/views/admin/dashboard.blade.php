@extends('adminlte::page')

@section('title', __('global.dashboard'))

@section('content_header')
    <h1>{{__('global.dashboard')}}</h1>
@stop
@section('content')



@stop
@section('footer')
    <strong>{{__('global.developed_by')}} <a href="https://soft-itbd.com">{{__('global.soft_itbd')}}</a>.</strong>
    {{__('global.all_rights_reserved')}}.
    <div class="float-right d-none d-sm-inline-block">
        <b>{{__('global.version')}}</b> {{env('DEV_VERSION')}}
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('plugins.datatablesPlugins', true)
@section('plugins.Datatables', true)
@section('js')
    <script>
        $(document).ready(function() {
            $(".dataTable").DataTable({
                responsive: true,
                lengthChange: false,
                autoWidth: false,
                searching: false,
                ordering: true,
                info: false,
                paging: false,

            });
        });
    </script>
@stop
