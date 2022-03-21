<div class="d-block">
  <table class="table table-striped system-table">
    <thead class="bg--secondary">
    <tr>
      <th id="system-col">
          <a class="btn btn-primary toggle-btn" href="#" role="button" onClick="showGeneral()">General</a> 
          <a class="btn btn-primary toggle-btn" href="#" role="button" onClick="showNotifications()">Notifications</a> 
          <a class="btn btn-primary toggle-btn" href="#" role="button" onClick="showEmail()" >Email</a> 
          <a class="btn btn-primary toggle-btn" href="#" role="button" onClick="showLogo()">Logos</a> 
          <a class="btn btn-primary toggle-btn" href="#" role="button" onClick="showSoftware()">Team Software</a> 
        </th>
    </tr>
  </thead>
  <tbody>
    <tr class="system-table-body">
        <th id="general" style="display:none;">
          <?php require('general.php') ?>
        </th>
        <th id="notifications" style="display:none;">
          <?php require('notifications.php') ?>
        </th>
        <th id="email" style="display:none;">
          <?php require('email.php') ?>
        </th>
        <th id="logos" style="display:none;">
          <?php require('logos.php') ?>
        </th>
        <th id="team-software" style="display:none;">
          <?php require('team-software.php') ?>
        </th>
    </tr>
  </tbody>
</div>
<script>
function showGeneral() {
   document.getElementById('general').style.display = "block";
   document.getElementById('notifications').style.display = "none";
   document.getElementById('email').style.display ="none";
   document.getElementById('team-software').style.display = "none";
   document.getElementById('logos').style.display = "none"
}
function showNotifications() {
   document.getElementById('notifications').style.display = "block";
   document.getElementById('general').style.display = "none";
   document.getElementById('email').style.display ="none";
   document.getElementById('team-software').style.display = "none";
   document.getElementById('logos').style.display = "none"
}
function showEmail() {
   document.getElementById('email').style.display = "block";
   document.getElementById('team-software').style.display = "none";
   document.getElementById('notifications').style.display = "none";
   document.getElementById('general').style.display = "none";
   document.getElementById('logos').style.display = "none"
}
function showLogo() {
   document.getElementById('logos').style.display = "block";
   document.getElementById('team-software').style.display = "none";
   document.getElementById('notifications').style.display = "none";
   document.getElementById('email').style.display ="none";
   document.getElementById('general').style.display = "none";
}
function showSoftware() {
   document.getElementById('team-software').style.display = "block";
   document.getElementById('notifications').style.display = "none";
   document.getElementById('email').style.display ="none";
   document.getElementById('general').style.display = "none";
   document.getElementById('logos').style.display = "none";
   
}

</script>