<?php require_once "../includes/header-admins.php"; ?>
<section class="main-content"  <?php define("INFLEX", true); ?> >
    <div class="container" <?php if ( file_exists( '../includes/database.php' ) ) include_once '../includes/database.php'; ?> >
        <div class="sc-box">
            <h3 class="animated infinite bounceIn">Table of existing repertoires</h3>
            <div class="row">
                <div class="col-12">
                    <table class="vitamins table table-striped table-bordered" id="example" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>DateOf</th>
                            <th>DateTo</th>
                            <th>Description</th>
                            <th>File</th>
                            <th>Create date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $table= $db->query("SELECT `id`,`title`, `dateOf`, `dateTo`, `description`, `file`,`create_at` FROM `CreateRep` ORDER BY `title`, `dateOf`, `dateTo`, `description`, `file`,`create_at`");
                        if($table->num_rows > 0):
                            while ($row = $table->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['dateOf']; ?></td>
                            <td><?php echo $row['dateTo']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['file']; ?></td>
                            <td><?php echo $row['create_at']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once "../includes/footer-admins.php"; ?>