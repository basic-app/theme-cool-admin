<!-- modal medium -->
<div class="modal fade" id="<?= $id;?>" tabindex="-1" role="dialog" aria-labelledby="<?= $id;?>_label" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="<?= $id;?>_label"><?= $title;?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="<?= $closeButtonLabel;?>">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= $content;?>
            </div>
            <div class="modal-footer">
                <?= $footer;?>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= $cancelButtonLabel;?></button>
            </div>
        </div>
    </div>
</div>
<!-- end modal medium -->