<?php include "header.php"; ?>

<div id="page-wrapper">

    <div class="container-fluid">

        <?php
        if (empty($_GET['exe'])) {
            require 'pages/home.inc.php';
        } elseif (file_exists('pages/' . $_GET['exe'] . '.inc.php')) {
            require 'pages/' . $_GET['exe'] . '.inc.php';
        }
        ?>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<?php include "footer.php"; ?>