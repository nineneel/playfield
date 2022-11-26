<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DetailProduct;
use App\Models\Facility;
use App\Models\Photo;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductTag;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()->create([
        //     'name' => 'Kepin',
        //     'email' => 'kepin@email.com',
        //     'role' => 'user',
        //     'image' => "galery-image/gMsqLJxwWgthzy6xRJPp4GJzwY8nKhDp607cAiET.jpg",
        // ]);

        // User::factory()->create([
        //     'name' => 'Lala',
        //     'email' => 'lala@email.com',
        //     'role' => 'user',
        //     'image' => "galery-image/gMsqLJxwWgthzy6xRJPp4GJzwY8nKhDp607cAiET.jpg",
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => 'admin',
        ]);

        // User::factory(4)->create();

        Facility::create([
            'facility_name' => "Activity Room",
            'image' => 'facility-image/AX4LxvDVL8yUkm5JMzVKmI1nBIEEjpAFs1OvD32D.jpg'
        ]);

        Facility::create([
            'facility_name' => "Kitchen",
            'image' => 'facility-image/gxGiGEhnPDeE4oaKXS8vYTuHsVor5ObVVvg6VZsS.jpg'
        ]);

        Facility::create([
            'facility_name' => "Waiting Longue",
            'image' => 'facility-image/HHaCG6CWukhdROTxb2xLI4WqVmFxPklE2CN7w407.jpg'
        ]);

        Facility::create([
            'facility_name' => "Activity Room",
            'image' => 'facility-image/HHaCG6CWukhdROTxb2xLI4WqVmFxPklE2CN7w407.jpg'
        ]);

        Facility::create([
            'facility_name' => "Play Room",
            'image' => 'facility-image/rFxTwhQF7jkTxwgk0KQodoyyWGMeioY41RIfStVw.jpg'
        ]);

        Facility::create([
            'facility_name' => "Snack and Drink",
            'image' => 'facility-image/6WvFnQUZjSEhYwxEKtPv43j0O80HT8wMQkKHzgVn.jpg'
        ]);

        Photo::create([
            'photo_name' => "photo 1",
            'image' => 'galery-image/aeBBQxOIwIWXcbFUtOISJuxC3nl4PDTC6uvKSedB.jpg'
        ]);

        Photo::create([
            'photo_name' => "photo 2",
            'image' => 'galery-image/ElaVolaP16NTFwTtXtjlQOpgRDr89SbEhuaSKDcW.jpg'
        ]);
        Photo::create([
            'photo_name' => "photo 3",
            'image' => 'galery-image/G25Ehmz2ozpfvIB0DUAWENpI3mmRqf7PicN0nY1a.jpg'
        ]);
        Photo::create([
            'photo_name' => "photo 4",
            'image' => 'galery-image/gMsqLJxwWgthzy6xRJPp4GJzwY8nKhDp607cAiET.jpg'
        ]);
        Photo::create([
            'photo_name' => "photo 5",
            'image' => 'galery-image/m267eLZ1pRFDQR1kQETzw8WXtL9z4SsfJBnKJgaw.png'
        ]);
        Photo::create([
            'photo_name' => "photo 8",
            'image' => 'galery-image/uAaIZsm8IyzXVboG7KxsQ7NGgCiuCD67dSrqbHwj.png'
        ]);
        Photo::create([
            'photo_name' => "photo 9",
            'image' => 'galery-image/UYKTKWpSWUIfiOZMDB9qoeLvggdlhl91pBplyUFS.jpg'
        ]);
        Photo::create([
            'photo_name' => "photo 1",
            'image' => 'galery-image/aeBBQxOIwIWXcbFUtOISJuxC3nl4PDTC6uvKSedB.jpg'
        ]);

        Tag::create([
            'title' => "Five Senses",
            'description' => "This Learning Kit is expected to help build students awareness and understanding of the five senses. With the help of fun designs and various objects help expand their knowledge and attract them to learn the functions and naming of body parts by discussing them among students as they explore their senses thus making learning more exciting.",
        ]);

        Tag::create([
            'title' => "Human body",
            'description' => "This Learning Kit is expected to help build students awareness and understanding of the five senses. With the help of fun designs and various objects help expand their knowledge and attract them to learn the functions and naming of body parts by discussing them among students as they explore their senses thus making learning more exciting.",
        ]);

        Tag::create([
            'title' => "Awareness",
            'description' => "This Learning Kit is expected to help build students awareness and understanding of the five senses. With the help of fun designs and various objects help expand their knowledge and attract them to learn the functions and naming of body parts by discussing them among students as they explore their senses thus making learning more exciting.",
        ]);



        ProductImage::create([
            "product_id" => "1",
            "image" => "product-images/BfP1tj3q01Q67N2v8T1daqORAtMthJpdjrf9m39G.jpg"
        ]);
        ProductImage::create([
            "product_id" => "2",
            "image" => "product-images/Ss5YXJAxSw7yUoehr3XxrOYqqgPLPOuutr2DyKUE.jpg"
        ]);
        ProductImage::create([
            "product_id" => "2",
            "image" => "product-images/prQmgqDqjq3UApeVsXqFiJ8Xlj310xkMhDkOHiGa.jpg"
        ]);
        ProductImage::create([
            "product_id" => "2",
            "image" => "product-images/0zlVqZzAumatzf32KU1iq2OHIrYu3cSj9XM8D8qs.jpg"
        ]);
        ProductImage::create([
            "product_id" => "3",
            "image" => "product-images/yaMNs3yilM9OcNvYPohF4BWVhjn59rMzeoZ6J32r.jpg"
        ]);
        DetailProduct::create([
            "product_id" => '1',
            "body" => "<div>This Learning Kit is expected to help build students awareness and understanding of the five senses.<br><br>With the help of fun designs and various objects help expand their knowledge and attract them to learn the functions and naming of body parts by discussing them among students as they explore their senses thus making learning more exciting.</div>",
            "contents" => "Singing cards, pictorial wood, different textured tactile items, bottles sense of smell, illustrated coins, playing boards, animal stickers, guidebooks",
            "duration" => "45 Menit",
            "donts" => "Do not enter the mouth because there are small parts, easy to swallow",
            "benefits" => "45 minutes learning kit session & Free Facilities"
        ]);
        DetailProduct::create([
            "product_id" => '2',
            "body" => "<div>This Learning Kit is expected to help build students awareness and understanding of the five senses.<br><br>With the help of fun designs and various objects help expand their knowledge and attract them to learn the functions and naming of body parts by discussing them among students as they explore their senses thus making learning more exciting.</div>",
            "contents" => "Singing cards, pictorial wood, different textured tactile items, bottles sense of smell, illustrated coins, playing boards, animal stickers, guidebooks",
            "duration" => "35 Menit",
            "donts" => "Do not enter the mouth because there are small parts, easy to swallow",
            "benefits" => "35 minutes learning kit session & Free Facilities"
        ]);
        DetailProduct::create([
            "product_id" => '3',
            "body" => "<div>This Learning Kit is expected to help build students awareness and understanding of the five senses.<br><br>With the help of fun designs and various objects help expand their knowledge and attract them to learn the functions and naming of body parts by discussing them among students as they explore their senses thus making learning more exciting.</div>",
            "contents" => "Pictorial wood, different textured tactile items, bottles sense of smell, illustrated coins, playing boards, animal stickers, guidebooks",
            "duration" => "55 Menit",
            "donts" => "Do not enter the mouth because there are small parts, easy to swallow",
            "benefits" => "55 minutes learning kit session & Free Facilities"
        ]);

        Product::create([
            "name" => "Feel It",
            "age" => "1-3",
            "slogan" => "Perfect for small hands to hold and pretend-play!",
            "excerpt" => "Stimulate their imaginations and develop their fine motor skills",
            "description" => "<div?><p>This Learning Kit is expected to help build students awareness and understanding of the five senses.</p><p>
            With the help of fun designs and various objects help expand their knowledge and attract them to learn the functions and naming of body parts by discussing them among students as they explore their senses thus making learning more exciting.</p></div>",
            "price" => "149000",
            "star" => "4.8",
        ]);

        Product::create([
            "name" => "TAMASYA",
            "age" => "2-6",
            "slogan" => "Pack up, because it’s holiday time!",
            "excerpt" => "Elevate their capability in memorizing transportations and holiday places",
            "description" => "<div?><p>This Learning Kit is expected to help build students awareness and understanding of the five senses.</p><p>
            WElevate their capability in memorizing transportations and holiday places Elevate their capability in memorizing transportations and holiday places Elevate their capability in memorizing transportations and holiday places</p></div>",
            "price" => "88000",
            "star" => "4.6",
        ]);

        Product::create([
            "name" => "RAINBOW",
            "age" => "4-6",
            "slogan" => "What color is it?",
            "excerpt" => "This color matching learning kit is great to get your little one familiar with sorting and matching their colors",
            "description" => "<div?><p>This Learning Kit is expected to help build students awareness and understanding of the five senses. This color matching learning kit is great to get your little one familiar with sorting and matching their colors</p><p>
            WElevate their capability in memorizing transportations and holiday places Elevate their capability in memorizing transportations and holiday places Elevate their capability in memorizing transportations and holiday places</p></div>",
            "price" => "110000",
            "star" => "4.7",
        ]);

        ProductTag::updateOrCreate([
            'product_id' => '1',
            'tag_id' => '1',
        ]);
        ProductTag::updateOrCreate([
            'product_id' => '2',
            'tag_id' => '1',
        ]);
        ProductTag::updateOrCreate([
            'product_id' => '3',
            'tag_id' => '1',
        ]);
        ProductTag::updateOrCreate([
            'product_id' => '1',
            'tag_id' => '2',
        ]);
        ProductTag::updateOrCreate([
            'product_id' => '2',
            'tag_id' => '2',
        ]);
        ProductTag::updateOrCreate([
            'product_id' => '3',
            'tag_id' => '2',
        ]);
    }
}
