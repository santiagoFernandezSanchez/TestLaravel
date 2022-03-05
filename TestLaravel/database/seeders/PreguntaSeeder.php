<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿En qué consiste la fotosínteis?',
            'respuesta1' => 'Es una evolución de una planta',
            'respuesta2' => 'Es la conversión de materia inorgánica a materia orgánica gracias a la energía que aporta la luz del Sol',
            'respuesta3' => 'No se',
            'respuesta4' => 'Es la reproducción entre plantas mediante un sistema de esporas denominado polinización',
            'correcta' => 'Es la conversión de materia inorgánica a materia orgánica gracias a la energía que aporta la luz del Sol',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Cuál es el catión intracelular que participa en la coagulación sanguínea ycontracción muscular?',
            'respuesta1' => 'Na',
            'respuesta2' => 'K',
            'respuesta3' => 'Ca',
            'respuesta4' => 'Fe',
            'correcta' => 'Ca',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Cuál es el metal indispensable para el transporte de oxigeno y formación dehemoglobina en la sangre?',
            'respuesta1' => 'Mg',
            'respuesta2' => 'Mn',
            'respuesta3' => 'Fe',
            'respuesta4' => 'Na',
            'correcta' => 'Fe',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => 'Elemento químico presente en la formación de tiroxina (hormona de la glándulatiroides):',
            'respuesta1' => 'Ca',
            'respuesta2' => 'Cr',
            'respuesta3' => 'Zn',
            'respuesta4' => 'l',
            'correcta' => 'l',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => 'Elemento químico que participa en la regulación de la glucosa sanguínea(glicemia):',
            'respuesta1' => 'Cobalto',
            'respuesta2' => 'Zinc',
            'respuesta3' => 'Cromo',
            'respuesta4' => 'Cobre',
            'correcta' => 'Cromo',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => 'La sal de mesa viene enriquecida con Yodo para prevenir yevitar una enfermedad asociada con la síntesis de hormonas que regulan elmetabolismo basal del cuerpo. ¿Cuál de los elementos de la sal de mesa es unoligoelemento?',
            'respuesta1' => 'Na',
            'respuesta2' => 'Cl',
            'respuesta3' => 'l',
            'respuesta4' => 'Ca',
            'correcta' => 'l',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => 'Es un oligoelemento muy utilizado en el tratamiento de enfermedades queafectan el sistema nervioso central (SNC), como esquizofrenia, depresión y trastornos obsesivos compulsivos',
            'respuesta1' => 'Sodio',
            'respuesta2' => 'Potasio',
            'respuesta3' => 'Litio',
            'respuesta4' => 'Silicio',
            'correcta' => 'Litio',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => 'La clasificación de los bioelementos está basada principalmente en:',
            'respuesta1' => 'Características químicas de los elementos.',
            'respuesta2' => 'Características polares de los elementos.',
            'respuesta3' => 'Función',
            'respuesta4' => 'Abundancia',
            'correcta' => 'Abundancia',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => 'Los elementos que forman parte de biomoléculas orgánicas (proteínas,carbohidratos, ácidos nucleícos y lípidos) son:',
            'respuesta1' => 'Na, Cl, C',
            'respuesta2' => 'K, C, N',
            'respuesta3' => 'C, P, S',
            'respuesta4' => 'Fe, S, Mn',
            'correcta' => 'C, P, S',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => 'Son los bioelementos más comunes en el planeta',
            'respuesta1' => 'O, Si, Al, Ca',
            'respuesta2' => 'K, O, Si, Fe',
            'respuesta3' => 'Ca, Fe, O, Si',
            'respuesta4' => 'Si, O, Fe, Al',
            'correcta' => 'Si, O, Fe, Al',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => 'Son Bioelementos primario, secundario y oligoelemento, respectivamente:',
            'respuesta1' => 'Ni, N, Cr',
            'respuesta2' => 'Cu, O, Co',
            'respuesta3' => 'N, Cl, Ni',
            'respuesta4' => 'C, Ni, Fe',
            'correcta' => 'N, Cl, Ni',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Qué es la Tierra?',
            'respuesta1' => 'La tierra es un planeta',
            'respuesta2' => 'La Tierra es un planeta',
            'respuesta3' => 'Sócrates',
            'respuesta4' => 'Platón',
            'correcta' => 'La Tierra es un planeta',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿De qué está compuesto el sol?',
            'respuesta1' => 'De un 50% H2O, 30% Metano 20% Helio',
            'respuesta2' => 'De un 71% Hidrógeno, 27% Helio 2% Helio',
            'respuesta3' => 'No se',
            'respuesta4' => 'Es el sol',
            'correcta' => 'De un 71% Hidrógeno, 27% Helio 2% Helio',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Cómo se craftea una espada de diamante?',
            'respuesta1' => 'Un palo y dos diamantes',
            'respuesta2' => 'Dos palos y un diamante',
            'respuesta3' => 'Con netherite',
            'respuesta4' => 'Con agua',
            'correcta' => 'Un palo y dos diamantes',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Cuántos bloques se necesitan para construir una beacon maxeada?',
            'respuesta1' => '164',
            'respuesta2' => '64',
            'respuesta3' => '24',
            'respuesta4' => '14',
            'correcta' => '164',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Qué material necesitas para intercambiar con los aldeanos?',
            'respuesta1' => 'Carbon',
            'respuesta2' => 'Netherite',
            'respuesta3' => 'Paja',
            'respuesta4' => 'Esmeralda',
            'correcta' => 'Esmeralda',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Quién es Jordi ENP?',
            'respuesta1' => 'Un filósofo',
            'respuesta2' => 'Un doctor',
            'respuesta3' => 'Un actor',
            'respuesta4' => 'Una mosca',
            'correcta' => 'Un actor',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Quién es Mr Jagger?',
            'respuesta1' => 'JaggerPrincesa',
            'respuesta2' => 'Un boxeador',
            'respuesta3' => 'Un cocinero',
            'respuesta4' => 'Dynamó',
            'correcta' => 'JaggerPrincesa',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Cuántos g son 1kg de paja?',
            'respuesta1' => '1g',
            'respuesta2' => '10g',
            'respuesta3' => '100g',
            'respuesta4' => '1000g',
            'correcta' => '1000g',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Que significa a?',
            'respuesta1' => 'A mi no me digas a porque pienso que me dices Arriba España',
            'respuesta2' => 'a',
            'respuesta3' => 'A mi no me digas a porque pienso que me dices hazte un trompo',
            'respuesta4' => 'A mi no me digas a porque pienso que me dices ankara Messi',
            'correcta' => 'a',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Cuál es la canción del contadores?',
            'respuesta1' => 'Es AaaaAAAaAaAaAaAaaaaaaaaaAAAA',
            'respuesta2' => 'Es Two Steps From Hell',
            'respuesta3' => 'Quien es el contadores',
            'respuesta4' => 'Siii sii siii',
            'correcta' => 'Es Two Steps From Hell',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Illojuan y LMDShow son hermanos?',
            'respuesta1' => 'Si, son hermanos',
            'respuesta2' => 'No, son superhéroes',
            'respuesta3' => 'No, yo soy tu padre',
            'respuesta4' => 'Adelante, LMDShow',
            'correcta' => 'Si, son hermanos',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Cómo se dice mi coche fue robado en inglés?',
            'respuesta1' => 'My coche was robado',
            'respuesta2' => 'My stolen was car',
            'respuesta3' => 'Car stolen was my',
            'respuesta4' => 'My car was stolen',
            'correcta' => 'My car was stolen',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Quién ganó los Squid Craft Games?',
            'respuesta1' => 'MarkiLokuras',
            'respuesta2' => 'elxokas',
            'respuesta3' => 'OlliGamerZ',
            'respuesta4' => 'Luzu',
            'correcta' => 'OlliGamerZ',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿En qué batalla murió Napoleón?',
            'respuesta1' => 'En su última batalla',
            'respuesta2' => 'En la batalla de Waterloo',
            'respuesta3' => 'En la batalla de Trafalgar',
            'respuesta4' => 'No murió, aún sigue en nuestros corazones',
            'correcta' => 'En la batalla de Waterloo',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => 'If you throw a red stone into a blue sea, what will it become?',
            'respuesta1' => 'Evaporization',
            'respuesta2' => 'Simply, wet stone',
            'respuesta3' => 'Rainbow',
            'respuesta4' => 'Idk',
            'correcta' => 'Evaporization',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Cómo sigue la frase? Cuando ves memes en los que se usan elementos de la tabla periódica',
            'respuesta1' => 'La quimíca es la hostia',
            'respuesta2' => 'La química es lo mas',
            'respuesta3' => 'Que chikilikuatre',
            'respuesta4' => 'Que chingón',
            'correcta' => 'La química es la hostia',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Cómo sigue la frase? Cuando este Halloween te vas a disfrazar de masculinidad',
            'respuesta1' => 'Masculinidad frágil',
            'respuesta2' => 'Masculinidad masculina',
            'respuesta3' => 'La masculinidad te parece frágil, a mi me parece más fuerte que el hormigón armado',
            'respuesta4' => 'La masculinidad',
            'correcta' => 'La masculinidad te parece frágil, a mi me parece más fuerte que el hormigón armado',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Que es un ratón?',
            'respuesta1' => 'Un software',
            'respuesta2' => 'Un hardware',
            'respuesta3' => 'Un animal',
            'respuesta4' => 'Un plastico con luces',
            'correcta' => 'Un hardware',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿En que año Cristobal Colón descubrió América?',
            'respuesta1' => 'En 1942',
            'respuesta2' => 'En 1492',
            'respuesta3' => 'En 712',
            'respuesta4' => 'En 721',
            'correcta' => 'En 1942',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿En qué año se inventó la cerveza?',
            'respuesta1' => 'En el año 2000',
            'respuesta2' => 'En el año 1200',
            'respuesta3' => 'En el año 4000 a.C',
            'respuesta4' => 'En el año 2000 a.C',
            'correcta' => 'En el año 4000 a.C',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => 'Empieza por A es un aerodino de ala fija, o aeronave con mayor densidad que el aire, dotado de alas y un espacio de carga, y capaz de volar impulsado por uno o más motores.',
            'respuesta1' => 'Avion',
            'respuesta2' => 'Arbol',
            'respuesta3' => 'Aceite',
            'respuesta4' => 'Alicopter',
            'correcta' => 'Avion',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => 'Empieza por Z Calzado que cubre total o parcialmente el pie sin sobrepasar el tobillo, con una suela de un material casi siempre más duro que el resto.',
            'respuesta1' => 'Zafacón',
            'respuesta2' => 'Zafar',
            'respuesta3' => 'Zafiro',
            'respuesta4' => 'Zapato',
            'correcta' => 'Zapato',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => 'Empieza por v estructura geológica por la que emerge el magma que se divide en lava y gases provenientes del interior de la Tierra.',
            'respuesta1' => 'Vagón',
            'respuesta2' => 'Vagoneta',
            'respuesta3' => 'Vaca',
            'respuesta4' => 'Volcán',
            'correcta' => 'Volcán',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => 'Tipos de variables en Java',
            'respuesta1' => 'String, Int, Double, Boolean',
            'respuesta2' => 'Palabra, Número, numero con decimal, verdadero o falso',
            'respuesta3' => 'No se',
            'respuesta4' => 'No contestar',
            'correcta' => 'String, Int, Double, Boolean',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Qué es una foca?',
            'respuesta1' => 'Un mamífero',
            'respuesta2' => 'Un ave',
            'respuesta3' => 'Un omnívoro',
            'respuesta4' => 'Un viviparo',
            'correcta' => 'Un mamífero',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Qué es un ornitorrinco?',
            'respuesta1' => 'Un mamífero vivíparo',
            'respuesta2' => 'Un mamífero ovíparo',
            'respuesta3' => 'Un ave',
            'respuesta4' => 'Un omnívoro',
            'correcta' => 'Un mamífero ovíparo',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Cuál de las siguientes rocas es un mineral?',
            'respuesta1' => 'Helicopter',
            'respuesta2' => 'Avion',
            'respuesta3' => 'Amatista',
            'respuesta4' => 'pera',
            'correcta' => 'Amatista',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Quién es Rodolfo?',
            'respuesta1' => 'Un transeúnte',
            'respuesta2' => 'Un pelo loco',
            'respuesta3' => 'Una caja sorpresa en la cual sale Rodolfo',
            'respuesta4' => 'No se',
            'correcta' => 'Una caja sorpresa en la cual sale Rodolfo',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Quién tiro una taza en la resistencia gritando viva Ignatius?',
            'respuesta1' => 'Folagor',
            'respuesta2' => 'El contadores',
            'respuesta3' => 'Ampeta metralleta',
            'respuesta4' => 'Wismacho',
            'correcta' => 'Wismacho',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Quién le saco un diente de una hostia en la entrevista de Cheeto?',
            'respuesta1' => 'Wismichu a Dalas',
            'respuesta2' => 'Darío a Orslok',
            'respuesta3' => 'Orslok a Darío',
            'respuesta4' => 'Dalas a Wismichu',
            'correcta' => 'Darío a Orslok',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Quien es Jordi Wild?',
            'respuesta1' => 'Un actor',
            'respuesta2' => 'Un fisioculturista',
            'respuesta3' => 'Un doctor',
            'respuesta4' => 'Jordi Wild',
            'correcta' => 'Jordi Wild',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => 'Como sigue el abcdario U,V,W,X,Y,',
            'respuesta1' => 'Z',
            'respuesta2' => 'S',
            'respuesta3' => 'G',
            'respuesta4' => 'D',
            'correcta' => 'Z',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Como se llama la nueva canción de Rosalía?',
            'respuesta1' => 'Con altura',
            'respuesta2' => 'La fama',
            'respuesta3' => 'Saoko',
            'respuesta4' => 'Linda',
            'correcta' => 'Saoko',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => 'Ricardo, ¿este proyecto está aprobado con un 1,5/1,5?',
            'respuesta1' => 'Si',
            'respuesta2' => 'Si o si',
            'respuesta3' => 'Si si si',
            'respuesta4' => 'Si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si si Si si si si si si si si si si si si si si si si si',
            'correcta' => 'Si',
            'tema_id' => '1'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => 'El monosacárido más representativo es la:',
            'respuesta1' => 'Glucosa',
            'respuesta2' => 'Fructosa',
            'respuesta3' => 'Galactosa',
            'respuesta4' => 'Ribosa',
            'correcta' => 'Glucosa',
            'tema_id' => '2'
        ]);


        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Qué son los glúcidos?',
            'respuesta1' => 'Son biomoléculas orgánicas formadas por carbono, oxígeno e hidrógeno.',
            'respuesta2' => 'Son biomoléculas orgánicas formadas por carbono, oxígeno, nitrógeno, hidrógeno y azufre.',
            'respuesta3' => 'Son biomoléculas orgánicas formadas por carbono, oxígeno, nitrógeno e hidrógeno.',
            'respuesta4' => 'Son biomoléculas orgánicas formadas por carbono, oxígeno, hidrógeno, nitrógeno y fósforo .',
            'correcta' => 'Son biomoléculas orgánicas formadas por carbono, oxígeno e hidrógeno.',
            'tema_id' => '2'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => 'El disacárido que podemos obtener de la caña de azúcar o la remolacha es:',
            'respuesta1' => 'Sacarosa',
            'respuesta2' => 'Maltosa',
            'respuesta3' => 'Lactosa',
            'respuesta4' => 'Sacarina',
            'correcta' => 'Sacarosa',
            'tema_id' => '2'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => 'En algunas ocasiones a los glúcidos los conocemos',
            'respuesta1' => 'O, simplemente, azúcares',
            'respuesta2' => 'Hidratos de carbono o, simplemente, azúcares',
            'respuesta3' => 'Carbohidratos, Hidratos de carbono, glúcidos o, simplemente, azúcares',
            'respuesta4' => 'Carbón',
            'correcta' => 'Carbohidratos, Hidratos de carbono, glúcidos o, simplemente, azúcares',
            'tema_id' => '2'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Cuál de los siguientes heterósidos tiene mayor presencia de proteínas en su composición?',
            'respuesta1' => 'Glucolípidos',
            'respuesta2' => 'Peptidoglucanos',
            'respuesta3' => 'Glucoproteínas',
            'respuesta4' => 'Proteoglucanos',
            'correcta' => 'Glucoproteínas',
            'tema_id' => '2'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => 'De los siguientes apartados que es un glúcido',
            'respuesta1' => 'Sal',
            'respuesta2' => 'Azúcar',
            'respuesta3' => 'Espárragos',
            'respuesta4' => 'Cola Cao',
            'correcta' => 'Azúcar',
            'tema_id' => '2'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Cuántos átomos de carbono tiene una piranosa?',
            'respuesta1' => 'Cuatro',
            'respuesta2' => 'Seis',
            'respuesta3' => 'Doce',
            'respuesta4' => 'Cinco',
            'correcta' => 'Cinco',
            'tema_id' => '2'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Cuál de los siguientes enlaces monosacáridos tiene poder reductor y da positivo en la reacción de Fehling?',
            'respuesta1' => 'Enlace dicarbonílico',
            'respuesta2' => 'Enlace monocarbonílico',
            'respuesta3' => 'Ninguno',
            'respuesta4' => 'Los dos',
            'correcta' => 'Enlace monocarbonílico',
            'tema_id' => '2'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Qué es la glucosa?',
            'respuesta1' => 'Es un monosacárido con fórmula molecular C₆H₁₂O₆',
            'respuesta2' => 'Es un monosacárido con fórmula molecular H₂O',
            'respuesta3' => 'Es un monosacárido con fórmula molecular H₂O2',
            'respuesta4' => 'Es un monosacárido con fórmula molecular CO₆',
            'correcta' => 'Es un monosacárido con fórmula molecular C₆H₁₂O₆',
            'tema_id' => '2'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Es un glúcido un carbohidrato?',
            'respuesta1' => 'Si',
            'respuesta2' => 'No',
            'respuesta3' => 'No se',
            'respuesta4' => 'Ninguna de las respuestas anteriores es correcta',
            'correcta' => 'Si',
            'tema_id' => '2'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Por cuáles elementos están formados los carbohidratos?',
            'respuesta1' => 'Formados por C, H',
            'respuesta2' => 'Formados por C,H,Y,O',
            'respuesta3' => 'Formados por C, H, O',
            'respuesta4' => 'Solo formados por C,H, P, O',
            'correcta' => 'Formados por C, H, O',
            'tema_id' => '2'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Por cuáles otros nombres se los conoce a los carbohidratos?',
            'respuesta1' => 'Hidratos de carbono ',
            'respuesta2' => 'Glúcidos ',
            'respuesta3' => 'Azúcares ',
            'respuesta4' => 'Todos son correctos ',
            'correcta' => 'Todos son correctos',
            'tema_id' => '3'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Por qué se los considera como la principal fuente de energía para los organismos?',
            'respuesta1' => 'Debido a su fácil e inmediato metabolismo ',
            'respuesta2' => 'Porque no se metabolizan rápido',
            'respuesta3' => 'Porque se componen de Hidrógeno ',
            'respuesta4' => 'Porque se componen de Carbono ',
            'correcta' => 'Debido a su fácil e inmediato metabolismo',
            'tema_id' => '3'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Qué alimentos se consideran ricos en hidratos de carbono? ',
            'respuesta1' => 'Cereales como los son las pastas, panes, arroz ',
            'respuesta2' => 'Los tubérculos, las frutas, legumbres',
            'respuesta3' => 'Grano, harinas, alimentos dulces ',
            'respuesta4' => 'Todas son correctas ',
            'correcta' => 'Todas son correctas',
            'tema_id' => '3'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => 'Escoja lo correcto referente a los monosacáridos ',
            'respuesta1' => 'Como los carbohidratos más simples ',
            'respuesta2' => 'Como los carbohidratos más completos ',
            'respuesta3' => 'Compuestos por una sola unidad de azúcar y de 3 a 7 carbonos. ',
            'respuesta4' => '1 y 3 son correctas ',
            'correcta' => '1 y 3 son correctas ',
            'tema_id' => '3'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Por cuáles grupos están constituidos los glúcidos?',
            'respuesta1' => 'Grupos Aldehídos ',
            'respuesta2' => 'Grupos Cetosas ',
            'respuesta3' => 'Grupos Hidroxilos ',
            'respuesta4' => 'A y C son correctas ',
            'correcta' => 'Las respuestas 1 y 3 son correctas',
            'tema_id' => '3'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => 'Actualmente, ¿cuál es la fórmula de los glúcidos?',
            'respuesta1' => 'C6H12O6b',
            'respuesta2' => 'C2H10O4',
            'respuesta3' => 'CHO',
            'respuesta4' => 'Ninguna es correcta',
            'correcta' => 'C6H12O6b',
            'tema_id' => '3'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Cuál es la fórmula de la Sacarosa?',
            'respuesta1' => 'C10H20O9',
            'respuesta2' => 'C11H22O11',
            'respuesta3' => 'CH5O10',
            'respuesta4' => 'C11H12O10',
            'correcta' => 'C11H22O11',
            'tema_id' => '3'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Por cuáles glúcidos se encuentra conformada la Lactosa?',
            'respuesta1' => 'Glucosa y Galactosa',
            'respuesta2' => 'Por Glucosa',
            'respuesta3' => 'Por Fructuosa',
            'respuesta4' => 'A y C son correctas',
            'correcta' => 'Glucosa y Galactosa',
            'tema_id' => '3'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Por cuáles glúcidos se encuentra conformado la Rafinosa?',
            'respuesta1' => 'Glucosa + Glucosa',
            'respuesta2' => 'Glucosa + Fructuosa',
            'respuesta3' => 'Glucosa + Fructuosa + Galactosa',
            'respuesta4' => 'A y C son correctas',
            'correcta' => 'Glucosa + Fructuosa + Galactosa',
            'tema_id' => '3'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Cuáles son los disacáridos?',
            'respuesta1' => 'Rafinosa, Sacarosa, Maltosa',
            'respuesta2' => 'Rafinosa y Sacarosa',
            'respuesta3' => 'Sorbitol, Xilitol y Manitol',
            'respuesta4' => 'Ninguna de las anteriores',
            'correcta' => 'Rafinosa, Sacarosa, Maltosa',
            'tema_id' => '3'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Cuál es la fórmula de Xilitol?',
            'respuesta1' => 'C4H11O4',
            'respuesta2' => 'C2H5O2',
            'respuesta3' => 'C6H13O6',
            'respuesta4' => 'C5H12O5',
            'correcta' => 'C5H12O5',
            'tema_id' => '3'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Cuál de las siguientes afirmaciones es cierta?',
            'respuesta1' => 'Todos los números reales son racionales',
            'respuesta2' => 'Todos los números reales son irracionales',
            'respuesta3' => 'Los números irracionales son racionales',
            'respuesta4' => 'Los números racionales y los irracionales son los reales',
            'correcta' => 'Los números racionales y los irracionales son los reales',
            'tema_id' => '4'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Cuánto es 1+1?',
            'respuesta1' => '1',
            'respuesta2' => '2',
            'respuesta3' => '3',
            'respuesta4' => '4',
            'correcta' => '2',
            'tema_id' => '4'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Cuánto es 15/3?',
            'respuesta1' => '4.5',
            'respuesta2' => '5',
            'respuesta3' => '5.5',
            'respuesta4' => '6',
            'correcta' => '5',
            'tema_id' => '4'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Cuánto es 1-(-1)?',
            'respuesta1' => '0',
            'respuesta2' => '2',
            'respuesta3' => '1',
            'respuesta4' => '-1',
            'correcta' => '2',
            'tema_id' => '4'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Cuánto es 200/100?',
            'respuesta1' => '2',
            'respuesta2' => '100',
            'respuesta3' => '200',
            'respuesta4' => '0',
            'correcta' => '2',
            'tema_id' => '4'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Qué son los cuartos?',
            'respuesta1' => 'Una campana',
            'respuesta2' => 'Los cuartos de las campanadas',
            'respuesta3' => 'No conozco al señor que tengo al lado',
            'respuesta4' => 'Mama quiero irme a casa',
            'correcta' => 'Los cuartos de las campanadas',
            'tema_id' => '4'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Qué es un número?',
            'respuesta1' => 'Un dígito',
            'respuesta2' => 'Un número',
            'respuesta3' => 'Una suma',
            'respuesta4' => 'Uno natural',
            'correcta' => 'Un número',
            'tema_id' => '4'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Es lo mismo 2+2 que 2*2?',
            'respuesta1' => 'Si',
            'respuesta2' => 'No',
            'respuesta3' => 'No se',
            'respuesta4' => 'Ninguna de las respuestas anteriores es correcta',
            'correcta' => 'No',
            'tema_id' => '4'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Es lo mismo raíz cuadrada de 4 que Math.sqrt(4)?',
            'respuesta1' => 'No se',
            'respuesta2' => 'Si',
            'respuesta3' => 'No',
            'respuesta4' => 'Que va',
            'correcta' => 'Si',
            'tema_id' => '4'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Es lo mismo 5*6 que 6*5?',
            'respuesta1' => 'Si',
            'respuesta2' => 'No',
            'respuesta3' => 'No se',
            'respuesta4' => 'Ninguna de las respuestas anteriores es correcta',
            'correcta' => 'Si',
            'tema_id' => '4'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Cuál es la jerarquía en las operaciones?',
            'respuesta1' => '1ºCorchetes, 2ºParéntesis, 3ºDivisión o multiplicación, 4ºSuma o resta',
            'respuesta2' => '2ºCorchetes, 1ºParéntesis, 4ºDivisión o multiplicación, 3ºSuma o resta',
            'respuesta3' => '4ºCorchetes, 3ºParéntesis, 1ºDivisión o multiplicación, 2ºSuma o resta',
            'respuesta4' => '3ºCorchetes, 4ºParéntesis, 2ºDivisión o multiplicación, 1ºSuma o resta',
            'correcta' => '1ºCorchetes, 2ºParéntesis, 3ºDivisión o multiplicación, 4ºSuma o resta',
            'tema_id' => '4'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Cuánto es 2/2 + 4/2?',
            'respuesta1' => '3',
            'respuesta2' => '6',
            'respuesta3' => '8',
            'respuesta4' => '2',
            'correcta' => '3',
            'tema_id' => '5'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Cuánto es 6/3 - 3/3?',
            'respuesta1' => '0',
            'respuesta2' => '6',
            'respuesta3' => '3',
            'respuesta4' => '1',
            'correcta' => '1',
            'tema_id' => '5'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Cuánto es 6/3 * 2/4?',
            'respuesta1' => '6',
            'respuesta2' => '2',
            'respuesta3' => '4',
            'respuesta4' => '1',
            'correcta' => '4',
            'tema_id' => '5'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Cuánto es 10/2 / 8/2?',
            'respuesta1' => '10',
            'respuesta2' => '20',
            'respuesta3' => '30',
            'respuesta4' => '40',
            'correcta' => '20',
            'tema_id' => '5'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Cómo se llama la parte superior de una fracción?',
            'respuesta1' => 'Denominador',
            'respuesta2' => 'Raya',
            'respuesta3' => 'Numerador',
            'respuesta4' => 'Superador',
            'correcta' => 'Numerador',
            'tema_id' => '5'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Cómo se llama la parte inferior de una fracción?',
            'respuesta1' => 'Numerador',
            'respuesta2' => 'Raya',
            'respuesta3' => 'Inferiorador',
            'respuesta4' => 'Denominador',
            'correcta' => 'Denominador',
            'tema_id' => '5'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿De qué consta una fracción?',
            'respuesta1' => 'Una fracción consta de un dividendo y un divisor',
            'respuesta2' => 'Una fracción consta de un numerador y un denominador',
            'respuesta3' => 'Una fracción consta de dos números',
            'respuesta4' => 'Que es una fracción',
            'correcta' => 'Una fracción consta de un numerador y un denominador',
            'tema_id' => '5'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => 'Los 2/3 de 15 son...',
            'respuesta1' => '10',
            'respuesta2' => '5',
            'respuesta3' => '7',
            'respuesta4' => '12',
            'correcta' => '10',
            'tema_id' => '5'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => 'El número 4 en forma de fracción es',
            'respuesta1' => '28/7',
            'respuesta2' => '6/2',
            'respuesta3' => '8/4',
            'respuesta4' => '12/4',
            'correcta' => '28/7',
            'tema_id' => '5'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => 'La mitad de 84 es...',
            'respuesta1' => '44',
            'respuesta2' => '32',
            'respuesta3' => '24',
            'respuesta4' => '42',
            'correcta' => '42',
            'tema_id' => '5'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '15 minutos de una hora son....',
            'respuesta1' => '1/4',
            'respuesta2' => '5/60',
            'respuesta3' => '15/50',
            'respuesta4' => '15/1',
            'correcta' => '1/4',
            'tema_id' => '5'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Cuál es la solución de la siguiente ecuación? 5x-25=0',
            'respuesta1' => 'x = 0',
            'respuesta2' => 'x = -5',
            'respuesta3' => 'x = 5',
            'respuesta4' => 'x = 1',
            'correcta' => '5',
            'tema_id' => '6'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Cuál es la solución de la siguiente ecuación? 2x-2 = -2(1-x)',
            'respuesta1' => '5',
            'respuesta2' => '25',
            'respuesta3' => 'No tiene solución',
            'respuesta4' => 'Todo número real es solución',
            'correcta' => 'Todo número real es solución',
            'tema_id' => '6'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Cuál es la solución de la siguiente ecuación? x-1/2 = 2x',
            'respuesta1' => '31',
            'respuesta2' => '2/4',
            'respuesta3' => '1/3',
            'respuesta4' => '-1/3',
            'correcta' => '-1/3',
            'tema_id' => '6'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Cuál es la solución de la siguiente ecuación? 2⋅(x-12)=x+1',
            'respuesta1' => 'No tiene solución',
            'respuesta2' => 'x=2',
            'respuesta3' => 'x=4',
            'respuesta4' => 'x=12',
            'correcta' => 'x=2',
            'tema_id' => '6'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Cuál es la solución de la siguiente ecuación? x/3 = x+1/6',
            'respuesta1' => 'x=-1',
            'respuesta2' => 'x=1',
            'respuesta3' => 'x=2',
            'respuesta4' => 'x=-2',
            'correcta' => 'x=1',
            'tema_id' => '6'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Cuál es la solución de la siguiente ecuación? x+Math.sqrt(2) = 0',
            'respuesta1' => 'x = Math.sqrt(2)',
            'respuesta2' => 'x = -Math.sqrt(2)',
            'respuesta3' => 'x = 11',
            'respuesta4' => 'x = 12',
            'correcta' => 'x = -Math.sqrt(2)',
            'tema_id' => '6'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Cuál de las siguientes ecuaciones significa "la suma de dos números consecutivos es igual a 19"?',
            'respuesta1' => 'x+x = 19',
            'respuesta2' => '2x = 19',
            'respuesta3' => '(x + x) + 2 = 19',
            'respuesta4' => 'x + (x + 1) = 19',
            'correcta' => 'x + (x + 1) = 19',
            'tema_id' => '6'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Intermedio',
            'enunciado' => '¿Cuál de las siguientes ecuaciones significa "la cuarta parte del consecutivo de un número es igual a 5"?',
            'respuesta1' => '(x/4)-1 = 5',
            'respuesta2' => 'x+1/4 = 5',
            'respuesta3' => 'x=5',
            'respuesta4' => 'x+4 = 5',
            'correcta' => 'x+1/4 = 5',
            'tema_id' => '6'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Es la siguiente ecuación una ecuación de primer grado? x3+x2+x+1 = 0',
            'respuesta1' => 'Si',
            'respuesta2' => 'No',
            'respuesta3' => 'No se',
            'respuesta4' => 'Creo que si',
            'correcta' => 'No',
            'tema_id' => '6'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Avanzado',
            'enunciado' => '¿Es cierta la siguiente formula para ecuaciones de segundo grado? x = (-b+-Math.sqrt(Math.pow(b, 2)-4*a*c))/2*a',
            'respuesta1' => 'No',
            'respuesta2' => 'Si',
            'respuesta3' => 'Ninguna de las respuestas anteriores es correcta',
            'respuesta4' => 'Ni idea',
            'correcta' => 'Si',
            'tema_id' => '6'
        ]);

        DB::table('preguntas')->insert([

            'nivel' => 'Básico',
            'enunciado' => '¿Cuál es la solución de la siguiente ecuación? 10x + 5 = 0',
            'respuesta1' => 'x = -5/-10',
            'respuesta2' => 'x = 5/10',
            'respuesta3' => 'x = 10/5',
            'respuesta4' => 'x = -10/5',
            'correcta' => 'x = -5/-10',
            'tema_id' => '6'
        ]);

    }
}