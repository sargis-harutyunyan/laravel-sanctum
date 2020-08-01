@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Create New Token') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('create-token') }}">
                        {{ csrf_field() }}
                        <select style="min-width: 200px" name="account">
                            <option>Please Select Account</option>
                            @foreach ($accounts as $account)
                                <option value="{{ $account->id }}">{{ $account->account }}</option>
                            @endforeach
                        </select>
                        <button style="margin-left: 25px">Create</button>
                    </form>
                </div>
            </div>
            <div style="margin-top: 25px" class="card">
                <div class="card-header">{{ __('Install Old Token') }}</div>
                <div class="card-body">
                    <form method="post" action="{{ route('install-old-token') }}">
                        {{ csrf_field() }}
                        <select style="min-width: 200px" name="account">
                            <option>Please Select Account</option>
                            @foreach ($accounts as $account)
                                <option value="{{ $account->id }}">{{ $account->account }}</option>
                            @endforeach
                        </select>
                        <label style="margin-left: 25px" for="old-token">Old Token</label>
                        <input id="old-token" name="old_token">
                        <button style="margin-left: 25px">Install</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
