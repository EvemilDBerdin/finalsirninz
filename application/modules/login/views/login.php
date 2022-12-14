<section id="wrapper" style="margin-top: -30px; border: none;">
    <div class="login-box card">
        <div class="card-body rounded-5" style="background: transparent; ">

            <form class="form-horizontal form-material" id="userAuth">
                <h3 class="box-title m-b-20">Sign In</h3>
                <div class="form-group">
                        <select class="custom-select admin-student">
                            <option value="">Choose the user you want to login</option>
                            <option value="admin">Admin</option>
                            <option value="student">Student</option>
                        </select>
                    </div>
                <div class="login-box d-flex justify-content-start mb-3">
                    <!-- <div>
                        <button class="btn btn-primary" type="button" onclick="fillforAdminInput()">Admin</button>
                    </div>
                    <div>
                        <button class="btn btn-info" type="button" onclick="fillforStudentInput()">Student</button>
                    </div> -->
                    
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="d-flex justify-content-between">
                            <label for="login_username"><strong>Username </strong></label> <i class="fas fa-user"></i>
                        </div>

                        <input class="form-control" type="text" required="required" id="login_username" name="login_username" placeholder="Enter Username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 d-flex flex-column">
                        <div class="d-flex justify-content-between">
                            <label for="login_password"><strong>Password </strong></label> <i class="fas fa-eye" style="cursor: pointer;"></i>
                        </div>
                        <input class="form-control" type="password" required="required" id="login_password" name="login_password" placeholder="Enter Password">
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="col-xs-12 p-b-20">
                        <button class="btn btn-block btn-lg btn-info btn-rounded text-light" type="submit">Log In</button>
                    </div>
                </div>
            </form>
            <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">
                    Don't have an account? <button class="text-info m-l-5 btn" type="button" data-bs-toggle="modal" data-bs-target="#createAccount" data-toggle="tooltip" title="Sign up"><b>Sign Up</b></button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="createAccount" tabindex="-1" data-bs-backdrop="static" aria-labelledby="createAccountLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-bold" id="createAccountLabel">Register Account</h5>
            </div>
            <form method="POST" id="createAccountForm" data-parsley-validate>
                <div class="modal-body" style="padding: 0px 50px 0px 50px;"><br>
                    <div>
                        <label for="username">Profile Picture (optional)</label>
                        <input style="min-height: 44px;" type="file" class="form-control" name="fileInput"> <!--  required="required" -->
                    </div>
                    <div class="mt-3">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" name="firstname" required="required">
                    </div><br>
                    <div>
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" name="lastname" required="required">
                    </div><br>
                    <div>
                        <label for="date">Date of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth" required="required">
                    </div><br>
                    <div>
                        <label for="contact">Contact Number</label>
                        <input type="tel" class="form-control" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" name="contact" required="required">
                        <small>Format: 1234-567-8910</small>
                    </div><br>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" class="form-control" data-parsley-type="email" name="email" required="required">
                    </div><br>
                    <div>
                        <label for="username">Username</label>
                        <input type="text" class="form-control" data-parsley-pattern="^[a-zA-Z0-9]+$" name="username" required="required">
                    </div><br>
                    <div>
                        <label for="password">Password</label>
                        <div class="d-flex">
                            <input type="password" class="form-control" data-parsley-minlength="8" data-parsley-maxlength="22" data-parsley-pattern="[a-zA-Z0-9\pL\s\-]+$" name="password" required="required">
                            <button class="btn" type="button" id="passwordShowToggle"><i class="fas fa-eye"></i></button>
                        </div>
                    </div><br>
                    <!-- <div class="mb-3 d-flex justify-content-end mt-2">
                        <input type="checkbox" id="chck" required="required"><label for="chck" class="text-primary fst-italic text-decoration-underline">&nbspI Agree.</label>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Enroll Now</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>