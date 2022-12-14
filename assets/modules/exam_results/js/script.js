
$(document).ready(() => {
  this.teDatatables()
})


function teDatatables() {
  $('#examination').DataTable({
    "processing": true, //Feature control the processing indicator.
    "serverSide": true, //Feature control DataTables' server-side processing mode.
    "responsive": true,
    "destroy": true,
    "order": [
      [6, 'desc']
    ], //Initial no order.
    "columns": [
    {
      "data": "exam_type",
      "width": "15%"
    }, 
    {
      "data": "all_questions",
      "width": "15%"
    },
    {
      "data": "all_correct_answer",
      "width": "15%"
    },
    {
      "data": "is_passed",
      "width": "15%",
      "render": function (data, type, row, meta) {
        var str = '';
        if(row.is_passed == '0'){
          str += '<label class="badge badge-danger">Failed</label>';
        }
        else{
          str += '<label class="badge badge-success">Passed</label>';
        }
        return str;
      }
    },
    {
      "data": "duration",
      "width": "20%"
    },
    {
      "data": "date_submitted",
      "width": "17%",
      
    },
    
    {
      "data": "e_id" ,
        visible: false,
    },
    ],
    "language": {
      "search": '',
      "searchPlaceholder": "Search keyword...",
      "infoFiltered": ""
    },
    // Load data for the table's content from an Ajax source
    "ajax": {
      "url": dis.base_url+ 'exam_results/ve_result',
      "type": "POST",
      
    },
  });

}
