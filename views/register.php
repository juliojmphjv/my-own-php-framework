<?php

?>

<h1>Contact</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="mb-3">
              <label class="form-label">First Name</label>
              <input type="text" name="firstName" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
              <label class="form-label">Last Name</label>
              <input type="text" name="lastName" class="form-control">
            </div>
        </div>
    </div>
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="text" name="email" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" name="password" class="form-control"></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Confirm Password</label>
      <input type="password" name="confirmPassword" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
