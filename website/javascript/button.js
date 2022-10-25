function button() {
    var webpage = window.open('loading.html');

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            webpage.location.href = this.responseText;
        }
    };
    xhttp.open("GET", "php/button.php", true);
    xhttp.send();
}