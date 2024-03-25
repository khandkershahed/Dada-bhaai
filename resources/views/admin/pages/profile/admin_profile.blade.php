@extends('admin.admin_dashboard')
@section('admin')
    <!--begin::Toolbar-->
    <div class="toolbar mb-0">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">

            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Admin User Details
                </h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="javascript:;" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->

            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Filter menu-->
                <div class="m-0">


                </div>

                <!--begin::Primary button-->
                <a href="{{ route('employee.details') }}" class="btn btn-light-primary btn-sm">Employee Details</a>
                <!--end::Primary button-->

            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Layout-->
    <div class="d-flex flex-column flex-lg-row">

        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">

            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Summary-->
                    <!--begin::User Info-->
                    <div class="d-flex flex-center flex-column py-1">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-100px symbol-circle">
                            <img src="{{ !empty($profileData->photo) ? url('upload/admin_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                                alt="Admin" />
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Name-->
                        <a href="javascript:;"
                            class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1 mt-2">{{ $profileData->name }}</a>
                        <!--end::Name-->

                        <!--begin::Name-->
                        <a href="javascript:;"
                            class="fs-2 text-gray-400 text-hover-primary fw-bolder mb-1">{{ $profileData->email }}</a>
                        <!--end::Name-->

                        <!--begin::Position-->
                        <div class="mb-3">
                            <!--begin::Badge-->
                            <div class="badge badge-lg badge-light-danger d-inline">
                                <span class="text-dark me-2">Role:</span>
                                @foreach ($profileData->roles as $role)
                                    <span class="">{{ $role->name }}</span>
                                @endforeach
                            </div>
                            <!--begin::Badge-->
                        </div>
                        <!--end::Position-->

                        <!--begin::Position-->
                        <div class="mb-3">
                            <!--begin::Badge-->
                            <div class="badge badge-lg badge-light-primary d-inline">
                                {{ $profileData->company_name }}</div>
                            <!--begin::Badge-->
                        </div>
                        <!--end::Position-->



                    </div>
                    <!--end::User Info-->
                    <!--end::Summary-->
                    <!--begin::Details toggle-->
                    <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details"
                            role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details
                            <span class="ms-2 rotate-180">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>

                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit Admin details">

                            <a href="#" data-bs-toggle="modal" data-bs-target="#editModal"
                                class="btn btn-sm btn-light-primary">Edit</a>

                        </span>

                    </div>
                    <!--end::Details toggle-->
                    <div class="separator"></div>
                    <!--begin::Details content-->
                    <div id="kt_user_view_details" class="collapse show">
                        <div class="pb-5 fs-6">
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">Phone</div>
                            <div class="text-gray-600">{{ $profileData->phone }}</div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">Email</div>
                            <div class="text-gray-600">
                                <a href="#" class="text-gray-600 text-hover-primary">{{ $profileData->email }}</a>
                            </div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">Address</div>
                            <div class="text-gray-600">{{ $profileData->address }}
                            </div>
                            <!--begin::Details item-->

                            <!--begin::Details item-->
                            {{-- <div class="fw-bolder mt-5">Last Login</div>
                                        <div class="text-gray-600">25 Jul 2022, 2:40 pm</div> --}}
                            <!--begin::Details item-->
                        </div>
                    </div>
                    <!--end::Details content-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->

        </div>
        <!--end::Sidebar-->

        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-15">

            <div class="card">
                <div class="card-header">
                    <h1 class="pt-3">Social Media</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.account.update') }}" method="POST">
                        @csrf

                        <div class="form-group mb-2">
                            <label for="" class="mb-2">Facebook</label>
                            <input type="text" placeholder="off" name="facebook" value="{{ $profileData->facebook }}"
                                class="form-control">
                        </div>

                        <div class="form-group mb-2">
                            <label for="" class="mb-2">Youtube</label>
                            <input type="text" placeholder="off" name="youtube" value="{{ $profileData->youtube }}"
                                class="form-control">
                        </div>

                        <div class="form-group mb-2">
                            <label for="" class="mb-2">Twitter</label>
                            <input type="text" placeholder="off" name="twitter" value="{{ $profileData->twitter }}"
                                class="form-control">
                        </div>

                        <div class="form-group mb-2">
                            <label for="" class="mb-2">Linkedin</label>
                            <input type="text" placeholder="off" name="linkedin"
                                value="{{ $profileData->linkedin }}" class="form-control">
                        </div>

                        <div class="form-group mb-2 mt-4 float-end">
                            <label for=""></label>
                            <button type="submit" class="btn btn-light-primary btn-sm">Update</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <!--end::Content-->

    </div>
    <!--end::Layout-->

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label for="" class="mb-2">Name</label>
                                    <input type="text" placeholder="Name" name="name"
                                        value="{{ $profileData->name }}" class="form-control">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label for="" class="mb-2">UserName</label>
                                    <input type="text" placeholder="UserName" name="username"
                                        value="{{ $profileData->username }}" class="form-control">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group mb-2">
                                    <label for="" class="mb-2">Email</label>
                                    <input type="text" placeholder="Email" name="email"
                                        value="{{ $profileData->email }}" class="form-control">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group mb-2">
                                    <label for="" class="mb-2">Phone</label>
                                    <input type="text" placeholder="Phone" name="phone"
                                        value="{{ $profileData->phone }}" class="form-control">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group mb-2">
                                    <label for="" class="mb-2">Company Name</label>
                                    <input type="text" placeholder="Company Name" name="company_name"
                                        value="{{ $profileData->company_name }}" class="form-control">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group mb-2">
                                    <label for="" class="mb-2">Address</label>
                                    <input type="text" placeholder="Address" name="address"
                                        value="{{ $profileData->address }}" class="form-control">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group mb-2">
                                    <label for="" class="mb-2">Biometric Id</label>
                                    <input type="text" placeholder="Biometric Id" name="biometric_id"
                                        value="{{ $profileData->biometric_id }}" class="form-control">
                                </div>
                            </div>

                            <div class="col-4">
                                <!--begin::Input group-->
                                <div class="mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">
                                        <span>Update Image</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Allowed file types: png, jpg, jpeg."></i>
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Image input wrapper-->
                                    <div class="mt-1">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                            style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url(assets/media/avatars/300-6.jpg">
                                            </div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Edit-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="photo" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Edit-->
                                            <!--begin::Cancel-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                    </div>
                                    <!--end::Image input wrapper-->

                                </div>
                                <!--end::Input group-->
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="submit" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-primary btn-sm">Update Profile</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    
@endsection
