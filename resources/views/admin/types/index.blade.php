@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>Types</h1>

    <div class="px-5">
        @if(session('message'))
        <div class="alert alert-success p-4">
            <strong class="fs-4">
                {{ session('message') }}
            </strong>
        </div>
        @endif
    </div>

    <div class="row row-cols-2 pt-5">
        <div class="col">

        <form action="{{ route('admin.types.store') }}" method="post">
            @csrf
            <div class="input-group mb-3 pt-5">
              <input type="text" name="type" id="type" class="form-control" placeholder="add type" aria-describedby="helpId">
              <button class="btn btn-outline-warning" type="submit">
                + add
              </button> 
            </div>
        </form>

        </div>
        <div class="col">
            <div class="table-responsive">
                <table class="table table-striped
                table-hover
                table-borderless
                table-primary
                align-middle">
                    <thead class="table-light">
            
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Actions</th>
            
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
            
            
                        @forelse ($types as $type)
                        <tr class="table-primary">
                            <td scope="row">{{$type->id}}</td>
                            <td>{{$type->type}}</td>
                            <td>
                                <a href="{{ route('admin.types.show', $type->id ) }}">
                                    VIEW 
                                </a>
            
                                | EDIT | DELETE
            
                            </td>
            
                        </tr>
                        @empty
                        <tr class="table-primary">
                            <td scope="row">No types 😅</td>
            
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
            
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    
</div>

@endsection
