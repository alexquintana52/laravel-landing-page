<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('noticias')->insert([
            [
                'id'=>1,
                'titulo'=>'Lanzamiento Exitoso de la Versión 2.0 de Nuestra Aplicación',
                'noticia'=>'Nos complace anunciar el emocionante lanzamiento de la versión 2.0 de nuestra aplicación de aprendizaje tecnológico. Después de meses de trabajo arduo, colaboración y retroalimentación de nuestros usuarios, hemos llevado la experiencia de aprendizaje a un nuevo nivel. A continuación, destacamos algunas de las emocionantes novedades de esta actualización: Nuevos Juegos Educativos: Hemos añadido una serie de nuevos juegos educativos que cubren una amplia gama de conceptos tecnológicos, desde programación hasta ciberseguridad. Los usuarios pueden sumergirse en experiencias de juego aún más emocionantes mientras aprenden. Mejoras en la Interfaz de Usuario: Hemos rediseñado la interfaz de usuario para que sea más intuitiva y atractiva. Los usuarios encontrarán que navegar por la aplicación y acceder a las lecciones es más sencillo que nunca. Contenido Ampliado: Hemos ampliado nuestra biblioteca de contenido educativo, lo que significa que los usuarios tienen acceso a más lecciones, ejercicios y desafíos tecnológicos para su aprendizaje. Compatibilidad Mejorada: La versión 2.0 de la aplicación es más compatible con una variedad de dispositivos, lo que garantiza que más personas puedan acceder a esta experiencia educativa única. Rendimiento Optimizado: Hemos realizado mejoras significativas en el rendimiento de la aplicación para garantizar que funcione de manera eficiente y sin problemas. Esta actualización marca un hito importante en nuestro compromiso de proporcionar una plataforma de aprendizaje tecnológico excepcional. Esperamos que los usuarios disfruten de estas emocionantes novedades y encuentren aún más valor en nuestra aplicación. Para acceder a la versión 2.0 de nuestra aplicación, simplemente dirígete a la tienda de aplicaciones de tu dispositivo y busca las actualizaciones disponibles. Si aún no tienes nuestra aplicación, ¡no esperes más para unirte a la revolución del aprendizaje tecnológico! Descárgala hoy y comienza a aprender tecnología jugando. Estamos emocionados por el futuro y continuaremos trabajando para brindar la mejor experiencia de aprendizaje tecnológico posible a nuestros usuarios. ¡Mantente atento a más actualizaciones y novedades en el futuro!',
                'categoria_id'=>'1',
                'img'=>'imagenNoticias/C5UhTBWqHVvGK2Es4Z9NTTgKsJe9Lbwu4JgCG4Wp.jpg',
                'descripcion_img'=>'portada_noticia',
                'fecha'=>'2023-10-01',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>2,
                'titulo'=>'Colaboración con Expertos en Tecnología para Ampliar el Contenido Educativo',
                'noticia'=> 'Colaboración con Expertos en Tecnología para Ampliar el Contenido Educativo - Colaboraciones y Asociaciones - Estamos emocionados de anunciar una emocionante colaboración que llevará la experiencia de aprendizaje en nuestra aplicación a un nivel superior. Hemos establecido una asociación estratégica con un grupo de expertos en tecnología líderes en la industria para ampliar y enriquecer nuestro contenido educativo. Esta colaboración estratégica tiene como objetivo brindar a nuestros usuarios una oportunidad única de acceder a conocimientos tecnológicos de primera clase. Aquí hay algunos aspectos destacados de esta emocionante colaboración: Contenido Exclusivo: Gracias a esta asociación, nuestros usuarios podrán acceder a contenido educativo exclusivo creado por expertos en tecnología.',
                'categoria_id'=>'2',
                'img'=>'imagenNoticias/d24UKVHRVaxxap8M0ilWA5GkSWH8lnREGtYjcyop.jpg',
                'descripcion_img'=>'portada_noticia',
                'fecha'=>'2023-10-01',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>3,
                'titulo'=>'Cómo Nuestra Aplicación Está Facilitando el Aprendizaje Tecnológico para Adultos',
                'noticia'=>'Cómo Nuestra Aplicación Está Facilitando el Aprendizaje Tecnológico para Adultos - Educación Tecnológica - El aprendizaje tecnológico se ha convertido en una parte esencial de la educación, y estamos orgullosos de ser una herramienta líder en este campo. Nuestra aplicación de aprendizaje tecnológico no solo es adecuada para el aprendizaje individual, sino que también está desempeñando un papel crucial en la enseñanza en las aulas. Aquí resaltamos cómo nuestra aplicación está facilitando el aprendizaje tecnológico para adultos mayores de 35 años: Enfoque Amigable para Adultos: Reconocemos que los adultos pueden sentirse intimidados por la tecnología, y nuestra aplicación está diseñada teniendo en cuenta esto.',
                'categoria_id'=>'3',
                'img'=>'imagenNoticias/hKXVJ5GkpfQjgJ5K9uMEwJMycMQMouecNUlazbqA.jpg',
                'descripcion_img'=>'portada_noticia',
                'fecha'=>'2023-10-01',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
