<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CapacitacionServiciosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('capacitacion_servicios')->delete();
        
        \DB::table('capacitacion_servicios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cliente_id' => 1,
                'user_id' => 6,
                'estado_id' => 1,
                'equipo_id' => 2,
                'fecha_recepcion' => '2007-10-08',
                'problema' => 'Nihil aut maiores iste sunt officia quo duis eos veritatis sit',
                'fecha_diagnostico' => '2021-11-09',
                'diagnostico' => 'Voluptatibus ex magna qui dolore ipsum ducimus aut quod assumenda minim quis dolore',
                'fecha_solucion' => '1992-03-16',
                'precio' => NULL,
                'created_at' => '2024-08-19 16:06:59',
                'updated_at' => '2024-08-21 08:54:41',
                'deleted_at' => '2024-08-21 08:54:41',
            ),
            1 => 
            array (
                'id' => 2,
                'cliente_id' => 2,
                'user_id' => 1,
                'estado_id' => 1,
                'equipo_id' => 2,
                'fecha_recepcion' => '2014-10-27',
                'problema' => 'Minus unde et vero explicabo Sunt proident culpa tempora quae sunt qui doloremque ad nihil possimus et voluptate impedit',
                'fecha_diagnostico' => '2004-12-03',
                'diagnostico' => 'Temporibus deserunt quam ut eiusmod harum autem mollit',
                'fecha_solucion' => '1983-08-25',
                'precio' => NULL,
                'created_at' => '2024-08-19 16:50:56',
                'updated_at' => '2024-08-21 08:37:39',
                'deleted_at' => '2024-08-21 08:37:39',
            ),
            2 => 
            array (
                'id' => 3,
                'cliente_id' => 1,
                'user_id' => 1,
                'estado_id' => 2,
                'equipo_id' => 2,
                'fecha_recepcion' => '1973-12-15',
                'problema' => 'Adipisicing excepturi in sequi rerum duis ut molestias et quibusdam omnis fuga Reprehenderit est',
                'fecha_diagnostico' => '1993-01-20',
                'diagnostico' => 'Quia autem architecto modi eius consequat Dolore sunt veritatis',
                'fecha_solucion' => '1972-12-13',
                'precio' => NULL,
                'created_at' => '2024-08-21 08:11:30',
                'updated_at' => '2024-08-21 08:37:45',
                'deleted_at' => '2024-08-21 08:37:45',
            ),
            3 => 
            array (
                'id' => 4,
                'cliente_id' => 1,
                'user_id' => 1,
                'estado_id' => 1,
                'equipo_id' => 1,
                'fecha_recepcion' => '1990-02-28',
                'problema' => 'Dignissimos tempor excepteur alias impedit ipsam consectetur quisquam',
                'fecha_diagnostico' => '1973-05-19',
                'diagnostico' => 'Minus est tempore et pariatur Porro eiusmod quam rerum',
                'fecha_solucion' => '1970-03-22',
                'precio' => NULL,
                'created_at' => '2024-08-21 08:31:18',
                'updated_at' => '2024-08-21 08:55:01',
                'deleted_at' => '2024-08-21 08:55:01',
            ),
            4 => 
            array (
                'id' => 5,
                'cliente_id' => 2,
                'user_id' => 1,
                'estado_id' => 2,
                'equipo_id' => 3,
                'fecha_recepcion' => '2016-01-15',
                'problema' => 'Non nisi magni pariatur Officia expedita voluptate aut sunt asperiores in incidunt officiis ducimus consequatur Soluta aspernatur ut repellendus',
                'fecha_diagnostico' => '1979-07-19',
                'diagnostico' => 'Asperiores laborum laudantium iusto autem suscipit aut id non consequatur veritatis esse quas rerum',
                'fecha_solucion' => '2018-09-08',
                'precio' => NULL,
                'created_at' => '2024-08-21 08:35:23',
                'updated_at' => '2024-08-21 08:54:57',
                'deleted_at' => '2024-08-21 08:54:57',
            ),
            5 => 
            array (
                'id' => 6,
                'cliente_id' => 2,
                'user_id' => 1,
                'estado_id' => 2,
                'equipo_id' => 3,
                'fecha_recepcion' => '2015-07-11',
                'problema' => 'Deleniti debitis impedit doloremque magni ullamco placeat pariatur Consequatur Reprehenderit natus voluptatibus consequat',
                'fecha_diagnostico' => '1992-03-18',
                'diagnostico' => 'Et sit sit culpa sed enim officiis do dignissimos reprehenderit ea maiores quia magna et nulla voluptatem',
                'fecha_solucion' => '1971-05-12',
                'precio' => NULL,
                'created_at' => '2024-08-21 08:38:02',
                'updated_at' => '2024-08-21 08:54:51',
                'deleted_at' => '2024-08-21 08:54:51',
            ),
            6 => 
            array (
                'id' => 7,
                'cliente_id' => 2,
                'user_id' => 1,
                'estado_id' => 1,
                'equipo_id' => 1,
                'fecha_recepcion' => '2003-01-13',
                'problema' => 'Ipsum eu maxime sit mollit odio eos exercitation voluptas culpa molestiae reprehenderit quod',
                'fecha_diagnostico' => '1991-03-21',
                'diagnostico' => 'Facere dolor eu et odio dicta quis et ut consequatur dolor dolor ex sunt',
                'fecha_solucion' => '1977-07-14',
                'precio' => NULL,
                'created_at' => '2024-08-21 08:42:11',
                'updated_at' => '2024-08-21 08:54:47',
                'deleted_at' => '2024-08-21 08:54:47',
            ),
            7 => 
            array (
                'id' => 8,
                'cliente_id' => 2,
                'user_id' => 1,
                'estado_id' => 2,
                'equipo_id' => 2,
                'fecha_recepcion' => '2007-02-06',
                'problema' => 'Sed laboriosam rerum excepturi aut occaecat sit neque excepteur sit excepturi qui',
                'fecha_diagnostico' => '1978-07-18',
                'diagnostico' => 'Iure ullam non suscipit qui laudantium corrupti quis quisquam assumenda aut fugit repellendus Voluptatum',
                'fecha_solucion' => '2019-07-10',
                'precio' => NULL,
                'created_at' => '2024-08-21 08:50:01',
                'updated_at' => '2024-08-21 08:54:44',
                'deleted_at' => '2024-08-21 08:54:44',
            ),
            8 => 
            array (
                'id' => 9,
                'cliente_id' => 1,
                'user_id' => 1,
                'estado_id' => 2,
                'equipo_id' => 3,
                'fecha_recepcion' => '1993-09-12',
                'problema' => 'Harum esse amet aliquip cum exercitationem quidem tempor impedit facere magnam ut deleniti omnis explicabo Sit',
                'fecha_diagnostico' => '1999-10-09',
                'diagnostico' => 'Labore quia alias laboris voluptate molestiae qui est quibusdam duis ut quidem voluptates',
                'fecha_solucion' => '1999-03-10',
                'precio' => '30.00',
                'created_at' => '2024-08-21 08:55:10',
                'updated_at' => '2024-08-21 08:59:37',
                'deleted_at' => '2024-08-21 08:59:37',
            ),
            9 => 
            array (
                'id' => 10,
                'cliente_id' => 1,
                'user_id' => 1,
                'estado_id' => 2,
                'equipo_id' => 1,
                'fecha_recepcion' => '2021-05-26',
                'problema' => 'Veritatis aut veniam eu adipisicing aut est rem accusantium neque et voluptates maxime tempore laborum reprehenderit',
                'fecha_diagnostico' => '2016-10-18',
                'diagnostico' => 'Amet beatae id quam corporis velit et illo molestiae facere velit eius tenetur recusandae Dolores qui',
                'fecha_solucion' => '2019-06-19',
                'precio' => NULL,
                'created_at' => '2024-08-21 08:57:49',
                'updated_at' => '2024-08-21 08:57:49',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'cliente_id' => 2,
                'user_id' => 1,
                'estado_id' => 1,
                'equipo_id' => 1,
                'fecha_recepcion' => '2002-10-13',
                'problema' => 'Molestiae ratione illum modi aut maxime et exercitationem quis repudiandae impedit',
                'fecha_diagnostico' => '1976-08-04',
                'diagnostico' => 'Officiis aut irure et incididunt assumenda ut eaque odit distinctio A',
                'fecha_solucion' => '1982-03-12',
                'precio' => '77.00',
                'created_at' => '2024-08-21 09:03:05',
                'updated_at' => '2024-08-21 09:03:05',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}