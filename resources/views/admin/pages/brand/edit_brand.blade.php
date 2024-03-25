@extends('admin.admin_dashboard')
@section('admin')
    <!--begin::Content-->

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Brand</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Edit Brand <span class="ms-2 badge bg-danger"></span></li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">

                    <a href="{{ route('all.brand') }}" class="btn btn-primary btn-sm">Back</a>

                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Post-->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('update.brand') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" name="id" value="{{ $brand->id }}">
                            {{-- <input type="hidden" name="old_image" value="{{ $brand->brand_image }}"> --}}

                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-12">

                                        <div class="form-group mb-3">
                                            <label for="" class="mb-2">Brand Name</label>
                                            <input type="text" name="brand_name"
                                                class="form-control @error('brand_name') is-invalid @enderror"
                                                placeholder="Brand Name" value="{{ $brand->brand_name }}" autocomplete="off">
                                            @error('brand_name')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="" class="mb-2">Description</label>
                                            <textarea id="kt_docs_tinymce_basic" name="description" class="form-control" cols="10" rows="10">{{ $brand->description }}</textarea>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="" class="mb-2">Image</label>
                                            <input type="file" autocomplete="off" id="image" name="brand_image"
                                                class="form-control mb-2 @error('brand_image') is-invalid @enderror">

                                            @error('brand_image')
                                                <span class="text-danger mb-2"> {{ $message }} </span>
                                            @enderror

                                            <img src="{{ asset('storage/brand/'.$brand->brand_image) }}" style="width:90px" id="showImage"
                                                alt="">
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-sm">Update Brand</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Post-->

    </div>

    <!--end::Content-->

    <!-- Button trigger modal -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    
@endsection
