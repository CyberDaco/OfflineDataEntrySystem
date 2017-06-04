@extends('layouts.news')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-9">
      GRAPH
    </div>
  <div class="col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading"><b>ANNOUNCEMENTS</b></div>
        <div class="panel-body">
          <button type="button" class="btn btn-info btn-md btn-link" data-toggle="modal" data-target="#myModal1">September Leave Summary</button><br>
          <button type="button" class="btn btn-info btn-md btn-link" data-toggle="modal" data-target="#myModal2">Outreach Program</button>
        </div>
    </div> <!-- end of panel -->
  </div> <!-- end of column -->
  </div> <!-- end of row -->
  
  <div class="row">
    <div class="col-md-9">
      
    </div>
    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-heading"><b>HELP DESK</b></div>
          <div class="panel-body">
            <button type="button" class="btn btn-info btn-md btn-link" data-toggle="modal" data-target="#myModal3">September Job Numbers</button><br>
            <button type="button" class="btn btn-info btn-md btn-link" data-toggle="modal" data-target="#myModal4">Instructions 101</button>
          </div>
      </div> <!-- end of panel -->
    </div> <!-- end of column -->
  </div> <!-- end of row -->
  
</div> <!-- end of container -->

<!-- MODALS -->

<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">September Leave Summary</h4>
      </div>
    
      <div class="modal-body">
        <p>blahblahblahchuchuchu</p>
      </div>
            
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Outreach Program</h4>
      </div>
          
      <div class="modal-body">
        <p>Time & venue TBA.</p>
      </div>
          
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->

<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">September Job Numbers</h4>
      </div>
          
      <div class="modal-body">
        <p>5428</p>
      </div>
          
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->

<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Instructions 101</h4>
      </div>
          
      <div class="modal-body">
        <p>BLAHBLAH</p>
      </div>
          
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->



@endsection