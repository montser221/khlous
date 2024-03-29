@extends('layouts.app')
@section('title','تفاصيل الصورة')

@section('header')
    @include('includes.header')
@endsection

@section('content')
    <div class="container">
        <div class="imageView">
            <img src="{{ url($img->imageFile) }}" alt="{{ $img->imageTitle }}" />
        </div>
        <a class="btn mb-4 mt-4 main-color" href="{{ route('gallery') }}">عودة الى البوم الصور</a>
    </div>
@endsection
