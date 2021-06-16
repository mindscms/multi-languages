@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('posts.create_post') }}</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif



                        <form action="{{ route('posts.store') }}" method="post">
                            @csrf

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @foreach(config('locales.languages') as $key => $val)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link {{ $loop->index == 0 ? 'active' : '' }}" id="{{ $key }}-tab" data-toggle="tab" href="#{{ $key }}" role="tab" aria-controls="{{ $key }}" aria-selected="true">{{ $val['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>


                            <div class="tab-content" id="myTabContent">
                                @foreach(config('locales.languages') as $key => $val)
                                <div class="tab-pane fade {{ $loop->index == 0 ? 'show active' : '' }}" id="{{ $key }}" role="tabpanel" aria-labelledby="{{ $key }}-tab">

                                    <div class="form-group">
                                        <label for="title">{{ __('posts.title') }} ({{ $key }})</label>
                                        <input type="text" name="title[{{ $key }}]" value="{{ old('title.' . $key) }}" class="form-control">
                                        @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="body">{{ __('posts.body') }} ({{ $key }})</label>
                                        <textarea name="body[{{ $key }}]" class="form-control">{{ old('body.' . $key) }}</textarea>
                                        @error('body')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                </div>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">{{ __('posts.create_post') }}</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
