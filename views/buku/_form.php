<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin()?>

<?= $form->field($buku, 'kode_buku')?>
<?= $form->field($buku, 'judul')?>
<?= $form->field($buku, 'jml_item')?>

<?=
    Html::submitButton('Save',['classs' => 'btn btn-primary'])
?>


<?php ActiveForm::end()?>