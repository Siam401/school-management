@extends('layouts.backend')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="panel-title">{{ _lang('List Academic Session') }}</span>
                    <a class="btn btn-primary btn-sm pull-right ajax-modal" data-title="{{ _lang('Add Academic Year') }}"
                        href="{{ route('academic-years.create') }}">{{ _lang('Add New') }}</a>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>{{ _lang('Session Name') }}</th>
                                <th>{{ _lang('Academic Year') }}</th>
                                <th>{{ _lang('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $current = get_option('academic_year'); @endphp
                            @foreach ($academicYears as $academicYear)
                                <tr id="row_{{ $academicYear->id }}">
                                    <td class='session'>{{ $academicYear->session }}
                                        {{ $academicYear->id == $current ? '(Active)' : '' }}</td>
                                    <td class='year'>{{ $academicYear->year }}</td>

                                    <td>
                                        <form action="{{ route('academic-years.destroy', $academicYear['id']) }}"
                                            method="post">
                                            <a href="{{ route('academic-years.edit', $academicYear['id']) }}"
                                                data-title="{{ _lang('Update Academic Year') }}"
                                                class="btn btn-warning btn-sm ajax-modal">{{ _lang('Edit') }}</a>
                                            {{ csrf_field() }}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-danger btn-sm btn-remove"
                                                type="submit">{{ _lang('Delete') }}</button>
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
@endsection
