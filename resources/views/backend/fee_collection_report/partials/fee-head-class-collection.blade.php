@extends('layouts.pdf.index')
@section('styles')
    <link href="{{ asset('backend') }}/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: rgb(214, 212, 212)
        }

        header {
            height: 153px !important;
        }
    </style>
@endsection
@section('content-download')
    <div class="noprint print-download-buttons">
        @include('layouts.pdf.back-button')
        @include('layouts.pdf.download-button')
        @include('layouts.pdf.print-button')
    </div>
    <div style="clear: both;"></div>
@endsection
@section('content')
    @if (isset($feeDetails) && !empty($feeDetails) && count($feeDetails) > 0)
        <div class="card-border">
            @include('layouts.pdf.header')
            <div class="card-header py-3 d-flex justify-content-between">

                <div>
                    <p class="">Total Found: <strong>{{ count($feeDetails) ?? 0 }}</strong></p>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered data-table">
                    <thead>
                        <th>{{ _lang('Class') }}</th>
                        <th>{{ _lang('Semester Exam') }}</th>
                        <th>{{ _lang('Tuition Fees') }}</th>
                        <th>{{ _lang('Transport Fees') }}</th>
                        <th>{{ _lang('ICT Fees') }}</th>
                        <th>{{ _lang('Total Amount') }}</th>
                    </thead>
                    <tbody>
                        @foreach ($feeDetails as $data)
                            <tr>
                                <td class="text-right">{{ $data->class_name }}</td>
                                <td class="text-right">{{ $data->semester_exam }}</td>
                                <td class="text-right">{{ $data->tuition_fees }}</td>
                                <td class="text-right">{{ $data->transport_fees }}</td>
                                <td class="text-right">{{ $data->ict_fees }}</td>
                                <td class="text-right">{{ $data->total_amount }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection
