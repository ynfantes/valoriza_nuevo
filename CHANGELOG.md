## <small>6.10.5 (2023-07-09)</small>

* build: Agrega Script actualización base de datos. ([508f47c](https://github.com/ynfantes/valoriza2/commit/508f47c))
* feat: Permite cambiar la descripción del estatus del propietario que aparece en el estado de cuenta  ([4aa2daa](https://github.com/ynfantes/valoriza2/commit/4aa2daa)), closes [#32](https://github.com/ynfantes/valoriza2/issues/32)
* feat: Permite el cambio de número de referencia y fecha de cualquier ingreso desde la ventana de con ([e708f3b](https://github.com/ynfantes/valoriza2/commit/e708f3b))
* feat: Se agrega mensaje más descriptivo para el usuario en caso de duplicidad de codigo de propietar ([d6fb056](https://github.com/ynfantes/valoriza2/commit/d6fb056)), closes [#31](https://github.com/ynfantes/valoriza2/issues/31)
* feat(caja): Selecciona, de acuerdo al último pago efectuado por el cliente: metodo de pago, cuenta d ([aa06ddd](https://github.com/ynfantes/valoriza2/commit/aa06ddd)), closes [#25](https://github.com/ynfantes/valoriza2/issues/25)
* feat(Whatsapp21): Reinicio del último envío fallido al entrar en el módulo de mensajeria WhatsApp ([09f4eee](https://github.com/ynfantes/valoriza2/commit/09f4eee)), closes [#20](https://github.com/ynfantes/valoriza2/issues/20)
* fix: Corrige error en la tabla factura de cada condominio, que se ha borrado en una actualización el ([732dd57](https://github.com/ynfantes/valoriza2/commit/732dd57))
* fix: Corrige problema al cambiar el tipo de moneda de bolívares a dólares desde la ficha del condmin ([6848512](https://github.com/ynfantes/valoriza2/commit/6848512)), closes [#36](https://github.com/ynfantes/valoriza2/issues/36)
* fix(conciliacion): Corrige error durante la lectura de los registros preconciliados de los egresos ([7758566](https://github.com/ynfantes/valoriza2/commit/7758566)), closes [#28](https://github.com/ynfantes/valoriza2/issues/28)
* fix(Facturacion): Corrige el registro de gastos no comunes con conceptos mayores a los 100 caracater ([beedaf6](https://github.com/ynfantes/valoriza2/commit/beedaf6)), closes [#27](https://github.com/ynfantes/valoriza2/issues/27)
* fix(Facturacion): Corrige error al reiniciar el envío de los avisos de cobro de un condominio luego  ([1d76125](https://github.com/ynfantes/valoriza2/commit/1d76125)), closes [#26](https://github.com/ynfantes/valoriza2/issues/26)
* fix(Facturacion): Corrige promt para capturar variables de cuadros de los avisos de cobro (MHCalidad ([829d51c](https://github.com/ynfantes/valoriza2/commit/829d51c)), closes [#29](https://github.com/ynfantes/valoriza2/issues/29)
* fix(Whatsapp21): Se corrige error al disparar el proceso de envío de mensajes ([f41d0f9](https://github.com/ynfantes/valoriza2/commit/f41d0f9)), closes [#20](https://github.com/ynfantes/valoriza2/issues/20)
* docs: :memo: Agrega documentacion el métdodo actualizacion ([5a79ff7](https://github.com/ynfantes/valoriza2/commit/5a79ff7))
* refactor: Se comenta método registroPreConciliado ([779a51b](https://github.com/ynfantes/valoriza2/commit/779a51b))
* refactor(condominio): Se optimiza la impresión de los tres informes que se piden desdse el módulod d ([851fb6b](https://github.com/ynfantes/valoriza2/commit/851fb6b)), closes [#34](https://github.com/ynfantes/valoriza2/issues/34)
* chore: Elimina archivo comctl32.ocx ([e376fef](https://github.com/ynfantes/valoriza2/commit/e376fef))



## <small>6.10.4 (2023-06-01)</small>

* chore: :bookmark: Release verión 6.10.4 ([5f6b9ee](https://github.com/ynfantes/valoriza2/commit/5f6b9ee))
* fix: Corrige error al guardar la edición de un mensaje predeterminado que se envía por correo electr ([6efe011](https://github.com/ynfantes/valoriza2/commit/6efe011))
* fix: Corrige error al guardar/ editar la ficha de un condominio ([e06eb38](https://github.com/ynfantes/valoriza2/commit/e06eb38)), closes [#14](https://github.com/ynfantes/valoriza2/issues/14)
* fix: Corrige error al registrar un pago como abono a futuro a propietario sin deuda ([584b2dc](https://github.com/ynfantes/valoriza2/commit/584b2dc)), closes [#21](https://github.com/ynfantes/valoriza2/issues/21)
* fix: Corrige error al seleccionar de la lista a un propietario cuyo nombre se repite más de una vez  ([d1271b0](https://github.com/ynfantes/valoriza2/commit/d1271b0)), closes [#7](https://github.com/ynfantes/valoriza2/issues/7)
* fix(angelica): Cambia el datos de la columna "Monto del mes" en el reporte de acredita ([1c51bba](https://github.com/ynfantes/valoriza2/commit/1c51bba)), closes [#19](https://github.com/ynfantes/valoriza2/issues/19)
* fix(caja): Corrige error al deshacer una operación de caja ([bbe6b85](https://github.com/ynfantes/valoriza2/commit/bbe6b85)), closes [#22](https://github.com/ynfantes/valoriza2/issues/22)
* fix(caja): Corrige error al distribuir un pago con un saldo de abono a futuro ([5296c9a](https://github.com/ynfantes/valoriza2/commit/5296c9a))
* fix(caja): Corrige error al procesar pago que contenga una deducción ([42d3895](https://github.com/ynfantes/valoriza2/commit/42d3895)), closes [#18](https://github.com/ynfantes/valoriza2/issues/18)
* fix(caja): Corrige error al usar la opción distribuir pagos, en un condominio sin la facturación en  ([42745b3](https://github.com/ynfantes/valoriza2/commit/42745b3))
* fix(cuentas x cobrar): Elimina etiquetas de línea no declaradas ([25469fa](https://github.com/ynfantes/valoriza2/commit/25469fa))
* fix(Facturacion): Corrige error al emitir factura, en caso de un reverso previo ([7541b21](https://github.com/ynfantes/valoriza2/commit/7541b21)), closes [#13](https://github.com/ynfantes/valoriza2/issues/13)
* fix(Whatsapp21): Se incorpora un mensaje más descriptivo en caso de error durante el envío ([6600998](https://github.com/ynfantes/valoriza2/commit/6600998)), closes [#17](https://github.com/ynfantes/valoriza2/issues/17)
* feat: Incorpora la opción de modificar el tamaño de la fuente cuando se está editando las cartas que ([2c1556d](https://github.com/ynfantes/valoriza2/commit/2c1556d))
* refactor(caja): Refactorización código de caja. ([94b01a1](https://github.com/ynfantes/valoriza2/commit/94b01a1))



## <small>6.10.3 (2023-05-10)</small>

* refactor(caja): Refactoriza el módulo de cobranza por caja ([3c58ca8](https://github.com/ynfantes/valoriza2/commit/3c58ca8))
* refactor(condominio): Refactoriza la carga masiva de la deuda ([d57c11a](https://github.com/ynfantes/valoriza2/commit/d57c11a))
* refactor(cuentas x cobrar): Optimiza status botones de la barra de herramientas ([a734162](https://github.com/ynfantes/valoriza2/commit/a734162))
* fix: Elimina actualización 5.0.0 de la lista de actualizaciones diponibles ([1fb139c](https://github.com/ynfantes/valoriza2/commit/1fb139c))
* fix(caja): :bug: Corrige error en el proceso de impresión de los recibos por enviar ([4b869d2](https://github.com/ynfantes/valoriza2/commit/4b869d2)), closes [#12](https://github.com/ynfantes/valoriza2/issues/12)
* fix(cuentas x cobrar): :bug: Corrige error al presionar el botón ver aviso de cobro de un propietari ([1550abc](https://github.com/ynfantes/valoriza2/commit/1550abc)), closes [#10](https://github.com/ynfantes/valoriza2/issues/10)
* build: :arrow_up: Actualiza versión libreria MSCOMCTL ([e9dc61e](https://github.com/ynfantes/valoriza2/commit/e9dc61e))
* feat: En la ventana de buscar depósito o transferencia por número de referncia, ahora busca al hacer ([f5369d0](https://github.com/ynfantes/valoriza2/commit/f5369d0)), closes [#8](https://github.com/ynfantes/valoriza2/issues/8)
* feat(Cobranzas): :sparkles: Permite la impresión del reporte para acredita ([559a0e2](https://github.com/ynfantes/valoriza2/commit/559a0e2))
* feat(conciliacion): :sparkles: Se permite modificar la fecha de un ingreso/egreso desde la ventana d ([41ca943](https://github.com/ynfantes/valoriza2/commit/41ca943)), closes [#4](https://github.com/ynfantes/valoriza2/issues/4)



## <small>6.10.2 (2023-04-21)</small>

* feat(caja): Incorpora el simbolo de la moneda para la impresion del recibo general de caja ([255c231](https://github.com/ynfantes/valoriza2/commit/255c231))
* fix(Facturacion): :bug: Corrige error al homolar recibos pendientes ([d4d776c](https://github.com/ynfantes/valoriza2/commit/d4d776c))



## <small>6.10.1 (2023-03-30)</small>

* FIX: Corrige que al inactivar inmueble no elimina el condominio de la pagina web ([ef4dee1](https://github.com/ynfantes/valoriza2/commit/ef4dee1))
* FIX: Corrige que al reversar facturación y ya está sincronizada la página, quedan los avisos de cobr ([290090b](https://github.com/ynfantes/valoriza2/commit/290090b))



## 6.10.0 (2023-03-25)

* feat: Se incorpora la opción ZELLE como forma de pago en cobranza por caja y pagos web ([f4a9886](https://github.com/ynfantes/valoriza2/commit/f4a9886))



## <small>6.9.1 (2023-03-24)</small>

* fix: :bug: Corrige que no permite inactivar/activar condominios ([2a39251](https://github.com/ynfantes/valoriza2/commit/2a39251))
* fix: :card_file_box: Script actualización BBDD ([a49e93c](https://github.com/ynfantes/valoriza2/commit/a49e93c))
* fix(Facturacion): :bug: Desactiva el módulo de facturación en dólares para condominios que su unidad ([2568293](https://github.com/ynfantes/valoriza2/commit/2568293))
* fix(Facturacion): :bug: La indexaxión a la baja ([e00a567](https://github.com/ynfantes/valoriza2/commit/e00a567))
* fix(Pagos web): Corrige el registro de pagos para edificios inactivos ([3728737](https://github.com/ynfantes/valoriza2/commit/3728737))
* fix(Whatsapp21): La codificación de lectura del archivo base estaba mostrando caracteres extraños cu ([8d1dbc0](https://github.com/ynfantes/valoriza2/commit/8d1dbc0))
* feat: :sparkles: Agrega la actualizacion automática del software ([9859b95](https://github.com/ynfantes/valoriza2/commit/9859b95))
* feat: Cuando la forma de pago es Zelle, se puede completar los 11 caracteres con números y letras ([ed4546b](https://github.com/ynfantes/valoriza2/commit/ed4546b))
* refactor(Whatsapp21): :recycle: Refactoriza métodos del envío masivo de mensajes via WhatsApp ([83ffabb](https://github.com/ynfantes/valoriza2/commit/83ffabb))



## 6.9.0 (2023-02-22)

* fix: :bug: Enviar avisos de cobro a propietarios son saldo a favor. ([11554da](https://github.com/ynfantes/valoriza2/commit/11554da))
* fix: :bug: Error al imprimir recibo general de pago (Ana de Almeida) ([344ed0b](https://github.com/ynfantes/valoriza2/commit/344ed0b))
* fix(Whatsapp21): :bug: Error al mostrar error de finalización del proceso de envío WS ([4273196](https://github.com/ynfantes/valoriza2/commit/4273196))
* feat: :recycle: Lee los acentos en la plantilla de los mensajes WhatsApp ([c4275ce](https://github.com/ynfantes/valoriza2/commit/c4275ce))
* feat(Whatsapp21): :construction: Agrega propiedad "enviado" al JSON que se genera para enviar los me ([46cebe4](https://github.com/ynfantes/valoriza2/commit/46cebe4))
* feat(Whatsapp21): :sparkles: Incorpora la ejecución sincrona del envío de mensajes ([3409703](https://github.com/ynfantes/valoriza2/commit/3409703))
* feat(Whatsapp21): :sparkles: Incorpora más información en el archivo que se genera para envío de men ([af6e89d](https://github.com/ynfantes/valoriza2/commit/af6e89d))
* refactor: :construction: Ajustar la lectura de la configuración del servicio WhatsApp21 ([a68312a](https://github.com/ynfantes/valoriza2/commit/a68312a))
* refactor(bitacora): :chart_with_upwards_trend: registro en la bitácora de la respuesta a la solicitu ([67468f8](https://github.com/ynfantes/valoriza2/commit/67468f8))
* chore: :construction_worker: Instala versionado automático ([80d9c2f](https://github.com/ynfantes/valoriza2/commit/80d9c2f))
* Actualizacion 6.7.18 ([16be3c2](https://github.com/ynfantes/valoriza2/commit/16be3c2))
* Actualizacion entorno de trabajo ([6a026a5](https://github.com/ynfantes/valoriza2/commit/6a026a5))
* Actualizacion v6.8.24 ([77e0ec4](https://github.com/ynfantes/valoriza2/commit/77e0ec4))
* Actualizacion versión 6.7.26 ([5033f84](https://github.com/ynfantes/valoriza2/commit/5033f84))
* Adicion campos usd tabla factura y registro usd por caja ([1483cd1](https://github.com/ynfantes/valoriza2/commit/1483cd1))
* Ajuste envio SMS y WS ([ebe498a](https://github.com/ynfantes/valoriza2/commit/ebe498a))
* Ajuste general para actualizar las banderas de sincronizacion desde los procesos relacionados ([6e1f842](https://github.com/ynfantes/valoriza2/commit/6e1f842))
* Borra valor de las variables publicas del formulario FrmReport ([ad15e67](https://github.com/ynfantes/valoriza2/commit/ad15e67))
* Cambio modificacion rutina impresion avisos de cobro para MH Calidad carga  variables cuadro aut. ([ef103f9](https://github.com/ynfantes/valoriza2/commit/ef103f9))
* Cambio proceso envio masivo de correo electronico, publicar edo cuenta constructora ([567b92e](https://github.com/ynfantes/valoriza2/commit/567b92e))
* Cambios en la DB para optimizar el proceso de sincronización web ([038ca41](https://github.com/ynfantes/valoriza2/commit/038ca41))
* Cambios en la facturación para MH Calidad, doble tasa de cambio, redondeo USD moneda principal ([94790ad](https://github.com/ynfantes/valoriza2/commit/94790ad))
* Changed generat consulta qdfpago ([9cf8bd9](https://github.com/ynfantes/valoriza2/commit/9cf8bd9))
* Commit inicial Versión 6.7.13 ([eaa28b7](https://github.com/ynfantes/valoriza2/commit/eaa28b7))
* Compila la versión 6.7.32 ([3660e09](https://github.com/ynfantes/valoriza2/commit/3660e09))
* Corrección carga masiva gastos no comunes y saldo a favor en dolares ([49f1381](https://github.com/ynfantes/valoriza2/commit/49f1381))
* Distribucion alícuota al registrar un grupo ([8fa2c83](https://github.com/ynfantes/valoriza2/commit/8fa2c83))
* En el envio masivo de aviso de cobro por WS se quita la exclusión de los propietarios con saldo a fa ([824d99f](https://github.com/ynfantes/valoriza2/commit/824d99f))
* Excluye en el envío masivo de avisos de cobro propietarios que ya han cancelado el recibo a enviar ([fbd8ca1](https://github.com/ynfantes/valoriza2/commit/fbd8ca1))
* FEAT actualiza banderas 'updated' de las tablas propietarios, facturas, caja e inmuebles para integr ([9becdf8](https://github.com/ynfantes/valoriza2/commit/9becdf8))
* FEAT ADD sincroniza al instante reverso facturacion pagina web ([e365dbb](https://github.com/ynfantes/valoriza2/commit/e365dbb))
* FEAT carga movimientos bancarios diarios y conciliacion automatica pagos web (solo BNC) ([16c29f1](https://github.com/ynfantes/valoriza2/commit/16c29f1))
* FEAT indexación solo si la tasa del dia mayor a la tasa de facturación del mes ([d82c9d9](https://github.com/ynfantes/valoriza2/commit/d82c9d9))
* FEAT optimizacion envío avisos de cobro por email ([3c07582](https://github.com/ynfantes/valoriza2/commit/3c07582))
* FEAT se agrega ficha constructora y reporte estado de cuenta constructora. Se comienza a optimizar l ([e7a17cc](https://github.com/ynfantes/valoriza2/commit/e7a17cc))
* FIX corrige error al reversar tasa de cambio, no afectaba los abonos a futuro ([d295965](https://github.com/ynfantes/valoriza2/commit/d295965))
* FIX error en la aplicación del monto pagado por recibo ([d8863b8](https://github.com/ynfantes/valoriza2/commit/d8863b8))
* FIX impresion cancelacion de gastos que contienen abono a cuenta ([3f5fedf](https://github.com/ynfantes/valoriza2/commit/3f5fedf))
* Fix impresión estado de cuenta conevio de pago ([1d5ff35](https://github.com/ynfantes/valoriza2/commit/1d5ff35))
* Fix impresion reporte de gestiones ([68a6320](https://github.com/ynfantes/valoriza2/commit/68a6320))
* Homolagción deuda al monto de la ultima facturacion ([b6d7315](https://github.com/ynfantes/valoriza2/commit/b6d7315))
* Incorpora Bs y $ a los mensajes de deuda WS y SMS ([027e24a](https://github.com/ynfantes/valoriza2/commit/027e24a))
* Inicio Integracion con el sistema de sincronización via API ([23b2c18](https://github.com/ynfantes/valoriza2/commit/23b2c18))
* Merge version v6.7.31 ([aa995ce](https://github.com/ynfantes/valoriza2/commit/aa995ce))
* Optimización de código ([375526c](https://github.com/ynfantes/valoriza2/commit/375526c))
* Optimizaciones varias ([447aa67](https://github.com/ynfantes/valoriza2/commit/447aa67))
* Publicar estado de cuenta constructora ([bf97d46](https://github.com/ynfantes/valoriza2/commit/bf97d46))
* REFACTORY lectura archivo de configuracion a nivel general ([6c216c1](https://github.com/ynfantes/valoriza2/commit/6c216c1))
* Revisión mensajes de cobranza ([8edf01d](https://github.com/ynfantes/valoriza2/commit/8edf01d))
* Se agrega un cambio al estado de cuenta condifencial junta para Countrymar ([95fd546](https://github.com/ynfantes/valoriza2/commit/95fd546))
* Se corrige registro de tasa diaria cuando las facturas pendientes no fueron indexadas ([c00af65](https://github.com/ynfantes/valoriza2/commit/c00af65))
* Se incluyen los abonos a cuenta en el total facturado EdoCtaConfidencialJunta (Countrymar) ([4be0d74](https://github.com/ynfantes/valoriza2/commit/4be0d74))
* Se incorpora reporte Lista Pagos para MH Calidad ([ebae107](https://github.com/ynfantes/valoriza2/commit/ebae107))
* Se modifica la impresión del reporte de recepción de facturas ([174e6a4](https://github.com/ynfantes/valoriza2/commit/174e6a4))
* Se mueve la cancelacion de gastos al directorio de sincronización al momento de registrar el pago de ([cac2fd5](https://github.com/ynfantes/valoriza2/commit/cac2fd5))
* Update v6.7.30 ([8a009c6](https://github.com/ynfantes/valoriza2/commit/8a009c6))
* Cambio: emisión avisos de cobro carga dinamica cuadros MH Calidad ([babaf01](https://github.com/ynfantes/valoriza2/commit/babaf01))



## <small>6.8.26 (2023-02-05)</small>

* Actualizacion 6.7.18 ([16be3c2](https://github.com/ynfantes/valoriza2/commit/16be3c2))
* Actualizacion entorno de trabajo ([6a026a5](https://github.com/ynfantes/valoriza2/commit/6a026a5))
* Actualizacion v6.8.24 ([77e0ec4](https://github.com/ynfantes/valoriza2/commit/77e0ec4))
* Actualizacion versión 6.7.26 ([5033f84](https://github.com/ynfantes/valoriza2/commit/5033f84))
* Adicion campos usd tabla factura y registro usd por caja ([1483cd1](https://github.com/ynfantes/valoriza2/commit/1483cd1))
* Ajuste envio SMS y WS ([ebe498a](https://github.com/ynfantes/valoriza2/commit/ebe498a))
* Ajuste general para actualizar las banderas de sincronizacion desde los procesos relacionados ([6e1f842](https://github.com/ynfantes/valoriza2/commit/6e1f842))
* Borra valor de las variables publicas del formulario FrmReport ([ad15e67](https://github.com/ynfantes/valoriza2/commit/ad15e67))
* Cambio modificacion rutina impresion avisos de cobro para MH Calidad carga  variables cuadro aut. ([ef103f9](https://github.com/ynfantes/valoriza2/commit/ef103f9))
* Cambio proceso envio masivo de correo electronico, publicar edo cuenta constructora ([567b92e](https://github.com/ynfantes/valoriza2/commit/567b92e))
* Cambios en la DB para optimizar el proceso de sincronización web ([038ca41](https://github.com/ynfantes/valoriza2/commit/038ca41))
* Cambios en la facturación para MH Calidad, doble tasa de cambio, redondeo USD moneda principal ([94790ad](https://github.com/ynfantes/valoriza2/commit/94790ad))
* Changed generat consulta qdfpago ([9cf8bd9](https://github.com/ynfantes/valoriza2/commit/9cf8bd9))
* Commit inicial Versión 6.7.13 ([eaa28b7](https://github.com/ynfantes/valoriza2/commit/eaa28b7))
* Compila la versión 6.7.32 ([3660e09](https://github.com/ynfantes/valoriza2/commit/3660e09))
* Corrección carga masiva gastos no comunes y saldo a favor en dolares ([49f1381](https://github.com/ynfantes/valoriza2/commit/49f1381))
* Distribucion alícuota al registrar un grupo ([8fa2c83](https://github.com/ynfantes/valoriza2/commit/8fa2c83))
* En el envio masivo de aviso de cobro por WS se quita la exclusión de los propietarios con saldo a fa ([824d99f](https://github.com/ynfantes/valoriza2/commit/824d99f))
* Excluye en el envío masivo de avisos de cobro propietarios que ya han cancelado el recibo a enviar ([fbd8ca1](https://github.com/ynfantes/valoriza2/commit/fbd8ca1))
* FEAT actualiza banderas 'updated' de las tablas propietarios, facturas, caja e inmuebles para integr ([9becdf8](https://github.com/ynfantes/valoriza2/commit/9becdf8))
* FEAT ADD sincroniza al instante reverso facturacion pagina web ([e365dbb](https://github.com/ynfantes/valoriza2/commit/e365dbb))
* FEAT carga movimientos bancarios diarios y conciliacion automatica pagos web (solo BNC) ([16c29f1](https://github.com/ynfantes/valoriza2/commit/16c29f1))
* FEAT indexación solo si la tasa del dia mayor a la tasa de facturación del mes ([d82c9d9](https://github.com/ynfantes/valoriza2/commit/d82c9d9))
* FEAT optimizacion envío avisos de cobro por email ([3c07582](https://github.com/ynfantes/valoriza2/commit/3c07582))
* FEAT se agrega ficha constructora y reporte estado de cuenta constructora. Se comienza a optimizar l ([e7a17cc](https://github.com/ynfantes/valoriza2/commit/e7a17cc))
* FIX corrige error al reversar tasa de cambio, no afectaba los abonos a futuro ([d295965](https://github.com/ynfantes/valoriza2/commit/d295965))
* FIX error en la aplicación del monto pagado por recibo ([d8863b8](https://github.com/ynfantes/valoriza2/commit/d8863b8))
* FIX impresion cancelacion de gastos que contienen abono a cuenta ([3f5fedf](https://github.com/ynfantes/valoriza2/commit/3f5fedf))
* Fix impresión estado de cuenta conevio de pago ([1d5ff35](https://github.com/ynfantes/valoriza2/commit/1d5ff35))
* Fix impresion reporte de gestiones ([68a6320](https://github.com/ynfantes/valoriza2/commit/68a6320))
* Homolagción deuda al monto de la ultima facturacion ([b6d7315](https://github.com/ynfantes/valoriza2/commit/b6d7315))
* Incorpora Bs y $ a los mensajes de deuda WS y SMS ([027e24a](https://github.com/ynfantes/valoriza2/commit/027e24a))
* Inicio Integracion con el sistema de sincronización via API ([23b2c18](https://github.com/ynfantes/valoriza2/commit/23b2c18))
* Merge version v6.7.31 ([aa995ce](https://github.com/ynfantes/valoriza2/commit/aa995ce))
* Optimización de código ([375526c](https://github.com/ynfantes/valoriza2/commit/375526c))
* Optimizaciones varias ([447aa67](https://github.com/ynfantes/valoriza2/commit/447aa67))
* Publicar estado de cuenta constructora ([bf97d46](https://github.com/ynfantes/valoriza2/commit/bf97d46))
* REFACTORY lectura archivo de configuracion a nivel general ([6c216c1](https://github.com/ynfantes/valoriza2/commit/6c216c1))
* Revisión mensajes de cobranza ([8edf01d](https://github.com/ynfantes/valoriza2/commit/8edf01d))
* Se agrega un cambio al estado de cuenta condifencial junta para Countrymar ([95fd546](https://github.com/ynfantes/valoriza2/commit/95fd546))
* Se corrige registro de tasa diaria cuando las facturas pendientes no fueron indexadas ([c00af65](https://github.com/ynfantes/valoriza2/commit/c00af65))
* Se incluyen los abonos a cuenta en el total facturado EdoCtaConfidencialJunta (Countrymar) ([4be0d74](https://github.com/ynfantes/valoriza2/commit/4be0d74))
* Se incorpora reporte Lista Pagos para MH Calidad ([ebae107](https://github.com/ynfantes/valoriza2/commit/ebae107))
* Se modifica la impresión del reporte de recepción de facturas ([174e6a4](https://github.com/ynfantes/valoriza2/commit/174e6a4))
* Se mueve la cancelacion de gastos al directorio de sincronización al momento de registrar el pago de ([cac2fd5](https://github.com/ynfantes/valoriza2/commit/cac2fd5))
* Update v6.7.30 ([8a009c6](https://github.com/ynfantes/valoriza2/commit/8a009c6))
* Cambio: emisión avisos de cobro carga dinamica cuadros MH Calidad ([babaf01](https://github.com/ynfantes/valoriza2/commit/babaf01))



