<?php

use Illuminate\Database\Seeder;
use App\Cliente;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    private function seedCatalog(){
      /*DB::table('clientes')->delete();
      foreach( $this->arrayClientes as $cliente ) {
          $c = new Cliente;
          $c->nombre = $cliente['nombre'];
          $c->imagen = $cliente['imagen'];
          $c->fecha_nacimiento = $cliente['fecha_nacimiento'];
          $c->correo = $cliente['correo'];
          $c->save();
        }*/

    }
    private function seedUser(){
      DB::table('users')->delete();
      $u = new User;
      $u->name = 'enrique';
      $u->email = 'info@enrique.com';
      $u->password = bcrypt('1234');
      $u->save();

      $u2 = new User;
      $u2->name = 'pepe';
      $u2->email = 'info@pepe.com';
      $u2->password = bcrypt('1234');
      $u2->save();
    }
    public function run()
    {
      self::seedCatalog();
      $this->command->info('Tabla clientes inicializada con datos!');
      self::seedUser();
      $this->command->info('Tabla users inicializada con datos!');

    }
}
