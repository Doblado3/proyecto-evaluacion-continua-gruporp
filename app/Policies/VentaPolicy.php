<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Venta;
use Illuminate\Auth\Access\Response;

class VentaPolicy
{

    private function esVentaPropiaDeFarmacia(User $user,Venta $venta):bool
    {
        return $user->es_farmaceutico && $venta->farmacia_id == $user->farmaceutico->farmacia->id;
    }
    private function esVentaPropiaDePaciente(User $user,Venta $venta):bool
    {
        return $user->es_paciente && $venta->paciente_id == $user->paciente->id;
    }
    private function esVentaPropia(User $user,Venta $venta):bool
    {
        return $this->esCitaPropiaDeFarmacia($user,$venta) || $this->esCitaPropiaDePaciente($user,$venta);
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Venta $venta): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->es_farmaceutico || $user->es_administrador;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Venta $venta): bool
    {
        return $user->es_farmaceutico || $user->es_administrador;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Venta $venta): bool
    {
        return $user->es_farmaceutico;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Venta $venta): bool
    {
        return $user->es_farmaceutico;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Venta $venta): bool
    {
        return $user->es_farmaceutico;
    }
}
