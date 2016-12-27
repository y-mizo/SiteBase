<?= $this->Form->create('Notice', ['novalidate' => true]); ?>

<form>
    <div class="form-group">
        <!--style="width: 50%;"-->
        <?= $this->Form->input('subject', ['label' => 'タイトル', 'class' => 'form-control']); ?> 
    </div>
    <div class="form-group">
        <!--style="width: 50%;"-->
        <?=
        $this->Form->input('category', [
            'label' => 'カテゴリ',
            'class' => 'form-control',
            'type' => 'select',
            'empty' => '選択してください',
            'options' => [
                'カテゴリ1' => 'カテゴリ1',
                'カテゴリ2' => 'カテゴリ2',
                'カテゴリ3' => 'カテゴリ3',
                'カテゴリ4' => 'カテゴリ4',
                'カテゴリ5' => 'カテゴリ5',
        ]]);
        ?>
    </div>
    <div class="form-group">
        <!--style="width: 50%;"-->
        <?= $this->Form->input('body', ['label' => '内容', 'class' => 'form-control']); ?>
    </div>
    <?php if (!empty($this->request->data)) : ?>
        <?= $this->Form->hidden('id'); ?>
    <?php endif; ?>
    <!--$this->Form->input($submitLabel, ['action'=> 'add', 'type' => 'submit', 'class' => 'btn btn-primary']);-->
    <?= $this->Form->end($submitLabel); ?>

</form>
