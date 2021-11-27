@extends('dashboarder::layouts.master')

@section('page_title')
Dashboard
@endsection

@section('title')
Dashboard
@endsection

@section('content')

<div class="alert info">
    {{ dashboarder_icon('accessible') }}
    {{ dashboarder_icon('wallet') }}

</div>
{{-- <div class="container float-left">

    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quibusdam velit quod, nemo repellendus dolore, sunt quia vel delectus, natus nihil voluptatibus illum obcaecati nobis magnam commodi laborum. Accusantium, id.

    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12h4l3 8l4 -16l3 8h4" /></svg>

    {{ dashboarder_icon('activity') }}

</div> --}}


@endsection
