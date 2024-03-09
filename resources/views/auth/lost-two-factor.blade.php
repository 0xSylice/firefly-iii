@extends('layout.v2.error')
@section('content')
<div class="row">
    <div class="col">
        <h1><a href="{{ route('index') }}"><strong>Firefly</strong> III</a></h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <h2>{{ __('firefly.two_factor_lost_header') }}</h2>
    </div>
</div>

<div class="row">
    <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
        <p>
            {{ trans('firefly.two_factor_lost_intro') }}
        </p>
        <ul>
            <li>
                {!! trans('firefly.two_factor_lost_fix_self') !!}
            </li>
            <li>
                {!! trans('firefly.two_factor_lost_fix_owner', ['site_owner' => $siteOwner])  !!}
            </li>
        </ul>
    </div>
</div>
@endsection