@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        {{ _lang('Add New Staff') }}
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-8">
                        <form action="{{ route('staffs.store') }}" method="post" autocomplete="off"
                            class="form-horizontal validate" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{{ _lang('Name') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{{ _lang('Designation') }}</label>
                                <div class="col-sm-9">
                                    <select class="form-control select2" name="designation" required>
                                        <option value="designation">{{ _lang('Select Designation') }}</option>
                                        {{ create_option('picklists', 'value', 'value', old('designation'), ['type=' => 'Staff Designation']) }}
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">{{ _lang('Department') }}</label>
                                <div class="col-sm-9">
                                    <select class="form-control select2" name="department_id" required>
                                        <option value="">{{ _lang('Select Department') }}</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">
                                                {{ $department->department_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">{{ _lang('Birthday') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control datepicker" name="birthday"
                                        value="{{ old('birthday') }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{{ _lang('Gender') }}</label>
                                <div class="col-sm-9">
                                    <select name="gender" class="form-control select2" required>
                                        <option value="">Select One</option>
                                        <option @if (old('gender') == 'Male') selected @endif value="Male">Male
                                        </option>
                                        <option @if (old('gender') == 'Female') selected @endif value="Female">Female
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{{ _lang('Religion') }}</label>
                                <div class="col-sm-9">
                                    <select name="religion" class="form-control select2" required>
                                        <option value="">{{ _lang('Select One') }}</option>
                                        {{ create_option('picklists', 'value', 'value', old('religion'), ['type=' => 'Religion']) }}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{{ _lang('Phone') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{{ _lang('Email') }}</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{{ _lang('Blood Group') }}</label>
                                <div class="col-sm-9">

                                    <select name="blood" class="form-control select2">
                                        <option value=""> Select Blood Group</option>
                                        @foreach ($bloods as $item)
                                            <option value="{{ $item }}"> {{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">SL</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="sl" value="{{ old('sl') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{{ _lang('Address') }}</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="address" required>{{ old('address') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{{ _lang('Joining Date') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control datepicker" name="joining_date"
                                        value="{{ old('joining_date') }}">
                                </div>
                            </div>

                            <hr>
                            <div class="page-header">
                                <h4>Login Details</h4>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{{ _lang('Password') }}</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{{ _lang('Confirm Password') }}</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">{{ _lang('Profile Picture') }}</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control dropify" name="image"
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-5">
                                    <button type="submit" class="btn btn-info">Add Staff</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
