<div class="table-responsive">
    <table class="table" id="entityTypes-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($entityTypes as $entityType)
            <tr>
                       <td>{{ $entityType->name }}</td>
            <td>{{ $entityType->description }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['entityTypes.destroy', $entityType->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('entityTypes.show', [$entityType->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('entityTypes.edit', [$entityType->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
