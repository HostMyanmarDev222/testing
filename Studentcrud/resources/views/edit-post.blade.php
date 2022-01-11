<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>DB Crud operation</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Edit Post
                    </div>
                    <div class="card-body">
                        @if(Session::has('post_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_updated')}}
                            </div>
                        @endif
                        <form action="{{route('post.update')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$post->id}}">
                        <div class="form-group">
                            <label for="title">Post title</label>
                            <input type="text" name="title" value="{{$post->title}}" class="form-control">
                            
                        </div>
                        <div class="form-group">
                        <label for="body" class="form-label">Post Description</label>
                            <textarea class="form-control" name="body" rows="3">{{$post->body}}</textarea>
                        </div>
                        <input type="submit" class="btn btn-success" value="Update"/>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>