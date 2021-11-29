<?php 

namespace App\Repositories;

interface CompaniesRepositoryInterface{
    public function user_list();
    public function blockUser($id);
    public function showUserBusines($id);
}