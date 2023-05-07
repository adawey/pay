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
        <div class="logout">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">log out</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
        </div>
        <div class="notfication_icon_con">
            <div class="not_con">
                <a href="{{ route('user.notifications') }}"><img src="{{URL::asset('assets/image/icons8-notification-24 1.png')}}" alt=""></a>
            </div>
        </div>
        <span>Payment</span>
    </div>

   



    @yield('content')

    <script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/main.js')}}"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
  
    messaging.onMessage((payload) => {
         console.log('Message received. ', payload);
        //   const obj = JSON.parse(payload.notification.body);
           swal({
                    title: payload.notification.body,
                    type: 'info',
                    confirmButtonText: 'موافق',
            });
        // ...
        });
</script>

</body>

</html>