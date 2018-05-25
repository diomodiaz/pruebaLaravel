<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Producto;
        $producto->nombre = ('Arroz Diana');
        $producto->valorUnitario = (1500);
        $producto->codigo = ('ASD1');
        $producto->save();

        $this->command->info('Tabla de productos inicializada');
    }
}
