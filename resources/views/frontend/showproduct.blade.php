<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <a class="btn btn-info" href="{{ route('addproduct') }}">Add Product</a>
               <table class="table">
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php $sl=1; ?>
                    @foreach($products as $data) 
                    <tr>
                        <td>{{ $sl }}</td>
                        <td>{{ $data->pname }}</td>
                        <td>{{ $data->pdes }}</td>
                        <td>{{ $data->cat }}</td>
                        <td>{{ $data->scat }}</td>
                        <td>{{ $data->price }}</td>
                        <td>
                            @if($data->status==1)
                               <a href="{{ Route('status', $data->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-check"></i></a>
                            @else 
                            <a href="{{ Route('status', $data->id) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-check"></i></a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('editproduct',$data->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                        </td>
                        <td>
                            <button data-toggle="modal" data-target="#delete{{ $data->id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php $sl++; ?>

<!-- Modal -->
<div class="modal fade" id="delete{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure want to delete this product?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{ Route('delete', $data->id) }}" type="button" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>



                    @endforeach
               </table>
               

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
</body>
</html>