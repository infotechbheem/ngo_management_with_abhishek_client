@extends('layouts.app')

@section('main_container')
    <link rel="stylesheet" href="{{ asset('asset/css/admin-department.css') }}">

    @include('components.breadcrumb')
    <div class="user_create_department">

        <div class="containers p-0">
            <div class="user-create-section mt-4">
                <!-- Top Buttons -->
                <div class="user-create-section-btn d-flex align-items-center"
                    style="justify-content: space-between; padding: 10px 20px;">
                    <!-- Search Bar -->
                    <div class="search-box">
                        <input type="text" class="form-control" placeholder="Search Letter Box" style="width: 250px;">
                    </div>

                    <!-- Add Button -->
                    <button class="btn" style="background-color: #323F2F; color:white" data-bs-toggle="modal"
                        data-bs-target="#viewAllModal">
                        Add Letter Box
                    </button>
                </div>


                <div class="table-section-main-head">
                    <div class="table-section-main">
                        <div class="cards" style="width:100%">
                            <div class="card-body p-0">
                                <table class="table table-bordered mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>SN</th>
                                            <th>Receipt Type</th>
                                            <th>Date</th>
                                            <th>Sender Name</th>
                                            <th>Receiver Name</th>
                                            <th>Letter Number</th>
                                            <th>Type Of Letter</th>
                                            <th>Subject</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>wqewrtehrjt</td>
                                            <td>20/04/2025</td>
                                            <td>John Abraham</td>
                                            <td>John Doe</td>
                                            <td>454645</td>
                                            <td>Offer Letter</td>
                                            <td>lkjhgcvjbhjknlkl</td>
                                            <td>jhgffghhl</td>
                                            <td>
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#viewAllModal">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>wqewrtehrjt</td>
                                            <td>20/04/2025</td>
                                            <td>John Abraham</td>
                                            <td>John Doe</td>
                                            <td>454645</td>
                                            <td>Offer Letter</td>
                                            <td>lkjhgcvjbhjknlkl</td>
                                            <td>jhgffghhl</td>
                                            <td>
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#viewAllModal">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>wqewrtehrjt</td>
                                            <td>20/04/2025</td>
                                            <td>John Abraham</td>
                                            <td>John Doe</td>
                                            <td>454645</td>
                                            <td>Offer Letter</td>
                                            <td>lkjhgcvjbhjknlkl</td>
                                            <td>jhgffghhl</td>
                                            <td>
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#viewAllModal">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>wqewrtehrjt</td>
                                            <td>20/04/2025</td>
                                            <td>John Abraham</td>
                                            <td>John Doe</td>
                                            <td>454645</td>
                                            <td>Offer Letter</td>
                                            <td>lkjhgcvjbhjknlkl</td>
                                            <td>jhgffghhl</td>
                                            <td>
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#viewAllModal">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>wqewrtehrjt</td>
                                            <td>20/04/2025</td>
                                            <td>John Abraham</td>
                                            <td>John Doe</td>
                                            <td>454645</td>
                                            <td>Offer Letter</td>
                                            <td>lkjhgcvjbhjknlkl</td>
                                            <td>jhgffghhl</td>
                                            <td>
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#viewAllModal">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>wqewrtehrjt</td>
                                            <td>20/04/2025</td>
                                            <td>John Abraham</td>
                                            <td>John Doe</td>
                                            <td>454645</td>
                                            <td>Offer Letter</td>
                                            <td>lkjhgcvjbhjknlkl</td>
                                            <td>jhgffghhl</td>
                                            <td>
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#viewAllModal">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="table-footer">
                        <span id="showing-text">Showing 1 of 2</span>
                        <div class="pagination" id="pagination">
                            <button onclick="changePage(currentPage - 1)">Previous</button>
                            <!-- Page numbers will be populated by JavaScript -->
                            <button onclick="changePage(currentPage + 1)">Next</button>
                        </div>
                    </div>

                </div>
                <!-- Modals -->

                <!-- View All Modal -->
                <div class="modal fade" id="viewAllModal" tabindex="-1" aria-labelledby="viewAllModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Letter Box</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                                        class="fa-solid fa-xmark"></i></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="modal-body-main mb-3">
                                        <div class="input-section">
                                            <label>Receipt Type <span style="color: red">*</span></label>
                                            <select class="form-control">
                                                <option value="" disabled selected>Select receipt type</option>
                                                <option value="received">Received</option>
                                                <option value="dispatch">Dispatch</option>

                                            </select>
                                        </div>

                                        <div class="input-section">
                                            <label>Date <span style="color: red">*</span></label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-body-main mb-3">
                                        <div class="input-section">
                                            <label>Letter Box <span style="color: red">*</span></label>
                                            <select class="form-control">
                                                <option value="" disabled selected>Select letter box</option>
                                                <option value="sender">Sender</option>
                                                <option value="receiver">Receiver</option>

                                            </select>
                                        </div>
                                        <div class="input-section">
                                            <label>Name <span style="color: red">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter name">
                                        </div>
                                    </div>
                                    <div class="modal-body-main mb-3">
                                        <div class="input-section">
                                            <label>Department</label>
                                            <input type="text" class="form-control" placeholder="Enter department">
                                        </div>
                                        <div class="input-section">
                                            <label>Letter No./Reference No. <span style="color: red">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter letter number">
                                        </div>

                                    </div>
                                    <div class="modal-body-main mb-3">
                                        <div class="input-section">
                                            <label>Type Of Letter <span style="color: red">*</span></label>
                                            <select class="form-control">
                                                <option value="" disabled selected>Select Letter type</option>
                                                <option value="offer_letter">Offer Letter</option>
                                                <option value="appointment_letter">Appointment Letter</option>
                                                <option value="office_order">Office Order</option>
                                                <option value="govt_notice">Govt. Notice</option>
                                                <option value="letter_recomndation">Letter Of Recomndation</option>
                                                <option value="cover_letter">Cover Letter</option>
                                                <option value="resignation_letter">Resignation Letter</option>
                                                <option value="annoucement_letter">Annoucement Letter</option>
                                                <option value="complaint_letter">Complaint Letter</option>
                                                <option value="thank_you_letter">Thank You Letter</option>
                                                <option value="interview_follow_up_letter">Interview Follow Up Letter
                                                </option>
                                                <option value="termination_letter">Termination Letters</option>
                                                <option value="other">Other</option>

                                            </select>
                                        </div>
                                        <div class="input-section">
                                            <label>Subject <span style="color: red">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter subject">
                                        </div>
                                    </div>
                                    <div class="modal-body-main mb-3">
                                        <div class="input-section" style="width:100%">
                                            <label>Description <span style="color: red">*</span></label>
                                            <textarea class="form-control" name="" id="" rows="3"></textarea>
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
