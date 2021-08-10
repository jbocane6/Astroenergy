<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Permite instalar Bootstrap CSS desde un servidor-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/styles.css">

    <!-- Fonts Google -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Noticias</title>
</head>

<body>
    <!-- Inicia el header -->
    <header>
        <div class="hero-section">
            <div class="hero-section-text">
                <img src="./img/logo.png" />
                <h1>ASTROENERGY SAS</h1>
                <h5>Soluciones en energía amigable</h5>
            </div>
        </div>
    </header>
    <!-- Termina header -->
    <!-- Inicia barra navegación -->
    <div class="navbar-expand-md navbar-dark bg-dark sticky-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 nav">
                <li class="nav-item">
                    <a class="btn pt-2" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="btn pt-2" aria-current="page" href="tienda.php">Tienda</a>
                </li>
                <li class="nav-item me-5">
                    <a class="btn pt-2" aria-current="page" href="#contacto">Contacto</a>
                </li>
                <li class="nav-item ">
                    <a class="btn" aria-current="page" data-bs-toggle="modal" data-bs-target="#ingresa">Ingresa o Regístrate</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Termina barra navegación -->
    <div>
        <a href="#"><button type="button" class="fixed-bottom btn btn-secondary btn-circle"><small><i class="fas fa-arrow-up"></i></small></button></a>
    </div>
    <main>
        <article>
            <div class="container">
                <br><br>
                <h2 class="text-center title">NOTICIAS</h2>
                <br>
                <div class="row">
                    <div class="col-9">
                        <div class="card" id="noticia_1">
                            <img src="./img/noticias/uno.jpg" class="img-thumbnail">
                            <p class="text-center titulo mx-1">COLOMBIA EXPIDE BENEFICIOS TRIBUTARIOS PARA PROYECTOS DE ENERGÍAS RENOVABLES</p>
                            <div class="mx-2">
                                <p>Se trata de los incentivos contemplados en la Ley 1715: deducción de renta, exclusión del IVA, depreciación acelerada y quita de aranceles para productos vinculados a fuentes de energías renovables.</p>
                                <p>Esta semana la Unidad de Planeación Minero Energética (UPME) publicó datos actualizados hasta el 30 de septiembre sobre los proyectos de energías renovables no convencionales (FNCE) que se han anotado para recibir los beneficios tributarios que concede la Ley 1715.</p>
                                <p>Según el reporte, hubo recepción de un total de 1.052 proyectos. El 92% de ellos (964) corresponden a emprendimientos de energía solar fotovoltaica; le siguen las minicentrales hidroeléctricas (37); luego las plantas de biomasa (34); y finalmente, los eólicos (16).</p>
                                <p>Cabe destacar que de esos emprendimientos, 630 ya han recibido sus certificados para comenzar a obtener los beneficios tributarios. Según pudo saber Energía Estratégica, esos proyectos suman una capacidad instalada de 3.353 MW.</p>
                                <p>En ese universo de iniciativas aprobadas, 568 son solares fotovoltaicas, las cuales totalizan 1.314,83 MW. Pero las que dominan en cuanto cantidad de potencia son las eólicas (14 en total), que representan: 1.841 MW. Le siguen las minicentrales hidroeléctricas: 27 por 103,9 MW. Y finalmente los emprendimientos de biomasa: 20 por 93,99 MW.</p>
                                <p>No obstante de estos buenos resultados, se espera que paulatinamente haya un aumento en la cantidad de emprendimientos que pudieran llegar a presentarse, teniendo en cuenta que a principios de septiembre el Gobierno de Colombia lanzó la Resolución 203, que facilita la diligencia de los incentivos.</p>
                                <p>Del mismo modo, con el correr de los días hay expectativas de que la UPME entregue certificados con mayor celeridad. La resolución instruye a que el procedimiento de entrega de los beneficios que dicta la Ley 1715 demore un total de 45 días.</p>
                                <p><b>Los beneficios fiscales</b></p>
                                <p>De acuerdo a la Ley 1715, los proyectos de energías renovables accederán a beneficios tributarios de deducción de renta, exclusión del IVA, depreciación acelerada y quita de aranceles para productos vinculados a fuentes de energías renovables.</p>
                                <p><i>Tomado de: <a href="https://www.energiaestrategica.com/colombia-expide-beneficios-tributarios-para-proyectos-de-energias-renovables-por-mas-de-3-300-mw/" target="_blank">https://www.energiaestrategica.com/colombia-expide-beneficios-tributarios-para-proyectos-de-energias-renovables-por-mas-de-3-300-mw/</a></p></i></p>
                            </div>
                        </div>
                        <br>
                        <div class="card" id="noticia_2">
                            <img src="./img/noticias/dos.jpg" class="img-thumbnail">
                            <p class="text-center titulo mx-1">LOS INVERSIONISTAS DAN LA ESPALDA A LA INDUSTRIA DEL PETRÓLEO Y DE LOS COMBUSTIBLES FÓSILES Y PREFIEREN LA ENERGÍA RENOVABLE Y LA EFICIENCIA</p>
                            <div class="mx-2">
                                <p>El 31 de agosto cayó uno de los valores más emblemáticos del Dow Jones: el de la petrolera estadounidense Exxon.</p>
                                <p>El Dow Jones es el índice de referencia de Wall Street que reúne a 30 de las compañías más poderosas.</p>
                                <p>Exxon forma parte del Dow Jones desde 1928 y hasta 2011 fue la empresa con mayor capitalización bursátil, pero en tan solo una semana ha salido del índice de élite.</p>
                                <p>Esta caída es el símbolo de una tendencia más global: en Francia, la petrolera Total, que durante mucho tiempo fue un peso pesado del índice CAC 40, ha perdido su esplendor y el precio de una acción ha caído incluso por debajo de los 30 euros (35 dólares) a finales de septiembre, un mínimo desde el comienzo de los años 2000.</p>
                                <p>Desde el 1.° de enero, el índice mundial que agrupa a las compañías de exploración y producción de petróleo y gas ha perdido un 50 % en valor, en un contexto de caída de los precios del oro negro.</p>
                                <p>Por el contrario, el índice mundial de energías alternativas, que incluye a las empresas que obtienen al menos la mitad de sus ingresos de una economía más sostenible, ha progresado casi un 40 % en lo que va de año.</p>
                                <p><b>Mayor progresión de 2020</b></p>
                                <p>En la bolsa de París, los valores de las energías renovables figuran entre los que más han crecido este año. Desde el 1.° de enero, el productor de electricidad renovable Albioma ha progresado un 70 % y su rival Neoen un 50 %.</p>
                                <p>En los índices más pequeños, Voltalia subió más del 40 % y el valor del productor de hidrógeno McPhy casi se multiplicó por seis.</p>
                                <p>Estos valores “aún son demasiado pequeños para interesar a fondos importantes. Aún tienen que hacer méritos en el mercado”, matizó a la AFP Oskar Tijs, analista especializado en el sector en NN Investment Partner.</p>
                                <p>Sin embargo demuestran que el sector está en auge. “Las energías renovables ya no se ven como añadiduras a las fósiles, sino como el futuro de las energías”, estima Tijs.</p>
                                <p>Hay logros a mayor escala, como con Ørsted. La empresa danesa abandonó los fósiles en 2017. Desde entonces su cotización en Bolsa se ha triplicado.</p>
                                <p>El éxito del sector se debe a los progresos técnicos. “La electricidad solar era otrora cinco veces más cara que los fósiles. Hoy, incluso sin subvención, se ha vuelto en promedio más barata”, asegura Xavier Chollet, gestor del fondo Pictet Clean Energy.</p>
                                <p>El porcentaje de energías renovables subirá probablemente al 40 % en 2030, frente al 8 % en 2018. “Ningún presidente o programa político puede frenar el desarrollo si son más baratos sin subvención”, recalca, para dar a entender que incluso una reelección de Donald Trump en Estados Unidos no frenaría la tendencia.</p>
                                <p><i>Tomado de: <a href="https://www.elespectador.com/noticias/economia/los-inversores-bursatiles-se-vuelcan-cada-vez-mas-a-los-valores-de-energias-sostenibles/" target="_blank">https://www.elespectador.com/noticias/economia/los-inversores-bursatiles-se-vuelcan-cada-vez-mas-a-los-valores-de-energias-sostenibles/</a></i></p>
                            </div>
                        </div>
                        <br>
                        <div class="card" id="noticia_3">
                            <img src="./img/noticias/tres.jpg" class="img-thumbnail">
                            <p class="text-center titulo mx-1">LA ENERGÍA SOLAR ALCANZA LOS NIVELES DE COSTOS MÁS BAJOS JAMÁS VISTOS</p>
                            <div class="mx-2">
                                <p>La crisis del coronavirus ha causado el mayor golpe de la historia reciente a la economía y las cicatrices en la demanda energética serán duraderas, por lo que la evolución en los próximos años dependerá en gran medida de cómo se afronte la pandemia, <b>según ha advertido la Agencia Internacional de la Energía</b>.</p>
                                <p>La agencia con sede en París estima en la última edición de su informe <b>‘Perspectiva Mundial de la Energía‘ que la demanda global de energía se reducirá un 5% en 2020, lo que permitirá rebajar las emisiones de dióxido de carbono</b> (CO2) relacionadas con la energía en un 7%, mientras que las inversiones en energía caerán un 18%.</p>
                                <p>No obstante, la AIE subraya que el impacto de la crisis varía sustancialmente en función del combustible, <b>ya que las caídas estimadas del 8% en la demanda de petróleo y del 7% en el uso del carbón contrastan fuertemente con un ligero aumento en la contribución de las renovables</b>.</p>
                                <p>En el caso del gas natural, la reducción en la demanda se calcula en alrededor del 3%, mientras que la demanda global de electricidad parece descender en un 2% relativamente modesto para el año.</p>
                                <p>En este sentido, <b>“la institución considera que las políticas implementadas en respuesta a la crisis del coronavirus cuentan con el potencial de ‘remodelar el futuro de la energía”</b>, señalando que en el escenario de medidas anunciadas, que refleja las intenciones y los objetivos a día de hoy, la demanda mundial de energía recuperaría los niveles previos a la crisis a principios de 2023.</p>
                                <p>Sin embargo, esto no sucede hasta 2025 en caso de una pandemia prolongada y una recesión más profunda, según refleja el <b>escenario de recuperación retrasada planteado por la AIE, en el que el crecimiento más lento de la demanda reduce las perspectivas de los precios del petróleo y el gas en comparación con las tendencias anteriores a la crisis</b>, mientras que las grandes caídas en la inversión aumentan el riesgo de volatilidad futura del mercado.</p>
                                <p>En este escenario menos optimista, <b>“la economía global regresa a su tamaño anterior a la crisis solo en 2023, y la pandemia marca el comienzo de una década con la tasa más baja de crecimiento de la demanda de energía desde la década de 1930″</b>, advierte la agencia.</p>
                                <p><b>“La pandemia de la covid-19 ha causado más trastornos en el sector energético que cualquier otro evento en la historia reciente, dejando impactos que se sentirán en los próximos años”</b>, reconoce la AIE, para la que aún es pronto para decir si la crisis representa un revés para los esfuerzos por lograr un sistema energético más seguro y sostenible, o un catalizador que acelerará el ritmo del cambio.</p>
                                <p>“La pandemia está lejos de terminar, quedan muchas incertidumbres y aún no se han tomado decisiones cruciales de política energética”, sostiene.</p>
                                <p>En cualquiera de los escenarios contemplados, el ente adscrito a la Organización para la Cooperación y el Desarrollo Económico (OCDE) <b>destaca que las energías renovables serán las grandes protagonistas, particularmente en el caso de la energía solar</b>, como consecuencia de las medidas de apoyo y el desarrollo de las tecnologías, que están permitiendo un acceso muy barato al capital en los principales mercados.</p>
                                <p><b>La AIE pone de manifiesto que la energía solar fotovoltaica es ahora consistentemente más barata que las nuevas plantas de energía alimentadas con carbón</b> o gas en la mayoría de los países, y los proyectos solares ahora ofrecen algunos de los costes de electricidad más bajos jamás vistos.</p>
                                <p>De este modo, según su escenario de políticas declaradas, las energías renovables cubrirían el 80% del crecimiento de la demanda mundial de electricidad durante la próxima década. <b>La energía hidroeléctrica seguirá siendo la mayor fuente renovable</b>, pero la energía solar es la principal fuente de crecimiento, seguida de la energía eólica terrestre y marina.</p>
                                <p>“La energía solar se convertirá en el nuevo rey de los mercados eléctricos del mundo”, no ha dudado en afirmar Fatih Birol, director ejecutivo de la AIE, para quien <b>“la era del crecimiento de la demanda mundial de petróleo llegará a su fin en la próxima década”</b>.</p>
                                <p>Aunque el directivo turco de la AIE subrayó que “sin un gran cambio en las políticas gubernamentales, no hay señales de un rápido declive”, ya que, teniendo en cuenta la configuración de políticas actuales, un repunte económico global <b>“haría que la demanda de petróleo volviera a los niveles anteriores a la crisis “</b>.</p>
                                <p>De hecho, en los dos escenarios planteados por la AIE, la demanda de petróleo seguirá creciendo hasta tocar techo en la década de 2030. Sin embargo, en el caso del carbón, la AIE pronostica que la demanda <b>“no volverá a los niveles anteriores a la crisis en el escenario de políticas declaradas”</b>, mientras que su participación en el mix energético de 2040 se situará por debajo del 20% por primera vez desde la Revolución Industrial.</p>
                                <p><i>Tomado de: <a href="https://www.dinero.com/empresas/articulo/costos-de-la-energia-solar-en-el-mundo-para-2020/303307" target="_blank">https://www.dinero.com/empresas/articulo/costos-de-la-energia-solar-en-el-mundo-para-2020/303307</a></i></p>
                            </div>
                        </div>
                        <br>
                        <div class="card" id="noticia_4">
                            <img src="./img/noticias/cuatro.jpg" class="img-thumbnail">
                            <p class="text-center titulo mx-1">CÓMO LA ENERGÍA LIMPIA PUEDE IMPULSAR LA RECUPERACIÓN DE COVID-19</p>
                            <div class="mx-2">
                                <p>A medida que el coronavirus COVID-19 gane terreno en las regiones más pobres del mundo, golpeará con más fuerza a los más vulnerables, sumando una crisis económica y de salud sin precedentes a las crisis climáticas y de pobreza existentes. Esta crisis multifacética requiere una respuesta integral y colaborativa, y la energía limpia resulta esencial para ayudar a los países a prepararse, responder y recuperarse.</p>
                                <p>La energía limpia puede proporcionar soluciones asequibles, que estén en línea con los objetivos climáticos, y puede ayudar a mitigar los efectos de la crisis de COVID-19 en los medios de vida de las personas y las economías locales.</p>
                                <p>En la primera línea de la batalla contra COVID-19, la energía para los hogares y los centros de salud es crítica. Sin embargo, 840 millones de personas no tienen electricidad. De ellas, 570 millones viven en África subsahariana, donde una de cada cuatro clínicas no tiene energía, y el 28% no tiene un suministro energético continuo.</p>
                                <p>En las regiones donde la red eléctrica es poco confiable o incluso inexistente, las tecnologías de energía limpia proporcionan soluciones que se pueden implementar rápidamente. Con energía confiable, los centros de salud pueden trabajar todo el día, en lugar de depender de velas o linternas de teléfonos.</p>
                                <p><b>Energía solar para la salud</b></p>
                                <p>El programa Solar for Health (Energía Sola para la Salud), financiado principalmente por el Fondo Mundial de Lucha contra el SIDA, la TB y la Malaria, el PNUD e Innovation Norway, y en curso en 11 países desde 2016, presenta un modelo ecológico que mejora los servicios de salud al tiempo que salva vidas, cuida el medio ambiente y ahorra dinero.</p>
                                <p>El PNUD y sus socios buscan aprovechar esta experiencia con el fin de ayudar a los países a aumentar las inversiones en energía limpia para la electrificación de los centros de salud.</p>
                                <p>La energía limpia también puede abordar algunos de los factores que hacen que las personas sean más vulnerables a las enfermedades respiratorias como COVID-19. Casi la mitad del mundo depende de combustibles contaminantes y cocinas ineficientes para cocinar, a costos considerables para la salud y el medio ambiente. Cada año, 3,8 millones de personas mueren prematuramente por enfermedades relacionadas con el humo del fuego abierto o las estufas. Promover el uso de combustibles limpios y estufas energéticamente eficientes puede proteger a miles de millones de personas de respirar gases nocivos en el hogar todos los días.</p>
                                <p>El acceso a la energía también hace que las políticas de distanciamiento social sean viables al permitir a las personas mantenerse en contacto, recibir información, participar en la educación en línea y trabajar desde casa. También puede proporcionar acceso confiable a agua limpia, un elemento crucial en tiempos de COVID-19. Además, garantiza la seguridad alimentaria al habilitar las cadenas de frío de alimentos y alimentar las bombas de agua.</p>
                                <p><b>Impulsar la inversión en energía limpia</b></p>
                                <p>La energía limpia puede impulsar la recuperación económica después de la pandemia, dado que es un motor para la creación de empleo. Un récord de 11 millones de personas en todo el mundo estaban empleadas en el sector de las energías renovables en 2018 y la Agencia Internacional de Energía Renovable estima que este número podría aumentar a 42 millones de empleos en todo el mundo para 2050.</p>
                                <p>Los sistemas descentralizados de energía fuera de la red pueden impulsar las economías locales al ayudar a las pequeñas empresas a prosperar y ofrecer potencial para fuentes de ingresos adicionales.</p>
                                <p>La energía limpia está disponible, es asequible y confiable. Pero en muchos países y economías en desarrollo, el potencial para proyectos de energía renovable a gran escala permanece en gran medida sin explotar. Las inversiones en esta área siguen siendo mucho más bajas de lo que se requeriría para brindar el desarrollo completo y los beneficios climáticos de la energía limpia.</p>
                                <p><b>Levantar barreras</b></p>
                                <p>En todo el mundo, el PNUD está trabajando con los gobiernos para levantar las barreras que impiden estas inversiones. Al abordar las políticas y los riesgos financieros asociados a tales inversiones en las economías en desarrollo, el PNUD tiene como objetivo ayudar a los gobiernos a crear un entorno propicio para las energías renovables. El Programa de Minigrid de África del PNUD y Solar for Health, establecido en más de 11 países, se expandirá por todo el continente.</p>
                                <p>A medida que las naciones se preparan para las consecuencias de COVID-19, hay una gran oportunidad para un reinicio a nivel mundial. Los ambiciosos planes de estímulo ecológicos ayudarán a los países a restaurar sus economías mientras profundizan su transición energética. A medida que los precios del petróleo caen a mínimos históricos, debemos asegurarnos de que el mundo se mantenga en el camino correcto con sus objetivos climáticos. Ahora es un buen momento para reformar los subsidios a los combustibles fósiles y reevaluar las opciones que los países tienen para acelerar su transición de energía limpia y mantener una recuperación que sea mejor para todos.</p>
                                <p><i>Tomado de: <a href="https://www.undp.org/content/undp/es/home/blog/2020/how-clean-energy-can-power-a-covid-19-recovery0.html" target="_blank">https://www.undp.org/content/undp/es/home/blog/2020/how-clean-energy-can-power-a-covid-19-recovery0.html</a></i></p>
                            </div>
                        </div>

                    </div>
                    <div class="col-3">
                        <div class="container sticky-top">
                            <br><br>
                            <details open="">
                                <summary>Noticias</summary>
                                <p><a href="#noticia_1"><small>COLOMBIA EXPIDE BENEFICIOS TRIBUTARIOS PARA PROYECTOS DE ENERGÍAS RENOVABLES</small></a></p>
                                <p><a href="#noticia_2"><small>LOS INVERSIONISTAS DAN LA ESPALDA A LA INDUSTRIA DEL PETRÓLEO Y DE LOS COMBUSTIBLES FÓSILES Y PREFIEREN LA ENERGÍA RENOVABLE Y LA EFICIENCIA</small></a></p>
                                <p><a href="#noticia_3"><small>LA ENERGÍA SOLAR ALCANZA LOS NIVELES DE COSTOS MÁS BAJOS JAMÁS VISTOS</small></a></p>
                                <p><a href="#noticia_4"><small>CÓMO LA ENERGÍA LIMPIA PUEDE IMPULSAR LA RECUPERACIÓN DE COVID-19</small></a></p>
                            </details>
                        </div>
                    </div>
                </div>
                <!--Contacto-->
                <br>
                <section id="contacto">
                    <div class="row">
                        <div class="columns col-lg-12">
                            <br>
                            <h2 class="text-center title">Contacto</h2><br>
                            <h5 class="text-center">Nuestros datos de contacto</h5>
                        </div>
                        <div class="columns col-lg-6 col-sm-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3921.329724385439!2d-74.91496318469805!3d10.631472464758374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef5de3637e2113f%3A0x467580de37a6b117!2sCentro%20para%20el%20Desarrollo%20Agroecologico%20y%20Agroindustrial!5e0!3m2!1ses!2sco!4v1620162712304!5m2!1ses!2sco" width="100%" height="335" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <table class="table table-dark table-striped">
                                <tbody>
                                    <tr>
                                        <th>Dirección</th>
                                        <td>Cl. 9 #19-120, Sabanalarga, Atlántico</td>
                                    </tr>
                                    <tr>
                                        <th>Teléfono</th>
                                        <td>3851285 extensión 52172</td>
                                    </tr>
                                    <tr>
                                        <th>Correo</th>
                                        <td><a href="mailto:info@astroenergy.com.co">info@astroenergy.com.co</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="columns col-lg-6 col-sm-12 table-responsive">
                            <form action="mailto:jbocane6@gmail.com" method="post" enctype="text/plain">
                                <table class="table table-dark">
                                    <tr>
                                        <th><label for="nombre">Nombre*</label></th>
                                        <td><input type="text" name="nombre" value="" placeholder="Nombre" style="width: 100%;" required></td>
                                    </tr>
                                    <tr>
                                        <th><label for="correo" class="me-2">Correo*</label></th>
                                        <td><input type="email" name="correo" value="" placeholder="Correo" style="width: 100%;" required></td>
                                    </tr>
                                    <tr>
                                        <th><label for="tel">Telefono*</label></th>
                                        <td><input type="tel" name="tel" value="" placeholder="Teléfono" style="width: 100%;" required></td>
                                    </tr>
                                    <tr>
                                        <th class="align-middle"><label for="mensaje" class="">Mensaje*</label></th>
                                        <td><textarea name="mensaje" rows="10" placeholder="Mensaje" style="width: 100%;" required></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center">
                                            <div class="expanded button-group">
                                                <button type="reset" name="button" class="btn btn-secondary">Borrar</button>
                                                <button type="submit" name="button" class="btn btn-secondary">Enviar</button>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </section>
                <!--Termina Contacto-->
            </div>
        </article>
    </main>
    <!-- footer -->
    <footer>
        <div class="row">
            <div class="columns col-lg-3 col-sm-12">
                <ul class="list-inline">
                    <li class="list-inline-item ms-5">
                        <p>ASTROENERGY SAS 2021, Derechos Reservados.</p>
                    </li>
                </ul>
            </div>
            <div class="columns col-lg-3 col-sm-12">
                <ol class="list-inline">
                    <li class="list-inline-item"><a class="btn" data-bs-toggle="modal" data-bs-target="#terminos">Términos y Condiciones</a></li>
                    <li class="list-inline-item"><a class="btn" data-bs-toggle="modal" data-bs-target="#aviso">Aviso de Privacidad</a></li>
                </ol>
            </div>
            <div class="columns col-lg-3 col-sm-6">
                <ol class="list-inline">
                    <li class="list-inline-item"><a class="btn" class="btn" href="https://facebook.com/Astroenergy-272506576464234/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a class="btn" href="https://twitter.com/astroenergysas" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a class="btn" href="https://www.instagram.com/astroenergysas/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a class="btn" href="https://api.whatsapp.com/send/?phone=573555555555&text=Gracias%20por%20contactar%20con%20Astroenergy%20SAS&app_absent=0" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                </ol>
            </div>
            <div class="columns col-lg-3 col-sm-6">
                <ul class="list-inline">
                    <li class="list-inline-item"><a class="btn" data-bs-toggle="modal" data-bs-target="#desarrolladores">Desarrolladores</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Termina footer -->

    <!--Modals-->
    <div class="modal fade" id="terminos">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-white">
                    <h5 class="modal-title" id="exampleModalLabel">TERMINOS Y CONDICIONES</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <p>Todas las pasarelas de pago directo ofrecidas y utilizadas por nuestra compañía se adhieren a los estándares establecidos por PCI-DSS administrados por el PCI Security Standards Council, que es un esfuerzo conjunto de marcas como Visa, MasterCard, American Express y Discover. Los requisitos de PCI-DSS ayudan a garantizar el manejo seguro de la información de la tarjeta de crédito por parte de nuestra tienda y sus proveedores de servicios.
                    <p>&nbsp;</p>
                    Podemos comunicarnos contigo para notificarte sobre tu cuenta, para solucionar problemas con tu cuenta, resolver una disputa, cobrar tarifas o dinero adeudado, para sondear tus opiniones a través de encuestas o cuestionarios, para enviar actualizaciones sobre nuestra empresa, o cuando sea necesario para contactarte para hacer cumplir nuestro Acuerdo de usuario, las leyes nacionales aplicables y cualquier acuerdo que podamos tener contigo. A estos efectos, podemos comunicarnos contigo por correo electrónico, teléfono, mensajes de texto y correo postal.<p>&nbsp;</p>
                    Si no deseas que procesemos tus datos, contáctanos a info@astroenergy.com.co.<p>&nbsp;</p>
                    Nos reservamos el derecho de modificar esta política de privacidad en cualquier momento, por lo tanto, revísala con frecuencia. Los cambios y aclaraciones tendrán efecto inmediatamente después de su publicación en la página web. Si realizamos cambios sustanciales a esta política, te notificaremos que se ha actualizado, para que sepas qué información recopilamos, cómo la usamos y en qué circunstancias, si corresponde, usamos o divulgamos la información.<p>&nbsp;</p>
                    Si deseas: acceder, corregir, modificar o eliminar cualquier información personal que tengamos sobre ti, estás invitado a contactarnos en info@astroenergy.com.co</p>
                </div>
                <div class="modal-footer bg-white">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="aviso">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-white">
                    <h5 class="modal-title" id="exampleModalLabel">AVISO DE PRIVACIDAD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <p>Recibimos, recopilamos y almacenamos cualquier información que ingrese en nuestro sitio web o nos proporciones de otra manera. Además, recogemos la dirección de protocolo de Internet (IP) utilizada para conectar tu computadora a Internet; datos de inicio de sesión, dirección de correo electrónico, contraseña, información de la computadora y la conexión y el historial de compras. Podemos usar herramientas de software para medir y recopilar información de la sesión, incluidos los tiempos de respuesta de la página, la duración de las visitas a determinadas páginas, la información de interacción de la página y los métodos utilizados para navegar fuera de la página. También recopilamos información de identificación personal (incluido nombres, correo electrónico, contraseña, comunicaciones), detalles de pago (incluida la información de la tarjeta de crédito), comentarios, sugerencias, reseñas de productos, recomendaciones y perfil personal. Cuando realizas una transacción en nuestra página web, como parte del proceso, recopilamos información personal que nos proporcionas, como tu nombre, dirección física y dirección de correo electrónico. Tu información personal será utilizada solo para los motivos específicos indicados anteriormente.</p>
                    <p>Recopilamos dicha información personal y no personal para los siguientes propósitos:</p>
                    <p>
                    <ol>
                        <li>Para proporcionar y operar los servicios;</li>
                        <li>Para proporcionar a nuestros usuarios asistencia continua al cliente y soporte
                            técnico;</li>
                        <li>Para poder contactar a nuestros visitantes y usuarios con avisos generales y
                            personalizados relacionados con el servicio y mensajes promocionales;</li>
                        <li>Para crear datos estadísticos agregados y otra información no personal agregada
                            o deducida, que nosotros o nuestros socios comerciales podamos utilizar para
                            proporcionar y mejorar nuestros servicios respectivos;</li>
                        <li>Para cumplir con las leyes y regulaciones aplicables.</li>
                    </ol>
                    </p>
                </div>
                <div class="modal-footer bg-white">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade centro" id="desarrolladores">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-white">
                    <h5 class="modal-title" id="exampleModalLabel">DESARROLLADORES</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <img src="./img/cedagro.jpg" width="100%" alt="cedagro">
                    <p align=center><b>TRABAJO DESARROLLADO COMO EVIDENCIA PARA EL PROGRAMA ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACIÓN DEL SENA<BR>POR BRAYAN STIVEN MAHECHA GALINDO<br>&<br>JUAN CAMILO BOCANEGRA OSORIO</BR>2021</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade centro" id="ingresa" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-white">
                    <h5 class="modal-title" id="exampleModalLabel">Registro o Ingreso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <form action="clientes/passclientes.php" method="post">
                        <br>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="cedula" class="form-control" placeholder="cédula">

                        </div>
                        <br>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="passwd" class="form-control" placeholder="contraseña">
                        </div>
                        <br>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Recuérdame
                        </div>
                        <input type="submit" value="Ingresa" class="btn float-end btn-dark mx-1">
                        <input type="button" value="Regístrate" class="btn float-end btn-dark" onclick="location='../clientes/registro.php'">s
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Termina Modals-->
    <!--Javascript adicionales-->

    <!--Permite instalar popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <!--Permite instalar Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>