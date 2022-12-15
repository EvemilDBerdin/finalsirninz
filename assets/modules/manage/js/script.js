$(document).ready(() => {
    dis.tmDatatables()
    // Password Show/Hide Toggle
    $('#nmanagePasswordShowToggle').click(() => {
        if ($('#editManageModalForm').find('input[name="password"]').attr('type') === "password") {
            $(this).find('input[name="password"]').attr('type', 'text')
            $(this).find('button#nmanagePasswordShowToggle').css('color', 'green')
        }
        else if ($('#editManageModalForm').find('input[name="password"]').attr('type') === "text") {
            $(this).find('input[name="password"]').attr('type', 'password')
            $(this).find('button#nmanagePasswordShowToggle').css('color', 'black')
        }
    })
    $('#cmanagePasswordShowToggle').click(() => {
        if ($('#editManageModalForm').find('input[name="cpassword"]').attr('type') === "password") {
            $(this).find('input[name="cpassword"]').attr('type', 'text')
            $(this).find('button#cmanagePasswordShowToggle').css('color', 'green')
        }
        else if ($('#editManageModalForm').find('input[name="cpassword"]').attr('type') === "text") {
            $(this).find('input[name="cpassword"]').attr('type', 'password')
            $(this).find('button#cmanagePasswordShowToggle').css('color', 'black')
        }
    })

    if ($('#editManageModalForm').find('input[name="password"]').val() != '') {
        console.log('password have value')
        $('#editManageModalForm').find('input[name="cpassword"]').attr('required', 'required')
    }

    $('#addManageModalForm').submit((e) => {
        e.preventDefault()
        let data = new FormData(e.currentTarget) 
        sendAjax(base_url + 'manage/addManageModalForm', data).then((res) => {
            console.log(res)
            if (res.response == 200) {
                Swal.fire({ position: 'top-center', icon: 'success', title: res.message, showConfirmButton: false, timer: 1500 }).then(() => {
                    dis.tmDatatables()
                    $('#editManageModal').modal('hide')
                })
            }
            else {
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: res.message,
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        })
    })
})

function tmDatatables() {
    $('#table_manage').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "responsive": true,
        "destroy": true,
        "order": [
            [0, 'asc']
        ], //Initial no order.
        "columns": [
            {
                "data": "user_image",
                "width": "10%",
                "render": (data, type, row, meta) => {
                    return `<img src="${base_url}/assets/uploads/${row.user_image}" alt="homepage" class="img-circle img-responsive" style="background-repeat: no-repeat; object-fit: cover; width: 50px; height: 50px; max-width: 110px;"/>`
                }
            },
            {
                "data": "firstname",
                "width": "12%"
            },
            {
                "data": "lastname",
                "width": "12%"
            },
            {
                "data": "email",
                "width": "18%"
            },
            {
                "data": "contact",
                "width": "10%"
            },
            {
                "data": "username",
                "width": "10%"
            },
            {
                "data": "user_status",
                "width": "5%",
                "render": function (data, type, row, meta) {
                    let str = '';
                    let status = row.user_status
                    if (status == '1') {
                        str += '<label class="badge badge-secondary">Deactivated</label>';
                    } else {
                        str += '<label class="badge badge-success">Activated</label>';
                    }
                    return str;
                }
            },

            {
                "data": "id",
                "width": "20%",
                "render": function (data, type, row, meta) {
                    let str = '';
                    if (row.user_status == '1') {
                        str += `<button class="btn btn-sm btn-success clickBTN" onclick="restoreStudent(${row.users_id}); event.preventDefault();"><i class="fas fa-trash-restore"></i> Restore</button>
                    <button class="btn btn-sm btn-danger clickBTN" onclick="deleteFromDataBase(${row.users_id}); event.preventDefault();"><i class="fa fa-trash" aria-hidden="true"></i>
                    </i> Delete</button>`;
                    }
                    else if(row.user_status == '2'){
                        str += `<button class="btn btn-sm btn-warning clickBTN" onclick="unlockManageModal(${row.users_id})"><i class="fas fa-edit"></i>Unlock</button>`;
                    }
                    else {
                        str += `<button class="btn btn-sm btn-outline-primary clickBTN" onclick="editManageModal(${row.users_id})"><i class="fas fa-edit"></i> Edit</button> 
                        <button class="btn btn-sm btn-outline-danger clickBTN" onclick="deleteConfirm(${row.users_id}); event.preventDefault();"><i class="fa-solid fa-trash"></i> Deactivate</button>`;
                    }
                    return str;
                }
            },
        ],
        "language": {
            "search": '',
            "searchPlaceholder": "Search keyword...",
            "infoFiltered": ""
        },
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": base_url + "admin/getAllStudent",
            "type": "POST",
        },
    });
}

