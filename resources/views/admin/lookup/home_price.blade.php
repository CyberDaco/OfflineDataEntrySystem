@extends('layouts.admin.admin',['title'=>'Lookup','icon'=> 'fa fa-pencil-square'])

@section('content')

    <div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Home Price Guide Table</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    {!! Form::open(array('role'=>'form','url'=>'/admin/lookup/home_price','action'=>'POST', 'files'=>'true'))!!}
                        {{ csrf_field() }}
                        <div class="col-md-2">
                            {!! Form::file('csv', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Start Import</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
    </div>



    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><strong>View Table</strong></h3>
                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <button id="btn-add" name="btn-add" class="btn btn-success btn-md addbutton pull-right"><span class="glyphicon glyphicon-plus"></span> Add New Record</button>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table id="data_table" class="table table-hover">
                        <thead>
                        <tr>
                            <th>State</th>
                            <th>Property Address</th>
                            <th class="text-center">Property Type</th>
                            <th>Sale Type</th>
                            <th class="text-right">Sold Price</th>
                            <th class="text-center">Contract Date</th>
                            <th>Agency Name</th>
                            <th>Bed</th>
                            <th>Bath</th>
                            <th>Car</th>
                            <th>Slug</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($results as $result)
                            <tr>
                                <td>{{ $result->state }}</td>
                                <td><a><strong>{{ $result->address }}</strong></a></td>
                                <td class="text-center">{{ $result->property_type }}</td>
                                <td>{{ $result->sale_type }}</td>
                                <td class="text-right">{{ $result->sold_price }}</td>
                                <td class="text-center">{{ $result->contract_date }}</td>
                                <td>{{ $result->agency_name }}</td>
                                <td>{{ $result->bedroom }}</td>
                                <td>{{ $result->bathroom }}</td>
                                <td>{{ $result->car }}</td>
                                <td>{{ $result->slug }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
    </div>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection

