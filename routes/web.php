<?php

use App\Http\Controllers\Web\Home\HomeController;
use App\Http\Controllers\Web\OtherTransactionController;
use App\Http\Controllers\Web\FeesController;
use App\Http\Controllers\Web\SalaryController;
use App\Http\Controllers\Web\TeacherController;

use App\Http\Controllers\Web\FinanceController;
use App\Http\Controllers\Web\VideoController;

use App\Http\Controllers\Web\PaymentHistoryController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\SpecialApprovalsController;
use App\Http\Controllers\Web\CreateAccountController;
use App\Http\Controllers\Web\EmployeeController;
use App\Http\Controllers\Web\StudentTalentController;
use App\Http\Controllers\Web\NoticeBoardController;
use App\Http\Controllers\Web\StudentApprovalController;

use App\Http\Controllers\Web\NoteAndPaperController;

use App\Http\Controllers\Web\ItemShopController;

use App\Http\Controllers\Web\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [AuthController::class, 'loginView'])->name('web.index');
Route::get('/login', [AuthController::class, 'loginView'])->name('web.login');
Route::post('/login', [AuthController::class, 'login'])->name('api.admins.login');

// profile
Route::middleware(['check.authorization'])->group(function () {
Route::get('/home', [HomeController::class, 'index'])->name('web.home');
Route::get('/my-profile', [ProfileController::class, 'myProfile'])->name('web.profile');
Route::post('/logout', [AuthController::class, 'logout'])->name('web.logout');





// Fees
Route::get('/fees/view', [FeesController::class, 'feesView'])->name('web.fees.view');
Route::get('/fees/class-pending', [FeesController::class, 'feesClassPending'])->name('web.fees.class_pending');
Route::get('/fees/class-fees', [FeesController::class, 'classFees'])->name('web.fees.class_fess');

Route::get('/fees/cash', [FeesController::class, 'classFeesCash'])->name('web.fees.class_fess_cash');
Route::get('/fees/pos', [FeesController::class, 'classFeesPos'])->name('web.fees.class_fess_Pos');
Route::get('/fees/card-payment', [FeesController::class, 'classFeesCardPayment'])->name('web.fees.class_fess_card_payment');
Route::get('/fees/error-payment', [FeesController::class, 'classFeesErrorPayment'])->name('web.fees.class_fess_error_payment');
Route::get('/fees/bank-payment', [FeesController::class, 'classFeesBankPayment'])->name('web.fees.class_fess_bank_payment');
Route::get('/fees/payment-history', [FeesController::class, 'paymentHistory'])->name('web.fees.payment_history');



// OtherTransactionsController
Route::get('/other_transactions/view', [OtherTransactionController::class, 'View'])->name('web.other_transactions.view');
Route::get('/other_transactions/add-transaction',
[OtherTransactionController::class, 'addTransaction'])->name('web.other_transactions.add_transaction');
Route::get('/other_transactions/cash',
[OtherTransactionController::class, 'cash'])->name('web.other_transactions.cash');
Route::get('/other_transactions/all_payment',
[OtherTransactionController::class, 'allPayment'])->name('web.other_transactions.all_payment');





// Video Recordings
Route::get('/video/view', [VideoController::class, 'videoView'])->name('web.video.view');
Route::get('/video/student-lms', [VideoController::class, 'videoStudentLms'])->name('web.video.student_lms');
Route::get('/video/teacher-lms', [VideoController::class, 'videoTeacherLms'])->name('web.video.teacher_lms');
Route::get('/video/admin-lms', [VideoController::class, 'videoAdminLms'])->name('web.video.admin_lms');
Route::get('/video/super-admin-lms', [VideoController::class, 'videoSuperAdminLms'])->name('web.video.super_admin_lms');


// NoticeBoardController
Route::get('/notice-board', [NoticeBoardController::class, 'noticeBoard'])->name('web.notice.board');
Route::get('/birthday-list', [NoticeBoardController::class, 'birthdayList'])->name('web.notice.birthday_list');





// AuthController


Route::get('/forgot_password', [AuthController::class, 'forgotPassword'])->name('web.forgot_password');


// SpecialApprovalsController
Route::get('/special-approvals', [SpecialApprovalsController::class, 'specialApprovals'])->name('web.special_approvals');
Route::get('/create-account', [CreateAccountController::class, 'createAccount'])->name('web.create_account');

// PaymentHistory
Route::get('/payment-history-month', [PaymentHistoryController::class, 'paymentHistoryMonth'])->name('web.payment.month');
Route::get('/payment-history-list', [PaymentHistoryController::class, 'paymentHistoryList'])->name('web.payment.list');

// NoteAndPaperController
Route::get('/note-paper-ansewer', [NoteAndPaperController::class, 'notePaper'])->name('web.note-paper.ansewer');
Route::get('/note-paper-ansewer-list', [NoteAndPaperController::class, 'notePaperList'])->name('web.note-paper.list');






// cash balance Controller
Route::get('/cash-balance', [SalaryController::class, 'cashBalance'])->name('web.salary.cash_balance');
Route::get('/my-salary', [SalaryController::class, 'mySalary'])->name('web.salary.my_salary');
Route::get('/salary-compare', [SalaryController::class, 'compareSalary'])->name('web.salary.compare_salary');
Route::get('/my-leaves', [SalaryController::class, 'myLeaves'])->name('web.salary.my_leaves');





// ItemShopController
Route::get('/item-shop-view', [ItemShopController::class, 'itemShopView'])->name('web.item-shop-view');
Route::get('/item-shop', [ItemShopController::class, 'itemShop'])->name('web.item-shop');
Route::get('/single-item', [ItemShopController::class, 'singleItem'])->name('web.single-item');
Route::get('/order-history', [ItemShopController::class, 'orderHistory'])->name('web.order-history');
Route::get('/order-cart', [ItemShopController::class, 'orderCart'])->name('web.order-cart');


Route::get('/add-order', [ItemShopController::class, 'addOrder'])->name('web.add-order');
Route::get('/pending-items', [ItemShopController::class, 'pendingItems'])->name('web.pending-items');
Route::get('/pending-delivery', [ItemShopController::class, 'pendingDelivery'])->name('web.pending-delivery');
Route::get('/pending-pickUp', [ItemShopController::class, 'pendingPickUp'])->name('web.pending-pickUp');


Route::get('/pending-dispatched', [ItemShopController::class, 'pendingDispatched'])->name('web.pending-dispatched');
Route::get('/dispatched', [ItemShopController::class, 'dispatched'])->name('web.dispatched');
Route::get('/item-offers', [ItemShopController::class, 'itemOffers'])->name('web.items-offers');
Route::get('/add-items', [ItemShopController::class, 'addItems'])->name('web.add-items');
Route::get('/add-offers', [ItemShopController::class, 'addOffers'])->name('web.add-offers');

Route::get('/shop-payments', [ItemShopController::class, 'shopPayments'])->name('web.shop-payments');
Route::get('/view-analytics', [ItemShopController::class, 'viewAnalytics'])->name('web.view-analytics');




// STUDENT TALENTS
Route::get('/student-talents', [StudentTalentController::class, 'studentTalent'])->name('web.student.talents');
Route::get('/student-details', [StudentTalentController::class, 'studentDetails'])->name('web.student.details');
Route::get('/inactive-accounts', [StudentTalentController::class, 'inactiveAccounts'])->name('web.inactive.accounts');
Route::get('/non-paid-accounts', [StudentTalentController::class, 'nonPaidAccounts'])->name('web.non_paid.accounts');
Route::get('/scholarship-details', [StudentTalentController::class, 'scholarshipDetails'])->name('web.scholarship.details');
Route::get('/add-scholarship', [StudentTalentController::class, 'scholarshipAdd'])->name('web.scholarship.add');

Route::get('/rec-access', [StudentTalentController::class, 'recAccess'])->name('web.rec.access');
Route::get('/add-rec-access', [StudentTalentController::class, 'AddRecAccess'])->name('web.rec.add_rec');







// Teachers paper
Route::get('/teachers-section', [TeacherController::class, 'teachersSection'])->name('web.teachers.section');
Route::get('/class-issues', [TeacherController::class, 'classIssues'])->name('web.teachers.class_issues');
Route::get('/class-issues-view', [TeacherController::class, 'classIssuesView'])->name('web.teachers.class_issues_view');
Route::get('/video-issues', [TeacherController::class, 'videoIssues'])->name('web.teachers.video_issues');
Route::get('/video-view', [TeacherController::class, 'videoIssuesView'])->name('web.teachers.video_issues_view');
Route::get('/teacher-reviews', [TeacherController::class, 'teacherReviews'])->name('web.teachers.teacher_views');
Route::get('/class-video-report', [TeacherController::class, 'classAndVideoReport'])->name('web.teachers.class_video_report');
Route::get('/class-video-analysing', [TeacherController::class, 'classAndVideoAnalysing'])->name('web.teachers.class_video_analysing');
Route::get('/class-video-summery', [TeacherController::class, 'classAndVideoSummery'])->name('web.teachers.class_video_summery');
Route::get('/video-time-tables', [TeacherController::class, 'videoTimeTables'])->name('web.teachers.video_time_tables');
Route::get('/gradewise-time-tables', [TeacherController::class, 'gradewiseTimeTables'])->name('web.teachers.gradewise_time_tables');
Route::get('/teacher-payment', [TeacherController::class, 'teacherPayment'])->name('web.teachers.teacher_payment');
Route::get('/teacher-payment-view', [TeacherController::class, 'teacherPaymentView'])->name('web.teachers.teacher_payment_view');
Route::get('/payment-analysing', [TeacherController::class, 'paymentAnalysing'])->name('web.teachers.payment_analysing');
Route::get('/payment-analysing-graph', [TeacherController::class, 'paymentAnalysingGraph'])->name('web.teachers.payment_analysing_graph');
Route::get('/our-teacher', [TeacherController::class, 'ourTeacher'])->name('web.teachers.our_teacher');

Route::get('/schedule-class', [TeacherController::class, 'scheduleClass'])->name('web.teachers.schedule_class');
Route::get('/schedule-class-view', [TeacherController::class, 'scheduleClassView'])->name('web.teachers.schedule_class_view');

Route::get('/add-grade', [TeacherController::class, 'addGrade'])->name('web.teachers.add_grade');
Route::get('/add-subject', [TeacherController::class, 'addSubject'])->name('web.teachers.add_subject');


// FinanceController
Route::get('/finance-list', [FinanceController::class, 'financeList'])->name('web.finance.list');
Route::get('/finance-detailed', [FinanceController::class, 'financeDetailed'])->name('web.finance.detailed');
Route::get('/finance-summery', [FinanceController::class, 'financeSummery'])->name('web.finance.summery');


Route::get('/tax-payments', [FinanceController::class, 'taxPayments'])->name('web.finance.tax_payments');
Route::get('/with-holding-tax', [FinanceController::class, 'withHoldingTax'])->name('web.finance.holding_tax');
Route::get('/with-holding-tax-view', [FinanceController::class, 'withHoldingTaxView'])->name('web.finance.holding_tax_view');

Route::get('/income-tax', [FinanceController::class, 'incomeTax'])->name('web.finance.income_tax');
Route::get('/income-tax-view', [FinanceController::class, 'incomeTaxView'])->name('web.finance.income_tax_view');


Route::get('/main-cash', [FinanceController::class, 'mainCash'])->name('web.finance.main_cash');
Route::get('/cash-balance', [FinanceController::class, 'cashBalance'])->name('web.finance.cash_balance');
Route::get('/deposit-cash-bank', [FinanceController::class, 'depositCashBank'])->name('web.finance.deposit_cash_bank');
Route::get('/bank-cash', [FinanceController::class, 'bankCash'])->name('web.finance.bank_cash');
Route::get('/bank-cash', [FinanceController::class, 'bankCash'])->name('web.finance.bank_cash');
Route::get('/petty-cash', [FinanceController::class, 'pettyCash'])->name('web.finance.petty_cash');
Route::get('/petty-cash-view', [FinanceController::class, 'pettyCashSingle'])->name('web.finance.petty_cash_view');
Route::get('/income-expences-category', [FinanceController::class, 'incomeExpenceCategory'])->name('web.finance.income_expences_category');


// EmployeeController
Route::get('/all-employees', [EmployeeController::class, 'allEmployee'])->name('web.employees.all_list');
Route::get('/employees-details', [EmployeeController::class, 'employeeDetails'])->name('web.employees.details');
Route::get('/employees-salary', [EmployeeController::class, 'employeeSalary'])->name('web.employees.salary');
Route::get('/employees-salary-view', [EmployeeController::class, 'employeeSalaryView'])->name('web.employees.salary_view');
Route::get('/employees-attendance', [EmployeeController::class, 'employeeAttendance'])->name('web.employees.attendance');
Route::get('/employees-attendance-view', [EmployeeController::class, 'employeeAttendanceView'])->name('web.employees.attendance_view');

Route::get('/employees-leaves', [EmployeeController::class, 'employeeLeaves'])->name('web.employees.leaves');
Route::get('/employees-leaves-check', [EmployeeController::class, 'employeeLeavesCheck'])->name('web.employees.leaves_check');
Route::get('/employees-pending-leaves', [EmployeeController::class, 'employeePendingLeaves'])->name('web.employees.pending_leaves');


// StudentApprovalController
Route::get('/student-approvals', [StudentApprovalController::class, 'studentApproval'])->name('web.student_approvals.all_list');
 
Route::get('/grade-requests', [StudentApprovalController::class, 'gradeRequests'])
->name('web.student_approvals.grade_requests');
Route::get('/free-requests', [StudentApprovalController::class, 'freeRequests'])
->name('web.student_approvals.free_requests');

});