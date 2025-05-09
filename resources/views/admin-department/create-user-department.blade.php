@extends('layouts.app')

@section('main_container')
    <link rel="stylesheet" href="{{ asset('asset/css/admin-department.css') }}">

    @include('components.breadcrumb')
    <div class="user_create_department">

        <div class="container p-0">
            <div class="user-create-section mt-4">
                <!-- Top Buttons -->
                <div class="user-create-section-btn">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserTypeModal">Create
                        User
                        Type</button>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createDepartmentModal">Create
                        Department</button>
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#assignDepartmentModal">CSR Partners
                    </button>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#viewAllModal">Partner
                        Organisation</button>

                </div>
                <!-- Tables Section -->
                <div class="table-section-main">
                    <div class="cards">
                        <div class="card-body p-0">
                            <table class="table table-bordered mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>SN</th>
                                        <th>User Type</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Admin</td>
                                        <td>2025-04-01</td>
                                        <td><button class="btn btn-danger btn-sm">Delete</button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Finance</td>
                                        <td>2025-04-10</td>
                                        <td><button class="btn btn-danger btn-sm">Delete</button></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>finace Officer</td>
                                        <td>2025-04-15</td>
                                        <td><button class="btn btn-danger btn-sm">Delete</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Right Table: Departments -->
                    <div class="cards">

                        <div class="card-body p-0">
                            <table class="table table-bordered mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>SN</th>
                                        <th>Department</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>HR</td>
                                        <td>2025-04-01</td>
                                        <td><button class="btn btn-danger btn-sm">Delete</button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Finance</td>
                                        <td>2025-04-05</td>
                                        <td><button class="btn btn-danger btn-sm">Delete</button></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Academics</td>
                                        <td>2025-04-12</td>
                                        <td><button class="btn btn-danger btn-sm">Delete</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="table-section-main-head">
                    <div class="table-section-main">
                        <div class="cards" style="width:100%">
                            <div class="card-body p-0">
                                <table class="table table-bordered mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>SN</th>
                                            <th>Organisation Name</th>
                                            <th>Authorised Person Name</th>
                                            <th> Designation</th>
                                            <th> Mobile Number</th>
                                            <th> Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ngo Partner</td>
                                            <td>Admin</td>
                                            <td>Developer</td>
                                            <td>2342536478</td>
                                            <td>abc@gmail.com</td>
                                            <td><button class="btn btn-danger btn-sm">Delete</button></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ngo Partner</td>
                                            <td>Finance</td>
                                            <td>Developer</td>
                                            <td>2342536478</td>
                                            <td>abc@gmail.com</td>
                                            <td><button class="btn btn-danger btn-sm">Delete</button></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ngo Partner</td>
                                            <td>finace Officer</td>
                                            <td>Developer</td>
                                            <td>2342536478</td>
                                            <td>abc@gmail.com</td>
                                            <td><button class="btn btn-danger btn-sm">Delete</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Modals -->

                <!-- Create User Type Modal -->
                <div class="modal fade" id="createUserTypeModal" tabindex="-1" aria-labelledby="createUserTypeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Create User Type</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                                        class="fa-solid fa-xmark"></i></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label>User Type Name</label>
                                        <input type="text" class="form-control" placeholder="Enter user type">
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Create Department Modal -->
                <div class="modal fade" id="createDepartmentModal" tabindex="-1"
                    aria-labelledby="createDepartmentModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Create Department</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                                        class="fa-solid fa-xmark"></i></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label>Department Name</label>
                                        <input type="text" class="form-control" placeholder="Enter department name">
                                    </div>
                                    <button class="btn btn-success " type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Assign Department Modal -->
                <div class="modal fade" id="assignDepartmentModal" tabindex="-1"
                    aria-labelledby="assignDepartmentModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">CSR Partner</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                                        class="fa-solid fa-xmark"></i></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="modal-body-main mb-3">
                                        <div class="input-section">
                                            <label>Authorised Person Name</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter authorised name">
                                        </div>
                                        <div class="input-section">
                                            <label>Designation</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter designation name">
                                        </div>
                                    </div>
                                    <div class="modal-body-main mb-3">
                                        <div class="input-section">
                                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" placeholder="Enter mobile number">
                                        </div>
                                        <div class="input-section">
                                            <label>Authorised Email Id</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter  authorised email">
                                        </div>
                                    </div>
                                    <div class="modal-body-main mb-3">
                                        <div class="input-section">
                                            <label>Create Password</label>
                                            <input type="password" class="form-control" placeholder="Enter password">
                                        </div>
                                    </div>



                                    <button class="btn btn-primary " type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View All Modal -->
                <div class="modal fade" id="viewAllModal" tabindex="-1" aria-labelledby="viewAllModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Partner Organisation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                                        class="fa-solid fa-xmark"></i></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="modal-body-main mb-3">
                                        <div class="input-section">
                                            <label>Authorised Person Name</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter authorised name">
                                        </div>
                                        <div class="input-section">
                                            <label>Designation</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter designation name">
                                        </div>
                                    </div>
                                    <div class="modal-body-main mb-3">
                                        <div class="input-section">
                                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" placeholder="Enter mobile number">
                                        </div>
                                        <div class="input-section">
                                            <label>Authorised Email Id</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter  authorised email">
                                        </div>
                                    </div>
                                    <div class="modal-body-main mb-3">
                                        <div class="input-section">
                                            <label>Create Password</label>
                                            <input type="password" class="form-control" placeholder="Enter password">
                                        </div>
                                    </div>



                                    <button class="btn btn-primary " type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Bootstrap 5 CSS -->


    <!-- Bootstrap 5 JS Bundle (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
@endsection