function editManageModal(id) {
    // let temp_password = ''
    let temp_email = ''
    let data = new FormData();
    data.append('users_id', id)
    sendAjax(base_url + 'manage/getStudentById', data).then((res) => {
        $('input[name="firstname"]').val(res[0].firstname)
        $('input[name="lastname"]').val(res[0].lastname)
        $('input[name="age"]').val(res[0].age)
        $('input[name="contact"]').val(res[0].contact)
        $('input[name="email"]').val(res[0].email)
        $('input[name="username"]').val(res[0].username)
        // temp_password = res[0].password
        temp_email = res[0].email
    })
    $('#editManageModal').modal('show')
    $('#editManageModalForm').submit((e) => {
        e.preventDefault()
        let data = new FormData(e.currentTarget)
        data.append('users_id', id)
        console.log(data)
        // if ($('input[name="password"]').val() === temp_password) {
        if ($('input[name="email"]').val() === temp_email)
            sendAjax(base_url + 'manage/editStudentAdminForm', data).then((res) => {
                if (res.response == 200) {
                    Swal.fire({ position: 'top-center', icon: 'success', title: res.message, showConfirmButton: false, timer: 1500 }).then(() => {
                        dis.tmDatatables()
                        $('#editManageModal').modal('hide')
                    })
                }
                else {
                    Swal.fire({
                        position: 'top-center',
                        icon: 'error',
                        title: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })
        else {
            Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: 'email',
                showConfirmButton: false,
                timer: 1500
            })
        }
    })
}
function restoreStudent(id) {
    Swal.fire({
        title: 'Do you want to restore this student?',
        showCancelButton: true,
        confirmButtonText: 'Confirm',
    }).then((result) => {
        if (result.isConfirmed) {
            let data = new FormData()
            data.append('users_id', id)
            dis.sendAjax(base_url + 'manage/restoreStudent', data).then((r) => {
                dis.tmDatatables()
                if (r.response == 200) Swal.fire('Restored!', r.message, 'success')
                else Swal.fire({ icon: 'error', title: 'Oops...', text: 'Something went wrong!' })
            })
        }
    })
}
function deleteConfirm(id) {
    Swal.fire({
        title: 'Are you sure you want to deactivate this student?',
        text: 'Students will be unable to log in once you deactivate it!',
        showCancelButton: true,
        confirmButtonText: 'Save',
    }).then((result) => {
        if (result.isConfirmed) {
            let data = new FormData()
            data.append('users_id', id)
            dis.sendAjax(base_url + 'manage/delete_student', data).then((r) => {
                dis.tmDatatables()
                if (r.response == 200) Swal.fire('Disabled!', r.message, 'success')
                else Swal.fire({ icon: 'error', title: 'Oops...', text: 'Something went wrong!' })
            })
        }
    })
}
function deleteFromDataBase(id) {
    Swal.fire({
        title: 'Are you sure you want to delete this student?',
        text: 'You will not be able to undo this!',
        showCancelButton: true,
        confirmButtonText: 'Confirm',
    }).then((result) => {
        if (result.isConfirmed) {
            let data = new FormData()
            data.append('users_id', id)
            dis.sendAjax(base_url + 'manage/deleteFromDataBase', data).then((r) => {
                dis.tmDatatables()
                if (r.response == 200) Swal.fire('Deleted!', r.message, 'success')
                else Swal.fire({ icon: 'error', title: 'Oops...', text: 'Something went wrong!' })
            })
        }
    })
}
function unlockManageModal(id){
    Swal.fire({
        title: 'Are you sure you want to unlock this student?',
        text: 'Students will be unable to log in once you unlock it!',
        showCancelButton: true,
        confirmButtonText: 'Confirm',
    }).then((result) => {
        if (result.isConfirmed) {
            let data = new FormData()
            data.append('users_id', id)
            dis.sendAjax(base_url + 'manage/unlockFromDataBase', data).then((r) => {
                dis.tmDatatables()
                if (r.response == 200) Swal.fire('Student Unlock!', r.message, 'success')
                else Swal.fire({ icon: 'error', title: 'Oops...', text: 'Something went wrong!' })
            })
        }
    })
}
function sendAjax(url, data = {}) {
    let promise = new Promise(function (resolve, reject) {
        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            dataType: 'json',
            async: false,
            processData: false,
            contentType: false,
            beforeSend: function () { },
            success: function (data) {
                resolve(data)
            },
            error: function (xhr) {

            },
        });
    });

    return promise;
}