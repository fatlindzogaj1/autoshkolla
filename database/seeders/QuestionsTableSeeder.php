<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'question_number' => 1001,
                'question_text' => 'A ju lejohet ndërrimi i shiritit për kthim majtas në këtë situatë?
',
                'image' => 'questions/nSzlV75spxGoZk75YSpzafnsV3sMGN8yJuP7nruF.png',
                'created_at' => '2026-03-15 22:32:22',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'question_number' => 1002,
                'question_text' => 'Si duhet të veproni në këtë situatë?',
                'image' => 'questions/wCCp5dgfEf1ukWilQORXRpJOrTLc7KUiq1Vmq8gz.png',
                'created_at' => '2026-03-15 22:33:44',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 1,
                'question_number' => 1003,
                'question_text' => 'Çfarë kujdesi duhet të keni në këtë situatë?',
                'image' => 'questions/FqJ8ZvwxdTtmxaouVMKPo2lIHyI2qQ78v2r225wT.png',
                'created_at' => '2026-03-15 22:36:29',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 1,
                'question_number' => 1004,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/hPAjm6k16FwPg3fnTSdVGWmqleeZEId53tUGmJro.png',
                'created_at' => '2026-03-15 22:37:31',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 1,
                'question_number' => 1005,
                'question_text' => ' Si duhet të veproni në këtë situatë?',
                'image' => 'questions/6imji0S5kvExR7SKFQM2HSvbtp6Rt1OycYVvOHEE.png',
                'created_at' => '2026-03-15 22:38:34',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 1,
                'question_number' => 1006,
                'question_text' => 'Si duhet të veproni në këtë situatë?',
                'image' => 'questions/Qd022ABEBOA7ecQaqdG5Xgn0M8OQufgNVl0EwQ0I.png',
                'created_at' => '2026-03-15 22:39:23',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 1,
                'question_number' => 1007,
                'question_text' => 'Si duhet të veproni në këtë situatë?
