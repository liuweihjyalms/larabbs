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