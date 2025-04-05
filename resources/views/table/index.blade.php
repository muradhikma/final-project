@extends('layouts.base')

@section('dashboardcontent')

<div class="card">
    <div class="card-header">Manage Table</div>
    <div class="card-body">
        @can('create-table')
            <a href="{{ route('table.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Table</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">S#</th>
                <th scope="col">Id no of table</th>
                <th scope="col">capacity</th>
                <th scope="col">Reseved</th>

                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($table as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->idnooftable }}</td>
                    <td>{{ $user->capacity }}</td>
                    @if($user->reserved==1)
                    <td>reserved</td>
                    @else
                    <td> Not reserved</td>
                    @endif
                    <td>
                       
                    </td>
                    <td>
                        <form action="{{ route('table.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('table.show', $user->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                           
                                @can('edit-user')
                                    <a href="{{ route('table.edit', $user->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                @endcan

                                @can('delete-user')
                                   
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this table?');"><i class="bi bi-trash"></i> Delete</button>
                               
                                @endcan
                       

                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="5">
                        <span class="text-danger">
                            <strong>No Table Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $table->links() }}

    </div>
</div>

@endsection
