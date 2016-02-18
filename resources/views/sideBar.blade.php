<div class="panel-group col-sm-3 col-xs-10 side-margin-float" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                </span>Controller</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-pencil text-primary"></span>
                            <a href="{{ URL('admin') }}">Show Applications</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-flash text-success"></span>
                            <a href="{{ route('admin.create') }}">Send Emails</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-file text-info"></span>
                            <a href="">Settings</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
