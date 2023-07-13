
<!DOCTYPE html>
<html lang="en">
<head>
<title>Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row" style="margin:20px">
    <div class="col-12">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <a href="{{ url('jurusan/create')  }}" class="btn btn-danger btn-sm" title="Add New jurusan">
                    Tambah Data
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>#</th>
                                <th>Jurusan</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jurusan as $item)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $item->jurusan}}</td>

                                <td>
                                    <a href="{{url('/jurusan/' .$item->id)}}" title="View"><button class="btn btn-info btn-sm "><i aria-hidden="true"></i><i>View</i></button></a>
                                    <a href="{{url('/jurusan/' .$item->id . '/edit/')}}" title="Edit"><button class="btn btn-primary btn-sm"><i aria-hidden="true"></i><i>Edit</i></button></a>
                                    <form method="post" action="{{ url('/jurusan/'  . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn-danger btn-sm" onclick="return confirm('Hapus')"><i aria-hidden="true"></i>Hapus</button></a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>

