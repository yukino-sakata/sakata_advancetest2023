<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    use HasFactory;
        protected $fillable = [
            'fullname',
            'gender',
            'email',
            'postcode',
            'address',
            'building_name',
            'opinion'
        ];

        public function scopeNameSearch($query, $search_name)
        {
            if (!empty($search_name)) {
            $query->where('fullname', 'like', "%{$search_name}%");
            }
        }

        public function scopeGenderSearch($query, $search_gender)
        {
            if (($search_gender != "全て")) {
            $query->where('gender', $search_gender);
            }
        }

        public function scopeDateFromSearch($query, $search_date__from){
            if(!empty($search_date__from)) {
            $query->where('created_at', '>=', "{$search_date__from}.00:00:00" );
            }
        }

        public function scopeDateToSearch($query, $search_date__to){
            if(!empty($search_date__to)) {
            $query->where('created_at', '<=', "{$search_date__to}.23:59:59");
            }
        }

        public function scopeEmailSearch($query, $search_email)
        {
            if (!empty($search_email)) {
            $query->where('email', 'like', "%{$search_email}%");
            }
        }

}
