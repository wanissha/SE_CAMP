<h1>Hello world</h1>
<h1> <?php echo $val_a . ''. $val_b; ?></h1>
<h1><?php echo e($val_a  . ' ' .  $val_b); ?></h1>
<form action="" method="post">
    <?php echo csrf_field(); ?>
    <input type="text" name=""myinput>
    <button type="submit" name="submit">Submit</button>
</form>
<?php /**PATH C:\xampp\htdocs\SE_CAMP\example-app\resources\views/mypage.blade.php ENDPATH**/ ?>