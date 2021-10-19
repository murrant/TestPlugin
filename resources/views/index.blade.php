@extends('layouts.librenmsv1')

@section('title', trans('test-plugin::text-plugin.title'))

@section('content')
    <div style="font-size: large; margin: 2em 1em">This is a test plugin.</div>

    <div style="margin: 2em">
        Running on LibreNMS {{ \LibreNMS\Util\Version::VERSION }}
    </div>

    <div style="margin: 2em">
        You ({{ Auth::user()->realname }}) @admin are @else are not @endadmin  and admin!
    </div>
@endsection
