<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * appProdProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appProdProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /*
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'a2lix_translation_form.default.listener.translations' => 'getA2lixTranslationForm_Default_Listener_TranslationsService',
            'a2lix_translation_form.default.listener.translationsforms' => 'getA2lixTranslationForm_Default_Listener_TranslationsformsService',
            'a2lix_translation_form.default.service.parameter_locale_provider' => 'getA2lixTranslationForm_Default_Service_ParameterLocaleProviderService',
            'a2lix_translation_form.default.service.translation' => 'getA2lixTranslationForm_Default_Service_TranslationService',
            'a2lix_translation_form.default.type.translatedentity' => 'getA2lixTranslationForm_Default_Type_TranslatedentityService',
            'a2lix_translation_form.default.type.translations' => 'getA2lixTranslationForm_Default_Type_TranslationsService',
            'a2lix_translation_form.default.type.translationsfields' => 'getA2lixTranslationForm_Default_Type_TranslationsfieldsService',
            'a2lix_translation_form.default.type.translationsforms' => 'getA2lixTranslationForm_Default_Type_TranslationsformsService',
            'a2lix_translation_form.default.type.translationslocalesselector' => 'getA2lixTranslationForm_Default_Type_TranslationslocalesselectorService',
            'alertify' => 'getAlertifyService',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter.less' => 'getAssetic_Filter_LessService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'bazinga.jstranslation.controller' => 'getBazinga_Jstranslation_ControllerService',
            'bazinga.jstranslation.translation_dumper' => 'getBazinga_Jstranslation_TranslationDumperService',
            'bazinga.jstranslation.translation_finder' => 'getBazinga_Jstranslation_TranslationFinderService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.default_clearer' => 'getCache_DefaultClearerService',
            'cache.serializer' => 'getCache_SerializerService',
            'cache.system' => 'getCache_SystemService',
            'cache.validator' => 'getCache_ValidatorService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.media' => 'getForm_Type_MediaService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.seo.page' => 'getForm_Type_Seo_PageService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_js_routing.controller' => 'getFosJsRouting_ControllerService',
            'fos_js_routing.extractor' => 'getFosJsRouting_ExtractorService',
            'fos_js_routing.serializer' => 'getFosJsRouting_SerializerService',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.user_provider.username' => 'getFosUser_UserProvider_UsernameService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.canonical_fields_updater' => 'getFosUser_Util_CanonicalFieldsUpdaterService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.password_updater' => 'getFosUser_Util_PasswordUpdaterService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.accessor_strategy' => 'getJmsSerializer_AccessorStrategyService',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService',
            'jms_serializer.expression_evaluator' => 'getJmsSerializer_ExpressionEvaluatorService',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.listener.voters' => 'getKnpMenu_Listener_VotersService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'knp_menu.voter.router' => 'getKnpMenu_Voter_RouterService',
            'liip_imagine' => 'getLiipImagineService',
            'liip_imagine.binary.loader.default' => 'getLiipImagine_Binary_Loader_DefaultService',
            'liip_imagine.binary.loader.prototype.filesystem' => 'getLiipImagine_Binary_Loader_Prototype_FilesystemService',
            'liip_imagine.binary.loader.prototype.stream' => 'getLiipImagine_Binary_Loader_Prototype_StreamService',
            'liip_imagine.binary.mime_type_guesser' => 'getLiipImagine_Binary_MimeTypeGuesserService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.default' => 'getLiipImagine_Cache_Resolver_DefaultService',
            'liip_imagine.cache.resolver.no_cache_web_path' => 'getLiipImagine_Cache_Resolver_NoCacheWebPathService',
            'liip_imagine.cache.signer' => 'getLiipImagine_Cache_SignerService',
            'liip_imagine.controller' => 'getLiipImagine_ControllerService',
            'liip_imagine.data.loader.stream.profile_photos' => 'getLiipImagine_Data_Loader_Stream_ProfilePhotosService',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService',
            'liip_imagine.extension_guesser' => 'getLiipImagine_ExtensionGuesserService',
            'liip_imagine.filter.configuration' => 'getLiipImagine_Filter_ConfigurationService',
            'liip_imagine.filter.loader.auto_rotate' => 'getLiipImagine_Filter_Loader_AutoRotateService',
            'liip_imagine.filter.loader.background' => 'getLiipImagine_Filter_Loader_BackgroundService',
            'liip_imagine.filter.loader.crop' => 'getLiipImagine_Filter_Loader_CropService',
            'liip_imagine.filter.loader.downscale' => 'getLiipImagine_Filter_Loader_DownscaleService',
            'liip_imagine.filter.loader.flip' => 'getLiipImagine_Filter_Loader_FlipService',
            'liip_imagine.filter.loader.grayscale' => 'getLiipImagine_Filter_Loader_GrayscaleService',
            'liip_imagine.filter.loader.interlace' => 'getLiipImagine_Filter_Loader_InterlaceService',
            'liip_imagine.filter.loader.paste' => 'getLiipImagine_Filter_Loader_PasteService',
            'liip_imagine.filter.loader.relative_resize' => 'getLiipImagine_Filter_Loader_RelativeResizeService',
            'liip_imagine.filter.loader.resize' => 'getLiipImagine_Filter_Loader_ResizeService',
            'liip_imagine.filter.loader.rotate' => 'getLiipImagine_Filter_Loader_RotateService',
            'liip_imagine.filter.loader.scale' => 'getLiipImagine_Filter_Loader_ScaleService',
            'liip_imagine.filter.loader.strip' => 'getLiipImagine_Filter_Loader_StripService',
            'liip_imagine.filter.loader.thumbnail' => 'getLiipImagine_Filter_Loader_ThumbnailService',
            'liip_imagine.filter.loader.upscale' => 'getLiipImagine_Filter_Loader_UpscaleService',
            'liip_imagine.filter.loader.watermark' => 'getLiipImagine_Filter_Loader_WatermarkService',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService',
            'liip_imagine.filter.post_processor.jpegoptim' => 'getLiipImagine_Filter_PostProcessor_JpegoptimService',
            'liip_imagine.filter.post_processor.mozjpeg' => 'getLiipImagine_Filter_PostProcessor_MozjpegService',
            'liip_imagine.filter.post_processor.optipng' => 'getLiipImagine_Filter_PostProcessor_OptipngService',
            'liip_imagine.filter.post_processor.pngquant' => 'getLiipImagine_Filter_PostProcessor_PngquantService',
            'liip_imagine.form.type.image' => 'getLiipImagine_Form_Type_ImageService',
            'liip_imagine.mime_type_guesser' => 'getLiipImagine_MimeTypeGuesserService',
            'liip_imagine.templating.helper' => 'getLiipImagine_Templating_HelperService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.activation_strategy.not_found' => 'getMonolog_ActivationStrategy_NotFoundService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => 'getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.snc_redis' => 'getMonolog_Logger_SncRedisService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'page.security.voter.page_debug' => 'getPage_Security_Voter_PageDebugService',
            'page.security.voter.page_owner' => 'getPage_Security_Voter_PageOwnerService',
            'page.subscriber' => 'getPage_SubscriberService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'serializer.mapping.cache.symfony' => 'getSerializer_Mapping_Cache_SymfonyService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'snc_redis.logger' => 'getSncRedis_LoggerService',
            'snc_redis.victoire' => 'getSncRedis_VictoireService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator.selector' => 'getTranslator_SelectorService',
            'translator_listener' => 'getTranslatorListenerService',
            'troopers_alertifybundle.event_listener' => 'getTroopersAlertifybundle_EventListenerService',
            'troopers_alertifybundle.session_handler' => 'getTroopersAlertifybundle_SessionHandlerService',
            'troopers_alertifybundle.twig.extension' => 'getTroopersAlertifybundle_Twig_ExtensionService',
            'troopers_assetic_injector.collector' => 'getTroopersAsseticInjector_CollectorService',
            'troopers_assetic_injector.collector_engine.require_all' => 'getTroopersAsseticInjector_CollectorEngine_RequireAllService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.intl' => 'getTwig_Extension_IntlService',
            'twig.extension.text' => 'getTwig_Extension_TextService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'victoire.form.blog.category' => 'getVictoire_Form_Blog_CategoryService',
            'victoire.repository.error_page' => 'getVictoire_Repository_ErrorPageService',
            'victoire.widget_filter.blog.set.default.values.form.listener' => 'getVictoire_WidgetFilter_Blog_Set_Default_Values_Form_ListenerService',
            'victoire.widget_filter.form.listener.presetdata' => 'getVictoire_WidgetFilter_Form_Listener_PresetdataService',
            'victoire.widget_filter.form.listener.presubmit' => 'getVictoire_WidgetFilter_Form_Listener_PresubmitService',
            'victoire_analytics.browser_event.subscriber' => 'getVictoireAnalytics_BrowserEvent_SubscriberService',
            'victoire_analytics.view_helper' => 'getVictoireAnalytics_ViewHelperService',
            'victoire_blog.article.container.form.type' => 'getVictoireBlog_Article_Container_Form_TypeService',
            'victoire_blog.article.form.type' => 'getVictoireBlog_Article_Form_TypeService',
            'victoire_blog.article.subscriber' => 'getVictoireBlog_Article_SubscriberService',
            'victoire_blog.article_menu.contextual' => 'getVictoireBlog_ArticleMenu_ContextualService',
            'victoire_blog.article_settings.form.type' => 'getVictoireBlog_ArticleSettings_Form_TypeService',
            'victoire_blog.article_settings_menu.contextual' => 'getVictoireBlog_ArticleSettingsMenu_ContextualService',
            'victoire_blog.article_template_menu.menu_listener.contextual' => 'getVictoireBlog_ArticleTemplateMenu_MenuListener_ContextualService',
            'victoire_blog.articletemplate' => 'getVictoireBlog_ArticletemplateService',
            'victoire_blog.blog.form.type' => 'getVictoireBlog_Blog_Form_TypeService',
            'victoire_blog.blog_category.form.type' => 'getVictoireBlog_BlogCategory_Form_TypeService',
            'victoire_blog.blog_choose.form.type' => 'getVictoireBlog_BlogChoose_Form_TypeService',
            'victoire_blog.blog_menu.contextual' => 'getVictoireBlog_BlogMenu_ContextualService',
            'victoire_blog.blog_menu_listener' => 'getVictoireBlog_BlogMenuListenerService',
            'victoire_blog.blog_page_menu.contextual' => 'getVictoireBlog_BlogPageMenu_ContextualService',
            'victoire_blog.blog_settings.form.type' => 'getVictoireBlog_BlogSettings_Form_TypeService',
            'victoire_blog.category_filters.form.type' => 'getVictoireBlog_CategoryFilters_Form_TypeService',
            'victoire_blog.date_filters.form.type' => 'getVictoireBlog_DateFilters_Form_TypeService',
            'victoire_blog.hierarchy_tree_type' => 'getVictoireBlog_HierarchyTreeTypeService',
            'victoire_blog.manager.article' => 'getVictoireBlog_Manager_ArticleService',
            'victoire_blog.manager.blog_reference_builder' => 'getVictoireBlog_Manager_BlogReferenceBuilderService',
            'victoire_blog.tag_filters.form.type' => 'getVictoireBlog_TagFilters_Form_TypeService',
            'victoire_blog.type.tags' => 'getVictoireBlog_Type_TagsService',
            'victoire_business_entity.annotation_driver' => 'getVictoireBusinessEntity_AnnotationDriverService',
            'victoire_business_entity.business_entity_subscriber' => 'getVictoireBusinessEntity_BusinessEntitySubscriberService',
            'victoire_business_entity.business_entity_type_extension' => 'getVictoireBusinessEntity_BusinessEntityTypeExtensionService',
            'victoire_business_entity.cache_reader' => 'getVictoireBusinessEntity_CacheReaderService',
            'victoire_business_entity.converter.parameter_converter' => 'getVictoireBusinessEntity_Converter_ParameterConverterService',
            'victoire_business_entity.provider.entity_proxy_provider' => 'getVictoireBusinessEntity_Provider_EntityProxyProviderService',
            'victoire_business_entity.security.voter.business_entity_owner_voter' => 'getVictoireBusinessEntity_Security_Voter_BusinessEntityOwnerVoterService',
            'victoire_business_entity.warmer' => 'getVictoireBusinessEntity_WarmerService',
            'victoire_business_page.business_page_builder' => 'getVictoireBusinessPage_BusinessPageBuilderService',
            'victoire_business_page.business_page_helper' => 'getVictoireBusinessPage_BusinessPageHelperService',
            'victoire_business_page.business_template.form.type' => 'getVictoireBusinessPage_BusinessTemplate_Form_TypeService',
            'victoire_business_page.business_template_menu_listener' => 'getVictoireBusinessPage_BusinessTemplateMenuListenerService',
            'victoire_business_page.businesstemplate_chain' => 'getVictoireBusinessPage_BusinesstemplateChainService',
            'victoire_business_page.businesstemplate_chain.businesstemplate' => 'getVictoireBusinessPage_BusinesstemplateChain_BusinesstemplateService',
            'victoire_business_page.manager.business_page_reference_builder' => 'getVictoireBusinessPage_Manager_BusinessPageReferenceBuilderService',
            'victoire_business_page.manager.virtual_business_page_reference_builder' => 'getVictoireBusinessPage_Manager_VirtualBusinessPageReferenceBuilderService',
            'victoire_business_page.transformer.virtual_to_business_page_transformer' => 'getVictoireBusinessPage_Transformer_VirtualToBusinessPageTransformerService',
            'victoire_core.admin_menu' => 'getVictoireCore_AdminMenuService',
            'victoire_core.admin_menu.navbar_bottom_left' => 'getVictoireCore_AdminMenu_NavbarBottomLeftService',
            'victoire_core.admin_menu.navbar_bottom_right' => 'getVictoireCore_AdminMenu_NavbarBottomRightService',
            'victoire_core.admin_menu.navbar_float_action' => 'getVictoireCore_AdminMenu_NavbarFloatActionService',
            'victoire_core.admin_menu.navbar_left' => 'getVictoireCore_AdminMenu_NavbarLeftService',
            'victoire_core.admin_menu.navbar_top' => 'getVictoireCore_AdminMenu_NavbarTopService',
            'victoire_core.admin_menu_builder' => 'getVictoireCore_AdminMenuBuilderService',
            'victoire_core.backend_menu_listener' => 'getVictoireCore_BackendMenuListenerService',
            'victoire_core.business_template_menu.contextual' => 'getVictoireCore_BusinessTemplateMenu_ContextualService',
            'victoire_core.cache' => 'getVictoireCore_CacheService',
            'victoire_core.cache_builder' => 'getVictoireCore_CacheBuilderService',
            'victoire_core.cache_subscriber' => 'getVictoireCore_CacheSubscriberService',
            'victoire_core.cache_warmer.entity_proxy_warmer' => 'getVictoireCore_CacheWarmer_EntityProxyWarmerService',
            'victoire_core.current_view' => 'getVictoireCore_CurrentViewService',
            'victoire_core.entity_proxy.cache_driver' => 'getVictoireCore_EntityProxy_CacheDriverService',
            'victoire_core.entity_proxy.fields_builder' => 'getVictoireCore_EntityProxy_FieldsBuilderService',
            'victoire_core.entity_proxy.form.type' => 'getVictoireCore_EntityProxy_Form_TypeService',
            'victoire_core.entity_proxy.subscriber' => 'getVictoireCore_EntityProxy_SubscriberService',
            'victoire_core.filter_chain' => 'getVictoireCore_FilterChainService',
            'victoire_core.helper.business_entity_helper' => 'getVictoireCore_Helper_BusinessEntityHelperService',
            'victoire_core.helper.queriable_business_entity_helper' => 'getVictoireCore_Helper_QueriableBusinessEntityHelperService',
            'victoire_core.listener.controller_listener' => 'getVictoireCore_Listener_ControllerListenerService',
            'victoire_core.media_menu_listener' => 'getVictoireCore_MediaMenuListenerService',
            'victoire_core.menu_dispatcher' => 'getVictoireCore_MenuDispatcherService',
            'victoire_core.page_menu.contextual' => 'getVictoireCore_PageMenu_ContextualService',
            'victoire_core.page_menu_listener' => 'getVictoireCore_PageMenuListenerService',
            'victoire_core.routing_loader' => 'getVictoireCore_RoutingLoaderService',
            'victoire_core.template_menu.contextual' => 'getVictoireCore_TemplateMenu_ContextualService',
            'victoire_core.template_menu_listener' => 'getVictoireCore_TemplateMenuListenerService',
            'victoire_core.twig.cms_extension' => 'getVictoireCore_Twig_CmsExtensionService',
            'victoire_core.url_builder' => 'getVictoireCore_UrlBuilderService',
            'victoire_core.victoire_collector' => 'getVictoireCore_VictoireCollectorService',
            'victoire_core.view_css_builder' => 'getVictoireCore_ViewCssBuilderService',
            'victoire_core.view_css_listener' => 'getVictoireCore_ViewCssListenerService',
            'victoire_core.view_helper' => 'getVictoireCore_ViewHelperService',
            'victoire_core.widget.form.type' => 'getVictoireCore_Widget_Form_TypeService',
            'victoire_core.widget_discriminator_map.subscriber' => 'getVictoireCore_WidgetDiscriminatorMap_SubscriberService',
            'victoire_core.widget_exception_handler' => 'getVictoireCore_WidgetExceptionHandlerService',
            'victoire_core.widget_fields.form.type' => 'getVictoireCore_WidgetFields_Form_TypeService',
            'victoire_core.widget_subscriber' => 'getVictoireCore_WidgetSubscriberService',
            'victoire_criteria.chain.data_source_chain' => 'getVictoireCriteria_Chain_DataSourceChainService',
            'victoire_criteria.criteria.domain_name_source' => 'getVictoireCriteria_Criteria_DomainNameSourceService',
            'victoire_criteria.criteria.request_data_source' => 'getVictoireCriteria_Criteria_RequestDataSourceService',
            'victoire_criteria.criteria.roles_data_source' => 'getVictoireCriteria_Criteria_RolesDataSourceService',
            'victoire_criteria.criteria.user_data_source' => 'getVictoireCriteria_Criteria_UserDataSourceService',
            'victoire_form.error_helper' => 'getVictoireForm_ErrorHelperService',
            'victoire_form.form.type.font_awesome_picker' => 'getVictoireForm_Form_Type_FontAwesomePickerService',
            'victoire_form.form.type.slug' => 'getVictoireForm_Form_Type_SlugService',
            'victoire_form.form.type.vic_form_actions' => 'getVictoireForm_Form_Type_VicFormActionsService',
            'victoire_form.form.type.vic_link' => 'getVictoireForm_Form_Type_VicLinkService',
            'victoire_form.form.type.vic_tab' => 'getVictoireForm_Form_Type_VicTabService',
            'victoire_form.form.type_extension.vic_business_property_picker' => 'getVictoireForm_Form_TypeExtension_VicBusinessPropertyPickerService',
            'victoire_form.form.type_extension.vic_button' => 'getVictoireForm_Form_TypeExtension_VicButtonService',
            'victoire_form.form.type_extension.vic_date' => 'getVictoireForm_Form_TypeExtension_VicDateService',
            'victoire_form.form.type_extension.vic_datetime' => 'getVictoireForm_Form_TypeExtension_VicDatetimeService',
            'victoire_form.form.type_extension.vic_error' => 'getVictoireForm_Form_TypeExtension_VicErrorService',
            'victoire_form.form.type_extension.vic_help' => 'getVictoireForm_Form_TypeExtension_VicHelpService',
            'victoire_form.form.type_extension.vic_horizontal' => 'getVictoireForm_Form_TypeExtension_VicHorizontalService',
            'victoire_form.form.type_extension.vic_legend' => 'getVictoireForm_Form_TypeExtension_VicLegendService',
            'victoire_form.form.type_extension.vic_offset_button' => 'getVictoireForm_Form_TypeExtension_VicOffsetButtonService',
            'victoire_form.form.type_extension.vic_static_text' => 'getVictoireForm_Form_TypeExtension_VicStaticTextService',
            'victoire_form.form.type_extension.vic_tabbed' => 'getVictoireForm_Form_TypeExtension_VicTabbedService',
            'victoire_form.form.type_extension.vic_time' => 'getVictoireForm_Form_TypeExtension_VicTimeService',
            'victoire_form.form.type_extension.vic_widget' => 'getVictoireForm_Form_TypeExtension_VicWidgetService',
            'victoire_form.form.type_extension.vic_widget_collection' => 'getVictoireForm_Form_TypeExtension_VicWidgetCollectionService',
            'victoire_form.form_type.urlvalidated_type' => 'getVictoireForm_FormType_UrlvalidatedTypeService',
            'victoire_form.twig.extension.bootstrap_flash' => 'getVictoireForm_Twig_Extension_BootstrapFlashService',
            'victoire_form.twig.extension.bootstrap_form' => 'getVictoireForm_Twig_Extension_BootstrapFormService',
            'victoire_form.twig.extension.bootstrap_icon' => 'getVictoireForm_Twig_Extension_BootstrapIconService',
            'victoire_i18n.kernelrequest.listener' => 'getVictoireI18n_Kernelrequest_ListenerService',
            'victoire_i18n.locale_resolver' => 'getVictoireI18n_LocaleResolverService',
            'victoire_i18n.locale_subscriber' => 'getVictoireI18n_LocaleSubscriberService',
            'victoire_i18n.routing_loader' => 'getVictoireI18n_RoutingLoaderService',
            'victoire_i18n.translator' => 'getVictoireI18n_TranslatorService',
            'victoire_media.listener.doctrine' => 'getVictoireMedia_Listener_DoctrineService',
            'victoire_media.media_creator_service' => 'getVictoireMedia_MediaCreatorServiceService',
            'victoire_media.media_handlers.file' => 'getVictoireMedia_MediaHandlers_FileService',
            'victoire_media.media_handlers.image' => 'getVictoireMedia_MediaHandlers_ImageService',
            'victoire_media.media_handlers.remote_slide' => 'getVictoireMedia_MediaHandlers_RemoteSlideService',
            'victoire_media.media_handlers.remote_video' => 'getVictoireMedia_MediaHandlers_RemoteVideoService',
            'victoire_media.media_manager' => 'getVictoireMedia_MediaManagerService',
            'victoire_media.menu.adaptor' => 'getVictoireMedia_Menu_AdaptorService',
            'victoire_media.menu.twig.extension' => 'getVictoireMedia_Menu_Twig_ExtensionService',
            'victoire_media.menubuilder' => 'getVictoireMedia_MenubuilderService',
            'victoire_media.twig_extension.svg' => 'getVictoireMedia_TwigExtension_SvgService',
            'victoire_page.page.form.type' => 'getVictoirePage_Page_Form_TypeService',
            'victoire_page.page_helper' => 'getVictoirePage_PageHelperService',
            'victoire_page.page_reference_builder' => 'getVictoirePage_PageReferenceBuilderService',
            'victoire_page.page_settings.form.type' => 'getVictoirePage_PageSettings_Form_TypeService',
            'victoire_page.twig.page_extension' => 'getVictoirePage_Twig_PageExtensionService',
            'victoire_page.user_callable' => 'getVictoirePage_UserCallableService',
            'victoire_query.query_helper' => 'getVictoireQuery_QueryHelperService',
            'victoire_seo.helper.pageseo_helper' => 'getVictoireSeo_Helper_PageseoHelperService',
            'victoire_sitemap.export.handler' => 'getVictoireSitemap_Export_HandlerService',
            'victoire_sitemap.priority.pageseo_type' => 'getVictoireSitemap_Priority_PageseoTypeService',
            'victoire_sitemap.sitemap_menu_listener' => 'getVictoireSitemap_SitemapMenuListenerService',
            'victoire_sitemap.sort.handler' => 'getVictoireSitemap_Sort_HandlerService',
            'victoire_template.template.form.type' => 'getVictoireTemplate_Template_Form_TypeService',
            'victoire_twig.kernelrequest.listener' => 'getVictoireTwig_Kernelrequest_ListenerService',
            'victoire_view_reference.array_transformer.base_page' => 'getVictoireViewReference_ArrayTransformer_BasePageService',
            'victoire_view_reference.array_transformer.business_page' => 'getVictoireViewReference_ArrayTransformer_BusinessPageService',
            'victoire_view_reference.array_transformer.virtual_business_page' => 'getVictoireViewReference_ArrayTransformer_VirtualBusinessPageService',
            'victoire_view_reference.builder' => 'getVictoireViewReference_BuilderService',
            'victoire_view_reference.builder_chain' => 'getVictoireViewReference_BuilderChainService',
            'victoire_view_reference.cache_warmer' => 'getVictoireViewReference_CacheWarmerService',
            'victoire_view_reference.event_subscriber' => 'getVictoireViewReference_EventSubscriberService',
            'victoire_view_reference.helper' => 'getVictoireViewReference_HelperService',
            'victoire_view_reference.listener' => 'getVictoireViewReference_ListenerService',
            'victoire_view_reference.manager' => 'getVictoireViewReference_ManagerService',
            'victoire_view_reference.provider' => 'getVictoireViewReference_ProviderService',
            'victoire_view_reference.redis.manager' => 'getVictoireViewReference_Redis_ManagerService',
            'victoire_view_reference.redis.repository' => 'getVictoireViewReference_Redis_RepositoryService',
            'victoire_view_reference.repository' => 'getVictoireViewReference_RepositoryService',
            'victoire_view_reference.transformer.xmltoviewreference' => 'getVictoireViewReference_Transformer_XmltoviewreferenceService',
            'victoire_view_reference.transformer_chain' => 'getVictoireViewReference_TransformerChainService',
            'victoire_view_reference.xml_transformer.base_page' => 'getVictoireViewReference_XmlTransformer_BasePageService',
            'victoire_view_reference.xml_transformer.business_page' => 'getVictoireViewReference_XmlTransformer_BusinessPageService',
            'victoire_view_reference.xml_transformer.virtual_business_page' => 'getVictoireViewReference_XmlTransformer_VirtualBusinessPageService',
            'victoire_widget.base_widget_content_resolver' => 'getVictoireWidget_BaseWidgetContentResolverService',
            'victoire_widget.cache.widget_cache_clearer' => 'getVictoireWidget_Cache_WidgetCacheClearerService',
            'victoire_widget.resolver.widget_resolver' => 'getVictoireWidget_Resolver_WidgetResolverService',
            'victoire_widget.twig.link_extension' => 'getVictoireWidget_Twig_LinkExtensionService',
            'victoire_widget.widget_cache' => 'getVictoireWidget_WidgetCacheService',
            'victoire_widget.widget_content_resolver' => 'getVictoireWidget_WidgetContentResolverService',
            'victoire_widget.widget_content_resolver_chain' => 'getVictoireWidget_WidgetContentResolverChainService',
            'victoire_widget.widget_form_builder' => 'getVictoireWidget_WidgetFormBuilderService',
            'victoire_widget.widget_helper' => 'getVictoireWidget_WidgetHelperService',
            'victoire_widget.widget_item_content_resolver_chain' => 'getVictoireWidget_WidgetItemContentResolverChainService',
            'victoire_widget.widget_manager' => 'getVictoireWidget_WidgetManagerService',
            'victoire_widget.widget_renderer' => 'getVictoireWidget_WidgetRendererService',
            'victoire_widget.widget_style_type' => 'getVictoireWidget_WidgetStyleTypeService',
            'victoire_widget_map.builder' => 'getVictoireWidgetMap_BuilderService',
            'victoire_widget_map.children_resolver' => 'getVictoireWidgetMap_ChildrenResolverService',
            'victoire_widget_map.contextual_view_warmer' => 'getVictoireWidgetMap_ContextualViewWarmerService',
            'victoire_widget_map.manager' => 'getVictoireWidgetMap_ManagerService',
            'victoire_widget_map.widget_data_warmer' => 'getVictoireWidgetMap_WidgetDataWarmerService',
        );
        $this->privates = array(
            'annotations.reader' => true,
            'assetic.asset_factory' => true,
            'cache.annotations' => true,
            'cache.serializer' => true,
            'cache.validator' => true,
            'controller_name_converter' => true,
            'debug.file_link_formatter' => true,
            'form.server_params' => true,
            'fos_user.user_provider.username' => true,
            'fos_user.util.canonical_fields_updater' => true,
            'fos_user.util.password_updater' => true,
            'jms_serializer.unserialize_object_constructor' => true,
            'monolog.processor.psr_log_message' => true,
            'router.request_context' => true,
            'security.access.decision_manager' => true,
            'security.authentication.manager' => true,
            'security.authentication.session_strategy' => true,
            'security.authentication.trust_resolver' => true,
            'security.logout_url_generator' => true,
            'security.role_hierarchy' => true,
            'security.user_checker' => true,
            'session.storage.metadata_bag' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.locator' => true,
            'translator.selector' => true,
        );
        $this->aliases = array(
            'a2lix_translation_form.default.service.locale_provider' => 'a2lix_translation_form.default.service.parameter_locale_provider',
            'a2lix_translation_form.manager_registry' => 'doctrine',
            'assetic_injector.require_all' => 'troopers_assetic_injector.collector_engine.require_all',
            'cache.app_clearer' => 'cache.default_clearer',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'jms\\serializer\\arraytransformerinterface' => 'jms_serializer',
            'jms\\serializer\\serializerinterface' => 'jms_serializer',
            'mailer' => 'swiftmailer.mailer.default',
            'serializer' => 'jms_serializer',
            'session.storage' => 'session.storage.native',
            'snc_redis.victoire_client' => 'snc_redis.victoire',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'translator' => 'translator.default',
            'victoire_view_reference.connector.manager' => 'victoire_view_reference.redis.manager',
            'victoire_view_reference.connector.repository' => 'victoire_view_reference.redis.repository',
            'widget_manager' => 'victoire_widget.widget_manager',
        );
    }

    /*
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /*
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /*
     * Gets the 'a2lix_translation_form.default.listener.translations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Form\EventListener\TranslationsListener A A2lix\TranslationFormBundle\Form\EventListener\TranslationsListener instance
     */
    protected function getA2lixTranslationForm_Default_Listener_TranslationsService()
    {
        return $this->services['a2lix_translation_form.default.listener.translations'] = new \A2lix\TranslationFormBundle\Form\EventListener\TranslationsListener($this->get('a2lix_translation_form.default.service.translation'));
    }

    /*
     * Gets the 'a2lix_translation_form.default.listener.translationsforms' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Form\EventListener\TranslationsFormsListener A A2lix\TranslationFormBundle\Form\EventListener\TranslationsFormsListener instance
     */
    protected function getA2lixTranslationForm_Default_Listener_TranslationsformsService()
    {
        return $this->services['a2lix_translation_form.default.listener.translationsforms'] = new \A2lix\TranslationFormBundle\Form\EventListener\TranslationsFormsListener();
    }

    /*
     * Gets the 'a2lix_translation_form.default.service.parameter_locale_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Locale\DefaultProvider A A2lix\TranslationFormBundle\Locale\DefaultProvider instance
     */
    protected function getA2lixTranslationForm_Default_Service_ParameterLocaleProviderService()
    {
        return $this->services['a2lix_translation_form.default.service.parameter_locale_provider'] = new \A2lix\TranslationFormBundle\Locale\DefaultProvider(array(0 => 'fr', 1 => 'en'), 'en', array());
    }

    /*
     * Gets the 'a2lix_translation_form.default.service.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\TranslationForm\TranslationForm A A2lix\TranslationFormBundle\TranslationForm\TranslationForm instance
     */
    protected function getA2lixTranslationForm_Default_Service_TranslationService()
    {
        return $this->services['a2lix_translation_form.default.service.translation'] = new \A2lix\TranslationFormBundle\TranslationForm\TranslationForm($this->get('form.registry'), $this->get('doctrine'));
    }

    /*
     * Gets the 'a2lix_translation_form.default.type.translatedentity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Form\Type\TranslatedEntityType A A2lix\TranslationFormBundle\Form\Type\TranslatedEntityType instance
     */
    protected function getA2lixTranslationForm_Default_Type_TranslatedentityService()
    {
        $this->services['a2lix_translation_form.default.type.translatedentity'] = $instance = new \A2lix\TranslationFormBundle\Form\Type\TranslatedEntityType();

        $instance->setRequest(NULL);

        return $instance;
    }

    /*
     * Gets the 'a2lix_translation_form.default.type.translations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Form\Type\TranslationsType A A2lix\TranslationFormBundle\Form\Type\TranslationsType instance
     */
    protected function getA2lixTranslationForm_Default_Type_TranslationsService()
    {
        return $this->services['a2lix_translation_form.default.type.translations'] = new \A2lix\TranslationFormBundle\Form\Type\TranslationsType($this->get('a2lix_translation_form.default.listener.translations'), $this->get('a2lix_translation_form.default.service.parameter_locale_provider'));
    }

    /*
     * Gets the 'a2lix_translation_form.default.type.translationsfields' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Form\Type\TranslationsFieldsType A A2lix\TranslationFormBundle\Form\Type\TranslationsFieldsType instance
     */
    protected function getA2lixTranslationForm_Default_Type_TranslationsfieldsService()
    {
        return $this->services['a2lix_translation_form.default.type.translationsfields'] = new \A2lix\TranslationFormBundle\Form\Type\TranslationsFieldsType();
    }

    /*
     * Gets the 'a2lix_translation_form.default.type.translationsforms' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Form\Type\TranslationsFormsType A A2lix\TranslationFormBundle\Form\Type\TranslationsFormsType instance
     */
    protected function getA2lixTranslationForm_Default_Type_TranslationsformsService()
    {
        return $this->services['a2lix_translation_form.default.type.translationsforms'] = new \A2lix\TranslationFormBundle\Form\Type\TranslationsFormsType($this->get('a2lix_translation_form.default.service.translation'), $this->get('a2lix_translation_form.default.listener.translationsforms'), $this->get('a2lix_translation_form.default.service.parameter_locale_provider'));
    }

    /*
     * Gets the 'a2lix_translation_form.default.type.translationslocalesselector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Form\Type\TranslationsLocalesSelectorType A A2lix\TranslationFormBundle\Form\Type\TranslationsLocalesSelectorType instance
     */
    protected function getA2lixTranslationForm_Default_Type_TranslationslocalesselectorService()
    {
        return $this->services['a2lix_translation_form.default.type.translationslocalesselector'] = new \A2lix\TranslationFormBundle\Form\Type\TranslationsLocalesSelectorType($this->get('a2lix_translation_form.default.service.parameter_locale_provider'));
    }

    /*
     * Gets the 'alertify' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\AlertifyBundle\Helper\AlertifyHelper A Troopers\AlertifyBundle\Helper\AlertifyHelper instance
     */
    protected function getAlertifyService()
    {
        return $this->services['alertify'] = new \Troopers\AlertifyBundle\Helper\AlertifyHelper($this->get('session'));
    }

    /*
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), false);
    }

    /*
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager(${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'}, array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), false)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[3].'/app/Resources/FrameworkBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[3].'/app/Resources/SecurityBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[3].'/app/Resources/TwigBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[3].'/app/Resources/MonologBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[3].'/vendor/symfony/monolog-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[3].'/app/Resources/SwiftmailerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', ($this->targetDirs[3].'/app/Resources/DoctrineBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', ($this->targetDirs[3].'/app/Resources/SensioFrameworkExtraBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AppBundle', ($this->targetDirs[3].'/app/Resources/AppBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AppBundle', ($this->targetDirs[3].'/src/AppBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'A2lixTranslationFormBundle', ($this->targetDirs[3].'/app/Resources/A2lixTranslationFormBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'A2lixTranslationFormBundle', ($this->targetDirs[3].'/vendor/a2lix/translation-form-bundle/A2lix/TranslationFormBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BazingaJsTranslationBundle', ($this->targetDirs[3].'/app/Resources/BazingaJsTranslationBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BazingaJsTranslationBundle', ($this->targetDirs[3].'/vendor/willdurand/js-translation-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[3].'/app/Resources/AsseticBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[3].'/vendor/symfony/assetic-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TroopersAsseticInjectorBundle', ($this->targetDirs[3].'/app/Resources/TroopersAsseticInjectorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TroopersAsseticInjectorBundle', ($this->targetDirs[3].'/vendor/troopers/assetic-injector-bundle/Troopers/AsseticInjectorBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TroopersAlertifyBundle', ($this->targetDirs[3].'/app/Resources/TroopersAlertifyBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TroopersAlertifyBundle', ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', ($this->targetDirs[3].'/app/Resources/FOSUserBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSJsRoutingBundle', ($this->targetDirs[3].'/app/Resources/FOSJsRoutingBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSJsRoutingBundle', ($this->targetDirs[3].'/vendor/friendsofsymfony/jsrouting-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSerializerBundle', ($this->targetDirs[3].'/app/Resources/JMSSerializerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSerializerBundle', ($this->targetDirs[3].'/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'LiipImagineBundle', ($this->targetDirs[3].'/app/Resources/LiipImagineBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'LiipImagineBundle', ($this->targetDirs[3].'/vendor/liip/imagine-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', ($this->targetDirs[3].'/app/Resources/KnpMenuBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBehaviorsBundle', ($this->targetDirs[3].'/app/Resources/DoctrineBehaviorsBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBehaviorsBundle', ($this->targetDirs[3].'/vendor/knplabs/doctrine-behaviors/src/Bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SncRedisBundle', ($this->targetDirs[3].'/app/Resources/SncRedisBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SncRedisBundle', ($this->targetDirs[3].'/vendor/snc/redis-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'StofDoctrineExtensionsBundle', ($this->targetDirs[3].'/app/Resources/StofDoctrineExtensionsBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'StofDoctrineExtensionsBundle', ($this->targetDirs[3].'/vendor/stof/doctrine-extensions-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireAnalyticsBundle', ($this->targetDirs[3].'/app/Resources/VictoireAnalyticsBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireAnalyticsBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/AnalyticsBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireBlogBundle', ($this->targetDirs[3].'/app/Resources/VictoireBlogBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireBlogBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireBusinessEntityBundle', ($this->targetDirs[3].'/app/Resources/VictoireBusinessEntityBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireBusinessEntityBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessEntityBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireBusinessPageBundle', ($this->targetDirs[3].'/app/Resources/VictoireBusinessPageBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireBusinessPageBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireCoreBundle', ($this->targetDirs[3].'/app/Resources/VictoireCoreBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireCoreBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CoreBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireCriteriaBundle', ($this->targetDirs[3].'/app/Resources/VictoireCriteriaBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireCriteriaBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CriteriaBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireFilterBundle', ($this->targetDirs[3].'/app/Resources/VictoireFilterBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireFilterBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/FilterBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireFormBundle', ($this->targetDirs[3].'/app/Resources/VictoireFormBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireFormBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/FormBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireI18nBundle', ($this->targetDirs[3].'/app/Resources/VictoireI18nBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireI18nBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/I18nBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireMediaBundle', ($this->targetDirs[3].'/app/Resources/VictoireMediaBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireMediaBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoirePageBundle', ($this->targetDirs[3].'/app/Resources/VictoirePageBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoirePageBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/PageBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireQueryBundle', ($this->targetDirs[3].'/app/Resources/VictoireQueryBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireQueryBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/QueryBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireSeoBundle', ($this->targetDirs[3].'/app/Resources/VictoireSeoBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireSeoBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SeoBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireSitemapBundle', ($this->targetDirs[3].'/app/Resources/VictoireSitemapBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireSitemapBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SitemapBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireTemplateBundle', ($this->targetDirs[3].'/app/Resources/VictoireTemplateBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireTemplateBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TemplateBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireTwigBundle', ($this->targetDirs[3].'/app/Resources/VictoireTwigBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireTwigBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TwigBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireUIBundle', ($this->targetDirs[3].'/app/Resources/VictoireUIBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireUIBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UIBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireUserBundle', ($this->targetDirs[3].'/app/Resources/VictoireUserBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireUserBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UserBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ViewReferenceBundle', ($this->targetDirs[3].'/app/Resources/ViewReferenceBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ViewReferenceBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/ViewReferenceBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireWidgetBundle', ($this->targetDirs[3].'/app/Resources/VictoireWidgetBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireWidgetBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/WidgetBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireWidgetMapBundle', ($this->targetDirs[3].'/app/Resources/VictoireWidgetMapBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VictoireWidgetMapBundle', ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/WidgetMapBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[3].'/app/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /*
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /*
     * Gets the 'assetic.filter.less' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\LessFilter A Assetic\Filter\LessFilter instance
     */
    protected function getAssetic_Filter_LessService()
    {
        $this->services['assetic.filter.less'] = $instance = new \Assetic\Filter\LessFilter('/usr/bin/node', array(0 => '/usr/lib/node_modules'));

        $instance->setTimeout(NULL);
        $instance->setCompress(NULL);
        $instance->setLoadPaths(array());

        return $instance;
    }

    /*
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite', 'less' => 'assetic.filter.less'));
    }

    /*
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /*
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }

    /*
     * Gets the 'bazinga.jstranslation.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bazinga\Bundle\JsTranslationBundle\Controller\Controller A Bazinga\Bundle\JsTranslationBundle\Controller\Controller instance
     */
    protected function getBazinga_Jstranslation_ControllerService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['bazinga.jstranslation.controller'] = $instance = new \Bazinga\Bundle\JsTranslationBundle\Controller\Controller($this->get('translator.default'), $this->get('templating'), $this->get('bazinga.jstranslation.translation_finder'), (__DIR__.'/bazinga-js-translation'), false, 'en', 'messages', '86400');

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /*
     * Gets the 'bazinga.jstranslation.translation_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bazinga\Bundle\JsTranslationBundle\Dumper\TranslationDumper A Bazinga\Bundle\JsTranslationBundle\Dumper\TranslationDumper instance
     */
    protected function getBazinga_Jstranslation_TranslationDumperService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['bazinga.jstranslation.translation_dumper'] = $instance = new \Bazinga\Bundle\JsTranslationBundle\Dumper\TranslationDumper($this->get('templating'), $this->get('bazinga.jstranslation.translation_finder'), $this->get('filesystem'), 'en', 'messages', array(), array());

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /*
     * Gets the 'bazinga.jstranslation.translation_finder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bazinga\Bundle\JsTranslationBundle\Finder\TranslationFinder A Bazinga\Bundle\JsTranslationBundle\Finder\TranslationFinder instance
     */
    protected function getBazinga_Jstranslation_TranslationFinderService()
    {
        return $this->services['bazinga.jstranslation.translation_finder'] = new \Bazinga\Bundle\JsTranslationBundle\Finder\TranslationFinder(array('sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.pl.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.nl.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.fr.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 6 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/translations/messages.fr.xliff'), 7 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/translations/victoire.fr.xliff'), 8 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessEntityBundle/Resources/translations/victoire.fr.xliff'), 9 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/translations/messages.fr.xliff'), 10 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/translations/victoire.fr.xliff'), 11 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CoreBundle/Resources/translations/victoire.fr.xliff'), 12 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CriteriaBundle/Resources/translations/victoire.fr.xliff'), 13 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/FormBundle/Resources/translations/victoire.fr.xliff'), 14 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/I18nBundle/Resources/translations/victoire.fr.xliff'), 15 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/translations/messages.fr.xliff'), 16 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/translations/victoire.fr.xliff'), 17 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/PageBundle/Resources/translations/messages.fr.xliff'), 18 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/PageBundle/Resources/translations/victoire.fr.xliff'), 19 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SeoBundle/Resources/translations/victoire.fr.xliff'), 20 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SitemapBundle/Resources/translations/victoire.fr.xliff'), 21 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TemplateBundle/Resources/translations/victoire.fr.xliff'), 22 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TemplateBundle/Resources/translations/messages.fr.xlf'), 23 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UserBundle/Resources/translations/victoire.fr.xliff'), 24 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/WidgetBundle/Resources/translations/victoire.fr.xliff')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.en.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 6 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/translations/messages.en.xliff'), 7 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/translations/victoire.en.xliff'), 8 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessEntityBundle/Resources/translations/victoire.en.xliff'), 9 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/translations/messages.en.xliff'), 10 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/translations/victoire.en.xliff'), 11 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CoreBundle/Resources/translations/victoire.en.xliff'), 12 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CriteriaBundle/Resources/translations/victoire.en.xliff'), 13 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/FormBundle/Resources/translations/victoire.en.xliff'), 14 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/I18nBundle/Resources/translations/victoire.en.xliff'), 15 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/translations/messages.en.xliff'), 16 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/translations/victoire.en.xliff'), 17 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/PageBundle/Resources/translations/victoire.en.xliff'), 18 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SeoBundle/Resources/translations/victoire.en.xliff'), 19 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SitemapBundle/Resources/translations/victoire.en.xliff'), 20 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TemplateBundle/Resources/translations/victoire.en.xliff'), 21 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UserBundle/Resources/translations/victoire.en.xliff'), 22 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/WidgetBundle/Resources/translations/victoire.en.xliff')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.pt.xliff'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.de.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.it.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.es.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 6 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/translations/victoire.es.xliff'), 7 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/translations/messages.es.xliff'), 8 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessEntityBundle/Resources/translations/victoire.es.xliff'), 9 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/translations/victoire.es.xliff'), 10 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/translations/messages.es.xliff'), 11 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CoreBundle/Resources/translations/victoire.es.xliff'), 12 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CriteriaBundle/Resources/translations/victoire.es.xliff'), 13 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/FormBundle/Resources/translations/victoire.es.xliff'), 14 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/I18nBundle/Resources/translations/victoire.es.xliff'), 15 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/translations/victoire.es.xliff'), 16 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/translations/messages.es.xliff'), 17 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/PageBundle/Resources/translations/victoire.es.xliff'), 18 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SeoBundle/Resources/translations/victoire.es.xliff'), 19 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SitemapBundle/Resources/translations/victoire.es.xliff'), 20 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TemplateBundle/Resources/translations/victoire.es.xliff'), 21 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UserBundle/Resources/translations/victoire.es.xliff'), 22 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/WidgetBundle/Resources/translations/victoire.es.xliff')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')), 'ky' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml')), 'eo' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml')), 'nb' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml'))));
    }

    /*
     * Gets the 'cache.app' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter A Symfony\Component\Cache\Adapter\FilesystemAdapter instance
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('n5NzkKREKO', 0, (__DIR__.'/pools'));

        if ($this->has('monolog.logger.cache')) {
            $instance->setLogger($this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /*
     * Gets the 'cache.default_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer A Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer instance
     */
    protected function getCache_DefaultClearerService()
    {
        $this->services['cache.default_clearer'] = $instance = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer();

        $instance->addPool($this->get('cache.app'));
        $instance->addPool($this->get('cache.system'));
        $instance->addPool(${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $instance->addPool(${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
        $instance->addPool(${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'cache.system' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('oF4uGKF1Zr', 0, 'MYfBg2oUlptyQ7C3Ob4WQe', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => $this->get('cache.default_clearer'), 1 => $this->get('victoire_widget.cache.widget_cache_clearer')));
    }

    /*
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[3].'/app/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => $this->get('victoire_business_entity.warmer'), 1 => $this->get('victoire_core.cache_warmer.entity_proxy_warmer'), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}), 3 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 4 => $this->get('kernel.class_cache.cache_warmer'), 5 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 6 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer($this->get('validator.builder'), (__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}), 7 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 8 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, (__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}), 9 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader($this->get('annotation_reader'))), (__DIR__.'/serialization.php'), ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'}), 10 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array()), 11 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this->get('twig'), new \Symfony\Bundle\TwigBundle\TemplateIterator($a, ($this->targetDirs[3].'/app'), array())), 12 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }

    /*
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array());
    }

    /*
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), -1, 0, false, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, false);
    }

    /*
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /*
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /*
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /*
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = $this->get('annotation_reader');

        $b = new \Gedmo\Tree\TreeListener();
        $b->setAnnotationReader($a);

        $c = new \Knp\DoctrineBehaviors\Reflection\ClassAnalyzer();

        $d = new \Gedmo\Sluggable\SluggableListener();
        $d->setAnnotationReader($a);

        $e = new \Gedmo\Timestampable\TimestampableListener();
        $e->setAnnotationReader($a);

        $f = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $f->addEventSubscriber($b);
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Sluggable\SluggableSubscriber($c, true, 'Knp\\DoctrineBehaviors\\Model\\Sluggable\\Sluggable'));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Translatable\TranslatableSubscriber($c, new \Knp\DoctrineBehaviors\ORM\Translatable\CurrentLocaleCallable($this), new \Knp\DoctrineBehaviors\ORM\Translatable\DefaultLocaleCallable('en'), 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translatable', 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translation', 'LAZY', 'LAZY'));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Loggable\LoggableSubscriber($c, true, new \Knp\DoctrineBehaviors\ORM\Loggable\LoggerCallable($this->get('logger'))));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Geocodable\GeocodableSubscriber($c, true, 'Knp\\DoctrineBehaviors\\Model\\Geocodable\\Geocodable', NULL));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Sortable\SortableSubscriber($c, true, 'Knp\\DoctrineBehaviors\\Model\\Sortable\\Sortable'));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Blameable\BlameableSubscriber($c, true, 'Knp\\DoctrineBehaviors\\Model\\Blameable\\Blameable', new \Knp\DoctrineBehaviors\ORM\Blameable\UserCallable($this), NULL));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Tree\TreeSubscriber($c, true, 'Knp\\DoctrineBehaviors\\Model\\Tree\\Node'));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Timestampable\TimestampableSubscriber($c, true, 'Knp\\DoctrineBehaviors\\Model\\Timestampable\\Timestampable', 'datetime'));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\SoftDeletable\SoftDeletableSubscriber($c, true, 'Knp\\DoctrineBehaviors\\Model\\SoftDeletable\\SoftDeletable'));
        $f->addEventSubscriber($d);
        $f->addEventSubscriber($e);
        $f->addEventSubscriber($this->get('victoire_view_reference.event_subscriber'));
        $f->addEventSubscriber($this->get('victoire_core.widget_discriminator_map.subscriber'));
        $f->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener(${($_ = isset($this->services['fos_user.util.password_updater']) ? $this->services['fos_user.util.password_updater'] : $this->getFosUser_Util_PasswordUpdaterService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'}));
        $f->addEventSubscriber($this->get('victoire_core.widget_subscriber'));
        $f->addEventSubscriber($this->get('victoire_business_entity.business_entity_subscriber'));
        $f->addEventSubscriber($this->get('victoire_analytics.browser_event.subscriber'));
        $f->addEventSubscriber($this->get('page.subscriber'));
        $f->addEventSubscriber($this->get('victoire_blog.article.subscriber'));
        $f->addEventListener(array(0 => 'loadClassMetadata'), $this->get('victoire_core.entity_proxy.subscriber'));
        $f->addEventListener(array(0 => 'prePersist', 1 => 'preUpdate', 2 => 'postPersist', 3 => 'postUpdate', 4 => 'preRemove'), $this->get('victoire_media.listener.doctrine'));
        $f->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => 'db', 'port' => NULL, 'dbname' => 'victoire', 'user' => 'victoire', 'password' => 'victoire', 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), new \Doctrine\DBAL\Configuration(), $f, array());
    }

    /*
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver A Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver instance
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /*
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    public function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['doctrine.orm.default_entity_manager'] = DoctrineORMEntityManager_00000000428690af0000000049de23ef3bf08b917554782eb259376febf5d820::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $a = $this->get('annotation_reader');

        $b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/AnalyticsBundle/Entity'), 1 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Entity'), 2 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessEntityBundle/Entity'), 3 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Entity'), 4 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CoreBundle/Entity'), 5 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CriteriaBundle/Entity'), 6 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/I18nBundle/Entity'), 7 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Entity'), 8 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/PageBundle/Entity'), 9 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/QueryBundle/Entity'), 10 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SeoBundle/Entity'), 11 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TemplateBundle/Entity'), 12 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TwigBundle/Entity'), 13 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UserBundle/Entity'), 14 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/WidgetBundle/Entity'), 15 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/WidgetMapBundle/Entity')));

        $c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver($b, 'Victoire\\Bundle\\AnalyticsBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\BlogBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\BusinessEntityBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\BusinessPageBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\CoreBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\CriteriaBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\I18nBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\MediaBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\PageBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\QueryBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\SeoBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\TemplateBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\TwigBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\UserBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\WidgetBundle\\Entity');
        $c->addDriver($b, 'Victoire\\Bundle\\WidgetMapBundle\\Entity');
        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

        $d = new \Doctrine\ORM\Configuration();
        $d->setEntityNamespaces(array('VictoireAnalyticsBundle' => 'Victoire\\Bundle\\AnalyticsBundle\\Entity', 'VictoireBlogBundle' => 'Victoire\\Bundle\\BlogBundle\\Entity', 'VictoireBusinessEntityBundle' => 'Victoire\\Bundle\\BusinessEntityBundle\\Entity', 'VictoireBusinessPageBundle' => 'Victoire\\Bundle\\BusinessPageBundle\\Entity', 'VictoireCoreBundle' => 'Victoire\\Bundle\\CoreBundle\\Entity', 'VictoireCriteriaBundle' => 'Victoire\\Bundle\\CriteriaBundle\\Entity', 'VictoireI18nBundle' => 'Victoire\\Bundle\\I18nBundle\\Entity', 'VictoireMediaBundle' => 'Victoire\\Bundle\\MediaBundle\\Entity', 'VictoirePageBundle' => 'Victoire\\Bundle\\PageBundle\\Entity', 'VictoireQueryBundle' => 'Victoire\\Bundle\\QueryBundle\\Entity', 'VictoireSeoBundle' => 'Victoire\\Bundle\\SeoBundle\\Entity', 'VictoireTemplateBundle' => 'Victoire\\Bundle\\TemplateBundle\\Entity', 'VictoireTwigBundle' => 'Victoire\\Bundle\\TwigBundle\\Entity', 'VictoireUserBundle' => 'Victoire\\Bundle\\UserBundle\\Entity', 'VictoireWidgetBundle' => 'Victoire\\Bundle\\WidgetBundle\\Entity', 'VictoireWidgetMapBundle' => 'Victoire\\Bundle\\WidgetMapBundle\\Entity'));
        $d->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $d->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $d->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $d->setMetadataDriverImpl($c);
        $d->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $d->setProxyNamespace('Proxies');
        $d->setAutoGenerateProxyClasses(false);
        $d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $d->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $d->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $d->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));

        $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $d);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /*
     * Gets the 'doctrine.orm.default_entity_manager.property_info_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor A Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor instance
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor($this->get('doctrine.orm.default_entity_manager')->getMetadataFactory());
    }

    /*
     * Gets the 'doctrine.orm.default_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /*
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /*
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /*
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_8bf1da162ef326421c99a13a9a5830680c7abfd955a06a3c69aa2f56d644e2eb');

        return $instance;
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_8bf1da162ef326421c99a13a9a5830680c7abfd955a06a3c69aa2f56d644e2eb');

        return $instance;
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_8bf1da162ef326421c99a13a9a5830680c7abfd955a06a3c69aa2f56d644e2eb');

        return $instance;
    }

    /*
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListenerService('kernel.request', array(0 => 'knp_menu.listener.voters', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('victoire_core.build_menu', array(0 => 'victoire_blog.blog_menu_listener', 1 => 'addGlobal'), 90);
        $instance->addListenerService('victoire_core.article_menu.contextual', array(0 => 'victoire_blog.article_menu.contextual', 1 => 'addContextual'), 0);
        $instance->addListenerService('victoire_core.article_menu.contextual', array(0 => 'victoire_blog.article_settings_menu.contextual', 1 => 'addContextual'), 0);
        $instance->addListenerService('victoire_core.blog_menu.contextual', array(0 => 'victoire_blog.blog_menu.contextual', 1 => 'addBlogContextual'), 0);
        $instance->addListenerService('victoire_core.article_template_menu.contextual', array(0 => 'victoire_blog.article_template_menu.menu_listener.contextual', 1 => 'addContextual'), 0);
        $instance->addListenerService('victoire_core.blog_menu.contextual', array(0 => 'victoire_blog.blog_page_menu.contextual', 1 => 'addContextual'), 0);
        $instance->addListenerService('victoire.widget_filter.form.pre_set_data', array(0 => 'victoire.widget_filter.form.listener.presetdata', 1 => 'manageExtraFiltersFields'), 1);
        $instance->addListenerService('victoire.widget_filter.form.pre_submit', array(0 => 'victoire.widget_filter.form.listener.presubmit', 1 => 'manageExtraFiltersFields'), 1);
        $instance->addListenerService('victoire.widget_filter.form.date.set_default_value', array(0 => 'victoire.widget_filter.blog.set.default.values.form.listener', 1 => 'setDefaultDateValue'), 1);
        $instance->addListenerService('victoire_core.build_menu', array(0 => 'victoire_business_page.business_template_menu_listener', 1 => 'addGlobal'), 50);
        $instance->addListenerService('victoire_core.business_template_menu.contextual', array(0 => 'victoire_core.business_template_menu.contextual', 1 => 'addContextual'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'victoire_core.menu_dispatcher', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('victoire_core.backend_menu.global', array(0 => 'victoire_core.backend_menu_listener', 1 => 'addGlobal'), 100);
        $instance->addListenerService('kernel.controller', array(0 => 'victoire_core.listener.controller_listener', 1 => 'preExecuteAutorun'), 0);
        $instance->addListenerService('victoire.on_render_page', array(0 => 'victoire_core.view_css_listener', 1 => 'onRenderPage'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'victoire_i18n.kernelrequest.listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('victoire_core.build_menu', array(0 => 'victoire_core.media_menu_listener', 1 => 'addGlobal'), 60);
        $instance->addListenerService('victoire_core.build_menu', array(0 => 'victoire_core.page_menu_listener', 1 => 'addGlobal'), 100);
        $instance->addListenerService('victoire_core.page_menu.contextual', array(0 => 'victoire_core.page_menu.contextual', 1 => 'addContextual'), 0);
        $instance->addListenerService('victoire_core.build_menu', array(0 => 'victoire_sitemap.sitemap_menu_listener', 1 => 'addGlobal'), 70);
        $instance->addListenerService('victoire_core.build_menu', array(0 => 'victoire_core.template_menu_listener', 1 => 'addGlobal'), 80);
        $instance->addListenerService('victoire_core.template_menu.contextual', array(0 => 'victoire_core.template_menu.contextual', 1 => 'addContextual'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'victoire_twig.kernelrequest.listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'victoire_view_reference.cache_warmer', 1 => 'warmUp'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('troopers_alertifybundle.event_listener', 'Troopers\\AlertifyBundle\\EventListener\\AlertifyListener');
        $instance->addSubscriberService('fos_user.security.interactive_login_listener', 'FOS\\UserBundle\\EventListener\\LastLoginListener');
        $instance->addSubscriberService('fos_user.listener.authentication', 'FOS\\UserBundle\\EventListener\\AuthenticationListener');
        $instance->addSubscriberService('fos_user.listener.flash', 'FOS\\UserBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('fos_user.listener.resetting', 'FOS\\UserBundle\\EventListener\\ResettingListener');
        $instance->addSubscriberService('victoire_core.cache_subscriber', 'Victoire\\Bundle\\CoreBundle\\EventSubscriber\\CacheSubscriber');
        $instance->addSubscriberService('victoire_i18n.locale_subscriber', 'Victoire\\Bundle\\I18nBundle\\Subscriber\\LocaleSubscriber');
        $instance->addSubscriberService('victoire_view_reference.listener', 'Victoire\\Bundle\\ViewReferenceBundle\\Listener\\ViewReferenceListener');

        return $instance;
    }

    /*
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[3].'/app/Resources'));
    }

    /*
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /*
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsType' => 'a2lix_translation_form.default.type.translations', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFieldsType' => 'a2lix_translation_form.default.type.translationsfields', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFormsType' => 'a2lix_translation_form.default.type.translationsforms', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsLocalesSelectorType' => 'a2lix_translation_form.default.type.translationslocalesselector', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslatedEntityType' => 'a2lix_translation_form.default.type.translatedentity', 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => 'fos_user.username_form_type', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => 'fos_user.profile.form.type', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => 'fos_user.registration.form.type', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => 'fos_user.change_password.form.type', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => 'fos_user.resetting.form.type', 'Liip\\ImagineBundle\\Form\\Type\\ImageType' => 'liip_imagine.form.type.image', 'Victoire\\Bundle\\BlogBundle\\Form\\HierarchyTreeType' => 'victoire_blog.hierarchy_tree_type', 'Victoire\\Bundle\\BlogBundle\\Form\\CategoryType' => 'victoire.form.blog.category', 'Victoire\\Bundle\\BlogBundle\\Form\\ArticleType' => 'victoire_blog.article.form.type', 'Victoire\\Bundle\\BlogBundle\\Form\\ArticleTemplateType' => 'victoire_blog.article.container.form.type', 'Victoire\\Bundle\\BlogBundle\\Form\\ArticleSettingsType' => 'victoire_blog.article_settings.form.type', 'Victoire\\Bundle\\BlogBundle\\Form\\TagsType' => 'victoire_blog.type.tags', 'Victoire\\Bundle\\BlogBundle\\Form\\BlogType' => 'victoire_blog.blog.form.type', 'Victoire\\Bundle\\BlogBundle\\Form\\ChooseBlogType' => 'victoire_blog.blog_choose.form.type', 'Victoire\\Bundle\\BlogBundle\\Form\\BlogSettingsType' => 'victoire_blog.blog_settings.form.type', 'Victoire\\Bundle\\BlogBundle\\Form\\BlogCategoryType' => 'victoire_blog.blog_category.form.type', 'Victoire\\Bundle\\BlogBundle\\Filter\\CategoryFilter' => 'victoire_blog.category_filters.form.type', 'Victoire\\Bundle\\BlogBundle\\Filter\\TagFilter' => 'victoire_blog.tag_filters.form.type', 'Victoire\\Bundle\\BlogBundle\\Filter\\DateFilter' => 'victoire_blog.date_filters.form.type', 'Victoire\\Bundle\\BusinessPageBundle\\Form\\BusinessTemplateType' => 'victoire_business_page.business_template.form.type', 'Victoire\\Bundle\\CoreBundle\\Form\\WidgetType' => 'victoire_core.widget.form.type', 'Victoire\\Bundle\\CoreBundle\\Form\\EntityProxyFormType' => 'victoire_core.entity_proxy.form.type', 'Victoire\\Bundle\\CoreBundle\\Form\\WidgetFieldsFormType' => 'victoire_core.widget_fields.form.type', 'Victoire\\Bundle\\FormBundle\\Form\\Type\\UrlvalidatedType' => 'victoire_form.form_type.urlvalidated_type', 'Victoire\\Bundle\\FormBundle\\Form\\Type\\TabType' => 'victoire_form.form.type.vic_tab', 'Victoire\\Bundle\\FormBundle\\Form\\Type\\FormActionsType' => 'victoire_form.form.type.vic_form_actions', 'Victoire\\Bundle\\FormBundle\\Form\\Type\\LinkType' => 'victoire_form.form.type.vic_link', 'Victoire\\Bundle\\FormBundle\\Form\\Type\\FontAwesomePickerType' => 'victoire_form.form.type.font_awesome_picker', 'Victoire\\Bundle\\FormBundle\\Form\\Type\\SlugType' => 'victoire_form.form.type.slug', 'Victoire\\Bundle\\MediaBundle\\Form\\Type\\MediaType' => 'form.type.media', 'Victoire\\Bundle\\PageBundle\\Form\\PageType' => 'victoire_page.page.form.type', 'Victoire\\Bundle\\PageBundle\\Form\\PageSettingsType' => 'victoire_page.page_settings.form.type', 'Victoire\\Bundle\\SeoBundle\\Form\\PageSeoType' => 'form.type.seo.page', 'Victoire\\Bundle\\SitemapBundle\\Form\\SitemapPriorityPageSeoType' => 'victoire_sitemap.priority.pageseo_type', 'Victoire\\Bundle\\TemplateBundle\\Form\\TemplateType' => 'victoire_template.template.form.type', 'Victoire\\Bundle\\WidgetBundle\\Form\\WidgetStyleType' => 'victoire_widget.widget_style_type'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf', 4 => 'victoire_business_entity.business_entity_type_extension', 5 => 'victoire_form.form.type_extension.vic_static_text', 6 => 'victoire_form.form.type_extension.vic_help', 7 => 'victoire_form.form.type_extension.vic_business_property_picker', 8 => 'victoire_form.form.type_extension.vic_legend', 9 => 'victoire_form.form.type_extension.vic_error', 10 => 'victoire_form.form.type_extension.vic_widget', 11 => 'victoire_form.form.type_extension.vic_horizontal', 12 => 'victoire_form.form.type_extension.vic_widget_collection', 13 => 'victoire_form.form.type_extension.vic_tabbed'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType' => array(0 => 'victoire_form.form.type_extension.vic_offset_button', 1 => 'victoire_form.form.type_extension.vic_button'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => array(0 => 'victoire_form.form.type_extension.vic_date'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => array(0 => 'victoire_form.form.type_extension.vic_datetime'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType' => array(0 => 'victoire_form.form.type_extension.vic_time')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /*
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\ResolvedFormTypeFactory A Symfony\Component\Form\ResolvedFormTypeFactory instance
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /*
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance
     *
     * @deprecated The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_BirthdayService()
    {
        @trigger_error('The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /*
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance
     *
     * @deprecated The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ButtonService()
    {
        @trigger_error('The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /*
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance
     *
     * @deprecated The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CheckboxService()
    {
        @trigger_error('The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /*
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /*
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance
     *
     * @deprecated The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CollectionService()
    {
        @trigger_error('The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /*
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance
     *
     * @deprecated The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CountryService()
    {
        @trigger_error('The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /*
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance
     *
     * @deprecated The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CurrencyService()
    {
        @trigger_error('The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /*
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance
     *
     * @deprecated The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DateService()
    {
        @trigger_error('The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /*
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance
     *
     * @deprecated The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DatetimeService()
    {
        @trigger_error('The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /*
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance
     *
     * @deprecated The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_EmailService()
    {
        @trigger_error('The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /*
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /*
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance
     *
     * @deprecated The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_FileService()
    {
        @trigger_error('The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /*
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /*
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance
     *
     * @deprecated The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_HiddenService()
    {
        @trigger_error('The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /*
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance
     *
     * @deprecated The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_IntegerService()
    {
        @trigger_error('The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /*
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance
     *
     * @deprecated The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LanguageService()
    {
        @trigger_error('The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /*
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance
     *
     * @deprecated The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LocaleService()
    {
        @trigger_error('The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /*
     * Gets the 'form.type.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\MediaBundle\Form\Type\MediaType A Victoire\Bundle\MediaBundle\Form\Type\MediaType instance
     */
    protected function getForm_Type_MediaService()
    {
        return $this->services['form.type.media'] = new \Victoire\Bundle\MediaBundle\Form\Type\MediaType($this->get('victoire_media.media_manager'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance
     *
     * @deprecated The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_MoneyService()
    {
        @trigger_error('The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /*
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance
     *
     * @deprecated The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_NumberService()
    {
        @trigger_error('The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /*
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance
     *
     * @deprecated The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PasswordService()
    {
        @trigger_error('The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /*
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance
     *
     * @deprecated The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PercentService()
    {
        @trigger_error('The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /*
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance
     *
     * @deprecated The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RadioService()
    {
        @trigger_error('The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /*
     * Gets the 'form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType A Symfony\Component\Form\Extension\Core\Type\RangeType instance
     *
     * @deprecated The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RangeService()
    {
        @trigger_error('The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /*
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance
     *
     * @deprecated The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RepeatedService()
    {
        @trigger_error('The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /*
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance
     *
     * @deprecated The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ResetService()
    {
        @trigger_error('The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /*
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance
     *
     * @deprecated The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SearchService()
    {
        @trigger_error('The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /*
     * Gets the 'form.type.seo.page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\SeoBundle\Form\PageSeoType A Victoire\Bundle\SeoBundle\Form\PageSeoType instance
     */
    protected function getForm_Type_Seo_PageService()
    {
        return $this->services['form.type.seo.page'] = new \Victoire\Bundle\SeoBundle\Form\PageSeoType();
    }

    /*
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance
     *
     * @deprecated The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SubmitService()
    {
        @trigger_error('The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /*
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance
     *
     * @deprecated The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextService()
    {
        @trigger_error('The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /*
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance
     *
     * @deprecated The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextareaService()
    {
        @trigger_error('The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /*
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance
     *
     * @deprecated The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimeService()
    {
        @trigger_error('The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /*
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance
     *
     * @deprecated The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimezoneService()
    {
        @trigger_error('The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /*
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance
     *
     * @deprecated The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_UrlService()
    {
        @trigger_error('The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /*
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', ${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'});
    }

    /*
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'}));
    }

    /*
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /*
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /*
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /*
     * Gets the 'form.type_extension.upload.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension instance
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator.default'), 'validators');
    }

    /*
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /*
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /*
     * Gets the 'fos_js_routing.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\JsRoutingBundle\Controller\Controller A FOS\JsRoutingBundle\Controller\Controller instance
     */
    protected function getFosJsRouting_ControllerService()
    {
        return $this->services['fos_js_routing.controller'] = new \FOS\JsRoutingBundle\Controller\Controller($this->get('fos_js_routing.serializer'), $this->get('fos_js_routing.extractor'), array('enabled' => false), false);
    }

    /*
     * Gets the 'fos_js_routing.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor A FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor instance
     */
    protected function getFosJsRouting_ExtractorService()
    {
        return $this->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor($this->get('router'), array(), __DIR__, array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'AppBundle' => 'AppBundle\\AppBundle', 'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle', 'BazingaJsTranslationBundle' => 'Bazinga\\Bundle\\JsTranslationBundle\\BazingaJsTranslationBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'TroopersAsseticInjectorBundle' => 'Troopers\\AsseticInjectorBundle\\TroopersAsseticInjectorBundle', 'TroopersAlertifyBundle' => 'Troopers\\AlertifyBundle\\TroopersAlertifyBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle', 'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'DoctrineBehaviorsBundle' => 'Knp\\DoctrineBehaviors\\Bundle\\DoctrineBehaviorsBundle', 'SncRedisBundle' => 'Snc\\RedisBundle\\SncRedisBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'VictoireAnalyticsBundle' => 'Victoire\\Bundle\\AnalyticsBundle\\VictoireAnalyticsBundle', 'VictoireBlogBundle' => 'Victoire\\Bundle\\BlogBundle\\VictoireBlogBundle', 'VictoireBusinessEntityBundle' => 'Victoire\\Bundle\\BusinessEntityBundle\\VictoireBusinessEntityBundle', 'VictoireBusinessPageBundle' => 'Victoire\\Bundle\\BusinessPageBundle\\VictoireBusinessPageBundle', 'VictoireCoreBundle' => 'Victoire\\Bundle\\CoreBundle\\VictoireCoreBundle', 'VictoireCriteriaBundle' => 'Victoire\\Bundle\\CriteriaBundle\\VictoireCriteriaBundle', 'VictoireFilterBundle' => 'Victoire\\Bundle\\FilterBundle\\VictoireFilterBundle', 'VictoireFormBundle' => 'Victoire\\Bundle\\FormBundle\\VictoireFormBundle', 'VictoireI18nBundle' => 'Victoire\\Bundle\\I18nBundle\\VictoireI18nBundle', 'VictoireMediaBundle' => 'Victoire\\Bundle\\MediaBundle\\VictoireMediaBundle', 'VictoirePageBundle' => 'Victoire\\Bundle\\PageBundle\\VictoirePageBundle', 'VictoireQueryBundle' => 'Victoire\\Bundle\\QueryBundle\\VictoireQueryBundle', 'VictoireSeoBundle' => 'Victoire\\Bundle\\SeoBundle\\VictoireSeoBundle', 'VictoireSitemapBundle' => 'Victoire\\Bundle\\SitemapBundle\\VictoireSitemapBundle', 'VictoireTemplateBundle' => 'Victoire\\Bundle\\TemplateBundle\\VictoireTemplateBundle', 'VictoireTwigBundle' => 'Victoire\\Bundle\\TwigBundle\\VictoireTwigBundle', 'VictoireUIBundle' => 'Victoire\\Bundle\\UIBundle\\VictoireUIBundle', 'VictoireUserBundle' => 'Victoire\\Bundle\\UserBundle\\VictoireUserBundle', 'ViewReferenceBundle' => 'Victoire\\Bundle\\ViewReferenceBundle\\ViewReferenceBundle', 'VictoireWidgetBundle' => 'Victoire\\Bundle\\WidgetBundle\\VictoireWidgetBundle', 'VictoireWidgetMapBundle' => 'Victoire\\Bundle\\WidgetMapBundle\\VictoireWidgetMapBundle'));
    }

    /*
     * Gets the 'fos_js_routing.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Serializer\Serializer A Symfony\Component\Serializer\Serializer instance
     */
    protected function getFosJsRouting_SerializerService()
    {
        return $this->services['fos_js_routing.serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer()), array('json' => new \Symfony\Component\Serializer\Encoder\JsonEncoder()));
    }

    /*
     * Gets the 'fos_user.change_password.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_ChangePassword_Form_FactoryService()
    {
        return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_change_password_form', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', array(0 => 'ChangePassword', 1 => 'Default'));
    }

    /*
     * Gets the 'fos_user.change_password.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType A FOS\UserBundle\Form\Type\ChangePasswordFormType instance
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('Victoire\\Bundle\\UserBundle\\Entity\\User');
    }

    /*
     * Gets the 'fos_user.listener.authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\AuthenticationListener A FOS\UserBundle\EventListener\AuthenticationListener instance
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->services['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener($this->get('fos_user.security.login_manager'), 'main');
    }

    /*
     * Gets the 'fos_user.listener.flash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\FlashListener A FOS\UserBundle\EventListener\FlashListener instance
     */
    protected function getFosUser_Listener_FlashService()
    {
        return $this->services['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener($this->get('session'), $this->get('translator.default'));
    }

    /*
     * Gets the 'fos_user.listener.resetting' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\ResettingListener A FOS\UserBundle\EventListener\ResettingListener instance
     */
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->services['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener($this->get('router'), 86400);
    }

    /*
     * Gets the 'fos_user.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Mailer\Mailer A FOS\UserBundle\Mailer\Mailer instance
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => '@FOSUser/Registration/email.txt.twig', 'resetting.template' => '@FOSUser/Resetting/email.txt.twig', 'from_email' => array('confirmation' => array('hey@victoire.io' => 'Victoire'), 'resetting' => array('hey@victoire.io' => 'Victoire'))));
    }

    /*
     * Gets the 'fos_user.profile.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Profile_Form_FactoryService()
    {
        return $this->services['fos_user.profile.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_profile_form', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', array(0 => 'Profile', 1 => 'Default'));
    }

    /*
     * Gets the 'fos_user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType A FOS\UserBundle\Form\Type\ProfileFormType instance
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('Victoire\\Bundle\\UserBundle\\Entity\\User');
    }

    /*
     * Gets the 'fos_user.registration.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Registration_Form_FactoryService()
    {
        return $this->services['fos_user.registration.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_registration_form', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', array(0 => 'Registration', 1 => 'Default'));
    }

    /*
     * Gets the 'fos_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType A FOS\UserBundle\Form\Type\RegistrationFormType instance
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('Victoire\\Bundle\\UserBundle\\Entity\\User');
    }

    /*
     * Gets the 'fos_user.resetting.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        return $this->services['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_resetting_form', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', array(0 => 'ResetPassword', 1 => 'Default'));
    }

    /*
     * Gets the 'fos_user.resetting.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType A FOS\UserBundle\Form\Type\ResettingFormType instance
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('Victoire\\Bundle\\UserBundle\\Entity\\User');
    }

    /*
     * Gets the 'fos_user.security.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\LastLoginListener A FOS\UserBundle\EventListener\LastLoginListener instance
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener($this->get('fos_user.user_manager'));
    }

    /*
     * Gets the 'fos_user.security.login_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Security\LoginManager A FOS\UserBundle\Security\LoginManager instance
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.token_storage'), ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.session_strategy']) ? $this->services['security.authentication.session_strategy'] : $this->getSecurity_Authentication_SessionStrategyService()) && false ?: '_'}, $this->get('request_stack'), NULL);
    }

    /*
     * Gets the 'fos_user.user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Doctrine\UserManager A FOS\UserBundle\Doctrine\UserManager instance
     */
    protected function getFosUser_UserManagerService()
    {
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager(${($_ = isset($this->services['fos_user.util.password_updater']) ? $this->services['fos_user.util.password_updater'] : $this->getFosUser_Util_PasswordUpdaterService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'}, $this->get('doctrine')->getManager(NULL), 'Victoire\\Bundle\\UserBundle\\Entity\\User');
    }

    /*
     * Gets the 'fos_user.username_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType A FOS\UserBundle\Form\Type\UsernameFormType instance
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }

    /*
     * Gets the 'fos_user.util.email_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /*
     * Gets the 'fos_user.util.token_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\TokenGenerator A FOS\UserBundle\Util\TokenGenerator instance
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator();
    }

    /*
     * Gets the 'fos_user.util.user_manipulator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator A FOS\UserBundle\Util\UserManipulator instance
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'), $this->get('event_dispatcher'), $this->get('request_stack'));
    }

    /*
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), false);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /*
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /*
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel A Symfony\Component\HttpKernel\HttpKernel instance
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel($this->get('event_dispatcher'), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('request_stack'), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), array(0 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver(), 1 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver(), 2 => new \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver($this->get('security.token_storage')), 3 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver(), 4 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())));
    }

    /*
     * Gets the 'jms_serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Serializer A JMS\Serializer\Serializer instance
     */
    protected function getJmsSerializerService()
    {
        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', false);
        $a->setCache(new \Metadata\Cache\FileCache((__DIR__.'/jms_serializer')));

        $b = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $b->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'), 1 => NULL, 2 => NULL), 1 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL))));

        $this->services['jms_serializer'] = $instance = new \JMS\Serializer\Serializer($a, $this->get('jms_serializer.handler_registry'), ${($_ = isset($this->services['jms_serializer.unserialize_object_constructor']) ? $this->services['jms_serializer.unserialize_object_constructor'] : $this->getJmsSerializer_UnserializeObjectConstructorService()) && false ?: '_'}, new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_serialization_visitor'), 'xml' => $this->get('jms_serializer.xml_serialization_visitor'), 'yml' => $this->get('jms_serializer.yaml_serialization_visitor'))), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_deserialization_visitor'), 'xml' => $this->get('jms_serializer.xml_deserialization_visitor'))), $b, NULL, $this->get('jms_serializer.expression_evaluator'));

        $instance->setSerializationContextFactory($this->get('jms_serializer.serialization_context_factory'));
        $instance->setDeserializationContextFactory($this->get('jms_serializer.deserialization_context_factory'));

        return $instance;
    }

    /*
     * Gets the 'jms_serializer.accessor_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Accessor\ExpressionAccessorStrategy A JMS\Serializer\Accessor\ExpressionAccessorStrategy instance
     */
    protected function getJmsSerializer_AccessorStrategyService()
    {
        return $this->services['jms_serializer.accessor_strategy'] = new \JMS\Serializer\Accessor\ExpressionAccessorStrategy($this->get('jms_serializer.expression_evaluator'), new \JMS\Serializer\Accessor\DefaultAccessorStrategy());
    }

    /*
     * Gets the 'jms_serializer.array_collection_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\ArrayCollectionHandler A JMS\Serializer\Handler\ArrayCollectionHandler instance
     */
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler(true);
    }

    /*
     * Gets the 'jms_serializer.constraint_violation_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\ConstraintViolationHandler A JMS\Serializer\Handler\ConstraintViolationHandler instance
     */
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }

    /*
     * Gets the 'jms_serializer.datetime_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\DateHandler A JMS\Serializer\Handler\DateHandler instance
     */
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sO', 'Europe/Paris', true);
    }

    /*
     * Gets the 'jms_serializer.deserialization_context_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory A JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory instance
     */
    protected function getJmsSerializer_DeserializationContextFactoryService()
    {
        return $this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /*
     * Gets the 'jms_serializer.doctrine_proxy_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber A JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber instance
     */
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber(false, true);
    }

    /*
     * Gets the 'jms_serializer.expression_evaluator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Expression\ExpressionEvaluator A JMS\Serializer\Expression\ExpressionEvaluator instance
     */
    protected function getJmsSerializer_ExpressionEvaluatorService()
    {
        $a = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
        $a->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

        return $this->services['jms_serializer.expression_evaluator'] = new \JMS\Serializer\Expression\ExpressionEvaluator($a, array('container' => $this));
    }

    /*
     * Gets the 'jms_serializer.form_error_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\FormErrorHandler A JMS\Serializer\Handler\FormErrorHandler instance
     */
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler($this->get('translator.default'));
    }

    /*
     * Gets the 'jms_serializer.handler_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\LazyHandlerRegistry A JMS\Serializer\Handler\LazyHandlerRegistry instance
     */
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(2 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromyml')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'))), 1 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml')))));
    }

    /*
     * Gets the 'jms_serializer.json_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\JsonDeserializationVisitor A JMS\Serializer\JsonDeserializationVisitor instance
     */
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor($this->get('jms_serializer.naming_strategy'));
    }

    /*
     * Gets the 'jms_serializer.json_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\JsonSerializationVisitor A JMS\Serializer\JsonSerializationVisitor instance
     */
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.accessor_strategy'));

        $instance->setOptions(0);

        return $instance;
    }

    /*
     * Gets the 'jms_serializer.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver A JMS\Serializer\Metadata\Driver\DoctrineTypeDriver instance
     */
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array('Symfony\\Bundle\\FrameworkBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/config/serializer'), 'Symfony\\Bundle\\SecurityBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/config/serializer'), 'Symfony\\Bundle\\TwigBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/config/serializer'), 'Symfony\\Bundle\\MonologBundle' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\SwiftmailerBundle' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\DoctrineBundle' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/config/serializer'), 'Sensio\\Bundle\\FrameworkExtraBundle' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Resources/config/serializer'), 'AppBundle' => ($this->targetDirs[3].'/src/AppBundle/Resources/config/serializer'), 'A2lix\\TranslationFormBundle' => ($this->targetDirs[3].'/vendor/a2lix/translation-form-bundle/A2lix/TranslationFormBundle/Resources/config/serializer'), 'Bazinga\\Bundle\\JsTranslationBundle' => ($this->targetDirs[3].'/vendor/willdurand/js-translation-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\AsseticBundle' => ($this->targetDirs[3].'/vendor/symfony/assetic-bundle/Resources/config/serializer'), 'Troopers\\AsseticInjectorBundle' => ($this->targetDirs[3].'/vendor/troopers/assetic-injector-bundle/Troopers/AsseticInjectorBundle/Resources/config/serializer'), 'Troopers\\AlertifyBundle' => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/config/serializer'), 'FOS\\UserBundle' => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/serializer'), 'FOS\\JsRoutingBundle' => ($this->targetDirs[3].'/vendor/friendsofsymfony/jsrouting-bundle/Resources/config/serializer'), 'JMS\\SerializerBundle' => ($this->targetDirs[3].'/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/config/serializer'), 'Liip\\ImagineBundle' => ($this->targetDirs[3].'/vendor/liip/imagine-bundle/Resources/config/serializer'), 'Knp\\Bundle\\MenuBundle' => ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/Resources/config/serializer'), 'Knp\\DoctrineBehaviors\\Bundle' => ($this->targetDirs[3].'/vendor/knplabs/doctrine-behaviors/src/Bundle/Resources/config/serializer'), 'Snc\\RedisBundle' => ($this->targetDirs[3].'/vendor/snc/redis-bundle/Resources/config/serializer'), 'Stof\\DoctrineExtensionsBundle' => ($this->targetDirs[3].'/vendor/stof/doctrine-extensions-bundle/Resources/config/serializer'), 'Victoire\\Bundle\\AnalyticsBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/AnalyticsBundle/Resources/config/serializer'), 'Victoire\\Bundle\\BlogBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/config/serializer'), 'Victoire\\Bundle\\BusinessEntityBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessEntityBundle/Resources/config/serializer'), 'Victoire\\Bundle\\BusinessPageBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/config/serializer'), 'Victoire\\Bundle\\CoreBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CoreBundle/Resources/config/serializer'), 'Victoire\\Bundle\\CriteriaBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CriteriaBundle/Resources/config/serializer'), 'Victoire\\Bundle\\FilterBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/FilterBundle/Resources/config/serializer'), 'Victoire\\Bundle\\FormBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/FormBundle/Resources/config/serializer'), 'Victoire\\Bundle\\I18nBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/I18nBundle/Resources/config/serializer'), 'Victoire\\Bundle\\MediaBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/config/serializer'), 'Victoire\\Bundle\\PageBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/PageBundle/Resources/config/serializer'), 'Victoire\\Bundle\\QueryBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/QueryBundle/Resources/config/serializer'), 'Victoire\\Bundle\\SeoBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SeoBundle/Resources/config/serializer'), 'Victoire\\Bundle\\SitemapBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SitemapBundle/Resources/config/serializer'), 'Victoire\\Bundle\\TemplateBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TemplateBundle/Resources/config/serializer'), 'Victoire\\Bundle\\TwigBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TwigBundle/Resources/config/serializer'), 'Victoire\\Bundle\\UIBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UIBundle/Resources/config/serializer'), 'Victoire\\Bundle\\UserBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UserBundle/Resources/config/serializer'), 'Victoire\\Bundle\\ViewReferenceBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/ViewReferenceBundle/Resources/config/serializer'), 'Victoire\\Bundle\\WidgetBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/WidgetBundle/Resources/config/serializer'), 'Victoire\\Bundle\\WidgetMapBundle' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/WidgetMapBundle/Resources/config/serializer')));

        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')))), $this->get('doctrine'));
    }

    /*
     * Gets the 'jms_serializer.naming_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Naming\CacheNamingStrategy A JMS\Serializer\Naming\CacheNamingStrategy instance
     */
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }

    /*
     * Gets the 'jms_serializer.object_constructor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Construction\DoctrineObjectConstructor A JMS\Serializer\Construction\DoctrineObjectConstructor instance
     */
    protected function getJmsSerializer_ObjectConstructorService()
    {
        return $this->services['jms_serializer.object_constructor'] = new \JMS\Serializer\Construction\DoctrineObjectConstructor($this->get('doctrine'), ${($_ = isset($this->services['jms_serializer.unserialize_object_constructor']) ? $this->services['jms_serializer.unserialize_object_constructor'] : $this->getJmsSerializer_UnserializeObjectConstructorService()) && false ?: '_'}, 'null');
    }

    /*
     * Gets the 'jms_serializer.php_collection_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\PhpCollectionHandler A JMS\Serializer\Handler\PhpCollectionHandler instance
     */
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }

    /*
     * Gets the 'jms_serializer.serialization_context_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory A JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory instance
     */
    protected function getJmsSerializer_SerializationContextFactoryService()
    {
        return $this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /*
     * Gets the 'jms_serializer.templating.helper.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SerializerBundle\Templating\SerializerHelper A JMS\SerializerBundle\Templating\SerializerHelper instance
     */
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper($this->get('jms_serializer'));
    }

    /*
     * Gets the 'jms_serializer.twig_extension.serializer_runtime_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Twig\SerializerRuntimeHelper A JMS\Serializer\Twig\SerializerRuntimeHelper instance
     */
    protected function getJmsSerializer_TwigExtension_SerializerRuntimeHelperService()
    {
        return $this->services['jms_serializer.twig_extension.serializer_runtime_helper'] = new \JMS\Serializer\Twig\SerializerRuntimeHelper($this->get('jms_serializer'));
    }

    /*
     * Gets the 'jms_serializer.xml_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\XmlDeserializationVisitor A JMS\Serializer\XmlDeserializationVisitor instance
     */
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor($this->get('jms_serializer.naming_strategy'));

        $instance->setDoctypeWhitelist(array());

        return $instance;
    }

    /*
     * Gets the 'jms_serializer.xml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\XmlSerializationVisitor A JMS\Serializer\XmlSerializationVisitor instance
     */
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        $this->services['jms_serializer.xml_serialization_visitor'] = $instance = new \JMS\Serializer\XmlSerializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.accessor_strategy'));

        $instance->setFormatOutput(true);

        return $instance;
    }

    /*
     * Gets the 'jms_serializer.yaml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\YamlSerializationVisitor A JMS\Serializer\YamlSerializationVisitor instance
     */
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.accessor_strategy'));
    }

    /*
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer(array(0 => 'Symfony\\Component\\HttpFoundation\\ParameterBag', 1 => 'Symfony\\Component\\HttpFoundation\\HeaderBag', 2 => 'Symfony\\Component\\HttpFoundation\\FileBag', 3 => 'Symfony\\Component\\HttpFoundation\\ServerBag', 4 => 'Symfony\\Component\\HttpFoundation\\Request', 5 => 'Symfony\\Component\\HttpKernel\\Kernel', 6 => 'Symfony\\Component\\ClassLoader\\ClassCollectionLoader', 7 => 'Symfony\\Component\\ClassLoader\\ApcClassLoader'));
    }

    /*
     * Gets the 'knp_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuFactory A Knp\Menu\MenuFactory instance
     */
    protected function getKnpMenu_FactoryService()
    {
        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

        $instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension($this->get('router')), 0);

        return $instance;
    }

    /*
     * Gets the 'knp_menu.listener.voters' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener A Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener instance
     */
    protected function getKnpMenu_Listener_VotersService()
    {
        $this->services['knp_menu.listener.voters'] = $instance = new \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener();

        $instance->addVoter($this->get('knp_menu.voter.router'));

        return $instance;
    }

    /*
     * Gets the 'knp_menu.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Matcher\Matcher A Knp\Menu\Matcher\Matcher instance
     */
    protected function getKnpMenu_MatcherService()
    {
        $this->services['knp_menu.matcher'] = $instance = new \Knp\Menu\Matcher\Matcher();

        $instance->addVoter($this->get('knp_menu.voter.router'));

        return $instance;
    }

    /*
     * Gets the 'knp_menu.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Provider\ChainProvider A Knp\Menu\Provider\ChainProvider instance
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array('admin_menu' => 'victoire_core.admin_menu', 'topnavbar' => 'victoire_core.admin_menu.navbar_top', 'bottomleftnavbar' => 'victoire_core.admin_menu.navbar_bottom_left', 'bottomrightnavbar' => 'victoire_core.admin_menu.navbar_bottom_right', 'floatactionnavbar' => 'victoire_core.admin_menu.navbar_float_action', 'leftnavbar' => 'victoire_core.admin_menu.navbar_left')), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderServiceProvider($this, array()), 2 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }

    /*
     * Gets the 'knp_menu.renderer.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer A Knp\Menu\Renderer\ListRenderer instance
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer($this->get('knp_menu.matcher'), array(), 'UTF-8');
    }

    /*
     * Gets the 'knp_menu.renderer.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer A Knp\Menu\Renderer\TwigRenderer instance
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'VictoireCoreBundle:Menu:knp_menu_main.html.twig', $this->get('knp_menu.matcher'), array());
    }

    /*
     * Gets the 'knp_menu.renderer_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider A Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider instance
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /*
     * Gets the 'knp_menu.voter.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Matcher\Voter\RouteVoter A Knp\Menu\Matcher\Voter\RouteVoter instance
     */
    protected function getKnpMenu_Voter_RouterService()
    {
        return $this->services['knp_menu.voter.router'] = new \Knp\Menu\Matcher\Voter\RouteVoter();
    }

    /*
     * Gets the 'liip_imagine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Imagine\Gd\Imagine A Imagine\Gd\Imagine instance
     */
    protected function getLiipImagineService()
    {
        $this->services['liip_imagine'] = $instance = new \Imagine\Gd\Imagine();

        $instance->setMetadataReader(new \Imagine\Image\Metadata\ExifMetadataReader());

        return $instance;
    }

    /*
     * Gets the 'liip_imagine.binary.loader.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader A Liip\ImagineBundle\Binary\Loader\FileSystemLoader instance
     */
    protected function getLiipImagine_Binary_Loader_DefaultService()
    {
        return $this->services['liip_imagine.binary.loader.default'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader($this->get('liip_imagine.mime_type_guesser'), $this->get('liip_imagine.extension_guesser'), array(0 => ($this->targetDirs[3].'/app/../web')), new \Liip\ImagineBundle\Binary\Locator\FileSystemLocator());
    }

    /*
     * Gets the 'liip_imagine.binary.loader.prototype.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader A Liip\ImagineBundle\Binary\Loader\FileSystemLoader instance
     */
    protected function getLiipImagine_Binary_Loader_Prototype_FilesystemService()
    {
        return $this->services['liip_imagine.binary.loader.prototype.filesystem'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader($this->get('liip_imagine.mime_type_guesser'), $this->get('liip_imagine.extension_guesser'), '', '');
    }

    /*
     * Gets the 'liip_imagine.binary.loader.prototype.stream' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\StreamLoader A Liip\ImagineBundle\Binary\Loader\StreamLoader instance
     */
    protected function getLiipImagine_Binary_Loader_Prototype_StreamService()
    {
        return $this->services['liip_imagine.binary.loader.prototype.stream'] = new \Liip\ImagineBundle\Binary\Loader\StreamLoader('', '');
    }

    /*
     * Gets the 'liip_imagine.binary.mime_type_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser A Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser instance
     */
    protected function getLiipImagine_Binary_MimeTypeGuesserService()
    {
        return $this->services['liip_imagine.binary.mime_type_guesser'] = new \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser($this->get('liip_imagine.mime_type_guesser'));
    }

    /*
     * Gets the 'liip_imagine.cache.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\CacheManager A Liip\ImagineBundle\Imagine\Cache\CacheManager instance
     */
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager($this->get('liip_imagine.filter.configuration'), $this->get('router'), $this->get('liip_imagine.cache.signer'), $this->get('event_dispatcher'), 'default');

        $instance->addResolver('default', $this->get('liip_imagine.cache.resolver.default'));
        $instance->addResolver('no_cache', $this->get('liip_imagine.cache.resolver.no_cache_web_path'));

        return $instance;
    }

    /*
     * Gets the 'liip_imagine.cache.resolver.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver A Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver instance
     */
    protected function getLiipImagine_Cache_Resolver_DefaultService()
    {
        return $this->services['liip_imagine.cache.resolver.default'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver($this->get('filesystem'), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ($this->targetDirs[3].'/app/../web'), 'media/cache');
    }

    /*
     * Gets the 'liip_imagine.cache.resolver.no_cache_web_path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver A Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver instance
     */
    protected function getLiipImagine_Cache_Resolver_NoCacheWebPathService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache_web_path'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver(${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});
    }

    /*
     * Gets the 'liip_imagine.cache.signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Signer A Liip\ImagineBundle\Imagine\Cache\Signer instance
     */
    protected function getLiipImagine_Cache_SignerService()
    {
        return $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer('0b1f529bfd1e2214cc16881ae978db041c8bee6f');
    }

    /*
     * Gets the 'liip_imagine.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Controller\ImagineController A Liip\ImagineBundle\Controller\ImagineController instance
     */
    protected function getLiipImagine_ControllerService()
    {
        return $this->services['liip_imagine.controller'] = new \Liip\ImagineBundle\Controller\ImagineController($this->get('liip_imagine.data.manager'), $this->get('liip_imagine.filter.manager'), $this->get('liip_imagine.cache.manager'), $this->get('liip_imagine.cache.signer'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'liip_imagine.data.loader.stream.profile_photos' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\StreamLoader A Liip\ImagineBundle\Binary\Loader\StreamLoader instance
     */
    protected function getLiipImagine_Data_Loader_Stream_ProfilePhotosService()
    {
        return $this->services['liip_imagine.data.loader.stream.profile_photos'] = new \Liip\ImagineBundle\Binary\Loader\StreamLoader($this->get('liip_imagine'), '');
    }

    /*
     * Gets the 'liip_imagine.data.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Data\DataManager A Liip\ImagineBundle\Imagine\Data\DataManager instance
     */
    protected function getLiipImagine_Data_ManagerService()
    {
        $this->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager($this->get('liip_imagine.binary.mime_type_guesser'), $this->get('liip_imagine.extension_guesser'), $this->get('liip_imagine.filter.configuration'), 'filesystem', NULL);

        $instance->addLoader('default', $this->get('liip_imagine.binary.loader.default'));

        return $instance;
    }

    /*
     * Gets the 'liip_imagine.extension_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesserInterface A Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesserInterface instance
     */
    protected function getLiipImagine_ExtensionGuesserService()
    {
        return $this->services['liip_imagine.extension_guesser'] = \Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser::getInstance();
    }

    /*
     * Gets the 'liip_imagine.filter.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration A Liip\ImagineBundle\Imagine\Filter\FilterConfiguration instance
     */
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->services['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration(array('media_list_thumbnail' => array('quality' => 75, 'filters' => array('thumbnail' => array('size' => array(0 => 210, 1 => 150), 'mode' => 'outbound')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'media_detail_thumbnail' => array('quality' => 75, 'filters' => array('thumbnail' => array('size' => array(0 => 500, 1 => 500), 'mode' => 'outbound')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array())));
    }

    /*
     * Gets the 'liip_imagine.filter.loader.auto_rotate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_AutoRotateService()
    {
        return $this->services['liip_imagine.filter.loader.auto_rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.background' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_BackgroundService()
    {
        return $this->services['liip_imagine.filter.loader.background'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader($this->get('liip_imagine'));
    }

    /*
     * Gets the 'liip_imagine.filter.loader.crop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_CropService()
    {
        return $this->services['liip_imagine.filter.loader.crop'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.downscale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_DownscaleService()
    {
        return $this->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.flip' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_FlipService()
    {
        return $this->services['liip_imagine.filter.loader.flip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.grayscale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_GrayscaleService()
    {
        return $this->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.interlace' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_InterlaceService()
    {
        return $this->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.paste' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_PasteService()
    {
        return $this->services['liip_imagine.filter.loader.paste'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($this->get('liip_imagine'), ($this->targetDirs[3].'/app'));
    }

    /*
     * Gets the 'liip_imagine.filter.loader.relative_resize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_RelativeResizeService()
    {
        return $this->services['liip_imagine.filter.loader.relative_resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.resize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_ResizeService()
    {
        return $this->services['liip_imagine.filter.loader.resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.rotate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_RotateService()
    {
        return $this->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.scale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_ScaleService()
    {
        return $this->services['liip_imagine.filter.loader.scale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.strip' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_StripService()
    {
        return $this->services['liip_imagine.filter.loader.strip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.thumbnail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_ThumbnailService()
    {
        return $this->services['liip_imagine.filter.loader.thumbnail'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.upscale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_UpscaleService()
    {
        return $this->services['liip_imagine.filter.loader.upscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.watermark' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_WatermarkService()
    {
        return $this->services['liip_imagine.filter.loader.watermark'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($this->get('liip_imagine'), ($this->targetDirs[3].'/app'));
    }

    /*
     * Gets the 'liip_imagine.filter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterManager A Liip\ImagineBundle\Imagine\Filter\FilterManager instance
     */
    protected function getLiipImagine_Filter_ManagerService()
    {
        $this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager($this->get('liip_imagine.filter.configuration'), $this->get('liip_imagine'), $this->get('liip_imagine.binary.mime_type_guesser'));

        $instance->addLoader('relative_resize', $this->get('liip_imagine.filter.loader.relative_resize'));
        $instance->addLoader('resize', $this->get('liip_imagine.filter.loader.resize'));
        $instance->addLoader('thumbnail', $this->get('liip_imagine.filter.loader.thumbnail'));
        $instance->addLoader('crop', $this->get('liip_imagine.filter.loader.crop'));
        $instance->addLoader('grayscale', $this->get('liip_imagine.filter.loader.grayscale'));
        $instance->addLoader('paste', $this->get('liip_imagine.filter.loader.paste'));
        $instance->addLoader('watermark', $this->get('liip_imagine.filter.loader.watermark'));
        $instance->addLoader('background', $this->get('liip_imagine.filter.loader.background'));
        $instance->addLoader('strip', $this->get('liip_imagine.filter.loader.strip'));
        $instance->addLoader('scale', $this->get('liip_imagine.filter.loader.scale'));
        $instance->addLoader('upscale', $this->get('liip_imagine.filter.loader.upscale'));
        $instance->addLoader('downscale', $this->get('liip_imagine.filter.loader.downscale'));
        $instance->addLoader('auto_rotate', $this->get('liip_imagine.filter.loader.auto_rotate'));
        $instance->addLoader('rotate', $this->get('liip_imagine.filter.loader.rotate'));
        $instance->addLoader('flip', $this->get('liip_imagine.filter.loader.flip'));
        $instance->addLoader('interlace', $this->get('liip_imagine.filter.loader.interlace'));
        $instance->addPostProcessor('jpegoptim', $this->get('liip_imagine.filter.post_processor.jpegoptim'));
        $instance->addPostProcessor('optipng', $this->get('liip_imagine.filter.post_processor.optipng'));
        $instance->addPostProcessor('pngquant', $this->get('liip_imagine.filter.post_processor.pngquant'));
        $instance->addPostProcessor('mozjpeg', $this->get('liip_imagine.filter.post_processor.mozjpeg'));

        return $instance;
    }

    /*
     * Gets the 'liip_imagine.filter.post_processor.jpegoptim' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor A Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor instance
     */
    protected function getLiipImagine_Filter_PostProcessor_JpegoptimService()
    {
        return $this->services['liip_imagine.filter.post_processor.jpegoptim'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor('/usr/bin/jpegoptim', true, NULL, true, NULL);
    }

    /*
     * Gets the 'liip_imagine.filter.post_processor.mozjpeg' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor A Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor instance
     */
    protected function getLiipImagine_Filter_PostProcessor_MozjpegService()
    {
        return $this->services['liip_imagine.filter.post_processor.mozjpeg'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor('/opt/mozjpeg/bin/cjpeg');
    }

    /*
     * Gets the 'liip_imagine.filter.post_processor.optipng' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor A Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor instance
     */
    protected function getLiipImagine_Filter_PostProcessor_OptipngService()
    {
        return $this->services['liip_imagine.filter.post_processor.optipng'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor('/usr/bin/optipng', 7, true, NULL);
    }

    /*
     * Gets the 'liip_imagine.filter.post_processor.pngquant' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor A Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor instance
     */
    protected function getLiipImagine_Filter_PostProcessor_PngquantService()
    {
        return $this->services['liip_imagine.filter.post_processor.pngquant'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor('/usr/bin/pngquant');
    }

    /*
     * Gets the 'liip_imagine.form.type.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Form\Type\ImageType A Liip\ImagineBundle\Form\Type\ImageType instance
     */
    protected function getLiipImagine_Form_Type_ImageService()
    {
        return $this->services['liip_imagine.form.type.image'] = new \Liip\ImagineBundle\Form\Type\ImageType();
    }

    /*
     * Gets the 'liip_imagine.mime_type_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface A Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface instance
     */
    protected function getLiipImagine_MimeTypeGuesserService()
    {
        return $this->services['liip_imagine.mime_type_guesser'] = \Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesser::getInstance();
    }

    /*
     * Gets the 'liip_imagine.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Templating\Helper\ImagineHelper A Liip\ImagineBundle\Templating\Helper\ImagineHelper instance
     */
    protected function getLiipImagine_Templating_HelperService()
    {
        return $this->services['liip_imagine.templating.helper'] = new \Liip\ImagineBundle\Templating\Helper\ImagineHelper($this->get('liip_imagine.cache.manager'));
    }

    /*
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'en', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.activation_strategy.not_found' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy A Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy instance
     */
    protected function getMonolog_ActivationStrategy_NotFoundService()
    {
        return $this->services['monolog.activation_strategy.not_found'] = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy();
    }

    /*
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.handler.fingers_crossed.error_level_activation_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy A Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy instance
     */
    protected function getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService()
    {
        return $this->services['monolog.handler.fingers_crossed.error_level_activation_strategy'] = new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy();
    }

    /*
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler A Monolog\Handler\FingersCrossedHandler instance
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.handler.nested' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance
     */
    protected function getMonolog_Handler_NestedService()
    {
        $this->services['monolog.handler.nested'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/prod.log'), 100, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.handler.null_internal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\NullHandler A Monolog\Handler\NullHandler instance
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /*
     * Gets the 'monolog.logger.assetic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.snc_redis' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SncRedisService()
    {
        $this->services['monolog.logger.snc_redis'] = $instance = new \Symfony\Bridge\Monolog\Logger('snc_redis');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'page.security.voter.page_debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\PageBundle\Security\Voter\PageDebugVoter A Victoire\Bundle\PageBundle\Security\Voter\PageDebugVoter instance
     */
    protected function getPage_Security_Voter_PageDebugService()
    {
        return $this->services['page.security.voter.page_debug'] = new \Victoire\Bundle\PageBundle\Security\Voter\PageDebugVoter('Victoire\\Bundle\\UserBundle\\Entity\\User');
    }

    /*
     * Gets the 'page.security.voter.page_owner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\PageBundle\Security\Voter\PageOwnerVoter A Victoire\Bundle\PageBundle\Security\Voter\PageOwnerVoter instance
     */
    protected function getPage_Security_Voter_PageOwnerService()
    {
        return $this->services['page.security.voter.page_owner'] = new \Victoire\Bundle\PageBundle\Security\Voter\PageOwnerVoter('Victoire\\Bundle\\UserBundle\\Entity\\User');
    }

    /*
     * Gets the 'page.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\PageBundle\EventSubscriber\PageSubscriber A Victoire\Bundle\PageBundle\EventSubscriber\PageSubscriber instance
     */
    protected function getPage_SubscriberService()
    {
        return $this->services['page.subscriber'] = new \Victoire\Bundle\PageBundle\EventSubscriber\PageSubscriber($this->get('router'), $this->get('victoire_page.user_callable'), 'Victoire\\Bundle\\UserBundle\\Entity\\User', $this->get('victoire_view_reference.builder'), $this->get('victoire_view_reference.repository'));
    }

    /*
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('jeA6qXDMb6', NULL, 'MYfBg2oUlptyQ7C3Ob4WQe', $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }

    /*
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /*
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'/app/config/routing.yml'), array('cache_dir' => __DIR__, 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdProjectContainerUrlMatcher', 'strict_requirements' => NULL), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));

        return $instance;
    }

    /*
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('request_stack'), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader($this->get('victoire_core.routing_loader'));
        $d->addLoader($this->get('victoire_i18n.routing_loader'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, $d);
    }

    /*
     * Gets the 'security.authentication.guard_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler A Symfony\Component\Security\Guard\GuardAuthenticatorHandler instance
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /*
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /*
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /*
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('Victoire\\Bundle\\UserBundle\\Entity\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', 'arguments' => array(0 => 13))));
    }

    /*
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('event_dispatcher'));
    }

    /*
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d', false, '', '', '', '', '', '', array()));
    }

    /*
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.token_storage');
        $c = ${($_ = isset($this->services['fos_user.user_provider.username']) ? $this->services['fos_user.user_provider.username'] : $this->getFosUser_UserProvider_UsernameService()) && false ?: '_'};
        $d = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};
        $f = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $g = $this->get('http_kernel');
        $h = ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'};
        $i = ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'};

        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login');

        $k = new \Symfony\Component\HttpFoundation\RequestMatcher('^/victoire-dcms');

        $l = new \Symfony\Component\Security\Http\AccessMap();
        $l->add($j, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $l->add($k, array(0 => 'ROLE_VICTOIRE'));

        $m = new \Symfony\Component\Security\Http\HttpUtils($f, $f);

        $n = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $m, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($m, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/logout'));
        $n->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        $o = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($m, array());
        $o->setOptions(array('default_target_path' => '/', 'always_use_default_target_path' => false, 'login_path' => '/login', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $o->setProviderKey('main');

        $p = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($g, $m, array(), $a);
        $p->setOptions(array('failure_path' => '/login', 'login_path' => '/login', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($l, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $c), 'main', $a, $d, $e), 2 => $n, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $h, ${($_ = isset($this->services['security.authentication.session_strategy']) ? $this->services['security.authentication.session_strategy'] : $this->getSecurity_Authentication_SessionStrategyService()) && false ?: '_'}, $m, 'main', $o, $p, array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $a, $d, $this->get('security.csrf.token_manager')), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '594831ac756863.97507592', $a, $h), 5 => new \Symfony\Component\Security\Http\Firewall\SwitchUserListener($b, $c, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'}, 'main', $i, $a, '_switch_user', 'ROLE_ALLOWED_TO_SWITCH', $d), 6 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $i, $l, $h)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $e, $m, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($g, $m, '/login', false), NULL, NULL, $a, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', 'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db', true, false, 'fos_user.user_provider.username', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, array(0 => 'logout', 1 => 'switch_user', 2 => 'form_login', 3 => 'anonymous')));
    }

    /*
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /*
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /*
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /*
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /*
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /*
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /*
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /*
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /*
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /*
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /*
     * Gets the 'serializer.mapping.cache.symfony' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpArrayAdapter A Symfony\Component\Cache\Adapter\PhpArrayAdapter instance
     */
    protected function getSerializer_Mapping_Cache_SymfonyService()
    {
        return $this->services['serializer.mapping.cache.symfony'] = \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/serialization.php'), ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
    }

    /*
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /*
     * Gets the 'session.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler instance
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[3].'/app/../var/sessions/prod'));
    }

    /*
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /*
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), $this->get('session.handler'), ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'), ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /*
     * Gets the 'snc_redis.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Snc\RedisBundle\Logger\RedisLogger A Snc\RedisBundle\Logger\RedisLogger instance
     */
    protected function getSncRedis_LoggerService()
    {
        return $this->services['snc_redis.logger'] = new \Snc\RedisBundle\Logger\RedisLogger($this->get('monolog.logger.snc_redis', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'snc_redis.victoire' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Predis\Client A Predis\Client instance
     */
    protected function getSncRedis_VictoireService()
    {
        return $this->services['snc_redis.victoire'] = new \Predis\Client(new \Predis\Connection\Parameters(array('read_write_timeout' => NULL, 'iterable_multibulk' => false, 'profile' => 'default', 'prefix' => NULL, 'service' => NULL, 'async_connect' => false, 'timeout' => 5, 'persistent' => false, 'exceptions' => true, 'logging' => false, 'alias' => 'victoire', 'scheme' => 'tcp', 'host' => 'redis', 'port' => 6379, 'password' => NULL, 'weight' => NULL)), new \Predis\Configuration\Options(array('read_write_timeout' => NULL, 'iterable_multibulk' => false, 'profile' => new \Predis\Profile\RedisVersion320(), 'prefix' => NULL, 'service' => NULL, 'async_connect' => false, 'timeout' => 5, 'persistent' => false, 'exceptions' => true)));
    }

    /*
     * Gets the 'stof_doctrine_extensions.uploadable.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager A Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager instance
     */
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader($this->get('annotation_reader'));
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');

        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }

    /*
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /*
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /*
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        return $this->services['swiftmailer.mailer.default.transport'] = new \Swift_Transport_SpoolTransport(${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'}, $this->get('swiftmailer.mailer.default.spool'));
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), ${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'});

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        (new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}))->configure($instance);

        return $instance;
    }

    /*
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /*
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /*
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /*
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /*
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /*
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /*
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /*
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /*
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /*
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /*
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /*
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /*
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /*
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /*
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /*
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /*
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /*
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /*
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /*
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /*
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\I18nBundle\Translation\Translator A Victoire\Bundle\I18nBundle\Translation\Translator instance
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Victoire\Bundle\I18nBundle\Translation\Translator($this, ${($_ = isset($this->services['translator.selector']) ? $this->services['translator.selector'] : $this->getTranslator_SelectorService()) && false ?: '_'}, array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => false, 'resource_files' => array('sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.pl.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.nl.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.fr.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 6 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/translations/messages.fr.xliff'), 7 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/translations/victoire.fr.xliff'), 8 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessEntityBundle/Resources/translations/victoire.fr.xliff'), 9 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/translations/messages.fr.xliff'), 10 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/translations/victoire.fr.xliff'), 11 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CoreBundle/Resources/translations/victoire.fr.xliff'), 12 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CriteriaBundle/Resources/translations/victoire.fr.xliff'), 13 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/FormBundle/Resources/translations/victoire.fr.xliff'), 14 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/I18nBundle/Resources/translations/victoire.fr.xliff'), 15 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/translations/messages.fr.xliff'), 16 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/translations/victoire.fr.xliff'), 17 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/PageBundle/Resources/translations/messages.fr.xliff'), 18 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/PageBundle/Resources/translations/victoire.fr.xliff'), 19 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SeoBundle/Resources/translations/victoire.fr.xliff'), 20 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SitemapBundle/Resources/translations/victoire.fr.xliff'), 21 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TemplateBundle/Resources/translations/victoire.fr.xliff'), 22 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TemplateBundle/Resources/translations/messages.fr.xlf'), 23 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UserBundle/Resources/translations/victoire.fr.xliff'), 24 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/WidgetBundle/Resources/translations/victoire.fr.xliff')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.en.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 6 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/translations/messages.en.xliff'), 7 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/translations/victoire.en.xliff'), 8 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessEntityBundle/Resources/translations/victoire.en.xliff'), 9 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/translations/messages.en.xliff'), 10 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/translations/victoire.en.xliff'), 11 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CoreBundle/Resources/translations/victoire.en.xliff'), 12 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CriteriaBundle/Resources/translations/victoire.en.xliff'), 13 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/FormBundle/Resources/translations/victoire.en.xliff'), 14 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/I18nBundle/Resources/translations/victoire.en.xliff'), 15 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/translations/messages.en.xliff'), 16 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/translations/victoire.en.xliff'), 17 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/PageBundle/Resources/translations/victoire.en.xliff'), 18 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SeoBundle/Resources/translations/victoire.en.xliff'), 19 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SitemapBundle/Resources/translations/victoire.en.xliff'), 20 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TemplateBundle/Resources/translations/victoire.en.xliff'), 21 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UserBundle/Resources/translations/victoire.en.xliff'), 22 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/WidgetBundle/Resources/translations/victoire.en.xliff')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.pt.xliff'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.de.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.it.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/translations/alertify.es.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 6 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/translations/victoire.es.xliff'), 7 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/translations/messages.es.xliff'), 8 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessEntityBundle/Resources/translations/victoire.es.xliff'), 9 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/translations/victoire.es.xliff'), 10 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/translations/messages.es.xliff'), 11 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CoreBundle/Resources/translations/victoire.es.xliff'), 12 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CriteriaBundle/Resources/translations/victoire.es.xliff'), 13 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/FormBundle/Resources/translations/victoire.es.xliff'), 14 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/I18nBundle/Resources/translations/victoire.es.xliff'), 15 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/translations/victoire.es.xliff'), 16 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/translations/messages.es.xliff'), 17 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/PageBundle/Resources/translations/victoire.es.xliff'), 18 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SeoBundle/Resources/translations/victoire.es.xliff'), 19 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SitemapBundle/Resources/translations/victoire.es.xliff'), 20 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TemplateBundle/Resources/translations/victoire.es.xliff'), 21 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UserBundle/Resources/translations/victoire.es.xliff'), 22 => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/WidgetBundle/Resources/translations/victoire.es.xliff')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')), 'ky' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml')), 'eo' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml')), 'nb' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml')))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /*
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator.default'), $this->get('request_stack'));
    }

    /*
     * Gets the 'troopers_alertifybundle.event_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\AlertifyBundle\EventListener\AlertifyListener A Troopers\AlertifyBundle\EventListener\AlertifyListener instance
     */
    protected function getTroopersAlertifybundle_EventListenerService()
    {
        return $this->services['troopers_alertifybundle.event_listener'] = new \Troopers\AlertifyBundle\EventListener\AlertifyListener($this->get('session'), $this->get('troopers_alertifybundle.session_handler'));
    }

    /*
     * Gets the 'troopers_alertifybundle.session_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\AlertifyBundle\Handler\AlertifySessionHandler A Troopers\AlertifyBundle\Handler\AlertifySessionHandler instance
     */
    protected function getTroopersAlertifybundle_SessionHandlerService()
    {
        return $this->services['troopers_alertifybundle.session_handler'] = new \Troopers\AlertifyBundle\Handler\AlertifySessionHandler($this->get('twig'), array('contexts' => array('victoire' => array('engine' => 'codrops-notification', 'translationDomain' => 'victoire', 'layout' => NULL, 'timeout' => NULL, 'options' => array())), 'default' => array('context' => 'front', 'engine' => 'toastr', 'layout' => NULL, 'translationDomain' => 'alertify')));
    }

    /*
     * Gets the 'troopers_alertifybundle.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\AlertifyBundle\Twig\Extension\AlertifyExtension A Troopers\AlertifyBundle\Twig\Extension\AlertifyExtension instance
     */
    protected function getTroopersAlertifybundle_Twig_ExtensionService()
    {
        return $this->services['troopers_alertifybundle.twig.extension'] = new \Troopers\AlertifyBundle\Twig\Extension\AlertifyExtension($this->get('troopers_alertifybundle.session_handler'));
    }

    /*
     * Gets the 'troopers_assetic_injector.collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\AsseticInjectorBundle\AssetsCollector\Collector A Troopers\AsseticInjectorBundle\AssetsCollector\Collector instance
     */
    protected function getTroopersAsseticInjector_CollectorService()
    {
        return $this->services['troopers_assetic_injector.collector'] = new \Troopers\AsseticInjectorBundle\AssetsCollector\Collector($this);
    }

    /*
     * Gets the 'troopers_assetic_injector.collector_engine.require_all' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\AsseticInjectorBundle\AssetsCollector\RequireAll A Troopers\AsseticInjectorBundle\AssetsCollector\RequireAll instance
     */
    protected function getTroopersAsseticInjector_CollectorEngine_RequireAllService()
    {
        return $this->services['troopers_assetic_injector.collector_engine.require_all'] = new \Troopers\AsseticInjectorBundle\AssetsCollector\RequireAll();
    }

    /*
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance
     */
    protected function getTwigService()
    {
        $a = $this->get('request_stack');
        $b = $this->get('logger');
        $c = $this->get('knp_menu.matcher');

        $d = new \Troopers\AsseticInjectorBundle\Twig\AsseticExtension(${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'}, $this->get('templating.name_parser'), false, array(), array(0 => 'FrameworkBundle', 1 => 'SecurityBundle', 2 => 'TwigBundle', 3 => 'MonologBundle', 4 => 'SwiftmailerBundle', 5 => 'DoctrineBundle', 6 => 'SensioFrameworkExtraBundle', 7 => 'AppBundle', 8 => 'A2lixTranslationFormBundle', 9 => 'BazingaJsTranslationBundle', 10 => 'AsseticBundle', 11 => 'TroopersAsseticInjectorBundle', 12 => 'TroopersAlertifyBundle', 13 => 'FOSUserBundle', 14 => 'FOSJsRoutingBundle', 15 => 'JMSSerializerBundle', 16 => 'LiipImagineBundle', 17 => 'KnpMenuBundle', 18 => 'DoctrineBehaviorsBundle', 19 => 'SncRedisBundle', 20 => 'StofDoctrineExtensionsBundle', 21 => 'VictoireAnalyticsBundle', 22 => 'VictoireBlogBundle', 23 => 'VictoireBusinessEntityBundle', 24 => 'VictoireBusinessPageBundle', 25 => 'VictoireCoreBundle', 26 => 'VictoireCriteriaBundle', 27 => 'VictoireFilterBundle', 28 => 'VictoireFormBundle', 29 => 'VictoireI18nBundle', 30 => 'VictoireMediaBundle', 31 => 'VictoirePageBundle', 32 => 'VictoireQueryBundle', 33 => 'VictoireSeoBundle', 34 => 'VictoireSitemapBundle', 35 => 'VictoireTemplateBundle', 36 => 'VictoireTwigBundle', 37 => 'VictoireUIBundle', 38 => 'VictoireUserBundle', 39 => 'ViewReferenceBundle', 40 => 'VictoireWidgetBundle', 41 => 'VictoireWidgetMapBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this));
        $d->setCollector($this->get('troopers_assetic_injector.collector'));

        $e = new \Knp\Menu\Util\MenuManipulator();

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('prod');
        $f->setDebug(false);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($a);
        }

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension($this->get('twig.extension.text'));
        $instance->addExtension($this->get('twig.extension.intl'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Victoire\Bundle\CoreBundle\Twig\Extension\RoutingExtension($this->get('victoire_page.page_helper'), $this->get('router'), $this->get('victoire_i18n.locale_resolver'), $a, $b, $this->get('victoire.repository.error_page'), 'en'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($a, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($d);
        $instance->addExtension($this->get('troopers_alertifybundle.twig.extension'));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
        $instance->addExtension(new \Liip\ImagineBundle\Templating\ImagineExtension($this->get('liip_imagine.cache.manager')));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'), $e, $c), $c, $e));
        $instance->addExtension($this->get('victoire_core.twig.cms_extension'));
        $instance->addExtension($this->get('victoire_form.twig.extension.bootstrap_form'));
        $instance->addExtension($this->get('victoire_form.twig.extension.bootstrap_icon'));
        $instance->addExtension($this->get('victoire_form.twig.extension.bootstrap_flash'));
        $instance->addExtension($this->get('victoire_media.menu.twig.extension'));
        $instance->addExtension($this->get('victoire_media.twig_extension.svg'));
        $instance->addExtension($this->get('victoire_page.twig.page_extension'));
        $instance->addExtension($this->get('victoire_widget.twig.link_extension'));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Symfony\Bundle\TwigBundle\ContainerAwareRuntimeLoader($this, array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => 'twig.runtime.httpkernel', 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer' => 'twig.form.renderer', 'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => 'jms_serializer.twig_extension.serializer_runtime_helper'), $b));
        $instance->addGlobal('upload_dir', '/uploads/media/');
        $instance->addGlobal('mediabundleisactive', true);
        $instance->addGlobal('mediamanager', $this->get('victoire_media.media_manager'));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\TwigBundle\Controller\ExceptionController A Victoire\Bundle\TwigBundle\Controller\ExceptionController instance
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Victoire\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), false, $this->get('doctrine.orm.default_entity_manager'), $this->get('http_kernel'), $this->get('request_stack'), $this->get('router'), array(0 => 'fr', 1 => 'en'), 'fr');
    }

    /*
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /*
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'twig.extension.intl' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extensions_Extension_Intl A Twig_Extensions_Extension_Intl instance
     */
    protected function getTwig_Extension_IntlService()
    {
        return $this->services['twig.extension.intl'] = new \Twig_Extensions_Extension_Intl();
    }

    /*
     * Gets the 'twig.extension.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extensions_Extension_Text A Twig_Extensions_Extension_Text instance
     */
    protected function getTwig_Extension_TextService()
    {
        return $this->services['twig.extension.text'] = new \Twig_Extensions_Extension_Text();
    }

    /*
     * Gets the 'twig.form.renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRenderer A Symfony\Bridge\Twig\Form\TwigRenderer instance
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'LiipImagineBundle:Form:form_div_layout.html.twig', 2 => 'VictoireMediaBundle:Form:formWidgets.html.twig', 3 => 'A2lixTranslationFormBundle::default.html.twig'), $this->get('twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, $this->get('templating.name_parser'), $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/a2lix/translation-form-bundle/A2lix/TranslationFormBundle/Resources/views'), 'A2lixTranslationForm');
        $instance->addPath(($this->targetDirs[3].'/vendor/willdurand/js-translation-bundle/Resources/views'), 'BazingaJsTranslation');
        $instance->addPath(($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle/Resources/views'), 'TroopersAlertify');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UserBundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/liip/imagine-bundle/Resources/views'), 'LiipImagine');
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/Resources/views'), 'KnpMenu');
        $instance->addPath(($this->targetDirs[3].'/vendor/snc/redis-bundle/Resources/views'), 'SncRedis');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle/Resources/views'), 'VictoireBlog');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessEntityBundle/Resources/views'), 'VictoireBusinessEntity');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle/Resources/views'), 'VictoireBusinessPage');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CoreBundle/Resources/views'), 'VictoireCore');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/FormBundle/Resources/views'), 'VictoireForm');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle/Resources/views'), 'VictoireMedia');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/PageBundle/Resources/views'), 'VictoirePage');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SeoBundle/Resources/views'), 'VictoireSeo');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SitemapBundle/Resources/views'), 'VictoireSitemap');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TemplateBundle/Resources/views'), 'VictoireTemplate');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TwigBundle/Resources/views'), 'VictoireTwig');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UIBundle/Resources/views'), 'VictoireUI');
        $instance->addPath(($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UserBundle/Resources/views'), 'VictoireUser');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));

        return $instance;
    }

    /*
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /*
     * Gets the 'twig.runtime.httpkernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime A Symfony\Bridge\Twig\Extension\HttpKernelRuntime instance
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->services['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime($this->get('fragment.handler'));
    }

    /*
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /*
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('0b1f529bfd1e2214cc16881ae978db041c8bee6f');
    }

    /*
     * Gets the 'validate_request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener A Symfony\Component\HttpKernel\EventListener\ValidateRequestListener instance
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /*
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /*
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique')));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setMetadataCache(new \Symfony\Component\Validator\Mapping\Cache\Psr6Cache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'})));
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer(${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'})));
        $instance->addXmlMapping(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /*
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /*
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /*
     * Gets the 'victoire.form.blog.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Form\CategoryType A Victoire\Bundle\BlogBundle\Form\CategoryType instance
     */
    protected function getVictoire_Form_Blog_CategoryService()
    {
        return $this->services['victoire.form.blog.category'] = new \Victoire\Bundle\BlogBundle\Form\CategoryType();
    }

    /*
     * Gets the 'victoire.repository.error_page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\EntityRepository A Doctrine\ORM\EntityRepository instance
     */
    protected function getVictoire_Repository_ErrorPageService()
    {
        return $this->services['victoire.repository.error_page'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('Victoire\\Bundle\\TwigBundle\\Entity\\ErrorPage');
    }

    /*
     * Gets the 'victoire.widget_filter.blog.set.default.values.form.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Listener\ArticleFilterDefaultValuesListener A Victoire\Bundle\BlogBundle\Listener\ArticleFilterDefaultValuesListener instance
     */
    protected function getVictoire_WidgetFilter_Blog_Set_Default_Values_Form_ListenerService()
    {
        return $this->services['victoire.widget_filter.blog.set.default.values.form.listener'] = new \Victoire\Bundle\BlogBundle\Listener\ArticleFilterDefaultValuesListener($this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'victoire.widget_filter.form.listener.presetdata' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Listener\BlogFilterListener A Victoire\Bundle\BlogBundle\Listener\BlogFilterListener instance
     */
    protected function getVictoire_WidgetFilter_Form_Listener_PresetdataService()
    {
        return $this->services['victoire.widget_filter.form.listener.presetdata'] = new \Victoire\Bundle\BlogBundle\Listener\BlogFilterListener($this->get('doctrine.orm.default_entity_manager'), $this->get('event_dispatcher'));
    }

    /*
     * Gets the 'victoire.widget_filter.form.listener.presubmit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Listener\BlogFilterListener A Victoire\Bundle\BlogBundle\Listener\BlogFilterListener instance
     */
    protected function getVictoire_WidgetFilter_Form_Listener_PresubmitService()
    {
        return $this->services['victoire.widget_filter.form.listener.presubmit'] = new \Victoire\Bundle\BlogBundle\Listener\BlogFilterListener($this->get('doctrine.orm.default_entity_manager'), $this->get('event_dispatcher'));
    }

    /*
     * Gets the 'victoire_analytics.browser_event.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\AnalyticsBundle\EventSubscriber\BrowseEventSubscriber A Victoire\Bundle\AnalyticsBundle\EventSubscriber\BrowseEventSubscriber instance
     */
    protected function getVictoireAnalytics_BrowserEvent_SubscriberService()
    {
        return $this->services['victoire_analytics.browser_event.subscriber'] = new \Victoire\Bundle\AnalyticsBundle\EventSubscriber\BrowseEventSubscriber('Victoire\\Bundle\\UserBundle\\Entity\\User');
    }

    /*
     * Gets the 'victoire_analytics.view_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\AnalyticsBundle\Helper\AnalyticsViewHelper A Victoire\Bundle\AnalyticsBundle\Helper\AnalyticsViewHelper instance
     */
    protected function getVictoireAnalytics_ViewHelperService()
    {
        return $this->services['victoire_analytics.view_helper'] = new \Victoire\Bundle\AnalyticsBundle\Helper\AnalyticsViewHelper($this->get('victoire_view_reference.repository'), $this->get('doctrine.orm.default_entity_manager'), $this->get('victoire_page.page_helper'));
    }

    /*
     * Gets the 'victoire_blog.article.container.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Form\ArticleTemplateType A Victoire\Bundle\BlogBundle\Form\ArticleTemplateType instance
     */
    protected function getVictoireBlog_Article_Container_Form_TypeService()
    {
        return $this->services['victoire_blog.article.container.form.type'] = new \Victoire\Bundle\BlogBundle\Form\ArticleTemplateType($this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'victoire_blog.article.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Form\ArticleType A Victoire\Bundle\BlogBundle\Form\ArticleType instance
     */
    protected function getVictoireBlog_Article_Form_TypeService()
    {
        return $this->services['victoire_blog.article.form.type'] = new \Victoire\Bundle\BlogBundle\Form\ArticleType($this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'victoire_blog.article.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Listener\ArticleSubscriber A Victoire\Bundle\BlogBundle\Listener\ArticleSubscriber instance
     */
    protected function getVictoireBlog_Article_SubscriberService()
    {
        return $this->services['victoire_blog.article.subscriber'] = new \Victoire\Bundle\BlogBundle\Listener\ArticleSubscriber($this->get('victoire_page.user_callable'), 'Victoire\\Bundle\\UserBundle\\Entity\\User');
    }

    /*
     * Gets the 'victoire_blog.article_menu.contextual' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Listener\BlogMenuListener A Victoire\Bundle\BlogBundle\Listener\BlogMenuListener instance
     */
    protected function getVictoireBlog_ArticleMenu_ContextualService()
    {
        return $this->services['victoire_blog.article_menu.contextual'] = new \Victoire\Bundle\BlogBundle\Listener\BlogMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_blog.article_settings.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Form\ArticleSettingsType A Victoire\Bundle\BlogBundle\Form\ArticleSettingsType instance
     */
    protected function getVictoireBlog_ArticleSettings_Form_TypeService()
    {
        return $this->services['victoire_blog.article_settings.form.type'] = new \Victoire\Bundle\BlogBundle\Form\ArticleSettingsType($this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'victoire_blog.article_settings_menu.contextual' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Listener\ArticleMenuListener A Victoire\Bundle\BlogBundle\Listener\ArticleMenuListener instance
     */
    protected function getVictoireBlog_ArticleSettingsMenu_ContextualService()
    {
        return $this->services['victoire_blog.article_settings_menu.contextual'] = new \Victoire\Bundle\BlogBundle\Listener\ArticleMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_blog.article_template_menu.menu_listener.contextual' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessPageBundle\Listener\BusinessPageMenuListener A Victoire\Bundle\BusinessPageBundle\Listener\BusinessPageMenuListener instance
     */
    protected function getVictoireBlog_ArticleTemplateMenu_MenuListener_ContextualService()
    {
        return $this->services['victoire_blog.article_template_menu.menu_listener.contextual'] = new \Victoire\Bundle\BusinessPageBundle\Listener\BusinessPageMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_blog.articletemplate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Entity\ArticleTemplate A Victoire\Bundle\BlogBundle\Entity\ArticleTemplate instance
     */
    protected function getVictoireBlog_ArticletemplateService()
    {
        return $this->services['victoire_blog.articletemplate'] = new \Victoire\Bundle\BlogBundle\Entity\ArticleTemplate();
    }

    /*
     * Gets the 'victoire_blog.blog.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Form\BlogType A Victoire\Bundle\BlogBundle\Form\BlogType instance
     */
    protected function getVictoireBlog_Blog_Form_TypeService()
    {
        return $this->services['victoire_blog.blog.form.type'] = new \Victoire\Bundle\BlogBundle\Form\BlogType(array(0 => 'fr', 1 => 'en'), $this->get('request_stack'), $this->get('security.authorization_checker'));
    }

    /*
     * Gets the 'victoire_blog.blog_category.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Form\BlogCategoryType A Victoire\Bundle\BlogBundle\Form\BlogCategoryType instance
     */
    protected function getVictoireBlog_BlogCategory_Form_TypeService()
    {
        return $this->services['victoire_blog.blog_category.form.type'] = new \Victoire\Bundle\BlogBundle\Form\BlogCategoryType();
    }

    /*
     * Gets the 'victoire_blog.blog_choose.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Form\ChooseBlogType A Victoire\Bundle\BlogBundle\Form\ChooseBlogType instance
     */
    protected function getVictoireBlog_BlogChoose_Form_TypeService()
    {
        return $this->services['victoire_blog.blog_choose.form.type'] = new \Victoire\Bundle\BlogBundle\Form\ChooseBlogType();
    }

    /*
     * Gets the 'victoire_blog.blog_menu.contextual' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Listener\BlogMenuListener A Victoire\Bundle\BlogBundle\Listener\BlogMenuListener instance
     */
    protected function getVictoireBlog_BlogMenu_ContextualService()
    {
        return $this->services['victoire_blog.blog_menu.contextual'] = new \Victoire\Bundle\BlogBundle\Listener\BlogMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_blog.blog_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Listener\BlogMenuListener A Victoire\Bundle\BlogBundle\Listener\BlogMenuListener instance
     */
    protected function getVictoireBlog_BlogMenuListenerService()
    {
        return $this->services['victoire_blog.blog_menu_listener'] = new \Victoire\Bundle\BlogBundle\Listener\BlogMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_blog.blog_page_menu.contextual' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\PageBundle\Listener\PageMenuListener A Victoire\Bundle\PageBundle\Listener\PageMenuListener instance
     */
    protected function getVictoireBlog_BlogPageMenu_ContextualService()
    {
        return $this->services['victoire_blog.blog_page_menu.contextual'] = new \Victoire\Bundle\PageBundle\Listener\PageMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_blog.blog_settings.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Form\BlogSettingsType A Victoire\Bundle\BlogBundle\Form\BlogSettingsType instance
     */
    protected function getVictoireBlog_BlogSettings_Form_TypeService()
    {
        return $this->services['victoire_blog.blog_settings.form.type'] = new \Victoire\Bundle\BlogBundle\Form\BlogSettingsType(array(0 => 'fr', 1 => 'en'), $this->get('request_stack'), $this->get('security.authorization_checker'));
    }

    /*
     * Gets the 'victoire_blog.category_filters.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Filter\CategoryFilter A Victoire\Bundle\BlogBundle\Filter\CategoryFilter instance
     */
    protected function getVictoireBlog_CategoryFilters_Form_TypeService()
    {
        return $this->services['victoire_blog.category_filters.form.type'] = new \Victoire\Bundle\BlogBundle\Filter\CategoryFilter($this->get('doctrine.orm.default_entity_manager'), $this->get('request_stack'), $this->get('translator.default'));
    }

    /*
     * Gets the 'victoire_blog.date_filters.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Filter\DateFilter A Victoire\Bundle\BlogBundle\Filter\DateFilter instance
     */
    protected function getVictoireBlog_DateFilters_Form_TypeService()
    {
        return $this->services['victoire_blog.date_filters.form.type'] = new \Victoire\Bundle\BlogBundle\Filter\DateFilter($this->get('doctrine.orm.default_entity_manager'), $this->get('request_stack'));
    }

    /*
     * Gets the 'victoire_blog.hierarchy_tree_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Form\HierarchyTreeType A Victoire\Bundle\BlogBundle\Form\HierarchyTreeType instance
     */
    protected function getVictoireBlog_HierarchyTreeTypeService()
    {
        return $this->services['victoire_blog.hierarchy_tree_type'] = new \Victoire\Bundle\BlogBundle\Form\HierarchyTreeType($this->get('property_accessor'));
    }

    /*
     * Gets the 'victoire_blog.manager.article' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Manager\ArticleManager A Victoire\Bundle\BlogBundle\Manager\ArticleManager instance
     */
    protected function getVictoireBlog_Manager_ArticleService()
    {
        return $this->services['victoire_blog.manager.article'] = new \Victoire\Bundle\BlogBundle\Manager\ArticleManager($this->get('doctrine.orm.default_entity_manager'), $this->get('victoire_business_page.business_page_builder'), $this->get('victoire_business_page.transformer.virtual_to_business_page_transformer'), $this->get('victoire_page.page_helper'), $this->get('victoire_view_reference.repository'));
    }

    /*
     * Gets the 'victoire_blog.manager.blog_reference_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Builder\BlogReferenceBuilder A Victoire\Bundle\BlogBundle\Builder\BlogReferenceBuilder instance
     */
    protected function getVictoireBlog_Manager_BlogReferenceBuilderService()
    {
        return $this->services['victoire_blog.manager.blog_reference_builder'] = new \Victoire\Bundle\BlogBundle\Builder\BlogReferenceBuilder();
    }

    /*
     * Gets the 'victoire_blog.tag_filters.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Filter\TagFilter A Victoire\Bundle\BlogBundle\Filter\TagFilter instance
     */
    protected function getVictoireBlog_TagFilters_Form_TypeService()
    {
        return $this->services['victoire_blog.tag_filters.form.type'] = new \Victoire\Bundle\BlogBundle\Filter\TagFilter($this->get('doctrine.orm.default_entity_manager'), $this->get('request_stack'));
    }

    /*
     * Gets the 'victoire_blog.type.tags' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BlogBundle\Form\TagsType A Victoire\Bundle\BlogBundle\Form\TagsType instance
     */
    protected function getVictoireBlog_Type_TagsService()
    {
        return $this->services['victoire_blog.type.tags'] = new \Victoire\Bundle\BlogBundle\Form\TagsType($this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'victoire_business_entity.annotation_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessEntityBundle\Annotation\AnnotationDriver A Victoire\Bundle\BusinessEntityBundle\Annotation\AnnotationDriver instance
     */
    protected function getVictoireBusinessEntity_AnnotationDriverService()
    {
        return $this->services['victoire_business_entity.annotation_driver'] = new \Victoire\Bundle\BusinessEntityBundle\Annotation\AnnotationDriver($this->get('annotation_reader'), $this->get('event_dispatcher'), $this->get('victoire_widget.widget_helper'), array(0 => ($this->targetDirs[3].'/app/../src'), 1 => ($this->targetDirs[3].'/app/../vendor/victoire'), 2 => ($this->targetDirs[3].'/app/../vendor/friendsofvictoire')), $this->get('logger'));
    }

    /*
     * Gets the 'victoire_business_entity.business_entity_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessEntityBundle\EventSubscriber\BusinessEntitySubscriber A Victoire\Bundle\BusinessEntityBundle\EventSubscriber\BusinessEntitySubscriber instance
     */
    protected function getVictoireBusinessEntity_BusinessEntitySubscriberService()
    {
        return $this->services['victoire_business_entity.business_entity_subscriber'] = new \Victoire\Bundle\BusinessEntityBundle\EventSubscriber\BusinessEntitySubscriber($this->get('victoire_business_page.business_page_builder'), $this->get('victoire_core.helper.business_entity_helper'), $this->get('victoire_business_page.business_page_helper'), $this->get('event_dispatcher'));
    }

    /*
     * Gets the 'victoire_business_entity.business_entity_type_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessEntityBundle\Form\Extension\BusinessEntityTypeExtension A Victoire\Bundle\BusinessEntityBundle\Form\Extension\BusinessEntityTypeExtension instance
     */
    protected function getVictoireBusinessEntity_BusinessEntityTypeExtensionService()
    {
        return $this->services['victoire_business_entity.business_entity_type_extension'] = new \Victoire\Bundle\BusinessEntityBundle\Form\Extension\BusinessEntityTypeExtension($this->get('victoire_core.helper.business_entity_helper'));
    }

    /*
     * Gets the 'victoire_business_entity.cache_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessEntityBundle\Reader\BusinessEntityCacheReader A Victoire\Bundle\BusinessEntityBundle\Reader\BusinessEntityCacheReader instance
     */
    protected function getVictoireBusinessEntity_CacheReaderService()
    {
        return $this->services['victoire_business_entity.cache_reader'] = new \Victoire\Bundle\BusinessEntityBundle\Reader\BusinessEntityCacheReader($this->get('victoire_core.cache'), $this->get('victoire_widget.widget_helper'), $this->get('victoire_business_entity.annotation_driver'));
    }

    /*
     * Gets the 'victoire_business_entity.converter.parameter_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessEntityBundle\Converter\ParameterConverter A Victoire\Bundle\BusinessEntityBundle\Converter\ParameterConverter instance
     */
    protected function getVictoireBusinessEntity_Converter_ParameterConverterService()
    {
        return $this->services['victoire_business_entity.converter.parameter_converter'] = new \Victoire\Bundle\BusinessEntityBundle\Converter\ParameterConverter();
    }

    /*
     * Gets the 'victoire_business_entity.provider.entity_proxy_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessEntityBundle\Provider\EntityProxyProvider A Victoire\Bundle\BusinessEntityBundle\Provider\EntityProxyProvider instance
     */
    protected function getVictoireBusinessEntity_Provider_EntityProxyProviderService()
    {
        return $this->services['victoire_business_entity.provider.entity_proxy_provider'] = new \Victoire\Bundle\BusinessEntityBundle\Provider\EntityProxyProvider();
    }

    /*
     * Gets the 'victoire_business_entity.security.voter.business_entity_owner_voter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessEntityBundle\Security\Voter\BusinessEntityOwnerVoter A Victoire\Bundle\BusinessEntityBundle\Security\Voter\BusinessEntityOwnerVoter instance
     */
    protected function getVictoireBusinessEntity_Security_Voter_BusinessEntityOwnerVoterService()
    {
        return $this->services['victoire_business_entity.security.voter.business_entity_owner_voter'] = new \Victoire\Bundle\BusinessEntityBundle\Security\Voter\BusinessEntityOwnerVoter('Victoire\\Bundle\\UserBundle\\Entity\\User', $this->get('victoire_core.helper.business_entity_helper'));
    }

    /*
     * Gets the 'victoire_business_entity.warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessEntityBundle\CacheWarmer\BusinessEntityWarmer A Victoire\Bundle\BusinessEntityBundle\CacheWarmer\BusinessEntityWarmer instance
     */
    protected function getVictoireBusinessEntity_WarmerService()
    {
        return $this->services['victoire_business_entity.warmer'] = new \Victoire\Bundle\BusinessEntityBundle\CacheWarmer\BusinessEntityWarmer($this->get('victoire_business_entity.annotation_driver'));
    }

    /*
     * Gets the 'victoire_business_page.business_page_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessPageBundle\Builder\BusinessPageBuilder A Victoire\Bundle\BusinessPageBundle\Builder\BusinessPageBuilder instance
     */
    protected function getVictoireBusinessPage_BusinessPageBuilderService()
    {
        return $this->services['victoire_business_page.business_page_builder'] = new \Victoire\Bundle\BusinessPageBundle\Builder\BusinessPageBuilder($this->get('victoire_core.helper.business_entity_helper'), $this->get('victoire_core.url_builder'), $this->get('victoire_business_entity.converter.parameter_converter'), $this->get('victoire_business_entity.provider.entity_proxy_provider'), $this->get('victoire_view_reference.builder'));
    }

    /*
     * Gets the 'victoire_business_page.business_page_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessPageBundle\Helper\BusinessPageHelper A Victoire\Bundle\BusinessPageBundle\Helper\BusinessPageHelper instance
     */
    protected function getVictoireBusinessPage_BusinessPageHelperService()
    {
        return $this->services['victoire_business_page.business_page_helper'] = new \Victoire\Bundle\BusinessPageBundle\Helper\BusinessPageHelper($this->get('victoire_query.query_helper'), $this->get('victoire_view_reference.repository'), $this->get('victoire_core.helper.business_entity_helper'), $this->get('victoire_business_entity.converter.parameter_converter'), $this->get('victoire_core.url_builder'));
    }

    /*
     * Gets the 'victoire_business_page.business_template.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessPageBundle\Form\BusinessTemplateType A Victoire\Bundle\BusinessPageBundle\Form\BusinessTemplateType instance
     */
    protected function getVictoireBusinessPage_BusinessTemplate_Form_TypeService()
    {
        return $this->services['victoire_business_page.business_template.form.type'] = new \Victoire\Bundle\BusinessPageBundle\Form\BusinessTemplateType(array(0 => 'fr', 1 => 'en'), $this->get('request_stack'), $this->get('security.authorization_checker'));
    }

    /*
     * Gets the 'victoire_business_page.business_template_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessPageBundle\Listener\BusinessPageMenuListener A Victoire\Bundle\BusinessPageBundle\Listener\BusinessPageMenuListener instance
     */
    protected function getVictoireBusinessPage_BusinessTemplateMenuListenerService()
    {
        return $this->services['victoire_business_page.business_template_menu_listener'] = new \Victoire\Bundle\BusinessPageBundle\Listener\BusinessPageMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_business_page.businesstemplate_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessPageBundle\Chain\BusinessTemplateChain A Victoire\Bundle\BusinessPageBundle\Chain\BusinessTemplateChain instance
     */
    protected function getVictoireBusinessPage_BusinesstemplateChainService()
    {
        $this->services['victoire_business_page.businesstemplate_chain'] = $instance = new \Victoire\Bundle\BusinessPageBundle\Chain\BusinessTemplateChain();

        $instance->addBusinessTemplate($this->get('victoire_blog.articletemplate'), 'article');
        $instance->addBusinessTemplate($this->get('victoire_business_page.businesstemplate_chain.businesstemplate'), 'default');

        return $instance;
    }

    /*
     * Gets the 'victoire_business_page.businesstemplate_chain.businesstemplate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessPageBundle\Entity\BusinessTemplate A Victoire\Bundle\BusinessPageBundle\Entity\BusinessTemplate instance
     */
    protected function getVictoireBusinessPage_BusinesstemplateChain_BusinesstemplateService()
    {
        return $this->services['victoire_business_page.businesstemplate_chain.businesstemplate'] = new \Victoire\Bundle\BusinessPageBundle\Entity\BusinessTemplate();
    }

    /*
     * Gets the 'victoire_business_page.manager.business_page_reference_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessPageBundle\Builder\BusinessPageReferenceBuilder A Victoire\Bundle\BusinessPageBundle\Builder\BusinessPageReferenceBuilder instance
     */
    protected function getVictoireBusinessPage_Manager_BusinessPageReferenceBuilderService()
    {
        return $this->services['victoire_business_page.manager.business_page_reference_builder'] = new \Victoire\Bundle\BusinessPageBundle\Builder\BusinessPageReferenceBuilder();
    }

    /*
     * Gets the 'victoire_business_page.manager.virtual_business_page_reference_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessPageBundle\Builder\VirtualBusinessPageReferenceBuilder A Victoire\Bundle\BusinessPageBundle\Builder\VirtualBusinessPageReferenceBuilder instance
     */
    protected function getVictoireBusinessPage_Manager_VirtualBusinessPageReferenceBuilderService()
    {
        return $this->services['victoire_business_page.manager.virtual_business_page_reference_builder'] = new \Victoire\Bundle\BusinessPageBundle\Builder\VirtualBusinessPageReferenceBuilder();
    }

    /*
     * Gets the 'victoire_business_page.transformer.virtual_to_business_page_transformer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessPageBundle\Transformer\VirtualToBusinessPageTransformer A Victoire\Bundle\BusinessPageBundle\Transformer\VirtualToBusinessPageTransformer instance
     */
    protected function getVictoireBusinessPage_Transformer_VirtualToBusinessPageTransformerService()
    {
        return $this->services['victoire_business_page.transformer.virtual_to_business_page_transformer'] = new \Victoire\Bundle\BusinessPageBundle\Transformer\VirtualToBusinessPageTransformer();
    }

    /*
     * Gets the 'victoire_core.admin_menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuItem A Knp\Menu\MenuItem instance
     */
    protected function getVictoireCore_AdminMenuService()
    {
        return $this->services['victoire_core.admin_menu'] = $this->get('victoire_core.admin_menu_builder')->getMenu();
    }

    /*
     * Gets the 'victoire_core.admin_menu.navbar_bottom_left' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuItem A Knp\Menu\MenuItem instance
     */
    protected function getVictoireCore_AdminMenu_NavbarBottomLeftService()
    {
        return $this->services['victoire_core.admin_menu.navbar_bottom_left'] = $this->get('victoire_core.admin_menu_builder')->getBottomLeftNavbar();
    }

    /*
     * Gets the 'victoire_core.admin_menu.navbar_bottom_right' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuItem A Knp\Menu\MenuItem instance
     */
    protected function getVictoireCore_AdminMenu_NavbarBottomRightService()
    {
        return $this->services['victoire_core.admin_menu.navbar_bottom_right'] = $this->get('victoire_core.admin_menu_builder')->getBottomRightNavbar();
    }

    /*
     * Gets the 'victoire_core.admin_menu.navbar_float_action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuItem A Knp\Menu\MenuItem instance
     */
    protected function getVictoireCore_AdminMenu_NavbarFloatActionService()
    {
        return $this->services['victoire_core.admin_menu.navbar_float_action'] = $this->get('victoire_core.admin_menu_builder')->getFloatActionNavbar();
    }

    /*
     * Gets the 'victoire_core.admin_menu.navbar_left' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuItem A Knp\Menu\MenuItem instance
     */
    protected function getVictoireCore_AdminMenu_NavbarLeftService()
    {
        return $this->services['victoire_core.admin_menu.navbar_left'] = $this->get('victoire_core.admin_menu_builder')->getLeftNavbar();
    }

    /*
     * Gets the 'victoire_core.admin_menu.navbar_top' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuItem A Knp\Menu\MenuItem instance
     */
    protected function getVictoireCore_AdminMenu_NavbarTopService()
    {
        return $this->services['victoire_core.admin_menu.navbar_top'] = $this->get('victoire_core.admin_menu_builder')->getTopNavbar();
    }

    /*
     * Gets the 'victoire_core.admin_menu_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Menu\MenuBuilder A Victoire\Bundle\CoreBundle\Menu\MenuBuilder instance
     */
    protected function getVictoireCore_AdminMenuBuilderService()
    {
        return $this->services['victoire_core.admin_menu_builder'] = new \Victoire\Bundle\CoreBundle\Menu\MenuBuilder($this->get('knp_menu.factory'), $this->get('security.authorization_checker'));
    }

    /*
     * Gets the 'victoire_core.backend_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Listener\BackendMenuListener A Victoire\Bundle\CoreBundle\Listener\BackendMenuListener instance
     */
    protected function getVictoireCore_BackendMenuListenerService()
    {
        return $this->services['victoire_core.backend_menu_listener'] = new \Victoire\Bundle\CoreBundle\Listener\BackendMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_core.business_template_menu.contextual' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessPageBundle\Listener\BusinessPageMenuListener A Victoire\Bundle\BusinessPageBundle\Listener\BusinessPageMenuListener instance
     */
    protected function getVictoireCore_BusinessTemplateMenu_ContextualService()
    {
        return $this->services['victoire_core.business_template_menu.contextual'] = new \Victoire\Bundle\BusinessPageBundle\Listener\BusinessPageMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_core.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Cache\VictoireCache A Victoire\Bundle\CoreBundle\Cache\VictoireCache instance
     */
    protected function getVictoireCore_CacheService()
    {
        return $this->services['victoire_core.cache'] = new \Victoire\Bundle\CoreBundle\Cache\VictoireCache(true, (__DIR__.'/victoire'));
    }

    /*
     * Gets the 'victoire_core.cache_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Cache\Builder\CacheBuilder A Victoire\Bundle\CoreBundle\Cache\Builder\CacheBuilder instance
     */
    protected function getVictoireCore_CacheBuilderService()
    {
        return $this->services['victoire_core.cache_builder'] = new \Victoire\Bundle\CoreBundle\Cache\Builder\CacheBuilder($this->get('victoire_core.cache'));
    }

    /*
     * Gets the 'victoire_core.cache_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\EventSubscriber\CacheSubscriber A Victoire\Bundle\CoreBundle\EventSubscriber\CacheSubscriber instance
     */
    protected function getVictoireCore_CacheSubscriberService()
    {
        return $this->services['victoire_core.cache_subscriber'] = new \Victoire\Bundle\CoreBundle\EventSubscriber\CacheSubscriber($this->get('victoire_core.cache_builder'));
    }

    /*
     * Gets the 'victoire_core.cache_warmer.entity_proxy_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\CacheWarmer\EntityProxyWarmer A Victoire\Bundle\CoreBundle\CacheWarmer\EntityProxyWarmer instance
     */
    protected function getVictoireCore_CacheWarmer_EntityProxyWarmerService()
    {
        return $this->services['victoire_core.cache_warmer.entity_proxy_warmer'] = new \Victoire\Bundle\CoreBundle\CacheWarmer\EntityProxyWarmer($this->get('victoire_core.helper.business_entity_helper'), $this->get('file_locator'));
    }

    /*
     * Gets the 'victoire_core.current_view' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Helper\CurrentViewHelper A Victoire\Bundle\CoreBundle\Helper\CurrentViewHelper instance
     */
    protected function getVictoireCore_CurrentViewService()
    {
        return $this->services['victoire_core.current_view'] = new \Victoire\Bundle\CoreBundle\Helper\CurrentViewHelper();
    }

    /*
     * Gets the 'victoire_core.entity_proxy.cache_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\CacheWarmer\EntityProxyCacheDriver A Victoire\Bundle\CoreBundle\CacheWarmer\EntityProxyCacheDriver instance
     */
    protected function getVictoireCore_EntityProxy_CacheDriverService()
    {
        return $this->services['victoire_core.entity_proxy.cache_driver'] = new \Victoire\Bundle\CoreBundle\CacheWarmer\EntityProxyCacheDriver($this->get('annotation_reader'), __DIR__);
    }

    /*
     * Gets the 'victoire_core.entity_proxy.fields_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Form\Builder\EntityProxyFieldsBuilder A Victoire\Bundle\CoreBundle\Form\Builder\EntityProxyFieldsBuilder instance
     */
    protected function getVictoireCore_EntityProxy_FieldsBuilderService()
    {
        return $this->services['victoire_core.entity_proxy.fields_builder'] = new \Victoire\Bundle\CoreBundle\Form\Builder\EntityProxyFieldsBuilder($this->get('victoire_business_entity.cache_reader'), $this->get('translator.default'));
    }

    /*
     * Gets the 'victoire_core.entity_proxy.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Form\EntityProxyFormType A Victoire\Bundle\CoreBundle\Form\EntityProxyFormType instance
     */
    protected function getVictoireCore_EntityProxy_Form_TypeService()
    {
        return $this->services['victoire_core.entity_proxy.form.type'] = new \Victoire\Bundle\CoreBundle\Form\EntityProxyFormType($this->get('request_stack'));
    }

    /*
     * Gets the 'victoire_core.entity_proxy.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\EventSubscriber\EntityProxySubscriber A Victoire\Bundle\CoreBundle\EventSubscriber\EntityProxySubscriber instance
     */
    protected function getVictoireCore_EntityProxy_SubscriberService()
    {
        $this->services['victoire_core.entity_proxy.subscriber'] = $instance = new \Victoire\Bundle\CoreBundle\EventSubscriber\EntityProxySubscriber();

        $instance->setBusinessEntityCacheReader($this->get('victoire_business_entity.cache_reader'));

        return $instance;
    }

    /*
     * Gets the 'victoire_core.filter_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FilterBundle\Filter\Chain\FilterChain A Victoire\Bundle\FilterBundle\Filter\Chain\FilterChain instance
     */
    protected function getVictoireCore_FilterChainService()
    {
        $this->services['victoire_core.filter_chain'] = $instance = new \Victoire\Bundle\FilterBundle\Filter\Chain\FilterChain();

        $instance->addFilter($this->get('victoire_blog.category_filters.form.type'));
        $instance->addFilter($this->get('victoire_blog.tag_filters.form.type'));
        $instance->addFilter($this->get('victoire_blog.date_filters.form.type'));

        return $instance;
    }

    /*
     * Gets the 'victoire_core.helper.business_entity_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessEntityBundle\Helper\BusinessEntityHelper A Victoire\Bundle\BusinessEntityBundle\Helper\BusinessEntityHelper instance
     */
    protected function getVictoireCore_Helper_BusinessEntityHelperService()
    {
        return $this->services['victoire_core.helper.business_entity_helper'] = new \Victoire\Bundle\BusinessEntityBundle\Helper\BusinessEntityHelper($this->get('victoire_business_entity.cache_reader'), $this->get('victoire_core.cache_builder'));
    }

    /*
     * Gets the 'victoire_core.helper.queriable_business_entity_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\BusinessEntityBundle\Helper\BusinessEntityHelper A Victoire\Bundle\BusinessEntityBundle\Helper\BusinessEntityHelper instance
     */
    protected function getVictoireCore_Helper_QueriableBusinessEntityHelperService()
    {
        $this->services['victoire_core.helper.queriable_business_entity_helper'] = $instance = new \Victoire\Bundle\BusinessEntityBundle\Helper\BusinessEntityHelper($this->get('victoire_business_entity.cache_reader'), $this->get('victoire_core.cache_builder'));

        $instance->setEntityManager($this->get('doctrine.orm.default_entity_manager'));

        return $instance;
    }

    /*
     * Gets the 'victoire_core.listener.controller_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Listener\ControllerListener A Victoire\Bundle\CoreBundle\Listener\ControllerListener instance
     */
    protected function getVictoireCore_Listener_ControllerListenerService()
    {
        return $this->services['victoire_core.listener.controller_listener'] = new \Victoire\Bundle\CoreBundle\Listener\ControllerListener($this->get('event_dispatcher'));
    }

    /*
     * Gets the 'victoire_core.media_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\MediaBundle\EventListener\MediaMenuListener A Victoire\Bundle\MediaBundle\EventListener\MediaMenuListener instance
     */
    protected function getVictoireCore_MediaMenuListenerService()
    {
        return $this->services['victoire_core.media_menu_listener'] = new \Victoire\Bundle\MediaBundle\EventListener\MediaMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_core.menu_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Listener\MenuDispatcher A Victoire\Bundle\CoreBundle\Listener\MenuDispatcher instance
     */
    protected function getVictoireCore_MenuDispatcherService()
    {
        return $this->services['victoire_core.menu_dispatcher'] = new \Victoire\Bundle\CoreBundle\Listener\MenuDispatcher($this->get('event_dispatcher'), $this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /*
     * Gets the 'victoire_core.page_menu.contextual' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\PageBundle\Listener\PageMenuListener A Victoire\Bundle\PageBundle\Listener\PageMenuListener instance
     */
    protected function getVictoireCore_PageMenu_ContextualService()
    {
        return $this->services['victoire_core.page_menu.contextual'] = new \Victoire\Bundle\PageBundle\Listener\PageMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_core.page_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\PageBundle\Listener\PageMenuListener A Victoire\Bundle\PageBundle\Listener\PageMenuListener instance
     */
    protected function getVictoireCore_PageMenuListenerService()
    {
        return $this->services['victoire_core.page_menu_listener'] = new \Victoire\Bundle\PageBundle\Listener\PageMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_core.routing_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Route\RouteLoader A Victoire\Bundle\CoreBundle\Route\RouteLoader instance
     */
    protected function getVictoireCore_RoutingLoaderService()
    {
        return $this->services['victoire_core.routing_loader'] = new \Victoire\Bundle\CoreBundle\Route\RouteLoader(array());
    }

    /*
     * Gets the 'victoire_core.template_menu.contextual' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\TemplateBundle\Listener\TemplateMenuListener A Victoire\Bundle\TemplateBundle\Listener\TemplateMenuListener instance
     */
    protected function getVictoireCore_TemplateMenu_ContextualService()
    {
        return $this->services['victoire_core.template_menu.contextual'] = new \Victoire\Bundle\TemplateBundle\Listener\TemplateMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_core.template_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\TemplateBundle\Listener\TemplateMenuListener A Victoire\Bundle\TemplateBundle\Listener\TemplateMenuListener instance
     */
    protected function getVictoireCore_TemplateMenuListenerService()
    {
        return $this->services['victoire_core.template_menu_listener'] = new \Victoire\Bundle\TemplateBundle\Listener\TemplateMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_core.twig.cms_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Twig\Extension\CmsExtension A Victoire\Bundle\CoreBundle\Twig\Extension\CmsExtension instance
     */
    protected function getVictoireCore_Twig_CmsExtensionService()
    {
        return $this->services['victoire_core.twig.cms_extension'] = new \Victoire\Bundle\CoreBundle\Twig\Extension\CmsExtension($this->get('victoire_widget.widget_renderer'), $this->get('security.authorization_checker'), $this->get('victoire_core.widget_exception_handler'), $this->get('victoire_core.current_view'), $this->get('victoire_view_reference.repository'), $this->get('twig'), $this->get('victoire_widget.resolver.widget_resolver'));
    }

    /*
     * Gets the 'victoire_core.url_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Helper\UrlBuilder A Victoire\Bundle\CoreBundle\Helper\UrlBuilder instance
     */
    protected function getVictoireCore_UrlBuilderService()
    {
        return $this->services['victoire_core.url_builder'] = new \Victoire\Bundle\CoreBundle\Helper\UrlBuilder();
    }

    /*
     * Gets the 'victoire_core.victoire_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\DataCollector\VictoireCollector A Victoire\Bundle\CoreBundle\DataCollector\VictoireCollector instance
     */
    protected function getVictoireCore_VictoireCollectorService()
    {
        return $this->services['victoire_core.victoire_collector'] = new \Victoire\Bundle\CoreBundle\DataCollector\VictoireCollector();
    }

    /*
     * Gets the 'victoire_core.view_css_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Builder\ViewCssBuilder A Victoire\Bundle\CoreBundle\Builder\ViewCssBuilder instance
     */
    protected function getVictoireCore_ViewCssBuilderService()
    {
        return $this->services['victoire_core.view_css_builder'] = new \Victoire\Bundle\CoreBundle\Builder\ViewCssBuilder($this, array('xs' => array('min' => 0, 'max' => 767), 'sm' => array('min' => 768, 'max' => 991), 'md' => array('min' => 992, 'max' => 1199), 'lg' => array('min' => 1200)), ($this->targetDirs[3].'/app'));
    }

    /*
     * Gets the 'victoire_core.view_css_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Listener\ViewCssListener A Victoire\Bundle\CoreBundle\Listener\ViewCssListener instance
     */
    protected function getVictoireCore_ViewCssListenerService()
    {
        return $this->services['victoire_core.view_css_listener'] = new \Victoire\Bundle\CoreBundle\Listener\ViewCssListener($this->get('victoire_core.view_css_builder'), $this->get('doctrine.orm.default_entity_manager'), $this->get('victoire_widget_map.builder'));
    }

    /*
     * Gets the 'victoire_core.view_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Helper\ViewHelper A Victoire\Bundle\CoreBundle\Helper\ViewHelper instance
     */
    protected function getVictoireCore_ViewHelperService()
    {
        return $this->services['victoire_core.view_helper'] = new \Victoire\Bundle\CoreBundle\Helper\ViewHelper($this->get('doctrine.orm.default_entity_manager'), $this->get('victoire_view_reference.provider'), $this->get('victoire_view_reference.helper'));
    }

    /*
     * Gets the 'victoire_core.widget.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Form\WidgetType A Victoire\Bundle\CoreBundle\Form\WidgetType instance
     */
    protected function getVictoireCore_Widget_Form_TypeService()
    {
        return $this->services['victoire_core.widget.form.type'] = new \Victoire\Bundle\CoreBundle\Form\WidgetType();
    }

    /*
     * Gets the 'victoire_core.widget_discriminator_map.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\EventSubscriber\WidgetDiscriminatorMapSubscriber A Victoire\Bundle\CoreBundle\EventSubscriber\WidgetDiscriminatorMapSubscriber instance
     */
    protected function getVictoireCore_WidgetDiscriminatorMap_SubscriberService()
    {
        $this->services['victoire_core.widget_discriminator_map.subscriber'] = $instance = new \Victoire\Bundle\CoreBundle\EventSubscriber\WidgetDiscriminatorMapSubscriber();

        $instance->setWidgets(array());

        return $instance;
    }

    /*
     * Gets the 'victoire_core.widget_exception_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Handler\WidgetExceptionHandler A Victoire\Bundle\CoreBundle\Handler\WidgetExceptionHandler instance
     */
    protected function getVictoireCore_WidgetExceptionHandlerService()
    {
        return $this->services['victoire_core.widget_exception_handler'] = new \Victoire\Bundle\CoreBundle\Handler\WidgetExceptionHandler($this->get('security.authorization_checker'), false, $this);
    }

    /*
     * Gets the 'victoire_core.widget_fields.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\Form\WidgetFieldsFormType A Victoire\Bundle\CoreBundle\Form\WidgetFieldsFormType instance
     */
    protected function getVictoireCore_WidgetFields_Form_TypeService()
    {
        return $this->services['victoire_core.widget_fields.form.type'] = new \Victoire\Bundle\CoreBundle\Form\WidgetFieldsFormType($this->get('victoire_core.entity_proxy.fields_builder'));
    }

    /*
     * Gets the 'victoire_core.widget_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CoreBundle\EventSubscriber\WidgetSubscriber A Victoire\Bundle\CoreBundle\EventSubscriber\WidgetSubscriber instance
     */
    protected function getVictoireCore_WidgetSubscriberService()
    {
        return $this->services['victoire_core.widget_subscriber'] = new \Victoire\Bundle\CoreBundle\EventSubscriber\WidgetSubscriber($this->get('victoire_core.view_css_builder'), $this->get('victoire_widget_map.builder'));
    }

    /*
     * Gets the 'victoire_criteria.chain.data_source_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CriteriaBundle\Chain\DataSourceChain A Victoire\Bundle\CriteriaBundle\Chain\DataSourceChain instance
     */
    protected function getVictoireCriteria_Chain_DataSourceChainService()
    {
        $a = $this->get('victoire_criteria.criteria.request_data_source');

        $this->services['victoire_criteria.chain.data_source_chain'] = $instance = new \Victoire\Bundle\CriteriaBundle\Chain\DataSourceChain();

        $instance->addDataSource($a, array('group' => 'request', 'method' => 'getLocale', 'alias' => 'request_locale'));
        $instance->addDataSource($a, array('group' => 'request', 'method' => 'getScheme', 'alias' => 'request_scheme'));
        $instance->addDataSource($this->get('victoire_criteria.criteria.roles_data_source'), array('group' => 'request', 'method' => 'getRoles', 'alias' => 'request_roles'));
        $instance->addDataSource($this->get('victoire_criteria.criteria.user_data_source'), array('group' => 'request', 'method' => 'getLoggedStatus', 'alias' => 'request_user'));
        $instance->addDataSource($this->get('victoire_criteria.criteria.domain_name_source'), array('group' => 'request', 'method' => 'getCurrentDomainName', 'alias' => 'request_domain_name'));

        return $instance;
    }

    /*
     * Gets the 'victoire_criteria.criteria.domain_name_source' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CriteriaBundle\DataSource\DomainNameDataSource A Victoire\Bundle\CriteriaBundle\DataSource\DomainNameDataSource instance
     */
    protected function getVictoireCriteria_Criteria_DomainNameSourceService()
    {
        return $this->services['victoire_criteria.criteria.domain_name_source'] = new \Victoire\Bundle\CriteriaBundle\DataSource\DomainNameDataSource(array(0 => array()), $this->get('request_stack'));
    }

    /*
     * Gets the 'victoire_criteria.criteria.request_data_source' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CriteriaBundle\DataSource\RequestDataSource A Victoire\Bundle\CriteriaBundle\DataSource\RequestDataSource instance
     */
    protected function getVictoireCriteria_Criteria_RequestDataSourceService()
    {
        return $this->services['victoire_criteria.criteria.request_data_source'] = new \Victoire\Bundle\CriteriaBundle\DataSource\RequestDataSource($this->get('request_stack'), array(0 => 'fr', 1 => 'en'));
    }

    /*
     * Gets the 'victoire_criteria.criteria.roles_data_source' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CriteriaBundle\DataSource\RolesDataSource A Victoire\Bundle\CriteriaBundle\DataSource\RolesDataSource instance
     */
    protected function getVictoireCriteria_Criteria_RolesDataSourceService()
    {
        return $this->services['victoire_criteria.criteria.roles_data_source'] = new \Victoire\Bundle\CriteriaBundle\DataSource\RolesDataSource($this->get('security.token_storage'), array('ROLE_VICTOIRE_DEVELOPER' => array(0 => 'ROLE_VICTOIRE', 1 => 'ROLE_VICTOIRE_BLOG', 2 => 'ROLE_VICTOIRE_LEFTNAVBAR', 3 => 'ROLE_VICTOIRE_BET', 4 => 'ROLE_VICTOIRE_PAGE_DEBUG', 5 => 'ROLE_VICTOIRE_STYLE'), 'BUSINESS_ENTITY_OWNER' => array()));
    }

    /*
     * Gets the 'victoire_criteria.criteria.user_data_source' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\CriteriaBundle\DataSource\IsLoggedDataSource A Victoire\Bundle\CriteriaBundle\DataSource\IsLoggedDataSource instance
     */
    protected function getVictoireCriteria_Criteria_UserDataSourceService()
    {
        return $this->services['victoire_criteria.criteria.user_data_source'] = new \Victoire\Bundle\CriteriaBundle\DataSource\IsLoggedDataSource($this->get('security.authorization_checker'));
    }

    /*
     * Gets the 'victoire_form.error_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Helper\FormErrorHelper A Victoire\Bundle\FormBundle\Helper\FormErrorHelper instance
     */
    protected function getVictoireForm_ErrorHelperService()
    {
        return $this->services['victoire_form.error_helper'] = new \Victoire\Bundle\FormBundle\Helper\FormErrorHelper($this->get('translator.default'), false);
    }

    /*
     * Gets the 'victoire_form.form.type.font_awesome_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Type\FontAwesomePickerType A Victoire\Bundle\FormBundle\Form\Type\FontAwesomePickerType instance
     */
    protected function getVictoireForm_Form_Type_FontAwesomePickerService()
    {
        return $this->services['victoire_form.form.type.font_awesome_picker'] = new \Victoire\Bundle\FormBundle\Form\Type\FontAwesomePickerType();
    }

    /*
     * Gets the 'victoire_form.form.type.slug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Type\SlugType A Victoire\Bundle\FormBundle\Form\Type\SlugType instance
     */
    protected function getVictoireForm_Form_Type_SlugService()
    {
        return $this->services['victoire_form.form.type.slug'] = new \Victoire\Bundle\FormBundle\Form\Type\SlugType();
    }

    /*
     * Gets the 'victoire_form.form.type.vic_form_actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Type\FormActionsType A Victoire\Bundle\FormBundle\Form\Type\FormActionsType instance
     */
    protected function getVictoireForm_Form_Type_VicFormActionsService()
    {
        return $this->services['victoire_form.form.type.vic_form_actions'] = new \Victoire\Bundle\FormBundle\Form\Type\FormActionsType();
    }

    /*
     * Gets the 'victoire_form.form.type.vic_link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Type\LinkType A Victoire\Bundle\FormBundle\Form\Type\LinkType instance
     */
    protected function getVictoireForm_Form_Type_VicLinkService()
    {
        return $this->services['victoire_form.form.type.vic_link'] = new \Victoire\Bundle\FormBundle\Form\Type\LinkType(array(), $this->get('victoire_view_reference.repository'), array(0 => 'fr', 1 => 'en'), $this->get('request_stack'), array(0 => 'modal'));
    }

    /*
     * Gets the 'victoire_form.form.type.vic_tab' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Type\TabType A Victoire\Bundle\FormBundle\Form\Type\TabType instance
     */
    protected function getVictoireForm_Form_Type_VicTabService()
    {
        return $this->services['victoire_form.form.type.vic_tab'] = new \Victoire\Bundle\FormBundle\Form\Type\TabType();
    }

    /*
     * Gets the 'victoire_form.form.type_extension.vic_business_property_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Extension\BusinessPropertyPickerTypeExtension A Victoire\Bundle\FormBundle\Form\Extension\BusinessPropertyPickerTypeExtension instance
     */
    protected function getVictoireForm_Form_TypeExtension_VicBusinessPropertyPickerService()
    {
        return $this->services['victoire_form.form.type_extension.vic_business_property_picker'] = new \Victoire\Bundle\FormBundle\Form\Extension\BusinessPropertyPickerTypeExtension();
    }

    /*
     * Gets the 'victoire_form.form.type_extension.vic_button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Extension\IconButtonExtension A Victoire\Bundle\FormBundle\Form\Extension\IconButtonExtension instance
     */
    protected function getVictoireForm_Form_TypeExtension_VicButtonService()
    {
        return $this->services['victoire_form.form.type_extension.vic_button'] = new \Victoire\Bundle\FormBundle\Form\Extension\IconButtonExtension();
    }

    /*
     * Gets the 'victoire_form.form.type_extension.vic_date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Extension\DateTypeExtension A Victoire\Bundle\FormBundle\Form\Extension\DateTypeExtension instance
     */
    protected function getVictoireForm_Form_TypeExtension_VicDateService()
    {
        return $this->services['victoire_form.form.type_extension.vic_date'] = new \Victoire\Bundle\FormBundle\Form\Extension\DateTypeExtension();
    }

    /*
     * Gets the 'victoire_form.form.type_extension.vic_datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Extension\DatetimeTypeExtension A Victoire\Bundle\FormBundle\Form\Extension\DatetimeTypeExtension instance
     */
    protected function getVictoireForm_Form_TypeExtension_VicDatetimeService()
    {
        return $this->services['victoire_form.form.type_extension.vic_datetime'] = new \Victoire\Bundle\FormBundle\Form\Extension\DatetimeTypeExtension();
    }

    /*
     * Gets the 'victoire_form.form.type_extension.vic_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Extension\ErrorTypeFormTypeExtension A Victoire\Bundle\FormBundle\Form\Extension\ErrorTypeFormTypeExtension instance
     */
    protected function getVictoireForm_Form_TypeExtension_VicErrorService()
    {
        return $this->services['victoire_form.form.type_extension.vic_error'] = new \Victoire\Bundle\FormBundle\Form\Extension\ErrorTypeFormTypeExtension(array('vic_error_type' => NULL));
    }

    /*
     * Gets the 'victoire_form.form.type_extension.vic_help' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Extension\HelpFormTypeExtension A Victoire\Bundle\FormBundle\Form\Extension\HelpFormTypeExtension instance
     */
    protected function getVictoireForm_Form_TypeExtension_VicHelpService()
    {
        return $this->services['victoire_form.form.type_extension.vic_help'] = new \Victoire\Bundle\FormBundle\Form\Extension\HelpFormTypeExtension(array('vic_help_label_tooltip' => array('title' => NULL, 'text' => NULL, 'icon' => 'vic-info-sign', 'placement' => 'top'), 'vic_help_label_popover' => array('title' => NULL, 'content' => NULL, 'text' => NULL, 'icon' => 'vic-info-sign', 'placement' => 'top'), 'vic_help_widget_popover' => array('title' => NULL, 'content' => NULL, 'trigger' => 'hover', 'toggle' => 'vic-popover', 'placement' => 'right', 'selector' => NULL)));
    }

    /*
     * Gets the 'victoire_form.form.type_extension.vic_horizontal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Extension\HorizontalFormTypeExtension A Victoire\Bundle\FormBundle\Form\Extension\HorizontalFormTypeExtension instance
     */
    protected function getVictoireForm_Form_TypeExtension_VicHorizontalService()
    {
        return $this->services['victoire_form.form.type_extension.vic_horizontal'] = new \Victoire\Bundle\FormBundle\Form\Extension\HorizontalFormTypeExtension(array('vic_horizontal' => true, 'vic_horizontal_label_class' => '', 'vic_horizontal_label_offset_class' => 'vic-col-lg-offset-3', 'vic_horizontal_input_wrapper_class' => ''));
    }

    /*
     * Gets the 'victoire_form.form.type_extension.vic_legend' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Extension\LegendFormTypeExtension A Victoire\Bundle\FormBundle\Form\Extension\LegendFormTypeExtension instance
     */
    protected function getVictoireForm_Form_TypeExtension_VicLegendService()
    {
        return $this->services['victoire_form.form.type_extension.vic_legend'] = new \Victoire\Bundle\FormBundle\Form\Extension\LegendFormTypeExtension(array('vic_render_fieldset' => true, 'vic_show_legend' => true, 'vic_show_child_legend' => false, 'vic_legend_tag' => 'legend', 'vic_render_required_asterisk' => true, 'vic_render_optional_text' => true));
    }

    /*
     * Gets the 'victoire_form.form.type_extension.vic_offset_button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Extension\OffsetButtonExtension A Victoire\Bundle\FormBundle\Form\Extension\OffsetButtonExtension instance
     */
    protected function getVictoireForm_Form_TypeExtension_VicOffsetButtonService()
    {
        return $this->services['victoire_form.form.type_extension.vic_offset_button'] = new \Victoire\Bundle\FormBundle\Form\Extension\OffsetButtonExtension();
    }

    /*
     * Gets the 'victoire_form.form.type_extension.vic_static_text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Extension\StaticTextExtension A Victoire\Bundle\FormBundle\Form\Extension\StaticTextExtension instance
     */
    protected function getVictoireForm_Form_TypeExtension_VicStaticTextService()
    {
        return $this->services['victoire_form.form.type_extension.vic_static_text'] = new \Victoire\Bundle\FormBundle\Form\Extension\StaticTextExtension();
    }

    /*
     * Gets the 'victoire_form.form.type_extension.vic_tabbed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Extension\TabbedFormTypeExtension A Victoire\Bundle\FormBundle\Form\Extension\TabbedFormTypeExtension instance
     */
    protected function getVictoireForm_Form_TypeExtension_VicTabbedService()
    {
        return $this->services['victoire_form.form.type_extension.vic_tabbed'] = new \Victoire\Bundle\FormBundle\Form\Extension\TabbedFormTypeExtension($this->get('form.factory'), array('class' => 'vic-nav vic-nav-tabs'));
    }

    /*
     * Gets the 'victoire_form.form.type_extension.vic_time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Extension\TimeTypeExtension A Victoire\Bundle\FormBundle\Form\Extension\TimeTypeExtension instance
     */
    protected function getVictoireForm_Form_TypeExtension_VicTimeService()
    {
        return $this->services['victoire_form.form.type_extension.vic_time'] = new \Victoire\Bundle\FormBundle\Form\Extension\TimeTypeExtension();
    }

    /*
     * Gets the 'victoire_form.form.type_extension.vic_widget' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Extension\WidgetFormTypeExtension A Victoire\Bundle\FormBundle\Form\Extension\WidgetFormTypeExtension instance
     */
    protected function getVictoireForm_Form_TypeExtension_VicWidgetService()
    {
        return $this->services['victoire_form.form.type_extension.vic_widget'] = new \Victoire\Bundle\FormBundle\Form\Extension\WidgetFormTypeExtension(array('vic_checkbox_label' => 'both'));
    }

    /*
     * Gets the 'victoire_form.form.type_extension.vic_widget_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Extension\WidgetCollectionFormTypeExtension A Victoire\Bundle\FormBundle\Form\Extension\WidgetCollectionFormTypeExtension instance
     */
    protected function getVictoireForm_Form_TypeExtension_VicWidgetCollectionService()
    {
        return $this->services['victoire_form.form.type_extension.vic_widget_collection'] = new \Victoire\Bundle\FormBundle\Form\Extension\WidgetCollectionFormTypeExtension(array('vic_render_collection_item' => false, 'vic_widget_add_btn' => array('attr' => array('class' => 'vic-btn vic-btn-default'), 'label' => 'victoire.collection.button.label.add_item', 'icon' => NULL, 'icon_inverted' => false), 'vic_widget_remove_btn' => array('attr' => array('class' => 'btn btn-default'), 'wrapper_div' => array('class' => 'vic-col-lg-3'), 'label' => 'victoire.collection.button.label.remove_item', 'icon' => NULL, 'icon_inverted' => false)));
    }

    /*
     * Gets the 'victoire_form.form_type.urlvalidated_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Form\Type\UrlvalidatedType A Victoire\Bundle\FormBundle\Form\Type\UrlvalidatedType instance
     */
    protected function getVictoireForm_FormType_UrlvalidatedTypeService()
    {
        return $this->services['victoire_form.form_type.urlvalidated_type'] = new \Victoire\Bundle\FormBundle\Form\Type\UrlvalidatedType($this->get('router'));
    }

    /*
     * Gets the 'victoire_form.twig.extension.bootstrap_flash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Twig\FlashExtension A Victoire\Bundle\FormBundle\Twig\FlashExtension instance
     */
    protected function getVictoireForm_Twig_Extension_BootstrapFlashService()
    {
        return $this->services['victoire_form.twig.extension.bootstrap_flash'] = new \Victoire\Bundle\FormBundle\Twig\FlashExtension(array());
    }

    /*
     * Gets the 'victoire_form.twig.extension.bootstrap_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Twig\FormExtension A Victoire\Bundle\FormBundle\Twig\FormExtension instance
     */
    protected function getVictoireForm_Twig_Extension_BootstrapFormService()
    {
        return $this->services['victoire_form.twig.extension.bootstrap_form'] = new \Victoire\Bundle\FormBundle\Twig\FormExtension();
    }

    /*
     * Gets the 'victoire_form.twig.extension.bootstrap_icon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\FormBundle\Twig\IconExtension A Victoire\Bundle\FormBundle\Twig\IconExtension instance
     */
    protected function getVictoireForm_Twig_Extension_BootstrapIconService()
    {
        return $this->services['victoire_form.twig.extension.bootstrap_icon'] = new \Victoire\Bundle\FormBundle\Twig\IconExtension('glyphicons', 'icon');
    }

    /*
     * Gets the 'victoire_i18n.kernelrequest.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\I18nBundle\Listener\KernelRequestListener A Victoire\Bundle\I18nBundle\Listener\KernelRequestListener instance
     */
    protected function getVictoireI18n_Kernelrequest_ListenerService()
    {
        return $this->services['victoire_i18n.kernelrequest.listener'] = new \Victoire\Bundle\I18nBundle\Listener\KernelRequestListener($this->get('twig'), array(0 => 'fr', 1 => 'en'));
    }

    /*
     * Gets the 'victoire_i18n.locale_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\I18nBundle\Resolver\LocaleResolver A Victoire\Bundle\I18nBundle\Resolver\LocaleResolver instance
     */
    protected function getVictoireI18n_LocaleResolverService()
    {
        return $this->services['victoire_i18n.locale_resolver'] = new \Victoire\Bundle\I18nBundle\Resolver\LocaleResolver('parameter', array(), 'en', array(0 => 'fr', 1 => 'en'));
    }

    /*
     * Gets the 'victoire_i18n.locale_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\I18nBundle\Subscriber\LocaleSubscriber A Victoire\Bundle\I18nBundle\Subscriber\LocaleSubscriber instance
     */
    protected function getVictoireI18n_LocaleSubscriberService()
    {
        return $this->services['victoire_i18n.locale_subscriber'] = new \Victoire\Bundle\I18nBundle\Subscriber\LocaleSubscriber('en', $this->get('victoire_i18n.locale_resolver'));
    }

    /*
     * Gets the 'victoire_i18n.routing_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\I18nBundle\Route\I18nRouteLoader A Victoire\Bundle\I18nBundle\Route\I18nRouteLoader instance
     */
    protected function getVictoireI18n_RoutingLoaderService()
    {
        return $this->services['victoire_i18n.routing_loader'] = new \Victoire\Bundle\I18nBundle\Route\I18nRouteLoader(array(), $this->get('victoire_i18n.locale_resolver'));
    }

    /*
     * Gets the 'victoire_i18n.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\I18nBundle\Translation\Translator A Victoire\Bundle\I18nBundle\Translation\Translator instance
     */
    protected function getVictoireI18n_TranslatorService()
    {
        return $this->services['victoire_i18n.translator'] = new \Victoire\Bundle\I18nBundle\Translation\Translator($this, ${($_ = isset($this->services['translator.selector']) ? $this->services['translator.selector'] : $this->getTranslator_SelectorService()) && false ?: '_'}, array(), array('cache_dir' => (__DIR__.'/translations%'), 'debug' => false));
    }

    /*
     * Gets the 'victoire_media.listener.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\MediaBundle\EventListener\DoctrineMediaListener A Victoire\Bundle\MediaBundle\EventListener\DoctrineMediaListener instance
     */
    protected function getVictoireMedia_Listener_DoctrineService()
    {
        return $this->services['victoire_media.listener.doctrine'] = new \Victoire\Bundle\MediaBundle\EventListener\DoctrineMediaListener($this->get('victoire_media.media_manager'));
    }

    /*
     * Gets the 'victoire_media.media_creator_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\MediaBundle\Helper\Services\MediaCreatorService A Victoire\Bundle\MediaBundle\Helper\Services\MediaCreatorService instance
     */
    protected function getVictoireMedia_MediaCreatorServiceService()
    {
        $this->services['victoire_media.media_creator_service'] = $instance = new \Victoire\Bundle\MediaBundle\Helper\Services\MediaCreatorService();

        $instance->setEntityManager($this->get('doctrine.orm.default_entity_manager'));

        return $instance;
    }

    /*
     * Gets the 'victoire_media.media_handlers.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\MediaBundle\Helper\File\FileHandler A Victoire\Bundle\MediaBundle\Helper\File\FileHandler instance
     */
    protected function getVictoireMedia_MediaHandlers_FileService()
    {
        return $this->services['victoire_media.media_handlers.file'] = new \Victoire\Bundle\MediaBundle\Helper\File\FileHandler();
    }

    /*
     * Gets the 'victoire_media.media_handlers.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\MediaBundle\Helper\Image\ImageHandler A Victoire\Bundle\MediaBundle\Helper\Image\ImageHandler instance
     */
    protected function getVictoireMedia_MediaHandlers_ImageService()
    {
        return $this->services['victoire_media.media_handlers.image'] = new \Victoire\Bundle\MediaBundle\Helper\Image\ImageHandler(NULL);
    }

    /*
     * Gets the 'victoire_media.media_handlers.remote_slide' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\MediaBundle\Helper\RemoteSlide\RemoteSlideHandler A Victoire\Bundle\MediaBundle\Helper\RemoteSlide\RemoteSlideHandler instance
     */
    protected function getVictoireMedia_MediaHandlers_RemoteSlideService()
    {
        return $this->services['victoire_media.media_handlers.remote_slide'] = new \Victoire\Bundle\MediaBundle\Helper\RemoteSlide\RemoteSlideHandler();
    }

    /*
     * Gets the 'victoire_media.media_handlers.remote_video' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\MediaBundle\Helper\RemoteVideo\RemoteVideoHandler A Victoire\Bundle\MediaBundle\Helper\RemoteVideo\RemoteVideoHandler instance
     */
    protected function getVictoireMedia_MediaHandlers_RemoteVideoService()
    {
        return $this->services['victoire_media.media_handlers.remote_video'] = new \Victoire\Bundle\MediaBundle\Helper\RemoteVideo\RemoteVideoHandler();
    }

    /*
     * Gets the 'victoire_media.media_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\MediaBundle\Helper\MediaManager A Victoire\Bundle\MediaBundle\Helper\MediaManager instance
     */
    protected function getVictoireMedia_MediaManagerService()
    {
        $this->services['victoire_media.media_manager'] = $instance = new \Victoire\Bundle\MediaBundle\Helper\MediaManager();

        $instance->addHandler($this->get('victoire_media.media_handlers.remote_slide'));
        $instance->addHandler($this->get('victoire_media.media_handlers.remote_video'));
        $instance->addHandler($this->get('victoire_media.media_handlers.image'));
        $instance->addHandler($this->get('victoire_media.media_handlers.file'));

        return $instance;
    }

    /*
     * Gets the 'victoire_media.menu.adaptor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\MediaBundle\Helper\Menu\MediaMenuAdaptor A Victoire\Bundle\MediaBundle\Helper\Menu\MediaMenuAdaptor instance
     */
    protected function getVictoireMedia_Menu_AdaptorService()
    {
        return $this->services['victoire_media.menu.adaptor'] = new \Victoire\Bundle\MediaBundle\Helper\Menu\MediaMenuAdaptor($this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'victoire_media.menu.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\MediaBundle\Twig\MenuTwigExtension A Victoire\Bundle\MediaBundle\Twig\MenuTwigExtension instance
     */
    protected function getVictoireMedia_Menu_Twig_ExtensionService()
    {
        return $this->services['victoire_media.menu.twig.extension'] = new \Victoire\Bundle\MediaBundle\Twig\MenuTwigExtension($this->get('victoire_media.menubuilder'));
    }

    /*
     * Gets the 'victoire_media.menubuilder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\MediaBundle\Helper\Menu\MenuBuilder A Victoire\Bundle\MediaBundle\Helper\Menu\MenuBuilder instance
     */
    protected function getVictoireMedia_MenubuilderService()
    {
        $this->services['victoire_media.menubuilder'] = $instance = new \Victoire\Bundle\MediaBundle\Helper\Menu\MenuBuilder($this->get('request_stack'));

        $instance->addAdaptMenu($this->get('victoire_media.menu.adaptor'));

        return $instance;
    }

    /*
     * Gets the 'victoire_media.twig_extension.svg' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\MediaBundle\Twig\SvgTwigExtension A Victoire\Bundle\MediaBundle\Twig\SvgTwigExtension instance
     */
    protected function getVictoireMedia_TwigExtension_SvgService()
    {
        return $this->services['victoire_media.twig_extension.svg'] = new \Victoire\Bundle\MediaBundle\Twig\SvgTwigExtension(($this->targetDirs[3].'/app'));
    }

    /*
     * Gets the 'victoire_page.page.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\PageBundle\Form\PageType A Victoire\Bundle\PageBundle\Form\PageType instance
     */
    protected function getVictoirePage_Page_Form_TypeService()
    {
        return $this->services['victoire_page.page.form.type'] = new \Victoire\Bundle\PageBundle\Form\PageType(array(0 => 'fr', 1 => 'en'), $this->get('request_stack'), $this->get('security.authorization_checker'));
    }

    /*
     * Gets the 'victoire_page.page_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\PageBundle\Helper\PageHelper A Victoire\Bundle\PageBundle\Helper\PageHelper instance
     */
    protected function getVictoirePage_PageHelperService()
    {
        return $this->services['victoire_page.page_helper'] = new \Victoire\Bundle\PageBundle\Helper\PageHelper($this->get('victoire_core.helper.business_entity_helper'), $this->get('doctrine.orm.default_entity_manager'), $this->get('victoire_view_reference.helper'), $this->get('victoire_core.current_view'), $this->get('event_dispatcher'), $this, $this->get('victoire_seo.helper.pageseo_helper'), $this->get('session'), $this->get('security.token_storage'), $this->get('security.authorization_checker'), $this->get('victoire_widget_map.builder'), $this->get('victoire_business_page.business_page_builder'), $this->get('victoire_business_page.business_page_helper'), $this->get('victoire_widget_map.widget_data_warmer'), $this->get('victoire_view_reference.repository'));
    }

    /*
     * Gets the 'victoire_page.page_reference_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\PageBundle\Builder\PageReferenceBuilder A Victoire\Bundle\PageBundle\Builder\PageReferenceBuilder instance
     */
    protected function getVictoirePage_PageReferenceBuilderService()
    {
        return $this->services['victoire_page.page_reference_builder'] = new \Victoire\Bundle\PageBundle\Builder\PageReferenceBuilder();
    }

    /*
     * Gets the 'victoire_page.page_settings.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\PageBundle\Form\PageSettingsType A Victoire\Bundle\PageBundle\Form\PageSettingsType instance
     */
    protected function getVictoirePage_PageSettings_Form_TypeService()
    {
        return $this->services['victoire_page.page_settings.form.type'] = new \Victoire\Bundle\PageBundle\Form\PageSettingsType(array(0 => 'fr', 1 => 'en'), $this->get('request_stack'), $this->get('security.authorization_checker'));
    }

    /*
     * Gets the 'victoire_page.twig.page_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\PageBundle\Twig\Extension\PageExtension A Victoire\Bundle\PageBundle\Twig\Extension\PageExtension instance
     */
    protected function getVictoirePage_Twig_PageExtensionService()
    {
        return $this->services['victoire_page.twig.page_extension'] = new \Victoire\Bundle\PageBundle\Twig\Extension\PageExtension($this->get('victoire_business_page.business_page_helper'), $this->get('router'), $this->get('victoire_page.page_helper'), $this->get('victoire_core.current_view'), $this->get('victoire_core.view_css_builder'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'victoire_page.user_callable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\PageBundle\Helper\UserCallableHelper A Victoire\Bundle\PageBundle\Helper\UserCallableHelper instance
     */
    protected function getVictoirePage_UserCallableService()
    {
        return $this->services['victoire_page.user_callable'] = new \Victoire\Bundle\PageBundle\Helper\UserCallableHelper($this);
    }

    /*
     * Gets the 'victoire_query.query_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\QueryBundle\Helper\QueryHelper A Victoire\Bundle\QueryBundle\Helper\QueryHelper instance
     */
    protected function getVictoireQuery_QueryHelperService()
    {
        return $this->services['victoire_query.query_helper'] = new \Victoire\Bundle\QueryBundle\Helper\QueryHelper($this->get('victoire_core.helper.business_entity_helper'), $this->get('victoire_core.current_view'), $this->get('annotation_reader'), $this->get('security.token_storage'));
    }

    /*
     * Gets the 'victoire_seo.helper.pageseo_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\SeoBundle\Helper\PageSeoHelper A Victoire\Bundle\SeoBundle\Helper\PageSeoHelper instance
     */
    protected function getVictoireSeo_Helper_PageseoHelperService()
    {
        return $this->services['victoire_seo.helper.pageseo_helper'] = new \Victoire\Bundle\SeoBundle\Helper\PageSeoHelper($this->get('victoire_core.helper.business_entity_helper'), $this->get('victoire_business_entity.converter.parameter_converter'));
    }

    /*
     * Gets the 'victoire_sitemap.export.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\SitemapBundle\Domain\Export\SitemapExportHandler A Victoire\Bundle\SitemapBundle\Domain\Export\SitemapExportHandler instance
     */
    protected function getVictoireSitemap_Export_HandlerService()
    {
        return $this->services['victoire_sitemap.export.handler'] = new \Victoire\Bundle\SitemapBundle\Domain\Export\SitemapExportHandler($this->get('doctrine.orm.default_entity_manager'), $this->get('victoire_page.page_helper'), $this->get('victoire_view_reference.repository'));
    }

    /*
     * Gets the 'victoire_sitemap.priority.pageseo_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\SitemapBundle\Form\SitemapPriorityPageSeoType A Victoire\Bundle\SitemapBundle\Form\SitemapPriorityPageSeoType instance
     */
    protected function getVictoireSitemap_Priority_PageseoTypeService()
    {
        return $this->services['victoire_sitemap.priority.pageseo_type'] = new \Victoire\Bundle\SitemapBundle\Form\SitemapPriorityPageSeoType();
    }

    /*
     * Gets the 'victoire_sitemap.sitemap_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\SitemapBundle\Listener\SiteMapMenuListener A Victoire\Bundle\SitemapBundle\Listener\SiteMapMenuListener instance
     */
    protected function getVictoireSitemap_SitemapMenuListenerService()
    {
        return $this->services['victoire_sitemap.sitemap_menu_listener'] = new \Victoire\Bundle\SitemapBundle\Listener\SiteMapMenuListener($this->get('victoire_core.admin_menu_builder'));
    }

    /*
     * Gets the 'victoire_sitemap.sort.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\SitemapBundle\Domain\Sort\SitemapSortHandler A Victoire\Bundle\SitemapBundle\Domain\Sort\SitemapSortHandler instance
     */
    protected function getVictoireSitemap_Sort_HandlerService()
    {
        return $this->services['victoire_sitemap.sort.handler'] = new \Victoire\Bundle\SitemapBundle\Domain\Sort\SitemapSortHandler($this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'victoire_template.template.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\TemplateBundle\Form\TemplateType A Victoire\Bundle\TemplateBundle\Form\TemplateType instance
     */
    protected function getVictoireTemplate_Template_Form_TypeService()
    {
        $this->services['victoire_template.template.form.type'] = $instance = new \Victoire\Bundle\TemplateBundle\Form\TemplateType(array(0 => 'fr', 1 => 'en'), $this->get('request_stack'), $this->get('security.authorization_checker'));

        $instance->setLayouts(array('defaultLayout' => 'Default layout'));

        return $instance;
    }

    /*
     * Gets the 'victoire_twig.kernelrequest.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\TwigBundle\Listener\KernelRequestListener A Victoire\Bundle\TwigBundle\Listener\KernelRequestListener instance
     */
    protected function getVictoireTwig_Kernelrequest_ListenerService()
    {
        return $this->services['victoire_twig.kernelrequest.listener'] = new \Victoire\Bundle\TwigBundle\Listener\KernelRequestListener($this->get('twig'), array('xs' => array('min' => 0, 'max' => 767), 'sm' => array('min' => 768, 'max' => 991), 'md' => array('min' => 992, 'max' => 1199), 'lg' => array('min' => 1200)));
    }

    /*
     * Gets the 'victoire_view_reference.array_transformer.base_page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Transformer\ArrayToViewReferenceTransformer A Victoire\Bundle\ViewReferenceBundle\Transformer\ArrayToViewReferenceTransformer instance
     */
    protected function getVictoireViewReference_ArrayTransformer_BasePageService()
    {
        return $this->services['victoire_view_reference.array_transformer.base_page'] = new \Victoire\Bundle\ViewReferenceBundle\Transformer\ArrayToViewReferenceTransformer();
    }

    /*
     * Gets the 'victoire_view_reference.array_transformer.business_page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Transformer\ArrayToBusinessPageReferenceTransformer A Victoire\Bundle\ViewReferenceBundle\Transformer\ArrayToBusinessPageReferenceTransformer instance
     */
    protected function getVictoireViewReference_ArrayTransformer_BusinessPageService()
    {
        return $this->services['victoire_view_reference.array_transformer.business_page'] = new \Victoire\Bundle\ViewReferenceBundle\Transformer\ArrayToBusinessPageReferenceTransformer();
    }

    /*
     * Gets the 'victoire_view_reference.array_transformer.virtual_business_page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Transformer\ArrayToBusinessPageReferenceTransformer A Victoire\Bundle\ViewReferenceBundle\Transformer\ArrayToBusinessPageReferenceTransformer instance
     */
    protected function getVictoireViewReference_ArrayTransformer_VirtualBusinessPageService()
    {
        return $this->services['victoire_view_reference.array_transformer.virtual_business_page'] = new \Victoire\Bundle\ViewReferenceBundle\Transformer\ArrayToBusinessPageReferenceTransformer();
    }

    /*
     * Gets the 'victoire_view_reference.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Builder\ViewReferenceBuilder A Victoire\Bundle\ViewReferenceBundle\Builder\ViewReferenceBuilder instance
     */
    protected function getVictoireViewReference_BuilderService()
    {
        return $this->services['victoire_view_reference.builder'] = new \Victoire\Bundle\ViewReferenceBundle\Builder\ViewReferenceBuilder($this->get('victoire_view_reference.builder_chain'));
    }

    /*
     * Gets the 'victoire_view_reference.builder_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Builder\Chain\ViewReferenceBuilderChain A Victoire\Bundle\ViewReferenceBundle\Builder\Chain\ViewReferenceBuilderChain instance
     */
    protected function getVictoireViewReference_BuilderChainService()
    {
        $this->services['victoire_view_reference.builder_chain'] = $instance = new \Victoire\Bundle\ViewReferenceBundle\Builder\Chain\ViewReferenceBuilderChain();

        $instance->addViewReferenceBuilder($this->get('victoire_blog.manager.blog_reference_builder'), 'Victoire\\Bundle\\BlogBundle\\Entity\\Blog');
        $instance->addViewReferenceBuilder($this->get('victoire_business_page.manager.business_page_reference_builder'), 'Victoire\\Bundle\\BusinessPageBundle\\Entity\\BusinessPage');
        $instance->addViewReferenceBuilder($this->get('victoire_business_page.manager.virtual_business_page_reference_builder'), 'Victoire\\Bundle\\BusinessPageBundle\\Entity\\VirtualBusinessPage');
        $instance->addViewReferenceBuilder($this->get('victoire_page.page_reference_builder'), 'Victoire\\Bundle\\PageBundle\\Entity\\Page');

        return $instance;
    }

    /*
     * Gets the 'victoire_view_reference.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Cache\ViewCacheWarmer A Victoire\Bundle\ViewReferenceBundle\Cache\ViewCacheWarmer instance
     */
    protected function getVictoireViewReference_CacheWarmerService()
    {
        return $this->services['victoire_view_reference.cache_warmer'] = new \Victoire\Bundle\ViewReferenceBundle\Cache\ViewCacheWarmer($this->get('victoire_core.view_helper'), $this->get('victoire_view_reference.repository'), $this->get('victoire_view_reference.manager'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'victoire_view_reference.event_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\EventSubscriber\ViewReferenceSubscriber A Victoire\Bundle\ViewReferenceBundle\EventSubscriber\ViewReferenceSubscriber instance
     */
    protected function getVictoireViewReference_EventSubscriberService()
    {
        return $this->services['victoire_view_reference.event_subscriber'] = new \Victoire\Bundle\ViewReferenceBundle\EventSubscriber\ViewReferenceSubscriber($this->get('event_dispatcher'));
    }

    /*
     * Gets the 'victoire_view_reference.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Helper\ViewReferenceHelper A Victoire\Bundle\ViewReferenceBundle\Helper\ViewReferenceHelper instance
     */
    protected function getVictoireViewReference_HelperService()
    {
        return $this->services['victoire_view_reference.helper'] = new \Victoire\Bundle\ViewReferenceBundle\Helper\ViewReferenceHelper($this->get('victoire_view_reference.builder'));
    }

    /*
     * Gets the 'victoire_view_reference.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Listener\ViewReferenceListener A Victoire\Bundle\ViewReferenceBundle\Listener\ViewReferenceListener instance
     */
    protected function getVictoireViewReference_ListenerService()
    {
        return $this->services['victoire_view_reference.listener'] = new \Victoire\Bundle\ViewReferenceBundle\Listener\ViewReferenceListener($this->get('victoire_view_reference.builder'), $this->get('victoire_view_reference.manager'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'victoire_view_reference.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Connector\ViewReferenceManager A Victoire\Bundle\ViewReferenceBundle\Connector\ViewReferenceManager instance
     */
    protected function getVictoireViewReference_ManagerService()
    {
        return $this->services['victoire_view_reference.manager'] = new \Victoire\Bundle\ViewReferenceBundle\Connector\ViewReferenceManager($this->get('victoire_view_reference.redis.manager'), $this->get('victoire_view_reference.redis.repository'), $this->get('victoire_view_reference.transformer_chain'));
    }

    /*
     * Gets the 'victoire_view_reference.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Provider\ViewReferenceProvider A Victoire\Bundle\ViewReferenceBundle\Provider\ViewReferenceProvider instance
     */
    protected function getVictoireViewReference_ProviderService()
    {
        return $this->services['victoire_view_reference.provider'] = new \Victoire\Bundle\ViewReferenceBundle\Provider\ViewReferenceProvider($this->get('victoire_business_page.business_page_helper'), $this->get('victoire_business_page.business_page_builder'));
    }

    /*
     * Gets the 'victoire_view_reference.redis.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Connector\Redis\ViewReferenceRedisManager A Victoire\Bundle\ViewReferenceBundle\Connector\Redis\ViewReferenceRedisManager instance
     */
    protected function getVictoireViewReference_Redis_ManagerService()
    {
        return $this->services['victoire_view_reference.redis.manager'] = new \Victoire\Bundle\ViewReferenceBundle\Connector\Redis\ViewReferenceRedisManager($this->get('snc_redis.victoire'), $this->get('victoire_view_reference.redis.repository'));
    }

    /*
     * Gets the 'victoire_view_reference.redis.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Connector\Redis\ViewReferenceRedisRepository A Victoire\Bundle\ViewReferenceBundle\Connector\Redis\ViewReferenceRedisRepository instance
     */
    protected function getVictoireViewReference_Redis_RepositoryService()
    {
        return $this->services['victoire_view_reference.redis.repository'] = new \Victoire\Bundle\ViewReferenceBundle\Connector\Redis\ViewReferenceRedisRepository($this->get('snc_redis.victoire'));
    }

    /*
     * Gets the 'victoire_view_reference.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Connector\ViewReferenceRepository A Victoire\Bundle\ViewReferenceBundle\Connector\ViewReferenceRepository instance
     */
    protected function getVictoireViewReference_RepositoryService()
    {
        return $this->services['victoire_view_reference.repository'] = new \Victoire\Bundle\ViewReferenceBundle\Connector\ViewReferenceRepository($this->get('victoire_view_reference.redis.repository'), $this->get('victoire_view_reference.transformer_chain'));
    }

    /*
     * Gets the 'victoire_view_reference.transformer.xmltoviewreference' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Transformer\XmlToViewReferenceTransformer A Victoire\Bundle\ViewReferenceBundle\Transformer\XmlToViewReferenceTransformer instance
     */
    protected function getVictoireViewReference_Transformer_XmltoviewreferenceService()
    {
        return $this->services['victoire_view_reference.transformer.xmltoviewreference'] = new \Victoire\Bundle\ViewReferenceBundle\Transformer\XmlToViewReferenceTransformer();
    }

    /*
     * Gets the 'victoire_view_reference.transformer_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Builder\Chain\ViewReferenceTransformerChain A Victoire\Bundle\ViewReferenceBundle\Builder\Chain\ViewReferenceTransformerChain instance
     */
    protected function getVictoireViewReference_TransformerChainService()
    {
        $this->services['victoire_view_reference.transformer_chain'] = $instance = new \Victoire\Bundle\ViewReferenceBundle\Builder\Chain\ViewReferenceTransformerChain();

        $instance->addTransformer($this->get('victoire_view_reference.array_transformer.base_page'), 'Victoire\\Bundle\\PageBundle\\Entity\\BasePage', 'array');
        $instance->addTransformer($this->get('victoire_view_reference.array_transformer.business_page'), 'Victoire\\Bundle\\BusinessPageBundle\\Entity\\BusinessPage', 'array');
        $instance->addTransformer($this->get('victoire_view_reference.array_transformer.virtual_business_page'), 'Victoire\\Bundle\\BusinessPageBundle\\Entity\\VirtualBusinessPage', 'array');
        $instance->addTransformer($this->get('victoire_view_reference.xml_transformer.base_page'), 'Victoire\\Bundle\\PageBundle\\Entity\\BasePage', 'xml');
        $instance->addTransformer($this->get('victoire_view_reference.xml_transformer.business_page'), 'Victoire\\Bundle\\BusinessPageBundle\\Entity\\BusinessPage', 'xml');
        $instance->addTransformer($this->get('victoire_view_reference.xml_transformer.virtual_business_page'), 'Victoire\\Bundle\\BusinessPageBundle\\Entity\\VirtualBusinessPage', 'xml');

        return $instance;
    }

    /*
     * Gets the 'victoire_view_reference.xml_transformer.base_page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Transformer\XmlToViewReferenceTransformer A Victoire\Bundle\ViewReferenceBundle\Transformer\XmlToViewReferenceTransformer instance
     */
    protected function getVictoireViewReference_XmlTransformer_BasePageService()
    {
        return $this->services['victoire_view_reference.xml_transformer.base_page'] = new \Victoire\Bundle\ViewReferenceBundle\Transformer\XmlToViewReferenceTransformer();
    }

    /*
     * Gets the 'victoire_view_reference.xml_transformer.business_page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Transformer\XmlToBusinessPageReferenceTransformer A Victoire\Bundle\ViewReferenceBundle\Transformer\XmlToBusinessPageReferenceTransformer instance
     */
    protected function getVictoireViewReference_XmlTransformer_BusinessPageService()
    {
        return $this->services['victoire_view_reference.xml_transformer.business_page'] = new \Victoire\Bundle\ViewReferenceBundle\Transformer\XmlToBusinessPageReferenceTransformer();
    }

    /*
     * Gets the 'victoire_view_reference.xml_transformer.virtual_business_page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\ViewReferenceBundle\Transformer\XmlToBusinessPageReferenceTransformer A Victoire\Bundle\ViewReferenceBundle\Transformer\XmlToBusinessPageReferenceTransformer instance
     */
    protected function getVictoireViewReference_XmlTransformer_VirtualBusinessPageService()
    {
        return $this->services['victoire_view_reference.xml_transformer.virtual_business_page'] = new \Victoire\Bundle\ViewReferenceBundle\Transformer\XmlToBusinessPageReferenceTransformer();
    }

    /*
     * Gets the 'victoire_widget.base_widget_content_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetBundle\Resolver\BaseWidgetContentResolver A Victoire\Bundle\WidgetBundle\Resolver\BaseWidgetContentResolver instance
     */
    protected function getVictoireWidget_BaseWidgetContentResolverService()
    {
        $this->services['victoire_widget.base_widget_content_resolver'] = $instance = new \Victoire\Bundle\WidgetBundle\Resolver\BaseWidgetContentResolver();

        $instance->setQueryHelper($this->get('victoire_query.query_helper'));
        $instance->setEntityManager($this->get('doctrine.orm.default_entity_manager'));

        return $instance;
    }

    /*
     * Gets the 'victoire_widget.cache.widget_cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetBundle\Cache\WidgetCacheClearer A Victoire\Bundle\WidgetBundle\Cache\WidgetCacheClearer instance
     */
    protected function getVictoireWidget_Cache_WidgetCacheClearerService()
    {
        return $this->services['victoire_widget.cache.widget_cache_clearer'] = new \Victoire\Bundle\WidgetBundle\Cache\WidgetCacheClearer($this->get('victoire_widget.widget_cache'));
    }

    /*
     * Gets the 'victoire_widget.resolver.widget_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetBundle\Resolver\WidgetResolver A Victoire\Bundle\WidgetBundle\Resolver\WidgetResolver instance
     */
    protected function getVictoireWidget_Resolver_WidgetResolverService()
    {
        return $this->services['victoire_widget.resolver.widget_resolver'] = new \Victoire\Bundle\WidgetBundle\Resolver\WidgetResolver($this->get("victoire_criteria.chain.data_source_chain"), $this->get('security.authorization_checker'), $this->get('victoire_core.current_view'));
    }

    /*
     * Gets the 'victoire_widget.twig.link_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetBundle\Twig\LinkExtension A Victoire\Bundle\WidgetBundle\Twig\LinkExtension instance
     */
    protected function getVictoireWidget_Twig_LinkExtensionService()
    {
        return $this->services['victoire_widget.twig.link_extension'] = new \Victoire\Bundle\WidgetBundle\Twig\LinkExtension($this->get('router'), $this->get('request_stack'), array(), $this->get('victoire_core.helper.business_entity_helper'), $this->get('victoire_business_page.business_page_helper'), $this->get('victoire_page.page_helper'), $this->get('doctrine.orm.default_entity_manager'), $this->get('logger'), $this->get('victoire.repository.error_page'), 'en', NULL);
    }

    /*
     * Gets the 'victoire_widget.widget_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetBundle\Cache\WidgetCache A Victoire\Bundle\WidgetBundle\Cache\WidgetCache instance
     */
    protected function getVictoireWidget_WidgetCacheService()
    {
        return $this->services['victoire_widget.widget_cache'] = new \Victoire\Bundle\WidgetBundle\Cache\WidgetCache($this->get('snc_redis.victoire'), $this->get('security.authorization_checker'), $this->get('victoire_widget.widget_helper'));
    }

    /*
     * Gets the 'victoire_widget.widget_content_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetBundle\Resolver\WidgetContentResolver A Victoire\Bundle\WidgetBundle\Resolver\WidgetContentResolver instance
     */
    protected function getVictoireWidget_WidgetContentResolverService()
    {
        return $this->services['victoire_widget.widget_content_resolver'] = new \Victoire\Bundle\WidgetBundle\Resolver\WidgetContentResolver($this->get('victoire_widget.widget_content_resolver_chain'));
    }

    /*
     * Gets the 'victoire_widget.widget_content_resolver_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetBundle\Resolver\Chain\WidgetContentResolverChain A Victoire\Bundle\WidgetBundle\Resolver\Chain\WidgetContentResolverChain instance
     */
    protected function getVictoireWidget_WidgetContentResolverChainService()
    {
        return $this->services['victoire_widget.widget_content_resolver_chain'] = new \Victoire\Bundle\WidgetBundle\Resolver\Chain\WidgetContentResolverChain($this->get('victoire_widget.widget_helper'));
    }

    /*
     * Gets the 'victoire_widget.widget_form_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetBundle\Builder\WidgetFormBuilder A Victoire\Bundle\WidgetBundle\Builder\WidgetFormBuilder instance
     */
    protected function getVictoireWidget_WidgetFormBuilderService()
    {
        return $this->services['victoire_widget.widget_form_builder'] = new \Victoire\Bundle\WidgetBundle\Builder\WidgetFormBuilder($this);
    }

    /*
     * Gets the 'victoire_widget.widget_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetBundle\Helper\WidgetHelper A Victoire\Bundle\WidgetBundle\Helper\WidgetHelper instance
     */
    protected function getVictoireWidget_WidgetHelperService()
    {
        return $this->services['victoire_widget.widget_helper'] = new \Victoire\Bundle\WidgetBundle\Helper\WidgetHelper($this);
    }

    /*
     * Gets the 'victoire_widget.widget_item_content_resolver_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetBundle\Resolver\Chain\WidgetItemChain A Victoire\Bundle\WidgetBundle\Resolver\Chain\WidgetItemChain instance
     */
    protected function getVictoireWidget_WidgetItemContentResolverChainService()
    {
        return $this->services['victoire_widget.widget_item_content_resolver_chain'] = new \Victoire\Bundle\WidgetBundle\Resolver\Chain\WidgetItemChain();
    }

    /*
     * Gets the 'victoire_widget.widget_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetBundle\Model\WidgetManager A Victoire\Bundle\WidgetBundle\Model\WidgetManager instance
     */
    protected function getVictoireWidget_WidgetManagerService()
    {
        return $this->services['victoire_widget.widget_manager'] = new \Victoire\Bundle\WidgetBundle\Model\WidgetManager($this->get('victoire_widget.widget_helper'), $this->get('victoire_widget.widget_form_builder'), $this->get('victoire_widget.widget_content_resolver'), $this->get('victoire_widget.widget_renderer'), $this->get('event_dispatcher'), $this->get('doctrine.orm.default_entity_manager'), $this->get('victoire_form.error_helper'), $this->get('request_stack'), $this->get('victoire_widget_map.manager'), $this->get('victoire_widget_map.builder'), $this->get('victoire_business_entity.cache_reader'), $this->get('templating'), $this->get('victoire_page.page_helper'), array('default_menu_bar' => array('max' => 1, 'widgets' => array('menu' => NULL)), 'default_mini_sidebar' => array('widgets' => array('filter' => NULL, 'text' => NULL)), 'default_full' => array('max' => 10, 'widgets' => array('text' => NULL, 'label' => NULL, 'image' => NULL, 'list' => NULL, 'archive' => NULL, 'file' => NULL)), 'default_social_sidebar' => array('widgets' => array('text' => NULL, 'redactor' => NULL, 'label' => NULL, 'image' => NULL, 'list' => NULL, 'archive' => NULL))), $this->get('victoire_business_page.transformer.virtual_to_business_page_transformer'));
    }

    /*
     * Gets the 'victoire_widget.widget_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetBundle\Renderer\WidgetRenderer A Victoire\Bundle\WidgetBundle\Renderer\WidgetRenderer instance
     */
    protected function getVictoireWidget_WidgetRendererService()
    {
        return $this->services['victoire_widget.widget_renderer'] = new \Victoire\Bundle\WidgetBundle\Renderer\WidgetRenderer($this, $this->get('victoire_widget.widget_cache'), $this->get('victoire_widget.widget_helper'), $this->get('victoire_core.victoire_collector'), $this->get('victoire_business_page.business_page_helper'));
    }

    /*
     * Gets the 'victoire_widget.widget_style_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetBundle\Form\WidgetStyleType A Victoire\Bundle\WidgetBundle\Form\WidgetStyleType instance
     */
    protected function getVictoireWidget_WidgetStyleTypeService()
    {
        return $this->services['victoire_widget.widget_style_type'] = new \Victoire\Bundle\WidgetBundle\Form\WidgetStyleType($this->get('kernel'), $this->get('file_locator'));
    }

    /*
     * Gets the 'victoire_widget_map.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetMapBundle\Builder\WidgetMapBuilder A Victoire\Bundle\WidgetMapBundle\Builder\WidgetMapBuilder instance
     */
    protected function getVictoireWidgetMap_BuilderService()
    {
        return $this->services['victoire_widget_map.builder'] = new \Victoire\Bundle\WidgetMapBundle\Builder\WidgetMapBuilder($this->get('victoire_widget_map.contextual_view_warmer'), $this->get('victoire_widget_map.children_resolver'));
    }

    /*
     * Gets the 'victoire_widget_map.children_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetMapBundle\Resolver\WidgetMapChildrenResolver A Victoire\Bundle\WidgetMapBundle\Resolver\WidgetMapChildrenResolver instance
     */
    protected function getVictoireWidgetMap_ChildrenResolverService()
    {
        return $this->services['victoire_widget_map.children_resolver'] = new \Victoire\Bundle\WidgetMapBundle\Resolver\WidgetMapChildrenResolver($this->get('logger'));
    }

    /*
     * Gets the 'victoire_widget_map.contextual_view_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetMapBundle\Warmer\ContextualViewWarmer A Victoire\Bundle\WidgetMapBundle\Warmer\ContextualViewWarmer instance
     */
    protected function getVictoireWidgetMap_ContextualViewWarmerService()
    {
        return $this->services['victoire_widget_map.contextual_view_warmer'] = new \Victoire\Bundle\WidgetMapBundle\Warmer\ContextualViewWarmer();
    }

    /*
     * Gets the 'victoire_widget_map.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetMapBundle\Manager\WidgetMapManager A Victoire\Bundle\WidgetMapBundle\Manager\WidgetMapManager instance
     */
    protected function getVictoireWidgetMap_ManagerService()
    {
        return $this->services['victoire_widget_map.manager'] = new \Victoire\Bundle\WidgetMapBundle\Manager\WidgetMapManager($this->get('doctrine.orm.default_entity_manager'), $this->get('victoire_widget_map.builder'), $this->get('victoire_widget_map.children_resolver'));
    }

    /*
     * Gets the 'victoire_widget_map.widget_data_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Victoire\Bundle\WidgetMapBundle\Warmer\WidgetDataWarmer A Victoire\Bundle\WidgetMapBundle\Warmer\WidgetDataWarmer instance
     */
    protected function getVictoireWidgetMap_WidgetDataWarmerService()
    {
        return $this->services['victoire_widget_map.widget_data_warmer'] = new \Victoire\Bundle\WidgetMapBundle\Warmer\WidgetDataWarmer($this->get('victoire_view_reference.repository'), $this->get('victoire_widget.widget_helper'));
    }

    /*
     * Gets the 'annotations.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader A Doctrine\Common\Annotations\AnnotationReader instance
     */
    protected function getAnnotations_ReaderService()
    {
        return $this->services['annotations.reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /*
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance
     */
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[3].'/app/../web'), false);
    }

    /*
     * Gets the 'cache.annotations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('o2NSV3WKIW', 0, 'MYfBg2oUlptyQ7C3Ob4WQe', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'cache.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_SerializerService()
    {
        return $this->services['cache.serializer'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('+si9XZUmcI', 0, 'MYfBg2oUlptyQ7C3Ob4WQe', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'cache.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('k0V7XpDK96', 0, 'MYfBg2oUlptyQ7C3Ob4WQe', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /*
     * Gets the 'debug.file_link_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter A Symfony\Component\HttpKernel\Debug\FileLinkFormatter instance
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL);
    }

    /*
     * Gets the 'form.server_params' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Util\ServerParams A Symfony\Component\Form\Util\ServerParams instance
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /*
     * Gets the 'fos_user.user_provider.username' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Security\UserProvider A FOS\UserBundle\Security\UserProvider instance
     */
    protected function getFosUser_UserProvider_UsernameService()
    {
        return $this->services['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider($this->get('fos_user.user_manager'));
    }

    /*
     * Gets the 'fos_user.util.canonical_fields_updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater A FOS\UserBundle\Util\CanonicalFieldsUpdater instance
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /*
     * Gets the 'fos_user.util.password_updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater A FOS\UserBundle\Util\PasswordUpdater instance
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        return $this->services['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater($this->get('security.encoder_factory'));
    }

    /*
     * Gets the 'jms_serializer.unserialize_object_constructor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \JMS\Serializer\Construction\UnserializeObjectConstructor A JMS\Serializer\Construction\UnserializeObjectConstructor instance
     */
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }

    /*
     * Gets the 'monolog.processor.psr_log_message' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor A Monolog\Processor\PsrLogMessageProcessor instance
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /*
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'};

        $this->services['security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true);

        $instance->setVoters(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($b), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $a, $b), 3 => $this->get('victoire_business_entity.security.voter.business_entity_owner_voter'), 4 => $this->get('page.security.voter.page_owner'), 5 => $this->get('page.security.voter.page_debug')));

        return $instance;
    }

    /*
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['fos_user.user_provider.username']) ? $this->services['fos_user.user_provider.username'] : $this->getFosUser_UserProvider_UsernameService()) && false ?: '_'}, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'}, 'main', $this->get('security.encoder_factory'), true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('594831ac756863.97507592')), true);

        $instance->setEventDispatcher($this->get('event_dispatcher'));

        return $instance;
    }

    /*
     * Gets the 'security.authentication.session_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy A Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy instance
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /*
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /*
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /*
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_VICTOIRE_DEVELOPER' => array(0 => 'ROLE_VICTOIRE', 1 => 'ROLE_VICTOIRE_BLOG', 2 => 'ROLE_VICTOIRE_LEFTNAVBAR', 3 => 'ROLE_VICTOIRE_BET', 4 => 'ROLE_VICTOIRE_PAGE_DEBUG', 5 => 'ROLE_VICTOIRE_STYLE'), 'BUSINESS_ENTITY_OWNER' => array()));
    }

    /*
     * Gets the 'security.user_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance
     */
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /*
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /*
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /*
     * Gets the 'translator.selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Translation\MessageSelector A Symfony\Component\Translation\MessageSelector instance
     */
    protected function getTranslator_SelectorService()
    {
        return $this->services['translator.selector'] = new \Symfony\Component\Translation\MessageSelector();
    }

    /*
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    /*
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]);
    }

    /*
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /*
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'session.save_path' => false,
        'router.resource' => false,
        'assetic.read_from' => false,
        'assetic.write_to' => false,
        'victoire_core.base_paths' => false,
    );
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/app'); break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'AppBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AppBundle'),
                    'namespace' => 'AppBundle',
                ),
                'A2lixTranslationFormBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/a2lix/translation-form-bundle/A2lix/TranslationFormBundle'),
                    'namespace' => 'A2lix\\TranslationFormBundle',
                ),
                'BazingaJsTranslationBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/willdurand/js-translation-bundle'),
                    'namespace' => 'Bazinga\\Bundle\\JsTranslationBundle',
                ),
                'AsseticBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/assetic-bundle'),
                    'namespace' => 'Symfony\\Bundle\\AsseticBundle',
                ),
                'TroopersAsseticInjectorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/troopers/assetic-injector-bundle/Troopers/AsseticInjectorBundle'),
                    'namespace' => 'Troopers\\AsseticInjectorBundle',
                ),
                'TroopersAlertifyBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/troopers/alertify-bundle/Troopers/AlertifyBundle'),
                    'namespace' => 'Troopers\\AlertifyBundle',
                ),
                'FOSUserBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ),
                'FOSJsRoutingBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/jsrouting-bundle'),
                    'namespace' => 'FOS\\JsRoutingBundle',
                ),
                'JMSSerializerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/jms/serializer-bundle/JMS/SerializerBundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ),
                'LiipImagineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/liip/imagine-bundle'),
                    'namespace' => 'Liip\\ImagineBundle',
                ),
                'KnpMenuBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ),
                'DoctrineBehaviorsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/knplabs/doctrine-behaviors/src/Bundle'),
                    'namespace' => 'Knp\\DoctrineBehaviors\\Bundle',
                ),
                'SncRedisBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/snc/redis-bundle'),
                    'namespace' => 'Snc\\RedisBundle',
                ),
                'StofDoctrineExtensionsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/stof/doctrine-extensions-bundle'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ),
                'VictoireAnalyticsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/AnalyticsBundle'),
                    'namespace' => 'Victoire\\Bundle\\AnalyticsBundle',
                ),
                'VictoireBlogBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BlogBundle'),
                    'namespace' => 'Victoire\\Bundle\\BlogBundle',
                ),
                'VictoireBusinessEntityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessEntityBundle'),
                    'namespace' => 'Victoire\\Bundle\\BusinessEntityBundle',
                ),
                'VictoireBusinessPageBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/BusinessPageBundle'),
                    'namespace' => 'Victoire\\Bundle\\BusinessPageBundle',
                ),
                'VictoireCoreBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CoreBundle'),
                    'namespace' => 'Victoire\\Bundle\\CoreBundle',
                ),
                'VictoireCriteriaBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/CriteriaBundle'),
                    'namespace' => 'Victoire\\Bundle\\CriteriaBundle',
                ),
                'VictoireFilterBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/FilterBundle'),
                    'namespace' => 'Victoire\\Bundle\\FilterBundle',
                ),
                'VictoireFormBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/FormBundle'),
                    'namespace' => 'Victoire\\Bundle\\FormBundle',
                ),
                'VictoireI18nBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/I18nBundle'),
                    'namespace' => 'Victoire\\Bundle\\I18nBundle',
                ),
                'VictoireMediaBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/MediaBundle'),
                    'namespace' => 'Victoire\\Bundle\\MediaBundle',
                ),
                'VictoirePageBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/PageBundle'),
                    'namespace' => 'Victoire\\Bundle\\PageBundle',
                ),
                'VictoireQueryBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/QueryBundle'),
                    'namespace' => 'Victoire\\Bundle\\QueryBundle',
                ),
                'VictoireSeoBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SeoBundle'),
                    'namespace' => 'Victoire\\Bundle\\SeoBundle',
                ),
                'VictoireSitemapBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/SitemapBundle'),
                    'namespace' => 'Victoire\\Bundle\\SitemapBundle',
                ),
                'VictoireTemplateBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TemplateBundle'),
                    'namespace' => 'Victoire\\Bundle\\TemplateBundle',
                ),
                'VictoireTwigBundle' => array(
                    'parent' => 'TwigBundle',
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/TwigBundle'),
                    'namespace' => 'Victoire\\Bundle\\TwigBundle',
                ),
                'VictoireUIBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UIBundle'),
                    'namespace' => 'Victoire\\Bundle\\UIBundle',
                ),
                'VictoireUserBundle' => array(
                    'parent' => 'FOSUserBundle',
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/UserBundle'),
                    'namespace' => 'Victoire\\Bundle\\UserBundle',
                ),
                'ViewReferenceBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/ViewReferenceBundle'),
                    'namespace' => 'Victoire\\Bundle\\ViewReferenceBundle',
                ),
                'VictoireWidgetBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/WidgetBundle'),
                    'namespace' => 'Victoire\\Bundle\\WidgetBundle',
                ),
                'VictoireWidgetMapBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/victoire/victoire/Bundle/WidgetMapBundle'),
                    'namespace' => 'Victoire\\Bundle\\WidgetMapBundle',
                ),
            ); break;
            case 'session.save_path': $value = ($this->targetDirs[3].'/app/../var/sessions/prod'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'/app/config/routing.yml'); break;
            case 'assetic.read_from': $value = ($this->targetDirs[3].'/app/../web'); break;
            case 'assetic.write_to': $value = ($this->targetDirs[3].'/app/../web'); break;
            case 'victoire_core.base_paths': $value = array(
                0 => ($this->targetDirs[3].'/app/../src'),
                1 => ($this->targetDirs[3].'/app/../vendor/victoire'),
                2 => ($this->targetDirs[3].'/app/../vendor/friendsofvictoire'),
            ); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle',
                'BazingaJsTranslationBundle' => 'Bazinga\\Bundle\\JsTranslationBundle\\BazingaJsTranslationBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'TroopersAsseticInjectorBundle' => 'Troopers\\AsseticInjectorBundle\\TroopersAsseticInjectorBundle',
                'TroopersAlertifyBundle' => 'Troopers\\AlertifyBundle\\TroopersAlertifyBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'DoctrineBehaviorsBundle' => 'Knp\\DoctrineBehaviors\\Bundle\\DoctrineBehaviorsBundle',
                'SncRedisBundle' => 'Snc\\RedisBundle\\SncRedisBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'VictoireAnalyticsBundle' => 'Victoire\\Bundle\\AnalyticsBundle\\VictoireAnalyticsBundle',
                'VictoireBlogBundle' => 'Victoire\\Bundle\\BlogBundle\\VictoireBlogBundle',
                'VictoireBusinessEntityBundle' => 'Victoire\\Bundle\\BusinessEntityBundle\\VictoireBusinessEntityBundle',
                'VictoireBusinessPageBundle' => 'Victoire\\Bundle\\BusinessPageBundle\\VictoireBusinessPageBundle',
                'VictoireCoreBundle' => 'Victoire\\Bundle\\CoreBundle\\VictoireCoreBundle',
                'VictoireCriteriaBundle' => 'Victoire\\Bundle\\CriteriaBundle\\VictoireCriteriaBundle',
                'VictoireFilterBundle' => 'Victoire\\Bundle\\FilterBundle\\VictoireFilterBundle',
                'VictoireFormBundle' => 'Victoire\\Bundle\\FormBundle\\VictoireFormBundle',
                'VictoireI18nBundle' => 'Victoire\\Bundle\\I18nBundle\\VictoireI18nBundle',
                'VictoireMediaBundle' => 'Victoire\\Bundle\\MediaBundle\\VictoireMediaBundle',
                'VictoirePageBundle' => 'Victoire\\Bundle\\PageBundle\\VictoirePageBundle',
                'VictoireQueryBundle' => 'Victoire\\Bundle\\QueryBundle\\VictoireQueryBundle',
                'VictoireSeoBundle' => 'Victoire\\Bundle\\SeoBundle\\VictoireSeoBundle',
                'VictoireSitemapBundle' => 'Victoire\\Bundle\\SitemapBundle\\VictoireSitemapBundle',
                'VictoireTemplateBundle' => 'Victoire\\Bundle\\TemplateBundle\\VictoireTemplateBundle',
                'VictoireTwigBundle' => 'Victoire\\Bundle\\TwigBundle\\VictoireTwigBundle',
                'VictoireUIBundle' => 'Victoire\\Bundle\\UIBundle\\VictoireUIBundle',
                'VictoireUserBundle' => 'Victoire\\Bundle\\UserBundle\\VictoireUserBundle',
                'ViewReferenceBundle' => 'Victoire\\Bundle\\ViewReferenceBundle\\ViewReferenceBundle',
                'VictoireWidgetBundle' => 'Victoire\\Bundle\\WidgetBundle\\VictoireWidgetBundle',
                'VictoireWidgetMapBundle' => 'Victoire\\Bundle\\WidgetMapBundle\\VictoireWidgetMapBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'database_host' => 'db',
            'database_port' => NULL,
            'database_name' => 'victoire',
            'database_user' => 'victoire',
            'database_password' => 'victoire',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => '0b1f529bfd1e2214cc16881ae978db041c8bee6f',
            'fos_js_base_url' => 'https://victoire.io',
            'victoire_redis_path' => 'redis://redis',
            'locale_pattern_table' => array(
                'io.victoire.dev' => 'fr',
                'victoire.io' => 'fr',
            ),
            'locale' => 'en',
            'victoire_media.upload_dir' => '/uploads/media/',
            'victoire_search_pages_index' => array(
                'types' => array(
                    'Pages' => array(
                        'serializer' => array(
                            'groups' => array(
                                0 => 'search',
                            ),
                        ),
                        'mappings' => array(
                            'translations' => array(
                                'type' => 'nested',
                                'properties' => array(
                                    'name' => NULL,
                                    'locale' => NULL,
                                ),
                            ),
                        ),
                        'persistence' => array(
                            'driver' => 'orm',
                            'model' => 'Victoire\\Bundle\\PageBundle\\Entity\\BasePage',
                            'provider' => array(

                            ),
                            'listener' => array(

                            ),
                            'finder' => array(

                            ),
                        ),
                    ),
                ),
            ),
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => '0b1f529bfd1e2214cc16881ae978db041c8bee6f',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.cache.file' => (__DIR__.'/validation.php'),
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'data_collector.templates' => array(

            ),
            'debug.error_handler.throw_at' => 0,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appProdProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appProdProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appProdProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.file' => (__DIR__.'/serialization.php'),
            'serializer.mapping.cache.prefix' => '',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_VICTOIRE_DEVELOPER' => array(
                    0 => 'ROLE_VICTOIRE',
                    1 => 'ROLE_VICTOIRE_BLOG',
                    2 => 'ROLE_VICTOIRE_LEFTNAVBAR',
                    3 => 'ROLE_VICTOIRE_BET',
                    4 => 'ROLE_VICTOIRE_PAGE_DEBUG',
                    5 => 'ROLE_VICTOIRE_STYLE',
                ),
                'BUSINESS_ENTITY_OWNER' => array(

                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'LiipImagineBundle:Form:form_div_layout.html.twig',
                2 => 'VictoireMediaBundle:Form:formWidgets.html.twig',
                3 => 'A2lixTranslationFormBundle::default.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'a2lix_translation_form.locales' => array(
                0 => 'fr',
                1 => 'en',
            ),
            'a2lix_translation_form.required_locales' => array(

            ),
            'a2lix_translation_form.default.service.translation.class' => 'A2lix\\TranslationFormBundle\\TranslationForm\\TranslationForm',
            'a2lix_translation_form.default.service.parameter_locale_provider.class' => 'A2lix\\TranslationFormBundle\\Locale\\DefaultProvider',
            'a2lix_translation_form.default.listener.translations.class' => 'A2lix\\TranslationFormBundle\\Form\\EventListener\\TranslationsListener',
            'a2lix_translation_form.default.listener.translationsforms.class' => 'A2lix\\TranslationFormBundle\\Form\\EventListener\\TranslationsFormsListener',
            'a2lix_translation_form.default.type.translations.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsType',
            'a2lix_translation_form.default.type.translationsfields.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFieldsType',
            'a2lix_translation_form.default.type.translationsforms.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFormsType',
            'a2lix_translation_form.default.type.translationslocalesselector.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsLocalesSelectorType',
            'a2lix_translation_form.default.type.translatedentity.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslatedEntityType',
            'a2lix_translation_form.locale_provider' => 'default',
            'a2lix_translation_form.default_locale' => 'en',
            'a2lix_translation_form.templating' => 'A2lixTranslationFormBundle::default.html.twig',
            'bazinga.jstranslation.translation_finder.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Finder\\TranslationFinder',
            'bazinga.jstranslation.translation_dumper.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Dumper\\TranslationDumper',
            'bazinga.jstranslation.controller.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Controller\\Controller',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(
                0 => '/usr/lib/node_modules',
            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'FrameworkBundle',
                1 => 'SecurityBundle',
                2 => 'TwigBundle',
                3 => 'MonologBundle',
                4 => 'SwiftmailerBundle',
                5 => 'DoctrineBundle',
                6 => 'SensioFrameworkExtraBundle',
                7 => 'AppBundle',
                8 => 'A2lixTranslationFormBundle',
                9 => 'BazingaJsTranslationBundle',
                10 => 'AsseticBundle',
                11 => 'TroopersAsseticInjectorBundle',
                12 => 'TroopersAlertifyBundle',
                13 => 'FOSUserBundle',
                14 => 'FOSJsRoutingBundle',
                15 => 'JMSSerializerBundle',
                16 => 'LiipImagineBundle',
                17 => 'KnpMenuBundle',
                18 => 'DoctrineBehaviorsBundle',
                19 => 'SncRedisBundle',
                20 => 'StofDoctrineExtensionsBundle',
                21 => 'VictoireAnalyticsBundle',
                22 => 'VictoireBlogBundle',
                23 => 'VictoireBusinessEntityBundle',
                24 => 'VictoireBusinessPageBundle',
                25 => 'VictoireCoreBundle',
                26 => 'VictoireCriteriaBundle',
                27 => 'VictoireFilterBundle',
                28 => 'VictoireFormBundle',
                29 => 'VictoireI18nBundle',
                30 => 'VictoireMediaBundle',
                31 => 'VictoirePageBundle',
                32 => 'VictoireQueryBundle',
                33 => 'VictoireSeoBundle',
                34 => 'VictoireSitemapBundle',
                35 => 'VictoireTemplateBundle',
                36 => 'VictoireTwigBundle',
                37 => 'VictoireUIBundle',
                38 => 'VictoireUserBundle',
                39 => 'ViewReferenceBundle',
                40 => 'VictoireWidgetBundle',
                41 => 'VictoireWidgetMapBundle',
            ),
            'assetic.twig_extension.class' => 'Troopers\\AsseticInjectorBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.filter.less.class' => 'Assetic\\Filter\\LessFilter',
            'assetic.filter.less.node' => '/usr/bin/node',
            'assetic.filter.less.node_paths' => array(
                0 => '/usr/lib/node_modules',
            ),
            'assetic.filter.less.timeout' => NULL,
            'assetic.filter.less.compress' => NULL,
            'assetic.filter.less.load_paths' => array(

            ),
            'assetic.twig_extension.functions' => array(

            ),
            'troopers_assetic_injector.collector.class' => 'Troopers\\AsseticInjectorBundle\\AssetsCollector\\Collector',
            'alertify.twig.extension.class' => 'Troopers\\AlertifyBundle\\Twig\\Extension\\AlertifyExtension',
            'alertify.handler.session.class' => 'Troopers\\AlertifyBundle\\Handler\\AlertifySessionHandler',
            'alertify.helper.class' => 'Troopers\\AlertifyBundle\\Helper\\AlertifyHelper',
            'alertify.event_listener' => 'Troopers\\AlertifyBundle\\EventListener\\AlertifyListener',
            'troopers_alertify' => array(
                'contexts' => array(
                    'victoire' => array(
                        'engine' => 'codrops-notification',
                        'translationDomain' => 'victoire',
                        'layout' => NULL,
                        'timeout' => NULL,
                        'options' => array(

                        ),
                    ),
                ),
                'default' => array(
                    'context' => 'front',
                    'engine' => 'toastr',
                    'layout' => NULL,
                    'translationDomain' => 'alertify',
                ),
            ),
            'troopers_alertify.contexts' => array(
                'victoire' => array(
                    'engine' => 'codrops-notification',
                    'translationDomain' => 'victoire',
                    'layout' => NULL,
                    'timeout' => NULL,
                    'options' => array(

                    ),
                ),
            ),
            'troopers_alertify.default.context' => 'front',
            'troopers_alertify.default.engine' => 'toastr',
            'troopers_alertify.default.layout' => NULL,
            'troopers_alertify.default.translationdomain' => 'alertify',
            'troopers_alertify.contexts.victoire' => array(
                'engine' => 'codrops-notification',
                'translationDomain' => 'victoire',
                'layout' => NULL,
                'timeout' => NULL,
                'options' => array(

                ),
            ),
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Victoire\\Bundle\\UserBundle\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'hey@victoire.io' => 'Victoire',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'hey@victoire.io' => 'Victoire',
            ),
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fos_js_routing.extractor.class' => 'FOS\\JsRoutingBundle\\Extractor\\ExposedRoutesExtractor',
            'fos_js_routing.controller.class' => 'FOS\\JsRoutingBundle\\Controller\\Controller',
            'fos_js_routing.cache_control' => array(
                'enabled' => false,
            ),
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.identical_property_naming_strategy.class' => 'JMS\\Serializer\\Naming\\IdenticalPropertyNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.twig_runtime_extension.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeExtension',
            'jms_serializer.twig_runtime_extension_helper.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeHelper',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(

            ),
            'jms_serializer.xml_serialization_visitor.format_output' => true,
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.configured_context_factory.class' => 'JMS\\SerializerBundle\\ContextFactory\\ConfiguredContextFactory',
            'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator',
            'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage',
            'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider',
            'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy',
            'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy',
            'liip_imagine.filter.configuration.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterConfiguration',
            'liip_imagine.filter.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterManager',
            'liip_imagine.data.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\DataManager',
            'liip_imagine.cache.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheManager',
            'liip_imagine.cache.signer.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Signer',
            'liip_imagine.binary.mime_type_guesser.class' => 'Liip\\ImagineBundle\\Binary\\SimpleMimeTypeGuesser',
            'liip_imagine.controller.class' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'liip_imagine.twig.extension.class' => 'Liip\\ImagineBundle\\Templating\\ImagineExtension',
            'liip_imagine.templating.helper.class' => 'Liip\\ImagineBundle\\Templating\\Helper\\ImagineHelper',
            'liip_imagine.gd.class' => 'Imagine\\Gd\\Imagine',
            'liip_imagine.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'liip_imagine.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'liip_imagine.filter.loader.relative_resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RelativeResizeFilterLoader',
            'liip_imagine.filter.loader.resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ResizeFilterLoader',
            'liip_imagine.filter.loader.thumbnail.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ThumbnailFilterLoader',
            'liip_imagine.filter.loader.crop.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\CropFilterLoader',
            'liip_imagine.filter.loader.grayscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\GrayscaleFilterLoader',
            'liip_imagine.filter.loader.paste.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\PasteFilterLoader',
            'liip_imagine.filter.loader.watermark.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\WatermarkFilterLoader',
            'liip_imagine.filter.loader.strip.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\StripFilterLoader',
            'liip_imagine.filter.loader.background.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\BackgroundFilterLoader',
            'liip_imagine.filter.loader.scale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ScaleFilterLoader',
            'liip_imagine.filter.loader.upscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\UpscaleFilterLoader',
            'liip_imagine.filter.loader.downscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\DownscaleFilterLoader',
            'liip_imagine.filter.loader.auto_rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\AutoRotateFilterLoader',
            'liip_imagine.filter.loader.rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RotateFilterLoader',
            'liip_imagine.filter.loader.flip.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\FlipFilterLoader',
            'liip_imagine.filter.loader.interlace.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\InterlaceFilterLoader',
            'liip_imagine.binary.loader.filesystem.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\FileSystemLoader',
            'liip_imagine.binary.loader.stream.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\StreamLoader',
            'liip_imagine.binary.loader.flysystem.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\FlysystemLoader',
            'liip_imagine.binary.locator.filesystem.class' => 'Liip\\ImagineBundle\\Binary\\Locator\\FileSystemLocator',
            'liip_imagine.binary.locator.filesystem_insecure.class' => 'Liip\\ImagineBundle\\Binary\\Locator\\FileSystemInsecureLocator',
            'liip_imagine.cache.resolver.web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\WebPathResolver',
            'liip_imagine.cache.resolver.no_cache_web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\NoCacheWebPathResolver',
            'liip_imagine.cache.resolver.aws_s3.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\AwsS3Resolver',
            'liip_imagine.cache.resolver.cache.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\CacheResolver',
            'liip_imagine.cache.resolver.flysystem.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\FlysystemResolver',
            'liip_imagine.cache.resolver.proxy.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\ProxyResolver',
            'liip_imagine.form.type.image.class' => 'Liip\\ImagineBundle\\Form\\Type\\ImageType',
            'liip_imagine.meta_data.reader.class' => 'Imagine\\Image\\Metadata\\ExifMetadataReader',
            'liip_imagine.filter.post_processor.jpegoptim.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\JpegOptimPostProcessor',
            'liip_imagine.jpegoptim.binary' => '/usr/bin/jpegoptim',
            'liip_imagine.jpegoptim.stripall' => true,
            'liip_imagine.jpegoptim.max' => NULL,
            'liip_imagine.jpegoptim.progressive' => true,
            'liip_imagine.jpegoptim.tempdir' => NULL,
            'liip_imagine.filter.post_processor.optipng.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\OptiPngPostProcessor',
            'liip_imagine.optipng.binary' => '/usr/bin/optipng',
            'liip_imagine.optipng.level' => 7,
            'liip_imagine.optipng.stripall' => true,
            'liip_imagine.optipng.tempdir' => NULL,
            'liip_imagine.filter.post_processor.pngquant.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\PngquantPostProcessor',
            'liip_imagine.pngquant.binary' => '/usr/bin/pngquant',
            'liip_imagine.filter.post_processor.mozjpeg.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\MozJpegPostProcessor',
            'liip_imagine.mozjpeg.binary' => '/opt/mozjpeg/bin/cjpeg',
            'liip_imagine.cache.resolver.default' => 'default',
            'liip_imagine.default_image' => NULL,
            'liip_imagine.filter_sets' => array(
                'media_list_thumbnail' => array(
                    'quality' => 75,
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 210,
                                1 => 150,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'media_detail_thumbnail' => array(
                    'quality' => 75,
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 500,
                                1 => 500,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
            ),
            'liip_imagine.binary.loader.default' => 'filesystem',
            'liip_imagine.controller.filter_action' => 'liip_imagine.controller:filterAction',
            'liip_imagine.controller.filter_runtime_action' => 'liip_imagine.controller:filterRuntimeAction',
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => 'VictoireCoreBundle:Menu:knp_menu_main.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'knp.doctrine_behaviors.reflection.class_analyzer.class' => 'Knp\\DoctrineBehaviors\\Reflection\\ClassAnalyzer',
            'knp.doctrine_behaviors.reflection.is_recursive' => true,
            'knp.doctrine_behaviors.translatable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\TranslatableSubscriber',
            'knp.doctrine_behaviors.translatable_subscriber.current_locale_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\CurrentLocaleCallable',
            'knp.doctrine_behaviors.translatable_subscriber.default_locale_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\DefaultLocaleCallable',
            'knp.doctrine_behaviors.translatable_subscriber.translatable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translatable',
            'knp.doctrine_behaviors.translatable_subscriber.translation_trait' => 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translation',
            'knp.doctrine_behaviors.translatable_subscriber.translatable_fetch_method' => 'LAZY',
            'knp.doctrine_behaviors.translatable_subscriber.translation_fetch_method' => 'LAZY',
            'knp.doctrine_behaviors.softdeletable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\SoftDeletable\\SoftDeletableSubscriber',
            'knp.doctrine_behaviors.softdeletable_subscriber.softdeletable_trait' => 'Knp\\DoctrineBehaviors\\Model\\SoftDeletable\\SoftDeletable',
            'knp.doctrine_behaviors.timestampable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Timestampable\\TimestampableSubscriber',
            'knp.doctrine_behaviors.timestampable_subscriber.timestampable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Timestampable\\Timestampable',
            'knp.doctrine_behaviors.timestampable_subscriber.db_field_type' => 'datetime',
            'knp.doctrine_behaviors.blameable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Blameable\\BlameableSubscriber',
            'knp.doctrine_behaviors.blameable_subscriber.blameable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Blameable\\Blameable',
            'knp.doctrine_behaviors.blameable_subscriber.user_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Blameable\\UserCallable',
            'knp.doctrine_behaviors.blameable_subscriber.user_entity' => NULL,
            'knp.doctrine_behaviors.loggable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Loggable\\LoggableSubscriber',
            'knp.doctrine_behaviors.loggable_subscriber.logger_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Loggable\\LoggerCallable',
            'knp.doctrine_behaviors.geocodable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Geocodable\\GeocodableSubscriber',
            'knp.doctrine_behaviors.geocodable_subscriber.geocodable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Geocodable\\Geocodable',
            'knp.doctrine_behaviors.sluggable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Sluggable\\SluggableSubscriber',
            'knp.doctrine_behaviors.sluggable_subscriber.sluggable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Sluggable\\Sluggable',
            'knp.doctrine_behaviors.tree_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Tree\\TreeSubscriber',
            'knp.doctrine_behaviors.tree_subscriber.tree_trait' => 'Knp\\DoctrineBehaviors\\Model\\Tree\\Node',
            'knp.doctrine_behaviors.sortable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Sortable\\SortableSubscriber',
            'knp.doctrine_behaviors.sortable_subscriber.sortable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Sortable\\Sortable',
            'snc_redis.client.class' => 'Predis\\Client',
            'snc_redis.client_options.class' => 'Predis\\Configuration\\Options',
            'snc_redis.connection_parameters.class' => 'Predis\\Connection\\Parameters',
            'snc_redis.connection_factory.class' => 'Snc\\RedisBundle\\Client\\Predis\\Connection\\ConnectionFactory',
            'snc_redis.connection_wrapper.class' => 'Snc\\RedisBundle\\Client\\Predis\\Connection\\ConnectionWrapper',
            'snc_redis.phpredis_client.class' => 'Redis',
            'snc_redis.phpredis_connection_wrapper.class' => 'Snc\\RedisBundle\\Client\\Phpredis\\Client',
            'snc_redis.logger.class' => 'Snc\\RedisBundle\\Logger\\RedisLogger',
            'snc_redis.data_collector.class' => 'Snc\\RedisBundle\\DataCollector\\RedisDataCollector',
            'snc_redis.doctrine_cache_phpredis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'snc_redis.doctrine_cache_predis.class' => 'Doctrine\\Common\\Cache\\PredisCache',
            'snc_redis.monolog_handler.class' => 'Monolog\\Handler\\RedisHandler',
            'snc_redis.swiftmailer_spool.class' => 'Snc\\RedisBundle\\SwiftMailer\\RedisSpool',
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'en_US',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'victoire_analytics_browser_event_subscriber' => 'Victoire\\Bundle\\AnalyticsBundle\\EventSubscriber\\BrowseEventSubscriber',
            'victoire_analytics_view_helper_class' => 'Victoire\\Bundle\\AnalyticsBundle\\Helper\\AnalyticsViewHelper',
            'victoire_blog_tag_filters_form_type_class' => 'Victoire\\Bundle\\BlogBundle\\Filter\\TagFilter',
            'victoire_blog_category_filters_form_type_class' => 'Victoire\\Bundle\\BlogBundle\\Filter\\CategoryFilter',
            'victoire_blog_date_filters_form_type_class' => 'Victoire\\Bundle\\BlogBundle\\Filter\\DateFilter',
            'victoire_business_entity.annotation_driver_class' => 'Victoire\\Bundle\\BusinessEntityBundle\\Annotation\\AnnotationDriver',
            'victoire_business_entity.business_entity_subscriber_class' => 'Victoire\\Bundle\\BusinessEntityBundle\\EventSubscriber\\BusinessEntitySubscriber',
            'victoire_business_entity.business_entity_type_extension_class' => 'Victoire\\Bundle\\BusinessEntityBundle\\Form\\Extension\\BusinessEntityTypeExtension',
            'victoire_business_entity.converter.parameter_converter_class' => 'Victoire\\Bundle\\BusinessEntityBundle\\Converter\\ParameterConverter',
            'victoire_business_entity.cache_reader_class' => 'Victoire\\Bundle\\BusinessEntityBundle\\Reader\\BusinessEntityCacheReader',
            'victoire_business_entity.metadata_listener_class' => 'Victoire\\Bundle\\BusinessEntityBundle\\Listener\\MetadataListener',
            'victoire_business_entity.metadata_builder_class' => 'Victoire\\Bundle\\BusinessEntityBundle\\Doctrine\\MetadataBuilder',
            'victoire_business_page.businesstemplate_chain.class' => 'Victoire\\Bundle\\BusinessPageBundle\\Chain\\BusinessTemplateChain',
            'victoire_business_page.businesstemplate_chain.businesstemplate.class' => 'Victoire\\Bundle\\BusinessPageBundle\\Entity\\BusinessTemplate',
            'victoire_core.cache_dir' => (__DIR__.'/victoire'),
            'victoire_core.business_entity_debug' => true,
            'victoire_core.templates' => array(
                'layout' => 'VictoireCoreBundle:Layout:layout.html.twig',
            ),
            'victoire_core.widgets' => array(

            ),
            'victoire_core.layouts' => array(
                'defaultLayout' => 'Default layout',
            ),
            'victoire_core.modal_layouts' => array(
                0 => 'modal',
            ),
            'victoire_core.slots' => array(
                'default_menu_bar' => array(
                    'max' => 1,
                    'widgets' => array(
                        'menu' => NULL,
                    ),
                ),
                'default_mini_sidebar' => array(
                    'widgets' => array(
                        'filter' => NULL,
                        'text' => NULL,
                    ),
                ),
                'default_full' => array(
                    'max' => 10,
                    'widgets' => array(
                        'text' => NULL,
                        'label' => NULL,
                        'image' => NULL,
                        'list' => NULL,
                        'archive' => NULL,
                        'file' => NULL,
                    ),
                ),
                'default_social_sidebar' => array(
                    'widgets' => array(
                        'text' => NULL,
                        'redactor' => NULL,
                        'label' => NULL,
                        'image' => NULL,
                        'list' => NULL,
                        'archive' => NULL,
                    ),
                ),
            ),
            'victoire_core.user_class' => 'Victoire\\Bundle\\UserBundle\\Entity\\User',
            'victoire_core.businesstemplates' => NULL,
            'victoire_core.domain_name' => array(

            ),
            'victoire_form.twig.extension.form.class' => 'Victoire\\Bundle\\FormBundle\\Twig\\FormExtension',
            'victoire_form.twig.extension.icon.class' => 'Victoire\\Bundle\\FormBundle\\Twig\\IconExtension',
            'victoire_form.twig.extension.flash.class' => 'Victoire\\Bundle\\FormBundle\\Twig\\FlashExtension',
            'victoire_form.form.type_extension.vic_static_text.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Extension\\StaticTextExtension',
            'victoire_form.form.type_extension.vic_offset_button.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Extension\\OffsetButtonExtension',
            'victoire_form.form.type_extension.vic_button.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Extension\\IconButtonExtension',
            'victoire_form.form.type_extension.vic_help.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Extension\\HelpFormTypeExtension',
            'victoire_form.form.type_extension.vic_business_property_picker.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Extension\\BusinessPropertyPickerTypeExtension',
            'victoire_form.form.type_extension.vic_legend.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Extension\\LegendFormTypeExtension',
            'victoire_form.form.type_extension.vic_error.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Extension\\ErrorTypeFormTypeExtension',
            'victoire_form.form.type_extension.vic_widget.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Extension\\WidgetFormTypeExtension',
            'victoire_form.form.type_extension.vic_horizontal.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Extension\\HorizontalFormTypeExtension',
            'victoire_form.form.type_extension.vic_widget_collection.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Extension\\WidgetCollectionFormTypeExtension',
            'victoire_form.form.type_extension.vic_date.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Extension\\DateTypeExtension',
            'victoire_form.form.type_extension.vic_datetime.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Extension\\DatetimeTypeExtension',
            'victoire_form.form.type_extension.vic_time.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Extension\\TimeTypeExtension',
            'victoire_form.form.type_extension.vic_tabbed.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Extension\\TabbedFormTypeExtension',
            'victoire_form.form.type.vic_tab.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Type\\TabType',
            'victoire_form.form.type.vic_form_actions.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Type\\FormActionsType',
            'victoire_form.form.type.vic_link.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Type\\LinkType',
            'victoire_form.form.type.font_awesome_picker.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Type\\FontAwesomePickerType',
            'victoire_form.form.type.slug.class' => 'Victoire\\Bundle\\FormBundle\\Form\\Type\\SlugType',
            'victoire_form.form.templating' => 'VictoireFormBundle:Form:fields.html.twig',
            'victoire_form.form.vic_horizontal' => true,
            'victoire_form.form.vic_horizontal_label_class' => '',
            'victoire_form.form.vic_horizontal_label_offset_class' => 'vic-col-lg-offset-3',
            'victoire_form.form.vic_horizontal_input_wrapper_class' => '',
            'victoire_form.form.vic_render_fieldset' => true,
            'victoire_form.form.vic_render_collection_item' => false,
            'victoire_form.form.vic_show_legend' => true,
            'victoire_form.form.vic_show_child_legend' => false,
            'victoire_form.form.vic_legend_tag' => 'legend',
            'victoire_form.form.vic_checkbox_label' => 'both',
            'victoire_form.form.vic_render_optional_text' => true,
            'victoire_form.form.vic_render_required_asterisk' => true,
            'victoire_form.form.vic_error_type' => NULL,
            'victoire_form.form.tabs.class' => 'vic-nav vic-nav-tabs',
            'victoire_form.form.vic_help_widget.popover' => array(
                'title' => NULL,
                'content' => NULL,
                'trigger' => 'hover',
                'toggle' => 'vic-popover',
                'placement' => 'right',
                'selector' => NULL,
            ),
            'victoire_form.form.vic_help_label.tooltip' => array(
                'title' => NULL,
                'text' => NULL,
                'icon' => 'vic-info-sign',
                'placement' => 'top',
            ),
            'victoire_form.form.vic_help_label.popover' => array(
                'title' => NULL,
                'content' => NULL,
                'text' => NULL,
                'icon' => 'vic-info-sign',
                'placement' => 'top',
            ),
            'victoire_form.form.collection.vic_widget_remove_btn' => array(
                'attr' => array(
                    'class' => 'btn btn-default',
                ),
                'wrapper_div' => array(
                    'class' => 'vic-col-lg-3',
                ),
                'label' => 'victoire.collection.button.label.remove_item',
                'icon' => NULL,
                'icon_inverted' => false,
            ),
            'victoire_form.form.collection.vic_widget_add_btn' => array(
                'attr' => array(
                    'class' => 'vic-btn vic-btn-default',
                ),
                'label' => 'victoire.collection.button.label.add_item',
                'icon' => NULL,
                'icon_inverted' => false,
            ),
            'victoire_form.icons.icon_set' => 'glyphicons',
            'victoire_form.icons.shortcut' => 'icon',
            'victoire_i18n.available_locales' => array(
                0 => 'fr',
                1 => 'en',
            ),
            'victoire_i18n.locale_pattern_table' => array(

            ),
            'victoire_i18n.victoire_locale' => 'fr',
            'victoire_i18n.users_locale.domains' => array(
                0 => 'victoire',
            ),
            'victoire_i18n.locale_pattern' => 'parameter',
            'victoire_media.media_manager.class' => 'Victoire\\Bundle\\MediaBundle\\Helper\\MediaManager',
            'victoire_media.menu.adaptor.class' => 'Victoire\\Bundle\\MediaBundle\\Helper\\Menu\\MediaMenuAdaptor',
            'victoire_media.listener.doctrine.class' => 'Victoire\\Bundle\\MediaBundle\\EventListener\\DoctrineMediaListener',
            'victoire_media.form.type.media.class' => 'Victoire\\Bundle\\MediaBundle\\Form\\Type\\MediaType',
            'victoire_media.media_creator_service.class' => 'Victoire\\Bundle\\MediaBundle\\Helper\\Services\\MediaCreatorService',
            'victoire_media.menubuilder.class' => 'Victoire\\Bundle\\MediaBundle\\Helper\\Menu\\MenuBuilder',
            'victoire_media.media_handler.remote_slide.class' => 'Victoire\\Bundle\\MediaBundle\\Helper\\RemoteSlide\\RemoteSlideHandler',
            'victoire_media.media_handler.remote_video.class' => 'Victoire\\Bundle\\MediaBundle\\Helper\\RemoteVideo\\RemoteVideoHandler',
            'victoire_media.media_handler.image.class' => 'Victoire\\Bundle\\MediaBundle\\Helper\\Image\\ImageHandler',
            'victoire_media.media_handler.file.class' => 'Victoire\\Bundle\\MediaBundle\\Helper\\File\\FileHandler',
            'aviary_api_key' => NULL,
            'victoire_seo.analytics' => array(

            ),
            'victoire_sitemap_priority_pageseo_type_class' => 'Victoire\\Bundle\\SitemapBundle\\Form\\SitemapPriorityPageSeoType',
            'twig.controller.exception.class' => 'Victoire\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'victoire_twig.kernel_request_listener.class' => 'Victoire\\Bundle\\TwigBundle\\Listener\\KernelRequestListener',
            'victoire_twig.responsive' => array(
                'xs' => array(
                    'min' => 0,
                    'max' => 767,
                ),
                'sm' => array(
                    'min' => 768,
                    'max' => 991,
                ),
                'md' => array(
                    'min' => 992,
                    'max' => 1199,
                ),
                'lg' => array(
                    'min' => 1200,
                ),
            ),
            'victoire_view_reference.transformer.xmltoviewreference.class' => 'Victoire\\Bundle\\ViewReferenceBundle\\Transformer\\XmlToViewReferenceTransformer',
            'victoire_view_reference.cache_warmer.class' => 'Victoire\\Bundle\\ViewReferenceBundle\\Cache\\ViewCacheWarmer',
            'victoire_view_reference.array_transformer.base_page.class' => 'Victoire\\Bundle\\ViewReferenceBundle\\Transformer\\ArrayToViewReferenceTransformer',
            'victoire_view_reference.array_transformer.business_page.class' => 'Victoire\\Bundle\\ViewReferenceBundle\\Transformer\\ArrayToBusinessPageReferenceTransformer',
            'victoire_view_reference.xml_transformer.base_page.class' => 'Victoire\\Bundle\\ViewReferenceBundle\\Transformer\\XmlToViewReferenceTransformer',
            'victoire_view_reference.xml_transformer.business_page.class' => 'Victoire\\Bundle\\ViewReferenceBundle\\Transformer\\XmlToBusinessPageReferenceTransformer',
            'victoire_view_reference.repository.class' => 'Victoire\\Bundle\\ViewReferenceBundle\\Connector\\ViewReferenceRepository',
            'victoire_view_reference.manager.class' => 'Victoire\\Bundle\\ViewReferenceBundle\\Connector\\ViewReferenceManager',
            'victoire_view_reference.redis.repository.class' => 'Victoire\\Bundle\\ViewReferenceBundle\\Connector\\Redis\\ViewReferenceRedisRepository',
            'victoire_view_reference.redis.manager.class' => 'Victoire\\Bundle\\ViewReferenceBundle\\Connector\\Redis\\ViewReferenceRedisManager',
            'victoire_view_reference.cache.path' => (__DIR__.'/victoire/viewsReferences.xml'),
            'victoire_view_reference.connector.type' => 'redis',
            'console.command.ids' => array(

            ),
        );
    }
}

class DoctrineORMEntityManager_00000000428690af0000000049de23ef3bf08b917554782eb259376febf5d820 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder594831adc0fd7077760658 = null;
    private $initializer594831adc0ff5163287672 = null;
    private static $publicProperties594831adc0f29037301689 = array(
        
    );
    public function getConnection()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'getConnection', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'getMetadataFactory', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'getExpressionBuilder', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'beginTransaction', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'getCache', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->getCache();
    }
    public function transactional($func)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'transactional', array('func' => $func), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->transactional($func);
    }
    public function commit()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'commit', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->commit();
    }
    public function rollback()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'rollback', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'getClassMetadata', array('className' => $className), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'createQuery', array('dql' => $dql), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'createNamedQuery', array('name' => $name), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'createQueryBuilder', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'flush', array('entity' => $entity), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->flush($entity);
    }
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->find($entityName, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'clear', array('entityName' => $entityName), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->clear($entityName);
    }
    public function close()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'close', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->close();
    }
    public function persist($entity)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'persist', array('entity' => $entity), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'remove', array('entity' => $entity), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'refresh', array('entity' => $entity), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'detach', array('entity' => $entity), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'merge', array('entity' => $entity), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'getRepository', array('entityName' => $entityName), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'contains', array('entity' => $entity), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'getEventManager', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'getConfiguration', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'isOpen', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'getUnitOfWork', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'getProxyFactory', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'initializeObject', array('obj' => $obj), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'getFilters', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'isFiltersStateClean', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'hasFilters', array(), $this->initializer594831adc0ff5163287672);
        return $this->valueHolder594831adc0fd7077760658->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer594831adc0ff5163287672 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder594831adc0fd7077760658) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder594831adc0fd7077760658 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder594831adc0fd7077760658->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, '__get', ['name' => $name], $this->initializer594831adc0ff5163287672);
        if (isset(self::$publicProperties594831adc0f29037301689[$name])) {
            return $this->valueHolder594831adc0fd7077760658->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder594831adc0fd7077760658;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolder594831adc0fd7077760658;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer594831adc0ff5163287672);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder594831adc0fd7077760658;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder594831adc0fd7077760658;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, '__isset', array('name' => $name), $this->initializer594831adc0ff5163287672);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder594831adc0fd7077760658;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder594831adc0fd7077760658;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, '__unset', array('name' => $name), $this->initializer594831adc0ff5163287672);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder594831adc0fd7077760658;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder594831adc0fd7077760658;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, '__clone', array(), $this->initializer594831adc0ff5163287672);
        $this->valueHolder594831adc0fd7077760658 = clone $this->valueHolder594831adc0fd7077760658;
    }
    public function __sleep()
    {
        $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, '__sleep', array(), $this->initializer594831adc0ff5163287672);
        return array('valueHolder594831adc0fd7077760658');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer594831adc0ff5163287672 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer594831adc0ff5163287672;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer594831adc0ff5163287672 && $this->initializer594831adc0ff5163287672->__invoke($this->valueHolder594831adc0fd7077760658, $this, 'initializeProxy', array(), $this->initializer594831adc0ff5163287672);
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder594831adc0fd7077760658;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder594831adc0fd7077760658;
    }
}
