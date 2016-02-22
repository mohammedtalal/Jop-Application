<div class="panel-group col-sm-3 col-xs-10 side-margin-float" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="icon-folder">
                </span>Controller</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <span class="icon-doc-inv"></span>
                            <a href="{{ URL('admin') }}">Show Applications</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="icon-mail-alt"></span>
                            <a href="{{ route('admin.create') }}">Send Emails</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
