
<div class="sc-box" <?php define("INFLEX", true); ?> >
    <div class="row text-center" <?php if ( file_exists( 'includes/database.php' ) ) include_once 'includes/database.php'; ?> >
        <div class="col-12 small" <?php $table = $db->query("SELECT `title`, `dateOf`, `dateTo`, `description`, `file` FROM `CreateRep` ORDER BY `title`, `dateOf`, `dateTo`, `description`, `file`"); ?> >
            <img src="asset/img/iconsSVG.png" width="10%">
        </div>
    </div>
    <h2 class="text-center">Approaching repertoair</h2>
</div>

<div class="sc-box" >
    <div class="row">
        <?php if($table->num_rows > 0): ?>
        <?php while ($r = $table->fetch_assoc()):
            $image =substr($r['file'], strlen('c:\fakepath'));
        ?>
        <div class="col-6 col-md-4">
            <div class="text-center">
                <a href="?page=reserve"><img src="uploads/<?php echo $image; ?>" width="50%" class="rounded mx-auto d-block" alt="...">
                <h4><?php echo $r['title'] ?></h4></a>
                <div><?php echo $r['description'] ?></div>
                <small><?php echo $r['dateOf'].' : '.$r['dateTo'] ?></small>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>