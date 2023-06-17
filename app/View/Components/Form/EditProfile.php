<?php

namespace App\View\Components\Form;

use App\Models\Views\VUser;
use App\Models\Provinsi;
use Illuminate\View\Component;
use App\Models\KotaAdministrasi;
use Illuminate\Support\Facades\Auth;

class EditProfile extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $provinsi = Provinsi::all();
        $kota_administrasi = KotaAdministrasi::all();
        $user = VUser::where('id', Auth::user()->id)->first();

        return view('components.form.edit-profile', compact('provinsi','kota_administrasi','user'));
    }
}
