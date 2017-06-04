<div id="myModal" class="modal modal-primary">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add New Batch</h4>
            </div>

            <form class="form-horizontal" action="/admin/batch" method="post" id="frmBatch">
            <div class="modal-body">
                {{ csrf_field() }}
                {!! Form::hidden('application',$application,['class'=>'form-control','required','readonly']) !!}

                <!--
                <div class="form-group">
                    {!! Form::label('application','Application',['class'=>'control-label col-sm-4']) !!}
                    <div class="col-sm-5">
                        {!! Form::text('application',$application,['class'=>'form-control','required','readonly']) !!}
                    </div>
                </div>


                <div class="form-group">
                    {!! Form::label('jobnumber','Job Number',['class'=>'control-label col-sm-4']) !!}
                    <div class="col-sm-5">
                        {!! Form::text('jobnumber',null,['class'=>'form-control','pattern'=>'[0-9]{4}']) !!}
                    </div>
                </div>
                -->

                <div class="form-group">
                    {!! Form::label('job_name','Job Name',['class'=>'control-label col-sm-4']) !!}
                    <div class="col-sm-5">
                        {!! Form::select('job_name', \App\Publication::where('application',$application)->lists('pub_name','pub_name'), null, ['class'=>'form-control','required']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('batch_date','Date',['class'=>'control-label col-sm-4']) !!}
                    <div class="col-sm-5">
                        {!! Form::text('batch_date',null,['class'=>'form-control aussie_date','placeholder'=>'dd/mm/yyyy','pattern'=>'^(((0[1-9]|[12]\d|3[01])/(0[13578]|1[02])/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)/(0[13456789]|1[012])/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])/02/((19|[2-9]\d)\d{2}))|(29/02/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$', 'required','autofocus']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('job_status','Status',['class'=>'control-label col-sm-4']) !!}
                    <div class="col-sm-5">
                        {!! Form::select('job_status', ['Open'=>'Open','Closed'=>'Closed','Pending'=>'Pending'], null, ['class'=>'form-control','pattern'=>'[aA-zZ]{1,25}']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('remarks','Remarks',['class'=>'control-label col-sm-4']) !!}
                    <div class="col-sm-5">
                        {!! Form::text('remarks',null,['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-outline" id="btn-save" value="add">Save</button>
            </div>

            {!! Form::close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

