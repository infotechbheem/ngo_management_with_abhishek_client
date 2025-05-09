@extends('layouts.app')

@section('main_container')
    <link rel="stylesheet" href="{{ asset('asset/css/csr-company.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/income.css') }}">

    @include('components.breadcrumb')

    <div class="scr-registration-section">
        <div class="containers p-0">
            <div class="csr-registration-main-heading">
                <p>All Registered Users</p>
            </div>

            <div class="grant-list grant-list-govt ">
                <div class="grant-searchbar">
                    <input type="text" id="grant-search-bar" class="form-control grant-search" placeholder="Search..."
                        onkeyup="searchGrants()">
                </div>
                <div class="grant-table-scroll">
                    <table class="table grant-table" id="grantTable">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Mobile Number</th>
                                <th>Email </th>
                                <th>Designation</th>
                                <th>Department </th>
                                <th>Status </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ab1334</td>
                                <td>Jphn Abrahm</td>
                                <td>123456788</td>
                                <td>abc@gmail.com</td>
                                <td>Developer</td>
                                <td>Hr Department</td>
                                <td class="active"><span>Active</span></td>
                                <td>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ab1334</td>
                                <td>Jphn Abrahm</td>
                                <td>123456788</td>
                                <td>abc@gmail.com</td>
                                <td>Developer</td>
                                <td>Hr Department</td>
                                <td class="inactive"><span>Inactive</span></td>
                                <td>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ab1334</td>
                                <td>Jphn Abrahm</td>
                                <td>123456788</td>
                                <td>abc@gmail.com</td>
                                <td>Developer</td>
                                <td>Hr Department</td>
                                <td class="inactive"><span>Inactive</span></td>
                                <td>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ab1334</td>
                                <td>Jphn Abrahm</td>
                                <td>123456788</td>
                                <td>abc@gmail.com</td>
                                <td>Developer</td>
                                <td>Hr Department</td>
                                <td class="inactive"><span>Inactive</span></td>
                                <td>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Ab1334</td>
                                <td>Jphn Abrahm</td>
                                <td>123456788</td>
                                <td>abc@gmail.com</td>
                                <td>Developer</td>
                                <td>Hr Department</td>
                                <td class="inactive"><span>Inactive</span></td>
                                <td>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Ab1334</td>
                                <td>Jphn Abrahm</td>
                                <td>123456788</td>
                                <td>abc@gmail.com</td>
                                <td>Developer</td>
                                <td>Hr Department</td>
                                <td class="active"><span>Active</span></td>
                                <td>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Ab1334</td>
                                <td>Jphn Abrahm</td>
                                <td>123456788</td>
                                <td>abc@gmail.com</td>
                                <td>Developer</td>
                                <td>Hr Department</td>
                                <td class="inactive"><span>Inactive</span></td>
                                <td>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Ab1334</td>
                                <td>Jphn Abrahm</td>
                                <td>123456788</td>
                                <td>abc@gmail.com</td>
                                <td>Developer</td>
                                <td>Hr Department</td>
                                <td class="inactive"><span>Inactive</span></td>
                                <td>

                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>

                                    <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>

                <div class="grant-pagination-container">
                    <div class="grant-pagination-info">Showing 1 to 4 of 20 records</div>
                    <div class="grant-pagination">
                        <button class="btn btn-light pagination-btn" disabled>Previous</button>
                        <div class="pagination-numbers">
                            <button class="pagination-number active">1</button>
                            <button class="pagination-number">2</button>
                        </div>
                        <button class="btn btn-light pagination-btn">Next</button>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- Edit User Modal -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog "> <!-- Optional: modal-lg for wider modal -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="userName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="userName" placeholder="Enter name">
                            </div>
                            <div class="col-md-6">
                                <label for="userMobile" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" id="userMobile"
                                    placeholder="Enter mobile number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="userEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="userEmail" placeholder="Enter email">
                            </div>
                            <div class="col-md-6">
                                <label for="userDesignation" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="userDesignation"
                                    placeholder="Enter designation">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="userDepartment" class="form-label">Department</label>
                                <input type="text" class="form-control" id="userDepartment"
                                    placeholder="Enter department">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
