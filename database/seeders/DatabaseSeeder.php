<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Dragon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


          $d = new Dragon;
        $d->name = 'Astalos_Prince_Orage';
        $d->type = 'technical';
        $d->level = 5;
        $d->height = 3.08;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://i.redd.it/nqikxlsf9sj71.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Rathalos';
        $d->type = 'strength';
        $d->level = 10;
        $d->height = 15.2;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://www.monsterhunter.com/stories/assets/images/monsters/img-rathalos-2.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Rathian';
        $d->type = 'technical';
        $d->level = 8;
        $d->height = 14.5;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://www.monsterhunter.com/stories/assets/images/monsters/img-rathian-1.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Zinogre';
        $d->type = 'speed';
        $d->level = 15;
        $d->height = 16.8;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/a/ad/MHST3-Zinogre_Monstie_Render_001.webp';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Astalos';
        $d->type = 'speed';
        $d->level = 12;
        $d->height = 15.6;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://www.monsterhunter.com/stories2/assets/images/monster/pic_monster12.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Nargacuga';
        $d->type = 'speed';
        $d->level = 9;
        $d->height = 12.4;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://i.redd.it/qvgc6nozsbog1.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Tigrex';
        $d->type = 'strength';
        $d->level = 14;
        $d->height = 18.3;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/6/62/MHST3-Tigrex_Monstie_Render_001.webp';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Diablos';
        $d->type = 'strength';
        $d->level = 16;
        $d->height = 19.5;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/a/ab/MHST3-Diablos_Render_001.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Legiana';
        $d->type = 'technical';
        $d->level = 11;
        $d->height = 14.2;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/1/14/MHST3-Gaul_%26_Legia_Render_001.webp';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Barioth';
        $d->type = 'speed';
        $d->level = 13;
        $d->height = 17.1;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/3/34/MHST2-Barioth_Render.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Glavenus';
        $d->type = 'strength';
        $d->level = 18;
        $d->height = 17.8;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/f/fc/MHST3-Glavenus_Render_001.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Mizutsune';
        $d->type = 'technical';
        $d->level = 12;
        $d->height = 16.4;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://lh3.googleusercontent.com/DhpzTAe7EVU-9pzWz2tiK17fHP5C9v5cXaGXZCzdmnCme0DrgD87z2xdAbH9HV2urek1YGxLKP_AInz9foJEdqGEMnLplaNFYQur=s0-e365';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Lagiacrus';
        $d->type = 'strength';
        $d->level = 17;
        $d->height = 18.9;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/b/ba/MHST3-Lagiacrus_Render_001.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Magnamalo';
        $d->type = 'strength';
        $d->level = 20;
        $d->height = 19.2;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://lh3.googleusercontent.com/mz4yxvD4oQ5V8Dy2kB3y_OvTko_XZhbl4nTiSKE60pPf_MlXjXLaRskV0Vcq1rM_hri6kpJEQtHeEfY8luKxx02fWTK-xmcjD5Y=s0-e365';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Velkhana';
        $d->type = 'technical';
        $d->level = 25;
        $d->height = 20.5;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/c/c8/MHST2-Velkhana_Monstie_Render.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Malzeno';
        $d->type = 'speed';
        $d->level = 23;
        $d->height = 19.8;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/5/5a/MHST3-Malzeno_Render_001.webp';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Anjanath';
        $d->type = 'strength';
        $d->level = 7;
        $d->height = 16.1;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/4/41/MHST3-Anjanath_Render_001.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Brachydios';
        $d->type = 'strength';
        $d->level = 19;
        $d->height = 17.5;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://static.wikia.nocookie.net/mogapedia/images/5/51/MHWI-Brachydios_Render_002.png/revision/latest?cb=20240306161223&path-prefix=fr';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Odogaron';
        $d->type = 'speed';
        $d->level = 14;
        $d->height = 13.6;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/6/69/MHWI-Ebony_Odogaron_Render.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Seregios';
        $d->type = 'technical';
        $d->level = 16;
        $d->height = 15.9;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://www.monsterhunter.com/stories/assets/images/monsters/img-seregios-1.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Teostra';
        $d->type = 'power';
        $d->level = 26;
        $d->height = 20.1;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://www.eclypsia.com/wp-content/uploads/eclypsia/2022/12/27.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Gold Rathian';
        $d->type = 'speed';
        $d->level = 28;
        $d->height = 16.2;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://www.monsterhunter.com/stories2/assets/images/monster/pic_monster42.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Silver Rathalos';
        $d->type = 'power';
        $d->level = 29;
        $d->height = 16.5;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://www.monsterhunter.com/stories2/assets/images/monster/pic_monster41.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Kushala Daora';
        $d->type = 'technical';
        $d->level = 30;
        $d->height = 21;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://www.monsterhunter.com/stories2/assets/images/monster/pic_monster24.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Deviljho';
        $d->type = 'power';
        $d->level = 27;
        $d->height = 18.5;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/b/b8/MHST2-Deviljho_Render.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Rajang';
        $d->type = 'power';
        $d->level = 25;
        $d->height = 12.5;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://www.monsterhunter.com/world-iceborne/topics/rajang/images/img01.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Kirin';
        $d->type = 'speed';
        $d->level = 24;
        $d->height = 10.2;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://www.monsterhunter.com/stories2/assets/images/monster/pic_monster31.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Yian Garuga';
        $d->type = 'technical';
        $d->level = 19;
        $d->height = 12.8;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/7/7b/MHST3-Invasive_Yian_Garuga_Render_001.webp';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Uragaan';
        $d->type = 'power';
        $d->level = 22;
        $d->height = 19;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/2/2f/MH3U-Uragaan_Render_001.webp';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Gravios';
        $d->type = 'power';
        $d->level = 21;
        $d->height = 18;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/c/c5/MHST2-Gravios_Render.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Barroth';
        $d->type = 'speed';
        $d->level = 17;
        $d->height = 11.5;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/2/21/MHST2-Barroth_Render.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Khezu';
        $d->type = 'technical';
        $d->level = 15;
        $d->height = 10.5;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/1/1c/MHST3-Khezu_Render_001.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Zamtrios';
        $d->type = 'technical';
        $d->level = 18;
        $d->height = 14;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://www.monsterhunter.com/stories2/assets/images/monster/pic_monster15.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Congalala';
        $d->type = 'power';
        $d->level = 16;
        $d->height = 11;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://static.wikia.nocookie.net/mogapedia/images/6/64/MHWilds-Congalala_Render_001.png/revision/latest?cb=20240929070347&path-prefix=fr';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Nerscylla';
        $d->type = 'technical';
        $d->level = 20;
        $d->height = 13.5;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/7/79/MHST2-Nerscylla_Render.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Royal Ludroth';
        $d->type = 'power';
        $d->level = 18;
        $d->height = 15;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://static.wikia.nocookie.net/mogapedia/images/c/c9/MHRise-Royal_Ludroth_Render_001.png/revision/latest?cb=20201211121905&path-prefix=fr';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Qurupeco';
        $d->type = 'technical';
        $d->level = 13;
        $d->height = 9.5;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://mhst1.monsterbuddy.app/_nuxt/img/Qurupeco.1214967.webp';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Yian Kut-Ku';
        $d->type = 'technical';
        $d->level = 12;
        $d->height = 8.5;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/1/16/MHST3-Yian_Kut_Ku_Render_001.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Lagombi';
        $d->type = 'speed';
        $d->level = 14;
        $d->height = 10;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://www.monsterhunter.com/stories/assets/images/monsters/img-lagombi-2.png';
        $d->save();
 
        $d = new Dragon;
        $d->name = 'Arzuros';
        $d->type = 'power';
        $d->level = 13;
        $d->height = 9;
        $d->born_at = '2026-01-03';
        $d->is_in_team = 0;
        $d->image_path = 'https://monsterhunterwiki.org/images/6/64/MHST2-Arzuros_Render.png';
        $d->save();



    }
}
