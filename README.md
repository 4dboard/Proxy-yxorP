![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/logo.png)

![image](https://user-images.githubusercontent.com/6468571/174686673-e3ee3ce5-2c13-4ae6-886d-f22aed12a5a0.png)

## 🦄 .yxorP Stateful SAAS(y), Multi-tenancy Proxy Guzzler + Backend (GUI) included, PHP CURL+Composer are Optional

📢 [ [ ARCHITECTURE](https://github.com/4dboard/proxy-yxorp/wiki) ]
⚡ [ [ DEVELOPERS](https://github.com/4dboard/proxy-yxorp/blob/main/docs/index.md) ]
🌈 [ [DOCUMENTATION](https://4dboard.github.io/proxy-yxorp/docs/) ]
🔥 [ [MAKING VIDEO](https://4dboard.github.io/proxy-yxorp/docs/movie.mp4) ]
🌟 [ [WEBSITE](https://4dboard.github.io/) ] 🚀️

[![image](https://a.fsdn.com/con/app/sf-download-button)](https://sourceforge.net/projects/proxy-yxorp/files/latest/download)

[![image](https://www.donPabloNow.com/notice.wepd)](https://www.donPabloNow.com/#notice)

---

![image](https://user-images.githubusercontent.com/6468571/177668426-3548dbf3-03ff-4ea0-a1be-08436a3751bd.png)

> ⛔️[ GITHUB  : ](https://github.com/donspablo) Without more people getting behind this, it won't go very far. Please click the "star" button to show your support for this endeavour if you think it interesting. Assuming there is at least some enthusiasm for the idea, development will proceed.

> 🏆️ [ LIVE DEMO  : ](https://gitpod.io/#https://github.com/4dboard/proxy-yxorp) We have just launched the first working live demo / sneak preview via Gitpod`

> 🎥️ [ MAKING OF VIDEO  : ](https://4dboard.github.io/proxy-yxorp/docs/movie.mp4) We put up a short video called "Making of the yxorP Proxy" so that anyone who wants to see how the project came together can do so.

> ❤️[ PATREON  : ](https://patreon.com/donpablonow) Donations always welcome via Github (Subscriptions & Credit Cards), Patreon (Subscriptions & Credit Cards), Paypal (Once-off, Credit Cards & E-wallet) & Ethereum (Once-off, Crypto Currency)

> ✔️[ PAYPAL  : ](https://www.paypal.me/donpanlonow) Any contributions you can make toward this endeavour would be much appreciated.

---

![image](https://user-images.githubusercontent.com/6468571/177670081-392fa979-aceb-4368-8a81-ff12bcb80448.png)

yxorP is a plug-and-play, flat-file application that *does not need Composer, PHP CURL, or databases*; these are all
optional additions that are fully supported. yxorP is intended to act as a proxy that can edit or update the content
of *multiple websites* using a PHAR (PHP archive) binary version of *Guzzle*, and managed via a user-friendly *
Cockpit backend (GUI)*.

It is well-known that yxorP is one of the web proxy systems that offers the most customization compared to other web
proxy systems now available on the market. This is owing to its event-driven architecture and emphasis on its
plugin-based design, as opposed to its built-in features, which are the most crucial and differentiating components that
allow customization and development of its capabilities. In addition to its Back-end administration CMS and graphical
user interface, yxorP has a number of other distinguishing features.

The incoming request hostname is used to fetch site-specific requirements from the backend, the target website is then
retrieved and modified accordingly. Additionally, the website content can be optionally spun using the *article spinning
engine* that is already embedded into the application. After the website has been modified the result is then stored for
a predefined time inside a custom-built, *flat-file cache* system architectured to be *500x faster than memory-based
cache* systems such as Memcache and Redis. This is accomplished by bypassing the serialisation and deserialization
processes, which resulted a significantly faster cache.

The Bugsnag error reporting and warning system now supports yxorP in its most complete version after an upgrade. This
was done to assure Bugsnag's compatibility with the modification. Changes to the *default logging* system may be done in
as little as two minutes due to the program's compatibility with the great majority of the *industry's primary error
tracking systems*.

![image](https://user-images.githubusercontent.com/6468571/174922574-d5a246b5-c30e-4a63-bc22-4957184feef9.png)

yxorP was designed to operate with either a stateless server (Apache) or a *stateful server* (Swoole) which are *
high-performance* networking frameworks with an *event-driven, asynchronous, and non-blocking I/O* model - Compatible
with TCP, UDP, Unix socket, HTTP, and Websocket and allows the creation of concurrent services ( *Parrelelle*) that are
both rapid and scalable.

![image](https://user-images.githubusercontent.com/6468571/177669133-19ff6171-8f32-45ed-9dbb-af6d0cc46583.png)

PHP, unlike other programming languages, does not have its own state. Each and every query is unique. In this way, the
protocol is relatively similar to the HyperText Transfer Protocol's roots (HTTP). On top of that, state may be
implemented via sessions, databases, shared memory, files, or anything else that retains state in some way. There may be
alternatives, such as shared memory.

``` 

# NGINX EXAMPLE
DocumentRoot "/.yxorP/index.php" 
ServerName www.demo.com
ServerAlias server 

``` 

![image](https://user-images.githubusercontent.com/6468571/177670311-52d8a69f-a116-4709-b666-5a88f1d25c7b.png)

Both the Swoole and RoadRunner servers, which are renowned for their speed and durability, are able to support the
execution of PHP applications with persistent data. After installation, the Swoole PHP extension provides users with
access to a number of useful and intriguing functions. Among these features are coroutines, fibers, web sockets, and
caching. In contrast, RoadRunner is a robust application server, load balancer, and process manager written in GoLang.
Octane may use one of these two ways, depending on the program author. Due to the PHP Swoole extension, Octane has
access to a significantly greater variety of functionalities than RoadRunner.

``` 

php ./server.php

```

![image](https://user-images.githubusercontent.com/6468571/177670564-a993d2d1-50f0-48f3-a6ea-90fc81a2e1d9.png)

Docker Compose is a tool that simplifies the design and distribution of multi-container applications. With Compose, we
can specify our services in a YAML file and then deploy, scale, and destruct our infrastructure with a single command.

``` 

cd inc docker-composer up -d 

```

![image](https://user-images.githubusercontent.com/6468571/177670650-69065bc9-5081-446d-afde-ab1c58c43f26.png)

Docker enables its users to manage containers in a manner comparable to managing very lightweight and modular virtual
machines. This streamlines a number of duties, including the design and building of containers and the transportation of
photographs, among others.

```
cd inc docker run

-p 80:80 --rm -u www-data -v \`pwd\`:/var/www -e ENV=dev donpablonow/yxorp 

```

![image](https://user-images.githubusercontent.com/6468571/177671609-309febf0-f0b1-4726-8bbf-a466ebb31e98.png)

> ⚠️Requires: Minimum requirement is PHP version 8.0 +

*NB:* _Before launching the website, you must ensure that the "cockpit" submodule has been pulled and the details in
the '.env.example' are correct and the file has been renamed '.env'._ Cockpit is the graphical user interface (GUI) for
the administration interface, which may be immediately accessed by entering "/cockpit" and supplying the admin username
and password set in the '.env' file. The credentials defined in the '.env' file are used to setup the sqlite database
for the 'cockpit' application. Once the application is accessed/run for the first time, the only way to 'update/change'
the credentials is directly in the sqlite database or via the 'cockpit' application itself (The '.env' admin username
and password are only used on the first run). The application can also always be reset via a clean installation.

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/diagrams.png)

![image](https://user-images.githubusercontent.com/6468571/177671682-6cfa5775-0479-48cb-b54a-8091ccc34458.png)

### 🔋 Batteries Included: Plug & Play \[CURL + Composer Optional\], Proxy as a Service, Multi-tenant, Multi-Threaded, with Cache & Article Spinner.

Convenient features such as built-in content spinning and an auto caching engine are hidden behind a slick online
interface. Among the cache drivers provided are Arangodb, Devnull, Dynamodb (AWS), Cassandra, Devrandom, Files,
CouchBasev3, Memstatic, Firestore, Couchdb, Leveldb, Mongodb, Memcache(d),Predis, Sqlite, Redis, Wincache, Ssdb, and
Zend Disk Cache. The combined might of two of the most successful web proxy initiatives is harnessed for maximum effect.
This self-service proxy engine has zero performance loss and supports numerous tenants by combining a flat-file
beautiful web interface with a custom multi-threaded caching layer and an extremely powerful 10,000+ word thesaurus
article spinner. In addition to having a built-in "cache" management system as well as a web-based "cache" management
system, the proxy is "modular" or "plugin-based." Web-based reporting and analytics using a graphical user interface (
GUI) (GUI). By leveraging a custom-built content spinning engine, the system allows material to be "augmented" (or "
spun") with little performance degradation (10,000+ thesaurus/dictionary entries) while maintaining high quality.

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/Idna.png)

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png) ![image](https://user-images.githubusercontent.com/6468571/177671798-1d8a9fc9-64d4-43d8-82e1-3d2a056ada90.png) ![image](https://user-images.githubusercontent.com/6468571/157188599-5fdfd399-b340-434e-b80b-ca356f8ad8ab.png)

### Cockpit Back-End Cockpit is awesome if you need a flexible content structure but don't want to be limited in how to

use the content. Cockpit is a perfect match if you want to support multiple devices or need a content management UI for
static site builders. Build unique applications and let Cockpit feed them with content.

![image](https://user-images.githubusercontent.com/6468571/174488292-66e75484-d57b-472f-8921-661d09387727.png)

Introduction Cockpit is a headless CMS with an API-first approach that puts content first. It is designed to simplify
the process of publication by separating content management from content consumption on the client side. Cockpit is
focusing just on the back-end work to manage content. Rather than worry about delivery of content through pages, its
goal is to provide structured content across different channels via a
simpleAPI.![image](https://user-images.githubusercontent.com/6468571/174488463-767e2f7a-8409-445b-b7e8-ed45d0965a89.png)

#### Key features:

Manage flexible content models. There are no pre-defined content models. Define the content model yourself. Uncluttered
UI. Cockpit offers you a modern and simple user interface. One system, consume it the way you want. Receive your content
via a simple API. #### The Advantages Of Going Headless - No presentation limitations – build the best design ever. -
Content for multiple channels – create content once, consume anywhere. - Highly scalable content – for all your devices
and microsites. - Minimum training required – get started, immediately. - Easy integrations – connect with everything.

![image](https://user-images.githubusercontent.com/6468571/174488424-88456e97-539c-4ec2-918b-fc59be5be8da.png) ![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png) ![image](https://user-images.githubusercontent.com/6468571/177671919-1584593a-cfcc-476a-93ce-c1a65e81de92.png) ![image](https://user-images.githubusercontent.com/6468571/157188653-bde1f08c-27ee-4eb8-90f7-69d1e60aa949.png)

![image](https://user-images.githubusercontent.com/6468571/177676041-1ab00f30-53a4-40a4-83c2-29c65d766fa5.png)

Applications Create static flat file variants of your original webpages by using yxorP to mirror your websites and offer
the mirrored/cloned copies as static flat file variations of the original webpages.

#### 🔥 Cache

When you use caching to load your websites, you may reduce loading time and server strain, resulting in websites that
load faster.

#### 📛 Firewall

Create a virtual firewall to protect your websites behind your proxy server, giving security against website assaults
such as DDOS attacks and other types of attacks.

#### 🔳 iFrame

It is possible to circumvent CORS for the iframing services that you need – ***not recommended, but feasible***.

#### 🔱 Load-balancing

This may be accomplished by deploying cloned copies of your website on various servers that are connected to a
load-balancing system.

#### ⌛ Allways-online

High/Continuous availability is achieved by running a proxy version of your existing website and switching to this
version of the website during upgrades or down-time.

##### + many more..

There are several additional uses that may be explored, and these are only a few of the more common ones.

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png) ![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/logosnag.png)

Bugsnag provides a solution for error monitoring and application stability management that is easy to use and implement.
The ability to make data-driven decisions about whether to develop software or address problems is contingent on the
ability to maintain stability.

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/Bugsnag.gif)

Diagnostic data from our mobile assistance, which has been regarded as the best-in the industry, enables teams to
reproduce and fix issues as soon as they begin to have an impact on system stability. Reports on error situations are
arranged by root cause and may also be classified by business impact. In addition, they are supplied with extensive
diagnostic information.

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png) ![image](https://user-images.githubusercontent.com/6468571/177672109-b49bb56d-abfe-411f-87b6-b506e47820b8.png) ![image](https://user-images.githubusercontent.com/6468571/157188697-4c3a2b95-b40b-441c-bf6a-45c97e4e4b57.png)

Gitpod gives Theia developers an integrated development environment (IDE) built on top of VS Code for editing and
organizing code. It provides a comprehensive OS environment so that applications developed for the platform may leverage
the OS environment to run.

[![image](https://vercel.com/button)](https://vercel.com/new/clone?repository-url=https://github.com/4dboard/yxorP) [![image](https://www.herokucdn.com/deploy/button.svg)](https://www.heroku.com/deploy/?template=https://gitpod.io/#https://github.com/4dboard/yxorP) [![image](https://render.com/images/deploy-to-render-button.svg)](https://render.com/deploy?repo=https://github.com/4dboard/yxorP) [![image](https://gitpod.io/button/open-in-gitpod.svg)](https://gitpod.io/#https://github.com/4dboard/yxorP)

Visit their website to discover more about Gitpod and how its features evolve over time. Nevertheless, a Gitpod is
really an Ubuntu 20.04 Focal Fossa container running in Docker. The installation procedure is hampered by the absence of
the user gitpod from the list of sudoers. The Dockerfile associated with a Docker instance may be modified by
installation components that need root access. Whether operations performed inside the Dockerfile, at the command line,
or within the code are preferable depends on the circumstance. For many jobs, Dockerfiles do not need to be very
elaborate.

Gitpod has a user account called gitpod and a home directory located at /home/gitpod, but the only data kept in the
shared and sharable workspace is the first Docker container. Only modifications performed in a Gitpod's workspace are
maintained during a clone or rollback. Under the path /workspace/your-workspace-name, all files and folders are deemed
to be part of the workspace.

![image](https://user-images.githubusercontent.com/6468571/152177615-421c1286-33cd-4c38-9f7b-3c486901ba81.png)

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/177672382-fc29dfac-1dab-4192-b042-ced6a6c051e9.png)

![image](https://user-images.githubusercontent.com/6468571/177675967-d206de87-fb28-4ccb-a3e3-14294a90df31.png)

Two of the most powerful PHP reverse proxies now accessible on the internet have been merged to create a single web proxy that outperforms the two when their combined performance is considered. Please keep in mind that this is a brand-new project that may undergo changes in the future. With the php-proxy library, a component of the
PHP programming language that is available for free download, you may quickly and easily configure a web proxy application for your web server. If you are able to contribute to or support this project, it would be much appreciated as it would enable me to devote more development time to it, therefore expediting its progress. ![image](https://user-images.githubusercontent.com/6468571/153799459-4c352a2d-2bc0-413d-9048-7f94bdd7a1a5.png) ![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157206067-a7263dc6-09e4-4350-8ad2-3bd51fc349b0.png) ![image](https://user-images.githubusercontent.com/6468571/157188795-5034fd0f-d40e-4a58-9e8e-286e713fb397.png)

![image](https://user-images.githubusercontent.com/6468571/177675918-d0dcee6e-dc9e-4ed5-b859-85d5debb0bbb.png)

Server Bear in mind that this proxy script may not function properly on websites or pages that are very script-heavy or include an excessive number of "dynamic components," as indicated above. Web proxies' inability to encrypt data is a well-documented flaw in the technology. When visiting such websites, you should utilize a legitimate proxy server to redirect your browser's HTTP requests via the following domains: ![image](https://user-images.githubusercontent.com/6468571/153799352-ee3e60ed-6564-4633-9cc1-7acc2cfb2b50.png)

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157188876-61dc86c4-508f-4169-a1f2-a9582c035c2a.png)

![image](https://user-images.githubusercontent.com/6468571/177675825-3e76629b-33f3-45fb-8358-b5a7a0eea0db.png)

Liberating Dev Tool For All Your Projects LAMP recipe, which may be purchased from the link

above, are required in order to complete the Lando - A Liberating Dev Tool For All Your Projects project. You may use
the Lando - A Liberating Dev Tool For All Your Projects project for all of your projects since it enables you to
either "plug and play" on PHP-compatible PCs or create in a LAMP environment. If you need any further information
regarding this project, please visit the section under "Frequently Asked Questions." Worldwide, professional developers
use local development and DevOps technologies on a daily basis, with the United States having the highest concentration
of such technologies. In spite of the fact that there are insufficient instruments to assist in the development process,
it is possible to transcend the conceptual limitations imposed by this situation. Concentrating your attention on the
most important activities will allow you to save time, money, and frustration in the long run. Focusing your efforts on
the most important tasks may help to alleviate some of the
stress. 

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/152177774-25482b2a-f8cd-4f19-a221-97dc29212a2d.png)

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

cd ./inc # Start it up lando start # List information about this app. lando info 

```

or

``` 

# Initialize a lamp recipe using the latest codeigniter version lando 

init \\ --source remote \\ --remote-url https://github.com/bcit-ci/CodeIgniter/archive/3.1.10.tar.gz \\ --remote-options="--strip-components 1" \\ --recipe lamp \\ --webroot . \\ --name my-first-lamp-app

```

For more information please
see: https://docs.lando.dev/config/lamp.html ![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157189458-e55e96dd-1faf-4fdf-8c63-f98fc5eab426.png)

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image(10).gif)

![image](https://user-images.githubusercontent.com/6468571/177675740-33ed816f-4206-4ea3-b1e3-abdc45e04db3.png)

When it comes to software updates, it is more often than not that they will be made to the
application's dependant packages rather than the program itself; for example, most of the adjustments will be made to
the php-proxy package rather than to the application itself. 

#### .env 

This file will be loaded into the Config /\*\* \*
{@inlinetag} \* this is @not a standardtag - must begin a line. \* this is a valid {@inlinetag} also \* @standardtag \*/
class at the global level. 

#### /plugins/ 

Users are encouraged to create their own unique plugins in this subdirectory,
which will then be loaded automatically from the main directory. The proxy, which comes with a number of built-in
plugins, is not without its limitations, and users are urged to create their own custom plugins in order to broaden the
range of options available. Think of a simple example like the file /plugins/TestPlugin.php in the plugins directory as
an illustration.

![image](https://user-images.githubusercontent.com/6468571/152181962-33e4e658-5fbc-4b2d-9366-7147e9fabe65.png) ![image](https://user-images.githubusercontent.com/6468571/152181058-6446dd76-3012-4e9f-b05a-7d86ca5d0872.png) ![image](https://user-images.githubusercontent.com/6468571/157206427-04af776e-d516-4fc3-b0ca-2c2cbc0f44cc.png)

![image](https://user-images.githubusercontent.com/6468571/177675573-c9df68a1-75e6-445a-9432-c0627b0e98a5.png)

Navigate to the root of the project with your browser, register an account and then

login. ![image](https://user-images.githubusercontent.com/6468571/152181949-99b9aaa6-586e-4f64-826d-ec7616535d1c.png) ![image](https://user-images.githubusercontent.com/6468571/157189005-b1eb3398-be00-47a3-825d-c13a90258fc2.png)

![image](https://user-images.githubusercontent.com/6468571/177675529-46d43bff-1721-4371-9634-0a6c9c12f230.png)

Before pull requests may be implemented in the production environment, they must be evaluated and authorized by the development team. Please open a new issue with the appropriate subject title to discuss the modifications you want to make to the document. Please make every effort to keep tests current in order to minimize the chance of wrong interpretation of results. We appreciate all of your assistance and support.

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (14).gif)

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png)  
![image](https://user-images.githubusercontent.com/6468571/157206554-6f07c153-cca7-4679-a5c7-441f88580bd4.png) ![image](https://user-images.githubusercontent.com/6468571/157189069-baae9f9f-3576-4eea-9427-58a236210541.png)

![image](https://user-images.githubusercontent.com/6468571/177675430-db10d3c6-ca87-47e6-8327-8f9723a2d2ab.png)

- \[x\] Front-end - \[x\] Combine Proxy Engines - \[x\] Allow Multi-tent rendering - \[x\] Build Caching

Layer - \[x\] Develop Multi-threading support (PHP Vanilla/Independent) + More (To be listed soon) - \[x\] Foundation -
\[x\] API Service - \[x\] TxT DB - \[x\] Login - \[x\] Registration - \[x\] Dashboard - \[x\] Who is Online - \[x\]
Documentation - \[ \] Tables - \[x\] Users - \[x\] Notes - \[x\] Tasks - \[ \] Chat - \[ \] Notes - \[x\] Data Scheme -
\[x\] API Endpoints - \[x\] Functions - \[ \] UI - \[ \] Tasks - \[x\] Data Scheme - \[x\] API Endpoints - \[x\]
Functions - \[ \] UI - \[ \] Chat - \[ \] Data Scheme - \[x\] API Endpoints - \[x\] Functions - \[ \] UI - \[ \] Testing

- \[x\] Versions - \[x\] Owners - \[ \] Crate
  details ![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157206640-0ecdb227-cc7f-46a3-8b26-b0c76ac030a5.png) ![image](https://user-images.githubusercontent.com/6468571/157189108-1914f60d-d58e-400a-9ced-a5d09a5d81ad.png)

![image](https://user-images.githubusercontent.com/6468571/177675374-f3d170e8-fd9a-4e76-a9bf-5805bc2ce504.png)

[MIT Software License for .yxorP The PHP Web-Proxy by don Pablo](https://choosealicense.com/licenses/mit/) The Massachusetts Institute of Technology (MIT) License, sometimes referred to as the "MIT License," is a permissive free software license developed in the late 1980s and still in use at
the Massachusetts Institute of Technology today. Repurposing is confined to a limited number of scenarios due to the
permissive nature of the program, which assures compliance with licensing agreements. This license is straightforward
and concise; it is a permissive license that just requires copyright protection and prominent display of licensing
information in the form of terms. They may be released in a number of forms and without the source code because they are
licensed works, adaptations, or large-scale works. !\[\](asset/live.png?v=3)
**

***

# yxorP Documentation

This is an automatically generated documentation for **yxorP Documentation**.

## Namespaces

### \

#### Classes

| Class | Description |
|-------|-------------|
| [`Attribute`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Attribute.md) | |
| [`CLI`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/CLI.md) | This file is part of the Cockpit project.|
| [`ComposerAutoloaderInit0fc67c8c6d14d2081ce037f8348a35e1`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ComposerAutoloaderInit0fc67c8c6d14d2081ce037f8348a35e1.md) | |
| [`ContainerArray`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ContainerArray.md) | This file is part of the Cockpit project.|
| [`DataCollection`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/DataCollection.md) | This file is part of the Cockpit project.|
| [`DotEnv`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/DotEnv.md) | This file is part of the Cockpit project.|
| [`FileStorage`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/FileStorage.md) | |
| [`JsonException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/JsonException.md) | |
| [`Lexy`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lexy.md) | Lexy class. Simple on the fly template parser class|
| [`LiteDB`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LiteDB.md) | This file is part of the Cockpit project.|
| [`LiteDBQuery`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LiteDBQuery.md) | |
| [`Mailer`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Mailer.md) | |
| [`Mailer_Message`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Mailer_Message.md) | |
| [`Pagination`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Pagination.md) | This file is part of the Cockpit project.|
| [`Parsedown`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Parsedown.md) | |
| [`ParsedownExtra`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ParsedownExtra.md) | |
| [`ParsedownExtraTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ParsedownExtraTest.md) | |
| [`PriorityQueue`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PriorityQueue.md) | This file is part of the Cockpit project.|
| [`RedisLite`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/RedisLite.md) | RedisLite class.|
| [`SVGSanitizer`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/SVGSanitizer.md) | Class SVGSanitizer|
| [`Spyc`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Spyc.md) | The Simple PHP YAML Class.|
| [`UnhandledMatchError`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/UnhandledMatchError.md) | |
| [`ValueError`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ValueError.md) | |
| [`blockListPluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/blockListPluginAction.md) | |
| [`bugsnagHandlerAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/bugsnagHandlerAction.md) | |
| [`cacheStoreAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/cacheStoreAction.md) | |
| [`checkFilesAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/checkFilesAction.md) | |
| [`checkUrlPattern`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/checkUrlPattern.md) | |
| [`cookiePluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/cookiePluginAction.md) | |
| [`dailyMotionPluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/dailyMotionPluginAction.md) | |
| [`debubEnablingAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/debubEnablingAction.md) | |
| [`debugHandlerAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/debugHandlerAction.md) | |
| [`guzzleClientAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/guzzleClientAction.md) | |
| [`headerRewritePluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/headerRewritePluginAction.md) | |
| [`logPluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/logPluginAction.md) | |
| [`mimeTypesAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/mimeTypesAction.md) | |
| [`overridePluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/overridePluginAction.md) | |
| [`proxifyPluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/proxifyPluginAction.md) | |
| [`readyCheckAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/readyCheckAction.md) | |
| [`requestBodyAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/requestBodyAction.md) | |
| [`requestResponseAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/requestResponseAction.md) | |
| [`resourceHandlerAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/resourceHandlerAction.md) | |
| [`setHeadersAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/setHeadersAction.md) | |
| [`siteCollectionAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/siteCollectionAction.md) | |
| [`streamPluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/streamPluginAction.md) | |
| [`twitterPluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/twitterPluginAction.md) | |
| [`youtubePluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/youtubePluginAction.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Stringable`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Stringable.md) | |

### \Cockpit

#### Classes

| Class | Description |
|-------|-------------|
| [`AuthController`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/AuthController.md) | Class Controller|

### \Cockpit\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Accounts`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/Accounts.md) | Class Controller|
| [`Auth`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/Auth.md) | Class Controller|
| [`Base`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/Base.md) | Class Controller|
| [`Media`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/Media.md) | Class Controller|
| [`RestAdmin`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/RestAdmin.md) | Class Controller|
| [`RestApi`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/RestApi.md) | Class Controller|
| [`Settings`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/Settings.md) | Class Controller|
| [`Utils`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/Utils.md) | Class Controller|
| [`Webhooks`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/Webhooks.md) | Class Controller|

### \Cockpit\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Helper/Admin.md) | Admin Helper class.|
| [`Async`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Helper/Async.md) | Async Helper class.|
| [`Csrf`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Helper/Csrf.md) | |
| [`Jobs`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Helper/Jobs.md) | |
| [`Revisions`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Helper/Revisions.md) | |
| [`Updater`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Helper/Updater.md) | Admin Helper class.|

### \ColinODell\Json5

#### Classes

| Class | Description |
|-------|-------------|
| [`Json5Decoder`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColinODell/Json5/Json5Decoder.md) | |
| [`SyntaxError`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColinODell/Json5/SyntaxError.md) | |

### \Collections\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Collections/Controller/Admin.md) | Class Controller|
| [`Import`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Collections/Controller/Import.md) | Class Controller|
| [`RestApi`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Collections/Controller/RestApi.md) | Class Controller|
| [`Trash`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Collections/Controller/Trash.md) | Class Controller|
| [`Utils`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Collections/Controller/Utils.md) | Class Controller|

### \ColorThief

#### Classes

| Class | Description |
|-------|-------------|
| [`CMap`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/CMap.md) | |
| [`ColorThief`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/ColorThief.md) | |
| [`PQueue`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/PQueue.md) | |
| [`VBox`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/VBox.md) | |

### \ColorThief\Image

#### Classes

| Class | Description |
|-------|-------------|
| [`ImageLoader`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/Image/ImageLoader.md) | |

### \ColorThief\Image\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`GDImageAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/Image/Adapter/GDImageAdapter.md) | Base adapter implementation to handle image manipulation.|
| [`GmagickImageAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/Image/Adapter/GmagickImageAdapter.md) | Base adapter implementation to handle image manipulation.|
| [`ImageAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/Image/Adapter/ImageAdapter.md) | Base adapter implementation to handle image manipulation.|
| [`ImagickImageAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/Image/Adapter/ImagickImageAdapter.md) | Base adapter implementation to handle image manipulation.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`IImageAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/Image/Adapter/IImageAdapter.md) | Basic interface for all image adapters.|

### \Composer

#### Classes

| Class | Description |
|-------|-------------|
| [`InstalledVersions`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Composer/InstalledVersions.md) | |

### \Composer\Autoload

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassLoader`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Composer/Autoload/ClassLoader.md) | ClassLoader implements a PSR-0, PSR-4 and classmap class loader.|
| [`ComposerStaticInit0fc67c8c6d14d2081ce037f8348a35e1`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Composer/Autoload/ComposerStaticInit0fc67c8c6d14d2081ce037f8348a35e1.md) | |

### \Firebase\JWT

#### Classes

| Class | Description |
|-------|-------------|
| [`BeforeValidException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Firebase/JWT/BeforeValidException.md) | |
| [`ExpiredException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Firebase/JWT/ExpiredException.md) | |
| [`JWK`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Firebase/JWT/JWK.md) | JSON Web Key implementation, based on this spec:<br />https://tools.ietf.org/html/draft-ietf-jose-json-web-key-41|
| [`JWT`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Firebase/JWT/JWT.md) | JSON Web Token implementation, based on this spec:<br />https://tools.ietf.org/html/rfc7519|
| [`SignatureInvalidException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Firebase/JWT/SignatureInvalidException.md) | |

### \Forms\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Forms/Controller/Admin.md) | Class Controller|
| [`RestApi`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Forms/Controller/RestApi.md) | Class Controller|

### \Jean85

#### Classes

| Class | Description |
|-------|-------------|
| [`PrettyVersions`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Jean85/PrettyVersions.md) | |
| [`Version`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Jean85/Version.md) | |

### \League\ColorExtractor

#### Classes

| Class | Description |
|-------|-------------|
| [`Color`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/ColorExtractor/Color.md) | |
| [`ColorExtractor`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/ColorExtractor/ColorExtractor.md) | |
| [`Palette`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/ColorExtractor/Palette.md) | |

### \League\Flysystem

#### Classes

| Class | Description |
|-------|-------------|
| [`Config`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Config.md) | |
| [`ConnectionErrorException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/ConnectionErrorException.md) | |
| [`ConnectionRuntimeException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/ConnectionRuntimeException.md) | |
| [`CorruptedPathDetected`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/CorruptedPathDetected.md) | |
| [`Directory`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Directory.md) | |
| [`Exception`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Exception.md) | |
| [`File`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/File.md) | |
| [`FileExistsException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/FileExistsException.md) | |
| [`FileNotFoundException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/FileNotFoundException.md) | |
| [`Filesystem`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Filesystem.md) | |
| [`FilesystemNotFoundException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/FilesystemNotFoundException.md) | Thrown when the MountManager cannot find a filesystem.|
| [`Handler`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Handler.md) | |
| [`InvalidRootException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/InvalidRootException.md) | |
| [`MountManager`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/MountManager.md) | Class MountManager.|
| [`NotSupportedException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/NotSupportedException.md) | |
| [`RootViolationException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/RootViolationException.md) | |
| [`SafeStorage`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/SafeStorage.md) | |
| [`UnreadableFileException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/UnreadableFileException.md) | |
| [`Util`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Util.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AdapterInterface`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/AdapterInterface.md) | |
| [`FilesystemException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/FilesystemException.md) | |
| [`FilesystemInterface`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/FilesystemInterface.md) | |
| [`PluginInterface`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/PluginInterface.md) | |
| [`ReadInterface`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/ReadInterface.md) | |

### \League\Flysystem\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/AbstractAdapter.md) | |
| [`AbstractFtpAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/AbstractFtpAdapter.md) | |
| [`Ftp`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Ftp.md) | |
| [`Ftpd`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Ftpd.md) | |
| [`Local`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Local.md) | |
| [`NullAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/NullAdapter.md) | |
| [`SynologyFtp`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/SynologyFtp.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CanOverwriteFiles`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/CanOverwriteFiles.md) | Adapters that implement this interface let the Filesystem know that files can be overwritten using the write<br />functions and don&#039;t need the update function to be called. This can help improve performance when asserts are disabled.|

### \League\Flysystem\Adapter\Polyfill

#### Traits

| Trait | Description |
|-------|-------------|
| [`NotSupportingVisibilityTrait`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Polyfill/NotSupportingVisibilityTrait.md) | |
| [`StreamedCopyTrait`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Polyfill/StreamedCopyTrait.md) | |
| [`StreamedReadingTrait`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Polyfill/StreamedReadingTrait.md) | A helper for adapters that only handle strings to provide read streams.|
| [`StreamedTrait`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Polyfill/StreamedTrait.md) | |
| [`StreamedWritingTrait`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Polyfill/StreamedWritingTrait.md) | |

### \League\Flysystem\Plugin

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractPlugin`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/AbstractPlugin.md) | |
| [`EmptyDir`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/EmptyDir.md) | |
| [`ForcedCopy`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/ForcedCopy.md) | |
| [`ForcedRename`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/ForcedRename.md) | |
| [`GetWithMetadata`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/GetWithMetadata.md) | |
| [`ListFiles`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/ListFiles.md) | |
| [`ListPaths`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/ListPaths.md) | |
| [`ListWith`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/ListWith.md) | |
| [`PluginNotFoundException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/PluginNotFoundException.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`PluggableTrait`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/PluggableTrait.md) | |

### \League\Flysystem\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`StreamHasher`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Util/StreamHasher.md) | |

### \League\MimeTypeDetection

#### Classes

| Class | Description |
|-------|-------------|
| [`EmptyExtensionToMimeTypeMap`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/MimeTypeDetection/EmptyExtensionToMimeTypeMap.md) | |
| [`ExtensionMimeTypeDetector`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/MimeTypeDetection/ExtensionMimeTypeDetector.md) | |
| [`FinfoMimeTypeDetector`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/MimeTypeDetection/FinfoMimeTypeDetector.md) | |
| [`GeneratedExtensionToMimeTypeMap`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/MimeTypeDetection/GeneratedExtensionToMimeTypeMap.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExtensionToMimeTypeMap`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/MimeTypeDetection/ExtensionToMimeTypeMap.md) | |
| [`MimeTypeDetector`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/MimeTypeDetection/MimeTypeDetector.md) | |

### \Lime

#### Classes

| Class | Description |
|-------|-------------|
| [`App`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/App.md) | |
| [`AppAware`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/AppAware.md) | |
| [`Helper`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/Helper.md) | |
| [`Module`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/Module.md) | |
| [`Request`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/Request.md) | |
| [`Response`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/Response.md) | |

### \LimeExtra

#### Classes

| Class | Description |
|-------|-------------|
| [`App`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/App.md) | Class App|
| [`Controller`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Controller.md) | Class Controller|

### \LimeExtra\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`Assets`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/Assets.md) | Assets class.|
| [`Cookie`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/Cookie.md) | |
| [`FileObject`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/FileObject.md) | Use custom FileObject to prevent &quot;too many files open&quot; error|
| [`Filesystem`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/Filesystem.md) | |
| [`I18n`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/I18n.md) | I18n class. Manage translations|
| [`Image`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/Image.md) | |
| [`Img`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/Img.md) | |
| [`Markdown`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/Markdown.md) | Class Markdown|
| [`SimpleAcl`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/SimpleAcl.md) | Class SimpleAcl|
| [`Utils`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/Utils.md) | Class Utils|
| [`YAML`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/YAML.md) | Class YAML|

### \Lime\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`Cache`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/Helper/Cache.md) | |
| [`Session`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/Helper/Session.md) | |

### \MongoDB

#### Classes

| Class | Description |
|-------|-------------|
| [`BulkWriteResult`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/BulkWriteResult.md) | Result class for a bulk write operation.|
| [`ChangeStream`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/ChangeStream.md) | Iterator for a change stream.|
| [`Client`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Client.md) | |
| [`Collection`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Collection.md) | |
| [`Database`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Database.md) | |
| [`DeleteResult`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/DeleteResult.md) | Result class for a delete operation.|
| [`InsertManyResult`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/InsertManyResult.md) | Result class for a multi-document insert operation.|
| [`InsertOneResult`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/InsertOneResult.md) | Result class for a single-document insert operation.|
| [`MapReduceResult`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/MapReduceResult.md) | Result class for mapReduce command results.|
| [`UpdateResult`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/UpdateResult.md) | Result class for an update operation.|

### \MongoDB\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Exception/BadMethodCallException.md) | |
| [`InvalidArgumentException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Exception/InvalidArgumentException.md) | |
| [`ResumeTokenException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Exception/ResumeTokenException.md) | |
| [`RuntimeException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Exception/RuntimeException.md) | |
| [`UnexpectedValueException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Exception/UnexpectedValueException.md) | |
| [`UnsupportedException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Exception/UnsupportedException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Exception`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Exception/Exception.md) | |

### \MongoDB\GridFS

#### Classes

| Class | Description |
|-------|-------------|
| [`Bucket`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/GridFS/Bucket.md) | Bucket provides a public API for interacting with the GridFS files and chunks<br />collections.|

### \MongoDB\GridFS\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`CorruptFileException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/GridFS/Exception/CorruptFileException.md) | |
| [`FileNotFoundException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/GridFS/Exception/FileNotFoundException.md) | |
| [`StreamException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/GridFS/Exception/StreamException.md) | |

### \MongoDB\Model

#### Classes

| Class | Description |
|-------|-------------|
| [`BSONArray`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/BSONArray.md) | Model class for a BSON array.|
| [`BSONDocument`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/BSONDocument.md) | Model class for a BSON document.|
| [`BSONIterator`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/BSONIterator.md) | Iterator for BSON documents.|
| [`CollectionInfo`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/CollectionInfo.md) | Collection information model class.|
| [`DatabaseInfo`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/DatabaseInfo.md) | Database information model class.|
| [`IndexInfo`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/IndexInfo.md) | Index information model class.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CollectionInfoIterator`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/CollectionInfoIterator.md) | CollectionInfoIterator interface.|
| [`DatabaseInfoIterator`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/DatabaseInfoIterator.md) | DatabaseInfoIterator interface.|
| [`IndexInfoIterator`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/IndexInfoIterator.md) | IndexInfoIterator interface.|

### \MongoDB\Operation

#### Classes

| Class | Description |
|-------|-------------|
| [`Aggregate`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/Aggregate.md) | Operation for the aggregate command.|
| [`BulkWrite`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/BulkWrite.md) | Operation for executing multiple write operations.|
| [`Count`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/Count.md) | Operation for the count command.|
| [`CountDocuments`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/CountDocuments.md) | Operation for obtaining an exact count of documents in a collection|
| [`CreateCollection`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/CreateCollection.md) | Operation for the create command.|
| [`CreateIndexes`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/CreateIndexes.md) | Operation for the createIndexes command.|
| [`DatabaseCommand`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/DatabaseCommand.md) | Operation for executing a database command.|
| [`DeleteMany`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/DeleteMany.md) | Operation for deleting multiple document with the delete command.|
| [`DeleteOne`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/DeleteOne.md) | Operation for deleting a single document with the delete command.|
| [`Distinct`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/Distinct.md) | Operation for the distinct command.|
| [`DropCollection`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/DropCollection.md) | Operation for the drop command.|
| [`DropDatabase`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/DropDatabase.md) | Operation for the dropDatabase command.|
| [`DropIndexes`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/DropIndexes.md) | Operation for the dropIndexes command.|
| [`EstimatedDocumentCount`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/EstimatedDocumentCount.md) | Operation for obtaining an estimated count of documents in a collection|
| [`Explain`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/Explain.md) | Operation for the explain command.|
| [`Find`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/Find.md) | Operation for the find command.|
| [`FindOne`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/FindOne.md) | Operation for finding a single document with the find command.|
| [`FindOneAndDelete`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/FindOneAndDelete.md) | Operation for deleting a document with the findAndModify command.|
| [`FindOneAndReplace`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/FindOneAndReplace.md) | Operation for replacing a document with the findAndModify command.|
| [`FindOneAndUpdate`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/FindOneAndUpdate.md) | Operation for updating a document with the findAndModify command.|
| [`InsertMany`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/InsertMany.md) | Operation for inserting multiple documents with the insert command.|
| [`InsertOne`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/InsertOne.md) | Operation for inserting a single document with the insert command.|
| [`ListCollectionNames`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/ListCollectionNames.md) | Operation for the listCollectionNames helper.|
| [`ListCollections`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/ListCollections.md) | Operation for the listCollections command.|
| [`ListDatabaseNames`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/ListDatabaseNames.md) | Operation for the ListDatabases command, returning only database names.|
| [`ListDatabases`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/ListDatabases.md) | Operation for the ListDatabases command.|
| [`ListIndexes`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/ListIndexes.md) | Operation for the listIndexes command.|
| [`MapReduce`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/MapReduce.md) | Operation for the mapReduce command.|
| [`ModifyCollection`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/ModifyCollection.md) | Operation for the collMod command.|
| [`ReplaceOne`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/ReplaceOne.md) | Operation for replacing a single document with the update command.|
| [`UpdateMany`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/UpdateMany.md) | Operation for updating multiple documents with the update command.|
| [`UpdateOne`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/UpdateOne.md) | Operation for updating a single document with the update command.|
| [`Watch`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/Watch.md) | Operation for creating a change stream with the aggregate command.|

### \MongoHybrid

#### Classes

| Class | Description |
|-------|-------------|
| [`Client`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoHybrid/Client.md) | |
| [`Mongo`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoHybrid/Mongo.md) | |
| [`MongoLite`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoHybrid/MongoLite.md) | |
| [`ResultSet`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoHybrid/ResultSet.md) | |

### \MongoLite

#### Classes

| Class | Description |
|-------|-------------|
| [`Client`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoLite/Client.md) | Client object.|
| [`Collection`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoLite/Collection.md) | Collection object.|
| [`Cursor`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoLite/Cursor.md) | Cursor object.|
| [`Database`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoLite/Database.md) | Database object.|
| [`UtilArrayQuery`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoLite/UtilArrayQuery.md) | |

### \PHPMailer\PHPMailer

#### Classes

| Class | Description |
|-------|-------------|
| [`Exception`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PHPMailer/PHPMailer/Exception.md) | PHPMailer exception handler.|
| [`OAuth`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PHPMailer/PHPMailer/OAuth.md) | OAuth - OAuth2 authentication wrapper class.|
| [`PHPMailer`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PHPMailer/PHPMailer/PHPMailer.md) | PHPMailer - PHP email creation and transport class.|
| [`POP3`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PHPMailer/PHPMailer/POP3.md) | PHPMailer POP-Before-SMTP Authentication Class.|
| [`SMTP`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PHPMailer/PHPMailer/SMTP.md) | PHPMailer RFC821 SMTP email transport class.|

### \PackageVersions

#### Classes

| Class | Description |
|-------|-------------|
| [`Installer`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PackageVersions/Installer.md) | |
| [`Versions`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PackageVersions/Versions.md) | This class is generated by composer/package-versions-deprecated, specifically by|

### \SimpleStorage

#### Classes

| Class | Description |
|-------|-------------|
| [`Client`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/SimpleStorage/Client.md) | |

### \Singletons\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Singletons/Controller/Admin.md) | Class Controller|
| [`RestApi`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Singletons/Controller/RestApi.md) | Class Controller|

### \ZipStream

#### Classes

| Class | Description |
|-------|-------------|
| [`Exception`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ZipStream/Exception.md) | This class is only for inheriting|
| [`ZipStream`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ZipStream/ZipStream.md) | ZipStream|

### \ZipStream\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FileNotFoundException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ZipStream/Exception/FileNotFoundException.md) | This Exception gets invoked if a file wasn&#039;t found|
| [`FileNotReadableException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ZipStream/Exception/FileNotReadableException.md) | This Exception gets invoked if a file wasn&#039;t found|
| [`InvalidOptionException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ZipStream/Exception/InvalidOptionException.md) | This Exception gets invoked if an invalid parameter gets passed on as option|
| [`StreamNotReadableException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ZipStream/Exception/StreamNotReadableException.md) | This Exception gets invoked if fread() fails on a stream.|

### \claviska

#### Classes

| Class | Description |
|-------|-------------|
| [`SimpleImage`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/claviska/SimpleImage.md) | A PHP class that makes working with images as simple as possible.|

### \yxorP\events

#### Classes

| Class | Description |
|-------|-------------|
| [`ev`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/events/ev.md) | ev eventloop|
| [`event`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/events/event.md) | libevent eventloop|
| [`revolt`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/events/revolt.md) | revolt eventloop|
| [`select`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/events/select.md) | select eventloop|
| [`swoole`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/events/swoole.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`eventInterface`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/events/eventInterface.md) | |

### \yxorP\http

#### Classes

| Class | Description |
|-------|-------------|
| [`cache`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/http/cache.md) | |
| [`paramStore`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/http/paramStore.md) | |
| [`request`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/http/request.md) | |
| [`response`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/http/response.md) | |
| [`timer`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/http/timer.md) | |
| [`worker`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/http/worker.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`actionState`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/http/actionState.md) | |

### \yxorP\minify

#### Classes

| Class | Description |
|-------|-------------|
| [`areplacer`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/minify/areplacer.md) | |
| [`attributesSimplifier`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/minify/attributesSimplifier.md) | |
| [`htmlCommentsRemover`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/minify/htmlCommentsRemover.md) | |
| [`inlineCssMinifier`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/minify/inlineCssMinifier.md) | |
| [`inlineJavascriptMinifier`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/minify/inlineJavascriptMinifier.md) | |
| [`minify`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/minify/minify.md) | |
| [`quotesRemover`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/minify/quotesRemover.md) | |
| [`whitespacesRemover`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/minify/whitespacesRemover.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`minfyInterface`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/minify/minfyInterface.md) | |

### \yxorP\protocols

#### Classes

| Class | Description |
|-------|-------------|
| [`frame`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/frame.md) | |
| [`http`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/http.md) | |
| [`text`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/text.md) | |
| [`websocket`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/websocket.md) | |
| [`ws`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/ws.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`protocolInterface`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/protocolInterface.md) | |

### \yxorP\protocols\Http

#### Classes

| Class | Description |
|-------|-------------|
| [`Session`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/Http/Session.md) | |
| [`SessionException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/Http/SessionException.md) | |
| [`chunk`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/Http/chunk.md) | |
| [`request`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/Http/request.md) | |
| [`response`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/Http/response.md) | |
| [`serverSentEvents`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/Http/serverSentEvents.md) | |

### \yxorP\protocols\Http\Session

#### Classes

| Class | Description |
|-------|-------------|
| [`fileSessionHandler`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/Http/Session/fileSessionHandler.md) | Class fileSessionHandler|
| [`redisClusterSessionHandler`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/Http/Session/redisClusterSessionHandler.md) | Class redisSessionHandler|
| [`redisSessionHandler`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/Http/Session/redisSessionHandler.md) | Class redisSessionHandler|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`sessionHandlerInterface`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/yxorP/protocols/Http/Session/sessionHandlerInterface.md) | |

***
