<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
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
 *
 * @final since Symfony 3.3
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
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->normalizedIds = array(
            'appbundle\\controller\\defaultcontroller' => 'AppBundle\\Controller\\DefaultController',
            'autowired.pimcore\\model\\dataobject\\abstractobject' => 'autowired.Pimcore\\Model\\DataObject\\AbstractObject',
            'autowired.pimcore\\model\\dataobject\\concrete' => 'autowired.Pimcore\\Model\\DataObject\\Concrete',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\assetcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\classcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\classificationstorecontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\dataobjectcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\dataobjecthelpercontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\documentcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\documenttag\\renderletcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentTag\\RenderletController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\elementcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\elementcontrollerbase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementControllerBase',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\emailcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\external\\adminercontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\AdminerController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\external\\linfocontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\LinfoController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\external\\opcachecontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\OpcacheController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\foldercontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\hardlinkcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\indexcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\installcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\InstallController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\linkcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\logcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LogController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\logincontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\misccontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\newslettercontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\pagecontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\portalcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\printcontainercontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\printpagecontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\printpagecontrollerbase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\quantityvaluecontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\QuantityValueController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\recyclebincontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RecyclebinController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\settingscontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\snippetcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\tagscontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\translationcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\usercontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\variantscontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\VariantsController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\workflowcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\WorkflowController',
            'pimcore\\bundle\\adminbundle\\controller\\extensionmanager\\extensionmanagercontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController',
            'pimcore\\bundle\\adminbundle\\controller\\reports\\analyticscontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController',
            'pimcore\\bundle\\adminbundle\\controller\\reports\\customreportcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController',
            'pimcore\\bundle\\adminbundle\\controller\\reports\\qrcodecontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController',
            'pimcore\\bundle\\adminbundle\\controller\\reports\\reportscontrollerbase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\ReportsControllerBase',
            'pimcore\\bundle\\adminbundle\\controller\\reports\\settingscontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\SettingsController',
            'pimcore\\bundle\\adminbundle\\controller\\reports\\targetingcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\TargetingController',
            'pimcore\\bundle\\adminbundle\\controller\\rest\\classcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController',
            'pimcore\\bundle\\adminbundle\\controller\\rest\\element\\assetcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController',
            'pimcore\\bundle\\adminbundle\\controller\\rest\\element\\dataobjectcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController',
            'pimcore\\bundle\\adminbundle\\controller\\rest\\element\\documentcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController',
            'pimcore\\bundle\\adminbundle\\controller\\rest\\element\\tagcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\TagController',
            'pimcore\\bundle\\adminbundle\\controller\\rest\\imagecontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ImageController',
            'pimcore\\bundle\\adminbundle\\controller\\rest\\infocontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\InfoController',
            'pimcore\\bundle\\adminbundle\\controller\\searchadmin\\searchcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Searchadmin\\SearchController',
            'pimcore\\bundle\\adminbundle\\controller\\update\\indexcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController',
            'pimcore\\bundle\\adminbundle\\eventlistener\\adminauthenticationdoublechecklistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\AdminAuthenticationDoubleCheckListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\adminexceptionlistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\AdminExceptionListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\bruteforceprotectionlistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\BruteforceProtectionListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\httpcachelistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\HttpCacheListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\usagestatisticslistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\UsageStatisticsListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\userperspectivelistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\UserPerspectiveListener',
            'pimcore\\bundle\\adminbundle\\security\\user\\tokenstorageuserresolver' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\TokenStorageUserResolver',
            'pimcore\\bundle\\adminbundle\\security\\user\\userchecker' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserChecker',
            'pimcore\\bundle\\adminbundle\\security\\user\\userloader' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserLoader',
            'pimcore\\bundle\\adminbundle\\security\\user\\userprovider' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserProvider',
            'pimcore\\bundle\\adminbundle\\session\\adminsessionbagconfigurator' => 'Pimcore\\Bundle\\AdminBundle\\Session\\AdminSessionBagConfigurator',
            'pimcore\\bundle\\adminbundle\\session\\handler\\adminsessionhandler' => 'Pimcore\\Bundle\\AdminBundle\\Session\\Handler\\AdminSessionHandler',
            'pimcore\\bundle\\corebundle\\controller\\publicservicescontroller' => 'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController',
            'pimcore\\bundle\\corebundle\\eventlistener\\controllerviewmodellistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\ControllerViewModelListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\elementtagslistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\ElementTagsListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\eventedcontrollerlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\EventedControllerListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\blockstatelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\BlockStateListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\contenttemplatelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\ContentTemplateListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\cookiepolicynoticelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\CookiePolicyNoticeListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\documentfallbacklistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\DocumentFallbackListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\documentmetadatalistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\DocumentMetaDataListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\editmodelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\EditmodeListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\elementlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\ElementListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\frontendroutinglistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\FrontendRoutingListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\fullpagecachelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\FullPageCacheListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\googleanalyticscodelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleAnalyticsCodeListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\googlesearchconsoleverificationlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleSearchConsoleVerificationListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\googletagmanagerlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleTagManagerListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\hardlinkcanonicallistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\HardlinkCanonicalListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\internalwysiwyghtmlattributefilterlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\InternalWysiwygHtmlAttributeFilterListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\localelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\LocaleListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\tagmanagerlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\TagManagerListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\targetinglistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\TargetingListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\maintenancepagelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\MaintenancePageListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\pimcorecontextlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\PimcoreContextListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\pimcoreheaderlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\PimcoreHeaderListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\responseexceptionlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseExceptionListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\responseheaderlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseHeaderListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\searchbackendlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\SearchBackendListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\templatecontrollerlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\TemplateControllerListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\uuidlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\UUIDListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\workflowmanagementlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\WorkflowManagementListener',
            'pimcore\\cache\\runtime' => 'Pimcore\\Cache\\Runtime',
            'pimcore\\controller\\argumentvalueresolver\\documentvalueresolver' => 'Pimcore\\Controller\\ArgumentValueResolver\\DocumentValueResolver',
            'pimcore\\controller\\argumentvalueresolver\\editmodevalueresolver' => 'Pimcore\\Controller\\ArgumentValueResolver\\EditmodeValueResolver',
            'pimcore\\controller\\argumentvalueresolver\\templatevarsvalueresolver' => 'Pimcore\\Controller\\ArgumentValueResolver\\TemplateVarsValueResolver',
            'pimcore\\controller\\argumentvalueresolver\\viewmodelvalueresolver' => 'Pimcore\\Controller\\ArgumentValueResolver\\ViewModelValueResolver',
            'pimcore\\controller\\argumentvalueresolver\\websiteconfigvalueresolver' => 'Pimcore\\Controller\\ArgumentValueResolver\\WebsiteConfigValueResolver',
            'pimcore\\controller\\config\\confignormalizer' => 'Pimcore\\Controller\\Config\\ConfigNormalizer',
            'pimcore\\controller\\config\\controllerdataprovider' => 'Pimcore\\Controller\\Config\\ControllerDataProvider',
            'pimcore\\db\\connection' => 'Pimcore\\Db\\Connection',
            'pimcore\\document\\renderer\\documentrenderer' => 'Pimcore\\Document\\Renderer\\DocumentRenderer',
            'pimcore\\document\\tag\\block\\blockstatestack' => 'Pimcore\\Document\\Tag\\Block\\BlockStateStack',
            'pimcore\\document\\tag\\taghandlerinterface' => 'Pimcore\\Document\\Tag\\TagHandlerInterface',
            'pimcore\\extension\\bundle\\pimcorebundlemanager' => 'Pimcore\\Extension\\Bundle\\PimcoreBundleManager',
            'pimcore\\extension\\config' => 'Pimcore\\Extension\\Config',
            'pimcore\\extension\\document\\areabrick\\areabrickmanager' => 'Pimcore\\Extension\\Document\\Areabrick\\AreabrickManager',
            'pimcore\\extension\\document\\areabrick\\areabrickmanagerinterface' => 'Pimcore\\Extension\\Document\\Areabrick\\AreabrickManagerInterface',
            'pimcore\\http\\request\\resolver\\documentresolver' => 'Pimcore\\Http\\Request\\Resolver\\DocumentResolver',
            'pimcore\\http\\request\\resolver\\editmoderesolver' => 'Pimcore\\Http\\Request\\Resolver\\EditmodeResolver',
            'pimcore\\http\\request\\resolver\\pimcorecontextresolver' => 'Pimcore\\Http\\Request\\Resolver\\PimcoreContextResolver',
            'pimcore\\http\\request\\resolver\\responseheaderresolver' => 'Pimcore\\Http\\Request\\Resolver\\ResponseHeaderResolver',
            'pimcore\\http\\request\\resolver\\siteresolver' => 'Pimcore\\Http\\Request\\Resolver\\SiteResolver',
            'pimcore\\http\\request\\resolver\\templateresolver' => 'Pimcore\\Http\\Request\\Resolver\\TemplateResolver',
            'pimcore\\http\\request\\resolver\\templatevarsresolver' => 'Pimcore\\Http\\Request\\Resolver\\TemplateVarsResolver',
            'pimcore\\http\\request\\resolver\\viewmodelresolver' => 'Pimcore\\Http\\Request\\Resolver\\ViewModelResolver',
            'pimcore\\http\\requesthelper' => 'Pimcore\\Http\\RequestHelper',
            'pimcore\\http\\responsehelper' => 'Pimcore\\Http\\ResponseHelper',
            'pimcore\\kernel' => 'Pimcore\\Kernel',
            'pimcore\\localization\\intlformatter' => 'Pimcore\\Localization\\IntlFormatter',
            'pimcore\\localization\\locale' => 'Pimcore\\Localization\\Locale',
            'pimcore\\log\\applicationlogger' => 'Pimcore\\Log\\ApplicationLogger',
            'pimcore\\log\\handler\\applicationloggerdb' => 'Pimcore\\Log\\Handler\\ApplicationLoggerDb',
            'pimcore\\migrations\\configuration\\configurationfactory' => 'Pimcore\\Migrations\\Configuration\\ConfigurationFactory',
            'pimcore\\model\\document\\service' => 'Pimcore\\Model\\Document\\Service',
            'pimcore\\model\\factory' => 'Pimcore\\Model\\Factory',
            'pimcore\\model\\schedule\\manager\\procedural' => 'Pimcore\\Model\\Schedule\\Manager\\Procedural',
            'pimcore\\navigation\\renderer\\breadcrumbs' => 'Pimcore\\Navigation\\Renderer\\Breadcrumbs',
            'pimcore\\navigation\\renderer\\menu' => 'Pimcore\\Navigation\\Renderer\\Menu',
            'pimcore\\routing\\dynamic\\documentroutehandler' => 'Pimcore\\Routing\\Dynamic\\DocumentRouteHandler',
            'pimcore\\templating\\helper\\action' => 'Pimcore\\Templating\\Helper\\Action',
            'pimcore\\templating\\helper\\cache' => 'Pimcore\\Templating\\Helper\\Cache',
            'pimcore\\templating\\helper\\device' => 'Pimcore\\Templating\\Helper\\Device',
            'pimcore\\templating\\helper\\getallparams' => 'Pimcore\\Templating\\Helper\\GetAllParams',
            'pimcore\\templating\\helper\\getparam' => 'Pimcore\\Templating\\Helper\\GetParam',
            'pimcore\\templating\\helper\\glossary' => 'Pimcore\\Templating\\Helper\\Glossary',
            'pimcore\\templating\\helper\\headlink' => 'Pimcore\\Templating\\Helper\\HeadLink',
            'pimcore\\templating\\helper\\headmeta' => 'Pimcore\\Templating\\Helper\\HeadMeta',
            'pimcore\\templating\\helper\\headscript' => 'Pimcore\\Templating\\Helper\\HeadScript',
            'pimcore\\templating\\helper\\headstyle' => 'Pimcore\\Templating\\Helper\\HeadStyle',
            'pimcore\\templating\\helper\\headtitle' => 'Pimcore\\Templating\\Helper\\HeadTitle',
            'pimcore\\templating\\helper\\inc' => 'Pimcore\\Templating\\Helper\\Inc',
            'pimcore\\templating\\helper\\inlinescript' => 'Pimcore\\Templating\\Helper\\InlineScript',
            'pimcore\\templating\\helper\\navigation' => 'Pimcore\\Templating\\Helper\\Navigation',
            'pimcore\\templating\\helper\\pimcoreurl' => 'Pimcore\\Templating\\Helper\\PimcoreUrl',
            'pimcore\\templating\\helper\\placeholder' => 'Pimcore\\Templating\\Helper\\Placeholder',
            'pimcore\\templating\\helper\\websiteconfig' => 'Pimcore\\Templating\\Helper\\WebsiteConfig',
            'pimcore\\tool\\assetsinstaller' => 'Pimcore\\Tool\\AssetsInstaller',
            'pimcore\\tool\\restclient' => 'Pimcore\\Tool\\RestClient',
            'pimcore\\translation\\translator' => 'Pimcore\\Translation\\Translator',
        );
        $this->methodMap = array(
            'AppBundle\\Controller\\DefaultController' => 'getAppBundle_Controller_DefaultControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_AssetControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_ClassControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_ClassificationstoreControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_DataObjectControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_DataObjectHelperControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_DocumentControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentTag\\RenderletController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_DocumentTag_RenderletControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_ElementControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementControllerBase' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_ElementControllerBaseService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_EmailControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\AdminerController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_External_AdminerControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\LinfoController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_External_LinfoControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\OpcacheController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_External_OpcacheControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_FolderControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_HardlinkControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_IndexControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\InstallController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_InstallControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_LinkControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LogController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_LogControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_LoginControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_MiscControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_NewsletterControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_PageControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_PortalControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_PrintcontainerControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_PrintpageControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_PrintpageControllerBaseService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\QuantityValueController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_QuantityValueControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RecyclebinController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_RecyclebinControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_SettingsControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_SnippetControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_TagsControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_TranslationControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_UserControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\VariantsController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_VariantsControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\WorkflowController' => 'getPimcore_Bundle_AdminBundle_Controller_Admin_WorkflowControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController' => 'getPimcore_Bundle_AdminBundle_Controller_ExtensionManager_ExtensionManagerControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController' => 'getPimcore_Bundle_AdminBundle_Controller_Reports_AnalyticsControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController' => 'getPimcore_Bundle_AdminBundle_Controller_Reports_CustomReportControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController' => 'getPimcore_Bundle_AdminBundle_Controller_Reports_QrcodeControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\ReportsControllerBase' => 'getPimcore_Bundle_AdminBundle_Controller_Reports_ReportsControllerBaseService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\SettingsController' => 'getPimcore_Bundle_AdminBundle_Controller_Reports_SettingsControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\TargetingController' => 'getPimcore_Bundle_AdminBundle_Controller_Reports_TargetingControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController' => 'getPimcore_Bundle_AdminBundle_Controller_Rest_ClassControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController' => 'getPimcore_Bundle_AdminBundle_Controller_Rest_Element_AssetControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController' => 'getPimcore_Bundle_AdminBundle_Controller_Rest_Element_DataObjectControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController' => 'getPimcore_Bundle_AdminBundle_Controller_Rest_Element_DocumentControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\TagController' => 'getPimcore_Bundle_AdminBundle_Controller_Rest_Element_TagControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ImageController' => 'getPimcore_Bundle_AdminBundle_Controller_Rest_ImageControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\InfoController' => 'getPimcore_Bundle_AdminBundle_Controller_Rest_InfoControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Searchadmin\\SearchController' => 'getPimcore_Bundle_AdminBundle_Controller_Searchadmin_SearchControllerService',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController' => 'getPimcore_Bundle_AdminBundle_Controller_Update_IndexControllerService',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\AdminAuthenticationDoubleCheckListener' => 'getPimcore_Bundle_AdminBundle_EventListener_AdminAuthenticationDoubleCheckListenerService',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\AdminExceptionListener' => 'getPimcore_Bundle_AdminBundle_EventListener_AdminExceptionListenerService',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\BruteforceProtectionListener' => 'getPimcore_Bundle_AdminBundle_EventListener_BruteforceProtectionListenerService',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\HttpCacheListener' => 'getPimcore_Bundle_AdminBundle_EventListener_HttpCacheListenerService',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\UsageStatisticsListener' => 'getPimcore_Bundle_AdminBundle_EventListener_UsageStatisticsListenerService',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\UserPerspectiveListener' => 'getPimcore_Bundle_AdminBundle_EventListener_UserPerspectiveListenerService',
            'Pimcore\\Bundle\\AdminBundle\\Security\\User\\TokenStorageUserResolver' => 'getPimcore_Bundle_AdminBundle_Security_User_TokenStorageUserResolverService',
            'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserChecker' => 'getPimcore_Bundle_AdminBundle_Security_User_UserCheckerService',
            'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserLoader' => 'getPimcore_Bundle_AdminBundle_Security_User_UserLoaderService',
            'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserProvider' => 'getPimcore_Bundle_AdminBundle_Security_User_UserProviderService',
            'Pimcore\\Bundle\\AdminBundle\\Session\\AdminSessionBagConfigurator' => 'getPimcore_Bundle_AdminBundle_Session_AdminSessionBagConfiguratorService',
            'Pimcore\\Bundle\\AdminBundle\\Session\\Handler\\AdminSessionHandler' => 'getPimcore_Bundle_AdminBundle_Session_Handler_AdminSessionHandlerService',
            'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController' => 'getPimcore_Bundle_CoreBundle_Controller_PublicServicesControllerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ControllerViewModelListener' => 'getPimcore_Bundle_CoreBundle_EventListener_ControllerViewModelListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ElementTagsListener' => 'getPimcore_Bundle_CoreBundle_EventListener_ElementTagsListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\EventedControllerListener' => 'getPimcore_Bundle_CoreBundle_EventListener_EventedControllerListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\BlockStateListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_BlockStateListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\ContentTemplateListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_ContentTemplateListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\CookiePolicyNoticeListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_CookiePolicyNoticeListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\DocumentFallbackListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_DocumentFallbackListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\DocumentMetaDataListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_DocumentMetaDataListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\EditmodeListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_EditmodeListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\ElementListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_ElementListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\FrontendRoutingListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_FrontendRoutingListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\FullPageCacheListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_FullPageCacheListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleAnalyticsCodeListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_GoogleAnalyticsCodeListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleSearchConsoleVerificationListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_GoogleSearchConsoleVerificationListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleTagManagerListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_GoogleTagManagerListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\HardlinkCanonicalListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_HardlinkCanonicalListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\InternalWysiwygHtmlAttributeFilterListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_InternalWysiwygHtmlAttributeFilterListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\LocaleListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_LocaleListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\TagManagerListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_TagManagerListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\TargetingListener' => 'getPimcore_Bundle_CoreBundle_EventListener_Frontend_TargetingListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\MaintenancePageListener' => 'getPimcore_Bundle_CoreBundle_EventListener_MaintenancePageListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\PimcoreContextListener' => 'getPimcore_Bundle_CoreBundle_EventListener_PimcoreContextListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\PimcoreHeaderListener' => 'getPimcore_Bundle_CoreBundle_EventListener_PimcoreHeaderListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseExceptionListener' => 'getPimcore_Bundle_CoreBundle_EventListener_ResponseExceptionListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseHeaderListener' => 'getPimcore_Bundle_CoreBundle_EventListener_ResponseHeaderListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\SearchBackendListener' => 'getPimcore_Bundle_CoreBundle_EventListener_SearchBackendListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\TemplateControllerListener' => 'getPimcore_Bundle_CoreBundle_EventListener_TemplateControllerListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\UUIDListener' => 'getPimcore_Bundle_CoreBundle_EventListener_UUIDListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\WorkflowManagementListener' => 'getPimcore_Bundle_CoreBundle_EventListener_WorkflowManagementListenerService',
            'Pimcore\\Controller\\ArgumentValueResolver\\DocumentValueResolver' => 'getPimcore_Controller_ArgumentValueResolver_DocumentValueResolverService',
            'Pimcore\\Controller\\ArgumentValueResolver\\EditmodeValueResolver' => 'getPimcore_Controller_ArgumentValueResolver_EditmodeValueResolverService',
            'Pimcore\\Controller\\ArgumentValueResolver\\TemplateVarsValueResolver' => 'getPimcore_Controller_ArgumentValueResolver_TemplateVarsValueResolverService',
            'Pimcore\\Controller\\ArgumentValueResolver\\ViewModelValueResolver' => 'getPimcore_Controller_ArgumentValueResolver_ViewModelValueResolverService',
            'Pimcore\\Controller\\ArgumentValueResolver\\WebsiteConfigValueResolver' => 'getPimcore_Controller_ArgumentValueResolver_WebsiteConfigValueResolverService',
            'Pimcore\\Controller\\Config\\ConfigNormalizer' => 'getPimcore_Controller_Config_ConfigNormalizerService',
            'Pimcore\\Controller\\Config\\ControllerDataProvider' => 'getPimcore_Controller_Config_ControllerDataProviderService',
            'Pimcore\\Document\\Renderer\\DocumentRenderer' => 'getPimcore_Document_Renderer_DocumentRendererService',
            'Pimcore\\Document\\Tag\\Block\\BlockStateStack' => 'getPimcore_Document_Tag_Block_BlockStateStackService',
            'Pimcore\\Extension\\Bundle\\PimcoreBundleManager' => 'getPimcore_Extension_Bundle_PimcoreBundleManagerService',
            'Pimcore\\Extension\\Document\\Areabrick\\AreabrickManager' => 'getPimcore_Extension_Document_Areabrick_AreabrickManagerService',
            'Pimcore\\Http\\RequestHelper' => 'getPimcore_Http_RequestHelperService',
            'Pimcore\\Http\\Request\\Resolver\\DocumentResolver' => 'getPimcore_Http_Request_Resolver_DocumentResolverService',
            'Pimcore\\Http\\Request\\Resolver\\EditmodeResolver' => 'getPimcore_Http_Request_Resolver_EditmodeResolverService',
            'Pimcore\\Http\\Request\\Resolver\\PimcoreContextResolver' => 'getPimcore_Http_Request_Resolver_PimcoreContextResolverService',
            'Pimcore\\Http\\Request\\Resolver\\ResponseHeaderResolver' => 'getPimcore_Http_Request_Resolver_ResponseHeaderResolverService',
            'Pimcore\\Http\\Request\\Resolver\\SiteResolver' => 'getPimcore_Http_Request_Resolver_SiteResolverService',
            'Pimcore\\Http\\Request\\Resolver\\TemplateResolver' => 'getPimcore_Http_Request_Resolver_TemplateResolverService',
            'Pimcore\\Http\\Request\\Resolver\\TemplateVarsResolver' => 'getPimcore_Http_Request_Resolver_TemplateVarsResolverService',
            'Pimcore\\Http\\Request\\Resolver\\ViewModelResolver' => 'getPimcore_Http_Request_Resolver_ViewModelResolverService',
            'Pimcore\\Http\\ResponseHelper' => 'getPimcore_Http_ResponseHelperService',
            'Pimcore\\Localization\\IntlFormatter' => 'getPimcore_Localization_IntlFormatterService',
            'Pimcore\\Localization\\Locale' => 'getPimcore_Localization_LocaleService',
            'Pimcore\\Log\\ApplicationLogger' => 'getPimcore_Log_ApplicationLoggerService',
            'Pimcore\\Log\\Handler\\ApplicationLoggerDb' => 'getPimcore_Log_Handler_ApplicationLoggerDbService',
            'Pimcore\\Migrations\\Configuration\\ConfigurationFactory' => 'getPimcore_Migrations_Configuration_ConfigurationFactoryService',
            'Pimcore\\Model\\Document\\Service' => 'getPimcore_Model_Document_ServiceService',
            'Pimcore\\Model\\Factory' => 'getPimcore_Model_FactoryService',
            'Pimcore\\Model\\Schedule\\Manager\\Procedural' => 'getPimcore_Model_Schedule_Manager_ProceduralService',
            'Pimcore\\Navigation\\Renderer\\Breadcrumbs' => 'getPimcore_Navigation_Renderer_BreadcrumbsService',
            'Pimcore\\Navigation\\Renderer\\Menu' => 'getPimcore_Navigation_Renderer_MenuService',
            'Pimcore\\Routing\\Dynamic\\DocumentRouteHandler' => 'getPimcore_Routing_Dynamic_DocumentRouteHandlerService',
            'Pimcore\\Templating\\Helper\\Action' => 'getPimcore_Templating_Helper_ActionService',
            'Pimcore\\Templating\\Helper\\Cache' => 'getPimcore_Templating_Helper_CacheService',
            'Pimcore\\Templating\\Helper\\Device' => 'getPimcore_Templating_Helper_DeviceService',
            'Pimcore\\Templating\\Helper\\GetAllParams' => 'getPimcore_Templating_Helper_GetAllParamsService',
            'Pimcore\\Templating\\Helper\\GetParam' => 'getPimcore_Templating_Helper_GetParamService',
            'Pimcore\\Templating\\Helper\\Glossary' => 'getPimcore_Templating_Helper_GlossaryService',
            'Pimcore\\Templating\\Helper\\HeadLink' => 'getPimcore_Templating_Helper_HeadLinkService',
            'Pimcore\\Templating\\Helper\\HeadMeta' => 'getPimcore_Templating_Helper_HeadMetaService',
            'Pimcore\\Templating\\Helper\\HeadScript' => 'getPimcore_Templating_Helper_HeadScriptService',
            'Pimcore\\Templating\\Helper\\HeadStyle' => 'getPimcore_Templating_Helper_HeadStyleService',
            'Pimcore\\Templating\\Helper\\HeadTitle' => 'getPimcore_Templating_Helper_HeadTitleService',
            'Pimcore\\Templating\\Helper\\Inc' => 'getPimcore_Templating_Helper_IncService',
            'Pimcore\\Templating\\Helper\\InlineScript' => 'getPimcore_Templating_Helper_InlineScriptService',
            'Pimcore\\Templating\\Helper\\Navigation' => 'getPimcore_Templating_Helper_NavigationService',
            'Pimcore\\Templating\\Helper\\PimcoreUrl' => 'getPimcore_Templating_Helper_PimcoreUrlService',
            'Pimcore\\Templating\\Helper\\Placeholder' => 'getPimcore_Templating_Helper_PlaceholderService',
            'Pimcore\\Templating\\Helper\\WebsiteConfig' => 'getPimcore_Templating_Helper_WebsiteConfigService',
            'Pimcore\\Tool\\AssetsInstaller' => 'getPimcore_Tool_AssetsInstallerService',
            'Pimcore\\Tool\\RestClient' => 'getPimcore_Tool_RestClientService',
            'Pimcore\\Translation\\Translator' => 'getPimcore_Translation_TranslatorService',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService',
            'argument_resolver.request' => 'getArgumentResolver_RequestService',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService',
            'argument_resolver.session' => 'getArgumentResolver_SessionService',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'autowired.Pimcore\\Model\\DataObject\\AbstractObject' => 'getAutowired_Pimcore_Model_DataObject_AbstractObjectService',
            'autowired.Pimcore\\Model\\DataObject\\Concrete' => 'getAutowired_Pimcore_Model_DataObject_ConcreteService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.default_clearer' => 'getCache_DefaultClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.property_access' => 'getCache_PropertyAccessService',
            'cache.serializer' => 'getCache_SerializerService',
            'cache.system' => 'getCache_SystemService',
            'cache.validator' => 'getCache_ValidatorService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'cmf_routing.dynamic_router' => 'getCmfRouting_DynamicRouterService',
            'cmf_routing.enhancer.route_content' => 'getCmfRouting_Enhancer_RouteContentService',
            'cmf_routing.final_matcher' => 'getCmfRouting_FinalMatcherService',
            'cmf_routing.generator' => 'getCmfRouting_GeneratorService',
            'cmf_routing.nested_matcher' => 'getCmfRouting_NestedMatcherService',
            'cmf_routing.persistence.doctrine.route_condition_metadata_listener' => 'getCmfRouting_Persistence_Doctrine_RouteConditionMetadataListenerService',
            'cmf_routing.redirect_controller' => 'getCmfRouting_RedirectControllerService',
            'cmf_routing.route_provider' => 'getCmfRouting_RouteProviderService',
            'cmf_routing.route_type_form_type' => 'getCmfRouting_RouteTypeFormTypeService',
            'cmf_routing.router' => 'getCmfRouting_RouterService',
            'cmf_routing.validator.route_defaults' => 'getCmfRouting_Validator_RouteDefaultsService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'console.command.pimcore_migrations_command_executecommand' => 'getConsole_Command_PimcoreMigrationsCommandExecutecommandService',
            'console.command.pimcore_migrations_command_generatecommand' => 'getConsole_Command_PimcoreMigrationsCommandGeneratecommandService',
            'console.command.pimcore_migrations_command_latestcommand' => 'getConsole_Command_PimcoreMigrationsCommandLatestcommandService',
            'console.command.pimcore_migrations_command_migratecommand' => 'getConsole_Command_PimcoreMigrationsCommandMigratecommandService',
            'console.command.pimcore_migrations_command_statuscommand' => 'getConsole_Command_PimcoreMigrationsCommandStatuscommandService',
            'console.command.pimcore_migrations_command_versioncommand' => 'getConsole_Command_PimcoreMigrationsCommandVersioncommandService',
            'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService',
            'console.error_listener' => 'getConsole_ErrorListenerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'controller_resolver' => 'getControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService',
            'deprecated.form.registry.csrf' => 'getDeprecated_Form_Registry_CsrfService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
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
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
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
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.activation_strategy.not_found' => 'getMonolog_ActivationStrategy_NotFoundService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => 'getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.admin' => 'getMonolog_Logger_AdminService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.init' => 'getMonolog_Logger_InitService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.pimcore' => 'getMonolog_Logger_PimcoreService',
            'monolog.logger.pimcore.maintenance' => 'getMonolog_Logger_Pimcore_MaintenanceService',
            'monolog.logger.pimcore_admin.session' => 'getMonolog_Logger_PimcoreAdmin_SessionService',
            'monolog.logger.pimcore_api' => 'getMonolog_Logger_PimcoreApiService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.routing' => 'getMonolog_Logger_RoutingService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.session' => 'getMonolog_Logger_SessionService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'pimcore.bundle_locator' => 'getPimcore_BundleLocatorService',
            'pimcore.cache.core.handler' => 'getPimcore_Cache_Core_HandlerService',
            'pimcore.cache.core.pool.array' => 'getPimcore_Cache_Core_Pool_ArrayService',
            'pimcore.cache.core.pool.doctrine' => 'getPimcore_Cache_Core_Pool_DoctrineService',
            'pimcore.cache.core.pool.filesystem' => 'getPimcore_Cache_Core_Pool_FilesystemService',
            'pimcore.cache.core.symfony_adapter.array' => 'getPimcore_Cache_Core_SymfonyAdapter_ArrayService',
            'pimcore.cache.core.symfony_adapter.filesystem' => 'getPimcore_Cache_Core_SymfonyAdapter_FilesystemService',
            'pimcore.cache.core.write_lock' => 'getPimcore_Cache_Core_WriteLockService',
            'pimcore.custom_report.adapter.factories' => 'getPimcore_CustomReport_Adapter_FactoriesService',
            'pimcore.custom_report.adapter.factory.analytics' => 'getPimcore_CustomReport_Adapter_Factory_AnalyticsService',
            'pimcore.custom_report.adapter.factory.sql' => 'getPimcore_CustomReport_Adapter_Factory_SqlService',
            'pimcore.document.newsletter.factory.csv' => 'getPimcore_Document_Newsletter_Factory_CsvService',
            'pimcore.document.newsletter.factory.default' => 'getPimcore_Document_Newsletter_Factory_DefaultService',
            'pimcore.document.newsletter.factory.report' => 'getPimcore_Document_Newsletter_Factory_ReportService',
            'pimcore.document.tag.handler' => 'getPimcore_Document_Tag_HandlerService',
            'pimcore.document.tag.naming.migration.strategy.analyze' => 'getPimcore_Document_Tag_Naming_Migration_Strategy_AnalyzeService',
            'pimcore.document.tag.naming.migration.strategy.render' => 'getPimcore_Document_Tag_Naming_Migration_Strategy_RenderService',
            'pimcore.document.tag.naming.strategy.legacy' => 'getPimcore_Document_Tag_Naming_Strategy_LegacyService',
            'pimcore.document.tag.naming.strategy.nested' => 'getPimcore_Document_Tag_Naming_Strategy_NestedService',
            'pimcore.http_client' => 'getPimcore_HttpClientService',
            'pimcore.implementation_loader.document.tag' => 'getPimcore_ImplementationLoader_Document_TagService',
            'pimcore.implementation_loader.object.data' => 'getPimcore_ImplementationLoader_Object_DataService',
            'pimcore.implementation_loader.object.layout' => 'getPimcore_ImplementationLoader_Object_LayoutService',
            'pimcore.newsletter.address_source_adapter.factories' => 'getPimcore_Newsletter_AddressSourceAdapter_FactoriesService',
            'pimcore.routing.router.request_context' => 'getPimcore_Routing_Router_RequestContextService',
            'pimcore.service.context.pimcore_context_guesser' => 'getPimcore_Service_Context_PimcoreContextGuesserService',
            'pimcore.service.request_matcher_factory' => 'getPimcore_Service_RequestMatcherFactoryService',
            'pimcore.templating.action_renderer' => 'getPimcore_Templating_ActionRendererService',
            'pimcore.templating.engine.php' => 'getPimcore_Templating_Engine_PhpService',
            'pimcore.templating.engine.twig' => 'getPimcore_Templating_Engine_TwigService',
            'pimcore.templating.include_renderer' => 'getPimcore_Templating_IncludeRendererService',
            'pimcore.templating.tag_renderer' => 'getPimcore_Templating_TagRendererService',
            'pimcore.templating.view_helper.placeholder.container_service' => 'getPimcore_Templating_ViewHelper_Placeholder_ContainerServiceService',
            'pimcore.templating.view_helper.translate' => 'getPimcore_Templating_ViewHelper_TranslateService',
            'pimcore.templating.view_helper.translate_admin' => 'getPimcore_Templating_ViewHelper_TranslateAdminService',
            'pimcore.twig.extension.document_tag' => 'getPimcore_Twig_Extension_DocumentTagService',
            'pimcore.twig.extension.glossary' => 'getPimcore_Twig_Extension_GlossaryService',
            'pimcore.twig.extension.helpers' => 'getPimcore_Twig_Extension_HelpersService',
            'pimcore.twig.extension.navigation' => 'getPimcore_Twig_Extension_NavigationService',
            'pimcore.twig.extension.pimcore_object' => 'getPimcore_Twig_Extension_PimcoreObjectService',
            'pimcore.twig.extension.subrequest' => 'getPimcore_Twig_Extension_SubrequestService',
            'pimcore.twig.extension.templating_helper' => 'getPimcore_Twig_Extension_TemplatingHelperService',
            'pimcore.web_path_resolver' => 'getPimcore_WebPathResolverService',
            'pimcore_admin.security.admin_authenticator' => 'getPimcoreAdmin_Security_AdminAuthenticatorService',
            'pimcore_admin.security.bruteforce_protection_handler' => 'getPimcoreAdmin_Security_BruteforceProtectionHandlerService',
            'pimcore_admin.security.logout_success_handler' => 'getPimcoreAdmin_Security_LogoutSuccessHandlerService',
            'pimcore_admin.security.password_encoder_factory' => 'getPimcoreAdmin_Security_PasswordEncoderFactoryService',
            'pimcore_admin.security.webservice_authenticator' => 'getPimcoreAdmin_Security_WebserviceAuthenticatorService',
            'pimcore_admin.serializer' => 'getPimcoreAdmin_SerializerService',
            'pimcore_admin.serializer.encoder.json' => 'getPimcoreAdmin_Serializer_Encoder_JsonService',
            'pimcore_admin.serializer.normalizer.reference_loop' => 'getPimcoreAdmin_Serializer_Normalizer_ReferenceLoopService',
            'pimcore_admin.webservice.service' => 'getPimcoreAdmin_Webservice_ServiceService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService',
            'security.access.role_hierarchy_voter' => 'getSecurity_Access_RoleHierarchyVoterService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.provider.anonymous.admin' => 'getSecurity_Authentication_Provider_Anonymous_AdminService',
            'security.authentication.provider.dao.admin_webdav' => 'getSecurity_Authentication_Provider_Dao_AdminWebdavService',
            'security.authentication.provider.guard.admin' => 'getSecurity_Authentication_Provider_Guard_AdminService',
            'security.authentication.provider.guard.webservice' => 'getSecurity_Authentication_Provider_Guard_WebserviceService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.admin' => 'getSecurity_Firewall_Map_Context_AdminService',
            'security.firewall.map.context.admin_webdav' => 'getSecurity_Firewall_Map_Context_AdminWebdavService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.webservice' => 'getSecurity_Firewall_Map_Context_WebserviceService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' => 'getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService',
            'security.request_matcher.739bd6996bb3b118cd48e18c1be9190a2a4e591a3fbb66796acc5de35bf3bcf24ff049fc' => 'getSecurity_RequestMatcher_739bd6996bb3b118cd48e18c1be9190a2a4e591a3fbb66796acc5de35bf3bcf24ff049fcService',
            'security.request_matcher.764e993b07f86c50f945d9bc29906d594dfc5b599c6dd619ee7f826206d068a50daecf5e' => 'getSecurity_RequestMatcher_764e993b07f86c50f945d9bc29906d594dfc5b599c6dd619ee7f826206d068a50daecf5eService',
            'security.request_matcher.a50c8485b97e617ec992f80bdc28744923293294a669a247324029e17a79db4f8884d39b' => 'getSecurity_RequestMatcher_A50c8485b97e617ec992f80bdc28744923293294a669a247324029e17a79db4f8884d39bService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService',
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
            'serializer' => 'getSerializerService',
            'serializer.mapping.cache.symfony' => 'getSerializer_Mapping_Cache_SymfonyService',
            'service_locator.1df818bdbc898e0ca4257f453525a80a' => 'getServiceLocator_1df818bdbc898e0ca4257f453525a80aService',
            'service_locator.38c73ce8067617f669e83e499e0bd337' => 'getServiceLocator_38c73ce8067617f669e83e499e0bd337Service',
            'service_locator.83603fcf2ec2e2d8755beebb160c60e0' => 'getServiceLocator_83603fcf2ec2e2d8755beebb160c60e0Service',
            'service_locator.8fbaea2dc9ce39bb09e046ce631ea329' => 'getServiceLocator_8fbaea2dc9ce39bb09e046ce631ea329Service',
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => 'getServiceLocator_E64d23c3bf770e2cf44b71643280668dService',
            'service_locator.ecb3d2e49c7158cfbf629075292d1db0' => 'getServiceLocator_Ecb3d2e49c7158cfbf629075292d1db0Service',
            'service_locator.ef50b66065b1737465a2d74a13598afe' => 'getServiceLocator_Ef50b66065b1737465a2d74a13598afeService',
            'service_locator.f4349e8894d66f427f9ad72c699461b7' => 'getServiceLocator_F4349e8894d66f427f9ad72c699461b7Service',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.newsletter_mailer' => 'getSwiftmailer_Mailer_NewsletterMailerService',
            'swiftmailer.mailer.newsletter_mailer.transport' => 'getSwiftmailer_Mailer_NewsletterMailer_TransportService',
            'swiftmailer.mailer.pimcore_mailer' => 'getSwiftmailer_Mailer_PimcoreMailerService',
            'swiftmailer.mailer.pimcore_mailer.transport' => 'getSwiftmailer_Mailer_PimcoreMailer_TransportService',
            'swiftmailer.plugin.redirecting' => 'getSwiftmailer_Plugin_RedirectingService',
            'swiftmailer.transport.mailinvoker' => 'getSwiftmailer_Transport_MailinvokerService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.stopwatch' => 'getTemplating_Helper_StopwatchService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
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
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
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
        );
        $this->privates = array(
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\AdminAuthenticationDoubleCheckListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\AdminExceptionListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\BruteforceProtectionListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\HttpCacheListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\UsageStatisticsListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\UserPerspectiveListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\Session\\AdminSessionBagConfigurator' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ControllerViewModelListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ElementTagsListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\EventedControllerListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\BlockStateListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\ContentTemplateListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\DocumentFallbackListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\DocumentMetaDataListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\EditmodeListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\ElementListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\FrontendRoutingListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleSearchConsoleVerificationListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\HardlinkCanonicalListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\InternalWysiwygHtmlAttributeFilterListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\LocaleListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\MaintenancePageListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\PimcoreContextListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\PimcoreHeaderListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseExceptionListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseHeaderListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\SearchBackendListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\TemplateControllerListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\UUIDListener' => true,
            'Pimcore\\Controller\\ArgumentValueResolver\\DocumentValueResolver' => true,
            'Pimcore\\Controller\\ArgumentValueResolver\\EditmodeValueResolver' => true,
            'Pimcore\\Controller\\ArgumentValueResolver\\TemplateVarsValueResolver' => true,
            'Pimcore\\Controller\\ArgumentValueResolver\\ViewModelValueResolver' => true,
            'Pimcore\\Controller\\ArgumentValueResolver\\WebsiteConfigValueResolver' => true,
            'Pimcore\\Navigation\\Renderer\\Breadcrumbs' => true,
            'Pimcore\\Navigation\\Renderer\\Menu' => true,
            'Pimcore\\Routing\\Dynamic\\DocumentRouteHandler' => true,
            'annotations.reader' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'autowired.Pimcore\\Model\\DataObject\\AbstractObject' => true,
            'autowired.Pimcore\\Model\\DataObject\\Concrete' => true,
            'cache.annotations' => true,
            'cache.property_access' => true,
            'cache.serializer' => true,
            'cache.validator' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'controller_resolver' => true,
            'debug.file_link_formatter' => true,
            'form.server_params' => true,
            'form.type.choice' => true,
            'form.type.form' => true,
            'form.type_extension.csrf' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.validator' => true,
            'monolog.processor.psr_log_message' => true,
            'pimcore_admin.serializer.encoder.json' => true,
            'pimcore_admin.serializer.normalizer.reference_loop' => true,
            'resolve_controller_name_subscriber' => true,
            'security.access.authenticated_voter' => true,
            'security.access.decision_manager' => true,
            'security.access.expression_voter' => true,
            'security.access.role_hierarchy_voter' => true,
            'security.access_listener' => true,
            'security.access_map' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.admin' => true,
            'security.authentication.provider.dao.admin_webdav' => true,
            'security.authentication.provider.guard.admin' => true,
            'security.authentication.provider.guard.webservice' => true,
            'security.authentication.trust_resolver' => true,
            'security.channel_listener' => true,
            'security.http_utils' => true,
            'security.logout_url_generator' => true,
            'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' => true,
            'security.request_matcher.739bd6996bb3b118cd48e18c1be9190a2a4e591a3fbb66796acc5de35bf3bcf24ff049fc' => true,
            'security.request_matcher.764e993b07f86c50f945d9bc29906d594dfc5b599c6dd619ee7f826206d068a50daecf5e' => true,
            'security.request_matcher.a50c8485b97e617ec992f80bdc28744923293294a669a247324029e17a79db4f8884d39b' => true,
            'security.role_hierarchy' => true,
            'security.user_checker' => true,
            'security.user_value_resolver' => true,
            'service_locator.1df818bdbc898e0ca4257f453525a80a' => true,
            'service_locator.38c73ce8067617f669e83e499e0bd337' => true,
            'service_locator.83603fcf2ec2e2d8755beebb160c60e0' => true,
            'service_locator.8fbaea2dc9ce39bb09e046ce631ea329' => true,
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => true,
            'service_locator.ecb3d2e49c7158cfbf629075292d1db0' => true,
            'service_locator.ef50b66065b1737465a2d74a13598afe' => true,
            'service_locator.f4349e8894d66f427f9ad72c699461b7' => true,
            'session.storage.metadata_bag' => true,
            'swiftmailer.transport.mailinvoker' => true,
            'templating.locator' => true,
        );
        $this->aliases = array(
            'Pimcore\\Db\\Connection' => 'doctrine.dbal.default_connection',
            'Pimcore\\Document\\Tag\\TagHandlerInterface' => 'pimcore.document.tag.handler',
            'Pimcore\\Extension\\Document\\Areabrick\\AreabrickManagerInterface' => 'Pimcore\\Extension\\Document\\Areabrick\\AreabrickManager',
            'Pimcore\\Kernel' => 'kernel',
            'cache.app_clearer' => 'cache.default_clearer',
            'database_connection' => 'doctrine.dbal.default_connection',
            'mailer' => 'swiftmailer.mailer.pimcore_mailer',
            'pimcore.app_logger' => 'Pimcore\\Log\\ApplicationLogger',
            'pimcore.app_logger.db_writer' => 'Pimcore\\Log\\Handler\\ApplicationLoggerDb',
            'pimcore.app_logger.default' => 'Pimcore\\Log\\ApplicationLogger',
            'pimcore.area.brick_manager' => 'Pimcore\\Extension\\Document\\Areabrick\\AreabrickManager',
            'pimcore.cache.core.pool' => 'pimcore.cache.core.pool.doctrine',
            'pimcore.cache.runtime' => 'Pimcore\\Cache\\Runtime',
            'pimcore.controller.config.config_normalizer' => 'Pimcore\\Controller\\Config\\ConfigNormalizer',
            'pimcore.controller.config.controller_data_provider' => 'Pimcore\\Controller\\Config\\ControllerDataProvider',
            'pimcore.document.renderer' => 'Pimcore\\Document\\Renderer\\DocumentRenderer',
            'pimcore.document.tag.block_state_stack' => 'Pimcore\\Document\\Tag\\Block\\BlockStateStack',
            'pimcore.document.tag.naming.strategy' => 'pimcore.document.tag.naming.strategy.nested',
            'pimcore.document_service' => 'Pimcore\\Model\\Document\\Service',
            'pimcore.event_listener.frontend.cookie_policy_notice' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\CookiePolicyNoticeListener',
            'pimcore.event_listener.frontend.full_page_cache' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\FullPageCacheListener',
            'pimcore.event_listener.frontend.google_analytics_code' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleAnalyticsCodeListener',
            'pimcore.event_listener.frontend.google_tag_manager' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleTagManagerListener',
            'pimcore.event_listener.frontend.tag_manager' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\TagManagerListener',
            'pimcore.event_listener.frontend.targeting' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\TargetingListener',
            'pimcore.event_listener.workflow_management' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\WorkflowManagementListener',
            'pimcore.extension.bundle_manager' => 'Pimcore\\Extension\\Bundle\\PimcoreBundleManager',
            'pimcore.extension.config' => 'Pimcore\\Extension\\Config',
            'pimcore.http.request_helper' => 'Pimcore\\Http\\RequestHelper',
            'pimcore.http.response_helper' => 'Pimcore\\Http\\ResponseHelper',
            'pimcore.locale' => 'Pimcore\\Localization\\Locale',
            'pimcore.locale.intl_formatter' => 'Pimcore\\Localization\\IntlFormatter',
            'pimcore.maintenance.schedule_manager' => 'Pimcore\\Model\\Schedule\\Manager\\Procedural',
            'pimcore.model.factory' => 'Pimcore\\Model\\Factory',
            'pimcore.rest_client' => 'Pimcore\\Tool\\RestClient',
            'pimcore.service.request.document_resolver' => 'Pimcore\\Http\\Request\\Resolver\\DocumentResolver',
            'pimcore.service.request.editmode_resolver' => 'Pimcore\\Http\\Request\\Resolver\\EditmodeResolver',
            'pimcore.service.request.pimcore_context_resolver' => 'Pimcore\\Http\\Request\\Resolver\\PimcoreContextResolver',
            'pimcore.service.request.response_header_resolver' => 'Pimcore\\Http\\Request\\Resolver\\ResponseHeaderResolver',
            'pimcore.service.request.site_resolver' => 'Pimcore\\Http\\Request\\Resolver\\SiteResolver',
            'pimcore.service.request.template_resolver' => 'Pimcore\\Http\\Request\\Resolver\\TemplateResolver',
            'pimcore.service.request.template_vars_resolver' => 'Pimcore\\Http\\Request\\Resolver\\TemplateVarsResolver',
            'pimcore.service.request.view_model_resolver' => 'Pimcore\\Http\\Request\\Resolver\\ViewModelResolver',
            'pimcore.templating.view_helper.action' => 'Pimcore\\Templating\\Helper\\Action',
            'pimcore.templating.view_helper.cache' => 'Pimcore\\Templating\\Helper\\Cache',
            'pimcore.templating.view_helper.device' => 'Pimcore\\Templating\\Helper\\Device',
            'pimcore.templating.view_helper.get_all_params' => 'Pimcore\\Templating\\Helper\\GetAllParams',
            'pimcore.templating.view_helper.get_param' => 'Pimcore\\Templating\\Helper\\GetParam',
            'pimcore.templating.view_helper.glossary' => 'Pimcore\\Templating\\Helper\\Glossary',
            'pimcore.templating.view_helper.head_link' => 'Pimcore\\Templating\\Helper\\HeadLink',
            'pimcore.templating.view_helper.head_meta' => 'Pimcore\\Templating\\Helper\\HeadMeta',
            'pimcore.templating.view_helper.head_script' => 'Pimcore\\Templating\\Helper\\HeadScript',
            'pimcore.templating.view_helper.head_style' => 'Pimcore\\Templating\\Helper\\HeadStyle',
            'pimcore.templating.view_helper.head_title' => 'Pimcore\\Templating\\Helper\\HeadTitle',
            'pimcore.templating.view_helper.inc' => 'Pimcore\\Templating\\Helper\\Inc',
            'pimcore.templating.view_helper.inline_script' => 'Pimcore\\Templating\\Helper\\InlineScript',
            'pimcore.templating.view_helper.navigation' => 'Pimcore\\Templating\\Helper\\Navigation',
            'pimcore.templating.view_helper.pimcore_url' => 'Pimcore\\Templating\\Helper\\PimcoreUrl',
            'pimcore.templating.view_helper.placeholder' => 'Pimcore\\Templating\\Helper\\Placeholder',
            'pimcore.tool.assets_installer' => 'Pimcore\\Tool\\AssetsInstaller',
            'pimcore.translator' => 'Pimcore\\Translation\\Translator',
            'pimcore_admin.security.token_storage_user_resolver' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\TokenStorageUserResolver',
            'pimcore_admin.security.user_checker' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserChecker',
            'pimcore_admin.security.user_loader' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserLoader',
            'pimcore_admin.security.user_provider' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserProvider',
            'router' => 'cmf_routing.router',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.pimcore_mailer',
            'swiftmailer.transport' => 'swiftmailer.mailer.pimcore_mailer.transport',
            'translator' => 'Pimcore\\Translation\\Translator',
        );
    }

    /*
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    /*
     * {@inheritdoc}
     */
    public function isCompiled()
    {
        return true;
    }

    /*
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since version 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /*
     * Gets the public 'AppBundle\Controller\DefaultController' shared autowired service.
     *
     * @return \AppBundle\Controller\DefaultController
     */
    protected function getAppBundle_Controller_DefaultControllerService()
    {
        return $this->services['AppBundle\Controller\DefaultController'] = new \AppBundle\Controller\DefaultController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\AssetController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\AssetController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_AssetControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\AssetController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\AssetController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\ClassController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\ClassController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_ClassControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\ClassController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\ClassController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\ClassificationstoreController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\ClassificationstoreController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_ClassificationstoreControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\ClassificationstoreController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\ClassificationstoreController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\DataObjectController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\DataObjectController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_DataObjectControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\DataObjectController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\DataObjectController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\DataObjectHelperController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\DataObjectHelperController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_DataObjectHelperControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\DataObjectHelperController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\DataObjectHelperController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\DocumentController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\DocumentController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_DocumentControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\DocumentController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\DocumentController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\DocumentTag\RenderletController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\DocumentTag\RenderletController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_DocumentTag_RenderletControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\DocumentTag\RenderletController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\DocumentTag\RenderletController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\ElementController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\ElementController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_ElementControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\ElementController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\ElementController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\ElementControllerBase' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\ElementControllerBase
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_ElementControllerBaseService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\ElementControllerBase'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\ElementControllerBase();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\EmailController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\EmailController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_EmailControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\EmailController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\EmailController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\External\AdminerController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\External\AdminerController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_External_AdminerControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\External\AdminerController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\External\AdminerController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\External\LinfoController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\External\LinfoController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_External_LinfoControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\External\LinfoController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\External\LinfoController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\External\OpcacheController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\External\OpcacheController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_External_OpcacheControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\External\OpcacheController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\External\OpcacheController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\FolderController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\FolderController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_FolderControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\FolderController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\FolderController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\HardlinkController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\HardlinkController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_HardlinkControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\HardlinkController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\HardlinkController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\IndexController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\IndexController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_IndexControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\IndexController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\IndexController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\InstallController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\InstallController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_InstallControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\InstallController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\InstallController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\LinkController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\LinkController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_LinkControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\LinkController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\LinkController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\LogController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\LogController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_LogControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\LogController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\LogController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\LoginController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\LoginController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_LoginControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\LoginController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\LoginController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\MiscController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\MiscController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_MiscControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\MiscController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\MiscController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\NewsletterController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\NewsletterController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_NewsletterControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\NewsletterController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\NewsletterController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\PageController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\PageController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_PageControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\PageController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\PageController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\PortalController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\PortalController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_PortalControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\PortalController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\PortalController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\PrintcontainerController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\PrintcontainerController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_PrintcontainerControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\PrintcontainerController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\PrintcontainerController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\PrintpageController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\PrintpageController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_PrintpageControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\PrintpageController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\PrintpageController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\PrintpageControllerBase' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\PrintpageControllerBase
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_PrintpageControllerBaseService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\PrintpageControllerBase'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\PrintpageControllerBase();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\QuantityValueController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\QuantityValueController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_QuantityValueControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\QuantityValueController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\QuantityValueController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\RecyclebinController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\RecyclebinController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_RecyclebinControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\RecyclebinController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\RecyclebinController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\SettingsController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\SettingsController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_SettingsControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\SettingsController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\SettingsController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\SnippetController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\SnippetController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_SnippetControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\SnippetController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\SnippetController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\TagsController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\TagsController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_TagsControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\TagsController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\TagsController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\TranslationController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\TranslationController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_TranslationControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\TranslationController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\TranslationController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\UserController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\UserController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_UserControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\UserController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\UserController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\VariantsController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\VariantsController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_VariantsControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\VariantsController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\VariantsController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\WorkflowController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\WorkflowController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Admin_WorkflowControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Admin\WorkflowController'] = new \Pimcore\Bundle\AdminBundle\Controller\Admin\WorkflowController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\ExtensionManager\ExtensionManagerController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\ExtensionManager\ExtensionManagerController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_ExtensionManager_ExtensionManagerControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\ExtensionManager\ExtensionManagerController'] = new \Pimcore\Bundle\AdminBundle\Controller\ExtensionManager\ExtensionManagerController(${($_ = isset($this->services['Pimcore\Extension\Bundle\PimcoreBundleManager']) ? $this->services['Pimcore\Extension\Bundle\PimcoreBundleManager'] : $this->get('Pimcore\Extension\Bundle\PimcoreBundleManager')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Extension\Document\Areabrick\AreabrickManager']) ? $this->services['Pimcore\Extension\Document\Areabrick\AreabrickManager'] : $this->get('Pimcore\Extension\Document\Areabrick\AreabrickManager')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Reports\AnalyticsController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Reports\AnalyticsController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Reports_AnalyticsControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Reports\AnalyticsController'] = new \Pimcore\Bundle\AdminBundle\Controller\Reports\AnalyticsController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Reports\CustomReportController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Reports\CustomReportController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Reports_CustomReportControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Reports\CustomReportController'] = new \Pimcore\Bundle\AdminBundle\Controller\Reports\CustomReportController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Reports\QrcodeController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Reports\QrcodeController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Reports_QrcodeControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Reports\QrcodeController'] = new \Pimcore\Bundle\AdminBundle\Controller\Reports\QrcodeController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Reports\ReportsControllerBase' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Reports\ReportsControllerBase
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Reports_ReportsControllerBaseService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Reports\ReportsControllerBase'] = new \Pimcore\Bundle\AdminBundle\Controller\Reports\ReportsControllerBase();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Reports\SettingsController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Reports\SettingsController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Reports_SettingsControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Reports\SettingsController'] = new \Pimcore\Bundle\AdminBundle\Controller\Reports\SettingsController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Reports\TargetingController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Reports\TargetingController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Reports_TargetingControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Reports\TargetingController'] = new \Pimcore\Bundle\AdminBundle\Controller\Reports\TargetingController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Rest\ClassController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Rest\ClassController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Rest_ClassControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Rest\ClassController'] = new \Pimcore\Bundle\AdminBundle\Controller\Rest\ClassController(${($_ = isset($this->services['pimcore_admin.webservice.service']) ? $this->services['pimcore_admin.webservice.service'] : $this->get('pimcore_admin.webservice.service')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Rest\Element\AssetController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Rest\Element\AssetController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Rest_Element_AssetControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Rest\Element\AssetController'] = new \Pimcore\Bundle\AdminBundle\Controller\Rest\Element\AssetController(${($_ = isset($this->services['pimcore_admin.webservice.service']) ? $this->services['pimcore_admin.webservice.service'] : $this->get('pimcore_admin.webservice.service')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Rest\Element\DataObjectController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Rest\Element\DataObjectController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Rest_Element_DataObjectControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Rest\Element\DataObjectController'] = new \Pimcore\Bundle\AdminBundle\Controller\Rest\Element\DataObjectController(${($_ = isset($this->services['pimcore_admin.webservice.service']) ? $this->services['pimcore_admin.webservice.service'] : $this->get('pimcore_admin.webservice.service')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Rest\Element\DocumentController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Rest\Element\DocumentController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Rest_Element_DocumentControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Rest\Element\DocumentController'] = new \Pimcore\Bundle\AdminBundle\Controller\Rest\Element\DocumentController(${($_ = isset($this->services['pimcore_admin.webservice.service']) ? $this->services['pimcore_admin.webservice.service'] : $this->get('pimcore_admin.webservice.service')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Rest\Element\TagController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Rest\Element\TagController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Rest_Element_TagControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Rest\Element\TagController'] = new \Pimcore\Bundle\AdminBundle\Controller\Rest\Element\TagController(${($_ = isset($this->services['pimcore_admin.webservice.service']) ? $this->services['pimcore_admin.webservice.service'] : $this->get('pimcore_admin.webservice.service')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Rest\ImageController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Rest\ImageController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Rest_ImageControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Rest\ImageController'] = new \Pimcore\Bundle\AdminBundle\Controller\Rest\ImageController(${($_ = isset($this->services['pimcore_admin.webservice.service']) ? $this->services['pimcore_admin.webservice.service'] : $this->get('pimcore_admin.webservice.service')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Rest\InfoController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Rest\InfoController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Rest_InfoControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Rest\InfoController'] = new \Pimcore\Bundle\AdminBundle\Controller\Rest\InfoController(${($_ = isset($this->services['pimcore_admin.webservice.service']) ? $this->services['pimcore_admin.webservice.service'] : $this->get('pimcore_admin.webservice.service')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Searchadmin\SearchController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Searchadmin\SearchController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Searchadmin_SearchControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Searchadmin\SearchController'] = new \Pimcore\Bundle\AdminBundle\Controller\Searchadmin\SearchController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Update\IndexController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Update\IndexController
     */
    protected function getPimcore_Bundle_AdminBundle_Controller_Update_IndexControllerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Controller\Update\IndexController'] = new \Pimcore\Bundle\AdminBundle\Controller\Update\IndexController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver
     */
    protected function getPimcore_Bundle_AdminBundle_Security_User_TokenStorageUserResolverService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver'] = new \Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Security\User\UserChecker' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\User\UserChecker
     */
    protected function getPimcore_Bundle_AdminBundle_Security_User_UserCheckerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserChecker'] = new \Pimcore\Bundle\AdminBundle\Security\User\UserChecker();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Security\User\UserLoader' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\User\UserLoader
     */
    protected function getPimcore_Bundle_AdminBundle_Security_User_UserLoaderService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader'] = new \Pimcore\Bundle\AdminBundle\Security\User\UserLoader(${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver'] : $this->get('Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Security\User\UserProvider' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\User\UserProvider
     */
    protected function getPimcore_Bundle_AdminBundle_Security_User_UserProviderService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider'] = new \Pimcore\Bundle\AdminBundle\Security\User\UserProvider();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Session\Handler\AdminSessionHandler' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Session\Handler\AdminSessionHandler
     */
    protected function getPimcore_Bundle_AdminBundle_Session_Handler_AdminSessionHandlerService()
    {
        $this->services['Pimcore\Bundle\AdminBundle\Session\Handler\AdminSessionHandler'] = $instance = new \Pimcore\Bundle\AdminBundle\Session\Handler\AdminSessionHandler(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session')) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.pimcore_admin.session']) ? $this->services['monolog.logger.pimcore_admin.session'] : $this->get('monolog.logger.pimcore_admin.session')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Bundle\CoreBundle\Controller\PublicServicesController' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Controller\PublicServicesController
     */
    protected function getPimcore_Bundle_CoreBundle_Controller_PublicServicesControllerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\Controller\PublicServicesController'] = new \Pimcore\Bundle\CoreBundle\Controller\PublicServicesController();
    }

    /*
     * Gets the public 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\CookiePolicyNoticeListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\CookiePolicyNoticeListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_CookiePolicyNoticeListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\CookiePolicyNoticeListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\CookiePolicyNoticeListener(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});

        $instance->loadTemplateFromResource('@PimcoreCoreBundle/Resources/misc/cookie-policy-default-template.html');
        $instance->setTranslator(${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->get('Pimcore\Translation\Translator')) && false ?: '_'});
        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->get('Pimcore\Http\ResponseHelper')) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_FullPageCacheListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener();

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleAnalyticsCodeListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleAnalyticsCodeListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_GoogleAnalyticsCodeListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleAnalyticsCodeListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleAnalyticsCodeListener();

        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->get('Pimcore\Http\ResponseHelper')) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleTagManagerListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleTagManagerListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_GoogleTagManagerListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleTagManagerListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleTagManagerListener();

        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->get('Pimcore\Http\ResponseHelper')) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\TagManagerListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\TagManagerListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_TagManagerListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\TagManagerListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\TagManagerListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->get('Pimcore\Http\Request\Resolver\EditmodeResolver')) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});
        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->get('Pimcore\Http\ResponseHelper')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\TargetingListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\TargetingListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_TargetingListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\TargetingListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\TargetingListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->get('Pimcore\Http\Request\Resolver\DocumentResolver')) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});
        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->get('Pimcore\Http\ResponseHelper')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_WorkflowManagementListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener();
    }

    /*
     * Gets the public 'Pimcore\Controller\Config\ConfigNormalizer' shared autowired service.
     *
     * @return \Pimcore\Controller\Config\ConfigNormalizer
     */
    protected function getPimcore_Controller_Config_ConfigNormalizerService()
    {
        return $this->services['Pimcore\Controller\Config\ConfigNormalizer'] = new \Pimcore\Controller\Config\ConfigNormalizer(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Controller\Config\ControllerDataProvider' shared autowired service.
     *
     * @return \Pimcore\Controller\Config\ControllerDataProvider
     */
    protected function getPimcore_Controller_Config_ControllerDataProviderService()
    {
        return $this->services['Pimcore\Controller\Config\ControllerDataProvider'] = new \Pimcore\Controller\Config\ControllerDataProvider(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, array('AppBundle\\Controller\\DefaultController' => 'AppBundle\\Controller\\DefaultController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentTag\\RenderletController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentTag\\RenderletController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementControllerBase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementControllerBase', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\AdminerController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\AdminerController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\LinfoController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\LinfoController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\OpcacheController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\OpcacheController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\InstallController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\InstallController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LogController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LogController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\QuantityValueController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\QuantityValueController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RecyclebinController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RecyclebinController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\VariantsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\VariantsController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\WorkflowController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\WorkflowController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\ReportsControllerBase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\ReportsControllerBase', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\SettingsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\SettingsController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\TargetingController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\TargetingController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\TagController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\TagController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ImageController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ImageController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\InfoController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\InfoController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Searchadmin\\SearchController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Searchadmin\\SearchController', 'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController', 'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController' => 'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController'));
    }

    /*
     * Gets the public 'Pimcore\Document\Renderer\DocumentRenderer' shared autowired service.
     *
     * @return \Pimcore\Document\Renderer\DocumentRenderer
     */
    protected function getPimcore_Document_Renderer_DocumentRendererService()
    {
        return $this->services['Pimcore\Document\Renderer\DocumentRenderer'] = new \Pimcore\Document\Renderer\DocumentRenderer(${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'}, ${($_ = isset($this->services['pimcore.templating.action_renderer']) ? $this->services['pimcore.templating.action_renderer'] : $this->get('pimcore.templating.action_renderer')) && false ?: '_'}, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Routing\Dynamic\DocumentRouteHandler']) ? $this->services['Pimcore\Routing\Dynamic\DocumentRouteHandler'] : $this->getPimcore_Routing_Dynamic_DocumentRouteHandlerService()) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Document\Tag\Block\BlockStateStack' shared autowired service.
     *
     * @return \Pimcore\Document\Tag\Block\BlockStateStack
     */
    protected function getPimcore_Document_Tag_Block_BlockStateStackService()
    {
        return $this->services['Pimcore\Document\Tag\Block\BlockStateStack'] = new \Pimcore\Document\Tag\Block\BlockStateStack();
    }

    /*
     * Gets the public 'Pimcore\Extension\Bundle\PimcoreBundleManager' shared autowired service.
     *
     * @return \Pimcore\Extension\Bundle\PimcoreBundleManager
     */
    protected function getPimcore_Extension_Bundle_PimcoreBundleManagerService()
    {
        return $this->services['Pimcore\Extension\Bundle\PimcoreBundleManager'] = new \Pimcore\Extension\Bundle\PimcoreBundleManager(new \Pimcore\Extension\Bundle\Config\StateConfig(${($_ = isset($this->services['Pimcore\Extension\Config']) ? $this->services['Pimcore\Extension\Config'] : $this->get('Pimcore\Extension\Config')) && false ?: '_'}), new \Pimcore\Extension\Bundle\PimcoreBundleLocator(new \Pimcore\Composer\PackageInfo(), array(0 => 'src', 1 => 'pimcore/lib/Pimcore/Bundle')), ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->get('cmf_routing.router')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Extension\Document\Areabrick\AreabrickManager' shared autowired service.
     *
     * @return \Pimcore\Extension\Document\Areabrick\AreabrickManager
     */
    protected function getPimcore_Extension_Document_Areabrick_AreabrickManagerService()
    {
        return $this->services['Pimcore\Extension\Document\Areabrick\AreabrickManager'] = new \Pimcore\Extension\Document\Areabrick\AreabrickManager(${($_ = isset($this->services['Pimcore\Extension\Config']) ? $this->services['Pimcore\Extension\Config'] : $this->get('Pimcore\Extension\Config')) && false ?: '_'}, $this);
    }

    /*
     * Gets the public 'Pimcore\Http\RequestHelper' shared autowired service.
     *
     * @return \Pimcore\Http\RequestHelper
     */
    protected function getPimcore_Http_RequestHelperService()
    {
        return $this->services['Pimcore\Http\RequestHelper'] = new \Pimcore\Http\RequestHelper(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Http\Request\Resolver\DocumentResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\DocumentResolver
     */
    protected function getPimcore_Http_Request_Resolver_DocumentResolverService()
    {
        return $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] = new \Pimcore\Http\Request\Resolver\DocumentResolver(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Http\Request\Resolver\EditmodeResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\EditmodeResolver
     */
    protected function getPimcore_Http_Request_Resolver_EditmodeResolverService()
    {
        $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] = $instance = new \Pimcore\Http\Request\Resolver\EditmodeResolver(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader'] : $this->get('Pimcore\Bundle\AdminBundle\Security\User\UserLoader')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.init']) ? $this->services['monolog.logger.init'] : $this->get('monolog.logger.init')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Http\Request\Resolver\PimcoreContextResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\PimcoreContextResolver
     */
    protected function getPimcore_Http_Request_Resolver_PimcoreContextResolverService()
    {
        return $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] = new \Pimcore\Http\Request\Resolver\PimcoreContextResolver(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['pimcore.service.context.pimcore_context_guesser']) ? $this->services['pimcore.service.context.pimcore_context_guesser'] : $this->get('pimcore.service.context.pimcore_context_guesser')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Http\Request\Resolver\ResponseHeaderResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\ResponseHeaderResolver
     */
    protected function getPimcore_Http_Request_Resolver_ResponseHeaderResolverService()
    {
        return $this->services['Pimcore\Http\Request\Resolver\ResponseHeaderResolver'] = new \Pimcore\Http\Request\Resolver\ResponseHeaderResolver(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Http\Request\Resolver\SiteResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\SiteResolver
     */
    protected function getPimcore_Http_Request_Resolver_SiteResolverService()
    {
        return $this->services['Pimcore\Http\Request\Resolver\SiteResolver'] = new \Pimcore\Http\Request\Resolver\SiteResolver(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Http\Request\Resolver\TemplateResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\TemplateResolver
     */
    protected function getPimcore_Http_Request_Resolver_TemplateResolverService()
    {
        return $this->services['Pimcore\Http\Request\Resolver\TemplateResolver'] = new \Pimcore\Http\Request\Resolver\TemplateResolver(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Controller\Config\ConfigNormalizer']) ? $this->services['Pimcore\Controller\Config\ConfigNormalizer'] : $this->get('Pimcore\Controller\Config\ConfigNormalizer')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Http\Request\Resolver\TemplateVarsResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\TemplateVarsResolver
     */
    protected function getPimcore_Http_Request_Resolver_TemplateVarsResolverService()
    {
        $this->services['Pimcore\Http\Request\Resolver\TemplateVarsResolver'] = $instance = new \Pimcore\Http\Request\Resolver\TemplateVarsResolver(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});

        $instance->addProvider(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->get('Pimcore\Http\Request\Resolver\EditmodeResolver')) && false ?: '_'});
        $instance->addProvider(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->get('Pimcore\Http\Request\Resolver\DocumentResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Http\Request\Resolver\ViewModelResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\ViewModelResolver
     */
    protected function getPimcore_Http_Request_Resolver_ViewModelResolverService()
    {
        return $this->services['Pimcore\Http\Request\Resolver\ViewModelResolver'] = new \Pimcore\Http\Request\Resolver\ViewModelResolver(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\TemplateVarsResolver']) ? $this->services['Pimcore\Http\Request\Resolver\TemplateVarsResolver'] : $this->get('Pimcore\Http\Request\Resolver\TemplateVarsResolver')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Http\ResponseHelper' shared autowired service.
     *
     * @return \Pimcore\Http\ResponseHelper
     */
    protected function getPimcore_Http_ResponseHelperService()
    {
        return $this->services['Pimcore\Http\ResponseHelper'] = new \Pimcore\Http\ResponseHelper();
    }

    /*
     * Gets the public 'Pimcore\Localization\IntlFormatter' shared autowired service.
     *
     * @return \Pimcore\Localization\IntlFormatter
     */
    protected function getPimcore_Localization_IntlFormatterService()
    {
        return $this->services['Pimcore\Localization\IntlFormatter'] = new \Pimcore\Localization\IntlFormatter(${($_ = isset($this->services['Pimcore\Localization\Locale']) ? $this->services['Pimcore\Localization\Locale'] : $this->get('Pimcore\Localization\Locale')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Localization\Locale' shared autowired service.
     *
     * @return \Pimcore\Localization\Locale
     */
    protected function getPimcore_Localization_LocaleService()
    {
        return $this->services['Pimcore\Localization\Locale'] = new \Pimcore\Localization\Locale(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->get('Pimcore\Translation\Translator')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Log\ApplicationLogger' shared autowired service.
     *
     * @return \Pimcore\Log\ApplicationLogger
     */
    protected function getPimcore_Log_ApplicationLoggerService()
    {
        $this->services['Pimcore\Log\ApplicationLogger'] = $instance = new \Pimcore\Log\ApplicationLogger();

        $instance->addWriter(${($_ = isset($this->services['Pimcore\Log\Handler\ApplicationLoggerDb']) ? $this->services['Pimcore\Log\Handler\ApplicationLoggerDb'] : $this->get('Pimcore\Log\Handler\ApplicationLoggerDb')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Log\Handler\ApplicationLoggerDb' shared autowired service.
     *
     * @return \Pimcore\Log\Handler\ApplicationLoggerDb
     */
    protected function getPimcore_Log_Handler_ApplicationLoggerDbService()
    {
        return $this->services['Pimcore\Log\Handler\ApplicationLoggerDb'] = new \Pimcore\Log\Handler\ApplicationLoggerDb();
    }

    /*
     * Gets the public 'Pimcore\Migrations\Configuration\ConfigurationFactory' shared autowired service.
     *
     * @return \Pimcore\Migrations\Configuration\ConfigurationFactory
     */
    protected function getPimcore_Migrations_Configuration_ConfigurationFactoryService()
    {
        return $this->services['Pimcore\Migrations\Configuration\ConfigurationFactory'] = new \Pimcore\Migrations\Configuration\ConfigurationFactory($this, ($this->targetDirs[3].'\\app'));
    }

    /*
     * Gets the public 'Pimcore\Model\Document\Service' shared autowired service.
     *
     * @return \Pimcore\Model\Document\Service
     */
    protected function getPimcore_Model_Document_ServiceService()
    {
        return $this->services['Pimcore\Model\Document\Service'] = new \Pimcore\Model\Document\Service();
    }

    /*
     * Gets the public 'Pimcore\Model\Factory' shared autowired service.
     *
     * @return \Pimcore\Model\Factory
     */
    protected function getPimcore_Model_FactoryService()
    {
        $this->services['Pimcore\Model\Factory'] = $instance = new \Pimcore\Model\Factory();

        $instance->addLoader(new \Pimcore\Model\Factory\FallbackBuilder());
        $instance->addLoader(new \Pimcore\Loader\ImplementationLoader\ClassMapLoader(array()));

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Model\Schedule\Manager\Procedural' shared autowired service.
     *
     * @return \Pimcore\Model\Schedule\Manager\Procedural
     */
    protected function getPimcore_Model_Schedule_Manager_ProceduralService()
    {
        return $this->services['Pimcore\Model\Schedule\Manager\Procedural'] = new \Pimcore\Model\Schedule\Manager\Procedural('maintenance.pid', ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\Action' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Action
     */
    protected function getPimcore_Templating_Helper_ActionService()
    {
        return $this->services['Pimcore\Templating\Helper\Action'] = new \Pimcore\Templating\Helper\Action(${($_ = isset($this->services['pimcore.templating.action_renderer']) ? $this->services['pimcore.templating.action_renderer'] : $this->get('pimcore.templating.action_renderer')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\Cache' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Cache
     */
    protected function getPimcore_Templating_Helper_CacheService()
    {
        return $this->services['Pimcore\Templating\Helper\Cache'] = new \Pimcore\Templating\Helper\Cache(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->get('Pimcore\Http\Request\Resolver\EditmodeResolver')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\Device' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Device
     */
    protected function getPimcore_Templating_Helper_DeviceService()
    {
        return $this->services['Pimcore\Templating\Helper\Device'] = new \Pimcore\Templating\Helper\Device();
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\GetAllParams' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\GetAllParams
     */
    protected function getPimcore_Templating_Helper_GetAllParamsService()
    {
        return $this->services['Pimcore\Templating\Helper\GetAllParams'] = new \Pimcore\Templating\Helper\GetAllParams(${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\GetParam' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\GetParam
     */
    protected function getPimcore_Templating_Helper_GetParamService()
    {
        return $this->services['Pimcore\Templating\Helper\GetParam'] = new \Pimcore\Templating\Helper\GetParam(${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\Glossary' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Glossary
     */
    protected function getPimcore_Templating_Helper_GlossaryService()
    {
        return $this->services['Pimcore\Templating\Helper\Glossary'] = new \Pimcore\Templating\Helper\Glossary(new \Pimcore\Tool\Glossary\Processor(${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->get('Pimcore\Http\Request\Resolver\EditmodeResolver')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->get('Pimcore\Http\Request\Resolver\DocumentResolver')) && false ?: '_'}));
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\HeadLink' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\HeadLink
     */
    protected function getPimcore_Templating_Helper_HeadLinkService()
    {
        return $this->services['Pimcore\Templating\Helper\HeadLink'] = new \Pimcore\Templating\Helper\HeadLink(${($_ = isset($this->services['pimcore.templating.view_helper.placeholder.container_service']) ? $this->services['pimcore.templating.view_helper.placeholder.container_service'] : $this->get('pimcore.templating.view_helper.placeholder.container_service')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\HeadMeta' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\HeadMeta
     */
    protected function getPimcore_Templating_Helper_HeadMetaService()
    {
        return $this->services['Pimcore\Templating\Helper\HeadMeta'] = new \Pimcore\Templating\Helper\HeadMeta(${($_ = isset($this->services['pimcore.templating.view_helper.placeholder.container_service']) ? $this->services['pimcore.templating.view_helper.placeholder.container_service'] : $this->get('pimcore.templating.view_helper.placeholder.container_service')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\HeadScript' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\HeadScript
     */
    protected function getPimcore_Templating_Helper_HeadScriptService()
    {
        return $this->services['Pimcore\Templating\Helper\HeadScript'] = new \Pimcore\Templating\Helper\HeadScript(${($_ = isset($this->services['pimcore.templating.view_helper.placeholder.container_service']) ? $this->services['pimcore.templating.view_helper.placeholder.container_service'] : $this->get('pimcore.templating.view_helper.placeholder.container_service')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\HeadStyle' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\HeadStyle
     */
    protected function getPimcore_Templating_Helper_HeadStyleService()
    {
        return $this->services['Pimcore\Templating\Helper\HeadStyle'] = new \Pimcore\Templating\Helper\HeadStyle(${($_ = isset($this->services['pimcore.templating.view_helper.placeholder.container_service']) ? $this->services['pimcore.templating.view_helper.placeholder.container_service'] : $this->get('pimcore.templating.view_helper.placeholder.container_service')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\HeadTitle' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\HeadTitle
     */
    protected function getPimcore_Templating_Helper_HeadTitleService()
    {
        return $this->services['Pimcore\Templating\Helper\HeadTitle'] = new \Pimcore\Templating\Helper\HeadTitle(${($_ = isset($this->services['pimcore.templating.view_helper.placeholder.container_service']) ? $this->services['pimcore.templating.view_helper.placeholder.container_service'] : $this->get('pimcore.templating.view_helper.placeholder.container_service')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\Inc' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Inc
     */
    protected function getPimcore_Templating_Helper_IncService()
    {
        return $this->services['Pimcore\Templating\Helper\Inc'] = new \Pimcore\Templating\Helper\Inc(${($_ = isset($this->services['pimcore.templating.include_renderer']) ? $this->services['pimcore.templating.include_renderer'] : $this->get('pimcore.templating.include_renderer')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->get('Pimcore\Http\Request\Resolver\EditmodeResolver')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\InlineScript' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\InlineScript
     */
    protected function getPimcore_Templating_Helper_InlineScriptService()
    {
        return $this->services['Pimcore\Templating\Helper\InlineScript'] = new \Pimcore\Templating\Helper\InlineScript(${($_ = isset($this->services['pimcore.templating.view_helper.placeholder.container_service']) ? $this->services['pimcore.templating.view_helper.placeholder.container_service'] : $this->get('pimcore.templating.view_helper.placeholder.container_service')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\Navigation' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Navigation
     */
    public function getPimcore_Templating_Helper_NavigationService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['Pimcore\Templating\Helper\Navigation'] = PimcoreTemplatingHelperNavigation_00000000081e7f830000000036e76bbd35155b0379d13c9882e0989f16a69986::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getPimcore_Templating_Helper_NavigationService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Pimcore\Templating\Helper\Navigation(new \Pimcore\Navigation\Builder(${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'}), new \Symfony\Component\DependencyInjection\ServiceLocator(array('breadcrumbs' => function () {
            return ${($_ = isset($this->services['Pimcore\Navigation\Renderer\Breadcrumbs']) ? $this->services['Pimcore\Navigation\Renderer\Breadcrumbs'] : $this->getPimcore_Navigation_Renderer_BreadcrumbsService()) && false ?: '_'};
        }, 'menu' => function () {
            return ${($_ = isset($this->services['Pimcore\Navigation\Renderer\Menu']) ? $this->services['Pimcore\Navigation\Renderer\Menu'] : $this->getPimcore_Navigation_Renderer_MenuService()) && false ?: '_'};
        })));
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\PimcoreUrl' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\PimcoreUrl
     */
    protected function getPimcore_Templating_Helper_PimcoreUrlService()
    {
        return $this->services['Pimcore\Templating\Helper\PimcoreUrl'] = new \Pimcore\Templating\Helper\PimcoreUrl(${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->get('cmf_routing.router')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\Placeholder' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Placeholder
     */
    protected function getPimcore_Templating_Helper_PlaceholderService()
    {
        return $this->services['Pimcore\Templating\Helper\Placeholder'] = new \Pimcore\Templating\Helper\Placeholder(${($_ = isset($this->services['pimcore.templating.view_helper.placeholder.container_service']) ? $this->services['pimcore.templating.view_helper.placeholder.container_service'] : $this->get('pimcore.templating.view_helper.placeholder.container_service')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Templating\Helper\WebsiteConfig' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\WebsiteConfig
     */
    protected function getPimcore_Templating_Helper_WebsiteConfigService()
    {
        return $this->services['Pimcore\Templating\Helper\WebsiteConfig'] = new \Pimcore\Templating\Helper\WebsiteConfig();
    }

    /*
     * Gets the public 'Pimcore\Tool\AssetsInstaller' shared autowired service.
     *
     * @return \Pimcore\Tool\AssetsInstaller
     */
    protected function getPimcore_Tool_AssetsInstallerService()
    {
        return $this->services['Pimcore\Tool\AssetsInstaller'] = new \Pimcore\Tool\AssetsInstaller(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ${($_ = isset($this->services['pimcore_admin.serializer']) ? $this->services['pimcore_admin.serializer'] : $this->get('pimcore_admin.serializer')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Tool\RestClient' shared autowired service.
     *
     * @return \Pimcore\Tool\RestClient
     */
    protected function getPimcore_Tool_RestClientService()
    {
        return $this->services['Pimcore\Tool\RestClient'] = new \Pimcore\Tool\RestClient(${($_ = isset($this->services['pimcore.http_client']) ? $this->services['pimcore.http_client'] : $this->get('pimcore.http_client')) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Translation\Translator' shared autowired service.
     *
     * @return \Pimcore\Translation\Translator
     */
    protected function getPimcore_Translation_TranslatorService()
    {
        $this->services['Pimcore\Translation\Translator'] = $instance = new \Pimcore\Translation\Translator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'});

        $instance->setKernel(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
        $instance->setAdminPath('@PimcoreCoreBundle/Resources/translations');

        return $instance;
    }

    /*
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), false);
    }

    /*
     * Gets the public 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /*
     * Gets the public 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->get('assets.context')) && false ?: '_'}), array());
    }

    /*
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('1k48HG4FkD', 0, (__DIR__.'/pools'));

        if ($this->has('monolog.logger.cache')) {
            $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }

        return $instance;
    }

    /*
     * Gets the public 'cache.default_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_DefaultClearerService()
    {
        return $this->services['cache.default_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.serializer' => ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}, 'cache.property_access' => ${($_ = isset($this->services['cache.property_access']) ? $this->services['cache.property_access'] : $this->getCache_PropertyAccessService()) && false ?: '_'}));
    }

    /*
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.serializer' => ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}, 'cache.property_access' => ${($_ = isset($this->services['cache.property_access']) ? $this->services['cache.property_access'] : $this->getCache_PropertyAccessService()) && false ?: '_'}));
    }

    /*
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('pkY3DmcxvV', 0, 'nKdIhPRoDvX9yu5fkTCPvl', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => ${($_ = isset($this->services['cache.default_clearer']) ? $this->services['cache.default_clearer'] : $this->get('cache.default_clearer')) && false ?: '_'}));
    }

    /*
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        $a = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};
        $b = ${($_ = isset($this->services['templating.filename_parser']) ? $this->services['templating.filename_parser'] : $this->get('templating.filename_parser')) && false ?: '_'};

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[3].'\\app/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}), 1 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}, (__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer(${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->get('cmf_routing.router')) && false ?: '_'}), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, (__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}), 5 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer(array(), (__DIR__.'/serialization.php'), ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'}), 6 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(new \Symfony\Component\DependencyInjection\ServiceLocator(array('twig' => function () {
            $f = function (\Twig\Environment $v) { return $v; }; return $f(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
        })), $c, array()), 7 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this, new \Symfony\Bundle\TwigBundle\TemplateIterator($a, ($this->targetDirs[3].'\\app'), array())), 8 => new \Pimcore\HttpKernel\CacheWarmer\MkdirCacheWarmer()));
    }

    /*
     * Gets the public 'cmf_routing.dynamic_router' shared service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Routing\DynamicRouter
     */
    protected function getCmfRouting_DynamicRouterService()
    {
        $this->services['cmf_routing.dynamic_router'] = $instance = new \Symfony\Cmf\Bundle\RoutingBundle\Routing\DynamicRouter(${($_ = isset($this->services['pimcore.routing.router.request_context']) ? $this->services['pimcore.routing.router.request_context'] : $this->get('pimcore.routing.router.request_context')) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.nested_matcher']) ? $this->services['cmf_routing.nested_matcher'] : $this->get('cmf_routing.nested_matcher')) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.generator']) ? $this->services['cmf_routing.generator'] : $this->get('cmf_routing.generator')) && false ?: '_'}, '', ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.route_provider']) ? $this->services['cmf_routing.route_provider'] : $this->get('cmf_routing.route_provider')) && false ?: '_'});

        $instance->setRequestStack(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
        $instance->addRouteEnhancer(${($_ = isset($this->services['cmf_routing.enhancer.route_content']) ? $this->services['cmf_routing.enhancer.route_content'] : $this->get('cmf_routing.enhancer.route_content')) && false ?: '_'}, 100);

        return $instance;
    }

    /*
     * Gets the public 'cmf_routing.enhancer.route_content' shared service.
     *
     * @return \Symfony\Cmf\Component\Routing\Enhancer\RouteContentEnhancer
     */
    protected function getCmfRouting_Enhancer_RouteContentService()
    {
        return $this->services['cmf_routing.enhancer.route_content'] = new \Symfony\Cmf\Component\Routing\Enhancer\RouteContentEnhancer('_route_object', '_content');
    }

    /*
     * Gets the public 'cmf_routing.final_matcher' shared service.
     *
     * @return \Symfony\Cmf\Component\Routing\NestedMatcher\UrlMatcher
     */
    protected function getCmfRouting_FinalMatcherService()
    {
        return $this->services['cmf_routing.final_matcher'] = new \Symfony\Cmf\Component\Routing\NestedMatcher\UrlMatcher(new \Symfony\Component\Routing\RouteCollection(), new \Symfony\Component\Routing\RequestContext());
    }

    /*
     * Gets the public 'cmf_routing.generator' shared service.
     *
     * @return \Symfony\Cmf\Component\Routing\ContentAwareGenerator
     */
    protected function getCmfRouting_GeneratorService()
    {
        return $this->services['cmf_routing.generator'] = new \Symfony\Cmf\Component\Routing\ContentAwareGenerator(${($_ = isset($this->services['cmf_routing.route_provider']) ? $this->services['cmf_routing.route_provider'] : $this->get('cmf_routing.route_provider')) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the public 'cmf_routing.nested_matcher' shared service.
     *
     * @return \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher
     */
    protected function getCmfRouting_NestedMatcherService()
    {
        return $this->services['cmf_routing.nested_matcher'] = new \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher(${($_ = isset($this->services['cmf_routing.route_provider']) ? $this->services['cmf_routing.route_provider'] : $this->get('cmf_routing.route_provider')) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.final_matcher']) ? $this->services['cmf_routing.final_matcher'] : $this->get('cmf_routing.final_matcher')) && false ?: '_'});
    }

    /*
     * Gets the public 'cmf_routing.persistence.doctrine.route_condition_metadata_listener' shared service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\RouteConditionMetadataListener
     */
    protected function getCmfRouting_Persistence_Doctrine_RouteConditionMetadataListenerService()
    {
        return $this->services['cmf_routing.persistence.doctrine.route_condition_metadata_listener'] = new \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\RouteConditionMetadataListener();
    }

    /*
     * Gets the public 'cmf_routing.redirect_controller' shared service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Controller\RedirectController
     */
    protected function getCmfRouting_RedirectControllerService()
    {
        return $this->services['cmf_routing.redirect_controller'] = new \Symfony\Cmf\Bundle\RoutingBundle\Controller\RedirectController(${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->get('cmf_routing.router')) && false ?: '_'});
    }

    /*
     * Gets the public 'cmf_routing.route_provider' shared autowired service.
     *
     * @return \Pimcore\Routing\DynamicRouteProvider
     */
    protected function getCmfRouting_RouteProviderService()
    {
        $this->services['cmf_routing.route_provider'] = $instance = new \Pimcore\Routing\DynamicRouteProvider(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\SiteResolver']) ? $this->services['Pimcore\Http\Request\Resolver\SiteResolver'] : $this->get('Pimcore\Http\Request\Resolver\SiteResolver')) && false ?: '_'});

        $instance->addHandler(${($_ = isset($this->services['Pimcore\Routing\Dynamic\DocumentRouteHandler']) ? $this->services['Pimcore\Routing\Dynamic\DocumentRouteHandler'] : $this->getPimcore_Routing_Dynamic_DocumentRouteHandlerService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'cmf_routing.route_type_form_type' shared service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType
     */
    protected function getCmfRouting_RouteTypeFormTypeService()
    {
        return $this->services['cmf_routing.route_type_form_type'] = new \Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType();
    }

    /*
     * Gets the public 'cmf_routing.router' shared service.
     *
     * @return \Symfony\Cmf\Component\Routing\ChainRouter
     */
    protected function getCmfRouting_RouterService()
    {
        $a = ${($_ = isset($this->services['pimcore.routing.router.request_context']) ? $this->services['pimcore.routing.router.request_context'] : $this->get('pimcore.routing.router.request_context')) && false ?: '_'};

        $b = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'\\app/config/routing.yml'), array('cache_dir' => __DIR__, 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdProjectContainerUrlMatcher', 'strict_requirements' => NULL), $a, ${($_ = isset($this->services['monolog.logger.router']) ? $this->services['monolog.logger.router'] : $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        $b->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->get('config_cache_factory')) && false ?: '_'});

        $c = new \Pimcore\Routing\Staticroute\Router($a, ${($_ = isset($this->services['Pimcore\Controller\Config\ConfigNormalizer']) ? $this->services['Pimcore\Controller\Config\ConfigNormalizer'] : $this->get('Pimcore\Controller\Config\ConfigNormalizer')) && false ?: '_'});
        $c->setLocaleParams(array());
        $c->setLogger(${($_ = isset($this->services['monolog.logger.routing']) ? $this->services['monolog.logger.routing'] : $this->get('monolog.logger.routing')) && false ?: '_'});

        $this->services['cmf_routing.router'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->setContext($a);
        $instance->add($b, '300');
        $instance->add(${($_ = isset($this->services['cmf_routing.dynamic_router']) ? $this->services['cmf_routing.dynamic_router'] : $this->get('cmf_routing.dynamic_router')) && false ?: '_'}, '200');
        $instance->add($c, 100);

        return $instance;
    }

    /*
     * Gets the public 'cmf_routing.validator.route_defaults' shared service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Validator\Constraints\RouteDefaultsTemplatingValidator
     */
    protected function getCmfRouting_Validator_RouteDefaultsService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine($this, array());
        $a->addEngine(${($_ = isset($this->services['pimcore.templating.engine.php']) ? $this->services['pimcore.templating.engine.php'] : $this->get('pimcore.templating.engine.php')) && false ?: '_'});
        $a->addEngine(${($_ = isset($this->services['pimcore.templating.engine.twig']) ? $this->services['pimcore.templating.engine.twig'] : $this->get('pimcore.templating.engine.twig')) && false ?: '_'});

        return $this->services['cmf_routing.validator.route_defaults'] = new \Symfony\Cmf\Bundle\RoutingBundle\Validator\Constraints\RouteDefaultsTemplatingValidator(${($_ = isset($this->services['controller_resolver']) ? $this->services['controller_resolver'] : $this->getControllerResolverService()) && false ?: '_'}, $a);
    }

    /*
     * Gets the public 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory('');
    }

    /*
     * Gets the public 'console.command.pimcore_migrations_command_executecommand' shared autowired service.
     *
     * @return \Pimcore\Migrations\Command\ExecuteCommand
     */
    protected function getConsole_Command_PimcoreMigrationsCommandExecutecommandService()
    {
        return $this->services['console.command.pimcore_migrations_command_executecommand'] = new \Pimcore\Migrations\Command\ExecuteCommand();
    }

    /*
     * Gets the public 'console.command.pimcore_migrations_command_generatecommand' shared autowired service.
     *
     * @return \Pimcore\Migrations\Command\GenerateCommand
     */
    protected function getConsole_Command_PimcoreMigrationsCommandGeneratecommandService()
    {
        return $this->services['console.command.pimcore_migrations_command_generatecommand'] = new \Pimcore\Migrations\Command\GenerateCommand();
    }

    /*
     * Gets the public 'console.command.pimcore_migrations_command_latestcommand' shared autowired service.
     *
     * @return \Pimcore\Migrations\Command\LatestCommand
     */
    protected function getConsole_Command_PimcoreMigrationsCommandLatestcommandService()
    {
        return $this->services['console.command.pimcore_migrations_command_latestcommand'] = new \Pimcore\Migrations\Command\LatestCommand();
    }

    /*
     * Gets the public 'console.command.pimcore_migrations_command_migratecommand' shared autowired service.
     *
     * @return \Pimcore\Migrations\Command\MigrateCommand
     */
    protected function getConsole_Command_PimcoreMigrationsCommandMigratecommandService()
    {
        return $this->services['console.command.pimcore_migrations_command_migratecommand'] = new \Pimcore\Migrations\Command\MigrateCommand();
    }

    /*
     * Gets the public 'console.command.pimcore_migrations_command_statuscommand' shared autowired service.
     *
     * @return \Pimcore\Migrations\Command\StatusCommand
     */
    protected function getConsole_Command_PimcoreMigrationsCommandStatuscommandService()
    {
        return $this->services['console.command.pimcore_migrations_command_statuscommand'] = new \Pimcore\Migrations\Command\StatusCommand();
    }

    /*
     * Gets the public 'console.command.pimcore_migrations_command_versioncommand' shared autowired service.
     *
     * @return \Pimcore\Migrations\Command\VersionCommand
     */
    protected function getConsole_Command_PimcoreMigrationsCommandVersioncommandService()
    {
        return $this->services['console.command.pimcore_migrations_command_versioncommand'] = new \Pimcore\Migrations\Command\VersionCommand();
    }

    /*
     * Gets the public 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService()
    {
        return $this->services['console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand'] = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, array());
    }

    /*
     * Gets the public 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, -1, 0, false, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, false);
    }

    /*
     * Gets the public 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /*
     * Gets the public 'deprecated.form.registry' shared service.
     *
     * @return \stdClass
     *
     * @deprecated The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_RegistryService()
    {
        @trigger_error('The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->getForm_TypeGuesser_ValidatorService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->getForm_Type_ChoiceService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->getForm_Type_FormService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->getForm_TypeExtension_Form_HttpFoundationService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->getForm_TypeExtension_Form_ValidatorService()) && false ?: '_'}, 5 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->getForm_TypeExtension_Repeated_ValidatorService()) && false ?: '_'}, 6 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->getForm_TypeExtension_Submit_ValidatorService()) && false ?: '_'}, 7 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->getForm_TypeExtension_Upload_ValidatorService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'deprecated.form.registry.csrf' shared service.
     *
     * @return \stdClass
     *
     * @deprecated The service "deprecated.form.registry.csrf" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_Registry_CsrfService()
    {
        @trigger_error('The service "deprecated.form.registry.csrf" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry.csrf'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->getForm_TypeExtension_CsrfService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array(), 'default', '');
    }

    /*
     * Gets the public 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $a->addEventSubscriber(${($_ = isset($this->services['cmf_routing.persistence.doctrine.route_condition_metadata_listener']) ? $this->services['cmf_routing.persistence.doctrine.route_condition_metadata_listener'] : $this->get('cmf_routing.persistence.doctrine.route_condition_metadata_listener')) && false ?: '_'});

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->get('doctrine.dbal.connection_factory')) && false ?: '_'}->createConnection(array('driver' => 'pdo_mysql', 'host' => 'mysql', 'port' => '3306', 'dbname' => 'pimcore', 'user' => 'pimcore', 'password' => 'passw0rd', 'charset' => 'UTF8MB4', 'driverOptions' => array(), 'wrapperClass' => '\\Pimcore\\Db\\Connection', 'defaultTableOptions' => array('charset' => 'UTF8MB4', 'collate' => 'utf8mb4_unicode_ci')), new \Doctrine\DBAL\Configuration(), $a, array('enum' => 'string'));
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleAnalyticsCodeListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleAnalyticsCodeListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleAnalyticsCodeListener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -110);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\CookiePolicyNoticeListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\CookiePolicyNoticeListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\Frontend\CookiePolicyNoticeListener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -109);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleTagManagerListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleTagManagerListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleTagManagerListener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -108);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\TagManagerListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\TagManagerListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\Frontend\TagManagerListener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -107);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\TargetingListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\TargetingListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\Frontend\TargetingListener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -106);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 600);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -120);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener')) && false ?: '_'};
        }, 1 => 'stopPropagationCheck'), 100);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_MaintenancePageListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 620);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->get('response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->get('streamed_response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->get('validate_request_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->get('session_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->get('session.save_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->get('translator_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->get('translator_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->get('debug.debug_handlers_listener')) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->get('debug.debug_handlers_listener')) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->get('security.rememberme.response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->get('twig.exception_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->get('sensio_framework_extra.controller.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->get('sensio_framework_extra.converter.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->get('sensio_framework_extra.security.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_FrontendRoutingListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 512);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_FrontendRoutingListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), 64);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\PimcoreContextListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\PimcoreContextListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_PimcoreContextListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentFallbackListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentFallbackListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_DocumentFallbackListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 20);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\PimcoreHeaderListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\PimcoreHeaderListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_PimcoreHeaderListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_LocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 1);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_LocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\ElementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\ElementListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_ElementListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 3);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\HardlinkCanonicalListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\HardlinkCanonicalListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_HardlinkCanonicalListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_BlockStateListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_BlockStateListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentMetaDataListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentMetaDataListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_DocumentMetaDataListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ControllerViewModelListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ControllerViewModelListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_ControllerViewModelListenerService()) && false ?: '_'};
        }, 1 => 'onKernelView'), 10);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\ContentTemplateListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\ContentTemplateListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_ContentTemplateListenerService()) && false ?: '_'};
        }, 1 => 'onKernelView'), 16);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_EventedControllerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_EventedControllerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_TemplateControllerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_TemplateControllerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelView'), 32);
        $instance->addListener('pimcore.dataobject.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener')) && false ?: '_'};
        }, 1 => 'onElementPostAdd'), 0);
        $instance->addListener('pimcore.document.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener')) && false ?: '_'};
        }, 1 => 'onElementPostAdd'), 0);
        $instance->addListener('pimcore.asset.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener')) && false ?: '_'};
        }, 1 => 'onElementPostAdd'), 0);
        $instance->addListener('pimcore.dataobject.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener')) && false ?: '_'};
        }, 1 => 'onElementPostDelete'), 0);
        $instance->addListener('pimcore.document.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener')) && false ?: '_'};
        }, 1 => 'onElementPostDelete'), 0);
        $instance->addListener('pimcore.asset.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener')) && false ?: '_'};
        }, 1 => 'onElementPostDelete'), 0);
        $instance->addListener('pimcore.admin.dataobject.get.preSendData', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener')) && false ?: '_'};
        }, 1 => 'onAdminElementGetPreSendData'), 0);
        $instance->addListener('pimcore.admin.asset.get.preSendData', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener')) && false ?: '_'};
        }, 1 => 'onAdminElementGetPreSendData'), 0);
        $instance->addListener('pimcore.admin.document.get.preSendData', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->get('Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener')) && false ?: '_'};
        }, 1 => 'onAdminElementGetPreSendData'), 0);
        $instance->addListener('pimcore.dataobject.postCopy', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_ElementTagsListenerService()) && false ?: '_'};
        }, 1 => 'onPostCopy'), 0);
        $instance->addListener('pimcore.document.postCopy', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_ElementTagsListenerService()) && false ?: '_'};
        }, 1 => 'onPostCopy'), 0);
        $instance->addListener('pimcore.asset.postCopy', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_ElementTagsListenerService()) && false ?: '_'};
        }, 1 => 'onPostCopy'), 0);
        $instance->addListener('pimcore.asset.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_ElementTagsListenerService()) && false ?: '_'};
        }, 1 => 'onPostAssetDelete'), -9999);
        $instance->addListener('pimcore.dataobject.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_SearchBackendListenerService()) && false ?: '_'};
        }, 1 => 'onPostAddElement'), 0);
        $instance->addListener('pimcore.document.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_SearchBackendListenerService()) && false ?: '_'};
        }, 1 => 'onPostAddElement'), 0);
        $instance->addListener('pimcore.asset.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_SearchBackendListenerService()) && false ?: '_'};
        }, 1 => 'onPostAddElement'), 0);
        $instance->addListener('pimcore.dataobject.preDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_SearchBackendListenerService()) && false ?: '_'};
        }, 1 => 'onPreDeleteElement'), 0);
        $instance->addListener('pimcore.document.preDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_SearchBackendListenerService()) && false ?: '_'};
        }, 1 => 'onPreDeleteElement'), 0);
        $instance->addListener('pimcore.asset.preDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_SearchBackendListenerService()) && false ?: '_'};
        }, 1 => 'onPreDeleteElement'), 0);
        $instance->addListener('pimcore.dataobject.postUpdate', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_SearchBackendListenerService()) && false ?: '_'};
        }, 1 => 'onPostUpdateElement'), 0);
        $instance->addListener('pimcore.document.postUpdate', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_SearchBackendListenerService()) && false ?: '_'};
        }, 1 => 'onPostUpdateElement'), 0);
        $instance->addListener('pimcore.asset.postUpdate', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_SearchBackendListenerService()) && false ?: '_'};
        }, 1 => 'onPostUpdateElement'), 0);
        $instance->addListener('pimcore.dataobject.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_UUIDListenerService()) && false ?: '_'};
        }, 1 => 'onPostAdd'), 0);
        $instance->addListener('pimcore.document.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_UUIDListenerService()) && false ?: '_'};
        }, 1 => 'onPostAdd'), 0);
        $instance->addListener('pimcore.asset.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_UUIDListenerService()) && false ?: '_'};
        }, 1 => 'onPostAdd'), 0);
        $instance->addListener('pimcore.class.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_UUIDListenerService()) && false ?: '_'};
        }, 1 => 'onPostAdd'), 0);
        $instance->addListener('pimcore.dataobject.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_UUIDListenerService()) && false ?: '_'};
        }, 1 => 'onPostDelete'), 0);
        $instance->addListener('pimcore.document.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_UUIDListenerService()) && false ?: '_'};
        }, 1 => 'onPostDelete'), 0);
        $instance->addListener('pimcore.asset.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_UUIDListenerService()) && false ?: '_'};
        }, 1 => 'onPostDelete'), 0);
        $instance->addListener('pimcore.class.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_UUIDListenerService()) && false ?: '_'};
        }, 1 => 'onPostDelete'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseExceptionListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseExceptionListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_ResponseExceptionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseHeaderListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseHeaderListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_ResponseHeaderListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 32);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_EditmodeListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_EditmodeListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\InternalWysiwygHtmlAttributeFilterListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\InternalWysiwygHtmlAttributeFilterListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_InternalWysiwygHtmlAttributeFilterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleSearchConsoleVerificationListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleSearchConsoleVerificationListener'] : $this->getPimcore_Bundle_CoreBundle_EventListener_Frontend_GoogleSearchConsoleVerificationListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('pimcore.test.kernel.booted', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Migrations\Configuration\ConfigurationFactory']) ? $this->services['Pimcore\Migrations\Configuration\ConfigurationFactory'] : $this->get('Pimcore\Migrations\Configuration\ConfigurationFactory')) && false ?: '_'};
        }, 1 => 'reset'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener'] : $this->getPimcore_Bundle_AdminBundle_EventListener_BruteforceProtectionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener'] : $this->getPimcore_Bundle_AdminBundle_EventListener_BruteforceProtectionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\AdminAuthenticationDoubleCheckListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\AdminAuthenticationDoubleCheckListener'] : $this->getPimcore_Bundle_AdminBundle_EventListener_AdminAuthenticationDoubleCheckListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener'] : $this->getPimcore_Bundle_AdminBundle_EventListener_AdminExceptionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\HttpCacheListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\HttpCacheListener'] : $this->getPimcore_Bundle_AdminBundle_EventListener_HttpCacheListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\UserPerspectiveListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\UserPerspectiveListener'] : $this->getPimcore_Bundle_AdminBundle_EventListener_UserPerspectiveListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\UsageStatisticsListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\UsageStatisticsListener'] : $this->getPimcore_Bundle_AdminBundle_EventListener_UsageStatisticsListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);

        return $instance;
    }

    /*
     * Gets the public 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'\\app/Resources'), array(0 => ($this->targetDirs[3].'\\app')));
    }

    /*
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->get('form.registry')) && false ?: '_'}, ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /*
     * Gets the public 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Cmf\\Bundle\\RoutingBundle\\Form\\Type\\RouteTypeType' => function () {
            return ${($_ = isset($this->services['cmf_routing.route_type_form_type']) ? $this->services['cmf_routing.route_type_form_type'] : $this->get('cmf_routing.route_type_form_type')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
            return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->getForm_Type_ChoiceService()) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
            return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->getForm_Type_FormService()) && false ?: '_'};
        })), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->getForm_TypeExtension_Form_HttpFoundationService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->getForm_TypeExtension_Form_ValidatorService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->getForm_TypeExtension_Upload_ValidatorService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->getForm_TypeExtension_CsrfService()) && false ?: '_'};
        }, 4), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->getForm_TypeExtension_Repeated_ValidatorService()) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->getForm_TypeExtension_Submit_ValidatorService()) && false ?: '_'};
        }, 1)), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->getForm_TypeGuesser_ValidatorService()) && false ?: '_'};
        }, 1), NULL)), ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /*
     * Gets the public 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\ResolvedFormTypeFactory
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /*
     * Gets the public 'form.type.birthday' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType
     *
     * @deprecated The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_BirthdayService()
    {
        @trigger_error('The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /*
     * Gets the public 'form.type.button' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType
     *
     * @deprecated The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ButtonService()
    {
        @trigger_error('The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /*
     * Gets the public 'form.type.checkbox' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType
     *
     * @deprecated The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CheckboxService()
    {
        @trigger_error('The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /*
     * Gets the public 'form.type.collection' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType
     *
     * @deprecated The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CollectionService()
    {
        @trigger_error('The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /*
     * Gets the public 'form.type.country' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType
     *
     * @deprecated The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CountryService()
    {
        @trigger_error('The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /*
     * Gets the public 'form.type.currency' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType
     *
     * @deprecated The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CurrencyService()
    {
        @trigger_error('The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /*
     * Gets the public 'form.type.date' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType
     *
     * @deprecated The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DateService()
    {
        @trigger_error('The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /*
     * Gets the public 'form.type.datetime' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType
     *
     * @deprecated The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DatetimeService()
    {
        @trigger_error('The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /*
     * Gets the public 'form.type.email' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType
     *
     * @deprecated The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_EmailService()
    {
        @trigger_error('The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /*
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     *
     * @deprecated The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_FileService()
    {
        @trigger_error('The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /*
     * Gets the public 'form.type.hidden' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType
     *
     * @deprecated The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_HiddenService()
    {
        @trigger_error('The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /*
     * Gets the public 'form.type.integer' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType
     *
     * @deprecated The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_IntegerService()
    {
        @trigger_error('The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /*
     * Gets the public 'form.type.language' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType
     *
     * @deprecated The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LanguageService()
    {
        @trigger_error('The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /*
     * Gets the public 'form.type.locale' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType
     *
     * @deprecated The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LocaleService()
    {
        @trigger_error('The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /*
     * Gets the public 'form.type.money' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType
     *
     * @deprecated The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_MoneyService()
    {
        @trigger_error('The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /*
     * Gets the public 'form.type.number' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType
     *
     * @deprecated The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_NumberService()
    {
        @trigger_error('The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /*
     * Gets the public 'form.type.password' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType
     *
     * @deprecated The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PasswordService()
    {
        @trigger_error('The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /*
     * Gets the public 'form.type.percent' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType
     *
     * @deprecated The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PercentService()
    {
        @trigger_error('The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /*
     * Gets the public 'form.type.radio' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType
     *
     * @deprecated The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RadioService()
    {
        @trigger_error('The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /*
     * Gets the public 'form.type.range' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType
     *
     * @deprecated The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RangeService()
    {
        @trigger_error('The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /*
     * Gets the public 'form.type.repeated' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType
     *
     * @deprecated The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RepeatedService()
    {
        @trigger_error('The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /*
     * Gets the public 'form.type.reset' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType
     *
     * @deprecated The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ResetService()
    {
        @trigger_error('The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /*
     * Gets the public 'form.type.search' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType
     *
     * @deprecated The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SearchService()
    {
        @trigger_error('The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /*
     * Gets the public 'form.type.submit' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType
     *
     * @deprecated The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SubmitService()
    {
        @trigger_error('The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /*
     * Gets the public 'form.type.text' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType
     *
     * @deprecated The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextService()
    {
        @trigger_error('The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /*
     * Gets the public 'form.type.textarea' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType
     *
     * @deprecated The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextareaService()
    {
        @trigger_error('The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /*
     * Gets the public 'form.type.time' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType
     *
     * @deprecated The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimeService()
    {
        @trigger_error('The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /*
     * Gets the public 'form.type.timezone' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType
     *
     * @deprecated The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimezoneService()
    {
        @trigger_error('The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /*
     * Gets the public 'form.type.url' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType
     *
     * @deprecated The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_UrlService()
    {
        @trigger_error('The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /*
     * Gets the public 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        return $this->services['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(${($_ = isset($this->services['service_locator.e64d23c3bf770e2cf44b71643280668d']) ? $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] : $this->getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, false);
    }

    /*
     * Gets the public 'fragment.renderer.esi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the public 'fragment.renderer.hinclude' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'}, NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the public 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the public 'fragment.renderer.ssi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['controller_resolver']) ? $this->services['controller_resolver'] : $this->getControllerResolverService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->getArgumentResolver_RequestAttributeService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->getArgumentResolver_RequestService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->getArgumentResolver_SessionService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->getSecurity_UserValueResolverService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['Pimcore\Controller\ArgumentValueResolver\DocumentValueResolver']) ? $this->services['Pimcore\Controller\ArgumentValueResolver\DocumentValueResolver'] : $this->getPimcore_Controller_ArgumentValueResolver_DocumentValueResolverService()) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['Pimcore\Controller\ArgumentValueResolver\ViewModelValueResolver']) ? $this->services['Pimcore\Controller\ArgumentValueResolver\ViewModelValueResolver'] : $this->getPimcore_Controller_ArgumentValueResolver_ViewModelValueResolverService()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['Pimcore\Controller\ArgumentValueResolver\EditmodeValueResolver']) ? $this->services['Pimcore\Controller\ArgumentValueResolver\EditmodeValueResolver'] : $this->getPimcore_Controller_ArgumentValueResolver_EditmodeValueResolverService()) && false ?: '_'};
            yield 7 => ${($_ = isset($this->services['Pimcore\Controller\ArgumentValueResolver\TemplateVarsValueResolver']) ? $this->services['Pimcore\Controller\ArgumentValueResolver\TemplateVarsValueResolver'] : $this->getPimcore_Controller_ArgumentValueResolver_TemplateVarsValueResolverService()) && false ?: '_'};
            yield 8 => ${($_ = isset($this->services['Pimcore\Controller\ArgumentValueResolver\WebsiteConfigValueResolver']) ? $this->services['Pimcore\Controller\ArgumentValueResolver\WebsiteConfigValueResolver'] : $this->getPimcore_Controller_ArgumentValueResolver_WebsiteConfigValueResolverService()) && false ?: '_'};
            yield 9 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->getArgumentResolver_ServiceService()) && false ?: '_'};
            yield 10 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->getArgumentResolver_DefaultService()) && false ?: '_'};
            yield 11 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->getArgumentResolver_VariadicService()) && false ?: '_'};
        }, 12)));
    }

    /*
     * Gets the public 'kernel.class_cache.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer
     *
     * @deprecated The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        @trigger_error('The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer(array(0 => 'Symfony\\Component\\HttpFoundation\\ParameterBag', 1 => 'Symfony\\Component\\HttpFoundation\\HeaderBag', 2 => 'Symfony\\Component\\HttpFoundation\\FileBag', 3 => 'Symfony\\Component\\HttpFoundation\\ServerBag', 4 => 'Symfony\\Component\\HttpFoundation\\Request', 5 => 'Symfony\\Component\\HttpKernel\\Kernel'));
    }

    /*
     * Gets the public 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, 'en', ${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the public 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.activation_strategy.not_found' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy
     */
    protected function getMonolog_ActivationStrategy_NotFoundService()
    {
        return $this->services['monolog.activation_strategy.not_found'] = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy();
    }

    /*
     * Gets the public 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.handler.fingers_crossed.error_level_activation_strategy' shared service.
     *
     * @return \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy
     */
    protected function getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService()
    {
        return $this->services['monolog.handler.fingers_crossed.error_level_activation_strategy'] = new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy();
    }

    /*
     * Gets the public 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler(${($_ = isset($this->services['monolog.handler.nested']) ? $this->services['monolog.handler.nested'] : $this->get('monolog.handler.nested')) && false ?: '_'}, 400, 2000, true, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.handler.nested' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_NestedService()
    {
        $this->services['monolog.handler.nested'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\logs/prod.log'), 100, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.handler.null_internal' shared service.
     *
     * @return \Monolog\Handler\NullHandler
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /*
     * Gets the public 'monolog.logger.admin' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_AdminService()
    {
        $this->services['monolog.logger.admin'] = $instance = new \Symfony\Bridge\Monolog\Logger('admin');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ConsoleService()
    {
        $this->services['monolog.logger.console'] = $instance = new \Symfony\Bridge\Monolog\Logger('console');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.init' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_InitService()
    {
        $this->services['monolog.logger.init'] = $instance = new \Symfony\Bridge\Monolog\Logger('init');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.pimcore' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PimcoreService()
    {
        $this->services['monolog.logger.pimcore'] = $instance = new \Symfony\Bridge\Monolog\Logger('pimcore');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.pimcore.maintenance' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_Pimcore_MaintenanceService()
    {
        $this->services['monolog.logger.pimcore.maintenance'] = $instance = new \Symfony\Bridge\Monolog\Logger('pimcore.maintenance');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.pimcore_admin.session' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PimcoreAdmin_SessionService()
    {
        $this->services['monolog.logger.pimcore_admin.session'] = $instance = new \Symfony\Bridge\Monolog\Logger('pimcore_admin.session');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.pimcore_api' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PimcoreApiService()
    {
        $this->services['monolog.logger.pimcore_api'] = $instance = new \Symfony\Bridge\Monolog\Logger('pimcore_api');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.router' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.routing' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RoutingService()
    {
        $this->services['monolog.logger.routing'] = $instance = new \Symfony\Bridge\Monolog\Logger('routing');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.session' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SessionService()
    {
        $this->services['monolog.logger.session'] = $instance = new \Symfony\Bridge\Monolog\Logger('session');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore.bundle_locator' shared autowired service.
     *
     * @return \Pimcore\HttpKernel\BundleLocator\BundleLocator
     */
    protected function getPimcore_BundleLocatorService()
    {
        return $this->services['pimcore.bundle_locator'] = new \Pimcore\HttpKernel\BundleLocator\BundleLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.cache.core.handler' shared autowired service.
     *
     * @return \Pimcore\Cache\Core\EventDispatchingCoreHandler
     */
    protected function getPimcore_Cache_Core_HandlerService()
    {
        $this->services['pimcore.cache.core.handler'] = $instance = new \Pimcore\Cache\Core\EventDispatchingCoreHandler(${($_ = isset($this->services['pimcore.cache.core.pool.doctrine']) ? $this->services['pimcore.cache.core.pool.doctrine'] : $this->get('pimcore.cache.core.pool.doctrine')) && false ?: '_'}, ${($_ = isset($this->services['pimcore.cache.core.write_lock']) ? $this->services['pimcore.cache.core.write_lock'] : $this->get('pimcore.cache.core.write_lock')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher')) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore.cache.core.pool.array' shared autowired service.
     *
     * @return \Pimcore\Cache\Pool\SymfonyAdapterProxy
     */
    protected function getPimcore_Cache_Core_Pool_ArrayService()
    {
        $this->services['pimcore.cache.core.pool.array'] = $instance = new \Pimcore\Cache\Pool\SymfonyAdapterProxy(${($_ = isset($this->services['pimcore.cache.core.symfony_adapter.array']) ? $this->services['pimcore.cache.core.symfony_adapter.array'] : $this->get('pimcore.cache.core.symfony_adapter.array')) && false ?: '_'}, 2419200);

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore.cache.core.pool.doctrine' shared service.
     *
     * @return \Pimcore\Cache\Pool\Doctrine
     */
    protected function getPimcore_Cache_Core_Pool_DoctrineService()
    {
        $this->services['pimcore.cache.core.pool.doctrine'] = $instance = new \Pimcore\Cache\Pool\Doctrine(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->get('doctrine.dbal.default_connection')) && false ?: '_'}, 2419200);

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore.cache.core.pool.filesystem' shared autowired service.
     *
     * @return \Pimcore\Cache\Pool\SymfonyAdapterProxy
     */
    protected function getPimcore_Cache_Core_Pool_FilesystemService()
    {
        $this->services['pimcore.cache.core.pool.filesystem'] = $instance = new \Pimcore\Cache\Pool\SymfonyAdapterProxy(${($_ = isset($this->services['pimcore.cache.core.symfony_adapter.filesystem']) ? $this->services['pimcore.cache.core.symfony_adapter.filesystem'] : $this->get('pimcore.cache.core.symfony_adapter.filesystem')) && false ?: '_'}, 2419200);

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore.cache.core.symfony_adapter.array' shared autowired service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPimcore_Cache_Core_SymfonyAdapter_ArrayService()
    {
        $this->services['pimcore.cache.core.symfony_adapter.array'] = $instance = new \Symfony\Component\Cache\Adapter\ArrayAdapter(2419200, false);

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore.cache.core.symfony_adapter.filesystem' shared autowired service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPimcore_Cache_Core_SymfonyAdapter_FilesystemService()
    {
        $this->services['pimcore.cache.core.symfony_adapter.filesystem'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('pimcore', 2419200, (__DIR__.'/pimcore'));

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore.cache.core.write_lock' shared autowired service.
     *
     * @return \Pimcore\Cache\Core\WriteLock
     */
    protected function getPimcore_Cache_Core_WriteLockService()
    {
        $this->services['pimcore.cache.core.write_lock'] = $instance = new \Pimcore\Cache\Core\WriteLock(${($_ = isset($this->services['pimcore.cache.core.pool.doctrine']) ? $this->services['pimcore.cache.core.pool.doctrine'] : $this->get('pimcore.cache.core.pool.doctrine')) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore.custom_report.adapter.factories' shared autowired service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getPimcore_CustomReport_Adapter_FactoriesService()
    {
        return $this->services['pimcore.custom_report.adapter.factories'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('analytics' => function () {
            return ${($_ = isset($this->services['pimcore.custom_report.adapter.factory.analytics']) ? $this->services['pimcore.custom_report.adapter.factory.analytics'] : $this->get('pimcore.custom_report.adapter.factory.analytics')) && false ?: '_'};
        }, 'sql' => function () {
            return ${($_ = isset($this->services['pimcore.custom_report.adapter.factory.sql']) ? $this->services['pimcore.custom_report.adapter.factory.sql'] : $this->get('pimcore.custom_report.adapter.factory.sql')) && false ?: '_'};
        }));
    }

    /*
     * Gets the public 'pimcore.custom_report.adapter.factory.analytics' shared autowired service.
     *
     * @return \Pimcore\Model\Tool\CustomReport\Adapter\DefaultCustomReportAdapterFactory
     */
    protected function getPimcore_CustomReport_Adapter_Factory_AnalyticsService()
    {
        return $this->services['pimcore.custom_report.adapter.factory.analytics'] = new \Pimcore\Model\Tool\CustomReport\Adapter\DefaultCustomReportAdapterFactory('Pimcore\\Model\\Tool\\CustomReport\\Adapter\\Analytics');
    }

    /*
     * Gets the public 'pimcore.custom_report.adapter.factory.sql' shared autowired service.
     *
     * @return \Pimcore\Model\Tool\CustomReport\Adapter\DefaultCustomReportAdapterFactory
     */
    protected function getPimcore_CustomReport_Adapter_Factory_SqlService()
    {
        return $this->services['pimcore.custom_report.adapter.factory.sql'] = new \Pimcore\Model\Tool\CustomReport\Adapter\DefaultCustomReportAdapterFactory('Pimcore\\Model\\Tool\\CustomReport\\Adapter\\Sql');
    }

    /*
     * Gets the public 'pimcore.document.newsletter.factory.csv' shared autowired service.
     *
     * @return \Pimcore\Document\Newsletter\DefaultAddressSourceAdapterFactory
     */
    protected function getPimcore_Document_Newsletter_Factory_CsvService()
    {
        return $this->services['pimcore.document.newsletter.factory.csv'] = new \Pimcore\Document\Newsletter\DefaultAddressSourceAdapterFactory('Pimcore\\Document\\Newsletter\\AddressSourceAdapter\\CsvList');
    }

    /*
     * Gets the public 'pimcore.document.newsletter.factory.default' shared autowired service.
     *
     * @return \Pimcore\Document\Newsletter\DefaultAddressSourceAdapterFactory
     */
    protected function getPimcore_Document_Newsletter_Factory_DefaultService()
    {
        return $this->services['pimcore.document.newsletter.factory.default'] = new \Pimcore\Document\Newsletter\DefaultAddressSourceAdapterFactory('Pimcore\\Document\\Newsletter\\AddressSourceAdapter\\DefaultAdapter');
    }

    /*
     * Gets the public 'pimcore.document.newsletter.factory.report' shared autowired service.
     *
     * @return \Pimcore\Document\Newsletter\ReportAddressSourceAdapterFactory
     */
    protected function getPimcore_Document_Newsletter_Factory_ReportService()
    {
        return $this->services['pimcore.document.newsletter.factory.report'] = new \Pimcore\Document\Newsletter\ReportAddressSourceAdapterFactory(${($_ = isset($this->services['pimcore.custom_report.adapter.factories']) ? $this->services['pimcore.custom_report.adapter.factories'] : $this->get('pimcore.custom_report.adapter.factories')) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.document.tag.handler' shared autowired service.
     *
     * @return \Pimcore\Document\Tag\DelegatingTagHandler
     */
    protected function getPimcore_Document_Tag_HandlerService()
    {
        $a = new \Pimcore\Document\Tag\TagHandler(${($_ = isset($this->services['Pimcore\Extension\Document\Areabrick\AreabrickManager']) ? $this->services['Pimcore\Extension\Document\Areabrick\AreabrickManager'] : $this->get('Pimcore\Extension\Document\Areabrick\AreabrickManager')) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'}, ${($_ = isset($this->services['pimcore.bundle_locator']) ? $this->services['pimcore.bundle_locator'] : $this->get('pimcore.bundle_locator')) && false ?: '_'}, ${($_ = isset($this->services['pimcore.web_path_resolver']) ? $this->services['pimcore.web_path_resolver'] : $this->get('pimcore.web_path_resolver')) && false ?: '_'}, ${($_ = isset($this->services['pimcore.templating.action_renderer']) ? $this->services['pimcore.templating.action_renderer'] : $this->get('pimcore.templating.action_renderer')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'}, new \Pimcore\Bundle\AdminBundle\Translation\AdminUserTranslator(${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->get('Pimcore\Translation\Translator')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader'] : $this->get('Pimcore\Bundle\AdminBundle\Security\User\UserLoader')) && false ?: '_'}));
        $a->setLogger(${($_ = isset($this->services['monolog.logger.pimcore']) ? $this->services['monolog.logger.pimcore'] : $this->get('monolog.logger.pimcore')) && false ?: '_'});

        $this->services['pimcore.document.tag.handler'] = $instance = new \Pimcore\Document\Tag\DelegatingTagHandler();

        $instance->addHandler($a);

        return $instance;
    }

    /*
     * Gets the public 'pimcore.document.tag.naming.migration.strategy.analyze' shared autowired service.
     *
     * @return \Pimcore\Document\Tag\NamingStrategy\Migration\AnalyzeMigrationStrategy
     */
    protected function getPimcore_Document_Tag_Naming_Migration_Strategy_AnalyzeService()
    {
        return $this->services['pimcore.document.tag.naming.migration.strategy.analyze'] = new \Pimcore\Document\Tag\NamingStrategy\Migration\AnalyzeMigrationStrategy(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->get('doctrine.dbal.default_connection')) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.document.tag.naming.migration.strategy.render' shared autowired service.
     *
     * @return \Pimcore\Document\Tag\NamingStrategy\Migration\RenderMigrationStrategy
     */
    protected function getPimcore_Document_Tag_Naming_Migration_Strategy_RenderService()
    {
        return $this->services['pimcore.document.tag.naming.migration.strategy.render'] = new \Pimcore\Document\Tag\NamingStrategy\Migration\RenderMigrationStrategy(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->get('Pimcore\Http\Request\Resolver\EditmodeResolver')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader'] : $this->get('Pimcore\Bundle\AdminBundle\Security\User\UserLoader')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Session\AdminSessionBagConfigurator']) ? $this->services['Pimcore\Bundle\AdminBundle\Session\AdminSessionBagConfigurator'] : $this->getPimcore_Bundle_AdminBundle_Session_AdminSessionBagConfiguratorService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Routing\Dynamic\DocumentRouteHandler']) ? $this->services['Pimcore\Routing\Dynamic\DocumentRouteHandler'] : $this->getPimcore_Routing_Dynamic_DocumentRouteHandlerService()) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.document.tag.naming.strategy.legacy' shared autowired service.
     *
     * @return \Pimcore\Document\Tag\NamingStrategy\LegacyNamingStrategy
     */
    protected function getPimcore_Document_Tag_Naming_Strategy_LegacyService()
    {
        return $this->services['pimcore.document.tag.naming.strategy.legacy'] = new \Pimcore\Document\Tag\NamingStrategy\LegacyNamingStrategy();
    }

    /*
     * Gets the public 'pimcore.document.tag.naming.strategy.nested' shared autowired service.
     *
     * @return \Pimcore\Document\Tag\NamingStrategy\NestedNamingStrategy
     */
    protected function getPimcore_Document_Tag_Naming_Strategy_NestedService()
    {
        return $this->services['pimcore.document.tag.naming.strategy.nested'] = new \Pimcore\Document\Tag\NamingStrategy\NestedNamingStrategy();
    }

    /*
     * Gets the public 'pimcore.http_client' shared autowired service.
     *
     * @return \GuzzleHttp\Client
     */
    protected function getPimcore_HttpClientService()
    {
        return $this->services['pimcore.http_client'] = \Pimcore\Http\ClientFactory::createHttpClient();
    }

    /*
     * Gets the public 'pimcore.implementation_loader.document.tag' shared autowired service.
     *
     * @return \Pimcore\Model\Document\Tag\Loader\TagLoader
     */
    protected function getPimcore_ImplementationLoader_Document_TagService()
    {
        return $this->services['pimcore.implementation_loader.document.tag'] = new \Pimcore\Model\Document\Tag\Loader\TagLoader(array(0 => new \Pimcore\Model\Document\Tag\Loader\PrefixLoader(array(0 => '\\Pimcore\\Model\\Document\\Tag\\', 1 => '\\Document_Tag_'))));
    }

    /*
     * Gets the public 'pimcore.implementation_loader.object.data' shared autowired service.
     *
     * @return \Pimcore\Model\DataObject\ClassDefinition\Loader\DataLoader
     */
    protected function getPimcore_ImplementationLoader_Object_DataService()
    {
        return $this->services['pimcore.implementation_loader.object.data'] = new \Pimcore\Model\DataObject\ClassDefinition\Loader\DataLoader(array(0 => new \Pimcore\Loader\ImplementationLoader\ClassMapLoader(array('block' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Block', 'calculatedValue' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\CalculatedValue', 'checkbox' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Checkbox', 'classificationstore' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Classificationstore', 'country' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Country', 'countrymultiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Countrymultiselect', 'date' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Date', 'datetime' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Datetime', 'email' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Email', 'externalImage' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\ExternalImage', 'fieldcollections' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Fieldcollections', 'firstname' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Firstname', 'gender' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Gender', 'geobounds' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Geobounds', 'geopoint' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Geopoint', 'geopolygon' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Geopolygon', 'hotspotimage' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Hotspotimage', 'href' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Href', 'image' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Image', 'input' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Input', 'language' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Language', 'languagemultiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Languagemultiselect', 'lastname' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Lastname', 'link' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Link', 'localizedfields' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Localizedfields', 'multihref' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Multihref', 'multihrefMetadata' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\MultihrefMetadata', 'multiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Multiselect', 'newsletterActive' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\NewsletterActive', 'nonownerobjects' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Nonownerobjects', 'numeric' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Numeric', 'objectbricks' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Objectbricks', 'objects' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Objects', 'objectsMetadata' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\ObjectsMetadata', 'password' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Password', 'persona' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Persona', 'personamultiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Personamultiselect', 'quantityValue' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\QuantityValue', 'inputQuantityValue' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\InputQuantityValue', 'select' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Select', 'slider' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Slider', 'structuredTable' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\StructuredTable', 'table' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Table', 'textarea' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Textarea', 'time' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Time', 'user' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\User', 'video' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Video', 'wysiwyg' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Wysiwyg')), 1 => new \Pimcore\Loader\ImplementationLoader\PrefixLoader(array(0 => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\', 1 => '\\Object_Class_Data_'))));
    }

    /*
     * Gets the public 'pimcore.implementation_loader.object.layout' shared autowired service.
     *
     * @return \Pimcore\Model\DataObject\ClassDefinition\Loader\LayoutLoader
     */
    protected function getPimcore_ImplementationLoader_Object_LayoutService()
    {
        return $this->services['pimcore.implementation_loader.object.layout'] = new \Pimcore\Model\DataObject\ClassDefinition\Loader\LayoutLoader(array(0 => new \Pimcore\Loader\ImplementationLoader\PrefixLoader(array(0 => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Layout\\', 1 => '\\Object_Class_Layout_'))));
    }

    /*
     * Gets the public 'pimcore.newsletter.address_source_adapter.factories' shared autowired service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getPimcore_Newsletter_AddressSourceAdapter_FactoriesService()
    {
        return $this->services['pimcore.newsletter.address_source_adapter.factories'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('csvList' => function () {
            return ${($_ = isset($this->services['pimcore.document.newsletter.factory.csv']) ? $this->services['pimcore.document.newsletter.factory.csv'] : $this->get('pimcore.document.newsletter.factory.csv')) && false ?: '_'};
        }, 'defaultAdapter' => function () {
            return ${($_ = isset($this->services['pimcore.document.newsletter.factory.default']) ? $this->services['pimcore.document.newsletter.factory.default'] : $this->get('pimcore.document.newsletter.factory.default')) && false ?: '_'};
        }, 'reportAdapter' => function () {
            return ${($_ = isset($this->services['pimcore.document.newsletter.factory.report']) ? $this->services['pimcore.document.newsletter.factory.report'] : $this->get('pimcore.document.newsletter.factory.report')) && false ?: '_'};
        }));
    }

    /*
     * Gets the public 'pimcore.routing.router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getPimcore_Routing_Router_RequestContextService()
    {
        return $this->services['pimcore.routing.router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the public 'pimcore.service.context.pimcore_context_guesser' shared autowired service.
     *
     * @return \Pimcore\Http\Context\PimcoreContextGuesser
     */
    protected function getPimcore_Service_Context_PimcoreContextGuesserService()
    {
        $this->services['pimcore.service.context.pimcore_context_guesser'] = $instance = new \Pimcore\Http\Context\PimcoreContextGuesser(${($_ = isset($this->services['pimcore.service.request_matcher_factory']) ? $this->services['pimcore.service.request_matcher_factory'] : $this->get('pimcore.service.request_matcher_factory')) && false ?: '_'});

        $instance->addContextRoutes('profiler', array(0 => array('path' => '^/_(_profiler|wdt)', 'route' => false, 'host' => false, 'methods' => array())));
        $instance->addContextRoutes('admin', array(0 => array('path' => '^/admin', 'route' => false, 'host' => false, 'methods' => array()), 1 => array('route' => '^pimcore_admin_', 'path' => false, 'host' => false, 'methods' => array())));
        $instance->addContextRoutes('webservice', array(0 => array('path' => '^/webservice', 'route' => false, 'host' => false, 'methods' => array()), 1 => array('route' => '^pimcore_webservice', 'path' => false, 'host' => false, 'methods' => array())));
        $instance->addContextRoutes('plugin', array(0 => array('path' => '^/plugin', 'route' => false, 'host' => false, 'methods' => array())));
        $instance->addContextRoutes('install', array(0 => array('path' => '^/install', 'route' => false, 'host' => false, 'methods' => array())));

        return $instance;
    }

    /*
     * Gets the public 'pimcore.service.request_matcher_factory' shared autowired service.
     *
     * @return \Pimcore\Http\RequestMatcherFactory
     */
    protected function getPimcore_Service_RequestMatcherFactoryService()
    {
        return $this->services['pimcore.service.request_matcher_factory'] = new \Pimcore\Http\RequestMatcherFactory();
    }

    /*
     * Gets the public 'pimcore.templating.action_renderer' shared autowired service.
     *
     * @return \Pimcore\Templating\Renderer\ActionRenderer
     */
    protected function getPimcore_Templating_ActionRendererService()
    {
        return $this->services['pimcore.templating.action_renderer'] = new \Pimcore\Templating\Renderer\ActionRenderer(${($_ = isset($this->services['templating.helper.actions']) ? $this->services['templating.helper.actions'] : $this->get('templating.helper.actions')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Controller\Config\ConfigNormalizer']) ? $this->services['Pimcore\Controller\Config\ConfigNormalizer'] : $this->get('Pimcore\Controller\Config\ConfigNormalizer')) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.templating.engine.php' shared service.
     *
     * @return \Pimcore\Templating\PhpEngine
     */
    protected function getPimcore_Templating_Engine_PhpService()
    {
        $this->services['pimcore.templating.engine.php'] = $instance = new \Pimcore\Templating\PhpEngine(${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, $this, ${($_ = isset($this->services['templating.loader']) ? $this->services['templating.loader'] : $this->get('templating.loader')) && false ?: '_'}, ${($_ = isset($this->services['templating.globals']) ? $this->services['templating.globals'] : $this->get('templating.globals')) && false ?: '_'});

        $instance->setCharset('UTF-8');
        $instance->setHelpers(array('slots' => 'templating.helper.slots', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'assets' => 'templating.helper.assets', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'action' => 'Pimcore\\Templating\\Helper\\Action', 'getParam' => 'Pimcore\\Templating\\Helper\\GetParam', 'getAllParams' => 'Pimcore\\Templating\\Helper\\GetAllParams', 'glossary' => 'Pimcore\\Templating\\Helper\\Glossary', 'inc' => 'Pimcore\\Templating\\Helper\\Inc', 'pimcoreUrl' => 'Pimcore\\Templating\\Helper\\PimcoreUrl', 'placeholder' => 'Pimcore\\Templating\\Helper\\Placeholder', 'headTitle' => 'Pimcore\\Templating\\Helper\\HeadTitle', 'headLink' => 'Pimcore\\Templating\\Helper\\HeadLink', 'headScript' => 'Pimcore\\Templating\\Helper\\HeadScript', 'inlineScript' => 'Pimcore\\Templating\\Helper\\InlineScript', 'headStyle' => 'Pimcore\\Templating\\Helper\\HeadStyle', 'headMeta' => 'Pimcore\\Templating\\Helper\\HeadMeta', 'device' => 'Pimcore\\Templating\\Helper\\Device', 'cache' => 'Pimcore\\Templating\\Helper\\Cache', 'navigation' => 'Pimcore\\Templating\\Helper\\Navigation', 'websiteConfig' => 'Pimcore\\Templating\\Helper\\WebsiteConfig', 'translate' => 'pimcore.templating.view_helper.translate', 'translateAdmin' => 'pimcore.templating.view_helper.translate_admin'));
        $instance->addHelperBroker(new \Pimcore\Templating\HelperBroker\HelperShortcuts(${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'}));
        $instance->addHelperBroker(new \Pimcore\Templating\HelperBroker\TemplatingHelper());
        $instance->addHelperBroker(new \Pimcore\Templating\HelperBroker\DocumentTag(${($_ = isset($this->services['pimcore.templating.tag_renderer']) ? $this->services['pimcore.templating.tag_renderer'] : $this->get('pimcore.templating.tag_renderer')) && false ?: '_'}));
        $instance->addHelperBroker(new \Pimcore\Templating\HelperBroker\DocumentMethod());

        return $instance;
    }

    /*
     * Gets the public 'pimcore.templating.engine.twig' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     */
    protected function getPimcore_Templating_Engine_TwigService()
    {
        return $this->services['pimcore.templating.engine.twig'] = new \Symfony\Bundle\TwigBundle\TwigEngine(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.templating.include_renderer' shared autowired service.
     *
     * @return \Pimcore\Templating\Renderer\IncludeRenderer
     */
    protected function getPimcore_Templating_IncludeRendererService()
    {
        return $this->services['pimcore.templating.include_renderer'] = new \Pimcore\Templating\Renderer\IncludeRenderer(${($_ = isset($this->services['pimcore.templating.action_renderer']) ? $this->services['pimcore.templating.action_renderer'] : $this->get('pimcore.templating.action_renderer')) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.templating.tag_renderer' shared autowired service.
     *
     * @return \Pimcore\Templating\Renderer\TagRenderer
     */
    protected function getPimcore_Templating_TagRendererService()
    {
        $this->services['pimcore.templating.tag_renderer'] = $instance = new \Pimcore\Templating\Renderer\TagRenderer(${($_ = isset($this->services['pimcore.implementation_loader.document.tag']) ? $this->services['pimcore.implementation_loader.document.tag'] : $this->get('pimcore.implementation_loader.document.tag')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->get('Pimcore\Http\Request\Resolver\EditmodeResolver')) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore.templating.view_helper.placeholder.container_service' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Placeholder\ContainerService
     */
    protected function getPimcore_Templating_ViewHelper_Placeholder_ContainerServiceService()
    {
        return $this->services['pimcore.templating.view_helper.placeholder.container_service'] = new \Pimcore\Templating\Helper\Placeholder\ContainerService();
    }

    /*
     * Gets the public 'pimcore.templating.view_helper.translate' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Translate
     */
    protected function getPimcore_Templating_ViewHelper_TranslateService()
    {
        $this->services['pimcore.templating.view_helper.translate'] = $instance = new \Pimcore\Templating\Helper\Translate(${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->get('Pimcore\Translation\Translator')) && false ?: '_'});

        $instance->setDomain('messages');

        return $instance;
    }

    /*
     * Gets the public 'pimcore.templating.view_helper.translate_admin' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Translate
     */
    protected function getPimcore_Templating_ViewHelper_TranslateAdminService()
    {
        $this->services['pimcore.templating.view_helper.translate_admin'] = $instance = new \Pimcore\Templating\Helper\Translate(${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->get('Pimcore\Translation\Translator')) && false ?: '_'});

        $instance->setDomain('admin');

        return $instance;
    }

    /*
     * Gets the public 'pimcore.twig.extension.document_tag' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\DocumentTagExtension
     */
    protected function getPimcore_Twig_Extension_DocumentTagService()
    {
        return $this->services['pimcore.twig.extension.document_tag'] = new \Pimcore\Twig\Extension\DocumentTagExtension(${($_ = isset($this->services['pimcore.templating.tag_renderer']) ? $this->services['pimcore.templating.tag_renderer'] : $this->get('pimcore.templating.tag_renderer')) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.twig.extension.glossary' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\GlossaryExtension
     */
    protected function getPimcore_Twig_Extension_GlossaryService()
    {
        return $this->services['pimcore.twig.extension.glossary'] = new \Pimcore\Twig\Extension\GlossaryExtension(${($_ = isset($this->services['Pimcore\Templating\Helper\Glossary']) ? $this->services['Pimcore\Templating\Helper\Glossary'] : $this->get('Pimcore\Templating\Helper\Glossary')) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.twig.extension.helpers' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\HelpersExtension
     */
    protected function getPimcore_Twig_Extension_HelpersService()
    {
        return $this->services['pimcore.twig.extension.helpers'] = new \Pimcore\Twig\Extension\HelpersExtension();
    }

    /*
     * Gets the public 'pimcore.twig.extension.navigation' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\NavigationExtension
     */
    protected function getPimcore_Twig_Extension_NavigationService()
    {
        return $this->services['pimcore.twig.extension.navigation'] = new \Pimcore\Twig\Extension\NavigationExtension(${($_ = isset($this->services['Pimcore\Templating\Helper\Navigation']) ? $this->services['Pimcore\Templating\Helper\Navigation'] : $this->get('Pimcore\Templating\Helper\Navigation')) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.twig.extension.pimcore_object' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\PimcoreObjectExtension
     */
    protected function getPimcore_Twig_Extension_PimcoreObjectService()
    {
        return $this->services['pimcore.twig.extension.pimcore_object'] = new \Pimcore\Twig\Extension\PimcoreObjectExtension();
    }

    /*
     * Gets the public 'pimcore.twig.extension.subrequest' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\SubrequestExtension
     */
    protected function getPimcore_Twig_Extension_SubrequestService()
    {
        return $this->services['pimcore.twig.extension.subrequest'] = new \Pimcore\Twig\Extension\SubrequestExtension(${($_ = isset($this->services['Pimcore\Templating\Helper\Inc']) ? $this->services['Pimcore\Templating\Helper\Inc'] : $this->get('Pimcore\Templating\Helper\Inc')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Templating\Helper\Action']) ? $this->services['Pimcore\Templating\Helper\Action'] : $this->get('Pimcore\Templating\Helper\Action')) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.twig.extension.templating_helper' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\TemplatingHelperExtension
     */
    protected function getPimcore_Twig_Extension_TemplatingHelperService()
    {
        return $this->services['pimcore.twig.extension.templating_helper'] = new \Pimcore\Twig\Extension\TemplatingHelperExtension(${($_ = isset($this->services['pimcore.templating.engine.php']) ? $this->services['pimcore.templating.engine.php'] : $this->get('pimcore.templating.engine.php')) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.web_path_resolver' shared autowired service.
     *
     * @return \Pimcore\HttpKernel\WebPathResolver
     */
    protected function getPimcore_WebPathResolverService()
    {
        return $this->services['pimcore.web_path_resolver'] = new \Pimcore\HttpKernel\WebPathResolver();
    }

    /*
     * Gets the public 'pimcore_admin.security.admin_authenticator' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\Guard\AdminAuthenticator
     */
    protected function getPimcoreAdmin_Security_AdminAuthenticatorService()
    {
        $this->services['pimcore_admin.security.admin_authenticator'] = $instance = new \Pimcore\Bundle\AdminBundle\Security\Guard\AdminAuthenticator(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->get('cmf_routing.router')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->get('Pimcore\Translation\Translator')) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, ${($_ = isset($this->services['pimcore_admin.security.bruteforce_protection_handler']) ? $this->services['pimcore_admin.security.bruteforce_protection_handler'] : $this->get('pimcore_admin.security.bruteforce_protection_handler')) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore_admin.security.bruteforce_protection_handler' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\BruteforceProtectionHandler
     */
    protected function getPimcoreAdmin_Security_BruteforceProtectionHandlerService()
    {
        $this->services['pimcore_admin.security.bruteforce_protection_handler'] = $instance = new \Pimcore\Bundle\AdminBundle\Security\BruteforceProtectionHandler(${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore_admin.security.logout_success_handler' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\LogoutSuccessHandler
     */
    protected function getPimcoreAdmin_Security_LogoutSuccessHandlerService()
    {
        $this->services['pimcore_admin.security.logout_success_handler'] = $instance = new \Pimcore\Bundle\AdminBundle\Security\LogoutSuccessHandler(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->get('cmf_routing.router')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher')) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore_admin.security.password_encoder_factory' shared autowired service.
     *
     * @return \Pimcore\Security\Encoder\Factory\UserAwareEncoderFactory
     */
    protected function getPimcoreAdmin_Security_PasswordEncoderFactoryService()
    {
        return $this->services['pimcore_admin.security.password_encoder_factory'] = new \Pimcore\Security\Encoder\Factory\UserAwareEncoderFactory('Pimcore\\Bundle\\AdminBundle\\Security\\Encoder\\AdminPasswordEncoder');
    }

    /*
     * Gets the public 'pimcore_admin.security.webservice_authenticator' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\Guard\WebserviceAuthenticator
     */
    protected function getPimcoreAdmin_Security_WebserviceAuthenticatorService()
    {
        $this->services['pimcore_admin.security.webservice_authenticator'] = $instance = new \Pimcore\Bundle\AdminBundle\Security\Guard\WebserviceAuthenticator();

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore_admin.serializer' shared autowired service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getPimcoreAdmin_SerializerService()
    {
        return $this->services['pimcore_admin.serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => ${($_ = isset($this->services['pimcore_admin.serializer.normalizer.reference_loop']) ? $this->services['pimcore_admin.serializer.normalizer.reference_loop'] : $this->getPimcoreAdmin_Serializer_Normalizer_ReferenceLoopService()) && false ?: '_'}), array(0 => ${($_ = isset($this->services['pimcore_admin.serializer.encoder.json']) ? $this->services['pimcore_admin.serializer.encoder.json'] : $this->getPimcoreAdmin_Serializer_Encoder_JsonService()) && false ?: '_'}));
    }

    /*
     * Gets the public 'pimcore_admin.webservice.service' shared autowired service.
     *
     * @return \Pimcore\Model\Webservice\Service
     */
    protected function getPimcoreAdmin_Webservice_ServiceService()
    {
        return $this->services['pimcore_admin.webservice.service'] = new \Pimcore\Model\Webservice\Service();
    }

    /*
     * Gets the public 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, ${($_ = isset($this->services['cache.property_access']) ? $this->services['cache.property_access'] : $this->getCache_PropertyAccessService()) && false ?: '_'});
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /*
     * Gets the public 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->get('cmf_routing.router')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['pimcore.routing.router.request_context']) ? $this->services['pimcore.routing.router.request_context'] : $this->get('pimcore.routing.router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'};
        $b = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'};

        $c = new \Pimcore\Routing\Loader\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Config\Loader\GlobFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader(new \Pimcore\Routing\Loader\BundleRoutingLoader(new \Pimcore\Config\BundleConfigLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, $d);
    }

    /*
     * Gets the public 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /*
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session')) && false ?: '_'}));
    }

    /*
     * Gets the public 'security.encoder_factory' shared autowired service.
     *
     * @return \Pimcore\Security\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Pimcore\Security\Encoder\EncoderFactory(new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array()), array('Pimcore\\Bundle\\AdminBundle\\Security\\User\\User' => ${($_ = isset($this->services['pimcore_admin.security.password_encoder_factory']) ? $this->services['pimcore_admin.security.password_encoder_factory'] : $this->get('pimcore_admin.security.password_encoder_factory')) && false ?: '_'}));
    }

    /*
     * Gets the public 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.admin' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.admin']) ? $this->services['security.firewall.map.context.admin'] : $this->get('security.firewall.map.context.admin')) && false ?: '_'};
        }, 'security.firewall.map.context.admin_webdav' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.admin_webdav']) ? $this->services['security.firewall.map.context.admin_webdav'] : $this->get('security.firewall.map.context.admin_webdav')) && false ?: '_'};
        }, 'security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->get('security.firewall.map.context.dev')) && false ?: '_'};
        }, 'security.firewall.map.context.webservice' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.webservice']) ? $this->services['security.firewall.map.context.webservice'] : $this->get('security.firewall.map.context.webservice')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d']) ? $this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d'] : $this->getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService()) && false ?: '_'};
            yield 'security.firewall.map.context.admin_webdav' => ${($_ = isset($this->services['security.request_matcher.a50c8485b97e617ec992f80bdc28744923293294a669a247324029e17a79db4f8884d39b']) ? $this->services['security.request_matcher.a50c8485b97e617ec992f80bdc28744923293294a669a247324029e17a79db4f8884d39b'] : $this->getSecurity_RequestMatcher_A50c8485b97e617ec992f80bdc28744923293294a669a247324029e17a79db4f8884d39bService()) && false ?: '_'};
            yield 'security.firewall.map.context.admin' => ${($_ = isset($this->services['security.request_matcher.764e993b07f86c50f945d9bc29906d594dfc5b599c6dd619ee7f826206d068a50daecf5e']) ? $this->services['security.request_matcher.764e993b07f86c50f945d9bc29906d594dfc5b599c6dd619ee7f826206d068a50daecf5e'] : $this->getSecurity_RequestMatcher_764e993b07f86c50f945d9bc29906d594dfc5b599c6dd619ee7f826206d068a50daecf5eService()) && false ?: '_'};
            yield 'security.firewall.map.context.webservice' => ${($_ = isset($this->services['security.request_matcher.739bd6996bb3b118cd48e18c1be9190a2a4e591a3fbb66796acc5de35bf3bcf24ff049fc']) ? $this->services['security.request_matcher.739bd6996bb3b118cd48e18c1be9190a2a4e591a3fbb66796acc5de35bf3bcf24ff049fc'] : $this->getSecurity_RequestMatcher_739bd6996bb3b118cd48e18c1be9190a2a4e591a3fbb66796acc5de35bf3bcf24ff049fcService()) && false ?: '_'};
        }, 4)), ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /*
     * Gets the public 'security.firewall.map.context.admin' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_AdminService()
    {
        $a = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'};
        $b = ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'};
        $d = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};

        return $this->services['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->getSecurity_ChannelListenerService()) && false ?: '_'}, 1 => new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, ${($_ = isset($this->services['pimcore_admin.security.logout_success_handler']) ? $this->services['pimcore_admin.security.logout_success_handler'] : $this->get('pimcore_admin.security.logout_success_handler')) && false ?: '_'}, array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/admin/logout')), 2 => new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener(${($_ = isset($this->services['security.authentication.guard_handler']) ? $this->services['security.authentication.guard_handler'] : $this->get('security.authentication.guard_handler')) && false ?: '_'}, $c, 'admin', new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['pimcore_admin.security.admin_authenticator']) ? $this->services['pimcore_admin.security.admin_authenticator'] : $this->get('pimcore_admin.security.admin_authenticator')) && false ?: '_'};
        }, 1), $d), 3 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '59dca053d79824.47105822', $d, $c), 4 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->getSecurity_AccessListenerService()) && false ?: '_'}), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, $b, 'admin', ${($_ = isset($this->services['pimcore_admin.security.admin_authenticator']) ? $this->services['pimcore_admin.security.admin_authenticator'] : $this->get('pimcore_admin.security.admin_authenticator')) && false ?: '_'}, NULL, NULL, $d, true), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('admin', 'security.user_checker', 'security.request_matcher.764e993b07f86c50f945d9bc29906d594dfc5b599c6dd619ee7f826206d068a50daecf5e', true, true, 'security.user.provider.concrete.pimcore_admin', NULL, 'Pimcore\\Bundle\\AdminBundle\\Security\\Guard\\AdminAuthenticator', NULL, NULL, array(0 => 'logout', 1 => 'guard', 2 => 'anonymous')));
    }

    /*
     * Gets the public 'security.firewall.map.context.admin_webdav' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_AdminWebdavService()
    {
        $a = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'};
        $b = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $c = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};

        $d = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('Secured Area');

        return $this->services['security.firewall.map.context.admin_webdav'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->getSecurity_ChannelListenerService()) && false ?: '_'}, 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider'] : $this->get('Pimcore\Bundle\AdminBundle\Security\User\UserProvider')) && false ?: '_'}), 'admin_webdav', $b, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, $c), 2 => new \Symfony\Component\Security\Http\Firewall\BasicAuthenticationListener($a, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, 'admin_webdav', $d, $b), 3 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->getSecurity_AccessListenerService()) && false ?: '_'}), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $c, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, 'admin_webdav', $d, NULL, NULL, $b, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('admin_webdav', 'security.user_checker', 'security.request_matcher.a50c8485b97e617ec992f80bdc28744923293294a669a247324029e17a79db4f8884d39b', true, false, 'security.user.provider.concrete.pimcore_admin', 'admin_webdav', 'security.authentication.basic_entry_point.admin_webdav', NULL, NULL, array(0 => 'http_basic')));
    }

    /*
     * Gets the public 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d', false, '', '', '', '', '', '', array()));
    }

    /*
     * Gets the public 'security.firewall.map.context.webservice' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_WebserviceService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};

        return $this->services['security.firewall.map.context.webservice'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->getSecurity_ChannelListenerService()) && false ?: '_'}, 1 => new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener(${($_ = isset($this->services['security.authentication.guard_handler']) ? $this->services['security.authentication.guard_handler'] : $this->get('security.authentication.guard_handler')) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, 'webservice', new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['pimcore_admin.security.webservice_authenticator']) ? $this->services['pimcore_admin.security.webservice_authenticator'] : $this->get('pimcore_admin.security.webservice_authenticator')) && false ?: '_'};
        }, 1), $a), 2 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->getSecurity_AccessListenerService()) && false ?: '_'}), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, 'webservice', ${($_ = isset($this->services['pimcore_admin.security.webservice_authenticator']) ? $this->services['pimcore_admin.security.webservice_authenticator'] : $this->get('pimcore_admin.security.webservice_authenticator')) && false ?: '_'}, NULL, NULL, $a, true), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('webservice', 'security.user_checker', 'security.request_matcher.739bd6996bb3b118cd48e18c1be9190a2a4e591a3fbb66796acc5de35bf3bcf24ff049fc', true, true, 'security.user.provider.concrete.pimcore_admin', NULL, 'Pimcore\\Bundle\\AdminBundle\\Security\\Guard\\WebserviceAuthenticator', NULL, NULL, array(0 => 'guard')));
    }

    /*
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /*
     * Gets the public 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the public 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /*
     * Gets the public 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /*
     * Gets the public 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
    }

    /*
     * Gets the public 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /*
     * Gets the public 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the public 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->get('sensio_framework_extra.converter.manager')) && false ?: '_'}, true);
    }

    /*
     * Gets the public 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.doctrine.orm']) ? $this->services['sensio_framework_extra.converter.doctrine.orm'] : $this->get('sensio_framework_extra.converter.doctrine.orm')) && false ?: '_'}, 0, 'doctrine.orm');
        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.datetime']) ? $this->services['sensio_framework_extra.converter.datetime'] : $this->get('sensio_framework_extra.converter.datetime')) && false ?: '_'}, 0, 'datetime');

        return $instance;
    }

    /*
     * Gets the public 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the public 'sensio_framework_extra.view.guesser' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /*
     * Gets the public 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /*
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        $a = ${($_ = isset($this->services['pimcore_admin.serializer']) ? $this->services['pimcore_admin.serializer'] : $this->get('pimcore_admin.serializer')) && false ?: '_'};

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => $a, 1 => ${($_ = isset($this->services['pimcore_admin.serializer.normalizer.reference_loop']) ? $this->services['pimcore_admin.serializer.normalizer.reference_loop'] : $this->getPimcoreAdmin_Serializer_Normalizer_ReferenceLoopService()) && false ?: '_'}, 2 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 4 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 6 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer(new \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain(array()), NULL), ${($_ = isset($this->services['serializer.mapping.cache.symfony']) ? $this->services['serializer.mapping.cache.symfony'] : $this->get('serializer.mapping.cache.symfony')) && false ?: '_'}), NULL, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'}, NULL)), array(0 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\CsvEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 4 => $a, 5 => ${($_ = isset($this->services['pimcore_admin.serializer.encoder.json']) ? $this->services['pimcore_admin.serializer.encoder.json'] : $this->getPimcoreAdmin_Serializer_Encoder_JsonService()) && false ?: '_'}));
    }

    /*
     * Gets the public 'serializer.mapping.cache.symfony' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpArrayAdapter
     */
    protected function getSerializer_Mapping_Cache_SymfonyService()
    {
        return $this->services['serializer.mapping.cache.symfony'] = \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/serialization.php'), ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
    }

    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        $a = new \Pimcore\Session\SessionConfigurator();
        $a->addConfigurator(${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Session\AdminSessionBagConfigurator']) ? $this->services['Pimcore\Bundle\AdminBundle\Session\AdminSessionBagConfigurator'] : $this->getPimcore_Bundle_AdminBundle_Session_AdminSessionBagConfiguratorService()) && false ?: '_'});

        $this->services['session'] = $instance = new \Symfony\Component\HttpFoundation\Session\Session(${($_ = isset($this->services['session.storage.native']) ? $this->services['session.storage.native'] : $this->get('session.storage.native')) && false ?: '_'}, new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());

        $a->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'session.handler' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[3].'\\app/../var/sessions'));
    }

    /*
     * Gets the public 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /*
     * Gets the public 'session.storage.filesystem' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the public 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), ${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the public 'session.storage.php_bridge' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the public 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        })));
    }

    /*
     * Gets the public 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /*
     * Gets the public 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the public 'swiftmailer.mailer.newsletter_mailer' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_NewsletterMailerService()
    {
        return $this->services['swiftmailer.mailer.newsletter_mailer'] = new \Swift_Mailer(${($_ = isset($this->services['swiftmailer.mailer.newsletter_mailer.transport']) ? $this->services['swiftmailer.mailer.newsletter_mailer.transport'] : $this->get('swiftmailer.mailer.newsletter_mailer.transport')) && false ?: '_'});
    }

    /*
     * Gets the public 'swiftmailer.mailer.newsletter_mailer.transport' shared service.
     *
     * @return \Swift_Transport_MailTransport
     */
    protected function getSwiftmailer_Mailer_NewsletterMailer_TransportService()
    {
        $this->services['swiftmailer.mailer.newsletter_mailer.transport'] = $instance = new \Swift_Transport_MailTransport(${($_ = isset($this->services['swiftmailer.transport.mailinvoker']) ? $this->services['swiftmailer.transport.mailinvoker'] : $this->getSwiftmailer_Transport_MailinvokerService()) && false ?: '_'}, new \Swift_Events_SimpleEventDispatcher());

        $instance->registerPlugin(new \Pimcore\Mail\Plugins\RedirectingPlugin(array(0 => ''), array()));

        return $instance;
    }

    /*
     * Gets the public 'swiftmailer.mailer.pimcore_mailer' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_PimcoreMailerService()
    {
        return $this->services['swiftmailer.mailer.pimcore_mailer'] = new \Swift_Mailer(${($_ = isset($this->services['swiftmailer.mailer.pimcore_mailer.transport']) ? $this->services['swiftmailer.mailer.pimcore_mailer.transport'] : $this->get('swiftmailer.mailer.pimcore_mailer.transport')) && false ?: '_'});
    }

    /*
     * Gets the public 'swiftmailer.mailer.pimcore_mailer.transport' shared service.
     *
     * @return \Swift_Transport_MailTransport
     */
    protected function getSwiftmailer_Mailer_PimcoreMailer_TransportService()
    {
        $this->services['swiftmailer.mailer.pimcore_mailer.transport'] = $instance = new \Swift_Transport_MailTransport(${($_ = isset($this->services['swiftmailer.transport.mailinvoker']) ? $this->services['swiftmailer.transport.mailinvoker'] : $this->getSwiftmailer_Transport_MailinvokerService()) && false ?: '_'}, new \Swift_Events_SimpleEventDispatcher());

        $instance->registerPlugin(${($_ = isset($this->services['swiftmailer.plugin.redirecting']) ? $this->services['swiftmailer.plugin.redirecting'] : $this->get('swiftmailer.plugin.redirecting')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'swiftmailer.plugin.redirecting' shared service.
     *
     * @return \Pimcore\Mail\Plugins\RedirectingPlugin
     */
    protected function getSwiftmailer_Plugin_RedirectingService()
    {
        return $this->services['swiftmailer.plugin.redirecting'] = new \Pimcore\Mail\Plugins\RedirectingPlugin(array(0 => ''), array());
    }

    /*
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine
     */
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine($this, array());

        $instance->addEngine(${($_ = isset($this->services['pimcore.templating.engine.php']) ? $this->services['pimcore.templating.engine.php'] : $this->get('pimcore.templating.engine.php')) && false ?: '_'});
        $instance->addEngine(${($_ = isset($this->services['pimcore.templating.engine.twig']) ? $this->services['pimcore.templating.engine.twig'] : $this->get('pimcore.templating.engine.twig')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'templating.filename_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /*
     * Gets the public 'templating.globals' shared service.
     *
     * @return \Pimcore\Templating\GlobalVariables
     */
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Pimcore\Templating\GlobalVariables($this);
    }

    /*
     * Gets the public 'templating.helper.actions' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper(${($_ = isset($this->services['fragment.handler']) ? $this->services['fragment.handler'] : $this->get('fragment.handler')) && false ?: '_'});
    }

    /*
     * Gets the public 'templating.helper.assets' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->get('assets.packages')) && false ?: '_'});
    }

    /*
     * Gets the public 'templating.helper.code' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper
     */
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, ($this->targetDirs[3].'\\app'), 'UTF-8');
    }

    /*
     * Gets the public 'templating.helper.form' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper
     */
    protected function getTemplating_Helper_FormService()
    {
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine(${($_ = isset($this->services['pimcore.templating.engine.php']) ? $this->services['pimcore.templating.engine.php'] : $this->get('pimcore.templating.engine.php')) && false ?: '_'}, array(0 => 'FrameworkBundle:Form')), ${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
    }

    /*
     * Gets the public 'templating.helper.logout_url' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /*
     * Gets the public 'templating.helper.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper
     */
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /*
     * Gets the public 'templating.helper.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper(${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->get('cmf_routing.router')) && false ?: '_'});
    }

    /*
     * Gets the public 'templating.helper.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the public 'templating.helper.session' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper
     */
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /*
     * Gets the public 'templating.helper.slots' shared service.
     *
     * @return \Symfony\Component\Templating\Helper\SlotsHelper
     */
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /*
     * Gets the public 'templating.helper.stopwatch' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper
     */
    protected function getTemplating_Helper_StopwatchService()
    {
        return $this->services['templating.helper.stopwatch'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the public 'templating.helper.translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper(${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->get('Pimcore\Translation\Translator')) && false ?: '_'});
    }

    /*
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /*
     * Gets the public 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /*
     * Gets the public 'translation.dumper.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.json' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.php' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.po' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.res' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /*
     * Gets the public 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', ${($_ = isset($this->services['translation.extractor.php']) ? $this->services['translation.extractor.php'] : $this->get('translation.extractor.php')) && false ?: '_'});
        $instance->addExtractor('twig', ${($_ = isset($this->services['twig.translation.extractor']) ? $this->services['twig.translation.extractor'] : $this->get('twig.translation.extractor')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'translation.extractor.php' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /*
     * Gets the public 'translation.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader
     */
    protected function getTranslation_LoaderService()
    {
        $a = ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->get('translation.loader.xliff')) && false ?: '_'};

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->get('translation.loader.php')) && false ?: '_'});
        $instance->addLoader('yml', ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->get('translation.loader.yml')) && false ?: '_'});
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->get('translation.loader.po')) && false ?: '_'});
        $instance->addLoader('mo', ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->get('translation.loader.mo')) && false ?: '_'});
        $instance->addLoader('ts', ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->get('translation.loader.qt')) && false ?: '_'});
        $instance->addLoader('csv', ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->get('translation.loader.csv')) && false ?: '_'});
        $instance->addLoader('res', ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->get('translation.loader.res')) && false ?: '_'});
        $instance->addLoader('dat', ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->get('translation.loader.dat')) && false ?: '_'});
        $instance->addLoader('ini', ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->get('translation.loader.ini')) && false ?: '_'});
        $instance->addLoader('json', ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->get('translation.loader.json')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the public 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the public 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the public 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the public 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the public 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the public 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the public 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the public 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the public 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the public 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /*
     * Gets the public 'translation.writer' shared service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', ${($_ = isset($this->services['translation.dumper.php']) ? $this->services['translation.dumper.php'] : $this->get('translation.dumper.php')) && false ?: '_'});
        $instance->addDumper('xlf', ${($_ = isset($this->services['translation.dumper.xliff']) ? $this->services['translation.dumper.xliff'] : $this->get('translation.dumper.xliff')) && false ?: '_'});
        $instance->addDumper('po', ${($_ = isset($this->services['translation.dumper.po']) ? $this->services['translation.dumper.po'] : $this->get('translation.dumper.po')) && false ?: '_'});
        $instance->addDumper('mo', ${($_ = isset($this->services['translation.dumper.mo']) ? $this->services['translation.dumper.mo'] : $this->get('translation.dumper.mo')) && false ?: '_'});
        $instance->addDumper('yml', ${($_ = isset($this->services['translation.dumper.yml']) ? $this->services['translation.dumper.yml'] : $this->get('translation.dumper.yml')) && false ?: '_'});
        $instance->addDumper('ts', ${($_ = isset($this->services['translation.dumper.qt']) ? $this->services['translation.dumper.qt'] : $this->get('translation.dumper.qt')) && false ?: '_'});
        $instance->addDumper('csv', ${($_ = isset($this->services['translation.dumper.csv']) ? $this->services['translation.dumper.csv'] : $this->get('translation.dumper.csv')) && false ?: '_'});
        $instance->addDumper('ini', ${($_ = isset($this->services['translation.dumper.ini']) ? $this->services['translation.dumper.ini'] : $this->get('translation.dumper.ini')) && false ?: '_'});
        $instance->addDumper('json', ${($_ = isset($this->services['translation.dumper.json']) ? $this->services['translation.dumper.json'] : $this->get('translation.dumper.json')) && false ?: '_'});
        $instance->addDumper('res', ${($_ = isset($this->services['translation.dumper.res']) ? $this->services['translation.dumper.res'] : $this->get('translation.dumper.res')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(array('translation.loader.csv' => function () {
            return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->get('translation.loader.csv')) && false ?: '_'};
        }, 'translation.loader.dat' => function () {
            return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->get('translation.loader.dat')) && false ?: '_'};
        }, 'translation.loader.ini' => function () {
            return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->get('translation.loader.ini')) && false ?: '_'};
        }, 'translation.loader.json' => function () {
            return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->get('translation.loader.json')) && false ?: '_'};
        }, 'translation.loader.mo' => function () {
            return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->get('translation.loader.mo')) && false ?: '_'};
        }, 'translation.loader.php' => function () {
            return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->get('translation.loader.php')) && false ?: '_'};
        }, 'translation.loader.po' => function () {
            return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->get('translation.loader.po')) && false ?: '_'};
        }, 'translation.loader.qt' => function () {
            return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->get('translation.loader.qt')) && false ?: '_'};
        }, 'translation.loader.res' => function () {
            return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->get('translation.loader.res')) && false ?: '_'};
        }, 'translation.loader.xliff' => function () {
            return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->get('translation.loader.xliff')) && false ?: '_'};
        }, 'translation.loader.yml' => function () {
            return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->get('translation.loader.yml')) && false ?: '_'};
        })), new \Symfony\Component\Translation\MessageSelector(), 'en', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => false, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf')), 'ar' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ar.xlf')), 'az' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.az.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.az.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.bg.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ca.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.cs.xlf')), 'cy' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.da.xlf')), 'de' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.de.xlf')), 'el' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.el.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.el.xlf')), 'en' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.en.xlf')), 'es' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.es.xlf')), 'et' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf')), 'eu' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf')), 'fa' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fa.xlf')), 'fi' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf')), 'fr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fr.xlf')), 'gl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.gl.xlf')), 'he' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.he.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hr.xlf')), 'hu' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hu.xlf')), 'hy' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.id.xlf')), 'it' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.it.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ja.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lb.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lt.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lv.xlf')), 'mn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nl.xlf')), 'nn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nn.xlf')), 'no' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.no.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pl.xlf')), 'pt' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_BR.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ro.xlf')), 'ru' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ru.xlf')), 'sk' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sk.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sl.xlf')), 'sq' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Latn.xlf')), 'sv' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sv.xlf')), 'th' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.th.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.th.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.tr.xlf')), 'uk' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.uk.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.vi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.vi.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.zh_CN.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_TW.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ua.xlf')))));

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->get('config_cache_factory')) && false ?: '_'});
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /*
     * Gets the public 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->get('Pimcore\Translation\Translator')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'};

        $b = new \Symfony\Bridge\Twig\AppVariable();
        $b->setEnvironment('prod');
        $b->setDebug(false);
        if ($this->has('security.token_storage')) {
            $b->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $b->setRequestStack($a);
        }

        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->get('twig.loader')) && false ?: '_'}, array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->get('Pimcore\Translation\Translator')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->get('assets.packages')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, ($this->targetDirs[3].'\\app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->get('cmf_routing.router')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($a, ${($_ = isset($this->services['pimcore.routing.router.request_context']) ? $this->services['pimcore.routing.router.request_context'] : $this->get('pimcore.routing.router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($a));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(${($_ = isset($this->services['pimcore.twig.extension.helpers']) ? $this->services['pimcore.twig.extension.helpers'] : $this->get('pimcore.twig.extension.helpers')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['pimcore.twig.extension.document_tag']) ? $this->services['pimcore.twig.extension.document_tag'] : $this->get('pimcore.twig.extension.document_tag')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['pimcore.twig.extension.subrequest']) ? $this->services['pimcore.twig.extension.subrequest'] : $this->get('pimcore.twig.extension.subrequest')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['pimcore.twig.extension.pimcore_object']) ? $this->services['pimcore.twig.extension.pimcore_object'] : $this->get('pimcore.twig.extension.pimcore_object')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['pimcore.twig.extension.templating_helper']) ? $this->services['pimcore.twig.extension.templating_helper'] : $this->get('pimcore.twig.extension.templating_helper')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['pimcore.twig.extension.navigation']) ? $this->services['pimcore.twig.extension.navigation'] : $this->get('pimcore.twig.extension.navigation')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['pimcore.twig.extension.glossary']) ? $this->services['pimcore.twig.extension.glossary'] : $this->get('pimcore.twig.extension.glossary')) && false ?: '_'});
        $instance->addExtension(new \Pimcore\Twig\Extension\WebsiteConfigExtension());
        $instance->addExtension(new \Phive\Twig\Extensions\Deferred\DeferredExtension());
        $instance->addGlobal('app', $b);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->get('twig.runtime.httpkernel')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->get('twig.form.renderer')) && false ?: '_'};
        }))));
        $instance->addGlobal('container', $this);
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, false);
    }

    /*
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, 'twig.controller.exception:showAction');
    }

    /*
     * Gets the public 'twig.exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the public 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig'), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}), ${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the public 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'\\pimcore\\lib\\Pimcore\\Bundle\\CoreBundle/Resources/views'), 'PimcoreCore');
        $instance->addPath(($this->targetDirs[3].'\\pimcore\\lib\\Pimcore\\Bundle\\AdminBundle/Resources/views'), 'PimcoreAdmin');
        $instance->addPath(($this->targetDirs[3].'\\app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form'));

        return $instance;
    }

    /*
     * Gets the public 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /*
     * Gets the public 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->services['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(${($_ = isset($this->services['fragment.handler']) ? $this->services['fragment.handler'] : $this->get('fragment.handler')) && false ?: '_'});
    }

    /*
     * Gets the public 'twig.translation.extractor' shared service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
    }

    /*
     * Gets the public 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /*
     * Gets the public 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /*
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = ${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}->getValidator();
    }

    /*
     * Gets the public 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Cmf\\Bundle\\RoutingBundle\\Validator\\Constraints\\RouteDefaultsTemplatingValidator' => function () {
            return ${($_ = isset($this->services['cmf_routing.validator.route_defaults']) ? $this->services['cmf_routing.validator.route_defaults'] : $this->get('cmf_routing.validator.route_defaults')) && false ?: '_'};
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : $this->get('validator.email')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }, 'cmf_routing.validator.route_defaults' => function () {
            return ${($_ = isset($this->services['cmf_routing.validator.route_defaults']) ? $this->services['cmf_routing.validator.route_defaults'] : $this->get('cmf_routing.validator.route_defaults')) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }))));
        $instance->setTranslator(${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->get('Pimcore\Translation\Translator')) && false ?: '_'});
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setMetadataCache(new \Symfony\Component\Validator\Mapping\Cache\Psr6Cache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'})));
        $instance->addObjectInitializers(array());

        return $instance;
    }

    /*
     * Gets the public 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /*
     * Gets the public 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\EventListener\AdminAuthenticationDoubleCheckListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\AdminAuthenticationDoubleCheckListener
     */
    protected function getPimcore_Bundle_AdminBundle_EventListener_AdminAuthenticationDoubleCheckListenerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\EventListener\AdminAuthenticationDoubleCheckListener'] = new \Pimcore\Bundle\AdminBundle\EventListener\AdminAuthenticationDoubleCheckListener(${($_ = isset($this->services['pimcore.service.request_matcher_factory']) ? $this->services['pimcore.service.request_matcher_factory'] : $this->get('pimcore.service.request_matcher_factory')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver'] : $this->get('Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver')) && false ?: '_'}, array(0 => array('route' => 'pimcore_admin_login', 'path' => false, 'host' => false, 'methods' => array()), 1 => array('route' => 'pimcore_admin_webdav', 'path' => false, 'host' => false, 'methods' => array())));
    }

    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener
     */
    protected function getPimcore_Bundle_AdminBundle_EventListener_AdminExceptionListenerService()
    {
        $this->services['Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener'] = $instance = new \Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener();

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener
     */
    protected function getPimcore_Bundle_AdminBundle_EventListener_BruteforceProtectionListenerService()
    {
        $this->services['Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener'] = $instance = new \Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener(${($_ = isset($this->services['pimcore_admin.security.bruteforce_protection_handler']) ? $this->services['pimcore_admin.security.bruteforce_protection_handler'] : $this->get('pimcore_admin.security.bruteforce_protection_handler')) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\EventListener\HttpCacheListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\HttpCacheListener
     */
    protected function getPimcore_Bundle_AdminBundle_EventListener_HttpCacheListenerService()
    {
        $this->services['Pimcore\Bundle\AdminBundle\EventListener\HttpCacheListener'] = $instance = new \Pimcore\Bundle\AdminBundle\EventListener\HttpCacheListener(${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->get('Pimcore\Http\ResponseHelper')) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\EventListener\UsageStatisticsListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\UsageStatisticsListener
     */
    protected function getPimcore_Bundle_AdminBundle_EventListener_UsageStatisticsListenerService()
    {
        $this->services['Pimcore\Bundle\AdminBundle\EventListener\UsageStatisticsListener'] = $instance = new \Pimcore\Bundle\AdminBundle\EventListener\UsageStatisticsListener(${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver'] : $this->get('Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver')) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\EventListener\UserPerspectiveListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\UserPerspectiveListener
     */
    protected function getPimcore_Bundle_AdminBundle_EventListener_UserPerspectiveListenerService()
    {
        $this->services['Pimcore\Bundle\AdminBundle\EventListener\UserPerspectiveListener'] = $instance = new \Pimcore\Bundle\AdminBundle\EventListener\UserPerspectiveListener(${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver'] : $this->get('Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver')) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.admin']) ? $this->services['monolog.logger.admin'] : $this->get('monolog.logger.admin')) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\Session\AdminSessionBagConfigurator' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Session\AdminSessionBagConfigurator
     */
    protected function getPimcore_Bundle_AdminBundle_Session_AdminSessionBagConfiguratorService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Session\AdminSessionBagConfigurator'] = new \Pimcore\Bundle\AdminBundle\Session\AdminSessionBagConfigurator(array('pimcore_admin' => array('storage_key' => '_pimcore_admin'), 'pimcore_documents' => array('storage_key' => '_pimcore_documents'), 'pimcore_objects' => array('storage_key' => '_pimcore_objects'), 'pimcore_copy' => array('storage_key' => '_pimcore_copy'), 'pimcore_backup' => array('storage_key' => '_pimcore_backup')));
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\ControllerViewModelListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\ControllerViewModelListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_ControllerViewModelListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\ControllerViewModelListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\ControllerViewModelListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\ViewModelResolver']) ? $this->services['Pimcore\Http\Request\Resolver\ViewModelResolver'] : $this->get('Pimcore\Http\Request\Resolver\ViewModelResolver')) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_ElementTagsListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener();
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_EventedControllerListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener();
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_BlockStateListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener(${($_ = isset($this->services['Pimcore\Document\Tag\Block\BlockStateStack']) ? $this->services['Pimcore\Document\Tag\Block\BlockStateStack'] : $this->get('Pimcore\Document\Tag\Block\BlockStateStack')) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger')) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\ContentTemplateListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\ContentTemplateListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_ContentTemplateListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\ContentTemplateListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\ContentTemplateListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\TemplateResolver']) ? $this->services['Pimcore\Http\Request\Resolver\TemplateResolver'] : $this->get('Pimcore\Http\Request\Resolver\TemplateResolver')) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentFallbackListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentFallbackListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_DocumentFallbackListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentFallbackListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentFallbackListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->get('Pimcore\Http\Request\Resolver\DocumentResolver')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\SiteResolver']) ? $this->services['Pimcore\Http\Request\Resolver\SiteResolver'] : $this->get('Pimcore\Http\Request\Resolver\SiteResolver')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Model\Document\Service']) ? $this->services['Pimcore\Model\Document\Service'] : $this->get('Pimcore\Model\Document\Service')) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentMetaDataListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentMetaDataListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_DocumentMetaDataListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentMetaDataListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentMetaDataListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->get('Pimcore\Http\Request\Resolver\DocumentResolver')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Templating\Helper\HeadMeta']) ? $this->services['Pimcore\Templating\Helper\HeadMeta'] : $this->get('Pimcore\Templating\Helper\HeadMeta')) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_EditmodeListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->get('Pimcore\Http\Request\Resolver\EditmodeResolver')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->get('Pimcore\Http\Request\Resolver\DocumentResolver')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader'] : $this->get('Pimcore\Bundle\AdminBundle\Security\User\UserLoader')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Extension\Bundle\PimcoreBundleManager']) ? $this->services['Pimcore\Extension\Bundle\PimcoreBundleManager'] : $this->get('Pimcore\Extension\Bundle\PimcoreBundleManager')) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger')) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\ElementListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\ElementListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_ElementListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\ElementListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\ElementListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->get('Pimcore\Http\Request\Resolver\DocumentResolver')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->get('Pimcore\Http\Request\Resolver\EditmodeResolver')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader'] : $this->get('Pimcore\Bundle\AdminBundle\Security\User\UserLoader')) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.init']) ? $this->services['monolog.logger.init'] : $this->get('monolog.logger.init')) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_FrontendRoutingListenerService()
    {
        $a = new \Pimcore\Routing\RedirectHandler();
        $a->setLogger(${($_ = isset($this->services['monolog.logger.routing']) ? $this->services['monolog.logger.routing'] : $this->get('monolog.logger.routing')) && false ?: '_'});

        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener(${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'}, $a, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\SiteResolver']) ? $this->services['Pimcore\Http\Request\Resolver\SiteResolver'] : $this->get('Pimcore\Http\Request\Resolver\SiteResolver')) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleSearchConsoleVerificationListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleSearchConsoleVerificationListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_GoogleSearchConsoleVerificationListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleSearchConsoleVerificationListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleSearchConsoleVerificationListener();

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\HardlinkCanonicalListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\HardlinkCanonicalListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_HardlinkCanonicalListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\HardlinkCanonicalListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\HardlinkCanonicalListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->get('Pimcore\Http\Request\Resolver\DocumentResolver')) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\InternalWysiwygHtmlAttributeFilterListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\InternalWysiwygHtmlAttributeFilterListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_InternalWysiwygHtmlAttributeFilterListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\InternalWysiwygHtmlAttributeFilterListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\InternalWysiwygHtmlAttributeFilterListener();

        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->get('Pimcore\Http\ResponseHelper')) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_Frontend_LocaleListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener();

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_MaintenancePageListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});

        $instance->loadTemplateFromResource('@PimcoreCoreBundle/Resources/misc/maintenance.html');
        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->get('Pimcore\Http\ResponseHelper')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\PimcoreContextListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\PimcoreContextListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_PimcoreContextListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\PimcoreContextListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\PimcoreContextListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\PimcoreHeaderListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\PimcoreHeaderListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_PimcoreHeaderListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\PimcoreHeaderListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\PimcoreHeaderListener();
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\ResponseExceptionListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\ResponseExceptionListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_ResponseExceptionListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseExceptionListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\ResponseExceptionListener(${($_ = isset($this->services['pimcore.templating.action_renderer']) ? $this->services['pimcore.templating.action_renderer'] : $this->get('pimcore.templating.action_renderer')) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger')) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->get('Pimcore\Http\Request\Resolver\PimcoreContextResolver')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\ResponseHeaderListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\ResponseHeaderListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_ResponseHeaderListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseHeaderListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\ResponseHeaderListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\ResponseHeaderResolver']) ? $this->services['Pimcore\Http\Request\Resolver\ResponseHeaderResolver'] : $this->get('Pimcore\Http\Request\Resolver\ResponseHeaderResolver')) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_SearchBackendListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener();
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_TemplateControllerListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener($this);
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\UUIDListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\UUIDListener
     */
    protected function getPimcore_Bundle_CoreBundle_EventListener_UUIDListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\UUIDListener();
    }

    /*
     * Gets the private 'Pimcore\Controller\ArgumentValueResolver\DocumentValueResolver' shared autowired service.
     *
     * @return \Pimcore\Controller\ArgumentValueResolver\DocumentValueResolver
     */
    protected function getPimcore_Controller_ArgumentValueResolver_DocumentValueResolverService()
    {
        return $this->services['Pimcore\Controller\ArgumentValueResolver\DocumentValueResolver'] = new \Pimcore\Controller\ArgumentValueResolver\DocumentValueResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->get('Pimcore\Http\Request\Resolver\DocumentResolver')) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Controller\ArgumentValueResolver\EditmodeValueResolver' shared autowired service.
     *
     * @return \Pimcore\Controller\ArgumentValueResolver\EditmodeValueResolver
     */
    protected function getPimcore_Controller_ArgumentValueResolver_EditmodeValueResolverService()
    {
        return $this->services['Pimcore\Controller\ArgumentValueResolver\EditmodeValueResolver'] = new \Pimcore\Controller\ArgumentValueResolver\EditmodeValueResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->get('Pimcore\Http\Request\Resolver\EditmodeResolver')) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Controller\ArgumentValueResolver\TemplateVarsValueResolver' shared autowired service.
     *
     * @return \Pimcore\Controller\ArgumentValueResolver\TemplateVarsValueResolver
     */
    protected function getPimcore_Controller_ArgumentValueResolver_TemplateVarsValueResolverService()
    {
        return $this->services['Pimcore\Controller\ArgumentValueResolver\TemplateVarsValueResolver'] = new \Pimcore\Controller\ArgumentValueResolver\TemplateVarsValueResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\TemplateVarsResolver']) ? $this->services['Pimcore\Http\Request\Resolver\TemplateVarsResolver'] : $this->get('Pimcore\Http\Request\Resolver\TemplateVarsResolver')) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Controller\ArgumentValueResolver\ViewModelValueResolver' shared autowired service.
     *
     * @return \Pimcore\Controller\ArgumentValueResolver\ViewModelValueResolver
     */
    protected function getPimcore_Controller_ArgumentValueResolver_ViewModelValueResolverService()
    {
        return $this->services['Pimcore\Controller\ArgumentValueResolver\ViewModelValueResolver'] = new \Pimcore\Controller\ArgumentValueResolver\ViewModelValueResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\ViewModelResolver']) ? $this->services['Pimcore\Http\Request\Resolver\ViewModelResolver'] : $this->get('Pimcore\Http\Request\Resolver\ViewModelResolver')) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Controller\ArgumentValueResolver\WebsiteConfigValueResolver' shared autowired service.
     *
     * @return \Pimcore\Controller\ArgumentValueResolver\WebsiteConfigValueResolver
     */
    protected function getPimcore_Controller_ArgumentValueResolver_WebsiteConfigValueResolverService()
    {
        return $this->services['Pimcore\Controller\ArgumentValueResolver\WebsiteConfigValueResolver'] = new \Pimcore\Controller\ArgumentValueResolver\WebsiteConfigValueResolver();
    }

    /*
     * Gets the private 'Pimcore\Navigation\Renderer\Breadcrumbs' shared autowired service.
     *
     * @return \Pimcore\Navigation\Renderer\Breadcrumbs
     */
    protected function getPimcore_Navigation_Renderer_BreadcrumbsService()
    {
        return $this->services['Pimcore\Navigation\Renderer\Breadcrumbs'] = new \Pimcore\Navigation\Renderer\Breadcrumbs(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Navigation\Renderer\Menu' shared autowired service.
     *
     * @return \Pimcore\Navigation\Renderer\Menu
     */
    protected function getPimcore_Navigation_Renderer_MenuService()
    {
        return $this->services['Pimcore\Navigation\Renderer\Menu'] = new \Pimcore\Navigation\Renderer\Menu(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Routing\Dynamic\DocumentRouteHandler' shared autowired service.
     *
     * @return \Pimcore\Routing\Dynamic\DocumentRouteHandler
     */
    protected function getPimcore_Routing_Dynamic_DocumentRouteHandlerService()
    {
        return $this->services['Pimcore\Routing\Dynamic\DocumentRouteHandler'] = new \Pimcore\Routing\Dynamic\DocumentRouteHandler(${($_ = isset($this->services['Pimcore\Model\Document\Service']) ? $this->services['Pimcore\Model\Document\Service'] : $this->get('Pimcore\Model\Document\Service')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\SiteResolver']) ? $this->services['Pimcore\Http\Request\Resolver\SiteResolver'] : $this->get('Pimcore\Http\Request\Resolver\SiteResolver')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->get('Pimcore\Http\RequestHelper')) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Controller\Config\ConfigNormalizer']) ? $this->services['Pimcore\Controller\Config\ConfigNormalizer'] : $this->get('Pimcore\Controller\Config\ConfigNormalizer')) && false ?: '_'});
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver
     */
    protected function getArgumentResolver_DefaultService()
    {
        return $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }

    /*
     * Gets the private 'argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver
     */
    protected function getArgumentResolver_RequestService()
    {
        return $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver();
    }

    /*
     * Gets the private 'argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver
     */
    protected function getArgumentResolver_RequestAttributeService()
    {
        return $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver();
    }

    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController:filterLocalizedFields' => function () {
            return ${($_ = isset($this->services['service_locator.ef50b66065b1737465a2d74a13598afe']) ? $this->services['service_locator.ef50b66065b1737465a2d74a13598afe'] : $this->getServiceLocator_Ef50b66065b1737465a2d74a13598afeService()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController:performFieldcollectionModificationCheck' => function () {
            return ${($_ = isset($this->services['service_locator.f4349e8894d66f427f9ad72c699461b7']) ? $this->services['service_locator.f4349e8894d66f427f9ad72c699461b7'] : $this->getServiceLocator_F4349e8894d66f427f9ad72c699461b7Service()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentTag\\RenderletController:renderletAction' => function () {
            return ${($_ = isset($this->services['service_locator.1df818bdbc898e0ca4257f453525a80a']) ? $this->services['service_locator.1df818bdbc898e0ca4257f453525a80a'] : $this->getServiceLocator_1df818bdbc898e0ca4257f453525a80aService()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\InstallController:checkAction' => function () {
            return ${($_ = isset($this->services['service_locator.8fbaea2dc9ce39bb09e046ce631ea329']) ? $this->services['service_locator.8fbaea2dc9ce39bb09e046ce631ea329'] : $this->getServiceLocator_8fbaea2dc9ce39bb09e046ce631ea329Service()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController:getAvailableActionsAction' => function () {
            return ${($_ = isset($this->services['service_locator.38c73ce8067617f669e83e499e0bd337']) ? $this->services['service_locator.38c73ce8067617f669e83e499e0bd337'] : $this->getServiceLocator_38c73ce8067617f669e83e499e0bd337Service()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController:getAvailableControllersAction' => function () {
            return ${($_ = isset($this->services['service_locator.38c73ce8067617f669e83e499e0bd337']) ? $this->services['service_locator.38c73ce8067617f669e83e499e0bd337'] : $this->getServiceLocator_38c73ce8067617f669e83e499e0bd337Service()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController:getAvailableModulesAction' => function () {
            return ${($_ = isset($this->services['service_locator.ecb3d2e49c7158cfbf629075292d1db0']) ? $this->services['service_locator.ecb3d2e49c7158cfbf629075292d1db0'] : $this->getServiceLocator_Ecb3d2e49c7158cfbf629075292d1db0Service()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController:getAvailableTemplatesAction' => function () {
            return ${($_ = isset($this->services['service_locator.ecb3d2e49c7158cfbf629075292d1db0']) ? $this->services['service_locator.ecb3d2e49c7158cfbf629075292d1db0'] : $this->getServiceLocator_Ecb3d2e49c7158cfbf629075292d1db0Service()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController:toggleExtensionStateAction' => function () {
            return ${($_ = isset($this->services['service_locator.83603fcf2ec2e2d8755beebb160c60e0']) ? $this->services['service_locator.83603fcf2ec2e2d8755beebb160c60e0'] : $this->getServiceLocator_83603fcf2ec2e2d8755beebb160c60e0Service()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::filterLocalizedFields' => function () {
            return ${($_ = isset($this->services['service_locator.ef50b66065b1737465a2d74a13598afe']) ? $this->services['service_locator.ef50b66065b1737465a2d74a13598afe'] : $this->getServiceLocator_Ef50b66065b1737465a2d74a13598afeService()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController::performFieldcollectionModificationCheck' => function () {
            return ${($_ = isset($this->services['service_locator.f4349e8894d66f427f9ad72c699461b7']) ? $this->services['service_locator.f4349e8894d66f427f9ad72c699461b7'] : $this->getServiceLocator_F4349e8894d66f427f9ad72c699461b7Service()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentTag\\RenderletController::renderletAction' => function () {
            return ${($_ = isset($this->services['service_locator.1df818bdbc898e0ca4257f453525a80a']) ? $this->services['service_locator.1df818bdbc898e0ca4257f453525a80a'] : $this->getServiceLocator_1df818bdbc898e0ca4257f453525a80aService()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\InstallController::checkAction' => function () {
            return ${($_ = isset($this->services['service_locator.8fbaea2dc9ce39bb09e046ce631ea329']) ? $this->services['service_locator.8fbaea2dc9ce39bb09e046ce631ea329'] : $this->getServiceLocator_8fbaea2dc9ce39bb09e046ce631ea329Service()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::getAvailableActionsAction' => function () {
            return ${($_ = isset($this->services['service_locator.38c73ce8067617f669e83e499e0bd337']) ? $this->services['service_locator.38c73ce8067617f669e83e499e0bd337'] : $this->getServiceLocator_38c73ce8067617f669e83e499e0bd337Service()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::getAvailableControllersAction' => function () {
            return ${($_ = isset($this->services['service_locator.38c73ce8067617f669e83e499e0bd337']) ? $this->services['service_locator.38c73ce8067617f669e83e499e0bd337'] : $this->getServiceLocator_38c73ce8067617f669e83e499e0bd337Service()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::getAvailableModulesAction' => function () {
            return ${($_ = isset($this->services['service_locator.ecb3d2e49c7158cfbf629075292d1db0']) ? $this->services['service_locator.ecb3d2e49c7158cfbf629075292d1db0'] : $this->getServiceLocator_Ecb3d2e49c7158cfbf629075292d1db0Service()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController::getAvailableTemplatesAction' => function () {
            return ${($_ = isset($this->services['service_locator.ecb3d2e49c7158cfbf629075292d1db0']) ? $this->services['service_locator.ecb3d2e49c7158cfbf629075292d1db0'] : $this->getServiceLocator_Ecb3d2e49c7158cfbf629075292d1db0Service()) && false ?: '_'};
        }, 'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController::toggleExtensionStateAction' => function () {
            return ${($_ = isset($this->services['service_locator.83603fcf2ec2e2d8755beebb160c60e0']) ? $this->services['service_locator.83603fcf2ec2e2d8755beebb160c60e0'] : $this->getServiceLocator_83603fcf2ec2e2d8755beebb160c60e0Service()) && false ?: '_'};
        })));
    }

    /*
     * Gets the private 'argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver
     */
    protected function getArgumentResolver_SessionService()
    {
        return $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver();
    }

    /*
     * Gets the private 'argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver
     */
    protected function getArgumentResolver_VariadicService()
    {
        return $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
    }

    /*
     * Gets the private 'autowired.Pimcore\Model\DataObject\AbstractObject' shared autowired service.
     *
     * @return \Pimcore\Model\DataObject\AbstractObject
     */
    protected function getAutowired_Pimcore_Model_DataObject_AbstractObjectService()
    {
        return $this->services['autowired.Pimcore\Model\DataObject\AbstractObject'] = new \Pimcore\Model\DataObject\AbstractObject();
    }

    /*
     * Gets the private 'autowired.Pimcore\Model\DataObject\Concrete' shared autowired service.
     *
     * @return \Pimcore\Model\DataObject\Concrete
     */
    protected function getAutowired_Pimcore_Model_DataObject_ConcreteService()
    {
        return $this->services['autowired.Pimcore\Model\DataObject\Concrete'] = new \Pimcore\Model\DataObject\Concrete();
    }

    /*
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_AnnotationsService($lazyLoad = true)
    {
        return $this->services['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('iv+WiFPEwI', 0, 'nKdIhPRoDvX9yu5fkTCPvl', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the private 'cache.property_access' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyAccessService()
    {
        return $this->services['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('8YoMeBiEWc', NULL, 'nKdIhPRoDvX9yu5fkTCPvl', ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SerializerService($lazyLoad = true)
    {
        return $this->services['cache.serializer'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('ZKrAYLIC7j', 0, 'nKdIhPRoDvX9yu5fkTCPvl', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_ValidatorService($lazyLoad = true)
    {
        return $this->services['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('GCpb5Pnuuc', 0, 'nKdIhPRoDvX9yu5fkTCPvl', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        return $this->services['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(${($_ = isset($this->services['monolog.logger.console']) ? $this->services['monolog.logger.console'] : $this->get('monolog.logger.console', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /*
     * Gets the private 'controller_resolver' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver
     */
    protected function getControllerResolverService()
    {
        return $this->services['controller_resolver'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL);
    }

    /*
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /*
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'})));
    }

    /*
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /*
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager')) && false ?: '_'}, true, '_token', ${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->get('Pimcore\Translation\Translator')) && false ?: '_'}, 'validators', ${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'});
    }

    /*
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'}));
    }

    /*
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /*
     * Gets the private 'form.type_extension.repeated.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /*
     * Gets the private 'form.type_extension.submit.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /*
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->get('Pimcore\Translation\Translator')) && false ?: '_'}, 'validators');
    }

    /*
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /*
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /*
     * Gets the private 'pimcore_admin.serializer.encoder.json' shared autowired service.
     *
     * @return \Symfony\Component\Serializer\Encoder\JsonEncoder
     */
    protected function getPimcoreAdmin_Serializer_Encoder_JsonService()
    {
        return $this->services['pimcore_admin.serializer.encoder.json'] = new \Symfony\Component\Serializer\Encoder\JsonEncoder();
    }

    /*
     * Gets the private 'pimcore_admin.serializer.normalizer.reference_loop' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Serializer\Normalizer\ReferenceLoopNormalizer
     */
    protected function getPimcoreAdmin_Serializer_Normalizer_ReferenceLoopService()
    {
        return $this->services['pimcore_admin.serializer.normalizer.reference_loop'] = new \Pimcore\Bundle\AdminBundle\Serializer\Normalizer\ReferenceLoopNormalizer();
    }

    /*
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'});
    }

    /*
     * Gets the private 'security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        return $this->services['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'});
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->getSecurity_Access_AuthenticatedVoterService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.role_hierarchy_voter']) ? $this->services['security.access.role_hierarchy_voter'] : $this->getSecurity_Access_RoleHierarchyVoterService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->getSecurity_Access_ExpressionVoterService()) && false ?: '_'};
        }, 3), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
     */
    protected function getSecurity_Access_ExpressionVoterService()
    {
        return $this->services['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'});
    }

    /*
     * Gets the private 'security.access.role_hierarchy_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter
     */
    protected function getSecurity_Access_RoleHierarchyVoterService()
    {
        return $this->services['security.access.role_hierarchy_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'});
    }

    /*
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.access_map']) ? $this->services['security.access_map'] : $this->getSecurity_AccessMapService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'});
    }

    /*
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login/(login|lostpassword|deeplink)$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), array(0 => 'ROLE_PIMCORE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/webservice'), array(0 => 'ROLE_PIMCORE_USER'), NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.dao.admin_webdav']) ? $this->services['security.authentication.provider.dao.admin_webdav'] : $this->getSecurity_Authentication_Provider_Dao_AdminWebdavService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.guard.admin']) ? $this->services['security.authentication.provider.guard.admin'] : $this->getSecurity_Authentication_Provider_Guard_AdminService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.authentication.provider.anonymous.admin']) ? $this->services['security.authentication.provider.anonymous.admin'] : $this->getSecurity_Authentication_Provider_Anonymous_AdminService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.authentication.provider.guard.webservice']) ? $this->services['security.authentication.provider.guard.webservice'] : $this->getSecurity_Authentication_Provider_Guard_WebserviceService()) && false ?: '_'};
        }, 4), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.provider.anonymous.admin' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Anonymous_AdminService()
    {
        return $this->services['security.authentication.provider.anonymous.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('59dca053d79824.47105822');
    }

    /*
     * Gets the private 'security.authentication.provider.dao.admin_webdav' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Dao_AdminWebdavService()
    {
        return $this->services['security.authentication.provider.dao.admin_webdav'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider'] : $this->get('Pimcore\Bundle\AdminBundle\Security\User\UserProvider')) && false ?: '_'}, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'}, 'admin_webdav', ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, true);
    }

    /*
     * Gets the private 'security.authentication.provider.guard.admin' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Guard_AdminService()
    {
        return $this->services['security.authentication.provider.guard.admin'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['pimcore_admin.security.admin_authenticator']) ? $this->services['pimcore_admin.security.admin_authenticator'] : $this->get('pimcore_admin.security.admin_authenticator')) && false ?: '_'};
        }, 1), ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider'] : $this->get('Pimcore\Bundle\AdminBundle\Security\User\UserProvider')) && false ?: '_'}, 'admin', ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'});
    }

    /*
     * Gets the private 'security.authentication.provider.guard.webservice' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Guard_WebserviceService()
    {
        return $this->services['security.authentication.provider.guard.webservice'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['pimcore_admin.security.webservice_authenticator']) ? $this->services['pimcore_admin.security.webservice_authenticator'] : $this->get('pimcore_admin.security.webservice_authenticator')) && false ?: '_'};
        }, 1), ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider'] : $this->get('Pimcore\Bundle\AdminBundle\Security\User\UserProvider')) && false ?: '_'}, 'webservice', ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'});
    }

    /*
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /*
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(${($_ = isset($this->services['security.access_map']) ? $this->services['security.access_map'] : $this->getSecurity_AccessMapService()) && false ?: '_'}, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = ${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};

        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->registerListener('admin', '/admin/logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService()
    {
        return $this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/');
    }

    /*
     * Gets the private 'security.request_matcher.739bd6996bb3b118cd48e18c1be9190a2a4e591a3fbb66796acc5de35bf3bcf24ff049fc' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_739bd6996bb3b118cd48e18c1be9190a2a4e591a3fbb66796acc5de35bf3bcf24ff049fcService()
    {
        return $this->services['security.request_matcher.739bd6996bb3b118cd48e18c1be9190a2a4e591a3fbb66796acc5de35bf3bcf24ff049fc'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/webservice');
    }

    /*
     * Gets the private 'security.request_matcher.764e993b07f86c50f945d9bc29906d594dfc5b599c6dd619ee7f826206d068a50daecf5e' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_764e993b07f86c50f945d9bc29906d594dfc5b599c6dd619ee7f826206d068a50daecf5eService()
    {
        return $this->services['security.request_matcher.764e993b07f86c50f945d9bc29906d594dfc5b599c6dd619ee7f826206d068a50daecf5e'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin');
    }

    /*
     * Gets the private 'security.request_matcher.a50c8485b97e617ec992f80bdc28744923293294a669a247324029e17a79db4f8884d39b' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_A50c8485b97e617ec992f80bdc28744923293294a669a247324029e17a79db4f8884d39bService()
    {
        return $this->services['security.request_matcher.a50c8485b97e617ec992f80bdc28744923293294a669a247324029e17a79db4f8884d39b'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/asset/webdav');
    }

    /*
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_PIMCORE_ADMIN' => array(0 => 'ROLE_PIMCORE_USER')));
    }

    /*
     * Gets the private 'security.user_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker
     */
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /*
     * Gets the private 'security.user_value_resolver' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver
     */
    protected function getSecurity_UserValueResolverService()
    {
        return $this->services['security.user_value_resolver'] = new \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'});
    }

    /*
     * Gets the private 'service_locator.1df818bdbc898e0ca4257f453525a80a' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_1df818bdbc898e0ca4257f453525a80aService()
    {
        return $this->services['service_locator.1df818bdbc898e0ca4257f453525a80a'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('actionRenderer' => function () {
            return ${($_ = isset($this->services['pimcore.templating.action_renderer']) ? $this->services['pimcore.templating.action_renderer'] : $this->get('pimcore.templating.action_renderer', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        }, 'localeService' => function () {
            $f = function (\Pimcore\Localization\Locale $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Localization\Locale']) ? $this->services['Pimcore\Localization\Locale'] : $this->get('Pimcore\Localization\Locale', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }, 'tagHandler' => function () {
            return ${($_ = isset($this->services['pimcore.document.tag.handler']) ? $this->services['pimcore.document.tag.handler'] : $this->get('pimcore.document.tag.handler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        }));
    }

    /*
     * Gets the private 'service_locator.38c73ce8067617f669e83e499e0bd337' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_38c73ce8067617f669e83e499e0bd337Service()
    {
        return $this->services['service_locator.38c73ce8067617f669e83e499e0bd337'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('provider' => function () {
            $f = function (\Pimcore\Controller\Config\ControllerDataProvider $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Controller\Config\ControllerDataProvider']) ? $this->services['Pimcore\Controller\Config\ControllerDataProvider'] : $this->get('Pimcore\Controller\Config\ControllerDataProvider', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }));
    }

    /*
     * Gets the private 'service_locator.83603fcf2ec2e2d8755beebb160c60e0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_83603fcf2ec2e2d8755beebb160c60e0Service()
    {
        return $this->services['service_locator.83603fcf2ec2e2d8755beebb160c60e0'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('assetsInstaller' => function () {
            $f = function (\Pimcore\Tool\AssetsInstaller $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Tool\AssetsInstaller']) ? $this->services['Pimcore\Tool\AssetsInstaller'] : $this->get('Pimcore\Tool\AssetsInstaller', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }));
    }

    /*
     * Gets the private 'service_locator.8fbaea2dc9ce39bb09e046ce631ea329' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_8fbaea2dc9ce39bb09e046ce631ea329Service()
    {
        return $this->services['service_locator.8fbaea2dc9ce39bb09e046ce631ea329'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('db' => function () {
            return ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->get('doctrine.dbal.default_connection', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        }));
    }

    /*
     * Gets the private 'service_locator.e64d23c3bf770e2cf44b71643280668d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()
    {
        return $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('esi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.esi']) ? $this->services['fragment.renderer.esi'] : $this->get('fragment.renderer.esi')) && false ?: '_'};
        }, 'hinclude' => function () {
            return ${($_ = isset($this->services['fragment.renderer.hinclude']) ? $this->services['fragment.renderer.hinclude'] : $this->get('fragment.renderer.hinclude')) && false ?: '_'};
        }, 'inline' => function () {
            return ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'};
        }, 'ssi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.ssi']) ? $this->services['fragment.renderer.ssi'] : $this->get('fragment.renderer.ssi')) && false ?: '_'};
        }));
    }

    /*
     * Gets the private 'service_locator.ecb3d2e49c7158cfbf629075292d1db0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_Ecb3d2e49c7158cfbf629075292d1db0Service()
    {
        return $this->services['service_locator.ecb3d2e49c7158cfbf629075292d1db0'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('provider' => function () {
            $f = function (\Pimcore\Controller\Config\ControllerDataProvider $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Controller\Config\ControllerDataProvider']) ? $this->services['Pimcore\Controller\Config\ControllerDataProvider'] : $this->get('Pimcore\Controller\Config\ControllerDataProvider', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }));
    }

    /*
     * Gets the private 'service_locator.ef50b66065b1737465a2d74a13598afe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_Ef50b66065b1737465a2d74a13598afeService()
    {
        return $this->services['service_locator.ef50b66065b1737465a2d74a13598afe'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('object' => function () {
            $f = function (\Pimcore\Model\DataObject\AbstractObject $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Pimcore\Model\DataObject\AbstractObject']) ? $this->services['autowired.Pimcore\Model\DataObject\AbstractObject'] : $this->getAutowired_Pimcore_Model_DataObject_AbstractObjectService()) && false ?: '_'});
        }));
    }

    /*
     * Gets the private 'service_locator.f4349e8894d66f427f9ad72c699461b7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_F4349e8894d66f427f9ad72c699461b7Service()
    {
        return $this->services['service_locator.f4349e8894d66f427f9ad72c699461b7'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('object' => function () {
            $f = function (\Pimcore\Model\DataObject\Concrete $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Pimcore\Model\DataObject\Concrete']) ? $this->services['autowired.Pimcore\Model\DataObject\Concrete'] : $this->getAutowired_Pimcore_Model_DataObject_ConcreteService()) && false ?: '_'});
        }));
    }

    /*
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /*
     * Gets the private 'swiftmailer.transport.mailinvoker' shared service.
     *
     * @return \Swift_Transport_SimpleMailInvoker
     */
    protected function getSwiftmailer_Transport_MailinvokerService()
    {
        return $this->services['swiftmailer.transport.mailinvoker'] = new \Swift_Transport_SimpleMailInvoker();
    }

    /*
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'}, __DIR__);
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
        'kernel.project_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'session.save_path' => false,
        'router.resource' => false,
        'doctrine_migrations.dir_name' => false,
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
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'\\app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'\\logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'CmfRoutingBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony-cmf\\routing-bundle\\src'),
                    'namespace' => 'Symfony\\Cmf\\Bundle\\RoutingBundle',
                ),
                'PimcoreCoreBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\pimcore\\lib\\Pimcore\\Bundle\\CoreBundle'),
                    'namespace' => 'Pimcore\\Bundle\\CoreBundle',
                ),
                'PimcoreAdminBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\pimcore\\lib\\Pimcore\\Bundle\\AdminBundle'),
                    'namespace' => 'Pimcore\\Bundle\\AdminBundle',
                ),
                'AppBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\AppBundle'),
                    'namespace' => 'AppBundle',
                ),
            ); break;
            case 'session.save_path': $value = ($this->targetDirs[3].'\\app/../var/sessions'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'\\app/config/routing.yml'); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'\\app/DoctrineMigrations'); break;
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
                'CmfRoutingBundle' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\CmfRoutingBundle',
                'PimcoreCoreBundle' => 'Pimcore\\Bundle\\CoreBundle\\PimcoreCoreBundle',
                'PimcoreAdminBundle' => 'Pimcore\\Bundle\\AdminBundle\\PimcoreAdminBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'locale' => 'en',
            'swiftmailer.plugin.redirecting.class' => 'Pimcore\\Mail\\Plugins\\RedirectingPlugin',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'pimcore_system_config.general.timezone' => 'Europe/Berlin',
            'pimcore_system_config.general.path_variable' => '',
            'pimcore_system_config.general.domain' => '',
            'pimcore_system_config.general.redirect_to_maindomain' => false,
            'pimcore_system_config.general.language' => 'en',
            'pimcore_system_config.general.validlanguages' => 'en',
            'pimcore_system_config.general.fallbacklanguages.en' => '',
            'pimcore_system_config.general.defaultlanguage' => '',
            'pimcore_system_config.general.loginscreencustomimage' => '',
            'pimcore_system_config.general.disableusagestatistics' => false,
            'pimcore_system_config.general.debug_admin_translations' => false,
            'pimcore_system_config.general.devmode' => false,
            'pimcore_system_config.general.instanceidentifier' => '',
            'pimcore_system_config.general.show_cookie_notice' => false,
            'pimcore_system_config.database.params.username' => 'pimcore',
            'pimcore_system_config.database.params.password' => 'passw0rd',
            'pimcore_system_config.database.params.dbname' => 'pimcore',
            'pimcore_system_config.database.params.host' => 'mysql',
            'pimcore_system_config.database.params.port' => '3306',
            'pimcore_system_config.documents.versions.days' => NULL,
            'pimcore_system_config.documents.versions.steps' => 10,
            'pimcore_system_config.documents.default_controller' => 'default',
            'pimcore_system_config.documents.default_action' => 'default',
            'pimcore_system_config.documents.error_pages.default' => '/',
            'pimcore_system_config.documents.createredirectwhenmoved' => false,
            'pimcore_system_config.documents.allowtrailingslash' => 'no',
            'pimcore_system_config.documents.generatepreview' => true,
            'pimcore_system_config.objects.versions.days' => NULL,
            'pimcore_system_config.objects.versions.steps' => 10,
            'pimcore_system_config.assets.versions.days' => NULL,
            'pimcore_system_config.assets.versions.steps' => 10,
            'pimcore_system_config.assets.icc_rgb_profile' => '',
            'pimcore_system_config.assets.icc_cmyk_profile' => '',
            'pimcore_system_config.assets.hide_edit_image' => false,
            'pimcore_system_config.assets.disable_tree_preview' => false,
            'pimcore_system_config.services.google.client_id' => '',
            'pimcore_system_config.services.google.email' => '',
            'pimcore_system_config.services.google.simpleapikey' => '',
            'pimcore_system_config.services.google.browserapikey' => '',
            'pimcore_system_config.cache.enabled' => true,
            'pimcore_system_config.cache.lifetime' => NULL,
            'pimcore_system_config.cache.excludepatterns' => '',
            'pimcore_system_config.cache.excludecookie' => '',
            'pimcore_system_config.httpclient.adapter' => 'Socket',
            'pimcore_system_config.httpclient.proxy_host' => '',
            'pimcore_system_config.httpclient.proxy_port' => '',
            'pimcore_system_config.httpclient.proxy_user' => '',
            'pimcore_system_config.httpclient.proxy_pass' => '',
            'pimcore_system_config.email.sender.name' => '',
            'pimcore_system_config.email.sender.email' => '',
            'pimcore_system_config.email.return.name' => '',
            'pimcore_system_config.email.return.email' => '',
            'pimcore_system_config.email.method' => 'mail',
            'pimcore_system_config.email.smtp.host' => '',
            'pimcore_system_config.email.smtp.port' => '',
            'pimcore_system_config.email.smtp.ssl' => NULL,
            'pimcore_system_config.email.smtp.name' => '',
            'pimcore_system_config.email.smtp.auth.method' => NULL,
            'pimcore_system_config.email.smtp.auth.username' => '',
            'pimcore_system_config.email.smtp.auth.password' => NULL,
            'pimcore_system_config.email.debug.emailaddresses' => '',
            'pimcore_system_config.newsletter.sender.name' => '',
            'pimcore_system_config.newsletter.sender.email' => '',
            'pimcore_system_config.newsletter.return.name' => '',
            'pimcore_system_config.newsletter.return.email' => '',
            'pimcore_system_config.newsletter.method' => 'mail',
            'pimcore_system_config.newsletter.smtp.host' => '',
            'pimcore_system_config.newsletter.smtp.port' => '',
            'pimcore_system_config.newsletter.smtp.ssl' => NULL,
            'pimcore_system_config.newsletter.smtp.name' => '',
            'pimcore_system_config.newsletter.smtp.auth.method' => NULL,
            'pimcore_system_config.newsletter.smtp.auth.username' => '',
            'pimcore_system_config.newsletter.smtp.auth.password' => NULL,
            'pimcore_system_config.newsletter.debug' => NULL,
            'pimcore_system_config.newsletter.usespecific' => false,
            'pimcore_system_config.webservice.enabled' => false,
            'pimcore_system_config.applicationlog.mail_notification.send_log_summary' => false,
            'pimcore_system_config.applicationlog.mail_notification.filter_priority' => NULL,
            'pimcore_system_config.applicationlog.mail_notification.mail_receiver' => '',
            'pimcore_system_config.applicationlog.archive_treshold' => '30',
            'pimcore_system_config.applicationlog.archive_alternative_database' => '',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

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
                0 => 'php',
                1 => 'twig',
            ),
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
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
                'ROLE_PIMCORE_ADMIN' => array(
                    0 => 'ROLE_PIMCORE_USER',
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
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.pimcore_mailer.transport.name' => 'mail',
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.port' => '',
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.host' => '',
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.username' => '',
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.password' => NULL,
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.pimcore_mailer.spool.enabled' => false,
            'swiftmailer.mailer.pimcore_mailer.plugin.impersonate' => NULL,
            'swiftmailer.mailer.pimcore_mailer.single_address' => '',
            'swiftmailer.mailer.pimcore_mailer.delivery_addresses' => array(
                0 => '',
            ),
            'swiftmailer.mailer.pimcore_mailer.delivery_whitelist' => array(

            ),
            'swiftmailer.mailer.pimcore_mailer.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => '',
            'swiftmailer.mailer.newsletter_mailer.transport.name' => 'mail',
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.port' => '',
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.host' => '',
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.username' => '',
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.password' => NULL,
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.newsletter_mailer.spool.enabled' => false,
            'swiftmailer.mailer.newsletter_mailer.plugin.impersonate' => NULL,
            'swiftmailer.mailer.newsletter_mailer.single_address' => '',
            'swiftmailer.mailer.newsletter_mailer.delivery_addresses' => array(
                0 => '',
            ),
            'swiftmailer.mailer.newsletter_mailer.delivery_whitelist' => array(

            ),
            'swiftmailer.mailer.newsletter_mailer.delivery.enabled' => true,
            'swiftmailer.mailers' => array(
                'newsletter_mailer' => 'swiftmailer.mailer.newsletter_mailer',
                'pimcore_mailer' => 'swiftmailer.mailer.pimcore_mailer',
            ),
            'swiftmailer.default_mailer' => 'pimcore_mailer',
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

            ),
            'doctrine.default_entity_manager' => '',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Pimcore\\Routing\\Loader\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'cmf_routing.uri_filter_regexp' => '',
            'cmf_routing.default_controller' => NULL,
            'cmf_routing.generic_controller' => NULL,
            'cmf_routing.controllers_by_type' => array(

            ),
            'cmf_routing.controllers_by_class' => array(

            ),
            'cmf_routing.templates_by_class' => array(

            ),
            'cmf_routing.route_collection_limit' => 0,
            'cmf_routing.dynamic.limit_candidates' => 20,
            'cmf_routing.dynamic.locales' => array(

            ),
            'cmf_routing.dynamic.auto_locale_pattern' => false,
            'cmf_routing.replace_symfony_router' => true,
            'pimcore.extensions.bundles.search_paths' => array(
                0 => 'src',
                1 => 'pimcore/lib/Pimcore/Bundle',
            ),
            'pimcore.extensions.bundles.handle_composer' => true,
            'pimcore.admin.unauthenticated_routes' => array(
                0 => array(
                    'route' => 'pimcore_admin_login',
                    'path' => false,
                    'host' => false,
                    'methods' => array(

                    ),
                ),
                1 => array(
                    'route' => 'pimcore_admin_webdav',
                    'path' => false,
                    'host' => false,
                    'methods' => array(

                    ),
                ),
            ),
            'pimcore.admin.session.attribute_bags' => array(
                'pimcore_admin' => array(
                    'storage_key' => '_pimcore_admin',
                ),
                'pimcore_documents' => array(
                    'storage_key' => '_pimcore_documents',
                ),
                'pimcore_objects' => array(
                    'storage_key' => '_pimcore_objects',
                ),
                'pimcore_copy' => array(
                    'storage_key' => '_pimcore_copy',
                ),
                'pimcore_backup' => array(
                    'storage_key' => '_pimcore_backup',
                ),
            ),
            'pimcore.admin.translations.path' => '@PimcoreCoreBundle/Resources/translations',
            'pimcore.web_profiler.toolbar.excluded_routes' => array(

            ),
            'pimcore.response_exception_listener.render_error_document' => true,
            'pimcore.config' => array(
                'security' => array(
                    'encoder_factories' => array(
                        'Pimcore\\Bundle\\AdminBundle\\Security\\User\\User' => array(
                            'id' => 'pimcore_admin.security.password_encoder_factory',
                        ),
                    ),
                ),
                'error_handling' => array(
                    'render_error_document' => true,
                ),
                'bundles' => array(
                    'search_paths' => array(
                        0 => 'src',
                        1 => 'pimcore/lib/Pimcore/Bundle',
                    ),
                    'handle_composer' => true,
                ),
                'objects' => array(
                    'class_definitions' => array(
                        'data' => array(
                            'map' => array(
                                'block' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Block',
                                'calculatedValue' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\CalculatedValue',
                                'checkbox' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Checkbox',
                                'classificationstore' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Classificationstore',
                                'country' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Country',
                                'countrymultiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Countrymultiselect',
                                'date' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Date',
                                'datetime' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Datetime',
                                'email' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Email',
                                'externalImage' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\ExternalImage',
                                'fieldcollections' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Fieldcollections',
                                'firstname' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Firstname',
                                'gender' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Gender',
                                'geobounds' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Geobounds',
                                'geopoint' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Geopoint',
                                'geopolygon' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Geopolygon',
                                'hotspotimage' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Hotspotimage',
                                'href' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Href',
                                'image' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Image',
                                'input' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Input',
                                'language' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Language',
                                'languagemultiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Languagemultiselect',
                                'lastname' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Lastname',
                                'link' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Link',
                                'localizedfields' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Localizedfields',
                                'multihref' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Multihref',
                                'multihrefMetadata' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\MultihrefMetadata',
                                'multiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Multiselect',
                                'newsletterActive' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\NewsletterActive',
                                'nonownerobjects' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Nonownerobjects',
                                'numeric' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Numeric',
                                'objectbricks' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Objectbricks',
                                'objects' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Objects',
                                'objectsMetadata' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\ObjectsMetadata',
                                'password' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Password',
                                'persona' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Persona',
                                'personamultiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Personamultiselect',
                                'quantityValue' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\QuantityValue',
                                'inputQuantityValue' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\InputQuantityValue',
                                'select' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Select',
                                'slider' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Slider',
                                'structuredTable' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\StructuredTable',
                                'table' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Table',
                                'textarea' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Textarea',
                                'time' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Time',
                                'user' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\User',
                                'video' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Video',
                                'wysiwyg' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Wysiwyg',
                            ),
                            'prefixes' => array(
                                0 => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\',
                                1 => '\\Object_Class_Data_',
                            ),
                        ),
                        'layout' => array(
                            'prefixes' => array(
                                0 => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Layout\\',
                                1 => '\\Object_Class_Layout_',
                            ),
                            'map' => array(

                            ),
                        ),
                    ),
                ),
                'documents' => array(
                    'tags' => array(
                        'prefixes' => array(
                            0 => '\\Pimcore\\Model\\Document\\Tag\\',
                            1 => '\\Document_Tag_',
                        ),
                        'map' => array(

                        ),
                    ),
                    'editables' => array(
                        'naming_strategy' => 'nested',
                    ),
                    'areas' => array(
                        'autoload' => true,
                    ),
                ),
                'newsletter' => array(
                    'source_adapters' => array(
                        'defaultAdapter' => 'pimcore.document.newsletter.factory.default',
                        'csvList' => 'pimcore.document.newsletter.factory.csv',
                        'reportAdapter' => 'pimcore.document.newsletter.factory.report',
                    ),
                ),
                'custom_report' => array(
                    'adapters' => array(
                        'sql' => 'pimcore.custom_report.adapter.factory.sql',
                        'analytics' => 'pimcore.custom_report.adapter.factory.analytics',
                    ),
                ),
                'context' => array(
                    'profiler' => array(
                        'routes' => array(
                            0 => array(
                                'path' => '^/_(_profiler|wdt)',
                                'route' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                        ),
                    ),
                    'admin' => array(
                        'routes' => array(
                            0 => array(
                                'path' => '^/admin',
                                'route' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                            1 => array(
                                'route' => '^pimcore_admin_',
                                'path' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                        ),
                    ),
                    'webservice' => array(
                        'routes' => array(
                            0 => array(
                                'path' => '^/webservice',
                                'route' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                            1 => array(
                                'route' => '^pimcore_webservice',
                                'path' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                        ),
                    ),
                    'plugin' => array(
                        'routes' => array(
                            0 => array(
                                'path' => '^/plugin',
                                'route' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                        ),
                    ),
                    'install' => array(
                        'routes' => array(
                            0 => array(
                                'path' => '^/install',
                                'route' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                        ),
                    ),
                ),
                'admin' => array(
                    'session' => array(
                        'attribute_bags' => array(
                            'pimcore_admin' => array(
                                'storage_key' => '_pimcore_admin',
                            ),
                            'pimcore_documents' => array(
                                'storage_key' => '_pimcore_documents',
                            ),
                            'pimcore_objects' => array(
                                'storage_key' => '_pimcore_objects',
                            ),
                            'pimcore_copy' => array(
                                'storage_key' => '_pimcore_copy',
                            ),
                            'pimcore_backup' => array(
                                'storage_key' => '_pimcore_backup',
                            ),
                        ),
                    ),
                    'unauthenticated_routes' => array(
                        0 => array(
                            'route' => 'pimcore_admin_login',
                            'path' => false,
                            'host' => false,
                            'methods' => array(

                            ),
                        ),
                        1 => array(
                            'route' => 'pimcore_admin_webdav',
                            'path' => false,
                            'host' => false,
                            'methods' => array(

                            ),
                        ),
                    ),
                    'translations' => array(
                        'path' => '@PimcoreCoreBundle/Resources/translations',
                    ),
                ),
                'flags' => array(

                ),
                'translations' => array(
                    'case_insensitive' => false,
                    'debugging' => array(
                        'enabled' => false,
                        'parameter' => 'pimcore_debug_translations',
                    ),
                ),
                'models' => array(
                    'class_overrides' => array(

                    ),
                ),
                'routing' => array(
                    'static' => array(
                        'locale_params' => array(

                        ),
                    ),
                ),
                'cache' => array(
                    'enabled' => true,
                    'pool_service_id' => NULL,
                    'default_lifetime' => 2419200,
                    'pools' => array(
                        'doctrine' => array(
                            'enabled' => true,
                            'connection' => 'default',
                        ),
                        'redis' => array(
                            'enabled' => false,
                        ),
                    ),
                ),
                'web_profiler' => array(
                    'toolbar' => array(
                        'excluded_routes' => array(

                        ),
                    ),
                ),
            ),
            'pimcore.routing.static.locale_params' => array(

            ),
            'pimcore.cache.core.default_lifetime' => 2419200,
            'console.command.ids' => array(
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand',
                'console.command.pimcore_migrations_command_executecommand' => 'console.command.pimcore_migrations_command_executecommand',
                'console.command.pimcore_migrations_command_generatecommand' => 'console.command.pimcore_migrations_command_generatecommand',
                'console.command.pimcore_migrations_command_latestcommand' => 'console.command.pimcore_migrations_command_latestcommand',
                'console.command.pimcore_migrations_command_migratecommand' => 'console.command.pimcore_migrations_command_migratecommand',
                'console.command.pimcore_migrations_command_statuscommand' => 'console.command.pimcore_migrations_command_statuscommand',
                'console.command.pimcore_migrations_command_versioncommand' => 'console.command.pimcore_migrations_command_versioncommand',
            ),
            'pimcore.service_controllers' => array(
                'AppBundle\\Controller\\DefaultController' => 'AppBundle\\Controller\\DefaultController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentTag\\RenderletController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentTag\\RenderletController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementControllerBase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementControllerBase',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\AdminerController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\AdminerController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\LinfoController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\LinfoController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\OpcacheController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\OpcacheController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\InstallController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\InstallController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LogController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LogController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\QuantityValueController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\QuantityValueController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RecyclebinController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RecyclebinController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\VariantsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\VariantsController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\WorkflowController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\WorkflowController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\ReportsControllerBase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\ReportsControllerBase',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\SettingsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\SettingsController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\TargetingController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\TargetingController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\TagController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\TagController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ImageController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ImageController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\InfoController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\InfoController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Searchadmin\\SearchController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Searchadmin\\SearchController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController',
                'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController' => 'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController',
            ),
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.organize_migrations' => false,
        );
    }
}

class PimcoreTemplatingHelperNavigation_00000000081e7f830000000036e76bbd35155b0379d13c9882e0989f16a69986 extends \Pimcore\Templating\Helper\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder59dca05a70fc6398683045 = null;
    private $initializer59dca05a70fd3986323241 = null;
    private static $publicProperties59dca05a70f8c092145818 = array(
        
    );
    public function getName()
    {
        $this->initializer59dca05a70fd3986323241 && $this->initializer59dca05a70fd3986323241->__invoke($this->valueHolder59dca05a70fc6398683045, $this, 'getName', array(), $this->initializer59dca05a70fd3986323241);
        return $this->valueHolder59dca05a70fc6398683045->getName();
    }
    public function buildNavigation(\Pimcore\Model\Document $activeDocument, ?\Pimcore\Model\Document $navigationRootDocument = null, ?string $htmlMenuPrefix = null, ?callable $pageCallback = null, $cache = true) : \Pimcore\Navigation\Container
    {
        $this->initializer59dca05a70fd3986323241 && $this->initializer59dca05a70fd3986323241->__invoke($this->valueHolder59dca05a70fc6398683045, $this, 'buildNavigation', array('activeDocument' => $activeDocument, 'navigationRootDocument' => $navigationRootDocument, 'htmlMenuPrefix' => $htmlMenuPrefix, 'pageCallback' => $pageCallback, 'cache' => $cache), $this->initializer59dca05a70fd3986323241);
        return $this->valueHolder59dca05a70fc6398683045->buildNavigation($activeDocument, $navigationRootDocument, $htmlMenuPrefix, $pageCallback, $cache);
    }
    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer59dca05a70fd3986323241 && $this->initializer59dca05a70fd3986323241->__invoke($this->valueHolder59dca05a70fc6398683045, $this, 'getRenderer', array('alias' => $alias), $this->initializer59dca05a70fd3986323241);
        return $this->valueHolder59dca05a70fc6398683045->getRenderer($alias);
    }
    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializer59dca05a70fd3986323241 && $this->initializer59dca05a70fd3986323241->__invoke($this->valueHolder59dca05a70fc6398683045, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializer59dca05a70fd3986323241);
        return $this->valueHolder59dca05a70fc6398683045->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }
    public function __call($method, array $arguments = array()) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer59dca05a70fd3986323241 && $this->initializer59dca05a70fd3986323241->__invoke($this->valueHolder59dca05a70fc6398683045, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer59dca05a70fd3986323241);
        return $this->valueHolder59dca05a70fc6398683045->__call($method, $arguments);
    }
    public function setCharset($charset)
    {
        $this->initializer59dca05a70fd3986323241 && $this->initializer59dca05a70fd3986323241->__invoke($this->valueHolder59dca05a70fc6398683045, $this, 'setCharset', array('charset' => $charset), $this->initializer59dca05a70fd3986323241);
        return $this->valueHolder59dca05a70fc6398683045->setCharset($charset);
    }
    public function getCharset()
    {
        $this->initializer59dca05a70fd3986323241 && $this->initializer59dca05a70fd3986323241->__invoke($this->valueHolder59dca05a70fc6398683045, $this, 'getCharset', array(), $this->initializer59dca05a70fd3986323241);
        return $this->valueHolder59dca05a70fc6398683045->getCharset();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        unset($instance->charset);
        \Closure::bind(function (\Pimcore\Templating\Helper\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $instance, 'Pimcore\\Templating\\Helper\\Navigation')->__invoke($instance);
        $instance->initializer59dca05a70fd3986323241 = $initializer;
        return $instance;
    }
    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;
        if (! $this->valueHolder59dca05a70fc6398683045) {
            $reflection = $reflection ?: new \ReflectionClass('Pimcore\\Templating\\Helper\\Navigation');
            $this->valueHolder59dca05a70fc6398683045 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);
        \Closure::bind(function (\Pimcore\Templating\Helper\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Templating\\Helper\\Navigation')->__invoke($this);
        }
        $this->valueHolder59dca05a70fc6398683045->__construct($builder, $rendererLocator);
    }
    public function & __get($name)
    {
        $this->initializer59dca05a70fd3986323241 && $this->initializer59dca05a70fd3986323241->__invoke($this->valueHolder59dca05a70fc6398683045, $this, '__get', ['name' => $name], $this->initializer59dca05a70fd3986323241);
        if (isset(self::$publicProperties59dca05a70f8c092145818[$name])) {
            return $this->valueHolder59dca05a70fc6398683045->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59dca05a70fc6398683045;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolder59dca05a70fc6398683045;
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
        $this->initializer59dca05a70fd3986323241 && $this->initializer59dca05a70fd3986323241->__invoke($this->valueHolder59dca05a70fc6398683045, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer59dca05a70fd3986323241);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59dca05a70fc6398683045;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder59dca05a70fc6398683045;
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
        $this->initializer59dca05a70fd3986323241 && $this->initializer59dca05a70fd3986323241->__invoke($this->valueHolder59dca05a70fc6398683045, $this, '__isset', array('name' => $name), $this->initializer59dca05a70fd3986323241);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59dca05a70fc6398683045;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder59dca05a70fc6398683045;
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
        $this->initializer59dca05a70fd3986323241 && $this->initializer59dca05a70fd3986323241->__invoke($this->valueHolder59dca05a70fc6398683045, $this, '__unset', array('name' => $name), $this->initializer59dca05a70fd3986323241);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59dca05a70fc6398683045;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder59dca05a70fc6398683045;
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
        $this->initializer59dca05a70fd3986323241 && $this->initializer59dca05a70fd3986323241->__invoke($this->valueHolder59dca05a70fc6398683045, $this, '__clone', array(), $this->initializer59dca05a70fd3986323241);
        $this->valueHolder59dca05a70fc6398683045 = clone $this->valueHolder59dca05a70fc6398683045;
    }
    public function __sleep()
    {
        $this->initializer59dca05a70fd3986323241 && $this->initializer59dca05a70fd3986323241->__invoke($this->valueHolder59dca05a70fc6398683045, $this, '__sleep', array(), $this->initializer59dca05a70fd3986323241);
        return array('valueHolder59dca05a70fc6398683045');
    }
    public function __wakeup()
    {
        unset($this->charset);
        \Closure::bind(function (\Pimcore\Templating\Helper\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Templating\\Helper\\Navigation')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer59dca05a70fd3986323241 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer59dca05a70fd3986323241;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer59dca05a70fd3986323241 && $this->initializer59dca05a70fd3986323241->__invoke($this->valueHolder59dca05a70fc6398683045, $this, 'initializeProxy', array(), $this->initializer59dca05a70fd3986323241);
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder59dca05a70fc6398683045;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder59dca05a70fc6398683045;
    }
}
