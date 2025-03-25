<section id="stu_register">
    <div class="box">

      <form action="regstudent.php" class="formrs" method="POST">
        <img src="logo.png" alt="">
        <h1 class="form-title">Student Register</h1>

        <div class="form-group_rs">
          <input type="text" class="form-control_rs" required name="regno">
          <label for="" class="form-label">Register Number</label>
        </div>
        <div class="form-group_rs">
          <input type="text" class="form-control_rs" required name="name">
          <label for="" class="form-label">Name</label>
        </div>
        <div class="form-group_rs">
          <input type="password" class="form-control_rs" required id="txtPassword" name="password">
          <label for="" class="form-label">Enter Your Password</label>
        </div>
        <div class="form-group_rs">
          <input type="password" class="form-control_rs" required id="txtPassword" name="repassword">
          <label for="" class="form-label">Enter Your Password Again</label>
        </div>
        <div class="bottom-box">
          <button class="form-button_regstu"> Register</button>
        </div>
      </form>
    </div>
  </section>
