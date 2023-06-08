@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>Projects</h1>

    <div class="px-5">
        @if(session('message'))
        <div class="alert alert-success p-4">
            <strong class="fs-4">
                {{ session('message') }}
            </strong>
        </div>
        @endif
    </div>

    <a href="{{ route('admin.projects.create') }}" class="btn btn-warning fw-bold my-2">+ Add Project</a>
    
    <div class="table-responsive">
        <table class="table table-striped
        table-hover
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
    
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Actions</th>
    
                </tr>
            </thead>
            <tbody class="table-group-divider">
    
    
                @forelse ($projects as $project)
                <tr class="table-primary">
                    <td scope="row">{{$project->id}}</td>
                    <td><img height="100" src="{{$project->img_path}}" alt="{{$project->title}}"></td>
                    <td>{{$project->title}}</td>
                    <td>{{$project->slug}}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', $project->id ) }}">
                            VIEW 
                        </a>
    
                        | EDIT | DELETE
    
                    </td>
    
                </tr>
                @empty
                <tr class="table-primary">
                    <td scope="row">No projects 😅</td>
    
                </tr>
                @endforelse
            </tbody>
            <tfoot>
    
            </tfoot>
        </table>
    </div>
</div>

@endsection
