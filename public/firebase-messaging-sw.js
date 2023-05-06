importScripts("https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js");
importScripts("https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js");

firebase.initializeApp({
    apiKey: "AIzaSyDu0iBYmw-lKaMCqHqx6nI6z6uv9KTWVMc",
    projectId: "payy-b7a60",
    messagingSenderId: "210432470902",
    appId: "1:210432470902:web:644c000a6f28e89753d457",
});

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function ({
    data: { title, body, icon },
}) {
    return self.registration.showNotification(title, { body, icon });
});
