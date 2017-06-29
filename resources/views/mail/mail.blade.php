<h2>Batches added today {{ date('Y-m-d') }}</h2>
    <br>
    <table>
        <tr>
            <th>Application</th>
            <th>Job Name</th>
            <th>Batch Date</th>
            <th>Created At</th>
        </tr>
        @foreach($data as $batch)
            <tr>
                <td>{{ $batch->application }}</td>
                <td>{{ $batch->job_name }}</td>
                <td>{{ $batch->batch_date }}</td>
                <td>{{ $batch->created_at }}</td>
            </tr>
        @endforeach
    </table>


