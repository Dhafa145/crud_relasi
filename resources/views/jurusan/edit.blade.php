<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                <div class="card-header">Edit Page</div>
                    <div class="card-body">


                        <form action="{{ url('jurusan/' .$jurusan->id) }}" method="post">

                            @csrf

                            <div class="form-group">
                            {!! csrf_field() !!}
                              @method("PATCH")

                              <input type="text" class="form-control"  name="jurusan" value="{{ $jurusan->jurusan }}" placeholder="Masukkan Nomor jurusan">



                            </div>


                            <button type="submit" class="btn btn-md btn-primary">Update</button> <br> <br> <br>
                            <a href="{{ url('jurusan')  }}" class="btn btn-success btn-sm" title="Kembali jurusan">Kembali</a>


                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>
