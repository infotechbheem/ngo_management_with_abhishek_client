<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('dashboard');
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/forgot_password', function () {
    return view('forgot_password');
});
Route::get('/profile', function () {
    return view('profile');
});

// admin section start

// hr department section start
Route::get('/hr-department/team/team-member-registration', function () {
    $title="Team Registration";
    return view('hr-department.team.team-member-registration',compact('title'));
})->name('our-team.team-member-registration');
Route::get('/hr-department/team/all-team-member', function () {
    $title="All Team Member ";
    return view('hr-department.team.all-team-member',compact('title'));
})->name('our-team.all-team-member');
Route::get('/hr-department/team/team-member-details', function () {
    $title="Team Member details ";
    return view('hr-department.team.team-member-details',compact('title'));
})->name('our-team.team-member-details');
Route::get('/hr-department/team/update-team-member', function () {
    $title="Update Team Member ";
    return view('hr-department.team.update-team-member',compact('title'));
})->name('our-team.update-team-member');
// hr department section end

// attendance section start
Route::get('/hr-department/attendance/view-attendance', function () {
    $title="View Attendance ";
    return view('hr-department.attendance.view-attendance',compact('title'));
})->name('our-team.view-attendance');
// attendance section end

// admin department section start
Route::get('/admin-department/create-user-department', function () {
    $title="Create User Department";
    return view('admin-department.create-user-department',compact('title'));
})->name('create-user-department');

Route::get('/admin-department/view-user', function () {
    $title="View User";
    return view('admin-department.view-user',compact('title'));
})->name('view-user');
Route::get('/admin-department/user-access-control', function () {
    $title="User Access Control";
    return view('admin-department.user-access-control',compact('title'));
})->name('user-access-control');
Route::get('/admin-department/letter-box', function () {
    $title="Letter Box";
    return view('admin-department.letter-box',compact('title'));
})->name('letter-box');
// admin department section end

// admin section end






// program department section start
Route::get('/program-department/add-program', function () {
    $title="Add Program";
    return view('program-department.add-program',compact('title'));
})->name('our-program.add-program');
Route::get('/program-department/view-program', function () {
    $title="View Program";
    return view('program-department.view-program',compact('title'));
})->name('our-program.view-program');
Route::get('/program-department/view-program-details', function () {
    $title="View Program Details";
    return view('program-department.view-program-details',compact('title'));
})->name('our-program.view-program-details');
Route::get('/program-department/update-program-details', function () {
    $title="Update Program Details";
    return view('program-department.update-program-details',compact('title'));
})->name('our-program.update-program-details');
Route::get('/program-department/deliverabels', function () {
    $title="Plan & Deliverabels";
    return view('program-department.deliverabels',compact('title'));
})->name('our-program.deliverabels');
// program department section end

// auth program section start
Route::get('/auth/program-department/dashboard', function () {
    return view('auth.program-department.dashboard');
})->name('auth-program-department.dashboard');
Route::get('/auth/program-department/add-program', function () {
    $title="Add Program";
    return view('auth.program-department.add-program',compact('title'));
})->name('auth-program-department.add-program');
Route::get('/auth/program-department/view-program', function () {
    $title="View Program";
    return view('auth.program-department.view-program',compact('title'));
})->name('auth-program-department.view-program');

Route::get('/auth/program-department/deliverabels', function () {
    $title="Plan & deliverabels";
    return view('auth.program-department.deliverabels',compact('title'));
})->name('auth-program-department.deliverabels');
// auth program section end



