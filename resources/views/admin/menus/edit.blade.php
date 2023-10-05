@extends('adminlte::page')

@section('title', __('global.update_menu'))

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>{{ __('global.update_menu')}}</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('global.home')}}</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.menus.index')}}">{{ __('global.menus')}}</a></li>
                <li class="breadcrumb-item active">{{ __('global.update_menu')}}</li>
            </ol>

        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.menus.update',['menu'=>$menu->id])}}" method="POST" enctype="multipart/form-data" id="admin-form">
                        @method('PUT')
                        @csrf
                        @if (count($errors) > 0)
                            <div class = "alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">{{ __('global.title')}} <span class="text-danger"> *</span></label>
                                    <input id="title" value="{{$menu->title}}" name="title" class="form-control" placeholder="{{ __('global.enter_menu')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="url">{{ __('global.url')}}<span class="text-danger"> *</span></label>
                                    <input id="url" name="url" value="{{$menu->url}}" class="form-control" placeholder="{{ __('global.enter_url')}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="url">{{ __('global.order')}}<span class="text-danger"> *</span></label>
                                    <input id="order" type="number" value="{{$menu->order}}" name="order" class="form-control" placeholder="{{ __('global.enter_order')}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="parent_id">{{__('global.select_parent_menu')}}</label>
                                    <select name="parent_id" class=" form-control" id="parent_id">
                                        <option value="">{{__('global.select_parent_menu')}}</option>
                                        @foreach($menus as $m)
                                            @if(!$m->parent_id)
                                            <option value="{{$m->id}}" @if($m->id == $menu->parent_id) selected @endif>{{$m->title}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="target">{{__('global.select_target')}}</label>
                                    <select name="target" class="form-control" id="target">
                                        <option value="" @if("" == $menu->target) selected @endif>{{__('global.same_page')}}</option>
                                        <option value="_blank" @if("_blank" == $menu->target) selected @endif>{{__('global.open_new_window')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="status">{{__('global.select_status')}}<span class="text-danger"> *</span></label>
                                    <select name="status" class="form-control" id="status">
                                        <option value="active" @if("active" == $menu->status) selected @endif>{{__('global.active')}}</option>
                                        <option value="deactivate" @if("deactivate" == $menu->status) selected @endif>{{__('global.deactivate')}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        @can('menu_update')
                            <button class="btn btn-success" type="submit">{{ __('global.update')}}</button>
                        @endcan
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer')
    <strong>{{__('global.developed_by')}} <a href="https://soft-itbd.com">{{__('global.soft_itbd')}}</a>.</strong>
    {{__('global.all_rights_reserved')}}.
    <div class="float-right d-none d-sm-inline-block">
        <b>{{__('global.version')}}</b> {{env('DEV_VERSION')}}
    </div>
@stop
@section('plugins.toastr',true)
@section('plugins.Select2',true)
@section('css')

@stop

@section('js')
<script>
    $(document).ready(function() {

    });

</script>
@stop