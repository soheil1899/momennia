@extends('layouts.client.master')

@section('content')

    <div class="container py-5" dir="rtl">

        <div class="row py-2">
            <h3 class="mx-auto"><strong>
ارتباط با ما
                </strong></h3>
        </div>

        <div class="row mb-5">
            <div class="pagestyle"></div>
        </div>




        <contactus-component :setting="{{$setting}}"></contactus-component>


    </div>

@endsection
