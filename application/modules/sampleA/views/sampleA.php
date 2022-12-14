
<div id="main-content" class="page-wrapper" >
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="onlineActivity">Online Exam</a></li>
                    <li class="breadcrumb-item active">Sample A</li>
                </ol>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <form id="sampleAform" method="post">

            <tbody>
                    <?php if(isset($_SESSION['exam_id'])) {?>
                        <input type="hidden" name="exam_id" value="<?php echo $_SESSION['exam_id']; ?>">
                    <?php }?>
                    <tbody>
                        <?php 
                            $i = 0;
                            $count = 0;
                            foreach ($information as $row1) {
                                $count += 1;

                                ?>
                                
                            <tr>  
                                <input type="hidden" name="temp_user_id" value="<?php echo $_SESSION['userdata']->users_id?> ">
                                <input type="hidden" name="temp_id[]" value="<?php echo $row1->q_id ?>">
                                <td style="display: flow-root;"> <?php echo $row1->question; ?> </td>
                                <td style="display: flow-root;">
                                    <input type="radio" name="userans[option<?= $i ?>]"  value="<?php echo $row1->option1 ?>" required>  <?php echo $row1->option1 ?><br>
                                    <input type="radio" name="userans[option<?= $i ?>]"  value="<?php echo $row1->option2 ?>" required>  <?php echo $row1->option2 ?><br>
                                    <input type="radio" name="userans[option<?= $i ?>]"  value="<?php echo $row1->option3 ?>" required>  <?php echo $row1->option3 ?><br>
                                    <input type="radio" name="userans[option<?= $i ?>]"  value="<?php echo $row1->option4 ?>" required>  <?php echo $row1->option4 ?><br><br>
                                </td>
                            </tr>
                           <?php $i++ ?>
                        <?php } ?>
            </tbody>
        </table>
        <button type="submit" id="submitanswer"  class="btn btn-success">Submit</button>  
        </form>  
    </div>
</div>
