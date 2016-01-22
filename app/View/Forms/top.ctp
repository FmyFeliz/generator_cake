<table cellpadding="0" cellspacing="0">
<tr>
    <td class="imgs"><?php echo $this->Html->image (h($form['Image']['url'])); ?></td>
    <td>
        <div class="forms form">
            <?php echo $this->Form->create('Form'); ?>
            <fieldset>
                <legend><?php echo __('test'); ?></legend>
                <?php
                echo $this->Form->input('image_id',array(
                    'label' => array(
                        'text' => '画像選択'
                    )
                ));
                echo $this->Form->input('text',array('rows'=>3));
                ?>
            </fieldset>
            <?php echo $this->Form->end(__('セリフを入れる')); ?>
        </div>
    </td>
</tr>
