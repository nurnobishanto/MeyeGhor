@extends('adminlte::page')

@section('title', __('global.update_slider'))

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>{{ __('global.update_slider')}}</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('global.home')}}</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.sliders.index')}}">{{ __('global.sliders')}}</a></li>
                <li class="breadcrumb-item active">{{ __('global.update_slider')}}</li>
            </ol>

        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.sliders.update',['slider'=>$slider->id])}}" method="POST" enctype="multipart/form-data" id="admin-form">
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
                                    <input id="title" name="title" value="{{$slider->title}}" class="form-control" placeholder="{{ __('global.enter_menu')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="url">{{ __('global.url')}}<span class="text-danger"> *</span></label>
                                    <input id="url" name="url" value="{{$slider->url}}" class="form-control" placeholder="{{ __('global.enter_url')}}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">{{ __('global.description')}}</label>
                                    <textarea id="description" name="description" class="form-control" placeholder="{{ __('global.enter_description')}}">{{$slider->description}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="target">{{__('global.select_target')}}</label>
                                    <select name="target" class="form-control" id="target">
                                        <option value="" @if("" == $slider->target) selected @endif>{{__('global.same_page')}}</option>
                                        <option value="_blank" @if("_blank" == $slider->target) selected @endif>{{__('global.open_new_window')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="url">{{ __('global.order')}}<span class="text-danger"> *</span></label>
                                    <input id="order" type="number" name="order" value="{{$slider->order}}" class="form-control" placeholder="{{ __('global.enter_order')}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="status">{{__('global.select_status')}}</label>
                                    <select name="status" class="form-control" id="status">
                                        <option value="active" @if("active" == $slider->status) selected @endif>{{__('global.active')}}</option>
                                        <option value="deactivate" @if("deactivate" == $slider->status) selected @endif>{{__('global.deactivate')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">{{__('global.select_image')}}</label>
                                    <input name="image" type="file" class="form-control" id="image" accept="image/*">
                                    <input name="image_old" class="d-none" value="{{$slider->image}}" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="background">{{__('global.select_background_image')}}</label>
                                    <input name="background" type="file" class="form-control" id="background" accept="image/*">
                                    <input name="background_old" class="d-none" value="{{$slider->background}}" >
                                </div>
                            </div>


                            <div class="col-md-6 border">
                                <label>Selected Image</label><br>
                                <img src="{{asset('uploads/'.$slider->image)}}" alt="Selected Image" id="selected-image" style="max-height: 150px">
                            </div>
                            <div class="col-md-6 border">
                                <label>Selected Background Image</label><br>
                                <img src="{{asset('uploads/'.$slider->background)}}" alt="Selected Image" id="selected-background" style="max-height: 150px">
                            </div>

                        </div>

                        @can('slider_update')
                            <button class="btn btn-success mt-2" type="submit">{{ __('global.update')}}</button>
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
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice{
            color: black;
        }
    </style>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('.select2').select2({
            theme:'classic'
        });
    });
    document.addEventListener('DOMContentLoaded', function () {
        const imageForm = document.getElementById('admin-form');
        const selectedImage = document.getElementById('selected-image');
        const selectedBackground = document.getElementById('selected-background');

        imageForm.addEventListener('change', function () {
            const fileImage = this.querySelector('input[name="image"]');
            const fileBg = this.querySelector('input[name="background"]');
            const imageFile = fileImage.files[0];
            const bgFile = fileBg.files[0];

            if (imageFile) {
                const imageUrl = URL.createObjectURL(imageFile);
                selectedImage.src = imageUrl;
                selectedImage.style.display = 'block';
            }
            if (bgFile) {
                const bgUrl = URL.createObjectURL(bgFile);
                selectedBackground.src = bgUrl;
                selectedBackground.style.display = 'block';
            }
        });
    });
</script>
@stop
