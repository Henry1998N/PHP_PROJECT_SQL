<?php ?>
<form action="checkreset.php" method="POST">
  <div class="row">
  <div class="col">
  <label>Current Password : </label>
      <input type="password" class="form-control" placeholder="Current Password" name="curpass">
    </div>
</br>
    <div class="col">
    <label>New Password : </label>
      <input type="password" class="form-control" placeholder="New Password" name="newpass">
    </div>
</br>    
    <div class="col">
    <label>Confirm Password : </label>
      <input type="password" class="form-control" placeholder="Confirm Password" name="confpass">
    </div>
</br>    
    <button type="submit" class="btn btn-success">Reset</button>
  </div>
</form>