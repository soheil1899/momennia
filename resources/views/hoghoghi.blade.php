@extends('layouts.client.master')

@section('content')

    <div class="container py-5" dir="rtl">
        <div class="row py-2">
            <h3 class="mx-auto"><strong>
                    امور حقوقی
                </strong></h3>
        </div>

        <div class="row mb-5">
            <div class="pagestyle"></div>
        </div>








        <div class="accordion text-right" dir="rtl" id="accordionExample">
            <div class="card">
                <div class="card-header" id="heading1">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            <strong> امور حقوقی</strong>
                        </button>
                    </h2>
                </div>

                <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionExample">
                    <div class="card-body">
<h6>
<strong>    ۱. ثبت دادخواست
</strong>
</h6>
                        <p>
تهیه و تنظیم انواع دادخواست و شکواییه
                        </p><h6>
<strong>    ۲. حقوقی
</strong>
</h6>
                        <p>
                            الزام به تنظیم سند ؛ الزام به تحویل مبیع ؛ خلع ید ؛ تخلیه ؛ فروش ملک مشاع ؛ ابطال سند ؛ قراردادهای مالی ؛ چک ؛ سفته ؛ رسید ؛ فاکتور ؛ ارث ؛ تنفیذ وصیتنامه و....
                        </p>

                        <h6>
<strong>                            ۳. کیفری
</strong>                        </h6>
                        <p>
                            سرقت ؛ کلاهبرداری ؛ خیانت در امانت ؛ جعل و استفاده از سند مجعول ؛ تصادفات رانندگی ؛ مطالبه دیه از صندوق بیمه خسارت های بدنی ؛ چک بلامحل ؛ آدم ربایی ؛ ضرب و جرح ؛ قتل و....
                        </p>
                        <h6>
<strong>                            ۴. خانواده
</strong>                        </h6>
                        <p>
                            طلاق توافقی ؛ طلاق یکطرفه ؛ حضانت ؛ تمکین ؛ نفقه ؛ اجرت المثل ؛ استرداد جهیزیه ؛ ملاقات فرزند
                        </p>

                    </div>
                </div>
            </div>

        </div>



















    </div>


@endsection
