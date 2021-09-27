<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
            <tr>
                <th>User Id</th>
                <th>Entity Id</th>
                <th>Body</th>
                <th>Publisher Name</th>
                <th>Publisher Id</th>
                <th>Cover</th>
                <th>Image</th>
                <th>Is Publish</th>
                <th>Is Visible By User</th>
                <th>Is Visible By Agent</th>
                <th>Is Draft</th>
                <th>Expiration Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->user_id }}</td>
                <td>{{ $post->entity_id }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->publisher_name }}</td>
                <td>{{ $post->publisher_id }}</td>
                <td>{{ $post->cover }}</td>
                <td>{{ $post->image }}</td>
                <td>{{ $post->is_publish }}</td>
                <td>{{ $post->is_visible_by_user }}</td>
                <td>{{ $post->is_visible_by_agent }}</td>
                <td>{{ $post->is_draft }}</td>
                <td>{{ $post->expiration_date }}</td>
                <td class=" text-center">
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('posts.show', [$post->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                        <a href="{!! route('posts.edit', [$post->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
