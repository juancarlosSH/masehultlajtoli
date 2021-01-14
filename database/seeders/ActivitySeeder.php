<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activity = new Activity();
        $activity->name = "Libro";
        $activity->slug = "Libro";
        $activity->description = "El libro es una artefacto que para la cultura Náhuatl era muy sagrado y lo llamaban Amoch";
        $activity->question = "¿Cómo se dice libro en Náhuatl?";
        $activity->answer = "amoch";
        $activity->course_id = 1;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Globo";
        $activity->slug = "Globo";
        $activity->description = "apompo";
        $activity->question = "¿Cómo se dice globo en Náhuatl?";
        $activity->answer = "apompo";
        $activity->course_id = 1;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Melón";
        $activity->slug = "Melón";
        $activity->description = "meloj";
        $activity->question = "¿Cómo se dice melón en Náhuatl?";
        $activity->answer = "meloj";
        $activity->course_id = 1;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Limón";
        $activity->slug = "Limón";
        $activity->description = "limo";
        $activity->question = "¿Cómo se dice limón en Náhuatl?";
        $activity->answer = "limo";
        $activity->course_id = 1;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Sol";
        $activity->slug = "Sol";
        $activity->description = "tona";
        $activity->question = "¿Cómo se dice sol en Náhuatl?";
        $activity->answer = "tona";
        $activity->course_id = 1;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Nube";
        $activity->slug = "Nube";
        $activity->description = "mixtli";
        $activity->question = "¿Cómo se dice nube en Náhuatl?";
        $activity->answer = "mixtli";
        $activity->course_id = 1;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Padre";
        $activity->slug = "Padre";
        $activity->description = "tata";
        $activity->question = "¿Cómo se dice padre en Náhuatl?";
        $activity->answer = "tata";
        $activity->course_id = 1;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Mamá";
        $activity->slug = "Mamá";
        $activity->description = "nana";
        $activity->question = "¿Cómo se dice mamá en Náhuatl?";
        $activity->answer = "nana";
        $activity->course_id = 1;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Pan";
        $activity->slug = "Pan";
        $activity->description = "pantsi";
        $activity->question = "¿Cómo se dice pan en Náhuatl?";
        $activity->answer = "pantsi";
        $activity->course_id = 1;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Carne";
        $activity->slug = "Carne";
        $activity->description = "nakatl";
        $activity->question = "¿Cómo se dice carne en Náhuatl?";
        $activity->answer = "nakatl";
        $activity->course_id = 1;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Perro";
        $activity->slug = "Perro";
        $activity->description = "chichi";
        $activity->question = "¿Cómo se dice perro en Náhuatl?";
        $activity->answer = "chichi";
        $activity->course_id = 1;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Mono";
        $activity->slug = "Mono";
        $activity->description = "miko";
        $activity->question = "¿Cómo se dice mono en Náhuatl?";
        $activity->answer = "miko";
        $activity->course_id = 1;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Juguete";
        $activity->slug = "Juguete";
        $activity->description = "El jueguete era el artefacto con el que pasaban horas de diversión los niños de aquella cultura Ajauili";
        $activity->question = "¿Cómo se dice juguete en Náhuatl?";
        $activity->answer = "ajauili";
        $activity->course_id = 2;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Sandía";
        $activity->slug = "Sandía";
        $activity->description = "ualeya";
        $activity->question = "¿Cómo se dice sandía en Náhuatl?";
        $activity->answer = "ualeya";
        $activity->course_id = 2;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Nopal";
        $activity->slug = "Nopal";
        $activity->description = "nejpali";
        $activity->question = "¿Cómo se dice nopal en Náhuatl?";
        $activity->answer = "nejpali";
        $activity->course_id = 2;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Palma";
        $activity->slug = "Palma";
        $activity->description = "apachtli";
        $activity->question = "¿Cómo se dice palma en Náhuatl?";
        $activity->answer = "apachtli";
        $activity->course_id = 2;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Estrella";
        $activity->slug = "Estrella";
        $activity->description = "sitlalij";
        $activity->question = "¿Cómo se dice estrella en Náhuatl?";
        $activity->answer = "sitlalij";
        $activity->course_id = 2;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Hermano";
        $activity->slug = "Hermano";
        $activity->description = "mimi";
        $activity->question = "¿Cómo se dice hermano en Náhuatl?";
        $activity->answer = "mimi";
        $activity->course_id = 2;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Hermana";
        $activity->slug = "Hermana";
        $activity->description = "pipi";
        $activity->question = "¿Cómo se dice hermana en Náhuatl?";
        $activity->answer = "pipi";
        $activity->course_id = 2;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Águila";
        $activity->slug = "Águila";
        $activity->description = "kuajtli";
        $activity->question = "¿Cómo se dice águila en Náhuatl?";
        $activity->answer = "kuajtli";
        $activity->course_id = 2;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Búho";
        $activity->slug = "Búho";
        $activity->description = "tekolotl";
        $activity->question = "¿Cómo se dice búho en Náhuatl?";
        $activity->answer = "tekolotl";
        $activity->course_id = 2;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Rana";
        $activity->slug = "Rana";
        $activity->description = "pechpechi";
        $activity->question = "¿Cómo se dice rana en Náhuatl?";
        $activity->answer = "pechpechi";
        $activity->course_id = 2;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Cabeza";
        $activity->slug = "Cabeza";
        $activity->description = "tsonteko";
        $activity->question = "¿Cómo se dice cabeza en Náhuatl?";
        $activity->answer = "tsonteko";
        $activity->course_id = 2;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Boca";
        $activity->slug = "Boca";
        $activity->description = "kamaktli";
        $activity->question = "¿Cómo se dice boca en Náhuatl?";
        $activity->answer = "kamaktli";
        $activity->course_id = 2;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Almohada";
        $activity->slug = "Almohada";
        $activity->description = "La almohada no es algo que se utilizara mucho por aquellas epocas pero sin embargo es importante saberlo y en Náhuatl se dice tsontetomitl";
        $activity->question = "¿Cómo se dice almohada en Náhuatl?";
        $activity->answer = "tsontetomitl";
        $activity->course_id = 3;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Cuchara";
        $activity->slug = "Cuchara";
        $activity->description = "makomoli";
        $activity->question = "¿Cómo se dice cuchara en Náhuatl?";
        $activity->answer = "makomoli";
        $activity->course_id = 3;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Piña";
        $activity->slug = "Piña";
        $activity->description = "matsajtli";
        $activity->question = "¿Cómo se dice piña en Náhuatl?";
        $activity->answer = "matsajtli";
        $activity->course_id = 3;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Plátano";
        $activity->slug = "Plátano";
        $activity->description = "xochikuali";
        $activity->question = "¿Cómo se dice plátano en Náhuatl?";
        $activity->answer = "xochikuali";
        $activity->course_id = 3;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Luna";
        $activity->slug = "Luna";
        $activity->description = "meetstli";
        $activity->question = "¿Cómo se dice luna en Náhuatl?";
        $activity->answer = "meetstli";
        $activity->course_id = 3;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Mundo";
        $activity->slug = "Mundo";
        $activity->description = "tlaltipaktli";
        $activity->question = "¿Cómo se dice mundo en Náhuatl?";
        $activity->answer = "tlaltipaktli";
        $activity->course_id = 3;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Niño";
        $activity->slug = "Niño";
        $activity->description = "okichpil";
        $activity->question = "¿Cómo se dice niño en Náhuatl?";
        $activity->answer = "okichpil";
        $activity->course_id = 3;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Abuelo";
        $activity->slug = "Abuelo";
        $activity->description = "koli";
        $activity->question = "¿Cómo se dice abuelo en Náhuatl?";
        $activity->answer = "koli";
        $activity->course_id = 3;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Ardilla";
        $activity->slug = "Ardilla";
        $activity->description = "tokomajtli";
        $activity->question = "¿Cómo se dice ardilla en Náhuatl?";
        $activity->answer = "tokomajtli";
        $activity->course_id = 3;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Abeja";
        $activity->slug = "Abeja";
        $activity->description = "neksayoli";
        $activity->question = "¿Cómo se dice abeja en Náhuatl?";
        $activity->answer = "neksayoli";
        $activity->course_id = 3;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Nariz";
        $activity->slug = "Nariz";
        $activity->description = "yakatsoli";
        $activity->question = "¿Cómo se dice nariz en Náhuatl?";
        $activity->answer = "yakatsoli";
        $activity->course_id = 3;
        $activity->save();
        $activity = new Activity();
        $activity->name = "Oreja";
        $activity->slug = "Oreja";
        $activity->description = "nakastli";
        $activity->question = "¿Cómo se dice oreja en Náhuatl?";
        $activity->answer = "nakastli";
        $activity->course_id = 3;
        $activity->save();
    }
}