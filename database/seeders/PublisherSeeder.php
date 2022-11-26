<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::factory()->create([
            'name'=>'Sourcebooks',
            'address'=>'​Naperville, IL 60567-4410',
            'phone'=>'(800) 432-7444',
            'email'=>'info@sourcebooks.com',
            'image'=>'/storage/publisherLogo/sourceBooks.jpg',
        ]);
        Publisher::factory()->create([
            'name'=>'Severn House Publishers',
            'address'=>'Eardley House, 4 Uxbridge Street, London, W8 7SY',
            'phone'=>'+44 0207 467 0840',
            'email'=>'info@severnhouse.com',
            'image'=>'/storage/publisherLogo/severnHouse.jpg',
        ]);
        Publisher::factory()->create([
            'name'=>'Text Publishing',
            'address'=>'Wurundjeri Country, Level 6, Royal Bank Chambers',
            'phone'=>'+613 8610 4500',
            'email'=>'info@textpublishing.com',
            'image'=>'/storage/publisherLogo/textPublishing.jpg',
        ]);
        Publisher::factory()->create([
            'name'=>'Lantana Publishing',
            'address'=>'Lantana Publishing, Clavier House, 21 Fifth Road',
            'phone'=>'+613 8774 9199',
            'email'=>'info@lantanapublishing.com',
            'image'=>'/storage/publisherLogo/latana.jpg',
        ]);
        Publisher::factory()->create([
            'name'=>'PT. Gramedia',
            'address'=>'Jl. Palmerah Barat 29-37 Jakarta - 10270',
            'phone'=>'021-53650110',
            'email'=>'contact.b2b@gramedia.com',
            'image'=>'/storage/publisherLogo/gramedia.jpg',
        ]);
    }
}
