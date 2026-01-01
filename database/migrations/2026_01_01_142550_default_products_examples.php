<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('products')->insertOrIgnore([
            [
                'id' => 1,
                'name' => 'Zasilacz Gigabyte P850GM 850W',
                'description' => "Certyfikat sprawności: 80 Plus Gold\r\nMoc: 850W\r\nModularne okablowanie: W pełni modularne\r\nŚrednica wentylatora: 120 mm\r\nStandard/Format: ATX",
                'price' => 320.00,
                'stock' => 10,
                'image_url' => 'https://images.morele.net/i1064/7323111_2_i1064.jpg',
                'created_at' => '2025-12-30 08:31:48',
                'updated_at' => '2025-12-30 08:31:48',
            ],
            [
                'id' => 2,
                'name' => 'GeForce RTX 5060 Ti Python III 16GB GDDR7 DLSS4',
                'description' => "Seria karty graficznej: GeForce RTX z serii 50\r\nObsługa Ray tracingu: Tak\r\nTechnika upscalingu: Nvidia DLSS 4\r\nUkład graficzny: GeForce RTX 5060 Ti\r\nRodzaj złącza: PCIe 5.0 x16\r\nPamięć: 16 GB\r\nRodzaj pamięci: GDDR7\r\nSzyna pamięci: 128 bit\r\nPrzepustowość pamięci: 448 GB/s\r\nEfektywne taktowanie pamięci: 14000 MHz",
                'price' => 2099.00,
                'stock' => 4,
                'image_url' => 'https://allegro.stati.pl/AllegroIMG/PRODUCENCI/GIGABYTE/GV-N506TEAGLE-OC-16GD/karta-graficzna.jpg',
                'created_at' => '2025-12-30 08:34:35',
                'updated_at' => '2025-12-30 08:34:35',
            ],
            [
                'id' => 3,
                'name' => 'Kabel SATA - SATA SAVIO GAK-04 0.3 m',
                'description' => "Złącza: SATA (7-pin) żeński (kątowy) - SATA (7-pin) żeński\r\nTyp: SATA III\r\nDługość [m]: 0.3\r\nZłącza kątowe: Jedno\r\nEkranowanie: Nie\r\nZatrzaski: Tak\r\nKolor: Czarny",
                'price' => 9.99,
                'stock' => 47,
                'image_url' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcR6lWkgRtQFaK7RKZkVAHbAgd3AHSFLbGwDs87KISIa1WlOSjXhiSHoJvdToVmo5dS6Ayy2DLBCmqNgK5PjPRhLQJsTKFBzJ3ApVsDM-KOqJlgWk05HjHk8De0-6aUhWOsflpoGOA&usqp=CAc',
                'created_at' => '2025-12-30 08:36:13',
                'updated_at' => '2025-12-30 08:36:13',
            ],
            [
                'id' => 4,
                'name' => 'ASRock B450 PRO4 R2.0',
                'description' => "Rodzaj chłodzenia chipsetu płyty głównej: Pasywny\r\nObsługiwane rodziny procesorów: AMD Ryzen™\r\nGniazdo procesora: Socket AM4\r\nChipset: AMD B450\r\nArchitektura procesora: Zen 3 (4 generacja), Zen 2 (3 generacja), Zen+ (2 generacja)\r\nTyp obsługiwanej pamięci: DDR4-3200 MHz, DDR4-2933 MHz,DDR4-2666 MHz ,DDR4-2400 MHz ,DDR4-2133 MHz\r\nLiczba banków pamięci: 4 x DIMM\r\nMaksymalna wielkość pamięci RAM: 128 GB\r\nArchitektura pamięci: Dual-channel\r\nWewnętrzne złącza: SATA III (6 Gb/s) - 6 szt.\r\nM.2 PCIe NVMe 3.0 x4 - 1 szt.\r\nM.2 PCIe NVMe 3.0 x2 / SATA - 1 szt.\r\nPCIe 3.0 x16 - 1 szt.\r\nPCIe 3.0 x16 (tryb x4) - 1 szt.\r\nPCIe 2.0 x1 - 4 szt.\r\nUSB 3.2 Gen. 1 - 1 szt.\r\nUSB 2.0 - 2 szt.\r\nZłącze ARGB 3 pin - 1 szt.\r\nZłącze RGB 4 pin - 1 szt.\r\nZłącze COM - 1 szt.\r\nFront Panel Audio\r\nZłącze wentylatora CPU 4 pin - 1 szt.\r\nZłącze wentylatora SYS/CHA - 3 szt.\r\nZłącze pompy AIO - 1 szt.\r\nZłącze zasilania 8 pin - 1 szt.\r\nZłącze zasilania 24 pin - 1 szt.\r\nZłącze modułu TPM - 1 szt.\r\nZewnętrzne złącza:\r\nVGA (D-Sub) - 1 szt.\r\nHDMI - 1 szt.\r\nDisplayPort - 1 szt.\r\nRJ45 (LAN) 1 Gbps - 1 szt.\r\nUSB Type-C - 1 szt.\r\nUSB 3.2 Gen. 1 - 4 szt.\r\nUSB 3.2 Gen. 2 - 1 szt.\r\nUSB 2.0 - 2 szt.\r\nPS/2 klawiatura/mysz - 1 szt.\r\nAudio jack - 3 szt.\r\nObsługa RAID, RAID 0, RAID 1, RAID 10\r\nObsługa wielu kart graficznych: AMD CrossFireX\r\nObsługa układów graficznych w procesorach: Tak\r\nUkład audio: Realtek ALC892\r\nŁączność bezprzewodowa: Nie\r\nFormat: ATX\r\nSzerokość: 224 mm\r\nWysokość: 305 mm",
                'price' => 299.90,
                'stock' => 6,
                'image_url' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcROGtRRDBZOHN7yJCj8QZn-Wiqhvy3ky__Un8RlsCAzjSqnMBVZLdHnMktwoRWfmc9HSzbG1MUKH5n72BRGa-ofgbCRTUjHgJgzpmF3ttHImBaGxTZ21fD3&usqp=CAc',
                'created_at' => '2025-12-30 08:40:00',
                'updated_at' => '2025-12-30 09:34:30',
            ],
            [
                'id' => 5,
                'name' => 'Dysk SSD - GOODRAM 1TB 2,5\" SATA SSD CX400',
                'description' => "Pojemność: 1024 GB\r\nFormat: 2.5\"\r\nInterfejs: 2,5\" SATA\r\nPrędkość odczytu (maksymalna): 550 MB/s\r\nPrędkość zapisu (maksymalna): 500 MB/s\r\nNiezawodność MTBF: 2 000 000 godz.",
                'price' => 349.00,
                'stock' => 15,
                'image_url' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/9/pr_2020_9_9_11_23_41_185_02.jpg',
                'created_at' => '2025-12-30 08:42:01',
                'updated_at' => '2025-12-30 08:42:01',
            ],
            [
                'id' => 6,
                'name' => 'Pamięć RAM Kingston Fury Beast, DDR5, 16 GB, 6000MHz',
                'description' => "Typ pamięci: DDR5\r\nNiskoprofilowe: Tak\r\nPojemność łączna: 16 GB\r\nLiczba modułów: 2\r\nCzęstotliwość pracy [MHz]: 6000\r\nOpóźnienie: CL36\r\nNapięcie [V]: 1.35",
                'price' => 7777.00,
                'stock' => 50,
                'image_url' => 'https://images.morele.net/i1064/12775277_3_i1064.jpg',
                'created_at' => '2025-12-30 08:44:31',
                'updated_at' => '2025-12-30 08:44:31',
            ],
        ]);
    }

    public function down(): void
    {
        DB::table('products')->whereIn('id', [1, 2, 3, 4, 5, 6])->delete();
    }
};
