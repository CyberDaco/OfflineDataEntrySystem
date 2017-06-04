@extends('layouts.news')

@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-md-9 col-xs-5">
    <h3><b>Daily RecordS Setup</b></h3>
  </div>
  <div class="col-md-2 col-xs-4">
    <button type="button" class="btn btn-info btn-md addbutton">EXPORT TO EXCEL</button>
  </div>
  <div class="col-md-1 col-xs-3">
    <button type="button" class="btn btn-info btn-md addbutton pull-right" data-toggle="modal" data-target="#myModal1">ADD DAILY RECORDS</button>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <table class="table table-hover">
      <thread>
        <tr>
          <th>PRODUCTION DATE</th>
          <th>NEW ZEALAND</th>
          <th>AUSTRALIA</th>
          <th>INVALID</th>
          <th>TOTAL</th>
          <th>COMMAND</th>
        </tr>
      </thread>
      <tbody>
        <tr>
          <td>2015-04-06</td>
          <td>1385</td>
          <td>123700</td>
          <td>2000</td>
          <td>ASDFGHJKL</td>
          <td>
            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal2">MODIFY</button>
            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal3">DELETE</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div> <!-- end of col-->
</div> <!-- end of row-->
  
</div> <!-- end of container>


<!-- MODALS -->

<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>ADD DAILY RECORDS</b></h4>
      </div>
        
        <form class="form-horizontal">
          <div class="modal-body">
            
            <div class="form-group">
              <label class="col-sm-4 control-label" for="production_date">Production Date</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="production_date" name="production_date">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="nz">New Zealand</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="nz" name="nz">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="au">Australia</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="au" name="au">
                </div>
            </div>
          
            <div class="form-group">
              <label class="col-sm-4 control-label" for="inv">Invalid</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="inv" name="inv">
                </div>
            </div>
              
          </div> <!-- end of modal body -->
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Add Records</button> <!-- data dismiss? -->
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form> <!-- end of form horizontal -->
        
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>UPDATE DAILY RECORDS</b></h4>
      </div>
        
        <form class="form-horizontal">
          <div class="modal-body">
            
            <div class="form-group">
              <label class="col-sm-4 control-label" for="production_date">Production Date</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="production_date" name="production_date">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="nz">New Zealand</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="nz" name="nz">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="au">Australia</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="au" name="au">
                </div>
            </div>
          
            <div class="form-group">
              <label class="col-sm-4 control-label" for="inv">Invalid</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="inv" name="inv">
                </div>
            </div>
              
          </div> <!-- end of modal body -->
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Update Records</button> <!-- data dismiss? -->
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form> <!-- end of form horizontal -->
        
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->

@endsection
