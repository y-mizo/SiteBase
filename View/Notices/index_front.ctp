<?php $this->assign('title', 'Information'); ?>

<div class="container">
    <div class="row">      
        <div class="col-sm-12">
            <h1>新着情報</h1>
            <hr style="border: 1px gray solid">
            
            <?php foreach ($notices as $notice) : ?>
                <p><?= $this->Time->format($notice['Notice']['created'], '%Y/%m/%d'); ?></p>
                <?php // echo $this->Time->format($notice['Notice']['modified'], '%Y/%m/%d'); ?>
                <?php
                // echo $this->Html->link(
//                                    $notice['Notice']['subject'],
//                                    ['action' => 'view_front', $notice['Notice']['id']]); 
                ?>
                <p style="font-size: 20px"><strong><?= $notice['Notice']['subject']; ?></strong></p>
                <p><?= nl2br($notice['Notice']['body']) ?></p><br><br>
            <?php endforeach; ?>

            <div style="text-align: center">                         
                <?= $this->element('pagination'); ?>                                        
            </div> 
        </div>
    </div>
</div>