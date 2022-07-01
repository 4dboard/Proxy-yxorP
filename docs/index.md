<p align="center">
<img align="center" src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/logo.png' />[ <a href="./app">ARCHITECTURE</a> ] [ <a href="./app">DEVELOPERS</a> ] [ <a href="./app">DOCUMENTATION</a> ]</p>

<h1  align="center">🦄 .yxorP [v2.1] SAAS(y), Multi-tenancy Proxy Guzzler</h1>
<h3  align="center"><i>Backend (GUI) included, PHP CURL+Composer are Optional</i></h3>

<br />
<br />

<img align="center" src='https://user-images.githubusercontent.com/6468571/174686673-e3ee3ce5-2c13-4ae6-886d-f22aed12a5a0.png' />

yxorP is a plug-and-play, flat-file application that does not need Composer, PHP CURL, or databases; these are all
optional additions that are fully supported. yxorP is intended to act as a proxy that can edit or update the content of
multiple websites using a PHAR (PHP archive) binary version of Guzzle, and managed via a user-friendly Cockpit backend (
GUI).

The incoming request hostname is used to fetch site-specific requirements from the backend, the target website is then
retrieved and modified accordingly. Additionally, the website content can be optionally spun using the article spinning
engine that is already embedded into the application. After the website has been modified the result is then stored for
a predefined time inside a custom-built, flat-file cache system architectured to be 500x faster than memory-based cache
systems such as Memcache and Redis. This is accomplished by bypassing the serialisation and deserialization processes,
which resulted a significantly faster cache.

The Constants::get(BUGSNAG) error reporting and warning system now supports yxorP in its most complete version after an
upgrade. This was done to assure Constants::get(BUGSNAG)'s compatibility with the modification. Changes to the default
logging system may be done in as little as two minutes due to the program's compatibility with the great majority of the
industry's primary error tracking systems.

<video controls="true" width="100%" height="auto" autoplay="" name="media"><source src="https://4dboard.github.io/proxy-yxorp/movie.mp4?8" type="video/mp4"></video>

<br />
<br />

<img src='https://user-images.githubusercontent.com/6468571/174686718-8501af5f-3fd3-4df9-8854-3319f7837e51.png'/>


> ⚠️**Requires**: Minimum requirement is PHP version 8.0 +

<b>NB:</b><i> Before launching the website, you must ensure that the "cockpit" submodule has been pulled and the details
in the '.env.example' are correct and the file has been renamed '.env'.</i>

Cockpit is the graphical user interface (GUI) for the administration interface, which may be immediately accessed by
entering "/cockpit" and supplying the admin username and password set in the '.env' file.

The credentials defined in the '.env' file are used to setup the sqlite database for the 'cockpit' application. Once the
application is accessed/run for the first time, the only way to 'update/change' the credentials is directly in the
sqlite database or via the 'cockpit' application itself (The '.env' admin username and password are only used on the
first run). The application can also always be reset via a clean installation.

<p align="center"><img src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/diagrams.png' /></p>

<br />
<br />

<img src='https://user-images.githubusercontent.com/6468571/174686903-294074b2-2129-4084-a42d-33d6387a8851.png' />

<h3 >🔋 Batteries Included: Plug & Play [CURL + Composer Optional], Proxy as a Service, Multi-tenant, Multi-Threaded,
with Cache & Article Spinner.</h3>

Convenient features such as built-in content spinning and an auto caching engine are hidden behind a slick online
interface. Among the cache drivers provided are Arangodb, Devnull, Dynamodb (AWS), Cassandra, Devrandom, Files,
CouchBasev3, Memstatic, Firestore, Couchdb, Leveldb, Mongodb, Memcache(d),Predis, Sqlite, Redis, Wincache, Ssdb, and
Zend Disk Cache.

The combined might of two of the most successful web proxy initiatives is harnessed for maximum effect. This
self-service proxy engine has zero performance loss and supports numerous tenants by combining a flat-file beautiful web
interface with a custom multi-threaded caching layer and an extremely powerful 10,000+ word thesaurus article spinner.
Vanilla Dashboard is a no-cost, no-commitment self-service proxy engine that supports numerous tenants. Specifically,
the project is looking for funding to help tie off some loose ends, particularly with the backed GUI; the front-end is
complete and functional, but code cleanup and unit testing are required.

yxorP (proxy.) is a one-of-a-kind, plug-and-play (no installation required), multi-threaded, website mirroring and
content augmentation, fast cache, and multi-web proxy server that performs website mirroring and content augmentation,
website mirroring and content augmentation, fast cache, and multi-web proxy server (reverse proxy). In addition to
having a built-in "cache" management system as well as a web-based "cache" management system, the proxy is "modular"
or "plugin-based." Web-based reporting and analytics using a graphical user interface (GUI) (GUI). By leveraging a
custom-built content spinning engine, the system allows material to be "augmented" (or "spun") with little performance
degradation (10,000+ thesaurus/dictionary entries) while maintaining high quality.

<p align="center"><img src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/Idna.png' /></p>

<img src='https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png' />

<img src='https://user-images.githubusercontent.com/6468571/157205365-af23c9a1-98a7-40fd-8b74-0b9b0918a259.png' />

<img src='https://user-images.githubusercontent.com/6468571/157188599-5fdfd399-b340-434e-b80b-ca356f8ad8ab.png' />

### Cockpit Back-End

Cockpit is awesome if you need a flexible content structure but don't want to be limited in how to use the content.
Cockpit is a perfect match if you want to support multiple devices or need a content management UI for static site
builders. Build unique applications and let Cockpit feed them with content.

<img src='https://user-images.githubusercontent.com/6468571/174488292-66e75484-d57b-472f-8921-661d09387727.png' />

Introduction Cockpit is a headless CMS with an API-first approach that puts content first. It is designed to simplify
the process of publication by separating content management from content consumption on the client side. Cockpit is
focusing just on the back-end work to manage content. Rather than worry about delivery of content through pages, its
goal is to provide structured content across different channels via a simple API.

<img src='https://user-images.githubusercontent.com/6468571/174488463-767e2f7a-8409-445b-b7e8-ed45d0965a89.png' />

#### Key features:

Manage flexible content models. There are no pre-defined content models. Define the content model yourself. Uncluttered
UI. Cockpit offers you a modern and simple user interface. One system, consume it the way you want. Receive your content
via a simple API.

#### The Advantages Of Going Headless

- No presentation limitations – build the best design ever.
- Content for multiple channels – create content once, consume anywhere.
- Highly scalable content – for all your devices and microsites.
- Minimum training required – get started, immediately.
- Easy integrations – connect with everything.

<img src='https://user-images.githubusercontent.com/6468571/174488424-88456e97-539c-4ec2-918b-fc59be5be8da.png' />

<img src='https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png' />

<img src='https://user-images.githubusercontent.com/6468571/157205537-31de601d-4b8b-4c6b-af36-4c1e7e3f184f.png' />

<img src='https://user-images.githubusercontent.com/6468571/157188653-bde1f08c-27ee-4eb8-90f7-69d1e60aa949.png' />

<p align="center"><img src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (3).gif' /></p>

## Use case / Applications

Create static flat file variants of your original webpages by using yxorP to mirror your websites and offer the
mirrored/cloned copies as static flat file variations of the original webpages.

#### 🔥 Cache

When you use caching to load your websites, you may reduce loading time and server strain, resulting in websites that
load faster.

#### 📛 Firewall

Create a virtual firewall to protect your websites behind your proxy server, giving security against website assaults
such as DDOS attacks and other types of attacks.

#### 🔳 iFrame

It is possible to circumvent CORS for the iframing services that you need – **not recommended, but feasible**.

#### 🔱 Load-balancing

This may be accomplished by deploying cloned copies of your website on various servers that are connected to a
load-balancing system.

#### ⌛ Allways-online

High/Continuous availability is achieved by running a proxy version of your existing website and switching to this
version of the website during upgrades or down-time.

##### + many more..

There are several additional uses that may be explored, and these are only a few of the more common ones.

<img src='https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png' />
<img src="https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/logosnag.png"/>

Constants::get(BUGSNAG) provides a solution for error monitoring and application stability management that is easy to
use and implement. The ability to make data-driven decisions about whether to develop software or address problems is
contingent on the ability to maintain stability.

<img src="https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/Constants::get(BUGSNAG).gif"/>

Diagnostic data from our mobile assistance, which has been regarded as the best-in-class in the industry, enables teams
to reproduce and fix issues as soon as they begin to have an impact on system stability. Reports on error situations are
arranged by root cause and may also be classified by business impact. In addition, they are supplied with extensive
diagnostic information.

<img src='https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png' />

<img src='https://user-images.githubusercontent.com/6468571/157205793-efeaaa6c-eae6-4070-8838-50637876156b.png' />

<img src='https://user-images.githubusercontent.com/6468571/157188697-4c3a2b95-b40b-441c-bf6a-45c97e4e4b57.png' />

<p align="center"><img src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (4).gif' /></p>

## Instant Setup

Instant Development Enviroment stup with your prefered service provider:

<a href="https://vercel.com/new/clone?repository-url=https://github.com/4dboard/yxorP"><img src="https://vercel.com/button" /></a> <a href="https://www.heroku.com/deploy/?template=https://gitpod.io/#https://github.com/4dboard/yxorP"><img src="https://www.herokucdn.com/deploy/button.svg" /></a> <a href="https://render.com/deploy?repo=https://github.com/4dboard/yxorP"><img src="https://render.com/images/deploy-to-render-button.svg" /></a> <a href="https://gitpod.io/#https://github.com/4dboard/yxorP"><img src="https://gitpod.io/button/open-in-gitpod.svg" /></a> <img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' /> <img src='https://user-images.githubusercontent.com/6468571/157205943-7e735dd6-4d7f-401b-97b7-a25ecc2b9c3b.png' />

<img src='https://user-images.githubusercontent.com/6468571/157188746-0eb4f847-b0de-464a-9719-acf5bb39e8c4.png' />

# Background Information

Two of the most powerful PHP reverse proxies now accessible on the internet have been merged to create a single web
proxy that outperforms the two when their combined performance is considered. Please keep in mind that this is a
brand-new project that may undergo changes in the future. With the php-proxy library, a component of the PHP programming
language that is available for free download, you may quickly and easily configure a web proxy application for your web
server. If you are able to contribute to or support this project, it would be much appreciated as it would enable me to
devote more development time to it, therefore expediting its progress.

<img src='https://user-images.githubusercontent.com/6468571/153799459-4c352a2d-2bc0-413d-9048-7f94bdd7a1a5.png' />

<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />

<img src='https://user-images.githubusercontent.com/6468571/157206067-a7263dc6-09e4-4350-8ad2-3bd51fc349b0.png' />

<img src='https://user-images.githubusercontent.com/6468571/157188795-5034fd0f-d40e-4a58-9e8e-286e713fb397.png' />

## Web-Proxy vs Proxy Server

Bear in mind that this proxy script may not function properly on websites or pages that are very script-heavy or include
an excessive number of "dynamic components," as indicated above. Web proxies' inability to encrypt data is a
well-documented flaw in the technology. When visiting such websites, you should utilize a legitimate proxy server to
redirect your browser's HTTP requests via the following domains:

<img src='https://user-images.githubusercontent.com/6468571/153799352-ee3e60ed-6564-4633-9cc1-7acc2cfb2b50.png' />
<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />

<img src='https://user-images.githubusercontent.com/6468571/157206147-738b606d-6a02-411e-ac17-b5a364601b62.png' />

## Installation

It is critical to keep in mind that this is a **project** and not a library. It is not recommended to install this
package via * require*. This type of project should be immediately uploaded to your web server's public directory.

Download a pre-installed version of this application as a ZIP archive from the downloads area. [**
Releases**](https://github.com/4dboard/yxorP/releases/).

# The Dashboard

🍦 The Dashboard component provides an application-specific JavaScript dashboard that connects with a PHP-written
on-disk database adapted to the application's needs. Vanilla Dashboard, a free and open source program, may be
downloaded from the internet. Numerous "Easter Eggs" are scattered around the Dashboard. The "Who Is Online," "Live
Chat," and "Who Is Online" services, as well as a variety of other features, are all wrapped up in an easy-to-use
CSS-based user interface that is available for download for free.

<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />
<img src='https://user-images.githubusercontent.com/6468571/157188876-61dc86c4-508f-4169-a1f2-a9582c035c2a.png' />

## Development Environment

A Liberating Dev Tool For All Your Projects LAMP recipe, which may be purchased from the link above, are required in
order to complete the Lando - A Liberating Dev Tool For All Your Projects project. You may use the Lando - A Liberating
Dev Tool For All Your Projects project for all of your projects since it enables you to either "plug and play" on
PHP-compatible PCs or create in a LAMP environment. If you need any further information regarding this project, please
visit the section under "Frequently Asked Questions." Worldwide, professional developers use local development and
DevOps technologies on a daily basis, with the United States having the highest concentration of such technologies. In
spite of the fact that there are insufficient instruments to assist in the development process, it is possible to
transcend the conceptual limitations imposed by this situation. Concentrating your attention on the most important
activities will allow you to save time, money, and frustration in the long run. Focusing your efforts on the most
important tasks may help to alleviate some of the stress.

<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />
<img src='https://user-images.githubusercontent.com/6468571/152177774-25482b2a-f8cd-4f19-a221-97dc29212a2d.png' />

Clone this repo

```

git clone https://github.com/4dboard/proxy-yxorp

```

Clone the "sample.env" to ".env" and update with the correct details.

```
cp ./sample.env ./.env
```

Host the files on a PHP server

```
# Start it up
lando start

# List information about this app.
lando info
```

or

```
# Initialize a lamp recipe using the latest codeigniter version
lando init \
  --source remote \
  --remote-url https://github.com/bcit-ci/CodeIgniter/archive/3.1.10.tar.gz \
  --remote-options="--strip-components 1" \
  --recipe lamp \
  --webroot . \
  --name my-first-lamp-app
```

For more information please see: https://docs.lando.dev/config/lamp.html

<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />

<img src='https://user-images.githubusercontent.com/6468571/157189458-e55e96dd-1faf-4fdf-8c63-f98fc5eab426.png' />

<p align="center"><img src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (10).gif' /></p>

## Keep it up-to-date

When it comes to software updates, it is more often than not that they will be made to the application's dependant
packages rather than the program itself; for example, most of the adjustments will be made to the php-proxy package
rather than to the application itself.

#### .env

This file will be loaded into the Config class at the global level.

#### /plugins/

Users are encouraged to create their own unique plugins in this subdirectory, which will then be loaded automatically
from the main directory. The proxy, which comes with a number of built-in plugins, is not without its limitations, and
users are urged to create their own custom plugins in order to broaden the range of options available. Think of a simple
example like the file /plugins/TestPlugin.php in the plugins directory as an illustration.

<img src='https://user-images.githubusercontent.com/6468571/152181962-33e4e658-5fbc-4b2d-9366-7147e9fabe65.png' />
<img src='https://user-images.githubusercontent.com/6468571/157206367-1c11d91a-87e6-4724-8501-14d9860d78de.png' />

<img src='https://user-images.githubusercontent.com/6468571/157188915-5ad7cad1-af0a-4e0a-8807-c9fe4708e06b.png' />

# Gitpod

Gitpod, a free and open-source Kubernetes program that is freely accessible on the internet, allows developers to
quickly and efficiently set up code-ready development environments on their workstations. With the use of cloud-based
technology, every piece of work accomplished leads in the production of new, automated development environments in the
cloud, which are then accessible to other developers. It is only via the use of cloud computing that this is made
feasible. The option to start immediate, remote, and cloud-based development environments regardless of whether your
development environment is defined in code is available if you have a browser or desktop integrated development
environment open on your computer.

<img src='https://user-images.githubusercontent.com/6468571/152177615-421c1286-33cd-4c38-9f7b-3c486901ba81.png' />
<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />
<img src='https://user-images.githubusercontent.com/6468571/152181058-6446dd76-3012-4e9f-b05a-7d86ca5d0872.png' />
<img src='https://user-images.githubusercontent.com/6468571/157206427-04af776e-d516-4fc3-b0ca-2c2cbc0f44cc.png' />

## Usage & How to Guide

Navigate to the root of the project with your browser, register an account and then login.

<img src='https://user-images.githubusercontent.com/6468571/152181949-99b9aaa6-586e-4f64-826d-ec7616535d1c.png' />

<img src='https://user-images.githubusercontent.com/6468571/157189005-b1eb3398-be00-47a3-825d-c13a90258fc2.png' />

## Contributing to the Project

Before pull requests may be implemented in the production environment, they must be evaluated and authorized by the
development team. Please open a new issue with the appropriate subject title to discuss the modifications you want to
make to the document. Please make every effort to keep tests current in order to minimize the chance of wrong
interpretation of results. We appreciate all of your assistance and support.

<p align="center"><img src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (14).gif' /></p>

<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />

<br />

<img src='https://user-images.githubusercontent.com/6468571/157206554-6f07c153-cca7-4679-a5c7-441f88580bd4.png' />

<img src='https://user-images.githubusercontent.com/6468571/157189069-baae9f9f-3576-4eea-9427-58a236210541.png' />

## Road Map

- [x] Front-end
    - [x] Combine Proxy Engines
    - [x] Allow Multi-tent rendering
    - [x] Build Caching Layer
    - [x] Develop Multi-threading support (PHP Vanilla/Independent)

    + More (To be listed soon)

- [x] Foundation
    - [x] API Service
    - [x] TxT DB
    - [x] Login
    - [x] Registration
    - [x] Dashboard
    - [x] Who is Online
    - [x] Documentation
- [ ] Tables
    - [x] Users
    - [x] Notes
    - [x] Tasks
    - [ ] Chat
- [ ] Notes
    - [x] Data Scheme
    - [x] API Endpoints
    - [x] Functions
    - [ ] UI
- [ ] Tasks
    - [x] Data Scheme
    - [x] API Endpoints
    - [x] Functions
    - [ ] UI
- [ ] Chat
    - [ ] Data Scheme
    - [x] API Endpoints
    - [x] Functions
    - [ ] UI
- [ ] Testing
    - [x] Versions
    - [x] Owners
    - [ ] Crate details

<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />
<img src='https://user-images.githubusercontent.com/6468571/157206640-0ecdb227-cc7f-46a3-8b26-b0c76ac030a5.png' />

<img src='https://user-images.githubusercontent.com/6468571/157189108-1914f60d-d58e-400a-9ced-a5d09a5d81ad.png' />

## Licensing

[MIT Software License for .yxorP The PHP Web-Proxy by don Pablo](https://choosealicense.com/licenses/mit/)

The Massachusetts Institute of Technology (MIT) License, sometimes referred to as the "MIT License," is a permissive
free software license developed in the late 1980s and still in use at the Massachusetts Institute of Technology today.
Repurposing is confined to a limited number of scenarios due to the permissive nature of the program, which assures
compliance with licensing agreements. This license is straightforward and concise; it is a permissive license that just
requires copyright protection and prominent display of licensing information in the form of terms. They may be released
in a number of forms and without the source code because they are licensed works, adaptations, or large-scale works.

![](asset/live.png?v=3)

***

# yxorP

This is an automatically generated documentation for **yxorP**.

## Namespaces

### \

#### Classes

| Class | Description |
|-------|-------------|
| [`Attribute`](./classes/Attribute.md) | |
| [`BarBucCommand`](./classes/BarBucCommand.md) | Base class for all commands.|
| [`BlockListPlugin`](./classes/BlockListPlugin.md) | |
| [`CLI`](./classes/CLI.md) | This file is part of the Cockpit project.|
| [`ComposerAutoloaderInit0fc67c8c6d14d2081ce037f8348a35e1`](./classes/ComposerAutoloaderInit0fc67c8c6d14d2081ce037f8348a35e1.md) | |
| [`ComposerAutoloaderInitc066c7ec9ff8668257accf86723d8f09`](./classes/ComposerAutoloaderInitc066c7ec9ff8668257accf86723d8f09.md) | |
| [`ContainerArray`](./classes/ContainerArray.md) | This file is part of the Cockpit project.|
| [`CookiePlugin`](./classes/CookiePlugin.md) | |
| [`D`](./classes/D.md) | |
| [`DailyMotionPlugin`](./classes/DailyMotionPlugin.md) | |
| [`DataCollection`](./classes/DataCollection.md) | This file is part of the Cockpit project.|
| [`DotEnv`](./classes/DotEnv.md) | This file is part of the Cockpit project.|
| [`FileStorage`](./classes/FileStorage.md) | |
| [`Foo1Command`](./classes/Foo1Command.md) | Base class for all commands.|
| [`Foo2Command`](./classes/Foo2Command.md) | Base class for all commands.|
| [`Foo3Command`](./classes/Foo3Command.md) | Base class for all commands.|
| [`Foo4Command`](./classes/Foo4Command.md) | Base class for all commands.|
| [`Foo5Command`](./classes/Foo5Command.md) | Base class for all commands.|
| [`Foo6Command`](./classes/Foo6Command.md) | Base class for all commands.|
| [`FooCommand`](./classes/FooCommand.md) | Base class for all commands.|
| [`FooOptCommand`](./classes/FooOptCommand.md) | Base class for all commands.|
| [`FooSubnamespaced1Command`](./classes/FooSubnamespaced1Command.md) | Base class for all commands.|
| [`FooSubnamespaced2Command`](./classes/FooSubnamespaced2Command.md) | Base class for all commands.|
| [`FoobarCommand`](./classes/FoobarCommand.md) | Base class for all commands.|
| [`HeaderRewritePlugin`](./classes/HeaderRewritePlugin.md) | |
| [`JsonException`](./classes/JsonException.md) | |
| [`Lexy`](./classes/Lexy.md) | Lexy class. Simple on the fly template parser class|
| [`LiteDB`](./classes/LiteDB.md) | This file is part of the Cockpit project.|
| [`LiteDBQuery`](./classes/LiteDBQuery.md) | |
| [`LogPlugin`](./classes/LogPlugin.md) | |
| [`Mailer`](./classes/Mailer.md) | |
| [`Mailer_Message`](./classes/Mailer_Message.md) | |
| [`Objet`](./classes/Objet.md) | |
| [`OverridePlugin`](./classes/OverridePlugin.md) | |
| [`Pagination`](./classes/Pagination.md) | This file is part of the Cockpit project.|
| [`Parsedown`](./classes/Parsedown.md) | |
| [`Parsedown`](./classes/Parsedown.md) | |
| [`ParsedownExtra`](./classes/ParsedownExtra.md) | |
| [`ParsedownExtraTest`](./classes/ParsedownExtraTest.md) | |
| [`Pimple`](./classes/Pimple.md) | Pimple main class.|
| [`PriorityQueue`](./classes/PriorityQueue.md) | This file is part of the Cockpit project.|
| [`ProxifyPlugin`](./classes/ProxifyPlugin.md) | |
| [`RedisLite`](./classes/RedisLite.md) | RedisLite class.|
| [`SVGSanitizer`](./classes/SVGSanitizer.md) | Class SVGSanitizer|
| [`Spyc`](./classes/Spyc.md) | The Simple PHP YAML Class.|
| [`StreamPlugin`](./classes/StreamPlugin.md) | |
| [`Symfony_Component_Debug_Tests_Fixtures_PEARClass`](./classes/Symfony_Component_Debug_Tests_Fixtures_PEARClass.md) | |
| [`TestCommand`](./classes/TestCommand.md) | Base class for all commands.|
| [`TestTiti`](./classes/TestTiti.md) | Base class for all commands.|
| [`TestToto`](./classes/TestToto.md) | Base class for all commands.|
| [`Twig_Autoloader`](./classes/Twig_Autoloader.md) | Autoloads Twig classes.|
| [`Twig_BaseNodeVisitor`](./classes/Twig_BaseNodeVisitor.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`Twig_CacheInterface`](./classes/Twig_CacheInterface.md) | Interface implemented by cache classes.|
| [`Twig_Cache_Filesystem`](./classes/Twig_Cache_Filesystem.md) | Implements a cache on the filesystem.|
| [`Twig_Cache_Null`](./classes/Twig_Cache_Null.md) | Implements a no-cache strategy.|
| [`Twig_Compiler`](./classes/Twig_Compiler.md) | Compiles a node to PHP code.|
| [`Twig_ContainerRuntimeLoader`](./classes/Twig_ContainerRuntimeLoader.md) | Lazily loads Twig runtime implementations from a PSR-11 container.|
| [`Twig_Environment`](./classes/Twig_Environment.md) | Stores the Twig configuration and renders templates.|
| [`Twig_Error`](./classes/Twig_Error.md) | Twig base exception.|
| [`Twig_Error_Loader`](./classes/Twig_Error_Loader.md) | Exception thrown when an error occurs during template loading.|
| [`Twig_Error_Runtime`](./classes/Twig_Error_Runtime.md) | Exception thrown when an error occurs at runtime.|
| [`Twig_Error_Syntax`](./classes/Twig_Error_Syntax.md) | \Exception thrown when a syntax error occurs during lexing or parsing of a template.|
| [`Twig_ExistsLoaderInterface`](./classes/Twig_ExistsLoaderInterface.md) | Adds an exists() method for loaders.|
| [`Twig_ExpressionParser`](./classes/Twig_ExpressionParser.md) | |
| [`Twig_Extension`](./classes/Twig_Extension.md) | |
| [`Twig_ExtensionInterface`](./classes/Twig_ExtensionInterface.md) | Interface implemented by extension classes.|
| [`Twig_Extension_Core`](./classes/Twig_Extension_Core.md) | |
| [`Twig_Extension_Debug`](./classes/Twig_Extension_Debug.md) | |
| [`Twig_Extension_Escaper`](./classes/Twig_Extension_Escaper.md) | |
| [`Twig_Extension_GlobalsInterface`](./classes/Twig_Extension_GlobalsInterface.md) | Enables usage of the deprecated Twig\Extension\AbstractExtension::getGlobals() method.|
| [`Twig_Extension_InitRuntimeInterface`](./classes/Twig_Extension_InitRuntimeInterface.md) | Enables usage of the deprecated Twig\Extension\AbstractExtension::initRuntime() method.|
| [`Twig_Extension_Optimizer`](./classes/Twig_Extension_Optimizer.md) | |
| [`Twig_Extension_Profiler`](./classes/Twig_Extension_Profiler.md) | |
| [`Twig_Extension_Sandbox`](./classes/Twig_Extension_Sandbox.md) | |
| [`Twig_Extension_Staging`](./classes/Twig_Extension_Staging.md) | |
| [`Twig_Extension_StringLoader`](./classes/Twig_Extension_StringLoader.md) | |
| [`Twig_FactoryRuntimeLoader`](./classes/Twig_FactoryRuntimeLoader.md) | Lazy loads the runtime implementations for a Twig element.|
| [`Twig_FileExtensionEscapingStrategy`](./classes/Twig_FileExtensionEscapingStrategy.md) | Default autoescaping strategy based on file names.|
| [`Twig_Filter`](./classes/Twig_Filter.md) | Represents a template filter.|
| [`Twig_Filter_Function`](./classes/Twig_Filter_Function.md) | Represents a function template filter.|
| [`Twig_Filter_Method`](./classes/Twig_Filter_Method.md) | Represents a method template filter.|
| [`Twig_Filter_Node`](./classes/Twig_Filter_Node.md) | Represents a template filter as a node.|
| [`Twig_Function`](./classes/Twig_Function.md) | Represents a template function.|
| [`Twig_Function_Function`](./classes/Twig_Function_Function.md) | Represents a function template function.|
| [`Twig_Function_Method`](./classes/Twig_Function_Method.md) | Represents a method template function.|
| [`Twig_Function_Node`](./classes/Twig_Function_Node.md) | Represents a template function as a node.|
| [`Twig_Lexer`](./classes/Twig_Lexer.md) | Lexes a template string.|
| [`Twig_LoaderInterface`](./classes/Twig_LoaderInterface.md) | Interface all loaders must implement.|
| [`Twig_Loader_Array`](./classes/Twig_Loader_Array.md) | Loads a template from an array.|
| [`Twig_Loader_Chain`](./classes/Twig_Loader_Chain.md) | Loads templates from other loaders.|
| [`Twig_Loader_Filesystem`](./classes/Twig_Loader_Filesystem.md) | Loads template from the filesystem.|
| [`Twig_Markup`](./classes/Twig_Markup.md) | Marks a content as safe.|
| [`Twig_Node`](./classes/Twig_Node.md) | Represents a node in the AST.|
| [`Twig_NodeCaptureInterface`](./classes/Twig_NodeCaptureInterface.md) | Represents a node that captures any nested displayable nodes.|
| [`Twig_NodeOutputInterface`](./classes/Twig_NodeOutputInterface.md) | Represents a displayable node in the AST.|
| [`Twig_NodeTraverser`](./classes/Twig_NodeTraverser.md) | A node traverser.|
| [`Twig_NodeVisitorInterface`](./classes/Twig_NodeVisitorInterface.md) | Interface for node visitor classes.|
| [`Twig_NodeVisitor_Escaper`](./classes/Twig_NodeVisitor_Escaper.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`Twig_NodeVisitor_Optimizer`](./classes/Twig_NodeVisitor_Optimizer.md) | Tries to optimize the AST.|
| [`Twig_NodeVisitor_SafeAnalysis`](./classes/Twig_NodeVisitor_SafeAnalysis.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`Twig_NodeVisitor_Sandbox`](./classes/Twig_NodeVisitor_Sandbox.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`Twig_Node_AutoEscape`](./classes/Twig_Node_AutoEscape.md) | Represents an autoescape node.|
| [`Twig_Node_Block`](./classes/Twig_Node_Block.md) | Represents a block node.|
| [`Twig_Node_BlockReference`](./classes/Twig_Node_BlockReference.md) | Represents a block call node.|
| [`Twig_Node_Body`](./classes/Twig_Node_Body.md) | Represents a body node.|
| [`Twig_Node_CheckSecurity`](./classes/Twig_Node_CheckSecurity.md) | Represents a node in the AST.|
| [`Twig_Node_Deprecated`](./classes/Twig_Node_Deprecated.md) | Represents a deprecated node.|
| [`Twig_Node_Do`](./classes/Twig_Node_Do.md) | Represents a do node.|
| [`Twig_Node_Embed`](./classes/Twig_Node_Embed.md) | Represents an embed node.|
| [`Twig_Node_Expression`](./classes/Twig_Node_Expression.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Array`](./classes/Twig_Node_Expression_Array.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_AssignName`](./classes/Twig_Node_Expression_AssignName.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary`](./classes/Twig_Node_Expression_Binary.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Add`](./classes/Twig_Node_Expression_Binary_Add.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_And`](./classes/Twig_Node_Expression_Binary_And.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_BitwiseAnd`](./classes/Twig_Node_Expression_Binary_BitwiseAnd.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_BitwiseOr`](./classes/Twig_Node_Expression_Binary_BitwiseOr.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_BitwiseXor`](./classes/Twig_Node_Expression_Binary_BitwiseXor.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Concat`](./classes/Twig_Node_Expression_Binary_Concat.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Div`](./classes/Twig_Node_Expression_Binary_Div.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_EndsWith`](./classes/Twig_Node_Expression_Binary_EndsWith.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Equal`](./classes/Twig_Node_Expression_Binary_Equal.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_FloorDiv`](./classes/Twig_Node_Expression_Binary_FloorDiv.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Greater`](./classes/Twig_Node_Expression_Binary_Greater.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_GreaterEqual`](./classes/Twig_Node_Expression_Binary_GreaterEqual.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_In`](./classes/Twig_Node_Expression_Binary_In.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Less`](./classes/Twig_Node_Expression_Binary_Less.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_LessEqual`](./classes/Twig_Node_Expression_Binary_LessEqual.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Matches`](./classes/Twig_Node_Expression_Binary_Matches.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Mod`](./classes/Twig_Node_Expression_Binary_Mod.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Mul`](./classes/Twig_Node_Expression_Binary_Mul.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_NotEqual`](./classes/Twig_Node_Expression_Binary_NotEqual.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_NotIn`](./classes/Twig_Node_Expression_Binary_NotIn.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Or`](./classes/Twig_Node_Expression_Binary_Or.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Power`](./classes/Twig_Node_Expression_Binary_Power.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Range`](./classes/Twig_Node_Expression_Binary_Range.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_StartsWith`](./classes/Twig_Node_Expression_Binary_StartsWith.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Sub`](./classes/Twig_Node_Expression_Binary_Sub.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_BlockReference`](./classes/Twig_Node_Expression_BlockReference.md) | Represents a block call node.|
| [`Twig_Node_Expression_Call`](./classes/Twig_Node_Expression_Call.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Conditional`](./classes/Twig_Node_Expression_Conditional.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Constant`](./classes/Twig_Node_Expression_Constant.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_ExtensionReference`](./classes/Twig_Node_Expression_ExtensionReference.md) | Represents an extension call node.|
| [`Twig_Node_Expression_Filter`](./classes/Twig_Node_Expression_Filter.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Filter_Default`](./classes/Twig_Node_Expression_Filter_Default.md) | Returns the value or the default value when it is undefined or empty.|
| [`Twig_Node_Expression_Function`](./classes/Twig_Node_Expression_Function.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_GetAttr`](./classes/Twig_Node_Expression_GetAttr.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_MethodCall`](./classes/Twig_Node_Expression_MethodCall.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Name`](./classes/Twig_Node_Expression_Name.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_NullCoalesce`](./classes/Twig_Node_Expression_NullCoalesce.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Parent`](./classes/Twig_Node_Expression_Parent.md) | Represents a parent node.|
| [`Twig_Node_Expression_TempName`](./classes/Twig_Node_Expression_TempName.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Test`](./classes/Twig_Node_Expression_Test.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Test_Constant`](./classes/Twig_Node_Expression_Test_Constant.md) | Checks if a variable is the exact same value as a constant.|
| [`Twig_Node_Expression_Test_Defined`](./classes/Twig_Node_Expression_Test_Defined.md) | Checks if a variable is defined in the current context.|
| [`Twig_Node_Expression_Test_Divisibleby`](./classes/Twig_Node_Expression_Test_Divisibleby.md) | Checks if a variable is divisible by a number.|
| [`Twig_Node_Expression_Test_Even`](./classes/Twig_Node_Expression_Test_Even.md) | Checks if a number is even.|
| [`Twig_Node_Expression_Test_Null`](./classes/Twig_Node_Expression_Test_Null.md) | Checks that a variable is null.|
| [`Twig_Node_Expression_Test_Odd`](./classes/Twig_Node_Expression_Test_Odd.md) | Checks if a number is odd.|
| [`Twig_Node_Expression_Test_Sameas`](./classes/Twig_Node_Expression_Test_Sameas.md) | Checks if a variable is the same as another one (=== in PHP).|
| [`Twig_Node_Expression_Unary`](./classes/Twig_Node_Expression_Unary.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Unary_Neg`](./classes/Twig_Node_Expression_Unary_Neg.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Unary_Not`](./classes/Twig_Node_Expression_Unary_Not.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Unary_Pos`](./classes/Twig_Node_Expression_Unary_Pos.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Flush`](./classes/Twig_Node_Flush.md) | Represents a flush node.|
| [`Twig_Node_For`](./classes/Twig_Node_For.md) | Represents a for node.|
| [`Twig_Node_ForLoop`](./classes/Twig_Node_ForLoop.md) | Internal node used by the for node.|
| [`Twig_Node_If`](./classes/Twig_Node_If.md) | Represents an if node.|
| [`Twig_Node_Import`](./classes/Twig_Node_Import.md) | Represents an import node.|
| [`Twig_Node_Include`](./classes/Twig_Node_Include.md) | Represents an include node.|
| [`Twig_Node_Macro`](./classes/Twig_Node_Macro.md) | Represents a macro node.|
| [`Twig_Node_Module`](./classes/Twig_Node_Module.md) | Represents a module node.|
| [`Twig_Node_Print`](./classes/Twig_Node_Print.md) | Represents a node that outputs an expression.|
| [`Twig_Node_Sandbox`](./classes/Twig_Node_Sandbox.md) | Represents a sandbox node.|
| [`Twig_Node_SandboxedPrint`](./classes/Twig_Node_SandboxedPrint.md) | Adds a check for the __toString() method when the variable is an object and the sandbox is activated.|
| [`Twig_Node_Set`](./classes/Twig_Node_Set.md) | Represents a set node.|
| [`Twig_Node_SetTemp`](./classes/Twig_Node_SetTemp.md) | |
| [`Twig_Node_Spaceless`](./classes/Twig_Node_Spaceless.md) | Represents a spaceless node.|
| [`Twig_Node_Text`](./classes/Twig_Node_Text.md) | Represents a text node.|
| [`Twig_Node_With`](./classes/Twig_Node_With.md) | Represents a nested &quot;with&quot; scope.|
| [`Twig_Parser`](./classes/Twig_Parser.md) | Default parser implementation.|
| [`Twig_Profiler_Dumper_Base`](./classes/Twig_Profiler_Dumper_Base.md) | |
| [`Twig_Profiler_Dumper_Blackfire`](./classes/Twig_Profiler_Dumper_Blackfire.md) | |
| [`Twig_Profiler_Dumper_Html`](./classes/Twig_Profiler_Dumper_Html.md) | |
| [`Twig_Profiler_Dumper_Text`](./classes/Twig_Profiler_Dumper_Text.md) | |
| [`Twig_Profiler_NodeVisitor_Profiler`](./classes/Twig_Profiler_NodeVisitor_Profiler.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`Twig_Profiler_Node_EnterProfile`](./classes/Twig_Profiler_Node_EnterProfile.md) | Represents a profile enter node.|
| [`Twig_Profiler_Node_LeaveProfile`](./classes/Twig_Profiler_Node_LeaveProfile.md) | Represents a profile leave node.|
| [`Twig_Profiler_Profile`](./classes/Twig_Profiler_Profile.md) | |
| [`Twig_RuntimeLoaderInterface`](./classes/Twig_RuntimeLoaderInterface.md) | Creates runtime implementations for Twig elements (filters/functions/tests).|
| [`Twig_Sandbox_SecurityError`](./classes/Twig_Sandbox_SecurityError.md) | Exception thrown when a security error occurs at runtime.|
| [`Twig_Sandbox_SecurityNotAllowedFilterError`](./classes/Twig_Sandbox_SecurityNotAllowedFilterError.md) | Exception thrown when a not allowed filter is used in a template.|
| [`Twig_Sandbox_SecurityNotAllowedFunctionError`](./classes/Twig_Sandbox_SecurityNotAllowedFunctionError.md) | Exception thrown when a not allowed function is used in a template.|
| [`Twig_Sandbox_SecurityNotAllowedMethodError`](./classes/Twig_Sandbox_SecurityNotAllowedMethodError.md) | Exception thrown when a not allowed class method is used in a template.|
| [`Twig_Sandbox_SecurityNotAllowedPropertyError`](./classes/Twig_Sandbox_SecurityNotAllowedPropertyError.md) | Exception thrown when a not allowed class property is used in a template.|
| [`Twig_Sandbox_SecurityNotAllowedTagError`](./classes/Twig_Sandbox_SecurityNotAllowedTagError.md) | Exception thrown when a not allowed tag is used in a template.|
| [`Twig_Sandbox_SecurityPolicy`](./classes/Twig_Sandbox_SecurityPolicy.md) | Represents a security policy which need to be enforced when sandbox mode is enabled.|
| [`Twig_Sandbox_SecurityPolicyInterface`](./classes/Twig_Sandbox_SecurityPolicyInterface.md) | Interface that all security policy classes must implements.|
| [`Twig_SimpleFilter`](./classes/Twig_SimpleFilter.md) | Represents a template filter.|
| [`Twig_SimpleFunction`](./classes/Twig_SimpleFunction.md) | Represents a template function.|
| [`Twig_SimpleTest`](./classes/Twig_SimpleTest.md) | Represents a template test.|
| [`Twig_Source`](./classes/Twig_Source.md) | Holds information about a non-compiled Twig template.|
| [`Twig_SourceContextLoaderInterface`](./classes/Twig_SourceContextLoaderInterface.md) | Adds a getSourceContext() method for loaders.|
| [`Twig_Template`](./classes/Twig_Template.md) | |
| [`Twig_TemplateWrapper`](./classes/Twig_TemplateWrapper.md) | Exposes a template to userland.|
| [`Twig_Test`](./classes/Twig_Test.md) | Represents a template test.|
| [`Twig_Test_Function`](./classes/Twig_Test_Function.md) | Represents a function template test.|
| [`Twig_Test_IntegrationTestCase`](./classes/Twig_Test_IntegrationTestCase.md) | Integration test helper.|
| [`Twig_Test_Method`](./classes/Twig_Test_Method.md) | Represents a method template test.|
| [`Twig_Test_Node`](./classes/Twig_Test_Node.md) | Represents a template test as a Node.|
| [`Twig_Test_NodeTestCase`](./classes/Twig_Test_NodeTestCase.md) | |
| [`Twig_Token`](./classes/Twig_Token.md) | Represents a Token.|
| [`Twig_TokenParser`](./classes/Twig_TokenParser.md) | Base class for all token parsers.|
| [`Twig_TokenParserBroker`](./classes/Twig_TokenParserBroker.md) | Default implementation of a token parser broker.|
| [`Twig_TokenParserInterface`](./classes/Twig_TokenParserInterface.md) | Interface implemented by token parsers.|
| [`Twig_TokenParser_AutoEscape`](./classes/Twig_TokenParser_AutoEscape.md) | Marks a section of a template to be escaped or not.|
| [`Twig_TokenParser_Block`](./classes/Twig_TokenParser_Block.md) | Marks a section of a template as being reusable.|
| [`Twig_TokenParser_Deprecated`](./classes/Twig_TokenParser_Deprecated.md) | Deprecates a section of a template.|
| [`Twig_TokenParser_Do`](./classes/Twig_TokenParser_Do.md) | Evaluates an expression, discarding the returned value.|
| [`Twig_TokenParser_Embed`](./classes/Twig_TokenParser_Embed.md) | Embeds a template.|
| [`Twig_TokenParser_Extends`](./classes/Twig_TokenParser_Extends.md) | Extends a template by another one.|
| [`Twig_TokenParser_Filter`](./classes/Twig_TokenParser_Filter.md) | Filters a section of a template by applying filters.|
| [`Twig_TokenParser_Flush`](./classes/Twig_TokenParser_Flush.md) | Flushes the output to the client.|
| [`Twig_TokenParser_For`](./classes/Twig_TokenParser_For.md) | Loops over each item of a sequence.|
| [`Twig_TokenParser_From`](./classes/Twig_TokenParser_From.md) | Imports macros.|
| [`Twig_TokenParser_If`](./classes/Twig_TokenParser_If.md) | Tests a condition.|
| [`Twig_TokenParser_Import`](./classes/Twig_TokenParser_Import.md) | Imports macros.|
| [`Twig_TokenParser_Include`](./classes/Twig_TokenParser_Include.md) | Includes a template.|
| [`Twig_TokenParser_Macro`](./classes/Twig_TokenParser_Macro.md) | Defines a macro.|
| [`Twig_TokenParser_Sandbox`](./classes/Twig_TokenParser_Sandbox.md) | Marks a section of a template as untrusted code that must be evaluated in the sandbox mode.|
| [`Twig_TokenParser_Set`](./classes/Twig_TokenParser_Set.md) | Defines a variable.|
| [`Twig_TokenParser_Spaceless`](./classes/Twig_TokenParser_Spaceless.md) | Remove whitespaces between HTML tags.|
| [`Twig_TokenParser_Use`](./classes/Twig_TokenParser_Use.md) | Imports blocks defined in another template into the current template.|
| [`Twig_TokenParser_With`](./classes/Twig_TokenParser_With.md) | Creates a nested scope.|
| [`Twig_TokenStream`](./classes/Twig_TokenStream.md) | Represents a token stream.|
| [`Twig_Util_DeprecationCollector`](./classes/Twig_Util_DeprecationCollector.md) | |
| [`Twig_Util_TemplateDirIterator`](./classes/Twig_Util_TemplateDirIterator.md) | |
| [`TwitterPlugin`](./classes/TwitterPlugin.md) | |
| [`UnhandledMatchError`](./classes/UnhandledMatchError.md) | |
| [`UseTest`](./classes/UseTest.md) | |
| [`ValueError`](./classes/ValueError.md) | |
| [`YoutubePlugin`](./classes/YoutubePlugin.md) | |
| [`ab`](./classes/ab.md) | |
| [`customSingleton`](./classes/customSingleton.md) | |
| [`customSingletonConfiguration`](./classes/customSingletonConfiguration.md) | |
| [`erMyClass1`](./classes/erMyClass1.md) | |
| [`erMyClass2`](./classes/erMyClass2.md) | |
| [`erYourClass1`](./classes/erYourClass1.md) | |
| [`erYourClass2`](./classes/erYourClass2.md) | |
| [`extTranslationTest`](./classes/extTranslationTest.md) | |
| [`ezcBase`](./classes/ezcBase.md) | Base class implements the methods needed to use the eZ components.|
| [`ezcBaseAutoloadException`](./classes/ezcBaseAutoloadException.md) | ezcBaseAutoloadException is thrown whenever a class can not be found with<br />the autoload mechanism.|
| [`ezcBaseAutoloadOptions`](./classes/ezcBaseAutoloadOptions.md) | Class containing the basic options for ezcBase&#039; autoload.|
| [`ezcBaseDoubleClassRepositoryPrefixException`](./classes/ezcBaseDoubleClassRepositoryPrefixException.md) | ezcBaseDoubleClassRepositoryPrefixException is thrown whenever you try to<br />register a class repository with a prefix that has already been added<br />before.|
| [`ezcBaseException`](./classes/ezcBaseException.md) | ezcBaseException is a container from which all other exceptions in the<br />components library descent.|
| [`ezcBaseExtensionNotFoundException`](./classes/ezcBaseExtensionNotFoundException.md) | ezcBaseExtensionNotFoundException is thrown when a requested PHP extension was not found.|
| [`ezcBaseFeatures`](./classes/ezcBaseFeatures.md) | Provides methods needed to check for features.|
| [`ezcBaseFeaturesUnixTest`](./classes/ezcBaseFeaturesUnixTest.md) | |
| [`ezcBaseFeaturesWindowsTest`](./classes/ezcBaseFeaturesWindowsTest.md) | |
| [`ezcBaseFileCalculateRelativePathTest`](./classes/ezcBaseFileCalculateRelativePathTest.md) | |
| [`ezcBaseFileCopyRecursiveTest`](./classes/ezcBaseFileCopyRecursiveTest.md) | |
| [`ezcBaseFileException`](./classes/ezcBaseFileException.md) | ezcBaseFileException is the exception from which all file related exceptions<br />inherit.|
| [`ezcBaseFileFindContext`](./classes/ezcBaseFileFindContext.md) | Struct which defines the information collected by the file walker for locating files.|
| [`ezcBaseFileFindRecursiveTest`](./classes/ezcBaseFileFindRecursiveTest.md) | |
| [`ezcBaseFileIoException`](./classes/ezcBaseFileIoException.md) | ezcBaseFileIoException is thrown when a problem occurs while writing<br />and reading to/from an open file.|
| [`ezcBaseFileIsAbsoluteTest`](./classes/ezcBaseFileIsAbsoluteTest.md) | |
| [`ezcBaseFileNotFoundException`](./classes/ezcBaseFileNotFoundException.md) | ezcBaseFileNotFoundException is thrown when a file or directory was tried to<br />be opened, but did not exist.|
| [`ezcBaseFilePermissionException`](./classes/ezcBaseFilePermissionException.md) | ezcBaseFilePermissionException is thrown whenever a permission problem with<br />a file, directory or stream occurred.|
| [`ezcBaseFileRemoveRecursiveTest`](./classes/ezcBaseFileRemoveRecursiveTest.md) | |
| [`ezcBaseFunctionalityNotSupportedException`](./classes/ezcBaseFunctionalityNotSupportedException.md) | The ezcBaseFunctionalityNotSupportedException is thrown when a requested<br />PHP function was not found.|
| [`ezcBaseInit`](./classes/ezcBaseInit.md) | Provides a method to implement delayed initialization of objects.|
| [`ezcBaseInitCallbackConfiguredException`](./classes/ezcBaseInitCallbackConfiguredException.md) | ezcBaseInitCallbackConfiguredException is thrown when you try to assign a<br />callback clasname to an identifier, while there is already a callback class<br />configured for this identifier.|
| [`ezcBaseInitInvalidCallbackClassException`](./classes/ezcBaseInitInvalidCallbackClassException.md) | Exception that is thrown if an invalid class is passed as callback class for<br />delayed object configuration.|
| [`ezcBaseInitTest`](./classes/ezcBaseInitTest.md) | |
| [`ezcBaseInvalidParentClassException`](./classes/ezcBaseInvalidParentClassException.md) | Exception that is thrown if an invalid class is passed as custom class.|
| [`ezcBaseMetaData`](./classes/ezcBaseMetaData.md) | Base class implements ways of fetching information about the installed<br />eZ Components. It knows whether to use the PEAR registry or the bundled XML<br />file, depending on how eZ Components is installed.|
| [`ezcBaseMetaDataPearReader`](./classes/ezcBaseMetaDataPearReader.md) | Base class implements ways of fetching information about the installed<br />eZ Components when installed as tarball.|
| [`ezcBaseMetaDataPearTest`](./classes/ezcBaseMetaDataPearTest.md) | |
| [`ezcBaseMetaDataTarballReader`](./classes/ezcBaseMetaDataTarballReader.md) | Base class implements ways of fetching information about the installed<br />eZ Components when installed as tarball.|
| [`ezcBaseOptions`](./classes/ezcBaseOptions.md) | Base options class for all eZ components.|
| [`ezcBaseOptionsTest`](./classes/ezcBaseOptionsTest.md) | |
| [`ezcBasePropertyNotFoundException`](./classes/ezcBasePropertyNotFoundException.md) | ezcBasePropertyNotFoundException is thrown whenever a non existent property<br />is accessed in the Components library.|
| [`ezcBasePropertyPermissionException`](./classes/ezcBasePropertyPermissionException.md) | ezcBasePropertyPermissionException is thrown whenever a read-only property<br />is tried to be changed, or when a write-only property was accessed for reading.|
| [`ezcBaseRepositoryDirectory`](./classes/ezcBaseRepositoryDirectory.md) | Struct which defines a repository directory.|
| [`ezcBaseSettingNotFoundException`](./classes/ezcBaseSettingNotFoundException.md) | ezcBaseSettingNotFoundException is thrown whenever there is a name passed as<br />part as the options array to setOptions() for an option that doesn&#039;t exist.|
| [`ezcBaseSettingValueException`](./classes/ezcBaseSettingValueException.md) | ezcBaseSettingValueExeception is thrown whenever a value to a class&#039;<br />configuration option is either of the wrong type, or has a wrong value.|
| [`ezcBaseStruct`](./classes/ezcBaseStruct.md) | Base class for all struct classes.|
| [`ezcBaseStructTest`](./classes/ezcBaseStructTest.md) | |
| [`ezcBaseTest`](./classes/ezcBaseTest.md) | |
| [`ezcBaseTestOptions`](./classes/ezcBaseTestOptions.md) | Base options class for all eZ components.|
| [`ezcBaseValueException`](./classes/ezcBaseValueException.md) | ezcBaseValueException is thrown whenever the type or value of the given<br />variable is not as expected.|
| [`ezcBaseWhateverException`](./classes/ezcBaseWhateverException.md) | ezcBaseWhateverException is thrown whenever something is so seriously wrong.|
| [`ezcConverterDocbookEzXmlOptionsTests`](./classes/ezcConverterDocbookEzXmlOptionsTests.md) | Test suite for class.|
| [`ezcConverterEzXmlDocbookOptionsTests`](./classes/ezcConverterEzXmlDocbookOptionsTests.md) | Test suite for class.|
| [`ezcConverterOdtOptionsTests`](./classes/ezcConverterOdtOptionsTests.md) | Test suite for class.|
| [`ezcConverterOptionsTests`](./classes/ezcConverterOptionsTests.md) | Test suite for class.|
| [`ezcConverterRstOptionsTests`](./classes/ezcConverterRstOptionsTests.md) | Test suite for class.|
| [`ezcConverterWikiOptionsTests`](./classes/ezcConverterWikiOptionsTests.md) | Test suite for class.|
| [`ezcConverterXsltOptionsTests`](./classes/ezcConverterXsltOptionsTests.md) | Test suite for class.|
| [`ezcDocument`](./classes/ezcDocument.md) | A base class for document type handlers.|
| [`ezcDocumentAlnumListItemGenerator`](./classes/ezcDocumentAlnumListItemGenerator.md) | List item generator|
| [`ezcDocumentAlphaListItemGenerator`](./classes/ezcDocumentAlphaListItemGenerator.md) | Numbered list item generator|
| [`ezcDocumentBBCode`](./classes/ezcDocumentBBCode.md) | Document handler for BBCode text documents.|
| [`ezcDocumentBBCodeBlockLevelNode`](./classes/ezcDocumentBBCodeBlockLevelNode.md) | Struct for BBCode document block level abstract syntax tree nodes|
| [`ezcDocumentBBCodeBulletListNode`](./classes/ezcDocumentBBCodeBulletListNode.md) | Struct for BBCode document bullet list abstract syntax tree nodes|
| [`ezcDocumentBBCodeClosingTagNode`](./classes/ezcDocumentBBCodeClosingTagNode.md) | Struct for BBCode document inline abstract syntax tree nodes|
| [`ezcDocumentBBCodeDocbookVisitor`](./classes/ezcDocumentBBCodeDocbookVisitor.md) | Docbook visitor for the BBCode AST.|
| [`ezcDocumentBBCodeDocbookVisitorTests`](./classes/ezcDocumentBBCodeDocbookVisitorTests.md) | Test suite for class.|
| [`ezcDocumentBBCodeDocumentNode`](./classes/ezcDocumentBBCodeDocumentNode.md) | Struct for BBCode document abstract syntax tree root nodes|
| [`ezcDocumentBBCodeEmailPlugin`](./classes/ezcDocumentBBCodeEmailPlugin.md) | Visitor for bbcode email tags|
| [`ezcDocumentBBCodeEmphasisPlugin`](./classes/ezcDocumentBBCodeEmphasisPlugin.md) | Visitor for bbcode emphasis tags|
| [`ezcDocumentBBCodeEndOfFileToken`](./classes/ezcDocumentBBCodeEndOfFileToken.md) | Struct for BBCode document end of file tokens|
| [`ezcDocumentBBCodeEnumeratedListNode`](./classes/ezcDocumentBBCodeEnumeratedListNode.md) | Struct for BBCode document enumerated list abstract syntax tree nodes|
| [`ezcDocumentBBCodeImagePlugin`](./classes/ezcDocumentBBCodeImagePlugin.md) | Visitor for bbcode url tags|
| [`ezcDocumentBBCodeInlineLiteralNode`](./classes/ezcDocumentBBCodeInlineLiteralNode.md) | Struct for BBCode document inline literal abstract syntax tree nodes|
| [`ezcDocumentBBCodeLineBreakToken`](./classes/ezcDocumentBBCodeLineBreakToken.md) | Struct for BBCode document inline line break tokens|
| [`ezcDocumentBBCodeListEndNode`](./classes/ezcDocumentBBCodeListEndNode.md) | Struct for BBCode document list end abstract syntax tree nodes|
| [`ezcDocumentBBCodeListItemNode`](./classes/ezcDocumentBBCodeListItemNode.md) | Struct for BBCode document inline literal abstract syntax tree nodes|
| [`ezcDocumentBBCodeListItemToken`](./classes/ezcDocumentBBCodeListItemToken.md) | Struct for BBCode document nline markup tokens|
| [`ezcDocumentBBCodeListNode`](./classes/ezcDocumentBBCodeListNode.md) | Struct for BBCode document list abstract syntax tree nodes|
| [`ezcDocumentBBCodeLiteralBlockNode`](./classes/ezcDocumentBBCodeLiteralBlockNode.md) | Struct for BBCode document literal block abstract syntax tree nodes|
| [`ezcDocumentBBCodeLiteralBlockToken`](./classes/ezcDocumentBBCodeLiteralBlockToken.md) | Struct for BBCode document literal block tokens|
| [`ezcDocumentBBCodeNewLineToken`](./classes/ezcDocumentBBCodeNewLineToken.md) | Struct for BBCode document new line tokens|
| [`ezcDocumentBBCodeNoMarkupPlugin`](./classes/ezcDocumentBBCodeNoMarkupPlugin.md) | Visitor for bbcode emphasis tags|
| [`ezcDocumentBBCodeNode`](./classes/ezcDocumentBBCodeNode.md) | Struct for BBCode document document abstract syntax tree nodes|
| [`ezcDocumentBBCodeOptions`](./classes/ezcDocumentBBCodeOptions.md) | Class containing the basic options for the ezcDocumentBBCode.|
| [`ezcDocumentBBCodeParagraphNode`](./classes/ezcDocumentBBCodeParagraphNode.md) | Struct for BBCode document paragraph abstract syntax tree nodes|
| [`ezcDocumentBBCodeParser`](./classes/ezcDocumentBBCodeParser.md) | Parser for bbcode documents.|
| [`ezcDocumentBBCodeParserTests`](./classes/ezcDocumentBBCodeParserTests.md) | Test suite for class.|
| [`ezcDocumentBBCodePlugin`](./classes/ezcDocumentBBCodePlugin.md) | Visitor for bbcode plugins|
| [`ezcDocumentBBCodeQuotePlugin`](./classes/ezcDocumentBBCodeQuotePlugin.md) | Visitor for bbcode emphasis tags|
| [`ezcDocumentBBCodeSpecialCharsToken`](./classes/ezcDocumentBBCodeSpecialCharsToken.md) | Struct for BBCode document special character tokens|
| [`ezcDocumentBBCodeTagCloseToken`](./classes/ezcDocumentBBCodeTagCloseToken.md) | Struct for BBCode document nline markup tokens|
| [`ezcDocumentBBCodeTagNode`](./classes/ezcDocumentBBCodeTagNode.md) | Struct for BBCode document inline abstract syntax tree nodes|
| [`ezcDocumentBBCodeTagOpenToken`](./classes/ezcDocumentBBCodeTagOpenToken.md) | Struct for BBCode document nline markup tokens|
| [`ezcDocumentBBCodeTextLineToken`](./classes/ezcDocumentBBCodeTextLineToken.md) | Struct for BBCode document text line tokens|
| [`ezcDocumentBBCodeTextNode`](./classes/ezcDocumentBBCodeTextNode.md) | Struct for BBCode document abstract syntax tree text nodes|
| [`ezcDocumentBBCodeToken`](./classes/ezcDocumentBBCodeToken.md) | Struct for BBCode document document tokens|
| [`ezcDocumentBBCodeTokenizer`](./classes/ezcDocumentBBCodeTokenizer.md) | Tokenizer for bbcode documents|
| [`ezcDocumentBBCodeTokenizerTests`](./classes/ezcDocumentBBCodeTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentBBCodeUrlPlugin`](./classes/ezcDocumentBBCodeUrlPlugin.md) | Visitor for bbcode url tags|
| [`ezcDocumentBBCodeVisitor`](./classes/ezcDocumentBBCodeVisitor.md) | Abstract visitor base for BBCode documents represented by the parser AST.|
| [`ezcDocumentBBCodeWhitespaceToken`](./classes/ezcDocumentBBCodeWhitespaceToken.md) | Struct for BBCode document whitespace tokens|
| [`ezcDocumentBulletListItemGenerator`](./classes/ezcDocumentBulletListItemGenerator.md) | List item generator.|
| [`ezcDocumentConfluenceWiki`](./classes/ezcDocumentConfluenceWiki.md) | Document handler for Confluence wiki text documents.|
| [`ezcDocumentConversionException`](./classes/ezcDocumentConversionException.md) | Exception thrown, when the RST parser could not parse asome token sequence.|
| [`ezcDocumentConverter`](./classes/ezcDocumentConverter.md) | A base class for document type converters.|
| [`ezcDocumentConverterDocbookToEzXmlTests`](./classes/ezcDocumentConverterDocbookToEzXmlTests.md) | Test suite for class.|
| [`ezcDocumentConverterDocbookToHtmlTests`](./classes/ezcDocumentConverterDocbookToHtmlTests.md) | Test suite for class.|
| [`ezcDocumentConverterDocbookToHtmlXsltTests`](./classes/ezcDocumentConverterDocbookToHtmlXsltTests.md) | Test suite for class.|
| [`ezcDocumentConverterDocbookToOdtTests`](./classes/ezcDocumentConverterDocbookToOdtTests.md) | Test suite for class.|
| [`ezcDocumentConverterDocbookToRstTests`](./classes/ezcDocumentConverterDocbookToRstTests.md) | Test suite for class.|
| [`ezcDocumentConverterDocbookToWikiTests`](./classes/ezcDocumentConverterDocbookToWikiTests.md) | Test suite for class.|
| [`ezcDocumentConverterOptions`](./classes/ezcDocumentConverterOptions.md) | Class containing the basic options for the ezcDocumentConverter|
| [`ezcDocumentConverterTests`](./classes/ezcDocumentConverterTests.md) | Test suite for class.|
| [`ezcDocumentCreoleWiki`](./classes/ezcDocumentCreoleWiki.md) | Document handler for Creole wiki text documents.|
| [`ezcDocumentDocbook`](./classes/ezcDocumentDocbook.md) | The document handler for the docbook document markup.|
| [`ezcDocumentDocbookOptions`](./classes/ezcDocumentDocbookOptions.md) | Class containing the basic options for the ezcDocumentDocbook class.|
| [`ezcDocumentDocbookOptionsTests`](./classes/ezcDocumentDocbookOptionsTests.md) | Test suite for class.|
| [`ezcDocumentDocbookTests`](./classes/ezcDocumentDocbookTests.md) | Test suite for class.|
| [`ezcDocumentDocbookToEzXmlAnchorHandler`](./classes/ezcDocumentDocbookToEzXmlAnchorHandler.md) | Visit anchor elements.|
| [`ezcDocumentDocbookToEzXmlCommentHandler`](./classes/ezcDocumentDocbookToEzXmlCommentHandler.md) | Visit docbook comment.|
| [`ezcDocumentDocbookToEzXmlConverter`](./classes/ezcDocumentDocbookToEzXmlConverter.md) | Converter for docbook to XEzXml with a PHP callback based mechanism, for fast<br />and easy PHP based extensible transformations.|
| [`ezcDocumentDocbookToEzXmlConverterOptions`](./classes/ezcDocumentDocbookToEzXmlConverterOptions.md) | Class containing the basic options for the ezcDocumentEzp3Xml class|
| [`ezcDocumentDocbookToEzXmlEmphasisHandler`](./classes/ezcDocumentDocbookToEzXmlEmphasisHandler.md) | Visit emphasis.|
| [`ezcDocumentDocbookToEzXmlExternalLinkHandler`](./classes/ezcDocumentDocbookToEzXmlExternalLinkHandler.md) | Visit external links.|
| [`ezcDocumentDocbookToEzXmlFootnoteHandler`](./classes/ezcDocumentDocbookToEzXmlFootnoteHandler.md) | Visit footnotes|
| [`ezcDocumentDocbookToEzXmlIgnoreHandler`](./classes/ezcDocumentDocbookToEzXmlIgnoreHandler.md) | Handler for elements, which are safe to ignore|
| [`ezcDocumentDocbookToEzXmlInternalLinkHandler`](./classes/ezcDocumentDocbookToEzXmlInternalLinkHandler.md) | Visit internal links.|
| [`ezcDocumentDocbookToEzXmlItemizedListHandler`](./classes/ezcDocumentDocbookToEzXmlItemizedListHandler.md) | Visit itemized lists|
| [`ezcDocumentDocbookToEzXmlLiteralLayoutHandler`](./classes/ezcDocumentDocbookToEzXmlLiteralLayoutHandler.md) | Visit literallayout elements|
| [`ezcDocumentDocbookToEzXmlMappingHandler`](./classes/ezcDocumentDocbookToEzXmlMappingHandler.md) | Simple mapping handler|
| [`ezcDocumentDocbookToEzXmlOrderedListHandler`](./classes/ezcDocumentDocbookToEzXmlOrderedListHandler.md) | Visit ordered lists.|
| [`ezcDocumentDocbookToEzXmlParagraphHandler`](./classes/ezcDocumentDocbookToEzXmlParagraphHandler.md) | Visit paragraphs|
| [`ezcDocumentDocbookToEzXmlRecurseHandler`](./classes/ezcDocumentDocbookToEzXmlRecurseHandler.md) | Handler for elements, which are self to ignore itself, and just should rbe<br />recursed into.|
| [`ezcDocumentDocbookToEzXmlSectionHandler`](./classes/ezcDocumentDocbookToEzXmlSectionHandler.md) | Visit docbook sections.|
| [`ezcDocumentDocbookToEzXmlTableCellHandler`](./classes/ezcDocumentDocbookToEzXmlTableCellHandler.md) | Visit table cells|
| [`ezcDocumentDocbookToEzXmlTableHandler`](./classes/ezcDocumentDocbookToEzXmlTableHandler.md) | Visit table|
| [`ezcDocumentDocbookToEzXmlTitleHandler`](./classes/ezcDocumentDocbookToEzXmlTitleHandler.md) | Visit docbook section titles|
| [`ezcDocumentDocbookToHtmlAnchorHandler`](./classes/ezcDocumentDocbookToHtmlAnchorHandler.md) | Visit anchor elements|
| [`ezcDocumentDocbookToHtmlBaseHandler`](./classes/ezcDocumentDocbookToHtmlBaseHandler.md) | Basic converter which stores a list of handlers for each node in the docbook<br />element tree. Those handlers will be executed for the elements, when found.|
| [`ezcDocumentDocbookToHtmlBlockquoteHandler`](./classes/ezcDocumentDocbookToHtmlBlockquoteHandler.md) | Visit blockquotes|
| [`ezcDocumentDocbookToHtmlCommentHandler`](./classes/ezcDocumentDocbookToHtmlCommentHandler.md) | Visit docbook comment.|
| [`ezcDocumentDocbookToHtmlConverter`](./classes/ezcDocumentDocbookToHtmlConverter.md) | Converter for docbook to XHtml with a PHP callback based mechanism, for fast<br />and easy PHP based extensible transformations.|
| [`ezcDocumentDocbookToHtmlConverterOptions`](./classes/ezcDocumentDocbookToHtmlConverterOptions.md) | Class containing the basic options for the ezcDocumentEzp3Xml class|
| [`ezcDocumentDocbookToHtmlDefinitionListEntryHandler`](./classes/ezcDocumentDocbookToHtmlDefinitionListEntryHandler.md) | Visit definition list entries|
| [`ezcDocumentDocbookToHtmlEmphasisHandler`](./classes/ezcDocumentDocbookToHtmlEmphasisHandler.md) | Visit emphasis|
| [`ezcDocumentDocbookToHtmlExternalLinkHandler`](./classes/ezcDocumentDocbookToHtmlExternalLinkHandler.md) | Visit external links|
| [`ezcDocumentDocbookToHtmlFootnoteHandler`](./classes/ezcDocumentDocbookToHtmlFootnoteHandler.md) | Visit footnotes|
| [`ezcDocumentDocbookToHtmlHeadHandler`](./classes/ezcDocumentDocbookToHtmlHeadHandler.md) | Visit docbook sectioninfo elements|
| [`ezcDocumentDocbookToHtmlIgnoreHandler`](./classes/ezcDocumentDocbookToHtmlIgnoreHandler.md) | Handler for elements, which are safe to ignore|
| [`ezcDocumentDocbookToHtmlInternalLinkHandler`](./classes/ezcDocumentDocbookToHtmlInternalLinkHandler.md) | Visit internal links.|
| [`ezcDocumentDocbookToHtmlLiteralLayoutHandler`](./classes/ezcDocumentDocbookToHtmlLiteralLayoutHandler.md) | Visit literallayout elements|
| [`ezcDocumentDocbookToHtmlMappingHandler`](./classes/ezcDocumentDocbookToHtmlMappingHandler.md) | Simple mapping handler|
| [`ezcDocumentDocbookToHtmlMediaObjectHandler`](./classes/ezcDocumentDocbookToHtmlMediaObjectHandler.md) | Visit media objects|
| [`ezcDocumentDocbookToHtmlParagraphHandler`](./classes/ezcDocumentDocbookToHtmlParagraphHandler.md) | Visit paragraphs|
| [`ezcDocumentDocbookToHtmlSectionHandler`](./classes/ezcDocumentDocbookToHtmlSectionHandler.md) | Visit docbook sections|
| [`ezcDocumentDocbookToHtmlSpecialParagraphHandler`](./classes/ezcDocumentDocbookToHtmlSpecialParagraphHandler.md) | Visit special paragraphs|
| [`ezcDocumentDocbookToHtmlTableCellHandler`](./classes/ezcDocumentDocbookToHtmlTableCellHandler.md) | Visit table cells|
| [`ezcDocumentDocbookToHtmlXsltConverter`](./classes/ezcDocumentDocbookToHtmlXsltConverter.md) | Converter for Docbook documents to XHtml using an available XSLT.|
| [`ezcDocumentDocbookToHtmlXsltConverterOptions`](./classes/ezcDocumentDocbookToHtmlXsltConverterOptions.md) | Class containing the basic options for the docbook to HTMl conversion.|
| [`ezcDocumentDocbookToOdtAnchorHandler`](./classes/ezcDocumentDocbookToOdtAnchorHandler.md) | Visit anchors.|
| [`ezcDocumentDocbookToOdtBaseHandler`](./classes/ezcDocumentDocbookToOdtBaseHandler.md) | Base class for ODT visitor handlers.|
| [`ezcDocumentDocbookToOdtCommentHandler`](./classes/ezcDocumentDocbookToOdtCommentHandler.md) | Visit comments.|
| [`ezcDocumentDocbookToOdtConverter`](./classes/ezcDocumentDocbookToOdtConverter.md) | Converter for docbook to ODT with a PHP callback based mechanism, for fast<br />and easy PHP based extensible transformations.|
| [`ezcDocumentDocbookToOdtConverterOptions`](./classes/ezcDocumentDocbookToOdtConverterOptions.md) | Class containing the basic options for the ezcDocumentToOdtConverter.|
| [`ezcDocumentDocbookToOdtFootnoteHandler`](./classes/ezcDocumentDocbookToOdtFootnoteHandler.md) | Visit footnotes.|
| [`ezcDocumentDocbookToOdtIgnoreHandler`](./classes/ezcDocumentDocbookToOdtIgnoreHandler.md) | Handler for elements, which are safe to be ignored.|
| [`ezcDocumentDocbookToOdtInlineHandler`](./classes/ezcDocumentDocbookToOdtInlineHandler.md) | Visit inline elements.|
| [`ezcDocumentDocbookToOdtLinkHandler`](./classes/ezcDocumentDocbookToOdtLinkHandler.md) | Visit links.|
| [`ezcDocumentDocbookToOdtListHandler`](./classes/ezcDocumentDocbookToOdtListHandler.md) | Visit lists.|
| [`ezcDocumentDocbookToOdtLiteralLayoutHandler`](./classes/ezcDocumentDocbookToOdtLiteralLayoutHandler.md) | Visit literallayout sections.|
| [`ezcDocumentDocbookToOdtMappingHandler`](./classes/ezcDocumentDocbookToOdtMappingHandler.md) | Simple mapping handler|
| [`ezcDocumentDocbookToOdtMediaObjectHandler`](./classes/ezcDocumentDocbookToOdtMediaObjectHandler.md) | Visit media objects.|
| [`ezcDocumentDocbookToOdtPageBreakHandler`](./classes/ezcDocumentDocbookToOdtPageBreakHandler.md) | Visit page-breaks.|
| [`ezcDocumentDocbookToOdtParagraphHandler`](./classes/ezcDocumentDocbookToOdtParagraphHandler.md) | Visit paragraphs.|
| [`ezcDocumentDocbookToOdtSectionHandler`](./classes/ezcDocumentDocbookToOdtSectionHandler.md) | Visit docbook sections.|
| [`ezcDocumentDocbookToOdtTableHandler`](./classes/ezcDocumentDocbookToOdtTableHandler.md) | Visit tables.|
| [`ezcDocumentDocbookToOdtUlinkHandler`](./classes/ezcDocumentDocbookToOdtUlinkHandler.md) | Visit ulinks.|
| [`ezcDocumentDocbookToRstBaseHandler`](./classes/ezcDocumentDocbookToRstBaseHandler.md) | Basic converter which stores a list of handlers for each node in the docbook<br />element tree. Those handlers will be executed for the elements, when found.|
| [`ezcDocumentDocbookToRstBeginPageHandler`](./classes/ezcDocumentDocbookToRstBeginPageHandler.md) | Visit begin page elements|
| [`ezcDocumentDocbookToRstBlockquoteHandler`](./classes/ezcDocumentDocbookToRstBlockquoteHandler.md) | Visit blockquotes|
| [`ezcDocumentDocbookToRstCitationHandler`](./classes/ezcDocumentDocbookToRstCitationHandler.md) | Visit citations|
| [`ezcDocumentDocbookToRstCommentHandler`](./classes/ezcDocumentDocbookToRstCommentHandler.md) | Visit docbook comment|
| [`ezcDocumentDocbookToRstConverter`](./classes/ezcDocumentDocbookToRstConverter.md) | Converter for docbook to Rst with a PHP callback based mechanism, for fast<br />and easy PHP based extensible transformations.|
| [`ezcDocumentDocbookToRstConverterOptions`](./classes/ezcDocumentDocbookToRstConverterOptions.md) | Class containing the basic options for the ezcDocumentEzp3Xml class|
| [`ezcDocumentDocbookToRstEmphasisHandler`](./classes/ezcDocumentDocbookToRstEmphasisHandler.md) | Visit emphasis|
| [`ezcDocumentDocbookToRstExternalLinkHandler`](./classes/ezcDocumentDocbookToRstExternalLinkHandler.md) | Visit external links|
| [`ezcDocumentDocbookToRstFootnoteHandler`](./classes/ezcDocumentDocbookToRstFootnoteHandler.md) | Visit footnotes|
| [`ezcDocumentDocbookToRstHeadHandler`](./classes/ezcDocumentDocbookToRstHeadHandler.md) | Visit docbook sectioninfo elements|
| [`ezcDocumentDocbookToRstIgnoreHandler`](./classes/ezcDocumentDocbookToRstIgnoreHandler.md) | Handler for elements, which are safe to ignore|
| [`ezcDocumentDocbookToRstInlineMediaObjectHandler`](./classes/ezcDocumentDocbookToRstInlineMediaObjectHandler.md) | Visit inline media objects|
| [`ezcDocumentDocbookToRstInternalLinkHandler`](./classes/ezcDocumentDocbookToRstInternalLinkHandler.md) | Visit internal links.|
| [`ezcDocumentDocbookToRstItemizedListHandler`](./classes/ezcDocumentDocbookToRstItemizedListHandler.md) | Visit itemized list / bullet lists|
| [`ezcDocumentDocbookToRstLiteralHandler`](./classes/ezcDocumentDocbookToRstLiteralHandler.md) | Visit inline literals|
| [`ezcDocumentDocbookToRstLiteralLayoutHandler`](./classes/ezcDocumentDocbookToRstLiteralLayoutHandler.md) | Visit literallayout elements|
| [`ezcDocumentDocbookToRstMediaObjectHandler`](./classes/ezcDocumentDocbookToRstMediaObjectHandler.md) | Visit media objects|
| [`ezcDocumentDocbookToRstOrderedListHandler`](./classes/ezcDocumentDocbookToRstOrderedListHandler.md) | Visit itemized list / bullet lists|
| [`ezcDocumentDocbookToRstParagraphHandler`](./classes/ezcDocumentDocbookToRstParagraphHandler.md) | Visit paragraphs|
| [`ezcDocumentDocbookToRstRecurseHandler`](./classes/ezcDocumentDocbookToRstRecurseHandler.md) | Handler for elements, which are safe to ignore, but into which contents<br />should be recursed, so the childs are still converted.|
| [`ezcDocumentDocbookToRstSectionHandler`](./classes/ezcDocumentDocbookToRstSectionHandler.md) | Visit docbook sections|
| [`ezcDocumentDocbookToRstSpecialParagraphHandler`](./classes/ezcDocumentDocbookToRstSpecialParagraphHandler.md) | Visit special paragraphs.|
| [`ezcDocumentDocbookToRstTableHandler`](./classes/ezcDocumentDocbookToRstTableHandler.md) | Visit tables|
| [`ezcDocumentDocbookToRstVariableListHandler`](./classes/ezcDocumentDocbookToRstVariableListHandler.md) | Visit itemized list / bullet lists|
| [`ezcDocumentDocbookToWikiBaseHandler`](./classes/ezcDocumentDocbookToWikiBaseHandler.md) | Basic converter which stores a list of handlers for each node in the docbook<br />element tree. Those handlers will be executed for the elements, when found.|
| [`ezcDocumentDocbookToWikiBeginPageHandler`](./classes/ezcDocumentDocbookToWikiBeginPageHandler.md) | Visit begin page elements|
| [`ezcDocumentDocbookToWikiConverter`](./classes/ezcDocumentDocbookToWikiConverter.md) | Converter for docbook to Wiki with a PHP callback based mechanism, for fast<br />and easy PHP based extensible transformations.|
| [`ezcDocumentDocbookToWikiConverterOptions`](./classes/ezcDocumentDocbookToWikiConverterOptions.md) | Class containing the basic options for the ezcDocumentEzp3Xml class|
| [`ezcDocumentDocbookToWikiEmphasisHandler`](./classes/ezcDocumentDocbookToWikiEmphasisHandler.md) | Visit emphasis.|
| [`ezcDocumentDocbookToWikiExternalLinkHandler`](./classes/ezcDocumentDocbookToWikiExternalLinkHandler.md) | Visit external links.|
| [`ezcDocumentDocbookToWikiIgnoreHandler`](./classes/ezcDocumentDocbookToWikiIgnoreHandler.md) | Handler for elements, which are safe to ignore.|
| [`ezcDocumentDocbookToWikiInlineMediaObjectHandler`](./classes/ezcDocumentDocbookToWikiInlineMediaObjectHandler.md) | Visit inline media objects|
| [`ezcDocumentDocbookToWikiInternalLinkHandler`](./classes/ezcDocumentDocbookToWikiInternalLinkHandler.md) | Visit internal links.|
| [`ezcDocumentDocbookToWikiItemizedListHandler`](./classes/ezcDocumentDocbookToWikiItemizedListHandler.md) | Visit itemized list / bullet lists.|
| [`ezcDocumentDocbookToWikiLiteralHandler`](./classes/ezcDocumentDocbookToWikiLiteralHandler.md) | Visit inline literals|
| [`ezcDocumentDocbookToWikiLiteralLayoutHandler`](./classes/ezcDocumentDocbookToWikiLiteralLayoutHandler.md) | Visit literallayout elements|
| [`ezcDocumentDocbookToWikiMediaObjectHandler`](./classes/ezcDocumentDocbookToWikiMediaObjectHandler.md) | Visit media objects|
| [`ezcDocumentDocbookToWikiOrderedListHandler`](./classes/ezcDocumentDocbookToWikiOrderedListHandler.md) | Visit ordered list / enumerated lists|
| [`ezcDocumentDocbookToWikiParagraphHandler`](./classes/ezcDocumentDocbookToWikiParagraphHandler.md) | Visit paragraphs|
| [`ezcDocumentDocbookToWikiRecurseHandler`](./classes/ezcDocumentDocbookToWikiRecurseHandler.md) | Handler for elements, which are safe to ignore|
| [`ezcDocumentDocbookToWikiSectionHandler`](./classes/ezcDocumentDocbookToWikiSectionHandler.md) | Visit docbook sections|
| [`ezcDocumentDocbookToWikiTableHandler`](./classes/ezcDocumentDocbookToWikiTableHandler.md) | Visit tables.|
| [`ezcDocumentDocumentTests`](./classes/ezcDocumentDocumentTests.md) | Test suite for class.|
| [`ezcDocumentDokuwikiWiki`](./classes/ezcDocumentDokuwikiWiki.md) | Document handler for Dokuwiki wiki text documents.|
| [`ezcDocumentElementVisitorConverter`](./classes/ezcDocumentElementVisitorConverter.md) | Basic converter which stores a list of handlers for each node in the docbook<br />element tree. Those handlers will be executed for the elements, when found.|
| [`ezcDocumentElementVisitorHandler`](./classes/ezcDocumentElementVisitorHandler.md) | Abstract base handler class for conversions done by converters extending<br />from ezcDocumentDocbookElementVisitorConverter.|
| [`ezcDocumentErroneousXmlException`](./classes/ezcDocumentErroneousXmlException.md) | General exception container for the Document component.|
| [`ezcDocumentException`](./classes/ezcDocumentException.md) | General exception container for the Document component.|
| [`ezcDocumentEzXml`](./classes/ezcDocumentEzXml.md) | The document handler for the eZ Publish 3 XML document markup.|
| [`ezcDocumentEzXmlDummyLinkConverter`](./classes/ezcDocumentEzXmlDummyLinkConverter.md) | Class for conversions of links, given as natural URLs into the eZXml storage<br />format, which may result in urlIds, nodeIds, or similar.|
| [`ezcDocumentEzXmlDummyLinkProvider`](./classes/ezcDocumentEzXmlDummyLinkProvider.md) | Class providing access to links referenced in eZXml documents by url IDs,<br />node IDs or object IDs.|
| [`ezcDocumentEzXmlLinkConverter`](./classes/ezcDocumentEzXmlLinkConverter.md) | Class for conversions of links, given as natural URLs into the eZXml storage<br />format, which may result in urlIds, nodeIds, or similar.|
| [`ezcDocumentEzXmlLinkProvider`](./classes/ezcDocumentEzXmlLinkProvider.md) | Class providing access to links referenced in eZXml documents by url IDs,<br />node IDs or object IDs.|
| [`ezcDocumentEzXmlOptions`](./classes/ezcDocumentEzXmlOptions.md) | Class containing the basic options for the ezcDocumentEzXml class|
| [`ezcDocumentEzXmlOptionsTests`](./classes/ezcDocumentEzXmlOptionsTests.md) | Test suite for class.|
| [`ezcDocumentEzXmlTests`](./classes/ezcDocumentEzXmlTests.md) | Test suite for class.|
| [`ezcDocumentEzXmlToDocbookAnchorHandler`](./classes/ezcDocumentEzXmlToDocbookAnchorHandler.md) | Visit anchor elements.|
| [`ezcDocumentEzXmlToDocbookConverter`](./classes/ezcDocumentEzXmlToDocbookConverter.md) | Converter for docbook to XDocbook with a PHP callback based mechanism, for fast<br />and easy PHP based extensible transformations.|
| [`ezcDocumentEzXmlToDocbookConverterOptions`](./classes/ezcDocumentEzXmlToDocbookConverterOptions.md) | Class containing the basic options for the ezcDocumentEzp3Xml class.|
| [`ezcDocumentEzXmlToDocbookEmphasisHandler`](./classes/ezcDocumentEzXmlToDocbookEmphasisHandler.md) | Visit emphasis.|
| [`ezcDocumentEzXmlToDocbookHeaderHandler`](./classes/ezcDocumentEzXmlToDocbookHeaderHandler.md) | Visit eZXml header.|
| [`ezcDocumentEzXmlToDocbookLineHandler`](./classes/ezcDocumentEzXmlToDocbookLineHandler.md) | Visit eZXml line elements.|
| [`ezcDocumentEzXmlToDocbookLinkHandler`](./classes/ezcDocumentEzXmlToDocbookLinkHandler.md) | Visit links.|
| [`ezcDocumentEzXmlToDocbookListHandler`](./classes/ezcDocumentEzXmlToDocbookListHandler.md) | Visit eZXml lists.|
| [`ezcDocumentEzXmlToDocbookLiteralHandler`](./classes/ezcDocumentEzXmlToDocbookLiteralHandler.md) | Visit eZXml literals.|
| [`ezcDocumentEzXmlToDocbookMappingHandler`](./classes/ezcDocumentEzXmlToDocbookMappingHandler.md) | Simple mapping handler.|
| [`ezcDocumentEzXmlToDocbookTableCellHandler`](./classes/ezcDocumentEzXmlToDocbookTableCellHandler.md) | Visit eZXml table cell.|
| [`ezcDocumentEzXmlToDocbookTableHandler`](./classes/ezcDocumentEzXmlToDocbookTableHandler.md) | Visit eZXml table.|
| [`ezcDocumentEzXmlToDocbookTableRowHandler`](./classes/ezcDocumentEzXmlToDocbookTableRowHandler.md) | Visit eZXml table row.|
| [`ezcDocumentHtmlConverterOptions`](./classes/ezcDocumentHtmlConverterOptions.md) | Class containing the basic options for the ezcDocumentEzp3Xml class|
| [`ezcDocumentInvalidDocbookException`](./classes/ezcDocumentInvalidDocbookException.md) | Exception thrown if an expectation to an incoming DocBook document is not<br />met.|
| [`ezcDocumentInvalidFontException`](./classes/ezcDocumentInvalidFontException.md) | Exception thrown, when the RST visitor could not visit an AST node<br />properly.|
| [`ezcDocumentInvalidOdtException`](./classes/ezcDocumentInvalidOdtException.md) | Exception thrown if an expectation to an incoming DocBook document is not<br />met during DocBook to ODT conversion.|
| [`ezcDocumentListBulletGuesser`](./classes/ezcDocumentListBulletGuesser.md) | Simple mapping class to guess bullet charachters from mark names.|
| [`ezcDocumentListBulletGuesserTest`](./classes/ezcDocumentListBulletGuesserTest.md) | |
| [`ezcDocumentListItemGenerator`](./classes/ezcDocumentListItemGenerator.md) | List item generator|
| [`ezcDocumentLocateableDomElement`](./classes/ezcDocumentLocateableDomElement.md) | Custom DOMElement extension|
| [`ezcDocumentMissingVisitorException`](./classes/ezcDocumentMissingVisitorException.md) | Exception thrown, when a visitor could not be found for a node / subtree.|
| [`ezcDocumentNoListItemGenerator`](./classes/ezcDocumentNoListItemGenerator.md) | Numbered list item generator.|
| [`ezcDocumentNumberedListItemGenerator`](./classes/ezcDocumentNumberedListItemGenerator.md) | Numbered list item generator.|
| [`ezcDocumentOdt`](./classes/ezcDocumentOdt.md) | The document handler for Open Document Text (ODT) documents.|
| [`ezcDocumentOdtBaseFilter`](./classes/ezcDocumentOdtBaseFilter.md) | Abstract base class for ODT filters, assigning semantic information to<br />ODT documents.|
| [`ezcDocumentOdtDefaultPcssConverter`](./classes/ezcDocumentOdtDefaultPcssConverter.md) | Default style converter which converts just to &quot;fo:$stylename&quot;.|
| [`ezcDocumentOdtDocbookTests`](./classes/ezcDocumentOdtDocbookTests.md) | Test suite for class.|
| [`ezcDocumentOdtElementBaseFilter`](./classes/ezcDocumentOdtElementBaseFilter.md) | Basic filter class for ODT element filters.|
| [`ezcDocumentOdtElementFilter`](./classes/ezcDocumentOdtElementFilter.md) | Filter, which assigns semantic information just on the base of ODT element<br />semantics to the tree.|
| [`ezcDocumentOdtElementFootnoteFilter`](./classes/ezcDocumentOdtElementFootnoteFilter.md) | Filter for ODT &lt;text:note/&gt; elements.|
| [`ezcDocumentOdtElementFrameFilter`](./classes/ezcDocumentOdtElementFrameFilter.md) | Filter for ODT &lt;draw:frame/&gt; elements.|
| [`ezcDocumentOdtElementHeaderFilter`](./classes/ezcDocumentOdtElementHeaderFilter.md) | Filter for ODT &lt;text:h/&gt; elements.|
| [`ezcDocumentOdtElementHtmlTableFilter`](./classes/ezcDocumentOdtElementHtmlTableFilter.md) | Filter for ODT &lt;table:table/&gt; and its child elements.|
| [`ezcDocumentOdtElementImageFilter`](./classes/ezcDocumentOdtElementImageFilter.md) | Filter for ODT &lt;draw:image&gt; elements.|
| [`ezcDocumentOdtElementLinkFilter`](./classes/ezcDocumentOdtElementLinkFilter.md) | Filter for ODT &lt;text:a/&gt; elements.|
| [`ezcDocumentOdtElementListFilter`](./classes/ezcDocumentOdtElementListFilter.md) | Filter for ODT &lt;text:list/&gt; and &lt;text:list-item/&gt; elements.|
| [`ezcDocumentOdtElementParagraphFilter`](./classes/ezcDocumentOdtElementParagraphFilter.md) | Filter for ODT &lt;text:p&gt; elements.|
| [`ezcDocumentOdtElementTableFilter`](./classes/ezcDocumentOdtElementTableFilter.md) | Filter for ODT &lt;table:table&gt; elements.|
| [`ezcDocumentOdtElementWhitespaceFilter`](./classes/ezcDocumentOdtElementWhitespaceFilter.md) | Filter for ODT &lt;text:s/&gt;, &lt;text:tab/&gt; and &lt;text:line-break/&gt; elements.|
| [`ezcDocumentOdtEmphasisStyleFilterRule`](./classes/ezcDocumentOdtEmphasisStyleFilterRule.md) | Style filter rule to detect &lt;emphasis/&gt; elements.|
| [`ezcDocumentOdtFormattingProperties`](./classes/ezcDocumentOdtFormattingProperties.md) | Class for representing formatting properties of a certain type.|
| [`ezcDocumentOdtFormattingPropertiesExistException`](./classes/ezcDocumentOdtFormattingPropertiesExistException.md) | Exception thrown if formatting properties of the same type are set twice in<br />an {@link ezcDocumentOdtFormattingPropertyCollection}.|
| [`ezcDocumentOdtFormattingPropertiesTest`](./classes/ezcDocumentOdtFormattingPropertiesTest.md) | Test suite for class.|
| [`ezcDocumentOdtFormattingPropertyCollection`](./classes/ezcDocumentOdtFormattingPropertyCollection.md) | Class to carry and manage {@link ezcDocumentOdtFormattingProperties}.|
| [`ezcDocumentOdtFormattingPropertyCollectionTest`](./classes/ezcDocumentOdtFormattingPropertyCollectionTest.md) | Test suite for class.|
| [`ezcDocumentOdtImageFilter`](./classes/ezcDocumentOdtImageFilter.md) | Filter which extracts images from FODT (flat ODT) documents and stores them<br />in the desired directory.|
| [`ezcDocumentOdtImageLocator`](./classes/ezcDocumentOdtImageLocator.md) | Class to locate images in DocBook to ODT conversion.|
| [`ezcDocumentOdtListLevelStyle`](./classes/ezcDocumentOdtListLevelStyle.md) | Base class for list-level styles.|
| [`ezcDocumentOdtListLevelStyleBullet`](./classes/ezcDocumentOdtListLevelStyleBullet.md) | Bullet list-level style.|
| [`ezcDocumentOdtListLevelStyleFilterRule`](./classes/ezcDocumentOdtListLevelStyleFilterRule.md) | Style filter rule to distinguish list types.|
| [`ezcDocumentOdtListLevelStyleNumber`](./classes/ezcDocumentOdtListLevelStyleNumber.md) | Number list-level style.|
| [`ezcDocumentOdtListLevelStyleTest`](./classes/ezcDocumentOdtListLevelStyleTest.md) | Test suite for class.|
| [`ezcDocumentOdtListStyle`](./classes/ezcDocumentOdtListStyle.md) | Class for ODT list styles.|
| [`ezcDocumentOdtListStyleGenerator`](./classes/ezcDocumentOdtListStyleGenerator.md) | Class to generate styles for lists (&lt;text:list/&gt;).|
| [`ezcDocumentOdtMetaGenerator`](./classes/ezcDocumentOdtMetaGenerator.md) | Generates basic meta data for ODT files.|
| [`ezcDocumentOdtMetaGeneratorTest`](./classes/ezcDocumentOdtMetaGeneratorTest.md) | Test suite for class.|
| [`ezcDocumentOdtOptions`](./classes/ezcDocumentOdtOptions.md) | Class containing the basic options for the ezcDocumentOdt class.|
| [`ezcDocumentOdtParagraphStyleGenerator`](./classes/ezcDocumentOdtParagraphStyleGenerator.md) | Class to generate styles for paragraph elements (&lt;text:h/&gt; and &lt;text:p/&gt;).|
| [`ezcDocumentOdtPcssBorderConverter`](./classes/ezcDocumentOdtPcssBorderConverter.md) | Style converter for border style properties.|
| [`ezcDocumentOdtPcssColorConverter`](./classes/ezcDocumentOdtPcssColorConverter.md) | Style converter for color style properties.|
| [`ezcDocumentOdtPcssConverterManager`](./classes/ezcDocumentOdtPcssConverterManager.md) | Manager for ezcDocumentOdtPcssConverter instances.|
| [`ezcDocumentOdtPcssConverterTools`](./classes/ezcDocumentOdtPcssConverterTools.md) | Tool class for ODT PCSS styles.|
| [`ezcDocumentOdtPcssConvertersTest`](./classes/ezcDocumentOdtPcssConvertersTest.md) | Test suite for class.|
| [`ezcDocumentOdtPcssFontConverter`](./classes/ezcDocumentOdtPcssFontConverter.md) | Style converter for font style properties.|
| [`ezcDocumentOdtPcssFontNameConverter`](./classes/ezcDocumentOdtPcssFontNameConverter.md) | Style converter for the special font-name style property.|
| [`ezcDocumentOdtPcssFontSizeConverter`](./classes/ezcDocumentOdtPcssFontSizeConverter.md) | Style converter for font-size style properties.|
| [`ezcDocumentOdtPcssFontStylePreprocessor`](./classes/ezcDocumentOdtPcssFontStylePreprocessor.md) | Font style pre-processor.|
| [`ezcDocumentOdtPcssListStylePreprocessor`](./classes/ezcDocumentOdtPcssListStylePreprocessor.md) | List style pre-processor.|
| [`ezcDocumentOdtPcssMarginConverter`](./classes/ezcDocumentOdtPcssMarginConverter.md) | Style converter for margin style properties.|
| [`ezcDocumentOdtPcssParagraphStylePreprocessor`](./classes/ezcDocumentOdtPcssParagraphStylePreprocessor.md) | Paragraph style pre-processor.|
| [`ezcDocumentOdtPcssStyler`](./classes/ezcDocumentOdtPcssStyler.md) | PCSS based ODT styler.|
| [`ezcDocumentOdtPcssTextDecorationConverter`](./classes/ezcDocumentOdtPcssTextDecorationConverter.md) | Style converter for text-decoration style properties.|
| [`ezcDocumentOdtStyle`](./classes/ezcDocumentOdtStyle.md) | Class for ODT styles.|
| [`ezcDocumentOdtStyleExtractor`](./classes/ezcDocumentOdtStyleExtractor.md) | Extracts style information from an ODT document.|
| [`ezcDocumentOdtStyleExtractorTest`](./classes/ezcDocumentOdtStyleExtractorTest.md) | Test suite for class.|
| [`ezcDocumentOdtStyleFilter`](./classes/ezcDocumentOdtStyleFilter.md) | Filter mechanism based on ODT style information.|
| [`ezcDocumentOdtStyleGenerator`](./classes/ezcDocumentOdtStyleGenerator.md) | Base class for style generators.|
| [`ezcDocumentOdtStyleInferencer`](./classes/ezcDocumentOdtStyleInferencer.md) | An instance of this class inferences a style for an ODT element.|
| [`ezcDocumentOdtStyleInformation`](./classes/ezcDocumentOdtStyleInformation.md) | Struct class to cover style elements from an ODT document.|
| [`ezcDocumentOdtStyleListPropertyGenerator`](./classes/ezcDocumentOdtStyleListPropertyGenerator.md) | List property generator.|
| [`ezcDocumentOdtStyleParagraphPropertyGenerator`](./classes/ezcDocumentOdtStyleParagraphPropertyGenerator.md) | Paragraph property generator.|
| [`ezcDocumentOdtStyleParagraphPropertyGeneratorTest`](./classes/ezcDocumentOdtStyleParagraphPropertyGeneratorTest.md) | Test suite for class.|
| [`ezcDocumentOdtStyleParser`](./classes/ezcDocumentOdtStyleParser.md) | Parses ODT styles.|
| [`ezcDocumentOdtStyleParserTest`](./classes/ezcDocumentOdtStyleParserTest.md) | Test suite for class.|
| [`ezcDocumentOdtStylePropertyGenerator`](./classes/ezcDocumentOdtStylePropertyGenerator.md) | Base class for property generators.|
| [`ezcDocumentOdtStylePropertyGeneratorTest`](./classes/ezcDocumentOdtStylePropertyGeneratorTest.md) | Test suite for class.|
| [`ezcDocumentOdtStyleTableCellPropertyGenerator`](./classes/ezcDocumentOdtStyleTableCellPropertyGenerator.md) | Table cell property generator.|
| [`ezcDocumentOdtStyleTablePropertyGenerator`](./classes/ezcDocumentOdtStyleTablePropertyGenerator.md) | Table property generator.|
| [`ezcDocumentOdtStyleTableRowPropertyGenerator`](./classes/ezcDocumentOdtStyleTableRowPropertyGenerator.md) | Table row property generator.|
| [`ezcDocumentOdtStyleTest`](./classes/ezcDocumentOdtStyleTest.md) | Test suite for class.|
| [`ezcDocumentOdtStyleTextPropertyGenerator`](./classes/ezcDocumentOdtStyleTextPropertyGenerator.md) | Text property generator.|
| [`ezcDocumentOdtStyleTextPropertyGeneratorTest`](./classes/ezcDocumentOdtStyleTextPropertyGeneratorTest.md) | Test suite for class.|
| [`ezcDocumentOdtTableCellStyleGenerator`](./classes/ezcDocumentOdtTableCellStyleGenerator.md) | Class to generate styles for table-cell elements.|
| [`ezcDocumentOdtTableRowStyleGenerator`](./classes/ezcDocumentOdtTableRowStyleGenerator.md) | Class to generate styles for &lt;table:table-row/&gt; elements.|
| [`ezcDocumentOdtTableStyleGenerator`](./classes/ezcDocumentOdtTableStyleGenerator.md) | Class to generate styles for table elements.|
| [`ezcDocumentOdtTestStyler`](./classes/ezcDocumentOdtTestStyler.md) | |
| [`ezcDocumentOdtTextProcessor`](./classes/ezcDocumentOdtTextProcessor.md) | Processes text nodes with significant whitespaces.|
| [`ezcDocumentOdtTextProcessorTest`](./classes/ezcDocumentOdtTextProcessorTest.md) | Test suite for class.|
| [`ezcDocumentOdtTextStyleGenerator`](./classes/ezcDocumentOdtTextStyleGenerator.md) | Class to generate styles for text elements (&lt;text:span/&gt;).|
| [`ezcDocumentOptions`](./classes/ezcDocumentOptions.md) | Class containing the basic options for the ezcDocument|
| [`ezcDocumentOptionsOdtTests`](./classes/ezcDocumentOptionsOdtTests.md) | Test suite for class.|
| [`ezcDocumentOptionsTestCase`](./classes/ezcDocumentOptionsTestCase.md) | Test suite for class.|
| [`ezcDocumentOptionsTests`](./classes/ezcDocumentOptionsTests.md) | Test suite for class.|
| [`ezcDocumentOptionsXmlBaseTests`](./classes/ezcDocumentOptionsXmlBaseTests.md) | Test suite for class.|
| [`ezcDocumentParser`](./classes/ezcDocumentParser.md) | A base class for document parsers|
| [`ezcDocumentParserException`](./classes/ezcDocumentParserException.md) | Exception thrown, when the RST parser could not parse asome token sequence.|
| [`ezcDocumentParserOptions`](./classes/ezcDocumentParserOptions.md) | Class containing the basic options for the ezcDocumentParser.|
| [`ezcDocumentParserTests`](./classes/ezcDocumentParserTests.md) | Test suite for class.|
| [`ezcDocumentPcssDeclarationDirective`](./classes/ezcDocumentPcssDeclarationDirective.md) | Pdf CSS layout directive.|
| [`ezcDocumentPcssDirective`](./classes/ezcDocumentPcssDirective.md) | Pdf CSS layout directive.|
| [`ezcDocumentPcssLayoutDirective`](./classes/ezcDocumentPcssLayoutDirective.md) | Pdf CSS layout directive.|
| [`ezcDocumentPcssLocationIdTests`](./classes/ezcDocumentPcssLocationIdTests.md) | Test suite for class.|
| [`ezcDocumentPcssMatchLocationIdTests`](./classes/ezcDocumentPcssMatchLocationIdTests.md) | Test suite for class.|
| [`ezcDocumentPcssMeasure`](./classes/ezcDocumentPcssMeasure.md) | Pdf measure wrapper, including measure conversions|
| [`ezcDocumentPcssMeasureTests`](./classes/ezcDocumentPcssMeasureTests.md) | Test suite for class.|
| [`ezcDocumentPcssParser`](./classes/ezcDocumentPcssParser.md) | Parser for simplified CSS rules for PDF layout specifications|
| [`ezcDocumentPcssParserTests`](./classes/ezcDocumentPcssParserTests.md) | Test suite for class.|
| [`ezcDocumentPcssStyleBorderBoxValue`](./classes/ezcDocumentPcssStyleBorderBoxValue.md) | Style directive border box value representation.|
| [`ezcDocumentPcssStyleBorderValue`](./classes/ezcDocumentPcssStyleBorderValue.md) | Style directive border value representation.|
| [`ezcDocumentPcssStyleBoxValue`](./classes/ezcDocumentPcssStyleBoxValue.md) | Abstract value tpye for box value representations.|
| [`ezcDocumentPcssStyleColorBoxValue`](./classes/ezcDocumentPcssStyleColorBoxValue.md) | Style directive color box value representation|
| [`ezcDocumentPcssStyleColorValue`](./classes/ezcDocumentPcssStyleColorValue.md) | Style directive color value representation.|
| [`ezcDocumentPcssStyleInferenceTests`](./classes/ezcDocumentPcssStyleInferenceTests.md) | Test suite for class.|
| [`ezcDocumentPcssStyleInferencer`](./classes/ezcDocumentPcssStyleInferencer.md) | Style inferencer|
| [`ezcDocumentPcssStyleIntValue`](./classes/ezcDocumentPcssStyleIntValue.md) | Style directive integer value representation|
| [`ezcDocumentPcssStyleLineBoxValue`](./classes/ezcDocumentPcssStyleLineBoxValue.md) | Style directive line box value representation|
| [`ezcDocumentPcssStyleLineValue`](./classes/ezcDocumentPcssStyleLineValue.md) | Style directive line style value representation|
| [`ezcDocumentPcssStyleListValue`](./classes/ezcDocumentPcssStyleListValue.md) | Style directive list value representation|
| [`ezcDocumentPcssStyleMeasureBoxValue`](./classes/ezcDocumentPcssStyleMeasureBoxValue.md) | Style directive measure box value representation|
| [`ezcDocumentPcssStyleMeasureValue`](./classes/ezcDocumentPcssStyleMeasureValue.md) | Style directive measure value representation|
| [`ezcDocumentPcssStyleSrcValue`](./classes/ezcDocumentPcssStyleSrcValue.md) | Style directive source value representation|
| [`ezcDocumentPcssStyleStringValue`](./classes/ezcDocumentPcssStyleStringValue.md) | Style directive string value representation|
| [`ezcDocumentPcssStyleValue`](./classes/ezcDocumentPcssStyleValue.md) | Style directive value representation.|
| [`ezcDocumentPcssValueParserTests`](./classes/ezcDocumentPcssValueParserTests.md) | Test suite for class.|
| [`ezcDocumentPdf`](./classes/ezcDocumentPdf.md) | Document handler for PDF documents.|
| [`ezcDocumentPdfBlockRenderer`](./classes/ezcDocumentPdfBlockRenderer.md) | General block renderer.|
| [`ezcDocumentPdfBlockquoteRenderer`](./classes/ezcDocumentPdfBlockquoteRenderer.md) | Renders a blockquote.|
| [`ezcDocumentPdfBlockquoteRendererTests`](./classes/ezcDocumentPdfBlockquoteRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfBoundingBox`](./classes/ezcDocumentPdfBoundingBox.md) | Bounding box|
| [`ezcDocumentPdfDefaultHyphenator`](./classes/ezcDocumentPdfDefaultHyphenator.md) | Default hyphenation implementation, which does no word splitting at all.|
| [`ezcDocumentPdfDefaultTableColumnWidthCalculator`](./classes/ezcDocumentPdfDefaultTableColumnWidthCalculator.md) | Table column width calculator|
| [`ezcDocumentPdfDefaultTokenizer`](./classes/ezcDocumentPdfDefaultTokenizer.md) | Tokenizer implementation for common texts, using whitespaces as word<br />seperators.|
| [`ezcDocumentPdfDriver`](./classes/ezcDocumentPdfDriver.md) | Abstract base class for driver implementations.|
| [`ezcDocumentPdfDriverHaruTests`](./classes/ezcDocumentPdfDriverHaruTests.md) | Test suite for class.|
| [`ezcDocumentPdfDriverSvgTests`](./classes/ezcDocumentPdfDriverSvgTests.md) | Test suite for class.|
| [`ezcDocumentPdfDriverTcpdfTests`](./classes/ezcDocumentPdfDriverTcpdfTests.md) | Test suite for class.|
| [`ezcDocumentPdfDriverTests`](./classes/ezcDocumentPdfDriverTests.md) | Test suite for class.|
| [`ezcDocumentPdfFooterOptions`](./classes/ezcDocumentPdfFooterOptions.md) | Class containing the basic options for the ezcDocumentDocbook class|
| [`ezcDocumentPdfFooterOptionsTests`](./classes/ezcDocumentPdfFooterOptionsTests.md) | Test suite for class.|
| [`ezcDocumentPdfFooterPdfPart`](./classes/ezcDocumentPdfFooterPdfPart.md) | Basic foot class, which renders a simple page footer including information<br />from the document.|
| [`ezcDocumentPdfHaruDriver`](./classes/ezcDocumentPdfHaruDriver.md) | Pdf driver based on pecl/haru|
| [`ezcDocumentPdfHeaderPdfPart`](./classes/ezcDocumentPdfHeaderPdfPart.md) | Just an alias for the footer class, but will be positioned on the<br />top of a page by default.|
| [`ezcDocumentPdfHyphenator`](./classes/ezcDocumentPdfHyphenator.md) | Abstract base class for hyphenation implementations.|
| [`ezcDocumentPdfHyphenatorTests`](./classes/ezcDocumentPdfHyphenatorTests.md) | Test suite for class.|
| [`ezcDocumentPdfImage`](./classes/ezcDocumentPdfImage.md) | PDF image handler|
| [`ezcDocumentPdfImageHandler`](./classes/ezcDocumentPdfImageHandler.md) | PDF image handler|
| [`ezcDocumentPdfImageHandlerTests`](./classes/ezcDocumentPdfImageHandlerTests.md) | Test suite for class.|
| [`ezcDocumentPdfListItemGeneratorTests`](./classes/ezcDocumentPdfListItemGeneratorTests.md) | Test suite for class.|
| [`ezcDocumentPdfListItemRenderer`](./classes/ezcDocumentPdfListItemRenderer.md) | Renders a list item.|
| [`ezcDocumentPdfListRenderer`](./classes/ezcDocumentPdfListRenderer.md) | Renders a list.|
| [`ezcDocumentPdfListRendererTests`](./classes/ezcDocumentPdfListRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfLiteralBlockRenderer`](./classes/ezcDocumentPdfLiteralBlockRenderer.md) | Renders a literal block / code section.|
| [`ezcDocumentPdfLiteralTokenizer`](./classes/ezcDocumentPdfLiteralTokenizer.md) | Tokenizer implementation for literal blocks, preserving whitespaces.|
| [`ezcDocumentPdfLiteralTokenizerTests`](./classes/ezcDocumentPdfLiteralTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentPdfLiterallayoutRendererTests`](./classes/ezcDocumentPdfLiterallayoutRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfMainRenderer`](./classes/ezcDocumentPdfMainRenderer.md) | Main PDF renderer class, dispatching to sub renderer, maintaining page<br />contexts and transactions.|
| [`ezcDocumentPdfMainRendererTests`](./classes/ezcDocumentPdfMainRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfMediaObjectRenderer`](./classes/ezcDocumentPdfMediaObjectRenderer.md) | Media object renderer.|
| [`ezcDocumentPdfMediaObjectRendererTests`](./classes/ezcDocumentPdfMediaObjectRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfOptions`](./classes/ezcDocumentPdfOptions.md) | Class containing the basic options for the ezcDocumentDocbook class.|
| [`ezcDocumentPdfOptionsTests`](./classes/ezcDocumentPdfOptionsTests.md) | Test suite for class.|
| [`ezcDocumentPdfPage`](./classes/ezcDocumentPdfPage.md) | PDF page class|
| [`ezcDocumentPdfPageTests`](./classes/ezcDocumentPdfPageTests.md) | Test suite for class.|
| [`ezcDocumentPdfParagraphRendererTests`](./classes/ezcDocumentPdfParagraphRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfPart`](./classes/ezcDocumentPdfPart.md) | Abstract base class for additional PDF parts|
| [`ezcDocumentPdfPhpImageHandler`](./classes/ezcDocumentPdfPhpImageHandler.md) | PHP image handler|
| [`ezcDocumentPdfRenderRtlTests`](./classes/ezcDocumentPdfRenderRtlTests.md) | Test suite for class.|
| [`ezcDocumentPdfRenderer`](./classes/ezcDocumentPdfRenderer.md) | Abstract renderer base class|
| [`ezcDocumentPdfRendererFooterPartTests`](./classes/ezcDocumentPdfRendererFooterPartTests.md) | Test suite for class.|
| [`ezcDocumentPdfRendererTextDecorationsTests`](./classes/ezcDocumentPdfRendererTextDecorationsTests.md) | Test suite for class.|
| [`ezcDocumentPdfSvgDriver`](./classes/ezcDocumentPdfSvgDriver.md) | SVG renderer for PDF driver, useful for manual introspection and test<br />comparisions.|
| [`ezcDocumentPdfTableColumnWidthCalculator`](./classes/ezcDocumentPdfTableColumnWidthCalculator.md) | Table column width calculator|
| [`ezcDocumentPdfTableColumnWidthCalculatorTests`](./classes/ezcDocumentPdfTableColumnWidthCalculatorTests.md) | Test suite for class.|
| [`ezcDocumentPdfTableRenderer`](./classes/ezcDocumentPdfTableRenderer.md) | Renders a table.|
| [`ezcDocumentPdfTableRendererTests`](./classes/ezcDocumentPdfTableRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfTcpdfDriver`](./classes/ezcDocumentPdfTcpdfDriver.md) | Pdf driver based on TCPDF|
| [`ezcDocumentPdfTestCase`](./classes/ezcDocumentPdfTestCase.md) | Base test suite for PDF tests, implementing an assertion on PDF<br />equality.|
| [`ezcDocumentPdfTests`](./classes/ezcDocumentPdfTests.md) | Test suite for class.|
| [`ezcDocumentPdfTextBlockRenderer`](./classes/ezcDocumentPdfTextBlockRenderer.md) | Text block renderer|
| [`ezcDocumentPdfTextBoxRenderer`](./classes/ezcDocumentPdfTextBoxRenderer.md) | Renders a single text box|
| [`ezcDocumentPdfTextBoxRendererBaseTests`](./classes/ezcDocumentPdfTextBoxRendererBaseTests.md) | Test suite for class.|
| [`ezcDocumentPdfTextBoxRendererTests`](./classes/ezcDocumentPdfTextBoxRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfTitleRenderer`](./classes/ezcDocumentPdfTitleRenderer.md) | Title renderer|
| [`ezcDocumentPdfTokenizer`](./classes/ezcDocumentPdfTokenizer.md) | Abstract base class for tokenizer implementations.|
| [`ezcDocumentPdfTokenizerTests`](./classes/ezcDocumentPdfTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentPdfTransactionalDriverWrapper`](./classes/ezcDocumentPdfTransactionalDriverWrapper.md) | PDF driver proxy, which records write calls to proxied driver, wraps them<br />into transactions to optionally revert or commit them later.|
| [`ezcDocumentPdfTransactionalDriverWrapperState`](./classes/ezcDocumentPdfTransactionalDriverWrapperState.md) | Driver wrapper state.|
| [`ezcDocumentPdfTransactionalDriverWrapperTests`](./classes/ezcDocumentPdfTransactionalDriverWrapperTests.md) | Test suite for class.|
| [`ezcDocumentPdfVariableListRendererTests`](./classes/ezcDocumentPdfVariableListRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfWrappingTextBoxRenderer`](./classes/ezcDocumentPdfWrappingTextBoxRenderer.md) | Renders an optionally wrapped text box|
| [`ezcDocumentPropertyContainerDomElement`](./classes/ezcDocumentPropertyContainerDomElement.md) | Wrapper class around DOMElement to store additional information<br />associated with DOMElement nodes.|
| [`ezcDocumentRomanListItemGenerator`](./classes/ezcDocumentRomanListItemGenerator.md) | Roman number list item generator.|
| [`ezcDocumentRst`](./classes/ezcDocumentRst.md) | Document handler for RST text documents.|
| [`ezcDocumentRstAnonymousLinkNode`](./classes/ezcDocumentRstAnonymousLinkNode.md) | The anonymous link AST node|
| [`ezcDocumentRstAnonymousReferenceNode`](./classes/ezcDocumentRstAnonymousReferenceNode.md) | The AST node for anonymous hyperlink references|
| [`ezcDocumentRstAttentionDirective`](./classes/ezcDocumentRstAttentionDirective.md) | Visitor for RST important directives|
| [`ezcDocumentRstBlockNode`](./classes/ezcDocumentRstBlockNode.md) | The paragraph AST node|
| [`ezcDocumentRstBlockquoteAnnotationNode`](./classes/ezcDocumentRstBlockquoteAnnotationNode.md) | The blockquote annotation AST node|
| [`ezcDocumentRstBlockquoteNode`](./classes/ezcDocumentRstBlockquoteNode.md) | The blockquote AST node|
| [`ezcDocumentRstBulletListListNode`](./classes/ezcDocumentRstBulletListListNode.md) | An aggregating AST node for bullet list items nodes|
| [`ezcDocumentRstBulletListNode`](./classes/ezcDocumentRstBulletListNode.md) | The bullet list item AST node|
| [`ezcDocumentRstCommentNode`](./classes/ezcDocumentRstCommentNode.md) | The comment AST node|
| [`ezcDocumentRstContentsDirective`](./classes/ezcDocumentRstContentsDirective.md) | Visitor for RST contents directives|
| [`ezcDocumentRstDangerDirective`](./classes/ezcDocumentRstDangerDirective.md) | Visitor for RST danger directives|
| [`ezcDocumentRstDefinitionListListNode`](./classes/ezcDocumentRstDefinitionListListNode.md) | An aggregating AST node for definition list items nodes|
| [`ezcDocumentRstDefinitionListNode`](./classes/ezcDocumentRstDefinitionListNode.md) | The definition list item AST node|
| [`ezcDocumentRstDirective`](./classes/ezcDocumentRstDirective.md) | Visitor for RST directives|
| [`ezcDocumentRstDirectiveNode`](./classes/ezcDocumentRstDirectiveNode.md) | The AST node for RST document directives|
| [`ezcDocumentRstDocbookVisitor`](./classes/ezcDocumentRstDocbookVisitor.md) | Docbook visitor for the RST AST.|
| [`ezcDocumentRstDocbookVisitorTests`](./classes/ezcDocumentRstDocbookVisitorTests.md) | Test suite for class.|
| [`ezcDocumentRstDocumentNode`](./classes/ezcDocumentRstDocumentNode.md) | The document AST node|
| [`ezcDocumentRstEmphasisTextRole`](./classes/ezcDocumentRstEmphasisTextRole.md) | Visitor for RST emphasis text roles.|
| [`ezcDocumentRstEnumeratedListListNode`](./classes/ezcDocumentRstEnumeratedListListNode.md) | An aggregating AST node for enumeration list items nodes|
| [`ezcDocumentRstEnumeratedListNode`](./classes/ezcDocumentRstEnumeratedListNode.md) | The enumeration lsit item AST node|
| [`ezcDocumentRstExternalReferenceNode`](./classes/ezcDocumentRstExternalReferenceNode.md) | The external reference AST node|
| [`ezcDocumentRstFieldListNode`](./classes/ezcDocumentRstFieldListNode.md) | The field list item AST node|
| [`ezcDocumentRstFigureDirective`](./classes/ezcDocumentRstFigureDirective.md) | Visitor for RST image directives|
| [`ezcDocumentRstFootnoteNode`](./classes/ezcDocumentRstFootnoteNode.md) | The footnote AST node|
| [`ezcDocumentRstImageDirective`](./classes/ezcDocumentRstImageDirective.md) | Visitor for RST image directives|
| [`ezcDocumentRstIncludeDirective`](./classes/ezcDocumentRstIncludeDirective.md) | Visitor for RST include directives|
| [`ezcDocumentRstLineBlockLineNode`](./classes/ezcDocumentRstLineBlockLineNode.md) | The line block line nodes AST node|
| [`ezcDocumentRstLineBlockNode`](./classes/ezcDocumentRstLineBlockNode.md) | The line block AST node|
| [`ezcDocumentRstLinkNode`](./classes/ezcDocumentRstLinkNode.md) | The base link AST node|
| [`ezcDocumentRstLiteralBlockNode`](./classes/ezcDocumentRstLiteralBlockNode.md) | The literal block AST node.|
| [`ezcDocumentRstLiteralNode`](./classes/ezcDocumentRstLiteralNode.md) | The inline literal AST node|
| [`ezcDocumentRstLiteralTextRole`](./classes/ezcDocumentRstLiteralTextRole.md) | Visitor for RST literal text roles.|
| [`ezcDocumentRstMarkupEmphasisNode`](./classes/ezcDocumentRstMarkupEmphasisNode.md) | The inline emphasis markup AST node|
| [`ezcDocumentRstMarkupInlineLiteralNode`](./classes/ezcDocumentRstMarkupInlineLiteralNode.md) | The inline literal markup node AST node|
| [`ezcDocumentRstMarkupInterpretedTextNode`](./classes/ezcDocumentRstMarkupInterpretedTextNode.md) | The inline interpreted text markup AST node|
| [`ezcDocumentRstMarkupNode`](./classes/ezcDocumentRstMarkupNode.md) | The abstract inline markup base AST node|
| [`ezcDocumentRstMarkupStrongEmphasisNode`](./classes/ezcDocumentRstMarkupStrongEmphasisNode.md) | The inline markup AST node for strong emphasis markup|
| [`ezcDocumentRstMarkupSubstitutionNode`](./classes/ezcDocumentRstMarkupSubstitutionNode.md) | The inline AST node for substitution references|
| [`ezcDocumentRstMissingDirectiveHandlerException`](./classes/ezcDocumentRstMissingDirectiveHandlerException.md) | Exception thrown, when a RST contains a directive, for which no handler has<br />been registerd.|
| [`ezcDocumentRstMissingTextRoleHandlerException`](./classes/ezcDocumentRstMissingTextRoleHandlerException.md) | Exception thrown, when a RST contains a text role, for which no handler has<br />been registered.|
| [`ezcDocumentRstNamedReferenceNode`](./classes/ezcDocumentRstNamedReferenceNode.md) | The inline markup AST node for named references (hyperlinks)|
| [`ezcDocumentRstNode`](./classes/ezcDocumentRstNode.md) | Struct for RST document document abstract syntax tree nodes|
| [`ezcDocumentRstNoteDirective`](./classes/ezcDocumentRstNoteDirective.md) | Visitor for RST note directives|
| [`ezcDocumentRstNoticeDirective`](./classes/ezcDocumentRstNoticeDirective.md) | Visitor for RST tip directives|
| [`ezcDocumentRstOptions`](./classes/ezcDocumentRstOptions.md) | Class containing the basic options for the ezcDocumentRst.|
| [`ezcDocumentRstOptionsTests`](./classes/ezcDocumentRstOptionsTests.md) | Test suite for class.|
| [`ezcDocumentRstParagraphNode`](./classes/ezcDocumentRstParagraphNode.md) | The paragraph AST node|
| [`ezcDocumentRstParser`](./classes/ezcDocumentRstParser.md) | Parser for RST documents|
| [`ezcDocumentRstParserTests`](./classes/ezcDocumentRstParserTests.md) | Test suite for class.|
| [`ezcDocumentRstReferenceNode`](./classes/ezcDocumentRstReferenceNode.md) | The internal footnote reference AST node|
| [`ezcDocumentRstSectionNode`](./classes/ezcDocumentRstSectionNode.md) | The document section AST node|
| [`ezcDocumentRstStack`](./classes/ezcDocumentRstStack.md) | RST document stack|
| [`ezcDocumentRstStackTests`](./classes/ezcDocumentRstStackTests.md) | Test suite for class.|
| [`ezcDocumentRstStrongTextRole`](./classes/ezcDocumentRstStrongTextRole.md) | Visitor for RST strong text roles.|
| [`ezcDocumentRstSubscriptTextRole`](./classes/ezcDocumentRstSubscriptTextRole.md) | Visitor for RST subscript text roles.|
| [`ezcDocumentRstSubstitutionNode`](./classes/ezcDocumentRstSubstitutionNode.md) | The substitution target AST node|
| [`ezcDocumentRstSuperscriptTextRole`](./classes/ezcDocumentRstSuperscriptTextRole.md) | Visitor for RST superscript text roles.|
| [`ezcDocumentRstTableBodyNode`](./classes/ezcDocumentRstTableBodyNode.md) | The table body AST node|
| [`ezcDocumentRstTableCellNode`](./classes/ezcDocumentRstTableCellNode.md) | The table cell AST node|
| [`ezcDocumentRstTableHeadNode`](./classes/ezcDocumentRstTableHeadNode.md) | The table head AST node|
| [`ezcDocumentRstTableNode`](./classes/ezcDocumentRstTableNode.md) | The table AST node|
| [`ezcDocumentRstTableRowNode`](./classes/ezcDocumentRstTableRowNode.md) | The table row AST node|
| [`ezcDocumentRstTargetNode`](./classes/ezcDocumentRstTargetNode.md) | The internal target AST node|
| [`ezcDocumentRstTextLineNode`](./classes/ezcDocumentRstTextLineNode.md) | The AST node for plain text|
| [`ezcDocumentRstTextRole`](./classes/ezcDocumentRstTextRole.md) | Visitor for RST text roles|
| [`ezcDocumentRstTitleNode`](./classes/ezcDocumentRstTitleNode.md) | The document title AST node|
| [`ezcDocumentRstTitleReferenceTextRole`](./classes/ezcDocumentRstTitleReferenceTextRole.md) | Visitor for RST title reference text roles.|
| [`ezcDocumentRstToken`](./classes/ezcDocumentRstToken.md) | Struct for RST document document tokens|
| [`ezcDocumentRstTokenizer`](./classes/ezcDocumentRstTokenizer.md) | Tokenizer for RST documents|
| [`ezcDocumentRstTokenizerException`](./classes/ezcDocumentRstTokenizerException.md) | Exception thrown, when the RST tokenizer could not tokenize a character<br />sequence.|
| [`ezcDocumentRstTokenizerTests`](./classes/ezcDocumentRstTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentRstTransitionNode`](./classes/ezcDocumentRstTransitionNode.md) | The AST node for document transitions|
| [`ezcDocumentRstValidationTests`](./classes/ezcDocumentRstValidationTests.md) | Test suite for class.|
| [`ezcDocumentRstVisitor`](./classes/ezcDocumentRstVisitor.md) | Abstract visitor base for RST documents represented by the parser AST.|
| [`ezcDocumentRstWarningDirective`](./classes/ezcDocumentRstWarningDirective.md) | Visitor for RST warning directives|
| [`ezcDocumentRstXhtmlBodyVisitor`](./classes/ezcDocumentRstXhtmlBodyVisitor.md) | HTML visitor for the RST AST, which only produces contents to be embedded<br />somewhere into the body of an existing HTML document.|
| [`ezcDocumentRstXhtmlBodyVisitorTests`](./classes/ezcDocumentRstXhtmlBodyVisitorTests.md) | Test suite for class.|
| [`ezcDocumentRstXhtmlVisitor`](./classes/ezcDocumentRstXhtmlVisitor.md) | HTML visitor for the RST AST.|
| [`ezcDocumentRstXhtmlVisitorTests`](./classes/ezcDocumentRstXhtmlVisitorTests.md) | Test suite for class.|
| [`ezcDocumentTestDummyDirective`](./classes/ezcDocumentTestDummyDirective.md) | Visitor for RST directives|
| [`ezcDocumentTestDummyPlugin`](./classes/ezcDocumentTestDummyPlugin.md) | Visitor for wiki directives|
| [`ezcDocumentTestDummyRole`](./classes/ezcDocumentTestDummyRole.md) | Visitor for RST text roles|
| [`ezcDocumentTestDummyXhtmlDirective`](./classes/ezcDocumentTestDummyXhtmlDirective.md) | Visitor for RST directives|
| [`ezcDocumentTestParagraphDirective`](./classes/ezcDocumentTestParagraphDirective.md) | Visitor for RST directives|
| [`ezcDocumentValidationError`](./classes/ezcDocumentValidationError.md) | Unifies different errors into a single structure for all kinds of validation<br />errors. The validation error message can be fetched using the __toString()<br />method, while the original error is still be available, fi required.|
| [`ezcDocumentVisitException`](./classes/ezcDocumentVisitException.md) | Exception thrown, when the RST visitor could not visit an AST node<br />properly.|
| [`ezcDocumentWiki`](./classes/ezcDocumentWiki.md) | Document handler for wiki text documents.|
| [`ezcDocumentWikiBlockLevelNode`](./classes/ezcDocumentWikiBlockLevelNode.md) | Struct for Wiki document block level abstract syntax tree nodes|
| [`ezcDocumentWikiBlockMarkupToken`](./classes/ezcDocumentWikiBlockMarkupToken.md) | Struct for Wiki document nline markup tokens|
| [`ezcDocumentWikiBlockquoteNode`](./classes/ezcDocumentWikiBlockquoteNode.md) | Struct for Wiki document abstract syntax tree blockquote nodes|
| [`ezcDocumentWikiBoldNode`](./classes/ezcDocumentWikiBoldNode.md) | Struct for Wiki document inline bold syntax tree nodes|
| [`ezcDocumentWikiBoldToken`](./classes/ezcDocumentWikiBoldToken.md) | Struct for Wiki document bold inline markup tokens|
| [`ezcDocumentWikiBulletListItemNode`](./classes/ezcDocumentWikiBulletListItemNode.md) | Struct for Wiki document abstract syntax tree bullet list item nodes|
| [`ezcDocumentWikiBulletListItemToken`](./classes/ezcDocumentWikiBulletListItemToken.md) | Struct for Wiki document bullet list item tokens|
| [`ezcDocumentWikiBulletListNode`](./classes/ezcDocumentWikiBulletListNode.md) | Struct for Wiki document bullet list abstract syntax tree nodes|
| [`ezcDocumentWikiCodePlugin`](./classes/ezcDocumentWikiCodePlugin.md) | Visitor for wiki directives|
| [`ezcDocumentWikiConfluenceLinkStartToken`](./classes/ezcDocumentWikiConfluenceLinkStartToken.md) | Struct for Wiki document link start marker tokens.|
| [`ezcDocumentWikiConfluenceTokenizer`](./classes/ezcDocumentWikiConfluenceTokenizer.md) | Tokenizer for Confluence wiki documents.|
| [`ezcDocumentWikiConfluenceTokenizerTests`](./classes/ezcDocumentWikiConfluenceTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentWikiCreoleTokenizer`](./classes/ezcDocumentWikiCreoleTokenizer.md) | Tokenizer for Creole wiki documents.|
| [`ezcDocumentWikiCreoleTokenizerTests`](./classes/ezcDocumentWikiCreoleTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentWikiDefinitionListItemToken`](./classes/ezcDocumentWikiDefinitionListItemToken.md) | Struct for Wiki document definition list item tokens|
| [`ezcDocumentWikiDeletedNode`](./classes/ezcDocumentWikiDeletedNode.md) | Struct for Wiki document inline deleted syntax tree nodes|
| [`ezcDocumentWikiDeletedToken`](./classes/ezcDocumentWikiDeletedToken.md) | Struct for Wiki document deleted inline markup tokens|
| [`ezcDocumentWikiDocbookVisitor`](./classes/ezcDocumentWikiDocbookVisitor.md) | Docbook visitor for the Wiki AST.|
| [`ezcDocumentWikiDocbookVisitorTests`](./classes/ezcDocumentWikiDocbookVisitorTests.md) | Test suite for class.|
| [`ezcDocumentWikiDocumentNode`](./classes/ezcDocumentWikiDocumentNode.md) | Struct for Wiki document abstract syntax tree root nodes|
| [`ezcDocumentWikiDokuwikiTokenizer`](./classes/ezcDocumentWikiDokuwikiTokenizer.md) | Tokenizer for Dokuwiki wiki documents.|
| [`ezcDocumentWikiDokuwikiTokenizerTests`](./classes/ezcDocumentWikiDokuwikiTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentWikiEndOfFileToken`](./classes/ezcDocumentWikiEndOfFileToken.md) | Struct for Wiki document end of file tokens|
| [`ezcDocumentWikiEnumeratedListItemNode`](./classes/ezcDocumentWikiEnumeratedListItemNode.md) | Struct for Wiki document abstract syntax tree enumerated list item nodes|
| [`ezcDocumentWikiEnumeratedListItemToken`](./classes/ezcDocumentWikiEnumeratedListItemToken.md) | Struct for Wiki document enumerated list item tokens|
| [`ezcDocumentWikiEnumeratedListNode`](./classes/ezcDocumentWikiEnumeratedListNode.md) | Struct for Wiki document enumerated list abstract syntax tree nodes|
| [`ezcDocumentWikiEscapeCharacterToken`](./classes/ezcDocumentWikiEscapeCharacterToken.md) | Struct for Wiki document escape character tokens|
| [`ezcDocumentWikiExternalLinkNode`](./classes/ezcDocumentWikiExternalLinkNode.md) | Struct for Wiki document inline external link syntax tree nodes|
| [`ezcDocumentWikiExternalLinkToken`](./classes/ezcDocumentWikiExternalLinkToken.md) | Struct for Wiki document external link tokens|
| [`ezcDocumentWikiFootnoteEndNode`](./classes/ezcDocumentWikiFootnoteEndNode.md) | Struct for Wiki document inline footnote end syntax tree nodes|
| [`ezcDocumentWikiFootnoteEndToken`](./classes/ezcDocumentWikiFootnoteEndToken.md) | Struct for Wiki document footnote tag close marker tokens|
| [`ezcDocumentWikiFootnoteNode`](./classes/ezcDocumentWikiFootnoteNode.md) | Struct for Wiki document inline footnote syntax tree nodes|
| [`ezcDocumentWikiFootnoteStartToken`](./classes/ezcDocumentWikiFootnoteStartToken.md) | Struct for Wiki document footnote tag open marker tokens|
| [`ezcDocumentWikiImageEndNode`](./classes/ezcDocumentWikiImageEndNode.md) | Struct for Wiki document inline image end syntax tree nodes|
| [`ezcDocumentWikiImageEndToken`](./classes/ezcDocumentWikiImageEndToken.md) | Struct for Wiki document image tag close marker tokens|
| [`ezcDocumentWikiImageNode`](./classes/ezcDocumentWikiImageNode.md) | Struct for Wiki document inline image syntax tree nodes|
| [`ezcDocumentWikiImageStartToken`](./classes/ezcDocumentWikiImageStartToken.md) | Struct for Wiki document image tag open marker tokens|
| [`ezcDocumentWikiInlineLiteralNode`](./classes/ezcDocumentWikiInlineLiteralNode.md) | Struct for Wiki document inline literal syntax tree nodes|
| [`ezcDocumentWikiInlineLiteralToken`](./classes/ezcDocumentWikiInlineLiteralToken.md) | Struct for Wiki document literal inline markup tokens|
| [`ezcDocumentWikiInlineMarkupToken`](./classes/ezcDocumentWikiInlineMarkupToken.md) | Struct for Wiki document nline markup tokens|
| [`ezcDocumentWikiInlineNode`](./classes/ezcDocumentWikiInlineNode.md) | Struct for Wiki document inline abstract syntax tree nodes|
| [`ezcDocumentWikiInlineQuoteNode`](./classes/ezcDocumentWikiInlineQuoteNode.md) | Struct for Wiki document inline quote syntax tree nodes|
| [`ezcDocumentWikiInlineQuoteToken`](./classes/ezcDocumentWikiInlineQuoteToken.md) | Struct for Wiki document inline quote markup tokens|
| [`ezcDocumentWikiInterWikiLinkNode`](./classes/ezcDocumentWikiInterWikiLinkNode.md) | Struct for Wiki document inline inter wiki link syntax tree nodes|
| [`ezcDocumentWikiInterWikiLinkToken`](./classes/ezcDocumentWikiInterWikiLinkToken.md) | Struct for Wiki document inter wiki link tokens|
| [`ezcDocumentWikiInternalLinkNode`](./classes/ezcDocumentWikiInternalLinkNode.md) | Struct for Wiki document inline internal link syntax tree nodes|
| [`ezcDocumentWikiInternalLinkToken`](./classes/ezcDocumentWikiInternalLinkToken.md) | Struct for Wiki document internal link tokens|
| [`ezcDocumentWikiInvisibleBreakNode`](./classes/ezcDocumentWikiInvisibleBreakNode.md) | Struct for Wiki document abstract syntax tree title nodes|
| [`ezcDocumentWikiItalicNode`](./classes/ezcDocumentWikiItalicNode.md) | Struct for Wiki document inline italic syntax tree nodes|
| [`ezcDocumentWikiItalicToken`](./classes/ezcDocumentWikiItalicToken.md) | Struct for Wiki document italic inline markup tokens|
| [`ezcDocumentWikiLineBreakNode`](./classes/ezcDocumentWikiLineBreakNode.md) | Struct for Wiki document inline intentional line break syntax tree nodes|
| [`ezcDocumentWikiLineBreakToken`](./classes/ezcDocumentWikiLineBreakToken.md) | Struct for Wiki document inline line break tokens|
| [`ezcDocumentWikiLineLevelNode`](./classes/ezcDocumentWikiLineLevelNode.md) | Struct for Wiki document block level abstract syntax tree nodes|
| [`ezcDocumentWikiLineMarkupToken`](./classes/ezcDocumentWikiLineMarkupToken.md) | Struct for Wiki document nline markup tokens|
| [`ezcDocumentWikiLinkEndNode`](./classes/ezcDocumentWikiLinkEndNode.md) | Struct for Wiki document inline link end syntax tree nodes|
| [`ezcDocumentWikiLinkEndToken`](./classes/ezcDocumentWikiLinkEndToken.md) | Struct for Wiki document link end marker tokens|
| [`ezcDocumentWikiLinkNode`](./classes/ezcDocumentWikiLinkNode.md) | Struct for Wiki document inline link syntax tree nodes|
| [`ezcDocumentWikiLinkStartToken`](./classes/ezcDocumentWikiLinkStartToken.md) | Struct for Wiki document link start marker tokens|
| [`ezcDocumentWikiListNode`](./classes/ezcDocumentWikiListNode.md) | Struct for Wiki document list abstract syntax tree nodes|
| [`ezcDocumentWikiLiteralBlockNode`](./classes/ezcDocumentWikiLiteralBlockNode.md) | Struct for Wiki document literal block abstract syntax tree nodes|
| [`ezcDocumentWikiLiteralBlockToken`](./classes/ezcDocumentWikiLiteralBlockToken.md) | Struct for Wiki document literal block tokens|
| [`ezcDocumentWikiLiteralLineToken`](./classes/ezcDocumentWikiLiteralLineToken.md) | Struct for Wiki document literal line tokens|
| [`ezcDocumentWikiMatchingInlineNode`](./classes/ezcDocumentWikiMatchingInlineNode.md) | Struct for Wiki document inline abstract syntax tree nodes|
| [`ezcDocumentWikiMediawikiEmphasisToken`](./classes/ezcDocumentWikiMediawikiEmphasisToken.md) | Struct for Wiki document emphasis markup, especially for mediawiki, because<br />here it can only be decided during the actual parsing, if this is a strong<br />or normal emphasis.|
| [`ezcDocumentWikiMediawikiTokenizer`](./classes/ezcDocumentWikiMediawikiTokenizer.md) | Tokenizer for Mediawiki wiki documents.|
| [`ezcDocumentWikiMediawikiTokenizerTests`](./classes/ezcDocumentWikiMediawikiTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentWikiMissingPluginHandlerException`](./classes/ezcDocumentWikiMissingPluginHandlerException.md) | Exception thrown, when a wiki contains a plugin, for which no handler has<br />been registerd.|
| [`ezcDocumentWikiMonospaceNode`](./classes/ezcDocumentWikiMonospaceNode.md) | Struct for Wiki document inline monospace syntax tree nodes|
| [`ezcDocumentWikiMonospaceToken`](./classes/ezcDocumentWikiMonospaceToken.md) | Struct for Wiki document monospace inline markup tokens|
| [`ezcDocumentWikiNewLineToken`](./classes/ezcDocumentWikiNewLineToken.md) | Struct for Wiki document new line tokens|
| [`ezcDocumentWikiNode`](./classes/ezcDocumentWikiNode.md) | Struct for Wiki document document abstract syntax tree nodes|
| [`ezcDocumentWikiOptions`](./classes/ezcDocumentWikiOptions.md) | Class containing the basic options for the ezcDocumentWiki.|
| [`ezcDocumentWikiOptionsTests`](./classes/ezcDocumentWikiOptionsTests.md) | Test suite for class.|
| [`ezcDocumentWikiPageBreakNode`](./classes/ezcDocumentWikiPageBreakNode.md) | Struct for Wiki document abstract syntax tree page break nodes|
| [`ezcDocumentWikiPageBreakToken`](./classes/ezcDocumentWikiPageBreakToken.md) | Struct for Wiki document page break tokens|
| [`ezcDocumentWikiParagraphIndentationToken`](./classes/ezcDocumentWikiParagraphIndentationToken.md) | Struct for Wiki document paragraph indentation tokens|
| [`ezcDocumentWikiParagraphNode`](./classes/ezcDocumentWikiParagraphNode.md) | Struct for Wiki document paragraph abstract syntax tree nodes|
| [`ezcDocumentWikiParser`](./classes/ezcDocumentWikiParser.md) | Parser for wiki documents.|
| [`ezcDocumentWikiParserTests`](./classes/ezcDocumentWikiParserTests.md) | Test suite for class.|
| [`ezcDocumentWikiPlugin`](./classes/ezcDocumentWikiPlugin.md) | Visitor for wiki directives|
| [`ezcDocumentWikiPluginNode`](./classes/ezcDocumentWikiPluginNode.md) | Struct for Wiki document plugin abstract syntax tree nodes|
| [`ezcDocumentWikiPluginToken`](./classes/ezcDocumentWikiPluginToken.md) | Struct for Wiki plugin token.|
| [`ezcDocumentWikiQuoteToken`](./classes/ezcDocumentWikiQuoteToken.md) | Struct for Wiki document quote markup tokens|
| [`ezcDocumentWikiSectionNode`](./classes/ezcDocumentWikiSectionNode.md) | Struct for Wiki section abstract syntax tree root nodes|
| [`ezcDocumentWikiSeparatorNode`](./classes/ezcDocumentWikiSeparatorNode.md) | Struct for Wiki document inline seperator syntax tree nodes|
| [`ezcDocumentWikiSeparatorToken`](./classes/ezcDocumentWikiSeparatorToken.md) | Struct for Wiki document general separator tokens|
| [`ezcDocumentWikiSpecialCharsToken`](./classes/ezcDocumentWikiSpecialCharsToken.md) | Struct for Wiki document special character tokens|
| [`ezcDocumentWikiStrikeToken`](./classes/ezcDocumentWikiStrikeToken.md) | Struct for Wiki document strike-through inline markup tokens|
| [`ezcDocumentWikiSubscriptNode`](./classes/ezcDocumentWikiSubscriptNode.md) | Struct for Wiki document inline subscript syntax tree nodes|
| [`ezcDocumentWikiSubscriptToken`](./classes/ezcDocumentWikiSubscriptToken.md) | Struct for Wiki document subscript inline markup tokens|
| [`ezcDocumentWikiSuperscriptNode`](./classes/ezcDocumentWikiSuperscriptNode.md) | Struct for Wiki document inline superscript syntax tree nodes|
| [`ezcDocumentWikiSuperscriptToken`](./classes/ezcDocumentWikiSuperscriptToken.md) | Struct for Wiki document superscript inline markup tokens|
| [`ezcDocumentWikiTableCellNode`](./classes/ezcDocumentWikiTableCellNode.md) | Struct for Wiki document abstract syntax tree table cell item nodes|
| [`ezcDocumentWikiTableHeaderSeparatorNode`](./classes/ezcDocumentWikiTableHeaderSeparatorNode.md) | Struct for Wiki document inline seperator syntax tree nodes.|
| [`ezcDocumentWikiTableHeaderToken`](./classes/ezcDocumentWikiTableHeaderToken.md) | Struct for Wiki document table header tokens|
| [`ezcDocumentWikiTableNode`](./classes/ezcDocumentWikiTableNode.md) | Struct for Wiki document abstract syntax tree table item nodes|
| [`ezcDocumentWikiTableRowNode`](./classes/ezcDocumentWikiTableRowNode.md) | Struct for Wiki document abstract syntax tree table row item nodes|
| [`ezcDocumentWikiTableRowToken`](./classes/ezcDocumentWikiTableRowToken.md) | Struct for Wiki document table row start tokens|
| [`ezcDocumentWikiTests`](./classes/ezcDocumentWikiTests.md) | Test suite for class.|
| [`ezcDocumentWikiTextLineToken`](./classes/ezcDocumentWikiTextLineToken.md) | Struct for Wiki document text line tokens|
| [`ezcDocumentWikiTextNode`](./classes/ezcDocumentWikiTextNode.md) | Struct for Wiki document abstract syntax tree text nodes|
| [`ezcDocumentWikiTitleNode`](./classes/ezcDocumentWikiTitleNode.md) | Struct for Wiki document abstract syntax tree title nodes|
| [`ezcDocumentWikiTitleToken`](./classes/ezcDocumentWikiTitleToken.md) | Struct for Wiki document title tokens|
| [`ezcDocumentWikiToken`](./classes/ezcDocumentWikiToken.md) | Struct for Wiki document document tokens|
| [`ezcDocumentWikiTokenizer`](./classes/ezcDocumentWikiTokenizer.md) | Tokenizer for wiki documents|
| [`ezcDocumentWikiTokenizerException`](./classes/ezcDocumentWikiTokenizerException.md) | Exception thrown, when the Wiki tokenizer could not tokenize a character<br />sequence.|
| [`ezcDocumentWikiUnderlineNode`](./classes/ezcDocumentWikiUnderlineNode.md) | Struct for Wiki document inline underline syntax tree nodes|
| [`ezcDocumentWikiUnderlineToken`](./classes/ezcDocumentWikiUnderlineToken.md) | Struct for Wiki document underline inline markup tokens|
| [`ezcDocumentWikiVisitor`](./classes/ezcDocumentWikiVisitor.md) | Abstract visitor base for Wiki documents represented by the parser AST.|
| [`ezcDocumentWikiWhitespaceToken`](./classes/ezcDocumentWikiWhitespaceToken.md) | Struct for Wiki document whitespace tokens|
| [`ezcDocumentXhtml`](./classes/ezcDocumentXhtml.md) | The document handler for XHTML document markup.|
| [`ezcDocumentXhtmlBaseFilter`](./classes/ezcDocumentXhtmlBaseFilter.md) | Abstract base class for XHtml filters, assigning semantic information to<br />XHtml documents.|
| [`ezcDocumentXhtmlBlockquoteElementFilter`](./classes/ezcDocumentXhtmlBlockquoteElementFilter.md) | Filter for XHtml blockquotes and blockquote attributions|
| [`ezcDocumentXhtmlContentLocatorFilter`](./classes/ezcDocumentXhtmlContentLocatorFilter.md) | Filter, which tries to lacate the relevant content nodes in a HTML document,<br />and ignores all layout stuff around that.|
| [`ezcDocumentXhtmlDefinitionListElementFilter`](./classes/ezcDocumentXhtmlDefinitionListElementFilter.md) | Filter for XHtml definition lists|
| [`ezcDocumentXhtmlDocbookTests`](./classes/ezcDocumentXhtmlDocbookTests.md) | Test suite for class.|
| [`ezcDocumentXhtmlElementBaseFilter`](./classes/ezcDocumentXhtmlElementBaseFilter.md) | Filter for XHTML elements.|
| [`ezcDocumentXhtmlElementFilter`](./classes/ezcDocumentXhtmlElementFilter.md) | Filter, which assigns semantic information just on the base of XHtml element<br />semantics to the tree.|
| [`ezcDocumentXhtmlElementMappingFilter`](./classes/ezcDocumentXhtmlElementMappingFilter.md) | Filter for XHtml elements, which just do require some plain mapping to<br />semantic docbook elements.|
| [`ezcDocumentXhtmlEnumeratedElementFilter`](./classes/ezcDocumentXhtmlEnumeratedElementFilter.md) | Filter for XHtml enumerated lists.|
| [`ezcDocumentXhtmlFootnoteElementFilter`](./classes/ezcDocumentXhtmlFootnoteElementFilter.md) | Filter for XHtml footnotes, as generated by ezcDocument.|
| [`ezcDocumentXhtmlHeaderElementFilter`](./classes/ezcDocumentXhtmlHeaderElementFilter.md) | Filter for XHtml header elements, including grouping all following siblings<br />on the same header level in a section.|
| [`ezcDocumentXhtmlImageElementFilter`](./classes/ezcDocumentXhtmlImageElementFilter.md) | Filter for XHtml images.|
| [`ezcDocumentXhtmlLineBlockElementFilter`](./classes/ezcDocumentXhtmlLineBlockElementFilter.md) | Filter for XHtml line blocks|
| [`ezcDocumentXhtmlLinkElementFilter`](./classes/ezcDocumentXhtmlLinkElementFilter.md) | Filter for XHtml links.|
| [`ezcDocumentXhtmlLiteralElementFilter`](./classes/ezcDocumentXhtmlLiteralElementFilter.md) | Filter for XHtml literals.|
| [`ezcDocumentXhtmlMetadataFilter`](./classes/ezcDocumentXhtmlMetadataFilter.md) | Filter, which assigns semantic information just on the base of XHtml element<br />semantics to the tree.|
| [`ezcDocumentXhtmlOptions`](./classes/ezcDocumentXhtmlOptions.md) | Class containing the basic options for the ezcDocumentXhtml class.|
| [`ezcDocumentXhtmlOptionsTests`](./classes/ezcDocumentXhtmlOptionsTests.md) | Test suite for class.|
| [`ezcDocumentXhtmlParagraphElementFilter`](./classes/ezcDocumentXhtmlParagraphElementFilter.md) | Filter for XHtml table cells.|
| [`ezcDocumentXhtmlSpecialParagraphElementFilter`](./classes/ezcDocumentXhtmlSpecialParagraphElementFilter.md) | Filter for XHtml table cells.|
| [`ezcDocumentXhtmlStrongElementFilter`](./classes/ezcDocumentXhtmlStrongElementFilter.md) | Filter for XHtml strong emphasis.|
| [`ezcDocumentXhtmlTableCellElementFilter`](./classes/ezcDocumentXhtmlTableCellElementFilter.md) | Filter for XHtml table cells.|
| [`ezcDocumentXhtmlTableElementFilter`](./classes/ezcDocumentXhtmlTableElementFilter.md) | Filter for XHtml table elements.|
| [`ezcDocumentXhtmlTablesFilter`](./classes/ezcDocumentXhtmlTablesFilter.md) | Filter, which tries to filter out tables, which do not have typical table<br />contents. Eg. are used for layout instead of content markup.|
| [`ezcDocumentXhtmlTextToParagraphFilter`](./classes/ezcDocumentXhtmlTextToParagraphFilter.md) | Filter for abandoned text|
| [`ezcDocumentXhtmlValidationTests`](./classes/ezcDocumentXhtmlValidationTests.md) | Test suite for class.|
| [`ezcDocumentXhtmlXpathFilter`](./classes/ezcDocumentXhtmlXpathFilter.md) | Filter, which lets you locate the relevant content nodes by a XPath query.|
| [`ezcDocumentXmlBase`](./classes/ezcDocumentXmlBase.md) | A base class for XML based document type handlers.|
| [`ezcDocumentXmlBaseTests`](./classes/ezcDocumentXmlBaseTests.md) | Test suite for class.|
| [`ezcDocumentXmlOptions`](./classes/ezcDocumentXmlOptions.md) | Class containing the basic options for the ezcDocumentXmlBase|
| [`ezcDocumentXsltConverter`](./classes/ezcDocumentXsltConverter.md) | Base class for conversions between XML documents using XSLT.|
| [`ezcDocumentXsltConverterOptions`](./classes/ezcDocumentXsltConverterOptions.md) | Class containing the basic options for the ezcDocumentEzp3Xml class|
| [`ezcTestDocumentPdfHyphenator`](./classes/ezcTestDocumentPdfHyphenator.md) | Default hyphenation implementation, which does no word splitting at all.|
| [`ezcTestDocumentPdfMockDriver`](./classes/ezcTestDocumentPdfMockDriver.md) | Test implemenation of PDF driver mocking actual driver behaviour|
| [`myAddressDirective`](./classes/myAddressDirective.md) | Visitor for RST directives|
| [`myAddressElementHandler`](./classes/myAddressElementHandler.md) | Basic converter which stores a list of handlers for each node in the docbook<br />element tree. Those handlers will be executed for the elements, when found.|
| [`myAddressElementHandler`](./classes/myAddressElementHandler.md) | Basic converter which stores a list of handlers for each node in the docbook<br />element tree. Those handlers will be executed for the elements, when found.|
| [`myLinkProvider`](./classes/myLinkProvider.md) | Class providing access to links referenced in eZXml documents by url IDs,<br />node IDs or object IDs.|
| [`myProgressFinder`](./classes/myProgressFinder.md) | |
| [`testBaseInitCallback`](./classes/testBaseInitCallback.md) | Test class for ezcBaseInitTest.|
| [`testBaseInitClass`](./classes/testBaseInitClass.md) | Test class for ezcBaseInitTest.|
| [`trBasetestClass`](./classes/trBasetestClass.md) | |
| [`trBasetestClass2`](./classes/trBasetestClass2.md) | |
| [`trBasetestLongClass`](./classes/trBasetestLongClass.md) | |
| [`yxorP`](./classes/yxorP.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Stringable`](./classes/Stringable.md) | |
| [`Twig_CompilerInterface`](./classes/Twig_CompilerInterface.md) | Interface implemented by compiler classes.|
| [`Twig_FilterCallableInterface`](./classes/Twig_FilterCallableInterface.md) | Represents a callable template filter.|
| [`Twig_FilterInterface`](./classes/Twig_FilterInterface.md) | Represents a template filter.|
| [`Twig_FunctionCallableInterface`](./classes/Twig_FunctionCallableInterface.md) | Represents a callable template function.|
| [`Twig_FunctionInterface`](./classes/Twig_FunctionInterface.md) | Represents a template function.|
| [`Twig_LexerInterface`](./classes/Twig_LexerInterface.md) | Interface implemented by lexer classes.|
| [`Twig_NodeInterface`](./classes/Twig_NodeInterface.md) | Represents a node in the AST.|
| [`Twig_ParserInterface`](./classes/Twig_ParserInterface.md) | Interface implemented by parser classes.|
| [`Twig_TemplateInterface`](./classes/Twig_TemplateInterface.md) | Interface implemented by all compiled templates.|
| [`Twig_TestCallableInterface`](./classes/Twig_TestCallableInterface.md) | Represents a callable template test.|
| [`Twig_TestInterface`](./classes/Twig_TestInterface.md) | Represents a template test.|
| [`Twig_TokenParserBrokerInterface`](./classes/Twig_TokenParserBrokerInterface.md) | Interface implemented by token parser brokers.|
| [`ezcBaseConfigurationInitializer`](./classes/ezcBaseConfigurationInitializer.md) | This class provides the interface that classes need to implement to act as<br />an callback initializer class to work with the delayed initialization<br />mechanism.|
| [`ezcBaseExportable`](./classes/ezcBaseExportable.md) | Interface for class of which instances can be exported using var_export().|
| [`ezcBasePersistable`](./classes/ezcBasePersistable.md) | This class provides the interface that classes need to implement to be able<br />to be used by the PersistentObject and Search components.|
| [`ezcDocumentErrorReporting`](./classes/ezcDocumentErrorReporting.md) | Interface for error reporting.|
| [`ezcDocumentLocateable`](./classes/ezcDocumentLocateable.md) | Interface for elements, which have a location ID, and thus can be used by<br />the style inferencer.|
| [`ezcDocumentOdtPcssConverter`](./classes/ezcDocumentOdtPcssConverter.md) | Interface for style converters.|
| [`ezcDocumentOdtPcssPreprocessor`](./classes/ezcDocumentOdtPcssPreprocessor.md) | PCSS style preprocessor interface.|
| [`ezcDocumentOdtStyleFilterRule`](./classes/ezcDocumentOdtStyleFilterRule.md) | Interface for style filter rules.|
| [`ezcDocumentOdtStyler`](./classes/ezcDocumentOdtStyler.md) | Interface for ODT stylers.|
| [`ezcDocumentRstXhtmlDirective`](./classes/ezcDocumentRstXhtmlDirective.md) | Interface for directives also supporting HTML output|
| [`ezcDocumentRstXhtmlTextRole`](./classes/ezcDocumentRstXhtmlTextRole.md) | Interface for text roles also supporting HTML output|
| [`ezcDocumentValidation`](./classes/ezcDocumentValidation.md) | Interface specifying, that the document may be directly exported to HTML.|
| [`ezcDocumentXhtmlConversion`](./classes/ezcDocumentXhtmlConversion.md) | An interface indicating the ability to transform a document directly into<br />XHTML.|

### \Cilex

#### Classes

| Class | Description |
|-------|-------------|
| [`Application`](./classes/Cilex/Application.md) | The Cilex framework class.|
| [`Compiler`](./classes/Cilex/Compiler.md) | The Compiler class compiles the Cilex framework.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ServiceProviderInterface`](./classes/Cilex/ServiceProviderInterface.md) | Interface that must implement all Cilex service providers.|

### \Cilex\Command

#### Classes

| Class | Description |
|-------|-------------|
| [`Command`](./classes/Cilex/Command/Command.md) | Base class for Cilex commands.|
| [`DemoInfoCommand`](./classes/Cilex/Command/DemoInfoCommand.md) | Example command for testing purposes.|
| [`GreetCommand`](./classes/Cilex/Command/GreetCommand.md) | Example command for testing purposes.|

### \Cilex\Provider

#### Classes

| Class | Description |
|-------|-------------|
| [`ConfigServiceProvider`](./classes/Cilex/Provider/ConfigServiceProvider.md) | |
| [`DoctrineServiceProvider`](./classes/Cilex/Provider/DoctrineServiceProvider.md) | Doctrine DBAL Provider.|
| [`JmsSerializerServiceProvider`](./classes/Cilex/Provider/JmsSerializerServiceProvider.md) | Cilex Service Provider to provide serialization services.|
| [`MonologServiceProvider`](./classes/Cilex/Provider/MonologServiceProvider.md) | Monolog Provider.|
| [`ValidatorServiceProvider`](./classes/Cilex/Provider/ValidatorServiceProvider.md) | Symfony Validator component Provider.|

### \Cilex\Provider\Console

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseConsoleServiceProvider`](./classes/Cilex/Provider/Console/BaseConsoleServiceProvider.md) | Pimple Console Service Provider|
| [`ConsoleServiceProvider`](./classes/Cilex/Provider/Console/ConsoleServiceProvider.md) | Cilex Console Service Provider|
| [`ContainerAwareApplication`](./classes/Cilex/Provider/Console/ContainerAwareApplication.md) | Cilex Pimple Console Application|

### \Cilex\Provider\Console\Adapter\Silex

#### Classes

| Class | Description |
|-------|-------------|
| [`ConsoleServiceProvider`](./classes/Cilex/Provider/Console/Adapter/Silex/ConsoleServiceProvider.md) | Silex Console Service Provider adapter|

### \Cilex\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ApplicationTest`](./classes/Cilex/Tests/ApplicationTest.md) | Application test cases.|
| [`ServiceProviderMock`](./classes/Cilex/Tests/ServiceProviderMock.md) | Mock class used to test the register method.|

### \Cilex\Tests\Command

#### Classes

| Class | Description |
|-------|-------------|
| [`CommandMock`](./classes/Cilex/Tests/Command/CommandMock.md) | Base class for Cilex commands.|
| [`CommandTest`](./classes/Cilex/Tests/Command/CommandTest.md) | Command\Command test cases.|

### \Cilex\Tests\Provider

#### Classes

| Class | Description |
|-------|-------------|
| [`ConfigServiceProviderTest`](./classes/Cilex/Tests/Provider/ConfigServiceProviderTest.md) | Test file for ConfigServiceProvider|
| [`ValidatorServiceProviderTest`](./classes/Cilex/Tests/Provider/ValidatorServiceProviderTest.md) | ValidatorServiceProvider.|

### \Cockpit

#### Classes

| Class | Description |
|-------|-------------|
| [`AuthController`](./classes/Cockpit/AuthController.md) | Class Controller|

### \Cockpit\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Accounts`](./classes/Cockpit/Controller/Accounts.md) | Class Controller|
| [`Auth`](./classes/Cockpit/Controller/Auth.md) | Class Controller|
| [`Base`](./classes/Cockpit/Controller/Base.md) | Class Controller|
| [`Media`](./classes/Cockpit/Controller/Media.md) | Class Controller|
| [`RestAdmin`](./classes/Cockpit/Controller/RestAdmin.md) | Class Controller|
| [`RestApi`](./classes/Cockpit/Controller/RestApi.md) | Class Controller|
| [`Settings`](./classes/Cockpit/Controller/Settings.md) | Class Controller|
| [`Utils`](./classes/Cockpit/Controller/Utils.md) | Class Controller|
| [`Webhooks`](./classes/Cockpit/Controller/Webhooks.md) | Class Controller|

### \Cockpit\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](./classes/Cockpit/Helper/Admin.md) | Admin Helper class.|
| [`Async`](./classes/Cockpit/Helper/Async.md) | Async Helper class.|
| [`Csrf`](./classes/Cockpit/Helper/Csrf.md) | |
| [`Jobs`](./classes/Cockpit/Helper/Jobs.md) | |
| [`Revisions`](./classes/Cockpit/Helper/Revisions.md) | |
| [`Updater`](./classes/Cockpit/Helper/Updater.md) | Admin Helper class.|

### \ColinODell\Json5

#### Classes

| Class | Description |
|-------|-------------|
| [`Json5Decoder`](./classes/ColinODell/Json5/Json5Decoder.md) | |
| [`SyntaxError`](./classes/ColinODell/Json5/SyntaxError.md) | |

### \Collections\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](./classes/Collections/Controller/Admin.md) | Class Controller|
| [`Import`](./classes/Collections/Controller/Import.md) | Class Controller|
| [`RestApi`](./classes/Collections/Controller/RestApi.md) | Class Controller|
| [`Trash`](./classes/Collections/Controller/Trash.md) | Class Controller|
| [`Utils`](./classes/Collections/Controller/Utils.md) | Class Controller|

### \ColorThief

#### Classes

| Class | Description |
|-------|-------------|
| [`CMap`](./classes/ColorThief/CMap.md) | |
| [`ColorThief`](./classes/ColorThief/ColorThief.md) | |
| [`PQueue`](./classes/ColorThief/PQueue.md) | |
| [`VBox`](./classes/ColorThief/VBox.md) | |

### \ColorThief\Image

#### Classes

| Class | Description |
|-------|-------------|
| [`ImageLoader`](./classes/ColorThief/Image/ImageLoader.md) | |

### \ColorThief\Image\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`GDImageAdapter`](./classes/ColorThief/Image/Adapter/GDImageAdapter.md) | Base adapter implementation to handle image manipulation.|
| [`GmagickImageAdapter`](./classes/ColorThief/Image/Adapter/GmagickImageAdapter.md) | Base adapter implementation to handle image manipulation.|
| [`ImageAdapter`](./classes/ColorThief/Image/Adapter/ImageAdapter.md) | Base adapter implementation to handle image manipulation.|
| [`ImagickImageAdapter`](./classes/ColorThief/Image/Adapter/ImagickImageAdapter.md) | Base adapter implementation to handle image manipulation.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`IImageAdapter`](./classes/ColorThief/Image/Adapter/IImageAdapter.md) | Basic interface for all image adapters.|

### \Composer

#### Classes

| Class | Description |
|-------|-------------|
| [`InstalledVersions`](./classes/Composer/InstalledVersions.md) | |
| [`InstalledVersions`](./classes/Composer/InstalledVersions.md) | This class is copied in every Composer installed project and available to all|

### \Composer\Autoload

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassLoader`](./classes/Composer/Autoload/ClassLoader.md) | ClassLoader implements a PSR-0, PSR-4 and classmap class loader.|
| [`ClassLoader`](./classes/Composer/Autoload/ClassLoader.md) | ClassLoader implements a PSR-0, PSR-4 and classmap class loader.|
| [`ComposerStaticInit0fc67c8c6d14d2081ce037f8348a35e1`](./classes/Composer/Autoload/ComposerStaticInit0fc67c8c6d14d2081ce037f8348a35e1.md) | |
| [`ComposerStaticInitc066c7ec9ff8668257accf86723d8f09`](./classes/Composer/Autoload/ComposerStaticInitc066c7ec9ff8668257accf86723d8f09.md) | |

### \Cvuorinen\PhpdocMarkdownPublic\Extension

#### Classes

| Class | Description |
|-------|-------------|
| [`TwigClassPublicMethods`](./classes/Cvuorinen/PhpdocMarkdownPublic/Extension/TwigClassPublicMethods.md) | Twig extension to get only the public methods from a \phpDocumentor\Descriptor\ClassDescriptor instance.|
| [`TwigMarkdownAnchorLink`](./classes/Cvuorinen/PhpdocMarkdownPublic/Extension/TwigMarkdownAnchorLink.md) | Twig extension to create Markdown anchor links (within a single page).|

### \Doctrine\Common\Annotations

#### Classes

| Class | Description |
|-------|-------------|
| [`Annotation`](./classes/Doctrine/Common/Annotations/Annotation.md) | Annotations class.|
| [`AnnotationException`](./classes/Doctrine/Common/Annotations/AnnotationException.md) | Description of AnnotationException|
| [`AnnotationReader`](./classes/Doctrine/Common/Annotations/AnnotationReader.md) | A reader for docblock annotations.|
| [`AnnotationRegistry`](./classes/Doctrine/Common/Annotations/AnnotationRegistry.md) | |
| [`CachedReader`](./classes/Doctrine/Common/Annotations/CachedReader.md) | A cache aware annotation reader.|
| [`DocLexer`](./classes/Doctrine/Common/Annotations/DocLexer.md) | Simple lexer for docblock annotations.|
| [`DocParser`](./classes/Doctrine/Common/Annotations/DocParser.md) | A parser for docblock annotations.|
| [`FileCacheReader`](./classes/Doctrine/Common/Annotations/FileCacheReader.md) | File cache reader for annotations.|
| [`ImplicitlyIgnoredAnnotationNames`](./classes/Doctrine/Common/Annotations/ImplicitlyIgnoredAnnotationNames.md) | A list of annotations that are implicitly ignored during the parsing process.|
| [`IndexedReader`](./classes/Doctrine/Common/Annotations/IndexedReader.md) | Allows the reader to be used in-place of Doctrine&#039;s reader.|
| [`PhpParser`](./classes/Doctrine/Common/Annotations/PhpParser.md) | Parses a file for namespaces/use/class declarations.|
| [`PsrCachedReader`](./classes/Doctrine/Common/Annotations/PsrCachedReader.md) | A cache aware annotation reader.|
| [`SimpleAnnotationReader`](./classes/Doctrine/Common/Annotations/SimpleAnnotationReader.md) | Simple Annotation Reader.|
| [`TokenParser`](./classes/Doctrine/Common/Annotations/TokenParser.md) | Parses a file for namespaces/use/class declarations.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`NamedArgumentConstructorAnnotation`](./classes/Doctrine/Common/Annotations/NamedArgumentConstructorAnnotation.md) | Marker interface for PHP7/PHP8 compatible support<br />for named arguments (and constructor property promotion).|
| [`Reader`](./classes/Doctrine/Common/Annotations/Reader.md) | Interface for annotation readers.|

### \Doctrine\Common\Annotations\Annotation

#### Classes

| Class | Description |
|-------|-------------|
| [`Attribute`](./classes/Doctrine/Common/Annotations/Annotation/Attribute.md) | Annotation that can be used to signal to the parser<br />to check the attribute type during the parsing process.|
| [`Attributes`](./classes/Doctrine/Common/Annotations/Annotation/Attributes.md) | Annotation that can be used to signal to the parser<br />to check the types of all declared attributes during the parsing process.|
| [`Enum`](./classes/Doctrine/Common/Annotations/Annotation/Enum.md) | Annotation that can be used to signal to the parser<br />to check the available values during the parsing process.|
| [`IgnoreAnnotation`](./classes/Doctrine/Common/Annotations/Annotation/IgnoreAnnotation.md) | Annotation that can be used to signal to the parser to ignore specific<br />annotations during the parsing process.|
| [`NamedArgumentConstructor`](./classes/Doctrine/Common/Annotations/Annotation/NamedArgumentConstructor.md) | Annotation that indicates that the annotated class should be constructed with a named argument call.|
| [`Required`](./classes/Doctrine/Common/Annotations/Annotation/Required.md) | Annotation that can be used to signal to the parser<br />to check if that attribute is required during the parsing process.|
| [`Target`](./classes/Doctrine/Common/Annotations/Annotation/Target.md) | Annotation that can be used to signal to the parser<br />to check the annotation target during the parsing process.|

### \Doctrine\Common\Lexer

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractLexer`](./classes/Doctrine/Common/Lexer/AbstractLexer.md) | Base class for writing simple lexers, i.e. for creating small DSLs.|

### \Doctrine\Instantiator

#### Classes

| Class | Description |
|-------|-------------|
| [`Instantiator`](./classes/Doctrine/Instantiator/Instantiator.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`InstantiatorInterface`](./classes/Doctrine/Instantiator/InstantiatorInterface.md) | Instantiator provides utility methods to build objects without invoking their constructors|

### \Doctrine\Instantiator\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`InvalidArgumentException`](./classes/Doctrine/Instantiator/Exception/InvalidArgumentException.md) | Exception for invalid arguments provided to the instantiator|
| [`UnexpectedValueException`](./classes/Doctrine/Instantiator/Exception/UnexpectedValueException.md) | Exception for given parameters causing invalid/unexpected state on instantiation|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Doctrine/Instantiator/Exception/ExceptionInterface.md) | Base exception marker interface for the instantiator component|

### \Firebase\JWT

#### Classes

| Class | Description |
|-------|-------------|
| [`BeforeValidException`](./classes/Firebase/JWT/BeforeValidException.md) | |
| [`ExpiredException`](./classes/Firebase/JWT/ExpiredException.md) | |
| [`JWK`](./classes/Firebase/JWT/JWK.md) | JSON Web Key implementation, based on this spec:<br />https://tools.ietf.org/html/draft-ietf-jose-json-web-key-41|
| [`JWT`](./classes/Firebase/JWT/JWT.md) | JSON Web Token implementation, based on this spec:<br />https://tools.ietf.org/html/rfc7519|
| [`SignatureInvalidException`](./classes/Firebase/JWT/SignatureInvalidException.md) | |

### \Forms\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](./classes/Forms/Controller/Admin.md) | Class Controller|
| [`RestApi`](./classes/Forms/Controller/RestApi.md) | Class Controller|

### \Humbug

#### Classes

| Class | Description |
|-------|-------------|
| [`FileGetContents`](./classes/Humbug/FileGetContents.md) | This is largely extracted from the Composer Installer where originally implemented.|

### \Humbug\SelfUpdate

#### Classes

| Class | Description |
|-------|-------------|
| [`Updater`](./classes/Humbug/SelfUpdate/Updater.md) | |
| [`VersionParser`](./classes/Humbug/SelfUpdate/VersionParser.md) | |

### \Humbug\SelfUpdate\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FilesystemException`](./classes/Humbug/SelfUpdate/Exception/FilesystemException.md) | |
| [`HttpRequestException`](./classes/Humbug/SelfUpdate/Exception/HttpRequestException.md) | |
| [`InvalidArgumentException`](./classes/Humbug/SelfUpdate/Exception/InvalidArgumentException.md) | |
| [`JsonParsingException`](./classes/Humbug/SelfUpdate/Exception/JsonParsingException.md) | |
| [`NoSignatureException`](./classes/Humbug/SelfUpdate/Exception/NoSignatureException.md) | |
| [`RuntimeException`](./classes/Humbug/SelfUpdate/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Humbug/SelfUpdate/Exception/ExceptionInterface.md) | |

### \Humbug\SelfUpdate\Strategy

#### Classes

| Class | Description |
|-------|-------------|
| [`GithubStrategy`](./classes/Humbug/SelfUpdate/Strategy/GithubStrategy.md) | |
| [`ShaStrategy`](./classes/Humbug/SelfUpdate/Strategy/ShaStrategy.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`StrategyInterface`](./classes/Humbug/SelfUpdate/Strategy/StrategyInterface.md) | |

### \Humbug\Test

#### Classes

| Class | Description |
|-------|-------------|
| [`FunctionTest`](./classes/Humbug/Test/FunctionTest.md) | |

### \Humbug\Test\SelfUpdate

#### Classes

| Class | Description |
|-------|-------------|
| [`FooStrategy`](./classes/Humbug/Test/SelfUpdate/FooStrategy.md) | |
| [`GithubTestStrategy`](./classes/Humbug/Test/SelfUpdate/GithubTestStrategy.md) | |
| [`UpdaterGithubStrategyTest`](./classes/Humbug/Test/SelfUpdate/UpdaterGithubStrategyTest.md) | |
| [`UpdaterTest`](./classes/Humbug/Test/SelfUpdate/UpdaterTest.md) | |
| [`VersionParserTest`](./classes/Humbug/Test/SelfUpdate/VersionParserTest.md) | |

### \Interop\Container

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ContainerInterface`](./classes/Interop/Container/ContainerInterface.md) | Describes the interface of a container that exposes methods to read its entries.|

### \Interop\Container\Exception

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ContainerException`](./classes/Interop/Container/Exception/ContainerException.md) | Base interface representing a generic exception in a container.|
| [`NotFoundException`](./classes/Interop/Container/Exception/NotFoundException.md) | No entry was found in the container.|

### \JMS\Parser

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractLexer`](./classes/JMS/Parser/AbstractLexer.md) | Abstract Lexer.|
| [`AbstractLexerTest`](./classes/JMS/Parser/AbstractLexerTest.md) | |
| [`AbstractParser`](./classes/JMS/Parser/AbstractParser.md) | Base Parser which provides some useful parsing methods intended for sub-classing.|
| [`SimpleLexer`](./classes/JMS/Parser/SimpleLexer.md) | The simple lexer is a fully usable lexer that does not require sub-classing.|
| [`SyntaxErrorException`](./classes/JMS/Parser/SyntaxErrorException.md) | |

### \JMS\Parser\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractParserTest`](./classes/JMS/Parser/Tests/AbstractParserTest.md) | |

### \JMS\Serializer

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractVisitor`](./classes/JMS/Serializer/AbstractVisitor.md) | |
| [`Context`](./classes/JMS/Serializer/Context.md) | |
| [`DeserializationContext`](./classes/JMS/Serializer/DeserializationContext.md) | |
| [`GenericDeserializationVisitor`](./classes/JMS/Serializer/GenericDeserializationVisitor.md) | Generic Deserialization Visitor.|
| [`GenericSerializationVisitor`](./classes/JMS/Serializer/GenericSerializationVisitor.md) | |
| [`GraphNavigator`](./classes/JMS/Serializer/GraphNavigator.md) | Handles traversal along the object graph.|
| [`JsonDeserializationVisitor`](./classes/JMS/Serializer/JsonDeserializationVisitor.md) | Generic Deserialization Visitor.|
| [`JsonSerializationVisitor`](./classes/JMS/Serializer/JsonSerializationVisitor.md) | |
| [`SerializationContext`](./classes/JMS/Serializer/SerializationContext.md) | |
| [`Serializer`](./classes/JMS/Serializer/Serializer.md) | Serializer Implementation.|
| [`SerializerBuilder`](./classes/JMS/Serializer/SerializerBuilder.md) | Builder for serializer instances.|
| [`TypeParser`](./classes/JMS/Serializer/TypeParser.md) | Parses a serializer type.|
| [`XmlDeserializationVisitor`](./classes/JMS/Serializer/XmlDeserializationVisitor.md) | |
| [`XmlSerializationVisitor`](./classes/JMS/Serializer/XmlSerializationVisitor.md) | XmlSerializationVisitor.|
| [`YamlSerializationVisitor`](./classes/JMS/Serializer/YamlSerializationVisitor.md) | Serialization Visitor for the YAML format.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ArrayTransformerInterface`](./classes/JMS/Serializer/ArrayTransformerInterface.md) | Interface for array transformation.|
| [`SerializerInterface`](./classes/JMS/Serializer/SerializerInterface.md) | Serializer Interface.|
| [`VisitorInterface`](./classes/JMS/Serializer/VisitorInterface.md) | Interface for visitors.|

### \JMS\Serializer\Accessor

#### Classes

| Class | Description |
|-------|-------------|
| [`DefaultAccessorStrategy`](./classes/JMS/Serializer/Accessor/DefaultAccessorStrategy.md) | |
| [`ExpressionAccessorStrategy`](./classes/JMS/Serializer/Accessor/ExpressionAccessorStrategy.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AccessorStrategyInterface`](./classes/JMS/Serializer/Accessor/AccessorStrategyInterface.md) | |

### \JMS\Serializer\Annotation

#### Classes

| Class | Description |
|-------|-------------|
| [`AccessType`](./classes/JMS/Serializer/Annotation/AccessType.md) | |
| [`Accessor`](./classes/JMS/Serializer/Annotation/Accessor.md) | |
| [`AccessorOrder`](./classes/JMS/Serializer/Annotation/AccessorOrder.md) | Controls the order of properties in a class.|
| [`Discriminator`](./classes/JMS/Serializer/Annotation/Discriminator.md) | |
| [`Exclude`](./classes/JMS/Serializer/Annotation/Exclude.md) | |
| [`ExclusionPolicy`](./classes/JMS/Serializer/Annotation/ExclusionPolicy.md) | |
| [`Expose`](./classes/JMS/Serializer/Annotation/Expose.md) | |
| [`Groups`](./classes/JMS/Serializer/Annotation/Groups.md) | |
| [`HandlerCallback`](./classes/JMS/Serializer/Annotation/HandlerCallback.md) | |
| [`Inline`](./classes/JMS/Serializer/Annotation/Inline.md) | |
| [`MaxDepth`](./classes/JMS/Serializer/Annotation/MaxDepth.md) | |
| [`PostDeserialize`](./classes/JMS/Serializer/Annotation/PostDeserialize.md) | This annotation can be defined on methods which are called after the<br />deserialization of the object is complete.|
| [`PostSerialize`](./classes/JMS/Serializer/Annotation/PostSerialize.md) | |
| [`PreSerialize`](./classes/JMS/Serializer/Annotation/PreSerialize.md) | This annotation can be declared on methods which should be called<br />before the Serialization process.|
| [`SerializedName`](./classes/JMS/Serializer/Annotation/SerializedName.md) | |
| [`Since`](./classes/JMS/Serializer/Annotation/Since.md) | |
| [`SkipWhenEmpty`](./classes/JMS/Serializer/Annotation/SkipWhenEmpty.md) | |
| [`Type`](./classes/JMS/Serializer/Annotation/Type.md) | |
| [`Until`](./classes/JMS/Serializer/Annotation/Until.md) | |
| [`Version`](./classes/JMS/Serializer/Annotation/Version.md) | |
| [`VirtualProperty`](./classes/JMS/Serializer/Annotation/VirtualProperty.md) | |
| [`XmlAttribute`](./classes/JMS/Serializer/Annotation/XmlAttribute.md) | |
| [`XmlAttributeMap`](./classes/JMS/Serializer/Annotation/XmlAttributeMap.md) | |
| [`XmlCollection`](./classes/JMS/Serializer/Annotation/XmlCollection.md) | |
| [`XmlDiscriminator`](./classes/JMS/Serializer/Annotation/XmlDiscriminator.md) | |
| [`XmlElement`](./classes/JMS/Serializer/Annotation/XmlElement.md) | |
| [`XmlKeyValuePairs`](./classes/JMS/Serializer/Annotation/XmlKeyValuePairs.md) | |
| [`XmlList`](./classes/JMS/Serializer/Annotation/XmlList.md) | |
| [`XmlMap`](./classes/JMS/Serializer/Annotation/XmlMap.md) | |
| [`XmlNamespace`](./classes/JMS/Serializer/Annotation/XmlNamespace.md) | |
| [`XmlRoot`](./classes/JMS/Serializer/Annotation/XmlRoot.md) | |
| [`XmlValue`](./classes/JMS/Serializer/Annotation/XmlValue.md) | |

### \JMS\Serializer\Builder

#### Classes

| Class | Description |
|-------|-------------|
| [`CallbackDriverFactory`](./classes/JMS/Serializer/Builder/CallbackDriverFactory.md) | |
| [`DefaultDriverFactory`](./classes/JMS/Serializer/Builder/DefaultDriverFactory.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`DriverFactoryInterface`](./classes/JMS/Serializer/Builder/DriverFactoryInterface.md) | |

### \JMS\Serializer\Construction

#### Classes

| Class | Description |
|-------|-------------|
| [`DoctrineObjectConstructor`](./classes/JMS/Serializer/Construction/DoctrineObjectConstructor.md) | Doctrine object constructor for new (or existing) objects during deserialization.|
| [`UnserializeObjectConstructor`](./classes/JMS/Serializer/Construction/UnserializeObjectConstructor.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ObjectConstructorInterface`](./classes/JMS/Serializer/Construction/ObjectConstructorInterface.md) | Implementations of this interface construct new objects during deserialization.|

### \JMS\Serializer\ContextFactory

#### Classes

| Class | Description |
|-------|-------------|
| [`CallableContextFactory`](./classes/JMS/Serializer/ContextFactory/CallableContextFactory.md) | Context Factory using a callable.|
| [`CallableDeserializationContextFactory`](./classes/JMS/Serializer/ContextFactory/CallableDeserializationContextFactory.md) | Deserialization Context Factory using a callable.|
| [`CallableSerializationContextFactory`](./classes/JMS/Serializer/ContextFactory/CallableSerializationContextFactory.md) | Serialization Context Factory using a callable.|
| [`DefaultDeserializationContextFactory`](./classes/JMS/Serializer/ContextFactory/DefaultDeserializationContextFactory.md) | Default Deserialization Context Factory.|
| [`DefaultSerializationContextFactory`](./classes/JMS/Serializer/ContextFactory/DefaultSerializationContextFactory.md) | Default Serialization Context Factory.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`DeserializationContextFactoryInterface`](./classes/JMS/Serializer/ContextFactory/DeserializationContextFactoryInterface.md) | Deserialization Context Factory Interface.|
| [`SerializationContextFactoryInterface`](./classes/JMS/Serializer/ContextFactory/SerializationContextFactoryInterface.md) | Serialization Context Factory Interface.|

### \JMS\Serializer\EventDispatcher

#### Classes

| Class | Description |
|-------|-------------|
| [`Event`](./classes/JMS/Serializer/EventDispatcher/Event.md) | |
| [`EventDispatcher`](./classes/JMS/Serializer/EventDispatcher/EventDispatcher.md) | Light-weight event dispatcher.|
| [`Events`](./classes/JMS/Serializer/EventDispatcher/Events.md) | |
| [`LazyEventDispatcher`](./classes/JMS/Serializer/EventDispatcher/LazyEventDispatcher.md) | Light-weight event dispatcher.|
| [`ObjectEvent`](./classes/JMS/Serializer/EventDispatcher/ObjectEvent.md) | |
| [`PreDeserializeEvent`](./classes/JMS/Serializer/EventDispatcher/PreDeserializeEvent.md) | |
| [`PreSerializeEvent`](./classes/JMS/Serializer/EventDispatcher/PreSerializeEvent.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`EventDispatcherInterface`](./classes/JMS/Serializer/EventDispatcher/EventDispatcherInterface.md) | |
| [`EventSubscriberInterface`](./classes/JMS/Serializer/EventDispatcher/EventSubscriberInterface.md) | |

### \JMS\Serializer\EventDispatcher\Subscriber

#### Classes

| Class | Description |
|-------|-------------|
| [`DoctrineProxySubscriber`](./classes/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.md) | |
| [`SymfonyValidatorSubscriber`](./classes/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriber.md) | |
| [`SymfonyValidatorValidatorSubscriber`](./classes/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriber.md) | |

### \JMS\Serializer\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`ExpressionLanguageRequiredException`](./classes/JMS/Serializer/Exception/ExpressionLanguageRequiredException.md) | LogicException for the Serializer.|
| [`InvalidArgumentException`](./classes/JMS/Serializer/Exception/InvalidArgumentException.md) | InvalidArgumentException for the Serializer.|
| [`LogicException`](./classes/JMS/Serializer/Exception/LogicException.md) | LogicException for the Serializer.|
| [`ObjectConstructionException`](./classes/JMS/Serializer/Exception/ObjectConstructionException.md) | InvalidArgumentException for the Serializer.|
| [`RuntimeException`](./classes/JMS/Serializer/Exception/RuntimeException.md) | RuntimeException for the Serializer.|
| [`UnsupportedFormatException`](./classes/JMS/Serializer/Exception/UnsupportedFormatException.md) | InvalidArgumentException for the Serializer.|
| [`ValidationFailedException`](./classes/JMS/Serializer/Exception/ValidationFailedException.md) | RuntimeException for the Serializer.|
| [`XmlErrorException`](./classes/JMS/Serializer/Exception/XmlErrorException.md) | RuntimeException for the Serializer.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Exception`](./classes/JMS/Serializer/Exception/Exception.md) | Base exception for the Serializer.|

### \JMS\Serializer\Exclusion

#### Classes

| Class | Description |
|-------|-------------|
| [`DepthExclusionStrategy`](./classes/JMS/Serializer/Exclusion/DepthExclusionStrategy.md) | |
| [`DisjunctExclusionStrategy`](./classes/JMS/Serializer/Exclusion/DisjunctExclusionStrategy.md) | Disjunct Exclusion Strategy.|
| [`GroupsExclusionStrategy`](./classes/JMS/Serializer/Exclusion/GroupsExclusionStrategy.md) | |
| [`VersionExclusionStrategy`](./classes/JMS/Serializer/Exclusion/VersionExclusionStrategy.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExclusionStrategyInterface`](./classes/JMS/Serializer/Exclusion/ExclusionStrategyInterface.md) | Interface for exclusion strategies.|

### \JMS\Serializer\Expression

#### Classes

| Class | Description |
|-------|-------------|
| [`ExpressionEvaluator`](./classes/JMS/Serializer/Expression/ExpressionEvaluator.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExpressionEvaluatorInterface`](./classes/JMS/Serializer/Expression/ExpressionEvaluatorInterface.md) | |

### \JMS\Serializer\Handler

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayCollectionHandler`](./classes/JMS/Serializer/Handler/ArrayCollectionHandler.md) | |
| [`ConstraintViolationHandler`](./classes/JMS/Serializer/Handler/ConstraintViolationHandler.md) | |
| [`DateHandler`](./classes/JMS/Serializer/Handler/DateHandler.md) | |
| [`FormErrorHandler`](./classes/JMS/Serializer/Handler/FormErrorHandler.md) | |
| [`HandlerRegistry`](./classes/JMS/Serializer/Handler/HandlerRegistry.md) | |
| [`LazyHandlerRegistry`](./classes/JMS/Serializer/Handler/LazyHandlerRegistry.md) | |
| [`PhpCollectionHandler`](./classes/JMS/Serializer/Handler/PhpCollectionHandler.md) | |
| [`PropelCollectionHandler`](./classes/JMS/Serializer/Handler/PropelCollectionHandler.md) | |
| [`StdClassHandler`](./classes/JMS/Serializer/Handler/StdClassHandler.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`HandlerRegistryInterface`](./classes/JMS/Serializer/Handler/HandlerRegistryInterface.md) | Handler Registry Interface.|
| [`SubscribingHandlerInterface`](./classes/JMS/Serializer/Handler/SubscribingHandlerInterface.md) | |

### \JMS\Serializer\Metadata

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassMetadata`](./classes/JMS/Serializer/Metadata/ClassMetadata.md) | Class Metadata used to customize the serialization process.|
| [`ExpressionPropertyMetadata`](./classes/JMS/Serializer/Metadata/ExpressionPropertyMetadata.md) | Base class for property metadata.|
| [`PropertyMetadata`](./classes/JMS/Serializer/Metadata/PropertyMetadata.md) | Base class for property metadata.|
| [`StaticPropertyMetadata`](./classes/JMS/Serializer/Metadata/StaticPropertyMetadata.md) | Base class for property metadata.|
| [`VirtualPropertyMetadata`](./classes/JMS/Serializer/Metadata/VirtualPropertyMetadata.md) | Base class for property metadata.|

### \JMS\Serializer\Metadata\Driver

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractDoctrineTypeDriver`](./classes/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.md) | This class decorates any other driver. If the inner driver does not provide a<br />a property type, the decorator will guess based on Doctrine 2 metadata.|
| [`AnnotationDriver`](./classes/JMS/Serializer/Metadata/Driver/AnnotationDriver.md) | |
| [`DoctrinePHPCRTypeDriver`](./classes/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.md) | This class decorates any other driver. If the inner driver does not provide a<br />a property type, the decorator will guess based on Doctrine 2 metadata.|
| [`DoctrineTypeDriver`](./classes/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.md) | This class decorates any other driver. If the inner driver does not provide a<br />a property type, the decorator will guess based on Doctrine 2 metadata.|
| [`PhpDriver`](./classes/JMS/Serializer/Metadata/Driver/PhpDriver.md) | Base file driver implementation.|
| [`XmlDriver`](./classes/JMS/Serializer/Metadata/Driver/XmlDriver.md) | Base file driver implementation.|
| [`YamlDriver`](./classes/JMS/Serializer/Metadata/Driver/YamlDriver.md) | Base file driver implementation.|

### \JMS\Serializer\Naming

#### Classes

| Class | Description |
|-------|-------------|
| [`CacheNamingStrategy`](./classes/JMS/Serializer/Naming/CacheNamingStrategy.md) | |
| [`CamelCaseNamingStrategy`](./classes/JMS/Serializer/Naming/CamelCaseNamingStrategy.md) | Generic naming strategy which translates a camel-cased property name.|
| [`IdenticalPropertyNamingStrategy`](./classes/JMS/Serializer/Naming/IdenticalPropertyNamingStrategy.md) | |
| [`SerializedNameAnnotationStrategy`](./classes/JMS/Serializer/Naming/SerializedNameAnnotationStrategy.md) | Naming strategy which uses an annotation to translate the property name.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`PropertyNamingStrategyInterface`](./classes/JMS/Serializer/Naming/PropertyNamingStrategyInterface.md) | Interface for property naming strategies.|

### \JMS\Serializer\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`SerializerBuilderTest`](./classes/JMS/Serializer/Tests/SerializerBuilderTest.md) | |

### \JMS\Serializer\Tests\Exclusion

#### Classes

| Class | Description |
|-------|-------------|
| [`DisjunctExclusionStrategyTest`](./classes/JMS/Serializer/Tests/Exclusion/DisjunctExclusionStrategyTest.md) | |
| [`GroupsExclusionStrategyTest`](./classes/JMS/Serializer/Tests/Exclusion/GroupsExclusionStrategyTest.md) | |

### \JMS\Serializer\Tests\Fixtures

#### Classes

| Class | Description |
|-------|-------------|
| [`AccessorOrderChild`](./classes/JMS/Serializer/Tests/Fixtures/AccessorOrderChild.md) | |
| [`AccessorOrderMethod`](./classes/JMS/Serializer/Tests/Fixtures/AccessorOrderMethod.md) | |
| [`AccessorOrderParent`](./classes/JMS/Serializer/Tests/Fixtures/AccessorOrderParent.md) | |
| [`AccessorSetter`](./classes/JMS/Serializer/Tests/Fixtures/AccessorSetter.md) | |
| [`AccessorSetterElement`](./classes/JMS/Serializer/Tests/Fixtures/AccessorSetterElement.md) | |
| [`AllExcludedObject`](./classes/JMS/Serializer/Tests/Fixtures/AllExcludedObject.md) | |
| [`Article`](./classes/JMS/Serializer/Tests/Fixtures/Article.md) | |
| [`Author`](./classes/JMS/Serializer/Tests/Fixtures/Author.md) | |
| [`AuthorExpressionAccess`](./classes/JMS/Serializer/Tests/Fixtures/AuthorExpressionAccess.md) | |
| [`AuthorList`](./classes/JMS/Serializer/Tests/Fixtures/AuthorList.md) | An array-acting object that holds many author instances.|
| [`AuthorReadOnly`](./classes/JMS/Serializer/Tests/Fixtures/AuthorReadOnly.md) | |
| [`AuthorReadOnlyPerClass`](./classes/JMS/Serializer/Tests/Fixtures/AuthorReadOnlyPerClass.md) | |
| [`BlogPost`](./classes/JMS/Serializer/Tests/Fixtures/BlogPost.md) | |
| [`CircularReferenceChild`](./classes/JMS/Serializer/Tests/Fixtures/CircularReferenceChild.md) | |
| [`CircularReferenceParent`](./classes/JMS/Serializer/Tests/Fixtures/CircularReferenceParent.md) | No annotation|
| [`Comment`](./classes/JMS/Serializer/Tests/Fixtures/Comment.md) | |
| [`CurrencyAwareOrder`](./classes/JMS/Serializer/Tests/Fixtures/CurrencyAwareOrder.md) | |
| [`CurrencyAwarePrice`](./classes/JMS/Serializer/Tests/Fixtures/CurrencyAwarePrice.md) | |
| [`CustomDeserializationObject`](./classes/JMS/Serializer/Tests/Fixtures/CustomDeserializationObject.md) | |
| [`DateTimeArraysObject`](./classes/JMS/Serializer/Tests/Fixtures/DateTimeArraysObject.md) | |
| [`Garage`](./classes/JMS/Serializer/Tests/Fixtures/Garage.md) | |
| [`GetSetObject`](./classes/JMS/Serializer/Tests/Fixtures/GetSetObject.md) | |
| [`GroupsObject`](./classes/JMS/Serializer/Tests/Fixtures/GroupsObject.md) | blablub|
| [`GroupsUser`](./classes/JMS/Serializer/Tests/Fixtures/GroupsUser.md) | |
| [`IndexedCommentsBlogPost`](./classes/JMS/Serializer/Tests/Fixtures/IndexedCommentsBlogPost.md) | |
| [`IndexedCommentsList`](./classes/JMS/Serializer/Tests/Fixtures/IndexedCommentsList.md) | |
| [`InitializedBlogPostConstructor`](./classes/JMS/Serializer/Tests/Fixtures/InitializedBlogPostConstructor.md) | |
| [`InitializedObjectConstructor`](./classes/JMS/Serializer/Tests/Fixtures/InitializedObjectConstructor.md) | Object constructor that allows deserialization into already constructed<br />objects passed through the deserialization context|
| [`InlineChild`](./classes/JMS/Serializer/Tests/Fixtures/InlineChild.md) | |
| [`InlineChildEmpty`](./classes/JMS/Serializer/Tests/Fixtures/InlineChildEmpty.md) | |
| [`InlineChildWithGroups`](./classes/JMS/Serializer/Tests/Fixtures/InlineChildWithGroups.md) | |
| [`InlineParent`](./classes/JMS/Serializer/Tests/Fixtures/InlineParent.md) | |
| [`Input`](./classes/JMS/Serializer/Tests/Fixtures/Input.md) | |
| [`InvalidGroupsObject`](./classes/JMS/Serializer/Tests/Fixtures/InvalidGroupsObject.md) | |
| [`InvalidUsageOfXmlValue`](./classes/JMS/Serializer/Tests/Fixtures/InvalidUsageOfXmlValue.md) | Dummy|
| [`Log`](./classes/JMS/Serializer/Tests/Fixtures/Log.md) | |
| [`NamedDateTimeArraysObject`](./classes/JMS/Serializer/Tests/Fixtures/NamedDateTimeArraysObject.md) | |
| [`NamedDateTimeImmutableArraysObject`](./classes/JMS/Serializer/Tests/Fixtures/NamedDateTimeImmutableArraysObject.md) | |
| [`Node`](./classes/JMS/Serializer/Tests/Fixtures/Node.md) | |
| [`ObjectWithAbsentXmlListNode`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithAbsentXmlListNode.md) | |
| [`ObjectWithEmptyArrayAndHash`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithEmptyArrayAndHash.md) | |
| [`ObjectWithEmptyHash`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithEmptyHash.md) | |
| [`ObjectWithEmptyNullableAndEmptyArrays`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithEmptyNullableAndEmptyArrays.md) | |
| [`ObjectWithExpressionVirtualPropertiesAndExcludeAll`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithExpressionVirtualPropertiesAndExcludeAll.md) | |
| [`ObjectWithHandlerCallbacks`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithHandlerCallbacks.md) | |
| [`ObjectWithIntListAndIntMap`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithIntListAndIntMap.md) | |
| [`ObjectWithLifecycleCallbacks`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithLifecycleCallbacks.md) | |
| [`ObjectWithNamespacesAndList`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithNamespacesAndList.md) | |
| [`ObjectWithNullProperty`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithNullProperty.md) | |
| [`ObjectWithObjectProperty`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithObjectProperty.md) | |
| [`ObjectWithToString`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithToString.md) | |
| [`ObjectWithVersionedVirtualProperties`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithVersionedVirtualProperties.md) | dummy comment|
| [`ObjectWithVirtualProperties`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithVirtualProperties.md) | |
| [`ObjectWithVirtualPropertiesAndExcludeAll`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithVirtualPropertiesAndExcludeAll.md) | |
| [`ObjectWithVirtualXmlProperties`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithVirtualXmlProperties.md) | |
| [`ObjectWithXmlKeyValuePairs`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithXmlKeyValuePairs.md) | |
| [`ObjectWithXmlNamespaces`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithXmlNamespaces.md) | |
| [`ObjectWithXmlNamespacesAndObjectProperty`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithXmlNamespacesAndObjectProperty.md) | |
| [`ObjectWithXmlNamespacesAndObjectPropertyAuthor`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyAuthor.md) | |
| [`ObjectWithXmlNamespacesAndObjectPropertyVirtual`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyVirtual.md) | |
| [`ObjectWithXmlRootNamespace`](./classes/JMS/Serializer/Tests/Fixtures/ObjectWithXmlRootNamespace.md) | |
| [`Order`](./classes/JMS/Serializer/Tests/Fixtures/Order.md) | |
| [`ParentDoNotSkipWithEmptyChild`](./classes/JMS/Serializer/Tests/Fixtures/ParentDoNotSkipWithEmptyChild.md) | |
| [`ParentSkipWithEmptyChild`](./classes/JMS/Serializer/Tests/Fixtures/ParentSkipWithEmptyChild.md) | |
| [`Person`](./classes/JMS/Serializer/Tests/Fixtures/Person.md) | |
| [`PersonCollection`](./classes/JMS/Serializer/Tests/Fixtures/PersonCollection.md) | |
| [`PersonLocation`](./classes/JMS/Serializer/Tests/Fixtures/PersonLocation.md) | |
| [`PersonSecret`](./classes/JMS/Serializer/Tests/Fixtures/PersonSecret.md) | |
| [`PersonSecretMore`](./classes/JMS/Serializer/Tests/Fixtures/PersonSecretMore.md) | |
| [`PersonSecretMoreVirtual`](./classes/JMS/Serializer/Tests/Fixtures/PersonSecretMoreVirtual.md) | |
| [`PersonSecretVirtual`](./classes/JMS/Serializer/Tests/Fixtures/PersonSecretVirtual.md) | |
| [`Price`](./classes/JMS/Serializer/Tests/Fixtures/Price.md) | |
| [`Publisher`](./classes/JMS/Serializer/Tests/Fixtures/Publisher.md) | |
| [`SimpleClassObject`](./classes/JMS/Serializer/Tests/Fixtures/SimpleClassObject.md) | |
| [`SimpleObject`](./classes/JMS/Serializer/Tests/Fixtures/SimpleObject.md) | |
| [`SimpleObjectProxy`](./classes/JMS/Serializer/Tests/Fixtures/SimpleObjectProxy.md) | |
| [`SimpleSubClassObject`](./classes/JMS/Serializer/Tests/Fixtures/SimpleSubClassObject.md) | |
| [`Tag`](./classes/JMS/Serializer/Tests/Fixtures/Tag.md) | |
| [`Timestamp`](./classes/JMS/Serializer/Tests/Fixtures/Timestamp.md) | |
| [`Tree`](./classes/JMS/Serializer/Tests/Fixtures/Tree.md) | |
| [`VehicleInterfaceGarage`](./classes/JMS/Serializer/Tests/Fixtures/VehicleInterfaceGarage.md) | |
| [`VersionedObject`](./classes/JMS/Serializer/Tests/Fixtures/VersionedObject.md) | |

### \JMS\Serializer\Tests\Fixtures\Discriminator

#### Classes

| Class | Description |
|-------|-------------|
| [`Car`](./classes/JMS/Serializer/Tests/Fixtures/Discriminator/Car.md) | |
| [`Moped`](./classes/JMS/Serializer/Tests/Fixtures/Discriminator/Moped.md) | |
| [`ObjectWithXmlAttributeDiscriminatorChild`](./classes/JMS/Serializer/Tests/Fixtures/Discriminator/ObjectWithXmlAttributeDiscriminatorChild.md) | |
| [`ObjectWithXmlAttributeDiscriminatorParent`](./classes/JMS/Serializer/Tests/Fixtures/Discriminator/ObjectWithXmlAttributeDiscriminatorParent.md) | |
| [`ObjectWithXmlNamespaceDiscriminatorChild`](./classes/JMS/Serializer/Tests/Fixtures/Discriminator/ObjectWithXmlNamespaceDiscriminatorChild.md) | |
| [`ObjectWithXmlNamespaceDiscriminatorParent`](./classes/JMS/Serializer/Tests/Fixtures/Discriminator/ObjectWithXmlNamespaceDiscriminatorParent.md) | |
| [`ObjectWithXmlNotCDataDiscriminatorChild`](./classes/JMS/Serializer/Tests/Fixtures/Discriminator/ObjectWithXmlNotCDataDiscriminatorChild.md) | |
| [`ObjectWithXmlNotCDataDiscriminatorParent`](./classes/JMS/Serializer/Tests/Fixtures/Discriminator/ObjectWithXmlNotCDataDiscriminatorParent.md) | |
| [`Vehicle`](./classes/JMS/Serializer/Tests/Fixtures/Discriminator/Vehicle.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`VehicleInterface`](./classes/JMS/Serializer/Tests/Fixtures/Discriminator/VehicleInterface.md) | |

### \JMS\Serializer\Tests\Fixtures\DiscriminatorGroup

#### Classes

| Class | Description |
|-------|-------------|
| [`Car`](./classes/JMS/Serializer/Tests/Fixtures/DiscriminatorGroup/Car.md) | |
| [`Vehicle`](./classes/JMS/Serializer/Tests/Fixtures/DiscriminatorGroup/Vehicle.md) | |

### \JMS\Serializer\Tests\Fixtures\Doctrine

#### Classes

| Class | Description |
|-------|-------------|
| [`Author`](./classes/JMS/Serializer/Tests/Fixtures/Doctrine/Author.md) | |
| [`BlogPost`](./classes/JMS/Serializer/Tests/Fixtures/Doctrine/BlogPost.md) | |
| [`Comment`](./classes/JMS/Serializer/Tests/Fixtures/Doctrine/Comment.md) | |

### \JMS\Serializer\Tests\Fixtures\DoctrinePHPCR

#### Classes

| Class | Description |
|-------|-------------|
| [`Author`](./classes/JMS/Serializer/Tests/Fixtures/DoctrinePHPCR/Author.md) | |
| [`BlogPost`](./classes/JMS/Serializer/Tests/Fixtures/DoctrinePHPCR/BlogPost.md) | |
| [`Comment`](./classes/JMS/Serializer/Tests/Fixtures/DoctrinePHPCR/Comment.md) | |

### \JMS\Serializer\Tests\Fixtures\Doctrine\SingleTableInheritance

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractModel`](./classes/JMS/Serializer/Tests/Fixtures/Doctrine/SingleTableInheritance/AbstractModel.md) | Abstract base class without Entity annotation|
| [`Clazz`](./classes/JMS/Serializer/Tests/Fixtures/Doctrine/SingleTableInheritance/Clazz.md) | Abstract base class without Entity annotation|
| [`Organization`](./classes/JMS/Serializer/Tests/Fixtures/Doctrine/SingleTableInheritance/Organization.md) | |
| [`Person`](./classes/JMS/Serializer/Tests/Fixtures/Doctrine/SingleTableInheritance/Person.md) | Abstract base class without Entity annotation|
| [`School`](./classes/JMS/Serializer/Tests/Fixtures/Doctrine/SingleTableInheritance/School.md) | |
| [`Student`](./classes/JMS/Serializer/Tests/Fixtures/Doctrine/SingleTableInheritance/Student.md) | Abstract base class without Entity annotation|
| [`Teacher`](./classes/JMS/Serializer/Tests/Fixtures/Doctrine/SingleTableInheritance/Teacher.md) | Abstract base class without Entity annotation|

### \JMS\Serializer\Tests\Fixtures\ExclusionStrategy

#### Classes

| Class | Description |
|-------|-------------|
| [`AlwaysExcludeExclusionStrategy`](./classes/JMS/Serializer/Tests/Fixtures/ExclusionStrategy/AlwaysExcludeExclusionStrategy.md) | |

### \JMS\Serializer\Tests\Fixtures\MaxDepth

#### Classes

| Class | Description |
|-------|-------------|
| [`Gh236Bar`](./classes/JMS/Serializer/Tests/Fixtures/MaxDepth/Gh236Bar.md) | |
| [`Gh236Foo`](./classes/JMS/Serializer/Tests/Fixtures/MaxDepth/Gh236Foo.md) | |

### \JMS\Serializer\Tests\Handler

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayCollectionHandlerTest`](./classes/JMS/Serializer/Tests/Handler/ArrayCollectionHandlerTest.md) | |
| [`FormErrorHandlerTest`](./classes/JMS/Serializer/Tests/Handler/FormErrorHandlerTest.md) | |
| [`PropelCollectionHandlerTest`](./classes/JMS/Serializer/Tests/Handler/PropelCollectionHandlerTest.md) | |
| [`TestSubject`](./classes/JMS/Serializer/Tests/Handler/TestSubject.md) | |

### \JMS\Serializer\Tests\Metadata

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassMetadataTest`](./classes/JMS/Serializer/Tests/Metadata/ClassMetadataTest.md) | |
| [`PropertyMetadataOrder`](./classes/JMS/Serializer/Tests/Metadata/PropertyMetadataOrder.md) | |
| [`PropertyMetadataPublicMethod`](./classes/JMS/Serializer/Tests/Metadata/PropertyMetadataPublicMethod.md) | |

### \JMS\Serializer\Tests\Metadata\Driver

#### Classes

| Class | Description |
|-------|-------------|
| [`AnnotationDriverTest`](./classes/JMS/Serializer/Tests/Metadata/Driver/AnnotationDriverTest.md) | |
| [`BaseDriverTest`](./classes/JMS/Serializer/Tests/Metadata/Driver/BaseDriverTest.md) | |
| [`DoctrineDriverTest`](./classes/JMS/Serializer/Tests/Metadata/Driver/DoctrineDriverTest.md) | |
| [`DoctrinePHPCRDriverTest`](./classes/JMS/Serializer/Tests/Metadata/Driver/DoctrinePHPCRDriverTest.md) | |
| [`PhpDriverTest`](./classes/JMS/Serializer/Tests/Metadata/Driver/PhpDriverTest.md) | |
| [`XmlDriverTest`](./classes/JMS/Serializer/Tests/Metadata/Driver/XmlDriverTest.md) | |
| [`YamlDriverTest`](./classes/JMS/Serializer/Tests/Metadata/Driver/YamlDriverTest.md) | |

### \JMS\Serializer\Tests\Serializer

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayTest`](./classes/JMS/Serializer/Tests/Serializer/ArrayTest.md) | |
| [`BaseSerializationTest`](./classes/JMS/Serializer/Tests/Serializer/BaseSerializationTest.md) | |
| [`ContextTest`](./classes/JMS/Serializer/Tests/Serializer/ContextTest.md) | |
| [`DateIntervalFormatTest`](./classes/JMS/Serializer/Tests/Serializer/DateIntervalFormatTest.md) | |
| [`GraphNavigatorTest`](./classes/JMS/Serializer/Tests/Serializer/GraphNavigatorTest.md) | |
| [`JsonSerializationTest`](./classes/JMS/Serializer/Tests/Serializer/JsonSerializationTest.md) | |
| [`LinkAddingSubscriber`](./classes/JMS/Serializer/Tests/Serializer/LinkAddingSubscriber.md) | |
| [`ReplaceNameSubscriber`](./classes/JMS/Serializer/Tests/Serializer/ReplaceNameSubscriber.md) | |
| [`SerializableClass`](./classes/JMS/Serializer/Tests/Serializer/SerializableClass.md) | |
| [`SerializationContextFactoryTest`](./classes/JMS/Serializer/Tests/Serializer/SerializationContextFactoryTest.md) | |
| [`TestSubscribingHandler`](./classes/JMS/Serializer/Tests/Serializer/TestSubscribingHandler.md) | |
| [`TypeParserTest`](./classes/JMS/Serializer/Tests/Serializer/TypeParserTest.md) | |
| [`XmlSerializationTest`](./classes/JMS/Serializer/Tests/Serializer/XmlSerializationTest.md) | |
| [`YamlSerializationTest`](./classes/JMS/Serializer/Tests/Serializer/YamlSerializationTest.md) | |

### \JMS\Serializer\Tests\Serializer\Doctrine

#### Classes

| Class | Description |
|-------|-------------|
| [`IntegrationTest`](./classes/JMS/Serializer/Tests/Serializer/Doctrine/IntegrationTest.md) | |
| [`ObjectConstructorTest`](./classes/JMS/Serializer/Tests/Serializer/Doctrine/ObjectConstructorTest.md) | |
| [`SimpleBaseManagerRegistry`](./classes/JMS/Serializer/Tests/Serializer/Doctrine/SimpleBaseManagerRegistry.md) | |
| [`SimpleManagerRegistry`](./classes/JMS/Serializer/Tests/Serializer/Doctrine/SimpleManagerRegistry.md) | |

### \JMS\Serializer\Tests\Serializer\EventDispatcher

#### Classes

| Class | Description |
|-------|-------------|
| [`EventDispatcherTest`](./classes/JMS/Serializer/Tests/Serializer/EventDispatcher/EventDispatcherTest.md) | |
| [`MockListener`](./classes/JMS/Serializer/Tests/Serializer/EventDispatcher/MockListener.md) | |
| [`MockSubscriber`](./classes/JMS/Serializer/Tests/Serializer/EventDispatcher/MockSubscriber.md) | |

### \JMS\Serializer\Tests\Serializer\EventDispatcher\Subscriber

#### Classes

| Class | Description |
|-------|-------------|
| [`DoctrineProxySubscriberTest`](./classes/JMS/Serializer/Tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.md) | |
| [`SymfonyValidatorSubscriberTest`](./classes/JMS/Serializer/Tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.md) | |
| [`SymfonyValidatorValidatorSubscriberTest`](./classes/JMS/Serializer/Tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.md) | |

### \JMS\Serializer\Tests\Serializer\Naming

#### Classes

| Class | Description |
|-------|-------------|
| [`IdenticalPropertyNamingStrategyTest`](./classes/JMS/Serializer/Tests/Serializer/Naming/IdenticalPropertyNamingStrategyTest.md) | |

### \JMS\Serializer\Tests\Twig

#### Classes

| Class | Description |
|-------|-------------|
| [`SerializerExtensionTest`](./classes/JMS/Serializer/Tests/Twig/SerializerExtensionTest.md) | |

### \JMS\Serializer\Twig

#### Classes

| Class | Description |
|-------|-------------|
| [`SerializerExtension`](./classes/JMS/Serializer/Twig/SerializerExtension.md) | Serializer helper twig extension|
| [`SerializerRuntimeExtension`](./classes/JMS/Serializer/Twig/SerializerRuntimeExtension.md) | |
| [`SerializerRuntimeHelper`](./classes/JMS/Serializer/Twig/SerializerRuntimeHelper.md) | |

### \JMS\Serializer\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`Writer`](./classes/JMS/Serializer/Util/Writer.md) | A writer implementation.|

### \Jean85

#### Classes

| Class | Description |
|-------|-------------|
| [`PrettyVersions`](./classes/Jean85/PrettyVersions.md) | |
| [`Version`](./classes/Jean85/Version.md) | |

### \League\ColorExtractor

#### Classes

| Class | Description |
|-------|-------------|
| [`Color`](./classes/League/ColorExtractor/Color.md) | |
| [`ColorExtractor`](./classes/League/ColorExtractor/ColorExtractor.md) | |
| [`Palette`](./classes/League/ColorExtractor/Palette.md) | |

### \League\Flysystem

#### Classes

| Class | Description |
|-------|-------------|
| [`Config`](./classes/League/Flysystem/Config.md) | |
| [`ConnectionErrorException`](./classes/League/Flysystem/ConnectionErrorException.md) | |
| [`ConnectionRuntimeException`](./classes/League/Flysystem/ConnectionRuntimeException.md) | |
| [`CorruptedPathDetected`](./classes/League/Flysystem/CorruptedPathDetected.md) | |
| [`Directory`](./classes/League/Flysystem/Directory.md) | |
| [`Exception`](./classes/League/Flysystem/Exception.md) | |
| [`File`](./classes/League/Flysystem/File.md) | |
| [`FileExistsException`](./classes/League/Flysystem/FileExistsException.md) | |
| [`FileNotFoundException`](./classes/League/Flysystem/FileNotFoundException.md) | |
| [`Filesystem`](./classes/League/Flysystem/Filesystem.md) | |
| [`FilesystemNotFoundException`](./classes/League/Flysystem/FilesystemNotFoundException.md) | Thrown when the MountManager cannot find a filesystem.|
| [`Handler`](./classes/League/Flysystem/Handler.md) | |
| [`InvalidRootException`](./classes/League/Flysystem/InvalidRootException.md) | |
| [`MountManager`](./classes/League/Flysystem/MountManager.md) | Class MountManager.|
| [`NotSupportedException`](./classes/League/Flysystem/NotSupportedException.md) | |
| [`RootViolationException`](./classes/League/Flysystem/RootViolationException.md) | |
| [`SafeStorage`](./classes/League/Flysystem/SafeStorage.md) | |
| [`UnreadableFileException`](./classes/League/Flysystem/UnreadableFileException.md) | |
| [`Util`](./classes/League/Flysystem/Util.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AdapterInterface`](./classes/League/Flysystem/AdapterInterface.md) | |
| [`FilesystemException`](./classes/League/Flysystem/FilesystemException.md) | |
| [`FilesystemInterface`](./classes/League/Flysystem/FilesystemInterface.md) | |
| [`PluginInterface`](./classes/League/Flysystem/PluginInterface.md) | |
| [`ReadInterface`](./classes/League/Flysystem/ReadInterface.md) | |

### \League\Flysystem\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractAdapter`](./classes/League/Flysystem/Adapter/AbstractAdapter.md) | |
| [`AbstractFtpAdapter`](./classes/League/Flysystem/Adapter/AbstractFtpAdapter.md) | |
| [`Ftp`](./classes/League/Flysystem/Adapter/Ftp.md) | |
| [`Ftpd`](./classes/League/Flysystem/Adapter/Ftpd.md) | |
| [`Local`](./classes/League/Flysystem/Adapter/Local.md) | |
| [`NullAdapter`](./classes/League/Flysystem/Adapter/NullAdapter.md) | |
| [`SynologyFtp`](./classes/League/Flysystem/Adapter/SynologyFtp.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CanOverwriteFiles`](./classes/League/Flysystem/Adapter/CanOverwriteFiles.md) | Adapters that implement this interface let the Filesystem know that files can be overwritten using the write<br />functions and don&#039;t need the update function to be called. This can help improve performance when asserts are disabled.|

### \League\Flysystem\Adapter\Polyfill

#### Traits

| Trait | Description |
|-------|-------------|
| [`NotSupportingVisibilityTrait`](./classes/League/Flysystem/Adapter/Polyfill/NotSupportingVisibilityTrait.md) | |
| [`StreamedCopyTrait`](./classes/League/Flysystem/Adapter/Polyfill/StreamedCopyTrait.md) | |
| [`StreamedReadingTrait`](./classes/League/Flysystem/Adapter/Polyfill/StreamedReadingTrait.md) | A helper for adapters that only handle strings to provide read streams.|
| [`StreamedTrait`](./classes/League/Flysystem/Adapter/Polyfill/StreamedTrait.md) | |
| [`StreamedWritingTrait`](./classes/League/Flysystem/Adapter/Polyfill/StreamedWritingTrait.md) | |

### \League\Flysystem\Plugin

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractPlugin`](./classes/League/Flysystem/Plugin/AbstractPlugin.md) | |
| [`EmptyDir`](./classes/League/Flysystem/Plugin/EmptyDir.md) | |
| [`ForcedCopy`](./classes/League/Flysystem/Plugin/ForcedCopy.md) | |
| [`ForcedRename`](./classes/League/Flysystem/Plugin/ForcedRename.md) | |
| [`GetWithMetadata`](./classes/League/Flysystem/Plugin/GetWithMetadata.md) | |
| [`ListFiles`](./classes/League/Flysystem/Plugin/ListFiles.md) | |
| [`ListPaths`](./classes/League/Flysystem/Plugin/ListPaths.md) | |
| [`ListWith`](./classes/League/Flysystem/Plugin/ListWith.md) | |
| [`PluginNotFoundException`](./classes/League/Flysystem/Plugin/PluginNotFoundException.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`PluggableTrait`](./classes/League/Flysystem/Plugin/PluggableTrait.md) | |

### \League\Flysystem\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`StreamHasher`](./classes/League/Flysystem/Util/StreamHasher.md) | |

### \League\MimeTypeDetection

#### Classes

| Class | Description |
|-------|-------------|
| [`EmptyExtensionToMimeTypeMap`](./classes/League/MimeTypeDetection/EmptyExtensionToMimeTypeMap.md) | |
| [`ExtensionMimeTypeDetector`](./classes/League/MimeTypeDetection/ExtensionMimeTypeDetector.md) | |
| [`FinfoMimeTypeDetector`](./classes/League/MimeTypeDetection/FinfoMimeTypeDetector.md) | |
| [`GeneratedExtensionToMimeTypeMap`](./classes/League/MimeTypeDetection/GeneratedExtensionToMimeTypeMap.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExtensionToMimeTypeMap`](./classes/League/MimeTypeDetection/ExtensionToMimeTypeMap.md) | |
| [`MimeTypeDetector`](./classes/League/MimeTypeDetection/MimeTypeDetector.md) | |

### \Lime

#### Classes

| Class | Description |
|-------|-------------|
| [`App`](./classes/Lime/App.md) | |
| [`AppAware`](./classes/Lime/AppAware.md) | |
| [`Helper`](./classes/Lime/Helper.md) | |
| [`Module`](./classes/Lime/Module.md) | |
| [`Request`](./classes/Lime/Request.md) | |
| [`Response`](./classes/Lime/Response.md) | |

### \LimeExtra

#### Classes

| Class | Description |
|-------|-------------|
| [`App`](./classes/LimeExtra/App.md) | Class App|
| [`Controller`](./classes/LimeExtra/Controller.md) | Class Controller|

### \LimeExtra\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`Assets`](./classes/LimeExtra/Helper/Assets.md) | Assets class.|
| [`Cookie`](./classes/LimeExtra/Helper/Cookie.md) | |
| [`FileObject`](./classes/LimeExtra/Helper/FileObject.md) | Use custom FileObject to prevent &quot;too many files open&quot; error|
| [`Filesystem`](./classes/LimeExtra/Helper/Filesystem.md) | |
| [`I18n`](./classes/LimeExtra/Helper/I18n.md) | I18n class. Manage translations|
| [`Image`](./classes/LimeExtra/Helper/Image.md) | |
| [`Img`](./classes/LimeExtra/Helper/Img.md) | |
| [`Markdown`](./classes/LimeExtra/Helper/Markdown.md) | Class Markdown|
| [`SimpleAcl`](./classes/LimeExtra/Helper/SimpleAcl.md) | Class SimpleAcl|
| [`Utils`](./classes/LimeExtra/Helper/Utils.md) | Class Utils|
| [`YAML`](./classes/LimeExtra/Helper/YAML.md) | Class YAML|

### \Lime\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`Cache`](./classes/Lime/Helper/Cache.md) | |
| [`Session`](./classes/Lime/Helper/Session.md) | |

### \Metadata

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassHierarchyMetadata`](./classes/Metadata/ClassHierarchyMetadata.md) | Represents the metadata for the entire class hierarchy.|
| [`ClassMetadata`](./classes/Metadata/ClassMetadata.md) | Base class for class metadata.|
| [`MergeableClassMetadata`](./classes/Metadata/MergeableClassMetadata.md) | Base class for class metadata.|
| [`MetadataFactory`](./classes/Metadata/MetadataFactory.md) | |
| [`MethodMetadata`](./classes/Metadata/MethodMetadata.md) | Base class for method metadata.|
| [`NullMetadata`](./classes/Metadata/NullMetadata.md) | Represents the metadata for a class that has not metadata.|
| [`PropertyMetadata`](./classes/Metadata/PropertyMetadata.md) | Base class for property metadata.|
| [`Version`](./classes/Metadata/Version.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AdvancedMetadataFactoryInterface`](./classes/Metadata/AdvancedMetadataFactoryInterface.md) | Interface for advanced Metadata Factory implementations.|
| [`MergeableInterface`](./classes/Metadata/MergeableInterface.md) | |
| [`MetadataFactoryInterface`](./classes/Metadata/MetadataFactoryInterface.md) | Interface for Metadata Factory implementations.|

### \Metadata\Cache

#### Classes

| Class | Description |
|-------|-------------|
| [`DoctrineCacheAdapter`](./classes/Metadata/Cache/DoctrineCacheAdapter.md) | |
| [`FileCache`](./classes/Metadata/Cache/FileCache.md) | |
| [`PsrCacheAdapter`](./classes/Metadata/Cache/PsrCacheAdapter.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CacheInterface`](./classes/Metadata/Cache/CacheInterface.md) | |

### \Metadata\Driver

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractFileDriver`](./classes/Metadata/Driver/AbstractFileDriver.md) | Base file driver implementation.|
| [`DriverChain`](./classes/Metadata/Driver/DriverChain.md) | |
| [`FileLocator`](./classes/Metadata/Driver/FileLocator.md) | |
| [`LazyLoadingDriver`](./classes/Metadata/Driver/LazyLoadingDriver.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AdvancedDriverInterface`](./classes/Metadata/Driver/AdvancedDriverInterface.md) | Forces advanced logic to drivers.|
| [`AdvancedFileLocatorInterface`](./classes/Metadata/Driver/AdvancedFileLocatorInterface.md) | Forces advanced logic on a file locator.|
| [`DriverInterface`](./classes/Metadata/Driver/DriverInterface.md) | |
| [`FileLocatorInterface`](./classes/Metadata/Driver/FileLocatorInterface.md) | |

### \Metadata\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassMetadataTest`](./classes/Metadata/Tests/ClassMetadataTest.md) | |
| [`MergeableClassMetadataTest`](./classes/Metadata/Tests/MergeableClassMetadataTest.md) | |
| [`MetadataFactoryTest`](./classes/Metadata/Tests/MetadataFactoryTest.md) | |
| [`MethodMetadataTest`](./classes/Metadata/Tests/MethodMetadataTest.md) | |
| [`PropertyMetadataTest`](./classes/Metadata/Tests/PropertyMetadataTest.md) | |

### \Metadata\Tests\Cache

#### Classes

| Class | Description |
|-------|-------------|
| [`DoctrineCacheAdapterTest`](./classes/Metadata/Tests/Cache/DoctrineCacheAdapterTest.md) | |
| [`FileCacheTest`](./classes/Metadata/Tests/Cache/FileCacheTest.md) | |
| [`PsrCacheAdapterTest`](./classes/Metadata/Tests/Cache/PsrCacheAdapterTest.md) | |

### \Metadata\Tests\Driver

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractFileDriverTest`](./classes/Metadata/Tests/Driver/AbstractFileDriverTest.md) | |
| [`DriverChainTest`](./classes/Metadata/Tests/Driver/DriverChainTest.md) | |
| [`FileLocatorTest`](./classes/Metadata/Tests/Driver/FileLocatorTest.md) | |

### \Metadata\Tests\Driver\Fixture\A

#### Classes

| Class | Description |
|-------|-------------|
| [`A`](./classes/Metadata/Tests/Driver/Fixture/A/A.md) | |

### \Metadata\Tests\Driver\Fixture\B

#### Classes

| Class | Description |
|-------|-------------|
| [`B`](./classes/Metadata/Tests/Driver/Fixture/B/B.md) | |

### \Metadata\Tests\Driver\Fixture\C\SubDir

#### Classes

| Class | Description |
|-------|-------------|
| [`C`](./classes/Metadata/Tests/Driver/Fixture/C/SubDir/C.md) | |

### \Metadata\Tests\Driver\Fixture\T

#### Traits

| Trait | Description |
|-------|-------------|
| [`T`](./classes/Metadata/Tests/Driver/Fixture/T/T.md) | |

### \Metadata\Tests\Fixtures

#### Classes

| Class | Description |
|-------|-------------|
| [`TestObject`](./classes/Metadata/Tests/Fixtures/TestObject.md) | |
| [`TestParent`](./classes/Metadata/Tests/Fixtures/TestParent.md) | |

### \Metadata\Tests\Fixtures\ComplexHierarchy

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseClass`](./classes/Metadata/Tests/Fixtures/ComplexHierarchy/BaseClass.md) | |
| [`SubClassA`](./classes/Metadata/Tests/Fixtures/ComplexHierarchy/SubClassA.md) | |
| [`SubClassB`](./classes/Metadata/Tests/Fixtures/ComplexHierarchy/SubClassB.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`InterfaceA`](./classes/Metadata/Tests/Fixtures/ComplexHierarchy/InterfaceA.md) | |
| [`InterfaceB`](./classes/Metadata/Tests/Fixtures/ComplexHierarchy/InterfaceB.md) | |

### \MongoDB

#### Classes

| Class | Description |
|-------|-------------|
| [`BulkWriteResult`](./classes/MongoDB/BulkWriteResult.md) | Result class for a bulk write operation.|
| [`ChangeStream`](./classes/MongoDB/ChangeStream.md) | Iterator for a change stream.|
| [`Client`](./classes/MongoDB/Client.md) | |
| [`Collection`](./classes/MongoDB/Collection.md) | |
| [`Database`](./classes/MongoDB/Database.md) | |
| [`DeleteResult`](./classes/MongoDB/DeleteResult.md) | Result class for a delete operation.|
| [`InsertManyResult`](./classes/MongoDB/InsertManyResult.md) | Result class for a multi-document insert operation.|
| [`InsertOneResult`](./classes/MongoDB/InsertOneResult.md) | Result class for a single-document insert operation.|
| [`MapReduceResult`](./classes/MongoDB/MapReduceResult.md) | Result class for mapReduce command results.|
| [`UpdateResult`](./classes/MongoDB/UpdateResult.md) | Result class for an update operation.|

### \MongoDB\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](./classes/MongoDB/Exception/BadMethodCallException.md) | |
| [`InvalidArgumentException`](./classes/MongoDB/Exception/InvalidArgumentException.md) | |
| [`ResumeTokenException`](./classes/MongoDB/Exception/ResumeTokenException.md) | |
| [`RuntimeException`](./classes/MongoDB/Exception/RuntimeException.md) | |
| [`UnexpectedValueException`](./classes/MongoDB/Exception/UnexpectedValueException.md) | |
| [`UnsupportedException`](./classes/MongoDB/Exception/UnsupportedException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Exception`](./classes/MongoDB/Exception/Exception.md) | |

### \MongoDB\GridFS

#### Classes

| Class | Description |
|-------|-------------|
| [`Bucket`](./classes/MongoDB/GridFS/Bucket.md) | Bucket provides a public API for interacting with the GridFS files and chunks<br />collections.|

### \MongoDB\GridFS\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`CorruptFileException`](./classes/MongoDB/GridFS/Exception/CorruptFileException.md) | |
| [`FileNotFoundException`](./classes/MongoDB/GridFS/Exception/FileNotFoundException.md) | |
| [`StreamException`](./classes/MongoDB/GridFS/Exception/StreamException.md) | |

### \MongoDB\Model

#### Classes

| Class | Description |
|-------|-------------|
| [`BSONArray`](./classes/MongoDB/Model/BSONArray.md) | Model class for a BSON array.|
| [`BSONDocument`](./classes/MongoDB/Model/BSONDocument.md) | Model class for a BSON document.|
| [`BSONIterator`](./classes/MongoDB/Model/BSONIterator.md) | Iterator for BSON documents.|
| [`CollectionInfo`](./classes/MongoDB/Model/CollectionInfo.md) | Collection information model class.|
| [`DatabaseInfo`](./classes/MongoDB/Model/DatabaseInfo.md) | Database information model class.|
| [`IndexInfo`](./classes/MongoDB/Model/IndexInfo.md) | Index information model class.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CollectionInfoIterator`](./classes/MongoDB/Model/CollectionInfoIterator.md) | CollectionInfoIterator interface.|
| [`DatabaseInfoIterator`](./classes/MongoDB/Model/DatabaseInfoIterator.md) | DatabaseInfoIterator interface.|
| [`IndexInfoIterator`](./classes/MongoDB/Model/IndexInfoIterator.md) | IndexInfoIterator interface.|

### \MongoDB\Operation

#### Classes

| Class | Description |
|-------|-------------|
| [`Aggregate`](./classes/MongoDB/Operation/Aggregate.md) | Operation for the aggregate command.|
| [`BulkWrite`](./classes/MongoDB/Operation/BulkWrite.md) | Operation for executing multiple write operations.|
| [`Count`](./classes/MongoDB/Operation/Count.md) | Operation for the count command.|
| [`CountDocuments`](./classes/MongoDB/Operation/CountDocuments.md) | Operation for obtaining an exact count of documents in a collection|
| [`CreateCollection`](./classes/MongoDB/Operation/CreateCollection.md) | Operation for the create command.|
| [`CreateIndexes`](./classes/MongoDB/Operation/CreateIndexes.md) | Operation for the createIndexes command.|
| [`DatabaseCommand`](./classes/MongoDB/Operation/DatabaseCommand.md) | Operation for executing a database command.|
| [`DeleteMany`](./classes/MongoDB/Operation/DeleteMany.md) | Operation for deleting multiple document with the delete command.|
| [`DeleteOne`](./classes/MongoDB/Operation/DeleteOne.md) | Operation for deleting a single document with the delete command.|
| [`Distinct`](./classes/MongoDB/Operation/Distinct.md) | Operation for the distinct command.|
| [`DropCollection`](./classes/MongoDB/Operation/DropCollection.md) | Operation for the drop command.|
| [`DropDatabase`](./classes/MongoDB/Operation/DropDatabase.md) | Operation for the dropDatabase command.|
| [`DropIndexes`](./classes/MongoDB/Operation/DropIndexes.md) | Operation for the dropIndexes command.|
| [`EstimatedDocumentCount`](./classes/MongoDB/Operation/EstimatedDocumentCount.md) | Operation for obtaining an estimated count of documents in a collection|
| [`Explain`](./classes/MongoDB/Operation/Explain.md) | Operation for the explain command.|
| [`Find`](./classes/MongoDB/Operation/Find.md) | Operation for the find command.|
| [`FindOne`](./classes/MongoDB/Operation/FindOne.md) | Operation for finding a single document with the find command.|
| [`FindOneAndDelete`](./classes/MongoDB/Operation/FindOneAndDelete.md) | Operation for deleting a document with the findAndModify command.|
| [`FindOneAndReplace`](./classes/MongoDB/Operation/FindOneAndReplace.md) | Operation for replacing a document with the findAndModify command.|
| [`FindOneAndUpdate`](./classes/MongoDB/Operation/FindOneAndUpdate.md) | Operation for updating a document with the findAndModify command.|
| [`InsertMany`](./classes/MongoDB/Operation/InsertMany.md) | Operation for inserting multiple documents with the insert command.|
| [`InsertOne`](./classes/MongoDB/Operation/InsertOne.md) | Operation for inserting a single document with the insert command.|
| [`ListCollectionNames`](./classes/MongoDB/Operation/ListCollectionNames.md) | Operation for the listCollectionNames helper.|
| [`ListCollections`](./classes/MongoDB/Operation/ListCollections.md) | Operation for the listCollections command.|
| [`ListDatabaseNames`](./classes/MongoDB/Operation/ListDatabaseNames.md) | Operation for the ListDatabases command, returning only database names.|
| [`ListDatabases`](./classes/MongoDB/Operation/ListDatabases.md) | Operation for the ListDatabases command.|
| [`ListIndexes`](./classes/MongoDB/Operation/ListIndexes.md) | Operation for the listIndexes command.|
| [`MapReduce`](./classes/MongoDB/Operation/MapReduce.md) | Operation for the mapReduce command.|
| [`ModifyCollection`](./classes/MongoDB/Operation/ModifyCollection.md) | Operation for the collMod command.|
| [`ReplaceOne`](./classes/MongoDB/Operation/ReplaceOne.md) | Operation for replacing a single document with the update command.|
| [`UpdateMany`](./classes/MongoDB/Operation/UpdateMany.md) | Operation for updating multiple documents with the update command.|
| [`UpdateOne`](./classes/MongoDB/Operation/UpdateOne.md) | Operation for updating a single document with the update command.|
| [`Watch`](./classes/MongoDB/Operation/Watch.md) | Operation for creating a change stream with the aggregate command.|

### \MongoHybrid

#### Classes

| Class | Description |
|-------|-------------|
| [`Client`](./classes/MongoHybrid/Client.md) | |
| [`Mongo`](./classes/MongoHybrid/Mongo.md) | |
| [`MongoLite`](./classes/MongoHybrid/MongoLite.md) | |
| [`ResultSet`](./classes/MongoHybrid/ResultSet.md) | |

### \MongoLite

#### Classes

| Class | Description |
|-------|-------------|
| [`Client`](./classes/MongoLite/Client.md) | Client object.|
| [`Collection`](./classes/MongoLite/Collection.md) | Collection object.|
| [`Cursor`](./classes/MongoLite/Cursor.md) | Cursor object.|
| [`Database`](./classes/MongoLite/Database.md) | Database object.|
| [`UtilArrayQuery`](./classes/MongoLite/UtilArrayQuery.md) | |

### \Monolog

#### Classes

| Class | Description |
|-------|-------------|
| [`ErrorHandler`](./classes/Monolog/ErrorHandler.md) | Monolog error handler|
| [`Logger`](./classes/Monolog/Logger.md) | Monolog log channel|
| [`Registry`](./classes/Monolog/Registry.md) | Monolog log registry|
| [`SignalHandler`](./classes/Monolog/SignalHandler.md) | Monolog POSIX signal handler|
| [`Utils`](./classes/Monolog/Utils.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ResettableInterface`](./classes/Monolog/ResettableInterface.md) | Handler or Processor implementing this interface will be reset when Logger::reset() is called.|

### \Monolog\Formatter

#### Classes

| Class | Description |
|-------|-------------|
| [`ChromePHPFormatter`](./classes/Monolog/Formatter/ChromePHPFormatter.md) | Formats a log message according to the ChromePHP array format|
| [`ElasticaFormatter`](./classes/Monolog/Formatter/ElasticaFormatter.md) | Format a log message into an Elastica Document|
| [`FlowdockFormatter`](./classes/Monolog/Formatter/FlowdockFormatter.md) | formats the record to be used in the FlowdockHandler|
| [`FluentdFormatter`](./classes/Monolog/Formatter/FluentdFormatter.md) | Class FluentdFormatter|
| [`GelfMessageFormatter`](./classes/Monolog/Formatter/GelfMessageFormatter.md) | Serializes a log message to GELF|
| [`HtmlFormatter`](./classes/Monolog/Formatter/HtmlFormatter.md) | Formats incoming records into an HTML table|
| [`JsonFormatter`](./classes/Monolog/Formatter/JsonFormatter.md) | Encodes whatever record data is passed to it as json|
| [`LineFormatter`](./classes/Monolog/Formatter/LineFormatter.md) | Formats incoming records into a one-line string|
| [`LogglyFormatter`](./classes/Monolog/Formatter/LogglyFormatter.md) | Encodes message information into JSON in a format compatible with Loggly.|
| [`LogstashFormatter`](./classes/Monolog/Formatter/LogstashFormatter.md) | Serializes a log message to Logstash Event Format|
| [`MongoDBFormatter`](./classes/Monolog/Formatter/MongoDBFormatter.md) | Formats a record for use with the MongoDBHandler.|
| [`NormalizerFormatter`](./classes/Monolog/Formatter/NormalizerFormatter.md) | Normalizes incoming records to remove objects/resources so it&#039;s easier to dump to various targets|
| [`ScalarFormatter`](./classes/Monolog/Formatter/ScalarFormatter.md) | Formats data into an associative array of scalar values.|
| [`WildfireFormatter`](./classes/Monolog/Formatter/WildfireFormatter.md) | Serializes a log message according to Wildfire&#039;s header requirements|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FormatterInterface`](./classes/Monolog/Formatter/FormatterInterface.md) | Interface for formatters|

### \Monolog\Handler

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractHandler`](./classes/Monolog/Handler/AbstractHandler.md) | Base Handler class providing the Handler structure|
| [`AbstractProcessingHandler`](./classes/Monolog/Handler/AbstractProcessingHandler.md) | Base Handler class providing the Handler structure|
| [`AbstractSyslogHandler`](./classes/Monolog/Handler/AbstractSyslogHandler.md) | Common syslog functionality|
| [`AmqpHandler`](./classes/Monolog/Handler/AmqpHandler.md) | Base Handler class providing the Handler structure|
| [`BrowserConsoleHandler`](./classes/Monolog/Handler/BrowserConsoleHandler.md) | Handler sending logs to browser&#039;s javascript console with no browser extension required|
| [`BufferHandler`](./classes/Monolog/Handler/BufferHandler.md) | Buffers all records until closing the handler and then pass them as batch.|
| [`ChromePHPHandler`](./classes/Monolog/Handler/ChromePHPHandler.md) | Handler sending logs to the ChromePHP extension (http://www.chromephp.com/)|
| [`CouchDBHandler`](./classes/Monolog/Handler/CouchDBHandler.md) | CouchDB handler|
| [`CubeHandler`](./classes/Monolog/Handler/CubeHandler.md) | Logs to Cube.|
| [`DeduplicationHandler`](./classes/Monolog/Handler/DeduplicationHandler.md) | Simple handler wrapper that deduplicates log records across multiple requests|
| [`DoctrineCouchDBHandler`](./classes/Monolog/Handler/DoctrineCouchDBHandler.md) | CouchDB handler for Doctrine CouchDB ODM|
| [`DynamoDbHandler`](./classes/Monolog/Handler/DynamoDbHandler.md) | Amazon DynamoDB handler (http://aws.amazon.com/dynamodb/)|
| [`ElasticSearchHandler`](./classes/Monolog/Handler/ElasticSearchHandler.md) | Elastic Search handler|
| [`ErrorLogHandler`](./classes/Monolog/Handler/ErrorLogHandler.md) | Stores to PHP error_log() handler.|
| [`FilterHandler`](./classes/Monolog/Handler/FilterHandler.md) | Simple handler wrapper that filters records based on a list of levels|
| [`FingersCrossedHandler`](./classes/Monolog/Handler/FingersCrossedHandler.md) | Buffers all records until a certain level is reached|
| [`FirePHPHandler`](./classes/Monolog/Handler/FirePHPHandler.md) | Simple FirePHP Handler (http://www.firephp.org/), which uses the Wildfire protocol.|
| [`FleepHookHandler`](./classes/Monolog/Handler/FleepHookHandler.md) | Sends logs to Fleep.io using Webhook integrations|
| [`FlowdockHandler`](./classes/Monolog/Handler/FlowdockHandler.md) | Sends notifications through the Flowdock push API|
| [`GelfHandler`](./classes/Monolog/Handler/GelfHandler.md) | Handler to send messages to a Graylog2 (http://www.graylog2.org) server|
| [`GroupHandler`](./classes/Monolog/Handler/GroupHandler.md) | Forwards records to multiple handlers|
| [`HandlerWrapper`](./classes/Monolog/Handler/HandlerWrapper.md) | This simple wrapper class can be used to extend handlers functionality.|
| [`HipChatHandler`](./classes/Monolog/Handler/HipChatHandler.md) | Sends notifications through the hipchat api to a hipchat room|
| [`IFTTTHandler`](./classes/Monolog/Handler/IFTTTHandler.md) | IFTTTHandler uses cURL to trigger IFTTT Maker actions|
| [`InsightOpsHandler`](./classes/Monolog/Handler/InsightOpsHandler.md) | Inspired on LogEntriesHandler.|
| [`LogEntriesHandler`](./classes/Monolog/Handler/LogEntriesHandler.md) | Stores to any socket - uses fsockopen() or pfsockopen().|
| [`LogglyHandler`](./classes/Monolog/Handler/LogglyHandler.md) | Sends errors to Loggly.|
| [`MailHandler`](./classes/Monolog/Handler/MailHandler.md) | Base class for all mail handlers|
| [`MandrillHandler`](./classes/Monolog/Handler/MandrillHandler.md) | MandrillHandler uses cURL to send the emails to the Mandrill API|
| [`MissingExtensionException`](./classes/Monolog/Handler/MissingExtensionException.md) | Exception can be thrown if an extension for an handler is missing|
| [`MongoDBHandler`](./classes/Monolog/Handler/MongoDBHandler.md) | Logs to a MongoDB database.|
| [`NativeMailerHandler`](./classes/Monolog/Handler/NativeMailerHandler.md) | NativeMailerHandler uses the mail() function to send the emails|
| [`NewRelicHandler`](./classes/Monolog/Handler/NewRelicHandler.md) | Class to record a log on a NewRelic application.|
| [`NullHandler`](./classes/Monolog/Handler/NullHandler.md) | Blackhole|
| [`PHPConsoleHandler`](./classes/Monolog/Handler/PHPConsoleHandler.md) | Monolog handler for Google Chrome extension &quot;PHP Console&quot;|
| [`PsrHandler`](./classes/Monolog/Handler/PsrHandler.md) | Proxies log messages to an existing PSR-3 compliant logger.|
| [`PushoverHandler`](./classes/Monolog/Handler/PushoverHandler.md) | Sends notifications through the pushover api to mobile phones|
| [`RavenHandler`](./classes/Monolog/Handler/RavenHandler.md) | Handler to send messages to a Sentry (https://github.com/getsentry/sentry) server<br />using sentry-php (https://github.com/getsentry/sentry-php)|
| [`RedisHandler`](./classes/Monolog/Handler/RedisHandler.md) | Logs to a Redis key using rpush|
| [`RollbarHandler`](./classes/Monolog/Handler/RollbarHandler.md) | Sends errors to Rollbar|
| [`RotatingFileHandler`](./classes/Monolog/Handler/RotatingFileHandler.md) | Stores logs to files that are rotated every day and a limited number of files are kept.|
| [`SamplingHandler`](./classes/Monolog/Handler/SamplingHandler.md) | Sampling handler|
| [`SlackHandler`](./classes/Monolog/Handler/SlackHandler.md) | Sends notifications through Slack API|
| [`SlackWebhookHandler`](./classes/Monolog/Handler/SlackWebhookHandler.md) | Sends notifications through Slack Webhooks|
| [`SlackbotHandler`](./classes/Monolog/Handler/SlackbotHandler.md) | Sends notifications through Slack&#039;s Slackbot|
| [`SocketHandler`](./classes/Monolog/Handler/SocketHandler.md) | Stores to any socket - uses fsockopen() or pfsockopen().|
| [`StreamHandler`](./classes/Monolog/Handler/StreamHandler.md) | Stores to any stream resource|
| [`SwiftMailerHandler`](./classes/Monolog/Handler/SwiftMailerHandler.md) | SwiftMailerHandler uses Swift_Mailer to send the emails|
| [`SyslogHandler`](./classes/Monolog/Handler/SyslogHandler.md) | Logs to syslog service.|
| [`SyslogUdpHandler`](./classes/Monolog/Handler/SyslogUdpHandler.md) | A Handler for logging to a remote syslogd server.|
| [`TestHandler`](./classes/Monolog/Handler/TestHandler.md) | Used for testing purposes.|
| [`WhatFailureGroupHandler`](./classes/Monolog/Handler/WhatFailureGroupHandler.md) | Forwards records to multiple handlers suppressing failures of each handler<br />and continuing through to give every handler a chance to succeed.|
| [`ZendMonitorHandler`](./classes/Monolog/Handler/ZendMonitorHandler.md) | Handler sending logs to Zend Monitor|

#### Traits

| Trait | Description |
|-------|-------------|
| [`FormattableHandlerTrait`](./classes/Monolog/Handler/FormattableHandlerTrait.md) | Helper trait for implementing FormattableInterface|
| [`ProcessableHandlerTrait`](./classes/Monolog/Handler/ProcessableHandlerTrait.md) | Helper trait for implementing ProcessableInterface|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FormattableHandlerInterface`](./classes/Monolog/Handler/FormattableHandlerInterface.md) | Interface to describe loggers that have a formatter|
| [`HandlerInterface`](./classes/Monolog/Handler/HandlerInterface.md) | Interface that all Monolog Handlers must implement|
| [`ProcessableHandlerInterface`](./classes/Monolog/Handler/ProcessableHandlerInterface.md) | Interface to describe loggers that have processors|

### \Monolog\Handler\Curl

#### Classes

| Class | Description |
|-------|-------------|
| [`Util`](./classes/Monolog/Handler/Curl/Util.md) | |

### \Monolog\Handler\FingersCrossed

#### Classes

| Class | Description |
|-------|-------------|
| [`ChannelLevelActivationStrategy`](./classes/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.md) | Channel and Error level based monolog activation strategy. Allows to trigger activation<br />based on level per channel. e.g. trigger activation on level &#039;ERROR&#039; by default, except<br />for records of the &#039;sql&#039; channel; those should trigger activation on level &#039;WARN&#039;.|
| [`ErrorLevelActivationStrategy`](./classes/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.md) | Error level based activation strategy.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ActivationStrategyInterface`](./classes/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.md) | Interface for activation strategies for the FingersCrossedHandler.|

### \Monolog\Handler\Slack

#### Classes

| Class | Description |
|-------|-------------|
| [`SlackRecord`](./classes/Monolog/Handler/Slack/SlackRecord.md) | Slack record utility helping to log to Slack webhooks or API.|

### \Monolog\Handler\SyslogUdp

#### Classes

| Class | Description |
|-------|-------------|
| [`UdpSocket`](./classes/Monolog/Handler/SyslogUdp/UdpSocket.md) | |

### \Monolog\Processor

#### Classes

| Class | Description |
|-------|-------------|
| [`GitProcessor`](./classes/Monolog/Processor/GitProcessor.md) | Injects Git branch and Git commit SHA in all records|
| [`IntrospectionProcessor`](./classes/Monolog/Processor/IntrospectionProcessor.md) | Injects line/file:class/function where the log message came from|
| [`MemoryPeakUsageProcessor`](./classes/Monolog/Processor/MemoryPeakUsageProcessor.md) | Injects memory_get_peak_usage in all records|
| [`MemoryProcessor`](./classes/Monolog/Processor/MemoryProcessor.md) | Some methods that are common for all memory processors|
| [`MemoryUsageProcessor`](./classes/Monolog/Processor/MemoryUsageProcessor.md) | Injects memory_get_usage in all records|
| [`MercurialProcessor`](./classes/Monolog/Processor/MercurialProcessor.md) | Injects Hg branch and Hg revision number in all records|
| [`ProcessIdProcessor`](./classes/Monolog/Processor/ProcessIdProcessor.md) | Adds value of getmypid into records|
| [`PsrLogMessageProcessor`](./classes/Monolog/Processor/PsrLogMessageProcessor.md) | Processes a record&#039;s message according to PSR-3 rules|
| [`TagProcessor`](./classes/Monolog/Processor/TagProcessor.md) | Adds a tags array into record|
| [`UidProcessor`](./classes/Monolog/Processor/UidProcessor.md) | Adds a unique identifier into records|
| [`WebProcessor`](./classes/Monolog/Processor/WebProcessor.md) | Injects url/method and remote IP of the current web request in all records|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ProcessorInterface`](./classes/Monolog/Processor/ProcessorInterface.md) | An optional interface to allow labelling Monolog processors.|

### \PHPDocMD

#### Classes

| Class | Description |
|-------|-------------|
| [`Generator`](./classes/PHPDocMD/Generator.md) | This class takes the output from &#039;parser&#039;, and generate the markdown<br />templates.|
| [`Parser`](./classes/PHPDocMD/Parser.md) | This class parses structure.xml and generates the api documentation.|

### \PHPMailer\PHPMailer

#### Classes

| Class | Description |
|-------|-------------|
| [`Exception`](./classes/PHPMailer/PHPMailer/Exception.md) | PHPMailer exception handler.|
| [`OAuth`](./classes/PHPMailer/PHPMailer/OAuth.md) | OAuth - OAuth2 authentication wrapper class.|
| [`PHPMailer`](./classes/PHPMailer/PHPMailer/PHPMailer.md) | PHPMailer - PHP email creation and transport class.|
| [`POP3`](./classes/PHPMailer/PHPMailer/POP3.md) | PHPMailer POP-Before-SMTP Authentication Class.|
| [`SMTP`](./classes/PHPMailer/PHPMailer/SMTP.md) | PHPMailer RFC821 SMTP email transport class.|

### \PackageVersions

#### Classes

| Class | Description |
|-------|-------------|
| [`Installer`](./classes/PackageVersions/Installer.md) | |
| [`Versions`](./classes/PackageVersions/Versions.md) | This class is generated by composer/package-versions-deprecated, specifically by|

### \PhpCollection

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractCollection`](./classes/PhpCollection/AbstractCollection.md) | |
| [`AbstractMap`](./classes/PhpCollection/AbstractMap.md) | A simple map implementation which basically wraps an array with an object oriented interface.|
| [`AbstractSequence`](./classes/PhpCollection/AbstractSequence.md) | A sequence with numerically indexed elements.|
| [`Map`](./classes/PhpCollection/Map.md) | A simple map implementation which basically wraps an array with an object oriented interface.|
| [`ObjectBasicsHandlerRegistry`](./classes/PhpCollection/ObjectBasicsHandlerRegistry.md) | Registry for handlers that provide ObjectBasics functionality for classes.|
| [`Sequence`](./classes/PhpCollection/Sequence.md) | Unsorted sequence implementation.|
| [`Set`](./classes/PhpCollection/Set.md) | Implementation of a Set.|
| [`SortedSequence`](./classes/PhpCollection/SortedSequence.md) | A sequence with a fixed sort-order.|

#### Traits

| Trait | Description |
|-------|-------------|
| [`EntityLikeObject`](./classes/PhpCollection/EntityLikeObject.md) | Implementation for ObjectBasics for entity-like objects.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CollectionInterface`](./classes/PhpCollection/CollectionInterface.md) | Basic interface which adds some behaviors, and a few methods common to all collections.|
| [`MapInterface`](./classes/PhpCollection/MapInterface.md) | Basic map interface.|
| [`ObjectBasics`](./classes/PhpCollection/ObjectBasics.md) | Interface that must be implemented by objects that are used as keys, or in sets.|
| [`ObjectBasicsHandler`](./classes/PhpCollection/ObjectBasicsHandler.md) | Interface for external handlers that provide ObjectBasics functionality.|
| [`SequenceInterface`](./classes/PhpCollection/SequenceInterface.md) | Interface for mutable sequences.|
| [`SetInterface`](./classes/PhpCollection/SetInterface.md) | Interface for sets.|
| [`SortableInterface`](./classes/PhpCollection/SortableInterface.md) | Interface for sortable collections.|

### \PhpCollection\ObjectBasicsHandler

#### Classes

| Class | Description |
|-------|-------------|
| [`DateTimeHandler`](./classes/PhpCollection/ObjectBasicsHandler/DateTimeHandler.md) | |
| [`IdentityHandler`](./classes/PhpCollection/ObjectBasicsHandler/IdentityHandler.md) | |

### \PhpCollection\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`MapTest`](./classes/PhpCollection/Tests/MapTest.md) | |
| [`ObjectThatImplementsBasics`](./classes/PhpCollection/Tests/ObjectThatImplementsBasics.md) | |
| [`SequenceTest`](./classes/PhpCollection/Tests/SequenceTest.md) | |
| [`SetTest`](./classes/PhpCollection/Tests/SetTest.md) | |
| [`SortedSequenceTest`](./classes/PhpCollection/Tests/SortedSequenceTest.md) | |

### \PhpDocumentorMarkdown\Example

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractProduct`](./classes/PhpDocumentorMarkdown/Example/AbstractProduct.md) | Base class for all products.|
| [`Pizza`](./classes/PhpDocumentorMarkdown/Example/Pizza.md) | A pizza.|

#### Traits

| Trait | Description |
|-------|-------------|
| [`ReviewableTrait`](./classes/PhpDocumentorMarkdown/Example/ReviewableTrait.md) | A trait for reviewable objects.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ProductInterface`](./classes/PhpDocumentorMarkdown/Example/ProductInterface.md) | Interface for a product.|

### \PhpDocumentorMarkdown\Example\Pizza

#### Classes

| Class | Description |
|-------|-------------|
| [`Base`](./classes/PhpDocumentorMarkdown/Example/Pizza/Base.md) | Represents a pizza base.|
| [`Sauce`](./classes/PhpDocumentorMarkdown/Example/Pizza/Sauce.md) | Pizza sauce class.|

### \PhpDocumentorMarkdown\Extension

#### Classes

| Class | Description |
|-------|-------------|
| [`JsonExtension`](./classes/PhpDocumentorMarkdown/Extension/JsonExtension.md) | |
| [`MacroDataExtension`](./classes/PhpDocumentorMarkdown/Extension/MacroDataExtension.md) | |
| [`ObjectExtension`](./classes/PhpDocumentorMarkdown/Extension/ObjectExtension.md) | |

### \PhpDocumentorMarkdown\Test\Twig

#### Classes

| Class | Description |
|-------|-------------|
| [`Extension`](./classes/PhpDocumentorMarkdown/Test/Twig/Extension.md) | |
| [`TestCase`](./classes/PhpDocumentorMarkdown/Test/Twig/TestCase.md) | |

### \PhpDocumentorMarkdown\Test\Twig\Macro

#### Classes

| Class | Description |
|-------|-------------|
| [`MacroData`](./classes/PhpDocumentorMarkdown/Test/Twig/Macro/MacroData.md) | |
| [`MacroTest`](./classes/PhpDocumentorMarkdown/Test/Twig/Macro/MacroTest.md) | |
| [`MacroTestCase`](./classes/PhpDocumentorMarkdown/Test/Twig/Macro/MacroTestCase.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`MacroFunctionsTrait`](./classes/PhpDocumentorMarkdown/Test/Twig/Macro/MacroFunctionsTrait.md) | A PHP wrapper for Twig macros. Used for testing.|

### \PhpOption

#### Classes

| Class | Description |
|-------|-------------|
| [`LazyOption`](./classes/PhpOption/LazyOption.md) | |
| [`None`](./classes/PhpOption/None.md) | |
| [`Some`](./classes/PhpOption/Some.md) | |

### \PhpParser

#### Classes

| Class | Description |
|-------|-------------|
| [`Autoloader`](./classes/PhpParser/Autoloader.md) | |
| [`AutoloaderTest`](./classes/PhpParser/AutoloaderTest.md) | |
| [`BuilderAbstract`](./classes/PhpParser/BuilderAbstract.md) | |
| [`BuilderFactory`](./classes/PhpParser/BuilderFactory.md) | The following methods use reserved keywords, so their implementation is defined with an underscore and made available<br />with the reserved name through __call() magic.|
| [`BuilderFactoryTest`](./classes/PhpParser/BuilderFactoryTest.md) | |
| [`CodeTestAbstract`](./classes/PhpParser/CodeTestAbstract.md) | |
| [`Comment`](./classes/PhpParser/Comment.md) | |
| [`CommentTest`](./classes/PhpParser/CommentTest.md) | |
| [`DummyNode`](./classes/PhpParser/DummyNode.md) | |
| [`Error`](./classes/PhpParser/Error.md) | |
| [`ErrorTest`](./classes/PhpParser/ErrorTest.md) | |
| [`InvalidTokenLexer`](./classes/PhpParser/InvalidTokenLexer.md) | |
| [`Lexer`](./classes/PhpParser/Lexer.md) | |
| [`LexerTest`](./classes/PhpParser/LexerTest.md) | |
| [`NodeAbstract`](./classes/PhpParser/NodeAbstract.md) | |
| [`NodeAbstractTest`](./classes/PhpParser/NodeAbstractTest.md) | |
| [`NodeDumper`](./classes/PhpParser/NodeDumper.md) | |
| [`NodeDumperTest`](./classes/PhpParser/NodeDumperTest.md) | |
| [`NodeTraverser`](./classes/PhpParser/NodeTraverser.md) | |
| [`NodeTraverserTest`](./classes/PhpParser/NodeTraverserTest.md) | |
| [`NodeVisitorAbstract`](./classes/PhpParser/NodeVisitorAbstract.md) | |
| [`Parser`](./classes/PhpParser/Parser.md) | |
| [`ParserAbstract`](./classes/PhpParser/ParserAbstract.md) | |
| [`ParserTest`](./classes/PhpParser/ParserTest.md) | |
| [`PrettyPrinterAbstract`](./classes/PhpParser/PrettyPrinterAbstract.md) | |
| [`PrettyPrinterTest`](./classes/PhpParser/PrettyPrinterTest.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Builder`](./classes/PhpParser/Builder.md) | |
| [`Node`](./classes/PhpParser/Node.md) | |
| [`NodeTraverserInterface`](./classes/PhpParser/NodeTraverserInterface.md) | |
| [`NodeVisitor`](./classes/PhpParser/NodeVisitor.md) | |
| [`Serializer`](./classes/PhpParser/Serializer.md) | |
| [`Unserializer`](./classes/PhpParser/Unserializer.md) | |

### \PhpParser\Builder

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassTest`](./classes/PhpParser/Builder/ClassTest.md) | |
| [`Class_`](./classes/PhpParser/Builder/Class_.md) | |
| [`Declaration`](./classes/PhpParser/Builder/Declaration.md) | |
| [`FunctionLike`](./classes/PhpParser/Builder/FunctionLike.md) | |
| [`FunctionTest`](./classes/PhpParser/Builder/FunctionTest.md) | |
| [`Function_`](./classes/PhpParser/Builder/Function_.md) | |
| [`InterfaceTest`](./classes/PhpParser/Builder/InterfaceTest.md) | |
| [`Interface_`](./classes/PhpParser/Builder/Interface_.md) | |
| [`Method`](./classes/PhpParser/Builder/Method.md) | |
| [`MethodTest`](./classes/PhpParser/Builder/MethodTest.md) | |
| [`NamespaceTest`](./classes/PhpParser/Builder/NamespaceTest.md) | |
| [`Namespace_`](./classes/PhpParser/Builder/Namespace_.md) | |
| [`Param`](./classes/PhpParser/Builder/Param.md) | |
| [`ParamTest`](./classes/PhpParser/Builder/ParamTest.md) | |
| [`Property`](./classes/PhpParser/Builder/Property.md) | |
| [`PropertyTest`](./classes/PhpParser/Builder/PropertyTest.md) | |
| [`TraitTest`](./classes/PhpParser/Builder/TraitTest.md) | |
| [`Trait_`](./classes/PhpParser/Builder/Trait_.md) | |
| [`Use_`](./classes/PhpParser/Builder/Use_.md) | |

### \PhpParser\Comment

#### Classes

| Class | Description |
|-------|-------------|
| [`Doc`](./classes/PhpParser/Comment/Doc.md) | |

### \PhpParser\Lexer

#### Classes

| Class | Description |
|-------|-------------|
| [`Emulative`](./classes/PhpParser/Lexer/Emulative.md) | ATTENTION: This code is WRITE-ONLY. Do not try to read it.|
| [`EmulativeTest`](./classes/PhpParser/Lexer/EmulativeTest.md) | |

### \PhpParser\Node

#### Classes

| Class | Description |
|-------|-------------|
| [`Arg`](./classes/PhpParser/Node/Arg.md) | |
| [`Const_`](./classes/PhpParser/Node/Const_.md) | |
| [`Expr`](./classes/PhpParser/Node/Expr.md) | |
| [`Name`](./classes/PhpParser/Node/Name.md) | |
| [`NameTest`](./classes/PhpParser/Node/NameTest.md) | |
| [`Param`](./classes/PhpParser/Node/Param.md) | |
| [`Scalar`](./classes/PhpParser/Node/Scalar.md) | |
| [`Stmt`](./classes/PhpParser/Node/Stmt.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FunctionLike`](./classes/PhpParser/Node/FunctionLike.md) | |

### \PhpParser\NodeVisitor

#### Classes

| Class | Description |
|-------|-------------|
| [`NameResolver`](./classes/PhpParser/NodeVisitor/NameResolver.md) | |
| [`NameResolverTest`](./classes/PhpParser/NodeVisitor/NameResolverTest.md) | |

### \PhpParser\Node\Expr

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayDimFetch`](./classes/PhpParser/Node/Expr/ArrayDimFetch.md) | |
| [`ArrayItem`](./classes/PhpParser/Node/Expr/ArrayItem.md) | |
| [`Array_`](./classes/PhpParser/Node/Expr/Array_.md) | |
| [`Assign`](./classes/PhpParser/Node/Expr/Assign.md) | |
| [`AssignOp`](./classes/PhpParser/Node/Expr/AssignOp.md) | |
| [`AssignRef`](./classes/PhpParser/Node/Expr/AssignRef.md) | |
| [`BinaryOp`](./classes/PhpParser/Node/Expr/BinaryOp.md) | |
| [`BitwiseNot`](./classes/PhpParser/Node/Expr/BitwiseNot.md) | |
| [`BooleanNot`](./classes/PhpParser/Node/Expr/BooleanNot.md) | |
| [`Cast`](./classes/PhpParser/Node/Expr/Cast.md) | |
| [`ClassConstFetch`](./classes/PhpParser/Node/Expr/ClassConstFetch.md) | |
| [`Clone_`](./classes/PhpParser/Node/Expr/Clone_.md) | |
| [`Closure`](./classes/PhpParser/Node/Expr/Closure.md) | |
| [`ClosureUse`](./classes/PhpParser/Node/Expr/ClosureUse.md) | |
| [`ConstFetch`](./classes/PhpParser/Node/Expr/ConstFetch.md) | |
| [`Empty_`](./classes/PhpParser/Node/Expr/Empty_.md) | |
| [`ErrorSuppress`](./classes/PhpParser/Node/Expr/ErrorSuppress.md) | |
| [`Eval_`](./classes/PhpParser/Node/Expr/Eval_.md) | |
| [`Exit_`](./classes/PhpParser/Node/Expr/Exit_.md) | |
| [`FuncCall`](./classes/PhpParser/Node/Expr/FuncCall.md) | |
| [`Include_`](./classes/PhpParser/Node/Expr/Include_.md) | |
| [`Instanceof_`](./classes/PhpParser/Node/Expr/Instanceof_.md) | |
| [`Isset_`](./classes/PhpParser/Node/Expr/Isset_.md) | |
| [`List_`](./classes/PhpParser/Node/Expr/List_.md) | |
| [`MethodCall`](./classes/PhpParser/Node/Expr/MethodCall.md) | |
| [`New_`](./classes/PhpParser/Node/Expr/New_.md) | |
| [`PostDec`](./classes/PhpParser/Node/Expr/PostDec.md) | |
| [`PostInc`](./classes/PhpParser/Node/Expr/PostInc.md) | |
| [`PreDec`](./classes/PhpParser/Node/Expr/PreDec.md) | |
| [`PreInc`](./classes/PhpParser/Node/Expr/PreInc.md) | |
| [`Print_`](./classes/PhpParser/Node/Expr/Print_.md) | |
| [`PropertyFetch`](./classes/PhpParser/Node/Expr/PropertyFetch.md) | |
| [`ShellExec`](./classes/PhpParser/Node/Expr/ShellExec.md) | |
| [`StaticCall`](./classes/PhpParser/Node/Expr/StaticCall.md) | |
| [`StaticPropertyFetch`](./classes/PhpParser/Node/Expr/StaticPropertyFetch.md) | |
| [`Ternary`](./classes/PhpParser/Node/Expr/Ternary.md) | |
| [`UnaryMinus`](./classes/PhpParser/Node/Expr/UnaryMinus.md) | |
| [`UnaryPlus`](./classes/PhpParser/Node/Expr/UnaryPlus.md) | |
| [`Variable`](./classes/PhpParser/Node/Expr/Variable.md) | |
| [`YieldFrom`](./classes/PhpParser/Node/Expr/YieldFrom.md) | |
| [`Yield_`](./classes/PhpParser/Node/Expr/Yield_.md) | |

### \PhpParser\Node\Expr\AssignOp

#### Classes

| Class | Description |
|-------|-------------|
| [`BitwiseAnd`](./classes/PhpParser/Node/Expr/AssignOp/BitwiseAnd.md) | |
| [`BitwiseOr`](./classes/PhpParser/Node/Expr/AssignOp/BitwiseOr.md) | |
| [`BitwiseXor`](./classes/PhpParser/Node/Expr/AssignOp/BitwiseXor.md) | |
| [`Concat`](./classes/PhpParser/Node/Expr/AssignOp/Concat.md) | |
| [`Div`](./classes/PhpParser/Node/Expr/AssignOp/Div.md) | |
| [`Minus`](./classes/PhpParser/Node/Expr/AssignOp/Minus.md) | |
| [`Mod`](./classes/PhpParser/Node/Expr/AssignOp/Mod.md) | |
| [`Mul`](./classes/PhpParser/Node/Expr/AssignOp/Mul.md) | |
| [`Plus`](./classes/PhpParser/Node/Expr/AssignOp/Plus.md) | |
| [`Pow`](./classes/PhpParser/Node/Expr/AssignOp/Pow.md) | |
| [`ShiftLeft`](./classes/PhpParser/Node/Expr/AssignOp/ShiftLeft.md) | |
| [`ShiftRight`](./classes/PhpParser/Node/Expr/AssignOp/ShiftRight.md) | |

### \PhpParser\Node\Expr\BinaryOp

#### Classes

| Class | Description |
|-------|-------------|
| [`BitwiseAnd`](./classes/PhpParser/Node/Expr/BinaryOp/BitwiseAnd.md) | |
| [`BitwiseOr`](./classes/PhpParser/Node/Expr/BinaryOp/BitwiseOr.md) | |
| [`BitwiseXor`](./classes/PhpParser/Node/Expr/BinaryOp/BitwiseXor.md) | |
| [`BooleanAnd`](./classes/PhpParser/Node/Expr/BinaryOp/BooleanAnd.md) | |
| [`BooleanOr`](./classes/PhpParser/Node/Expr/BinaryOp/BooleanOr.md) | |
| [`Coalesce`](./classes/PhpParser/Node/Expr/BinaryOp/Coalesce.md) | |
| [`Concat`](./classes/PhpParser/Node/Expr/BinaryOp/Concat.md) | |
| [`Div`](./classes/PhpParser/Node/Expr/BinaryOp/Div.md) | |
| [`Equal`](./classes/PhpParser/Node/Expr/BinaryOp/Equal.md) | |
| [`Greater`](./classes/PhpParser/Node/Expr/BinaryOp/Greater.md) | |
| [`GreaterOrEqual`](./classes/PhpParser/Node/Expr/BinaryOp/GreaterOrEqual.md) | |
| [`Identical`](./classes/PhpParser/Node/Expr/BinaryOp/Identical.md) | |
| [`LogicalAnd`](./classes/PhpParser/Node/Expr/BinaryOp/LogicalAnd.md) | |
| [`LogicalOr`](./classes/PhpParser/Node/Expr/BinaryOp/LogicalOr.md) | |
| [`LogicalXor`](./classes/PhpParser/Node/Expr/BinaryOp/LogicalXor.md) | |
| [`Minus`](./classes/PhpParser/Node/Expr/BinaryOp/Minus.md) | |
| [`Mod`](./classes/PhpParser/Node/Expr/BinaryOp/Mod.md) | |
| [`Mul`](./classes/PhpParser/Node/Expr/BinaryOp/Mul.md) | |
| [`NotEqual`](./classes/PhpParser/Node/Expr/BinaryOp/NotEqual.md) | |
| [`NotIdentical`](./classes/PhpParser/Node/Expr/BinaryOp/NotIdentical.md) | |
| [`Plus`](./classes/PhpParser/Node/Expr/BinaryOp/Plus.md) | |
| [`Pow`](./classes/PhpParser/Node/Expr/BinaryOp/Pow.md) | |
| [`ShiftLeft`](./classes/PhpParser/Node/Expr/BinaryOp/ShiftLeft.md) | |
| [`ShiftRight`](./classes/PhpParser/Node/Expr/BinaryOp/ShiftRight.md) | |
| [`Smaller`](./classes/PhpParser/Node/Expr/BinaryOp/Smaller.md) | |
| [`SmallerOrEqual`](./classes/PhpParser/Node/Expr/BinaryOp/SmallerOrEqual.md) | |
| [`Spaceship`](./classes/PhpParser/Node/Expr/BinaryOp/Spaceship.md) | |

### \PhpParser\Node\Expr\Cast

#### Classes

| Class | Description |
|-------|-------------|
| [`Array_`](./classes/PhpParser/Node/Expr/Cast/Array_.md) | |
| [`Bool_`](./classes/PhpParser/Node/Expr/Cast/Bool_.md) | |
| [`Double`](./classes/PhpParser/Node/Expr/Cast/Double.md) | |
| [`Int_`](./classes/PhpParser/Node/Expr/Cast/Int_.md) | |
| [`Object_`](./classes/PhpParser/Node/Expr/Cast/Object_.md) | |
| [`String_`](./classes/PhpParser/Node/Expr/Cast/String_.md) | |
| [`Unset_`](./classes/PhpParser/Node/Expr/Cast/Unset_.md) | |

### \PhpParser\Node\Name

#### Classes

| Class | Description |
|-------|-------------|
| [`FullyQualified`](./classes/PhpParser/Node/Name/FullyQualified.md) | |
| [`Relative`](./classes/PhpParser/Node/Name/Relative.md) | |

### \PhpParser\Node\Scalar

#### Classes

| Class | Description |
|-------|-------------|
| [`DNumber`](./classes/PhpParser/Node/Scalar/DNumber.md) | |
| [`Encapsed`](./classes/PhpParser/Node/Scalar/Encapsed.md) | |
| [`LNumber`](./classes/PhpParser/Node/Scalar/LNumber.md) | |
| [`MagicConst`](./classes/PhpParser/Node/Scalar/MagicConst.md) | |
| [`MagicConstTest`](./classes/PhpParser/Node/Scalar/MagicConstTest.md) | |
| [`StringTest`](./classes/PhpParser/Node/Scalar/StringTest.md) | |
| [`String_`](./classes/PhpParser/Node/Scalar/String_.md) | |

### \PhpParser\Node\Scalar\MagicConst

#### Classes

| Class | Description |
|-------|-------------|
| [`Class_`](./classes/PhpParser/Node/Scalar/MagicConst/Class_.md) | |
| [`Dir`](./classes/PhpParser/Node/Scalar/MagicConst/Dir.md) | |
| [`File`](./classes/PhpParser/Node/Scalar/MagicConst/File.md) | |
| [`Function_`](./classes/PhpParser/Node/Scalar/MagicConst/Function_.md) | |
| [`Line`](./classes/PhpParser/Node/Scalar/MagicConst/Line.md) | |
| [`Method`](./classes/PhpParser/Node/Scalar/MagicConst/Method.md) | |
| [`Namespace_`](./classes/PhpParser/Node/Scalar/MagicConst/Namespace_.md) | |
| [`Trait_`](./classes/PhpParser/Node/Scalar/MagicConst/Trait_.md) | |

### \PhpParser\Node\Stmt

#### Classes

| Class | Description |
|-------|-------------|
| [`Break_`](./classes/PhpParser/Node/Stmt/Break_.md) | |
| [`Case_`](./classes/PhpParser/Node/Stmt/Case_.md) | |
| [`Catch_`](./classes/PhpParser/Node/Stmt/Catch_.md) | |
| [`ClassConst`](./classes/PhpParser/Node/Stmt/ClassConst.md) | |
| [`ClassLike`](./classes/PhpParser/Node/Stmt/ClassLike.md) | |
| [`ClassMethod`](./classes/PhpParser/Node/Stmt/ClassMethod.md) | |
| [`ClassMethodTest`](./classes/PhpParser/Node/Stmt/ClassMethodTest.md) | |
| [`ClassTest`](./classes/PhpParser/Node/Stmt/ClassTest.md) | |
| [`Class_`](./classes/PhpParser/Node/Stmt/Class_.md) | |
| [`Const_`](./classes/PhpParser/Node/Stmt/Const_.md) | |
| [`Continue_`](./classes/PhpParser/Node/Stmt/Continue_.md) | |
| [`DeclareDeclare`](./classes/PhpParser/Node/Stmt/DeclareDeclare.md) | |
| [`Declare_`](./classes/PhpParser/Node/Stmt/Declare_.md) | |
| [`Do_`](./classes/PhpParser/Node/Stmt/Do_.md) | |
| [`Echo_`](./classes/PhpParser/Node/Stmt/Echo_.md) | |
| [`ElseIf_`](./classes/PhpParser/Node/Stmt/ElseIf_.md) | |
| [`Else_`](./classes/PhpParser/Node/Stmt/Else_.md) | |
| [`For_`](./classes/PhpParser/Node/Stmt/For_.md) | |
| [`Foreach_`](./classes/PhpParser/Node/Stmt/Foreach_.md) | |
| [`Function_`](./classes/PhpParser/Node/Stmt/Function_.md) | |
| [`Global_`](./classes/PhpParser/Node/Stmt/Global_.md) | |
| [`Goto_`](./classes/PhpParser/Node/Stmt/Goto_.md) | |
| [`HaltCompiler`](./classes/PhpParser/Node/Stmt/HaltCompiler.md) | |
| [`If_`](./classes/PhpParser/Node/Stmt/If_.md) | |
| [`InlineHTML`](./classes/PhpParser/Node/Stmt/InlineHTML.md) | |
| [`InterfaceTest`](./classes/PhpParser/Node/Stmt/InterfaceTest.md) | |
| [`Interface_`](./classes/PhpParser/Node/Stmt/Interface_.md) | |
| [`Label`](./classes/PhpParser/Node/Stmt/Label.md) | |
| [`Namespace_`](./classes/PhpParser/Node/Stmt/Namespace_.md) | |
| [`Property`](./classes/PhpParser/Node/Stmt/Property.md) | |
| [`PropertyProperty`](./classes/PhpParser/Node/Stmt/PropertyProperty.md) | |
| [`PropertyTest`](./classes/PhpParser/Node/Stmt/PropertyTest.md) | |
| [`Return_`](./classes/PhpParser/Node/Stmt/Return_.md) | |
| [`StaticVar`](./classes/PhpParser/Node/Stmt/StaticVar.md) | |
| [`Static_`](./classes/PhpParser/Node/Stmt/Static_.md) | |
| [`Switch_`](./classes/PhpParser/Node/Stmt/Switch_.md) | |
| [`Throw_`](./classes/PhpParser/Node/Stmt/Throw_.md) | |
| [`TraitUse`](./classes/PhpParser/Node/Stmt/TraitUse.md) | |
| [`TraitUseAdaptation`](./classes/PhpParser/Node/Stmt/TraitUseAdaptation.md) | |
| [`Trait_`](./classes/PhpParser/Node/Stmt/Trait_.md) | |
| [`TryCatch`](./classes/PhpParser/Node/Stmt/TryCatch.md) | |
| [`Unset_`](./classes/PhpParser/Node/Stmt/Unset_.md) | |
| [`UseUse`](./classes/PhpParser/Node/Stmt/UseUse.md) | |
| [`Use_`](./classes/PhpParser/Node/Stmt/Use_.md) | |
| [`While_`](./classes/PhpParser/Node/Stmt/While_.md) | |

### \PhpParser\Node\Stmt\TraitUseAdaptation

#### Classes

| Class | Description |
|-------|-------------|
| [`Alias`](./classes/PhpParser/Node/Stmt/TraitUseAdaptation/Alias.md) | |
| [`Precedence`](./classes/PhpParser/Node/Stmt/TraitUseAdaptation/Precedence.md) | |

### \PhpParser\PrettyPrinter

#### Classes

| Class | Description |
|-------|-------------|
| [`Standard`](./classes/PhpParser/PrettyPrinter/Standard.md) | |

### \PhpParser\Serializer

#### Classes

| Class | Description |
|-------|-------------|
| [`XML`](./classes/PhpParser/Serializer/XML.md) | |
| [`XMLTest`](./classes/PhpParser/Serializer/XMLTest.md) | |

### \PhpParser\Unserializer

#### Classes

| Class | Description |
|-------|-------------|
| [`XML`](./classes/PhpParser/Unserializer/XML.md) | |
| [`XMLTest`](./classes/PhpParser/Unserializer/XMLTest.md) | |

### \Pimple\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`Invokable`](./classes/Pimple/Tests/Invokable.md) | |
| [`NonInvokable`](./classes/Pimple/Tests/NonInvokable.md) | |
| [`PimpleTest`](./classes/Pimple/Tests/PimpleTest.md) | Pimple Test|
| [`Service`](./classes/Pimple/Tests/Service.md) | Pimple Test Service|

### \Psr\Cache

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CacheException`](./classes/Psr/Cache/CacheException.md) | Exception interface for all exceptions thrown by an Implementing Library.|
| [`CacheItemInterface`](./classes/Psr/Cache/CacheItemInterface.md) | CacheItemInterface defines an interface for interacting with objects inside a cache.|
| [`CacheItemPoolInterface`](./classes/Psr/Cache/CacheItemPoolInterface.md) | CacheItemPoolInterface generates CacheItemInterface objects.|
| [`InvalidArgumentException`](./classes/Psr/Cache/InvalidArgumentException.md) | Exception interface for invalid cache arguments.|

### \Psr\Container

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ContainerExceptionInterface`](./classes/Psr/Container/ContainerExceptionInterface.md) | Base interface representing a generic exception in a container.|
| [`ContainerInterface`](./classes/Psr/Container/ContainerInterface.md) | Describes the interface of a container that exposes methods to read its entries.|
| [`NotFoundExceptionInterface`](./classes/Psr/Container/NotFoundExceptionInterface.md) | No entry was found in the container.|

### \Psr\Log

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractLogger`](./classes/Psr/Log/AbstractLogger.md) | This is a simple Logger implementation that other Loggers can inherit from.|
| [`InvalidArgumentException`](./classes/Psr/Log/InvalidArgumentException.md) | |
| [`LogLevel`](./classes/Psr/Log/LogLevel.md) | Describes log levels.|
| [`NullLogger`](./classes/Psr/Log/NullLogger.md) | This Logger can be used to avoid conditional log calls.|

#### Traits

| Trait | Description |
|-------|-------------|
| [`LoggerAwareTrait`](./classes/Psr/Log/LoggerAwareTrait.md) | Basic Implementation of LoggerAwareInterface.|
| [`LoggerTrait`](./classes/Psr/Log/LoggerTrait.md) | This is a simple Logger trait that classes unable to extend AbstractLogger<br />(because they extend another class, etc) can include.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`LoggerAwareInterface`](./classes/Psr/Log/LoggerAwareInterface.md) | Describes a logger-aware instance.|
| [`LoggerInterface`](./classes/Psr/Log/LoggerInterface.md) | Describes a logger instance.|

### \Psr\Log\Test

#### Classes

| Class | Description |
|-------|-------------|
| [`LoggerInterfaceTest`](./classes/Psr/Log/Test/LoggerInterfaceTest.md) | Provides a base test class for ensuring compliance with the LoggerInterface.|
| [`TestLogger`](./classes/Psr/Log/Test/TestLogger.md) | Used for testing purposes.|

### \SimpleStorage

#### Classes

| Class | Description |
|-------|-------------|
| [`Client`](./classes/SimpleStorage/Client.md) | |

### \Singletons\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](./classes/Singletons/Controller/Admin.md) | Class Controller|
| [`RestApi`](./classes/Singletons/Controller/RestApi.md) | Class Controller|

### \Symfony\Component\Config

#### Classes

| Class | Description |
|-------|-------------|
| [`ConfigCache`](./classes/Symfony/Component/Config/ConfigCache.md) | ConfigCache caches arbitrary content in files on disk.|
| [`ConfigCacheFactory`](./classes/Symfony/Component/Config/ConfigCacheFactory.md) | Basic implementation of ConfigCacheFactoryInterface that<br />creates an instance of the default ConfigCache.|
| [`FileLocator`](./classes/Symfony/Component/Config/FileLocator.md) | FileLocator uses an array of pre-defined paths to find files.|
| [`ResourceCheckerConfigCache`](./classes/Symfony/Component/Config/ResourceCheckerConfigCache.md) | ResourceCheckerConfigCache uses instances of ResourceCheckerInterface<br />to check whether cached data is still fresh.|
| [`ResourceCheckerConfigCacheFactory`](./classes/Symfony/Component/Config/ResourceCheckerConfigCacheFactory.md) | A ConfigCacheFactory implementation that validates the<br />cache with an arbitrary set of ResourceCheckers.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ConfigCacheFactoryInterface`](./classes/Symfony/Component/Config/ConfigCacheFactoryInterface.md) | Interface for a ConfigCache factory. This factory creates<br />an instance of ConfigCacheInterface and initializes the<br />cache if necessary.|
| [`ConfigCacheInterface`](./classes/Symfony/Component/Config/ConfigCacheInterface.md) | Interface for ConfigCache.|
| [`FileLocatorInterface`](./classes/Symfony/Component/Config/FileLocatorInterface.md) | |
| [`ResourceCheckerInterface`](./classes/Symfony/Component/Config/ResourceCheckerInterface.md) | Interface for ResourceCheckers.|

### \Symfony\Component\Config\Definition

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayNode`](./classes/Symfony/Component/Config/Definition/ArrayNode.md) | Represents an Array node in the config tree.|
| [`BaseNode`](./classes/Symfony/Component/Config/Definition/BaseNode.md) | The base node class.|
| [`BooleanNode`](./classes/Symfony/Component/Config/Definition/BooleanNode.md) | This node represents a Boolean value in the config tree.|
| [`EnumNode`](./classes/Symfony/Component/Config/Definition/EnumNode.md) | Node which only allows a finite set of values.|
| [`FloatNode`](./classes/Symfony/Component/Config/Definition/FloatNode.md) | This node represents a float value in the config tree.|
| [`IntegerNode`](./classes/Symfony/Component/Config/Definition/IntegerNode.md) | This node represents an integer value in the config tree.|
| [`NumericNode`](./classes/Symfony/Component/Config/Definition/NumericNode.md) | This node represents a numeric value in the config tree.|
| [`Processor`](./classes/Symfony/Component/Config/Definition/Processor.md) | This class is the entry point for config normalization/merging/finalization.|
| [`PrototypedArrayNode`](./classes/Symfony/Component/Config/Definition/PrototypedArrayNode.md) | Represents a prototyped Array node in the config tree.|
| [`ReferenceDumper`](./classes/Symfony/Component/Config/Definition/ReferenceDumper.md) | Dumps a Yaml reference configuration for the given configuration/node instance.|
| [`ScalarNode`](./classes/Symfony/Component/Config/Definition/ScalarNode.md) | This node represents a scalar value in the config tree.|
| [`VariableNode`](./classes/Symfony/Component/Config/Definition/VariableNode.md) | This node represents a value of variable type in the config tree.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ConfigurationInterface`](./classes/Symfony/Component/Config/Definition/ConfigurationInterface.md) | Configuration interface.|
| [`NodeInterface`](./classes/Symfony/Component/Config/Definition/NodeInterface.md) | Common Interface among all nodes.|
| [`PrototypeNodeInterface`](./classes/Symfony/Component/Config/Definition/PrototypeNodeInterface.md) | This interface must be implemented by nodes which can be used as prototypes.|

### \Symfony\Component\Config\Definition\Builder

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayNodeDefinition`](./classes/Symfony/Component/Config/Definition/Builder/ArrayNodeDefinition.md) | This class provides a fluent interface for defining an array node.|
| [`BooleanNodeDefinition`](./classes/Symfony/Component/Config/Definition/Builder/BooleanNodeDefinition.md) | This class provides a fluent interface for defining a node.|
| [`EnumNodeDefinition`](./classes/Symfony/Component/Config/Definition/Builder/EnumNodeDefinition.md) | Enum Node Definition.|
| [`ExprBuilder`](./classes/Symfony/Component/Config/Definition/Builder/ExprBuilder.md) | This class builds an if expression.|
| [`FloatNodeDefinition`](./classes/Symfony/Component/Config/Definition/Builder/FloatNodeDefinition.md) | This class provides a fluent interface for defining a float node.|
| [`IntegerNodeDefinition`](./classes/Symfony/Component/Config/Definition/Builder/IntegerNodeDefinition.md) | This class provides a fluent interface for defining an integer node.|
| [`MergeBuilder`](./classes/Symfony/Component/Config/Definition/Builder/MergeBuilder.md) | This class builds merge conditions.|
| [`NodeBuilder`](./classes/Symfony/Component/Config/Definition/Builder/NodeBuilder.md) | This class provides a fluent interface for building a node.|
| [`NodeDefinition`](./classes/Symfony/Component/Config/Definition/Builder/NodeDefinition.md) | This class provides a fluent interface for defining a node.|
| [`NormalizationBuilder`](./classes/Symfony/Component/Config/Definition/Builder/NormalizationBuilder.md) | This class builds normalization conditions.|
| [`NumericNodeDefinition`](./classes/Symfony/Component/Config/Definition/Builder/NumericNodeDefinition.md) | Abstract class that contains common code of integer and float node definitions.|
| [`ScalarNodeDefinition`](./classes/Symfony/Component/Config/Definition/Builder/ScalarNodeDefinition.md) | This class provides a fluent interface for defining a node.|
| [`TreeBuilder`](./classes/Symfony/Component/Config/Definition/Builder/TreeBuilder.md) | This is the entry class for building a config tree.|
| [`ValidationBuilder`](./classes/Symfony/Component/Config/Definition/Builder/ValidationBuilder.md) | This class builds validation conditions.|
| [`VariableNodeDefinition`](./classes/Symfony/Component/Config/Definition/Builder/VariableNodeDefinition.md) | This class provides a fluent interface for defining a node.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`NodeParentInterface`](./classes/Symfony/Component/Config/Definition/Builder/NodeParentInterface.md) | An interface that must be implemented by all node parents.|
| [`ParentNodeDefinitionInterface`](./classes/Symfony/Component/Config/Definition/Builder/ParentNodeDefinitionInterface.md) | An interface that must be implemented by nodes which can have children.|

### \Symfony\Component\Config\Definition\Dumper

#### Classes

| Class | Description |
|-------|-------------|
| [`XmlReferenceDumper`](./classes/Symfony/Component/Config/Definition/Dumper/XmlReferenceDumper.md) | Dumps a XML reference configuration for the given configuration/node instance.|
| [`YamlReferenceDumper`](./classes/Symfony/Component/Config/Definition/Dumper/YamlReferenceDumper.md) | Dumps a Yaml reference configuration for the given configuration/node instance.|

### \Symfony\Component\Config\Definition\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`DuplicateKeyException`](./classes/Symfony/Component/Config/Definition/Exception/DuplicateKeyException.md) | This exception is thrown whenever the key of an array is not unique. This can<br />only be the case if the configuration is coming from an XML file.|
| [`Exception`](./classes/Symfony/Component/Config/Definition/Exception/Exception.md) | Base exception for all configuration exceptions.|
| [`ForbiddenOverwriteException`](./classes/Symfony/Component/Config/Definition/Exception/ForbiddenOverwriteException.md) | This exception is thrown when a configuration path is overwritten from a<br />subsequent configuration file, but the entry node specifically forbids this.|
| [`InvalidConfigurationException`](./classes/Symfony/Component/Config/Definition/Exception/InvalidConfigurationException.md) | A very general exception which can be thrown whenever non of the more specific<br />exceptions is suitable.|
| [`InvalidDefinitionException`](./classes/Symfony/Component/Config/Definition/Exception/InvalidDefinitionException.md) | Thrown when an error is detected in a node Definition.|
| [`InvalidTypeException`](./classes/Symfony/Component/Config/Definition/Exception/InvalidTypeException.md) | This exception is thrown if an invalid type is encountered.|
| [`UnsetKeyException`](./classes/Symfony/Component/Config/Definition/Exception/UnsetKeyException.md) | This exception is usually not encountered by the end-user, but only used<br />internally to signal the parent scope to unset a key.|

### \Symfony\Component\Config\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FileLoaderImportCircularReferenceException`](./classes/Symfony/Component/Config/Exception/FileLoaderImportCircularReferenceException.md) | Exception class for when a circular reference is detected when importing resources.|
| [`FileLoaderLoadException`](./classes/Symfony/Component/Config/Exception/FileLoaderLoadException.md) | Exception class for when a resource cannot be loaded or imported.|

### \Symfony\Component\Config\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`DelegatingLoader`](./classes/Symfony/Component/Config/Loader/DelegatingLoader.md) | DelegatingLoader delegates loading to other loaders using a loader resolver.|
| [`FileLoader`](./classes/Symfony/Component/Config/Loader/FileLoader.md) | FileLoader is the abstract class used by all built-in loaders that are file based.|
| [`Loader`](./classes/Symfony/Component/Config/Loader/Loader.md) | Loader is the abstract class used by all built-in loaders.|
| [`LoaderResolver`](./classes/Symfony/Component/Config/Loader/LoaderResolver.md) | LoaderResolver selects a loader for a given resource.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`LoaderInterface`](./classes/Symfony/Component/Config/Loader/LoaderInterface.md) | LoaderInterface is the interface implemented by all loader classes.|
| [`LoaderResolverInterface`](./classes/Symfony/Component/Config/Loader/LoaderResolverInterface.md) | LoaderResolverInterface selects a loader for a given resource.|

### \Symfony\Component\Config\Resource

#### Classes

| Class | Description |
|-------|-------------|
| [`BCResourceInterfaceChecker`](./classes/Symfony/Component/Config/Resource/BCResourceInterfaceChecker.md) | Resource checker for the ResourceInterface. Exists for BC.|
| [`DirectoryResource`](./classes/Symfony/Component/Config/Resource/DirectoryResource.md) | DirectoryResource represents a resources stored in a subdirectory tree.|
| [`FileExistenceResource`](./classes/Symfony/Component/Config/Resource/FileExistenceResource.md) | FileExistenceResource represents a resource stored on the filesystem.|
| [`FileResource`](./classes/Symfony/Component/Config/Resource/FileResource.md) | FileResource represents a resource stored on the filesystem.|
| [`SelfCheckingResourceChecker`](./classes/Symfony/Component/Config/Resource/SelfCheckingResourceChecker.md) | Resource checker for instances of SelfCheckingResourceInterface.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ResourceInterface`](./classes/Symfony/Component/Config/Resource/ResourceInterface.md) | ResourceInterface is the interface that must be implemented by all Resource classes.|
| [`SelfCheckingResourceInterface`](./classes/Symfony/Component/Config/Resource/SelfCheckingResourceInterface.md) | Interface for Resources that can check for freshness autonomously,<br />without special support from external services.|

### \Symfony\Component\Config\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ConfigCacheFactoryTest`](./classes/Symfony/Component/Config/Tests/ConfigCacheFactoryTest.md) | |
| [`ConfigCacheTest`](./classes/Symfony/Component/Config/Tests/ConfigCacheTest.md) | |
| [`FileLocatorTest`](./classes/Symfony/Component/Config/Tests/FileLocatorTest.md) | |
| [`ResourceCheckerConfigCacheTest`](./classes/Symfony/Component/Config/Tests/ResourceCheckerConfigCacheTest.md) | |

### \Symfony\Component\Config\Tests\Definition

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayNodeTest`](./classes/Symfony/Component/Config/Tests/Definition/ArrayNodeTest.md) | |
| [`BooleanNodeTest`](./classes/Symfony/Component/Config/Tests/Definition/BooleanNodeTest.md) | |
| [`EnumNodeTest`](./classes/Symfony/Component/Config/Tests/Definition/EnumNodeTest.md) | |
| [`FinalizationTest`](./classes/Symfony/Component/Config/Tests/Definition/FinalizationTest.md) | |
| [`FloatNodeTest`](./classes/Symfony/Component/Config/Tests/Definition/FloatNodeTest.md) | |
| [`IntegerNodeTest`](./classes/Symfony/Component/Config/Tests/Definition/IntegerNodeTest.md) | |
| [`MergeTest`](./classes/Symfony/Component/Config/Tests/Definition/MergeTest.md) | |
| [`NormalizationTest`](./classes/Symfony/Component/Config/Tests/Definition/NormalizationTest.md) | |
| [`PrototypedArrayNodeTest`](./classes/Symfony/Component/Config/Tests/Definition/PrototypedArrayNodeTest.md) | |
| [`ScalarNodeTest`](./classes/Symfony/Component/Config/Tests/Definition/ScalarNodeTest.md) | |

### \Symfony\Component\Config\Tests\Definition\Builder

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayNodeDefinitionTest`](./classes/Symfony/Component/Config/Tests/Definition/Builder/ArrayNodeDefinitionTest.md) | |
| [`EnumNodeDefinitionTest`](./classes/Symfony/Component/Config/Tests/Definition/Builder/EnumNodeDefinitionTest.md) | |
| [`ExprBuilderTest`](./classes/Symfony/Component/Config/Tests/Definition/Builder/ExprBuilderTest.md) | |
| [`NodeBuilderTest`](./classes/Symfony/Component/Config/Tests/Definition/Builder/NodeBuilderTest.md) | |
| [`NumericNodeDefinitionTest`](./classes/Symfony/Component/Config/Tests/Definition/Builder/NumericNodeDefinitionTest.md) | |
| [`SomeNodeDefinition`](./classes/Symfony/Component/Config/Tests/Definition/Builder/SomeNodeDefinition.md) | This class provides a fluent interface for defining a node.|
| [`TreeBuilderTest`](./classes/Symfony/Component/Config/Tests/Definition/Builder/TreeBuilderTest.md) | |

### \Symfony\Component\Config\Tests\Definition\Dumper

#### Classes

| Class | Description |
|-------|-------------|
| [`XmlReferenceDumperTest`](./classes/Symfony/Component/Config/Tests/Definition/Dumper/XmlReferenceDumperTest.md) | |
| [`YamlReferenceDumperTest`](./classes/Symfony/Component/Config/Tests/Definition/Dumper/YamlReferenceDumperTest.md) | |

### \Symfony\Component\Config\Tests\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FileLoaderLoadExceptionTest`](./classes/Symfony/Component/Config/Tests/Exception/FileLoaderLoadExceptionTest.md) | |

### \Symfony\Component\Config\Tests\Fixtures

#### Classes

| Class | Description |
|-------|-------------|
| [`BarNode`](./classes/Symfony/Component/Config/Tests/Fixtures/BarNode.md) | Represents an Array node in the config tree.|

### \Symfony\Component\Config\Tests\Fixtures\Builder

#### Classes

| Class | Description |
|-------|-------------|
| [`BarNodeDefinition`](./classes/Symfony/Component/Config/Tests/Fixtures/Builder/BarNodeDefinition.md) | This class provides a fluent interface for defining a node.|
| [`NodeBuilder`](./classes/Symfony/Component/Config/Tests/Fixtures/Builder/NodeBuilder.md) | This class provides a fluent interface for building a node.|
| [`VariableNodeDefinition`](./classes/Symfony/Component/Config/Tests/Fixtures/Builder/VariableNodeDefinition.md) | This class provides a fluent interface for defining a node.|

### \Symfony\Component\Config\Tests\Fixtures\Configuration

#### Classes

| Class | Description |
|-------|-------------|
| [`ExampleConfiguration`](./classes/Symfony/Component/Config/Tests/Fixtures/Configuration/ExampleConfiguration.md) | |

### \Symfony\Component\Config\Tests\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`DelegatingLoaderTest`](./classes/Symfony/Component/Config/Tests/Loader/DelegatingLoaderTest.md) | |
| [`FileLoaderTest`](./classes/Symfony/Component/Config/Tests/Loader/FileLoaderTest.md) | |
| [`LoaderResolverTest`](./classes/Symfony/Component/Config/Tests/Loader/LoaderResolverTest.md) | |
| [`LoaderTest`](./classes/Symfony/Component/Config/Tests/Loader/LoaderTest.md) | |
| [`ProjectLoader1`](./classes/Symfony/Component/Config/Tests/Loader/ProjectLoader1.md) | Loader is the abstract class used by all built-in loaders.|
| [`TestFileLoader`](./classes/Symfony/Component/Config/Tests/Loader/TestFileLoader.md) | FileLoader is the abstract class used by all built-in loaders that are file based.|

### \Symfony\Component\Config\Tests\Resource

#### Classes

| Class | Description |
|-------|-------------|
| [`DirectoryResourceTest`](./classes/Symfony/Component/Config/Tests/Resource/DirectoryResourceTest.md) | |
| [`FileExistenceResourceTest`](./classes/Symfony/Component/Config/Tests/Resource/FileExistenceResourceTest.md) | |
| [`FileResourceTest`](./classes/Symfony/Component/Config/Tests/Resource/FileResourceTest.md) | |
| [`ResourceStub`](./classes/Symfony/Component/Config/Tests/Resource/ResourceStub.md) | |

### \Symfony\Component\Config\Tests\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`XmlUtilsTest`](./classes/Symfony/Component/Config/Tests/Util/XmlUtilsTest.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Validator`](./classes/Symfony/Component/Config/Tests/Util/Validator.md) | |

### \Symfony\Component\Config\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`XmlUtils`](./classes/Symfony/Component/Config/Util/XmlUtils.md) | XMLUtils is a bunch of utility methods to XML operations.|

### \Symfony\Component\Console

#### Classes

| Class | Description |
|-------|-------------|
| [`Application`](./classes/Symfony/Component/Console/Application.md) | An Application is the container for a collection of commands.|
| [`ConsoleEvents`](./classes/Symfony/Component/Console/ConsoleEvents.md) | Contains all events dispatched by an Application.|
| [`Shell`](./classes/Symfony/Component/Console/Shell.md) | A Shell wraps an Application to add shell capabilities to it.|

### \Symfony\Component\Console\Command

#### Classes

| Class | Description |
|-------|-------------|
| [`Command`](./classes/Symfony/Component/Console/Command/Command.md) | Base class for all commands.|
| [`HelpCommand`](./classes/Symfony/Component/Console/Command/HelpCommand.md) | HelpCommand displays the help for a given command.|
| [`ListCommand`](./classes/Symfony/Component/Console/Command/ListCommand.md) | ListCommand displays the list of all available commands for the application.|

### \Symfony\Component\Console\Descriptor

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`DescriptorInterface`](./classes/Symfony/Component/Console/Descriptor/DescriptorInterface.md) | Descriptor interface.|

### \Symfony\Component\Console\Event

#### Classes

| Class | Description |
|-------|-------------|
| [`ConsoleCommandEvent`](./classes/Symfony/Component/Console/Event/ConsoleCommandEvent.md) | Allows to do things before the command is executed, like skipping the command or changing the input.|
| [`ConsoleEvent`](./classes/Symfony/Component/Console/Event/ConsoleEvent.md) | Allows to inspect input and output of a command.|
| [`ConsoleExceptionEvent`](./classes/Symfony/Component/Console/Event/ConsoleExceptionEvent.md) | Allows to handle exception thrown in a command.|
| [`ConsoleTerminateEvent`](./classes/Symfony/Component/Console/Event/ConsoleTerminateEvent.md) | Allows to manipulate the exit code of a command after its execution.|

### \Symfony\Component\Console\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`CommandNotFoundException`](./classes/Symfony/Component/Console/Exception/CommandNotFoundException.md) | Represents an incorrect command name typed in the console.|
| [`InvalidArgumentException`](./classes/Symfony/Component/Console/Exception/InvalidArgumentException.md) | |
| [`InvalidOptionException`](./classes/Symfony/Component/Console/Exception/InvalidOptionException.md) | Represents an incorrect option name typed in the console.|
| [`LogicException`](./classes/Symfony/Component/Console/Exception/LogicException.md) | |
| [`RuntimeException`](./classes/Symfony/Component/Console/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Symfony/Component/Console/Exception/ExceptionInterface.md) | ExceptionInterface.|

### \Symfony\Component\Console\Formatter

#### Classes

| Class | Description |
|-------|-------------|
| [`OutputFormatter`](./classes/Symfony/Component/Console/Formatter/OutputFormatter.md) | Formatter class for console output.|
| [`OutputFormatterStyle`](./classes/Symfony/Component/Console/Formatter/OutputFormatterStyle.md) | Formatter style class for defining styles.|
| [`OutputFormatterStyleStack`](./classes/Symfony/Component/Console/Formatter/OutputFormatterStyleStack.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`OutputFormatterInterface`](./classes/Symfony/Component/Console/Formatter/OutputFormatterInterface.md) | Formatter interface for console output.|
| [`OutputFormatterStyleInterface`](./classes/Symfony/Component/Console/Formatter/OutputFormatterStyleInterface.md) | Formatter style interface for defining styles.|

### \Symfony\Component\Console\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`DebugFormatterHelper`](./classes/Symfony/Component/Console/Helper/DebugFormatterHelper.md) | Helps outputting debug information when running an external program from a command.|
| [`DescriptorHelper`](./classes/Symfony/Component/Console/Helper/DescriptorHelper.md) | This class adds helper method to describe objects in various formats.|
| [`DialogHelper`](./classes/Symfony/Component/Console/Helper/DialogHelper.md) | The Dialog class provides helpers to interact with the user.|
| [`FormatterHelper`](./classes/Symfony/Component/Console/Helper/FormatterHelper.md) | The Formatter class provides helpers to format messages.|
| [`Helper`](./classes/Symfony/Component/Console/Helper/Helper.md) | Helper is the base class for all helper classes.|
| [`HelperSet`](./classes/Symfony/Component/Console/Helper/HelperSet.md) | HelperSet represents a set of helpers to be used with a command.|
| [`InputAwareHelper`](./classes/Symfony/Component/Console/Helper/InputAwareHelper.md) | An implementation of InputAwareInterface for Helpers.|
| [`ProcessHelper`](./classes/Symfony/Component/Console/Helper/ProcessHelper.md) | The ProcessHelper class provides helpers to run external processes.|
| [`ProgressBar`](./classes/Symfony/Component/Console/Helper/ProgressBar.md) | The ProgressBar provides helpers to display progress output.|
| [`ProgressHelper`](./classes/Symfony/Component/Console/Helper/ProgressHelper.md) | The Progress class provides helpers to display progress output.|
| [`ProgressIndicator`](./classes/Symfony/Component/Console/Helper/ProgressIndicator.md) | |
| [`QuestionHelper`](./classes/Symfony/Component/Console/Helper/QuestionHelper.md) | The QuestionHelper class provides helpers to interact with the user.|
| [`SymfonyQuestionHelper`](./classes/Symfony/Component/Console/Helper/SymfonyQuestionHelper.md) | Symfony Style Guide compliant question helper.|
| [`Table`](./classes/Symfony/Component/Console/Helper/Table.md) | Provides helpers to display a table.|
| [`TableCell`](./classes/Symfony/Component/Console/Helper/TableCell.md) | |
| [`TableHelper`](./classes/Symfony/Component/Console/Helper/TableHelper.md) | Provides helpers to display table output.|
| [`TableSeparator`](./classes/Symfony/Component/Console/Helper/TableSeparator.md) | Marks a row as being a separator.|
| [`TableStyle`](./classes/Symfony/Component/Console/Helper/TableStyle.md) | Defines the styles for a Table.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`HelperInterface`](./classes/Symfony/Component/Console/Helper/HelperInterface.md) | HelperInterface is the interface all helpers must implement.|

### \Symfony\Component\Console\Input

#### Classes

| Class | Description |
|-------|-------------|
| [`ArgvInput`](./classes/Symfony/Component/Console/Input/ArgvInput.md) | ArgvInput represents an input coming from the CLI arguments.|
| [`ArrayInput`](./classes/Symfony/Component/Console/Input/ArrayInput.md) | ArrayInput represents an input provided as an array.|
| [`Input`](./classes/Symfony/Component/Console/Input/Input.md) | Input is the base class for all concrete Input classes.|
| [`InputArgument`](./classes/Symfony/Component/Console/Input/InputArgument.md) | Represents a command line argument.|
| [`InputDefinition`](./classes/Symfony/Component/Console/Input/InputDefinition.md) | A InputDefinition represents a set of valid command line arguments and options.|
| [`InputOption`](./classes/Symfony/Component/Console/Input/InputOption.md) | Represents a command line option.|
| [`StringInput`](./classes/Symfony/Component/Console/Input/StringInput.md) | StringInput represents an input provided as a string.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`InputAwareInterface`](./classes/Symfony/Component/Console/Input/InputAwareInterface.md) | InputAwareInterface should be implemented by classes that depends on the<br />Console Input.|
| [`InputInterface`](./classes/Symfony/Component/Console/Input/InputInterface.md) | InputInterface is the interface implemented by all input classes.|

### \Symfony\Component\Console\Logger

#### Classes

| Class | Description |
|-------|-------------|
| [`ConsoleLogger`](./classes/Symfony/Component/Console/Logger/ConsoleLogger.md) | PSR-3 compliant console logger.|

### \Symfony\Component\Console\Output

#### Classes

| Class | Description |
|-------|-------------|
| [`BufferedOutput`](./classes/Symfony/Component/Console/Output/BufferedOutput.md) | Base class for output classes.|
| [`ConsoleOutput`](./classes/Symfony/Component/Console/Output/ConsoleOutput.md) | ConsoleOutput is the default class for all CLI output. It uses STDOUT.|
| [`NullOutput`](./classes/Symfony/Component/Console/Output/NullOutput.md) | NullOutput suppresses all output.|
| [`Output`](./classes/Symfony/Component/Console/Output/Output.md) | Base class for output classes.|
| [`StreamOutput`](./classes/Symfony/Component/Console/Output/StreamOutput.md) | StreamOutput writes the output to a given stream.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ConsoleOutputInterface`](./classes/Symfony/Component/Console/Output/ConsoleOutputInterface.md) | ConsoleOutputInterface is the interface implemented by ConsoleOutput class.|
| [`OutputInterface`](./classes/Symfony/Component/Console/Output/OutputInterface.md) | OutputInterface is the interface implemented by all Output classes.|

### \Symfony\Component\Console\Question

#### Classes

| Class | Description |
|-------|-------------|
| [`ChoiceQuestion`](./classes/Symfony/Component/Console/Question/ChoiceQuestion.md) | Represents a choice question.|
| [`ConfirmationQuestion`](./classes/Symfony/Component/Console/Question/ConfirmationQuestion.md) | Represents a yes/no question.|
| [`Question`](./classes/Symfony/Component/Console/Question/Question.md) | Represents a Question.|

### \Symfony\Component\Console\Style

#### Classes

| Class | Description |
|-------|-------------|
| [`OutputStyle`](./classes/Symfony/Component/Console/Style/OutputStyle.md) | Decorates output to add console style guide helpers.|
| [`SymfonyStyle`](./classes/Symfony/Component/Console/Style/SymfonyStyle.md) | Output decorator helpers for the Symfony Style Guide.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`StyleInterface`](./classes/Symfony/Component/Console/Style/StyleInterface.md) | Output style helpers.|

### \Symfony\Component\Console\Tester

#### Classes

| Class | Description |
|-------|-------------|
| [`ApplicationTester`](./classes/Symfony/Component/Console/Tester/ApplicationTester.md) | Eases the testing of console applications.|
| [`CommandTester`](./classes/Symfony/Component/Console/Tester/CommandTester.md) | Eases the testing of console commands.|

### \Symfony\Component\Console\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ApplicationTest`](./classes/Symfony/Component/Console/Tests/ApplicationTest.md) | |
| [`CustomApplication`](./classes/Symfony/Component/Console/Tests/CustomApplication.md) | An Application is the container for a collection of commands.|
| [`CustomDefaultCommandApplication`](./classes/Symfony/Component/Console/Tests/CustomDefaultCommandApplication.md) | An Application is the container for a collection of commands.|

### \Symfony\Component\Console\Tests\Command

#### Classes

| Class | Description |
|-------|-------------|
| [`CommandTest`](./classes/Symfony/Component/Console/Tests/Command/CommandTest.md) | |
| [`HelpCommandTest`](./classes/Symfony/Component/Console/Tests/Command/HelpCommandTest.md) | |
| [`ListCommandTest`](./classes/Symfony/Component/Console/Tests/Command/ListCommandTest.md) | |

### \Symfony\Component\Console\Tests\Descriptor

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractDescriptorTest`](./classes/Symfony/Component/Console/Tests/Descriptor/AbstractDescriptorTest.md) | |
| [`JsonDescriptorTest`](./classes/Symfony/Component/Console/Tests/Descriptor/JsonDescriptorTest.md) | |
| [`MarkdownDescriptorTest`](./classes/Symfony/Component/Console/Tests/Descriptor/MarkdownDescriptorTest.md) | |
| [`ObjectsProvider`](./classes/Symfony/Component/Console/Tests/Descriptor/ObjectsProvider.md) | |
| [`TextDescriptorTest`](./classes/Symfony/Component/Console/Tests/Descriptor/TextDescriptorTest.md) | |
| [`XmlDescriptorTest`](./classes/Symfony/Component/Console/Tests/Descriptor/XmlDescriptorTest.md) | |

### \Symfony\Component\Console\Tests\Fixtures

#### Classes

| Class | Description |
|-------|-------------|
| [`DescriptorApplication1`](./classes/Symfony/Component/Console/Tests/Fixtures/DescriptorApplication1.md) | An Application is the container for a collection of commands.|
| [`DescriptorApplication2`](./classes/Symfony/Component/Console/Tests/Fixtures/DescriptorApplication2.md) | An Application is the container for a collection of commands.|
| [`DescriptorApplicationMbString`](./classes/Symfony/Component/Console/Tests/Fixtures/DescriptorApplicationMbString.md) | An Application is the container for a collection of commands.|
| [`DescriptorCommand1`](./classes/Symfony/Component/Console/Tests/Fixtures/DescriptorCommand1.md) | Base class for all commands.|
| [`DescriptorCommand2`](./classes/Symfony/Component/Console/Tests/Fixtures/DescriptorCommand2.md) | Base class for all commands.|
| [`DescriptorCommandMbString`](./classes/Symfony/Component/Console/Tests/Fixtures/DescriptorCommandMbString.md) | Base class for all commands.|
| [`DummyOutput`](./classes/Symfony/Component/Console/Tests/Fixtures/DummyOutput.md) | Dummy output.|

### \Symfony\Component\Console\Tests\Formatter

#### Classes

| Class | Description |
|-------|-------------|
| [`OutputFormatterStyleStackTest`](./classes/Symfony/Component/Console/Tests/Formatter/OutputFormatterStyleStackTest.md) | |
| [`OutputFormatterStyleTest`](./classes/Symfony/Component/Console/Tests/Formatter/OutputFormatterStyleTest.md) | |
| [`OutputFormatterTest`](./classes/Symfony/Component/Console/Tests/Formatter/OutputFormatterTest.md) | |
| [`TableCell`](./classes/Symfony/Component/Console/Tests/Formatter/TableCell.md) | |

### \Symfony\Component\Console\Tests\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`AutocompleteValues`](./classes/Symfony/Component/Console/Tests/Helper/AutocompleteValues.md) | |
| [`FormatterHelperTest`](./classes/Symfony/Component/Console/Tests/Helper/FormatterHelperTest.md) | |
| [`HelperSetTest`](./classes/Symfony/Component/Console/Tests/Helper/HelperSetTest.md) | |
| [`HelperTest`](./classes/Symfony/Component/Console/Tests/Helper/HelperTest.md) | |
| [`LegacyDialogHelperTest`](./classes/Symfony/Component/Console/Tests/Helper/LegacyDialogHelperTest.md) | |
| [`LegacyProgressHelperTest`](./classes/Symfony/Component/Console/Tests/Helper/LegacyProgressHelperTest.md) | |
| [`LegacyTableHelperTest`](./classes/Symfony/Component/Console/Tests/Helper/LegacyTableHelperTest.md) | |
| [`ProcessHelperTest`](./classes/Symfony/Component/Console/Tests/Helper/ProcessHelperTest.md) | |
| [`ProgressBarTest`](./classes/Symfony/Component/Console/Tests/Helper/ProgressBarTest.md) | |
| [`ProgressIndicatorTest`](./classes/Symfony/Component/Console/Tests/Helper/ProgressIndicatorTest.md) | |
| [`QuestionHelperTest`](./classes/Symfony/Component/Console/Tests/Helper/QuestionHelperTest.md) | |
| [`SymfonyQuestionHelperTest`](./classes/Symfony/Component/Console/Tests/Helper/SymfonyQuestionHelperTest.md) | |
| [`TableStyleTest`](./classes/Symfony/Component/Console/Tests/Helper/TableStyleTest.md) | |
| [`TableTest`](./classes/Symfony/Component/Console/Tests/Helper/TableTest.md) | |

### \Symfony\Component\Console\Tests\Input

#### Classes

| Class | Description |
|-------|-------------|
| [`ArgvInputTest`](./classes/Symfony/Component/Console/Tests/Input/ArgvInputTest.md) | |
| [`ArrayInputTest`](./classes/Symfony/Component/Console/Tests/Input/ArrayInputTest.md) | |
| [`InputArgumentTest`](./classes/Symfony/Component/Console/Tests/Input/InputArgumentTest.md) | |
| [`InputDefinitionTest`](./classes/Symfony/Component/Console/Tests/Input/InputDefinitionTest.md) | |
| [`InputOptionTest`](./classes/Symfony/Component/Console/Tests/Input/InputOptionTest.md) | |
| [`InputTest`](./classes/Symfony/Component/Console/Tests/Input/InputTest.md) | |
| [`StringInputTest`](./classes/Symfony/Component/Console/Tests/Input/StringInputTest.md) | |

### \Symfony\Component\Console\Tests\Logger

#### Classes

| Class | Description |
|-------|-------------|
| [`ConsoleLoggerTest`](./classes/Symfony/Component/Console/Tests/Logger/ConsoleLoggerTest.md) | Console logger test.|
| [`DummyTest`](./classes/Symfony/Component/Console/Tests/Logger/DummyTest.md) | |

### \Symfony\Component\Console\Tests\Output

#### Classes

| Class | Description |
|-------|-------------|
| [`ConsoleOutputTest`](./classes/Symfony/Component/Console/Tests/Output/ConsoleOutputTest.md) | |
| [`NullOutputTest`](./classes/Symfony/Component/Console/Tests/Output/NullOutputTest.md) | |
| [`OutputTest`](./classes/Symfony/Component/Console/Tests/Output/OutputTest.md) | |
| [`StreamOutputTest`](./classes/Symfony/Component/Console/Tests/Output/StreamOutputTest.md) | |
| [`TestOutput`](./classes/Symfony/Component/Console/Tests/Output/TestOutput.md) | Base class for output classes.|

### \Symfony\Component\Console\Tests\Style

#### Classes

| Class | Description |
|-------|-------------|
| [`SymfonyStyleTest`](./classes/Symfony/Component/Console/Tests/Style/SymfonyStyleTest.md) | |
| [`SymfonyStyleWithForcedLineLength`](./classes/Symfony/Component/Console/Tests/Style/SymfonyStyleWithForcedLineLength.md) | Use this class in tests to force the line length<br />and ensure a consistent output for expectations.|

### \Symfony\Component\Console\Tests\Tester

#### Classes

| Class | Description |
|-------|-------------|
| [`ApplicationTesterTest`](./classes/Symfony/Component/Console/Tests/Tester/ApplicationTesterTest.md) | |
| [`CommandTesterTest`](./classes/Symfony/Component/Console/Tests/Tester/CommandTesterTest.md) | |

### \Symfony\Component\Debug

#### Classes

| Class | Description |
|-------|-------------|
| [`BufferingLogger`](./classes/Symfony/Component/Debug/BufferingLogger.md) | A buffering logger that stacks logs for later.|
| [`Debug`](./classes/Symfony/Component/Debug/Debug.md) | Registers all the debug tools.|
| [`DebugClassLoader`](./classes/Symfony/Component/Debug/DebugClassLoader.md) | Autoloader checking if the class is really defined in the file found.|
| [`ErrorHandler`](./classes/Symfony/Component/Debug/ErrorHandler.md) | A generic ErrorHandler for the PHP engine.|
| [`ExceptionHandler`](./classes/Symfony/Component/Debug/ExceptionHandler.md) | ExceptionHandler converts an exception to a Response object.|

### \Symfony\Component\Debug\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassNotFoundException`](./classes/Symfony/Component/Debug/Exception/ClassNotFoundException.md) | Class (or Trait or Interface) Not Found Exception.|
| [`ContextErrorException`](./classes/Symfony/Component/Debug/Exception/ContextErrorException.md) | Error Exception with Variable Context.|
| [`FatalErrorException`](./classes/Symfony/Component/Debug/Exception/FatalErrorException.md) | Fatal Error Exception.|
| [`FatalThrowableError`](./classes/Symfony/Component/Debug/Exception/FatalThrowableError.md) | Fatal Throwable Error.|
| [`FlattenException`](./classes/Symfony/Component/Debug/Exception/FlattenException.md) | FlattenException wraps a PHP Exception to be able to serialize it.|
| [`OutOfMemoryException`](./classes/Symfony/Component/Debug/Exception/OutOfMemoryException.md) | Out of memory exception.|
| [`UndefinedFunctionException`](./classes/Symfony/Component/Debug/Exception/UndefinedFunctionException.md) | Undefined Function Exception.|
| [`UndefinedMethodException`](./classes/Symfony/Component/Debug/Exception/UndefinedMethodException.md) | Undefined Method Exception.|

### \Symfony\Component\Debug\FatalErrorHandler

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassNotFoundFatalErrorHandler`](./classes/Symfony/Component/Debug/FatalErrorHandler/ClassNotFoundFatalErrorHandler.md) | ErrorHandler for classes that do not exist.|
| [`UndefinedFunctionFatalErrorHandler`](./classes/Symfony/Component/Debug/FatalErrorHandler/UndefinedFunctionFatalErrorHandler.md) | ErrorHandler for undefined functions.|
| [`UndefinedMethodFatalErrorHandler`](./classes/Symfony/Component/Debug/FatalErrorHandler/UndefinedMethodFatalErrorHandler.md) | ErrorHandler for undefined methods.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FatalErrorHandlerInterface`](./classes/Symfony/Component/Debug/FatalErrorHandler/FatalErrorHandlerInterface.md) | Attempts to convert fatal errors to exceptions.|

### \Symfony\Component\Debug\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassLoader`](./classes/Symfony/Component/Debug/Tests/ClassLoader.md) | |
| [`DebugClassLoaderTest`](./classes/Symfony/Component/Debug/Tests/DebugClassLoaderTest.md) | |
| [`ErrorHandlerTest`](./classes/Symfony/Component/Debug/Tests/ErrorHandlerTest.md) | ErrorHandlerTest.|
| [`ExceptionHandlerTest`](./classes/Symfony/Component/Debug/Tests/ExceptionHandlerTest.md) | |
| [`MockExceptionHandler`](./classes/Symfony/Component/Debug/Tests/MockExceptionHandler.md) | ExceptionHandler converts an exception to a Response object.|

### \Symfony\Component\Debug\Tests\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FlattenExceptionTest`](./classes/Symfony/Component/Debug/Tests/Exception/FlattenExceptionTest.md) | |

### \Symfony\Component\Debug\Tests\FatalErrorHandler

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassNotFoundFatalErrorHandlerTest`](./classes/Symfony/Component/Debug/Tests/FatalErrorHandler/ClassNotFoundFatalErrorHandlerTest.md) | |
| [`UndefinedFunctionFatalErrorHandlerTest`](./classes/Symfony/Component/Debug/Tests/FatalErrorHandler/UndefinedFunctionFatalErrorHandlerTest.md) | |
| [`UndefinedMethodFatalErrorHandlerTest`](./classes/Symfony/Component/Debug/Tests/FatalErrorHandler/UndefinedMethodFatalErrorHandlerTest.md) | |

### \Symfony\Component\Debug\Tests\Fixtures

#### Classes

| Class | Description |
|-------|-------------|
| [`CaseMismatch`](./classes/Symfony/Component/Debug/Tests/Fixtures/CaseMismatch.md) | |
| [`DeprecatedClass`](./classes/Symfony/Component/Debug/Tests/Fixtures/DeprecatedClass.md) | |
| [`NotPSR0`](./classes/Symfony/Component/Debug/Tests/Fixtures/NotPSR0.md) | |
| [`NotPSR0bis`](./classes/Symfony/Component/Debug/Tests/Fixtures/NotPSR0bis.md) | |
| [`PSR4CaseMismatch`](./classes/Symfony/Component/Debug/Tests/Fixtures/PSR4CaseMismatch.md) | |
| [`ToStringThrower`](./classes/Symfony/Component/Debug/Tests/Fixtures/ToStringThrower.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`DeprecatedInterface`](./classes/Symfony/Component/Debug/Tests/Fixtures/DeprecatedInterface.md) | |
| [`NonDeprecatedInterface`](./classes/Symfony/Component/Debug/Tests/Fixtures/NonDeprecatedInterface.md) | |

### \Symfony\Component\Debug\Tests\Fixtures2

#### Classes

| Class | Description |
|-------|-------------|
| [`RequiredTwice`](./classes/Symfony/Component/Debug/Tests/Fixtures2/RequiredTwice.md) | |

### \Symfony\Component\EventDispatcher

#### Classes

| Class | Description |
|-------|-------------|
| [`ContainerAwareEventDispatcher`](./classes/Symfony/Component/EventDispatcher/ContainerAwareEventDispatcher.md) | Lazily loads listeners and subscribers from the dependency injection<br />container.|
| [`Event`](./classes/Symfony/Component/EventDispatcher/Event.md) | Event is the base class for classes containing event data.|
| [`EventDispatcher`](./classes/Symfony/Component/EventDispatcher/EventDispatcher.md) | The EventDispatcherInterface is the central point of Symfony&#039;s event listener system.|
| [`GenericEvent`](./classes/Symfony/Component/EventDispatcher/GenericEvent.md) | Event encapsulation class.|
| [`ImmutableEventDispatcher`](./classes/Symfony/Component/EventDispatcher/ImmutableEventDispatcher.md) | A read-only proxy for an event dispatcher.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`EventDispatcherInterface`](./classes/Symfony/Component/EventDispatcher/EventDispatcherInterface.md) | The EventDispatcherInterface is the central point of Symfony&#039;s event listener system.|
| [`EventSubscriberInterface`](./classes/Symfony/Component/EventDispatcher/EventSubscriberInterface.md) | An EventSubscriber knows himself what events he is interested in.|

### \Symfony\Component\EventDispatcher\Debug

#### Classes

| Class | Description |
|-------|-------------|
| [`TraceableEventDispatcher`](./classes/Symfony/Component/EventDispatcher/Debug/TraceableEventDispatcher.md) | Collects some data about event listeners.|
| [`WrappedListener`](./classes/Symfony/Component/EventDispatcher/Debug/WrappedListener.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`TraceableEventDispatcherInterface`](./classes/Symfony/Component/EventDispatcher/Debug/TraceableEventDispatcherInterface.md) | The EventDispatcherInterface is the central point of Symfony&#039;s event listener system.|

### \Symfony\Component\EventDispatcher\DependencyInjection

#### Classes

| Class | Description |
|-------|-------------|
| [`RegisterListenersPass`](./classes/Symfony/Component/EventDispatcher/DependencyInjection/RegisterListenersPass.md) | Compiler pass to register tagged services for an event dispatcher.|

### \Symfony\Component\EventDispatcher\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractEventDispatcherTest`](./classes/Symfony/Component/EventDispatcher/Tests/AbstractEventDispatcherTest.md) | |
| [`CallableClass`](./classes/Symfony/Component/EventDispatcher/Tests/CallableClass.md) | |
| [`ContainerAwareEventDispatcherTest`](./classes/Symfony/Component/EventDispatcher/Tests/ContainerAwareEventDispatcherTest.md) | |
| [`EventDispatcherTest`](./classes/Symfony/Component/EventDispatcher/Tests/EventDispatcherTest.md) | |
| [`EventTest`](./classes/Symfony/Component/EventDispatcher/Tests/EventTest.md) | Test class for Event.|
| [`GenericEventTest`](./classes/Symfony/Component/EventDispatcher/Tests/GenericEventTest.md) | Test class for Event.|
| [`ImmutableEventDispatcherTest`](./classes/Symfony/Component/EventDispatcher/Tests/ImmutableEventDispatcherTest.md) | |
| [`Service`](./classes/Symfony/Component/EventDispatcher/Tests/Service.md) | |
| [`SubscriberService`](./classes/Symfony/Component/EventDispatcher/Tests/SubscriberService.md) | |
| [`TestEventListener`](./classes/Symfony/Component/EventDispatcher/Tests/TestEventListener.md) | |
| [`TestEventSubscriber`](./classes/Symfony/Component/EventDispatcher/Tests/TestEventSubscriber.md) | |
| [`TestEventSubscriberWithMultipleListeners`](./classes/Symfony/Component/EventDispatcher/Tests/TestEventSubscriberWithMultipleListeners.md) | |
| [`TestEventSubscriberWithPriorities`](./classes/Symfony/Component/EventDispatcher/Tests/TestEventSubscriberWithPriorities.md) | |
| [`TestWithDispatcher`](./classes/Symfony/Component/EventDispatcher/Tests/TestWithDispatcher.md) | |

### \Symfony\Component\EventDispatcher\Tests\Debug

#### Classes

| Class | Description |
|-------|-------------|
| [`EventSubscriber`](./classes/Symfony/Component/EventDispatcher/Tests/Debug/EventSubscriber.md) | |
| [`TraceableEventDispatcherTest`](./classes/Symfony/Component/EventDispatcher/Tests/Debug/TraceableEventDispatcherTest.md) | |

### \Symfony\Component\EventDispatcher\Tests\DependencyInjection

#### Classes

| Class | Description |
|-------|-------------|
| [`RegisterListenersPassTest`](./classes/Symfony/Component/EventDispatcher/Tests/DependencyInjection/RegisterListenersPassTest.md) | |
| [`SubscriberService`](./classes/Symfony/Component/EventDispatcher/Tests/DependencyInjection/SubscriberService.md) | |

### \Symfony\Component\Filesystem

#### Classes

| Class | Description |
|-------|-------------|
| [`Filesystem`](./classes/Symfony/Component/Filesystem/Filesystem.md) | Provides basic utility to manipulate the file system.|
| [`LockHandler`](./classes/Symfony/Component/Filesystem/LockHandler.md) | LockHandler class provides a simple abstraction to lock anything by means of<br />a file lock.|

### \Symfony\Component\Filesystem\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FileNotFoundException`](./classes/Symfony/Component/Filesystem/Exception/FileNotFoundException.md) | Exception class thrown when a file couldn&#039;t be found.|
| [`IOException`](./classes/Symfony/Component/Filesystem/Exception/IOException.md) | Exception class thrown when a filesystem operation failure happens.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Symfony/Component/Filesystem/Exception/ExceptionInterface.md) | Exception interface for all exceptions thrown by the component.|
| [`IOExceptionInterface`](./classes/Symfony/Component/Filesystem/Exception/IOExceptionInterface.md) | IOException interface for file and input/output stream related exceptions thrown by the component.|

### \Symfony\Component\Filesystem\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ExceptionTest`](./classes/Symfony/Component/Filesystem/Tests/ExceptionTest.md) | Test class for Filesystem.|
| [`FilesystemTest`](./classes/Symfony/Component/Filesystem/Tests/FilesystemTest.md) | Test class for Filesystem.|
| [`FilesystemTestCase`](./classes/Symfony/Component/Filesystem/Tests/FilesystemTestCase.md) | |
| [`LockHandlerTest`](./classes/Symfony/Component/Filesystem/Tests/LockHandlerTest.md) | |

### \Symfony\Component\Filesystem\Tests\Fixtures\MockStream

#### Classes

| Class | Description |
|-------|-------------|
| [`MockStream`](./classes/Symfony/Component/Filesystem/Tests/Fixtures/MockStream/MockStream.md) | Mock stream class to be used with stream_wrapper_register.|

### \Symfony\Component\Finder

#### Classes

| Class | Description |
|-------|-------------|
| [`Finder`](./classes/Symfony/Component/Finder/Finder.md) | Finder allows to build rules to find files and directories.|
| [`Glob`](./classes/Symfony/Component/Finder/Glob.md) | Glob matches globbing patterns against text.|
| [`SplFileInfo`](./classes/Symfony/Component/Finder/SplFileInfo.md) | Extends \SplFileInfo to support relative paths.|

### \Symfony\Component\Finder\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractAdapter`](./classes/Symfony/Component/Finder/Adapter/AbstractAdapter.md) | Interface for finder engine implementations.|
| [`AbstractFindAdapter`](./classes/Symfony/Component/Finder/Adapter/AbstractFindAdapter.md) | Shell engine implementation using GNU find command.|
| [`BsdFindAdapter`](./classes/Symfony/Component/Finder/Adapter/BsdFindAdapter.md) | Shell engine implementation using BSD find command.|
| [`GnuFindAdapter`](./classes/Symfony/Component/Finder/Adapter/GnuFindAdapter.md) | Shell engine implementation using GNU find command.|
| [`PhpAdapter`](./classes/Symfony/Component/Finder/Adapter/PhpAdapter.md) | PHP finder engine implementation.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AdapterInterface`](./classes/Symfony/Component/Finder/Adapter/AdapterInterface.md) | |

### \Symfony\Component\Finder\Comparator

#### Classes

| Class | Description |
|-------|-------------|
| [`Comparator`](./classes/Symfony/Component/Finder/Comparator/Comparator.md) | Comparator.|
| [`DateComparator`](./classes/Symfony/Component/Finder/Comparator/DateComparator.md) | DateCompare compiles date comparisons.|
| [`NumberComparator`](./classes/Symfony/Component/Finder/Comparator/NumberComparator.md) | NumberComparator compiles a simple comparison to an anonymous<br />subroutine, which you can call with a value to be tested again.|

### \Symfony\Component\Finder\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`AccessDeniedException`](./classes/Symfony/Component/Finder/Exception/AccessDeniedException.md) | |
| [`AdapterFailureException`](./classes/Symfony/Component/Finder/Exception/AdapterFailureException.md) | Base exception for all adapter failures.|
| [`OperationNotPermitedException`](./classes/Symfony/Component/Finder/Exception/OperationNotPermitedException.md) | Base exception for all adapter failures.|
| [`ShellCommandFailureException`](./classes/Symfony/Component/Finder/Exception/ShellCommandFailureException.md) | Base exception for all adapter failures.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Symfony/Component/Finder/Exception/ExceptionInterface.md) | |

### \Symfony\Component\Finder\Expression

#### Classes

| Class | Description |
|-------|-------------|
| [`Expression`](./classes/Symfony/Component/Finder/Expression/Expression.md) | |
| [`Glob`](./classes/Symfony/Component/Finder/Expression/Glob.md) | |
| [`Regex`](./classes/Symfony/Component/Finder/Expression/Regex.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ValueInterface`](./classes/Symfony/Component/Finder/Expression/ValueInterface.md) | |

### \Symfony\Component\Finder\Iterator

#### Classes

| Class | Description |
|-------|-------------|
| [`CustomFilterIterator`](./classes/Symfony/Component/Finder/Iterator/CustomFilterIterator.md) | CustomFilterIterator filters files by applying anonymous functions.|
| [`DateRangeFilterIterator`](./classes/Symfony/Component/Finder/Iterator/DateRangeFilterIterator.md) | DateRangeFilterIterator filters out files that are not in the given date range (last modified dates).|
| [`DepthRangeFilterIterator`](./classes/Symfony/Component/Finder/Iterator/DepthRangeFilterIterator.md) | DepthRangeFilterIterator limits the directory depth.|
| [`ExcludeDirectoryFilterIterator`](./classes/Symfony/Component/Finder/Iterator/ExcludeDirectoryFilterIterator.md) | ExcludeDirectoryFilterIterator filters out directories.|
| [`FilePathsIterator`](./classes/Symfony/Component/Finder/Iterator/FilePathsIterator.md) | Iterate over shell command result.|
| [`FileTypeFilterIterator`](./classes/Symfony/Component/Finder/Iterator/FileTypeFilterIterator.md) | FileTypeFilterIterator only keeps files, directories, or both.|
| [`FilecontentFilterIterator`](./classes/Symfony/Component/Finder/Iterator/FilecontentFilterIterator.md) | FilecontentFilterIterator filters files by their contents using patterns (regexps or strings).|
| [`FilenameFilterIterator`](./classes/Symfony/Component/Finder/Iterator/FilenameFilterIterator.md) | FilenameFilterIterator filters files by patterns (a regexp, a glob, or a string).|
| [`FilterIterator`](./classes/Symfony/Component/Finder/Iterator/FilterIterator.md) | This iterator just overrides the rewind method in order to correct a PHP bug,<br />which existed before version 5.5.23/5.6.7.|
| [`MultiplePcreFilterIterator`](./classes/Symfony/Component/Finder/Iterator/MultiplePcreFilterIterator.md) | MultiplePcreFilterIterator filters files using patterns (regexps, globs or strings).|
| [`PathFilterIterator`](./classes/Symfony/Component/Finder/Iterator/PathFilterIterator.md) | PathFilterIterator filters files by path patterns (e.g. some/special/dir).|
| [`RecursiveDirectoryIterator`](./classes/Symfony/Component/Finder/Iterator/RecursiveDirectoryIterator.md) | Extends the \RecursiveDirectoryIterator to support relative paths.|
| [`SizeRangeFilterIterator`](./classes/Symfony/Component/Finder/Iterator/SizeRangeFilterIterator.md) | SizeRangeFilterIterator filters out files that are not in the given size range.|
| [`SortableIterator`](./classes/Symfony/Component/Finder/Iterator/SortableIterator.md) | SortableIterator applies a sort on a given Iterator.|

### \Symfony\Component\Finder\Shell

#### Classes

| Class | Description |
|-------|-------------|
| [`Command`](./classes/Symfony/Component/Finder/Shell/Command.md) | |
| [`Shell`](./classes/Symfony/Component/Finder/Shell/Shell.md) | |

### \Symfony\Component\Finder\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`BsdFinderTest`](./classes/Symfony/Component/Finder/Tests/BsdFinderTest.md) | |
| [`FinderTest`](./classes/Symfony/Component/Finder/Tests/FinderTest.md) | |
| [`GlobTest`](./classes/Symfony/Component/Finder/Tests/GlobTest.md) | |
| [`GnuFinderTest`](./classes/Symfony/Component/Finder/Tests/GnuFinderTest.md) | |
| [`PhpFinderTest`](./classes/Symfony/Component/Finder/Tests/PhpFinderTest.md) | |

### \Symfony\Component\Finder\Tests\Comparator

#### Classes

| Class | Description |
|-------|-------------|
| [`ComparatorTest`](./classes/Symfony/Component/Finder/Tests/Comparator/ComparatorTest.md) | |
| [`DateComparatorTest`](./classes/Symfony/Component/Finder/Tests/Comparator/DateComparatorTest.md) | |
| [`NumberComparatorTest`](./classes/Symfony/Component/Finder/Tests/Comparator/NumberComparatorTest.md) | |

### \Symfony\Component\Finder\Tests\Expression

#### Classes

| Class | Description |
|-------|-------------|
| [`ExpressionTest`](./classes/Symfony/Component/Finder/Tests/Expression/ExpressionTest.md) | |
| [`GlobTest`](./classes/Symfony/Component/Finder/Tests/Expression/GlobTest.md) | |
| [`RegexTest`](./classes/Symfony/Component/Finder/Tests/Expression/RegexTest.md) | |

### \Symfony\Component\Finder\Tests\FakeAdapter

#### Classes

| Class | Description |
|-------|-------------|
| [`DummyAdapter`](./classes/Symfony/Component/Finder/Tests/FakeAdapter/DummyAdapter.md) | Interface for finder engine implementations.|
| [`FailingAdapter`](./classes/Symfony/Component/Finder/Tests/FakeAdapter/FailingAdapter.md) | Interface for finder engine implementations.|
| [`NamedAdapter`](./classes/Symfony/Component/Finder/Tests/FakeAdapter/NamedAdapter.md) | Interface for finder engine implementations.|
| [`UnsupportedAdapter`](./classes/Symfony/Component/Finder/Tests/FakeAdapter/UnsupportedAdapter.md) | Interface for finder engine implementations.|

### \Symfony\Component\Finder\Tests\Iterator

#### Classes

| Class | Description |
|-------|-------------|
| [`CustomFilterIteratorTest`](./classes/Symfony/Component/Finder/Tests/Iterator/CustomFilterIteratorTest.md) | |
| [`DateRangeFilterIteratorTest`](./classes/Symfony/Component/Finder/Tests/Iterator/DateRangeFilterIteratorTest.md) | |
| [`DepthRangeFilterIteratorTest`](./classes/Symfony/Component/Finder/Tests/Iterator/DepthRangeFilterIteratorTest.md) | |
| [`ExcludeDirectoryFilterIteratorTest`](./classes/Symfony/Component/Finder/Tests/Iterator/ExcludeDirectoryFilterIteratorTest.md) | |
| [`FilePathsIteratorTest`](./classes/Symfony/Component/Finder/Tests/Iterator/FilePathsIteratorTest.md) | |
| [`FileTypeFilterIteratorTest`](./classes/Symfony/Component/Finder/Tests/Iterator/FileTypeFilterIteratorTest.md) | |
| [`FilecontentFilterIteratorTest`](./classes/Symfony/Component/Finder/Tests/Iterator/FilecontentFilterIteratorTest.md) | |
| [`FilenameFilterIteratorTest`](./classes/Symfony/Component/Finder/Tests/Iterator/FilenameFilterIteratorTest.md) | |
| [`FilterIteratorTest`](./classes/Symfony/Component/Finder/Tests/Iterator/FilterIteratorTest.md) | |
| [`InnerNameIterator`](./classes/Symfony/Component/Finder/Tests/Iterator/InnerNameIterator.md) | |
| [`InnerSizeIterator`](./classes/Symfony/Component/Finder/Tests/Iterator/InnerSizeIterator.md) | |
| [`InnerTypeIterator`](./classes/Symfony/Component/Finder/Tests/Iterator/InnerTypeIterator.md) | |
| [`Iterator`](./classes/Symfony/Component/Finder/Tests/Iterator/Iterator.md) | |
| [`IteratorTestCase`](./classes/Symfony/Component/Finder/Tests/Iterator/IteratorTestCase.md) | |
| [`MockFileListIterator`](./classes/Symfony/Component/Finder/Tests/Iterator/MockFileListIterator.md) | |
| [`MockSplFileInfo`](./classes/Symfony/Component/Finder/Tests/Iterator/MockSplFileInfo.md) | |
| [`MultiplePcreFilterIteratorTest`](./classes/Symfony/Component/Finder/Tests/Iterator/MultiplePcreFilterIteratorTest.md) | |
| [`PathFilterIteratorTest`](./classes/Symfony/Component/Finder/Tests/Iterator/PathFilterIteratorTest.md) | |
| [`RealIteratorTestCase`](./classes/Symfony/Component/Finder/Tests/Iterator/RealIteratorTestCase.md) | |
| [`RecursiveDirectoryIteratorTest`](./classes/Symfony/Component/Finder/Tests/Iterator/RecursiveDirectoryIteratorTest.md) | |
| [`SizeRangeFilterIteratorTest`](./classes/Symfony/Component/Finder/Tests/Iterator/SizeRangeFilterIteratorTest.md) | |
| [`SortableIteratorTest`](./classes/Symfony/Component/Finder/Tests/Iterator/SortableIteratorTest.md) | |
| [`TestMultiplePcreFilterIterator`](./classes/Symfony/Component/Finder/Tests/Iterator/TestMultiplePcreFilterIterator.md) | MultiplePcreFilterIterator filters files using patterns (regexps, globs or strings).|

### \Symfony\Component\Finder\Tests\Shell

#### Classes

| Class | Description |
|-------|-------------|
| [`CommandTest`](./classes/Symfony/Component/Finder/Tests/Shell/CommandTest.md) | |

### \Symfony\Component\Process

#### Classes

| Class | Description |
|-------|-------------|
| [`ExecutableFinder`](./classes/Symfony/Component/Process/ExecutableFinder.md) | Generic executable finder.|
| [`PhpExecutableFinder`](./classes/Symfony/Component/Process/PhpExecutableFinder.md) | An executable finder specifically designed for the PHP executable.|
| [`PhpProcess`](./classes/Symfony/Component/Process/PhpProcess.md) | PhpProcess runs a PHP script in an independent process.|
| [`Process`](./classes/Symfony/Component/Process/Process.md) | Process is a thin wrapper around proc_* functions to easily<br />start independent PHP processes.|
| [`ProcessBuilder`](./classes/Symfony/Component/Process/ProcessBuilder.md) | |
| [`ProcessUtils`](./classes/Symfony/Component/Process/ProcessUtils.md) | ProcessUtils is a bunch of utility methods.|

### \Symfony\Component\Process\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`InvalidArgumentException`](./classes/Symfony/Component/Process/Exception/InvalidArgumentException.md) | InvalidArgumentException for the Process Component.|
| [`LogicException`](./classes/Symfony/Component/Process/Exception/LogicException.md) | LogicException for the Process Component.|
| [`ProcessFailedException`](./classes/Symfony/Component/Process/Exception/ProcessFailedException.md) | Exception for failed processes.|
| [`ProcessTimedOutException`](./classes/Symfony/Component/Process/Exception/ProcessTimedOutException.md) | Exception that is thrown when a process times out.|
| [`RuntimeException`](./classes/Symfony/Component/Process/Exception/RuntimeException.md) | RuntimeException for the Process Component.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Symfony/Component/Process/Exception/ExceptionInterface.md) | Marker Interface for the Process Component.|

### \Symfony\Component\Process\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ExecutableFinderTest`](./classes/Symfony/Component/Process/Tests/ExecutableFinderTest.md) | |
| [`NonStringifiable`](./classes/Symfony/Component/Process/Tests/NonStringifiable.md) | |
| [`PhpExecutableFinderTest`](./classes/Symfony/Component/Process/Tests/PhpExecutableFinderTest.md) | |
| [`PhpProcessTest`](./classes/Symfony/Component/Process/Tests/PhpProcessTest.md) | |
| [`ProcessBuilderTest`](./classes/Symfony/Component/Process/Tests/ProcessBuilderTest.md) | |
| [`ProcessFailedExceptionTest`](./classes/Symfony/Component/Process/Tests/ProcessFailedExceptionTest.md) | |
| [`ProcessTest`](./classes/Symfony/Component/Process/Tests/ProcessTest.md) | |
| [`ProcessUtilsTest`](./classes/Symfony/Component/Process/Tests/ProcessUtilsTest.md) | |
| [`Stringifiable`](./classes/Symfony/Component/Process/Tests/Stringifiable.md) | |

### \Symfony\Component\Stopwatch

#### Classes

| Class | Description |
|-------|-------------|
| [`Section`](./classes/Symfony/Component/Stopwatch/Section.md) | Stopwatch section.|
| [`Stopwatch`](./classes/Symfony/Component/Stopwatch/Stopwatch.md) | Stopwatch provides a way to profile code.|
| [`StopwatchEvent`](./classes/Symfony/Component/Stopwatch/StopwatchEvent.md) | Represents an Event managed by Stopwatch.|
| [`StopwatchPeriod`](./classes/Symfony/Component/Stopwatch/StopwatchPeriod.md) | Represents an Period for an Event.|

### \Symfony\Component\Stopwatch\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`StopwatchEventTest`](./classes/Symfony/Component/Stopwatch/Tests/StopwatchEventTest.md) | StopwatchEventTest.|
| [`StopwatchTest`](./classes/Symfony/Component/Stopwatch/Tests/StopwatchTest.md) | StopwatchTest.|

### \Symfony\Component\Translation

#### Classes

| Class | Description |
|-------|-------------|
| [`DataCollectorTranslator`](./classes/Symfony/Component/Translation/DataCollectorTranslator.md) | |
| [`IdentityTranslator`](./classes/Symfony/Component/Translation/IdentityTranslator.md) | IdentityTranslator does not translate anything.|
| [`Interval`](./classes/Symfony/Component/Translation/Interval.md) | Tests if a given number belongs to a given math interval.|
| [`LoggingTranslator`](./classes/Symfony/Component/Translation/LoggingTranslator.md) | |
| [`MessageCatalogue`](./classes/Symfony/Component/Translation/MessageCatalogue.md) | MessageCatalogue.|
| [`MessageSelector`](./classes/Symfony/Component/Translation/MessageSelector.md) | MessageSelector.|
| [`PluralizationRules`](./classes/Symfony/Component/Translation/PluralizationRules.md) | Returns the plural rules for a given locale.|
| [`Translator`](./classes/Symfony/Component/Translation/Translator.md) | Translator.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`MessageCatalogueInterface`](./classes/Symfony/Component/Translation/MessageCatalogueInterface.md) | MessageCatalogueInterface.|
| [`MetadataAwareInterface`](./classes/Symfony/Component/Translation/MetadataAwareInterface.md) | MetadataAwareInterface.|
| [`TranslatorBagInterface`](./classes/Symfony/Component/Translation/TranslatorBagInterface.md) | TranslatorBagInterface.|
| [`TranslatorInterface`](./classes/Symfony/Component/Translation/TranslatorInterface.md) | TranslatorInterface.|

### \Symfony\Component\Translation\Catalogue

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractOperation`](./classes/Symfony/Component/Translation/Catalogue/AbstractOperation.md) | Base catalogues binary operation class.|
| [`MergeOperation`](./classes/Symfony/Component/Translation/Catalogue/MergeOperation.md) | Merge operation between two catalogues as follows:<br />all = source ∪ target = {x: x ∈ source ∨ x ∈ target}<br />new = all ∖ source = {x: x ∈ target ∧ x ∉ source}<br />obsolete = source ∖ all = {x: x ∈ source ∧ x ∉ source ∧ x ∉ target} = ∅<br />Basically, the result contains messages from both catalogues.|
| [`TargetOperation`](./classes/Symfony/Component/Translation/Catalogue/TargetOperation.md) | Target operation between two catalogues:<br />intersection = source ∩ target = {x: x ∈ source ∧ x ∈ target}<br />all = intersection ∪ (target ∖ intersection) = target<br />new = all ∖ source = {x: x ∈ target ∧ x ∉ source}<br />obsolete = source ∖ all = source ∖ target = {x: x ∈ source ∧ x ∉ target}<br />Basically, the result contains messages from the target catalogue.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`OperationInterface`](./classes/Symfony/Component/Translation/Catalogue/OperationInterface.md) | Represents an operation on catalogue(s).|

### \Symfony\Component\Translation\DataCollector

#### Classes

| Class | Description |
|-------|-------------|
| [`TranslationDataCollector`](./classes/Symfony/Component/Translation/DataCollector/TranslationDataCollector.md) | |

### \Symfony\Component\Translation\Dumper

#### Classes

| Class | Description |
|-------|-------------|
| [`CsvFileDumper`](./classes/Symfony/Component/Translation/Dumper/CsvFileDumper.md) | CsvFileDumper generates a csv formatted string representation of a message catalogue.|
| [`FileDumper`](./classes/Symfony/Component/Translation/Dumper/FileDumper.md) | FileDumper is an implementation of DumperInterface that dump a message catalogue to file(s).|
| [`IcuResFileDumper`](./classes/Symfony/Component/Translation/Dumper/IcuResFileDumper.md) | IcuResDumper generates an ICU ResourceBundle formatted string representation of a message catalogue.|
| [`IniFileDumper`](./classes/Symfony/Component/Translation/Dumper/IniFileDumper.md) | IniFileDumper generates an ini formatted string representation of a message catalogue.|
| [`JsonFileDumper`](./classes/Symfony/Component/Translation/Dumper/JsonFileDumper.md) | JsonFileDumper generates an json formatted string representation of a message catalogue.|
| [`MoFileDumper`](./classes/Symfony/Component/Translation/Dumper/MoFileDumper.md) | MoFileDumper generates a gettext formatted string representation of a message catalogue.|
| [`PhpFileDumper`](./classes/Symfony/Component/Translation/Dumper/PhpFileDumper.md) | PhpFileDumper generates PHP files from a message catalogue.|
| [`PoFileDumper`](./classes/Symfony/Component/Translation/Dumper/PoFileDumper.md) | PoFileDumper generates a gettext formatted string representation of a message catalogue.|
| [`QtFileDumper`](./classes/Symfony/Component/Translation/Dumper/QtFileDumper.md) | QtFileDumper generates ts files from a message catalogue.|
| [`XliffFileDumper`](./classes/Symfony/Component/Translation/Dumper/XliffFileDumper.md) | XliffFileDumper generates xliff files from a message catalogue.|
| [`YamlFileDumper`](./classes/Symfony/Component/Translation/Dumper/YamlFileDumper.md) | YamlFileDumper generates yaml files from a message catalogue.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`DumperInterface`](./classes/Symfony/Component/Translation/Dumper/DumperInterface.md) | DumperInterface is the interface implemented by all translation dumpers.|

### \Symfony\Component\Translation\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`InvalidResourceException`](./classes/Symfony/Component/Translation/Exception/InvalidResourceException.md) | Thrown when a resource cannot be loaded.|
| [`NotFoundResourceException`](./classes/Symfony/Component/Translation/Exception/NotFoundResourceException.md) | Thrown when a resource does not exist.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Symfony/Component/Translation/Exception/ExceptionInterface.md) | Exception interface for all exceptions thrown by the component.|

### \Symfony\Component\Translation\Extractor

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractFileExtractor`](./classes/Symfony/Component/Translation/Extractor/AbstractFileExtractor.md) | Base class used by classes that extract translation messages from files.|
| [`ChainExtractor`](./classes/Symfony/Component/Translation/Extractor/ChainExtractor.md) | ChainExtractor extracts translation messages from template files.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExtractorInterface`](./classes/Symfony/Component/Translation/Extractor/ExtractorInterface.md) | Extracts translation messages from a directory or files to the catalogue.|

### \Symfony\Component\Translation\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayLoader`](./classes/Symfony/Component/Translation/Loader/ArrayLoader.md) | ArrayLoader loads translations from a PHP array.|
| [`CsvFileLoader`](./classes/Symfony/Component/Translation/Loader/CsvFileLoader.md) | CsvFileLoader loads translations from CSV files.|
| [`FileLoader`](./classes/Symfony/Component/Translation/Loader/FileLoader.md) | ArrayLoader loads translations from a PHP array.|
| [`IcuDatFileLoader`](./classes/Symfony/Component/Translation/Loader/IcuDatFileLoader.md) | IcuResFileLoader loads translations from a resource bundle.|
| [`IcuResFileLoader`](./classes/Symfony/Component/Translation/Loader/IcuResFileLoader.md) | IcuResFileLoader loads translations from a resource bundle.|
| [`IniFileLoader`](./classes/Symfony/Component/Translation/Loader/IniFileLoader.md) | IniFileLoader loads translations from an ini file.|
| [`JsonFileLoader`](./classes/Symfony/Component/Translation/Loader/JsonFileLoader.md) | JsonFileLoader loads translations from an json file.|
| [`MoFileLoader`](./classes/Symfony/Component/Translation/Loader/MoFileLoader.md) | ArrayLoader loads translations from a PHP array.|
| [`PhpFileLoader`](./classes/Symfony/Component/Translation/Loader/PhpFileLoader.md) | PhpFileLoader loads translations from PHP files returning an array of translations.|
| [`PoFileLoader`](./classes/Symfony/Component/Translation/Loader/PoFileLoader.md) | ArrayLoader loads translations from a PHP array.|
| [`QtFileLoader`](./classes/Symfony/Component/Translation/Loader/QtFileLoader.md) | QtFileLoader loads translations from QT Translations XML files.|
| [`XliffFileLoader`](./classes/Symfony/Component/Translation/Loader/XliffFileLoader.md) | XliffFileLoader loads translations from XLIFF files.|
| [`YamlFileLoader`](./classes/Symfony/Component/Translation/Loader/YamlFileLoader.md) | YamlFileLoader loads translations from Yaml files.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`LoaderInterface`](./classes/Symfony/Component/Translation/Loader/LoaderInterface.md) | LoaderInterface is the interface implemented by all translation loaders.|

### \Symfony\Component\Translation\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`DataCollectorTranslatorTest`](./classes/Symfony/Component/Translation/Tests/DataCollectorTranslatorTest.md) | |
| [`IdentityTranslatorTest`](./classes/Symfony/Component/Translation/Tests/IdentityTranslatorTest.md) | |
| [`IntervalTest`](./classes/Symfony/Component/Translation/Tests/IntervalTest.md) | |
| [`LoggingTranslatorTest`](./classes/Symfony/Component/Translation/Tests/LoggingTranslatorTest.md) | |
| [`MessageCatalogueTest`](./classes/Symfony/Component/Translation/Tests/MessageCatalogueTest.md) | |
| [`MessageSelectorTest`](./classes/Symfony/Component/Translation/Tests/MessageSelectorTest.md) | |
| [`PluralizationRulesTest`](./classes/Symfony/Component/Translation/Tests/PluralizationRulesTest.md) | Test should cover all languages mentioned on http://translate.sourceforge.net/wiki/l10n/pluralforms<br />and Plural forms mentioned on http://www.gnu.org/software/gettext/manual/gettext.html#Plural-forms.|
| [`StaleResource`](./classes/Symfony/Component/Translation/Tests/StaleResource.md) | |
| [`StringClass`](./classes/Symfony/Component/Translation/Tests/StringClass.md) | |
| [`TranslatorCacheTest`](./classes/Symfony/Component/Translation/Tests/TranslatorCacheTest.md) | |
| [`TranslatorTest`](./classes/Symfony/Component/Translation/Tests/TranslatorTest.md) | |

### \Symfony\Component\Translation\Tests\Catalogue

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractOperationTest`](./classes/Symfony/Component/Translation/Tests/Catalogue/AbstractOperationTest.md) | |
| [`MergeOperationTest`](./classes/Symfony/Component/Translation/Tests/Catalogue/MergeOperationTest.md) | |
| [`TargetOperationTest`](./classes/Symfony/Component/Translation/Tests/Catalogue/TargetOperationTest.md) | |

### \Symfony\Component\Translation\Tests\DataCollector

#### Classes

| Class | Description |
|-------|-------------|
| [`TranslationDataCollectorTest`](./classes/Symfony/Component/Translation/Tests/DataCollector/TranslationDataCollectorTest.md) | |

### \Symfony\Component\Translation\Tests\Dumper

#### Classes

| Class | Description |
|-------|-------------|
| [`ConcreteFileDumper`](./classes/Symfony/Component/Translation/Tests/Dumper/ConcreteFileDumper.md) | FileDumper is an implementation of DumperInterface that dump a message catalogue to file(s).|
| [`CsvFileDumperTest`](./classes/Symfony/Component/Translation/Tests/Dumper/CsvFileDumperTest.md) | |
| [`FileDumperTest`](./classes/Symfony/Component/Translation/Tests/Dumper/FileDumperTest.md) | |
| [`IcuResFileDumperTest`](./classes/Symfony/Component/Translation/Tests/Dumper/IcuResFileDumperTest.md) | |
| [`IniFileDumperTest`](./classes/Symfony/Component/Translation/Tests/Dumper/IniFileDumperTest.md) | |
| [`JsonFileDumperTest`](./classes/Symfony/Component/Translation/Tests/Dumper/JsonFileDumperTest.md) | |
| [`MoFileDumperTest`](./classes/Symfony/Component/Translation/Tests/Dumper/MoFileDumperTest.md) | |
| [`PhpFileDumperTest`](./classes/Symfony/Component/Translation/Tests/Dumper/PhpFileDumperTest.md) | |
| [`PoFileDumperTest`](./classes/Symfony/Component/Translation/Tests/Dumper/PoFileDumperTest.md) | |
| [`QtFileDumperTest`](./classes/Symfony/Component/Translation/Tests/Dumper/QtFileDumperTest.md) | |
| [`XliffFileDumperTest`](./classes/Symfony/Component/Translation/Tests/Dumper/XliffFileDumperTest.md) | |
| [`YamlFileDumperTest`](./classes/Symfony/Component/Translation/Tests/Dumper/YamlFileDumperTest.md) | |

### \Symfony\Component\Translation\Tests\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`CsvFileLoaderTest`](./classes/Symfony/Component/Translation/Tests/Loader/CsvFileLoaderTest.md) | |
| [`IcuDatFileLoaderTest`](./classes/Symfony/Component/Translation/Tests/Loader/IcuDatFileLoaderTest.md) | |
| [`IcuResFileLoaderTest`](./classes/Symfony/Component/Translation/Tests/Loader/IcuResFileLoaderTest.md) | |
| [`IniFileLoaderTest`](./classes/Symfony/Component/Translation/Tests/Loader/IniFileLoaderTest.md) | |
| [`JsonFileLoaderTest`](./classes/Symfony/Component/Translation/Tests/Loader/JsonFileLoaderTest.md) | |
| [`LocalizedTestCase`](./classes/Symfony/Component/Translation/Tests/Loader/LocalizedTestCase.md) | |
| [`MoFileLoaderTest`](./classes/Symfony/Component/Translation/Tests/Loader/MoFileLoaderTest.md) | |
| [`PhpFileLoaderTest`](./classes/Symfony/Component/Translation/Tests/Loader/PhpFileLoaderTest.md) | |
| [`PoFileLoaderTest`](./classes/Symfony/Component/Translation/Tests/Loader/PoFileLoaderTest.md) | |
| [`QtFileLoaderTest`](./classes/Symfony/Component/Translation/Tests/Loader/QtFileLoaderTest.md) | |
| [`XliffFileLoaderTest`](./classes/Symfony/Component/Translation/Tests/Loader/XliffFileLoaderTest.md) | |
| [`YamlFileLoaderTest`](./classes/Symfony/Component/Translation/Tests/Loader/YamlFileLoaderTest.md) | |

### \Symfony\Component\Translation\Tests\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayConverterTest`](./classes/Symfony/Component/Translation/Tests/Util/ArrayConverterTest.md) | |

### \Symfony\Component\Translation\Tests\Writer

#### Classes

| Class | Description |
|-------|-------------|
| [`BackupDumper`](./classes/Symfony/Component/Translation/Tests/Writer/BackupDumper.md) | |
| [`NonBackupDumper`](./classes/Symfony/Component/Translation/Tests/Writer/NonBackupDumper.md) | |
| [`TranslationWriterTest`](./classes/Symfony/Component/Translation/Tests/Writer/TranslationWriterTest.md) | |

### \Symfony\Component\Translation\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayConverter`](./classes/Symfony/Component/Translation/Util/ArrayConverter.md) | ArrayConverter generates tree like structure from a message catalogue.|

### \Symfony\Component\Translation\Writer

#### Classes

| Class | Description |
|-------|-------------|
| [`TranslationWriter`](./classes/Symfony/Component/Translation/Writer/TranslationWriter.md) | TranslationWriter writes translation messages.|

### \Symfony\Component\Validator

#### Classes

| Class | Description |
|-------|-------------|
| [`Constraint`](./classes/Symfony/Component/Validator/Constraint.md) | Contains the properties of a constraint definition.|
| [`ConstraintValidator`](./classes/Symfony/Component/Validator/ConstraintValidator.md) | Base class for constraint validators.|
| [`ConstraintValidatorFactory`](./classes/Symfony/Component/Validator/ConstraintValidatorFactory.md) | Default implementation of the ConstraintValidatorFactoryInterface.|
| [`ConstraintViolation`](./classes/Symfony/Component/Validator/ConstraintViolation.md) | Default implementation of {@ConstraintViolationInterface}.|
| [`ConstraintViolationList`](./classes/Symfony/Component/Validator/ConstraintViolationList.md) | Default implementation of {@ConstraintViolationListInterface}.|
| [`DefaultTranslator`](./classes/Symfony/Component/Validator/DefaultTranslator.md) | Simple translator implementation that simply replaces the parameters in<br />the message IDs.|
| [`ExecutionContext`](./classes/Symfony/Component/Validator/ExecutionContext.md) | Default implementation of {@link ExecutionContextInterface}.|
| [`Validation`](./classes/Symfony/Component/Validator/Validation.md) | Entry point for the Validator component.|
| [`ValidationVisitor`](./classes/Symfony/Component/Validator/ValidationVisitor.md) | Default implementation of {@link ValidationVisitorInterface} and<br />{@link GlobalExecutionContextInterface}.|
| [`Validator`](./classes/Symfony/Component/Validator/Validator.md) | Default implementation of {@link ValidatorInterface}.|
| [`ValidatorBuilder`](./classes/Symfony/Component/Validator/ValidatorBuilder.md) | The default implementation of {@link ValidatorBuilderInterface}.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ClassBasedInterface`](./classes/Symfony/Component/Validator/ClassBasedInterface.md) | An object backed by a PHP class.|
| [`ConstraintValidatorFactoryInterface`](./classes/Symfony/Component/Validator/ConstraintValidatorFactoryInterface.md) | Specifies an object able to return the correct ConstraintValidatorInterface<br />instance given a Constraint object.|
| [`ConstraintValidatorInterface`](./classes/Symfony/Component/Validator/ConstraintValidatorInterface.md) | |
| [`ConstraintViolationInterface`](./classes/Symfony/Component/Validator/ConstraintViolationInterface.md) | A violation of a constraint that happened during validation.|
| [`ConstraintViolationListInterface`](./classes/Symfony/Component/Validator/ConstraintViolationListInterface.md) | A list of constraint violations.|
| [`ExecutionContextInterface`](./classes/Symfony/Component/Validator/ExecutionContextInterface.md) | Stores the validator&#039;s state during validation.|
| [`GlobalExecutionContextInterface`](./classes/Symfony/Component/Validator/GlobalExecutionContextInterface.md) | Stores the node-independent state of a validation run.|
| [`GroupSequenceProviderInterface`](./classes/Symfony/Component/Validator/GroupSequenceProviderInterface.md) | Defines the interface for a group sequence provider.|
| [`MetadataFactoryInterface`](./classes/Symfony/Component/Validator/MetadataFactoryInterface.md) | Returns {@link MetadataInterface} instances for values.|
| [`MetadataInterface`](./classes/Symfony/Component/Validator/MetadataInterface.md) | A container for validation metadata.|
| [`ObjectInitializerInterface`](./classes/Symfony/Component/Validator/ObjectInitializerInterface.md) | Prepares an object for validation.|
| [`PropertyMetadataContainerInterface`](./classes/Symfony/Component/Validator/PropertyMetadataContainerInterface.md) | A container for {@link PropertyMetadataInterface} instances.|
| [`PropertyMetadataInterface`](./classes/Symfony/Component/Validator/PropertyMetadataInterface.md) | A container for validation metadata of a property.|
| [`ValidationVisitorInterface`](./classes/Symfony/Component/Validator/ValidationVisitorInterface.md) | Validates values against constraints defined in {@link MetadataInterface}<br />instances.|
| [`ValidatorBuilderInterface`](./classes/Symfony/Component/Validator/ValidatorBuilderInterface.md) | A configurable builder for ValidatorInterface objects.|
| [`ValidatorInterface`](./classes/Symfony/Component/Validator/ValidatorInterface.md) | Validates values and graphs of objects and arrays.|

### \Symfony\Component\Validator\Constraints

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractComparison`](./classes/Symfony/Component/Validator/Constraints/AbstractComparison.md) | Used for the comparison of values.|
| [`AbstractComparisonValidator`](./classes/Symfony/Component/Validator/Constraints/AbstractComparisonValidator.md) | Provides a base class for the validation of property comparisons.|
| [`All`](./classes/Symfony/Component/Validator/Constraints/All.md) | A constraint that is composed of other constraints.|
| [`AllValidator`](./classes/Symfony/Component/Validator/Constraints/AllValidator.md) | Base class for constraint validators.|
| [`Bic`](./classes/Symfony/Component/Validator/Constraints/Bic.md) | Contains the properties of a constraint definition.|
| [`BicValidator`](./classes/Symfony/Component/Validator/Constraints/BicValidator.md) | Base class for constraint validators.|
| [`Blank`](./classes/Symfony/Component/Validator/Constraints/Blank.md) | Contains the properties of a constraint definition.|
| [`BlankValidator`](./classes/Symfony/Component/Validator/Constraints/BlankValidator.md) | Base class for constraint validators.|
| [`Callback`](./classes/Symfony/Component/Validator/Constraints/Callback.md) | Contains the properties of a constraint definition.|
| [`CallbackValidator`](./classes/Symfony/Component/Validator/Constraints/CallbackValidator.md) | Validator for Callback constraint.|
| [`CardScheme`](./classes/Symfony/Component/Validator/Constraints/CardScheme.md) | Metadata for the CardSchemeValidator.|
| [`CardSchemeValidator`](./classes/Symfony/Component/Validator/Constraints/CardSchemeValidator.md) | Validates that a card number belongs to a specified scheme.|
| [`Choice`](./classes/Symfony/Component/Validator/Constraints/Choice.md) | Contains the properties of a constraint definition.|
| [`ChoiceValidator`](./classes/Symfony/Component/Validator/Constraints/ChoiceValidator.md) | ChoiceValidator validates that the value is one of the expected values.|
| [`Collection`](./classes/Symfony/Component/Validator/Constraints/Collection.md) | A constraint that is composed of other constraints.|
| [`CollectionValidator`](./classes/Symfony/Component/Validator/Constraints/CollectionValidator.md) | Base class for constraint validators.|
| [`Composite`](./classes/Symfony/Component/Validator/Constraints/Composite.md) | A constraint that is composed of other constraints.|
| [`Count`](./classes/Symfony/Component/Validator/Constraints/Count.md) | Contains the properties of a constraint definition.|
| [`CountValidator`](./classes/Symfony/Component/Validator/Constraints/CountValidator.md) | Base class for constraint validators.|
| [`Country`](./classes/Symfony/Component/Validator/Constraints/Country.md) | Contains the properties of a constraint definition.|
| [`CountryValidator`](./classes/Symfony/Component/Validator/Constraints/CountryValidator.md) | Validates whether a value is a valid country code.|
| [`Currency`](./classes/Symfony/Component/Validator/Constraints/Currency.md) | Contains the properties of a constraint definition.|
| [`CurrencyValidator`](./classes/Symfony/Component/Validator/Constraints/CurrencyValidator.md) | Validates whether a value is a valid currency.|
| [`Date`](./classes/Symfony/Component/Validator/Constraints/Date.md) | Contains the properties of a constraint definition.|
| [`DateTime`](./classes/Symfony/Component/Validator/Constraints/DateTime.md) | Contains the properties of a constraint definition.|
| [`DateTimeValidator`](./classes/Symfony/Component/Validator/Constraints/DateTimeValidator.md) | Base class for constraint validators.|
| [`DateValidator`](./classes/Symfony/Component/Validator/Constraints/DateValidator.md) | Base class for constraint validators.|
| [`Email`](./classes/Symfony/Component/Validator/Constraints/Email.md) | Contains the properties of a constraint definition.|
| [`EmailValidator`](./classes/Symfony/Component/Validator/Constraints/EmailValidator.md) | Base class for constraint validators.|
| [`EqualTo`](./classes/Symfony/Component/Validator/Constraints/EqualTo.md) | Used for the comparison of values.|
| [`EqualToValidator`](./classes/Symfony/Component/Validator/Constraints/EqualToValidator.md) | Validates values are equal (==).|
| [`Existence`](./classes/Symfony/Component/Validator/Constraints/Existence.md) | A constraint that is composed of other constraints.|
| [`Expression`](./classes/Symfony/Component/Validator/Constraints/Expression.md) | Contains the properties of a constraint definition.|
| [`ExpressionValidator`](./classes/Symfony/Component/Validator/Constraints/ExpressionValidator.md) | Base class for constraint validators.|
| [`False`](./classes/Symfony/Component/Validator/Constraints/False.md) | Contains the properties of a constraint definition.|
| [`FalseValidator`](./classes/Symfony/Component/Validator/Constraints/FalseValidator.md) | Base class for constraint validators.|
| [`File`](./classes/Symfony/Component/Validator/Constraints/File.md) | Contains the properties of a constraint definition.|
| [`FileValidator`](./classes/Symfony/Component/Validator/Constraints/FileValidator.md) | Base class for constraint validators.|
| [`GreaterThan`](./classes/Symfony/Component/Validator/Constraints/GreaterThan.md) | Used for the comparison of values.|
| [`GreaterThanOrEqual`](./classes/Symfony/Component/Validator/Constraints/GreaterThanOrEqual.md) | Used for the comparison of values.|
| [`GreaterThanOrEqualValidator`](./classes/Symfony/Component/Validator/Constraints/GreaterThanOrEqualValidator.md) | Validates values are greater than or equal to the previous (&gt;=).|
| [`GreaterThanValidator`](./classes/Symfony/Component/Validator/Constraints/GreaterThanValidator.md) | Validates values are greater than the previous (&gt;).|
| [`GroupSequence`](./classes/Symfony/Component/Validator/Constraints/GroupSequence.md) | A sequence of validation groups.|
| [`GroupSequenceProvider`](./classes/Symfony/Component/Validator/Constraints/GroupSequenceProvider.md) | Annotation to define a group sequence provider.|
| [`IbanValidator`](./classes/Symfony/Component/Validator/Constraints/IbanValidator.md) | Base class for constraint validators.|
| [`IdenticalTo`](./classes/Symfony/Component/Validator/Constraints/IdenticalTo.md) | Used for the comparison of values.|
| [`IdenticalToValidator`](./classes/Symfony/Component/Validator/Constraints/IdenticalToValidator.md) | Validates values are identical (===).|
| [`Image`](./classes/Symfony/Component/Validator/Constraints/Image.md) | Contains the properties of a constraint definition.|
| [`ImageValidator`](./classes/Symfony/Component/Validator/Constraints/ImageValidator.md) | Validates whether a value is a valid image file and is valid<br />against minWidth, maxWidth, minHeight and maxHeight constraints.|
| [`Ip`](./classes/Symfony/Component/Validator/Constraints/Ip.md) | Validates that a value is a valid IP address.|
| [`IpValidator`](./classes/Symfony/Component/Validator/Constraints/IpValidator.md) | Validates whether a value is a valid IP address.|
| [`IsFalse`](./classes/Symfony/Component/Validator/Constraints/IsFalse.md) | Contains the properties of a constraint definition.|
| [`IsFalseValidator`](./classes/Symfony/Component/Validator/Constraints/IsFalseValidator.md) | Base class for constraint validators.|
| [`IsNull`](./classes/Symfony/Component/Validator/Constraints/IsNull.md) | Contains the properties of a constraint definition.|
| [`IsNullValidator`](./classes/Symfony/Component/Validator/Constraints/IsNullValidator.md) | Base class for constraint validators.|
| [`IsTrue`](./classes/Symfony/Component/Validator/Constraints/IsTrue.md) | Contains the properties of a constraint definition.|
| [`IsTrueValidator`](./classes/Symfony/Component/Validator/Constraints/IsTrueValidator.md) | Base class for constraint validators.|
| [`Isbn`](./classes/Symfony/Component/Validator/Constraints/Isbn.md) | Contains the properties of a constraint definition.|
| [`IsbnValidator`](./classes/Symfony/Component/Validator/Constraints/IsbnValidator.md) | Validates whether the value is a valid ISBN-10 or ISBN-13.|
| [`Issn`](./classes/Symfony/Component/Validator/Constraints/Issn.md) | Contains the properties of a constraint definition.|
| [`IssnValidator`](./classes/Symfony/Component/Validator/Constraints/IssnValidator.md) | Validates whether the value is a valid ISSN.|
| [`Language`](./classes/Symfony/Component/Validator/Constraints/Language.md) | Contains the properties of a constraint definition.|
| [`LanguageValidator`](./classes/Symfony/Component/Validator/Constraints/LanguageValidator.md) | Validates whether a value is a valid language code.|
| [`Length`](./classes/Symfony/Component/Validator/Constraints/Length.md) | Contains the properties of a constraint definition.|
| [`LengthValidator`](./classes/Symfony/Component/Validator/Constraints/LengthValidator.md) | Base class for constraint validators.|
| [`LessThan`](./classes/Symfony/Component/Validator/Constraints/LessThan.md) | Used for the comparison of values.|
| [`LessThanOrEqual`](./classes/Symfony/Component/Validator/Constraints/LessThanOrEqual.md) | Used for the comparison of values.|
| [`LessThanOrEqualValidator`](./classes/Symfony/Component/Validator/Constraints/LessThanOrEqualValidator.md) | Validates values are less than or equal to the previous (&lt;=).|
| [`LessThanValidator`](./classes/Symfony/Component/Validator/Constraints/LessThanValidator.md) | Validates values are less than the previous (&lt;).|
| [`Locale`](./classes/Symfony/Component/Validator/Constraints/Locale.md) | Contains the properties of a constraint definition.|
| [`LocaleValidator`](./classes/Symfony/Component/Validator/Constraints/LocaleValidator.md) | Validates whether a value is a valid locale code.|
| [`Luhn`](./classes/Symfony/Component/Validator/Constraints/Luhn.md) | Metadata for the LuhnValidator.|
| [`LuhnValidator`](./classes/Symfony/Component/Validator/Constraints/LuhnValidator.md) | Validates a PAN using the LUHN Algorithm.|
| [`NotBlank`](./classes/Symfony/Component/Validator/Constraints/NotBlank.md) | Contains the properties of a constraint definition.|
| [`NotBlankValidator`](./classes/Symfony/Component/Validator/Constraints/NotBlankValidator.md) | Base class for constraint validators.|
| [`NotEqualTo`](./classes/Symfony/Component/Validator/Constraints/NotEqualTo.md) | Used for the comparison of values.|
| [`NotEqualToValidator`](./classes/Symfony/Component/Validator/Constraints/NotEqualToValidator.md) | Validates values are all unequal (!=).|
| [`NotIdenticalTo`](./classes/Symfony/Component/Validator/Constraints/NotIdenticalTo.md) | Used for the comparison of values.|
| [`NotIdenticalToValidator`](./classes/Symfony/Component/Validator/Constraints/NotIdenticalToValidator.md) | Validates values aren&#039;t identical (!==).|
| [`NotNull`](./classes/Symfony/Component/Validator/Constraints/NotNull.md) | Contains the properties of a constraint definition.|
| [`NotNullValidator`](./classes/Symfony/Component/Validator/Constraints/NotNullValidator.md) | Base class for constraint validators.|
| [`Null`](./classes/Symfony/Component/Validator/Constraints/Null.md) | Contains the properties of a constraint definition.|
| [`NullValidator`](./classes/Symfony/Component/Validator/Constraints/NullValidator.md) | Base class for constraint validators.|
| [`Optional`](./classes/Symfony/Component/Validator/Constraints/Optional.md) | A constraint that is composed of other constraints.|
| [`Range`](./classes/Symfony/Component/Validator/Constraints/Range.md) | Contains the properties of a constraint definition.|
| [`RangeValidator`](./classes/Symfony/Component/Validator/Constraints/RangeValidator.md) | Base class for constraint validators.|
| [`Regex`](./classes/Symfony/Component/Validator/Constraints/Regex.md) | Contains the properties of a constraint definition.|
| [`RegexValidator`](./classes/Symfony/Component/Validator/Constraints/RegexValidator.md) | Validates whether a value match or not given regexp pattern.|
| [`Required`](./classes/Symfony/Component/Validator/Constraints/Required.md) | A constraint that is composed of other constraints.|
| [`Time`](./classes/Symfony/Component/Validator/Constraints/Time.md) | Contains the properties of a constraint definition.|
| [`TimeValidator`](./classes/Symfony/Component/Validator/Constraints/TimeValidator.md) | Base class for constraint validators.|
| [`Traverse`](./classes/Symfony/Component/Validator/Constraints/Traverse.md) | Contains the properties of a constraint definition.|
| [`True`](./classes/Symfony/Component/Validator/Constraints/True.md) | Contains the properties of a constraint definition.|
| [`TrueValidator`](./classes/Symfony/Component/Validator/Constraints/TrueValidator.md) | Base class for constraint validators.|
| [`Type`](./classes/Symfony/Component/Validator/Constraints/Type.md) | Contains the properties of a constraint definition.|
| [`TypeValidator`](./classes/Symfony/Component/Validator/Constraints/TypeValidator.md) | Base class for constraint validators.|
| [`Url`](./classes/Symfony/Component/Validator/Constraints/Url.md) | Contains the properties of a constraint definition.|
| [`UrlValidator`](./classes/Symfony/Component/Validator/Constraints/UrlValidator.md) | Base class for constraint validators.|
| [`Uuid`](./classes/Symfony/Component/Validator/Constraints/Uuid.md) | Contains the properties of a constraint definition.|
| [`UuidValidator`](./classes/Symfony/Component/Validator/Constraints/UuidValidator.md) | Validates whether the value is a valid UUID (also known as GUID).|
| [`Valid`](./classes/Symfony/Component/Validator/Constraints/Valid.md) | Contains the properties of a constraint definition.|

### \Symfony\Component\Validator\Constraints\Collection

#### Classes

| Class | Description |
|-------|-------------|
| [`Optional`](./classes/Symfony/Component/Validator/Constraints/Collection/Optional.md) | A constraint that is composed of other constraints.|
| [`Required`](./classes/Symfony/Component/Validator/Constraints/Collection/Required.md) | A constraint that is composed of other constraints.|

### \Symfony\Component\Validator\Context

#### Classes

| Class | Description |
|-------|-------------|
| [`LegacyExecutionContext`](./classes/Symfony/Component/Validator/Context/LegacyExecutionContext.md) | An execution context that is compatible with the legacy API (&lt; 2.5).|
| [`LegacyExecutionContextFactory`](./classes/Symfony/Component/Validator/Context/LegacyExecutionContextFactory.md) | Creates new {@link LegacyExecutionContext} instances.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExecutionContextFactoryInterface`](./classes/Symfony/Component/Validator/Context/ExecutionContextFactoryInterface.md) | Creates instances of {@link ExecutionContextInterface}.|
| [`ExecutionContextInterface`](./classes/Symfony/Component/Validator/Context/ExecutionContextInterface.md) | The context of a validation run.|

### \Symfony\Component\Validator\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](./classes/Symfony/Component/Validator/Exception/BadMethodCallException.md) | Base BadMethodCallException for the Validator component.|
| [`ConstraintDefinitionException`](./classes/Symfony/Component/Validator/Exception/ConstraintDefinitionException.md) | Base RuntimeException for the Validator component.|
| [`GroupDefinitionException`](./classes/Symfony/Component/Validator/Exception/GroupDefinitionException.md) | Base RuntimeException for the Validator component.|
| [`InvalidArgumentException`](./classes/Symfony/Component/Validator/Exception/InvalidArgumentException.md) | Base InvalidArgumentException for the Validator component.|
| [`InvalidOptionsException`](./classes/Symfony/Component/Validator/Exception/InvalidOptionsException.md) | Base RuntimeException for the Validator component.|
| [`MappingException`](./classes/Symfony/Component/Validator/Exception/MappingException.md) | Base RuntimeException for the Validator component.|
| [`MissingOptionsException`](./classes/Symfony/Component/Validator/Exception/MissingOptionsException.md) | Base RuntimeException for the Validator component.|
| [`NoSuchMetadataException`](./classes/Symfony/Component/Validator/Exception/NoSuchMetadataException.md) | Base RuntimeException for the Validator component.|
| [`OutOfBoundsException`](./classes/Symfony/Component/Validator/Exception/OutOfBoundsException.md) | Base OutOfBoundsException for the Validator component.|
| [`RuntimeException`](./classes/Symfony/Component/Validator/Exception/RuntimeException.md) | Base RuntimeException for the Validator component.|
| [`UnexpectedTypeException`](./classes/Symfony/Component/Validator/Exception/UnexpectedTypeException.md) | Base RuntimeException for the Validator component.|
| [`UnsupportedMetadataException`](./classes/Symfony/Component/Validator/Exception/UnsupportedMetadataException.md) | Base InvalidArgumentException for the Validator component.|
| [`ValidatorException`](./classes/Symfony/Component/Validator/Exception/ValidatorException.md) | Base RuntimeException for the Validator component.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Symfony/Component/Validator/Exception/ExceptionInterface.md) | Base ExceptionInterface for the Validator component.|

### \Symfony\Component\Validator\Mapping

#### Classes

| Class | Description |
|-------|-------------|
| [`BlackholeMetadataFactory`](./classes/Symfony/Component/Validator/Mapping/BlackholeMetadataFactory.md) | Alias of {@link Factory\BlackHoleMetadataFactory}.|
| [`CascadingStrategy`](./classes/Symfony/Component/Validator/Mapping/CascadingStrategy.md) | Specifies whether an object should be cascaded.|
| [`ClassMetadata`](./classes/Symfony/Component/Validator/Mapping/ClassMetadata.md) | Default implementation of {@link ClassMetadataInterface}.|
| [`ClassMetadataFactory`](./classes/Symfony/Component/Validator/Mapping/ClassMetadataFactory.md) | Alias of {@link LazyLoadingMetadataFactory}.|
| [`ElementMetadata`](./classes/Symfony/Component/Validator/Mapping/ElementMetadata.md) | Contains the metadata of a structural element.|
| [`GenericMetadata`](./classes/Symfony/Component/Validator/Mapping/GenericMetadata.md) | A generic container of {@link Constraint} objects.|
| [`GetterMetadata`](./classes/Symfony/Component/Validator/Mapping/GetterMetadata.md) | Stores all metadata needed for validating a class property via its getter<br />method.|
| [`MemberMetadata`](./classes/Symfony/Component/Validator/Mapping/MemberMetadata.md) | Stores all metadata needed for validating a class property.|
| [`PropertyMetadata`](./classes/Symfony/Component/Validator/Mapping/PropertyMetadata.md) | Stores all metadata needed for validating a class property.|
| [`TraversalStrategy`](./classes/Symfony/Component/Validator/Mapping/TraversalStrategy.md) | Specifies whether and how a traversable object should be traversed.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ClassMetadataInterface`](./classes/Symfony/Component/Validator/Mapping/ClassMetadataInterface.md) | Stores all metadata needed for validating objects of specific class.|
| [`MetadataInterface`](./classes/Symfony/Component/Validator/Mapping/MetadataInterface.md) | A container for validation metadata.|
| [`PropertyMetadataInterface`](./classes/Symfony/Component/Validator/Mapping/PropertyMetadataInterface.md) | Stores all metadata needed for validating the value of a class property.|

### \Symfony\Component\Validator\Mapping\Cache

#### Classes

| Class | Description |
|-------|-------------|
| [`ApcCache`](./classes/Symfony/Component/Validator/Mapping/Cache/ApcCache.md) | |
| [`DoctrineCache`](./classes/Symfony/Component/Validator/Mapping/Cache/DoctrineCache.md) | Adapts a Doctrine cache to a CacheInterface.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CacheInterface`](./classes/Symfony/Component/Validator/Mapping/Cache/CacheInterface.md) | Persists ClassMetadata instances in a cache.|

### \Symfony\Component\Validator\Mapping\Factory

#### Classes

| Class | Description |
|-------|-------------|
| [`BlackHoleMetadataFactory`](./classes/Symfony/Component/Validator/Mapping/Factory/BlackHoleMetadataFactory.md) | Metadata factory that does not store metadata.|
| [`LazyLoadingMetadataFactory`](./classes/Symfony/Component/Validator/Mapping/Factory/LazyLoadingMetadataFactory.md) | Creates new {@link ClassMetadataInterface} instances.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`MetadataFactoryInterface`](./classes/Symfony/Component/Validator/Mapping/Factory/MetadataFactoryInterface.md) | Returns {@link \Symfony\Component\Validator\Mapping\MetadataInterface} instances for values.|

### \Symfony\Component\Validator\Mapping\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractLoader`](./classes/Symfony/Component/Validator/Mapping/Loader/AbstractLoader.md) | Base loader for validation metadata.|
| [`AnnotationLoader`](./classes/Symfony/Component/Validator/Mapping/Loader/AnnotationLoader.md) | Loads validation metadata using a Doctrine annotation {@link Reader}.|
| [`FileLoader`](./classes/Symfony/Component/Validator/Mapping/Loader/FileLoader.md) | Base loader for loading validation metadata from a file.|
| [`FilesLoader`](./classes/Symfony/Component/Validator/Mapping/Loader/FilesLoader.md) | Base loader for loading validation metadata from a list of files.|
| [`LoaderChain`](./classes/Symfony/Component/Validator/Mapping/Loader/LoaderChain.md) | Loads validation metadata from multiple {@link LoaderInterface} instances.|
| [`StaticMethodLoader`](./classes/Symfony/Component/Validator/Mapping/Loader/StaticMethodLoader.md) | Loads validation metadata by calling a static method on the loaded class.|
| [`XmlFileLoader`](./classes/Symfony/Component/Validator/Mapping/Loader/XmlFileLoader.md) | Loads validation metadata from an XML file.|
| [`XmlFilesLoader`](./classes/Symfony/Component/Validator/Mapping/Loader/XmlFilesLoader.md) | Loads validation metadata from a list of XML files.|
| [`YamlFileLoader`](./classes/Symfony/Component/Validator/Mapping/Loader/YamlFileLoader.md) | Loads validation metadata from a YAML file.|
| [`YamlFilesLoader`](./classes/Symfony/Component/Validator/Mapping/Loader/YamlFilesLoader.md) | Loads validation metadata from a list of YAML files.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`LoaderInterface`](./classes/Symfony/Component/Validator/Mapping/Loader/LoaderInterface.md) | Loads validation metadata into {@link ClassMetadata} instances.|

### \Symfony\Component\Validator\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ConstraintTest`](./classes/Symfony/Component/Validator/Tests/ConstraintTest.md) | |
| [`ConstraintViolationListTest`](./classes/Symfony/Component/Validator/Tests/ConstraintViolationListTest.md) | |
| [`ConstraintViolationTest`](./classes/Symfony/Component/Validator/Tests/ConstraintViolationTest.md) | |
| [`ExecutionContextTest_TestClass`](./classes/Symfony/Component/Validator/Tests/ExecutionContextTest_TestClass.md) | |
| [`LegacyExecutionContextTest`](./classes/Symfony/Component/Validator/Tests/LegacyExecutionContextTest.md) | |
| [`LegacyValidatorTest`](./classes/Symfony/Component/Validator/Tests/LegacyValidatorTest.md) | Verifies that a validator satisfies the API of Symfony &lt; 2.5.|
| [`ValidatorBuilderTest`](./classes/Symfony/Component/Validator/Tests/ValidatorBuilderTest.md) | |

### \Symfony\Component\Validator\Tests\Constraints

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractComparisonValidatorTestCase`](./classes/Symfony/Component/Validator/Tests/Constraints/AbstractComparisonValidatorTestCase.md) | |
| [`AbstractConstraintValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/AbstractConstraintValidatorTest.md) | |
| [`AllTest`](./classes/Symfony/Component/Validator/Tests/Constraints/AllTest.md) | |
| [`AllValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/AllValidatorTest.md) | |
| [`BicValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/BicValidatorTest.md) | |
| [`BlankValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/BlankValidatorTest.md) | |
| [`CallbackValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/CallbackValidatorTest.md) | |
| [`CallbackValidatorTest_Class`](./classes/Symfony/Component/Validator/Tests/Constraints/CallbackValidatorTest_Class.md) | |
| [`CallbackValidatorTest_Object`](./classes/Symfony/Component/Validator/Tests/Constraints/CallbackValidatorTest_Object.md) | |
| [`CardSchemeValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/CardSchemeValidatorTest.md) | |
| [`ChoiceValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/ChoiceValidatorTest.md) | |
| [`CollectionTest`](./classes/Symfony/Component/Validator/Tests/Constraints/CollectionTest.md) | |
| [`CollectionValidatorArrayObjectTest`](./classes/Symfony/Component/Validator/Tests/Constraints/CollectionValidatorArrayObjectTest.md) | |
| [`CollectionValidatorArrayTest`](./classes/Symfony/Component/Validator/Tests/Constraints/CollectionValidatorArrayTest.md) | |
| [`CollectionValidatorCustomArrayObjectTest`](./classes/Symfony/Component/Validator/Tests/Constraints/CollectionValidatorCustomArrayObjectTest.md) | |
| [`CollectionValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/CollectionValidatorTest.md) | |
| [`ComparisonTest_Class`](./classes/Symfony/Component/Validator/Tests/Constraints/ComparisonTest_Class.md) | |
| [`CompositeTest`](./classes/Symfony/Component/Validator/Tests/Constraints/CompositeTest.md) | |
| [`ConcreteComposite`](./classes/Symfony/Component/Validator/Tests/Constraints/ConcreteComposite.md) | A constraint that is composed of other constraints.|
| [`CountValidatorArrayTest`](./classes/Symfony/Component/Validator/Tests/Constraints/CountValidatorArrayTest.md) | |
| [`CountValidatorCountableTest`](./classes/Symfony/Component/Validator/Tests/Constraints/CountValidatorCountableTest.md) | |
| [`CountValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/CountValidatorTest.md) | |
| [`CountryValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/CountryValidatorTest.md) | |
| [`CurrencyValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/CurrencyValidatorTest.md) | |
| [`DateTimeValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/DateTimeValidatorTest.md) | |
| [`DateValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/DateValidatorTest.md) | |
| [`EmailProvider`](./classes/Symfony/Component/Validator/Tests/Constraints/EmailProvider.md) | |
| [`EmailValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/EmailValidatorTest.md) | |
| [`EqualToValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/EqualToValidatorTest.md) | |
| [`ExpressionValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/ExpressionValidatorTest.md) | |
| [`FileTest`](./classes/Symfony/Component/Validator/Tests/Constraints/FileTest.md) | |
| [`FileValidatorObjectTest`](./classes/Symfony/Component/Validator/Tests/Constraints/FileValidatorObjectTest.md) | |
| [`FileValidatorPathTest`](./classes/Symfony/Component/Validator/Tests/Constraints/FileValidatorPathTest.md) | |
| [`FileValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/FileValidatorTest.md) | |
| [`GreaterThanOrEqualValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/GreaterThanOrEqualValidatorTest.md) | |
| [`GreaterThanValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/GreaterThanValidatorTest.md) | |
| [`GroupSequenceTest`](./classes/Symfony/Component/Validator/Tests/Constraints/GroupSequenceTest.md) | |
| [`IbanValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/IbanValidatorTest.md) | |
| [`IdenticalToValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/IdenticalToValidatorTest.md) | |
| [`ImageValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/ImageValidatorTest.md) | |
| [`IpValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/IpValidatorTest.md) | |
| [`IsFalseValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/IsFalseValidatorTest.md) | |
| [`IsNullValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/IsNullValidatorTest.md) | |
| [`IsTrueValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/IsTrueValidatorTest.md) | |
| [`IsbnValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/IsbnValidatorTest.md) | |
| [`IssnValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/IssnValidatorTest.md) | |
| [`LanguageValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/LanguageValidatorTest.md) | |
| [`LengthValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/LengthValidatorTest.md) | |
| [`LessThanOrEqualValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/LessThanOrEqualValidatorTest.md) | |
| [`LessThanValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/LessThanValidatorTest.md) | |
| [`LocaleValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/LocaleValidatorTest.md) | |
| [`LuhnValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/LuhnValidatorTest.md) | |
| [`NotBlankValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/NotBlankValidatorTest.md) | |
| [`NotEqualToValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/NotEqualToValidatorTest.md) | |
| [`NotIdenticalToValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/NotIdenticalToValidatorTest.md) | |
| [`NotNullValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/NotNullValidatorTest.md) | |
| [`RangeValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/RangeValidatorTest.md) | |
| [`RegexTest`](./classes/Symfony/Component/Validator/Tests/Constraints/RegexTest.md) | |
| [`RegexValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/RegexValidatorTest.md) | |
| [`TimeValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/TimeValidatorTest.md) | |
| [`TypeValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/TypeValidatorTest.md) | |
| [`UrlValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/UrlValidatorTest.md) | |
| [`UuidValidatorTest`](./classes/Symfony/Component/Validator/Tests/Constraints/UuidValidatorTest.md) | |
| [`ValidTest`](./classes/Symfony/Component/Validator/Tests/Constraints/ValidTest.md) | |

### \Symfony\Component\Validator\Tests\Fixtures

#### Classes

| Class | Description |
|-------|-------------|
| [`CallbackClass`](./classes/Symfony/Component/Validator/Tests/Fixtures/CallbackClass.md) | |
| [`ClassConstraint`](./classes/Symfony/Component/Validator/Tests/Fixtures/ClassConstraint.md) | Contains the properties of a constraint definition.|
| [`ConstraintA`](./classes/Symfony/Component/Validator/Tests/Fixtures/ConstraintA.md) | Contains the properties of a constraint definition.|
| [`ConstraintAValidator`](./classes/Symfony/Component/Validator/Tests/Fixtures/ConstraintAValidator.md) | Base class for constraint validators.|
| [`ConstraintB`](./classes/Symfony/Component/Validator/Tests/Fixtures/ConstraintB.md) | Contains the properties of a constraint definition.|
| [`ConstraintC`](./classes/Symfony/Component/Validator/Tests/Fixtures/ConstraintC.md) | Contains the properties of a constraint definition.|
| [`ConstraintWithValue`](./classes/Symfony/Component/Validator/Tests/Fixtures/ConstraintWithValue.md) | Contains the properties of a constraint definition.|
| [`ConstraintWithValueAsDefault`](./classes/Symfony/Component/Validator/Tests/Fixtures/ConstraintWithValueAsDefault.md) | Contains the properties of a constraint definition.|
| [`Countable`](./classes/Symfony/Component/Validator/Tests/Fixtures/Countable.md) | |
| [`CustomArrayObject`](./classes/Symfony/Component/Validator/Tests/Fixtures/CustomArrayObject.md) | This class is a hand written simplified version of PHP native `ArrayObject`<br />class, to show that it behaves differently than the PHP native implementation.|
| [`Entity`](./classes/Symfony/Component/Validator/Tests/Fixtures/Entity.md) | |
| [`EntityParent`](./classes/Symfony/Component/Validator/Tests/Fixtures/EntityParent.md) | |
| [`EntityStaticCar`](./classes/Symfony/Component/Validator/Tests/Fixtures/EntityStaticCar.md) | |
| [`EntityStaticCarTurbo`](./classes/Symfony/Component/Validator/Tests/Fixtures/EntityStaticCarTurbo.md) | |
| [`EntityStaticVehicle`](./classes/Symfony/Component/Validator/Tests/Fixtures/EntityStaticVehicle.md) | |
| [`FailingConstraint`](./classes/Symfony/Component/Validator/Tests/Fixtures/FailingConstraint.md) | Contains the properties of a constraint definition.|
| [`FailingConstraintValidator`](./classes/Symfony/Component/Validator/Tests/Fixtures/FailingConstraintValidator.md) | Base class for constraint validators.|
| [`FakeClassMetadata`](./classes/Symfony/Component/Validator/Tests/Fixtures/FakeClassMetadata.md) | Default implementation of {@link ClassMetadataInterface}.|
| [`FakeMetadataFactory`](./classes/Symfony/Component/Validator/Tests/Fixtures/FakeMetadataFactory.md) | |
| [`FilesLoader`](./classes/Symfony/Component/Validator/Tests/Fixtures/FilesLoader.md) | Base loader for loading validation metadata from a list of files.|
| [`GroupSequenceProviderChildEntity`](./classes/Symfony/Component/Validator/Tests/Fixtures/GroupSequenceProviderChildEntity.md) | |
| [`GroupSequenceProviderEntity`](./classes/Symfony/Component/Validator/Tests/Fixtures/GroupSequenceProviderEntity.md) | |
| [`InvalidConstraint`](./classes/Symfony/Component/Validator/Tests/Fixtures/InvalidConstraint.md) | Contains the properties of a constraint definition.|
| [`InvalidConstraintValidator`](./classes/Symfony/Component/Validator/Tests/Fixtures/InvalidConstraintValidator.md) | |
| [`PropertyConstraint`](./classes/Symfony/Component/Validator/Tests/Fixtures/PropertyConstraint.md) | Contains the properties of a constraint definition.|
| [`Reference`](./classes/Symfony/Component/Validator/Tests/Fixtures/Reference.md) | |
| [`StubGlobalExecutionContext`](./classes/Symfony/Component/Validator/Tests/Fixtures/StubGlobalExecutionContext.md) | |
| [`ToString`](./classes/Symfony/Component/Validator/Tests/Fixtures/ToString.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`EntityInterfaceA`](./classes/Symfony/Component/Validator/Tests/Fixtures/EntityInterfaceA.md) | |
| [`EntityInterfaceB`](./classes/Symfony/Component/Validator/Tests/Fixtures/EntityInterfaceB.md) | |
| [`EntityParentInterface`](./classes/Symfony/Component/Validator/Tests/Fixtures/EntityParentInterface.md) | |
| [`LegacyClassMetadata`](./classes/Symfony/Component/Validator/Tests/Fixtures/LegacyClassMetadata.md) | A container for validation metadata.|

### \Symfony\Component\Validator\Tests\Mapping

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassMetadataTest`](./classes/Symfony/Component/Validator/Tests/Mapping/ClassMetadataTest.md) | |
| [`GetterMetadataTest`](./classes/Symfony/Component/Validator/Tests/Mapping/GetterMetadataTest.md) | |
| [`LegacyElementMetadataTest`](./classes/Symfony/Component/Validator/Tests/Mapping/LegacyElementMetadataTest.md) | |
| [`MemberMetadataTest`](./classes/Symfony/Component/Validator/Tests/Mapping/MemberMetadataTest.md) | |
| [`PropertyMetadataTest`](./classes/Symfony/Component/Validator/Tests/Mapping/PropertyMetadataTest.md) | |
| [`TestElementMetadata`](./classes/Symfony/Component/Validator/Tests/Mapping/TestElementMetadata.md) | Contains the metadata of a structural element.|
| [`TestMemberMetadata`](./classes/Symfony/Component/Validator/Tests/Mapping/TestMemberMetadata.md) | Stores all metadata needed for validating a class property.|

### \Symfony\Component\Validator\Tests\Mapping\Cache

#### Classes

| Class | Description |
|-------|-------------|
| [`DoctrineCacheTest`](./classes/Symfony/Component/Validator/Tests/Mapping/Cache/DoctrineCacheTest.md) | |
| [`LegacyApcCacheTest`](./classes/Symfony/Component/Validator/Tests/Mapping/Cache/LegacyApcCacheTest.md) | |

### \Symfony\Component\Validator\Tests\Mapping\Factory

#### Classes

| Class | Description |
|-------|-------------|
| [`BlackHoleMetadataFactoryTest`](./classes/Symfony/Component/Validator/Tests/Mapping/Factory/BlackHoleMetadataFactoryTest.md) | |
| [`LazyLoadingMetadataFactoryTest`](./classes/Symfony/Component/Validator/Tests/Mapping/Factory/LazyLoadingMetadataFactoryTest.md) | |
| [`TestLoader`](./classes/Symfony/Component/Validator/Tests/Mapping/Factory/TestLoader.md) | |

### \Symfony\Component\Validator\Tests\Mapping\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractStaticLoader`](./classes/Symfony/Component/Validator/Tests/Mapping/Loader/AbstractStaticLoader.md) | |
| [`AbstractStaticMethodLoader`](./classes/Symfony/Component/Validator/Tests/Mapping/Loader/AbstractStaticMethodLoader.md) | |
| [`AnnotationLoaderTest`](./classes/Symfony/Component/Validator/Tests/Mapping/Loader/AnnotationLoaderTest.md) | |
| [`BaseStaticLoaderDocument`](./classes/Symfony/Component/Validator/Tests/Mapping/Loader/BaseStaticLoaderDocument.md) | |
| [`FilesLoaderTest`](./classes/Symfony/Component/Validator/Tests/Mapping/Loader/FilesLoaderTest.md) | |
| [`LoaderChainTest`](./classes/Symfony/Component/Validator/Tests/Mapping/Loader/LoaderChainTest.md) | |
| [`StaticLoaderDocument`](./classes/Symfony/Component/Validator/Tests/Mapping/Loader/StaticLoaderDocument.md) | |
| [`StaticLoaderEntity`](./classes/Symfony/Component/Validator/Tests/Mapping/Loader/StaticLoaderEntity.md) | |
| [`StaticMethodLoaderTest`](./classes/Symfony/Component/Validator/Tests/Mapping/Loader/StaticMethodLoaderTest.md) | |
| [`XmlFileLoaderTest`](./classes/Symfony/Component/Validator/Tests/Mapping/Loader/XmlFileLoaderTest.md) | |
| [`YamlFileLoaderTest`](./classes/Symfony/Component/Validator/Tests/Mapping/Loader/YamlFileLoaderTest.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`StaticLoaderInterface`](./classes/Symfony/Component/Validator/Tests/Mapping/Loader/StaticLoaderInterface.md) | |

### \Symfony\Component\Validator\Tests\Resources

#### Classes

| Class | Description |
|-------|-------------|
| [`TranslationFilesTest`](./classes/Symfony/Component/Validator/Tests/Resources/TranslationFilesTest.md) | |

### \Symfony\Component\Validator\Tests\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`PropertyPathTest`](./classes/Symfony/Component/Validator/Tests/Util/PropertyPathTest.md) | |

### \Symfony\Component\Validator\Tests\Validator

#### Classes

| Class | Description |
|-------|-------------|
| [`Abstract2Dot5ApiTest`](./classes/Symfony/Component/Validator/Tests/Validator/Abstract2Dot5ApiTest.md) | Verifies that a validator satisfies the API of Symfony 2.5+.|
| [`AbstractLegacyApiTest`](./classes/Symfony/Component/Validator/Tests/Validator/AbstractLegacyApiTest.md) | Verifies that a validator satisfies the API of Symfony &lt; 2.5.|
| [`AbstractValidatorTest`](./classes/Symfony/Component/Validator/Tests/Validator/AbstractValidatorTest.md) | |
| [`LegacyValidator2Dot5ApiTest`](./classes/Symfony/Component/Validator/Tests/Validator/LegacyValidator2Dot5ApiTest.md) | Verifies that a validator satisfies the API of Symfony 2.5+.|
| [`LegacyValidatorLegacyApiTest`](./classes/Symfony/Component/Validator/Tests/Validator/LegacyValidatorLegacyApiTest.md) | Verifies that a validator satisfies the API of Symfony &lt; 2.5.|
| [`RecursiveValidator2Dot5ApiTest`](./classes/Symfony/Component/Validator/Tests/Validator/RecursiveValidator2Dot5ApiTest.md) | Verifies that a validator satisfies the API of Symfony 2.5+.|

### \Symfony\Component\Validator\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`PropertyPath`](./classes/Symfony/Component/Validator/Util/PropertyPath.md) | Contains utility methods for dealing with property paths.|

### \Symfony\Component\Validator\Validator

#### Classes

| Class | Description |
|-------|-------------|
| [`LegacyValidator`](./classes/Symfony/Component/Validator/Validator/LegacyValidator.md) | A validator that supports both the API of Symfony &lt; 2.5 and Symfony 2.5+.|
| [`RecursiveContextualValidator`](./classes/Symfony/Component/Validator/Validator/RecursiveContextualValidator.md) | Recursive implementation of {@link ContextualValidatorInterface}.|
| [`RecursiveValidator`](./classes/Symfony/Component/Validator/Validator/RecursiveValidator.md) | Recursive implementation of {@link ValidatorInterface}.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ContextualValidatorInterface`](./classes/Symfony/Component/Validator/Validator/ContextualValidatorInterface.md) | A validator in a specific execution context.|
| [`ValidatorInterface`](./classes/Symfony/Component/Validator/Validator/ValidatorInterface.md) | Validates PHP values against constraints.|

### \Symfony\Component\Validator\Violation

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ConstraintViolationBuilderInterface`](./classes/Symfony/Component/Validator/Violation/ConstraintViolationBuilderInterface.md) | Builds {@link \Symfony\Component\Validator\ConstraintViolationInterface}<br />objects.|

### \Twig

#### Classes

| Class | Description |
|-------|-------------|
| [`Compiler`](./classes/Twig/Compiler.md) | Compiles a node to PHP code.|
| [`Environment`](./classes/Twig/Environment.md) | Stores the Twig configuration and renders templates.|
| [`FileExtensionEscapingStrategy`](./classes/Twig/FileExtensionEscapingStrategy.md) | Default autoescaping strategy based on file names.|
| [`Lexer`](./classes/Twig/Lexer.md) | Lexes a template string.|
| [`Markup`](./classes/Twig/Markup.md) | Marks a content as safe.|
| [`NodeTraverser`](./classes/Twig/NodeTraverser.md) | A node traverser.|
| [`Parser`](./classes/Twig/Parser.md) | Default parser implementation.|
| [`Source`](./classes/Twig/Source.md) | Holds information about a non-compiled Twig template.|
| [`TemplateWrapper`](./classes/Twig/TemplateWrapper.md) | Exposes a template to userland.|
| [`Token`](./classes/Twig/Token.md) | Represents a Token.|
| [`TokenStream`](./classes/Twig/TokenStream.md) | Represents a token stream.|
| [`TwigFilter`](./classes/Twig/TwigFilter.md) | Represents a template filter.|
| [`TwigFunction`](./classes/Twig/TwigFunction.md) | Represents a template function.|
| [`TwigTest`](./classes/Twig/TwigTest.md) | Represents a template test.|

### \Twig\Cache

#### Classes

| Class | Description |
|-------|-------------|
| [`FilesystemCache`](./classes/Twig/Cache/FilesystemCache.md) | Implements a cache on the filesystem.|
| [`NullCache`](./classes/Twig/Cache/NullCache.md) | Implements a no-cache strategy.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CacheInterface`](./classes/Twig/Cache/CacheInterface.md) | Interface implemented by cache classes.|

### \Twig\Error

#### Classes

| Class | Description |
|-------|-------------|
| [`Error`](./classes/Twig/Error/Error.md) | Twig base exception.|
| [`LoaderError`](./classes/Twig/Error/LoaderError.md) | Exception thrown when an error occurs during template loading.|
| [`RuntimeError`](./classes/Twig/Error/RuntimeError.md) | Exception thrown when an error occurs at runtime.|
| [`SyntaxError`](./classes/Twig/Error/SyntaxError.md) | \Exception thrown when a syntax error occurs during lexing or parsing of a template.|

### \Twig\Extension

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractExtension`](./classes/Twig/Extension/AbstractExtension.md) | |
| [`OptimizerExtension`](./classes/Twig/Extension/OptimizerExtension.md) | |
| [`ProfilerExtension`](./classes/Twig/Extension/ProfilerExtension.md) | |
| [`SandboxExtension`](./classes/Twig/Extension/SandboxExtension.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExtensionInterface`](./classes/Twig/Extension/ExtensionInterface.md) | Interface implemented by extension classes.|
| [`GlobalsInterface`](./classes/Twig/Extension/GlobalsInterface.md) | Enables usage of the deprecated Twig\Extension\AbstractExtension::getGlobals() method.|
| [`InitRuntimeInterface`](./classes/Twig/Extension/InitRuntimeInterface.md) | Enables usage of the deprecated Twig\Extension\AbstractExtension::initRuntime() method.|
| [`RuntimeExtensionInterface`](./classes/Twig/Extension/RuntimeExtensionInterface.md) | |

### \Twig\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayLoader`](./classes/Twig/Loader/ArrayLoader.md) | Loads a template from an array.|
| [`ChainLoader`](./classes/Twig/Loader/ChainLoader.md) | Loads templates from other loaders.|
| [`FilesystemLoader`](./classes/Twig/Loader/FilesystemLoader.md) | Loads template from the filesystem.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExistsLoaderInterface`](./classes/Twig/Loader/ExistsLoaderInterface.md) | Adds an exists() method for loaders.|
| [`LoaderInterface`](./classes/Twig/Loader/LoaderInterface.md) | Interface all loaders must implement.|
| [`SourceContextLoaderInterface`](./classes/Twig/Loader/SourceContextLoaderInterface.md) | Adds a getSourceContext() method for loaders.|

### \Twig\Node

#### Classes

| Class | Description |
|-------|-------------|
| [`AutoEscapeNode`](./classes/Twig/Node/AutoEscapeNode.md) | Represents an autoescape node.|
| [`BlockNode`](./classes/Twig/Node/BlockNode.md) | Represents a block node.|
| [`BlockReferenceNode`](./classes/Twig/Node/BlockReferenceNode.md) | Represents a block call node.|
| [`BodyNode`](./classes/Twig/Node/BodyNode.md) | Represents a body node.|
| [`CheckSecurityCallNode`](./classes/Twig/Node/CheckSecurityCallNode.md) | Represents a node in the AST.|
| [`CheckSecurityNode`](./classes/Twig/Node/CheckSecurityNode.md) | Represents a node in the AST.|
| [`CheckToStringNode`](./classes/Twig/Node/CheckToStringNode.md) | Checks if casting an expression to __toString() is allowed by the sandbox.|
| [`DeprecatedNode`](./classes/Twig/Node/DeprecatedNode.md) | Represents a deprecated node.|
| [`DoNode`](./classes/Twig/Node/DoNode.md) | Represents a do node.|
| [`EmbedNode`](./classes/Twig/Node/EmbedNode.md) | Represents an embed node.|
| [`FlushNode`](./classes/Twig/Node/FlushNode.md) | Represents a flush node.|
| [`ForLoopNode`](./classes/Twig/Node/ForLoopNode.md) | Internal node used by the for node.|
| [`ForNode`](./classes/Twig/Node/ForNode.md) | Represents a for node.|
| [`IfNode`](./classes/Twig/Node/IfNode.md) | Represents an if node.|
| [`ImportNode`](./classes/Twig/Node/ImportNode.md) | Represents an import node.|
| [`IncludeNode`](./classes/Twig/Node/IncludeNode.md) | Represents an include node.|
| [`MacroNode`](./classes/Twig/Node/MacroNode.md) | Represents a macro node.|
| [`ModuleNode`](./classes/Twig/Node/ModuleNode.md) | Represents a module node.|
| [`Node`](./classes/Twig/Node/Node.md) | Represents a node in the AST.|
| [`PrintNode`](./classes/Twig/Node/PrintNode.md) | Represents a node that outputs an expression.|
| [`SandboxNode`](./classes/Twig/Node/SandboxNode.md) | Represents a sandbox node.|
| [`SandboxedPrintNode`](./classes/Twig/Node/SandboxedPrintNode.md) | Adds a check for the __toString() method when the variable is an object and the sandbox is activated.|
| [`SetNode`](./classes/Twig/Node/SetNode.md) | Represents a set node.|
| [`SpacelessNode`](./classes/Twig/Node/SpacelessNode.md) | Represents a spaceless node.|
| [`TextNode`](./classes/Twig/Node/TextNode.md) | Represents a text node.|
| [`WithNode`](./classes/Twig/Node/WithNode.md) | Represents a nested &quot;with&quot; scope.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`NodeCaptureInterface`](./classes/Twig/Node/NodeCaptureInterface.md) | Represents a node that captures any nested displayable nodes.|
| [`NodeOutputInterface`](./classes/Twig/Node/NodeOutputInterface.md) | Represents a displayable node in the AST.|

### \Twig\NodeVisitor

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractNodeVisitor`](./classes/Twig/NodeVisitor/AbstractNodeVisitor.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`EscaperNodeVisitor`](./classes/Twig/NodeVisitor/EscaperNodeVisitor.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`OptimizerNodeVisitor`](./classes/Twig/NodeVisitor/OptimizerNodeVisitor.md) | Tries to optimize the AST.|
| [`SafeAnalysisNodeVisitor`](./classes/Twig/NodeVisitor/SafeAnalysisNodeVisitor.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`SandboxNodeVisitor`](./classes/Twig/NodeVisitor/SandboxNodeVisitor.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`NodeVisitorInterface`](./classes/Twig/NodeVisitor/NodeVisitorInterface.md) | Interface for node visitor classes.|

### \Twig\Node\Expression

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractExpression`](./classes/Twig/Node/Expression/AbstractExpression.md) | Abstract class for all nodes that represents an expression.|
| [`ArrayExpression`](./classes/Twig/Node/Expression/ArrayExpression.md) | Abstract class for all nodes that represents an expression.|
| [`ArrowFunctionExpression`](./classes/Twig/Node/Expression/ArrowFunctionExpression.md) | Represents an arrow function.|
| [`AssignNameExpression`](./classes/Twig/Node/Expression/AssignNameExpression.md) | Abstract class for all nodes that represents an expression.|
| [`BlockReferenceExpression`](./classes/Twig/Node/Expression/BlockReferenceExpression.md) | Represents a block call node.|
| [`CallExpression`](./classes/Twig/Node/Expression/CallExpression.md) | Abstract class for all nodes that represents an expression.|
| [`ConditionalExpression`](./classes/Twig/Node/Expression/ConditionalExpression.md) | Abstract class for all nodes that represents an expression.|
| [`ConstantExpression`](./classes/Twig/Node/Expression/ConstantExpression.md) | Abstract class for all nodes that represents an expression.|
| [`FilterExpression`](./classes/Twig/Node/Expression/FilterExpression.md) | Abstract class for all nodes that represents an expression.|
| [`FunctionExpression`](./classes/Twig/Node/Expression/FunctionExpression.md) | Abstract class for all nodes that represents an expression.|
| [`GetAttrExpression`](./classes/Twig/Node/Expression/GetAttrExpression.md) | Abstract class for all nodes that represents an expression.|
| [`MethodCallExpression`](./classes/Twig/Node/Expression/MethodCallExpression.md) | Abstract class for all nodes that represents an expression.|
| [`NameExpression`](./classes/Twig/Node/Expression/NameExpression.md) | Abstract class for all nodes that represents an expression.|
| [`NullCoalesceExpression`](./classes/Twig/Node/Expression/NullCoalesceExpression.md) | Abstract class for all nodes that represents an expression.|
| [`ParentExpression`](./classes/Twig/Node/Expression/ParentExpression.md) | Represents a parent node.|
| [`TempNameExpression`](./classes/Twig/Node/Expression/TempNameExpression.md) | Abstract class for all nodes that represents an expression.|
| [`TestExpression`](./classes/Twig/Node/Expression/TestExpression.md) | Abstract class for all nodes that represents an expression.|

### \Twig\Node\Expression\Binary

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractBinary`](./classes/Twig/Node/Expression/Binary/AbstractBinary.md) | Abstract class for all nodes that represents an expression.|
| [`AddBinary`](./classes/Twig/Node/Expression/Binary/AddBinary.md) | Abstract class for all nodes that represents an expression.|
| [`AndBinary`](./classes/Twig/Node/Expression/Binary/AndBinary.md) | Abstract class for all nodes that represents an expression.|
| [`BitwiseAndBinary`](./classes/Twig/Node/Expression/Binary/BitwiseAndBinary.md) | Abstract class for all nodes that represents an expression.|
| [`BitwiseOrBinary`](./classes/Twig/Node/Expression/Binary/BitwiseOrBinary.md) | Abstract class for all nodes that represents an expression.|
| [`BitwiseXorBinary`](./classes/Twig/Node/Expression/Binary/BitwiseXorBinary.md) | Abstract class for all nodes that represents an expression.|
| [`ConcatBinary`](./classes/Twig/Node/Expression/Binary/ConcatBinary.md) | Abstract class for all nodes that represents an expression.|
| [`DivBinary`](./classes/Twig/Node/Expression/Binary/DivBinary.md) | Abstract class for all nodes that represents an expression.|
| [`EndsWithBinary`](./classes/Twig/Node/Expression/Binary/EndsWithBinary.md) | Abstract class for all nodes that represents an expression.|
| [`EqualBinary`](./classes/Twig/Node/Expression/Binary/EqualBinary.md) | Abstract class for all nodes that represents an expression.|
| [`FloorDivBinary`](./classes/Twig/Node/Expression/Binary/FloorDivBinary.md) | Abstract class for all nodes that represents an expression.|
| [`GreaterBinary`](./classes/Twig/Node/Expression/Binary/GreaterBinary.md) | Abstract class for all nodes that represents an expression.|
| [`GreaterEqualBinary`](./classes/Twig/Node/Expression/Binary/GreaterEqualBinary.md) | Abstract class for all nodes that represents an expression.|
| [`InBinary`](./classes/Twig/Node/Expression/Binary/InBinary.md) | Abstract class for all nodes that represents an expression.|
| [`LessBinary`](./classes/Twig/Node/Expression/Binary/LessBinary.md) | Abstract class for all nodes that represents an expression.|
| [`LessEqualBinary`](./classes/Twig/Node/Expression/Binary/LessEqualBinary.md) | Abstract class for all nodes that represents an expression.|
| [`MatchesBinary`](./classes/Twig/Node/Expression/Binary/MatchesBinary.md) | Abstract class for all nodes that represents an expression.|
| [`ModBinary`](./classes/Twig/Node/Expression/Binary/ModBinary.md) | Abstract class for all nodes that represents an expression.|
| [`MulBinary`](./classes/Twig/Node/Expression/Binary/MulBinary.md) | Abstract class for all nodes that represents an expression.|
| [`NotEqualBinary`](./classes/Twig/Node/Expression/Binary/NotEqualBinary.md) | Abstract class for all nodes that represents an expression.|
| [`NotInBinary`](./classes/Twig/Node/Expression/Binary/NotInBinary.md) | Abstract class for all nodes that represents an expression.|
| [`OrBinary`](./classes/Twig/Node/Expression/Binary/OrBinary.md) | Abstract class for all nodes that represents an expression.|
| [`PowerBinary`](./classes/Twig/Node/Expression/Binary/PowerBinary.md) | Abstract class for all nodes that represents an expression.|
| [`RangeBinary`](./classes/Twig/Node/Expression/Binary/RangeBinary.md) | Abstract class for all nodes that represents an expression.|
| [`StartsWithBinary`](./classes/Twig/Node/Expression/Binary/StartsWithBinary.md) | Abstract class for all nodes that represents an expression.|
| [`SubBinary`](./classes/Twig/Node/Expression/Binary/SubBinary.md) | Abstract class for all nodes that represents an expression.|

### \Twig\Node\Expression\Filter

#### Classes

| Class | Description |
|-------|-------------|
| [`DefaultFilter`](./classes/Twig/Node/Expression/Filter/DefaultFilter.md) | Returns the value or the default value when it is undefined or empty.|

### \Twig\Node\Expression\Test

#### Classes

| Class | Description |
|-------|-------------|
| [`ConstantTest`](./classes/Twig/Node/Expression/Test/ConstantTest.md) | Checks if a variable is the exact same value as a constant.|
| [`DefinedTest`](./classes/Twig/Node/Expression/Test/DefinedTest.md) | Checks if a variable is defined in the current context.|
| [`DivisiblebyTest`](./classes/Twig/Node/Expression/Test/DivisiblebyTest.md) | Checks if a variable is divisible by a number.|
| [`EvenTest`](./classes/Twig/Node/Expression/Test/EvenTest.md) | Checks if a number is even.|
| [`NullTest`](./classes/Twig/Node/Expression/Test/NullTest.md) | Checks that a variable is null.|
| [`OddTest`](./classes/Twig/Node/Expression/Test/OddTest.md) | Checks if a number is odd.|
| [`SameasTest`](./classes/Twig/Node/Expression/Test/SameasTest.md) | Checks if a variable is the same as another one (=== in PHP).|

### \Twig\Node\Expression\Unary

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractUnary`](./classes/Twig/Node/Expression/Unary/AbstractUnary.md) | Abstract class for all nodes that represents an expression.|
| [`NegUnary`](./classes/Twig/Node/Expression/Unary/NegUnary.md) | Abstract class for all nodes that represents an expression.|
| [`NotUnary`](./classes/Twig/Node/Expression/Unary/NotUnary.md) | Abstract class for all nodes that represents an expression.|
| [`PosUnary`](./classes/Twig/Node/Expression/Unary/PosUnary.md) | Abstract class for all nodes that represents an expression.|

### \Twig\Profiler

#### Classes

| Class | Description |
|-------|-------------|
| [`Profile`](./classes/Twig/Profiler/Profile.md) | |

### \Twig\Profiler\Dumper

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseDumper`](./classes/Twig/Profiler/Dumper/BaseDumper.md) | |
| [`BlackfireDumper`](./classes/Twig/Profiler/Dumper/BlackfireDumper.md) | |
| [`HtmlDumper`](./classes/Twig/Profiler/Dumper/HtmlDumper.md) | |
| [`TextDumper`](./classes/Twig/Profiler/Dumper/TextDumper.md) | |

### \Twig\Profiler\Node

#### Classes

| Class | Description |
|-------|-------------|
| [`EnterProfileNode`](./classes/Twig/Profiler/Node/EnterProfileNode.md) | Represents a profile enter node.|
| [`LeaveProfileNode`](./classes/Twig/Profiler/Node/LeaveProfileNode.md) | Represents a profile leave node.|

### \Twig\Profiler\NodeVisitor

#### Classes

| Class | Description |
|-------|-------------|
| [`ProfilerNodeVisitor`](./classes/Twig/Profiler/NodeVisitor/ProfilerNodeVisitor.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|

### \Twig\RuntimeLoader

#### Classes

| Class | Description |
|-------|-------------|
| [`ContainerRuntimeLoader`](./classes/Twig/RuntimeLoader/ContainerRuntimeLoader.md) | Lazily loads Twig runtime implementations from a PSR-11 container.|
| [`FactoryRuntimeLoader`](./classes/Twig/RuntimeLoader/FactoryRuntimeLoader.md) | Lazy loads the runtime implementations for a Twig element.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`RuntimeLoaderInterface`](./classes/Twig/RuntimeLoader/RuntimeLoaderInterface.md) | Creates runtime implementations for Twig elements (filters/functions/tests).|

### \Twig\Sandbox

#### Classes

| Class | Description |
|-------|-------------|
| [`SecurityError`](./classes/Twig/Sandbox/SecurityError.md) | Exception thrown when a security error occurs at runtime.|
| [`SecurityNotAllowedFilterError`](./classes/Twig/Sandbox/SecurityNotAllowedFilterError.md) | Exception thrown when a not allowed filter is used in a template.|
| [`SecurityNotAllowedFunctionError`](./classes/Twig/Sandbox/SecurityNotAllowedFunctionError.md) | Exception thrown when a not allowed function is used in a template.|
| [`SecurityNotAllowedMethodError`](./classes/Twig/Sandbox/SecurityNotAllowedMethodError.md) | Exception thrown when a not allowed class method is used in a template.|
| [`SecurityNotAllowedPropertyError`](./classes/Twig/Sandbox/SecurityNotAllowedPropertyError.md) | Exception thrown when a not allowed class property is used in a template.|
| [`SecurityNotAllowedTagError`](./classes/Twig/Sandbox/SecurityNotAllowedTagError.md) | Exception thrown when a not allowed tag is used in a template.|
| [`SecurityPolicy`](./classes/Twig/Sandbox/SecurityPolicy.md) | Represents a security policy which need to be enforced when sandbox mode is enabled.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`SecurityPolicyInterface`](./classes/Twig/Sandbox/SecurityPolicyInterface.md) | Interface that all security policy classes must implements.|

### \Twig\Test

#### Classes

| Class | Description |
|-------|-------------|
| [`IntegrationTestCase`](./classes/Twig/Test/IntegrationTestCase.md) | Integration test helper.|
| [`NodeTestCase`](./classes/Twig/Test/NodeTestCase.md) | |

### \Twig\TokenParser

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractTokenParser`](./classes/Twig/TokenParser/AbstractTokenParser.md) | Base class for all token parsers.|
| [`ApplyTokenParser`](./classes/Twig/TokenParser/ApplyTokenParser.md) | Applies filters on a section of a template.|
| [`AutoEscapeTokenParser`](./classes/Twig/TokenParser/AutoEscapeTokenParser.md) | Marks a section of a template to be escaped or not.|
| [`BlockTokenParser`](./classes/Twig/TokenParser/BlockTokenParser.md) | Marks a section of a template as being reusable.|
| [`DeprecatedTokenParser`](./classes/Twig/TokenParser/DeprecatedTokenParser.md) | Deprecates a section of a template.|
| [`DoTokenParser`](./classes/Twig/TokenParser/DoTokenParser.md) | Evaluates an expression, discarding the returned value.|
| [`EmbedTokenParser`](./classes/Twig/TokenParser/EmbedTokenParser.md) | Embeds a template.|
| [`ExtendsTokenParser`](./classes/Twig/TokenParser/ExtendsTokenParser.md) | Extends a template by another one.|
| [`FilterTokenParser`](./classes/Twig/TokenParser/FilterTokenParser.md) | Filters a section of a template by applying filters.|
| [`FlushTokenParser`](./classes/Twig/TokenParser/FlushTokenParser.md) | Flushes the output to the client.|
| [`ForTokenParser`](./classes/Twig/TokenParser/ForTokenParser.md) | Loops over each item of a sequence.|
| [`FromTokenParser`](./classes/Twig/TokenParser/FromTokenParser.md) | Imports macros.|
| [`IfTokenParser`](./classes/Twig/TokenParser/IfTokenParser.md) | Tests a condition.|
| [`ImportTokenParser`](./classes/Twig/TokenParser/ImportTokenParser.md) | Imports macros.|
| [`IncludeTokenParser`](./classes/Twig/TokenParser/IncludeTokenParser.md) | Includes a template.|
| [`MacroTokenParser`](./classes/Twig/TokenParser/MacroTokenParser.md) | Defines a macro.|
| [`SandboxTokenParser`](./classes/Twig/TokenParser/SandboxTokenParser.md) | Marks a section of a template as untrusted code that must be evaluated in the sandbox mode.|
| [`SetTokenParser`](./classes/Twig/TokenParser/SetTokenParser.md) | Defines a variable.|
| [`SpacelessTokenParser`](./classes/Twig/TokenParser/SpacelessTokenParser.md) | Remove whitespaces between HTML tags.|
| [`UseTokenParser`](./classes/Twig/TokenParser/UseTokenParser.md) | Imports blocks defined in another template into the current template.|
| [`WithTokenParser`](./classes/Twig/TokenParser/WithTokenParser.md) | Creates a nested scope.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`TokenParserInterface`](./classes/Twig/TokenParser/TokenParserInterface.md) | Interface implemented by token parsers.|

### \Twig\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`DeprecationCollector`](./classes/Twig/Util/DeprecationCollector.md) | |
| [`TemplateDirIterator`](./classes/Twig/Util/TemplateDirIterator.md) | |

### \Webmozart\Assert

#### Classes

| Class | Description |
|-------|-------------|
| [`Assert`](./classes/Webmozart/Assert/Assert.md) | Efficient assertions to validate the input/output of your methods.|
| [`InvalidArgumentException`](./classes/Webmozart/Assert/InvalidArgumentException.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`Mixin`](./classes/Webmozart/Assert/Mixin.md) | This trait provides nurllOr*, all* and allNullOr* variants of assertion base methods.|

### \ZendBench\Stdlib

#### Classes

| Class | Description |
|-------|-------------|
| [`ExtractPriorityQueue`](./classes/ZendBench/Stdlib/ExtractPriorityQueue.md) | |
| [`InsertPriorityQueue`](./classes/ZendBench/Stdlib/InsertPriorityQueue.md) | |
| [`RemovePriorityQueue`](./classes/ZendBench/Stdlib/RemovePriorityQueue.md) | |

### \Zend\Cache

#### Classes

| Class | Description |
|-------|-------------|
| [`PatternFactory`](./classes/Zend/Cache/PatternFactory.md) | |
| [`PatternPluginManager`](./classes/Zend/Cache/PatternPluginManager.md) | Plugin manager implementation for cache pattern adapters|
| [`StorageFactory`](./classes/Zend/Cache/StorageFactory.md) | |

### \Zend\Cache\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](./classes/Zend/Cache/Exception/BadMethodCallException.md) | |
| [`ExtensionNotLoadedException`](./classes/Zend/Cache/Exception/ExtensionNotLoadedException.md) | |
| [`InvalidArgumentException`](./classes/Zend/Cache/Exception/InvalidArgumentException.md) | |
| [`LogicException`](./classes/Zend/Cache/Exception/LogicException.md) | |
| [`MissingDependencyException`](./classes/Zend/Cache/Exception/MissingDependencyException.md) | |
| [`MissingKeyException`](./classes/Zend/Cache/Exception/MissingKeyException.md) | |
| [`OutOfSpaceException`](./classes/Zend/Cache/Exception/OutOfSpaceException.md) | |
| [`RuntimeException`](./classes/Zend/Cache/Exception/RuntimeException.md) | |
| [`UnexpectedValueException`](./classes/Zend/Cache/Exception/UnexpectedValueException.md) | |
| [`UnsupportedMethodCallException`](./classes/Zend/Cache/Exception/UnsupportedMethodCallException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/Cache/Exception/ExceptionInterface.md) | |

### \Zend\Cache\Pattern

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractPattern`](./classes/Zend/Cache/Pattern/AbstractPattern.md) | |
| [`CallbackCache`](./classes/Zend/Cache/Pattern/CallbackCache.md) | |
| [`CaptureCache`](./classes/Zend/Cache/Pattern/CaptureCache.md) | |
| [`ClassCache`](./classes/Zend/Cache/Pattern/ClassCache.md) | |
| [`ObjectCache`](./classes/Zend/Cache/Pattern/ObjectCache.md) | |
| [`OutputCache`](./classes/Zend/Cache/Pattern/OutputCache.md) | |
| [`PatternOptions`](./classes/Zend/Cache/Pattern/PatternOptions.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`PatternInterface`](./classes/Zend/Cache/Pattern/PatternInterface.md) | |

### \Zend\Cache\Service

#### Classes

| Class | Description |
|-------|-------------|
| [`StorageCacheAbstractServiceFactory`](./classes/Zend/Cache/Service/StorageCacheAbstractServiceFactory.md) | Storage cache factory for multiple caches.|
| [`StorageCacheFactory`](./classes/Zend/Cache/Service/StorageCacheFactory.md) | Storage cache factory.|

### \Zend\Cache\Storage

#### Classes

| Class | Description |
|-------|-------------|
| [`AdapterPluginManager`](./classes/Zend/Cache/Storage/AdapterPluginManager.md) | Plugin manager implementation for cache storage adapters|
| [`Capabilities`](./classes/Zend/Cache/Storage/Capabilities.md) | |
| [`Event`](./classes/Zend/Cache/Storage/Event.md) | Representation of an event|
| [`ExceptionEvent`](./classes/Zend/Cache/Storage/ExceptionEvent.md) | Representation of an event|
| [`PluginManager`](./classes/Zend/Cache/Storage/PluginManager.md) | Plugin manager implementation for cache plugins|
| [`PostEvent`](./classes/Zend/Cache/Storage/PostEvent.md) | Representation of an event|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AvailableSpaceCapableInterface`](./classes/Zend/Cache/Storage/AvailableSpaceCapableInterface.md) | |
| [`ClearByNamespaceInterface`](./classes/Zend/Cache/Storage/ClearByNamespaceInterface.md) | |
| [`ClearByPrefixInterface`](./classes/Zend/Cache/Storage/ClearByPrefixInterface.md) | |
| [`ClearExpiredInterface`](./classes/Zend/Cache/Storage/ClearExpiredInterface.md) | |
| [`FlushableInterface`](./classes/Zend/Cache/Storage/FlushableInterface.md) | |
| [`IterableInterface`](./classes/Zend/Cache/Storage/IterableInterface.md) | |
| [`IteratorInterface`](./classes/Zend/Cache/Storage/IteratorInterface.md) | |
| [`OptimizableInterface`](./classes/Zend/Cache/Storage/OptimizableInterface.md) | |
| [`StorageInterface`](./classes/Zend/Cache/Storage/StorageInterface.md) | |
| [`TaggableInterface`](./classes/Zend/Cache/Storage/TaggableInterface.md) | |
| [`TotalSpaceCapableInterface`](./classes/Zend/Cache/Storage/TotalSpaceCapableInterface.md) | |

### \Zend\Cache\Storage\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractAdapter`](./classes/Zend/Cache/Storage/Adapter/AbstractAdapter.md) | |
| [`AbstractZendServer`](./classes/Zend/Cache/Storage/Adapter/AbstractZendServer.md) | |
| [`AdapterOptions`](./classes/Zend/Cache/Storage/Adapter/AdapterOptions.md) | Unless otherwise marked, all options in this class affect all adapters.|
| [`Apc`](./classes/Zend/Cache/Storage/Adapter/Apc.md) | |
| [`ApcIterator`](./classes/Zend/Cache/Storage/Adapter/ApcIterator.md) | |
| [`ApcOptions`](./classes/Zend/Cache/Storage/Adapter/ApcOptions.md) | These are options specific to the APC adapter|
| [`BlackHole`](./classes/Zend/Cache/Storage/Adapter/BlackHole.md) | |
| [`Dba`](./classes/Zend/Cache/Storage/Adapter/Dba.md) | |
| [`DbaIterator`](./classes/Zend/Cache/Storage/Adapter/DbaIterator.md) | |
| [`DbaOptions`](./classes/Zend/Cache/Storage/Adapter/DbaOptions.md) | These are options specific to the APC adapter|
| [`Filesystem`](./classes/Zend/Cache/Storage/Adapter/Filesystem.md) | |
| [`FilesystemIterator`](./classes/Zend/Cache/Storage/Adapter/FilesystemIterator.md) | |
| [`FilesystemOptions`](./classes/Zend/Cache/Storage/Adapter/FilesystemOptions.md) | These are options specific to the Filesystem adapter|
| [`KeyListIterator`](./classes/Zend/Cache/Storage/Adapter/KeyListIterator.md) | |
| [`Memcache`](./classes/Zend/Cache/Storage/Adapter/Memcache.md) | |
| [`MemcacheOptions`](./classes/Zend/Cache/Storage/Adapter/MemcacheOptions.md) | These are options specific to the Memcache adapter|
| [`MemcacheResourceManager`](./classes/Zend/Cache/Storage/Adapter/MemcacheResourceManager.md) | This is a resource manager for memcache|
| [`Memcached`](./classes/Zend/Cache/Storage/Adapter/Memcached.md) | |
| [`MemcachedOptions`](./classes/Zend/Cache/Storage/Adapter/MemcachedOptions.md) | These are options specific to the Memcached adapter|
| [`MemcachedResourceManager`](./classes/Zend/Cache/Storage/Adapter/MemcachedResourceManager.md) | This is a resource manager for memcached|
| [`Memory`](./classes/Zend/Cache/Storage/Adapter/Memory.md) | |
| [`MemoryOptions`](./classes/Zend/Cache/Storage/Adapter/MemoryOptions.md) | These are options specific to the APC adapter|
| [`MongoDb`](./classes/Zend/Cache/Storage/Adapter/MongoDb.md) | |
| [`MongoDbOptions`](./classes/Zend/Cache/Storage/Adapter/MongoDbOptions.md) | Unless otherwise marked, all options in this class affect all adapters.|
| [`MongoDbResourceManager`](./classes/Zend/Cache/Storage/Adapter/MongoDbResourceManager.md) | |
| [`Redis`](./classes/Zend/Cache/Storage/Adapter/Redis.md) | |
| [`RedisOptions`](./classes/Zend/Cache/Storage/Adapter/RedisOptions.md) | Unless otherwise marked, all options in this class affect all adapters.|
| [`RedisResourceManager`](./classes/Zend/Cache/Storage/Adapter/RedisResourceManager.md) | This is a resource manager for redis|
| [`Session`](./classes/Zend/Cache/Storage/Adapter/Session.md) | |
| [`SessionOptions`](./classes/Zend/Cache/Storage/Adapter/SessionOptions.md) | These are options specific to the APC adapter|
| [`WinCache`](./classes/Zend/Cache/Storage/Adapter/WinCache.md) | |
| [`WinCacheOptions`](./classes/Zend/Cache/Storage/Adapter/WinCacheOptions.md) | These are options specific to the APC adapter|
| [`XCache`](./classes/Zend/Cache/Storage/Adapter/XCache.md) | |
| [`XCacheOptions`](./classes/Zend/Cache/Storage/Adapter/XCacheOptions.md) | These are options specific to the XCache adapter|
| [`ZendServerDisk`](./classes/Zend/Cache/Storage/Adapter/ZendServerDisk.md) | |
| [`ZendServerShm`](./classes/Zend/Cache/Storage/Adapter/ZendServerShm.md) | |

### \Zend\Cache\Storage\Plugin

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractPlugin`](./classes/Zend/Cache/Storage/Plugin/AbstractPlugin.md) | Abstract aggregate listener|
| [`ClearExpiredByFactor`](./classes/Zend/Cache/Storage/Plugin/ClearExpiredByFactor.md) | Abstract aggregate listener|
| [`ExceptionHandler`](./classes/Zend/Cache/Storage/Plugin/ExceptionHandler.md) | Abstract aggregate listener|
| [`IgnoreUserAbort`](./classes/Zend/Cache/Storage/Plugin/IgnoreUserAbort.md) | Abstract aggregate listener|
| [`OptimizeByFactor`](./classes/Zend/Cache/Storage/Plugin/OptimizeByFactor.md) | Abstract aggregate listener|
| [`PluginOptions`](./classes/Zend/Cache/Storage/Plugin/PluginOptions.md) | |
| [`Serializer`](./classes/Zend/Cache/Storage/Plugin/Serializer.md) | Abstract aggregate listener|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`PluginInterface`](./classes/Zend/Cache/Storage/Plugin/PluginInterface.md) | Interface for self-registering event listeners.|

### \Zend\Config

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractConfigFactory`](./classes/Zend/Config/AbstractConfigFactory.md) | Class AbstractConfigFactory|
| [`Config`](./classes/Zend/Config/Config.md) | Provides a property based interface to an array.|
| [`Factory`](./classes/Zend/Config/Factory.md) | |
| [`ReaderPluginManager`](./classes/Zend/Config/ReaderPluginManager.md) | ServiceManager implementation for managing plugins|
| [`WriterPluginManager`](./classes/Zend/Config/WriterPluginManager.md) | ServiceManager implementation for managing plugins|

### \Zend\Config\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`InvalidArgumentException`](./classes/Zend/Config/Exception/InvalidArgumentException.md) | |
| [`RuntimeException`](./classes/Zend/Config/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/Config/Exception/ExceptionInterface.md) | |

### \Zend\Config\Processor

#### Classes

| Class | Description |
|-------|-------------|
| [`Constant`](./classes/Zend/Config/Processor/Constant.md) | |
| [`Filter`](./classes/Zend/Config/Processor/Filter.md) | |
| [`Queue`](./classes/Zend/Config/Processor/Queue.md) | Re-usable, serializable priority queue implementation|
| [`Token`](./classes/Zend/Config/Processor/Token.md) | |
| [`Translator`](./classes/Zend/Config/Processor/Translator.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ProcessorInterface`](./classes/Zend/Config/Processor/ProcessorInterface.md) | |

### \Zend\Config\Reader

#### Classes

| Class | Description |
|-------|-------------|
| [`Ini`](./classes/Zend/Config/Reader/Ini.md) | INI config reader.|
| [`JavaProperties`](./classes/Zend/Config/Reader/JavaProperties.md) | Java-style properties config reader.|
| [`Json`](./classes/Zend/Config/Reader/Json.md) | JSON config reader.|
| [`Xml`](./classes/Zend/Config/Reader/Xml.md) | XML config reader.|
| [`Yaml`](./classes/Zend/Config/Reader/Yaml.md) | YAML config reader.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ReaderInterface`](./classes/Zend/Config/Reader/ReaderInterface.md) | |

### \Zend\Config\Writer

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractWriter`](./classes/Zend/Config/Writer/AbstractWriter.md) | |
| [`Ini`](./classes/Zend/Config/Writer/Ini.md) | |
| [`Json`](./classes/Zend/Config/Writer/Json.md) | |
| [`PhpArray`](./classes/Zend/Config/Writer/PhpArray.md) | |
| [`Xml`](./classes/Zend/Config/Writer/Xml.md) | |
| [`Yaml`](./classes/Zend/Config/Writer/Yaml.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`WriterInterface`](./classes/Zend/Config/Writer/WriterInterface.md) | |

### \Zend\EventManager

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractListenerAggregate`](./classes/Zend/EventManager/AbstractListenerAggregate.md) | Abstract aggregate listener|
| [`Event`](./classes/Zend/EventManager/Event.md) | Representation of an event|
| [`EventManager`](./classes/Zend/EventManager/EventManager.md) | Event manager: notification system|
| [`FilterChain`](./classes/Zend/EventManager/FilterChain.md) | FilterChain: intercepting filter manager|
| [`GlobalEventManager`](./classes/Zend/EventManager/GlobalEventManager.md) | Event manager: notification system|
| [`ResponseCollection`](./classes/Zend/EventManager/ResponseCollection.md) | Collection of signal handler return values|
| [`SharedEventManager`](./classes/Zend/EventManager/SharedEventManager.md) | Shared/contextual EventManager|
| [`StaticEventManager`](./classes/Zend/EventManager/StaticEventManager.md) | Static version of EventManager|

#### Traits

| Trait | Description |
|-------|-------------|
| [`EventManagerAwareTrait`](./classes/Zend/EventManager/EventManagerAwareTrait.md) | A trait for objects that provide events.|
| [`ListenerAggregateTrait`](./classes/Zend/EventManager/ListenerAggregateTrait.md) | Provides logic to easily create aggregate listeners, without worrying about<br />manually detaching events|
| [`ProvidesEvents`](./classes/Zend/EventManager/ProvidesEvents.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`EventInterface`](./classes/Zend/EventManager/EventInterface.md) | Representation of an event|
| [`EventManagerAwareInterface`](./classes/Zend/EventManager/EventManagerAwareInterface.md) | Interface to automate setter injection for an EventManager instance|
| [`EventManagerInterface`](./classes/Zend/EventManager/EventManagerInterface.md) | Interface for messengers|
| [`EventsCapableInterface`](./classes/Zend/EventManager/EventsCapableInterface.md) | Interface providing events that can be attached, detached and triggered.|
| [`ListenerAggregateInterface`](./classes/Zend/EventManager/ListenerAggregateInterface.md) | Interface for self-registering event listeners.|
| [`SharedEventAggregateAwareInterface`](./classes/Zend/EventManager/SharedEventAggregateAwareInterface.md) | Interface for allowing attachment of shared aggregate listeners.|
| [`SharedEventManagerAwareInterface`](./classes/Zend/EventManager/SharedEventManagerAwareInterface.md) | Interface to automate setter injection for a SharedEventManagerInterface instance|
| [`SharedEventManagerInterface`](./classes/Zend/EventManager/SharedEventManagerInterface.md) | Interface for shared event listener collections|
| [`SharedEventsCapableInterface`](./classes/Zend/EventManager/SharedEventsCapableInterface.md) | Interface indicating that an object composes or can compose a<br />SharedEventManagerInterface instance.|
| [`SharedListenerAggregateInterface`](./classes/Zend/EventManager/SharedListenerAggregateInterface.md) | Interface for self-registering event listeners.|

### \Zend\EventManager\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`DomainException`](./classes/Zend/EventManager/Exception/DomainException.md) | |
| [`InvalidArgumentException`](./classes/Zend/EventManager/Exception/InvalidArgumentException.md) | Invalid argument exception|
| [`InvalidCallbackException`](./classes/Zend/EventManager/Exception/InvalidCallbackException.md) | Invalid callback exception|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/EventManager/Exception/ExceptionInterface.md) | Base exception interface|

### \Zend\EventManager\Filter

#### Classes

| Class | Description |
|-------|-------------|
| [`FilterIterator`](./classes/Zend/EventManager/Filter/FilterIterator.md) | Specialized priority queue implementation for use with an intercepting<br />filter chain.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FilterInterface`](./classes/Zend/EventManager/Filter/FilterInterface.md) | Interface for intercepting filter chains|

### \Zend\EventManager\Test

#### Traits

| Trait | Description |
|-------|-------------|
| [`EventListenerIntrospectionTrait`](./classes/Zend/EventManager/Test/EventListenerIntrospectionTrait.md) | Trait providing utility methods and assertions for use in PHPUnit test cases.|

### \Zend\Filter

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractDateDropdown`](./classes/Zend/Filter/AbstractDateDropdown.md) | |
| [`AbstractFilter`](./classes/Zend/Filter/AbstractFilter.md) | |
| [`AbstractUnicode`](./classes/Zend/Filter/AbstractUnicode.md) | |
| [`BaseName`](./classes/Zend/Filter/BaseName.md) | |
| [`Blacklist`](./classes/Zend/Filter/Blacklist.md) | |
| [`Boolean`](./classes/Zend/Filter/Boolean.md) | |
| [`Callback`](./classes/Zend/Filter/Callback.md) | |
| [`Compress`](./classes/Zend/Filter/Compress.md) | Compresses a given string|
| [`DataUnitFormatter`](./classes/Zend/Filter/DataUnitFormatter.md) | |
| [`DateSelect`](./classes/Zend/Filter/DateSelect.md) | |
| [`DateTimeFormatter`](./classes/Zend/Filter/DateTimeFormatter.md) | |
| [`DateTimeSelect`](./classes/Zend/Filter/DateTimeSelect.md) | |
| [`Decompress`](./classes/Zend/Filter/Decompress.md) | Decompresses a given string|
| [`Decrypt`](./classes/Zend/Filter/Decrypt.md) | Decrypts a given string|
| [`Digits`](./classes/Zend/Filter/Digits.md) | |
| [`Dir`](./classes/Zend/Filter/Dir.md) | |
| [`Encrypt`](./classes/Zend/Filter/Encrypt.md) | Encrypts a given string|
| [`FilterChain`](./classes/Zend/Filter/FilterChain.md) | |
| [`FilterPluginManager`](./classes/Zend/Filter/FilterPluginManager.md) | Plugin manager implementation for the filter chain.|
| [`HtmlEntities`](./classes/Zend/Filter/HtmlEntities.md) | |
| [`Inflector`](./classes/Zend/Filter/Inflector.md) | Filter chain for string inflection|
| [`Int`](./classes/Zend/Filter/Int.md) | Stub class for backwards compatibility.|
| [`MonthSelect`](./classes/Zend/Filter/MonthSelect.md) | |
| [`Null`](./classes/Zend/Filter/Null.md) | Stub class for backwards compatibility.|
| [`PregReplace`](./classes/Zend/Filter/PregReplace.md) | |
| [`RealPath`](./classes/Zend/Filter/RealPath.md) | |
| [`StaticFilter`](./classes/Zend/Filter/StaticFilter.md) | |
| [`StringToLower`](./classes/Zend/Filter/StringToLower.md) | |
| [`StringToUpper`](./classes/Zend/Filter/StringToUpper.md) | |
| [`StringTrim`](./classes/Zend/Filter/StringTrim.md) | |
| [`StripNewlines`](./classes/Zend/Filter/StripNewlines.md) | |
| [`StripTags`](./classes/Zend/Filter/StripTags.md) | |
| [`ToInt`](./classes/Zend/Filter/ToInt.md) | |
| [`ToNull`](./classes/Zend/Filter/ToNull.md) | |
| [`UpperCaseWords`](./classes/Zend/Filter/UpperCaseWords.md) | |
| [`UriNormalize`](./classes/Zend/Filter/UriNormalize.md) | |
| [`Whitelist`](./classes/Zend/Filter/Whitelist.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FilterInterface`](./classes/Zend/Filter/FilterInterface.md) | |

### \Zend\Filter\Compress

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractCompressionAlgorithm`](./classes/Zend/Filter/Compress/AbstractCompressionAlgorithm.md) | Abstract compression adapter|
| [`Bz2`](./classes/Zend/Filter/Compress/Bz2.md) | Compression adapter for Bz2|
| [`Gz`](./classes/Zend/Filter/Compress/Gz.md) | Compression adapter for Gzip (ZLib)|
| [`Lzf`](./classes/Zend/Filter/Compress/Lzf.md) | Compression adapter for Lzf|
| [`Rar`](./classes/Zend/Filter/Compress/Rar.md) | Compression adapter for Rar|
| [`Snappy`](./classes/Zend/Filter/Compress/Snappy.md) | Compression adapter for php snappy (http://code.google.com/p/php-snappy/)|
| [`Tar`](./classes/Zend/Filter/Compress/Tar.md) | Compression adapter for Tar|
| [`Zip`](./classes/Zend/Filter/Compress/Zip.md) | Compression adapter for zip|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CompressionAlgorithmInterface`](./classes/Zend/Filter/Compress/CompressionAlgorithmInterface.md) | Compression interface|

### \Zend\Filter\Encrypt

#### Classes

| Class | Description |
|-------|-------------|
| [`BlockCipher`](./classes/Zend/Filter/Encrypt/BlockCipher.md) | Encryption adapter for Zend\Crypt\BlockCipher|
| [`Openssl`](./classes/Zend/Filter/Encrypt/Openssl.md) | Encryption adapter for openssl|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`EncryptionAlgorithmInterface`](./classes/Zend/Filter/Encrypt/EncryptionAlgorithmInterface.md) | Encryption interface|

### \Zend\Filter\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](./classes/Zend/Filter/Exception/BadMethodCallException.md) | |
| [`DomainException`](./classes/Zend/Filter/Exception/DomainException.md) | |
| [`ExtensionNotLoadedException`](./classes/Zend/Filter/Exception/ExtensionNotLoadedException.md) | |
| [`InvalidArgumentException`](./classes/Zend/Filter/Exception/InvalidArgumentException.md) | |
| [`RuntimeException`](./classes/Zend/Filter/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/Filter/Exception/ExceptionInterface.md) | |

### \Zend\Filter\File

#### Classes

| Class | Description |
|-------|-------------|
| [`Decrypt`](./classes/Zend/Filter/File/Decrypt.md) | Decrypts a given file and stores the decrypted file content|
| [`Encrypt`](./classes/Zend/Filter/File/Encrypt.md) | Encrypts a given file and stores the encrypted file content|
| [`LowerCase`](./classes/Zend/Filter/File/LowerCase.md) | |
| [`Rename`](./classes/Zend/Filter/File/Rename.md) | |
| [`RenameUpload`](./classes/Zend/Filter/File/RenameUpload.md) | |
| [`UpperCase`](./classes/Zend/Filter/File/UpperCase.md) | |

### \Zend\Filter\Word

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractSeparator`](./classes/Zend/Filter/Word/AbstractSeparator.md) | |
| [`CamelCaseToDash`](./classes/Zend/Filter/Word/CamelCaseToDash.md) | |
| [`CamelCaseToSeparator`](./classes/Zend/Filter/Word/CamelCaseToSeparator.md) | |
| [`CamelCaseToUnderscore`](./classes/Zend/Filter/Word/CamelCaseToUnderscore.md) | |
| [`DashToCamelCase`](./classes/Zend/Filter/Word/DashToCamelCase.md) | |
| [`DashToSeparator`](./classes/Zend/Filter/Word/DashToSeparator.md) | |
| [`DashToUnderscore`](./classes/Zend/Filter/Word/DashToUnderscore.md) | |
| [`SeparatorToCamelCase`](./classes/Zend/Filter/Word/SeparatorToCamelCase.md) | |
| [`SeparatorToDash`](./classes/Zend/Filter/Word/SeparatorToDash.md) | |
| [`SeparatorToSeparator`](./classes/Zend/Filter/Word/SeparatorToSeparator.md) | |
| [`UnderscoreToCamelCase`](./classes/Zend/Filter/Word/UnderscoreToCamelCase.md) | |
| [`UnderscoreToDash`](./classes/Zend/Filter/Word/UnderscoreToDash.md) | |
| [`UnderscoreToSeparator`](./classes/Zend/Filter/Word/UnderscoreToSeparator.md) | |
| [`UnderscoreToStudlyCase`](./classes/Zend/Filter/Word/UnderscoreToStudlyCase.md) | |

### \Zend\Filter\Word\Service

#### Classes

| Class | Description |
|-------|-------------|
| [`SeparatorToSeparatorFactory`](./classes/Zend/Filter/Word/Service/SeparatorToSeparatorFactory.md) | |

### \Zend\Hydrator

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractHydrator`](./classes/Zend/Hydrator/AbstractHydrator.md) | |
| [`ArraySerializable`](./classes/Zend/Hydrator/ArraySerializable.md) | |
| [`ClassMethods`](./classes/Zend/Hydrator/ClassMethods.md) | |
| [`DelegatingHydrator`](./classes/Zend/Hydrator/DelegatingHydrator.md) | |
| [`DelegatingHydratorFactory`](./classes/Zend/Hydrator/DelegatingHydratorFactory.md) | |
| [`HydratorPluginManager`](./classes/Zend/Hydrator/HydratorPluginManager.md) | Plugin manager implementation for hydrators.|
| [`ObjectProperty`](./classes/Zend/Hydrator/ObjectProperty.md) | |
| [`Reflection`](./classes/Zend/Hydrator/Reflection.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`HydratorAwareTrait`](./classes/Zend/Hydrator/HydratorAwareTrait.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExtractionInterface`](./classes/Zend/Hydrator/ExtractionInterface.md) | |
| [`FilterEnabledInterface`](./classes/Zend/Hydrator/FilterEnabledInterface.md) | |
| [`HydrationInterface`](./classes/Zend/Hydrator/HydrationInterface.md) | |
| [`HydratorAwareInterface`](./classes/Zend/Hydrator/HydratorAwareInterface.md) | |
| [`HydratorInterface`](./classes/Zend/Hydrator/HydratorInterface.md) | |
| [`HydratorOptionsInterface`](./classes/Zend/Hydrator/HydratorOptionsInterface.md) | |
| [`NamingStrategyEnabledInterface`](./classes/Zend/Hydrator/NamingStrategyEnabledInterface.md) | |
| [`StrategyEnabledInterface`](./classes/Zend/Hydrator/StrategyEnabledInterface.md) | |

### \Zend\Hydrator\Aggregate

#### Classes

| Class | Description |
|-------|-------------|
| [`AggregateHydrator`](./classes/Zend/Hydrator/Aggregate/AggregateHydrator.md) | Aggregate hydrator that composes multiple hydrators via events|
| [`ExtractEvent`](./classes/Zend/Hydrator/Aggregate/ExtractEvent.md) | Event triggered when the {@see AggregateHydrator} extracts<br />data from an object|
| [`HydrateEvent`](./classes/Zend/Hydrator/Aggregate/HydrateEvent.md) | Event triggered when the {@see AggregateHydrator} hydrates<br />data into an object|
| [`HydratorListener`](./classes/Zend/Hydrator/Aggregate/HydratorListener.md) | Aggregate listener wrapping around a hydrator.|

### \Zend\Hydrator\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](./classes/Zend/Hydrator/Exception/BadMethodCallException.md) | Bad method call exception|
| [`DomainException`](./classes/Zend/Hydrator/Exception/DomainException.md) | Domain exception|
| [`ExtensionNotLoadedException`](./classes/Zend/Hydrator/Exception/ExtensionNotLoadedException.md) | Extension not loaded exception|
| [`InvalidArgumentException`](./classes/Zend/Hydrator/Exception/InvalidArgumentException.md) | Invalid Argument Exception|
| [`InvalidCallbackException`](./classes/Zend/Hydrator/Exception/InvalidCallbackException.md) | Invalid callback exception|
| [`LogicException`](./classes/Zend/Hydrator/Exception/LogicException.md) | Logic exception|
| [`RuntimeException`](./classes/Zend/Hydrator/Exception/RuntimeException.md) | Runtime exception|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/Hydrator/Exception/ExceptionInterface.md) | Exception marker interface|

### \Zend\Hydrator\Filter

#### Classes

| Class | Description |
|-------|-------------|
| [`FilterComposite`](./classes/Zend/Hydrator/Filter/FilterComposite.md) | |
| [`GetFilter`](./classes/Zend/Hydrator/Filter/GetFilter.md) | |
| [`HasFilter`](./classes/Zend/Hydrator/Filter/HasFilter.md) | |
| [`IsFilter`](./classes/Zend/Hydrator/Filter/IsFilter.md) | |
| [`MethodMatchFilter`](./classes/Zend/Hydrator/Filter/MethodMatchFilter.md) | |
| [`NumberOfParameterFilter`](./classes/Zend/Hydrator/Filter/NumberOfParameterFilter.md) | |
| [`OptionalParametersFilter`](./classes/Zend/Hydrator/Filter/OptionalParametersFilter.md) | Filter that includes methods which have no parameters or only optional parameters|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FilterInterface`](./classes/Zend/Hydrator/Filter/FilterInterface.md) | |
| [`FilterProviderInterface`](./classes/Zend/Hydrator/Filter/FilterProviderInterface.md) | |

### \Zend\Hydrator\Iterator

#### Classes

| Class | Description |
|-------|-------------|
| [`HydratingArrayIterator`](./classes/Zend/Hydrator/Iterator/HydratingArrayIterator.md) | |
| [`HydratingIteratorIterator`](./classes/Zend/Hydrator/Iterator/HydratingIteratorIterator.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`HydratingIteratorInterface`](./classes/Zend/Hydrator/Iterator/HydratingIteratorInterface.md) | |

### \Zend\Hydrator\NamingStrategy

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayMapNamingStrategy`](./classes/Zend/Hydrator/NamingStrategy/ArrayMapNamingStrategy.md) | |
| [`CompositeNamingStrategy`](./classes/Zend/Hydrator/NamingStrategy/CompositeNamingStrategy.md) | |
| [`IdentityNamingStrategy`](./classes/Zend/Hydrator/NamingStrategy/IdentityNamingStrategy.md) | |
| [`MapNamingStrategy`](./classes/Zend/Hydrator/NamingStrategy/MapNamingStrategy.md) | |
| [`UnderscoreNamingStrategy`](./classes/Zend/Hydrator/NamingStrategy/UnderscoreNamingStrategy.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`NamingStrategyInterface`](./classes/Zend/Hydrator/NamingStrategy/NamingStrategyInterface.md) | Allow property extraction / hydration for hydrator|

### \Zend\Hydrator\Strategy

#### Classes

| Class | Description |
|-------|-------------|
| [`BooleanStrategy`](./classes/Zend/Hydrator/Strategy/BooleanStrategy.md) | This Strategy extracts and hydrates int and string values to Boolean values|
| [`ClosureStrategy`](./classes/Zend/Hydrator/Strategy/ClosureStrategy.md) | |
| [`DateTimeFormatterStrategy`](./classes/Zend/Hydrator/Strategy/DateTimeFormatterStrategy.md) | |
| [`DefaultStrategy`](./classes/Zend/Hydrator/Strategy/DefaultStrategy.md) | |
| [`ExplodeStrategy`](./classes/Zend/Hydrator/Strategy/ExplodeStrategy.md) | |
| [`SerializableStrategy`](./classes/Zend/Hydrator/Strategy/SerializableStrategy.md) | |
| [`StrategyChain`](./classes/Zend/Hydrator/Strategy/StrategyChain.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`StrategyInterface`](./classes/Zend/Hydrator/Strategy/StrategyInterface.md) | |

### \Zend\Hydrator\Strategy\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`InvalidArgumentException`](./classes/Zend/Hydrator/Strategy/Exception/InvalidArgumentException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/Hydrator/Strategy/Exception/ExceptionInterface.md) | |

### \Zend\I18n\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`ExtensionNotLoadedException`](./classes/Zend/I18n/Exception/ExtensionNotLoadedException.md) | |
| [`InvalidArgumentException`](./classes/Zend/I18n/Exception/InvalidArgumentException.md) | |
| [`OutOfBoundsException`](./classes/Zend/I18n/Exception/OutOfBoundsException.md) | |
| [`ParseException`](./classes/Zend/I18n/Exception/ParseException.md) | |
| [`RangeException`](./classes/Zend/I18n/Exception/RangeException.md) | |
| [`RuntimeException`](./classes/Zend/I18n/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/I18n/Exception/ExceptionInterface.md) | |

### \Zend\I18n\Filter

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractLocale`](./classes/Zend/I18n/Filter/AbstractLocale.md) | |
| [`Alnum`](./classes/Zend/I18n/Filter/Alnum.md) | |
| [`Alpha`](./classes/Zend/I18n/Filter/Alpha.md) | |
| [`NumberFormat`](./classes/Zend/I18n/Filter/NumberFormat.md) | |
| [`NumberParse`](./classes/Zend/I18n/Filter/NumberParse.md) | |

### \Zend\I18n\Translator

#### Classes

| Class | Description |
|-------|-------------|
| [`LoaderPluginManager`](./classes/Zend/I18n/Translator/LoaderPluginManager.md) | Plugin manager implementation for translation loaders.|
| [`TextDomain`](./classes/Zend/I18n/Translator/TextDomain.md) | Text domain.|
| [`Translator`](./classes/Zend/I18n/Translator/Translator.md) | Translator.|
| [`TranslatorServiceFactory`](./classes/Zend/I18n/Translator/TranslatorServiceFactory.md) | Translator.|

#### Traits

| Trait | Description |
|-------|-------------|
| [`TranslatorAwareTrait`](./classes/Zend/I18n/Translator/TranslatorAwareTrait.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`TranslatorAwareInterface`](./classes/Zend/I18n/Translator/TranslatorAwareInterface.md) | |
| [`TranslatorInterface`](./classes/Zend/I18n/Translator/TranslatorInterface.md) | Translator interface.|

### \Zend\I18n\Translator\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractFileLoader`](./classes/Zend/I18n/Translator/Loader/AbstractFileLoader.md) | Abstract file loader implementation; provides facilities around resolving<br />files via the include_path.|
| [`Gettext`](./classes/Zend/I18n/Translator/Loader/Gettext.md) | Gettext loader.|
| [`Ini`](./classes/Zend/I18n/Translator/Loader/Ini.md) | PHP INI format loader.|
| [`PhpArray`](./classes/Zend/I18n/Translator/Loader/PhpArray.md) | PHP array loader.|
| [`PhpMemoryArray`](./classes/Zend/I18n/Translator/Loader/PhpMemoryArray.md) | PHP Memory array loader.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FileLoaderInterface`](./classes/Zend/I18n/Translator/Loader/FileLoaderInterface.md) | File loader interface.|
| [`RemoteLoaderInterface`](./classes/Zend/I18n/Translator/Loader/RemoteLoaderInterface.md) | Remote loader interface.|

### \Zend\I18n\Translator\Plural

#### Classes

| Class | Description |
|-------|-------------|
| [`Parser`](./classes/Zend/I18n/Translator/Plural/Parser.md) | Plural rule parser.|
| [`Rule`](./classes/Zend/I18n/Translator/Plural/Rule.md) | Plural rule evaluator.|
| [`Symbol`](./classes/Zend/I18n/Translator/Plural/Symbol.md) | Parser symbol.|

### \Zend\I18n\Validator

#### Classes

| Class | Description |
|-------|-------------|
| [`Alnum`](./classes/Zend/I18n/Validator/Alnum.md) | |
| [`Alpha`](./classes/Zend/I18n/Validator/Alpha.md) | |
| [`DateTime`](./classes/Zend/I18n/Validator/DateTime.md) | |
| [`Float`](./classes/Zend/I18n/Validator/Float.md) | Stub class for backwards compatibility.|
| [`Int`](./classes/Zend/I18n/Validator/Int.md) | Stub class for backwards compatibility.|
| [`IsFloat`](./classes/Zend/I18n/Validator/IsFloat.md) | |
| [`IsInt`](./classes/Zend/I18n/Validator/IsInt.md) | |
| [`PhoneNumber`](./classes/Zend/I18n/Validator/PhoneNumber.md) | |
| [`PostCode`](./classes/Zend/I18n/Validator/PostCode.md) | |

### \Zend\I18n\View

#### Classes

| Class | Description |
|-------|-------------|
| [`HelperConfig`](./classes/Zend/I18n/View/HelperConfig.md) | Service manager configuration for i18n view helpers.|

### \Zend\I18n\View\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractTranslatorHelper`](./classes/Zend/I18n/View/Helper/AbstractTranslatorHelper.md) | |
| [`CurrencyFormat`](./classes/Zend/I18n/View/Helper/CurrencyFormat.md) | View helper for formatting currency.|
| [`DateFormat`](./classes/Zend/I18n/View/Helper/DateFormat.md) | View helper for formatting dates.|
| [`NumberFormat`](./classes/Zend/I18n/View/Helper/NumberFormat.md) | View helper for formatting dates.|
| [`Plural`](./classes/Zend/I18n/View/Helper/Plural.md) | Helper for rendering text based on a count number (like the I18n plural translation helper, but when translation<br />is not needed).|
| [`Translate`](./classes/Zend/I18n/View/Helper/Translate.md) | View helper for translating messages.|
| [`TranslatePlural`](./classes/Zend/I18n/View/Helper/TranslatePlural.md) | View helper for translating plural messages.|

### \Zend\Json

#### Classes

| Class | Description |
|-------|-------------|
| [`Decoder`](./classes/Zend/Json/Decoder.md) | Decode JSON encoded string to PHP variable constructs|
| [`Encoder`](./classes/Zend/Json/Encoder.md) | Encode PHP constructs to JSON|
| [`Expr`](./classes/Zend/Json/Expr.md) | Class for Zend\Json\Json encode method.|
| [`Json`](./classes/Zend/Json/Json.md) | Class for encoding to and decoding from JSON.|

### \Zend\Json\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](./classes/Zend/Json/Exception/BadMethodCallException.md) | |
| [`InvalidArgumentException`](./classes/Zend/Json/Exception/InvalidArgumentException.md) | |
| [`RecursionException`](./classes/Zend/Json/Exception/RecursionException.md) | |
| [`RuntimeException`](./classes/Zend/Json/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/Json/Exception/ExceptionInterface.md) | |

### \Zend\Json\Server

#### Classes

| Class | Description |
|-------|-------------|
| [`Cache`](./classes/Zend/Json/Server/Cache.md) | Zend\Json\Server\Cache: cache Zend\Json\Server\Server server definition and SMD|
| [`Client`](./classes/Zend/Json/Server/Client.md) | |
| [`Error`](./classes/Zend/Json/Server/Error.md) | |
| [`Request`](./classes/Zend/Json/Server/Request.md) | |
| [`Response`](./classes/Zend/Json/Server/Response.md) | |
| [`Server`](./classes/Zend/Json/Server/Server.md) | |
| [`Smd`](./classes/Zend/Json/Server/Smd.md) | |

### \Zend\Json\Server\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`ErrorException`](./classes/Zend/Json/Server/Exception/ErrorException.md) | Thrown by Zend\Json\Server\Client when a JSON-RPC fault response is returned.|
| [`HttpException`](./classes/Zend/Json/Server/Exception/HttpException.md) | Thrown by Zend\Json\Server\Client when an HTTP error occurs during an<br />JSON-RPC method call.|
| [`InvalidArgumentException`](./classes/Zend/Json/Server/Exception/InvalidArgumentException.md) | |
| [`RuntimeException`](./classes/Zend/Json/Server/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/Json/Server/Exception/ExceptionInterface.md) | |

### \Zend\Json\Server\Request

#### Classes

| Class | Description |
|-------|-------------|
| [`Http`](./classes/Zend/Json/Server/Request/Http.md) | |

### \Zend\Json\Server\Response

#### Classes

| Class | Description |
|-------|-------------|
| [`Http`](./classes/Zend/Json/Server/Response/Http.md) | |

### \Zend\Json\Server\Smd

#### Classes

| Class | Description |
|-------|-------------|
| [`Service`](./classes/Zend/Json/Server/Smd/Service.md) | Create Service Mapping Description for a method|

### \Zend\Math

#### Classes

| Class | Description |
|-------|-------------|
| [`Rand`](./classes/Zend/Math/Rand.md) | Pseudorandom number generator (PRNG)|

### \Zend\Math\BigInteger

#### Classes

| Class | Description |
|-------|-------------|
| [`AdapterPluginManager`](./classes/Zend/Math/BigInteger/AdapterPluginManager.md) | Plugin manager implementation for BigInteger adapters.|
| [`BigInteger`](./classes/Zend/Math/BigInteger/BigInteger.md) | |

### \Zend\Math\BigInteger\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`Bcmath`](./classes/Zend/Math/BigInteger/Adapter/Bcmath.md) | Bcmath extension adapter|
| [`Gmp`](./classes/Zend/Math/BigInteger/Adapter/Gmp.md) | GMP extension adapter|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AdapterInterface`](./classes/Zend/Math/BigInteger/Adapter/AdapterInterface.md) | |

### \Zend\Math\BigInteger\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`DivisionByZeroException`](./classes/Zend/Math/BigInteger/Exception/DivisionByZeroException.md) | Division by zero exception|
| [`InvalidArgumentException`](./classes/Zend/Math/BigInteger/Exception/InvalidArgumentException.md) | Invalid argument exception|
| [`RuntimeException`](./classes/Zend/Math/BigInteger/Exception/RuntimeException.md) | Runtime exception|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/Math/BigInteger/Exception/ExceptionInterface.md) | Invalid argument exception|

### \Zend\Math\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`DomainException`](./classes/Zend/Math/Exception/DomainException.md) | Invalid argument exception|
| [`InvalidArgumentException`](./classes/Zend/Math/Exception/InvalidArgumentException.md) | Invalid argument exception|
| [`RuntimeException`](./classes/Zend/Math/Exception/RuntimeException.md) | Runtime argument exception|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/Math/Exception/ExceptionInterface.md) | |

### \Zend\Math\Source

#### Classes

| Class | Description |
|-------|-------------|
| [`HashTiming`](./classes/Zend/Math/Source/HashTiming.md) | Author:<br />George Argyros &lt;argyros.george@gmail.com&gt;|

### \Zend\Serializer

#### Classes

| Class | Description |
|-------|-------------|
| [`AdapterPluginManager`](./classes/Zend/Serializer/AdapterPluginManager.md) | Plugin manager implementation for serializer adapters.|
| [`Serializer`](./classes/Zend/Serializer/Serializer.md) | |

### \Zend\Serializer\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractAdapter`](./classes/Zend/Serializer/Adapter/AbstractAdapter.md) | |
| [`AdapterOptions`](./classes/Zend/Serializer/Adapter/AdapterOptions.md) | |
| [`IgBinary`](./classes/Zend/Serializer/Adapter/IgBinary.md) | |
| [`Json`](./classes/Zend/Serializer/Adapter/Json.md) | |
| [`JsonOptions`](./classes/Zend/Serializer/Adapter/JsonOptions.md) | |
| [`MsgPack`](./classes/Zend/Serializer/Adapter/MsgPack.md) | |
| [`PhpCode`](./classes/Zend/Serializer/Adapter/PhpCode.md) | |
| [`PhpSerialize`](./classes/Zend/Serializer/Adapter/PhpSerialize.md) | |
| [`PythonPickle`](./classes/Zend/Serializer/Adapter/PythonPickle.md) | |
| [`PythonPickleOptions`](./classes/Zend/Serializer/Adapter/PythonPickleOptions.md) | |
| [`Wddx`](./classes/Zend/Serializer/Adapter/Wddx.md) | |
| [`WddxOptions`](./classes/Zend/Serializer/Adapter/WddxOptions.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AdapterInterface`](./classes/Zend/Serializer/Adapter/AdapterInterface.md) | |

### \Zend\Serializer\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`ExtensionNotLoadedException`](./classes/Zend/Serializer/Exception/ExtensionNotLoadedException.md) | |
| [`InvalidArgumentException`](./classes/Zend/Serializer/Exception/InvalidArgumentException.md) | |
| [`RuntimeException`](./classes/Zend/Serializer/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/Serializer/Exception/ExceptionInterface.md) | |

### \Zend\ServiceManager

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractPluginManager`](./classes/Zend/ServiceManager/AbstractPluginManager.md) | ServiceManager implementation for managing plugins|
| [`Config`](./classes/Zend/ServiceManager/Config.md) | |
| [`ServiceManager`](./classes/Zend/ServiceManager/ServiceManager.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`MutableCreationOptionsTrait`](./classes/Zend/ServiceManager/MutableCreationOptionsTrait.md) | Trait for MutableCreationOptions Factories|
| [`ServiceLocatorAwareTrait`](./classes/Zend/ServiceManager/ServiceLocatorAwareTrait.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AbstractFactoryInterface`](./classes/Zend/ServiceManager/AbstractFactoryInterface.md) | |
| [`ConfigInterface`](./classes/Zend/ServiceManager/ConfigInterface.md) | |
| [`DelegatorFactoryInterface`](./classes/Zend/ServiceManager/DelegatorFactoryInterface.md) | Interface for factories that can create delegates for services|
| [`FactoryInterface`](./classes/Zend/ServiceManager/FactoryInterface.md) | |
| [`InitializerInterface`](./classes/Zend/ServiceManager/InitializerInterface.md) | |
| [`MutableCreationOptionsInterface`](./classes/Zend/ServiceManager/MutableCreationOptionsInterface.md) | |
| [`ServiceLocatorAwareInterface`](./classes/Zend/ServiceManager/ServiceLocatorAwareInterface.md) | |
| [`ServiceLocatorInterface`](./classes/Zend/ServiceManager/ServiceLocatorInterface.md) | Service locator interface|
| [`ServiceManagerAwareInterface`](./classes/Zend/ServiceManager/ServiceManagerAwareInterface.md) | |

### \Zend\ServiceManager\Di

#### Classes

| Class | Description |
|-------|-------------|
| [`DiAbstractServiceFactory`](./classes/Zend/ServiceManager/Di/DiAbstractServiceFactory.md) | |
| [`DiInstanceManagerProxy`](./classes/Zend/ServiceManager/Di/DiInstanceManagerProxy.md) | |
| [`DiServiceFactory`](./classes/Zend/ServiceManager/Di/DiServiceFactory.md) | |
| [`DiServiceInitializer`](./classes/Zend/ServiceManager/Di/DiServiceInitializer.md) | |

### \Zend\ServiceManager\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`CircularDependencyFoundException`](./classes/Zend/ServiceManager/Exception/CircularDependencyFoundException.md) | |
| [`CircularReferenceException`](./classes/Zend/ServiceManager/Exception/CircularReferenceException.md) | |
| [`InvalidArgumentException`](./classes/Zend/ServiceManager/Exception/InvalidArgumentException.md) | |
| [`InvalidServiceNameException`](./classes/Zend/ServiceManager/Exception/InvalidServiceNameException.md) | |
| [`RuntimeException`](./classes/Zend/ServiceManager/Exception/RuntimeException.md) | |
| [`ServiceLocatorUsageException`](./classes/Zend/ServiceManager/Exception/ServiceLocatorUsageException.md) | |
| [`ServiceNotCreatedException`](./classes/Zend/ServiceManager/Exception/ServiceNotCreatedException.md) | |
| [`ServiceNotFoundException`](./classes/Zend/ServiceManager/Exception/ServiceNotFoundException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/ServiceManager/Exception/ExceptionInterface.md) | |

### \Zend\ServiceManager\Proxy

#### Classes

| Class | Description |
|-------|-------------|
| [`LazyServiceFactory`](./classes/Zend/ServiceManager/Proxy/LazyServiceFactory.md) | Delegator factory responsible of instantiating lazy loading value holder proxies of<br />given services at runtime|
| [`LazyServiceFactoryFactory`](./classes/Zend/ServiceManager/Proxy/LazyServiceFactoryFactory.md) | Service factory responsible of instantiating {@see \Zend\ServiceManager\Proxy\LazyServiceFactory}<br />and configuring it starting from application configuration|

### \Zend\Stdlib

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractOptions`](./classes/Zend/Stdlib/AbstractOptions.md) | |
| [`ArrayObject`](./classes/Zend/Stdlib/ArrayObject.md) | Custom framework ArrayObject implementation|
| [`ArrayStack`](./classes/Zend/Stdlib/ArrayStack.md) | ArrayObject that acts as a stack with regards to iteration|
| [`ArrayUtils`](./classes/Zend/Stdlib/ArrayUtils.md) | Utility class for testing and manipulation of PHP arrays.|
| [`CallbackHandler`](./classes/Zend/Stdlib/CallbackHandler.md) | CallbackHandler|
| [`DateTime`](./classes/Zend/Stdlib/DateTime.md) | DateTime|
| [`ErrorHandler`](./classes/Zend/Stdlib/ErrorHandler.md) | ErrorHandler that can be used to catch internal PHP errors<br />and convert to an ErrorException instance.|
| [`FastPriorityQueue`](./classes/Zend/Stdlib/FastPriorityQueue.md) | This is an efficient implementation of an integer priority queue in PHP|
| [`Glob`](./classes/Zend/Stdlib/Glob.md) | Wrapper for glob with fallback if GLOB_BRACE is not available.|
| [`Message`](./classes/Zend/Stdlib/Message.md) | |
| [`Parameters`](./classes/Zend/Stdlib/Parameters.md) | |
| [`PriorityList`](./classes/Zend/Stdlib/PriorityList.md) | |
| [`PriorityQueue`](./classes/Zend/Stdlib/PriorityQueue.md) | Re-usable, serializable priority queue implementation|
| [`Request`](./classes/Zend/Stdlib/Request.md) | |
| [`Response`](./classes/Zend/Stdlib/Response.md) | |
| [`SplPriorityQueue`](./classes/Zend/Stdlib/SplPriorityQueue.md) | Serializable version of SplPriorityQueue|
| [`SplQueue`](./classes/Zend/Stdlib/SplQueue.md) | Serializable version of SplQueue|
| [`SplStack`](./classes/Zend/Stdlib/SplStack.md) | Serializable version of SplStack|
| [`StringUtils`](./classes/Zend/Stdlib/StringUtils.md) | Utility class for handling strings of different character encodings<br />using available PHP extensions.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ArraySerializableInterface`](./classes/Zend/Stdlib/ArraySerializableInterface.md) | |
| [`DispatchableInterface`](./classes/Zend/Stdlib/DispatchableInterface.md) | |
| [`InitializableInterface`](./classes/Zend/Stdlib/InitializableInterface.md) | Interface to allow objects to have initialization logic|
| [`JsonSerializable`](./classes/Zend/Stdlib/JsonSerializable.md) | |
| [`MessageInterface`](./classes/Zend/Stdlib/MessageInterface.md) | |
| [`ParameterObjectInterface`](./classes/Zend/Stdlib/ParameterObjectInterface.md) | |
| [`ParametersInterface`](./classes/Zend/Stdlib/ParametersInterface.md) | |
| [`RequestInterface`](./classes/Zend/Stdlib/RequestInterface.md) | |
| [`ResponseInterface`](./classes/Zend/Stdlib/ResponseInterface.md) | |

### \Zend\Stdlib\ArrayUtils

#### Classes

| Class | Description |
|-------|-------------|
| [`MergeRemoveKey`](./classes/Zend/Stdlib/ArrayUtils/MergeRemoveKey.md) | |
| [`MergeReplaceKey`](./classes/Zend/Stdlib/ArrayUtils/MergeReplaceKey.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`MergeReplaceKeyInterface`](./classes/Zend/Stdlib/ArrayUtils/MergeReplaceKeyInterface.md) | Marker interface: can be used to replace keys completely in {@see ArrayUtils::merge()} operations|

### \Zend\Stdlib\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](./classes/Zend/Stdlib/Exception/BadMethodCallException.md) | Bad method call exception|
| [`DomainException`](./classes/Zend/Stdlib/Exception/DomainException.md) | Domain exception|
| [`ExtensionNotLoadedException`](./classes/Zend/Stdlib/Exception/ExtensionNotLoadedException.md) | Extension not loaded exception|
| [`InvalidArgumentException`](./classes/Zend/Stdlib/Exception/InvalidArgumentException.md) | Invalid Argument Exception|
| [`InvalidCallbackException`](./classes/Zend/Stdlib/Exception/InvalidCallbackException.md) | Invalid callback exception|
| [`LogicException`](./classes/Zend/Stdlib/Exception/LogicException.md) | Logic exception|
| [`RuntimeException`](./classes/Zend/Stdlib/Exception/RuntimeException.md) | Runtime exception|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/Stdlib/Exception/ExceptionInterface.md) | Exception marker interface|

### \Zend\Stdlib\Extractor

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExtractionInterface`](./classes/Zend/Stdlib/Extractor/ExtractionInterface.md) | |

### \Zend\Stdlib\Guard

#### Classes

| Class | Description |
|-------|-------------|
| [`GuardUtils`](./classes/Zend/Stdlib/Guard/GuardUtils.md) | Static guard helper class|

#### Traits

| Trait | Description |
|-------|-------------|
| [`AllGuardsTrait`](./classes/Zend/Stdlib/Guard/AllGuardsTrait.md) | An aggregate for all guard traits|
| [`ArrayOrTraversableGuardTrait`](./classes/Zend/Stdlib/Guard/ArrayOrTraversableGuardTrait.md) | Provide a guard method for array or Traversable data|
| [`EmptyGuardTrait`](./classes/Zend/Stdlib/Guard/EmptyGuardTrait.md) | Provide a guard method against empty data|
| [`NullGuardTrait`](./classes/Zend/Stdlib/Guard/NullGuardTrait.md) | Provide a guard method against null data|

### \Zend\Stdlib\Hydrator

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractHydrator`](./classes/Zend/Stdlib/Hydrator/AbstractHydrator.md) | |
| [`ArraySerializable`](./classes/Zend/Stdlib/Hydrator/ArraySerializable.md) | |
| [`ClassMethods`](./classes/Zend/Stdlib/Hydrator/ClassMethods.md) | |
| [`DelegatingHydrator`](./classes/Zend/Stdlib/Hydrator/DelegatingHydrator.md) | |
| [`DelegatingHydratorFactory`](./classes/Zend/Stdlib/Hydrator/DelegatingHydratorFactory.md) | |
| [`HydratorPluginManager`](./classes/Zend/Stdlib/Hydrator/HydratorPluginManager.md) | Plugin manager implementation for hydrators.|
| [`ObjectProperty`](./classes/Zend/Stdlib/Hydrator/ObjectProperty.md) | |
| [`Reflection`](./classes/Zend/Stdlib/Hydrator/Reflection.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`HydratorAwareTrait`](./classes/Zend/Stdlib/Hydrator/HydratorAwareTrait.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FilterEnabledInterface`](./classes/Zend/Stdlib/Hydrator/FilterEnabledInterface.md) | |
| [`HydrationInterface`](./classes/Zend/Stdlib/Hydrator/HydrationInterface.md) | |
| [`HydratorAwareInterface`](./classes/Zend/Stdlib/Hydrator/HydratorAwareInterface.md) | |
| [`HydratorInterface`](./classes/Zend/Stdlib/Hydrator/HydratorInterface.md) | |
| [`HydratorOptionsInterface`](./classes/Zend/Stdlib/Hydrator/HydratorOptionsInterface.md) | |
| [`NamingStrategyEnabledInterface`](./classes/Zend/Stdlib/Hydrator/NamingStrategyEnabledInterface.md) | |
| [`StrategyEnabledInterface`](./classes/Zend/Stdlib/Hydrator/StrategyEnabledInterface.md) | |

### \Zend\Stdlib\Hydrator\Aggregate

#### Classes

| Class | Description |
|-------|-------------|
| [`AggregateHydrator`](./classes/Zend/Stdlib/Hydrator/Aggregate/AggregateHydrator.md) | Aggregate hydrator that composes multiple hydrators via events|
| [`ExtractEvent`](./classes/Zend/Stdlib/Hydrator/Aggregate/ExtractEvent.md) | Event triggered when the {@see \Zend\Stdlib\Hydrator\Aggregate\AggregateHydrator} extracts<br />data from an object|
| [`HydrateEvent`](./classes/Zend/Stdlib/Hydrator/Aggregate/HydrateEvent.md) | Event triggered when the {@see \Zend\Stdlib\Hydrator\Aggregate\AggregateHydrator} hydrates<br />data into an object|
| [`HydratorListener`](./classes/Zend/Stdlib/Hydrator/Aggregate/HydratorListener.md) | Aggregate listener wrapping around a hydrator. Listens<br />to {@see \Zend\Stdlib\Hydrator\Aggregate::EVENT_HYDRATE} and<br />{@see \Zend\Stdlib\Hydrator\Aggregate::EVENT_EXTRACT}|

### \Zend\Stdlib\Hydrator\Filter

#### Classes

| Class | Description |
|-------|-------------|
| [`FilterComposite`](./classes/Zend/Stdlib/Hydrator/Filter/FilterComposite.md) | |
| [`GetFilter`](./classes/Zend/Stdlib/Hydrator/Filter/GetFilter.md) | |
| [`HasFilter`](./classes/Zend/Stdlib/Hydrator/Filter/HasFilter.md) | |
| [`IsFilter`](./classes/Zend/Stdlib/Hydrator/Filter/IsFilter.md) | |
| [`MethodMatchFilter`](./classes/Zend/Stdlib/Hydrator/Filter/MethodMatchFilter.md) | |
| [`NumberOfParameterFilter`](./classes/Zend/Stdlib/Hydrator/Filter/NumberOfParameterFilter.md) | |
| [`OptionalParametersFilter`](./classes/Zend/Stdlib/Hydrator/Filter/OptionalParametersFilter.md) | Filter that includes methods which have no parameters or only optional parameters|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FilterInterface`](./classes/Zend/Stdlib/Hydrator/Filter/FilterInterface.md) | |
| [`FilterProviderInterface`](./classes/Zend/Stdlib/Hydrator/Filter/FilterProviderInterface.md) | |

### \Zend\Stdlib\Hydrator\Iterator

#### Classes

| Class | Description |
|-------|-------------|
| [`HydratingArrayIterator`](./classes/Zend/Stdlib/Hydrator/Iterator/HydratingArrayIterator.md) | |
| [`HydratingIteratorIterator`](./classes/Zend/Stdlib/Hydrator/Iterator/HydratingIteratorIterator.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`HydratingIteratorInterface`](./classes/Zend/Stdlib/Hydrator/Iterator/HydratingIteratorInterface.md) | |

### \Zend\Stdlib\Hydrator\NamingStrategy

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayMapNamingStrategy`](./classes/Zend/Stdlib/Hydrator/NamingStrategy/ArrayMapNamingStrategy.md) | |
| [`CompositeNamingStrategy`](./classes/Zend/Stdlib/Hydrator/NamingStrategy/CompositeNamingStrategy.md) | |
| [`IdentityNamingStrategy`](./classes/Zend/Stdlib/Hydrator/NamingStrategy/IdentityNamingStrategy.md) | |
| [`MapNamingStrategy`](./classes/Zend/Stdlib/Hydrator/NamingStrategy/MapNamingStrategy.md) | |
| [`UnderscoreNamingStrategy`](./classes/Zend/Stdlib/Hydrator/NamingStrategy/UnderscoreNamingStrategy.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`NamingStrategyInterface`](./classes/Zend/Stdlib/Hydrator/NamingStrategy/NamingStrategyInterface.md) | Allow property extraction / hydration for hydrator|

### \Zend\Stdlib\Hydrator\Strategy

#### Classes

| Class | Description |
|-------|-------------|
| [`BooleanStrategy`](./classes/Zend/Stdlib/Hydrator/Strategy/BooleanStrategy.md) | This Strategy extracts and hydrates int and string values to Boolean values|
| [`ClosureStrategy`](./classes/Zend/Stdlib/Hydrator/Strategy/ClosureStrategy.md) | |
| [`DateTimeFormatterStrategy`](./classes/Zend/Stdlib/Hydrator/Strategy/DateTimeFormatterStrategy.md) | |
| [`DefaultStrategy`](./classes/Zend/Stdlib/Hydrator/Strategy/DefaultStrategy.md) | |
| [`ExplodeStrategy`](./classes/Zend/Stdlib/Hydrator/Strategy/ExplodeStrategy.md) | |
| [`SerializableStrategy`](./classes/Zend/Stdlib/Hydrator/Strategy/SerializableStrategy.md) | |
| [`StrategyChain`](./classes/Zend/Stdlib/Hydrator/Strategy/StrategyChain.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`StrategyInterface`](./classes/Zend/Stdlib/Hydrator/Strategy/StrategyInterface.md) | |

### \Zend\Stdlib\Hydrator\Strategy\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`InvalidArgumentException`](./classes/Zend/Stdlib/Hydrator/Strategy/Exception/InvalidArgumentException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./classes/Zend/Stdlib/Hydrator/Strategy/Exception/ExceptionInterface.md) | |

### \Zend\Stdlib\StringWrapper

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractStringWrapper`](./classes/Zend/Stdlib/StringWrapper/AbstractStringWrapper.md) | |
| [`Iconv`](./classes/Zend/Stdlib/StringWrapper/Iconv.md) | |
| [`Intl`](./classes/Zend/Stdlib/StringWrapper/Intl.md) | |
| [`MbString`](./classes/Zend/Stdlib/StringWrapper/MbString.md) | |
| [`Native`](./classes/Zend/Stdlib/StringWrapper/Native.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`StringWrapperInterface`](./classes/Zend/Stdlib/StringWrapper/StringWrapperInterface.md) | |

### \ZipStream

#### Classes

| Class | Description |
|-------|-------------|
| [`Exception`](./classes/ZipStream/Exception.md) | This class is only for inheriting|
| [`ZipStream`](./classes/ZipStream/ZipStream.md) | ZipStream|

### \ZipStream\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FileNotFoundException`](./classes/ZipStream/Exception/FileNotFoundException.md) | This Exception gets invoked if a file wasn&#039;t found|
| [`FileNotReadableException`](./classes/ZipStream/Exception/FileNotReadableException.md) | This Exception gets invoked if a file wasn&#039;t found|
| [`InvalidOptionException`](./classes/ZipStream/Exception/InvalidOptionException.md) | This Exception gets invoked if an invalid parameter gets passed on as option|
| [`StreamNotReadableException`](./classes/ZipStream/Exception/StreamNotReadableException.md) | This Exception gets invoked if fread() fails on a stream.|

### \claviska

#### Classes

| Class | Description |
|-------|-------------|
| [`SimpleImage`](./classes/claviska/SimpleImage.md) | A PHP class that makes working with images as simple as possible.|

### \phpDocumentor

#### Classes

| Class | Description |
|-------|-------------|
| [`Application`](./classes/phpDocumentor/Application.md) | Application class for phpDocumentor.|
| [`Bootstrap`](./classes/phpDocumentor/Bootstrap.md) | This class provides a bootstrap for all application who wish to interface with phpDocumentor.|
| [`Configuration`](./classes/phpDocumentor/Configuration.md) | The definition for the configuration of phpDocumentor.|

### \phpDocumentor\Command

#### Classes

| Class | Description |
|-------|-------------|
| [`Command`](./classes/phpDocumentor/Command/Command.md) | Base command for phpDocumentor commands.|

### \phpDocumentor\Command\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`ConfigurationHelper`](./classes/phpDocumentor/Command/Helper/ConfigurationHelper.md) | Helper is the base class for all helper classes.|
| [`LoggerHelper`](./classes/phpDocumentor/Command/Helper/LoggerHelper.md) | Helper is the base class for all helper classes.|

### \phpDocumentor\Command\Phar

#### Classes

| Class | Description |
|-------|-------------|
| [`UpdateCommand`](./classes/phpDocumentor/Command/Phar/UpdateCommand.md) | Updates phpDocumentor.phar to the latest version.|

### \phpDocumentor\Command\Project

#### Classes

| Class | Description |
|-------|-------------|
| [`RunCommand`](./classes/phpDocumentor/Command/Project/RunCommand.md) | Parse and transform the given directory (-d&amp;#124;-f) to the given location (-t).|

### \phpDocumentor\Compiler

#### Classes

| Class | Description |
|-------|-------------|
| [`Compiler`](./classes/phpDocumentor/Compiler/Compiler.md) | Contains a series of compiler steps in a specific order; ready to be executed during transformation.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CompilerPassInterface`](./classes/phpDocumentor/Compiler/CompilerPassInterface.md) | Represents a single pass / business rule to be executed by the Compiler.|

### \phpDocumentor\Compiler\Linker

#### Classes

| Class | Description |
|-------|-------------|
| [`Linker`](./classes/phpDocumentor/Compiler/Linker/Linker.md) | The linker contains all rules to replace FQSENs in the ProjectDescriptor with aliases to objects.|

### \phpDocumentor\Compiler\Pass

#### Classes

| Class | Description |
|-------|-------------|
| [`Debug`](./classes/phpDocumentor/Compiler/Pass/Debug.md) | This class is responsible for sending statistical information to the log.|
| [`ElementsIndexBuilder`](./classes/phpDocumentor/Compiler/Pass/ElementsIndexBuilder.md) | This class constructs the index &#039;elements&#039; and populates it with all Structural Elements.|
| [`ExampleTagsEnricher`](./classes/phpDocumentor/Compiler/Pass/ExampleTagsEnricher.md) | This index builder collects all examples from tags and inserts them into the example index.|
| [`MarkerFromTagsExtractor`](./classes/phpDocumentor/Compiler/Pass/MarkerFromTagsExtractor.md) | This index builder collects all markers from tags and inserts them into the marker index.|
| [`NamespaceTreeBuilder`](./classes/phpDocumentor/Compiler/Pass/NamespaceTreeBuilder.md) | Rebuilds the namespace tree from the elements found in files.|
| [`PackageTreeBuilder`](./classes/phpDocumentor/Compiler/Pass/PackageTreeBuilder.md) | Rebuilds the package tree from the elements found in files.|
| [`ResolveInlineLinkAndSeeTags`](./classes/phpDocumentor/Compiler/Pass/ResolveInlineLinkAndSeeTags.md) | This step in the compilation process iterates through all elements and scans their descriptions for an inline `@see`<br />or `@link` tag and resolves them to a markdown link.|

### \phpDocumentor\Configuration

#### Classes

| Class | Description |
|-------|-------------|
| [`Loader`](./classes/phpDocumentor/Configuration/Loader.md) | Loads the template and user-defined configuration file from disk and creates a Configuration object from it.|
| [`Logging`](./classes/phpDocumentor/Configuration/Logging.md) | Configuration definition for the logger.|
| [`Merger`](./classes/phpDocumentor/Configuration/Merger.md) | Deep-merges any variable.|
| [`ServiceProvider`](./classes/phpDocumentor/Configuration/ServiceProvider.md) | Provides a series of services in order to handle the configuration for phpDocumentor.|

### \phpDocumentor\Configuration\Merger\Annotation

#### Classes

| Class | Description |
|-------|-------------|
| [`Replace`](./classes/phpDocumentor/Configuration/Merger/Annotation/Replace.md) | Declares that, when merging objects, the property with this annotation should be replaced and not merged with the<br />property of the same name in the secondary object.|

### \phpDocumentor\Console\Input

#### Classes

| Class | Description |
|-------|-------------|
| [`ArgvInput`](./classes/phpDocumentor/Console/Input/ArgvInput.md) | Argv input for the Console component of Symfony adapted to phpDocumentor.|

### \phpDocumentor\Console\Output

#### Classes

| Class | Description |
|-------|-------------|
| [`Output`](./classes/phpDocumentor/Console/Output/Output.md) | A custom output class for our Console object that supports writing to the log.|

### \phpDocumentor\Descriptor

#### Classes

| Class | Description |
|-------|-------------|
| [`ArgumentDescriptor`](./classes/phpDocumentor/Descriptor/ArgumentDescriptor.md) | Descriptor representing a single Argument of a method or function.|
| [`ClassDescriptor`](./classes/phpDocumentor/Descriptor/ClassDescriptor.md) | Descriptor representing a Class.|
| [`Collection`](./classes/phpDocumentor/Descriptor/Collection.md) | Represents an easily accessible collection of elements.|
| [`ConstantDescriptor`](./classes/phpDocumentor/Descriptor/ConstantDescriptor.md) | Descriptor representing a constant|
| [`DescriptorAbstract`](./classes/phpDocumentor/Descriptor/DescriptorAbstract.md) | Base class for descriptors containing the most used options.|
| [`FileDescriptor`](./classes/phpDocumentor/Descriptor/FileDescriptor.md) | Represents a file in the project.|
| [`FunctionDescriptor`](./classes/phpDocumentor/Descriptor/FunctionDescriptor.md) | Descriptor representing a function.|
| [`InterfaceDescriptor`](./classes/phpDocumentor/Descriptor/InterfaceDescriptor.md) | Descriptor representing an Interface.|
| [`MethodDescriptor`](./classes/phpDocumentor/Descriptor/MethodDescriptor.md) | Descriptor representing a Method in a Class, Interface or Trait.|
| [`NamespaceDescriptor`](./classes/phpDocumentor/Descriptor/NamespaceDescriptor.md) | Represents a namespace and its children for a project.|
| [`PackageDescriptor`](./classes/phpDocumentor/Descriptor/PackageDescriptor.md) | Represents the package for a class, trait, interface or file.|
| [`ProjectAnalyzer`](./classes/phpDocumentor/Descriptor/ProjectAnalyzer.md) | Analyzes a Project Descriptor and collects key information.|
| [`ProjectDescriptor`](./classes/phpDocumentor/Descriptor/ProjectDescriptor.md) | Represents the entire project with its files, namespaces and indexes.|
| [`ProjectDescriptorBuilder`](./classes/phpDocumentor/Descriptor/ProjectDescriptorBuilder.md) | Builds a Project Descriptor and underlying tree.|
| [`PropertyDescriptor`](./classes/phpDocumentor/Descriptor/PropertyDescriptor.md) | Descriptor representing a property.|
| [`ServiceProvider`](./classes/phpDocumentor/Descriptor/ServiceProvider.md) | This provider is responsible for registering the Descriptor component with the given Application.|
| [`TagDescriptor`](./classes/phpDocumentor/Descriptor/TagDescriptor.md) | Base class for any tag descriptor and used when a tag has no specific descriptor.|
| [`TraitDescriptor`](./classes/phpDocumentor/Descriptor/TraitDescriptor.md) | Descriptor representing a Trait.|

### \phpDocumentor\Descriptor\Builder

#### Classes

| Class | Description |
|-------|-------------|
| [`AssemblerAbstract`](./classes/phpDocumentor/Descriptor/Builder/AssemblerAbstract.md) | Base class for all assemblers.|
| [`AssemblerFactory`](./classes/phpDocumentor/Descriptor/Builder/AssemblerFactory.md) | Attempts to retrieve an Assembler for the provided criteria.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AssemblerInterface`](./classes/phpDocumentor/Descriptor/Builder/AssemblerInterface.md) | Interface for Assembler classes that transform data to specific Descriptor types.|

### \phpDocumentor\Descriptor\Builder\Reflector

#### Classes

| Class | Description |
|-------|-------------|
| [`ArgumentAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/ArgumentAssembler.md) | Assembles an ArgumentDescriptor using an ArgumentReflector and ParamDescriptors.|
| [`AssemblerAbstract`](./classes/phpDocumentor/Descriptor/Builder/Reflector/AssemblerAbstract.md) | Base class for all assemblers.|
| [`ClassAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/ClassAssembler.md) | Assembles an ClassDescriptor using an ClassReflector.|
| [`ConstantAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/ConstantAssembler.md) | Assembles a ConstantDescriptor from a ConstantReflector.|
| [`FileAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/FileAssembler.md) | Assembles an FileDescriptor using an FileReflector and ParamDescriptors.|
| [`FunctionAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/FunctionAssembler.md) | Assembles a FunctionDescriptor from a FunctionReflector.|
| [`InterfaceAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/InterfaceAssembler.md) | Assembles an InterfaceDescriptor using an InterfaceReflector.|
| [`MethodAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/MethodAssembler.md) | Assembles a MethodDescriptor from a MethodReflector.|
| [`PropertyAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/PropertyAssembler.md) | Assembles a PropertyDescriptor from a PropertyReflector.|
| [`TraitAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/TraitAssembler.md) | Assembles an TraitDescriptor using an TraitReflector.|

### \phpDocumentor\Descriptor\Builder\Reflector\Tags

#### Classes

| Class | Description |
|-------|-------------|
| [`AuthorAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/AuthorAssembler.md) | Constructs a new descriptor from the Reflector for an `@author` tag.|
| [`DeprecatedAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/DeprecatedAssembler.md) | Constructs a new descriptor from the Reflector for an `@deprecated` tag.|
| [`ExampleAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/ExampleAssembler.md) | This class collects data from the example tag definition of the Reflection library, tries to find the correlating<br />example file on disk and creates a complete Descriptor from that.|
| [`GenericTagAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/GenericTagAssembler.md) | Base class for all assemblers.|
| [`LinkAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/LinkAssembler.md) | Constructs a new descriptor from the Reflector for an `@link` tag.|
| [`MethodAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/MethodAssembler.md) | Constructs a new descriptor from the Reflector for an `@method` tag.|
| [`ParamAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/ParamAssembler.md) | Constructs a new descriptor from the Reflector for an `@param` tag.|
| [`PropertyAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/PropertyAssembler.md) | Constructs a new descriptor from the Reflector for an `@property` tag.|
| [`ReturnAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/ReturnAssembler.md) | Constructs a new descriptor from the Reflector for an `@return` tag.|
| [`SeeAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/SeeAssembler.md) | Constructs a new Descriptor from a Reflector object for the `@see` tag.|
| [`SinceAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/SinceAssembler.md) | Constructs a new descriptor from the Reflector for an `@since` tag.|
| [`ThrowsAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/ThrowsAssembler.md) | Constructs a new descriptor from the Reflector for an `@throws` tag.|
| [`TypeCollectionAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/TypeCollectionAssembler.md) | Creates a Collection of type-related value objects for the given Type Collection from the Reflector.|
| [`UsesAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/UsesAssembler.md) | Base class for all assemblers.|
| [`VarAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/VarAssembler.md) | Constructs a new descriptor from the Reflector for an `@var` tag.|
| [`VersionAssembler`](./classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/VersionAssembler.md) | Constructs a new descriptor from the Reflector for an `@version` tag.|

### \phpDocumentor\Descriptor\Cache

#### Classes

| Class | Description |
|-------|-------------|
| [`ProjectDescriptorMapper`](./classes/phpDocumentor/Descriptor/Cache/ProjectDescriptorMapper.md) | Maps a projectDescriptor to and from a cache instance.|

### \phpDocumentor\Descriptor\Example

#### Classes

| Class | Description |
|-------|-------------|
| [`Finder`](./classes/phpDocumentor/Descriptor/Example/Finder.md) | Class used to find an example file&#039;s location based on a given ExampleDescriptor.|

### \phpDocumentor\Descriptor\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`MissingDependencyException`](./classes/phpDocumentor/Descriptor/Exception/MissingDependencyException.md) | This exception is thrown when a required dependency is not included.|

### \phpDocumentor\Descriptor\Filter

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassFactory`](./classes/phpDocumentor/Descriptor/Filter/ClassFactory.md) | Retrieves a series of filters to manipulate a specific Descriptor with during building.|
| [`Filter`](./classes/phpDocumentor/Descriptor/Filter/Filter.md) | Filter used to manipulate a descriptor after being build.|
| [`StripIgnore`](./classes/phpDocumentor/Descriptor/Filter/StripIgnore.md) | Strips any Descriptor if the ignore tag is present with that element.|
| [`StripInternal`](./classes/phpDocumentor/Descriptor/Filter/StripInternal.md) | Filters a Descriptor when the @internal inline tag, or normal tag, is used.|
| [`StripOnVisibility`](./classes/phpDocumentor/Descriptor/Filter/StripOnVisibility.md) | Strips any Descriptor if their visibility is allowed according to the ProjectDescriptorBuilder.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Filterable`](./classes/phpDocumentor/Descriptor/Filter/Filterable.md) | Interface to determine which elements can be filtered and to provide a way to set errors on the descriptor.|

### \phpDocumentor\Descriptor\Interfaces

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ArgumentInterface`](./classes/phpDocumentor/Descriptor/Interfaces/ArgumentInterface.md) | Describes the public interface for a descriptor of an Argument.|
| [`ChildInterface`](./classes/phpDocumentor/Descriptor/Interfaces/ChildInterface.md) | Describes the public interface for any descriptor that is the child is another.|
| [`ClassInterface`](./classes/phpDocumentor/Descriptor/Interfaces/ClassInterface.md) | Common interface representing the description of a class.|
| [`ConstantInterface`](./classes/phpDocumentor/Descriptor/Interfaces/ConstantInterface.md) | Descriptor representing a constant on a class, trait, property or file.|
| [`ContainerInterface`](./classes/phpDocumentor/Descriptor/Interfaces/ContainerInterface.md) | Interface representing the common interface for all elements that can contain sub-elements.|
| [`ElementInterface`](./classes/phpDocumentor/Descriptor/Interfaces/ElementInterface.md) | Represents the public interface to which all descriptors should be held.|
| [`FileInterface`](./classes/phpDocumentor/Descriptor/Interfaces/FileInterface.md) | Describes the public interface for a description of a File.|
| [`FunctionInterface`](./classes/phpDocumentor/Descriptor/Interfaces/FunctionInterface.md) | Descriptor representing a global function in a file.|
| [`InterfaceInterface`](./classes/phpDocumentor/Descriptor/Interfaces/InterfaceInterface.md) | Represents the public interface for an interface descriptor.|
| [`MethodInterface`](./classes/phpDocumentor/Descriptor/Interfaces/MethodInterface.md) | Describes the public interface of the description for a method.|
| [`NamespaceInterface`](./classes/phpDocumentor/Descriptor/Interfaces/NamespaceInterface.md) | Describes the public interface for the description of a namespace.|
| [`PackageInterface`](./classes/phpDocumentor/Descriptor/Interfaces/PackageInterface.md) | Describes the public interface for a package descriptor.|
| [`ProjectInterface`](./classes/phpDocumentor/Descriptor/Interfaces/ProjectInterface.md) | Describes the public interface for the description of a project.|
| [`PropertyInterface`](./classes/phpDocumentor/Descriptor/Interfaces/PropertyInterface.md) | Descriptor representing a property on a class or trait.|
| [`TraitInterface`](./classes/phpDocumentor/Descriptor/Interfaces/TraitInterface.md) | Public interface definition for object representing traits.|
| [`TypeInterface`](./classes/phpDocumentor/Descriptor/Interfaces/TypeInterface.md) | |
| [`VisibilityInterface`](./classes/phpDocumentor/Descriptor/Interfaces/VisibilityInterface.md) | |

### \phpDocumentor\Descriptor\ProjectDescriptor

#### Classes

| Class | Description |
|-------|-------------|
| [`Settings`](./classes/phpDocumentor/Descriptor/ProjectDescriptor/Settings.md) | Contains the Settings for the current Project.|

### \phpDocumentor\Descriptor\Tag

#### Classes

| Class | Description |
|-------|-------------|
| [`AuthorDescriptor`](./classes/phpDocumentor/Descriptor/Tag/AuthorDescriptor.md) | Descriptor representing the author tag with a descriptor.|
| [`DeprecatedDescriptor`](./classes/phpDocumentor/Descriptor/Tag/DeprecatedDescriptor.md) | Descriptor representing the deprecated tag with a descriptor.|
| [`ExampleDescriptor`](./classes/phpDocumentor/Descriptor/Tag/ExampleDescriptor.md) | Descriptor representing the example tag with a descriptor.|
| [`LinkDescriptor`](./classes/phpDocumentor/Descriptor/Tag/LinkDescriptor.md) | Descriptor representing the link tag with a descriptor.|
| [`MethodDescriptor`](./classes/phpDocumentor/Descriptor/Tag/MethodDescriptor.md) | Base class for any tag descriptor and used when a tag has no specific descriptor.|
| [`ParamDescriptor`](./classes/phpDocumentor/Descriptor/Tag/ParamDescriptor.md) | Descriptor representing the param tag with a function or method.|
| [`PropertyDescriptor`](./classes/phpDocumentor/Descriptor/Tag/PropertyDescriptor.md) | Descriptor representing the property tag on a class or trait.|
| [`ReturnDescriptor`](./classes/phpDocumentor/Descriptor/Tag/ReturnDescriptor.md) | Descriptor representing the return tag on a function or method.|
| [`SeeDescriptor`](./classes/phpDocumentor/Descriptor/Tag/SeeDescriptor.md) | Base class for any tag descriptor and used when a tag has no specific descriptor.|
| [`SinceDescriptor`](./classes/phpDocumentor/Descriptor/Tag/SinceDescriptor.md) | Descriptor representing the since tag with another descriptor.|
| [`ThrowsDescriptor`](./classes/phpDocumentor/Descriptor/Tag/ThrowsDescriptor.md) | Descriptor representing the throws tag on a class or trait.|
| [`UsesDescriptor`](./classes/phpDocumentor/Descriptor/Tag/UsesDescriptor.md) | Descriptor representing the uses tag on any element.|
| [`VarDescriptor`](./classes/phpDocumentor/Descriptor/Tag/VarDescriptor.md) | Descriptor representing the var tag on a property.|
| [`VersionDescriptor`](./classes/phpDocumentor/Descriptor/Tag/VersionDescriptor.md) | Descriptor representing the version tag on a class, interface, trait or file.|

### \phpDocumentor\Descriptor\Tag\BaseTypes

#### Classes

| Class | Description |
|-------|-------------|
| [`TypedAbstract`](./classes/phpDocumentor/Descriptor/Tag/BaseTypes/TypedAbstract.md) | Base descriptor for tags that have a type associated with them.|
| [`TypedVariableAbstract`](./classes/phpDocumentor/Descriptor/Tag/BaseTypes/TypedVariableAbstract.md) | Abstract class for Descriptors with a type and variable name.|

### \phpDocumentor\Descriptor\Type

#### Classes

| Class | Description |
|-------|-------------|
| [`BooleanDescriptor`](./classes/phpDocumentor/Descriptor/Type/BooleanDescriptor.md) | A type representing a boolean.|
| [`CollectionDescriptor`](./classes/phpDocumentor/Descriptor/Type/CollectionDescriptor.md) | Descriptor representing a collection or compound type of collection object.|
| [`FloatDescriptor`](./classes/phpDocumentor/Descriptor/Type/FloatDescriptor.md) | |
| [`IntegerDescriptor`](./classes/phpDocumentor/Descriptor/Type/IntegerDescriptor.md) | |
| [`StringDescriptor`](./classes/phpDocumentor/Descriptor/Type/StringDescriptor.md) | |
| [`UnknownTypeDescriptor`](./classes/phpDocumentor/Descriptor/Type/UnknownTypeDescriptor.md) | This class represents any Type that could not be identified.|

### \phpDocumentor\Descriptor\Validator

#### Classes

| Class | Description |
|-------|-------------|
| [`Error`](./classes/phpDocumentor/Descriptor/Validator/Error.md) | Struct to record a validation error.|

### \phpDocumentor\Event

#### Classes

| Class | Description |
|-------|-------------|
| [`DebugEvent`](./classes/phpDocumentor/Event/DebugEvent.md) | Event representing some debugging information for phpDocumentor.|
| [`Dispatcher`](./classes/phpDocumentor/Event/Dispatcher.md) | Event Dispatching class.|
| [`EventAbstract`](./classes/phpDocumentor/Event/EventAbstract.md) | Abstract class representing the base elements of a phpDocumentor event.|
| [`LogEvent`](./classes/phpDocumentor/Event/LogEvent.md) | Logging event for phpDocumentor where information is output to the log or<br />stdout.|

### \phpDocumentor\Fileset

#### Classes

| Class | Description |
|-------|-------------|
| [`Collection`](./classes/phpDocumentor/Fileset/Collection.md) | Files container handling directory scanning, project root detection and ignores.|
| [`CollectionTest`](./classes/phpDocumentor/Fileset/CollectionTest.md) | Test case for Collection class.|
| [`File`](./classes/phpDocumentor/Fileset/File.md) | |
| [`FileTest`](./classes/phpDocumentor/Fileset/FileTest.md) | Test case for File class.|

### \phpDocumentor\Fileset\Collection

#### Classes

| Class | Description |
|-------|-------------|
| [`IgnorePatterns`](./classes/phpDocumentor/Fileset/Collection/IgnorePatterns.md) | |
| [`IgnorePatternsTest`](./classes/phpDocumentor/Fileset/Collection/IgnorePatternsTest.md) | Test case for IgnorePatterns class.|

### \phpDocumentor\GraphViz

#### Classes

| Class | Description |
|-------|-------------|
| [`Attribute`](./classes/phpDocumentor/GraphViz/Attribute.md) | Class representing a single GraphViz attribute.|
| [`Edge`](./classes/phpDocumentor/GraphViz/Edge.md) | Class representing an edge (arrow, line).|
| [`Exception`](./classes/phpDocumentor/GraphViz/Exception.md) | Class representing an exception in this GraphViz component.|
| [`Graph`](./classes/phpDocumentor/GraphViz/Graph.md) | Class representing a graph; this may be a main graph but also a subgraph.|
| [`GraphTest`](./classes/phpDocumentor/GraphViz/GraphTest.md) | Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2012-12-09 at 19:06:57.|
| [`Node`](./classes/phpDocumentor/GraphViz/Node.md) | Class representing a node / element in a graph.|

### \phpDocumentor\GraphViz\Test

#### Classes

| Class | Description |
|-------|-------------|
| [`AttributeTest`](./classes/phpDocumentor/GraphViz/Test/AttributeTest.md) | Test for the the class representing a GraphViz attribute.|
| [`EdgeTest`](./classes/phpDocumentor/GraphViz/Test/EdgeTest.md) | Test for the the class representing a GraphViz edge (vertex).|
| [`NodeTest`](./classes/phpDocumentor/GraphViz/Test/NodeTest.md) | Test for the the class representing a GraphViz node.|

### \phpDocumentor\Parser

#### Classes

| Class | Description |
|-------|-------------|
| [`Configuration`](./classes/phpDocumentor/Parser/Configuration.md) | Configuration definition for the parser.|
| [`Exception`](./classes/phpDocumentor/Parser/Exception.md) | Provides the basic exception for the parser package.|
| [`File`](./classes/phpDocumentor/Parser/File.md) | Parses a single file into a FileDescriptor and adds it to the given ProjectBuilder.|
| [`Parser`](./classes/phpDocumentor/Parser/Parser.md) | Class responsible for parsing the given file or files to the intermediate<br />structure file.|
| [`ServiceProvider`](./classes/phpDocumentor/Parser/ServiceProvider.md) | This provider is responsible for registering the parser component with the given Application.|

### \phpDocumentor\Parser\Command\Project

#### Classes

| Class | Description |
|-------|-------------|
| [`ParseCommand`](./classes/phpDocumentor/Parser/Command/Project/ParseCommand.md) | Parses the given source code and creates a structure file.|

### \phpDocumentor\Parser\Configuration

#### Classes

| Class | Description |
|-------|-------------|
| [`Files`](./classes/phpDocumentor/Parser/Configuration/Files.md) | Represents the settings in the phpdoc.xml related to finding the files that are to be parsed.|

### \phpDocumentor\Parser\Event

#### Classes

| Class | Description |
|-------|-------------|
| [`PreFileEvent`](./classes/phpDocumentor/Parser/Event/PreFileEvent.md) | Event thrown before the parsing of an individual file.|

### \phpDocumentor\Parser\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FilesNotFoundException`](./classes/phpDocumentor/Parser/Exception/FilesNotFoundException.md) | Exception that is thrown when the parser expects files but is unable to find them.|
| [`MissingDependencyException`](./classes/phpDocumentor/Parser/Exception/MissingDependencyException.md) | This exception is thrown when a required dependency is not included.|

### \phpDocumentor\Parser\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`ParserPopulator`](./classes/phpDocumentor/Parser/Util/ParserPopulator.md) | |

### \phpDocumentor\Partials

#### Classes

| Class | Description |
|-------|-------------|
| [`Collection`](./classes/phpDocumentor/Partials/Collection.md) | Represents an easily accessible collection of partials.|
| [`Partial`](./classes/phpDocumentor/Partials/Partial.md) | |
| [`ServiceProvider`](./classes/phpDocumentor/Partials/ServiceProvider.md) | This provider is responsible for registering the partials component with the given Application.|

### \phpDocumentor\Partials\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`MissingNameForPartialException`](./classes/phpDocumentor/Partials/Exception/MissingNameForPartialException.md) | This exception is thrown when a required name is not set.|

### \phpDocumentor\Plugin

#### Classes

| Class | Description |
|-------|-------------|
| [`Parameter`](./classes/phpDocumentor/Plugin/Parameter.md) | Model representing a plugin parameter|
| [`Plugin`](./classes/phpDocumentor/Plugin/Plugin.md) | |
| [`ServiceProvider`](./classes/phpDocumentor/Plugin/ServiceProvider.md) | |

### \phpDocumentor\Plugin\Core

#### Classes

| Class | Description |
|-------|-------------|
| [`Exception`](./classes/phpDocumentor/Plugin/Core/Exception.md) | Exception object for the Core Plugin.|
| [`ServiceProvider`](./classes/phpDocumentor/Plugin/Core/ServiceProvider.md) | Register all services and subservices necessary to get phpDocumentor up and running.|

### \phpDocumentor\Plugin\Core\Descriptor\Validator

#### Classes

| Class | Description |
|-------|-------------|
| [`ValidationValueObject`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/ValidationValueObject.md) | |
| [`ValidatorAbstract`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/ValidatorAbstract.md) | Base class for DocBlock Validations.|

### \phpDocumentor\Plugin\Core\Descriptor\Validator\Constraints\Classes

#### Classes

| Class | Description |
|-------|-------------|
| [`HasPackageWithSubpackage`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Classes/HasPackageWithSubpackage.md) | Validates whether a file, class, interface or trait always has a package if there is a subpackage present.|
| [`HasPackageWithSubpackageValidator`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Classes/HasPackageWithSubpackageValidator.md) | Validates whether a file, class, interface or trait always has a package if there is a subpackage present.|
| [`HasSinglePackage`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Classes/HasSinglePackage.md) | Validates whether a file, class, interface or trait has not more than ! package tags.|
| [`HasSinglePackageValidator`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Classes/HasSinglePackageValidator.md) | Validates whether a file, class, interface or trait has not more than 1 package tags.|
| [`HasSingleSubpackage`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Classes/HasSingleSubpackage.md) | Validates whether a file, class, interface or trait has not more than 1 subpackage tags.|
| [`HasSingleSubpackageValidator`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Classes/HasSingleSubpackageValidator.md) | Validates whether a file, class, interface or trait has not more than 1 subpackage tags.|

### \phpDocumentor\Plugin\Core\Descriptor\Validator\Constraints\Functions

#### Classes

| Class | Description |
|-------|-------------|
| [`AreAllArgumentsValid`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/AreAllArgumentsValid.md) | Validates whether a function has a default return type in the docblock present.|
| [`AreAllArgumentsValidValidator`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/AreAllArgumentsValidValidator.md) | Base class for constraint validators.|
| [`DoesArgumentNameMatchParam`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/DoesArgumentNameMatchParam.md) | Validates whether a function has a default return type in the docblock present.|
| [`DoesArgumentNameMatchParamValidator`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/DoesArgumentNameMatchParamValidator.md) | Base class for constraint validators.|
| [`DoesArgumentTypehintMatchParam`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/DoesArgumentTypehintMatchParam.md) | Checks the typehint of the argument versus the @param tag.|
| [`DoesArgumentTypehintMatchParamValidator`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/DoesArgumentTypehintMatchParamValidator.md) | Base class for constraint validators.|
| [`DoesParamsExists`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/DoesParamsExists.md) | Validates whether a function has a default return type in the docblock present.|
| [`DoesParamsExistsValidator`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/DoesParamsExistsValidator.md) | Base class for constraint validators.|
| [`IsArgumentInDocBlock`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/IsArgumentInDocBlock.md) | Validates whether a function has a missing argument in the docblock.|
| [`IsArgumentInDocBlockValidator`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/IsArgumentInDocBlockValidator.md) | Validates if a Method or Function&#039;s arguments all have an accompanying param tag in the DocBlock.|
| [`IsParamTypeNotAnIdeDefault`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/IsParamTypeNotAnIdeDefault.md) | Validates whether a function has a default param type in the docblock present.|
| [`IsParamTypeNotAnIdeDefaultValidator`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/IsParamTypeNotAnIdeDefaultValidator.md) | Validates whether the type for a param tag with a Method or Function is not a known default.|
| [`IsReturnTypeNotAnIdeDefault`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/IsReturnTypeNotAnIdeDefault.md) | Validates whether a function has a default return type in the docblock present.|
| [`IsReturnTypeNotAnIdeDefaultValidator`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/IsReturnTypeNotAnIdeDefaultValidator.md) | Base class for constraint validators.|

### \phpDocumentor\Plugin\Core\Descriptor\Validator\Constraints\Property

#### Classes

| Class | Description |
|-------|-------------|
| [`HasSummary`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Property/HasSummary.md) | Detects whether a property has a summary, or an `@var` tag with a description.|
| [`HasSummaryValidator`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Property/HasSummaryValidator.md) | Validates whether a property has a summary, or an `@var` tag with a description.|

### \phpDocumentor\Plugin\Core\Descriptor\Validator\Functions

#### Classes

| Class | Description |
|-------|-------------|
| [`AreAllArgumentsValid`](./classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Functions/AreAllArgumentsValid.md) | |

### \phpDocumentor\Plugin\Core\Transformer\Behaviour\Tag

#### Classes

| Class | Description |
|-------|-------------|
| [`AuthorTag`](./classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/AuthorTag.md) | Behaviour that links to email addresses in the @author tag.|
| [`CoversTag`](./classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/CoversTag.md) | Behaviour that adds support for the @covers tag|
| [`IgnoreTag`](./classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/IgnoreTag.md) | Behaviour that adds support for @ignore tag.|
| [`InternalTag`](./classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/InternalTag.md) | Behaviour that adds support for @internal inline tag.|
| [`LicenseTag`](./classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/LicenseTag.md) | Behaviour that enables links to URLs in the @license tag.|
| [`MethodTag`](./classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/MethodTag.md) | Behaviour that adds support for the @method tag|
| [`ParamTag`](./classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/ParamTag.md) | Behaviour that adds support for the @param tags.|
| [`PropertyTag`](./classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/PropertyTag.md) | Behaviour that adds support for the property tag|
| [`ReturnTag`](./classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/ReturnTag.md) | Behaviour that adds support for the return tag|
| [`UsesTag`](./classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/UsesTag.md) | Behaviour that adds support for the uses tag|
| [`VarTag`](./classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/VarTag.md) | Behaviour that adds support for the @method tag|

### \phpDocumentor\Plugin\Core\Transformer\Writer

#### Classes

| Class | Description |
|-------|-------------|
| [`Checkstyle`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/Checkstyle.md) | Checkstyle transformation writer; generates checkstyle report|
| [`FileIo`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/FileIo.md) | Writer containing file system operations.|
| [`Pathfinder`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/Pathfinder.md) | |
| [`Sourcecode`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/Sourcecode.md) | Sourcecode transformation writer; generates syntax highlighted source files in a destination&#039;s subfolder.|
| [`Statistics`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/Statistics.md) | Statistics transformation writer; generates statistic report as XML.|
| [`Xml`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml.md) | Converts the structural information of phpDocumentor into an XML file.|
| [`Xsl`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xsl.md) | XSL transformation writer; generates static HTML out of the structure and XSL templates.|

### \phpDocumentor\Plugin\Core\Transformer\Writer\Xml

#### Classes

| Class | Description |
|-------|-------------|
| [`ArgumentConverter`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/ArgumentConverter.md) | Converter used to create an XML Element representing a method or function argument.|
| [`ConstantConverter`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/ConstantConverter.md) | Converter used to create an XML Element representing the constant and its DocBlock.|
| [`DocBlockConverter`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/DocBlockConverter.md) | Converter used to create an XML Element representing a DocBlock and its tags.|
| [`InterfaceConverter`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/InterfaceConverter.md) | Converter used to create an XML Element representing the interface and its Constants, Methods and DocBlock.|
| [`MethodConverter`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/MethodConverter.md) | Converter used to create an XML Element representing the method, its arguments and its DocBlock.|
| [`PropertyConverter`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/PropertyConverter.md) | Converter used to create an XML Element representing the property and its DocBlock.|
| [`TagConverter`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/TagConverter.md) | Creates an XML Element &#039;tag&#039; and appends it to the provided parent element.|
| [`TraitConverter`](./classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/TraitConverter.md) | Converter used to create an XML Element representing the Trait and its Methods, Properties and DocBlock.|

### \phpDocumentor\Plugin\Core\Xslt

#### Classes

| Class | Description |
|-------|-------------|
| [`Extension`](./classes/phpDocumentor/Plugin/Core/Xslt/Extension.md) | XSLT filters that can be used inside a template.|

### \phpDocumentor\Plugin\Graphs

#### Classes

| Class | Description |
|-------|-------------|
| [`ServiceProvider`](./classes/phpDocumentor/Plugin/Graphs/ServiceProvider.md) | |

### \phpDocumentor\Plugin\Graphs\Writer

#### Classes

| Class | Description |
|-------|-------------|
| [`Graph`](./classes/phpDocumentor/Plugin/Graphs/Writer/Graph.md) | Writer responsible for generating various graphs.|

### \phpDocumentor\Plugin\LegacyNamespaceConverter

#### Classes

| Class | Description |
|-------|-------------|
| [`LegacyNamespaceFilter`](./classes/phpDocumentor/Plugin/LegacyNamespaceConverter/LegacyNamespaceFilter.md) | Converts elements with underscores into a namespaced version.|
| [`ServiceProvider`](./classes/phpDocumentor/Plugin/LegacyNamespaceConverter/ServiceProvider.md) | Converts all underscored class names into namespaces.|

### \phpDocumentor\Plugin\LegacyNamespaceConverter\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`LegacyNamespaceFilterTest`](./classes/phpDocumentor/Plugin/LegacyNamespaceConverter/Tests/LegacyNamespaceFilterTest.md) | Tests the phpDocumentor\Plugin\LegacyNamespaceConverter\LegacyNamespaceFilter class.|

### \phpDocumentor\Plugin\Scrybe

#### Classes

| Class | Description |
|-------|-------------|
| [`ServiceProvider`](./classes/phpDocumentor/Plugin/Scrybe/ServiceProvider.md) | Creates and binds the components for the generation of manuals.|

### \phpDocumentor\Plugin\Scrybe\Command\Manual

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseConvertCommand`](./classes/phpDocumentor/Plugin/Scrybe/Command/Manual/BaseConvertCommand.md) | Abstract Command class containing the scaffolding for the subsequent converting commands.|
| [`ToHtmlCommand`](./classes/phpDocumentor/Plugin/Scrybe/Command/Manual/ToHtmlCommand.md) | Command used to tell the application to convert from a format to HTML.|
| [`ToLatexCommand`](./classes/phpDocumentor/Plugin/Scrybe/Command/Manual/ToLatexCommand.md) | Command used to tell the application to convert from a format to Latex.|
| [`ToPdfCommand`](./classes/phpDocumentor/Plugin/Scrybe/Command/Manual/ToPdfCommand.md) | Command used to tell the application to convert from a format to PDF.|

### \phpDocumentor\Plugin\Scrybe\Converter

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseConverter`](./classes/phpDocumentor/Plugin/Scrybe/Converter/BaseConverter.md) | |
| [`Factory`](./classes/phpDocumentor/Plugin/Scrybe/Converter/Factory.md) | This factory attempts to create a converter given an input and output format and return that.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ConverterInterface`](./classes/phpDocumentor/Plugin/Scrybe/Converter/ConverterInterface.md) | This interface provides a basic contract between the Converters and all classes that want to use them.|
| [`ToHtmlInterface`](./classes/phpDocumentor/Plugin/Scrybe/Converter/ToHtmlInterface.md) | |
| [`ToLatexInterface`](./classes/phpDocumentor/Plugin/Scrybe/Converter/ToLatexInterface.md) | Interface that dictates the custom options that all converters that convert to Latex should have.|
| [`ToPdfInterface`](./classes/phpDocumentor/Plugin/Scrybe/Converter/ToPdfInterface.md) | Interface that dictates the custom options that all converters that convert to Latex should have.|

### \phpDocumentor\Plugin\Scrybe\Converter\Definition

#### Classes

| Class | Description |
|-------|-------------|
| [`Definition`](./classes/phpDocumentor/Plugin/Scrybe/Converter/Definition/Definition.md) | Defines the basic properties for a single conversion process.|
| [`Factory`](./classes/phpDocumentor/Plugin/Scrybe/Converter/Definition/Factory.md) | Factory class that is able to return a contract between an input and output format (Definition).|

### \phpDocumentor\Plugin\Scrybe\Converter\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`ConverterNotFoundException`](./classes/phpDocumentor/Plugin/Scrybe/Converter/Exception/ConverterNotFoundException.md) | Exception indicating that a requested Converter could not be found.|

### \phpDocumentor\Plugin\Scrybe\Converter\Format

#### Classes

| Class | Description |
|-------|-------------|
| [`Collection`](./classes/phpDocumentor/Plugin/Scrybe/Converter/Format/Collection.md) | A Collection containing all different text-bases file formats that are supported by Scrybe, their mmime-types and<br />available extensions.|
| [`Format`](./classes/phpDocumentor/Plugin/Scrybe/Converter/Format/Format.md) | Defines a conversion format in Scrybe.|

### \phpDocumentor\Plugin\Scrybe\Converter\Format\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FormatNotFoundException`](./classes/phpDocumentor/Plugin/Scrybe/Converter/Format/Exception/FormatNotFoundException.md) | |

### \phpDocumentor\Plugin\Scrybe\Converter\Metadata

#### Classes

| Class | Description |
|-------|-------------|
| [`Assets`](./classes/phpDocumentor/Plugin/Scrybe/Converter/Metadata/Assets.md) | This collection manages which assets were found during the discovery phase.|
| [`Glossary`](./classes/phpDocumentor/Plugin/Scrybe/Converter/Metadata/Glossary.md) | The glossary is a collection containing a collection of terms and uses that were discovered during the discovery<br />phase.|
| [`TableOfContents`](./classes/phpDocumentor/Plugin/Scrybe/Converter/Metadata/TableOfContents.md) | This collection manages which headings were discovered during the discovery phase and stores them as entries.|

### \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseEntry`](./classes/phpDocumentor/Plugin/Scrybe/Converter/Metadata/TableOfContents/BaseEntry.md) | The Table of Contents entry provides essential information on the current entry, it&#039;s place in the structure and<br />where it points to.|
| [`File`](./classes/phpDocumentor/Plugin/Scrybe/Converter/Metadata/TableOfContents/File.md) | The Table of Contents File describes a file and the headings it contains.|
| [`Heading`](./classes/phpDocumentor/Plugin/Scrybe/Converter/Metadata/TableOfContents/Heading.md) | The Table of Contents File describes a headings and the Files and subentries it may contain.|
| [`Module`](./classes/phpDocumentor/Plugin/Scrybe/Converter/Metadata/TableOfContents/Module.md) | The Table of Contents module represents an independent section of the documentation.|

### \phpDocumentor\Plugin\Scrybe\Converter\RestructuredText

#### Classes

| Class | Description |
|-------|-------------|
| [`Document`](./classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Document.md) | This is a customized RestructuredText document to register Scrybe-specific directives, roles and options.|
| [`ToHtml`](./classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/ToHtml.md) | Class used to convert one or more RestructuredText documents to their HTML representation.|

### \phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Directives

#### Classes

| Class | Description |
|-------|-------------|
| [`CodeBlock`](./classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Directives/CodeBlock.md) | Directive used to process `.. toctree::` and insert entries from the table of contents.|
| [`Figure`](./classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Directives/Figure.md) | Directive used to process `.. figure::` and collect images as assets to be copied.|
| [`Image`](./classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Directives/Image.md) | Directive used to process `.. image::` and collect images as assets to be copied.|
| [`Toctree`](./classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Directives/Toctree.md) | Directive used to process `.. toctree::` and insert entries from the table of contents.|

### \phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Roles

#### Classes

| Class | Description |
|-------|-------------|
| [`Doc`](./classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Roles/Doc.md) | The :doc: role creates a link to an external document.|

### \phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Visitors

#### Classes

| Class | Description |
|-------|-------------|
| [`Creator`](./classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Visitors/Creator.md) | A specialized RestructuredText Parser/Visitor to provide assistance methods for the creation phase.|
| [`Discover`](./classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Visitors/Discover.md) | A specialized RestructuredText Parser/Visitor to aid in the discovery phase.|

### \phpDocumentor\Plugin\Scrybe\Template

#### Classes

| Class | Description |
|-------|-------------|
| [`Factory`](./classes/phpDocumentor/Plugin/Scrybe/Template/Factory.md) | A factory used to retrieve a template engine given a simplified name.|
| [`Twig`](./classes/phpDocumentor/Plugin/Scrybe/Template/Twig.md) | Template class to use Twig to generate templates.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`TemplateInterface`](./classes/phpDocumentor/Plugin/Scrybe/Template/TemplateInterface.md) | |

### \phpDocumentor\Plugin\Twig

#### Classes

| Class | Description |
|-------|-------------|
| [`Extension`](./classes/phpDocumentor/Plugin/Twig/Extension.md) | Basic extension adding phpDocumentor specific functionality for Twig<br />templates.|
| [`ServiceProvider`](./classes/phpDocumentor/Plugin/Twig/ServiceProvider.md) | Provides a series of services that are necessary for Twig to work with phpDocumentor.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExtensionInterface`](./classes/phpDocumentor/Plugin/Twig/ExtensionInterface.md) | An interface shared by all Twig interfaces intended for phpDocumentor.|

### \phpDocumentor\Plugin\Twig\Writer

#### Classes

| Class | Description |
|-------|-------------|
| [`Twig`](./classes/phpDocumentor/Plugin/Twig/Writer/Twig.md) | A specialized writer which uses the Twig templating engine to convert<br />templates to HTML output.|

### \phpDocumentor\Reflection

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseReflector`](./classes/phpDocumentor/Reflection/BaseReflector.md) | Basic reflection providing support for events and basic properties as a<br />DocBlock and names.|
| [`BaseReflectorMock`](./classes/phpDocumentor/Reflection/BaseReflectorMock.md) | Class for testing base reflector.|
| [`BaseReflectorTest`](./classes/phpDocumentor/Reflection/BaseReflectorTest.md) | Class for testing base reflector.|
| [`ClassReflector`](./classes/phpDocumentor/Reflection/ClassReflector.md) | Provides static reflection for a class.|
| [`ClassReflectorMock`](./classes/phpDocumentor/Reflection/ClassReflectorMock.md) | Class for testing ClassReflector.|
| [`ClassReflectorTest`](./classes/phpDocumentor/Reflection/ClassReflectorTest.md) | Class for testing ClassReflector.|
| [`ConstantReflector`](./classes/phpDocumentor/Reflection/ConstantReflector.md) | Provides Static Reflection for file-level constants.|
| [`DocBlock`](./classes/phpDocumentor/Reflection/DocBlock.md) | Parses the DocBlock for any structure.|
| [`DocBlockTest`](./classes/phpDocumentor/Reflection/DocBlockTest.md) | Test class for phpDocumentor\Reflection\DocBlock|
| [`Exception`](./classes/phpDocumentor/Reflection/Exception.md) | An exception specifically originating from the Reflection component.|
| [`FileReflector`](./classes/phpDocumentor/Reflection/FileReflector.md) | Reflection class for a full file.|
| [`FunctionReflector`](./classes/phpDocumentor/Reflection/FunctionReflector.md) | Provides Static Reflection for functions.|
| [`IncludeReflector`](./classes/phpDocumentor/Reflection/IncludeReflector.md) | Basic reflection providing support for events and basic properties as a<br />DocBlock and names.|
| [`InterfaceReflector`](./classes/phpDocumentor/Reflection/InterfaceReflector.md) | Basic reflection providing support for events and basic properties as a<br />DocBlock and names.|
| [`Lexer`](./classes/phpDocumentor/Reflection/Lexer.md) | Custom lexer for phpDocumentor.|
| [`NodeExprMock`](./classes/phpDocumentor/Reflection/NodeExprMock.md) | Class for testing PhpParser_Node_Expr.|
| [`NodeStmtMock`](./classes/phpDocumentor/Reflection/NodeStmtMock.md) | Class for testing PhpParser_Node_Stmt.|
| [`NodeStmtMock2`](./classes/phpDocumentor/Reflection/NodeStmtMock2.md) | Class for testing PhpParser_Node_Stmt.|
| [`PrettyPrinter`](./classes/phpDocumentor/Reflection/PrettyPrinter.md) | Custom PrettyPrinter for phpDocumentor.|
| [`PrettyPrinterTest`](./classes/phpDocumentor/Reflection/PrettyPrinterTest.md) | Class for testing the PrettyPrinter.|
| [`ReflectionAbstract`](./classes/phpDocumentor/Reflection/ReflectionAbstract.md) | Provides basic event logging and dispatching for every reflection class.|
| [`TraitReflector`](./classes/phpDocumentor/Reflection/TraitReflector.md) | Provides static reflection for a class.|
| [`Traverser`](./classes/phpDocumentor/Reflection/Traverser.md) | The source code traverser that scans the given source code and transforms<br />it into tokens.|

### \phpDocumentor\Reflection\ClassReflector

#### Classes

| Class | Description |
|-------|-------------|
| [`ConstantReflector`](./classes/phpDocumentor/Reflection/ClassReflector/ConstantReflector.md) | Provides Static Reflection for file-level constants.|
| [`MethodReflector`](./classes/phpDocumentor/Reflection/ClassReflector/MethodReflector.md) | Provides Static Reflection for functions.|
| [`PropertyReflector`](./classes/phpDocumentor/Reflection/ClassReflector/PropertyReflector.md) | Basic reflection providing support for events and basic properties as a<br />DocBlock and names.|

### \phpDocumentor\Reflection\DocBlock

#### Classes

| Class | Description |
|-------|-------------|
| [`Context`](./classes/phpDocumentor/Reflection/DocBlock/Context.md) | The context in which a DocBlock occurs.|
| [`Description`](./classes/phpDocumentor/Reflection/DocBlock/Description.md) | Parses a Description of a DocBlock or tag.|
| [`DescriptionTest`](./classes/phpDocumentor/Reflection/DocBlock/DescriptionTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Description|
| [`Location`](./classes/phpDocumentor/Reflection/DocBlock/Location.md) | The location a DocBlock occurs within a file.|
| [`Serializer`](./classes/phpDocumentor/Reflection/DocBlock/Serializer.md) | Serializes a DocBlock instance.|
| [`Tag`](./classes/phpDocumentor/Reflection/DocBlock/Tag.md) | Parses a tag definition for a DocBlock.|
| [`TagTest`](./classes/phpDocumentor/Reflection/DocBlock/TagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\VarTag|

### \phpDocumentor\Reflection\DocBlock\Tag

#### Classes

| Class | Description |
|-------|-------------|
| [`AuthorTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/AuthorTag.md) | Reflection class for an @author tag in a Docblock.|
| [`CoversTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/CoversTag.md) | Reflection class for a @covers tag in a Docblock.|
| [`CoversTagTest`](./classes/phpDocumentor/Reflection/DocBlock/Tag/CoversTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\CoversTag|
| [`DeprecatedTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/DeprecatedTag.md) | Reflection class for a @deprecated tag in a Docblock.|
| [`DeprecatedTagTest`](./classes/phpDocumentor/Reflection/DocBlock/Tag/DeprecatedTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\DeprecatedTag|
| [`ExampleTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/ExampleTag.md) | Reflection class for a @example tag in a Docblock.|
| [`ExampleTagTest`](./classes/phpDocumentor/Reflection/DocBlock/Tag/ExampleTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\ExampleTag|
| [`LinkTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/LinkTag.md) | Reflection class for a @link tag in a Docblock.|
| [`LinkTagTest`](./classes/phpDocumentor/Reflection/DocBlock/Tag/LinkTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\LinkTag|
| [`MethodTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/MethodTag.md) | Reflection class for a @method in a Docblock.|
| [`MethodTagTest`](./classes/phpDocumentor/Reflection/DocBlock/Tag/MethodTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\MethodTag|
| [`ParamTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/ParamTag.md) | Reflection class for a @param tag in a Docblock.|
| [`ParamTagTest`](./classes/phpDocumentor/Reflection/DocBlock/Tag/ParamTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\ParamTag|
| [`PropertyReadTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/PropertyReadTag.md) | Reflection class for a @property-read tag in a Docblock.|
| [`PropertyTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/PropertyTag.md) | Reflection class for a @property tag in a Docblock.|
| [`PropertyWriteTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/PropertyWriteTag.md) | Reflection class for a @property-write tag in a Docblock.|
| [`ReturnTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/ReturnTag.md) | Reflection class for a @return tag in a Docblock.|
| [`ReturnTagTest`](./classes/phpDocumentor/Reflection/DocBlock/Tag/ReturnTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\ReturnTag|
| [`SeeTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/SeeTag.md) | Reflection class for a @see tag in a Docblock.|
| [`SeeTagTest`](./classes/phpDocumentor/Reflection/DocBlock/Tag/SeeTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\SeeTag|
| [`SinceTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/SinceTag.md) | Reflection class for a @since tag in a Docblock.|
| [`SinceTagTest`](./classes/phpDocumentor/Reflection/DocBlock/Tag/SinceTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\SinceTag|
| [`SourceTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/SourceTag.md) | Reflection class for a @source tag in a Docblock.|
| [`SourceTagTest`](./classes/phpDocumentor/Reflection/DocBlock/Tag/SourceTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\SourceTag|
| [`ThrowsTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/ThrowsTag.md) | Reflection class for a @throws tag in a Docblock.|
| [`ThrowsTagTest`](./classes/phpDocumentor/Reflection/DocBlock/Tag/ThrowsTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\ThrowsTag|
| [`UsesTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/UsesTag.md) | Reflection class for a @uses tag in a Docblock.|
| [`UsesTagTest`](./classes/phpDocumentor/Reflection/DocBlock/Tag/UsesTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\UsesTag|
| [`VarTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/VarTag.md) | Reflection class for a @var tag in a Docblock.|
| [`VarTagTest`](./classes/phpDocumentor/Reflection/DocBlock/Tag/VarTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\VarTag|
| [`VersionTag`](./classes/phpDocumentor/Reflection/DocBlock/Tag/VersionTag.md) | Reflection class for a @version tag in a Docblock.|
| [`VersionTagTest`](./classes/phpDocumentor/Reflection/DocBlock/Tag/VersionTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\VersionTag|

### \phpDocumentor\Reflection\DocBlock\Type

#### Classes

| Class | Description |
|-------|-------------|
| [`Collection`](./classes/phpDocumentor/Reflection/DocBlock/Type/Collection.md) | Collection|
| [`CollectionTest`](./classes/phpDocumentor/Reflection/DocBlock/Type/CollectionTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Type\Collection|

### \phpDocumentor\Reflection\Event

#### Classes

| Class | Description |
|-------|-------------|
| [`ExportDocBlockTagEvent`](./classes/phpDocumentor/Reflection/Event/ExportDocBlockTagEvent.md) | Abstract class representing the base elements of a phpDocumentor event.|
| [`PostDocBlockExtractionEvent`](./classes/phpDocumentor/Reflection/Event/PostDocBlockExtractionEvent.md) | Abstract class representing the base elements of a phpDocumentor event.|

### \phpDocumentor\Reflection\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`UnparsableFile`](./classes/phpDocumentor/Reflection/Exception/UnparsableFile.md) | Exception representing any situation where the file is not parsable.|
| [`UnreadableFile`](./classes/phpDocumentor/Reflection/Exception/UnreadableFile.md) | Exception representing any error in the Reflection library due to a file not<br />being readable or accessible.|

### \phpDocumentor\Reflection\FunctionReflector

#### Classes

| Class | Description |
|-------|-------------|
| [`ArgumentReflector`](./classes/phpDocumentor/Reflection/FunctionReflector/ArgumentReflector.md) | Basic reflection providing support for events and basic properties as a<br />DocBlock and names.|

### \phpDocumentor\Transformer

#### Classes

| Class | Description |
|-------|-------------|
| [`Configuration`](./classes/phpDocumentor/Transformer/Configuration.md) | Configuration definition for the transformer.|
| [`Exception`](./classes/phpDocumentor/Transformer/Exception.md) | Provides the basic exception for the parser package.|
| [`ServiceProvider`](./classes/phpDocumentor/Transformer/ServiceProvider.md) | This provider is responsible for registering the transformer component with the given Application.|
| [`Template`](./classes/phpDocumentor/Transformer/Template.md) | Model representing a template.|
| [`Transformation`](./classes/phpDocumentor/Transformer/Transformation.md) | Class representing a single Transformation.|
| [`Transformer`](./classes/phpDocumentor/Transformer/Transformer.md) | Core class responsible for transforming the cache file to a set of artifacts.|

### \phpDocumentor\Transformer\Behaviour

#### Classes

| Class | Description |
|-------|-------------|
| [`BehaviourAbstract`](./classes/phpDocumentor/Transformer/Behaviour/BehaviourAbstract.md) | Collection object for a set of Behaviours.|
| [`Collection`](./classes/phpDocumentor/Transformer/Behaviour/Collection.md) | Collection object for a set of Behaviours.|

### \phpDocumentor\Transformer\Command\Project

#### Classes

| Class | Description |
|-------|-------------|
| [`TransformCommand`](./classes/phpDocumentor/Transformer/Command/Project/TransformCommand.md) | Transforms the structure file into the specified output format|

### \phpDocumentor\Transformer\Command\Template

#### Classes

| Class | Description |
|-------|-------------|
| [`ListCommand`](./classes/phpDocumentor/Transformer/Command/Template/ListCommand.md) | Lists all templates known to phpDocumentor.|

### \phpDocumentor\Transformer\Configuration

#### Classes

| Class | Description |
|-------|-------------|
| [`ExternalClassDocumentation`](./classes/phpDocumentor/Transformer/Configuration/ExternalClassDocumentation.md) | Reference that relates classes with a specific prefix to a URL template.|
| [`Transformations`](./classes/phpDocumentor/Transformer/Configuration/Transformations.md) | Contains the templates and custom transformations that are applied during transformation.|

### \phpDocumentor\Transformer\Configuration\Transformations

#### Classes

| Class | Description |
|-------|-------------|
| [`Template`](./classes/phpDocumentor/Transformer/Configuration/Transformations/Template.md) | Configuration object for a template selection.|

### \phpDocumentor\Transformer\Event

#### Classes

| Class | Description |
|-------|-------------|
| [`PostTransformEvent`](./classes/phpDocumentor/Transformer/Event/PostTransformEvent.md) | Event happen right after all transformations have completed.|
| [`PostTransformationEvent`](./classes/phpDocumentor/Transformer/Event/PostTransformationEvent.md) | Event that happens after each individual transformation.|
| [`PreTransformEvent`](./classes/phpDocumentor/Transformer/Event/PreTransformEvent.md) | Event that happens prior to the execution of all transformations.|
| [`PreTransformationEvent`](./classes/phpDocumentor/Transformer/Event/PreTransformationEvent.md) | Event happening prior to each individual transformation.|
| [`PreXslWriterEvent`](./classes/phpDocumentor/Transformer/Event/PreXslWriterEvent.md) | Event launched during the Xsl Transformation of an individual output file.|
| [`WriterInitializationEvent`](./classes/phpDocumentor/Transformer/Event/WriterInitializationEvent.md) | Abstract class representing the base elements of a phpDocumentor event.|

### \phpDocumentor\Transformer\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`MissingDependencyException`](./classes/phpDocumentor/Transformer/Exception/MissingDependencyException.md) | This exception is thrown when a required dependency is not included.|
| [`UnknownWriter`](./classes/phpDocumentor/Transformer/Exception/UnknownWriter.md) | Exception thrown when a template attempts to use a writer that is unknown to phpDocumentor.|

### \phpDocumentor\Transformer\Router

#### Classes

| Class | Description |
|-------|-------------|
| [`ExternalRouter`](./classes/phpDocumentor/Transformer/Router/ExternalRouter.md) | Connects class, interface and traits to remote documentation sets.|
| [`ForFileProxy`](./classes/phpDocumentor/Transformer/Router/ForFileProxy.md) | Proxies a generated Routing Rule to generate physical filenames.|
| [`Queue`](./classes/phpDocumentor/Transformer/Router/Queue.md) | Provides a queue of routers to determine the order in which they are executed.|
| [`Renderer`](./classes/phpDocumentor/Transformer/Router/Renderer.md) | Renders an HTML anchor pointing to the location of the provided element.|
| [`RouterAbstract`](./classes/phpDocumentor/Transformer/Router/RouterAbstract.md) | Object containing a collection of routes.|
| [`Rule`](./classes/phpDocumentor/Transformer/Router/Rule.md) | |
| [`StandardRouter`](./classes/phpDocumentor/Transformer/Router/StandardRouter.md) | The default router for phpDocumentor.|

### \phpDocumentor\Transformer\Router\Matcher

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`MatcherInterface`](./classes/phpDocumentor/Transformer/Router/Matcher/MatcherInterface.md) | Description of the public interface to match Descriptors with a Routing rule.|

### \phpDocumentor\Transformer\Router\UrlGenerator

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`UrlGeneratorInterface`](./classes/phpDocumentor/Transformer/Router/UrlGenerator/UrlGeneratorInterface.md) | Generates relative URLs with elements for use in the generated HTML documentation.|

### \phpDocumentor\Transformer\Router\UrlGenerator\Standard

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassDescriptor`](./classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/ClassDescriptor.md) | |
| [`ConstantDescriptor`](./classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/ConstantDescriptor.md) | |
| [`FileDescriptor`](./classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/FileDescriptor.md) | |
| [`FunctionDescriptor`](./classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/FunctionDescriptor.md) | Generates a relative URL with functions for use in the generated HTML documentation.|
| [`MethodDescriptor`](./classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/MethodDescriptor.md) | Generates a relative URL with methods for use in the generated HTML documentation.|
| [`NamespaceDescriptor`](./classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/NamespaceDescriptor.md) | |
| [`PackageDescriptor`](./classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/PackageDescriptor.md) | |
| [`PropertyDescriptor`](./classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/PropertyDescriptor.md) | Generates a relative URL with properties for use in the generated HTML documentation.|
| [`QualifiedNameToUrlConverter`](./classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/QualifiedNameToUrlConverter.md) | Service class used to convert Qualified names into URL paths for the Standard Router.|

### \phpDocumentor\Transformer\Template

#### Classes

| Class | Description |
|-------|-------------|
| [`Collection`](./classes/phpDocumentor/Transformer/Template/Collection.md) | Contains a collection of Templates that may be queried.|
| [`Factory`](./classes/phpDocumentor/Transformer/Template/Factory.md) | |
| [`Parameter`](./classes/phpDocumentor/Transformer/Template/Parameter.md) | Model representing a parameter in a template or transformation.|
| [`PathResolver`](./classes/phpDocumentor/Transformer/Template/PathResolver.md) | |

### \phpDocumentor\Transformer\Writer

#### Classes

| Class | Description |
|-------|-------------|
| [`Collection`](./classes/phpDocumentor/Transformer/Writer/Collection.md) | A collection of Writer objects.|
| [`WriterAbstract`](./classes/phpDocumentor/Transformer/Writer/WriterAbstract.md) | Base class for the actual transformation business logic (writers).|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Initializable`](./classes/phpDocumentor/Transformer/Writer/Initializable.md) | |
| [`Routable`](./classes/phpDocumentor/Transformer/Writer/Routable.md) | Public interface for writers who use the routing system to determine relative URLs for Descriptors.|
| [`Translatable`](./classes/phpDocumentor/Transformer/Writer/Translatable.md) | All writers that have items that should be translated should implement this interface|

### \phpDocumentor\Transformer\Writer\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`RequirementMissing`](./classes/phpDocumentor/Transformer/Writer/Exception/RequirementMissing.md) | This exception should be thrown by a Writer when it is missing one of its requirements.|

### \phpDocumentor\Translator

#### Classes

| Class | Description |
|-------|-------------|
| [`Configuration`](./classes/phpDocumentor/Translator/Configuration.md) | Configuration definition for the translations.|
| [`ServiceProvider`](./classes/phpDocumentor/Translator/ServiceProvider.md) | Registers all components for the translator to work.|
| [`Translator`](./classes/phpDocumentor/Translator/Translator.md) | Translator proxy for phpDocumentor.|

### \yxorP\Build

#### Classes

| Class | Description |
|-------|-------------|
| [`CSS`](./classes/yxorP/Build/CSS.md) | |
| [`Exception`](./classes/yxorP/Build/Exception.md) | |
| [`JS`](./classes/yxorP/Build/JS.md) | |
| [`Minify`](./classes/yxorP/Build/Minify.md) | |

### \yxorP\Build\Exceptions

#### Classes

| Class | Description |
|-------|-------------|
| [`BasicException`](./classes/yxorP/Build/Exceptions/BasicException.md) | |
| [`FileImportException`](./classes/yxorP/Build/Exceptions/FileImportException.md) | |
| [`IOException`](./classes/yxorP/Build/Exceptions/IOException.md) | |

### \yxorP\Http

#### Classes

| Class | Description |
|-------|-------------|
| [`EventWrapper`](./classes/yxorP/Http/EventWrapper.md) | |
| [`generalHelper`](./classes/yxorP/Http/generalHelper.md) | |
| [`ParamStore`](./classes/yxorP/Http/ParamStore.md) | |
| [`Request`](./classes/yxorP/Http/Request.md) | |
| [`Response`](./classes/yxorP/Http/Response.md) | |

### \yxorP\Minify

#### Classes

| Class | Description |
|-------|-------------|
| [`Areplacer`](./classes/yxorP/Minify/Areplacer.md) | |
| [`AttributesSimplifier`](./classes/yxorP/Minify/AttributesSimplifier.md) | |
| [`HtmlCommentsRemover`](./classes/yxorP/Minify/HtmlCommentsRemover.md) | |
| [`InlineCssMinifier`](./classes/yxorP/Minify/InlineCssMinifier.md) | |
| [`InlineJavascriptMinifier`](./classes/yxorP/Minify/InlineJavascriptMinifier.md) | |
| [`Minify`](./classes/yxorP/Minify/Minify.md) | |
| [`QuotesRemover`](./classes/yxorP/Minify/QuotesRemover.md) | |
| [`WhitespacesRemover`](./classes/yxorP/Minify/WhitespacesRemover.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`MinfyInterface`](./classes/yxorP/Minify/MinfyInterface.md) | |

### \yxorP\cache

#### Classes

| Class | Description |
|-------|-------------|
| [`Cache`](./classes/yxorP/cache/Cache.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`State`](./classes/yxorP/cache/State.md) | |
