
var url = `${window.location}`;
var arr_url = url.split("/");

$(document).ready(() => {
  teDatatables()
})


function teDatatables() {
  $('#table_exam').DataTable({
    "processing": true, //Feature control the processing indicator.
    "serverSide": true, //Feature control DataTables' server-side processing mode.
    responsive: true, 
    "destroy": true,
    "order": [
      [0, 'asc']
    ], //Initial no order.
    "columns": [{
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
      "data": "exam_type",
      "width": "8%"
    },
    {
      "data": "all_questions",
      "width": "8%"
    },
    {
      "data": "all_correct_answer",
      "width": "8%"
    }, 
    {
      "data": "date_submitted",
      "width": "10%"
    },
    {
      "data": "is_passed",
      "width": "5%",
      "render": function (data, type, row, meta) {
        var str = '';
        if (row.is_passed == '0') {
          str += '<label class="badge badge-danger">Failed</label>';
        }
        else {
          str += '<label class="badge badge-success">Passed</label>';
        }
        return str;
      }
    },
    {
      "data": "exam.e_id",
      "width": "15%",
      "render": function (data, type, row, meta) {
        var str = '';
        str += `<button class="btn btn-sm btn-success clickBTN" onclick="viewExamResult(${row.e_id}, ${row.users_id}); event.preventDefault();">View</button>
	      <button class="btn btn-sm btn-outline-danger clickBTN" onclick="deleteConfirm(${row.e_id}); event.preventDefault();">Delete</button>`
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
      "url": dis.base_url + "exam/e_result",
      "type": "POST",
      // "data": {
      //   'id': arr_url[6] //arr_url[6] == undefined ? '' : arr_url[6]
      // },
    },
  });
}

function viewExamResult(examid, userid) {
  window.location.href = dis.base_url + 'view_aser?e_id=' + examid + '&users_id=' + userid + '&auth=Assk2j^%SFYUYG^Aiusdua87FSAdioua29389OASIDg878782ijjsd!$jidsa787875QsudS$9sdsfa'
}

function deleteConfirm(id) {
  Swal.fire({
    title: 'Do you want to delete this exam result?',
    showCancelButton: true,
    confirmButtonText: 'Save',
  }).then((result) => {
    if (result.isConfirmed) {
      let data = new FormData()
      data.append('examid', id)
      dis.sendAjax(base_url + 'exam/deleteConfirm', data).then((r) => {
        dis.teDatatables()
        if (r.response == 200) Swal.fire('Deleted!', r.message, 'success')
        else Swal.fire({ icon: 'error', title: 'Oops...', text: 'Something went wrong!' })
      })
    }
  })
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