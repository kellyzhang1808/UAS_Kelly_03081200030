@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">formpegawai {{ $formpegawai->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/formpegawai') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/formpegawai/' . $formpegawai->id . '/edit') }}" title="Edit formpegawai"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/formpegawai' . '/' . $formpegawai->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete formpegawai" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $formpegawai->id }}</td>
                                    </tr>
                                    <tr><th> Namapegawai </th><td> {{ $formpegawai->Namapegawai }} </td></tr><tr><th> Usia </th><td> {{ $formpegawai->Usia }} </td></tr><tr><th> Jeniskelamin </th><td> {{ $formpegawai->Jeniskelamin }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
