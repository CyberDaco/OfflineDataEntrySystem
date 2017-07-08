<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>{{ $application ? $application : '' }}</strong></h3>
            </div>
            <div class="box-body">
                {!! Form::open(array('role'=>'form','url'=>'/admin/import/'.$url,'action'=>'POST', 'files'=>'true'))!!}
                        {!! FOrm::token() !!}
                    <div class="col-md-1">
                        <label for="job_name" class="control-label">Job Name</label>
                    </div>
                    <div class="col-md-2">
                        {!! Form::select('job_name', $options, null, ['class'=>'form-control','required']) !!}
                    </div>
                    <div class="col-md-1">
                        <label for="job_name" class="control-label">Batch Date</label>
                    </div>
                    <div class="col-md-2">
                        {!! Form::text('job_date',null,['class'=>'form-control aussie_date', 'autofocus', 'required']) !!}
                    </div>
                    <div class="col-md-2">
                        {!! Form::file('csv', ['class'=>'form-control','required']) !!}
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>

