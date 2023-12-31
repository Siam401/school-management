@extends('layouts.backend')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default no-export">
                <div class="panel-heading"><span class="panel-title">{{ _lang('Picklist') }}</span>
                    <select id="type" class="select_class pull-right" onchange="show(this);">
                        <option value="">{{ _lang('-- Select Type --') }}</option>
                        <option>Religion</option>
                        <option>Designation</option>
                        <option>Staff Designation</option>
                    </select>
                    <a class="btn btn-primary btn-sm pull-right ajax-modal" data-title="{{ _lang('Add Picklist') }}"
                        href="{{ route('picklists.create') }}">{{ _lang('Add New') }}</a>
                </div>

                <div class="panel-body">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{ \Session::get('success') }}</p>
                        </div>
                        <br />
                    @endif
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ _lang('Type') }}</th>
                                <th>{{ _lang('Value') }}</th>
                                <th>{{ _lang('Slug') }}</th>
                                <th>{{ _lang('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($picklists as $picklist)
                                <tr id="row_{{ $picklist->id }}">
                                    <td class='id'>{{ $loop->index + 1 }}</td>
                                    <td class='type'>{{ $picklist->type }}</td>
                                    <td class='value'>{{ $picklist->value }}</td>
                                    <td class='type'>{{ $picklist->slug }}</td>

                                    <td>
                                        <form action="{{ action('PicklistController@destroy', $picklist['id']) }}"
                                            method="post">
                                            <a href="{{ action('PicklistController@edit', $picklist['id']) }}"
                                                data-title="{{ _lang('Update Picklist') }}"
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
@section('js-script')
    <script>
        $("#type").val("{{ $type }}");

        function show(elem) {
            if ($(elem).val() == "") {
                return;
            }
            window.location = "<?php echo url('picklists/type'); ?>/" + $(elem).val();
        }
    </script>
@stop
