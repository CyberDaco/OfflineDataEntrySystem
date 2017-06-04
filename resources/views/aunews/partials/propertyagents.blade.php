<div class="form-group">
  <div class="col-md-12 col-md-offset-0">
<table class="table table-borderless" id="tblContact">
  <thead>
    <tr>
      <th>Contact</th>
      <th>Agency Name</th>
      <th>Firstname</th>
      <th>Lastname <a href="#" id="addrow" class="pull-right" tabindex='-1'> [+ Add Row]</a></th>
    </tr>
  </thead>
  <tbody>
    @if(isset($agents))
      @foreach($agents as $agent)
        <tr>
          <td class="col-md-2 col-xs-2"><input type="text" name="agent_contacts[]" class="form-control input-sm" value = "{{ $agent->agent_contact }}" /></td>
          <td class="col-md-4 col-xs-4"><input type="text" name="agency_names[]" class="form-control input-sm" value = "{{ $agent->agency_name }}" /></td>
          <td class="col-md-2 col-xs-2"><input type="text" name="agent_firstnames[]" class="form-control input-sm" value = "{{ $agent->agent_firstname }}"/></td>
          <td class="col-md-2 col-xs-2"><input type="text" name="agent_lastnames[]" class="form-control input-sm" value = "{{ $agent->agent_lastname }}"/></td>
        </tr>
      @endforeach
    @else
        <tr>
          <td class="col-md-2 col-xs-2"><input type="text" name="agent_contacts[]" class="form-control input-sm" value="" /></td>
          <td class="col-md-4 col-xs-4"><input type="text" name="agency_names[]" class="form-control input-sm" value="" /></td>
          <td class="col-md-2 col-xs-2"><input type="text" name="agent_firstnames[]" class="form-control input-sm" value="" /></td>
          <td class="col-md-2 col-xs-2"><input type="text" name="agent_lastnames[]" class="form-control input-sm" value="" /></td>
        </tr>
        <tr>
          <td class="col-md-2 col-xs-2"><input type="text" name="agent_contacts[]" class="form-control input-sm" value="" /></td>
          <td class="col-md-4 col-xs-4"><input type="text" name="agency_names[]" class="form-control input-sm" value="" /></td>
          <td class="col-md-2 col-xs-2"><input type="text" name="agent_firstnames[]" class="form-control input-sm" value="" /></td>
          <td class="col-md-2 col-xs-2"><input type="text" name="agent_lastnames[]" class="form-control input-sm" value="" /></td>
        </tr>
        <tr>
          <td class="col-md-2 col-xs-2"><input type="text" name="agent_contacts[]" class="form-control input-sm" value="" /></td>
          <td class="col-md-4 col-xs-4"><input type="text" name="agency_names[]" class="form-control input-sm" value="" /></td>
          <td class="col-md-2 col-xs-2"><input type="text" name="agent_firstnames[]" class="form-control input-sm" value="" /></td>
          <td class="col-md-2 col-xs-2"><input type="text" name="agent_lastnames[]" class="form-control input-sm" value="" /></td>
        </tr>
    @endif
  </tbody>
</table>
</div>
</div>

    