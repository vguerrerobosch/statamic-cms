<?php

return [
    'array' => [
        'config' => [
            'keys' => 'Definiu les tecles de matriu (variables) i les etiquetes opcionals.',
            'mode' => 'El mode dinàmic proporciona a l\'usuari el control de les dades mentre que el mode clau no ho faci.',
        ],
    ],
    'assets' => [
        'config' => [
            'allow_uploads' => 'Permet carregar fitxers nous.',
            'container' => 'Trieu quin contenidor d’actius utilitzar per a aquest camp.',
            'folder' => 'La carpeta per començar a navegar.',
            'max_files' => 'El nombre màxim d’actius seleccionables.',
            'mode' => 'Trieu l\'estil de disseny preferit.',
            'restrict' => 'Eviteu que els usuaris naveguin cap a altres carpetes.',
        ],
    ],
    'bard' => [
        'config' => [
            'allow_source' => 'Habiliteu l’opció per visualitzar el codi font HTML mentre s’escriu.',
            'buttons' => 'Trieu quins botons es mostren a la barra d’eines.',
            'container' => 'Trieu quin contenidor d’actius utilitzar per a aquest camp.',
            'fullscreen' => 'Habiliteu l\'opció per canviar a la pantalla completa',
            'link_noopener' => 'Estableix `rel =&quot; noopener` en tots els enllaços.',
            'link_noreferrer' => 'Estableix `rel =&quot; noreferrer` en tots els enllaços.',
            'reading_time' => 'Mostra el temps de lectura aproximat al final del camp.',
            'save_html' => 'Deseu HTML en lloc de dades estructurades. Això simplifica, però limita el control de la vostra plantilla.',
            'sets' => 'Els conjunts són blocs de camps configurables que es poden inserir a qualsevol part del contingut de Bard.',
            'target_blank' => 'Definiu `target =&quot; _ blank &quot;a tots els enllaços.',
            'toolbar_mode' => 'Trieu quin estil de barra d’eines preferiu.',
        ],
    ],
    'checkboxes' => [
        'config' => [
            'inline' => 'Mostra les caselles de selecció seguides.',
            'options' => 'Definiu les tecles de matriu i les seves etiquetes opcionals.',
        ],
    ],
    'code' => [
        'config' => [
            'indent_size' => 'Definiu la vostra mida de sagnat preferida (en espais).',
            'indent_type' => 'Definiu el vostre tipus de sagnat preferit.',
            'key_map' => 'Trieu el conjunt de dreceres del teclat preferit.',
            'mode' => 'Trieu l’idioma per ressaltar la sintaxi.',
            'theme' => 'Tria el tema que prefereixis.',
        ],
    ],
    'color' => [
        'config' => [
            'color_modes' => 'Trieu entre els modes de color que voleu triar.',
            'default_color_mode' => 'Configureu el mode de color pre-seleccionat.',
            'lock_opacity' => 'Desactiva el control lliscant alfa, evitant els ajustaments a l\'opacitat.',
            'swatches' => 'Predefiniu els colors que es poden seleccionar d\'una llista.',
            'theme' => 'Trieu entre el selector de colors clàssic i mini (més senzill).',
        ],
    ],
    'date' => [
        'config' => [
            'columns' => 'Mostra diversos mesos alhora, en files i columnes',
            'earliest_date' => 'Configureu la data seleccionable més antiga.',
            'format' => 'Formateu opcionalment la cadena de dates mitjançant [moment.js] (https://momentjs.com/docs/#/displaying/format/).',
            'full_width' => 'Estireu el calendari per utilitzar tota l\'amplada.',
            'inline' => 'Omet el camp d\'entrada desplegable i mostra el calendari directament.',
            'mode' => 'Trieu entre un mode de gamma única o de gamma (interval desactiva el selector de temps)',
            'rows' => 'Mostra diversos mesos alhora, en files i columnes',
            'time_enabled' => 'Activa el cronometrador.',
            'time_required' => 'Requereix temps _ a més_ fins ara.',
        ],
    ],
    'grid' => [
        'config' => [
            'add_row' => 'Configureu l\'etiqueta del botó &quot;Afegeix fila&quot;.',
            'fields' => 'Cada camp es converteix en una columna a la taula de la graella.',
            'max_rows' => 'Estableix un nombre màxim de files creables.',
            'min_rows' => 'Definiu un nombre mínim de files creables.',
            'mode' => 'Trieu l\'estil de disseny preferit.',
            'reorderable' => 'Activa per permetre el reordenament de files.',
        ],
    ],
    'markdown' => [
        'config' => [
            'automatic_line_breaks' => 'Habilita salts de línia automàtics.',
            'automatic_links' => 'Habilita l\'enllaç automàtic de qualsevol URL.',
            'container' => 'Trieu quin contenidor d’actius utilitzar per a aquest camp.',
            'escape_markup' => 'Escapa del marcatge HTML inline (per exemple, ` <div> `a` &lt;div&gt; `).',
            'folder' => 'La carpeta per començar a navegar.',
            'parser' => 'El nom d\'un analitzador personalitzat de Markdown. Deixeu en blanc per defecte.',
            'restrict' => 'Eviteu que els usuaris naveguin cap a altres carpetes.',
            'smartypants' => 'Converteix automàticament les cometes rectes en cotes arrissades, guions en guions / en-guions i altres transformacions de text similars.',
        ],
    ],
    'radio' => [
        'config' => [
            'inline' => 'Mostra els botons de ràdio seguits.',
            'options' => 'Definiu les tecles de matriu i les seves etiquetes opcionals.',
        ],
    ],
    'range' => [
        'config' => [
            'append' => 'Afegiu text al final (costat dret) del control lliscant.',
            'max' => 'El valor màxim, el més correcte.',
            'min' => 'El valor mínim, d’esquerres.',
            'prepend' => 'Afegiu text al començament (costat esquerre) del control lliscant.',
            'step' => 'La mida mínima entre valors.',
        ],
    ],
    'select' => [
        'config' => [
            'cast_booleans' => 'Les opcions amb valors de true i false es guardaran com a booleans.',
            'clearable' => 'Habiliteu la possibilitat de seleccionar la vostra opció.',
            'multiple' => 'Permet seleccions múltiples',
            'options' => 'Configureu les tecles i les seves etiquetes opcionals.',
            'placeholder' => 'Definiu el text de marcador de posició predeterminat que no es pot seleccionar.',
            'push_tags' => 'Afegiu etiquetes de nova creació a la llista d’opcions.',
            'searchable' => 'Habiliteu la cerca mitjançant possibles opcions.',
            'taggable' => 'Permet afegir noves opcions a més de les opcions predefinides',
        ],
    ],
    'template' => [
        'config' => [
            'hide_partials' => 'Les parcials rarament s\'utilitzen com a plantilles.',
        ],
    ],
    'text' => [
        'config' => [
            'append' => 'Afegiu el text després (a la dreta de) de l’entrada de text.',
            'character_limit' => 'Definiu el nombre màxim de caràcters entranyables.',
            'input_type' => 'Definiu el tipus d’entrada HTML5.',
            'placeholder' => 'Definiu el text del marcador de posició predeterminat.',
            'prepend' => 'Afegiu text abans (a l’esquerra de) d’entrada de text.',
        ],
    ],
];
