@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">tentangpegawai {{ $tentangpegawai->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/tentangpegawai') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/tentangpegawai/' . $tentangpegawai->id . '/edit') }}" title="Edit tentangpegawai"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/tentangpegawai' . '/' . $tentangpegawai->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete tentangpegawai" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tentangpegawai->id }}</td>
                                    </tr>
                                    <tr><th> Namapegawai </th><td> {{ $tentangpegawai->Namapegawai }} </td></tr><tr><th> Usia </th><td> {{ $tentangpegawai->Usia }} </td></tr><tr><th> Jeniskelamin </th><td> {{ $tentangpegawai->Jeniskelamin }} </td></tr><tr><th> Divisi </th><td> {{ $tentangpegawai->Divisi }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
