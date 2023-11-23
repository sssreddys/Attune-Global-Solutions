<?php


use App\Livewire\ContractorPage;

use App\Livewire\Customers;

use App\Livewire\Home;
use App\Livewire\HrLogin;
use App\Livewire\EmpRegister;
use App\Livewire\EmpAccountDetails;
use App\Livewire\EmpFamilyDetails;
use App\Livewire\EmployeePage;
use App\Livewire\HomePage;

use App\Livewire\VendorPage;
use App\Livewire\EmployeeListPage;
use App\Livewire\PurchaseOrder;
use App\Livewire\SalesOrPurchaseOrders;
use App\Livewire\TimeSheetDisplay;
use App\Livewire\VendorRegister;
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

Route::middleware(['checkAuth'])->group(function () {
    Route::get('/HrLogin', HrLogin::class)->name('hr-login');
});
Route::middleware(['auth:hr'])->group(function () {
    Route::get('/', HomePage::class);
    Route::get('/emp-register', EmpRegister::class)->name('emp-register');
    Route::get('/emp-account-details', EmpAccountDetails::class)->name('emp-account-details');
    Route::get('/emp-family-details', EmpFamilyDetails::class)->name('emp-family-details');
    Route::get('/employee-page', EmployeePage::class)->name('employee-page');
    Route::get('/contractor-page', ContractorPage::class)->name('contractor-page');
    Route::get('/vendor-page', VendorPage::class)->name('vendor-page');
    Route::get('/vendor-register', VendorRegister::class)->name('vendor-register');
    Route::get('/customers', Customers::class);
    Route::get('/sales-or-purchase-orders', SalesOrPurchaseOrders::class);
    Route::get('/time-sheet-display', TimeSheetDisplay::class)->name('time-sheet-display');
    Route::get('/purchase-order', PurchaseOrder::class)->name('purchase-order');
    Route::get('/employee-list-page', EmployeeListPage::class)->name('employee-list-page');
});
