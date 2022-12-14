<div class="row">
    <div class="col-12">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Student Exam Results</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url(); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="<?= base_url('exam'); ?>">Exam Result</a></li> 
                </ol>
            </div>
        </div>
        <div class="table-responsive container-fluid" style="background: white;">
            <table id="table_exam" class="table rounded-3 table-hover contact-list m-t-30 w-100">
                <thead>
                    <tr class="footable-header">
                        <th style="display: table-cell;">First Name</th>
                        <th style="display: table-cell;">Last Name</th>
                        <th style="display: table-cell;">Email</th>
                        <th style="display: table-cell;">Exam Title</th>
                        <th style="display: table-cell;">Items</th>
                        <th style="display: table-cell;">Score</th> 
                        <th style="display: table-cell;">Date</th>
                        <th style="display: table-cell;">Type</th>
                        <th style="display: table-cell;">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>