@extends('layouts.news')

@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-md-11">
    <h3><b>Australian Suburb Setup</b></h3>
  </div>
  <div class="col-md-1">
    <button type="button" class="btn btn-info btn-md addbutton" data-toggle="modal" data-target="#myModal1">ADD SUBURB</button>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <table class="table table-hover">
      <thread>
        <tr>
          <th>STATE</th>
          <th>SUBURB</th>
          <th>POST CODE</th>
          <th>ACTION</th>
        </tr>
      </thread>
      <tbody>
        <tr>
          <td>ACT</td>
          <td>ACTON</td>
          <td>2601</td>
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
        <h4 class="modal-title"><b>ADD SUBURB</b></h4>
      </div>
        
        <form class="form-horizontal">
          <div class="modal-body">
            
            <div class="form-group">
              <label class="col-sm-4 control-label" for="state">State</label>
                <div class="col-sm-5">
                  <select class="form-control" id="state" name="state">
                    <option>--</option>
                    <option>NZ</option>
                    <option>ACT</option>
                    <option>NSW</option>
                  </select>
                </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-4 control-label" for="suburb">Suburb</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="suburb" name="suburb">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="post_code">Post Code</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="post_code" name="post_code">
                </div>
            </div>
                
          </div> <!-- end of modal body -->
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Add Record</button>
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
        <h4 class="modal-title"><b>UPDATE SUBURB</b></h4>
      </div>
        
        <form class="form-horizontal">
          <div class="modal-body">
            
            <div class="form-group">
              <label class="col-sm-4 control-label" for="state">State</label>
                <div class="col-sm-5">
                  <select class="form-control" id="state" name="state">
                    <option>--</option>
                    <option>NZ</option>
                    <option>ACT</option>
                    <option>NSW</option>
                  </select>
                </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-4 control-label" for="suburb">Suburb</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="suburb" name="suburb">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="post_code">Post Code</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="post_code" name="post_code">
                </div>
            </div>
                
          </div> <!-- end of modal body -->
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Update Record</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form> <!-- end of form horizontal -->
        
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->

@endsection
