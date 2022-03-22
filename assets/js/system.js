function showGeneral() {
    document.getElementById('general').style.display = "block";
    document.getElementById('notifications').style.display = "none";
    document.getElementById('email').style.display ="none";
    document.getElementById('team-software').style.display = "none";
    document.getElementById('logo').style.display = "none"
}
function showNotifications() {
    document.getElementById('notifications').style.display = "block";
    document.getElementById('general').style.display = "none";
    document.getElementById('email').style.display ="none";
    document.getElementById('team-software').style.display = "none";
    document.getElementById('logo').style.display = "none"
}
function showEmail() {
    document.getElementById('email').style.display = "block";
    document.getElementById('team-software').style.display = "none";
    document.getElementById('notifications').style.display = "none";
    document.getElementById('general').style.display = "none";
    document.getElementById('logo').style.display = "none"
}
function showLogo() {
    document.getElementById('logo').style.display = "block";
    document.getElementById('email').style.display = "none";
    document.getElementById('team-software').style.display = "none";
    document.getElementById('notifications').style.display = "none";
    document.getElementById('general').style.display = "none";
}
function showSoftware(){
    document.getElementById('team-software').style.display = "block";
    document.getElementById('notifications').style.display = "none";
    document.getElementById('general').style.display = "none";
    document.getElementById('email').style.display = "none";
    document.getElementById('logo').style.display = "none"
}