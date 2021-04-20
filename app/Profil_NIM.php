<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil_NIM extends Model
{
    protected $table = 'profil__n_i_m_s';
    protected $fillable = ['nim', 'nama', 'alamat', 'bidang_peminatan', 'email', 'telp'];
}
