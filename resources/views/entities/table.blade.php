<div class="table-responsive">
    <table class="table" id="entities-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Entity Type Id</th>
        <th>Logo Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($entities as $entity)
            <tr>
                       <td>{{ $entity->name }}</td>
            <td>{{ $entity->description }}</td>
            <td>{{ $entity->entity_type_id }}</td>
            <td>{{ $entity->logo_url }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['entities.destroy', $entity->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('entities.show', [$entity->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('entities.edit', [$entity->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
