@extends('layouts.base')

@section('dashboardcontent')

<div class="card">
    <div class="card-header">Manage Reservation</div>
    <div class="card-body">
        @can('create-user')
            <a href="{{ route('reservation.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Reservation</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                   
                <th scope="col">S#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">With Food Or Not</th>
                <th scope="col">Food Name</th>
                <th scope="col">Food Type</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($reservation as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    @if($user->withfoodornot==1)
                    <td> With Food</td>
                    @else
                    <td> Without Food</td>
                    @endif
                    <td>{{ $user->foodname }}</td>
                    <td>{{ $user->foodtype }}</td>
                    <td>
                       
                    </td>
                    <td>
                        <form action="{{ route('reservation.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('reservation.show', $user->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                           
                                @can('edit-reservation')
                                    <a href="{{ route('reservation.edit', $user->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                @endcan

                                @can('delete-reservation')
                                  
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this user?');"><i class="bi bi-trash"></i> Delete</button>
                                 
                                @endcan
                           

                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="5">
                        <span class="text-danger">
                            <strong>No Reservation Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $reservation->links() }}

    </div>
</div>

@endsection
