const { default: axios } = require('axios');
// const e = require('express');

require('./bootstrap');

const messages = document.getElementById('messages');
const username = document.getElementById('username');
const message = document.getElementById('message');
const message_form = document.getElementById('message_form');

message_form.addEventListener('submit', function(e){
    e.preventDefault();

    let has_errors = false;

    if(username.value == ""){
        alert('Username is required');
        has_errors = true;
    }

    if(message.value == ""){
        alert('Message is required');
        has_errors = true;
    }

    if(has_errors){
        return;
    }

    const options = {
        method: 'POST',
        url: '/send-message',
        data: {
            username: username.value,
            message: message.value
        },
        transformResponse: [(data) => {
            return data;
        }]
    }

    axios(options);

});

window.Echo.channel('chat')
    .listen('.message', (e) => {
        console.log(e);
        messages.innerHTML += `<div><strong>${e.username}</strong>: ${e.message}</div>`;
    });
