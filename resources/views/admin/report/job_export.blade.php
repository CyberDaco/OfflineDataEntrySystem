@extends('layouts.admin.admin',['title'=>'Reports','icon'=> 'fa fa-pencil-square'])

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><strong>Job Export</strong></h3>
        </div>
        <div class="box-body">
            <form id="frmProductionReport">
                <div class="col-md-1">
                    <label for="job_name" class="control-label">Filter By</label>
                </div>
                <div class="col-md-3">
                    {!! Form::select('application',\App\Application::all()->pluck('application_name','application_name'),$app,['class'=>'form-control','placeholder'=>'All Application']) !!}
                </div>
                <div class="col-md-1">
                    <label for="production_date">Production</label>
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" value="{{ $from->format('d/m/Y') }}" id="date_from" name="date_from" placeholder='From dd/mm/yyyy'  required pattern='^(((0[1-9]|[12]\d|3[01])/(0[13578]|1[02])/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)/(0[13456789]|1[012])/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])/02/((19|[2-9]\d)\d{2}))|(29/02/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$'>
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" value="{{ $to->format('d/m/Y') }}" id="date_to" name="date_to" placeholder='To dd/mm/yyyy' required pattern='^(((0[1-9]|[12]\d|3[01])/(0[13578]|1[02])/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)/(0[13456789]|1[012])/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])/02/((19|[2-9]\d)\d{2}))|(29/02/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$'>
                </div>
                <div class="col-md-1">
                    <button type="submit" id="btn-search" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div> <!-- end of panel body-->
</div> <!-- end of row-->

@if($results)
<div class="row">
  <div class="col-xs-12">
    <div class="box">
        <table class="table table-hover">
            <tr>
                <th>Export Date</th>
                <th>Application</th>
                <th>Job Name</th>
                <th>Job Date</th>
                <th class="text-right">Records</th>
                <th class="text-center">Status</th>
            </tr>
            @foreach($results as $result)
                <tr>
                    <td>{{ $result->export_date }}</td>
                    <td>{{ $result->application }}</td>
                    <td>{{ $result->job_name }}</td>
                    <td>{{ $result->batch_date }}</td>
                    <td class="text-right">{{ $result->records }}</td>
                    <td class="text-center">{{ $result->job_status }}</td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td>Total Export : </td>
                <td><strong>{{ $results->count() }}</strong></td>
                <td class="text-right">Total Records  </td>
                <td class="text-right"><strong>{{ $results->sum('records') }}</strong></td>
                <td></td>
            </tr>
        </table>
    </div>
  </div> <!-- end of col-->
</div> <!-- end of row-->
@endif
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        //Datemask dd/mm/yyyy
        $("#date_from").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        $("#date_to").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    });
</script>
@endpush