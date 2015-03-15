<?php include_once "admin_open.php"; ?>

    <div id="wrapper">

        <?php include_once "admin_nav.php"; ?>

        <!-- modal dialog for new category -->
        <div class="modal fade" id="newcat" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">New Category</h3>
                        </div>
                        <div class="panel-body">
                            <form accept-charset="UTF-8" role="form">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Category Name" name="catname" type="text">
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Root</option>
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
                                </div>
                                <fieldset>
                                    <input class="btn btn-lg btn-success btn-block" type="submit" href="#" value="Create">
                                    <input class="btn btn-lg btn-danger btn-block" href="#" value="Cancel">
                                </fieldset>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- /.modal for #logout -->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Category Management <small> with the product framework</small>
                        </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-1">

                        <div class="btn-group-vertical" role="group" aria-label="...">
                            <a type="button" class="btn btn-success" href="#newcat" data-toggle="modal" data-target="#newcat">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-plus fa-stack-2x"></i>
                                </span>
                            </a>
                            <button type="button" class="btn btn-info">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-bolt fa-stack-2x"></i>
                                </span>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-ban fa-stack-2x"></i>
                                </span>
                            </button>
                        </div>

                    </div>
                    <div class="col-lg-11">

                        <!-- Search -->
                        <div class="input-group search">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                        </div>

                        <div class="table-responsive">

                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th><a href="">ID <i class="fa fa-caret-square-o-down"></i></a></th>
                                    <th><a href="">Name <i class="fa fa-caret-down"></i></a></th>
                                    <th><a href="">Parent Category <i class="fa fa-caret-down"></i></a></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>1</td>
                                    <td><input class="form-control" placeholder="Category Name" value="Games" type="text"></td>
                                    <td>
                                        <select class="form-control">
                                            <option>Root</option>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>2</td>
                                    <td><input class="form-control" placeholder="Category Name" value="Related Products" type="text"></td>
                                    <td>
                                        <select class="form-control">
                                            <option>Root</option>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>3</td>
                                    <td><input class="form-control" placeholder="Category Name" value="Action" type="text"></td>
                                    <td>
                                        <select class="form-control">
                                            <option>Games</option>
                                            <option>Root</option>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>4</td>
                                    <td><input class="form-control" placeholder="Category Name" value="Toys" type="text"></td>
                                    <td>
                                        <select class="form-control">
                                            <option>Related Products</option>
                                            <option>Root</option>
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
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <nav class="center-block text-center">
                            <ul class="pagination pagination-lg">
                                <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>

                    </div>
                </div><!-- /.row -->

            </div><!-- /.container-fluid -->

        </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->


<?php include_once "admin_close.php"; ?>