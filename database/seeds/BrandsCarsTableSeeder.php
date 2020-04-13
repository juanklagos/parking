<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BrandsCarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                "id" => 1, "name" => "AC", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 2, "name" => "AC PROPULSION", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 3, "name" => "ACURA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 4, "name" => "A.D. TRAMONTANA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 5, "name" => "ALFA ROMEO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 6, "name" => "ALMAC", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 7, "name" => "ALTERNATIVE CARS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 8, "name" => "AMUZA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 9, "name" => "ANTEROS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 10, "name" => "ARASH", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 11, "name" => "ARIEL", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 12, "name" => "ARRINERA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 13, "name" => "ASL", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 14, "name" => "ASTERIO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 15, "name" => "ASTON MARTIN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 16, "name" => "AUDI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 17, "name" => "BAC", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 18, "name" => "BAJAJ", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 19, "name" => "BEIJING AUTOMOBILE WORKS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 20, "name" => "BENTLEY", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 21, "name" => "BMW", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 22, "name" => "BOLLORÉ", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 23, "name" => "BOLWELL", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 24, "name" => "BRILLIANCE / HUACHEN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 25, "name" => "BRISTOL", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 26, "name" => "BRITISH LEYLAND", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 27, "name" => "BRM BUGGY", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 28, "name" => "BROOKE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 29, "name" => "BUDDY", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 30, "name" => "BUFORI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 31, "name" => "BUGATTI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 32, "name" => "BUICK", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 33, "name" => "BYD", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 34, "name" => "CADILLAC", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 35, "name" => "CAPARO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 36, "name" => "CARBONTECH", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 37, "name" => "CARICE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 38, "name" => "CHANG'AN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 39, "name" => "CHANGHE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 40, "name" => "CHERY", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 41, "name" => "CHEVROLET", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 42, "name" => "CHEVRON", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 43, "name" => "CITROËN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 44, "name" => "CHRYSLER", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 45, "name" => "COMMUTER CARS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 46, "name" => "CONNAUGHT", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 47, "name" => "COVINI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 48, "name" => "DACIA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 49, "name" => "DAIHATSU", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 50, "name" => "DATSUN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 51, "name" => "DE LA CHAPELLE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 52, "name" => "DMC", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 53, "name" => "DIARDI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 54, "name" => "DODGE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 55, "name" => "DONKERVOORT", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 56, "name" => "DONGFENG", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 57, "name" => "DONTO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 58, "name" => "DS AUTOMOBILES", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 59, "name" => "DYNASTI ELECTRIC CAR CORP.", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 60, "name" => "E-VADE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 61, "name" => "EFFEDI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 62, "name" => "EGY-TECH ENGINEERING", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 63, "name" => "ELECTRIC RACEABOUT", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 64, "name" => "ELFIN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 65, "name" => "EMGRAND", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 66, "name" => "ENGLON", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 67, "name" => "ETERNITI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 68, "name" => "ETOX", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 69, "name" => "EQUUS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 70, "name" => "EXAGON", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 71, "name" => "FARALLI & MAZZANTI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 72, "name" => "FAW", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 73, "name" => "FERRARI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 74, "name" => "FIAT", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 75, "name" => "FISKER", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 76, "name" => "FODAY", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 77, "name" => "FORCE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 78, "name" => "FORD", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 79, "name" => "FORD AUSTRALIA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 80, "name" => "FORD GERMANY", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 81, "name" => "FORNASARI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 82, "name" => "FRASER", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 83, "name" => "GAC GROUP", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 84, "name" => "GALPIN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 85, "name" => "GEELY", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 86, "name" => "GENESIS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 87, "name" => "GIBBS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 88, "name" => "GILLET", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 89, "name" => "GINETTA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 90, "name" => "GMC", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 91, "name" => "GONOW", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 92, "name" => "GREAT WALL / CHANGCHENG", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 93, "name" => "GREENTECH AUTOMOTIVE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 94, "name" => "GRINNALL", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 95, "name" => "GTA MOTOR", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 96, "name" => "GUMPERT", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 97, "name" => "GURGEL", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 98, "name" => "HENNESSEY", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 99, "name" => "HINDUSTAN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 100, "name" => "HOLDEN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 101, "name" => "HONDA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 102, "name" => "HONGQI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 103, "name" => "HRADYESH", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 104, "name" => "HTT TECHNOLOGIES", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 105, "name" => "HULME", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 106, "name" => "HYUNDAI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 107, "name" => "ICML", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 108, "name" => "IFR", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 109, "name" => "IRAN KHODRO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 110, "name" => "IKCO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 111, "name" => "IMPERIA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 112, "name" => "INFINITI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 113, "name" => "IVM", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 114, "name" => "INVICTA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 115, "name" => "ISDERA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 116, "name" => "ISUZU", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 117, "name" => "JAC", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 118, "name" => "JAGUAR", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 119, "name" => "JEEP", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 120, "name" => "JENSEN MOTORS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 121, "name" => "JETCAR", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 122, "name" => "JONWAY", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 123, "name" => "JOSS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 124, "name" => "KAIPAN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 125, "name" => "KANTANKA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 126, "name" => "KARMA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 127, "name" => "KOENIGSEGG", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 128, "name" => "KORRES", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 129, "name" => "KIA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 130, "name" => "KIAT", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 131, "name" => "KISH KHODRO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 132, "name" => "KTM", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 133, "name" => "LADA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 134, "name" => "LAMBORGHINI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 135, "name" => "LANCIA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 136, "name" => "LAND ROVER", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 137, "name" => "LANDWIND", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 138, "name" => "LARAKI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 139, "name" => "LEBLANC", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 140, "name" => "LEITCH", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 141, "name" => "LEOPARD", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 142, "name" => "LEXUS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 143, "name" => "LI-ION", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 144, "name" => "LIFAN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 145, "name" => "LIGHTNING", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 146, "name" => "LINCOLN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 147, "name" => "LISTER", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 148, "name" => "LOCAL MOTORS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 149, "name" => "LOBINI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 150, "name" => "LOTEC", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 151, "name" => "LOTUS CARS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 152, "name" => "LUCRA CARS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 153, "name" => "LUXGEN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 154, "name" => "MAHINDRA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 155, "name" => "MARUSSIA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 156, "name" => "MARUTI SUZUKI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 157, "name" => "MASERATI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 158, "name" => "MASTRETTA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 159, "name" => "MAZDA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 160, "name" => "MCLAREN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 161, "name" => "MERCEDES-BENZ", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 162, "name" => "MG", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 163, "name" => "MICRO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 164, "name" => "MINI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 165, "name" => "MITSUBISHI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 166, "name" => "MITSUOKA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 167, "name" => "MORGAN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 168, "name" => "MULLEN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 169, "name" => "MYCAR", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 170, "name" => "MYVI-PERODUA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 171, "name" => "NISSAN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 172, "name" => "NOBLE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 173, "name" => "NOTA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 174, "name" => "OLDSMOBILE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 175, "name" => "OPEL", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 176, "name" => "OPTIMAL ENERGY", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 177, "name" => "ORCA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 178, "name" => "OLTCIT", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 179, "name" => "PAGANI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 180, "name" => "PANHARD", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 181, "name" => "PANOZ", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 182, "name" => "PERANA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 183, "name" => "PERODUA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 184, "name" => "PEUGEOT", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 185, "name" => "P.G.O.", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 186, "name" => "POLARSUN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 187, "name" => "PLYMOUTH", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 188, "name" => "PORSCHE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 189, "name" => "PROTO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 190, "name" => "OULLIM", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 191, "name" => "PROTON", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 192, "name" => "PURITALIA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 193, "name" => "QOROS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 194, "name" => "QVALE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 195, "name" => "RADICAL", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 196, "name" => "RELIANT", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 197, "name" => "RENAULT", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 198, "name" => "REVA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 199, "name" => "RIMAC", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 200, "name" => "RINSPEED", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 201, "name" => "RODING", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 202, "name" => "ROEWE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 203, "name" => "ROLLS-ROYCE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 204, "name" => "ROSSIN-BERTIN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 205, "name" => "ROSSION", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 206, "name" => "ROVER", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 207, "name" => "SAAB", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 208, "name" => "SALEEN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 209, "name" => "SAIC-GM-WULING", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 210, "name" => "SAIPA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 211, "name" => "SAKER", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 212, "name" => "SAMSUNG", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 213, "name" => "SAN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 214, "name" => "SBARRO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 215, "name" => "SCION", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 216, "name" => "SEAT", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 217, "name" => "SHANGHAI MAPLE", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 218, "name" => "SIN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 219, "name" => "ŠKODA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 220, "name" => "SMART", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 221, "name" => "SPADA VETTURE SPORT", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 222, "name" => "SPYKER", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 223, "name" => "SSANGYONG", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 224, "name" => "SSC NORTH AMERICA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 225, "name" => "STREET & RACING TECHNOLOGY", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 226, "name" => "SUBARU", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 227, "name" => "SUZUKI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 228, "name" => "TANOM", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 229, "name" => "TATA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 230, "name" => "TAURO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 231, "name" => "TAWON CAR", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 232, "name" => "TD CARS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 233, "name" => "TESLA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 234, "name" => "THAI RUNG", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 235, "name" => "TOYOTA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 236, "name" => "TREKKA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 237, "name" => "TRIDENT", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 238, "name" => "TRIUMPH", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 239, "name" => "TROLLER", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 240, "name" => "TRUMPCHI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 241, "name" => "TUSHEK", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 242, "name" => "TVR", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 243, "name" => "TVS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 244, "name" => "ULTIMA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 245, "name" => "UMM", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 246, "name" => "UEV", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 247, "name" => "URI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 248, "name" => "UAZ", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 249, "name" => "VAUXHALL MOTORS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 250, "name" => "VECTOR", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 251, "name" => "VENCER", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 252, "name" => "VENIRAUTO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 253, "name" => "VENTURI", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 254, "name" => "VEPR", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 255, "name" => "VOLKSWAGEN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 256, "name" => "VOLVO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 257, "name" => "VINFAST", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 258, "name" => "W MOTORS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 259, "name" => "WALLYSCAR", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 260, "name" => "WESTFIELD", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 261, "name" => "WHEEGO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 262, "name" => "WIESMANN", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 263, "name" => "XENIA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 264, "name" => "YES!", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 265, "name" => "YOUABIAN PUMA", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 266, "name" => "ZASTAVA AUTOMOBILES", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 267, "name" => "ZENDER CARS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 268, "name" => "ZENOS CARS", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 269, "name" => "ZENVO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 270, "name" => "ZIL", "created_at" => Carbon::now(), "updated_at" => Carbon::now()], [
                "id" => 271, "name" => "ZX AUTO", "created_at" => Carbon::now(), "updated_at" => Carbon::now()]];

        DB::table('brands_cars')->insert($brands);
    }
}
