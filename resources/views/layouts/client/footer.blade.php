<div class="container" dir="rtl">
    <div class="row col-12 col-lg-9 mx-lg-auto py-5">
        <div class=" col-12 col-md-5 mb-5 mb-md-0 px-5 myfooter text-right" >
            <strong>
                دسترسی سریع
            </strong>
            <ul>
                <li><a class="pointer" href="/">
                    خانه
                    </a></li>

                <li><a class="pointer" href="{{route('contactus')}}">
                        تماس با ما
                    </a></li>
            </ul>
        </div>

        <div class="col-12 col-md-7 pr-5 myfooter text-right">
            <strong>
                راه های ارتباطی با ما
            </strong>


            <div class="row mb-2">
                <div class="col-3">
                    <strong>موبایل:</strong>
                </div>
                <div class="col-9">
                    {{$setting['mobile']}}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <strong>ایمیل:</strong>
                </div>
                <div class="col-9">
                    {{$setting['email']}}
                </div>
            </div>
        </div>
    </div>
</div>
