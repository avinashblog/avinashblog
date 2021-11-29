<?php 

namespace App\Repositories;

use App\Models\Company;
use App\Models\WalletCustomer;

class CompaniesRepository implements CompaniesRepositoryInterface{
    public function user_list(){
        $user =  Company::with('trans', 'rank_name')->where('customer_sponser_id', '!=', 'NANO')->get();
        return  view('admin.users', ['users' => $user]);
    }
    public function blockUser( $id = null)
    {
        $company = Company::findOrFail($id);
        $company->block= $company->block == 1 ? 0 : 1;
        $company->save();
    }
    public function showUserBusines( $id = null)
    {
        $bussiness = WalletCustomer::where('company_id',$id)->get();
        return view('admin.show_user_bussiness', ['bussiness' => $bussiness]);
    }
}