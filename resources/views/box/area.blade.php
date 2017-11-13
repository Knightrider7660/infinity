@section('box')
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Area</h4>
                </div>
                <form action="{{action('AreaController@save')}}" method="get" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="input-group">
                        <span class="input-group-addon">Area Name</span>
                        <input class="form-control" name="name" placeholder="Area name" type="text" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    @endsection