<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'PaySpace') }}</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
</head>

<body>
    <div class="popup_windows" id="sucsses">
        <div class="popup_massage">
            <div class="popup_img_con">
                <img src="{{URL::asset('assets/image/icons8-check-mark-button-48 2.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="payment_top">
        {{-- <div class="logout">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">log out</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
        </div> --}}
   
        <div class="notfication_icon_con ">
            <li class="nav-item dropdown" style="list-style:none">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px;
                color: white;
                margin-top: 20px;">
                 {{ Auth::user()->f_name  }}  {{ Auth::user()->l_name  }} 
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('myPayment')}}">My Payment</a></li>
                  <li><a class="dropdown-item" href="{{ route('user.notifications')}}"> Notification <img src="{{URL::asset('assets/image/icons8-notification-24 1.png')}}" alt=""></a></li>
                  <li><a class="dropdown-item"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit(); " href="{{ route('logout') }}"> Log out  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg></a></li>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
                </ul>
              </li>
        </div>
        <span>Payment</span>
        <span style="text-align: right;
        position: absolute;
        right: 17px;
        top: 14px;
        font-size: 50px;
        
        ">
        <a class="dropdown-item" href="{{ route('home')}}">  
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
        </svg>
        </a>
</span>
    </div>

 


    @yield('content')

    <script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/main.js')}}"></script>
    <script src="{{URL::asset('assets/js/sweetalert2@11.js')}}"></script>
    <script src="{{URL::asset('assets/js/sweetalert2.all.js')}}"></script>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js"></script>


<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyDu0iBYmw-lKaMCqHqx6nI6z6uv9KTWVMc",
        authDomain: "payy-b7a60.firebaseapp.com",
        projectId: "payy-b7a60",
        storageBucket: "payy-b7a60.appspot.com",
    messagingSenderId: "210432470902",
    appId: "1:210432470902:web:644c000a6f28e89753d457"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    const messaging = firebase.messaging();

    function initFirebaseMessagingRegistration() {
        messaging.requestPermission().then(function () {
            return messaging.getToken()
        }).then(function(token) {

            axios.post("{{ route('fcmToken') }}",{
                _method:"PATCH",
                token
            }).then(({data})=>{
                console.log(data)
            }).catch(({response:{data}})=>{
                console.error(data)
            })

        }).catch(function (err) {
            console.log(`Token Error :: ${err}`);
        });
    }

    

    initFirebaseMessagingRegistration();
    var audio = new Audio("{{URL::asset('assets/noti.wav')}}");
    messaging.onMessage((payload) => {
         console.log('Message received. ', payload);
            audio.play();
            swal({
                    title: payload.notification.body,
                    type: 'info',
                    confirmButtonText: 'موافق',
            });
        });
</script>
</body>

</html>