@extends('layouts.news')

@section('content')
<div class="container-fluid">

<div class="row">
  <div class="col-md-10">
    <h3><b>Export Operator Stats [KPI]</b></h3>
  </div>
</div>

<div class="row">
  <div class="col-md-12 col-md-offset-0">
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-inline">
          
          <div class="form-group">
            <label for="publication_date">PRODUCTION DATE</label>
              <input type="text" class="form-control" id="production_date" name="production_date" size="13">
          </div>
                        
          <button type="submit" class="btn btn-info">SUBMIT</button>
          <!-- BUTTON <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal1">ADD PUBLICATION</button> -->
                              
        </form> <!-- end of master form-->                
      </div> <!-- end of panel body-->
    </div> <!-- end of class panel-->
  </div> <!-- end of col-->
</div> <!-- end of row-->  

<!-- table -->

<div class="row">
  <div class="col-md-12">
    <table class="table table-hover">
      <thread>
        <tr>
          <th>ACTIVITY</th>
          <th>JOB NUMBER</th>
          <th>OPERATOR</th>
          <th>JULIAN DATE</th>
          <th>TIME 1</th>
          <th>TIME 2</th>
          <th>RECORDS</th>
      </thread>
      <tbody>
        <tr>
          <td>E</td>
          <td>05401</td>
          <td>135NZ-S SEP</td>
          <td>16270</td>
          <td>02 33</td>
          <td>02 33</td>
          <td>91</td>
        </tr>

      </tbody>
    </table>
  </div>
</div>

</div> <!-- end of container>

<!-- MODALS -->

<!-- <div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>ADD DOWNLOAD</b></h4>
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
              <label class="col-sm-4 control-label" for="publication_name">Publication Name</label>
                <div class="col-sm-7">
                  <select class="form-control" id="publication_name" name="publication_name">
                    <option>--</option>
                    <option>HERALD HOMES</option>
                    <option>HERALD MID WEEK HOMES</option>
                    <option>HERALD ON SUNDAY HOMES</option>
                  </select>
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="code">Publication Code</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="code" name="code">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="description">Application</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="description" name="description">
                </div>
            </div>
          
            <div class="form-group">
              <label class="col-sm-4 control-label" for="publication_date">Publication Date</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="publication_date" name="publication_date">
                </div>
            </div>
                
            <div class="form-group">
              <label class="col-sm-4 control-label" for="pages">Pages</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="pages" name="pages">
                </div>
            </div>
          
            <div class="form-group">
              <label class="col-sm-4 control-label" for="remarks">Remarks</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="remarks" name="remarks">
                </div>
            </div>
                  
            <div class="form-group">
              <label class="col-sm-4 control-label" for="status">Status</label>
                <div class="col-sm-5">
                  <select class="form-control" id="status" name="status">
                    <option>OPEN</option>
                    <option>CLOSED</option>
                    <option>PENDING</option>
                  </select>
                </div>
            </div>
              
          </div> <!-- end of modal body -->
            
            <!-- <div class="modal-footer">
              <button type="submit" class="btn btn-default" data-dismiss="modal">Add Download</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            
        </form> <!-- end of form horizontal -->    
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->
              
          </div> <!-- end of modal body -->
            
            <!-- <div class="modal-footer">
              <button type="submit" class="btn btn-default" data-dismiss="modal">Update Record</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            
        </form> <!-- end of form horizontal -->    
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->


@endsection
