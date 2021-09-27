<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Entity Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entity_type_id', 'Entity Type Id:') !!}
    {!! Form::number('entity_type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Logo Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo_url', 'Logo Url:') !!}
    {!! Form::file('logo_url') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('entities.index') }}" class="btn btn-light">Cancel</a>
</div>
