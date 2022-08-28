<?php

namespace App\Observers;

use App\Models\Mahasiswa;

class MahasiswaObserver
{
    /**
     * Handle the Mahasiswa "created" event.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return void
     */
    public function created(Mahasiswa $mahasiswa)
    {
        $nim = 'ABC-' . str_pad($mahasiswa->id, 5, '0', STR_PAD_LEFT);
        $mahasiswa->update(['nim' => $nim]);
    }

    /**
     * Handle the Mahasiswa "updated" event.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return void
     */
    public function updated(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Handle the Mahasiswa "deleted" event.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return void
     */
    public function deleted(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Handle the Mahasiswa "restored" event.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return void
     */
    public function restored(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Handle the Mahasiswa "force deleted" event.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return void
     */
    public function forceDeleted(Mahasiswa $mahasiswa)
    {
        //
    }
}
