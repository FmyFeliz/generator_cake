<table cellpadding="0" cellspacing="0">
    <tr>
        <td class="imgs">
            <?php
                $url = 'http://july.co.jp/komei/index.php?c=';
            echo $this->Html->image ($url);

            ?>
        </td>
        <td>
            <?php
                $data = file_get_contents($url);
            ?>
        </td>
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
                    echo $this->Form->input('text',array(
                        'rows' => 3,
                            'label' => array(
                                'text' => 'セリフ(20文字までです)'
                        ))
                    );

                    $text = $this->request->date('text');
                    if($text != null){
                        if($text>10) {
                            $url_text = $url . mb_substr($text , 0, 10) . "\n" . mb_substr($text , 11, 20) . ".png";
                            $this->Form->input('create_img_url', $url_text);
                        }
                    }
                    ?>
                </fieldset>
                <?php
                echo $this->Form->end(__('セリフを入れる'));
                ?>
            </div>
        </td>
    </tr>
</table>
