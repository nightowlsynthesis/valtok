@extends('admin.master')

@section('content')
    <h1>Posts</h1>

    <section class="row placeholders">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{str_limit($post->title, 40)}}</td>
                        <td>{{str_limit($post->body, 50)}}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td><a href="{{route('posts.edit', $post->id)}}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection