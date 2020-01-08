@extends ('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Role</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $index=>$admin)
                        
                        <tr>
                            <th scope="row">{{$index + 1}}</th>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>
                            <td>
                                @foreach ($admin->roles as $index=>$role)
                                    
                                    {{$role->display_name}} {{$index+1 < $admin->roles->count() ? '/' : '' }}

                                @endforeach
                            </td>
                            <td>
                            <a type="button" class="btn btn-secondary text-white" href="{{ route('admins.edit', $admin->id) }}">{{'Edit'}}</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection