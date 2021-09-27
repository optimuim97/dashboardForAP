<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Entity Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entity_id', 'Entity Id:') !!}
    {!! Form::number('entity_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-6">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::text('body', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Publisher Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publisher_name', 'Publisher Name:') !!}
    {!! Form::text('publisher_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Publisher Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publisher_id', 'Publisher Id:') !!}
    {!! Form::text('publisher_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cover Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cover', 'Cover:') !!}
    {!! Form::text('cover', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Is Publish Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_publish', 'Is Publish:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_publish', 0) !!}
        {!! Form::checkbox('is_publish', '1', null) !!}
    </label>
</div>


<!-- Is Visible By User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_visible_by_user', 'Is Visible By User:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_visible_by_user', 0) !!}
        {!! Form::checkbox('is_visible_by_user', '1', null) !!}
    </label>
</div>


<!-- Is Visible By Agent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_visible_by_agent', 'Is Visible By Agent:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_visible_by_agent', 0) !!}
        {!! Form::checkbox('is_visible_by_agent', '1', null) !!}
    </label>
</div>


<!-- Is Draft Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_draft', 'Is Draft:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_draft', 0) !!}
        {!! Form::checkbox('is_draft', '1', null) !!}
    </label>
</div>


<!-- Expiration Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expiration_date', 'Expiration Date:') !!}
    {!! Form::text('expiration_date', null, ['class' => 'form-control','id'=>'expiration_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#expiration_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('posts.index') }}" class="btn btn-light">Cancel</a>
</div>
