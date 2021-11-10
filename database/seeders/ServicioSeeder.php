<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::create([
            'nombre' => 'Liquidaciones',
            'descripcion' => 'La liquidación es el conjunto de operaciones, que son necesarias y precisas para que después de realizada la disolución en la que se da fin a los negocios pendientes, pagar el pasivo, cobrar los créditos y reducir a dinero todos los bienes de la sociedad, para repartirlo entre los socios.

            La realización ante notario será de importancia para dar certeza jurídica en instrumento de escritura pública ante la fe pública del notario público, así como para satisfacer su posterior inscripción en el registro público de comercio.',
        ]);

        Servicio::factory(10)->create();
    }
}
