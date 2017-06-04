<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><strong>{{ $title or null }}</strong> <a href="#">A</a> | B | C | D | E | F</h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <button type="button" class="btn btn-primary btn-md addbutton pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-plus"></span> Close</button>
                    </div>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table id="data_table" class="table table-hover">
                    <thead>
                    <tr>
                        @foreach($headers as $header)
                            <th>{{ $header }}</th>
                        @endforeach
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($results as $record)
                        <tr>
                            @foreach($rows as $row)
                                @if($row == 'property_address')
                                    <td><strong><a class="generate"  data-id='{{ str_slug($record->address_only) }}'>{{ $record->property_address }}</a></strong></td>
                                @elseif($row == 'agency_name')
                                    <td>{{ substr($record->agency_name,0,15) }}</td>
                                @else
                                    <td>{{ $record[$row] }}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>


