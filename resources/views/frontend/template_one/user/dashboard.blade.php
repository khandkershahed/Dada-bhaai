@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-2 bg-light">
                        <ul class="nav nav-pills flex-column bg-light pt-3" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link user-dashboard-menu active" id="dashboard-tab" data-toggle="tab"
                                    href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true"><i
                                        class="fa fa-home pr-2"></i>Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link user-dashboard-menu" id="order-tab" data-toggle="tab" href="#order"
                                    role="tab" aria-controls="order" aria-selected="false"><i
                                        class="fa fa-shopping-cart pr-2"></i>Order Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link user-dashboard-menu" id="delivery-tab" data-toggle="tab" href="#delivery"
                                    role="tab" aria-controls="delivery" aria-selected="false"><i
                                        class="fa fa-truck pr-2"></i>Delivery Status</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link user-dashboard-menu" id="payment-tab" data-toggle="tab" href="#payment"
                                    role="tab" aria-controls="payment" aria-selected="false"><i
                                        class="fa fa-credit-card pr-2"></i>Payment Method</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link user-dashboard-menu" id="contact-tab" data-toggle="tab" href="#contact"
                                    role="tab" aria-controls="contact" aria-selected="false"><i
                                        class="fa fa-user pr-2"></i>Contact Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link user-dashboard-menu" id="security-tab" data-toggle="tab" href="#security"
                                    role="tab" aria-controls="security" aria-selected="false"><i
                                        class="fa fa-lock pr-2"></i>Security</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link user-dashboard-menu" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false"><i class="fa fa-sign-out pr-1"
                                        aria-hidden="true"></i> Log Out</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-md-10">
                        <div class="tab-content" id="myTabContent">
                            {{-- User Dashboard Content --}}
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel"
                                aria-labelledby="dashboard-tab">
                                <div>
                                    <div class="heading-2">
                                        <h3 class="title-3 fsz-15 grenadier-color">All Details</h3>
                                    </div>
                                    {{-- Dashboard Cards --}}
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5 class="font-weight-bold">(01)</h5>
                                                        <p class="grenadier-color">Total Orders</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5 class="font-weight-bold">(01)</h5>
                                                        <p class="grenadier-color">Wishlist</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5 class="font-weight-bold">(01)</h5>
                                                        <p class="grenadier-color">Ondemand</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Dashboard Cards End --}}
                                    {{-- Dashboard Links --}}
                                    <div class="heading-2 py-3">
                                        <h3 class="title-3 fsz-15 grenadier-color font-weight-bold">Quick Navigation</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="card">
                                                <div
                                                    class="card-header text-center font-weight-bold text-white grenadier-bg">
                                                    Order details
                                                </div>
                                                <div class="card-body">
                                                    <ul>
                                                        <li class="nav-link py-0"><a href=""
                                                                class="text-muted">Order History</a></li>
                                                        <li class="nav-link py-0"><a href=""
                                                                class="text-muted">Rfqs</a></li>
                                                        <li class="nav-link py-0"><a href=""
                                                                class="text-muted">Pre Book History</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="card">
                                                <div
                                                    class="card-header text-center font-weight-bold text-white grenadier-bg">
                                                    Delivery status
                                                </div>
                                                <div class="card-body">
                                                    <ul>
                                                        <li class="nav-link py-0"><a href=""
                                                                class="text-muted">Track order</a></li>
                                                        <li class="nav-link py-0"><a href=""
                                                                class="text-muted">Return My Order</a></li>
                                                        <li class="nav-link py-0"><a href=""
                                                                class="text-muted">Delivery Details</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="card">
                                                <div
                                                    class="card-header text-center font-weight-bold text-white grenadier-bg">
                                                    Products
                                                </div>
                                                <div class="card-body">
                                                    <ul>
                                                        <li class="nav-link py-0"><a href=""
                                                                class="text-muted">Wistlist</a></li>
                                                        <li class="nav-link py-0"><a href=""
                                                                class="text-muted">Love list</a></li>
                                                        <li class="nav-link py-0"><a href=""
                                                                class="text-muted">Save cart</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="card">
                                                <div
                                                    class="card-header text-center font-weight-bold text-white grenadier-bg">
                                                    Payment method
                                                </div>
                                                <div class="card-body">
                                                    <ul>
                                                        <li class="nav-link py-0"><a href=""
                                                                class="text-muted">Pending Payments</a></li>
                                                        <li class="nav-link py-0"><a href=""
                                                                class="text-muted">Payment Receipts</a></li>
                                                        <li class="nav-link py-0"><a href=""
                                                                class="text-muted">Payment History</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Dashboard Links End --}}
                                </div>
                            </div>
                            {{-- User Dashboard Content End --}}
                            {{-- Order Content --}}
                            <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
                                <div>
                                    <div class="heading-2">
                                        <h3 class="title-3 fsz-15 grenadier-color">Current Orders</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table table-striped  table-bordered">
                                                <thead class="grenadier-bg text-white">
                                                    <tr>
                                                        <th scope="col" class="text-center">Order No</th>
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col" class="text-center">Date</th>
                                                        <th scope="col" class="text-center">Status</th>
                                                        <th scope="col" class="text-center">Paid amount</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="text-center">1</th>
                                                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae,
                                                            inventore.</td>
                                                        <td class="text-center">30 May 2024</td>
                                                        <td class="text-center"><span
                                                                class="badge badge-primary">Active</span></td>
                                                        <td class="text-center">$1150</td>
                                                        <td>
                                                            <a href=""><i
                                                                    class="fa fa fa-pencil text-muted pr-2"></i></a>
                                                            <a href=""><i class="fa fa-trash text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="text-center">2</th>
                                                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae,
                                                            inventore.</td>
                                                        <td class="text-center">30 May 2024</td>
                                                        <td class="text-center"><span
                                                                class="badge badge-danger">Pending</span></td>
                                                        <td class="text-center">$1150</td>
                                                        <td>
                                                            <a href=""><i
                                                                    class="fa fa fa-pencil text-muted pr-2"></i></a>
                                                            <a href=""><i class="fa fa-trash text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- Dashboard Links End --}}
                                </div>
                            </div>
                            {{-- Order Content End --}}
                            {{-- delivery Content --}}
                            <div class="tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="delivery-tab">
                                <div>
                                    <div class="heading-2">
                                        <h3 class="title-3 fsz-15 grenadier-color">Delivery Status</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table table-striped  table-bordered">
                                                <thead class="grenadier-bg text-white">
                                                    <tr>
                                                        <th scope="col" class="text-center">Delivery No</th>
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col" class="text-center">Date</th>
                                                        <th scope="col" class="text-center">Status</th>
                                                        <th scope="col">Paid amount</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="text-center">1</th>
                                                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae,
                                                            inventore.</td>
                                                        <td>30 May 2024</td>
                                                        <td class="text-center"><span
                                                                class="badge badge-primary">Deliverd</span></td>
                                                        <td class="text-center">$1150</td>
                                                        <td>
                                                            <a href=""><i
                                                                    class="fa fa fa-pencil text-muted pr-2"></i></a>
                                                            <a href=""><i class="fa fa-trash text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="text-center">2</th>
                                                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae,
                                                            inventore.</td>
                                                        <td>30 May 2024</td>
                                                        <td class="text-center"><span class="badge badge-danger">Ready To
                                                                Delivery</span></td>
                                                        <td class="text-center">$1150</td>
                                                        <td>
                                                            <a href=""><i
                                                                    class="fa fa fa-pencil text-muted pr-2"></i></a>
                                                            <a href=""><i class="fa fa-trash text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- Dashboard Links End --}}
                                </div>
                            </div>
                            {{-- End --}}
                            {{-- payment Content --}}
                            <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                                <div>
                                    <div class="heading-2">
                                        <h3 class="title-3 fsz-15 grenadier-color">Pre Booked History</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table table-striped  table-bordered">
                                                <thead class="grenadier-bg text-white">
                                                    <tr>
                                                        <th scope="col" class="text-center">Order No</th>
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col">Payment Id</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col" class="text-center">Date</th>
                                                        <th scope="col" class="text-center">Status</th>
                                                        <th scope="col">Total amount</th>
                                                        <th scope="col">Paid amount</th>
                                                        <th scope="col" class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="text-center">1</th>
                                                        <td>Lorem ipsum dolor,</td>
                                                        <td class="text-center">#5564a658</td>
                                                        <td>Booked</td>
                                                        <td>30 May 2024</td>
                                                        <td class="text-center"><span
                                                                class="badge badge-primary">Deliverd</span></td>
                                                        <td class="text-center">$1150</td>
                                                        <td class="text-center">$1150</td>
                                                        <td class="text-center">
                                                            <a href=""><i
                                                                    class="fa fa fa-pencil text-muted pr-2"></i></a>
                                                            <a href=""><i class="fa fa-trash text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- Dashboard Links End --}}
                                </div>
                                <div>
                                    <div class="heading-2">
                                        <h3 class="title-3 fsz-15 grenadier-color">RFQ History</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table table-striped  table-bordered">
                                                <thead class="grenadier-bg text-white">
                                                    <tr>
                                                        <th scope="col" class="text-center">Order No</th>
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col">Payment Id</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col" class="text-center">Date</th>
                                                        <th scope="col" class="text-center">Status</th>
                                                        <th scope="col">Total amount</th>
                                                        <th scope="col">Paid amount</th>
                                                        <th scope="col" class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="text-center">1</th>
                                                        <td>Lorem ipsum dolor,</td>
                                                        <td class="text-center">#5564a658</td>
                                                        <td>RFQ</td>
                                                        <td>30 May 2024</td>
                                                        <td class="text-center"><span
                                                                class="badge badge-primary">Deliverd</span></td>
                                                        <td class="text-center">$1150</td>
                                                        <td class="text-center">$1150</td>
                                                        <td class="text-center">
                                                            <a href=""><i
                                                                    class="fa fa fa-pencil text-muted pr-2"></i></a>
                                                            <a href=""><i class="fa fa-trash text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- Dashboard Links End --}}
                                </div>
                            </div>
                            {{-- End --}}
                            {{-- payment Content --}}
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div>
                                    <div class="heading-2">
                                        <h3 class="title-3 fsz-15 grenadier-color">Change Your Personal Details</h3>
                                    </div>
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">User Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="" id=""
                                                        class="form-control" placeholder="" aria-describedby="helpId" />
                                                </div>

                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">User Email <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" name="" id=""
                                                        class="form-control" placeholder="" aria-describedby="helpId" />
                                                </div>

                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">User Phone <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="" id=""
                                                        class="form-control" placeholder="" aria-describedby="helpId" />
                                                </div>

                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Country <span
                                                            class="text-danger">*</span></label> <br>
                                                    <select name="select" id="select"
                                                        class="form-control form-control-sm w-100 py-0 my-0">
                                                        <option value="1">Bangladesh</option>
                                                        <option value="2">USA</option>
                                                        <option value="3">Canada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">City <span
                                                            class="text-danger">*</span></label> <br>
                                                    <select name="select" id="select"
                                                        class="form-control form-control-sm w-100 py-0 my-0">
                                                        <option value="1">Dhaka</option>
                                                        <option value="2">Barisal</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Zip Code <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="" id=""
                                                        class="form-control" placeholder="" aria-describedby="helpId" />
                                                </div>

                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Address 1 <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="" id=""
                                                        class="form-control" placeholder="" aria-describedby="helpId" />
                                                </div>

                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Address 2 <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="" id=""
                                                        class="form-control" placeholder="" aria-describedby="helpId" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button style="cursor: pointer"
                                                    class="grenadier-bg p-2 border-0 text-white px-4">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                    {{-- Dashboard Links End --}}
                                </div>
                                <div>
                                    <div class="heading-2 mt-4">
                                        <h3 class="title-3 fsz-15 grenadier-color">BILLING & Shipping DETAILS</h3>
                                    </div>
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">User Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="" id=""
                                                                class="form-control" placeholder=""
                                                                aria-describedby="helpId" />
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">User Email <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="email" name="" id=""
                                                                class="form-control" placeholder=""
                                                                aria-describedby="helpId" />
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">User Phone <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="" id=""
                                                                class="form-control" placeholder=""
                                                                aria-describedby="helpId" />
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Country <span
                                                                    class="text-danger">*</span></label> <br>
                                                            <select name="select" id="select"
                                                                class="form-control form-control-sm w-100 py-0 my-0">
                                                                <option value="1">Bangladesh</option>
                                                                <option value="2">USA</option>
                                                                <option value="3">Canada</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">City <span
                                                                    class="text-danger">*</span></label> <br>
                                                            <select name="select" id="select"
                                                                class="form-control form-control-sm w-100 py-0 my-0">
                                                                <option value="1">Dhaka</option>
                                                                <option value="2">Barisal</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Zip Code <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="" id=""
                                                                class="form-control" placeholder=""
                                                                aria-describedby="helpId" />
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Address 1 <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="" id=""
                                                                class="form-control" placeholder=""
                                                                aria-describedby="helpId" />
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Address 2 <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" name="" id=""
                                                                class="form-control" placeholder=""
                                                                aria-describedby="helpId" />
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button style="cursor: pointer"
                                                    class="grenadier-bg p-2 border-0 text-white px-4">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                    {{-- Dashboard Links End --}}
                                </div>
                            </div>
                            {{-- End --}}
                            {{-- Security Content --}}
                            <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                                <div>
                                    <div class="heading-2">
                                        <h3 class="title-3 fsz-15 grenadier-color"> Change Password</h3>
                                    </div>
                                    <form class="col-md-12 text-start" id="myForm" novalidate="">
                                        <div class="form-group">
                                            <label for="old_password">Old Password <span class="red-clr">*</span></label>
                                            <input type="password" name="old_password" placeholder="Enter Old Password"
                                                id="old_password" class="form-control" required="">
                                            <div class="error-message" id="old_password-error"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="new_password">New Password <span class="red-clr">*</span></label>
                                            <input type="password" name="new_password" placeholder="Enter New Password"
                                                id="new_password" class="form-control" required="">
                                            <div class="error-message" id="new_password-error"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm_password">Confirm Password <span
                                                    class="red-clr">*</span></label>
                                            <input type="password" name="confirm_password" id="confirm_password"
                                                placeholder="Enter Confirm Password" class="form-control" required="">
                                            <div class="error-message" id="confirm_password-error"></div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 text-center">
                                            <button style="cursor: pointer"
                                                class="grenadier-bg p-2 border-0 text-white px-4">
                                                Submit Password
                                            </button>
                                        </div>
                                    </form>
                                    {{-- Dashboard Links End --}}
                                </div>
                            </div>
                            {{-- End --}}
                        </div>
                    </div>
                    <!-- /.col-md-8 -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $("#select").select2({
            tags: true,
            // dropdownParent: $('#modal), // if select in modal
            theme: "bootstrap",
        });
    </script>
@endpush
