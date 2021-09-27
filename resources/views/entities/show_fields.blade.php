<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $entity->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $entity->description }}</p>
</div>

<!-- Entity Type Id Field -->
<div class="form-group">
    {!! Form::label('entity_type_id', 'Entity Type Id:') !!}
    <p>{{ $entity->entity_type_id }}</p>
</div>

<!-- Logo Url Field -->
<div class="form-group">
    {!! Form::label('logo_url', 'Logo Url:') !!}
    <p>{{ $entity->logo_url }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $entity->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $entity->updated_at }}</p>
</div>

