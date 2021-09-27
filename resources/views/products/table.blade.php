<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Sku</th>
        <th>Image Url</th>
        <th>Price</th>
        <th>Display Price</th>
        <th>Pourcentage</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                       <td>{{ $product->name }}</td>
            <td>{{ $product->sku }}</td>
            <td>{{ $product->image_url }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->display_price }}</td>
            <td>{{ $product->pourcentage }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
