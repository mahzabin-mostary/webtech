"use strict"

function ajax() {
    const table = document.getElementById('appointmentTable');
    table.style.display = 'none';

    const name = document.getElementById('starttime').value;


    const xhttp = new XMLHttpRequest();

    xhttp.open('POST', 'All Patients Details.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('name=' + name);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById('result').innerHTML = this.responseText;
        }
    }
}
