@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Posts</div>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th colspan="3">
                                    <form action="{{ route('posts.index') }}" method="get">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="keyword" value="{{ old('keyword', request()->input('keyword')) }}" placeholder="{{ __('posts.keyword') }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">{{ __('posts.search') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </th>
                            </tr>
                            <tr>
                                <th>{{ __('posts.id') }}</th>
                                <th>{{ __('posts.title') }}</th>
                                <th>{{ __('posts.action') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></td>
                                <td>
                                    <a href="{{ route('posts.edit', $post->slug) }}"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);" onclick="if (confirm('Are you sure?')) { document.getElementById('delete-post-{{ $post->id }}').submit(); } else { return false; }"><i class="fa fa-trash text-danger"></i></a>
                                    <form action="{{ route('posts.destroy', $post) }}" method="post" id="delete-post-{{ $post->id }}" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
