<br>

  <div class="form-group">
    <div class="col-md-12 col-md-offset-0">
      <table class="table table-borderless">
        <thead>
          <tr>
            <th>Ad Sizes</th>
            <th>Photo Type</th>
            <th>Photo Count</th>
            <th>Section</th>
            <th>Exclusive Agent</th>
          </tr>
        </thead>  
        <tbody>
          <tr>
            <td>{!! Form::select('ad_size', ['SMALL'=>'SMALL', '1/8 PAGE'=>'1/8 PAGE', '1/4 PAGE'=>'1/4 PAGE', '1/3 PAGE'=>'1/3 PAGE', '1/2 PAGE'=>'1/2 PAGE', '3/4 PAGE'=>'3/4 PAGE', 'FULL PAGE'=>'FULL PAGE', 'DOUBLE PAGE'=>'DOUBLE PAGE','CLASSIFIEDS'=>'CLASSIFIEDS'], null, ['placeholder'=>'--','class'=>'form-control input-sm','id'=>'ad_size']) !!}</td>
            <td>{!! Form::select('ad_photo_type', ['COLOUR'=>'COLOUR', 'B & W'=>'B & W', 'NO PHOTO'=>'NO PHOTO'], null, ['class'=>'form-control input-sm']) !!}</td>
            <td>{!! Form::select('ad_photo_count', ['SINGLE'=>'SINGLE', 'MULTIPLE'=>'MULTIPLE', 'NOT APPLICABLE'=>'NOT APPLICABLE'], null, ['class'=>'form-control input-sm']) !!}</td>
            <td>{!! Form::select('ad_section', ['MIDDLE'=>'MIDDLE','FRONT'=>'FRONT','BACK'=>'BACK', 'CLASSIFIEDS'=>'CLASSIFIEDS'],null, ['placeholder'=>'--','class'=>'form-control input-sm']) !!}</td>
            <td>{!! Form::select('ad_exclusive', ['UNKNOWN'=>'UNKNOWN','YES'=>'YES', 'NO'=>'NO'],null, ['class'=>'form-control input-sm']) !!}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

    
    