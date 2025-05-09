@extends('layouts.app')

@section('main_container')
    <link rel="stylesheet" href="{{ asset('asset/css/csr-company.css') }}">
    <style>
        .access-control-options {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .access-option {
            display: flex;
            align-items: center;
            background-color: #f9f9f9;
            padding: 10px 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .access-option input {
            margin-right: 10px;
        }

        .scr-form-group-btn {
            margin-top: 30px;
        }

        .scr-registration-form .scr-registration-heading {
            margin-top: 10px
        }
    </style>

    @include('components.breadcrumb')

    <div class="scr-registration-section">
        <div class="container p-0">
            <div class="csr-registration-main-heading">
                <p>Assign Access Control To User</p>
            </div>
            <form class="scr-registration-form">
                <h3 class="scr-registration-heading">User Department</h3>
                <div class="access-control-options">
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_user_type">
                        Create User Type
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="delete_user_type">
                        Delete User Type
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_department">
                        Create Department
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="delete_department">
                        Delete Department
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_user">
                        Create User
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="view_user">
                        View User
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="edit_user">
                        Edit User
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="change_user_status">
                        User Status Change
                    </label>
                </div>
                <h3 class="scr-registration-heading">CSR Profile Management</h3>
                <div class="access-control-options">
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_user_type">
                        CSR Registration
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="delete_user_type">
                        View CSR
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_department">
                        Edit CSR
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="delete_department">
                        CSR Status Change
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_user">
                        Create Project Category
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="view_user">
                        Delete Project Category
                    </label>

                </div>
                <h3 class="scr-registration-heading">CSR Project Management</h3>
                <div class="access-control-options">
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_user_type">
                        CSR Project Registration
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="delete_user_type">
                        CSR Project View
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_department">
                        CSR Project Expense (Beneficiary)
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="delete_department">
                        CSR Project Expense (Programs/Campaign)
                    </label>
                </div>
                <h3 class="scr-registration-heading">General Expense Management</h3>
                <div class="access-control-options">
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_user_type">
                        Add Administration Expense
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="delete_user_type">
                        View Administration Expense
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_department">
                        Add Campaign / Programs Expenses
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="delete_department">
                        View Campaign / Program Expenses
                    </label>
                </div>

                <h3 class="scr-registration-heading">Attendance Management</h3>
                <div class="access-control-options">
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_user_type">
                        Add Shift
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="delete_user_type">
                        Delete Shift
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_department">
                        Add Holiday
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="delete_department">
                        Delect Holiday
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="delete_department">
                        Add Attendance
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="delete_department">
                        View Attendance
                    </label>
                </div>
                <h3 class="scr-registration-heading">Salary Management</h3>
                <div class="access-control-options">
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_user_type">
                        Set Salary
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="delete_user_type">
                        View Salary
                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_department">
                        Salary Update
                    </label>
                </div>
                <h3 class="scr-registration-heading">General Settings</h3>
                <div class="access-control-options">
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="create_user_type">
                        Is Update Company Profile

                    </label>
                    <label class="access-option">
                        <input type="checkbox" name="permissions[]" value="delete_user_type">
                        Is Update Mail Configuration
                    </label>
                </div>

                <div class="scr-form-group-btn" style="justify-content: flex-start">
                    <button type="submit" class="scr-btn">Save Permission</button>
                </div>
            </form>
        </div>
    </div>
@endsection
