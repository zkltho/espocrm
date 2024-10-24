<?php
return [
  'ActionHistoryRecord' => [
    'fields' => [
      'user' => 'Usuario',
      'action' => 'Acción',
      'createdAt' => 'Fecha',
      'userType' => 'User Type',
      'target' => 'Interés',
      'targetType' => 'Tipo de Interés',
      'authToken' => 'Clave de Autorización',
      'ipAddress' => 'Dirección IP',
      'authLogRecord' => 'Registro en Hist. de Aut.'
    ],
    'links' => [
      'authToken' => 'Clave de Autorización',
      'authLogRecord' => 'Registro en Hist. de Aut.',
      'user' => 'Usuario',
      'target' => 'Interés'
    ],
    'presetFilters' => [
      'onlyMy' => 'Sólo para Mi'
    ],
    'options' => [
      'action' => [
        'read' => 'Leer',
        'update' => 'Actualizar',
        'delete' => 'Borrar',
        'create' => 'Crear'
      ]
    ]
  ],
  'AddressCountry' => [
    'labels' => [
      'Create AddressCountry' => 'Create Address Country',
      'Populate' => 'Populate'
    ],
    'fields' => [
      'code' => 'Code',
      'isPreferred' => 'Is Preferred'
    ],
    'tooltips' => [
      'code' => 'ISO 3166-1 alpha-2 code.',
      'isPreferred' => 'Preferred counties appear first in the picklist.'
    ],
    'messages' => [
      'confirmPopulateDefaults' => 'All existing countries will be deleted, the default country list will be created. It won\'t be possible to revert the operation.

Are you sure?'
    ],
    'strings' => [
      'populateDefaults' => 'Populate with default country list'
    ]
  ],
  'Admin' => [
    'labels' => [
      'Enabled' => 'Activado',
      'Disabled' => 'Desactivado',
      'System' => 'Sistema',
      'Users' => 'Usuarios',
      'Email' => 'Correo',
      'Messaging' => 'Messaging',
      'Data' => 'Datos',
      'Misc' => 'Misc',
      'Setup' => 'Setup',
      'Customization' => 'Personalizar',
      'Available Fields' => 'Campos Disponibles',
      'Layout' => 'Diseño',
      'Entity Manager' => 'Entidades',
      'Add Panel' => 'Agregar Panel',
      'Add Field' => 'Agregar Campo',
      'Settings' => 'Ajustes',
      'Scheduled Jobs' => 'Tareas Agendadas',
      'Upgrade' => 'Actualizar',
      'Clear Cache' => 'Borrar Cache',
      'Rebuild' => 'Reconstruir',
      'Teams' => 'Equipos',
      'Roles' => 'Roles',
      'Portal' => 'Portal',
      'Portals' => 'Portales',
      'Portal Roles' => 'Roles',
      'Portal Users' => 'Usuarios',
      'API Users' => 'Usuarios de la API',
      'Outbound Emails' => 'Correos Salientes',
      'Group Email Accounts' => 'Grupo de Cuentas de Correo',
      'Personal Email Accounts' => 'Cuentas Personales',
      'Inbound Emails' => 'Correos Entrantes',
      'Email Templates' => 'Plantillas de Correo',
      'Import' => 'Importación',
      'Layout Manager' => 'Formatos',
      'User Interface' => 'Interfaz de Usuario',
      'Auth Tokens' => 'Clave de Aut.',
      'Auth Log' => 'Historial de Autorizaciones',
      'App Log' => 'App Log',
      'Authentication' => 'Autorización',
      'Currency' => 'Moneda',
      'Integrations' => 'Integracion',
      'Extensions' => 'Extensiones',
      'Webhooks' => 'Webhooks',
      'Dashboard Templates' => 'Dashboard Templates',
      'Upload' => 'Subir',
      'Installing...' => 'Instalando...',
      'Upgrading...' => 'Actualizando',
      'Upgraded successfully' => 'Actualización exitosa',
      'Installed successfully' => 'Instalado exitosamente',
      'Ready for upgrade' => 'Listo para actualizar',
      'Run Upgrade' => 'Ejecutar actualización',
      'Install' => 'Instalar',
      'Ready for installation' => 'Listo para instalación',
      'Uninstalling...' => 'Desinstalando...',
      'Uninstalled' => 'Desinstalado',
      'Create Entity' => 'Crear Entidad',
      'Edit Entity' => 'Editar Entidad',
      'Create Link' => 'Crear Enlace',
      'Edit Link' => 'Editar Enlace',
      'Notifications' => 'Notificaciones',
      'Jobs' => 'Trabajos',
      'Job Settings' => 'Job Settings',
      'Reset to Default' => 'Restablecer valores default',
      'Email Filters' => 'Filtros de Correo',
      'Action History' => 'Historial',
      'Label Manager' => 'Etiquetas',
      'Template Manager' => 'Administrador de Plantillas',
      'Lead Capture' => 'Capturar Referencia',
      'Attachments' => 'Adjuntos ',
      'System Requirements' => 'Requerimientos del Sistema',
      'PDF Templates' => 'PDF Templates',
      'PHP Settings' => 'Configuración PHP',
      'Database Settings' => 'Configuración de la Base de Datos',
      'Permissions' => 'Permisos',
      'Email Addresses' => 'Email Addresses',
      'Phone Numbers' => 'Phone Numbers',
      'Layout Sets' => 'Layout Sets',
      'Working Time Calendars' => 'Working Time Calendars',
      'Group Email Folders' => 'Group Email Folders',
      'Authentication Providers' => 'Authentication Providers',
      'Address Countries' => 'Address Countries',
      'Success' => 'Correcto',
      'Fail' => 'Falló',
      'Configuration Instructions' => 'Configuration Instructions',
      'Formula Sandbox' => 'Formula Sandbox',
      'is recommended' => 'es recomendado',
      'extension is missing' => 'falta la extensión ',
      'CustomLoginTitle' => 'Custom Login'
    ],
    'layouts' => [
      'list' => 'Lista',
      'detail' => 'Detalle',
      'listSmall' => 'Lista (Pequeña)',
      'detailSmall' => 'Detalle (Pequeño)',
      'detailPortal' => 'Detalle (Portal)',
      'detailSmallPortal' => 'Detalle (Pequeño, Portal)',
      'listSmallPortal' => 'Lista (Pequeño, Portal)',
      'listPortal' => 'Lista (Portal)',
      'relationshipsPortal' => 'Paneles de Relaciones (Portal)',
      'filters' => 'Filtros de Búsqueda',
      'massUpdate' => 'Actualización Masiva',
      'relationships' => 'Paneles de Relaciones',
      'defaultSidePanel' => 'Side Panel Fields',
      'bottomPanelsDetail' => 'Bottom Panels',
      'bottomPanelsEdit' => 'Bottom Panels (Edit)',
      'bottomPanelsDetailSmall' => 'Bottom Panels (Detail Small)',
      'bottomPanelsEditSmall' => 'Bottom Panels (Edit Small)',
      'sidePanelsDetail' => 'Paneles auxiliares (detalle)',
      'sidePanelsEdit' => 'Paneles auxiliares (editar)',
      'sidePanelsDetailSmall' => 'Paneles auxiliares (detalle pequeño)',
      'sidePanelsEditSmall' => 'Paneles auxiliares (editar pequeño)',
      'kanban' => 'Tarjetas',
      'detailConvert' => 'Convertir Referencia',
      'listForAccount' => 'Listado (por Cuentas)',
      'listForContact' => 'Lista (para Contactos)'
    ],
    'fieldTypes' => [
      'address' => 'Dirección',
      'array' => 'Arreglo',
      'foreign' => 'Externo',
      'duration' => 'Periodo',
      'password' => 'Contraseña',
      'personName' => 'Nombre',
      'autoincrement' => 'Auto-incremento',
      'bool' => 'Sí/No',
      'currency' => 'Moneda',
      'currencyConverted' => 'Moneda (Convertida)',
      'date' => 'Fecha',
      'datetime' => 'Fecha-Hr',
      'datetimeOptional' => 'Fecha/Fecha-Hr',
      'email' => 'Correo',
      'enum' => 'Lista',
      'enumInt' => 'Lista Enteros',
      'enumFloat' => 'Lista Numérica',
      'float' => 'Numérico',
      'int' => 'Entero',
      'link' => 'Liga',
      'linkMultiple' => 'Ligas',
      'linkParent' => 'Liga Orígen',
      'linkOne' => 'Link One',
      'phone' => 'Teléfono',
      'text' => 'Texto',
      'url' => 'Dirección Web',
      'urlMultiple' => 'Url Multiple',
      'varchar' => 'Varchar',
      'file' => 'Archivo',
      'image' => 'Imagen',
      'multiEnum' => 'Lista Múltiple',
      'attachmentMultiple' => 'Adjuntos',
      'rangeInt' => 'Rango Entero',
      'rangeFloat' => 'Rango Numérico',
      'rangeCurrency' => 'Rango de Moneda',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Mapa',
      'number' => 'Número (auto-incremeto)',
      'colorpicker' => 'Selector de Colores',
      'checklist' => 'Checklist',
      'barcode' => 'Barcode',
      'jsonArray' => 'Arreglo Json',
      'jsonObject' => 'Objeto Json'
    ],
    'fields' => [
      'type' => 'Tipo',
      'name' => 'Nombre',
      'label' => 'Etiqueta',
      'tooltipText' => 'Texto de Ayuda',
      'required' => 'Requerido',
      'default' => 'Default',
      'maxLength' => 'Longitud máxima',
      'options' => 'Opciones',
      'optionsReference' => 'Options Reference',
      'after' => 'Posterior al Campo',
      'before' => 'Anterior al Campo',
      'link' => 'Enlace',
      'field' => 'Campo',
      'min' => 'Mínimo',
      'max' => 'Máximo',
      'translation' => 'Traducción',
      'previewSize' => 'Tamaño de Vista Previa',
      'listPreviewSize' => 'Preview Size in List View',
      'noEmptyString' => 'No se permite el campo vacío',
      'defaultType' => 'Tipo Default',
      'seeMoreDisabled' => 'Desactivar cortar texto',
      'cutHeight' => 'Cut Height (px)',
      'entityList' => 'Lista de Entidades',
      'isSorted' => 'Esta ordenado (alfabeticamente)',
      'audited' => 'Auditada',
      'trim' => 'Recortado',
      'height' => 'Altura (px)',
      'minHeight' => 'Altura Min (px)',
      'provider' => 'Proveedor',
      'typeList' => 'Lista de Tipos',
      'rows' => 'Num. de renglones del área de texto',
      'lengthOfCut' => 'Longitud del recorte',
      'sourceList' => 'Lista de Fuentes',
      'prefix' => 'Prefijo',
      'nextNumber' => 'Siguiente Número',
      'padLength' => 'Longitud del Panel',
      'disableFormatting' => 'Desactivar Formateo',
      'dynamicLogicVisible' => 'Condiciones que hacen visible al campo',
      'dynamicLogicReadOnly' => 'Condiciones que hacen el campo de solo-lectura',
      'dynamicLogicRequired' => 'Condiciones que hacen el campo obligatorio',
      'dynamicLogicOptions' => 'Opciones condicionales',
      'dynamicLogicInvalid' => 'Conditions making field invalid',
      'probabilityMap' => 'Probabilidades de la Etapa (%)',
      'notActualOptions' => 'Not Actual Options',
      'activeOptions' => 'Active Options',
      'readOnly' => 'Solo-lectura',
      'readOnlyAfterCreate' => 'Read-only After Create',
      'maxFileSize' => 'Tamaño máximo (Mb)',
      'isPersonalData' => 'Son Datos Personales',
      'useIframe' => 'Usar iFrame',
      'useNumericFormat' => 'Use Formato numérico ',
      'strip' => 'Limpiar',
      'minuteStep' => 'Minutes Step',
      'inlineEditDisabled' => 'Deshabilitar edición en linea',
      'allowCustomOptions' => 'Allow Custom Options',
      'displayAsLabel' => 'Mostrar como etiqueta',
      'displayAsList' => 'Display as List',
      'labelType' => 'Label Type',
      'maxCount' => 'Max Item Count',
      'accept' => 'Accept',
      'viewMap' => 'View Map Button',
      'codeType' => 'Code Type',
      'lastChar' => 'Last Character',
      'onlyDefaultCurrency' => 'Only default currency',
      'decimal' => 'Decimal',
      'displayRawText' => 'Display raw text (no markdown)',
      'conversionDisabled' => 'Disable Conversion',
      'decimalPlaces' => 'Decimal Places',
      'pattern' => 'Pattern',
      'globalRestrictions' => 'Global Restrictions',
      'copyToClipboard' => 'Copy to clipboard button',
      'createButton' => 'Create Button',
      'autocompleteOnEmpty' => 'Autocomplete on empty input',
      'relateOnImport' => 'Relate on Import',
      'aclScope' => 'ACL Scope',
      'onlyAdmin' => 'Only for Admin'
    ],
    'strings' => [
      'rebuildRequired' => 'Rebuild is required'
    ],
    'messages' => [
      'cacheIsDisabled' => 'Cache is disabled, the application will run slow. Enable cache in the [settings](#Admin/settings).',
      'formulaFunctions' => 'More functions can be found in [documentation]({documentationUrl}).',
      'rebuildRequired' => 'You need to run rebuild from CLI.',
      'upgradeVersion' => 'EspoCRM se actualizará a la versión <strong>{version}</strong>.  Por favor espere unos minutos.',
      'upgradeDone' => 'EspoCRM fué actualizado a la versión <strong>{version}</strong>.',
      'upgradeBackup' => 'Le recomendamos hacer un respaldo de sus datos y sistema EspoCRM antes de actualizarlo.',
      'thousandSeparatorEqualsDecimalMark' => 'El caracter separador de miles no puede ser el mismo que el separador decimal.',
      'userHasNoEmailAddress' => 'Este usuario no tiene correo de contacto.',
      'selectEntityType' => 'Seleccione el tipo de entidad en el menú de la izquierda.',
      'selectUpgradePackage' => 'Seleccione el Paquete de Actualización',
      'downloadUpgradePackage' => 'Descargue los paquetes de actualización desde <a href="{url}">aquí</a>.',
      'selectLayout' => 'Seleccione el diseño en el menú de la izquierda, para editarlo.',
      'selectExtensionPackage' => 'Seleccionar extensión del paquete',
      'extensionInstalled' => 'La Extensión {name} {version} ha sido instalada',
      'installExtension' => 'La Extensión {name} {version} está lista para instalar.',
      'cronIsDisabled' => 'Cron is disabled, the application is not fully functional. Enable cron in the [settings](#Admin/settings).',
      'cronIsNotConfigured' => 'No se están ejecutando las tareas programadas. Por lo cual los correos enviados, notificaciones y alarmas no están funcionando.  Por favor siga las {instructions}
(https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) para activar los cron jobs. ',
      'newVersionIsAvailable' => 'Hay una nueva versión disponible de EspoCRM. ({latestVersion}).',
      'newExtensionVersionIsAvailable' => 'Nueva versión {latestVersion} disponible para {extensionName}. ',
      'uninstallConfirmation' => '¿Realmente quiere desinstalar esta extensión?',
      'upgradeInfo' => 'Check the [documentation]({url}) about how to upgrade your EspoCRM instance.',
      'upgradeRecommendation' => 'This way of upgrading is not recommended. It\'s better to upgrade from CLI.'
    ],
    'descriptions' => [
      'settings' => 'Configuración del sistema de aplicación.',
      'scheduledJob' => 'Trabajos que se ejecutan automáticamente (cron Jobs).',
      'jobs' => 'Jobs execute tasks in the background.',
      'upgrade' => 'Actualizar EspoCRM.',
      'clearCache' => 'Borrar Cache del Servidor.',
      'rebuild' => 'Borrar y regenerar el Cache del Servidor.',
      'users' => 'Administración de Usuarios.',
      'teams' => 'Administración de Equipos',
      'roles' => 'Administración de Roles',
      'portals' => 'Manejo de Portales',
      'portalRoles' => 'Roles en el Portal',
      'portalUsers' => 'Usuarios del portal.',
      'outboundEmails' => 'Opciones SMTP para correo saliente.',
      'groupEmailAccounts' => 'Grupo de Cuentas Correo IMAP, importación de correos y correos por caso.',
      'personalEmailAccounts' => 'Cuentas de correo de Usuarios',
      'emailTemplates' => 'Plantillas para mensajes de Correo de salida.',
      'import' => 'Importar desde archivo CSV.',
      'layoutManager' => 'Personalizar diseños (listas, detalles, editar, buscar, actualización masiva).',
      'entityManager' => 'Crear y editar entidades personalizadas.  Administrar campos y relaciones.',
      'userInterface' => 'Configurar la Interfaz del Usuario',
      'authTokens' => 'Sesiones certificas activas. Direcciones IP y última fecha de acceso',
      'authentication' => 'Opciones de autorización',
      'currency' => 'Opciones y tarifas de Moneda',
      'extensions' => 'Instalar o desinstalar extensiones',
      'integrations' => 'Integración con servicios de terceros.',
      'notifications' => 'Ajustes de notificaciones del correo y la aplicación.',
      'inboundEmails' => 'Configuración de cuentas de Correo de entrada.',
      'emailFilters' => 'Los mensajes de correo que cumplan con el filtro indicado, no se importarán.',
      'groupEmailFolders' => 'Email folders shared for teams.',
      'actionHistory' => 'Historial de acciones del usuario.',
      'labelManager' => 'Personalizar etiquetas de aplicación',
      'templateManager' => 'Personalizar plantillas de mensajes.',
      'authLog' => 'Historial de Ingresos',
      'appLog' => 'Application log.',
      'leadCapture' => 'Puntos de entrada de la API para Web-a-Ref',
      'attachments' => 'Todos los archivos adjuntos fueron guardados en el sistema. ',
      'systemRequirements' => 'Requerimientos del Sistema para EspoCRM.',
      'apiUsers' => 'Separar usuarios para integración de grupos.',
      'webhooks' => 'Manage webhooks.',
      'authenticationProviders' => 'Additional authentication providers for portals.',
      'emailAddresses' => 'All email addresses stored in the system.',
      'phoneNumbers' => 'All phone numbers stored in the system.',
      'dashboardTemplates' => 'Deploy dashboards to users.',
      'layoutSets' => 'Collections of layouts that can be assigned to teams & portals.',
      'workingTimeCalendars' => 'Working schedule.',
      'jobsSettings' => 'Job processing settings. Jobs execute tasks in the background.',
      'sms' => 'SMS settings.',
      'pdfTemplates' => 'Templates for printing to PDF.',
      'formulaSandbox' => 'Write and test formula scripts.',
      'addressCountries' => 'Countries available for address fields.',
      'CustomLoginDescription' => 'Custom Login Settings.'
    ],
    'keywords' => [
      'settings' => 'system',
      'userInterface' => 'ui,theme,tabs,logo,dashboard',
      'authentication' => 'password,security,ldap',
      'scheduledJob' => 'cron,jobs',
      'integrations' => 'google,maps,google maps',
      'authLog' => 'log,history',
      'authTokens' => 'history,access,log',
      'entityManager' => 'fields,relations,relationships',
      'templateManager' => 'notifications',
      'jobs' => 'cron',
      'labelManager' => 'language,translation'
    ],
    'options' => [
      'previewSize' => [
        '' => 'Default',
        'x-small' => 'Muy Pequeño',
        'small' => 'Pequeño',
        'medium' => 'Mediano',
        'large' => 'Grande'
      ],
      'labelType' => [
        'state' => 'State',
        'regular' => 'Regular'
      ]
    ],
    'logicalOperators' => [
      'and' => 'Y',
      'or' => 'O',
      'not' => 'NO'
    ],
    'systemRequirements' => [
      'requiredPhpVersion' => 'Versión PHP',
      'requiredMysqlVersion' => 'Versión MySQL',
      'requiredMariadbVersion' => 'MariaDB version',
      'requiredPostgresqlVersion' => 'PostgreSQL version',
      'host' => 'Nombre del Hospedaje',
      'dbname' => 'Nombre de la Base de Datos',
      'user' => 'Nombre del Usuario',
      'writable' => 'Permite grabar',
      'readable' => 'Permite leer'
    ],
    'templates' => [
      'twoFactorCode' => '2FA Code',
      'accessInfo' => 'Información de Acceso',
      'accessInfoPortal' => 'Información de Acceso a Portales',
      'assignment' => 'Asignación',
      'mention' => 'Mención',
      'noteEmailReceived' => 'Nota sobre el Correo Recibido',
      'notePost' => 'Nota sobre la Publicación',
      'notePostNoParent' => 'Nota sobre la Publicación (No el Padre)',
      'noteStatus' => 'Nota sobre el Estado de la Actualización',
      'passwordChangeLink' => 'Liga para Cambiar Contraseña',
      'invitation' => 'Invitación',
      'cancellation' => 'Cancellation',
      'reminder' => 'Recordatorio'
    ]
  ],
  'ApiUser' => [
    'labels' => [
      'Create ApiUser' => 'Crear Usuario de la API'
    ]
  ],
  'AppLogRecord' => [
    'fields' => [
      'message' => 'Message',
      'code' => 'Code',
      'level' => 'Level',
      'exceptionClass' => 'Exception Class',
      'file' => 'File',
      'line' => 'Line',
      'requestMethod' => 'Request Method',
      'requestResourcePath' => 'Request Resource Path'
    ],
    'presetFilters' => [
      'errors' => 'Errors'
    ]
  ],
  'Attachment' => [
    'fields' => [
      'role' => 'Rol',
      'related' => 'Relacionado ',
      'file' => 'Archivo ',
      'type' => 'Tipo ',
      'field' => 'Campo ',
      'sourceId' => 'ID Origen',
      'storage' => 'Almacenamiento ',
      'size' => 'Tamaño ',
      'isBeingUploaded' => 'Is Being Uploaded'
    ],
    'options' => [
      'role' => [
        'Attachment' => 'Adjunto ',
        'Inline Attachment' => 'Adjunto inmediato ',
        'Import File' => 'Importar Archivo',
        'Export File' => 'Exportar Archivo',
        'Mail Merge' => 'Generar Correos',
        'Mass Pdf' => 'PDF Masivo'
      ]
    ],
    'insertFromSourceLabels' => [
      'Document' => 'Insertar documento'
    ],
    'presetFilters' => [
      'orphan' => 'Huérfano '
    ]
  ],
  'AuthLogRecord' => [
    'fields' => [
      'username' => 'Nombre del Usuario',
      'ipAddress' => 'Dirección IP',
      'requestTime' => 'Hr. de la Solicitud',
      'createdAt' => 'Fecha de la Solicitud',
      'isDenied' => 'Fue denegado',
      'denialReason' => 'Razón de denegación',
      'portal' => 'Portal',
      'user' => 'Usuario',
      'authToken' => 'Clave de Aut. creada',
      'requestUrl' => 'URL de la Solicitud',
      'requestMethod' => 'Método de la Solicitud',
      'authTokenIsActive' => 'La clave de aut. está activa',
      'authenticationMethod' => 'Método de Autenticación'
    ],
    'links' => [
      'authToken' => 'Clave de aut. creada',
      'user' => 'Usuario',
      'portal' => 'Portal',
      'actionHistoryRecords' => 'Historial de Acciones'
    ],
    'presetFilters' => [
      'denied' => 'Denegado',
      'accepted' => 'Aceptado'
    ],
    'options' => [
      'denialReason' => [
        'CREDENTIALS' => 'Credenciales inválidas',
        'WRONG_CODE' => 'Wrong code',
        'INACTIVE_USER' => 'Usuario inactivo',
        'IS_PORTAL_USER' => 'Usuario del Portal',
        'IS_NOT_PORTAL_USER' => 'No es un usuario del portal',
        'USER_IS_NOT_IN_PORTAL' => 'El usuario no se relaciona con el portal',
        'IS_SYSTEM_USER' => 'Is system user',
        'FORBIDDEN' => 'Forbidden'
      ]
    ]
  ],
  'AuthToken' => [
    'fields' => [
      'user' => 'Usuario',
      'ipAddress' => 'Dirección IP',
      'lastAccess' => 'Fecha Último Acceso',
      'createdAt' => 'Fecha de Creación',
      'isActive' => 'Está Activo',
      'portal' => 'Portal'
    ],
    'links' => [
      'actionHistoryRecords' => 'Historial'
    ],
    'presetFilters' => [
      'active' => 'Activo',
      'inactive' => 'Inactivo'
    ],
    'labels' => [
      'Set Inactive' => 'Activar'
    ],
    'massActions' => [
      'setInactive' => 'Desactivar'
    ]
  ],
  'AuthenticationProvider' => [
    'fields' => [
      'method' => 'Method'
    ],
    'labels' => [
      'Create AuthenticationProvider' => 'Create Provider'
    ]
  ],
  'Currency' => [
    'names' => [
      'AED' => 'United Arab Emirates Dirham',
      'AFN' => 'Afghan Afghani',
      'ALL' => 'Albanian Lek',
      'AMD' => 'Armenian Dram',
      'ANG' => 'Netherlands Antillean Guilder',
      'AOA' => 'Angolan Kwanza',
      'ARS' => 'Argentine Peso',
      'AUD' => 'Australian Dollar',
      'AWG' => 'Aruban Florin',
      'AZN' => 'Azerbaijani Manat',
      'BAM' => 'Bosnia-Herzegovina Convertible Mark',
      'BBD' => 'Barbadian Dollar',
      'BDT' => 'Bangladeshi Taka',
      'BGN' => 'Bulgarian Lev',
      'BHD' => 'Bahraini Dinar',
      'BIF' => 'Burundian Franc',
      'BMD' => 'Bermudan Dollar',
      'BND' => 'Brunei Dollar',
      'BOB' => 'Bolivian Boliviano',
      'BOV' => 'Bolivian Mvdol',
      'BRL' => 'Brazilian Real',
      'BSD' => 'Bahamian Dollar',
      'BTN' => 'Bhutanese Ngultrum',
      'BWP' => 'Botswanan Pula',
      'BYN' => 'Belarusian Ruble',
      'BZD' => 'Belize Dollar',
      'CAD' => 'Canadian Dollar',
      'CDF' => 'Congolese Franc',
      'CHE' => 'WIR Euro',
      'CHF' => 'Swiss Franc',
      'CHW' => 'WIR Franc',
      'CLF' => 'Chilean Unit of Account (UF)',
      'CLP' => 'Chilean Peso',
      'CNH' => 'Chinese Yuan (offshore)',
      'CNY' => 'Chinese Yuan',
      'COP' => 'Colombian Peso',
      'COU' => 'Colombian Real Value Unit',
      'CRC' => 'Costa Rican Colón',
      'CUC' => 'Cuban Convertible Peso',
      'CUP' => 'Cuban Peso',
      'CVE' => 'Cape Verdean Escudo',
      'CZK' => 'Czech Koruna',
      'DJF' => 'Djiboutian Franc',
      'DKK' => 'Danish Krone',
      'DOP' => 'Dominican Peso',
      'DZD' => 'Algerian Dinar',
      'EGP' => 'Egyptian Pound',
      'ERN' => 'Eritrean Nakfa',
      'ETB' => 'Ethiopian Birr',
      'EUR' => 'Euro',
      'FJD' => 'Fijian Dollar',
      'FKP' => 'Falkland Islands Pound',
      'GBP' => 'British Pound',
      'GEL' => 'Georgian Lari',
      'GHS' => 'Ghanaian Cedi',
      'GIP' => 'Gibraltar Pound',
      'GMD' => 'Gambian Dalasi',
      'GNF' => 'Guinean Franc',
      'GTQ' => 'Guatemalan Quetzal',
      'GYD' => 'Guyanaese Dollar',
      'HKD' => 'Hong Kong Dollar',
      'HNL' => 'Honduran Lempira',
      'HRK' => 'Croatian Kuna',
      'HTG' => 'Haitian Gourde',
      'HUF' => 'Hungarian Forint',
      'IDR' => 'Indonesian Rupiah',
      'ILS' => 'Israeli New Shekel',
      'INR' => 'Indian Rupee',
      'IQD' => 'Iraqi Dinar',
      'IRR' => 'Iranian Rial',
      'ISK' => 'Icelandic Króna',
      'JMD' => 'Jamaican Dollar',
      'JOD' => 'Jordanian Dinar',
      'JPY' => 'Japanese Yen',
      'KES' => 'Kenyan Shilling',
      'KGS' => 'Kyrgystani Som',
      'KHR' => 'Cambodian Riel',
      'KMF' => 'Comorian Franc',
      'KPW' => 'North Korean Won',
      'KRW' => 'South Korean Won',
      'KWD' => 'Kuwaiti Dinar',
      'KYD' => 'Cayman Islands Dollar',
      'KZT' => 'Kazakhstani Tenge',
      'LAK' => 'Laotian Kip',
      'LBP' => 'Lebanese Pound',
      'LKR' => 'Sri Lankan Rupee',
      'LRD' => 'Liberian Dollar',
      'LSL' => 'Lesotho Loti',
      'LYD' => 'Libyan Dinar',
      'MAD' => 'Moroccan Dirham',
      'MDL' => 'Moldovan Leu',
      'MGA' => 'Malagasy Ariary',
      'MKD' => 'Macedonian Denar',
      'MMK' => 'Myanmar Kyat',
      'MNT' => 'Mongolian Tugrik',
      'MOP' => 'Macanese Pataca',
      'MRO' => 'Mauritanian Ouguiya',
      'MUR' => 'Mauritian Rupee',
      'MWK' => 'Malawian Kwacha',
      'MXN' => 'Mexican Peso',
      'MXV' => 'Mexican Investment Unit',
      'MYR' => 'Malaysian Ringgit',
      'MZN' => 'Mozambican Metical',
      'NAD' => 'Namibian Dollar',
      'NGN' => 'Nigerian Naira',
      'NIO' => 'Nicaraguan Córdoba',
      'NOK' => 'Norwegian Krone',
      'NPR' => 'Nepalese Rupee',
      'NZD' => 'New Zealand Dollar',
      'OMR' => 'Omani Rial',
      'PAB' => 'Panamanian Balboa',
      'PEN' => 'Peruvian Sol',
      'PGK' => 'Papua New Guinean Kina',
      'PHP' => 'Philippine Piso',
      'PKR' => 'Pakistani Rupee',
      'PLN' => 'Polish Zloty',
      'PYG' => 'Paraguayan Guarani',
      'QAR' => 'Qatari Rial',
      'RON' => 'Romanian Leu',
      'RSD' => 'Serbian Dinar',
      'RUB' => 'Russian Ruble',
      'RWF' => 'Rwandan Franc',
      'SAR' => 'Saudi Riyal',
      'SBD' => 'Solomon Islands Dollar',
      'SCR' => 'Seychellois Rupee',
      'SDG' => 'Sudanese Pound',
      'SEK' => 'Swedish Krona',
      'SGD' => 'Singapore Dollar',
      'SHP' => 'St. Helena Pound',
      'SLL' => 'Sierra Leonean Leone',
      'SOS' => 'Somali Shilling',
      'SRD' => 'Surinamese Dollar',
      'SSP' => 'South Sudanese Pound',
      'STN' => 'São Tomé & Príncipe Dobra (2018)',
      'SYP' => 'Syrian Pound',
      'SZL' => 'Swazi Lilangeni',
      'SVC' => 'Salvadoran Colón',
      'THB' => 'Thai Baht',
      'TJS' => 'Tajikistani Somoni',
      'TND' => 'Tunisian Dinar',
      'TOP' => 'Tongan Paʻanga',
      'TRY' => 'Turkish Lira',
      'TTD' => 'Trinidad & Tobago Dollar',
      'TWD' => 'New Taiwan Dollar',
      'TZS' => 'Tanzanian Shilling',
      'UAH' => 'Ukrainian Hryvnia',
      'UGX' => 'Ugandan Shilling',
      'USD' => 'US Dollar',
      'USN' => 'US Dollar (Next day)',
      'UYI' => 'Uruguayan Peso (Indexed Units)',
      'UYU' => 'Uruguayan Peso',
      'UZS' => 'Uzbekistani Som',
      'VEF' => 'Venezuelan Bolívar',
      'VND' => 'Vietnamese Dong',
      'VUV' => 'Vanuatu Vatu',
      'WST' => 'Samoan Tala',
      'XAF' => 'Central African CFA Franc',
      'XCD' => 'East Caribbean Dollar',
      'XOF' => 'West African CFA Franc',
      'XPF' => 'CFP Franc',
      'YER' => 'Yemeni Rial',
      'ZAR' => 'South African Rand',
      'ZMW' => 'Zambian Kwacha',
      'ZWL' => 'Zimbabwe Dollar'
    ]
  ],
  'DashboardTemplate' => [
    'fields' => [
      'layout' => 'Layout',
      'append' => 'Append (don\'t remove user\'s tabs)'
    ],
    'links' => [],
    'labels' => [
      'Create DashboardTemplate' => 'Create Template',
      'Deploy to Users' => 'Deploy to Users',
      'Deploy to Team' => 'Deploy to Team'
    ]
  ],
  'DashletOptions' => [
    'fields' => [
      'title' => 'Título',
      'dateFrom' => 'Fecha desde',
      'dateTo' => 'Fecha hasta',
      'autorefreshInterval' => 'Intervalo de actualización',
      'displayRecords' => 'Mostrar Registros',
      'isDoubleHeight' => 'Altitud 2x',
      'mode' => 'Modo',
      'enabledScopeList' => 'Qué mostrar',
      'users' => 'Usuarios',
      'entityType' => 'Tipo de Entidad',
      'primaryFilter' => 'Filtro Primario',
      'boolFilterList' => 'Filtros Adicionales',
      'sortBy' => 'Campo para Ordenar',
      'sortDirection' => 'Ordenar (dirección)',
      'expandedLayout' => 'Formato',
      'skipOwn' => 'Don\'t show own records',
      'url' => 'URL',
      'dateFilter' => 'Filtro de Fecha',
      'text' => 'Text',
      'folder' => 'Folder',
      'team' => 'Team',
      'futureDays' => 'Siguientes \'n\' Días',
      'useLastStage' => 'Agrupar por la última etapa lograda'
    ],
    'options' => [
      'mode' => [
        'agendaWeek' => 'Semana (agenda)',
        'basicWeek' => 'Semana',
        'month' => 'Mes',
        'basicDay' => 'Día',
        'agendaDay' => 'Día (agenda)',
        'timeline' => 'Cronograma'
      ],
      'sortDirection' => [
        'asc' => 'Ascending',
        'desc' => 'Descending'
      ]
    ],
    'messages' => [
      'selectEntityType' => 'Seleccionar el Tipo de Entidad en las opciones del panel.'
    ],
    'tooltips' => [
      'skipOwn' => 'Actions made by your user account won\'t be displayed.'
    ]
  ],
  'DynamicLogic' => [
    'labels' => [
      'Field' => 'Campo'
    ],
    'options' => [
      'operators' => [
        'equals' => 'Igual a',
        'notEquals' => 'Diferente de',
        'greaterThan' => 'Mayor que',
        'lessThan' => 'Menor que',
        'greaterThanOrEquals' => 'Mayor o igual a',
        'lessThanOrEquals' => 'Menor o igual que',
        'in' => 'En',
        'notIn' => 'No en',
        'inPast' => 'En Pasado',
        'inFuture' => 'Es Futuro',
        'isToday' => 'Es Hoy',
        'isTrue' => 'Es Verdadero',
        'isFalse' => 'Es Falso',
        'isEmpty' => 'Está Vacío',
        'isNotEmpty' => 'No está vacío',
        'contains' => 'Contiene',
        'notContains' => 'No Contiene',
        'has' => 'Contiene',
        'notHas' => 'No Contiene',
        'startsWith' => 'Starts With',
        'endsWith' => 'Ends With',
        'matches' => 'Matches (reg exp)'
      ]
    ]
  ],
  'Email' => [
    'fields' => [
      'name' => 'Nombre (Sujeto)',
      'parent' => 'Padre',
      'status' => 'Estátus',
      'dateSent' => 'Enviado',
      'from' => 'De',
      'to' => 'Para',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Responder a',
      'replyToString' => 'Responder a (String)',
      'personStringData' => 'Person String Data',
      'isHtml' => 'Es Html',
      'body' => 'Cuerpo',
      'bodyPlain' => 'Cuerpo (plano)',
      'subject' => 'Asunto',
      'attachments' => 'Adjuntos',
      'selectTemplate' => 'Seleccione una Plantilla',
      'fromEmailAddress' => 'From Address (link)',
      'emailAddress' => 'Dirección de Correo',
      'deliveryDate' => 'Fecha Entrega',
      'account' => 'Cuenta',
      'users' => 'Usuarios',
      'replied' => 'Respondió',
      'replies' => 'Respuestas',
      'isRead' => 'Fue leído',
      'isNotRead' => 'No Leído',
      'isImportant' => 'Es Importante',
      'isReplied' => 'Tiene Respuesta',
      'isNotReplied' => 'No Tiene Respuesta',
      'isUsers' => 'Es del Usuario',
      'isUsersSent' => 'Is User\'s Sent',
      'inTrash' => 'En el Basurero',
      'inArchive' => 'In Archive',
      'folder' => 'Carpeta',
      'inboundEmails' => 'Cuentas de Grupo',
      'emailAccounts' => 'Cuentas Personales',
      'hasAttachment' => 'Tiene Adjuntos',
      'assignedUsers' => 'Usuarios Asignados',
      'sentBy' => 'Enviado por',
      'toEmailAddresses' => 'Direcciones (Para)',
      'ccEmailAddresses' => 'Direcciones CC',
      'bccEmailAddresses' => 'Direcciones (CCO)',
      'replyToEmailAddresses' => 'Direcciones (Responder)',
      'messageId' => 'Id del Mensaje',
      'messageIdInternal' => 'Id del Mensaje (Interna)',
      'folderId' => 'Id de la Carpeta',
      'folderString' => 'Folder',
      'fromName' => 'Nombre (De)',
      'fromString' => 'String (De)',
      'fromAddress' => 'De la dirección',
      'replyToName' => 'Reply-To Name',
      'replyToAddress' => 'Reply-To Address',
      'isSystem' => 'Es del Sistema',
      'icsContents' => 'ICS Contents',
      'icsEventData' => 'ICS Event Data',
      'icsEventUid' => 'ICS Event UID',
      'createdEvent' => 'Created Event',
      'event' => 'Event',
      'icsEventDateStart' => 'ICS Event Date Start',
      'groupFolder' => 'Group Folder',
      'tasks' => 'Tasks'
    ],
    'links' => [
      'replied' => 'Respondió',
      'replies' => 'Respuestas',
      'inboundEmails' => 'Cuentas de Grupo',
      'emailAccounts' => 'Cuentas Personales',
      'assignedUsers' => 'Usuarios Asignados',
      'sentBy' => 'Enviado por',
      'attachments' => 'Adjuntos',
      'fromEmailAddress' => 'Cuentas de Correo (De)',
      'toEmailAddresses' => 'Cuentas de Correo (Para)',
      'ccEmailAddresses' => 'Cuentas de Correo (CC)',
      'bccEmailAddresses' => 'Cuentas de Correo (CCO)',
      'replyToEmailAddresses' => 'Direcciones (Responder)',
      'createdEvent' => 'Created Event',
      'groupFolder' => 'Group Folder'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Borrador',
        'Sending' => 'Enviando',
        'Sent' => 'Enviado',
        'Archived' => 'Archivado',
        'Received' => 'Recibido',
        'Failed' => 'Falló'
      ]
    ],
    'labels' => [
      'Create Email' => 'Archivar Correo',
      'Archive Email' => 'Archivar Correo',
      'Import EML' => 'Import EML',
      'Compose' => 'Nuevo',
      'Reply' => 'Responder',
      'Reply to All' => 'Responder a Todos',
      'Forward' => 'Reenviar',
      'Insert Field' => 'Insert Field',
      'Original message' => 'Mensaje Original',
      'Forwarded message' => 'Mensaje reenviado',
      'Email Accounts' => 'Cuentas de Correo Personales',
      'Inbound Emails' => 'Agrupar Cuentas de Correo',
      'Email Templates' => 'Plantillas de Correo',
      'Send Test Email' => 'Enviar Correo de Prueba',
      'Send' => 'Enviar',
      'Email Address' => 'Correo',
      'Mark Read' => 'Marcar como Leído',
      'Sending...' => 'Enviando...',
      'Save Draft' => 'Guardar Borrador',
      'Mark all as read' => 'Marcar todos como leídos',
      'Show Plain Text' => 'Ver en texto plano',
      'Mark as Important' => 'Marcar como Importante',
      'Unmark Importance' => 'Marcar como No Importante',
      'Move to Trash' => 'Mover al Basurero',
      'Retrieve from Trash' => 'Recuperar del Basurero',
      'Move to Folder' => 'Mover a la Carpeta',
      'Moved to Archive' => 'Moved to Archive',
      'Filters' => 'Filtros',
      'Folders' => 'Carpetas',
      'Group Folders' => 'Group Folders',
      'No Subject' => 'No Subject',
      'View Users' => 'View Users',
      'Event' => 'Event',
      'View Attachments' => 'View Attachments',
      'Moved to Trash' => 'Moved to Trash',
      'Retrieved from Trash' => 'Retrieved from Trash',
      'Create Lead' => 'Crear Referencia',
      'Create Contact' => 'Crear Contacto',
      'Add to Contact' => 'Agregar a Contactos',
      'Add to Lead' => 'Agregar a Referencias',
      'Create Task' => 'Crear Tarea',
      'Create Case' => 'Crear Caso'
    ],
    'strings' => [
      'sendingFailed' => 'Email sending failed'
    ],
    'messages' => [
      'alreadyImported' => 'The [email]({link}) already exists in the system.',
      'invalidCredentials' => 'Invalid credentials.',
      'unknownError' => 'Unknown error.',
      'recipientAddressRejected' => 'Recipient address rejected.',
      'noSmtpSetup' => 'No está configurado el SMTP. {link}.',
      'testEmailSent' => 'Correo de prueba enviado',
      'emailSent' => 'Correo enviado',
      'savedAsDraft' => 'Guardado como borrador',
      'sendConfirm' => 'Send the email?',
      'removeSelectedRecordsConfirmation' => 'Are you sure you want to remove selected emails?

They will be removed for other users too.',
      'removeRecordConfirmation' => 'Are you sure you want to remove the email?

It will be removed for other users too.',
      'confirmInsertTemplate' => 'El cuerpo del correo se perderá. ¿Realmente desea insertar la plantilla?'
    ],
    'presetFilters' => [
      'sent' => 'Enviado',
      'archived' => 'Archivado',
      'inbox' => 'Bandeja de Entrada',
      'drafts' => 'Borradores',
      'trash' => 'Basurero',
      'archive' => 'Archive',
      'important' => 'Importante'
    ],
    'actions' => [
      'moveToArchive' => 'Archive'
    ],
    'massActions' => [
      'markAsRead' => 'Mark as Read',
      'markAsNotRead' => 'Marcar como No Leído',
      'markAsImportant' => 'Marcar como Importante',
      'markAsNotImportant' => 'Marcar como No Importante',
      'moveToTrash' => 'Mover al Basurero',
      'moveToFolder' => 'Mover a la Carpeta',
      'moveToArchive' => 'Archive',
      'retrieveFromTrash' => 'Recuperar del Basurero'
    ],
    'otherFields' => [
      'file' => 'File'
    ]
  ],
  'EmailAccount' => [
    'fields' => [
      'name' => 'Nombre',
      'status' => 'Estado',
      'host' => 'Servidor',
      'username' => 'Nombre de Usuario',
      'password' => 'Contraseña',
      'port' => 'Puerto',
      'monitoredFolders' => 'Carpetas Supervisadas',
      'security' => 'Security',
      'fetchSince' => 'Obtener Desde',
      'emailAddress' => 'Dirección de Correo',
      'sentFolder' => 'Carpeta de Enviados',
      'storeSentEmails' => 'Almacenar Correos Enviados',
      'keepFetchedEmailsUnread' => 'Mantener los correos obtenidos sin leer',
      'emailFolder' => 'Poner en la Carpeta',
      'connectedAt' => 'Connected At',
      'useImap' => 'Obtener Correos',
      'useSmtp' => 'Use SMTP',
      'smtpHost' => 'Servidor SMTP',
      'smtpPort' => 'Puerto SMTP',
      'smtpAuth' => 'Cuenta SMTP',
      'smtpSecurity' => 'Seguridad SMTP',
      'smtpAuthMechanism' => 'SMTP Auth Mechanism',
      'smtpUsername' => 'Usuario SMTP',
      'smtpPassword' => 'Contraseña SMTP'
    ],
    'links' => [
      'filters' => 'Filtros',
      'emails' => 'Correos'
    ],
    'options' => [
      'status' => [
        'Active' => 'Activo',
        'Inactive' => 'Inactivo'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN',
        'login' => 'LOGIN',
        'crammd5' => 'CRAM-MD5'
      ]
    ],
    'labels' => [
      'Create EmailAccount' => 'Crear Cuenta de Correo',
      'IMAP' => 'IMAP',
      'Main' => 'Principal',
      'Test Connection' => 'Probar conexión',
      'Send Test Email' => 'Enviar Correo de Prueba',
      'SMTP' => 'SMTP'
    ],
    'presetFilters' => [
      'active' => 'Active'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'No se pudo conectar con el servidor IMAP',
      'connectionIsOk' => 'Conexión correcta',
      'imapNotConnected' => 'Could not connect to [IMAP account](#EmailAccount/view/{id}).'
    ],
    'tooltips' => [
      'useSmtp' => 'The ability to send emails.',
      'emailAddress' => 'The user record (assigned user) should have the same email address to be able to use this email account for sending.',
      'monitoredFolders' => 'Si usa varias carpetas, debe separarlas con coma',
      'storeSentEmails' => 'Los correos enviados serán guardados en el servidor IMAP.  El campo de  dirección del correo deberá coincidir con las direcciones de los correos que serán enviados.'
    ]
  ],
  'EmailAddress' => [
    'labels' => [
      'Primary' => 'Primario',
      'Opted Out' => 'Rechazado',
      'Invalid' => 'Inválido'
    ],
    'fields' => [
      'optOut' => 'Opted Out',
      'invalid' => 'Invalid'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'EmailFilter' => [
    'fields' => [
      'from' => 'De',
      'to' => 'Para',
      'subject' => 'Asunto',
      'bodyContains' => 'Contenido del Cuerpo',
      'bodyContainsAll' => 'Body Contains All',
      'action' => 'Acción',
      'isGlobal' => 'Es Global',
      'emailFolder' => 'Carpeta',
      'groupEmailFolder' => 'Group Email Folder',
      'markAsRead' => 'Mark as Read'
    ],
    'links' => [
      'emailFolder' => 'Folder',
      'groupEmailFolder' => 'Group Email Folder'
    ],
    'labels' => [
      'Create EmailFilter' => 'Crear Filtro de Correo',
      'Emails' => 'Correos'
    ],
    'options' => [
      'action' => [
        'None' => 'None',
        'Skip' => 'Ignorar',
        'Move to Folder' => 'Carpeta',
        'Move to Group Folder' => 'Put in Group Folder'
      ]
    ],
    'tooltips' => [
      'name' => 'Indique un nombre descriptivo del filtro.',
      'subject' => 'Use el comodín *:

texto*  - inicia con \'texto\',
*texto* - contiene \'texto\',
*texto  - termina en \'text\'.',
      'bodyContains' => 'El cuerpo del correo contiene alguna de la palabras o frases especificadas.',
      'bodyContainsAll' => 'An email body contains all specified words or phrases.',
      'from' => 'Los correos enviados desde la dirección especificada. Dejar en blanco si no es necesario.',
      'to' => 'Los correos electrónicos que se envían a la dirección especificada. Dejar en blanco si no es necesario.',
      'isGlobal' => 'Aplicar este filtro a todos los correos entrantes del sistema.'
    ]
  ],
  'EmailFolder' => [
    'fields' => [
      'skipNotifications' => 'Saltar Notificaciones'
    ],
    'labels' => [
      'Create EmailFolder' => 'Crear Carpeta',
      'Manage Folders' => 'Carpetas',
      'Emails' => 'Correos'
    ]
  ],
  'EmailTemplate' => [
    'fields' => [
      'name' => 'Nombre',
      'status' => 'Estado',
      'isHtml' => 'Es HTML',
      'body' => 'Cuerpo',
      'subject' => 'Asunto',
      'attachments' => 'Adjuntos',
      'oneOff' => 'Único',
      'category' => 'Categoría',
      'insertField' => 'Insertar Campo'
    ],
    'links' => [],
    'labels' => [
      'Create EmailTemplate' => 'Crear Plantilla de Correo',
      'Info' => 'Información',
      'Available placeholders' => 'Marcadores disponibles'
    ],
    'messages' => [
      'infoText' => 'Marcadores disponibles:

{optOutUrl} &#8211; Dirección URL para deslistarse;

{optOutLink} &#8211; una liga para deslistarse.'
    ],
    'tooltips' => [
      'oneOff' => 'Compruebe si usted va a utilizar esta plantilla sólo una vez. Por ejemplo: para Correo Masivo.'
    ],
    'presetFilters' => [
      'actual' => 'Actuales'
    ],
    'placeholderTexts' => [
      'today' => 'Fecha de hoy',
      'now' => 'Fecha y hora actual',
      'currentYear' => 'Año actual',
      'optOutUrl' => 'Dirección URL para deslistarse',
      'optOutLink' => 'una liga para deslistarse'
    ]
  ],
  'EmailTemplateCategory' => [
    'labels' => [
      'Create EmailTemplateCategory' => 'Crear Categoría',
      'Manage Categories' => 'Administrar Categorías',
      'EmailTemplates' => 'Formatos de Correo'
    ],
    'fields' => [
      'order' => 'Ordenar',
      'childList' => 'Lista de Hijos'
    ],
    'links' => [
      'emailTemplates' => 'Formatos de Correo'
    ]
  ],
  'EntityManager' => [
    'labels' => [
      'Fields' => 'Campos',
      'Relationships' => 'Relaciones',
      'Layouts' => 'Layouts',
      'Schedule' => 'Agenda',
      'Log' => 'Historial',
      'Formula' => 'Fórmula'
    ],
    'fields' => [
      'name' => 'Nombre',
      'type' => 'Tipo',
      'labelSingular' => 'Etiqueta en Singular',
      'labelPlural' => 'Etiqueta en Plural',
      'stream' => 'Flujo',
      'label' => 'Etiqueta',
      'linkType' => 'Tipo de enlace',
      'entity' => 'Entity',
      'entityForeign' => 'Entidad Foránea',
      'linkForeign' => 'Enlace Foráneo',
      'link' => 'Enlace',
      'labelForeign' => 'Etiqueta Foránea',
      'sortBy' => 'Orden Default (campo)',
      'sortDirection' => 'Orden Default (dirección)',
      'relationName' => 'Nombre de la Tabla Intermedia',
      'linkMultipleField' => 'Ligar Varios Campos',
      'linkMultipleFieldForeign' => 'Ligar Varios Campos Foráneos',
      'disabled' => 'Desactivado',
      'textFilterFields' => 'Campos de Filtros de Texto',
      'audited' => 'Auditado',
      'auditedForeign' => 'Auditado Externamente',
      'statusField' => 'Campo de Estátus',
      'beforeSaveCustomScript' => 'Antes de Guardar el Código Personalizado',
      'beforeSaveApiScript' => 'API Before Save Script',
      'color' => 'Color',
      'kanbanViewMode' => 'Vista por Tarjetas',
      'kanbanStatusIgnoreList' => 'Grupos ignorados en la vista por Tarjetas',
      'iconClass' => 'Icono',
      'countDisabled' => 'Disable record count',
      'fullTextSearch' => 'Búsqueda por Texto',
      'parentEntityTypeList' => 'Parent Entity Types',
      'foreignLinkEntityTypeList' => 'Foreign Links',
      'optimisticConcurrencyControl' => 'Optimistic concurrency control',
      'updateDuplicateCheck' => 'Duplicate check on update',
      'duplicateCheckFieldList' => 'Duplicate check fields',
      'stars' => 'Stars',
      'layout' => 'Layout',
      'selectFilter' => 'Select Filter',
      'author' => 'Author',
      'module' => 'Module',
      'version' => 'Version',
      'primaryFilters' => 'Primary Filters',
      'activityStatusList' => 'Activity Statuses',
      'historyStatusList' => 'History Statuses',
      'completedStatusList' => 'Completed Statuses',
      'canceledStatusList' => 'Canceled Statuses'
    ],
    'options' => [
      'type' => [
        '' => '(vacío)',
        'Base' => 'Base',
        'Person' => 'Persona',
        'CategoryTree' => 'Árbol de Categorías',
        'Event' => 'Evento',
        'BasePlus' => 'Base Plus',
        'Company' => 'Empresa'
      ],
      'linkType' => [
        'manyToMany' => 'Muchos-a-Muchos',
        'oneToMany' => 'Uno-a-Muchos',
        'manyToOne' => 'Muchos-a-uno',
        'oneToOneRight' => 'One-to-One Right',
        'oneToOneLeft' => 'One-to-One Left',
        'parentToChildren' => 'Padres-a-Hijos',
        'childrenToParent' => 'Hijos-a-Padres'
      ],
      'sortDirection' => [
        'asc' => 'Ascendente',
        'desc' => 'Descendente'
      ],
      'module' => [
        'Custom' => 'Custom'
      ]
    ],
    'messages' => [
      'urlHashCopiedToClipboard' => 'A URL fragment for the *{name}* filter is copied to the clipboard. You can add it to the navbar.',
      'confirmRemoveLink' => 'Are you sure you want to remove the *{link}* relationship?',
      'nameIsAlreadyUsed' => 'Name \'{name}\' is already used.',
      'nameIsNotAllowed' => 'Name \'{name}\' is not allowed.',
      'nameIsTooLong' => 'Name is too long.',
      'confirmRemove' => 'Are you sure you want to remove the entity type from the system?',
      'entityCreated' => 'La entidad ha sido creada',
      'linkAlreadyExists' => 'Conflicto de nombres en el enlace.',
      'linkConflict' => 'Ya existe un enlace con el mismo nombra.',
      'beforeSaveCustomScript' => 'A script called every time before an entity is saved. Use for setting calculated fields.',
      'beforeSaveApiScript' => 'A script called on create and update API requests before an entity is saved. Use for custom validation and duplicate checking.'
    ],
    'tooltips' => [
      'duplicateCheckFieldList' => 'Which fields to check when performing checking for duplicates.',
      'updateDuplicateCheck' => 'Perform checking for duplicates when updating a record.',
      'optimisticConcurrencyControl' => 'Prevents writing conflicts.',
      'stars' => 'The ability to star records. Stars can be used by users to bookmark records.',
      'statusField' => 'Los cambios en este campo serán registrados en su flujo',
      'textFilterFields' => 'Campos usados por la búsqueda de texto',
      'stream' => 'Si la entidad tiene Flujo.',
      'disabled' => 'Verifique si ya no necesita esta entidad en su sistema.',
      'linkAudited' => 'La creación de registros relacionados y su liga con con registros existentes se registrará en su flujo.',
      'linkMultipleField' => 'El campo \'Multi-Ligas\' es una forma fácil de editar relaciones.  No lo uses si tienes muchos registros.',
      'linkSelectFilter' => 'A primary filter to apply by default when selecting a record.',
      'entityType' => 'Base Plus - tiene páneles de Actividades, Historial y Tareas.

Evento - disponible en los páneles de Calendario y Actividades',
      'countDisabled' => 'Total number won\'t be displayed on the list view. Can decrease loading time when the DB table is big.',
      'fullTextSearch' => 'Se requiere regenerar',
      'activityStatusList' => 'Status values determining that an activity record should be displayed in the Activity panel and considered as actual.',
      'historyStatusList' => 'Status values determining that an activity record should be displayed in the History panel.',
      'completedStatusList' => 'Status values determining that an activity is completed.',
      'canceledStatusList' => 'Status values determining that an activity is canceled and won\'t be taken into account in free/busy ranges.'
    ]
  ],
  'Export' => [
    'fields' => [
      'exportAllFields' => 'Exportar todos los campos',
      'fieldList' => 'Lista de Campos',
      'format' => 'Formato',
      'status' => 'Status',
      'xlsxLite' => 'Lite',
      'xlsxRecordLinks' => 'Record Links',
      'xlsxTitle' => 'Title'
    ],
    'options' => [
      'format' => [
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)'
      ],
      'status' => [
        'Pending' => 'Pending',
        'Running' => 'Running',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ],
    'tooltips' => [
      'xlsxLite' => 'Consumes much less memory. Recommended if a big number of records is exported.',
      'xlsxTitle' => 'Print a title and current date in the header.'
    ],
    'messages' => [
      'exportProcessed' => 'Export has been processed. Download the [file]({url}).',
      'infoText' => 'The export is being processed in idle by cron. It can take some time to finish. Closing this modal dialog won\'t affect the execution process.'
    ]
  ],
  'Extension' => [
    'fields' => [
      'name' => 'Nombre',
      'version' => 'Version',
      'description' => 'Descripción',
      'isInstalled' => 'Instalado',
      'checkVersionUrl' => 'URL para buscar nuevas versiones '
    ],
    'labels' => [
      'Uninstall' => 'Desinstalar',
      'Install' => 'Instalar'
    ],
    'messages' => [
      'uninstalled' => 'La extension {name} ha sido desinstalada',
      'fileExceedsMaxUploadSize' => 'The file size exceeds the max upload size {maxSize}. Consider increasing `post_max_size` or install the extension via CLI.'
    ]
  ],
  'ExternalAccount' => [
    'labels' => [
      'Connect' => 'Conectar',
      'Disconnect' => 'Disconnect',
      'Disconnected' => 'Disconnected',
      'Connected' => 'Conectado'
    ],
    'help' => [],
    'messages' => [
      'externalAccountNoConnectDisabled' => 'External account for integration \'{integration}\' has been disabled due not being able to connect.'
    ]
  ],
  'FieldManager' => [
    'labels' => [
      'Dynamic Logic' => 'Lógica Dinámica',
      'Name' => 'Nombre',
      'Label' => 'Etiqueta',
      'Type' => 'Tipo'
    ],
    'options' => [
      'dateTimeDefault' => [
        '' => 'Ninguno',
        'javascript: return this.dateTime.getNow(1);' => 'Hoy',
        'javascript: return this.dateTime.getNow(5);' => 'Hoy (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Hoy (15 m)',
        'javascript: return this.dateTime.getNow(30);' => 'Hoy (30 m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 hora',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 día',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 semana'
      ],
      'dateDefault' => [
        '' => 'Ninguno',
        'javascript: return this.dateTime.getToday();' => 'Hoy',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 día',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 semana',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 semanas',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 semanas',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 mes',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 año'
      ],
      'barcodeType' => [
        'EAN13' => 'EAN-13',
        'EAN8' => 'EAN-8',
        'EAN5' => 'EAN-5',
        'EAN2' => 'EAN-2',
        'UPC' => 'UPC (A)',
        'UPCE' => 'UPC (E)',
        'pharmacode' => 'Pharmacode',
        'QRcode' => 'QR code'
      ],
      'globalRestrictions' => [
        'forbidden' => 'Forbidden',
        'internal' => 'Internal',
        'onlyAdmin' => 'Admin-only',
        'readOnly' => 'Read-only',
        'nonAdminReadOnly' => 'Non-admin read-only'
      ]
    ],
    'tooltips' => [
      'optionsReference' => 'Re-use options from another field.',
      'currencyDecimal' => 'Use the Decimal DB type. In the app, values will be represented as strings. Check this parameter if precision is required.',
      'cutHeight' => 'A text higher then a specified value will be cut with a \'show more\' button displayed.',
      'urlStrip' => 'Strip a protocol and a trailing slash.',
      'audited' => 'Las actualizaciones se registrarán en el Flujo',
      'required' => 'El campo será obligatorio.  No puede ir vacío.',
      'default' => 'Se asignará el valor default al crearlo.',
      'min' => 'Valor mínimo permitido.',
      'max' => 'Valor máximo permitido.',
      'seeMoreDisabled' => 'Si no se marca, los textos largos serán recortados.',
      'lengthOfCut' => 'Que tan largo puede ser el texto antes de ser recortado.',
      'maxLength' => 'Tamaño máximo acepable del texto.',
      'before' => 'La fecha capturada debe ser anterior a la del campo que indique aquí.',
      'after' => 'La fecha capturada debe ser posterior a la del campo que indique aquí',
      'readOnly' => 'El valor del campo no puede ser especificado por el usuario.  Pero puede ser calculado por formula.',
      'readOnlyAfterCreate' => 'The field value can be specified when creating a new record. After that, the field becomes read-only. It can still be calculated by formula.',
      'fileAccept' => 'Which file types to accept. It\'s possible to add custom items.',
      'barcodeLastChar' => 'For EAN-13 type.',
      'maxFileSize' => 'Vacío o es 0, ilimitado.',
      'conversionDisabled' => 'The currency conversion action won\'t be applied to this field.',
      'pattern' => 'A regular expression to check a field value against. Define an expression or select a predefined one.',
      'options' => 'A list of possible values and their labels.',
      'optionsArray' => 'A list of possible values and their labels. If empty, the field will allow entering custom values.',
      'maxCount' => 'Maximum number of items allowed to be selected.',
      'displayAsList' => 'Each item in a new line.',
      'optionsVarchar' => 'A list of autocomplete values.',
      'linkReadOnly' => 'Field value can\'t be specified by user. But can be calculated by formula.

It will also disable the ability to create a related record from relationship panels.',
      'relateOnImport' => 'When importing with this field, it will automatically relate a record with a matching foreign record. Use this functionality only if the foreign field is considered as unique.'
    ],
    'fieldParts' => [
      'address' => [
        'street' => 'Calle',
        'city' => 'Ciudad',
        'state' => 'Estado',
        'country' => 'País',
        'postalCode' => 'Código Postal',
        'map' => 'Mapa'
      ],
      'personName' => [
        'salutation' => 'Saludo',
        'first' => 'Nombre',
        'middle' => 'Middle',
        'last' => 'Apellido'
      ],
      'currency' => [
        'converted' => '(Convertido)',
        'currency' => '(Moneda)'
      ],
      'datetimeOptional' => [
        'date' => 'Fecha'
      ]
    ],
    'fieldInfo' => [
      'varchar' => 'A single-line text.',
      'enum' => 'Selectbox, only one value can be selected.',
      'text' => 'A multiline text with markdown support.',
      'date' => 'Date w/o time.',
      'datetime' => 'Date and time',
      'currency' => 'A currency value. A float number with a currency code.',
      'int' => 'A whole number.',
      'float' => 'A number with a decimal part.',
      'bool' => 'A checkbox. Two possible values: true and false.',
      'multiEnum' => 'A list of values, multiple values can be selected. The list is ordered.',
      'checklist' => 'A list of checkboxes.',
      'array' => 'A list of values, similar to Multi-Enum field.',
      'address' => 'An address with street, city, state, postal code and country.',
      'url' => 'For storing links.',
      'urlMultiple' => 'Multiple links.',
      'wysiwyg' => 'A text with HTML support.',
      'file' => 'For file uploading.',
      'image' => 'For image uploading.',
      'attachmentMultiple' => 'Allows to upload multiple files.',
      'number' => 'An auto-incrementing number of string type with a possible prefix and specific length.',
      'autoincrement' => 'A generated read-only auto-incrementing integer number.',
      'barcode' => 'A barcode. Can be printed to PDF.',
      'email' => 'A set of email addresses with their parameters: Opted-out, Invalid, Primary.',
      'phone' => 'A set of phone numbers with their parameters: Type, Opted-out, Invalid, Primary.',
      'foreign' => 'A field of a related record. Read-only.',
      'link' => 'A record related through Belongs-To (many-to-one or one-to-one) relationship.',
      'linkParent' => 'A record related through Belongs-To-Parent relationship. Can be of different entity types.',
      'linkMultiple' => 'A set of records related through Has-Many (many-to-many or one-to-many) relationship. Not all relationships have their link-multiple fields. Only those do, where Link-Multiple parameter(s) is enabled.'
    ],
    'messages' => [
      'confirmRemove' => 'Are you sure you want to remove the *{field}* field?

Field removal does not remove data from the database. Data from the database will be removed if you run hard rebuild.',
      'fieldNameIsNotAllowed' => 'Field name \'{field}\' is not allowed.',
      'fieldAlreadyExists' => 'Field \'{field}\' already exists in \'{entityType}\'.',
      'linkWithSameNameAlreadyExists' => 'Link with the name \'{field}\' already exists in \'{entityType}\'.'
    ]
  ],
  'Formula' => [
    'labels' => [
      'Check Syntax' => 'Check Syntax',
      'Run' => 'Run'
    ],
    'fields' => [
      'target' => 'Target',
      'targetType' => 'Target Type',
      'script' => 'Script',
      'output' => 'Output',
      'error' => 'Error'
    ],
    'messages' => [
      'runSuccess' => 'Executed successfully.',
      'runError' => 'Error.',
      'checkSyntaxSuccess' => 'Syntax is correct.',
      'checkSyntaxError' => 'Syntax error.',
      'emptyScript' => 'Script is empty.'
    ],
    'tooltips' => [
      'output' => 'Print values with the function `output\\printLine`.'
    ]
  ],
  'Global' => [
    'scopeNames' => [
      'Note' => 'Note',
      'Email' => 'Correo electrónico',
      'User' => 'Usuario',
      'Team' => 'Equipo',
      'Role' => 'Rol',
      'EmailTemplate' => 'Plantilla de Correo',
      'EmailTemplateCategory' => 'Categorías de Formatos de Correo',
      'EmailAccount' => 'Cuenta de Correo',
      'EmailAccountScope' => 'Cuenta de Correo',
      'OutboundEmail' => 'Correo Saliente',
      'ScheduledJob' => 'Tarea Agendada',
      'ExternalAccount' => 'Cuenta Externa',
      'Extension' => 'Extension',
      'Dashboard' => 'Tablero',
      'InboundEmail' => 'Correo Entrante',
      'Stream' => 'Flujo',
      'Import' => 'Importar',
      'ImportError' => 'Import Error',
      'Template' => 'Plantilla',
      'Job' => 'Trabajo',
      'EmailFilter' => 'Filtro de correo',
      'Portal' => 'Portal',
      'PortalRole' => 'Rol del Portal',
      'Attachment' => 'Datos adjuntos',
      'EmailFolder' => 'Carpeta del Correo',
      'GroupEmailFolder' => 'Group Email Folder',
      'PortalUser' => 'Portal del Usuario',
      'ApiUser' => 'Usuario de la API',
      'ScheduledJobLogRecord' => 'Historial de Tareas Agendadas',
      'PasswordChangeRequest' => 'Solicitar Cambio de Contraseña',
      'ActionHistoryRecord' => 'Historial de Acciones',
      'AuthToken' => 'Clave de Autorización',
      'UniqueId' => 'ID Único',
      'LastViewed' => 'Ultimo Visto',
      'Settings' => 'Configuración',
      'FieldManager' => 'Campos',
      'Integration' => 'Integración',
      'LayoutManager' => 'Formatos',
      'EntityManager' => 'Entidades',
      'Export' => 'Exportar',
      'DynamicLogic' => 'Lógica Dinámica',
      'DashletOptions' => 'Opciones del Panel',
      'Admin' => 'Admin',
      'Global' => 'Global',
      'Preferences' => 'Preferencias',
      'EmailAddress' => 'Dirección de Correo',
      'PhoneNumber' => 'Teléfono',
      'AppLogRecord' => 'App Log Record',
      'AuthLogRecord' => 'Registro en Hist. de Aut.',
      'AuthFailLogRecord' => 'Registro en Hist. de Fallos de Aut.',
      'LeadCapture' => 'Punto de Entrada para Captura de Referencias',
      'LeadCaptureLogRecord' => 'Historial de Captura de Referencias',
      'ArrayValue' => 'Valor del Arreglo ',
      'DashboardTemplate' => 'Dashboard Template',
      'Currency' => 'Currency',
      'LayoutSet' => 'Layout Set',
      'Webhook' => 'Webhook',
      'WebhookQueueItem' => 'Webhook Queue Item',
      'Mass Action' => 'Mass Action',
      'WorkingTimeCalendar' => 'Working Time Calendar',
      'WorkingTimeRange' => 'Working Time Exception',
      'AuthenticationProvider' => 'Authentication Provider',
      'GlobalStream' => 'Global Stream',
      'AddressCountry' => 'Address Country',
      'Account' => 'Cuenta',
      'Contact' => 'Contacto',
      'Lead' => 'Referencia',
      'Target' => 'Interés',
      'Opportunity' => 'Oportunidad',
      'Meeting' => 'Presentación',
      'Calendar' => 'Calendario',
      'Call' => 'Llamada',
      'Task' => 'Tarea',
      'Case' => 'Caso',
      'Document' => 'Documento',
      'DocumentFolder' => 'Carpeta de Documento',
      'Campaign' => 'Campaña',
      'TargetList' => 'Lista de Intereses',
      'MassEmail' => 'Correo Masivo',
      'EmailQueueItem' => 'Item en Cola de Correo',
      'CampaignTrackingUrl' => 'Seguimiento de URLs',
      'Activities' => 'Actividades',
      'KnowledgeBaseArticle' => 'Artículo de la Base de Conocimientos',
      'KnowledgeBaseCategory' => 'Categoría de la Base de Conocimientos',
      'CampaignLogRecord' => 'Historial de Campañas'
    ],
    'scopeNamesPlural' => [
      'Note' => 'Notes',
      'Email' => 'Correos',
      'User' => 'Usuarios',
      'Team' => 'Equipos',
      'Role' => 'Roles',
      'EmailTemplate' => 'Plantillas de Correo',
      'EmailTemplateCategory' => 'Categorías de Formatos de Correo',
      'EmailAccount' => 'Cuentas de Correo Electrónico',
      'EmailAccountScope' => 'Cuentas de Correo Electrónico',
      'OutboundEmail' => 'Correos Salientes',
      'ScheduledJob' => 'Tareas Agendadas',
      'ExternalAccount' => 'Cuentas Externas',
      'Extension' => 'Extensiones',
      'Dashboard' => 'Tablero',
      'InboundEmail' => 'Grupo de Cuentas de Correo',
      'EmailAddress' => 'Email Addresses',
      'PhoneNumber' => 'Phone Numbers',
      'Stream' => 'Flujo',
      'Import' => 'Importar ',
      'ImportError' => 'Import Errors',
      'Template' => 'Plantillas',
      'Job' => 'Trabajos',
      'EmailFilter' => 'Filtros de Correo',
      'Portal' => 'Portales',
      'PortalRole' => 'Roles del Portal',
      'Attachment' => 'Datos adjuntos',
      'EmailFolder' => 'Carpetas del Correo',
      'GroupEmailFolder' => 'Group Email Folders',
      'PortalUser' => 'Usuarios del Portal',
      'ApiUser' => 'Usuarios de la API',
      'ScheduledJobLogRecord' => 'Historial de Tareas Agendadas',
      'PasswordChangeRequest' => 'Solicitudes de Cambio de contraseña',
      'ActionHistoryRecord' => 'Historial de Acciones',
      'AuthToken' => 'Clave de Autorización',
      'UniqueId' => 'IDs Unicos',
      'LastViewed' => 'Ultimos Revisados',
      'AppLogRecord' => 'App Log',
      'AuthLogRecord' => 'Historial de Autorizaciones',
      'AuthFailLogRecord' => 'Hist. de Fallos de Aut.
',
      'LeadCapture' => 'Capturar Referencia',
      'LeadCaptureLogRecord' => 'Historial de Captura de Referencias',
      'ArrayValue' => 'Valores del Arreglo',
      'DashboardTemplate' => 'Dashboard Templates',
      'Currency' => 'Currency',
      'LayoutSet' => 'Layout Sets',
      'Webhook' => 'Webhooks',
      'WebhookQueueItem' => 'Webhook Queue Items',
      'WorkingTimeCalendar' => 'Working Time Calendars',
      'WorkingTimeRange' => 'Working Time Exceptions',
      'AuthenticationProvider' => 'Authentication Providers',
      'GlobalStream' => 'Global Stream',
      'AddressCountry' => 'Address Countries',
      'Account' => 'Cuentas',
      'Contact' => 'Contactos',
      'Lead' => 'Referencias',
      'Target' => 'Intereses',
      'Opportunity' => 'Oportunidades',
      'Meeting' => 'Presentaciones',
      'Calendar' => 'Calendario',
      'Call' => 'Llamadas',
      'Task' => 'Tareas',
      'Case' => 'Casos',
      'Document' => 'Documentos',
      'DocumentFolder' => 'Carpetas de Documentos',
      'Campaign' => 'Campañas',
      'TargetList' => 'Listas de Intereses',
      'MassEmail' => 'Correos Masivos',
      'EmailQueueItem' => 'Items en Cola de Correo',
      'CampaignTrackingUrl' => 'URLs de Seguimiento',
      'Activities' => 'Actividades',
      'KnowledgeBaseArticle' => 'Base de Conocimientos',
      'KnowledgeBaseCategory' => 'Categorías de la Base de Conocimientos',
      'CampaignLogRecord' => 'Historial de Campañas'
    ],
    'labels' => [
      'Previous Page' => 'Previous Page',
      'Next Page' => 'Next Page',
      'First Page' => 'First Page',
      'Last Page' => 'Last Page',
      'Page' => 'Page',
      'Sort' => 'Sort',
      'Misc' => 'Misceláneos',
      'Merge' => 'Generar',
      'None' => '(vacío)',
      'Home' => 'Inicio',
      'by' => 'por',
      'Proceed' => 'Proceed',
      'Saved' => 'Guardado',
      'Error' => 'Error',
      'Select' => 'Seleccionar',
      'Not valid' => 'No válido',
      'Please wait...' => 'Por favor espere...',
      'Please wait' => 'Por favor espere',
      'Attached' => 'Attached',
      'Loading...' => 'Cargando...',
      'Uploading...' => 'Subiendo...',
      'Sending...' => 'Enviando...',
      'Merged' => 'Generado',
      'Removed' => 'Eliminado',
      'Posted' => 'Publicado',
      'Linked' => 'Ligado',
      'Unlinked' => 'Desligado',
      'Done' => 'Hecho',
      'Access denied' => 'Acceso denegado',
      'Not found' => 'No encontrado',
      'Access' => 'Acceso',
      'Are you sure?' => '¿Está seguro?',
      'Record has been removed' => 'Registro Eliminado',
      'Wrong username/password' => 'Nombre de usuario/contraseña incorrectos',
      'Post cannot be empty' => 'La entrada no puede estar vacia',
      'Username can not be empty!' => '¡El nombre del usuario no puede estar vacío!',
      'Cache is not enabled' => 'El Cache no está habilitado',
      'Cache has been cleared' => 'Se borró el Cache correctamente',
      'Rebuild has been done' => 'Se ha reconstruido',
      'Return to Application' => 'Regresar a la Aplicación',
      'Modified' => 'Modificado',
      'Created' => 'Creado(a)',
      'Create' => 'Crear',
      'create' => 'crear ',
      'Overview' => 'Vista',
      'Details' => 'Detalles',
      'Add Field' => 'Agregar Campo',
      'Add Dashlet' => 'Agregar Panel',
      'Filter' => 'Filtro',
      'Edit Dashboard' => 'Editar Tablero',
      'Add' => 'Agregar',
      'Add Item' => 'Agregar Elemento',
      'Reset' => 'Restablecer',
      'Menu' => 'Menú',
      'More' => 'Más',
      'Search' => 'Buscar',
      'Only My' => 'Sólo míos',
      'Open' => 'Abiertos',
      'Admin' => 'Administrador',
      'About' => 'Acerca de EspoCRM',
      'Refresh' => 'Actualizar',
      'Remove' => 'Eliminar',
      'Restore' => 'Restore',
      'Options' => 'Opciones',
      'Username' => 'Nombre de Usuario',
      'Password' => 'Contraseña',
      'Login' => 'Entrar',
      'Log Out' => 'Salir',
      'Log in' => 'Log in',
      'Log in as' => 'Log in as',
      'Sign in' => 'Sign in',
      'Preferences' => 'Preferencias',
      'State' => 'Estado/Distrito',
      'Street' => 'Calle',
      'Country' => 'País',
      'City' => 'Ciudad',
      'PostalCode' => 'Código Postal',
      'Star' => 'Star',
      'Unstar' => 'Unstar',
      'Starred' => 'Starred',
      'Followed' => 'Con Seguimiento',
      'Follow' => 'Seguir',
      'Followers' => 'Seguidores',
      'Clear Local Cache' => 'Borrar Cache Local',
      'Actions' => 'Acciones',
      'Delete' => 'Borrar',
      'Update' => 'Guardar',
      'Save' => 'Guardar',
      'Edit' => 'Editar',
      'View' => 'Ver',
      'Cancel' => 'Cancelar',
      'Apply' => 'Aplicar',
      'Unlink' => 'Desligar',
      'Mass Update' => 'Actualización Masiva',
      'Export' => 'Exportar',
      'No Data' => '(vacío)',
      'No Access' => 'Sin Acceso',
      'All' => 'Todos',
      'Active' => 'Activo',
      'Inactive' => 'Inactivo',
      'Write your comment here' => 'Escriba su comentario aquí',
      'Post' => 'Guardar',
      'Stream' => 'Flujo',
      'Show more' => 'Mostrar mas',
      'Dashlet Options' => 'Opciones del Panel',
      'Full Form' => 'Formulario Completo',
      'Insert' => 'Insertar',
      'Person' => 'Persona',
      'First Name' => 'Nombre',
      'Last Name' => 'Apellidos',
      'Middle Name' => 'Middle Name',
      'Original' => 'Original',
      'You' => 'Tu',
      'you' => 'tu',
      'change' => 'cambiar',
      'Change' => 'Cambiar',
      'Primary' => 'Primario',
      'Save Filter' => 'Guardar Filtro',
      'Remove Filter' => 'Remove Filter',
      'Ready' => 'Ready',
      'Administration' => 'Administración',
      'Run Import' => 'Ejecutar Importación',
      'Duplicate' => 'Duplicar',
      'Notifications' => 'Notificaciones',
      'Mark all read' => 'Marcar todos como leído',
      'See more' => 'Ver más',
      'Today' => 'Hoy',
      'Tomorrow' => 'Mañana',
      'Yesterday' => 'Ayer',
      'Submit' => 'Enviar',
      'Close' => 'Cerrar',
      'Yes' => 'Si',
      'No' => 'No',
      'Select All Results' => 'Seleccionar Todos',
      'Value' => 'Valor',
      'Current version' => 'Version Actual',
      'List View' => 'Vista de Lista',
      'Tree View' => 'Vista de árbol',
      'Unlink All' => 'Desligar todo',
      'Total' => 'Total',
      'Print' => 'Print',
      'Print to PDF' => 'Imprimir PDF',
      'Default' => 'Default',
      'Number' => 'Número',
      'From' => 'De',
      'To' => 'Para',
      'Create Post' => 'Crear Entrada',
      'Previous Entry' => 'Entrada Previa',
      'Next Entry' => 'Siguiente Entrada',
      'View List' => 'Ver Lista',
      'Attach File' => 'Adjuntar archivo',
      'Skip' => 'Saltar',
      'Attribute' => 'Atributo',
      'Function' => 'Función',
      'Self-Assign' => 'Auto-Asignar',
      'Self-Assigned' => 'Auto-Asignado',
      'Expand' => 'Expander',
      'Collapse' => 'Cerrar',
      'New notifications' => 'Nuevas notificaciones',
      'Manage Categories' => 'Administrar Categorías',
      'Manage Folders' => 'Administrar Carpetas',
      'Convert to' => 'Convertir a',
      'View Personal Data' => 'Ver Datos Personales',
      'Personal Data' => 'Datos Personales',
      'Erase' => 'Borrar',
      'View Followers' => 'View Followers',
      'Convert Currency' => 'Convert Currency',
      'View on Map' => 'View on Map',
      'Preview' => 'Preview',
      'Move Over' => 'Mover',
      'Up' => 'Up',
      'Save & Continue Editing' => 'Save & Continue Editing',
      'Save & New' => 'Save & New',
      'Field' => 'Field',
      'Resolution' => 'Resolution',
      'Resolve Conflict' => 'Resolve Conflict',
      'Download' => 'Download',
      'Global Search' => 'Global Search',
      'Show Navigation Panel' => 'Show Navigation Panel',
      'Hide Navigation Panel' => 'Hide Navigation Panel',
      'Copy to Clipboard' => 'Copy to Clipboard',
      'Copied to clipboard' => 'Copied to clipboard',
      'Audit Log' => 'Audit Log',
      'View Audit Log' => 'View Audit Log',
      'Schedule' => 'Schedule',
      'Log' => 'Log',
      'Scheduler' => 'Scheduler',
      'Create InboundEmail' => 'Crear Correo Entrante',
      'Activities' => 'Actividades',
      'History' => 'Historial',
      'Attendees' => 'Asistentes',
      'Schedule Meeting' => 'Agendar Presentación',
      'Schedule Call' => 'Agendar LLamada',
      'Compose Email' => 'Escribir Correo',
      'Log Meeting' => 'Registrar Presentación',
      'Log Call' => 'Registrar Llamada',
      'Archive Email' => 'Archivar Correo',
      'Create Task' => 'Crear Tarea',
      'Tasks' => 'Tareas',
      'Merging...' => 'Fusionando...',
      'Removing...' => 'Removiendo...',
      'Unlinking...' => 'Desligando...',
      'Posting...' => 'Publicando...',
      'Saving...' => 'Guardando...'
    ],
    'messages' => [
      'pleaseWait' => 'Por favor espere...',
      'loading' => 'Cargando...',
      'saving' => 'Guardando...',
      'confirmLeaveOutMessage' => '¿Realmente desea salir del formulario?',
      'notModified' => 'No ha modificado el registro',
      'duplicate' => 'El registro que estás creando ya puede existir.',
      'dropToAttach' => 'Haga drop para adjuntar',
      'pageNumberIsOutOfBound' => 'Page number is out of bound',
      'fieldUrlExceedsMaxLength' => 'Encoded URL exceeds max length of {maxLength}',
      'fieldNotMatchingPattern' => '{field} does not match the pattern `{pattern}`',
      'fieldNotMatchingPattern$noBadCharacters' => '{field} contains not allowed characters',
      'fieldNotMatchingPattern$noAsciiSpecialCharacters' => '{field} should not contain ASCII special characters',
      'fieldNotMatchingPattern$latinLetters' => '{field} can contain only latin letters',
      'fieldNotMatchingPattern$latinLettersDigits' => '{field} can contain only latin letters and digits',
      'fieldNotMatchingPattern$latinLettersDigitsWhitespace' => '{field} can contain only latin letters, digits and whitespace',
      'fieldNotMatchingPattern$latinLettersWhitespace' => '{field} can contain only latin letters and whitespace',
      'fieldNotMatchingPattern$digits' => '{field} can contain only digits',
      'fieldNotMatchingPattern$uriOptionalProtocol' => '{field} must be a valid URL',
      'fieldNotMatchingPattern$phoneNumberLoose' => '{field} contains characters not allowed in a phone number',
      'fieldInvalid' => '{field} is invalid',
      'fieldIsRequired' => '{field} es requerido',
      'fieldPhoneInvalid' => '{field} is invalid',
      'fieldPhoneInvalidCode' => 'Invalid country code',
      'fieldPhoneTooShort' => '{field} is too short',
      'fieldPhoneTooLong' => '{field} is too long',
      'fieldPhoneInvalidCharacters' => 'Only digits, latin letters and characters `-+_@:#().` are allowed',
      'fieldPhoneExtensionTooLong' => 'Extension should not be longer than {maxLength}',
      'fieldShouldBeEmail' => '{field} debería ser un correo válido',
      'fieldShouldBeFloat' => '{field} debería ser un número válido',
      'fieldShouldBeInt' => '{field} debería ser un entero válido',
      'fieldShouldBeNumber' => '{field} should be a valid number',
      'fieldShouldBeDate' => '{field} debería ser una fecha válida',
      'fieldShouldBeDatetime' => '{field} deber{ia ser una fecha/hr válida',
      'fieldShouldAfter' => '{field} debe estar después de {otherField}',
      'fieldShouldBefore' => '{field} debe estar antes de {otherField}',
      'fieldShouldBeBetween' => '{field} debe estar entre {min} y {max}',
      'fieldShouldBeLess' => '{field} no debe ser mayor a {value}',
      'fieldShouldBeGreater' => '{field} no debe ser menor que {value}',
      'fieldBadPasswordConfirm' => '{field} confirmado de forma incorrecta',
      'fieldMaxFileSizeError' => 'El archivo no debe exceder {max} Mb',
      'fieldValueDuplicate' => 'Duplicate value',
      'fieldIsUploading' => 'Carga en prograso',
      'fieldExceedsMaxCount' => 'Count exceeds max allowed {maxCount}',
      'barcodeInvalid' => '{field} is not valid {type}',
      'arrayItemMaxLength' => 'Item shouldn\'t be longer than {max} characters',
      'resetPreferencesDone' => 'Se han restablecido las preferencias default',
      'confirmation' => '¿Está seguro?',
      'unlinkAllConfirmation' => '¿Realmente desea desvincular todos los registros relacionados?',
      'resetPreferencesConfirmation' => '¿Realmente desea restablecer las preferencias default?',
      'removeRecordConfirmation' => '¿Realmente desea eliminar registros?',
      'unlinkRecordConfirmation' => '¿Realmente quiere desligar este registro?',
      'removeSelectedRecordsConfirmation' => '¿Realmente desea eliminar los registros seleccionados?',
      'unlinkSelectedRecordsConfirmation' => 'Estas seguro que deseas desligar los registros seleccionados ?',
      'massUpdateResult' => '{count} registro(s) actualizado(s)',
      'massUpdateResultSingle' => '{count} registro actualizado',
      'recalculateFormulaConfirmation' => 'Are you sure you want to recalculate formula for selected records?',
      'noRecordsUpdated' => 'Ningún registro fue actualizado',
      'massRemoveResult' => '{count} registro(s) eliminado(s)',
      'massRemoveResultSingle' => '{count} registro eliminado',
      'noRecordsRemoved' => 'Ningún registro fue eliminado',
      'clickToRefresh' => 'Clic para actualizar',
      'writeYourCommentHere' => 'Escriba su comentario aquí',
      'writeMessageToUser' => 'Escribir un mensaje a {user}',
      'writeMessageToSelf' => 'Escribe un mensaje en tu flujo',
      'typeAndPressEnter' => 'Teclear y oprimir enter',
      'checkForNewNotifications' => 'Ver si hay nuevas notificaciones',
      'checkForNewNotes' => 'Verificar si hay nuevos flujos',
      'internalPost' => 'La publicación sólo será vista por los usuarios internos',
      'internalPostTitle' => 'Lo publicado sólo lo verán los usuarios internos',
      'done' => 'Enviados',
      'notUpdated' => 'Not updated',
      'confirmMassFollow' => '¿Realmente quieres marcar con seguimiento a los registros seleccionados?',
      'confirmMassUnfollow' => '¿Realmente quieres marcar sin seguimiento a los registros seleccionados?',
      'massFollowResult' => '{count} registro(s) ahora tienen seguimento',
      'massUnfollowResult' => '{count} registro(s) ya no tienen seguimiento',
      'massFollowResultSingle' => '{count} nuevo(s) registro(s) tienen seguimiento',
      'massUnfollowResultSingle' => 'El registro {count} ya no tiene seguimiento',
      'massFollowZeroResult' => 'Nada tiene seguimiento',
      'massUnfollowZeroResult' => 'A nada se le quitó el seguimiento',
      'erasePersonalDataConfirmation' => '¿Realmente desea borrar permanentemente los campos seleccionados?',
      'maintenanceModeError' => 'The application currently is in maintenance mode.',
      'maintenanceMode' => 'The application currently is in maintenance mode. Only admin users have access.

Maintenance mode can be disabled at Administration → Settings.',
      'resolveSaveConflict' => 'The record has been modified. You need to resolve the conflict before you can save the record.',
      'massPrintPdfMaxCountError' => 'No se pueden imprimir mas de {maxCount} registros.',
      'massActionProcessed' => 'Mass action has been processed.',
      'validationFailure' => 'Backend validation failure.

Field: `{field}`
Validation: `{type}`',
      'extensionLicenseInvalid' => 'Invalid \'{name}\' extension license.',
      'extensionLicenseExpired' => 'The \'{name}\' extension license subscription has expired.',
      'extensionLicenseSoftExpired' => 'The \'{name}\' extension license subscription has expired.',
      'confirmAppRefresh' => 'The application has been updated. It is recommended to refresh the page to ensure the proper functioning.',
      'loggedOutLeaveOut' => 'Logged out. The session is inactive. You may lose unsaved form data after page refresh. You may need to make a copy.',
      'noAccessToRecord' => 'Operation requires `{action}` access to record.',
      'noAccessToForeignRecord' => 'Operation requires `{action}` access to foreign record.',
      'noLinkAccess' => 'Can\'t relate with {foreignEntityType} record through the link \'{link}\'. No access.',
      'cannotUnrelateRequiredLink' => 'Can\'t unrelate required link.',
      'cannotRelateNonExisting' => 'Can\'t relate with non-existing {foreignEntityType} record.',
      'cannotRelateForbidden' => 'Can\'t relate with forbidden {foreignEntityType} record. `{action}` access required.',
      'cannotRelateForbiddenLink' => 'No access to link \'{link}\'.',
      'cannotLinkAlreadyLinked' => 'Cannot link an already linked record.',
      'error404' => 'The url you requested can\'t be handled.',
      'error403' => 'You don\'t have an access to this area.',
      'emptyMassUpdate' => 'No fields available for Mass Update.',
      'attemptIntervalFailure' => 'The operation is not allowed during a specific time interval. Wait for some time before the next attempt.',
      'confirmRestoreFromAudit' => 'The previous values will be set in a form. Then you can save the record to restore the previous values.',
      'starsLimitExceeded' => 'The number of stars exceeded the limit.',
      'select2OrMoreRecords' => 'Select 2 or more records',
      'selectNotMoreThanNumberRecords' => 'Select not more than {number} records',
      'selectAtLeastOneRecord' => 'Select at least one record',
      'duplicateConflict' => 'A record already exists.',
      'posting' => 'Publicando...',
      'streamPostInfo' => 'Escriba <strong>@username</strong> para indicar los usuarios de esta publicación.

Sintaxis disponible para los marcadores:
`<code>código</code>`
**<strong>texto en negrita</strong>**
*<em>texto en itálica</em>*
~<del>texto eliminado</del>~
> marcador de bloque
[texto de la liga](url) '
    ],
    'boolFilters' => [
      'onlyMy' => 'Sólo míos',
      'onlyMyTeam' => 'My Team',
      'followed' => 'Con Seguimiento'
    ],
    'presetFilters' => [
      'followed' => 'Con Seguimiento',
      'all' => 'Todos',
      'starred' => 'Starred'
    ],
    'massActions' => [
      'delete' => 'Delete',
      'remove' => 'Eliminar',
      'merge' => 'Generar',
      'update' => 'Update',
      'massUpdate' => 'Actualización Masiva',
      'unlink' => 'Desligar',
      'export' => 'Exportar',
      'follow' => 'Dar seguimiento',
      'unfollow' => 'Quitar seguimiento',
      'convertCurrency' => 'Convertir Moneda',
      'recalculateFormula' => 'Recalculate Formula',
      'printPdf' => 'Imprimir a PDF'
    ],
    'fields' => [
      'name' => 'Nombre',
      'firstName' => 'Nombre',
      'lastName' => 'Apellidos',
      'middleName' => 'Middle Name',
      'salutationName' => 'Saludo',
      'assignedUser' => 'Usuario Asignado',
      'assignedUsers' => 'Usuarios Asignados',
      'emailAddress' => 'Correo electrónico',
      'emailAddressData' => 'Datos de la Dirección de Correo',
      'emailAddressIsOptedOut' => 'La dirección de correo está Confirmada',
      'emailAddressIsInvalid' => 'Email Address is Invalid',
      'assignedUserName' => 'Nombre de Usuario Asignado',
      'teams' => 'Equipos',
      'users' => 'Users',
      'createdAt' => 'Creado en',
      'modifiedAt' => 'Modificado el',
      'createdBy' => 'Creado por',
      'modifiedBy' => 'Modificado Por',
      'description' => 'Descripción',
      'address' => 'Dirección',
      'phoneNumber' => 'Teléfono',
      'phoneNumberMobile' => 'Teléfono (Móvil)',
      'phoneNumberHome' => 'Teléfono (Casa)',
      'phoneNumberFax' => 'Teléfono (Fax)',
      'phoneNumberOffice' => 'Teléfono (Oficina)',
      'phoneNumberOther' => 'Teléfono (Otro)',
      'phoneNumberData' => 'Datos del Número de Teléfono',
      'phoneNumberIsOptedOut' => 'Phone Number is Opted-Out',
      'phoneNumberIsInvalid' => 'Phone Number is Invalid',
      'order' => 'Orden',
      'parent' => 'Padre',
      'children' => 'Hijos',
      'id' => 'ID',
      'ids' => 'ID\'s',
      'type' => 'Tipo',
      'names' => 'Nombres',
      'types' => 'Tipos',
      'targetListIsOptedOut' => 'Se ha Excluido (De la Lista)',
      'childList' => 'Child List',
      'billingAddressCity' => 'Ciudad',
      'billingAddressCountry' => 'País',
      'billingAddressPostalCode' => 'Código Postal',
      'billingAddressState' => 'Estado/Distrito',
      'billingAddressStreet' => 'Calle',
      'billingAddressMap' => 'Mapa',
      'addressCity' => 'Ciudad',
      'addressStreet' => 'Calle',
      'addressCountry' => 'País',
      'addressState' => 'Estado/Distrito',
      'addressPostalCode' => 'Código Postal',
      'addressMap' => 'Mapa',
      'shippingAddressCity' => 'Ciudad (Entrega)',
      'shippingAddressStreet' => 'Calle (Entrega)',
      'shippingAddressCountry' => 'País (Entrega)',
      'shippingAddressState' => 'Estado (Entrega)',
      'shippingAddressPostalCode' => 'Código Postal (Entrega)',
      'shippingAddressMap' => 'Mapa (Entrega)'
    ],
    'links' => [
      'assignedUser' => 'Usuario Asignado',
      'createdBy' => 'Creado por',
      'modifiedBy' => 'Modificado Por',
      'team' => 'Equipo',
      'roles' => 'Roles',
      'teams' => 'Equipos',
      'users' => 'Usuarios',
      'parent' => 'Padre',
      'children' => 'Hijos',
      'contacts' => 'Contactos',
      'opportunities' => 'Oportunidades',
      'leads' => 'Referencias',
      'meetings' => 'Presentaciones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'emails' => 'Correos',
      'accounts' => 'Cuentas',
      'cases' => 'Casos',
      'documents' => 'Documentos',
      'account' => 'Cuenta',
      'opportunity' => 'Oportunidad',
      'contact' => 'Contacto'
    ],
    'dashlets' => [
      'Stream' => 'Flujo',
      'Emails' => 'Mi Bandeja de Entrada',
      'Iframe' => 'Iframe',
      'Records' => 'Lista de Registros',
      'Memo' => 'Memo',
      'Leads' => 'Mis Referencias',
      'Opportunities' => 'Mis Oportunidades',
      'Tasks' => 'Mis Tareas',
      'Cases' => 'Mis Casos',
      'Calendar' => 'Calendario',
      'Calls' => 'Mis Llamadas',
      'Meetings' => 'Mis Presentaciones',
      'OpportunitiesByStage' => 'Oportunidades por Etapa',
      'OpportunitiesByLeadSource' => 'Oportunidades de Fuente de Referencias',
      'SalesByMonth' => 'Ventas por Mes',
      'SalesPipeline' => 'Canalización de Ventas',
      'Activities' => 'Mis Actividades'
    ],
    'notificationMessages' => [
      'assign' => '{entityType} {entity} ha sido asignado a usted',
      'emailReceived' => 'Correo recibido de {from}',
      'entityRemoved' => '{user} ha eliminado {entityType} {entity}',
      'eventAttendee' => '{user} added you to {entityType} {entity}'
    ],
    'streamMessages' => [
      'post' => '{user} a publicado en {entityType} {entity}',
      'attach' => '{user} adjuntado en {entityType} {entity}',
      'status' => '{user} ha actualizado {field} en {entityType} {entity}',
      'update' => '{user} ha actualizado {entityType} {entity}',
      'postTargetTeam' => '{user} publicó en equipo {target}',
      'postTargetTeams' => '{user} publicó en equipos {target}',
      'postTargetPortal' => '{user} publicó en el portal {target}',
      'postTargetPortals' => '{user} publicó en los portales {target}',
      'postTarget' => '{user} publicó en {target}',
      'postTargetYou' => '{user} publicado por usted',
      'postTargetYouAndOthers' => '{user} envió a {target} y a usted',
      'postTargetAll' => '{user} envió a todos',
      'postTargetSelf' => '{user} auto-publicado',
      'postTargetSelfAndOthers' => '{user} publicó en {target} con copia a si mismo',
      'mentionInPost' => '{user} mencionado {mentioned} en {entityType} {entity}',
      'mentionYouInPost' => '{user} te ha mencionado en {entityType} {entity}',
      'mentionInPostTarget' => '{user} mencionó a {mentioned} en el post',
      'mentionYouInPostTarget' => '{user} te ha mencionado en post para {target}',
      'mentionYouInPostTargetAll' => '{user} te ha mencionado en post para todos',
      'mentionYouInPostTargetNoTarget' => '{user} te menciona en el post',
      'create' => '{user} creó {entityType} {entity}',
      'createThis' => '{user} Creó un(a) nuevo(a) {entityType}',
      'createAssignedThis' => '{user} creó este(a) {entityType} asignado(a) a {assignee}',
      'createAssigned' => '{user} creó {entityType} {entity} asignado(a) a {assignee}',
      'createAssignedYou' => '{user} creó {entityType} {entity} y te la asignó',
      'createAssignedThisSelf' => '{user} creó este(a) {entityType} auto-asignado(a)',
      'createAssignedSelf' => '{user} creó {entityType} {entity} auto-asignado(a)',
      'assign' => '{user} ha asignado {entityType} {entity} a {assignee}',
      'assignThis' => '{user} asignar este {entityType} a {assignee}',
      'assignYou' => '{user} te asignó {entityType} {entity}',
      'assignThisVoid' => '{user} desasignó esta {entityType}',
      'assignVoid' => '{user} desasignó {entityType} {entity}',
      'assignThisSelf' => '{user} auto-asignó esta {entityType}',
      'assignSelf' => '{user} auto-asignó {entityType} {entity}',
      'postThis' => '{user} publicado',
      'attachThis' => '{user} adjunto',
      'statusThis' => '{user} actualizado {field}',
      'updateThis' => '{user} actualizado a este {entityType}',
      'createRelatedThis' => '{user} creó {relatedEntityType} {relatedEntity} ligado a este(a) {entityType}',
      'createRelated' => '{user} creó un(a) {relatedEntityType} {relatedEntity} ligado(a) a {entityType} {entity}',
      'relate' => '{user} ligó {relatedEntityType} {relatedEntity} con {entityType} {entity}',
      'relateThis' => '{user} ligó {relatedEntityType} {relatedEntity} con este {entityType}',
      'unrelate' => '{user} unlinked {relatedEntityType} {relatedEntity} from {entityType} {entity}',
      'unrelateThis' => '{user} unlinked {relatedEntityType} {relatedEntity} from this {entityType}',
      'emailReceivedFromThis' => 'Correo recibido de {from}',
      'emailReceivedInitialFromThis' => 'Correo recibido de {from}, este(a) {entityType} creado(a)',
      'emailReceivedThis' => 'El correo {email} ha sido recibido',
      'emailReceivedInitialThis' => 'Correo recibido, este(a) {entityType} ha sido creado(a)',
      'emailReceivedFrom' => 'Correo recibido de {from}, relacionado a {entityType} {entity}',
      'emailReceivedFromInitial' => 'Correo recibido de {from}, {entityType} {entity} creado(a)',
      'emailReceived' => 'Se recibió el correo {email} para su {entityType} {entity}',
      'emailReceivedInitial' => 'Correo recibido: {entityType} {entity} creado(a)',
      'emailReceivedInitialFrom' => 'Correo recibido de {from}, {entityType} {entity} creado(a)',
      'emailSent' => '{by} envió un correo relacionado a {entityType} {entity}',
      'emailSentThis' => '{by} envió un correo',
      'eventConfirmationAccepted' => '{invitee} accepted participation in {entityType} {entity}',
      'eventConfirmationDeclined' => '{invitee} declined participation in {entityType} {entity}',
      'eventConfirmationTentative' => '{invitee} is tentative about participation in {entityType} {entity}',
      'eventConfirmationAcceptedThis' => '{invitee} accepted participation',
      'eventConfirmationDeclinedThis' => '{invitee} declined participation',
      'eventConfirmationTentativeThis' => '{invitee} is tentative about participation'
    ],
    'streamMessagesMale' => [
      'postTargetSelfAndOthers' => '{user} publicó a {target} con copia para sí mismo'
    ],
    'streamMessagesFemale' => [
      'postTargetSelfAndOthers' => '{user} publicó a {target} y a sí mismo'
    ],
    'lists' => [
      'monthNames' => [
        0 => 'Enero',
        1 => 'Febrero',
        2 => 'Marzo',
        3 => 'Abril',
        4 => 'Mayo',
        5 => 'Junio',
        6 => 'Julio',
        7 => 'Agosto',
        8 => 'Septiembre',
        9 => 'Octubre',
        10 => 'Noviembre',
        11 => 'Diciembre'
      ],
      'monthNamesShort' => [
        0 => 'Ene',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Abr',
        4 => 'May',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Ago',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dic'
      ],
      'dayNames' => [
        0 => 'Domingo',
        1 => 'Lunes',
        2 => 'Martes',
        3 => 'Miércoles',
        4 => 'Jueves',
        5 => 'Viernes',
        6 => 'Sábado'
      ],
      'dayNamesShort' => [
        0 => 'Dom',
        1 => 'Lun',
        2 => 'Mar',
        3 => 'Mie',
        4 => 'Jue',
        5 => 'Vie',
        6 => 'Sab'
      ],
      'dayNamesMin' => [
        0 => 'Do',
        1 => 'Lu',
        2 => 'Ma',
        3 => 'Mi',
        4 => 'Ju',
        5 => 'Vi',
        6 => 'Sa'
      ]
    ],
    'durationUnits' => [
      'd' => 'd',
      'h' => 'h',
      'm' => 'm',
      's' => 's'
    ],
    'options' => [
      'salutationName' => [
        'Mr.' => 'Sr.',
        'Mrs.' => 'Sra.',
        'Ms.' => 'Srta.',
        'Dr.' => 'Dr.'
      ],
      'language' => [
        'ar_AR' => 'Arabic',
        'af_ZA' => 'Afrikáans',
        'az_AZ' => 'Azerbaiyán',
        'be_BY' => 'Bielorruso',
        'bg_BG' => 'Bulgaro',
        'bn_IN' => 'Bengalí',
        'bs_BA' => 'Bosnio',
        'ca_ES' => 'Catalán',
        'cs_CZ' => 'Checo',
        'cy_GB' => 'Galés',
        'da_DK' => 'Danés',
        'de_DE' => 'Alemán',
        'el_GR' => 'Griego',
        'en_GB' => 'Inglés (UK)',
        'es_MX' => 'Español (México)',
        'en_US' => 'Inglés (US)',
        'es_ES' => 'Español (España)',
        'et_EE' => 'Estonio',
        'eu_ES' => 'Vasco',
        'fa_IR' => 'Persa',
        'fi_FI' => 'Finlandés',
        'fo_FO' => 'Feroés',
        'fr_CA' => 'Francés (Canada)',
        'fr_FR' => 'Francés (Francia)',
        'ga_IE' => 'Irlandés',
        'gl_ES' => 'Gallego',
        'gn_PY' => 'Guaraní',
        'he_IL' => 'Hebreo',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croata',
        'hu_HU' => 'Hungaro',
        'hy_AM' => 'Armenio',
        'id_ID' => 'Indonesio',
        'is_IS' => 'Islandés',
        'it_IT' => 'Italiano',
        'ja_JP' => 'Japonés',
        'ka_GE' => 'Georgiano',
        'km_KH' => 'Camboyano',
        'ko_KR' => 'Coreano',
        'ku_TR' => 'Kurdo',
        'lt_LT' => 'Lituano',
        'lv_LV' => 'Latón',
        'mk_MK' => 'Macedonio',
        'ml_IN' => 'Malabar',
        'ms_MY' => 'Malayo',
        'nb_NO' => 'Noruego Bokmål',
        'nn_NO' => 'Noruego Nynorsk',
        'ne_NP' => 'Nepalí',
        'nl_NL' => 'Holandés',
        'pa_IN' => 'Punyabí',
        'pl_PL' => 'Polaco',
        'ps_AF' => 'Pastún',
        'pt_BR' => 'Portugués (Brasil)',
        'pt_PT' => 'Portugués (Portugal)',
        'ro_RO' => 'Rumano',
        'ru_RU' => 'Ruso',
        'sk_SK' => 'Eslovaco',
        'sl_SI' => 'Esloveno',
        'sq_AL' => 'Albanés',
        'sr_RS' => 'Serbio',
        'sv_SE' => 'Sueco',
        'sw_KE' => 'Suajili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Télugu',
        'th_TH' => 'Tailandés',
        'tl_PH' => 'Tagalo',
        'tr_TR' => 'Turco',
        'uk_UA' => 'Ucraniano',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamita',
        'zh_CN' => 'Chino Simplificado (China)',
        'zh_HK' => 'Chino Tradicional (Hong Kong)',
        'zh_TW' => 'Chino Traditional (Taiwán)'
      ],
      'dateSearchRanges' => [
        'on' => 'En',
        'notOn' => 'No está en',
        'after' => 'Después',
        'before' => 'Antes',
        'between' => 'Entre',
        'today' => 'Hoy',
        'past' => 'Pasado',
        'future' => 'Futuro',
        'currentMonth' => 'Mes Actual',
        'lastMonth' => 'Mes Pasado',
        'nextMonth' => 'Siguiente mes',
        'currentQuarter' => 'Trimestre Actual',
        'lastQuarter' => 'Trimestre Pasado',
        'currentYear' => 'Año Actual',
        'lastYear' => 'Año Pasado',
        'lastSevenDays' => 'Últimos 7 Días',
        'lastXDays' => 'Últimos X Días',
        'nextXDays' => 'Próximos X Días',
        'ever' => 'Nunca',
        'isEmpty' => 'Está Vacío',
        'olderThanXDays' => 'Mayor de "X" Días',
        'afterXDays' => 'Después de "X" Días',
        'currentFiscalYear' => 'Año Fiscal Actual',
        'lastFiscalYear' => 'Último Año Fiscal',
        'currentFiscalQuarter' => 'Trimestre Fiscal Actual',
        'lastFiscalQuarter' => 'Último Trimestre Fiscal'
      ],
      'searchRanges' => [
        'is' => 'Es',
        'isEmpty' => 'Está vacío',
        'isNotEmpty' => 'No Está Vacío',
        'isOneOf' => 'Cualquiera',
        'isFromTeams' => 'Es del Equipo',
        'isNot' => 'No Es',
        'isNotOneOf' => 'Ninguno De',
        'anyOf' => 'Cualquiera',
        'allOf' => 'All Of',
        'noneOf' => 'Ninguno De',
        'any' => 'Any'
      ],
      'varcharSearchRanges' => [
        'equals' => 'Equivale',
        'like' => 'Es Como (%)',
        'notLike' => 'No es como (%)',
        'startsWith' => 'Comienza con',
        'endsWith' => 'Termina Con',
        'contains' => 'Contiene',
        'notContains' => 'No Contiene',
        'isEmpty' => 'Está vacío',
        'isNotEmpty' => 'No Está Vacío',
        'notEquals' => 'No es Igual a'
      ],
      'intSearchRanges' => [
        'equals' => 'Equivale',
        'notEquals' => 'Diferentes',
        'greaterThan' => 'Mayor que',
        'lessThan' => 'Menor que',
        'greaterThanOrEquals' => 'Mayor o igual que',
        'lessThanOrEquals' => 'Menor o igual que',
        'between' => 'Entre',
        'isEmpty' => 'Está vacío',
        'isNotEmpty' => 'No está vacío'
      ],
      'autorefreshInterval' => [
        0 => 'Ninguno',
        '0.5' => '30 segundos',
        1 => '1 minuto',
        2 => '2 minutos',
        5 => '5 minutos',
        10 => '10 minutos'
      ],
      'phoneNumber' => [
        'Mobile' => 'Teléfono móvil',
        'Office' => 'Oficina',
        'Fax' => 'Fax',
        'Home' => 'Hogar',
        'Other' => 'Otro'
      ],
      'saveConflictResolution' => [
        'current' => 'Current',
        'actual' => 'Actual',
        'original' => 'Original'
      ],
      'reminderTypes' => [
        'Popup' => 'Ventana emergente',
        'Email' => 'Correo electrónico'
      ]
    ],
    'sets' => [
      'summernote' => [
        'NOTICE' => 'Usted puede encontrar aquí la traducción: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => [
          'bold' => 'Negrita',
          'italic' => 'Itálico',
          'underline' => 'Subrayado',
          'strike' => 'Tachado',
          'clear' => 'Quitar Estilo de Fuente',
          'height' => 'Alto de línea',
          'name' => 'Familia de Fuente',
          'size' => 'Tamaño de Fuente'
        ],
        'image' => [
          'image' => 'Visualización',
          'insert' => 'Insertar Imagen',
          'resizeFull' => 'Cambiar el tamaño a completo',
          'resizeHalf' => 'Cambiar el tamaño a la mitad',
          'resizeQuarter' => 'Cambiar el tamaño a un cuarto',
          'floatLeft' => 'Flotante (izq)',
          'floatRight' => 'Flotante (der)',
          'floatNone' => 'Sin Flotar',
          'dragImageHere' => 'Arrastre la imagen aquí',
          'selectFromFiles' => 'Seleccionar desde Archivo',
          'url' => 'Url de Imagen',
          'remove' => 'Eliminar Imagen'
        ],
        'link' => [
          'link' => 'Enlace',
          'insert' => 'Insertar Enlace',
          'unlink' => 'Desligar',
          'edit' => 'Editar',
          'textToDisplay' => 'Texto a mostrar',
          'url' => '¿A que URL debería ir este enlace?',
          'openInNewWindow' => 'Abrir en nueva ventana'
        ],
        'video' => [
          'video' => 'Video',
          'videoLink' => 'Enlace al Video',
          'insert' => 'Insertar Video',
          'url' => '¿URL del Video?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)'
        ],
        'table' => [
          'table' => 'Tabla'
        ],
        'hr' => [
          'insert' => 'Insertar regla horizontal'
        ],
        'style' => [
          'style' => 'Estilo',
          'normal' => 'Normal',
          'blockquote' => 'Cita',
          'pre' => 'Código',
          'h1' => 'Encabezado 1',
          'h2' => 'Encabezado 2',
          'h3' => 'Encabezado 3',
          'h4' => 'Encabezado 4',
          'h5' => 'Encabezado 5',
          'h6' => 'Encabezado 6'
        ],
        'lists' => [
          'unordered' => 'Lista sin Ordenar',
          'ordered' => 'Lista Ordenada'
        ],
        'options' => [
          'help' => 'Ayuda',
          'fullscreen' => 'Pantalla Completa',
          'codeview' => 'Ver Código'
        ],
        'paragraph' => [
          'paragraph' => 'Párrafo',
          'outdent' => 'Anular sangría',
          'indent' => 'Sangría',
          'left' => 'Alinear Izquierda',
          'center' => 'Alinear Centro',
          'right' => 'Alinear Derecha',
          'justify' => 'Justificado'
        ],
        'color' => [
          'recent' => 'Color Reciente',
          'more' => 'Mas Colores',
          'background' => 'Color de Fondo',
          'foreground' => 'Color de Fuente',
          'transparent' => 'Transparente',
          'setTransparent' => 'Definir como transparente',
          'reset' => 'Restablecer',
          'resetToDefault' => 'Restablecer el original'
        ],
        'shortcut' => [
          'shortcuts' => 'Atajos de teclado',
          'close' => 'Cerrar',
          'textFormatting' => 'Formato de texto',
          'action' => 'Acción',
          'paragraphFormatting' => 'Formato de párrafo',
          'documentStyle' => 'Estilo de Documento'
        ],
        'history' => [
          'undo' => 'Deshacer',
          'redo' => 'Rehacer'
        ]
      ]
    ],
    'listViewModes' => [
      'list' => 'Lista',
      'kanban' => 'Tarjetas'
    ],
    'themes' => [
      'Dark' => 'Dark',
      'Light' => 'Light',
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL',
      'Sakura' => 'Sakura',
      'Violet' => 'Violet',
      'Hazyblue' => 'Hazyblue',
      'Glass' => 'Glass'
    ],
    'themeNavbars' => [
      'side' => 'Side Navbar',
      'top' => 'Top Navbar'
    ],
    'fieldValidations' => [
      'required' => 'Required',
      'maxCount' => 'Max Count',
      'maxLength' => 'Max Length',
      'pattern' => 'Pattern Matching',
      'emailAddress' => 'Valid Email Address',
      'phoneNumber' => 'Valid Phone Number',
      'array' => 'Array',
      'arrayOfString' => 'Array of Strings',
      'valid' => 'Validity',
      'noEmptyString' => 'No Empty String',
      'max' => 'Max Value',
      'min' => 'Min Value'
    ],
    'fieldValidationExplanations' => [
      'valid' => 'Invalid value.',
      'maxLength' => 'Value length exceeds maximum value.',
      'phone_valid' => 'Phone number is not valid. May be caused by a wrong or empty country code.',
      'url_valid' => 'Invalid URL value.',
      'currency_valid' => 'Invalid amount value.',
      'currency_validCurrency' => 'The currency code value is invalid or not allowed.',
      'varchar_pattern' => 'Likely, the value contains not allowed characters.',
      'email_emailAddress' => 'Invalid email address value.',
      'phone_phoneNumber' => 'Invalid phone number value.',
      'datetimeOptional_valid' => 'Invalid date-time value.',
      'datetime_valid' => 'Invalid date-time value.',
      'date_valid' => 'Invalid date value.',
      'enum_valid' => 'Invalid enum value. The value must be one of defined enum options. An empty value is allowed only if the field has an empty option.',
      'int_valid' => 'Invalid integer number value.',
      'float_valid' => 'Invalid number value.',
      'multiEnum_valid' => 'Invalid multi-enum value. Values must be one of defined field options.'
    ],
    'navbarTabs' => [
      'Business' => 'Business',
      'Marketing' => 'Marketing',
      'Support' => 'Support',
      'CRM' => 'CRM',
      'Activities' => 'Activities'
    ],
    'wysiwygLabels' => [
      'cell' => 'Cell',
      'align' => 'Align',
      'width' => 'Width',
      'height' => 'Height',
      'borderWidth' => 'Border Width',
      'borderColor' => 'Border Color',
      'cellPadding' => 'Cell Padding',
      'backgroundColor' => 'Background Color',
      'verticalAlign' => 'Vertical Align'
    ],
    'wysiwygOptions' => [
      'align' => [
        'left' => 'Left',
        'center' => 'Center',
        'right' => 'Right'
      ],
      'verticalAlign' => [
        'top' => 'Top',
        'middle' => 'Middle',
        'bottom' => 'Bottom'
      ]
    ],
    'detailViewModes' => [
      'detail' => 'Detail'
    ]
  ],
  'GroupEmailFolder' => [
    'links' => [
      'emails' => 'Emails'
    ],
    'labels' => [
      'Create GroupEmailFolder' => 'Create Folder'
    ]
  ],
  'Import' => [
    'labels' => [
      'New import with same params' => 'New import with same params',
      'Revert Import' => 'Revertir Importación',
      'Return to Import' => 'Regresar a Importación',
      'Run Import' => 'Ejecutar Importación',
      'Back' => 'Anterior',
      'Field Mapping' => 'Mapeo de Campo',
      'Default Values' => 'Valores Default',
      'Add Field' => 'Agregar Campo',
      'Created' => 'Creado(a)',
      'Updated' => 'Actualizado',
      'Result' => 'Resultado',
      'Show records' => 'Mostrar registros',
      'Remove Duplicates' => 'Eliminar Duplicados	',
      'importedCount' => 'Importado (recuento)',
      'duplicateCount' => 'Duplicados (recuento)',
      'updatedCount' => 'Actualizado (recuento)',
      'Create Only' => 'Sólo Crear',
      'Create and Update' => 'Crear y Actualizar',
      'Update Only' => 'Sólo Actualizar',
      'Update by' => 'Actualizado por',
      'Set as Not Duplicate' => 'Establecer como No Duplicado',
      'File (CSV)' => 'Archivo (CSV)',
      'First Row Value' => 'Valor del Primer Renglón',
      'Skip' => 'Saltar',
      'Header Row Value' => 'Valor del Encabezado',
      'Field' => 'Campo',
      'What to Import?' => '¿Qué va a importar?',
      'Entity Type' => 'Tipo de Entidad',
      'What to do?' => '¿Qué hacer?',
      'Properties' => 'Propiedades',
      'Header Row' => 'Renglón de Encabezado',
      'Person Name Format' => 'Formato del Nombre de la Persona',
      'John Smith' => 'Pedro Pérez',
      'Smith John' => 'Pérez Pedro',
      'Smith, John' => 'Perez, Pedro',
      'Field Delimiter' => 'Delimitante del Campo',
      'Date Format' => 'Formato de la Fecha',
      'Decimal Mark' => 'Separador Decimal',
      'Text Qualifier' => 'Calificador del Texto',
      'Time Format' => 'Formato de Hora',
      'Currency' => 'Moneda',
      'Preview' => 'Vista previa',
      'Next' => 'Siguiente',
      'Step 1' => 'Paso 1',
      'Step 2' => 'Paso 2',
      'Double Quote' => 'Comillas dobles',
      'Single Quote' => 'Comillas sencillas',
      'Imported' => 'Importado',
      'Duplicates' => 'Duplicados',
      'Skip searching for duplicates' => 'No buscar duplicados',
      'Timezone' => 'Zona horaria',
      'Remove Import Log' => 'Eliminar Historial de Importaciones',
      'New Import' => 'Nueva Importación',
      'Import Results' => 'Resultados de la Importación',
      'Run Manually' => 'Run Manually',
      'Silent Mode' => 'Modo silencioso',
      'Export' => 'Export'
    ],
    'messages' => [
      'importRunning' => 'Import running...',
      'noErrors' => 'No errors',
      'utf8' => 'Debe ser codificado en UTF-8',
      'duplicatesRemoved' => 'Duplicados removidos',
      'inIdle' => 'Ejecutar fuera de la sesión (para grandes volúmenes de datos, vía cron-job)',
      'revert' => 'Esta acción eliminará permanentemente todos los registros importados.',
      'removeDuplicates' => 'Esta acción eliminará permanentemente todos los registros importados que sean duplicados.',
      'confirmRevert' => '¿Realmente desea eliminar permanentemente todos los registros importados?',
      'confirmRemoveDuplicates' => '¿Realmente desea eliminar permanentemente todos los registros importados que sean duplicados?',
      'confirmRemoveImportLog' => 'Esta acción eliminará el historial de importación. Todos los registros importados se conservarán, pero ya no podrá deshacer la importación. ¿Realmente desea hacerlo?',
      'removeImportLog' => 'Esta acción eliminará el historial de importación. Todos los registros importados se conservarán.  Hágalo sólo si la importación fue correcta.'
    ],
    'params' => [
      'phoneNumberCountry' => 'Telephone country code'
    ],
    'fields' => [
      'file' => 'Archivo',
      'entityType' => 'Tipo de Entidad',
      'imported' => 'Registros Importados',
      'duplicates' => 'registros Duplicados',
      'updated' => 'registros Actualizados',
      'status' => 'Estátus'
    ],
    'links' => [
      'errors' => 'Errors'
    ],
    'options' => [
      'status' => [
        'Failed' => 'Falló',
        'Standby' => 'Standby',
        'Pending' => 'Pending',
        'In Process' => 'En Proceso',
        'Complete' => 'Terminó'
      ],
      'personNameFormat' => [
        'f l' => 'First Last',
        'l f' => 'Last First',
        'f m l' => 'First Middle Last',
        'l f m' => 'Last First Middle',
        'l, f' => 'Last, First'
      ]
    ],
    'strings' => [
      'commandToRun' => 'Command to run (from CLI)',
      'saveAsDefault' => 'Save as default'
    ],
    'tooltips' => [
      'manualMode' => 'If checked, you will need to run import manually from CLI. Command will be shown after setting up the import.',
      'silentMode' => 'A majority of after-save scripts will be skipped, stream notes won\'t be created. Import will run faster.'
    ]
  ],
  'ImportError' => [
    'fields' => [
      'type' => 'Type',
      'validationFailures' => 'Validation Failures',
      'import' => 'Import',
      'rowIndex' => 'Row Index',
      'exportRowIndex' => 'Export Row Index',
      'lineNumber' => 'Line Number',
      'exportLineNumber' => 'Export Line Number',
      'row' => 'Row',
      'entityType' => 'Entity Type'
    ],
    'options' => [
      'type' => [
        'Validation' => 'Validation',
        'Access' => 'Access',
        'Not-Found' => 'Not-Found'
      ]
    ],
    'tooltips' => [
      'lineNumber' => 'A line number in the original CSV.',
      'exportLineNumber' => 'A line number in the export CSV.'
    ]
  ],
  'InboundEmail' => [
    'fields' => [
      'name' => 'Nombre',
      'emailAddress' => 'Correo Electrónico',
      'team' => 'Equipo del Interés',
      'status' => 'Estado',
      'assignToUser' => 'Asignar al Usuario',
      'host' => 'Servidor',
      'username' => 'Nombre de Usuario',
      'password' => 'Contraseña',
      'port' => 'Puerto',
      'monitoredFolders' => 'Carpetas supervisadas',
      'trashFolder' => 'Carpeta del Basurero',
      'security' => 'Security',
      'createCase' => 'Crear Caso',
      'reply' => 'Respuesta Automática',
      'caseDistribution' => 'Distribución de Caso',
      'replyEmailTemplate' => 'Plantilla de Respuesta de Correo',
      'replyFromAddress' => 'Respuesta de la Dirección',
      'replyToAddress' => 'Responder a la Dirección',
      'replyFromName' => 'Respuesta de Nombre',
      'targetUserPosition' => 'Interés Posición Usuario',
      'fetchSince' => 'Obtener Desde',
      'addAllTeamUsers' => 'Para todos los usuarios del equipo',
      'teams' => 'Equipos',
      'sentFolder' => 'Carpeta Enviada',
      'storeSentEmails' => 'Guardar correos enviados',
      'keepFetchedEmailsUnread' => 'Keep Fetched Emails Unread',
      'connectedAt' => 'Connected At',
      'excludeFromReply' => 'Exclude from Reply',
      'useImap' => 'Obtener Correos',
      'useSmtp' => 'Usar SMTP',
      'smtpHost' => 'Servidor SMTP',
      'smtpPort' => 'Puerto SMTP',
      'smtpAuth' => 'Configuración SMTP',
      'smtpSecurity' => 'Seguridad SMTP',
      'smtpAuthMechanism' => 'SMTP Auth Mechanism',
      'smtpUsername' => 'Nombre SMTP',
      'smtpPassword' => 'Contraseña SMTP',
      'fromName' => 'Remitente',
      'smtpIsShared' => 'SMTP es compartido',
      'smtpIsForMassEmail' => 'SMTP es para correo masivo',
      'groupEmailFolder' => 'Group Email Folder',
      'isSystem' => 'Is System'
    ],
    'tooltips' => [
      'isSystem' => 'Is the system email account.',
      'useSmtp' => 'The ability to send emails.',
      'reply' => 'Notifique a los remitentes de correo que han recibido sus mensajes.

 Sólo un correo será enviado a un destinatario particular durante un período de tiempo para evitar bucles.',
      'createCase' => 'Crear un caso automaticamente, al recibir correos entrantes.',
      'replyToAddress' => 'Especifique la dirección de correo de este buzón para hacer que las respuestas vegan aquí.',
      'caseDistribution' => '¿Cómo serán asignados a los casos? Asignados directamente a un usuario o al equipo.',
      'assignToUser' => 'Los casos del usuario serán reasignados.',
      'team' => 'Los casos del equipo serán reasignados.',
      'teams' => 'Los correos del equipo serán reasignados.',
      'targetUserPosition' => 'Los Usuarios con una posición específica serán distribuidos en los casos.',
      'addAllTeamUsers' => 'Los correos aparecerán en el buzón de entrada de todos los usuarios de los equipos especificados.',
      'monitoredFolders' => 'Si usa varias carpetas, sepárelas con coma',
      'smtpIsShared' => 'Si está marcado, los usuarios podrán enviar correos usando este servicio de SMTP.  La disponibilidad se controla con los Roles, a través de los permisos de Grupos de Cuentas de Correo.',
      'smtpIsForMassEmail' => 'Si lo marca, el SMTP estará disponible para envíos masivos de correo.',
      'storeSentEmails' => 'Los correos enviados serán guardados en el servidor IMAP.',
      'groupEmailFolder' => 'Put incoming emails in a group folder.',
      'excludeFromReply' => 'When replying on emails sent to this account\'s email address, its email address won\'t be added to CC.

Note that by enabling this parameter, the email address of this account will be exposed to users who have access to send Emails.'
    ],
    'links' => [
      'filters' => 'Filtros',
      'emails' => 'Correos',
      'assignToUser' => 'Asignar a Usuario',
      'groupEmailFolder' => 'Group Email Folder'
    ],
    'options' => [
      'status' => [
        'Active' => 'Activo',
        'Inactive' => 'Inactivo'
      ],
      'caseDistribution' => [
        '' => 'Ninguno',
        'Direct-Assignment' => 'Asignación directa',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Menos Ocupado'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN',
        'login' => 'LOGIN',
        'crammd5' => 'CRAM-MD5'
      ]
    ],
    'labels' => [
      'Create InboundEmail' => 'Crear Cuenta de Correo',
      'IMAP' => 'IMAP',
      'Actions' => 'Acciones',
      'Main' => 'Principal'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'No se pudo conectar con el servidor IMAP',
      'imapNotConnected' => 'Could not connect to group [IMAP account](#InboundEmail/view/{id}).'
    ]
  ],
  'Integration' => [
    'fields' => [
      'enabled' => 'Activado',
      'clientId' => 'ID Cliente',
      'clientSecret' => 'Secreto Cliente',
      'redirectUri' => 'Redireccionar URI',
      'apiKey' => 'Llave API'
    ],
    'titles' => [
      'GoogleMaps' => 'Mapas de Google'
    ],
    'messages' => [
      'selectIntegration' => 'Seleccionar una integración en menú',
      'noIntegrations' => 'No hay integraciones disponibles'
    ],
    'help' => [
      'Google' => '<p><b>Obtener las credenciales de  OAuth 2.0 desde la Consola de Google Developers.</b></p><p>Visita <a href="https://console.developers.google.com/project">Consola Google Developers</a> para obtener las credenciales de  OAuth 2.0 tales como  ID Cliente y Secreto de Cliente que son conocidos por ambos Google y la aplicación EspoCRM.</p>',
      'GoogleMaps' => '
 <p>Obtenga la llave API <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">aquí</a>.</p> '
    ]
  ],
  'Job' => [
    'fields' => [
      'status' => 'Estado',
      'executeTime' => 'Ejecutar a',
      'executedAt' => 'Executed At',
      'startedAt' => 'Started At',
      'attempts' => 'Intentos Izquierda',
      'failedAttempts' => 'Intentos Fallidos',
      'serviceName' => 'Servicio',
      'method' => 'Método (obsoleto)',
      'methodName' => 'Método',
      'scheduledJob' => 'Tarea Agendada',
      'scheduledJobJob' => 'Nombre del Trabajo Agendado',
      'data' => 'Datos',
      'targetType' => 'Target Type',
      'targetId' => 'Target ID',
      'number' => 'Number',
      'queue' => 'Queue',
      'group' => 'Group',
      'className' => 'Class Name',
      'targetGroup' => 'Target Group',
      'job' => 'Job'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pendiente',
        'Success' => 'Correcto',
        'Running' => 'en ejecución...',
        'Failed' => 'Falló'
      ]
    ]
  ],
  'LayoutManager' => [
    'fields' => [
      'width' => 'Ancho (%)',
      'link' => 'Enlace',
      'notSortable' => 'No ordenable',
      'align' => 'Alinear',
      'panelName' => 'Nombre del Panel',
      'style' => 'Estilo',
      'sticked' => 'Pegado',
      'isMuted' => 'Muted color',
      'isLarge' => 'Tamaño de fuente grande',
      'hidden' => 'Hidden',
      'noLabel' => 'No Label',
      'dynamicLogicVisible' => 'Condiciones que hacen visible el panel',
      'dynamicLogicStyled' => 'Conditions making style applied',
      'tabLabel' => 'Tab Label',
      'tabBreak' => 'Tab-Break',
      'noteText' => 'Note Text',
      'noteStyle' => 'Note Style'
    ],
    'options' => [
      'align' => [
        'left' => 'Izquierda',
        'right' => 'Derecha'
      ],
      'style' => [
        'default' => 'Default',
        'success' => 'Correcto',
        'danger' => 'Peligro',
        'info' => 'Info',
        'warning' => 'Precaución',
        'primary' => 'Primario'
      ]
    ],
    'labels' => [
      'New panel' => 'Nuevo panel',
      'Layout' => 'Formato'
    ],
    'messages' => [
      'alreadyExists' => 'Layout `{name}` already exists.',
      'createInfo' => 'Custom list layouts can be used by relationship panels.',
      'cantBeEmpty' => 'Layout can\'t be empty.',
      'fieldsIncompatible' => 'Fields can\'t be on the layout together: {fields}.'
    ],
    'tooltips' => [
      'noteText' => 'A text to be displayed in the panel. Markdown is supported.',
      'tabBreak' => 'A separate tab for the panel and all following panels until the next tab-break.',
      'noLabel' => 'Don\'t display a column label in the header.',
      'notSortable' => 'Disables the ability to sort by the column.',
      'width' => 'A column width. It\'s recommended to have one column without specified width, usually it should be the *Name* field.',
      'sticked' => 'The panel will be sticked to the panel above. No gap between panels.',
      'hiddenPanel' => 'Need to click \'show more\' to see the panel.',
      'panelStyle' => 'A color of the panel.',
      'dynamicLogicVisible' => 'If set, the panel will be hidden unless the condition is met.',
      'dynamicLogicStyled' => 'A color will be applied if a specific condition is met . The color is defined by the *Style* parameter.',
      'link' => 'If checked, then a field value will be displayed as a link pointing to the detail view of the record. Usually it is used for *Name* fields.'
    ]
  ],
  'LayoutSet' => [
    'fields' => [
      'layoutList' => 'Layouts'
    ],
    'labels' => [
      'Create LayoutSet' => 'Create Layout Set',
      'Edit Layouts' => 'Edit Layouts'
    ],
    'tooltips' => []
  ],
  'LeadCapture' => [
    'fields' => [
      'name' => 'Nombre',
      'campaign' => 'Campaña',
      'isActive' => 'Está Activo',
      'subscribeToTargetList' => 'Suscribirse a Lista de Intereses',
      'subscribeContactToTargetList' => 'Suscribirse al Contacto, si existe',
      'targetList' => 'Lista de Intereses',
      'fieldList' => 'Campos de Propiedades',
      'optInConfirmation' => 'Doble Opt-In',
      'optInConfirmationEmailTemplate' => 'Plantilla de correo para confirmar Opt-In',
      'optInConfirmationLifetime' => 'Rango de Validez (en horas) de la confirmación Opt-In',
      'optInConfirmationSuccessMessage' => 'Texto para mostrar después de la confirmación Opt-In',
      'leadSource' => 'Referencia Orígen',
      'apiKey' => 'Llave API',
      'targetTeam' => 'Equipo Interesante',
      'exampleRequestMethod' => 'Método',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Propiedades',
      'exampleRequestHeaders' => 'Headers',
      'createLeadBeforeOptInConfirmation' => 'Create Lead before confirmation',
      'skipOptInConfirmationIfSubscribed' => 'Skip confirmation if lead is already in target list',
      'smtpAccount' => 'SMTP Account',
      'inboundEmail' => 'Group Email Account',
      'duplicateCheck' => 'Duplicate Check',
      'phoneNumberCountry' => 'Telephone country code'
    ],
    'links' => [
      'targetList' => 'Lista de Intereses',
      'campaign' => 'Campaña',
      'optInConfirmationEmailTemplate' => 'Plantilla de confirmación de Opt-In',
      'targetTeam' => 'Equipo Interesante',
      'inboundEmail' => 'Group Email Account',
      'logRecords' => 'Historial'
    ],
    'labels' => [
      'Create LeadCapture' => 'Crear Punto de Entrada',
      'Generate New API Key' => 'Generar Nueva Llave API',
      'Request' => 'Solicitud',
      'Confirm Opt-In' => 'Confirmar Opt-In'
    ],
    'messages' => [
      'generateApiKey' => 'Crear Nueva Llave API',
      'optInConfirmationExpired' => 'La liga para confirmación de Opt-In ha expirado.',
      'optInIsConfirmed' => 'El Opt-In se ha confirmado.'
    ],
    'tooltips' => [
      'optInConfirmationSuccessMessage' => 'Soporta Reducción'
    ]
  ],
  'LeadCaptureLogRecord' => [
    'fields' => [
      'number' => 'Número',
      'data' => 'Dato',
      'target' => 'Interés',
      'leadCapture' => 'Capturar Referencia',
      'createdAt' => 'Ingresado el',
      'isCreated' => 'La Referencia fue creada'
    ],
    'links' => [
      'leadCapture' => 'Capturar Referencia',
      'target' => 'Interés'
    ]
  ],
  'MassAction' => [
    'fields' => [
      'status' => 'Status',
      'processedCount' => 'Processed Count'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pending',
        'Running' => 'Running',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ],
    'messages' => [
      'infoText' => 'The mass action is being processed in idle by cron. It can take some time to finish. Closing this modal dialog won\'t affect the execution process.'
    ]
  ],
  'Note' => [
    'fields' => [
      'post' => 'Guardar',
      'attachments' => 'Adjuntos',
      'targetType' => 'Interés',
      'teams' => 'Equipos',
      'users' => 'Usuarios',
      'portals' => 'Portales',
      'type' => 'Tipo',
      'isGlobal' => 'Es Global',
      'isInternal' => 'Es interno (para usuarios internos)',
      'isPinned' => 'Is Pinned',
      'related' => 'Relacionada',
      'createdByGender' => 'Creado(a) por Género',
      'data' => 'Datos',
      'number' => 'Número'
    ],
    'filters' => [
      'all' => 'Todos',
      'posts' => 'Entradas',
      'updates' => 'Actualizaciones',
      'activity' => 'Activity'
    ],
    'options' => [
      'targetType' => [
        'self' => 'a mi mismo',
        'users' => 'a usuario(s) en particular',
        'teams' => 'a equipo(s) en particular',
        'all' => 'a todos los usuarios internos',
        'portals' => 'a los usuarios del portal'
      ],
      'type' => [
        'Post' => 'Publicar',
        'Create' => 'Create',
        'CreateRelated' => 'Create Related',
        'Update' => 'Update',
        'Status' => 'Status',
        'Assign' => 'Assign',
        'Relate' => 'Relate',
        'Unrelate' => 'Unrelate',
        'EmailReceived' => 'Email Received',
        'EmailSent' => 'Email Sent'
      ]
    ],
    'labels' => [
      'View Posts' => 'View Posts',
      'View Activity' => 'View Activity',
      'Pin' => 'Pin',
      'Unpin' => 'Unpin',
      'Pinned' => 'Pinned'
    ],
    'messages' => [
      'writeMessage' => 'Escriba su mensaje aquí',
      'pinnedMaxCountExceeded' => 'Cannot pin more notes. Max allowed number is {count}.'
    ],
    'links' => [
      'portals' => 'Portals',
      'attachments' => 'Attachments',
      'superParent' => 'Super Padre',
      'related' => 'Relacionado'
    ]
  ],
  'PhoneNumber' => [
    'fields' => [
      'type' => 'Type',
      'optOut' => 'Opted Out',
      'invalid' => 'Invalid',
      'numeric' => 'Numeric Value'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'Portal' => [
    'fields' => [
      'name' => 'Nombre',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Roles',
      'isActive' => 'Está Activo',
      'isDefault' => 'Es Default',
      'tabList' => 'Lista de Tabuladores',
      'quickCreateList' => 'Crear Lista Rápida',
      'companyLogo' => 'Logo',
      'theme' => 'Tema',
      'language' => 'Idioma',
      'dashboardLayout' => 'Diseño del Tablero',
      'dateFormat' => 'Formato de Fecha',
      'timeFormat' => 'Formato de Hora',
      'timeZone' => 'Zona Horaria',
      'weekStart' => 'Primer Día de la Semana',
      'defaultCurrency' => 'Moneda Default',
      'layoutSet' => 'Layout Set',
      'authenticationProvider' => 'Authentication Provider',
      'customUrl' => 'URL Personalizado',
      'customId' => 'ID Personalizado',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)'
    ],
    'links' => [
      'users' => 'Usuarios',
      'portalRoles' => 'Roles',
      'layoutSet' => 'Layout Set',
      'authenticationProvider' => 'Authentication Provider',
      'notes' => 'Notas',
      'articles' => 'Artículos de la Base de Conocimientos'
    ],
    'tooltips' => [
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones.',
      'portalRoles' => 'Los Roles del Portal indicados se aplicarán a todos los usuarios del portal'
    ],
    'labels' => [
      'Create Portal' => 'Crear Portal',
      'User Interface' => 'Interfaz del Usuario',
      'General' => 'General',
      'Settings' => 'Configuración'
    ]
  ],
  'PortalRole' => [
    'fields' => [
      'exportPermission' => 'Permisos de Exportación',
      'massUpdatePermission' => 'Permiso de Actualización Masiva',
      'data' => 'Data',
      'fieldData' => 'Field Data'
    ],
    'links' => [
      'users' => 'Usuarios'
    ],
    'labels' => [
      'Access' => 'Acceder',
      'Create PortalRole' => 'Crear Rol del Portal',
      'Scope Level' => 'Alcance',
      'Field Level' => 'Nivel del Campo'
    ],
    'tooltips' => [
      'exportPermission' => 'Define si los usuarios del portal pueden exportar registros.',
      'massUpdatePermission' => 'Define si los usuarios del portal pueden hacer actualizaciones masivas de registros.'
    ]
  ],
  'PortalUser' => [
    'labels' => [
      'Create PortalUser' => 'Crear un Usuario del Portal'
    ]
  ],
  'Preferences' => [
    'fields' => [
      'dateFormat' => 'Formato de fecha',
      'timeFormat' => 'Formato de tiempo',
      'timeZone' => 'Zona Horaria',
      'weekStart' => 'Primer día de la semana',
      'thousandSeparator' => 'Separador de miles',
      'decimalMark' => 'Separador decimal',
      'defaultCurrency' => 'Moneda Default',
      'currencyList' => 'Lista de Moneda',
      'language' => 'Idioma',
      'exportDelimiter' => 'Exportar Delimitador',
      'receiveAssignmentEmailNotifications' => 'Notificaciones por correo sobre asignaciones',
      'receiveMentionEmailNotifications' => 'Notificaciones por correo sobre menciones en publicaciones',
      'receiveStreamEmailNotifications' => 'Notificar por correo las publicaciones y actualizaciones de estátus',
      'assignmentNotificationsIgnoreEntityTypeList' => 'In-app assignment notifications',
      'assignmentEmailNotificationsIgnoreEntityTypeList' => 'Email assignment notifications',
      'autoFollowEntityTypeList' => 'Seguimiento-automático Global',
      'signature' => 'Firma de correo',
      'dashboardTabList' => 'Lista de Pestañas',
      'defaultReminders' => 'Recordatorios Default',
      'defaultRemindersTask' => 'Default Reminders for Tasks',
      'theme' => 'Tema',
      'useCustomTabList' => 'Lista de Pestañas Personalizada',
      'addCustomTabs' => 'Add Custom Tabs',
      'tabList' => 'Lista de Pestañas',
      'emailReplyToAllByDefault' => 'Responder a todos por default',
      'dashboardLayout' => 'Formato del Tablero',
      'dashboardLocked' => 'Lock Dashboard',
      'emailReplyForceHtml' => 'Responder correo en HTML',
      'doNotFillAssignedUserIfNotRequired' => 'No pre-llenar el campo de usuario al crear un registro',
      'followEntityOnStreamPost' => 'Seguimiento-automático del registro al publicarlo en el Flujo',
      'followCreatedEntities' => 'Seguimiento-automático de los registros creados',
      'followCreatedEntityTypeList' => 'Seguimiento-automático de los registros de tipos de entidad específicos',
      'emailUseExternalClient' => 'Use un cliente externo de correo',
      'textSearchStoringDisabled' => 'Disable text filter storing',
      'calendarSlotDuration' => 'Calendar Slot Duration',
      'calendarScrollHour' => 'Calendar Scroll to Hour',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Puerto',
      'smtpAuth' => 'Autorizar',
      'smtpSecurity' => 'Seguridad',
      'smtpUsername' => 'Nombre de Usuario',
      'emailAddress' => 'Correo Electrónico',
      'smtpPassword' => 'Contraseña',
      'smtpEmailAddress' => 'Correo Electrónico',
      'scopeColorsDisabled' => 'Desactivar colores en alcance',
      'tabColorsDisabled' => 'Desactivar colores en pestañas'
    ],
    'links' => [],
    'options' => [
      'weekStart' => [
        0 => 'Domingo',
        1 => 'Lunes'
      ]
    ],
    'labels' => [
      'Notifications' => 'Notificaciones',
      'User Interface' => 'Interfaz de Usuario',
      'Misc' => 'Misceláneos',
      'Locale' => 'Localización',
      'Reset Dashboard to Default' => 'Restaurar el Tablero default'
    ],
    'tooltips' => [
      'addCustomTabs' => 'If checked, custom tabs will be appended to default tabs. Otherwise, custom tabs will be used instead of default tabs.',
      'autoFollowEntityTypeList' => 'Seguir automáticamente TODOS los nuevos registros (de cualquier usuario) de los tipos de entidad seleccionados.  Así podrá ver información del flujo y recibir notificaciones sobre todo lo registrado en el sistema.',
      'doNotFillAssignedUserIfNotRequired' => 'El registro creado por el usuario asignado no será llenado con el propio usuario, a menos que el campo sea requerido.',
      'followCreatedEntities' => 'Cuando se creen nuevos registros, se seguirán automáticamente, aunque sean asignados a otro usuario.',
      'followCreatedEntityTypeList' => 'Cuando se creen nuevos registros de cierto tipo de entidades, se seguirán automáticamente, aunque sean asignados a otro usuario.'
    ],
    'tabFields' => [
      'label' => 'Label',
      'iconClass' => 'Icon',
      'color' => 'Color'
    ]
  ],
  'Role' => [
    'fields' => [
      'name' => 'Nombre',
      'roles' => 'Roles',
      'assignmentPermission' => 'Asignación de permisos',
      'userPermission' => 'Permisos de Usuario',
      'messagePermission' => 'Message Permission',
      'portalPermission' => 'Permisos del Portal',
      'groupEmailAccountPermission' => 'Permisos de Grupos de Cuentas de Correo',
      'exportPermission' => 'Permisos de exportación',
      'massUpdatePermission' => 'Permiso de Actualización Masiva',
      'followerManagementPermission' => 'Follower Management Permission',
      'dataPrivacyPermission' => 'Permiso de Datos Privados',
      'auditPermission' => 'Audit Permission',
      'mentionPermission' => 'Mention Permission',
      'data' => 'Data',
      'fieldData' => 'Field Data'
    ],
    'links' => [
      'users' => 'Usuarios',
      'teams' => 'Equipos'
    ],
    'tooltips' => [
      'messagePermission' => 'Allows to send messages to other users.

* all – can send to all
* team – can send only to teammates
* no – cannot send',
      'assignmentPermission' => 'Permite restringir la habilidad para asignar registros y enviar mensajes a otros usuarios.

todos - sin restricción

equipo - sólo a sus compañeros

no - sólo a sí mismo',
      'userPermission' => 'Permite restringir la capacidad de los usuarios para ver tareas, calendarios y el flujo de otros usuarios.

todos  - pueden ver todo

equipo - pueden ver las actividades de su equipo

no - sólo las propias',
      'portalPermission' => 'Define un acceso a la información del portal, permitiendo enviar mensajes a los usuarios del portal',
      'groupEmailAccountPermission' => 'Define el acceso a los grupos de cuentas de corros, la capacida de enviar correos desde grupos SMTP.',
      'exportPermission' => 'Define si los usuarios pueden exportar registros.',
      'massUpdatePermission' => 'Define si los usuarios pueden hacer actualizaciones masivas de registros.',
      'followerManagementPermission' => 'Allows to manage followers of specific records.',
      'dataPrivacyPermission' => 'Permite ver y borrar datos personales.',
      'auditPermission' => 'Allows to view the audit log.',
      'mentionPermission' => 'Allows to mention other users in the Stream.

* all – can mention all
* team – can mention only teammates
* no – cannot mention'
    ],
    'labels' => [
      'Access' => 'Acceso',
      'Create Role' => 'Crear Rol',
      'Scope Level' => 'Alcance',
      'Field Level' => 'Nivel del Campo'
    ],
    'options' => [
      'accessList' => [
        'not-set' => 'sin definir',
        'enabled' => 'activado',
        'disabled' => 'desactivado'
      ],
      'levelList' => [
        'all' => 'todos',
        'team' => 'equipo',
        'account' => 'cuenta',
        'contact' => 'contacto',
        'own' => 'propio',
        'no' => 'no',
        'yes' => 'si',
        'not-set' => 'sin definir'
      ]
    ],
    'actions' => [
      'read' => 'Leer',
      'edit' => 'Editar',
      'delete' => 'Borrar',
      'stream' => 'Flujo',
      'create' => 'Crear'
    ],
    'messages' => [
      'changesAfterClearCache' => 'Los cambios al Control de Acceso serán aplicados después de borrar el Cache'
    ]
  ],
  'ScheduledJob' => [
    'fields' => [
      'name' => 'Nombre',
      'status' => 'Estátus',
      'job' => 'Trabajo',
      'scheduling' => 'Agendar'
    ],
    'links' => [
      'log' => 'Historial'
    ],
    'labels' => [
      'As often as possible' => 'As often as possible',
      'Create ScheduledJob' => 'Crear Tarea Agendada'
    ],
    'options' => [
      'job' => [
        'Cleanup' => 'Limpiar',
        'CheckInboundEmails' => 'Comprobar Correos Entrantes',
        'CheckEmailAccounts' => 'Compruebe cuentas de correo personales',
        'SendEmailReminders' => 'Enviar Recordatorios por Correo',
        'AuthTokenControl' => 'Control de la Clave de Autorización',
        'SendEmailNotifications' => 'Enviar Notificaciones por Correo',
        'CheckNewVersion' => 'Verificar Nueva Versión',
        'ProcessWebhookQueue' => 'Process Webhook Queue',
        'ProcessMassEmail' => 'Enviar Correo Masivo',
        'ControlKnowledgeBaseArticleStatus' => 'Controlar Estátus de la Base de Conocimientos'
      ],
      'cronSetup' => [
        'linux' => '<b>Nota</b>: Agregue esta línea al archivo crontab de su servidor para que ejecute los trabajos agendados de EspoCRM:',
        'mac' => '<b>Nota</b>: Agregue esta línea al archivo crontab de su servidor para que ejecute los trabajos agendados de EspoCRM:',
        'windows' => '<b>Nota</b>: Genere un archivo por lotes con los siguientes comandos para ejecutar trabajos programados de EspoCRM mediante el Programador de Tareas de Windows:',
        'default' => 'Nota: Agregue este comando a su CronJob (Tarea Agendada):'
      ],
      'status' => [
        'Active' => 'Activo',
        'Inactive' => 'Inactivo'
      ]
    ],
    'tooltips' => [
      'scheduling' => 'Notación CRONTAB.  Indica la frecuencia de ejecución.

`*/5 * * * *` - cada 5 minutos

`0 */2 * * *` - cada 2 horas

`30 1 * * *` - a la 01:30 diariamente

`0 0 1 * *` - el primer día del mes'
    ]
  ],
  'ScheduledJobLogRecord' => [
    'fields' => [
      'status' => 'Estátus',
      'executionTime' => 'Tiempo de Ejecución',
      'target' => 'Interés'
    ]
  ],
  'Settings' => [
    'fields' => [
      'useCache' => 'Usar Cache',
      'dateFormat' => 'Formato de Fecha',
      'timeFormat' => 'Formato de Hora',
      'timeZone' => 'Zona Horaria',
      'weekStart' => 'Primer día de la semana',
      'thousandSeparator' => 'Separador de miles',
      'decimalMark' => 'Separador Decimal',
      'defaultCurrency' => 'Moneda Default',
      'baseCurrency' => 'Moneda Base',
      'currencyRates' => 'Valores Tarifa',
      'currencyList' => 'Lista de Moneda',
      'language' => 'Idioma',
      'companyLogo' => 'Logo Compañia',
      'smsProvider' => 'SMS Provider',
      'outboundSmsFromNumber' => 'SMS From Number',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Puerto',
      'smtpAuth' => 'Autorizar',
      'smtpSecurity' => 'Seguridad',
      'smtpUsername' => 'Nombre de Usuario',
      'emailAddress' => 'Correo electrónico',
      'smtpPassword' => 'Contraseña',
      'outboundEmailFromName' => 'De (Nombre)',
      'outboundEmailFromAddress' => 'De (Dirección)',
      'outboundEmailIsShared' => 'Es Compartido',
      'emailAddressLookupEntityTypeList' => 'Email address look-up scopes',
      'emailAddressSelectEntityTypeList' => 'Email address select scopes',
      'recordsPerPage' => 'Registros por Página',
      'recordsPerPageSmall' => 'Registros Por Página (Pequeño)',
      'recordsPerPageSelect' => 'Records Per Page (Select)',
      'recordsPerPageKanban' => 'Records Per Page (Kanban)',
      'tabList' => 'Lista de Pestañas',
      'quickCreateList' => 'Crear Lista Rápida',
      'exportDelimiter' => 'Exportar Delimitador',
      'globalSearchEntityList' => 'Lista Búsqueda Global Entidad',
      'authenticationMethod' => 'Método de Autorización',
      'ldapHost' => 'Servidor',
      'ldapPort' => 'Puerto',
      'ldapAuth' => 'Autorizar',
      'ldapUsername' => 'Nombre Completo del Usuario ND',
      'ldapPassword' => 'Contraseña',
      'ldapBindRequiresDn' => 'Requiere ND para relacionarse',
      'ldapBaseDn' => 'ND Base',
      'ldapAccountCanonicalForm' => 'Forma Canónica de la Cuenta',
      'ldapAccountDomainName' => 'Nombre de Dominio de la Cuenta',
      'ldapTryUsernameSplit' => 'Intentar dividir el nombre de Usuario',
      'ldapPortalUserLdapAuth' => 'Usar Autenticación LDAP para Usuarios del Portal',
      'ldapCreateEspoUser' => 'Crear Usuario en EspoCRM',
      'ldapSecurity' => 'Seguridad',
      'ldapUserLoginFilter' => 'Filtro de Entrada del Usuario',
      'ldapAccountDomainNameShort' => 'Nombre Dominio Corto para la Cuenta',
      'ldapOptReferrals' => 'Referencias validadas',
      'ldapUserNameAttribute' => 'Atributo "Nombre Del Usuario"',
      'ldapUserObjectClass' => 'ObjectClass del Usuario',
      'ldapUserTitleAttribute' => 'Atributo "Título del Usuario"',
      'ldapUserFirstNameAttribute' => 'Atributo "Nombre del Usuario"',
      'ldapUserLastNameAttribute' => 'Atributo "Apellido del Usuario"',
      'ldapUserEmailAddressAttribute' => 'Atributo "Correo del Usuario"',
      'ldapUserTeams' => 'Equipos del Usuario',
      'ldapUserDefaultTeam' => 'Equipo default del Usuario',
      'ldapUserPhoneNumberAttribute' => 'Atributo "Teléfono del Usuario"',
      'ldapPortalUserPortals' => 'Portales Default del Usuario de Portal',
      'ldapPortalUserRoles' => 'Roles Default del Usuario de Portal',
      'exportDisabled' => 'Desactivar Exportación (Solo admin)',
      'assignmentNotificationsEntityList' => 'Entidades a las que se notificará sobre la asignación',
      'assignmentEmailNotifications' => 'Notificaciones sobre la asignación',
      'assignmentEmailNotificationsEntityList' => 'Alcances de las notificaciones por correo de la asignación',
      'streamEmailNotifications' => 'Notificaciones sobre actualizaciones en el flujo para usuarios internos',
      'portalStreamEmailNotifications' => 'Notificaciones de actualizaciones en el flujo para los usuarios del portal',
      'streamEmailNotificationsEntityList' => 'Alcances de las notificaciones por correo del flujo',
      'streamEmailNotificationsTypeList' => 'Que cosa notificar',
      'emailNotificationsDelay' => 'Delay of email notifications (in seconds)',
      'b2cMode' => 'Modo B2C',
      'avatarsDisabled' => 'Desactivar Avatars',
      'followCreatedEntities' => 'Seguir los registros creados',
      'displayListViewRecordCount' => 'Mostrar el Total de Registros (en las vistas tipo lista)',
      'theme' => 'Tema',
      'userThemesDisabled' => 'Desactivar Temas de Usuarios',
      'attachmentUploadMaxSize' => 'Upload Max Size (Mb)',
      'attachmentUploadChunkSize' => 'Upload Chunk Size (Mb)',
      'emailMessageMaxSize' => 'Tamaño máximo del Correo (MB)',
      'massEmailMaxPerHourCount' => 'Número mäximo de correos enviados por hora',
      'massEmailMaxPerBatchCount' => 'Max number of emails sent per batch',
      'personalEmailMaxPortionSize' => 'Porción máxima recuperable de correo de cuentas personales',
      'inboundEmailMaxPortionSize' => 'Porción máxima recuperable de correo de cuentas de grupo',
      'maxEmailAccountCount' => 'Máximo número de cuentas de correo personal por usuario',
      'authTokenLifetime' => 'Vida de la Clave de Autorización (horas)',
      'authTokenMaxIdleTime' => 'Máximo tiempo de inactividad de la Clave de Autorización (horas)',
      'dashboardLayout' => 'Diseño del Tablero (default)',
      'siteUrl' => 'URL del Sitio',
      'addressPreview' => 'Vista previa de la Dirección',
      'addressFormat' => 'Formato de la Dirección',
      'personNameFormat' => 'Person Name Format',
      'notificationSoundsDisabled' => 'Desactivar las Notificaciones con Sonido',
      'newNotificationCountInTitle' => 'Display new notification number in page title',
      'applicationName' => 'Nombre de la Aplicación',
      'calendarEntityList' => 'Lista de Entidades del Calendario',
      'busyRangesEntityList' => 'Free/Busy Entity List',
      'mentionEmailNotifications' => 'Enviar correos de notificación sobre comentarios publicados',
      'massEmailDisableMandatoryOptOutLink' => 'Desactivar liga de confirmación obligatoria',
      'massEmailOpenTracking' => 'Email Open Tracking',
      'massEmailVerp' => 'Use VERP',
      'activitiesEntityList' => 'Lista de Entidades de Actividades',
      'historyEntityList' => 'Lista de Entidades del Historial',
      'currencyFormat' => 'Formato Moneda',
      'currencyDecimalPlaces' => 'Decimales en Moneda',
      'aclAllowDeleteCreated' => 'Permitir la eliminación de registros creados',
      'adminNotifications' => 'Notificaciones del sistema en el panel de administración',
      'adminNotificationsNewVersion' => 'Notificar cuando haya una nueva versión disponible de EspoCRM',
      'adminNotificationsNewExtensionVersion' => 'Notificar cuando haya nuevas versiones disponibles de extensiones',
      'textFilterUseContainsForVarchar' => 'Use el operador \'contiene\' para filtrar campos alfanuméricos',
      'phoneNumberNumericSearch' => 'Numeric phone number search',
      'phoneNumberInternational' => 'International phone numbers',
      'phoneNumberExtensions' => 'Phone number extensions',
      'phoneNumberPreferredCountryList' => 'Preferred telephone country codes',
      'authTokenPreventConcurrent' => 'Sólo se puede una clave de aut. por usuario',
      'scopeColorsDisabled' => 'Desactivar colores en alcance',
      'tabColorsDisabled' => 'Desactivar Colores en Pestañas',
      'tabIconsDisabled' => 'Desactivar Iconos en Pestañas',
      'emailAddressIsOptedOutByDefault' => 'Marcar direcciones como confirmadas',
      'outboundEmailBccAddress' => 'Direcciones CCO para clientes externos',
      'cleanupDeletedRecords' => 'Eliminar los registros borrados',
      'addressCityList' => 'Address City Autocomplete List',
      'addressStateList' => 'Address State Autocomplete List',
      'fiscalYearShift' => 'Inicio del Año Fiscal',
      'jobRunInParallel' => 'Jobs Run in Parallel',
      'jobMaxPortion' => 'Jobs Max Portion',
      'jobPoolConcurrencyNumber' => 'Jobs Pool Concurrency Number',
      'jobForceUtc' => 'Force UTC Time Zone',
      'daemonInterval' => 'Daemon Interval',
      'daemonMaxProcessNumber' => 'Daemon Max Process Number',
      'daemonProcessTimeout' => 'Daemon Process Timeout',
      'cronDisabled' => 'Disable Cron',
      'maintenanceMode' => 'Modo de Mantenimiento',
      'useWebSocket' => 'Use WebSocket',
      'passwordRecoveryDisabled' => 'Disable password recovery',
      'passwordRecoveryForAdminDisabled' => 'Disable password recovery for admin users',
      'passwordRecoveryForInternalUsersDisabled' => 'Disable password recovery for internal users',
      'passwordRecoveryNoExposure' => 'Prevent email address exposure on password recovery form',
      'passwordGenerateLength' => 'Length of generated passwords',
      'passwordStrengthLength' => 'Minimum password length',
      'passwordStrengthLetterCount' => 'Number of letters required in password',
      'passwordStrengthNumberCount' => 'Number of digits required in password',
      'passwordStrengthBothCases' => 'Password must contain letters of both upper and lower case',
      'auth2FA' => 'Enable 2-Factor Authentication',
      'auth2FAForced' => 'Force regular users to set up 2FA',
      'auth2FAMethodList' => 'Available 2FA methods',
      'auth2FAInPortal' => 'Allow 2FA in portals',
      'workingTimeCalendar' => 'Working Time Calendar',
      'oidcClientId' => 'OIDC Client ID',
      'oidcClientSecret' => 'OIDC Client Secret',
      'oidcAuthorizationRedirectUri' => 'OIDC Authorization Redirect URI',
      'oidcAuthorizationEndpoint' => 'OIDC Authorization Endpoint',
      'oidcTokenEndpoint' => 'OIDC Token Endpoint',
      'oidcJwksEndpoint' => 'OIDC JSON Web Key Set Endpoint',
      'oidcJwtSignatureAlgorithmList' => 'OIDC JWT Allowed Signature Algorithms',
      'oidcScopes' => 'OIDC Scopes',
      'oidcGroupClaim' => 'OIDC Group Claim',
      'oidcCreateUser' => 'OIDC Create User',
      'oidcUsernameClaim' => 'OIDC Username Claim',
      'oidcTeams' => 'OIDC Teams',
      'oidcSync' => 'OIDC Sync',
      'oidcSyncTeams' => 'OIDC Sync Teams',
      'oidcFallback' => 'OIDC Fallback Login',
      'oidcAllowRegularUserFallback' => 'OIDC Allow fallback login for regular users',
      'oidcAllowAdminUser' => 'OIDC Allow OIDC login for admin users',
      'oidcLogoutUrl' => 'OIDC Logout URL',
      'oidcAuthorizationPrompt' => 'OIDC Authorization Prompt',
      'pdfEngine' => 'PDF Engine',
      'quickSearchFullTextAppendWildcard' => 'Append wildcard in quick search',
      'authIpAddressCheck' => 'Restrict access by IP address',
      'authIpAddressWhitelist' => 'IP Address Whitelist',
      'authIpAddressCheckExcludedUsers' => 'Users excluded from check',
      'CustomLoginBackground' => 'Background',
      'CustomLoginPortalBackground' => 'Portal Background',
      'aclStrictMode' => 'Modo estricto ACL',
      'addressCountryList' => 'Lista para Autocompletar Direcciones de Países'
    ],
    'options' => [
      'authenticationMethod' => [
        'Oidc' => 'OIDC'
      ],
      'currencyFormat' => [
        1 => '10 MXP'
      ],
      'personNameFormat' => [
        'firstLast' => 'First Last',
        'lastFirst' => 'Last First',
        'firstMiddleLast' => 'First Middle Last',
        'lastFirstMiddle' => 'Last First Middle'
      ],
      'streamEmailNotificationsTypeList' => [
        'Post' => 'Publicaciones',
        'Status' => 'Actualizaciones de Estátus',
        'EmailReceived' => 'Correos recibidos'
      ],
      'auth2FAMethodList' => [
        'Totp' => 'TOTP',
        'Email' => 'Email',
        'Sms' => 'SMS'
      ],
      'weekStart' => [
        0 => 'Domingo',
        1 => 'Lunes'
      ]
    ],
    'tooltips' => [
      'authIpAddressCheckExcludedUsers' => 'Users that will be able to log in regardless whether their IP address is in the whitelist.',
      'authIpAddressWhitelist' => 'A list of IP addresses or ranges in CIDR notation.

Portals are not affected by restriction.',
      'workingTimeCalendar' => 'A working time calendar that will be applied to all users by default.',
      'displayListViewRecordCount' => 'A total number of records will be shown on the list view.',
      'currencyList' => 'What currencies will be available in the system.',
      'activitiesEntityList' => 'What records will be available in the Activities panel.',
      'historyEntityList' => 'What records will be available in the History panel.',
      'calendarEntityList' => 'What records will be available in the Calendar.',
      'addressStateList' => 'State suggestions for address fields.',
      'addressCityList' => 'City suggestions for address fields.',
      'addressCountryList' => 'Country suggestions for address fields.',
      'exportDisabled' => 'Users won\'t be able to export records. Only admin will be allowed.',
      'globalSearchEntityList' => 'What records can be searched with Global Search.',
      'siteUrl' => 'A URL of this EspoCRM instance. You need to change it if you move to another domain.',
      'useCache' => 'Not recommended to disable, unless for development purpose.',
      'useWebSocket' => 'WebSocket enables two-way interactive communication between a server and a browser. Requires setting up the WebSocket daemon on your server. Check the documentation for more info.',
      'passwordRecoveryForInternalUsersDisabled' => 'Only portal users will be able to recover password.',
      'passwordRecoveryNoExposure' => 'It won\'t be possible to determine whether a specific email address is registered in the system.',
      'emailAddressLookupEntityTypeList' => 'For email address autocomplete.',
      'emailAddressSelectEntityTypeList' => 'Entity types available when searching for an email address from a modal.',
      'emailNotificationsDelay' => 'A message can be edited within the specified timeframe before the notification is sent.',
      'outboundEmailFromAddress' => 'The system email address.',
      'smtpServer' => 'If empty, then Group Email Account with the corresponding email address will be used.',
      'busyRangesEntityList' => 'What will be taken into account when showing busy time ranges in scheduler & timeline.',
      'massEmailVerp' => 'Variable envelope return path. For better handling of bounced messages. Make sure that your SMTP provider supports it.',
      'recordsPerPage' => 'Número de registros a desplegar inicialmente en las vistas',
      'recordsPerPageSmall' => 'Contador de registros en los paneles de información',
      'recordsPerPageSelect' => 'Number of records initially displayed when selecting records.',
      'recordsPerPageKanban' => 'Number of records initially displayed in kanban columns.',
      'outboundEmailIsShared' => 'Permitir a los usuarios enviar correos desde esta dirección',
      'followCreatedEntities' => 'Los usuarios seguirán automáticamente los registros que ellos hayan creado.',
      'emailMessageMaxSize' => 'Los correos de entrada que excedan el máximo sólo tendrán asunto (sin texto ni adjuntos).',
      'authTokenLifetime' => 'Define cuanto duran las claves de aut.
0 - significa que no caduca.',
      'authTokenMaxIdleTime' => 'Define cuándo caduca la clave luego del último acceso.
0 - significa que no caduca.',
      'userThemesDisabled' => 'Si está marcado, los usuarios no podrán seleccionar otro tema',
      'ldapUsername' => 'The full system user DN which allows to search other users. E.g. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan". ',
      'ldapPassword' => 'Contraseña de acceso al servidor LDAP.',
      'ldapAuth' => 'Credenciales de acceso al servidor LDAP.',
      'ldapUserNameAttribute' => 'El atributo para identificar el usuario.  Por ejemplo, "userPrincipalName" o "sAMAcountName" para Active Directory.  "uid" en OpenLDAP.',
      'ldapUserObjectClass' => 'Atributo ObjectClass para buscar usuarios.  Por ejemplo, "person" para AD, "inetOrgPerson" para OpenLDAP.',
      'ldapAccountCanonicalForm' => 'The type of your account canonical form. There are 4 options:

- \'Dn\' - the form in the format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.

- \'Username\' - the form \'tester\'.

- \'Backslash\' - the form \'COMPANY\\tester\'.

- \'Principal\' - the form \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'La opción para formatear el nombre del usuario en forma ND.',
      'ldapBaseDn' => 'La base de datos default DN usada para buscar usuarios.  Por ejemplo, "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'Opción para separar el nombre de usuario del dominio.',
      'ldapOptReferrals' => 'si deben seguirse las referencias del cliente LDAP.',
      'ldapPortalUserLdapAuth' => 'Permitir a los usuarios del portal utilizar autenticación LDAP en vez de la de EspoCRM.',
      'ldapCreateEspoUser' => 'Esta opción permite que EspoCRM genere un usuario del LDAP.',
      'ldapUserFirstNameAttribute' => 'Atributo LDAP utilizado para determinar el nombre del usuario.  Por ejemplo, "givenname".',
      'ldapUserLastNameAttribute' => 'Atributo LDAP usado para determinar el apellido del usuario.  Por ejemplo, "sn".',
      'ldapUserTitleAttribute' => 'Atributo LDAP usado para determinar el título del usuario.  Por ejemplo, "title".',
      'ldapUserEmailAddressAttribute' => 'El atributo LDAP usado para indicar la dirección de correo del usuario.  Por ejemplo, "mail".',
      'ldapUserPhoneNumberAttribute' => 'El atributo LDAP usado para indicar el número de teléfono del usuario.  Por ejemplo, "telephoneNumber".',
      'ldapUserLoginFilter' => 'Filtro que permite restringir los usuarios que pueden usar EspoCRM.  Por ejemplo, "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan". ',
      'ldapAccountDomainName' => 'Dominio utilizado para acceder al servidor LDAP.',
      'ldapAccountDomainNameShort' => 'El dominio corto usado para acceder al servidor LDAP.',
      'ldapUserTeams' => 'Equipos creados por el usuario.  Para ver más, consulte el perfil del usuario.',
      'ldapUserDefaultTeam' => 'Equipo default creado por el Usuario.  Si requiere más información, consulte el perfil del Usuario.',
      'ldapPortalUserPortals' => 'Portales Default para el Usuario de Portal creado',
      'ldapPortalUserRoles' => 'Roles Default para el Usuario de Portal creado',
      'b2cMode' => 'EspoCRM viene configurado para B2B por default.  Puede cambiarlo a B2C.',
      'currencyDecimalPlaces' => 'Posiciones decimales. Si está vacío, se mostrarán todos los decimales',
      'aclStrictMode' => 'Activado: El acceso a los alcances estará prohibido si no se especifica en los roles
Desactivado: El acceso a los alcances será permitido si no se especifica en los roles',
      'aclAllowDeleteCreated' => 'Los usuarios podrán eliminar los registros que hayan creado, aunque no tengan permiso de borrado.',
      'textFilterUseContainsForVarchar' => 'Si no lo marca, se usará el operador \'starts with\' (inicia con).  Puede utilizar el comodín \'%\'.',
      'streamEmailNotificationsEntityList' => 'Notificaciones de actualización de registros del flujo.  Los Usuarios recibirán notificaciones por correo sólo para los tipos de entidad especificados.',
      'authTokenPreventConcurrent' => 'Los usuarios no podrán ingresar en distintos dispositivos al mismo tiempo',
      'emailAddressIsOptedOutByDefault' => 'Las nuevas direcciones de correo serán marcadas como confirmadas.',
      'cleanupDeletedRecords' => 'Los registros borrados serán eliminados de la base de datos después de un tiempo.',
      'jobRunInParallel' => 'Las tareas serán ejecutadas en paralelo',
      'jobPoolConcurrencyNumber' => 'Max número de procesos ejecutados simultaneamente',
      'jobMaxPortion' => 'Max número de tareas por ejecución',
      'jobForceUtc' => 'Use the UTC time zone for scheduled jobs. Otherwise, the time zone set in settings will be used.',
      'daemonInterval' => 'Interval between process cron runs in seconds.',
      'daemonMaxProcessNumber' => 'Max number of cron processes run simultaneously.',
      'daemonProcessTimeout' => 'Max execution time (in seconds) allocated for a single cron process.',
      'cronDisabled' => 'Cron will not run.',
      'maintenanceMode' => 'Unicamente administradores pueden accesar el sistema',
      'oidcGroupClaim' => 'A claim to use for team mapping.',
      'oidcFallback' => 'Allow login by username/password.',
      'oidcCreateUser' => 'Create a new user in Espo when no matching user found.',
      'oidcSync' => 'Sync user data (on every login).',
      'oidcSyncTeams' => 'Sync user teams (on every login).',
      'oidcUsernameClaim' => 'A claim to use for a username (for user matching and creation).',
      'oidcTeams' => 'Espo teams mapped against groups/teams/roles of the identity provider. Teams with an empty mapping value will be always assigned to a user (when creating or syncing).',
      'oidcLogoutUrl' => 'An URL the browser will redirect to after logging out from Espo. Intended for clearing the session information in the browser and doing logging out on the provider side. Usually the URL contains a redirect-URL parameter, to return back to Espo.

Available placeholders:
* `{siteUrl}`
* `{clientId}`',
      'quickSearchFullTextAppendWildcard' => 'Append a wildcard to an autocomplete search query when Full-Text search is enabled. Reduces search performance.',
      'CustomLoginBackground' => 'Login Background.',
      'CustomLoginPortalBackground' => 'Portal Login Background.'
    ],
    'labels' => [
      'Group Tab' => 'Group Tab',
      'Divider' => 'Divider',
      'System' => 'Sistema',
      'Locale' => 'Localización',
      'Search' => 'Busqueda',
      'Misc' => 'Miscelaneos',
      'SMTP' => 'SMTP',
      'General' => 'General',
      'Phone Numbers' => 'Phone Numbers',
      'Navbar' => 'Navbar',
      'Dashboard' => 'Dashboard',
      'Configuration' => 'Configuración',
      'In-app Notifications' => 'Notificaciones del CRM',
      'Email Notifications' => 'Notificaciones por Correo',
      'Currency Settings' => 'Configuración Moneda',
      'Currency Rates' => 'Tipo de Cambio por Divisa',
      'Mass Email' => 'Correo Masivo',
      'Test Connection' => 'Probar Conexión',
      'Connecting' => 'Conectando...',
      'Activities' => 'Actividades',
      'Admin Notifications' => 'Notificaciones al Administrador',
      'Passwords' => 'Passwords',
      '2-Factor Authentication' => '2-Factor Authentication',
      'Attachments' => 'Attachments',
      'IdP Group' => 'IdP Group',
      'Access' => 'Access',
      'Strength' => 'Strength',
      'Recovery' => 'Recovery'
    ],
    'messages' => [
      'ldapTestConnection' => 'La conexión se ha establecido satisfactoriamente'
    ]
  ],
  'Stream' => [
    'messages' => [
      'infoMention' => 'Type **@username** to mention user in the post.',
      'infoSyntax' => 'Available markdown syntax',
      'couldNotAddFollowerUserHasNoAccessToStream' => 'Could not add the user \'{userName}\' to the followers. The user does not have \'stream\' access to the record.'
    ],
    'syntaxItems' => [
      'code' => 'code',
      'multilineCode' => 'multiline code',
      'strongText' => 'strong text',
      'emphasizedText' => 'emphasized text',
      'deletedText' => 'deleted text',
      'blockquote' => 'blockquote',
      'link' => 'link'
    ]
  ],
  'Team' => [
    'fields' => [
      'name' => 'Nombre',
      'roles' => 'Roles',
      'layoutSet' => 'Layout Set',
      'workingTimeCalendar' => 'Working Time Calendar',
      'positionList' => 'Lista de Posiciones',
      'userRole' => 'User Role'
    ],
    'links' => [
      'users' => 'Usuarios',
      'notes' => 'Notas',
      'roles' => 'Roles',
      'layoutSet' => 'Layout Set',
      'workingTimeCalendar' => 'Working Time Calendar',
      'inboundEmails' => 'Agrupar Cuentas de Correo',
      'groupEmailFolders' => 'Group Email Folders'
    ],
    'tooltips' => [
      'workingTimeCalendar' => 'A calendar will be applied to users who have this team set as a Default Team.',
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones. Layout Set will be applied to users who have this team set as Default Team.',
      'roles' => 'Todos los usuarios de este equipo tendrán acceso a la configuración desde los roles seleccionados',
      'positionList' => 'Posiciones disponibles en este equipo. Por ejemplo Vendedor, Gerente.'
    ],
    'labels' => [
      'Create Team' => 'Crear Equipo'
    ]
  ],
  'Template' => [
    'fields' => [
      'name' => 'Nombre',
      'body' => 'Cuerpo',
      'entityType' => 'Tipo de Entidad',
      'header' => 'Encabezado',
      'footer' => 'Pié',
      'leftMargin' => 'Margen Izquierdo',
      'topMargin' => 'Margen Superior',
      'rightMargin' => 'Margen Derecho',
      'bottomMargin' => 'Margen Inferior',
      'printFooter' => 'Imprimir Pié',
      'printHeader' => 'Print Header',
      'footerPosition' => 'Posición del Pié',
      'headerPosition' => 'Header Position',
      'variables' => 'Marcadores Disponibles',
      'pageOrientation' => 'Orientación de la Página',
      'pageFormat' => 'Formato de Papel',
      'pageWidth' => 'Page Width (mm)',
      'pageHeight' => 'Page Height (mm)',
      'fontFace' => 'Fuente',
      'title' => 'Title',
      'style' => 'Style'
    ],
    'links' => [],
    'labels' => [
      'Create Template' => 'Crear Plantilla'
    ],
    'options' => [
      'pageOrientation' => [
        'Portrait' => 'Vertical',
        'Landscape' => 'Horizontal'
      ],
      'pageFormat' => [
        'Custom' => 'Custom'
      ],
      'placeholders' => [
        'pagebreak' => 'Page break',
        'today' => 'Hoy (fecha)',
        'now' => 'Ahora (fecha-hr)'
      ],
      'fontFace' => [
        'dejavusans' => 'DejaVuSans',
        'dejavusansextralight' => 'DejaVu Sans Condensed'
      ]
    ],
    'tooltips' => [
      'footer' => 'Use {pageNumber} para imprimir el número de página.',
      'variables' => 'Copiar/Pegar necesita un marcador para el Encabezado, Cuerpo o Pie.'
    ]
  ],
  'User' => [
    'fields' => [
      'name' => 'Nombre',
      'userName' => 'Nombre Usuario',
      'title' => 'Título',
      'type' => 'Tipo',
      'isAdmin' => 'Es Administrador',
      'defaultTeam' => 'Equipo Default',
      'emailAddress' => 'Correo electrónico',
      'phoneNumber' => 'Teléfono',
      'roles' => 'Roles',
      'portals' => 'Portales',
      'portalRoles' => 'Roles del Portal',
      'teamRole' => 'Posición',
      'password' => 'Contraseña',
      'currentPassword' => 'Contraseña Actual',
      'passwordConfirm' => 'Confirmar Contraseña',
      'newPassword' => 'Nueva Contraseña',
      'newPasswordConfirm' => 'Confirmar Contraseña Nueva',
      'yourPassword' => 'Your current password',
      'avatar' => 'Avatar',
      'avatarColor' => 'Avatar Color',
      'isActive' => 'Está Activo',
      'isPortalUser' => 'Es Usuario del Portal',
      'contact' => 'Contacto',
      'accounts' => 'Cuentas',
      'account' => 'Cuenta (principal)',
      'sendAccessInfo' => 'Enviar al Usuario un correo con su Información de Acceso',
      'portal' => 'Portal',
      'gender' => 'Género',
      'position' => 'Puesto en el equipo',
      'ipAddress' => 'Dirección IP',
      'passwordPreview' => 'Contraseña Generada:',
      'isSuperAdmin' => 'Es Super-Administrador',
      'lastAccess' => 'Último Acceso',
      'apiKey' => 'Llave API',
      'secretKey' => 'Llave Secreta',
      'dashboardTemplate' => 'Dashboard Template',
      'workingTimeCalendar' => 'Working Time Calendar',
      'auth2FA' => '2FA',
      'authMethod' => 'Método de Autenticación',
      'auth2FAEnable' => 'Enable 2-Factor Authentication',
      'auth2FAMethod' => '2FA Method',
      'auth2FATotpSecret' => '2FA TOTP Secret',
      'layoutSet' => 'Layout Set',
      'acceptanceStatus' => 'Estatus de Aprobación',
      'acceptanceStatusMeetings' => 'Estatus de Aceptación (Presentaciones)',
      'acceptanceStatusCalls' => 'Estátus de Aceptación (Llamadas)'
    ],
    'links' => [
      'defaultTeam' => 'Equipo default',
      'teams' => 'Equipos',
      'roles' => 'Roles',
      'notes' => 'Notas',
      'portals' => 'Portales',
      'portalRoles' => 'Roles del Portal',
      'contact' => 'Contacto',
      'accounts' => 'Cuentas',
      'account' => 'Cuenta (principal)',
      'tasks' => 'Tareas',
      'userData' => 'User Data',
      'dashboardTemplate' => 'Dashboard Template',
      'workingTimeCalendar' => 'Working Time Calendar',
      'workingTimeRanges' => 'Working Time Exceptions',
      'layoutSet' => 'Layout Set',
      'targetLists' => 'Listas de Intereses'
    ],
    'labels' => [
      'Create User' => 'Crear Usuario',
      'Generate' => 'Generar',
      'Access' => 'Acceso',
      'Preferences' => 'Preferencias',
      'Change Password' => 'Cambiar Contraseña',
      'Teams and Access Control' => 'Equipos y Control de Acceso',
      'Forgot Password?' => '¿Olvidó la Contraseña?',
      'Password Change Request' => 'Solicitar Cambio de Contraseña',
      'Email Address' => 'Correo Electrónico',
      'External Accounts' => 'Cuentas Externas',
      'Email Accounts' => 'Cuentas de Correo',
      'Portal' => 'Portal',
      'Create Portal User' => 'Crear Usuario del Portal',
      'Proceed w/o Contact' => 'Proceder sin Contacto',
      'Generate New API Key' => 'Generar Nueva Llave API',
      'Generate New Password' => 'Generate New Password',
      'Send Password Change Link' => 'Send Password Change Link',
      'Back to login form' => 'Back to login form',
      'Requirements' => 'Requirements',
      'Security' => 'Security',
      'Reset 2FA' => 'Reset 2FA',
      'Code' => 'Code',
      'Secret' => 'Secret',
      'Send Code' => 'Send Code',
      'Login Link' => 'Login Link'
    ],
    'tooltips' => [
      'defaultTeam' => 'Todos los registros creados por este usuario serán relacionados a este equipo default.',
      'userName' => 'Letras a-z, números 0-9 y guiones bajos están permitidos',
      'isAdmin' => 'El usuario administrador puede tener acceso a todo.',
      'isActive' => 'Si lo desmarca, el usuario no podrá iniciar sesión.',
      'teams' => 'Equipos a los que este usuario pertenece. Nivel de control de acceso se hereda de los roles de equipo.',
      'roles' => 'Roles de acceso adicionales. Úselo si el usuario no pertenece a ningún equipo o si necesita ampliar el nivel de control de acceso sólo para este usuario.',
      'portalRoles' => 'Roles adicionales del portal.  Utilícelos para extender el nivel de acceso exclusivamente para este Usuario',
      'portals' => 'Portales a los que este Usuario tiene acceso',
      'layoutSet' => 'Layouts from a specified set will be applied for the user instead of default ones.'
    ],
    'messages' => [
      '2faMethodNotConfigured' => 'The 2FA method is not fully configured in the system.',
      'loginAs' => 'Open the login link in an incognito window to preserve your current session. Use your admin credentials to log in.',
      'sendPasswordChangeLinkConfirmation' => 'An email with a unique link will be sent to the user allowing them to change their password. The link will expire after a specific amount of time.',
      'passwordRecoverySentIfMatched' => 'Assuming the entered data matched any user account.',
      'passwordStrengthLength' => 'Must be at least {length} characters long.',
      'passwordStrengthLetterCount' => 'Must contain at least {count} letter(s).',
      'passwordStrengthNumberCount' => 'Must contain at least {count} digit(s).',
      'passwordStrengthBothCases' => 'Must contain letters of both upper and lower case.',
      'passwordWillBeSent' => 'La Contraseña será enviada al correo electrónico del usuario',
      'passwordChanged' => 'La Contraseña ha sido cambiada',
      'userCantBeEmpty' => 'El nombre de usuario no puede estar vacío',
      'wrongUsernamePassword' => 'Nombre de usuario/contraseña incorrectos',
      'failedToLogIn' => 'Failed to log in',
      'emailAddressCantBeEmpty' => 'La dirección de correo no puede estar vacía',
      'userNameEmailAddressNotFound' => 'Nombre de Usuario/Correo no encontrado',
      'forbidden' => 'Prohibido, por favor intente después',
      'uniqueLinkHasBeenSent' => 'El enlace único ha sido enviado a la dirección de correo electrónico especificada.',
      'passwordChangedByRequest' => 'La contraseña ha sido cambiada.',
      'setupSmtpBefore' => 'Necesita configurar correctamente su <a href="{url}">Servicio SMTP</a> para que el sistema pueda enviarle su contraseña por correo.',
      'userNameExists' => 'Ese Usuario ya existe',
      'loginError' => 'Error occurred',
      'wrongCode' => 'Wrong code',
      'codeIsRequired' => 'Code is required',
      'yourAuthenticationCode' => 'Your authentication code: {code}.',
      'choose2FaSmsPhoneNumber' => 'Select a phone number that will be used for 2FA.',
      'choose2FaEmailAddress' => 'Select an email address that will be used for 2FA. It\'s highly recommended to use a non-primary email address.',
      'enterCodeSentInEmail' => 'Enter the code sent to your email address.',
      'enterCodeSentBySms' => 'Enter the code sent by SMS to your phone number.',
      'enterTotpCode' => 'Enter a code from your authenticator app.',
      'verifyTotpCode' => 'Scan the QR-code with your mobile authenticator app. If you have a trouble with scanning, you can enter the secret manually. After that you will see a 6-digit code in your application. Enter this code in the field below.',
      'generateAndSendNewPassword' => 'A new password will be generated and sent to the user\'s email address.',
      'security2FaResetConfirmation' => 'Are you sure you want to reset the current 2FA settings?',
      'auth2FARequiredHeader' => '2 factor authentication required',
      'auth2FARequired' => 'You need to set up 2 factor authentication. Use an authenticator application on your mobile phone (e.g. Google Authenticator).',
      'ldapUserInEspoNotFound' => 'User is not found in EspoCRM. Contact your administrator to create the user.',
      'passwordChangeRequestNotFound' => 'The password change request is not found. It might be expired. Try to initiate a new password recovery from the [login page]({url}).',
      'defaultTeamIsNotUsers' => 'Default Team should be one of user\'s Teams'
    ],
    'options' => [
      'gender' => [
        '' => 'No Definido',
        'Male' => 'Masculino',
        'Female' => 'Femenino',
        'Neutral' => 'Neutral'
      ],
      'type' => [
        'regular' => 'Regular',
        'admin' => 'Administrador',
        'portal' => 'Portal',
        'system' => 'Sistema',
        'super-admin' => 'Super-Administrador',
        'api' => 'API'
      ],
      'authMethod' => [
        'ApiKey' => 'Llave API',
        'Hmac' => 'HMAC'
      ]
    ],
    'boolFilters' => [
      'onlyMyTeam' => 'Sólo mi equipo',
      'onlyMe' => 'OnlyMe'
    ],
    'presetFilters' => [
      'active' => 'Activo',
      'activePortal' => 'Portal Activo',
      'activeApi' => 'API Active'
    ],
    'actions' => [
      'changePosition' => 'Change Position'
    ]
  ],
  'Webhook' => [
    'labels' => [
      'Create Webhook' => 'Create Webhook'
    ],
    'fields' => [
      'event' => 'Event',
      'url' => 'URL',
      'isActive' => 'Is Active',
      'user' => 'API User',
      'entityType' => 'Entity Type',
      'field' => 'Field',
      'secretKey' => 'Secret Key'
    ],
    'links' => [
      'user' => 'User'
    ]
  ],
  'WebhookQueueItem' => [
    'fields' => [
      'event' => 'Event',
      'webhook' => 'Webhook',
      'target' => 'Target',
      'data' => 'Data',
      'status' => 'Status',
      'processedAt' => 'Processed At',
      'attempts' => 'Attempts',
      'processAt' => 'Process At'
    ],
    'links' => [
      'webhook' => 'Webhook'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pending',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ]
  ],
  'WorkingTimeCalendar' => [
    'labels' => [
      'Create WorkingTimeCalendar' => 'Create Calendar'
    ],
    'fields' => [
      'timeZone' => 'Time Zone',
      'timeRanges' => 'Workday Schedule',
      'weekday0' => 'Sun',
      'weekday1' => 'Mon',
      'weekday2' => 'Tue',
      'weekday3' => 'Wed',
      'weekday4' => 'Thu',
      'weekday5' => 'Fri',
      'weekday6' => 'Sat',
      'weekday0TimeRanges' => 'Sun Schedule',
      'weekday1TimeRanges' => 'Mon Schedule',
      'weekday2TimeRanges' => 'Tue Schedule',
      'weekday3TimeRanges' => 'Wed Schedule',
      'weekday4TimeRanges' => 'Thu Schedule',
      'weekday5TimeRanges' => 'Fri Schedule',
      'weekday6TimeRanges' => 'Sat Schedule'
    ],
    'links' => [
      'ranges' => 'Exceptions'
    ]
  ],
  'WorkingTimeRange' => [
    'labels' => [
      'Create WorkingTimeRange' => 'Create Exception',
      'Calendars' => 'Calendars'
    ],
    'fields' => [
      'timeRanges' => 'Schedule',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date End',
      'type' => 'Type',
      'calendars' => 'Calendars',
      'users' => 'Users'
    ],
    'links' => [
      'calendars' => 'Calendars',
      'users' => 'Users'
    ],
    'options' => [
      'type' => [
        'Non-working' => 'Non-working',
        'Working' => 'Working'
      ]
    ],
    'presetFilters' => [
      'actual' => 'Actual'
    ],
    'tooltips' => [
      'calendars' => 'Calendars to apply the exception to. The exception will be applied to all users of selected calendars.

Leave the field empty if you need to apply the exception only for specific users.',
      'users' => 'Specific users to apply the exception to.'
    ]
  ],
  'Account' => [
    'fields' => [
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'website' => 'Sito Web',
      'phoneNumber' => 'Teléfono',
      'billingAddress' => 'Dirección de Facturación',
      'shippingAddress' => 'Dirección de Entrega',
      'description' => 'Descripción',
      'sicCode' => 'Código SIC',
      'industry' => 'Industria',
      'type' => 'Tipo',
      'contactRole' => 'Título',
      'contactIsInactive' => 'Inactivo',
      'campaign' => 'Campaña',
      'targetLists' => 'Listas de Intereses',
      'targetList' => 'Lista de Intereses',
      'originalLead' => 'Referencia Original',
      'cCuplea' => 'Cuplea'
    ],
    'links' => [
      'contacts' => 'Contactos',
      'contactsPrimary' => 'Contacts (primary)',
      'opportunities' => 'Oportunidades',
      'cases' => 'Casos',
      'documents' => 'Documentos',
      'meetingsPrimary' => 'Presentaciones (ampliado)',
      'callsPrimary' => 'Llamadas (ampliado)',
      'tasksPrimary' => 'Tareas (ampliado)',
      'emailsPrimary' => 'Correos (ampliado)',
      'targetLists' => 'Listas de Intereses',
      'campaignLogRecords' => 'Historial de Campañas',
      'campaign' => 'Campaña',
      'portalUsers' => 'Usuarios del Portal',
      'originalLead' => 'Referencia Original'
    ],
    'options' => [
      'type' => [
        'Customer' => 'Cliente',
        'Investor' => 'Inversor',
        'Partner' => 'Socio',
        'Reseller' => 'Revendedor'
      ],
      'industry' => [
        'Aerospace' => 'Aeroespacial',
        'Agriculture' => 'Agricultura',
        'Advertising' => 'Publicidad',
        'Apparel & Accessories' => 'Ropa y Accesorios',
        'Architecture' => 'Arquitectura',
        'Automotive' => 'Automotriz',
        'Banking' => 'Banca',
        'Biotechnology' => 'Biotecnolodía',
        'Building Materials & Equipment' => 'Materiales de construcción y equipamiento',
        'Chemical' => 'Química',
        'Construction' => 'Construcción',
        'Computer' => 'Computación',
        'Defense' => 'Defensa',
        'Creative' => 'Creativo',
        'Culture' => 'Cultura',
        'Consulting' => 'Consultando',
        'Education' => 'Educación',
        'Electronics' => 'Electrónicos',
        'Electric Power' => 'Energía eléctrica',
        'Energy' => 'Energía',
        'Entertainment & Leisure' => 'Entretenimiento y Ocio',
        'Finance' => 'Finanzas',
        'Food & Beverage' => 'Alimentación y bebidas',
        'Grocery' => 'Comestibles',
        'Hospitality' => 'Hospitalidad',
        'Healthcare' => 'Cuidado de la Salud',
        'Insurance' => 'Seguros',
        'Legal' => 'Jurídico',
        'Manufacturing' => 'Fabricación',
        'Mass Media' => 'Medios masivos',
        'Mining' => 'Minería',
        'Music' => 'Música',
        'Marketing' => 'Marketing',
        'Publishing' => 'Publicaciones',
        'Petroleum' => 'Petróleo',
        'Real Estate' => 'Bienes Raices',
        'Retail' => 'Menudeo',
        'Shipping' => 'Entrega',
        'Service' => 'Servicio',
        'Support' => 'Soporte',
        'Sports' => 'Deportes',
        'Software' => 'Software',
        'Technology' => 'Tecnología',
        'Telecommunications' => 'Telecomunicaciones',
        'Television' => 'Televisión',
        'Testing, Inspection & Certification' => 'Prueba, Inspección y Certificación',
        'Transportation' => 'Transporte',
        'Travel' => 'Viaje',
        'Venture Capital' => 'Capital de Riesgo',
        'Wholesale' => 'Compra Total',
        'Water' => 'Agua'
      ]
    ],
    'labels' => [
      'Create Account' => 'Crear Cuenta',
      'Copy Billing' => 'Copia Facturación',
      'Set Primary' => 'Es Primario'
    ],
    'presetFilters' => [
      'customers' => 'Clientes',
      'partners' => 'Socios',
      'recentlyCreated' => 'Recientemente Creado(a)'
    ]
  ],
  'Calendar' => [
    'modes' => [
      'month' => 'Mes',
      'week' => 'Semana',
      'day' => 'Día',
      'agendaWeek' => 'Semana',
      'agendaDay' => 'Día',
      'timeline' => 'Cronograma'
    ],
    'labels' => [
      'Today' => 'Hoy',
      'Create' => 'Crear',
      'Shared' => 'Compartido',
      'Add User' => 'Agregar Usuario',
      'current' => 'actual',
      'time' => 'hora',
      'User List' => 'Lista de Usuarios',
      'Manage Users' => 'Usuarios',
      'View Calendar' => 'Ver Calendario',
      'Create Shared View' => 'Crear Vista Compartida'
    ]
  ],
  'Call' => [
    'fields' => [
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estátus',
      'dateStart' => 'Fecha de Comienzo',
      'dateEnd' => 'Fecha de Finalización',
      'direction' => 'Dirección',
      'duration' => 'Duración',
      'description' => 'Descripción',
      'users' => 'Usuarios',
      'contacts' => 'Contactos',
      'leads' => 'Referencias',
      'reminders' => 'Recordatorios',
      'account' => 'Cuenta',
      'acceptanceStatus' => 'Estátus de Aprobación'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Planeadas',
        'Held' => 'Retenida',
        'Not Held' => 'Pendiente'
      ],
      'direction' => [
        'Outbound' => 'Saliente',
        'Inbound' => 'Entrante'
      ],
      'acceptanceStatus' => [
        'None' => 'Ninguno',
        'Accepted' => 'Aprobado',
        'Declined' => 'Rechazado',
        'Tentative' => 'Tentativa'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Marcar como Retenida',
      'setNotHeld' => 'Marcar como Pendiente'
    ],
    'labels' => [
      'Create Call' => 'Crear Llamada',
      'Set Held' => 'Marcar como Retenida',
      'Set Not Held' => 'Marcar como Pendiente',
      'Send Invitations' => 'Enviar Invitaciones'
    ],
    'presetFilters' => [
      'planned' => 'Planeadas',
      'held' => 'Retenida',
      'todays' => 'De Hoy'
    ]
  ],
  'Campaign' => [
    'fields' => [
      'name' => 'Nombre',
      'description' => 'Descripción',
      'status' => 'Estátus',
      'type' => 'Tipo',
      'startDate' => 'Fecha de Inicio',
      'endDate' => 'Fecha de Fin',
      'targetLists' => 'Lista de Intereses',
      'excludingTargetLists' => 'Listas de Intereses Excluidas',
      'sentCount' => 'Enviado',
      'openedCount' => 'Abierto',
      'clickedCount' => 'Leídos',
      'optedOutCount' => 'Rechazado',
      'bouncedCount' => 'Rebotados',
      'optedInCount' => 'Opt-In aceptado',
      'hardBouncedCount' => 'No Existen',
      'softBouncedCount' => 'No Aceptados',
      'leadCreatedCount' => 'Referencias Creadas',
      'revenue' => 'Ingresos',
      'revenueConverted' => 'ingresos (convertido)',
      'budget' => 'Presupuesto',
      'budgetConverted' => 'Presupuesto (convertido)',
      'budgetCurrency' => 'Budget Currency',
      'contactsTemplate' => 'Formato de Contactos',
      'leadsTemplate' => 'Formato de Referencias',
      'accountsTemplate' => 'Formato de Cuentas',
      'usersTemplate' => 'Formato de Usuarios',
      'mailMergeOnlyWithAddress' => 'Saltar registros sin dirección capturada'
    ],
    'links' => [
      'targetLists' => 'Listas de Intereses',
      'excludingTargetLists' => 'Listas de Intereses Excluidas',
      'accounts' => 'Cuentas',
      'contacts' => 'Contactos',
      'leads' => 'Referencias',
      'opportunities' => 'Oportunidades',
      'campaignLogRecords' => 'Historial',
      'massEmails' => 'Correos Masivos',
      'trackingUrls' => 'Seguimiento a URLs',
      'contactsTemplate' => 'Formato de Contactos',
      'leadsTemplate' => 'Formato de Referencias',
      'accountsTemplate' => 'Formato de Cuentas',
      'usersTemplate' => 'Formato de Usuarios'
    ],
    'options' => [
      'type' => [
        'Email' => 'Correo electrónico',
        'Web' => 'Web',
        'Television' => 'Televisión',
        'Radio' => 'Radio',
        'Newsletter' => 'Periódico',
        'Mail' => 'Correo'
      ],
      'status' => [
        'Planning' => 'Planificación',
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
        'Complete' => 'Completada'
      ]
    ],
    'labels' => [
      'Create Campaign' => 'Crear Campaña',
      'Target Lists' => 'Listas de Intereses',
      'Statistics' => 'Estadísticas',
      'hard' => 'duro',
      'soft' => 'suave',
      'Unsubscribe' => 'Cancelar suscripción',
      'Mass Emails' => 'Correos Masivos',
      'Email Templates' => 'Correo Modelo',
      'Unsubscribe again' => 'Cancelar otra vez la suscripción',
      'Subscribe again' => 'Volverse a suscribir',
      'Create Target List' => 'Crear Lista de Obejtivos',
      'Mail Merge' => 'Generar Correos',
      'Generate Mail Merge PDF' => 'Generar PDF para Correos'
    ],
    'presetFilters' => [
      'active' => 'Activo'
    ],
    'messages' => [
      'unsubscribed' => 'Usted ha cancelado la suscripción a nuestra lista de correo.',
      'subscribedAgain' => 'Usted se ha vuelto a suscribir.'
    ],
    'tooltips' => [
      'targetLists' => 'Intereses que deben recibir mensajes.',
      'excludingTargetLists' => 'Los intereses que no deben recibir mensajes.'
    ]
  ],
  'CampaignLogRecord' => [
    'fields' => [
      'action' => 'Acción',
      'actionDate' => 'Fecha',
      'data' => 'Datos',
      'campaign' => 'Campaña',
      'parent' => 'Interés',
      'object' => 'Objeto',
      'application' => 'Aplicacion',
      'queueItem' => 'Item de la Lista',
      'stringData' => 'Datos Alfanuméricos',
      'stringAdditionalData' => 'Datos Alfanuméricos Adicionales',
      'isTest' => 'Es una prueba'
    ],
    'links' => [
      'queueItem' => 'Elemento de la Cola',
      'parent' => 'Padre',
      'object' => 'Objeto',
      'campaign' => 'Campaña'
    ],
    'options' => [
      'action' => [
        'Sent' => 'Enviado',
        'Opened' => 'Abierto',
        'Opted Out' => 'Rechazado',
        'Bounced' => 'Rebotados',
        'Clicked' => 'Leído',
        'Lead Created' => 'Referencias Creadas',
        'Opted In' => 'Opt-In aceptado'
      ]
    ],
    'labels' => [
      'All' => 'Todos'
    ],
    'presetFilters' => [
      'sent' => 'Enviado',
      'opened' => 'Abierto',
      'optedOut' => 'Rechazado',
      'optedIn' => 'Opt-In aceptado',
      'bounced' => 'Rebotados',
      'clicked' => 'Leído',
      'leadCreated' => 'Referencia Creada'
    ]
  ],
  'CampaignTrackingUrl' => [
    'fields' => [
      'url' => 'URL',
      'action' => 'Action',
      'urlToUse' => 'Código para insertar en lugar de la URL',
      'message' => 'Message',
      'campaign' => 'Campaña'
    ],
    'links' => [
      'campaign' => 'Campaña'
    ],
    'labels' => [
      'Create CampaignTrackingUrl' => 'Crear Seguimiento a URLs'
    ],
    'options' => [
      'action' => [
        'Redirect' => 'Redirect',
        'Show Message' => 'Show Message'
      ]
    ],
    'tooltips' => [
      'url' => 'The recipient will be redirected to this location after they follow the link.',
      'message' => 'The message will be shown to the recipient after they follow the link. Markdown is supported.'
    ]
  ],
  'Case' => [
    'fields' => [
      'name' => 'Nombre',
      'number' => 'Número',
      'status' => 'Estátus',
      'account' => 'Cuenta',
      'contact' => 'Contacto',
      'contacts' => 'Contactos',
      'priority' => 'Prioridad',
      'type' => 'Tipo',
      'description' => 'Descripción',
      'inboundEmail' => 'Cuenta de Correo de Grupo',
      'lead' => 'Referencia',
      'attachments' => 'Adjuntos',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'inboundEmail' => 'Cuenta de Correo de Grupo',
      'account' => 'Cuenta',
      'contact' => 'Contacto (Primario)',
      'Contacts' => 'Contactos',
      'meetings' => 'Presentaciones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'emails' => 'Correos',
      'articles' => 'Artículos de la Base de Conocimientos',
      'lead' => 'Referencia',
      'attachments' => 'Adjuntos'
    ],
    'options' => [
      'status' => [
        'New' => 'Nuevo',
        'Assigned' => 'Asignado',
        'Pending' => 'Pendiente',
        'Closed' => 'Cerrados',
        'Rejected' => 'Rechazado',
        'Duplicate' => 'Duplicar'
      ],
      'priority' => [
        'Low' => 'Baja',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente'
      ],
      'type' => [
        'Question' => 'Pregunta',
        'Incident' => 'Incidente',
        'Problem' => 'Problema'
      ]
    ],
    'labels' => [
      'Create Case' => 'Crear Caso',
      'Close' => 'Cerrar',
      'Reject' => 'Rechazar',
      'Closed' => 'Cerrados',
      'Rejected' => 'Rechazado'
    ],
    'presetFilters' => [
      'open' => 'Abiertos',
      'closed' => 'Cerrados'
    ]
  ],
  'Contact' => [
    'fields' => [
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'title' => 'Título de la Cuenta Primaria',
      'account' => 'Cuenta',
      'accounts' => 'Cuentas',
      'phoneNumber' => 'Teléfono',
      'accountType' => 'Tipo de Cuenta',
      'doNotCall' => 'No Llamar',
      'address' => 'Dirección',
      'opportunityRole' => 'Rol de Oportunidad',
      'accountRole' => 'Título',
      'description' => 'Descripción',
      'campaign' => 'Campaña',
      'targetLists' => 'Listas de Intereses',
      'targetList' => 'Lista de Intereses',
      'portalUser' => 'Usuario del Portal',
      'hasPortalUser' => 'Has Portal User',
      'originalLead' => 'Referencia Original',
      'acceptanceStatus' => 'Estatus de Aprobación',
      'accountIsInactive' => 'Cuenta Inactiva',
      'acceptanceStatusMeetings' => 'Estatus de Aceptación (Presentaciones)',
      'acceptanceStatusCalls' => 'Estátus de Aceptación (Llamadas)',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'opportunities' => 'Oportunidades',
      'cases' => 'Casos',
      'targetLists' => 'Listas de Intereses',
      'campaignLogRecords' => 'Registrar Campaña',
      'campaign' => 'Campaña',
      'account' => 'Cuenta (Primaria)',
      'accounts' => 'Cuentas',
      'casesPrimary' => 'Casos (Primario)',
      'tasksPrimary' => 'Tareas (extendidas)',
      'opportunitiesPrimary' => 'Opportunities (Primary)',
      'portalUser' => 'Usuario del Portal',
      'originalLead' => 'Referencia Original',
      'documents' => 'Documentos'
    ],
    'labels' => [
      'Create Contact' => 'Crear Contacto'
    ],
    'options' => [
      'opportunityRole' => [
        '' => '',
        'Decision Maker' => 'Tomador de Desiciones',
        'Evaluator' => 'Evaluador',
        'Influencer' => 'Factor de Influencia'
      ]
    ],
    'presetFilters' => [
      'portalUsers' => 'Usuarios del Portal',
      'notPortalUsers' => 'No son Usuarios del Portal',
      'accountActive' => 'Activo'
    ]
  ],
  'Document' => [
    'labels' => [
      'Create Document' => 'Crear Documento',
      'Details' => 'Detalles'
    ],
    'fields' => [
      'name' => 'Nombre',
      'status' => 'Estátus',
      'file' => 'Archivo',
      'type' => 'Tipo',
      'publishDate' => 'Publicar Fecha',
      'expirationDate' => 'Fecha de Expiración',
      'description' => 'Descripción',
      'accounts' => 'Cuentas',
      'folder' => 'Carpeta'
    ],
    'links' => [
      'accounts' => 'Cuentas',
      'opportunities' => 'Oportunidades',
      'folder' => 'Carpeta',
      'leads' => 'Referencias',
      'contacts' => 'Contactos'
    ],
    'options' => [
      'status' => [
        'Active' => 'Activo',
        'Draft' => 'Borrador',
        'Expired' => 'Expirado',
        'Canceled' => 'Cancelado'
      ],
      'type' => [
        '' => 'Ninguno',
        'Contract' => 'Contrato',
        'NDA' => 'AdC',
        'EULA' => 'EULA',
        'License Agreement' => 'Contrato de Licencia'
      ]
    ],
    'presetFilters' => [
      'active' => 'Activo',
      'draft' => 'Borrador'
    ]
  ],
  'DocumentFolder' => [
    'labels' => [
      'Create DocumentFolder' => 'Crear Carpeta de Documentos',
      'Manage Categories' => 'Carpetas',
      'Documents' => 'Documentos'
    ],
    'links' => [
      'documents' => 'Documentos'
    ]
  ],
  'EmailQueueItem' => [
    'fields' => [
      'name' => 'Nombre',
      'status' => 'Estátus',
      'target' => 'Interés',
      'sentAt' => 'Enviado',
      'attemptCount' => 'Intentos',
      'emailAddress' => 'Correo Electrónico',
      'massEmail' => 'Correo Masivo',
      'isTest' => 'Es una prueba'
    ],
    'links' => [
      'target' => 'Interés',
      'massEmail' => 'Correo Masivo'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pendiente',
        'Sent' => 'Enviado',
        'Failed' => 'Falló',
        'Sending' => 'Enviando'
      ]
    ],
    'presetFilters' => [
      'pending' => 'Pendiente',
      'sent' => 'Enviado',
      'failed' => 'Falló'
    ]
  ],
  'KnowledgeBaseArticle' => [
    'labels' => [
      'Create KnowledgeBaseArticle' => 'Crear Artículo',
      'Any' => 'Cualquiera',
      'Send in Email' => 'Enviar por Correo',
      'Move Up' => 'Mover Arriba',
      'Move Down' => 'Mover Abajo',
      'Move to Top' => 'Mover al Principio',
      'Move to Bottom' => 'Mover al Final'
    ],
    'fields' => [
      'name' => 'Nombre',
      'status' => 'Estátus',
      'type' => 'Tipo',
      'attachments' => 'Datos adjuntos',
      'publishDate' => 'Fecha de Publicación',
      'expirationDate' => 'Fecha de Expiración',
      'description' => 'Descripción',
      'body' => 'Cuerpo',
      'categories' => 'Categorías',
      'language' => 'Idioma',
      'portals' => 'Portales'
    ],
    'links' => [
      'cases' => 'Casos',
      'opportunities' => 'Oportunidades',
      'categories' => 'Categorías',
      'portals' => 'Portales'
    ],
    'options' => [
      'status' => [
        'In Review' => 'En Revisión',
        'Draft' => 'Borrador',
        'Archived' => 'Arcivado',
        'Published' => 'Publicado'
      ],
      'type' => [
        'Article' => 'Artículo'
      ]
    ],
    'tooltips' => [
      'portals' => 'El Artículo estará disponible sólo en algunos portales.'
    ],
    'presetFilters' => [
      'published' => 'Publicado'
    ]
  ],
  'KnowledgeBaseCategory' => [
    'labels' => [
      'Create KnowledgeBaseCategory' => 'Crear Categoría',
      'Manage Categories' => 'Categorías',
      'Articles' => 'Artículos'
    ],
    'links' => [
      'articles' => 'Artículos'
    ]
  ],
  'Lead' => [
    'labels' => [
      'Converted To' => 'Convertido a',
      'Create Lead' => 'Crear Referencia',
      'Convert' => 'Convertir',
      'convert' => 'Convertir'
    ],
    'fields' => [
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'title' => 'Título',
      'website' => 'Sito Web',
      'phoneNumber' => 'Teléfono',
      'accountName' => 'Nombre de Cuenta',
      'doNotCall' => 'No Llamar',
      'address' => 'Dirección',
      'status' => 'Estátus',
      'source' => 'Fuente',
      'opportunityAmount' => 'Costo de Oportunidad',
      'opportunityAmountConverted' => 'Costo de Oportunidad (convertido)',
      'description' => 'Descripción',
      'createdAccount' => 'Cuenta',
      'createdContact' => 'Contacto',
      'createdOpportunity' => 'Oportunidad',
      'convertedAt' => 'Converted At',
      'campaign' => 'Campaña',
      'targetLists' => 'Listas de Intereses',
      'targetList' => 'Lista de Intereses',
      'industry' => 'Industria',
      'acceptanceStatus' => 'Estatus de Aprobación',
      'opportunityAmountCurrency' => 'Importe de la Oportunidad',
      'acceptanceStatusMeetings' => 'Estatus de Aceptación (Presentaciones)',
      'acceptanceStatusCalls' => 'Estátus de Aceptación (Llamadas)',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'targetLists' => 'Listas de Intereses',
      'campaignLogRecords' => 'Registrar Campaña',
      'campaign' => 'Campaña',
      'createdAccount' => 'Cuenta',
      'createdContact' => 'Contacto',
      'createdOpportunity' => 'Oportunidad',
      'cases' => 'Casos',
      'documents' => 'Documentos'
    ],
    'options' => [
      'status' => [
        'New' => 'Nuevo',
        'Assigned' => 'Asignado',
        'In Process' => 'En Proceso',
        'Converted' => 'Convertidos',
        'Recycled' => 'Reciclado',
        'Dead' => 'Muerto'
      ],
      'source' => [
        'Call' => 'Llamada',
        'Email' => 'Correo electrónico',
        'Existing Customer' => 'Cliente Existente',
        'Partner' => 'Socio',
        'Public Relations' => 'Relaciones Públicas',
        'Web Site' => 'Sitio Web',
        'Campaign' => 'Campaña',
        'Other' => 'Otro'
      ]
    ],
    'presetFilters' => [
      'active' => 'Activo',
      'actual' => 'Actuales',
      'converted' => 'Convertidos'
    ]
  ],
  'MassEmail' => [
    'fields' => [
      'name' => 'Nombre',
      'status' => 'Estado',
      'storeSentEmails' => 'Almacenar Correos Enviados',
      'startAt' => 'Fecha de Comienzo',
      'fromAddress' => 'De (Dirección)',
      'fromName' => 'De (Nombre)',
      'replyToAddress' => 'Responder a la dirección',
      'replyToName' => 'Responder al Nombre',
      'campaign' => 'Campaña',
      'emailTemplate' => 'Plantilla de Correo',
      'inboundEmail' => 'Cuenta de correo',
      'targetLists' => 'Lista de Intereses',
      'excludingTargetLists' => 'Listas de Intereses Excluídos',
      'optOutEntirely' => 'Confirmación Completada',
      'smtpAccount' => 'Cuenta SMTP'
    ],
    'links' => [
      'targetLists' => 'Listas de Intereses',
      'excludingTargetLists' => 'Listas de Intereses Excluídos',
      'queueItems' => 'Items en cola',
      'campaign' => 'Campaña',
      'emailTemplate' => 'Plantilla de Correo',
      'inboundEmail' => 'Cuenta de correo'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Borrador',
        'Pending' => 'Pendiente',
        'In Process' => 'En Proceso',
        'Complete' => 'Completado',
        'Canceled' => 'Cancelado',
        'Failed' => 'Falló'
      ]
    ],
    'labels' => [
      'Create MassEmail' => 'Crear correo masivo',
      'Send Test' => 'Enviar prueba',
      'System SMTP' => 'Sistema SMTP',
      'system' => 'sistema',
      'group' => 'grupo'
    ],
    'messages' => [
      'selectAtLeastOneTarget' => 'Seleccione al menos un interés',
      'testSent' => 'Correo(s) de prueba que se enviarán'
    ],
    'tooltips' => [
      'optOutEntirely' => 'Los correos de destinatarios que cancelaron su suscripción serán marcados como rechazados y ya no recibirán correos masivos.',
      'targetLists' => 'Los intereses que deben recibir los mensajes.',
      'excludingTargetLists' => 'Los intereses que no deben recibir mensajes.',
      'storeSentEmails' => 'Los correos se guardarán en el CRM.'
    ],
    'presetFilters' => [
      'actual' => 'Actual',
      'complete' => 'Completo'
    ]
  ],
  'Meeting' => [
    'fields' => [
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estatus',
      'dateStart' => 'Fecha de Comienzo',
      'dateEnd' => 'Fecha de Finalización',
      'duration' => 'Duración',
      'description' => 'Descripción',
      'users' => 'Usuarios',
      'contacts' => 'Contactos',
      'leads' => 'Referencias',
      'reminders' => 'Recordatorios',
      'account' => 'Cuenta',
      'acceptanceStatus' => 'Estátus de aprobación',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'isAllDay' => 'Is All-Day',
      'sourceEmail' => 'Source Email',
      'Acceptance' => 'Aceptación'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Planeadas',
        'Held' => 'Retenida',
        'Not Held' => 'Pendiente'
      ],
      'acceptanceStatus' => [
        'None' => 'Ninguno',
        'Accepted' => 'Aprobado',
        'Declined' => 'Rechazado',
        'Tentative' => 'Tentativa'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Marcar como Retenida',
      'setNotHeld' => 'Marcar como Pendiente'
    ],
    'labels' => [
      'Create Meeting' => 'Crear Presentación',
      'Set Held' => 'Marcar como Retenida',
      'Set Not Held' => 'Marcar como Pendiente',
      'Send Invitations' => 'Enviar Invitaciones',
      'Send Cancellation' => 'Send Cancellation',
      'on time' => 'a tiempo',
      'before' => 'antes',
      'All-Day' => 'All-Day',
      'Acceptance' => 'Acceptance'
    ],
    'presetFilters' => [
      'planned' => 'Planeadas',
      'held' => 'Retenidas',
      'todays' => 'De Hoy'
    ],
    'messages' => [
      'sendInvitationsToSelectedAttendees' => 'Invitation emails will be sent to the selected attendees.',
      'sendCancellationsToSelectedAttendees' => 'Cancellation emails will be sent to the selected attendees.',
      'selectAcceptanceStatus' => 'Set your acceptance status.',
      'nothingHasBeenSent' => 'No se ha enviado nada'
    ]
  ],
  'Opportunity' => [
    'fields' => [
      'name' => 'Nombre',
      'account' => 'Cuenta',
      'stage' => 'Etapa',
      'amount' => 'Cantidad',
      'probability' => 'Probabilidad, %',
      'leadSource' => 'Orígen de la Referencia',
      'doNotCall' => 'No Llamar',
      'closeDate' => 'Fecha de cierre',
      'contacts' => 'Contactos',
      'contact' => 'Contact (Primary)',
      'description' => 'Descripción',
      'amountConverted' => 'Cantidad (convertido)',
      'amountWeightedConverted' => 'Cantidad Ponderada',
      'campaign' => 'Campaña',
      'originalLead' => 'Referencia original',
      'amountCurrency' => 'Importe en Moneda',
      'contactRole' => 'Rol del Contacto',
      'lastStage' => 'Última Etapa'
    ],
    'links' => [
      'contacts' => 'Contactos',
      'contact' => 'Contact (Primary)',
      'documents' => 'Documentos',
      'campaign' => 'Campaña',
      'originalLead' => 'Referencia original'
    ],
    'options' => [
      'stage' => [
        'Prospecting' => 'Prospección',
        'Qualification' => 'Calificación',
        'Proposal' => 'Cotización con Propuesta',
        'Negotiation' => 'Negociación',
        'Needs Analysis' => 'Análisis de Necesidades',
        'Value Proposition' => 'Propuesta de Valor',
        'Id. Decision Makers' => 'Id. Tomadores de Decisiones',
        'Perception Analysis' => 'Análisis de la Percepción',
        'Proposal/Price Quote' => 'Cotización con Propuesta/Precio',
        'Negotiation/Review' => 'Negociación/Revisión',
        'Closed Won' => 'Cerrado Ganado',
        'Closed Lost' => 'Cerrado Perdido'
      ]
    ],
    'labels' => [
      'Create Opportunity' => 'Crear Oportunidad'
    ],
    'presetFilters' => [
      'open' => 'Abiertos',
      'won' => 'Ganados',
      'lost' => 'Perdido'
    ]
  ],
  'TargetList' => [
    'fields' => [
      'name' => 'Nombre',
      'description' => 'Descripción',
      'entryCount' => 'Contador de entradas',
      'optedOutCount' => 'Contador de Exclusiones',
      'campaigns' => 'Campañas',
      'endDate' => 'Fecha de Fin',
      'targetLists' => 'Listas de Intereses',
      'includingActionList' => 'Incluyendo',
      'excludingActionList' => 'Excluyendo',
      'targetStatus' => 'Status del Interés',
      'isOptedOut' => 'Se ha Excluido',
      'sourceCampaign' => 'Source Campaign'
    ],
    'links' => [
      'accounts' => 'Cuentas',
      'contacts' => 'Contactos',
      'leads' => 'Referencias',
      'campaigns' => 'Campañas',
      'massEmails' => 'Correos Masivos'
    ],
    'options' => [
      'type' => [
        'Email' => 'Correo electrónico',
        'Web' => 'Web',
        'Television' => 'Televisión',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter'
      ],
      'targetStatus' => [
        'Opted Out' => 'Excluido',
        'Listed' => 'Listado'
      ]
    ],
    'labels' => [
      'Create TargetList' => 'Crear lista de Intereses',
      'Opted Out' => 'Rechazado',
      'Cancel Opt-Out' => 'Cancelar Confirmación',
      'Opt-Out' => 'Confirmar'
    ]
  ],
  'Task' => [
    'fields' => [
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estátus',
      'dateStart' => 'Fecha de Comienzo',
      'dateEnd' => 'Fecha de vencimiento',
      'dateStartDate' => 'Fecha de Inicio (todo el día)',
      'dateEndDate' => 'Fecha de fin (todo el día)',
      'priority' => 'Prioridad',
      'description' => 'Descripción',
      'isOverdue' => 'Atrasado',
      'account' => 'Cuenta',
      'dateCompleted' => 'Fecha de completado',
      'attachments' => 'Adjuntos',
      'reminders' => 'Recordatorios',
      'contact' => 'Contacto'
    ],
    'links' => [
      'attachments' => 'Adjuntos',
      'account' => 'Cuenta',
      'contact' => 'Contacto',
      'email' => 'Email'
    ],
    'options' => [
      'status' => [
        'Not Started' => 'Sin Empezar',
        'Started' => 'Comenzada',
        'Completed' => 'Completada',
        'Canceled' => 'Cancelada',
        'Deferred' => 'Diferida'
      ],
      'priority' => [
        'Low' => 'Baja',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente'
      ]
    ],
    'labels' => [
      'Create Task' => 'Crear Tarea',
      'Complete' => 'Completada',
      'overdue' => 'overdue'
    ],
    'presetFilters' => [
      'actual' => 'Actuales',
      'completed' => 'Completado',
      'deferred' => 'Diferida',
      'todays' => 'De Hoy',
      'overdue' => 'Atrazadas'
    ],
    'nameOptions' => [
      'replyToEmail' => 'Reply to email'
    ]
  ]
];
