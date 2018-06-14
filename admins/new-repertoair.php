<?php require_once "../includes/header-admins.php"; ?>
<section class="main-content">
    <div class="container">
        <div class="sc-box">
            <h3 class="animated infinite bounceIn">Create new repertoair</h3>
            <form method="POST" action="#">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter some text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="date">Date Of</label>
                            <input type="date" id="dateOf" name="dateOf"  max="3000-12-31"
                                   min="1000-01-01"  class="form-control" placeholder="Enter some text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="date">Date To</label>
                            <input type="date" id="dateTo" name="dateTo" min="1000-01-01"
                                   max="3000-12-31" class="form-control" placeholder="Enter some text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="date">Description</label>
                            <textarea cols="20" rows="5" name="description" id="description" class="form-control" placeholder="Enter some text"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 100%; height:100px;"></div>
                            <div class="btn-file">
                                <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="file"  id="file"><input type="hidden" name="fileBtn"  id="fileBtn" style="hidde"></span>
                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <input class="button" type="submit" id="submitCreat" value="Submit">
            </form>
        </div>
    </div>
</section>
<?php require_once "../includes/footer-admins.php"; ?>