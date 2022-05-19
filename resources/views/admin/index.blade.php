@extends('layouts.app')

@section('content')
    <h1>Ciao Admin</h1>
    <div class="container-fluid">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Created</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->author }}</td>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Non ci sono post</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
