{if isset($data.nav.dashboard) }
{literal}
<script id="sold-template" type="text/x-handlebars-template">

    {{#each this}}
    <a href="http://localhost:8888/proto/pages/products/item.php?id={{id}}" class="list-group-item">
        <span class="label label-info">{{sold}}</span>
        <i class="fa fa-fw {{#if game}}fa-gamepad{{else}}fa-cube{{/if}}"></i> {{name}}
    </a>
    {{/each}}

</script>
{/literal}

{literal}
    <script id="transactions-template" type="text/x-handlebars-template">

        {{#each this}}
        <tr>
            <td>{{id}}</td>
            <td>{{created}}</td>
            <td>{{totalprice}}€</td>
        </tr>
        {{/each}}

    </script>
{/literal}
{/if}

{if isset($data.nav.users) }
{literal}
    <script id="datatable-template" type="text/x-handlebars-template">

        {{#each this}}
        <tr id="id-{{id}}" class="active-{{#if active}}1{{else}}0{{/if}}">
            <td><input id="input-{{id}}" type="checkbox"></td>
            <td>{{id}}</td>
            <td>{{#if access}}{{access}}{{else}}Client{{/if}}</td>
            <td>{{email}}</td>
            <td>{{username}}</td>
            <td>{{registered}}</td>
            <td>{{online}}</td>
        </tr>
        {{/each}}

    </script>
{/literal}
{/if}

<!-- jQuery -->
<script src="{$BASE_URL}lib/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>

<!-- Datepicker JavaScript -->
<script src="{$BASE_URL}lib/datepicker/js/bootstrap-datepicker.js"></script>

<!-- NOTY -->
<script src="{$BASE_URL}lib/noty/jquery.noty.packaged.min.js"></script>

<!-- Handlebars.js -->
<script src="{$BASE_URL}lib/handlebars/handlebars-v3.0.3.js"></script>

{if isset($data.nav.dashboard) }
    <!-- Custom javascript -->
    <script src="{$BASE_URL}js/admin_dashboard.js"></script>
{/if}

{if isset($data.nav.users) }
    <script src="{$BASE_URL}lib/datatables.js/jquery.dataTables.min.js"></script>
    <script src="{$BASE_URL}js/admin_users.js"></script>
    <script src="{$BASE_URL}js/user.form.validation.js"></script>
{/if}



</body>
</html>