@extends('layouts.plantilla')

@section('breadcrumb')
<nav class="pt-0 pb-0 ps-3 mt-3 mb-3 bg-secondary bg-gradient text-emphasis-dark" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item text-white" aria-current="page">Inicio</li>
        <li class="breadcrumb-item active text-white" aria-current="page">Congreso</li>
    </ol>
</nav>
@endsection

@section('contenido')
<div class="col-xs-12 col-md-12 col-lg-12 mt-3">
    <h1 class="text-center">EL TECNOLÓGICO NACIONAL DE MÉXICO A TRAVÉS DEL INSTITUTO TECNOLÓGICO DE CD. ALTAMIRANO</h1>
    <br>
    <h1 class="text-center">C O N V O C A</h1>
    <p>A la comunidad académica, estudiantes, profesores, investigadores de instituciones de educación superior, centros de investigación, sector gubernamental, organizaciones no gubernamentales, a todos aquellos que realicen investigación científica e innovación de tecnologías productivas y al público en general, a participar en el <strong>VI CONGRESO NACIONAL DE INVESTIGACIÓN EN CIENCIA E INNOVACIÓN DE TECNOLOGÍAS PRODUCTIVAS</strong> del 13 y 14 de noviembre de forma presencial, a distancia o hibrida en el campus Ciudad Altamirano.</p>
    <h2 class="text-center">BASES</h2>
    <h5>1) OBJETIVO</h5>
    <p>Promover la investigación y fortalecer la competencia de investigación profesional en los estudiantes, a través del VI Congreso Nacional de Investigación en Ciencia e Innovación de Tecnologías Productivas que fomente la divulgación de resultados, el intercambio de conocimientos y la generación de nuevos proyectos de investigación interdisciplinarios e interinstitucionales en los ejes temáticos de las asignaturas que integran los planes de estudio, contribuyendo así al desarrollo científico, tecnológico e innovador de las tecnologías productivas y de servicios a nivel regional y nacional.</p>
    <h5>2) REQUISITOS</h5>
    <p>Ser estudiantes, profesores o investigadores activos de alguna institución del Tecnológico Nacional de México u otra institución educativa de nivel medio superior o superior u organización, que deseen participar con temáticas relativas a las áreas de conocimiento del congreso.
    <h5>3) MODALIDADES DE PARTICIPACIÓN</h5>
    <p>La modalidad de participación podrá ser presencial, a distancia o hibrida, para su presentación, los ponentes contarán con un máximo de 15 minutos para exponer su tema y 5 minutos adicionales para responder preguntas de asistentes.</p>
    <p>Para la exposición, el ponente dispondrá de una cuenta en MS Teams. El formato de la presentación puede ser PPT.</p>
    <p><strong>Ponencia.</strong> Presentación de trabajos donde los participantes exponen los resultados parciales o finales de una investigación o proyecto en desarrollo. </p>
    <p><strong>Conferencia.</strong> (Por invitación).</p>
    <h5>4) TEMÁTICAS DEL CONGRESO</h5>
    <p>La recepción de resúmenes cortos (abstract), es a partir de la emisión de la presente convocatoria, la fecha límite de entrega es el día <strong>31 de octubre de 2023</strong>. Una vez autorizado deberá enviar el manuscrito in extenso.</p>
    <p>Quedará sujeto a las nueve áreas de conocimiento con tópicos de interés sugeridos (no está limitado) siguiente:</p>
    <h5>Áreas de Conocimiento</h5>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Áreas</th>
                <th scope="col">Tópicos de interés</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>I. Agronomía</td>
                <td>
                    <ul>
                        <li>Agricultura sostenible y prácticas agrícolas innovadoras.</li>
                        <li>Mejoramiento genético de cultivos.</li>
                        <li>Manejo integrado de plagas y enfermedades.</li>
                        <li>Agroecología y sistemas de producción orgánica.</li>
                        <li>Tecnologías de riego y manejo del agua en la agricultura.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>II.	Biología.</td>
                <td>
                    <ul>
                        <li>Biodiversidad y conservación de especies.</li>
                        <li>Ecología y estudios de ecosistemas.</li>
                        <li>Biología molecular y genética.</li>
                        <li>Biología marina y acuática.</li>
                        <li>Biomedicina y biotecnología.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>III. Pecuaria.</td>
                <td>
                    <ul>
                        <li>Mejoramiento genético y selección animal.</li>
                        <li>Nutrición y alimentación animal.</li>
                        <li>Calidad de productos pecuarios.</li>
                        <li>Sistemas de producción pecuaria sostenible.</li>
                        <li>Tecnologías y sistemas de manejo en la producción animal.</li>
                        <li>Economía y gestión en la producción pecuaria.</li>
                        <li>Políticas y regulaciones en el sector pecuario.</li>
                        <li>Producción y manejo de pastizales.</li>
                        <li>Sanidad y bienestar animal.</li>
                        <li>Reproducción y manejo reproductivo.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>IV.	Administración</td>
                <td>
                    <ul>
                        <li>Gestión estratégica y planificación empresarial.</li>
                        <li>Gestión de recursos humanos y desarrollo organizacional.</li>
                        <li>Marketing y comportamiento del consumidor.</li>
                        <li>Gestión de operaciones y logística.</li>
                        <li>Finanzas corporativas y evaluación de proyectos.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>V. Gestión empresarial</td>
                <td>
                    <ul>
                        <li>Innovación y emprendimiento.</li>
                        <li>Gestión de la calidad y mejora continua.</li>
                        <li>Responsabilidad social empresarial.</li>
                        <li>Gestión del cambio organizacional.</li>
                        <li>Estrategias de negocios y desarrollo de mercado.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>VI.	Contador Público</td>
                <td>
                    <ul>
                        <li>Contabilidad financiera y de costos.</li>
                        <li>Auditoría y control interno.</li>
                        <li>Normativas y regulaciones contables.</li>
                        <li>Gestión tributaria y fiscalidad.</li>
                        <li>Informes financieros y análisis de estados contables.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>VII. TIC’s en la Educación.</td>
                <td>
                    <ul>
                        <li>Innovación en la enseñanza y el aprendizaje</li>
                        <li>Formación de docentes</li>
                        <li>Tecnologías emergentes en educación</li>
                        <li>Inclusión educativa</li>
                        <li>Investigación en educación</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>VIII. Informática</td>
                <td>
                    <ul>
                        <li>Inteligencia artificial y aprendizaje automático.</li>
                        <li>Desarrollo de software y aplicaciones móviles.</li>
                        <li>Seguridad informática y ciberseguridad.</li>
                        <li>Sistemas de información empresarial.</li>
                        <li>Big Data y análisis de datos.</li>
                        <li>Internet de las cosas (IoT) y tecnologías de sensores.</li>
                        <li>Arquitectura de software y diseño de sistemas.</li>
                        <li>Redes de computadoras y comunicaciones.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>IX.	Desarrollo Sustentable.</td>
                <td>
                    <ul>
                        <li>Energías renovables y eficiencia energética</li>
                        <li>Gestión sostenible de recursos naturales</li>
                        <li>Economía circular y gestión de residuos</li>
                        <li>Ciudades sostenibles y planificación urbana</li>
                        <li>Cambio climático y resiliencia</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>X.	Matemáticas Educativa</td>
                <td>
                    <ul>
                        <li>Desarrollo del pensamiento matemático</li>
                        <li>Tecnología y Matemática</li>
                        <li>Evaluación en Matemática</li>
                        <li>Resolución de problemas y modelización</li>
                        <li>Educación matemática inclusiva</li>
                        <li>Formación y desarrollo profesional de docentes de matemáticas</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <p><strong>Correos para envío de trabajos anexando copia a</strong> congreso@cdaltamirano.tecnm.mx</p>
	<dl class="row">
        <dt class="col-sm-3">MESA 1: Áreas I, II, III. Ingenierías.</dt>
        <dd class="col-sm-9">ing_cdaltamirano@tecnm.mx, Teléfono: 767 67 2 0607 Ext. 121, Móvil: 5527040757</dd>

        <dt class="col-sm-3">MESA 2: Áreas IV, V y VI. Ciencias Económico – Administrativas.</dt>
        <dd class="col-sm-9">cead_cdaltamirano@tecnm.mx, Teléfono: 767 67 2 0607 Ext. 113, Móvil: 7676795636</dd>

        <dt class="col-sm-3">MESA 3: Área VII. Desarrollo Académico</dt>
        <dd class="col-sm-9">dda_cdaltamirano@tecnm.mx, Teléfono: 767 67 2 0607 Ext. 104, Móvil: 7671047422</dd>

        <dt class="col-sm-3">MESA 4: Área VIII. Sistemas y Computación</dt>
        <dd class="col-sm-9">sistemas@cdaltamirano.tecnm.mx, Teléfono: 767 67 2 0607 Ext. 119, Móvil: 7676795631</dd>

        <dt class="col-sm-3">MESA 5: Área IX y X. Ciencias Básicas</dt>
        <dd class="col-sm-9">Teléfono: 767 67 2 0607 Ext. 120, Móvil: </dd>
    </dl>
    <p>Un comité por área temática (Mesa) evaluará formato y contenido de las contribuciones y sugerirá la modalidad de participación.</p>
    <h5>5) NORMAS PARA ELABORACIÓN DE RESUMEN CORTO</h5>
    <p>El resumen deberá estar escrito en hoja tamaño carta (extensión máxima de una cuartilla), margen izquierdo 3.0 y 2.5 en los restantes, tipo de letra Arial Narrow, conforme lo siguiente:</p>
    <ul>
        <li>Extensión máxima de 300 palabras, incluso título, autor(es) e institución laboral.</li>
        <li><strong>Título centrado, letra mayúscula negrita, de 14 puntos.</strong> El contenido del título debe ser breve, claro y reflejar aspectos específicos del trabajo; no mayor a 15 palabras, o menor a tres renglones, o 150 caracteres como máximo. Permitir un espacio interlineal entre título y listado de autores.</li>
        <li><strong>Autor(es).</strong> Alineación centrada, de 12 puntos. Escribir en letras minúsculas (excepto inicial) a renglón seguido el primer nombre, letra inicial de un posible segundo nombre y apellidos para cada autor(es). Separar cada autor con punto y coma (;). No incluir título o grado académico. Después del nombre de cada autor colocar un número en superíndice, que permita identificar bajo estas líneas la institución de adscripción. Se aceptará un máximo de seis autores (inobjetable). Permitir un espacio interlineal sencillo entre autor e institución laboral. Los nombres de autor(es) aparecerán en la constancia tal y como aparezcan en el escrito.</li>
        <li><strong>Institución laboral u otra instancia.</strong> En letra minúscula, de 10 puntos, alineación centrada. Enseguida dirección de correo-e del autor responsable. Permitir un espacio de 1.5 de la última línea con respecto al RESUMEN.</li>
        <li><strong>Área.</strong> Letra en tamaño 12 puntos, alineación izquierda. Indicar el área de conocimiento.</li>
        <li><strong>RESUMEN.</strong> Letra tamaño 12 puntos, en alineación justificada. Permitir un espacio interlineal de 1.0 (sencillo) y colocar el cuerpo del resumen en un solo párrafo justificado, la descripción del trabajo, importancia y objetivos. Incluir, además, la descripción general de materiales y métodos. Los resultados y discusión deberán expresar el producto del trabajo con claridad y lenguaje sencillo, así como su interpretación. Mencionar las aportaciones sobresalientes del trabajo, como conclusión leve. </li>
        <li><strong>PALABRAS CLAVE.</strong> Escribir en cursivas, tamaño 12 puntos, alineación izquierda, de tres a seis palabras acordes al tema de trabajo de investigación. Escribir las palabras clave en la línea siguiente al contenido del resumen. </li>
    </ul>
    <p>NOTA: Se sugiere acudir al ejemplo de la convocatoria para elaborar el resumen.</p>
    <h5>6) NORMAS PARA LA ELABORACIÓN DE TRABAJOS IN EXTENSO</h5>
    <p>Elaboración con base a las normas de escritura de la revista Latindex (www.latindex.org). </p>
    <h6>Características de la hoja:</h6>
    <p>Tamaño carta (21.6x 27.9 cm). Márgenes: Izquierdo 3 cm y 2.5 cm los restantes. Tipo y tamaño de letra del texto: Arial Narrow, 11 puntos. Número máximo (10) y mínimo (6) de cuartillas. La numeración de páginas con tipo y tamaño de letra iguales que para el texto.</p>
    <h6>Características de encabezados y texto del documento: </h6>
    <p>Encabezados de primero y segundo ordenes en mayúsculas, negritas y centrados: </p>
    <ol>
        <li>TÍTULO</li>
        <li>RESUMEN (ABSTRACT)</li>
        <li>INTRODUCCIÓN</li>
        <li>OBJETIVOS</li>
        <li>MATERIALES Y MÉTODOS</li>
        <li>RESULTADOS Y DISCUSIÓN</li>
        <li>CONCLUSIONES</li>
        <li>REFERENCIAS BIBLIOGRÁFICAS.</li>
    </ol>
    <h5>7) COSTOS</h5>
    <ul>
        <li>Constancia Ponentes: $00.00</li>
        <li>Registro y Constancia de asistencia $ 25.00 PROPUESTA COBRO</li>
    </ul>
    <h5>8) DATOS DE LA CUENTA BANCARIA DEL INSTITUTO TECNOLÓGICO DE CD. ALTAMIRANO:</h5>
    <ul class="list-unstyled">
        <li>Banco: Santander (México), S.A.</li>
        <li>Titular de la cuenta: TECNM INSTITUTO TECNOLÓGICO DE CD. ALTAMIRANO</li>
        <li>Número de cuenta: 65-50760541-2</li>
        <li>Clabe interbancaria: 014266655076054126.</li>
    </ul>
    <h5>FORMA EN QUE PUEDE REALIZAR EL PAGO</h5>
    <ol>
        <li>Deposito en ventanilla, Banco Santander (México), S.A.</li>
        <li>Deposito en cajero electrónico, Banco Santander (México), S.A.</li>
        <li>Deposito en Telecom Telégrafos, a la cuenta del TecNM Instituto Tecnológico de Cd. Altamirano.</li>
        <li>Transferencia interbancaria, desde cualquier banco, a la cuenta del TecNM Instituto Tecnológico de Cd. Altamirano.</li>
    </ol>
    <hr>
    <h3 class="text-center">EJEMPLO DE RESUMEN CORTO PARA MEMORIA ELECTRÓNICA:</h3>
    <p class="text-center">CARACTERIZACIÓN MORFOLÓGICA DE LA CALABAZA PIPIANA (<em>Cucurbita argyrosperma Huber</em>)</p>
    <p class="text-center">Ricardo Rodríguez Amaya1; Salvador Montes Hernández2; José Antonio Rangel Lucio1; Mariano Mendoza Elos1; Luis Latournerie Moreno3</p>
    <p class="text-center">1Instituto Tecnológico de Roque. Celaya, Gto. 2INIFAP-CEBAJ, Celaya, Gto. 3 Instituto Tecnológico de Conkal. Conkal, Yucatán. </p>
    <p class="text-center">Autor responsable: montes.salvador@inifap.gob.mx.</p>
    <p class="text-center">Área:</p>
    <h4>RESUMEN</h4>
    <p>La calabaza pipiana (Cucurbita argyrosperma Huber) carece de un registro formal de su diversidad morfológica en México. Con este antecedente y la importancia de conservar y conocer los recursos genéticos vegetales de esta especie, se realizó esta investigación con el propósito de caracterizar 32 accesiones de calabaza pipiana del banco de germoplasma del Instituto Nacional de Investigaciones Forestales, Agrícolas y Pecuarias, Campo Experimental Bajío, durante el ciclo primavera verano 2006. Las plántulas de las poblaciones descritas se distribuyeron en el terreno bajo un diseño de bloques completos al azar y el manejo agronómico se realizó conforme a las técnicas de la calabaza en el Bajío Guanajuatense de México. Durante el ciclo de cultivo y en post-cosecha se emplearon descriptores que incluyen variables cualitativas (37) y cuantitativas (13) para su caracterización. El soporte estadístico comprendió análisis de componentes principales y de conglomerados jerárquicos. Las variables cualitativas, distribución del color terciario, intensidad de moteado, color de margen y testa de la semilla, y forma de borde de hoja, fueron las que mostraron mayor variación en las accesiones caracterizadas y permitieron la formación de siete grupos entre las 32 accesiones. Mientras tanto, las variables cuantitativas peso de 100 semillas con testa y sin testa, peso de fruto y días a floración contribuyeron en mayor medida a la distinción de las accesiones y la formación de cinco grupos. Características de interés antropocéntrico, como peso de 100 semillas con y sin testa, mostraron la mayor diversidad del germoplasma de calabaza pipiana estudiado.</p>
    <p><strong>Palabras clave:</strong> Accesión, caracterización, componente principal, recurso genético. </p>
</div>
@endsection
