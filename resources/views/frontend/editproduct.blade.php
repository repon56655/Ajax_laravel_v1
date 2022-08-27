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
               <form action="{{ route('update',$product->id) }}" method="POST">
                @csrf
                <div class="form-group">
                        <label for="pname">Product Name</label>
                        <input value="{{ $product->pname }}" type="text" id="pname" class="form-control" name="pname">
                    </div>
                    
                    <div class="form-group">
                        <label for="pdes">Product Description</label>
                        <input value="{{ $product->pdes }}"  type="text" id="pdes" class="form-control" name="pdes">
                    </div>
                    <div class="form-group">
                        <label for="cat">Product Category</label>
                        <input value="{{ $product->cat }}"  type="text" id="cat" class="form-control" name="cat">
                    </div>
                    <div class="form-group">
                        <label for="scat">Product Subcategory</label>
                        <input value="{{ $product->scat }}"  type="text" id="scat" class="form-control" name="scat">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input value="{{ $product->price }}"  type="text" id="price" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label for="Status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="0">-----Select Status-----</option>
                            <option value="1" @if($product->status==1)selected @endif>Active</option>
                            <option value="2" @if($product->status==2)selected @endif>Inactive</option>
                        </select>
                    </div>
                    <button class="mt-3 btn btn-info">Update</button>
               </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>