<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('answers')->delete();
        
        \DB::table('answers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question_id' => 1,
                'answer_text' => 'Po, vetëm nëse vetura zhvillon shpejtësi maksimale',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:32:22',
                'updated_at' => '2026-03-15 22:32:22',
            ),
            1 => 
            array (
                'id' => 2,
                'question_id' => 1,
                'answer_text' => 'Jo, në asnjë rast',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:32:22',
                'updated_at' => '2026-03-15 22:32:22',
            ),
            2 => 
            array (
                'id' => 3,
                'question_id' => 1,
            'answer_text' => 'Po, duke vështruar trafikun nga prapa (pasqyret, këndin e vdekur) dhe sinjalizuar me tregues të drejtimit',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:32:22',
                'updated_at' => '2026-03-15 22:32:22',
            ),
            3 => 
            array (
                'id' => 4,
                'question_id' => 2,
            'answer_text' => 'Të largoj këmbën nga pedalja e gazit (nuk i jap gaz)',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:33:44',
                'updated_at' => '2026-03-15 23:19:08',
            ),
            4 => 
            array (
                'id' => 5,
                'question_id' => 2,
                'answer_text' => 'Të vazhdoj me të njëjtën shpejtësi',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:33:44',
                'updated_at' => '2026-03-15 23:19:08',
            ),
            5 => 
            array (
                'id' => 6,
                'question_id' => 2,
                'answer_text' => 'Nuk ndërrmarr asgjë pasi që këmbësori është i moshuar',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:33:44',
                'updated_at' => '2026-03-15 23:19:08',
            ),
            6 => 
            array (
                'id' => 7,
                'question_id' => 3,
                'answer_text' => 'Të lëviz me shpejtësi të rritur pranë autobusit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:36:29',
                'updated_at' => '2026-03-15 23:18:55',
            ),
            7 => 
            array (
                'id' => 8,
                'question_id' => 3,
                'answer_text' => 'Të ndalem prapa autobusit derisa të zbresin dhe të hyjnë udhëtarët',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:36:29',
                'updated_at' => '2026-03-15 23:18:55',
            ),
            8 => 
            array (
                'id' => 9,
                'question_id' => 3,
                'answer_text' => 'Këmbësorët që mund të dalin përpara dhe prapa autobusit dhe të kalojnë rrugën',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:36:29',
                'updated_at' => '2026-03-15 23:18:55',
            ),
            9 => 
            array (
                'id' => 10,
                'question_id' => 4,
                'answer_text' => 'Të zvogëloj distancën anësore të sigurisë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:37:31',
                'updated_at' => '2026-03-15 22:37:31',
            ),
            10 => 
            array (
                'id' => 11,
                'question_id' => 4,
                'answer_text' => 'Të jem i gatshëm për të reaguar në rast nevoje',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:37:31',
                'updated_at' => '2026-03-15 22:37:31',
            ),
            11 => 
            array (
                'id' => 12,
                'question_id' => 4,
            'answer_text' => 'Të përdor shenjën akustike (borinë) që këmbësorët të largohen nga rruga',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:37:31',
                'updated_at' => '2026-03-15 22:37:31',
            ),
            12 => 
            array (
                'id' => 13,
                'question_id' => 5,
                'answer_text' => 'Të ndalem për t\'i dhënë përparësi kalimi këmbësorit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:38:34',
                'updated_at' => '2026-03-15 22:38:34',
            ),
            13 => 
            array (
                'id' => 14,
                'question_id' => 5,
                'answer_text' => 'Të vazhdoj lëvizjen djathtas pa u ndalur, por me kujdes të shtuar',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:38:34',
                'updated_at' => '2026-03-15 22:38:34',
            ),
            14 => 
            array (
                'id' => 15,
                'question_id' => 5,
                'answer_text' => 'Të vazhdoj lëvizjen drejtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:38:34',
                'updated_at' => '2026-03-15 22:38:34',
            ),
            15 => 
            array (
                'id' => 16,
                'question_id' => 6,
                'answer_text' => 'Të frenoj',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:39:23',
                'updated_at' => '2026-03-15 22:39:23',
            ),
            16 => 
            array (
                'id' => 17,
                'question_id' => 6,
                'answer_text' => 'Të lëviz me shpejtësi të njëjtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:39:23',
                'updated_at' => '2026-03-15 22:39:23',
            ),
            17 => 
            array (
                'id' => 18,
                'question_id' => 6,
                'answer_text' => 'Nuk ndërmarr asgjë, biçiklisti nuk duhet të lëvizë në rrugë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:39:23',
                'updated_at' => '2026-03-15 22:39:23',
            ),
            18 => 
            array (
                'id' => 19,
                'question_id' => 7,
                'answer_text' => 'Të ndërroj shiritin e trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:40:55',
                'updated_at' => '2026-03-15 22:40:55',
            ),
            19 => 
            array (
                'id' => 20,
                'question_id' => 7,
                'answer_text' => 'Të rris shpejtësinë e lëvizjes pasi nuk ka këmbësorë në vendkalim',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:40:55',
                'updated_at' => '2026-03-15 22:40:55',
            ),
            20 => 
            array (
                'id' => 21,
                'question_id' => 7,
                'answer_text' => 'Sipas nevojës, do të zvogëloj shpejtësinë dhe do jem i gatshëm për frenim',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:40:55',
                'updated_at' => '2026-03-15 22:40:55',
            ),
            21 => 
            array (
                'id' => 22,
                'question_id' => 8,
                'answer_text' => 'Fushëpamjen e kufizuar',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:42:01',
                'updated_at' => '2026-03-15 22:42:01',
            ),
            22 => 
            array (
                'id' => 23,
                'question_id' => 8,
                'answer_text' => 'Ndalimin e tejkalimit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:42:01',
                'updated_at' => '2026-03-15 22:42:01',
            ),
            23 => 
            array (
                'id' => 24,
                'question_id' => 8,
                'answer_text' => 'Ndalimin e kthimit gjysmërrethor',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:42:01',
                'updated_at' => '2026-03-15 22:42:01',
            ),
            24 => 
            array (
                'id' => 25,
                'question_id' => 9,
                'answer_text' => 'Do të ndalem për t\'i dhënë përparësi kalimi këmbësorit',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:44:09',
                'updated_at' => '2026-03-15 22:44:09',
            ),
            25 => 
            array (
                'id' => 26,
                'question_id' => 9,
                'answer_text' => 'Do të vazhdoj lëvizjen pa u ndalur',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:44:09',
                'updated_at' => '2026-03-15 22:44:09',
            ),
            26 => 
            array (
                'id' => 27,
                'question_id' => 9,
            'answer_text' => 'Do të përdor shenjën akustike (borinë) që këmbësori të largohet nga rruga',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:44:09',
                'updated_at' => '2026-03-15 22:44:09',
            ),
            27 => 
            array (
                'id' => 28,
                'question_id' => 10,
                'answer_text' => 'Të lëviz me shpejtësi të njëjtë pasi kafshët në rrugë nuk paraqesin rrezik',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:45:06',
                'updated_at' => '2026-03-15 22:45:06',
            ),
            28 => 
            array (
                'id' => 29,
                'question_id' => 10,
            'answer_text' => 'Do të përdor shenjën akustike (borinë) për t\'u larguar kafshët nga rruga',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:45:06',
                'updated_at' => '2026-03-15 22:45:06',
            ),
            29 => 
            array (
                'id' => 30,
                'question_id' => 10,
                'answer_text' => 'Do të zvogëloj shpejtësinë sipas nevojës dhe do të jem i gatshëm për frenim',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:45:06',
                'updated_at' => '2026-03-15 22:45:06',
            ),
            30 => 
            array (
                'id' => 31,
                'question_id' => 11,
                'answer_text' => 'Përdorimin e dritave të gjata',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:49:58',
                'updated_at' => '2026-03-15 22:49:58',
            ),
            31 => 
            array (
                'id' => 32,
                'question_id' => 11,
                'answer_text' => 'Ndalimin e tejkalimit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:49:58',
                'updated_at' => '2026-03-15 22:49:58',
            ),
            32 => 
            array (
                'id' => 33,
                'question_id' => 11,
                'answer_text' => 'Përshtatjen e shpejtësisë dhe adaptimin e syve nga drita në errësirë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:49:58',
                'updated_at' => '2026-03-15 22:49:58',
            ),
            33 => 
            array (
                'id' => 34,
                'question_id' => 12,
                'answer_text' => 'Të ndalem për t’i dhënë përparësi kalimi autobusit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:51:06',
                'updated_at' => '2026-03-15 22:51:06',
            ),
            34 => 
            array (
                'id' => 35,
                'question_id' => 12,
                'answer_text' => 'Të ndërroj shiritin e trafikut majtas',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:51:06',
                'updated_at' => '2026-03-15 22:51:06',
            ),
            35 => 
            array (
                'id' => 36,
                'question_id' => 12,
                'answer_text' => 'Kam përparësi kalimi ndaj autobusit',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:51:06',
                'updated_at' => '2026-03-15 22:51:06',
            ),
            36 => 
            array (
                'id' => 37,
                'question_id' => 13,
                'answer_text' => 'Do të reagoj me kohë, në rast nevoje frenoj',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:55:56',
                'updated_at' => '2026-03-15 22:55:56',
            ),
            37 => 
            array (
                'id' => 38,
                'question_id' => 13,
                'answer_text' => 'Do të vazhdoj me shpejtësi të njëjtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:55:56',
                'updated_at' => '2026-03-15 22:55:56',
            ),
            38 => 
            array (
                'id' => 39,
                'question_id' => 13,
                'answer_text' => 'Nuk ndërrmar asgjë, biçiklisti është në trotuar',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:55:56',
                'updated_at' => '2026-03-15 22:55:56',
            ),
            39 => 
            array (
                'id' => 40,
                'question_id' => 14,
                'answer_text' => 'Ngushtimin e rrugës nga ana e majtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:56:43',
                'updated_at' => '2026-03-15 22:57:25',
            ),
            40 => 
            array (
                'id' => 41,
                'question_id' => 14,
                'answer_text' => 'Kthesën e rrezikshme majtas',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:56:43',
                'updated_at' => '2026-03-15 22:57:26',
            ),
            41 => 
            array (
                'id' => 42,
                'question_id' => 14,
                'answer_text' => 'Qafëmalin',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:56:43',
                'updated_at' => '2026-03-15 22:57:26',
            ),
            42 => 
            array (
                'id' => 43,
                'question_id' => 15,
                'answer_text' => 'Çdo herë duhet të ndalem para shenjës',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:58:24',
                'updated_at' => '2026-03-15 22:58:24',
            ),
            43 => 
            array (
                'id' => 44,
                'question_id' => 15,
                'answer_text' => 'Do t’i jap përparësi kalimi mjeteve të cilat lëvizin në kryqëzim',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:58:24',
                'updated_at' => '2026-03-15 22:58:24',
            ),
            44 => 
            array (
                'id' => 45,
                'question_id' => 15,
                'answer_text' => 'Kam përparësi kalimi ndaj mjeteve që lëvizin në kryqëzim',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:58:24',
                'updated_at' => '2026-03-15 22:58:24',
            ),
            45 => 
            array (
                'id' => 46,
                'question_id' => 16,
            'answer_text' => 'Po, pasi fushëpamja e rrugës është zvogëluar (kufizuar)',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:59:36',
                'updated_at' => '2026-03-15 22:59:36',
            ),
            46 => 
            array (
                'id' => 47,
                'question_id' => 16,
                'answer_text' => 'Po , pasi rruga e frenimit zgjatet',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 22:59:36',
                'updated_at' => '2026-03-15 22:59:36',
            ),
            47 => 
            array (
                'id' => 48,
                'question_id' => 16,
                'answer_text' => 'Po, pasi rruga e frenimit zvogëlohet',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 22:59:36',
                'updated_at' => '2026-03-15 22:59:36',
            ),
            48 => 
            array (
                'id' => 49,
                'question_id' => 17,
                'answer_text' => 'Të lëviz me kujdes të shtuar, pasi këmbësorët mund të dalin në rrugë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 23:00:39',
                'updated_at' => '2026-03-15 23:00:39',
            ),
            49 => 
            array (
                'id' => 50,
                'question_id' => 17,
                'answer_text' => 'Të lejoj autobusin të hyjë në trafik',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 23:00:39',
                'updated_at' => '2026-03-15 23:00:39',
            ),
            50 => 
            array (
                'id' => 51,
                'question_id' => 17,
                'answer_text' => 'Të ndalem derisa autobusi të shkyç treguesin e drejtimit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 23:00:39',
                'updated_at' => '2026-03-15 23:00:39',
            ),
            51 => 
            array (
                'id' => 52,
                'question_id' => 18,
                'answer_text' => 'Duhet të vazhdoj me të njëjtën shpejtësi',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 23:01:41',
                'updated_at' => '2026-03-15 23:01:41',
            ),
            52 => 
            array (
                'id' => 53,
                'question_id' => 18,
            'answer_text' => 'Të largoj këmbën nga pedalja e gazit (nuk i jap gaz)',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 23:01:41',
                'updated_at' => '2026-03-15 23:01:41',
            ),
            53 => 
            array (
                'id' => 54,
                'question_id' => 18,
                'answer_text' => 'Nuk ndërmarr asgjë pasi që fëmija është në trotuar',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 23:01:41',
                'updated_at' => '2026-03-15 23:01:41',
            ),
            54 => 
            array (
                'id' => 55,
                'question_id' => 19,
                'answer_text' => 'Do t’i jap përparësi kalimi këmbësorit',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 23:02:51',
                'updated_at' => '2026-03-15 23:11:18',
            ),
            55 => 
            array (
                'id' => 56,
                'question_id' => 19,
                'answer_text' => 'Të vazhdoj me shpejtësi të njëjtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 23:02:51',
                'updated_at' => '2026-03-15 23:11:18',
            ),
            56 => 
            array (
                'id' => 57,
                'question_id' => 19,
            'answer_text' => 'Do të përdor shenjën akustike (borinë) që këmbësori të largohet nga rruga',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 23:02:51',
                'updated_at' => '2026-03-15 23:11:18',
            ),
            57 => 
            array (
                'id' => 58,
                'question_id' => 20,
            'answer_text' => 'Jo, do të përdor shenjën akustike (borinë)',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 23:12:31',
                'updated_at' => '2026-03-15 23:12:31',
            ),
            58 => 
            array (
                'id' => 59,
                'question_id' => 20,
                'answer_text' => 'Po',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 23:12:32',
                'updated_at' => '2026-03-15 23:12:32',
            ),
            59 => 
            array (
                'id' => 60,
                'question_id' => 20,
                'answer_text' => 'Po, vetëm nëse janë fëmijë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 23:12:32',
                'updated_at' => '2026-03-15 23:12:32',
            ),
            60 => 
            array (
                'id' => 61,
                'question_id' => 21,
                'answer_text' => 'Jo',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-15 23:14:09',
                'updated_at' => '2026-03-15 23:14:27',
            ),
            61 => 
            array (
                'id' => 62,
                'question_id' => 21,
                'answer_text' => 'Po',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 23:14:09',
                'updated_at' => '2026-03-15 23:14:27',
            ),
            62 => 
            array (
                'id' => 63,
                'question_id' => 21,
                'answer_text' => 'Po, vetëm natën',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-15 23:14:09',
                'updated_at' => '2026-03-15 23:14:27',
            ),
            63 => 
            array (
                'id' => 64,
                'question_id' => 22,
                'answer_text' => 'Për mjete të cilat nuk mund të lëvizin me shpejtësi më të madhe se 60 km/h',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:38:47',
                'updated_at' => '2026-03-16 08:38:47',
            ),
            64 => 
            array (
                'id' => 65,
                'question_id' => 22,
                'answer_text' => 'Për tejkalim të automjeteve të cilat lëvizin shumë ngadalë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:38:47',
                'updated_at' => '2026-03-16 08:38:47',
            ),
            65 => 
            array (
                'id' => 66,
                'question_id' => 22,
                'answer_text' => 'Për ndalje emergjente në rast të defektit në automjet',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:38:47',
                'updated_at' => '2026-03-16 08:38:47',
            ),
            66 => 
            array (
                'id' => 67,
                'question_id' => 23,
                'answer_text' => 'Në shiritin 1',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:40:01',
                'updated_at' => '2026-03-19 20:44:09',
            ),
            67 => 
            array (
                'id' => 68,
                'question_id' => 23,
                'answer_text' => 'Në shiritin 2',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:40:01',
                'updated_at' => '2026-03-19 20:44:09',
            ),
            68 => 
            array (
                'id' => 69,
                'question_id' => 23,
                'answer_text' => 'Në shiritin 3 nëse është i lirë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:40:01',
                'updated_at' => '2026-03-19 20:44:09',
            ),
            69 => 
            array (
                'id' => 70,
                'question_id' => 24,
                'answer_text' => 'Të vazhdoj lëvizjen me shpejtësi të njëjtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:43:18',
                'updated_at' => '2026-03-16 08:43:18',
            ),
            70 => 
            array (
                'id' => 71,
                'question_id' => 24,
                'answer_text' => 'Nuk ndërrmarr asgjë, këmbësori nuk paraqet rrezik',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:43:18',
                'updated_at' => '2026-03-16 08:43:18',
            ),
            71 => 
            array (
                'id' => 72,
                'question_id' => 24,
                'answer_text' => 'Do të vëzhgoj këmbësorin në trotuar',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:43:18',
                'updated_at' => '2026-03-16 08:43:18',
            ),
            72 => 
            array (
                'id' => 73,
                'question_id' => 25,
                'answer_text' => 'Do të ndalem derisa të kalojnë këmbësorët',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:44:30',
                'updated_at' => '2026-03-16 08:44:30',
            ),
            73 => 
            array (
                'id' => 74,
                'question_id' => 25,
                'answer_text' => 'Do të lëviz me shpejtësi maksimale që zhvillon vetura',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:44:30',
                'updated_at' => '2026-03-16 08:44:30',
            ),
            74 => 
            array (
                'id' => 75,
                'question_id' => 25,
                'answer_text' => 'Do të vëzhgoj këmbësorët në trotuar',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:44:30',
                'updated_at' => '2026-03-16 08:44:30',
            ),
            75 => 
            array (
                'id' => 76,
                'question_id' => 26,
            'answer_text' => 'Largoj këmbën nga pedalja e gazit (nuk jap gaz)',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:45:36',
                'updated_at' => '2026-03-16 08:45:36',
            ),
            76 => 
            array (
                'id' => 77,
                'question_id' => 26,
                'answer_text' => 'Duhet të lëviz me shpejtësi të njëjtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:45:36',
                'updated_at' => '2026-03-16 08:45:36',
            ),
            77 => 
            array (
                'id' => 78,
                'question_id' => 26,
                'answer_text' => 'Frenimi i vrullshëm',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:45:36',
                'updated_at' => '2026-03-16 08:45:36',
            ),
            78 => 
            array (
                'id' => 79,
                'question_id' => 27,
                'answer_text' => 'Do të ndalem për t’i dhënë përparësi kalimi veturës e cila vjen nga kahu i kundërt i lëvizjes',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:46:38',
                'updated_at' => '2026-03-16 08:46:38',
            ),
            79 => 
            array (
                'id' => 80,
                'question_id' => 27,
                'answer_text' => 'Ndalimin e trafikut në dy kahe',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:46:38',
                'updated_at' => '2026-03-16 08:46:38',
            ),
            80 => 
            array (
                'id' => 81,
                'question_id' => 27,
                'answer_text' => 'Rrugën ku trafiku zhvillohet në një kah',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:46:38',
                'updated_at' => '2026-03-16 08:46:38',
            ),
            81 => 
            array (
                'id' => 82,
                'question_id' => 28,
                'answer_text' => 'Do të vazhdoj lëvizjen para veturës së kuqe',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:47:39',
                'updated_at' => '2026-03-16 08:47:39',
            ),
            82 => 
            array (
                'id' => 83,
                'question_id' => 28,
                'answer_text' => 'Do t’i jap përparësi kalimi veturës së kuqe',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:47:39',
                'updated_at' => '2026-03-16 08:47:39',
            ),
            83 => 
            array (
                'id' => 84,
                'question_id' => 28,
                'answer_text' => 'Shenjën “Rruga me përparësi kalimi”',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:47:39',
                'updated_at' => '2026-03-16 08:47:39',
            ),
            84 => 
            array (
                'id' => 85,
                'question_id' => 29,
                'answer_text' => 'Afërsinë e ngushtimit të rrugës në anën e djathtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:48:45',
                'updated_at' => '2026-03-16 08:48:45',
            ),
            85 => 
            array (
                'id' => 86,
                'question_id' => 29,
                'answer_text' => 'Ndalimin e trafikut për vetura',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:48:45',
                'updated_at' => '2026-03-16 08:48:45',
            ),
            86 => 
            array (
                'id' => 87,
                'question_id' => 29,
                'answer_text' => 'Ndalimin e tejkalimit të automjeteve, përveç motoçikletave pa rimorkio anësore',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:48:45',
                'updated_at' => '2026-03-16 08:48:45',
            ),
            87 => 
            array (
                'id' => 88,
                'question_id' => 30,
                'answer_text' => 'Nuk duhet të ndërmarr asnjë veprim pasi pengesën e kaloj lehtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:49:53',
                'updated_at' => '2026-03-16 08:49:53',
            ),
            88 => 
            array (
                'id' => 89,
                'question_id' => 30,
                'answer_text' => 'Me kujdes të shtuar e kaloj vendkalimin për këmbësorë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:49:53',
                'updated_at' => '2026-03-16 08:49:53',
            ),
            89 => 
            array (
                'id' => 90,
                'question_id' => 30,
                'answer_text' => 'Duhet të vazhdoj me të njëjtën shpejtësi',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:49:53',
                'updated_at' => '2026-03-16 08:49:53',
            ),
            90 => 
            array (
                'id' => 91,
                'question_id' => 31,
                'answer_text' => 'Devijimin e rrugës',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:50:46',
                'updated_at' => '2026-03-16 08:50:46',
            ),
            91 => 
            array (
                'id' => 92,
                'question_id' => 31,
                'answer_text' => 'Rrugën pa dalje',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:50:46',
                'updated_at' => '2026-03-16 08:50:46',
            ),
            92 => 
            array (
                'id' => 93,
                'question_id' => 31,
                'answer_text' => 'Qafëmalin',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:50:46',
                'updated_at' => '2026-03-16 08:50:46',
            ),
            93 => 
            array (
                'id' => 94,
                'question_id' => 32,
                'answer_text' => 'Qafëmalin',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:52:01',
                'updated_at' => '2026-03-16 08:52:01',
            ),
            94 => 
            array (
                'id' => 95,
                'question_id' => 32,
                'answer_text' => 'Tunelin në largësi 500 m nga shenja e trafikut',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:52:01',
                'updated_at' => '2026-03-16 08:52:01',
            ),
            95 => 
            array (
                'id' => 96,
                'question_id' => 32,
                'answer_text' => 'Pjesën e rrugës ku lejohet tejkalimi',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:52:01',
                'updated_at' => '2026-03-16 08:52:01',
            ),
            96 => 
            array (
                'id' => 97,
                'question_id' => 33,
            'answer_text' => 'Duhet të largoj këmbën nga gazi (nuk i jap gaz)',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:53:01',
                'updated_at' => '2026-03-16 08:53:01',
            ),
            97 => 
            array (
                'id' => 98,
                'question_id' => 33,
            'answer_text' => 'Duhet të largoj këmbën nga gazi (nuk i jap gaz)',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:53:01',
                'updated_at' => '2026-03-16 08:53:01',
            ),
            98 => 
            array (
                'id' => 99,
                'question_id' => 33,
                'answer_text' => 'Të kem kujdes pasi që mjetet mund të vijnë nga rrugët dytësore',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:53:01',
                'updated_at' => '2026-03-16 08:53:01',
            ),
            99 => 
            array (
                'id' => 100,
                'question_id' => 34,
                'answer_text' => 'Duhet të ndalem prapa autobusit dhe të pres derisa të niset nga vendndalja për autobusë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:54:11',
                'updated_at' => '2026-03-16 08:54:11',
            ),
            100 => 
            array (
                'id' => 101,
                'question_id' => 34,
                'answer_text' => 'Duhet të vazhdoj lëvizjen me shpetësi të rritur, pasi autobusi është ndalur në vendaljen për autobusë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:54:11',
                'updated_at' => '2026-03-16 08:54:11',
            ),
            101 => 
            array (
                'id' => 102,
                'question_id' => 34,
                'answer_text' => 'Do të vazhdoj lëvizjen me kujdes të shtuar',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:54:11',
                'updated_at' => '2026-03-16 08:54:11',
            ),
            102 => 
            array (
                'id' => 103,
                'question_id' => 35,
                'answer_text' => 'Në rrugën me lugje, do të zvogëloj shpejtësinë sipas nevojës',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:55:13',
                'updated_at' => '2026-03-16 08:55:13',
            ),
            103 => 
            array (
                'id' => 104,
                'question_id' => 35,
                'answer_text' => 'Ngushtimin e rrugës në anën e majtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:55:14',
                'updated_at' => '2026-03-16 08:55:14',
            ),
            104 => 
            array (
                'id' => 105,
                'question_id' => 35,
                'answer_text' => 'Afërsinë e tunelit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:55:14',
                'updated_at' => '2026-03-16 08:55:14',
            ),
            105 => 
            array (
                'id' => 106,
                'question_id' => 36,
                'answer_text' => 'Ndalimin e trafikut në dy kahe',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:56:17',
                'updated_at' => '2026-03-16 08:56:17',
            ),
            106 => 
            array (
                'id' => 107,
                'question_id' => 36,
                'answer_text' => 'Rrugën ku trafiku zhvillohet në një kah',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:56:17',
                'updated_at' => '2026-03-16 08:56:17',
            ),
            107 => 
            array (
                'id' => 108,
                'question_id' => 36,
                'answer_text' => 'Përparësinë e kalimit ndaj veturës e cila lëviz nga kahu i kundërt',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:56:17',
                'updated_at' => '2026-03-16 08:56:17',
            ),
            108 => 
            array (
                'id' => 109,
                'question_id' => 37,
                'answer_text' => 'Duhet të ndalem para kryqëzimit',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:57:18',
                'updated_at' => '2026-03-16 08:57:18',
            ),
            109 => 
            array (
                'id' => 110,
                'question_id' => 37,
                'answer_text' => 'Duhet të vazhdoj lëvizjen pa u ndalur',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:57:18',
                'updated_at' => '2026-03-16 08:57:18',
            ),
            110 => 
            array (
                'id' => 111,
                'question_id' => 37,
                'answer_text' => 'Duhet të ndez të gjithë treguesit e drejtimit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:57:18',
                'updated_at' => '2026-03-16 08:57:18',
            ),
            111 => 
            array (
                'id' => 112,
                'question_id' => 38,
                'answer_text' => 'Rritja e distancës anësore nëse nuk ka mjete nga prapa',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:58:14',
                'updated_at' => '2026-03-16 08:58:14',
            ),
            112 => 
            array (
                'id' => 113,
                'question_id' => 38,
                'answer_text' => 'Duhet të vazhdoj me të njëjtën shpejtësi',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:58:14',
                'updated_at' => '2026-03-16 08:58:14',
            ),
            113 => 
            array (
                'id' => 114,
                'question_id' => 38,
                'answer_text' => 'Nuk ndërrmarr asgjë, këmbësori duhet të largohet nga rruga',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:58:14',
                'updated_at' => '2026-03-16 08:58:14',
            ),
            114 => 
            array (
                'id' => 115,
                'question_id' => 39,
                'answer_text' => 'Sipas nevojës, do të zvogëloj shpejtësinë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 08:59:14',
                'updated_at' => '2026-03-16 08:59:14',
            ),
            115 => 
            array (
                'id' => 116,
                'question_id' => 39,
                'answer_text' => 'Duhet të ndalem në vend që t’i vëzhgoj sjelljet e këmbësorëve',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:59:14',
                'updated_at' => '2026-03-16 08:59:14',
            ),
            116 => 
            array (
                'id' => 117,
                'question_id' => 39,
                'answer_text' => 'Duhet të vazhdojë lëvizjen me shpetësi të rritur',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 08:59:14',
                'updated_at' => '2026-03-16 08:59:14',
            ),
            117 => 
            array (
                'id' => 118,
                'question_id' => 40,
                'answer_text' => 'Do të ndez treguesin e majtë të drejtimit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:00:44',
                'updated_at' => '2026-03-16 09:00:44',
            ),
            118 => 
            array (
                'id' => 119,
                'question_id' => 40,
                'answer_text' => 'Do të vendos trekëndëshin e sigurisë prapa mjetit në distancë së paku 200 m',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:00:44',
                'updated_at' => '2026-03-16 09:00:44',
            ),
            119 => 
            array (
                'id' => 120,
                'question_id' => 40,
                'answer_text' => 'Do të vendos trekëndëshin e sigurisë prapa mjetit në distancë prej 30 - 50 m',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:00:44',
                'updated_at' => '2026-03-16 09:00:44',
            ),
            120 => 
            array (
                'id' => 121,
                'question_id' => 41,
                'answer_text' => 'Duhet të ndalem para shenjës',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:03:00',
                'updated_at' => '2026-03-16 09:03:00',
            ),
            121 => 
            array (
                'id' => 122,
                'question_id' => 41,
                'answer_text' => 'Ndalohet ndërrimi i shiritit të trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:03:00',
                'updated_at' => '2026-03-16 09:03:00',
            ),
            122 => 
            array (
                'id' => 123,
                'question_id' => 41,
                'answer_text' => 'Ndalimi i ndaljes dhe i parkimit vlen nga vendi i vendosjes së shenjës',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:03:00',
                'updated_at' => '2026-03-16 09:03:00',
            ),
            123 => 
            array (
                'id' => 124,
                'question_id' => 42,
                'answer_text' => 'Lejohet lëvizja drejt dhe djathtas',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:04:00',
                'updated_at' => '2026-03-16 09:04:00',
            ),
            124 => 
            array (
                'id' => 125,
                'question_id' => 42,
                'answer_text' => 'Ndalohet trafiku për këmbësorë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:04:00',
                'updated_at' => '2026-03-16 09:04:00',
            ),
            125 => 
            array (
                'id' => 126,
                'question_id' => 42,
                'answer_text' => 'Lejohet ndërrimi i shiritit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:04:00',
                'updated_at' => '2026-03-16 09:04:00',
            ),
            126 => 
            array (
                'id' => 127,
                'question_id' => 43,
                'answer_text' => 'Përdorimi i borisë që këmbësori të largohet nga rruga qarkulluese',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:05:10',
                'updated_at' => '2026-03-16 09:05:10',
            ),
            127 => 
            array (
                'id' => 128,
                'question_id' => 43,
            'answer_text' => 'Duhet të largohet këmba nga pedalja e gazit (nuk jepet gaz)',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:05:10',
                'updated_at' => '2026-03-16 09:05:10',
            ),
            128 => 
            array (
                'id' => 129,
                'question_id' => 43,
                'answer_text' => 'Vazhdimi i ngasjes me kujdes të shtuar',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:05:10',
                'updated_at' => '2026-03-16 09:05:10',
            ),
            129 => 
            array (
                'id' => 130,
                'question_id' => 44,
                'answer_text' => 'Të vazhdoj lëvizjen pasi në semafor është ndezur drita e gjelbër',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:08:02',
                'updated_at' => '2026-03-16 09:08:02',
            ),
            130 => 
            array (
                'id' => 131,
                'question_id' => 44,
                'answer_text' => 'Të ndalem para kryqëzimit',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:08:02',
                'updated_at' => '2026-03-16 09:08:02',
            ),
            131 => 
            array (
                'id' => 132,
                'question_id' => 44,
                'answer_text' => 'Nuk më lejohet t’i pengoja automjetet nga mbrapa',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:08:02',
                'updated_at' => '2026-03-16 09:08:02',
            ),
            132 => 
            array (
                'id' => 133,
                'question_id' => 45,
                'answer_text' => 'Distancën 80 m nga vendkalimi hekurudhor pa mbrojtëse ose gjysmëmbrojtëse',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:09:27',
                'updated_at' => '2026-03-16 09:09:27',
            ),
            133 => 
            array (
                'id' => 134,
                'question_id' => 45,
                'answer_text' => 'Distancën 240 m nga vendkalimi hekurudhor pa mbrojtëse ose gjysmëmbrojtëse',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:09:27',
                'updated_at' => '2026-03-16 09:09:27',
            ),
            134 => 
            array (
                'id' => 135,
                'question_id' => 45,
                'answer_text' => 'Afërsinë e vendkalimit për tramvaj',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:09:27',
                'updated_at' => '2026-03-16 09:09:27',
            ),
            135 => 
            array (
                'id' => 136,
                'question_id' => 46,
                'answer_text' => 'Jo, në asnjë rast',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:10:51',
                'updated_at' => '2026-03-16 09:10:51',
            ),
            136 => 
            array (
                'id' => 137,
                'question_id' => 46,
                'answer_text' => 'Po',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:10:51',
                'updated_at' => '2026-03-16 09:10:51',
            ),
            137 => 
            array (
                'id' => 138,
                'question_id' => 46,
                'answer_text' => 'Jo, vetëm jashtë vendbanimit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:10:51',
                'updated_at' => '2026-03-16 09:10:51',
            ),
            138 => 
            array (
                'id' => 139,
                'question_id' => 47,
                'answer_text' => 'Jo, në asnjë rast',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:12:46',
                'updated_at' => '2026-03-16 09:12:46',
            ),
            139 => 
            array (
                'id' => 140,
                'question_id' => 47,
                'answer_text' => 'Po, por duhet të pres deri sa të ndizet drita e gjelbër në semafor',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:12:46',
                'updated_at' => '2026-03-16 09:12:46',
            ),
            140 => 
            array (
                'id' => 141,
                'question_id' => 47,
                'answer_text' => 'Po, por duhet t‘u jepet përparësi kalimi këmbësorëve',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:12:46',
                'updated_at' => '2026-03-16 09:12:46',
            ),
            141 => 
            array (
                'id' => 142,
                'question_id' => 48,
                'answer_text' => 'Duhet të vëzhgoj sjelljen e këmbësorit',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:13:48',
                'updated_at' => '2026-03-16 09:13:48',
            ),
            142 => 
            array (
                'id' => 143,
                'question_id' => 48,
                'answer_text' => 'Duhet të rris shpejtësinë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:13:48',
                'updated_at' => '2026-03-16 09:13:48',
            ),
            143 => 
            array (
                'id' => 144,
                'question_id' => 48,
                'answer_text' => 'Duhet të ndalem në vend',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:13:48',
                'updated_at' => '2026-03-16 09:13:48',
            ),
            144 => 
            array (
                'id' => 145,
                'question_id' => 49,
                'answer_text' => 'Ndalimin e trafikut për fëmijë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:15:32',
                'updated_at' => '2026-03-16 09:15:32',
            ),
            145 => 
            array (
                'id' => 146,
                'question_id' => 49,
                'answer_text' => 'Shtegun për vrapim të fëmijëve',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:15:32',
                'updated_at' => '2026-03-16 09:15:32',
            ),
            146 => 
            array (
                'id' => 147,
                'question_id' => 49,
                'answer_text' => 'E zvogëloj shpejtësinë sipas nevojës, pasi mund të has fëmijë në rrugë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:15:32',
                'updated_at' => '2026-03-16 09:15:32',
            ),
            147 => 
            array (
                'id' => 148,
                'question_id' => 50,
                'answer_text' => 'Gjatë ndaljes së veturës për zbritjen e udhëtarëve',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:17:53',
                'updated_at' => '2026-03-16 09:17:53',
            ),
            148 => 
            array (
                'id' => 149,
                'question_id' => 50,
                'answer_text' => 'Me rastin e ndaljes së mjetit në rrugë, i cili bart materie të rrezikshme, për shkak të defektit',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:17:53',
                'updated_at' => '2026-03-16 09:17:53',
            ),
            149 => 
            array (
                'id' => 150,
                'question_id' => 50,
                'answer_text' => 'Gjatë punimeve në rrugë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:17:53',
                'updated_at' => '2026-03-16 09:17:53',
            ),
            150 => 
            array (
                'id' => 151,
                'question_id' => 51,
                'answer_text' => 'Rrugën e rrëshqitshme për shkak të borës',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:19:17',
                'updated_at' => '2026-03-16 09:19:17',
            ),
            151 => 
            array (
                'id' => 152,
                'question_id' => 51,
                'answer_text' => 'Frenimin e vrullshëm gjatë kthimit djathtas',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:19:17',
                'updated_at' => '2026-03-16 09:19:17',
            ),
            152 => 
            array (
                'id' => 153,
                'question_id' => 51,
                'answer_text' => 'Duhet të ndalem para shenjës së trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:19:17',
                'updated_at' => '2026-03-16 09:19:17',
            ),
            153 => 
            array (
                'id' => 154,
                'question_id' => 52,
            'answer_text' => 'E largoj këmbën nga pedalja e gazit (nuk i jap gaz)',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:20:52',
                'updated_at' => '2026-03-16 09:20:52',
            ),
            154 => 
            array (
                'id' => 155,
                'question_id' => 52,
                'answer_text' => 'Duhet të vazhdoj me shpejtësi të njëjtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:20:52',
                'updated_at' => '2026-03-16 09:20:52',
            ),
            155 => 
            array (
                'id' => 156,
                'question_id' => 52,
                'answer_text' => 'Nuk ndërrmarr asgjë, këmbësorët duhet të lëvizin në trotuar',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:20:52',
                'updated_at' => '2026-03-16 09:20:52',
            ),
            156 => 
            array (
                'id' => 157,
                'question_id' => 53,
            'answer_text' => 'Përdorimin e pajisjeve akustike të zërit (borinë)',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:22:33',
                'updated_at' => '2026-03-16 09:22:33',
            ),
            157 => 
            array (
                'id' => 158,
                'question_id' => 53,
                'answer_text' => 'Duhet të ndalem në vend që të vëzhgoj lëvizjen e kafshëve',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:22:33',
                'updated_at' => '2026-03-16 09:22:33',
            ),
            158 => 
            array (
                'id' => 159,
                'question_id' => 53,
                'answer_text' => 'Do të rris kujdesin, në rast nevoje do të ndal veturën',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:22:33',
                'updated_at' => '2026-03-16 09:22:33',
            ),
            159 => 
            array (
                'id' => 160,
                'question_id' => 54,
                'answer_text' => 'Të frenoj',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:23:14',
                'updated_at' => '2026-03-16 09:23:14',
            ),
            160 => 
            array (
                'id' => 161,
                'question_id' => 54,
                'answer_text' => 'Duhet të vazhdoj me shpejtësi të njëjtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:23:14',
                'updated_at' => '2026-03-16 09:23:14',
            ),
            161 => 
            array (
                'id' => 162,
                'question_id' => 54,
                'answer_text' => 'Nuk ndërrmarr asgjë, këmbësori nuk duhet të lëvizë në rrugë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:23:14',
                'updated_at' => '2026-03-16 09:23:14',
            ),
            162 => 
            array (
                'id' => 163,
                'question_id' => 55,
                'answer_text' => 'Fushëpamjen e kufizuar të rrugës',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:25:17',
                'updated_at' => '2026-03-16 09:25:17',
            ),
            163 => 
            array (
                'id' => 164,
                'question_id' => 55,
                'answer_text' => 'Kujdesin e shtuar, rruga e frenimit zgjatet',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:25:17',
                'updated_at' => '2026-03-16 09:25:17',
            ),
            164 => 
            array (
                'id' => 165,
                'question_id' => 55,
                'answer_text' => 'Vazhdoj lëvizjen duke e rritur shpejtësinë pasi rruga është e lirë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:25:17',
                'updated_at' => '2026-03-16 09:25:17',
            ),
            165 => 
            array (
                'id' => 166,
                'question_id' => 56,
                'answer_text' => 'Afërsinë e qafëmalit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:28:21',
                'updated_at' => '2026-03-16 09:28:21',
            ),
            166 => 
            array (
                'id' => 167,
                'question_id' => 56,
                'answer_text' => 'Ngushtimin e rrugës në të dyja anët, do të përshtas shpejtësinë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:28:21',
                'updated_at' => '2026-03-16 09:28:21',
            ),
            167 => 
            array (
                'id' => 168,
                'question_id' => 56,
                'answer_text' => 'Nga shenja fillon të zhvillohet trafiku në një kah',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:28:21',
                'updated_at' => '2026-03-16 09:28:21',
            ),
            168 => 
            array (
                'id' => 169,
                'question_id' => 57,
                'answer_text' => 'Gjatë ndaljes së veturës për zbritjen e udhëtarëve',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:32:20',
                'updated_at' => '2026-03-16 09:32:20',
            ),
            169 => 
            array (
                'id' => 170,
                'question_id' => 57,
                'answer_text' => 'Gjatë punimeve në rrugë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:32:20',
                'updated_at' => '2026-03-16 09:32:20',
            ),
            170 => 
            array (
                'id' => 171,
                'question_id' => 57,
                'answer_text' => 'Me rastin e ndaljes së kolonës në rrugë për shkak të defektit',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:32:20',
                'updated_at' => '2026-03-16 09:32:20',
            ),
            171 => 
            array (
                'id' => 172,
                'question_id' => 58,
                'answer_text' => 'Fushëpamjen e kufizuar të rrugës',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:33:17',
                'updated_at' => '2026-03-16 09:33:17',
            ),
            172 => 
            array (
                'id' => 173,
                'question_id' => 58,
            'answer_text' => 'Përdorimin e shenjës akustike (borisë) dhe vazhdimin e lëvizjes me shpejtësi të njëjtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:33:17',
                'updated_at' => '2026-03-16 09:33:17',
            ),
            173 => 
            array (
                'id' => 174,
                'question_id' => 58,
                'answer_text' => 'Këmbësorët mund të dalin në rrugë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:33:17',
                'updated_at' => '2026-03-16 09:33:17',
            ),
            174 => 
            array (
                'id' => 175,
                'question_id' => 59,
                'answer_text' => 'Mund të dalë ndonjë këmbësor ndërmjet mjeteve të parkuara',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:34:08',
                'updated_at' => '2026-03-16 09:34:08',
            ),
            175 => 
            array (
                'id' => 176,
                'question_id' => 59,
                'answer_text' => 'Më lejohet ndërrimi i shiritit majtas',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:34:08',
                'updated_at' => '2026-03-16 09:34:08',
            ),
            176 => 
            array (
                'id' => 177,
                'question_id' => 59,
                'answer_text' => 'Duhet të zvogëloj distancën e sigurisë ndaj mjetit që lëviz përpara',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:34:08',
                'updated_at' => '2026-03-16 09:34:08',
            ),
            177 => 
            array (
                'id' => 178,
                'question_id' => 60,
                'answer_text' => 'Frenimi në rast nevoje',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:35:59',
                'updated_at' => '2026-03-16 09:35:59',
            ),
            178 => 
            array (
                'id' => 179,
                'question_id' => 60,
                'answer_text' => 'Duhet të vazhdoj me shpejtësi të njëjtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:35:59',
                'updated_at' => '2026-03-16 09:35:59',
            ),
            179 => 
            array (
                'id' => 180,
                'question_id' => 60,
                'answer_text' => 'Nuk ndërrmarr asgjë, trotineti nuk paraqet rrezik',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:35:59',
                'updated_at' => '2026-03-16 09:35:59',
            ),
            180 => 
            array (
                'id' => 181,
                'question_id' => 61,
                'answer_text' => 'Të frenoj',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:37:07',
                'updated_at' => '2026-03-16 09:37:07',
            ),
            181 => 
            array (
                'id' => 182,
                'question_id' => 61,
                'answer_text' => 'Të vazhdoj me shpejtësi të njëjtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:37:07',
                'updated_at' => '2026-03-16 09:37:07',
            ),
            182 => 
            array (
                'id' => 183,
                'question_id' => 61,
                'answer_text' => 'Nuk ndërrmar asgjë, këmbësorët lëvizin jo drejt',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:37:07',
                'updated_at' => '2026-03-16 09:37:07',
            ),
            183 => 
            array (
                'id' => 184,
                'question_id' => 62,
                'answer_text' => 'Duhet të përdor borinë për shoferin që nuk i respekton rregullat e trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:39:47',
                'updated_at' => '2026-03-16 09:39:47',
            ),
            184 => 
            array (
                'id' => 185,
                'question_id' => 62,
            'answer_text' => 'Të largoj këmbën nga pedalja e gazit (nuk i jap gaz) dhe t’ia mundësoj veturës hyrjen në trafik',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:39:47',
                'updated_at' => '2026-03-16 09:39:47',
            ),
            185 => 
            array (
                'id' => 186,
                'question_id' => 62,
                'answer_text' => 'Duhet të vazhdoj lëvizjen me shpejtësi të njëjtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:39:47',
                'updated_at' => '2026-03-16 09:39:47',
            ),
            186 => 
            array (
                'id' => 187,
                'question_id' => 63,
            'answer_text' => 'Të largoj këmbën nga pedalja e gazit (nuk i jap gaz)',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:40:56',
                'updated_at' => '2026-03-16 09:40:56',
            ),
            187 => 
            array (
                'id' => 188,
                'question_id' => 63,
                'answer_text' => 'Duhet të vazhdoj lëvizjen me shpejtësi të njëjtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:40:56',
                'updated_at' => '2026-03-16 09:40:56',
            ),
            188 => 
            array (
                'id' => 189,
                'question_id' => 63,
                'answer_text' => 'Nuk ndërrmarr asgjë, këmbësori duhet të largohet nga rruga',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:40:56',
                'updated_at' => '2026-03-16 09:40:56',
            ),
            189 => 
            array (
                'id' => 190,
                'question_id' => 64,
                'answer_text' => 'Të vazhdoj lëvizjen pa u ndalur pasi është ndezur drita e gjelbër në semafor',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:43:13',
                'updated_at' => '2026-03-16 09:43:13',
            ),
            190 => 
            array (
                'id' => 191,
                'question_id' => 64,
                'answer_text' => 'Duhet të ndalem para kryqëzimit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:43:13',
                'updated_at' => '2026-03-16 09:43:13',
            ),
            191 => 
            array (
                'id' => 192,
                'question_id' => 64,
                'answer_text' => 'Më lejohet ndërrimi i shiritave të trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:43:13',
                'updated_at' => '2026-03-16 09:43:13',
            ),
            192 => 
            array (
                'id' => 193,
                'question_id' => 65,
                'answer_text' => 'Rrugën ku mund të hasni biçiklistë dhe këmbësorë, sepse shtegu i tyre përfundon',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:44:54',
                'updated_at' => '2026-03-16 09:44:54',
            ),
            193 => 
            array (
                'id' => 194,
                'question_id' => 65,
                'answer_text' => 'Pjesën e rrugës ku ndalohet trafiku për biçiklistë dhe këmbësorë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:44:54',
                'updated_at' => '2026-03-16 09:44:54',
            ),
            194 => 
            array (
                'id' => 195,
                'question_id' => 65,
                'answer_text' => 'Shtegun e vrapimit për biçiklistë dhe këmbësorë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:44:54',
                'updated_at' => '2026-03-16 09:44:54',
            ),
            195 => 
            array (
                'id' => 196,
                'question_id' => 66,
                'answer_text' => 'Drejt',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:47:34',
                'updated_at' => '2026-03-16 09:47:34',
            ),
            196 => 
            array (
                'id' => 197,
                'question_id' => 66,
                'answer_text' => 'Jo drejt',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:47:34',
                'updated_at' => '2026-03-16 09:47:34',
            ),
            197 => 
            array (
                'id' => 198,
                'question_id' => 66,
                'answer_text' => 'Drejt vetëm ditën',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:47:34',
                'updated_at' => '2026-03-16 09:47:34',
            ),
            198 => 
            array (
                'id' => 199,
                'question_id' => 67,
                'answer_text' => 'Ndalohet hyrja në këtë rrugë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:48:49',
                'updated_at' => '2026-03-16 09:48:49',
            ),
            199 => 
            array (
                'id' => 200,
                'question_id' => 67,
                'answer_text' => 'Të ndez të gjithë treguesit e drejtimit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:48:49',
                'updated_at' => '2026-03-16 09:48:49',
            ),
            200 => 
            array (
                'id' => 201,
                'question_id' => 67,
                'answer_text' => 'Të vazhdoj lëvizjen drejt, këmbësorët duhet të lëvizin në trotuar',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:48:49',
                'updated_at' => '2026-03-16 09:48:49',
            ),
            201 => 
            array (
                'id' => 202,
                'question_id' => 68,
                'answer_text' => 'Lejohet parkimi i veturave në trotuar',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:59:16',
                'updated_at' => '2026-03-16 09:59:16',
            ),
            202 => 
            array (
                'id' => 203,
                'question_id' => 68,
                'answer_text' => 'Ndalohet ndalja dhe parkimi në dy anët e rrugës ',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 09:59:16',
                'updated_at' => '2026-03-16 09:59:16',
            ),
            203 => 
            array (
                'id' => 204,
                'question_id' => 68,
                'answer_text' => 'Ndaljen para shenjave të trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 09:59:16',
                'updated_at' => '2026-03-16 09:59:16',
            ),
            204 => 
            array (
                'id' => 205,
                'question_id' => 69,
                'answer_text' => 'Të vendoset trekëndëshi i sigurisë në largësi prej së paku 200 m, pas mjetit të ndalur',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:00:39',
                'updated_at' => '2026-03-16 10:00:39',
            ),
            205 => 
            array (
                'id' => 206,
                'question_id' => 69,
                'answer_text' => 'Të vendoset trekëndëshi i sigurisë në largësi prej së paku 50 m, pas mjetit të ndalur',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:00:39',
                'updated_at' => '2026-03-16 10:00:39',
            ),
            206 => 
            array (
                'id' => 207,
                'question_id' => 69,
                'answer_text' => 'Të ndez të gjithë treguesit e drejtimit',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:00:39',
                'updated_at' => '2026-03-16 10:00:39',
            ),
            207 => 
            array (
                'id' => 208,
                'question_id' => 70,
                'answer_text' => 'Pas kthesës mund të has në ndonjë mjet që lëviz ngadalë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:03:09',
                'updated_at' => '2026-03-16 10:03:09',
            ),
            208 => 
            array (
                'id' => 209,
                'question_id' => 70,
                'answer_text' => 'Frenimin e vrullshëm në mes të kthesës',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:03:09',
                'updated_at' => '2026-03-16 10:03:09',
            ),
            209 => 
            array (
                'id' => 210,
                'question_id' => 70,
                'answer_text' => 'Lejohet ndërrimi me kujdes i shiritit të trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:03:09',
                'updated_at' => '2026-03-16 10:03:09',
            ),
            210 => 
            array (
                'id' => 211,
                'question_id' => 71,
                'answer_text' => 'Mund të has kafshë shtëpiake në rrugë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:04:37',
                'updated_at' => '2026-03-16 10:04:37',
            ),
            211 => 
            array (
                'id' => 212,
                'question_id' => 71,
                'answer_text' => 'Zvogëlimin e distancës së sigurisë ndaj mjetit që lëviz përpara',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:04:37',
                'updated_at' => '2026-03-16 10:04:37',
            ),
            212 => 
            array (
                'id' => 213,
                'question_id' => 71,
                'answer_text' => 'Kafshët e egra në rrugë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:04:37',
                'updated_at' => '2026-03-16 10:04:37',
            ),
            213 => 
            array (
                'id' => 214,
                'question_id' => 72,
                'answer_text' => 'Do të zvogëloj shpejtësinë dhe do të jem i gatshëm për frenim pasi fëmijët mund të vrapojnë pas topit',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:05:57',
                'updated_at' => '2026-03-16 10:05:57',
            ),
            214 => 
            array (
                'id' => 215,
                'question_id' => 72,
            'answer_text' => 'Do të përdor shenjën akustike (borinë) dhe do të vazhdoj lëvizjen me shpejtësi të njëjtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:05:57',
                'updated_at' => '2026-03-16 10:05:57',
            ),
            215 => 
            array (
                'id' => 216,
                'question_id' => 72,
                'answer_text' => 'Do të vazhdoj me shpejtësi të rritur pasi nuk ka fëmijë në rrugë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:05:57',
                'updated_at' => '2026-03-16 10:05:57',
            ),
            216 => 
            array (
                'id' => 217,
                'question_id' => 73,
                'answer_text' => 'Kthesën e rrezikshme majtas dhe përshtatjen e shpejtësisë varësisht nga ashpërsia e kthesës',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:07:01',
                'updated_at' => '2026-03-16 10:07:01',
            ),
            217 => 
            array (
                'id' => 218,
                'question_id' => 73,
                'answer_text' => 'Kthesën e rrezikshme djathtas',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:07:01',
                'updated_at' => '2026-03-16 10:07:01',
            ),
            218 => 
            array (
                'id' => 219,
                'question_id' => 73,
                'answer_text' => 'Rritjen e shpejtësisë në hyrje të kthesës',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:07:01',
                'updated_at' => '2026-03-16 10:07:01',
            ),
            219 => 
            array (
                'id' => 220,
                'question_id' => 74,
                'answer_text' => 'Mjetet që lëvizin prapa autobusit duhet të ndalen derisa fëmijët të hyjnë ose të dalin nga autobusi',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:08:16',
                'updated_at' => '2026-03-16 10:08:16',
            ),
            220 => 
            array (
                'id' => 221,
                'question_id' => 74,
                'answer_text' => 'Autobusi duhet të lëviz prapa',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:08:16',
                'updated_at' => '2026-03-16 10:08:16',
            ),
            221 => 
            array (
                'id' => 222,
                'question_id' => 74,
                'answer_text' => 'Mjetet që lëvizin përballë autobusit duhet të vazhdojnë lëvizjen me shpejtësi të rritur',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:08:16',
                'updated_at' => '2026-03-16 10:08:16',
            ),
            222 => 
            array (
                'id' => 223,
                'question_id' => 75,
                'answer_text' => 'Ndalohet ndërrimi i shiritit të trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:10:01',
                'updated_at' => '2026-03-16 10:10:01',
            ),
            223 => 
            array (
                'id' => 224,
                'question_id' => 75,
                'answer_text' => 'Lëviz me kujdes të shtuar duke përshtatur shpejtësinë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:10:01',
                'updated_at' => '2026-03-16 10:10:01',
            ),
            224 => 
            array (
                'id' => 225,
                'question_id' => 75,
                'answer_text' => 'Do të përdor dritat e gjata për ndriçim që rruga të shihet më mirë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:10:01',
                'updated_at' => '2026-03-16 10:10:01',
            ),
            225 => 
            array (
                'id' => 226,
                'question_id' => 76,
                'answer_text' => 'Mjetet që lëvizin përballë autobusit duhet të ndalen derisa fëmijët hyjnë ose dalin nga autobusi',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:11:32',
                'updated_at' => '2026-03-16 10:11:32',
            ),
            226 => 
            array (
                'id' => 227,
                'question_id' => 76,
                'answer_text' => 'Autobusi duhet të lëviz prapa',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:11:32',
                'updated_at' => '2026-03-16 10:11:32',
            ),
            227 => 
            array (
                'id' => 228,
                'question_id' => 76,
                'answer_text' => 'Mjetet që lëvizin përballë autobusit duhet të vazhdojnë lëvizjen me shpejtësi të rritur',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:11:32',
                'updated_at' => '2026-03-16 10:11:32',
            ),
            228 => 
            array (
                'id' => 229,
                'question_id' => 77,
                'answer_text' => 'Vendparkimin për kamionë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:12:16',
                'updated_at' => '2026-03-16 10:12:16',
            ),
            229 => 
            array (
                'id' => 230,
                'question_id' => 77,
                'answer_text' => 'Kujdesin e shtuar ndaj këmbësorëve',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:12:16',
                'updated_at' => '2026-03-16 10:12:16',
            ),
            230 => 
            array (
                'id' => 231,
                'question_id' => 77,
                'answer_text' => 'Vendndaljen për autobusë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:12:16',
                'updated_at' => '2026-03-16 10:12:16',
            ),
            231 => 
            array (
                'id' => 232,
                'question_id' => 78,
                'answer_text' => 'Më lejohet lëvizja majtas',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:13:05',
                'updated_at' => '2026-03-16 10:13:05',
            ),
            232 => 
            array (
                'id' => 233,
                'question_id' => 78,
                'answer_text' => 'Rruga është e lirë, do të vazhdoj lëvizjen pa u ndalur',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:13:05',
                'updated_at' => '2026-03-16 10:13:05',
            ),
            233 => 
            array (
                'id' => 234,
                'question_id' => 78,
                'answer_text' => 'Më lejohet lëvizja drejt dhe djathtas',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:13:05',
                'updated_at' => '2026-03-16 10:13:05',
            ),
            234 => 
            array (
                'id' => 235,
                'question_id' => 79,
                'answer_text' => 'Më lejohet të vazhdoj lëvizjen vetëm drejt',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:14:03',
                'updated_at' => '2026-03-16 10:14:03',
            ),
            235 => 
            array (
                'id' => 236,
                'question_id' => 79,
                'answer_text' => 'Më lejohet ndërrimi i shiritit majtas',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:14:03',
                'updated_at' => '2026-03-16 10:14:03',
            ),
            236 => 
            array (
                'id' => 237,
                'question_id' => 79,
                'answer_text' => 'Më lejohet ndërrimi i shiritit djathtas',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:14:03',
                'updated_at' => '2026-03-16 10:14:03',
            ),
            237 => 
            array (
                'id' => 238,
                'question_id' => 80,
                'answer_text' => 'Do të kaloj në shiritin e majtë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:14:49',
                'updated_at' => '2026-03-16 10:14:49',
            ),
            238 => 
            array (
                'id' => 239,
                'question_id' => 80,
                'answer_text' => 'Duhet të ndalem në vend derisa nuk ka vetura në rrugë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:14:49',
                'updated_at' => '2026-03-16 10:14:49',
            ),
            239 => 
            array (
                'id' => 240,
                'question_id' => 80,
                'answer_text' => 'Ndalohet ndërrimi i shiritit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:14:49',
                'updated_at' => '2026-03-16 10:14:49',
            ),
            240 => 
            array (
                'id' => 241,
                'question_id' => 81,
                'answer_text' => 'Përshtatjen e shpejtësisë së lëvizjes pasi këmbësori mund të hyjë papritur në rrugë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:16:11',
                'updated_at' => '2026-03-16 10:16:11',
            ),
            241 => 
            array (
                'id' => 242,
                'question_id' => 81,
                'answer_text' => 'Rrugën ku trafiku zhvillohet në një kah',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:16:11',
                'updated_at' => '2026-03-16 10:16:11',
            ),
            242 => 
            array (
                'id' => 243,
                'question_id' => 81,
                'answer_text' => 'Ndalohet lëvizja drejt',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:16:11',
                'updated_at' => '2026-03-16 10:16:11',
            ),
            243 => 
            array (
                'id' => 244,
                'question_id' => 82,
                'answer_text' => 'Po',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:17:39',
                'updated_at' => '2026-03-16 10:17:39',
            ),
            244 => 
            array (
                'id' => 245,
                'question_id' => 82,
                'answer_text' => 'Jo',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:17:39',
                'updated_at' => '2026-03-16 10:17:39',
            ),
            245 => 
            array (
                'id' => 246,
                'question_id' => 82,
                'answer_text' => 'Po, nëse nuk pengohen pjesëmarrësit e tjerë në trafik',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:17:39',
                'updated_at' => '2026-03-16 10:17:39',
            ),
            246 => 
            array (
                'id' => 247,
                'question_id' => 83,
                'answer_text' => 'Vazhdimin e lëvizjes pa u ndalur pasi rruga është e lirë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:18:34',
                'updated_at' => '2026-03-16 10:18:34',
            ),
            247 => 
            array (
                'id' => 248,
                'question_id' => 83,
                'answer_text' => 'Duhet të respektoj shenjën “Ndalim kthimi majtas”',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:18:34',
                'updated_at' => '2026-03-16 10:18:34',
            ),
            248 => 
            array (
                'id' => 249,
                'question_id' => 83,
                'answer_text' => 'Duhet të kthehem majtas',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:18:34',
                'updated_at' => '2026-03-16 10:18:34',
            ),
            249 => 
            array (
                'id' => 250,
                'question_id' => 84,
            'answer_text' => 'Duhet të largoj këmbën nga pedalja e gazit (nuk i jap gaz)',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:19:59',
                'updated_at' => '2026-03-16 10:19:59',
            ),
            250 => 
            array (
                'id' => 251,
                'question_id' => 84,
                'answer_text' => 'Duhet të vazhdoj me shpejtësi të rritur',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:19:59',
                'updated_at' => '2026-03-16 10:19:59',
            ),
            251 => 
            array (
                'id' => 252,
                'question_id' => 84,
                'answer_text' => 'Nuk ndërrmarr asgjë pasi rruga është e lirë, vazhdoj lëvzijen duke e respekuar kufzimin maksimal të shpejtësisë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:19:59',
                'updated_at' => '2026-03-16 10:19:59',
            ),
            252 => 
            array (
                'id' => 253,
                'question_id' => 85,
                'answer_text' => 'Duhet të kthehem djathtas',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:20:42',
                'updated_at' => '2026-03-16 10:20:42',
            ),
            253 => 
            array (
                'id' => 254,
                'question_id' => 85,
                'answer_text' => 'Duhet të lëviz drejt',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:20:42',
                'updated_at' => '2026-03-16 10:20:42',
            ),
            254 => 
            array (
                'id' => 255,
                'question_id' => 85,
                'answer_text' => 'Mund të ndërroj shiritin e trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:20:42',
                'updated_at' => '2026-03-16 10:20:42',
            ),
            255 => 
            array (
                'id' => 256,
                'question_id' => 86,
                'answer_text' => 'Distancën e sigurisë gjatësore',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:22:24',
                'updated_at' => '2026-03-16 10:22:24',
            ),
            256 => 
            array (
                'id' => 257,
                'question_id' => 86,
                'answer_text' => 'Distancën e sigurisë së paku 200 m.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:22:24',
                'updated_at' => '2026-03-16 10:22:24',
            ),
            257 => 
            array (
                'id' => 258,
                'question_id' => 86,
                'answer_text' => 'Lejohet tejkalimi i kamionit, rruga është e lirë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:22:24',
                'updated_at' => '2026-03-16 10:22:24',
            ),
            258 => 
            array (
                'id' => 259,
                'question_id' => 87,
            'answer_text' => 'Do të përdor shenjën akustike (borinë) për t’ua tërhequr vërjetjen këmbësorëve',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:23:26',
                'updated_at' => '2026-03-16 10:23:26',
            ),
            259 => 
            array (
                'id' => 260,
                'question_id' => 87,
                'answer_text' => 'Do të ndalem për t’i dhënë përparësi kalimi këmbësorëve',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:23:26',
                'updated_at' => '2026-03-16 10:23:26',
            ),
            260 => 
            array (
                'id' => 261,
                'question_id' => 87,
                'answer_text' => 'Do të vazhdoj lëvizjen pa u ndalur',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:23:26',
                'updated_at' => '2026-03-16 10:23:26',
            ),
            261 => 
            array (
                'id' => 262,
                'question_id' => 88,
                'answer_text' => 'Kthesën e dyfishtë ose kthesën e shumëfishtë ku kthesa e parë është në të majtë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:24:26',
                'updated_at' => '2026-03-16 10:24:26',
            ),
            262 => 
            array (
                'id' => 263,
                'question_id' => 88,
                'answer_text' => 'Pjesën e rrugës ku ndalohet tejkalimi',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:24:26',
                'updated_at' => '2026-03-16 10:24:26',
            ),
            263 => 
            array (
                'id' => 264,
                'question_id' => 88,
                'answer_text' => 'Shpejtësinë e rekomanduar të lëvizjes',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:24:26',
                'updated_at' => '2026-03-16 10:24:26',
            ),
            264 => 
            array (
                'id' => 265,
                'question_id' => 89,
                'answer_text' => 'Vendparkimin për automjete',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:33:04',
                'updated_at' => '2026-03-16 10:33:04',
            ),
            265 => 
            array (
                'id' => 266,
                'question_id' => 89,
                'answer_text' => 'Fushën sportive ku luajnë fëmijët',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:33:04',
                'updated_at' => '2026-03-16 10:33:04',
            ),
            266 => 
            array (
                'id' => 267,
                'question_id' => 89,
                'answer_text' => 'Pjesën e rrugës ku mund të luajnë fëmijët',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:33:04',
                'updated_at' => '2026-03-16 10:33:04',
            ),
            267 => 
            array (
                'id' => 268,
                'question_id' => 90,
                'answer_text' => 'Më lejohet lëvizja drejt ose djathtas',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:33:46',
                'updated_at' => '2026-03-16 10:33:46',
            ),
            268 => 
            array (
                'id' => 269,
                'question_id' => 90,
                'answer_text' => 'Më lejohet ndërrimi i shiritit të trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:33:46',
                'updated_at' => '2026-03-16 10:33:46',
            ),
            269 => 
            array (
                'id' => 270,
                'question_id' => 90,
                'answer_text' => 'Duhet të ndalem para kryqëzimit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:33:46',
                'updated_at' => '2026-03-16 10:33:46',
            ),
            270 => 
            array (
                'id' => 271,
                'question_id' => 91,
                'answer_text' => 'Duhet të ndalem para kryqëzimit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:34:40',
                'updated_at' => '2026-03-16 10:34:40',
            ),
            271 => 
            array (
                'id' => 272,
                'question_id' => 91,
                'answer_text' => 'Do të vazhdoj lëvizjen drejt ose djathtas',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:34:40',
                'updated_at' => '2026-03-16 10:34:40',
            ),
            272 => 
            array (
                'id' => 273,
                'question_id' => 91,
                'answer_text' => 'Do të vazhdoj lëvizjen vetëm majtas',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:34:40',
                'updated_at' => '2026-03-16 10:34:40',
            ),
            273 => 
            array (
                'id' => 274,
                'question_id' => 92,
                'answer_text' => 'Pjesën e rrugës ku ndalohet tejkalimi',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:35:54',
                'updated_at' => '2026-03-16 10:35:54',
            ),
            274 => 
            array (
                'id' => 275,
                'question_id' => 92,
            'answer_text' => 'Kontakti i gomave me rrugën zvogëlohet dukshëm (rrëshqitëshme).',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:35:54',
                'updated_at' => '2026-03-16 10:35:54',
            ),
            275 => 
            array (
                'id' => 276,
                'question_id' => 92,
                'answer_text' => 'Ndalohet ndërrimi i shiritit të trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:35:54',
                'updated_at' => '2026-03-16 10:35:54',
            ),
            276 => 
            array (
                'id' => 277,
                'question_id' => 93,
                'answer_text' => 'Të frenoj',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:37:43',
                'updated_at' => '2026-03-16 10:37:43',
            ),
            277 => 
            array (
                'id' => 278,
                'question_id' => 93,
                'answer_text' => 'Afërsinë e vendit ku mund të has fëmijë në rrugë dhe do të vazhdoj ngasjen me kujdes të shtuar',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:37:43',
                'updated_at' => '2026-03-16 10:37:43',
            ),
            278 => 
            array (
                'id' => 279,
                'question_id' => 93,
                'answer_text' => 'Duhet të ndalem te shenja e trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:37:43',
                'updated_at' => '2026-03-16 10:37:43',
            ),
            279 => 
            array (
                'id' => 280,
                'question_id' => 94,
                'answer_text' => 'Drejt, nëse nuk i pengon pjesëmarrësit tjerë në trafik',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:38:34',
                'updated_at' => '2026-03-16 10:38:34',
            ),
            280 => 
            array (
                'id' => 281,
                'question_id' => 94,
                'answer_text' => 'Drejt, nëse i ndez të gjithë treguesit e drejtimit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:38:34',
                'updated_at' => '2026-03-16 10:38:34',
            ),
            281 => 
            array (
                'id' => 282,
                'question_id' => 94,
                'answer_text' => 'Jo, drejt',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:38:34',
                'updated_at' => '2026-03-16 10:38:34',
            ),
            282 => 
            array (
                'id' => 283,
                'question_id' => 95,
                'answer_text' => 'Të frenoj',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:39:31',
                'updated_at' => '2026-03-16 10:39:31',
            ),
            283 => 
            array (
                'id' => 284,
                'question_id' => 95,
                'answer_text' => 'Duhet të vazhdoj me shpejtësi të njëjtë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:39:31',
                'updated_at' => '2026-03-16 10:39:31',
            ),
            284 => 
            array (
                'id' => 285,
                'question_id' => 95,
                'answer_text' => 'Nuk ndërrmarr asgjë pasi rruga është e lirë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:39:31',
                'updated_at' => '2026-03-16 10:39:31',
            ),
            285 => 
            array (
                'id' => 286,
                'question_id' => 96,
                'answer_text' => 'Do t’i jap përparësi kalimi të gjitha mjeteve të cilat lëvizin në rrugë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:40:53',
                'updated_at' => '2026-03-16 10:40:53',
            ),
            286 => 
            array (
                'id' => 287,
                'question_id' => 96,
                'answer_text' => 'Kam përparësi kalimi ndaj mjeteve të cilat lëvizin në rrugë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:40:54',
                'updated_at' => '2026-03-16 10:40:54',
            ),
            287 => 
            array (
                'id' => 288,
                'question_id' => 96,
                'answer_text' => 'Do të hyj në rrugë pa sinjalizuar me tregues të drejtimit, pasi rruga është e lirë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:40:54',
                'updated_at' => '2026-03-16 10:40:54',
            ),
            288 => 
            array (
                'id' => 289,
                'question_id' => 97,
                'answer_text' => 'Të lëviz me shpejtësi maksimale që zhvillon vetura',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:43:18',
                'updated_at' => '2026-03-16 10:43:18',
            ),
            289 => 
            array (
                'id' => 290,
                'question_id' => 97,
                'answer_text' => 'Ndalohet lëvizja mbi binar të tramvajit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:43:18',
                'updated_at' => '2026-03-16 10:43:18',
            ),
            290 => 
            array (
                'id' => 291,
                'question_id' => 97,
                'answer_text' => 'Lejohet lëvizja mbi binar të tramvajit',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:43:18',
                'updated_at' => '2026-03-16 10:43:18',
            ),
            291 => 
            array (
                'id' => 292,
                'question_id' => 98,
                'answer_text' => 'Do të vazhdoj ngasjen vetëm me dritat e pozicionit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:45:41',
                'updated_at' => '2026-03-16 10:45:41',
            ),
            292 => 
            array (
                'id' => 293,
                'question_id' => 98,
                'answer_text' => 'Mund të mos vërehen me kohë këmbësorët dhe mjetet që nuk kanë ndriçim vetanak',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:45:41',
                'updated_at' => '2026-03-16 10:45:41',
            ),
            293 => 
            array (
                'id' => 294,
                'question_id' => 98,
                'answer_text' => 'Do të përdor dritat e gjata',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:45:41',
                'updated_at' => '2026-03-16 10:45:41',
            ),
            294 => 
            array (
                'id' => 295,
                'question_id' => 99,
                'answer_text' => 'Ndalohet ndërrimi i shiritit të trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:46:52',
                'updated_at' => '2026-03-16 10:46:52',
            ),
            295 => 
            array (
                'id' => 296,
                'question_id' => 99,
                'answer_text' => 'Do të zvogëloj shpejtësinë dhe do të jem i gatshëm për frenim',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:46:52',
                'updated_at' => '2026-03-16 10:46:52',
            ),
            296 => 
            array (
                'id' => 297,
                'question_id' => 99,
                'answer_text' => 'Duhet të ndalem në vend derisa të kalojnë fëmijët',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:46:52',
                'updated_at' => '2026-03-16 10:46:52',
            ),
            297 => 
            array (
                'id' => 298,
                'question_id' => 100,
                'answer_text' => 'Përdorimi i pajisjeve dimërore',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:47:42',
                'updated_at' => '2026-03-16 10:47:42',
            ),
            298 => 
            array (
                'id' => 299,
                'question_id' => 100,
                'answer_text' => 'Zgjatja e kohës së reagimit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:47:42',
                'updated_at' => '2026-03-16 10:47:42',
            ),
            299 => 
            array (
                'id' => 300,
                'question_id' => 100,
                'answer_text' => 'Mbulimi me borë i shenjave të trafikut',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:47:42',
                'updated_at' => '2026-03-16 10:47:42',
            ),
            300 => 
            array (
                'id' => 301,
                'question_id' => 101,
                'answer_text' => 'Respektimin e shenjës së trafikut për kthim djathtas',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:48:31',
                'updated_at' => '2026-03-16 10:48:31',
            ),
            301 => 
            array (
                'id' => 302,
                'question_id' => 101,
                'answer_text' => 'Duhet të ndalem para kryqëzimit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:48:31',
                'updated_at' => '2026-03-16 10:48:31',
            ),
            302 => 
            array (
                'id' => 303,
                'question_id' => 101,
                'answer_text' => 'Duhet të frenoj vrullshëm',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:48:31',
                'updated_at' => '2026-03-16 10:48:31',
            ),
            303 => 
            array (
                'id' => 304,
                'question_id' => 102,
                'answer_text' => 'Qafë mali',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:49:40',
                'updated_at' => '2026-03-16 10:49:40',
            ),
            304 => 
            array (
                'id' => 305,
                'question_id' => 102,
                'answer_text' => 'Në afërsi të rrethrrotullimit, në përshtatje të shpejtësisë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 10:49:40',
                'updated_at' => '2026-03-16 10:49:40',
            ),
            305 => 
            array (
                'id' => 306,
                'question_id' => 102,
                'answer_text' => 'Shpejtësinë minimale të lëvizjës',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 10:49:40',
                'updated_at' => '2026-03-16 10:49:40',
            ),
            306 => 
            array (
                'id' => 307,
                'question_id' => 103,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 11:57:05',
                'updated_at' => '2026-03-16 11:57:05',
            ),
            307 => 
            array (
                'id' => 308,
                'question_id' => 103,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 11:57:05',
                'updated_at' => '2026-03-16 11:57:05',
            ),
            308 => 
            array (
                'id' => 309,
                'question_id' => 104,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 11:57:55',
                'updated_at' => '2026-03-16 11:57:55',
            ),
            309 => 
            array (
                'id' => 310,
                'question_id' => 104,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 11:57:55',
                'updated_at' => '2026-03-16 11:57:55',
            ),
            310 => 
            array (
                'id' => 311,
                'question_id' => 105,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 11:59:19',
                'updated_at' => '2026-03-16 11:59:33',
            ),
            311 => 
            array (
                'id' => 312,
                'question_id' => 105,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 11:59:19',
                'updated_at' => '2026-03-16 11:59:33',
            ),
            312 => 
            array (
                'id' => 313,
                'question_id' => 106,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 12:00:35',
                'updated_at' => '2026-03-16 12:00:35',
            ),
            313 => 
            array (
                'id' => 314,
                'question_id' => 106,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 12:00:35',
                'updated_at' => '2026-03-16 12:00:35',
            ),
            314 => 
            array (
                'id' => 315,
                'question_id' => 107,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 12:01:56',
                'updated_at' => '2026-03-16 12:24:30',
            ),
            315 => 
            array (
                'id' => 316,
                'question_id' => 107,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 12:01:56',
                'updated_at' => '2026-03-16 12:24:30',
            ),
            316 => 
            array (
                'id' => 317,
                'question_id' => 108,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 12:02:43',
                'updated_at' => '2026-03-16 12:26:44',
            ),
            317 => 
            array (
                'id' => 318,
                'question_id' => 108,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 12:02:43',
                'updated_at' => '2026-03-16 12:26:44',
            ),
            318 => 
            array (
                'id' => 319,
                'question_id' => 109,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 12:03:28',
                'updated_at' => '2026-03-16 12:25:13',
            ),
            319 => 
            array (
                'id' => 320,
                'question_id' => 109,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 12:03:28',
                'updated_at' => '2026-03-16 12:25:13',
            ),
            320 => 
            array (
                'id' => 321,
                'question_id' => 110,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 12:04:17',
                'updated_at' => '2026-03-16 12:25:46',
            ),
            321 => 
            array (
                'id' => 322,
                'question_id' => 110,
                'answer_text' => 'E pasktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 12:04:17',
                'updated_at' => '2026-03-16 12:25:46',
            ),
            322 => 
            array (
                'id' => 323,
                'question_id' => 111,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:15:11',
                'updated_at' => '2026-03-16 13:15:11',
            ),
            323 => 
            array (
                'id' => 324,
                'question_id' => 111,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:15:11',
                'updated_at' => '2026-03-16 13:15:11',
            ),
            324 => 
            array (
                'id' => 325,
                'question_id' => 112,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:16:21',
                'updated_at' => '2026-03-16 13:16:21',
            ),
            325 => 
            array (
                'id' => 326,
                'question_id' => 112,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:16:21',
                'updated_at' => '2026-03-16 13:16:21',
            ),
            326 => 
            array (
                'id' => 327,
                'question_id' => 113,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:17:04',
                'updated_at' => '2026-03-16 13:17:04',
            ),
            327 => 
            array (
                'id' => 328,
                'question_id' => 113,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:17:04',
                'updated_at' => '2026-03-16 13:17:04',
            ),
            328 => 
            array (
                'id' => 329,
                'question_id' => 114,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:18:02',
                'updated_at' => '2026-03-16 13:18:02',
            ),
            329 => 
            array (
                'id' => 330,
                'question_id' => 114,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:18:02',
                'updated_at' => '2026-03-16 13:18:02',
            ),
            330 => 
            array (
                'id' => 331,
                'question_id' => 115,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:18:49',
                'updated_at' => '2026-03-16 13:18:49',
            ),
            331 => 
            array (
                'id' => 332,
                'question_id' => 115,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:18:49',
                'updated_at' => '2026-03-16 13:18:49',
            ),
            332 => 
            array (
                'id' => 333,
                'question_id' => 116,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:19:54',
                'updated_at' => '2026-03-16 13:19:54',
            ),
            333 => 
            array (
                'id' => 334,
                'question_id' => 116,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:19:54',
                'updated_at' => '2026-03-16 13:19:54',
            ),
            334 => 
            array (
                'id' => 335,
                'question_id' => 117,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:20:38',
                'updated_at' => '2026-03-16 13:20:38',
            ),
            335 => 
            array (
                'id' => 336,
                'question_id' => 117,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:20:38',
                'updated_at' => '2026-03-16 13:20:38',
            ),
            336 => 
            array (
                'id' => 337,
                'question_id' => 118,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:21:18',
                'updated_at' => '2026-03-16 13:21:18',
            ),
            337 => 
            array (
                'id' => 338,
                'question_id' => 118,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:21:18',
                'updated_at' => '2026-03-16 13:21:18',
            ),
            338 => 
            array (
                'id' => 339,
                'question_id' => 119,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:22:05',
                'updated_at' => '2026-03-16 13:22:05',
            ),
            339 => 
            array (
                'id' => 340,
                'question_id' => 119,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:22:05',
                'updated_at' => '2026-03-16 13:22:05',
            ),
            340 => 
            array (
                'id' => 341,
                'question_id' => 120,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:22:50',
                'updated_at' => '2026-03-16 13:22:50',
            ),
            341 => 
            array (
                'id' => 342,
                'question_id' => 120,
                'answer_text' => 'E pasakë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:22:50',
                'updated_at' => '2026-03-16 13:22:50',
            ),
            342 => 
            array (
                'id' => 343,
                'question_id' => 121,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:23:19',
                'updated_at' => '2026-03-16 13:27:15',
            ),
            343 => 
            array (
                'id' => 344,
                'question_id' => 121,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:23:19',
                'updated_at' => '2026-03-16 13:27:15',
            ),
            344 => 
            array (
                'id' => 345,
                'question_id' => 122,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:24:07',
                'updated_at' => '2026-03-16 13:27:34',
            ),
            345 => 
            array (
                'id' => 346,
                'question_id' => 122,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:24:07',
                'updated_at' => '2026-03-16 13:27:34',
            ),
            346 => 
            array (
                'id' => 347,
                'question_id' => 123,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:24:48',
                'updated_at' => '2026-03-16 13:24:48',
            ),
            347 => 
            array (
                'id' => 348,
                'question_id' => 123,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:24:48',
                'updated_at' => '2026-03-16 13:24:48',
            ),
            348 => 
            array (
                'id' => 349,
                'question_id' => 124,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:25:26',
                'updated_at' => '2026-03-16 13:25:26',
            ),
            349 => 
            array (
                'id' => 350,
                'question_id' => 124,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:25:26',
                'updated_at' => '2026-03-16 13:25:26',
            ),
            350 => 
            array (
                'id' => 351,
                'question_id' => 125,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:26:04',
                'updated_at' => '2026-03-16 13:26:04',
            ),
            351 => 
            array (
                'id' => 352,
                'question_id' => 125,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:26:04',
                'updated_at' => '2026-03-16 13:26:04',
            ),
            352 => 
            array (
                'id' => 353,
                'question_id' => 126,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:26:44',
                'updated_at' => '2026-03-16 13:26:44',
            ),
            353 => 
            array (
                'id' => 354,
                'question_id' => 126,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:26:44',
                'updated_at' => '2026-03-16 13:26:44',
            ),
            354 => 
            array (
                'id' => 355,
                'question_id' => 127,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:29:51',
                'updated_at' => '2026-03-16 13:29:51',
            ),
            355 => 
            array (
                'id' => 356,
                'question_id' => 127,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:29:51',
                'updated_at' => '2026-03-16 13:29:51',
            ),
            356 => 
            array (
                'id' => 357,
                'question_id' => 128,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:30:48',
                'updated_at' => '2026-03-16 13:30:48',
            ),
            357 => 
            array (
                'id' => 358,
                'question_id' => 128,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:30:48',
                'updated_at' => '2026-03-16 13:30:48',
            ),
            358 => 
            array (
                'id' => 359,
                'question_id' => 129,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:31:44',
                'updated_at' => '2026-03-16 13:31:44',
            ),
            359 => 
            array (
                'id' => 360,
                'question_id' => 129,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:31:44',
                'updated_at' => '2026-03-16 13:31:44',
            ),
            360 => 
            array (
                'id' => 361,
                'question_id' => 130,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:32:27',
                'updated_at' => '2026-03-16 13:32:27',
            ),
            361 => 
            array (
                'id' => 362,
                'question_id' => 130,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:32:27',
                'updated_at' => '2026-03-16 13:32:27',
            ),
            362 => 
            array (
                'id' => 363,
                'question_id' => 131,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:33:39',
                'updated_at' => '2026-03-16 13:33:39',
            ),
            363 => 
            array (
                'id' => 364,
                'question_id' => 131,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:33:39',
                'updated_at' => '2026-03-16 13:33:39',
            ),
            364 => 
            array (
                'id' => 365,
                'question_id' => 132,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:34:43',
                'updated_at' => '2026-03-16 13:35:58',
            ),
            365 => 
            array (
                'id' => 366,
                'question_id' => 132,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:34:43',
                'updated_at' => '2026-03-16 13:35:58',
            ),
            366 => 
            array (
                'id' => 367,
                'question_id' => 133,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:37:16',
                'updated_at' => '2026-03-16 13:37:16',
            ),
            367 => 
            array (
                'id' => 368,
                'question_id' => 133,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:37:16',
                'updated_at' => '2026-03-16 13:37:16',
            ),
            368 => 
            array (
                'id' => 369,
                'question_id' => 134,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:37:55',
                'updated_at' => '2026-03-16 13:37:55',
            ),
            369 => 
            array (
                'id' => 370,
                'question_id' => 134,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:37:55',
                'updated_at' => '2026-03-16 13:37:55',
            ),
            370 => 
            array (
                'id' => 371,
                'question_id' => 135,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:38:49',
                'updated_at' => '2026-03-16 13:38:49',
            ),
            371 => 
            array (
                'id' => 372,
                'question_id' => 135,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:38:49',
                'updated_at' => '2026-03-16 13:38:49',
            ),
            372 => 
            array (
                'id' => 373,
                'question_id' => 136,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:39:55',
                'updated_at' => '2026-03-16 13:39:55',
            ),
            373 => 
            array (
                'id' => 374,
                'question_id' => 136,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:39:55',
                'updated_at' => '2026-03-16 13:39:55',
            ),
            374 => 
            array (
                'id' => 375,
                'question_id' => 137,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:41:27',
                'updated_at' => '2026-03-16 13:41:27',
            ),
            375 => 
            array (
                'id' => 376,
                'question_id' => 137,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:41:27',
                'updated_at' => '2026-03-16 13:41:27',
            ),
            376 => 
            array (
                'id' => 377,
                'question_id' => 138,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:42:04',
                'updated_at' => '2026-03-16 13:42:04',
            ),
            377 => 
            array (
                'id' => 378,
                'question_id' => 138,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:42:04',
                'updated_at' => '2026-03-16 13:42:04',
            ),
            378 => 
            array (
                'id' => 379,
                'question_id' => 139,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:42:35',
                'updated_at' => '2026-03-16 13:43:46',
            ),
            379 => 
            array (
                'id' => 380,
                'question_id' => 139,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:42:35',
                'updated_at' => '2026-03-16 13:43:46',
            ),
            380 => 
            array (
                'id' => 381,
                'question_id' => 140,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:43:23',
                'updated_at' => '2026-03-16 13:43:23',
            ),
            381 => 
            array (
                'id' => 382,
                'question_id' => 140,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:43:23',
                'updated_at' => '2026-03-16 13:43:23',
            ),
            382 => 
            array (
                'id' => 383,
                'question_id' => 141,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:44:33',
                'updated_at' => '2026-03-16 13:44:33',
            ),
            383 => 
            array (
                'id' => 384,
                'question_id' => 141,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:44:33',
                'updated_at' => '2026-03-16 13:44:33',
            ),
            384 => 
            array (
                'id' => 385,
                'question_id' => 142,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:45:18',
                'updated_at' => '2026-03-16 13:45:18',
            ),
            385 => 
            array (
                'id' => 386,
                'question_id' => 142,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:45:18',
                'updated_at' => '2026-03-16 13:45:18',
            ),
            386 => 
            array (
                'id' => 387,
                'question_id' => 143,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:46:10',
                'updated_at' => '2026-03-16 13:46:24',
            ),
            387 => 
            array (
                'id' => 388,
                'question_id' => 143,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:46:10',
                'updated_at' => '2026-03-16 13:46:24',
            ),
            388 => 
            array (
                'id' => 389,
                'question_id' => 144,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-16 13:47:08',
                'updated_at' => '2026-03-16 13:47:08',
            ),
            389 => 
            array (
                'id' => 390,
                'question_id' => 144,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-16 13:47:08',
                'updated_at' => '2026-03-16 13:47:08',
            ),
            390 => 
            array (
                'id' => 391,
                'question_id' => 145,
                'answer_text' => 'A',
                'is_correct' => 0,
                'image' => 'answers/UVEn0ci4gtenftQXyW0qAlsN9fLgLlASpqZf945P.png',
                'created_at' => '2026-03-17 09:27:52',
                'updated_at' => '2026-03-17 09:27:52',
            ),
            391 => 
            array (
                'id' => 392,
                'question_id' => 145,
                'answer_text' => 'B',
                'is_correct' => 0,
                'image' => 'answers/RKOjkpob9Vc6j0HjW4Q5VlSxssHdQTTp2dFxIkdf.png',
                'created_at' => '2026-03-17 09:27:52',
                'updated_at' => '2026-03-17 09:27:52',
            ),
            392 => 
            array (
                'id' => 393,
                'question_id' => 145,
                'answer_text' => 'C',
                'is_correct' => 1,
                'image' => 'answers/by8LhBTHLOXC6u9FeaOJw3SWmxJWiLnZtQB1TqF4.png',
                'created_at' => '2026-03-17 09:27:52',
                'updated_at' => '2026-03-17 09:27:52',
            ),
            393 => 
            array (
                'id' => 394,
                'question_id' => 146,
                'answer_text' => 'A',
                'is_correct' => 1,
                'image' => 'answers/Wm9knbl6eYWy1pF3BI3O3W0C2S355eH5gWziePwP.png',
                'created_at' => '2026-03-17 09:36:43',
                'updated_at' => '2026-03-17 09:36:43',
            ),
            394 => 
            array (
                'id' => 395,
                'question_id' => 146,
                'answer_text' => 'B',
                'is_correct' => 0,
                'image' => 'answers/B9bXMUo0wHL0GrntuEpxKb8PQGcg88RLXHjwOmfk.png',
                'created_at' => '2026-03-17 09:36:43',
                'updated_at' => '2026-03-17 09:36:43',
            ),
            395 => 
            array (
                'id' => 396,
                'question_id' => 146,
                'answer_text' => 'C',
                'is_correct' => 0,
                'image' => 'answers/vMSfhhwCEA3l9Gx6NvC2JewGsxcC9yKlOZlQLb70.png',
                'created_at' => '2026-03-17 09:36:43',
                'updated_at' => '2026-03-17 09:36:43',
            ),
            396 => 
            array (
                'id' => 397,
                'question_id' => 147,
                'answer_text' => 'A',
                'is_correct' => 1,
                'image' => 'answers/0az10JCuaDY3srhtyQEeXXT7EkL4AGlMgNlGSJHu.png',
                'created_at' => '2026-03-17 09:51:53',
                'updated_at' => '2026-03-17 09:52:52',
            ),
            397 => 
            array (
                'id' => 398,
                'question_id' => 147,
                'answer_text' => 'B',
                'is_correct' => 0,
                'image' => 'answers/0j6PkWacJHMUzD3QnnF37zfitCRAqEeaNouFsLZe.png',
                'created_at' => '2026-03-17 09:51:53',
                'updated_at' => '2026-03-17 09:52:52',
            ),
            398 => 
            array (
                'id' => 399,
                'question_id' => 147,
                'answer_text' => 'C',
                'is_correct' => 0,
                'image' => 'answers/eAWni3xRPPfYB81OJYznUu4LKFhn8Dm7rdNVUXBh.png',
                'created_at' => '2026-03-17 09:51:53',
                'updated_at' => '2026-03-17 09:52:52',
            ),
            399 => 
            array (
                'id' => 400,
                'question_id' => 148,
                'answer_text' => 'A',
                'is_correct' => 0,
                'image' => 'answers/Bmb9gxKrutqxoAoXaWVL2XAmhAyQeG49IJpOk0MD.png',
                'created_at' => '2026-03-17 09:58:00',
                'updated_at' => '2026-03-17 09:58:00',
            ),
            400 => 
            array (
                'id' => 401,
                'question_id' => 148,
                'answer_text' => 'B',
                'is_correct' => 0,
                'image' => 'answers/oaR6vYXnQLohYIuLClcvbYF4Ask3NzzkALO40gSP.png',
                'created_at' => '2026-03-17 09:58:00',
                'updated_at' => '2026-03-17 09:58:00',
            ),
            401 => 
            array (
                'id' => 402,
                'question_id' => 148,
                'answer_text' => 'C',
                'is_correct' => 1,
                'image' => 'answers/mB8U0vhohqRfPIddNbPnOlbohNnRO0527qBo4fwl.png',
                'created_at' => '2026-03-17 09:58:00',
                'updated_at' => '2026-03-17 09:58:00',
            ),
            402 => 
            array (
                'id' => 403,
                'question_id' => 149,
                'answer_text' => 'A',
                'is_correct' => 1,
                'image' => 'answers/rVYkLPDzccXIb3gHhGqNbGC3gj1Ea25gJBEKpIPz.png',
                'created_at' => '2026-03-17 10:01:43',
                'updated_at' => '2026-03-17 10:01:43',
            ),
            403 => 
            array (
                'id' => 404,
                'question_id' => 149,
                'answer_text' => 'B',
                'is_correct' => 0,
                'image' => 'answers/lCG2p2Kk1sOiJgI3cTnEFJ2pKqdGNs6EJM1cw9aN.png',
                'created_at' => '2026-03-17 10:01:43',
                'updated_at' => '2026-03-17 10:01:43',
            ),
            404 => 
            array (
                'id' => 405,
                'question_id' => 149,
                'answer_text' => 'C',
                'is_correct' => 0,
                'image' => 'answers/TyRQVXyea2n7HL4BRXqrKylTGTNxUM4j8yng4Phj.png',
                'created_at' => '2026-03-17 10:01:43',
                'updated_at' => '2026-03-17 10:01:43',
            ),
            405 => 
            array (
                'id' => 406,
                'question_id' => 150,
                'answer_text' => 'A',
                'is_correct' => 0,
                'image' => 'answers/g23pLfw5bJNpeFBCuAIzeEHp5qb2lAGyStCPCEyK.png',
                'created_at' => '2026-03-17 10:06:14',
                'updated_at' => '2026-03-17 10:06:26',
            ),
            406 => 
            array (
                'id' => 407,
                'question_id' => 150,
                'answer_text' => 'B',
                'is_correct' => 0,
                'image' => 'answers/d7qFj75dxg6oP6jaDsO4MkYjWvz7oxNFMk7NElg1.png',
                'created_at' => '2026-03-17 10:06:14',
                'updated_at' => '2026-03-17 10:06:27',
            ),
            407 => 
            array (
                'id' => 408,
                'question_id' => 150,
                'answer_text' => 'C',
                'is_correct' => 1,
                'image' => 'answers/vDnmj7Utg5xudt6hvOddxCfnGQwTIN9O7ZWJTVGg.png',
                'created_at' => '2026-03-17 10:06:14',
                'updated_at' => '2026-03-17 10:06:27',
            ),
            408 => 
            array (
                'id' => 409,
                'question_id' => 151,
                'answer_text' => 'A',
                'is_correct' => 0,
                'image' => 'answers/PrCmNp6SysjM7r4f6NUMfiKsewNb8uTJpgR75tJr.png',
                'created_at' => '2026-03-17 10:09:56',
                'updated_at' => '2026-03-17 10:09:56',
            ),
            409 => 
            array (
                'id' => 410,
                'question_id' => 151,
                'answer_text' => 'B',
                'is_correct' => 0,
                'image' => 'answers/k9TK4jnxumiqI07Zf7FyGzXS7JywVK7EASlan4HI.png',
                'created_at' => '2026-03-17 10:09:56',
                'updated_at' => '2026-03-17 10:09:56',
            ),
            410 => 
            array (
                'id' => 411,
                'question_id' => 151,
                'answer_text' => 'C',
                'is_correct' => 1,
                'image' => 'answers/MX5n9Q3HO6TrmzhU6aEVNnX5aWcZIsMw4ezUTbbE.png',
                'created_at' => '2026-03-17 10:09:56',
                'updated_at' => '2026-03-17 10:09:56',
            ),
            411 => 
            array (
                'id' => 412,
                'question_id' => 152,
                'answer_text' => 'A',
                'is_correct' => 1,
                'image' => 'answers/2RhjEVgBgnlCmL1pPHkxYpKl9ZAJqfGpAfbf02Yb.png',
                'created_at' => '2026-03-17 10:22:46',
                'updated_at' => '2026-03-17 10:22:46',
            ),
            412 => 
            array (
                'id' => 413,
                'question_id' => 152,
                'answer_text' => 'B',
                'is_correct' => 0,
                'image' => 'answers/jGViXQi0iThGEbJS4NyRGqPoSmk9Y7qmbIAu8Dd6.png',
                'created_at' => '2026-03-17 10:22:46',
                'updated_at' => '2026-03-17 10:22:46',
            ),
            413 => 
            array (
                'id' => 414,
                'question_id' => 152,
                'answer_text' => 'C',
                'is_correct' => 0,
                'image' => 'answers/Nw2hnJKG37Q9nb8tRrqdzgbO8A2bn0uGZzZ8fyHL.png',
                'created_at' => '2026-03-17 10:22:46',
                'updated_at' => '2026-03-17 10:22:46',
            ),
            414 => 
            array (
                'id' => 415,
                'question_id' => 153,
                'answer_text' => 'A',
                'is_correct' => 0,
                'image' => 'answers/wlEBaQbmNUEQDTDxNzldYdEV9HaYhsIhCD8jCgBW.png',
                'created_at' => '2026-03-17 10:25:22',
                'updated_at' => '2026-03-17 10:25:42',
            ),
            415 => 
            array (
                'id' => 416,
                'question_id' => 153,
                'answer_text' => 'B',
                'is_correct' => 1,
                'image' => 'answers/e5gwex9xiLoj1Nhik3sTvzwRW2Ny3zDdHLtWyVfE.png',
                'created_at' => '2026-03-17 10:25:22',
                'updated_at' => '2026-03-17 10:25:42',
            ),
            416 => 
            array (
                'id' => 417,
                'question_id' => 153,
                'answer_text' => 'C',
                'is_correct' => 0,
                'image' => 'answers/mBtBg1FHPHPpNmn0Kg3nYZxtRi0NfrH0dwh22QBy.png',
                'created_at' => '2026-03-17 10:25:22',
                'updated_at' => '2026-03-17 10:25:42',
            ),
            417 => 
            array (
                'id' => 418,
                'question_id' => 154,
                'answer_text' => 'A',
                'is_correct' => 0,
                'image' => 'answers/t7ixCLzYqOMlpZcPZW4I1DmM7ctdfGVQv1a4YjA6.png',
                'created_at' => '2026-03-17 10:27:42',
                'updated_at' => '2026-03-17 10:27:42',
            ),
            418 => 
            array (
                'id' => 419,
                'question_id' => 154,
                'answer_text' => 'B',
                'is_correct' => 1,
                'image' => 'answers/eA0whXYbfIBxrSuKV7SCAPPnmqrYEqCchDTLosOS.png',
                'created_at' => '2026-03-17 10:27:42',
                'updated_at' => '2026-03-17 10:27:42',
            ),
            419 => 
            array (
                'id' => 420,
                'question_id' => 154,
                'answer_text' => 'C',
                'is_correct' => 0,
                'image' => 'answers/S10d47MYV3suGKv1o6SZAdnrxfkf8YUvZVkwquwP.png',
                'created_at' => '2026-03-17 10:27:42',
                'updated_at' => '2026-03-17 10:27:42',
            ),
            420 => 
            array (
                'id' => 421,
                'question_id' => 155,
                'answer_text' => 'A',
                'is_correct' => 0,
                'image' => 'answers/G0pRSkkiPhYLySpvNRyZGOVO0HrOrubURB74GIgw.png',
                'created_at' => '2026-03-17 10:29:15',
                'updated_at' => '2026-03-17 10:29:15',
            ),
            421 => 
            array (
                'id' => 422,
                'question_id' => 155,
                'answer_text' => 'B',
                'is_correct' => 1,
                'image' => 'answers/rMfxOYGcYzNcvDIb7UV8wiqT9RhIrD2jkg8nKqGO.png',
                'created_at' => '2026-03-17 10:29:15',
                'updated_at' => '2026-03-17 10:29:15',
            ),
            422 => 
            array (
                'id' => 423,
                'question_id' => 155,
                'answer_text' => 'C',
                'is_correct' => 0,
                'image' => 'answers/bQKEm9s0qTHiQWAfGU4usU9T6gyKgs9r7pKIHeSi.png',
                'created_at' => '2026-03-17 10:29:15',
                'updated_at' => '2026-03-17 10:29:15',
            ),
            423 => 
            array (
                'id' => 424,
                'question_id' => 156,
                'answer_text' => 'A',
                'is_correct' => 0,
                'image' => 'answers/TMkcx5IrNnBKdDK6WgHZDq1t3sRGUo9jBmGK3UQt.png',
                'created_at' => '2026-03-17 10:30:39',
                'updated_at' => '2026-03-17 10:30:39',
            ),
            424 => 
            array (
                'id' => 425,
                'question_id' => 156,
                'answer_text' => 'B',
                'is_correct' => 1,
                'image' => 'answers/8x7ZNi2IxD7rbdLjcXNyuh9ZZMHe5YF0Ars4pRKa.png',
                'created_at' => '2026-03-17 10:30:39',
                'updated_at' => '2026-03-17 10:30:39',
            ),
            425 => 
            array (
                'id' => 426,
                'question_id' => 156,
                'answer_text' => 'C',
                'is_correct' => 0,
                'image' => 'answers/MV5OxTjeBUjXPcxRcrsX0R9kBOIsBjnj4gOe8yan.png',
                'created_at' => '2026-03-17 10:30:39',
                'updated_at' => '2026-03-17 10:30:39',
            ),
            426 => 
            array (
                'id' => 427,
                'question_id' => 157,
                'answer_text' => 'e saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:34:07',
                'updated_at' => '2026-03-17 10:34:07',
            ),
            427 => 
            array (
                'id' => 428,
                'question_id' => 157,
                'answer_text' => 'e pasakte',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:34:07',
                'updated_at' => '2026-03-17 10:34:07',
            ),
            428 => 
            array (
                'id' => 429,
                'question_id' => 158,
                'answer_text' => 'e saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:34:56',
                'updated_at' => '2026-03-17 10:34:56',
            ),
            429 => 
            array (
                'id' => 430,
                'question_id' => 158,
                'answer_text' => 'e pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:34:56',
                'updated_at' => '2026-03-17 10:34:56',
            ),
            430 => 
            array (
                'id' => 431,
                'question_id' => 159,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:36:32',
                'updated_at' => '2026-03-17 10:36:32',
            ),
            431 => 
            array (
                'id' => 432,
                'question_id' => 159,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:36:32',
                'updated_at' => '2026-03-17 10:36:32',
            ),
            432 => 
            array (
                'id' => 433,
                'question_id' => 160,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:37:30',
                'updated_at' => '2026-03-17 10:37:30',
            ),
            433 => 
            array (
                'id' => 434,
                'question_id' => 160,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:37:30',
                'updated_at' => '2026-03-17 10:37:30',
            ),
            434 => 
            array (
                'id' => 435,
                'question_id' => 161,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:38:10',
                'updated_at' => '2026-03-17 10:38:10',
            ),
            435 => 
            array (
                'id' => 436,
                'question_id' => 161,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:38:10',
                'updated_at' => '2026-03-17 10:38:10',
            ),
            436 => 
            array (
                'id' => 437,
                'question_id' => 162,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:39:00',
                'updated_at' => '2026-03-17 10:39:00',
            ),
            437 => 
            array (
                'id' => 438,
                'question_id' => 162,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:39:00',
                'updated_at' => '2026-03-17 10:39:00',
            ),
            438 => 
            array (
                'id' => 439,
                'question_id' => 163,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:39:36',
                'updated_at' => '2026-03-17 10:39:36',
            ),
            439 => 
            array (
                'id' => 440,
                'question_id' => 163,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:39:36',
                'updated_at' => '2026-03-17 10:39:36',
            ),
            440 => 
            array (
                'id' => 441,
                'question_id' => 164,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:40:45',
                'updated_at' => '2026-03-17 10:40:45',
            ),
            441 => 
            array (
                'id' => 442,
                'question_id' => 164,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:40:45',
                'updated_at' => '2026-03-17 10:40:45',
            ),
            442 => 
            array (
                'id' => 443,
                'question_id' => 165,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:41:31',
                'updated_at' => '2026-03-17 10:41:31',
            ),
            443 => 
            array (
                'id' => 444,
                'question_id' => 165,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:41:31',
                'updated_at' => '2026-03-17 10:41:31',
            ),
            444 => 
            array (
                'id' => 445,
                'question_id' => 166,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:42:17',
                'updated_at' => '2026-03-17 10:42:17',
            ),
            445 => 
            array (
                'id' => 446,
                'question_id' => 166,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:42:17',
                'updated_at' => '2026-03-17 10:42:17',
            ),
            446 => 
            array (
                'id' => 447,
                'question_id' => 167,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:42:59',
                'updated_at' => '2026-03-17 10:42:59',
            ),
            447 => 
            array (
                'id' => 448,
                'question_id' => 167,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:42:59',
                'updated_at' => '2026-03-17 10:42:59',
            ),
            448 => 
            array (
                'id' => 449,
                'question_id' => 168,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:43:38',
                'updated_at' => '2026-03-17 10:43:38',
            ),
            449 => 
            array (
                'id' => 450,
                'question_id' => 168,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:43:38',
                'updated_at' => '2026-03-17 10:43:38',
            ),
            450 => 
            array (
                'id' => 451,
                'question_id' => 169,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:44:11',
                'updated_at' => '2026-03-17 10:44:11',
            ),
            451 => 
            array (
                'id' => 452,
                'question_id' => 169,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:44:11',
                'updated_at' => '2026-03-17 10:44:11',
            ),
            452 => 
            array (
                'id' => 453,
                'question_id' => 170,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:44:49',
                'updated_at' => '2026-03-17 10:44:49',
            ),
            453 => 
            array (
                'id' => 454,
                'question_id' => 170,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:44:49',
                'updated_at' => '2026-03-17 10:44:49',
            ),
            454 => 
            array (
                'id' => 455,
                'question_id' => 171,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:46:00',
                'updated_at' => '2026-03-17 10:46:00',
            ),
            455 => 
            array (
                'id' => 456,
                'question_id' => 171,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:46:00',
                'updated_at' => '2026-03-17 10:46:00',
            ),
            456 => 
            array (
                'id' => 457,
                'question_id' => 172,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:46:42',
                'updated_at' => '2026-03-17 10:46:42',
            ),
            457 => 
            array (
                'id' => 458,
                'question_id' => 172,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:46:42',
                'updated_at' => '2026-03-17 10:46:42',
            ),
            458 => 
            array (
                'id' => 459,
                'question_id' => 173,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:47:25',
                'updated_at' => '2026-03-17 10:47:25',
            ),
            459 => 
            array (
                'id' => 460,
                'question_id' => 173,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:47:25',
                'updated_at' => '2026-03-17 10:47:25',
            ),
            460 => 
            array (
                'id' => 461,
                'question_id' => 174,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:48:20',
                'updated_at' => '2026-03-17 10:48:20',
            ),
            461 => 
            array (
                'id' => 462,
                'question_id' => 174,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:48:20',
                'updated_at' => '2026-03-17 10:48:20',
            ),
            462 => 
            array (
                'id' => 463,
                'question_id' => 175,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:48:58',
                'updated_at' => '2026-03-17 10:48:58',
            ),
            463 => 
            array (
                'id' => 464,
                'question_id' => 175,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:48:58',
                'updated_at' => '2026-03-17 10:48:58',
            ),
            464 => 
            array (
                'id' => 465,
                'question_id' => 176,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:49:35',
                'updated_at' => '2026-03-17 10:50:59',
            ),
            465 => 
            array (
                'id' => 466,
                'question_id' => 176,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:49:35',
                'updated_at' => '2026-03-17 10:50:59',
            ),
            466 => 
            array (
                'id' => 467,
                'question_id' => 177,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:50:43',
                'updated_at' => '2026-03-17 10:51:15',
            ),
            467 => 
            array (
                'id' => 468,
                'question_id' => 177,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:50:43',
                'updated_at' => '2026-03-17 10:51:15',
            ),
            468 => 
            array (
                'id' => 469,
                'question_id' => 178,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:53:42',
                'updated_at' => '2026-03-17 10:53:42',
            ),
            469 => 
            array (
                'id' => 470,
                'question_id' => 178,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:53:42',
                'updated_at' => '2026-03-17 10:53:42',
            ),
            470 => 
            array (
                'id' => 471,
                'question_id' => 179,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:54:46',
                'updated_at' => '2026-03-17 10:54:46',
            ),
            471 => 
            array (
                'id' => 472,
                'question_id' => 179,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:54:46',
                'updated_at' => '2026-03-17 10:54:46',
            ),
            472 => 
            array (
                'id' => 473,
                'question_id' => 180,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 10:55:40',
                'updated_at' => '2026-03-17 10:55:40',
            ),
            473 => 
            array (
                'id' => 474,
                'question_id' => 180,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 10:55:40',
                'updated_at' => '2026-03-17 10:55:40',
            ),
            474 => 
            array (
                'id' => 475,
                'question_id' => 181,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:02:04',
                'updated_at' => '2026-03-17 11:02:04',
            ),
            475 => 
            array (
                'id' => 476,
                'question_id' => 181,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:02:04',
                'updated_at' => '2026-03-17 11:02:04',
            ),
            476 => 
            array (
                'id' => 477,
                'question_id' => 182,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:02:47',
                'updated_at' => '2026-03-17 11:02:47',
            ),
            477 => 
            array (
                'id' => 478,
                'question_id' => 182,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:02:47',
                'updated_at' => '2026-03-17 11:02:47',
            ),
            478 => 
            array (
                'id' => 479,
                'question_id' => 183,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:03:29',
                'updated_at' => '2026-03-17 11:03:29',
            ),
            479 => 
            array (
                'id' => 480,
                'question_id' => 183,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:03:29',
                'updated_at' => '2026-03-17 11:03:29',
            ),
            480 => 
            array (
                'id' => 481,
                'question_id' => 184,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:04:05',
                'updated_at' => '2026-03-17 11:04:23',
            ),
            481 => 
            array (
                'id' => 482,
                'question_id' => 184,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:04:05',
                'updated_at' => '2026-03-17 11:04:23',
            ),
            482 => 
            array (
                'id' => 483,
                'question_id' => 185,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:05:22',
                'updated_at' => '2026-03-17 11:05:22',
            ),
            483 => 
            array (
                'id' => 484,
                'question_id' => 185,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:05:22',
                'updated_at' => '2026-03-17 11:05:22',
            ),
            484 => 
            array (
                'id' => 485,
                'question_id' => 186,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:06:59',
                'updated_at' => '2026-03-17 11:06:59',
            ),
            485 => 
            array (
                'id' => 486,
                'question_id' => 186,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:06:59',
                'updated_at' => '2026-03-17 11:06:59',
            ),
            486 => 
            array (
                'id' => 487,
                'question_id' => 187,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:07:42',
                'updated_at' => '2026-03-17 11:07:42',
            ),
            487 => 
            array (
                'id' => 488,
                'question_id' => 187,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:07:42',
                'updated_at' => '2026-03-17 11:07:42',
            ),
            488 => 
            array (
                'id' => 489,
                'question_id' => 188,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:08:25',
                'updated_at' => '2026-03-17 11:08:53',
            ),
            489 => 
            array (
                'id' => 490,
                'question_id' => 188,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:08:25',
                'updated_at' => '2026-03-17 11:08:53',
            ),
            490 => 
            array (
                'id' => 491,
                'question_id' => 189,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:12:25',
                'updated_at' => '2026-03-17 11:12:25',
            ),
            491 => 
            array (
                'id' => 492,
                'question_id' => 189,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:12:25',
                'updated_at' => '2026-03-17 11:12:25',
            ),
            492 => 
            array (
                'id' => 493,
                'question_id' => 190,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:14:24',
                'updated_at' => '2026-03-17 11:14:24',
            ),
            493 => 
            array (
                'id' => 494,
                'question_id' => 190,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:14:24',
                'updated_at' => '2026-03-17 11:14:24',
            ),
            494 => 
            array (
                'id' => 495,
                'question_id' => 191,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:42:46',
                'updated_at' => '2026-03-17 11:42:46',
            ),
            495 => 
            array (
                'id' => 496,
                'question_id' => 191,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:42:46',
                'updated_at' => '2026-03-17 11:42:46',
            ),
            496 => 
            array (
                'id' => 497,
                'question_id' => 192,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:43:24',
                'updated_at' => '2026-03-17 11:43:24',
            ),
            497 => 
            array (
                'id' => 498,
                'question_id' => 192,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:43:24',
                'updated_at' => '2026-03-17 11:43:24',
            ),
            498 => 
            array (
                'id' => 499,
                'question_id' => 193,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:44:02',
                'updated_at' => '2026-03-17 11:44:02',
            ),
            499 => 
            array (
                'id' => 500,
                'question_id' => 193,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:44:02',
                'updated_at' => '2026-03-17 11:44:02',
            ),
        ));
        \DB::table('answers')->insert(array (
            0 => 
            array (
                'id' => 501,
                'question_id' => 194,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:45:03',
                'updated_at' => '2026-03-17 11:45:19',
            ),
            1 => 
            array (
                'id' => 502,
                'question_id' => 194,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => 'answers/vJ2ZNWiq04t6D4oAN1MzYglkbyPKScuzIb1hypU7.png',
                'created_at' => '2026-03-17 11:45:03',
                'updated_at' => '2026-03-17 11:45:19',
            ),
            2 => 
            array (
                'id' => 503,
                'question_id' => 195,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:46:03',
                'updated_at' => '2026-03-17 11:46:03',
            ),
            3 => 
            array (
                'id' => 504,
                'question_id' => 195,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:46:03',
                'updated_at' => '2026-03-17 11:46:03',
            ),
            4 => 
            array (
                'id' => 505,
                'question_id' => 196,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:46:44',
                'updated_at' => '2026-03-17 11:46:44',
            ),
            5 => 
            array (
                'id' => 506,
                'question_id' => 196,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:46:44',
                'updated_at' => '2026-03-17 11:46:44',
            ),
            6 => 
            array (
                'id' => 507,
                'question_id' => 197,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:47:26',
                'updated_at' => '2026-03-17 11:47:26',
            ),
            7 => 
            array (
                'id' => 508,
                'question_id' => 197,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:47:26',
                'updated_at' => '2026-03-17 11:47:26',
            ),
            8 => 
            array (
                'id' => 509,
                'question_id' => 198,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:48:17',
                'updated_at' => '2026-03-17 11:48:17',
            ),
            9 => 
            array (
                'id' => 510,
                'question_id' => 198,
                'answer_text' => 'E pasaktë.a',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:48:17',
                'updated_at' => '2026-03-17 11:48:17',
            ),
            10 => 
            array (
                'id' => 511,
                'question_id' => 199,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:49:25',
                'updated_at' => '2026-03-17 11:49:25',
            ),
            11 => 
            array (
                'id' => 512,
                'question_id' => 199,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:49:25',
                'updated_at' => '2026-03-17 11:49:25',
            ),
            12 => 
            array (
                'id' => 513,
                'question_id' => 200,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:50:06',
                'updated_at' => '2026-03-17 11:50:06',
            ),
            13 => 
            array (
                'id' => 514,
                'question_id' => 200,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:50:06',
                'updated_at' => '2026-03-17 11:50:06',
            ),
            14 => 
            array (
                'id' => 515,
                'question_id' => 201,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:50:49',
                'updated_at' => '2026-03-17 11:50:49',
            ),
            15 => 
            array (
                'id' => 516,
                'question_id' => 201,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:50:49',
                'updated_at' => '2026-03-17 11:50:49',
            ),
            16 => 
            array (
                'id' => 517,
                'question_id' => 202,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:51:28',
                'updated_at' => '2026-03-17 11:51:28',
            ),
            17 => 
            array (
                'id' => 518,
                'question_id' => 202,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:51:28',
                'updated_at' => '2026-03-17 11:51:28',
            ),
            18 => 
            array (
                'id' => 519,
                'question_id' => 203,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:52:10',
                'updated_at' => '2026-03-17 11:52:10',
            ),
            19 => 
            array (
                'id' => 520,
                'question_id' => 203,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:52:10',
                'updated_at' => '2026-03-17 11:52:10',
            ),
            20 => 
            array (
                'id' => 521,
                'question_id' => 204,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:53:11',
                'updated_at' => '2026-03-17 11:53:11',
            ),
            21 => 
            array (
                'id' => 522,
                'question_id' => 204,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:53:11',
                'updated_at' => '2026-03-17 11:53:11',
            ),
            22 => 
            array (
                'id' => 523,
                'question_id' => 205,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:53:48',
                'updated_at' => '2026-03-17 11:53:48',
            ),
            23 => 
            array (
                'id' => 524,
                'question_id' => 205,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:53:48',
                'updated_at' => '2026-03-17 11:53:48',
            ),
            24 => 
            array (
                'id' => 525,
                'question_id' => 206,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:54:39',
                'updated_at' => '2026-03-17 11:54:39',
            ),
            25 => 
            array (
                'id' => 526,
                'question_id' => 206,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:54:39',
                'updated_at' => '2026-03-17 11:54:39',
            ),
            26 => 
            array (
                'id' => 527,
                'question_id' => 207,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 11:55:13',
                'updated_at' => '2026-03-17 11:55:13',
            ),
            27 => 
            array (
                'id' => 528,
                'question_id' => 207,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 11:55:13',
                'updated_at' => '2026-03-17 11:55:13',
            ),
            28 => 
            array (
                'id' => 529,
                'question_id' => 208,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:03:40',
                'updated_at' => '2026-03-17 12:03:40',
            ),
            29 => 
            array (
                'id' => 530,
                'question_id' => 208,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:03:40',
                'updated_at' => '2026-03-17 12:03:40',
            ),
            30 => 
            array (
                'id' => 531,
                'question_id' => 209,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:04:37',
                'updated_at' => '2026-03-17 12:04:37',
            ),
            31 => 
            array (
                'id' => 532,
                'question_id' => 209,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:04:37',
                'updated_at' => '2026-03-17 12:04:37',
            ),
            32 => 
            array (
                'id' => 533,
                'question_id' => 210,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:05:16',
                'updated_at' => '2026-03-17 12:05:16',
            ),
            33 => 
            array (
                'id' => 534,
                'question_id' => 210,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:05:16',
                'updated_at' => '2026-03-17 12:05:16',
            ),
            34 => 
            array (
                'id' => 535,
                'question_id' => 211,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:06:13',
                'updated_at' => '2026-03-17 12:06:13',
            ),
            35 => 
            array (
                'id' => 536,
                'question_id' => 211,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:06:13',
                'updated_at' => '2026-03-17 12:06:13',
            ),
            36 => 
            array (
                'id' => 537,
                'question_id' => 212,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:06:48',
                'updated_at' => '2026-03-17 12:06:48',
            ),
            37 => 
            array (
                'id' => 538,
                'question_id' => 212,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:06:48',
                'updated_at' => '2026-03-17 12:06:48',
            ),
            38 => 
            array (
                'id' => 539,
                'question_id' => 213,
                'answer_text' => 'A',
                'is_correct' => 0,
                'image' => 'answers/WQALy3TC5LvCAewLyjN4yT0PT1OCqbyK0P7DmvC8.png',
                'created_at' => '2026-03-17 12:14:06',
                'updated_at' => '2026-03-17 12:14:06',
            ),
            39 => 
            array (
                'id' => 540,
                'question_id' => 213,
                'answer_text' => 'B',
                'is_correct' => 0,
                'image' => 'answers/5lPcFACMEg4LjymXMMPekrD54fPghCEyWWfAIcRf.png',
                'created_at' => '2026-03-17 12:14:06',
                'updated_at' => '2026-03-17 12:14:06',
            ),
            40 => 
            array (
                'id' => 541,
                'question_id' => 213,
                'answer_text' => 'C',
                'is_correct' => 1,
                'image' => 'answers/mRZYSXHLRtRlHAHi41lClLJWy6QgPwKnThEvhLV4.png',
                'created_at' => '2026-03-17 12:14:06',
                'updated_at' => '2026-03-17 12:14:06',
            ),
            41 => 
            array (
                'id' => 542,
                'question_id' => 214,
                'answer_text' => 'A',
                'is_correct' => 0,
                'image' => 'answers/g9uR0XrMQIViRgX7yfioCthaN7RkCMQjuY1JUwWd.png',
                'created_at' => '2026-03-17 12:19:49',
                'updated_at' => '2026-03-17 12:19:49',
            ),
            42 => 
            array (
                'id' => 543,
                'question_id' => 214,
                'answer_text' => 'B',
                'is_correct' => 1,
                'image' => 'answers/O2vOgFqWfNdHCx9qOUNtbPwJYVBnykjbRkV56nFf.png',
                'created_at' => '2026-03-17 12:19:49',
                'updated_at' => '2026-03-17 12:19:49',
            ),
            43 => 
            array (
                'id' => 544,
                'question_id' => 214,
                'answer_text' => 'C',
                'is_correct' => 0,
                'image' => 'answers/3yVdp4ZmrQHkJsvCc8O46qcq6tx4Z2CeWsMago7M.png',
                'created_at' => '2026-03-17 12:19:49',
                'updated_at' => '2026-03-17 12:19:49',
            ),
            44 => 
            array (
                'id' => 545,
                'question_id' => 215,
                'answer_text' => 'A',
                'is_correct' => 0,
                'image' => 'answers/gCNAL9xJm0Yj1WqkPIpXNaeEVvjqYK2s8tTdkDAm.png',
                'created_at' => '2026-03-17 12:23:23',
                'updated_at' => '2026-03-17 12:23:23',
            ),
            45 => 
            array (
                'id' => 546,
                'question_id' => 215,
                'answer_text' => 'B',
                'is_correct' => 0,
                'image' => 'answers/qEMmQxrHvSTNW3f08BUuFxMZjrebIcvhZDG0JOUy.png',
                'created_at' => '2026-03-17 12:23:23',
                'updated_at' => '2026-03-17 12:23:23',
            ),
            46 => 
            array (
                'id' => 547,
                'question_id' => 215,
                'answer_text' => 'C',
                'is_correct' => 1,
                'image' => 'answers/yud0tbfTmaBEkeQ3Wo9bEiybSZRCv6uKZfBawLcV.png',
                'created_at' => '2026-03-17 12:23:23',
                'updated_at' => '2026-03-17 12:23:23',
            ),
            47 => 
            array (
                'id' => 548,
                'question_id' => 216,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:27:52',
                'updated_at' => '2026-03-17 12:27:52',
            ),
            48 => 
            array (
                'id' => 549,
                'question_id' => 216,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:27:52',
                'updated_at' => '2026-03-17 12:27:52',
            ),
            49 => 
            array (
                'id' => 550,
                'question_id' => 217,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:31:18',
                'updated_at' => '2026-03-17 12:31:18',
            ),
            50 => 
            array (
                'id' => 551,
                'question_id' => 217,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:31:18',
                'updated_at' => '2026-03-17 12:31:18',
            ),
            51 => 
            array (
                'id' => 552,
                'question_id' => 218,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:32:12',
                'updated_at' => '2026-03-17 12:32:12',
            ),
            52 => 
            array (
                'id' => 553,
                'question_id' => 218,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:32:13',
                'updated_at' => '2026-03-17 12:32:13',
            ),
            53 => 
            array (
                'id' => 554,
                'question_id' => 219,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:32:46',
                'updated_at' => '2026-03-17 12:32:46',
            ),
            54 => 
            array (
                'id' => 555,
                'question_id' => 219,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:32:46',
                'updated_at' => '2026-03-17 12:32:46',
            ),
            55 => 
            array (
                'id' => 556,
                'question_id' => 220,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:33:36',
                'updated_at' => '2026-03-17 12:33:36',
            ),
            56 => 
            array (
                'id' => 557,
                'question_id' => 220,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:33:36',
                'updated_at' => '2026-03-17 12:33:36',
            ),
            57 => 
            array (
                'id' => 558,
                'question_id' => 221,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:37:08',
                'updated_at' => '2026-03-17 12:37:08',
            ),
            58 => 
            array (
                'id' => 559,
                'question_id' => 221,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:37:08',
                'updated_at' => '2026-03-17 12:37:08',
            ),
            59 => 
            array (
                'id' => 560,
                'question_id' => 222,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:37:57',
                'updated_at' => '2026-03-17 12:37:57',
            ),
            60 => 
            array (
                'id' => 561,
                'question_id' => 222,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:37:57',
                'updated_at' => '2026-03-17 12:37:57',
            ),
            61 => 
            array (
                'id' => 562,
                'question_id' => 223,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:38:35',
                'updated_at' => '2026-03-17 12:38:35',
            ),
            62 => 
            array (
                'id' => 563,
                'question_id' => 223,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:38:35',
                'updated_at' => '2026-03-17 12:38:35',
            ),
            63 => 
            array (
                'id' => 564,
                'question_id' => 224,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:39:48',
                'updated_at' => '2026-03-17 12:39:48',
            ),
            64 => 
            array (
                'id' => 565,
                'question_id' => 224,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:39:48',
                'updated_at' => '2026-03-17 12:39:48',
            ),
            65 => 
            array (
                'id' => 566,
                'question_id' => 225,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:41:23',
                'updated_at' => '2026-03-17 12:41:23',
            ),
            66 => 
            array (
                'id' => 567,
                'question_id' => 225,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:41:23',
                'updated_at' => '2026-03-17 12:41:23',
            ),
            67 => 
            array (
                'id' => 568,
                'question_id' => 226,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:42:08',
                'updated_at' => '2026-03-17 12:42:08',
            ),
            68 => 
            array (
                'id' => 569,
                'question_id' => 226,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:42:08',
                'updated_at' => '2026-03-17 12:42:08',
            ),
            69 => 
            array (
                'id' => 570,
                'question_id' => 227,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:43:12',
                'updated_at' => '2026-03-17 12:43:12',
            ),
            70 => 
            array (
                'id' => 571,
                'question_id' => 227,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:43:12',
                'updated_at' => '2026-03-17 12:43:12',
            ),
            71 => 
            array (
                'id' => 572,
                'question_id' => 228,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:44:01',
                'updated_at' => '2026-03-17 12:44:01',
            ),
            72 => 
            array (
                'id' => 573,
                'question_id' => 228,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:44:01',
                'updated_at' => '2026-03-17 12:44:01',
            ),
            73 => 
            array (
                'id' => 574,
                'question_id' => 229,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:45:11',
                'updated_at' => '2026-03-17 12:45:11',
            ),
            74 => 
            array (
                'id' => 575,
                'question_id' => 229,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:45:11',
                'updated_at' => '2026-03-17 12:45:11',
            ),
            75 => 
            array (
                'id' => 576,
                'question_id' => 230,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:45:59',
                'updated_at' => '2026-03-17 12:45:59',
            ),
            76 => 
            array (
                'id' => 577,
                'question_id' => 230,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:45:59',
                'updated_at' => '2026-03-17 12:45:59',
            ),
            77 => 
            array (
                'id' => 578,
                'question_id' => 231,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:58:57',
                'updated_at' => '2026-03-17 12:58:57',
            ),
            78 => 
            array (
                'id' => 579,
                'question_id' => 231,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:58:57',
                'updated_at' => '2026-03-17 12:58:57',
            ),
            79 => 
            array (
                'id' => 580,
                'question_id' => 232,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 12:59:36',
                'updated_at' => '2026-03-17 12:59:36',
            ),
            80 => 
            array (
                'id' => 581,
                'question_id' => 232,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 12:59:36',
                'updated_at' => '2026-03-17 12:59:36',
            ),
            81 => 
            array (
                'id' => 582,
                'question_id' => 233,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:03:57',
                'updated_at' => '2026-03-17 13:03:57',
            ),
            82 => 
            array (
                'id' => 583,
                'question_id' => 233,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:03:57',
                'updated_at' => '2026-03-17 13:03:57',
            ),
            83 => 
            array (
                'id' => 584,
                'question_id' => 234,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:05:13',
                'updated_at' => '2026-03-17 13:05:13',
            ),
            84 => 
            array (
                'id' => 585,
                'question_id' => 234,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:05:13',
                'updated_at' => '2026-03-17 13:05:13',
            ),
            85 => 
            array (
                'id' => 586,
                'question_id' => 235,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:09:28',
                'updated_at' => '2026-03-17 13:09:28',
            ),
            86 => 
            array (
                'id' => 587,
                'question_id' => 235,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:09:28',
                'updated_at' => '2026-03-17 13:09:28',
            ),
            87 => 
            array (
                'id' => 588,
                'question_id' => 236,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:10:54',
                'updated_at' => '2026-03-17 13:10:54',
            ),
            88 => 
            array (
                'id' => 589,
                'question_id' => 236,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:10:55',
                'updated_at' => '2026-03-17 13:10:55',
            ),
            89 => 
            array (
                'id' => 590,
                'question_id' => 237,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:11:35',
                'updated_at' => '2026-03-17 13:11:35',
            ),
            90 => 
            array (
                'id' => 591,
                'question_id' => 237,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:11:35',
                'updated_at' => '2026-03-17 13:11:35',
            ),
            91 => 
            array (
                'id' => 592,
                'question_id' => 238,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:12:07',
                'updated_at' => '2026-03-17 13:12:07',
            ),
            92 => 
            array (
                'id' => 593,
                'question_id' => 238,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:12:07',
                'updated_at' => '2026-03-17 13:12:07',
            ),
            93 => 
            array (
                'id' => 594,
                'question_id' => 239,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:12:46',
                'updated_at' => '2026-03-17 13:12:46',
            ),
            94 => 
            array (
                'id' => 595,
                'question_id' => 239,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:12:46',
                'updated_at' => '2026-03-17 13:12:46',
            ),
            95 => 
            array (
                'id' => 596,
                'question_id' => 240,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:13:52',
                'updated_at' => '2026-03-17 13:13:52',
            ),
            96 => 
            array (
                'id' => 597,
                'question_id' => 240,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:13:52',
                'updated_at' => '2026-03-17 13:13:52',
            ),
            97 => 
            array (
                'id' => 598,
                'question_id' => 241,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:16:03',
                'updated_at' => '2026-03-17 13:16:03',
            ),
            98 => 
            array (
                'id' => 599,
                'question_id' => 241,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:16:03',
                'updated_at' => '2026-03-17 13:16:03',
            ),
            99 => 
            array (
                'id' => 600,
                'question_id' => 242,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:16:38',
                'updated_at' => '2026-03-17 13:16:38',
            ),
            100 => 
            array (
                'id' => 601,
                'question_id' => 242,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:16:38',
                'updated_at' => '2026-03-17 13:16:38',
            ),
            101 => 
            array (
                'id' => 602,
                'question_id' => 243,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:17:14',
                'updated_at' => '2026-03-17 13:17:14',
            ),
            102 => 
            array (
                'id' => 603,
                'question_id' => 243,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:17:14',
                'updated_at' => '2026-03-17 13:17:14',
            ),
            103 => 
            array (
                'id' => 604,
                'question_id' => 244,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:18:01',
                'updated_at' => '2026-03-17 13:18:01',
            ),
            104 => 
            array (
                'id' => 605,
                'question_id' => 244,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:18:01',
                'updated_at' => '2026-03-17 13:18:01',
            ),
            105 => 
            array (
                'id' => 606,
                'question_id' => 245,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:19:07',
                'updated_at' => '2026-03-17 13:19:07',
            ),
            106 => 
            array (
                'id' => 607,
                'question_id' => 245,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:19:07',
                'updated_at' => '2026-03-17 13:19:07',
            ),
            107 => 
            array (
                'id' => 608,
                'question_id' => 246,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:33:06',
                'updated_at' => '2026-03-17 13:33:06',
            ),
            108 => 
            array (
                'id' => 609,
                'question_id' => 246,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:33:06',
                'updated_at' => '2026-03-17 13:33:06',
            ),
            109 => 
            array (
                'id' => 610,
                'question_id' => 247,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:33:36',
                'updated_at' => '2026-03-17 13:33:36',
            ),
            110 => 
            array (
                'id' => 611,
                'question_id' => 247,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:33:36',
                'updated_at' => '2026-03-17 13:33:36',
            ),
            111 => 
            array (
                'id' => 612,
                'question_id' => 248,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:34:10',
                'updated_at' => '2026-03-17 13:34:10',
            ),
            112 => 
            array (
                'id' => 613,
                'question_id' => 248,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:34:10',
                'updated_at' => '2026-03-17 13:34:10',
            ),
            113 => 
            array (
                'id' => 614,
                'question_id' => 249,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:35:20',
                'updated_at' => '2026-03-17 13:35:20',
            ),
            114 => 
            array (
                'id' => 615,
                'question_id' => 249,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:35:20',
                'updated_at' => '2026-03-17 13:35:20',
            ),
            115 => 
            array (
                'id' => 616,
                'question_id' => 250,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:36:08',
                'updated_at' => '2026-03-17 13:36:08',
            ),
            116 => 
            array (
                'id' => 617,
                'question_id' => 250,
                'answer_text' => 'E pasktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:36:08',
                'updated_at' => '2026-03-17 13:36:08',
            ),
            117 => 
            array (
                'id' => 618,
                'question_id' => 251,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:37:11',
                'updated_at' => '2026-03-17 13:37:11',
            ),
            118 => 
            array (
                'id' => 619,
                'question_id' => 251,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:37:11',
                'updated_at' => '2026-03-17 13:37:11',
            ),
            119 => 
            array (
                'id' => 620,
                'question_id' => 252,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:38:06',
                'updated_at' => '2026-03-17 13:38:06',
            ),
            120 => 
            array (
                'id' => 621,
                'question_id' => 252,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:38:06',
                'updated_at' => '2026-03-17 13:38:06',
            ),
            121 => 
            array (
                'id' => 622,
                'question_id' => 253,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:39:23',
                'updated_at' => '2026-03-17 13:39:23',
            ),
            122 => 
            array (
                'id' => 623,
                'question_id' => 253,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:39:23',
                'updated_at' => '2026-03-17 13:39:23',
            ),
            123 => 
            array (
                'id' => 624,
                'question_id' => 254,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:40:02',
                'updated_at' => '2026-03-17 13:40:02',
            ),
            124 => 
            array (
                'id' => 625,
                'question_id' => 254,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:40:02',
                'updated_at' => '2026-03-17 13:40:02',
            ),
            125 => 
            array (
                'id' => 626,
                'question_id' => 255,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:40:41',
                'updated_at' => '2026-03-17 13:40:41',
            ),
            126 => 
            array (
                'id' => 627,
                'question_id' => 255,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:40:41',
                'updated_at' => '2026-03-17 13:40:41',
            ),
            127 => 
            array (
                'id' => 628,
                'question_id' => 256,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:43:29',
                'updated_at' => '2026-03-17 13:43:29',
            ),
            128 => 
            array (
                'id' => 629,
                'question_id' => 256,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:43:29',
                'updated_at' => '2026-03-17 13:43:29',
            ),
            129 => 
            array (
                'id' => 630,
                'question_id' => 257,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-17 13:44:19',
                'updated_at' => '2026-03-17 13:44:19',
            ),
            130 => 
            array (
                'id' => 631,
                'question_id' => 257,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-17 13:44:19',
                'updated_at' => '2026-03-17 13:44:19',
            ),
            131 => 
            array (
                'id' => 632,
                'question_id' => 258,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:35:59',
                'updated_at' => '2026-03-18 08:35:59',
            ),
            132 => 
            array (
                'id' => 633,
                'question_id' => 258,
                'answer_text' => 'E pasakë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:35:59',
                'updated_at' => '2026-03-18 08:35:59',
            ),
            133 => 
            array (
                'id' => 634,
                'question_id' => 259,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:36:54',
                'updated_at' => '2026-03-18 08:36:54',
            ),
            134 => 
            array (
                'id' => 635,
                'question_id' => 259,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:36:54',
                'updated_at' => '2026-03-18 08:36:54',
            ),
            135 => 
            array (
                'id' => 636,
                'question_id' => 260,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:37:57',
                'updated_at' => '2026-03-18 08:37:57',
            ),
            136 => 
            array (
                'id' => 637,
                'question_id' => 260,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:37:57',
                'updated_at' => '2026-03-18 08:37:57',
            ),
            137 => 
            array (
                'id' => 638,
                'question_id' => 261,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:38:43',
                'updated_at' => '2026-03-18 08:38:43',
            ),
            138 => 
            array (
                'id' => 639,
                'question_id' => 261,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:38:43',
                'updated_at' => '2026-03-18 08:38:43',
            ),
            139 => 
            array (
                'id' => 640,
                'question_id' => 262,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:39:31',
                'updated_at' => '2026-03-18 08:39:31',
            ),
            140 => 
            array (
                'id' => 641,
                'question_id' => 262,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:39:31',
                'updated_at' => '2026-03-18 08:39:31',
            ),
            141 => 
            array (
                'id' => 642,
                'question_id' => 263,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:40:14',
                'updated_at' => '2026-03-18 08:40:14',
            ),
            142 => 
            array (
                'id' => 643,
                'question_id' => 263,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:40:14',
                'updated_at' => '2026-03-18 08:40:14',
            ),
            143 => 
            array (
                'id' => 644,
                'question_id' => 264,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:40:55',
                'updated_at' => '2026-03-18 08:40:55',
            ),
            144 => 
            array (
                'id' => 645,
                'question_id' => 264,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:40:55',
                'updated_at' => '2026-03-18 08:40:55',
            ),
            145 => 
            array (
                'id' => 646,
                'question_id' => 265,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:42:09',
                'updated_at' => '2026-03-18 08:42:09',
            ),
            146 => 
            array (
                'id' => 647,
                'question_id' => 265,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:42:09',
                'updated_at' => '2026-03-18 08:42:09',
            ),
            147 => 
            array (
                'id' => 648,
                'question_id' => 266,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:43:09',
                'updated_at' => '2026-03-18 08:43:09',
            ),
            148 => 
            array (
                'id' => 649,
                'question_id' => 266,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:43:09',
                'updated_at' => '2026-03-18 08:43:09',
            ),
            149 => 
            array (
                'id' => 650,
                'question_id' => 267,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:43:49',
                'updated_at' => '2026-03-18 08:43:49',
            ),
            150 => 
            array (
                'id' => 651,
                'question_id' => 267,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:43:49',
                'updated_at' => '2026-03-18 08:43:49',
            ),
            151 => 
            array (
                'id' => 652,
                'question_id' => 268,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:44:51',
                'updated_at' => '2026-03-18 08:44:51',
            ),
            152 => 
            array (
                'id' => 653,
                'question_id' => 268,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:44:51',
                'updated_at' => '2026-03-18 08:44:51',
            ),
            153 => 
            array (
                'id' => 654,
                'question_id' => 269,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:45:35',
                'updated_at' => '2026-03-18 08:45:35',
            ),
            154 => 
            array (
                'id' => 655,
                'question_id' => 269,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:45:35',
                'updated_at' => '2026-03-18 08:45:35',
            ),
            155 => 
            array (
                'id' => 656,
                'question_id' => 270,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:46:14',
                'updated_at' => '2026-03-18 08:46:14',
            ),
            156 => 
            array (
                'id' => 657,
                'question_id' => 270,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:46:14',
                'updated_at' => '2026-03-18 08:46:14',
            ),
            157 => 
            array (
                'id' => 658,
                'question_id' => 271,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:46:45',
                'updated_at' => '2026-03-18 08:46:45',
            ),
            158 => 
            array (
                'id' => 659,
                'question_id' => 271,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:46:45',
                'updated_at' => '2026-03-18 08:46:45',
            ),
            159 => 
            array (
                'id' => 660,
                'question_id' => 272,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:47:25',
                'updated_at' => '2026-03-18 08:47:25',
            ),
            160 => 
            array (
                'id' => 661,
                'question_id' => 272,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:47:25',
                'updated_at' => '2026-03-18 08:47:25',
            ),
            161 => 
            array (
                'id' => 662,
                'question_id' => 273,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:48:11',
                'updated_at' => '2026-03-18 08:48:11',
            ),
            162 => 
            array (
                'id' => 663,
                'question_id' => 273,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:48:11',
                'updated_at' => '2026-03-18 08:48:11',
            ),
            163 => 
            array (
                'id' => 664,
                'question_id' => 274,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:48:42',
                'updated_at' => '2026-03-18 08:48:42',
            ),
            164 => 
            array (
                'id' => 665,
                'question_id' => 274,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:48:42',
                'updated_at' => '2026-03-18 08:48:42',
            ),
            165 => 
            array (
                'id' => 666,
                'question_id' => 275,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:49:20',
                'updated_at' => '2026-03-18 08:49:20',
            ),
            166 => 
            array (
                'id' => 667,
                'question_id' => 275,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:49:20',
                'updated_at' => '2026-03-18 08:49:20',
            ),
            167 => 
            array (
                'id' => 668,
                'question_id' => 276,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:50:15',
                'updated_at' => '2026-03-18 08:50:15',
            ),
            168 => 
            array (
                'id' => 669,
                'question_id' => 276,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:50:15',
                'updated_at' => '2026-03-18 08:50:15',
            ),
            169 => 
            array (
                'id' => 670,
                'question_id' => 277,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:51:08',
                'updated_at' => '2026-03-18 08:51:08',
            ),
            170 => 
            array (
                'id' => 671,
                'question_id' => 277,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:51:08',
                'updated_at' => '2026-03-18 08:51:08',
            ),
            171 => 
            array (
                'id' => 672,
                'question_id' => 278,
                'answer_text' => 'Jo',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:52:02',
                'updated_at' => '2026-03-18 08:52:02',
            ),
            172 => 
            array (
                'id' => 673,
                'question_id' => 278,
                'answer_text' => 'Po',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:52:02',
                'updated_at' => '2026-03-18 08:52:02',
            ),
            173 => 
            array (
                'id' => 674,
                'question_id' => 279,
                'answer_text' => 'Ndalim kalim për këmbësorë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:53:01',
                'updated_at' => '2026-03-18 08:53:01',
            ),
            174 => 
            array (
                'id' => 675,
                'question_id' => 279,
                'answer_text' => 'Kalimi lirë për këmbësorë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:53:01',
                'updated_at' => '2026-03-18 08:53:01',
            ),
            175 => 
            array (
                'id' => 676,
                'question_id' => 279,
                'answer_text' => 'Semafori nuk punon.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:53:01',
                'updated_at' => '2026-03-18 08:53:01',
            ),
            176 => 
            array (
                'id' => 677,
                'question_id' => 280,
                'answer_text' => 'Lëvizjën nëpër shiritin 3 dhe 4 e kam të lejuar.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:54:21',
                'updated_at' => '2026-03-18 08:54:21',
            ),
            177 => 
            array (
                'id' => 678,
                'question_id' => 280,
                'answer_text' => 'Unë jam i obliguar nga shiriti 2 të kaloj në shiritin 1.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:54:21',
                'updated_at' => '2026-03-18 08:54:21',
            ),
            178 => 
            array (
                'id' => 679,
                'question_id' => 280,
                'answer_text' => 'Unë mund ta shfrytëzoj cilin do shirit për lëvizje.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:54:21',
                'updated_at' => '2026-03-18 08:54:21',
            ),
            179 => 
            array (
                'id' => 680,
                'question_id' => 281,
                'answer_text' => 'Ndalim kalimi, përveç mjeteve të cilat nuk mund të ndalen në mënë të sigurt para semaforit.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:55:19',
                'updated_at' => '2026-03-18 08:55:19',
            ),
            180 => 
            array (
                'id' => 681,
                'question_id' => 281,
                'answer_text' => 'Kalim i lirë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:55:19',
                'updated_at' => '2026-03-18 08:55:19',
            ),
            181 => 
            array (
                'id' => 682,
                'question_id' => 281,
                'answer_text' => 'Duhet të jenë të ndezur të gjithë treguesit drejtimit në automjet.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:55:19',
                'updated_at' => '2026-03-18 08:55:19',
            ),
            182 => 
            array (
                'id' => 683,
                'question_id' => 282,
                'answer_text' => 'Paralajmëron shoferin se së shpejti do të përfundojë kalimi i lirë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 08:56:19',
                'updated_at' => '2026-03-18 08:56:19',
            ),
            183 => 
            array (
                'id' => 684,
                'question_id' => 282,
                'answer_text' => 'Ndalje e menjëhershme.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:56:19',
                'updated_at' => '2026-03-18 08:56:19',
            ),
            184 => 
            array (
                'id' => 685,
                'question_id' => 282,
                'answer_text' => 'Semafori nuk funksionon.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 08:56:19',
                'updated_at' => '2026-03-18 08:56:19',
            ),
            185 => 
            array (
                'id' => 686,
                'question_id' => 283,
                'answer_text' => 'A',
                'is_correct' => 0,
                'image' => 'answers/0hNkbQ6tXqKJftrsp4ibJZHVgOSceQxwN1Lplpp3.png',
                'created_at' => '2026-03-18 09:04:17',
                'updated_at' => '2026-03-18 09:04:17',
            ),
            186 => 
            array (
                'id' => 687,
                'question_id' => 283,
                'answer_text' => 'B',
                'is_correct' => 1,
                'image' => 'answers/OUmlMf5eEM8zFneB07pgO56Q3clniUjtDe9K4jIH.png',
                'created_at' => '2026-03-18 09:04:17',
                'updated_at' => '2026-03-18 09:04:17',
            ),
            187 => 
            array (
                'id' => 688,
                'question_id' => 283,
                'answer_text' => 'C',
                'is_correct' => 0,
                'image' => 'answers/XawEl7PX9AwhHz6reqSBK4aOaZtfS07yr4YxpX8a.png',
                'created_at' => '2026-03-18 09:04:17',
                'updated_at' => '2026-03-18 09:04:17',
            ),
            188 => 
            array (
                'id' => 689,
                'question_id' => 284,
                'answer_text' => 'A',
                'is_correct' => 0,
                'image' => 'answers/nX3RiUwPOiTkqguQj2Yr4ypsD1B2GfUV1Uiv0mXE.png',
                'created_at' => '2026-03-18 09:05:41',
                'updated_at' => '2026-03-18 09:05:41',
            ),
            189 => 
            array (
                'id' => 690,
                'question_id' => 284,
                'answer_text' => 'B',
                'is_correct' => 0,
                'image' => 'answers/Pcyun4ZPgvl606wVUcWlO3TGu0RsQ8XOovobwcxD.png',
                'created_at' => '2026-03-18 09:05:41',
                'updated_at' => '2026-03-18 09:05:41',
            ),
            190 => 
            array (
                'id' => 691,
                'question_id' => 284,
                'answer_text' => 'C',
                'is_correct' => 1,
                'image' => 'answers/MjE6Vzoa3It7zUqjKGZJ0VJyZnZwqjt0UoVs9Hjm.png',
                'created_at' => '2026-03-18 09:05:41',
                'updated_at' => '2026-03-18 09:05:41',
            ),
            191 => 
            array (
                'id' => 692,
                'question_id' => 285,
                'answer_text' => 'A',
                'is_correct' => 1,
                'image' => 'answers/LgyuXliX6TVzSdEpIeIYZs8g8WIjFxtJgWSCYKJM.png',
                'created_at' => '2026-03-18 09:06:50',
                'updated_at' => '2026-03-18 09:06:50',
            ),
            192 => 
            array (
                'id' => 693,
                'question_id' => 285,
                'answer_text' => 'B',
                'is_correct' => 0,
                'image' => 'answers/X1A50c1YgF37Sc2dnLwz48TMLjYn5sPgbpm2goOY.png',
                'created_at' => '2026-03-18 09:06:50',
                'updated_at' => '2026-03-18 09:06:50',
            ),
            193 => 
            array (
                'id' => 694,
                'question_id' => 285,
                'answer_text' => 'C',
                'is_correct' => 0,
                'image' => 'answers/qcE9RRrM3LIGSLRv4eo7f9GgBDPZATRjPF4jwISe.png',
                'created_at' => '2026-03-18 09:06:51',
                'updated_at' => '2026-03-18 09:06:51',
            ),
            194 => 
            array (
                'id' => 695,
                'question_id' => 286,
                'answer_text' => 'Pjesëmarrësit e trafikut duhet ta shpejtojnë lëvizjen e mjetit të tyre.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:07:53',
                'updated_at' => '2026-03-18 09:23:58',
            ),
            195 => 
            array (
                'id' => 696,
                'question_id' => 286,
                'answer_text' => 'Pjesëmarësit e trafikut duhet ta ngadalsojnë lëvizjen e mjetit të tyre.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:07:53',
                'updated_at' => '2026-03-18 09:23:58',
            ),
            196 => 
            array (
                'id' => 697,
                'question_id' => 286,
                'answer_text' => 'Pjesëmarrësit e trafikut duhet ta ndalin mjetin e tyre.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:07:53',
                'updated_at' => '2026-03-18 09:23:58',
            ),
            197 => 
            array (
                'id' => 698,
                'question_id' => 287,
                'answer_text' => 'Mjetet që vijjnë nga krahu i djathtë i policit.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:08:47',
                'updated_at' => '2026-03-18 09:24:12',
            ),
            198 => 
            array (
                'id' => 699,
                'question_id' => 287,
                'answer_text' => 'Mjetet që vijnë nga krahu i majtë i policit.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:08:47',
                'updated_at' => '2026-03-18 09:24:12',
            ),
            199 => 
            array (
                'id' => 700,
                'question_id' => 287,
                'answer_text' => 'Mjetet të cilat vijnë përballë dhe prapa shpinës së policit.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:08:47',
                'updated_at' => '2026-03-18 09:24:12',
            ),
            200 => 
            array (
                'id' => 701,
                'question_id' => 288,
                'answer_text' => 'Pjesëmarrësit e trafikut duhet të lëvizin me kujdes të shtuar.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:16:00',
                'updated_at' => '2026-03-18 09:25:08',
            ),
            201 => 
            array (
                'id' => 702,
                'question_id' => 288,
                'answer_text' => 'Urdhëresa e policit vlen vetëm për motoçikleta.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:16:00',
                'updated_at' => '2026-03-18 09:25:08',
            ),
            202 => 
            array (
                'id' => 703,
                'question_id' => 288,
                'answer_text' => 'Ndalim kalimi për të gjithë pjesëmarrësit në trafik.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:16:00',
                'updated_at' => '2026-03-18 09:25:08',
            ),
            203 => 
            array (
                'id' => 704,
                'question_id' => 289,
                'answer_text' => 'Duhet të vazhdoj lëvizjen me shpejtësi të rritur që mos të pengoj automjetin.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:17:08',
                'updated_at' => '2026-03-18 09:24:21',
            ),
            204 => 
            array (
                'id' => 705,
                'question_id' => 289,
                'answer_text' => 'Duhet ti ndezi të gjithë treguesit e drejtimit.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:17:08',
                'updated_at' => '2026-03-18 09:24:21',
            ),
            205 => 
            array (
                'id' => 706,
                'question_id' => 289,
                'answer_text' => 'Do të skajohem në skajin e rrugës dhe do të ndalem.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:17:08',
                'updated_at' => '2026-03-18 09:24:21',
            ),
            206 => 
            array (
                'id' => 707,
                'question_id' => 290,
                'answer_text' => 'Ndalim kalimi për të gjithë pjesëmarrësit në trafik.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:18:31',
                'updated_at' => '2026-03-18 09:24:31',
            ),
            207 => 
            array (
                'id' => 708,
                'question_id' => 290,
                'answer_text' => 'Ndalim kalimi vetëm për këmbësorë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:18:31',
                'updated_at' => '2026-03-18 09:24:31',
            ),
            208 => 
            array (
                'id' => 709,
                'question_id' => 290,
                'answer_text' => 'Kalim i lirë për të gjithë pjesëmarrsit në trafik.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:18:31',
                'updated_at' => '2026-03-18 09:24:31',
            ),
            209 => 
            array (
                'id' => 710,
                'question_id' => 291,
                'answer_text' => 'Pjesëmarrësit që lëvizin në drejtim të krahëve.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:20:50',
                'updated_at' => '2026-03-18 09:24:42',
            ),
            210 => 
            array (
                'id' => 711,
                'question_id' => 291,
                'answer_text' => 'Pjesëmarrësit që lëvizin në drejtim të shpinës.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:20:50',
                'updated_at' => '2026-03-18 09:24:42',
            ),
            211 => 
            array (
                'id' => 712,
                'question_id' => 291,
                'answer_text' => 'Pjesëmarrësit që lëvizin në drejtim të gjoksit.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:20:50',
                'updated_at' => '2026-03-18 09:24:42',
            ),
            212 => 
            array (
                'id' => 713,
                'question_id' => 292,
                'answer_text' => 'Kamioni duhet ndezë të gjithë treguesit e drejtimit.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:21:36',
                'updated_at' => '2026-03-18 09:24:52',
            ),
            213 => 
            array (
                'id' => 714,
                'question_id' => 292,
                'answer_text' => 'Kamioni e ka kalimin e lirë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:21:36',
                'updated_at' => '2026-03-18 09:24:52',
            ),
            214 => 
            array (
                'id' => 715,
                'question_id' => 292,
                'answer_text' => 'Kamioni e ka kalimin e ndaluar.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:21:36',
                'updated_at' => '2026-03-18 09:24:52',
            ),
            215 => 
            array (
                'id' => 716,
                'question_id' => 293,
                'answer_text' => 'Djathtas, drejt dhe majtas.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:22:32',
                'updated_at' => '2026-03-18 09:25:00',
            ),
            216 => 
            array (
                'id' => 717,
                'question_id' => 293,
                'answer_text' => 'Vetëm djathtas.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:22:32',
                'updated_at' => '2026-03-18 09:25:00',
            ),
            217 => 
            array (
                'id' => 718,
                'question_id' => 293,
                'answer_text' => 'Vetëm majtas.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:22:32',
                'updated_at' => '2026-03-18 09:25:00',
            ),
            218 => 
            array (
                'id' => 719,
                'question_id' => 294,
                'answer_text' => 'Lejon tejkalimin.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:27:19',
                'updated_at' => '2026-03-18 09:27:19',
            ),
            219 => 
            array (
                'id' => 720,
                'question_id' => 294,
                'answer_text' => 'Rrugën pa dalje.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:27:19',
                'updated_at' => '2026-03-18 09:27:19',
            ),
            220 => 
            array (
                'id' => 721,
                'question_id' => 294,
                'answer_text' => 'Ndalon tejkalimin.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:27:19',
                'updated_at' => '2026-03-18 09:27:19',
            ),
            221 => 
            array (
                'id' => 722,
                'question_id' => 295,
                'answer_text' => 'Lejon tejkalimin e automjeteve.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:28:05',
                'updated_at' => '2026-03-18 09:28:05',
            ),
            222 => 
            array (
                'id' => 723,
                'question_id' => 295,
                'answer_text' => 'Vendin ku duhet të ndalet automjeti.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:28:05',
                'updated_at' => '2026-03-18 09:28:05',
            ),
            223 => 
            array (
                'id' => 724,
                'question_id' => 295,
                'answer_text' => 'Ndalon tejkalimin e automjeteve.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:28:05',
                'updated_at' => '2026-03-18 09:28:05',
            ),
            224 => 
            array (
                'id' => 725,
                'question_id' => 296,
                'answer_text' => 'Lejon tejkalimin nga dy anët.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:29:22',
                'updated_at' => '2026-03-18 09:30:40',
            ),
            225 => 
            array (
                'id' => 726,
                'question_id' => 296,
                'answer_text' => 'Ndalim tejkalimi nga ana ku shtrihet vija gjatësore e plotë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:29:22',
                'updated_at' => '2026-03-18 09:30:40',
            ),
            226 => 
            array (
                'id' => 727,
                'question_id' => 296,
                'answer_text' => 'Vendin ku ngushtohet rruga.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:29:22',
                'updated_at' => '2026-03-18 09:30:40',
            ),
            227 => 
            array (
                'id' => 728,
                'question_id' => 297,
                'answer_text' => 'Përfundimin e rrugës publike.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:30:25',
                'updated_at' => '2026-03-18 09:30:48',
            ),
            228 => 
            array (
                'id' => 729,
                'question_id' => 297,
                'answer_text' => 'Ndalon kalimin e mjeteve mbi vija.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:30:25',
                'updated_at' => '2026-03-18 09:30:49',
            ),
            229 => 
            array (
                'id' => 730,
                'question_id' => 297,
                'answer_text' => 'Lejohet tejkalimi mbi vija.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:30:25',
                'updated_at' => '2026-03-18 09:30:49',
            ),
            230 => 
            array (
                'id' => 731,
                'question_id' => 298,
                'answer_text' => 'Do të ndalem para vijës ndalëse.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:32:00',
                'updated_at' => '2026-03-18 09:32:00',
            ),
            231 => 
            array (
                'id' => 732,
                'question_id' => 298,
                'answer_text' => 'Do të vazhdoj lëvizjën me kujdes pa u ndalur.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:32:00',
                'updated_at' => '2026-03-18 09:32:00',
            ),
            232 => 
            array (
                'id' => 733,
                'question_id' => 298,
                'answer_text' => 'Duhet të ndërroj shiritin e trafikut.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:32:00',
                'updated_at' => '2026-03-18 09:32:00',
            ),
            233 => 
            array (
                'id' => 734,
                'question_id' => 299,
                'answer_text' => 'Duhet të ndalem para vijës tërthore.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:32:48',
                'updated_at' => '2026-03-18 09:32:48',
            ),
            234 => 
            array (
                'id' => 735,
                'question_id' => 299,
                'answer_text' => 'Do të vazhdoj lëvizjën me kujdes të shtuar dhe sipas nevojës do të ndalem.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:32:48',
                'updated_at' => '2026-03-18 09:32:48',
            ),
            235 => 
            array (
                'id' => 736,
                'question_id' => 299,
                'answer_text' => 'Duhet ti ndezi të gjithë treguesit e drejtimit.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:32:48',
                'updated_at' => '2026-03-18 09:32:48',
            ),
            236 => 
            array (
                'id' => 737,
                'question_id' => 300,
                'answer_text' => 'Lejon tejkalimin nga dy anët.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:33:32',
                'updated_at' => '2026-03-18 09:33:32',
            ),
            237 => 
            array (
                'id' => 738,
                'question_id' => 300,
                'answer_text' => 'Lejon tejkalimi nga ana ku shtrihet vija gjatësore e ndërprerë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:33:32',
                'updated_at' => '2026-03-18 09:33:32',
            ),
            238 => 
            array (
                'id' => 739,
                'question_id' => 300,
                'answer_text' => 'Vendin ku ngushtohet rruga.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:33:32',
                'updated_at' => '2026-03-18 09:33:32',
            ),
            239 => 
            array (
                'id' => 740,
                'question_id' => 301,
                'answer_text' => 'Fillimin e ngushtimit të rrugës nga dy anët.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:34:16',
                'updated_at' => '2026-03-18 09:34:16',
            ),
            240 => 
            array (
                'id' => 741,
                'question_id' => 301,
                'answer_text' => 'Ndarjen e shiritave të trafikut.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:34:16',
                'updated_at' => '2026-03-18 09:34:16',
            ),
            241 => 
            array (
                'id' => 742,
                'question_id' => 301,
                'answer_text' => 'Ndalon tejkalimin.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:34:16',
                'updated_at' => '2026-03-18 09:34:16',
            ),
            242 => 
            array (
                'id' => 743,
                'question_id' => 302,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:36:05',
                'updated_at' => '2026-03-18 09:36:05',
            ),
            243 => 
            array (
                'id' => 744,
                'question_id' => 302,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:36:05',
                'updated_at' => '2026-03-18 09:36:05',
            ),
            244 => 
            array (
                'id' => 745,
                'question_id' => 303,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:36:42',
                'updated_at' => '2026-03-18 09:36:42',
            ),
            245 => 
            array (
                'id' => 746,
                'question_id' => 303,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:36:42',
                'updated_at' => '2026-03-18 09:36:42',
            ),
            246 => 
            array (
                'id' => 747,
                'question_id' => 304,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:37:17',
                'updated_at' => '2026-03-18 09:37:17',
            ),
            247 => 
            array (
                'id' => 748,
                'question_id' => 304,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:37:17',
                'updated_at' => '2026-03-18 09:37:17',
            ),
            248 => 
            array (
                'id' => 749,
                'question_id' => 305,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:38:09',
                'updated_at' => '2026-03-18 09:38:09',
            ),
            249 => 
            array (
                'id' => 750,
                'question_id' => 305,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:38:09',
                'updated_at' => '2026-03-18 09:38:09',
            ),
            250 => 
            array (
                'id' => 751,
                'question_id' => 306,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:55:24',
                'updated_at' => '2026-03-18 09:55:24',
            ),
            251 => 
            array (
                'id' => 752,
                'question_id' => 306,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:55:24',
                'updated_at' => '2026-03-18 09:55:24',
            ),
            252 => 
            array (
                'id' => 753,
                'question_id' => 307,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:56:36',
                'updated_at' => '2026-03-18 09:56:36',
            ),
            253 => 
            array (
                'id' => 754,
                'question_id' => 307,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:56:36',
                'updated_at' => '2026-03-18 09:56:36',
            ),
            254 => 
            array (
                'id' => 755,
                'question_id' => 308,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:57:32',
                'updated_at' => '2026-03-18 09:57:32',
            ),
            255 => 
            array (
                'id' => 756,
                'question_id' => 308,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:57:32',
                'updated_at' => '2026-03-18 09:57:32',
            ),
            256 => 
            array (
                'id' => 757,
                'question_id' => 309,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:58:25',
                'updated_at' => '2026-03-18 09:58:25',
            ),
            257 => 
            array (
                'id' => 758,
                'question_id' => 309,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:58:25',
                'updated_at' => '2026-03-18 09:58:25',
            ),
            258 => 
            array (
                'id' => 759,
                'question_id' => 310,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:59:09',
                'updated_at' => '2026-03-18 09:59:09',
            ),
            259 => 
            array (
                'id' => 760,
                'question_id' => 310,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:59:09',
                'updated_at' => '2026-03-18 09:59:09',
            ),
            260 => 
            array (
                'id' => 761,
                'question_id' => 311,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 09:59:49',
                'updated_at' => '2026-03-18 09:59:49',
            ),
            261 => 
            array (
                'id' => 762,
                'question_id' => 311,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 09:59:49',
                'updated_at' => '2026-03-18 09:59:49',
            ),
            262 => 
            array (
                'id' => 763,
                'question_id' => 312,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 10:00:28',
                'updated_at' => '2026-03-19 20:44:40',
            ),
            263 => 
            array (
                'id' => 764,
                'question_id' => 312,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 10:00:29',
                'updated_at' => '2026-03-19 20:44:40',
            ),
            264 => 
            array (
                'id' => 765,
                'question_id' => 313,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 10:01:42',
                'updated_at' => '2026-03-18 10:01:42',
            ),
            265 => 
            array (
                'id' => 766,
                'question_id' => 313,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 10:01:42',
                'updated_at' => '2026-03-18 10:01:42',
            ),
            266 => 
            array (
                'id' => 767,
                'question_id' => 314,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 10:02:23',
                'updated_at' => '2026-03-18 10:02:23',
            ),
            267 => 
            array (
                'id' => 768,
                'question_id' => 314,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 10:02:23',
                'updated_at' => '2026-03-18 10:02:23',
            ),
            268 => 
            array (
                'id' => 769,
                'question_id' => 315,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 10:03:10',
                'updated_at' => '2026-03-18 10:03:10',
            ),
            269 => 
            array (
                'id' => 770,
                'question_id' => 315,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 10:03:10',
                'updated_at' => '2026-03-18 10:03:10',
            ),
            270 => 
            array (
                'id' => 771,
                'question_id' => 316,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 10:03:50',
                'updated_at' => '2026-03-18 10:03:50',
            ),
            271 => 
            array (
                'id' => 772,
                'question_id' => 316,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 10:03:50',
                'updated_at' => '2026-03-18 10:03:50',
            ),
            272 => 
            array (
                'id' => 773,
                'question_id' => 317,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 10:04:23',
                'updated_at' => '2026-03-18 10:04:23',
            ),
            273 => 
            array (
                'id' => 774,
                'question_id' => 317,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 10:04:23',
                'updated_at' => '2026-03-18 10:04:23',
            ),
            274 => 
            array (
                'id' => 775,
                'question_id' => 318,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 10:05:02',
                'updated_at' => '2026-03-18 10:05:02',
            ),
            275 => 
            array (
                'id' => 776,
                'question_id' => 318,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 10:05:02',
                'updated_at' => '2026-03-18 10:05:02',
            ),
            276 => 
            array (
                'id' => 777,
                'question_id' => 319,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 10:05:48',
                'updated_at' => '2026-03-18 10:05:48',
            ),
            277 => 
            array (
                'id' => 778,
                'question_id' => 319,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 10:05:48',
                'updated_at' => '2026-03-18 10:05:48',
            ),
            278 => 
            array (
                'id' => 779,
                'question_id' => 320,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 10:06:35',
                'updated_at' => '2026-03-18 10:06:47',
            ),
            279 => 
            array (
                'id' => 780,
                'question_id' => 320,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 10:06:35',
                'updated_at' => '2026-03-18 10:06:47',
            ),
            280 => 
            array (
                'id' => 781,
                'question_id' => 321,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 10:07:28',
                'updated_at' => '2026-03-18 10:07:28',
            ),
            281 => 
            array (
                'id' => 782,
                'question_id' => 321,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 10:07:28',
                'updated_at' => '2026-03-18 10:07:28',
            ),
            282 => 
            array (
                'id' => 783,
                'question_id' => 322,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 10:14:13',
                'updated_at' => '2026-03-18 10:14:13',
            ),
            283 => 
            array (
                'id' => 784,
                'question_id' => 322,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 10:14:13',
                'updated_at' => '2026-03-18 10:14:13',
            ),
            284 => 
            array (
                'id' => 785,
                'question_id' => 323,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 10:14:49',
                'updated_at' => '2026-03-18 10:14:49',
            ),
            285 => 
            array (
                'id' => 786,
                'question_id' => 323,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 10:14:49',
                'updated_at' => '2026-03-18 10:14:49',
            ),
            286 => 
            array (
                'id' => 787,
                'question_id' => 324,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 10:15:35',
                'updated_at' => '2026-03-18 10:15:35',
            ),
            287 => 
            array (
                'id' => 788,
                'question_id' => 324,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 10:15:35',
                'updated_at' => '2026-03-18 10:15:35',
            ),
            288 => 
            array (
                'id' => 789,
                'question_id' => 325,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 10:17:05',
                'updated_at' => '2026-03-18 10:17:05',
            ),
            289 => 
            array (
                'id' => 790,
                'question_id' => 325,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 10:17:05',
                'updated_at' => '2026-03-18 10:17:05',
            ),
            290 => 
            array (
                'id' => 791,
                'question_id' => 326,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:21:52',
                'updated_at' => '2026-03-18 12:21:52',
            ),
            291 => 
            array (
                'id' => 792,
                'question_id' => 326,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:21:52',
                'updated_at' => '2026-03-18 12:21:52',
            ),
            292 => 
            array (
                'id' => 793,
                'question_id' => 327,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:23:33',
                'updated_at' => '2026-03-18 12:23:33',
            ),
            293 => 
            array (
                'id' => 794,
                'question_id' => 327,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:23:33',
                'updated_at' => '2026-03-18 12:23:33',
            ),
            294 => 
            array (
                'id' => 795,
                'question_id' => 328,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:24:16',
                'updated_at' => '2026-03-18 12:24:16',
            ),
            295 => 
            array (
                'id' => 796,
                'question_id' => 328,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:24:16',
                'updated_at' => '2026-03-18 12:24:16',
            ),
            296 => 
            array (
                'id' => 797,
                'question_id' => 329,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:25:13',
                'updated_at' => '2026-03-18 12:25:13',
            ),
            297 => 
            array (
                'id' => 798,
                'question_id' => 329,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:25:13',
                'updated_at' => '2026-03-18 12:25:13',
            ),
            298 => 
            array (
                'id' => 799,
                'question_id' => 330,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:26:07',
                'updated_at' => '2026-03-18 12:26:07',
            ),
            299 => 
            array (
                'id' => 800,
                'question_id' => 330,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:26:07',
                'updated_at' => '2026-03-18 12:26:07',
            ),
            300 => 
            array (
                'id' => 801,
                'question_id' => 331,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:26:46',
                'updated_at' => '2026-03-18 12:26:46',
            ),
            301 => 
            array (
                'id' => 802,
                'question_id' => 331,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:26:46',
                'updated_at' => '2026-03-18 12:26:46',
            ),
            302 => 
            array (
                'id' => 803,
                'question_id' => 332,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:27:20',
                'updated_at' => '2026-03-18 12:27:20',
            ),
            303 => 
            array (
                'id' => 804,
                'question_id' => 332,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:27:20',
                'updated_at' => '2026-03-18 12:27:20',
            ),
            304 => 
            array (
                'id' => 805,
                'question_id' => 333,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:28:13',
                'updated_at' => '2026-03-18 12:28:13',
            ),
            305 => 
            array (
                'id' => 806,
                'question_id' => 333,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:28:13',
                'updated_at' => '2026-03-18 12:28:13',
            ),
            306 => 
            array (
                'id' => 807,
                'question_id' => 334,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:29:18',
                'updated_at' => '2026-03-18 12:29:18',
            ),
            307 => 
            array (
                'id' => 808,
                'question_id' => 334,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:29:18',
                'updated_at' => '2026-03-18 12:29:18',
            ),
            308 => 
            array (
                'id' => 809,
                'question_id' => 335,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:29:48',
                'updated_at' => '2026-03-18 12:29:48',
            ),
            309 => 
            array (
                'id' => 810,
                'question_id' => 335,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:29:48',
                'updated_at' => '2026-03-18 12:29:48',
            ),
            310 => 
            array (
                'id' => 811,
                'question_id' => 336,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:30:27',
                'updated_at' => '2026-03-18 12:31:57',
            ),
            311 => 
            array (
                'id' => 812,
                'question_id' => 336,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:30:27',
                'updated_at' => '2026-03-18 12:31:57',
            ),
            312 => 
            array (
                'id' => 813,
                'question_id' => 337,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:31:25',
                'updated_at' => '2026-03-18 12:31:25',
            ),
            313 => 
            array (
                'id' => 814,
                'question_id' => 337,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:31:25',
                'updated_at' => '2026-03-18 12:31:25',
            ),
            314 => 
            array (
                'id' => 815,
                'question_id' => 338,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:32:51',
                'updated_at' => '2026-03-18 12:33:05',
            ),
            315 => 
            array (
                'id' => 816,
                'question_id' => 338,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:32:51',
                'updated_at' => '2026-03-18 12:33:06',
            ),
            316 => 
            array (
                'id' => 817,
                'question_id' => 339,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:33:49',
                'updated_at' => '2026-03-18 12:33:49',
            ),
            317 => 
            array (
                'id' => 818,
                'question_id' => 339,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:33:49',
                'updated_at' => '2026-03-18 12:33:49',
            ),
            318 => 
            array (
                'id' => 819,
                'question_id' => 340,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:34:29',
                'updated_at' => '2026-03-18 12:34:29',
            ),
            319 => 
            array (
                'id' => 820,
                'question_id' => 340,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:34:29',
                'updated_at' => '2026-03-18 12:34:29',
            ),
            320 => 
            array (
                'id' => 821,
                'question_id' => 341,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:35:07',
                'updated_at' => '2026-03-18 12:35:07',
            ),
            321 => 
            array (
                'id' => 822,
                'question_id' => 341,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:35:07',
                'updated_at' => '2026-03-18 12:35:07',
            ),
            322 => 
            array (
                'id' => 823,
                'question_id' => 342,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:35:59',
                'updated_at' => '2026-03-18 12:35:59',
            ),
            323 => 
            array (
                'id' => 824,
                'question_id' => 342,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:35:59',
                'updated_at' => '2026-03-18 12:35:59',
            ),
            324 => 
            array (
                'id' => 825,
                'question_id' => 343,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:37:17',
                'updated_at' => '2026-03-18 12:37:17',
            ),
            325 => 
            array (
                'id' => 826,
                'question_id' => 343,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:37:17',
                'updated_at' => '2026-03-18 12:37:17',
            ),
            326 => 
            array (
                'id' => 827,
                'question_id' => 344,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:38:00',
                'updated_at' => '2026-03-18 12:38:00',
            ),
            327 => 
            array (
                'id' => 828,
                'question_id' => 344,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:38:00',
                'updated_at' => '2026-03-18 12:38:00',
            ),
            328 => 
            array (
                'id' => 829,
                'question_id' => 345,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:38:27',
                'updated_at' => '2026-03-18 12:38:27',
            ),
            329 => 
            array (
                'id' => 830,
                'question_id' => 345,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:38:27',
                'updated_at' => '2026-03-18 12:38:27',
            ),
            330 => 
            array (
                'id' => 831,
                'question_id' => 346,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:39:34',
                'updated_at' => '2026-03-18 12:39:34',
            ),
            331 => 
            array (
                'id' => 832,
                'question_id' => 346,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:39:34',
                'updated_at' => '2026-03-18 12:39:34',
            ),
            332 => 
            array (
                'id' => 833,
                'question_id' => 347,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:40:10',
                'updated_at' => '2026-03-18 12:40:10',
            ),
            333 => 
            array (
                'id' => 834,
                'question_id' => 347,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:40:10',
                'updated_at' => '2026-03-18 12:40:10',
            ),
            334 => 
            array (
                'id' => 835,
                'question_id' => 348,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:40:45',
                'updated_at' => '2026-03-18 12:40:45',
            ),
            335 => 
            array (
                'id' => 836,
                'question_id' => 348,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:40:45',
                'updated_at' => '2026-03-18 12:40:45',
            ),
            336 => 
            array (
                'id' => 837,
                'question_id' => 349,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:41:25',
                'updated_at' => '2026-03-18 12:41:25',
            ),
            337 => 
            array (
                'id' => 838,
                'question_id' => 349,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:41:25',
                'updated_at' => '2026-03-18 12:41:25',
            ),
            338 => 
            array (
                'id' => 839,
                'question_id' => 350,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:42:19',
                'updated_at' => '2026-03-18 12:42:19',
            ),
            339 => 
            array (
                'id' => 840,
                'question_id' => 350,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:42:19',
                'updated_at' => '2026-03-18 12:42:19',
            ),
            340 => 
            array (
                'id' => 841,
                'question_id' => 351,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:42:51',
                'updated_at' => '2026-03-18 12:42:51',
            ),
            341 => 
            array (
                'id' => 842,
                'question_id' => 351,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:42:51',
                'updated_at' => '2026-03-18 12:42:51',
            ),
            342 => 
            array (
                'id' => 843,
                'question_id' => 352,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:47:37',
                'updated_at' => '2026-03-18 12:47:37',
            ),
            343 => 
            array (
                'id' => 844,
                'question_id' => 352,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:47:37',
                'updated_at' => '2026-03-18 12:47:37',
            ),
            344 => 
            array (
                'id' => 845,
                'question_id' => 353,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:48:15',
                'updated_at' => '2026-03-18 12:48:15',
            ),
            345 => 
            array (
                'id' => 846,
                'question_id' => 353,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:48:15',
                'updated_at' => '2026-03-18 12:48:15',
            ),
            346 => 
            array (
                'id' => 847,
                'question_id' => 354,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:48:50',
                'updated_at' => '2026-03-18 12:48:50',
            ),
            347 => 
            array (
                'id' => 848,
                'question_id' => 354,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:48:50',
                'updated_at' => '2026-03-18 12:48:50',
            ),
            348 => 
            array (
                'id' => 849,
                'question_id' => 355,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:49:30',
                'updated_at' => '2026-03-18 12:49:30',
            ),
            349 => 
            array (
                'id' => 850,
                'question_id' => 355,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:49:30',
                'updated_at' => '2026-03-18 12:49:30',
            ),
            350 => 
            array (
                'id' => 851,
                'question_id' => 356,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:50:07',
                'updated_at' => '2026-03-18 12:50:07',
            ),
            351 => 
            array (
                'id' => 852,
                'question_id' => 356,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:50:08',
                'updated_at' => '2026-03-18 12:50:08',
            ),
            352 => 
            array (
                'id' => 853,
                'question_id' => 357,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:50:41',
                'updated_at' => '2026-03-18 12:50:41',
            ),
            353 => 
            array (
                'id' => 854,
                'question_id' => 357,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:50:41',
                'updated_at' => '2026-03-18 12:50:41',
            ),
            354 => 
            array (
                'id' => 855,
                'question_id' => 358,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:51:19',
                'updated_at' => '2026-03-18 12:51:19',
            ),
            355 => 
            array (
                'id' => 856,
                'question_id' => 358,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:51:19',
                'updated_at' => '2026-03-18 12:51:19',
            ),
            356 => 
            array (
                'id' => 857,
                'question_id' => 359,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:52:28',
                'updated_at' => '2026-03-18 12:53:18',
            ),
            357 => 
            array (
                'id' => 858,
                'question_id' => 359,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:52:28',
                'updated_at' => '2026-03-18 12:53:18',
            ),
            358 => 
            array (
                'id' => 859,
                'question_id' => 360,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:54:00',
                'updated_at' => '2026-03-18 12:54:00',
            ),
            359 => 
            array (
                'id' => 860,
                'question_id' => 360,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:54:00',
                'updated_at' => '2026-03-18 12:54:00',
            ),
            360 => 
            array (
                'id' => 861,
                'question_id' => 361,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:54:40',
                'updated_at' => '2026-03-18 12:54:40',
            ),
            361 => 
            array (
                'id' => 862,
                'question_id' => 361,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:54:40',
                'updated_at' => '2026-03-18 12:54:40',
            ),
            362 => 
            array (
                'id' => 863,
                'question_id' => 362,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:55:14',
                'updated_at' => '2026-03-18 12:55:14',
            ),
            363 => 
            array (
                'id' => 864,
                'question_id' => 362,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:55:14',
                'updated_at' => '2026-03-18 12:55:14',
            ),
            364 => 
            array (
                'id' => 865,
                'question_id' => 363,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:55:42',
                'updated_at' => '2026-03-18 12:55:42',
            ),
            365 => 
            array (
                'id' => 866,
                'question_id' => 363,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:55:42',
                'updated_at' => '2026-03-18 12:55:42',
            ),
            366 => 
            array (
                'id' => 867,
                'question_id' => 364,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:56:24',
                'updated_at' => '2026-03-18 12:56:24',
            ),
            367 => 
            array (
                'id' => 868,
                'question_id' => 364,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:56:24',
                'updated_at' => '2026-03-18 12:56:24',
            ),
            368 => 
            array (
                'id' => 869,
                'question_id' => 365,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:56:57',
                'updated_at' => '2026-03-18 12:56:57',
            ),
            369 => 
            array (
                'id' => 870,
                'question_id' => 365,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:56:57',
                'updated_at' => '2026-03-18 12:56:57',
            ),
            370 => 
            array (
                'id' => 871,
                'question_id' => 366,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:57:31',
                'updated_at' => '2026-03-18 12:57:31',
            ),
            371 => 
            array (
                'id' => 872,
                'question_id' => 366,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:57:31',
                'updated_at' => '2026-03-18 12:57:31',
            ),
            372 => 
            array (
                'id' => 873,
                'question_id' => 367,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:58:03',
                'updated_at' => '2026-03-18 12:58:03',
            ),
            373 => 
            array (
                'id' => 874,
                'question_id' => 367,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:58:03',
                'updated_at' => '2026-03-18 12:58:03',
            ),
            374 => 
            array (
                'id' => 875,
                'question_id' => 368,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:58:40',
                'updated_at' => '2026-03-18 12:58:40',
            ),
            375 => 
            array (
                'id' => 876,
                'question_id' => 368,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:58:40',
                'updated_at' => '2026-03-18 12:58:40',
            ),
            376 => 
            array (
                'id' => 877,
                'question_id' => 369,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:59:12',
                'updated_at' => '2026-03-18 12:59:12',
            ),
            377 => 
            array (
                'id' => 878,
                'question_id' => 369,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:59:12',
                'updated_at' => '2026-03-18 12:59:12',
            ),
            378 => 
            array (
                'id' => 879,
                'question_id' => 370,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 12:59:47',
                'updated_at' => '2026-03-18 12:59:47',
            ),
            379 => 
            array (
                'id' => 880,
                'question_id' => 370,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 12:59:47',
                'updated_at' => '2026-03-18 12:59:47',
            ),
            380 => 
            array (
                'id' => 881,
                'question_id' => 371,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:00:32',
                'updated_at' => '2026-03-18 13:00:32',
            ),
            381 => 
            array (
                'id' => 882,
                'question_id' => 371,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:00:32',
                'updated_at' => '2026-03-18 13:00:32',
            ),
            382 => 
            array (
                'id' => 883,
                'question_id' => 372,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:01:08',
                'updated_at' => '2026-03-18 13:01:08',
            ),
            383 => 
            array (
                'id' => 884,
                'question_id' => 372,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:01:08',
                'updated_at' => '2026-03-18 13:01:08',
            ),
            384 => 
            array (
                'id' => 885,
                'question_id' => 373,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:01:45',
                'updated_at' => '2026-03-18 13:01:45',
            ),
            385 => 
            array (
                'id' => 886,
                'question_id' => 373,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:01:45',
                'updated_at' => '2026-03-18 13:01:45',
            ),
            386 => 
            array (
                'id' => 887,
                'question_id' => 374,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:02:19',
                'updated_at' => '2026-03-18 13:02:19',
            ),
            387 => 
            array (
                'id' => 888,
                'question_id' => 374,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:02:19',
                'updated_at' => '2026-03-18 13:02:19',
            ),
            388 => 
            array (
                'id' => 889,
                'question_id' => 375,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:02:49',
                'updated_at' => '2026-03-18 13:02:49',
            ),
            389 => 
            array (
                'id' => 890,
                'question_id' => 375,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:02:49',
                'updated_at' => '2026-03-18 13:02:49',
            ),
            390 => 
            array (
                'id' => 891,
                'question_id' => 376,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:03:25',
                'updated_at' => '2026-03-18 13:03:25',
            ),
            391 => 
            array (
                'id' => 892,
                'question_id' => 376,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:03:25',
                'updated_at' => '2026-03-18 13:03:25',
            ),
            392 => 
            array (
                'id' => 893,
                'question_id' => 377,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:04:04',
                'updated_at' => '2026-03-18 13:04:04',
            ),
            393 => 
            array (
                'id' => 894,
                'question_id' => 377,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:04:04',
                'updated_at' => '2026-03-18 13:04:04',
            ),
            394 => 
            array (
                'id' => 895,
                'question_id' => 378,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:05:35',
                'updated_at' => '2026-03-18 13:05:35',
            ),
            395 => 
            array (
                'id' => 896,
                'question_id' => 378,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:05:35',
                'updated_at' => '2026-03-18 13:05:35',
            ),
            396 => 
            array (
                'id' => 897,
                'question_id' => 379,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:06:09',
                'updated_at' => '2026-03-18 13:06:09',
            ),
            397 => 
            array (
                'id' => 898,
                'question_id' => 379,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:06:09',
                'updated_at' => '2026-03-18 13:06:09',
            ),
            398 => 
            array (
                'id' => 899,
                'question_id' => 380,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:06:42',
                'updated_at' => '2026-03-18 13:06:42',
            ),
            399 => 
            array (
                'id' => 900,
                'question_id' => 380,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:06:42',
                'updated_at' => '2026-03-18 13:06:42',
            ),
            400 => 
            array (
                'id' => 901,
                'question_id' => 381,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:07:25',
                'updated_at' => '2026-03-18 13:07:25',
            ),
            401 => 
            array (
                'id' => 902,
                'question_id' => 381,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:07:25',
                'updated_at' => '2026-03-18 13:07:25',
            ),
            402 => 
            array (
                'id' => 903,
                'question_id' => 382,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:08:03',
                'updated_at' => '2026-03-18 13:08:03',
            ),
            403 => 
            array (
                'id' => 904,
                'question_id' => 382,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:08:03',
                'updated_at' => '2026-03-18 13:08:03',
            ),
            404 => 
            array (
                'id' => 905,
                'question_id' => 383,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:08:44',
                'updated_at' => '2026-03-18 13:08:44',
            ),
            405 => 
            array (
                'id' => 906,
                'question_id' => 383,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:08:44',
                'updated_at' => '2026-03-18 13:08:44',
            ),
            406 => 
            array (
                'id' => 907,
                'question_id' => 384,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:09:24',
                'updated_at' => '2026-03-18 13:09:24',
            ),
            407 => 
            array (
                'id' => 908,
                'question_id' => 384,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:09:24',
                'updated_at' => '2026-03-18 13:09:24',
            ),
            408 => 
            array (
                'id' => 909,
                'question_id' => 385,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:10:02',
                'updated_at' => '2026-03-18 13:10:02',
            ),
            409 => 
            array (
                'id' => 910,
                'question_id' => 385,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:10:02',
                'updated_at' => '2026-03-18 13:10:02',
            ),
            410 => 
            array (
                'id' => 911,
                'question_id' => 386,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:11:09',
                'updated_at' => '2026-03-18 13:11:09',
            ),
            411 => 
            array (
                'id' => 912,
                'question_id' => 386,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:11:09',
                'updated_at' => '2026-03-18 13:11:09',
            ),
            412 => 
            array (
                'id' => 913,
                'question_id' => 387,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:11:49',
                'updated_at' => '2026-03-18 13:11:49',
            ),
            413 => 
            array (
                'id' => 914,
                'question_id' => 387,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:11:49',
                'updated_at' => '2026-03-18 13:11:49',
            ),
            414 => 
            array (
                'id' => 915,
                'question_id' => 388,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:12:47',
                'updated_at' => '2026-03-18 13:12:47',
            ),
            415 => 
            array (
                'id' => 916,
                'question_id' => 388,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:12:47',
                'updated_at' => '2026-03-18 13:12:47',
            ),
            416 => 
            array (
                'id' => 917,
                'question_id' => 389,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:13:16',
                'updated_at' => '2026-03-18 13:13:16',
            ),
            417 => 
            array (
                'id' => 918,
                'question_id' => 389,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:13:16',
                'updated_at' => '2026-03-18 13:13:16',
            ),
            418 => 
            array (
                'id' => 919,
                'question_id' => 390,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:13:50',
                'updated_at' => '2026-03-18 13:13:50',
            ),
            419 => 
            array (
                'id' => 920,
                'question_id' => 390,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:13:50',
                'updated_at' => '2026-03-18 13:13:50',
            ),
            420 => 
            array (
                'id' => 921,
                'question_id' => 391,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:14:23',
                'updated_at' => '2026-03-18 13:14:23',
            ),
            421 => 
            array (
                'id' => 922,
                'question_id' => 391,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:14:23',
                'updated_at' => '2026-03-18 13:14:23',
            ),
            422 => 
            array (
                'id' => 923,
                'question_id' => 392,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:15:21',
                'updated_at' => '2026-03-18 13:15:21',
            ),
            423 => 
            array (
                'id' => 924,
                'question_id' => 392,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:15:21',
                'updated_at' => '2026-03-18 13:15:21',
            ),
            424 => 
            array (
                'id' => 925,
                'question_id' => 393,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:15:45',
                'updated_at' => '2026-03-18 13:15:45',
            ),
            425 => 
            array (
                'id' => 926,
                'question_id' => 393,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:15:45',
                'updated_at' => '2026-03-18 13:15:45',
            ),
            426 => 
            array (
                'id' => 927,
                'question_id' => 394,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:16:16',
                'updated_at' => '2026-03-18 13:16:16',
            ),
            427 => 
            array (
                'id' => 928,
                'question_id' => 394,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:16:16',
                'updated_at' => '2026-03-18 13:16:16',
            ),
            428 => 
            array (
                'id' => 929,
                'question_id' => 395,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:16:52',
                'updated_at' => '2026-03-18 13:16:52',
            ),
            429 => 
            array (
                'id' => 930,
                'question_id' => 395,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:16:52',
                'updated_at' => '2026-03-18 13:16:52',
            ),
            430 => 
            array (
                'id' => 931,
                'question_id' => 396,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:17:25',
                'updated_at' => '2026-03-18 13:17:25',
            ),
            431 => 
            array (
                'id' => 932,
                'question_id' => 396,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:17:25',
                'updated_at' => '2026-03-18 13:17:25',
            ),
            432 => 
            array (
                'id' => 933,
                'question_id' => 397,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:18:16',
                'updated_at' => '2026-03-18 13:18:16',
            ),
            433 => 
            array (
                'id' => 934,
                'question_id' => 397,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:18:16',
                'updated_at' => '2026-03-18 13:18:16',
            ),
            434 => 
            array (
                'id' => 935,
                'question_id' => 398,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:19:01',
                'updated_at' => '2026-03-18 13:19:01',
            ),
            435 => 
            array (
                'id' => 936,
                'question_id' => 398,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:19:01',
                'updated_at' => '2026-03-18 13:19:01',
            ),
            436 => 
            array (
                'id' => 937,
                'question_id' => 399,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:19:55',
                'updated_at' => '2026-03-18 13:19:55',
            ),
            437 => 
            array (
                'id' => 938,
                'question_id' => 399,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:19:55',
                'updated_at' => '2026-03-18 13:19:55',
            ),
            438 => 
            array (
                'id' => 939,
                'question_id' => 400,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:20:34',
                'updated_at' => '2026-03-18 13:20:34',
            ),
            439 => 
            array (
                'id' => 940,
                'question_id' => 400,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:20:34',
                'updated_at' => '2026-03-18 13:20:34',
            ),
            440 => 
            array (
                'id' => 941,
                'question_id' => 401,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:21:09',
                'updated_at' => '2026-03-18 13:21:09',
            ),
            441 => 
            array (
                'id' => 942,
                'question_id' => 401,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:21:09',
                'updated_at' => '2026-03-18 13:21:09',
            ),
            442 => 
            array (
                'id' => 943,
                'question_id' => 402,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:29:53',
                'updated_at' => '2026-03-18 13:29:53',
            ),
            443 => 
            array (
                'id' => 944,
                'question_id' => 402,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:29:53',
                'updated_at' => '2026-03-18 13:29:53',
            ),
            444 => 
            array (
                'id' => 945,
                'question_id' => 403,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:30:34',
                'updated_at' => '2026-03-18 13:30:34',
            ),
            445 => 
            array (
                'id' => 946,
                'question_id' => 403,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:30:34',
                'updated_at' => '2026-03-18 13:30:34',
            ),
            446 => 
            array (
                'id' => 947,
                'question_id' => 404,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:31:02',
                'updated_at' => '2026-03-18 13:31:02',
            ),
            447 => 
            array (
                'id' => 948,
                'question_id' => 404,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:31:02',
                'updated_at' => '2026-03-18 13:31:02',
            ),
            448 => 
            array (
                'id' => 949,
                'question_id' => 405,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:31:42',
                'updated_at' => '2026-03-18 13:31:42',
            ),
            449 => 
            array (
                'id' => 950,
                'question_id' => 405,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:31:42',
                'updated_at' => '2026-03-18 13:31:42',
            ),
            450 => 
            array (
                'id' => 951,
                'question_id' => 406,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:33:26',
                'updated_at' => '2026-03-18 13:33:26',
            ),
            451 => 
            array (
                'id' => 952,
                'question_id' => 406,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:33:26',
                'updated_at' => '2026-03-18 13:33:26',
            ),
            452 => 
            array (
                'id' => 953,
                'question_id' => 407,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:34:17',
                'updated_at' => '2026-03-18 13:34:17',
            ),
            453 => 
            array (
                'id' => 954,
                'question_id' => 407,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:34:17',
                'updated_at' => '2026-03-18 13:34:17',
            ),
            454 => 
            array (
                'id' => 955,
                'question_id' => 408,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:35:03',
                'updated_at' => '2026-03-18 13:35:03',
            ),
            455 => 
            array (
                'id' => 956,
                'question_id' => 408,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:35:03',
                'updated_at' => '2026-03-18 13:35:03',
            ),
            456 => 
            array (
                'id' => 957,
                'question_id' => 409,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:35:47',
                'updated_at' => '2026-03-18 13:35:47',
            ),
            457 => 
            array (
                'id' => 958,
                'question_id' => 409,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:35:47',
                'updated_at' => '2026-03-18 13:35:47',
            ),
            458 => 
            array (
                'id' => 959,
                'question_id' => 410,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:36:28',
                'updated_at' => '2026-03-18 13:36:28',
            ),
            459 => 
            array (
                'id' => 960,
                'question_id' => 410,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:36:28',
                'updated_at' => '2026-03-18 13:36:28',
            ),
            460 => 
            array (
                'id' => 961,
                'question_id' => 411,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:37:36',
                'updated_at' => '2026-03-18 13:37:36',
            ),
            461 => 
            array (
                'id' => 962,
                'question_id' => 411,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:37:36',
                'updated_at' => '2026-03-18 13:37:36',
            ),
            462 => 
            array (
                'id' => 963,
                'question_id' => 412,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:38:07',
                'updated_at' => '2026-03-18 13:38:07',
            ),
            463 => 
            array (
                'id' => 964,
                'question_id' => 412,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:38:07',
                'updated_at' => '2026-03-18 13:38:07',
            ),
            464 => 
            array (
                'id' => 965,
                'question_id' => 413,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:38:58',
                'updated_at' => '2026-03-18 13:46:44',
            ),
            465 => 
            array (
                'id' => 966,
                'question_id' => 413,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:38:58',
                'updated_at' => '2026-03-18 13:46:44',
            ),
            466 => 
            array (
                'id' => 967,
                'question_id' => 414,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:39:31',
                'updated_at' => '2026-03-18 13:39:31',
            ),
            467 => 
            array (
                'id' => 968,
                'question_id' => 414,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:39:31',
                'updated_at' => '2026-03-18 13:39:31',
            ),
            468 => 
            array (
                'id' => 969,
                'question_id' => 415,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:40:03',
                'updated_at' => '2026-03-18 13:40:03',
            ),
            469 => 
            array (
                'id' => 970,
                'question_id' => 415,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:40:03',
                'updated_at' => '2026-03-18 13:40:03',
            ),
            470 => 
            array (
                'id' => 971,
                'question_id' => 416,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:40:40',
                'updated_at' => '2026-03-18 13:40:40',
            ),
            471 => 
            array (
                'id' => 972,
                'question_id' => 416,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:40:40',
                'updated_at' => '2026-03-18 13:40:40',
            ),
            472 => 
            array (
                'id' => 973,
                'question_id' => 417,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:41:19',
                'updated_at' => '2026-03-18 13:41:19',
            ),
            473 => 
            array (
                'id' => 974,
                'question_id' => 417,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:41:19',
                'updated_at' => '2026-03-18 13:41:19',
            ),
            474 => 
            array (
                'id' => 975,
                'question_id' => 418,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:44:53',
                'updated_at' => '2026-03-18 13:44:53',
            ),
            475 => 
            array (
                'id' => 976,
                'question_id' => 418,
                'answer_text' => 'E pasakë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:44:53',
                'updated_at' => '2026-03-18 13:44:53',
            ),
            476 => 
            array (
                'id' => 977,
                'question_id' => 419,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:45:30',
                'updated_at' => '2026-03-18 13:45:30',
            ),
            477 => 
            array (
                'id' => 978,
                'question_id' => 419,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:45:30',
                'updated_at' => '2026-03-18 13:45:30',
            ),
            478 => 
            array (
                'id' => 979,
                'question_id' => 420,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-18 13:46:20',
                'updated_at' => '2026-03-18 13:46:20',
            ),
            479 => 
            array (
                'id' => 980,
                'question_id' => 420,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-18 13:46:20',
                'updated_at' => '2026-03-18 13:46:20',
            ),
            480 => 
            array (
                'id' => 981,
                'question_id' => 421,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 18:46:17',
                'updated_at' => '2026-03-19 18:46:17',
            ),
            481 => 
            array (
                'id' => 982,
                'question_id' => 421,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 18:46:17',
                'updated_at' => '2026-03-19 18:46:17',
            ),
            482 => 
            array (
                'id' => 983,
                'question_id' => 422,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 18:46:59',
                'updated_at' => '2026-03-19 18:46:59',
            ),
            483 => 
            array (
                'id' => 984,
                'question_id' => 422,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 18:46:59',
                'updated_at' => '2026-03-19 18:46:59',
            ),
            484 => 
            array (
                'id' => 985,
                'question_id' => 423,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 18:47:40',
                'updated_at' => '2026-03-19 18:47:40',
            ),
            485 => 
            array (
                'id' => 986,
                'question_id' => 423,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 18:47:40',
                'updated_at' => '2026-03-19 18:47:40',
            ),
            486 => 
            array (
                'id' => 987,
                'question_id' => 424,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 18:48:29',
                'updated_at' => '2026-03-19 18:48:29',
            ),
            487 => 
            array (
                'id' => 988,
                'question_id' => 424,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 18:48:29',
                'updated_at' => '2026-03-19 18:48:29',
            ),
            488 => 
            array (
                'id' => 989,
                'question_id' => 425,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 18:49:18',
                'updated_at' => '2026-03-19 18:49:18',
            ),
            489 => 
            array (
                'id' => 990,
                'question_id' => 425,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 18:49:18',
                'updated_at' => '2026-03-19 18:49:18',
            ),
            490 => 
            array (
                'id' => 991,
                'question_id' => 426,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 18:50:20',
                'updated_at' => '2026-03-19 18:50:20',
            ),
            491 => 
            array (
                'id' => 992,
                'question_id' => 426,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 18:50:20',
                'updated_at' => '2026-03-19 18:50:20',
            ),
            492 => 
            array (
                'id' => 993,
                'question_id' => 427,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 18:51:28',
                'updated_at' => '2026-03-19 18:52:22',
            ),
            493 => 
            array (
                'id' => 994,
                'question_id' => 427,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 18:51:28',
                'updated_at' => '2026-03-19 18:52:22',
            ),
            494 => 
            array (
                'id' => 995,
                'question_id' => 428,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 18:53:09',
                'updated_at' => '2026-03-19 18:53:09',
            ),
            495 => 
            array (
                'id' => 996,
                'question_id' => 428,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 18:53:09',
                'updated_at' => '2026-03-19 18:53:09',
            ),
            496 => 
            array (
                'id' => 997,
                'question_id' => 429,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 18:56:35',
                'updated_at' => '2026-03-19 18:56:35',
            ),
            497 => 
            array (
                'id' => 998,
                'question_id' => 429,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 18:56:35',
                'updated_at' => '2026-03-19 18:56:35',
            ),
            498 => 
            array (
                'id' => 999,
                'question_id' => 430,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 18:57:12',
                'updated_at' => '2026-03-19 18:57:12',
            ),
            499 => 
            array (
                'id' => 1000,
                'question_id' => 430,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 18:57:12',
                'updated_at' => '2026-03-19 18:57:12',
            ),
        ));
        \DB::table('answers')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'question_id' => 431,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 18:57:46',
                'updated_at' => '2026-03-19 18:57:46',
            ),
            1 => 
            array (
                'id' => 1002,
                'question_id' => 431,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 18:57:46',
                'updated_at' => '2026-03-19 18:57:46',
            ),
            2 => 
            array (
                'id' => 1003,
                'question_id' => 432,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 18:58:34',
                'updated_at' => '2026-03-19 18:58:34',
            ),
            3 => 
            array (
                'id' => 1004,
                'question_id' => 432,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 18:58:34',
                'updated_at' => '2026-03-19 18:58:34',
            ),
            4 => 
            array (
                'id' => 1005,
                'question_id' => 433,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 18:59:08',
                'updated_at' => '2026-03-19 18:59:08',
            ),
            5 => 
            array (
                'id' => 1006,
                'question_id' => 433,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 18:59:08',
                'updated_at' => '2026-03-19 18:59:08',
            ),
            6 => 
            array (
                'id' => 1007,
                'question_id' => 434,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 18:59:46',
                'updated_at' => '2026-03-19 18:59:46',
            ),
            7 => 
            array (
                'id' => 1008,
                'question_id' => 434,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 18:59:46',
                'updated_at' => '2026-03-19 18:59:46',
            ),
            8 => 
            array (
                'id' => 1009,
                'question_id' => 435,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:00:44',
                'updated_at' => '2026-03-19 19:00:44',
            ),
            9 => 
            array (
                'id' => 1010,
                'question_id' => 435,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:00:44',
                'updated_at' => '2026-03-19 19:00:44',
            ),
            10 => 
            array (
                'id' => 1011,
                'question_id' => 436,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:02:54',
                'updated_at' => '2026-03-19 19:02:54',
            ),
            11 => 
            array (
                'id' => 1012,
                'question_id' => 436,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:02:54',
                'updated_at' => '2026-03-19 19:02:54',
            ),
            12 => 
            array (
                'id' => 1013,
                'question_id' => 437,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:03:31',
                'updated_at' => '2026-03-19 19:03:31',
            ),
            13 => 
            array (
                'id' => 1014,
                'question_id' => 437,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:03:31',
                'updated_at' => '2026-03-19 19:03:31',
            ),
            14 => 
            array (
                'id' => 1015,
                'question_id' => 438,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:04:19',
                'updated_at' => '2026-03-19 19:04:19',
            ),
            15 => 
            array (
                'id' => 1016,
                'question_id' => 438,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:04:19',
                'updated_at' => '2026-03-19 19:04:19',
            ),
            16 => 
            array (
                'id' => 1017,
                'question_id' => 439,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:05:21',
                'updated_at' => '2026-03-19 19:05:21',
            ),
            17 => 
            array (
                'id' => 1018,
                'question_id' => 439,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:05:21',
                'updated_at' => '2026-03-19 19:05:21',
            ),
            18 => 
            array (
                'id' => 1019,
                'question_id' => 440,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:06:02',
                'updated_at' => '2026-03-19 19:06:02',
            ),
            19 => 
            array (
                'id' => 1020,
                'question_id' => 440,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:06:02',
                'updated_at' => '2026-03-19 19:06:02',
            ),
            20 => 
            array (
                'id' => 1021,
                'question_id' => 441,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:06:51',
                'updated_at' => '2026-03-19 19:06:51',
            ),
            21 => 
            array (
                'id' => 1022,
                'question_id' => 441,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:06:51',
                'updated_at' => '2026-03-19 19:06:51',
            ),
            22 => 
            array (
                'id' => 1023,
                'question_id' => 442,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:08:31',
                'updated_at' => '2026-03-19 19:08:31',
            ),
            23 => 
            array (
                'id' => 1024,
                'question_id' => 442,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:08:31',
                'updated_at' => '2026-03-19 19:08:31',
            ),
            24 => 
            array (
                'id' => 1025,
                'question_id' => 443,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:08:59',
                'updated_at' => '2026-03-19 19:08:59',
            ),
            25 => 
            array (
                'id' => 1026,
                'question_id' => 443,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:08:59',
                'updated_at' => '2026-03-19 19:08:59',
            ),
            26 => 
            array (
                'id' => 1027,
                'question_id' => 444,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:09:31',
                'updated_at' => '2026-03-19 19:09:31',
            ),
            27 => 
            array (
                'id' => 1028,
                'question_id' => 444,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:09:31',
                'updated_at' => '2026-03-19 19:09:31',
            ),
            28 => 
            array (
                'id' => 1029,
                'question_id' => 445,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:10:13',
                'updated_at' => '2026-03-19 19:10:13',
            ),
            29 => 
            array (
                'id' => 1030,
                'question_id' => 445,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:10:13',
                'updated_at' => '2026-03-19 19:10:13',
            ),
            30 => 
            array (
                'id' => 1031,
                'question_id' => 446,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:10:58',
                'updated_at' => '2026-03-19 19:10:58',
            ),
            31 => 
            array (
                'id' => 1032,
                'question_id' => 446,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:10:58',
                'updated_at' => '2026-03-19 19:10:58',
            ),
            32 => 
            array (
                'id' => 1033,
                'question_id' => 447,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:12:01',
                'updated_at' => '2026-03-19 19:12:01',
            ),
            33 => 
            array (
                'id' => 1034,
                'question_id' => 447,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:12:01',
                'updated_at' => '2026-03-19 19:12:01',
            ),
            34 => 
            array (
                'id' => 1035,
                'question_id' => 448,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:12:43',
                'updated_at' => '2026-03-19 19:12:43',
            ),
            35 => 
            array (
                'id' => 1036,
                'question_id' => 448,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:12:43',
                'updated_at' => '2026-03-19 19:12:43',
            ),
            36 => 
            array (
                'id' => 1037,
                'question_id' => 449,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:13:42',
                'updated_at' => '2026-03-19 19:13:42',
            ),
            37 => 
            array (
                'id' => 1038,
                'question_id' => 449,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:13:42',
                'updated_at' => '2026-03-19 19:13:42',
            ),
            38 => 
            array (
                'id' => 1039,
                'question_id' => 450,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:14:36',
                'updated_at' => '2026-03-19 19:14:36',
            ),
            39 => 
            array (
                'id' => 1040,
                'question_id' => 450,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:14:36',
                'updated_at' => '2026-03-19 19:14:36',
            ),
            40 => 
            array (
                'id' => 1041,
                'question_id' => 451,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:15:47',
                'updated_at' => '2026-03-19 19:15:47',
            ),
            41 => 
            array (
                'id' => 1042,
                'question_id' => 451,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:15:47',
                'updated_at' => '2026-03-19 19:15:47',
            ),
            42 => 
            array (
                'id' => 1043,
                'question_id' => 452,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:16:28',
                'updated_at' => '2026-03-19 19:16:28',
            ),
            43 => 
            array (
                'id' => 1044,
                'question_id' => 452,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:16:28',
                'updated_at' => '2026-03-19 19:16:28',
            ),
            44 => 
            array (
                'id' => 1045,
                'question_id' => 453,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:17:15',
                'updated_at' => '2026-03-19 19:17:15',
            ),
            45 => 
            array (
                'id' => 1046,
                'question_id' => 453,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:17:15',
                'updated_at' => '2026-03-19 19:17:15',
            ),
            46 => 
            array (
                'id' => 1047,
                'question_id' => 454,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:17:47',
                'updated_at' => '2026-03-19 19:17:47',
            ),
            47 => 
            array (
                'id' => 1048,
                'question_id' => 454,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:17:47',
                'updated_at' => '2026-03-19 19:17:47',
            ),
            48 => 
            array (
                'id' => 1049,
                'question_id' => 455,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:18:22',
                'updated_at' => '2026-03-19 19:18:22',
            ),
            49 => 
            array (
                'id' => 1050,
                'question_id' => 455,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:18:22',
                'updated_at' => '2026-03-19 19:18:22',
            ),
            50 => 
            array (
                'id' => 1051,
                'question_id' => 456,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:19:09',
                'updated_at' => '2026-03-19 19:19:09',
            ),
            51 => 
            array (
                'id' => 1052,
                'question_id' => 456,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:19:09',
                'updated_at' => '2026-03-19 19:19:09',
            ),
            52 => 
            array (
                'id' => 1053,
                'question_id' => 457,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:20:02',
                'updated_at' => '2026-03-19 19:20:02',
            ),
            53 => 
            array (
                'id' => 1054,
                'question_id' => 457,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:20:02',
                'updated_at' => '2026-03-19 19:20:02',
            ),
            54 => 
            array (
                'id' => 1055,
                'question_id' => 458,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:20:33',
                'updated_at' => '2026-03-19 19:20:33',
            ),
            55 => 
            array (
                'id' => 1056,
                'question_id' => 458,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:20:33',
                'updated_at' => '2026-03-19 19:20:33',
            ),
            56 => 
            array (
                'id' => 1057,
                'question_id' => 459,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:21:05',
                'updated_at' => '2026-03-19 19:21:05',
            ),
            57 => 
            array (
                'id' => 1058,
                'question_id' => 459,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:21:05',
                'updated_at' => '2026-03-19 19:21:05',
            ),
            58 => 
            array (
                'id' => 1059,
                'question_id' => 460,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:21:33',
                'updated_at' => '2026-03-19 19:21:33',
            ),
            59 => 
            array (
                'id' => 1060,
                'question_id' => 460,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:21:33',
                'updated_at' => '2026-03-19 19:21:33',
            ),
            60 => 
            array (
                'id' => 1061,
                'question_id' => 461,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:22:16',
                'updated_at' => '2026-03-19 19:22:16',
            ),
            61 => 
            array (
                'id' => 1062,
                'question_id' => 461,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:22:16',
                'updated_at' => '2026-03-19 19:22:16',
            ),
            62 => 
            array (
                'id' => 1063,
                'question_id' => 462,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:22:50',
                'updated_at' => '2026-03-19 19:22:50',
            ),
            63 => 
            array (
                'id' => 1064,
                'question_id' => 462,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:22:50',
                'updated_at' => '2026-03-19 19:22:50',
            ),
            64 => 
            array (
                'id' => 1065,
                'question_id' => 463,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:23:22',
                'updated_at' => '2026-03-19 19:23:22',
            ),
            65 => 
            array (
                'id' => 1066,
                'question_id' => 463,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:23:22',
                'updated_at' => '2026-03-19 19:23:22',
            ),
            66 => 
            array (
                'id' => 1067,
                'question_id' => 464,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:23:55',
                'updated_at' => '2026-03-19 19:23:55',
            ),
            67 => 
            array (
                'id' => 1068,
                'question_id' => 464,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:23:55',
                'updated_at' => '2026-03-19 19:23:55',
            ),
            68 => 
            array (
                'id' => 1069,
                'question_id' => 465,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:26:55',
                'updated_at' => '2026-03-19 19:26:55',
            ),
            69 => 
            array (
                'id' => 1070,
                'question_id' => 465,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:26:55',
                'updated_at' => '2026-03-19 19:26:55',
            ),
            70 => 
            array (
                'id' => 1071,
                'question_id' => 466,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:27:36',
                'updated_at' => '2026-03-19 19:27:36',
            ),
            71 => 
            array (
                'id' => 1072,
                'question_id' => 466,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:27:36',
                'updated_at' => '2026-03-19 19:27:36',
            ),
            72 => 
            array (
                'id' => 1073,
                'question_id' => 467,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:28:12',
                'updated_at' => '2026-03-19 19:28:12',
            ),
            73 => 
            array (
                'id' => 1074,
                'question_id' => 467,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:28:12',
                'updated_at' => '2026-03-19 19:28:12',
            ),
            74 => 
            array (
                'id' => 1075,
                'question_id' => 468,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:28:37',
                'updated_at' => '2026-03-19 19:28:37',
            ),
            75 => 
            array (
                'id' => 1076,
                'question_id' => 468,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:28:37',
                'updated_at' => '2026-03-19 19:28:37',
            ),
            76 => 
            array (
                'id' => 1077,
                'question_id' => 469,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:29:07',
                'updated_at' => '2026-03-19 19:29:07',
            ),
            77 => 
            array (
                'id' => 1078,
                'question_id' => 469,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:29:07',
                'updated_at' => '2026-03-19 19:29:07',
            ),
            78 => 
            array (
                'id' => 1079,
                'question_id' => 470,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:29:41',
                'updated_at' => '2026-03-19 19:29:41',
            ),
            79 => 
            array (
                'id' => 1080,
                'question_id' => 470,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:29:41',
                'updated_at' => '2026-03-19 19:29:41',
            ),
            80 => 
            array (
                'id' => 1081,
                'question_id' => 471,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:30:15',
                'updated_at' => '2026-03-19 19:30:15',
            ),
            81 => 
            array (
                'id' => 1082,
                'question_id' => 471,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:30:15',
                'updated_at' => '2026-03-19 19:30:15',
            ),
            82 => 
            array (
                'id' => 1083,
                'question_id' => 472,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:31:18',
                'updated_at' => '2026-03-19 19:31:18',
            ),
            83 => 
            array (
                'id' => 1084,
                'question_id' => 472,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:31:18',
                'updated_at' => '2026-03-19 19:31:18',
            ),
            84 => 
            array (
                'id' => 1085,
                'question_id' => 473,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:31:51',
                'updated_at' => '2026-03-19 19:31:51',
            ),
            85 => 
            array (
                'id' => 1086,
                'question_id' => 473,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:31:51',
                'updated_at' => '2026-03-19 19:31:51',
            ),
            86 => 
            array (
                'id' => 1087,
                'question_id' => 474,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:32:29',
                'updated_at' => '2026-03-19 19:32:29',
            ),
            87 => 
            array (
                'id' => 1088,
                'question_id' => 474,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:32:29',
                'updated_at' => '2026-03-19 19:32:29',
            ),
            88 => 
            array (
                'id' => 1089,
                'question_id' => 475,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:33:14',
                'updated_at' => '2026-03-19 19:33:14',
            ),
            89 => 
            array (
                'id' => 1090,
                'question_id' => 475,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:33:14',
                'updated_at' => '2026-03-19 19:33:14',
            ),
            90 => 
            array (
                'id' => 1091,
                'question_id' => 476,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:33:45',
                'updated_at' => '2026-03-19 19:33:45',
            ),
            91 => 
            array (
                'id' => 1092,
                'question_id' => 476,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:33:45',
                'updated_at' => '2026-03-19 19:33:45',
            ),
            92 => 
            array (
                'id' => 1093,
                'question_id' => 477,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:34:13',
                'updated_at' => '2026-03-19 19:34:13',
            ),
            93 => 
            array (
                'id' => 1094,
                'question_id' => 477,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:34:13',
                'updated_at' => '2026-03-19 19:34:13',
            ),
            94 => 
            array (
                'id' => 1095,
                'question_id' => 478,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:37:16',
                'updated_at' => '2026-03-19 19:37:16',
            ),
            95 => 
            array (
                'id' => 1096,
                'question_id' => 478,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:37:16',
                'updated_at' => '2026-03-19 19:37:16',
            ),
            96 => 
            array (
                'id' => 1097,
                'question_id' => 479,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:37:38',
                'updated_at' => '2026-03-19 19:37:38',
            ),
            97 => 
            array (
                'id' => 1098,
                'question_id' => 479,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:37:38',
                'updated_at' => '2026-03-19 19:37:38',
            ),
            98 => 
            array (
                'id' => 1099,
                'question_id' => 480,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:38:05',
                'updated_at' => '2026-03-19 19:38:05',
            ),
            99 => 
            array (
                'id' => 1100,
                'question_id' => 480,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:38:05',
                'updated_at' => '2026-03-19 19:38:05',
            ),
            100 => 
            array (
                'id' => 1101,
                'question_id' => 481,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:38:35',
                'updated_at' => '2026-03-19 19:38:35',
            ),
            101 => 
            array (
                'id' => 1102,
                'question_id' => 481,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:38:35',
                'updated_at' => '2026-03-19 19:38:35',
            ),
            102 => 
            array (
                'id' => 1103,
                'question_id' => 482,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:38:54',
                'updated_at' => '2026-03-19 19:38:54',
            ),
            103 => 
            array (
                'id' => 1104,
                'question_id' => 482,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:38:54',
                'updated_at' => '2026-03-19 19:38:54',
            ),
            104 => 
            array (
                'id' => 1105,
                'question_id' => 483,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:39:20',
                'updated_at' => '2026-03-19 19:39:20',
            ),
            105 => 
            array (
                'id' => 1106,
                'question_id' => 483,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:39:20',
                'updated_at' => '2026-03-19 19:39:20',
            ),
            106 => 
            array (
                'id' => 1107,
                'question_id' => 484,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:39:47',
                'updated_at' => '2026-03-19 19:39:47',
            ),
            107 => 
            array (
                'id' => 1108,
                'question_id' => 484,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:39:47',
                'updated_at' => '2026-03-19 19:39:47',
            ),
            108 => 
            array (
                'id' => 1109,
                'question_id' => 485,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:40:12',
                'updated_at' => '2026-03-19 19:40:12',
            ),
            109 => 
            array (
                'id' => 1110,
                'question_id' => 485,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:40:12',
                'updated_at' => '2026-03-19 19:40:12',
            ),
            110 => 
            array (
                'id' => 1111,
                'question_id' => 486,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:40:32',
                'updated_at' => '2026-03-19 19:40:32',
            ),
            111 => 
            array (
                'id' => 1112,
                'question_id' => 486,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:40:32',
                'updated_at' => '2026-03-19 19:40:32',
            ),
            112 => 
            array (
                'id' => 1113,
                'question_id' => 487,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:40:57',
                'updated_at' => '2026-03-19 19:40:57',
            ),
            113 => 
            array (
                'id' => 1114,
                'question_id' => 487,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:40:57',
                'updated_at' => '2026-03-19 19:40:57',
            ),
            114 => 
            array (
                'id' => 1115,
                'question_id' => 488,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:41:25',
                'updated_at' => '2026-03-19 19:41:25',
            ),
            115 => 
            array (
                'id' => 1116,
                'question_id' => 488,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:41:25',
                'updated_at' => '2026-03-19 19:41:25',
            ),
            116 => 
            array (
                'id' => 1117,
                'question_id' => 489,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:42:09',
                'updated_at' => '2026-03-19 19:42:09',
            ),
            117 => 
            array (
                'id' => 1118,
                'question_id' => 489,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:42:09',
                'updated_at' => '2026-03-19 19:42:09',
            ),
            118 => 
            array (
                'id' => 1119,
                'question_id' => 490,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:42:34',
                'updated_at' => '2026-03-19 19:42:34',
            ),
            119 => 
            array (
                'id' => 1120,
                'question_id' => 490,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:42:34',
                'updated_at' => '2026-03-19 19:42:34',
            ),
            120 => 
            array (
                'id' => 1121,
                'question_id' => 491,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:42:59',
                'updated_at' => '2026-03-19 19:42:59',
            ),
            121 => 
            array (
                'id' => 1122,
                'question_id' => 491,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:42:59',
                'updated_at' => '2026-03-19 19:42:59',
            ),
            122 => 
            array (
                'id' => 1123,
                'question_id' => 492,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:43:36',
                'updated_at' => '2026-03-19 19:43:36',
            ),
            123 => 
            array (
                'id' => 1124,
                'question_id' => 492,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:43:36',
                'updated_at' => '2026-03-19 19:43:36',
            ),
            124 => 
            array (
                'id' => 1125,
                'question_id' => 493,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:44:02',
                'updated_at' => '2026-03-19 19:44:02',
            ),
            125 => 
            array (
                'id' => 1126,
                'question_id' => 493,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:44:02',
                'updated_at' => '2026-03-19 19:44:02',
            ),
            126 => 
            array (
                'id' => 1127,
                'question_id' => 494,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:45:03',
                'updated_at' => '2026-03-19 19:45:03',
            ),
            127 => 
            array (
                'id' => 1128,
                'question_id' => 494,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:45:03',
                'updated_at' => '2026-03-19 19:45:03',
            ),
            128 => 
            array (
                'id' => 1129,
                'question_id' => 495,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:45:41',
                'updated_at' => '2026-03-19 19:45:41',
            ),
            129 => 
            array (
                'id' => 1130,
                'question_id' => 495,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:45:41',
                'updated_at' => '2026-03-19 19:45:41',
            ),
            130 => 
            array (
                'id' => 1131,
                'question_id' => 496,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:46:01',
                'updated_at' => '2026-03-19 19:46:01',
            ),
            131 => 
            array (
                'id' => 1132,
                'question_id' => 496,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:46:01',
                'updated_at' => '2026-03-19 19:46:01',
            ),
            132 => 
            array (
                'id' => 1133,
                'question_id' => 497,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:46:23',
                'updated_at' => '2026-03-19 19:46:23',
            ),
            133 => 
            array (
                'id' => 1134,
                'question_id' => 497,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:46:23',
                'updated_at' => '2026-03-19 19:46:23',
            ),
            134 => 
            array (
                'id' => 1135,
                'question_id' => 498,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:46:51',
                'updated_at' => '2026-03-19 19:46:51',
            ),
            135 => 
            array (
                'id' => 1136,
                'question_id' => 498,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:46:51',
                'updated_at' => '2026-03-19 19:46:51',
            ),
            136 => 
            array (
                'id' => 1137,
                'question_id' => 499,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:57:16',
                'updated_at' => '2026-03-19 19:57:16',
            ),
            137 => 
            array (
                'id' => 1138,
                'question_id' => 499,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:57:16',
                'updated_at' => '2026-03-19 19:57:16',
            ),
            138 => 
            array (
                'id' => 1139,
                'question_id' => 500,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:57:50',
                'updated_at' => '2026-03-19 19:57:50',
            ),
            139 => 
            array (
                'id' => 1140,
                'question_id' => 500,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:57:50',
                'updated_at' => '2026-03-19 19:57:50',
            ),
            140 => 
            array (
                'id' => 1141,
                'question_id' => 501,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:58:23',
                'updated_at' => '2026-03-19 19:58:23',
            ),
            141 => 
            array (
                'id' => 1142,
                'question_id' => 501,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:58:23',
                'updated_at' => '2026-03-19 19:58:23',
            ),
            142 => 
            array (
                'id' => 1143,
                'question_id' => 502,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:58:57',
                'updated_at' => '2026-03-19 19:58:57',
            ),
            143 => 
            array (
                'id' => 1144,
                'question_id' => 502,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:58:57',
                'updated_at' => '2026-03-19 19:58:57',
            ),
            144 => 
            array (
                'id' => 1145,
                'question_id' => 503,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 19:59:32',
                'updated_at' => '2026-03-19 19:59:32',
            ),
            145 => 
            array (
                'id' => 1146,
                'question_id' => 503,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 19:59:32',
                'updated_at' => '2026-03-19 19:59:32',
            ),
            146 => 
            array (
                'id' => 1147,
                'question_id' => 504,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:00:09',
                'updated_at' => '2026-03-19 20:00:09',
            ),
            147 => 
            array (
                'id' => 1148,
                'question_id' => 504,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:00:09',
                'updated_at' => '2026-03-19 20:00:09',
            ),
            148 => 
            array (
                'id' => 1149,
                'question_id' => 505,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:00:54',
                'updated_at' => '2026-03-19 20:00:54',
            ),
            149 => 
            array (
                'id' => 1150,
                'question_id' => 505,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:00:54',
                'updated_at' => '2026-03-19 20:00:54',
            ),
            150 => 
            array (
                'id' => 1151,
                'question_id' => 506,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:01:37',
                'updated_at' => '2026-03-19 20:01:37',
            ),
            151 => 
            array (
                'id' => 1152,
                'question_id' => 506,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:01:37',
                'updated_at' => '2026-03-19 20:01:37',
            ),
            152 => 
            array (
                'id' => 1153,
                'question_id' => 507,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:02:11',
                'updated_at' => '2026-03-19 20:02:11',
            ),
            153 => 
            array (
                'id' => 1154,
                'question_id' => 507,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:02:11',
                'updated_at' => '2026-03-19 20:02:11',
            ),
            154 => 
            array (
                'id' => 1155,
                'question_id' => 508,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:02:43',
                'updated_at' => '2026-03-19 20:02:43',
            ),
            155 => 
            array (
                'id' => 1156,
                'question_id' => 508,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:02:43',
                'updated_at' => '2026-03-19 20:02:43',
            ),
            156 => 
            array (
                'id' => 1157,
                'question_id' => 509,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:03:20',
                'updated_at' => '2026-03-19 20:03:20',
            ),
            157 => 
            array (
                'id' => 1158,
                'question_id' => 509,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:03:20',
                'updated_at' => '2026-03-19 20:03:20',
            ),
            158 => 
            array (
                'id' => 1159,
                'question_id' => 510,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:04:20',
                'updated_at' => '2026-03-19 20:04:20',
            ),
            159 => 
            array (
                'id' => 1160,
                'question_id' => 510,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:04:20',
                'updated_at' => '2026-03-19 20:04:20',
            ),
            160 => 
            array (
                'id' => 1161,
                'question_id' => 511,
                'answer_text' => 'E saktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:04:57',
                'updated_at' => '2026-03-19 20:04:57',
            ),
            161 => 
            array (
                'id' => 1162,
                'question_id' => 511,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:04:57',
                'updated_at' => '2026-03-19 20:04:57',
            ),
            162 => 
            array (
                'id' => 1163,
                'question_id' => 512,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:05:29',
                'updated_at' => '2026-03-19 20:05:29',
            ),
            163 => 
            array (
                'id' => 1164,
                'question_id' => 512,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:05:29',
                'updated_at' => '2026-03-19 20:05:29',
            ),
            164 => 
            array (
                'id' => 1165,
                'question_id' => 513,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:06:25',
                'updated_at' => '2026-03-19 20:06:25',
            ),
            165 => 
            array (
                'id' => 1166,
                'question_id' => 513,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:06:25',
                'updated_at' => '2026-03-19 20:06:25',
            ),
            166 => 
            array (
                'id' => 1167,
                'question_id' => 514,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:06:58',
                'updated_at' => '2026-03-19 20:06:58',
            ),
            167 => 
            array (
                'id' => 1168,
                'question_id' => 514,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:06:58',
                'updated_at' => '2026-03-19 20:06:58',
            ),
            168 => 
            array (
                'id' => 1169,
                'question_id' => 515,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:07:52',
                'updated_at' => '2026-03-19 20:07:52',
            ),
            169 => 
            array (
                'id' => 1170,
                'question_id' => 515,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:07:52',
                'updated_at' => '2026-03-19 20:07:52',
            ),
            170 => 
            array (
                'id' => 1171,
                'question_id' => 516,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:08:25',
                'updated_at' => '2026-03-19 20:08:25',
            ),
            171 => 
            array (
                'id' => 1172,
                'question_id' => 516,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:08:25',
                'updated_at' => '2026-03-19 20:08:25',
            ),
            172 => 
            array (
                'id' => 1173,
                'question_id' => 517,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:08:58',
                'updated_at' => '2026-03-19 20:15:02',
            ),
            173 => 
            array (
                'id' => 1174,
                'question_id' => 517,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:08:58',
                'updated_at' => '2026-03-19 20:15:02',
            ),
            174 => 
            array (
                'id' => 1175,
                'question_id' => 518,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:09:46',
                'updated_at' => '2026-03-19 20:09:46',
            ),
            175 => 
            array (
                'id' => 1176,
                'question_id' => 518,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:09:46',
                'updated_at' => '2026-03-19 20:09:46',
            ),
            176 => 
            array (
                'id' => 1177,
                'question_id' => 519,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:11:54',
                'updated_at' => '2026-03-19 20:11:54',
            ),
            177 => 
            array (
                'id' => 1178,
                'question_id' => 519,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:11:54',
                'updated_at' => '2026-03-19 20:11:54',
            ),
            178 => 
            array (
                'id' => 1179,
                'question_id' => 520,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:13:27',
                'updated_at' => '2026-03-19 20:13:27',
            ),
            179 => 
            array (
                'id' => 1180,
                'question_id' => 520,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:13:27',
                'updated_at' => '2026-03-19 20:13:27',
            ),
            180 => 
            array (
                'id' => 1181,
                'question_id' => 521,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:14:20',
                'updated_at' => '2026-03-19 20:14:40',
            ),
            181 => 
            array (
                'id' => 1182,
                'question_id' => 521,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:14:20',
                'updated_at' => '2026-03-19 20:14:40',
            ),
            182 => 
            array (
                'id' => 1183,
                'question_id' => 522,
                'answer_text' => 'E saktë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:15:35',
                'updated_at' => '2026-03-19 20:16:11',
            ),
            183 => 
            array (
                'id' => 1184,
                'question_id' => 522,
                'answer_text' => 'E pasaktë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:15:35',
                'updated_at' => '2026-03-19 20:16:11',
            ),
            184 => 
            array (
                'id' => 1185,
                'question_id' => 523,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:16:41',
                'updated_at' => '2026-03-19 20:16:41',
            ),
            185 => 
            array (
                'id' => 1186,
                'question_id' => 523,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:16:41',
                'updated_at' => '2026-03-19 20:16:41',
            ),
            186 => 
            array (
                'id' => 1187,
                'question_id' => 524,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:17:19',
                'updated_at' => '2026-03-19 20:17:19',
            ),
            187 => 
            array (
                'id' => 1188,
                'question_id' => 524,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:17:19',
                'updated_at' => '2026-03-19 20:17:19',
            ),
            188 => 
            array (
                'id' => 1189,
                'question_id' => 525,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:17:59',
                'updated_at' => '2026-03-19 20:17:59',
            ),
            189 => 
            array (
                'id' => 1190,
                'question_id' => 525,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:17:59',
                'updated_at' => '2026-03-19 20:17:59',
            ),
            190 => 
            array (
                'id' => 1191,
                'question_id' => 526,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:18:43',
                'updated_at' => '2026-03-19 20:18:43',
            ),
            191 => 
            array (
                'id' => 1192,
                'question_id' => 526,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:18:43',
                'updated_at' => '2026-03-19 20:18:43',
            ),
            192 => 
            array (
                'id' => 1193,
                'question_id' => 527,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:20:16',
                'updated_at' => '2026-03-19 20:20:16',
            ),
            193 => 
            array (
                'id' => 1194,
                'question_id' => 527,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:20:16',
                'updated_at' => '2026-03-19 20:20:16',
            ),
            194 => 
            array (
                'id' => 1195,
                'question_id' => 528,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:20:49',
                'updated_at' => '2026-03-19 20:20:49',
            ),
            195 => 
            array (
                'id' => 1196,
                'question_id' => 528,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:20:49',
                'updated_at' => '2026-03-19 20:20:49',
            ),
            196 => 
            array (
                'id' => 1197,
                'question_id' => 529,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:21:21',
                'updated_at' => '2026-03-19 20:21:21',
            ),
            197 => 
            array (
                'id' => 1198,
                'question_id' => 529,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:21:21',
                'updated_at' => '2026-03-19 20:21:21',
            ),
            198 => 
            array (
                'id' => 1199,
                'question_id' => 530,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:22:25',
                'updated_at' => '2026-03-19 20:22:25',
            ),
            199 => 
            array (
                'id' => 1200,
                'question_id' => 530,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:22:25',
                'updated_at' => '2026-03-19 20:22:25',
            ),
            200 => 
            array (
                'id' => 1201,
                'question_id' => 531,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:23:02',
                'updated_at' => '2026-03-19 20:23:02',
            ),
            201 => 
            array (
                'id' => 1202,
                'question_id' => 531,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:23:02',
                'updated_at' => '2026-03-19 20:23:02',
            ),
            202 => 
            array (
                'id' => 1203,
                'question_id' => 532,
                'answer_text' => 'E saktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:23:41',
                'updated_at' => '2026-03-19 20:23:41',
            ),
            203 => 
            array (
                'id' => 1204,
                'question_id' => 532,
                'answer_text' => 'E pasaktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:23:41',
                'updated_at' => '2026-03-19 20:23:41',
            ),
            204 => 
            array (
                'id' => 1205,
                'question_id' => 533,
                'answer_text' => 'E saktë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:24:08',
                'updated_at' => '2026-03-19 20:24:08',
            ),
            205 => 
            array (
                'id' => 1206,
                'question_id' => 533,
                'answer_text' => 'E pasaktë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:24:08',
                'updated_at' => '2026-03-19 20:24:08',
            ),
            206 => 
            array (
                'id' => 1207,
                'question_id' => 534,
                'answer_text' => 'Kultura në trafikun rrugor',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:27:31',
                'updated_at' => '2026-03-19 20:27:31',
            ),
            207 => 
            array (
                'id' => 1208,
                'question_id' => 534,
                'answer_text' => 'Pirja e cigares gjatë ngasjes',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:27:31',
                'updated_at' => '2026-03-19 20:27:31',
            ),
            208 => 
            array (
                'id' => 1209,
                'question_id' => 534,
                'answer_text' => 'Ngasja me shpejtësi maksimale që zhvillon automjeti',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:27:31',
                'updated_at' => '2026-03-19 20:27:31',
            ),
            209 => 
            array (
                'id' => 1210,
                'question_id' => 535,
                'answer_text' => 'Shoferi duhet të jetë pronar i automjetit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:28:39',
                'updated_at' => '2026-03-19 20:28:39',
            ),
            210 => 
            array (
                'id' => 1211,
                'question_id' => 535,
                'answer_text' => 'Agresiviteti i pjesëmarrësve në trafik',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:28:39',
                'updated_at' => '2026-03-19 20:28:39',
            ),
            211 => 
            array (
                'id' => 1212,
                'question_id' => 535,
                'answer_text' => 'Toleranca ndaj gabimeve të të tjerëve',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:28:39',
                'updated_at' => '2026-03-19 20:28:39',
            ),
            212 => 
            array (
                'id' => 1213,
                'question_id' => 536,
                'answer_text' => 'Respektimi i ndërsjelltë në trafik',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:29:10',
                'updated_at' => '2026-03-19 20:29:10',
            ),
            213 => 
            array (
                'id' => 1214,
                'question_id' => 536,
                'answer_text' => 'Pirja e alkooholit gjatë ngasjes',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:29:10',
                'updated_at' => '2026-03-19 20:29:10',
            ),
            214 => 
            array (
                'id' => 1215,
                'question_id' => 536,
                'answer_text' => 'Agresiviteti i pjesëmarrësve në trafik',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:29:10',
                'updated_at' => '2026-03-19 20:29:10',
            ),
            215 => 
            array (
                'id' => 1216,
                'question_id' => 537,
                'answer_text' => 'Parashikimi i zhvillimit të situatave në trafik',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:29:45',
                'updated_at' => '2026-03-19 20:29:45',
            ),
            216 => 
            array (
                'id' => 1217,
                'question_id' => 537,
                'answer_text' => 'Reagimi me vonesë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:29:45',
                'updated_at' => '2026-03-19 20:29:45',
            ),
            217 => 
            array (
                'id' => 1218,
                'question_id' => 537,
                'answer_text' => 'Përdorimi i telefonit mobil gjatë ngasjes',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:29:45',
                'updated_at' => '2026-03-19 20:29:45',
            ),
            218 => 
            array (
                'id' => 1219,
                'question_id' => 538,
                'answer_text' => 'Reagimi me vonesë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:30:38',
                'updated_at' => '2026-03-19 20:30:38',
            ),
            219 => 
            array (
                'id' => 1220,
                'question_id' => 538,
                'answer_text' => 'Mbajtja e distancës së sigurisë gjatë ngasjes',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:30:38',
                'updated_at' => '2026-03-19 20:30:38',
            ),
            220 => 
            array (
                'id' => 1221,
                'question_id' => 538,
                'answer_text' => 'Përdorimi i dritave të gjata, çdo herë gjatë ngasjes',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:30:38',
                'updated_at' => '2026-03-19 20:30:38',
            ),
            221 => 
            array (
                'id' => 1222,
                'question_id' => 539,
                'answer_text' => 'Hyrja në trafik me nxitim',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:31:21',
                'updated_at' => '2026-03-19 20:31:21',
            ),
            222 => 
            array (
                'id' => 1223,
                'question_id' => 539,
                'answer_text' => 'Ngasja me shpejtësi maksimale që zhvillon automjeti',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:31:21',
                'updated_at' => '2026-03-19 20:31:21',
            ),
            223 => 
            array (
                'id' => 1224,
                'question_id' => 539,
                'answer_text' => 'Kultura në trafikun rrugor',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:31:21',
                'updated_at' => '2026-03-19 20:31:21',
            ),
            224 => 
            array (
                'id' => 1225,
                'question_id' => 540,
                'answer_text' => 'Fëmijëve, personave të moshuar, personave me aftësi të kufizuara',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:32:01',
                'updated_at' => '2026-03-19 20:32:01',
            ),
            225 => 
            array (
                'id' => 1226,
                'question_id' => 540,
                'answer_text' => 'Shoferëve të autobusëve',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:32:01',
                'updated_at' => '2026-03-19 20:32:01',
            ),
            226 => 
            array (
                'id' => 1227,
                'question_id' => 540,
                'answer_text' => 'Shoferëve profesionalë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:32:01',
                'updated_at' => '2026-03-19 20:32:01',
            ),
            227 => 
            array (
                'id' => 1228,
                'question_id' => 541,
                'answer_text' => 'Çdo sjellje e cila është në kundërshtim me rregullat e trafikut dhe të sigurisë',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:32:42',
                'updated_at' => '2026-03-19 20:32:42',
            ),
            228 => 
            array (
                'id' => 1229,
                'question_id' => 541,
                'answer_text' => 'Vetëm sjelljet të cilat shkaktojnë aksident trafiku',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:32:42',
                'updated_at' => '2026-03-19 20:32:42',
            ),
            229 => 
            array (
                'id' => 1230,
                'question_id' => 541,
                'answer_text' => 'Vetëm nëse shoferi aplikon ngasjen defanzive',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:32:42',
                'updated_at' => '2026-03-19 20:32:42',
            ),
            230 => 
            array (
                'id' => 1231,
                'question_id' => 542,
                'answer_text' => 'Veprimet e tyre janë të paparashikueshme',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:33:10',
                'updated_at' => '2026-03-19 20:33:10',
            ),
            231 => 
            array (
                'id' => 1232,
                'question_id' => 542,
                'answer_text' => 'Për shkak agresivitetit të tyre',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:33:10',
                'updated_at' => '2026-03-19 20:33:10',
            ),
            232 => 
            array (
                'id' => 1233,
                'question_id' => 542,
                'answer_text' => 'I njohin mirë rregullat e trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:33:10',
                'updated_at' => '2026-03-19 20:33:10',
            ),
            233 => 
            array (
                'id' => 1234,
                'question_id' => 543,
                'answer_text' => 'Sjelljen në trafik',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:34:13',
                'updated_at' => '2026-03-19 20:34:13',
            ),
            234 => 
            array (
                'id' => 1235,
                'question_id' => 543,
                'answer_text' => 'Ngasjen vetëm natën',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:34:13',
                'updated_at' => '2026-03-19 20:34:13',
            ),
            235 => 
            array (
                'id' => 1236,
                'question_id' => 543,
                'answer_text' => 'Ndalimin e ngasjes me bashkëudhëtarë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:34:13',
                'updated_at' => '2026-03-19 20:34:13',
            ),
            236 => 
            array (
                'id' => 1237,
                'question_id' => 544,
                'answer_text' => 'Vetura nuk është në pronësi të shoferit',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:34:53',
                'updated_at' => '2026-03-19 20:34:53',
            ),
            237 => 
            array (
                'id' => 1238,
                'question_id' => 544,
                'answer_text' => 'Mungesa e përvojës në ngasje',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:34:53',
                'updated_at' => '2026-03-19 20:34:53',
            ),
            238 => 
            array (
                'id' => 1239,
                'question_id' => 544,
                'answer_text' => 'Aplikimi i ngasjes defanzive',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:34:53',
                'updated_at' => '2026-03-19 20:34:53',
            ),
            239 => 
            array (
                'id' => 1240,
                'question_id' => 545,
                'answer_text' => 'Si të reagohet në situatat e rrezikshme',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:35:30',
                'updated_at' => '2026-03-19 20:35:30',
            ),
            240 => 
            array (
                'id' => 1241,
                'question_id' => 545,
            'answer_text' => 'Leximi i porosive (msm-ve) gjatë ngasjes',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:35:30',
                'updated_at' => '2026-03-19 20:35:30',
            ),
            241 => 
            array (
                'id' => 1242,
                'question_id' => 545,
                'answer_text' => 'Të dinë moshën e shoferëve të automjeteve që vijnë përballë',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:35:30',
                'updated_at' => '2026-03-19 20:35:30',
            ),
            242 => 
            array (
                'id' => 1243,
                'question_id' => 546,
                'answer_text' => 'Aplikojnë Eko - ngasjen',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:36:12',
                'updated_at' => '2026-03-19 20:36:12',
            ),
            243 => 
            array (
                'id' => 1244,
                'question_id' => 546,
                'answer_text' => 'Mosnjohja e faktorëve që shkaktojnë aksidente rrugore',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:36:12',
                'updated_at' => '2026-03-19 20:36:12',
            ),
            244 => 
            array (
                'id' => 1245,
                'question_id' => 546,
                'answer_text' => 'Respektojnë rregullat e trafikut',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:36:12',
                'updated_at' => '2026-03-19 20:36:12',
            ),
            245 => 
            array (
                'id' => 1246,
                'question_id' => 547,
                'answer_text' => 'E ngasin automjetin me nderrues automatik.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:36:59',
                'updated_at' => '2026-03-19 20:36:59',
            ),
            246 => 
            array (
                'id' => 1247,
                'question_id' => 547,
                'answer_text' => 'Dëshirojnë që të tregohen mbizotërues ndaj moshatarëve të tyre.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:36:59',
                'updated_at' => '2026-03-19 20:36:59',
            ),
            247 => 
            array (
                'id' => 1248,
                'question_id' => 547,
                'answer_text' => 'Nuk posedojnë patentë shoferin për të gjitha kategoritë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:36:59',
                'updated_at' => '2026-03-19 20:36:59',
            ),
            248 => 
            array (
                'id' => 1249,
                'question_id' => 548,
                'answer_text' => 'Fëmijët, personat e verbër, personat me aftësi të kufizuar.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:37:27',
                'updated_at' => '2026-03-19 20:37:27',
            ),
            249 => 
            array (
                'id' => 1250,
                'question_id' => 548,
                'answer_text' => 'Udhëtarët në autobusë.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:37:27',
                'updated_at' => '2026-03-19 20:37:27',
            ),
            250 => 
            array (
                'id' => 1251,
                'question_id' => 548,
                'answer_text' => 'Shoferi i tramvait.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:37:27',
                'updated_at' => '2026-03-19 20:37:27',
            ),
            251 => 
            array (
                'id' => 1252,
                'question_id' => 549,
                'answer_text' => 'Në të shumtën e rasteve nuk janë të vetëdijshëm për rrezikun në trafik.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:38:02',
                'updated_at' => '2026-03-19 20:38:02',
            ),
            252 => 
            array (
                'id' => 1253,
                'question_id' => 549,
                'answer_text' => 'Varësisht nga gjinia.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:38:02',
                'updated_at' => '2026-03-19 20:38:02',
            ),
            253 => 
            array (
                'id' => 1254,
                'question_id' => 549,
                'answer_text' => 'Çdo herë në pajtim me rregullat e trafikut.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:38:02',
                'updated_at' => '2026-03-19 20:38:02',
            ),
            254 => 
            array (
                'id' => 1255,
                'question_id' => 550,
                'answer_text' => 'Ti shikojn reklamat gjatë rrugës.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:38:47',
                'updated_at' => '2026-03-19 20:38:47',
            ),
            255 => 
            array (
                'id' => 1256,
                'question_id' => 550,
                'answer_text' => 'Ti njohin prodhuesin e shenjave të trafikut.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:38:47',
                'updated_at' => '2026-03-19 20:38:47',
            ),
            256 => 
            array (
                'id' => 1257,
                'question_id' => 550,
                'answer_text' => 'Të mos i hudhin sendet apo mbeturinat në rrugë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:38:47',
                'updated_at' => '2026-03-19 20:38:47',
            ),
            257 => 
            array (
                'id' => 1258,
                'question_id' => 551,
                'answer_text' => 'Në përdorim telefonit.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:39:29',
                'updated_at' => '2026-03-19 20:39:29',
            ),
            258 => 
            array (
                'id' => 1259,
                'question_id' => 551,
                'answer_text' => 'Këmbësorë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:39:29',
                'updated_at' => '2026-03-19 20:39:29',
            ),
            259 => 
            array (
                'id' => 1260,
                'question_id' => 551,
                'answer_text' => 'Përdorimin e radios.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:39:29',
                'updated_at' => '2026-03-19 20:39:29',
            ),
            260 => 
            array (
                'id' => 1261,
                'question_id' => 552,
                'answer_text' => 'Në shenjat e trafikut dhe distancë të sigurisë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:39:59',
                'updated_at' => '2026-03-19 20:39:59',
            ),
            261 => 
            array (
                'id' => 1262,
                'question_id' => 552,
                'answer_text' => 'Në kujdes gjatë shkrimit të msm-ve në telefonin mobil.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:39:59',
                'updated_at' => '2026-03-19 20:39:59',
            ),
            262 => 
            array (
                'id' => 1263,
                'question_id' => 552,
                'answer_text' => 'Në tipin e automjetit gjatë tejkalimit.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:39:59',
                'updated_at' => '2026-03-19 20:39:59',
            ),
            263 => 
            array (
                'id' => 1264,
                'question_id' => 553,
                'answer_text' => 'Përqëndrimi gjatë ngasjes.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:40:31',
                'updated_at' => '2026-03-19 20:40:31',
            ),
            264 => 
            array (
                'id' => 1265,
                'question_id' => 553,
                'answer_text' => 'Hyrja në situata të rrezikshme.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:40:31',
                'updated_at' => '2026-03-19 20:40:31',
            ),
            265 => 
            array (
                'id' => 1266,
                'question_id' => 553,
                'answer_text' => 'Sjellja konforn rregullave në trafik.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:40:31',
                'updated_at' => '2026-03-19 20:40:31',
            ),
            266 => 
            array (
                'id' => 1267,
                'question_id' => 554,
                'answer_text' => 'Nxitim i vrullshëm.',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:41:17',
                'updated_at' => '2026-03-19 20:41:17',
            ),
            267 => 
            array (
                'id' => 1268,
                'question_id' => 554,
                'answer_text' => 'Shmangja e aksidentit për shkak të shkeljeve të rregullave të trafikut nga pjesëmarrësit e tjerë.',
                'is_correct' => 1,
                'image' => NULL,
                'created_at' => '2026-03-19 20:41:17',
                'updated_at' => '2026-03-19 20:41:17',
            ),
            268 => 
            array (
                'id' => 1269,
                'question_id' => 554,
                'answer_text' => 'Ngasja vetëm me mjet me ndërrues automatik',
                'is_correct' => 0,
                'image' => NULL,
                'created_at' => '2026-03-19 20:41:17',
                'updated_at' => '2026-03-19 20:41:17',
            ),
        ));
        
        
    }
}