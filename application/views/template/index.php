<!DOCTYPE html>
<html class="no-js" lang="en">
<?php $this->load->view('template/meta') ?>

<body>
    <?php $this->load->view('template/navbar') ?>
    <?php $this->load->view('template/js') ?>
    <?php $this->load->view($page) ?>
    <?php $this->load->view('template/footer') ?>
</body>

</html>