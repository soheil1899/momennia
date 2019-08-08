@extends('layouts.client.master')

@section('content')

    <div class="container py-5" dir="rtl">
        <div class="row py-2">
            <h3 class="mx-auto"><strong>
                    مشتریان ما
                </strong></h3>
        </div>

        <div class="row mb-5">
            <div class="pagestyle"></div>
        </div>

        <table class="table table-striped" dir="rtl">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">نام شرکت</th>
                <th scope="col">برند شرکت</th>
                <th scope="col">آدرس</th>
                <th scope="col">توضیحات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $key=>$customer)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$customer['company_name']}}</td>
                <td>{{$customer['company_name_en']}}</td>
                <td>{{$customer['address']}}</td>
                <td>{{$customer['description']}}</td>
            </tr>
                @endforeach

            </tbody>
        </table>


    </div>


@endsection
