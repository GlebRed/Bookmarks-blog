@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>
                My bookmarks
            </h1>

            <div class="col col-4">
                <a href="{{route('home')}}" class="btn btn-success">
                    <i class="fa fa-btn fa-plus"></i> Add new
                </a>
            </div>

            <table class="table table-striped">
                <thead>
                <th>Title</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                </thead>
                <tbody>
                @foreach ($bookmarks as $bookmark)
                    <tr>
                        <td>
                            <a href="{{ $bookmark->url }}">{{ $bookmark->title }}</a>
                            <p>{{ $bookmark->description }}</p>
                        </td>
                        <td>
{{--                            Bookmark id is a route parameter--}}
                            <form action="{{ url('bookmark/'.$bookmark->id.'/edit') }}" method="GET">
{{--                                This is csfr field--}}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-warning">
                                    <i class="fa fa-btn fa-pencil"></i>Edit
                                </button>
                            </form>
                        </td>
                        <td>
                            <form class="delete-project" action="{{ url('bookmark/'.$bookmark->id.'/delete') }}"
                                  method="POST">
{{--                                This is csfr field--}}
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" id="delete" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i>Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </table>

        </div>
    </div>
@endsection
