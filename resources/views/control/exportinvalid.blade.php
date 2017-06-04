@extends('layouts.news')

@section('content')
<div class="container-fluid">

<div class="row">
  <div class="col-md-10">
    <h3><b>Export Invalid</b></h3>
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
          <th>BATCH ID</th>
          <th>PUBLICATION NAME</th>
          <th>PUBLICATION DATE</th>
          <th>NO. OF RECORDS</th>
        </tr>
      </thread>
      <tbody>
        <tr>
          <td>046</td>
          <td>BTS_20160614_S_01</td>
          <td>BLACKTOWN SUN</td>
          <td>2016-09-20</td>
          <td>100</td>
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
          <th>STATE</th>
          <th>PUBLICATION NAME</th>
          <th>PUBLICATION DATE</th>
          <th>SALE</th>
          <th>RENT</th>
          <th>TOTAL</th>
          <th>EXPORT</th>
        </tr>
      </thread>
      <tbody>
        <tr>
          <td>NSW</td>
          <td>BLACKTOWN SUN</td>
          <td>20/09/2016</td>
          <td>112</td>
          <td>0</td>
          <td>112</td>
          <td>
            <button type="button" class="btn btn-info btn-xs">EXPORT INVALID</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</div> <!-- end of container>

<!-- MODALS -->

@endsection
