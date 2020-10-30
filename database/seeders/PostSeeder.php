<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $quots01['title'] = [
            'en' => 'It’s not about ideas. It’s about making ideas happen.',
            'ar' => 'الأمر لا يتعلق بالافكار إنه حول جعل الأفكار تحدث.',
            'ca' => 'No se trata de ideas. Se trata de hacer realidad las ideas.',
        ];
        $quots01['body'] = [
            'en' => 'It’s not about ideas. It’s about making ideas happen.',
            'ar' => 'الأمر لا يتعلق بالافكار إنه حول جعل الأفكار تحدث.',
            'ca' => 'No se trata de ideas. Se trata de hacer realidad las ideas.',
        ];

        $quots02['title'] = [
            'en' => 'Always deliver more than expected.',
            'ar' => 'تقديم دائما أكثر مما كان متوقعا.',
            'ca' => 'Entregue siempre más de lo esperado.',
        ];
        $quots02['body'] = [
            'en' => 'Always deliver more than expected.',
            'ar' => 'تقديم دائما أكثر مما كان متوقعا.',
            'ca' => 'Entregue siempre más de lo esperado.',
        ];


        $quots03['title'] = [
            'en' => 'The most courageous act is still to think for yourself. Aloud.',
            'ar' => 'العمل الأكثر شجاعة لا يزال التفكير لنفسك. Aloud.',
            'ca' => 'El acto más valiente es pensar por ti mismo. En voz alta.',
        ];
        $quots03['body'] = [
            'en' => 'The most courageous act is still to think for yourself. Aloud.',
            'ar' => 'العمل الأكثر شجاعة لا يزال التفكير لنفسك. Aloud.',
            'ca' => 'El acto más valiente es pensar por ti mismo. En voz alta.',
        ];

        $quots04['title'] = [
            'en' => 'What would you do if you were not afraid?',
            'ar' => 'ماذا كنت ستفعل لو لم تكن خائفاً؟',
            'ca' => '¿Qué harías si no tuvieras miedo?',
        ];
        $quots04['body'] = [
            'en' => 'What would you do if you were not afraid?',
            'ar' => 'ماذا كنت ستفعل لو لم تكن خائفاً؟',
            'ca' => '¿Qué harías si no tuvieras miedo?',
        ];

        $quots05['title'] = [
            'en' => 'Nothing will work unless you do.',
            'ar' => 'لا شيء سيعمل إلا إذا فعلت.',
            'ca' => 'Nada funcionará a menos que tu lo hagas.',
        ];
        $quots05['body'] = [
            'en' => 'Nothing will work unless you do.',
            'ar' => 'لا شيء سيعمل إلا إذا فعلت.',
            'ca' => 'Nada funcionará a menos que tu lo hagas.',
        ];

        $quots06['title'] = [
            'en' => 'Don’t be intimidated by what you don’t know. That can be your greatest strength and ensure that you do things differently from everyone else.',
            'ar' => 'لا ترتعب من ما لا تعرفه يمكن أن يكون لديك أعظم قوة والتأكد من أن تفعل الأشياء بشكل مختلف عن أي شخص آخر.',
            'ca' => 'No se deje intimidar por lo que no sabe. Esa puede ser su mayor fortaleza y garantizar que haga las cosas de manera diferente a los demás.',
        ];
        $quots06['body'] = [
            'en' => 'Don’t be intimidated by what you don’t know. That can be your greatest strength and ensure that you do things differently from everyone else.',
            'ar' => 'لا ترتعب من ما لا تعرفه يمكن أن يكون لديك أعظم قوة والتأكد من أن تفعل الأشياء بشكل مختلف عن أي شخص آخر.',
            'ca' => 'No se deje intimidar por lo que no sabe. Esa puede ser su mayor fortaleza y garantizar que haga las cosas de manera diferente a los demás.',
        ];

        $quots07['title'] = [
            'en' => 'Fearlessness is like a muscle. I know from my own life that the more I exercise it, the more natural it becomes to not let my fears run me.',
            'ar' => 'الخوف مثل العضلات. أعرف من حياتي الخاصة أنه كلما مارستها أكثر، كلما أصبح من الطبيعي عدم السماح لمخاوفي بتشغيلي.',
            'ca' => 'La valentía es como un músculo. Sé por mi propia vida que cuanto más lo ejerzo, más natural se vuelve no dejar que mis miedos me corran.',
        ];
        $quots07['body'] = [
            'en' => 'Fearlessness is like a muscle. I know from my own life that the more I exercise it, the more natural it becomes to not let my fears run me.',
            'ar' => 'الخوف مثل العضلات. أعرف من حياتي الخاصة أنه كلما مارستها أكثر، كلما أصبح من الطبيعي عدم السماح لمخاوفي بتشغيلي.',
            'ca' => 'La valentía es como un músculo. Sé por mi propia vida que cuanto más lo ejerzo, más natural se vuelve no dejar que mis miedos me corran.',
        ];

        $quots08['title'] = [
            'en' => 'One does not discover new lands without consenting to lose sight of the shore for a very long time.',
            'ar' => 'لا يكتشف المرء أراضي جديدة دون الموافقة على أن يغفل عن الشاطئ لفترة طويلة جدا.',
            'ca' => 'No se descubren nuevas tierras sin consentir en perder de vista la costa durante mucho tiempo.',
        ];
        $quots08['body'] = [
            'en' => 'One does not discover new lands without consenting to lose sight of the shore for a very long time.',
            'ar' => 'لا يكتشف المرء أراضي جديدة دون الموافقة على أن يغفل عن الشاطئ لفترة طويلة جدا.',
            'ca' => 'No se descubren nuevas tierras sin consentir en perder de vista la costa durante mucho tiempo.',
        ];

        $quots09['title'] = [
            'en' => 'Surround yourself with only people who are going to lift you higher.',
            'ar' => 'تحيط نفسك مع الناس فقط الذين هم الذهاب لرفع لكم أعلى.',
            'ca' => 'Rodéate de solo personas que te elevarán más alto.',
        ];
        $quots09['body'] = [
            'en' => 'Surround yourself with only people who are going to lift you higher.',
            'ar' => 'تحيط نفسك مع الناس فقط الذين هم الذهاب لرفع لكم أعلى.',
            'ca' => 'Rodéate de solo personas que te elevarán más alto.',
        ];

        $quots10['title'] = [
            'en' => 'Sweating the details is more important than anything else.',
            'ar' => 'التعرق التفاصيل هو أكثر أهمية من أي شيء آخر.',
            'ca' => 'Sudar los detalles es más importante que cualquier otra cosa.',
        ];
        $quots10['body'] = [
            'en' => 'Sweating the details is more important than anything else.',
            'ar' => 'التعرق التفاصيل هو أكثر أهمية من أي شيء آخر.',
            'ca' => 'Sudar los detalles es más importante que cualquier otra cosa.',
        ];

        $quots11['title'] = [
            'en' => 'You shouldn’t blindly accept a leader’s advice. You’ve got to question leaders on occasion.',
            'ar' => 'لا يجب أن تقبل نصيحة القائد بشكل أعمى يجب أن تستجوب القادة في بعض الأحيان',
            'ca' => 'No debe aceptar ciegamente el consejo de un líder. Tienes que cuestionar a los líderes en ocasiones.',
        ];
        $quots11['body'] = [
            'en' => 'You shouldn’t blindly accept a leader’s advice. You’ve got to question leaders on occasion.',
            'ar' => 'لا يجب أن تقبل نصيحة القائد بشكل أعمى يجب أن تستجوب القادة في بعض الأحيان',
            'ca' => 'No debe aceptar ciegamente el consejo de un líder. Tienes que cuestionar a los líderes en ocasiones.',
        ];

        $quots12['title'] = [
            'en' => 'Your time is limited, so don’t waste it living someone else’s life.',
            'ar' => 'وقتك محدود، لذا لا تضيعه في حياة شخص آخر.',
            'ca' => 'Tu tiempo es limitado, así que no lo pierdas viviendo la vida de otra persona.',
        ];
        $quots12['body'] = [
            'en' => 'Your time is limited, so don’t waste it living someone else’s life.',
            'ar' => 'وقتك محدود، لذا لا تضيعه في حياة شخص آخر.',
            'ca' => 'Tu tiempo es limitado, así que no lo pierdas viviendo la vida de otra persona.',
        ];

        $quots13['title'] = [
            'en' => 'Never give up. Today is hard, tomorrow will be worse, but the day after tomorrow will be sunshine.',
            'ar' => 'لا تستسلم أبداً اليوم صعب، غدا سيكون أسوأ، لكن بعد غد سيكون شروق الشمس.',
            'ca' => 'Nunca te rindas. Hoy es duro, mañana será peor, pero pasado mañana habrá sol.',
        ];
        $quots13['body'] = [
            'en' => 'Never give up. Today is hard, tomorrow will be worse, but the day after tomorrow will be sunshine.',
            'ar' => 'لا تستسلم أبداً اليوم صعب، غدا سيكون أسوأ، لكن بعد غد سيكون شروق الشمس.',
            'ca' => 'Nunca te rindas. Hoy es duro, mañana será peor, pero pasado mañana habrá sol.',
        ];

        $quots14['title'] = [
            'en' => 'Define success on your own terms, achieve it by your own rules, and build a life you’re proud to live.',
            'ar' => 'حدد النجاح بشروطك الخاصة، وتحققه بقواعدك الخاصة، واصنع حياة تفخر بأن تعيشها.',
            'ca' => 'Defina el éxito en sus propios términos, consígalo según sus propias reglas y construya una vida de la que se sienta orgulloso de vivir.',
        ];
        $quots14['body'] = [
            'en' => 'Define success on your own terms, achieve it by your own rules, and build a life you’re proud to live.',
            'ar' => 'حدد النجاح بشروطك الخاصة، وتحققه بقواعدك الخاصة، واصنع حياة تفخر بأن تعيشها.',
            'ca' => 'Defina el éxito en sus propios términos, consígalo según sus propias reglas y construya una vida de la que se sienta orgulloso de vivir.',
        ];

        $quots15['title'] = [
            'en' => 'Someone’s sitting in the shade today because someone planted a tree a long time ago.',
            'ar' => 'شخص ما يجلس في الظل اليوم لأن أحدهم زرع شجرة منذ زمن بعيد',
            'ca' => 'Alguien está sentado a la sombra hoy porque alguien plantó un árbol hace mucho tiempo.',
        ];
        $quots15['body'] = [
            'en' => 'Someone’s sitting in the shade today because someone planted a tree a long time ago.',
            'ar' => 'شخص ما يجلس في الظل اليوم لأن أحدهم زرع شجرة منذ زمن بعيد',
            'ca' => 'Alguien está sentado a la sombra hoy porque alguien plantó un árbol hace mucho tiempo.',
        ];

        Post::create($quots01);
        Post::create($quots02);
        Post::create($quots03);
        Post::create($quots04);
        Post::create($quots05);
        Post::create($quots06);
        Post::create($quots07);
        Post::create($quots08);
        Post::create($quots09);
        Post::create($quots10);
        Post::create($quots11);
        Post::create($quots12);
        Post::create($quots13);
        Post::create($quots14);
        Post::create($quots15);


    }
}
