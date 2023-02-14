<form class="card" style="margin:auto; padding:20px;" method="POST" action="success.php">
   <div class="row">
      <div class="col">
         <label for="firstName" class="form-label">First Name</label>
         <input type="text" id="firstName" class="form-control" aria-label="First name" name="firstName">
      </div>
      <div class="col">
         <label for="lastName" class="form-label">Last Name</label>
         <input type="text" class="form-control" id="lastName" aria-label="Last name" name="lastName">
      </div>
   </div>
   <div class="row">
      <div class="col">
         <label for="dob" class="form-label">DOB</label>
         <input type="date" class="form-control" id="dob" aria-label="DOB" name="dob">
      </div>
      <div class="col">
         <label for="speciality" class="form-label">Area of experitse</label>
         <select class="form-control" id="speciality" class="form-select" name="speciality">
            <option selected>Choose...</option>
            <option>Database Admin</option>
            <option>Software Developer</option>
            <option>Web Administrator</option>
            <option>Other</option>
         </select>
      </div>
   </div>
   <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
   </div>
   <div class="mb-3">
      <label for="phone" class="form-label">Contact Number</label>
      <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
      <div id="phoneHelp" class="form-text">We'll never share your contact no. with anyone else.</div>
   </div>
   <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
   </div>
   <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>