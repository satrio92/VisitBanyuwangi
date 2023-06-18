<?php

namespace Database\Seeders;

use App\Models\PaketTour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaketTour::create([
            'nama' => 'One Day Tour',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisici elit. Ipsam, cum…',
            'image' => './images/hero-banner.png',
            'durasi' => '1 Hari',
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
            'harga' => 1200000
        ]);

        PaketTour::create([
            'nama' => 'Two Day One Night Tour',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisici elit. Ipsam, cum…',
            'image' => './images/hero-banner.png',
            'durasi' => '2 Hari 1 Malam',
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
            'harga' => 2000000
        ]);

        PaketTour::create([
            'nama' => 'Two Day Two Night Tour',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisici elit. Ipsam, cum…',
            'image' => './images/hero-banner.png',
            'durasi' => '2 Hari 2 Malam',
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
            'harga' => 2400000
        ]);

        PaketTour::create([
            'nama' => 'Three Day Two Night Tour',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisici elit. Ipsam, cum…',
            'image' => './images/hero-banner.png',
            'durasi' => '3 Hari 2 Malam',
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
            'harga' => 3000000
        ]);

        PaketTour::create([
            'nama' => 'Three Day Three Night Tour',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisici elit. Ipsam, cum…',
            'image' => './images/hero-banner.png',
            'durasi' => '3 Hari 3 Malam',
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
            'harga' => 3400000
        ]);
    }
}
