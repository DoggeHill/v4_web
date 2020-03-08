let constraints = { audio: true, video: { width: 1280, height: 720 } };

function getMedia() {
    navigator.mediaDevices.getUserMedia(constraints)
        .then(function (mediaStream) {
            // sem zadaj co chces urobit s outputom
        })
        .catch(function (err) {
            console.log(err.name + ": " + err.message);
        }); // always check for errors at the end.
}