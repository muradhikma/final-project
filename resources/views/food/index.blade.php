@extends('layouts.base')

@section('dashboardcontent')

<div class="card">
    <div class="card-header">Manage Food</div>
    <div class="card-body">
        @can('create-food')
            <a href="{{ route('food.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Food</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">S#</th>
                <th scope="col">Food Name</th>
                <th scope="col">Food Type</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($foods as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->foodname }}</td>
                    <td>{{ $user->foodtype }}</td>
                    <td>{{ $user->price }}</td>
                    <td>
                        
                    </td>
                    <td>
                        <form action="{{ route('food.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('food.show', $user->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                           
                           
                                @can('edit-food')
                                    <a href="{{ route('food.edit', $user->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                @endcan

                                @can('delete-food')
                                   
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this user?');"><i class="bi bi-trash"></i> Delete</button>
                                 
                                @endcan
                          

                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="5">
                        <span class="text-danger">
                            <strong>No Food Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $foods->links() }}

    </div>
</div>

@endsection
