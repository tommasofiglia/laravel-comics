@extends('layouts.dashboard')

@section('content')
  <div class="container">

            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Questo è il pannello di amministrazione del sito.') }}
                </div>
            </div>
            
  </div>
@endsection
