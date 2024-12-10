@extends('admin::layouts.master')

@section('content')

            <div class="layout-px-spacing">
                <form action="{{url('/')}}/admin/types/{{$item->id}}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="page__header_title custom__page_header_title">
                        <h4>{{__('admin.edit')}}</h4>
                        <button class="btn btn-primary btn-rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                            {{__('admin.save')}}

                        </button>
                    </div>



                    <div class="row layout-spacing">
                        @include("admin::layouts.parts.app.alerts")
                        <div class="col-lg-7">
                            <div class="statbox widget box box-shadow">

                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">

                                        @foreach(\Config::get("app.languages") as $key => $value)
                                        <div class="form-group row mb-4">
                                            <label class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{__('admin.name')}} {{$value}}</label>
                                            <div class="col-xl-9 col-lg-9 col-sm-10">
                                                <input value='{{$item->getTranslation("title",$key)}}' type="text" required class="form-control" name="title_{{$key}}" >
                                            </div>
                                        </div>
                                        @endforeach

                                        @foreach(\Config::get("app.languages") as $key => $value)
                                        <div class="form-group row mb-4">
                                            <label class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{__('admin.title')}} {{__('admin.page')}} {{$value}}</label>
                                            <div class="col-xl-9 col-lg-9 col-sm-10">
                                                <input  value='{{$item->getTranslation("page_title",$key)}}' type="text" required class="form-control" name="page_title_{{$key}}" >
                                            </div>
                                        </div>
                                        @endforeach
                                        @foreach(\Config::get("app.languages") as $key => $value)
                                        <div class="form-group row mb-4">
                                            <label class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{__('admin.description')}} {{__('admin.page')}} {{$value}}</label>
                                            <div class="col-xl-9 col-lg-9 col-sm-10">
                                                <textarea class="form-control" name="page_description_{{$key}}">{{$item->getTranslation("page_description",$key)}}</textarea>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="form-group row mb-4">
                                            <label for="hPassword" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{__('admin.image')}}</label>
                                            <div class="col-xl-9 col-lg-9 col-sm-10">
                                                <div class="custom-file">
                                                    <input type="file"  class="custom-file-input" accept="image/*" name="image" id="customFile">
                                                    <label class="custom-file-label" for="customFile">{{__('admin.choose_file')}}</label>
                                                </div>
                                                @if($item->image)
                                                <a href="{{url('/')}}/storage/{{$item->image}}" target="_blank">
                                                    <img class="image-form" src="{{url('/')}}/storage/{{$item->image}}" alt="">
                                                </a>
                                                @endif

                                            </div>

                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{__('admin.link')}}</label>
                                            <div class="col-xl-9 col-lg-9 col-sm-10">
                                                <input type="text" value="{{$item->slug}}" required class="form-control" name="slug" >
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{__('admin.external_url')}} </label>
                                            <div class="col-xl-9 col-lg-9 col-sm-10">
                                                <input type="text" value="{{$item->external_url}}" class="form-control" placeholder="http://....." name="external_url" >
                                            </div>
                                        </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="statbox widget box box-shadow col-lg-5">
                            <div class="widget-content widget-content-area ">
                            <h4>
                                Meta Data
                            </h4>
                             <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                        {{-- Meta Title Fields --}}
                                        @foreach(\Config::get("app.languages") as $key => $value)
                                        <div class="form-group row mb-4">
                                            <label class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{ __('meta_title') }} {{$value}}</label>
                                            <div class="col-xl-9 col-lg-9 col-sm-10">
                                                <input type="text" required class="form-control" name="meta_title_{{$key}}" placeholder="{{ __('') }}" value="{{$item->getTranslation('meta_title', $key)}}">
                                            </div>
                                        </div>
                                        @endforeach


                                        {{-- Meta Description Fields --}}
                                        @foreach(\Config::get("app.languages") as $key => $value)
                                        <div class="form-group row mb-4">
                                            <label class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{ __('meta_description') }} {{$value}}</label>
                                            <div class="col-xl-9 col-lg-9 col-sm-10">
                                                <input type="text" required class="form-control" name="meta_description_{{$key}}" placeholder="{{ __('') }}"  value="{{$item->getTranslation('meta_description', $key)}}">
                                            </div>
                                        </div>
                                        @endforeach


                                        {{-- Meta Keywords Fields --}}
                                        @foreach(\Config::get("app.languages") as $key => $value)
                                        <div class="form-group row mb-4">
                                            <label class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{ __('meta_keywords') }} {{$value}}</label>
                                            <div class="col-xl-9 col-lg-9 col-sm-10">
                                                <input id="tags_type_{{$key}}" data-role="tagsinput" type="text" required class="form-control tag" name="meta_keywords_{{$key}}" placeholder="{{ __('') }} "value="{{$item->getTranslation('meta_keywords', $key)}}">
                                            </div>
                                        </div>
                                        @endforeach


                                        {{-- Add other offer-specific fields here if needed --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            @include("admin::layouts.parts.content", [
                                "content" => \App\Models\Content::where([["type", "type"],["resource_id", $item->id]])->first(),
                                "seo" => \App\Models\SEO::where([["type", "type"],["resource_id", $item->id]])->first(),
                                "faq" => \App\Models\Faq::where([["type", "type"],["resource_id", $item->id]])->get()
                            ])
                        </div>


                    </div>

                </form>

            </div>

@endsection
@section('js')



    <script>
        $(document).ready(function() {
            @foreach(\Config::get("app.languages") as $key => $value)
                $('#tags_type_{{$key}}').tagsinput();
            @endforeach
        });
    </script>
@endsection
