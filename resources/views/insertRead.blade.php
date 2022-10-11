@extends("welcome")

@section("insertData")
<!-- Button trigger modal -->
<div class="d-flex h-100 w-100 justify-content-center align-items-center">
  <button type="button" class="btn btn-outline-danger fw-bold fs-2 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add Record
  </button>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Data Insert</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insertData" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-2">
            <input type="text" class="form-control" placeholder="Enter Product Name" name="ProductName">
          </div>
          <div class="mb-2">
            <input type="text" class="form-control" placeholder="Enter Product Price" name="ProductPrice">
          </div>
          <div class="mb-2">
            <textarea type="text" class="form-control" placeholder="Enter Product Description" name="ProductDescription"></textarea>
          </div>
          <div class="mb-2">
            <input type="file" class="form-control" name="ProductImage">
          </div>
          <button type="submit" class="btn btn-outline-danger fw-bold rounded-pill">Add Record</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

