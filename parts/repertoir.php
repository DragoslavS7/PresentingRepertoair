<?php $table = $db->query("SELECT `title`, `dateOf`, `dateTo`, `description`, `file` FROM `CreateRep` ORDER BY  `title`, `dateOf`, `dateTo`, `description`, `file`"); ?>
<div class="sc-box">
    <div class="row text-center">
        <div class="col-12 small">
            <img src="asset/img/iconsSVG.png" width="10%">
        </div>
    </div>
    <h2 class="text-center">Approaching repertoair</h2>
</div>

<div class="sc-box">
    <div class="row">
        <?php if($table->num_rows > 0): ?>
        <?php while ($r = $table->fetch_assoc()):
            $image = substr($r['file'], strlen('c:\fakepath'));
        ?>
        <div class="col-6 col-md-4 d-flex align-items-stretch">
            <div class="card mb-4 text-white "   style="width: 18rem;">
                <img class="card-img-top" src="uploads<?php echo $image; ?>" alt="Card image cap">
                <div class="card-body text-dark">
                    <h5 class="card-title"><?php echo $r['title']; ?></h5>
                    <p class="card-text"><?php echo $r['description']; ?></p>
                    <small class="card-text"><?php echo $r['dateOf'].' : '.$r['dateTo']; ?></small>
                    <a href="?page=reserve" class="btn btn-outline-dark btn-lg btn-block">Reserve</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>