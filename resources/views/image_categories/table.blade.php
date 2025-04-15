<div class="table-responsive">
    <table class="table" id="imageCategories-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Title</th>
        <th>Amount</th>
        <th>Description</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($imageCategories as $key => $imageCategory)
            <tr>
                <td>{{ $imageCategory->id }}</td>
            <td>{{ $imageCategory->title }}</td>
            <td>{{ $imageCategory->amount }}</td>
            <td>{{ $imageCategory->description }}</td>
            <td>{{ $imageCategory->created_at }}</td>
            <td>{{ $imageCategory->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['imageCategories.destroy', $imageCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('imageCategories.show', [$imageCategory->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Eye" data-placement="top" title="View"></i></a>
                        <a href="{{ route('imageCategories.edit', [$imageCategory->id]) }}" class='btn btn-outline-primary btn-xs'><i
                                class="im im-icon-Pen"  data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                        {!! Form::button('<i class="im im-icon-Remove" data-toggle="tooltip" data-placement="top" title="Delete"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
