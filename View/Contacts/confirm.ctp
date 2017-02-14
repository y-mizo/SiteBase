<?php $this->assign('title', 'confirm'); ?>
    
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h1 style="text-align: center">入力内容確認</h1>
            <hr style="border: 1px gray solid">
            <?php echo $this->Form->create('Contact'); ?>
            <div class="table-responsive">
                <table class="table">
                    <tr class="active">
                        <td class="text-right"  style="width: 30%">お名前：</td>
                        <td><?php echo h($data['Contact']['name']); ?></td>
                    </tr>
                    <tr class="active">
                        <td class="text-right">メールアドレス：</td>
                        <td><?php echo h($data['Contact']['email']); ?></td>
                    </tr>
                    <tr  class="active">
                        <td class="text-right">お問い合わせ内容：</td>
                        <td><?php echo nl2br(h($data['Contact']['body'])); ?></td>
                    </tr>
                </table>
            </div><br>
            <ul class="list-inline text-center">
                <li><?php echo $this->Html->link('戻る', ['controller' => 'contacts', 'action' => 'contact']); ?></li>
                <li><?= $this->Form->input('送信する', ['action' => 'complete', 'type' => 'submit', 'class' => 'btn btn-primary', 'label' => false]); ?></li>
            </ul>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>