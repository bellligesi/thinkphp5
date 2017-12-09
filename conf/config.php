<?php

return [
    //����ģʽ
    'app_debug'       => true,

    // ���ݿ�����
    'database'            => [
        // ���ݿ�����
        'type'            => 'mysql',
        // ���ݿ�����DSN����
        'dsn'             => '',
        // ��������ַ
        'hostname'        => '127.0.0.1',
        // ���ݿ���
        'database'        => 'think5',
        // ���ݿ��û���
        'username'        => 'root',
        // ���ݿ�����
        'password'        => 'root',
        // ���ݿ����Ӷ˿�
        'hostport'        => '3306',
        // ���ݿ����Ӳ���
        'params'          => [],
        // ���ݿ����Ĭ�ϲ���utf8
        'charset'         => 'utf8',
        // ���ݿ��ǰ׺
        'prefix'          => 'think5_',
        // ���ݿ����ģʽ
        'debug'           => true,
        // ���ݿⲿ��ʽ:0 ����ʽ(��һ������),1 �ֲ�ʽ(���ӷ�����)
        'deploy'          => 0,
        // ���ݿ��д�Ƿ���� ����ʽ��Ч
        'rw_separate'     => false,
        // ��д����� ������������
        'master_num'      => 1,
        // ָ���ӷ��������
        'slave_no'        => '',
        // �Ƿ��ϸ����ֶ��Ƿ����
        'fields_strict'   => true,
        // ���ݼ���������
        'resultset_type'  => 'array',
        // �Զ�д��ʱ����ֶ�
        'auto_timestamp'  => false,
        // ʱ���ֶ�ȡ�����Ĭ��ʱ���ʽ
        'datetime_format' => 'Y-m-d H:i:s',
        // �Ƿ���Ҫ����SQL���ܷ���
        'sql_explain'     => false,
    ],

    //��֤��
    'captcha' => [
        'imageH' => '50',
        'imageW' => '230',
    ],

    //��չ�ļ�����
    'extra_file_list' => [ APP_PATH . 'helper.php', THINK_PATH . 'helper.php'],

];