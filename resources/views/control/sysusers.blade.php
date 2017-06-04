@extends('layouts.news')

@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-md-9 col-xs-8">
    <h3><b>System Users</b></h3>
  </div>
  <div class="col-md-2 col-xs-2">
    <button type="button" class="btn btn-info btn-md addbutton pull-right">EXPORT TO EXCEL</button>
  </div>
  <div class="col-md-1 col-xs-2">
    <button type="button" class="btn btn-info btn-md addbutton" data-toggle="modal" data-target="#myModal1">ADD USER</button>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <table class="table table-hover">
      <thread>
        <tr>
          <th>OPERATOR ID</th>
          <th>USERNAME</th>
          <th>PASSWORD</th>
          <th>FIRSTNAME</th>
          <th>LASTNAME</th>
          <th>ACCESS LEVEL</th>
          <th>ACTIONS</th>
          <th>DATE ADDED</th>
        </tr>
      </thread>
      <tbody>
        <tr>
          <td>15</td>
          <td>PAYAWALE</td>
          <td>EMY</td>
          <td>EMY</td>
          <td>PAYAWAL</td>
          <td>2</td>
          <td>
            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal2">MODIFY</button>
            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal3">DELETE</button>
          </td>
          <td>2014-10-07</td>
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
        <h4 class="modal-title"><b>ADD USER</b></h4>
      </div>
        
        <form class="form-horizontal">
          <div class="modal-body">
            
            <div class="form-group">
              <label class="col-sm-4 control-label" for="operator_id">Operator ID</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="operator_id" name="operator_id">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="username">Username</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="username" name="username">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="password">Password</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="password" name="password">
                </div>
            </div>
          
            <div class="form-group">
              <label class="col-sm-4 control-label" for="firstname">First Name</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="lastname">Last Name</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="access_level">Access Level</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="access_level" name="access_level">
                </div>
            </div>
              
          </div> <!-- end of modal body -->
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Add User</button> <!-- data dismiss? -->
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
        <h4 class="modal-title"><b>UPDATE USER</b></h4>
      </div>
        
        <form class="form-horizontal">
          <div class="modal-body">
            
            <div class="form-group">
              <label class="col-sm-4 control-label" for="operator_id">Operator ID</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="operator_id" name="operator_id">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="username">Username</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="username" name="username">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="password">Password</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="password" name="password">
                </div>
            </div>
          
            <div class="form-group">
              <label class="col-sm-4 control-label" for="firstname">First Name</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="lastname">Last Name</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="access_level">Access Level</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="access_level" name="access_level">
                </div>
            </div>
              
          </div> <!-- end of modal body -->
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Update User</button> <!-- data dismiss? -->
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form> <!-- end of form horizontal -->
        
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->

<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>ADD USER</b></h4>
      </div>
        
        <form class="form-horizontal">
          <div class="modal-body">
            
            <div class="form-group">
              <label class="col-sm-4 control-label" for="operator_id">Operator ID</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="operator_id" name="operator_id">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="username">Username</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="username" name="username">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="password">Password</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="password" name="password">
                </div>
            </div>
          
            <div class="form-group">
              <label class="col-sm-4 control-label" for="firstname">First Name</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="lastname">Last Name</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="access_level">Access Level</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="access_level" name="access_level">
                </div>
            </div>
              
          </div> <!-- end of modal body -->
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Update User</button> <!-- data dismiss? -->
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form> <!-- end of form horizontal -->
        
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->

@endsection
