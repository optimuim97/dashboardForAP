<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $post->user_id }}</p>
</div>

<!-- Entity Id Field -->
<div class="form-group">
    {!! Form::label('entity_id', 'Entity Id:') !!}
    <p>{{ $post->entity_id }}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $post->body }}</p>
</div>

<!-- Publisher Name Field -->
<div class="form-group">
    {!! Form::label('publisher_name', 'Publisher Name:') !!}
    <p>{{ $post->publisher_name }}</p>
</div>

<!-- Publisher Id Field -->
<div class="form-group">
    {!! Form::label('publisher_id', 'Publisher Id:') !!}
    <p>{{ $post->publisher_id }}</p>
</div>

<!-- Cover Field -->
<div class="form-group">
    {!! Form::label('cover', 'Cover:') !!}
    <p>{{ $post->cover }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $post->image }}</p>
</div>

<!-- Is Publish Field -->
<div class="form-group">
    {!! Form::label('is_publish', 'Is Publish:') !!}
    <p>{{ $post->is_publish }}</p>
</div>

<!-- Is Visible By User Field -->
<div class="form-group">
    {!! Form::label('is_visible_by_user', 'Is Visible By User:') !!}
    <p>{{ $post->is_visible_by_user }}</p>
</div>

<!-- Is Visible By Agent Field -->
<div class="form-group">
    {!! Form::label('is_visible_by_agent', 'Is Visible By Agent:') !!}
    <p>{{ $post->is_visible_by_agent }}</p>
</div>

<!-- Is Draft Field -->
<div class="form-group">
    {!! Form::label('is_draft', 'Is Draft:') !!}
    <p>{{ $post->is_draft }}</p>
</div>

<!-- Expiration Date Field -->
<div class="form-group">
    {!! Form::label('expiration_date', 'Expiration Date:') !!}
    <p>{{ $post->expiration_date }}</p>
</div>

