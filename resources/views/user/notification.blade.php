
@extends('layouts.app')

@section('content')
<div class="container page_content" style="min-height: 10vh;">
    <div class="container-fluid notification_page">
        <div class="row w-75" style="width: 100%; transform: translateY(-3rem);">
            <div class="col-md-12 content">
                <div class="notifacation first-box mt-1 mb-3" style="flex-direction: row;justify-content: flex-start; align-items:start; ">
                    <span>You have received
                        SAR from
                        <span id="typing-animation"  style="color: #62BFBF;"></span>
                    </span>
                </div>

                <div class="notifacation mt-1 mb-3" style="flex-direction: row;justify-content: flex-start;">
                    <div class="notafication_img_con">
                        <img src="{{URL::asset('assets/image/icons8-checklist-64 1.png')}}" alt="">
                    </div>
                    <span>Payment Completed .. Thanks for using our website</span>
                </div>
                <div class="notifacation mt-1" style="flex-direction: row;justify-content: flex-start;">
                    <div class="notafication_img_con">
                        <img src="{{URL::asset('assets/image/icons8-x-67 1.svg')}}" alt="">
                    </div>
                    <span>Payment canceled, contact with payment issuer</span>
                </div>
            </div>
        </div>
    </div>
 
</div>


@endsection
<script>
    const text = "Pending Confirmation!";
const delay = 150; // typing speed in milliseconds

function typeWriter(text, delay) {
  let i = 0;
  const typingInterval = setInterval(() => {
    document.getElementById("typing-animation").textContent += text.charAt(i);
    i++;
    if (i === text.length) {
      clearInterval(typingInterval);
      setTimeout(() => {
        document.getElementById("typing-animation").textContent = "";
        typeWriter(text, delay);
      }, 500); // pause for 0.5 second before starting again
    }
  }, delay);
}

typeWriter(text, delay);

</script>