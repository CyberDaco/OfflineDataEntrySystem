@extends('layouts.news')

@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-md-10">
    <h3><b>Job Numbers</b></h3>
  </div>
  <div class="col-md-2">
    <button type="button" class="btn btn-info btn-md addbutton pull-right" data-toggle="modal" data-target="#myModal1">ADD JOB NUMBER</button>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <table class="table table-hover">
      <thread>
        <tr>
          <th>JOB NUMBER</th>
          <th>DESCRIPTION</th>
          <th>SALE/RENT</th>
          <th>CURRENT MONTH</th>
          <th>PUBLICATION DATE</th>
          <th>STATS OUTPUT</th>
          <th>ACTIONS</th>
          <th>DATE ADDED</th>
        </tr>
      </thread>
      <tbody>
        <tr>
          <td>5003</td>
          <td>NZ</td>
          <td>S</td>
          <td>DEC2015</td>
          <td>JAN2016</td>
          <td>NZ-S JAN</td>
          <td>
            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal2">MODIFY</button>
            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal3">DELETE</button>
          </td>
          <td>2015-12-15</td>
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
        <h4 class="modal-title"><b>ADD JOB NUMBER</b></h4>
      </div>
            
        <form class="form-horizontal">
          <div class="modal-body">
            
            <div class="form-group">
              <label class="col-sm-4 control-label" for="job_number">Job Number</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="job_number" name="job_number">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="description">Description</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="description" name="description">
                </div>
            </div>
        
            <div class="form-group">
              <label class="col-sm-4 control-label" for="sale_rent">Sale / Rent</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="sale_rent" name="sale_rent">
                </div>
            </div>
                  
            <div class="form-group">
              <label class="col-sm-4 control-label" for="current_month">Current Month</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="current_month" name="current_month">
                </div>
            </div>
          
            <div class="form-group">
              <label class="col-sm-4 control-label" for="publication_date">Publication Date</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="publication_date" name="publication_date">
                </div>
            </div>
        
            <div class="form-group">
              <label class="col-sm-4 control-label" for="stats_output">Stats Output</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="stats_output" name="stats_output">
                </div>
            </div>
              
          </div> <!-- end of modal body -->
            
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" data-dismiss="modal">Add Job Number</button>
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
        <h4 class="modal-title"><b>UPDATE JOB NUMBER</b></h4>
      </div>
            
        <form class="form-horizontal">
          <div class="modal-body">
            
            <div class="form-group">
              <label class="col-sm-4 control-label" for="job_number">Job Number</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="job_number" name="job_number">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="description">Description</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="description" name="description">
                </div>
            </div>
        
            <div class="form-group">
              <label class="col-sm-4 control-label" for="sale_rent">Sale / Rent</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="sale_rent" name="sale_rent">
                </div>
            </div>
                  
            <div class="form-group">
              <label class="col-sm-4 control-label" for="current_month">Current Month</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="current_month" name="current_month">
                </div>
            </div>
          
            <div class="form-group">
              <label class="col-sm-4 control-label" for="publication_date">Publication Date</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="publication_date" name="publication_date">
                </div>
            </div>
        
            <div class="form-group">
              <label class="col-sm-4 control-label" for="stats_output">Stats Output</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="stats_output" name="stats_output">
                </div>
            </div>
              
          </div> <!-- end of modal body -->
            
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" data-dismiss="modal">Update Job Number</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        
        </form> <!-- end of form horizontal -->    
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->

@endsection
