<?php
/**
 * @link http://www.bigbrush-agency.com/
 * @copyright Copyright (c) 2015 Big Brush Agency ApS
 * @license http://www.bigbrush-agency.com/license/
 */

use bigbrush\big\widgets\editor\Editor;
?>
<div class="row">
    <div class="col-md-9">
        <?= $form->field($model, 'content')->widget(Editor::className()) ?>
    </div>
</div>
