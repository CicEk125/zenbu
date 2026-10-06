<?php
namespace Database\Seeders;
use App\Models\{Dish, Outlet};
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $u = fn ($id) => "https://images.unsplash.com/$id?auto=format&fit=crop&w=800&q=70";
        $rows = [
            ['Chicken Katsu Mozaru', 'チキンカツ もざる', 'Mozaru', 'Crisp katsu over garlic rice, baked under molten cheese and house sauce.', 55000, 68000, 'photo-1569718212165-3a8278d5f624', 1],
            ['Beef Mozaru', 'ビーフ もざる', 'Mozaru', 'Sliced wagyu-style beef, cheese-baked rice, sweet soy glaze.', 72000, 85000, 'photo-1553621042-f6e147245754', 1],
            ['Salmon Mentai Mozaru', '明太 サーモン', 'Mozaru', 'Seared salmon under creamy mentaiko, torched at the table.', 68000, 79000, 'photo-1579871494447-9811cf80d66c', 1],
            ['Gyoza Plate', '餃子', 'Appetizers', 'Pan-seared pork gyoza with ponzu and chili oil.', 35000, 42000, 'photo-1496116218417-1a781b1c416c', 0],
            ['Beef Teppanyaki', '鉄板焼き', 'Teppanyaki', 'Sizzled on the iron plate with garlic butter and vegetables.', 89000, 120000, 'photo-1544025162-d76694265947', 0],
            ['Modanyaki', 'モダン焼き', 'Modanyaki', 'Okonomiyaki layered with yakisoba, egg and bonito flakes.', 52000, 65000, 'photo-1617093727343-374698b1b08d', 0],
            ['Unagi Don', '鰻丼', 'Donburi', 'Grilled eel on steamed rice with kabayaki sauce.', 85000, 98000, 'photo-1617196034796-73dfa7b1fd56', 0],
            ['Tonkotsu Ramen', '豚骨ラーメン', 'Ramen', 'Twelve-hour pork broth, chashu, ajitama egg.', 58000, 72000, 'photo-1569718212165-3a8278d5f624', 0],
            ['Sashimi Moriawase', '刺身盛り合わせ', 'Sushi & Sashimi', 'Chef’s selection of five fresh cuts.', 110000, 160000, 'photo-1579584425555-c3ce17fd4351', 0],
            ['Matcha Tiramisu', '抹茶ティラミス', 'Desserts', 'Layers of matcha sponge and mascarpone.', 42000, null, 'photo-1571877227200-a0d98ea607e9', 0],
            ['Iced Hojicha', 'ほうじ茶', 'Drinks', 'Roasted green tea over ice, lightly sweetened.', 28000, null, 'photo-1556679343-c7306c1976bc', 0],
            ['Kids Mini Mozaru', 'キッズ もざる', 'Kids Menu', 'A small baked rice with chicken katsu and mild sauce.', 38000, null, 'photo-1512058564366-18510be2db19', 0],
        ];
        foreach ($rows as [$n, $j, $c, $d, $p, $p2, $img, $s]) {
            Dish::create(['name' => $n, 'name_jp' => $j, 'category' => $c, 'description' => $d, 'price_from' => $p, 'price_to' => $p2, 'image' => $u($img), 'is_signature' => $s]);
        }
        foreach ([['Zenbu Grand Indonesia', 'Jakarta', 'Grand Indonesia, West Mall, Jl. M.H. Thamrin, Jakarta Pusat'], ['Zenbu Tunjungan Plaza', 'Surabaya', 'Tunjungan Plaza 4, Jl. Basuki Rahmat, Surabaya'], ['Zenbu Paris Van Java', 'Bandung', 'Paris Van Java Mall, Jl. Sukajadi, Bandung']] as [$n, $c, $a]) {
            Outlet::create(['name' => $n, 'city' => $c, 'address' => $a, 'phone' => '+62 21 5000 0000', 'map_query' => urlencode("$n $c")]);
        }
    }
}
