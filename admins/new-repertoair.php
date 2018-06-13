<?php require_once "../includes/header-admins.php"; ?>
<section class="main-content">
    <div class="container">
        <div class="sc-box">
            <h3 class="animated infinite bounceIn">Create new repertoair</h3>
            <form method="POST" action="#">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" placeholder="Enter some text">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="text" id="dateOf" name="dateOf" placeholder="Enter some text">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="text" id="dateTo" name="dateTo" placeholder="Enter some text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="date">Description</label>
                            <textarea cols="20" rows="5" name="description" id="description" placeholder="Enter some text"></textarea>
                        </div>
                    </div>
                </div>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                    <div class="btn-file">
                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="file[]" id="file" multiple="multiple"></span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
                <input class="button" type="submit" id="submitCreat" value="Submit">
            </form>
        </div>
    </div>
</section>
<?php require_once "../includes/footer-admins.php"; ?>