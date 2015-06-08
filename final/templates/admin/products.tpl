{include file='common/admin_header.tpl'}

<div id="wrapper">

{include file='common/admin_nav.tpl'}

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

<div class="row form number1" style="display:none">
    <div class="col-lg-1 col-md-1">

        <div class="btn-group-vertical table-ops" role="group">
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
    <div class="col-lg-10 col-md-10 col-xs-10">

        <form id="form-create-product" name="form-create-product" action="{$BASE_URL}actions/admin/products.php?create" method="POST" enctype="multipart/form-data">
            <h2>New Product <small> mostly for adding products.. ofc</small></h2>
            <hr>
            <div class="form-group has-feedback">
                <select class="form-control first-form" name="type" id="type" tabindex="0">
                    <option id="0">Select Product Type</option>
                    <option id="1">Game</option>
                    <option id="2">Related product</option>
                </select>
                <p class="help-text hide">Select another option!</p>
            </div>
            <hr>

            <div class="form-group has-feedback game-form cat" style="display:none">

                <select class="form-control" name="game-category" id="game-category" tabindex="1">
                    <option id="0">Select a Game Category</option>
                    {foreach $data.categories.games as $cat}
                        <option id="{$cat.id + 1}">{$cat.name}</option>
                    {/foreach}
                </select>

                <p class="help-text hide">Select at least one category!</p>

                <div class="category_selection"></div>

            </div>

            <div class="form-group has-feedback game-form plat" style="display:none">

                <select class="form-control" name="game-platform" id="game-platform" tabindex="2">
                    <option id="0">Select a Game Platform</option>
                    {foreach $data.categories.platforms as $cat}
                        <option id="{$cat.id + 1}">{$cat.name}</option>
                    {/foreach}
                </select>

                <p class="help-text hide">Select at least one category!</p>

                <div class="category_selection"></div>

            </div>

            <div class="form-group has-feedback related-form rela" style="display:none">

                <select class="form-control" name="related-category" id="related-category" tabindex="3">
                    <option id="0">Select a Related Product Category</option>
                    {foreach $data.categories.related as $cat}
                        <option id="{$cat.id + 1}">{$cat.name}</option>
                    {/foreach}
                </select>

                <p class="help-text hide">Select at least one category!</p>

                <div class="category_selection"></div>

            </div>

            <hr>

            <div class="form-group has-feedback common" style="display:none">
                <input type="text" name="productname" id="productname" class="form-control" placeholder="Product Name" tabindex="4" value="">
                <p class="help-text hide">At least one character/number.</p>
            </div>
            <div class="form-group has-feedback common" style="display:none">
                <input type="text" name="price" id="price" class="form-control " placeholder="99.99" tabindex="5">
                <p class="help-text hide">Only numbers and separated by a dot . and two other numbers</p>
            </div>
            <div class="form-group has-feedback common" style="display:none">
                <textarea rows="5" name="description" id="description" class="form-control" placeholder="Description" tabindex="7" value=""></textarea>
                <p class="help-text hide"></p>
            </div>

            <div class="form-group has-feedback common" style="display:none">
                <input type="text" name="url" id="url" class="form-control " placeholder="image url" tabindex="8">
                <p class="help-text hide">Invalid url!</p>
            </div>

        </form>

    </div>
</div><!-- /.row.form.number1 -->

<div class="row form number2" style="display:none">
    <div class="col-lg-1 col-md-1">

        <div class="btn-group-vertical table-ops" role="group">
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
    <div class="col-lg-10 col-md-10 col-xs-10">

        <form id="form-edit-product" name="form-edit-product" action="{$BASE_URL}actions/admin/products.php?edit" method="POST" enctype="multipart/form-data">
            <h2>Edit product <small> id:</small></h2>
            <hr>
            <div class="form-group has-feedback">
                <select class="form-control" name="access" id="access" tabindex="0">
                    <option id="0">Select Access Level</option>
                    <option id="1">Client</option>
                    {foreach $data.admintypes as $type}
                        <option id="{$type.id + 1}">{$type.name}</option>
                    {/foreach}
                </select>
                <p class="help-text hide">Select another option!</p>
            </div>
            <hr>

            <div class="form-group has-feedback">
                <input type="text" name="productname" id="productname" class="form-control" placeholder="Display Name" tabindex="1" value="">
                <p class="help-text hide">At least 2 simple letters/numbers! No spaces allowed.</p>
            </div>
            <div class="form-group has-feedback">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="2" value="">
                <p class="help-text hide">Incorrect email format!</p>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="3">
                <p class="help-text hide">At least 6 simple letters/numbers! No spaces allowed.</p>
            </div>

            <hr>

            <div class="form-client" style="display:none">
                <div class="form-group has-feedback">
                    <input type="text" name="name" id="name" class="form-control " placeholder="Name" tabindex="4" value="">
                    <p class="help-text hide">At least 2 simple letters separated by 1 space!</p>
                </div>

                <div class="form-group has-feedback">
                    <input type="address" name="address" id="address" class="form-control" placeholder="Address" tabindex="5" value="">
                    <p class="help-text hide">At least 1 simple letter!</p>
                </div>

                <div class="form-group has-feedback">
                    <input type="postalcode" name="postal" id="postal" class="form-control" placeholder="Postal Code" tabindex="6" value="">
                    <p class="help-text hide">Expecting the following format: NNNN-NNN</p>
                </div>

                <hr>
            </div>

            <input type="hidden" id="id" name="id" value="">

        </form>

    </div>
</div><!-- /.row.form.number2 -->

<div class="row data">

    <div class="col-lg-1 col-md-1">

        <div class="btn-group-vertical table-ops" role="group">
            <button type="button" class="btn btn-success" href="#">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-plus fa-stack-2x"></i>
                                </span>
            </button>
            <button type="button" class="btn btn-warning" href="#" action="{$BASE_URL}actions/admin/products.php?data">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-edit fa-stack-2x"></i>
                                </span>
            </button>
            <button type="button" class="btn btn-info" action="{$BASE_URL}actions/admin/products.php?active">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-bolt fa-stack-2x"></i>
                                </span>
            </button>
            <button type="button" class="btn btn-danger" action="{$BASE_URL}actions/admin/products.php?inactive">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-ban fa-stack-2x"></i>
                                </span>
            </button>
        </div>

    </div>

    <div class="col-lg-10 col-md-10 col-xs-10">
        <table id="datatable" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th style="width: 12px;"><input type="checkbox"></th>
                <th>ID</th>
                <th>Type</th>
                <th>Name</th>
                <th>Score</th>
                <th>Stock</th>
                <th>Active</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th style="width: 12px;"><input type="checkbox"></th>
                <th>ID</th>
                <th>Type</th>
                <th>Name</th>
                <th>Score</th>
                <th>Stock</th>
                <th>Active</th>
            </tr>
            </tfoot>

            <tbody id="table-template-placeholder">



            </tbody>
        </table>
    </div>
</div>

</div><!-- /.container-fluid -->

</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->


{include file='common/admin_footer.tpl'}