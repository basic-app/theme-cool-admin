<!-- modal medium -->
<div class="modal fade" id="<?= $modalId;?>" tabindex="-1" role="dialog" aria-labelledby="<?= $modalTitle;?>Label" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="<?= $modalId;?>Label"><?= $modalTitle;?></h5>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="<?= t('admin', 'Close');?>">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= $modalBody;?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= t('admin', 'Cancel');?></button>
                <?php
                /*    
                <button type="button" class="btn btn-primary"><?= t('admin', 'Confirm');?></button>
                */

                if (isset($modalFooter))
                {
                    echo $modalFooter;
                }
                elseif(isset($modalFooterAction))
                {
                    echo '<form method="POST" action="'  . $modalFooterAction . '"><button name="delete" type="submit" class="btn btn-primary">' . $modalFooterButton .'</button></form>';
                }

                ?>
            </div>
        </div>
    </div>
</div>
<!-- end modal medium -->