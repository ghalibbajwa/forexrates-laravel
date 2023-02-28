
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

//   messaging ( app ? :  App ) : Messaging;
  const messaging = firebase.messaging();
        messaging
        
        .requestPermission()
        .then(function(){
        
            console.log("Notification Permission Granted!");
            return messaging.getToken();
        
        }).then(function(token){
            $('#device_token').val(token);
            console.log(token);

        }).catch(function(err){
            console.log("Unable to get permission to notify.",err);
        
        });
  
        // Message on Payload
messaging.onMessage((payload) => {
    console.log(payload.notification);
})