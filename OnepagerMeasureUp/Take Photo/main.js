let canvas = document.querySelector("#canvas");
let dataurl = document.querySelector("#dataurl");
let dataurl_container = document.querySelector("#dataurl-container");

// open camera // 
var video = document.querySelector("#videoElement");

if (navigator.mediaDevices.getUserMedia) {
    navigator.mediaDevices.getUserMedia({
            video: true
        })
        .then(function(stream) {
            video.srcObject = stream;
        })
        .catch(function(err0r) {
            console.log("Something went wrong!");
        });
}

// Telt van 7 seconde af naar 0 //
$("#click-photo").click(function() {
    var tenSeconds = 7;
    display = document.querySelector('#time');
    startTimer(tenSeconds, display);
});

function startTimer(duration, display) {
    var timer = duration,seconds;
    var intervalFn = function test() {
        seconds = parseInt(timer % 60, 10);
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.textContent = seconds;
        if (--timer < 0) {
            timer = 0;
        }

    };

    setInterval(intervalFn, 1000);
    intervalFn();
}

let timeoutID;

function delayedMessage() {
    timeoutID = setTimeout(test, 7000);
}

// takes picture// setTimeout(... , 10000);

let click_button = document.querySelector("#click-photo");
let click_reaload = document.querySelector("#click-reload");
let submit = document.querySelector("#submit");
let submit2 = document.querySelector("#submit2");

// don't show canvas, button before taking picture
canvas.style.display = 'none';
click_reaload.style.display = 'none';

click_button.addEventListener("click", () => {
    setTimeout(() => {
        let stream = null;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
        let image_data_url = canvas.toDataURL('image/jpeg');

        // don't show video and person after taking picture
        videoElement.style.display = 'none';
        person.style.display = 'none';
        // show canvas after taking picture
        canvas.style.display = 'inline';
        click_reaload.style.display = 'inline';
        click_button.style.display = 'none';
        submit2.style.display = 'inline';
        submit.style.display = 'none';

        // plays audio  // 
        var audio = new Audio('https://www.soundjay.com/mechanical/sounds/camera-shutter-click-03.mp3');
        audio.play();
    }, 7 * 1000);

    // timout notify 7 sec //
    setTimeout(() => {
        notify.render({
            style: "success",
            head: "Success!",
            content: "De foto is genomen"
        });
    }, 7 * 1000);

});

// Preview image // 
var file = document.getElementById('file');
var preview = document.getElementById('preview');
file.addEventListener('change', function() {
    preview.src = URL.createObjectURL(this.files[0]);

}, false);


// send image to local folder

//////////////////////////////////////////////////////// Down here is the JS code //////////////////////////////////////////////////////////////
// upload photo and send to server //
submit.addEventListener('click', function() {
    // user has not chosen any file
    if (document.querySelector('#file').files.length == 0) {
        alert('Error : No file selected');
        return;
    }

    // first file that was chosen
    let file = document.querySelector('#file').files[0];

    // allowed types
    let allowed_mime_types = ['image/jpeg', 'image/png'];

    // allowed max size in MB
    let allowed_size_mb = 2;

    // validate file type
    if (allowed_mime_types.indexOf(file.type) == -1) {
        alert('Error : Incorrect file type');
        return;
    }
    // validate file size
    if (file.size > allowed_size_mb * 1024 * 1024) {
        alert('Error : Exceeded size');
        return;
    }

    // validation is successful
    //alert('You have chosen the file ' + file.name);

    // upload file now
    let data = new FormData();
    // file selected by the user
    // in case of multiple files append each of them
    data.append('file', document.querySelector('#file').files[0]);
    let request = new XMLHttpRequest();
    request.open('POST', 'upload.php');
    // upload progress event
    request.upload.addEventListener('progress', function(e) {
        let percent_complete = (e.loaded / e.total) * 100;
        // percentage of upload completed
        console.log(percent_complete);
    });
    // AJAX request finished event
    request.addEventListener('load', function(e) {
        // HTTP status message
        console.log(request.status);
        // request.response will hold the response from the server
        console.log(request.response);
        $("#result").text(request.response);
    });
    // send POST request to server side script
    request.send(data);

});


submit2.addEventListener('click', function() {
    function canvasToImg() {
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");
        //draw a red box
        ctx.fillStyle = "#FF0000";
        ctx.fillRect(10, 10, 30, 30);
        var url = canvas.toDataURL();
        return url;
    }

    var url = canvasToImg(); //execute the function
    // alert(url);
    // upload file now
    let data = new FormData();
    // file selected by the user
    // in case of multiple files append each of them
    data.append('file', url);
    let request = new XMLHttpRequest();
    request.open('POST', 'upload2.php');
    // upload progress event
    request.upload.addEventListener('progress', function(e) {
        let percent_complete = (e.loaded / e.total) * 100;
        // percentage of upload completed
        console.log(percent_complete);
    });

    // AJAX request finished event
    request.addEventListener('load', function(e) {
        // HTTP status message
        console.log(request.status);
        // request.response will hold the response from the server
        console.log(request.response);
        $("#result").text(request.response);
    });
    // send POST request to server side script
    request.send(data);

});