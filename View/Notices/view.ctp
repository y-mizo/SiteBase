<h2>お知らせ詳細</h2>

<div class="table-responsive">
            <table class="table table-striped">
<!--style="width: 50%;"-->
        <tr>
            <td><strong>掲載日</strong></td>
            <td><?= h($notice['Notice']['created']); ?></td>
        </tr>
        <tr>
            <td><strong>最終更新日</strong></td>
            <td><?= h($notice['Notice']['modified']); ?></td>
        </tr>
        <tr>
            <td><strong>タイトル</strong></td>
            <td><?= $notice['Notice']['subject']; ?></td>
        </tr>
        <tr>
            <td><strong>内容</strong></td>
            <td><?= $notice['Notice']['body']; ?></td>
        </tr>

</table>
</div>