@extends('layouts.plantilla')

@section('title', 'Aviso Legal')

@section('content')


<div class="container mx-auto max-w-4xl p-4" style="text-align: left;">
  <h2 class="text-xl text-center text-gray-500 mb-3">
    El presente aviso legal establece las condiciones de prestación de servicio de la web identificada con el dominio: www.cleepple.com/.uk/.co (en adelante “la Plataforma”)
  </h2>
  <hr>

  <h3 class="h3">1. Identificación de la Empresa </h3>
  <br>
  <h5 class="h5 mb-3">Cleepple es una sociedad limitada, de nacionalidad Española, registrada en Barcelona y con número de CIF: B-09037809, con domicilio en Pineda de Mar, Calle Tribala, Código Postal: 08397 y con correo electrónico <a href="mailto:contacto@cleepple.com" class="text-blue-500">contacto@cleepple.com</a> y teléfono de contacto 692 65 14 41</h5>
  <hr>
  <h3 class="h3">2. Servicios ofrecidos en la Plataforma </h3>
  <br>
  <h5 class="h5">2.1. Cleepple es una herramienta que permite: (i) a los particulares, la posibilidad de encontrar empleo y/o publicar proyectos; (ii) a las empresas y autónomos, la oportunidad de ofrecer vacantes y/o encontrar profesionales o trabajadores que se adecuen a sus necesidades. Nuestro objetivo es servir de punto de convergencia o encuentro, de las necesidades laborales manifestadas por particulares, empresas y autónomos.</h5>
  <br>
  <h5 class="h5 mb-3">2.2. Cleepple no es un intermediario laboral, no representa a ninguna empresa, autónomo o trabajador, no es un buscador especializado de empleo ni agente intermediario. Su labor está orientada a ofrecer un encuentro de oferta versus la necesidad del mercado, dentro del marco de la oferta/ acceso al personal.</h5>
  <hr>
  <h3 class="h3">3. Definición de Visitante y/o Usuario</h3>
  <br>
  <h5 class="h5">Será catalogado como visitante de la plataforma, la persona que navegue en los diferentes apartados de la web, pero no accede a las facilidades ni usa las herramientas previstas para el usuario particular o profesional.</h5>
  <br>
  <h5 class="h5">Será considerado como usuario, la persona que se dé de alta en la plataforma, rellene y acepte el formulario de recogida de datos o se identifique con el ID de Facebook.</h5>
  <br>
  <h5 class="h5 mb-3">El usuario tendrá dos categorías (i) Usuario particular o persona natural y (ii) Usuario Profesional (persona jurídica y/o autónomos). Estas categorías se diferencian por las acciones que pueden ejecutar cada uno de ellos dentro de la plataforma. </h5>
  <hr>
  <h3 class="h3">4. Condiciones de uso y contratación de la Plataforma </h3>
  <br>
  <h5 class="h5">Cleepple ha implementado unas Condiciones de Uso y Contratación de la Plataforma, con la finalidad de que los Usuarios y/o Visitantes estén informados sobre las condiciones aplicables.</h5>
  <br>
  <h5 class="h5 mb-3">El acceso por parte del visitante y/o usuario dentro de la plataforma, implica la aceptación tácita de las mismas y en el caso en que el visitante adquiera la calidad de usuario al darse de alta, se entenderá que existe una aceptación expresa de estas condiciones cuando acepte el Aviso Legal mediante la casilla indicada en el formulario de alta o identificación mediante el ID de Facebook. Puede consultar las condiciones aplicables aquí <a href="{{ route('condiciones') }}" class="text-blue-500">Condiciones de uso y contratación de la plataforma.</a>.</h5>
  <hr>
  <h3 class="h3">5. Normas de la Comunidad aplicable a los visitantes y/o usuarios de Cleepple</h3>
  <br>
  <h5 class="h5 mb-3">Los visitantes y/o usuarios están obligados a respetar y cumplir ciertas normas de comportamiento que garanticen el funcionamiento y armonía de la comunidad Cleepple. El visitante se compromete a leer y a cumplir dichas normas y realizará una aceptación tácita cuando navegue dentro de la Plataforma. El Usuario aceptará de manera expresa estas normas cuando se registre y acepte de manera expresa el contenido de este aviso legal. Puede consultar las normas aplicables aquí.<a href="{{ route('condiciones') }}" class="text-blue-500">Condiciones de uso y contratación de la plataforma.</a></h5>
  <hr>
  <h3 class="h3">6. Régimen de Responsabilidad</h3>
  <br>
  <h4 class="text-xl text-gray-700 ml-3 mb-3">6.1. Responsabilidad de acceso a la web</h4>
  <ul>
    <li>
      <h5 class="h5 mb-3">(i) Cleepple no se responsabiliza por los daños o perjuicios, ya sean directos o indirectos, que sean ocasionados como consecuencia de la información errónea, inexacta, imprecisa o no-veraz de los contenidos publicados y/o de la información publicada en la plataforma por parte de los Usuarios.</h5>
    </li>
    <li>
      <h5 class="h5 mb-3">(ii) De igual manera Cleepple no es responsable por los daños o perjuicios, ya sean directos o indirectos, causados como consecuencia de las suspensiones temporales, averías o fallos técnicos que afecten los servicios de la plataforma y que sean ocasionados por causas ajenas, por causa de virus o inseguridad informática, ocasionada por parte de terceros, ni por las actuaciones ilegales e irrespetuosas de los demás usuarios, entre otros.</h5>
    </li>
    <li>
      <h5 class="h5 mb-3">(iii) Cleepple no es responsable del contenido y/o actualización de los enlaces publicados en la plataforma o que haya sido incluida por los Usuarios de la plataforma. Los enlaces y la información de terceros vinculada por dichos enlaces, no está bajo el control de Cleepple.</h5>
    </li>
  </ul>
  <br>
  <h4 class="text-xl text-gray-700 ml-3 mb-3">6.2. Responsabilidad en relación con los servicios </h4>
  <br>
  <h5 class="h5 mb-3">Cleepple no es responsable, de los daños y perjuicios ya sean directos o indirectos, ocasionados como consecuencia de las siguientes situaciones:</h5>
  <ul>
    <li>
      <h5 class="h5 mb-3">(i) Por los resultados que arroje la búsqueda de personal, la selección de proyecto o la aceptación de la oferta laboral, teniendo en cuenta lo dicho en el apartado 2.2., de este documento.</h5>
    </li>
    <li>
      <h5 class="h5 mb-3">(ii) Por aplicación inadecuada o no aplicación de medidas de seguridad por parte de los Usuarios, en relación con las claves de acceso y contenido del perfil.</h5>
    </li>
    <li>
      <h5 class="h5 mb-3">(iii) Por cualquier uso erróneo que el Usuario dé a su perfil, incluyendo la actividad inadecuada o no autorizada realizada por un tercero delegado o no por un Usuario.</h5>
    </li>
    <li>
      <h5 class="h5 mb-3">(iv) Por el contenido que publique el Usuario en su perfil que vulnere o desconozca los derechos de propiedad Intelectual de terceros, de acuerdo con lo establecido en el apartado 7.2.(i) de éste texto.</h5>
    </li>
  </ul>
  <br>
  <h4 class="text-xl text-gray-700 ml-3 mb-3">6.3. Responsabilidad en relación con los fallos del servicio</h4>
  <br>
  <h5 class="h5">Cleepple por regla general no responde por los daños y perjuicios ya sean directos o indirectos, ocasionados en los siguientes casos:</h5>
  <br>
  <h5 class="h5">(i) Por los fallos técnicos en la plataforma y/o de no suministro del servicio de internet cuando sean causados por acciones o fallos de terceros o bien por causas propias - en este último caso, tampoco habrá responsabilidad cuando se compruebe que Cleepple actuó de manera diligente, esto es con interés en la búsqueda de una solución o control del fallo técnico que haya afectado a la plataforma.</h5>
  <br>
  <h5 class="h5">Sólo en los casos en que exista un contrato de pago entre Cleepple con el Usuario y el fallo haya sido ocasionado por una causa propia y se llegue a demostrar a nivel judicial, que Cleepple no actuó con la debida diligencia en la resolución del fallo, Cleepple responderá frente al Usuario, por concepto de indemnización, con un importe máximo, igual al valor pagado desde la fecha de contratación hasta la fecha de la generación del daño, lo cual, tendrá como importe máximo lo pagado por el Usuario durante el año de contratación de servicio, anterior a la fecha de generación del daño.</h5>
  <br>
  <h5 class="h5">(ii) Cleepple no responderá si, como consecuencia de dichos fallos, resultan afectados los servicios contratados por parte de los Usuarios y/o de los servicios que estos presten a favor de terceros.</h5>
  <br>
  <h5 class="h5 mb-3">(iii) De acuerdo con todo lo anterior, Cleepple no responde ni garantiza disponibilidad permanente o de continuidad en la prestación del servicio. El Usuario entiende y acepta que la prestación de estos servicios, implican riesgos informáticos y/o tecnológicos que pueden presentarse durante la prestación del servicio.</h5>
  <hr>
  <h3 class="h3">7. Política de Propiedad Intelectual e Industrial</h3>
  <br>
  <h4 class="text-xl text-gray-700 ml-3 mb-3">7.1. Propiedad industrial e intelectual de Cleepple</h4>
  <h5 class="h5">(i) Cleepple es titular de los derechos de Marca y logotipo con los que se identifica la plataforma. La marca se encuentra registrada ante la Oficina Española de Patentes y Marcas de España. Por esta razón, queda expresamente prohibida la reproducción, la transformación, distribución, comunicación pública, puesta a disposición del público, con fines comerciales, venta y/o cualquier otra explotación de la marca, sin el consentimiento por escrito del representante legal de Cleepple.</h5>
  <br>
  <h5 class="h5">(ii) Cleepple ha constituido pruebas de autoría correspondientes y por tanto es titular en los derechos relativos al software de la plataforma, fotografías y/o contenido que se ha publicado en la plataforma y/o en su defecto, cuenta con la debida autorización del tercero titular de ello. El uso o ejercicio de estos derechos, requiere de autorización previa y por escrito de Cleepple. El desconocimiento de estos derechos facultará a Cleepple a exigir al Usuario, Visitante o tercero, de las responsabilidades legalmente establecidas y a solicitar el pago de daños y perjuicios correspondientes.</h5>
  <br>
  <h4 class="text-xl text-gray-700 ml-3 mb-3">7.2. Propiedad Intelectual e industrial publicado por el Usuario en la plataforma de Cleepple</h4>
  <h5 class="h5 mb-3">El Usuario de Cleepple será responsable de respetar y garantizar que la información que publica en su perfil como marcas, contenido y/o fotografías, corresponda a su titularidad o cuenta con la debida autorización por parte del tercero titular.</h5>
  <hr>
  <h3 class="h3">8. Política de privacidad y cookies</h3>
  <br>
  <h5 class="h5 mb-3">Cleepple ha implementado una política de privacidad y de cookies con el objetivo de informar a los visitantes y/o usuarios de la plataforma, sobre los derechos y finalidades aplicables en el tratamiento de datos, incluyendo la descripción del tipo de cookies usadas en la plataforma. Consulta la<a href="{{ route('polit-priva') }}" class="text-blue-500"> política de privacidad y cookies</a> de Cleepple.</h5>
  <hr>
  <h3 class="h3">9. Medidas de seguridad aplicables</h3>
  <br>
  <h5 class="h5">Cleepple informa a sus Usuarios y/o Visitantes por medio de este aviso legal, que Internet es una red abierta y global, y que no obstante Cleepple ha implementado medidas de seguridad para controlar y proporcionar la protección de datos y/o la privacidad de la información que circula en la plataforma, dichas medidas de seguridad en Internet no son inexpugnables ni infalibles así como tampoco lo son los medios técnicos utilizados en la red.</h5>
  <br>
  <h5 class="h5 mb-3">De acuerdo con lo anterior, el Visitante y/o Usuario se obliga a actuar con la máxima diligencia en esta materia y la utilización de todos los mecanismos de seguridad que tenga a su alcance. Cleepple no se hace responsable de prácticas en las que el usuario no asume el nivel adecuado de seguridad, ni diligencia debida ni de sus consecuencias, así como causas o daños provocados por terceros ajenos a esta empresa o bien por temas de fuerza mayor, tal como se indica en el apartado 6.2.(ii) de este aviso.</h5>
  <hr>
  <h3 class="h3">10. Las modificaciones a este Aviso Legal </h3>
  <br>
  <h5 class="h5">Cleepple se reserva la facultad de modificar el contenido del presente aviso legal, como consecuencia de cambios normativos y/o de la implementación de nuevos criterios comerciales, diseño de software y/o de marketing adoptados a nivel interno de Cleepple.</h5>
  <br>
  <h5 class="h5 mb-3">Los cambios que impliquen afectación y/o modificación de los derechos de los Usuarios o de los Visitantes de las plataformas, serán notificados en su momento para que el Usuario o Visitante pueda conocer el contenido de los mismos y tenga la posibilidad de aceptar dichas condiciones o rechazarlas (si no está de acuerdo con ellas).</h5>
  <hr>
  <h3 class="h3">11. Normativa aplicable y Jurisdicción</h3>
  <br>
  <h5 class="h5">Todas las políticas desarrolladas y vinculadas a través de este aviso legal se rigen en todos y cada uno de sus extremos por la legislación española, entre ellas: la Ley 34/2002, de Servicios de la Sociedad de la Información y de Comercio Electrónico, Ley Orgánica 15/1999, de 13 de diciembre, de Protección de datos de carácter personal y las demás disposiciones legales resulten de aplicación.</h5>
  <br>
  <h5 class="h5">En el supuesto de que surja cualquier conflicto o discrepancia en la interpretación o aplicación del presente aviso legal, los Juzgados y Tribunales que, en su caso, conocerán del asunto, serán los que disponga la normativa legal aplicable en materia de jurisdicción competente. En el caso que el Usuario sea un consumidor, atendiendo lo definido por la legislación española, serán competentes los tribunales correspondientes a su domicilio.</h5>
  <br>
</div>

@endsection


    

