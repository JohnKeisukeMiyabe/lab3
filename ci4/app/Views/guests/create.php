
<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action=" <?php echo site_url('guests'); ?> " method="post">
    <?= csrf_field() ?>

    <label for="title">Name</label>
    <input type="input" name="title" value="<?= set_value('name') ?>">
    <br>

    <label for="email">Email</label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="comments">Comments</label>
    <textarea name="comments" cols="45" rows="4"><?= set_value('comments') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create guest item">
</form>