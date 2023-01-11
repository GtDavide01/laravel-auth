@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <h1 class="text-center">Tutti i tuoi progetti</h1>
            <div class="col-8 mt-5">
                @if (session('message'))
                    <div class="alert alert-primary">
                        {{ session('message') }}
                    </div>
                @endif
                <a class="btn btn-success" href="{{ route('admin.project.create') }}">New Project</a>
                <table class="table table-light mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data di creazione</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->title }}</th>
                                <td>{{ $project->created_at }}</td>
                                <td>
                                    <a class="btn btn-outline-primary"
                                        href="{{ route('admin.project.show', $project->slug) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a class="btn btn-outline-success"
                                        href="{{ route('admin.project.create', $project->slug) }}">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
