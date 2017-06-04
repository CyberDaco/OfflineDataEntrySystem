@extends('layouts.news')

@section('content')
<div class="container-fluid">

<div class="row">
  <div class="col-md-10">
    <h3><b>Export by Publication</b></h3>
  </div>
</div>

<div class="row">
  <div class="col-md-10">
    <h4>4286061</h4>
  </div>
</div>

<div class="row">
  <div class="col-md-12 col-md-offset-0">
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-inline">
          
          <div class="form-group">
            <label for="state">STATE</label>
              <select class="form-control" id="state" id="state" name="state">
                <option>NZ</option>
                <option>ACT</option>
                <option>NSW</option>
              </select>
          </div>
                        
          <div class="form-group">
            <label for="publication_name">PUBLICATION NAME</label>
              <select class="form-control" id="publication_name" name="publication_name">
                <option>HERALD HOMES</option>
                <option>BAY POST</option>
                <option>BLACKTOWN SUN</option>
                <option>AGENT BOOKLET - TOM OFFERMANN REAL ESTATE</option>
              </select>
          </div>
                        
          <div class="form-group">
            <label for="publication_date">PUBLICATION DATE</label>
              <input type="text" class="form-control" id="publication_date" name="publication_date" size="13">
          </div>
          
          <div class="form-group">
            <label for="start_sequence">START SEQUENCE</label>
              <input type="text" class="form-control" id="start_sequence" name="start_sequence" size="13">
          </div>
                        
          <button type="submit" class="btn btn-info">VIEW</button>
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
          <th>ENTRY</th>
          <th>VERIFY</th>
          <th>BATCH ID</th>
          <th>PUBLICATION NAME</th>
          <th>PUBLICATION DATE</th>
          <th>ENTRY RECORDS</th>
          <th>VERIFY RECORDS</th>
          <th>STATUS</th>
        </tr>
      </thread>
      <tbody>
        <tr>
          <td>046</td>
          <td>|</td>
          <td>BTS_20160614_S_01</td>
          <td>BLACKTOWN SUN</td>
          <td>2016-09-20</td>
          <td>100</td>
          <td>0</td>
          <td>FOR VERIFY</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="row">
  <div class="col-md-10">
    <h4><b>Summary</b></h4>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <table class="table table-hover">
      <thread>
        <tr>
          <th>ID</th>
          <th>STATE</th>
          <th>PUBLICATION NAME</th>
          <th>PUBLICATION DATE</th>
          <th>START</th>
          <th>END</th>
          <th>SALE</th>
          <th>RENT</th>
          <th>TOTAL</th>
          <th>EXPORT</th>
        </tr>
      </thread>
      <tbody>
        <tr>
          <td>22768</td>
          <td>NSW</td>
          <td>BLACKTOWN SUN</td>
          <td>20/09/2016</td>
          <td>428888</td>
          <td>429000</td>
          <td>112</td>
          <td>0</td>
          <td>112</td>
          <td>--</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="row">
  <div class="col-md-10">
    <h3>Records History</h3>
    <h4><b>Summary</b></h4>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <table class="table table-hover">
      <thread>
        <tr>
          <th>ID</th>
          <th>STATE</th>
          <th>PUBLICATION NAME</th>
          <th>PUBLICATION DATE</th>
          <th>START</th>
          <th>END</th>
          <th>SALE</th>
          <th>RENT</th>
          <th>TOTAL</th>
          <th>EXPORT</th>
        </tr>
      </thread>
      <tbody>
        <tr>
          <td>22768</td>
          <td>NSW</td>
          <td>BLACKTOWN SUN</td>
          <td>20/09/2016</td>
          <td>428888</td>
          <td>429000</td>
          <td>112</td>
          <td>0</td>
          <td>112</td>
          <td>--</td>
        </tr>
        <tr>
          <td>22768</td>
          <td>NSW</td>
          <td>BLACKTOWN SUN</td>
          <td>20/09/2016</td>
          <td>428888</td>
          <td>429000</td>
          <td>112</td>
          <td>0</td>
          <td>112</td>
          <td>--</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</div> <!-- end of container>

<!-- MODALS -->

<div id="myModal1" class="modal fade" role="dialog">
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
            
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" data-dismiss="modal">Add Download</button>
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
        <h4 class="modal-title"><b>MODIFY DOWNLOAD</b></h4>
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
              <label class="col-sm-4 control-label" for="publication_date">Publication Date</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="publication_date" name="publication_date">
                </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-4 control-label" for="code">Code</label>
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
            
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" data-dismiss="modal">Update Record</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            
        </form> <!-- end of form horizontal -->    
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->


@endsection
