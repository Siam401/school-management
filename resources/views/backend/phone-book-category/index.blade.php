@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        {{ _lang('New Category') }}
                    </div>
                </div>

                <div class="panel-body">
                    <form action="{{ route('phone-book-category.store') }}" autocomplete="off"
                        class="form-horizontal form-groups-bordered validate" enctype="multipart/form-data" method="post"
                        accept-charset="utf-8">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label">{{ _lang('Category Title') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">{{ _lang('Description') }}</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description">{{ old('description') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        {{ _lang('Phone Book Categories') }}
                    </div>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered data-table">
                        <thead>
                            <th>{{ _lang('Category Title') }}</th>
                            <th>{{ _lang('Description') }}</th>
                            <th>{{ _lang('Action') }}</th>
                        </thead>
                        <tbody>
                            @if (isset($phoneBookCategories))
                                @foreach ($phoneBookCategories as $category)
                                    <tr>

                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <form action="{{ route('phone-book-category.destroy', $category->id) }}"
                                                method="post" class="d-flex">
                                                {{-- <a href="{{ route('phone-book-categoryshow', $category->id) }}"
                                                    class="btn btn-info btn-xs"><i class="fa fa-eye"
                                                        aria-hidden="true"></i></a> --}}
                                                <a href="{{ route('phone-book-category.edit', $category->id) }}"
                                                    class="btn btn-warning btn-xs mx-2"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a>
                                                {{ method_field('DELETE') }}
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-xs btn-remove"><i
                                                        class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7" class="text-danger">Not Found</td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
