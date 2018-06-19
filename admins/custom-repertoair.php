<?php require_once "../includes/header-admins.php"; ?>
    <div class="main-content" <?php define("INFLEX", true); ?>  >
        <div class="container" <?php if ( file_exists( '../includes/database.php' ) ) include_once '../includes/database.php'; ?> >
            <div class="sc-box">
                <h3 class="animated infinite bounceIn">Customer</h3>
            </div>
            <div class="sc-box">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-left">
                        <div class="row">
                            <div class="col-6">
                                <b>First and last name</b>
                            </div>
                            <div class="col-4">
                                <span class="badge">Title</span>
                            </div>
                            <div class="col-2">
                                <span class="badge">Tikets</span>
                            </div>
                        </div>
                    </li>
                    <?php
                    $query = $db->query("SELECT `title`,`fname`,`lname`,`tikets` FROM `Reserved` ORDER BY `title`,`fname`,`lname`,`tikets`");
                    if($query->num_rows > 0):
                        while($tb = $query->fetch_assoc()):
                    ?>
                    <li class="list-group-item text-left">
                        <div class="row">
                            <div class="col-6">
                                <?php echo $tb['fname'] . ' ' . $tb['lname']; ?>
                            </div>
                            <div class="col-4">
                                <span class="badge"><?php echo $tb['title']; ?></span>
                            </div>
                            <div class="col-2">
                                <span class="badge"><?php echo $tb['tikets']; ?></span>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>

            </div>
        </div>
    </div>
<?php require_once "../includes/footer-admins.php"; ?>