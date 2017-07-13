
@foreach($job_numbers as $job_number)
    <!-- Info Boxes Style 2 -->
    <div class="info-box bg {{ $bg_color[rand(1,7)] }}">
        <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">{{ $job_number->application }}</span>
            <span class="info-box-number">{{ $job_number->job_number }}</span>

            <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
            </div>
                      <span class="progress-description">
                        {{ $job_number->current_publication_date_format }}
                      </span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
@endforeach