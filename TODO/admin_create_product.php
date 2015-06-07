<?php include_once "admin_open.php"; ?>

    <div id="wrapper">

        <?php include_once "admin_nav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Product Management <small> taking care of products since..</small>
                        </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-1">

                        <div class="btn-group-vertical" role="group" aria-label="...">
                            <button type="button" class="btn btn-success">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-check fa-stack-2x"></i>
                                </span>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-close fa-stack-2x"></i>
                                </span>
                            </button>
                        </div>

                    </div>
                    <div class="col-lg-11">

                        <form role="form">
                            <h2>New Product <small> more products more $</small></h2>
                            <hr>
                            <select class="form-control">
                                <option>Select to add more categories</option>
                                <optgroup label="Games">Games
                                    <option>Aventure</option>
                                    <option>Action</option>
                                    <option>RPG</option>
                                    <option>Massive Multiplayer</option>
                                    <option>...</option>
                                </optgroup>
                                <optgroup label="Related Products">Related Products
                                    <option>Collectibles</option>
                                    <option>Wearables</option>
                                    <option>Toys</option>
                                    <option>...</option>
                                </optgroup>
                            </select>
                            <div class="bs-example" data-example-id="label-variants" style="margin-top:15px;">
                                <span class="label label-success">Adventure</span>
                                <span class="label label-info">RPG</span>
                                <span class="label label-warning">Massive Multiplayer</span>
                                <span class="label label-danger">Action</span>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control datepicker" placeholder="Start Date" value="" id="dp1">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control datepicker" placeholder="End Date" value="" id="dp2">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Price" tabindex="2" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="product_name" name="product_name" id="product_name" class="form-control" placeholder="Product Name" tabindex="4" value="">
                            </div>
                            <div class="form-group">
                                <textarea name="product_description" id="product_description" class="form-control" placeholder="Product Description" tabindex="3" value="" rows="5"></textarea>
                            </div>
                            <hr>

                            <div class="form-group">
                                <label class="control-label">Select File</label>


                                <div class="input-group">
                                    <div tabindex="-1" class="form-control file-caption  kv-fileinput-caption">
                                        <span class="file-caption-ellipsis">…</span>
                                        <div class="file-caption-name"></div>
                                    </div>
                                    <div class="input-group-btn">
                                        <button type="button" title="Clear selected files" class="btn btn-danger fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i></button>
                                        <button type="submit" title="Upload selected files" class="btn btn-info kv-fileinput-upload fileinput-upload-button"><i class="fa fa-upload"></i></button>
                                        <div class="btn btn-primary btn-file"> <i class="glyphicon glyphicon-folder-open"></i>  Browse</div>
                                    </div>
                                </div>
                                <br>
                                <label class="control-label">Uploaded Files</label>

                                <div class="row">
                                    <div class="col-md-2">
                                        <a href="#" class="thumbnail">
                                            <img src="http://placehold.it/100x100">
                                            <div class="caption">
                                                <h6>g1xm1.mpeg</h6>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2">
                                        <a href="#" class="thumbnail" style="
                                         -webkit-box-shadow: 0px 0px 30px 0px rgba(0,196,255,1);
                                         -moz-box-shadow: 0px 0px 30px 0px rgba(0,196,255,1);
                                         box-shadow: 0px 0px 30px 0px rgba(0,196,255,1);">
                                            <img src="http://placehold.it/100x100">
                                            <div class="caption">
                                                <h6>g1x45.jpg</h6>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2">
                                        <a href="#" class="thumbnail">
                                            <img src="http://placehold.it/100x100">
                                            <div class="caption">
                                                <h6>g1x46.jpg</h6>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-2">
                                        <a href="#" class="thumbnail">
                                            <img src="http://placehold.it/100x100">
                                            <div class="caption">
                                                <h6>g1x47.jpg</h6>
                                            </div>
                                        </a>
                                    </div>


                                </div>

                            </div>

                        </form>

                    </div>
                </div><!-- /.row -->

            </div><!-- /.container-fluid -->

        </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->


<?php include_once "admin_close.php"; ?>