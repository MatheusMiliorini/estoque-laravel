<?php

use Illuminate\Database\Seeder;
use Iluminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ProdutoTableSeeder::class);
    }
}

class ProdutoTableSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)',
        array('Geladeira', 2, 10.00,'Side by Side com gelo na porta'));
        
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)',
        array('Fogão', 5, 120.00,'Painel automático e forno elétrico'));
        
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)',
        array('Microondas', 1, 50.00,'Manda SMS quando termina de esquentar'));
    }
}
