<?php ?>
<form action="checkManagerReset.php" method="POST">
  <div class="row">
  <div class="col">
  <label>Current Password : </label>
      <input type="password" class="form-control" placeholder="Current Password" name="curpass1">
    </div>
</br>
    <div class="col">
    <label>New Password : </label>
      <input type="password" class="form-control" placeholder="New Password" name="newpass1">
    </div>
</br>    
    <div class="col">
    <label>Confirm Password : </label>
      <input type="password" class="form-control" placeholder="Confirm Password" name="confpass1">
    </div>
</br>    
    <button type="submit" class="btn btn-success">Reset</button>
  </div>
</form>