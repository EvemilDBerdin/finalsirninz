<div class="row">
    <div class="col-12">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Registered Student</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url(); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="<?= base_url('manage'); ?>">Manage Student</a>
                    </li>
                </ol>
            </div>

        </div>
        <div class="table-responsive container-fluid" style="background: white; padding-left: 20px; padding-right: 20px; border-radius: 7px;">
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addnewStudent">Add New Student</button>
            </div>
            <table id="table_manage" class="table m-t-30 table-hover contact-list display responsive nowrap" style="width:100%">
                <thead>
                    <tr class="footable-header">
                        <th style="display: table-cell;">Image</th>
                        <th style="display: table-cell;">First Name</th>
                        <th style="display: table-cell;">Last Name</th>
                        <th style="display: table-cell;">Email</th>
                        <th style="display: table-cell;">Contact</th>
                        <th style="display: table-cell;">Username</th>
                        <th style="display: table-cell;">Status</th>
                        <th style="display: table-cell;">Action</th>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="modal fade" id="editManageModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="editManageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form method="POST" id="editManageModalForm" data-parsley-validate>
                        <div class="modal-header d-flex">
                            <div>
                                <h5 class="modal-title font-bold" id="editManageModalLabel">Edit Student Data</h5>
                            </div>
                        </div>
                        <div class="modal-body" style="padding: 0px 50px 0px 50px;"><br>
                            <div>
                                <label for="username">Profile Picture</label>
                                <input style="min-height: 44px;" type="file" class="form-control" name="fileInput">
                            </div>
                            <div class="mt-3">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" name="firstname">
                            </div><br>
                            <div>
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" name="lastname">
                            </div><br>
                            <div>
                                <label for="date">Date of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth">
                            </div><br>
                            <div>
                                <label for="contact">Contact Number</label>
                                <input type="tel" class="form-control" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" name="contact">
                                <small>Format: 1234-567-8910</small>
                            </div><br>
                            <div>
                                <label for="email">Email</label>
                                <input type="text" class="form-control" data-parsley-type="email" name="email">
                            </div><br>
                            <div>
                                <label for="username">Username</label>
                                <input type="text" class="form-control" data-parsley-pattern="^[a-zA-Z0-9]+$" name="username">
                            </div><br>
                            <div>
                                <label for="password">New Password</label>
                                <input type="password" class="form-control" data-parsley-minlength="8" data-parsley-maxlength="22" name="password">
                            </div><br>
                            <div>
                                <label for="password">Confirm Password</label>
                                <input type="password" class="form-control" data-parsley-minlength="8" data-parsley-maxlength="22" name="cpassword">
                            </div><br>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="addnewStudent" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addnewStudentLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" id="addManageModalForm" data-parsley-validate>
                        <div class="modal-header">
                            <h5 class="modal-title" id="addnewStudentLabel">Add New Student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <label for="username">Profile Picture</label>
                                <input style="min-height: 44px;" type="file" class="form-control" name="fileInput">
                            </div>
                            <div class="mt-3">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" name="firstname">
                            </div><br>
                            <div>
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" name="lastname">
                            </div><br>
                            <div>
                                <label for="date">Date of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth">
                            </div><br>
                            <div>
                                <label for="contact">Contact Number</label>
                                <input type="tel" class="form-control" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" name="contact">
                                <small>Format: 1234-567-8910</small>
                            </div><br>
                            <div>
                                <label for="email">Email</label>
                                <input type="text" class="form-control" data-parsley-type="email" name="email">
                            </div><br>
                            <div>
                                <label for="username">Username</label>
                                <input type="text" class="form-control" data-parsley-pattern="^[a-zA-Z0-9]+$" name="username">
                            </div><br>
                            <div>
                                <label for="password">New Password</label>
                                <input type="password" class="form-control" data-parsley-minlength="8" data-parsley-maxlength="22" name="password">
                            </div><br>
                            <div>
                                <label for="password">Confirm Password</label>
                                <input type="password" class="form-control" data-parsley-minlength="8" data-parsley-maxlength="22" name="cpassword">
                            </div><br>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>