
@extends('layouts.app')

@section('content')
<div class="container page_content" style="min-height: 80vh;">
    <div class="container-fluid notification_page">
        <div class="row" style="width: 100%;">
            <div class="col-md-12">
                <div class="notifacation mt-1" style="flex-direction: row;justify-content: flex-start;">
                    <span>You have received
                        SAR from
                        <span style="color: #62BFBF;">pending confirmation</span>.
                    </span>
                </div>

                <div class="notifacation mt-1" style="flex-direction: row;justify-content: flex-start;">
                    <div class="notafication_img_con">
                        <img src="{{URL::asset('assets/image/icons8-checklist-64 1.png')}}" alt="">
                    </div>
                    <span>Payment Completed .. Thanks for using our website</span>
                </div>
                <div class="notifacation mt-1" style="flex-direction: row;justify-content: flex-start;">
                    <div class="notafication_img_con">
                        <img src="{{URL::asset('assets/image/icons8-x-67 1.svg')}}" alt="">
                    </div>
                    <span>Payment cancel, contact with payment issuer</span>
                </div>
            </div>
        </div>
    </div>
 
</div>


@endsection