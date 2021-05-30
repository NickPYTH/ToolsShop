<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class All extends Seeder
{
    public function run()
    {
        // Seed Tools
        $data = [
            'Name'=>'Молоток',
            'Description'=>'Для забивания гвоздей',
            'Price'=>100
        ];
        $this->db->table('Tools')->insert($data);
        $data = [
            'Name'=>'Электро-Молоток',
            'Description'=>'Для забивания гвоздей',
            'Price'=>200
        ];
        $this->db->table('Tools')->insert($data);
        $data = [
            'Name'=>'Дрель',
            'Description'=>'Для сверления',
            'Price'=>300
        ];
        $this->db->table('Tools')->insert($data);
        $data = [
            'Name'=>'Лопата',
            'Description'=>'Для вскапывания',
            'Price'=>90
        ];
        $this->db->table('Tools')->insert($data);
        $data = [
            'Name'=>'Отвертка',
            'Description'=>'Для закручивания шурупов',
            'Price'=>110
        ];
        $this->db->table('Tools')->insert($data);


        // Seed Reader
        
        $data = [
            'FIO'=>'Гуртовенко Андрей Викторович',
        ];
        $this->db->table('Client')->insert($data);
        $data = [
            'FIO'=>'Сиренко Николай Викторович',
        ];
        $this->db->table('Client')->insert($data);
        $data = [
            'FIO'=>'Куцуев Егор Игоревич',
        ];
        $this->db->table('Client')->insert($data);
        $data = [
            'FIO'=>'Бардаков Павел Дмитриевич',
        ];
        $this->db->table('Client')->insert($data);
        $data = [
            'FIO'=>'Алексеев Алексей Вадимович',
        ];
        $this->db->table('Client')->insert($data);
        $data = [
            'FIO'=>'Ахмитов Кирилл Русланович',
        ];
        $this->db->table('Client')->insert($data);
        
        // Seed order
        $data = [
            'id_tool'=>'1',
        ];
        $this->db->table('Order')->insert($data);
        $data = [
            'id_tool'=>'2',
        ];
        $this->db->table('Order')->insert($data);
        $data = [
            'id_tool'=>'3',
        ];
        $this->db->table('order')->insert($data);
        $data = [
            'id_tool'=>'4',
        ];
        $this->db->table('order')->insert($data);

        




        
    }
}