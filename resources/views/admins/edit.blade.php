@extends ('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row">
            {{-- <h2>{{$admin->name}}</h2><br> --}}
            <form action="{{route('admins.update',$admin->id)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="">Name</label>
                    <input class="form-control" type="text" value="{{$admin->name}}" readonly>
                </div>
                <div class="form-group">
                    <label for="">E-mail</label>
                    <input class="form-control" type="text" value="{{$admin->email}}" readonly>
                </div>
                <div class="form-group">
                    <label for="">Role</label>
                    <select class="form-control">
                        @foreach (\App\Role::all() as $role)
                            <option>{{ $role->display_name }}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection
