<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\CompaniesRepositoryInterface;

class DashboardController extends Controller
{
  private  $companiesRepository;

  public function __construct(CompaniesRepositoryInterface $companiesRepository)
  {
    $this->companiesRepository = $companiesRepository;
  }

  public function index()
  {
    return view('admin.index');
  }
  public function users()
  {
    return $this->companiesRepository->user_list();
  }
  public function blockUser($id){
    $this->companiesRepository->blockUser($id);
    return back();
  }
  public function showUserBusines($id){
    return $this->companiesRepository->showUserBusines($id);
  }
}
