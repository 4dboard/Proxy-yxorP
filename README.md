> <sup>🏆️ [ LIVE DEMO  : ](https://gitpod.io/#https://github.com/4dboard/Proxy-yxorP) A live, interactive demonstration is now accessible through Gitpod.</sup>

> <sup>🎥️ [ MAKING OF VIDEO  : ](https://4dboard.github.io/Proxy-yxorP/docs/movie.mp4) A brief film detailing the development of the yxorP project.</sup>

![image](https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/logo.png)

📢  [ [ARCHITECTURE](https://github.com/4dboard/Proxy-yxorP/wiki) ]
⚡  [ [DEVELOPERS](https://github.com/4dboard/Proxy-yxorP/blob/main/docs/index.md) ]
🌈  [ [DOCUMENTATION](https://4dboard.github.io/Proxy-yxorP/docs/) ]
🔥  [ [CREATION VIDEO](https://4dboard.github.io/Proxy-yxorP/docs/movie.mp4) ]
🚀️  [ [WEBSITE](https://4dboard.github.io/) ]

## _yxorP SAAS(y) Web Proxy Portal Manager + Admin Dashboard (GUI)_

🐱‍👤 Lean & Mean Web-proxy Machine: yxorP is an exceptionally effective Web proxy CMS. Multi-tenancy, Plug-and-Play, Flat-file, Advanced Caching, Multi-threaded, User-defined Extensions, and Content Spinner - PHP CURL & Composer are optional.

### _"Like Glype, KnProxy, or PHP Proxy, but on steroids"_

yxorP is an adjustable, flexible, and user-friendly web proxy management solution. Using basic plugins and themes, the plug-and-play program was designed to give a system that is simply extensible and changeable.

> The plug-and-play system can quickly process millions of requests since it has flat-file, cache, and database engines. The intuitive graphical user interface (GUI) of the system enables the rendering of several customized webpages from a single instance, and the event-driven yxorP architecture makes it simple to administer and modify.

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/181399467-1878166c-d1e5-4a1a-8155-e880aac4c6e0.png)

![image](https://user-images.githubusercontent.com/6468571/179232649-2da011cc-1d8a-4e20-ab01-632d05e56e4c.png)

The plug-and-play yxroP Proxy Management System does not need database administration, PHP CURL, or Composer; nonetheless, they are suggested but optional. The application's event-driven architecture and modular design make it easy to alter and grow. Since the flat-file caching engine does not serialize and deserialize the data, the sophisticated caching system is 500 times quicker than Memcache and Redis. The initial design of yxorP supports both stateless (Standard PHP) and stateful (Swoole) modes, however stateful mode is more efficient. Using the program's proxy interface, you may proxy many editable websites using a single application. The yxorP web proxy centralizes proxy administration.

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/177686483-68ab777a-d0cc-497c-b9ff-d981ad8e7037.png)

> ⚠️Requires: Minimum requirement is PHP version 8.0 +\
> 🔥   GD extension, OpenSSL extension, Curl extension\
> 🔥   Fileinfo extension, Intl extension and Pdo_sqlite extension

Add the following lines to the conclusion of your "php.ini" file to activate the necessary PHP extensions; they should be active by default, but you may need to activate them if the application is not functioning as expected. Even though this allows the required PHP extension, you should still validate your PHP version (8.1 is recommended):

```
extension=curl
extension=fileinfo
extension=gd
extension=intl
extension=mysqli
extension=openssl
extension=pdo_sqlite
```

Create a duplicate of the  "env.example" file and save it as ".env"

```

cp ./env.example ./.env 

```

Modify the settings included inside the ".env" file as necessary. The program is configured to respond to query from any
domain by acting as a proxy and forwarding them to the "example.com" website. Replace "www.example.com" in the ".env"
file with a new URL, and all future queries will reflect the change. After serving the website on localhost or any other
domain, go to http://localhost/app and enter the login username 'yxorP' and the password 'yxorP'. This will allow you to
configure the application to direct traffic from a given domain to a specific website. After gaining access to the
admin, choose "sites" and clone the example website so that its settings may be modified.

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/181399560-6c5fc08e-9d8c-46ec-99bf-a9f06f931213.png)

![image](https://user-images.githubusercontent.com/6468571/179233034-8e2e3fa1-9c10-4e7b-9a26-34037073fd0d.png)

PHP, unlike other programming languages, is by default staeless much like HTML or CSS. This aspect of the protocol is
reminiscent of the first stages of the HyperText Transfer Protocol (HTTP) (HTTP). Sstate can be implemented however
using sessions, databases, shared memory, files, or any other technology that is capable of keeping state in some
capacity in some form or another. A typlical setup for this type of PHP application would be using Apache or for example
Nginx with php-fpm. NGINX web server (as reverse proxy) serves PHP applications through the FastCGI protocol (as a
backend application server). NGINX employs PHP-FPM (FastCGI Process Manager), an alternative PHP FastCGI implementation
that runs in the background as a daemon, listening for CGI requests i.e.

``` 

server {

        listen 80 default_server;

        listen [::]:80 default_server;

       

        listen 443 ssl default_server;

        listen [::]:443 ssl default_server;

        

        error_log /var/www/yxorP/logs;

        

        root /var/www/yxorP;

        index index.php;

        server_name _;

        location ~ / {

                if (!-e $request_filename){

                        rewrite ^.* /index.php break;

                }

                include snippets/fastcgi-php.conf; fastcgi_pass unix:/run/php/php8.1-fpm.sock;

        }

}

``` 

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/181399606-bfae14ee-be77-4a32-beae-c57360bf74dc.png)

![image](https://user-images.githubusercontent.com/6468571/179234087-4dd7f698-11fd-4c52-9c2d-a6efbc3df620.png)

Both the Swoole and the RoadRunner servers, which are well-known for their speed and dependability, are capable of
running PHP applications. These programs must have access to persistent data. After installation, the Swoole PHP
extension gives users access to a wide number of functions, some of which may be useful while others may be entertaining
to explore. This spans a wide range of concepts, including web sockets, coroutines, fibers, and caching. The creation of
RoadRunner, which is a robust application server, load balancer, and process manager, was accomplished with the
assistance of GoLang. It is possible that Octane will implement any one of these strategies; it all relies on the person
who created the code. As a result of Octane's usage of the PHP Swoole extension, the latter has access to a far greater
number and diversity of functions than RoadRunner has.

``` 

php ./server.php

```

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/181399692-77ff0ca0-c5bd-42d2-b341-eed79d9194f2.png)

![image](https://user-images.githubusercontent.com/6468571/179234312-0c76a89f-0600-4725-8e70-1089e34b6cf8.png)

Docker Compose is a tool that enables developers to build and deploy applications that are comprised of several
containers at the same time. You are free to create and launch apps with the assistance of this tool. Compose gives us
the ability to declare our services inside a YAML file, which afterwards gives us the ability to deploy, expand, or
destroy our infrastructure with a single command.

``` 

docker-composer up -d 

```

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/181399730-de888b39-c72a-46ee-9fdd-76466864022c.png)

![image](https://user-images.githubusercontent.com/6468571/179234530-dd41bd2f-839d-4b5e-8926-cdc4e59647ce.png)

Docker gives its customers the capacity to manage containers in a way that is comparable to managing virtual machines.
This is due to the fact that containerized computers are comparable to virtual machines in that they are comparatively
lightweight and modular. This makes it feasible to simplify a range of processes, including the design and construction
of containers as well as the transportation of images. One example of this is the shipping of photographs. Voici a few
illustrations of some of these:

```

docker run

-p 80:80 --rm -u www-data -v \`pwd\`:/var/www -e ENV=dev donpablonow/yxorp 

```

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/181399824-25abab85-0533-4c8f-9b28-5df8bcbca515.png)

![image](https://user-images.githubusercontent.com/6468571/179234863-ce04a562-df34-40f6-9919-043de73b76fe.png)

## Technical Issue and Assistance

### The program is "plug and play" and works properly out of the box; the following issues have been noted with the application could be:

- Verify that the computer has been outfitted with all the necessary PHP extensions, such as the following:

  - PHP Pdo mod, and this is for the sqlite database 'apt install php8.1-common'

  - PHP Intl mod, this is for puny domain names, Punycode or IDN, or install it with 'php-intl' if you want to use it
    with IDN.

- You need to check that the "./app" submodule was properly retrieved; the directory should already be present at the
  top level of the project and have some information. If the directory is not there, you may quickly initialize the
  submodule by entering "git submodule init" into the terminal.

- Ensure that the x cache folders that can be found in "./app/storage/cache" and "./inc/cache." are able to have their
  contents written to. Either the command "chmod 775./app/storage/cache" or the command "chown root:
  ./app/storage/cache" may be used to make the files readable again.

If you have completed all of these steps, you should be experiencing no difficulty. However, if you are still
experiencing problems, you will likely need to contact a developer or file a request for help on GitHub's issue tracker
for this project.

![image](https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/diagrams.png)

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/177685870-385a203b-9654-4c7b-b3e7-00c725d3fa51.png)

![image](https://user-images.githubusercontent.com/6468571/179236073-ffd7da37-258d-4cb5-bd6d-2bb975cd6e3b.png)

### 🔋 Batteries Included: Plug & Play \[CURL + Composer Optional\], Proxy as a Service, Multi-tenant, Multi-Threaded, with Cache & Article Spinner.

![image](https://user-images.githubusercontent.com/6468571/178638238-d67683cc-00bf-47ab-b4d1-b0fe2edc0a6d.png)

In addition to a system for content-spinning and an auto-caching engine, the website's interface is visually pleasant.
Arangodb, Devnull, Dynamodb (AWS), Cassandra, Devrandom, Files, CouchBasev3, Memstatic, Firestore, Couchdb, Leveldb,
Mongodb, Memcache(d),Predis, Sqlite, Redis, Wincache, Sssb, and Zend Disk Cache are among the available cache drivers.
Integrating the two most efficient web proxy applications enhances performance. This self-service proxy engine supports
several tenants with little performance loss by combining an attractive flat-file web interface with a bespoke
multithreaded caching layer and a very effective thesaurus article spinner with a minimum vocabulary of 10,000 words. In
addition to an integrated cache management system and a web-based cache management system, the proxy is modular or
plugin-based. Internet-based graphical user interface (GUI) monitoring and analytics (GUI). By using a custom-built
content spinning engine, the system is able to "enhance" (or "spin") information with little performance loss (10,000+
thesaurus/dictionary items) and without sacrificing quality.

![image](https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/Idna.png)

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/157188599-5fdfd399-b340-434e-b80b-ca356f8ad8ab.png)

![image](https://user-images.githubusercontent.com/6468571/179237789-b543c7c4-929a-47d4-93cf-eb11a16d5faf.png)

### If you want a versatile management interface that isn't flexible and replaceable, the admin back-end is fantastic.

![image](https://user-images.githubusercontent.com/6468571/179237020-fda021a1-5554-4fc6-8f28-5f09d3d5cb19.png)

Implementation is the most efficient approach to use the offered information. Admin is a good option to investigate if

you need to manage a large number of devices or require a content management interface for static site builders. Both of

these scenarios need cautious admin operation. If any of these apply to your situation, you should give them special

consideration. Each of these occurrences happens sometimes. Construct whole new apps, then provide Admin access to them

so it can feed them content.

![image](https://user-images.githubusercontent.com/6468571/174488292-66e75484-d57b-472f-8921-661d09387727.png)

The headless admin is displayed with an API-first layout that prioritizes and hierarchically arranges data. This

separation between client-side consumption and management of information and server-side administration of material

should simplify the publishing process. The admin is limited to the tasks required to maintain back-end content. Its

fundamental objective is to distribute structured content across several media via a simple application programming

interface, as opposed to depending on the transmission of data through individual web pages.

![image](https://user-images.githubusercontent.com/6468571/174488463-767e2f7a-8409-445b-b7e8-ed45d0965a89.png)

![image](https://user-images.githubusercontent.com/6468571/181399920-b5125e96-f7d6-481b-8a87-25eb482c98fd.png)

![image](https://user-images.githubusercontent.com/6468571/179238514-b5df4a1f-a5cd-44d8-a3a5-fa59a2d5b34c.png)

Manage flexible content models. Despite the existence of accessible content models, none have been developed before. You
will be solely responsible for developing the content model required for this method. A user interface free of
extraneous elements and clutter. Admin provides not just an easy user interface, but also one that is continuously
updated.

You may use the system in any way you see appropriate, so long as you adhere to the set requirements. There is just one
system in place. Utilize a straightforward application programming interface to get access to your content (API).



<hr />



![image](https://user-images.githubusercontent.com/6468571/181399970-68a109ad-2ec9-4f25-bad7-0276f6fa9af3.png)

![image](https://user-images.githubusercontent.com/6468571/179238576-4f1e7050-7f2a-4384-8cd8-9b9a092693fb.png)

![image](https://user-images.githubusercontent.com/6468571/178638648-57afc681-e222-4401-a1c6-a6c8812dd624.png)

- You are free to come up with the most creative arrangement you are capable of conceiving since the display does not
  have any restrictions of any kind, giving you the opportunity to do so.

- As a consequence of the potential to make content just once and then use it across the board, it is possible to
  produce material for a substantial number of various distribution channels at the same time. These channels include
  television, radio, the internet, and mobile devices.

- Content that can be easily resized to suit numerous screen sizes without suffering a degradation in quality and that
  can be rapidly changed to match a number of screen sizes

- Capable of functioning appropriately on all the various devices that you use, in addition to the microsites, in the
  event that you make use of them.

- The basic minimal amount of knowledge and experience that is necessary to be considered qualified for the position

- Incorporations that are not just fast, but they are also simple and straightforward to comprehend

- Creating effective lines of communication with every facet of life is an imperative need that must be met.

![image](https://user-images.githubusercontent.com/6468571/174488424-88456e97-539c-4ec2-918b-fc59be5be8da.png) ![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png) ![image](https://user-images.githubusercontent.com/6468571/177671919-1584593a-cfcc-476a-93ce-c1a65e81de92.png) ![image](https://user-images.githubusercontent.com/6468571/157188653-bde1f08c-27ee-4eb8-90f7-69d1e60aa949.png)

You may build static flat file versions of your original webpages by utilizing yxorP to mirror your websites, supplying
mirrored or cloned copies of those websites, and then giving the mirrored or cloned copies of those websites as static
flat file variants of your original webpages. This is feasible by using yxorP to mirror your websites.

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

# 🔥 Cache

![image](https://user-images.githubusercontent.com/6468571/181400170-4d132264-d331-4342-8a8a-8c7f1fd66d62.png)

![image](https://user-images.githubusercontent.com/6468571/179238649-d6a11606-e6b2-4137-b67c-332497969087.png)

The cached information is made accessible to customers through a Web proxy. These items may include anything that is
available through the Internet. This category may include articles, images, and files. Internet users may now get the
required information far faster, and they are no longer directly in competition with other activities for available
bandwidth.

![image](https://user-images.githubusercontent.com/6468571/178638714-b7a75c9d-eec0-4831-aced-45a3da6424a2.png)

When you load your websites utilizing caching, you not only reduce the likelihood that the loading time will
increase,but you also reduce the server strain caused by your actions. Consequently, the time required for online pages
to load will decrease with time.

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

# 📛 Firewall

![image](https://user-images.githubusercontent.com/6468571/181400140-a1dde886-c186-4fbc-bd70-31d6af46baa7.png)

![image](https://user-images.githubusercontent.com/6468571/179238707-e5082057-6373-4ccf-8cff-7a2b3acb8799.png)

All network access requests are continually monitored and filtered by a firewall, while proxy servers only provide the
former role. This is the most significant distinction between the two security techniques. This is the most notable
distinction between the two kinds of used safety measures. By emphasizing this contrast, the two unique types of
security measures may be distinguished most clearly from one another.

A proxy server connects the user's local computer to the server, allowing it to receive data on the user's behalf. This
connection gives the local computer of the user access to the server. Due to these operations, the proxy server acts as
an intermediate between the client and the server. Access should never be allowed unless specifically permitted by the
appropriate authorities.

![image](https://user-images.githubusercontent.com/6468571/178638799-eed7c7ae-0bc6-4fc8-9403-68caf71d182b.png)

To defend your websites against distributed denial of service attacks and other sorts of attacks, you must configure a
virtual firewall behind your proxy server. You will be safeguarded against website-based assaults in general if you
follow these steps to their logical conclusion.

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

# 🔳 iFrame

![image](https://user-images.githubusercontent.com/6468571/181400194-5e6aec69-5d77-4808-bd81-d5388774e1f2.png)

![image](https://user-images.githubusercontent.com/6468571/179238874-b179f501-5270-448f-8b9a-7b79d5627a2a.png)

The CORS Proxy API will use many backend technologies to fulfill all of your requests for third-party-controlled
resources. This is required for the API to fulfill your requests. The sole requirement of the CORS Proxy API endpoint is
that you provide the request body together with all client-requested request data. After receiving and processing your
request, CORS Proxy will promptly return it to you using an efficient and effective method.

![image](https://user-images.githubusercontent.com/6468571/178638893-c3dd1cef-48ae-490e-b80c-66b1eeb84b99.png)

Although it is feasible to use iframing services without CORS, doing so is discouraged. It has been said that the
behavior in question, although being plausible and "not suggested but attainable," it is "not advised but possible."

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

# 🔱 Load-balancing

![image](https://user-images.githubusercontent.com/6468571/181400239-a063fac7-7204-453f-b1b2-1c66fda109b8.png)

![image](https://user-images.githubusercontent.com/6468571/179238923-a6e8d869-8c73-4f45-be4d-866c18002269.png)

TCP Proxy Load Balancing is a method that allows users from many regions of the world to share a single IP address. The
TCP proxy load balancer is accountable for automatically routing traffic to geographically the nearest backends. TCP
Proxy Load Balancing may operate as a global load balancing service when the Premium Tier is applied. Either a load
balancer or a Web proxy server is required when implementing in-memory replication of client session information. Both
options cannot be used together. This is done so that all domain-based applications may be accessed through a single URL
for external clients.

<div style="text-align: center;">

![image](https://user-images.githubusercontent.com/6468571/178639159-0556cdfa-b102-4e7b-bda7-7b79d91342ca.png)

</div>

The installation of cloned copies of your website on several additional servers, each of which is connected to a
load-balancing system, is one method for achieving this objective. There are several other approaches that might be used
in this operation. Using a cluster of servers is a potential alternative method that might be utilized to execute this
assignment effectively.

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

# ⌛ Allways-online

![image](https://user-images.githubusercontent.com/6468571/181400284-7da9dab5-6953-4f6d-a119-348c2b962ebc.png)

![image](https://user-images.githubusercontent.com/6468571/179239125-b7142619-a9ae-4ae0-b258-a845f53b4515.png)

It is possible to provide failover support across proxies by duplicating the first proxy server. This second proxy
server is very identical to the first. This permits a smooth transfer between proxy servers in the case of a server
failure. Due to their incapacity to communicate, proxy servers and peer masters must be handled by a load balancer since
they are unaware of one another. Peer masters are in communication with and converse with one another. In contrast, peer
masters are familiar with one another and maintain open communication lines. Various properties of peer masters and
proxy servers must be accounted for.

<div style="text-align: center;">

![image](https://user-images.githubusercontent.com/6468571/178639215-2ed92212-1f09-46de-bb24-5287862c72c2.png)

</div>

By keeping a proxy version of your website and switching to it whenever the actual website is unavailable for
maintenance or changes, you can ensure that your online resources remain accessible at a high level and continuously.
This will guarantee that your online material is constantly accessible to users. This will help you to guarantee that
your consumers always have access to your online resources.

##### + many more.

The applications outlined in this page are only a sampling of the many ways in which this proxy may be implemented;
further information is accessible in our discussion forum.

<div style="text-align: center;">

![image](https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/logosnag.png)

</div>

By using a technique that is simple to put into action, BugSnag is able to assist in the simplification of the process
of error monitoring in addition to the management of application stability. This is made possible via the use of an easy
to implement approach. Because of this, BugSnag is able to maintain application stability in a more efficient manner. In
order to be in a position to create views that are supported by facts about the process of problem-solving or the
creation of software, it is necessary to have the ability to retain stability.

![image](https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/Snag.gif)

Because our mobile support is widely regarded as the industry's gold standard, we are able to supply teams with
diagnostic data that enables them to reproduce issues and discover solutions to them as soon as those problems begin to
have an effect on the system's reliability. The reports on the different types of errors are sorted according to the
underlying cause of the error, and in some situations, they are also categorized according to the impact that the error
had on the business. In addition to this, we provide our clients with in-depth information on the diagnostic process.

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png) ![image](https://user-images.githubusercontent.com/6468571/177672109-b49bb56d-abfe-411f-87b6-b506e47820b8.png) ![image](https://user-images.githubusercontent.com/6468571/157188697-4c3a2b95-b40b-441c-bf6a-45c97e4e4b57.png)

Gitpod gives Theia developers access to a Visual Studio Code-based integrated development environment (IDE). This
integrated development environment (IDE) allows the change and reorganization of code, as well as the creation of
brand-new features. It offers a full operating system environment, allowing programs designed expressly for the platform
to use the operating system environment and run effectively. This is possible because these apps may misuse the
operating system environment. As a result, apps may now use the operating system environment. Previously, this was
impossible. During the creation of these apps, the extensive capabilities of the platform were meticulously evaluated.

<div style="text-align: center;">

[![image](https://vercel.com/button)](https://vercel.com/new/clone?repository-url=https://github.com/4dboard/yxorP) [![image](https://www.herokucdn.com/deploy/button.svg)](https://www.heroku.com/deploy/?template=https://gitpod.io/#https://github.com/4dboard/yxorP) [![image](https://render.com/images/deploy-to-render-button.svg)](https://render.com/deploy?repo=https://github.com/4dboard/yxorP) [![image](https://gitpod.io/button/open-in-gitpod.svg)](https://gitpod.io/#https://github.com/4dboard/yxorP)

</div>

Visit their website to learn more about Gitpod and how the platform's capabilities are always expanding. These two
topics are discussed on their website. Gitpods, on the other hand, are containers managed by Docker and running Ubuntu
20.04 Focal. The software installation process is hindered because the user gitpod is not on the list of users having
sudo privileges. This raises the procedure's complexity. It is not impossible for installation components that need root
privileges to alter the Dockerfile associated with a running instance of Docker. The optimum place for various
activities may be the Dockerfile, the command line, or the code, depending on the circumstances of the situation. As
Dockerfiles are only configuration files for containers, they do not need to be very complicated for the vast majority
of operations.

Gitpod has a user account and home directory named gitpod and located at /home/gitpod. Despite this, only the original
Docker container is preserved in the shared and shareable workspace. When a repository is cloned or rolled back, only
the modifications performed in the workspace of a Gitpod are kept. "workspace" refers to the directory structure
available through the route /workspace/your-workspace-name, and "workspace" refers to the directory structure.

<div style="text-align: center;">

![image](https://user-images.githubusercontent.com/6468571/152177615-421c1286-33cd-4c38-9f7b-3c486901ba81.png)

</div>

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/177672382-fc29dfac-1dab-4192-b042-ced6a6c051e9.png)

The performance of a single web proxy surpasses that of the two original web proxies combined. Due to the combination of
two of the most powerful PHP reverse proxies presently available on the Internet, this is now feasible. Combining two
PHP reverse proxies resulted in the creation of this web proxy. Due to the fact that this is a brand-new project, it may
be modified in the future. Your cooperation and understanding are much appreciated in this subject. You just cannot
ignore this part of the issue. Using the PHP-Proxy library, which is a component of the PHP programming language and can
be downloaded for free from the PHP website, you may quickly and easily configure a web proxy application for your web
server. Visit their website if you are interested in learning more about PHP. Thus, you may avoid manually setting the
web proxy application you use. If you are able to help financially or in any other way to the success of this project,
please know that you will be shown a great degree of gratitude and will not be acting alone. I could devote more time to
the growth and development of the project, therefore accelerating its overall advancement.

![image](https://user-images.githubusercontent.com/6468571/153799459-4c352a2d-2bc0-413d-9048-7f94bdd7a1a5.png) ![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157206067-a7263dc6-09e4-4350-8ad2-3bd51fc349b0.png) ![image](https://user-images.githubusercontent.com/6468571/157188795-5034fd0f-d40e-4a58-9e8e-286e713fb397.png)

![image](https://user-images.githubusercontent.com/6468571/177675918-d0dcee6e-dc9e-4ed5-b859-85d5debb0bbb.png)

Server Keep in mind that the operation of this proxy script may be compromised on websites or pages that, as mentioned
above, include an excessive number of "dynamic components" or are otherwise script-heavy. This is something that must be
recalled continually. This is an essential factor that must constantly be kept in mind. It is essential that you always
have this in mind, thus keep it in mind at all times. Web proxy transmissions cannot be encrypted, which is a
shortcoming of the technology. This topic is well recognized. This problem has persisted for a period of time that is
deemed substantial. This is only one of the several unfavorable facets of the present situation. Visiting certain types
of websites may need the usage of a dependable proxy server to guarantee that your web browser's HTTP requests are
routed via the proper websites. To preserve the privacy of the information you enter on the websites you visit, this
will be the case. This is done to guarantee that your privacy and safety are always maintained.

![image](https://user-images.githubusercontent.com/6468571/153799352-ee3e60ed-6564-4633-9cc1-7acc2cfb2b50.png)

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157188876-61dc86c4-508f-4169-a1f2-a9582c035c2a.png)

![image](https://user-images.githubusercontent.com/6468571/177675825-3e76629b-33f3-45fb-8358-b5a7a0eea0db.png)

To launch the Lando development environment, you must stick to the LAMP formula. Lando is an open-source development
instrument suited to all projects. You are allowed to utilize the Lando - A Liberating Dev Tool For All Your Projects
project for any and all of your projects, since it enables "plug and play" functionality on PHP-compatible PCs and
development in a LAMP-supported environment. This allows you to use Lando in all projects. Check this page's "Frequently
Asked Questions" section if you need further information about this project. Globally, professional software engineers
often apply local development and DevOps technologies; yet, the United States has the most firms specializing in these
technical advances. Even when there are insufficient resources available to aid in the development process, it is still
feasible to surpass the conceptual limitations imposed by the current state of affairs. This is the case despite the
availability of insufficient instruments to aid in the growing process. If you can prioritize the most essential tasks,
you will be able to do more while spending less time, money, and experiencing less long-term aggravation. To ease some
stress you are now experiencing, it may be beneficial to prioritize the most essential chores.

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/152177774-25482b2a-f8cd-4f19-a221-97dc29212a2d.png)

Clone this repo

``` 

git clone https://github.com/4dboard/Proxy-yxorP 

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

For more information please see: https://docs.lando.dev/config/lamp.html

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157189458-e55e96dd-1faf-4fdf-8c63-f98fc5eab426.png)

![image](https://user-images.githubusercontent.com/6468571/177675740-33ed816f-4206-4ea3-b1e3-abdc45e04db3.png)

When it comes to software updates, the alterations that are made are most likely going to be made to the application's
dependant packages rather than the program itself; for instance, the bulk of the modifications are going to be made to
the php-proxy package rather than to the program itself.

#### .env

This file will be loaded into the Config /\*\* \* {@inlinetag} \* this is @not a standardtag - must begin a line. \*this
is a valid {@inlinetag} also \* @standardtag \*/ class at the global level.

#### /plugins/

Users are strongly encouraged to create their own plugins in this subdirectory, which may be loaded automatically from
the root directory. This subfolder is located inside the root directory, which contains all other subfolders. In
addition, these plugins may be manually installed on the system. The proxy, which includes a number of built-in plugins,
has some limits, and users are strongly encouraged to create their own plugins to maximize the number of available
customization choices. This is due to the proxy's incorporation of several plugins. This is because the proxy has
already installed several plugins. This is because the proxy's design already contains several plugins. Multiple plugins
have been preconfigured on the proxy server for your convenience. Consider a simple example, such as the "
/plugins/TestPlugin.php" text file. This file may be located in the plugins directory and is positioned inside it.

![image](https://user-images.githubusercontent.com/6468571/152181962-33e4e658-5fbc-4b2d-9366-7147e9fabe65.png) ![image](https://user-images.githubusercontent.com/6468571/152181058-6446dd76-3012-4e9f-b05a-7d86ca5d0872.png) ![image](https://user-images.githubusercontent.com/6468571/157206427-04af776e-d516-4fc3-b0ca-2c2cbc0f44cc.png)

![image](https://user-images.githubusercontent.com/6468571/177675573-c9df68a1-75e6-445a-9432-c0627b0e98a5.png)

Utilize your web browser to go to the root directory of the project. The next step is account registration, followed by
login. yxorP is Composer-compatible and supports databases, PHP, and CURL. Given that yxorP is operating as their proxy,
alterations are permissible. Admin controls the PHAR (PHP archive) binary version of proxies, which is used by many
websites. The yxorP web proxy, which permits user experience customisation, is commercially available and deployable.
However, a plugin-based architecture and event-driven design are required. Expandable, customisable. YxorP offers the
industry's most potent graphical back-end content management system interface. When a request is made, the hostname will
be utilized to get site-specific information from the system's backend. modified. Occasionally, specialized engines are
used to recreate website content. Any adjustments you make to the page are automatically saved. The memory-based cache
is about 500 times more efficient than the flat-file cache. Memcache and Redis are both caching technologies. Avoiding
serialization may increase the efficiency of cache processing. After receiving a software upgrade, Snag will soon be
able to handle yxorP. This problem has been resolved, therefore the upgrading may continue without incident. Due to the
application's interoperability with other systems and error tracking, the logging must be adjusted.

![image](https://user-images.githubusercontent.com/6468571/152181949-99b9aaa6-586e-4f64-826d-ec7616535d1c.png) ![image](https://user-images.githubusercontent.com/6468571/157189005-b1eb3398-be00-47a3-825d-c13a90258fc2.png)

![image](https://user-images.githubusercontent.com/6468571/177675529-46d43bff-1721-4371-9634-0a6c9c12f230.png)

Before pull requests may be sent to the production environment, they must be reviewed and approved by the development
team. This must be completed prior to implementing any pull requests. This need must be met before pull requests may be
implemented, since it is a prerequisite. To debate the suggested modifications to the document, you must create a new
issue with the title of the primary discussion subject. Then, and only then, may you specify the modifications you want
to implement. Then you may negotiate the required revisions. Then you will be able to accomplish the essential life
changes. After that, you will finally be able to discuss the desired life enhancements. Please ensure that all tests are
up-to-date so the results may be interpreted as precisely as possible. We cannot adequately convey our appreciation for
your assistance and support. We are really appreciative. Please accept our profound gratitude for all you've done for
us.

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png)

![image](https://user-images.githubusercontent.com/6468571/157206554-6f07c153-cca7-4679-a5c7-441f88580bd4.png) ![image](https://user-images.githubusercontent.com/6468571/157189069-baae9f9f-3576-4eea-9427-58a236210541.png)

![image](https://user-images.githubusercontent.com/6468571/177675430-db10d3c6-ca87-47e6-8327-8f9723a2d2ab.png)

- [x] Front-end

- [x] Combine Proxy Engines

- [x] Allow Multi-tent rendering

- [x] Build Caching

## Layer

- [x] Develop Multi-threading support (PHP Vanilla/Independent) + More (To be listed soon)

- [x] Foundation

- [x] API Service

- [x] TxT DB

- [x] Login

- [x] Registration

- [x] Admin

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

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

# yxorP Documentation

![image](https://user-images.githubusercontent.com/6468571/179241342-da132147-a8fa-4d44-9131-7fcb1d873b57.png)

| Class | Description |
|-------|-------------|
| [`Attribute`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/Attribute.md) | |
| [`CLI`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/CLI.md) | |
| [`DotEnv`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/DotEnv.md) | |
| [`FileStorage`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/FileStorage.md) | |
| [`JsonException`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/JsonException.md) | |
| [`JsonException`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/JsonException.md) | |
| [`Mailer`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/Mailer.md) | |
| [`Mailer_Message`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/Mailer_Message.md) | |
| [`Normalizer`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/Normalizer.md) | |
| [`PhpToken`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/PhpToken.md) | |
| [`RedisLite`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/RedisLite.md) | RedisLite class.|
| [`ReturnTypeWillChange`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/ReturnTypeWillChange.md) | |
| [`SVGSanitizer`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/SVGSanitizer.md) | Class SVGSanitizer|
| [`SimpleImageLib`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/SimpleImageLib.md) | A PHP class that makes working with images as simple as possible.|
| [`UnhandledMatchError`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/UnhandledMatchError.md) | |
| [`ValueError`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/ValueError.md) | |
| [`onCheckAction`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onCheckAction.md) | Importing the wrapper class from the yxorP\app\lib\http namespace. Extending the wrapper class, which is a class that is used to wrap events.|
| [`onCompleteAction`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onCompleteAction.md) | Extending the wrapper class, which is a class that allows you to hook into the request lifecycle.|
| [`onContextAction`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onContextAction.md) | Extending the wrapper class, which is a class that is used to wrap the request and response objects.|
| [`onExceptionAction`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onExceptionAction.md) | A class that extends the wrapper class.|
| [`onFinalAction`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onFinalAction.md) | Extending the wrapper class, which is a class that allows you to hook into the request lifecycle.|
| [`onHeadersAction`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onHeadersAction.md) | Extending the wrapper class.|
| [`onIncludesAction`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onIncludesAction.md) | Extending the wrapper class.|
| [`onRequestAction`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onRequestAction.md) | Extending the wrapper class.|
| [`onSendAction`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onSendAction.md) | Extending the `wrapper` class, which is a class that is used to wrap the `event` class.|
| [`onSentAction`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onSentAction.md) | Extending the `wrapper` class, which is a class that is used to wrap the `event` class.|
| [`onWriteAction`](https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onWriteAction.md) | Importing the `response` class from the `http` namespace.|

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png)

![image](https://user-images.githubusercontent.com/6468571/179353295-c5b6f399-2624-4c9e-98a2-6f54869bde2b.png)

- [PHP Curl Class](https://github.com/php-curl-class/php-curl-class)      HTTP requests made easy PHP Curl Class makes
  it easy to send HTTP requests and integrate with web APIs.

- [pminiProxy](https://github.com/joshdick/miniProxy) miniProxy is a simple web proxy written in PHP that can allow you
  to bypass Internet content filters, or to browse the internet anonymously. miniProxy is licensed under the GNU GPL v3.
  miniProxy is the successor to PageForward.

- [php-proxy-app](https://github.com/Athlon1600/php-proxy-app)  Web Proxy Application built on php-proxy library ready
  to be installed on your server

- [php-proxy](https://github.com/Athlon1600/php-proxy)   A web proxy script written in PHP and built as an alternative
  to Glype.

- [KnProxy](https://github.com/jabbany/KnProxy) Lightweight, PHP-based Web Proxy that can utilize whatever remote
  connecting ablities your server has to offer. It should work out of the box. No configuration needed. For educational
  purposes.

- [PHProxy](https://github.com/PHProxy/phproxy) PHP based web proxy. Initially developed by whitefyre

- [Glype](https://github.com/k1995/glype)     A copy of glype,web-based proxy script written in PHP

- [PHP Online Web Proxy](https://github.com/NicheOffice/php-web-proxy)  Online Web Proxy Website Script Written in PHP

- [web-proxy-script](https://github.com/heiswayi/web-proxy-script)      Minimalist web proxy script

- [Glype Official](https://github.com/vincentclee/glype)        About Glype proxy is a free, web-based proxy script
  written in PHP

- [Censor Dodge Web Proxy](https://github.com/ryanmab/CensorDodge)      Censor Dodge is a lightweight and customisable
  proxy script built on PHP. The standalone library is intended to act as an extensible system that is easily
  customisable with plugins and themes.

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157206640-0ecdb227-cc7f-46a3-8b26-b0c76ac030a5.png) ![image](https://user-images.githubusercontent.com/6468571/157189108-1914f60d-d58e-400a-9ced-a5d09a5d81ad.png)

![image](https://user-images.githubusercontent.com/6468571/177675374-f3d170e8-fd9a-4e76-a9bf-5805bc2ce504.png)

[Massachusetts Institute of Technology (MIT)](https://choosealicense.com/licenses/mit/)

Massachusetts Institute of Technology (MIT) License is a permissive free software license developed in the late 1980s by
the Massachusetts Institute of Technology. The MIT License was named after Cambridge, Massachusetts's Massachusetts
Institute of Technology. This software license's moniker was conceived at the Massachusetts Institute of Technology in
Cambridge, Massachusetts. This software license was named after the Massachusetts Institute of Technology in Cambridge,
Massachusetts. It is seldom referred to as the "MIT License," a common alternative name. In addition, it is also known
as "MIT." Attaching a second function to another entity is only permitted in a few circumstances. This is owing to the
permissive nature of the program, which assures compliance with license agreements. This sentence provides the
explanation. This issue has occurred directly as a consequence. This license is simple and basic; it is a permissive
license requiring just the protection of intellectual property rights and the disclosure of licensing conditions in an
open and transparent manner. This license is concise and simple. This license has no superfluous language and is concise
and unambiguous. The application process for this license is simple and expedient. It is possible to transmit licensed
works, adaptations, and large-scale works utilizing a variety of transmission methods and without the source code due to
the nature of the works. This is due to the fact that each of these works falls under one of three categories.

<p align="center">🦄 PLEASE REMEMBER TO SMASH THE ⭐🔨 BUTTON AND <a href="https://github.com/sponsors/donspablo/dashboard">SUPPORT</a> 🌈 THANK YOU.</sub></sup></p>
<p align="center">📢<sub><sup> <i><b> YOUR SUPPORT IS GREATLY APPRECIATED / </b> <a href="https://www.patreon.com/donPabloNow">PATREON.COM/DONPABLONOW</a> / <b>BTC</b>  3HVNOVVMLHVEWQLSCCQX9DUA26P5PRCTNQ / <b>ETH</b> 0X3D288C7A673501294C9289C6FC42480A2EA61417 </i> </p>
  
<p align="center"><img src="https://user-images.githubusercontent.com/6468571/191125670-003a61ea-411f-42c0-b820-ad19124307a8.png"></img></p>

  | <p align="center"><img height="150px" src="https://user-images.githubusercontent.com/6468571/191125131-4e76fe43-770b-49e8-aa66-d1c8723f7e7a.png"></img></p><sub><sup><a href="https://github.com/4dboard/Proxy-yxorP">YXORP PROXY</a>: Web Proxy 🐮 yxorP: SAAS(y) Guzzler + App (GUI Dashboard incl.). Feature Rich, Multi-tenancy, Headless, Plug & Play, Augmentation & Content Spinning Web Proxy with Caching - PHP CURL+Composer are Optional. Leveraging SAAS architecture to provide multi-tenancy, multiple threads, caching, and an article spinner service.</sub></sup> | <p align="center"><img height="150px" src="https://user-images.githubusercontent.com/6468571/191125113-9d991af2-f911-43df-8994-a573aaf9a7ac.png"></img></p><sub><sup><a href="https://github.com/meanos/meanOs">MEANOS</a>: The operating system with the smallest memory footprint and the highest performance levels. NEW RELEASE A new version of the Web3 operating system will be released in the near future. https://mean.ơs.com. Operating systems have been subjected to significant revisions; if you would want to be informed when the subsequent version is made available, please subscribe.</sub></sup> |
|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|

<p align="center"><img src="https://user-images.githubusercontent.com/6468571/191124256-20415448-9bd5-4879-bfff-cca988bd7bfa.png"></img></p>
