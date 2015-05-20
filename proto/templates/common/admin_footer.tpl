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



<!-- jQuery -->
<script src="{$BASE_URL}lib/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>

<!-- Handlebars.js -->
<script src="{$BASE_URL}lib/handlebars/handlebars-v3.0.3.js"></script>

<!-- Datepicker JavaScript -->
<script src="{$BASE_URL}lib/datepicker/js/bootstrap-datepicker.js"></script>

<!-- Custom javascript -->
<script src="{$BASE_URL}js/admin_dashboard.js"></script>

</body>
</html>