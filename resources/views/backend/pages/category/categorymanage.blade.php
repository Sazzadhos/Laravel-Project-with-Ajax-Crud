@extends('backend.mastertemplate.template')

@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Categories</h4>
            <p class="mg-b-0">Manage Your All Categories </p>
        </div>
    </div>

    <!-- Add Category Modal -->
    <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label for="">Category Name</label>
                <input type="text" class="name form-control" placeholder="Enter Category Name">
                <span class="text-danger nameError"></span>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea class="description form-control" id="" cols="30" rows="4"></textarea>
                <span class="text-danger descriptionError"></span>
            </div>
            <div class="form-group">
                <label for="">Tags</label>
                <input type="text" class="tag form-control" placeholder="Enter Tags Name">
                <span class="text-danger tagError"></span>
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <select class="form-control status">
                    <option value="1">-----Select Status-----</option>
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                </select>
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="addCategory btn btn-primary">Add Category</button>
        </div>
        </div>
    </div>
    </div>

    <!-- For Category Edit Modal -->
    <div class="modal fade" id="catEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <div class="modalMsg"></div>

        <div class="form-group">
                <label for="">Category Name</label>
                <input type="text" id="name" class="form-control" placeholder="Enter Category Name">
                <span class="text-danger nameError"></span>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea id="description" class="form-control" id="" cols="30" rows="4"></textarea>
                <span class="text-danger descriptionError"></span>
            </div>
            <div class="form-group">
                <label for="">Tags</label>
                <input type="text" id="tag" class="form-control" placeholder="Enter Tags Name">
                <span class="text-danger tagError"></span>
            </div>
            <div class="form-group">
                <!-- <label for="">id</label> -->
                <input type="hidden" id="id" class="form-control" placeholder="Enter Tags Name">
                <!-- <span class="text-danger tagError"></span> -->
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <select id="status" class="form-control">
                    <!-- <option value="1" id="stsVal"></option> -->
                    <!--<option value="1">-----Select Status-----</option> -->
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                </select>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class=" updated btn btn-primary">Update Category</button>
        </div>
        </div>
    </div>
    </div>

    <!-- DELETE MODAL -->
    <!-- Modal -->
<div class="modal fade" id="catDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Category Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      Are You Sure ?


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-primary">Delete Category</button>
      </div>
    </div>
  </div>
</div>
    <!-- DELETE MODAL END -->



    <div class="br-pagebody">
        <div class="row">
            <div class="col-sm-12">
                <div class="card p-3 shadow-base">
                    <div class="row d-flex justify-content-between px-3">
                        <h4>All Categories</h4>
                        <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#addCategory"><i class="fa fa-plus px-1"></i>Add Category</button>
                    </div>
                    <div class="msg"></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#Sl</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Tags</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        
                        <!--<tr>
                            <td>01</td>
                            <td>Man</td>
                            <td>This is Man category</td>
                            <td>Man,Choldren</td>
                            <td>1</td>
                            <td>
                                <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash" data-toggle="modal" data-target=""></i></button>
                            </td>
                        </tr> -->
                        
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

@endsection