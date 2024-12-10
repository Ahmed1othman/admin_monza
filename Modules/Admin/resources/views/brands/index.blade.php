@extends('admin::layouts.master')
@section('modals')
    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">{{__('admin.add')}} {{__('admin.brand')}}</h5>
                </div>
                <form action="{{url('/')}}/admin/brands"  method="post" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">
                    @foreach(\Config::get("app.languages") as $key => $value)
                    <div class="form-group row mb-4">
                        <label class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{__('admin.name')}} {{$value}}</label>
                        <div class="col-xl-9 col-lg-9 col-sm-10">
                            <input type="text" required class="form-control" name="title_{{$key}}" >
                        </div>
                    </div>
                    @endforeach
                    @foreach(\Config::get("app.languages") as $key => $value)
                    <div class="form-group row mb-4">
                        <label class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{__('admin.title')}} {{__('admin.page')}} {{$value}}</label>
                        <div class="col-xl-9 col-lg-9 col-sm-10">
                            <input type="text" required class="form-control" name="page_title_{{$key}}" >
                        </div>
                    </div>
                    @endforeach
                    @foreach(\Config::get("app.languages") as $key => $value)
                    <div class="form-group row mb-4">
                        <label class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{__('admin.description')}} {{__('admin.page')}} {{$value}}</label>
                        <div class="col-xl-9 col-lg-9 col-sm-10">
                            <textarea class="form-control" name="page_description_{{$key}}"></textarea>
                        </div>
                    </div>
                    @endforeach
                    <div class="form-group row mb-4">
                        <label for="hPassword" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{__('admin.image')}}</label>
                        <div class="col-xl-9 col-lg-9 col-sm-10">
                            <div class="custom-file">
                                <input type="file" required class="custom-file-input" accept="image/*" name="image" id="customFile">
                                <label class="custom-file-label" for="customFile">{{__('admin.choose_file')}}</label>
                            </div>

                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{__('admin.link')}}</label>
                        <div class="col-xl-9 col-lg-9 col-sm-10">
                            <input type="text" required class="form-control" name="slug" >
                        </div>
                    </div>

                    @include("admin::layouts.parts.content", [
                            "content" => null,
                            "seo"     => null,
                            "faq"     => null
                    ])
   <div class="statbox widget box box-shadow mt-3">
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
                        <input type="text" required class="form-control" name="meta_title_{{$key}}" placeholder="{{ __('') }}">
                    </div>
                </div>
                @endforeach


                {{-- Meta Description Fields --}}
                @foreach(\Config::get("app.languages") as $key => $value)
                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{ __('meta_description') }} {{$value}}</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                        <input type="text" required class="form-control" name="meta_description_{{$key}}" placeholder="{{ __('') }}">
                    </div>
                </div>
                @endforeach


                {{-- Meta Keywords Fields --}}
                @foreach(\Config::get("app.languages") as $key => $value)
                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-sm-3 col-sm-2 col-form-label">{{ __('meta_keywords') }} {{$value}}</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                        <input id="brand_tags_{{$key}}" data-role="tagsinput" type="text" required class="form-control tag" name="meta_keywords_{{$key}}" placeholder="{{ __('') }}">
                    </div>
                </div>
                @endforeach


                {{-- Add other offer-specific fields here if needed --}}

            </div>
        </div>
    </div>
</div>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> {{__('admin.cancel')}}</button>
                    <button type="submit" class="btn btn-primary">{{__('admin.save')}}</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

<script>
    $(document).ready(function() {
        @foreach(\Config::get("app.languages") as $key => $value)
            $('#brand_tags_{{$key}}').tagsinput();
        @endforeach
    });
</script>
@endsection
@section('content')

    <div class="layout-px-spacing">



                <div class="row layout-spacing">

                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <div class="page__header_title">
                                            <h4>{{__('admin.brands')}}</h4>
                                            <button data-toggle="modal" data-target="#addModal" class="btn btn-primary btn-rounded">
                                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                {{__('admin.add')}} {{__('admin.brand')}}

                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                            <form action="/admin/brands" method="get">
                                            <div class="filter row">
                                                <div class="form-group col-lg-2">
                                                    <input type="text" value="{{request()->get('search')}}" class="form-control" name="search" id="search" placeholder="{{__('admin.search')}} ">
                                                </div>

                                                <div class="form-group col-lg-2">
                                                    <button class="btn btn-primary " id="search-btn">{{__('admin.filter_results')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                <div class="row">
                                    @include("admin::layouts.parts.app.alerts")


                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <table id="style-3" class="table style-3  table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">{{__('admin.image')}}</th>
                                                    <th class="text-center">{{__('admin.name')}}</th>
                                                    <th class="text-center">{{__('admin.link')}}</th>

                                                    <th class="text-center dt-no-sorting">{{__('admin.actions')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $item)
                                                <tr>

                                                    <td class="text-center">
                                                        <img src="{{url('/')}}/storage/{{$item->image}}" class="table-img">
                                                    </td>
                                                    <td class="text-center">
                                                        @foreach(\Config::get("app.languages") as $key => $value)
                                                            {{$item->getTranslation("title",$key)}} <br/>
                                                        @endforeach
                                                    </td>
                                                    <td class="text-center">{{$item->slug}}</td>


                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li>
                                                                <a href="{{url('/')}}/admin/brands/{{$item->id}}/edit" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{__('admin.edit')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                                </a>
                                                             </li>
                                                            <li>
                                                                <form action="{{url('/')}}/admin/brands/{{$item->id}}" method="post">
                                                                    @csrf
                                                                    @method("DELETE")
                                                                    <button class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{__('admin.delete')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        {{$data->links()}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

@endsection

