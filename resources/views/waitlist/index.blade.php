@extends('layouts.base')

@section('dashboardcontent')

<div class="card">
    <div class="card-header">Manage Waitlist</div>
    <div class="card-body">
        @can('create-waitlist')
            <a href="{{ route('waitlist.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Waitlist</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                  

                <th scope="col">S#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">No of Person</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Payment Type</th>

                <th scope="col">With Food Or Not</th>

                <th scope="col">Approve</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($waitlist as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->noofperson }}</td>
                    <td>{{ $user->date }}</td>
                    <td>{{ $user->time }}</td>
                    <td>{{ $user->paymenttype }}</td>
                    @if($user->withfoodornot==0)
                    <td>Without Food</td>
                    @else
                    <td>with Food</td>
                    @endif

                    @if($user->approve==0)
                    <td>Unapproved</td>
                    @else
                    <td>approved</td>
                    @endif

                    <td>

                    </td>
                    <td>
                        <form action="{{ route('waitlist.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('waitlist.show', $user->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>


                                @can('edit-waitlist')
                                    <a href="{{ route('waitlist.edit', $user->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                @endcan

                                @can('delete-waitlist')

                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this user?');"><i class="bi bi-trash"></i> Delete</button>

                                @endcan


                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="5">
                        <span class="text-danger">
                            <strong>No waitlist Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $waitlist->links() }}

    </div>
</div>

@endsection
