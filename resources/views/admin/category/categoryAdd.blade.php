@extends('admin.layout.layout')
@section("content")
@inject('metrics', 'App\Http\Controllers\admin\CategoryController')

<div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0"></h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Category Form</li>
        </ul>
    </div>

    <div class="row gy-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Default Inputs</h6>
                </div>
                <div class="card-body">

                    <form action="{{ route('categoryaddSave') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-6">
                                <label class="form-label">Category Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Image </label>
                                <input class="form-control form-control-lg" name="images" type="file">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description </label>
                                <input type="text" class="form-control flex-grow-1" name="description" placeholder="+1 (555) 253-08515">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary-600">Submit</button>
                            </div>
                        </div>
</form>
                </div>
            </div><!-- card end -->

        </div>


    </div>

</div>
@endsection