# Documentation

## Table of Contents

| Method | Description |
|--------|-------------|
| [**attributesSimplifier**](#attributesSimplifier) |  |
| [attributesSimplifier::getReplacePatternData](#attributesSimplifiergetReplacePatternData) |  |
| [**blockListPluginAction**](#blockListPluginAction) |  |
| [blockListPluginAction::onBeforeRequest](#blockListPluginActiononBeforeRequest) |  |
| [blockListPluginAction::callable](#blockListPluginActioncallable) |  |
| [**bugsnagHandlerAction**](#bugsnagHandlerAction) |  |
| [bugsnagHandlerAction::onBuildException](#bugsnagHandlerActiononBuildException) |  |
| [**cache**](#cache) |  |
| [cache::clearAll](#cacheclearAll) |  |
| [cache::super](#cachesuper) |  |
| [cache::get](#cacheget) |  |
| [cache::isValid](#cacheisValid) |  |
| [cache::cache](#cachecache) |  |
| [cache::set](#cacheset) |  |
| [**cacheStoreAction**](#cacheStoreAction) |  |
| [cacheStoreAction::onCompleted](#cacheStoreActiononCompleted) |  |
| [**CallableTestClass**](#CallableTestClass) |  |
| [CallableTestClass::__invoke](#CallableTestClass__invoke) |  |
| [**checkFilesAction**](#checkFilesAction) |  |
| [checkFilesAction::buildIncludes](#checkFilesActionbuildIncludes) |  |
| [**ClassLoader**](#ClassLoader) | ClassLoader implements a PSR-0, PSR-4 and classmap class loader. |
| [ClassLoader::__construct](#ClassLoader__construct) |  |
| [ClassLoader::getPrefixes](#ClassLoadergetPrefixes) |  |
| [ClassLoader::getPrefixesPsr4](#ClassLoadergetPrefixesPsr4) |  |
| [ClassLoader::getFallbackDirs](#ClassLoadergetFallbackDirs) |  |
| [ClassLoader::getFallbackDirsPsr4](#ClassLoadergetFallbackDirsPsr4) |  |
| [ClassLoader::getClassMap](#ClassLoadergetClassMap) |  |
| [ClassLoader::addClassMap](#ClassLoaderaddClassMap) |  |
| [ClassLoader::add](#ClassLoaderadd) | Registers a set of PSR-0 directories for a given prefix, eitherappending or prepending to the ones previously set for this prefix. |
| [ClassLoader::addPsr4](#ClassLoaderaddPsr4) | Registers a set of PSR-4 directories for a given namespace, eitherappending or prepending to the ones previously set for this namespace. |
| [ClassLoader::set](#ClassLoaderset) | Registers a set of PSR-0 directories for a given prefix,replacing any others previously set for this prefix. |
| [ClassLoader::setPsr4](#ClassLoadersetPsr4) | Registers a set of PSR-4 directories for a given namespace,replacing any others previously set for this namespace. |
| [ClassLoader::setUseIncludePath](#ClassLoadersetUseIncludePath) | Turns on searching the include path for class files. |
| [ClassLoader::getUseIncludePath](#ClassLoadergetUseIncludePath) | Can be used to check if the autoloader uses the include path to checkfor classes. |
| [ClassLoader::setClassMapAuthoritative](#ClassLoadersetClassMapAuthoritative) | Turns off searching the prefix and fallback directories for classesthat have not been registered with the class map. |
| [ClassLoader::isClassMapAuthoritative](#ClassLoaderisClassMapAuthoritative) | Should class lookup fail if not found in the current class map? |
| [ClassLoader::setApcuPrefix](#ClassLoadersetApcuPrefix) | APCu prefix to use to cache found/not-found classes, if the extension is enabled. |
| [ClassLoader::getApcuPrefix](#ClassLoadergetApcuPrefix) | The APCu prefix in use, or null if APCu caching is not enabled. |
| [ClassLoader::register](#ClassLoaderregister) | Registers this instance as an autoloader. |
| [ClassLoader::unregister](#ClassLoaderunregister) | Unregisters this instance as an autoloader. |
| [ClassLoader::loadClass](#ClassLoaderloadClass) | Loads the given class or interface. |
| [ClassLoader::findFile](#ClassLoaderfindFile) | Finds the path to the file where the class is defined. |
| [ClassLoader::getRegisteredLoaders](#ClassLoadergetRegisteredLoaders) | Returns the currently registered loaders indexed by their corresponding vendor directories. |
| [**ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40**](#ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40) |  |
| [ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40::loadClassLoader](#ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40loadClassLoader) |  |
| [ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40::getLoader](#ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40getLoader) |  |
| [**ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40**](#ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40) |  |
| [ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40::getInitializer](#ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40getInitializer) |  |
| [**Config**](#Config) |  |
| [Config::__construct](#Config__construct) |  |
| [Config::get](#Configget) |  |
| [Config::extend](#Configextend) |  |
| [Config::withDefaults](#ConfigwithDefaults) |  |
| [**constants**](#constants) |  |
| [constants::create](#constantscreate) |  |
| [constants::env](#constantsenv) |  |
| [constants::set](#constantsset) |  |
| [constants::localise](#constantslocalise) |  |
| [constants::get](#constantsget) |  |
| [**cookiePluginAction**](#cookiePluginAction) |  |
| [cookiePluginAction::onBeforeRequest](#cookiePluginActiononBeforeRequest) |  |
| [cookiePluginAction::beforeRequest](#cookiePluginActionbeforeRequest) |  |
| [cookiePluginAction::onHeadersReceived](#cookiePluginActiononHeadersReceived) |  |
| [cookiePluginAction::headersReceived](#cookiePluginActionheadersReceived) |  |
| [cookiePluginAction::Received](#cookiePluginActionReceived) |  |
| [**CoreTestIterator**](#CoreTestIterator) |  |
| [CoreTestIterator::__construct](#CoreTestIterator__construct) |  |
| [CoreTestIterator::rewind](#CoreTestIteratorrewind) |  |
| [CoreTestIterator::current](#CoreTestIteratorcurrent) |  |
| [CoreTestIterator::key](#CoreTestIteratorkey) |  |
| [CoreTestIterator::next](#CoreTestIteratornext) |  |
| [CoreTestIterator::valid](#CoreTestIteratorvalid) |  |
| [**CoreTestIteratorAggregate**](#CoreTestIteratorAggregate) |  |
| [CoreTestIteratorAggregate::__construct](#CoreTestIteratorAggregate__construct) |  |
| [CoreTestIteratorAggregate::getIterator](#CoreTestIteratorAggregategetIterator) |  |
| [**CoreTestIteratorAggregateAggregate**](#CoreTestIteratorAggregateAggregate) |  |
| [CoreTestIteratorAggregateAggregate::__construct](#CoreTestIteratorAggregateAggregate__construct) |  |
| [CoreTestIteratorAggregateAggregate::getIterator](#CoreTestIteratorAggregateAggregategetIterator) |  |
| [**CorruptedPathDetected**](#CorruptedPathDetected) |  |
| [CorruptedPathDetected::forPath](#CorruptedPathDetectedforPath) |  |
| [**CustomExtensionTest**](#CustomExtensionTest) |  |
| [CustomExtensionTest::testGetInvalidOperators](#CustomExtensionTesttestGetInvalidOperators) |  |
| [CustomExtensionTest::provideInvalidExtensions](#CustomExtensionTestprovideInvalidExtensions) |  |
| [**dailyMotionPluginAction**](#dailyMotionPluginAction) |  |
| [dailyMotionPluginAction::onCompleted](#dailyMotionPluginActiononCompleted) |  |
| [dailyMotionPluginAction::completed](#dailyMotionPluginActioncompleted) |  |
| [**debubEnablingAction**](#debubEnablingAction) |  |
| [debubEnablingAction::buildIncludes](#debubEnablingActionbuildIncludes) |  |
| [**debugHandlerAction**](#debugHandlerAction) |  |
| [debugHandlerAction::onBuildException](#debugHandlerActiononBuildException) |  |
| [**DirectoryAttributes**](#DirectoryAttributes) |  |
| [DirectoryAttributes::__construct](#DirectoryAttributes__construct) |  |
| [DirectoryAttributes::path](#DirectoryAttributespath) |  |
| [DirectoryAttributes::type](#DirectoryAttributestype) |  |
| [DirectoryAttributes::visibility](#DirectoryAttributesvisibility) |  |
| [DirectoryAttributes::lastModified](#DirectoryAttributeslastModified) |  |
| [DirectoryAttributes::extraMetadata](#DirectoryAttributesextraMetadata) |  |
| [DirectoryAttributes::isFile](#DirectoryAttributesisFile) |  |
| [DirectoryAttributes::isDir](#DirectoryAttributesisDir) |  |
| [DirectoryAttributes::withPath](#DirectoryAttributeswithPath) |  |
| [DirectoryAttributes::fromArray](#DirectoryAttributesfromArray) |  |
| [DirectoryAttributes::jsonSerialize](#DirectoryAttributesjsonSerialize) |  |
| [**DirectoryListing**](#DirectoryListing) |  |
| [DirectoryListing::__construct](#DirectoryListing__construct) |  |
| [DirectoryListing::filter](#DirectoryListingfilter) |  |
| [DirectoryListing::map](#DirectoryListingmap) |  |
| [DirectoryListing::sortByPath](#DirectoryListingsortByPath) |  |
| [DirectoryListing::getIterator](#DirectoryListinggetIterator) |  |
| [DirectoryListing::toArray](#DirectoryListingtoArray) |  |
| [**EmptyExtensionToMimeTypeMap**](#EmptyExtensionToMimeTypeMap) |  |
| [EmptyExtensionToMimeTypeMap::lookupMimeType](#EmptyExtensionToMimeTypeMaplookupMimeType) |  |
| [**ExtensionMimeTypeDetector**](#ExtensionMimeTypeDetector) |  |
| [ExtensionMimeTypeDetector::__construct](#ExtensionMimeTypeDetector__construct) |  |
| [ExtensionMimeTypeDetector::detectMimeType](#ExtensionMimeTypeDetectordetectMimeType) |  |
| [ExtensionMimeTypeDetector::detectMimeTypeFromPath](#ExtensionMimeTypeDetectordetectMimeTypeFromPath) |  |
| [ExtensionMimeTypeDetector::detectMimeTypeFromFile](#ExtensionMimeTypeDetectordetectMimeTypeFromFile) |  |
| [ExtensionMimeTypeDetector::detectMimeTypeFromBuffer](#ExtensionMimeTypeDetectordetectMimeTypeFromBuffer) |  |
| [**FallbackMimeTypeDetector**](#FallbackMimeTypeDetector) |  |
| [FallbackMimeTypeDetector::__construct](#FallbackMimeTypeDetector__construct) |  |
| [FallbackMimeTypeDetector::detectMimeType](#FallbackMimeTypeDetectordetectMimeType) |  |
| [FallbackMimeTypeDetector::detectMimeTypeFromBuffer](#FallbackMimeTypeDetectordetectMimeTypeFromBuffer) |  |
| [FallbackMimeTypeDetector::detectMimeTypeFromPath](#FallbackMimeTypeDetectordetectMimeTypeFromPath) |  |
| [FallbackMimeTypeDetector::detectMimeTypeFromFile](#FallbackMimeTypeDetectordetectMimeTypeFromFile) |  |
| [**FileAttributes**](#FileAttributes) |  |
| [FileAttributes::__construct](#FileAttributes__construct) |  |
| [FileAttributes::type](#FileAttributestype) |  |
| [FileAttributes::path](#FileAttributespath) |  |
| [FileAttributes::fileSize](#FileAttributesfileSize) |  |
| [FileAttributes::visibility](#FileAttributesvisibility) |  |
| [FileAttributes::lastModified](#FileAttributeslastModified) |  |
| [FileAttributes::mimeType](#FileAttributesmimeType) |  |
| [FileAttributes::extraMetadata](#FileAttributesextraMetadata) |  |
| [FileAttributes::isFile](#FileAttributesisFile) |  |
| [FileAttributes::isDir](#FileAttributesisDir) |  |
| [FileAttributes::withPath](#FileAttributeswithPath) |  |
| [FileAttributes::fromArray](#FileAttributesfromArray) |  |
| [FileAttributes::jsonSerialize](#FileAttributesjsonSerialize) |  |
| [**Filesystem**](#Filesystem) |  |
| [Filesystem::__construct](#Filesystem__construct) |  |
| [Filesystem::fileExists](#FilesystemfileExists) |  |
| [Filesystem::directoryExists](#FilesystemdirectoryExists) |  |
| [Filesystem::has](#Filesystemhas) |  |
| [Filesystem::write](#Filesystemwrite) |  |
| [Filesystem::writeStream](#FilesystemwriteStream) |  |
| [Filesystem::read](#Filesystemread) |  |
| [Filesystem::readStream](#FilesystemreadStream) |  |
| [Filesystem::delete](#Filesystemdelete) |  |
| [Filesystem::deleteDirectory](#FilesystemdeleteDirectory) |  |
| [Filesystem::createDirectory](#FilesystemcreateDirectory) |  |
| [Filesystem::listContents](#FilesystemlistContents) |  |
| [Filesystem::move](#Filesystemmove) |  |
| [Filesystem::copy](#Filesystemcopy) |  |
| [Filesystem::lastModified](#FilesystemlastModified) |  |
| [Filesystem::fileSize](#FilesystemfileSize) |  |
| [Filesystem::mimeType](#FilesystemmimeType) |  |
| [Filesystem::setVisibility](#FilesystemsetVisibility) |  |
| [Filesystem::visibility](#Filesystemvisibility) |  |
| [**FinfoMimeTypeDetector**](#FinfoMimeTypeDetector) |  |
| [FinfoMimeTypeDetector::__construct](#FinfoMimeTypeDetector__construct) |  |
| [FinfoMimeTypeDetector::detectMimeType](#FinfoMimeTypeDetectordetectMimeType) |  |
| [FinfoMimeTypeDetector::detectMimeTypeFromPath](#FinfoMimeTypeDetectordetectMimeTypeFromPath) |  |
| [FinfoMimeTypeDetector::detectMimeTypeFromFile](#FinfoMimeTypeDetectordetectMimeTypeFromFile) |  |
| [FinfoMimeTypeDetector::detectMimeTypeFromBuffer](#FinfoMimeTypeDetectordetectMimeTypeFromBuffer) |  |
| [**FooObject**](#FooObject) |  |
| [FooObject::reset](#FooObjectreset) |  |
| [FooObject::__toString](#FooObject__toString) |  |
| [FooObject::foo](#FooObjectfoo) |  |
| [FooObject::getFooBar](#FooObjectgetFooBar) |  |
| [**generalHelper**](#generalHelper) |  |
| [generalHelper::vid_player](#generalHelpervid_player) |  |
| [generalHelper::starts_with](#generalHelperstarts_with) |  |
| [generalHelper::str_before](#generalHelperstr_before) |  |
| [generalHelper::is_html](#generalHelperis_html) |  |
| [generalHelper::in_arrayi](#generalHelperin_arrayi) |  |
| [generalHelper::re_match](#generalHelperre_match) |  |
| [generalHelper::array_merge_custom](#generalHelperarray_merge_custom) |  |
| [generalHelper::str_rot_pass](#generalHelperstr_rot_pass) |  |
| [generalHelper::app_url](#generalHelperapp_url) |  |
| [generalHelper::render_string](#generalHelperrender_string) |  |
| [generalHelper::time_ms](#generalHelpertime_ms) |  |
| [generalHelper::base64_url_encode](#generalHelperbase64_url_encode) |  |
| [generalHelper::base64_url_decode](#generalHelperbase64_url_decode) |  |
| [generalHelper::proxify_url](#generalHelperproxify_url) |  |
| [generalHelper::add_http](#generalHelperadd_http) |  |
| [generalHelper::rel2abs](#generalHelperrel2abs) |  |
| [generalHelper::array_merge_ignore](#generalHelperarray_merge_ignore) |  |
| [generalHelper::CSV](#generalHelperCSV) |  |
| [generalHelper::fileCheck](#generalHelperfileCheck) |  |
| [generalHelper::extractSubdomains](#generalHelperextractSubdomains) |  |
| [generalHelper::extractDomain](#generalHelperextractDomain) |  |
| [**GeneratedExtensionToMimeTypeMap**](#GeneratedExtensionToMimeTypeMap) |  |
| [GeneratedExtensionToMimeTypeMap::lookupMimeType](#GeneratedExtensionToMimeTypeMaplookupMimeType) |  |
| [**Generator**](#Generator) | This class takes the output from &#039;parser&#039;, and generate the markdowntemplates. |
| [Generator::__construct](#Generator__construct) |  |
| [Generator::run](#Generatorrun) | Starts the generator. |
| [Generator::classLink](#GeneratorclassLink) | This is a twig template function. |
| [**globalCollectionAction**](#globalCollectionAction) |  |
| [globalCollectionAction::onBuildContext](#globalCollectionActiononBuildContext) |  |
| [**guzzleClientAction**](#guzzleClientAction) |  |
| [guzzleClientAction::onBeforeRequest](#guzzleClientActiononBeforeRequest) |  |
| [**headerRewritePluginAction**](#headerRewritePluginAction) |  |
| [headerRewritePluginAction::onBeforeRequest](#headerRewritePluginActiononBeforeRequest) |  |
| [headerRewritePluginAction::onHeadersReceived](#headerRewritePluginActiononHeadersReceived) |  |
| [headerRewritePluginAction::headersReceived](#headerRewritePluginActionheadersReceived) |  |
| [**htmlCommentsRemover**](#htmlCommentsRemover) |  |
| [htmlCommentsRemover::getReplacePatternData](#htmlCommentsRemovergetReplacePatternData) |  |
| [**inlineCssMinifier**](#inlineCssMinifier) |  |
| [inlineCssMinifier::process](#inlineCssMinifierprocess) |  |
| [**inlineJavascriptMinifier**](#inlineJavascriptMinifier) |  |
| [inlineJavascriptMinifier::process](#inlineJavascriptMinifierprocess) |  |
| [**InstalledVersions**](#InstalledVersions) | This class is copied in every Composer installed project and available to all |
| [InstalledVersions::getInstalledPackages](#InstalledVersionsgetInstalledPackages) | Returns a list of all package names which are present, either by being installed, replaced or provided |
| [InstalledVersions::getInstalledPackagesByType](#InstalledVersionsgetInstalledPackagesByType) | Returns a list of all package names with a specific type e.g. &#039;library&#039; |
| [InstalledVersions::isInstalled](#InstalledVersionsisInstalled) | Checks whether the given package is installed |
| [InstalledVersions::satisfies](#InstalledVersionssatisfies) | Checks whether the given package satisfies a version constraint |
| [InstalledVersions::getVersionRanges](#InstalledVersionsgetVersionRanges) | Returns a version constraint representing all the range(s) which are installed for a given package |
| [InstalledVersions::getVersion](#InstalledVersionsgetVersion) |  |
| [InstalledVersions::getPrettyVersion](#InstalledVersionsgetPrettyVersion) |  |
| [InstalledVersions::getReference](#InstalledVersionsgetReference) |  |
| [InstalledVersions::getInstallPath](#InstalledVersionsgetInstallPath) |  |
| [InstalledVersions::getRootPackage](#InstalledVersionsgetRootPackage) |  |
| [InstalledVersions::getRawData](#InstalledVersionsgetRawData) | Returns the raw installed.php data for custom implementations |
| [InstalledVersions::getAllRawData](#InstalledVersionsgetAllRawData) | Returns the raw data of all installed.php which are currently loaded for custom implementations |
| [InstalledVersions::reload](#InstalledVersionsreload) | Lets you reload the static array from another file |
| [**InvalidOperatorExtension**](#InvalidOperatorExtension) |  |
| [InvalidOperatorExtension::__construct](#InvalidOperatorExtension__construct) |  |
| [InvalidOperatorExtension::getTokenParsers](#InvalidOperatorExtensiongetTokenParsers) | Returns the token parser instances to add to the existing list. |
| [InvalidOperatorExtension::getNodeVisitors](#InvalidOperatorExtensiongetNodeVisitors) | Returns the node visitor instances to add to the existing list. |
| [InvalidOperatorExtension::getFilters](#InvalidOperatorExtensiongetFilters) | Returns a list of filters to add to the existing list. |
| [InvalidOperatorExtension::getTests](#InvalidOperatorExtensiongetTests) | Returns a list of tests to add to the existing list. |
| [InvalidOperatorExtension::getFunctions](#InvalidOperatorExtensiongetFunctions) | Returns a list of functions to add to the existing list. |
| [InvalidOperatorExtension::getOperators](#InvalidOperatorExtensiongetOperators) | Returns a list of operators to add to the existing list. |
| [**InvalidStreamProvided**](#InvalidStreamProvided) |  |
| [**InvalidVisibilityProvided**](#InvalidVisibilityProvided) |  |
| [InvalidVisibilityProvided::withVisibility](#InvalidVisibilityProvidedwithVisibility) |  |
| [**LocalFilesystemAdapter**](#LocalFilesystemAdapter) |  |
| [LocalFilesystemAdapter::__construct](#LocalFilesystemAdapter__construct) |  |
| [LocalFilesystemAdapter::write](#LocalFilesystemAdapterwrite) |  |
| [LocalFilesystemAdapter::writeStream](#LocalFilesystemAdapterwriteStream) |  |
| [LocalFilesystemAdapter::delete](#LocalFilesystemAdapterdelete) |  |
| [LocalFilesystemAdapter::deleteDirectory](#LocalFilesystemAdapterdeleteDirectory) |  |
| [LocalFilesystemAdapter::listContents](#LocalFilesystemAdapterlistContents) |  |
| [LocalFilesystemAdapter::move](#LocalFilesystemAdaptermove) |  |
| [LocalFilesystemAdapter::copy](#LocalFilesystemAdaptercopy) |  |
| [LocalFilesystemAdapter::read](#LocalFilesystemAdapterread) |  |
| [LocalFilesystemAdapter::readStream](#LocalFilesystemAdapterreadStream) |  |
| [LocalFilesystemAdapter::fileExists](#LocalFilesystemAdapterfileExists) |  |
| [LocalFilesystemAdapter::directoryExists](#LocalFilesystemAdapterdirectoryExists) |  |
| [LocalFilesystemAdapter::createDirectory](#LocalFilesystemAdaptercreateDirectory) |  |
| [LocalFilesystemAdapter::setVisibility](#LocalFilesystemAdaptersetVisibility) |  |
| [LocalFilesystemAdapter::visibility](#LocalFilesystemAdaptervisibility) |  |
| [LocalFilesystemAdapter::mimeType](#LocalFilesystemAdaptermimeType) |  |
| [LocalFilesystemAdapter::lastModified](#LocalFilesystemAdapterlastModified) |  |
| [LocalFilesystemAdapter::fileSize](#LocalFilesystemAdapterfileSize) |  |
| [**logPluginAction**](#logPluginAction) |  |
| [logPluginAction::onHeadersReceived](#logPluginActiononHeadersReceived) |  |
| [**mimeTypesAction**](#mimeTypesAction) |  |
| [mimeTypesAction::buildHeaders](#mimeTypesActionbuildHeaders) |  |
| [**minify**](#minify) |  |
| [minify::__construct](#minify__construct) |  |
| [minify::createDefault](#minifycreateDefault) |  |
| [minify::process](#minifyprocess) |  |
| [minify::addProcessor](#minifyaddProcessor) |  |
| [**MountManager**](#MountManager) |  |
| [MountManager::__construct](#MountManager__construct) | MountManager constructor. |
| [MountManager::fileExists](#MountManagerfileExists) |  |
| [MountManager::has](#MountManagerhas) |  |
| [MountManager::directoryExists](#MountManagerdirectoryExists) |  |
| [MountManager::read](#MountManagerread) |  |
| [MountManager::readStream](#MountManagerreadStream) |  |
| [MountManager::listContents](#MountManagerlistContents) |  |
| [MountManager::lastModified](#MountManagerlastModified) |  |
| [MountManager::fileSize](#MountManagerfileSize) |  |
| [MountManager::mimeType](#MountManagermimeType) |  |
| [MountManager::visibility](#MountManagervisibility) |  |
| [MountManager::write](#MountManagerwrite) |  |
| [MountManager::writeStream](#MountManagerwriteStream) |  |
| [MountManager::setVisibility](#MountManagersetVisibility) |  |
| [MountManager::delete](#MountManagerdelete) |  |
| [MountManager::deleteDirectory](#MountManagerdeleteDirectory) |  |
| [MountManager::createDirectory](#MountManagercreateDirectory) |  |
| [MountManager::move](#MountManagermove) |  |
| [MountManager::copy](#MountManagercopy) |  |
| [**overridePluginAction**](#overridePluginAction) |  |
| [overridePluginAction::onCompleted](#overridePluginActiononCompleted) |  |
| [overridePluginAction::REWRITE](#overridePluginActionREWRITE) |  |
| [**OverridingExtensionToMimeTypeMap**](#OverridingExtensionToMimeTypeMap) |  |
| [OverridingExtensionToMimeTypeMap::__construct](#OverridingExtensionToMimeTypeMap__construct) |  |
| [OverridingExtensionToMimeTypeMap::lookupMimeType](#OverridingExtensionToMimeTypeMaplookupMimeType) |  |
| [**paramStore**](#paramStore) |  |
| [paramStore::__construct](#paramStore__construct) |  |
| [paramStore::replace](#paramStorereplace) |  |
| [paramStore::clear](#paramStoreclear) |  |
| [paramStore::set](#paramStoreset) |  |
| [paramStore::has](#paramStorehas) |  |
| [paramStore::remove](#paramStoreremove) |  |
| [paramStore::get](#paramStoreget) |  |
| [paramStore::all](#paramStoreall) |  |
| [paramStore::__toString](#paramStore__toString) |  |
| [**Parser**](#Parser) | This class parses structure.xml and generates the api documentation. |
| [Parser::__construct](#Parser__construct) |  |
| [Parser::run](#Parserrun) | Starts the process. |
| [**PathPrefixer**](#PathPrefixer) |  |
| [PathPrefixer::__construct](#PathPrefixer__construct) |  |
| [PathPrefixer::prefixPath](#PathPrefixerprefixPath) |  |
| [PathPrefixer::stripPrefix](#PathPrefixerstripPrefix) |  |
| [PathPrefixer::stripDirectoryPrefix](#PathPrefixerstripDirectoryPrefix) |  |
| [PathPrefixer::prefixDirectoryPath](#PathPrefixerprefixDirectoryPath) |  |
| [**PathTraversalDetected**](#PathTraversalDetected) |  |
| [PathTraversalDetected::path](#PathTraversalDetectedpath) |  |
| [PathTraversalDetected::forPath](#PathTraversalDetectedforPath) |  |
| [**PortableVisibilityConverter**](#PortableVisibilityConverter) |  |
| [PortableVisibilityConverter::__construct](#PortableVisibilityConverter__construct) |  |
| [PortableVisibilityConverter::forFile](#PortableVisibilityConverterforFile) |  |
| [PortableVisibilityConverter::forDirectory](#PortableVisibilityConverterforDirectory) |  |
| [PortableVisibilityConverter::inverseForFile](#PortableVisibilityConverterinverseForFile) |  |
| [PortableVisibilityConverter::inverseForDirectory](#PortableVisibilityConverterinverseForDirectory) |  |
| [PortableVisibilityConverter::defaultForDirectories](#PortableVisibilityConverterdefaultForDirectories) |  |
| [PortableVisibilityConverter::fromArray](#PortableVisibilityConverterfromArray) |  |
| [**PortableVisibilityGuard**](#PortableVisibilityGuard) |  |
| [PortableVisibilityGuard::guardAgainstInvalidInput](#PortableVisibilityGuardguardAgainstInvalidInput) |  |
| [**proxifyPluginAction**](#proxifyPluginAction) |  |
| [proxifyPluginAction::onBeforeRequest](#proxifyPluginActiononBeforeRequest) |  |
| [proxifyPluginAction::onCompleted](#proxifyPluginActiononCompleted) |  |
| [proxifyPluginAction::clean_content_type](#proxifyPluginActionclean_content_type) |  |
| [**quotesRemover**](#quotesRemover) |  |
| [quotesRemover::getReplacePatternData](#quotesRemovergetReplacePatternData) |  |
| [**readyCheckAction**](#readyCheckAction) |  |
| [readyCheckAction::onCheck](#readyCheckActiononCheck) |  |
| [**request**](#request) |  |
| [request::__construct](#request__construct) |  |
| [request::setUrl](#requestsetUrl) |  |
| [request::parseQuery](#requestparseQuery) |  |
| [request::setBody](#requestsetBody) |  |
| [request::prepare](#requestprepare) |  |
| [request::buildPostBody](#requestbuildPostBody) |  |
| [request::createFromGlobals](#requestcreateFromGlobals) |  |
| [request::getMethod](#requestgetMethod) |  |
| [request::setMethod](#requestsetMethod) |  |
| [request::getUrl](#requestgetUrl) |  |
| [request::getProtocolVersion](#requestgetProtocolVersion) |  |
| [request::getRawHeaders](#requestgetRawHeaders) |  |
| [request::getRawBody](#requestgetRawBody) |  |
| [request::getUri](#requestgetUri) |  |
| [**requestBodyAction**](#requestBodyAction) |  |
| [requestBodyAction::buildRequest](#requestBodyActionbuildRequest) |  |
| [**requestResponseAction**](#requestResponseAction) |  |
| [requestResponseAction::buildIncludes](#requestResponseActionbuildIncludes) |  |
| [**resourceHandlerAction**](#resourceHandlerAction) |  |
| [resourceHandlerAction::onBuildException](#resourceHandlerActiononBuildException) |  |
| [**response**](#response) |  |
| [response::__construct](#response__construct) |  |
| [response::setStatusCode](#responsesetStatusCode) |  |
| [response::getContent](#responsegetContent) |  |
| [response::setContent](#responsesetContent) |  |
| [response::printContent](#responseprintContent) |  |
| [response::sendHeaders](#responsesendHeaders) |  |
| [response::getStatusText](#responsegetStatusText) |  |
| [response::getStatusCode](#responsegetStatusCode) |  |
| [**setHeadersAction**](#setHeadersAction) |  |
| [setHeadersAction::buildHeaders](#setHeadersActionbuildHeaders) |  |
| [**siteCollectionAction**](#siteCollectionAction) |  |
| [siteCollectionAction::onBuildContext](#siteCollectionActiononBuildContext) |  |
| [**streamPluginAction**](#streamPluginAction) |  |
| [streamPluginAction::onHeadersReceived](#streamPluginActiononHeadersReceived) |  |
| [streamPluginAction::onCurlWrite](#streamPluginActiononCurlWrite) |  |
| [streamPluginAction::onCompleted](#streamPluginActiononCompleted) |  |
| [**SymbolicLinkEncountered**](#SymbolicLinkEncountered) |  |
| [SymbolicLinkEncountered::location](#SymbolicLinkEncounteredlocation) |  |
| [SymbolicLinkEncountered::atLocation](#SymbolicLinkEncounteredatLocation) |  |
| [**TestTokenParser**](#TestTokenParser) | Base class for all token parsers. |
| [TestTokenParser::parse](#TestTokenParserparse) |  |
| [TestTokenParser::getTag](#TestTokenParsergetTag) |  |
| [**Twig_Cache_Filesystem**](#Twig_Cache_Filesystem) | Implements a cache on the filesystem. |
| [Twig_Cache_Filesystem::__construct](#Twig_Cache_Filesystem__construct) |  |
| [Twig_Cache_Filesystem::generateKey](#Twig_Cache_FilesystemgenerateKey) | Generates a cache key for the given template class name. |
| [Twig_Cache_Filesystem::load](#Twig_Cache_Filesystemload) | Loads a template from the cache. |
| [Twig_Cache_Filesystem::write](#Twig_Cache_Filesystemwrite) | Writes the compiled template to cache. |
| [Twig_Cache_Filesystem::getTimestamp](#Twig_Cache_FilesystemgetTimestamp) | Returns the modification timestamp of a key. |
| [**Twig_Cache_Null**](#Twig_Cache_Null) | Implements a no-cache strategy. |
| [Twig_Cache_Null::generateKey](#Twig_Cache_NullgenerateKey) | Generates a cache key for the given template class name. |
| [Twig_Cache_Null::write](#Twig_Cache_Nullwrite) | Writes the compiled template to cache. |
| [Twig_Cache_Null::load](#Twig_Cache_Nullload) | Loads a template from the cache. |
| [Twig_Cache_Null::getTimestamp](#Twig_Cache_NullgetTimestamp) | Returns the modification timestamp of a key. |
| [**Twig_Compiler**](#Twig_Compiler) | Compiles a node to PHP code. |
| [Twig_Compiler::__construct](#Twig_Compiler__construct) |  |
| [Twig_Compiler::getEnvironment](#Twig_CompilergetEnvironment) | Returns the environment instance related to this compiler. |
| [Twig_Compiler::getSource](#Twig_CompilergetSource) | Gets the current PHP code after compilation. |
| [Twig_Compiler::compile](#Twig_Compilercompile) | Compiles a node. |
| [Twig_Compiler::subcompile](#Twig_Compilersubcompile) |  |
| [Twig_Compiler::raw](#Twig_Compilerraw) | Adds a raw string to the compiled code. |
| [Twig_Compiler::write](#Twig_Compilerwrite) | Writes a string to the compiled code by adding indentation. |
| [Twig_Compiler::string](#Twig_Compilerstring) | Adds a quoted string to the compiled code. |
| [Twig_Compiler::repr](#Twig_Compilerrepr) | Returns a PHP representation of a given value. |
| [Twig_Compiler::addDebugInfo](#Twig_CompileraddDebugInfo) | Adds debugging information. |
| [Twig_Compiler::getDebugInfo](#Twig_CompilergetDebugInfo) |  |
| [Twig_Compiler::indent](#Twig_Compilerindent) | Indents the generated code. |
| [Twig_Compiler::outdent](#Twig_Compileroutdent) | Outdents the generated code. |
| [Twig_Compiler::getVarName](#Twig_CompilergetVarName) |  |
| [**Twig_Environment**](#Twig_Environment) | Stores the Twig configuration. |
| [Twig_Environment::__construct](#Twig_Environment__construct) | Constructor. |
| [Twig_Environment::getBaseTemplateClass](#Twig_EnvironmentgetBaseTemplateClass) | Gets the base template class for compiled templates. |
| [Twig_Environment::setBaseTemplateClass](#Twig_EnvironmentsetBaseTemplateClass) | Sets the base template class for compiled templates. |
| [Twig_Environment::enableDebug](#Twig_EnvironmentenableDebug) | Enables debugging mode. |
| [Twig_Environment::disableDebug](#Twig_EnvironmentdisableDebug) | Disables debugging mode. |
| [Twig_Environment::isDebug](#Twig_EnvironmentisDebug) | Checks if debug mode is enabled. |
| [Twig_Environment::enableAutoReload](#Twig_EnvironmentenableAutoReload) | Enables the auto_reload option. |
| [Twig_Environment::disableAutoReload](#Twig_EnvironmentdisableAutoReload) | Disables the auto_reload option. |
| [Twig_Environment::isAutoReload](#Twig_EnvironmentisAutoReload) | Checks if the auto_reload option is enabled. |
| [Twig_Environment::enableStrictVariables](#Twig_EnvironmentenableStrictVariables) | Enables the strict_variables option. |
| [Twig_Environment::disableStrictVariables](#Twig_EnvironmentdisableStrictVariables) | Disables the strict_variables option. |
| [Twig_Environment::isStrictVariables](#Twig_EnvironmentisStrictVariables) | Checks if the strict_variables option is enabled. |
| [Twig_Environment::getCache](#Twig_EnvironmentgetCache) | Gets the current cache implementation. |
| [Twig_Environment::setCache](#Twig_EnvironmentsetCache) | Sets the current cache implementation. |
| [Twig_Environment::getTemplateClass](#Twig_EnvironmentgetTemplateClass) | Gets the template class associated with the given string. |
| [Twig_Environment::render](#Twig_Environmentrender) | Renders a template. |
| [Twig_Environment::display](#Twig_Environmentdisplay) | Displays a template. |
| [Twig_Environment::load](#Twig_Environmentload) | Loads a template. |
| [Twig_Environment::createTemplate](#Twig_EnvironmentcreateTemplate) | Creates a template from source. |
| [Twig_Environment::isTemplateFresh](#Twig_EnvironmentisTemplateFresh) | Returns true if the template is still fresh. |
| [Twig_Environment::resolveTemplate](#Twig_EnvironmentresolveTemplate) | Tries to load a template consecutively from an array. |
| [Twig_Environment::setLexer](#Twig_EnvironmentsetLexer) |  |
| [Twig_Environment::tokenize](#Twig_Environmenttokenize) | Tokenizes a source code. |
| [Twig_Environment::setParser](#Twig_EnvironmentsetParser) |  |
| [Twig_Environment::parse](#Twig_Environmentparse) | Converts a token stream to a node tree. |
| [Twig_Environment::setCompiler](#Twig_EnvironmentsetCompiler) |  |
| [Twig_Environment::compile](#Twig_Environmentcompile) | Compiles a node and returns the PHP code. |
| [Twig_Environment::compileSource](#Twig_EnvironmentcompileSource) | Compiles a template source code. |
| [Twig_Environment::setLoader](#Twig_EnvironmentsetLoader) |  |
| [Twig_Environment::getLoader](#Twig_EnvironmentgetLoader) | Gets the Loader instance. |
| [Twig_Environment::setCharset](#Twig_EnvironmentsetCharset) | Sets the default template charset. |
| [Twig_Environment::getCharset](#Twig_EnvironmentgetCharset) | Gets the default template charset. |
| [Twig_Environment::hasExtension](#Twig_EnvironmenthasExtension) | Returns true if the given extension is registered. |
| [Twig_Environment::addRuntimeLoader](#Twig_EnvironmentaddRuntimeLoader) | Adds a runtime loader. |
| [Twig_Environment::getExtension](#Twig_EnvironmentgetExtension) | Gets an extension by class name. |
| [Twig_Environment::getRuntime](#Twig_EnvironmentgetRuntime) | Returns the runtime implementation of a Twig element (filter/function/test). |
| [Twig_Environment::addExtension](#Twig_EnvironmentaddExtension) |  |
| [Twig_Environment::setExtensions](#Twig_EnvironmentsetExtensions) | Registers an array of extensions. |
| [Twig_Environment::getExtensions](#Twig_EnvironmentgetExtensions) | Returns all registered extensions. |
| [Twig_Environment::addTokenParser](#Twig_EnvironmentaddTokenParser) |  |
| [Twig_Environment::addNodeVisitor](#Twig_EnvironmentaddNodeVisitor) |  |
| [Twig_Environment::addFilter](#Twig_EnvironmentaddFilter) |  |
| [Twig_Environment::registerUndefinedFilterCallback](#Twig_EnvironmentregisterUndefinedFilterCallback) |  |
| [Twig_Environment::addTest](#Twig_EnvironmentaddTest) | Registers a Test. |
| [Twig_Environment::addFunction](#Twig_EnvironmentaddFunction) |  |
| [Twig_Environment::registerUndefinedFunctionCallback](#Twig_EnvironmentregisterUndefinedFunctionCallback) |  |
| [Twig_Environment::addGlobal](#Twig_EnvironmentaddGlobal) | Registers a Global. |
| [Twig_Environment::mergeGlobals](#Twig_EnvironmentmergeGlobals) | Merges a context with the defined globals. |
| [**Twig_Error**](#Twig_Error) | Twig base exception. |
| [Twig_Error::__construct](#Twig_Error__construct) | Constructor. |
| [Twig_Error::getRawMessage](#Twig_ErrorgetRawMessage) | Gets the raw message. |
| [Twig_Error::getTemplateLine](#Twig_ErrorgetTemplateLine) | Gets the template line where the error occurred. |
| [Twig_Error::setTemplateLine](#Twig_ErrorsetTemplateLine) | Sets the template line where the error occurred. |
| [Twig_Error::getSourceContext](#Twig_ErrorgetSourceContext) | Gets the source context of the Twig template where the error occurred. |
| [Twig_Error::setSourceContext](#Twig_ErrorsetSourceContext) | Sets the source context of the Twig template where the error occurred. |
| [Twig_Error::guess](#Twig_Errorguess) |  |
| [Twig_Error::appendMessage](#Twig_ErrorappendMessage) |  |
| [**Twig_Error_Loader**](#Twig_Error_Loader) | Exception thrown when an error occurs during template loading. |
| [Twig_Error_Loader::__construct](#Twig_Error_Loader__construct) | Constructor. |
| [**Twig_Error_Runtime**](#Twig_Error_Runtime) | Exception thrown when an error occurs at runtime. |
| [**Twig_Error_Syntax**](#Twig_Error_Syntax) | Exception thrown when a syntax error occurs during lexing or parsing of a template. |
| [Twig_Error_Syntax::addSuggestions](#Twig_Error_SyntaxaddSuggestions) | Tweaks the error message to include suggestions. |
| [**Twig_Extension_Core**](#Twig_Extension_Core) |  |
| [Twig_Extension_Core::setEscaper](#Twig_Extension_CoresetEscaper) | Defines a new escaper to be used via the escape filter. |
| [Twig_Extension_Core::getEscapers](#Twig_Extension_CoregetEscapers) | Gets all defined escapers. |
| [Twig_Extension_Core::setDateFormat](#Twig_Extension_CoresetDateFormat) | Sets the default format to be used by the date filter. |
| [Twig_Extension_Core::getDateFormat](#Twig_Extension_CoregetDateFormat) | Gets the default format to be used by the date filter. |
| [Twig_Extension_Core::setTimezone](#Twig_Extension_CoresetTimezone) | Sets the default timezone to be used by the date filter. |
| [Twig_Extension_Core::getTimezone](#Twig_Extension_CoregetTimezone) | Gets the default timezone to be used by the date filter. |
| [Twig_Extension_Core::setNumberFormat](#Twig_Extension_CoresetNumberFormat) | Sets the default format to be used by the number_format filter. |
| [Twig_Extension_Core::getNumberFormat](#Twig_Extension_CoregetNumberFormat) | Get the default format used by the number_format filter. |
| [Twig_Extension_Core::getTokenParsers](#Twig_Extension_CoregetTokenParsers) | Returns the token parser instances to add to the existing list. |
| [Twig_Extension_Core::getFilters](#Twig_Extension_CoregetFilters) | Returns a list of filters to add to the existing list. |
| [Twig_Extension_Core::getFunctions](#Twig_Extension_CoregetFunctions) | Returns a list of functions to add to the existing list. |
| [Twig_Extension_Core::getTests](#Twig_Extension_CoregetTests) | Returns a list of tests to add to the existing list. |
| [Twig_Extension_Core::getOperators](#Twig_Extension_CoregetOperators) | Returns a list of operators to add to the existing list. |
| [**Twig_Extension_Debug**](#Twig_Extension_Debug) |  |
| [Twig_Extension_Debug::getFunctions](#Twig_Extension_DebuggetFunctions) | Returns a list of functions to add to the existing list. |
| [**Twig_Extension_Escaper**](#Twig_Extension_Escaper) |  |
| [Twig_Extension_Escaper::__construct](#Twig_Extension_Escaper__construct) |  |
| [Twig_Extension_Escaper::getTokenParsers](#Twig_Extension_EscapergetTokenParsers) | Returns the token parser instances to add to the existing list. |
| [Twig_Extension_Escaper::getNodeVisitors](#Twig_Extension_EscapergetNodeVisitors) | Returns the node visitor instances to add to the existing list. |
| [Twig_Extension_Escaper::getFilters](#Twig_Extension_EscapergetFilters) | Returns a list of filters to add to the existing list. |
| [Twig_Extension_Escaper::setDefaultStrategy](#Twig_Extension_EscapersetDefaultStrategy) | Sets the default strategy to use when not defined by the user. |
| [Twig_Extension_Escaper::getDefaultStrategy](#Twig_Extension_EscapergetDefaultStrategy) | Gets the default strategy to use when not defined by the user. |
| [**Twig_Extension_Optimizer**](#Twig_Extension_Optimizer) |  |
| [Twig_Extension_Optimizer::__construct](#Twig_Extension_Optimizer__construct) |  |
| [Twig_Extension_Optimizer::getNodeVisitors](#Twig_Extension_OptimizergetNodeVisitors) | Returns the node visitor instances to add to the existing list. |
| [**Twig_Extension_Profiler**](#Twig_Extension_Profiler) |  |
| [Twig_Extension_Profiler::__construct](#Twig_Extension_Profiler__construct) |  |
| [Twig_Extension_Profiler::enter](#Twig_Extension_Profilerenter) |  |
| [Twig_Extension_Profiler::leave](#Twig_Extension_Profilerleave) |  |
| [Twig_Extension_Profiler::getNodeVisitors](#Twig_Extension_ProfilergetNodeVisitors) | Returns the node visitor instances to add to the existing list. |
| [**Twig_Extension_Sandbox**](#Twig_Extension_Sandbox) |  |
| [Twig_Extension_Sandbox::__construct](#Twig_Extension_Sandbox__construct) |  |
| [Twig_Extension_Sandbox::getTokenParsers](#Twig_Extension_SandboxgetTokenParsers) | Returns the token parser instances to add to the existing list. |
| [Twig_Extension_Sandbox::getNodeVisitors](#Twig_Extension_SandboxgetNodeVisitors) | Returns the node visitor instances to add to the existing list. |
| [Twig_Extension_Sandbox::enableSandbox](#Twig_Extension_SandboxenableSandbox) |  |
| [Twig_Extension_Sandbox::disableSandbox](#Twig_Extension_SandboxdisableSandbox) |  |
| [Twig_Extension_Sandbox::isSandboxed](#Twig_Extension_SandboxisSandboxed) |  |
| [Twig_Extension_Sandbox::isSandboxedGlobally](#Twig_Extension_SandboxisSandboxedGlobally) |  |
| [Twig_Extension_Sandbox::setSecurityPolicy](#Twig_Extension_SandboxsetSecurityPolicy) |  |
| [Twig_Extension_Sandbox::getSecurityPolicy](#Twig_Extension_SandboxgetSecurityPolicy) |  |
| [Twig_Extension_Sandbox::checkSecurity](#Twig_Extension_SandboxcheckSecurity) |  |
| [Twig_Extension_Sandbox::checkMethodAllowed](#Twig_Extension_SandboxcheckMethodAllowed) |  |
| [Twig_Extension_Sandbox::checkPropertyAllowed](#Twig_Extension_SandboxcheckPropertyAllowed) |  |
| [Twig_Extension_Sandbox::ensureToStringAllowed](#Twig_Extension_SandboxensureToStringAllowed) |  |
| [**Twig_Extension_StringLoader**](#Twig_Extension_StringLoader) |  |
| [Twig_Extension_StringLoader::getFunctions](#Twig_Extension_StringLoadergetFunctions) | Returns a list of functions to add to the existing list. |
| [**Twig_FactoryRuntimeLoader**](#Twig_FactoryRuntimeLoader) | Lazy loads the runtime implementations for a Twig element. |
| [Twig_FactoryRuntimeLoader::__construct](#Twig_FactoryRuntimeLoader__construct) |  |
| [Twig_FactoryRuntimeLoader::load](#Twig_FactoryRuntimeLoaderload) | Creates the runtime implementation of a Twig element (filter/function/test). |
| [**Twig_FileExtensionEscapingStrategy**](#Twig_FileExtensionEscapingStrategy) | Default autoescaping strategy based on file names. |
| [Twig_FileExtensionEscapingStrategy::guess](#Twig_FileExtensionEscapingStrategyguess) | Guesses the best autoescaping strategy based on the file name. |
| [**Twig_Filter**](#Twig_Filter) | Represents a template filter. |
| [Twig_Filter::__construct](#Twig_Filter__construct) | Creates a template filter. |
| [Twig_Filter::getName](#Twig_FiltergetName) |  |
| [Twig_Filter::getCallable](#Twig_FiltergetCallable) | Returns the callable to execute for this filter. |
| [Twig_Filter::getNodeClass](#Twig_FiltergetNodeClass) |  |
| [Twig_Filter::setArguments](#Twig_FiltersetArguments) |  |
| [Twig_Filter::getArguments](#Twig_FiltergetArguments) |  |
| [Twig_Filter::needsEnvironment](#Twig_FilterneedsEnvironment) |  |
| [Twig_Filter::needsContext](#Twig_FilterneedsContext) |  |
| [Twig_Filter::getSafe](#Twig_FiltergetSafe) |  |
| [Twig_Filter::getPreservesSafety](#Twig_FiltergetPreservesSafety) |  |
| [Twig_Filter::getPreEscape](#Twig_FiltergetPreEscape) |  |
| [Twig_Filter::isVariadic](#Twig_FilterisVariadic) |  |
| [Twig_Filter::isDeprecated](#Twig_FilterisDeprecated) |  |
| [Twig_Filter::getDeprecatedVersion](#Twig_FiltergetDeprecatedVersion) |  |
| [Twig_Filter::getAlternative](#Twig_FiltergetAlternative) |  |
| [**Twig_Function**](#Twig_Function) | Represents a template function. |
| [Twig_Function::__construct](#Twig_Function__construct) | Creates a template function. |
| [Twig_Function::getName](#Twig_FunctiongetName) |  |
| [Twig_Function::getCallable](#Twig_FunctiongetCallable) | Returns the callable to execute for this function. |
| [Twig_Function::getNodeClass](#Twig_FunctiongetNodeClass) |  |
| [Twig_Function::setArguments](#Twig_FunctionsetArguments) |  |
| [Twig_Function::getArguments](#Twig_FunctiongetArguments) |  |
| [Twig_Function::needsEnvironment](#Twig_FunctionneedsEnvironment) |  |
| [Twig_Function::needsContext](#Twig_FunctionneedsContext) |  |
| [Twig_Function::getSafe](#Twig_FunctiongetSafe) |  |
| [Twig_Function::isVariadic](#Twig_FunctionisVariadic) |  |
| [Twig_Function::isDeprecated](#Twig_FunctionisDeprecated) |  |
| [Twig_Function::getDeprecatedVersion](#Twig_FunctiongetDeprecatedVersion) |  |
| [Twig_Function::getAlternative](#Twig_FunctiongetAlternative) |  |
| [**Twig_Lexer**](#Twig_Lexer) | Lexes a template string. |
| [Twig_Lexer::__construct](#Twig_Lexer__construct) |  |
| [Twig_Lexer::tokenize](#Twig_Lexertokenize) |  |
| [**Twig_Loader_Array**](#Twig_Loader_Array) | Loads a template from an array. |
| [Twig_Loader_Array::__construct](#Twig_Loader_Array__construct) |  |
| [Twig_Loader_Array::setTemplate](#Twig_Loader_ArraysetTemplate) | Adds or overrides a template. |
| [Twig_Loader_Array::getSourceContext](#Twig_Loader_ArraygetSourceContext) | Returns the source context for a given template logical name. |
| [Twig_Loader_Array::exists](#Twig_Loader_Arrayexists) | Check if we have the source code of a template, given its name. |
| [Twig_Loader_Array::getCacheKey](#Twig_Loader_ArraygetCacheKey) | Gets the cache key to use for the cache for a given template name. |
| [Twig_Loader_Array::isFresh](#Twig_Loader_ArrayisFresh) | Returns true if the template is still fresh. |
| [**Twig_Loader_Chain**](#Twig_Loader_Chain) | Loads templates from other loaders. |
| [Twig_Loader_Chain::__construct](#Twig_Loader_Chain__construct) |  |
| [Twig_Loader_Chain::addLoader](#Twig_Loader_ChainaddLoader) |  |
| [Twig_Loader_Chain::getSourceContext](#Twig_Loader_ChaingetSourceContext) | Returns the source context for a given template logical name. |
| [Twig_Loader_Chain::exists](#Twig_Loader_Chainexists) | Check if we have the source code of a template, given its name. |
| [Twig_Loader_Chain::getCacheKey](#Twig_Loader_ChaingetCacheKey) | Gets the cache key to use for the cache for a given template name. |
| [Twig_Loader_Chain::isFresh](#Twig_Loader_ChainisFresh) | Returns true if the template is still fresh. |
| [**Twig_Loader_Filesystem**](#Twig_Loader_Filesystem) | Loads template from the filesystem. |
| [Twig_Loader_Filesystem::__construct](#Twig_Loader_Filesystem__construct) |  |
| [Twig_Loader_Filesystem::getPaths](#Twig_Loader_FilesystemgetPaths) | Returns the paths to the templates. |
| [Twig_Loader_Filesystem::getNamespaces](#Twig_Loader_FilesystemgetNamespaces) | Returns the path namespaces. |
| [Twig_Loader_Filesystem::setPaths](#Twig_Loader_FilesystemsetPaths) | Sets the paths where templates are stored. |
| [Twig_Loader_Filesystem::addPath](#Twig_Loader_FilesystemaddPath) | Adds a path where templates are stored. |
| [Twig_Loader_Filesystem::prependPath](#Twig_Loader_FilesystemprependPath) | Prepends a path where templates are stored. |
| [Twig_Loader_Filesystem::getSourceContext](#Twig_Loader_FilesystemgetSourceContext) | Returns the source context for a given template logical name. |
| [Twig_Loader_Filesystem::getCacheKey](#Twig_Loader_FilesystemgetCacheKey) | Gets the cache key to use for the cache for a given template name. |
| [Twig_Loader_Filesystem::exists](#Twig_Loader_Filesystemexists) | Check if we have the source code of a template, given its name. |
| [Twig_Loader_Filesystem::isFresh](#Twig_Loader_FilesystemisFresh) | Returns true if the template is still fresh. |
| [**Twig_Markup**](#Twig_Markup) | Marks a content as safe. |
| [Twig_Markup::__construct](#Twig_Markup__construct) |  |
| [Twig_Markup::__toString](#Twig_Markup__toString) |  |
| [Twig_Markup::count](#Twig_Markupcount) |  |
| [Twig_Markup::jsonSerialize](#Twig_MarkupjsonSerialize) |  |
| [**Twig_Node**](#Twig_Node) | Represents a node in the AST. |
| [Twig_Node::__construct](#Twig_Node__construct) | Constructor. |
| [Twig_Node::__toString](#Twig_Node__toString) |  |
| [Twig_Node::compile](#Twig_Nodecompile) |  |
| [Twig_Node::getTemplateLine](#Twig_NodegetTemplateLine) |  |
| [Twig_Node::getNodeTag](#Twig_NodegetNodeTag) |  |
| [Twig_Node::hasAttribute](#Twig_NodehasAttribute) |  |
| [Twig_Node::getAttribute](#Twig_NodegetAttribute) |  |
| [Twig_Node::setAttribute](#Twig_NodesetAttribute) |  |
| [Twig_Node::removeAttribute](#Twig_NoderemoveAttribute) |  |
| [Twig_Node::hasNode](#Twig_NodehasNode) |  |
| [Twig_Node::getNode](#Twig_NodegetNode) |  |
| [Twig_Node::setNode](#Twig_NodesetNode) |  |
| [Twig_Node::removeNode](#Twig_NoderemoveNode) |  |
| [Twig_Node::count](#Twig_Nodecount) |  |
| [Twig_Node::getIterator](#Twig_NodegetIterator) |  |
| [Twig_Node::setTemplateName](#Twig_NodesetTemplateName) |  |
| [Twig_Node::getTemplateName](#Twig_NodegetTemplateName) |  |
| [**Twig_Node_AutoEscape**](#Twig_Node_AutoEscape) | Represents an autoescape node. |
| [Twig_Node_AutoEscape::__construct](#Twig_Node_AutoEscape__construct) | Constructor. |
| [Twig_Node_AutoEscape::compile](#Twig_Node_AutoEscapecompile) |  |
| [**Twig_Node_Block**](#Twig_Node_Block) | Represents a block node. |
| [Twig_Node_Block::__construct](#Twig_Node_Block__construct) | Constructor. |
| [Twig_Node_Block::compile](#Twig_Node_Blockcompile) |  |
| [**Twig_Node_BlockReference**](#Twig_Node_BlockReference) | Represents a block call node. |
| [Twig_Node_BlockReference::__construct](#Twig_Node_BlockReference__construct) | Constructor. |
| [Twig_Node_BlockReference::compile](#Twig_Node_BlockReferencecompile) |  |
| [**Twig_Node_Body**](#Twig_Node_Body) | Represents a body node. |
| [**Twig_Node_CheckSecurity**](#Twig_Node_CheckSecurity) | Represents a node in the AST. |
| [Twig_Node_CheckSecurity::__construct](#Twig_Node_CheckSecurity__construct) | Constructor. |
| [Twig_Node_CheckSecurity::compile](#Twig_Node_CheckSecuritycompile) |  |
| [**Twig_Node_Do**](#Twig_Node_Do) | Represents a do node. |
| [Twig_Node_Do::__construct](#Twig_Node_Do__construct) | Constructor. |
| [Twig_Node_Do::compile](#Twig_Node_Docompile) |  |
| [**Twig_Node_Embed**](#Twig_Node_Embed) | Represents an embed node. |
| [Twig_Node_Embed::__construct](#Twig_Node_Embed__construct) | Constructor. |
| [**Twig_Node_Expression_Array**](#Twig_Node_Expression_Array) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Array::__construct](#Twig_Node_Expression_Array__construct) |  |
| [Twig_Node_Expression_Array::getKeyValuePairs](#Twig_Node_Expression_ArraygetKeyValuePairs) |  |
| [Twig_Node_Expression_Array::hasElement](#Twig_Node_Expression_ArrayhasElement) |  |
| [Twig_Node_Expression_Array::addElement](#Twig_Node_Expression_ArrayaddElement) |  |
| [Twig_Node_Expression_Array::compile](#Twig_Node_Expression_Arraycompile) |  |
| [**Twig_Node_Expression_AssignName**](#Twig_Node_Expression_AssignName) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_AssignName::compile](#Twig_Node_Expression_AssignNamecompile) |  |
| [**Twig_Node_Expression_Binary_Add**](#Twig_Node_Expression_Binary_Add) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_Add::operator](#Twig_Node_Expression_Binary_Addoperator) |  |
| [**Twig_Node_Expression_Binary_And**](#Twig_Node_Expression_Binary_And) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_And::operator](#Twig_Node_Expression_Binary_Andoperator) |  |
| [**Twig_Node_Expression_Binary_BitwiseAnd**](#Twig_Node_Expression_Binary_BitwiseAnd) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_BitwiseAnd::operator](#Twig_Node_Expression_Binary_BitwiseAndoperator) |  |
| [**Twig_Node_Expression_Binary_BitwiseOr**](#Twig_Node_Expression_Binary_BitwiseOr) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_BitwiseOr::operator](#Twig_Node_Expression_Binary_BitwiseOroperator) |  |
| [**Twig_Node_Expression_Binary_BitwiseXor**](#Twig_Node_Expression_Binary_BitwiseXor) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_BitwiseXor::operator](#Twig_Node_Expression_Binary_BitwiseXoroperator) |  |
| [**Twig_Node_Expression_Binary_Concat**](#Twig_Node_Expression_Binary_Concat) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_Concat::operator](#Twig_Node_Expression_Binary_Concatoperator) |  |
| [**Twig_Node_Expression_Binary_Div**](#Twig_Node_Expression_Binary_Div) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_Div::operator](#Twig_Node_Expression_Binary_Divoperator) |  |
| [**Twig_Node_Expression_Binary_EndsWith**](#Twig_Node_Expression_Binary_EndsWith) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_EndsWith::compile](#Twig_Node_Expression_Binary_EndsWithcompile) |  |
| [Twig_Node_Expression_Binary_EndsWith::operator](#Twig_Node_Expression_Binary_EndsWithoperator) |  |
| [**Twig_Node_Expression_Binary_Equal**](#Twig_Node_Expression_Binary_Equal) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_Equal::operator](#Twig_Node_Expression_Binary_Equaloperator) |  |
| [**Twig_Node_Expression_Binary_FloorDiv**](#Twig_Node_Expression_Binary_FloorDiv) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_FloorDiv::compile](#Twig_Node_Expression_Binary_FloorDivcompile) |  |
| [Twig_Node_Expression_Binary_FloorDiv::operator](#Twig_Node_Expression_Binary_FloorDivoperator) |  |
| [**Twig_Node_Expression_Binary_Greater**](#Twig_Node_Expression_Binary_Greater) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_Greater::operator](#Twig_Node_Expression_Binary_Greateroperator) |  |
| [**Twig_Node_Expression_Binary_GreaterEqual**](#Twig_Node_Expression_Binary_GreaterEqual) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_GreaterEqual::operator](#Twig_Node_Expression_Binary_GreaterEqualoperator) |  |
| [**Twig_Node_Expression_Binary_In**](#Twig_Node_Expression_Binary_In) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_In::compile](#Twig_Node_Expression_Binary_Incompile) |  |
| [Twig_Node_Expression_Binary_In::operator](#Twig_Node_Expression_Binary_Inoperator) |  |
| [**Twig_Node_Expression_Binary_Less**](#Twig_Node_Expression_Binary_Less) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_Less::operator](#Twig_Node_Expression_Binary_Lessoperator) |  |
| [**Twig_Node_Expression_Binary_LessEqual**](#Twig_Node_Expression_Binary_LessEqual) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_LessEqual::operator](#Twig_Node_Expression_Binary_LessEqualoperator) |  |
| [**Twig_Node_Expression_Binary_Matches**](#Twig_Node_Expression_Binary_Matches) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_Matches::compile](#Twig_Node_Expression_Binary_Matchescompile) |  |
| [Twig_Node_Expression_Binary_Matches::operator](#Twig_Node_Expression_Binary_Matchesoperator) |  |
| [**Twig_Node_Expression_Binary_Mod**](#Twig_Node_Expression_Binary_Mod) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_Mod::operator](#Twig_Node_Expression_Binary_Modoperator) |  |
| [**Twig_Node_Expression_Binary_Mul**](#Twig_Node_Expression_Binary_Mul) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_Mul::operator](#Twig_Node_Expression_Binary_Muloperator) |  |
| [**Twig_Node_Expression_Binary_NotEqual**](#Twig_Node_Expression_Binary_NotEqual) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_NotEqual::operator](#Twig_Node_Expression_Binary_NotEqualoperator) |  |
| [**Twig_Node_Expression_Binary_NotIn**](#Twig_Node_Expression_Binary_NotIn) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_NotIn::compile](#Twig_Node_Expression_Binary_NotIncompile) |  |
| [Twig_Node_Expression_Binary_NotIn::operator](#Twig_Node_Expression_Binary_NotInoperator) |  |
| [**Twig_Node_Expression_Binary_Or**](#Twig_Node_Expression_Binary_Or) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_Or::operator](#Twig_Node_Expression_Binary_Oroperator) |  |
| [**Twig_Node_Expression_Binary_Power**](#Twig_Node_Expression_Binary_Power) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_Power::operator](#Twig_Node_Expression_Binary_Poweroperator) |  |
| [**Twig_Node_Expression_Binary_Range**](#Twig_Node_Expression_Binary_Range) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_Range::compile](#Twig_Node_Expression_Binary_Rangecompile) |  |
| [Twig_Node_Expression_Binary_Range::operator](#Twig_Node_Expression_Binary_Rangeoperator) |  |
| [**Twig_Node_Expression_Binary_StartsWith**](#Twig_Node_Expression_Binary_StartsWith) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_StartsWith::compile](#Twig_Node_Expression_Binary_StartsWithcompile) |  |
| [Twig_Node_Expression_Binary_StartsWith::operator](#Twig_Node_Expression_Binary_StartsWithoperator) |  |
| [**Twig_Node_Expression_Binary_Sub**](#Twig_Node_Expression_Binary_Sub) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Binary_Sub::operator](#Twig_Node_Expression_Binary_Suboperator) |  |
| [**Twig_Node_Expression_BlockReference**](#Twig_Node_Expression_BlockReference) | Represents a block call node. |
| [Twig_Node_Expression_BlockReference::__construct](#Twig_Node_Expression_BlockReference__construct) |  |
| [Twig_Node_Expression_BlockReference::compile](#Twig_Node_Expression_BlockReferencecompile) |  |
| [**Twig_Node_Expression_Conditional**](#Twig_Node_Expression_Conditional) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Conditional::__construct](#Twig_Node_Expression_Conditional__construct) |  |
| [Twig_Node_Expression_Conditional::compile](#Twig_Node_Expression_Conditionalcompile) |  |
| [**Twig_Node_Expression_Constant**](#Twig_Node_Expression_Constant) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Constant::__construct](#Twig_Node_Expression_Constant__construct) |  |
| [Twig_Node_Expression_Constant::compile](#Twig_Node_Expression_Constantcompile) |  |
| [**Twig_Node_Expression_Filter**](#Twig_Node_Expression_Filter) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Filter::__construct](#Twig_Node_Expression_Filter__construct) |  |
| [Twig_Node_Expression_Filter::compile](#Twig_Node_Expression_Filtercompile) |  |
| [**Twig_Node_Expression_Filter_Default**](#Twig_Node_Expression_Filter_Default) | Returns the value or the default value when it is undefined or empty. |
| [Twig_Node_Expression_Filter_Default::__construct](#Twig_Node_Expression_Filter_Default__construct) |  |
| [Twig_Node_Expression_Filter_Default::compile](#Twig_Node_Expression_Filter_Defaultcompile) |  |
| [**Twig_Node_Expression_Function**](#Twig_Node_Expression_Function) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Function::__construct](#Twig_Node_Expression_Function__construct) |  |
| [Twig_Node_Expression_Function::compile](#Twig_Node_Expression_Functioncompile) |  |
| [**Twig_Node_Expression_GetAttr**](#Twig_Node_Expression_GetAttr) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_GetAttr::__construct](#Twig_Node_Expression_GetAttr__construct) |  |
| [Twig_Node_Expression_GetAttr::compile](#Twig_Node_Expression_GetAttrcompile) |  |
| [**Twig_Node_Expression_MethodCall**](#Twig_Node_Expression_MethodCall) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_MethodCall::__construct](#Twig_Node_Expression_MethodCall__construct) |  |
| [Twig_Node_Expression_MethodCall::compile](#Twig_Node_Expression_MethodCallcompile) |  |
| [**Twig_Node_Expression_Name**](#Twig_Node_Expression_Name) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Name::__construct](#Twig_Node_Expression_Name__construct) |  |
| [Twig_Node_Expression_Name::compile](#Twig_Node_Expression_Namecompile) |  |
| [Twig_Node_Expression_Name::isSpecial](#Twig_Node_Expression_NameisSpecial) |  |
| [Twig_Node_Expression_Name::isSimple](#Twig_Node_Expression_NameisSimple) |  |
| [**Twig_Node_Expression_NullCoalesce**](#Twig_Node_Expression_NullCoalesce) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_NullCoalesce::__construct](#Twig_Node_Expression_NullCoalesce__construct) |  |
| [Twig_Node_Expression_NullCoalesce::compile](#Twig_Node_Expression_NullCoalescecompile) |  |
| [**Twig_Node_Expression_Parent**](#Twig_Node_Expression_Parent) | Represents a parent node. |
| [Twig_Node_Expression_Parent::__construct](#Twig_Node_Expression_Parent__construct) |  |
| [Twig_Node_Expression_Parent::compile](#Twig_Node_Expression_Parentcompile) |  |
| [**Twig_Node_Expression_TempName**](#Twig_Node_Expression_TempName) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_TempName::__construct](#Twig_Node_Expression_TempName__construct) |  |
| [Twig_Node_Expression_TempName::compile](#Twig_Node_Expression_TempNamecompile) |  |
| [**Twig_Node_Expression_Test**](#Twig_Node_Expression_Test) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Test::__construct](#Twig_Node_Expression_Test__construct) |  |
| [Twig_Node_Expression_Test::compile](#Twig_Node_Expression_Testcompile) |  |
| [**Twig_Node_Expression_Test_Constant**](#Twig_Node_Expression_Test_Constant) | Checks if a variable is the exact same value as a constant. |
| [Twig_Node_Expression_Test_Constant::compile](#Twig_Node_Expression_Test_Constantcompile) |  |
| [**Twig_Node_Expression_Test_Defined**](#Twig_Node_Expression_Test_Defined) | Checks if a variable is defined in the current context. |
| [Twig_Node_Expression_Test_Defined::__construct](#Twig_Node_Expression_Test_Defined__construct) |  |
| [Twig_Node_Expression_Test_Defined::compile](#Twig_Node_Expression_Test_Definedcompile) |  |
| [**Twig_Node_Expression_Test_Divisibleby**](#Twig_Node_Expression_Test_Divisibleby) | Checks if a variable is divisible by a number. |
| [Twig_Node_Expression_Test_Divisibleby::compile](#Twig_Node_Expression_Test_Divisiblebycompile) |  |
| [**Twig_Node_Expression_Test_Even**](#Twig_Node_Expression_Test_Even) | Checks if a number is even. |
| [Twig_Node_Expression_Test_Even::compile](#Twig_Node_Expression_Test_Evencompile) |  |
| [**Twig_Node_Expression_Test_Null**](#Twig_Node_Expression_Test_Null) | Checks that a variable is null. |
| [Twig_Node_Expression_Test_Null::compile](#Twig_Node_Expression_Test_Nullcompile) |  |
| [**Twig_Node_Expression_Test_Odd**](#Twig_Node_Expression_Test_Odd) | Checks if a number is odd. |
| [Twig_Node_Expression_Test_Odd::compile](#Twig_Node_Expression_Test_Oddcompile) |  |
| [**Twig_Node_Expression_Test_Sameas**](#Twig_Node_Expression_Test_Sameas) | Checks if a variable is the same as another one (=== in PHP). |
| [Twig_Node_Expression_Test_Sameas::compile](#Twig_Node_Expression_Test_Sameascompile) |  |
| [**Twig_Node_Expression_Unary_Neg**](#Twig_Node_Expression_Unary_Neg) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Unary_Neg::operator](#Twig_Node_Expression_Unary_Negoperator) |  |
| [**Twig_Node_Expression_Unary_Not**](#Twig_Node_Expression_Unary_Not) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Unary_Not::operator](#Twig_Node_Expression_Unary_Notoperator) |  |
| [**Twig_Node_Expression_Unary_Pos**](#Twig_Node_Expression_Unary_Pos) | Abstract class for all nodes that represents an expression. |
| [Twig_Node_Expression_Unary_Pos::operator](#Twig_Node_Expression_Unary_Posoperator) |  |
| [**Twig_Node_Flush**](#Twig_Node_Flush) | Represents a flush node. |
| [Twig_Node_Flush::__construct](#Twig_Node_Flush__construct) | Constructor. |
| [Twig_Node_Flush::compile](#Twig_Node_Flushcompile) |  |
| [**Twig_Node_For**](#Twig_Node_For) | Represents a for node. |
| [Twig_Node_For::__construct](#Twig_Node_For__construct) | Constructor. |
| [Twig_Node_For::compile](#Twig_Node_Forcompile) |  |
| [**Twig_Node_ForLoop**](#Twig_Node_ForLoop) | Internal node used by the for node. |
| [Twig_Node_ForLoop::__construct](#Twig_Node_ForLoop__construct) | Constructor. |
| [Twig_Node_ForLoop::compile](#Twig_Node_ForLoopcompile) |  |
| [**Twig_Node_If**](#Twig_Node_If) | Represents an if node. |
| [Twig_Node_If::__construct](#Twig_Node_If__construct) | Constructor. |
| [Twig_Node_If::compile](#Twig_Node_Ifcompile) |  |
| [**Twig_Node_Import**](#Twig_Node_Import) | Represents an import node. |
| [Twig_Node_Import::__construct](#Twig_Node_Import__construct) | Constructor. |
| [Twig_Node_Import::compile](#Twig_Node_Importcompile) |  |
| [**Twig_Node_Include**](#Twig_Node_Include) | Represents an include node. |
| [Twig_Node_Include::__construct](#Twig_Node_Include__construct) | Constructor. |
| [Twig_Node_Include::compile](#Twig_Node_Includecompile) |  |
| [**Twig_Node_Macro**](#Twig_Node_Macro) | Represents a macro node. |
| [Twig_Node_Macro::__construct](#Twig_Node_Macro__construct) | Constructor. |
| [Twig_Node_Macro::compile](#Twig_Node_Macrocompile) |  |
| [**Twig_Node_Module**](#Twig_Node_Module) | Represents a module node. |
| [Twig_Node_Module::__construct](#Twig_Node_Module__construct) | Constructor. |
| [Twig_Node_Module::setIndex](#Twig_Node_ModulesetIndex) |  |
| [Twig_Node_Module::compile](#Twig_Node_Modulecompile) |  |
| [**Twig_Node_Print**](#Twig_Node_Print) | Represents a node that outputs an expression. |
| [Twig_Node_Print::__construct](#Twig_Node_Print__construct) | Constructor. |
| [Twig_Node_Print::compile](#Twig_Node_Printcompile) |  |
| [**Twig_Node_Sandbox**](#Twig_Node_Sandbox) | Represents a sandbox node. |
| [Twig_Node_Sandbox::__construct](#Twig_Node_Sandbox__construct) | Constructor. |
| [Twig_Node_Sandbox::compile](#Twig_Node_Sandboxcompile) |  |
| [**Twig_Node_SandboxedPrint**](#Twig_Node_SandboxedPrint) | Twig_Node_SandboxedPrint adds a check for the __toString() methodwhen the variable is an object and the sandbox is activated. |
| [Twig_Node_SandboxedPrint::compile](#Twig_Node_SandboxedPrintcompile) |  |
| [**Twig_Node_Set**](#Twig_Node_Set) | Represents a set node. |
| [Twig_Node_Set::__construct](#Twig_Node_Set__construct) | Constructor. |
| [Twig_Node_Set::compile](#Twig_Node_Setcompile) |  |
| [**Twig_Node_Spaceless**](#Twig_Node_Spaceless) | Represents a spaceless node. |
| [Twig_Node_Spaceless::__construct](#Twig_Node_Spaceless__construct) | Constructor. |
| [Twig_Node_Spaceless::compile](#Twig_Node_Spacelesscompile) |  |
| [**Twig_Node_Text**](#Twig_Node_Text) | Represents a text node. |
| [Twig_Node_Text::__construct](#Twig_Node_Text__construct) | Constructor. |
| [Twig_Node_Text::compile](#Twig_Node_Textcompile) |  |
| [**Twig_Node_With**](#Twig_Node_With) | Represents a nested &quot;with&quot; scope. |
| [Twig_Node_With::__construct](#Twig_Node_With__construct) | Constructor. |
| [Twig_Node_With::compile](#Twig_Node_Withcompile) |  |
| [**Twig_NodeTraverser**](#Twig_NodeTraverser) | Twig_NodeTraverser is a node traverser. |
| [Twig_NodeTraverser::__construct](#Twig_NodeTraverser__construct) |  |
| [Twig_NodeTraverser::addVisitor](#Twig_NodeTraverseraddVisitor) |  |
| [Twig_NodeTraverser::traverse](#Twig_NodeTraversertraverse) | Traverses a node and calls the registered visitors. |
| [**Twig_NodeVisitor_Escaper**](#Twig_NodeVisitor_Escaper) | Twig_NodeVisitor_Escaper implements output escaping. |
| [Twig_NodeVisitor_Escaper::__construct](#Twig_NodeVisitor_Escaper__construct) |  |
| [Twig_NodeVisitor_Escaper::getPriority](#Twig_NodeVisitor_EscapergetPriority) |  |
| [**Twig_NodeVisitor_Optimizer**](#Twig_NodeVisitor_Optimizer) | Twig_NodeVisitor_Optimizer tries to optimizes the AST. |
| [Twig_NodeVisitor_Optimizer::__construct](#Twig_NodeVisitor_Optimizer__construct) |  |
| [Twig_NodeVisitor_Optimizer::getPriority](#Twig_NodeVisitor_OptimizergetPriority) |  |
| [**Twig_NodeVisitor_SafeAnalysis**](#Twig_NodeVisitor_SafeAnalysis) | Twig_BaseNodeVisitor can be used to make node visitors compatible with Twig 1.x and 2.x. |
| [Twig_NodeVisitor_SafeAnalysis::setSafeVars](#Twig_NodeVisitor_SafeAnalysissetSafeVars) |  |
| [Twig_NodeVisitor_SafeAnalysis::getSafe](#Twig_NodeVisitor_SafeAnalysisgetSafe) |  |
| [Twig_NodeVisitor_SafeAnalysis::getPriority](#Twig_NodeVisitor_SafeAnalysisgetPriority) |  |
| [**Twig_NodeVisitor_Sandbox**](#Twig_NodeVisitor_Sandbox) | Twig_NodeVisitor_Sandbox implements sandboxing. |
| [Twig_NodeVisitor_Sandbox::getPriority](#Twig_NodeVisitor_SandboxgetPriority) |  |
| [**Twig_Parser**](#Twig_Parser) | Default parser implementation. |
| [Twig_Parser::__construct](#Twig_Parser__construct) |  |
| [Twig_Parser::getVarName](#Twig_ParsergetVarName) |  |
| [Twig_Parser::parse](#Twig_Parserparse) |  |
| [Twig_Parser::subparse](#Twig_Parsersubparse) |  |
| [Twig_Parser::getBlockStack](#Twig_ParsergetBlockStack) |  |
| [Twig_Parser::peekBlockStack](#Twig_ParserpeekBlockStack) |  |
| [Twig_Parser::popBlockStack](#Twig_ParserpopBlockStack) |  |
| [Twig_Parser::pushBlockStack](#Twig_ParserpushBlockStack) |  |
| [Twig_Parser::hasBlock](#Twig_ParserhasBlock) |  |
| [Twig_Parser::getBlock](#Twig_ParsergetBlock) |  |
| [Twig_Parser::setBlock](#Twig_ParsersetBlock) |  |
| [Twig_Parser::hasMacro](#Twig_ParserhasMacro) |  |
| [Twig_Parser::setMacro](#Twig_ParsersetMacro) |  |
| [Twig_Parser::isReservedMacroName](#Twig_ParserisReservedMacroName) |  |
| [Twig_Parser::addTrait](#Twig_ParseraddTrait) |  |
| [Twig_Parser::hasTraits](#Twig_ParserhasTraits) |  |
| [Twig_Parser::embedTemplate](#Twig_ParserembedTemplate) |  |
| [Twig_Parser::addImportedSymbol](#Twig_ParseraddImportedSymbol) |  |
| [Twig_Parser::getImportedSymbol](#Twig_ParsergetImportedSymbol) |  |
| [Twig_Parser::isMainScope](#Twig_ParserisMainScope) |  |
| [Twig_Parser::pushLocalScope](#Twig_ParserpushLocalScope) |  |
| [Twig_Parser::popLocalScope](#Twig_ParserpopLocalScope) |  |
| [Twig_Parser::getExpressionParser](#Twig_ParsergetExpressionParser) |  |
| [Twig_Parser::getParent](#Twig_ParsergetParent) |  |
| [Twig_Parser::setParent](#Twig_ParsersetParent) |  |
| [Twig_Parser::getStream](#Twig_ParsergetStream) |  |
| [Twig_Parser::getCurrentToken](#Twig_ParsergetCurrentToken) |  |
| [**Twig_Profiler_Dumper_Blackfire**](#Twig_Profiler_Dumper_Blackfire) |  |
| [Twig_Profiler_Dumper_Blackfire::dump](#Twig_Profiler_Dumper_Blackfiredump) |  |
| [**Twig_Profiler_Dumper_Html**](#Twig_Profiler_Dumper_Html) |  |
| [Twig_Profiler_Dumper_Html::dump](#Twig_Profiler_Dumper_Htmldump) |  |
| [**Twig_Profiler_Dumper_Text**](#Twig_Profiler_Dumper_Text) |  |
| [Twig_Profiler_Dumper_Text::dump](#Twig_Profiler_Dumper_Textdump) |  |
| [**Twig_Profiler_Node_EnterProfile**](#Twig_Profiler_Node_EnterProfile) | Represents a profile enter node. |
| [Twig_Profiler_Node_EnterProfile::__construct](#Twig_Profiler_Node_EnterProfile__construct) | Constructor. |
| [Twig_Profiler_Node_EnterProfile::compile](#Twig_Profiler_Node_EnterProfilecompile) |  |
| [**Twig_Profiler_Node_LeaveProfile**](#Twig_Profiler_Node_LeaveProfile) | Represents a profile leave node. |
| [Twig_Profiler_Node_LeaveProfile::__construct](#Twig_Profiler_Node_LeaveProfile__construct) | Constructor. |
| [Twig_Profiler_Node_LeaveProfile::compile](#Twig_Profiler_Node_LeaveProfilecompile) |  |
| [**Twig_Profiler_NodeVisitor_Profiler**](#Twig_Profiler_NodeVisitor_Profiler) | Twig_BaseNodeVisitor can be used to make node visitors compatible with Twig 1.x and 2.x. |
| [Twig_Profiler_NodeVisitor_Profiler::__construct](#Twig_Profiler_NodeVisitor_Profiler__construct) |  |
| [Twig_Profiler_NodeVisitor_Profiler::getPriority](#Twig_Profiler_NodeVisitor_ProfilergetPriority) |  |
| [**Twig_Profiler_Profile**](#Twig_Profiler_Profile) |  |
| [Twig_Profiler_Profile::__construct](#Twig_Profiler_Profile__construct) |  |
| [Twig_Profiler_Profile::getTemplate](#Twig_Profiler_ProfilegetTemplate) |  |
| [Twig_Profiler_Profile::getType](#Twig_Profiler_ProfilegetType) |  |
| [Twig_Profiler_Profile::getName](#Twig_Profiler_ProfilegetName) |  |
| [Twig_Profiler_Profile::isRoot](#Twig_Profiler_ProfileisRoot) |  |
| [Twig_Profiler_Profile::isTemplate](#Twig_Profiler_ProfileisTemplate) |  |
| [Twig_Profiler_Profile::isBlock](#Twig_Profiler_ProfileisBlock) |  |
| [Twig_Profiler_Profile::isMacro](#Twig_Profiler_ProfileisMacro) |  |
| [Twig_Profiler_Profile::getProfiles](#Twig_Profiler_ProfilegetProfiles) |  |
| [Twig_Profiler_Profile::addProfile](#Twig_Profiler_ProfileaddProfile) |  |
| [Twig_Profiler_Profile::getDuration](#Twig_Profiler_ProfilegetDuration) | Returns the duration in microseconds. |
| [Twig_Profiler_Profile::getMemoryUsage](#Twig_Profiler_ProfilegetMemoryUsage) | Returns the memory usage in bytes. |
| [Twig_Profiler_Profile::getPeakMemoryUsage](#Twig_Profiler_ProfilegetPeakMemoryUsage) | Returns the peak memory usage in bytes. |
| [Twig_Profiler_Profile::enter](#Twig_Profiler_Profileenter) | Starts the profiling. |
| [Twig_Profiler_Profile::leave](#Twig_Profiler_Profileleave) | Stops the profiling. |
| [Twig_Profiler_Profile::getIterator](#Twig_Profiler_ProfilegetIterator) |  |
| [Twig_Profiler_Profile::serialize](#Twig_Profiler_Profileserialize) |  |
| [Twig_Profiler_Profile::unserialize](#Twig_Profiler_Profileunserialize) |  |
| [**Twig_Sandbox_SecurityError**](#Twig_Sandbox_SecurityError) | Exception thrown when a security error occurs at runtime. |
| [**Twig_Sandbox_SecurityNotAllowedFilterError**](#Twig_Sandbox_SecurityNotAllowedFilterError) | Exception thrown when a not allowed filter is used in a template. |
| [Twig_Sandbox_SecurityNotAllowedFilterError::__construct](#Twig_Sandbox_SecurityNotAllowedFilterError__construct) |  |
| [Twig_Sandbox_SecurityNotAllowedFilterError::getFilterName](#Twig_Sandbox_SecurityNotAllowedFilterErrorgetFilterName) |  |
| [**Twig_Sandbox_SecurityNotAllowedFunctionError**](#Twig_Sandbox_SecurityNotAllowedFunctionError) | Exception thrown when a not allowed function is used in a template. |
| [Twig_Sandbox_SecurityNotAllowedFunctionError::__construct](#Twig_Sandbox_SecurityNotAllowedFunctionError__construct) |  |
| [Twig_Sandbox_SecurityNotAllowedFunctionError::getFunctionName](#Twig_Sandbox_SecurityNotAllowedFunctionErrorgetFunctionName) |  |
| [**Twig_Sandbox_SecurityNotAllowedMethodError**](#Twig_Sandbox_SecurityNotAllowedMethodError) | Exception thrown when a not allowed class method is used in a template. |
| [Twig_Sandbox_SecurityNotAllowedMethodError::__construct](#Twig_Sandbox_SecurityNotAllowedMethodError__construct) |  |
| [Twig_Sandbox_SecurityNotAllowedMethodError::getClassName](#Twig_Sandbox_SecurityNotAllowedMethodErrorgetClassName) |  |
| [Twig_Sandbox_SecurityNotAllowedMethodError::getMethodName](#Twig_Sandbox_SecurityNotAllowedMethodErrorgetMethodName) |  |
| [**Twig_Sandbox_SecurityNotAllowedPropertyError**](#Twig_Sandbox_SecurityNotAllowedPropertyError) | Exception thrown when a not allowed class property is used in a template. |
| [Twig_Sandbox_SecurityNotAllowedPropertyError::__construct](#Twig_Sandbox_SecurityNotAllowedPropertyError__construct) |  |
| [Twig_Sandbox_SecurityNotAllowedPropertyError::getClassName](#Twig_Sandbox_SecurityNotAllowedPropertyErrorgetClassName) |  |
| [Twig_Sandbox_SecurityNotAllowedPropertyError::getPropertyName](#Twig_Sandbox_SecurityNotAllowedPropertyErrorgetPropertyName) |  |
| [**Twig_Sandbox_SecurityNotAllowedTagError**](#Twig_Sandbox_SecurityNotAllowedTagError) | Exception thrown when a not allowed tag is used in a template. |
| [Twig_Sandbox_SecurityNotAllowedTagError::__construct](#Twig_Sandbox_SecurityNotAllowedTagError__construct) |  |
| [Twig_Sandbox_SecurityNotAllowedTagError::getTagName](#Twig_Sandbox_SecurityNotAllowedTagErrorgetTagName) |  |
| [**Twig_Sandbox_SecurityPolicy**](#Twig_Sandbox_SecurityPolicy) | Represents a security policy which need to be enforced when sandbox mode is enabled. |
| [Twig_Sandbox_SecurityPolicy::__construct](#Twig_Sandbox_SecurityPolicy__construct) |  |
| [Twig_Sandbox_SecurityPolicy::setAllowedTags](#Twig_Sandbox_SecurityPolicysetAllowedTags) |  |
| [Twig_Sandbox_SecurityPolicy::setAllowedFilters](#Twig_Sandbox_SecurityPolicysetAllowedFilters) |  |
| [Twig_Sandbox_SecurityPolicy::setAllowedMethods](#Twig_Sandbox_SecurityPolicysetAllowedMethods) |  |
| [Twig_Sandbox_SecurityPolicy::setAllowedProperties](#Twig_Sandbox_SecurityPolicysetAllowedProperties) |  |
| [Twig_Sandbox_SecurityPolicy::setAllowedFunctions](#Twig_Sandbox_SecurityPolicysetAllowedFunctions) |  |
| [Twig_Sandbox_SecurityPolicy::checkSecurity](#Twig_Sandbox_SecurityPolicycheckSecurity) |  |
| [Twig_Sandbox_SecurityPolicy::checkMethodAllowed](#Twig_Sandbox_SecurityPolicycheckMethodAllowed) |  |
| [Twig_Sandbox_SecurityPolicy::checkPropertyAllowed](#Twig_Sandbox_SecurityPolicycheckPropertyAllowed) |  |
| [**Twig_SimpleFilter**](#Twig_SimpleFilter) | Empty class for Twig 1.x compatibility. |
| [**Twig_SimpleFunction**](#Twig_SimpleFunction) | Empty class for Twig 1.x compatibility. |
| [**Twig_SimpleTest**](#Twig_SimpleTest) | Empty class for Twig 1.x compatibility. |
| [**Twig_Source**](#Twig_Source) | Holds information about a non-compiled Twig template. |
| [Twig_Source::__construct](#Twig_Source__construct) |  |
| [Twig_Source::getCode](#Twig_SourcegetCode) |  |
| [Twig_Source::getName](#Twig_SourcegetName) |  |
| [Twig_Source::getPath](#Twig_SourcegetPath) |  |
| [**Twig_TemplateArrayAccessObject**](#Twig_TemplateArrayAccessObject) |  |
| [Twig_TemplateArrayAccessObject::offsetExists](#Twig_TemplateArrayAccessObjectoffsetExists) |  |
| [Twig_TemplateArrayAccessObject::offsetGet](#Twig_TemplateArrayAccessObjectoffsetGet) |  |
| [Twig_TemplateArrayAccessObject::offsetSet](#Twig_TemplateArrayAccessObjectoffsetSet) |  |
| [Twig_TemplateArrayAccessObject::offsetUnset](#Twig_TemplateArrayAccessObjectoffsetUnset) |  |
| [**Twig_TemplateMagicMethodExceptionObject**](#Twig_TemplateMagicMethodExceptionObject) |  |
| [Twig_TemplateMagicMethodExceptionObject::__call](#Twig_TemplateMagicMethodExceptionObject__call) |  |
| [**Twig_TemplateMagicMethodObject**](#Twig_TemplateMagicMethodObject) |  |
| [Twig_TemplateMagicMethodObject::__call](#Twig_TemplateMagicMethodObject__call) |  |
| [**Twig_TemplateMagicPropertyObject**](#Twig_TemplateMagicPropertyObject) |  |
| [Twig_TemplateMagicPropertyObject::__isset](#Twig_TemplateMagicPropertyObject__isset) |  |
| [Twig_TemplateMagicPropertyObject::__get](#Twig_TemplateMagicPropertyObject__get) |  |
| [**Twig_TemplateMagicPropertyObjectWithException**](#Twig_TemplateMagicPropertyObjectWithException) |  |
| [Twig_TemplateMagicPropertyObjectWithException::__isset](#Twig_TemplateMagicPropertyObjectWithException__isset) |  |
| [**Twig_TemplateMethodAndPropObject**](#Twig_TemplateMethodAndPropObject) |  |
| [Twig_TemplateMethodAndPropObject::getA](#Twig_TemplateMethodAndPropObjectgetA) |  |
| [Twig_TemplateMethodAndPropObject::getB](#Twig_TemplateMethodAndPropObjectgetB) |  |
| [**Twig_TemplateMethodObject**](#Twig_TemplateMethodObject) |  |
| [Twig_TemplateMethodObject::getDefined](#Twig_TemplateMethodObjectgetDefined) |  |
| [Twig_TemplateMethodObject::get1](#Twig_TemplateMethodObjectget1) |  |
| [Twig_TemplateMethodObject::get09](#Twig_TemplateMethodObjectget09) |  |
| [Twig_TemplateMethodObject::getZero](#Twig_TemplateMethodObjectgetZero) |  |
| [Twig_TemplateMethodObject::getNull](#Twig_TemplateMethodObjectgetNull) |  |
| [Twig_TemplateMethodObject::isBar](#Twig_TemplateMethodObjectisBar) |  |
| [Twig_TemplateMethodObject::hasFoo](#Twig_TemplateMethodObjecthasFoo) |  |
| [Twig_TemplateMethodObject::hasBaz](#Twig_TemplateMethodObjecthasBaz) |  |
| [Twig_TemplateMethodObject::isBaz](#Twig_TemplateMethodObjectisBaz) |  |
| [Twig_TemplateMethodObject::getBaz](#Twig_TemplateMethodObjectgetBaz) |  |
| [Twig_TemplateMethodObject::hasBaf](#Twig_TemplateMethodObjecthasBaf) |  |
| [Twig_TemplateMethodObject::isBaf](#Twig_TemplateMethodObjectisBaf) |  |
| [Twig_TemplateMethodObject::getStatic](#Twig_TemplateMethodObjectgetStatic) |  |
| [**Twig_TemplatePropertyObject**](#Twig_TemplatePropertyObject) |  |
| [**Twig_TemplatePropertyObjectAndArrayAccess**](#Twig_TemplatePropertyObjectAndArrayAccess) |  |
| [Twig_TemplatePropertyObjectAndArrayAccess::offsetExists](#Twig_TemplatePropertyObjectAndArrayAccessoffsetExists) |  |
| [Twig_TemplatePropertyObjectAndArrayAccess::offsetGet](#Twig_TemplatePropertyObjectAndArrayAccessoffsetGet) |  |
| [Twig_TemplatePropertyObjectAndArrayAccess::offsetSet](#Twig_TemplatePropertyObjectAndArrayAccessoffsetSet) |  |
| [Twig_TemplatePropertyObjectAndArrayAccess::offsetUnset](#Twig_TemplatePropertyObjectAndArrayAccessoffsetUnset) |  |
| [**Twig_TemplatePropertyObjectAndIterator**](#Twig_TemplatePropertyObjectAndIterator) |  |
| [Twig_TemplatePropertyObjectAndIterator::getIterator](#Twig_TemplatePropertyObjectAndIteratorgetIterator) |  |
| [**Twig_TemplatePropertyObjectDefinedWithUndefinedValue**](#Twig_TemplatePropertyObjectDefinedWithUndefinedValue) |  |
| [Twig_TemplatePropertyObjectDefinedWithUndefinedValue::__construct](#Twig_TemplatePropertyObjectDefinedWithUndefinedValue__construct) |  |
| [**Twig_TemplateTest**](#Twig_TemplateTest) |  |
| [Twig_TemplateTest::__construct](#Twig_TemplateTest__construct) |  |
| [Twig_TemplateTest::getZero](#Twig_TemplateTestgetZero) |  |
| [Twig_TemplateTest::getEmpty](#Twig_TemplateTestgetEmpty) |  |
| [Twig_TemplateTest::getString](#Twig_TemplateTestgetString) |  |
| [Twig_TemplateTest::getTrue](#Twig_TemplateTestgetTrue) |  |
| [Twig_TemplateTest::getTemplateName](#Twig_TemplateTestgetTemplateName) |  |
| [Twig_TemplateTest::getDebugInfo](#Twig_TemplateTestgetDebugInfo) |  |
| [Twig_TemplateTest::block_name](#Twig_TemplateTestblock_name) |  |
| [**Twig_TemplateWrapper**](#Twig_TemplateWrapper) | Exposes a template to userland. |
| [Twig_TemplateWrapper::render](#Twig_TemplateWrapperrender) | Renders the template. |
| [Twig_TemplateWrapper::display](#Twig_TemplateWrapperdisplay) | Displays the template. |
| [Twig_TemplateWrapper::hasBlock](#Twig_TemplateWrapperhasBlock) | Checks if a block is defined. |
| [Twig_TemplateWrapper::getBlockNames](#Twig_TemplateWrappergetBlockNames) | Returns defined block names in the template. |
| [Twig_TemplateWrapper::renderBlock](#Twig_TemplateWrapperrenderBlock) | Renders a template block. |
| [Twig_TemplateWrapper::displayBlock](#Twig_TemplateWrapperdisplayBlock) | Displays a template block. |
| [Twig_TemplateWrapper::getSourceContext](#Twig_TemplateWrappergetSourceContext) |  |
| [**Twig_Test**](#Twig_Test) | Represents a template test. |
| [Twig_Test::__construct](#Twig_Test__construct) | Creates a template test. |
| [Twig_Test::getName](#Twig_TestgetName) |  |
| [Twig_Test::getCallable](#Twig_TestgetCallable) | Returns the callable to execute for this test. |
| [Twig_Test::getNodeClass](#Twig_TestgetNodeClass) |  |
| [Twig_Test::isVariadic](#Twig_TestisVariadic) |  |
| [Twig_Test::isDeprecated](#Twig_TestisDeprecated) |  |
| [Twig_Test::getDeprecatedVersion](#Twig_TestgetDeprecatedVersion) |  |
| [Twig_Test::getAlternative](#Twig_TestgetAlternative) |  |
| [**Twig_Test_EscapingTest**](#Twig_Test_EscapingTest) | This class is adapted from code coming from Zend Framework. |
| [Twig_Test_EscapingTest::testHtmlEscapingConvertsSpecialChars](#Twig_Test_EscapingTesttestHtmlEscapingConvertsSpecialChars) |  |
| [Twig_Test_EscapingTest::testHtmlAttributeEscapingConvertsSpecialChars](#Twig_Test_EscapingTesttestHtmlAttributeEscapingConvertsSpecialChars) |  |
| [Twig_Test_EscapingTest::testJavascriptEscapingConvertsSpecialChars](#Twig_Test_EscapingTesttestJavascriptEscapingConvertsSpecialChars) |  |
| [Twig_Test_EscapingTest::testJavascriptEscapingReturnsStringIfZeroLength](#Twig_Test_EscapingTesttestJavascriptEscapingReturnsStringIfZeroLength) |  |
| [Twig_Test_EscapingTest::testJavascriptEscapingReturnsStringIfContainsOnlyDigits](#Twig_Test_EscapingTesttestJavascriptEscapingReturnsStringIfContainsOnlyDigits) |  |
| [Twig_Test_EscapingTest::testCssEscapingConvertsSpecialChars](#Twig_Test_EscapingTesttestCssEscapingConvertsSpecialChars) |  |
| [Twig_Test_EscapingTest::testCssEscapingReturnsStringIfZeroLength](#Twig_Test_EscapingTesttestCssEscapingReturnsStringIfZeroLength) |  |
| [Twig_Test_EscapingTest::testCssEscapingReturnsStringIfContainsOnlyDigits](#Twig_Test_EscapingTesttestCssEscapingReturnsStringIfContainsOnlyDigits) |  |
| [Twig_Test_EscapingTest::testUrlEscapingConvertsSpecialChars](#Twig_Test_EscapingTesttestUrlEscapingConvertsSpecialChars) |  |
| [Twig_Test_EscapingTest::testUnicodeCodepointConversionToUtf8](#Twig_Test_EscapingTesttestUnicodeCodepointConversionToUtf8) | Only testing the first few 2 ranges on this prot. function as that&#039;s all theseother range tests require. |
| [Twig_Test_EscapingTest::testJavascriptEscapingEscapesOwaspRecommendedRanges](#Twig_Test_EscapingTesttestJavascriptEscapingEscapesOwaspRecommendedRanges) |  |
| [Twig_Test_EscapingTest::testHtmlAttributeEscapingEscapesOwaspRecommendedRanges](#Twig_Test_EscapingTesttestHtmlAttributeEscapingEscapesOwaspRecommendedRanges) |  |
| [Twig_Test_EscapingTest::testCssEscapingEscapesOwaspRecommendedRanges](#Twig_Test_EscapingTesttestCssEscapingEscapesOwaspRecommendedRanges) |  |
| [**Twig_Tests_Cache_FilesystemTest**](#Twig_Tests_Cache_FilesystemTest) |  |
| [Twig_Tests_Cache_FilesystemTest::testLoad](#Twig_Tests_Cache_FilesystemTesttestLoad) |  |
| [Twig_Tests_Cache_FilesystemTest::testLoadMissing](#Twig_Tests_Cache_FilesystemTesttestLoadMissing) |  |
| [Twig_Tests_Cache_FilesystemTest::testWrite](#Twig_Tests_Cache_FilesystemTesttestWrite) |  |
| [Twig_Tests_Cache_FilesystemTest::testWriteFailMkdir](#Twig_Tests_Cache_FilesystemTesttestWriteFailMkdir) |  |
| [Twig_Tests_Cache_FilesystemTest::testWriteFailDirWritable](#Twig_Tests_Cache_FilesystemTesttestWriteFailDirWritable) |  |
| [Twig_Tests_Cache_FilesystemTest::testWriteFailWriteFile](#Twig_Tests_Cache_FilesystemTesttestWriteFailWriteFile) |  |
| [Twig_Tests_Cache_FilesystemTest::testGetTimestamp](#Twig_Tests_Cache_FilesystemTesttestGetTimestamp) |  |
| [Twig_Tests_Cache_FilesystemTest::testGetTimestampMissingFile](#Twig_Tests_Cache_FilesystemTesttestGetTimestampMissingFile) |  |
| [Twig_Tests_Cache_FilesystemTest::testGenerateKey](#Twig_Tests_Cache_FilesystemTesttestGenerateKey) | Test file cache is tolerant towards trailing (back)slashes on the configured cache directory. |
| [Twig_Tests_Cache_FilesystemTest::provideDirectories](#Twig_Tests_Cache_FilesystemTestprovideDirectories) |  |
| [**Twig_Tests_CompilerTest**](#Twig_Tests_CompilerTest) |  |
| [Twig_Tests_CompilerTest::testReprNumericValueWithLocale](#Twig_Tests_CompilerTesttestReprNumericValueWithLocale) |  |
| [**Twig_Tests_EnvironmentTest**](#Twig_Tests_EnvironmentTest) |  |
| [Twig_Tests_EnvironmentTest::testAutoescapeOption](#Twig_Tests_EnvironmentTesttestAutoescapeOption) |  |
| [Twig_Tests_EnvironmentTest::escapingStrategyCallback](#Twig_Tests_EnvironmentTestescapingStrategyCallback) |  |
| [Twig_Tests_EnvironmentTest::testGlobals](#Twig_Tests_EnvironmentTesttestGlobals) |  |
| [Twig_Tests_EnvironmentTest::testExtensionsAreNotInitializedWhenRenderingACompiledTemplate](#Twig_Tests_EnvironmentTesttestExtensionsAreNotInitializedWhenRenderingACompiledTemplate) |  |
| [Twig_Tests_EnvironmentTest::testAutoReloadCacheMiss](#Twig_Tests_EnvironmentTesttestAutoReloadCacheMiss) |  |
| [Twig_Tests_EnvironmentTest::testAutoReloadCacheHit](#Twig_Tests_EnvironmentTesttestAutoReloadCacheHit) |  |
| [Twig_Tests_EnvironmentTest::testAutoReloadOutdatedCacheHit](#Twig_Tests_EnvironmentTesttestAutoReloadOutdatedCacheHit) |  |
| [Twig_Tests_EnvironmentTest::testHasGetExtensionByClassName](#Twig_Tests_EnvironmentTesttestHasGetExtensionByClassName) |  |
| [Twig_Tests_EnvironmentTest::testAddExtension](#Twig_Tests_EnvironmentTesttestAddExtension) |  |
| [Twig_Tests_EnvironmentTest::testAddMockExtension](#Twig_Tests_EnvironmentTesttestAddMockExtension) |  |
| [Twig_Tests_EnvironmentTest::testInitRuntimeWithAnExtensionUsingInitRuntimeNoDeprecation](#Twig_Tests_EnvironmentTesttestInitRuntimeWithAnExtensionUsingInitRuntimeNoDeprecation) |  |
| [Twig_Tests_EnvironmentTest::testOverrideExtension](#Twig_Tests_EnvironmentTesttestOverrideExtension) |  |
| [Twig_Tests_EnvironmentTest::testAddRuntimeLoader](#Twig_Tests_EnvironmentTesttestAddRuntimeLoader) |  |
| [**Twig_Tests_EnvironmentTest_Extension**](#Twig_Tests_EnvironmentTest_Extension) |  |
| [Twig_Tests_EnvironmentTest_Extension::getTokenParsers](#Twig_Tests_EnvironmentTest_ExtensiongetTokenParsers) | Returns the token parser instances to add to the existing list. |
| [Twig_Tests_EnvironmentTest_Extension::getNodeVisitors](#Twig_Tests_EnvironmentTest_ExtensiongetNodeVisitors) | Returns the node visitor instances to add to the existing list. |
| [Twig_Tests_EnvironmentTest_Extension::getFilters](#Twig_Tests_EnvironmentTest_ExtensiongetFilters) | Returns a list of filters to add to the existing list. |
| [Twig_Tests_EnvironmentTest_Extension::getTests](#Twig_Tests_EnvironmentTest_ExtensiongetTests) | Returns a list of tests to add to the existing list. |
| [Twig_Tests_EnvironmentTest_Extension::getFunctions](#Twig_Tests_EnvironmentTest_ExtensiongetFunctions) | Returns a list of functions to add to the existing list. |
| [Twig_Tests_EnvironmentTest_Extension::getOperators](#Twig_Tests_EnvironmentTest_ExtensiongetOperators) | Returns a list of operators to add to the existing list. |
| [Twig_Tests_EnvironmentTest_Extension::getGlobals](#Twig_Tests_EnvironmentTest_ExtensiongetGlobals) | Returns a list of global variables to add to the existing list. |
| [**Twig_Tests_EnvironmentTest_Extension_WithGlobals**](#Twig_Tests_EnvironmentTest_Extension_WithGlobals) |  |
| [Twig_Tests_EnvironmentTest_Extension_WithGlobals::getGlobals](#Twig_Tests_EnvironmentTest_Extension_WithGlobalsgetGlobals) |  |
| [**Twig_Tests_EnvironmentTest_ExtensionWithDeprecationInitRuntime**](#Twig_Tests_EnvironmentTest_ExtensionWithDeprecationInitRuntime) |  |
| [Twig_Tests_EnvironmentTest_ExtensionWithDeprecationInitRuntime::initRuntime](#Twig_Tests_EnvironmentTest_ExtensionWithDeprecationInitRuntimeinitRuntime) |  |
| [**Twig_Tests_EnvironmentTest_ExtensionWithoutDeprecationInitRuntime**](#Twig_Tests_EnvironmentTest_ExtensionWithoutDeprecationInitRuntime) |  |
| [Twig_Tests_EnvironmentTest_ExtensionWithoutDeprecationInitRuntime::initRuntime](#Twig_Tests_EnvironmentTest_ExtensionWithoutDeprecationInitRuntimeinitRuntime) | Initializes the runtime environment. |
| [**Twig_Tests_EnvironmentTest_ExtensionWithoutRuntime**](#Twig_Tests_EnvironmentTest_ExtensionWithoutRuntime) |  |
| [Twig_Tests_EnvironmentTest_ExtensionWithoutRuntime::getFunctions](#Twig_Tests_EnvironmentTest_ExtensionWithoutRuntimegetFunctions) | Returns a list of functions to add to the existing list. |
| [Twig_Tests_EnvironmentTest_ExtensionWithoutRuntime::getName](#Twig_Tests_EnvironmentTest_ExtensionWithoutRuntimegetName) |  |
| [**Twig_Tests_EnvironmentTest_NodeVisitor**](#Twig_Tests_EnvironmentTest_NodeVisitor) |  |
| [Twig_Tests_EnvironmentTest_NodeVisitor::enterNode](#Twig_Tests_EnvironmentTest_NodeVisitorenterNode) | Called before child nodes are visited. |
| [Twig_Tests_EnvironmentTest_NodeVisitor::leaveNode](#Twig_Tests_EnvironmentTest_NodeVisitorleaveNode) | Called after child nodes are visited. |
| [Twig_Tests_EnvironmentTest_NodeVisitor::getPriority](#Twig_Tests_EnvironmentTest_NodeVisitorgetPriority) | Returns the priority for this visitor. |
| [**Twig_Tests_EnvironmentTest_Runtime**](#Twig_Tests_EnvironmentTest_Runtime) |  |
| [Twig_Tests_EnvironmentTest_Runtime::fromRuntime](#Twig_Tests_EnvironmentTest_RuntimefromRuntime) |  |
| [**Twig_Tests_EnvironmentTest_TokenParser**](#Twig_Tests_EnvironmentTest_TokenParser) | Base class for all token parsers. |
| [Twig_Tests_EnvironmentTest_TokenParser::parse](#Twig_Tests_EnvironmentTest_TokenParserparse) |  |
| [Twig_Tests_EnvironmentTest_TokenParser::getTag](#Twig_Tests_EnvironmentTest_TokenParsergetTag) |  |
| [**Twig_Tests_ErrorTest**](#Twig_Tests_ErrorTest) |  |
| [Twig_Tests_ErrorTest::testErrorWithObjectFilename](#Twig_Tests_ErrorTesttestErrorWithObjectFilename) |  |
| [Twig_Tests_ErrorTest::testErrorWithArrayFilename](#Twig_Tests_ErrorTesttestErrorWithArrayFilename) |  |
| [Twig_Tests_ErrorTest::testTwigExceptionGuessWithMissingVarAndArrayLoader](#Twig_Tests_ErrorTesttestTwigExceptionGuessWithMissingVarAndArrayLoader) |  |
| [Twig_Tests_ErrorTest::testTwigExceptionGuessWithExceptionAndArrayLoader](#Twig_Tests_ErrorTesttestTwigExceptionGuessWithExceptionAndArrayLoader) |  |
| [Twig_Tests_ErrorTest::testTwigExceptionGuessWithMissingVarAndFilesystemLoader](#Twig_Tests_ErrorTesttestTwigExceptionGuessWithMissingVarAndFilesystemLoader) |  |
| [Twig_Tests_ErrorTest::testTwigExceptionGuessWithExceptionAndFilesystemLoader](#Twig_Tests_ErrorTesttestTwigExceptionGuessWithExceptionAndFilesystemLoader) |  |
| [Twig_Tests_ErrorTest::testTwigExceptionAddsFileAndLine](#Twig_Tests_ErrorTesttestTwigExceptionAddsFileAndLine) |  |
| [Twig_Tests_ErrorTest::getErroredTemplates](#Twig_Tests_ErrorTestgetErroredTemplates) |  |
| [**Twig_Tests_ErrorTest_Foo**](#Twig_Tests_ErrorTest_Foo) |  |
| [Twig_Tests_ErrorTest_Foo::bar](#Twig_Tests_ErrorTest_Foobar) |  |
| [**Twig_Tests_ExpressionParserTest**](#Twig_Tests_ExpressionParserTest) |  |
| [Twig_Tests_ExpressionParserTest::testCanOnlyAssignToNames](#Twig_Tests_ExpressionParserTesttestCanOnlyAssignToNames) |  |
| [Twig_Tests_ExpressionParserTest::getFailingTestsForAssignment](#Twig_Tests_ExpressionParserTestgetFailingTestsForAssignment) |  |
| [Twig_Tests_ExpressionParserTest::testArrayExpression](#Twig_Tests_ExpressionParserTesttestArrayExpression) |  |
| [Twig_Tests_ExpressionParserTest::testArraySyntaxError](#Twig_Tests_ExpressionParserTesttestArraySyntaxError) |  |
| [Twig_Tests_ExpressionParserTest::getFailingTestsForArray](#Twig_Tests_ExpressionParserTestgetFailingTestsForArray) |  |
| [Twig_Tests_ExpressionParserTest::getTestsForArray](#Twig_Tests_ExpressionParserTestgetTestsForArray) |  |
| [Twig_Tests_ExpressionParserTest::testStringExpressionDoesNotConcatenateTwoConsecutiveStrings](#Twig_Tests_ExpressionParserTesttestStringExpressionDoesNotConcatenateTwoConsecutiveStrings) |  |
| [Twig_Tests_ExpressionParserTest::testStringExpression](#Twig_Tests_ExpressionParserTesttestStringExpression) |  |
| [Twig_Tests_ExpressionParserTest::getTestsForString](#Twig_Tests_ExpressionParserTestgetTestsForString) |  |
| [Twig_Tests_ExpressionParserTest::testAttributeCallDoesNotSupportNamedArguments](#Twig_Tests_ExpressionParserTesttestAttributeCallDoesNotSupportNamedArguments) |  |
| [Twig_Tests_ExpressionParserTest::testMacroCallDoesNotSupportNamedArguments](#Twig_Tests_ExpressionParserTesttestMacroCallDoesNotSupportNamedArguments) |  |
| [Twig_Tests_ExpressionParserTest::testMacroDefinitionDoesNotSupportNonNameVariableName](#Twig_Tests_ExpressionParserTesttestMacroDefinitionDoesNotSupportNonNameVariableName) |  |
| [Twig_Tests_ExpressionParserTest::testMacroDefinitionDoesNotSupportNonConstantDefaultValues](#Twig_Tests_ExpressionParserTesttestMacroDefinitionDoesNotSupportNonConstantDefaultValues) |  |
| [Twig_Tests_ExpressionParserTest::getMacroDefinitionDoesNotSupportNonConstantDefaultValues](#Twig_Tests_ExpressionParserTestgetMacroDefinitionDoesNotSupportNonConstantDefaultValues) |  |
| [Twig_Tests_ExpressionParserTest::testMacroDefinitionSupportsConstantDefaultValues](#Twig_Tests_ExpressionParserTesttestMacroDefinitionSupportsConstantDefaultValues) |  |
| [Twig_Tests_ExpressionParserTest::getMacroDefinitionSupportsConstantDefaultValues](#Twig_Tests_ExpressionParserTestgetMacroDefinitionSupportsConstantDefaultValues) |  |
| [Twig_Tests_ExpressionParserTest::testUnknownFunction](#Twig_Tests_ExpressionParserTesttestUnknownFunction) |  |
| [Twig_Tests_ExpressionParserTest::testUnknownFunctionWithoutSuggestions](#Twig_Tests_ExpressionParserTesttestUnknownFunctionWithoutSuggestions) |  |
| [Twig_Tests_ExpressionParserTest::testUnknownFilter](#Twig_Tests_ExpressionParserTesttestUnknownFilter) |  |
| [Twig_Tests_ExpressionParserTest::testUnknownFilterWithoutSuggestions](#Twig_Tests_ExpressionParserTesttestUnknownFilterWithoutSuggestions) |  |
| [Twig_Tests_ExpressionParserTest::testUnknownTest](#Twig_Tests_ExpressionParserTesttestUnknownTest) |  |
| [Twig_Tests_ExpressionParserTest::testUnknownTestWithoutSuggestions](#Twig_Tests_ExpressionParserTesttestUnknownTestWithoutSuggestions) |  |
| [**Twig_Tests_Extension_CoreTest**](#Twig_Tests_Extension_CoreTest) |  |
| [Twig_Tests_Extension_CoreTest::testRandomFunction](#Twig_Tests_Extension_CoreTesttestRandomFunction) |  |
| [Twig_Tests_Extension_CoreTest::getRandomFunctionTestData](#Twig_Tests_Extension_CoreTestgetRandomFunctionTestData) |  |
| [Twig_Tests_Extension_CoreTest::testRandomFunctionWithoutParameter](#Twig_Tests_Extension_CoreTesttestRandomFunctionWithoutParameter) |  |
| [Twig_Tests_Extension_CoreTest::testRandomFunctionReturnsAsIs](#Twig_Tests_Extension_CoreTesttestRandomFunctionReturnsAsIs) |  |
| [Twig_Tests_Extension_CoreTest::testRandomFunctionOfEmptyArrayThrowsException](#Twig_Tests_Extension_CoreTesttestRandomFunctionOfEmptyArrayThrowsException) |  |
| [Twig_Tests_Extension_CoreTest::testRandomFunctionOnNonUTF8String](#Twig_Tests_Extension_CoreTesttestRandomFunctionOnNonUTF8String) |  |
| [Twig_Tests_Extension_CoreTest::testReverseFilterOnNonUTF8String](#Twig_Tests_Extension_CoreTesttestReverseFilterOnNonUTF8String) |  |
| [Twig_Tests_Extension_CoreTest::testCustomEscaper](#Twig_Tests_Extension_CoreTesttestCustomEscaper) |  |
| [Twig_Tests_Extension_CoreTest::provideCustomEscaperCases](#Twig_Tests_Extension_CoreTestprovideCustomEscaperCases) |  |
| [Twig_Tests_Extension_CoreTest::testUnknownCustomEscaper](#Twig_Tests_Extension_CoreTesttestUnknownCustomEscaper) |  |
| [Twig_Tests_Extension_CoreTest::testTwigFirst](#Twig_Tests_Extension_CoreTesttestTwigFirst) |  |
| [Twig_Tests_Extension_CoreTest::provideTwigFirstCases](#Twig_Tests_Extension_CoreTestprovideTwigFirstCases) |  |
| [Twig_Tests_Extension_CoreTest::testTwigLast](#Twig_Tests_Extension_CoreTesttestTwigLast) |  |
| [Twig_Tests_Extension_CoreTest::provideTwigLastCases](#Twig_Tests_Extension_CoreTestprovideTwigLastCases) |  |
| [Twig_Tests_Extension_CoreTest::testArrayKeysFilter](#Twig_Tests_Extension_CoreTesttestArrayKeysFilter) |  |
| [Twig_Tests_Extension_CoreTest::provideArrayKeyCases](#Twig_Tests_Extension_CoreTestprovideArrayKeyCases) |  |
| [Twig_Tests_Extension_CoreTest::testInFilter](#Twig_Tests_Extension_CoreTesttestInFilter) |  |
| [Twig_Tests_Extension_CoreTest::provideInFilterCases](#Twig_Tests_Extension_CoreTestprovideInFilterCases) |  |
| [Twig_Tests_Extension_CoreTest::testSliceFilter](#Twig_Tests_Extension_CoreTesttestSliceFilter) |  |
| [Twig_Tests_Extension_CoreTest::provideSliceFilterCases](#Twig_Tests_Extension_CoreTestprovideSliceFilterCases) |  |
| [**Twig_Tests_Extension_SandboxTest**](#Twig_Tests_Extension_SandboxTest) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxWithInheritance](#Twig_Tests_Extension_SandboxTesttestSandboxWithInheritance) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxGloballySet](#Twig_Tests_Extension_SandboxTesttestSandboxGloballySet) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxUnallowedMethodAccessor](#Twig_Tests_Extension_SandboxTesttestSandboxUnallowedMethodAccessor) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxUnallowedFilter](#Twig_Tests_Extension_SandboxTesttestSandboxUnallowedFilter) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxUnallowedTag](#Twig_Tests_Extension_SandboxTesttestSandboxUnallowedTag) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxUnallowedProperty](#Twig_Tests_Extension_SandboxTesttestSandboxUnallowedProperty) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxUnallowedToString](#Twig_Tests_Extension_SandboxTesttestSandboxUnallowedToString) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxUnallowedToStringArray](#Twig_Tests_Extension_SandboxTesttestSandboxUnallowedToStringArray) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxUnallowedFunction](#Twig_Tests_Extension_SandboxTesttestSandboxUnallowedFunction) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxAllowMethodFoo](#Twig_Tests_Extension_SandboxTesttestSandboxAllowMethodFoo) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxAllowMethodToString](#Twig_Tests_Extension_SandboxTesttestSandboxAllowMethodToString) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxAllowMethodToStringDisabled](#Twig_Tests_Extension_SandboxTesttestSandboxAllowMethodToStringDisabled) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxAllowFilter](#Twig_Tests_Extension_SandboxTesttestSandboxAllowFilter) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxAllowTag](#Twig_Tests_Extension_SandboxTesttestSandboxAllowTag) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxAllowProperty](#Twig_Tests_Extension_SandboxTesttestSandboxAllowProperty) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxAllowFunction](#Twig_Tests_Extension_SandboxTesttestSandboxAllowFunction) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxAllowFunctionsCaseInsensitive](#Twig_Tests_Extension_SandboxTesttestSandboxAllowFunctionsCaseInsensitive) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxLocallySetForAnInclude](#Twig_Tests_Extension_SandboxTesttestSandboxLocallySetForAnInclude) |  |
| [Twig_Tests_Extension_SandboxTest::testMacrosInASandbox](#Twig_Tests_Extension_SandboxTesttestMacrosInASandbox) |  |
| [Twig_Tests_Extension_SandboxTest::testSandboxDisabledAfterIncludeFunctionError](#Twig_Tests_Extension_SandboxTesttestSandboxDisabledAfterIncludeFunctionError) |  |
| [**Twig_Tests_FactoryRuntimeLoaderTest**](#Twig_Tests_FactoryRuntimeLoaderTest) |  |
| [Twig_Tests_FactoryRuntimeLoaderTest::testLoad](#Twig_Tests_FactoryRuntimeLoaderTesttestLoad) |  |
| [Twig_Tests_FactoryRuntimeLoaderTest::testLoadReturnsNullForUnmappedRuntime](#Twig_Tests_FactoryRuntimeLoaderTesttestLoadReturnsNullForUnmappedRuntime) |  |
| [**Twig_Tests_FileExtensionEscapingStrategyTest**](#Twig_Tests_FileExtensionEscapingStrategyTest) |  |
| [Twig_Tests_FileExtensionEscapingStrategyTest::testGuess](#Twig_Tests_FileExtensionEscapingStrategyTesttestGuess) |  |
| [Twig_Tests_FileExtensionEscapingStrategyTest::getGuessData](#Twig_Tests_FileExtensionEscapingStrategyTestgetGuessData) |  |
| [**Twig_Tests_FilesystemHelper**](#Twig_Tests_FilesystemHelper) |  |
| [Twig_Tests_FilesystemHelper::removeDir](#Twig_Tests_FilesystemHelperremoveDir) |  |
| [**Twig_Tests_IntegrationTest**](#Twig_Tests_IntegrationTest) | Integration test helper. |
| [Twig_Tests_IntegrationTest::getExtensions](#Twig_Tests_IntegrationTestgetExtensions) |  |
| [Twig_Tests_IntegrationTest::getFixturesDir](#Twig_Tests_IntegrationTestgetFixturesDir) |  |
| [**Twig_Tests_LexerTest**](#Twig_Tests_LexerTest) |  |
| [Twig_Tests_LexerTest::testNameLabelForTag](#Twig_Tests_LexerTesttestNameLabelForTag) |  |
| [Twig_Tests_LexerTest::testNameLabelForFunction](#Twig_Tests_LexerTesttestNameLabelForFunction) |  |
| [Twig_Tests_LexerTest::testBracketsNesting](#Twig_Tests_LexerTesttestBracketsNesting) |  |
| [Twig_Tests_LexerTest::testLineDirective](#Twig_Tests_LexerTesttestLineDirective) |  |
| [Twig_Tests_LexerTest::testLineDirectiveInline](#Twig_Tests_LexerTesttestLineDirectiveInline) |  |
| [Twig_Tests_LexerTest::testLongComments](#Twig_Tests_LexerTesttestLongComments) |  |
| [Twig_Tests_LexerTest::testLongVerbatim](#Twig_Tests_LexerTesttestLongVerbatim) |  |
| [Twig_Tests_LexerTest::testLongVar](#Twig_Tests_LexerTesttestLongVar) |  |
| [Twig_Tests_LexerTest::testLongBlock](#Twig_Tests_LexerTesttestLongBlock) |  |
| [Twig_Tests_LexerTest::testBigNumbers](#Twig_Tests_LexerTesttestBigNumbers) |  |
| [Twig_Tests_LexerTest::testStringWithEscapedDelimiter](#Twig_Tests_LexerTesttestStringWithEscapedDelimiter) |  |
| [Twig_Tests_LexerTest::testStringWithInterpolation](#Twig_Tests_LexerTesttestStringWithInterpolation) |  |
| [Twig_Tests_LexerTest::testStringWithEscapedInterpolation](#Twig_Tests_LexerTesttestStringWithEscapedInterpolation) |  |
| [Twig_Tests_LexerTest::testStringWithHash](#Twig_Tests_LexerTesttestStringWithHash) |  |
| [Twig_Tests_LexerTest::testStringWithUnterminatedInterpolation](#Twig_Tests_LexerTesttestStringWithUnterminatedInterpolation) |  |
| [Twig_Tests_LexerTest::testStringWithNestedInterpolations](#Twig_Tests_LexerTesttestStringWithNestedInterpolations) |  |
| [Twig_Tests_LexerTest::testStringWithNestedInterpolationsInBlock](#Twig_Tests_LexerTesttestStringWithNestedInterpolationsInBlock) |  |
| [Twig_Tests_LexerTest::testOperatorEndingWithALetterAtTheEndOfALine](#Twig_Tests_LexerTesttestOperatorEndingWithALetterAtTheEndOfALine) |  |
| [Twig_Tests_LexerTest::testUnterminatedVariable](#Twig_Tests_LexerTesttestUnterminatedVariable) |  |
| [Twig_Tests_LexerTest::testUnterminatedBlock](#Twig_Tests_LexerTesttestUnterminatedBlock) |  |
| [**Twig_Tests_Loader_ArrayTest**](#Twig_Tests_Loader_ArrayTest) |  |
| [Twig_Tests_Loader_ArrayTest::testGetSourceContextWhenTemplateDoesNotExist](#Twig_Tests_Loader_ArrayTesttestGetSourceContextWhenTemplateDoesNotExist) |  |
| [Twig_Tests_Loader_ArrayTest::testGetCacheKey](#Twig_Tests_Loader_ArrayTesttestGetCacheKey) |  |
| [Twig_Tests_Loader_ArrayTest::testGetCacheKeyWhenTemplateDoesNotExist](#Twig_Tests_Loader_ArrayTesttestGetCacheKeyWhenTemplateDoesNotExist) |  |
| [Twig_Tests_Loader_ArrayTest::testSetTemplate](#Twig_Tests_Loader_ArrayTesttestSetTemplate) |  |
| [Twig_Tests_Loader_ArrayTest::testIsFresh](#Twig_Tests_Loader_ArrayTesttestIsFresh) |  |
| [Twig_Tests_Loader_ArrayTest::testIsFreshWhenTemplateDoesNotExist](#Twig_Tests_Loader_ArrayTesttestIsFreshWhenTemplateDoesNotExist) |  |
| [**Twig_Tests_Loader_ChainTest**](#Twig_Tests_Loader_ChainTest) |  |
| [Twig_Tests_Loader_ChainTest::testGetSourceContext](#Twig_Tests_Loader_ChainTesttestGetSourceContext) |  |
| [Twig_Tests_Loader_ChainTest::testGetSourceContextWhenTemplateDoesNotExist](#Twig_Tests_Loader_ChainTesttestGetSourceContextWhenTemplateDoesNotExist) |  |
| [Twig_Tests_Loader_ChainTest::testGetCacheKey](#Twig_Tests_Loader_ChainTesttestGetCacheKey) |  |
| [Twig_Tests_Loader_ChainTest::testGetCacheKeyWhenTemplateDoesNotExist](#Twig_Tests_Loader_ChainTesttestGetCacheKeyWhenTemplateDoesNotExist) |  |
| [Twig_Tests_Loader_ChainTest::testAddLoader](#Twig_Tests_Loader_ChainTesttestAddLoader) |  |
| [Twig_Tests_Loader_ChainTest::testExists](#Twig_Tests_Loader_ChainTesttestExists) |  |
| [**Twig_Tests_Loader_FilesystemTest**](#Twig_Tests_Loader_FilesystemTest) |  |
| [Twig_Tests_Loader_FilesystemTest::testGetSourceContext](#Twig_Tests_Loader_FilesystemTesttestGetSourceContext) |  |
| [Twig_Tests_Loader_FilesystemTest::testSecurity](#Twig_Tests_Loader_FilesystemTesttestSecurity) |  |
| [Twig_Tests_Loader_FilesystemTest::getSecurityTests](#Twig_Tests_Loader_FilesystemTestgetSecurityTests) |  |
| [Twig_Tests_Loader_FilesystemTest::testPaths](#Twig_Tests_Loader_FilesystemTesttestPaths) |  |
| [Twig_Tests_Loader_FilesystemTest::getBasePaths](#Twig_Tests_Loader_FilesystemTestgetBasePaths) |  |
| [Twig_Tests_Loader_FilesystemTest::testEmptyConstructor](#Twig_Tests_Loader_FilesystemTesttestEmptyConstructor) |  |
| [Twig_Tests_Loader_FilesystemTest::testGetNamespaces](#Twig_Tests_Loader_FilesystemTesttestGetNamespaces) |  |
| [Twig_Tests_Loader_FilesystemTest::testFindTemplateExceptionNamespace](#Twig_Tests_Loader_FilesystemTesttestFindTemplateExceptionNamespace) |  |
| [Twig_Tests_Loader_FilesystemTest::testFindTemplateWithCache](#Twig_Tests_Loader_FilesystemTesttestFindTemplateWithCache) |  |
| [Twig_Tests_Loader_FilesystemTest::testLoadTemplateAndRenderBlockWithCache](#Twig_Tests_Loader_FilesystemTesttestLoadTemplateAndRenderBlockWithCache) |  |
| [Twig_Tests_Loader_FilesystemTest::getArrayInheritanceTests](#Twig_Tests_Loader_FilesystemTestgetArrayInheritanceTests) |  |
| [Twig_Tests_Loader_FilesystemTest::testArrayInheritance](#Twig_Tests_Loader_FilesystemTesttestArrayInheritance) |  |
| [Twig_Tests_Loader_FilesystemTest::testLoadTemplateFromPhar](#Twig_Tests_Loader_FilesystemTesttestLoadTemplateFromPhar) |  |
| [**Twig_Tests_NativeExtensionTest**](#Twig_Tests_NativeExtensionTest) |  |
| [Twig_Tests_NativeExtensionTest::testGetProperties](#Twig_Tests_NativeExtensionTesttestGetProperties) |  |
| [**Twig_Tests_Node_AutoEscapeTest**](#Twig_Tests_Node_AutoEscapeTest) |  |
| [Twig_Tests_Node_AutoEscapeTest::testConstructor](#Twig_Tests_Node_AutoEscapeTesttestConstructor) |  |
| [Twig_Tests_Node_AutoEscapeTest::getTests](#Twig_Tests_Node_AutoEscapeTestgetTests) |  |
| [**Twig_Tests_Node_BlockReferenceTest**](#Twig_Tests_Node_BlockReferenceTest) |  |
| [Twig_Tests_Node_BlockReferenceTest::testConstructor](#Twig_Tests_Node_BlockReferenceTesttestConstructor) |  |
| [Twig_Tests_Node_BlockReferenceTest::getTests](#Twig_Tests_Node_BlockReferenceTestgetTests) |  |
| [**Twig_Tests_Node_BlockTest**](#Twig_Tests_Node_BlockTest) |  |
| [Twig_Tests_Node_BlockTest::testConstructor](#Twig_Tests_Node_BlockTesttestConstructor) |  |
| [Twig_Tests_Node_BlockTest::getTests](#Twig_Tests_Node_BlockTestgetTests) |  |
| [**Twig_Tests_Node_DoTest**](#Twig_Tests_Node_DoTest) |  |
| [Twig_Tests_Node_DoTest::testConstructor](#Twig_Tests_Node_DoTesttestConstructor) |  |
| [Twig_Tests_Node_DoTest::getTests](#Twig_Tests_Node_DoTestgetTests) |  |
| [**Twig_Tests_Node_Expression_ArrayTest**](#Twig_Tests_Node_Expression_ArrayTest) |  |
| [Twig_Tests_Node_Expression_ArrayTest::testConstructor](#Twig_Tests_Node_Expression_ArrayTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_ArrayTest::getTests](#Twig_Tests_Node_Expression_ArrayTestgetTests) |  |
| [**Twig_Tests_Node_Expression_AssignNameTest**](#Twig_Tests_Node_Expression_AssignNameTest) |  |
| [Twig_Tests_Node_Expression_AssignNameTest::testConstructor](#Twig_Tests_Node_Expression_AssignNameTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_AssignNameTest::getTests](#Twig_Tests_Node_Expression_AssignNameTestgetTests) |  |
| [**Twig_Tests_Node_Expression_Binary_AddTest**](#Twig_Tests_Node_Expression_Binary_AddTest) |  |
| [Twig_Tests_Node_Expression_Binary_AddTest::testConstructor](#Twig_Tests_Node_Expression_Binary_AddTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_Binary_AddTest::getTests](#Twig_Tests_Node_Expression_Binary_AddTestgetTests) |  |
| [**Twig_Tests_Node_Expression_Binary_AndTest**](#Twig_Tests_Node_Expression_Binary_AndTest) |  |
| [Twig_Tests_Node_Expression_Binary_AndTest::testConstructor](#Twig_Tests_Node_Expression_Binary_AndTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_Binary_AndTest::getTests](#Twig_Tests_Node_Expression_Binary_AndTestgetTests) |  |
| [**Twig_Tests_Node_Expression_Binary_ConcatTest**](#Twig_Tests_Node_Expression_Binary_ConcatTest) |  |
| [Twig_Tests_Node_Expression_Binary_ConcatTest::testConstructor](#Twig_Tests_Node_Expression_Binary_ConcatTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_Binary_ConcatTest::getTests](#Twig_Tests_Node_Expression_Binary_ConcatTestgetTests) |  |
| [**Twig_Tests_Node_Expression_Binary_DivTest**](#Twig_Tests_Node_Expression_Binary_DivTest) |  |
| [Twig_Tests_Node_Expression_Binary_DivTest::testConstructor](#Twig_Tests_Node_Expression_Binary_DivTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_Binary_DivTest::getTests](#Twig_Tests_Node_Expression_Binary_DivTestgetTests) |  |
| [**Twig_Tests_Node_Expression_Binary_FloorDivTest**](#Twig_Tests_Node_Expression_Binary_FloorDivTest) |  |
| [Twig_Tests_Node_Expression_Binary_FloorDivTest::testConstructor](#Twig_Tests_Node_Expression_Binary_FloorDivTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_Binary_FloorDivTest::getTests](#Twig_Tests_Node_Expression_Binary_FloorDivTestgetTests) |  |
| [**Twig_Tests_Node_Expression_Binary_ModTest**](#Twig_Tests_Node_Expression_Binary_ModTest) |  |
| [Twig_Tests_Node_Expression_Binary_ModTest::testConstructor](#Twig_Tests_Node_Expression_Binary_ModTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_Binary_ModTest::getTests](#Twig_Tests_Node_Expression_Binary_ModTestgetTests) |  |
| [**Twig_Tests_Node_Expression_Binary_MulTest**](#Twig_Tests_Node_Expression_Binary_MulTest) |  |
| [Twig_Tests_Node_Expression_Binary_MulTest::testConstructor](#Twig_Tests_Node_Expression_Binary_MulTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_Binary_MulTest::getTests](#Twig_Tests_Node_Expression_Binary_MulTestgetTests) |  |
| [**Twig_Tests_Node_Expression_Binary_OrTest**](#Twig_Tests_Node_Expression_Binary_OrTest) |  |
| [Twig_Tests_Node_Expression_Binary_OrTest::testConstructor](#Twig_Tests_Node_Expression_Binary_OrTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_Binary_OrTest::getTests](#Twig_Tests_Node_Expression_Binary_OrTestgetTests) |  |
| [**Twig_Tests_Node_Expression_Binary_SubTest**](#Twig_Tests_Node_Expression_Binary_SubTest) |  |
| [Twig_Tests_Node_Expression_Binary_SubTest::testConstructor](#Twig_Tests_Node_Expression_Binary_SubTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_Binary_SubTest::getTests](#Twig_Tests_Node_Expression_Binary_SubTestgetTests) |  |
| [**Twig_Tests_Node_Expression_Call**](#Twig_Tests_Node_Expression_Call) | Abstract class for all nodes that represents an expression. |
| [Twig_Tests_Node_Expression_Call::getArguments](#Twig_Tests_Node_Expression_CallgetArguments) |  |
| [**Twig_Tests_Node_Expression_CallTest**](#Twig_Tests_Node_Expression_CallTest) |  |
| [Twig_Tests_Node_Expression_CallTest::testGetArguments](#Twig_Tests_Node_Expression_CallTesttestGetArguments) |  |
| [Twig_Tests_Node_Expression_CallTest::testGetArgumentsWhenPositionalArgumentsAfterNamedArguments](#Twig_Tests_Node_Expression_CallTesttestGetArgumentsWhenPositionalArgumentsAfterNamedArguments) |  |
| [Twig_Tests_Node_Expression_CallTest::testGetArgumentsWhenArgumentIsDefinedTwice](#Twig_Tests_Node_Expression_CallTesttestGetArgumentsWhenArgumentIsDefinedTwice) |  |
| [Twig_Tests_Node_Expression_CallTest::testGetArgumentsWithWrongNamedArgumentName](#Twig_Tests_Node_Expression_CallTesttestGetArgumentsWithWrongNamedArgumentName) |  |
| [Twig_Tests_Node_Expression_CallTest::testGetArgumentsWithWrongNamedArgumentNames](#Twig_Tests_Node_Expression_CallTesttestGetArgumentsWithWrongNamedArgumentNames) |  |
| [Twig_Tests_Node_Expression_CallTest::testResolveArgumentsWithMissingValueForOptionalArgument](#Twig_Tests_Node_Expression_CallTesttestResolveArgumentsWithMissingValueForOptionalArgument) |  |
| [Twig_Tests_Node_Expression_CallTest::testResolveArgumentsOnlyNecessaryArgumentsForCustomFunction](#Twig_Tests_Node_Expression_CallTesttestResolveArgumentsOnlyNecessaryArgumentsForCustomFunction) |  |
| [Twig_Tests_Node_Expression_CallTest::testGetArgumentsForStaticMethod](#Twig_Tests_Node_Expression_CallTesttestGetArgumentsForStaticMethod) |  |
| [Twig_Tests_Node_Expression_CallTest::testResolveArgumentsWithMissingParameterForArbitraryArguments](#Twig_Tests_Node_Expression_CallTesttestResolveArgumentsWithMissingParameterForArbitraryArguments) |  |
| [Twig_Tests_Node_Expression_CallTest::customStaticFunction](#Twig_Tests_Node_Expression_CallTestcustomStaticFunction) |  |
| [Twig_Tests_Node_Expression_CallTest::customFunction](#Twig_Tests_Node_Expression_CallTestcustomFunction) |  |
| [Twig_Tests_Node_Expression_CallTest::customFunctionWithArbitraryArguments](#Twig_Tests_Node_Expression_CallTestcustomFunctionWithArbitraryArguments) |  |
| [Twig_Tests_Node_Expression_CallTest::testResolveArgumentsWithMissingParameterForArbitraryArgumentsOnFunction](#Twig_Tests_Node_Expression_CallTesttestResolveArgumentsWithMissingParameterForArbitraryArgumentsOnFunction) |  |
| [Twig_Tests_Node_Expression_CallTest::testResolveArgumentsWithMissingParameterForArbitraryArgumentsOnObject](#Twig_Tests_Node_Expression_CallTesttestResolveArgumentsWithMissingParameterForArbitraryArgumentsOnObject) |  |
| [**Twig_Tests_Node_Expression_ConditionalTest**](#Twig_Tests_Node_Expression_ConditionalTest) |  |
| [Twig_Tests_Node_Expression_ConditionalTest::testConstructor](#Twig_Tests_Node_Expression_ConditionalTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_ConditionalTest::getTests](#Twig_Tests_Node_Expression_ConditionalTestgetTests) |  |
| [**Twig_Tests_Node_Expression_ConstantTest**](#Twig_Tests_Node_Expression_ConstantTest) |  |
| [Twig_Tests_Node_Expression_ConstantTest::testConstructor](#Twig_Tests_Node_Expression_ConstantTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_ConstantTest::getTests](#Twig_Tests_Node_Expression_ConstantTestgetTests) |  |
| [**Twig_Tests_Node_Expression_FilterTest**](#Twig_Tests_Node_Expression_FilterTest) |  |
| [Twig_Tests_Node_Expression_FilterTest::testConstructor](#Twig_Tests_Node_Expression_FilterTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_FilterTest::getTests](#Twig_Tests_Node_Expression_FilterTestgetTests) |  |
| [Twig_Tests_Node_Expression_FilterTest::testCompileWithWrongNamedArgumentName](#Twig_Tests_Node_Expression_FilterTesttestCompileWithWrongNamedArgumentName) |  |
| [Twig_Tests_Node_Expression_FilterTest::testCompileWithMissingNamedArgument](#Twig_Tests_Node_Expression_FilterTesttestCompileWithMissingNamedArgument) |  |
| [**Twig_Tests_Node_Expression_FunctionTest**](#Twig_Tests_Node_Expression_FunctionTest) |  |
| [Twig_Tests_Node_Expression_FunctionTest::testConstructor](#Twig_Tests_Node_Expression_FunctionTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_FunctionTest::getTests](#Twig_Tests_Node_Expression_FunctionTestgetTests) |  |
| [**Twig_Tests_Node_Expression_GetAttrTest**](#Twig_Tests_Node_Expression_GetAttrTest) |  |
| [Twig_Tests_Node_Expression_GetAttrTest::testConstructor](#Twig_Tests_Node_Expression_GetAttrTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_GetAttrTest::getTests](#Twig_Tests_Node_Expression_GetAttrTestgetTests) |  |
| [**Twig_Tests_Node_Expression_NameTest**](#Twig_Tests_Node_Expression_NameTest) |  |
| [Twig_Tests_Node_Expression_NameTest::testConstructor](#Twig_Tests_Node_Expression_NameTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_NameTest::getTests](#Twig_Tests_Node_Expression_NameTestgetTests) |  |
| [**Twig_Tests_Node_Expression_NullCoalesceTest**](#Twig_Tests_Node_Expression_NullCoalesceTest) |  |
| [Twig_Tests_Node_Expression_NullCoalesceTest::getTests](#Twig_Tests_Node_Expression_NullCoalesceTestgetTests) |  |
| [**Twig_Tests_Node_Expression_ParentTest**](#Twig_Tests_Node_Expression_ParentTest) |  |
| [Twig_Tests_Node_Expression_ParentTest::testConstructor](#Twig_Tests_Node_Expression_ParentTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_ParentTest::getTests](#Twig_Tests_Node_Expression_ParentTestgetTests) |  |
| [**Twig_Tests_Node_Expression_TestTest**](#Twig_Tests_Node_Expression_TestTest) |  |
| [Twig_Tests_Node_Expression_TestTest::testConstructor](#Twig_Tests_Node_Expression_TestTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_TestTest::getTests](#Twig_Tests_Node_Expression_TestTestgetTests) |  |
| [**Twig_Tests_Node_Expression_Unary_NegTest**](#Twig_Tests_Node_Expression_Unary_NegTest) |  |
| [Twig_Tests_Node_Expression_Unary_NegTest::testConstructor](#Twig_Tests_Node_Expression_Unary_NegTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_Unary_NegTest::getTests](#Twig_Tests_Node_Expression_Unary_NegTestgetTests) |  |
| [**Twig_Tests_Node_Expression_Unary_NotTest**](#Twig_Tests_Node_Expression_Unary_NotTest) |  |
| [Twig_Tests_Node_Expression_Unary_NotTest::testConstructor](#Twig_Tests_Node_Expression_Unary_NotTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_Unary_NotTest::getTests](#Twig_Tests_Node_Expression_Unary_NotTestgetTests) |  |
| [**Twig_Tests_Node_Expression_Unary_PosTest**](#Twig_Tests_Node_Expression_Unary_PosTest) |  |
| [Twig_Tests_Node_Expression_Unary_PosTest::testConstructor](#Twig_Tests_Node_Expression_Unary_PosTesttestConstructor) |  |
| [Twig_Tests_Node_Expression_Unary_PosTest::getTests](#Twig_Tests_Node_Expression_Unary_PosTestgetTests) |  |
| [**Twig_Tests_Node_ForTest**](#Twig_Tests_Node_ForTest) |  |
| [Twig_Tests_Node_ForTest::testConstructor](#Twig_Tests_Node_ForTesttestConstructor) |  |
| [Twig_Tests_Node_ForTest::getTests](#Twig_Tests_Node_ForTestgetTests) |  |
| [**Twig_Tests_Node_IfTest**](#Twig_Tests_Node_IfTest) |  |
| [Twig_Tests_Node_IfTest::testConstructor](#Twig_Tests_Node_IfTesttestConstructor) |  |
| [Twig_Tests_Node_IfTest::getTests](#Twig_Tests_Node_IfTestgetTests) |  |
| [**Twig_Tests_Node_ImportTest**](#Twig_Tests_Node_ImportTest) |  |
| [Twig_Tests_Node_ImportTest::testConstructor](#Twig_Tests_Node_ImportTesttestConstructor) |  |
| [Twig_Tests_Node_ImportTest::getTests](#Twig_Tests_Node_ImportTestgetTests) |  |
| [**Twig_Tests_Node_IncludeTest**](#Twig_Tests_Node_IncludeTest) |  |
| [Twig_Tests_Node_IncludeTest::testConstructor](#Twig_Tests_Node_IncludeTesttestConstructor) |  |
| [Twig_Tests_Node_IncludeTest::getTests](#Twig_Tests_Node_IncludeTestgetTests) |  |
| [**Twig_Tests_Node_MacroTest**](#Twig_Tests_Node_MacroTest) |  |
| [Twig_Tests_Node_MacroTest::testConstructor](#Twig_Tests_Node_MacroTesttestConstructor) |  |
| [Twig_Tests_Node_MacroTest::getTests](#Twig_Tests_Node_MacroTestgetTests) |  |
| [**Twig_Tests_Node_ModuleTest**](#Twig_Tests_Node_ModuleTest) |  |
| [Twig_Tests_Node_ModuleTest::testConstructor](#Twig_Tests_Node_ModuleTesttestConstructor) |  |
| [Twig_Tests_Node_ModuleTest::getTests](#Twig_Tests_Node_ModuleTestgetTests) |  |
| [**Twig_Tests_Node_PrintTest**](#Twig_Tests_Node_PrintTest) |  |
| [Twig_Tests_Node_PrintTest::testConstructor](#Twig_Tests_Node_PrintTesttestConstructor) |  |
| [Twig_Tests_Node_PrintTest::getTests](#Twig_Tests_Node_PrintTestgetTests) |  |
| [**Twig_Tests_Node_SandboxedPrintTest**](#Twig_Tests_Node_SandboxedPrintTest) |  |
| [Twig_Tests_Node_SandboxedPrintTest::testConstructor](#Twig_Tests_Node_SandboxedPrintTesttestConstructor) |  |
| [Twig_Tests_Node_SandboxedPrintTest::getTests](#Twig_Tests_Node_SandboxedPrintTestgetTests) |  |
| [**Twig_Tests_Node_SandboxTest**](#Twig_Tests_Node_SandboxTest) |  |
| [Twig_Tests_Node_SandboxTest::testConstructor](#Twig_Tests_Node_SandboxTesttestConstructor) |  |
| [Twig_Tests_Node_SandboxTest::getTests](#Twig_Tests_Node_SandboxTestgetTests) |  |
| [**Twig_Tests_Node_SetTest**](#Twig_Tests_Node_SetTest) |  |
| [Twig_Tests_Node_SetTest::testConstructor](#Twig_Tests_Node_SetTesttestConstructor) |  |
| [Twig_Tests_Node_SetTest::getTests](#Twig_Tests_Node_SetTestgetTests) |  |
| [**Twig_Tests_Node_SpacelessTest**](#Twig_Tests_Node_SpacelessTest) |  |
| [Twig_Tests_Node_SpacelessTest::testConstructor](#Twig_Tests_Node_SpacelessTesttestConstructor) |  |
| [Twig_Tests_Node_SpacelessTest::getTests](#Twig_Tests_Node_SpacelessTestgetTests) |  |
| [**Twig_Tests_Node_TextTest**](#Twig_Tests_Node_TextTest) |  |
| [Twig_Tests_Node_TextTest::testConstructor](#Twig_Tests_Node_TextTesttestConstructor) |  |
| [Twig_Tests_Node_TextTest::getTests](#Twig_Tests_Node_TextTestgetTests) |  |
| [**Twig_Tests_NodeVisitor_OptimizerTest**](#Twig_Tests_NodeVisitor_OptimizerTest) |  |
| [Twig_Tests_NodeVisitor_OptimizerTest::testRenderBlockOptimizer](#Twig_Tests_NodeVisitor_OptimizerTesttestRenderBlockOptimizer) |  |
| [Twig_Tests_NodeVisitor_OptimizerTest::testRenderParentBlockOptimizer](#Twig_Tests_NodeVisitor_OptimizerTesttestRenderParentBlockOptimizer) |  |
| [Twig_Tests_NodeVisitor_OptimizerTest::testForOptimizer](#Twig_Tests_NodeVisitor_OptimizerTesttestForOptimizer) |  |
| [Twig_Tests_NodeVisitor_OptimizerTest::getTestsForForOptimizer](#Twig_Tests_NodeVisitor_OptimizerTestgetTestsForForOptimizer) |  |
| [Twig_Tests_NodeVisitor_OptimizerTest::checkForConfiguration](#Twig_Tests_NodeVisitor_OptimizerTestcheckForConfiguration) |  |
| [**Twig_Tests_ParserTest**](#Twig_Tests_ParserTest) |  |
| [Twig_Tests_ParserTest::testUnknownTag](#Twig_Tests_ParserTesttestUnknownTag) |  |
| [Twig_Tests_ParserTest::testUnknownTagWithoutSuggestions](#Twig_Tests_ParserTesttestUnknownTagWithoutSuggestions) |  |
| [Twig_Tests_ParserTest::testFilterBodyNodes](#Twig_Tests_ParserTesttestFilterBodyNodes) |  |
| [Twig_Tests_ParserTest::getFilterBodyNodesData](#Twig_Tests_ParserTestgetFilterBodyNodesData) |  |
| [Twig_Tests_ParserTest::testFilterBodyNodesThrowsException](#Twig_Tests_ParserTesttestFilterBodyNodesThrowsException) |  |
| [Twig_Tests_ParserTest::getFilterBodyNodesDataThrowsException](#Twig_Tests_ParserTestgetFilterBodyNodesDataThrowsException) |  |
| [Twig_Tests_ParserTest::testFilterBodyNodesWithBOM](#Twig_Tests_ParserTesttestFilterBodyNodesWithBOM) |  |
| [Twig_Tests_ParserTest::testParseIsReentrant](#Twig_Tests_ParserTesttestParseIsReentrant) |  |
| [Twig_Tests_ParserTest::testGetVarName](#Twig_Tests_ParserTesttestGetVarName) |  |
| [**Twig_Tests_Profiler_Dumper_BlackfireTest**](#Twig_Tests_Profiler_Dumper_BlackfireTest) |  |
| [Twig_Tests_Profiler_Dumper_BlackfireTest::testDump](#Twig_Tests_Profiler_Dumper_BlackfireTesttestDump) |  |
| [**Twig_Tests_Profiler_Dumper_HtmlTest**](#Twig_Tests_Profiler_Dumper_HtmlTest) |  |
| [Twig_Tests_Profiler_Dumper_HtmlTest::testDump](#Twig_Tests_Profiler_Dumper_HtmlTesttestDump) |  |
| [**Twig_Tests_Profiler_Dumper_TextTest**](#Twig_Tests_Profiler_Dumper_TextTest) |  |
| [Twig_Tests_Profiler_Dumper_TextTest::testDump](#Twig_Tests_Profiler_Dumper_TextTesttestDump) |  |
| [**Twig_Tests_Profiler_ProfileTest**](#Twig_Tests_Profiler_ProfileTest) |  |
| [Twig_Tests_Profiler_ProfileTest::testConstructor](#Twig_Tests_Profiler_ProfileTesttestConstructor) |  |
| [Twig_Tests_Profiler_ProfileTest::testIsRoot](#Twig_Tests_Profiler_ProfileTesttestIsRoot) |  |
| [Twig_Tests_Profiler_ProfileTest::testIsTemplate](#Twig_Tests_Profiler_ProfileTesttestIsTemplate) |  |
| [Twig_Tests_Profiler_ProfileTest::testIsBlock](#Twig_Tests_Profiler_ProfileTesttestIsBlock) |  |
| [Twig_Tests_Profiler_ProfileTest::testIsMacro](#Twig_Tests_Profiler_ProfileTesttestIsMacro) |  |
| [Twig_Tests_Profiler_ProfileTest::testGetAddProfile](#Twig_Tests_Profiler_ProfileTesttestGetAddProfile) |  |
| [Twig_Tests_Profiler_ProfileTest::testGetDuration](#Twig_Tests_Profiler_ProfileTesttestGetDuration) |  |
| [Twig_Tests_Profiler_ProfileTest::testSerialize](#Twig_Tests_Profiler_ProfileTesttestSerialize) |  |
| [**Twig_Tests_TemplateTest**](#Twig_Tests_TemplateTest) |  |
| [Twig_Tests_TemplateTest::testDisplayBlocksAcceptTemplateOnlyAsBlocks](#Twig_Tests_TemplateTesttestDisplayBlocksAcceptTemplateOnlyAsBlocks) |  |
| [Twig_Tests_TemplateTest::testGetAttributeExceptions](#Twig_Tests_TemplateTesttestGetAttributeExceptions) |  |
| [Twig_Tests_TemplateTest::getAttributeExceptions](#Twig_Tests_TemplateTestgetAttributeExceptions) |  |
| [Twig_Tests_TemplateTest::testGetAttributeWithSandbox](#Twig_Tests_TemplateTesttestGetAttributeWithSandbox) |  |
| [Twig_Tests_TemplateTest::getGetAttributeWithSandbox](#Twig_Tests_TemplateTestgetGetAttributeWithSandbox) |  |
| [Twig_Tests_TemplateTest::testRenderBlockWithUndefinedBlock](#Twig_Tests_TemplateTesttestRenderBlockWithUndefinedBlock) |  |
| [Twig_Tests_TemplateTest::testDisplayBlockWithUndefinedBlock](#Twig_Tests_TemplateTesttestDisplayBlockWithUndefinedBlock) |  |
| [Twig_Tests_TemplateTest::testGetAttributeOnArrayWithConfusableKey](#Twig_Tests_TemplateTesttestGetAttributeOnArrayWithConfusableKey) |  |
| [Twig_Tests_TemplateTest::testGetAttribute](#Twig_Tests_TemplateTesttestGetAttribute) |  |
| [Twig_Tests_TemplateTest::testGetAttributeStrict](#Twig_Tests_TemplateTesttestGetAttributeStrict) |  |
| [Twig_Tests_TemplateTest::testGetAttributeDefined](#Twig_Tests_TemplateTesttestGetAttributeDefined) |  |
| [Twig_Tests_TemplateTest::testGetAttributeDefinedStrict](#Twig_Tests_TemplateTesttestGetAttributeDefinedStrict) |  |
| [Twig_Tests_TemplateTest::testGetAttributeCallExceptions](#Twig_Tests_TemplateTesttestGetAttributeCallExceptions) |  |
| [Twig_Tests_TemplateTest::getGetAttributeTests](#Twig_Tests_TemplateTestgetGetAttributeTests) |  |
| [**Twig_Tests_TemplateWrapperTest**](#Twig_Tests_TemplateWrapperTest) |  |
| [Twig_Tests_TemplateWrapperTest::testHasGetBlocks](#Twig_Tests_TemplateWrapperTesttestHasGetBlocks) |  |
| [Twig_Tests_TemplateWrapperTest::testRenderBlock](#Twig_Tests_TemplateWrapperTesttestRenderBlock) |  |
| [Twig_Tests_TemplateWrapperTest::testDisplayBlock](#Twig_Tests_TemplateWrapperTesttestDisplayBlock) |  |
| [**Twig_Tests_TokenStreamTest**](#Twig_Tests_TokenStreamTest) |  |
| [Twig_Tests_TokenStreamTest::testNext](#Twig_Tests_TokenStreamTesttestNext) |  |
| [Twig_Tests_TokenStreamTest::testEndOfTemplateNext](#Twig_Tests_TokenStreamTesttestEndOfTemplateNext) |  |
| [Twig_Tests_TokenStreamTest::testEndOfTemplateLook](#Twig_Tests_TokenStreamTesttestEndOfTemplateLook) |  |
| [**Twig_Token**](#Twig_Token) | Represents a Token. |
| [Twig_Token::__construct](#Twig_Token__construct) |  |
| [Twig_Token::__toString](#Twig_Token__toString) |  |
| [Twig_Token::test](#Twig_Tokentest) | Tests the current token for a type and/or a value. |
| [Twig_Token::getLine](#Twig_TokengetLine) |  |
| [Twig_Token::getType](#Twig_TokengetType) |  |
| [Twig_Token::getValue](#Twig_TokengetValue) |  |
| [Twig_Token::typeToString](#Twig_TokentypeToString) | Returns the constant representation (internal) of a given type. |
| [Twig_Token::typeToEnglish](#Twig_TokentypeToEnglish) | Returns the English representation of a given type. |
| [**Twig_TokenParser_AutoEscape**](#Twig_TokenParser_AutoEscape) | Marks a section of a template to be escaped or not. |
| [Twig_TokenParser_AutoEscape::parse](#Twig_TokenParser_AutoEscapeparse) |  |
| [Twig_TokenParser_AutoEscape::decideBlockEnd](#Twig_TokenParser_AutoEscapedecideBlockEnd) |  |
| [Twig_TokenParser_AutoEscape::getTag](#Twig_TokenParser_AutoEscapegetTag) |  |
| [**Twig_TokenParser_Block**](#Twig_TokenParser_Block) | Marks a section of a template as being reusable. |
| [Twig_TokenParser_Block::parse](#Twig_TokenParser_Blockparse) |  |
| [Twig_TokenParser_Block::decideBlockEnd](#Twig_TokenParser_BlockdecideBlockEnd) |  |
| [Twig_TokenParser_Block::getTag](#Twig_TokenParser_BlockgetTag) |  |
| [**Twig_TokenParser_Do**](#Twig_TokenParser_Do) | Evaluates an expression, discarding the returned value. |
| [Twig_TokenParser_Do::parse](#Twig_TokenParser_Doparse) |  |
| [Twig_TokenParser_Do::getTag](#Twig_TokenParser_DogetTag) |  |
| [**Twig_TokenParser_Embed**](#Twig_TokenParser_Embed) | Embeds a template. |
| [Twig_TokenParser_Embed::parse](#Twig_TokenParser_Embedparse) |  |
| [Twig_TokenParser_Embed::decideBlockEnd](#Twig_TokenParser_EmbeddecideBlockEnd) |  |
| [Twig_TokenParser_Embed::getTag](#Twig_TokenParser_EmbedgetTag) |  |
| [**Twig_TokenParser_Extends**](#Twig_TokenParser_Extends) | Extends a template by another one. |
| [Twig_TokenParser_Extends::parse](#Twig_TokenParser_Extendsparse) |  |
| [Twig_TokenParser_Extends::getTag](#Twig_TokenParser_ExtendsgetTag) |  |
| [**Twig_TokenParser_Filter**](#Twig_TokenParser_Filter) | Filters a section of a template by applying filters. |
| [Twig_TokenParser_Filter::parse](#Twig_TokenParser_Filterparse) |  |
| [Twig_TokenParser_Filter::decideBlockEnd](#Twig_TokenParser_FilterdecideBlockEnd) |  |
| [Twig_TokenParser_Filter::getTag](#Twig_TokenParser_FiltergetTag) |  |
| [**Twig_TokenParser_Flush**](#Twig_TokenParser_Flush) | Flushes the output to the client. |
| [Twig_TokenParser_Flush::parse](#Twig_TokenParser_Flushparse) |  |
| [Twig_TokenParser_Flush::getTag](#Twig_TokenParser_FlushgetTag) |  |
| [**Twig_TokenParser_For**](#Twig_TokenParser_For) | Loops over each item of a sequence. |
| [Twig_TokenParser_For::parse](#Twig_TokenParser_Forparse) |  |
| [Twig_TokenParser_For::decideForFork](#Twig_TokenParser_FordecideForFork) |  |
| [Twig_TokenParser_For::decideForEnd](#Twig_TokenParser_FordecideForEnd) |  |
| [Twig_TokenParser_For::getTag](#Twig_TokenParser_ForgetTag) |  |
| [**Twig_TokenParser_From**](#Twig_TokenParser_From) | Imports macros. |
| [Twig_TokenParser_From::parse](#Twig_TokenParser_Fromparse) |  |
| [Twig_TokenParser_From::getTag](#Twig_TokenParser_FromgetTag) |  |
| [**Twig_TokenParser_If**](#Twig_TokenParser_If) | Tests a condition. |
| [Twig_TokenParser_If::parse](#Twig_TokenParser_Ifparse) |  |
| [Twig_TokenParser_If::decideIfFork](#Twig_TokenParser_IfdecideIfFork) |  |
| [Twig_TokenParser_If::decideIfEnd](#Twig_TokenParser_IfdecideIfEnd) |  |
| [Twig_TokenParser_If::getTag](#Twig_TokenParser_IfgetTag) |  |
| [**Twig_TokenParser_Import**](#Twig_TokenParser_Import) | Imports macros. |
| [Twig_TokenParser_Import::parse](#Twig_TokenParser_Importparse) |  |
| [Twig_TokenParser_Import::getTag](#Twig_TokenParser_ImportgetTag) |  |
| [**Twig_TokenParser_Include**](#Twig_TokenParser_Include) | Includes a template. |
| [Twig_TokenParser_Include::parse](#Twig_TokenParser_Includeparse) |  |
| [Twig_TokenParser_Include::getTag](#Twig_TokenParser_IncludegetTag) |  |
| [**Twig_TokenParser_Macro**](#Twig_TokenParser_Macro) | Defines a macro. |
| [Twig_TokenParser_Macro::parse](#Twig_TokenParser_Macroparse) |  |
| [Twig_TokenParser_Macro::decideBlockEnd](#Twig_TokenParser_MacrodecideBlockEnd) |  |
| [Twig_TokenParser_Macro::getTag](#Twig_TokenParser_MacrogetTag) |  |
| [**Twig_TokenParser_Sandbox**](#Twig_TokenParser_Sandbox) | Marks a section of a template as untrusted code that must be evaluated in the sandbox mode. |
| [Twig_TokenParser_Sandbox::parse](#Twig_TokenParser_Sandboxparse) |  |
| [Twig_TokenParser_Sandbox::decideBlockEnd](#Twig_TokenParser_SandboxdecideBlockEnd) |  |
| [Twig_TokenParser_Sandbox::getTag](#Twig_TokenParser_SandboxgetTag) |  |
| [**Twig_TokenParser_Set**](#Twig_TokenParser_Set) | Defines a variable. |
| [Twig_TokenParser_Set::parse](#Twig_TokenParser_Setparse) |  |
| [Twig_TokenParser_Set::decideBlockEnd](#Twig_TokenParser_SetdecideBlockEnd) |  |
| [Twig_TokenParser_Set::getTag](#Twig_TokenParser_SetgetTag) |  |
| [**Twig_TokenParser_Spaceless**](#Twig_TokenParser_Spaceless) | Remove whitespaces between HTML tags. |
| [Twig_TokenParser_Spaceless::parse](#Twig_TokenParser_Spacelessparse) |  |
| [Twig_TokenParser_Spaceless::decideSpacelessEnd](#Twig_TokenParser_SpacelessdecideSpacelessEnd) |  |
| [Twig_TokenParser_Spaceless::getTag](#Twig_TokenParser_SpacelessgetTag) |  |
| [**Twig_TokenParser_Use**](#Twig_TokenParser_Use) | Imports blocks defined in another template into the current template. |
| [Twig_TokenParser_Use::parse](#Twig_TokenParser_Useparse) |  |
| [Twig_TokenParser_Use::getTag](#Twig_TokenParser_UsegetTag) |  |
| [**Twig_TokenParser_With**](#Twig_TokenParser_With) | Creates a nested scope. |
| [Twig_TokenParser_With::parse](#Twig_TokenParser_Withparse) |  |
| [Twig_TokenParser_With::decideWithEnd](#Twig_TokenParser_WithdecideWithEnd) |  |
| [Twig_TokenParser_With::getTag](#Twig_TokenParser_WithgetTag) |  |
| [**Twig_TokenStream**](#Twig_TokenStream) | Represents a token stream. |
| [Twig_TokenStream::__construct](#Twig_TokenStream__construct) |  |
| [Twig_TokenStream::__toString](#Twig_TokenStream__toString) |  |
| [Twig_TokenStream::injectTokens](#Twig_TokenStreaminjectTokens) |  |
| [Twig_TokenStream::next](#Twig_TokenStreamnext) | Sets the pointer to the next token and returns the old one. |
| [Twig_TokenStream::nextIf](#Twig_TokenStreamnextIf) | Tests a token, sets the pointer to the next one and returns it or throws a syntax error. |
| [Twig_TokenStream::expect](#Twig_TokenStreamexpect) | Tests a token and returns it or throws a syntax error. |
| [Twig_TokenStream::look](#Twig_TokenStreamlook) | Looks at the next token. |
| [Twig_TokenStream::test](#Twig_TokenStreamtest) | Tests the current token. |
| [Twig_TokenStream::isEOF](#Twig_TokenStreamisEOF) | Checks if end of stream was reached. |
| [Twig_TokenStream::getCurrent](#Twig_TokenStreamgetCurrent) |  |
| [**Twig_Util_DeprecationCollector**](#Twig_Util_DeprecationCollector) |  |
| [Twig_Util_DeprecationCollector::__construct](#Twig_Util_DeprecationCollector__construct) |  |
| [Twig_Util_DeprecationCollector::collectDir](#Twig_Util_DeprecationCollectorcollectDir) | Returns deprecations for templates contained in a directory. |
| [Twig_Util_DeprecationCollector::collect](#Twig_Util_DeprecationCollectorcollect) | Returns deprecations for passed templates. |
| [**Twig_Util_TemplateDirIterator**](#Twig_Util_TemplateDirIterator) |  |
| [Twig_Util_TemplateDirIterator::current](#Twig_Util_TemplateDirIteratorcurrent) |  |
| [Twig_Util_TemplateDirIterator::key](#Twig_Util_TemplateDirIteratorkey) |  |
| [**TwigTestExtension**](#TwigTestExtension) |  |
| [TwigTestExtension::getTokenParsers](#TwigTestExtensiongetTokenParsers) | Returns the token parser instances to add to the existing list. |
| [TwigTestExtension::getFilters](#TwigTestExtensiongetFilters) | Returns a list of filters to add to the existing list. |
| [TwigTestExtension::getFunctions](#TwigTestExtensiongetFunctions) | Returns a list of functions to add to the existing list. |
| [TwigTestExtension::getTests](#TwigTestExtensiongetTests) | Returns a list of tests to add to the existing list. |
| [TwigTestExtension::§Filter](#TwigTestExtension§Filter) |  |
| [TwigTestExtension::§Function](#TwigTestExtension§Function) |  |
| [TwigTestExtension::escape_and_nl2br](#TwigTestExtensionescape_and_nl2br) | nl2br which also escapes, for testing escaper filters. |
| [TwigTestExtension::nl2br](#TwigTestExtensionnl2br) | nl2br only, for testing filters with pre_escape. |
| [TwigTestExtension::dynamic_path](#TwigTestExtensiondynamic_path) |  |
| [TwigTestExtension::dynamic_foo](#TwigTestExtensiondynamic_foo) |  |
| [TwigTestExtension::escape_something](#TwigTestExtensionescape_something) |  |
| [TwigTestExtension::preserves_safety](#TwigTestExtensionpreserves_safety) |  |
| [TwigTestExtension::staticCall](#TwigTestExtensionstaticCall) |  |
| [TwigTestExtension::br](#TwigTestExtensionbr) |  |
| [TwigTestExtension::is_multi_word](#TwigTestExtensionis_multi_word) |  |
| [TwigTestExtension::__call](#TwigTestExtension__call) |  |
| [TwigTestExtension::__callStatic](#TwigTestExtension__callStatic) |  |
| [**TwigTestFoo**](#TwigTestFoo) |  |
| [TwigTestFoo::bar](#TwigTestFoobar) |  |
| [TwigTestFoo::getFoo](#TwigTestFoogetFoo) |  |
| [TwigTestFoo::getSelf](#TwigTestFoogetSelf) |  |
| [TwigTestFoo::is](#TwigTestFoois) |  |
| [TwigTestFoo::in](#TwigTestFooin) |  |
| [TwigTestFoo::not](#TwigTestFoonot) |  |
| [TwigTestFoo::strToLower](#TwigTestFoostrToLower) |  |
| [TwigTestFoo::rewind](#TwigTestFoorewind) |  |
| [TwigTestFoo::current](#TwigTestFoocurrent) |  |
| [TwigTestFoo::key](#TwigTestFookey) |  |
| [TwigTestFoo::next](#TwigTestFoonext) |  |
| [TwigTestFoo::valid](#TwigTestFoovalid) |  |
| [**TwigTestTokenParser_§**](#TwigTestTokenParser_§) | Base class for all token parsers. |
| [TwigTestTokenParser_§::parse](#TwigTestTokenParser_§parse) |  |
| [TwigTestTokenParser_§::getTag](#TwigTestTokenParser_§getTag) |  |
| [**twitterPluginAction**](#twitterPluginAction) |  |
| [twitterPluginAction::onCompleted](#twitterPluginActiononCompleted) |  |
| [**UnableToCheckDirectoryExistence**](#UnableToCheckDirectoryExistence) |  |
| [UnableToCheckDirectoryExistence::operation](#UnableToCheckDirectoryExistenceoperation) |  |
| [**UnableToCheckExistence**](#UnableToCheckExistence) |  |
| [UnableToCheckExistence::forLocation](#UnableToCheckExistenceforLocation) |  |
| [UnableToCheckExistence::operation](#UnableToCheckExistenceoperation) |  |
| [**UnableToCheckFileExistence**](#UnableToCheckFileExistence) |  |
| [UnableToCheckFileExistence::operation](#UnableToCheckFileExistenceoperation) |  |
| [**UnableToCopyFile**](#UnableToCopyFile) |  |
| [UnableToCopyFile::source](#UnableToCopyFilesource) |  |
| [UnableToCopyFile::destination](#UnableToCopyFiledestination) |  |
| [UnableToCopyFile::fromLocationTo](#UnableToCopyFilefromLocationTo) |  |
| [UnableToCopyFile::operation](#UnableToCopyFileoperation) |  |
| [**UnableToCreateDirectory**](#UnableToCreateDirectory) |  |
| [UnableToCreateDirectory::atLocation](#UnableToCreateDirectoryatLocation) |  |
| [UnableToCreateDirectory::dueToFailure](#UnableToCreateDirectorydueToFailure) |  |
| [UnableToCreateDirectory::operation](#UnableToCreateDirectoryoperation) |  |
| [UnableToCreateDirectory::location](#UnableToCreateDirectorylocation) |  |
| [**UnableToDeleteDirectory**](#UnableToDeleteDirectory) |  |
| [UnableToDeleteDirectory::atLocation](#UnableToDeleteDirectoryatLocation) |  |
| [UnableToDeleteDirectory::operation](#UnableToDeleteDirectoryoperation) |  |
| [UnableToDeleteDirectory::reason](#UnableToDeleteDirectoryreason) |  |
| [UnableToDeleteDirectory::location](#UnableToDeleteDirectorylocation) |  |
| [**UnableToDeleteFile**](#UnableToDeleteFile) |  |
| [UnableToDeleteFile::atLocation](#UnableToDeleteFileatLocation) |  |
| [UnableToDeleteFile::operation](#UnableToDeleteFileoperation) |  |
| [UnableToDeleteFile::reason](#UnableToDeleteFilereason) |  |
| [UnableToDeleteFile::location](#UnableToDeleteFilelocation) |  |
| [**UnableToMountFilesystem**](#UnableToMountFilesystem) |  |
| [UnableToMountFilesystem::becauseTheKeyIsNotValid](#UnableToMountFilesystembecauseTheKeyIsNotValid) |  |
| [UnableToMountFilesystem::becauseTheFilesystemWasNotValid](#UnableToMountFilesystembecauseTheFilesystemWasNotValid) |  |
| [**UnableToMoveFile**](#UnableToMoveFile) |  |
| [UnableToMoveFile::source](#UnableToMoveFilesource) |  |
| [UnableToMoveFile::destination](#UnableToMoveFiledestination) |  |
| [UnableToMoveFile::fromLocationTo](#UnableToMoveFilefromLocationTo) |  |
| [UnableToMoveFile::operation](#UnableToMoveFileoperation) |  |
| [**UnableToReadFile**](#UnableToReadFile) |  |
| [UnableToReadFile::fromLocation](#UnableToReadFilefromLocation) |  |
| [UnableToReadFile::operation](#UnableToReadFileoperation) |  |
| [UnableToReadFile::reason](#UnableToReadFilereason) |  |
| [UnableToReadFile::location](#UnableToReadFilelocation) |  |
| [**UnableToResolveFilesystemMount**](#UnableToResolveFilesystemMount) |  |
| [UnableToResolveFilesystemMount::becauseTheSeparatorIsMissing](#UnableToResolveFilesystemMountbecauseTheSeparatorIsMissing) |  |
| [UnableToResolveFilesystemMount::becauseTheMountWasNotRegistered](#UnableToResolveFilesystemMountbecauseTheMountWasNotRegistered) |  |
| [**UnableToRetrieveMetadata**](#UnableToRetrieveMetadata) |  |
| [UnableToRetrieveMetadata::lastModified](#UnableToRetrieveMetadatalastModified) |  |
| [UnableToRetrieveMetadata::visibility](#UnableToRetrieveMetadatavisibility) |  |
| [UnableToRetrieveMetadata::fileSize](#UnableToRetrieveMetadatafileSize) |  |
| [UnableToRetrieveMetadata::mimeType](#UnableToRetrieveMetadatamimeType) |  |
| [UnableToRetrieveMetadata::create](#UnableToRetrieveMetadatacreate) |  |
| [UnableToRetrieveMetadata::reason](#UnableToRetrieveMetadatareason) |  |
| [UnableToRetrieveMetadata::location](#UnableToRetrieveMetadatalocation) |  |
| [UnableToRetrieveMetadata::metadataType](#UnableToRetrieveMetadatametadataType) |  |
| [UnableToRetrieveMetadata::operation](#UnableToRetrieveMetadataoperation) |  |
| [**UnableToSetVisibility**](#UnableToSetVisibility) |  |
| [UnableToSetVisibility::reason](#UnableToSetVisibilityreason) |  |
| [UnableToSetVisibility::atLocation](#UnableToSetVisibilityatLocation) |  |
| [UnableToSetVisibility::operation](#UnableToSetVisibilityoperation) |  |
| [UnableToSetVisibility::location](#UnableToSetVisibilitylocation) |  |
| [**UnableToWriteFile**](#UnableToWriteFile) |  |
| [UnableToWriteFile::atLocation](#UnableToWriteFileatLocation) |  |
| [UnableToWriteFile::operation](#UnableToWriteFileoperation) |  |
| [UnableToWriteFile::reason](#UnableToWriteFilereason) |  |
| [UnableToWriteFile::location](#UnableToWriteFilelocation) |  |
| [**UnreadableFileEncountered**](#UnreadableFileEncountered) |  |
| [UnreadableFileEncountered::location](#UnreadableFileEncounteredlocation) |  |
| [UnreadableFileEncountered::atLocation](#UnreadableFileEncounteredatLocation) |  |
| [**Visibility**](#Visibility) |  |
| [**WhitespacePathNormalizer**](#WhitespacePathNormalizer) |  |
| [WhitespacePathNormalizer::normalizePath](#WhitespacePathNormalizernormalizePath) |  |
| [**whitespacesRemover**](#whitespacesRemover) |  |
| [whitespacesRemover::process](#whitespacesRemoverprocess) |  |
| [**youtubePluginAction**](#youtubePluginAction) |  |
| [youtubePluginAction::onBeforeRequest](#youtubePluginActiononBeforeRequest) |  |
| [youtubePluginAction::onCompleted](#youtubePluginActiononCompleted) |  |

## attributesSimplifier





* Full name: \yxorP\minify\attributesSimplifier
* Parent class: \yxorP\minify\areplacer
* This class implements: \yxorP\minify\minfyInterface


### attributesSimplifier::getReplacePatternData



```php
attributesSimplifier::getReplacePatternData(  ): array
```





**Return Value:**





---
## blockListPluginAction





* Full name: \blockListPluginAction
* Parent class: \yxorP\http\wrapper


### blockListPluginAction::onBeforeRequest



```php
blockListPluginAction::onBeforeRequest(  ): void
```





**Return Value:**





---
### blockListPluginAction::callable



```php
blockListPluginAction::callable( mixed fnc_custom, mixed url ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `fnc_custom` | **mixed** |  |
| `url` | **mixed** |  |


**Return Value:**





---
## bugsnagHandlerAction





* Full name: \bugsnagHandlerAction
* Parent class: \yxorP\http\wrapper


### bugsnagHandlerAction::onBuildException



```php
bugsnagHandlerAction::onBuildException( mixed e ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `e` | **mixed** |  |


**Return Value:**





---
## cache





* Full name: \yxorP\http\cache


### cache::clearAll



```php
cache::clearAll(  ): void
```



* This method is **static**.

**Return Value:**





---
### cache::super



```php
cache::super(  ): void
```





**Return Value:**





---
### cache::get



```php
cache::get(  ): void
```





**Return Value:**





---
### cache::isValid



```php
cache::isValid(  ): bool
```





**Return Value:**





---
### cache::cache



```php
cache::cache(  ): mixed
```



* This method is **static**.

**Return Value:**





---
### cache::set



```php
cache::set( mixed val ): \yxorP\http\cache
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `val` | **mixed** |  |


**Return Value:**





---
## cacheStoreAction





* Full name: \cacheStoreAction
* Parent class: \yxorP\http\wrapper


### cacheStoreAction::onCompleted



```php
cacheStoreAction::onCompleted(  ): void
```





**Return Value:**





---
## CallableTestClass





* Full name: \CallableTestClass


### CallableTestClass::__invoke



```php
CallableTestClass::__invoke( mixed required ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `required` | **mixed** |  |


**Return Value:**





---
## checkFilesAction





* Full name: \checkFilesAction
* Parent class: \yxorP\http\wrapper


### checkFilesAction::buildIncludes



```php
checkFilesAction::buildIncludes(  ): mixed
```





**Return Value:**





---
## ClassLoader

ClassLoader implements a PSR-0, PSR-4 and classmap class loader.

$loader = new \Composer\Autoload\ClassLoader();

    // register classes with namespaces
    $loader->add('Symfony\Component', __DIR__.'/component');
    $loader->add('Symfony',           __DIR__.'/framework');

    // activate the autoloader
    $loader->register();

    // to enable searching the include path (eg. for PEAR packages)
    $loader->setUseIncludePath(true);

In this example, if you try to use a class in the Symfony\Component
namespace or one of its children (Symfony\Component\Console for instance),
the autoloader will first look for the class under the component/
directory, and it will then fallback to the framework/ directory if not
found before giving up.

This class is loosely based on the Symfony UniversalClassLoader.

* Full name: \Composer\Autoload\ClassLoader

**See Also:**

* https://www.php-fig.org/psr/psr-0/ - * https://www.php-fig.org/psr/psr-4/ - 

### ClassLoader::__construct



```php
ClassLoader::__construct( ?string vendorDir = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `vendorDir` | **?string** |  |


**Return Value:**





---
### ClassLoader::getPrefixes



```php
ClassLoader::getPrefixes(  ): string[]
```





**Return Value:**





---
### ClassLoader::getPrefixesPsr4



```php
ClassLoader::getPrefixesPsr4(  ): array[]
```





**Return Value:**





---
### ClassLoader::getFallbackDirs



```php
ClassLoader::getFallbackDirs(  ): array[]
```





**Return Value:**





---
### ClassLoader::getFallbackDirsPsr4



```php
ClassLoader::getFallbackDirsPsr4(  ): array[]
```





**Return Value:**





---
### ClassLoader::getClassMap



```php
ClassLoader::getClassMap(  ): string[]
```





**Return Value:**

Array of classname => path



---
### ClassLoader::addClassMap



```php
ClassLoader::addClassMap( string[] classMap ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `classMap` | **string[]** | Class to filename map |


**Return Value:**





---
### ClassLoader::add

Registers a set of PSR-0 directories for a given prefix, either
appending or prepending to the ones previously set for this prefix.

```php
ClassLoader::add( string prefix, string[]|string paths, bool prepend = false ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `prefix` | **string** | The prefix |
| `paths` | **string[]\|string** | The PSR-0 root directories |
| `prepend` | **bool** | Whether to prepend the directories |


**Return Value:**





---
### ClassLoader::addPsr4

Registers a set of PSR-4 directories for a given namespace, either
appending or prepending to the ones previously set for this namespace.

```php
ClassLoader::addPsr4( string prefix, string[]|string paths, bool prepend = false ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `prefix` | **string** | The prefix/namespace, with trailing &#039;\\&#039; |
| `paths` | **string[]\|string** | The PSR-4 base directories |
| `prepend` | **bool** | Whether to prepend the directories |


**Return Value:**





---
### ClassLoader::set

Registers a set of PSR-0 directories for a given prefix,
replacing any others previously set for this prefix.

```php
ClassLoader::set( string prefix, string[]|string paths ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `prefix` | **string** | The prefix |
| `paths` | **string[]\|string** | The PSR-0 base directories |


**Return Value:**





---
### ClassLoader::setPsr4

Registers a set of PSR-4 directories for a given namespace,
replacing any others previously set for this namespace.

```php
ClassLoader::setPsr4( string prefix, string[]|string paths ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `prefix` | **string** | The prefix/namespace, with trailing &#039;\\&#039; |
| `paths` | **string[]\|string** | The PSR-4 base directories |


**Return Value:**





---
### ClassLoader::setUseIncludePath

Turns on searching the include path for class files.

```php
ClassLoader::setUseIncludePath( bool useIncludePath ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `useIncludePath` | **bool** |  |


**Return Value:**





---
### ClassLoader::getUseIncludePath

Can be used to check if the autoloader uses the include path to check
for classes.

```php
ClassLoader::getUseIncludePath(  ): bool
```





**Return Value:**





---
### ClassLoader::setClassMapAuthoritative

Turns off searching the prefix and fallback directories for classes
that have not been registered with the class map.

```php
ClassLoader::setClassMapAuthoritative( bool classMapAuthoritative ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `classMapAuthoritative` | **bool** |  |


**Return Value:**





---
### ClassLoader::isClassMapAuthoritative

Should class lookup fail if not found in the current class map?

```php
ClassLoader::isClassMapAuthoritative(  ): bool
```





**Return Value:**





---
### ClassLoader::setApcuPrefix

APCu prefix to use to cache found/not-found classes, if the extension is enabled.

```php
ClassLoader::setApcuPrefix( string|null apcuPrefix ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `apcuPrefix` | **string\|null** |  |


**Return Value:**





---
### ClassLoader::getApcuPrefix

The APCu prefix in use, or null if APCu caching is not enabled.

```php
ClassLoader::getApcuPrefix(  ): string|null
```





**Return Value:**





---
### ClassLoader::register

Registers this instance as an autoloader.

```php
ClassLoader::register( bool prepend = false ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `prepend` | **bool** | Whether to prepend the autoloader or not |


**Return Value:**





---
### ClassLoader::unregister

Unregisters this instance as an autoloader.

```php
ClassLoader::unregister(  ): void
```





**Return Value:**





---
### ClassLoader::loadClass

Loads the given class or interface.

```php
ClassLoader::loadClass( string class ): true|null
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `class` | **string** | The name of the class |


**Return Value:**

True if loaded, null otherwise



---
### ClassLoader::findFile

Finds the path to the file where the class is defined.

```php
ClassLoader::findFile( string class ): string|false
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `class` | **string** | The name of the class |


**Return Value:**

The path if found, false otherwise



---
### ClassLoader::getRegisteredLoaders

Returns the currently registered loaders indexed by their corresponding vendor directories.

```php
ClassLoader::getRegisteredLoaders(  ): self[]
```



* This method is **static**.

**Return Value:**





---
## ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40





* Full name: \ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40


### ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40::loadClassLoader



```php
ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40::loadClassLoader( mixed class ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `class` | **mixed** |  |


**Return Value:**





---
### ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40::getLoader



```php
ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40::getLoader(  ): \Composer\Autoload\ClassLoader
```



* This method is **static**.

**Return Value:**





---
## ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40





* Full name: \Composer\Autoload\ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40


### ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40::getInitializer



```php
ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40::getInitializer( \Composer\Autoload\ClassLoader loader ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `loader` | **\Composer\Autoload\ClassLoader** |  |


**Return Value:**





---
## Config





* Full name: \League\Flysystem\Config


### Config::__construct



```php
Config::__construct( array options = [] ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `options` | **array** |  |


**Return Value:**





---
### Config::get



```php
Config::get( string property, mixed default = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `property` | **string** |  |
| `default` | **mixed** |  |


**Return Value:**





---
### Config::extend



```php
Config::extend( array options ): \League\Flysystem\Config
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `options` | **array** |  |


**Return Value:**





---
### Config::withDefaults



```php
Config::withDefaults( array defaults ): \League\Flysystem\Config
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `defaults` | **array** |  |


**Return Value:**





---
## constants





* Full name: \yxorP\inc\constants


### constants::create



```php
constants::create( _dir ): void
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `_dir` | **** |  |


**Return Value:**





---
### constants::env



```php
constants::env( line ): void
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `line` | **** |  |


**Return Value:**





---
### constants::set



```php
constants::set( _name, _value ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `_name` | **** |  |
| `_value` | **** |  |


**Return Value:**





---
### constants::localise



```php
constants::localise( _req ): void
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `_req` | **** |  |


**Return Value:**





---
### constants::get



```php
constants::get( _name ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `_name` | **** |  |


**Return Value:**





---
## cookiePluginAction





* Full name: \cookiePluginAction
* Parent class: \yxorP\http\wrapper


### cookiePluginAction::onBeforeRequest



```php
cookiePluginAction::onBeforeRequest(  ): void
```





**Return Value:**





---
### cookiePluginAction::beforeRequest



```php
cookiePluginAction::beforeRequest( mixed match ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `match` | **mixed** |  |


**Return Value:**





---
### cookiePluginAction::onHeadersReceived



```php
cookiePluginAction::onHeadersReceived(  ): void
```





**Return Value:**





---
### cookiePluginAction::headersReceived



```php
cookiePluginAction::headersReceived( mixed response, mixed set_cookie ): void
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `response` | **mixed** |  |
| `set_cookie` | **mixed** |  |


**Return Value:**





---
### cookiePluginAction::Received



```php
cookiePluginAction::Received( mixed line ): void
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `line` | **mixed** |  |


**Return Value:**





---
## CoreTestIterator





* Full name: \CoreTestIterator
* This class implements: \Iterator


### CoreTestIterator::__construct



```php
CoreTestIterator::__construct( array values, array keys, mixed allowValueAccess = false, mixed maxPosition = false ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `values` | **array** |  |
| `keys` | **array** |  |
| `allowValueAccess` | **mixed** |  |
| `maxPosition` | **mixed** |  |


**Return Value:**





---
### CoreTestIterator::rewind



```php
CoreTestIterator::rewind(  ): mixed
```





**Return Value:**





---
### CoreTestIterator::current



```php
CoreTestIterator::current(  ): mixed
```





**Return Value:**





---
### CoreTestIterator::key



```php
CoreTestIterator::key(  ): mixed
```





**Return Value:**





---
### CoreTestIterator::next



```php
CoreTestIterator::next(  ): mixed
```





**Return Value:**





---
### CoreTestIterator::valid



```php
CoreTestIterator::valid(  ): mixed
```





**Return Value:**





---
## CoreTestIteratorAggregate





* Full name: \CoreTestIteratorAggregate
* This class implements: \IteratorAggregate


### CoreTestIteratorAggregate::__construct



```php
CoreTestIteratorAggregate::__construct( array array, array keys, mixed allowAccess = false, mixed maxPosition = false ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `array` | **array** |  |
| `keys` | **array** |  |
| `allowAccess` | **mixed** |  |
| `maxPosition` | **mixed** |  |


**Return Value:**





---
### CoreTestIteratorAggregate::getIterator



```php
CoreTestIteratorAggregate::getIterator(  ): mixed
```





**Return Value:**





---
## CoreTestIteratorAggregateAggregate





* Full name: \CoreTestIteratorAggregateAggregate
* This class implements: \IteratorAggregate


### CoreTestIteratorAggregateAggregate::__construct



```php
CoreTestIteratorAggregateAggregate::__construct( array array, array keys, mixed allowValueAccess = false, mixed maxPosition = false ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `array` | **array** |  |
| `keys` | **array** |  |
| `allowValueAccess` | **mixed** |  |
| `maxPosition` | **mixed** |  |


**Return Value:**





---
### CoreTestIteratorAggregateAggregate::getIterator



```php
CoreTestIteratorAggregateAggregate::getIterator(  ): mixed
```





**Return Value:**





---
## CorruptedPathDetected





* Full name: \League\Flysystem\CorruptedPathDetected
* Parent class: 
* This class implements: \League\Flysystem\FilesystemException


### CorruptedPathDetected::forPath



```php
CorruptedPathDetected::forPath( string path ): \League\Flysystem\CorruptedPathDetected
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
## CustomExtensionTest





* Full name: \CustomExtensionTest
* Parent class: 


### CustomExtensionTest::testGetInvalidOperators



```php
CustomExtensionTest::testGetInvalidOperators( \Twig_ExtensionInterface extension, mixed expectedExceptionMessage ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `extension` | **\Twig_ExtensionInterface** |  |
| `expectedExceptionMessage` | **mixed** |  |


**Return Value:**





---
### CustomExtensionTest::provideInvalidExtensions



```php
CustomExtensionTest::provideInvalidExtensions(  ): mixed
```





**Return Value:**





---
## dailyMotionPluginAction





* Full name: \dailyMotionPluginAction
* Parent class: \yxorP\http\wrapper


### dailyMotionPluginAction::onCompleted



```php
dailyMotionPluginAction::onCompleted(  ): void
```





**Return Value:**





---
### dailyMotionPluginAction::completed



```php
dailyMotionPluginAction::completed( mixed matches, mixed content ): void
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `matches` | **mixed** |  |
| `content` | **mixed** |  |


**Return Value:**





---
## debubEnablingAction





* Full name: \debubEnablingAction
* Parent class: \yxorP\http\wrapper


### debubEnablingAction::buildIncludes



```php
debubEnablingAction::buildIncludes(  ): void
```





**Return Value:**





---
## debugHandlerAction





* Full name: \debugHandlerAction
* Parent class: \yxorP\http\wrapper


### debugHandlerAction::onBuildException



```php
debugHandlerAction::onBuildException( mixed e ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `e` | **mixed** |  |


**Return Value:**





---
## DirectoryAttributes





* Full name: \League\Flysystem\DirectoryAttributes
* This class implements: \League\Flysystem\StorageAttributes


### DirectoryAttributes::__construct



```php
DirectoryAttributes::__construct( string path, ?string visibility = null, ?int lastModified = null, array extraMetadata = [] ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `visibility` | **?string** |  |
| `lastModified` | **?int** |  |
| `extraMetadata` | **array** |  |


**Return Value:**





---
### DirectoryAttributes::path



```php
DirectoryAttributes::path(  ): string
```





**Return Value:**





---
### DirectoryAttributes::type



```php
DirectoryAttributes::type(  ): string
```





**Return Value:**





---
### DirectoryAttributes::visibility



```php
DirectoryAttributes::visibility(  ): ?string
```





**Return Value:**





---
### DirectoryAttributes::lastModified



```php
DirectoryAttributes::lastModified(  ): ?int
```





**Return Value:**





---
### DirectoryAttributes::extraMetadata



```php
DirectoryAttributes::extraMetadata(  ): array
```





**Return Value:**





---
### DirectoryAttributes::isFile



```php
DirectoryAttributes::isFile(  ): bool
```





**Return Value:**





---
### DirectoryAttributes::isDir



```php
DirectoryAttributes::isDir(  ): bool
```





**Return Value:**





---
### DirectoryAttributes::withPath



```php
DirectoryAttributes::withPath( string path ): \League\Flysystem\StorageAttributes
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### DirectoryAttributes::fromArray



```php
DirectoryAttributes::fromArray( array attributes ): \League\Flysystem\StorageAttributes
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |


**Return Value:**





---
### DirectoryAttributes::jsonSerialize



```php
DirectoryAttributes::jsonSerialize(  ): array
```





**Return Value:**





---
## DirectoryListing





* Full name: \League\Flysystem\DirectoryListing
* This class implements: \IteratorAggregate


### DirectoryListing::__construct



```php
DirectoryListing::__construct( iterable&lt;\League\Flysystem\T&gt; listing ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `listing` | **iterable&lt;\League\Flysystem\T&gt;** |  |


**Return Value:**





---
### DirectoryListing::filter



```php
DirectoryListing::filter( callable filter ): \League\Flysystem\DirectoryListing
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filter` | **callable** |  |


**Return Value:**





---
### DirectoryListing::map



```php
DirectoryListing::map( callable mapper ): \League\Flysystem\DirectoryListing
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `mapper` | **callable** |  |


**Return Value:**





---
### DirectoryListing::sortByPath



```php
DirectoryListing::sortByPath(  ): \League\Flysystem\DirectoryListing
```





**Return Value:**





---
### DirectoryListing::getIterator



```php
DirectoryListing::getIterator(  ): \Traversable&lt;\League\Flysystem\T&gt;
```





**Return Value:**





---
### DirectoryListing::toArray



```php
DirectoryListing::toArray(  ): \League\Flysystem\T[]
```





**Return Value:**





---
## EmptyExtensionToMimeTypeMap





* Full name: \League\MimeTypeDetection\EmptyExtensionToMimeTypeMap
* This class implements: \League\MimeTypeDetection\ExtensionToMimeTypeMap


### EmptyExtensionToMimeTypeMap::lookupMimeType



```php
EmptyExtensionToMimeTypeMap::lookupMimeType( string extension ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `extension` | **string** |  |


**Return Value:**





---
## ExtensionMimeTypeDetector





* Full name: \League\MimeTypeDetection\ExtensionMimeTypeDetector
* This class implements: \League\MimeTypeDetection\MimeTypeDetector


### ExtensionMimeTypeDetector::__construct



```php
ExtensionMimeTypeDetector::__construct( \League\MimeTypeDetection\ExtensionToMimeTypeMap extensions = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `extensions` | **\League\MimeTypeDetection\ExtensionToMimeTypeMap** |  |


**Return Value:**





---
### ExtensionMimeTypeDetector::detectMimeType



```php
ExtensionMimeTypeDetector::detectMimeType( string path, mixed contents ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `contents` | **mixed** |  |


**Return Value:**





---
### ExtensionMimeTypeDetector::detectMimeTypeFromPath



```php
ExtensionMimeTypeDetector::detectMimeTypeFromPath( string path ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### ExtensionMimeTypeDetector::detectMimeTypeFromFile



```php
ExtensionMimeTypeDetector::detectMimeTypeFromFile( string path ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### ExtensionMimeTypeDetector::detectMimeTypeFromBuffer



```php
ExtensionMimeTypeDetector::detectMimeTypeFromBuffer( string contents ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `contents` | **string** |  |


**Return Value:**





---
## FallbackMimeTypeDetector





* Full name: \League\Flysystem\Local\FallbackMimeTypeDetector
* This class implements: \League\MimeTypeDetection\MimeTypeDetector


### FallbackMimeTypeDetector::__construct



```php
FallbackMimeTypeDetector::__construct( \League\MimeTypeDetection\MimeTypeDetector detector, array inconclusiveMimetypes = self::INCONCLUSIVE_MIME_TYPES ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `detector` | **\League\MimeTypeDetection\MimeTypeDetector** |  |
| `inconclusiveMimetypes` | **array** |  |


**Return Value:**





---
### FallbackMimeTypeDetector::detectMimeType



```php
FallbackMimeTypeDetector::detectMimeType( string path, mixed contents ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `contents` | **mixed** |  |


**Return Value:**





---
### FallbackMimeTypeDetector::detectMimeTypeFromBuffer



```php
FallbackMimeTypeDetector::detectMimeTypeFromBuffer( string contents ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `contents` | **string** |  |


**Return Value:**





---
### FallbackMimeTypeDetector::detectMimeTypeFromPath



```php
FallbackMimeTypeDetector::detectMimeTypeFromPath( string path ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### FallbackMimeTypeDetector::detectMimeTypeFromFile



```php
FallbackMimeTypeDetector::detectMimeTypeFromFile( string path ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
## FileAttributes





* Full name: \League\Flysystem\FileAttributes
* This class implements: \League\Flysystem\StorageAttributes


### FileAttributes::__construct



```php
FileAttributes::__construct( string path, ?int fileSize = null, ?string visibility = null, ?int lastModified = null, ?string mimeType = null, array extraMetadata = [] ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `fileSize` | **?int** |  |
| `visibility` | **?string** |  |
| `lastModified` | **?int** |  |
| `mimeType` | **?string** |  |
| `extraMetadata` | **array** |  |


**Return Value:**





---
### FileAttributes::type



```php
FileAttributes::type(  ): string
```





**Return Value:**





---
### FileAttributes::path



```php
FileAttributes::path(  ): string
```





**Return Value:**





---
### FileAttributes::fileSize



```php
FileAttributes::fileSize(  ): ?int
```





**Return Value:**





---
### FileAttributes::visibility



```php
FileAttributes::visibility(  ): ?string
```





**Return Value:**





---
### FileAttributes::lastModified



```php
FileAttributes::lastModified(  ): ?int
```





**Return Value:**





---
### FileAttributes::mimeType



```php
FileAttributes::mimeType(  ): ?string
```





**Return Value:**





---
### FileAttributes::extraMetadata



```php
FileAttributes::extraMetadata(  ): array
```





**Return Value:**





---
### FileAttributes::isFile



```php
FileAttributes::isFile(  ): bool
```





**Return Value:**





---
### FileAttributes::isDir



```php
FileAttributes::isDir(  ): bool
```





**Return Value:**





---
### FileAttributes::withPath



```php
FileAttributes::withPath( string path ): \League\Flysystem\StorageAttributes
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### FileAttributes::fromArray



```php
FileAttributes::fromArray( array attributes ): \League\Flysystem\StorageAttributes
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |


**Return Value:**





---
### FileAttributes::jsonSerialize



```php
FileAttributes::jsonSerialize(  ): array
```





**Return Value:**





---
## Filesystem





* Full name: \League\Flysystem\Filesystem
* This class implements: \League\Flysystem\FilesystemOperator


### Filesystem::__construct



```php
Filesystem::__construct( \League\Flysystem\FilesystemAdapter adapter, array config = [], \League\Flysystem\PathNormalizer pathNormalizer = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `adapter` | **\League\Flysystem\FilesystemAdapter** |  |
| `config` | **array** |  |
| `pathNormalizer` | **\League\Flysystem\PathNormalizer** |  |


**Return Value:**





---
### Filesystem::fileExists



```php
Filesystem::fileExists( string location ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### Filesystem::directoryExists



```php
Filesystem::directoryExists( string location ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### Filesystem::has



```php
Filesystem::has( string location ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### Filesystem::write



```php
Filesystem::write( string location, string contents, array config = [] ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `contents` | **string** |  |
| `config` | **array** |  |


**Return Value:**





---
### Filesystem::writeStream



```php
Filesystem::writeStream( string location, mixed contents, array config = [] ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `contents` | **mixed** |  |
| `config` | **array** |  |


**Return Value:**





---
### Filesystem::read



```php
Filesystem::read( string location ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### Filesystem::readStream



```php
Filesystem::readStream( string location ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### Filesystem::delete



```php
Filesystem::delete( string location ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### Filesystem::deleteDirectory



```php
Filesystem::deleteDirectory( string location ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### Filesystem::createDirectory



```php
Filesystem::createDirectory( string location, array config = [] ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `config` | **array** |  |


**Return Value:**





---
### Filesystem::listContents



```php
Filesystem::listContents( string location, bool deep = self::LIST_SHALLOW ): \League\Flysystem\DirectoryListing
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `deep` | **bool** |  |


**Return Value:**





---
### Filesystem::move



```php
Filesystem::move( string source, string destination, array config = [] ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **string** |  |
| `destination` | **string** |  |
| `config` | **array** |  |


**Return Value:**





---
### Filesystem::copy



```php
Filesystem::copy( string source, string destination, array config = [] ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **string** |  |
| `destination` | **string** |  |
| `config` | **array** |  |


**Return Value:**





---
### Filesystem::lastModified



```php
Filesystem::lastModified( string path ): int
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### Filesystem::fileSize



```php
Filesystem::fileSize( string path ): int
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### Filesystem::mimeType



```php
Filesystem::mimeType( string path ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### Filesystem::setVisibility



```php
Filesystem::setVisibility( string path, string visibility ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `visibility` | **string** |  |


**Return Value:**





---
### Filesystem::visibility



```php
Filesystem::visibility( string path ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
## FinfoMimeTypeDetector





* Full name: \League\MimeTypeDetection\FinfoMimeTypeDetector
* This class implements: \League\MimeTypeDetection\MimeTypeDetector


### FinfoMimeTypeDetector::__construct



```php
FinfoMimeTypeDetector::__construct( string magicFile = '', \League\MimeTypeDetection\ExtensionToMimeTypeMap extensionMap = null, ?int bufferSampleSize = null, array inconclusiveMimetypes = self::INCONCLUSIVE_MIME_TYPES ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `magicFile` | **string** |  |
| `extensionMap` | **\League\MimeTypeDetection\ExtensionToMimeTypeMap** |  |
| `bufferSampleSize` | **?int** |  |
| `inconclusiveMimetypes` | **array** |  |


**Return Value:**





---
### FinfoMimeTypeDetector::detectMimeType



```php
FinfoMimeTypeDetector::detectMimeType( string path, mixed contents ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `contents` | **mixed** |  |


**Return Value:**





---
### FinfoMimeTypeDetector::detectMimeTypeFromPath



```php
FinfoMimeTypeDetector::detectMimeTypeFromPath( string path ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### FinfoMimeTypeDetector::detectMimeTypeFromFile



```php
FinfoMimeTypeDetector::detectMimeTypeFromFile( string path ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### FinfoMimeTypeDetector::detectMimeTypeFromBuffer



```php
FinfoMimeTypeDetector::detectMimeTypeFromBuffer( string contents ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `contents` | **string** |  |


**Return Value:**





---
## FooObject





* Full name: \FooObject


### FooObject::reset



```php
FooObject::reset(  ): mixed
```



* This method is **static**.

**Return Value:**





---
### FooObject::__toString



```php
FooObject::__toString(  ): mixed
```





**Return Value:**





---
### FooObject::foo



```php
FooObject::foo(  ): mixed
```





**Return Value:**





---
### FooObject::getFooBar



```php
FooObject::getFooBar(  ): mixed
```





**Return Value:**





---
## generalHelper





* Full name: \yxorP\inc\generalHelper


### generalHelper::vid_player



```php
generalHelper::vid_player( mixed url, mixed width = '100%', mixed height = '100%', mixed extension = false ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `url` | **mixed** |  |
| `width` | **mixed** |  |
| `height` | **mixed** |  |
| `extension` | **mixed** |  |


**Return Value:**





---
### generalHelper::starts_with



```php
generalHelper::starts_with( mixed haystack, mixed needles ): bool
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `haystack` | **mixed** |  |
| `needles` | **mixed** |  |


**Return Value:**





---
### generalHelper::str_before



```php
generalHelper::str_before( mixed subject, mixed search ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `subject` | **mixed** |  |
| `search` | **mixed** |  |


**Return Value:**





---
### generalHelper::is_html



```php
generalHelper::is_html( mixed content_type ): bool
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content_type` | **mixed** |  |


**Return Value:**





---
### generalHelper::in_arrayi



```php
generalHelper::in_arrayi( mixed needle, mixed haystack ): bool
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `needle` | **mixed** |  |
| `haystack` | **mixed** |  |


**Return Value:**





---
### generalHelper::re_match



```php
generalHelper::re_match( mixed pattern, mixed string ): bool
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `pattern` | **mixed** |  |
| `string` | **mixed** |  |


**Return Value:**





---
### generalHelper::array_merge_custom



```php
generalHelper::array_merge_custom(  ): array
```



* This method is **static**.

**Return Value:**





---
### generalHelper::str_rot_pass



```php
generalHelper::str_rot_pass( mixed str, mixed key, mixed decrypt = false ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `str` | **mixed** |  |
| `key` | **mixed** |  |
| `decrypt` | **mixed** |  |


**Return Value:**





---
### generalHelper::app_url



```php
generalHelper::app_url(  ): string
```



* This method is **static**.

**Return Value:**





---
### generalHelper::render_string



```php
generalHelper::render_string( mixed str, mixed vars = array() ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `str` | **mixed** |  |
| `vars` | **mixed** |  |


**Return Value:**





---
### generalHelper::time_ms



```php
generalHelper::time_ms(  ): float
```



* This method is **static**.

**Return Value:**





---
### generalHelper::base64_url_encode



```php
generalHelper::base64_url_encode( mixed input ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `input` | **mixed** |  |


**Return Value:**





---
### generalHelper::base64_url_decode



```php
generalHelper::base64_url_decode( mixed input ): bool|string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `input` | **mixed** |  |


**Return Value:**





---
### generalHelper::proxify_url



```php
generalHelper::proxify_url( mixed url, mixed base_url = CHAR_EMPTY_STRING ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `url` | **mixed** |  |
| `base_url` | **mixed** |  |


**Return Value:**





---
### generalHelper::add_http



```php
generalHelper::add_http( mixed url ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `url` | **mixed** |  |


**Return Value:**





---
### generalHelper::rel2abs



```php
generalHelper::rel2abs( mixed rel, mixed base ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `rel` | **mixed** |  |
| `base` | **mixed** |  |


**Return Value:**





---
### generalHelper::array_merge_ignore



```php
generalHelper::array_merge_ignore( mixed arrays ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `arrays` | **mixed** |  |


**Return Value:**





---
### generalHelper::CSV



```php
generalHelper::CSV( mixed filename = CHAR_EMPTY_STRING ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filename` | **mixed** |  |


**Return Value:**





---
### generalHelper::fileCheck



```php
generalHelper::fileCheck( mixed dir, mixed inc ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `dir` | **mixed** |  |
| `inc` | **mixed** |  |


**Return Value:**





---
### generalHelper::extractSubdomains



```php
generalHelper::extractSubdomains( mixed domain ): ?string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `domain` | **mixed** |  |


**Return Value:**





---
### generalHelper::extractDomain



```php
generalHelper::extractDomain( mixed domain ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `domain` | **mixed** |  |


**Return Value:**





---
## GeneratedExtensionToMimeTypeMap





* Full name: \League\MimeTypeDetection\GeneratedExtensionToMimeTypeMap
* This class implements: \League\MimeTypeDetection\ExtensionToMimeTypeMap


### GeneratedExtensionToMimeTypeMap::lookupMimeType



```php
GeneratedExtensionToMimeTypeMap::lookupMimeType( string extension ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `extension` | **string** |  |


**Return Value:**





---
## Generator

This class takes the output from 'parser', and generate the markdown
templates.



* Full name: \PHPDocMD\Generator


### Generator::__construct



```php
Generator::__construct( array classDefinitions, string outputDir, string templateDir, string linkTemplate = '%c.md', string apiIndexFile = 'ApiIndex.md' ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `classDefinitions` | **array** |  |
| `outputDir` | **string** |  |
| `templateDir` | **string** |  |
| `linkTemplate` | **string** |  |
| `apiIndexFile` | **string** |  |


**Return Value:**





---
### Generator::run

Starts the generator.

```php
Generator::run(  ): mixed
```





**Return Value:**





---
### Generator::classLink

This is a twig template function.

```php
Generator::classLink( string className, null|string label = null ): string
```

This function allows us to easily link classes to their existing pages.

Due to the unfortunate way twig works, this must be static, and we must use a global to
achieve our goal.

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `className` | **string** |  |
| `label` | **null\|string** |  |


**Return Value:**





---
## globalCollectionAction





* Full name: \globalCollectionAction
* Parent class: \yxorP\http\wrapper


### globalCollectionAction::onBuildContext



```php
globalCollectionAction::onBuildContext(  ): void
```





**Return Value:**





---
## guzzleClientAction





* Full name: \guzzleClientAction
* Parent class: \yxorP\http\wrapper


### guzzleClientAction::onBeforeRequest



```php
guzzleClientAction::onBeforeRequest(  ): void
```





**Return Value:**





---
## headerRewritePluginAction





* Full name: \headerRewritePluginAction
* Parent class: \yxorP\http\wrapper


### headerRewritePluginAction::onBeforeRequest



```php
headerRewritePluginAction::onBeforeRequest(  ): void
```





**Return Value:**





---
### headerRewritePluginAction::onHeadersReceived



```php
headerRewritePluginAction::onHeadersReceived(  ): void
```





**Return Value:**





---
### headerRewritePluginAction::headersReceived



```php
headerRewritePluginAction::headersReceived( mixed response, mixed request_url ): void
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `response` | **mixed** |  |
| `request_url` | **mixed** |  |


**Return Value:**





---
## htmlCommentsRemover





* Full name: \yxorP\minify\htmlCommentsRemover
* Parent class: \yxorP\minify\areplacer
* This class implements: \yxorP\minify\minfyInterface


### htmlCommentsRemover::getReplacePatternData



```php
htmlCommentsRemover::getReplacePatternData(  ): array
```





**Return Value:**





---
## inlineCssMinifier





* Full name: \yxorP\minify\inlineCssMinifier
* This class implements: \yxorP\minify\minfyInterface


### inlineCssMinifier::process



```php
inlineCssMinifier::process( string buffer ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `buffer` | **string** |  |


**Return Value:**





---
## inlineJavascriptMinifier





* Full name: \yxorP\minify\inlineJavascriptMinifier
* This class implements: \yxorP\minify\minfyInterface


### inlineJavascriptMinifier::process



```php
inlineJavascriptMinifier::process( string buffer ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `buffer` | **string** |  |


**Return Value:**





---
## InstalledVersions

This class is copied in every Composer installed project and available to all

See also https://getcomposer.org/doc/07-runtime.md#installed-versions

To require its presence, you can require `composer-runtime-api ^2.0`

* Full name: \Composer\InstalledVersions


### InstalledVersions::getInstalledPackages

Returns a list of all package names which are present, either by being installed, replaced or provided

```php
InstalledVersions::getInstalledPackages(  ): string[]
```



* This method is **static**.

**Return Value:**





---
### InstalledVersions::getInstalledPackagesByType

Returns a list of all package names with a specific type e.g. 'library'

```php
InstalledVersions::getInstalledPackagesByType( string type ): string[]
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `type` | **string** |  |


**Return Value:**





---
### InstalledVersions::isInstalled

Checks whether the given package is installed

```php
InstalledVersions::isInstalled( string packageName, bool includeDevRequirements = true ): bool
```

This also returns true if the package name is provided or replaced by another package

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `packageName` | **string** |  |
| `includeDevRequirements` | **bool** |  |


**Return Value:**





---
### InstalledVersions::satisfies

Checks whether the given package satisfies a version constraint

```php
InstalledVersions::satisfies( \Composer\Semver\VersionParser parser, string packageName, string|null constraint ): bool
```

e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:

Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `parser` | **\Composer\Semver\VersionParser** | Install composer/semver to have access to this class and functionality |
| `packageName` | **string** |  |
| `constraint` | **string\|null** | A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package |


**Return Value:**





---
### InstalledVersions::getVersionRanges

Returns a version constraint representing all the range(s) which are installed for a given package

```php
InstalledVersions::getVersionRanges( string packageName ): string
```

It is easier to use this via isInstalled() with the $constraint argument if you need to check
whether a given version of a package is installed, and not just whether it exists

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `packageName` | **string** |  |


**Return Value:**

Version constraint usable with composer/semver



---
### InstalledVersions::getVersion



```php
InstalledVersions::getVersion( string packageName ): string|null
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `packageName` | **string** |  |


**Return Value:**

If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present



---
### InstalledVersions::getPrettyVersion



```php
InstalledVersions::getPrettyVersion( string packageName ): string|null
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `packageName` | **string** |  |


**Return Value:**

If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present



---
### InstalledVersions::getReference



```php
InstalledVersions::getReference( string packageName ): string|null
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `packageName` | **string** |  |


**Return Value:**

If the package is being replaced or provided but is not really installed, null will be returned as reference



---
### InstalledVersions::getInstallPath



```php
InstalledVersions::getInstallPath( string packageName ): string|null
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `packageName` | **string** |  |


**Return Value:**

If the package is being replaced or provided but is not really installed, null will be returned as install path. Packages of type metapackages also have a null install path.



---
### InstalledVersions::getRootPackage



```php
InstalledVersions::getRootPackage(  ): array
```



* This method is **static**.

**Return Value:**





---
### InstalledVersions::getRawData

Returns the raw installed.php data for custom implementations

```php
InstalledVersions::getRawData(  ): array[]
```



* This method is **static**.* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.


**Return Value:**





---
### InstalledVersions::getAllRawData

Returns the raw data of all installed.php which are currently loaded for custom implementations

```php
InstalledVersions::getAllRawData(  ): array[]
```



* This method is **static**.

**Return Value:**





---
### InstalledVersions::reload

Lets you reload the static array from another file

```php
InstalledVersions::reload( array[] data ): void
```

This is only useful for complex integrations in which a project needs to use
this class but then also needs to execute another project's autoloader in process,
and wants to ensure both projects have access to their version of installed.php.

A typical case would be PHPUnit, where it would need to make sure it reads all
the data it needs from this class, then call reload() with
`require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
the project in which it runs can then also use this class safely, without
interference between PHPUnit's dependencies and the project's dependencies.

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `data` | **array[]** | A vendor/composer/installed.php data set |


**Return Value:**





---
## InvalidOperatorExtension





* Full name: \InvalidOperatorExtension
* This class implements: \Twig_ExtensionInterface


### InvalidOperatorExtension::__construct



```php
InvalidOperatorExtension::__construct( mixed operators ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `operators` | **mixed** |  |


**Return Value:**





---
### InvalidOperatorExtension::getTokenParsers

Returns the token parser instances to add to the existing list.

```php
InvalidOperatorExtension::getTokenParsers(  ): \Twig_TokenParserInterface[]
```





**Return Value:**





---
### InvalidOperatorExtension::getNodeVisitors

Returns the node visitor instances to add to the existing list.

```php
InvalidOperatorExtension::getNodeVisitors(  ): \Twig_NodeVisitorInterface[]
```





**Return Value:**





---
### InvalidOperatorExtension::getFilters

Returns a list of filters to add to the existing list.

```php
InvalidOperatorExtension::getFilters(  ): \Twig_SimpleFilter[]
```





**Return Value:**





---
### InvalidOperatorExtension::getTests

Returns a list of tests to add to the existing list.

```php
InvalidOperatorExtension::getTests(  ): \Twig_SimpleTest[]
```





**Return Value:**





---
### InvalidOperatorExtension::getFunctions

Returns a list of functions to add to the existing list.

```php
InvalidOperatorExtension::getFunctions(  ): \Twig_SimpleFunction[]
```





**Return Value:**





---
### InvalidOperatorExtension::getOperators

Returns a list of operators to add to the existing list.

```php
InvalidOperatorExtension::getOperators(  ): array[]
```





**Return Value:**

First array of unary operators, second array of binary operators



---
## InvalidStreamProvided





* Full name: \League\Flysystem\InvalidStreamProvided
* Parent class: 
* This class implements: \League\Flysystem\FilesystemException


## InvalidVisibilityProvided





* Full name: \League\Flysystem\InvalidVisibilityProvided
* Parent class: 
* This class implements: \League\Flysystem\FilesystemException


### InvalidVisibilityProvided::withVisibility



```php
InvalidVisibilityProvided::withVisibility( string visibility, string expectedMessage ): \League\Flysystem\InvalidVisibilityProvided
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `visibility` | **string** |  |
| `expectedMessage` | **string** |  |


**Return Value:**





---
## LocalFilesystemAdapter





* Full name: \League\Flysystem\Local\LocalFilesystemAdapter
* This class implements: \League\Flysystem\FilesystemAdapter


### LocalFilesystemAdapter::__construct



```php
LocalFilesystemAdapter::__construct( string location, \League\Flysystem\UnixVisibility\VisibilityConverter visibility = null, int writeFlags = LOCK_EX, int linkHandling = self::DISALLOW_LINKS, \League\MimeTypeDetection\MimeTypeDetector mimeTypeDetector = null, bool lazyRootCreation = false ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `visibility` | **\League\Flysystem\UnixVisibility\VisibilityConverter** |  |
| `writeFlags` | **int** |  |
| `linkHandling` | **int** |  |
| `mimeTypeDetector` | **\League\MimeTypeDetection\MimeTypeDetector** |  |
| `lazyRootCreation` | **bool** |  |


**Return Value:**





---
### LocalFilesystemAdapter::write



```php
LocalFilesystemAdapter::write( string path, string contents, \League\Flysystem\Config config ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `contents` | **string** |  |
| `config` | **\League\Flysystem\Config** |  |


**Return Value:**





---
### LocalFilesystemAdapter::writeStream



```php
LocalFilesystemAdapter::writeStream( string path, mixed contents, \League\Flysystem\Config config ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `contents` | **mixed** |  |
| `config` | **\League\Flysystem\Config** |  |


**Return Value:**





---
### LocalFilesystemAdapter::delete



```php
LocalFilesystemAdapter::delete( string path ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### LocalFilesystemAdapter::deleteDirectory



```php
LocalFilesystemAdapter::deleteDirectory( string prefix ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `prefix` | **string** |  |


**Return Value:**





---
### LocalFilesystemAdapter::listContents



```php
LocalFilesystemAdapter::listContents( string path, bool deep ): iterable&lt;\League\Flysystem\StorageAttributes&gt;
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `deep` | **bool** |  |


**Return Value:**





---
### LocalFilesystemAdapter::move



```php
LocalFilesystemAdapter::move( string source, string destination, \League\Flysystem\Config config ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **string** |  |
| `destination` | **string** |  |
| `config` | **\League\Flysystem\Config** |  |


**Return Value:**





---
### LocalFilesystemAdapter::copy



```php
LocalFilesystemAdapter::copy( string source, string destination, \League\Flysystem\Config config ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **string** |  |
| `destination` | **string** |  |
| `config` | **\League\Flysystem\Config** |  |


**Return Value:**





---
### LocalFilesystemAdapter::read



```php
LocalFilesystemAdapter::read( string path ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### LocalFilesystemAdapter::readStream



```php
LocalFilesystemAdapter::readStream( string path ): resource
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### LocalFilesystemAdapter::fileExists



```php
LocalFilesystemAdapter::fileExists( string location ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### LocalFilesystemAdapter::directoryExists



```php
LocalFilesystemAdapter::directoryExists( string location ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### LocalFilesystemAdapter::createDirectory



```php
LocalFilesystemAdapter::createDirectory( string path, \League\Flysystem\Config config ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `config` | **\League\Flysystem\Config** |  |


**Return Value:**





---
### LocalFilesystemAdapter::setVisibility



```php
LocalFilesystemAdapter::setVisibility( string path, string visibility ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `visibility` | **string** |  |


**Return Value:**





---
### LocalFilesystemAdapter::visibility



```php
LocalFilesystemAdapter::visibility( string path ): \League\Flysystem\FileAttributes
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### LocalFilesystemAdapter::mimeType



```php
LocalFilesystemAdapter::mimeType( string path ): \League\Flysystem\FileAttributes
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### LocalFilesystemAdapter::lastModified



```php
LocalFilesystemAdapter::lastModified( string path ): \League\Flysystem\FileAttributes
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### LocalFilesystemAdapter::fileSize



```php
LocalFilesystemAdapter::fileSize( string path ): \League\Flysystem\FileAttributes
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
## logPluginAction





* Full name: \logPluginAction
* Parent class: \yxorP\http\wrapper


### logPluginAction::onHeadersReceived



```php
logPluginAction::onHeadersReceived(  ): void
```





**Return Value:**





---
## mimeTypesAction





* Full name: \mimeTypesAction
* Parent class: \yxorP\http\wrapper


### mimeTypesAction::buildHeaders



```php
mimeTypesAction::buildHeaders(  ): void
```





**Return Value:**





---
## minify





* Full name: \yxorP\minify\minify
* This class implements: \yxorP\minify\minfyInterface


### minify::__construct



```php
minify::__construct( \yxorP\minify\minfyInterface processors ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `processors` | **\yxorP\minify\minfyInterface** |  |


**Return Value:**





---
### minify::createDefault



```php
minify::createDefault(  ): self
```



* This method is **static**.

**Return Value:**





---
### minify::process



```php
minify::process( string buffer ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `buffer` | **string** |  |


**Return Value:**





---
### minify::addProcessor



```php
minify::addProcessor( \yxorP\minify\minfyInterface processor ): self
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `processor` | **\yxorP\minify\minfyInterface** |  |


**Return Value:**





---
## MountManager





* Full name: \League\Flysystem\MountManager
* This class implements: \League\Flysystem\FilesystemOperator


### MountManager::__construct

MountManager constructor.

```php
MountManager::__construct( array&lt;string,\League\Flysystem\FilesystemOperator&gt; filesystems = [] ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filesystems` | **array&lt;string,\League\Flysystem\FilesystemOperator&gt;** |  |


**Return Value:**





---
### MountManager::fileExists



```php
MountManager::fileExists( string location ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### MountManager::has



```php
MountManager::has( string location ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### MountManager::directoryExists



```php
MountManager::directoryExists( string location ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### MountManager::read



```php
MountManager::read( string location ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### MountManager::readStream



```php
MountManager::readStream( string location ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### MountManager::listContents



```php
MountManager::listContents( string location, bool deep = self::LIST_SHALLOW ): \League\Flysystem\DirectoryListing
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `deep` | **bool** |  |


**Return Value:**





---
### MountManager::lastModified



```php
MountManager::lastModified( string location ): int
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### MountManager::fileSize



```php
MountManager::fileSize( string location ): int
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### MountManager::mimeType



```php
MountManager::mimeType( string location ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### MountManager::visibility



```php
MountManager::visibility( string location ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### MountManager::write



```php
MountManager::write( string location, string contents, array config = [] ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `contents` | **string** |  |
| `config` | **array** |  |


**Return Value:**





---
### MountManager::writeStream



```php
MountManager::writeStream( string location, mixed contents, array config = [] ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `contents` | **mixed** |  |
| `config` | **array** |  |


**Return Value:**





---
### MountManager::setVisibility



```php
MountManager::setVisibility( string path, string visibility ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `visibility` | **string** |  |


**Return Value:**





---
### MountManager::delete



```php
MountManager::delete( string location ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### MountManager::deleteDirectory



```php
MountManager::deleteDirectory( string location ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
### MountManager::createDirectory



```php
MountManager::createDirectory( string location, array config = [] ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `config` | **array** |  |


**Return Value:**





---
### MountManager::move



```php
MountManager::move( string source, string destination, array config = [] ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **string** |  |
| `destination` | **string** |  |
| `config` | **array** |  |


**Return Value:**





---
### MountManager::copy



```php
MountManager::copy( string source, string destination, array config = [] ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **string** |  |
| `destination` | **string** |  |
| `config` | **array** |  |


**Return Value:**





---
## overridePluginAction





* Full name: \overridePluginAction
* Parent class: \yxorP\http\wrapper


### overridePluginAction::onCompleted



```php
overridePluginAction::onCompleted(  ): mixed
```





**Return Value:**





---
### overridePluginAction::REWRITE



```php
overridePluginAction::REWRITE( mixed content ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content` | **mixed** |  |


**Return Value:**





---
## OverridingExtensionToMimeTypeMap





* Full name: \League\MimeTypeDetection\OverridingExtensionToMimeTypeMap
* This class implements: \League\MimeTypeDetection\ExtensionToMimeTypeMap


### OverridingExtensionToMimeTypeMap::__construct



```php
OverridingExtensionToMimeTypeMap::__construct( \League\MimeTypeDetection\ExtensionToMimeTypeMap innerMap, array&lt;string,string&gt; overrides ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `innerMap` | **\League\MimeTypeDetection\ExtensionToMimeTypeMap** |  |
| `overrides` | **array&lt;string,string&gt;** |  |


**Return Value:**





---
### OverridingExtensionToMimeTypeMap::lookupMimeType



```php
OverridingExtensionToMimeTypeMap::lookupMimeType( string extension ): ?string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `extension` | **string** |  |


**Return Value:**





---
## paramStore





* Full name: \yxorP\http\paramStore


### paramStore::__construct



```php
paramStore::__construct( mixed parameters = array(), mixed case_sensitive = false ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `parameters` | **mixed** |  |
| `case_sensitive` | **mixed** |  |


**Return Value:**





---
### paramStore::replace



```php
paramStore::replace( array data ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `data` | **array** |  |


**Return Value:**





---
### paramStore::clear



```php
paramStore::clear(  ): void
```





**Return Value:**





---
### paramStore::set



```php
paramStore::set( mixed key, mixed value, mixed replace = true ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |
| `value` | **mixed** |  |
| `replace` | **mixed** |  |


**Return Value:**





---
### paramStore::has



```php
paramStore::has( mixed key ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |


**Return Value:**





---
### paramStore::remove



```php
paramStore::remove( mixed key ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |


**Return Value:**





---
### paramStore::get



```php
paramStore::get( mixed key, mixed default = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |
| `default` | **mixed** |  |


**Return Value:**





---
### paramStore::all



```php
paramStore::all(  ): array
```





**Return Value:**





---
### paramStore::__toString



```php
paramStore::__toString(  ): mixed
```





**Return Value:**





---
## Parser

This class parses structure.xml and generates the api documentation.



* Full name: \PHPDocMD\Parser


### Parser::__construct



```php
Parser::__construct( string structureXmlFile ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `structureXmlFile` | **string** |  |


**Return Value:**





---
### Parser::run

Starts the process.

```php
Parser::run(  ): mixed
```





**Return Value:**





---
## PathPrefixer





* Full name: \League\Flysystem\PathPrefixer


### PathPrefixer::__construct



```php
PathPrefixer::__construct( string prefix, string separator = '/' ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `prefix` | **string** |  |
| `separator` | **string** |  |


**Return Value:**





---
### PathPrefixer::prefixPath



```php
PathPrefixer::prefixPath( string path ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### PathPrefixer::stripPrefix



```php
PathPrefixer::stripPrefix( string path ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### PathPrefixer::stripDirectoryPrefix



```php
PathPrefixer::stripDirectoryPrefix( string path ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### PathPrefixer::prefixDirectoryPath



```php
PathPrefixer::prefixDirectoryPath( string path ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
## PathTraversalDetected





* Full name: \League\Flysystem\PathTraversalDetected
* Parent class: 
* This class implements: \League\Flysystem\FilesystemException


### PathTraversalDetected::path



```php
PathTraversalDetected::path(  ): string
```





**Return Value:**





---
### PathTraversalDetected::forPath



```php
PathTraversalDetected::forPath( string path ): \League\Flysystem\PathTraversalDetected
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
## PortableVisibilityConverter





* Full name: \League\Flysystem\UnixVisibility\PortableVisibilityConverter
* This class implements: \League\Flysystem\UnixVisibility\VisibilityConverter


### PortableVisibilityConverter::__construct



```php
PortableVisibilityConverter::__construct( int filePublic = 0644, int filePrivate = 0600, int directoryPublic = 0755, int directoryPrivate = 0700, string defaultForDirectories = Visibility::PRIVATE ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filePublic` | **int** |  |
| `filePrivate` | **int** |  |
| `directoryPublic` | **int** |  |
| `directoryPrivate` | **int** |  |
| `defaultForDirectories` | **string** |  |


**Return Value:**





---
### PortableVisibilityConverter::forFile



```php
PortableVisibilityConverter::forFile( string visibility ): int
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `visibility` | **string** |  |


**Return Value:**





---
### PortableVisibilityConverter::forDirectory



```php
PortableVisibilityConverter::forDirectory( string visibility ): int
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `visibility` | **string** |  |


**Return Value:**





---
### PortableVisibilityConverter::inverseForFile



```php
PortableVisibilityConverter::inverseForFile( int visibility ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `visibility` | **int** |  |


**Return Value:**





---
### PortableVisibilityConverter::inverseForDirectory



```php
PortableVisibilityConverter::inverseForDirectory( int visibility ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `visibility` | **int** |  |


**Return Value:**





---
### PortableVisibilityConverter::defaultForDirectories



```php
PortableVisibilityConverter::defaultForDirectories(  ): int
```





**Return Value:**





---
### PortableVisibilityConverter::fromArray



```php
PortableVisibilityConverter::fromArray( array permissionMap, string defaultForDirectories = Visibility::PRIVATE ): \League\Flysystem\UnixVisibility\PortableVisibilityConverter
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `permissionMap` | **array** |  |
| `defaultForDirectories` | **string** |  |


**Return Value:**





---
## PortableVisibilityGuard





* Full name: \League\Flysystem\PortableVisibilityGuard


### PortableVisibilityGuard::guardAgainstInvalidInput



```php
PortableVisibilityGuard::guardAgainstInvalidInput( string visibility ): void
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `visibility` | **string** |  |


**Return Value:**





---
## proxifyPluginAction





* Full name: \proxifyPluginAction
* Parent class: \yxorP\http\wrapper


### proxifyPluginAction::onBeforeRequest



```php
proxifyPluginAction::onBeforeRequest(  ): void
```





**Return Value:**





---
### proxifyPluginAction::onCompleted



```php
proxifyPluginAction::onCompleted(  ): void
```





**Return Value:**





---
### proxifyPluginAction::clean_content_type



```php
proxifyPluginAction::clean_content_type( mixed content_type ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content_type` | **mixed** |  |


**Return Value:**





---
## quotesRemover





* Full name: \yxorP\minify\quotesRemover
* Parent class: \yxorP\minify\areplacer
* This class implements: \yxorP\minify\minfyInterface


### quotesRemover::getReplacePatternData



```php
quotesRemover::getReplacePatternData(  ): array
```





**Return Value:**





---
## readyCheckAction





* Full name: \readyCheckAction
* Parent class: \yxorP\http\wrapper


### readyCheckAction::onCheck



```php
readyCheckAction::onCheck(  ): string
```





**Return Value:**





---
## request





* Full name: \yxorP\http\request


### request::__construct



```php
request::__construct( mixed method, mixed url, mixed body = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `method` | **mixed** |  |
| `url` | **mixed** |  |
| `body` | **mixed** |  |


**Return Value:**





---
### request::setUrl



```php
request::setUrl( mixed url ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `url` | **mixed** |  |


**Return Value:**





---
### request::parseQuery



```php
request::parseQuery( mixed query ): array
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `query` | **mixed** |  |


**Return Value:**





---
### request::setBody



```php
request::setBody( mixed body, mixed content_type = false ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `body` | **mixed** |  |
| `content_type` | **mixed** |  |


**Return Value:**





---
### request::prepare



```php
request::prepare(  ): void
```





**Return Value:**





---
### request::buildPostBody



```php
request::buildPostBody( mixed fields, mixed files, mixed boundary = null ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `fields` | **mixed** |  |
| `files` | **mixed** |  |
| `boundary` | **mixed** |  |


**Return Value:**





---
### request::createFromGlobals



```php
request::createFromGlobals(  ): \yxorP\http\request
```



* This method is **static**.

**Return Value:**





---
### request::getMethod



```php
request::getMethod(  ): string
```





**Return Value:**





---
### request::setMethod



```php
request::setMethod( mixed method ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `method` | **mixed** |  |


**Return Value:**





---
### request::getUrl



```php
request::getUrl(  ): string
```





**Return Value:**





---
### request::getProtocolVersion



```php
request::getProtocolVersion(  ): string
```





**Return Value:**





---
### request::getRawHeaders



```php
request::getRawHeaders(  ): string
```





**Return Value:**





---
### request::getRawBody



```php
request::getRawBody(  ): string
```





**Return Value:**





---
### request::getUri



```php
request::getUri(  ): mixed
```





**Return Value:**





---
## requestBodyAction





* Full name: \requestBodyAction
* Parent class: \yxorP\http\wrapper


### requestBodyAction::buildRequest



```php
requestBodyAction::buildRequest(  ): void
```





**Return Value:**





---
## requestResponseAction





* Full name: \requestResponseAction
* Parent class: \yxorP\http\wrapper


### requestResponseAction::buildIncludes



```php
requestResponseAction::buildIncludes(  ): void
```





**Return Value:**





---
## resourceHandlerAction





* Full name: \resourceHandlerAction
* Parent class: \yxorP\http\wrapper


### resourceHandlerAction::onBuildException



```php
resourceHandlerAction::onBuildException( mixed e ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `e` | **mixed** |  |


**Return Value:**





---
## response





* Full name: \yxorP\http\response


### response::__construct



```php
response::__construct( mixed content = CHAR_EMPTY_STRING, mixed status = 200, mixed headers = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content` | **mixed** |  |
| `status` | **mixed** |  |
| `headers` | **mixed** |  |


**Return Value:**





---
### response::setStatusCode



```php
response::setStatusCode( mixed code ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `code` | **mixed** |  |


**Return Value:**





---
### response::getContent



```php
response::getContent(  ): string
```





**Return Value:**





---
### response::setContent



```php
response::setContent( mixed content ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content` | **mixed** |  |


**Return Value:**





---
### response::printContent



```php
response::printContent(  ): void
```





**Return Value:**





---
### response::sendHeaders



```php
response::sendHeaders(  ): void
```





**Return Value:**





---
### response::getStatusText



```php
response::getStatusText(  ): string
```





**Return Value:**





---
### response::getStatusCode



```php
response::getStatusCode(  ): mixed
```





**Return Value:**





---
## setHeadersAction





* Full name: \setHeadersAction
* Parent class: \yxorP\http\wrapper


### setHeadersAction::buildHeaders



```php
setHeadersAction::buildHeaders(  ): void
```





**Return Value:**





---
## siteCollectionAction





* Full name: \siteCollectionAction
* Parent class: \yxorP\http\wrapper


### siteCollectionAction::onBuildContext



```php
siteCollectionAction::onBuildContext(  ): void
```





**Return Value:**





---
## streamPluginAction





* Full name: \streamPluginAction
* Parent class: \yxorP\http\wrapper


### streamPluginAction::onHeadersReceived



```php
streamPluginAction::onHeadersReceived(  ): void
```





**Return Value:**





---
### streamPluginAction::onCurlWrite



```php
streamPluginAction::onCurlWrite(  ): void
```





**Return Value:**





---
### streamPluginAction::onCompleted



```php
streamPluginAction::onCompleted(  ): void
```





**Return Value:**





---
## SymbolicLinkEncountered





* Full name: \League\Flysystem\SymbolicLinkEncountered
* Parent class: 
* This class implements: \League\Flysystem\FilesystemException


### SymbolicLinkEncountered::location



```php
SymbolicLinkEncountered::location(  ): string
```





**Return Value:**





---
### SymbolicLinkEncountered::atLocation



```php
SymbolicLinkEncountered::atLocation( string pathName ): \League\Flysystem\SymbolicLinkEncountered
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `pathName` | **string** |  |


**Return Value:**





---
## TestTokenParser

Base class for all token parsers.



* Full name: \TestTokenParser
* Parent class: \Twig_TokenParser


### TestTokenParser::parse



```php
TestTokenParser::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### TestTokenParser::getTag



```php
TestTokenParser::getTag(  ): mixed
```





**Return Value:**





---
## Twig_Cache_Filesystem

Implements a cache on the filesystem.



* Full name: \Twig_Cache_Filesystem
* This class implements: \Twig_CacheInterface


### Twig_Cache_Filesystem::__construct



```php
Twig_Cache_Filesystem::__construct( directory, options ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `directory` | **** | string The root cache directory |
| `options` | **** | int    A set of options |


**Return Value:**





---
### Twig_Cache_Filesystem::generateKey

Generates a cache key for the given template class name.

```php
Twig_Cache_Filesystem::generateKey( mixed name, mixed className ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** | The template name |
| `className` | **mixed** | The template class name |


**Return Value:**





---
### Twig_Cache_Filesystem::load

Loads a template from the cache.

```php
Twig_Cache_Filesystem::load( mixed key ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** | The cache key |


**Return Value:**





---
### Twig_Cache_Filesystem::write

Writes the compiled template to cache.

```php
Twig_Cache_Filesystem::write( mixed key, mixed content ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** | The cache key |
| `content` | **mixed** | The template representation as a PHP class |


**Return Value:**





---
### Twig_Cache_Filesystem::getTimestamp

Returns the modification timestamp of a key.

```php
Twig_Cache_Filesystem::getTimestamp( mixed key ): int
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** | The cache key |


**Return Value:**





---
## Twig_Cache_Null

Implements a no-cache strategy.



* Full name: \Twig_Cache_Null
* This class implements: \Twig_CacheInterface


### Twig_Cache_Null::generateKey

Generates a cache key for the given template class name.

```php
Twig_Cache_Null::generateKey( mixed name, mixed className ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** | The template name |
| `className` | **mixed** | The template class name |


**Return Value:**





---
### Twig_Cache_Null::write

Writes the compiled template to cache.

```php
Twig_Cache_Null::write( mixed key, mixed content ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** | The cache key |
| `content` | **mixed** | The template representation as a PHP class |


**Return Value:**





---
### Twig_Cache_Null::load

Loads a template from the cache.

```php
Twig_Cache_Null::load( mixed key ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** | The cache key |


**Return Value:**





---
### Twig_Cache_Null::getTimestamp

Returns the modification timestamp of a key.

```php
Twig_Cache_Null::getTimestamp( mixed key ): int
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** | The cache key |


**Return Value:**





---
## Twig_Compiler

Compiles a node to PHP code.



* Full name: \Twig_Compiler


### Twig_Compiler::__construct



```php
Twig_Compiler::__construct( \Twig_Environment env ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `env` | **\Twig_Environment** |  |


**Return Value:**





---
### Twig_Compiler::getEnvironment

Returns the environment instance related to this compiler.

```php
Twig_Compiler::getEnvironment(  ): \Twig_Environment
```





**Return Value:**





---
### Twig_Compiler::getSource

Gets the current PHP code after compilation.

```php
Twig_Compiler::getSource(  ): string
```





**Return Value:**

The PHP code



---
### Twig_Compiler::compile

Compiles a node.

```php
Twig_Compiler::compile( \Twig_Node node, int indentation ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node** | The node to compile |
| `indentation` | **int** | The current indentation |


**Return Value:**





---
### Twig_Compiler::subcompile



```php
Twig_Compiler::subcompile( \Twig_Node node, mixed raw = true ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node** |  |
| `raw` | **mixed** |  |


**Return Value:**





---
### Twig_Compiler::raw

Adds a raw string to the compiled code.

```php
Twig_Compiler::raw( string string ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `string` | **string** | The string |


**Return Value:**





---
### Twig_Compiler::write

Writes a string to the compiled code by adding indentation.

```php
Twig_Compiler::write( mixed strings ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strings` | **mixed** |  |


**Return Value:**





---
### Twig_Compiler::string

Adds a quoted string to the compiled code.

```php
Twig_Compiler::string( string value ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `value` | **string** | The string |


**Return Value:**





---
### Twig_Compiler::repr

Returns a PHP representation of a given value.

```php
Twig_Compiler::repr( mixed value ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `value` | **mixed** | The value to convert |


**Return Value:**





---
### Twig_Compiler::addDebugInfo

Adds debugging information.

```php
Twig_Compiler::addDebugInfo( \Twig_Node node ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node** |  |


**Return Value:**





---
### Twig_Compiler::getDebugInfo



```php
Twig_Compiler::getDebugInfo(  ): mixed
```





**Return Value:**





---
### Twig_Compiler::indent

Indents the generated code.

```php
Twig_Compiler::indent( int step = 1 ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `step` | **int** | The number of indentation to add |


**Return Value:**





---
### Twig_Compiler::outdent

Outdents the generated code.

```php
Twig_Compiler::outdent( int step = 1 ): $this
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `step` | **int** | The number of indentation to remove |


**Return Value:**





---
### Twig_Compiler::getVarName



```php
Twig_Compiler::getVarName(  ): mixed
```





**Return Value:**





---
## Twig_Environment

Stores the Twig configuration.



* Full name: \Twig_Environment


### Twig_Environment::__construct

Constructor.

```php
Twig_Environment::__construct( \Twig_LoaderInterface loader, array options = array() ): mixed
```

Available options:

* debug: When set to true, it automatically set "auto_reload" to true as
         well (default to false).

* charset: The charset used by the templates (default to UTF-8).

* base_template_class: The base template class to use for generated
                       templates (default to Twig_Template).

* cache: An absolute path where to store the compiled templates,
         a Twig_Cache_Interface implementation,
         or false to disable compilation cache (default).

* auto_reload: Whether to reload the template if the original source changed.
               If you don't provide the auto_reload option, it will be
               determined automatically based on the debug value.

* strict_variables: Whether to ignore invalid variables in templates
                    (default to false).

* autoescape: Whether to enable auto-escaping (default to html):
                * false: disable auto-escaping
                * html, js: set the autoescaping to one of the supported strategies
                * name: set the autoescaping strategy based on the template name extension
                * PHP callback: a PHP callback that returns an escaping strategy based on the template "name"

* optimizations: A flag that indicates which optimizations to apply
                 (default to -1 which means that all optimizations are enabled;
                 set it to 0 to disable).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `loader` | **\Twig_LoaderInterface** |  |
| `options` | **array** | An array of options |


**Return Value:**





---
### Twig_Environment::getBaseTemplateClass

Gets the base template class for compiled templates.

```php
Twig_Environment::getBaseTemplateClass(  ): string
```





**Return Value:**

The base template class name



---
### Twig_Environment::setBaseTemplateClass

Sets the base template class for compiled templates.

```php
Twig_Environment::setBaseTemplateClass( string class ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `class` | **string** | The base template class name |


**Return Value:**





---
### Twig_Environment::enableDebug

Enables debugging mode.

```php
Twig_Environment::enableDebug(  ): mixed
```





**Return Value:**





---
### Twig_Environment::disableDebug

Disables debugging mode.

```php
Twig_Environment::disableDebug(  ): mixed
```





**Return Value:**





---
### Twig_Environment::isDebug

Checks if debug mode is enabled.

```php
Twig_Environment::isDebug(  ): bool
```





**Return Value:**

true if debug mode is enabled, false otherwise



---
### Twig_Environment::enableAutoReload

Enables the auto_reload option.

```php
Twig_Environment::enableAutoReload(  ): mixed
```





**Return Value:**





---
### Twig_Environment::disableAutoReload

Disables the auto_reload option.

```php
Twig_Environment::disableAutoReload(  ): mixed
```





**Return Value:**





---
### Twig_Environment::isAutoReload

Checks if the auto_reload option is enabled.

```php
Twig_Environment::isAutoReload(  ): bool
```





**Return Value:**

true if auto_reload is enabled, false otherwise



---
### Twig_Environment::enableStrictVariables

Enables the strict_variables option.

```php
Twig_Environment::enableStrictVariables(  ): mixed
```





**Return Value:**





---
### Twig_Environment::disableStrictVariables

Disables the strict_variables option.

```php
Twig_Environment::disableStrictVariables(  ): mixed
```





**Return Value:**





---
### Twig_Environment::isStrictVariables

Checks if the strict_variables option is enabled.

```php
Twig_Environment::isStrictVariables(  ): bool
```





**Return Value:**

true if strict_variables is enabled, false otherwise



---
### Twig_Environment::getCache

Gets the current cache implementation.

```php
Twig_Environment::getCache( bool original = true ): \Twig_CacheInterface|string|false
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `original` | **bool** | Whether to return the original cache option or the real cache instance |


**Return Value:**

A Twig_CacheInterface implementation,
an absolute path to the compiled templates,
or false to disable cache



---
### Twig_Environment::setCache

Sets the current cache implementation.

```php
Twig_Environment::setCache( \Twig_CacheInterface|string|false cache ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `cache` | **\Twig_CacheInterface\|string\|false** | A Twig_CacheInterface implementation,
an absolute path to the compiled templates,
or false to disable cache |


**Return Value:**





---
### Twig_Environment::getTemplateClass

Gets the template class associated with the given string.

```php
Twig_Environment::getTemplateClass( string name, int|null index = null ): string
```

The generated template class is based on the following parameters:

* The cache key for the given template;
* The currently enabled extensions;
* Whether the Twig C extension is available or not;
* PHP version;
* Twig version;
* Options with what environment was created.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | The name for which to calculate the template class name |
| `index` | **int\|null** | The index if it is an embedded template |


**Return Value:**

The template class name



---
### Twig_Environment::render

Renders a template.

```php
Twig_Environment::render( string name, array context = array() ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | The template name |
| `context` | **array** | An array of parameters to pass to the template |


**Return Value:**

The rendered template



---
### Twig_Environment::display

Displays a template.

```php
Twig_Environment::display( string name, array context = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | The template name |
| `context` | **array** | An array of parameters to pass to the template |


**Return Value:**





---
### Twig_Environment::load

Loads a template.

```php
Twig_Environment::load( string|\Twig_TemplateWrapper|\Twig_Template name ): \Twig_TemplateWrapper
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string\|\Twig_TemplateWrapper\|\Twig_Template** | The template name |


**Return Value:**





---
### Twig_Environment::createTemplate

Creates a template from source.

```php
Twig_Environment::createTemplate( string template ): \Twig_Template
```

This method should not be used as a generic way to load templates.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `template` | **string** | The template name |


**Return Value:**

A template instance representing the given template name



---
### Twig_Environment::isTemplateFresh

Returns true if the template is still fresh.

```php
Twig_Environment::isTemplateFresh( string name, int time ): bool
```

Besides checking the loader for freshness information,
this method also checks if the enabled extensions have
not changed.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | The template name |
| `time` | **int** | The last modification time of the cached template |


**Return Value:**

true if the template is fresh, false otherwise



---
### Twig_Environment::resolveTemplate

Tries to load a template consecutively from an array.

```php
Twig_Environment::resolveTemplate( string|\Twig_Template|array names ): \Twig_Template
```

Similar to loadTemplate() but it also accepts Twig_Template instances and an array
of templates where each is tried to be loaded.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `names` | **string\|\Twig_Template\|array** | A template or an array of templates to try consecutively |


**Return Value:**





---
### Twig_Environment::setLexer



```php
Twig_Environment::setLexer( \Twig_Lexer lexer ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `lexer` | **\Twig_Lexer** |  |


**Return Value:**





---
### Twig_Environment::tokenize

Tokenizes a source code.

```php
Twig_Environment::tokenize( \Twig_Source source ): \Twig_TokenStream
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **\Twig_Source** |  |


**Return Value:**





---
### Twig_Environment::setParser



```php
Twig_Environment::setParser( \Twig_Parser parser ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `parser` | **\Twig_Parser** |  |


**Return Value:**





---
### Twig_Environment::parse

Converts a token stream to a node tree.

```php
Twig_Environment::parse( \Twig_TokenStream stream ): \Twig_Node_Module
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `stream` | **\Twig_TokenStream** |  |


**Return Value:**





---
### Twig_Environment::setCompiler



```php
Twig_Environment::setCompiler( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
### Twig_Environment::compile

Compiles a node and returns the PHP code.

```php
Twig_Environment::compile( \Twig_Node node ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node** |  |


**Return Value:**

The compiled PHP source code



---
### Twig_Environment::compileSource

Compiles a template source code.

```php
Twig_Environment::compileSource( \Twig_Source source ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **\Twig_Source** |  |


**Return Value:**

The compiled PHP source code



---
### Twig_Environment::setLoader



```php
Twig_Environment::setLoader( \Twig_LoaderInterface loader ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `loader` | **\Twig_LoaderInterface** |  |


**Return Value:**





---
### Twig_Environment::getLoader

Gets the Loader instance.

```php
Twig_Environment::getLoader(  ): \Twig_LoaderInterface
```





**Return Value:**





---
### Twig_Environment::setCharset

Sets the default template charset.

```php
Twig_Environment::setCharset( string charset ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `charset` | **string** | The default charset |


**Return Value:**





---
### Twig_Environment::getCharset

Gets the default template charset.

```php
Twig_Environment::getCharset(  ): string
```





**Return Value:**

The default charset



---
### Twig_Environment::hasExtension

Returns true if the given extension is registered.

```php
Twig_Environment::hasExtension( string class ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `class` | **string** | The extension class name |


**Return Value:**

Whether the extension is registered or not



---
### Twig_Environment::addRuntimeLoader

Adds a runtime loader.

```php
Twig_Environment::addRuntimeLoader( \Twig_RuntimeLoaderInterface loader ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `loader` | **\Twig_RuntimeLoaderInterface** |  |


**Return Value:**





---
### Twig_Environment::getExtension

Gets an extension by class name.

```php
Twig_Environment::getExtension( string class ): \Twig_ExtensionInterface
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `class` | **string** | The extension class name |


**Return Value:**





---
### Twig_Environment::getRuntime

Returns the runtime implementation of a Twig element (filter/function/test).

```php
Twig_Environment::getRuntime( string class ): object
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `class` | **string** | A runtime class name |


**Return Value:**

The runtime implementation



---
### Twig_Environment::addExtension



```php
Twig_Environment::addExtension( \Twig_ExtensionInterface extension ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `extension` | **\Twig_ExtensionInterface** |  |


**Return Value:**





---
### Twig_Environment::setExtensions

Registers an array of extensions.

```php
Twig_Environment::setExtensions( array extensions ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `extensions` | **array** | An array of extensions |


**Return Value:**





---
### Twig_Environment::getExtensions

Returns all registered extensions.

```php
Twig_Environment::getExtensions(  ): \Twig_ExtensionInterface[]
```





**Return Value:**

An array of extensions (keys are for internal usage only and should not be relied on)



---
### Twig_Environment::addTokenParser



```php
Twig_Environment::addTokenParser( \Twig_TokenParserInterface parser ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `parser` | **\Twig_TokenParserInterface** |  |


**Return Value:**





---
### Twig_Environment::addNodeVisitor



```php
Twig_Environment::addNodeVisitor( \Twig_NodeVisitorInterface visitor ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `visitor` | **\Twig_NodeVisitorInterface** |  |


**Return Value:**





---
### Twig_Environment::addFilter



```php
Twig_Environment::addFilter( \Twig_Filter filter ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filter` | **\Twig_Filter** |  |


**Return Value:**





---
### Twig_Environment::registerUndefinedFilterCallback



```php
Twig_Environment::registerUndefinedFilterCallback( callable callable ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `callable` | **callable** |  |


**Return Value:**





---
### Twig_Environment::addTest

Registers a Test.

```php
Twig_Environment::addTest( \Twig_Test test ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `test` | **\Twig_Test** | A Twig_Test instance |


**Return Value:**





---
### Twig_Environment::addFunction



```php
Twig_Environment::addFunction( \Twig_Function function ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `function` | **\Twig_Function** |  |


**Return Value:**





---
### Twig_Environment::registerUndefinedFunctionCallback



```php
Twig_Environment::registerUndefinedFunctionCallback( callable callable ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `callable` | **callable** |  |


**Return Value:**





---
### Twig_Environment::addGlobal

Registers a Global.

```php
Twig_Environment::addGlobal( string name, mixed value ): mixed
```

New globals can be added before compiling or rendering a template;
but after, you can only update existing globals.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | The global name |
| `value` | **mixed** | The global value |


**Return Value:**





---
### Twig_Environment::mergeGlobals

Merges a context with the defined globals.

```php
Twig_Environment::mergeGlobals( array context ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `context` | **array** | An array representing the context |


**Return Value:**

The context merged with the globals



---
## Twig_Error

Twig base exception.

This exception class and its children must only be used when
an error occurs during the loading of a template, when a syntax error
is detected in a template, or when rendering a template. Other
errors must use regular PHP exception classes (like when the template
cache directory is not writable for instance).

To help debugging template issues, this class tracks the original template
name and line where the error occurred.

Whenever possible, you must set these information (original template name
and line number) yourself by passing them to the constructor. If some or all
these information are not available from where you throw the exception, then
this class will guess them automatically (when the line number is set to -1
and/or the name is set to null). As this is a costly operation, this
can be disabled by passing false for both the name and the line number
when creating a new instance of this class.

* Full name: \Twig_Error
* Parent class: 


### Twig_Error::__construct

Constructor.

```php
Twig_Error::__construct( string message, int lineno = -1, \Twig_Source|string|null source = null, \Exception previous = null ): mixed
```

Set both the line number and the name to false to
disable automatic guessing of the original template name
and line number.

Set the line number to -1 to enable its automatic guessing.
Set the name to null to enable its automatic guessing.

By default, automatic guessing is enabled.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `message` | **string** | The error message |
| `lineno` | **int** | The template line where the error occurred |
| `source` | **\Twig_Source\|string\|null** | The source context where the error occurred |
| `previous` | **\Exception** | The previous exception |


**Return Value:**





---
### Twig_Error::getRawMessage

Gets the raw message.

```php
Twig_Error::getRawMessage(  ): string
```





**Return Value:**

The raw message



---
### Twig_Error::getTemplateLine

Gets the template line where the error occurred.

```php
Twig_Error::getTemplateLine(  ): int
```





**Return Value:**

The template line



---
### Twig_Error::setTemplateLine

Sets the template line where the error occurred.

```php
Twig_Error::setTemplateLine( int lineno ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `lineno` | **int** | The template line |


**Return Value:**





---
### Twig_Error::getSourceContext

Gets the source context of the Twig template where the error occurred.

```php
Twig_Error::getSourceContext(  ): \Twig_Source|null
```





**Return Value:**





---
### Twig_Error::setSourceContext

Sets the source context of the Twig template where the error occurred.

```php
Twig_Error::setSourceContext( \Twig_Source source = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **\Twig_Source** |  |


**Return Value:**





---
### Twig_Error::guess



```php
Twig_Error::guess(  ): mixed
```





**Return Value:**





---
### Twig_Error::appendMessage



```php
Twig_Error::appendMessage( mixed rawMessage ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `rawMessage` | **mixed** |  |


**Return Value:**





---
## Twig_Error_Loader

Exception thrown when an error occurs during template loading.

Automatic template information guessing is always turned off as
if a template cannot be loaded, there is nothing to guess.
However, when a template is loaded from another one, then, we need
to find the current context and this is automatically done by
Twig_Template::displayWithErrorHandling().

This strategy makes Twig_Environment::resolveTemplate() much faster.

* Full name: \Twig_Error_Loader
* Parent class: \Twig_Error


### Twig_Error_Loader::__construct

Constructor.

```php
Twig_Error_Loader::__construct( mixed message, mixed lineno = -1, mixed source = null, \Exception previous = null ): mixed
```

Set both the line number and the name to false to
disable automatic guessing of the original template name
and line number.

Set the line number to -1 to enable its automatic guessing.
Set the name to null to enable its automatic guessing.

By default, automatic guessing is enabled.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `message` | **mixed** | The error message |
| `lineno` | **mixed** | The template line where the error occurred |
| `source` | **mixed** | The source context where the error occurred |
| `previous` | **\Exception** | The previous exception |


**Return Value:**





---
## Twig_Error_Runtime

Exception thrown when an error occurs at runtime.



* Full name: \Twig_Error_Runtime
* Parent class: \Twig_Error


## Twig_Error_Syntax

Exception thrown when a syntax error occurs during lexing or parsing of a template.



* Full name: \Twig_Error_Syntax
* Parent class: \Twig_Error


### Twig_Error_Syntax::addSuggestions

Tweaks the error message to include suggestions.

```php
Twig_Error_Syntax::addSuggestions( string name, array items ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | The original name of the item that does not exist |
| `items` | **array** | An array of possible items |


**Return Value:**





---
## Twig_Extension_Core





* Full name: \Twig_Extension_Core
* Parent class: \Twig_Extension


### Twig_Extension_Core::setEscaper

Defines a new escaper to be used via the escape filter.

```php
Twig_Extension_Core::setEscaper( string strategy, callable callable ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strategy` | **string** | The strategy name that should be used as a strategy in the escape call |
| `callable` | **callable** | A valid PHP callable |


**Return Value:**





---
### Twig_Extension_Core::getEscapers

Gets all defined escapers.

```php
Twig_Extension_Core::getEscapers(  ): callable[]
```





**Return Value:**

An array of escapers



---
### Twig_Extension_Core::setDateFormat

Sets the default format to be used by the date filter.

```php
Twig_Extension_Core::setDateFormat( string format = null, string dateIntervalFormat = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `format` | **string** | The default date format string |
| `dateIntervalFormat` | **string** | The default date interval format string |


**Return Value:**





---
### Twig_Extension_Core::getDateFormat

Gets the default format to be used by the date filter.

```php
Twig_Extension_Core::getDateFormat(  ): array
```





**Return Value:**

The default date format string and the default date interval format string



---
### Twig_Extension_Core::setTimezone

Sets the default timezone to be used by the date filter.

```php
Twig_Extension_Core::setTimezone( \DateTimeZone|string timezone ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `timezone` | **\DateTimeZone\|string** | The default timezone string or a DateTimeZone object |


**Return Value:**





---
### Twig_Extension_Core::getTimezone

Gets the default timezone to be used by the date filter.

```php
Twig_Extension_Core::getTimezone(  ): \DateTimeZone
```





**Return Value:**

The default timezone currently in use



---
### Twig_Extension_Core::setNumberFormat

Sets the default format to be used by the number_format filter.

```php
Twig_Extension_Core::setNumberFormat( int decimal, string decimalPoint, string thousandSep ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `decimal` | **int** | the number of decimal places to use |
| `decimalPoint` | **string** | the character(s) to use for the decimal point |
| `thousandSep` | **string** | the character(s) to use for the thousands separator |


**Return Value:**





---
### Twig_Extension_Core::getNumberFormat

Get the default format used by the number_format filter.

```php
Twig_Extension_Core::getNumberFormat(  ): array
```





**Return Value:**

The arguments for number_format()



---
### Twig_Extension_Core::getTokenParsers

Returns the token parser instances to add to the existing list.

```php
Twig_Extension_Core::getTokenParsers(  ): \Twig_TokenParserInterface[]
```





**Return Value:**





---
### Twig_Extension_Core::getFilters

Returns a list of filters to add to the existing list.

```php
Twig_Extension_Core::getFilters(  ): \Twig_SimpleFilter[]
```





**Return Value:**





---
### Twig_Extension_Core::getFunctions

Returns a list of functions to add to the existing list.

```php
Twig_Extension_Core::getFunctions(  ): \Twig_SimpleFunction[]
```





**Return Value:**





---
### Twig_Extension_Core::getTests

Returns a list of tests to add to the existing list.

```php
Twig_Extension_Core::getTests(  ): \Twig_SimpleTest[]
```





**Return Value:**





---
### Twig_Extension_Core::getOperators

Returns a list of operators to add to the existing list.

```php
Twig_Extension_Core::getOperators(  ): array[]
```





**Return Value:**

First array of unary operators, second array of binary operators



---
## Twig_Extension_Debug





* Full name: \Twig_Extension_Debug
* Parent class: \Twig_Extension


### Twig_Extension_Debug::getFunctions

Returns a list of functions to add to the existing list.

```php
Twig_Extension_Debug::getFunctions(  ): \Twig_SimpleFunction[]
```





**Return Value:**





---
## Twig_Extension_Escaper





* Full name: \Twig_Extension_Escaper
* Parent class: \Twig_Extension


### Twig_Extension_Escaper::__construct



```php
Twig_Extension_Escaper::__construct( string|false|callable defaultStrategy = 'html' ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `defaultStrategy` | **string\|false\|callable** | An escaping strategy |


**Return Value:**




**See Also:**

* \setDefaultStrategy() - 

---
### Twig_Extension_Escaper::getTokenParsers

Returns the token parser instances to add to the existing list.

```php
Twig_Extension_Escaper::getTokenParsers(  ): \Twig_TokenParserInterface[]
```





**Return Value:**





---
### Twig_Extension_Escaper::getNodeVisitors

Returns the node visitor instances to add to the existing list.

```php
Twig_Extension_Escaper::getNodeVisitors(  ): \Twig_NodeVisitorInterface[]
```





**Return Value:**





---
### Twig_Extension_Escaper::getFilters

Returns a list of filters to add to the existing list.

```php
Twig_Extension_Escaper::getFilters(  ): \Twig_SimpleFilter[]
```





**Return Value:**





---
### Twig_Extension_Escaper::setDefaultStrategy

Sets the default strategy to use when not defined by the user.

```php
Twig_Extension_Escaper::setDefaultStrategy( string|false|callable defaultStrategy ): mixed
```

The strategy can be a valid PHP callback that takes the template
name as an argument and returns the strategy to use.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `defaultStrategy` | **string\|false\|callable** | An escaping strategy |


**Return Value:**





---
### Twig_Extension_Escaper::getDefaultStrategy

Gets the default strategy to use when not defined by the user.

```php
Twig_Extension_Escaper::getDefaultStrategy( string name ): string|false
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | The template name |


**Return Value:**

The default strategy to use for the template



---
## Twig_Extension_Optimizer





* Full name: \Twig_Extension_Optimizer
* Parent class: \Twig_Extension


### Twig_Extension_Optimizer::__construct



```php
Twig_Extension_Optimizer::__construct( mixed optimizers = -1 ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `optimizers` | **mixed** |  |


**Return Value:**





---
### Twig_Extension_Optimizer::getNodeVisitors

Returns the node visitor instances to add to the existing list.

```php
Twig_Extension_Optimizer::getNodeVisitors(  ): \Twig_NodeVisitorInterface[]
```





**Return Value:**





---
## Twig_Extension_Profiler





* Full name: \Twig_Extension_Profiler
* Parent class: \Twig_Extension


### Twig_Extension_Profiler::__construct



```php
Twig_Extension_Profiler::__construct( \Twig_Profiler_Profile profile ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `profile` | **\Twig_Profiler_Profile** |  |


**Return Value:**





---
### Twig_Extension_Profiler::enter



```php
Twig_Extension_Profiler::enter( \Twig_Profiler_Profile profile ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `profile` | **\Twig_Profiler_Profile** |  |


**Return Value:**





---
### Twig_Extension_Profiler::leave



```php
Twig_Extension_Profiler::leave( \Twig_Profiler_Profile profile ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `profile` | **\Twig_Profiler_Profile** |  |


**Return Value:**





---
### Twig_Extension_Profiler::getNodeVisitors

Returns the node visitor instances to add to the existing list.

```php
Twig_Extension_Profiler::getNodeVisitors(  ): \Twig_NodeVisitorInterface[]
```





**Return Value:**





---
## Twig_Extension_Sandbox





* Full name: \Twig_Extension_Sandbox
* Parent class: \Twig_Extension


### Twig_Extension_Sandbox::__construct



```php
Twig_Extension_Sandbox::__construct( \Twig_Sandbox_SecurityPolicyInterface policy, mixed sandboxed = false ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `policy` | **\Twig_Sandbox_SecurityPolicyInterface** |  |
| `sandboxed` | **mixed** |  |


**Return Value:**





---
### Twig_Extension_Sandbox::getTokenParsers

Returns the token parser instances to add to the existing list.

```php
Twig_Extension_Sandbox::getTokenParsers(  ): \Twig_TokenParserInterface[]
```





**Return Value:**





---
### Twig_Extension_Sandbox::getNodeVisitors

Returns the node visitor instances to add to the existing list.

```php
Twig_Extension_Sandbox::getNodeVisitors(  ): \Twig_NodeVisitorInterface[]
```





**Return Value:**





---
### Twig_Extension_Sandbox::enableSandbox



```php
Twig_Extension_Sandbox::enableSandbox(  ): mixed
```





**Return Value:**





---
### Twig_Extension_Sandbox::disableSandbox



```php
Twig_Extension_Sandbox::disableSandbox(  ): mixed
```





**Return Value:**





---
### Twig_Extension_Sandbox::isSandboxed



```php
Twig_Extension_Sandbox::isSandboxed(  ): mixed
```





**Return Value:**





---
### Twig_Extension_Sandbox::isSandboxedGlobally



```php
Twig_Extension_Sandbox::isSandboxedGlobally(  ): mixed
```





**Return Value:**





---
### Twig_Extension_Sandbox::setSecurityPolicy



```php
Twig_Extension_Sandbox::setSecurityPolicy( \Twig_Sandbox_SecurityPolicyInterface policy ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `policy` | **\Twig_Sandbox_SecurityPolicyInterface** |  |


**Return Value:**





---
### Twig_Extension_Sandbox::getSecurityPolicy



```php
Twig_Extension_Sandbox::getSecurityPolicy(  ): mixed
```





**Return Value:**





---
### Twig_Extension_Sandbox::checkSecurity



```php
Twig_Extension_Sandbox::checkSecurity( mixed tags, mixed filters, mixed functions ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `tags` | **mixed** |  |
| `filters` | **mixed** |  |
| `functions` | **mixed** |  |


**Return Value:**





---
### Twig_Extension_Sandbox::checkMethodAllowed



```php
Twig_Extension_Sandbox::checkMethodAllowed( mixed obj, mixed method ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `obj` | **mixed** |  |
| `method` | **mixed** |  |


**Return Value:**





---
### Twig_Extension_Sandbox::checkPropertyAllowed



```php
Twig_Extension_Sandbox::checkPropertyAllowed( mixed obj, mixed method ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `obj` | **mixed** |  |
| `method` | **mixed** |  |


**Return Value:**





---
### Twig_Extension_Sandbox::ensureToStringAllowed



```php
Twig_Extension_Sandbox::ensureToStringAllowed( mixed obj ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `obj` | **mixed** |  |


**Return Value:**





---
## Twig_Extension_StringLoader





* Full name: \Twig_Extension_StringLoader
* Parent class: \Twig_Extension


### Twig_Extension_StringLoader::getFunctions

Returns a list of functions to add to the existing list.

```php
Twig_Extension_StringLoader::getFunctions(  ): \Twig_SimpleFunction[]
```





**Return Value:**





---
## Twig_FactoryRuntimeLoader

Lazy loads the runtime implementations for a Twig element.



* Full name: \Twig_FactoryRuntimeLoader
* This class implements: \Twig_RuntimeLoaderInterface


### Twig_FactoryRuntimeLoader::__construct



```php
Twig_FactoryRuntimeLoader::__construct( array map = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `map` | **array** | An array where keys are class names and values factory callables |


**Return Value:**





---
### Twig_FactoryRuntimeLoader::load

Creates the runtime implementation of a Twig element (filter/function/test).

```php
Twig_FactoryRuntimeLoader::load( mixed class ): object|null
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `class` | **mixed** | A runtime class |


**Return Value:**

The runtime instance or null if the loader does not know how to create the runtime for this class



---
## Twig_FileExtensionEscapingStrategy

Default autoescaping strategy based on file names.

This strategy sets the HTML as the default autoescaping strategy,
but changes it based on the template name.

Note that there is no runtime performance impact as the
default autoescaping strategy is set at compilation time.

* Full name: \Twig_FileExtensionEscapingStrategy


### Twig_FileExtensionEscapingStrategy::guess

Guesses the best autoescaping strategy based on the file name.

```php
Twig_FileExtensionEscapingStrategy::guess( string name ): string|false
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | The template name |


**Return Value:**

The escaping strategy name to use or false to disable



---
## Twig_Filter

Represents a template filter.



* Full name: \Twig_Filter

**See Also:**

* http://twig.sensiolabs.org/doc/templates.html#filters - 

### Twig_Filter::__construct

Creates a template filter.

```php
Twig_Filter::__construct( string name, callable|null callable = null, array options = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | Name of this filter |
| `callable` | **callable\|null** | A callable implementing the filter. If null, you need to overwrite the &quot;node_class&quot; option to customize compilation. |
| `options` | **array** | Options array |


**Return Value:**





---
### Twig_Filter::getName



```php
Twig_Filter::getName(  ): mixed
```





**Return Value:**





---
### Twig_Filter::getCallable

Returns the callable to execute for this filter.

```php
Twig_Filter::getCallable(  ): callable|null
```





**Return Value:**





---
### Twig_Filter::getNodeClass



```php
Twig_Filter::getNodeClass(  ): mixed
```





**Return Value:**





---
### Twig_Filter::setArguments



```php
Twig_Filter::setArguments( mixed arguments ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `arguments` | **mixed** |  |


**Return Value:**





---
### Twig_Filter::getArguments



```php
Twig_Filter::getArguments(  ): mixed
```





**Return Value:**





---
### Twig_Filter::needsEnvironment



```php
Twig_Filter::needsEnvironment(  ): mixed
```





**Return Value:**





---
### Twig_Filter::needsContext



```php
Twig_Filter::needsContext(  ): mixed
```





**Return Value:**





---
### Twig_Filter::getSafe



```php
Twig_Filter::getSafe( \Twig_Node filterArgs ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filterArgs` | **\Twig_Node** |  |


**Return Value:**





---
### Twig_Filter::getPreservesSafety



```php
Twig_Filter::getPreservesSafety(  ): mixed
```





**Return Value:**





---
### Twig_Filter::getPreEscape



```php
Twig_Filter::getPreEscape(  ): mixed
```





**Return Value:**





---
### Twig_Filter::isVariadic



```php
Twig_Filter::isVariadic(  ): mixed
```





**Return Value:**





---
### Twig_Filter::isDeprecated



```php
Twig_Filter::isDeprecated(  ): mixed
```





**Return Value:**





---
### Twig_Filter::getDeprecatedVersion



```php
Twig_Filter::getDeprecatedVersion(  ): mixed
```





**Return Value:**





---
### Twig_Filter::getAlternative



```php
Twig_Filter::getAlternative(  ): mixed
```





**Return Value:**





---
## Twig_Function

Represents a template function.



* Full name: \Twig_Function

**See Also:**

* http://twig.sensiolabs.org/doc/templates.html#functions - 

### Twig_Function::__construct

Creates a template function.

```php
Twig_Function::__construct( string name, callable|null callable = null, array options = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | Name of this function |
| `callable` | **callable\|null** | A callable implementing the function. If null, you need to overwrite the &quot;node_class&quot; option to customize compilation. |
| `options` | **array** | Options array |


**Return Value:**





---
### Twig_Function::getName



```php
Twig_Function::getName(  ): mixed
```





**Return Value:**





---
### Twig_Function::getCallable

Returns the callable to execute for this function.

```php
Twig_Function::getCallable(  ): callable|null
```





**Return Value:**





---
### Twig_Function::getNodeClass



```php
Twig_Function::getNodeClass(  ): mixed
```





**Return Value:**





---
### Twig_Function::setArguments



```php
Twig_Function::setArguments( mixed arguments ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `arguments` | **mixed** |  |


**Return Value:**





---
### Twig_Function::getArguments



```php
Twig_Function::getArguments(  ): mixed
```





**Return Value:**





---
### Twig_Function::needsEnvironment



```php
Twig_Function::needsEnvironment(  ): mixed
```





**Return Value:**





---
### Twig_Function::needsContext



```php
Twig_Function::needsContext(  ): mixed
```





**Return Value:**





---
### Twig_Function::getSafe



```php
Twig_Function::getSafe( \Twig_Node functionArgs ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `functionArgs` | **\Twig_Node** |  |


**Return Value:**





---
### Twig_Function::isVariadic



```php
Twig_Function::isVariadic(  ): mixed
```





**Return Value:**





---
### Twig_Function::isDeprecated



```php
Twig_Function::isDeprecated(  ): mixed
```





**Return Value:**





---
### Twig_Function::getDeprecatedVersion



```php
Twig_Function::getDeprecatedVersion(  ): mixed
```





**Return Value:**





---
### Twig_Function::getAlternative



```php
Twig_Function::getAlternative(  ): mixed
```





**Return Value:**





---
## Twig_Lexer

Lexes a template string.



* Full name: \Twig_Lexer


### Twig_Lexer::__construct



```php
Twig_Lexer::__construct( \Twig_Environment env, array options = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `env` | **\Twig_Environment** |  |
| `options` | **array** |  |


**Return Value:**





---
### Twig_Lexer::tokenize



```php
Twig_Lexer::tokenize( \Twig_Source source ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **\Twig_Source** |  |


**Return Value:**





---
## Twig_Loader_Array

Loads a template from an array.

When using this loader with a cache mechanism, you should know that a new cache
key is generated each time a template content "changes" (the cache key being the
source code of the template). If you don't want to see your cache grows out of
control, you need to take care of clearing the old cache file by yourself.

This loader should only be used for unit testing.

* Full name: \Twig_Loader_Array
* This class implements: \Twig_LoaderInterface, \Twig_ExistsLoaderInterface, \Twig_SourceContextLoaderInterface


### Twig_Loader_Array::__construct



```php
Twig_Loader_Array::__construct( array templates = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `templates` | **array** | An array of templates (keys are the names, and values are the source code) |


**Return Value:**





---
### Twig_Loader_Array::setTemplate

Adds or overrides a template.

```php
Twig_Loader_Array::setTemplate( string name, string template ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | The template name |
| `template` | **string** | The template source |


**Return Value:**





---
### Twig_Loader_Array::getSourceContext

Returns the source context for a given template logical name.

```php
Twig_Loader_Array::getSourceContext( mixed name ): \Twig_Source
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** | The template logical name |


**Return Value:**





---
### Twig_Loader_Array::exists

Check if we have the source code of a template, given its name.

```php
Twig_Loader_Array::exists( mixed name ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** | The name of the template to check if we can load |


**Return Value:**

If the template source code is handled by this loader or not



---
### Twig_Loader_Array::getCacheKey

Gets the cache key to use for the cache for a given template name.

```php
Twig_Loader_Array::getCacheKey( mixed name ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** | The name of the template to load |


**Return Value:**

The cache key



---
### Twig_Loader_Array::isFresh

Returns true if the template is still fresh.

```php
Twig_Loader_Array::isFresh( mixed name, mixed time ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** | The template name |
| `time` | **mixed** | Timestamp of the last modification time of the
cached template |


**Return Value:**

true if the template is fresh, false otherwise



---
## Twig_Loader_Chain

Loads templates from other loaders.



* Full name: \Twig_Loader_Chain
* This class implements: \Twig_LoaderInterface, \Twig_ExistsLoaderInterface, \Twig_SourceContextLoaderInterface


### Twig_Loader_Chain::__construct



```php
Twig_Loader_Chain::__construct( \Twig_LoaderInterface[] loaders = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `loaders` | **\Twig_LoaderInterface[]** |  |


**Return Value:**





---
### Twig_Loader_Chain::addLoader



```php
Twig_Loader_Chain::addLoader( \Twig_LoaderInterface loader ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `loader` | **\Twig_LoaderInterface** |  |


**Return Value:**





---
### Twig_Loader_Chain::getSourceContext

Returns the source context for a given template logical name.

```php
Twig_Loader_Chain::getSourceContext( mixed name ): \Twig_Source
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** | The template logical name |


**Return Value:**





---
### Twig_Loader_Chain::exists

Check if we have the source code of a template, given its name.

```php
Twig_Loader_Chain::exists( mixed name ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** | The name of the template to check if we can load |


**Return Value:**

If the template source code is handled by this loader or not



---
### Twig_Loader_Chain::getCacheKey

Gets the cache key to use for the cache for a given template name.

```php
Twig_Loader_Chain::getCacheKey( mixed name ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** | The name of the template to load |


**Return Value:**

The cache key



---
### Twig_Loader_Chain::isFresh

Returns true if the template is still fresh.

```php
Twig_Loader_Chain::isFresh( mixed name, mixed time ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** | The template name |
| `time` | **mixed** | Timestamp of the last modification time of the
cached template |


**Return Value:**

true if the template is fresh, false otherwise



---
## Twig_Loader_Filesystem

Loads template from the filesystem.



* Full name: \Twig_Loader_Filesystem
* This class implements: \Twig_LoaderInterface, \Twig_ExistsLoaderInterface, \Twig_SourceContextLoaderInterface


### Twig_Loader_Filesystem::__construct



```php
Twig_Loader_Filesystem::__construct( string|array paths = array(), string|null rootPath = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `paths` | **string\|array** | A path or an array of paths where to look for templates |
| `rootPath` | **string\|null** | The root path common to all relative paths (null for getcwd()) |


**Return Value:**





---
### Twig_Loader_Filesystem::getPaths

Returns the paths to the templates.

```php
Twig_Loader_Filesystem::getPaths( string namespace = self::MAIN_NAMESPACE ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `namespace` | **string** | A path namespace |


**Return Value:**

The array of paths where to look for templates



---
### Twig_Loader_Filesystem::getNamespaces

Returns the path namespaces.

```php
Twig_Loader_Filesystem::getNamespaces(  ): array
```

The main namespace is always defined.



**Return Value:**

The array of defined namespaces



---
### Twig_Loader_Filesystem::setPaths

Sets the paths where templates are stored.

```php
Twig_Loader_Filesystem::setPaths( string|array paths, string namespace = self::MAIN_NAMESPACE ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `paths` | **string\|array** | A path or an array of paths where to look for templates |
| `namespace` | **string** | A path namespace |


**Return Value:**





---
### Twig_Loader_Filesystem::addPath

Adds a path where templates are stored.

```php
Twig_Loader_Filesystem::addPath( string path, string namespace = self::MAIN_NAMESPACE ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** | A path where to look for templates |
| `namespace` | **string** | A path namespace |


**Return Value:**





---
### Twig_Loader_Filesystem::prependPath

Prepends a path where templates are stored.

```php
Twig_Loader_Filesystem::prependPath( string path, string namespace = self::MAIN_NAMESPACE ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** | A path where to look for templates |
| `namespace` | **string** | A path namespace |


**Return Value:**





---
### Twig_Loader_Filesystem::getSourceContext

Returns the source context for a given template logical name.

```php
Twig_Loader_Filesystem::getSourceContext( mixed name ): \Twig_Source
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** | The template logical name |


**Return Value:**





---
### Twig_Loader_Filesystem::getCacheKey

Gets the cache key to use for the cache for a given template name.

```php
Twig_Loader_Filesystem::getCacheKey( mixed name ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** | The name of the template to load |


**Return Value:**

The cache key



---
### Twig_Loader_Filesystem::exists

Check if we have the source code of a template, given its name.

```php
Twig_Loader_Filesystem::exists( mixed name ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** | The name of the template to check if we can load |


**Return Value:**

If the template source code is handled by this loader or not



---
### Twig_Loader_Filesystem::isFresh

Returns true if the template is still fresh.

```php
Twig_Loader_Filesystem::isFresh( mixed name, mixed time ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** | The template name |
| `time` | **mixed** | Timestamp of the last modification time of the
cached template |


**Return Value:**

true if the template is fresh, false otherwise



---
## Twig_Markup

Marks a content as safe.



* Full name: \Twig_Markup
* This class implements: \Countable, \JsonSerializable


### Twig_Markup::__construct



```php
Twig_Markup::__construct( mixed content, mixed charset ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content` | **mixed** |  |
| `charset` | **mixed** |  |


**Return Value:**





---
### Twig_Markup::__toString



```php
Twig_Markup::__toString(  ): mixed
```





**Return Value:**





---
### Twig_Markup::count



```php
Twig_Markup::count(  ): mixed
```





**Return Value:**





---
### Twig_Markup::jsonSerialize



```php
Twig_Markup::jsonSerialize(  ): mixed
```





**Return Value:**





---
## Twig_Node

Represents a node in the AST.



* Full name: \Twig_Node
* This class implements: \Countable, \IteratorAggregate


### Twig_Node::__construct

Constructor.

```php
Twig_Node::__construct( array nodes = array(), array attributes = array(), int lineno, string tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `nodes` | **array** | An array of named nodes |
| `attributes` | **array** | An array of attributes (should not be nodes) |
| `lineno` | **int** | The line number |
| `tag` | **string** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node::__toString



```php
Twig_Node::__toString(  ): mixed
```





**Return Value:**





---
### Twig_Node::compile



```php
Twig_Node::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
### Twig_Node::getTemplateLine



```php
Twig_Node::getTemplateLine(  ): mixed
```





**Return Value:**





---
### Twig_Node::getNodeTag



```php
Twig_Node::getNodeTag(  ): mixed
```





**Return Value:**





---
### Twig_Node::hasAttribute



```php
Twig_Node::hasAttribute( mixed name ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_Node::getAttribute



```php
Twig_Node::getAttribute( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_Node::setAttribute



```php
Twig_Node::setAttribute( string name, mixed value ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** |  |
| `value` | **mixed** |  |


**Return Value:**





---
### Twig_Node::removeAttribute



```php
Twig_Node::removeAttribute( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_Node::hasNode



```php
Twig_Node::hasNode( mixed name ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_Node::getNode



```php
Twig_Node::getNode( mixed name ): \Twig_Node
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_Node::setNode



```php
Twig_Node::setNode( mixed name, \Twig_Node node ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |
| `node` | **\Twig_Node** |  |


**Return Value:**





---
### Twig_Node::removeNode



```php
Twig_Node::removeNode( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_Node::count



```php
Twig_Node::count(  ): mixed
```





**Return Value:**





---
### Twig_Node::getIterator



```php
Twig_Node::getIterator(  ): mixed
```





**Return Value:**





---
### Twig_Node::setTemplateName



```php
Twig_Node::setTemplateName( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_Node::getTemplateName



```php
Twig_Node::getTemplateName(  ): mixed
```





**Return Value:**





---
## Twig_Node_AutoEscape

Represents an autoescape node.

The value is the escaping strategy (can be html, js, ...)

The true value is equivalent to html.

If autoescaping is disabled, then the value is false.

* Full name: \Twig_Node_AutoEscape
* Parent class: \Twig_Node


### Twig_Node_AutoEscape::__construct

Constructor.

```php
Twig_Node_AutoEscape::__construct( mixed value, \Twig_Node body, mixed lineno, mixed tag = 'autoescape' ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `value` | **mixed** |  |
| `body` | **\Twig_Node** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_AutoEscape::compile



```php
Twig_Node_AutoEscape::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Block

Represents a block node.



* Full name: \Twig_Node_Block
* Parent class: \Twig_Node


### Twig_Node_Block::__construct

Constructor.

```php
Twig_Node_Block::__construct( mixed name, \Twig_Node body, mixed lineno, mixed tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |
| `body` | **\Twig_Node** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_Block::compile



```php
Twig_Node_Block::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_BlockReference

Represents a block call node.



* Full name: \Twig_Node_BlockReference
* Parent class: \Twig_Node
* This class implements: \Twig_NodeOutputInterface


### Twig_Node_BlockReference::__construct

Constructor.

```php
Twig_Node_BlockReference::__construct( mixed name, mixed lineno, mixed tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_BlockReference::compile



```php
Twig_Node_BlockReference::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Body

Represents a body node.



* Full name: \Twig_Node_Body
* Parent class: \Twig_Node


## Twig_Node_CheckSecurity

Represents a node in the AST.



* Full name: \Twig_Node_CheckSecurity
* Parent class: \Twig_Node


### Twig_Node_CheckSecurity::__construct

Constructor.

```php
Twig_Node_CheckSecurity::__construct( array usedFilters, array usedTags, array usedFunctions ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `usedFilters` | **array** |  |
| `usedTags` | **array** |  |
| `usedFunctions` | **array** |  |


**Return Value:**





---
### Twig_Node_CheckSecurity::compile



```php
Twig_Node_CheckSecurity::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Do

Represents a do node.



* Full name: \Twig_Node_Do
* Parent class: \Twig_Node


### Twig_Node_Do::__construct

Constructor.

```php
Twig_Node_Do::__construct( \Twig_Node_Expression expr, mixed lineno, mixed tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `expr` | **\Twig_Node_Expression** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_Do::compile



```php
Twig_Node_Do::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Embed

Represents an embed node.



* Full name: \Twig_Node_Embed
* Parent class: \Twig_Node_Include


### Twig_Node_Embed::__construct

Constructor.

```php
Twig_Node_Embed::__construct( mixed name, mixed index, \Twig_Node_Expression variables = null, mixed only = false, mixed ignoreMissing = false, mixed lineno, mixed tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |
| `index` | **mixed** |  |
| `variables` | **\Twig_Node_Expression** |  |
| `only` | **mixed** |  |
| `ignoreMissing` | **mixed** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
## Twig_Node_Expression_Array

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Array
* Parent class: \Twig_Node_Expression


### Twig_Node_Expression_Array::__construct



```php
Twig_Node_Expression_Array::__construct( array elements, mixed lineno ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `elements` | **array** |  |
| `lineno` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_Array::getKeyValuePairs



```php
Twig_Node_Expression_Array::getKeyValuePairs(  ): mixed
```





**Return Value:**





---
### Twig_Node_Expression_Array::hasElement



```php
Twig_Node_Expression_Array::hasElement( \Twig_Node_Expression key ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **\Twig_Node_Expression** |  |


**Return Value:**





---
### Twig_Node_Expression_Array::addElement



```php
Twig_Node_Expression_Array::addElement( \Twig_Node_Expression value, \Twig_Node_Expression key = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `value` | **\Twig_Node_Expression** |  |
| `key` | **\Twig_Node_Expression** |  |


**Return Value:**





---
### Twig_Node_Expression_Array::compile



```php
Twig_Node_Expression_Array::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_AssignName

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_AssignName
* Parent class: \Twig_Node_Expression_Name


### Twig_Node_Expression_AssignName::compile



```php
Twig_Node_Expression_AssignName::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_Add

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_Add
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_Add::operator



```php
Twig_Node_Expression_Binary_Add::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_And

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_And
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_And::operator



```php
Twig_Node_Expression_Binary_And::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_BitwiseAnd

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_BitwiseAnd
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_BitwiseAnd::operator



```php
Twig_Node_Expression_Binary_BitwiseAnd::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_BitwiseOr

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_BitwiseOr
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_BitwiseOr::operator



```php
Twig_Node_Expression_Binary_BitwiseOr::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_BitwiseXor

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_BitwiseXor
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_BitwiseXor::operator



```php
Twig_Node_Expression_Binary_BitwiseXor::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_Concat

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_Concat
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_Concat::operator



```php
Twig_Node_Expression_Binary_Concat::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_Div

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_Div
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_Div::operator



```php
Twig_Node_Expression_Binary_Div::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_EndsWith

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_EndsWith
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_EndsWith::compile



```php
Twig_Node_Expression_Binary_EndsWith::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
### Twig_Node_Expression_Binary_EndsWith::operator



```php
Twig_Node_Expression_Binary_EndsWith::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_Equal

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_Equal
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_Equal::operator



```php
Twig_Node_Expression_Binary_Equal::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_FloorDiv

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_FloorDiv
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_FloorDiv::compile



```php
Twig_Node_Expression_Binary_FloorDiv::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
### Twig_Node_Expression_Binary_FloorDiv::operator



```php
Twig_Node_Expression_Binary_FloorDiv::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_Greater

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_Greater
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_Greater::operator



```php
Twig_Node_Expression_Binary_Greater::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_GreaterEqual

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_GreaterEqual
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_GreaterEqual::operator



```php
Twig_Node_Expression_Binary_GreaterEqual::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_In

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_In
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_In::compile



```php
Twig_Node_Expression_Binary_In::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
### Twig_Node_Expression_Binary_In::operator



```php
Twig_Node_Expression_Binary_In::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_Less

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_Less
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_Less::operator



```php
Twig_Node_Expression_Binary_Less::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_LessEqual

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_LessEqual
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_LessEqual::operator



```php
Twig_Node_Expression_Binary_LessEqual::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_Matches

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_Matches
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_Matches::compile



```php
Twig_Node_Expression_Binary_Matches::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
### Twig_Node_Expression_Binary_Matches::operator



```php
Twig_Node_Expression_Binary_Matches::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_Mod

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_Mod
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_Mod::operator



```php
Twig_Node_Expression_Binary_Mod::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_Mul

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_Mul
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_Mul::operator



```php
Twig_Node_Expression_Binary_Mul::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_NotEqual

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_NotEqual
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_NotEqual::operator



```php
Twig_Node_Expression_Binary_NotEqual::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_NotIn

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_NotIn
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_NotIn::compile



```php
Twig_Node_Expression_Binary_NotIn::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
### Twig_Node_Expression_Binary_NotIn::operator



```php
Twig_Node_Expression_Binary_NotIn::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_Or

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_Or
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_Or::operator



```php
Twig_Node_Expression_Binary_Or::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_Power

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_Power
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_Power::operator



```php
Twig_Node_Expression_Binary_Power::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_Range

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_Range
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_Range::compile



```php
Twig_Node_Expression_Binary_Range::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
### Twig_Node_Expression_Binary_Range::operator



```php
Twig_Node_Expression_Binary_Range::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_StartsWith

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_StartsWith
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_StartsWith::compile



```php
Twig_Node_Expression_Binary_StartsWith::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
### Twig_Node_Expression_Binary_StartsWith::operator



```php
Twig_Node_Expression_Binary_StartsWith::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Binary_Sub

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Binary_Sub
* Parent class: \Twig_Node_Expression_Binary


### Twig_Node_Expression_Binary_Sub::operator



```php
Twig_Node_Expression_Binary_Sub::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_BlockReference

Represents a block call node.



* Full name: \Twig_Node_Expression_BlockReference
* Parent class: \Twig_Node_Expression


### Twig_Node_Expression_BlockReference::__construct



```php
Twig_Node_Expression_BlockReference::__construct( \Twig_Node name, \Twig_Node template = null, mixed lineno, mixed tag = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **\Twig_Node** |  |
| `template` | **\Twig_Node** |  |
| `lineno` | **mixed** |  |
| `tag` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_BlockReference::compile



```php
Twig_Node_Expression_BlockReference::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Conditional

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Conditional
* Parent class: \Twig_Node_Expression


### Twig_Node_Expression_Conditional::__construct



```php
Twig_Node_Expression_Conditional::__construct( \Twig_Node_Expression expr1, \Twig_Node_Expression expr2, \Twig_Node_Expression expr3, mixed lineno ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `expr1` | **\Twig_Node_Expression** |  |
| `expr2` | **\Twig_Node_Expression** |  |
| `expr3` | **\Twig_Node_Expression** |  |
| `lineno` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_Conditional::compile



```php
Twig_Node_Expression_Conditional::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Constant

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Constant
* Parent class: \Twig_Node_Expression


### Twig_Node_Expression_Constant::__construct



```php
Twig_Node_Expression_Constant::__construct( mixed value, mixed lineno ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `value` | **mixed** |  |
| `lineno` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_Constant::compile



```php
Twig_Node_Expression_Constant::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Filter

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Filter
* Parent class: \Twig_Node_Expression_Call


### Twig_Node_Expression_Filter::__construct



```php
Twig_Node_Expression_Filter::__construct( \Twig_Node node, \Twig_Node_Expression_Constant filterName, \Twig_Node arguments, mixed lineno, mixed tag = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node** |  |
| `filterName` | **\Twig_Node_Expression_Constant** |  |
| `arguments` | **\Twig_Node** |  |
| `lineno` | **mixed** |  |
| `tag` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_Filter::compile



```php
Twig_Node_Expression_Filter::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Filter_Default

Returns the value or the default value when it is undefined or empty.

<pre>
 {{ var.foo|default('foo item on var is not defined') }}
</pre>

* Full name: \Twig_Node_Expression_Filter_Default
* Parent class: \Twig_Node_Expression_Filter


### Twig_Node_Expression_Filter_Default::__construct



```php
Twig_Node_Expression_Filter_Default::__construct( \Twig_Node node, \Twig_Node_Expression_Constant filterName, \Twig_Node arguments, mixed lineno, mixed tag = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node** |  |
| `filterName` | **\Twig_Node_Expression_Constant** |  |
| `arguments` | **\Twig_Node** |  |
| `lineno` | **mixed** |  |
| `tag` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_Filter_Default::compile



```php
Twig_Node_Expression_Filter_Default::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Function

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Function
* Parent class: \Twig_Node_Expression_Call


### Twig_Node_Expression_Function::__construct



```php
Twig_Node_Expression_Function::__construct( mixed name, \Twig_Node arguments, mixed lineno ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |
| `arguments` | **\Twig_Node** |  |
| `lineno` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_Function::compile



```php
Twig_Node_Expression_Function::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_GetAttr

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_GetAttr
* Parent class: \Twig_Node_Expression


### Twig_Node_Expression_GetAttr::__construct



```php
Twig_Node_Expression_GetAttr::__construct( \Twig_Node_Expression node, \Twig_Node_Expression attribute, \Twig_Node_Expression arguments = null, mixed type, mixed lineno ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node_Expression** |  |
| `attribute` | **\Twig_Node_Expression** |  |
| `arguments` | **\Twig_Node_Expression** |  |
| `type` | **mixed** |  |
| `lineno` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_GetAttr::compile



```php
Twig_Node_Expression_GetAttr::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_MethodCall

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_MethodCall
* Parent class: \Twig_Node_Expression


### Twig_Node_Expression_MethodCall::__construct



```php
Twig_Node_Expression_MethodCall::__construct( \Twig_Node_Expression node, mixed method, \Twig_Node_Expression_Array arguments, mixed lineno ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node_Expression** |  |
| `method` | **mixed** |  |
| `arguments` | **\Twig_Node_Expression_Array** |  |
| `lineno` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_MethodCall::compile



```php
Twig_Node_Expression_MethodCall::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Name

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Name
* Parent class: \Twig_Node_Expression


### Twig_Node_Expression_Name::__construct



```php
Twig_Node_Expression_Name::__construct( mixed name, mixed lineno ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |
| `lineno` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_Name::compile



```php
Twig_Node_Expression_Name::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
### Twig_Node_Expression_Name::isSpecial



```php
Twig_Node_Expression_Name::isSpecial(  ): mixed
```





**Return Value:**





---
### Twig_Node_Expression_Name::isSimple



```php
Twig_Node_Expression_Name::isSimple(  ): mixed
```





**Return Value:**





---
## Twig_Node_Expression_NullCoalesce

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_NullCoalesce
* Parent class: \Twig_Node_Expression_Conditional


### Twig_Node_Expression_NullCoalesce::__construct



```php
Twig_Node_Expression_NullCoalesce::__construct( \Twig_Node left, \Twig_Node right, mixed lineno ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `left` | **\Twig_Node** |  |
| `right` | **\Twig_Node** |  |
| `lineno` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_NullCoalesce::compile



```php
Twig_Node_Expression_NullCoalesce::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Parent

Represents a parent node.



* Full name: \Twig_Node_Expression_Parent
* Parent class: \Twig_Node_Expression


### Twig_Node_Expression_Parent::__construct



```php
Twig_Node_Expression_Parent::__construct( mixed name, mixed lineno, mixed tag = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |
| `lineno` | **mixed** |  |
| `tag` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_Parent::compile



```php
Twig_Node_Expression_Parent::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_TempName

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_TempName
* Parent class: \Twig_Node_Expression


### Twig_Node_Expression_TempName::__construct



```php
Twig_Node_Expression_TempName::__construct( mixed name, mixed lineno ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |
| `lineno` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_TempName::compile



```php
Twig_Node_Expression_TempName::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Test

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Test
* Parent class: \Twig_Node_Expression_Call


### Twig_Node_Expression_Test::__construct



```php
Twig_Node_Expression_Test::__construct( \Twig_Node node, mixed name, \Twig_Node arguments = null, mixed lineno ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node** |  |
| `name` | **mixed** |  |
| `arguments` | **\Twig_Node** |  |
| `lineno` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_Test::compile



```php
Twig_Node_Expression_Test::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Test_Constant

Checks if a variable is the exact same value as a constant.

<pre>
 {% if post.status is constant('Post::PUBLISHED') %}
   the status attribute is exactly the same as Post::PUBLISHED
 {% endif %}
</pre>

* Full name: \Twig_Node_Expression_Test_Constant
* Parent class: \Twig_Node_Expression_Test


### Twig_Node_Expression_Test_Constant::compile



```php
Twig_Node_Expression_Test_Constant::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Test_Defined

Checks if a variable is defined in the current context.

<pre>
{# defined works with variable names and variable attributes #}
{% if foo is defined %}
    {# ... #}
{% endif %}
</pre>

* Full name: \Twig_Node_Expression_Test_Defined
* Parent class: \Twig_Node_Expression_Test


### Twig_Node_Expression_Test_Defined::__construct



```php
Twig_Node_Expression_Test_Defined::__construct( \Twig_Node node, mixed name, \Twig_Node arguments = null, mixed lineno ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node** |  |
| `name` | **mixed** |  |
| `arguments` | **\Twig_Node** |  |
| `lineno` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Expression_Test_Defined::compile



```php
Twig_Node_Expression_Test_Defined::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Test_Divisibleby

Checks if a variable is divisible by a number.

<pre>
 {% if loop.index is divisible by(3) %}
</pre>

* Full name: \Twig_Node_Expression_Test_Divisibleby
* Parent class: \Twig_Node_Expression_Test


### Twig_Node_Expression_Test_Divisibleby::compile



```php
Twig_Node_Expression_Test_Divisibleby::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Test_Even

Checks if a number is even.

<pre>
 {{ var is even }}
</pre>

* Full name: \Twig_Node_Expression_Test_Even
* Parent class: \Twig_Node_Expression_Test


### Twig_Node_Expression_Test_Even::compile



```php
Twig_Node_Expression_Test_Even::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Test_Null

Checks that a variable is null.

<pre>
 {{ var is none }}
</pre>

* Full name: \Twig_Node_Expression_Test_Null
* Parent class: \Twig_Node_Expression_Test


### Twig_Node_Expression_Test_Null::compile



```php
Twig_Node_Expression_Test_Null::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Test_Odd

Checks if a number is odd.

<pre>
 {{ var is odd }}
</pre>

* Full name: \Twig_Node_Expression_Test_Odd
* Parent class: \Twig_Node_Expression_Test


### Twig_Node_Expression_Test_Odd::compile



```php
Twig_Node_Expression_Test_Odd::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Test_Sameas

Checks if a variable is the same as another one (=== in PHP).



* Full name: \Twig_Node_Expression_Test_Sameas
* Parent class: \Twig_Node_Expression_Test


### Twig_Node_Expression_Test_Sameas::compile



```php
Twig_Node_Expression_Test_Sameas::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Unary_Neg

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Unary_Neg
* Parent class: \Twig_Node_Expression_Unary


### Twig_Node_Expression_Unary_Neg::operator



```php
Twig_Node_Expression_Unary_Neg::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Unary_Not

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Unary_Not
* Parent class: \Twig_Node_Expression_Unary


### Twig_Node_Expression_Unary_Not::operator



```php
Twig_Node_Expression_Unary_Not::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Expression_Unary_Pos

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Node_Expression_Unary_Pos
* Parent class: \Twig_Node_Expression_Unary


### Twig_Node_Expression_Unary_Pos::operator



```php
Twig_Node_Expression_Unary_Pos::operator( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Flush

Represents a flush node.



* Full name: \Twig_Node_Flush
* Parent class: \Twig_Node


### Twig_Node_Flush::__construct

Constructor.

```php
Twig_Node_Flush::__construct( mixed lineno, mixed tag ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_Flush::compile



```php
Twig_Node_Flush::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_For

Represents a for node.



* Full name: \Twig_Node_For
* Parent class: \Twig_Node


### Twig_Node_For::__construct

Constructor.

```php
Twig_Node_For::__construct( \Twig_Node_Expression_AssignName keyTarget, \Twig_Node_Expression_AssignName valueTarget, \Twig_Node_Expression seq, \Twig_Node_Expression ifexpr = null, \Twig_Node body, \Twig_Node else = null, mixed lineno, mixed tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `keyTarget` | **\Twig_Node_Expression_AssignName** |  |
| `valueTarget` | **\Twig_Node_Expression_AssignName** |  |
| `seq` | **\Twig_Node_Expression** |  |
| `ifexpr` | **\Twig_Node_Expression** |  |
| `body` | **\Twig_Node** |  |
| `else` | **\Twig_Node** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_For::compile



```php
Twig_Node_For::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_ForLoop

Internal node used by the for node.



* Full name: \Twig_Node_ForLoop
* Parent class: \Twig_Node


### Twig_Node_ForLoop::__construct

Constructor.

```php
Twig_Node_ForLoop::__construct( mixed lineno, mixed tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_ForLoop::compile



```php
Twig_Node_ForLoop::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_If

Represents an if node.



* Full name: \Twig_Node_If
* Parent class: \Twig_Node


### Twig_Node_If::__construct

Constructor.

```php
Twig_Node_If::__construct( \Twig_Node tests, \Twig_Node else = null, mixed lineno, mixed tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `tests` | **\Twig_Node** |  |
| `else` | **\Twig_Node** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_If::compile



```php
Twig_Node_If::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Import

Represents an import node.



* Full name: \Twig_Node_Import
* Parent class: \Twig_Node


### Twig_Node_Import::__construct

Constructor.

```php
Twig_Node_Import::__construct( \Twig_Node_Expression expr, \Twig_Node_Expression var, mixed lineno, mixed tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `expr` | **\Twig_Node_Expression** |  |
| `var` | **\Twig_Node_Expression** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_Import::compile



```php
Twig_Node_Import::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Include

Represents an include node.



* Full name: \Twig_Node_Include
* Parent class: \Twig_Node
* This class implements: \Twig_NodeOutputInterface


### Twig_Node_Include::__construct

Constructor.

```php
Twig_Node_Include::__construct( \Twig_Node_Expression expr, \Twig_Node_Expression variables = null, mixed only = false, mixed ignoreMissing = false, mixed lineno, mixed tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `expr` | **\Twig_Node_Expression** |  |
| `variables` | **\Twig_Node_Expression** |  |
| `only` | **mixed** |  |
| `ignoreMissing` | **mixed** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_Include::compile



```php
Twig_Node_Include::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Macro

Represents a macro node.



* Full name: \Twig_Node_Macro
* Parent class: \Twig_Node


### Twig_Node_Macro::__construct

Constructor.

```php
Twig_Node_Macro::__construct( mixed name, \Twig_Node body, \Twig_Node arguments, mixed lineno, mixed tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |
| `body` | **\Twig_Node** |  |
| `arguments` | **\Twig_Node** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_Macro::compile



```php
Twig_Node_Macro::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Module

Represents a module node.

Consider this class as being final. If you need to customize the behavior of
the generated class, consider adding nodes to the following nodes: display_start,
display_end, constructor_start, constructor_end, and class_end.

* Full name: \Twig_Node_Module
* Parent class: \Twig_Node


### Twig_Node_Module::__construct

Constructor.

```php
Twig_Node_Module::__construct( \Twig_Node body, \Twig_Node_Expression parent = null, \Twig_Node blocks, \Twig_Node macros, \Twig_Node traits, mixed embeddedTemplates, \Twig_Source source ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `body` | **\Twig_Node** |  |
| `parent` | **\Twig_Node_Expression** |  |
| `blocks` | **\Twig_Node** |  |
| `macros` | **\Twig_Node** |  |
| `traits` | **\Twig_Node** |  |
| `embeddedTemplates` | **mixed** |  |
| `source` | **\Twig_Source** |  |


**Return Value:**





---
### Twig_Node_Module::setIndex



```php
Twig_Node_Module::setIndex( mixed index ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `index` | **mixed** |  |


**Return Value:**





---
### Twig_Node_Module::compile



```php
Twig_Node_Module::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Print

Represents a node that outputs an expression.



* Full name: \Twig_Node_Print
* Parent class: \Twig_Node
* This class implements: \Twig_NodeOutputInterface


### Twig_Node_Print::__construct

Constructor.

```php
Twig_Node_Print::__construct( \Twig_Node_Expression expr, mixed lineno, mixed tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `expr` | **\Twig_Node_Expression** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_Print::compile



```php
Twig_Node_Print::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Sandbox

Represents a sandbox node.



* Full name: \Twig_Node_Sandbox
* Parent class: \Twig_Node


### Twig_Node_Sandbox::__construct

Constructor.

```php
Twig_Node_Sandbox::__construct( \Twig_Node body, mixed lineno, mixed tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `body` | **\Twig_Node** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_Sandbox::compile



```php
Twig_Node_Sandbox::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_SandboxedPrint

Twig_Node_SandboxedPrint adds a check for the __toString() method
when the variable is an object and the sandbox is activated.

When there is a simple Print statement, like {{ article }},
and if the sandbox is enabled, we need to check that the __toString()
method is allowed if 'article' is an object.

* Full name: \Twig_Node_SandboxedPrint
* Parent class: \Twig_Node_Print


### Twig_Node_SandboxedPrint::compile



```php
Twig_Node_SandboxedPrint::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Set

Represents a set node.



* Full name: \Twig_Node_Set
* Parent class: \Twig_Node


### Twig_Node_Set::__construct

Constructor.

```php
Twig_Node_Set::__construct( mixed capture, \Twig_Node names, \Twig_Node values, mixed lineno, mixed tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `capture` | **mixed** |  |
| `names` | **\Twig_Node** |  |
| `values` | **\Twig_Node** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_Set::compile



```php
Twig_Node_Set::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Spaceless

Represents a spaceless node.

It removes spaces between HTML tags.

* Full name: \Twig_Node_Spaceless
* Parent class: \Twig_Node


### Twig_Node_Spaceless::__construct

Constructor.

```php
Twig_Node_Spaceless::__construct( \Twig_Node body, mixed lineno, mixed tag = 'spaceless' ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `body` | **\Twig_Node** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_Spaceless::compile



```php
Twig_Node_Spaceless::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_Text

Represents a text node.



* Full name: \Twig_Node_Text
* Parent class: \Twig_Node
* This class implements: \Twig_NodeOutputInterface


### Twig_Node_Text::__construct

Constructor.

```php
Twig_Node_Text::__construct( mixed data, mixed lineno ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `data` | **mixed** |  |
| `lineno` | **mixed** | The line number |


**Return Value:**





---
### Twig_Node_Text::compile



```php
Twig_Node_Text::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Node_With

Represents a nested "with" scope.



* Full name: \Twig_Node_With
* Parent class: \Twig_Node


### Twig_Node_With::__construct

Constructor.

```php
Twig_Node_With::__construct( \Twig_Node body, \Twig_Node variables = null, mixed only = false, mixed lineno, mixed tag = null ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `body` | **\Twig_Node** |  |
| `variables` | **\Twig_Node** |  |
| `only` | **mixed** |  |
| `lineno` | **mixed** | The line number |
| `tag` | **mixed** | The tag name associated with the Node |


**Return Value:**





---
### Twig_Node_With::compile



```php
Twig_Node_With::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_NodeTraverser

Twig_NodeTraverser is a node traverser.

It visits all nodes and their children and calls the given visitor for each.

* Full name: \Twig_NodeTraverser


### Twig_NodeTraverser::__construct



```php
Twig_NodeTraverser::__construct( \Twig_Environment env, \Twig_NodeVisitorInterface[] visitors = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `env` | **\Twig_Environment** |  |
| `visitors` | **\Twig_NodeVisitorInterface[]** |  |


**Return Value:**





---
### Twig_NodeTraverser::addVisitor



```php
Twig_NodeTraverser::addVisitor( \Twig_NodeVisitorInterface visitor ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `visitor` | **\Twig_NodeVisitorInterface** |  |


**Return Value:**





---
### Twig_NodeTraverser::traverse

Traverses a node and calls the registered visitors.

```php
Twig_NodeTraverser::traverse( \Twig_Node node ): \Twig_Node
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node** |  |


**Return Value:**





---
## Twig_NodeVisitor_Escaper

Twig_NodeVisitor_Escaper implements output escaping.



* Full name: \Twig_NodeVisitor_Escaper
* Parent class: \Twig_BaseNodeVisitor


### Twig_NodeVisitor_Escaper::__construct



```php
Twig_NodeVisitor_Escaper::__construct(  ): mixed
```





**Return Value:**





---
### Twig_NodeVisitor_Escaper::getPriority



```php
Twig_NodeVisitor_Escaper::getPriority(  ): mixed
```





**Return Value:**





---
## Twig_NodeVisitor_Optimizer

Twig_NodeVisitor_Optimizer tries to optimizes the AST.

This visitor is always the last registered one.

You can configure which optimizations you want to activate via the
optimizer mode.

* Full name: \Twig_NodeVisitor_Optimizer
* Parent class: \Twig_BaseNodeVisitor


### Twig_NodeVisitor_Optimizer::__construct



```php
Twig_NodeVisitor_Optimizer::__construct( int optimizers = -1 ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `optimizers` | **int** | The optimizer mode |


**Return Value:**





---
### Twig_NodeVisitor_Optimizer::getPriority



```php
Twig_NodeVisitor_Optimizer::getPriority(  ): mixed
```





**Return Value:**





---
## Twig_NodeVisitor_SafeAnalysis

Twig_BaseNodeVisitor can be used to make node visitors compatible with Twig 1.x and 2.x.



* Full name: \Twig_NodeVisitor_SafeAnalysis
* Parent class: \Twig_BaseNodeVisitor


### Twig_NodeVisitor_SafeAnalysis::setSafeVars



```php
Twig_NodeVisitor_SafeAnalysis::setSafeVars( mixed safeVars ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `safeVars` | **mixed** |  |


**Return Value:**





---
### Twig_NodeVisitor_SafeAnalysis::getSafe



```php
Twig_NodeVisitor_SafeAnalysis::getSafe( \Twig_Node node ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node** |  |


**Return Value:**





---
### Twig_NodeVisitor_SafeAnalysis::getPriority



```php
Twig_NodeVisitor_SafeAnalysis::getPriority(  ): mixed
```





**Return Value:**





---
## Twig_NodeVisitor_Sandbox

Twig_NodeVisitor_Sandbox implements sandboxing.



* Full name: \Twig_NodeVisitor_Sandbox
* Parent class: \Twig_BaseNodeVisitor


### Twig_NodeVisitor_Sandbox::getPriority



```php
Twig_NodeVisitor_Sandbox::getPriority(  ): mixed
```





**Return Value:**





---
## Twig_Parser

Default parser implementation.



* Full name: \Twig_Parser


### Twig_Parser::__construct



```php
Twig_Parser::__construct( \Twig_Environment env ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `env` | **\Twig_Environment** |  |


**Return Value:**





---
### Twig_Parser::getVarName



```php
Twig_Parser::getVarName(  ): mixed
```





**Return Value:**





---
### Twig_Parser::parse



```php
Twig_Parser::parse( \Twig_TokenStream stream, mixed test = null, mixed dropNeedle = false ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `stream` | **\Twig_TokenStream** |  |
| `test` | **mixed** |  |
| `dropNeedle` | **mixed** |  |


**Return Value:**





---
### Twig_Parser::subparse



```php
Twig_Parser::subparse( mixed test, mixed dropNeedle = false ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `test` | **mixed** |  |
| `dropNeedle` | **mixed** |  |


**Return Value:**





---
### Twig_Parser::getBlockStack



```php
Twig_Parser::getBlockStack(  ): mixed
```





**Return Value:**





---
### Twig_Parser::peekBlockStack



```php
Twig_Parser::peekBlockStack(  ): mixed
```





**Return Value:**





---
### Twig_Parser::popBlockStack



```php
Twig_Parser::popBlockStack(  ): mixed
```





**Return Value:**





---
### Twig_Parser::pushBlockStack



```php
Twig_Parser::pushBlockStack( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_Parser::hasBlock



```php
Twig_Parser::hasBlock( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_Parser::getBlock



```php
Twig_Parser::getBlock( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_Parser::setBlock



```php
Twig_Parser::setBlock( mixed name, \Twig_Node_Block value ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |
| `value` | **\Twig_Node_Block** |  |


**Return Value:**





---
### Twig_Parser::hasMacro



```php
Twig_Parser::hasMacro( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_Parser::setMacro



```php
Twig_Parser::setMacro( mixed name, \Twig_Node_Macro node ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |
| `node` | **\Twig_Node_Macro** |  |


**Return Value:**





---
### Twig_Parser::isReservedMacroName



```php
Twig_Parser::isReservedMacroName( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_Parser::addTrait



```php
Twig_Parser::addTrait( mixed trait ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `trait` | **mixed** |  |


**Return Value:**





---
### Twig_Parser::hasTraits



```php
Twig_Parser::hasTraits(  ): mixed
```





**Return Value:**





---
### Twig_Parser::embedTemplate



```php
Twig_Parser::embedTemplate( \Twig_Node_Module template ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `template` | **\Twig_Node_Module** |  |


**Return Value:**





---
### Twig_Parser::addImportedSymbol



```php
Twig_Parser::addImportedSymbol( mixed type, mixed alias, mixed name = null, \Twig_Node_Expression node = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `type` | **mixed** |  |
| `alias` | **mixed** |  |
| `name` | **mixed** |  |
| `node` | **\Twig_Node_Expression** |  |


**Return Value:**





---
### Twig_Parser::getImportedSymbol



```php
Twig_Parser::getImportedSymbol( mixed type, mixed alias ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `type` | **mixed** |  |
| `alias` | **mixed** |  |


**Return Value:**





---
### Twig_Parser::isMainScope



```php
Twig_Parser::isMainScope(  ): mixed
```





**Return Value:**





---
### Twig_Parser::pushLocalScope



```php
Twig_Parser::pushLocalScope(  ): mixed
```





**Return Value:**





---
### Twig_Parser::popLocalScope



```php
Twig_Parser::popLocalScope(  ): mixed
```





**Return Value:**





---
### Twig_Parser::getExpressionParser



```php
Twig_Parser::getExpressionParser(  ): \Twig_ExpressionParser
```





**Return Value:**





---
### Twig_Parser::getParent



```php
Twig_Parser::getParent(  ): mixed
```





**Return Value:**





---
### Twig_Parser::setParent



```php
Twig_Parser::setParent( mixed parent ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `parent` | **mixed** |  |


**Return Value:**





---
### Twig_Parser::getStream



```php
Twig_Parser::getStream(  ): \Twig_TokenStream
```





**Return Value:**





---
### Twig_Parser::getCurrentToken



```php
Twig_Parser::getCurrentToken(  ): \Twig_Token
```





**Return Value:**





---
## Twig_Profiler_Dumper_Blackfire





* Full name: \Twig_Profiler_Dumper_Blackfire


### Twig_Profiler_Dumper_Blackfire::dump



```php
Twig_Profiler_Dumper_Blackfire::dump( \Twig_Profiler_Profile profile ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `profile` | **\Twig_Profiler_Profile** |  |


**Return Value:**





---
## Twig_Profiler_Dumper_Html





* Full name: \Twig_Profiler_Dumper_Html
* Parent class: \Twig_Profiler_Dumper_Text


### Twig_Profiler_Dumper_Html::dump



```php
Twig_Profiler_Dumper_Html::dump( \Twig_Profiler_Profile profile ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `profile` | **\Twig_Profiler_Profile** |  |


**Return Value:**





---
## Twig_Profiler_Dumper_Text





* Full name: \Twig_Profiler_Dumper_Text


### Twig_Profiler_Dumper_Text::dump



```php
Twig_Profiler_Dumper_Text::dump( \Twig_Profiler_Profile profile ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `profile` | **\Twig_Profiler_Profile** |  |


**Return Value:**





---
## Twig_Profiler_Node_EnterProfile

Represents a profile enter node.



* Full name: \Twig_Profiler_Node_EnterProfile
* Parent class: \Twig_Node


### Twig_Profiler_Node_EnterProfile::__construct

Constructor.

```php
Twig_Profiler_Node_EnterProfile::__construct( mixed extensionName, mixed type, mixed name, mixed varName ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `extensionName` | **mixed** |  |
| `type` | **mixed** |  |
| `name` | **mixed** |  |
| `varName` | **mixed** |  |


**Return Value:**





---
### Twig_Profiler_Node_EnterProfile::compile



```php
Twig_Profiler_Node_EnterProfile::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Profiler_Node_LeaveProfile

Represents a profile leave node.



* Full name: \Twig_Profiler_Node_LeaveProfile
* Parent class: \Twig_Node


### Twig_Profiler_Node_LeaveProfile::__construct

Constructor.

```php
Twig_Profiler_Node_LeaveProfile::__construct( mixed varName ): mixed
```

The nodes are automatically made available as properties ($this->node).
The attributes are automatically made available as array items ($this['name']).


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `varName` | **mixed** |  |


**Return Value:**





---
### Twig_Profiler_Node_LeaveProfile::compile



```php
Twig_Profiler_Node_LeaveProfile::compile( \Twig_Compiler compiler ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `compiler` | **\Twig_Compiler** |  |


**Return Value:**





---
## Twig_Profiler_NodeVisitor_Profiler

Twig_BaseNodeVisitor can be used to make node visitors compatible with Twig 1.x and 2.x.



* Full name: \Twig_Profiler_NodeVisitor_Profiler
* Parent class: \Twig_BaseNodeVisitor


### Twig_Profiler_NodeVisitor_Profiler::__construct



```php
Twig_Profiler_NodeVisitor_Profiler::__construct( mixed extensionName ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `extensionName` | **mixed** |  |


**Return Value:**





---
### Twig_Profiler_NodeVisitor_Profiler::getPriority



```php
Twig_Profiler_NodeVisitor_Profiler::getPriority(  ): mixed
```





**Return Value:**





---
## Twig_Profiler_Profile





* Full name: \Twig_Profiler_Profile
* This class implements: \IteratorAggregate, \Serializable


### Twig_Profiler_Profile::__construct



```php
Twig_Profiler_Profile::__construct( mixed template = 'main', mixed type = self::ROOT, mixed name = 'main' ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `template` | **mixed** |  |
| `type` | **mixed** |  |
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_Profiler_Profile::getTemplate



```php
Twig_Profiler_Profile::getTemplate(  ): mixed
```





**Return Value:**





---
### Twig_Profiler_Profile::getType



```php
Twig_Profiler_Profile::getType(  ): mixed
```





**Return Value:**





---
### Twig_Profiler_Profile::getName



```php
Twig_Profiler_Profile::getName(  ): mixed
```





**Return Value:**





---
### Twig_Profiler_Profile::isRoot



```php
Twig_Profiler_Profile::isRoot(  ): mixed
```





**Return Value:**





---
### Twig_Profiler_Profile::isTemplate



```php
Twig_Profiler_Profile::isTemplate(  ): mixed
```





**Return Value:**





---
### Twig_Profiler_Profile::isBlock



```php
Twig_Profiler_Profile::isBlock(  ): mixed
```





**Return Value:**





---
### Twig_Profiler_Profile::isMacro



```php
Twig_Profiler_Profile::isMacro(  ): mixed
```





**Return Value:**





---
### Twig_Profiler_Profile::getProfiles



```php
Twig_Profiler_Profile::getProfiles(  ): mixed
```





**Return Value:**





---
### Twig_Profiler_Profile::addProfile



```php
Twig_Profiler_Profile::addProfile( \Twig_Profiler_Profile profile ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `profile` | **\Twig_Profiler_Profile** |  |


**Return Value:**





---
### Twig_Profiler_Profile::getDuration

Returns the duration in microseconds.

```php
Twig_Profiler_Profile::getDuration(  ): int
```





**Return Value:**





---
### Twig_Profiler_Profile::getMemoryUsage

Returns the memory usage in bytes.

```php
Twig_Profiler_Profile::getMemoryUsage(  ): int
```





**Return Value:**





---
### Twig_Profiler_Profile::getPeakMemoryUsage

Returns the peak memory usage in bytes.

```php
Twig_Profiler_Profile::getPeakMemoryUsage(  ): int
```





**Return Value:**





---
### Twig_Profiler_Profile::enter

Starts the profiling.

```php
Twig_Profiler_Profile::enter(  ): mixed
```





**Return Value:**





---
### Twig_Profiler_Profile::leave

Stops the profiling.

```php
Twig_Profiler_Profile::leave(  ): mixed
```





**Return Value:**





---
### Twig_Profiler_Profile::getIterator



```php
Twig_Profiler_Profile::getIterator(  ): mixed
```





**Return Value:**





---
### Twig_Profiler_Profile::serialize



```php
Twig_Profiler_Profile::serialize(  ): mixed
```





**Return Value:**





---
### Twig_Profiler_Profile::unserialize



```php
Twig_Profiler_Profile::unserialize( mixed data ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `data` | **mixed** |  |


**Return Value:**





---
## Twig_Sandbox_SecurityError

Exception thrown when a security error occurs at runtime.



* Full name: \Twig_Sandbox_SecurityError
* Parent class: \Twig_Error


## Twig_Sandbox_SecurityNotAllowedFilterError

Exception thrown when a not allowed filter is used in a template.



* Full name: \Twig_Sandbox_SecurityNotAllowedFilterError
* Parent class: \Twig_Sandbox_SecurityError


### Twig_Sandbox_SecurityNotAllowedFilterError::__construct



```php
Twig_Sandbox_SecurityNotAllowedFilterError::__construct( mixed message, mixed functionName, mixed lineno = -1, mixed filename = null, \Exception previous = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `message` | **mixed** |  |
| `functionName` | **mixed** |  |
| `lineno` | **mixed** |  |
| `filename` | **mixed** |  |
| `previous` | **\Exception** |  |


**Return Value:**





---
### Twig_Sandbox_SecurityNotAllowedFilterError::getFilterName



```php
Twig_Sandbox_SecurityNotAllowedFilterError::getFilterName(  ): mixed
```





**Return Value:**





---
## Twig_Sandbox_SecurityNotAllowedFunctionError

Exception thrown when a not allowed function is used in a template.



* Full name: \Twig_Sandbox_SecurityNotAllowedFunctionError
* Parent class: \Twig_Sandbox_SecurityError


### Twig_Sandbox_SecurityNotAllowedFunctionError::__construct



```php
Twig_Sandbox_SecurityNotAllowedFunctionError::__construct( mixed message, mixed functionName, mixed lineno = -1, mixed filename = null, \Exception previous = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `message` | **mixed** |  |
| `functionName` | **mixed** |  |
| `lineno` | **mixed** |  |
| `filename` | **mixed** |  |
| `previous` | **\Exception** |  |


**Return Value:**





---
### Twig_Sandbox_SecurityNotAllowedFunctionError::getFunctionName



```php
Twig_Sandbox_SecurityNotAllowedFunctionError::getFunctionName(  ): mixed
```





**Return Value:**





---
## Twig_Sandbox_SecurityNotAllowedMethodError

Exception thrown when a not allowed class method is used in a template.



* Full name: \Twig_Sandbox_SecurityNotAllowedMethodError
* Parent class: \Twig_Sandbox_SecurityError


### Twig_Sandbox_SecurityNotAllowedMethodError::__construct



```php
Twig_Sandbox_SecurityNotAllowedMethodError::__construct( mixed message, mixed className, mixed methodName, mixed lineno = -1, mixed filename = null, \Exception previous = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `message` | **mixed** |  |
| `className` | **mixed** |  |
| `methodName` | **mixed** |  |
| `lineno` | **mixed** |  |
| `filename` | **mixed** |  |
| `previous` | **\Exception** |  |


**Return Value:**





---
### Twig_Sandbox_SecurityNotAllowedMethodError::getClassName



```php
Twig_Sandbox_SecurityNotAllowedMethodError::getClassName(  ): mixed
```





**Return Value:**





---
### Twig_Sandbox_SecurityNotAllowedMethodError::getMethodName



```php
Twig_Sandbox_SecurityNotAllowedMethodError::getMethodName(  ): mixed
```





**Return Value:**





---
## Twig_Sandbox_SecurityNotAllowedPropertyError

Exception thrown when a not allowed class property is used in a template.



* Full name: \Twig_Sandbox_SecurityNotAllowedPropertyError
* Parent class: \Twig_Sandbox_SecurityError


### Twig_Sandbox_SecurityNotAllowedPropertyError::__construct



```php
Twig_Sandbox_SecurityNotAllowedPropertyError::__construct( mixed message, mixed className, mixed propertyName, mixed lineno = -1, mixed filename = null, \Exception previous = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `message` | **mixed** |  |
| `className` | **mixed** |  |
| `propertyName` | **mixed** |  |
| `lineno` | **mixed** |  |
| `filename` | **mixed** |  |
| `previous` | **\Exception** |  |


**Return Value:**





---
### Twig_Sandbox_SecurityNotAllowedPropertyError::getClassName



```php
Twig_Sandbox_SecurityNotAllowedPropertyError::getClassName(  ): mixed
```





**Return Value:**





---
### Twig_Sandbox_SecurityNotAllowedPropertyError::getPropertyName



```php
Twig_Sandbox_SecurityNotAllowedPropertyError::getPropertyName(  ): mixed
```





**Return Value:**





---
## Twig_Sandbox_SecurityNotAllowedTagError

Exception thrown when a not allowed tag is used in a template.



* Full name: \Twig_Sandbox_SecurityNotAllowedTagError
* Parent class: \Twig_Sandbox_SecurityError


### Twig_Sandbox_SecurityNotAllowedTagError::__construct



```php
Twig_Sandbox_SecurityNotAllowedTagError::__construct( mixed message, mixed tagName, mixed lineno = -1, mixed filename = null, \Exception previous = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `message` | **mixed** |  |
| `tagName` | **mixed** |  |
| `lineno` | **mixed** |  |
| `filename` | **mixed** |  |
| `previous` | **\Exception** |  |


**Return Value:**





---
### Twig_Sandbox_SecurityNotAllowedTagError::getTagName



```php
Twig_Sandbox_SecurityNotAllowedTagError::getTagName(  ): mixed
```





**Return Value:**





---
## Twig_Sandbox_SecurityPolicy

Represents a security policy which need to be enforced when sandbox mode is enabled.



* Full name: \Twig_Sandbox_SecurityPolicy
* This class implements: \Twig_Sandbox_SecurityPolicyInterface


### Twig_Sandbox_SecurityPolicy::__construct



```php
Twig_Sandbox_SecurityPolicy::__construct( array allowedTags = array(), array allowedFilters = array(), array allowedMethods = array(), array allowedProperties = array(), array allowedFunctions = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `allowedTags` | **array** |  |
| `allowedFilters` | **array** |  |
| `allowedMethods` | **array** |  |
| `allowedProperties` | **array** |  |
| `allowedFunctions` | **array** |  |


**Return Value:**





---
### Twig_Sandbox_SecurityPolicy::setAllowedTags



```php
Twig_Sandbox_SecurityPolicy::setAllowedTags( array tags ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `tags` | **array** |  |


**Return Value:**





---
### Twig_Sandbox_SecurityPolicy::setAllowedFilters



```php
Twig_Sandbox_SecurityPolicy::setAllowedFilters( array filters ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filters` | **array** |  |


**Return Value:**





---
### Twig_Sandbox_SecurityPolicy::setAllowedMethods



```php
Twig_Sandbox_SecurityPolicy::setAllowedMethods( array methods ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `methods` | **array** |  |


**Return Value:**





---
### Twig_Sandbox_SecurityPolicy::setAllowedProperties



```php
Twig_Sandbox_SecurityPolicy::setAllowedProperties( array properties ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `properties` | **array** |  |


**Return Value:**





---
### Twig_Sandbox_SecurityPolicy::setAllowedFunctions



```php
Twig_Sandbox_SecurityPolicy::setAllowedFunctions( array functions ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `functions` | **array** |  |


**Return Value:**





---
### Twig_Sandbox_SecurityPolicy::checkSecurity



```php
Twig_Sandbox_SecurityPolicy::checkSecurity( mixed tags, mixed filters, mixed functions ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `tags` | **mixed** |  |
| `filters` | **mixed** |  |
| `functions` | **mixed** |  |


**Return Value:**





---
### Twig_Sandbox_SecurityPolicy::checkMethodAllowed



```php
Twig_Sandbox_SecurityPolicy::checkMethodAllowed( mixed obj, mixed method ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `obj` | **mixed** |  |
| `method` | **mixed** |  |


**Return Value:**





---
### Twig_Sandbox_SecurityPolicy::checkPropertyAllowed



```php
Twig_Sandbox_SecurityPolicy::checkPropertyAllowed( mixed obj, mixed property ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `obj` | **mixed** |  |
| `property` | **mixed** |  |


**Return Value:**





---
## Twig_SimpleFilter

Empty class for Twig 1.x compatibility.



* Full name: \Twig_SimpleFilter
* Parent class: \Twig_Filter


## Twig_SimpleFunction

Empty class for Twig 1.x compatibility.



* Full name: \Twig_SimpleFunction
* Parent class: \Twig_Function


## Twig_SimpleTest

Empty class for Twig 1.x compatibility.



* Full name: \Twig_SimpleTest
* Parent class: \Twig_Test


## Twig_Source

Holds information about a non-compiled Twig template.



* Full name: \Twig_Source


### Twig_Source::__construct



```php
Twig_Source::__construct( string code, string name, string path = '' ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `code` | **string** | The template source code |
| `name` | **string** | The template logical name |
| `path` | **string** | The filesystem path of the template if any |


**Return Value:**





---
### Twig_Source::getCode



```php
Twig_Source::getCode(  ): mixed
```





**Return Value:**





---
### Twig_Source::getName



```php
Twig_Source::getName(  ): mixed
```





**Return Value:**





---
### Twig_Source::getPath



```php
Twig_Source::getPath(  ): mixed
```





**Return Value:**





---
## Twig_TemplateArrayAccessObject





* Full name: \Twig_TemplateArrayAccessObject
* This class implements: \ArrayAccess


### Twig_TemplateArrayAccessObject::offsetExists



```php
Twig_TemplateArrayAccessObject::offsetExists( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_TemplateArrayAccessObject::offsetGet



```php
Twig_TemplateArrayAccessObject::offsetGet( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_TemplateArrayAccessObject::offsetSet



```php
Twig_TemplateArrayAccessObject::offsetSet( mixed name, mixed value ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |
| `value` | **mixed** |  |


**Return Value:**





---
### Twig_TemplateArrayAccessObject::offsetUnset



```php
Twig_TemplateArrayAccessObject::offsetUnset( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
## Twig_TemplateMagicMethodExceptionObject





* Full name: \Twig_TemplateMagicMethodExceptionObject


### Twig_TemplateMagicMethodExceptionObject::__call



```php
Twig_TemplateMagicMethodExceptionObject::__call( mixed method, mixed arguments ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `method` | **mixed** |  |
| `arguments` | **mixed** |  |


**Return Value:**





---
## Twig_TemplateMagicMethodObject





* Full name: \Twig_TemplateMagicMethodObject


### Twig_TemplateMagicMethodObject::__call



```php
Twig_TemplateMagicMethodObject::__call( mixed method, mixed arguments ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `method` | **mixed** |  |
| `arguments` | **mixed** |  |


**Return Value:**





---
## Twig_TemplateMagicPropertyObject





* Full name: \Twig_TemplateMagicPropertyObject


### Twig_TemplateMagicPropertyObject::__isset



```php
Twig_TemplateMagicPropertyObject::__isset( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_TemplateMagicPropertyObject::__get



```php
Twig_TemplateMagicPropertyObject::__get( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
## Twig_TemplateMagicPropertyObjectWithException





* Full name: \Twig_TemplateMagicPropertyObjectWithException


### Twig_TemplateMagicPropertyObjectWithException::__isset



```php
Twig_TemplateMagicPropertyObjectWithException::__isset( mixed key ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |


**Return Value:**





---
## Twig_TemplateMethodAndPropObject





* Full name: \Twig_TemplateMethodAndPropObject


### Twig_TemplateMethodAndPropObject::getA



```php
Twig_TemplateMethodAndPropObject::getA(  ): mixed
```





**Return Value:**





---
### Twig_TemplateMethodAndPropObject::getB



```php
Twig_TemplateMethodAndPropObject::getB(  ): mixed
```





**Return Value:**





---
## Twig_TemplateMethodObject





* Full name: \Twig_TemplateMethodObject


### Twig_TemplateMethodObject::getDefined



```php
Twig_TemplateMethodObject::getDefined(  ): mixed
```





**Return Value:**





---
### Twig_TemplateMethodObject::get1



```php
Twig_TemplateMethodObject::get1(  ): mixed
```





**Return Value:**





---
### Twig_TemplateMethodObject::get09



```php
Twig_TemplateMethodObject::get09(  ): mixed
```





**Return Value:**





---
### Twig_TemplateMethodObject::getZero



```php
Twig_TemplateMethodObject::getZero(  ): mixed
```





**Return Value:**





---
### Twig_TemplateMethodObject::getNull



```php
Twig_TemplateMethodObject::getNull(  ): mixed
```





**Return Value:**





---
### Twig_TemplateMethodObject::isBar



```php
Twig_TemplateMethodObject::isBar(  ): mixed
```





**Return Value:**





---
### Twig_TemplateMethodObject::hasFoo



```php
Twig_TemplateMethodObject::hasFoo(  ): mixed
```





**Return Value:**





---
### Twig_TemplateMethodObject::hasBaz



```php
Twig_TemplateMethodObject::hasBaz(  ): mixed
```





**Return Value:**





---
### Twig_TemplateMethodObject::isBaz



```php
Twig_TemplateMethodObject::isBaz(  ): mixed
```





**Return Value:**





---
### Twig_TemplateMethodObject::getBaz



```php
Twig_TemplateMethodObject::getBaz(  ): mixed
```





**Return Value:**





---
### Twig_TemplateMethodObject::hasBaf



```php
Twig_TemplateMethodObject::hasBaf(  ): mixed
```





**Return Value:**





---
### Twig_TemplateMethodObject::isBaf



```php
Twig_TemplateMethodObject::isBaf(  ): mixed
```





**Return Value:**





---
### Twig_TemplateMethodObject::getStatic



```php
Twig_TemplateMethodObject::getStatic(  ): mixed
```



* This method is **static**.

**Return Value:**





---
## Twig_TemplatePropertyObject





* Full name: \Twig_TemplatePropertyObject


## Twig_TemplatePropertyObjectAndArrayAccess





* Full name: \Twig_TemplatePropertyObjectAndArrayAccess
* Parent class: \Twig_TemplatePropertyObject
* This class implements: \ArrayAccess


### Twig_TemplatePropertyObjectAndArrayAccess::offsetExists



```php
Twig_TemplatePropertyObjectAndArrayAccess::offsetExists( mixed offset ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `offset` | **mixed** |  |


**Return Value:**





---
### Twig_TemplatePropertyObjectAndArrayAccess::offsetGet



```php
Twig_TemplatePropertyObjectAndArrayAccess::offsetGet( mixed offset ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `offset` | **mixed** |  |


**Return Value:**





---
### Twig_TemplatePropertyObjectAndArrayAccess::offsetSet



```php
Twig_TemplatePropertyObjectAndArrayAccess::offsetSet( mixed offset, mixed value ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `offset` | **mixed** |  |
| `value` | **mixed** |  |


**Return Value:**





---
### Twig_TemplatePropertyObjectAndArrayAccess::offsetUnset



```php
Twig_TemplatePropertyObjectAndArrayAccess::offsetUnset( mixed offset ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `offset` | **mixed** |  |


**Return Value:**





---
## Twig_TemplatePropertyObjectAndIterator





* Full name: \Twig_TemplatePropertyObjectAndIterator
* Parent class: \Twig_TemplatePropertyObject
* This class implements: \IteratorAggregate


### Twig_TemplatePropertyObjectAndIterator::getIterator



```php
Twig_TemplatePropertyObjectAndIterator::getIterator(  ): mixed
```





**Return Value:**





---
## Twig_TemplatePropertyObjectDefinedWithUndefinedValue





* Full name: \Twig_TemplatePropertyObjectDefinedWithUndefinedValue


### Twig_TemplatePropertyObjectDefinedWithUndefinedValue::__construct



```php
Twig_TemplatePropertyObjectDefinedWithUndefinedValue::__construct(  ): mixed
```





**Return Value:**





---
## Twig_TemplateTest





* Full name: \Twig_TemplateTest
* Parent class: 


### Twig_TemplateTest::__construct



```php
Twig_TemplateTest::__construct( \Twig_Environment env, mixed name = 'index.twig' ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `env` | **\Twig_Environment** |  |
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_TemplateTest::getZero



```php
Twig_TemplateTest::getZero(  ): mixed
```





**Return Value:**





---
### Twig_TemplateTest::getEmpty



```php
Twig_TemplateTest::getEmpty(  ): mixed
```





**Return Value:**





---
### Twig_TemplateTest::getString



```php
Twig_TemplateTest::getString(  ): mixed
```





**Return Value:**





---
### Twig_TemplateTest::getTrue



```php
Twig_TemplateTest::getTrue(  ): mixed
```





**Return Value:**





---
### Twig_TemplateTest::getTemplateName



```php
Twig_TemplateTest::getTemplateName(  ): mixed
```





**Return Value:**





---
### Twig_TemplateTest::getDebugInfo



```php
Twig_TemplateTest::getDebugInfo(  ): mixed
```





**Return Value:**





---
### Twig_TemplateTest::block_name



```php
Twig_TemplateTest::block_name( mixed context, array blocks = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `context` | **mixed** |  |
| `blocks` | **array** |  |


**Return Value:**





---
## Twig_TemplateWrapper

Exposes a template to userland.



* Full name: \Twig_TemplateWrapper


### Twig_TemplateWrapper::render

Renders the template.

```php
Twig_TemplateWrapper::render( array context = array() ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `context` | **array** | An array of parameters to pass to the template |


**Return Value:**

The rendered template



---
### Twig_TemplateWrapper::display

Displays the template.

```php
Twig_TemplateWrapper::display( array context = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `context` | **array** | An array of parameters to pass to the template |


**Return Value:**





---
### Twig_TemplateWrapper::hasBlock

Checks if a block is defined.

```php
Twig_TemplateWrapper::hasBlock( string name, array context = array() ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | The block name |
| `context` | **array** | An array of parameters to pass to the template |


**Return Value:**





---
### Twig_TemplateWrapper::getBlockNames

Returns defined block names in the template.

```php
Twig_TemplateWrapper::getBlockNames( array context = array() ): string[]
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `context` | **array** | An array of parameters to pass to the template |


**Return Value:**

An array of defined template block names



---
### Twig_TemplateWrapper::renderBlock

Renders a template block.

```php
Twig_TemplateWrapper::renderBlock( string name, array context = array() ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | The block name to render |
| `context` | **array** | An array of parameters to pass to the template |


**Return Value:**

The rendered block



---
### Twig_TemplateWrapper::displayBlock

Displays a template block.

```php
Twig_TemplateWrapper::displayBlock( string name, array context = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | The block name to render |
| `context` | **array** | An array of parameters to pass to the template |


**Return Value:**





---
### Twig_TemplateWrapper::getSourceContext



```php
Twig_TemplateWrapper::getSourceContext(  ): \Twig_Source
```





**Return Value:**





---
## Twig_Test

Represents a template test.



* Full name: \Twig_Test

**See Also:**

* http://twig.sensiolabs.org/doc/templates.html#test-operator - 

### Twig_Test::__construct

Creates a template test.

```php
Twig_Test::__construct( string name, callable|null callable = null, array options = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **string** | Name of this test |
| `callable` | **callable\|null** | A callable implementing the test. If null, you need to overwrite the &quot;node_class&quot; option to customize compilation. |
| `options` | **array** | Options array |


**Return Value:**





---
### Twig_Test::getName



```php
Twig_Test::getName(  ): mixed
```





**Return Value:**





---
### Twig_Test::getCallable

Returns the callable to execute for this test.

```php
Twig_Test::getCallable(  ): callable|null
```





**Return Value:**





---
### Twig_Test::getNodeClass



```php
Twig_Test::getNodeClass(  ): mixed
```





**Return Value:**





---
### Twig_Test::isVariadic



```php
Twig_Test::isVariadic(  ): mixed
```





**Return Value:**





---
### Twig_Test::isDeprecated



```php
Twig_Test::isDeprecated(  ): mixed
```





**Return Value:**





---
### Twig_Test::getDeprecatedVersion



```php
Twig_Test::getDeprecatedVersion(  ): mixed
```





**Return Value:**





---
### Twig_Test::getAlternative



```php
Twig_Test::getAlternative(  ): mixed
```





**Return Value:**





---
## Twig_Test_EscapingTest

This class is adapted from code coming from Zend Framework.



* Full name: \Twig_Test_EscapingTest
* Parent class: 


### Twig_Test_EscapingTest::testHtmlEscapingConvertsSpecialChars



```php
Twig_Test_EscapingTest::testHtmlEscapingConvertsSpecialChars(  ): mixed
```





**Return Value:**





---
### Twig_Test_EscapingTest::testHtmlAttributeEscapingConvertsSpecialChars



```php
Twig_Test_EscapingTest::testHtmlAttributeEscapingConvertsSpecialChars(  ): mixed
```





**Return Value:**





---
### Twig_Test_EscapingTest::testJavascriptEscapingConvertsSpecialChars



```php
Twig_Test_EscapingTest::testJavascriptEscapingConvertsSpecialChars(  ): mixed
```





**Return Value:**





---
### Twig_Test_EscapingTest::testJavascriptEscapingReturnsStringIfZeroLength



```php
Twig_Test_EscapingTest::testJavascriptEscapingReturnsStringIfZeroLength(  ): mixed
```





**Return Value:**





---
### Twig_Test_EscapingTest::testJavascriptEscapingReturnsStringIfContainsOnlyDigits



```php
Twig_Test_EscapingTest::testJavascriptEscapingReturnsStringIfContainsOnlyDigits(  ): mixed
```





**Return Value:**





---
### Twig_Test_EscapingTest::testCssEscapingConvertsSpecialChars



```php
Twig_Test_EscapingTest::testCssEscapingConvertsSpecialChars(  ): mixed
```





**Return Value:**





---
### Twig_Test_EscapingTest::testCssEscapingReturnsStringIfZeroLength



```php
Twig_Test_EscapingTest::testCssEscapingReturnsStringIfZeroLength(  ): mixed
```





**Return Value:**





---
### Twig_Test_EscapingTest::testCssEscapingReturnsStringIfContainsOnlyDigits



```php
Twig_Test_EscapingTest::testCssEscapingReturnsStringIfContainsOnlyDigits(  ): mixed
```





**Return Value:**





---
### Twig_Test_EscapingTest::testUrlEscapingConvertsSpecialChars



```php
Twig_Test_EscapingTest::testUrlEscapingConvertsSpecialChars(  ): mixed
```





**Return Value:**





---
### Twig_Test_EscapingTest::testUnicodeCodepointConversionToUtf8

Only testing the first few 2 ranges on this prot. function as that's all these
other range tests require.

```php
Twig_Test_EscapingTest::testUnicodeCodepointConversionToUtf8(  ): mixed
```





**Return Value:**





---
### Twig_Test_EscapingTest::testJavascriptEscapingEscapesOwaspRecommendedRanges



```php
Twig_Test_EscapingTest::testJavascriptEscapingEscapesOwaspRecommendedRanges(  ): mixed
```





**Return Value:**





---
### Twig_Test_EscapingTest::testHtmlAttributeEscapingEscapesOwaspRecommendedRanges



```php
Twig_Test_EscapingTest::testHtmlAttributeEscapingEscapesOwaspRecommendedRanges(  ): mixed
```





**Return Value:**





---
### Twig_Test_EscapingTest::testCssEscapingEscapesOwaspRecommendedRanges



```php
Twig_Test_EscapingTest::testCssEscapingEscapesOwaspRecommendedRanges(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Cache_FilesystemTest





* Full name: \Twig_Tests_Cache_FilesystemTest
* Parent class: 


### Twig_Tests_Cache_FilesystemTest::testLoad



```php
Twig_Tests_Cache_FilesystemTest::testLoad(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Cache_FilesystemTest::testLoadMissing



```php
Twig_Tests_Cache_FilesystemTest::testLoadMissing(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Cache_FilesystemTest::testWrite



```php
Twig_Tests_Cache_FilesystemTest::testWrite(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Cache_FilesystemTest::testWriteFailMkdir



```php
Twig_Tests_Cache_FilesystemTest::testWriteFailMkdir(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Cache_FilesystemTest::testWriteFailDirWritable



```php
Twig_Tests_Cache_FilesystemTest::testWriteFailDirWritable(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Cache_FilesystemTest::testWriteFailWriteFile



```php
Twig_Tests_Cache_FilesystemTest::testWriteFailWriteFile(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Cache_FilesystemTest::testGetTimestamp



```php
Twig_Tests_Cache_FilesystemTest::testGetTimestamp(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Cache_FilesystemTest::testGetTimestampMissingFile



```php
Twig_Tests_Cache_FilesystemTest::testGetTimestampMissingFile(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Cache_FilesystemTest::testGenerateKey

Test file cache is tolerant towards trailing (back)slashes on the configured cache directory.

```php
Twig_Tests_Cache_FilesystemTest::testGenerateKey( mixed expected, mixed input ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `expected` | **mixed** |  |
| `input` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_Cache_FilesystemTest::provideDirectories



```php
Twig_Tests_Cache_FilesystemTest::provideDirectories(  ): mixed
```





**Return Value:**





---
## Twig_Tests_CompilerTest





* Full name: \Twig_Tests_CompilerTest
* Parent class: 


### Twig_Tests_CompilerTest::testReprNumericValueWithLocale



```php
Twig_Tests_CompilerTest::testReprNumericValueWithLocale(  ): mixed
```





**Return Value:**





---
## Twig_Tests_EnvironmentTest





* Full name: \Twig_Tests_EnvironmentTest
* Parent class: 


### Twig_Tests_EnvironmentTest::testAutoescapeOption



```php
Twig_Tests_EnvironmentTest::testAutoescapeOption(  ): mixed
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest::escapingStrategyCallback



```php
Twig_Tests_EnvironmentTest::escapingStrategyCallback( mixed name ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_EnvironmentTest::testGlobals



```php
Twig_Tests_EnvironmentTest::testGlobals(  ): mixed
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest::testExtensionsAreNotInitializedWhenRenderingACompiledTemplate



```php
Twig_Tests_EnvironmentTest::testExtensionsAreNotInitializedWhenRenderingACompiledTemplate(  ): mixed
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest::testAutoReloadCacheMiss



```php
Twig_Tests_EnvironmentTest::testAutoReloadCacheMiss(  ): mixed
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest::testAutoReloadCacheHit



```php
Twig_Tests_EnvironmentTest::testAutoReloadCacheHit(  ): mixed
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest::testAutoReloadOutdatedCacheHit



```php
Twig_Tests_EnvironmentTest::testAutoReloadOutdatedCacheHit(  ): mixed
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest::testHasGetExtensionByClassName



```php
Twig_Tests_EnvironmentTest::testHasGetExtensionByClassName(  ): mixed
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest::testAddExtension



```php
Twig_Tests_EnvironmentTest::testAddExtension(  ): mixed
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest::testAddMockExtension



```php
Twig_Tests_EnvironmentTest::testAddMockExtension(  ): mixed
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest::testInitRuntimeWithAnExtensionUsingInitRuntimeNoDeprecation



```php
Twig_Tests_EnvironmentTest::testInitRuntimeWithAnExtensionUsingInitRuntimeNoDeprecation(  ): mixed
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest::testOverrideExtension



```php
Twig_Tests_EnvironmentTest::testOverrideExtension(  ): mixed
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest::testAddRuntimeLoader



```php
Twig_Tests_EnvironmentTest::testAddRuntimeLoader(  ): mixed
```





**Return Value:**





---
## Twig_Tests_EnvironmentTest_Extension





* Full name: \Twig_Tests_EnvironmentTest_Extension
* Parent class: \Twig_Extension
* This class implements: \Twig_Extension_GlobalsInterface


### Twig_Tests_EnvironmentTest_Extension::getTokenParsers

Returns the token parser instances to add to the existing list.

```php
Twig_Tests_EnvironmentTest_Extension::getTokenParsers(  ): \Twig_TokenParserInterface[]
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest_Extension::getNodeVisitors

Returns the node visitor instances to add to the existing list.

```php
Twig_Tests_EnvironmentTest_Extension::getNodeVisitors(  ): \Twig_NodeVisitorInterface[]
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest_Extension::getFilters

Returns a list of filters to add to the existing list.

```php
Twig_Tests_EnvironmentTest_Extension::getFilters(  ): \Twig_SimpleFilter[]
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest_Extension::getTests

Returns a list of tests to add to the existing list.

```php
Twig_Tests_EnvironmentTest_Extension::getTests(  ): \Twig_SimpleTest[]
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest_Extension::getFunctions

Returns a list of functions to add to the existing list.

```php
Twig_Tests_EnvironmentTest_Extension::getFunctions(  ): \Twig_SimpleFunction[]
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest_Extension::getOperators

Returns a list of operators to add to the existing list.

```php
Twig_Tests_EnvironmentTest_Extension::getOperators(  ): array[]
```





**Return Value:**

First array of unary operators, second array of binary operators



---
### Twig_Tests_EnvironmentTest_Extension::getGlobals

Returns a list of global variables to add to the existing list.

```php
Twig_Tests_EnvironmentTest_Extension::getGlobals(  ): array
```





**Return Value:**

An array of global variables



---
## Twig_Tests_EnvironmentTest_Extension_WithGlobals





* Full name: \Twig_Tests_EnvironmentTest_Extension_WithGlobals
* Parent class: \Twig_Extension


### Twig_Tests_EnvironmentTest_Extension_WithGlobals::getGlobals



```php
Twig_Tests_EnvironmentTest_Extension_WithGlobals::getGlobals(  ): mixed
```





**Return Value:**





---
## Twig_Tests_EnvironmentTest_ExtensionWithDeprecationInitRuntime





* Full name: \Twig_Tests_EnvironmentTest_ExtensionWithDeprecationInitRuntime
* Parent class: \Twig_Extension


### Twig_Tests_EnvironmentTest_ExtensionWithDeprecationInitRuntime::initRuntime



```php
Twig_Tests_EnvironmentTest_ExtensionWithDeprecationInitRuntime::initRuntime( \Twig_Environment env ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `env` | **\Twig_Environment** |  |


**Return Value:**





---
## Twig_Tests_EnvironmentTest_ExtensionWithoutDeprecationInitRuntime





* Full name: \Twig_Tests_EnvironmentTest_ExtensionWithoutDeprecationInitRuntime
* Parent class: \Twig_Extension
* This class implements: \Twig_Extension_InitRuntimeInterface


### Twig_Tests_EnvironmentTest_ExtensionWithoutDeprecationInitRuntime::initRuntime

Initializes the runtime environment.

```php
Twig_Tests_EnvironmentTest_ExtensionWithoutDeprecationInitRuntime::initRuntime( \Twig_Environment env ): mixed
```

This is where you can load some file that contains filter functions for instance.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `env` | **\Twig_Environment** |  |


**Return Value:**





---
## Twig_Tests_EnvironmentTest_ExtensionWithoutRuntime





* Full name: \Twig_Tests_EnvironmentTest_ExtensionWithoutRuntime
* Parent class: \Twig_Extension


### Twig_Tests_EnvironmentTest_ExtensionWithoutRuntime::getFunctions

Returns a list of functions to add to the existing list.

```php
Twig_Tests_EnvironmentTest_ExtensionWithoutRuntime::getFunctions(  ): \Twig_SimpleFunction[]
```





**Return Value:**





---
### Twig_Tests_EnvironmentTest_ExtensionWithoutRuntime::getName



```php
Twig_Tests_EnvironmentTest_ExtensionWithoutRuntime::getName(  ): mixed
```





**Return Value:**





---
## Twig_Tests_EnvironmentTest_NodeVisitor





* Full name: \Twig_Tests_EnvironmentTest_NodeVisitor
* This class implements: \Twig_NodeVisitorInterface


### Twig_Tests_EnvironmentTest_NodeVisitor::enterNode

Called before child nodes are visited.

```php
Twig_Tests_EnvironmentTest_NodeVisitor::enterNode( \Twig_Node node, \Twig_Environment env ): \Twig_Node
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node** |  |
| `env` | **\Twig_Environment** |  |


**Return Value:**

The modified node



---
### Twig_Tests_EnvironmentTest_NodeVisitor::leaveNode

Called after child nodes are visited.

```php
Twig_Tests_EnvironmentTest_NodeVisitor::leaveNode( \Twig_Node node, \Twig_Environment env ): \Twig_Node|false
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node** |  |
| `env` | **\Twig_Environment** |  |


**Return Value:**

The modified node or false if the node must be removed



---
### Twig_Tests_EnvironmentTest_NodeVisitor::getPriority

Returns the priority for this visitor.

```php
Twig_Tests_EnvironmentTest_NodeVisitor::getPriority(  ): int
```

Priority should be between -10 and 10 (0 is the default).



**Return Value:**

The priority level



---
## Twig_Tests_EnvironmentTest_Runtime





* Full name: \Twig_Tests_EnvironmentTest_Runtime


### Twig_Tests_EnvironmentTest_Runtime::fromRuntime



```php
Twig_Tests_EnvironmentTest_Runtime::fromRuntime( mixed name = 'bar' ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `name` | **mixed** |  |


**Return Value:**





---
## Twig_Tests_EnvironmentTest_TokenParser

Base class for all token parsers.



* Full name: \Twig_Tests_EnvironmentTest_TokenParser
* Parent class: \Twig_TokenParser


### Twig_Tests_EnvironmentTest_TokenParser::parse



```php
Twig_Tests_EnvironmentTest_TokenParser::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_Tests_EnvironmentTest_TokenParser::getTag



```php
Twig_Tests_EnvironmentTest_TokenParser::getTag(  ): mixed
```





**Return Value:**





---
## Twig_Tests_ErrorTest





* Full name: \Twig_Tests_ErrorTest
* Parent class: 


### Twig_Tests_ErrorTest::testErrorWithObjectFilename



```php
Twig_Tests_ErrorTest::testErrorWithObjectFilename(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ErrorTest::testErrorWithArrayFilename



```php
Twig_Tests_ErrorTest::testErrorWithArrayFilename(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ErrorTest::testTwigExceptionGuessWithMissingVarAndArrayLoader



```php
Twig_Tests_ErrorTest::testTwigExceptionGuessWithMissingVarAndArrayLoader(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ErrorTest::testTwigExceptionGuessWithExceptionAndArrayLoader



```php
Twig_Tests_ErrorTest::testTwigExceptionGuessWithExceptionAndArrayLoader(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ErrorTest::testTwigExceptionGuessWithMissingVarAndFilesystemLoader



```php
Twig_Tests_ErrorTest::testTwigExceptionGuessWithMissingVarAndFilesystemLoader(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ErrorTest::testTwigExceptionGuessWithExceptionAndFilesystemLoader



```php
Twig_Tests_ErrorTest::testTwigExceptionGuessWithExceptionAndFilesystemLoader(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ErrorTest::testTwigExceptionAddsFileAndLine



```php
Twig_Tests_ErrorTest::testTwigExceptionAddsFileAndLine( mixed templates, mixed name, mixed line ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `templates` | **mixed** |  |
| `name` | **mixed** |  |
| `line` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_ErrorTest::getErroredTemplates



```php
Twig_Tests_ErrorTest::getErroredTemplates(  ): mixed
```





**Return Value:**





---
## Twig_Tests_ErrorTest_Foo





* Full name: \Twig_Tests_ErrorTest_Foo


### Twig_Tests_ErrorTest_Foo::bar



```php
Twig_Tests_ErrorTest_Foo::bar(  ): mixed
```





**Return Value:**





---
## Twig_Tests_ExpressionParserTest





* Full name: \Twig_Tests_ExpressionParserTest
* Parent class: 


### Twig_Tests_ExpressionParserTest::testCanOnlyAssignToNames



```php
Twig_Tests_ExpressionParserTest::testCanOnlyAssignToNames( mixed template ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `template` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_ExpressionParserTest::getFailingTestsForAssignment



```php
Twig_Tests_ExpressionParserTest::getFailingTestsForAssignment(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testArrayExpression



```php
Twig_Tests_ExpressionParserTest::testArrayExpression( mixed template, mixed expected ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `template` | **mixed** |  |
| `expected` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testArraySyntaxError



```php
Twig_Tests_ExpressionParserTest::testArraySyntaxError( mixed template ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `template` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_ExpressionParserTest::getFailingTestsForArray



```php
Twig_Tests_ExpressionParserTest::getFailingTestsForArray(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::getTestsForArray



```php
Twig_Tests_ExpressionParserTest::getTestsForArray(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testStringExpressionDoesNotConcatenateTwoConsecutiveStrings



```php
Twig_Tests_ExpressionParserTest::testStringExpressionDoesNotConcatenateTwoConsecutiveStrings(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testStringExpression



```php
Twig_Tests_ExpressionParserTest::testStringExpression( mixed template, mixed expected ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `template` | **mixed** |  |
| `expected` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_ExpressionParserTest::getTestsForString



```php
Twig_Tests_ExpressionParserTest::getTestsForString(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testAttributeCallDoesNotSupportNamedArguments



```php
Twig_Tests_ExpressionParserTest::testAttributeCallDoesNotSupportNamedArguments(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testMacroCallDoesNotSupportNamedArguments



```php
Twig_Tests_ExpressionParserTest::testMacroCallDoesNotSupportNamedArguments(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testMacroDefinitionDoesNotSupportNonNameVariableName



```php
Twig_Tests_ExpressionParserTest::testMacroDefinitionDoesNotSupportNonNameVariableName(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testMacroDefinitionDoesNotSupportNonConstantDefaultValues



```php
Twig_Tests_ExpressionParserTest::testMacroDefinitionDoesNotSupportNonConstantDefaultValues( mixed template ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `template` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_ExpressionParserTest::getMacroDefinitionDoesNotSupportNonConstantDefaultValues



```php
Twig_Tests_ExpressionParserTest::getMacroDefinitionDoesNotSupportNonConstantDefaultValues(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testMacroDefinitionSupportsConstantDefaultValues



```php
Twig_Tests_ExpressionParserTest::testMacroDefinitionSupportsConstantDefaultValues( mixed template ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `template` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_ExpressionParserTest::getMacroDefinitionSupportsConstantDefaultValues



```php
Twig_Tests_ExpressionParserTest::getMacroDefinitionSupportsConstantDefaultValues(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testUnknownFunction



```php
Twig_Tests_ExpressionParserTest::testUnknownFunction(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testUnknownFunctionWithoutSuggestions



```php
Twig_Tests_ExpressionParserTest::testUnknownFunctionWithoutSuggestions(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testUnknownFilter



```php
Twig_Tests_ExpressionParserTest::testUnknownFilter(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testUnknownFilterWithoutSuggestions



```php
Twig_Tests_ExpressionParserTest::testUnknownFilterWithoutSuggestions(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testUnknownTest



```php
Twig_Tests_ExpressionParserTest::testUnknownTest(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ExpressionParserTest::testUnknownTestWithoutSuggestions



```php
Twig_Tests_ExpressionParserTest::testUnknownTestWithoutSuggestions(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Extension_CoreTest





* Full name: \Twig_Tests_Extension_CoreTest
* Parent class: 


### Twig_Tests_Extension_CoreTest::testRandomFunction



```php
Twig_Tests_Extension_CoreTest::testRandomFunction( mixed value, mixed expectedInArray ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `value` | **mixed** |  |
| `expectedInArray` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_Extension_CoreTest::getRandomFunctionTestData



```php
Twig_Tests_Extension_CoreTest::getRandomFunctionTestData(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_CoreTest::testRandomFunctionWithoutParameter



```php
Twig_Tests_Extension_CoreTest::testRandomFunctionWithoutParameter(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_CoreTest::testRandomFunctionReturnsAsIs



```php
Twig_Tests_Extension_CoreTest::testRandomFunctionReturnsAsIs(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_CoreTest::testRandomFunctionOfEmptyArrayThrowsException



```php
Twig_Tests_Extension_CoreTest::testRandomFunctionOfEmptyArrayThrowsException(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_CoreTest::testRandomFunctionOnNonUTF8String



```php
Twig_Tests_Extension_CoreTest::testRandomFunctionOnNonUTF8String(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_CoreTest::testReverseFilterOnNonUTF8String



```php
Twig_Tests_Extension_CoreTest::testReverseFilterOnNonUTF8String(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_CoreTest::testCustomEscaper



```php
Twig_Tests_Extension_CoreTest::testCustomEscaper( mixed expected, mixed string, mixed strategy ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `expected` | **mixed** |  |
| `string` | **mixed** |  |
| `strategy` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_Extension_CoreTest::provideCustomEscaperCases



```php
Twig_Tests_Extension_CoreTest::provideCustomEscaperCases(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_CoreTest::testUnknownCustomEscaper



```php
Twig_Tests_Extension_CoreTest::testUnknownCustomEscaper(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_CoreTest::testTwigFirst



```php
Twig_Tests_Extension_CoreTest::testTwigFirst( mixed expected, mixed input ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `expected` | **mixed** |  |
| `input` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_Extension_CoreTest::provideTwigFirstCases



```php
Twig_Tests_Extension_CoreTest::provideTwigFirstCases(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_CoreTest::testTwigLast



```php
Twig_Tests_Extension_CoreTest::testTwigLast( mixed expected, mixed input ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `expected` | **mixed** |  |
| `input` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_Extension_CoreTest::provideTwigLastCases



```php
Twig_Tests_Extension_CoreTest::provideTwigLastCases(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_CoreTest::testArrayKeysFilter



```php
Twig_Tests_Extension_CoreTest::testArrayKeysFilter( array expected, mixed input ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `expected` | **array** |  |
| `input` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_Extension_CoreTest::provideArrayKeyCases



```php
Twig_Tests_Extension_CoreTest::provideArrayKeyCases(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_CoreTest::testInFilter



```php
Twig_Tests_Extension_CoreTest::testInFilter( mixed expected, mixed value, mixed compare ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `expected` | **mixed** |  |
| `value` | **mixed** |  |
| `compare` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_Extension_CoreTest::provideInFilterCases



```php
Twig_Tests_Extension_CoreTest::provideInFilterCases(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_CoreTest::testSliceFilter



```php
Twig_Tests_Extension_CoreTest::testSliceFilter( mixed expected, mixed input, mixed start, mixed length = null, mixed preserveKeys = false ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `expected` | **mixed** |  |
| `input` | **mixed** |  |
| `start` | **mixed** |  |
| `length` | **mixed** |  |
| `preserveKeys` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_Extension_CoreTest::provideSliceFilterCases



```php
Twig_Tests_Extension_CoreTest::provideSliceFilterCases(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Extension_SandboxTest





* Full name: \Twig_Tests_Extension_SandboxTest
* Parent class: 


### Twig_Tests_Extension_SandboxTest::testSandboxWithInheritance



```php
Twig_Tests_Extension_SandboxTest::testSandboxWithInheritance(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxGloballySet



```php
Twig_Tests_Extension_SandboxTest::testSandboxGloballySet(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxUnallowedMethodAccessor



```php
Twig_Tests_Extension_SandboxTest::testSandboxUnallowedMethodAccessor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxUnallowedFilter



```php
Twig_Tests_Extension_SandboxTest::testSandboxUnallowedFilter(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxUnallowedTag



```php
Twig_Tests_Extension_SandboxTest::testSandboxUnallowedTag(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxUnallowedProperty



```php
Twig_Tests_Extension_SandboxTest::testSandboxUnallowedProperty(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxUnallowedToString



```php
Twig_Tests_Extension_SandboxTest::testSandboxUnallowedToString(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxUnallowedToStringArray



```php
Twig_Tests_Extension_SandboxTest::testSandboxUnallowedToStringArray(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxUnallowedFunction



```php
Twig_Tests_Extension_SandboxTest::testSandboxUnallowedFunction(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxAllowMethodFoo



```php
Twig_Tests_Extension_SandboxTest::testSandboxAllowMethodFoo(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxAllowMethodToString



```php
Twig_Tests_Extension_SandboxTest::testSandboxAllowMethodToString(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxAllowMethodToStringDisabled



```php
Twig_Tests_Extension_SandboxTest::testSandboxAllowMethodToStringDisabled(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxAllowFilter



```php
Twig_Tests_Extension_SandboxTest::testSandboxAllowFilter(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxAllowTag



```php
Twig_Tests_Extension_SandboxTest::testSandboxAllowTag(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxAllowProperty



```php
Twig_Tests_Extension_SandboxTest::testSandboxAllowProperty(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxAllowFunction



```php
Twig_Tests_Extension_SandboxTest::testSandboxAllowFunction(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxAllowFunctionsCaseInsensitive



```php
Twig_Tests_Extension_SandboxTest::testSandboxAllowFunctionsCaseInsensitive(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxLocallySetForAnInclude



```php
Twig_Tests_Extension_SandboxTest::testSandboxLocallySetForAnInclude(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testMacrosInASandbox



```php
Twig_Tests_Extension_SandboxTest::testMacrosInASandbox(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Extension_SandboxTest::testSandboxDisabledAfterIncludeFunctionError



```php
Twig_Tests_Extension_SandboxTest::testSandboxDisabledAfterIncludeFunctionError(  ): mixed
```





**Return Value:**





---
## Twig_Tests_FactoryRuntimeLoaderTest





* Full name: \Twig_Tests_FactoryRuntimeLoaderTest
* Parent class: 


### Twig_Tests_FactoryRuntimeLoaderTest::testLoad



```php
Twig_Tests_FactoryRuntimeLoaderTest::testLoad(  ): mixed
```





**Return Value:**





---
### Twig_Tests_FactoryRuntimeLoaderTest::testLoadReturnsNullForUnmappedRuntime



```php
Twig_Tests_FactoryRuntimeLoaderTest::testLoadReturnsNullForUnmappedRuntime(  ): mixed
```





**Return Value:**





---
## Twig_Tests_FileExtensionEscapingStrategyTest





* Full name: \Twig_Tests_FileExtensionEscapingStrategyTest
* Parent class: 


### Twig_Tests_FileExtensionEscapingStrategyTest::testGuess



```php
Twig_Tests_FileExtensionEscapingStrategyTest::testGuess( mixed strategy, mixed filename ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strategy` | **mixed** |  |
| `filename` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_FileExtensionEscapingStrategyTest::getGuessData



```php
Twig_Tests_FileExtensionEscapingStrategyTest::getGuessData(  ): mixed
```





**Return Value:**





---
## Twig_Tests_FilesystemHelper





* Full name: \Twig_Tests_FilesystemHelper


### Twig_Tests_FilesystemHelper::removeDir



```php
Twig_Tests_FilesystemHelper::removeDir( mixed dir ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `dir` | **mixed** |  |


**Return Value:**





---
## Twig_Tests_IntegrationTest

Integration test helper.



* Full name: \Twig_Tests_IntegrationTest
* Parent class: \Twig_Test_IntegrationTestCase


### Twig_Tests_IntegrationTest::getExtensions



```php
Twig_Tests_IntegrationTest::getExtensions(  ): \Twig_ExtensionInterface[]
```





**Return Value:**





---
### Twig_Tests_IntegrationTest::getFixturesDir



```php
Twig_Tests_IntegrationTest::getFixturesDir(  ): string
```





**Return Value:**





---
## Twig_Tests_LexerTest





* Full name: \Twig_Tests_LexerTest
* Parent class: 


### Twig_Tests_LexerTest::testNameLabelForTag



```php
Twig_Tests_LexerTest::testNameLabelForTag(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testNameLabelForFunction



```php
Twig_Tests_LexerTest::testNameLabelForFunction(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testBracketsNesting



```php
Twig_Tests_LexerTest::testBracketsNesting(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testLineDirective



```php
Twig_Tests_LexerTest::testLineDirective(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testLineDirectiveInline



```php
Twig_Tests_LexerTest::testLineDirectiveInline(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testLongComments



```php
Twig_Tests_LexerTest::testLongComments(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testLongVerbatim



```php
Twig_Tests_LexerTest::testLongVerbatim(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testLongVar



```php
Twig_Tests_LexerTest::testLongVar(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testLongBlock



```php
Twig_Tests_LexerTest::testLongBlock(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testBigNumbers



```php
Twig_Tests_LexerTest::testBigNumbers(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testStringWithEscapedDelimiter



```php
Twig_Tests_LexerTest::testStringWithEscapedDelimiter(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testStringWithInterpolation



```php
Twig_Tests_LexerTest::testStringWithInterpolation(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testStringWithEscapedInterpolation



```php
Twig_Tests_LexerTest::testStringWithEscapedInterpolation(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testStringWithHash



```php
Twig_Tests_LexerTest::testStringWithHash(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testStringWithUnterminatedInterpolation



```php
Twig_Tests_LexerTest::testStringWithUnterminatedInterpolation(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testStringWithNestedInterpolations



```php
Twig_Tests_LexerTest::testStringWithNestedInterpolations(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testStringWithNestedInterpolationsInBlock



```php
Twig_Tests_LexerTest::testStringWithNestedInterpolationsInBlock(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testOperatorEndingWithALetterAtTheEndOfALine



```php
Twig_Tests_LexerTest::testOperatorEndingWithALetterAtTheEndOfALine(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testUnterminatedVariable



```php
Twig_Tests_LexerTest::testUnterminatedVariable(  ): mixed
```





**Return Value:**





---
### Twig_Tests_LexerTest::testUnterminatedBlock



```php
Twig_Tests_LexerTest::testUnterminatedBlock(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Loader_ArrayTest





* Full name: \Twig_Tests_Loader_ArrayTest
* Parent class: 


### Twig_Tests_Loader_ArrayTest::testGetSourceContextWhenTemplateDoesNotExist



```php
Twig_Tests_Loader_ArrayTest::testGetSourceContextWhenTemplateDoesNotExist(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_ArrayTest::testGetCacheKey



```php
Twig_Tests_Loader_ArrayTest::testGetCacheKey(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_ArrayTest::testGetCacheKeyWhenTemplateDoesNotExist



```php
Twig_Tests_Loader_ArrayTest::testGetCacheKeyWhenTemplateDoesNotExist(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_ArrayTest::testSetTemplate



```php
Twig_Tests_Loader_ArrayTest::testSetTemplate(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_ArrayTest::testIsFresh



```php
Twig_Tests_Loader_ArrayTest::testIsFresh(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_ArrayTest::testIsFreshWhenTemplateDoesNotExist



```php
Twig_Tests_Loader_ArrayTest::testIsFreshWhenTemplateDoesNotExist(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Loader_ChainTest





* Full name: \Twig_Tests_Loader_ChainTest
* Parent class: 


### Twig_Tests_Loader_ChainTest::testGetSourceContext



```php
Twig_Tests_Loader_ChainTest::testGetSourceContext(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_ChainTest::testGetSourceContextWhenTemplateDoesNotExist



```php
Twig_Tests_Loader_ChainTest::testGetSourceContextWhenTemplateDoesNotExist(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_ChainTest::testGetCacheKey



```php
Twig_Tests_Loader_ChainTest::testGetCacheKey(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_ChainTest::testGetCacheKeyWhenTemplateDoesNotExist



```php
Twig_Tests_Loader_ChainTest::testGetCacheKeyWhenTemplateDoesNotExist(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_ChainTest::testAddLoader



```php
Twig_Tests_Loader_ChainTest::testAddLoader(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_ChainTest::testExists



```php
Twig_Tests_Loader_ChainTest::testExists(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Loader_FilesystemTest





* Full name: \Twig_Tests_Loader_FilesystemTest
* Parent class: 


### Twig_Tests_Loader_FilesystemTest::testGetSourceContext



```php
Twig_Tests_Loader_FilesystemTest::testGetSourceContext(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_FilesystemTest::testSecurity



```php
Twig_Tests_Loader_FilesystemTest::testSecurity( mixed template ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `template` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_Loader_FilesystemTest::getSecurityTests



```php
Twig_Tests_Loader_FilesystemTest::getSecurityTests(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_FilesystemTest::testPaths



```php
Twig_Tests_Loader_FilesystemTest::testPaths( mixed basePath, mixed cacheKey, mixed rootPath ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `basePath` | **mixed** |  |
| `cacheKey` | **mixed** |  |
| `rootPath` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_Loader_FilesystemTest::getBasePaths



```php
Twig_Tests_Loader_FilesystemTest::getBasePaths(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_FilesystemTest::testEmptyConstructor



```php
Twig_Tests_Loader_FilesystemTest::testEmptyConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_FilesystemTest::testGetNamespaces



```php
Twig_Tests_Loader_FilesystemTest::testGetNamespaces(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_FilesystemTest::testFindTemplateExceptionNamespace



```php
Twig_Tests_Loader_FilesystemTest::testFindTemplateExceptionNamespace(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_FilesystemTest::testFindTemplateWithCache



```php
Twig_Tests_Loader_FilesystemTest::testFindTemplateWithCache(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_FilesystemTest::testLoadTemplateAndRenderBlockWithCache



```php
Twig_Tests_Loader_FilesystemTest::testLoadTemplateAndRenderBlockWithCache(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_FilesystemTest::getArrayInheritanceTests



```php
Twig_Tests_Loader_FilesystemTest::getArrayInheritanceTests(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Loader_FilesystemTest::testArrayInheritance



```php
Twig_Tests_Loader_FilesystemTest::testArrayInheritance( templateName ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `templateName` | **** | string Template name with array inheritance |


**Return Value:**





---
### Twig_Tests_Loader_FilesystemTest::testLoadTemplateFromPhar



```php
Twig_Tests_Loader_FilesystemTest::testLoadTemplateFromPhar(  ): mixed
```





**Return Value:**





---
## Twig_Tests_NativeExtensionTest





* Full name: \Twig_Tests_NativeExtensionTest
* Parent class: 


### Twig_Tests_NativeExtensionTest::testGetProperties



```php
Twig_Tests_NativeExtensionTest::testGetProperties(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_AutoEscapeTest





* Full name: \Twig_Tests_Node_AutoEscapeTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_AutoEscapeTest::testConstructor



```php
Twig_Tests_Node_AutoEscapeTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_AutoEscapeTest::getTests



```php
Twig_Tests_Node_AutoEscapeTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_BlockReferenceTest





* Full name: \Twig_Tests_Node_BlockReferenceTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_BlockReferenceTest::testConstructor



```php
Twig_Tests_Node_BlockReferenceTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_BlockReferenceTest::getTests



```php
Twig_Tests_Node_BlockReferenceTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_BlockTest





* Full name: \Twig_Tests_Node_BlockTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_BlockTest::testConstructor



```php
Twig_Tests_Node_BlockTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_BlockTest::getTests



```php
Twig_Tests_Node_BlockTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_DoTest





* Full name: \Twig_Tests_Node_DoTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_DoTest::testConstructor



```php
Twig_Tests_Node_DoTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_DoTest::getTests



```php
Twig_Tests_Node_DoTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_ArrayTest





* Full name: \Twig_Tests_Node_Expression_ArrayTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_ArrayTest::testConstructor



```php
Twig_Tests_Node_Expression_ArrayTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_ArrayTest::getTests



```php
Twig_Tests_Node_Expression_ArrayTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_AssignNameTest





* Full name: \Twig_Tests_Node_Expression_AssignNameTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_AssignNameTest::testConstructor



```php
Twig_Tests_Node_Expression_AssignNameTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_AssignNameTest::getTests



```php
Twig_Tests_Node_Expression_AssignNameTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_Binary_AddTest





* Full name: \Twig_Tests_Node_Expression_Binary_AddTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_Binary_AddTest::testConstructor



```php
Twig_Tests_Node_Expression_Binary_AddTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_Binary_AddTest::getTests



```php
Twig_Tests_Node_Expression_Binary_AddTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_Binary_AndTest





* Full name: \Twig_Tests_Node_Expression_Binary_AndTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_Binary_AndTest::testConstructor



```php
Twig_Tests_Node_Expression_Binary_AndTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_Binary_AndTest::getTests



```php
Twig_Tests_Node_Expression_Binary_AndTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_Binary_ConcatTest





* Full name: \Twig_Tests_Node_Expression_Binary_ConcatTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_Binary_ConcatTest::testConstructor



```php
Twig_Tests_Node_Expression_Binary_ConcatTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_Binary_ConcatTest::getTests



```php
Twig_Tests_Node_Expression_Binary_ConcatTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_Binary_DivTest





* Full name: \Twig_Tests_Node_Expression_Binary_DivTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_Binary_DivTest::testConstructor



```php
Twig_Tests_Node_Expression_Binary_DivTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_Binary_DivTest::getTests



```php
Twig_Tests_Node_Expression_Binary_DivTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_Binary_FloorDivTest





* Full name: \Twig_Tests_Node_Expression_Binary_FloorDivTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_Binary_FloorDivTest::testConstructor



```php
Twig_Tests_Node_Expression_Binary_FloorDivTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_Binary_FloorDivTest::getTests



```php
Twig_Tests_Node_Expression_Binary_FloorDivTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_Binary_ModTest





* Full name: \Twig_Tests_Node_Expression_Binary_ModTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_Binary_ModTest::testConstructor



```php
Twig_Tests_Node_Expression_Binary_ModTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_Binary_ModTest::getTests



```php
Twig_Tests_Node_Expression_Binary_ModTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_Binary_MulTest





* Full name: \Twig_Tests_Node_Expression_Binary_MulTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_Binary_MulTest::testConstructor



```php
Twig_Tests_Node_Expression_Binary_MulTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_Binary_MulTest::getTests



```php
Twig_Tests_Node_Expression_Binary_MulTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_Binary_OrTest





* Full name: \Twig_Tests_Node_Expression_Binary_OrTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_Binary_OrTest::testConstructor



```php
Twig_Tests_Node_Expression_Binary_OrTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_Binary_OrTest::getTests



```php
Twig_Tests_Node_Expression_Binary_OrTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_Binary_SubTest





* Full name: \Twig_Tests_Node_Expression_Binary_SubTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_Binary_SubTest::testConstructor



```php
Twig_Tests_Node_Expression_Binary_SubTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_Binary_SubTest::getTests



```php
Twig_Tests_Node_Expression_Binary_SubTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_Call

Abstract class for all nodes that represents an expression.



* Full name: \Twig_Tests_Node_Expression_Call
* Parent class: \Twig_Node_Expression_Call


### Twig_Tests_Node_Expression_Call::getArguments



```php
Twig_Tests_Node_Expression_Call::getArguments( mixed callable = null, mixed arguments ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `callable` | **mixed** |  |
| `arguments` | **mixed** |  |


**Return Value:**





---
## Twig_Tests_Node_Expression_CallTest





* Full name: \Twig_Tests_Node_Expression_CallTest
* Parent class: 


### Twig_Tests_Node_Expression_CallTest::testGetArguments



```php
Twig_Tests_Node_Expression_CallTest::testGetArguments(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_CallTest::testGetArgumentsWhenPositionalArgumentsAfterNamedArguments



```php
Twig_Tests_Node_Expression_CallTest::testGetArgumentsWhenPositionalArgumentsAfterNamedArguments(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_CallTest::testGetArgumentsWhenArgumentIsDefinedTwice



```php
Twig_Tests_Node_Expression_CallTest::testGetArgumentsWhenArgumentIsDefinedTwice(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_CallTest::testGetArgumentsWithWrongNamedArgumentName



```php
Twig_Tests_Node_Expression_CallTest::testGetArgumentsWithWrongNamedArgumentName(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_CallTest::testGetArgumentsWithWrongNamedArgumentNames



```php
Twig_Tests_Node_Expression_CallTest::testGetArgumentsWithWrongNamedArgumentNames(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_CallTest::testResolveArgumentsWithMissingValueForOptionalArgument



```php
Twig_Tests_Node_Expression_CallTest::testResolveArgumentsWithMissingValueForOptionalArgument(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_CallTest::testResolveArgumentsOnlyNecessaryArgumentsForCustomFunction



```php
Twig_Tests_Node_Expression_CallTest::testResolveArgumentsOnlyNecessaryArgumentsForCustomFunction(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_CallTest::testGetArgumentsForStaticMethod



```php
Twig_Tests_Node_Expression_CallTest::testGetArgumentsForStaticMethod(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_CallTest::testResolveArgumentsWithMissingParameterForArbitraryArguments



```php
Twig_Tests_Node_Expression_CallTest::testResolveArgumentsWithMissingParameterForArbitraryArguments(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_CallTest::customStaticFunction



```php
Twig_Tests_Node_Expression_CallTest::customStaticFunction( mixed arg1, mixed arg2 = 'default', mixed arg3 = array() ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `arg1` | **mixed** |  |
| `arg2` | **mixed** |  |
| `arg3` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_Node_Expression_CallTest::customFunction



```php
Twig_Tests_Node_Expression_CallTest::customFunction( mixed arg1, mixed arg2 = 'default', mixed arg3 = array() ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `arg1` | **mixed** |  |
| `arg2` | **mixed** |  |
| `arg3` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_Node_Expression_CallTest::customFunctionWithArbitraryArguments



```php
Twig_Tests_Node_Expression_CallTest::customFunctionWithArbitraryArguments(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_CallTest::testResolveArgumentsWithMissingParameterForArbitraryArgumentsOnFunction



```php
Twig_Tests_Node_Expression_CallTest::testResolveArgumentsWithMissingParameterForArbitraryArgumentsOnFunction(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_CallTest::testResolveArgumentsWithMissingParameterForArbitraryArgumentsOnObject



```php
Twig_Tests_Node_Expression_CallTest::testResolveArgumentsWithMissingParameterForArbitraryArgumentsOnObject(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_ConditionalTest





* Full name: \Twig_Tests_Node_Expression_ConditionalTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_ConditionalTest::testConstructor



```php
Twig_Tests_Node_Expression_ConditionalTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_ConditionalTest::getTests



```php
Twig_Tests_Node_Expression_ConditionalTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_ConstantTest





* Full name: \Twig_Tests_Node_Expression_ConstantTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_ConstantTest::testConstructor



```php
Twig_Tests_Node_Expression_ConstantTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_ConstantTest::getTests



```php
Twig_Tests_Node_Expression_ConstantTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_FilterTest





* Full name: \Twig_Tests_Node_Expression_FilterTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_FilterTest::testConstructor



```php
Twig_Tests_Node_Expression_FilterTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_FilterTest::getTests



```php
Twig_Tests_Node_Expression_FilterTest::getTests(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_FilterTest::testCompileWithWrongNamedArgumentName



```php
Twig_Tests_Node_Expression_FilterTest::testCompileWithWrongNamedArgumentName(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_FilterTest::testCompileWithMissingNamedArgument



```php
Twig_Tests_Node_Expression_FilterTest::testCompileWithMissingNamedArgument(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_FunctionTest





* Full name: \Twig_Tests_Node_Expression_FunctionTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_FunctionTest::testConstructor



```php
Twig_Tests_Node_Expression_FunctionTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_FunctionTest::getTests



```php
Twig_Tests_Node_Expression_FunctionTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_GetAttrTest





* Full name: \Twig_Tests_Node_Expression_GetAttrTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_GetAttrTest::testConstructor



```php
Twig_Tests_Node_Expression_GetAttrTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_GetAttrTest::getTests



```php
Twig_Tests_Node_Expression_GetAttrTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_NameTest





* Full name: \Twig_Tests_Node_Expression_NameTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_NameTest::testConstructor



```php
Twig_Tests_Node_Expression_NameTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_NameTest::getTests



```php
Twig_Tests_Node_Expression_NameTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_NullCoalesceTest





* Full name: \Twig_Tests_Node_Expression_NullCoalesceTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_NullCoalesceTest::getTests



```php
Twig_Tests_Node_Expression_NullCoalesceTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_ParentTest





* Full name: \Twig_Tests_Node_Expression_ParentTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_ParentTest::testConstructor



```php
Twig_Tests_Node_Expression_ParentTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_ParentTest::getTests



```php
Twig_Tests_Node_Expression_ParentTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_TestTest





* Full name: \Twig_Tests_Node_Expression_TestTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_TestTest::testConstructor



```php
Twig_Tests_Node_Expression_TestTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_TestTest::getTests



```php
Twig_Tests_Node_Expression_TestTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_Unary_NegTest





* Full name: \Twig_Tests_Node_Expression_Unary_NegTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_Unary_NegTest::testConstructor



```php
Twig_Tests_Node_Expression_Unary_NegTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_Unary_NegTest::getTests



```php
Twig_Tests_Node_Expression_Unary_NegTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_Unary_NotTest





* Full name: \Twig_Tests_Node_Expression_Unary_NotTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_Unary_NotTest::testConstructor



```php
Twig_Tests_Node_Expression_Unary_NotTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_Unary_NotTest::getTests



```php
Twig_Tests_Node_Expression_Unary_NotTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_Expression_Unary_PosTest





* Full name: \Twig_Tests_Node_Expression_Unary_PosTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_Expression_Unary_PosTest::testConstructor



```php
Twig_Tests_Node_Expression_Unary_PosTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_Expression_Unary_PosTest::getTests



```php
Twig_Tests_Node_Expression_Unary_PosTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_ForTest





* Full name: \Twig_Tests_Node_ForTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_ForTest::testConstructor



```php
Twig_Tests_Node_ForTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_ForTest::getTests



```php
Twig_Tests_Node_ForTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_IfTest





* Full name: \Twig_Tests_Node_IfTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_IfTest::testConstructor



```php
Twig_Tests_Node_IfTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_IfTest::getTests



```php
Twig_Tests_Node_IfTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_ImportTest





* Full name: \Twig_Tests_Node_ImportTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_ImportTest::testConstructor



```php
Twig_Tests_Node_ImportTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_ImportTest::getTests



```php
Twig_Tests_Node_ImportTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_IncludeTest





* Full name: \Twig_Tests_Node_IncludeTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_IncludeTest::testConstructor



```php
Twig_Tests_Node_IncludeTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_IncludeTest::getTests



```php
Twig_Tests_Node_IncludeTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_MacroTest





* Full name: \Twig_Tests_Node_MacroTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_MacroTest::testConstructor



```php
Twig_Tests_Node_MacroTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_MacroTest::getTests



```php
Twig_Tests_Node_MacroTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_ModuleTest





* Full name: \Twig_Tests_Node_ModuleTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_ModuleTest::testConstructor



```php
Twig_Tests_Node_ModuleTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_ModuleTest::getTests



```php
Twig_Tests_Node_ModuleTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_PrintTest





* Full name: \Twig_Tests_Node_PrintTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_PrintTest::testConstructor



```php
Twig_Tests_Node_PrintTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_PrintTest::getTests



```php
Twig_Tests_Node_PrintTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_SandboxedPrintTest





* Full name: \Twig_Tests_Node_SandboxedPrintTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_SandboxedPrintTest::testConstructor



```php
Twig_Tests_Node_SandboxedPrintTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_SandboxedPrintTest::getTests



```php
Twig_Tests_Node_SandboxedPrintTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_SandboxTest





* Full name: \Twig_Tests_Node_SandboxTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_SandboxTest::testConstructor



```php
Twig_Tests_Node_SandboxTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_SandboxTest::getTests



```php
Twig_Tests_Node_SandboxTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_SetTest





* Full name: \Twig_Tests_Node_SetTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_SetTest::testConstructor



```php
Twig_Tests_Node_SetTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_SetTest::getTests



```php
Twig_Tests_Node_SetTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_SpacelessTest





* Full name: \Twig_Tests_Node_SpacelessTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_SpacelessTest::testConstructor



```php
Twig_Tests_Node_SpacelessTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_SpacelessTest::getTests



```php
Twig_Tests_Node_SpacelessTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Node_TextTest





* Full name: \Twig_Tests_Node_TextTest
* Parent class: \Twig_Test_NodeTestCase


### Twig_Tests_Node_TextTest::testConstructor



```php
Twig_Tests_Node_TextTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Node_TextTest::getTests



```php
Twig_Tests_Node_TextTest::getTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_NodeVisitor_OptimizerTest





* Full name: \Twig_Tests_NodeVisitor_OptimizerTest
* Parent class: 


### Twig_Tests_NodeVisitor_OptimizerTest::testRenderBlockOptimizer



```php
Twig_Tests_NodeVisitor_OptimizerTest::testRenderBlockOptimizer(  ): mixed
```





**Return Value:**





---
### Twig_Tests_NodeVisitor_OptimizerTest::testRenderParentBlockOptimizer



```php
Twig_Tests_NodeVisitor_OptimizerTest::testRenderParentBlockOptimizer(  ): mixed
```





**Return Value:**





---
### Twig_Tests_NodeVisitor_OptimizerTest::testForOptimizer



```php
Twig_Tests_NodeVisitor_OptimizerTest::testForOptimizer( mixed template, mixed expected ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `template` | **mixed** |  |
| `expected` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_NodeVisitor_OptimizerTest::getTestsForForOptimizer



```php
Twig_Tests_NodeVisitor_OptimizerTest::getTestsForForOptimizer(  ): mixed
```





**Return Value:**





---
### Twig_Tests_NodeVisitor_OptimizerTest::checkForConfiguration



```php
Twig_Tests_NodeVisitor_OptimizerTest::checkForConfiguration( \Twig_Node node, mixed target, mixed withLoop ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `node` | **\Twig_Node** |  |
| `target` | **mixed** |  |
| `withLoop` | **mixed** |  |


**Return Value:**





---
## Twig_Tests_ParserTest





* Full name: \Twig_Tests_ParserTest
* Parent class: 


### Twig_Tests_ParserTest::testUnknownTag



```php
Twig_Tests_ParserTest::testUnknownTag(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ParserTest::testUnknownTagWithoutSuggestions



```php
Twig_Tests_ParserTest::testUnknownTagWithoutSuggestions(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ParserTest::testFilterBodyNodes



```php
Twig_Tests_ParserTest::testFilterBodyNodes( mixed input, mixed expected ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `input` | **mixed** |  |
| `expected` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_ParserTest::getFilterBodyNodesData



```php
Twig_Tests_ParserTest::getFilterBodyNodesData(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ParserTest::testFilterBodyNodesThrowsException



```php
Twig_Tests_ParserTest::testFilterBodyNodesThrowsException( mixed input ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `input` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_ParserTest::getFilterBodyNodesDataThrowsException



```php
Twig_Tests_ParserTest::getFilterBodyNodesDataThrowsException(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ParserTest::testFilterBodyNodesWithBOM



```php
Twig_Tests_ParserTest::testFilterBodyNodesWithBOM(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ParserTest::testParseIsReentrant



```php
Twig_Tests_ParserTest::testParseIsReentrant(  ): mixed
```





**Return Value:**





---
### Twig_Tests_ParserTest::testGetVarName



```php
Twig_Tests_ParserTest::testGetVarName(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Profiler_Dumper_BlackfireTest





* Full name: \Twig_Tests_Profiler_Dumper_BlackfireTest
* Parent class: \Twig_Tests_Profiler_Dumper_AbstractTest


### Twig_Tests_Profiler_Dumper_BlackfireTest::testDump



```php
Twig_Tests_Profiler_Dumper_BlackfireTest::testDump(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Profiler_Dumper_HtmlTest





* Full name: \Twig_Tests_Profiler_Dumper_HtmlTest
* Parent class: \Twig_Tests_Profiler_Dumper_AbstractTest


### Twig_Tests_Profiler_Dumper_HtmlTest::testDump



```php
Twig_Tests_Profiler_Dumper_HtmlTest::testDump(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Profiler_Dumper_TextTest





* Full name: \Twig_Tests_Profiler_Dumper_TextTest
* Parent class: \Twig_Tests_Profiler_Dumper_AbstractTest


### Twig_Tests_Profiler_Dumper_TextTest::testDump



```php
Twig_Tests_Profiler_Dumper_TextTest::testDump(  ): mixed
```





**Return Value:**





---
## Twig_Tests_Profiler_ProfileTest





* Full name: \Twig_Tests_Profiler_ProfileTest
* Parent class: 


### Twig_Tests_Profiler_ProfileTest::testConstructor



```php
Twig_Tests_Profiler_ProfileTest::testConstructor(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Profiler_ProfileTest::testIsRoot



```php
Twig_Tests_Profiler_ProfileTest::testIsRoot(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Profiler_ProfileTest::testIsTemplate



```php
Twig_Tests_Profiler_ProfileTest::testIsTemplate(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Profiler_ProfileTest::testIsBlock



```php
Twig_Tests_Profiler_ProfileTest::testIsBlock(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Profiler_ProfileTest::testIsMacro



```php
Twig_Tests_Profiler_ProfileTest::testIsMacro(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Profiler_ProfileTest::testGetAddProfile



```php
Twig_Tests_Profiler_ProfileTest::testGetAddProfile(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Profiler_ProfileTest::testGetDuration



```php
Twig_Tests_Profiler_ProfileTest::testGetDuration(  ): mixed
```





**Return Value:**





---
### Twig_Tests_Profiler_ProfileTest::testSerialize



```php
Twig_Tests_Profiler_ProfileTest::testSerialize(  ): mixed
```





**Return Value:**





---
## Twig_Tests_TemplateTest





* Full name: \Twig_Tests_TemplateTest
* Parent class: 


### Twig_Tests_TemplateTest::testDisplayBlocksAcceptTemplateOnlyAsBlocks



```php
Twig_Tests_TemplateTest::testDisplayBlocksAcceptTemplateOnlyAsBlocks(  ): mixed
```





**Return Value:**





---
### Twig_Tests_TemplateTest::testGetAttributeExceptions



```php
Twig_Tests_TemplateTest::testGetAttributeExceptions( mixed template, mixed message ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `template` | **mixed** |  |
| `message` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_TemplateTest::getAttributeExceptions



```php
Twig_Tests_TemplateTest::getAttributeExceptions(  ): mixed
```





**Return Value:**





---
### Twig_Tests_TemplateTest::testGetAttributeWithSandbox



```php
Twig_Tests_TemplateTest::testGetAttributeWithSandbox( mixed object, mixed item, mixed allowed ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `object` | **mixed** |  |
| `item` | **mixed** |  |
| `allowed` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_TemplateTest::getGetAttributeWithSandbox



```php
Twig_Tests_TemplateTest::getGetAttributeWithSandbox(  ): mixed
```





**Return Value:**





---
### Twig_Tests_TemplateTest::testRenderBlockWithUndefinedBlock



```php
Twig_Tests_TemplateTest::testRenderBlockWithUndefinedBlock(  ): mixed
```





**Return Value:**





---
### Twig_Tests_TemplateTest::testDisplayBlockWithUndefinedBlock



```php
Twig_Tests_TemplateTest::testDisplayBlockWithUndefinedBlock(  ): mixed
```





**Return Value:**





---
### Twig_Tests_TemplateTest::testGetAttributeOnArrayWithConfusableKey



```php
Twig_Tests_TemplateTest::testGetAttributeOnArrayWithConfusableKey(  ): mixed
```





**Return Value:**





---
### Twig_Tests_TemplateTest::testGetAttribute



```php
Twig_Tests_TemplateTest::testGetAttribute( mixed defined, mixed value, mixed object, mixed item, mixed arguments, mixed type ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `defined` | **mixed** |  |
| `value` | **mixed** |  |
| `object` | **mixed** |  |
| `item` | **mixed** |  |
| `arguments` | **mixed** |  |
| `type` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_TemplateTest::testGetAttributeStrict



```php
Twig_Tests_TemplateTest::testGetAttributeStrict( mixed defined, mixed value, mixed object, mixed item, mixed arguments, mixed type, mixed exceptionMessage = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `defined` | **mixed** |  |
| `value` | **mixed** |  |
| `object` | **mixed** |  |
| `item` | **mixed** |  |
| `arguments` | **mixed** |  |
| `type` | **mixed** |  |
| `exceptionMessage` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_TemplateTest::testGetAttributeDefined



```php
Twig_Tests_TemplateTest::testGetAttributeDefined( mixed defined, mixed value, mixed object, mixed item, mixed arguments, mixed type ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `defined` | **mixed** |  |
| `value` | **mixed** |  |
| `object` | **mixed** |  |
| `item` | **mixed** |  |
| `arguments` | **mixed** |  |
| `type` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_TemplateTest::testGetAttributeDefinedStrict



```php
Twig_Tests_TemplateTest::testGetAttributeDefinedStrict( mixed defined, mixed value, mixed object, mixed item, mixed arguments, mixed type ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `defined` | **mixed** |  |
| `value` | **mixed** |  |
| `object` | **mixed** |  |
| `item` | **mixed** |  |
| `arguments` | **mixed** |  |
| `type` | **mixed** |  |


**Return Value:**





---
### Twig_Tests_TemplateTest::testGetAttributeCallExceptions



```php
Twig_Tests_TemplateTest::testGetAttributeCallExceptions(  ): mixed
```





**Return Value:**





---
### Twig_Tests_TemplateTest::getGetAttributeTests



```php
Twig_Tests_TemplateTest::getGetAttributeTests(  ): mixed
```





**Return Value:**





---
## Twig_Tests_TemplateWrapperTest





* Full name: \Twig_Tests_TemplateWrapperTest
* Parent class: 


### Twig_Tests_TemplateWrapperTest::testHasGetBlocks



```php
Twig_Tests_TemplateWrapperTest::testHasGetBlocks(  ): mixed
```





**Return Value:**





---
### Twig_Tests_TemplateWrapperTest::testRenderBlock



```php
Twig_Tests_TemplateWrapperTest::testRenderBlock(  ): mixed
```





**Return Value:**





---
### Twig_Tests_TemplateWrapperTest::testDisplayBlock



```php
Twig_Tests_TemplateWrapperTest::testDisplayBlock(  ): mixed
```





**Return Value:**





---
## Twig_Tests_TokenStreamTest





* Full name: \Twig_Tests_TokenStreamTest
* Parent class: 


### Twig_Tests_TokenStreamTest::testNext



```php
Twig_Tests_TokenStreamTest::testNext(  ): mixed
```





**Return Value:**





---
### Twig_Tests_TokenStreamTest::testEndOfTemplateNext



```php
Twig_Tests_TokenStreamTest::testEndOfTemplateNext(  ): mixed
```





**Return Value:**





---
### Twig_Tests_TokenStreamTest::testEndOfTemplateLook



```php
Twig_Tests_TokenStreamTest::testEndOfTemplateLook(  ): mixed
```





**Return Value:**





---
## Twig_Token

Represents a Token.



* Full name: \Twig_Token


### Twig_Token::__construct



```php
Twig_Token::__construct( int type, string value, int lineno ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `type` | **int** | The type of the token |
| `value` | **string** | The token value |
| `lineno` | **int** | The line position in the source |


**Return Value:**





---
### Twig_Token::__toString



```php
Twig_Token::__toString(  ): mixed
```





**Return Value:**





---
### Twig_Token::test

Tests the current token for a type and/or a value.

```php
Twig_Token::test( array|int type, array|string|null values = null ): bool
```

Parameters may be:
* just type
* type and value (or array of possible values)
* just value (or array of possible values) (NAME_TYPE is used as type)


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `type` | **array\|int** | The type to test |
| `values` | **array\|string\|null** | The token value |


**Return Value:**





---
### Twig_Token::getLine



```php
Twig_Token::getLine(  ): int
```





**Return Value:**





---
### Twig_Token::getType



```php
Twig_Token::getType(  ): int
```





**Return Value:**





---
### Twig_Token::getValue



```php
Twig_Token::getValue(  ): string
```





**Return Value:**





---
### Twig_Token::typeToString

Returns the constant representation (internal) of a given type.

```php
Twig_Token::typeToString( int type, bool short = false ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `type` | **int** | The type as an integer |
| `short` | **bool** | Whether to return a short representation or not |


**Return Value:**

The string representation



---
### Twig_Token::typeToEnglish

Returns the English representation of a given type.

```php
Twig_Token::typeToEnglish( int type ): string
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `type` | **int** | The type as an integer |


**Return Value:**

The string representation



---
## Twig_TokenParser_AutoEscape

Marks a section of a template to be escaped or not.



* Full name: \Twig_TokenParser_AutoEscape
* Parent class: \Twig_TokenParser


### Twig_TokenParser_AutoEscape::parse



```php
Twig_TokenParser_AutoEscape::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_AutoEscape::decideBlockEnd



```php
Twig_TokenParser_AutoEscape::decideBlockEnd( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_AutoEscape::getTag



```php
Twig_TokenParser_AutoEscape::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_Block

Marks a section of a template as being reusable.

<pre>
 {% block head %}
   <link rel="stylesheet" href="style.css" />
   <title>{% block title %}{% endblock %} - My Webpage</title>
 {% endblock %}
</pre>

* Full name: \Twig_TokenParser_Block
* Parent class: \Twig_TokenParser


### Twig_TokenParser_Block::parse



```php
Twig_TokenParser_Block::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Block::decideBlockEnd



```php
Twig_TokenParser_Block::decideBlockEnd( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Block::getTag



```php
Twig_TokenParser_Block::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_Do

Evaluates an expression, discarding the returned value.



* Full name: \Twig_TokenParser_Do
* Parent class: \Twig_TokenParser


### Twig_TokenParser_Do::parse



```php
Twig_TokenParser_Do::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Do::getTag



```php
Twig_TokenParser_Do::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_Embed

Embeds a template.



* Full name: \Twig_TokenParser_Embed
* Parent class: \Twig_TokenParser_Include


### Twig_TokenParser_Embed::parse



```php
Twig_TokenParser_Embed::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Embed::decideBlockEnd



```php
Twig_TokenParser_Embed::decideBlockEnd( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Embed::getTag



```php
Twig_TokenParser_Embed::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_Extends

Extends a template by another one.

<pre>
 {% extends "base.html" %}
</pre>

* Full name: \Twig_TokenParser_Extends
* Parent class: \Twig_TokenParser


### Twig_TokenParser_Extends::parse



```php
Twig_TokenParser_Extends::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Extends::getTag



```php
Twig_TokenParser_Extends::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_Filter

Filters a section of a template by applying filters.

<pre>
{% filter upper %}
 This text becomes uppercase
{% endfilter %}
</pre>

* Full name: \Twig_TokenParser_Filter
* Parent class: \Twig_TokenParser


### Twig_TokenParser_Filter::parse



```php
Twig_TokenParser_Filter::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Filter::decideBlockEnd



```php
Twig_TokenParser_Filter::decideBlockEnd( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Filter::getTag



```php
Twig_TokenParser_Filter::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_Flush

Flushes the output to the client.



* Full name: \Twig_TokenParser_Flush
* Parent class: \Twig_TokenParser

**See Also:**

* \flush() - 

### Twig_TokenParser_Flush::parse



```php
Twig_TokenParser_Flush::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Flush::getTag



```php
Twig_TokenParser_Flush::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_For

Loops over each item of a sequence.

<pre>
<ul>
 {% for user in users %}
   <li>{{ user.username|e }}</li>
 {% endfor %}
</ul>
</pre>

* Full name: \Twig_TokenParser_For
* Parent class: \Twig_TokenParser


### Twig_TokenParser_For::parse



```php
Twig_TokenParser_For::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_For::decideForFork



```php
Twig_TokenParser_For::decideForFork( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_For::decideForEnd



```php
Twig_TokenParser_For::decideForEnd( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_For::getTag



```php
Twig_TokenParser_For::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_From

Imports macros.

<pre>
  {% from 'forms.html' import forms %}
</pre>

* Full name: \Twig_TokenParser_From
* Parent class: \Twig_TokenParser


### Twig_TokenParser_From::parse



```php
Twig_TokenParser_From::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_From::getTag



```php
Twig_TokenParser_From::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_If

Tests a condition.

<pre>
{% if users %}
 <ul>
   {% for user in users %}
     <li>{{ user.username|e }}</li>
   {% endfor %}
 </ul>
{% endif %}
</pre>

* Full name: \Twig_TokenParser_If
* Parent class: \Twig_TokenParser


### Twig_TokenParser_If::parse



```php
Twig_TokenParser_If::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_If::decideIfFork



```php
Twig_TokenParser_If::decideIfFork( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_If::decideIfEnd



```php
Twig_TokenParser_If::decideIfEnd( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_If::getTag



```php
Twig_TokenParser_If::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_Import

Imports macros.

<pre>
  {% import 'forms.html' as forms %}
</pre>

* Full name: \Twig_TokenParser_Import
* Parent class: \Twig_TokenParser


### Twig_TokenParser_Import::parse



```php
Twig_TokenParser_Import::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Import::getTag



```php
Twig_TokenParser_Import::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_Include

Includes a template.

<pre>
  {% include 'header.html' %}
    Body
  {% include 'footer.html' %}
</pre>

* Full name: \Twig_TokenParser_Include
* Parent class: \Twig_TokenParser


### Twig_TokenParser_Include::parse



```php
Twig_TokenParser_Include::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Include::getTag



```php
Twig_TokenParser_Include::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_Macro

Defines a macro.

<pre>
{% macro input(name, value, type, size) %}
   <input type="{{ type|default('text') }}" name="{{ name }}" value="{{ value|e }}" size="{{ size|default(20) }}" />
{% endmacro %}
</pre>

* Full name: \Twig_TokenParser_Macro
* Parent class: \Twig_TokenParser


### Twig_TokenParser_Macro::parse



```php
Twig_TokenParser_Macro::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Macro::decideBlockEnd



```php
Twig_TokenParser_Macro::decideBlockEnd( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Macro::getTag



```php
Twig_TokenParser_Macro::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_Sandbox

Marks a section of a template as untrusted code that must be evaluated in the sandbox mode.

<pre>
{% sandbox %}
    {% include 'user.html' %}
{% endsandbox %}
</pre>

* Full name: \Twig_TokenParser_Sandbox
* Parent class: \Twig_TokenParser

**See Also:**

* http://www.twig-project.org/doc/api.html#sandbox-extension - for details

### Twig_TokenParser_Sandbox::parse



```php
Twig_TokenParser_Sandbox::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Sandbox::decideBlockEnd



```php
Twig_TokenParser_Sandbox::decideBlockEnd( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Sandbox::getTag



```php
Twig_TokenParser_Sandbox::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_Set

Defines a variable.

<pre>
 {% set foo = 'foo' %}

 {% set foo = [1, 2] %}

 {% set foo = {'foo': 'bar'} %}

 {% set foo = 'foo' ~ 'bar' %}

 {% set foo, bar = 'foo', 'bar' %}

 {% set foo %}Some content{% endset %}
</pre>

* Full name: \Twig_TokenParser_Set
* Parent class: \Twig_TokenParser


### Twig_TokenParser_Set::parse



```php
Twig_TokenParser_Set::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Set::decideBlockEnd



```php
Twig_TokenParser_Set::decideBlockEnd( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Set::getTag



```php
Twig_TokenParser_Set::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_Spaceless

Remove whitespaces between HTML tags.

<pre>
{% spaceless %}
     <div>
         <strong>foo</strong>
     </div>
{% endspaceless %}

{# output will be <div><strong>foo</strong></div> #}
</pre>

* Full name: \Twig_TokenParser_Spaceless
* Parent class: \Twig_TokenParser


### Twig_TokenParser_Spaceless::parse



```php
Twig_TokenParser_Spaceless::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Spaceless::decideSpacelessEnd



```php
Twig_TokenParser_Spaceless::decideSpacelessEnd( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Spaceless::getTag



```php
Twig_TokenParser_Spaceless::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_Use

Imports blocks defined in another template into the current template.

<pre>
{% extends "base.html" %}

{% use "blocks.html" %}

{% block title %}{% endblock %}
{% block content %}{% endblock %}
</pre>

* Full name: \Twig_TokenParser_Use
* Parent class: \Twig_TokenParser

**See Also:**

* http://www.twig-project.org/doc/templates.html#horizontal-reuse - for details.

### Twig_TokenParser_Use::parse



```php
Twig_TokenParser_Use::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_Use::getTag



```php
Twig_TokenParser_Use::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenParser_With

Creates a nested scope.



* Full name: \Twig_TokenParser_With
* Parent class: \Twig_TokenParser


### Twig_TokenParser_With::parse



```php
Twig_TokenParser_With::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_With::decideWithEnd



```php
Twig_TokenParser_With::decideWithEnd( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### Twig_TokenParser_With::getTag



```php
Twig_TokenParser_With::getTag(  ): mixed
```





**Return Value:**





---
## Twig_TokenStream

Represents a token stream.



* Full name: \Twig_TokenStream


### Twig_TokenStream::__construct



```php
Twig_TokenStream::__construct( array tokens, \Twig_Source source = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `tokens` | **array** | An array of tokens |
| `source` | **\Twig_Source** |  |


**Return Value:**





---
### Twig_TokenStream::__toString



```php
Twig_TokenStream::__toString(  ): mixed
```





**Return Value:**





---
### Twig_TokenStream::injectTokens



```php
Twig_TokenStream::injectTokens( array tokens ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `tokens` | **array** |  |


**Return Value:**





---
### Twig_TokenStream::next

Sets the pointer to the next token and returns the old one.

```php
Twig_TokenStream::next(  ): \Twig_Token
```





**Return Value:**





---
### Twig_TokenStream::nextIf

Tests a token, sets the pointer to the next one and returns it or throws a syntax error.

```php
Twig_TokenStream::nextIf( mixed primary, mixed secondary = null ): \Twig_Token|null
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `primary` | **mixed** |  |
| `secondary` | **mixed** |  |


**Return Value:**

The next token if the condition is true, null otherwise



---
### Twig_TokenStream::expect

Tests a token and returns it or throws a syntax error.

```php
Twig_TokenStream::expect( mixed type, mixed value = null, mixed message = null ): \Twig_Token
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `type` | **mixed** |  |
| `value` | **mixed** |  |
| `message` | **mixed** |  |


**Return Value:**





---
### Twig_TokenStream::look

Looks at the next token.

```php
Twig_TokenStream::look( int number = 1 ): \Twig_Token
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `number` | **int** |  |


**Return Value:**





---
### Twig_TokenStream::test

Tests the current token.

```php
Twig_TokenStream::test( mixed primary, mixed secondary = null ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `primary` | **mixed** |  |
| `secondary` | **mixed** |  |


**Return Value:**





---
### Twig_TokenStream::isEOF

Checks if end of stream was reached.

```php
Twig_TokenStream::isEOF(  ): bool
```





**Return Value:**





---
### Twig_TokenStream::getCurrent



```php
Twig_TokenStream::getCurrent(  ): \Twig_Token
```





**Return Value:**





---
## Twig_Util_DeprecationCollector





* Full name: \Twig_Util_DeprecationCollector


### Twig_Util_DeprecationCollector::__construct



```php
Twig_Util_DeprecationCollector::__construct( \Twig_Environment twig ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `twig` | **\Twig_Environment** |  |


**Return Value:**





---
### Twig_Util_DeprecationCollector::collectDir

Returns deprecations for templates contained in a directory.

```php
Twig_Util_DeprecationCollector::collectDir( string dir, string ext = '.twig' ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `dir` | **string** | A directory where templates are stored |
| `ext` | **string** | Limit the loaded templates by extension |


**Return Value:**

An array of deprecations



---
### Twig_Util_DeprecationCollector::collect

Returns deprecations for passed templates.

```php
Twig_Util_DeprecationCollector::collect( \Iterator iterator ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `iterator` | **\Iterator** | An iterator of templates (where keys are template names and values the contents of the template) |


**Return Value:**

An array of deprecations



---
## Twig_Util_TemplateDirIterator





* Full name: \Twig_Util_TemplateDirIterator
* Parent class: 


### Twig_Util_TemplateDirIterator::current



```php
Twig_Util_TemplateDirIterator::current(  ): mixed
```





**Return Value:**





---
### Twig_Util_TemplateDirIterator::key



```php
Twig_Util_TemplateDirIterator::key(  ): mixed
```





**Return Value:**





---
## TwigTestExtension





* Full name: \TwigTestExtension
* Parent class: \Twig_Extension


### TwigTestExtension::getTokenParsers

Returns the token parser instances to add to the existing list.

```php
TwigTestExtension::getTokenParsers(  ): \Twig_TokenParserInterface[]
```





**Return Value:**





---
### TwigTestExtension::getFilters

Returns a list of filters to add to the existing list.

```php
TwigTestExtension::getFilters(  ): \Twig_SimpleFilter[]
```





**Return Value:**





---
### TwigTestExtension::getFunctions

Returns a list of functions to add to the existing list.

```php
TwigTestExtension::getFunctions(  ): \Twig_SimpleFunction[]
```





**Return Value:**





---
### TwigTestExtension::getTests

Returns a list of tests to add to the existing list.

```php
TwigTestExtension::getTests(  ): \Twig_SimpleTest[]
```





**Return Value:**





---
### TwigTestExtension::§Filter



```php
TwigTestExtension::§Filter( mixed value ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `value` | **mixed** |  |


**Return Value:**





---
### TwigTestExtension::§Function



```php
TwigTestExtension::§Function( mixed value ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `value` | **mixed** |  |


**Return Value:**





---
### TwigTestExtension::escape_and_nl2br

nl2br which also escapes, for testing escaper filters.

```php
TwigTestExtension::escape_and_nl2br( mixed env, mixed value, mixed sep = '<br />' ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `env` | **mixed** |  |
| `value` | **mixed** |  |
| `sep` | **mixed** |  |


**Return Value:**





---
### TwigTestExtension::nl2br

nl2br only, for testing filters with pre_escape.

```php
TwigTestExtension::nl2br( mixed value, mixed sep = '<br />' ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `value` | **mixed** |  |
| `sep` | **mixed** |  |


**Return Value:**





---
### TwigTestExtension::dynamic_path



```php
TwigTestExtension::dynamic_path( mixed element, mixed item ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `element` | **mixed** |  |
| `item` | **mixed** |  |


**Return Value:**





---
### TwigTestExtension::dynamic_foo



```php
TwigTestExtension::dynamic_foo( mixed foo, mixed bar, mixed item ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `foo` | **mixed** |  |
| `bar` | **mixed** |  |
| `item` | **mixed** |  |


**Return Value:**





---
### TwigTestExtension::escape_something



```php
TwigTestExtension::escape_something( mixed value ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `value` | **mixed** |  |


**Return Value:**





---
### TwigTestExtension::preserves_safety



```php
TwigTestExtension::preserves_safety( mixed value ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `value` | **mixed** |  |


**Return Value:**





---
### TwigTestExtension::staticCall



```php
TwigTestExtension::staticCall( mixed value ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `value` | **mixed** |  |


**Return Value:**





---
### TwigTestExtension::br



```php
TwigTestExtension::br(  ): mixed
```





**Return Value:**





---
### TwigTestExtension::is_multi_word



```php
TwigTestExtension::is_multi_word( mixed value ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `value` | **mixed** |  |


**Return Value:**





---
### TwigTestExtension::__call



```php
TwigTestExtension::__call( mixed method, mixed arguments ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `method` | **mixed** |  |
| `arguments` | **mixed** |  |


**Return Value:**





---
### TwigTestExtension::__callStatic



```php
TwigTestExtension::__callStatic( mixed method, mixed arguments ): mixed
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `method` | **mixed** |  |
| `arguments` | **mixed** |  |


**Return Value:**





---
## TwigTestFoo





* Full name: \TwigTestFoo
* This class implements: \Iterator


### TwigTestFoo::bar



```php
TwigTestFoo::bar( mixed param1 = null, mixed param2 = null ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `param1` | **mixed** |  |
| `param2` | **mixed** |  |


**Return Value:**





---
### TwigTestFoo::getFoo



```php
TwigTestFoo::getFoo(  ): mixed
```





**Return Value:**





---
### TwigTestFoo::getSelf



```php
TwigTestFoo::getSelf(  ): mixed
```





**Return Value:**





---
### TwigTestFoo::is



```php
TwigTestFoo::is(  ): mixed
```





**Return Value:**





---
### TwigTestFoo::in



```php
TwigTestFoo::in(  ): mixed
```





**Return Value:**





---
### TwigTestFoo::not



```php
TwigTestFoo::not(  ): mixed
```





**Return Value:**





---
### TwigTestFoo::strToLower



```php
TwigTestFoo::strToLower( mixed value ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `value` | **mixed** |  |


**Return Value:**





---
### TwigTestFoo::rewind



```php
TwigTestFoo::rewind(  ): mixed
```





**Return Value:**





---
### TwigTestFoo::current



```php
TwigTestFoo::current(  ): mixed
```





**Return Value:**





---
### TwigTestFoo::key



```php
TwigTestFoo::key(  ): mixed
```





**Return Value:**





---
### TwigTestFoo::next



```php
TwigTestFoo::next(  ): mixed
```





**Return Value:**





---
### TwigTestFoo::valid



```php
TwigTestFoo::valid(  ): mixed
```





**Return Value:**





---
## TwigTestTokenParser_§

Base class for all token parsers.



* Full name: \TwigTestTokenParser_§
* Parent class: \Twig_TokenParser


### TwigTestTokenParser_§::parse



```php
TwigTestTokenParser_§::parse( \Twig_Token token ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `token` | **\Twig_Token** |  |


**Return Value:**





---
### TwigTestTokenParser_§::getTag



```php
TwigTestTokenParser_§::getTag(  ): mixed
```





**Return Value:**





---
## twitterPluginAction





* Full name: \twitterPluginAction
* Parent class: \yxorP\http\wrapper


### twitterPluginAction::onCompleted



```php
twitterPluginAction::onCompleted(  ): void
```





**Return Value:**





---
## UnableToCheckDirectoryExistence





* Full name: \League\Flysystem\UnableToCheckDirectoryExistence
* Parent class: \League\Flysystem\UnableToCheckExistence


### UnableToCheckDirectoryExistence::operation



```php
UnableToCheckDirectoryExistence::operation(  ): string
```





**Return Value:**





---
## UnableToCheckExistence





* Full name: \League\Flysystem\UnableToCheckExistence
* Parent class: 
* This class implements: \League\Flysystem\FilesystemOperationFailed


### UnableToCheckExistence::forLocation



```php
UnableToCheckExistence::forLocation( string path, \Throwable exception = null ): static
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `exception` | **\Throwable** |  |


**Return Value:**





---
### UnableToCheckExistence::operation



```php
UnableToCheckExistence::operation(  ): string
```





**Return Value:**





---
## UnableToCheckFileExistence





* Full name: \League\Flysystem\UnableToCheckFileExistence
* Parent class: \League\Flysystem\UnableToCheckExistence


### UnableToCheckFileExistence::operation



```php
UnableToCheckFileExistence::operation(  ): string
```





**Return Value:**





---
## UnableToCopyFile





* Full name: \League\Flysystem\UnableToCopyFile
* Parent class: 
* This class implements: \League\Flysystem\FilesystemOperationFailed


### UnableToCopyFile::source



```php
UnableToCopyFile::source(  ): string
```





**Return Value:**





---
### UnableToCopyFile::destination



```php
UnableToCopyFile::destination(  ): string
```





**Return Value:**





---
### UnableToCopyFile::fromLocationTo



```php
UnableToCopyFile::fromLocationTo( string sourcePath, string destinationPath, \Throwable previous = null ): \League\Flysystem\UnableToCopyFile
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `sourcePath` | **string** |  |
| `destinationPath` | **string** |  |
| `previous` | **\Throwable** |  |


**Return Value:**





---
### UnableToCopyFile::operation



```php
UnableToCopyFile::operation(  ): string
```





**Return Value:**





---
## UnableToCreateDirectory





* Full name: \League\Flysystem\UnableToCreateDirectory
* Parent class: 
* This class implements: \League\Flysystem\FilesystemOperationFailed


### UnableToCreateDirectory::atLocation



```php
UnableToCreateDirectory::atLocation( string dirname, string errorMessage = '' ): \League\Flysystem\UnableToCreateDirectory
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `dirname` | **string** |  |
| `errorMessage` | **string** |  |


**Return Value:**





---
### UnableToCreateDirectory::dueToFailure



```php
UnableToCreateDirectory::dueToFailure( string dirname, \Throwable previous ): \League\Flysystem\UnableToCreateDirectory
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `dirname` | **string** |  |
| `previous` | **\Throwable** |  |


**Return Value:**





---
### UnableToCreateDirectory::operation



```php
UnableToCreateDirectory::operation(  ): string
```





**Return Value:**





---
### UnableToCreateDirectory::location



```php
UnableToCreateDirectory::location(  ): string
```





**Return Value:**





---
## UnableToDeleteDirectory





* Full name: \League\Flysystem\UnableToDeleteDirectory
* Parent class: 
* This class implements: \League\Flysystem\FilesystemOperationFailed


### UnableToDeleteDirectory::atLocation



```php
UnableToDeleteDirectory::atLocation( string location, string reason = '', \Throwable previous = null ): \League\Flysystem\UnableToDeleteDirectory
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |


**Return Value:**





---
### UnableToDeleteDirectory::operation



```php
UnableToDeleteDirectory::operation(  ): string
```





**Return Value:**





---
### UnableToDeleteDirectory::reason



```php
UnableToDeleteDirectory::reason(  ): string
```





**Return Value:**





---
### UnableToDeleteDirectory::location



```php
UnableToDeleteDirectory::location(  ): string
```





**Return Value:**





---
## UnableToDeleteFile





* Full name: \League\Flysystem\UnableToDeleteFile
* Parent class: 
* This class implements: \League\Flysystem\FilesystemOperationFailed


### UnableToDeleteFile::atLocation



```php
UnableToDeleteFile::atLocation( string location, string reason = '', \Throwable previous = null ): \League\Flysystem\UnableToDeleteFile
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |


**Return Value:**





---
### UnableToDeleteFile::operation



```php
UnableToDeleteFile::operation(  ): string
```





**Return Value:**





---
### UnableToDeleteFile::reason



```php
UnableToDeleteFile::reason(  ): string
```





**Return Value:**





---
### UnableToDeleteFile::location



```php
UnableToDeleteFile::location(  ): string
```





**Return Value:**





---
## UnableToMountFilesystem





* Full name: \League\Flysystem\UnableToMountFilesystem
* Parent class: 
* This class implements: \League\Flysystem\FilesystemException


### UnableToMountFilesystem::becauseTheKeyIsNotValid



```php
UnableToMountFilesystem::becauseTheKeyIsNotValid( mixed key ): \League\Flysystem\UnableToMountFilesystem
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |


**Return Value:**





---
### UnableToMountFilesystem::becauseTheFilesystemWasNotValid



```php
UnableToMountFilesystem::becauseTheFilesystemWasNotValid( mixed filesystem ): \League\Flysystem\UnableToMountFilesystem
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filesystem` | **mixed** |  |


**Return Value:**





---
## UnableToMoveFile





* Full name: \League\Flysystem\UnableToMoveFile
* Parent class: 
* This class implements: \League\Flysystem\FilesystemOperationFailed


### UnableToMoveFile::source



```php
UnableToMoveFile::source(  ): string
```





**Return Value:**





---
### UnableToMoveFile::destination



```php
UnableToMoveFile::destination(  ): string
```





**Return Value:**





---
### UnableToMoveFile::fromLocationTo



```php
UnableToMoveFile::fromLocationTo( string sourcePath, string destinationPath, \Throwable previous = null ): \League\Flysystem\UnableToMoveFile
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `sourcePath` | **string** |  |
| `destinationPath` | **string** |  |
| `previous` | **\Throwable** |  |


**Return Value:**





---
### UnableToMoveFile::operation



```php
UnableToMoveFile::operation(  ): string
```





**Return Value:**





---
## UnableToReadFile





* Full name: \League\Flysystem\UnableToReadFile
* Parent class: 
* This class implements: \League\Flysystem\FilesystemOperationFailed


### UnableToReadFile::fromLocation



```php
UnableToReadFile::fromLocation( string location, string reason = '', \Throwable previous = null ): \League\Flysystem\UnableToReadFile
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |


**Return Value:**





---
### UnableToReadFile::operation



```php
UnableToReadFile::operation(  ): string
```





**Return Value:**





---
### UnableToReadFile::reason



```php
UnableToReadFile::reason(  ): string
```





**Return Value:**





---
### UnableToReadFile::location



```php
UnableToReadFile::location(  ): string
```





**Return Value:**





---
## UnableToResolveFilesystemMount





* Full name: \League\Flysystem\UnableToResolveFilesystemMount
* Parent class: 
* This class implements: \League\Flysystem\FilesystemException


### UnableToResolveFilesystemMount::becauseTheSeparatorIsMissing



```php
UnableToResolveFilesystemMount::becauseTheSeparatorIsMissing( string path ): \League\Flysystem\UnableToResolveFilesystemMount
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
### UnableToResolveFilesystemMount::becauseTheMountWasNotRegistered



```php
UnableToResolveFilesystemMount::becauseTheMountWasNotRegistered( string mountIdentifier ): \League\Flysystem\UnableToResolveFilesystemMount
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `mountIdentifier` | **string** |  |


**Return Value:**





---
## UnableToRetrieveMetadata





* Full name: \League\Flysystem\UnableToRetrieveMetadata
* Parent class: 
* This class implements: \League\Flysystem\FilesystemOperationFailed


### UnableToRetrieveMetadata::lastModified



```php
UnableToRetrieveMetadata::lastModified( string location, string reason = '', \Throwable previous = null ): self
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |


**Return Value:**





---
### UnableToRetrieveMetadata::visibility



```php
UnableToRetrieveMetadata::visibility( string location, string reason = '', \Throwable previous = null ): self
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |


**Return Value:**





---
### UnableToRetrieveMetadata::fileSize



```php
UnableToRetrieveMetadata::fileSize( string location, string reason = '', \Throwable previous = null ): self
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |


**Return Value:**





---
### UnableToRetrieveMetadata::mimeType



```php
UnableToRetrieveMetadata::mimeType( string location, string reason = '', \Throwable previous = null ): self
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |


**Return Value:**





---
### UnableToRetrieveMetadata::create



```php
UnableToRetrieveMetadata::create( string location, string type, string reason = '', \Throwable previous = null ): self
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `type` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |


**Return Value:**





---
### UnableToRetrieveMetadata::reason



```php
UnableToRetrieveMetadata::reason(  ): string
```





**Return Value:**





---
### UnableToRetrieveMetadata::location



```php
UnableToRetrieveMetadata::location(  ): string
```





**Return Value:**





---
### UnableToRetrieveMetadata::metadataType



```php
UnableToRetrieveMetadata::metadataType(  ): string
```





**Return Value:**





---
### UnableToRetrieveMetadata::operation



```php
UnableToRetrieveMetadata::operation(  ): string
```





**Return Value:**





---
## UnableToSetVisibility





* Full name: \League\Flysystem\UnableToSetVisibility
* Parent class: 
* This class implements: \League\Flysystem\FilesystemOperationFailed


### UnableToSetVisibility::reason



```php
UnableToSetVisibility::reason(  ): string
```





**Return Value:**





---
### UnableToSetVisibility::atLocation



```php
UnableToSetVisibility::atLocation( string filename, string extraMessage = '', \Throwable previous = null ): self
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filename` | **string** |  |
| `extraMessage` | **string** |  |
| `previous` | **\Throwable** |  |


**Return Value:**





---
### UnableToSetVisibility::operation



```php
UnableToSetVisibility::operation(  ): string
```





**Return Value:**





---
### UnableToSetVisibility::location



```php
UnableToSetVisibility::location(  ): string
```





**Return Value:**





---
## UnableToWriteFile





* Full name: \League\Flysystem\UnableToWriteFile
* Parent class: 
* This class implements: \League\Flysystem\FilesystemOperationFailed


### UnableToWriteFile::atLocation



```php
UnableToWriteFile::atLocation( string location, string reason = '', \Throwable previous = null ): \League\Flysystem\UnableToWriteFile
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |


**Return Value:**





---
### UnableToWriteFile::operation



```php
UnableToWriteFile::operation(  ): string
```





**Return Value:**





---
### UnableToWriteFile::reason



```php
UnableToWriteFile::reason(  ): string
```





**Return Value:**





---
### UnableToWriteFile::location



```php
UnableToWriteFile::location(  ): string
```





**Return Value:**





---
## UnreadableFileEncountered





* Full name: \League\Flysystem\UnreadableFileEncountered
* Parent class: 
* This class implements: \League\Flysystem\FilesystemException


### UnreadableFileEncountered::location



```php
UnreadableFileEncountered::location(  ): string
```





**Return Value:**





---
### UnreadableFileEncountered::atLocation



```php
UnreadableFileEncountered::atLocation( string location ): \League\Flysystem\UnreadableFileEncountered
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |


**Return Value:**





---
## Visibility





* Full name: \League\Flysystem\Visibility


## WhitespacePathNormalizer





* Full name: \League\Flysystem\WhitespacePathNormalizer
* This class implements: \League\Flysystem\PathNormalizer


### WhitespacePathNormalizer::normalizePath



```php
WhitespacePathNormalizer::normalizePath( string path ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |


**Return Value:**





---
## whitespacesRemover





* Full name: \yxorP\minify\whitespacesRemover
* This class implements: \yxorP\minify\minfyInterface


### whitespacesRemover::process



```php
whitespacesRemover::process( string buffer ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `buffer` | **string** |  |


**Return Value:**





---
## youtubePluginAction





* Full name: \youtubePluginAction
* Parent class: \yxorP\http\wrapper


### youtubePluginAction::onBeforeRequest



```php
youtubePluginAction::onBeforeRequest(  ): void
```





**Return Value:**





---
### youtubePluginAction::onCompleted



```php
youtubePluginAction::onCompleted(  ): void
```





**Return Value:**





---
