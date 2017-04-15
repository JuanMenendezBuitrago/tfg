<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      DB::table('courses')->truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');            
      
      // INFORMATICA
      
      $id = \App\Degree::where('name', "Grau d'Enginyeria Informàtica")->first()->id;
      DB::table('courses')->insert([
        array(
          'degree_id'=>$id,
          'code'=>'103801',
          'name'=>"Àlgebra",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'103802',
          'name'=>"Càlcul",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102771',
          'name'=>"Electricitat i Electrònica",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'103806',
          'name'=>"Fonaments d'Informàtica",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102765',
          'name'=>"Fonaments dels Computadors",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102772',
          'name'=>"Matemàtica Discreta",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102764',
          'name'=>"Metodologia de la Programació",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'103807',
          'name'=>"Organització i Gestió d'Empreses",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'103805',
          'name'=>"Fonaments d'Enginyeria",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'103803',
          'name'=>"Estadística",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102775',
          'name'=>"Arquitectura de computadors",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102744',
          'name'=>"Bases de Dades",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102743',
          'name'=>"Enginyeria del Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102774',
          'name'=>"Estructura de Computadors",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102769',
          'name'=>"Informació i Seguretat",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102768',
          'name'=>"Intel·ligència Artificial",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102767',
          'name'=>"Laboratori de Programació",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102747',
          'name'=>"Sistemes Operatius",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102746',
          'name'=>"Xarxes",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102783',
          'name'=>"Anàlisi i Disseny d'Algorismes",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102787',
          'name'=>"Aprenentatge Computacional",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102790',
          'name'=>"Arquitectura i Tecnologies de Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102778',
          'name'=>"Arquitectures Avançades",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102782',
          'name'=>"Compiladors",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102777',
          'name'=>"Computació d'Altes Prestacions",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102786',
          'name'=>"Coneixement, Raonament i Incertesa",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102759',
          'name'=>"Disseny de Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'103804',
          'name'=>"Ètica per a l'Enginyeria",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102773',
          'name'=>"Fonaments de Tecnologia de la Informació",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102757',
          'name'=>"Garantia de la Informació i Seguretat",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102789',
          'name'=>"Gestió del Desenvolupament de Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102741',
          'name'=>"Gestió i Administració de Bases de Dades",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102776',
          'name'=>"Gestió i Administració de Xarxes",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102751',
          'name'=>"Infraestructura i Tecnologia de Xarxes",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102794',
          'name'=>"Integració Hardware/Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102788',
          'name'=>"Laboratori Integrat de Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102745',
          'name'=>"Legislació",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102793',
          'name'=>"Microprocessadors i Perifèrics",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102781',
          'name'=>"Models de Qualitat en la Gestió de les TIC",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102792',
          'name'=>"Prototipatge de Sistemes Encastats",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102763',
          'name'=>"Requisits del Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102785',
          'name'=>"Robòtica, Llenguatge i Planificació",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102752',
          'name'=>"Sistemes d'Informació",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102740',
          'name'=>"Sistemes Distribuïts",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102791',
          'name'=>"Sistemes Encastats",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102750',
          'name'=>"Sistemes i Tecnologies Web",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102754',
          'name'=>"Sistemes Multimèdia",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102749',
          'name'=>"Tecnologies Avançades d'Internet",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102742',
          'name'=>"Tecnologies de Desenvolupament per a Internet i Web",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102758',
          'name'=>"Test i Qualitat del Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102784',
          'name'=>"Visió per Computador",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102753',
          'name'=>"Visualització Gràfica Interactiva",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102760',
          'name'=>"Gestió de Projectes",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102748',
          'name'=>"Treball de Fi de Grau",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102783',
          'name'=>"Anàlisi i Disseny d'Algorismes",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102762',
          'name'=>"Anglès Professional I",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102761',
          'name'=>"Anglès Professional II",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102787',
          'name'=>"Aprenentatge Computacional",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102790',
          'name'=>"Arquitectura i Tecnologies de Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102778',
          'name'=>"Arquitectures Avançades",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102782',
          'name'=>"Compiladors",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102777',
          'name'=>"Computació d'Altes Prestacions",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102786',
          'name'=>"Coneixement, Raonament i Incertesa",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102759',
          'name'=>"Disseny de Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102773',
          'name'=>"Fonaments de Tecnologia de la Informació",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102757',
          'name'=>"Garantia de la Informació i Seguretat",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102789',
          'name'=>"Gestió del Desenvolupament de Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102741',
          'name'=>"Gestió i Administració de Bases de Dades",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102776',
          'name'=>"Gestió i Administració de Xarxes",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102751',
          'name'=>"Infraestructura i Tecnologia de Xarxes",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102794',
          'name'=>"Integració Hardware/Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102788',
          'name'=>"Laboratori Integrat de Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102793',
          'name'=>"Microprocessadors i Perifèrics",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102781',
          'name'=>"Models de Qualitat en la Gestió de les TIC",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'103983',
          'name'=>"Pràctiques Externes",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102792',
          'name'=>"Prototipatge de Sistemes Encastats",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102763',
          'name'=>"Requisits del Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102785',
          'name'=>"Robòtica, Llenguatge i Planificació",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102752',
          'name'=>"Sistemes d'Informació",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102740',
          'name'=>"Sistemes Distribuïts",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102791',
          'name'=>"Sistemes Encastats",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102750',
          'name'=>"Sistemes i Tecnologies Web",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102754',
          'name'=>"Sistemes Multimèdia",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102749',
          'name'=>"Tecnologies Avançades d'Internet",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102770',
          'name'=>"Tendències Actuals",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102758',
          'name'=>"Test i Qualitat del Software",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102784',
          'name'=>"Visió per Computador",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102753',
          'name'=>"Visualització Gràfica Interactiva ",
          'description'=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
          'semester'=>1
        )
      ]);

      // PSICOLOGIA
      
      $id = \App\Degree::where('name', "Grau de Psicologia")->first()->id;
      DB::table('courses')->insert([
        array(
          'degree_id'=>$id,
          'code'=>'102607',
          'name'=>"Fonaments de Psicobiologia I",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102606',
          'name'=>"Fonaments de Psicobiologia II",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>2,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102580',
          'name'=>"Història de la Psicologia",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102579',
          'name'=>"La dimensió Social de la Persona",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>2,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102566',
          'name'=>"Mètodes, Dissenys i Tècniques d'Investigació",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>2,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102578',
          'name'=>"Personalitat i Diferències Individuals",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102577',
          'name'=>"Processos Psicològics: Atenció i Percepció",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102576',
          'name'=>"Processos Psicològics: Motivació i Emoció",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>2,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102575',
          'name'=>"Psicologia Evolutiva I",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102571',
          'name'=>"Anàlisi de Dades",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102574',
          'name'=>"Avaluació Psicològica",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>2,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102602',
          'name'=>"Influència Social i Grups",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102570',
          'name'=>"Models Estadístics i Psicomètrics",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>2,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102605',
          'name'=>"Processos Psicològics: Aprenentatge i Condicionament",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102604',
          'name'=>"Processos Psicològics: Memòria",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>2,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102549',
          'name'=>"Psicologia Evolutiva II",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>2,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102547',
          'name'=>"Psicologia Fisiològica I",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102546',
          'name'=>"Psicologia Fisiològica II",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>2,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102572',
          'name'=>"Psicopatologia al Llarg del Cicle Vital",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102573',
          'name'=>"Introducció al Tractament Psicològic",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102552',
          'name'=>"Pràcticum",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>0,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102550',
          'name'=>"Pràctiques Integrades",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>0,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102603',
          'name'=>"Processos Psicològics: Pensament i Llenguatge",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>2,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102548',
          'name'=>"Psicologia de l'Educació",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102559',
          'name'=>"Psicologia de les Organitzacions",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>2,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102601',
          'name'=>"Psicologia Social del Món Contemporani",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>2,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102569',
          'name'=>"Psicometria",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102608',
          'name'=>"Treball de Fi de Grau",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>0,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102536',
          'name'=>"Acció Pública i Canvi Social",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102558',
          'name'=>"Activitat Física i Salut",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102596',
          'name'=>"Àmbits d'Aplicació en Psicologia de la Salut",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102600',
          'name'=>"Anàlisi Psicològica de l'Activitat Docent",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102568',
          'name'=>"Aprenentatge del Llenguatge Oral i Escrit",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102599',
          'name'=>"Aprenentatge i Diferències Individuals",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102545',
          'name'=>"Avaluació Psicològica Clínica en Adults",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102540',
          'name'=>"Avaluació Psicològica Clínica en la Infància i l'Adolescència",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102539',
          'name'=>"Discapacitat Intel·lectual i Trastorns del Desenvolupament",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102595',
          'name'=>"Educació per a la Salut",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102598',
          'name'=>"Estratègies d'Aprenentatge",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102594',
          'name'=>"Estrès i Salut",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102587',
          'name'=>"Evolució del Cervell, la Cognició i la Intel·ligència",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102562',
          'name'=>"Gestió del Temps",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102583',
          'name'=>"Imatges i Símbols: Relacions Afectives i de Gènere",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102582',
          'name'=>"Infància i Famílies en Contexts de Dificultats",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102597',
          'name'=>"Intel·ligència i Processos Cognitius",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102593',
          'name'=>"Intervenció en Psicologia de la Salut",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102590',
          'name'=>"Intervenció i Consultoria de Processos",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102565',
          'name'=>"Intervenció Social i Comunitària",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102535',
          'name'=>"Investigació i Coneixement Psicosocial",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102544',
          'name'=>"Neuropsicologia Clínica",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102589',
          'name'=>"Planificació i Gestió de Recursos Humans",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102551',
          'name'=>"Pràctiques Externes",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102586',
          'name'=>"Psicoendocrinologia",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102585',
          'name'=>"Psicofarmacologia",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102584',
          'name'=>"Psicogenètica",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102564',
          'name'=>"Psicologia Cultural i de la Comunicació",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102557',
          'name'=>"Psicologia de l'Esport",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102561',
          'name'=>"Psicologia de la Comunicació Publicitària",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102560',
          'name'=>"Psicologia de la Memòria: Camps d'Aplicació",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102592',
          'name'=>"Psicologia de la Salut: Fonaments",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102588',
          'name'=>"Psicologia del Treball",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102581',
          'name'=>"Psicologia i Envelliment",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102563',
          'name'=>"Psicologia Social Aplicada",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102534',
          'name'=>"Psicologia Social per a l'Anàlisi i la Intervenció",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102543',
          'name'=>"Psicopatologia d'Adults",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102538',
          'name'=>"Psicopatologia de la Infància i l'Adolescència",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102554',
          'name'=>"Tècniques d'Observació",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102555',
          'name'=>"Tècniques de Gestió de la Informació",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102542',
          'name'=>"Tractaments Cognitivoconductuals en Adults",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102537',
          'name'=>"Tractaments Cognitivoconductuals en la Infància i l'Adolescència",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        ),
        array(
          'degree_id'=>$id,
          'code'=>'102541',
          'name'=>"Trastorns de la Personalitat",
          'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
          'semester'=>1,
        )
      ]);
    }
}
