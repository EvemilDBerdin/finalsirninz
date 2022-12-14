<div class="row">
    <div class="col-12">
        <div class="row page-titles mt-3">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor"><?= (!empty($data[0]['exam_type'])) ? $data[0]['exam_type'] :  "None" ?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active"><?= (!empty($data[0]['exam_type'])) ? $data[0]['exam_type'] :  "None" ?></li>
                </ol>
            </div>
            <div class="col-md-7 align-self-center text-right d-none d-md-block">
                <button type="button" class="btn btn-info" onclick="backHome()"><i class="fas fa-angle-left"></i> Back</button>
            </div>
        </div>

        <div class="card" style="width: 100%;">
            <?php $count = 0;
            foreach ($data as $key => $value) : $count += 1; ?>
                <div class="card-body">
                    <h4 class="card-title"><?= $data[$key]['question'] ?></h4>
                    <p><b> &nbsp;a. </b> <?= $data[$key]['option1'] ?></p>
                    <p><b> &nbsp;b. </b> <?= $data[$key]['option2'] ?></p>
                    <p><b> &nbsp;c. </b> <?= $data[$key]['option3'] ?></p>
                    <p><b> &nbsp;d. </b> <?= $data[$key]['option4'] ?></p>
                </div>
                <?php if ($data[$key]['user_answer'] != $data[$key]['answer']) : ?>
                    <div class="card-footer alert alert-danger">
                    <?php else : ?>
                        <div class="card-footer alert alert-success">
                        <?php endif; ?>
                        <h5>Your Answer:</h5>
                        <h5 class="card-title"><?= $data[$key]['user_answer'] ?></h5>
                        </div>
                        <div class="card-footer alert alert-success">
                            <h5>Correct Answer:</h5>
                            <h5 class="card-title"><i class="fa fa-check-circle"></i> <?= $data[$key]['answer'] ?></h5>
                        </div>
                    <?php endforeach; ?>
                    </div>
        </div>
    </div>