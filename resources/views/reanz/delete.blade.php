@extends('layouts.interest')

@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"><b><h4>Interest Auction Results [Modify]</h4></b></div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="/interest/entry">
                  {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-2" for="state">State</label>
                    <div class="col-md-2 col-sm-4 col-xs-4">
                        <select class="form-control input-sm" id="state" name="state" value="{{ $record->state }}">
                            <option value="NZ">NZ</option>
                            <option value="ACT">ACT</option>
                            <option value="NSW">NSW</option>
                            <option value="QLD">QLD</option>
                            <option value="SA">SA</option>
                            <option value="TAS">TAS</option>
                            <option value="VIC">VIC</option>
                            <option value="NT">NT</option>
                            <option value="WA">WA</option>
                          </select>
                    </div>
                </div>
                
                <div class="form-group">  
                    <label class="control-label col-md-2 col-sm-2 col-xs-2" for="listing_id">Listing ID</label>
                    <div class="col-md-2 col-sm-4 col-xs-4">
                      <input type="text" class="form-control input-sm" id="listing_id" name="listing_id" value="{{ $record->listing_id }}">
                    </div>
                </div>
                
                <div class="form-group">  
                    <label class="control-label col-md-2 col-sm-2 col-xs-2" for="unit_no">Unit No.</label>
                    <div class="col-md-2 col-sm-4 col-xs-4">
                      <input type="text" class="form-control input-sm" id="unit_no" name="unit_no" value="{{ $record->unit_no }}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-2" for="street_no">Street No.</label>
                    <div class="col-md-2 col-sm-6 col-xs-4">
                      <input type="text" class="form-control input-sm" id="street_no" name="street_no" required value="{{ $record->street_no }}">
                    </div>
                    <div class="col-md-1 col-sm-2 col-xs-2">
                        <input type="text" class="form-control input-sm" id="street_no_suffix" name="street_no_suffix" value="{{ $record->street_no_suffix }}">
                    </div>    
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-2" for="street_name">Street Name</label>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                      <input type="text" class="form-control input-sm" id="street_name" name="street_name" value="{{ $record->street_name }}">
                    </div>
                    <div class="col-md-1 col-sm-2 col-xs-2">
                      <input type="text" class="form-control input-sm" id="street_ext" name="street_ext" value="{{ $record->street_ext }}">
                    </div>
                    <div class="col-md-1 col-sm-2 col-xs-2">
                      <input type="text" class="form-control input-sm" id="street_direction" name="street_direction" value="{{ $record->street_direction }}">
                    </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-2" for="suburb">Suburb</label>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                      <input type="text" class="form-control input-sm" id="suburb" name="suburb" value="{{ $record->suburb }}">
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-3">
                      <input type="text" class="form-control input-sm" id="post_code" name="post_code" value="{{ $record->post_code }}">
                    </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-2" for="property_type">Property Type</label>
                    <div class="col-md-2 col-sm-4 col-xs-4">
                      <select class="form-control input-sm" id="property_type" name="property_type" value="{{ $record->property_type }}">
                        <option value=""> -- </option>
                        <option value="HO">House</option>
                        <option value="FA">Farm / Rural</option>
                        <option value="LA">Land</option>
                        <option value="UN">Unit / Townhouse</option>
                        <option value="CO,30">Retail</option>
                        <option value="CO,50">Commercial</option>
                        <option value="CO,70">Industrial</option>
                        <option value="CP">Car Parking</option>
                        <option value="ST">Storage</option>
                      </select>
                    </div>
                  <label class="control-label col-md-1 col-sm-2 col-xs-2" for="sale_type">Sale Type</label>
                    <div class="col-md-2 col-sm-4 col-xs-4">
                      <select class="form-control input-sm" id="sale_type" name="sale_type" value="{{ $record->sale_type }}">
                        <option value="NS">Normal Sale</option>
                        <option value="SA">Sold At Auction</option>
                      </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-2" for="sold_price">Sold Price</label>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <input type="text" class="form-control input-sm" id="sold_price" name="sold_price" value="{{ $record->sold_price }}">
                        </div>
                </div>
                
                <div class="form-group">  
                    <label class="control-label col-md-2 col-sm-2 col-xs-2" for="contract_date">Contract Date</label>
                        <div class="col-md-2 col-sm-4 col-xs-4">
                          <input type="text" class="form-control input-sm" id="contract_date" name="contract_date" value="{{ $record->contract_date }}">
                        </div>
                    <label class="control-label col-md-1 col-sm-2 col-xs-2" for="settlement_date">Settlement Date</label>
                        <div class="col-md-2 col-sm-4 col-xs-4">
                          <input type="text" class="form-control input-sm" id="settlement_date" name="settlement_date" readonly value="{{ $record->settlement_date }}">
                        </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-2" for="agency_name">Agency</label>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <input type="text" class="form-control input-sm" id="agency_name" name="agency_name" value="{{ $record->agency_name }}">
                        </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-2" for="bedroom">Bed</label>
                        <div class="col-md-1 col-sm-2 col-xs-2">
                            <input type="text" class="form-control input-sm" id="bedroom" name="bedroom" value="{{ $record->bedroom }}">
                        </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="bathroom">Bath</label>
                        <div class="col-md-1 col-sm-2 col-xs-2">
                            <input type="text" class="form-control input-sm" id="bathroom" name="bathroom" value="{{ $record->bathroom }}">
                        </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="car">Car</label>
                        <div class="col-md-1 col-sm-2 col-xs-2">
                            <input type="text" class="form-control input-sm" id="car" name="car" value="{{ $record->car }}">
                        </div>
                </div>
                
                
                </div>
                <div class="panel-footer" style="height: 55;">
                  <div class="form-group">
                    <div class="col-md-1 col-md-offset-11 col-sm-2 col-sm-offset-10 col-xs-2 col-xs-offset-10">
                      <button type="submit" class="btn btn-info btn-md">Update</button>
                    </div>
                  </div>
                </div>
        </div>
        </form>
    </div>
</div>    
</div>

@endsection

<!-- <button type="submit" class="btn btn-info">SUBMIT</button>