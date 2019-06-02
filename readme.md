<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1400 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 代码生成器
 $ composer require "summerblue/generator:~1.0" --dev

php artisan make:scaffold Projects --schema="name:string:index,description:text:nullable,subscriber_count:integer:unsigned:default(0)"

## 页面调优 性能隐患 安装 Debugbar
 $ composer require "barryvdh/laravel-debugbar:~3.2" --dev

生成配置文件，存放位置 config/debugbar.php：
$ php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"

config/debugbar.php，将 enabled 的值设置为： 'enabled' => env('APP_DEBUG', false),

## 导航的 Active 状态

 使用 Composer 安装 hieu-le/active： $ composer require "hieu-le/active:~3.5"

## 编辑器优化
Simditor 是 tower.im 团队的开源编辑器。[编辑器下载](https://github.com/mycolorway/simditor/releases/download/v2.3.6/simditor-2.3.6.zip)
 
将下载的 simditor.css 放置于 resources/editor/css 文件夹
将 hotkeys.js, module.js, simditor.js, uploader.js 四个文件放置于 resources/editor/js 文件夹中
- [文档](https://simditor.tower.im/docs/doc-config.html#anchor-upload) 

## HTMLPurifier for Laravel 5
安装 HTMLPurifier for Laravel 5
 $ composer require "mews/purifier:~2.0"

配置 
 $ php artisan vendor:publish --provider="Mews\Purifier\PurifierServiceProvider"

## 安装依赖 Guzzle
Guzzle 库是一套强大的 PHP HTTP 请求套件，我们使用 Guzzle 的 HTTP 客户端来请求 百度翻译 接口。
 $ composer require "guzzlehttp/guzzle:~6.3"

## 安装依赖 PinYin
是一套优质的汉字转拼音解决方案。我们使用 PinYin 来作为翻译的后备计划，当百度翻译 API 不可用时，程序会自动使用 PinYin 汉字转拼音方案来生成 Slug
- $ composer require "overtrue/pinyin:~3.0"

## 使用队列
- $ composer require "predis/predis:~1.1"
- env文件 QUEUE_CONNECTION=redis
- 失败任务
有时候队列中的任务会失败。Laravel 内置了一个方便的方式来指定任务重试的最大次数。当任务超出这个重试次数后，它就会被插入到 failed_jobs 数据表里面。我们可以使用 queue:failed-table 命令来创建 failed_jobs 表的迁移文件：
- $ php artisan queue:failed-table
- 生成任务类
- 使用以下 Artisan 命令来生成一个新的队列任务：
- $ php artisan make:job TranslateSlug
- 开始之前，我们需要在命令行启动队列系统，队列在启动完成后会进入监听状态
- $ php artisan queue:listen

## 队列监控 Horizon
- $ composer require "laravel/horizon:~3.1"
- 安装完成后，使用 vendor:publish Artisan 命令发布相关文件：
- $ php artisan vendor:publish --provider="Laravel\Horizon\HorizonServiceProvider"
- 分别是配置文件 config/horizon.php 和存放在 public/vendor/horizon 文件夹中的 CSS 、JS 等页面资源文件。
- 至此安装完毕，浏览器打开 http://loaclhost/horizon 访问控制台：
- Horizon 是一个监控程序，需要常驻运行，我们可以通过以下命令启动：
- $ php artisan horizon
- 安装了 Horizon 以后，我们将使用 horizon 命令来启动队列系统和任务监控，无需使用 queue:listen
- 线上部署须知
- 使用 Supervisor 进程工具进行管理，配置和使用请参照 [文档 进行配置](https://learnku.com/docs/laravel/5.8/horizon/3945#Supervisor-%E9%85%8D%E7%BD%AE)
- 每一次部署代码时，需 artisan horizon:terminate 然后再 artisan horizon 重新加载代码

## Laravel 的消息通知系统
- 通知频道是通知传播的途径，Laravel 自带的有数据库、邮件、短信（通过 Nexmo）以及 Slack。本章节中我们将使用数据库通知频道，后面也会使用到邮件通知频道。
- 准备数据库 php artisan notifications:table
- 生成通知类 php artisan make:notification TopicReplied
- 触发通知

## 用户切换工具 sudo-su
- $ composer require "viacreative/sudo-su:~1.1"
- 发布资源文件
- $ php artisan vendor:publish --provider="VIACreative\SudoSu\ServiceProvider"
- 生成：
- /public/sudo-su 前端 CSS 资源存放文件夹；
- config/sudosu.php 配置信息文件。

## 活跃用户
系统 每一个小时 计算一次，统计 最近 7 天 所有用户发的 帖子数 和 评论数，用户每发一个帖子则得 4 分，每发一个回复得 1 分，计算出所有人的『得分』后再倒序，排名前八的用户将会显示在「活跃用户」列表里。假设用户 A 在 7 天内发了 10 篇帖子，发了 5 条评论，则其得分为
- 10 * 4 + 5 * 1 = 45 
- 编写逻辑代码 app/Models/Traits/ActiveUserHelper.php
- Redis 作为缓存驱动:env CACHE_DRIVER=redis
- User 模型中使用 Trait：

## Artisan 命令
- $ php artisan make:command CalculateActiveUser --command=larabbs:calculate-active-user
- app/Console/Commands/CalculateActiveUser.php

## 计划任务
Laravel 命令调度器允许你在 Laravel 中对命令调度进行清晰流畅的定义，并且仅需要在服务器上增加一条 Cron 项目即可。调度在在 app/Console/Kernel.php 文件的 schedule 方法中定义。在该方法内包含了一个简单的例子，你可以随意增加调度到 Schedule 对象中

- 使用调度器时，我们需要修改系统的 Cron 计划任务配置信息，运行以下命令：
- $ export EDITOR=vi && crontab -e
- 复制下面这一行：
- * * * * * php /home/vagrant/Code/larabbs/artisan schedule:run >> /dev/null 2>&1
- 系统的 Cron 已经设定好了，现在 Cron 软件将会每分钟调用一次 Laravel 命令调度器，当 schedule:run 命令执行时， Laravel 会评估你的计划任务并运行预定任务。 接下来将我们注册调度任务即可：
- app/Console/Kernel.php
- php artisan cache:clear 清空我们的缓存：

## RESTful 设计风格 API

- 安全可靠，高效，易扩展。
- 简单明了，可读性强，没有歧义。
- API 风格统一，调用规则，传入参数和返回数据有统一的标准。

## 版本控制
随着业务的发展，需求的不断变化，API 的迭代是必然的，很可能当前版本正在使用，而我们就得开发甚至上线一个不兼容的新版本，为了让旧用户可以正常使用，为了保证开发的顺利进行，我们需要控制好 API 的版本。
- 将版本号直接加入 URL 中
- https://api.larabbs.com/v1
- https://api.larabbs.com/v2
- 使用 HTTP 请求头的 Accept 字段进行区分
- https://api.larabbs.com/
-- Accept: application/prs.larabbs.v1+json
-- Accept: application/prs.larabbs.v2+json
- 数据响应格式
- https://api.larabbs.com/
-- Accept: application/prs.larabbs.v1+json
-- Accept: application/prs.larabbs.v1+xml
- 调用频率限制

## 安装 DingoAPI
- composer require dingo/api
- 配置 php artisan vendor:publish --provider="Dingo\Api\Provider\LaravelServiceProvider"
- API_STANDARDS_TREE 有是三个值可选
- x 本地开发的或私有环境的
- prs 未对外发布的，提供给公司 app，单页应用，桌面应用等
- vnd 对外发布的，开放给所有用户
- 访问 v1 版本
- Accept: application/prs.larabbs.v1+json
- 访问 v2 版本
- Accept: application/prs.larabbs.v2+json

## 安装 easy-sms
- [easy-sms](https://github.com/overtrue/easy-sms)是安正超写的一个短信发送组件，利用这个组件，我们可以快速的实现短信发送功能
- composer require "overtrue/easy-sms"
- 由于该组件还没有 Laravel 的 ServiceProvider，须要封装一下。
- 然后创建一个 ServiceProvider
- config/app.php 在 providers 中增加 App\Providers\EasySmsServiceProvider::class,

## OAuth 2.0 协议
所谓的第三方登录，就是利用用户在第三方平台上已有的账号来快速完成自己应用的登录或者注册的功能，常用的协议为 OAuth 2.0，基本上每个 APP，都会集成微信，微博等第三方登录，方便用户快速的登录并开始使用。
简单的解释一下流程

- 1、客户端（app / 浏览器）将用户导向第三方认证服务器
- 2、用户在第三方认证服务器，选择是否给予客户端授权
- 3、用户同意授权后，认证服务器将用户导向客户端事先指定的 重定向URI，同时附上一个授权码。
- 4、客户端将授权码发送至服务器，服务器通过授权码以及 APP_SECRET 向第三方服务器申请 access_token
- 5、服务器通过 access_token，向第三方服务器申请用户数据，完成登录流程

## 第三方登录 （微信登录）
socialiteproviders 为 Laravel Socialite 提供了更多的第三方登录方式，基本上你需要的，都能在这里找到。这个组件方便我们完成整个 OAuth 流程，不过对于我们开发接口来说，只用到了它部分的功能。 首先找到 微信的 provider，一步步完成安装。

- composer require socialiteproviders/weixin

- 设置 EventServiceProvider
- config/services.php
'weixin' => [
    'client_id' => env('WEIXIN_KEY'),
    'client_secret' => env('WEIXIN_SECRET'),
    'redirect' => env('WEIXIN_REDIRECT_URI'),  
], 

- $accessToken = 'ACCESS_TOKEN';
- $openID = 'OPEN_ID';
- $driver = Socialite::driver('weixin');
- $driver->setOpenId($openID);
- $oauthUser = $driver->userFromToken($accessToken);

- $code = 'CODE';
- $driver = Socialite::driver('weixin');
- $response = $driver->getAccessTokenResponse($code);
- $driver->setOpenId($response['openid']);
- $oauthUser = $driver->userFromToken($response['access_token']);

- 最终服务器获取了用户在微信的用户信息，这一点很重要，无论使用上面哪种方式，都一定要保证用户数据是服务器自己通过 access_token 获取的，还有这样才能验证客户端提交数据（ code 或 access_token ）的真实性。获取到的用户数据如下
- 如果开发者拥有多个移动应用、网站应用、和公众帐号（包括小程序），可通过 unionid 来区分用户的唯一性，因为只要是同一个微信开放平台帐号下的移动应用、网站应用和公众帐号（包括小程序），用户的 unionid 是唯一的。换句话说，同一用户，对同一个微信开放平台下的不同应用，unionid 是相同的。

## 登录 API 获取 JWT 令牌(JWT)

- JWT 是 JSON Web Token 的缩写，是一个非常轻巧的规范，这个规范允许我们使用 JWT 在用户和服务器之间传递安全可靠的信息。 JWT 由头部（header）、载荷（payload）与签名（signature）组成
- JWT 最后是通过 Base64 编码的，也就是说，它可以被翻译回原来的样子来的。所以不要在 JWT 中存放一些敏感信息

- 安装 [jwt-auth](https://github.com/tymondesigns/jwt-auth)
- composer require tymon/jwt-auth:1.0.0-rc.4.1

- 安装完成后，我们需要设置一下 JWT 的 secret，这个 secret 很重要，用于最后的签名，更换这个 secret 会导致之前生成的所有 token 无效
- php artisan jwt:secret
- php artisan larabbs:generate-token 生成一个token用与测试一年过期

## API N+1 问题以及查询日志
- [laravel-query-logger](https://github.com/overtrue/laravel-query-logger)
- composer require overtrue/laravel-query-logger --dev

## 消息推送 极光推送
- [极光推送](https://www.jiguang.cn/)是我们常用的第三方推送服务商，以下简称 Jpush。Jpush 同时支持 iOS 和 Android 平台的消息推送，服务器只需要实现一套代码即可。我们先来 注册 一个 Jpush 账号。
- 安装 Jpush SDK
- composer require jpush/jpush
