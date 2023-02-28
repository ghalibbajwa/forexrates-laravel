import Echo from 'laravel-echo';

   
// if (process.client) {
//     window.io = require('socket.io-client')
// //   }
//   window.io = require('socket.io-client');
// const socket = io('https://127.0.0.1:6001');

// socket.on('connect', () => {
//     socket.emit('announcelott', {"hgkjghkjhg":"jhhgkhgk"});
// });
  
var echo = window.Echo = new Echo({

    broadcaster: 'socket.io',

    host: window.location.hostname + ":" + window.laravel_echo_port

});
