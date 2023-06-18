<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\RentalMobil;


class RentalMobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RentalMobil::create([
            'nama' => 'Toyota Alphard',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisici elit. Ipsam, cum…',
            'image' => './images/toyota-alphard.png',
            'durasi' => '12 jam',
            'konten' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, cum molestias deleniti eum impedit a temporibus
            deserunt rem molestiae nihil eius nemo autem. Nisi eum, tenetur eos dolor vero eligendi ipsam dolores error ad
            aspernatur, sapiente hic! Adipisci quam fugit sed ipsam cupiditate repellendus doloribus recusandae ad
            reprehenderit ratione omnis tempora nulla dolores delectus non, illum vero ab amet officiis debitis. Minus
            molestiae deserunt doloribus eius, nostrum repellendus consequatur! Recusandae explicabo incidunt ullam repellat
            sequi delectus doloribus, facilis illo facere deleniti eos, aperiam illum voluptas aut! Delectus autem ipsam
            ratione, beatae distinctio aspernatur dolores aliquid enim, sequi officia laboriosam dolor illum eligendi eos
            cum? Id vero laboriosam molestiae odio quidem illum sed veritatis laborum, qui architecto nemo similique harum
            omnis!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel vero aperiam consectetur numquam ipsam minima animi
            amet quae. Eum, ad! Iusto molestiae corrupti nesciunt deserunt saepe eveniet perferendis quia magnam praesentium
            voluptas vero consequuntur ipsa omnis enim, officiis natus accusamus illo tempora iure. Neque commodi iusto
            aperiam laudantium vel aut possimus adipisci quasi laborum amet dolorum impedit ut ipsa eveniet molestiae
            reiciendis, distinctio repellendus delectus! Eveniet numquam aliquam voluptatibus, pariatur quibusdam modi
            laudantium esse error cum aut possimus quas quam.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae voluptate autem commodi architecto
            nulla quasi molestias minus rem ullam recusandae ad vel doloribus, illum sunt excepturi deserunt. Ex ab soluta
            enim dolore iste consequuntur tempore, blanditiis aspernatur eligendi assumenda ratione ipsa, reiciendis dolorem
            sequi dolores possimus excepturi voluptatibus! Magni, id cupiditate beatae unde adipisci aliquam omnis magnam
            esse quod aut ab tempore eaque quas dolorem accusamus ipsam, modi veritatis! Necessitatibus mollitia suscipit
            voluptatem quia nam illo voluptate doloremque earum aperiam, ipsam dolorem ut deleniti officiis expedita! Neque
            tenetur minima quo earum eaque, velit debitis aliquam harum cum itaque, eum nihil molestiae nostrum dolore
            recusandae beatae, praesentium fugit quia porro. Corporis odit illo fugiat animi aliquid facere quis magnam
            repellat aliquam. Soluta ipsam ipsa delectus rem, saepe at cum quas doloremque veniam fuga natus sequi aliquam
            facere quidem in ipsum?</p>',
            'harga' => 1700000,
        ]);

        RentalMobil::create([
            'nama' => 'New Innova',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisici elit. Ipsam, cum…',
            'image' => './images/new-innova.png',
            'durasi' => '12 jam',
            'konten' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, cum molestias deleniti eum impedit a temporibus
            deserunt rem molestiae nihil eius nemo autem. Nisi eum, tenetur eos dolor vero eligendi ipsam dolores error ad
            aspernatur, sapiente hic! Adipisci quam fugit sed ipsam cupiditate repellendus doloribus recusandae ad
            reprehenderit ratione omnis tempora nulla dolores delectus non, illum vero ab amet officiis debitis. Minus
            molestiae deserunt doloribus eius, nostrum repellendus consequatur! Recusandae explicabo incidunt ullam repellat
            sequi delectus doloribus, facilis illo facere deleniti eos, aperiam illum voluptas aut! Delectus autem ipsam
            ratione, beatae distinctio aspernatur dolores aliquid enim, sequi officia laboriosam dolor illum eligendi eos
            cum? Id vero laboriosam molestiae odio quidem illum sed veritatis laborum, qui architecto nemo similique harum
            omnis!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel vero aperiam consectetur numquam ipsam minima animi
            amet quae. Eum, ad! Iusto molestiae corrupti nesciunt deserunt saepe eveniet perferendis quia magnam praesentium
            voluptas vero consequuntur ipsa omnis enim, officiis natus accusamus illo tempora iure. Neque commodi iusto
            aperiam laudantium vel aut possimus adipisci quasi laborum amet dolorum impedit ut ipsa eveniet molestiae
            reiciendis, distinctio repellendus delectus! Eveniet numquam aliquam voluptatibus, pariatur quibusdam modi
            laudantium esse error cum aut possimus quas quam.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae voluptate autem commodi architecto
            nulla quasi molestias minus rem ullam recusandae ad vel doloribus, illum sunt excepturi deserunt. Ex ab soluta
            enim dolore iste consequuntur tempore, blanditiis aspernatur eligendi assumenda ratione ipsa, reiciendis dolorem
            sequi dolores possimus excepturi voluptatibus! Magni, id cupiditate beatae unde adipisci aliquam omnis magnam
            esse quod aut ab tempore eaque quas dolorem accusamus ipsam, modi veritatis! Necessitatibus mollitia suscipit
            voluptatem quia nam illo voluptate doloremque earum aperiam, ipsam dolorem ut deleniti officiis expedita! Neque
            tenetur minima quo earum eaque, velit debitis aliquam harum cum itaque, eum nihil molestiae nostrum dolore
            recusandae beatae, praesentium fugit quia porro. Corporis odit illo fugiat animi aliquid facere quis magnam
            repellat aliquam. Soluta ipsam ipsa delectus rem, saepe at cum quas doloremque veniam fuga natus sequi aliquam
            facere quidem in ipsum?</p>',
            'harga' => 1400000,
        ]);

        RentalMobil::create([
            'nama' => 'Brio Satya',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisici elit. Ipsam, cum…',
            'image' => './images/brio-satya.png',
            'durasi' => '12 jam',
            'konten' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, cum molestias deleniti eum impedit a temporibus
            deserunt rem molestiae nihil eius nemo autem. Nisi eum, tenetur eos dolor vero eligendi ipsam dolores error ad
            aspernatur, sapiente hic! Adipisci quam fugit sed ipsam cupiditate repellendus doloribus recusandae ad
            reprehenderit ratione omnis tempora nulla dolores delectus non, illum vero ab amet officiis debitis. Minus
            molestiae deserunt doloribus eius, nostrum repellendus consequatur! Recusandae explicabo incidunt ullam repellat
            sequi delectus doloribus, facilis illo facere deleniti eos, aperiam illum voluptas aut! Delectus autem ipsam
            ratione, beatae distinctio aspernatur dolores aliquid enim, sequi officia laboriosam dolor illum eligendi eos
            cum? Id vero laboriosam molestiae odio quidem illum sed veritatis laborum, qui architecto nemo similique harum
            omnis!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel vero aperiam consectetur numquam ipsam minima animi
            amet quae. Eum, ad! Iusto molestiae corrupti nesciunt deserunt saepe eveniet perferendis quia magnam praesentium
            voluptas vero consequuntur ipsa omnis enim, officiis natus accusamus illo tempora iure. Neque commodi iusto
            aperiam laudantium vel aut possimus adipisci quasi laborum amet dolorum impedit ut ipsa eveniet molestiae
            reiciendis, distinctio repellendus delectus! Eveniet numquam aliquam voluptatibus, pariatur quibusdam modi
            laudantium esse error cum aut possimus quas quam.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae voluptate autem commodi architecto
            nulla quasi molestias minus rem ullam recusandae ad vel doloribus, illum sunt excepturi deserunt. Ex ab soluta
            enim dolore iste consequuntur tempore, blanditiis aspernatur eligendi assumenda ratione ipsa, reiciendis dolorem
            sequi dolores possimus excepturi voluptatibus! Magni, id cupiditate beatae unde adipisci aliquam omnis magnam
            esse quod aut ab tempore eaque quas dolorem accusamus ipsam, modi veritatis! Necessitatibus mollitia suscipit
            voluptatem quia nam illo voluptate doloremque earum aperiam, ipsam dolorem ut deleniti officiis expedita! Neque
            tenetur minima quo earum eaque, velit debitis aliquam harum cum itaque, eum nihil molestiae nostrum dolore
            recusandae beatae, praesentium fugit quia porro. Corporis odit illo fugiat animi aliquid facere quis magnam
            repellat aliquam. Soluta ipsam ipsa delectus rem, saepe at cum quas doloremque veniam fuga natus sequi aliquam
            facere quidem in ipsum?</p>',
            'harga' => 1100000,
        ]);

        RentalMobil::create([
            'nama' => 'New Ertiga',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisici elit. Ipsam, cum…',
            'image' => './images/new-ertiga.png',
            'durasi' => '12 jam',
            'konten' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, cum molestias deleniti eum impedit a temporibus
            deserunt rem molestiae nihil eius nemo autem. Nisi eum, tenetur eos dolor vero eligendi ipsam dolores error ad
            aspernatur, sapiente hic! Adipisci quam fugit sed ipsam cupiditate repellendus doloribus recusandae ad
            reprehenderit ratione omnis tempora nulla dolores delectus non, illum vero ab amet officiis debitis. Minus
            molestiae deserunt doloribus eius, nostrum repellendus consequatur! Recusandae explicabo incidunt ullam repellat
            sequi delectus doloribus, facilis illo facere deleniti eos, aperiam illum voluptas aut! Delectus autem ipsam
            ratione, beatae distinctio aspernatur dolores aliquid enim, sequi officia laboriosam dolor illum eligendi eos
            cum? Id vero laboriosam molestiae odio quidem illum sed veritatis laborum, qui architecto nemo similique harum
            omnis!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel vero aperiam consectetur numquam ipsam minima animi
            amet quae. Eum, ad! Iusto molestiae corrupti nesciunt deserunt saepe eveniet perferendis quia magnam praesentium
            voluptas vero consequuntur ipsa omnis enim, officiis natus accusamus illo tempora iure. Neque commodi iusto
            aperiam laudantium vel aut possimus adipisci quasi laborum amet dolorum impedit ut ipsa eveniet molestiae
            reiciendis, distinctio repellendus delectus! Eveniet numquam aliquam voluptatibus, pariatur quibusdam modi
            laudantium esse error cum aut possimus quas quam.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae voluptate autem commodi architecto
            nulla quasi molestias minus rem ullam recusandae ad vel doloribus, illum sunt excepturi deserunt. Ex ab soluta
            enim dolore iste consequuntur tempore, blanditiis aspernatur eligendi assumenda ratione ipsa, reiciendis dolorem
            sequi dolores possimus excepturi voluptatibus! Magni, id cupiditate beatae unde adipisci aliquam omnis magnam
            esse quod aut ab tempore eaque quas dolorem accusamus ipsam, modi veritatis! Necessitatibus mollitia suscipit
            voluptatem quia nam illo voluptate doloremque earum aperiam, ipsam dolorem ut deleniti officiis expedita! Neque
            tenetur minima quo earum eaque, velit debitis aliquam harum cum itaque, eum nihil molestiae nostrum dolore
            recusandae beatae, praesentium fugit quia porro. Corporis odit illo fugiat animi aliquid facere quis magnam
            repellat aliquam. Soluta ipsam ipsa delectus rem, saepe at cum quas doloremque veniam fuga natus sequi aliquam
            facere quidem in ipsum?</p>',
            'harga' => 1500000,
        ]);

        RentalMobil::create([
            'nama' => 'Daihatsu Ayla',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisici elit. Ipsam, cum…',
            'image' => './images/daihatsu-ayla.png',
            'durasi' => '12 jam',
            'konten' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, cum molestias deleniti eum impedit a temporibus
            deserunt rem molestiae nihil eius nemo autem. Nisi eum, tenetur eos dolor vero eligendi ipsam dolores error ad
            aspernatur, sapiente hic! Adipisci quam fugit sed ipsam cupiditate repellendus doloribus recusandae ad
            reprehenderit ratione omnis tempora nulla dolores delectus non, illum vero ab amet officiis debitis. Minus
            molestiae deserunt doloribus eius, nostrum repellendus consequatur! Recusandae explicabo incidunt ullam repellat
            sequi delectus doloribus, facilis illo facere deleniti eos, aperiam illum voluptas aut! Delectus autem ipsam
            ratione, beatae distinctio aspernatur dolores aliquid enim, sequi officia laboriosam dolor illum eligendi eos
            cum? Id vero laboriosam molestiae odio quidem illum sed veritatis laborum, qui architecto nemo similique harum
            omnis!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel vero aperiam consectetur numquam ipsam minima animi
            amet quae. Eum, ad! Iusto molestiae corrupti nesciunt deserunt saepe eveniet perferendis quia magnam praesentium
            voluptas vero consequuntur ipsa omnis enim, officiis natus accusamus illo tempora iure. Neque commodi iusto
            aperiam laudantium vel aut possimus adipisci quasi laborum amet dolorum impedit ut ipsa eveniet molestiae
            reiciendis, distinctio repellendus delectus! Eveniet numquam aliquam voluptatibus, pariatur quibusdam modi
            laudantium esse error cum aut possimus quas quam.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae voluptate autem commodi architecto
            nulla quasi molestias minus rem ullam recusandae ad vel doloribus, illum sunt excepturi deserunt. Ex ab soluta
            enim dolore iste consequuntur tempore, blanditiis aspernatur eligendi assumenda ratione ipsa, reiciendis dolorem
            sequi dolores possimus excepturi voluptatibus! Magni, id cupiditate beatae unde adipisci aliquam omnis magnam
            esse quod aut ab tempore eaque quas dolorem accusamus ipsam, modi veritatis! Necessitatibus mollitia suscipit
            voluptatem quia nam illo voluptate doloremque earum aperiam, ipsam dolorem ut deleniti officiis expedita! Neque
            tenetur minima quo earum eaque, velit debitis aliquam harum cum itaque, eum nihil molestiae nostrum dolore
            recusandae beatae, praesentium fugit quia porro. Corporis odit illo fugiat animi aliquid facere quis magnam
            repellat aliquam. Soluta ipsam ipsa delectus rem, saepe at cum quas doloremque veniam fuga natus sequi aliquam
            facere quidem in ipsum?</p>',
            'harga' => 1150000,
        ]);
    }
}
