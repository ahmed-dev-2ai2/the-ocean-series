@extends('layouts.app')

@section('title', 'سلسلة المحيط 2027 | منصة مستر عبدالسلام رضوان')

@section('content')

    {{-- ============================================= --}}
    {{-- شاشة الترحيب موجودة في Layout (app.blade.php) --}}
    {{-- ============================================= --}}

    {{-- ============================================= --}}
    {{-- شريط التنقل --}}
    {{-- ============================================= --}}
    @include('components.navbar')

    {{-- ============================================= --}}
    {{-- باقي المكونات --}}
    {{-- ============================================= --}}
    @include('components.hero')
    @include('components.slider')
    @include('components.about')
    @include('components.features')
    @include('components.groups')
    @include('components.gallery')
    @include('components.testimonials')
    @include('components.news')
    @include('components.contact')
    @include('components.footer')

@endsection