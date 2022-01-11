@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-head">
                File Upload
            </div>
            <div class="card-body">
                <form action="{{route('upload.uploadfile')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="file">File</label>
                        <input type="file" name="file" id="file" class="form-control"/>
                    </div>
                    <button type="submit" class="btn btn-success">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection('content')