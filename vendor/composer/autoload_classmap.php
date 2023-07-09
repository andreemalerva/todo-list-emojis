<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'CodeIgniter\\API\\ResponseTrait' => $baseDir . '/system/API/ResponseTrait.php',
    'CodeIgniter\\Autoloader\\Autoloader' => $baseDir . '/system/Autoloader/Autoloader.php',
    'CodeIgniter\\Autoloader\\FileLocator' => $baseDir . '/system/Autoloader/FileLocator.php',
    'CodeIgniter\\BaseModel' => $baseDir . '/system/BaseModel.php',
    'CodeIgniter\\CLI\\BaseCommand' => $baseDir . '/system/CLI/BaseCommand.php',
    'CodeIgniter\\CLI\\CLI' => $baseDir . '/system/CLI/CLI.php',
    'CodeIgniter\\CLI\\Commands' => $baseDir . '/system/CLI/Commands.php',
    'CodeIgniter\\CLI\\Console' => $baseDir . '/system/CLI/Console.php',
    'CodeIgniter\\CLI\\Exceptions\\CLIException' => $baseDir . '/system/CLI/Exceptions/CLIException.php',
    'CodeIgniter\\CLI\\GeneratorTrait' => $baseDir . '/system/CLI/GeneratorTrait.php',
    'CodeIgniter\\Cache\\CacheFactory' => $baseDir . '/system/Cache/CacheFactory.php',
    'CodeIgniter\\Cache\\CacheInterface' => $baseDir . '/system/Cache/CacheInterface.php',
    'CodeIgniter\\Cache\\Exceptions\\CacheException' => $baseDir . '/system/Cache/Exceptions/CacheException.php',
    'CodeIgniter\\Cache\\Exceptions\\ExceptionInterface' => $baseDir . '/system/Cache/Exceptions/ExceptionInterface.php',
    'CodeIgniter\\Cache\\Handlers\\BaseHandler' => $baseDir . '/system/Cache/Handlers/BaseHandler.php',
    'CodeIgniter\\Cache\\Handlers\\DummyHandler' => $baseDir . '/system/Cache/Handlers/DummyHandler.php',
    'CodeIgniter\\Cache\\Handlers\\FileHandler' => $baseDir . '/system/Cache/Handlers/FileHandler.php',
    'CodeIgniter\\Cache\\Handlers\\MemcachedHandler' => $baseDir . '/system/Cache/Handlers/MemcachedHandler.php',
    'CodeIgniter\\Cache\\Handlers\\PredisHandler' => $baseDir . '/system/Cache/Handlers/PredisHandler.php',
    'CodeIgniter\\Cache\\Handlers\\RedisHandler' => $baseDir . '/system/Cache/Handlers/RedisHandler.php',
    'CodeIgniter\\Cache\\Handlers\\WincacheHandler' => $baseDir . '/system/Cache/Handlers/WincacheHandler.php',
    'CodeIgniter\\CodeIgniter' => $baseDir . '/system/CodeIgniter.php',
    'CodeIgniter\\Commands\\Cache\\ClearCache' => $baseDir . '/system/Commands/Cache/ClearCache.php',
    'CodeIgniter\\Commands\\Cache\\InfoCache' => $baseDir . '/system/Commands/Cache/InfoCache.php',
    'CodeIgniter\\Commands\\Database\\CreateDatabase' => $baseDir . '/system/Commands/Database/CreateDatabase.php',
    'CodeIgniter\\Commands\\Database\\Migrate' => $baseDir . '/system/Commands/Database/Migrate.php',
    'CodeIgniter\\Commands\\Database\\MigrateRefresh' => $baseDir . '/system/Commands/Database/MigrateRefresh.php',
    'CodeIgniter\\Commands\\Database\\MigrateRollback' => $baseDir . '/system/Commands/Database/MigrateRollback.php',
    'CodeIgniter\\Commands\\Database\\MigrateStatus' => $baseDir . '/system/Commands/Database/MigrateStatus.php',
    'CodeIgniter\\Commands\\Database\\Seed' => $baseDir . '/system/Commands/Database/Seed.php',
    'CodeIgniter\\Commands\\Database\\ShowTableInfo' => $baseDir . '/system/Commands/Database/ShowTableInfo.php',
    'CodeIgniter\\Commands\\Encryption\\GenerateKey' => $baseDir . '/system/Commands/Encryption/GenerateKey.php',
    'CodeIgniter\\Commands\\Generators\\CellGenerator' => $baseDir . '/system/Commands/Generators/CellGenerator.php',
    'CodeIgniter\\Commands\\Generators\\CommandGenerator' => $baseDir . '/system/Commands/Generators/CommandGenerator.php',
    'CodeIgniter\\Commands\\Generators\\ConfigGenerator' => $baseDir . '/system/Commands/Generators/ConfigGenerator.php',
    'CodeIgniter\\Commands\\Generators\\ControllerGenerator' => $baseDir . '/system/Commands/Generators/ControllerGenerator.php',
    'CodeIgniter\\Commands\\Generators\\EntityGenerator' => $baseDir . '/system/Commands/Generators/EntityGenerator.php',
    'CodeIgniter\\Commands\\Generators\\FilterGenerator' => $baseDir . '/system/Commands/Generators/FilterGenerator.php',
    'CodeIgniter\\Commands\\Generators\\MigrateCreate' => $baseDir . '/system/Commands/Generators/MigrateCreate.php',
    'CodeIgniter\\Commands\\Generators\\MigrationGenerator' => $baseDir . '/system/Commands/Generators/MigrationGenerator.php',
    'CodeIgniter\\Commands\\Generators\\ModelGenerator' => $baseDir . '/system/Commands/Generators/ModelGenerator.php',
    'CodeIgniter\\Commands\\Generators\\ScaffoldGenerator' => $baseDir . '/system/Commands/Generators/ScaffoldGenerator.php',
    'CodeIgniter\\Commands\\Generators\\SeederGenerator' => $baseDir . '/system/Commands/Generators/SeederGenerator.php',
    'CodeIgniter\\Commands\\Generators\\SessionMigrationGenerator' => $baseDir . '/system/Commands/Generators/SessionMigrationGenerator.php',
    'CodeIgniter\\Commands\\Generators\\ValidationGenerator' => $baseDir . '/system/Commands/Generators/ValidationGenerator.php',
    'CodeIgniter\\Commands\\Help' => $baseDir . '/system/Commands/Help.php',
    'CodeIgniter\\Commands\\Housekeeping\\ClearDebugbar' => $baseDir . '/system/Commands/Housekeeping/ClearDebugbar.php',
    'CodeIgniter\\Commands\\Housekeeping\\ClearLogs' => $baseDir . '/system/Commands/Housekeeping/ClearLogs.php',
    'CodeIgniter\\Commands\\ListCommands' => $baseDir . '/system/Commands/ListCommands.php',
    'CodeIgniter\\Commands\\Server\\Serve' => $baseDir . '/system/Commands/Server/Serve.php',
    'CodeIgniter\\Commands\\Utilities\\Environment' => $baseDir . '/system/Commands/Utilities/Environment.php',
    'CodeIgniter\\Commands\\Utilities\\FilterCheck' => $baseDir . '/system/Commands/Utilities/FilterCheck.php',
    'CodeIgniter\\Commands\\Utilities\\Namespaces' => $baseDir . '/system/Commands/Utilities/Namespaces.php',
    'CodeIgniter\\Commands\\Utilities\\Publish' => $baseDir . '/system/Commands/Utilities/Publish.php',
    'CodeIgniter\\Commands\\Utilities\\Routes' => $baseDir . '/system/Commands/Utilities/Routes.php',
    'CodeIgniter\\Commands\\Utilities\\Routes\\AutoRouteCollector' => $baseDir . '/system/Commands/Utilities/Routes/AutoRouteCollector.php',
    'CodeIgniter\\Commands\\Utilities\\Routes\\AutoRouterImproved\\AutoRouteCollector' => $baseDir . '/system/Commands/Utilities/Routes/AutoRouterImproved/AutoRouteCollector.php',
    'CodeIgniter\\Commands\\Utilities\\Routes\\AutoRouterImproved\\ControllerMethodReader' => $baseDir . '/system/Commands/Utilities/Routes/AutoRouterImproved/ControllerMethodReader.php',
    'CodeIgniter\\Commands\\Utilities\\Routes\\ControllerFinder' => $baseDir . '/system/Commands/Utilities/Routes/ControllerFinder.php',
    'CodeIgniter\\Commands\\Utilities\\Routes\\ControllerMethodReader' => $baseDir . '/system/Commands/Utilities/Routes/ControllerMethodReader.php',
    'CodeIgniter\\Commands\\Utilities\\Routes\\FilterCollector' => $baseDir . '/system/Commands/Utilities/Routes/FilterCollector.php',
    'CodeIgniter\\Commands\\Utilities\\Routes\\FilterFinder' => $baseDir . '/system/Commands/Utilities/Routes/FilterFinder.php',
    'CodeIgniter\\Commands\\Utilities\\Routes\\SampleURIGenerator' => $baseDir . '/system/Commands/Utilities/Routes/SampleURIGenerator.php',
    'CodeIgniter\\ComposerScripts' => $baseDir . '/system/ComposerScripts.php',
    'CodeIgniter\\Config\\AutoloadConfig' => $baseDir . '/system/Config/AutoloadConfig.php',
    'CodeIgniter\\Config\\BaseConfig' => $baseDir . '/system/Config/BaseConfig.php',
    'CodeIgniter\\Config\\BaseService' => $baseDir . '/system/Config/BaseService.php',
    'CodeIgniter\\Config\\Config' => $baseDir . '/system/Config/Config.php',
    'CodeIgniter\\Config\\DotEnv' => $baseDir . '/system/Config/DotEnv.php',
    'CodeIgniter\\Config\\Factories' => $baseDir . '/system/Config/Factories.php',
    'CodeIgniter\\Config\\Factory' => $baseDir . '/system/Config/Factory.php',
    'CodeIgniter\\Config\\ForeignCharacters' => $baseDir . '/system/Config/ForeignCharacters.php',
    'CodeIgniter\\Config\\Publisher' => $baseDir . '/system/Config/Publisher.php',
    'CodeIgniter\\Config\\Services' => $baseDir . '/system/Config/Services.php',
    'CodeIgniter\\Config\\View' => $baseDir . '/system/Config/View.php',
    'CodeIgniter\\Controller' => $baseDir . '/system/Controller.php',
    'CodeIgniter\\Cookie\\CloneableCookieInterface' => $baseDir . '/system/Cookie/CloneableCookieInterface.php',
    'CodeIgniter\\Cookie\\Cookie' => $baseDir . '/system/Cookie/Cookie.php',
    'CodeIgniter\\Cookie\\CookieInterface' => $baseDir . '/system/Cookie/CookieInterface.php',
    'CodeIgniter\\Cookie\\CookieStore' => $baseDir . '/system/Cookie/CookieStore.php',
    'CodeIgniter\\Cookie\\Exceptions\\CookieException' => $baseDir . '/system/Cookie/Exceptions/CookieException.php',
    'CodeIgniter\\Database\\BaseBuilder' => $baseDir . '/system/Database/BaseBuilder.php',
    'CodeIgniter\\Database\\BaseConnection' => $baseDir . '/system/Database/BaseConnection.php',
    'CodeIgniter\\Database\\BasePreparedQuery' => $baseDir . '/system/Database/BasePreparedQuery.php',
    'CodeIgniter\\Database\\BaseResult' => $baseDir . '/system/Database/BaseResult.php',
    'CodeIgniter\\Database\\BaseUtils' => $baseDir . '/system/Database/BaseUtils.php',
    'CodeIgniter\\Database\\Config' => $baseDir . '/system/Database/Config.php',
    'CodeIgniter\\Database\\ConnectionInterface' => $baseDir . '/system/Database/ConnectionInterface.php',
    'CodeIgniter\\Database\\Database' => $baseDir . '/system/Database/Database.php',
    'CodeIgniter\\Database\\Exceptions\\DataException' => $baseDir . '/system/Database/Exceptions/DataException.php',
    'CodeIgniter\\Database\\Exceptions\\DatabaseException' => $baseDir . '/system/Database/Exceptions/DatabaseException.php',
    'CodeIgniter\\Database\\Exceptions\\ExceptionInterface' => $baseDir . '/system/Database/Exceptions/ExceptionInterface.php',
    'CodeIgniter\\Database\\Forge' => $baseDir . '/system/Database/Forge.php',
    'CodeIgniter\\Database\\Migration' => $baseDir . '/system/Database/Migration.php',
    'CodeIgniter\\Database\\MigrationRunner' => $baseDir . '/system/Database/MigrationRunner.php',
    'CodeIgniter\\Database\\ModelFactory' => $baseDir . '/system/Database/ModelFactory.php',
    'CodeIgniter\\Database\\MySQLi\\Builder' => $baseDir . '/system/Database/MySQLi/Builder.php',
    'CodeIgniter\\Database\\MySQLi\\Connection' => $baseDir . '/system/Database/MySQLi/Connection.php',
    'CodeIgniter\\Database\\MySQLi\\Forge' => $baseDir . '/system/Database/MySQLi/Forge.php',
    'CodeIgniter\\Database\\MySQLi\\PreparedQuery' => $baseDir . '/system/Database/MySQLi/PreparedQuery.php',
    'CodeIgniter\\Database\\MySQLi\\Result' => $baseDir . '/system/Database/MySQLi/Result.php',
    'CodeIgniter\\Database\\MySQLi\\Utils' => $baseDir . '/system/Database/MySQLi/Utils.php',
    'CodeIgniter\\Database\\OCI8\\Builder' => $baseDir . '/system/Database/OCI8/Builder.php',
    'CodeIgniter\\Database\\OCI8\\Connection' => $baseDir . '/system/Database/OCI8/Connection.php',
    'CodeIgniter\\Database\\OCI8\\Forge' => $baseDir . '/system/Database/OCI8/Forge.php',
    'CodeIgniter\\Database\\OCI8\\PreparedQuery' => $baseDir . '/system/Database/OCI8/PreparedQuery.php',
    'CodeIgniter\\Database\\OCI8\\Result' => $baseDir . '/system/Database/OCI8/Result.php',
    'CodeIgniter\\Database\\OCI8\\Utils' => $baseDir . '/system/Database/OCI8/Utils.php',
    'CodeIgniter\\Database\\Postgre\\Builder' => $baseDir . '/system/Database/Postgre/Builder.php',
    'CodeIgniter\\Database\\Postgre\\Connection' => $baseDir . '/system/Database/Postgre/Connection.php',
    'CodeIgniter\\Database\\Postgre\\Forge' => $baseDir . '/system/Database/Postgre/Forge.php',
    'CodeIgniter\\Database\\Postgre\\PreparedQuery' => $baseDir . '/system/Database/Postgre/PreparedQuery.php',
    'CodeIgniter\\Database\\Postgre\\Result' => $baseDir . '/system/Database/Postgre/Result.php',
    'CodeIgniter\\Database\\Postgre\\Utils' => $baseDir . '/system/Database/Postgre/Utils.php',
    'CodeIgniter\\Database\\PreparedQueryInterface' => $baseDir . '/system/Database/PreparedQueryInterface.php',
    'CodeIgniter\\Database\\Query' => $baseDir . '/system/Database/Query.php',
    'CodeIgniter\\Database\\QueryInterface' => $baseDir . '/system/Database/QueryInterface.php',
    'CodeIgniter\\Database\\RawSql' => $baseDir . '/system/Database/RawSql.php',
    'CodeIgniter\\Database\\ResultInterface' => $baseDir . '/system/Database/ResultInterface.php',
    'CodeIgniter\\Database\\SQLSRV\\Builder' => $baseDir . '/system/Database/SQLSRV/Builder.php',
    'CodeIgniter\\Database\\SQLSRV\\Connection' => $baseDir . '/system/Database/SQLSRV/Connection.php',
    'CodeIgniter\\Database\\SQLSRV\\Forge' => $baseDir . '/system/Database/SQLSRV/Forge.php',
    'CodeIgniter\\Database\\SQLSRV\\PreparedQuery' => $baseDir . '/system/Database/SQLSRV/PreparedQuery.php',
    'CodeIgniter\\Database\\SQLSRV\\Result' => $baseDir . '/system/Database/SQLSRV/Result.php',
    'CodeIgniter\\Database\\SQLSRV\\Utils' => $baseDir . '/system/Database/SQLSRV/Utils.php',
    'CodeIgniter\\Database\\SQLite3\\Builder' => $baseDir . '/system/Database/SQLite3/Builder.php',
    'CodeIgniter\\Database\\SQLite3\\Connection' => $baseDir . '/system/Database/SQLite3/Connection.php',
    'CodeIgniter\\Database\\SQLite3\\Forge' => $baseDir . '/system/Database/SQLite3/Forge.php',
    'CodeIgniter\\Database\\SQLite3\\PreparedQuery' => $baseDir . '/system/Database/SQLite3/PreparedQuery.php',
    'CodeIgniter\\Database\\SQLite3\\Result' => $baseDir . '/system/Database/SQLite3/Result.php',
    'CodeIgniter\\Database\\SQLite3\\Table' => $baseDir . '/system/Database/SQLite3/Table.php',
    'CodeIgniter\\Database\\SQLite3\\Utils' => $baseDir . '/system/Database/SQLite3/Utils.php',
    'CodeIgniter\\Database\\Seeder' => $baseDir . '/system/Database/Seeder.php',
    'CodeIgniter\\Debug\\Exceptions' => $baseDir . '/system/Debug/Exceptions.php',
    'CodeIgniter\\Debug\\Iterator' => $baseDir . '/system/Debug/Iterator.php',
    'CodeIgniter\\Debug\\Timer' => $baseDir . '/system/Debug/Timer.php',
    'CodeIgniter\\Debug\\Toolbar' => $baseDir . '/system/Debug/Toolbar.php',
    'CodeIgniter\\Debug\\Toolbar\\Collectors\\BaseCollector' => $baseDir . '/system/Debug/Toolbar/Collectors/BaseCollector.php',
    'CodeIgniter\\Debug\\Toolbar\\Collectors\\Config' => $baseDir . '/system/Debug/Toolbar/Collectors/Config.php',
    'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database' => $baseDir . '/system/Debug/Toolbar/Collectors/Database.php',
    'CodeIgniter\\Debug\\Toolbar\\Collectors\\Events' => $baseDir . '/system/Debug/Toolbar/Collectors/Events.php',
    'CodeIgniter\\Debug\\Toolbar\\Collectors\\Files' => $baseDir . '/system/Debug/Toolbar/Collectors/Files.php',
    'CodeIgniter\\Debug\\Toolbar\\Collectors\\History' => $baseDir . '/system/Debug/Toolbar/Collectors/History.php',
    'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs' => $baseDir . '/system/Debug/Toolbar/Collectors/Logs.php',
    'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes' => $baseDir . '/system/Debug/Toolbar/Collectors/Routes.php',
    'CodeIgniter\\Debug\\Toolbar\\Collectors\\Timers' => $baseDir . '/system/Debug/Toolbar/Collectors/Timers.php',
    'CodeIgniter\\Debug\\Toolbar\\Collectors\\Views' => $baseDir . '/system/Debug/Toolbar/Collectors/Views.php',
    'CodeIgniter\\Email\\Email' => $baseDir . '/system/Email/Email.php',
    'CodeIgniter\\Encryption\\EncrypterInterface' => $baseDir . '/system/Encryption/EncrypterInterface.php',
    'CodeIgniter\\Encryption\\Encryption' => $baseDir . '/system/Encryption/Encryption.php',
    'CodeIgniter\\Encryption\\Exceptions\\EncryptionException' => $baseDir . '/system/Encryption/Exceptions/EncryptionException.php',
    'CodeIgniter\\Encryption\\Handlers\\BaseHandler' => $baseDir . '/system/Encryption/Handlers/BaseHandler.php',
    'CodeIgniter\\Encryption\\Handlers\\OpenSSLHandler' => $baseDir . '/system/Encryption/Handlers/OpenSSLHandler.php',
    'CodeIgniter\\Encryption\\Handlers\\SodiumHandler' => $baseDir . '/system/Encryption/Handlers/SodiumHandler.php',
    'CodeIgniter\\Entity' => $baseDir . '/system/Entity.php',
    'CodeIgniter\\Entity\\Cast\\ArrayCast' => $baseDir . '/system/Entity/Cast/ArrayCast.php',
    'CodeIgniter\\Entity\\Cast\\BaseCast' => $baseDir . '/system/Entity/Cast/BaseCast.php',
    'CodeIgniter\\Entity\\Cast\\BooleanCast' => $baseDir . '/system/Entity/Cast/BooleanCast.php',
    'CodeIgniter\\Entity\\Cast\\CSVCast' => $baseDir . '/system/Entity/Cast/CSVCast.php',
    'CodeIgniter\\Entity\\Cast\\CastInterface' => $baseDir . '/system/Entity/Cast/CastInterface.php',
    'CodeIgniter\\Entity\\Cast\\DatetimeCast' => $baseDir . '/system/Entity/Cast/DatetimeCast.php',
    'CodeIgniter\\Entity\\Cast\\FloatCast' => $baseDir . '/system/Entity/Cast/FloatCast.php',
    'CodeIgniter\\Entity\\Cast\\IntBoolCast' => $baseDir . '/system/Entity/Cast/IntBoolCast.php',
    'CodeIgniter\\Entity\\Cast\\IntegerCast' => $baseDir . '/system/Entity/Cast/IntegerCast.php',
    'CodeIgniter\\Entity\\Cast\\JsonCast' => $baseDir . '/system/Entity/Cast/JsonCast.php',
    'CodeIgniter\\Entity\\Cast\\ObjectCast' => $baseDir . '/system/Entity/Cast/ObjectCast.php',
    'CodeIgniter\\Entity\\Cast\\StringCast' => $baseDir . '/system/Entity/Cast/StringCast.php',
    'CodeIgniter\\Entity\\Cast\\TimestampCast' => $baseDir . '/system/Entity/Cast/TimestampCast.php',
    'CodeIgniter\\Entity\\Cast\\URICast' => $baseDir . '/system/Entity/Cast/URICast.php',
    'CodeIgniter\\Entity\\Entity' => $baseDir . '/system/Entity/Entity.php',
    'CodeIgniter\\Entity\\Exceptions\\CastException' => $baseDir . '/system/Entity/Exceptions/CastException.php',
    'CodeIgniter\\Events\\Events' => $baseDir . '/system/Events/Events.php',
    'CodeIgniter\\Exceptions\\AlertError' => $baseDir . '/system/Exceptions/AlertError.php',
    'CodeIgniter\\Exceptions\\CastException' => $baseDir . '/system/Exceptions/CastException.php',
    'CodeIgniter\\Exceptions\\ConfigException' => $baseDir . '/system/Exceptions/ConfigException.php',
    'CodeIgniter\\Exceptions\\CriticalError' => $baseDir . '/system/Exceptions/CriticalError.php',
    'CodeIgniter\\Exceptions\\DebugTraceableTrait' => $baseDir . '/system/Exceptions/DebugTraceableTrait.php',
    'CodeIgniter\\Exceptions\\DownloadException' => $baseDir . '/system/Exceptions/DownloadException.php',
    'CodeIgniter\\Exceptions\\EmergencyError' => $baseDir . '/system/Exceptions/EmergencyError.php',
    'CodeIgniter\\Exceptions\\ExceptionInterface' => $baseDir . '/system/Exceptions/ExceptionInterface.php',
    'CodeIgniter\\Exceptions\\FrameworkException' => $baseDir . '/system/Exceptions/FrameworkException.php',
    'CodeIgniter\\Exceptions\\HTTPExceptionInterface' => $baseDir . '/system/Exceptions/HTTPExceptionInterface.php',
    'CodeIgniter\\Exceptions\\HasExitCodeInterface' => $baseDir . '/system/Exceptions/HasExitCodeInterface.php',
    'CodeIgniter\\Exceptions\\ModelException' => $baseDir . '/system/Exceptions/ModelException.php',
    'CodeIgniter\\Exceptions\\PageNotFoundException' => $baseDir . '/system/Exceptions/PageNotFoundException.php',
    'CodeIgniter\\Exceptions\\TestException' => $baseDir . '/system/Exceptions/TestException.php',
    'CodeIgniter\\Files\\Exceptions\\FileException' => $baseDir . '/system/Files/Exceptions/FileException.php',
    'CodeIgniter\\Files\\Exceptions\\FileNotFoundException' => $baseDir . '/system/Files/Exceptions/FileNotFoundException.php',
    'CodeIgniter\\Files\\File' => $baseDir . '/system/Files/File.php',
    'CodeIgniter\\Files\\FileCollection' => $baseDir . '/system/Files/FileCollection.php',
    'CodeIgniter\\Filters\\CSRF' => $baseDir . '/system/Filters/CSRF.php',
    'CodeIgniter\\Filters\\DebugToolbar' => $baseDir . '/system/Filters/DebugToolbar.php',
    'CodeIgniter\\Filters\\Exceptions\\FilterException' => $baseDir . '/system/Filters/Exceptions/FilterException.php',
    'CodeIgniter\\Filters\\FilterInterface' => $baseDir . '/system/Filters/FilterInterface.php',
    'CodeIgniter\\Filters\\Filters' => $baseDir . '/system/Filters/Filters.php',
    'CodeIgniter\\Filters\\Honeypot' => $baseDir . '/system/Filters/Honeypot.php',
    'CodeIgniter\\Filters\\InvalidChars' => $baseDir . '/system/Filters/InvalidChars.php',
    'CodeIgniter\\Filters\\SecureHeaders' => $baseDir . '/system/Filters/SecureHeaders.php',
    'CodeIgniter\\Format\\Exceptions\\FormatException' => $baseDir . '/system/Format/Exceptions/FormatException.php',
    'CodeIgniter\\Format\\Format' => $baseDir . '/system/Format/Format.php',
    'CodeIgniter\\Format\\FormatterInterface' => $baseDir . '/system/Format/FormatterInterface.php',
    'CodeIgniter\\Format\\JSONFormatter' => $baseDir . '/system/Format/JSONFormatter.php',
    'CodeIgniter\\Format\\XMLFormatter' => $baseDir . '/system/Format/XMLFormatter.php',
    'CodeIgniter\\HTTP\\CLIRequest' => $baseDir . '/system/HTTP/CLIRequest.php',
    'CodeIgniter\\HTTP\\CURLRequest' => $baseDir . '/system/HTTP/CURLRequest.php',
    'CodeIgniter\\HTTP\\ContentSecurityPolicy' => $baseDir . '/system/HTTP/ContentSecurityPolicy.php',
    'CodeIgniter\\HTTP\\DownloadResponse' => $baseDir . '/system/HTTP/DownloadResponse.php',
    'CodeIgniter\\HTTP\\Exceptions\\HTTPException' => $baseDir . '/system/HTTP/Exceptions/HTTPException.php',
    'CodeIgniter\\HTTP\\Files\\FileCollection' => $baseDir . '/system/HTTP/Files/FileCollection.php',
    'CodeIgniter\\HTTP\\Files\\UploadedFile' => $baseDir . '/system/HTTP/Files/UploadedFile.php',
    'CodeIgniter\\HTTP\\Files\\UploadedFileInterface' => $baseDir . '/system/HTTP/Files/UploadedFileInterface.php',
    'CodeIgniter\\HTTP\\Header' => $baseDir . '/system/HTTP/Header.php',
    'CodeIgniter\\HTTP\\IncomingRequest' => $baseDir . '/system/HTTP/IncomingRequest.php',
    'CodeIgniter\\HTTP\\Message' => $baseDir . '/system/HTTP/Message.php',
    'CodeIgniter\\HTTP\\MessageInterface' => $baseDir . '/system/HTTP/MessageInterface.php',
    'CodeIgniter\\HTTP\\MessageTrait' => $baseDir . '/system/HTTP/MessageTrait.php',
    'CodeIgniter\\HTTP\\Negotiate' => $baseDir . '/system/HTTP/Negotiate.php',
    'CodeIgniter\\HTTP\\OutgoingRequest' => $baseDir . '/system/HTTP/OutgoingRequest.php',
    'CodeIgniter\\HTTP\\OutgoingRequestInterface' => $baseDir . '/system/HTTP/OutgoingRequestInterface.php',
    'CodeIgniter\\HTTP\\RedirectResponse' => $baseDir . '/system/HTTP/RedirectResponse.php',
    'CodeIgniter\\HTTP\\Request' => $baseDir . '/system/HTTP/Request.php',
    'CodeIgniter\\HTTP\\RequestInterface' => $baseDir . '/system/HTTP/RequestInterface.php',
    'CodeIgniter\\HTTP\\RequestTrait' => $baseDir . '/system/HTTP/RequestTrait.php',
    'CodeIgniter\\HTTP\\Response' => $baseDir . '/system/HTTP/Response.php',
    'CodeIgniter\\HTTP\\ResponseInterface' => $baseDir . '/system/HTTP/ResponseInterface.php',
    'CodeIgniter\\HTTP\\ResponseTrait' => $baseDir . '/system/HTTP/ResponseTrait.php',
    'CodeIgniter\\HTTP\\URI' => $baseDir . '/system/HTTP/URI.php',
    'CodeIgniter\\HTTP\\UserAgent' => $baseDir . '/system/HTTP/UserAgent.php',
    'CodeIgniter\\Honeypot\\Exceptions\\HoneypotException' => $baseDir . '/system/Honeypot/Exceptions/HoneypotException.php',
    'CodeIgniter\\Honeypot\\Honeypot' => $baseDir . '/system/Honeypot/Honeypot.php',
    'CodeIgniter\\I18n\\Exceptions\\I18nException' => $baseDir . '/system/I18n/Exceptions/I18nException.php',
    'CodeIgniter\\I18n\\Time' => $baseDir . '/system/I18n/Time.php',
    'CodeIgniter\\I18n\\TimeDifference' => $baseDir . '/system/I18n/TimeDifference.php',
    'CodeIgniter\\I18n\\TimeLegacy' => $baseDir . '/system/I18n/TimeLegacy.php',
    'CodeIgniter\\I18n\\TimeTrait' => $baseDir . '/system/I18n/TimeTrait.php',
    'CodeIgniter\\Images\\Exceptions\\ImageException' => $baseDir . '/system/Images/Exceptions/ImageException.php',
    'CodeIgniter\\Images\\Handlers\\BaseHandler' => $baseDir . '/system/Images/Handlers/BaseHandler.php',
    'CodeIgniter\\Images\\Handlers\\GDHandler' => $baseDir . '/system/Images/Handlers/GDHandler.php',
    'CodeIgniter\\Images\\Handlers\\ImageMagickHandler' => $baseDir . '/system/Images/Handlers/ImageMagickHandler.php',
    'CodeIgniter\\Images\\Image' => $baseDir . '/system/Images/Image.php',
    'CodeIgniter\\Images\\ImageHandlerInterface' => $baseDir . '/system/Images/ImageHandlerInterface.php',
    'CodeIgniter\\Language\\Language' => $baseDir . '/system/Language/Language.php',
    'CodeIgniter\\Log\\Exceptions\\LogException' => $baseDir . '/system/Log/Exceptions/LogException.php',
    'CodeIgniter\\Log\\Handlers\\BaseHandler' => $baseDir . '/system/Log/Handlers/BaseHandler.php',
    'CodeIgniter\\Log\\Handlers\\ChromeLoggerHandler' => $baseDir . '/system/Log/Handlers/ChromeLoggerHandler.php',
    'CodeIgniter\\Log\\Handlers\\ErrorlogHandler' => $baseDir . '/system/Log/Handlers/ErrorlogHandler.php',
    'CodeIgniter\\Log\\Handlers\\FileHandler' => $baseDir . '/system/Log/Handlers/FileHandler.php',
    'CodeIgniter\\Log\\Handlers\\HandlerInterface' => $baseDir . '/system/Log/Handlers/HandlerInterface.php',
    'CodeIgniter\\Log\\Logger' => $baseDir . '/system/Log/Logger.php',
    'CodeIgniter\\Model' => $baseDir . '/system/Model.php',
    'CodeIgniter\\Modules\\Modules' => $baseDir . '/system/Modules/Modules.php',
    'CodeIgniter\\Pager\\Exceptions\\PagerException' => $baseDir . '/system/Pager/Exceptions/PagerException.php',
    'CodeIgniter\\Pager\\Pager' => $baseDir . '/system/Pager/Pager.php',
    'CodeIgniter\\Pager\\PagerInterface' => $baseDir . '/system/Pager/PagerInterface.php',
    'CodeIgniter\\Pager\\PagerRenderer' => $baseDir . '/system/Pager/PagerRenderer.php',
    'CodeIgniter\\Publisher\\ContentReplacer' => $baseDir . '/system/Publisher/ContentReplacer.php',
    'CodeIgniter\\Publisher\\Exceptions\\PublisherException' => $baseDir . '/system/Publisher/Exceptions/PublisherException.php',
    'CodeIgniter\\Publisher\\Publisher' => $baseDir . '/system/Publisher/Publisher.php',
    'CodeIgniter\\RESTful\\BaseResource' => $baseDir . '/system/RESTful/BaseResource.php',
    'CodeIgniter\\RESTful\\ResourceController' => $baseDir . '/system/RESTful/ResourceController.php',
    'CodeIgniter\\RESTful\\ResourcePresenter' => $baseDir . '/system/RESTful/ResourcePresenter.php',
    'CodeIgniter\\Router\\AutoRouter' => $baseDir . '/system/Router/AutoRouter.php',
    'CodeIgniter\\Router\\AutoRouterImproved' => $baseDir . '/system/Router/AutoRouterImproved.php',
    'CodeIgniter\\Router\\AutoRouterInterface' => $baseDir . '/system/Router/AutoRouterInterface.php',
    'CodeIgniter\\Router\\Exceptions\\RedirectException' => $baseDir . '/system/Router/Exceptions/RedirectException.php',
    'CodeIgniter\\Router\\Exceptions\\RouterException' => $baseDir . '/system/Router/Exceptions/RouterException.php',
    'CodeIgniter\\Router\\RouteCollection' => $baseDir . '/system/Router/RouteCollection.php',
    'CodeIgniter\\Router\\RouteCollectionInterface' => $baseDir . '/system/Router/RouteCollectionInterface.php',
    'CodeIgniter\\Router\\Router' => $baseDir . '/system/Router/Router.php',
    'CodeIgniter\\Router\\RouterInterface' => $baseDir . '/system/Router/RouterInterface.php',
    'CodeIgniter\\Security\\Exceptions\\SecurityException' => $baseDir . '/system/Security/Exceptions/SecurityException.php',
    'CodeIgniter\\Security\\Security' => $baseDir . '/system/Security/Security.php',
    'CodeIgniter\\Security\\SecurityInterface' => $baseDir . '/system/Security/SecurityInterface.php',
    'CodeIgniter\\Session\\Exceptions\\SessionException' => $baseDir . '/system/Session/Exceptions/SessionException.php',
    'CodeIgniter\\Session\\Handlers\\ArrayHandler' => $baseDir . '/system/Session/Handlers/ArrayHandler.php',
    'CodeIgniter\\Session\\Handlers\\BaseHandler' => $baseDir . '/system/Session/Handlers/BaseHandler.php',
    'CodeIgniter\\Session\\Handlers\\DatabaseHandler' => $baseDir . '/system/Session/Handlers/DatabaseHandler.php',
    'CodeIgniter\\Session\\Handlers\\Database\\MySQLiHandler' => $baseDir . '/system/Session/Handlers/Database/MySQLiHandler.php',
    'CodeIgniter\\Session\\Handlers\\Database\\PostgreHandler' => $baseDir . '/system/Session/Handlers/Database/PostgreHandler.php',
    'CodeIgniter\\Session\\Handlers\\FileHandler' => $baseDir . '/system/Session/Handlers/FileHandler.php',
    'CodeIgniter\\Session\\Handlers\\MemcachedHandler' => $baseDir . '/system/Session/Handlers/MemcachedHandler.php',
    'CodeIgniter\\Session\\Handlers\\RedisHandler' => $baseDir . '/system/Session/Handlers/RedisHandler.php',
    'CodeIgniter\\Session\\Session' => $baseDir . '/system/Session/Session.php',
    'CodeIgniter\\Session\\SessionInterface' => $baseDir . '/system/Session/SessionInterface.php',
    'CodeIgniter\\Test\\CIDatabaseTestCase' => $baseDir . '/system/Test/CIDatabaseTestCase.php',
    'CodeIgniter\\Test\\CIUnitTestCase' => $baseDir . '/system/Test/CIUnitTestCase.php',
    'CodeIgniter\\Test\\ConfigFromArrayTrait' => $baseDir . '/system/Test/ConfigFromArrayTrait.php',
    'CodeIgniter\\Test\\Constraints\\SeeInDatabase' => $baseDir . '/system/Test/Constraints/SeeInDatabase.php',
    'CodeIgniter\\Test\\ControllerResponse' => $baseDir . '/system/Test/ControllerResponse.php',
    'CodeIgniter\\Test\\ControllerTestTrait' => $baseDir . '/system/Test/ControllerTestTrait.php',
    'CodeIgniter\\Test\\ControllerTester' => $baseDir . '/system/Test/ControllerTester.php',
    'CodeIgniter\\Test\\DOMParser' => $baseDir . '/system/Test/DOMParser.php',
    'CodeIgniter\\Test\\DatabaseTestTrait' => $baseDir . '/system/Test/DatabaseTestTrait.php',
    'CodeIgniter\\Test\\Fabricator' => $baseDir . '/system/Test/Fabricator.php',
    'CodeIgniter\\Test\\FeatureResponse' => $baseDir . '/system/Test/FeatureResponse.php',
    'CodeIgniter\\Test\\FeatureTestCase' => $baseDir . '/system/Test/FeatureTestCase.php',
    'CodeIgniter\\Test\\FeatureTestTrait' => $baseDir . '/system/Test/FeatureTestTrait.php',
    'CodeIgniter\\Test\\FilterTestTrait' => $baseDir . '/system/Test/FilterTestTrait.php',
    'CodeIgniter\\Test\\Filters\\CITestStreamFilter' => $baseDir . '/system/Test/Filters/CITestStreamFilter.php',
    'CodeIgniter\\Test\\Interfaces\\FabricatorModel' => $baseDir . '/system/Test/Interfaces/FabricatorModel.php',
    'CodeIgniter\\Test\\Mock\\MockAppConfig' => $baseDir . '/system/Test/Mock/MockAppConfig.php',
    'CodeIgniter\\Test\\Mock\\MockAutoload' => $baseDir . '/system/Test/Mock/MockAutoload.php',
    'CodeIgniter\\Test\\Mock\\MockBuilder' => $baseDir . '/system/Test/Mock/MockBuilder.php',
    'CodeIgniter\\Test\\Mock\\MockCLIConfig' => $baseDir . '/system/Test/Mock/MockCLIConfig.php',
    'CodeIgniter\\Test\\Mock\\MockCURLRequest' => $baseDir . '/system/Test/Mock/MockCURLRequest.php',
    'CodeIgniter\\Test\\Mock\\MockCache' => $baseDir . '/system/Test/Mock/MockCache.php',
    'CodeIgniter\\Test\\Mock\\MockCodeIgniter' => $baseDir . '/system/Test/Mock/MockCodeIgniter.php',
    'CodeIgniter\\Test\\Mock\\MockConnection' => $baseDir . '/system/Test/Mock/MockConnection.php',
    'CodeIgniter\\Test\\Mock\\MockEmail' => $baseDir . '/system/Test/Mock/MockEmail.php',
    'CodeIgniter\\Test\\Mock\\MockEvents' => $baseDir . '/system/Test/Mock/MockEvents.php',
    'CodeIgniter\\Test\\Mock\\MockFileLogger' => $baseDir . '/system/Test/Mock/MockFileLogger.php',
    'CodeIgniter\\Test\\Mock\\MockIncomingRequest' => $baseDir . '/system/Test/Mock/MockIncomingRequest.php',
    'CodeIgniter\\Test\\Mock\\MockLanguage' => $baseDir . '/system/Test/Mock/MockLanguage.php',
    'CodeIgniter\\Test\\Mock\\MockLogger' => $baseDir . '/system/Test/Mock/MockLogger.php',
    'CodeIgniter\\Test\\Mock\\MockQuery' => $baseDir . '/system/Test/Mock/MockQuery.php',
    'CodeIgniter\\Test\\Mock\\MockResourceController' => $baseDir . '/system/Test/Mock/MockResourceController.php',
    'CodeIgniter\\Test\\Mock\\MockResourcePresenter' => $baseDir . '/system/Test/Mock/MockResourcePresenter.php',
    'CodeIgniter\\Test\\Mock\\MockResponse' => $baseDir . '/system/Test/Mock/MockResponse.php',
    'CodeIgniter\\Test\\Mock\\MockResult' => $baseDir . '/system/Test/Mock/MockResult.php',
    'CodeIgniter\\Test\\Mock\\MockSecurity' => $baseDir . '/system/Test/Mock/MockSecurity.php',
    'CodeIgniter\\Test\\Mock\\MockSecurityConfig' => $baseDir . '/system/Test/Mock/MockSecurityConfig.php',
    'CodeIgniter\\Test\\Mock\\MockServices' => $baseDir . '/system/Test/Mock/MockServices.php',
    'CodeIgniter\\Test\\Mock\\MockSession' => $baseDir . '/system/Test/Mock/MockSession.php',
    'CodeIgniter\\Test\\Mock\\MockTable' => $baseDir . '/system/Test/Mock/MockTable.php',
    'CodeIgniter\\Test\\PhpStreamWrapper' => $baseDir . '/system/Test/PhpStreamWrapper.php',
    'CodeIgniter\\Test\\ReflectionHelper' => $baseDir . '/system/Test/ReflectionHelper.php',
    'CodeIgniter\\Test\\StreamFilterTrait' => $baseDir . '/system/Test/StreamFilterTrait.php',
    'CodeIgniter\\Test\\TestLogger' => $baseDir . '/system/Test/TestLogger.php',
    'CodeIgniter\\Test\\TestResponse' => $baseDir . '/system/Test/TestResponse.php',
    'CodeIgniter\\Throttle\\Throttler' => $baseDir . '/system/Throttle/Throttler.php',
    'CodeIgniter\\Throttle\\ThrottlerInterface' => $baseDir . '/system/Throttle/ThrottlerInterface.php',
    'CodeIgniter\\Traits\\ConditionalTrait' => $baseDir . '/system/Traits/ConditionalTrait.php',
    'CodeIgniter\\Traits\\PropertiesTrait' => $baseDir . '/system/Traits/PropertiesTrait.php',
    'CodeIgniter\\Typography\\Typography' => $baseDir . '/system/Typography/Typography.php',
    'CodeIgniter\\Validation\\CreditCardRules' => $baseDir . '/system/Validation/CreditCardRules.php',
    'CodeIgniter\\Validation\\Exceptions\\ValidationException' => $baseDir . '/system/Validation/Exceptions/ValidationException.php',
    'CodeIgniter\\Validation\\FileRules' => $baseDir . '/system/Validation/FileRules.php',
    'CodeIgniter\\Validation\\FormatRules' => $baseDir . '/system/Validation/FormatRules.php',
    'CodeIgniter\\Validation\\Rules' => $baseDir . '/system/Validation/Rules.php',
    'CodeIgniter\\Validation\\StrictRules\\CreditCardRules' => $baseDir . '/system/Validation/StrictRules/CreditCardRules.php',
    'CodeIgniter\\Validation\\StrictRules\\FileRules' => $baseDir . '/system/Validation/StrictRules/FileRules.php',
    'CodeIgniter\\Validation\\StrictRules\\FormatRules' => $baseDir . '/system/Validation/StrictRules/FormatRules.php',
    'CodeIgniter\\Validation\\StrictRules\\Rules' => $baseDir . '/system/Validation/StrictRules/Rules.php',
    'CodeIgniter\\Validation\\Validation' => $baseDir . '/system/Validation/Validation.php',
    'CodeIgniter\\Validation\\ValidationInterface' => $baseDir . '/system/Validation/ValidationInterface.php',
    'CodeIgniter\\View\\Cell' => $baseDir . '/system/View/Cell.php',
    'CodeIgniter\\View\\Cells\\Cell' => $baseDir . '/system/View/Cells/Cell.php',
    'CodeIgniter\\View\\Exceptions\\ViewException' => $baseDir . '/system/View/Exceptions/ViewException.php',
    'CodeIgniter\\View\\Filters' => $baseDir . '/system/View/Filters.php',
    'CodeIgniter\\View\\Parser' => $baseDir . '/system/View/Parser.php',
    'CodeIgniter\\View\\Plugins' => $baseDir . '/system/View/Plugins.php',
    'CodeIgniter\\View\\RendererInterface' => $baseDir . '/system/View/RendererInterface.php',
    'CodeIgniter\\View\\Table' => $baseDir . '/system/View/Table.php',
    'CodeIgniter\\View\\View' => $baseDir . '/system/View/View.php',
    'CodeIgniter\\View\\ViewDecoratorInterface' => $baseDir . '/system/View/ViewDecoratorInterface.php',
    'CodeIgniter\\View\\ViewDecoratorTrait' => $baseDir . '/system/View/ViewDecoratorTrait.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Laminas\\Escaper\\Escaper' => $vendorDir . '/laminas/laminas-escaper/src/Escaper.php',
    'Laminas\\Escaper\\Exception\\ExceptionInterface' => $vendorDir . '/laminas/laminas-escaper/src/Exception/ExceptionInterface.php',
    'Laminas\\Escaper\\Exception\\InvalidArgumentException' => $vendorDir . '/laminas/laminas-escaper/src/Exception/InvalidArgumentException.php',
    'Laminas\\Escaper\\Exception\\RuntimeException' => $vendorDir . '/laminas/laminas-escaper/src/Exception/RuntimeException.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/Psr/Log/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/Psr/Log/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/Psr/Log/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/Psr/Log/NullLogger.php',
    'Psr\\Log\\Test\\DummyTest' => $vendorDir . '/psr/log/Psr/Log/Test/DummyTest.php',
    'Psr\\Log\\Test\\LoggerInterfaceTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Psr\\Log\\Test\\TestLogger' => $vendorDir . '/psr/log/Psr/Log/Test/TestLogger.php',
);
