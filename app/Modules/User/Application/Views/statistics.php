<?php
/**
 * @var View $this
 * @var array $data
 */

use CodeIgniter\View\View;

$this->extend('layouts/main');
?>

<?php $this->section('content'); ?>
    <div class="d-flex justify-content-center">
        <?php foreach ($data as $key => $percentage) : ?>
            <div class="d-flex justify-content-between border rounded m-3 w-100 align-items-center p-4 h4">
                <span class="fw-bold"><?= $key ?></span>
                <span class="text-danger"><?= "$percentage%" ?></span>
            </div>
        <?php endforeach; ?>
    </div>
<?php $this->endSection(); ?>