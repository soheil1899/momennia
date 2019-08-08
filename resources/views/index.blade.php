@extends('layouts.client.master')

@section('content')

    <div class="container" id="slidertop" dir="ltr">
        <div class="row mt-5">
            <div class="col-12 col-lg-6">
                <img src="/media/cite/owner.jpeg" width="100%" height="350px" alt="">
            </div>
            <div class="col-12 col-lg-6">
                <slider-component :slider="{{$slider}}"></slider-component>
            </div>
        </div>






        <div class="row mx-auto col-9 mt-4 mb-3 px-5">
            <div class="col-lg-9 col-10 pr-0 pt-1 text-right">
                <h5 class="text-one" dir="rtl">
                    <strong>
ثبت انواع شرکت،
                        تهیه و تنظیم انواع صورت جلسات (تغییرات هیات مدیره شرکت ها ، انحلال ، کاهش و افزایش سرمایه به صورت تخصصی)
                    </strong>
                </h5>
            </div>
            <div class="col-3 p-0 text-center">
                <img src="/media/cite/register.png" width="100px" height="100px" class="circle-image">
            </div>

        </div>





        <div class="row mx-auto col-9  mb-3 px-5">
            <div class="col-lg-9 col-10 pr-0 pt-2 text-right">
                <h5 class="text-one" dir="rtl">
                    <strong>
معرفی وکیل در دعاوی حقوقی ،کیفری و خانواده
                    </strong>
                </h5>
            </div>
            <div class="col-3 p-0 text-center" >
                <img src="/media/cite/law.png" width="100px" height="100px" class="circle-image">
            </div>

        </div>



        <div class="row mx-auto col-9  mb-3 px-5">
            <div class="col-lg-9 col-10 pt-2 pr-0 text-right">
                <h5 class="text-one">
                    <strong>
                        انجام امور حسابداری و معرفی حسابرس
                    </strong>
                </h5>
            </div>
            <div class="col-3 p-0 text-center">
                <img src="/media/cite/hesabresi.png" width="100px" height="100px" class="circle-image">
            </div>


        </div>







    </div>



@endsection
