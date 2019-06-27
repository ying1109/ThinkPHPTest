<?php
return array(
    //'配置项'=>'配置值'
    'APP_GROUP_LIST' =>'Admin,App',
    'DEFAULT_GROUP'  =>'App',

    /* 数据库设置 */
    'DB_TYPE'               => 'mysql',     // 数据库类型

    'DB_HOST'               => 'localhost', // 服务器地址或者127.0.0.1
    'DB_NAME'               => 'my',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => 'root',          // 密码

    // 'DB_HOST'               => '120.24.154.87', // 服务器地址
    // 'DB_NAME'               => 'qqs',          // 数据库名
    // 'DB_USER'               => 'test',      // 用户名
    // 'DB_PWD'                => 'test',          // 密码

    'DB_PORT'               => 3306,        // 端口
    // 'DB_PREFIX'             => '',    // 数据库表前缀
    'DB_SUFFIX'             => '',          // 数据库表后缀
    'DB_FIELDTYPE_CHECK'    => false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       => true,        // 启用字段缓存
    'DB_CHARSET'            => 'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        => 0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        => false,       // 数据库读写是否分离 主从式有效

);