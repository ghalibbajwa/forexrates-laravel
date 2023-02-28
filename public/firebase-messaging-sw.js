importScripts('https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.2.1/firebase-messaging.js');
//importScripts('js/firebase.js');


// For Firebase JS SDK v7.20.0 and later, measurementId is optional

const firebaseConfig = {

  apiKey: "AIzaSyBKi6liPtu_Jdci9L5cBX8j3e9V859FWjk",
  authDomain: "afla-1660150395527.firebaseapp.com",
  projectId: "afla-1660150395527",
  storageBucket: "afla-1660150395527.appspot.com",
  messagingSenderId: "58032527385",
  appId: "1:58032527385:web:ba36c9ffca6789a8903288"

};

firebase.initializeApp(firebaseConfig);
const messaging = firebase.messaging();


// [START on_background_message]
messaging.onBackgroundMessage(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = 'Background Message Title';
  const notificationOptions = {
    body: 'Background Message body.',
    icon: '/firebase-logo.png'
  };

  return self.registration.showNotification(notificationTitle,
    notificationOptions);
});