@extends('backend.home')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Bordered Table</h3>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  Add Category
</button>
      </div>
      <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{URL::to('/')}}/home/item/store">
                {{csrf_field()}}
                <!-- <input type="" name="_token" value="{{csrf_token()}}"> -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" id="category_id" name="category_id">
                      @foreach($categories as $cat)
                      <option value="{{$cat->id}}">{{$cat->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter item name">
                  </div>
                  <div class="form-group">
                    <label for="sale_price">sale_price</label>
                    <input type="text" class="form-control" id="sale_price" name="sale_price" placeholder="Enter item sale_price">
                  </div>
                </div>
                  
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>                  
            <tr>
              <th style="width: 10px">SN</th>
              <th>Name</th>
              <th>Created By</th>
              <th>Created At</th>
              <th>sale_price</th>
              <th>Category</th>
              <th style="width: 80px">Label</th>
            </tr>
          </thead>
          <tbody>
            @foreach($items as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td><a href="{{URL::to('/')}}/home/item/{{$item->id}}">{{$item->name}}</a></td>
              <td><a href="{{URL::to('/')}}/home/item/{{$item->id}}">{{$item->sale_price}}</a>  </td>
              <td>{{date('D, j M Y', strtotime($item->created_at))}}</td>
              <td>{{$item->categoryname->name}}</td>
              <td>S | E | D</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /.col -->
  <!-- /.col -->
</div>
@endsection
