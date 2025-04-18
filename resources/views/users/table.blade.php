@php
    $Role = \App\Models\RoleAndPermission::all();
@endphp



<div class="table-responsive">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        @foreach ($Role as $key => $role)
        <li class="nav-item" role="presentation">
            <button class="nav-link {{ $key == 0 ? 'active' : '' }}" id="{{ $role->key }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $role->key }}" type="button" role="tab" aria-controls="{{ $role->key }}" aria-selected="{{ $key == 0 ? 'true' : 'false' }}">{{ $role->name }}</button>
        </li>
        @endforeach

      </ul>
      <div class="tab-content" id="myTabContent">
        @foreach ($Role as $key => $role)
         <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="{{ $role->key }}" role="tabpanel" aria-labelledby="{{ $role->key }}-tab">
            <table class="table" id="users-table">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Emp Id</th>
                        <th>Name</th>
                        <th>Group</th>
                        <th>Designation</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $users = \App\Models\User::select('users.*', 'roles.name as role', 'designations.desi_name as designation')
                        ->leftjoin('roles', 'users.group_id', '=', 'roles.id')
                        ->leftjoin('designations', 'users.designation_id', '=', 'designations.id')
                        ->where('roles.key', '=', $role->key)
                        ->get();
                @endphp
                @foreach($users as $key => $users)
                    <tr>
                        <td>{{ ++$key }}</td>
                    <td>{{ $users->emp_id }}</td>
                    <td>{{ $users->name }} {{ $users->last_name }}</td>
                    <td>{{ $users->role }}</td>
                    <td>{{ $users->designation }}</td>
                    <td>{{ $users->email }}</td>
                        <td>
                            <div class='btn-group'>
                                <a href="{{ route('users.show', [$users->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Eye" data-placement="top" title="View"></i></a>
                                <a href="{{ route('users.edit', [$users->id]) }}" class='btn btn-outline-primary btn-xs'><i
                                    class="im im-icon-Pen"  data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                  @if(can('delete_option'))
                                    {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                                    {!! Form::button('<i class="im im-icon-Remove" data-toggle="tooltip" data-placement="top" title="Delete"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    {!! Form::close() !!}
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
         </div>
        @endforeach

      </div>
 
</div>

