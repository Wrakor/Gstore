{include file='common/admin_header.tpl'}

<div id="wrapper">

{include file='common/admin_nav.tpl'}

<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard <small>Store Overview</small>
        </h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div id="online" class="huge">{$data.online.count}</div>
                        <div>Users Online</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-street-view fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{$data.today.count}</div>
                        <div>Visits Today</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{$data.orders.count}</div>
                        <div>New Orders</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3">
        <div class="panel disabled"><p>Unavailable</p></div>
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">?</div>
                        <div>Support Tickets!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.row -->



<div class="row">


    <div class="col-lg-4 col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-diamond fa-fw"></i> Most Sold</h3>
            </div>
            <div class="panel-body">
                <div id="sold" class="list-group">

                    {foreach $data.sold as $item}

                    <a href="{$BASE_URL}pages/products/item.php?id={$item.id}" class="list-group-item">
                        <span class="label label-info">{$item.sold}</span>
                        <i class="fa fa-fw {if $item.game == true}fa-gamepad{else}fa-cube{/if}"></i> {$item.name}
                    </a>

                    {/foreach}

                </div>

                <div class="text-right">
                    <a href="#" id="sold-view-all">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-history fa-fw"></i> Event Panel</h3>
            </div>
            <div class="panel-body">
                <div id="events" class="list-group">

                    <a href="#" class="list-group-item">
                        <span class="badge">23 minutes ago</span>
                        <i class="fa fa-fw fa-truck"></i> order #392 has shipped
                    </a>
                    <a href="#" class="list-group-item">
                        <span class="badge">46 minutes ago</span>
                        <i class="fa fa-fw fa-archive"></i> new order #392
                    </a>
                    <a href="#" class="list-group-item">
                        <span class="badge">1 hour ago</span>
                        <i class="fa fa-fw fa-user"></i> new user #michaelknight31
                    </a>

                    <a href="#" class="list-group-item">
                        <span class="badge">two days ago</span>
                        <i class="fa fa-fw fa-support"></i> support request by #rambo91
                    </a>
                </div>
                <div class="text-right">
                    <a href="#">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Timestamp</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody id="transactions">

                        {foreach $data.transactions as $order}
                        <tr>
                            <td>{$order.id}</td>
                            <td>{$order.created}</td>
                            <td>{$order.totalprice}€</td>
                        </tr>
                        {/foreach}

                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="#" id="transactions-view-all">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

{include file='common/admin_footer.tpl'}
