<?php
/**
 * Created by PhpStorm.
 * User: Ranto_hr
 * Date: 4/29/2019
 * Time: 1:57 PM
 */
?>
<?php
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

<?php endforeach; ?>
<?php foreach($js_files as $file): ?>

    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<style type='text/css'>
    body
    {
        font-family: Arial;
        font-size: 14px;
    }
    a {
        color: blue;
        text-decoration: none;
        font-size: 14px;
    }
    a:hover
    {
        text-decoration: underline;
    }
</style>
<section class="contact--us-area section-padding-100-0" style="margin-bottom: 100px; padding-top: 150px;">
    <div class="container">
        <?php echo $output; ?>
    </div>
</section>