',
                'image' => 'questions/eW9LAMFPZHVfww6NkG2vhAb7e0PDojGs8NPeSlmT.png',
                'created_at' => '2026-03-15 22:40:55',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            7 => 
            array (
                'id' => 8,
                'category_id' => 1,
                'question_number' => 1008,
                'question_text' => 'Çka duhet keni parasysh gjatë ngasjes në autostradë si në këtë situatë?',
                'image' => 'questions/s8orAUxy7WjIsARmlw3kJZLPw6UQFyR1jZQusyH0.png',
                'created_at' => '2026-03-15 22:42:01',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            8 => 
            array (
                'id' => 9,
                'category_id' => 1,
                'question_number' => 1009,
                'question_text' => 'Si duhet të veproni në këtë situatë?
',
                'image' => 'questions/UdroSpQtM1pXfVf1nxDFBIig26afkmRymYO5AIs3.png',
                'created_at' => '2026-03-15 22:44:08',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            9 => 
            array (
                'id' => 10,
                'category_id' => 1,
                'question_number' => 1010,
                'question_text' => 'Si duhet të veproni në këtë situatë?',
                'image' => 'questions/BqFKs001KCPbKa7JX0glomKFLCEbmecepaW9I5JA.png',
                'created_at' => '2026-03-15 22:45:06',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            10 => 
            array (
                'id' => 11,
                'category_id' => 1,
                'question_number' => 1011,
                'question_text' => 'Çka duhet të keni parasysh gjatë ngasjes në tunel si në
këtë situatë?',
                'image' => 'questions/APbTsgh4w9YvM7gEhehdUMIGvjHJFRu7Vm7ggg6V.png',
                'created_at' => '2026-03-15 22:49:58',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            11 => 
            array (
                'id' => 12,
                'category_id' => 1,
                'question_number' => 1012,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/9fgM3ZaCIpCqNGIhOzH5VBJzVT36UZiVorkmR5BK.png',
                'created_at' => '2026-03-15 22:51:05',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            12 => 
            array (
                'id' => 13,
                'category_id' => 1,
                'question_number' => 1013,
                'question_text' => 'Si duhet të veproni në këtë situatë?',
                'image' => 'questions/MuudW44CrKoIVElC7UJcDoFqvjYZiat8KMAVjWnI.png',
                'created_at' => '2026-03-15 22:55:56',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            13 => 
            array (
                'id' => 14,
                'category_id' => 1,
                'question_number' => 1014,
                'question_text' => 'Çka duhet të keni parasysh gjatë ngasjes së veturës në
këtë situatë',
                'image' => 'questions/Isz2HPG53qlhOSSP2tU6Mz53PfESfWixOOxqlKzh.png',
                'created_at' => '2026-03-15 22:56:43',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            14 => 
            array (
                'id' => 15,
                'category_id' => 1,
                'question_number' => 1015,
                'question_text' => ' Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/dyFp4O5FyPIwbTwFnLKxNsmLldt4pIV4SpBWsvZQ.png',
                'created_at' => '2026-03-15 22:58:24',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            15 => 
            array (
                'id' => 16,
                'category_id' => 1,
                'question_number' => 1016,
                'question_text' => 'A duhet të rritet distanca e sigurisë në këtë situatë?',
                'image' => 'questions/MoAUJF48KB6xMsNQ8b6FKirPOCHYORw46mnJunDB.png',
                'created_at' => '2026-03-15 22:59:36',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            16 => 
            array (
                'id' => 17,
                'category_id' => 1,
                'question_number' => 1017,
                'question_text' => 'Çka duhet të keni parasysh kur autobusi jashtë
vendbanimit sinjalizon hyrjen në rrugën qarkulluese?',
                'image' => 'questions/eAP3A6Lao8w1FBbXXpkTm0f7fXxV2yK4U6jbghwi.png',
                'created_at' => '2026-03-15 23:00:39',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            17 => 
            array (
                'id' => 18,
                'category_id' => 1,
                'question_number' => 1018,
                'question_text' => 'Duhet të vazhdoj me të njëjtën shpejtësi',
                'image' => 'questions/uxE1jkAq7AvE3s4oxebdyJzWxorz09vWOqSJVWWd.png',
                'created_at' => '2026-03-15 23:01:41',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            18 => 
            array (
                'id' => 19,
                'category_id' => 1,
                'question_number' => 1019,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/7L4VKCiX2M32W5jOlUeYJQDt8v8ZGtdTnfWAtOfT.png',
                'created_at' => '2026-03-15 23:02:51',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            19 => 
            array (
                'id' => 20,
                'category_id' => 1,
                'question_number' => 1020,
                'question_text' => 'A duhet t’u jepni përparësi kalimi këmbësorëve në këtë
situatë?',
                'image' => 'questions/w16ndPX6loNtdWU3gsdrHt4GSTVTmgrgU4Plj0r9.png',
                'created_at' => '2026-03-15 23:12:31',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            20 => 
            array (
                'id' => 21,
                'category_id' => 1,
                'question_number' => 1021,
                'question_text' => 'A duhet t’i jepni përparësi kalimi autobusit që hyn në
rrugën qarkulluese nga vendndalja jashtë vendbanimit?',
                'image' => 'questions/TRjHXKp6kNzg9d1VfmD7h7dZbbI8sPZDlpqy5tvi.png',
                'created_at' => '2026-03-15 23:14:09',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            21 => 
            array (
                'id' => 22,
                'category_id' => 1,
                'question_number' => 1022,
                'question_text' => 'Në cilat cilat raste lejohet përdorimi i shiritit 1 në autostradë?',
                'image' => 'questions/PztvK3caV1RqKcxsEQW6Eyuo88vCngR897wlVxgh.png',
                'created_at' => '2026-03-16 08:38:47',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            22 => 
            array (
                'id' => 23,
                'category_id' => 1,
                'question_number' => 1023,
                'question_text' => 'Në cilin shirit të trafikut duhet të lëvizni në autostradë si
në këtë situatë?',
                'image' => 'questions/Fog1LUav0CE4grSUCFILwUsDszhFkEDNzAoWljtN.png',
                'created_at' => '2026-03-16 08:40:01',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            23 => 
            array (
                'id' => 24,
                'category_id' => 1,
                'question_number' => 1024,
                'question_text' => 'Si duhet të veproni në këtë situatë?',
                'image' => 'questions/nFYrpgG10JnNPWsAtfexPJbpAXpGUjsQhUw5hC2m.png',
                'created_at' => '2026-03-16 08:43:18',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            24 => 
            array (
                'id' => 25,
                'category_id' => 1,
                'question_number' => 1025,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/w0iKiVLO2VL4DbqAqetY2ONkuVHgHz1wx5y2UM3x.png',
                'created_at' => '2026-03-16 08:44:30',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            25 => 
            array (
                'id' => 26,
                'category_id' => 1,
                'question_number' => 1026,
                'question_text' => 'Cili veprim është i drejtë në këtë situatë?',
                'image' => 'questions/3MT551tA9Vp5wZnUNt7poYLvadUpbpsnlDlcC8ly.png',
                'created_at' => '2026-03-16 08:45:36',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            26 => 
            array (
                'id' => 27,
                'category_id' => 1,
                'question_number' => 1027,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/DPtxVco48Roe8yrJO6fjSLtAaBHrFjk0x4OeHUSh.png',
                'created_at' => '2026-03-16 08:46:38',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            27 => 
            array (
                'id' => 28,
                'category_id' => 1,
                'question_number' => 1028,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/XhMcvUGe1WJyXFrdbJw8Vh7rddYbrl7xJNfLQuh9.png',
                'created_at' => '2026-03-16 08:47:39',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            28 => 
            array (
                'id' => 29,
                'category_id' => 1,
                'question_number' => 1029,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/fcXfBUsMPtnrdoV6F3mbQXcucOyvACrdvviTGpjT.png',
                'created_at' => '2026-03-16 08:48:45',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            29 => 
            array (
                'id' => 30,
                'category_id' => 1,
                'question_number' => 1030,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/Y99JVgddQJskPmxTN2kZXDgredgu3sVtTzp9mu3N.png',
                'created_at' => '2026-03-16 08:49:53',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            30 => 
            array (
                'id' => 31,
                'category_id' => 1,
                'question_number' => 1031,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/Wj0IcqFTXhXrNlOhfgSRl84SG69VYj7J9RDiu2ZT.png',
                'created_at' => '2026-03-16 08:50:46',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            31 => 
            array (
                'id' => 32,
                'category_id' => 1,
                'question_number' => 1032,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/6tL3I1NZ8N9Z10bndEAG9XyRgSF3OWiJHkndsLtw.png',
                'created_at' => '2026-03-16 08:52:01',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            32 => 
            array (
                'id' => 33,
                'category_id' => 1,
                'question_number' => 1033,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/G3Mrnjh8MmcimAXLltoKQ0q2LkewxvhRTKYDe5e3.png',
                'created_at' => '2026-03-16 08:53:01',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            33 => 
            array (
                'id' => 34,
                'category_id' => 1,
                'question_number' => 1034,
                'question_text' => ' Si do të veproni në këtë situatë?',
                'image' => 'questions/i5gkzdW886ymE4YXM7wBCLFnnBloARwCnwfNKKws.png',
                'created_at' => '2026-03-16 08:54:11',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            34 => 
            array (
                'id' => 35,
                'category_id' => 1,
                'question_number' => 1035,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/NmZirdL8L7bbANMaIaDFJmOHJl6u4vRg1mXAZwoY.png',
                'created_at' => '2026-03-16 08:55:13',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            35 => 
            array (
                'id' => 36,
                'category_id' => 1,
                'question_number' => 1036,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/XT3xMO4krrLqj6Pf1yypJMqe5oNypoJV17b1qg82.png',
                'created_at' => '2026-03-16 08:56:17',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            36 => 
            array (
                'id' => 37,
                'category_id' => 1,
                'question_number' => 1037,
                'question_text' => 'Si do të veproni në këtë situatë?',
                'image' => 'questions/Ho4M69c4DYBotRebZEx08JKKKLymAelHYWiXvAZj.png',
                'created_at' => '2026-03-16 08:57:18',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            37 => 
            array (
                'id' => 38,
                'category_id' => 1,
                'question_number' => 1038,
                'question_text' => 'Cili veprim është i drejtë në këtë situatë?',
                'image' => 'questions/SeU6dS9lqHctOzrmgcs0DqMwIiCb5SoIITlI8wCL.png',
                'created_at' => '2026-03-16 08:58:14',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            38 => 
            array (
                'id' => 39,
                'category_id' => 1,
                'question_number' => 1039,
                'question_text' => 'Çfarë kujdesi duhet të keni në këtë situatë?',
                'image' => 'questions/3FOXECuFMiiuC2v9XU03S6IKOykyBzdk4PCqNpXG.png',
                'created_at' => '2026-03-16 08:59:14',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            39 => 
            array (
                'id' => 40,
                'category_id' => 1,
                'question_number' => 1040,
                'question_text' => ' Në rrugën nacionale jashtë vendbanimit keni ndalur
mjetin për shkak të defektit. Si do të veproni në këtë
situatë?',
                'image' => 'questions/axX6BZACFWomroKuzakTmbF5QIwrKeqywUe1SHrN.png',
                'created_at' => '2026-03-16 09:00:44',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            40 => 
            array (
                'id' => 41,
                'category_id' => 1,
                'question_number' => 1041,
                'question_text' => 'Çfarë kujdesi duhet të keni në këtë situatë?',
                'image' => 'questions/Z9Pe22zntJAiSpkllN9dsle5q479xmLB8OoI0lsI.png',
                'created_at' => '2026-03-16 09:02:59',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            41 => 
            array (
                'id' => 42,
                'category_id' => 1,
                'question_number' => 1042,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/HeiCzLSsgvMoiBu7zWcHntNOfR4deaO8xSvSHZWC.png',
                'created_at' => '2026-03-16 09:04:00',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            42 => 
            array (
                'id' => 43,
                'category_id' => 1,
                'question_number' => 1043,
                'question_text' => 'Cili veprim është i drejtë në këtë situatë?',
                'image' => 'questions/Qca0nSPu7Bm8tcMqHbpK3yLKPodILIribnMC1KE1.png',
                'created_at' => '2026-03-16 09:05:10',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            43 => 
            array (
                'id' => 44,
                'category_id' => 1,
                'question_number' => 1044,
                'question_text' => 'Çka duhet të keni parasysh në situatën kur trafiku
është i bllokuar?',
                'image' => 'questions/Cg9GeUJEptTyjy4y79I8475iU0rHwLHwYE83za9G.png',
                'created_at' => '2026-03-16 09:08:02',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            44 => 
            array (
                'id' => 45,
                'category_id' => 1,
                'question_number' => 1045,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/10UKOWHM2PO1JwP86wBVtrXWVCxX897bSjBePdwN.png',
                'created_at' => '2026-03-16 09:09:27',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            45 => 
            array (
                'id' => 46,
                'category_id' => 1,
                'question_number' => 1046,
                'question_text' => 'A do t’ia mundësoni autobusit hyrjen në shiritin e
trafikut në situatën si në foto?',
                'image' => 'questions/eEk4MGUIsNb3usujHe9Yo1GnSLua3uxKeIdeqq8m.png',
                'created_at' => '2026-03-16 09:10:51',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            46 => 
            array (
                'id' => 47,
                'category_id' => 1,
                'question_number' => 1047,
                'question_text' => ' A ju lejohet kthimi djathtas kur në semafor ndriçon drita
e verdhë vezulluese?',
                'image' => 'questions/LUy5R20txyQGhgRIVEUDfYtSDR6sDSSTdh89v85V.png',
                'created_at' => '2026-03-16 09:12:46',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            47 => 
            array (
                'id' => 48,
                'category_id' => 1,
                'question_number' => 1048,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/HRh3fSB0VUk2jXBPsiD5EGb0hpZCC6ut3E9VACGR.png',
                'created_at' => '2026-03-16 09:13:48',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            48 => 
            array (
                'id' => 49,
                'category_id' => 1,
                'question_number' => 1049,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/NWEIbcpViJnmgTU2UwhksNyonvRRPjnSSoc6rMVG.png',
                'created_at' => '2026-03-16 09:15:32',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            49 => 
            array (
                'id' => 50,
                'category_id' => 1,
                'question_number' => 1050,
                'question_text' => 'Kur duhet vendosur dy trekëndësha të sigurisë, si në foto?',
                'image' => 'questions/XdOFivnu8VNZL7NT0GpuDlFVgdT0TWHyvn0J5EDS.png',
                'created_at' => '2026-03-16 09:17:53',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            50 => 
            array (
                'id' => 51,
                'category_id' => 1,
                'question_number' => 1051,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/VmDFvzqbEYWHCNpRi0iE2h1tbxewWfvXWzQjiNKm.png',
                'created_at' => '2026-03-16 09:19:17',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            51 => 
            array (
                'id' => 52,
                'category_id' => 1,
                'question_number' => 1052,
                'question_text' => ' Cili veprim është i drejtë në këtë situatë?',
                'image' => 'questions/kU2PRIgi7bTtRpD6rdLgxac3bUgiYH5391ZlMPOs.png',
                'created_at' => '2026-03-16 09:20:52',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            52 => 
            array (
                'id' => 53,
                'category_id' => 1,
                'question_number' => 1053,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/buvcl24sVouZBHxwSr8UR61xsximvLOua6fB8UBT.png',
                'created_at' => '2026-03-16 09:22:32',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            53 => 
            array (
                'id' => 54,
                'category_id' => 1,
                'question_number' => 1054,
                'question_text' => 'Cili veprim është i drejtë në këtë situatë?',
                'image' => 'questions/eZjDibT70DaynPVQArTnKgExuta1iIbbie5EEIWD.png',
                'created_at' => '2026-03-16 09:23:14',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            54 => 
            array (
                'id' => 55,
                'category_id' => 1,
                'question_number' => 1055,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/c73ack5YiWlnp1typHzROpiwxZctQiBA8mlTjV7v.png',
                'created_at' => '2026-03-16 09:25:17',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            55 => 
            array (
                'id' => 56,
                'category_id' => 1,
                'question_number' => 1056,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/0zoavQN1qOKCPWbVX3fzmBEQuvUW2WwUb49I3cDG.png',
                'created_at' => '2026-03-16 09:28:20',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            56 => 
            array (
                'id' => 57,
                'category_id' => 1,
                'question_number' => 1057,
                'question_text' => 'Kur duhet vendosur dy trekëndësha të sigurisë,
si në këtë situatë?',
                'image' => 'questions/ZeXYkBR6ZUkIWHV5HCGl87GPf18WuOdJLxEvSdnJ.png',
                'created_at' => '2026-03-16 09:32:19',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            57 => 
            array (
                'id' => 58,
                'category_id' => 1,
                'question_number' => 1058,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/7jmeavs3DMZ6Tuhx0YmNMI8bQf9BvFa2Xbhd0EEd.png',
                'created_at' => '2026-03-16 09:33:17',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            58 => 
            array (
                'id' => 59,
                'category_id' => 1,
                'question_number' => 1059,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/SOXoQWedNf1Kx1c4I838tK3lJAxc8YR1GOTtdOA6.png',
                'created_at' => '2026-03-16 09:34:07',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            59 => 
            array (
                'id' => 60,
                'category_id' => 1,
                'question_number' => 1060,
                'question_text' => 'Cili veprim është i drejtë në këtë situatë?',
                'image' => 'questions/HlUgWHot52FNbBitEJaZjGkCQr4D4PD7Ba0VjZ7M.png',
                'created_at' => '2026-03-16 09:35:59',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            60 => 
            array (
                'id' => 61,
                'category_id' => 1,
                'question_number' => 1061,
                'question_text' => 'Cili veprim është i drejtë?',
                'image' => 'questions/mFDUDQlkDyWlQLCjWKxF4G1XFHdYtI0FUAglDBAW.png',
                'created_at' => '2026-03-16 09:37:07',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            61 => 
            array (
                'id' => 62,
                'category_id' => 1,
                'question_number' => 1062,
                'question_text' => 'Cili veprim është i drejtë në këtë situatë?',
                'image' => 'questions/6clbe1LSieMbSe3bArOkMwEewRtPWBM0uGz9hj2k.png',
                'created_at' => '2026-03-16 09:39:47',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            62 => 
            array (
                'id' => 63,
                'category_id' => 1,
                'question_number' => 1063,
                'question_text' => 'Cili veprim është i drejtë në këtë situatë?',
                'image' => 'questions/U2lwepYyzPjyG3dF5KFOIRwStqspeoHgNLNTgBKw.png',
                'created_at' => '2026-03-16 09:40:56',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            63 => 
            array (
                'id' => 64,
                'category_id' => 1,
                'question_number' => 1064,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/kM9GJ6RjZxnyCWCd9Qc7WDjjXLX4G3O9dfwnRtH9.png',
                'created_at' => '2026-03-16 09:43:13',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            64 => 
            array (
                'id' => 65,
                'category_id' => 1,
                'question_number' => 1065,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/Z3mrwIx9IJBQ4V74gH8zE0yewTSN0kB5T66iWhYr.png',
                'created_at' => '2026-03-16 09:44:54',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            65 => 
            array (
                'id' => 66,
                'category_id' => 1,
                'question_number' => 1066,
                'question_text' => 'Si janë duke lëvizur biçiklistët në këtë situatë?',
                'image' => 'questions/NtKr4OJJBY3PT7To7j4WGXl6mP9MEFxdjvZ88goj.png',
                'created_at' => '2026-03-16 09:47:34',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            66 => 
            array (
                'id' => 67,
                'category_id' => 1,
                'question_number' => 1067,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/mWPSvgypwZqbiqpg1hg4f59vqTqkQ9i4GWzjVRr6.png',
                'created_at' => '2026-03-16 09:48:49',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            67 => 
            array (
                'id' => 68,
                'category_id' => 1,
                'question_number' => 1068,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/Jt6BNgySUxVAoUYL2BKbGBR9PQq7g6JND5ZpWx8t.png',
                'created_at' => '2026-03-16 09:59:16',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            68 => 
            array (
                'id' => 69,
                'category_id' => 1,
                'question_number' => 1069,
                'question_text' => 'Si duhet të shënohet automjeti i ndalur në autostradë,
në rast defekti?',
                'image' => 'questions/kUTA0BT9TsvH5OOjYh6ayNzeuSvQYn4caREEH5Fd.png',
                'created_at' => '2026-03-16 10:00:39',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            69 => 
            array (
                'id' => 70,
                'category_id' => 1,
                'question_number' => 1070,
                'question_text' => ' Çka duhet të keni parasysh kur hasni në situatën si
në foto?',
                'image' => 'questions/Dmu1i01D2JhCXM6IQddzwlX0Gi0K0Fy9lgwEO5O9.png',
                'created_at' => '2026-03-16 10:03:09',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            70 => 
            array (
                'id' => 71,
                'category_id' => 1,
                'question_number' => 1071,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/OLcpI84yEVsigKKUvLGV1ZCAl5n6eUU4c0vPucvH.png',
                'created_at' => '2026-03-16 10:04:36',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            71 => 
            array (
                'id' => 72,
                'category_id' => 1,
                'question_number' => 1072,
                'question_text' => 'Si do të veproni nëse topi rrokulliset si në këtë situatë?',
                'image' => 'questions/LReC1fM5qDI651A0TK3Hl31ldNfilNMJJ1QL3GqM.png',
                'created_at' => '2026-03-16 10:05:57',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            72 => 
            array (
                'id' => 73,
                'category_id' => 1,
                'question_number' => 1073,
                'question_text' => ' Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/lVhBiMKdTNa9vvj8kI4LebSXIA9MoWnySfphNrT1.png',
                'created_at' => '2026-03-16 10:07:00',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            73 => 
            array (
                'id' => 74,
                'category_id' => 1,
                'question_number' => 1074,
                'question_text' => 'Si duhet të veprohet në këtë situatë?',
                'image' => 'questions/brDi0xyBu78FUrhMpA1SY1RgdACYILdk3KwOY7DT.png',
                'created_at' => '2026-03-16 10:08:16',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            74 => 
            array (
                'id' => 75,
                'category_id' => 1,
                'question_number' => 1075,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/MjZuU5FRDrk8YowfOy5aXIM4nNslaukSoT73irKq.png',
                'created_at' => '2026-03-16 10:10:01',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            75 => 
            array (
                'id' => 76,
                'category_id' => 1,
                'question_number' => 1076,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/3EQGHKz378VXPPCUYGgRryJUI6weH14XjCYlr7fS.png',
                'created_at' => '2026-03-16 10:11:31',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            76 => 
            array (
                'id' => 77,
                'category_id' => 1,
                'question_number' => 1077,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/NaZ5TMhC2DesUn1uXABxvr2m880PnlPGyD1o1alg.png',
                'created_at' => '2026-03-16 10:12:16',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            77 => 
            array (
                'id' => 78,
                'category_id' => 1,
                'question_number' => 1078,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/fY7XuwCL4OFRu2JMWnHQWmrXXr20XAl1r8PTnLwK.png',
                'created_at' => '2026-03-16 10:13:05',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            78 => 
            array (
                'id' => 79,
                'category_id' => 1,
                'question_number' => 1079,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/15IhjorPSd0fIKQqptGok9AhHn1Z1i0PmBjz6HUC.png',
                'created_at' => '2026-03-16 10:14:03',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            79 => 
            array (
                'id' => 80,
                'category_id' => 1,
                'question_number' => 1080,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/nqzsCyevFgFdoa2R0rXbLEfpb6xfvBm5HS6Mfnqj.png',
                'created_at' => '2026-03-16 10:14:49',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            80 => 
            array (
                'id' => 81,
                'category_id' => 1,
                'question_number' => 1081,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/CwMiJe75016PQll6G5XnzVWLLONYw62zl436jBvC.png',
                'created_at' => '2026-03-16 10:16:11',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            81 => 
            array (
                'id' => 82,
                'category_id' => 1,
                'question_number' => 1082,
                'question_text' => 'A lejohet lëvizja përtej vijave të dyfishta gjatësore të
plota?',
                'image' => 'questions/YjMllfkJBYEdEL9OU809abztrqqhkFrvGutR3oGv.png',
                'created_at' => '2026-03-16 10:17:39',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            82 => 
            array (
                'id' => 83,
                'category_id' => 1,
                'question_number' => 1083,
                'question_text' => ' Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/CNmOLa9o5ZnLOA3c9CXkD2yVwI2tpTwp4v5mgBm0.png',
                'created_at' => '2026-03-16 10:18:34',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            83 => 
            array (
                'id' => 84,
                'category_id' => 1,
                'question_number' => 1084,
                'question_text' => 'Cili veprim është i drejtë në këtë situatë?',
                'image' => 'questions/6hlnWM98Gjwo1lX9U8igRF3Je9ZdVqthza1OBG0h.png',
                'created_at' => '2026-03-16 10:19:59',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            84 => 
            array (
                'id' => 85,
                'category_id' => 1,
                'question_number' => 1085,
                'question_text' => 'Çka duhet pasur parasysh në situatën si në foto?',
                'image' => 'questions/9S1DjCIRjUwNl7JSMxjLHrVtMKtJLoSd9UZYdJFZ.png',
                'created_at' => '2026-03-16 10:20:42',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            85 => 
            array (
                'id' => 86,
                'category_id' => 1,
                'question_number' => 1086,
                'question_text' => 'Çka duhet të keni parasysh gjatë ngasjes
jashtë vendbanimit si në këtë situatë?',
                'image' => 'questions/703ass1Bm41IsY05OVgUeEoIuVE8mHQUWpRsEW0g.png',
                'created_at' => '2026-03-16 10:22:24',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            86 => 
            array (
                'id' => 87,
                'category_id' => 1,
                'question_number' => 1087,
                'question_text' => 'Si duhet të veproni në këtë situatë?',
                'image' => 'questions/FZfaNF1hJzlqeEIGwj0b7eJ1SBaJ8giw6FnHnamF.png',
                'created_at' => '2026-03-16 10:23:26',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            87 => 
            array (
                'id' => 88,
                'category_id' => 1,
                'question_number' => 1088,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/uVv0ZLtvAdYPyRXPrVORDWGPEXJpoaoebuhXsf0R.png',
                'created_at' => '2026-03-16 10:24:26',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            88 => 
            array (
                'id' => 89,
                'category_id' => 1,
                'question_number' => 1089,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/SLb2RqeQSiYxTsSfrlyKbr1F5Vx0wM8jt2lDzh0N.png',
                'created_at' => '2026-03-16 10:33:04',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            89 => 
            array (
                'id' => 90,
                'category_id' => 1,
                'question_number' => 1090,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/XmUlBVYps1PPJwE5RSVLYbJfmIKtTqoRxF1IoBBZ.png',
                'created_at' => '2026-03-16 10:33:45',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            90 => 
            array (
                'id' => 91,
                'category_id' => 1,
                'question_number' => 1091,
                'question_text' => 'Si do të veproni në këtë situatë?',
                'image' => 'questions/oTjJPIjfYeU20ec2r9BLDDXVQJf4y73aCzj9wyP7.png',
                'created_at' => '2026-03-16 10:34:39',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            91 => 
            array (
                'id' => 92,
                'category_id' => 1,
                'question_number' => 1092,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/mXP3MgNk4BY3bAPnK28aLftADmEEtDDSuEADEUGu.png',
                'created_at' => '2026-03-16 10:35:54',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            92 => 
            array (
                'id' => 93,
                'category_id' => 1,
                'question_number' => 1093,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/xadmlPhobsL61CdhsBDjfIhYghgnvb4vuGSulw0t.png',
                'created_at' => '2026-03-16 10:37:43',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            93 => 
            array (
                'id' => 94,
                'category_id' => 1,
                'question_number' => 1094,
                'question_text' => 'Shoferi i veturës hyn në trafik duke lëvizur prapa, si e
vlerësoni këtë situatë?',
                'image' => 'questions/SHuBH8PF4dajNneP2SXhwlslDTkWpUwiX1yqYtcC.png',
                'created_at' => '2026-03-16 10:38:34',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            94 => 
            array (
                'id' => 95,
                'category_id' => 1,
                'question_number' => 1095,
                'question_text' => 'Cili veprim është i drejtë në këtë situatë?',
                'image' => 'questions/Q3LSlsQYLqtl87rsPTOk3cFEiFXaczqm4xVGmar7.png',
                'created_at' => '2026-03-16 10:39:31',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            95 => 
            array (
                'id' => 96,
                'category_id' => 1,
                'question_number' => 1097,
                'question_text' => 'Çka duhet të keni parasysh kur doni të hyni në
trafik nga rruga e dheut, si në këtë situatë?',
                'image' => 'questions/L4lzNIkLt1GwZ0fGzEOi2o506keSviWJl6rXpBIa.png',
                'created_at' => '2026-03-16 10:40:53',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            96 => 
            array (
                'id' => 97,
                'category_id' => 1,
                'question_number' => 1098,
                'question_text' => 'Çka duhet të keni parasysh gjatë ngasjes në këtë situatë?',
                'image' => 'questions/KdGOswRBevnrqeVaj9qexymjLIEJPxVSKecRhumW.png',
                'created_at' => '2026-03-16 10:43:18',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            97 => 
            array (
                'id' => 98,
                'category_id' => 1,
                'question_number' => 1099,
                'question_text' => 'Çka duhet të keni parasysh gjatë ngasjes në këtë situatë?',
                'image' => 'questions/eCzL5j9QO90VEntRldUZHSzLfjFsUmsgdL3an4vp.png',
                'created_at' => '2026-03-16 10:45:40',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            98 => 
            array (
                'id' => 99,
                'category_id' => 1,
                'question_number' => 1100,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/J0uo7W1EkFeLzVp8YOOXXZb1xNhpmGPI5Nf72uKk.png',
                'created_at' => '2026-03-16 10:46:52',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            99 => 
            array (
                'id' => 100,
                'category_id' => 1,
                'question_number' => 1101,
                'question_text' => 'Cilat janë rreziqet e mundshme gjatë ngasjes
në rrugë me borë?',
                'image' => 'questions/hBLHuwjVcCkc0cD4nrtdJjYarRA2ek2eBKMt7pRj.png',
                'created_at' => '2026-03-16 10:47:42',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            100 => 
            array (
                'id' => 101,
                'category_id' => 1,
                'question_number' => 1102,
                'question_text' => 'Çka do të keni parasysh në këtë situatë?',
                'image' => 'questions/46qan0SgvMzikmFn8pifpp5qoIZWBv9lcZrphKuN.png',
                'created_at' => '2026-03-16 10:48:31',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            101 => 
            array (
                'id' => 102,
                'category_id' => 1,
                'question_number' => 1103,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/JzjaOWgzCZWa2h7lS3JRTo0EtVcOpiECBrAXT3Ew.png',
                'created_at' => '2026-03-16 10:49:40',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            102 => 
            array (
                'id' => 103,
                'category_id' => 2,
                'question_number' => 2001,
                'question_text' => 'Shenja e trafikut paralajmëron rrezikun e përgjithëshëm në rrugë.',
                'image' => 'questions/WPvSvrWzLUlS5ex6uAPtmTY7rcX3hsXgehjcOdot.png',
                'created_at' => '2026-03-16 11:57:05',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            103 => 
            array (
                'id' => 104,
                'category_id' => 2,
                'question_number' => 2002,
                'question_text' => 'Shenja e trafikut paralajmëron afërsinë e kthesës së rrezikshme majtas.',
                'image' => 'questions/n8qoFGy1PQ23yznAQ5DaeZZQurUMnek89ewEeLSw.png',
                'created_at' => '2026-03-16 11:57:55',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            104 => 
            array (
                'id' => 105,
                'category_id' => 2,
                'question_number' => 2003,
                'question_text' => 'Shenja e trafikut paralajmëron afërsinë e kthesës së rrezikshme majtas.',
                'image' => 'questions/XrBd1Nhqago6b3eirfrfdYl83zB6g4lk6rWD2e7U.png',
                'created_at' => '2026-03-16 11:59:19',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            105 => 
            array (
                'id' => 106,
                'category_id' => 2,
                'question_number' => 2004,
                'question_text' => 'Shenja e trafikut paralajmëron kthesë të njëpasnjëshme e para në të djathtë.',
                'image' => 'questions/TaRJMvpvfRUoj1Qt2jYYDKzafuyQH3XWh06BEWUt.png',
                'created_at' => '2026-03-16 12:00:35',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            106 => 
            array (
                'id' => 107,
                'category_id' => 2,
                'question_number' => 2005,
                'question_text' => 'Shenja e trafikut paralajmëron rrugë pa dalje.',
                'image' => 'questions/fnFrj6KJbIS4iTcxwgSdPgpyncJ6h3hYYdWID7kw.png',
                'created_at' => '2026-03-16 12:01:56',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            107 => 
            array (
                'id' => 108,
                'category_id' => 2,
                'question_number' => 2006,
                'question_text' => 'Shenja e trafikut paralajmëron ngushtim rruge nga ana e djathtë.',
                'image' => 'questions/mR0eoNGAXeGpF7czFOF4ZuqtDaJrRq1AtlYaVn0r.png',
                'created_at' => '2026-03-16 12:02:42',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            108 => 
            array (
                'id' => 109,
                'category_id' => 2,
                'question_number' => 2007,
                'question_text' => 'Shenja e trafikut paralajmëron rrugën jo të rrafshët.',
                'image' => 'questions/6aMW3UhZGt7gVVPPZ0R2KmetKeuCW9mafDdcZ7Ot.png',
                'created_at' => '2026-03-16 12:03:27',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            109 => 
            array (
                'id' => 110,
                'category_id' => 2,
                'question_number' => 2008,
                'question_text' => 'Shenja e trafikut paralajmëron vendparkimin e veturës në trotuar.',
                'image' => 'questions/NHq9LHLrC3oYw4y4VIAJanbOMyoZJww2hGc8ifSk.png',
                'created_at' => '2026-03-16 12:04:17',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            110 => 
            array (
                'id' => 111,
                'category_id' => 2,
                'question_number' => 2009,
                'question_text' => 'Shenja e trafikut paralajmëron rrugën e rrëshqitshme.',
                'image' => 'questions/4ftDxj2VwbUT6lIE4okY5RoUMLCa3j5ZncviFjDE.png',
                'created_at' => '2026-03-16 13:15:11',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            111 => 
            array (
                'id' => 112,
                'category_id' => 2,
                'question_number' => 2010,
                'question_text' => 'Shenja e trafikut paralajmëron rrugë tramvaji.',
                'image' => 'questions/ClFnULYj6hQnJPzRkSpZOIEXRIm5XzMvAc8QYV7K.png',
                'created_at' => '2026-03-16 13:16:21',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            112 => 
            array (
                'id' => 113,
                'category_id' => 1,
                'question_number' => 2011,
                'question_text' => 'Shenja e trafikut paralajmëron përplasje gurësh.',
                'image' => 'questions/6RWsFsSyqnvmiZlTXUsQcAPPtgINvcjVfvmGtBgk.png',
                'created_at' => '2026-03-16 13:17:04',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            113 => 
            array (
                'id' => 114,
                'category_id' => 2,
                'question_number' => 2012,
                'question_text' => 'Shenja e trafikut paralajmëron afërsinë e vendkalimit të shënuar për këmbësorë.',
                'image' => 'questions/zHvVmKNVjY6OkBq5VADqrmG91tCl0AWKx5TR2iCS.png',
                'created_at' => '2026-03-16 13:18:02',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            114 => 
            array (
                'id' => 115,
                'category_id' => 2,
                'question_number' => 2013,
                'question_text' => 'Shenja e trafikut paralajmëron afërsinë e vendkalimit të shënuar për këmbësorë.',
                'image' => 'questions/frcs4l7LSRIwXr6e5DMEdnYkee4LKhF8bVQTsapN.png',
                'created_at' => '2026-03-16 13:18:49',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            115 => 
            array (
                'id' => 116,
                'category_id' => 2,
                'question_number' => 2014,
                'question_text' => 'Shenja e trafikut paralajmëron afërsinë e fëmijëve në rrugë.',
                'image' => 'questions/vjdsKVdtgTPNl2JqrDQHW9lOYW1JMvqqzrdSekvO.png',
                'created_at' => '2026-03-16 13:19:54',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            116 => 
            array (
                'id' => 117,
                'category_id' => 2,
                'question_number' => 2015,
                'question_text' => 'Shenja e trafikut tregon ndalim trafiku për biçiklistë.',
                'image' => 'questions/mbW2K6c1y5iMzTMwvv9y7pxDDeiTfr7YXP1RB2n1.png',
                'created_at' => '2026-03-16 13:20:38',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            117 => 
            array (
                'id' => 118,
                'category_id' => 2,
                'question_number' => 2016,
                'question_text' => 'Shenja e trafikut tregon pjesën e rrugës ku ndalohet lëvizja e kafshëve pa mbikëqyrje.',
                'image' => 'questions/0Wcb5tK4ZT1iPII3yQOq6BiXl7JhNOZ2PPvkgxWe.png',
                'created_at' => '2026-03-16 13:21:18',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            118 => 
            array (
                'id' => 119,
                'category_id' => 2,
                'question_number' => 2017,
                'question_text' => 'Shenja e trafikut paralajmëron rrugën jo të rrafshët.',
                'image' => 'questions/6D4Y8FDTsusrr5cHNfbeKUFOWsXBmaf5s87Xnr7N.png',
                'created_at' => '2026-03-16 13:22:04',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            119 => 
            array (
                'id' => 120,
                'category_id' => 2,
                'question_number' => 2018,
                'question_text' => 'Shenja e trafikut paralajmëron teposhtëzen e rrezikshme.',
                'image' => 'questions/yvLqfYoOVFBcLNC2Yyd0RF66yvGZ84eXX8qrQlOp.png',
                'created_at' => '2026-03-16 13:22:50',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            120 => 
            array (
                'id' => 121,
                'category_id' => 2,
                'question_number' => 2019,
                'question_text' => 'Shenja e trafikut paralajmëron afërsinë e kryqëzimit të rregulluar me semaforë.',
                'image' => 'questions/5I9vLUeydnflmXXm38tKUD9qLRU1GKssl73bs6EX.png',
                'created_at' => '2026-03-16 13:23:19',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            121 => 
            array (
                'id' => 122,
                'category_id' => 2,
                'question_number' => 2020,
                'question_text' => 'Shenja e trafikut paralajmëron pjesën e rrugës ku trafiku zhvillohet në një kah.',
                'image' => 'questions/UC6jXNHQbtuc7PL17uMQuGwLjr1iDzqzRy4p8oFK.png',
                'created_at' => '2026-03-16 13:24:07',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            122 => 
            array (
                'id' => 123,
                'category_id' => 2,
                'question_number' => 2021,
                'question_text' => 'Shenja e trafikut paralajmëron distancën në mes mjeteve.',
                'image' => 'questions/aeGKxDMJqFXQlme59rUxmb7rJyKhkdVPkuwwQaxF.png',
                'created_at' => '2026-03-16 13:24:48',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            123 => 
            array (
                'id' => 124,
                'category_id' => 2,
                'question_number' => 2022,
                'question_text' => 'Shenja e trafikut paralajmëron afërsinë e vendkalimit hekurudhor me mbrojtëse.',
                'image' => 'questions/xk58LVVbQKTisH1VgzIvCZdQrLXFFBEHNeK5ey4P.png',
                'created_at' => '2026-03-16 13:25:26',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            124 => 
            array (
                'id' => 125,
                'category_id' => 2,
                'question_number' => 2023,
                'question_text' => 'Shenja e trafikut paralajmëron nënkalimin për mjetet rrugore.',
                'image' => 'questions/AgtHVFiie388yoOvMTfXM62exnTpXfvlvYfs7jhB.png',
                'created_at' => '2026-03-16 13:26:04',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            125 => 
            array (
                'id' => 126,
                'category_id' => 2,
                'question_number' => 2024,
                'question_text' => 'Shenja e trafikut paralajmëron stacionin e tramvajit.',
                'image' => 'questions/EwaIOhpTt8p2ZRyEsU01bxvyh6iuot8RMix8UDnI.png',
                'created_at' => '2026-03-16 13:26:44',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            126 => 
            array (
                'id' => 127,
                'category_id' => 2,
                'question_number' => 2025,
                'question_text' => 'Shenja e trafikut paralajmëron vendin ku egërsirat kalojnë rrugën.',
                'image' => 'questions/1lAxO6CHxqzl0ICLaJkt0tUKoYK79PNwUT2tZryN.png',
                'created_at' => '2026-03-16 13:29:51',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            127 => 
            array (
                'id' => 128,
                'category_id' => 2,
                'question_number' => 2026,
                'question_text' => 'Shenja e trafikut paralajmëron ndriçimin rrugor.',
                'image' => 'questions/pO1Fia2KuqTFl40AKpeTQVS8W10lQ8HL4tjptWuk.png',
                'created_at' => '2026-03-16 13:30:48',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            128 => 
            array (
                'id' => 129,
                'category_id' => 2,
                'question_number' => 2027,
                'question_text' => 'Shenja e trafikut paralajmëron vendkalimin hekurudhor të pa siguruar.',
                'image' => 'questions/CwJKf3O19SdyQW8Qeh9NRs7ln4NV6WDDnAsOKu0W.png',
                'created_at' => '2026-03-16 13:31:44',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            129 => 
            array (
                'id' => 130,
                'category_id' => 2,
                'question_number' => 2028,
                'question_text' => 'Shenja e trafikut paralajmëron ngushtimin e rrugës nga ana e majtë.',
                'image' => 'questions/KAznhBYAaMYMyTEUAfqs6Pd7RIoZgy08HmHjhT9D.png',
                'created_at' => '2026-03-16 13:32:27',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            130 => 
            array (
                'id' => 131,
                'category_id' => 2,
                'question_number' => 2029,
                'question_text' => 'Shenja e trafikut paralajmëron urën lëvizëse.',
                'image' => 'questions/94pSC80z91gTzBe5b6sWpemXoeRfd3KNfklb5keE.png',
                'created_at' => '2026-03-16 13:33:39',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            131 => 
            array (
                'id' => 132,
                'category_id' => 2,
                'question_number' => 2030,
                'question_text' => 'Shenja e trafikut paralajmëron urën lëvizëse.',
                'image' => 'questions/sTG9Ef5r0wCnmQVEjPrpR4E0NyaGUiVxka2nWDBj.png',
                'created_at' => '2026-03-16 13:34:43',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            132 => 
            array (
                'id' => 133,
                'category_id' => 2,
                'question_number' => 2031,
                'question_text' => 'Shenja e trafikut paralajmëron përplasje gurësh.',
                'image' => 'questions/jrYsnIWOTZeOAbiz8hV2D7GetUcTYwsfyaE3PTi4.png',
                'created_at' => '2026-03-16 13:37:16',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            133 => 
            array (
                'id' => 134,
                'category_id' => 2,
                'question_number' => 2032,
                'question_text' => 'Shenja e trafikut lajmëron vendin ku gjendet aeroporti.',
                'image' => 'questions/NArd6EIIplFiFvKZmmuCP7Rx5Ql77mpNtQKS63wj.png',
                'created_at' => '2026-03-16 13:37:55',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            134 => 
            array (
                'id' => 135,
                'category_id' => 2,
                'question_number' => 2033,
                'question_text' => 'Shenja e trafikut paralajmëron vendkalimin hekurudhor me mbrojtëse
ose gjysëmbrojtëse.',
                'image' => 'questions/5lpOpSOPeCHSvGF9g6zvyo7UJCJnEGEg5DPsXegR.png',
                'created_at' => '2026-03-16 13:38:49',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            135 => 
            array (
                'id' => 136,
                'category_id' => 2,
                'question_number' => 2034,
                'question_text' => 'Shenja e trafikut paralajmëron pjesën e rrugës ku ndalohet lëvizja e këmbësorëve.',
                'image' => 'questions/lVs8mdODXYWd6zteWMoWI7QVcWkouCxLiinxRLWu.png',
                'created_at' => '2026-03-16 13:39:55',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            136 => 
            array (
                'id' => 137,
                'category_id' => 2,
                'question_number' => 2035,
                'question_text' => 'Shenja e trafikut paralajmëron rrethojen e rrugës.',
                'image' => 'questions/qrFJ4gbOGOJj0OCFyPj7psmZMUTqKveg6oVxLQx1.png',
                'created_at' => '2026-03-16 13:41:27',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            137 => 
            array (
                'id' => 138,
                'category_id' => 2,
                'question_number' => 2036,
                'question_text' => 'Shenja e trafikut paralajmëron tunelin apo galerinë në rrugë.',
                'image' => 'questions/gzHQi4V4ckAt1C60f1NxKgsV5ONfV9IaM5bpFIch.png',
                'created_at' => '2026-03-16 13:42:04',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            138 => 
            array (
                'id' => 139,
                'category_id' => 2,
                'question_number' => 2037,
                'question_text' => 'Shenja e trafikut paralajmëron afërsin e kryqëzimit me rrethrrotullim.',
                'image' => 'questions/gwbM5ECJDIBqQZ9u3sVNs5zuaUawhkLgCzDN07kG.png',
                'created_at' => '2026-03-16 13:42:35',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            139 => 
            array (
                'id' => 140,
                'category_id' => 2,
                'question_number' => 2038,
            'question_text' => 'Shenja e trafikut paralajmëron pjesën e rrugës ku gurët mund të bien (shemben) në rrugë.',
                'image' => 'questions/T448MHIbjy6OH10mvBCksHr2q9KSpU66io1Q9Eh0.png',
                'created_at' => '2026-03-16 13:43:23',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            140 => 
            array (
                'id' => 141,
                'category_id' => 2,
                'question_number' => 2039,
                'question_text' => 'Shenja e trafikut tregon punimet në rrugë.',
                'image' => 'questions/NYpuAQy29TLGbI4y1GnyPJgQbpd71RXeHFxRWLga.png',
                'created_at' => '2026-03-16 13:44:33',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            141 => 
            array (
                'id' => 142,
                'category_id' => 2,
                'question_number' => 2040,
                'question_text' => 'Shenja e trafikut paralajmëron përpjetëzen e rrezikshme.',
                'image' => 'questions/wedlU9CYlPwfBTfoczNYeQEgUImEfeB7NC045Hc3.png',
                'created_at' => '2026-03-16 13:45:17',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            142 => 
            array (
                'id' => 143,
                'category_id' => 2,
                'question_number' => 2041,
                'question_text' => 'Shenja e trafikut paralajmëron kryqëzimin e rrugëve me rëndësi të njëjtë.',
                'image' => 'questions/pJxod5UAmOSXbN177UNgdC3dwi2dAIXIBSFr5QJ6.png',
                'created_at' => '2026-03-16 13:46:10',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            143 => 
            array (
                'id' => 144,
                'category_id' => 2,
                'question_number' => 2042,
                'question_text' => 'Shenja e trafikut paralajmëron kryqëzimin e rrugëve me rëndësi të njëjtë.',
                'image' => 'questions/qOWODm4XWaDFUm06cmlzpVuQiZrlQj3nsOyXhDdK.png',
                'created_at' => '2026-03-16 13:47:08',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            144 => 
            array (
                'id' => 145,
                'category_id' => 2,
                'question_number' => 2043,
                'question_text' => 'Cila shenjë paralajmëron afërsinë e vendit ku shpesh herë fryejn erërat anësore?',
                'image' => 'questions/eqoLdwj8Tqe60TJAnXYBO3LyaKuEeKwTWuIz4fwI.png',
                'created_at' => '2026-03-17 09:27:51',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            145 => 
            array (
                'id' => 146,
                'category_id' => 2,
                'question_number' => 2044,
                'question_text' => 'Cila shenjë paralajmëron afërsinë e vendit ku mund të ketë ngrica në rrugë?',
                'image' => 'questions/mEbc2LOM1842Mh4M7057ypdze2DHCDuJhxleQqt1.png',
                'created_at' => '2026-03-17 09:36:43',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            146 => 
            array (
                'id' => 147,
                'category_id' => 2,
                'question_number' => 2045,
                'question_text' => 'Cila shenjë paralajmëron përpjetëze e rrezikshme?',
                'image' => 'questions/VDTvynl3uAU2zPZOnJ662o0nRS0vPIGe6I6m6ara.png',
                'created_at' => '2026-03-17 09:51:53',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            147 => 
            array (
                'id' => 148,
                'category_id' => 2,
                'question_number' => 2046,
                'question_text' => 'Cila shenjë e trafikut paralajmëron ngushtime rruge ?',
                'image' => 'questions/fIVjbAFOABEFJC6fqMpV05ZeVDLV6BvTx1oc0Bpo.png',
                'created_at' => '2026-03-17 09:58:00',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            148 => 
            array (
                'id' => 149,
                'category_id' => 2,
                'question_number' => 2047,
            'question_text' => 'Cila shenjë e trafikut paralajmëron pjesën e rrugës ku gurët mund të bien (shemben) në
rrugë?',
            'image' => 'questions/JyxxUekcGW6TacU9PaIFkXnrtWpbzgVczihDfoKb.png',
            'created_at' => '2026-03-17 10:01:43',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        149 => 
        array (
            'id' => 150,
            'category_id' => 2,
            'question_number' => 2048,
            'question_text' => 'Cila shenjë e trafikut tregon punimet në rrugë?',
            'image' => 'questions/w99FnVGk1g4SnBDluBFSsjRUV4BPXrnFLDPXv39l.png',
            'created_at' => '2026-03-17 10:06:14',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        150 => 
        array (
            'id' => 151,
            'category_id' => 2,
            'question_number' => 2049,
            'question_text' => 'Cila shenjë e trafikut paralajmëron rrugën e rrëshqitshme?',
            'image' => 'questions/i7uhZGMb2gmgN0YTQCE5ToPk50DQc8MGHJDYE30W.png',
            'created_at' => '2026-03-17 10:09:55',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        151 => 
        array (
            'id' => 152,
            'category_id' => 2,
            'question_number' => 2050,
            'question_text' => 'Shenja e trafikut paralajmëron kryqëzimin e rrugës kryesore me rrugën dytësore nën këndë të drejtë?',
            'image' => 'questions/jxnjX45ivDp9DMkRbLsjDHN68ZLS8DwevwSAeRXy.png',
            'created_at' => '2026-03-17 10:22:46',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        152 => 
        array (
            'id' => 153,
            'category_id' => 2,
            'question_number' => 2051,
            'question_text' => 'Cila shenjë paralajmëron vendkalimin hekurdhuror me mbojtëse ose gjysëm mbrojtëse?',
            'image' => 'questions/B5S9FdTzIWSulT21qXP5WuLuM3jLDAYHULiAEJoA.png',
            'created_at' => '2026-03-17 10:25:22',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        153 => 
        array (
            'id' => 154,
            'category_id' => 2,
            'question_number' => 2052,
            'question_text' => 'Cila shenjë paralajmëron afërsinë e pistës së aeroplanave?',
            'image' => 'questions/9LzwoxvZb3MGoXYlkNAhYwpQiIMUczIQRF5Y52q8.png',
            'created_at' => '2026-03-17 10:27:42',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        154 => 
        array (
            'id' => 155,
            'category_id' => 2,
            'question_number' => 2053,
            'question_text' => 'Cila shenjë paralajmëron afërsinë e vendit ku bankina e rrugës e pa qëndrueshme?',
            'image' => 'questions/jyUs46WVSYOg7C5dZsFifZpuZa9fOO580HpOlnPq.png',
            'created_at' => '2026-03-17 10:29:15',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        155 => 
        array (
            'id' => 156,
            'category_id' => 2,
            'question_number' => 2054,
            'question_text' => 'Cila shenjë tregon teposhtzën e trafikut?',
            'image' => 'questions/P1QAouD3zXCcqAok2VhaESaqHJ6GhO58vxlVVCAc.png',
            'created_at' => '2026-03-17 10:30:39',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        156 => 
        array (
            'id' => 157,
            'category_id' => 2,
            'question_number' => 2101,
            'question_text' => 'Shenja e trafikut tregon ndaljen e obligueshme.',
            'image' => 'questions/xEuVl43y5rvBIbPy7ClJaLmENU3czrqNGd4B85KG.png',
            'created_at' => '2026-03-17 10:34:07',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        157 => 
        array (
            'id' => 158,
            'category_id' => 2,
            'question_number' => 2102,
            'question_text' => 'Shenja e trafikut tregon rrugën me përparësi kalimi.',
            'image' => 'questions/4W1SdevMGX4fsHMIWttNcCS48sUDlDbbOJkHqCfQ.png',
            'created_at' => '2026-03-17 10:34:56',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        158 => 
        array (
            'id' => 159,
            'category_id' => 2,
            'question_number' => 2103,
            'question_text' => 'Shenja e trafikut tregon mbarimin e të gjitha ndalesave.',
            'image' => 'questions/rHtTUntaYyxyS1DP7SdlWG6Dpv0MvGhFXGZtYamE.png',
            'created_at' => '2026-03-17 10:36:32',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        159 => 
        array (
            'id' => 160,
            'category_id' => 2,
            'question_number' => 2104,
            'question_text' => 'Shenja e trafikut tregon ndalim trafiku në një kah.',
            'image' => 'questions/bS8S4jY0hybVfpJcIkFTZ9aKV5Lc2tuUUsYBDZ1y.png',
            'created_at' => '2026-03-17 10:37:30',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        160 => 
        array (
            'id' => 161,
            'category_id' => 2,
            'question_number' => 2105,
            'question_text' => 'Shenja e trafikut tregon rrugën për lëvizjën e veturave.',
            'image' => 'questions/eJqgPRiDVmDskf9UvlgjyzhSoIaWTDziZd5bFnct.png',
            'created_at' => '2026-03-17 10:38:10',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        161 => 
        array (
            'id' => 162,
            'category_id' => 2,
            'question_number' => 2106,
            'question_text' => 'Shenja e trafikut tregon shiritin e trafikut për autobus.',
            'image' => 'questions/TubelHpJCAZ6P3EQOJeeKpOsaPKQP6SFRIC0mZ1C.png',
            'created_at' => '2026-03-17 10:39:00',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        162 => 
        array (
            'id' => 163,
            'category_id' => 2,
            'question_number' => 2107,
            'question_text' => 'Shenja e trafikut tregon vendparkimin për kamion.',
            'image' => 'questions/dAh9aEwoaGA4wkDXZocLp22nSwgVxHPmUMQbWM1b.png',
            'created_at' => '2026-03-17 10:39:36',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        163 => 
        array (
            'id' => 164,
            'category_id' => 2,
            'question_number' => 2108,
            'question_text' => 'Shenja e trafikut tregon ndalim trafiku për cisterna.',
            'image' => 'questions/8oZIusIyiNjEOtPXTZ7rwjhmfYxki9XuU8h8Yy2C.png',
            'created_at' => '2026-03-17 10:40:44',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        164 => 
        array (
            'id' => 165,
            'category_id' => 2,
            'question_number' => 2109,
            'question_text' => 'Shenja e trafikut tregon ndalim trafiku për këmbësorë.',
            'image' => 'questions/aHRkmuMttKJL10q2feB9ZqAVEqJCqVntoVHe0Tct.png',
            'created_at' => '2026-03-17 10:41:31',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        165 => 
        array (
            'id' => 166,
            'category_id' => 2,
            'question_number' => 2110,
            'question_text' => 'Shenja e trafikut tregon ndalim trafiku për mjetet të cilat tejkalojnë gjerësin e caktuar.',
            'image' => 'questions/GsV8rP0l8KgxZHZYKzpNrBgZNhSAJfZQZcHdjHvw.png',
            'created_at' => '2026-03-17 10:42:17',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        166 => 
        array (
            'id' => 167,
            'category_id' => 2,
            'question_number' => 2111,
            'question_text' => 'Shenja e trafikut tregon ndalim trafiku për mjetet të cilat tejkalojnë lartësin e caktuar.',
            'image' => 'questions/lR6bVeRCYzoA0D4FFGS2vPGmH8N37TN1cVba52dq.png',
            'created_at' => '2026-03-17 10:42:59',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        167 => 
        array (
            'id' => 168,
            'category_id' => 2,
            'question_number' => 2112,
            'question_text' => 'Shenja e trafikut tregon ndalim trafiku për mjetet të cilat tejkalojnë lartësin e caktuar.',
            'image' => 'questions/zYwFesMiltc3djkcI1cWbmrJeC7DDnQf9JqivCNx.png',
            'created_at' => '2026-03-17 10:43:38',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        168 => 
        array (
            'id' => 169,
            'category_id' => 2,
            'question_number' => 2113,
            'question_text' => 'Shenja e trafikut tregon ndalim trafiku për mjetet të cilat tejkalojn ngarkesën
boshtore të caktuar.',
            'image' => 'questions/lPPq3Zb30vNfj2MFjx2KZFvprUG6MiMAEUq5BOfJ.png',
            'created_at' => '2026-03-17 10:44:11',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        169 => 
        array (
            'id' => 170,
            'category_id' => 2,
            'question_number' => 2114,
            'question_text' => 'Shenja e trafikut tregon ndalim trafiku për mjetet të cilat tejkalojnë gjatësin e caktuar.',
            'image' => 'questions/VgL4d7Y0IFSemk9G08zfkPXX8NE8ddiTwB8wPXFO.png',
            'created_at' => '2026-03-17 10:44:49',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        170 => 
        array (
            'id' => 171,
            'category_id' => 2,
            'question_number' => 2115,
            'question_text' => 'Shenja e trafikut tregon ndalim trafiku për mjetet të cilat tejkalojnë gjatësinë e caktuar.',
            'image' => 'questions/USvNHH7WJMxaG6g6DMwHPe9E36rdqZfnyCKn1nSL.png',
            'created_at' => '2026-03-17 10:46:00',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        171 => 
        array (
            'id' => 172,
            'category_id' => 2,
            'question_number' => 2116,
            'question_text' => 'Shenja e trafikut tregon kthimin e obligueshëm djathtas.',
            'image' => 'questions/V1A73bGL3kW7cy9N2M3QSjUGHhGdeeOy0B1lXP1Z.png',
            'created_at' => '2026-03-17 10:46:41',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        172 => 
        array (
            'id' => 173,
            'category_id' => 2,
            'question_number' => 2117,
            'question_text' => 'Shenja e trafikut tregon motoudhën.',
            'image' => 'questions/2TgWXHEZSi4iDKOPJe1oru9XemrZfjQTPg4lW65i.png',
            'created_at' => '2026-03-17 10:47:25',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        173 => 
        array (
            'id' => 174,
            'category_id' => 2,
            'question_number' => 2118,
            'question_text' => 'Shenja e trafikut tregon karrocë dore.',
            'image' => 'questions/6uSY60g4b2VweoksIYi7WQ4Ue8r3ChqxZi9LQKmZ.png',
            'created_at' => '2026-03-17 10:48:20',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        174 => 
        array (
            'id' => 175,
            'category_id' => 2,
            'question_number' => 2119,
            'question_text' => 'Shenja e trafikut tregon pjesën e rrugës ku duhet të lëvizin traktori.',
            'image' => 'questions/g6BdpeeaYTmUAsNUrq8fhPXhPTEbyilc2e75YXG8.png',
            'created_at' => '2026-03-17 10:48:58',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        175 => 
        array (
            'id' => 176,
            'category_id' => 2,
            'question_number' => 2120,
            'question_text' => 'Shenja e trafikut tregon ndalim trafikut për mopedë.',
            'image' => 'questions/mzYuOkTLQk5g1kObzOalByGtHEr3K1yJuxnIrAsH.png',
            'created_at' => '2026-03-17 10:49:35',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        176 => 
        array (
            'id' => 177,
            'category_id' => 2,
            'question_number' => 2121,
            'question_text' => 'Shenja e trafikut tregon ndalim trafiku për biçikleta.',
            'image' => 'questions/U4NmPwupo5qYPTSwprpf5QObM4Gi11CAGZUtT03y.png',
            'created_at' => '2026-03-17 10:50:43',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        177 => 
        array (
            'id' => 178,
            'category_id' => 2,
            'question_number' => 2122,
            'question_text' => 'Shenja e trafikut tregon pjesën e rrugës ku biçklistët lëvizin në grupe.',
            'image' => 'questions/iS2FzD9TC29MkMKkDIq4v5yeR91vCctqXyoDIUvd.png',
            'created_at' => '2026-03-17 10:53:42',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        178 => 
        array (
            'id' => 179,
            'category_id' => 2,
            'question_number' => 2123,
            'question_text' => 'Shenja e trafikut tregon pjesën e rrugës ku duhet të lëvizin qerret.',
            'image' => 'questions/tzF4Ct2PCH9IHQGxTpCCxQNYM0x9qC0bKraFoqCS.png',
            'created_at' => '2026-03-17 10:54:46',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        179 => 
        array (
            'id' => 180,
            'category_id' => 2,
            'question_number' => 2124,
            'question_text' => 'Shenja e trafikut tregon ndalim trafiku për të gjitha mjetet me veprim motorik.',
            'image' => 'questions/O171cRKYPsDiSoRzZxfFi37grCkrdrDeHwfYrTfM.png',
            'created_at' => '2026-03-17 10:55:40',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        180 => 
        array (
            'id' => 181,
            'category_id' => 2,
            'question_number' => 2125,
            'question_text' => 'Shenja e trafikut tregon kah i obliguar djathtas.',
            'image' => 'questions/sdhCnnFU4CzDPr60NSGLMwS3QFfYqZS2Nb2zcFw4.png',
            'created_at' => '2026-03-17 11:02:03',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        181 => 
        array (
            'id' => 182,
            'category_id' => 2,
            'question_number' => 2126,
            'question_text' => 'Shenja e trafikut tregon ndalim kthimi gjysëm rrethor.',
            'image' => 'questions/7iD8jlV7Vs4Reg3A8ABnfq2THefhgu0yyQTVLfMw.png',
            'created_at' => '2026-03-17 11:02:46',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        182 => 
        array (
            'id' => 183,
            'category_id' => 2,
            'question_number' => 2127,
            'question_text' => 'Shenja e trafikut tregon kufizimin maksimal të shpejtësisë.',
            'image' => 'questions/6nm4YCv0Lr5Rh4hOuc8rXeqis3bkczC7MOMdRD9Q.png',
            'created_at' => '2026-03-17 11:03:29',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        183 => 
        array (
            'id' => 184,
            'category_id' => 2,
            'question_number' => 2128,
            'question_text' => 'Shenja tregon trafikun për vetura.',
            'image' => 'questions/kyzdPHgpD7gqJx52MAXNUdpYeGeKvo0rCJzmKxUf.png',
            'created_at' => '2026-03-17 11:04:04',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        184 => 
        array (
            'id' => 185,
            'category_id' => 2,
            'question_number' => 2129,
            'question_text' => 'Shenja e trafikut tregon ndalimin e tejkalimit për mjetet transportuese-kamion.',
            'image' => 'questions/0agVBi8eX5m6zcVCKqMT5KbGC8TVPjsigoeJLeHi.png',
            'created_at' => '2026-03-17 11:05:22',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        185 => 
        array (
            'id' => 186,
            'category_id' => 2,
            'question_number' => 2130,
            'question_text' => 'Shenja e trafikut tregon vendin ku duhet të ndaleni-dogana.',
            'image' => 'questions/fVvrLAczCB6uIMD3TERToHG3mLtQlwrc9mTchjLk.png',
            'created_at' => '2026-03-17 11:06:58',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        186 => 
        array (
            'id' => 187,
            'category_id' => 2,
            'question_number' => 2131,
            'question_text' => 'Shenja e trafikut tregon vendin ku duhet të ndaleni dogana.',
            'image' => 'questions/Uo6O4sE1GTo7TTOYsheiHg5M9qTDKXe40z1SPZZp.png',
            'created_at' => '2026-03-17 11:07:42',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        187 => 
        array (
            'id' => 188,
            'category_id' => 2,
            'question_number' => 2132,
            'question_text' => 'Shenja e trafikut tregon rrugën ku trafiku zhvillohet në një kah.',
            'image' => 'questions/lFIGw3sE1Z56PlMTuGtnvIrOioML4ChskhE7f5aw.png',
            'created_at' => '2026-03-17 11:08:25',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        188 => 
        array (
            'id' => 189,
            'category_id' => 2,
            'question_number' => 2133,
            'question_text' => 'Shenja e trafikut tregon pjesën e rrugës ku ndalohet përdorimi i shenjave akustike.',
            'image' => 'questions/YxsbiV9U8cGy5M3TS0z3VWnrx87tSw2RUJdU6w4w.png',
            'created_at' => '2026-03-17 11:12:25',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        189 => 
        array (
            'id' => 190,
            'category_id' => 2,
            'question_number' => 2134,
            'question_text' => 'Shenja e trafikut tregon përparësi kalimi për mjetet nga kahu i kundërt.',
            'image' => 'questions/dgNrhb9AXsnNtrJUjQiSErMnM2VKZgesgtEjaRcd.png',
            'created_at' => '2026-03-17 11:14:24',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        190 => 
        array (
            'id' => 191,
            'category_id' => 2,
            'question_number' => 2135,
            'question_text' => 'Shenja e trafikut tregon ndalim ndalje dhe parkimi.',
            'image' => 'questions/NbRsT2cKKSkVtIahSEul8BtFrMEJXHD09EW0ekso.png',
            'created_at' => '2026-03-17 11:42:45',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        191 => 
        array (
            'id' => 192,
            'category_id' => 2,
            'question_number' => 2136,
            'question_text' => 'Shenja e trafikut tregon zonën e parkimit.',
            'image' => 'questions/kFXFS6I751fBXqyLTgFF1GokT5YHrJ8AumwULHtD.png',
            'created_at' => '2026-03-17 11:43:23',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        192 => 
        array (
            'id' => 193,
            'category_id' => 2,
            'question_number' => 2137,
            'question_text' => 'Shenja e trafikut tregon ndalim parkimi në ditët tek.',
            'image' => 'questions/wjfr5jW1e9bfbKtP1RxcSuZ7OFrejnDvN6I1trgj.png',
            'created_at' => '2026-03-17 11:44:02',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        193 => 
        array (
            'id' => 194,
            'category_id' => 2,
            'question_number' => 2138,
            'question_text' => 'Shenja e trafikut tregon ndalim parkimi në ditët tek.',
            'image' => 'questions/gPC2zNXZsPjcAEQVdnBGOjqsfvpxBfqTT7WAU8Fa.png',
            'created_at' => '2026-03-17 11:45:02',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        194 => 
        array (
            'id' => 195,
            'category_id' => 2,
            'question_number' => 2139,
            'question_text' => 'Shenja e trafikut tregon përdorimin e radarit.',
            'image' => 'questions/AdM7dpIfn0FbrZstalgHyw8bwayf1BfxoUywtrPi.png',
            'created_at' => '2026-03-17 11:46:03',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        195 => 
        array (
            'id' => 196,
            'category_id' => 2,
            'question_number' => 2140,
            'question_text' => 'Shenja e trafikut tregon rekomandimin e shpejtësisë.',
            'image' => 'questions/aC87WXqGBootgO3qqRkscTtxWElYB8VHiM5qEAdD.png',
            'created_at' => '2026-03-17 11:46:44',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        196 => 
        array (
            'id' => 197,
            'category_id' => 2,
            'question_number' => 2141,
            'question_text' => 'Shenja e trafikut tregon goma rezervë obligative.',
            'image' => 'questions/kQO6zFWXVYsRc3mA3skCeHXabJmHebiSlOs3jP8u.png',
            'created_at' => '2026-03-17 11:47:26',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        197 => 
        array (
            'id' => 198,
            'category_id' => 2,
            'question_number' => 2142,
            'question_text' => 'Shenja e trafikut tregon shtegun për biçiklistë.',
            'image' => 'questions/rkmv5wJ7z5n8wmItWoCvRtB5ozUzgSua5nwul9On.png',
            'created_at' => '2026-03-17 11:48:17',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        198 => 
        array (
            'id' => 199,
            'category_id' => 2,
            'question_number' => 2143,
            'question_text' => 'Shenja e trafikut tregon ndalim i lëvizjës për këmbësorë.',
            'image' => 'questions/kMKMq7Li7gWRFl7lSYMctldQ3fvm8urwRbzxiu5x.png',
            'created_at' => '2026-03-17 11:49:25',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        199 => 
        array (
            'id' => 200,
            'category_id' => 2,
            'question_number' => 2144,
            'question_text' => 'Shenja e trafikut tregon shtegun për këmbësorë dhe biçikleta.',
            'image' => 'questions/Sqqgcugn39z2HuW7PiwrU9OEu2zUa6n1qvLSPfII.png',
            'created_at' => '2026-03-17 11:50:06',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        200 => 
        array (
            'id' => 201,
            'category_id' => 2,
            'question_number' => 2145,
            'question_text' => ' Shenja e trafikut tregon shtegun për kalorës.',
            'image' => 'questions/1o1QQzwDl1nbiqoZgZ8d2kIrKh1j6gucjLrRcHuz.png',
            'created_at' => '2026-03-17 11:50:49',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        201 => 
        array (
            'id' => 202,
            'category_id' => 2,
            'question_number' => 2146,
            'question_text' => 'Shenja e trafikut tregon drejtimin e obliguar drejt.',
            'image' => 'questions/Yydil5NbkwGCsAVpd15YDs15vrB9SrEGdQcolUdx.png',
            'created_at' => '2026-03-17 11:51:28',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        202 => 
        array (
            'id' => 203,
            'category_id' => 2,
            'question_number' => 2147,
            'question_text' => 'Shenja e trafikut tregon ndalim trafiku në një kahe.',
            'image' => 'questions/UWtKy2XyCvLlK5TkawgwOkYNZrJOBWqv6mOBrbgH.png',
            'created_at' => '2026-03-17 11:52:10',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        203 => 
        array (
            'id' => 204,
            'category_id' => 2,
            'question_number' => 2148,
            'question_text' => 'Shenja e trafikut tregon ndalimin e trafikut në këtë drejtim.',
            'image' => 'questions/2fmVsYNcXge9FgY5Baq6Jr9xCFJmb1sdmk0TEIHq.png',
            'created_at' => '2026-03-17 11:53:11',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        204 => 
        array (
            'id' => 205,
            'category_id' => 2,
            'question_number' => 2149,
            'question_text' => 'Shenja e trafikut tregon anashkalimin nga ana e djathtë.',
            'image' => 'questions/IsCTCvJXpNuorR77peToJCQd9TZPQ2f0S3Mail9h.png',
            'created_at' => '2026-03-17 11:53:48',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        205 => 
        array (
            'id' => 206,
            'category_id' => 2,
            'question_number' => 2150,
            'question_text' => 'Shenja e trafikut tregon ndalim kthimi gjysëmrrethor.',
            'image' => 'questions/t4xSH17rTvlTGgBNw1bL1eASw6UK2TzzRlM62tGZ.png',
            'created_at' => '2026-03-17 11:54:39',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        206 => 
        array (
            'id' => 207,
            'category_id' => 2,
            'question_number' => 2151,
            'question_text' => 'Shenja e trafikut tregon vendin ku lejohet lëvizja drejtë dhe majtas.',
            'image' => 'questions/iQLLL6rPDslUkjAjvS7Z19OtvF8lsnTfTXZGrsCC.png',
            'created_at' => '2026-03-17 11:55:13',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        207 => 
        array (
            'id' => 208,
            'category_id' => 2,
            'question_number' => 2152,
            'question_text' => 'Shenja e trafikut tregon vendin ku lejohet lëvizja drejt dhe djathtas.',
            'image' => 'questions/1UEGqCZBxT3rVEEkToOM2rkRlLybZQ92yQsfASWt.png',
            'created_at' => '2026-03-17 12:03:40',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        208 => 
        array (
            'id' => 209,
            'category_id' => 2,
            'question_number' => 2153,
            'question_text' => 'Shenja e trafikut tregon rrugën ku trafiku zhvillohet në dy kahe.',
            'image' => 'questions/vMaWcz4yUhOluLesbmczarm6PnSeAuuxgELiErjA.png',
            'created_at' => '2026-03-17 12:04:37',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        209 => 
        array (
            'id' => 210,
            'category_id' => 2,
            'question_number' => 2154,
            'question_text' => 'Shenja e trafikut tregon anashkalimin e obliguar djathtas.',
            'image' => 'questions/HhwfYeeqzD9fos733gjHDMyROuPIFurlO98Yscsd.png',
            'created_at' => '2026-03-17 12:05:16',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        210 => 
        array (
            'id' => 211,
            'category_id' => 2,
            'question_number' => 2155,
            'question_text' => 'Shenja e trafikut tregon anashkalimin e obliguar djathtas dhe majtas.',
            'image' => 'questions/oJMIDJpV139n8co0JwPplRL1KHe7to99WZzIyBVG.png',
            'created_at' => '2026-03-17 12:06:13',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        211 => 
        array (
            'id' => 212,
            'category_id' => 2,
            'question_number' => 2156,
            'question_text' => 'Shenja e trafikut tregon kryqëzimin me rrethrrotullim.',
            'image' => 'questions/TmGxHh48R7Td1sVAtYSVkRpsUf3N0G0i4GOYoTeg.png',
            'created_at' => '2026-03-17 12:06:48',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        212 => 
        array (
            'id' => 213,
            'category_id' => 2,
            'question_number' => 2157,
            'question_text' => 'Cila shenjë ndalon trafikun për të gjitha automjetet, përveç motoçikletave pa rimorikio anësore?',
            'image' => 'questions/RllelBDmd7OEU0n8klRcqcjfGc9iomDyseu3u8xU.png',
            'created_at' => '2026-03-17 12:14:05',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        213 => 
        array (
            'id' => 214,
            'category_id' => 2,
            'question_number' => 2158,
        'question_text' => 'Cila shenjë tregon ndalim trafiku për mjetet transportuese (kamiona)?',
            'image' => 'questions/91z3NWpi6NbNog9fLa34vIrCPVjrBh8wtsNNmoO9.png',
            'created_at' => '2026-03-17 12:19:49',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        214 => 
        array (
            'id' => 215,
            'category_id' => 2,
            'question_number' => 2159,
            'question_text' => 'Cila shenjë tregon ndalim trafikun për automjetet të cilat tërheqin mjetet bashkangjitëse?',
            'image' => 'questions/N5eNcGPHmLL3tdrgZ8hiX0MWH0sw6GlGBobgs009.png',
            'created_at' => '2026-03-17 12:23:23',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        215 => 
        array (
            'id' => 216,
            'category_id' => 2,
            'question_number' => 2201,
            'question_text' => 'Shenja e trafikut tregon obligimin e ndezjes së dritave të shkurtëra kur mjeti merr
pjesë në trafik.',
            'image' => 'questions/PHdftIRt0oOR4b0nRVakymVR3VsrkX85LMkTYsEd.png',
            'created_at' => '2026-03-17 12:27:52',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        216 => 
        array (
            'id' => 217,
            'category_id' => 2,
            'question_number' => 2202,
            'question_text' => 'Shenja e trafikut tregon vendkalimin e shënuar për biçiklistë.',
            'image' => 'questions/vQBgoao9Teq5l93c4vWOoThCoy7jX2gx2FGbzrqo.png',
            'created_at' => '2026-03-17 12:31:18',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        217 => 
        array (
            'id' => 218,
            'category_id' => 2,
            'question_number' => 2203,
            'question_text' => 'Shenja e trafikut tregon ndalimin e lëvizjës për biçiklistë.',
            'image' => 'questions/skqIaAnL5FTeYrcK2oUWJ9fhby9FHgrCc5AlONzx.png',
            'created_at' => '2026-03-17 12:32:12',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        218 => 
        array (
            'id' => 219,
            'category_id' => 2,
            'question_number' => 2204,
            'question_text' => 'Shenja e trafikut tregon ndalimin e lëvizjës së fëmijëve në rrugë.',
            'image' => 'questions/d1X5F3xw0aqXgSuSVCVVn5vrNzg54r3Z0pbhSJAN.png',
            'created_at' => '2026-03-17 12:32:46',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        219 => 
        array (
            'id' => 220,
            'category_id' => 2,
            'question_number' => 2205,
            'question_text' => 'Shenja e trafikut tregon shkallët lëvizëse.',
            'image' => 'questions/hS7bpDZ4hdIp0q7jFLaUCtIFr81d0xabu8hgLRFy.png',
            'created_at' => '2026-03-17 12:33:36',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        220 => 
        array (
            'id' => 221,
            'category_id' => 2,
            'question_number' => 2206,
            'question_text' => 'Shenja e trafikut tregon rrugën një kah.',
            'image' => 'questions/dBTuhjZHhEcBZ5cHZ6IBp84rf6dFQcHbvjFmeAlc.png',
            'created_at' => '2026-03-17 12:37:07',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        221 => 
        array (
            'id' => 222,
            'category_id' => 2,
            'question_number' => 2207,
            'question_text' => 'Shenja e trafikut tregon rrugën me dy kahe të lëvizjës.',
            'image' => 'questions/jxxB4oxwltbrvlPwnlXDdvpJyK07Lm52f25Exnf8.png',
            'created_at' => '2026-03-17 12:37:57',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        222 => 
        array (
            'id' => 223,
            'category_id' => 2,
            'question_number' => 2208,
            'question_text' => 'Shenja e trafikut tregon rrugën me përparësi kalimi.',
            'image' => 'questions/tEODa1WeYkliSer02Nzr7qPxQxN6YYH2MSB2Pnd2.png',
            'created_at' => '2026-03-17 12:38:35',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        223 => 
        array (
            'id' => 224,
            'category_id' => 2,
            'question_number' => 2209,
            'question_text' => 'Shenja e trafikut tregon rrugën me përparësi kalimi.',
            'image' => 'questions/mC3GoPtxtr2BTXbDNMkgeoI1wRvpEkUxXAA1evht.png',
            'created_at' => '2026-03-17 12:39:47',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        224 => 
        array (
            'id' => 225,
            'category_id' => 2,
            'question_number' => 2210,
            'question_text' => 'Shenja e trafikut tregon shpejtësinë më të vogël të lejuar.',
            'image' => 'questions/g8C6lJPnVhJe9c5y4JcUA2Aj0qgYCsunKiXi6Edl.png',
            'created_at' => '2026-03-17 12:41:23',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        225 => 
        array (
            'id' => 226,
            'category_id' => 2,
            'question_number' => 2211,
            'question_text' => 'Shenja e trafikut tregon kufizimin maksimal të shpetësisë.',
            'image' => 'questions/VvsKvUaMdytFCya7ef9iGuHgQBoULybr9trWpkHb.png',
            'created_at' => '2026-03-17 12:42:07',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        226 => 
        array (
            'id' => 227,
            'category_id' => 2,
            'question_number' => 2212,
            'question_text' => 'Shenja e trafikut tregon pjesën e rrugës ku ndalohet tejkalimi.',
            'image' => 'questions/IuULSSvxUlyxrkyP8nCfUai0aKzbToE4wr9wubZg.png',
            'created_at' => '2026-03-17 12:43:12',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        227 => 
        array (
            'id' => 228,
            'category_id' => 2,
            'question_number' => 2213,
            'question_text' => 'Shenja e trafikut tregon pjesën e rrugës ku nuk lejohet tejkalimi për kamiona.',
            'image' => 'questions/tPJ2tJzlJZz4C7RMbJ9lUP9KN6czDCLH5EdCGOQa.png',
            'created_at' => '2026-03-17 12:44:01',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        228 => 
        array (
            'id' => 229,
            'category_id' => 2,
            'question_number' => 2214,
            'question_text' => 'Shenja e trafikut tregon vendin ku mbaron kufizimi i shpejtësisë.',
            'image' => 'questions/IwuHTrWeE5BnLWHUZESaJKmbMZSEfFiy3ZRwnx1Z.png',
            'created_at' => '2026-03-17 12:45:11',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        229 => 
        array (
            'id' => 230,
            'category_id' => 2,
            'question_number' => 2215,
            'question_text' => 'Shenja e trafikut tregon vendin ku mbaron shpejtësia më e vogël e lejuar.',
            'image' => 'questions/cWkqfZzVxAeKmzVgmWi0F7FjdlZhQ8tQblLAA0bx.png',
            'created_at' => '2026-03-17 12:45:58',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        230 => 
        array (
            'id' => 231,
            'category_id' => 2,
            'question_number' => 2216,
            'question_text' => 'Shenja e trafikut tregon vendin ku mbaron ndalimi i përdorimit të kamerës.',
            'image' => 'questions/pM19Q2pQjVaV3l1v5qF9UbueYzcyBL7vAGA5clDt.png',
            'created_at' => '2026-03-17 12:58:56',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        231 => 
        array (
            'id' => 232,
            'category_id' => 2,
            'question_number' => 2217,
            'question_text' => 'Shenja e trafikut tregon parkun e lodrave për fëmijë ku luajnë me top.',
            'image' => 'questions/jbJD6uqw1Rj5oMmkM801CtaK0afK6cL8calGmXuq.png',
            'created_at' => '2026-03-17 12:59:36',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        232 => 
        array (
            'id' => 233,
            'category_id' => 2,
            'question_number' => 2218,
            'question_text' => 'Shenja e trafikut tregon mbarimin e zonës së trafikut të qetë.',
            'image' => 'questions/y9fHGcSFoO64eRNztEhj5MnbHOL2ixdwRgDCsThV.png',
            'created_at' => '2026-03-17 13:03:57',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        233 => 
        array (
            'id' => 234,
            'category_id' => 2,
            'question_number' => 2219,
            'question_text' => 'Shenja e trafikut tregon rreshtimin e mjeteve.',
            'image' => 'questions/OI0bfZdpJFNju0oBdXzHjGyO9uRz7Mmb8EpH28d8.png',
            'created_at' => '2026-03-17 13:05:13',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        234 => 
        array (
            'id' => 235,
            'category_id' => 2,
            'question_number' => 2220,
        'question_text' => 'Shenja e trafikut tregon mbylljen (reduktimin) e shiritit të trafikut',
            'image' => 'questions/QhM7NeOGh3rnkrFhezXDXU7lpTC1CucijC51NrNv.png',
            'created_at' => '2026-03-17 13:09:27',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        235 => 
        array (
            'id' => 236,
            'category_id' => 2,
            'question_number' => 2221,
            'question_text' => 'Shenja e trafikut tregon pjesën e rrugës ku nuk lejohet lëvizja me shpejtësinë më të
vogël se 80 km/h.',
            'image' => 'questions/qr7B50V6PzNMRCaJuysOJhzZz6AO5GlwCCkLUABm.png',
            'created_at' => '2026-03-17 13:10:54',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        236 => 
        array (
            'id' => 237,
            'category_id' => 2,
            'question_number' => 2222,
            'question_text' => 'Shenja e trafikut tregon shpejtësinë e rekomanduar.',
            'image' => 'questions/Hvf4RAlEU3v7KFaNenVJIYWXxKZtxl0MvcLtbHLb.png',
            'created_at' => '2026-03-17 13:11:34',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        237 => 
        array (
            'id' => 238,
            'category_id' => 2,
            'question_number' => 2223,
            'question_text' => 'Shenja e trafikut tregon spitalin.',
            'image' => 'questions/eEgPseceoUbCwJBya4CYh1o0f4Ar0v6O0Vx0m294.png',
            'created_at' => '2026-03-17 13:12:06',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        238 => 
        array (
            'id' => 239,
            'category_id' => 2,
            'question_number' => 2224,
            'question_text' => 'Shenja e trafikut tregon Kryqin e Kuq Ndërkombëtar.',
            'image' => 'questions/rkivWp49arYvQnLZbUbb8OulyBnk6Kl7GyHDJ2tt.png',
            'created_at' => '2026-03-17 13:12:46',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        239 => 
        array (
            'id' => 240,
            'category_id' => 2,
            'question_number' => 2225,
            'question_text' => 'Shenja e trafikut tregon vendin ku mbarojnë të gjitha ndalesat në rrugë.',
            'image' => 'questions/8BcbDRjfKlqVMHRdy5HUAlFGxZsDfDPvfd58eor6.png',
            'created_at' => '2026-03-17 13:13:52',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        240 => 
        array (
            'id' => 241,
            'category_id' => 2,
            'question_number' => 2226,
            'question_text' => 'Shenja e trafikut tregon obligimin e posedimit të gomës rezervë.',
            'image' => 'questions/7Ki8TAvrV3lfrUQ9Lc7jBf1HjEgsqW8596NEAMZA.png',
            'created_at' => '2026-03-17 13:16:03',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        241 => 
        array (
            'id' => 242,
            'category_id' => 2,
            'question_number' => 2227,
            'question_text' => 'Shenja e trafikut tregon mbarimin e shtegut për biçikleta.',
            'image' => 'questions/E6LZtRoEYPLqDVleKMZtuEVEbCVj4AJwRs61N7SJ.png',
            'created_at' => '2026-03-17 13:16:38',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        242 => 
        array (
            'id' => 243,
            'category_id' => 2,
            'question_number' => 2228,
            'question_text' => 'Shenja e trafikut tregon fëmijët në rrugë.',
            'image' => 'questions/CT83wTzrxrt66C0MBb9ri6ZnejGBff7OUchE3PAI.png',
            'created_at' => '2026-03-17 13:17:14',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        243 => 
        array (
            'id' => 244,
            'category_id' => 2,
            'question_number' => 2229,
            'question_text' => 'Shenja e trafikut tregon pjesën e rrugës ku ndalohet kalërimi.',
            'image' => 'questions/Etoa5WpqJoB6tVvf8sxyw6pCl2DaBb83nmMnod1y.png',
            'created_at' => '2026-03-17 13:18:01',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        244 => 
        array (
            'id' => 245,
            'category_id' => 2,
            'question_number' => 2230,
            'question_text' => 'Shenja e trafikut tregon zonën e kufizimit të shpejtësisë maksimale.',
            'image' => 'questions/9wKIxQFxIZaYQ3ZOZEIrOyfZ7WZBpi7K6ywe55J1.png',
            'created_at' => '2026-03-17 13:19:07',
            'updated_at' => '2026-03-23 09:23:54',
        ),
        245 => 
        array (
            'id' => 246,
            'category_id' => 2,
            'question_number' => 2231,
            'question_text' => 'Shenja e trafikut tregon ndalimin e trafikut për llojin e caktuar të mjeteve
në autostradë (biçikletave, mopedave,traktorëve...).',
                'image' => 'questions/ZFt9Jz2n3pENopPIZmmr1l1xf4PznAwoKKF6vIxI.png',
                'created_at' => '2026-03-17 13:33:06',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            246 => 
            array (
                'id' => 247,
                'category_id' => 2,
                'question_number' => 2232,
                'question_text' => 'Shenja e trafikut tregon kryqëzimin me rrethrrotullim.',
                'image' => 'questions/GLUzPXMakHPuhm07FdJ7ra3o4G8UPqolPaRcnLs0.png',
                'created_at' => '2026-03-17 13:33:35',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            247 => 
            array (
                'id' => 248,
                'category_id' => 2,
                'question_number' => 2233,
                'question_text' => 'Shenja. e trafikut tregonë përparësin e kalimit në raport me mjetet që vijnë
nga kahu i kundërt.',
                'image' => 'questions/o8Yjm1AOztSk1ZdSNEVcdJ3MwwUynpn60NyUGOzv.png',
                'created_at' => '2026-03-17 13:34:10',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            248 => 
            array (
                'id' => 249,
                'category_id' => 2,
                'question_number' => 2234,
                'question_text' => 'Shenja e trafikut tregon drejtimin e obliguar për Mitrovicë.',
                'image' => 'questions/Nx14eFJLwuS5w7XQyVBukTlW1y7uQ2CDtyxzHcsK.png',
                'created_at' => '2026-03-17 13:35:20',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            249 => 
            array (
                'id' => 250,
                'category_id' => 2,
                'question_number' => 2235,
                'question_text' => 'Shenja e trafikut tregon tunelin.',
                'image' => 'questions/6T5qPP4TpDvagE1TzS5hF6jSOatji8QfrhQQ3FKi.png',
                'created_at' => '2026-03-17 13:36:07',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            250 => 
            array (
                'id' => 251,
                'category_id' => 2,
                'question_number' => 2236,
                'question_text' => 'Shenja e trafikut tregon emrin e portit nëpër të cilin kalon rruga.',
                'image' => 'questions/mUnJyQh4JBTCZL3mzttzXGaWKkpjbzjEejLs4CDT.png',
                'created_at' => '2026-03-17 13:37:10',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            251 => 
            array (
                'id' => 252,
                'category_id' => 2,
                'question_number' => 2237,
                'question_text' => 'Shenja e trafikut tregon rreshtimin e mjeteve në rrugë, sipas emërtimit të
vendbanimeve.',
                'image' => 'questions/7naGPOw6K4SmIwuy8gkJaL5rX2V1vvHaWi9yVvKk.png',
                'created_at' => '2026-03-17 13:38:05',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            252 => 
            array (
                'id' => 253,
                'category_id' => 2,
                'question_number' => 2238,
                'question_text' => 'Shenja e trafikut tregon vendparkimin në rrugë për autobusa.',
                'image' => 'questions/8cOqgcCa5ajEWpByuZyKTAwraySFKc2r8U90tC40.png',
                'created_at' => '2026-03-17 13:39:22',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            253 => 
            array (
                'id' => 254,
                'category_id' => 2,
                'question_number' => 2239,
                'question_text' => 'Shenja e trafkut tregon urën mbi lum.',
                'image' => 'questions/siL02fY3XEv5CIJUxz1SjPHHbIzP3WhP3GXdQj6C.png',
                'created_at' => '2026-03-17 13:40:02',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            254 => 
            array (
                'id' => 255,
                'category_id' => 2,
                'question_number' => 2240,
                'question_text' => 'Shenja e trafikut tregon mbarimin e autostradës.',
                'image' => 'questions/8dGGs1IBe6ZpybWhGafWJGFESRGC3FUzGXSrJbMJ.png',
                'created_at' => '2026-03-17 13:40:41',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            255 => 
            array (
                'id' => 256,
                'category_id' => 2,
                'question_number' => 2241,
            'question_text' => 'Shenja e trafikut tregon shiritin e trafikut për mjetet e transportit publik të udhëtarëve (busi,taxi...).',
                'image' => 'questions/aAs5xSr55X8FM7Ex0xDUQKY4ElAbxi2MbenSv8bf.png',
                'created_at' => '2026-03-17 13:43:29',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            256 => 
            array (
                'id' => 257,
                'category_id' => 2,
                'question_number' => 2242,
                'question_text' => 'Shenja e trafikut tregon pjesën e rrugës ku trafiku zhvillohet në një kah.',
                'image' => 'questions/D1j9dP8K05ewSx5ePk7CB9xemeIiL5wVzttnglag.png',
                'created_at' => '2026-03-17 13:44:19',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            257 => 
            array (
                'id' => 258,
                'category_id' => 2,
                'question_number' => 2243,
                'question_text' => 'Shenja e trafikut tregon rrugën pa dalje.',
                'image' => 'questions/yybC6cEtCYrmmECVrTJE07dtc5zLJPx5A6XI9C9c.png',
                'created_at' => '2026-03-18 08:35:59',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            258 => 
            array (
                'id' => 259,
                'category_id' => 2,
                'question_number' => 2244,
                'question_text' => 'Shenja e trafikut tregon numrin e rrugës ndërkombëtare.',
                'image' => 'questions/zmXXSsdqV9Wccm6kgH1omqC2xr8quhMwCmHUmqR7.png',
                'created_at' => '2026-03-18 08:36:54',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            259 => 
            array (
                'id' => 260,
                'category_id' => 2,
                'question_number' => 2245,
                'question_text' => 'Shenja e trafikut tregon Monumentin historik.',
                'image' => 'questions/yR48V2XcCGP1HF3JRWuHJ48HJ7JmS6Wb6PAa6ESg.png',
                'created_at' => '2026-03-18 08:37:57',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            260 => 
            array (
                'id' => 261,
                'category_id' => 2,
                'question_number' => 2246,
                'question_text' => 'Shenja e trikut tregon Qafëmalin.',
                'image' => 'questions/64S6TjSJjiHFuJjMI9L0u7BqJWbLa3Zhwwx9JkFM.png',
                'created_at' => '2026-03-18 08:38:43',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            261 => 
            array (
                'id' => 262,
                'category_id' => 2,
                'question_number' => 2247,
                'question_text' => 'Shenja e trafikut tregon rrugën rajonale.',
                'image' => 'questions/YHoyL09qtX19IbrPeAU24yDCFDxXdMs1RVMJbpMR.png',
                'created_at' => '2026-03-18 08:39:31',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            262 => 
            array (
                'id' => 263,
                'category_id' => 2,
                'question_number' => 2248,
                'question_text' => 'Shenja e trafikut tregon rrugën ndërkombëtare.',
                'image' => 'questions/AWQSNwhNcUohbuF3D0421mGFWNRTuahgZQpgsvqO.png',
                'created_at' => '2026-03-18 08:40:13',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            263 => 
            array (
                'id' => 264,
                'category_id' => 2,
                'question_number' => 2249,
                'question_text' => 'Shenja e trafikut tregon stacionin për autobusa dhe Taxi.',
                'image' => 'questions/XYwvRk1fk61o5S0RAz4T9fEJotPmH13hNr7our8q.png',
                'created_at' => '2026-03-18 08:40:55',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            264 => 
            array (
                'id' => 265,
                'category_id' => 2,
                'question_number' => 2250,
                'question_text' => 'Shenja e trafikut tregon vendparkimin.',
                'image' => 'questions/B3a9YMJhCQAcXbaymN3zG0EdNYJYYDwgE3qm0vr5.png',
                'created_at' => '2026-03-18 08:42:08',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            265 => 
            array (
                'id' => 266,
                'category_id' => 2,
                'question_number' => 2251,
                'question_text' => 'Shenja e trafikut tregon kohëzgjatjen e parkimit.',
                'image' => 'questions/VPDdkdb4Tr4Yho5TWQ8UROmZKzVnbmy9JCmWNapQ.png',
                'created_at' => '2026-03-18 08:43:09',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            266 => 
            array (
                'id' => 267,
                'category_id' => 2,
                'question_number' => 2252,
                'question_text' => 'Shenja e trafikut tregon ndalim trafiku për vetura.',
                'image' => 'questions/kcIh821VL6W98ftbaJ2yHikoDudiQ6EbwrWzC4CK.png',
                'created_at' => '2026-03-18 08:43:49',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            267 => 
            array (
                'id' => 268,
                'category_id' => 2,
                'question_number' => 2253,
                'question_text' => 'Shenja e trafikut tregon mbarimin e motoudhës.',
                'image' => 'questions/208FuXwTRPgL37eSyPYJyMTi2POXFio4XI8mn1M2.png',
                'created_at' => '2026-03-18 08:44:50',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            268 => 
            array (
                'id' => 269,
                'category_id' => 2,
                'question_number' => 2254,
                'question_text' => 'Shenja e trafikut tregon stacionin e ndihmës së parë.',
                'image' => 'questions/ULkRliIOFY9JHzP8J6wsl1Tcu6wpjN8oomBbmuwc.png',
                'created_at' => '2026-03-18 08:45:35',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            269 => 
            array (
                'id' => 270,
                'category_id' => 2,
                'question_number' => 2255,
                'question_text' => 'Shenja e trafikut tregon vendndaljen për autobus.',
                'image' => 'questions/EfQT50muADzSdAAbv5SClx4BkGfa9ciceTVxASXZ.png',
                'created_at' => '2026-03-18 08:46:14',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            270 => 
            array (
                'id' => 271,
                'category_id' => 2,
                'question_number' => 2256,
                'question_text' => 'Shenja e trafikut tregon vendndaljen për tramvaja.',
                'image' => 'questions/ZuKqlu4a4J2gcOuZyo8MXXRiPBqpVZHdNg2psClz.png',
                'created_at' => '2026-03-18 08:46:45',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            271 => 
            array (
                'id' => 272,
                'category_id' => 2,
                'question_number' => 2257,
                'question_text' => 'Shenja e trafikut tregon zonën e këmbësorëve.',
                'image' => 'questions/BcPflainqh5TWPkUGIRoxPNPFKYVdiRaRONZ8vqF.png',
                'created_at' => '2026-03-18 08:47:25',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            272 => 
            array (
                'id' => 273,
                'category_id' => 2,
                'question_number' => 2258,
                'question_text' => ' Shenja e trafikut tregon vendndaljen e autobusëve.',
                'image' => 'questions/GSAk73PuAsdmbsbz71SGQhuYl2fROC7Rj4nL8NkO.png',
                'created_at' => '2026-03-18 08:48:11',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            273 => 
            array (
                'id' => 274,
                'category_id' => 2,
                'question_number' => 2259,
                'question_text' => 'Shenja e trafikut tregon rrugën pa dalje.',
                'image' => 'questions/cMzYVFQMl4BgIrvEa78tJx5CfBusu8OLrKgeMDtP.png',
                'created_at' => '2026-03-18 08:48:42',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            274 => 
            array (
                'id' => 275,
                'category_id' => 2,
                'question_number' => 2260,
                'question_text' => 'Shenja e trafikut tregon mbarimin e zonës së shkollës.',
                'image' => 'questions/P1KIZ3D1EoSInVkg4voD4zIXLvlgMQbTLxxeDyz6.png',
                'created_at' => '2026-03-18 08:49:20',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            275 => 
            array (
                'id' => 276,
                'category_id' => 2,
                'question_number' => 2261,
                'question_text' => 'Shenja e trafikut tregon kthimin majtas inderekt.',
                'image' => 'questions/UVi8DGPAkUZtDkSWKbVNkVqOj2y9d2UmCpe0IeTx.png',
                'created_at' => '2026-03-18 08:50:15',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            276 => 
            array (
                'id' => 277,
                'category_id' => 2,
                'question_number' => 2262,
                'question_text' => 'Shenja e trafikut tregon vendkalimin për këmbësorë dhe biçiklistë.',
                'image' => 'questions/XsN3Rj9N1FXQuSLEcCakQ3Nb3kwnDMIv9vXYwIk5.png',
                'created_at' => '2026-03-18 08:51:08',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            277 => 
            array (
                'id' => 278,
                'category_id' => 2,
                'question_number' => 2301,
                'question_text' => 'A ju lejohet këmbësorëve kalimi i rrugës sipas dritës në semafor?',
                'image' => 'questions/WYTaa36Cdnan8AGq6jTGbTA9O94LN7vJ8FykgyO3.png',
                'created_at' => '2026-03-18 08:52:02',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            278 => 
            array (
                'id' => 279,
                'category_id' => 2,
                'question_number' => 2302,
                'question_text' => 'Çka tregon drita e semaforit si në foto?',
                'image' => 'questions/kP6cYatddlJbTU39BXkQlJGKlyJaTqYTYXJMICk2.png',
                'created_at' => '2026-03-18 08:53:01',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            279 => 
            array (
                'id' => 280,
                'category_id' => 2,
                'question_number' => 2303,
                'question_text' => 'Çka duhet të keni parasysh në këtë situatë?',
                'image' => 'questions/KjVPGdMoba5WneOJMYIR5z1ytWmNEfrQdfdnbsrC.png',
                'created_at' => '2026-03-18 08:54:21',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            280 => 
            array (
                'id' => 281,
                'category_id' => 2,
                'question_number' => 2304,
                'question_text' => 'Çfarë domethënie ka drita e verdhë e pandërprer në samafor?',
                'image' => 'questions/Cj8hVdjfEakPhnORt28xEFLlPkwqEjhrBlM7oeaN.png',
                'created_at' => '2026-03-18 08:55:19',
                'updated_at' => '2026-03-23 09:23:54',
            ),
            281 => 
            array (
                'id' => 282,
                'category_id' => 2,
                'question_number' => 2305,
                'question_text' => 'Çfarë domethënie ka drita e gjelbër
vezulluese (me ndërprerje) në semafor',
                    'image' => 'questions/0Op5Qhx6hcN3dDwGovidDLQBllonzv5CkDuAOFiU.png',
                    'created_at' => '2026-03-18 08:56:19',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                282 => 
                array (
                    'id' => 283,
                    'category_id' => 2,
                    'question_number' => 2307,
                    'question_text' => 'Cila shenjë ndriçuese tregon shiritin e lirë për lëvizje?',
                    'image' => 'questions/8mR8jZzty6I7GtHiWC20NV7LIABPPx6KcSqQRKKP.png',
                    'created_at' => '2026-03-18 09:04:17',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                283 => 
                array (
                    'id' => 284,
                    'category_id' => 2,
                    'question_number' => 2308,
                    'question_text' => 'Cila shenjë ndriçuese tregon ndërrimin e shiritin e trafikut?',
                    'image' => 'questions/L6AExlovAhlpaNfvXPhTVTz0WYae0KXubTjtwe20.png',
                    'created_at' => '2026-03-18 09:05:40',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                284 => 
                array (
                    'id' => 285,
                    'category_id' => 2,
                    'question_number' => 2309,
                    'question_text' => 'Cila shenjë ndriçuese tregon ndalimin e trafikut nëpër shiritin e trafikut?',
                    'image' => 'questions/mkaj2TeeDEgStA0TxBtoc92RvnUeIy7SnmiKkAkh.png',
                    'created_at' => '2026-03-18 09:06:50',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                285 => 
                array (
                    'id' => 286,
                    'category_id' => 3,
                    'question_number' => 2401,
                    'question_text' => 'Çfarë tregon pozita e policit?',
                    'image' => 'questions/HYvWSDkyaNAXgyi18HbjR5wj4YqFdjP76Hkl3SzJ.png',
                    'created_at' => '2026-03-18 09:07:53',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                286 => 
                array (
                    'id' => 287,
                    'category_id' => 3,
                    'question_number' => 2402,
                    'question_text' => 'Cilët pjesmarrës në trafik e kanë kalimin e lirë sipas
pozitës së policit?',
                    'image' => 'questions/z6RgBDD3w88STkHMYDvhtEBbhEyyPllKhjoOy0DI.png',
                    'created_at' => '2026-03-18 09:08:47',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                287 => 
                array (
                    'id' => 288,
                    'category_id' => 3,
                    'question_number' => 4003,
                    'question_text' => 'Çfarë do të thotë dora e ngritur lartë e policit?',
                    'image' => 'questions/RUbeMh4sY8PZdjGnimk0pO5qUxoZ6bx05aDxbYn3.png',
                    'created_at' => '2026-03-18 09:16:00',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                288 => 
                array (
                    'id' => 289,
                    'category_id' => 3,
                    'question_number' => 2404,
                    'question_text' => 'Si do të veproni kur ju tejkalon, përballëkalon mjeti
si në foto?',
                    'image' => 'questions/IpXo0DeP0qB8fPua9JWWT3dRANtzfSkES4IX6bI0.png',
                    'created_at' => '2026-03-18 09:17:08',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                289 => 
                array (
                    'id' => 290,
                    'category_id' => 3,
                    'question_number' => 2405,
                    'question_text' => 'Çfarë do të thotë dora e ngritur lartë e policit si në foto?',
                    'image' => 'questions/xKUrS1jFNZBsqBfeW7cK9l2jvDXePbd2DZOv0AGQ.png',
                    'created_at' => '2026-03-18 09:18:31',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                290 => 
                array (
                    'id' => 291,
                    'category_id' => 3,
                    'question_number' => 2406,
                    'question_text' => 'Cilët pjesëmarrës e kanë kalimin e lirë sipas pozitës së policit?',
                    'image' => 'questions/kNj70qnSUuy1hJzvG7wCOmbXPtO4CfgtRLewhOeU.png',
                    'created_at' => '2026-03-18 09:20:50',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                291 => 
                array (
                    'id' => 292,
                    'category_id' => 3,
                    'question_number' => 2407,
                    'question_text' => 'Çfarë tregon pozita e policit?',
                    'image' => 'questions/F0JSTZGVjI2NXO8Ic01zC27OgWlvxbhUuCObwOUh.png',
                    'created_at' => '2026-03-18 09:21:36',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                292 => 
                array (
                    'id' => 293,
                    'category_id' => 3,
                    'question_number' => 2408,
                    'question_text' => 'Në cilat drejtime ju ndalohet të lëvizni sipas
pozitës së policit?',
                    'image' => 'questions/u6N3dQWvrtfslL4Ajn54VSufc01JT9pZNlW6v7Hj.png',
                    'created_at' => '2026-03-18 09:22:32',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                293 => 
                array (
                    'id' => 294,
                    'category_id' => 4,
                    'question_number' => 2501,
                    'question_text' => 'Çfarë paraqet vija e ndërprerë në rrugë?',
                    'image' => 'questions/IjYhq79xhCtLzbAFi4Cd4B0LKOgSWgUsNMX7dSIL.png',
                    'created_at' => '2026-03-18 09:27:19',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                294 => 
                array (
                    'id' => 295,
                    'category_id' => 4,
                    'question_number' => 2502,
                    'question_text' => 'Çfarë paraqet vija e plotë në rrugë?',
                    'image' => 'questions/hVldwpXqxVeXTgZu1HQXurSxn0W2cnQGVSjowOct.png',
                    'created_at' => '2026-03-18 09:28:05',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                295 => 
                array (
                    'id' => 296,
                    'category_id' => 4,
                    'question_number' => 2503,
                    'question_text' => 'Çfarë paraqet vija e dyfishtë e kombinuar?',
                    'image' => 'questions/oCPak5MP9nSWRKzPKIfk3EolRv8035uKnEqfd4lc.png',
                    'created_at' => '2026-03-18 09:29:22',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                296 => 
                array (
                    'id' => 297,
                    'category_id' => 4,
                    'question_number' => 2504,
                    'question_text' => 'Çfar paraqet vija e dyfishtë e plotë?',
                    'image' => 'questions/cnzEoiF1SJoe9g84XPW2UqY12mvckuxfSKn7o3mt.png',
                    'created_at' => '2026-03-18 09:30:25',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                297 => 
                array (
                    'id' => 298,
                    'category_id' => 4,
                    'question_number' => 2505,
                    'question_text' => 'Si do të veproni në situatën si në foto?',
                    'image' => 'questions/ZeOvFjRQrJthyrEaHzBCvKTJIjWF1ChmoXGPX9iN.png',
                    'created_at' => '2026-03-18 09:32:00',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                298 => 
                array (
                    'id' => 299,
                    'category_id' => 4,
                    'question_number' => 2506,
                    'question_text' => 'Si do të veproni në situatën si në foto?',
                    'image' => 'questions/2bl7V6UZ1P9ZXgQU9fB02ELSr89zFvaXIIv2c3yi.png',
                    'created_at' => '2026-03-18 09:32:48',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                299 => 
                array (
                    'id' => 300,
                    'category_id' => 4,
                    'question_number' => 2507,
                    'question_text' => 'Çfarë paraqet vija e dyfishtë e kombinuar?',
                    'image' => 'questions/iHWMsTwX9GRI3wVNun9wzDWo3IHGTSeoc6Km1cQZ.png',
                    'created_at' => '2026-03-18 09:33:32',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                300 => 
                array (
                    'id' => 301,
                    'category_id' => 4,
                    'question_number' => 2508,
                    'question_text' => 'Çfarë paraqet vija e ndërprerë në rrugë?',
                    'image' => 'questions/yAUc70gb52yJF1F06I0AJ4YjBy78vo6F4x2Oeqc3.png',
                    'created_at' => '2026-03-18 09:34:16',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                301 => 
                array (
                    'id' => 302,
                    'category_id' => 5,
                    'question_number' => 3001,
                    'question_text' => 'Distanca e sigurisë ndërmjet mjeteve gjatë ngasjes
duhet rritur dukshëm nëse rruga është e terur.',
                    'image' => 'questions/dvguSQkbGALeIEFL1GuF3lLJOSAzs549eiUHmxIq.png',
                    'created_at' => '2026-03-18 09:36:05',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                302 => 
                array (
                    'id' => 303,
                    'category_id' => 5,
                    'question_number' => 3002,
                    'question_text' => 'Biçiklisti duhet të ketë rroba reflektuese apo ndonjë
burim drite, gjatë ngasjes në rrugë me dukshmëri të
dobësuar.',
                    'image' => 'questions/FZ97yHyISsI4dCEMSx9PNW2XPZWfXtmlNmPqHeQF.png',
                    'created_at' => '2026-03-18 09:36:42',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                303 => 
                array (
                    'id' => 304,
                    'category_id' => 5,
                    'question_number' => 3003,
                    'question_text' => 'Shoferit i lejohet ta ndalë veturën në vendkalim të
këmbësorëve për arsye të bllokadës në trafi',
                    'image' => 'questions/wAxwpIf67fQde0ZNelw7lQahSbXC2IeNpm3ZoZgn.png',
                    'created_at' => '2026-03-18 09:37:17',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                304 => 
                array (
                    'id' => 305,
                    'category_id' => 5,
                    'question_number' => 3004,
                    'question_text' => 'Rruga ka dy shirita të trafikut në një kah të lëvizjës,
lejohet tejkalimi në këtë situatë.',
                    'image' => 'questions/CYDB9gdmNWSaZJXDqYp4GfO3Tl94NagMHVCGbdEG.png',
                    'created_at' => '2026-03-18 09:38:09',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                305 => 
                array (
                    'id' => 306,
                    'category_id' => 5,
                    'question_number' => 3005,
                    'question_text' => 'Distanca e sigurisë ndërmjet automjeteve gjatë
ngasjes jashtë vendbanimit duhet të jetë së paku 2 sekonda.',
                    'image' => 'questions/YrFx7zzFAu2W7sSyC5QvUriONRIPVkbgeALWBM5b.png',
                    'created_at' => '2026-03-18 09:55:24',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                306 => 
                array (
                    'id' => 307,
                    'category_id' => 5,
                    'question_number' => 3006,
                    'question_text' => 'Në këtë situatë nga shenja fillon rruga ku trafiku zhvillohet në dy kah.',
                    'image' => 'questions/ZcgnlphSfQNoCWDrFAGLIv6qHIzMvQSwRy3o720C.png',
                    'created_at' => '2026-03-18 09:56:35',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                307 => 
                array (
                    'id' => 308,
                    'category_id' => 5,
                    'question_number' => 3007,
                    'question_text' => 'Në këtë situatë zgjatet koha e reagimit dhe mund të
mos vërehet rreziku në trafik.',
                    'image' => 'questions/lfkfKhvjT4qjEIt56xLxRKGrCilEXn1Acz93PqB5.png',
                    'created_at' => '2026-03-18 09:57:32',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                308 => 
                array (
                    'id' => 309,
                    'category_id' => 5,
                    'question_number' => 3008,
                    'question_text' => 'Kthimi gjysëmrrethor lejohet në këtë situatë.',
                    'image' => 'questions/XmFRpYXrav7M4PIgY9LiwpDYXQdhQa9xpiPlNORW.png',
                    'created_at' => '2026-03-18 09:58:24',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                309 => 
                array (
                    'id' => 310,
                    'category_id' => 5,
                    'question_number' => 3009,
                    'question_text' => 'Tufat e dritave të gjata e ndriqojnë rrugën në gjatësi
së paku 40-80 m.',
                    'image' => 'questions/PtIt0ok9hdL6FC9SzDNPYKkeMObcmzW8D0xa8Wct.png',
                    'created_at' => '2026-03-18 09:59:09',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                310 => 
                array (
                    'id' => 311,
                    'category_id' => 5,
                    'question_number' => 3010,
                    'question_text' => 'Gjatë ndezjes së cigarës mund të vijë deri te situatat e
rrezikshme në trafik dhe zgjatet koha e reagimit.',
                    'image' => 'questions/hngBXf9sKuib6E1kbLPD1FxQSBDdv4vKwIQXw8ff.png',
                    'created_at' => '2026-03-18 09:59:49',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                311 => 
                array (
                    'id' => 312,
                    'category_id' => 5,
                    'question_number' => 3011,
                    'question_text' => 'Këmbësori lëviz drejt jashtë vendbanimit, në anën e
djathtë të rrugës në kah të lëvizjes.',
                    'image' => 'questions/LseVBC7sL7fcNAyWAzSbi259wdYjnHpF2N76FZub.png',
                    'created_at' => '2026-03-18 10:00:28',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                312 => 
                array (
                    'id' => 313,
                    'category_id' => 5,
                    'question_number' => 3012,
                    'question_text' => 'Nuk lejohet ndalja dhe parkimi në këtë situatë.',
                    'image' => 'questions/m5b12KUk7oygwMvBOso7MhcPyYOFE5tqXdZomlOP.png',
                    'created_at' => '2026-03-18 10:01:41',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                313 => 
                array (
                    'id' => 314,
                    'category_id' => 5,
                    'question_number' => 3013,
                    'question_text' => 'Para se të hyni nga rruga e dheut në rrugën me asfalt
duhet ta largoni baltën nga rrotat.',
                    'image' => 'questions/R1a6kqPUy13NGzLJBEIb5x9LPK7KCuXbDRPsogHz.png',
                    'created_at' => '2026-03-18 10:02:23',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                314 => 
                array (
                    'id' => 315,
                    'category_id' => 5,
                    'question_number' => 3014,
                    'question_text' => 'Këmbësori është duke lëvizur drejt jashtë vendbanimit,
në anën e majtë të rrugës në kah të lëvizjes.',
                    'image' => 'questions/C1m8V5zx6jBBPglSUXuKaOzQ7SJgfN1hPaojkJhv.png',
                    'created_at' => '2026-03-18 10:03:10',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                315 => 
                array (
                    'id' => 316,
                    'category_id' => 5,
                    'question_number' => 3015,
                    'question_text' => 'Shenja e trafikut tregon drejtimin e obliguar për Kosovë.',
                    'image' => 'questions/iJF4Tsl17KEeEysx7cSkAMwXGHUjTOfAbYuCVt4t.png',
                    'created_at' => '2026-03-18 10:03:50',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                316 => 
                array (
                    'id' => 317,
                    'category_id' => 5,
                    'question_number' => 3016,
                    'question_text' => 'Rruga prej momentit të shtypjes së pedaljes se frenimit
e deri te ndalja e plotë e automjetit quhet rruga e ndaljes.',
                    'image' => 'questions/sz2HcuJxe91LOkZt3MmTqD8WF3H8VxNiJJ3E4j8w.png',
                    'created_at' => '2026-03-18 10:04:23',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                317 => 
                array (
                    'id' => 318,
                    'category_id' => 5,
                    'question_number' => 3017,
                    'question_text' => 'Në këtë situatë, shoferi do t’i mundësoj kalimin e
rrugës këmbësorit edhe pse lëvizë në mënyrë jo të drejtë.',
                    'image' => 'questions/UtQMAhMVJfd0vRJ6gOKS0LX4tjL1QhsMyDw2Uyft.png',
                    'created_at' => '2026-03-18 10:05:01',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                318 => 
                array (
                    'id' => 319,
                    'category_id' => 5,
                    'question_number' => 3018,
                    'question_text' => 'Në këtë situatë më lejohet ndërrimi i shiritit për kthim
majtas nëse nuk ka automjete nga prapa.',
                    'image' => 'questions/gKxZdHXU76qXNLl7vvUH6HgL1Nmr0U6iXK0FYQdW.png',
                    'created_at' => '2026-03-18 10:05:48',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                319 => 
                array (
                    'id' => 320,
                    'category_id' => 5,
                    'question_number' => 3019,
                    'question_text' => 'Lejohet tejkalimi i traktorit në këtë situatë edhe pse
është vija e plotë gjatësore në rrugë.',
                    'image' => 'questions/6b7nIxTK15y1r3zapQIWgZks5zwIAonWuyHVJTqY.png',
                    'created_at' => '2026-03-18 10:06:35',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                320 => 
                array (
                    'id' => 321,
                    'category_id' => 5,
                    'question_number' => 3020,
                    'question_text' => 'Këmbësori mund ta kaloj rrugën jashtë vendbanimit,
nëse vendkalimi i tyre është më larg se 100 metra.',
                    'image' => 'questions/hRWMVbmq8Bs7jsXU55PqIRaI4s4PipkVBcqrjtPm.png',
                    'created_at' => '2026-03-18 10:07:28',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                321 => 
                array (
                    'id' => 322,
                    'category_id' => 5,
                    'question_number' => 3021,
                    'question_text' => 'Në këtë situatë, do të ndali veturën dhe do të
vëzhgoi sjelljet (veprimet) e fëmiut me biçikletë.',
                        'image' => 'questions/FB5J4ziGTKoIXSnjLwgIDb8dsE0hrPTC8FvUUv5h.png',
                        'created_at' => '2026-03-18 10:14:12',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    322 => 
                    array (
                        'id' => 323,
                        'category_id' => 5,
                        'question_number' => 3022,
                        'question_text' => 'Këmbësorët mund të kalojnë gjithmonë rrugën brenda
vendbanimit ku nuk ka vendkalim të këmbësorëve.',
                        'image' => 'questions/SeQkFhRQE6QKB4pCbFryQaz2YExRnOBRuFriedN5.png',
                        'created_at' => '2026-03-18 10:14:49',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    323 => 
                    array (
                        'id' => 324,
                        'category_id' => 5,
                        'question_number' => 3023,
                        'question_text' => 'Personat e moshuar konsiderohen si pjesmarrës të
rrezikuar në trafik sepse lëvizja e tyre janë të ngadalshme.',
                        'image' => 'questions/sYUa0CzeqYBwYKgmquySTRWsWNbz9SQlbeA5h461.png',
                        'created_at' => '2026-03-18 10:15:34',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    324 => 
                    array (
                        'id' => 325,
                        'category_id' => 5,
                        'question_number' => 3024,
                        'question_text' => 'Automjeti i cili drejtohet nga personi me aftësi të
kufizuar duhet të shënohet me shenjë përkatëse.',
                        'image' => 'questions/DwzL3QIOv9fo1UhuiqCEGsXcA5pVlqFIH5S8MnBQ.png',
                        'created_at' => '2026-03-18 10:17:05',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    325 => 
                    array (
                        'id' => 326,
                        'category_id' => 5,
                        'question_number' => 3025,
                        'question_text' => 'Brenda dhe jashtë vendbanimit ndalohet ndalja dhe
parkimi i mjeteve në vendndalje të autobusëve.',
                        'image' => 'questions/iSMghbeMLvHhgsSW6gl7sMEi3YjFjrgotLge7WMO.png',
                        'created_at' => '2026-03-18 12:21:51',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    326 => 
                    array (
                        'id' => 327,
                        'category_id' => 5,
                        'question_number' => 3026,
                        'question_text' => 'Ndalohet ndalja dhe parkimi në këtë situatë.',
                        'image' => 'questions/0D5JWNRBVJ4zVCZhAf93oKXnuAnEbgI8QOzhfHHG.png',
                        'created_at' => '2026-03-18 12:23:32',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    327 => 
                    array (
                        'id' => 328,
                        'category_id' => 5,
                        'question_number' => 3027,
                        'question_text' => 'Lejohet kthimi gjysëmrrethor në tunel, nëse vija
gjatësore është e ndërprerë.',
                        'image' => 'questions/lvee2DryX0kc6JdqUd0jFzyoBojF9wjzIvVEbP8x.png',
                        'created_at' => '2026-03-18 12:24:16',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    328 => 
                    array (
                        'id' => 329,
                        'category_id' => 5,
                        'question_number' => 3028,
                        'question_text' => 'Do t’ja mundësoj kalimin e rrugës personit të verbër (i cili
mban shkopin e bardhë) jashtë vendkalimit për këmbësorë.',
                        'image' => 'questions/117UaCK4u7gW3uNF8SQyAGo2l2l0L1cslCHhxlWX.png',
                        'created_at' => '2026-03-18 12:25:13',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    329 => 
                    array (
                        'id' => 330,
                        'category_id' => 5,
                        'question_number' => 3029,
                        'question_text' => ' Kolona e organizuar e këmbësorve është duke lëvizur
jo drejtë në kahun e djathtë të lëvizjës.',
                        'image' => 'questions/Vr3V5T6GEluzK4qw7LRH2eoIw4UBBpuwy4R7ZZso.png',
                        'created_at' => '2026-03-18 12:26:07',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    330 => 
                    array (
                        'id' => 331,
                        'category_id' => 5,
                        'question_number' => 3030,
                        'question_text' => 'Lejohet tejkalimi në këtë situatë, nëse kamioni lëvizë
shumë ngadalë.',
                        'image' => 'questions/EcvRfCP7HTgUmKP6aqnPfvvc0VGk3bTpPVqGSDHe.png',
                        'created_at' => '2026-03-18 12:26:46',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    331 => 
                    array (
                        'id' => 332,
                        'category_id' => 5,
                        'question_number' => 3031,
                        'question_text' => 'Te kjo situatë në trafik ka ardhë nga mos kujdesi i shoferit
gjatë hapjes së derës së veturës (mos shikimi pasqyre dhe
këndin e vdekur).',
                        'image' => 'questions/nxIy6ZTTCDAtXdYyy79qgDRIJuSV945SCvdio65z.png',
                        'created_at' => '2026-03-18 12:27:20',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    332 => 
                    array (
                        'id' => 333,
                        'category_id' => 5,
                        'question_number' => 3032,
                        'question_text' => 'Në pjerrtësi gjatësore jeni takuar me traktorin. Për ta
mundësuar përballkalimin ju duhet të lëvizini prapa.',
                        'image' => 'questions/o75yZ7tmEY85DLbeY1Estm9WTlHXatxGdQnceSyB.png',
                        'created_at' => '2026-03-18 12:28:12',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    333 => 
                    array (
                        'id' => 334,
                        'category_id' => 5,
                        'question_number' => 3033,
                        'question_text' => 'Lejohet parkimi i veturës nëse i ka të ndezur të gjitha
treguesit të drejtimit.',
                        'image' => 'questions/U12wIBF7qoPLJomABiflv9URQFLYtYZ3OniQH63i.png',
                        'created_at' => '2026-03-18 12:29:18',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    334 => 
                    array (
                        'id' => 335,
                        'category_id' => 5,
                        'question_number' => 3034,
                        'question_text' => 'Lejohet tejkalimi i dy mjeteve njëkohësisht.',
                        'image' => 'questions/zGfdC5UWR7Hb4yb4eAuwePKOer0qTF6fOEwYqc5q.png',
                        'created_at' => '2026-03-18 12:29:48',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    335 => 
                    array (
                        'id' => 336,
                        'category_id' => 5,
                        'question_number' => 3035,
                        'question_text' => ' Lejohet tejkalimi i tramvajit nga ana e djathtë dhe e majtë
në këtë situatë.',
                        'image' => 'questions/JqCRlJ26hxKQy8YOkUuLBDcvAcLQyDOrHwtzMLp3.png',
                        'created_at' => '2026-03-18 12:30:27',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    336 => 
                    array (
                        'id' => 337,
                        'category_id' => 5,
                        'question_number' => 3036,
                        'question_text' => 'Shenja e trafikut me tabelë plotësues ndalon trafikun
në dy kahje të lëvizjës prej 20-24h.',
                        'image' => 'questions/jBfJCPocWFggIOFfyXRxkgV8VOyvR1LpH4n8fqqd.png',
                        'created_at' => '2026-03-18 12:31:25',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    337 => 
                    array (
                        'id' => 338,
                        'category_id' => 5,
                        'question_number' => 3037,
                        'question_text' => ' Në këtë situatë, lejohet tejkalimi nga dy anët pasi vija
gjatësore është e ndërprerë.',
                        'image' => 'questions/jcQee74tFl0YDIUdF48HBMNeMKdAUD69FyBrkxGJ.png',
                        'created_at' => '2026-03-18 12:32:51',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    338 => 
                    array (
                        'id' => 339,
                        'category_id' => 5,
                        'question_number' => 3038,
                        'question_text' => 'Shenja e trafikut tregon ngushtimin e
pjesës së rrugës në kënd të drejtë nga dy anët.',
                        'image' => 'questions/rpbWhEbiywO4addApW2zM8woetOI7OApytX7HPzs.png',
                        'created_at' => '2026-03-18 12:33:49',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    339 => 
                    array (
                        'id' => 340,
                        'category_id' => 5,
                        'question_number' => 3039,
                        'question_text' => 'Në distancë më të vogël se 5 metra para vendkalimit
për këmbësorë ndalohet ndalja dhe parkimi i mjetit.',
                        'image' => 'questions/5FzuimhoxZf099KvqDkQjd9lppfNpSO4IqXX7QOv.png',
                        'created_at' => '2026-03-18 12:34:29',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    340 => 
                    array (
                        'id' => 341,
                        'category_id' => 5,
                        'question_number' => 3040,
                        'question_text' => 'Lejohet tejkalimi në këtë situatë për shkak vijës
gjatësore të ndërprerë sipas rregullave (shikimi pasqyre,
këndi i vdekur dhe sinjalizimi).',
                        'image' => 'questions/t1LTT67Td0wJ9QyC8aW1kW7vBANKBvpAna88D1X2.png',
                        'created_at' => '2026-03-18 12:35:07',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    341 => 
                    array (
                        'id' => 342,
                        'category_id' => 5,
                        'question_number' => 3041,
                        'question_text' => 'Në këtë situatë lejohet parkimi i mjetit deri 15 minuta.',
                        'image' => 'questions/DdmJW3vKBPTK90ldDlosVcv5KDFUJZL6F1aqc1TF.png',
                        'created_at' => '2026-03-18 12:35:59',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    342 => 
                    array (
                        'id' => 343,
                        'category_id' => 5,
                        'question_number' => 3042,
                        'question_text' => 'Në këtë situatë do të rriti kujdesin po i afrohemi qafë
malit (kurriz rruge) mund të hasi në ndonjë mjet duke lëvizur
në shiritin tim.',
                        'image' => 'questions/oAHdwF30V1GhZYvf92bzifBMhfGP6Y0N4EZTJnm6.png',
                        'created_at' => '2026-03-18 12:37:17',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    343 => 
                    array (
                        'id' => 344,
                        'category_id' => 5,
                        'question_number' => 3043,
                        'question_text' => 'Në këtë situatë lejohet tejkalimi i motokultivatorit.',
                        'image' => 'questions/Noc6MZKwL2tiUTbIsJev9Z9Y5nANSdClZctI5rZb.png',
                        'created_at' => '2026-03-18 12:38:00',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    344 => 
                    array (
                        'id' => 345,
                        'category_id' => 5,
                        'question_number' => 3044,
                        'question_text' => 'Nëse mjeti parkohet në përpjetëze, rrotat e para të
veturës kthehen kah mesi i rrugës (majtas).',
                            'image' => 'questions/jnFQhDRT0aCS1vMieAnyZMCAKZfkjqd6YRa5Cylq.png',
                            'created_at' => '2026-03-18 12:38:27',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        345 => 
                        array (
                            'id' => 346,
                            'category_id' => 5,
                            'question_number' => 3045,
                            'question_text' => 'Nuk lejohet tejkalimi në këtë situatë.',
                            'image' => 'questions/RUcpin2W0gYg0qScBqHVqZezTCaALzmloASpEUHh.png',
                            'created_at' => '2026-03-18 12:39:34',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        346 => 
                        array (
                            'id' => 347,
                            'category_id' => 5,
                            'question_number' => 3046,
                            'question_text' => 'Lejohet anashkalimi, vetëm nga ana e djathtë.',
                            'image' => 'questions/i7PPCR8MoHCn3FhzHi6k7v6RFoL5xpk5lAbihZPs.png',
                            'created_at' => '2026-03-18 12:40:10',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        347 => 
                        array (
                            'id' => 348,
                            'category_id' => 5,
                            'question_number' => 3047,
                            'question_text' => 'Shpejtësia e lejuar gjatë tërheqjes së veturës në
defekt është 60km/h.',
                            'image' => 'questions/dO1tNXrvTWjXihNCjKppEDQUI22VaiBoqhIqKoxL.png',
                            'created_at' => '2026-03-18 12:40:45',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        348 => 
                        array (
                            'id' => 349,
                            'category_id' => 5,
                            'question_number' => 3048,
                            'question_text' => 'Rruga prej momentit të vërejtjes së rrezikut deri te
shtypja e pedaljes se frenimit quhet rruga e reagimit.',
                            'image' => 'questions/3qAgpWwjXwvNfFm32wwZZJ57XaOrc2Yjq7vkAcFU.png',
                            'created_at' => '2026-03-18 12:41:25',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        349 => 
                        array (
                            'id' => 350,
                            'category_id' => 5,
                            'question_number' => 3049,
                            'question_text' => 'Vendkalimi hekurudhor është i rregulluar me
shenja ndriçuese dhe duhet të ndalem.',
                            'image' => 'questions/xdi1qX1T0h1PmwzqF67fINxlhz7USqAl4dVfMX63.png',
                            'created_at' => '2026-03-18 12:42:19',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        350 => 
                        array (
                            'id' => 351,
                            'category_id' => 5,
                            'question_number' => 3050,
                            'question_text' => 'Nuk lejohet tejkalimi në këtë situatë.',
                            'image' => 'questions/HzYapiLounRdBOt7u7OdYb3ptmyfIVcCt2GExfgR.png',
                            'created_at' => '2026-03-18 12:42:51',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        351 => 
                        array (
                            'id' => 352,
                            'category_id' => 5,
                            'question_number' => 3051,
                            'question_text' => 'Lejohet ndalje ose parkimi i automjetit në fushën për
orjentimin e trafikut rrugor.',
                            'image' => 'questions/bSLNNLiUdsjr3Y19UZifqaUzH0JC0fHyYdXCHjKO.png',
                            'created_at' => '2026-03-18 12:47:37',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        352 => 
                        array (
                            'id' => 353,
                            'category_id' => 5,
                            'question_number' => 3052,
                            'question_text' => 'Gjatë ngasjes do të kujdesem se mund të hasi në
kolonën e ndaluar në rrugë.',
                            'image' => 'questions/b5aPuz67Bvs8vRtxqHUXtgbJR56pgclWQG0s8239.png',
                            'created_at' => '2026-03-18 12:48:15',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        353 => 
                        array (
                            'id' => 354,
                            'category_id' => 5,
                            'question_number' => 3053,
                            'question_text' => 'Nëse nuk pengohet trafiku, shoferit të veturës i
lejohet rritja e shpejtësisë deri sa jeni duke e tejkaluar.',
                            'image' => 'questions/d09U639kccNxIsYW6bUK9crE0lSfW4JyfTcfXVvH.png',
                            'created_at' => '2026-03-18 12:48:50',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        354 => 
                        array (
                            'id' => 355,
                            'category_id' => 5,
                            'question_number' => 3054,
                            'question_text' => 'Në këtë situatë do të rris distancën anësore të
sigurisë, pasi që këmbësori mund ta kaloj rrugën.',
                            'image' => 'questions/6fRAG2M6c7DVO2zbwiS2EvwrY4GhvZWdSO5iihgQ.png',
                            'created_at' => '2026-03-18 12:49:30',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        355 => 
                        array (
                            'id' => 356,
                            'category_id' => 5,
                            'question_number' => 3055,
                            'question_text' => 'Ngarkesa në veturë mund të kalojë pjesën e përparme
deri 1.5m.',
                            'image' => 'questions/h4GpcQ19B3ZCvP8A21Jn4MSsQBIYxTzMVOLRjIZw.png',
                            'created_at' => '2026-03-18 12:50:07',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        356 => 
                        array (
                            'id' => 357,
                            'category_id' => 5,
                            'question_number' => 3056,
                            'question_text' => 'Në këtë situatë nuk lejohet lëvizja drejtë.',
                            'image' => 'questions/HJ7IgfeC0ghpmji8D6oIGCvfOp4nfcuZTydvk71R.png',
                            'created_at' => '2026-03-18 12:50:41',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        357 => 
                        array (
                            'id' => 358,
                            'category_id' => 5,
                            'question_number' => 3057,
                            'question_text' => 'Lejohet tejkalimi në këtë situatë.',
                            'image' => 'questions/jx19tyiOxKTkmR9FZyUwEOAWBgpi8W07JUT6yi5e.png',
                            'created_at' => '2026-03-18 12:51:19',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        358 => 
                        array (
                            'id' => 359,
                            'category_id' => 5,
                            'question_number' => 3058,
                            'question_text' => 'Rripi i sigurisë përdoret gjatë ngasjes vetëm brenda
vendbanimit.',
                            'image' => 'questions/ATdrYicrxYijekPRt22MWY069wQVCu0pvl5xK11Z.png',
                            'created_at' => '2026-03-18 12:52:28',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        359 => 
                        array (
                            'id' => 360,
                            'category_id' => 5,
                            'question_number' => 3059,
                            'question_text' => 'Për dalje nga autostrada duhet ta shfrytëzoni shiritin
për ngadalësim dhe te sinjalizoni me tregues të drejtimit.',
                            'image' => 'questions/hbKV6l6MUsAvgg3dqGVWcyeDWpWhvVDeExE0jf9Z.png',
                            'created_at' => '2026-03-18 12:54:00',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        360 => 
                        array (
                            'id' => 361,
                            'category_id' => 5,
                            'question_number' => 3060,
                            'question_text' => 'Lejohet tejkalimi në këtë situatë.',
                            'image' => 'questions/K8ADuNS2zKgTdu8QXrKgaCuazLCxn3kNf5JX5nye.png',
                            'created_at' => '2026-03-18 12:54:40',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        361 => 
                        array (
                            'id' => 362,
                            'category_id' => 5,
                            'question_number' => 3061,
                            'question_text' => 'Nga vendi i vendosjes së shenjave nuk lejohet lëvizja
me shpejtësi më të madhe se 50 km/h.',
                            'image' => 'questions/mzQV60FF4Zm1VjbwGovehxTzoc6wmaTAUS6Iqzu0.png',
                            'created_at' => '2026-03-18 12:55:14',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        362 => 
                        array (
                            'id' => 363,
                            'category_id' => 5,
                            'question_number' => 3062,
                            'question_text' => 'Ngasja në rrugë të drejtë e gjatë, shoferin e nxit për
shpejtësi të madhe.',
                            'image' => 'questions/1KkVvRGG9rEr8KMH0ej6S3kjx83Owd3rPo6VcuZI.png',
                            'created_at' => '2026-03-18 12:55:42',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        363 => 
                        array (
                            'id' => 364,
                            'category_id' => 5,
                            'question_number' => 3063,
                            'question_text' => 'Në këtë pjesë të rrugës nuk më lejohet të lëvizi me
shpejtësi më të vogël se 20 km/h.',
                            'image' => 'questions/WVmqj5tdlJOWwL0ICzEO3L7UckB39DiYQ94QWwqd.png',
                            'created_at' => '2026-03-18 12:56:24',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        364 => 
                        array (
                            'id' => 365,
                            'category_id' => 5,
                            'question_number' => 3064,
                            'question_text' => 'Në këtë situatë nuk lejohet tejkalimi i qerres.',
                            'image' => 'questions/RwgJMFHIf1VUtzDHb9ZZhKqSPnfj4eWKg8kFOwEm.png',
                            'created_at' => '2026-03-18 12:56:57',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        365 => 
                        array (
                            'id' => 366,
                            'category_id' => 5,
                            'question_number' => 3065,
                            'question_text' => 'Automjeti përballë i ka të ndezura dritat e gjata.
nëjejt duhet të veproni edhe ju, duke ndezur dritat e gjata
që rruga të shihet më mirë.',
                            'image' => 'questions/NzpQ9Igsd3o8IEYNxgyqPsk41VD2cvcSOz77UceD.png',
                            'created_at' => '2026-03-18 12:57:31',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        366 => 
                        array (
                            'id' => 367,
                            'category_id' => 5,
                            'question_number' => 3066,
                            'question_text' => 'Ngasja në rrugë të gjatë e të drejtë nuk është asnjëher
e rrezikshme, pasi që fushëpamja e rrugës është e mirë.',
                            'image' => 'questions/bm8KW6KgwoMtLwyi3xx18TC3Qvhx4tcSSa06oyWM.png',
                            'created_at' => '2026-03-18 12:58:03',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        367 => 
                        array (
                            'id' => 368,
                            'category_id' => 5,
                            'question_number' => 3067,
                            'question_text' => 'Shoferi është i obliguar ta ndal veturën dhe t’i largojë
nga rruga sendet, të cilat i hasë në rrugë.',
                            'image' => 'questions/fxW8KMq3eIBd84E98kSrKdo99ZwQE3pX4Hl3ruUt.png',
                            'created_at' => '2026-03-18 12:58:40',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        368 => 
                        array (
                            'id' => 369,
                            'category_id' => 5,
                            'question_number' => 3068,
                            'question_text' => 'Në këtë situatë, ju duhet të ndaleni veturën, pastaj të
vazhdoni lëvizjen me shpejtësi të njëjet, për shkak
punimeve në rrugë.',
                            'image' => 'questions/IbjXjr1zFBoWI3OzFytttzkM3cB38tRxdbl9yENS.png',
                            'created_at' => '2026-03-18 12:59:12',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        369 => 
                        array (
                            'id' => 370,
                            'category_id' => 5,
                            'question_number' => 3069,
                            'question_text' => 'Gjatë ngasjes në këtë situatë në rast frenimit rritet koha
e reagimit',
                            'image' => 'questions/y9HXsnvsrnzCH9Tua4Qx1ZTSzPXLBNxgUV5RCNbw.png',
                            'created_at' => '2026-03-18 12:59:47',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        370 => 
                        array (
                            'id' => 371,
                            'category_id' => 5,
                            'question_number' => 3070,
                            'question_text' => 'Shoferi i cili gjendet ose has në vendin e aksidentit ku
ka persona të lënduar, nuk duhet t’i bartë të lënduarit deri
te instucionin shëndetësor, këtë e bënë ndihma e shpejtë.',
                            'image' => 'questions/mk0X9iQ4AjrUiKaBSZaGkuKK2sMT3hsJj6GRNQ8d.png',
                            'created_at' => '2026-03-18 13:00:32',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        371 => 
                        array (
                            'id' => 372,
                            'category_id' => 5,
                            'question_number' => 3071,
                            'question_text' => 'Kufizimi i shpejtësisë deri 40 km/h, fillon nga vendi
i vendosjes së shenjës dhe vlenë deri te kryqëzimi i parë.',
                            'image' => 'questions/zqmEpPYrRKUikYJDriCVkTgC6M8jsR8Uf8E1GbjC.png',
                            'created_at' => '2026-03-18 13:01:08',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        372 => 
                        array (
                            'id' => 373,
                            'category_id' => 5,
                            'question_number' => 3072,
                            'question_text' => 'Lejohet tejkalimi i tramvajit nga ana e djathtë dhe e
majtë në këtë situatë.',
                            'image' => 'questions/zKxMARz9TE58wXaGJzNmezXnnch5zWqoCkmLfPt9.png',
                            'created_at' => '2026-03-18 13:01:44',
                            'updated_at' => '2026-03-23 09:23:54',
                        ),
                        373 => 
                        array (
                            'id' => 374,
                            'category_id' => 5,
                            'question_number' => 3073,
                        'question_text' => 'Automjeti i ndihmës së shpejtë (emergjencës) është në
intervenim, do të skajohem e sipas nevojës e zvogëloj
shpejtësinë e lëvizjes.',
                        'image' => 'questions/wKH1muSTsBhySNlwo64KfKNiOsZE2SO2pVoiQzmw.png',
                        'created_at' => '2026-03-18 13:02:19',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    374 => 
                    array (
                        'id' => 375,
                        'category_id' => 5,
                        'question_number' => 3074,
                        'question_text' => 'Gjatë ngasjes në diell të fortë në këtë situatë, mund të
mos vërehen situatat e rrezikshme në trafik.',
                        'image' => 'questions/hy4Ke2SVClz10CyDOYHEmNEMGBvDrJcpP8MKAQhs.png',
                        'created_at' => '2026-03-18 13:02:49',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    375 => 
                    array (
                        'id' => 376,
                        'category_id' => 5,
                        'question_number' => 3075,
                        'question_text' => 'Në këtë pjesë të rrugës duhet të lëvizni me kujdes të
shtuar.',
                        'image' => 'questions/mGmtPSk7sHMUd6aRP8BcMF6oCsJT2OU0UWeQd9aQ.png',
                        'created_at' => '2026-03-18 13:03:25',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    376 => 
                    array (
                        'id' => 377,
                        'category_id' => 5,
                        'question_number' => 3076,
                        'question_text' => 'Ju lejohet vazhdimi i lëvizjes nëse nuk mundeni të
ndaleni në mënyrë të sigurtë para kryqëzimit.',
                        'image' => 'questions/9Gfm4KsTVOqc9ISsdpvNSFzTwrqdTy1VPHsQkLiB.png',
                        'created_at' => '2026-03-18 13:04:04',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    377 => 
                    array (
                        'id' => 378,
                        'category_id' => 5,
                        'question_number' => 3077,
                        'question_text' => 'Lejohet tejkalimi në këtë situatë.',
                        'image' => 'questions/sbmFrWNHd8G8bmrbRaodLiQZAUZsto5hgqnYxPb5.png',
                        'created_at' => '2026-03-18 13:05:35',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    378 => 
                    array (
                        'id' => 379,
                        'category_id' => 5,
                        'question_number' => 3078,
                        'question_text' => 'Fëmija deri 3 vjeç të bartet në veturë vetëm deri te
çerdhja e fëmiëve.',
                        'image' => 'questions/0D7869GRZIUli93UTXHWsXTVNpEIe3BorISXAWdR.png',
                        'created_at' => '2026-03-18 13:06:09',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    379 => 
                    array (
                        'id' => 380,
                        'category_id' => 5,
                        'question_number' => 3079,
                        'question_text' => 'Erërat e forta anësore, paraqesin rrezik posaqërisht për
mjetet me dy rrota (biçikleta, mopeda, motoçikletat pa
rimorikio anësore).',
                        'image' => 'questions/PikxGIlaXQudYqBg3rjCqd15MnJVVTJpkzl9YZkh.png',
                        'created_at' => '2026-03-18 13:06:42',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    380 => 
                    array (
                        'id' => 381,
                        'category_id' => 5,
                        'question_number' => 3080,
                        'question_text' => 'Në rrugën nacionale, nuk lejohet lëvizja mbrapa në
asnjë rast.',
                        'image' => 'questions/FV75ddQEMjc03Y3tg5ZpvtZqwwHC0WmGm5IglMhp.png',
                        'created_at' => '2026-03-18 13:07:25',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    381 => 
                    array (
                        'id' => 382,
                        'category_id' => 5,
                        'question_number' => 3081,
                        'question_text' => 'Lejohet tejkalimi i motoçikletës në këtë situatë.',
                        'image' => 'questions/YqjbjxH3QwcAYjwurEHb2BOhKXyt0AVthrE6IvV8.png',
                        'created_at' => '2026-03-18 13:08:03',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    382 => 
                    array (
                        'id' => 383,
                        'category_id' => 5,
                        'question_number' => 3082,
                        'question_text' => 'Shoferi i veturës i cili hyn në rrugë nga oborri i
shtëpisë, nuk duhet t’i lëshojë këmbësorët të cilët janë
duke lëvizur nëpër trotuar.',
                        'image' => 'questions/DulcWtM0KH2F87XUA0y4UXI2t5OwZSSVRyveeCa2.png',
                        'created_at' => '2026-03-18 13:08:44',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    383 => 
                    array (
                        'id' => 384,
                        'category_id' => 5,
                        'question_number' => 3083,
                        'question_text' => 'Obligohet shoferi para ngasjes të bëjë shikimin vizual
për rreth veturës.',
                        'image' => 'questions/xfZ7eUZzM72De6nrqoFh2UzjLRVeEL4QDQpCXRO2.png',
                        'created_at' => '2026-03-18 13:09:23',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    384 => 
                    array (
                        'id' => 385,
                        'category_id' => 5,
                        'question_number' => 3084,
                        'question_text' => 'Gjatë kthimit djathtas si në këtë situatë, nuk do t’i jap
përparësi kalimi këmbësorit, pasi nuk ekziston vendkalimi
i shënuar për këmbësorë.',
                        'image' => 'questions/atInuUdZuatSBRoa1IVDDNvwaGuwPAP5044o5Dfq.png',
                        'created_at' => '2026-03-18 13:10:02',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    385 => 
                    array (
                        'id' => 386,
                        'category_id' => 5,
                        'question_number' => 3085,
                        'question_text' => 'Fëmijët në trafik, nuk janë të vetëdijshëm për
rrezikun dhe mund të mos vërehen nga shoferët e
automjeteve.',
                        'image' => 'questions/m50gmkeoDqSRnCIazxUPta5Rie0u3FBlTy9bmUDE.png',
                        'created_at' => '2026-03-18 13:11:09',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    386 => 
                    array (
                        'id' => 387,
                        'category_id' => 5,
                        'question_number' => 3086,
                        'question_text' => 'Në këtë situatë kemi parasysh devijimit e drejtimit
dhe jemi të obliguar të lëvizim vetëm djathtas.',
                        'image' => 'questions/tVTWHlFw1AP0foM3eXhnfdIqjgc9S6vy4H3Xb6rx.png',
                        'created_at' => '2026-03-18 13:11:49',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    387 => 
                    array (
                        'id' => 388,
                        'category_id' => 5,
                        'question_number' => 3087,
                        'question_text' => 'Gjatë ngasjes nëpër rrugë me akull zvogëlohet rruga e
frenimit.',
                        'image' => 'questions/SHmCPdRihvTO6Rl8bySBop5XqyDNY3gz84gkOkfP.png',
                        'created_at' => '2026-03-18 13:12:47',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    388 => 
                    array (
                        'id' => 389,
                        'category_id' => 5,
                        'question_number' => 3088,
                        'question_text' => 'Në këtë rrugë trafiku zhvillohet vetëm në një kahe,
nga veturat e parkuar mund të del ndonjë këmbësorë në
rrugë.',
                        'image' => 'questions/4lVcYMvJNOKWxrfgSi4N0m81OnC9ZudsFWoBWTAB.png',
                        'created_at' => '2026-03-18 13:13:16',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    389 => 
                    array (
                        'id' => 390,
                        'category_id' => 5,
                        'question_number' => 3089,
                        'question_text' => 'Nga vendi i vendosjes së shenjës së trafikut nuk lejohet
tejkalim',
                        'image' => 'questions/uIbmWXt1Nmy2FsZUtndpbRGFhC4dWJpyoZFxUGeZ.png',
                        'created_at' => '2026-03-18 13:13:50',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    390 => 
                    array (
                        'id' => 391,
                        'category_id' => 5,
                        'question_number' => 3090,
                        'question_text' => 'Në këtë situatë, rreziku fillon nga vendi i vendosjes
së shenjës.',
                        'image' => 'questions/q8eMN7dBXiP9BrQA1eWFerdaPnT4WS6cGT9KtXtC.png',
                        'created_at' => '2026-03-18 13:14:23',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    391 => 
                    array (
                        'id' => 392,
                        'category_id' => 5,
                        'question_number' => 3091,
                        'question_text' => 'Lejohet lëvizja mbrapa në tunel.',
                        'image' => 'questions/lhNYMWsjQDinCancwQNZO5AlEH6NQv61yYxCWMiX.png',
                        'created_at' => '2026-03-18 13:15:21',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    392 => 
                    array (
                        'id' => 393,
                        'category_id' => 5,
                        'question_number' => 3092,
                        'question_text' => 'Nga vendi i vendosjes së shenjës së trafikut nuk
lejohet tejkalimi.',
                        'image' => 'questions/EWrUU9UWKYiaY0c3fy5e4VQEnQkFhtMCbLY2U8Ij.png',
                        'created_at' => '2026-03-18 13:15:45',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    393 => 
                    array (
                        'id' => 394,
                        'category_id' => 5,
                        'question_number' => 3093,
                        'question_text' => 'Lejohet kthimi gjysëm rrethor në këtë situatë.',
                        'image' => 'questions/bp6fCQxSsrQkiezCTyajFDVQDkWk1BOPOYSb1JAQ.png',
                        'created_at' => '2026-03-18 13:16:16',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    394 => 
                    array (
                        'id' => 395,
                        'category_id' => 5,
                        'question_number' => 3094,
                        'question_text' => 'Shenja e trafikut “ Kryqi i Andreut” tregon
kalimin e rrugës përtej hekurudhës me dy a më shumë palë
binar.',
                        'image' => 'questions/nnBGjatiZ6G0RrMDYMxkIpajoPg4sV2dPVN8ivwM.png',
                        'created_at' => '2026-03-18 13:16:52',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    395 => 
                    array (
                        'id' => 396,
                        'category_id' => 5,
                        'question_number' => 3095,
                        'question_text' => 'Në këtë situatë do të jam i kujdesshëm në
distancën e sigurisë ndaj veturës së Auto Shkollës.',
                        'image' => 'questions/3Qi5XJMPkyGlFlKXZTtMMDFI80qhgEenUS2AL1nb.png',
                        'created_at' => '2026-03-18 13:17:25',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    396 => 
                    array (
                        'id' => 397,
                        'category_id' => 5,
                        'question_number' => 3096,
                        'question_text' => 'Vetura e kyqe ka sinjalizuar për kthim majtas, ju duhet
t’i jepni përparësi kalimi pasi vjen nga krahu i djatht',
                        'image' => 'questions/qt496KHVMY6ChuhcYoXDmXLva48ji3ZlaE5yqCFk.png',
                        'created_at' => '2026-03-18 13:18:16',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    397 => 
                    array (
                        'id' => 398,
                        'category_id' => 5,
                        'question_number' => 3097,
                        'question_text' => 'Gjatë përballkalimit natën i përdoren dritat e gjata që
rruga të shihet ma mirë.',
                        'image' => 'questions/wKgiBTvUkrZTWXnwW5Z4e8y2cs6pPnvceScjcM07.png',
                        'created_at' => '2026-03-18 13:19:01',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    398 => 
                    array (
                        'id' => 399,
                        'category_id' => 5,
                        'question_number' => 3098,
                        'question_text' => 'Gjatë daljes nga vetura, shoferi duhet të shikon
trafikun nga prapa, përmes pasqyrëve dhe këndit të vdekur.',
                        'image' => 'questions/iT8rvrqHmMT7GJI2LA2Nd2OtBHBsNdYDIVDbQb4X.png',
                        'created_at' => '2026-03-18 13:19:55',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    399 => 
                    array (
                        'id' => 400,
                        'category_id' => 5,
                        'question_number' => 3099,
                        'question_text' => 'Në këtë situatë kthimi gjysëmrrethor lejohet.',
                        'image' => 'questions/BywA7tilalfyLsK3P1ExeOahZR0c34jk9D4AEFaV.png',
                        'created_at' => '2026-03-18 13:20:34',
                        'updated_at' => '2026-03-23 09:23:54',
                    ),
                    400 => 
                    array (
                        'id' => 401,
                        'category_id' => 5,
                        'question_number' => 3100,
                    'question_text' => 'Për daljen e dytë (2) mund të vazhdoni lëvizjën vetëm
nëpër trajektoren me ngjyrë të kaltër.',
                    'image' => 'questions/Jszb2iQZ1WKTxGYWdRtvF6DcmJKYMueyTLRnefl3.png',
                    'created_at' => '2026-03-18 13:21:09',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                401 => 
                array (
                    'id' => 402,
                    'category_id' => 5,
                    'question_number' => 3101,
                    'question_text' => 'Në këtë situatë, vendi ku kryhen punimet në rrugë
fillon nga shenja e trafikut.',
                    'image' => 'questions/Pehtkw8ki8Fg8F4OQUxuCxzLpBEJ3bzSqqoOw5Nm.png',
                    'created_at' => '2026-03-18 13:29:53',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                402 => 
                array (
                    'id' => 403,
                    'category_id' => 5,
                    'question_number' => 3102,
                    'question_text' => 'Ngarkesa në veturë e cila kalon pjesën e pasme më
shumë se 1 m, shënohet me pëlhur të kuqe.',
                    'image' => 'questions/IPA1Pc6z3vYlBTkNuVFGKBkn5weGK4NcUlUSZTiM.png',
                    'created_at' => '2026-03-18 13:30:34',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                403 => 
                array (
                    'id' => 404,
                    'category_id' => 5,
                    'question_number' => 3103,
                    'question_text' => 'Shpejtësia më e madhe në rrugë nacionale jashtë
vendbanimit me dy shirita për një kahje të lëvizjës me ndarje
fizike është 80 km/h.',
                    'image' => 'questions/FKn9UdcSGquVr9mWbnLkVDa49G7CsoHgVKRkZM5t.png',
                    'created_at' => '2026-03-18 13:31:02',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                404 => 
                array (
                    'id' => 405,
                    'category_id' => 5,
                    'question_number' => 3104,
                    'question_text' => ' Pajisja rrugore tregon vendkalimin hekurudhor me
mbrojtëse.',
                    'image' => 'questions/8tV8UCr8wlDUTnKgReXS8a1uxpdViGEkevN2Plyb.png',
                    'created_at' => '2026-03-18 13:31:41',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                405 => 
                array (
                    'id' => 406,
                    'category_id' => 6,
                    'question_number' => 4001,
                'question_text' => 'Në këtë kryqëzim (situatë) vetura e kuqe lëviz e para',
                    'image' => 'questions/Bj9EquPEuhF3fjW2TeZWgh9nSN8OPQ9OOHD9nHhk.png',
                    'created_at' => '2026-03-18 13:33:26',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                406 => 
                array (
                    'id' => 407,
                    'category_id' => 6,
                    'question_number' => 4002,
                    'question_text' => 'Në këtë kryqëzim automjeti i kuq dhe biçiklisti kanë
përparsi kalimi',
                    'image' => 'questions/4iAKvq4ZQ7hXLXvpBu3ZcK4ee6ELfnpnFdAcyeaV.png',
                    'created_at' => '2026-03-18 13:34:17',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                407 => 
                array (
                    'id' => 408,
                    'category_id' => 6,
                    'question_number' => 4003,
                    'question_text' => 'Në këtë kryqëzim unë lëviz pas këmbësorit',
                    'image' => 'questions/wwM6akhX3V7eiXUGwfw6dAIuLQtOGgjQsCru3BKw.png',
                    'created_at' => '2026-03-18 13:35:03',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                408 => 
                array (
                    'id' => 409,
                    'category_id' => 6,
                    'question_number' => 4004,
                    'question_text' => 'Në kryqëzim vetura e kaltër lëviz para biçiklistit',
                    'image' => 'questions/sT3fl96mEhemnmj1aWyR4v6pJSiA22LIyImNYsdG.png',
                    'created_at' => '2026-03-18 13:35:47',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                409 => 
                array (
                    'id' => 410,
                    'category_id' => 6,
                    'question_number' => 4005,
                    'question_text' => 'Në këtë kryqëzim radhitja e kalimit duhet të jetë:
biçiklisti, unë, vetura e kuqe',
                    'image' => 'questions/GXKrVP2vJk93uiWv97bOkU3yqXE8RwU8qrmMbNdI.png',
                    'created_at' => '2026-03-18 13:36:28',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                410 => 
                array (
                    'id' => 411,
                    'category_id' => 6,
                    'question_number' => 4006,
                    'question_text' => 'Në këtë kryqëzim më lejohet lëvizja pa u ndalur drejt ose majtas',
                    'image' => 'questions/l4LFS0S7HrEYJJ87tVJnV23cFbQvlkhE0668ICAA.png',
                    'created_at' => '2026-03-18 13:37:36',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                411 => 
                array (
                    'id' => 412,
                    'category_id' => 6,
                    'question_number' => 4007,
                    'question_text' => 'Në këtë kryqëzim unë do të lëviz i fundit',
                    'image' => 'questions/RACaUcNcGTWQaYOOv5OyoLU5yaIChNnQvuO6Jwve.png',
                    'created_at' => '2026-03-18 13:38:07',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                412 => 
                array (
                    'id' => 413,
                    'category_id' => 6,
                    'question_number' => 4008,
                    'question_text' => 'Në këtë kryqëzim më lejohet lëvizja drejt dhe
djathtas',
                    'image' => 'questions/n479udNn7cYoOUuDjUeDVGStjFIkStIRz6kdOqCT.png',
                    'created_at' => '2026-03-18 13:38:58',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                413 => 
                array (
                    'id' => 414,
                    'category_id' => 6,
                    'question_number' => 4009,
                    'question_text' => 'Në këtë kryqëzim unë lëviz i dyti',
                    'image' => 'questions/b0akbW9Ku3j5iKEWzDnDVmloI7i6tdBWsc2mGa0B.png',
                    'created_at' => '2026-03-18 13:39:31',
                    'updated_at' => '2026-03-23 09:23:54',
                ),
                414 => 
                array (
                    'id' => 415,
                    'category_id' => 6,
                    'question_number' => 4010,
                    'question_text' => 'Në këtë kryqëzim unë do të lëviz i pari',
                    'image' => 'questions/u8IjjujKMVSAIlZa9Kt8usyMHCjUrrzXOmCVHV1J.png',
                    'created_at' => '2026-03-18 13:40:03',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                415 => 
                array (
                    'id' => 416,
                    'category_id' => 6,
                    'question_number' => 4011,
                    'question_text' => 'Në këtë kryqëzim vetura e kuqe lëviz e para',
                    'image' => 'questions/xap9HLvIKZshFpShZEbrOdNOiPrZgLChj6pxbfPL.png',
                    'created_at' => '2026-03-18 13:40:40',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                416 => 
                array (
                    'id' => 417,
                    'category_id' => 6,
                    'question_number' => 4012,
                    'question_text' => 'Në këtë kryqëzim radhitja e kalimit duhet të jetë:
unë, kamioni, biçiklisti',
                    'image' => 'questions/3UpuSsVlG5xdkEWFgkMv8Jj5fScjt4oX6nLbdtDP.png',
                    'created_at' => '2026-03-18 13:41:19',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                417 => 
                array (
                    'id' => 418,
                    'category_id' => 6,
                    'question_number' => 4013,
                    'question_text' => 'Në këtë kryqëzim do të vazhdoj lëvizjen i pari  ',
                    'image' => 'questions/HVnKBJuDTIfwNS8fye6GG5GDYIEKJXYHRWCws5yx.png',
                    'created_at' => '2026-03-18 13:44:53',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                418 => 
                array (
                    'id' => 419,
                    'category_id' => 6,
                    'question_number' => 4014,
                    'question_text' => 'Në këtë kryqëzim vetura e gjelbër do të lëvizë e par',
                    'image' => 'questions/GaGkeKX6tcAW0MTGNtUWvs28NFgrMSIieEt93ycS.png',
                    'created_at' => '2026-03-18 13:45:30',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                419 => 
                array (
                    'id' => 420,
                    'category_id' => 6,
                    'question_number' => 4015,
                    'question_text' => 'Në këtë kryqëzim më lejohet lëvizja majtas pa u
ndalur
',
                    'image' => 'questions/LbDj9lTTAiGGKYS32qRPFQSQmfLC0ifHZaooT6TB.png',
                    'created_at' => '2026-03-18 13:46:20',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                420 => 
                array (
                    'id' => 421,
                    'category_id' => 6,
                    'question_number' => 4016,
                    'question_text' => 'Në këtë kryqëzim vetura e kuqe lëviz e para',
                    'image' => 'questions/Y5qvavZVcbl7MrG6KAvDh7ABP0Hmfaw3sv90RTky.png',
                    'created_at' => '2026-03-19 18:46:16',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                421 => 
                array (
                    'id' => 422,
                    'category_id' => 6,
                    'question_number' => 4017,
                    'question_text' => 'Në këtë kryqëzim do të vazhdoj lëvizjen i pari',
                    'image' => 'questions/MWCQTJppX98bhv4ymqlhaQQZ4srwIyalLYoOAGDd.png',
                    'created_at' => '2026-03-19 18:46:59',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                422 => 
                array (
                    'id' => 423,
                    'category_id' => 6,
                    'question_number' => 4018,
                    'question_text' => 'Në këtë kryqëzim unë kam përparësi kalimi ndaj
këmbësorëve',
                    'image' => 'questions/33us3UnDgUqQSFhDs0r45G6xneU9NYEYqLgG92PT.png',
                    'created_at' => '2026-03-19 18:47:39',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                423 => 
                array (
                    'id' => 424,
                    'category_id' => 6,
                    'question_number' => 4019,
                    'question_text' => 'Në këtë kryqëzim kamioni do të lëvizë i fundit',
                    'image' => 'questions/V9Zq3WnDxiUYJdj6lXnFB8dBXaPjnIZ53bQFtrH2.png',
                    'created_at' => '2026-03-19 18:48:29',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                424 => 
                array (
                    'id' => 425,
                    'category_id' => 6,
                    'question_number' => 4020,
                    'question_text' => 'Në këtë kryqëzim vetura e kuqe lëviz e para',
                    'image' => 'questions/LxYvlpoXLIc5e7v93QWNnWl3PgDbhUik34hrIF6M.png',
                    'created_at' => '2026-03-19 18:49:17',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                425 => 
                array (
                    'id' => 426,
                    'category_id' => 6,
                    'question_number' => 4021,
                    'question_text' => 'Në këtë kryqëzim vetura e kuqe lëviz e fundit',
                    'image' => 'questions/kqvff5AUMbf9UDFUmq6gJ3qxKsmt1rnM6dANIdMa.png',
                    'created_at' => '2026-03-19 18:50:20',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                426 => 
                array (
                    'id' => 427,
                    'category_id' => 6,
                    'question_number' => 4022,
                    'question_text' => 'Në këtë kryqëzim radhitja e kalimit duhet të jetë:
këmbësori, unë, vetura e kaltër',
                    'image' => 'questions/x27m7oxVFfALsKitmD53BZpFd0V3o0JGm7ZcaYNa.png',
                    'created_at' => '2026-03-19 18:51:27',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                427 => 
                array (
                    'id' => 428,
                    'category_id' => 6,
                    'question_number' => 4023,
                    'question_text' => 'Në këtë kryqëzim, vetura e kuqe lëvizë e dyta.',
                    'image' => 'questions/MT1EtLfHDZ1YPDH4SVihdcJ2jRCFUW8oGti1R6Fu.png',
                    'created_at' => '2026-03-19 18:53:09',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                428 => 
                array (
                    'id' => 429,
                    'category_id' => 6,
                    'question_number' => 4024,
                    'question_text' => 'Në këtë kryqëzim radhitja e kalimit duhet të jetë:
biçiklisti, unë, kamioni.',
                    'image' => 'questions/qiNK2mEBfSp0TH957tPQPbMWV8l2DilEk1fsdAt3.png',
                    'created_at' => '2026-03-19 18:56:34',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                429 => 
                array (
                    'id' => 430,
                    'category_id' => 6,
                    'question_number' => 4025,
                    'question_text' => 'Në këtë kryqëzim unë lëviz i pari',
                    'image' => 'questions/YKBXib9A37q6bW8mlaSPiU0u849rKUqZzgra6REq.png',
                    'created_at' => '2026-03-19 18:57:12',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                430 => 
                array (
                    'id' => 431,
                    'category_id' => 6,
                    'question_number' => 4026,
                    'question_text' => 'Në semafor ndriçon drita e verdhë vezulluese (me
ndërprerje), do të pres deri sa të ndezet drita e gjelbër në
samafor',
                    'image' => 'questions/QdjNP8JOxbZp7MaZjcki2LRRaW2EEzJhyQm2nsD4.png',
                    'created_at' => '2026-03-19 18:57:45',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                431 => 
                array (
                    'id' => 432,
                    'category_id' => 6,
                    'question_number' => 4027,
                    'question_text' => 'Në këtë kryqëzim vetura e kuqe lëviz e para',
                    'image' => 'questions/MVlN90rGQL94XXtIeVgZo78LRTEizWTnuIml3Gmk.png',
                    'created_at' => '2026-03-19 18:58:34',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                432 => 
                array (
                    'id' => 433,
                    'category_id' => 6,
                    'question_number' => 4028,
                    'question_text' => 'Në këtë kryqëzim vetura e verdhë lëviz e para',
                    'image' => 'questions/bqcetHoCbJej018zJe4VmQSa2XPAVZ1aGDT1MKCv.png',
                    'created_at' => '2026-03-19 18:59:08',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                433 => 
                array (
                    'id' => 434,
                    'category_id' => 6,
                    'question_number' => 4029,
                    'question_text' => 'Në këtë kryqëzim unë lëviz i pari',
                    'image' => 'questions/XC4SqIDgZruo6x5SvN7LRTmdotvMOTdZApaJQD20.png',
                    'created_at' => '2026-03-19 18:59:46',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                434 => 
                array (
                    'id' => 435,
                    'category_id' => 6,
                    'question_number' => 4030,
                    'question_text' => 'Në këtë situatë vetura e kaltër do të lëvizë e fundit',
                    'image' => 'questions/DrkjiuS4flK7aNPnJwCqqmRwNb2niSQul11vxcp4.png',
                    'created_at' => '2026-03-19 19:00:44',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                435 => 
                array (
                    'id' => 436,
                    'category_id' => 6,
                    'question_number' => 4031,
                    'question_text' => 'Në këtë kryqëzim unë duhet të kthehem majtas për
shkak të tabelës plotësuese',
                    'image' => 'questions/pu3ZkxaKDwPkR6hGIJrjmjbl0mHn9U7eEOspdfl1.png',
                    'created_at' => '2026-03-19 19:02:54',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                436 => 
                array (
                    'id' => 437,
                    'category_id' => 6,
                    'question_number' => 4032,
                    'question_text' => 'Në këtë kryqëzim radhitja e kalimit duhet të jetë: unë,
kamioni, biçiklisti',
                    'image' => 'questions/bflKZzrFYqJGBqeweBcbmlTFWbOI7umVAfnQUmNe.png',
                    'created_at' => '2026-03-19 19:03:31',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                437 => 
                array (
                    'id' => 438,
                    'category_id' => 6,
                    'question_number' => 4033,
                    'question_text' => 'Në këtë kryqëzim unë lëviz i dyti.',
                    'image' => 'questions/XZ9UNOc6UBIaFXrT5TEdbM8IZwW3ZDLDHa9pVO0L.png',
                    'created_at' => '2026-03-19 19:04:19',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                438 => 
                array (
                    'id' => 439,
                    'category_id' => 6,
                    'question_number' => 4034,
                    'question_text' => 'Në këtë kryqëzim vetura është rreshtuar drejt për
kthim majtas',
                    'image' => 'questions/cVRQBZHNQUl4RVA0mEFD0P76arB1WRniHn80SD3r.png',
                    'created_at' => '2026-03-19 19:05:21',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                439 => 
                array (
                    'id' => 440,
                    'category_id' => 6,
                    'question_number' => 4035,
                    'question_text' => 'Në këtë kryqëzim unë lëviz i pari',
                    'image' => 'questions/QwfPPO0lxu2KKUwQM2JsicGmW95T8Nwwstmgp9au.png',
                    'created_at' => '2026-03-19 19:06:02',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                440 => 
                array (
                    'id' => 441,
                    'category_id' => 6,
                    'question_number' => 4036,
                    'question_text' => 'Në semafor ndriçon drita e verdhë vezulluese (me
ndërprerje), në këtë situatë duhet të ndalem para shenjës së
trafikut',
                    'image' => 'questions/vdWVrVF7XV1P27BrKBwZQ6l57wFBQTCmRHdkOj68.png',
                    'created_at' => '2026-03-19 19:06:51',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                441 => 
                array (
                    'id' => 442,
                    'category_id' => 6,
                    'question_number' => 4037,
                    'question_text' => 'Në këtë kryqëzim radhitja e kalimit duhet të jetë:
tramvaji, biçiklisti, unë',
                    'image' => 'questions/SyQMhRn8s8wXOdFpMznvVej8togH3dkSeKvERanm.png',
                    'created_at' => '2026-03-19 19:08:31',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                442 => 
                array (
                    'id' => 443,
                    'category_id' => 6,
                    'question_number' => 4038,
                    'question_text' => 'Në këtë kryqëzim unë lëviz i pari',
                    'image' => 'questions/bPrlwksYhURXXrlUCroAACgYgtOQ5hlJlDoE6c5d.png',
                    'created_at' => '2026-03-19 19:08:59',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                443 => 
                array (
                    'id' => 444,
                    'category_id' => 6,
                    'question_number' => 4039,
                    'question_text' => 'Në këtë kryqëzim radhitja e kalimit duhet të jetë:
kamioni, këmbësori, unë',
                    'image' => 'questions/PnanXpntPMt1m4DPUGSVtRqPef623HryClqd07LV.png',
                    'created_at' => '2026-03-19 19:09:31',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                444 => 
                array (
                    'id' => 445,
                    'category_id' => 6,
                    'question_number' => 4040,
                    'question_text' => 'Në këtë kryqëzim unë do të vazhdoj lëvizjen i pari',
                    'image' => 'questions/gjI5x5mHeOBfv4KEcMfvRhdr89K3mGLzxAMT7NRe.png',
                    'created_at' => '2026-03-19 19:10:13',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                445 => 
                array (
                    'id' => 446,
                    'category_id' => 6,
                    'question_number' => 4041,
                    'question_text' => ' Në këtë kryqëzim mopedi lëviz i pari',
                    'image' => 'questions/PLXPPbhSeo3CUFBqL6GJMUOltN6Dt8KBNlAMdV3q.png',
                    'created_at' => '2026-03-19 19:10:58',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                446 => 
                array (
                    'id' => 447,
                    'category_id' => 6,
                    'question_number' => 4042,
                    'question_text' => 'Në këtë kryqëzim më lejohet lëvizja majtas dhe
djathtas',
                    'image' => 'questions/p99yoC4vRO3kE7OcHtv5vOFOsmZZyWz64puSkokL.png',
                    'created_at' => '2026-03-19 19:12:01',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                447 => 
                array (
                    'id' => 448,
                    'category_id' => 6,
                    'question_number' => 4043,
                    'question_text' => 'Në këtë kryqëzim radhitja e kalimit duhet të jetë:
vetura e kuqe, biçiklisti, unë',
                    'image' => 'questions/x7sNTEqN6F2I7FeHvEc7qk8uhOmc0g0otVnKjqWn.png',
                    'created_at' => '2026-03-19 19:12:43',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                448 => 
                array (
                    'id' => 449,
                    'category_id' => 6,
                    'question_number' => 4044,
                    'question_text' => 'Në semafor ndriçon drita e verdhë vezulluese (me
ndërprerje), në këtë situatë do të vazhdoj lëvizjen pa u
ndalur.',
                    'image' => 'questions/czwxmGJkU6XXzanJHzrziHBQT7P7vn7KEy80IKWe.png',
                    'created_at' => '2026-03-19 19:13:42',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                449 => 
                array (
                    'id' => 450,
                    'category_id' => 6,
                    'question_number' => 4045,
                    'question_text' => 'Në këtë kryqëzim biçiklisti lëviz i pari',
                    'image' => 'questions/QcK63fXYWnXPyjbbFJSV0T327PRXHIMvbjULoZYi.png',
                    'created_at' => '2026-03-19 19:14:36',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                450 => 
                array (
                    'id' => 451,
                    'category_id' => 6,
                    'question_number' => 4046,
                    'question_text' => 'Në këtë kryqëzim më lejohet lëvizja drejt, majtas dhe djathtas pa u ndalur',
                    'image' => 'questions/F0mHsQ6hUOCq21KNesX4uWgmPleur0qMdKGeMxjF.png',
                    'created_at' => '2026-03-19 19:15:47',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                451 => 
                array (
                    'id' => 452,
                    'category_id' => 6,
                    'question_number' => 4047,
                    'question_text' => 'Në këtë kryqëzim radhitja e kalimit duhet të jetë:
këmbësori, unë, kamioni',
                    'image' => 'questions/7leNFggdAJRo7kxvhjVUr379eaEJ4DSXQL1bNLr3.png',
                    'created_at' => '2026-03-19 19:16:28',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                452 => 
                array (
                    'id' => 453,
                    'category_id' => 6,
                    'question_number' => 4048,
                    'question_text' => 'Në këtë kryqëzim unë lëviz pas veturës së kuqe',
                    'image' => 'questions/oefB432aOX23A3myqLYSFYWxs4Qx7g8TSIKbz3Tv.png',
                    'created_at' => '2026-03-19 19:17:15',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                453 => 
                array (
                    'id' => 454,
                    'category_id' => 6,
                    'question_number' => 4049,
                    'question_text' => 'Në këtë kryqëzim vetura e gjelbër duhet të ndalet para
kryqëzimit',
                    'image' => 'questions/PmwOLYxajlHFhugYcNJB7doouX6nGJLvaJVw5Pmn.png',
                    'created_at' => '2026-03-19 19:17:47',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                454 => 
                array (
                    'id' => 455,
                    'category_id' => 6,
                    'question_number' => 4050,
                    'question_text' => 'Në këtë kryqëzim do të vazhdoj lëvizjen para biçiklistit',
                    'image' => 'questions/QBmKHU2h59DqZymXcUYsNG5WponRX27RdhuMQGxL.png',
                    'created_at' => '2026-03-19 19:18:22',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                455 => 
                array (
                    'id' => 456,
                    'category_id' => 6,
                    'question_number' => 4051,
                    'question_text' => 'Në këtë kryqëzim vetura është rreshtuar drejt, për
kthim majtas',
                    'image' => 'questions/VMduI3bwRhXt1yqiPdKZbIUVZJ0LfJnI3BtbJdx4.png',
                    'created_at' => '2026-03-19 19:19:09',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                456 => 
                array (
                    'id' => 457,
                    'category_id' => 6,
                    'question_number' => 4052,
                    'question_text' => 'Në këtë kryqëzim vetura e verdhë lëviz e para',
                    'image' => 'questions/awVLpXUVDA5SUmIxmj3dbAmqFMnE8CUAPXCbv6fD.png',
                    'created_at' => '2026-03-19 19:20:02',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                457 => 
                array (
                    'id' => 458,
                    'category_id' => 6,
                    'question_number' => 4053,
                    'question_text' => 'Në këtë kryqëzim vetura e kaltër lëviz e fundit',
                    'image' => 'questions/qemZOxUhHDZzM80TqsXIvScm9ItrbajMOrYfvI5n.png',
                    'created_at' => '2026-03-19 19:20:33',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                458 => 
                array (
                    'id' => 459,
                    'category_id' => 6,
                    'question_number' => 4054,
                    'question_text' => 'Në semafor ndriçon drita e verdhë vezulluese, në këtë
situatë do të vazhdoj lëvizjen me kujdes të shtuar',
                    'image' => 'questions/yd1oRnIOQxfymYB7qvv9qvYOETlBxSTCS4TdJcJR.png',
                    'created_at' => '2026-03-19 19:21:05',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                459 => 
                array (
                    'id' => 460,
                    'category_id' => 6,
                    'question_number' => 4055,
                    'question_text' => 'Në kryqëzim, unë lëviz para veturës së kuqe',
                    'image' => 'questions/WlOa6uQqIioPmMpx2zDRUoDZWj0FTeFnV3WeIEU9.png',
                    'created_at' => '2026-03-19 19:21:33',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                460 => 
                array (
                    'id' => 461,
                    'category_id' => 6,
                    'question_number' => 4056,
                    'question_text' => 'Në këtë kryqëzim radhitja e kalimit duhet të jetë:
vetura e kaltër, unë, këmbësori',
                    'image' => 'questions/xQDk4igsVoB1wD6POVAivgAoBdFVRltwXmlggRoY.png',
                    'created_at' => '2026-03-19 19:22:16',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                461 => 
                array (
                    'id' => 462,
                    'category_id' => 6,
                    'question_number' => 4057,
                    'question_text' => 'Në këtë kryqëzim do të vazhdoj lëvizjen pa u ndalur',
                    'image' => 'questions/XoxHNVfm9oOZaDthM7CgBuwvzE9wmj92TitRKIRp.png',
                    'created_at' => '2026-03-19 19:22:50',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                462 => 
                array (
                    'id' => 463,
                    'category_id' => 6,
                    'question_number' => 4058,
                    'question_text' => 'Në këtë kryqëzim do të vazhdoj lëvizjen i pari',
                    'image' => 'questions/3uTJTFBagNFToQp1I1pMBxAsIs0QukHDF6frGx61.png',
                    'created_at' => '2026-03-19 19:23:22',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                463 => 
                array (
                    'id' => 464,
                    'category_id' => 6,
                    'question_number' => 4059,
                    'question_text' => ' Në këtë kryqëzim radhitja e kalimit duhet të
jetë: vetura e kuqe, policia, vetura e verdhë, unë',
                    'image' => 'questions/BBFCSyr9J7uE4tIi3WRKmi7xEGXyHpZkjnezMTSJ.png',
                    'created_at' => '2026-03-19 19:23:55',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                464 => 
                array (
                    'id' => 465,
                    'category_id' => 6,
                    'question_number' => 4060,
                    'question_text' => 'Në kryqëzim unë lëviz i pari',
                    'image' => 'questions/1zRgdOyZR27HwWGqyvwcyyFdTRXxIr4WzCEsA4uA.png',
                    'created_at' => '2026-03-19 19:26:55',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                465 => 
                array (
                    'id' => 466,
                    'category_id' => 6,
                    'question_number' => 4061,
                    'question_text' => 'Në këtë kryqëzim, duhet të kujdesemi për këmbësorin edhe
pse nuk është duke lëvizur drejt',
                    'image' => 'questions/HgTGYXJgZzS1mb4F2IQyMYsXYEkL0m6lG1ZGfnoX.png',
                    'created_at' => '2026-03-19 19:27:36',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                466 => 
                array (
                    'id' => 467,
                    'category_id' => 6,
                    'question_number' => 4062,
                    'question_text' => 'Në këtë kryqëzim, do të vazhdoj lëvizjen pa u ndalur',
                    'image' => 'questions/1U4fimN8jSYrYRK4XXEw4Xh64hRjOEg8jC0oA6Wi.png',
                    'created_at' => '2026-03-19 19:28:12',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                467 => 
                array (
                    'id' => 468,
                    'category_id' => 6,
                    'question_number' => 4063,
                    'question_text' => 'Në këtë kryqëzim biçiklisti lëviz i dyti',
                    'image' => 'questions/laLdAdOCsJPal8YocNc7BnVbMrc4VEE2DeuYvuq5.png',
                    'created_at' => '2026-03-19 19:28:37',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                468 => 
                array (
                    'id' => 469,
                    'category_id' => 6,
                    'question_number' => 4064,
                    'question_text' => 'Në këtë kryqëzim duhet të ndalem para shenjës
STOP, pastaj do të vazhdoj lëvizjen me kujdes të shtuar',
                    'image' => 'questions/uYDgcl6smym3UyD1gFaHWRIS6hZdgfo4WKKPXavK.png',
                    'created_at' => '2026-03-19 19:29:07',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                469 => 
                array (
                    'id' => 470,
                    'category_id' => 6,
                    'question_number' => 4065,
                    'question_text' => 'Në këtë situatë, do t’i jap përparësi kalimi automjetit të
verdhë, pasi që e mbanë drejtimin e lëvizjes',
                    'image' => 'questions/AbW1jM5878NT1roewpe0CfO2R2LFJhw5KR3vzgJJ.png',
                    'created_at' => '2026-03-19 19:29:41',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                470 => 
                array (
                    'id' => 471,
                    'category_id' => 6,
                    'question_number' => 4066,
                    'question_text' => 'Në këtë situatë unë do të lëviz i pari',
                    'image' => 'questions/y2yOfwnUvVBpBkZeBPaTNTCeauprlHVCcTnOX02H.png',
                    'created_at' => '2026-03-19 19:30:15',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                471 => 
                array (
                    'id' => 472,
                    'category_id' => 6,
                    'question_number' => 4067,
                    'question_text' => 'Në këtë situatë unë do të lëviz i pari.',
                    'image' => 'questions/AZvzSEVDVEEFX7yOkcsJVg6H57WDx38V0rwWeHNw.png',
                    'created_at' => '2026-03-19 19:31:18',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                472 => 
                array (
                    'id' => 473,
                    'category_id' => 6,
                    'question_number' => 4068,
                    'question_text' => 'Në këtë situatë unë do të lëviz i pari',
                    'image' => 'questions/QAD4Xa2gxOCixZJRaD04Bw0ZXAB3XhYdtSxwrlOE.png',
                    'created_at' => '2026-03-19 19:31:51',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                473 => 
                array (
                    'id' => 474,
                    'category_id' => 6,
                    'question_number' => 4069,
                    'question_text' => 'Në këtë situatë unë do të lëviz i pari',
                    'image' => 'questions/1ANP7k3aHkvE7NTDWhyKKH7RdHNPKwGebEYRgvtj.png',
                    'created_at' => '2026-03-19 19:32:29',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                474 => 
                array (
                    'id' => 475,
                    'category_id' => 6,
                    'question_number' => 4070,
                    'question_text' => 'Në këtë kryqëzim vetura e verdhë lëviz e para',
                    'image' => 'questions/QpON9bWdxPgML5eLQuqt6FyGviHP9pc5sEkBM9MF.png',
                    'created_at' => '2026-03-19 19:33:14',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                475 => 
                array (
                    'id' => 476,
                    'category_id' => 6,
                    'question_number' => 4071,
                    'question_text' => 'Në kryqëzim radhitja e kalimit duhet të jetë:
vetura e policisë, vetura e verdhë, unë, vetura e kuqe',
                    'image' => 'questions/FiFu8GufZOPzXiCGnWrZUd5DHHtAdAX7leZnuq67.png',
                    'created_at' => '2026-03-19 19:33:44',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                476 => 
                array (
                    'id' => 477,
                    'category_id' => 6,
                    'question_number' => 4072,
                    'question_text' => 'Në këtë situatë unë do të lëviz i fundit',
                    'image' => 'questions/hbyoGEV7vqDoYIOrGQW60S6dvJFH2dbCcZxeTx1J.png',
                    'created_at' => '2026-03-19 19:34:13',
                    'updated_at' => '2026-03-23 09:23:55',
                ),
                477 => 
                array (
                    'id' => 478,
                    'category_id' => 7,
                    'question_number' => 5001,
                    'question_text' => 'Alkooli gjatë ngasjes nxit dëshirën për shpejtësi të madhe',
                    'image' => NULL,
                    'created_at' => '2026-03-19 19:37:16',
                    'updated_at' => '2026-03-19 19:37:16',
                ),
                478 => 
                array (
                    'id' => 479,
                    'category_id' => 7,
                    'question_number' => 5002,
                    'question_text' => 'Alkooli gjatë ngasjes ndikon negativisht në aftësitë psikofizike të shoferit',
                    'image' => NULL,
                    'created_at' => '2026-03-19 19:37:38',
                    'updated_at' => '2026-03-19 19:37:38',
                ),
                479 => 
                array (
                    'id' => 480,
                    'category_id' => 7,
                    'question_number' => 5003,
                'question_text' => 'Medikamentet (barërat) të cilat nuk lejohen të konsumohen para dhe gjatë ngasjes së mjetit
ndikojnë pozitivisht në aftësitë psikofizike të shoferit',
                'image' => NULL,
                'created_at' => '2026-03-19 19:38:05',
                'updated_at' => '2026-03-19 19:38:05',
            ),
            480 => 
            array (
                'id' => 481,
                'category_id' => 7,
                'question_number' => 5004,
                'question_text' => 'Shoferi nën ndikim të alkoolit i vlerëson drejt situatat në trafik',
                'image' => NULL,
                'created_at' => '2026-03-19 19:38:35',
                'updated_at' => '2026-03-19 19:38:35',
            ),
            481 => 
            array (
                'id' => 482,
                'category_id' => 7,
                'question_number' => 5005,
                'question_text' => 'Lodhja ndikon pozitivisht në gjendjen psiko-fizike të shoferit',
                'image' => NULL,
                'created_at' => '2026-03-19 19:38:54',
                'updated_at' => '2026-03-19 19:38:54',
            ),
            482 => 
            array (
                'id' => 483,
                'category_id' => 7,
                'question_number' => 5006,
                'question_text' => 'Lodhja ndikon negativisht në gjendjen psiko-fizike të shoferit',
                'image' => NULL,
                'created_at' => '2026-03-19 19:39:20',
                'updated_at' => '2026-03-19 19:39:20',
            ),
            483 => 
            array (
                'id' => 484,
                'category_id' => 7,
                'question_number' => 5007,
                'question_text' => 'Pushimi i rregullt ndikon negativisht në gjendjen psiko-fizike të shoferit',
                'image' => NULL,
                'created_at' => '2026-03-19 19:39:47',
                'updated_at' => '2026-03-19 19:39:47',
            ),
            484 => 
            array (
                'id' => 485,
                'category_id' => 7,
                'question_number' => 5008,
                'question_text' => 'Zhurma dhe vibracionet ndikojnë pozitivisht në gjendjen psiko-fizike të shoferit',
                'image' => NULL,
                'created_at' => '2026-03-19 19:40:12',
                'updated_at' => '2026-03-19 19:40:12',
            ),
            485 => 
            array (
                'id' => 486,
                'category_id' => 7,
                'question_number' => 5009,
            'question_text' => 'Narkotikët (droga) ndikojnë negativisht në aftësitë psiko-fizike të shoferit',
                'image' => NULL,
                'created_at' => '2026-03-19 19:40:32',
                'updated_at' => '2026-03-19 19:40:32',
            ),
            486 => 
            array (
                'id' => 487,
                'category_id' => 7,
                'question_number' => 5010,
                'question_text' => 'Ushqimi i rregullt ndikon negativisht në aftësitë psiko-fizike të shoferit',
                'image' => NULL,
                'created_at' => '2026-03-19 19:40:57',
                'updated_at' => '2026-03-19 19:40:57',
            ),
            487 => 
            array (
                'id' => 488,
                'category_id' => 7,
                'question_number' => 5011,
                'question_text' => 'Nëse shoferi gjatë ngasjes bisedon me bashkëudhëtarin kjo ndikon negativisht në sigurinë rrugore',
                'image' => NULL,
                'created_at' => '2026-03-19 19:41:25',
                'updated_at' => '2026-03-19 19:41:25',
            ),
            488 => 
            array (
                'id' => 489,
                'category_id' => 7,
                'question_number' => 5101,
                'question_text' => 'Ngasja e veturës me shpejtësi maksimale ndikon në ruajtjen e mjedisit dhe kursimin e
karburantit (Eko-ngasja',
                    'image' => NULL,
                    'created_at' => '2026-03-19 19:42:09',
                    'updated_at' => '2026-03-19 19:42:09',
                ),
                489 => 
                array (
                    'id' => 490,
                    'category_id' => 7,
                    'question_number' => 5102,
                    'question_text' => 'Nëse mjetit të ndaluar i japim gaz, kjo ndikon në ruajtjen e mjedisit dhe kursimin e
karburantit (Eko- ngasja)',
                        'image' => NULL,
                        'created_at' => '2026-03-19 19:42:34',
                        'updated_at' => '2026-03-19 19:42:34',
                    ),
                    490 => 
                    array (
                        'id' => 491,
                        'category_id' => 7,
                        'question_number' => 5103,
                        'question_text' => 'Ngasja pa nxitim dhe frenim të vrullshëm ndikon në ruajtjen e mjedisit dhe kursimin e
karburantit (Eko- ngasja)',
                            'image' => NULL,
                            'created_at' => '2026-03-19 19:42:59',
                            'updated_at' => '2026-03-19 19:42:59',
                        ),
                        491 => 
                        array (
                            'id' => 492,
                            'category_id' => 7,
                            'question_number' => 5104,
                            'question_text' => 'Nëse gjatë pritjeve të gjata fiket motori do të ndikojë në ruajtjen e mjedisit dhe kursimin e
karburantit (Eko- ngasja)',
                                'image' => NULL,
                                'created_at' => '2026-03-19 19:43:36',
                                'updated_at' => '2026-03-19 19:43:36',
                            ),
                            492 => 
                            array (
                                'id' => 493,
                                'category_id' => 7,
                                'question_number' => 5105,
                                'question_text' => 'Përdorimi i veturës në relacione të shkurtëra ndikon në ruajtjen e mjedisit dhe kursimin e
karburantit (Eko- ngasja)',
                                    'image' => NULL,
                                    'created_at' => '2026-03-19 19:44:02',
                                    'updated_at' => '2026-03-19 19:44:02',
                                ),
                                493 => 
                                array (
                                    'id' => 494,
                                    'category_id' => 7,
                                    'question_number' => 5106,
                                    'question_text' => 'Shmangia e ngasjes gjatë trafikut të dendur ndikon në ruajtjen e mjedisit dhe kursimin e
karburantit (Eko- ngasja)',
                                        'image' => NULL,
                                        'created_at' => '2026-03-19 19:45:03',
                                        'updated_at' => '2026-03-19 19:45:03',
                                    ),
                                    494 => 
                                    array (
                                        'id' => 495,
                                        'category_id' => 7,
                                        'question_number' => 5107,
                                        'question_text' => 'Ngasja e veturës me numër maksimal të rrotullimeve të motorit ndikon në ruajtjen e mjedisit
dhe kursimin e karburantit (Eko- ngasja)',
                                            'image' => NULL,
                                            'created_at' => '2026-03-19 19:45:41',
                                            'updated_at' => '2026-03-19 19:45:41',
                                        ),
                                        495 => 
                                        array (
                                            'id' => 496,
                                            'category_id' => 7,
                                            'question_number' => 5108,
                                            'question_text' => 'Ngasjen ekonomike e karakterizon shpenzimi minimal i karburantit',
                                            'image' => NULL,
                                            'created_at' => '2026-03-19 19:46:01',
                                            'updated_at' => '2026-03-19 19:46:01',
                                        ),
                                        496 => 
                                        array (
                                            'id' => 497,
                                            'category_id' => 7,
                                            'question_number' => 5109,
                                            'question_text' => 'Ngasjen ekonomike e karakterizon shpenzimi maksimal i karburantit',
                                            'image' => NULL,
                                            'created_at' => '2026-03-19 19:46:22',
                                            'updated_at' => '2026-03-19 19:46:22',
                                        ),
                                        497 => 
                                        array (
                                            'id' => 498,
                                            'category_id' => 7,
                                            'question_number' => 5110,
                                            'question_text' => 'Eko ngasja karakterizohet me numër të mesëm të rrotullimeve të motorit',
                                            'image' => NULL,
                                            'created_at' => '2026-03-19 19:46:50',
                                            'updated_at' => '2026-03-19 19:46:50',
                                        ),
                                        498 => 
                                        array (
                                            'id' => 499,
                                            'category_id' => 7,
                                            'question_number' => 5201,
                                            'question_text' => ' Punën e motorit e mundëson sistemi për ftohje',
                                            'image' => 'questions/foKfjveXoTNWwrkwfODUoTGAa2qhnjmQInZenIRQ.png',
                                            'created_at' => '2026-03-19 19:57:16',
                                            'updated_at' => '2026-03-23 09:23:55',
                                        ),
                                        499 => 
                                        array (
                                            'id' => 500,
                                            'category_id' => 7,
                                            'question_number' => 5202,
                                            'question_text' => 'Trekëndëshi i sigurisë është pajisje rezervë që duhet të mbahet në veturë',
                                            'image' => 'questions/q7jsShJT4CwChyQDvM9oKlKzJ5je5RNeD73SCc9N.png',
                                            'created_at' => '2026-03-19 19:57:49',
                                            'updated_at' => '2026-03-23 09:23:55',
                                        ),
                                    ));
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'id' => 501,
                'category_id' => 7,
                'question_number' => 5203,
                'question_text' => 'Treguesit e drejtimit duhet të përdoren gjatë veprimeve me automjet (tejkalimi,
kthimi majtas ose djathtas, etj.)',
                'image' => 'questions/Ltlwld79EeFwdsTL8b9tDMrm7zbN0XG09WysWksl.png',
                'created_at' => '2026-03-19 19:58:23',
                'updated_at' => '2026-03-23 09:23:55',
            ),
            1 => 
            array (
                'id' => 502,
                'category_id' => 7,
                'question_number' => 5204,
                'question_text' => 'Tabela kontrolluese e automjetit shërben për kontrollimin e numrit të
udhëtarëve në automjet',
                'image' => 'questions/JfHagn4THlcaoX8LWyaygF4vPuwbvfvgBvOJXmfR.png',
                'created_at' => '2026-03-19 19:58:57',
                'updated_at' => '2026-03-23 09:23:55',
            ),
            2 => 
            array (
                'id' => 503,
                'category_id' => 7,
                'question_number' => 5205,
            'question_text' => 'Shtypja e ulët e ajrit në pneumatikë (goma) zvogëlon stabilitetin e mjetit
dhe dëmton pneumatikët',
            'image' => 'questions/e9wxFXidncvdyK0kW99wWGNdruv69l0ofqd5M3or.png',
            'created_at' => '2026-03-19 19:59:32',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        3 => 
        array (
            'id' => 504,
            'category_id' => 7,
            'question_number' => 5206,
            'question_text' => 'Timoni shërben për funksionimin e motorit',
            'image' => 'questions/iUdrfZ5jkHOm9qnyeEpr5ZFXiI9oFy1T0wFXFO2s.png',
            'created_at' => '2026-03-19 20:00:09',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        4 => 
        array (
            'id' => 505,
            'category_id' => 7,
            'question_number' => 5207,
        'question_text' => 'Shtypja e ulët e ajrit në pneumatikë (goma) rrit shpenzimet e karburantit',
            'image' => 'questions/D8SClHf0ThEFJQqafoTwuf9qB6xb3diGhOeJLVOQ.png',
            'created_at' => '2026-03-19 20:00:54',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        5 => 
        array (
            'id' => 506,
            'category_id' => 7,
            'question_number' => 5208,
            'question_text' => 'Në tabelën instrumentale është paraqitur aktivizimi i pajisjeve sinjalizuese',
            'image' => 'questions/fryPiWT4wLWl2kW3VYsFbRdmLVfcF0A6OsZFk7Ho.png',
            'created_at' => '2026-03-19 20:01:37',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        6 => 
        array (
            'id' => 507,
            'category_id' => 7,
            'question_number' => 5209,
            'question_text' => 'Sistemi ABS i automjetit mundëson mosbllokimin e rrotave gjatë frenimit
të vrullshëm',
            'image' => 'questions/6uyQ6x4ZYGEgG2ewXsPKQVY1M25XlOnTDzO9Ozcf.png',
            'created_at' => '2026-03-19 20:02:11',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        7 => 
        array (
            'id' => 508,
            'category_id' => 7,
            'question_number' => 5210,
            'question_text' => 'Pedalja e friksionit shërben për ndaljen e vrullshme të automjetit',
            'image' => 'questions/HFuuDRXF2UaqZokIrOfgBxxjMysx7QP7AQXYrmFQ.png',
            'created_at' => '2026-03-19 20:02:43',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        8 => 
        array (
            'id' => 509,
            'category_id' => 7,
            'question_number' => 5211,
            'question_text' => 'Llamba kontrolluese në foto tregon se temperatura e motorit ka kaluar
kufirin e lejuar - sistemi I ftohjes në defekt',
            'image' => 'questions/uH43X4ExJWiEnhCAKJc2UmSJMstAzW6ClyVVIB9r.png',
            'created_at' => '2026-03-19 20:03:20',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        9 => 
        array (
            'id' => 510,
            'category_id' => 7,
            'question_number' => 5212,
            'question_text' => 'Llamba kontrolluese në foto sinjalizon se sistemi ABS nuk është funksional.',
            'image' => 'questions/4udU7nDFVTRYhy0qbX67oXzOcIKLehDJT08fTp9R.png',
            'created_at' => '2026-03-19 20:04:20',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        10 => 
        array (
            'id' => 511,
            'category_id' => 7,
            'question_number' => 5213,
            'question_text' => 'Llampa kontrolluese në foto tregon se temperatura e motorit nuk e ka kaluar
kufirin e lejuar-sistemi i ftohjes defekt.',
            'image' => 'questions/bjMdMmVWzGnVpAn866ATCmrdL7hEc14G1FNJat1c.png',
            'created_at' => '2026-03-19 20:04:57',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        11 => 
        array (
            'id' => 512,
            'category_id' => 7,
            'question_number' => 5214,
            'question_text' => 'Llampa kontrolluese në foto tregon sasinë e pamjaftueshme të
vajit në motor ose defektin në sistemin e lubrifikimit',
            'image' => 'questions/R80cc1ieYJK4wEJd5pMbvGYvA0mWJbjtpYdQiPnw.png',
            'created_at' => '2026-03-19 20:05:28',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        12 => 
        array (
            'id' => 513,
            'category_id' => 7,
            'question_number' => 5222,
            'question_text' => 'Llamba kontrolluese tregon se freni i parkimit është funksional',
            'image' => 'questions/IoDZqaUe5z0Mq1RkT3Bm8girGX3s7YABVVrQjeSo.png',
            'created_at' => '2026-03-19 20:06:25',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        13 => 
        array (
            'id' => 514,
            'category_id' => 7,
            'question_number' => 5223,
            'question_text' => 'Llamba kontrolluese tregon se rripi i sigurisë është aktivizuar',
            'image' => 'questions/LFBD4teb6kMLztIZSBuGit3KLab7iCMX6MQfkBtd.png',
            'created_at' => '2026-03-19 20:06:58',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        14 => 
        array (
            'id' => 515,
            'category_id' => 7,
            'question_number' => 5224,
        'question_text' => 'Llamba kontrolluese paraqet ESP - në (Programi elektronik i stabilitetit)',
            'image' => 'questions/nUpN6qvPUSyM9A3ql4POTlqFaQLOYg9hmLL2FTZY.png',
            'created_at' => '2026-03-19 20:07:52',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        15 => 
        array (
            'id' => 516,
            'category_id' => 7,
            'question_number' => 5225,
            'question_text' => 'Llamba kontrolluese tregon shpejtësinë e lëvizjes',
            'image' => 'questions/NNwwThr7Vb7w341H7cdKhdYPQlVdW6yDXLBnDeW2.png',
            'created_at' => '2026-03-19 20:08:25',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        16 => 
        array (
            'id' => 517,
            'category_id' => 7,
            'question_number' => 5226,
            'question_text' => 'Llamba kontrolluese tregon temperaturën e motorit',
            'image' => 'questions/AoEjCoQ0rSWZrHR3a74HMPw6FgrbKGPJfY2MmkOc.png',
            'created_at' => '2026-03-19 20:08:58',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        17 => 
        array (
            'id' => 518,
            'category_id' => 7,
            'question_number' => 5227,
            'question_text' => 'Llampa kontrolluese tregon se dritat janë jashtë funksionit',
            'image' => 'questions/twh7jhUPQcVvLQMIrZlqNSUEBq6ZGJJx5UR6fbPh.png',
            'created_at' => '2026-03-19 20:09:45',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        18 => 
        array (
            'id' => 519,
            'category_id' => 7,
            'question_number' => 5228,
            'question_text' => 'Llamba kontrolluese tregon problemet me jastëkun e ajrit',
            'image' => 'questions/roGuuPtTIME2Nk16NQ997qyMOVfImn46vYn1b6Zw.png',
            'created_at' => '2026-03-19 20:11:54',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        19 => 
        array (
            'id' => 520,
            'category_id' => 7,
            'question_number' => 5215,
            'question_text' => 'Llamba kontrolluese në foto tregon se në automjet janë të ndezura dritat e mjegullës
',
            'image' => 'questions/CoEWy1MT2gca904yHGn1CzE5nSXMQ07qdoFVIssf.png',
            'created_at' => '2026-03-19 20:13:27',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        20 => 
        array (
            'id' => 521,
            'category_id' => 7,
            'question_number' => 5216,
            'question_text' => 'Llamba kontrolluese në foto tregon se në automjet janë të ndezura dritat e shkurta

',
            'image' => 'questions/fvI7qDhnL8gfIWz2y4aNQOyPEzFrXkmmZAJYX1ak.png',
            'created_at' => '2026-03-19 20:14:20',
            'updated_at' => '2026-03-23 09:23:55',
        ),
        21 => 
        array (
            'id' => 522,
            'category_id' => 7,
            'question_number' => 5217,
        'question_text' => 'Llampa kontrolluese në foto sinjalizon (tregon) në automjet janë të
ndezura të gjithë treguesit e drejtimit.

',
        'image' => 'questions/8eNlbfDM4HACI1aKU38fbQ9qYfh094Skqwu4wvzd.png',
        'created_at' => '2026-03-19 20:15:35',
        'updated_at' => '2026-03-23 09:23:55',
    ),
    22 => 
    array (
        'id' => 523,
        'category_id' => 7,
        'question_number' => 5218,
        'question_text' => 'Llamba kontrolluese tregon se alternatori është duke funksionuar në
rregull

',
        'image' => 'questions/qKUTQVVrtZKmbbf7ZmsZdlUSnuFhTizRK0u5Ds8n.png',
        'created_at' => '2026-03-19 20:16:41',
        'updated_at' => '2026-03-23 09:23:55',
    ),
    23 => 
    array (
        'id' => 524,
        'category_id' => 7,
        'question_number' => 5219,
        'question_text' => 'Llamba kontrolluese tregon se tempomati nuk është i aktivizuar

',
        'image' => 'questions/TNa145zFZr5TcBUXq5HeVCwpL8TuWbfwA2Ut8FGu.png',
        'created_at' => '2026-03-19 20:17:19',
        'updated_at' => '2026-03-23 09:23:55',
    ),
    24 => 
    array (
        'id' => 525,
        'category_id' => 7,
        'question_number' => 5220,
        'question_text' => 'Llamba kontrolluese tregon se dritat e gjata janë të ndezura

',
        'image' => 'questions/TnI3VHsvKWbw5hOZW78i6SCKhBeGYOZzyUffYLcZ.png',
        'created_at' => '2026-03-19 20:17:59',
        'updated_at' => '2026-03-23 09:23:55',
    ),
    25 => 
    array (
        'id' => 526,
        'category_id' => 7,
        'question_number' => 5221,
        'question_text' => 'Llamba kontrolluese tregon problemin në sistemin elektrik

',
        'image' => 'questions/CEnYhxHBm9Xb0sLLWCyzMOCLk4nYlAvfZofSljkl.png',
        'created_at' => '2026-03-19 20:18:43',
        'updated_at' => '2026-03-23 09:23:55',
    ),
    26 => 
    array (
        'id' => 527,
        'category_id' => 7,
        'question_number' => 5229,
        'question_text' => 'Llamba kontrolluese tregon se dritat për mjegull janë të ndezura',
        'image' => 'questions/EWz92Wa3QMEGWsre0rqKrxlhbahP1FCyOvMTsKQS.png',
        'created_at' => '2026-03-19 20:20:16',
        'updated_at' => '2026-03-23 09:23:55',
    ),
    27 => 
    array (
        'id' => 528,
        'category_id' => 7,
        'question_number' => 5230,
        'question_text' => 'Llamba kontrolluese tregon se servo timoni është në rregull',
        'image' => 'questions/FjiTTOdYk5RtgpLM8eBlGUmSNi4B2cNjz9SkDMBJ.png',
        'created_at' => '2026-03-19 20:20:49',
        'updated_at' => '2026-03-23 09:23:55',
    ),
    28 => 
    array (
        'id' => 529,
        'category_id' => 7,
        'question_number' => 5231,
        'question_text' => 'Në figurë është paraqitur sistemi Ekologjik',
        'image' => 'questions/Xb04RFS7FTCu3Ng5D72fSJEy84Jrf3ivI5KDFiMQ.png',
        'created_at' => '2026-03-19 20:21:21',
        'updated_at' => '2026-03-23 09:23:55',
    ),
    29 => 
    array (
        'id' => 530,
        'category_id' => 7,
        'question_number' => 5232,
        'question_text' => 'Në figurë është paraqitur distanca e vogël e sigurisë',
        'image' => 'questions/Lej3d3XRxINuoMPc6ocyz8cgb2WrGCVDdpxvWs0P.png',
        'created_at' => '2026-03-19 20:22:25',
        'updated_at' => '2026-03-23 09:23:55',
    ),
    30 => 
    array (
        'id' => 531,
        'category_id' => 7,
        'question_number' => 5233,
        'question_text' => 'Në figurë është paraqitur matësi i kohës së ngasjes',
        'image' => 'questions/XVeX2UZBbFLalYimhStzSInJIy5m98PFtw9jpABb.png',
        'created_at' => '2026-03-19 20:23:02',
        'updated_at' => '2026-03-23 09:23:55',
    ),
    31 => 
    array (
        'id' => 532,
        'category_id' => 7,
        'question_number' => 5234,
        'question_text' => 'Në figurë është paraqitur vend - lulishtja',
        'image' => 'questions/GUSO82IExLdwx4Z3OYefNOUlpvgP99JTpLYfqOj0.png',
        'created_at' => '2026-03-19 20:23:41',
        'updated_at' => '2026-03-23 09:23:55',
    ),
    32 => 
    array (
        'id' => 533,
        'category_id' => 7,
        'question_number' => 5235,
        'question_text' => 'Në figurë është paraqitur mungesa e ujit për larjen e xhamave',
        'image' => 'questions/LXsgO3iNXSe3EMtDUkMqYxbl6T2VQpXrj8quTCXf.png',
        'created_at' => '2026-03-19 20:24:08',
        'updated_at' => '2026-03-23 09:23:55',
    ),
    33 => 
    array (
        'id' => 534,
        'category_id' => 7,
        'question_number' => 5301,
        'question_text' => 'Çka e karakterizon sigurinë e shoferit në trafikun rrugor?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:27:31',
        'updated_at' => '2026-03-19 20:27:31',
    ),
    34 => 
    array (
        'id' => 535,
        'category_id' => 7,
        'question_number' => 5302,
        'question_text' => 'Cilat janë parimet e ngasjes defanzive?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:28:39',
        'updated_at' => '2026-03-19 20:28:39',
    ),
    35 => 
    array (
        'id' => 536,
        'category_id' => 7,
        'question_number' => 5303,
        'question_text' => 'Çka nënkuptohet me kulturë në trafik?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:29:10',
        'updated_at' => '2026-03-19 20:29:10',
    ),
    36 => 
    array (
        'id' => 537,
        'category_id' => 7,
        'question_number' => 5304,
    'question_text' => 'Cilat janë parimet e ngasjes defanzive (mbrojtëse)?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:29:45',
        'updated_at' => '2026-03-19 20:29:45',
    ),
    37 => 
    array (
        'id' => 538,
        'category_id' => 7,
        'question_number' => 5305,
    'question_text' => 'Cilat janë parimet e ngasjes defanzive (mbrojtëse)?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:30:38',
        'updated_at' => '2026-03-19 20:30:38',
    ),
    38 => 
    array (
        'id' => 539,
        'category_id' => 7,
        'question_number' => 5306,
        'question_text' => 'Çka e karakterizon sigurinë e shoferit në trafikun rrugor?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:31:21',
        'updated_at' => '2026-03-19 20:31:21',
    ),
    39 => 
    array (
        'id' => 540,
        'category_id' => 7,
        'question_number' => 5307,
        'question_text' => 'Ndaj cilëve pjesëmarrës në trafik nuk vlen parimi i besueshmërisë?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:32:01',
        'updated_at' => '2026-03-19 20:32:01',
    ),
    40 => 
    array (
        'id' => 541,
        'category_id' => 7,
        'question_number' => 5308,
        'question_text' => 'Çka konsiderohet sjellje e gabuar në trafikun rrugor?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:32:42',
        'updated_at' => '2026-03-19 20:32:42',
    ),
    41 => 
    array (
        'id' => 542,
        'category_id' => 7,
        'question_number' => 5309,
        'question_text' => 'Pse nuk vlen parimi i besimit ndaj fëmijëve?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:33:10',
        'updated_at' => '2026-03-19 20:33:10',
    ),
    42 => 
    array (
        'id' => 543,
        'category_id' => 7,
        'question_number' => 5310,
        'question_text' => 'Çka duhet të kenë parasysh shoferët e rinj dhe të papërvojë?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:34:13',
        'updated_at' => '2026-03-19 20:34:13',
    ),
    43 => 
    array (
        'id' => 544,
        'category_id' => 7,
        'question_number' => 5311,
        'question_text' => 'Cilat janë shkaqet e përfshirjës së shoferëve të rinj në aksidente rrugore?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:34:52',
        'updated_at' => '2026-03-19 20:34:52',
    ),
    44 => 
    array (
        'id' => 545,
        'category_id' => 7,
        'question_number' => 5312,
        'question_text' => 'Çka është me rëndësi të dinë shoferët e rinj dhe të papërvojë?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:35:30',
        'updated_at' => '2026-03-19 20:35:30',
    ),
    45 => 
    array (
        'id' => 546,
        'category_id' => 7,
        'question_number' => 5313,
        'question_text' => 'Pse shoferët e rinj dhe të papërvojë e rrezikojnë sigurinë në trafikun rrugor?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:36:12',
        'updated_at' => '2026-03-19 20:36:12',
    ),
    46 => 
    array (
        'id' => 547,
        'category_id' => 7,
        'question_number' => 5314,
        'question_text' => 'Pse shoferët e rinjë dhe ata pa përvojë e rrezikojnë sigurinë në trafikun rrugor?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:36:58',
        'updated_at' => '2026-03-19 20:36:58',
    ),
    47 => 
    array (
        'id' => 548,
        'category_id' => 7,
        'question_number' => 5315,
        'question_text' => 'Cilët janë pjesëmarrësit më të rrezikuar në trafikun rrugor?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:37:27',
        'updated_at' => '2026-03-19 20:37:27',
    ),
    48 => 
    array (
        'id' => 549,
        'category_id' => 7,
        'question_number' => 5316,
        'question_text' => ' Si reagojn fëmijët në rrugë?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:38:02',
        'updated_at' => '2026-03-19 20:38:02',
    ),
    49 => 
    array (
        'id' => 550,
        'category_id' => 7,
        'question_number' => 5317,
        'question_text' => 'Cilat janë obligimet dhe përgjegjësitë e pjesëmarrësve në trafik?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:38:47',
        'updated_at' => '2026-03-19 20:38:47',
    ),
    50 => 
    array (
        'id' => 551,
        'category_id' => 7,
        'question_number' => 5318,
        'question_text' => 'Në çka duhet të përqëndrojë vëmendjen shoferi gjatë ngasjes?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:39:29',
        'updated_at' => '2026-03-19 20:39:29',
    ),
    51 => 
    array (
        'id' => 552,
        'category_id' => 7,
        'question_number' => 5319,
        'question_text' => 'Në çka duhet të përqëndrojë vëmendjen shoferi gjatë ngasjes?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:39:59',
        'updated_at' => '2026-03-19 20:39:59',
    ),
    52 => 
    array (
        'id' => 553,
        'category_id' => 7,
        'question_number' => 5320,
        'question_text' => 'Çka e karakterizon sjelljen e rrezikshme në trafikun rrugor?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:40:31',
        'updated_at' => '2026-03-19 20:40:31',
    ),
    53 => 
    array (
        'id' => 554,
        'category_id' => 7,
        'question_number' => 5321,
    'question_text' => 'Cilat janë parimet e ngasjes defanzive (mbrojtëse)?',
        'image' => NULL,
        'created_at' => '2026-03-19 20:41:16',
        'updated_at' => '2026-03-19 20:41:16',
    ),
));
        
        
    }
}