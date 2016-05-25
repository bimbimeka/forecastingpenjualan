<?php $row_id = "sladetail-" . $key ?>
<div class='row-fluid' id="<?php echo $row_id ?>">
    <?php
    echo $form->hiddenField($model, "[$key]id");
    echo $form->updateTypeField($model, $key, "updateType", array('key' => $key));
	
    ?>
    <div class="span3">
        <?php
        echo $form->labelEx($model, "[$key]barcode");
        echo $form->textField($model, "[$key]barcode");
        echo $form->error($model, "[$key]barcode");
        ?>
 
    </div>
 
    <div class="span3">
        <?php
        echo $form->labelEx($model, "[$key]size");
        echo $form->textField($model, "[$key]size");
        echo $form->error($model, "[$key]size");
        ?>
    </div>

    <div class="span2">
 
            <?php echo $form->deleteRowButton($row_id, $key); ?>
    </div>
</div>