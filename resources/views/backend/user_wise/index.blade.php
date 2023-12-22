@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="panel-title">{{ _lang('User Wise Transaction Overview') }}</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('user-wise.index') }}" method="get">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label class="control-label">{{ _lang('From') }}</label>
                                        <input type="text" class="form-control datepicker" name="from_date"
                                            value="{{ $fromDate ?? old('from_date') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label class="control-label">{{ _lang('To') }}</label>
                                        <input type="text" class="form-control datepicker" name="to_date"
                                            value="{{ $toDate ?? old('to_date') }}">
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="form-group ">
                                    <div class="col-sm-5 mt-3 ml-5 p-3">
                                        <button type="submit" class="btn btn-info">{{ _lang('Search') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{-- @if (isset($transactions) && !empty($transactions) && count($transactions) > 0)
                <div class="card-border">
                    <div class="card-header py-3 d-flex justify-content-between">
                        <div>
                            <p> User Wise Transaction Between <strong>{{ $fromDate }}</strong> to
                                <strong>{{ $toDate }}</strong>
                            </p>
                        </div>

                        <div>
                            <p class="">Total Found - <strong>{{ count($transactions) }}</strong></p>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered data-table">
                            <thead>
                                <th>{{ _lang('User') }}</th>
                                <th>{{ _lang('Ledger') }}</th>
                                <th>{{ _lang('Debit Amount') }}</th>
                                <th>{{ _lang('Credit Amount') }}</th>
                            </thead>

                            <tbody>
                                @php
                                    $first = true;
                                    $totalDebit = 0;
                                    $totalCredit = 0;
                                @endphp
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        @if ($first)
                                            <td rowspan="{{ count($transactions) }}">{{ auth()->user()->id }}</td>
                                            @php $first = false; @endphp
                                        @endif
                                        <td>{{ $transaction->ledger_name }}</td>
                                        <td>{{ number_format($transaction->debit, 2) }}</td>
                                        <td>{{ number_format($transaction->credit, 2) }}</td>
                                        @php
                                            $totalDebit += $transaction->debit;
                                            $totalCredit += $transaction->credit;
                                        @endphp
                                    </tr>
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr class="bg-primary">
                                    <td colspan="2" class="text-right"> <strong
                                            class="text-white">{{ _lang('Total') }}</strong> </td>
                                    <td> <strong class="text-white">{{ number_format($totalDebit, 2) }} </strong> </td>
                                    <td> <strong class="text-white">{{ number_format($totalCredit, 2) }} </strong> </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            @endif --}}

        </div>
    </div>
@endsection
