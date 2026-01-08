@extends('layouts.masterlayout')

@section('title', 'Home')

@section('content')
@php
    $useEn = app()->getLocale() !== 'th';
    $placeholderImg = asset('img/NEWS (1).svg');
    $newsLogo = 'https://news.rbru.ac.th/img/logonews.jpg';
@endphp

@include('components.home.hero')
@include('components.home.about')
@include('components.home.news-tabs')
@include('components.home.activities-mou')
@endsection
