@extends('layouts.admin.admin',['title'=>'Reports','icon'=> 'fa fa-pencil-square'])

@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-md-10">
    <h3><b>Production Report</b></h3>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <form id="frmProductionReport" class="form-inline" style="border:1px solid darkgray; padding:20px; border-radius: 5px;">
      <div class="form-group">
        <label for="user_id">Staff ID</label>
          <input type="text" class="form-control" id="user_id" name="user_id">
      </div>
      <div class="form-group">
          <label for="production_date">Production Date</label>
            <input type="text" class="form-control" id="date_from" name="date_from" placeholder='From' required pattern='^(((0[1-9]|[12]\d|3[01])/(0[13578]|1[02])/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)/(0[13456789]|1[012])/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])/02/((19|[2-9]\d)\d{2}))|(29/02/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$'>
            <input type="text" class="form-control" id="date_to" name="date_to" placeholder='To' required pattern='^(((0[1-9]|[12]\d|3[01])/(0[13578]|1[02])/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)/(0[13456789]|1[012])/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])/02/((19|[2-9]\d)\d{2}))|(29/02/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$'>
      </div>
      <button type="submit" id="btn-search" class="btn btn-primary">Submit</button>
    </form> <!-- end of master form-->                
  </div> <!-- end of panel body-->
</div> <!-- end of row-->  
<br>
<div class="row">
  <div class="col-md-12">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Staff ID</th>
          <th>Batch Name</th>
          <th class="text-center">Entry Type</th>
          <th class="text-right">Records</th>
          <th class="text-center">Hours</th>
        </tr>
      </thead>
      <tbody id="records-list">
      </tbody>
    </table>
  </div> <!-- end of col-->
</div> <!-- end of row-->
  
</div> <!-- end of container> -->

@endsection

@push('scripts')
<script>
$(document).ready(function(){

    //Datemask dd/mm/yyyy
    $("#date_from").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    $("#date_to").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});


    // search button ajax
    $("#frmProductionReport").submit(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        
        e.preventDefault(); 
        var formData = {
            user_id: $('#user_id').val(),
            date_from: $('#date_from').val(),
            date_to: $('#date_to').val(),
        }
        //console.log(formData);

        $.ajax({
            type: 'POST',
            url: "{{ url('/admin/report/production') }}",
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                
                $('#records-list > tr').remove();
                $.each(data, function (index, value) {
                  var report = '<tr><td>' + value.user_id +'</td>';
                  report += '<td>' + value.batch_name + '</td>';
                  report += '<td class="text-center">' + value.action + '</td>';
                  report += '<td class="text-right">' + value.records + '</td>';
                  report += '<td class="text-center">' + value.hours + '</td></tr>';
                  $('#records-list').append(report);
                });
            },
            error: function (data) {
                $('#records-list').remove();
                console.log('Error:', data);
            }
        });
    });
});
  
</script>
@endpush