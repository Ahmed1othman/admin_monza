@extends('website::layouts.master')
@section('seo')
    @include('website::layouts.parts.seo', [
        'seo' => \App\Models\SEO::where('type','home')->first(),
        "title" => app('settings')->get('faq_title'),
        "image" => url('/') . '/storage/'. app('settings')->get('header_logo')
    ])
@endsection
@section("content")


    @include('website::layouts.parts.page-banner',[
        "title" => app('settings')->get('faq_title')
    ])


    @include('website::layouts.parts.faq', [
        "faq" => \App\Models\Faq::where('type','home')->get()   
    ])




@endsection