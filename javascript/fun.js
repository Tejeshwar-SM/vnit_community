function click_but(params) {
    document.getElementById('filec').click();
}

function load_img() {
    var im = document.getElementById('filec');
    document.getElementById('image').src = URL.createObjectURL(im.files[0]);
}