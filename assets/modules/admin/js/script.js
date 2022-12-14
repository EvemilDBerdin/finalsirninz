$(document).ready(() => {
  // this.table_admin() 
  let str = ''
  
  sendAjax(base_url + "admin/getAll").then((res) => { 
    $.each(res, (r, e) => { 
      if(e.user_status == 0){
        str += `<div class="col-md-12 col-lg-12 col-xlg-4">
                <div class="card card-body">
                <div class="row">
                  <div class="col-md-4 col-lg-3 text-center">
                                    <a href="javascript:void(0)"><img src="${base_url + 'assets/uploads/' + e.user_image}" alt="user" class="img-circle img-responsive" style="width: 110px;
                                    height: 110px;
                                    object-fit: cover;
                                    max-width: 110px;
                                    object-fit: cover;"/></a>
                                </div>
                      <div class="col-md-8 col-lg-9">
                          <h3 class="box-title m-b-0">${e.firstname} ${e.lastname}</h3> <small>${e.email}</small>
                          <address>
                              Username: ${e.username}
                              <br />
                              Status: ${e.user_status == 1 ? '<label class="badge badge-secondary">Deactivated</label>' : '<label class="badge badge-success">Activated</label>'}
                              <br />
                              <br />
                              <abbr title="Phone">Contact:</abbr> ${e.contact}
                          </address>
                      </div>
                  </div>
                </div>
              </div>`
      }
    })
    $.each(res, (r, e) => { 
      if(e.user_status == 1){
        str += `<div class="col-md-12 col-lg-12 col-xlg-4">
                <div class="card card-body">
                <div class="row">
                  <div class="col-md-4 col-lg-3 text-center">
                                    <a href="javascript:void(0)"><img src="${base_url + 'assets/uploads/' + e.user_image}" alt="user" class="img-circle img-responsive" style="width: 110px;
                                    height: 110px;
                                    object-fit: cover;
                                    max-width: 110px;
                                    object-fit: cover;"/></a>
                                </div>
                      <div class="col-md-8 col-lg-9">
                          <h3 class="box-title m-b-0">${e.firstname} ${e.lastname}</h3> <small>${e.email}</small>
                          <address>
                              Username: ${e.username}
                              <br />
                              Status: ${e.user_status == 1 ? '<label class="badge badge-secondary">Deactivated</label>' : '<label class="badge badge-success">Activated</label>'}
                              <br />
                              <br />
                              <abbr title="Phone">Contact:</abbr> ${e.contact}
                          </address>
                      </div>
                  </div>
                </div>
              </div>`
      }
    })
    $('#contactAdmin').html(str)
  })
})

function table_admin() {
  $('#table_admin').DataTable({
    "processing": true, //Feature control the processing indicator.
    "serverSide": true, //Feature control DataTables' server-side processing mode.
    "responsive": true,
    "destroy": true,
    "order": [
      [0, 'asc']
    ], //Initial no order.
    "columns": [
    {
      "data": "firstname",
      "width": "15%"
    },
    {
      "data": "lastname",
      "width": "15%"
    },
    {
      "data": "age",
      "width": "5%"
    },
    {
      "data": "contact",
      "width": "5%"
    },
    {
      "data": "email",
      "width": "15%"
    },
    {
      "data": "username",
      "width": "15%"
    },
    {
      "data": "user_image",
      "width": "15%"
    },
    {
      "data": "user_status",
      "width": "20%",
      "render": function (data, type, row, meta) {
        var str = '';
        var status = row.user_status
        if (status == '1') {
          str += '<label class="badge badge-secondary">Disabled</label>';
        } else {
          str += '<label class="badge badge-success">Enabled</label>';
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
      "url": dis.base_url + "admin/getAllStudent",
      "type": "POST",
    },
  });
}
function sendAjax(url, data = {}) {
  var promise = new Promise(function (resolve, reject) {
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