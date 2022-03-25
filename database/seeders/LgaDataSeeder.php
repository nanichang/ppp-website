<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LgaData;

class LgaDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lgaDatas = array(
            // Barkin Ladi LGA Data
            array(
                "lga_chairman" => "Hon. Alamba Danladi Jock", 
                "lga_population" => "175267", 
                "lga_land_area" => "1312.50",
                "lga_distance_from_jos" => "54 Km South of Jos",
                "lga_minerals" => "Cassiterite, Columbite, Monazite, Zircon, Quartz, Feldspars, Kaolin, Glass sand, Magnetite, Clay, Hard Rock, Sand,  Wolframite, Ilmenite/Rutile, Tin, Gemstones (Tourmaline,Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive, Fluoride",
                "lga_produce" => "Maize, Potatoes, Vegetables, Cocoyam, Acha, Millet, Cowpea, kidney beans, finger millet (tamba)",
                "lga_festive_dates" => "Nzem Berom (April)",
                "lga_opportunities" => "Processing of crops into end-consumer products, Mineral exploration and processing",
                "lga_attractions" => "Kurra waterfalls",
                "lga_id" => 1
            ),

            // BASSA LGA Data
            array(
                "lga_chairman" => "Hon. Igmala Andy Stephen", 
                "lga_population" => "189834", 
                "lga_land_area" => "1776",
                "lga_distance_from_jos" => "30 Km North West of Jos",
                "lga_minerals" => "Cassiterite, Columbite, Quartz, Feldspars, Kaolin, Magnetite, Wolframite, Ilmenite/Rutile, Tin, Hard Rock, Clay, Sand, Gemstones (Tourmaline,Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive,Fluoride)",
                "lga_produce" => "Acha, Maize, beans, yams, groundnut, potatoes, soya beans, beniseed, finger millet (tamba)",
                "lga_festive_dates" => "Irigwe New Year Festival (Jan), Zarachi",
                "lga_opportunities" => "Processing of Soya Oil and exploration of minerals available ",
                "lga_attractions" => "N/A",
                "lga_id" => 2
            ),

            // Bokkos LGA Data
            array(
                "lga_chairman" => "Hon. Guluwa Joseph", 
                "lga_population" => "179550", 
                "lga_land_area" => "1593",
                "lga_distance_from_jos" => "77 Km South of Jos",
                "lga_minerals" => "Cassiterite, Columbite, Kaolin, Garnet, Clay, Hard Rock, Sand, Gemstones (Tourmaline, Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive, Flouride)",
                "lga_produce" => "Maize, potatoes, kidney beans, avocado pear, olive fruits, palm/trees, coffee, sugar cane, apples, sweet potatoes, cocoyam, finger millet (tamba), vegetables, acha",
                "lga_festive_dates" => "Ron/Kulere (Dec/Feb), Pu'us Kang Mushere (April)",
                "lga_opportunities" => "Storage and Processing of Irish Potatoes and  Maize",
                "lga_attractions" => "N/A",
                "lga_id" => 3
            ),

            // JOS EAST LGA Data
            array(
                "lga_chairman" => "Ezekiel Yakubu Izang", 
                "lga_population" => "85607", 
                "lga_land_area" => "911.3",
                "lga_distance_from_jos" => "35 Km East of Jos",
                "lga_minerals" => "Cassiterite, Columbite, Monazite, Quartz, Magnetite, Wolframite, Ilmenite/Rutile, Mica, Tin, Clay, Hard Rock, Sand",
                "lga_produce" => "Maize, cowpeas, soybeans, groundnut, yam, rice, cassava, acha, guinea corn, sweet potatoes, vegetables",
                "lga_festive_dates" => "Afizere (Jan)",
                "lga_opportunities" => "Large scale production of exotic fruits, cut flowers and coffee for the purpose of processing and exportation",
                "lga_attractions" => "N/A",
                "lga_id" => 4
            ),

            // JOS NORTH LGA Data
            array(
                "lga_chairman" => "Hon. Usman Shehu Bala", 
                "lga_population" => "429300", 
                "lga_land_area" => "650",
                "lga_distance_from_jos" => "State Capital",
                "lga_minerals" => "Cassiterite, Columbite, Monazite, Quartz, Kaolin, Glass Sand, Magnetite, Wolframite, Ilenite/Rutile, Mica, Tin, Clay, Hard Rock, Sand",
                "lga_produce" => "Maize, Vegetables, beans, acha, olive fruits, soybeans, coffee, guinea corn, apples, cut flowers",
                "lga_festive_dates" => "Afizere (Jan), Nzem Berom (April)",
                "lga_opportunities" => "Large scale farming of vegetables, fruits and cut flowers. Mineral processing and exportation.",
                "lga_attractions" => "N/A",
                "lga_id" => 5
            ),

            // JOS South LGA Data
            array(
                "lga_chairman" => "Hon. Davou Gideon Dung", 
                "lga_population" => "309716", 
                "lga_land_area" => "650",
                "lga_distance_from_jos" => "15 Km South of Jos",
                "lga_minerals" => "Cassiterite, Columbite, Monazite, Magnetite, Wolframite, Ilenite/Rutile, Tin, Hard Rock, Sand, Clay, Gemstones (Tourmaline, Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive, Flouride)",
                "lga_produce" => "Acha, millet, maize potatoes, vegetables, coffee, sweet potatoes, apples, olive fruits, cut flowers",
                "lga_festive_dates" => "Nzem Berom (April)",
                "lga_opportunities" => "Processing of some of the crops and minerals into finished products.",
                "lga_attractions" => "N/A",
                "lga_id" => 6
            ),

            // Kanam South LGA Data
            array(
                "lga_chairman" => "Hon. Yusuf Dayyabu Garga", 
                "lga_population" => "165898", 
                "lga_land_area" => "2788.40",
                "lga_distance_from_jos" => "191 Km South West of Jos",
                "lga_minerals" => "Cassiterite, Columbite, Zircon, Quartz, Kaolin, Galena/Sphalerite, Magnetite, Mica, Gypsum, Tantalite, Hard Rock, Sand, Gemstones (Tourmaline, Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive, Flouride)",
                "lga_produce" => "Maize, cotton, guinea corn, sugar cane, millet, cowpeas, rice, groundnuts Bambaranuts",
                "lga_festive_dates" => "Bogghom (Dec/Jan)",
                "lga_opportunities" => "Large scale production of groundnuts and sugarcane for processing into finished products.",
                "lga_attractions" => "N/A",
                "lga_id" => 7
            ),

            // KANKE LGA Data
            array(
                "lga_chairman" => "Hon. Gotip Henry", 
                "lga_population" => "124424", 
                "lga_land_area" => "2788.40",
                "lga_distance_from_jos" => "152 Km South East of Jos",
                "lga_minerals" => "Quartz, Feldspars, Kaolin, Garnet, Hard Rock, Sand",
                "lga_produce" => "Millet, Guinea corn, beans, groundnut, Bambaranuts, Acha, sweet potatoes, yams",
                "lga_festive_dates" => "Pusdung (Mar/April)",
                "lga_opportunities" => "Large scale production of cotton and olives for textile and olive oil manufacturing respectively.",
                "lga_attractions" => "N/A",
                "lga_id" => 8
            ),

            // LANGTANG NORTH LGA Data
            array(
                "lga_chairman" => "Hon. Bitrus Zulfa", 
                "lga_population" => "140643", 
                "lga_land_area" => "2440",
                "lga_distance_from_jos" => "194 Km South East of Jos",
                "lga_minerals" => "Quartz, Hard Rock, Sand, Gemstones (Tourmaline, Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive, Flouride)",
                "lga_produce" => "Groundnut, maize, pepper, cotton, millet, cowpea, rice, yam, cassava, guinea corn, bambaranuts",
                "lga_festive_dates" => "Taroh Day (Mar/Apr)",
                "lga_opportunities" => "Large scale manufacturing of rice for local consumption and export purposes.",
                "lga_attractions" => "N/A",
                "lga_id" => 9
            ),

            // LANGTANG SOUTH LGA Data
            array(
                "lga_chairman" => "Hon. Bulus Vincent Venman", 
                "lga_population" => "106305", 
                "lga_land_area" => "1250",
                "lga_distance_from_jos" => "237 Km South East of Jos",
                "lga_minerals" => "Barytes, Hard Rock, Sand",
                "lga_produce" => "Groundnuts, rice, maize, yams, cassava, yams",
                "lga_festive_dates" => "Taroh Day (Mar/Apr), Resettlement Day",
                "lga_opportunities" => "Large scale production of some of the major crops grown here.",
                "lga_attractions" => "N/A",
                "lga_id" => 10
            ),

            // MANGU LGA Data
            array(
                "lga_chairman" => "Hon. Dapuy Minister Daniel", 
                "lga_population" => "294931", 
                "lga_land_area" => "1587.5",
                "lga_distance_from_jos" => "77 Km South East of Jos",
                "lga_minerals" => "Zircon, Garnet, Magnetite, Wolframite, Ilenite/Rutile, Clay, Hard Rock, Sand",
                "lga_produce" => "Maize, potatoes, guinea corn, cocoyam, sweet potatoes, kidney beans, cowpea, sugar cane, acha",
                "lga_festive_dates" => "Puskaat (April)",
                "lga_opportunities" => "Large scale production of sugarcane for processing into other finished products and other crops as well.",
                "lga_attractions" => "N/A",
                "lga_id" => 11
            ),

            // MIKANG LGA Data
            array(
                "lga_chairman" => "Hon. Bako Augustine", 
                "lga_population" => "97411", 
                "lga_land_area" => "630",
                "lga_distance_from_jos" => "240 Km South East of Jos",
                "lga_minerals" => "Hard Rock, Sand",
                "lga_produce" => "Guinea corn, groundnuts, bambaranuts, cowpeas, millet, maize, yams, cassava",
                "lga_festive_dates" => "Rye-Ywom (Dec)",
                "lga_opportunities" => "Glass sand exploration and processing into glass and ceramics.",
                "lga_attractions" => "N/A",
                "lga_id" => 12
            ),

            // PANKSHIN LGA Data
            array(
                "lga_chairman" => "Hon. Kak'mena Audu Goteng", 
                "lga_population" => "191685", 
                "lga_land_area" => "1334",
                "lga_distance_from_jos" => "120 Km South East of Jos",
                "lga_minerals" => "Zircon, Feldspar, Garnet, Mica, Talc, Hard Rock, Sand, Gemstones (Tourmaline, Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive, Flouride)",
                "lga_produce" => "Maize, rice, acha, potatoes, olive fruits, millet, guinea corn, cowpeas, tomatoes",
                "lga_festive_dates" => "Pusdung (Mar/April)",
                "lga_opportunities" => "Olive oil processing and others",
                "lga_attractions" => "N/A",
                "lga_id" => 13
            ),

            // QUA'AN PAN LGA Data
            array(
                "lga_chairman" => "Hon. Da'a Ernest Abner", 
                "lga_population" => "196929", 
                "lga_land_area" => "2688",
                "lga_distance_from_jos" => "298 Km South East of Jos",
                "lga_minerals" => "Barytes, Salt, Hard Rock, Sand",
                "lga_produce" => "Rice, yam, maize, cassava, sorghum, bambara nuts",
                "lga_festive_dates" => "Bit Goemai (Mar/Apr), Pan (March)",
                "lga_opportunities" => "Large scale Yam and Rice production for export purposes and others",
                "lga_attractions" => "N/A",
                "lga_id" => 14
            ),

            // RIYOM LGA Data
            array(
                "lga_chairman" => "Hon. Galleon Mafeng", 
                "lga_population" => "131557", 
                "lga_land_area" => "807",
                "lga_distance_from_jos" => "51 Km South West of Jos",
                "lga_minerals" => "Cassiterite, Columbite, Monazite, Quartz, Feldspars, Kaolin, Magnetite, Mica, Tin, Hard Rock, Sand, Gemstones (Tourmaline, Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive, Flouride) ",
                "lga_produce" => "Ginger, palm trees, Acha, millet, guinea corn, vegetables, yams, sugar cane, cocoyam, cassava, olive, fruits, citrus, potatoes and sweet potatoes",
                "lga_festive_dates" => "Nzem Berom (April)",
                "lga_opportunities" => "Large scale production and processing of vegetables and fruits and Gemstone exportation.",
                "lga_attractions" => "N/A",
                "lga_id" => 15
            ),

            // SHENDAM LGA Data
            array(
                "lga_chairman" => "Hon. Na'antuam Alexander", 
                "lga_population" => "208017", 
                "lga_land_area" => "2437",
                "lga_distance_from_jos" => "254 Km South East of Jos",
                "lga_minerals" => "Barytes, Salt, Hard Rock, Sand",
                "lga_produce" => "Yams, rice, guinea corn, maize, cassava, millet, groundnuts",
                "lga_festive_dates" => "Bit Goemai (Mar/Apr)",
                "lga_opportunities" => "Large scale production of Rice and Yam for export purposes",
                "lga_attractions" => "N/A",
                "lga_id" => 16
            ),
            
            // WASE LGA Data
            array(
                "lga_chairman" => "Hon. Buba Ado Abubakar", 
                "lga_population" => "161714", 
                "lga_land_area" => "4306",
                "lga_distance_from_jos" => "216 Km South West of Jos",
                "lga_minerals" => "Galena/Sphalerite, Gypsum, Hard Rock, Sand",
                "lga_produce" => "Guinea corn, cowpeas, maize, rice, millet, cassava, soya beans, watermelon, sweet melon",
                "lga_festive_dates" => "Thaar (Nov)",
                "lga_opportunities" => "Large scale production of Livestocks  and Yam for export purposes.",
                "lga_attractions" => "N/A",
                "lga_id" => 17
            ),
        );

        foreach($lgaDatas as $data) {
            $lgaData = new LgaData;
            $lgaData->lga_chairman = $data['lga_chairman'];
            $lgaData->lga_population = $data['lga_population'];
            $lgaData->lga_land_area = $data['lga_land_area'];
            $lgaData->lga_distance_from_jos = $data['lga_distance_from_jos'];
            $lgaData->lga_minerals = $data['lga_minerals'];
            $lgaData->lga_produce = $data['lga_produce'];
            $lgaData->lga_festive_dates = $data['lga_festive_dates'];
            $lgaData->lga_opportunities = $data['lga_opportunities'];
            $lgaData->lga_attractions = $data['lga_attractions'];
            $lgaData->lga_id = $data['lga_id'];
            $lgaData->save();
        }
    }
}
