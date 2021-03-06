<kiss-container class="kiss-margin" size="medium">

    <ul class="kiss-breadcrumbs">
        <li><a href="<?= $this->route('/system') ?>"><?= t('Settings') ?></a></li>
    </ul>

    <div class="kiss-margin-large-bottom kiss-flex kiss-flex-middle">
        <div class="kiss-size-4 kiss-flex-1"><strong><?= t('System') ?></strong></div>
    </div>

    <vue-view>
        <template>

            <kiss-card class="kiss-padding kiss-margin-large" theme="bordered contrast shadowed">

                <kiss-row class="kiss-flex-middle">
                    <div>
                        <kiss-svg src="<?= $this->baseUrl('app:assets/logo.svg') ?>" width="60" height="60"></kiss-svg>
                    </div>
                    <div class="kiss-flex-1">
                        <div class="kiss-size-4 kiss-text-bold">yxorP</div>
                        <div class="kiss-text-caption kiss-margin-small kiss-color-muted">
                            <p>Web Proxy 🦄 yxorP: SAAS(y) Guzzler + Cockpit (GUI Dashboard incl.). Feature Rich,
                                Multi-tenancy, Headless, Plug & Play, Augmentation & Content Spinning Web Proxy with
                                Caching - PHP CURL+Composer are Optional. Leveraging SAAS architecture to provide
                                multi-tenancy, multiple threads, caching, and an article spinner service.</p>
                        </div>
                    </div>
                </kiss-row>

            </kiss-card>

            <kiss-tabs>

                <tab class="kiss-margin animated fadeIn" caption="<?= t('App') ?>">

                    <div class="kiss-text-caption kiss-text-bold kiss-size-bold kiss-margin">
                        <?= ('General') ?>
                    </div>

                    <table class="kiss-table">
                        <tbody>
                        <tr>
                            <td width="30%" class="kiss-size-xsmall">Version</td>
                            <td class="kiss-size-small kiss-color-muted"><?= SITE_VERSION ?></td>
                        </tr>
                        <tr>
                            <td width="30%" class="kiss-size-xsmall">Debug mode</td>
                            <td class="kiss-size-small kiss-color-muted"><span
                                    class="kiss-badge kiss-badge-outline kiss-color-<?= ($this->retrieve('debug') ? 'success' : 'danger') ?>"><?= ($this->retrieve('debug') ? 'Enabled' : 'Disabled') ?></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <?php if (count($addons)): asort($addons); ?>
                        <div class="kiss-text-caption kiss-text-bold kiss-size-bold kiss-margin kiss-margin-large-top">
                            <?= ('Loaded Addons') ?>
                        </div>

                        <kiss-grid cols="4@m 6@xl" gap="small">
                            <?php

                            foreach ($addons as $name): $icon = $this->path("{$name}:icon.svg"); ?>
                                <kiss-card
                                    class="kiss-padding kiss-size-small kiss-text-capitalize kiss-flex kiss-flex-middle"
                                    theme="shadowed contrast">
                                    <div class="kiss-margin-small-right">
                                        <kiss-svg
                                            src="<?= $this->base($icon ? "{$name}:icon.svg" : 'system:assets/icons/module.svg') ?>"
                                            width="30" height="30"></kiss-svg>
                                    </div>
                                    <div><?= $name ?></div>
                                </kiss-card>
                            <?php endforeach ?>
                        </kiss-grid>
                    <?php endif ?>

                    <kiss-card class="kiss-padding kiss-bgcolor-contrast">
                        <div class="kiss-text-monospace kiss-size-small kiss-color-muted"
                             style="max-height:600px;overflow:auto;">
                            <article class="markdown-body entry-content container-lg" itemprop="text">
                                <p align="center"><img align="center"
                                                       src="https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/logo.png"/>
                                </p>
                                <p align="center" dir="auto">
                                    <g-emoji class="g-emoji" alias="loudspeaker"
                                             fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f4e2.png">
                                        📢
                                    </g-emoji>
                                    [ <a href="https://github.com/4dboard/Proxy-yxorP/wiki">ARCHITECTURE</a> ]
                                    <g-emoji class="g-emoji" alias="zap"
                                             fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/26a1.png">
                                        ⚡
                                    </g-emoji>
                                    [ <a href="https://github.com/4dboard/Proxy-yxorP/blob/main/docs/index.md">DEVELOPERS</a>
                                    ]
                                    <g-emoji class="g-emoji" alias="rainbow"
                                             fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f308.png">
                                        🌈
                                    </g-emoji>
                                    [ <a href="https://4dboard.github.io/Proxy-yxorP/docs/"
                                         rel="nofollow">DOCUMENTATION</a> ]
                                    <g-emoji class="g-emoji" alias="fire"
                                             fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f525.png">
                                        🔥
                                    </g-emoji>
                                    [ <a href="https://4dboard.github.io/Proxy-yxorP/docs/movie.mp4" rel="nofollow">CREATION
                                        VIDEO</a> ]
                                    <g-emoji class="g-emoji" alias="rocket"
                                             fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f680.png">
                                        🚀️
                                    </g-emoji>
                                    [ <a href="https://4dboard.github.io/" rel="nofollow">WEBSITE</a> ]
                                </p>
                                <p align="center" dir="auto">Web Proxy <b>
                                        <g-emoji class="g-emoji" alias="unicorn"
                                                 fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f984.png">
                                            🦄
                                        </g-emoji>
                                    </b> yxorP: SAAS(y) Guzzler + App (GUI Dashboard incl.). Feature Rich,
                                    Multi-tenancy, Headless, Plug &amp; Play, Augmentation &amp; Content Spinning Web
                                    Proxy with Caching - PHP CURL+Composer are Optional. Leveraging SAAS architecture to
                                    provide multi-tenancy, multiple threads, caching, and an article spinner service.
                                </p>
                                <p align="center" dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                                href="https://user-images.githubusercontent.com/6468571/177683559-6000c882-dfb4-4f7c-8b1d-a0f0e775d1d0.png"><img
                                            align="center"
                                            src="https://user-images.githubusercontent.com/6468571/177683559-6000c882-dfb4-4f7c-8b1d-a0f0e775d1d0.png"
                                            style="max-width: 100%;"></a></p>
                                <p align="center" dir="auto"><a
                                        href="https://sourceforge.net/projects/Proxy-yxorP/files/latest/download"
                                        rel="nofollow"><img align="center"
                                                            src="https://camo.githubusercontent.com/d78acaee7cdd2080d5167036c8c6174b0d25478ab01517c32ff40a717a5f4b45/68747470733a2f2f612e6673646e2e636f6d2f636f6e2f6170702f73662d646f776e6c6f61642d627574746f6e"
                                                            data-canonical-src="https://a.fsdn.com/con/app/sf-download-button"
                                                            style="max-width: 100%;"></a></p>
                                <br>
                                <blockquote>
                                    <p dir="auto"><i>The combination of a flat-file and caching engine, in addition to a
                                            database, makes the system exceptionally responsive and able to deal with
                                            heavy traffic. The appeal of this system is further enhanced by the presence
                                            of a graphical user interface at the backend. YXORP is an event-driven and
                                            plugin-based framework that has straightforward extension and modification
                                            possibilities. This provides you with the flexibility to tailor the
                                            framework to meet the specific requirements of your project ]</i></p>
                                </blockquote>
                                <br>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/181399379-3996858c-4a4c-4407-bb33-0649bf89b973.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/181399379-3996858c-4a4c-4407-bb33-0649bf89b973.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179232489-113ce332-b853-41f9-b32b-e61fef62c007.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179232489-113ce332-b853-41f9-b32b-e61fef62c007.png"
                                            alt="image" style="max-width: 100%;"></a>
                                    <br><br><br></p>
                                <blockquote>
                                    <p dir="auto">
                                        <g-emoji class="g-emoji" alias="no_entry"
                                                 fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/26d4.png">
                                            ⛔️
                                        </g-emoji>
                                        <a href="https://github.com/donspablo"> GITHUB : </a> Without more people
                                        getting behind this, it won't go very far. Please click the "star" button to
                                        show your support for this endeavour if you think it interesting. Assuming there
                                        is at least some enthusiasm for the idea, development will proceed.
                                    </p>
                                </blockquote>
                                <hr>
                                <blockquote>
                                    <p dir="auto">
                                        <g-emoji class="g-emoji" alias="trophy"
                                                 fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f3c6.png">
                                            🏆️
                                        </g-emoji>
                                        <a href="https://gitpod.io/#https://github.com/4dboard/Proxy-yxorP"
                                           rel="nofollow"> LIVE DEMO : </a> We have just launched the first working live
                                        demo / sneak preview via Gitpod`
                                    </p>
                                </blockquote>
                                <hr>
                                <blockquote>
                                    <p dir="auto">
                                        <g-emoji class="g-emoji" alias="movie_camera"
                                                 fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f3a5.png">
                                            🎥️
                                        </g-emoji>
                                        <a href="https://4dboard.github.io/Proxy-yxorP/docs/movie.mp4" rel="nofollow">
                                            MAKING OF VIDEO : </a> We put up a short video called "Making of the yxorP
                                        Proxy" so that anyone who wants to see how the project came together can do so.
                                    </p>
                                </blockquote>
                                <hr>
                                <blockquote>
                                    <p dir="auto">
                                        <g-emoji class="g-emoji" alias="heart"
                                                 fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/2764.png">
                                            ❤️
                                        </g-emoji>
                                        <a href="https://patreon.com/donpablonow" rel="nofollow"> PATREON : </a>
                                        Donations always welcome via Github (Subscriptions &amp; Credit Cards), Patreon
                                        (Subscriptions &amp; Credit Cards), Paypal (Once-off, Credit Cards &amp;
                                        E-wallet) &amp; Ethereum (Once-off, Crypto Currency)
                                    </p>
                                </blockquote>
                                <hr>
                                <blockquote>
                                    <p dir="auto">
                                        <g-emoji class="g-emoji" alias="heavy_check_mark"
                                                 fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/2714.png">
                                            ✔️
                                        </g-emoji>
                                        <a href="https://www.paypal.me/donpanlonow" rel="nofollow"> PAYPAL : </a> Any
                                        contributions you can make toward this endeavour would be much appreciated.
                                    </p>
                                </blockquote>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/181399467-1878166c-d1e5-4a1a-8155-e880aac4c6e0.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/181399467-1878166c-d1e5-4a1a-8155-e880aac4c6e0.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179232649-2da011cc-1d8a-4e20-ab01-632d05e56e4c.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179232649-2da011cc-1d8a-4e20-ab01-632d05e56e4c.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">Files (Flat-File) are used to hold the information created by the
                                    plug-and-play application yxorP. Since they are not
                                    necessary, Composer, PHP CURL, and databases are optional for the execution of this
                                    application. yxorP was created to
                                    function as a proxy and is capable of altering the contents of several websites.
                                    This was the original aim behind its
                                    creation. The Admin, the system's principal backend, controls this component
                                    (GUI).</p>
                                <p dir="auto">It is common knowledge that yxorP is one of the web proxy systems that,
                                    compared to other web proxy systems now
                                    available on the market, enables users to tailor their surfing experience in the
                                    most ways. yxorP is among the most
                                    flexible web proxy solutions in terms of browsing capabilities. Moreover, yxorP is
                                    one of the first web proxy systems
                                    ever created. This is due to its event-driven architecture and emphasis on its
                                    plugin-based design, rather than its
                                    built-in features, which are the most essential and defining components that enable
                                    customization and extension of its
                                    capabilities. Due to its versatility and scalability, this is the case.</p>
                                <p dir="auto">Because they provide customization and expansion of a product's
                                    capabilities, the built-in features are the most
                                    distinguishing and significant aspects. This is due to its adaptable and expandable
                                    qualities, which has led to the
                                    current circumstance. This is due to the fact that the inherent characteristics are
                                    the most fundamental and distinctive
                                    characteristics, allowing for the change and expansion of its capabilities. This is
                                    the reason behind the present
                                    situation. In addition to a graphical user interface (GUI) and a back-end content
                                    management system (CMS), yxorP has a
                                    number of additional distinguishing features. These qualities include a number of
                                    additional characteristics that
                                    separate it in a variety of ways from its competitors. These distinctive
                                    characteristics, such as the product's quality,
                                    set it apart from its rivals.</p>
                                <p dir="auto">Currently, the hostname of the request being processed is utilized to
                                    search the backend for website-specific
                                    requirements. Then, using these criteria, the best website is selected and any
                                    required revisions are made. The user may
                                    spin the website's content using the pre-integrated article-spinning engine of the
                                    application. The user has access to
                                    this option. This activity is undertaken in accordance with the user's preferences.
                                    Flat-file caching solutions are
                                    about 500 times faster than memory-based caching systems such as Memcache or Redis.
                                    This is accomplished by reducing the
                                    overall number of serialization and deserialization operations, which results in a
                                    cache that operates much faster.</p>
                                <p dir="auto">Due to a recent update, the most thorough version of yxorP may now be
                                    examined by the BugSnag error reporting and
                                    warning system. Recent adjustments have been made. This function was designed to
                                    determine whether Snag is compatible
                                    with a previously issued update. Changing the default logging system might take as
                                    little as two minutes due to the
                                    program's interoperability with the great majority of industry-standard error
                                    tracking solutions. This is the situation
                                    due to the interoperability capabilities of the bulk of these systems. This
                                    conclusion was attainable due to the
                                    software's capacity to monitor the system and report any vulnerabilities it
                                    detects.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/174922574-d5a246b5-c30e-4a63-bc22-4957184feef9.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/174922574-d5a246b5-c30e-4a63-bc22-4957184feef9.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">yxorP was developed from the ground up with compatibility with both
                                    stateless and stateful servers, such as Apache (like
                                    IIS). It is compatible with TCP, UDP, Unix socket, HTTP, and Websocket and
                                    facilitates the development of concurrent
                                    services that are both rapid and scalable (* Parallel *). It is also compatible with
                                    each of these protocols. In
                                    addition, it is compatible with each of these protocols without issue. (Swoole). The
                                    term "high-performance" is used to
                                    describe both of these servers, which are networking frameworks. These two servers
                                    are under the category of networking
                                    frameworks. According to the description, each of these servers is designed with
                                    "event-driven, asynchronous, and
                                    non-blocking I/O." This is evident from the description.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/181399560-6c5fc08e-9d8c-46ec-99bf-a9f06f931213.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/181399560-6c5fc08e-9d8c-46ec-99bf-a9f06f931213.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179233034-8e2e3fa1-9c10-4e7b-9a26-34037073fd0d.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179233034-8e2e3fa1-9c10-4e7b-9a26-34037073fd0d.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">PHP, unlike other programming languages, is by default staeless much like
                                    HTML or CSS. This aspect of the protocol is
                                    reminiscent of the first stages of the HyperText Transfer Protocol (HTTP) (HTTP).
                                    Sstate can be implemented however
                                    using sessions, databases, shared memory, files, or any other technology that is
                                    capable of keeping state in some
                                    capacity in some form or another.</p>
                                <p dir="auto">A typlical setup for this type of PHP application would be using Apache or
                                    for example Nginx with php-fpm. NGINX web
                                    server (as reverse proxy) serves PHP applications through the FastCGI protocol (as a
                                    backend application server). NGINX
                                    employs PHP-FPM (FastCGI Process Manager), an alternative PHP FastCGI implementation
                                    that runs in the background as a
                                    daemon, listening for CGI requests i.e.</p>
                                <div class="snippet-clipboard-content notranslate position-relative overflow-auto"><pre
                                        class="notranslate"><code>
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


</code></pre>
                                    <div class="zeroclipboard-container position-absolute right-0 top-0">
                                        <clipboard-copy aria-label="Copy"
                                                        class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay"
                                                        data-copy-feedback="Copied!" data-tooltip-direction="w" value="
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

" tabindex="0" role="button">
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-copy js-clipboard-copy-icon m-2">
                                                <path fill-rule="evenodd"
                                                      d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path>
                                                <path fill-rule="evenodd"
                                                      d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
                                            </svg>
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
                                                <path fill-rule="evenodd"
                                                      d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
                                            </svg>
                                        </clipboard-copy>
                                    </div>
                                </div>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/181399606-bfae14ee-be77-4a32-beae-c57360bf74dc.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/181399606-bfae14ee-be77-4a32-beae-c57360bf74dc.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179234087-4dd7f698-11fd-4c52-9c2d-a6efbc3df620.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179234087-4dd7f698-11fd-4c52-9c2d-a6efbc3df620.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">Both the Swoole and the RoadRunner servers, which are well-known for their
                                    speed and dependability, are capable of
                                    running PHP applications. These programs must have access to persistent data. After
                                    installation, the Swoole PHP
                                    extension gives users access to a wide number of functions, some of which may be
                                    useful while others may be entertaining
                                    to explore. This spans a wide range of concepts, including web sockets, coroutines,
                                    fibers, and caching. The creation of
                                    RoadRunner, which is a robust application server, load balancer, and process
                                    manager, was accomplished with the
                                    assistance of GoLang. It is possible that Octane will implement any one of these
                                    strategies; it all relies on the person
                                    who created the code. As a result of Octane's usage of the PHP Swoole extension, the
                                    latter has access to a far greater
                                    number and diversity of functions than RoadRunner has.</p>
                                <div class="snippet-clipboard-content notranslate position-relative overflow-auto"><pre
                                        class="notranslate"><code>
php ./server.php

</code></pre>
                                    <div class="zeroclipboard-container position-absolute right-0 top-0">
                                        <clipboard-copy aria-label="Copy"
                                                        class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay"
                                                        data-copy-feedback="Copied!" data-tooltip-direction="w" value="
php ./server.php
" tabindex="0" role="button">
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-copy js-clipboard-copy-icon m-2">
                                                <path fill-rule="evenodd"
                                                      d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path>
                                                <path fill-rule="evenodd"
                                                      d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
                                            </svg>
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
                                                <path fill-rule="evenodd"
                                                      d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
                                            </svg>
                                        </clipboard-copy>
                                    </div>
                                </div>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/181399692-77ff0ca0-c5bd-42d2-b341-eed79d9194f2.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/181399692-77ff0ca0-c5bd-42d2-b341-eed79d9194f2.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179234312-0c76a89f-0600-4725-8e70-1089e34b6cf8.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179234312-0c76a89f-0600-4725-8e70-1089e34b6cf8.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">Docker Compose is a tool that enables developers to build and deploy
                                    applications that are comprised of several
                                    containers at the same time. You are free to create and launch apps with the
                                    assistance of this tool. Compose gives us
                                    the ability to declare our services inside of a YAML file, which afterwards gives us
                                    the ability to deploy, expand, or
                                    destroy our infrastructure with a single command.</p>
                                <div class="snippet-clipboard-content notranslate position-relative overflow-auto"><pre
                                        class="notranslate"><code>
docker-composer up -d

</code></pre>
                                    <div class="zeroclipboard-container position-absolute right-0 top-0">
                                        <clipboard-copy aria-label="Copy"
                                                        class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay"
                                                        data-copy-feedback="Copied!" data-tooltip-direction="w" value="
docker-composer up -d
" tabindex="0" role="button">
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-copy js-clipboard-copy-icon m-2">
                                                <path fill-rule="evenodd"
                                                      d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path>
                                                <path fill-rule="evenodd"
                                                      d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
                                            </svg>
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
                                                <path fill-rule="evenodd"
                                                      d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
                                            </svg>
                                        </clipboard-copy>
                                    </div>
                                </div>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/181399730-de888b39-c72a-46ee-9fdd-76466864022c.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/181399730-de888b39-c72a-46ee-9fdd-76466864022c.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179234530-dd41bd2f-839d-4b5e-8926-cdc4e59647ce.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179234530-dd41bd2f-839d-4b5e-8926-cdc4e59647ce.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">Docker gives its customers the capacity to manage containers in a way that
                                    is comparable to managing virtual machines.
                                    This is due to the fact that containerized computers are comparable to virtual
                                    machines in that they are comparatively
                                    lightweight and modular. This makes it feasible to simplify a range of processes,
                                    including the design and construction
                                    of containers as well as the transportation of images. One example of this is the
                                    shipping of photographs. Voici a few
                                    illustrations of some of these:</p>
                                <div class="snippet-clipboard-content notranslate position-relative overflow-auto"><pre
                                        class="notranslate"><code>
docker run

-p 80:80 --rm -u www-data -v \`pwd\`:/var/www -e ENV=dev donpablonow/yxorP

</code></pre>
                                    <div class="zeroclipboard-container position-absolute right-0 top-0">
                                        <clipboard-copy aria-label="Copy"
                                                        class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay"
                                                        data-copy-feedback="Copied!" data-tooltip-direction="w" value="
docker run

-p 80:80 --rm -u www-data -v \`pwd\`:/var/www -e ENV=dev donpablonow/yxorP
" tabindex="0" role="button">
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-copy js-clipboard-copy-icon m-2">
                                                <path fill-rule="evenodd"
                                                      d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path>
                                                <path fill-rule="evenodd"
                                                      d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
                                            </svg>
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
                                                <path fill-rule="evenodd"
                                                      d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
                                            </svg>
                                        </clipboard-copy>
                                    </div>
                                </div>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a>
                                    <a target="_blank" rel="noopener noreferrer"
                                       href="https://user-images.githubusercontent.com/6468571/177686483-68ab777a-d0cc-497c-b9ff-d981ad8e7037.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/177686483-68ab777a-d0cc-497c-b9ff-d981ad8e7037.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <blockquote>
                                    <p dir="auto">
                                        <g-emoji class="g-emoji" alias="warning"
                                                 fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/26a0.png">
                                            ⚠️
                                        </g-emoji>
                                        Requires: Minimum requirement is PHP version 8.0 +
                                    </p>
                                </blockquote>
                                <p dir="auto">Create a duplicate of the "example.env" file and save it as ".env"</p>
                                <div class="snippet-clipboard-content notranslate position-relative overflow-auto"><pre
                                        class="notranslate"><code>
cp ./example.env ./.env

</code></pre>
                                    <div class="zeroclipboard-container position-absolute right-0 top-0">
                                        <clipboard-copy aria-label="Copy"
                                                        class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay"
                                                        data-copy-feedback="Copied!" data-tooltip-direction="w" value="
cp ./example.env ./.env
" tabindex="0" role="button">
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-copy js-clipboard-copy-icon m-2">
                                                <path fill-rule="evenodd"
                                                      d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path>
                                                <path fill-rule="evenodd"
                                                      d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
                                            </svg>
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
                                                <path fill-rule="evenodd"
                                                      d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
                                            </svg>
                                        </clipboard-copy>
                                    </div>
                                </div>
                                <p dir="auto">Modify the settings included inside the ".env" file as necessary. The
                                    program is configured to respond to queries from
                                    any domain by acting as a proxy and forwarding them to the "example.com" website.
                                    Replace "<a href="https://www.example.com" rel="nofollow">www.example.com</a>" in
                                    the.env
                                    file with a new URL, and all future queries will reflect the change. After serving
                                    the website on localhost or any other
                                    domain, go to <a href="http://localhost/app" rel="nofollow">http://localhost/app</a>
                                    and enter the login username 'yxorP' and the password 'yxorP'. This will allow you
                                    to
                                    configure the application to direct traffic from a given domain to a specific
                                    website. After gaining access to the
                                    admin, choose "sites" and clone the example website so that its settings may be
                                    modified.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/181399824-25abab85-0533-4c8f-9b28-5df8bcbca515.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/181399824-25abab85-0533-4c8f-9b28-5df8bcbca515.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179234863-ce04a562-df34-40f6-9919-043de73b76fe.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179234863-ce04a562-df34-40f6-9919-043de73b76fe.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <h2 dir="auto"><a id="user-content-technical-issue-and-assistance" class="anchor"
                                                  aria-hidden="true" href="#technical-issue-and-assistance">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>Technical Issue and Assistance
                                </h2>
                                <h3 dir="auto"><a
                                        id="user-content-the-program-is-plug-and-play-and-works-properly-out-of-the-box-the-following-issues-have-been-noted-with-the-application-could-be"
                                        class="anchor" aria-hidden="true"
                                        href="#the-program-is-plug-and-play-and-works-properly-out-of-the-box-the-following-issues-have-been-noted-with-the-application-could-be">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>The program is "plug and play" and works properly out of the box; the following
                                    issues have been noted with the application could be:
                                </h3>
                                <ul dir="auto">
                                    <li>
                                        <p dir="auto">Verify that the computer has been outfitted with all of the
                                            necessary PHP extensions, such as the following:</p>
                                        <ul dir="auto">
                                            <li>PHP Pdo mod, and this is for the sqlite database 'apt install
                                                php8.1-common'
                                            </li>
                                            <li>PHP Intl mod, this is for puny domain names, Punycode or IDN, or install
                                                it with 'php-intl' if you want to use it
                                                with IDN.
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p dir="auto">You need to check that the "./app" submodule was properly
                                            retrieved; the directory should already be present at the
                                            top level of the project and have some information. If the directory is not
                                            there, you may quickly initialize the
                                            submodule by entering "git submodule init" into the terminal.</p>
                                    </li>
                                    <li>
                                        <p dir="auto">Ensure that the x cache folders that can be found in
                                            "./app/storage/cache" and "./inc/cache." are able to have their
                                            contents written to. Either the command "chmod 775./app/storage/cache" or
                                            the command "chown root:
                                            ./app/storage/cache" may be used to make the files readable again.</p>
                                    </li>
                                </ul>
                                <p dir="auto">If you have completed all of these steps, you should be experiencing no
                                    difficulty.</p>
                                <p dir="auto">However if you are still experiencing problems, you will likely need to
                                    contact a developer or file a request for help
                                    on github's issue tracker for this project.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/diagrams.png"><img
                                            src="https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/diagrams.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/177685870-385a203b-9654-4c7b-b3e7-00c725d3fa51.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/177685870-385a203b-9654-4c7b-b3e7-00c725d3fa51.png"
                                            alt="image" style="max-width: 100%;"></a>
                                    <a target="_blank" rel="noopener noreferrer"
                                       href="https://user-images.githubusercontent.com/6468571/179236073-ffd7da37-258d-4cb5-bd6d-2bb975cd6e3b.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179236073-ffd7da37-258d-4cb5-bd6d-2bb975cd6e3b.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <h3 dir="auto"><a
                                        id="user-content--batteries-included-plug--play-curl--composer-optional-proxy-as-a-service-multi-tenant-multi-threaded-with-cache--article-spinner"
                                        class="anchor" aria-hidden="true"
                                        href="#-batteries-included-plug--play-curl--composer-optional-proxy-as-a-service-multi-tenant-multi-threaded-with-cache--article-spinner">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>
                                    <g-emoji class="g-emoji" alias="battery"
                                             fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f50b.png">
                                        🔋
                                    </g-emoji>
                                    Batteries Included: Plug &amp; Play [CURL + Composer Optional], Proxy as a Service,
                                    Multi-tenant, Multi-Threaded, with Cache &amp; Article Spinner.
                                </h3>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/178638238-d67683cc-00bf-47ab-b4d1-b0fe2edc0a6d.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/178638238-d67683cc-00bf-47ab-b4d1-b0fe2edc0a6d.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">In addition to a system for content-spinning and an auto-caching engine,
                                    the website's interface is visually pleasant.
                                    Arangodb, Devnull, Dynamodb (AWS), Cassandra, Devrandom, Files, CouchBasev3,
                                    Memstatic, Firestore, Couchdb, Leveldb,
                                    Mongodb, Memcache(d),Predis, Sqlite, Redis, Wincache, Sssb, and Zend Disk Cache are
                                    among the available cache drivers.
                                    Integrating the two most efficient web proxy applications enhances performance. This
                                    self-service proxy engine supports
                                    several tenants with little performance loss by combining an attractive flat-file
                                    web interface with a bespoke
                                    multi-threaded caching layer and a very effective thesaurus article spinner with a
                                    minimum vocabulary of 10,000 words.
                                    In addition to an integrated cache management system and a web-based cache
                                    management system, the proxy is modular or
                                    plugin-based. Internet-based graphical user interface (GUI) monitoring and analytics
                                    (GUI). By using a custom-built
                                    content spinning engine, the system is able to "enhance" (or "spin") information
                                    with little performance loss (10,000+
                                    thesaurus/dictionary items) and without sacrificing quality.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/Idna.png"><img
                                            src="https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/Idna.png"
                                            alt="image" style="max-width: 100%;"></a>
                                    <a target="_blank" rel="noopener noreferrer"
                                       href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157188599-5fdfd399-b340-434e-b80b-ca356f8ad8ab.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157188599-5fdfd399-b340-434e-b80b-ca356f8ad8ab.png"
                                            alt="image" style="max-width: 100%;"></a>
                                    <a target="_blank" rel="noopener noreferrer"
                                       href="https://user-images.githubusercontent.com/6468571/179237789-b543c7c4-929a-47d4-93cf-eb11a16d5faf.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179237789-b543c7c4-929a-47d4-93cf-eb11a16d5faf.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <h3 dir="auto"><a
                                        id="user-content-if-you-want-a-versatile-management-interface-that-isnt-flexible-and-replaceable-the-admin-back-end-is-fantastic"
                                        class="anchor" aria-hidden="true"
                                        href="#if-you-want-a-versatile-management-interface-that-isnt-flexible-and-replaceable-the-admin-back-end-is-fantastic">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>If you want a versatile management interface that isn't flexible and
                                    replaceable, the admin back-end is fantastic.
                                </h3>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179237020-fda021a1-5554-4fc6-8f28-5f09d3d5cb19.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179237020-fda021a1-5554-4fc6-8f28-5f09d3d5cb19.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">Implementation is the most efficient approach to use the offered
                                    information. Admin is a good option to investigate if
                                    you need to manage a large number of devices or require a content management
                                    interface for static site builders. Both of
                                    these scenarios need cautious admin operation. If any of these apply to your
                                    situation, you should give them special
                                    consideration. Each of these occurrences happens sometimes. Construct whole new
                                    apps, then provide Admin access to them
                                    so it can feed them content.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/174488292-66e75484-d57b-472f-8921-661d09387727.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/174488292-66e75484-d57b-472f-8921-661d09387727.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">The headless admin is displayed with an API-first layout that prioritizes
                                    and hierarchically arranges data. This
                                    separation between client-side consumption and management of information and
                                    server-side administration of material
                                    should simplify the publishing process. The admin is limited to the tasks required
                                    to maintain back-end content. Its
                                    fundamental objective is to distribute structured content across several media via a
                                    simple application programming
                                    interface, as opposed to depending on the transmission of data through individual
                                    web pages.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/174488463-767e2f7a-8409-445b-b7e8-ed45d0965a89.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/174488463-767e2f7a-8409-445b-b7e8-ed45d0965a89.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/181399920-b5125e96-f7d6-481b-8a87-25eb482c98fd.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/181399920-b5125e96-f7d6-481b-8a87-25eb482c98fd.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179238514-b5df4a1f-a5cd-44d8-a3a5-fa59a2d5b34c.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179238514-b5df4a1f-a5cd-44d8-a3a5-fa59a2d5b34c.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">Manage flexible content models. Despite the existence of accessible
                                    content models, none have been developed before. You
                                    will be solely responsible for developing the content model required for this
                                    method. A user interface free of
                                    extraneous elements and clutter. Admin provides not just an easy user interface, but
                                    also one that is continuously
                                    updated.</p>
                                <p dir="auto">You may use the system in any way you see appropriate, so long as you
                                    adhere to the set requirements. There is just one
                                    system in place. Utilize a straightforward application programming interface to get
                                    access to your content (
                                    API).
                                    <br><br></p>
                                <hr>
                                <br>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/181399970-68a109ad-2ec9-4f25-bad7-0276f6fa9af3.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/181399970-68a109ad-2ec9-4f25-bad7-0276f6fa9af3.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179238576-4f1e7050-7f2a-4384-8cd8-9b9a092693fb.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179238576-4f1e7050-7f2a-4384-8cd8-9b9a092693fb.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/178638648-57afc681-e222-4401-a1c6-a6c8812dd624.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/178638648-57afc681-e222-4401-a1c6-a6c8812dd624.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <ul dir="auto">
                                    <li>
                                        <p dir="auto">You are free to come up with the most creative arrangement you are
                                            capable of conceiving since the display does not
                                            have any restrictions of any kind, giving you the opportunity to do so.</p>
                                    </li>
                                    <li>
                                        <p dir="auto">As a consequence of the potential to make content just once and
                                            then use it across the board, it is possible to
                                            produce material for a substantial number of various distribution channels
                                            at the same time. These channels include
                                            television, radio, the internet, and mobile devices.</p>
                                    </li>
                                    <li>
                                        <p dir="auto">Content that can be easily resized to suit numerous screen sizes
                                            without suffering a degradation in quality and that
                                            can be rapidly changed to match a number of screen sizes</p>
                                    </li>
                                    <li>
                                        <p dir="auto">Capable of functioning appropriately on all of the various devices
                                            that you use, in addition to the microsites, in the
                                            event that you make use of them.</p>
                                    </li>
                                    <li>
                                        <p dir="auto">The basic minimal amount of knowledge and experience that is
                                            necessary to be considered qualified for the position</p>
                                    </li>
                                    <li>
                                        <p dir="auto">Incorporations that are not just fast, but they are also simple
                                            and straightforward to comprehend</p>
                                    </li>
                                    <li>
                                        <p dir="auto">Creating effective lines of communication with every facet of life
                                            is an imperative need that must be met.</p>
                                    </li>
                                </ul>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/174488424-88456e97-539c-4ec2-918b-fc59be5be8da.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/174488424-88456e97-539c-4ec2-918b-fc59be5be8da.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/177671919-1584593a-cfcc-476a-93ce-c1a65e81de92.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/177671919-1584593a-cfcc-476a-93ce-c1a65e81de92.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/157188653-bde1f08c-27ee-4eb8-90f7-69d1e60aa949.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157188653-bde1f08c-27ee-4eb8-90f7-69d1e60aa949.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">You may build static flat file versions of your original webpages by
                                    utilizing yxorP to mirror your websites, supplying
                                    mirrored or cloned copies of those websites, and then giving the mirrored or cloned
                                    copies of those websites as static
                                    flat file variants of your original webpages. This is feasible by using yxorP to
                                    mirror your websites.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <h1 dir="auto"><a id="user-content--cache" class="anchor" aria-hidden="true"
                                                  href="#-cache">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>
                                    <g-emoji class="g-emoji" alias="fire"
                                             fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f525.png">
                                        🔥
                                    </g-emoji>
                                    Cache
                                </h1>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/181400170-4d132264-d331-4342-8a8a-8c7f1fd66d62.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/181400170-4d132264-d331-4342-8a8a-8c7f1fd66d62.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179238649-d6a11606-e6b2-4137-b67c-332497969087.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179238649-d6a11606-e6b2-4137-b67c-332497969087.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">The cached information is made accessible to customers through a Web
                                    proxy. These items may include anything that is
                                    available through the Internet. This category may include articles, images, and
                                    files. Internet users may now get the
                                    required information far faster, and they are no longer directly in competition with
                                    other activities for available
                                    bandwidth.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/178638714-b7a75c9d-eec0-4831-aced-45a3da6424a2.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/178638714-b7a75c9d-eec0-4831-aced-45a3da6424a2.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">When you load your websites utilizing caching, you not only reduce the
                                    likelihood that the loading time will increase,
                                    but you also reduce the server strain caused by your actions. Consequently, the time
                                    required for online pages to load
                                    will decrease with time.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <h1 dir="auto"><a id="user-content--firewall" class="anchor" aria-hidden="true"
                                                  href="#-firewall">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>
                                    <g-emoji class="g-emoji" alias="name_badge"
                                             fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f4db.png">
                                        📛
                                    </g-emoji>
                                    Firewall
                                </h1>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/181400140-a1dde886-c186-4fbc-bd70-31d6af46baa7.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/181400140-a1dde886-c186-4fbc-bd70-31d6af46baa7.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179238707-e5082057-6373-4ccf-8cff-7a2b3acb8799.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179238707-e5082057-6373-4ccf-8cff-7a2b3acb8799.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">All network access requests are continually monitored and filtered by a
                                    firewall, while proxy servers only provide the
                                    former role. This is the most significant distinction between the two security
                                    techniques. This is the most notable
                                    distinction between the two kinds of used safety measures. By emphasizing this
                                    contrast, the two unique types of
                                    security measures may be distinguished most clearly from one another.</p>
                                <p dir="auto">A proxy server connects the user's local computer to the server, allowing
                                    it to receive data on the user's behalf. This
                                    connection gives the local computer of the user access to the server. Due to these
                                    operations, the proxy server acts as
                                    an intermediate between the client and the server. Access should never be allowed
                                    unless specifically permitted by the
                                    appropriate authorities.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/178638799-eed7c7ae-0bc6-4fc8-9403-68caf71d182b.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/178638799-eed7c7ae-0bc6-4fc8-9403-68caf71d182b.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">To defend your websites against distributed denial of service attacks and
                                    other sorts of attacks, you must configure a
                                    virtual firewall behind your proxy server. You will be safeguarded against
                                    website-based assaults in general if you
                                    follow these steps to their logical conclusion.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <h1 dir="auto"><a id="user-content--iframe" class="anchor" aria-hidden="true"
                                                  href="#-iframe">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>
                                    <g-emoji class="g-emoji" alias="white_square_button"
                                             fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f533.png">
                                        🔳
                                    </g-emoji>
                                    iFrame
                                </h1>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/181400194-5e6aec69-5d77-4808-bd81-d5388774e1f2.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/181400194-5e6aec69-5d77-4808-bd81-d5388774e1f2.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179238874-b179f501-5270-448f-8b9a-7b79d5627a2a.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179238874-b179f501-5270-448f-8b9a-7b79d5627a2a.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">The CORS Proxy API will use many backend technologies to fulfill all of
                                    your requests for third-party-controlled
                                    resources. This is required for the API to fulfill your requests. The sole
                                    requirement of the CORS Proxy API endpoint is
                                    that you provide the request body together with all client-requested request data.
                                    After receiving and processing your
                                    request, CORS Proxy will promptly return it to you using an efficient and effective
                                    method.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/178638893-c3dd1cef-48ae-490e-b80c-66b1eeb84b99.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/178638893-c3dd1cef-48ae-490e-b80c-66b1eeb84b99.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">Although it is feasible to use iframing services without CORS, doing so is
                                    discouraged. It has been said that the
                                    behavior in question, although being plausible and "not suggested but attainable,"
                                    it is "not advised but possible."</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <h1 dir="auto"><a id="user-content--load-balancing" class="anchor" aria-hidden="true"
                                                  href="#-load-balancing">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>
                                    <g-emoji class="g-emoji" alias="trident"
                                             fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f531.png">
                                        🔱
                                    </g-emoji>
                                    Load-balancing
                                </h1>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/181400239-a063fac7-7204-453f-b1b2-1c66fda109b8.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/181400239-a063fac7-7204-453f-b1b2-1c66fda109b8.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179238923-a6e8d869-8c73-4f45-be4d-866c18002269.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179238923-a6e8d869-8c73-4f45-be4d-866c18002269.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">TCP Proxy Load Balancing is a method that allows users from many regions
                                    of the world to share a single IP address. The
                                    TCP proxy load balancer is accountable for automatically routing traffic to the
                                    geographically nearest backends. TCP
                                    Proxy Load Balancing may operate as a global load balancing service when the Premium
                                    Tier is applied. Either a load
                                    balancer or a Web proxy server is required when implementing in-memory replication
                                    of client session information. Both
                                    options cannot be used together. This is done so that all domain-based applications
                                    may be accessed through a single URL
                                    for external clients.</p>
                                <div dir="auto">
                                    <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                     href="https://user-images.githubusercontent.com/6468571/178639159-0556cdfa-b102-4e7b-bda7-7b79d91342ca.png"><img
                                                src="https://user-images.githubusercontent.com/6468571/178639159-0556cdfa-b102-4e7b-bda7-7b79d91342ca.png"
                                                alt="image" style="max-width: 100%;"></a></p>
                                </div>
                                The installation of cloned copies of your website on several additional servers, each of
                                which is connected to a
                                load-balancing system, is one method for achieving this objective. There are several
                                other approaches that might
                                possibly be used in this operation. Using a cluster of servers is a potential
                                alternative method that might be utilized
                                to execute this assignment effectively.
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <h1 dir="auto"><a id="user-content--allways-online" class="anchor" aria-hidden="true"
                                                  href="#-allways-online">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>
                                    <g-emoji class="g-emoji" alias="hourglass"
                                             fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/231b.png">
                                        ⌛
                                    </g-emoji>
                                    Allways-online
                                </h1>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/181400284-7da9dab5-6953-4f6d-a119-348c2b962ebc.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/181400284-7da9dab5-6953-4f6d-a119-348c2b962ebc.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179239125-b7142619-a9ae-4ae0-b258-a845f53b4515.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179239125-b7142619-a9ae-4ae0-b258-a845f53b4515.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">It is possible to provide failover support across proxies by duplicating
                                    the first proxy server. This second proxy
                                    server is very identical to the first. This permits a smooth transfer between proxy
                                    servers in the case of a server
                                    failure. Due to their incapacity to communicate, proxy servers and peer masters must
                                    be handled by a load balancer since
                                    they are unaware of one another. Peer masters are in communication with and converse
                                    with one another. In contrast, peer
                                    masters are familiar with one another and maintain open communication lines. Various
                                    properties of peer masters and
                                    proxy servers must be accounted for.</p>
                                <div dir="auto">
                                    <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                     href="https://user-images.githubusercontent.com/6468571/178639215-2ed92212-1f09-46de-bb24-5287862c72c2.png"><img
                                                src="https://user-images.githubusercontent.com/6468571/178639215-2ed92212-1f09-46de-bb24-5287862c72c2.png"
                                                alt="image" style="max-width: 100%;"></a></p>
                                </div>
                                By keeping a proxy version of your website and switching to it whenever the actual
                                website is unavailable for
                                maintenance or changes, you can ensure that your online resources remain accessible at a
                                high level and continuously.
                                This will guarantee that your online material is constantly accessible to users. This
                                will help you to guarantee that
                                your consumers always have access to your online resources.
                                <h5 dir="auto"><a id="user-content--many-more" class="anchor" aria-hidden="true"
                                                  href="#-many-more">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>+ many more..
                                </h5>
                                <p dir="auto">The applications outlined in this page are only a sampling of the many
                                    ways in which this proxy may be implemented;
                                    further information is accessible in our discussion forum.</p>
                                <div dir="auto">
                                    <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                     href="https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/logosnag.png"><img
                                                src="https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/logosnag.png"
                                                alt="image" style="max-width: 100%;"></a></p>
                                </div>
                                By using a technique that is simple to put into action, BugSnag is able to assist in the
                                simplification of the process
                                of error monitoring in addition to the management of application stability. This is made
                                possible via the use of an easy
                                to implement approach. Because of this, BugSnag is able to maintain application
                                stability in a more efficient manner. In
                                order to be in a position to create views that are supported by facts about the process
                                of problem-solving or the
                                creation of software, it is necessary to have the ability to retain stability.
                                <p dir="auto">
                                    <animated-image data-catalyst=""><a target="_blank" rel="noopener noreferrer"
                                                                        href="https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/Snag.gif"
                                                                        data-target="animated-image.originalLink"
                                                                        hidden=""><img
                                                src="https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/Snag.gif"
                                                alt="image" style="max-width: 100%;"
                                                data-target="animated-image.originalImage" hidden=""></a>
                                        <span class="AnimatedImagePlayer" data-target="animated-image.player">
        <a data-target="animated-image.replacedLink" class="AnimatedImagePlayer-images"
           href="https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/Snag.gif" target="_blank">
          <span data-target="animated-image.imageContainer">
            <img data-target="animated-image.replacedImage" alt="image" class="AnimatedImagePlayer-animatedImage"
                 src="https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/Snag.gif">
          </span>
        </a>
        <button data-target="animated-image.imageButton" class="AnimatedImagePlayer-images" tabindex="-1"></button>
        <span class="AnimatedImagePlayer-controls" data-target="animated-image.controls">
          <button data-target="animated-image.playButton" class="AnimatedImagePlayer-button">
            <svg aria-hidden="true" focusable="false" class="octicon icon-play" width="16" height="16"
                 viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                  d="M4 13.5427V2.45734C4 1.82607 4.69692 1.4435 5.2295 1.78241L13.9394 7.32507C14.4334 7.63943 14.4334 8.36057 13.9394 8.67493L5.2295 14.2176C4.69692 14.5565 4 14.1739 4 13.5427Z">
            </path></svg>
            <svg aria-hidden="true" focusable="false" class="octicon icon-pause" width="16" height="16"
                 viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
              <rect x="4" y="2" width="3" height="12" rx="1"></rect>
              <rect x="9" y="2" width="3" height="12" rx="1"></rect>
            </svg>
          </button>
          <a data-target="animated-image.openButton" aria-label="Open in new window" class="AnimatedImagePlayer-button"
             href="https://raw.githubusercontent.com/4dboard/Proxy-yxorP/main/asset/Snag.gif" target="_blank">
            <svg aria-hidden="true" class="octicon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                 height="16">
              <path fill-rule="evenodd"
                    d="M10.604 1h4.146a.25.25 0 01.25.25v4.146a.25.25 0 01-.427.177L13.03 4.03 9.28 7.78a.75.75 0 01-1.06-1.06l3.75-3.75-1.543-1.543A.25.25 0 0110.604 1zM3.75 2A1.75 1.75 0 002 3.75v8.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 12.25v-3.5a.75.75 0 00-1.5 0v3.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-8.5a.25.25 0 01.25-.25h3.5a.75.75 0 000-1.5h-3.5z"></path>
            </svg>
          </a>
        </span>
      </span></animated-image>
                                </p>
                                <p dir="auto">Because our mobile support is widely regarded as the industry's gold
                                    standard, we are able to supply teams with
                                    diagnostic data that enables them to reproduce issues and discover solutions to them
                                    as soon as those problems begin to
                                    have an effect on the system's reliability. The reports on the different types of
                                    errors are sorted according to the
                                    underlying cause of the error, and in some situations, they are also categorized
                                    according to the impact that the error
                                    had on the business. In addition to this, we provide our clients with in-depth
                                    information on the diagnostic process.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/177672109-b49bb56d-abfe-411f-87b6-b506e47820b8.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/177672109-b49bb56d-abfe-411f-87b6-b506e47820b8.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/157188697-4c3a2b95-b40b-441c-bf6a-45c97e4e4b57.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157188697-4c3a2b95-b40b-441c-bf6a-45c97e4e4b57.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">Gitpod gives Theia developers access to a Visual Studio Code-based
                                    integrated development environment (IDE). This
                                    integrated development environment (IDE) allows the change and reorganization of
                                    code, as well as the creation of
                                    brand-new features. It offers a full operating system environment, allowing programs
                                    designed expressly for the platform
                                    to use the operating system environment and run effectively. This is possible
                                    because these apps may misuse the
                                    operating system environment. As a result, apps may now use the operating system
                                    environment. Previously, this was
                                    impossible. During the creation of these apps, the extensive capabilities of the
                                    platform were meticulously evaluated.</p>
                                <div dir="auto">
                                    <p dir="auto"><a
                                            href="https://vercel.com/new/clone?repository-url=https://github.com/4dboard/yxorP"
                                            rel="nofollow"><img
                                                src="https://camo.githubusercontent.com/5e471e99e8e022cf454693e38ec843036ec6301e27ee1e1fa10325b1cb720584/68747470733a2f2f76657263656c2e636f6d2f627574746f6e"
                                                alt="image" data-canonical-src="https://vercel.com/button"
                                                style="max-width: 100%;"></a> <a
                                            href="https://www.heroku.com/deploy/?template=https://gitpod.io/#https://github.com/4dboard/yxorP"
                                            rel="nofollow"><img
                                                src="https://camo.githubusercontent.com/6979881d5a96b7b18a057083bb8aeb87ba35fc279452e29034c1e1c49ade0636/68747470733a2f2f7777772e6865726f6b7563646e2e636f6d2f6465706c6f792f627574746f6e2e737667"
                                                alt="image"
                                                data-canonical-src="https://www.herokucdn.com/deploy/button.svg"
                                                style="max-width: 100%;"></a> <a
                                            href="https://render.com/deploy?repo=https://github.com/4dboard/yxorP"
                                            rel="nofollow"><img
                                                src="https://camo.githubusercontent.com/3cae4655a3792a1d58dcd0e3f8815853cc88543acd4eb5d8c534ea24e0e46f89/68747470733a2f2f72656e6465722e636f6d2f696d616765732f6465706c6f792d746f2d72656e6465722d627574746f6e2e737667"
                                                alt="image"
                                                data-canonical-src="https://render.com/images/deploy-to-render-button.svg"
                                                style="max-width: 100%;"></a> <a
                                            href="https://gitpod.io/#https://github.com/4dboard/yxorP"
                                            rel="nofollow"><img
                                                src="https://camo.githubusercontent.com/76e60919474807718793857d8eb615e7a50b18b04050577e5a35c19421f260a3/68747470733a2f2f676974706f642e696f2f627574746f6e2f6f70656e2d696e2d676974706f642e737667"
                                                alt="image"
                                                data-canonical-src="https://gitpod.io/button/open-in-gitpod.svg"
                                                style="max-width: 100%;"></a></p>
                                </div>
                                Visit their website to learn more about Gitpod and how the platform's capabilities are
                                always expanding. These two
                                topics are discussed on their website. Gitpods, on the other hand, are containers
                                managed by Docker and running Ubuntu
                                20.04 Focal Focal. The software installation process is hindered because the user gitpod
                                is not on the list of users
                                having sudo privileges. This raises the procedure's complexity. It is not impossible for
                                installation components that
                                need root privileges to alter the Dockerfile associated with a running instance of
                                Docker. The optimum place for various
                                activities may be the Dockerfile, the command line, or the code, depending on the
                                circumstances of the situation. As
                                Dockerfiles are only configuration files for containers, they do not need to be very
                                complicated for the vast majority
                                of operations.
                                <p dir="auto">Gitpod has a user account and home directory named gitpod and located at
                                    /home/gitpod. Despite this, only the original
                                    Docker container is preserved in the shared and shareable workspace. When a
                                    repository is cloned or rolled back, only
                                    the modifications performed in the workspace of a Gitpod are kept. "workspace"
                                    refers to the directory structure
                                    available through the route /workspace/your-workspace-name, and "workspace" refers
                                    to the directory structure.</p>
                                <div dir="auto">
                                    <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                     href="https://user-images.githubusercontent.com/6468571/152177615-421c1286-33cd-4c38-9f7b-3c486901ba81.png"><img
                                                src="https://user-images.githubusercontent.com/6468571/152177615-421c1286-33cd-4c38-9f7b-3c486901ba81.png"
                                                alt="image" style="max-width: 100%;"></a></p>
                                </div>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/177672382-fc29dfac-1dab-4192-b042-ced6a6c051e9.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/177672382-fc29dfac-1dab-4192-b042-ced6a6c051e9.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">The performance of a single web proxy surpasses that of the two original
                                    web proxies combined. Due to the combination of
                                    two of the most powerful PHP reverse proxies presently available on the Internet,
                                    this is now feasible. Combining two
                                    PHP reverse proxies resulted in the creation of this web proxy. Due to the fact that
                                    this is a brand-new project, it may
                                    be modified in the future. Your cooperation and understanding are much appreciated
                                    in this subject. You just cannot
                                    ignore this part of the issue. Using the PHP-Proxy library, which is a component of
                                    the PHP programming language and can
                                    be downloaded for free from the PHP website, you may quickly and easily configure a
                                    web proxy application for your web
                                    server. Visit their website if you are interested in learning more about PHP. Thus,
                                    you may avoid manually setting the
                                    web proxy application you use. If you are able to help financially or in any other
                                    way to the success of this project,
                                    please know that you will be shown a great degree of gratitude and will not be
                                    acting alone. I could devote more time to
                                    the growth and development of the project, therefore accelerating its overall
                                    advancement.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/153799459-4c352a2d-2bc0-413d-9048-7f94bdd7a1a5.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/153799459-4c352a2d-2bc0-413d-9048-7f94bdd7a1a5.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/157206067-a7263dc6-09e4-4350-8ad2-3bd51fc349b0.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157206067-a7263dc6-09e4-4350-8ad2-3bd51fc349b0.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/157188795-5034fd0f-d40e-4a58-9e8e-286e713fb397.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157188795-5034fd0f-d40e-4a58-9e8e-286e713fb397.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/177675918-d0dcee6e-dc9e-4ed5-b859-85d5debb0bbb.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/177675918-d0dcee6e-dc9e-4ed5-b859-85d5debb0bbb.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">Server Keep in mind that the operation of this proxy script may be
                                    compromised on websites or pages that, as mentioned
                                    above, include an excessive number of "dynamic components" or are otherwise
                                    script-heavy. This is something that must be
                                    recalled continually. This is an essential factor that must constantly be kept in
                                    mind. It is essential that you always
                                    have this in mind, thus keep it in mind at all times. Web proxy transmissions cannot
                                    be encrypted, which is a
                                    shortcoming of the technology. This topic is well recognized. This problem has
                                    persisted for a period of time that is
                                    deemed substantial. This is only one of the several unfavorable facets of the
                                    present situation. Visiting certain types
                                    of websites may need the usage of a dependable proxy server to guarantee that your
                                    web browser's HTTP requests are
                                    routed via the proper websites. To preserve the privacy of the information you enter
                                    on the websites you visit, this
                                    will be the case. This is done to guarantee that your privacy and safety are always
                                    maintained.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/153799352-ee3e60ed-6564-4633-9cc1-7acc2cfb2b50.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/153799352-ee3e60ed-6564-4633-9cc1-7acc2cfb2b50.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/157188876-61dc86c4-508f-4169-a1f2-a9582c035c2a.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157188876-61dc86c4-508f-4169-a1f2-a9582c035c2a.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/177675825-3e76629b-33f3-45fb-8358-b5a7a0eea0db.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/177675825-3e76629b-33f3-45fb-8358-b5a7a0eea0db.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">To launch the Lando development environment, you must stick to the LAMP
                                    formula. Lando is an open-source development
                                    instrument suited to all projects. You are allowed to utilize the Lando - A
                                    Liberating Dev Tool For All Your Projects
                                    project for any and all of your projects, since it enables "plug and play"
                                    functionality on PHP-compatible PCs and
                                    development in a LAMP-supported environment. This allows you to use Lando in all
                                    projects. Check this page's "Frequently
                                    Asked Questions" section if you need further information about this project.
                                    Globally, professional software engineers
                                    often apply local development and DevOps technologies; yet, the United States has
                                    the most firms specializing in these
                                    technical advances. Even when there are insufficient resources available to aid in
                                    the development process, it is still
                                    feasible to surpass the conceptual limitations imposed by the current state of
                                    affairs. This is the case despite the
                                    availability of insufficient instruments to aid in the growing process. If you can
                                    prioritize the most essential tasks,
                                    you will be able to do more while spending less time, money, and experiencing less
                                    long-term aggravation. To ease some
                                    of the stress you are now experiencing, it may be beneficial to prioritize the most
                                    essential chores.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/152177774-25482b2a-f8cd-4f19-a221-97dc29212a2d.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/152177774-25482b2a-f8cd-4f19-a221-97dc29212a2d.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">Clone this repo</p>
                                <div class="snippet-clipboard-content notranslate position-relative overflow-auto"><pre
                                        class="notranslate"><code>
git clone https://github.com/4dboard/Proxy-yxorP

</code></pre>
                                    <div class="zeroclipboard-container position-absolute right-0 top-0">
                                        <clipboard-copy aria-label="Copy"
                                                        class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay"
                                                        data-copy-feedback="Copied!" data-tooltip-direction="w" value="
git clone https://github.com/4dboard/Proxy-yxorP
" tabindex="0" role="button">
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-copy js-clipboard-copy-icon m-2">
                                                <path fill-rule="evenodd"
                                                      d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path>
                                                <path fill-rule="evenodd"
                                                      d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
                                            </svg>
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
                                                <path fill-rule="evenodd"
                                                      d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
                                            </svg>
                                        </clipboard-copy>
                                    </div>
                                </div>
                                <p dir="auto">Clone the "sample.env" to ".env" and update with the correct details.</p>
                                <div class="snippet-clipboard-content notranslate position-relative overflow-auto"><pre
                                        class="notranslate"><code>
cp ./sample.env ./.env

</code></pre>
                                    <div class="zeroclipboard-container position-absolute right-0 top-0">
                                        <clipboard-copy aria-label="Copy"
                                                        class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay"
                                                        data-copy-feedback="Copied!" data-tooltip-direction="w" value="
cp ./sample.env ./.env
" tabindex="0" role="button">
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-copy js-clipboard-copy-icon m-2">
                                                <path fill-rule="evenodd"
                                                      d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path>
                                                <path fill-rule="evenodd"
                                                      d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
                                            </svg>
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
                                                <path fill-rule="evenodd"
                                                      d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
                                            </svg>
                                        </clipboard-copy>
                                    </div>
                                </div>
                                <p dir="auto">Host the files on a PHP server</p>
                                <div class="snippet-clipboard-content notranslate position-relative overflow-auto"><pre
                                        class="notranslate"><code>
cd ./inc # Start it up lando start # List information about this app. lando info

</code></pre>
                                    <div class="zeroclipboard-container position-absolute right-0 top-0">
                                        <clipboard-copy aria-label="Copy"
                                                        class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay"
                                                        data-copy-feedback="Copied!" data-tooltip-direction="w" value="
cd ./inc # Start it up lando start # List information about this app. lando info
" tabindex="0" role="button">
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-copy js-clipboard-copy-icon m-2">
                                                <path fill-rule="evenodd"
                                                      d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path>
                                                <path fill-rule="evenodd"
                                                      d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
                                            </svg>
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
                                                <path fill-rule="evenodd"
                                                      d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
                                            </svg>
                                        </clipboard-copy>
                                    </div>
                                </div>
                                <p dir="auto">or</p>
                                <div class="snippet-clipboard-content notranslate position-relative overflow-auto"><pre
                                        class="notranslate"><code>
# Initialize a lamp recipe using the latest codeigniter version lando

init \\ --source remote \\ --remote-url https://github.com/bcit-ci/CodeIgniter/archive/3.1.10.tar.gz \\ --remote-options="--strip-components 1" \\ --recipe lamp \\ --webroot . \\ --name my-first-lamp-app

</code></pre>
                                    <div class="zeroclipboard-container position-absolute right-0 top-0">
                                        <clipboard-copy aria-label="Copy"
                                                        class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay"
                                                        data-copy-feedback="Copied!" data-tooltip-direction="w" value="
# Initialize a lamp recipe using the latest codeigniter version lando

init \\ --source remote \\ --remote-url https://github.com/bcit-ci/CodeIgniter/archive/3.1.10.tar.gz \\ --remote-options=&quot;--strip-components 1&quot; \\ --recipe lamp \\ --webroot . \\ --name my-first-lamp-app
" tabindex="0" role="button">
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-copy js-clipboard-copy-icon m-2">
                                                <path fill-rule="evenodd"
                                                      d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path>
                                                <path fill-rule="evenodd"
                                                      d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
                                            </svg>
                                            <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                                                 width="16" data-view-component="true"
                                                 class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
                                                <path fill-rule="evenodd"
                                                      d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
                                            </svg>
                                        </clipboard-copy>
                                    </div>
                                </div>
                                <p dir="auto">For more information please see: <a
                                        href="https://docs.lando.dev/config/lamp.html" rel="nofollow">https://docs.lando.dev/config/lamp.html</a>
                                </p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/157189458-e55e96dd-1faf-4fdf-8c63-f98fc5eab426.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157189458-e55e96dd-1faf-4fdf-8c63-f98fc5eab426.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/177675740-33ed816f-4206-4ea3-b1e3-abdc45e04db3.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/177675740-33ed816f-4206-4ea3-b1e3-abdc45e04db3.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">When it comes to software updates, the alterations that are made are most
                                    likely going to be made to the application's
                                    dependant packages rather than the program itself; for instance, the bulk of the
                                    modifications are going to be made to
                                    the php-proxy package rather than to the program itself.</p>
                                <h4 dir="auto"><a id="user-content-env" class="anchor" aria-hidden="true" href="#env">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>.env
                                </h4>
                                <p dir="auto">This file will be loaded into the Config /** * {@inlinetag} * this is @not
                                    a standardtag - must begin a line. *
                                    this is a valid {@inlinetag} also * @standardtag */ class at the global level.</p>
                                <h4 dir="auto"><a id="user-content-plugins" class="anchor" aria-hidden="true"
                                                  href="#plugins">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>/plugins/
                                </h4>
                                <p dir="auto">Users are strongly encouraged to create their own plugins in this
                                    subdirectory, which may be loaded automatically from
                                    the root directory. This subfolder is located inside the root directory, which
                                    contains all other subfolders. In
                                    addition, these plugins may be manually installed on the system. The proxy, which
                                    includes a number of built-in plugins,
                                    has some limits, and users are strongly encouraged to create their own plugins to
                                    maximize the number of available
                                    customization choices. This is due to the proxy's incorporation of several plugins.
                                    This is because the proxy has
                                    already installed several plugins. This is because the proxy's design already
                                    contains several plugins. Multiple plugins
                                    have been preconfigured on the proxy server for your convenience. Consider a simple
                                    example, such as the "
                                    /plugins/TestPlugin.php" text file. This file may be located in the plugins
                                    directory and is positioned inside it.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/152181962-33e4e658-5fbc-4b2d-9366-7147e9fabe65.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/152181962-33e4e658-5fbc-4b2d-9366-7147e9fabe65.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/152181058-6446dd76-3012-4e9f-b05a-7d86ca5d0872.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/152181058-6446dd76-3012-4e9f-b05a-7d86ca5d0872.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/157206427-04af776e-d516-4fc3-b0ca-2c2cbc0f44cc.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157206427-04af776e-d516-4fc3-b0ca-2c2cbc0f44cc.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/177675573-c9df68a1-75e6-445a-9432-c0627b0e98a5.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/177675573-c9df68a1-75e6-445a-9432-c0627b0e98a5.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">Utilize your web browser to go to the root directory of the project. The
                                    next step is account registration, followed by
                                    login. yxorP is Composer-compatible and supports databases, PHP, and CURL. Given
                                    that yxorP is operating as their proxy,
                                    alterations are permissible. Admin controls the PHAR (PHP archive) binary version of
                                    proxies, which is used by many
                                    websites. The yxorP web proxy, which permits user experience customisation, is
                                    commercially available and deployable.
                                    However, a plugin-based architecture and event-driven design are required.
                                    Expandable, customisable. YxorP offers the
                                    industry's most potent graphical back-end content management system interface. When
                                    a request is made, the hostname will
                                    be utilized to get site-specific information from the system's backend. modified.
                                    Occasionally, specialized engines are
                                    used to recreate website content. Any adjustments you make to the page are
                                    automatically saved. The memory-based cache
                                    is about 500 times more efficient than the flat-file cache. Memcache and Redis are
                                    both caching technologies. Avoiding
                                    serialization may increase the efficiency of cache processing. After receiving a
                                    software upgrade, Snag will soon be
                                    able to handle yxorP. This problem has been resolved, therefore the upgrading may
                                    continue without incident. Due to the
                                    application's interoperability with other systems and error tracking, the logging
                                    must be adjusted.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/152181949-99b9aaa6-586e-4f64-826d-ec7616535d1c.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/152181949-99b9aaa6-586e-4f64-826d-ec7616535d1c.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/157189005-b1eb3398-be00-47a3-825d-c13a90258fc2.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157189005-b1eb3398-be00-47a3-825d-c13a90258fc2.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/177675529-46d43bff-1721-4371-9634-0a6c9c12f230.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/177675529-46d43bff-1721-4371-9634-0a6c9c12f230.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto">Before pull requests may be sent to the production environment, they must
                                    be reviewed and approved by the development
                                    team. This must be completed prior to implementing any pull requests. This need must
                                    be met before pull requests may be
                                    implemented, since it is a prerequisite. To debate the suggested modifications to
                                    the document, you must create a new
                                    issue with the title of the primary discussion subject. Then, and only then, may you
                                    specify the modifications you want
                                    to implement. Then you may negotiate the required revisions. Then you will be able
                                    to accomplish the essential life
                                    changes. After that, you will finally be able to discuss the desired life
                                    enhancements. Please ensure that all tests are
                                    up-to-date so the results may be interpreted as precisely as possible. We cannot
                                    adequately convey our appreciation for
                                    your assistance and support. We are really appreciative. Please accept our profound
                                    gratitude for all you've done for
                                    us.</p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"
                                            alt="image" style="max-width: 100%;"></a><br>
                                    <a target="_blank" rel="noopener noreferrer"
                                       href="https://user-images.githubusercontent.com/6468571/157206554-6f07c153-cca7-4679-a5c7-441f88580bd4.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157206554-6f07c153-cca7-4679-a5c7-441f88580bd4.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/157189069-baae9f9f-3576-4eea-9427-58a236210541.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157189069-baae9f9f-3576-4eea-9427-58a236210541.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/177675430-db10d3c6-ca87-47e6-8327-8f9723a2d2ab.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/177675430-db10d3c6-ca87-47e6-8327-8f9723a2d2ab.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <ul class="contains-task-list">
                                    <li class="task-list-item"><label for=""></label><input type="checkbox" id=""
                                                                                            disabled=""
                                                                                            class="task-list-item-checkbox"
                                                                                            checked="">
                                        Front-end
                                    </li>
                                    <li class="task-list-item"><label for=""></label><input type="checkbox" id=""
                                                                                            disabled=""
                                                                                            class="task-list-item-checkbox"
                                                                                            checked="">
                                        Combine Proxy Engines
                                    </li>
                                    <li class="task-list-item"><label for=""></label><input type="checkbox" id=""
                                                                                            disabled=""
                                                                                            class="task-list-item-checkbox"
                                                                                            checked=""> Allow
                                        Multi-tent rendering
                                    </li>
                                    <li class="task-list-item"><label for=""></label><input type="checkbox" id=""
                                                                                            disabled=""
                                                                                            class="task-list-item-checkbox"
                                                                                            checked=""> Build
                                        Caching
                                    </li>
                                </ul>
                                <h2 dir="auto"><a id="user-content-layer" class="anchor" aria-hidden="true"
                                                  href="#layer">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>Layer
                                </h2>
                                <ul class="contains-task-list">
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Develop
                                            Multi-threading support (PHP Vanilla/Independent) + More (To be listed soon)
                                        </p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Foundation</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> API Service</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> TxT DB</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Login</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Registration
                                        </p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Admin</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Who is Online
                                        </p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Documentation
                                        </p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox">
                                            Tables</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Users</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Notes</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Tasks</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"> Chat
                                        </p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox">
                                            Notes</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Data Scheme</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> API Endpoints
                                        </p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Functions</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"> UI
                                        </p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox">
                                            Tasks</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Data Scheme</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> API Endpoints
                                        </p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Functions</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"> UI
                                        </p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"> Chat
                                        </p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"> Data
                                            Scheme</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> API Endpoints
                                        </p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Functions</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"> UI
                                        </p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox">
                                            Testing</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Versions</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox"
                                                                                   checked=""> Owners</p>
                                    </li>
                                    <li class="task-list-item">
                                        <p dir="auto"><label for=""></label><input type="checkbox" id="" disabled=""
                                                                                   class="task-list-item-checkbox">
                                            Crate details</p>
                                    </li>
                                </ul>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png"
                                            alt="img.png" style="max-width: 100%;"></a></p>
                                <h1 dir="auto"><a id="user-content-yxorP-documentation" class="anchor"
                                                  aria-hidden="true" href="#yxorP-documentation">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>yxorP Documentation
                                </h1>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179241342-da132147-a8fa-4d44-9131-7fcb1d873b57.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179241342-da132147-a8fa-4d44-9131-7fcb1d873b57.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <h4 dir="auto"><a id="user-content-classes" class="anchor" aria-hidden="true"
                                                  href="#classes">
                                        <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                             height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                        </svg>
                                    </a>Classes
                                </h4>
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/App.md"><code>App</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/Attribute.md"><code>Attribute</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/CLI.md"><code>CLI</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/ComposerAutoloaderInit00d1f9b6bf944011268c41c2b4662055.md"><code>ComposerAutoloaderInit00d1f9b6bf944011268c41c2b4662055</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/ComposerAutoloaderInit05e79f1c0a61bd31841b9c7a1b54b18c.md"><code>ComposerAutoloaderInit05e79f1c0a61bd31841b9c7a1b54b18c</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/ComposerAutoloaderInit43ee69a3007d6872663d476a71cbd862.md"><code>ComposerAutoloaderInit43ee69a3007d6872663d476a71cbd862</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/DotEnv.md"><code>DotEnv</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/FileStorage.md"><code>FileStorage</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/JsonException.md"><code>JsonException</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/JsonException.md"><code>JsonException</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/Mailer.md"><code>Mailer</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/Mailer_Message.md"><code>Mailer_Message</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/Normalizer.md"><code>Normalizer</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/PhpToken.md"><code>PhpToken</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/RedisLite.md"><code>RedisLite</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/ReturnTypeWillChange.md"><code>ReturnTypeWillChange</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/SVGSanitizer.md"><code>SVGSanitizer</code></a>
                                        </td>
                                        <td>Class SVGSanitizer</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/SimpleImageLib.md"><code>SimpleImageLib</code></a>
                                        </td>
                                        <td>A PHP class that makes working with images as simple as possible.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/UnhandledMatchError.md"><code>UnhandledMatchError</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/ValueError.md"><code>ValueError</code></a>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onCheckAction.md"><code>onCheckAction</code></a>
                                        </td>
                                        <td>Importing the wrapper class from the yxorP\app\lib\http namespace. Extending
                                            the wrapper class, which is a class that is used to wrap events.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onCompleteAction.md"><code>onCompleteAction</code></a>
                                        </td>
                                        <td>Extending the wrapper class, which is a class that allows you to hook into
                                            the request lifecycle.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onContextAction.md"><code>onContextAction</code></a>
                                        </td>
                                        <td>Extending the wrapper class, which is a class that is used to wrap the
                                            request and response objects.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onExceptionAction.md"><code>onExceptionAction</code></a>
                                        </td>
                                        <td>A class that extends the wrapper class.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onFinalAction.md"><code>onFinalAction</code></a>
                                        </td>
                                        <td>Extending the wrapper class, which is a class that allows you to hook into
                                            the request lifecycle.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onHeadersAction.md"><code>onHeadersAction</code></a>
                                        </td>
                                        <td>Extending the wrapper class.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onIncludesAction.md"><code>onIncludesAction</code></a>
                                        </td>
                                        <td>Extending the wrapper class.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onRequestAction.md"><code>onRequestAction</code></a>
                                        </td>
                                        <td>Extending the wrapper class.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onSendAction.md"><code>onSendAction</code></a>
                                        </td>
                                        <td>Extending the <code>wrapper</code> class, which is a class that is used to
                                            wrap the <code>event</code> class.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onSentAction.md"><code>onSentAction</code></a>
                                        </td>
                                        <td>Extending the <code>wrapper</code> class, which is a class that is used to
                                            wrap the <code>event</code> class.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://github.com/4dboard/Proxy-yxorP/tree/main/docs/classes/onWriteAction.md"><code>onWriteAction</code></a>
                                        </td>
                                        <td>Importing the <code>response</code> class from the <code>http</code>
                                            namespace.
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/179353295-c5b6f399-2624-4c9e-98a2-6f54869bde2b.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/179353295-c5b6f399-2624-4c9e-98a2-6f54869bde2b.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <ul dir="auto">
                                    <li><a href="https://github.com/php-curl-class/php-curl-class">PHP Curl Class</a>
                                        HTTP requests made easy PHP Curl Class makes
                                        it easy to send HTTP requests and integrate with web APIs.
                                    </li>
                                    <li><a href="https://github.com/joshdick/miniProxy">pminiProxy</a> miniProxy is a
                                        simple web proxy written in PHP that can allow you
                                        to bypass Internet content filters, or to browse the internet anonymously.
                                        miniProxy is licensed under the GNU GPL v3.
                                        miniProxy is the successor to PageForward.
                                    </li>
                                    <li><a href="https://github.com/Athlon1600/php-proxy-app">php-proxy-app</a> Web
                                        Proxy Application built on php-proxy library ready
                                        to be installed on your server
                                    </li>
                                    <li><a href="https://github.com/Athlon1600/php-proxy">php-proxy</a> A web proxy
                                        script written in PHP and built as an alternative
                                        to Glype.
                                    </li>
                                    <li><a href="https://github.com/jabbany/KnProxy">KnProxy</a> Lightweight, PHP-based
                                        Web Proxy that can utilize whatever remote
                                        connecting ablities your server has to offer. It should work out of the box. No
                                        configuration needed. For educational
                                        purposes.
                                    </li>
                                    <li><a href="https://github.com/PHProxy/phproxy">PHProxy</a> PHP based web proxy.
                                        Initially developed by whitefyre
                                    </li>
                                    <li><a href="https://github.com/k1995/glype">Glype</a> A copy of glype,web-based
                                        proxy script written in PHP
                                    </li>
                                    <li><a href="https://github.com/NicheOffice/php-web-proxy">PHP Online Web Proxy</a>
                                        Online Web Proxy Website Script Written in PHP
                                    </li>
                                    <li><a href="https://github.com/heiswayi/web-proxy-script">web-proxy-script</a>
                                        Minimalist web proxy script
                                    </li>
                                    <li><a href="https://github.com/vincentclee/glype">Glype Official</a> About Glype
                                        proxy is a free, web-based proxy script
                                        written in PHP
                                    </li>
                                    <li><a href="https://github.com/ryanmab/CensorDodge">Censor Dodge Web Proxy</a>
                                        Censor Dodge is a lightweight and customisable
                                        proxy script built on PHP. The standalone library is intended to act as an
                                        extensible system that is easily
                                        customisable with plugins and themes.
                                    </li>
                                </ul>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/157206640-0ecdb227-cc7f-46a3-8b26-b0c76ac030a5.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157206640-0ecdb227-cc7f-46a3-8b26-b0c76ac030a5.png"
                                            alt="image" style="max-width: 100%;"></a> <a target="_blank"
                                                                                         rel="noopener noreferrer"
                                                                                         href="https://user-images.githubusercontent.com/6468571/157189108-1914f60d-d58e-400a-9ced-a5d09a5d81ad.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/157189108-1914f60d-d58e-400a-9ced-a5d09a5d81ad.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a target="_blank" rel="noopener noreferrer"
                                                 href="https://user-images.githubusercontent.com/6468571/177675374-f3d170e8-fd9a-4e76-a9bf-5805bc2ce504.png"><img
                                            src="https://user-images.githubusercontent.com/6468571/177675374-f3d170e8-fd9a-4e76-a9bf-5805bc2ce504.png"
                                            alt="image" style="max-width: 100%;"></a></p>
                                <p dir="auto"><a href="https://choosealicense.com/licenses/mit/" rel="nofollow">MIT
                                        Software License for .yxorP The PHP Web-Proxy by don Pablo</a> The
                                    Massachusetts Institute of Technology (MIT) License is a permissive free software
                                    license developed in the late 1980s by
                                    the Massachusetts Institute of Technology. The MIT License was named after
                                    Cambridge, Massachusetts's Massachusetts
                                    Institute of Technology. This software license's moniker was conceived at the
                                    Massachusetts Institute of Technology in
                                    Cambridge, Massachusetts. This software license was named after the Massachusetts
                                    Institute of Technology in Cambridge,
                                    Massachusetts. It is seldom referred to as the "MIT License," a common alternative
                                    name. In addition, it is also known
                                    as "MIT." Attaching a second function to another entity is only permitted in a few
                                    circumstances. This is owing to the
                                    permissive nature of the program, which assures compliance with license agreements.
                                    This sentence provides the
                                    explanation. This issue has occurred directly as a consequence. This license is
                                    simple and basic; it is a permissive
                                    license requiring just the protection of intellectual property rights and the
                                    disclosure of licensing conditions in an
                                    open and transparent manner. This license is concise and simple. This license has no
                                    superfluous language and is concise
                                    and unambiguous. The application process for this license is simple and expedient.
                                    It is possible to transmit licensed
                                    works, adaptations, and large-scale works utilizing a variety of transmission
                                    methods and without the source code due to
                                    the nature of the works. This is due to the fact that each of these works falls
                                    under one of three categories.</p>
                            </article>
                        </div>
                    </kiss-card>

                </tab>

                <tab class="kiss-margin animated fadeIn" caption="PHP">

                    <table class="kiss-table">
                        <tbody>
                        <tr>
                            <td width="30%">Version</td>
                            <td class="kiss-color-muted"><?= phpversion() ?></td>
                        </tr>
                        <tr>
                            <td>PHP SAPI</td>
                            <td class="kiss-color-muted"><?= php_sapi_name() ?></td>
                        </tr>
                        <tr>
                            <td>System</td>
                            <td class="kiss-color-muted"><?= php_uname() ?></td>
                        </tr>
                        <tr>
                            <td>Extensions</td>
                            <td class="kiss-color-muted"><?= implode(', ', get_loaded_extensions()) ?></td>
                        </tr>
                        <tr>
                            <td>Max. execution time</td>
                            <td class="kiss-color-muted"><?= ini_get('max_execution_time') ?> sec.</td>
                        </tr>
                        <tr>
                            <td>Memory limit</td>
                            <td class="kiss-color-muted"><?= ini_get("memory_limit") ?></td>
                        </tr>
                        <tr>
                            <td>Upload file size limit</td>
                            <td class="kiss-color-muted"><?= ini_get("upload_max_filesize") ?></td>
                        </tr>
                        <tr>
                            <td>Realpath Cache</td>
                            <td class="kiss-color-muted"><?= ini_get("realpath_cache_size") ?>
                                / <?= ini_get("realpath_cache_ttl") ?> (ttl)
                            </td>
                        </tr>
                        <tr>
                            <td>System temporary directory</td>
                            <td class="kiss-color-muted"><?= sys_get_temp_dir() ?></td>
                        </tr>
                        <tr>
                            <td>OPCache</td>
                            <td><span
                                    class="kiss-badge kiss-badge-outline kiss-color-<?= (ini_get("opcache.enable") ? 'success' : 'danger') ?>"><?= (ini_get("opcache.enable") ? 'Enabled' : 'Disabled') ?></span>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                </tab>

                <?php if ($this->helper('acl')->isSuperAdmin()): ?>
                    <tab class="kiss-margin animated fadeIn" caption="<?= t('Env') ?>">

                        <table class="kiss-table">
                            <tbody>
                            <?php foreach (getenv() as $key => $value): ?>
                                <tr>
                                    <td width="30%" class="kiss-size-small">
                                        <div class="kiss-size-xsmall"><?= $key ?></div>
                                    </td>
                                    <td class="kiss-color-muted">
                                        <div class="kiss-size-xsmall"><?= $value ?></div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>

                    </tab>
                <?php endif ?>

            </kiss-tabs>

        </template>

        <script type="module">

            export default {}
        </script>
    </vue-view>
</kiss-container>
