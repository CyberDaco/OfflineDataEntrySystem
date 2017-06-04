<div class="container">
    <div class="row">

        <div class="col-md-3">
            <img src="/images/userprofile/{{ $results->profile_image ? $results->profile_image : 'user.jpg'}}" class="img-responsive thumbnail" alt="User Image" width="100%">
        </div> <!-- end of col-sm-3 -->

        <div class="col-md-9">
            <div class="page-header">
                <h1>Batch Details</h1>
            </div>

            <div class="row">
                {!! Form::open(array('role'=>'form','url'=>$form_url,'action'=>'POST','class'=>'form-horizontal'))!!}
                {!! Form::token() !!}

                <div class="form-group">
                    {!! Form::label('job_number','Job Number : ',['class'=>'control-label col-md-2', 'for'=>'job_number']) !!}
                    <div class="col-md-4">
                        {!! Form::text('job_number', null, ['class'=>'form-control input-lg', 'pattern'=>'[0-9]{4}', 'required']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('job_name','Job Name : ',['class'=>'control-label col-md-2']) !!}
                    <div class="col-md-6">
                        {!! Form::select('job_name', \App\Publication::where('application',$application)->lists('pub_name','pub_name'), null, ['class'=>'form-control input-lg']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('batch_date','Date : ',['class'=>'control-label col-md-2']) !!}
                    <div class="col-md-4">
                        {!! Form::text('batch_date', null, ['class'=>'form-control aussie_date input-lg', 'pattern'=>'^(((0[1-9]|[12]\d|3[01])/(0[13578]|1[02])/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)/(0[13456789]|1[012])/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])/02/((19|[2-9]\d)\d{2}))|(29/02/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$', 'placeholder'=>'dd/mm/yyy','required']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('batch_name','Batch Name : ',['class'=>'control-label col-md-2']) !!}
                    <div class="col-md-4">
                        {!! Form::text('batch_name', null, ['class'=>'form-control input-lg','pattern'=>'[a-zA-Z]{3}[_][0-9]{8}[_][SsRr][_][0-9]{2}', 'required']) !!}
                    </div>
                </div>

                <hr>

                <div class="form-group">
                    <div class="col-md-3 col-md-offset-2">
                        <button type="submit" class="btn btn-success btn-lg btn-block"><span class="glyphicon glyphicon-ok"></span> Submit</button>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ url('/dataentry') }}" class="btn btn-primary btn-lg btn-block"><i class="fa fa-reply" aria-hidden="true"></i>  Back To Dashboard</a>
                    </div>
                </div>

                {!! Form::close() !!}

            </div> <!-- end of row -->
        </div> <!-- end of column-sm-9 -->
    </div> <!-- end of row -->
</div> <!-- end of container -->