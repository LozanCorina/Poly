<div class="modal-header">
    <h5 class="modal-title" id="edit">edit</h5>
    <button class="btn btn-primary btn-close" type="button" data-dismiss="modal" aria-label="Close"
            data-bs-original-title="" title=""></button>
</div>
<form action="{{route('subCategory.update', $subCategory->id)}}" method="post">
    @csrf
    @method('patch')
<div class="modal-body">
<div class="form-group">
    <div class="col-form-label"> Name</div>
    <input type="text" class="form-control" name="name" value="{{$subCategory->name}}">
</div>
</div>
<div class="modal-footer">
    <button class="btn btn-danger" type="button" data-dismiss="modal" data-bs-original-title=""
            title="">close</button>
    <button type="submit" class="btn btn-primary store-subCategory">Edit Category</button>
</div>
</form>