// finannce department section start
// income section
Route::get('/finance-department/income/add-income', function () {
    $title="Add Income";
    return view('finance-department.income.add-income',compact('title'));
})->name('income.add-income');
Route::get('/finance-department/income/view-income', function () {
    $title="View Income";
    return view('finance-department.income.view-income',compact('title'));
})->name('income.view-income');
Route::get('/finance-department/income/income-details', function () {
    $title="Income Details";
    return view('finance-department.income.income-details',compact('title'));
})->name('income.income-details');
Route::get('/finance-department/income/update-income-details', function () {
    $title="Update Income Details";
    return view('finance-department.income.update-income-details',compact('title'));
})->name('income.update-income-details');
Route::get('/finance-department/income/total-income', function () {
    $title="Total Income";
    return view('finance-department.income.total-income',compact('title'));
})->name('income.total-income');
Route::get('/finance-department/income/invoice-setting', function () {
    $title="Invoice Setting";
    return view('finance-department.income.invoice-setting',compact('title'));
})->name('income.invoice-setting');

// expenditure section
Route::get('/finance-department/expenditure/add-expenditure', function () {
    $title="Add Expenditure";
    return view('finance-department.expenditure.add-expenditure',compact('title'));
})->name('expenditure.add-expenditure');
Route::get('/finance-department/expenditure/view-expenditure', function () {
    $title="View Expenditure";
    return view('finance-department.expenditure.view-expenditure',compact('title'));
})->name('expenditure.view-expenditure');
Route::get('/finance-department/expenditure/update-expenditure-details', function () {
    $title="Update Expenditure Details";
    return view('finance-department.expenditure.update-expenditure-details',compact('title'));
})->name('expenditure.update-expenditure-details');
Route::get('/finance-department/expenditure/view-expenditure-details', function () {
    $title="View Expenditure Details";
    return view('finance-department.expenditure.view-expenditure-details',compact('title'));
})->name('expenditure.view-expenditure-details');
Route::get('/finance-department/expenditure/total-expense', function () {
    $title="Total Expense";
    return view('finance-department.expenditure.total-expense',compact('title'));
})->name('expenditure.total-expense');
// finannce department section end



// auth  human resource dashboard section start
Route::get('/auth/human-resource/dashboard', function () {
    return view('auth.human-resource.dashboard');
})->name('auth-human-resource.dashboard');

Route::get('/auth/human-resource/team/team-member-registration', function () {
    $title="Team Member Registartion";
    return view('auth.human-resource.team.team-member-registration',compact('title'));
})->name('auth-human-resource.our-team.team-member-registration');
Route::get('/auth/human-resource/team/all-team-member', function () {
    $title="All Team Member ";
    return view('auth.human-resource.team.all-team-member',compact('title'));
})->name('auth-human-resource.our-team.all-team-member');
Route::get('/auth/human-resource/team/team-member-details', function () {
    $title="Team Member Deatils";
    return view('auth.human-resource.team.team-member-details',compact('title'));
})->name('auth-human-resource.our-team.team-member-details');
Route::get('/auth/human-resource/team/view-attendance', function () {
    $title="View Attendance";
    return view('auth.human-resource.team.view-attendance',compact('title'));
})->name('auth-human-resource.our-team.view-attendance');
// auth  human resource dashboard section end



// auth finace department dashboard section start
Route::get('/auth/finance/dashboard', function () {
    return view('auth.finance.dashboard');
})->name('auth-finance.dashboard');
Route::get('/auth/finance/expenditure/add-expenditure', function () {
    $title="Add Expenditure";
    return view('auth.finance.expenditure.add-expenditure',compact('title'));
})->name('auth-finance.expenditure.add-expenditure');
Route::get('/auth/finance/expenditure/view-expenditure', function () {
    $title="View Expenditure";
    return view('auth.finance.expenditure.view-expenditure',compact('title'));
})->name('auth-finance.expenditure.view-expenditure');
Route::get('/auth/finance/expenditure/total-expense', function () {
    $title="Total Expense";
    return view('auth.finance.expenditure.total-expense',compact('title'));
})->name('auth-finance.expenditure.total-expense');
// auth finace department dashboard section end
Route::get('/auth/finance/income/total-income', function () {
    $title="Total income";
    return view('auth.finance.income.total-income',compact('title'));
})->name('auth-finance.expenditure.total-income');