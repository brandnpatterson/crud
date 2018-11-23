<?php require './app/signup.php'; ?>
<h1>Sign Up</h1>
<form method="post" action="">
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input class="form-control" type="text" name="firstname" id="firstname" placeholder="First Name" required="required" />
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Last Name" required="required" />
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" id="email" placeholder="Email" required="required" />
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input class="form-control" type="text" name="age" id="age" placeholder="Age" required="required" />
    </div>
    <div class="form-group">
        <label for="location">Location</label>
        <input class="form-control" type="text" name="location" id="location" placeholder="Location" />
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="form-control btn btn-primary">Submit</button>
    </div>
</form>
