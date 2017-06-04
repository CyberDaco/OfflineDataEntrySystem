<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><strong>{{ $title or null }}</strong></h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <a href="{{ $add_url or '#' }}" class="btn btn-success btn-md addbutton pull-right"><span class="glyphicon glyphicon-plus"></span> {{ $add_label or null}}</a>
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
                                    @if($row == 'id')
                                        <td>
                                            <a href="{{ url($modify_url.$record[$row].'/edit') }}" class="btn btn-info btn-xs">MODIFY</a>
                                            <a class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#delete-modal" data-id="{{ $record[$row] }}">DELETE</a>
                                        </td>
                                    @else
                                        <td>{{ $record[$row] }}</td>
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot></tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>

